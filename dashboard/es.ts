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
  commons: {
    pay_today: "pago hoy",
    pay_yesterday: "Pago de ayer",
    pay_last30days: "Últimos 30 días de pago",
    create_a_shop: "crear una tienda",
    start_free: "Empieza gratis",
    featured_apps: "Aplicaciones destacadas",
    more_apps: "Más aplicaciones",
    my_public_profile: "Mi página de perfil público",
    product_admin: "Administración de productos",
    make_money_affiliate: "Ganar dinero",
    see_live_shop: "Ver tienda en vivo",
    see_live_product: "Ver producto en vivo",
    has_inputs: "Tiene entradas",
    main_domain: "Dominio principal",
    domains: "Dominios",
    home_page: "Página de inicio",
    google_icon_font_sample: "Muestra de fuente de Google",
    fontawesome_icon_font_sample: "Muestra de Fontawesome (V6)",
  },

  numbers: {
    infinite: "Ilimitado",
  },

  error: {
    not_fount_data: "¡Datos no encontrados!",
    license_max_limit: "¡Tu licencia alcanzó el límite!",
    no_read_access: "Sin acceso de lectura",
    no_write_access: "Sin acceso de escritura",
    no_access: "Sin acceso",
  },

  time_spans: {
    days_range: "Rango de días",
    today: "Hoy dia",
    yesterday: "El dia de ayer",
    last_7: "Los últimos 7 días",
    last_14: "últimos 14 días",
    last_30: "últimos 30 días",
    last_90: "últimos 90 días",
    custom: "Costumbre",
  },
  device_types: {
    desktop: "Escritorio",
    mobile: "Móvil",
    tablet: "Tableta",
  },

  create_website_action: "Crea tu sitio web — Es gratis",
  show_shops_action: "Lista de mis tiendas",

  // Companies:

  Youtube: "YouTube",
  Linkedin: "LinkedIn",
  Twitter: "Twitter",
  Facebook: "Facebook",
  Instagram: "Instagram",
  Reddit: "Reddit",
  Github: "GitHub",

  theme: {
    dark_mode: "Modo oscuro",
    dark_mode_description:
      "Elija esta opción si desea un fondo oscuro con color de texto blanco.",
    light_mode: "Modo de luz",
    light_mode_description:
      "Elija esta opción si desea que el fondo sea claro y el texto en color negro.",
  },

  ai: {
    remove_bg: {
      title: "Eliminar fondo",
      subtitle: "Crear fondo transparente.",
    },
    reimagine: {
      title: "Reimaginar",
      subtitle: "Crear más imágenes con fondos nuevos.",
    },
    upscale: {
      title: "Mejorar resolución",
      subtitle: "Aumentar la resolución de la imagen.",
    },
  },

  // ------------------ Pages Title ------------------
  page_titles: {
    home: "Selldone ╏ El sistema operativo comercial para empresas de rápido crecimiento",
    login: "Acceso",
    register: "Registro",
    auth_2fa: "Autenticación de 2 factores 🔐",
    academy: "Blog",
    help: "Centro de ayuda",
    price_list: "Lista de precios",
    my_stores: "Mis tiendas",
    roles: "mis roles",
    wallet: "Mi billetera",
    personal_info: "Información personal ╏ KYC",
    companies: "Mis Empresas",
    access_control: "Control de acceso",
    security_center: "Centro de Seguridad",
    gifts: {
      received: "Regalos ╏ Recibió",
      send: "Regalos ╏ Enviado",
    },
    monetization: {
      linked_accounts: "Monetización ╏ Cuentas Vinculadas",
      plans: "Monetización ╏ Plan y enlaces",
    },
    affiliate: "Afiliado",
    avocado: "Aguacate — Canal moderno de ventas sociales",
    guild: "Gremio — Canal de ventas colectivas",
    partners_login: "Socios ╏ Acceso de clientes",
  },

  /** NOT USED! */
  /* data: {
    shop: {
      users: "User",
      views: "View",
      likes: "Like",
      favorites: "Favorite",
      comments: "Comment",
      ratings: "Rating",
      wishlist: "Wishlist",
      new_visitors: "New Visitor",
      returning_visitors: "Return Visitor",
      page_views: "Page View",
      order_physical_added: "Physical Add to Cart",
      order_physical_checkout: "Physical Checkout",
      order_virtual_added: "Virtual Add to Cart",
      order_virtual_checkout: "Virtual Checkout",
      order_file_added: "File Add to Cart",
      order_file_checkout: "File Checkout",
      order_service_added: "Service Add to Cart",
      order_service_checkout: "Service Checkout",
    },
  },*/

  blank_is_all_products: "¡Deje en blanco para incluir todos los productos!",

  // ---------------------------------------------

  /** @see ShopCautionHelper **/
  cautions: {
    title:
      "Administre su negocio profesionalmente siguiendo los siguientes consejos. Siga leyendo para obtener consejos sobre cómo aumentar el margen de beneficio y más. Estamos contigo en el camino.",
    no_payment_method: {
      title: "Método de pago",
      message:
        "Debes añadir un método de pago a tu tienda.",
      action: "Pasarelas de compras",
    },
    link_account: {
      title: "Vincular cuenta",
      message:
        "Debe vincular una cuenta ({currency}) a su tienda.",
      action: "Comprar cuentas",
    },
    no_domain: {
      title: "Agregar dominio",
      message:
        "Puede conectar uno o más dominios personales a su tienda. Su sitio web se instalará en su dominio. Este proceso es rápido y fácil.",
    },
    domain_not_approved: {
      title: "Verificación de dominio",
      message:
        "Su dominio {domain} no ha sido verificado. Verifique la configuración de DNS y confirme el dominio.",
    },
    no_currency: {
      title: "Agregar moneda",
      message:
        "Debe definir al menos una moneda para su tienda.",
      action: "Gestión de divisas",
    },
    no_primary_domain: {
      title: "el dominio principal",
      message:
        "Seleccione un dominio como su dominio principal. Al hacer clic en el botón de estrella junto al nombre de dominio, puede seleccionar el dominio como el dominio principal de su tienda. Esto es fundamental para los motores de búsqueda. Tenga en cuenta que su tienda seguirá estando disponible a través de todos los dominios activos.",
    },
    shop_complete: {
      title: "Información completa",
      action: "Configuración de la tienda",
      location_msg: "Agrega tu ubicación",
      days_open_msg: "Establecer días de puertas abiertas",
      time_open_msg: "Establecer hora de apertura y cierre",
      description_msg: "Escribe una breve descripción sobre tu negocio.",
      icon_msg: "Establece el logotipo de tu tienda",
      shop_gateways_msg: "Añadir método de pago",
      socials_msg: "Agrega tus enlaces sociales",
      clubs_msg: "Establecer clubes de clientes",
      domains_msg: "Agregar dominio personalizado",
      primary_msg: "Establecer un dominio como principal",
    },
  },

  /** @see BSupportMenu **/
  support: {
    request: "Pedir soporte",

    category: "Categoría",
    title: "Apoyo",
    message:
      "Haga cualquier solicitud o pregunta. Nuestro equipo de soporte lo guiará. Le sugerimos que haga su pregunta en la página relacionada con su solicitud. Por ejemplo, si tiene una pregunta sobre la configuración del dominio, envíela a la página de configuración del dominio de su tienda.",

    close_at: "Cerrado el {date}",
    close_ticket_by_user: "Gracias, tengo la respuesta.",
  },

  /** @see SShopProductRatingView **/
  surveys: ["Muy pobre", "Pobre", "Normal", "Bueno", "Excelente"],

  /** @see SortView **/
  sort: {
    title: "Ordenar por",
    title_small: "Ordenar por..",
    nothing: "Ninguna cosa",
    most_views: "La mayoría de las vistas",
    most_likes: "Más popular",
    most_recent: "El más nuevo",
    most_sell: "Más Selldone",
    cheapest: "Lo mas barato",
    most_expensive: "Más caro",
    only_available: "Disponible",
    view_mode: {
      normal: "Normal",
      grid: "Red",
      list: "Lista",
      insta: "insta",
    },
  },

  /** {@see Helps} **/

  helps: {
    title: "Centro de ayuda Selldone",
    subtitle:
      "Bienvenido a Selldone. Si está creando una nueva tienda en línea en un sistema operativo comercial, puede encontrar más información aquí.",

    add_new_help: "Nueva ayuda",
    resources: "Recursos",

    categories: {
      Welcome: "Empezar",
      Setup: "Tienda",
      Sell: "Ventas y Marketing",
      Developer: "Desarrollar",

      Product: "Gestión de productos y categorías",
      Blog: "CMS y blogs",
      Order: "Centro de cumplimiento de pedidos",
      Channel: "Canales de venta",
      Accounting: "Contabilidad y métodos de pago",
      Incentives: "incentivos",
      Marketing: "Campañas de marketing",
      Logistic: "Logística y envío",
      Customers: "Club de clientes y segmentación",
      Page: "Páginas de destino y personalizadas",
      Access: "Personal / Administración de acceso a la API",
      Application: "Aplicaciones",
      POS: "POS",
    },
    faq: "FAQ",
    github: "Repositorio GitHub",
    admin_api_app: "Servicio web de la API de administración",
    shop_api_app: "Comprar servicio web API",
    design_kit: "Estuches de diseño",
    community: "Comunidad",
  },

  /** {@see Blogs} **/
  /** {@see InterestTopicsView} **/

  blogs: {
    title: "Blog",
    subtitle:
      "Lecciones para los negocios, la confianza y el conocimiento que necesita para crear un negocio próspero.",
    add_new_blog: "nuevo blog",
    popular: "Popular",
    topics: "Temas",
    select_topics: "Seleccione su trabajo.",
    select_job_topics: "Seleccione sus temas relacionados con el trabajo",
    select_interested_topics: "¿Qué temas te interesan?",
  },

  /** {@see ApiDocs} **/
  api: {
    title: "API e integración",
    message:
      "Una de las características clave de Selldone es proporcionar API sólidas y seguras para administrar y conectar tiendas a otros servicios, como almacenamiento, contabilidad, etc. También puede diseñar aplicaciones personalizadas y aplicaciones web para su tienda. Sin tener que preocuparse por el servidor y la gestión de datos. Simplemente use las API de dominio. Tendrás todo el proceso de gestión de usuarios, autenticación y otras funcionalidades del dominio.",
  },

  /** {@see BPageShuttle} **/
  user_dashboard: {
    title: "mi transbordador",
    subtitle: "Administre su negocio con información actualizada y perspectiva clara.",
    menu: {
      affiliate: "Afiliado",
      monetize: "Monetizar",
      gift: "Regalo",
      security: "Seguridad",
      access: "Acceso",
      business: "Empresa",
      wallet: "Cartera",
      identification: "KYC",
      stores: "Historias",
      roles: "roles",
      home: "Casa",
      expert: "Experto",
      deals: "ofertas",
      providers: "Proveedores",
    },
    shops: {
      create_new: "Crear nueva tienda",
      create_new_sub_need_initial_charge:
        "Construir la primera tienda es gratis. Probablemente una tienda sea suficiente para su negocio, pero si necesita construir más tiendas, el costo de construir una nueva tienda es de 25 $. Retiramos el monto de su cuenta de billetera.",

      menu: {
        title: "Mis tiendas",
        shops: "tiendas",
        new: "Nuevo",
      },

      accept_invite_question: "¿Aceptas esta invitación?",
      /** {@see BShopCard} **/

      shop_card: {
        menu_orders: {
          physical: "Pedidos de productos físicos",
          virtual: "Pedidos de productos virtuales",
          files: "Órdenes de archivo",
          services: "órdenes de servicio",
          subscriptions: "Pedidos de suscripciones",
        },
        status: "Estado",
        license: "Licencia",
        volume: "Espacio usado",
        expire: "Licencia expirada",
        products: "productos",
        page_views: "Puntos de vista",
        user_behavior: "Comportamiento del cliente",
        time_span: "desde {time} hasta ahora",
        finance_report: "Informe financiero",
        buys: "compras",
        payments: "Pagos",
        orders: "Pedidos",
        currency: "Divisa",
        no_payment: "¡Sin pago!",
        no_purchase: "¡Sin compra!",
      },
    },
  },

  widgets: {
    /** {@see BDashboardFeedback} **/
    overview: {
      title: "comentarios de los clientes",
      title_small: "Visión de conjunto",
      wishlist: "Lista de deseos",
      comments: "Comentarios",
      likes: "Gustos",
      favorites: "Favoritos",
      powers: "aplausos",
      views: "Puntos de vista",
      report_today: "informe de hoy",
      report_last7days: "Informe de los últimos 7 días",
      report_last30days: "Informe de los últimos 30 días",
    },
  },

  /** {@see BPageShop} **/
  admin_shop: {
    title: "Tienda",
    menu: {
      edit: "Ajustes",
      automation: "Automatización",
      application: "Aplicaciones",
      access: "Acceso",
      pages: "Paginas",
      channels: "Canales",
      classification: "Clasificación",
      marketing: "Márketing",
      customers: "Clientes",
      logistic: "Logístico",
      auditing: "Contabilidad",
      incentives: "incentivos",
      process_center: "Pedidos",
      blog: "Blog",
      products: "productos",
      shops: "tiendas",
      dashboard: "Panel",
      autopilot: "Piloto automático",
      apps: "aplicaciones",
      pos: "POS",
      seo: "SEO",
      localization: "Localización",
      crm: "CRM",
      listing: "Listado",
    },

    /** {@see BPageShopDashboard} **/
    dashboard: {
      title: "Panel de control de la tienda",
      online_staff: "Personal en línea",

      notify_referral: {
        message: "Envíe su enlace de invitación a sus amigos y obtenga vales gratis.",
        action: "Mi enlace de referencia",
      },

      /** {@see BDashboardShopTechnical} **/
      info: {
        title: "Técnico",
        subtitle: "Resumen técnico del sistema operativo de su empresa.",

        shop_name: "Nombre de tienda",
        shop_link: "enlace de la tienda",
        site_map: "mapa del sitio",
        shop_domains: "Dominios",
        shop_domains_msg: "Lista de dominios personalizados conectados.",

        home_msg:
          "Establezca la página de inicio predeterminada de su sitio web. Se puede cambiar para cada dominio personalizado.",

        add_domain: "Agregar nuevo dominio",
        currencies: "Monedas activas",
        currencies_alert: "¡Seleccione al menos una moneda para la tienda!",
        status: "Estado",
        license: "Licencia",
        expire: "Fecha de caducidad de la licencia",
        upgrade_license_action: "Actualizar a {name}",
        wage: "Tarifa",
        cpu_message:
          "La cantidad de recursos que ha adaptado al plan adquirido y los recursos que agrega a su servicio.",
        hide_domains: "Ocultar mis dominios",
        show_domains: "mostrar mis dominios",

        /** {@see BDomainsList} **/
        table: {
          primary: "Primario",
          url: "URL",
          site_map: "Mapa del sitio",
          enable: "Permitir",
          indexed: "Indexado",
          and_more: "& más..",
          auto_repair: "Reparación automática",
        },
        add_dialog: {
          title: "Configurar el dominio de la tienda",
          step1:
            "Puede definir el límite de IP del registro A para un dominio o subdominio DNS a partir de los siguientes valores:",
          step2: "Agregue un registro DNS TXT:",
          set_ip_alert:
            "Establezca el valor de IP del registro A <b>{ip}</b> .",

          input_domain: "URL de dominio",
          correct: "La configuración del dominio es correcta.",
          set_message: "Establezca el CNAME de este dominio en {cname}.",
          input_domain_message: "Ingrese el nombre de dominio sin http y https.",
          ssl_message:
            "No se preocupe por el certificado SSL para su sitio web. Selldone (beta) emitirá automáticamente esta certificación para su dominio.",
          active: "El dominio está activo",
          inactive: "El dominio está deshabilitado",
          success_message:
            "Felicitaciones, su sitio está habilitado en {domain}. Puede presentar su negocio y marca al mundo a través de este dominio.",

          delete_action: "¿Eliminar dominio?",
        },
        set_home_dialog: {
          title: "Establecer la página de inicio del dominio",
        },
        notification: {
          add_message: "Dirección de dominio agregada con éxito.",
          update_message: "El dominio se actualizó correctamente.",
          delete_domain_message: "El dominio se eliminó con éxito.",
        },
        alert: {
          title: "Eliminar dominio",
          message:
            "¿Quieres eliminar este dominio? Asegúrese de restablecer los valores de registro DNS de su dominio para evitar que otros cometan fraude.",
        },
      },

      /** {@see BDashboardShopOrders} **/
      active_orders: {
        title: "Pedidos",
        title_small:
          "Órdenes Físicas, de Archivo, Virtuales y de Servicio",
        pending_orders: "Ordenes pendientes",
        physical: "Pedidos de productos físicos",
        virtual: "Pedidos de productos virtuales",
        file: "Archivo de pedidos de productos",
        service: "Pedidos de productos de servicio",
        subscription: "Órdenes de suscripción",
      },
      /** {@see BDashboardShopProducts} **/
      products: {
        title: "Inventario",
        title_small: "Productos, Servicios, Archivos",

        total_products: "Tipos de productos totales",
      },
      /** {@see BDashboardShopFinance} **/
      finance: {
        title: "Financiero",
        title_small: "Informe financiero",
        total_30days_title: "Cantidad total de ventas",
        last_30_day: "últimos 30 días",
        pay_amount_chart_title: "Pagos",
        sell_amount_chart_title: "Ventas",
        discount_amount_chart_title: "Descuento",
        currency_convert_to: "a la moneda",
        active_currencies: "Monedas activas",
        sell_count_chart_title: "Número de ventas por variante",
        active_gateways: "Pasarela de pago activa",
        received_last_24h: "Recibido las últimas 7 horas",
        pie: {
          title: "Relación de ventas de hoy",
          no_data: "No hay venta hoy",
        },
        pay_amount: "Monto del pago",
        sell_amount: "Monto en ventas",
        discount_amount: "Importe de descuento",
        sell_count: "Recuento de ventas",
        table: {
          currency: "Divisa",
          total_sell_30days: "Ventas totales de 30 días",
          sell_daily: "Tarifa diaria de ventas",
          sell: "Rebaja",
          pay: "Pagar",
        },
      },
      /** {@see BDashboardShopCustomers} **/
      customers: {
        title: "comprar clientes",
        title_small: "Informe de conversión",
        total_customers: "Opción",
        new_customers_today: "Hoy dia",
        new_customers_week: "Los últimos 7 días",
        orders_count: "recuento de pedidos",
        days_range: "Rango de días",
        new_users: "Nuevos usuarios registrados",

        chart: {
          new_customers: "Nuevos clientes",
          customers: "Clientes totales",
        },
      },
      /** {@see BDashboardShopChannels} **/

      channels: {
        title: "Canales de adquisición",
        subtitle:
          "Tu negocio está creciendo. Aquí tienes el informe de tus canales de adquisición de clientes.",
      },

      /** {@see BDashboardShopPerformance} **/
      performance: {
        title: "Hoy dia",
        title_small: "Resumen de usuarios y ventas",
        users: "Usuarios",
        views: "Puntos de vista",
        orders: "Pedidos",
        payments: "Pagos",
        no_visitor_today: "No tuviste visitas hoy.",
      },
    },

    /** {@see BPageShopProductsList} **/
    products: {
      title: "Lista de productos",
      products_list: "volver a la lista",
      products_menu: "Gestión de productos",

      view_que_list: "Ver lista de colas",
      menu_products_list: "Lista de productos",
      menu_export: "Exportar productos",
      menu_import: "Importar productos",
      drop_import_message:
        "Suelte el archivo de lista de productos (formato CSV, XLS, XLSX) aquí para comenzar a agregar productos a granel. Asegúrese de que el archivo tenga el formato de lista de productos de Selldone.",

      menu_advanced_options: "Opciones avanzadas",
      menu_advanced_options_description:
        "Configura y gestiona esta opción para tu tienda.",

      products_rss: {
        title: "Productos RSS",
        subtitle: "Importar productos a Google, Meta, ...",
      },
      products_api: {
        title: "API de productos",
        subtitle: "Importación de productos a través de una llamada API de acceso público.",
      },
      google_sheet: {
        action: "Hoja vinculada",
        tooltip:
          "Los productos de esta tienda están vinculados a una hoja de cálculo de Google en Google Drive.",
      },
      show_deletes: {
        false_title: "Ocultar eliminado",
        false_description: "Ocultar productos eliminados.",
        true_title: "Mostrar eliminado",
        true_description: "Mostrar productos eliminados.",
      },
      show_vendors: {
        false_title: "Ocultar vendedores",
        false_description: "Mostrar solo el vendedor propietario.",
        true_title: "Mostrar vendedores",
        true_description: "Mostrar todos los vendedores, ⌘Ctrl+1",
      },
      table_mode: {
        false_title: "Modo arrastrar y soltar",
        false_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_title: "Modo tabla",
        true_description: "Sí Descripción",
      },

      show_notes: {
        false_title: "Ocultar notas",
        false_description: "Ocultar notas vacías.",
        true_title: "Notas del programa",
        true_description: "Mostrar todas las notas, ⌘Ctrl+2",
      },

      rss_dialog: {
        title: "Productos RSS",
        subtitle:
          "Utilice esta fuente RSS para mantener una lista actualizada de todos los productos.",
      },
      api_dialog: {
        title: "API de productos",
        subtitle:
          "Utilice esta fuente API para mantener actualizada su lista de productos. Proporciona una API de acceso público para obtener productos de su tienda, lo que la hace ideal para sitios web de comparación y listado de productos.",
      },

      /** {@see BProductWindowProductLarge} **/

      product_widget: {
        product_type: "Tipo de producto",
        price: "precio",
        value_added: "Comisión",
        discount: "Descuento",
        in_stock: "En stock",
        product_unit: "Unidad",
        total_sell: "Ventas totales",
        total_view: "Vistas totales",
        view_unit: "Veces",
        review_unit: "Reseñas",
      },

      /** {@see WidgetFolderCard} **/
      folder_widget: {
        products: "productos",
        products_unit: "Tipos",
        sub_categories: "Categorías",
        sub_categories_unit: "Artículos",
        views: "Puntos de vista",
        views_unit: "Veces",
      },
    },

    /** {@see BPageShopBlogs}  **/
    blogs: {
      new: "escribir nuevo",
      blogs: "Blog",

      /** {@see BPageShopBlogsList} **/
      list: {
        title: "Mis artículos",
        subtitle:
          "Escribe artículos con un moderno editor en línea para presentarte a ti mismo y a tu negocio. El contenido original es lo primero en lo que debe concentrarse al escribir una publicación de blog de alta calidad compatible con SEO.",
        waiting_message: "Recibiendo información... por favor espere",
        published: "Publicado",
        draft: "Sequía",
        private: "Privado",
        public: "Público",
        table: {
          title: "Título",
          author: "Autor",
          claps: "aplausos",
          like: "Me gusta",
          comments: "Comentarios",
          views: "Puntos de vista",
          publish_state: "Estado",
          created_at: "Fecha de creación",
          updated_at: "Última actualización",
        },
      },
    },

    /** {@see ShopPBPageShopOrdersrocessCenter} **/
    orders: {
      /** {@see BProcessCenterList} **/
      physical: {
        waiting_message: "Recibiendo información... por favor espere",
        rejected: "Rechazado",
        delivery: "Envío",
        discount: "Descuento",
        not_paid: "No pagado",

        table: {
          order_number: "Código de orden",
          order_date: "Echa un vistazo a la fecha",
          status: "último estado",
          price: "Cantidad total",
          payment_status: "Estado de pago",
        },
      },

      /** {@see BPageShopOrdersVirtual} **/
      virtual: {
        waiting_message: "Recibiendo información... por favor espere",

        discount: "Descuento",
        table: {
          order_number: "Código de orden",
          product: "Producto",
          order_date: "Fecha de Registro",
          status: "último estado",
          price: "Cantidad total",
          payment_status: "Estado de pago",
        },
      },
    },

    /** {@see BPageShopFinance} **/
    auditing: {
      menu: {
        exchange: "Intercambio",
        gateway: "Puerta",
        invoice: "Facturación",
        report: "Reporte",
        tax: "Impuesto",
        drop_shipping: "Recibos de revendedor",
        reseller_accounts: "cuentas de revendedor",
        valuations: "Valoraciones",
        customer_wallets: "Carteras de clientes",
      },

      /** {@see BPageShopFinanceBill} **/
      invoice: {
        title: "Comprar carteras vinculadas",
        subtitle:
          "Los cargos, comisiones y costos de tienda se deducen de estas cuentas de billetera.",

        title_add: "Conectar nueva cuenta de billetera",
        subtitle_add:
          "Debe crear una nueva billetera para cada moneda y conectarla a su tienda. La tarifa de servicio se retirará de esta billetera.",
        add_account: "Añadir cuenta",
        charge_account: "Cuenta de cargo",
        show_transaction: "Mostrar transacciones",

        table: {
          currency: "Divisa",
          account_number: "Número de cuenta",
          account_name: "Nombre de la cuenta",
          balance: "Equilibrio",
          free_balance: "Saldo disponible",
          actions: "Remover",
        },
        add_account_dialog: {
          title: "Conexión de la cuenta de crédito a la tienda",
          subtitle:
            "Cuando abra una cuenta de billetera con Selldone, le daremos una tarjeta de crédito virtual y una cuenta como cualquier otra tarjeta de crédito. La tarifa de venta de Selldone se deducirá de esta cuenta, pero si el saldo de su cuenta no es suficiente, se adeudará esta cantidad. Puede utilizar los servicios de Selldone tanto como necesite.",
          account_number: "Número de cuenta",
          account_number_input_message:
            "La tienda se vinculará a esta cuenta. Esta cuenta se utilizará para honorarios y costos.",
          balance: "Saldo de la cuenta",
          connect_account_to_shop: "Conectar cuenta a la tienda",
        },
        notifications: {
          connect_account_success: "Cuenta añadida con éxito.",
          delete_account_success:
            "Cuenta eliminada de la tienda con éxito.",
        },
        alert: {
          delete_account: "Desconectar cuenta",
          delete_account_message:
            "¿Quieres eliminar esta cuenta de la lista de cuentas de la tienda?",
          delete_account_action: "Borrar cuenta",
        },
        inform_charge_account: "¡Carga tu cuenta!",
        inform_charge_account_critical:
          "¡Cargue su cuenta para evitar la suspensión del servicio!",
      },

      /** {@see BPageShopFinanceExchange} **/
      exchange: {
        title: "Almacenar monedas activas",
        subtitle:
          "Los usuarios podrán seleccionar una de las monedas activas y se calcularán y mostrarán los precios de los productos. Corresponde al vendedor introducir el tipo de cambio.",
        shop_currencies_input: "Monedas activas para los usuarios",
        shop_currencies_input_error: "Seleccione al menos una moneda",
        rates: {
          title: "Tasa de cambio de moneda",
          sub_title:
            "Puede ingresar precios de productos basados en cualquiera de las monedas a continuación y los precios de los productos se calcularán automáticamente según las tasas de conversión entre sus monedas.",
          message:
            "Al ingresar los tipos de cambio entre monedas, los precios de sus productos se calcularán y actualizarán automáticamente.",
          add_new_rate: "Agregar nueva tarifa",
        },
        table: {
          waiting_receive_data: "Obteniendo información... por favor espere",
          rate_input: "Tipo de cambio",
          from: "Desde",
          to: "Para",
          exchange_rate: "Tipo de cambio",
          edit: "Editar",
          delete: "Borrar",
          auto: "Tarifa automática",
        },
        add_rate_dialog: {
          title: "Establecer tipo de cambio",
          message:
            "Tenga cuidado al ingresar la información. Los precios de sus productos se calcularán en base a las tarifas ingresadas aquí.",
          currency_from: "De moneda",
          currency_to: "a la moneda",
          exchange_rate: "Tipo de cambio",
        },
        alert: {
          title: "Eliminar tasa de conversión",
          message: "¿Desea eliminar esta tasa de conversión?",
          action: "Borrar",
        },
        notifications: {
          delete_success: "Tasa de cambio eliminada.",
          add_success: "Tipo de cambio actualizado.",
          update_success: "Almacenar monedas activas actualizadas.",
        },
      },
    }, // End of auditing

    /** {@see BPageShopLogistic} **/
    logistic: {
      /** {@see BPageShopLogisticWarehouse} **/
      warehouses: {
        title: "Almacenes",
        subtitle: "Lista de mis almacenes.",
      },
      restriction: {
        title: "Restricción de envío",
        subtitle:
          "¡Puede implementar restricciones para garantizar que solo los clientes dentro de las áreas de envío designadas puedan realizarle compras!",
        no_enable_shipping_error:
          "¡Nadie puede comprarte porque no tienes un método de envío habilitado!",
        customer_must_select_a_shipping_msg:
          "El cliente debe seleccionar un método de envío para realizar el pedido.",
        customer_can_order_without_shipping_method_msg:
          "El cliente puede realizar el pedido incluso si no se admite ningún método de envío para la ubicación seleccionada.",
        inputs: {
          restriction: {
            false_description:
              "Los clientes aún pueden realizar pedidos incluso si no han seleccionado ningún método de envío específico.",
            false_title: "Aceptar todos los pedidos",
            true_title: "Orden de aceptación restringida",
            true_description:
              "Los clientes deben elegir una opción de envío o recogida para completar su compra.",
          },
        },
      },

      warehouse_btn: "Agregar nuevo almacén",
      warehouse_btn_error:
        "Establece tu almacén, tienda u origen de tu negocio. Es vital tenerlo en el cálculo del costo de envío y en el proceso de pago.",
      no_multi_warehouse_support_message:
        "Para simplificar, esta función no está disponible en las tiendas normales.",
      size_unit: {
        title: "Unidad de tamaño",
        subtitle: "La unidad utilizada para la longitud, el ancho y la altura.",
      },
      mass_unit: {
        title: "unidad de masa",
        subtitle: "La unidad utilizada para el peso.",
      },
      distance_unit: {
        title: "Título",
        subtitle: "Subtítulo",
      },

      menu: {
        return_request: "devuelto",
        delivery: "Envío",
        inventory: "Inventario",
        warehouse: "Depósito",
        logistic_apps: "Logística",
        profiles: "Perfiles",
        includes: "Incluye",
        property_sets: "Propiedad Establecer",
        boxes: "Paquetes",
      },

      /** {@see BPageShopLogisticInventory} **/
      warehouse: {
        title: "Almacén de la tienda",
        sub_title: "Esta dirección se utiliza como origen del envío.",
        table: {
          title: "Lista de inventario",
          sub_title:
            "Lista de todos los productos de la tienda, incluidos los físicos, virtuales, archivos y servicios",
        },
      },

      /** {@see BPageShopLogisticShipping} **/
      delivery: {
        title: "Métodos de envío",

        sub_title:
          "Al establecer los valores en esta sección, se activan una variedad de métodos de envío en su tienda. En esta sección también se puede activar el método Contra Reembolso.",
        add_transportation: "Agregar transporte",

        /** {@see DeliveryFormWidget} **/
        delivery_form: {
          payment: "Opciones de pago",
          limits: "Límites",

          currency_input: "Moneda de referencia para los cálculos de costos",
          currency_input_message: "Los costos se calculan en esta moneda",
          distance_input: "Distancia recorrida desde el almacén",
          distance_input_message: "0 o -1 significa sin límite.",
          max_weight_input: "Peso máximo aceptable del paquete",
          max_weight_input_message: "0 o -1 significa sin límite.",
          max_size_input: "Dimensiones máximas del paquete",
          width: "Ancho",
          length: "Largo",
          height: "Altura",
          days_input: "Fechas de entrega disponibles",
          days_input_nodata: "Seleccione el día de entrega",
          hours_input: "Plazos de entrega disponibles",
          hours_input_nodata: "Seleccione un período de tiempo",
          vacation_input: "¿Hacéis entregas en días festivos?",

          pricing: "Calcular precio",
          const_input: "Costo fijo",
          distance_cof_input: "Coeficiente de costo por distancia",
          distance_cof_input_dim: "por {dim}",
          weight_cof_input: "Factor de costo por peso",
          weight_cof_input_dim: "por {dim}",
          price_cof_input: "Costo de envío al factor precio del producto",
          price_cof_input_message:
            "Incluye costos de seguros y otros servicios como costos COD.",
          price_cof_input_dim: "por {dim}",
          distance_weight_cof_input: "Multiplicador de costos por multiplicador de peso",
          distance_weight_cof_input_dim: "Por cada {weight} por {distance}",
          free_shipping_input: "Envío gratis",
          free_shipping_limit_input: "Costo mínimo de pedido para envío gratis",

          shipping_cost_calculation: "Cálculo del costo de envío",
          sod_true: "Obtener costo de envío en destino",
          sod_true_message:
            "Asegúrese de que su servicio de envío acepte el costo de envío en destino.",
          sod_false: "Cálculo del costo de envío automático",

          cod_input: "Soporte contra reembolso",
          cod_true: "Acepta pago contra entrega",
          cod_false: "Aceptar pago en línea solamente",
          cod_true_message: "Asegúrese de que su servicio de envío acepte COD.",

          notifications: {
            update_success: "La configuración del servicio de envío se completó correctamente.",
          },
        },
      },
    }, // End of logistic

    /** {@see BPageShopCrm} **/
    users: {
      menu: {
        customers: "Clientes",
        contact_form: "Contactos",
        faq: "FAQ",
        club: "Opción",
        report: "Reporte",
      },

      /** {@see BPageShopCrmReport} **/
      report: {
        title: "Resumen de clientes",
        sub_title: "Verá el estado en vivo de sus clientes aquí.",
        report_30days_by_time:
          "Actividad del usuario basada en fecha y hora en los últimos 30 días",
        report_30days_by_location:
          "Actividad de usuarios de geolocalización en los últimos 30 días",
      },
      /** {@see BPageShopCrmClub} **/
      club: {
        title: "club de clientes",
        sub_title:
          "Ingrese el monto de la compra mensual y anual y la moneda para activar cada nivel. Sus clientes iniciarán sesión en su club de clientes a medida que cumplan con los requisitos de compra mensual o anual.",
        item: {
          members_count: "Número de miembros",
          purchases_count: "El número de pedidos",
          monthly: "Mensual",
          annually: "Anual",
          discount_percent: "Tasa de descuento",
          discount_limit: "Límite de descuento",
        },

        edit_dialog: {
          title: "Gestión de nivel de cliente",
          currency_input: "Divisa",
          currency_input_message:
            "Las compras totales se calculan en esta moneda.",
          free_shipping_input: "Envío gratis",
          monthly_input: "Tasa de compra mensual",
          annually_input: "Tasa de compra anual",
          discount_percent_input: "Tasa de descuento para socios del club",
          discount_limit_input: "Límite de descuento",
          description_input: "Descripción",
          description_input_message: "Introduzca una breve descripción de este nivel.",
        },
        notifications: {
          update_success: "Cambios aplicados al club de clientes.",
        },
      },
      /** {@see BPageShopCrmFaq} **/
      faq: {
        title: "Preguntas frecuentes",
        sub_title: "Agregue, edite y responda las preguntas de sus clientes.",
      },
    }, // End of users

    /** {@see BPageShopMarketing} **/
    marketing: {
      menu: {
        campaigns: "Campañas",
        cross_selling: "Venta cruzada",
        affiliate: "Afiliado",
        emails: "Correos electrónicos",
        funnel: "Embudo",
      },

      /** {@see BPageShopMarketingCampaign} **/
      campaign: {
        name_input_name: "Nombre de campaña",
        name_input_placeholder: "Nombre de campaña",
        create_campaign_action: "Crear nueva campaña",
        table: {
          title: "Título",
          state: "Estado",
          discount: "Descuento",
          landing: "Página de destino",
          start: "Comienzo",
          end: "Fin",
        },
        notifications: {
          add_success_title: "Crear una campaña",
          add_success: "Su campaña fue creada.",
        },
      },
    }, // End of marketing

    /** {@see BPageShopClassification} **/
    categories: {
      title: "Lista de categoría",
      subtitle:
        "Las categorías son la característica clave de su tienda en línea. Lo alentamos a utilizar estas poderosas herramientas de categorización para crear una tienda moderna y facilitar que sus clientes encuentren los productos correctos.",

      menu: {
        add_new: "Añadir nueva categoria",
        categories_list: "Lista de categorías",
        export: "Exportar categorías",
        import: "Importar categorías (CSV)",
      },
      /** {@see categoriesGraph} **/
      graph: {
        title: "Jerarquía de Categorías",
        subtitle:
          "Puede tener una descripción completa de las categorías de su tienda y cómo los usuarios las navegan. Con la disposición correcta de categorías, sus clientes pueden encontrar productos rápidamente y la tasa de conversión aumentará.",
        visits_count: "Visitar",
        normal: "Sencillo",
        items_count: "Número de items",
        home: "Casa",
      },
    }, // End of categories
    /** {@see AdminShopApps} **/
    apps: {
      menu: {
        app_store: "Tienda",
        my_apps: "aplicaciones",
      },
      /** {@see BPageShopSettingApplications} **/
      my_apps: {
        title: "Almacenar aplicaciones activas",
        subtitle:
          "Selldone Administre sus aplicaciones comerciales.",
        all: "todos",
      },
      /** {@see BAppShopStore} **/
      store: {
        title: "Tienda de aplicaciones",
        subtitle:
          "Conecta tus servicios favoritos a tu negocio de forma segura. Agregamos complementos y aplicaciones según las solicitudes de nuestros clientes.",

        nodata: "No se encontró ningún complemento.",
        all: "todos",
        more: "más",
      },
    }, // End of apps
    /** {@see BPageShopPages} **/
    pages: {
      menu: {
        new_page: "Nueva pagina",
        contact_us: "Contáctenos",
        privacy: "Privacidad",
        terms: "Términos",
        about_us: "Sobre nosotros",
        landings: "Aterrizaje",
        popup: "Surgir",
        static: "Estático",
      },
    }, // End of pages

    /** {@see BPageShopPermission} **/
    permissions: {
      menu: {
        persons: "Personal",
        roles: "roles",
        api: "API",
      },
      /** {@see BPageShopPermissionStaff} **/
      shop_permissions: {
        menu: {
          users: "Lista de personal",
          new_user: "Agregar nuevo personal",
          new_user_message:
            "Usuarios que tendrán acceso al panel de control y secciones de administración de esta tienda.",
        },
        delete_alert: {
          title: "Eliminar acceso",
          message: "¿Quieres eliminar este usuario?",
          action: "Borrar",
        },
        notifications: {
          add_success_title: "Agregar acceso",
          add_success: "Nuevo acceso añadido.",
          delete_success_title: "Eliminar acceso",
          delete_success: "Acceso eliminado.",
        },
      },

      /** {@see BPageShopPermissionApi} **/
      shop_api: {
        title: "Almacenar claves de acceso",
        message:
          "Estas claves se utilizan para crear tokens de acceso por parte de su servidor. Tenga en cuenta que las claves son confidenciales y solo en el servidor de una manera que no es visible para otros.",
      },
    }, // End of permissions
    /** {@see BPageShopApplications} **/
    applications: {
      /** {@see BPageShopApplicationsPwa} **/
      pwa: {
        title: "Aplicación Web",
        sub_title: "Vea la aplicación web de su tienda aquí",
        message:
          "Nota: Puede editar la página de bienvenida de su sitio web en su iPhone y iPad en la aplicación iOS",
        ios_app: "aplicación para iOS",
      },

      /** {@see BPageShopApplicationsIos} **/
      ios: {
        title: "aplicación para iOS",
        sub_title: "Pronto podrá crear una aplicación de iOS para su tienda.",
        message:
          "Tamaño máximo de archivo: 512 KB, puede cargar archivos de hasta 1 MB de tamaño, siempre que nuestro sistema de compresión sea capaz de reducir el tamaño a 512 KB. La imagen cargada cambiará de tamaño de forma inteligente.",
      },
      /** {@see BPageShopApplicationsAndroid} **/
      android: {
        title: "Aplicación Android",
        sub_title: "Cree su propia aplicación para Android",
        message:
          "Complete este formulario y presione la tecla de compilación. No habrá necesidad de nada más. Todos los pasos del proceso de creación y firma de su aplicación se realizan en los servidores de la nube. La aplicación final se cargará en todas las tiendas de aplicaciones.",
        server_un_available:
          "Experimentalmente, el servidor de aplicaciones no está conectado en este momento.",
        app_building_progress: "Su aplicación se está construyendo.",
        app_build_success: "Tu aplicación está lista.",
        download_app_action: "Obtener la aplicación",
        firmware_version: "Versión de firmware",
        main_info: "Paquete de aplicación",
        package_name_input_message: "Asegúrese de que el nombre del paquete sea único.",
        package_name_input_alert:
          "Si cambia este nombre, ya no podrá actualizar sus aplicaciones anteriores en AppStore e instalar una nueva. Tenga en cuenta que los usuarios de versiones anteriores de la aplicación tampoco podrán iniciar sesión en sus cuentas.",
        version_input: "Versión",
        version_input_message:
          "Este número siempre debe ser mayor que su valor anterior.",
        version_name_input: "nombre de la versión",
        version_name_input_message:
          "Ingrese un nombre único para esta versión de la aplicación.",
        use_selldone_key: "Claves predeterminadas Selldone",
        use_last_key: "Clave guardada",
        use_new_key: "Nueva llave",
        appearance: "Apariencia",
        app_name_input: "Nombre de la aplicación",
        app_name_input_message: "Este será el nombre principal de su aplicación.",
        app_title_input: "título de la aplicación",
        app_title_input_message: "Este título aparece en la parte superior de la aplicación.",
        app_title_input_placeholder: "Introduce un título",
        app_icon_input: "Icono de la aplicación",
        app_icon_input_placeholder: "Seleccione el archivo zip de los iconos de la aplicación.",
        generate_icon_pack_action: "Paquete de iconos de construcción",
        splash_design: "Diseño de pantalla de bienvenida",
        splash_logo_input: "Logotipo de la pantalla de bienvenida",
        splash_logo_input_placeholder: "Seleccione una imagen para la pantalla de bienvenida.",
        splash_title_input: "Título de la pantalla de bienvenida",
        splash_title_input_placeholder: "Ingrese un título para la pantalla de bienvenida",
        splash_title_input_message:
          "Este título se mostrará en tamaño de fuente grande.",
        splash_message_input: "Mensaje de la pantalla de bienvenida",
        splash_message_input_placeholder: "Mensaje ...",
        splash_message_input_message:
          "Este mensaje se mostrará como una miniatura a continuación.",

        dark_theme: "tema oscuro",
        light_theme: "tema ligero",
        build: "Construir",
        building_info:
          "La creación de una aplicación en un servidor en la nube lleva de 10 segundos a varios minutos. Por favor sea paciente. El enlace del archivo de descarga aparecerá aquí una vez que la aplicación esté lista.",
        update_mode_action: "Actualizar",
        build_mode_action: "Crear aplicación",
        notifications: {
          icon_pack_not_valid_error: "El archivo no es correcto.",
          start_building_title: "Edificio ...",
          start_building_message:
            "Se envió la solicitud para crear una aplicación de Android.",
          build_success_title: "Felicidades",
          build_success:
            "Su aplicación de Android está lista y puede descargarla ahora.",
        },
      },
    }, // End of applications

    /** {@see ShopAutomation} **/
    automation: {
      menu: {
        autopilot: "Piloto automático",
      },
    },

    /** {@see BPageShopSetting} **/
    edit: {
      menu: {
        delete: "Eliminar tienda",
        activity_time: "Tiempo",
        footer: "Menú",
        info: "Información",
        notification: "Notificaciones",
        home: "Casa",
        locations: "Ubicaciones",
        license: "Licencia",
        theme: "Temática",
        sms: "SMS",
        email: "Correo electrónico",
        domain: "Dominio",
        verifications: "Verificaciones",
        flow: "Caudal",
        business_model: "modelo de negocio",
      },
      delete_dialog: {
        title: "Eliminar tienda",
        message: "¿Quieres eliminar la tienda <b>{title}</b> ?",
        action: "Eliminar tienda",
      },

      notifications: {
        delete_success: "Tienda eliminada.",
      },

      /** {@see BPageShopSettingInfo} **/
      info: {
        title_tab: {
          title: "Nombre comercial e idioma",
          subtitle: "Establezca un nombre público y un idioma predeterminado.",
        },
        name_tab: {
          title: "Comprar nombre único",
          subtitle: "Es el nombre de usuario de su empresa.",
        },

        description_tab: {
          title: "tu historia empresarial",
          subtitle:
            "Escriba sobre su negocio y su propuesta de valor única.",
        },
        contact_tab: {
          title: "Contacto y negocio local",
          subtitle:
            "Información de contacto pública y configuración de empresas locales de Google.",
        },
        image_tab: {
          title: "Título",
          subtitle: "Seleccione un logotipo único para su marca.",
        },
        favicon: {
          title: "Título",
          subtitle:
            "Configura y gestiona esta opción para tu tienda.",
        },
      },

      /** {@see ShopEditMenuFooter} **/
      badge: {
        external_title: "Administrar insignias externas",
        external_message:
          "Aquí, puede ingresar la dirección de la imagen de la insignia y el enlace a ella. Las URL deben ser de un sitio web aprobado.",
      },
      /** {@see BPageShopSettingMenus} **/
      edit_menu: {
        title: "Menús",

        footer: {
          title: "Menú de pie de página",
          sub_title:
            "Puedes configurar el menú inferior de la página de tu tienda aquí. Estos menús pueden ser páginas de inicio, páginas diseñadas o enlaces externos.",
        },

        header: {
          title: "menú de encabezado",
          sub_title:
            "Este menú solo se muestra en pantallas más grandes que las de los dispositivos móviles y en la parte superior de la página de inicio, las categorías de productos, los aterrizajes y las páginas de productos.",
        },

        save_menu: "Menú Guardar",
        dialog: {
          main_pages: "Páginas principales",
          custom_pages: "Páginas de destino",
        },
        table: {
          home: "Casa",
          shop: "Tienda",
          blogs: "Blog",
          about_us: "Sobre nosotros",
          privacy: "Privacidad",
          terms: "Términos de Uso",
          faq: "FAQ",
          contact_us: "Contáctenos",
        },
        notifications: {
          save_success: "El menú ha sido actualizado con éxito.",
        },
      },

      /** {@see ShopSocialField} **/
      social: {
        title: "Medios de comunicación social",
        message:
          "Configura y gestiona esta opción para tu tienda.",
      },

      /** {@see BShopSettingWorkingDays} **/
      time: {
        title: "Días laborables",
        sub_title: "Establecer días y horas de trabajo",
        days_open_input: "Dias",
        days_open_input_nodata: "Seleccione al menos un día",
        start_time_input: "Hora de inicio de la actividad de la tienda",
        start_time_input_hint: "Horario de apertura de la tienda",
        end_time_input: "Hora de cierre de la tienda",
        end_time_input_hint: "Hora de finalización de la actividad de la tienda",
        customer_support_service: "Responsabilidad y Servicio al Cliente",
        response_time_input: "Estado del servicio de atención al cliente",
        support_24h: "24 horas 7 días a la semana",
        support_normal: "Solo en horario de oficina",
        no_service: "No",
        notifications: {
          update_success: "Tienda editada.",
        },
      },
    }, // End of edit
  }, // End of admin_shop

  /** {@see BCategoryInput} **/
  category_select: {
    category_input_no_category: "Ninguna Categoria",
  },

  /** {@see BProductAddFull} **/
  add_product: {
    title_new: "Nuevo producto",
    title_new_category: "Nueva categoría",
    title_new_drop_shipping: "Agregar dropshipping",

    title_edit: "Editar producto",
    delete: "Eliminar producto",
    completed: "Terminado",

    menu: {
      type: "Tipo de producto",
      general_info: "Información general",
      rating: "Encuesta y características",
      spec: "Especificaciones",
      images: "Imágenes",
      price: "precio",
      inputs: "Aporte",
      outputs: "producción",
      extra: "Detalles adicionales",
      review: "Revision de producto",
      inventory: "Inventario / Variantes",
      change_status: "Cambiar Estado",
    },
    menu_extra: {
      description: "Descripción",
      form: "Formulario",
      no_spec: "Opción",
      has_spec: "Opción",
    },

    select_type: {
      title: "Elige tu tipo de producto o servicio",
    },

    /** {@see BProductEditInfo} **/
    edit_info: {
      category_input: "Categoría",
      category_input_msg: "Vacío: En la raíz de la tienda",
      product_name: "Nombre del producto*",
      product_name_placeholder: "El nombre de su producto aquí..",
      product_code: "Código de producto (inglés)",
      sku: {
        label: "SKU",
        message: "Unidad de mantenimiento de existencias",
      },
      mpn: {
        label: "MPN",
        message: "Número de pieza del fabricante",
      },

      external_link: "Enlace externo",

      brand_placeholder: "Marca Ej. Manzana.. (Opcional)",

      is_original: "¿Es este un producto original?",
      is_original_message:
        "Si no configura su producto original, se mostrará la insignia falsa para este producto.",
      return_warranty:
        "¿Cuántos días tiene garantía de devolución este producto?",
      warehouse_section: "Almacén y Fabricación",
      conditions_section: "Condiciones del producto",
      warranty_section: "Garantía y Entrega",

      unit_input: "unidad de producto",
      unit_message: "Introduzca la unidad si es necesario. Ej: KG, Metro, ...",

      unit_section: "unidad de producto",

      unit_float: "Unidad flotante (pronto)",
      unit_float_hint:
        "Por ejemplo, el cliente puede pedir 3 kg de fruta, pero la cantidad enviada al cliente es ligeramente diferente de la cantidad pedida.",
      unit_float_message:
        "Durante el procesamiento del pedido, la cantidad entregada puede diferir de la cantidad solicitada. El sistema calcula automáticamente esta diferencia y la registra como su deuda con el cliente, que se puede aplicar a los próximos pedidos.",

      marketplace: {
        // Vendor panel > Fixed mode
        vendor_panel_message:
          "El <b>{vendor_name}</b> es el propietario del producto.",
        // Marketplace panel > Subscription products
        subscription_message:
          "Los productos de suscripción pueden tener un proveedor, por lo que puede crearlos en el panel de proveedores o asignarles un proveedor en el paso de creación. El proveedor seleccionado será el propietario del producto.",
        default_message:
          "Puede especificar si este producto pertenece a un proveedor y, por lo tanto, solo un proveedor puede venderlo, o si este producto pertenece a Marketplace y más de un proveedor puede venderlo.",

        single_vendor_title: "Proveedor único",
        single_vendor_desc:
          "Este producto pertenece a un proveedor y el proveedor seleccionado puede gestionarlo.",

        multi_vendors_title: "Múltiples proveedores",
        multi_vendors_desc:
          "Este producto pertenece al mercado y solo se puede editar en el panel del mercado.",
      },

      category: {
        subtitle:
          "Configure la categoría y el título que se mostrarán en su listado.",
      },
      unit: {
        subtitle:
          "Puede personalizar la visualización de precios y elementos de llamada a la acción en la página del producto.",
      },
      custom_pricing: {
        title: "Formulario de precios personalizado",
        subtitle:
          "Puede crear o asignar una valoración (un formulario de entrada de precios) al producto, y sus clientes pueden seleccionar entre variantes o personalizar su mercancía mediante un formulario de entrada intuitivo.",
        valuation_need_saved_product_message:
          "Primero guarde el producto y luego podrá asignar un modelo de valoración.",
        assign_valuation_message:
          "Por favor, asigne un modelo de valoración a este producto.",
        edit_pricing_action: "Editar formulario de precios",
        add_pricing_action: "Crear nuevo formulario de precios",
      },
      action: {
        title: "Botón de compra personalizado",
        message:
          "Puedes cambiar el ícono siguiendo este patrón: {icon name} título...",
        placeholder: "Introduzca una llamada a la acción...",
        multi_language_dialog_title: "Título de botón de compra personalizado",
      },
      external: {
        not_available_message:
          "Configura y gestiona esta opción para tu tienda.",
        available_message: "Disponible Mensaje",
        input_label: "Opción",
      },
      warehouse: {
        subtitle:
          "Esta información es utilizada por el sistema de gestión del almacén y sirve para identificar globalmente el producto.",
      },
      gtin: {
        hint: "Los valores admitidos son UPC (América del Norte, 12 dígitos), EAN (Europa, 13 dígitos), JAN (Japón, 8 o 13 dígitos), ISBN (libros, 13 dígitos).",
        label: "Número de artículo comercial global del producto",
        placeholder: "Número de comercio global aquí. (Opcional)",
      },
      hsn: {
        hint: "HSN, o Sistema Armonizado de Nomenclatura, es un sistema de clasificación estandarizado internacionalmente para categorizar bienes y productos.",
        placeholder: "Código HSN de 6 a 16 dígitos (opcional)",
        label: "HSN",
      },
      condition: {
        label: "Estado del producto en tu tienda",
        message: "Por favor, elija la condición de este producto.",
        subtitle:
          "Informe a sus clientes sobre la condición y la marca del producto que está ofreciendo.",
      },
      brand: {
        label: "Marca",
        placeholder: "Marca Ej. Manzana.. (Opcional)",
      },
      warranty: {
        subtitle:
          "Establezca la garantía y el estado del producto, ya que esta información sobre la garantía se mostrará al cliente y ayudará a establecer el plazo dentro del cual se pueden devolver los productos después de la compra.",

        label: "Garantía",
        placeholder: "Garantía dorada de 24 meses. (Opcional)",
      },
      status: {
        title: "Estado",
        subtitle:
          "El estado del producto determina su disponibilidad en línea y en la tienda. Para crear un borrador de producto, simplemente cambie su estado a \"Inactivo\".",
      },
      profiles: {
        title: "Perfiles",
        subtitle:
          "Puedes definir garantía, política de devolución, envío y guía y asignarlos a este producto. Se mostrarán como nuevas pestañas en la página del producto.",
      },
      shortcuts: {
        title: "Asignar producto a categorías adicionales",
        subtitle:
          "Esta función le permite incluir el producto en varias categorías y conservar su ubicación en la categoría principal establecida en Producto > Editar > Categoría. Básicamente, funciona de manera similar a la creación de \"accesos directos\" en los sistemas operativos, lo que permite que el producto aparezca en categorías adicionales específicas.",
      },
    },

    /** {@see BProductEditFeatures} **/
    rating_pros_cons: {
      title: "Encuesta",
      message:
        "Ingrese una lista de especificaciones del producto para que sus clientes califiquen su producto. (Hasta 5 artículos)",
      rating_input: "Centro",
      rating_input_message: "Puede agregar 5 elementos a la encuesta.",
      rating_input_placeholder:
        "Escribe aquí tu pregunta de encuesta personalizada... ¡y presiona Enter!",

      item_unit: "ít",

      pros_title: "ventajas",
      pros_message: "Introduzca las características del producto. (Hasta 5 artículos)",
      pros_input_title: "Título de la función",
      pros_input_value: "Valor de característica",
      pros_group: "Ventajas del producto",

      cons_title: "Contras",
      cons_message: "Introduzca las debilidades del producto. (Hasta 5 artículos)",
      cons_input_title: "título de debilidad",
      cons_input_value: "Valor de debilidad",
      cons_group: "debilidades del producto",

      select_from_list: "Seleccionar de la lista",

      suggestion_rating: [
        "Buena calidad",
        "Buen valor",
        "Recomendaría",
        "Características y capacidades",
        "Facilidad de uso",
        "Bien diseñado",
        "Desempeño confiable",
        "Atención al cliente eficaz",
        "Tiempo de entrega satisfactorio",
        "Producto coincide con la descripción",
        "Durable y duradero",
        "Económico",
        "Embalaje atractivo",
        "Diseño innovador",
        "Amigable con el medio ambiente",
        "Instrucciones/manual suficientes",
        "Expectativas cumplidas",
        "Interfaz amigable",
        "Alta eficiencia",
        "Gran servicio postventa",
        "Funcionalidad versátil",
        "Precio competitivo",
        "Disponibilidad de repuestos/accesorios",
        "Marca confiable",
        "Seguro de usar",
        "Servicio rápido y preciso",
      ],

      notifications: {
        add_rating_success: `Se agregó la opción {rating_name} de calificación del usuario.`,
        delete_rating_success: `Se eliminó la opción de calificación de usuario {rating_name}.`,

        add_pros_success: "Característica del producto añadida.",
        delete_pros_success: "Característica del producto eliminada.",

        add_cons_success: "Se agregó la debilidad del producto.",
        delete_cons_success: "Se eliminó la debilidad del producto.",
      },
    },

    /** {@see BProductEditSpec} **/
    edit_spec: {
      title: "Especificaciones técnicas",
      subtitle:
        "Introduzca aquí las especificaciones del producto. Esta información se mostrará a los clientes y también podrá utilizarse en el sistema de filtrado inteligente de la categoría.",
      manual: {
        title: "A mano",
        subtitle:
          "Agregue especificaciones de producto manualmente definiendo grupos y pares clave-valores.",
        add_group_action: "Añadir grupo",
        add_item_action: "Añadir valor de especificación",
      },
      import: {
        subtitle:
          "Puede importar especificaciones técnicas de productos similares.",
        action_title: "Importar",
        action_subtitle: "Clonar especificación de otro producto.",
      },
      ai: {
        title: "AI",
        subtitle:
          "Puede crear automáticamente especificaciones de producto enviando los datos sin procesar del producto en formato de texto.",
        action_title: "Generación automática por IA",
        action_subtitle: "Crear especificaciones de producto mediante indicaciones abstractas.",
      },

      group_input_header: "Añadir grupo",
      item_title_header: "Añadir artículo",
      group_input: "Encabezado de grupo",
      group_input_message: "Introduzca el título.",
      group_add_action: "Añadir grupo",

      item_title_input: "Título",
      item_title_input_message: "Introduzca el título de la función.",

      item_value_input: "Valor",
      item_value_input_message: "Introduzca el valor de la característica.",

      add_item_action: "Añadir artículo",

      dialog: {
        title: "Ingrese las especificaciones técnicas",
        code_input: "ID del Producto",
        code_input_message: "Código de producto: P0000 ...",
        spec_view_title: "Especificaciones del producto seleccionado",
        spec_view_subtitle:
          "Las especificaciones se han importado del producto elegido.",
        set_spec_action: "Especificaciones técnicas duplicadas",
      },
      notifications: {
        enter_group_title_error: "Introduzca el valor del título",
        enter_item_title_and_value_error:
          "Ingrese el título y el valor de la característica",
        spec_saved_success: "Especificaciones del producto guardadas.",
      },
      dialog_ai: {
        title: "Generar automáticamente especificaciones de productos",
        prompt: {
          title: "Descripción general del producto",
          subtitle:
            "Proporcione una descripción breve y clara del producto, destacando sus características y detalles principales. Esta información se utilizará para generar automáticamente las especificaciones del producto.",
        },
        generated_spec: {
          title: "Especificaciones generadas por IA",
          subtitle:
            "Estas especificaciones fueron generadas por inteligencia artificial.",
        },
        inputs: {
          prompt: {
            label: "Detalles del producto",
            placeholder: "Describe el producto aquí...",
          },
        },
        actions: {
          run: {
            title: "Generar especificaciones",
            subtitle:
              "Haga clic para crear automáticamente especificaciones de producto a partir de la descripción general proporcionada.",
          },
          add_generated_spec: "Agregar especificaciones generadas",
        },
      },
    },
    /** {@see BProductEditImages} **/
    edit_images: {
      title: "Imagen principal",
      main_image_input_nodata: "Subir imagen del producto.",
      main_image_input_message: "Esta imagen se muestra en la lista de productos.",
      preview: "Avance",
      image_style: "Estilo de imagen",
      background_is_white: "Fondo blanco",
      background_is_white_msg: "la imagen tiene fondo blanco??",

      images: {
        title: "Galería de imágenes de productos",
        sub_title:
          "Cargue imágenes de productos, comunes a todas las variantes de productos, en esta sección.",
      },
      video: {
        title: "Vídeo",
        sub_title:
          "Primero, cargue el video de su producto en YouTube y luego coloque la URL del video aquí.",
      },
      change_bg_ai: {
        title: "Crear imagen con nuevo fondo",
        inputs: {
          prompt: {
            label: "Descripción de antecedentes",
            placeholder: "Describe el fondo deseado...",
          },
        },
        actions: {
          reimagine: {
            title: "Generar nueva imagen",
            subtitle: "Reimagina la imagen completa con un nuevo fondo.",
          },
          replace: {
            subtitle: "Reemplazar el fondo existente.",
          },
        },
      },
    },
    /** {@see BProductEditPrice} **/
    pricing: {
      edit_price: "Precios",
      price_input: "precio",
      currency_input: "Divisa",
      currency_input_messages: "El precio se calcula en esta moneda.",
      commission_input: "Comisión",
      commission_message:
        "Esta opción es útil solo para determinados tipos de comerciantes, como los mayoristas. Si no es mayorista, deje esta opción en blanco. El precio que ven los compradores es la suma del precio y la comisión. Para agregar impuestos, haga clic en Contabilidad > Impuestos.",
      add_commission_action: "Agregar comisión",

      price_label_input: "Etiqueta de precio",
      price_label_message:
        "Agregue información adicional sobre el precio como ($1.5/Fl Oz). Casos de uso: supermercado, FMCG.",
      add_price_label_action: "Agregar etiqueta de precio",
      discount_input: "Descuento",
      discount_input_message: "Tasa de descuento",
      has_discount_period_input: "¿Este descuento es válido para un tiempo específico?",
      discount_timespan: "Introduzca el período de descuento.",
      start_input: "Comienzo",
      end_input: "Fin",
      start_input_placeholder: "Seleccione la hora de inicio",
      end_input_placeholder: "Seleccione la hora de finalización",
      independent_price: "El precio solo para esta variante.",
      same_price: "El precio del producto principal.",
      variant_pricing_message:
        "Al seleccionar esta opción, el precio de esta variante se puede establecer independientemente del producto principal.",

      subtitle: {
        marketplace:
          "Dentro del mercado, el precio principal del producto que se muestra es el precio de lista, mientras que el precio real se determina en función de los registros de la relación entre el proveedor y el producto.",
        subscription:
          "Para las suscripciones, solo se muestra el precio de lista, mientras que el costo real se determinará en función del plan de suscripción seleccionado.",
        service:
          "En el caso de los productos basados en servicios, los precios que se indican son solo a modo de ejemplo y brindan un costo estimado del servicio. El precio real del servicio lo determinará usted una vez que el cliente haya realizado su pedido (al finalizar la compra).",
        file: "Esto se refiere al precio listado y real del archivo, que los clientes deben pagar para poder acceder a los archivos.",
        default:
          "Esto se refiere al precio indicado del producto y también tiene en cuenta el precio de cualquier variante que no tenga precios separados.",
      },
      extra_pricings: {
        title: "Añadir precio adicional",
        subtitle: "Aplicar precios variables en función de la cantidad adquirida.",
      },

      vendor: {
        title: "Precios del proveedor",
        subtitle:
          "Este precio se mostrará únicamente en la lista de productos. Puede establecer el precio del proveedor en la pestaña Producto > Proveedores.",
        manage_vendors: "Administrar proveedores",
        vendor_product_pricing_link:
          "El precio del producto del vendedor está conectado. Si se cambia el precio de venta aquí, se afectarán los productos del vendedor sin variantes o aquellos con variantes que no tienen su propio precio (usando el mismo precio que el producto principal). Este precio se considerará el precio del mercado y el precio del vendedor se establecerá en función del modelo de precios o del margen de beneficio del mercado anterior.",
        vendor_variant_pricing_link:
          "Si se cambia el precio de la variante aquí, se afectará el precio de los productos del vendedor con la misma variante. Este precio se considerará el precio del mercado y el precio del vendedor se establecerá de acuerdo con el modelo de precios o el margen de beneficio del mercado anterior.",
      },
    },
    /** {@see ProductEditInputs} **/
    inputs_edit: {
      title: "Formulario de entrada de información del comprador",
      sub_title:
        "Puede crear un formulario de entrada de datos para cada producto, de modo que los compradores le envíen información al comprar un producto. Por ejemplo, esta información podría ser un nombre para un grabado en una piedra.",
      message_input: "Mensaje al usuario",
      message_input_message:
        "Este mensaje se le mostrará al cliente al comprar productos.",
      inputs_form: "Estructura de la información (entrada)",
      inputs_hint:
        "Tiene la opción de configurar un formulario personalizado para recopilar detalles de sus clientes cuando estén listos para realizar un pedido.",
    },

    /** {@see BProductEditExtra} **/
    extra_edit: {
      physical: {
        title: "Información de envío",
        sub_title:
          "El costo y el tiempo de preparación se calculan con base en la información de esta sección. Asegúrese de ingresar la información según las unidades seleccionadas en la tienda (peso, dimensiones, distancia).",
      },

      notifications: {
        save_title: "Embalaje actualizado",
        save_msg: "Información del empaque del producto actualizada con éxito.",
      },

      order_limit: {
        title: "Límites de pedidos",
        subtitle:
          "Si eres mayorista o hay un límite mínimo o máximo en la cantidad de este artículo por pedido, puedes especificarlo aquí.",
        no_limit: "Sin límite",
        minimum_purchase_quantity: "Cantidad mínima de compra",
        maximum_purchase_quantity: "Cantidad máxima de compra",
      },
    },

    variants: {
      not_available:
        "Actualmente no es posible seleccionar una variante para este tipo de producto.",
    },

    delete_product: {
      title: "Quitar producto",
      message: `¿Quieres eliminar <b>{product_title}</b> ?`,
      tips: "Si elimina accidentalmente un producto, puede recuperarlo navegando a su Tienda > Productos, habilitando Mostrar artículos eliminados, haciendo clic derecho en el producto y seleccionando Restaurar.",
    },
  },

  /** {@see BProductExtraPricingAdd} **/
  extra_pricing_add_dialog: {
    title: "Precio adicional por más de {min}",
    subtitle:
      "El sistema determina automáticamente el orden y la prioridad para el cálculo del precio. Ingrese la cantidad mínima requerida para que este precio tenga efecto.",
    min_quantity: "Cantidad mínima",
  },
  /** {@see BProductInventoryManagementPhysical} **/
  product_inventory_management_physical: {
    subtitle: {
      dropshipping:
        "El inventario de productos de dropshipping lo establecen los mayoristas y no se puede modificar aquí.",
      marketplace:
        "El inventario total de productos en el mercado se determina sumando los inventarios de todos los vendedores. No se puede modificar aquí.",
      default: "Especifique aquí el número de inventario del producto.",
    },
    menu: {
      add_bulk: {
        title: "Masivo Añadir",
        subtitle: "Subtítulo",
      },
      edit_property_set: {
        title: "Título",
        subtitle: "Subtítulo",
      },
    },
  },

  /**
   * @see USmartMenu
   */
  smart_menu: {
    show_delete_items: "Opción",
  },

  /** {@see BProductGoogleCategoryInput} **/
  google_product_category_input: {
    label: "Código de categoría de producto de Google",
    hint: "Representa la categoría de su producto según la taxonomía de productos de Google.",
    placeholder: "Introduzca la categoría del producto o servicio. (Opcional)",
  },
  /** {@see LogisticProfileType} **/
  LogisticProfileType: {
    WARRANTY: {
      title: "Garantía",
      desc: "Una garantía es parte de un contrato en el que el fabricante se compromete a reparar o reemplazar un producto dentro de un período determinado. Este compromiso puede extenderse incluso a los consumidores que no tienen un contrato directo con el fabricante.",
    },
    RETURN_POLICY: {
      title: "Política de devoluciones",
      desc: "Las políticas de devolución describen cómo los clientes pueden devolver o cambiar la mercancía no deseada. Especifican los artículos que cumplen los requisitos, los motivos aceptables para las devoluciones y el plazo para realizarlas.",
    },
    GUIDE: {
      title: "Guía",
      desc: "Una guía podría incluir una tabla de tallas para prendas de vestir o una guía de selección de diamantes. Es importante que las guías sean versátiles y aplicables a varios productos.",
    },
    SHIPPING: {
      title: "Envío",
      desc: "Una política de envío detalla los aspectos clave del envío de pedidos en línea, incluidos los costos de envío, los métodos y los tiempos de entrega estimados.",
    },
  },
  /** {@see BProductProfileLogistic} **/
  product_logistic_profile: {
    dialog: {
      title: "Seleccionar perfil logístico",
      add_new_action: "Agregar nuevo perfil",
      add_new_disable_msg: "Propietario del mercado",
    },
  },

  /**
   * @see BPageShopPagesPopups
   */
  b_shop_popups: {
    title: "Popups Gestión",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
    add_action: "Añadir Nuevo Popup",
  },

  /** {@see BProductProfileTax} **/
  product_tax_profile: {
    description: {
      default: "Defecto",
      dedicated: "Dedicado",

      subscription: "Podemos aplicar impuestos solo en el paso de creación del pago.",
      is_disabled: "¡Este perfil fiscal está deshabilitado! (⚠️Advertencia)",
      shipping: "Envío",
      fixed_rate: "Impuesto",
      location_based_rate: "Impuestos: basados en la ubicación",
      shipping_location_based_rate: "Envío: basado en la ubicación",
      include_in_price: "Incluido en el precio",
    },
    dialog: {
      header: "Seleccionar perfil fiscal",

      title: "Perfil fiscal",
      subtitle:
        "Puede asignar regulaciones impositivas específicas al producto. Si no se elige un perfil impositivo para el producto, se aplicarán las regulaciones impositivas predeterminadas de la tienda.",

      action_manage: "Gestionar impuestos",
      action_manage_sub: "Tienda > Finanzas > Impuestos",

      subscription_tips:
        "Cuando selecciona un perfil de impuestos para un producto de suscripción, actualizamos <code>tax code</code> y configuramos el modo inclusivo/exclusivo en su proveedor de servicios de pago. El perfil de impuestos seleccionado especifica si el precio se considera que incluye o excluye impuestos. Uno de los dos: <code>inclusive</code> o <code>exclusive</code> . Una vez especificado como inclusivo o exclusivo, no se puede cambiar.<br /><br /> <b>¡Importante!</b> Después de cambiar el perfil impositivo, debe hacer clic en Planes de precios en la pestaña Producto > Inventario y hacer clic en el botón Guardar para aplicar los cambios.",
    },
  },

  /**
   * @see BProductVendorAbstractView
   */
  product_vendor_profile: {
    vendor: {
      subtitle:
        "El precio y la cantidad de este producto los establece el proveedor particular al que pertenece.",
    },
    vendors: {
      subtitle:
        "A continuación se muestra una lista de proveedores del producto. La cantidad y el precio los fijarán los proveedores.",
    },
  },
  /**
   * @see BVendorAdd
   */
  vendor_add: {
    menu: {
      profile: "Perfil & Información",
      business: "Negocio & Pago",
      documents: "Documentos",
      page: "Página Plantilla",
      shipping: "Envío",
      access: "Acceso",
      critical_zone: "Zona crítica",
    },

    profile: {
      title: "Información del vendedor",
      subtitle: "Esta información se muestra a los clientes públicamente.",
      action_sub_caption: "Página de listado de productos públicos.",
      action_see_listing_page: "Ver página de listado",
      send_invitation_email: "Opción",
      invitation_link: "Opción",
    },

    profiles: {
      title: "Perfiles",
      subtitle: "Subtítulo",
    },
    map: {
      no_map_message:
        "Configura y gestiona esta opción para tu tienda.",
    },
    page: {
      title: "Página personalizada",
      subtitle:
        "Configure una página de destino personalizada para el proveedor, proporcionándole un enlace único a su página dedicada.",
      action_set_page: "Ver página pública",
      action_sub_caption: "Página de destino personalizada.",
      vendor_has_landing_msg: "El proveedor tiene una página de destino personalizada.",
      no_landing_selected_msg: "No se ha seleccionado ninguna página de destino.",
      no_landing_page: "Sin página de destino",
      we_can_create_dedicated_landing_msg:
        "Podemos crear una página de destino dedicada para usted.",
    },
    contact: {
      title: "Datos de contacto",
      subtitle: "Por favor proporcione datos de contacto válidos.",
    },
    business: {
      title: "Información comercial",
      subtitle:
        "Proporcione información precisa sobre su negocio para garantizar un proceso de recaudación de ingresos rápido y sin problemas.",
    },
    bank: {
      title: "Información de pago",
      subtitle: "Ingrese aquí sus datos bancarios para realizar los pagos.",
    },
    default_pricing: {
      title: "Precios predeterminados",
      subtitle:
        "Puede asignar un modelo de precios predeterminado para el proveedor. Cuando el proveedor agrega un nuevo producto, este modelo de precios se utilizará para calcular el margen de mercado sobre el precio del producto. Posteriormente, puede ajustar el modelo de precios para cada producto individualmente.",
      no_pricing: "Sin precios",
    },
    shipping: {
      title: "Envío",
      subtitle: "Los vendedores pueden configurar sus propios servicios de envío y mensajería.",
      shipping_services: "Servicios de envío",
      total_number_of_services:
        "El número total de servicios de envío que tiene el proveedor.",
      couriers: "mensajeros",
      total_couriers_count: "El número total de mensajeros que tiene el vendedor.",
    },
    configuration: {
      title: "Configuración",
    },
    delete: {
      title: "Eliminar proveedor",
      action: "Eliminar proveedor",
      verify_description:
        "¡Sé que se eliminarán todas las relaciones con productos y proveedores!",
      verify_title: "Quiero eliminar este proveedor.",
    },

    send_invitation_tips:
      "Le enviaremos un correo electrónico de invitación a este usuario. Si el usuario se une a su tienda como vendedor, su cuenta se le asignará automáticamente.",
    only_marketplace_owner_can_edit_user:
      "Solo el propietario del mercado puede editar el usuario. Si desea cambiar el propietario de este vendedor, puede enviarnos la solicitud.",
    vendor_is_disable_msg: "El vendedor está deshabilitado.",
    email_not_match_with_user_msg:
      "El correo electrónico ingresado no coincide con el correo electrónico del usuario ( <b>{user_name}:</b> {user_email}). ¿Está seguro de enviar correos electrónicos a <b>{email}</b> ?",

    order_information_email_to_email:
      "<b></b> Configura y gestiona esta opción para tu tienda. {email}",

    set_a_user_for_the_vendor_first_msg: "Primero, establezca un usuario para el proveedor.",

    inputs: {
      slug: {
        label: "Camino",
        placeholder: "Introduzca una ruta personalizada...",
        hint: "Cambiar la ruta de la página de destino dinámica del proveedor.",
      },
      email: {
        message: "Este correo electrónico recibirá todas las notificaciones y actualizaciones.",
      },
      business: {
        false_description: "Yo trabajo como individuo.",
        true_description: "Opero como una entidad comercial legalmente reconocida.",
        false_title: "No Título",
        true_title: "Negocio",
      },
      bank: {
        hint: "El nombre del banco donde el vendedor tiene su cuenta.",
        placeholder: "El nombre de tu banco.",
      },
      account_name: {
        hint: "Este debe coincidir con el nombre asociado a la cuenta bancaria.",
        placeholder: "Su nombre..",
      },
      account_number: {
        hint: "El número de cuenta único del vendedor.",
        placeholder: "Su número de cuenta bancaria.",
      },
      routing_number: {
        hint: "Este número varía según el país. Se utiliza para identificar la sucursal bancaria específica que utiliza el proveedor.",
        placeholder: "Su número de ruta bancaria, código de clasificación o número BSB.",
      },
      iban: {
        hint: "Número de cuenta bancaria internacional): si el banco del vendedor está en Europa o en otros países determinados.",
        placeholder: "Su número IBAN, por ejemplo: DE89 3704 0044 0000 0000 00",
      },
      swift: {
        hint: "Número de cuenta bancaria internacional): si el banco del vendedor está en Europa o en otros países determinados.",
        placeholder: "Su código Swift/BIC.",
      },
      branch_address: {
        hint: "La dirección de la sucursal bancaria donde el vendedor tiene su cuenta.",
        placeholder: "Su dirección bancaria.",
      },
      enable: {
        label: "Estado del proveedor",
        hint: "Puedes habilitar o deshabilitar proveedores a nivel global. Los clientes no podrán comprar nada a los proveedores deshabilitados.",
        true_description:
          "Podrán vender sus productos a través de su marketplace.",
      },
      access: {
        label: "Panel de proveedores y acceso",
        true_description:
          "El vendedor tiene un panel dedicado para actualizar la cantidad y el precio.",
        hint: "Puede habilitar o deshabilitar el panel de proveedores, que les permite actualizar las cantidades y los precios de los productos y recibir pedidos parciales.",
        false_description: "El vendedor no tiene acceso a nada.",
      },

      logo: {
        label: "Opción",
      },
      description: {
        placeholder: "Opción",
      },
    },
  },

  /**
   * @see BVendorDocumentsList
   */
  vendor_documents_list: {
    title: "Documentos",
    action_upload_doc: "Subir documento",
    vendor_subtitle:
      "Cargue los documentos necesarios para verificar su empresa, IP y dirección. Necesitamos esta información para confirmar su asociación y brindarle el acceso necesario.",
    marketplace_subtitle:
      "Los proveedores pueden enviar documentos como verificación comercial, de propiedad intelectual y de dirección para facilitar su proceso KYC, lo que le permitirá otorgarles el acceso adecuado.",
    upload_dialog: {
      title: "Subir documento",
      type: {
        title: "Tipo de documento",
        subtitle:
          "Cargue únicamente los documentos necesarios. Evite compartir documentos que contengan información confidencial. Solicitamos documentos que estén disponibles públicamente.",
      },
    },
  },

  /**
   * @see BProductBadgesManage
   */
  product_badges: {
    title: "Insignias",
    subtitle: "Agregar y editar insignias de productos personalizadas.",
    only_marketplace_owner_msg: "Solo propietarios de mercados",
    create_new_badge_action: "Crear nueva insignia",
    select_a_badge: "Seleccione una insignia...",
    inputs: {
      custom: {
        false_description: "Las insignias de productos se crean automáticamente.",
        false_title: "Automático",
        true_title: "Insignias de productos personalizados",
        true_description: "Agregue insignias personalizadas en la página del producto.",
      },
    },
    add_custom_badge: {
      title: "Insignia personalizada",
      subtitle:
        "Agrega una nueva insignia personalizada a mi tienda. Mantén la cantidad de insignias por debajo de 10. Si tienes más insignias, tu tienda se ralentizará.",
      show_advanced_options: "Mostrar opción avanzada",

      inputs: {
        title: {
          placeholder: "Título público...",
        },
        image: {
          label: "imagen",
          message: "Tamaño máximo de imagen: 128 KB",
          placeholder: "Seleccione una imagen de portada",
        },
        pattern: {
          label: "Patrón",
          message:
            "Muestra automáticamente esta insignia para los productos que tienen este valor coincidente en su especificación. Se admiten expresiones regulares.",
          placeholder: "Para mostrar todos los productos escriba: *.*",
        },
      },
      notifications: {
        badge_added: "¡La insignia se ha añadido correctamente!",
        badge_updated: "¡La insignia se ha actualizado correctamente!",
        item_not_found_error:
          "No se pudo encontrar el artículo. Actualice la página o comuníquese con el servicio de asistencia.",
      },
    },
  },
  /**
   * @see BProductTagsInput
   */
  product_tags: {
    title: "Etiquetas",
    tips: [
      "Puede filtrar productos según etiquetas en <b>las páginas de destino</b> .",
      "Usted y sus clientes pueden buscar estas etiquetas en la barra <b>de búsqueda</b> .",
      "Si se establecen etiquetas, solo los productos con <b>etiquetas comunes</b> se mostrarán en la <b>sección de productos relacionados</b> en la página del producto; de lo contrario, se mostrarán los productos de la misma categoría.",
    ],
    inputs: {
      tags: {
        placeholder: "Coloque las etiquetas aquí y presione enter. ej. nueva colección",
      },
    },
    notifications: {
      tags_updated: "Las etiquetas se han actualizado correctamente.",
    },
  },

  /**
   * @see VPageVendorShippingTransportation
   */
  vendor_shipping_services: {
    title: "Envío",
    subtitle:
      "Aquí puede agregar servicios de envío y mensajería. Los servicios de envío y mensajería deben estar dentro de los métodos de transporte predefinidos definidos por el mercado. Al agregar servicios de envío y mensajería, puede asignarles pedidos fácilmente y solicitar etiquetas o mensajería automáticamente.",

    subtitle_pickup:
      "Configura y gestiona esta opción para tu tienda.",
    action: "Agregar servicio",

    add_dialog: {
      select_service_msg:
        "Seleccione un servicio de envío de la lista que aparece a continuación. Aquí solo se muestran los servicios disponibles que se pueden agregar a su tienda.",
      no_available_service: "¡No hay servicio disponible!",
    },
  },
  /**
   * @see VPageVendorShipping
   */
  vendor_shipping: {
    services: "Servicios",
  },

  /** {@see BProductProfileMap} **/
  product_location_profile: {
    title: "Ubicación",
    empty_subtitle:
      "Asigne una ubicación al producto si es un artículo basado en la ubicación.",
    dialog: {
      header: "Seleccionar perfil de ubicación",
      action_new_location: "Agregar nueva ubicación",
      title: "Perfil de ubicación",
      subtitle:
        "Puede fijar productos en la ubicación del mapa asignándoles etiquetas de ubicación.",
      tips: "<b>Importante:</b> Asigna una ubicación al producto <b>solo</b> si deseas mostrar el producto en la ubicación específica en el mapa. El producto marcado debe tener la ubicación como su especificación principal, como <b>casas o lugares de alquiler</b> o servicios en persona como <b>peluquería y spa</b> .",
    },
  },

  /** {@see BTranslationButton} **/
  translation_button: {
    header: "Multi idioma",
    auto_action: "Traducir automáticamente",
    premium_user_only: "Usuarios Premium",
  },

  /** {@see BProductProfileInclude} **/
  product_include_profile: {
    subtitle:
      "Incluya una lista de artículos que vienen con el paquete del producto o servicio.",
    dialog: {
      header: "Elementos del paquete del producto",
      title: "Artículos incluidos",
      subtitle: "Esta es una recopilación de artículos que vienen con el producto.",
      action_manage: "Administrar artículos",
      action_disable_msg: "Propietario del mercado",
      select_items_tips:
        "Cree o elija los componentes del paquete que vienen con el producto o servicio. Utilice esta función para destacar lo que los clientes pueden esperar recibir al comprar el artículo. Recomendamos utilizar esta función solo cuando sea crucial para el cliente comprender el contenido incluido, como cuando compra un teléfono inteligente.",
      create_item_tips:
        "Como alternativa, puede incluir un nuevo artículo. Utilice imágenes cuadradas, ya que cambiaremos automáticamente el tamaño de las imágenes cargadas a un formato cuadrado de 256 x 256. Para garantizar una apariencia óptima en todas las plantillas, utilice imágenes minimalistas con fondos transparentes y mantenga un patrón uniforme para todos sus productos.",
      create_new_item_action: "Crear Nuevo opción Acción",
    },
  },

  /** {@see BPageProduct} **/
  product_admin: {
    products_list: "Lista de productos",
    product: "Producto",

    menu: {
      edit: "Editar",
      review: "Revisar",
      orders: "Pedidos",
      inventory: "Inventario",
      dashboard: "Panel",
      back_to_products: "productos",
      drop_shipping: "Envío directo",
    },

    /** {@see BPageProductDashboard} **/
    dashboard: {
      /** {@see BProductInfoAbstractView} **/
      info: {
        title: "Perfil",
        title_small: "Producto",
        category: "categoria de producto",
        link: "Enlace del producto",
        type: "Tipo",
        inputs: "Información de entrada",
        outputs: "Información de salida",
        user_data_form: "Formulario de información del comprador",
        staff_messages: "Mensajes del personal",
        add_note: "Añadir la nota",
        product_tags: "Etiquetas de productos",
        edit_tags: "Editar etiquetas",
      },
      /** {@see BProductOrdersAbstractView} **/
      orders: {
        title: "Pedidos",
        title_small: "sin procesar",
        physical_orders_title: "Carritos de compras con este producto",
        send_count_in_period: "Pedidos enviados entre {start} ~ {end}",
        downloads_count_in_period:
          "Recuento de archivos descargados entre {start} ~ {end}",
      },

      /** {@see BProductInventoryAbstractView} **/
      inventory: {
        title: "Inventario",
        title_small: "Depósito",
        total_sell: "Ventas totales",
        total_sell_today: "Ventas de hoy",
        total_sell_timespan: "Ventas totales entre {start} ~ {end}",
        chart: {
          labels: ["Inventario", "Rebaja"],
        },
        subscribers_title: "Suscriptores",
        subscribers_title_small: "Total de pedidos suscritos",
      },

      /** {@see BProductFinanceCharts} **/
      finance: {
        title: "Financiero",
        title_small: "Informe de compras entre {start} ~ {end}.",
        select_mode_title: "Mostrar por",
        modes: {
          sell: "Rebaja",
          payment: "Pago",
          discount: "Descuento",
        },
        currency_select_title: "Precio por moneda seleccionada",
        sell_today: "Ventas de hoy",
        product_price: "Precio del producto",
        currency_unit: "Unidad monetaria",
        sell_30days: "30 días de ventas",
        sell_daily: "Ventas diarias",
        sell_yesterday: "Ventas de ayer",
      },

      /** {@see BProductRatingCharts} **/
      survey: {
        title: "Calificación del producto",
        title_small: "Informe de satisfacción del cliente",
        total_participation: "Número total de contribuciones",
        total_participation_tooltip: "Recuento total de evaluadores del producto.",
        today_participation: "Calificaciones de hoy",
        last7days_participation: "Contribuciones de los últimos 7 días",
        chart: {
          participate: "Participación",
          participate_title: "El número de contribuciones",
          score: "Puntaje",
        },
        users_not_rated_msg: "Los usuarios aún no han calificado este producto.",
      },

      /** {@see BProductMarketingAbstractView} **/
      inform: {
        title: "Expectativas del cliente",
        title_small: "Esperando descuentos o disponibilidad",
        message:
          "Notificar a los clientes cuando los productos salgan a la venta o estén disponibles",
        waiting_for_auction: "Esperando que los productos salgan a la venta",
        waiting_for_available: "Esperando que los productos estén disponibles.",
        unit: "persona(s)",
      },
    },

    /** {@see BPageProductInventory} **/
    inventory: {
      /** {@see BProductInventoryManagement} **/
      variants: {
        inventory_list: "Lista de inventario",
        add_variant: "Añadir variante",

        title: "Inventario de productos/Lista de variantes de productos",
        sub_title:
          "Si este producto tiene más de una variante, introdúzcalas en esta sección. Puedes definir por separado el monto, precio y descuento de cada variante; de lo contrario, se aplicarán los valores predeterminados del producto para la fijación de precios.",
        add_action: "Añadir variante",
        count_input: "Inventario",
        count_input_action: "Establecer recuento",
        management_title: "Gestión de inventario y variantes de productos",
        add_title: "Añadir variante de producto",
        edit_title: "Editar variante de producto",
        notifications: {
          add_success: "Variante de producto añadida.",
          delete_success: "Variante de producto Eliminado.",
          save_product_inventory_success: "Inventario de productos guardados.",
        },
      },

      /** {@see BProductInventoryManagementVirtual} **/
      variant_item: {
        price: "precio",
        same_as_product: "Similar al producto principal",
        in_stock: "Inventario",
        delete_dialog: {
          title: "Eliminar variante de producto",
          message: "¿Quieres eliminar esta variante?",
        },
      },
      /** {@see BProductVariantAdd} **/
      variant_add_edit: {
        message: "Número de producto Único",
        active_input: "¿Está activa esta variante?",
        sku: "SKU",
        sku_tips: "Código de almacén del producto.",
        mpn: "MPN",
        mpn_tips: "Código de producto insertado por el fabricante en el empaque del producto",

        has_pricing_input: "¿El precio es diferente al del producto principal?",
        inventory_unit: "Artículos",
        images_message:
          "Después de guardar esta variante, podrá agregar una imagen aquí.",

        config: {
          title: "Título",
          subtitle: "Configura y gestiona esta opción para tu tienda.",
        },
        variables: {
          title: "Variante Opciones",
          subtitle:
            "<b></b><b></b> Configura y gestiona esta opción para tu tienda.",
          graphical_asset_tips:
            "<b></b> Configura y gestiona esta opción para tu tienda.",
          graphical_asset_action: "Opción",
          graphical_asset_action_caption: "Opción",
        },
        smart_unit_price: {
          tips: "<b></b><b></b><b></b> Configura y gestiona esta opción para tu tienda.",
          smart_unit_price: "Opción",
        },
        quantity: {
          title: "Inventario",
          subtitle: "Subtítulo",
        },
        price: {
          title: "Precios",
          subtitle:
            "Configura y gestiona esta opción para tu tienda.",
        },
        package: {
          title: "Título",
          subtitle:
            "Configura y gestiona esta opción para tu tienda.",
          same_as_product_action: "Opción",
        },
        image: {
          title: "Variante Imágenes",
          subtitle:
            "Configura y gestiona esta opción para tu tienda.",
        },
        inputs: {
          sku: {
            message: "Mensaje",
          },
          mpn: {
            message: "Mensaje",
          },
          gtin: {
            label: "Opción",
            message:
              "Configura y gestiona esta opción para tu tienda.",
          },
        },
      },
    },

    /** {@see BPageProductArticle} **/
    edit_article: {
      menu: {
        tags: "Etiquetas",
        article: "Artículo",
      },
    },
  }, // product_admin

  /**
   * @see TransportationsEligibleView
   */
  transportation_eligible: {
    subtitle:
      "Los servicios de envío disponibles dependen del tamaño y peso proporcionados.",
  },

  /** {@see BProductExtraInput} **/
  product_extra_physical: {
    weight: "Peso del paquete",
    weight_subtitle:
      "Ingrese aquí el peso total del embalaje del producto. Esta información ayuda a elegir el método de envío adecuado y garantiza que el pedido no supere el límite de envío.",
    weight_unit: "Kg",
    size: "Dimensiones del paquete",
    size_subtitle:
      "Ingrese aquí el tamaño completo del paquete del producto. Esta información se utiliza para elegir el método de envío correcto y garantizar que el pedido no exceda el límite de tamaño del paquete.",

    width: "Ancho",
    length: "Largo",
    height: "Altura",
    lead_time_title: "Tiempo de preparación",
    lead_time: "Tiempo de preparación",
    lead_time_subtitle:
      "El tiempo de entrega estima la duración necesaria para preparar un producto para su envío, lo que ayuda a estimar el tiempo de entrega.",

    lead_time_dimension: "Horas)",
    bulk_action: "Acciones masivas",
    bulk_action_subtitle:
      "Puede aplicar la información del embalaje a todas las variantes del producto.",

    bulk_action_input: "Actualizar todas las variantes",
    bulk_action_msg:
      "Establezca el empaque del producto y el tiempo de preparación para todas las variantes.",
    dynamic_lead_time: "Opción",
    instant_delivery: "Opción",
  },

  /**
   * @see SGalleryUploadGrid
   */
  gallery_upload_grid: {
    upload_images: "Subir Imágenes",
  },

  /**
   * @see BProductImagesGallery
   */
  product_images_gallery: {
    dialog_alt: {
      title: "Título",
      placeholder: "Opción",
      success_update_notification: "Éxito Actualizar Notificación",
    },
    dialog_bg_remove: {
      title: "Título",
      action: {
        title: "Eliminar fondo",
        subtitle: "Subtítulo",
      },
      success_remove_bg_notification: "Éxito Quitar bg Notificación",
    },
  },
  /**
   * @see VariantGraphicalAssetsList
   */
  variant_graphical_assets: {
    title: "Título",
    tips: {
      how_it_works:
        "<b></b><br /><b></b><b><s></s></b> Configura y gestiona esta opción para tu tienda. {filename}",
      how_set_name:
        "<b></b><br /> Configura y gestiona esta opción para tu tienda.",
    },
  },

  /**
   * @see ExtraPricingLevels
   */
  extra_pricing_levels: {
    extra_pricings: "Opción",
    min_quantity: "Opción",
    range_is_out_of_stock: "Opción",
  },

  /**
   * @see BProductVariantItem
   */
  product_variant_item: {
    duplicated_variant: "Opción",
    set_color_warning: "Establecer Color Advertencia",
    set_volume_warning: "Opción",
    set_pack_warning: "Opción",
    set_weight_warning: "Establecer Peso Advertencia",
    set_type_warning: "Establecer Tipo Advertencia",
    set_style_warning: "Opción",
    out_of_stock: "Opción",

    image: {
      tooltip: "Configura y gestiona esta opción para tu tienda.",
    },
    enable: {
      true_tooltip: "Opción",
      false_tooltip: "Configura y gestiona esta opción para tu tienda.",
    },
    restore_dialog: {
      title: "Restaurar Variante",
      message: "Configura y gestiona esta opción para tu tienda.",
      action: "Acción",
    },
    notifications: {
      restore_variant_success: "Configura y gestiona esta opción para tu tienda.",
    },
  },

  /** {@see BProductImagesGallery} **/
  product_images_list: {
    upload_button: "Más imágenes de productos",
    upload_an_image: "Seleccione una imagen.",
    notifications: {
      update_sort_success: "Clasificación de imágenes guardada",
      delete_image_title: "Eliminar imagen del producto",
      delete_image_success: "Imagen eliminada con éxito",
    },
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Precios",
    inventory: "Inventario",
    discount: "Descuento",
  },

  /** {@see BGiftcardTypeAdd} **/
  gift_card_type_edit: {
    title_input: "Título",
    color_input: "color de la tarjeta",
    charge_input: "Carga inicial",
    charge_input_hint: "Cargo inicial por cada tarjeta",
    currency_input: "Divisa",
    currency_input_message: "Solo para compras con esta moneda",
    lifetime_input: "Validez de la tarjeta (mes)",
    lifetime_input_message: "Validez de la tarjeta",
    card_image_input: "imagen de la tarjeta",
    notifications: {
      create_success: "Tarjeta creada",
      update_success: "Tarjeta actualizada",
    },
  },

  /** {@see BInventoryWarehouse} **/
  shop_warehouse_edit: {
    title: "Añadir almacén",
    message:
      "Ingrese su dirección de almacén y perfil para calcular el costo de envío.",
    name_input: "Nombre del almacén",
    address: "dirección",
    name_input_message: "Introduzca un apodo para su almacén.",
    person_name: "Nombre del oficial",
    phone_number: "Número de contacto",
    map_title: "Dirección del almacén de la tienda",
    confirm_action: "Aprobación de Almacén",
    address_name: "Depósito",
    notifications: {
      success_save: "Los cambios se guardaron exitosamente.",
    },
  },

  /** {@see BPageShopLogisticInventoryList} **/
  inventory_list: {
    title: "Inventario de la tienda",
    subtitle: "Listado de todos los productos en tienda.",
    cant_set_here: "No se puede configurar aquí",

    search_input: "Búsqueda de Producto...",
    search_input_title: "Buscar entre los productos de la tienda",
    apply_filter: "Aplicar filtro",
    inventory: "Lista de inventario",
    export: "Exportar inventario",
    import: "Importar inventario",
    bulk_price: "Cambio de precio a granel",
    bulk_discount: "Cambio de descuento por volumen",
    category_filter_msg: "⚡ ¡Aplicará para todos los productos y subcategorías!",
    table: {
      waiting: "Recibiendo información... por favor espere",
      open_state: "Activo",
      close_state: "inactivo",
      image: "Imagen",
      product: "nombre del producto",
      code: "Código de producto",
      sku: "SKU",
      mpn: "MPN",
      original: "Opción",
      status: "Estado",
      in_stock: "En stock",
      edit: "Cambio",
    },

    bulk_discount_dialog: {
      title: "Acciones masivas > Descuento",
      message:
        "Nota: La siguiente cantidad será como un porcentaje del descuento de todos los productos en su tienda. Además, los valores de descuento calculados se convertirán de forma inteligente al número redondo más cercano según la moneda seleccionada. Tenga cuidado al ingresar los valores.",
      check: "Apruebo los cambios de descuento.",
    },
    notifications: {
      save_success: "Cambio de inventario guardado.",
    },
  },

  /**
   * @see BInventoryBulkPrice
   */
  bulk_price_dialog: {
    title: "Acciones masivas > Precio",
    message:
      "El siguiente importe se aplicará como porcentaje al precio de todos los productos de su tienda. Además, los valores de precio calculados se convertirán de forma inteligente al número redondo más cercano en función de la moneda seleccionada. Tenga cuidado al ingresar los valores.",
    check: "Acepto cambios de precio.",
    check_description:
      "El precio se cambiará para la categoría seleccionada y todas las subcategorías.",
    add_percent_tab: "Agregar porcentaje",
    add_constant_tab: "Agregar constante",
    ending_tab: "estrategia final",
    marketplace_listing_price: "Precio de lista",

    constant: {
      subtitle:
        "El importe se añadirá o restará del precio actual de los productos.",
    },
    ending: {
      subtitle:
        "El final del precio actual de los productos se cambiará al valor especificado.",
    },
    marketplace: {
      title: "Precio de listado en Marketplace",
      subtitle:
        "Esta opción le permite actualizar automáticamente el precio de los productos en el mercado. En ocasiones, el precio del producto principal puede no coincidir con el precio del proveedor debido a cambios de precio manuales.",
      strategy: {
        min: {
          title: "Establecer precio mínimo",
          description:
            "Establezca el precio mínimo del producto como precio de cotización.",
        },
        max: {
          title: "Establecer precio máximo",
          description:
            "Establezca el precio máximo del producto como precio de lista.",
        },
      },
    },

    category: {
      subtitle: "Limite la acción masiva a una categoría y todas las subcategorías.",
    },
    vendor: {
      subtitle:
        "Limite las acciones en bloque a un proveedor específico. Cuando se selecciona un proveedor, la actualización de precio se aplicará a los productos del proveedor, lo que representa el precio de venta de ese proveedor.",
      listing_price_need_update_msg:
        "Si desea actualizar el precio de lista (el precio que se muestra en la lista de productos), debe volver a enviar la actualización masiva con los mismos filtros pero sin seleccionar un proveedor.",
    },
    listing_products_changes: "Cambio de listado de productos",
    total_vendor_products: "Total de productos del proveedor",
    total_products: "Total de productos",
    total_variants: "Variantes totales",
  },

  /** {@see BProductSpecTable} **/
  spec_view: {
    auto_save_input: "Guardado automático",
    auto_save_input_message: "Los cambios se guardarán automáticamente.",
  },

  /** {@see STimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Restante para el inicio",
    title_between_start_end: "Quedando hasta el final",
    title_after_end: "Acabado",
    title_no_start_end: "¡Sin plazo!",
  },

  /** {@see GeoMap} **/
  geo_map: {
    views: "Puntos de vista",
    views_unit: "Veces",
    product_views: "Vistas del producto",
    buys: "compras",
    buys_unit: "Pedidos",
    baskets: "carros activos",
    added_items: "Agregar artículos",
    removed_items: "Eliminar elementos",
  },

  /** {@see BPageShopFinanceGateways} **/
  b_page_shop_finance_gateway: {
    title: "Métodos de pago",
    sub_title:
      "Configura y gestiona esta opción para tu tienda.",
    add_gateway: "Nuevo Pago Método",

    add_gateway_dialog: {
      title: "Seleccionar Moneda",
      country_currencies: "Opción",
      crypto_currencies: "Opción",

      confirm: "Añadir método de pago",

      online_methods: "En línea Métodos",
      cod_methods: "Pago contra entrega",
      bank_transfer: "Transferencia bancaria",
      cash_methods: "Opción",

      currency_step: {
        title: "Seleccionar a Moneda",
        subtitle:
          "Configura y gestiona esta opción para tu tienda.",
        add_first_currency: {
          subtitle: "Configura y gestiona esta opción para tu tienda.",
          title: "Agregar moneda",
        },
      },
      gateway_step: {
        title: "Activo Pago Métodos",
        subtitle:
          "Configura y gestiona esta opción para tu tienda.",
      },

      config_step: {
        import_config: "Configura y gestiona esta opción para tu tienda.",
        import_from: "Opción",
      },

      request_add_new_gateway: {
        title: "Título",
        subtitle:
          "Configura y gestiona esta opción para tu tienda.",
      },

      inputs: {
        currency: {
          placeholder: "Selecciona una pasarela para importar...",
        },
        manual: {
          true_title: "Sí Título",
          true_description: "Sí Descripción",

          false_title: "Automático connect",
          false_description:
            "Configura y gestiona esta opción para tu tienda.",
        },
      },
    },
  },

  /** {@see FaqRequestsList} **/
  faq_list: {
    table: {
      nodata: "No se encontraron preguntas.",
      more_data_action: "Más preguntas ..",
      user: "Usuario",
      tag: "Etiqueta",
      question: "Pregunta",
      officer: "Personal",
      answer: "Responder",
      created_at: "Fecha",
      priority: "Prioridad",
      edit: "Editar",
    },
    dialog: {
      add_new_action: "Enviar nueva pregunta",
      edit_action: "Editar preguntas frecuentes",
      question_input: "Pregunta",
      question_input_placeholder: "Haz tu pregunta ..",
      link_input: "Enlace",
      link_input_placeholder: "Puede hacer referencia a un enlace en respuesta.",
      answer_input: "Responder",
      answer_input_placeholder: "Ingrese el texto de la respuesta ..",
      tag_input: "Etiqueta (Título de la categoría)",
      tag_input_placeholder: "Introduce un título breve",
      priority_input: "Prioridad: (0 a 10)",
    },
    delete_alert: {
      title: "Eliminar pregunta",
      message: "¿Quieres eliminar esta pregunta?",
      action: "Borrar",
    },
    notifications: {
      send_success: "Su respuesta ha sido enviada con éxito.",
      delete_success: "Su pregunta ha sido eliminada con éxito.",
    },
  },
  /** {@see ContactMessagesList} **/
  contact_messages_list: {
    load_more_action: "Más mensajes..",

    table: {
      nodata: "No se encontraron preguntas.",
      user: "Usuario",
      message: "Cuerpo del mensaje",
      category: "Categoría",
      officer: "Personal",
      answer: "Responder",
      created_at: "Fecha",
      contact: "Contacto",
      edit: "Editar",
    },

    dialog: {
      title: "Responder al mensaje",
      category: "Categoría",
      user_name: "Nombre",
      email: "Correo electrónico",
      phone: "Número de contacto",
      message: "Mensaje de texto",
      status: "Estado de respuesta",
      status_answered: "Contestada",
      status_waiting: "Esperando respuesta",
      answer_input: "texto de respuesta",
      mail_input: "Enviar correo",
      mail_input_message:
        "Si habilita esto, su respuesta se enviará al correo electrónico del usuario.",
    },
    delete_alert: {
      title: "Borrar mensaje",
      message: "¿Quieres borrar este mensaje?",
      action: "Borrar",
    },
    notifications: {
      send_success: "Su solicitud ha sido enviada con éxito.",
      delete_success: "Mensaje borrado.",
    },
  },
  /** {@see BPageCampaign} **/
  campaign: {
    title: "Campaña",
    menu: {
      setting: "Ajustes",
      return: "Atrás",
      dashboard: "Panel",
      links: "Enlaces",
      landing: "Aterrizaje",
      ads: "anuncios",
      finance: "Finanzas",
    },
    /** {@see BPageCampaignDashboard} **/
    dashboard: {
      title: "Panel",
      status: "Resumen de estado",
      sessions: "Sesiones",
      links_overview: "Resumen de enlaces de campaña",
      orders: "Pedidos",
      performance: "Rendimiento de la campaña",
      links_funnel: "Enlaces de campaña Rendimiento",
      no_links:
        "¡No hay datos disponibles! Crea un enlace a tu campaña.",
      social: "Prospectos de redes sociales",
      conversion_over_time: "Conversión a lo largo del tiempo",
      total_campaign_sell: "Ventas totales por campaña",
    },
    /** {@see BPageCampaignFinance} **/
    finance: {
      title: "informe financiero",
      campaign_revenue: "Ingresos de campaña",
      total_revenue:
        "Ingresos totales por campaña",
      links_revenue: "Ingresos de enlaces de campaña",
      payments_over_time: "Ventas a lo largo del tiempo",
      all_links: "Todos los enlaces",
    },
    /** {@see BPageCampaignLanding} **/
    landing: {
      empty_message: "Establezca una página de destino en la configuración de la campaña.",
      set_landing: "Establecer página de destino",
      create_landing: "Crear nueva página de destino",
    },

    /** {@see BPageCampaignLinks} **/
    links: {
      title: "Enlaces de campaña",
      url_input_message: "Ingrese la URL de su página de destino",
    },

    /** {@see BPageCampaignSetting} **/
    setting: {
      menu: {
        config: "Configuración",
        timespan: "Periodo de tiempo",
        banner: "Bandera",
        Notification: "Notificación",
      },

      general_setting: {
        title: "Configuración general de la campaña",
        sub_title: "Nombre, página de destino y código de descuento",

        name_input: "Nombre de campaña",
        name_input_hint: "Agregue un nombre a su campaña",
        enable_input: "¿Está activa la campaña?",
        page_input: "Página de destino",
        discount_code_input: "Código de descuento",
        limit: "Límite de descuento",
        max_count: "recuento máximo",
        max_count_unit: "Artículos",
        start: "Comienzo",
        end: "Fin",
        notification_enable_input: "¿Notificación habilitada?",

        landing_page: "Página de destino",
        discount_code: "Código de descuento",

        auto: "Campaña predeterminada",
        auto_message:
          "Campaña por defecto activada en tu tienda",
      },
      time_setting: {
        title: "Periodo de tiempo",
        sub_title:
          "Fecha y hora de inicio / Fecha y hora de finalización",
        start_input: "Comienzo",
        start_input_placeholder: "Seleccione la hora de inicio de la campaña",
        end_input: "Fin",
        end_input_placeholder: "Seleccione la hora de finalización de la campaña",
      },
      banner_setting: {
        title: "pancarta de la tienda",
        sub_title:
          "Mostrar en la parte superior de la página de la tienda",

        message_input: "Mensaje de texto",
        message_input_placeholder: "Fiesta Especial...",
        message_input_hint: "Texto del mensaje del banner en la parte superior de la tienda",
        bg_image_input: "URL de la imagen de fondo",
        bg_image_input_hint: "URL de la imagen de fondo completa",
        repeat_pattern: "Repetir patrón",
        simple: "Sencillo",
        dark_input: "tema oscuro?",
        icon_input: "Icono",
        icon_input_hint:
          "Nombre del icono de diseño de materiales o Fontawsom: fa:fas fa-star",
        anim_input: "Dirección de animación",
        anim_input_message: "URL del archivo de animación de Lottie",
        preview: "Avance",
        preview_update_action: "Actualización de Vista previa",
        bg_color: "Color de fondo",
        icon_bg: "Color de fondo del icono",
      },
      notifications: {
        title: "Notificación",
        sub_title: "Cree una notificación y vincúlela a su campaña.",
        update_success: "Su campaña ha sido actualizada.",
        action_button: "Botón de acción",
        background_color: "Color de fondo",
        text_color: "Color de texto",
        action_color: "color de acción",
        action_text_color: "Color del texto de la acción",
        notification_image: "Imagen de notificación",
        notification_bg: "Fondo de notificación",
        show_preview: "Mostrar vista previa",
        persistence: "Persistencia",
        persistence_message:
          "¿Quieres mostrar cada vez que tu usuario visita el sitio web?",
        radius: "Radio",
        show_delay: "Mostrar retraso",
      },
    },
  },

  /** {@see BCategoryAdd} **/
  add_category: {
    title_edit: "Editar categoria",
    title_update: "Añadir nueva categoria",

    config: {
      subtitle:
        "Las categorías ayudan a agilizar la gestión de productos y hacen que sea más fácil para sus clientes encontrar productos en su tienda.",
    },
    parent: {
      subtitle:
        "Esta categoría aparecerá debajo de su categoría principal. Si un producto no tiene una categoría principal, se mostrará en la categoría principal.",
    },
    template: {
      title: "Modelo",
      edit_page: "Editar página",
      Pages_list: "Lista de páginas",
      subtitle:
        "Puede mejorar la visualización de su página de categorías superponiendo una página personalizada. El mejor enfoque es crear páginas con fondos transparentes y diseñar 1 o 2 secciones específicas para cada categoría. Luego, puede vincular una página a varias categorías, utilizando contenido dinámico para personalizar cada categoría individualmente.",
    },
    critical_zone: {
      title: "Zona crítica",
      subtitle:
        "Si eliminas una categoría, sus subcategorías y productos se moverán al directorio principal <b>📁 {parent}</b> . Para administrar categorías que no están en la lista de productos, ve a la pestaña Tienda > Categorías.",
      accept_delete: {
        true_description: "Quiero eliminar esta categoría.",
        true_title: "Confirmar eliminar categoría",
      },
    },

    menu: {
      delete: "Eliminar categoría",
      filter: "filtros",
      settings: "Ajustes",
      back: "Atrás",
    },
    title_input: "Título de la categoría *",
    title_input_error: "Seleccione un título de categoría",
    name_input: "Nombre de la categoría (inglés) *",
    name_input_error: "Seleccione un nombre único para la categoría",
    description_input: "Descripción de categoría",
    description_input_message: "Introduce una breve descripción de la categoría..",
    parent_input: "Categoría principal",
    parent_input_message: "Esta categoría aparece en la página de inicio de la tienda.",
    image_input: "Imagen de categoría",
    image_input_placeholder: "Seleccione una imagen para la categoría",
    edit_action: "Editar categoria",
    add_action: "añadir categoría",
    back_action: "Atrás",
    no_category: "Sin categorías",
    star: "Estrella",

    filter: {
      title: "Filtros de categoría",
      sub_title: "Administrar filtros y categorías aplicables a los productos de esta categoría.",
      message:
        "Ingrese y guarde el título de la característica técnica común para esta categoría en el cuadro a continuación. Después de guardar la lista, las categorías de filtro se mostrarán junto con el contenido de cada categoría. El color, el peso, el tamaño, la marca, etc. se extraen automáticamente de la variante del producto.",
    },
    delete_alert: {
      title: "Eliminar categoría",
      message: "¿Quieres eliminar la categoría {title}?",
      action: "Borrar",
    },
    notifications: {
      add_success: "Nueva categoría añadida.",
      edit_success: "Categoría editada.",
      delete_success: "{title} eliminado.",
    },
    /** {@see BCategoryFilterEditor} **/
    edit_filter: {
      spec_input: "Lista de especificaciones técnicas",

      price: "precio",
      min: "mínimo",
      max: "máx.",
      suggested_list: {
        brand: "Marca",
        colors: "Colores",
        styles: "Diseño",
        volumes: "Volumen",
        weights: "Peso",
        packs: "Número por paquete",
        types: "Tipo",
      },
      notifications: {
        edit_success: "Categoría editada.",
      },
      manually_update_filters_tips:
        "<b>¡Importante!</b> Los filtros se actualizan automáticamente cuando se modifican los productos. Sin embargo, después de realizar cambios en los productos de una categoría, vuelva aquí y haga clic en el botón Guardar/Regenerar para actualizar el filtro.",

      inputs: {
        spec: {
          message:
            "Lista de características que desea que se muestren en la sección de filtro",
          placeholder: "Seleccione las especificaciones para mostrar en el filtro...",
        },
      },
    },
  },

  /** {@see BAppShopList} **/
  apps_list: {
    nodata: "No hay ninguna aplicación instalada en su tienda",
    inactive: "inactivo",
    my_apps: "Mis aplicaciones",
    app_store: "Agregar nueva aplicación",
  },

  /** {@see BShopAdd} **/
  add_shop: {
    menu: {
      shop_title: "Título de la tienda",
      shop_name: "Nombre de la tienda",
      description: "Descripción",
      contact: "Información del contacto",
      image: "Imagen",
    },
    title_input: "Título",
    title_input_tips: "Introduzca el nombre de su tienda, marca o empresa.",
    active_message: "Configure como activo para que todos puedan acceder a su sitio web.",
    language_input_message: "Selecciona el idioma de tu tienda.",
    name_input: "Nombre",
    name_input_message: "Introduce un nombre para tu tienda.",
    name_input_tips:
      "No utilice caracteres, espacios o letras que no sean ingleses; si se utilizan, es posible que el nombre de la tienda no se muestre correctamente.",
    description_input: "Descripción de la tienda",
    description_input_message: "Escribe una breve descripción sobre tu negocio.",
    description_input_tips:
      "Esta descripción aparecerá en el pie de página de su tienda y también se utilizará como descripción de metaetiqueta predeterminada para las páginas de su tienda.",
    address_input: "Dirección de la tienda",
    address_input_message: "Ingrese la dirección exacta de la ubicación de la tienda",

    phone_input: "número de teléfono",
    phone_input_message: "Número de contacto del cliente",
    phone_input_tips:
      "Ingrese el número de contacto con el código del país. Este número también se utiliza para mostrar información en la búsqueda de Google.",
    email_input: "Correo electrónico",
    email_input_message: "Dirección de correo electrónico para clientes",
    locality_input: "Localización",
    locality_input_message: "Ubicación de la tienda",
    region_input: "Estado o Provincia",
    region_input_message: "Estado o provincia en el que opera",
    country_input: "País",
    country_input_message: "país de negocios",
    postal_code_input: "Código postal",
    postal_code_input_message: "Código postal de la tienda",
    image_input: "Imagen de la tienda",

    map: {
      title: "Dirección de la tienda",
      confirm: "Registro de dirección",
      address: "dirección",
      receptor: "Tienda",
    },

    create_shop_action: "Crear tienda",
    update_shop_action: "Actualizar",

    notifications: {
      copy_success: "Copia de la dirección de la tienda.",
      name_available: `Este nombre ({name}) está disponible.`,
      add_success: `Tienda {title} creada.`,
      edit_success: "Tienda editada.",
    },
  },

  /** {@see BProductInventoryManagementVirtual} **/
  virtual_items_list: {
    add_virtual_item: "Añadir Virtual opción",
    add_virtual_item_desc:
      "Para vender productos virtuales, debe agregarlos en esta sección. El número de artículos virtuales es igual al número de artículos gratuitos en esta sección. Una vez que los clientes compren el artículo virtual, se les enviará el enlace.",

    filter_action: "Aplicar filtro",
    not_processed: "Pedidos sin procesar",
    title: "Lista de artículos",
    vew_order: "Ver pedido",

    table: {
      nodata: "no hay artículos",
      product: "Producto",
      data: "Datos",
      status: "Estado",
      user_message: "Mensaje de usuario",
      updated_at: "Última actualización",
      order: "Pedido",
      delete: "Borrar",
    },
    notifications: {
      delete_success: "Elemento eliminado con éxito.",
    },
  },

  /** {@see BProductVirtualItemAdd} **/
  add_virtual_item: {
    title_edit: "Editar valores",
    title_add: "Agregar artículo al producto",
    sub_title: "Creación y edición de productos virtuales",
    message:
      "Configura y gestiona esta opción para tu tienda.",
    edit_outputs: "Editar formulario de salida",
    notifications: {
      edit_success: "Artículo editado.",
      add_success: "Elemento añadido a la lista.",
    },
  },

  /** {@see BPageOrderVirtual} **/
  virtual_process_center: {
    title: "Centro de procesamiento",
    sub_title: "procesando orden",
    virtual_product: "producto virtual",
    menu: {
      report: "Reporte",
      timeline: "Cronología",
      order: "Pedido",
    },

    /** {@see BOrderVirtualItem} **/
    outputs_widget: {
      title: "Formulario de salida",
      table: {
        title: "Título",
        value: "Valor",
      },
      tips: [
        "Después de completar la solicitud del cliente, presione la tecla de confirmación del pedido para notificar al comprador sobre el pedido.",
        "Una vez que se aprueba el pedido, el comprador no podrá editar la información ingresada.",
      ],
      alerts: {
        order_completed_by_admin: "El pedido se ha completado.",
        order_completed_by_buyer: "El pedido ha sido completado por el comprador.",
        waiting_for_buyer: "Esperando la aprobación del comprador..",
      },
    },
  },

  /** {@see BPageOrderFile} **/
  file_process_center: {
    title: "Centro de procesamiento",
    sub_title: "procesando orden",
    menu: {
      report: "Reporte",
      timeline: "Cronología",
      order: "Pedido",
    },
  },

  /** {@see BOrderDashboard} **/
  process_order_page_dashboard: {
    title: "procesando orden",
    cancel_order_action: "Cancelar orden",
    open_basket_cation:
      "Este carrito de compras está abierto, lo que significa que el cliente está comprando y aún no ha pagado el pedido.",

    reject_dialog: {
      title: "Motivo para rechazar el pedido",
      message:
        "Seleccione el motivo del rechazo de este pedido de la lista a continuación. Asegúrese de informar al cliente del proceso de cancelación y reembolso. Los reembolsos deben hacerse dentro de las 12 horas.",
      confirm_now_action: "Cancelar pedido ahora",
      confirm_in48h_action: "Cancelar pedido en 48 horas",

      dismiss_reject_action: "Descartar la cancelación del pedido",

      options: {
        title: "Opciones",
        subtitle:
          "Si desea cancelar su pedido inmediatamente, puede utilizar esta opción.",
      },

      express_input: {
        true_title: "Sí Título",
        false_title: "No Título",
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
        false_description:
          "Configura y gestiona esta opción para tu tienda.",
      },
    },

    notifications: {
      update_status_success: "Estado del pedido actualizado.",
      reject_update_success:
        "Estado de cancelación de pedido actualizado.",
      dismiss_reject_success:
        "El pedido volvió al proceso normal.",
      set_tracking_success: "El ID de seguimiento del pedido se guardó correctamente.",
      shipping_address_update_success:
        "Configura y gestiona esta opción para tu tienda.",
      vendor_order_status_update_success:
        "Configura y gestiona esta opción para tu tienda.",
    },
  },
  /** {@see BPageOrderPhysical} **/
  /** {@see BPageOrderVirtual} **/
  /** {@see BPageOrderFile} **/
  /** {@see BPageOrderService} **/
  process_center: {
    title: "Centro de procesamiento",

    physical_product: "Productos físicos",
    menu: {
      label: "Etiqueta del paquete",
      receipt: "Factura",
      back: "Atrás",
      return: "Devolver",
      report: "Reporte",
      timeline: "Cronología",
      inputs: "Entradas",
      order: "Pedido",
    },

    /** {@see OrderPaymentWidget} **/
    payment_widget: {
      title: "Pago",
      checklist: [
        "Verifique el monto del pedido y el pago del cliente.",
        "Verifique la dirección de facturación.",
        "Asegúrese de que la información ingresada sea correcta, especialmente si el pago es contra reembolso.",
      ],
      action_cod_pay: "Confirmar pago por cliente",
      action_dir_pay: "Confirmar recibo de pago subido",
      payment_receipt_not_uploaded_error:
        "¡Aún no se ha subido el recibo de pago!",

      waiting_for_pay: "Pago pendiente",
      processing_payment: "Procesando el pago",
      processing_cancel: "Pago cancelado",
      require_capture: "Requerir captura",
      paid: "Pagado",
      cod_pay_info:
        "Cuando haya recibido el pedido del cliente, puede confirmar el pago y completar el pedido.",
      dir_pay_info:
        "El recibo de pago aparecerá arriba. Antes de confirmar el pago, verifique el monto del depósito y la información del recibo con su banco.",

      created_date: "Fecha de creación",
      pay_date: "Fecha de pago",
      payment_gateway: "Pasarela de pago",
      payment_method: "Método de pago",
      risk: "Valor de riesgo",
      billing_details: "Detalles de facturación",

      add_transaction: "Agregar nueva factura",
      add_transactions_message:
        "Debe crear al menos una transacción para este pedido. En algunos casos, el pago se requiere en varios pasos. Usted determinará qué transacciones debe pagar el usuario durante el trabajo.",

      add_bill_dialog: {
        title: "Agregar factura",
        message:
          "Puede agregar una o más facturas nuevas para este pedido. El cliente verá estas facturas y pagará cada una de ellas según el avance de la obra.",
        amount_input: "Monto de la factura",
        action: "Agregar factura",
      },
      edit_bill_dialog: {
        title: "Editar factura",
        message: "Puede editar las facturas pendientes.",
        action: "Editar factura",
      },
      bill_cash_payment_dialog: {
        title: "Registrar pago en efectivo",
        message:
          "Si el comprador ha pagado el importe de esta factura en efectivo o de forma distinta al pago online, en este apartado, seleccionando una opción, regístrese y confirme su pago. En esta sección, puede ver solo las pasarelas de pago en efectivo de su tienda, si no ve esa opción, debe activar una pasarela de pago en efectivo en la moneda seleccionada en su tienda.",
        action: "Confirmar pago de factura",
      },

      table: {
        title: "Título",
        amount: "Monto",
        description: "Descripción",
        info: "Información",
      },
      user_payment: "Pago del Cliente",
      cod: "Contrareembolso",
      gateway_wage: "Tarifa",
      gift_card: "Tarjeta de regalo",
      discount_code: {
        title: "Código de descuento",
        code: "Código",
        percent: "Por ciento",
        limit: "Límite",
      },
      club: {
        title: "club de clientes",
        percent: "Por ciento",
        limit: "Límite",
      },

      coupon: {
        title: "Cupón",
        percent: "Por ciento",
        limit: "Límite",
        charge: "Cargo",
      },
      delivery: {
        title: "Costo de envío",
        not_paid: "No pagado",
      },
      samin: {
        title: "Tarifa de servicio",
        description:
          "Esta cantidad se ha deducido de su cuenta de billetera Selldone.",
        tooltip: "Calcular por método de pago",
        percent: "Por ciento",
      },
      affiliate: {
        title: "comisión de afiliados",
        affiliate_message:
          "Debes pagar esta comisión a tu afiliado. Este proceso lo hace usted mismo.",
      },
      total_price: "Precio total de artículos",
      total_items_discount: "Descuento de artículos",
      total_price_after_offers: "Total después de aplicar ofertas",

      total_order_price_before_tax: "Precio total antes de impuestos",

      user_payment_amount: "Importe del pago del comprador",
      samin_wage: "Selldone Tarifa de venta hecha",
      pay_cod_dialog: {
        title: "¿Recibió el dinero del pedido?",
        message:
          "Confirme esta opción en el método de pago contra reembolso, después de asegurar el pago completo por parte del cliente.",
        confirm_action: "Confirmar pago del cliente",
      },
      pay_dir_dialog: {
        title: "¿Recibió el dinero del pedido?",
        message:
          "Confirme esta opción después de aprobar el recibo de pago cargado con su banco. Asegúrese de verificar el pago con su banco.",
        confirm_action: "Confirmar pago del cliente",
      },

      notifications: {
        pay_confirm_message:
          "Se confirma el pago.<br> Puerto: {gateway_name}<br> Fecha: {payment_at}",
        pay_fail_title: "No pagado",
        pay_fail_message: "¡El pago no puede ser aprobado!",
      },
    },
    /** {@see BOrderDashboardCart} **/
    basket_list: {
      checklist: [
        "Verifique el inventario.",
        "Si el artículo no está disponible, el monto pagado por ese artículo debe devolverse al cliente.",
      ],
      message:
        "Si alguno de los artículos no está disponible o no se puede vender, desmarque la casilla junto a él y haga clic en el botón <b>Confirmar pedido</b> .",
      action: "Confirmación del pedido",
      list_of_items: "Lista del carrito de compras",
      apply_change_action: "Aplicar los cambios",
      cant_apply_change: "No se pueden hacer cambios",
      lottery_prize_inform:
        "Su cliente gana 1x de este producto. Enviar regalo con este pedido.",

      need_to_refund: {
        title: "Se requiere reembolso al cliente",
        message:
          "Calculamos el importe total de los reembolsos que debes realizar de forma manual. Se calcula en función de los artículos no disponibles y los valores totales reembolsados hasta el momento.",
        calculated_approximately:
          "El importe se calcula de forma aproximada. Calcule usted mismo el importe exacto.",
      },
      need_payback: {
        title: "Se requiere devolución del dinero al cliente",
        message:
          "Hemos notado que el total reembolsado al cliente es mayor que el monto adeudado según los artículos en el carrito. Es posible que deba cobrarle al cliente para recuperar el monto excedente.",
      },
      need_no_refund: {
        title: "No es necesario ningún reembolso",
      },
      total_refund: {
        title: "Total reembolsado",
        message:
          "Es el monto total de reembolsos que realiza automáticamente tu pasarela de pago. Solo algunos servicios de pago admiten esta función, por lo que debes realizar el reembolso manualmente.",
      },
    },
    /** {@see BOrderDashboardPreparing} **/
    preparing: {
      title: "Preparación",
      packing_weight: "Peso del embalaje",
      delivery_type: "Método de envío",
      packing_size: "Dimensiones del embalaje",
      distance_warning: "Supera el límite de distancia permitido.",
      weight_warning: "Excede el peso permitido.",
      volume_warning: "Excede el tamaño de paquete permitido.",
      items_weight_calculation:
        "El peso combinado de todos los artículos es {weight} {unit}",
      not_available_message:
        "¡No está disponible cuando está deshabilitado y no solicita la dirección de envío y, además, el usuario no completó la dirección después de la compra!",

      message:
        "Haga clic en el siguiente botón <b>Pedido listo</b> si el pedido está listo para enviarse.",
      action: "Pedido listo para enviar",
      checklist: [
        "Siguiendo las normas estándar en el embalaje.",
        "Imprima una lista de artículos y colóquela dentro del paquete.",
        "Imprime y pega una etiqueta en la caja.",
      ],
    },

    basket_items: "Lista de artículos de pedido",

    delivered_dialog: {
      title: "¿Este pedido ha sido recibido por el cliente?",
      message: "Confirma esta opción cuando sepas que el cliente recibió el pedido",
      confirm_action: "Confirmo que el cliente recibió el paquete.",
    },
    return_delivery_dialog: {
      title: "¿Tuvo el pedido algún problema durante la entrega o fue devuelto?",
      message:
        "Confirme la opción de devolución del envío si el pedido se devuelve después del envío por algún motivo y existe la necesidad de volver a enviar el envío.",
      confirm_action: "Confirmar entrega devuelta",
    },

    notifications: {
      update_status_success: "Estado del pedido actualizado.",
      reject_update_success: "Estado de cancelación de pedido actualizado.",
      dismiss_reject_success: "El pedido fue cancelado.",
      pay_cod_success: "Pago contrareembolso confirmado.",
      pay_dir_success:
        "El pago se confirmó mediante pago de tarjeta a tarjeta o transferencia de dinero.",
      set_tracking_success: "El ID de seguimiento del pedido se guardó correctamente.",
      new_bill_success: "Nueva factura añadida con éxito.",
      edit_bill_success: "Factura actualizada con éxito.",
      update_bill_status_success: "Estado de la factura actualizado con éxito.",
      set_payment_in_cash_success: "Pago de facturas confirmado manualmente.",
    },

    delete_bill_dialog: {
      title: "Eliminar factura",
      message: "¿Estás seguro de eliminar esta factura?",
      action: "Sí, eliminar ahora",
    },
  },

  /** {@see AdminShopGatewayManagementPage} **/
  shop_gateway: {
    title: "Puerta",
    menu: {
      dashboard: "Panel",
      edit: "Editar",
      transactions: "Actas",
      back: "Pasarelas",
    },

    /** {@see BPageGatewayDashboard} **/
    dashboard: {
      title: "Gestión de puerta de enlace",

      /** {@see BGatewayPaymentsChart} **/
      gateway_data_widget: {
        title: "Informe de pagos",
        subtitle:
          "Configura y gestiona esta opción para tu tienda.",
        chart: {
          times: "Contar",
          buys: "Comprar cuenta",
          pays: "pago exitoso",
          amount_pay: "Pagado",
          amount_wage: "Tarifa",
        },
      },
    },

    /** {@see BPageGatewayEdit} **/
    edit: {
      title: "Editar puerta de enlace",
      menu: {
        delete: "Eliminar puerta de enlace",
      },
      edit_action: "Editar puerta de enlace",
    },

    /** {@see BPageGatewayTransactions} **/
    transactions: {
      title: "Actas",
      table: {
        amount: "Monto",
        currency: "Divisa",
        livemode: "Tipo",
        status: "Estado",
        target_id: "Pedido",
        risk: "Riesgo",
        card: "Tarjeta",
        issued_at: "Fecha de asunto",
        payment_at: "Fecha de pago",
      },
      live_mode: "Vivir",
      test_mode: "Salvadera",
    },
  },

  /** {@see BGatewayOverview} **/
  b_gateway_overview: {
    title: "Información",
    subtitle: "Configura y gestiona esta opción para tu tienda.",
    status: "Estado",
    cod_transportation: "Opción",
    cod_transportations_error:
      "Configura y gestiona esta opción para tu tienda.",
    payment_type: "Pago Tipo",
    cod: "Pago contra entrega",
    online: "En línea Pago",
    wage_percent: "Opción",
    min_wage: "Mínimo Comisión",
    max_wage: "Máximo Comisión",
    min_amount: "Opción",
    max_amount: "Opción",
    timeout: "Opción",
    timeout_unit: "Opción",
    link: "Pasarela Enlace",
    your_gateway_status: "Opción",
    oauth2_button: "Conectar automáticamente a {gateway}",
    fee_payment_message:
      "Selldone Configura y gestiona esta opción para tu tienda.",

    auto_config: "Automático Configuración",

    keys: {
      title: "Título",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    extra_config: {
      title: "Pago Servicio Configuración",
      subtitle: "Configura y gestiona esta opción para tu tienda.",
    },

    recommended_actions: {
      title: "Título",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
      action_enable: "Opción",
      make_live_enable: "Opción",
    },
  },

  /** {@see BGatewayAdd} **/
  edit_gateway: {
    public_keys: "Claves públicas",
    private_keys: "Claves privadas (confidenciales)",
    link: "Sitio web",
    status_title: "Estado del servicio de pago",
    status_message:
      "Configure el método de pago como Activo o Inactivo. Solo se mostrarán a los clientes los métodos configurados como activos.",
    status_true_description: "Sus clientes pueden pagar con este método de pago.",

    manual_title: "Pago con captura manual o automática",
    manual_message:
      "Cuando crea un pago, puede colocar una retención en un método de pago elegible para reservar fondos que puede capturar más tarde. Por ejemplo, los hoteles suelen autorizar un pago completo antes de que llegue un huésped y luego capturan el dinero cuando el huésped se retira.",

    gateway_status: "Estado",
    wallet: "billetera de cadena de bloques",
    developer_title: "modo desarrollador",
    developer_message:
      "Puede procesar transacciones falsas si la puerta de enlace admite el modo de depuración.",
    live_mode_message: "Todas las transacciones estarán en modo en vivo.",

    notifications: {
      edit_success: "Puerta de enlace {gateway_name} editada.",
      success_delete: "¡El método de pago ha sido eliminado!",
    },
    debug: {
      title: "Desarrollar y probar",
      subtitle: "Puede habilitar el modo de depuración para probar la pasarela de pago.",
    },

    limit: {
      title: "Límite de pedido",
      subtitle: "Establezca el monto mínimo de pedido para esta pasarela de pago.",
    },
    limit_input: {
      title: "Cantidad mínima de pedido",
      msg: "Cero significa que no hay límite.",
    },
    currency_input: {
      message: "La moneda que admite esta pasarela de pago.",
    },
    gateway_code: "Código de acceso",

    hold_only_for: "Retener pago disponible solo para",
    manual_input: {
      false_description:
        "El estado del pago cambiará automáticamente de pendiente a confirmado en el sistema del proveedor de pagos.",
      false_title: "Confirmación de pago automático",
      true_title: "Retener pagos y confirmación manual",
      true_description:
        "Retener un pago significa que es necesario verificar los pagos de un pedido para cambiar su estado de pendiente a confirmado en el sistema del proveedor de pagos.",
    },
    delete_verify_input: {
      true_title: "Quiero eliminar este método de pago.",
      true_description:
        "Este método de pago será eliminado de la tienda y no estará disponible para los clientes.",
    },
    delete_alert: {
      title: "Eliminar método de pago",
      message: "¿Estás seguro de eliminar este método de pago de tu tienda?",
      action: "Eliminar método de pago",
    },
  },

  /** {@see BPageGiftcard} **/
  gift_card: {
    title: "Tarjetas de regalo",
    menu: {
      edit: "Editar",
      new_card: "Crear tarjeta",
      list: "Tarjetas",
      orders: "Pedidos",
      dashboard: "Panel",
      back: "Tarjetas de regalo",
    },

    /** {@see AdminGiftCardDashboardPage} **/
    dashboard: {
      title: "Panel de administración de tarjetas de regalo",

      /** {@see BGiftcardStatisticsPayment} **/
      amount_widget: {
        title: "Pago con tarjeta",
        title_small: "30 dias",
        chart_amount_pay: {
          y: "Suma",
          label: "Pago",
        },
        chart_buys: {
          y: "compras",
          label: "compras",
        },
        total_buy: "Importe total de la compra",
        total_pay_30days: "30 días pago total",
        total_pay_today: "pago de hoy",
      },

      /** {@see BGiftcardStatisticsCount} **/
      count_widget: {
        title: "Número de tarjetas emitidas",
        title_small: "30 dias",
        total_cards: "Número total de tarjetas",
        used_cards_30days: "30 días de uso",
        used_today: "Uso de hoy",
        chart: {
          new_cards: "nuevas cartas",
          used_cards: "tarjetas usadas",
          new_card_name: "Nueva tarjeta",
          used_card_name: "Utilizado",
        },
      },

      /** {@see BGiftcardExport} **/
      export: {
        title: "Obtener archivo de salida",
        cards_list: "Obtener una lista de tarjetas",
        get_report: "Obtener informe",
      },
    }, // End of dashboard

    /** {@see AdminGiftCardManagementPage} **/
    cards: {
      title: "Lista de tarjetas emitidas",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",

      loading_message: "Obteniendo información... por favor espere",
      issue_to_user: "Problema para el usuario",
      table: {
        card_number: "Número de tarjeta",
        balance: "Equilibrio",
        paid: "Pagado",
        edit: "Editar",
        delete: "Borrar",
        expire: "Caduca",
        user: "Usuario",
      },
      delete_alert: {
        title: "Quitar tarjeta",
        message: "¿Está seguro de que desea eliminar esta tarjeta?",
        action: "Borrar",
      },
      notifications: {
        delete_success: "Tarjeta de regalo eliminada.",
        edit_success: "Se han realizado cambios.",
        issue_success: "Tarjeta de regalo emitida al usuario con éxito.",
      },
      issue_dialog: {
        title: "Emitir tarjeta de regalo",
        action: "Confirmo. Emite la tarjeta ahora",
      },
    }, // End of cards

    /** {@see BGiftcardAdd} **/
    gift_card_edit: {
      title: "Crear tarjeta de regalo",
      validity: "Validez",
      validity_unit: "Meses",
      currency: "Divisa",
      initial_balance: "Saldo inicial de la tarjeta",
      count: "Contar",
      count_unit: "artículos)",
      enable_input_message: "Estado de las tarjetas creadas",
      notifications: {
        create_success_title: "Guardar",
        create_success: "{count} tarjetas nuevas creadas",
      },
    },

    /** {@see AdminGiftCardEditPage} **/
    gift_card_edit_page: {
      title: "Editar tarjeta de regalo",
    },
  },

  /** {@see BPageDiscountCode} **/
  shop_discount: {
    title: "Código de descuento",
    up_to: "hasta",
    menu: {
      dashboard: "Panel",
      orders: "Pedidos",
      back: "Códigos de descuento",
    },

    /** {@see BPageDiscountCodeDashboard} **/
    dashboard: {
      title: "Panel de administración de códigos de descuento",
      chart_amount_buy: {
        y: "Importe de la compra {currency}",
        label: "Comprar",
      },
      chart_amount_discount: {
        y: "Descuento {currency}",
        label: "Descuento",
      },
      chart_used: {
        y: "cantidad de usos",
        label: "Veces",
      },
    },
  },

  /** {@see BPageCoupon} **/
  shop_coupon: {
    title: "cupones",
    up_to: "hasta",
    menu: {
      dashboard: "Panel",
      back: "cupones",
      orders: "Pedidos",
    },

    /** {@see BPageCouponDashboard} **/
    dashboard: {
      title: "Panel de administración de cupones",
      chart_amount_buy: {
        y: "Importe de la compra {currency}",
        label: "Comprar",
      },
      chart_amount_discount: {
        y: "Cupón {currency}",
        label: "Cupón",
      },
      chart_used: {
        y: "cantidad de usos",
        label: "Veces",
      },
    },
  },

  /** {@see BPageOffer} **/
  shop_offer: {
    title: "ofertas",
    up_to: "hasta",
    menu: {
      dashboard: "Panel",
      orders: "Pedidos",
      back: "ofertas",
    },

    /** {@see BPageOfferDashboard} **/
    dashboard: {
      title: "Panel de administración de ofertas",
      chart_amount_buy: {
        y: "Importe de la compra {currency}",
        label: "Comprar",
      },
      chart_amount_discount: {
        y: "Oferta {currency}",
        label: "Oferta",
      },
      chart_used: {
        y: "cantidad de usos",
        label: "Veces",
      },
    },
  },

  /**
   * @see BOrderConnectsList
   */
  order_connect_list: {
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
  },
  /** {@see BAccountCard} **/
  account_card: {
    pay_create_receipt: "Pagar tarifa de activación",
    balance: "Equilibrio",
    locked: "bloqueado",
    transfer: "Transferir",
    charge: "Depósito",
  },

  /** {@see TimelineStatus} **/
  timeline: {
    note: "{message}",
    info: "{message}",
    error: "{message}",

    buy: "Verificar",
    payment: "Pago",

    confirm:
      "Confirmación de pedido, <b>{success}</b> confirmado y <b>{fail}</b> rechazado.",
    prepare: "Preparación de pedidos.",
    send: "Pedido enviado por <b>{delivery}</b> .",
    delivered: "El pedido ha sido entregado al cliente.",
    "fill-inputs": "Formulario de información de entrada completado por el comprador.",
    "return-add": "Envíe una solicitud de devolución de producto, {product}.",
    "return-accept": "Solicitud de devolución {return_code} confirmada.",
    "return-reject": "Solicitud {return_code} rechazada.",

    "reject-order": "Rechazar pedido. Código: {reject_code}.",
    "reject-order-clear": "Cancelar el rechazo del pedido. Código: {reject_code}.",

    "delivery-returned":
      "El pedido no fue recibido por el cliente y fue devuelto. Es necesario enviar de nuevo.",
    "delivery-canceled": "Entrega cancelada. Es necesario enviar de nuevo.",
    "edit-receiver-info": "La dirección de entrega del pedido fue editada por el comprador.",
    "edit-billing-info": "Dirección de facturación editada por el comprador.",
    "payment-cod-confirm": "Se confirmó el pago contra reembolso.",
    "payment-cash-confirm":
      "Se confirmó el pago de {amount} {currency} en efectivo por la factura.",
    "payment-dir-confirm": "Se confirmó el recibo de pago directo.",

    vendor: "El estado del pedido del proveedor cambió de <b>{from}</b> a <b>{to}</b> .",

    "connect-sync": "Pedido sincronizado por Connect OS.",
    "connect-shipped": "El pedido de Connect ha sido enviado por {shipping}.",
    "connect-returned": "El pedido de Connect ha sido devuelto por {shipping}.",
    "connect-failed": "El cumplimiento del pedido falló por parte del socio. {reason}",
    "connect-canceled": "El pedido fue cancelado por el socio. {reason}",
    "connect-action-cancel": "Solicitud de cancelación de pedido. {reason}",
    "connect-put-hold": "La orden fue puesta en espera. {reason}",
    "connect-remove-hold": "El pedido se eliminó de la espera. {reason}",
    "connect-confirmed": "El pedido fue confirmado.",

    "vendor-payout": "💸 Pago al proveedor.",
    "vendor-wallet-transaction": "Opción",

    "vendor-sms":
      "🔔 Se ha enviado un SMS de información del pedido a <b>{vendor}</b> ╏ {phone}.",

    // ━━━━━━━━━━━━━━━━━━━━━━ Email Packs ━━━━━━━━━━━━━━━━━━━━━━

    "email-buy": "Enviar correo electrónico de confirmación de compra al cliente.",
    "email-payment": "Enviar correo electrónico de confirmación de pago al cliente.",
    "email-update": "Correo electrónico Actualizar",

    "email-vendor":
      "🔔 El correo electrónico de información del pedido se ha enviado a <b>{vendor}</b> ╏ {email}.",

    // ━━━━━━━━━━━━━━━━━━━━━━ SMS Packs ━━━━━━━━━━━━━━━━━━━━━━
    "sms-payment":
      "Enviar SMS de confirmación de pago al cliente a través de {phone}.",
    "sms-ready-to-ship":
      "Configura y gestiona esta opción para tu tienda. {phone}",
    "sms-ready-to-pickup":
      "Configura y gestiona esta opción para tu tienda. {phone}",
    "sms-order-confirmation":
      "Configura y gestiona esta opción para tu tienda. {phone}",

    "count-adjustment":
      'La cantidad del producto "{product}" se actualizó de {from} a {to}.',
  },

  /** {@see FinanceInlineChart} **/
  inline_chart: {
    today: "Hoy dia",
    last_days: "hace {days} días",
  },
  /** {@see BProductsWindow} **/
  products_select: {
    move_category: "Mover categoría <b>{category}</b> a otra categoría",
    move_product: "Mover producto <b>{product}</b> a categoría",
    load_more_products:
      "Hay más productos disponibles en esta categoría. Haga clic para cargar más artículos.",
    product_menu: {
      dashboard: "Tablero de productos",
      inventory: "Inventario y Variantes",
    },
    notifications: {
      copy_success: "Copia de producto.",
      change_category_success: "Categoría de producto editada.",
    },

    filter_box: {
      no_root_filter_message: "Tienes productos en la raíz pero no tienes filtro.",
      has_root_filter_message: "Establece filtros para la categoría raíz.",
      set_filter_message: "Puedes establecer filtros.",
      edit_action: "Editar filtros raíz",
      clear_action: "Limpiar filtros de raíz",
    },
    ai: {
      title: "Asistencia de productos con inteligencia artificial",
    },
    menu: {
      select_all_products: "Seleccionar todos los productos",
      unselect: "Deseleccionar",
      sort_categories: "Organizar/Ordenar categorías",
      subscription_vendor_not_support_message:
        "¡No se puede asignar un proveedor para los productos de suscripción! ¡Los productos de suscripción siempre deben tener un proveedor como propietario!",
      vendor_owner_not_assignable_message:
        "¡No se puede asignar un proveedor a productos que tengan a un proveedor como su propietario!",
      category_assign_profile: "Asignar perfil a productos de la categoría",
      category_assign_profile_subtitle: "Impuestos, Envío, Guía, Garantía, ...",
      bulk_discount: "Descuento por volumen",
      bulk_discount_subtitle: "Aplicar descuento en todos los productos.",
    },

    engine: {
      title: "Motor de productos adicionales",
      subtitle:
        "Se cargarán más productos de categorías y etiquetas seleccionadas.",
      load_in_tips: "Cargue productos de categorías en la {category}.",
      action: "Editar {category} Motor",
    },
  },
  /** {@see BProductsPanel} **/
  product_panel: {
    excel_import: {
      title: "Coloque el archivo Excel/CSV aquí.",
      select_file: "Seleccionar archivo",
      max_file: "Tamaño máximo de archivo: 20 MB",
      download_sample: "Descargar muestra",
    },
    ai: {
      title: "Asistencia de productos con inteligencia artificial",
    },
  },

  /** {@see BOrderDashboardVendor} **/
  order_vendor: {
    has_panel: "Tiene panel",
    no_panel: "Sin panel",
    manual_action: {
      title: "Acciones manuales",
      message: "Puede actualizar el estado del pedido del proveedor manualmente.",
      guides: [
        "Los proveedores con acceso al panel pueden actualizar su cumplimiento (subpedidos) en su panel dedicado.",
        "Si el vendedor no tiene acceso al panel, el estado del pedido del vendedor se cambiará automáticamente cambiando el estado de la cesta.",
        "Puede actualizar los pedidos de proveedores manualmente.",
      ],
    },
    payouts: {
      title: "Pagos",
      message: "Gestionar los pagos y transacciones de los proveedores.",

      charge_tooltip: "Cargue la billetera del proveedor.",
      withdraw_tooltip: "Retirar de la billetera del vendedor.",
      payout_tooltip: "Pago al proveedor.",
    },
    order_canceled: "Opción",
    order_rejected: "Opción",
  },

  /**
   * @see VPageVendorDashboard
   */
  vendor_dashboard: {
    info: {
      subtitle: "Información del mercado.",
    },
    performance: {
      subtitle: "Mi desempeño en ventas.",
    },
    products: {
      title: "productos",
      subtitle:
        "Aquí puede ver el recuento de sus productos incluidos en el mercado. No se incluyen los productos de varios vendedores.",
    },
    wallets: {
      title: "Mis billeteras",
      subtitle:
        "¡No es necesario agregar billeteras manualmente! Las billeteras de los vendedores se crearán automáticamente.",
    },

    open_marketplace_page: "Abrir página del mercado",
    open_my_store_page: "Abre la página de mi tienda",
    open_my_listing_page: "Abrir mi página de listado",
    add_products_permission: "Añadir permiso de productos",
    add_categories_permission: "Añadir permiso para categorías",
  },

  /**
   * @see VPageVendorInventory
   */
  vendor_inventory: {
    title: "Lista de productos",
    subtitle:
      "Esta es una lista de tus productos en el mercado. Actualiza los precios y las cantidades de los productos asignados en el inventario. Como vendedor, solo verás los productos de un solo vendedor que posees en la lista de productos. Aquí también puedes modificar otros productos asignados.",
  },

  /**
   * @see VPageVendorAccess
   */
  vendor_member: {
    title: "Equipo Miembros",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
    add_action: "Añadir nuevo miembro",
    pending: {
      title: "Invitaciones pendientes",
      message: "Configura y gestiona esta opción para tu tienda.",
    },
  },

  /**
   * @see VMemberAddDialog
   */
  vendor_member_add: {
    title_edit: "Editar Equipo Miembro",
    title_new: "Añadir Nuevo Equipo Miembro",
    member: {
      title: "Equipo Miembro Detalles",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    access: {
      view_data: "Ver datos",
      apply_changes: "Guardar cambios",
    },
    inputs: {
      email: {
        label: "Dirección de correo electrónico",
        placeholder: "Opción",
      },
    },
    notifications: {
      add_success: {
        title: "Título",
        message: "Mensaje",
      },
      update_success: {
        title: "Título",
        message: "Configura y gestiona esta opción para tu tienda.",
      },
    },
    actions: {
      add: "Añadir Miembro",
    },
  },

  /**
   * @see VPageVendorPayments
   */
  vendor_payments: {
    list: {
      title: "Historial de pagos",
      subtitle:
        "Puede consultar su historial de pagos aquí. Estos pagos pueden procesarse manualmente a través de transferencias bancarias o automáticamente utilizando servicios de pago que ofrecen la posibilidad de realizar pagos.",
    },
    connect: {
      title: "Conectar banco",
      subtitle:
        "Ofrecemos la posibilidad de dividir el pago en las siguientes pasarelas de pago. Para recibir los pagos sin inconvenientes después de cada compra, conecte su cuenta bancaria utilizando estas opciones.",
    },
    verify_dialog: {
      title: "Verificar pago",
      option: {
        title: "Acción del vendedor",
        subtitle:
          "Tienes la opción de aceptar o rechazar esta transferencia. Esta acción sirve únicamente como registro histórico. Simplemente confirma si has recibido los fondos; si no, no es necesario que realices ninguna acción.",
      },
      inputs: {
        verify: {
          label: "¿Has confirmado este pago?",
          false_description:
            "No, aún no he recibido este pago en mi cuenta bancaria.",
          true_description: "Sí, he recibido y verificado este pago.",
        },
      },
    },
  },

  /**
   * @see BVendorOrderRefund
   */
  vendor_order_refund: {
    title: "Reembolso Pedido",
    subtitle:
      "<b></b><b></b> Configura y gestiona esta opción para tu tienda.",
    inputs: {
      note: {
        message: "Mensaje",
        placeholder: "Opción",
      },
      amount: {
        error_message: "Error Mensaje",
      },
    },
  },

  /** {@see BOrderVendorPaymentManagement} **/
  order_vendor_payment: {
    message:
      "Esta es una descripción general de las transacciones en su billetera virtual en el mercado.",
    vendor_wallets: "Carteras de vendedores",
    my_wallets: "Mis billeteras",
    refund_order_action: "Reembolso Pedido",
    automatic_payout_list: {
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    reversal_transfer_action: "Opción",
  },

  /** {@see BPageOrderPhysicalTrack} **/
  physical_order_track: {
    title: "Informes y evaluaciones de riesgos",
  },
  /** {@see BPageOrderVirtualTrack} **/
  virtual_order_track: {
    title: "Informes y evaluaciones de riesgos",
  },
  /** {@see BPageOrderVirtualTimeline} **/
  virtual_order_timeline: {
    title: "Cronología",
  },
  /** {@see BPageOrderPhysicalTimeline} **/
  physical_order_timeline: {
    title: "Cronología",
  },
  /** {@see BPageOrderPhysicalInput} **/
  physical_order_inputs: {},
  /** {@see BOrderTimeline} **/
  order_timeline: {
    message:
      "En esta sección, podrá visualizar la cronología de eventos relacionados con el pedido, su cumplimiento, el pago y sus respectivos estados. Además, podrá observar los pedidos enviados tanto a clientes como a proveedores.",
    add_note_subtitle: "Escribe un mensaje y menciona a tus compañeros.",

    message_input: "Escribe un mensaje aquí...",
    pin_action: "Pin en la parte superior",
    unpin_action: "Desprender",
    copy_html: "Copiar HTML",
    notifications: {
      add_note_success: "Nota añadida.",
      edit_note_success: "Nota editada.",
      delete_note_success: "Nota eliminada.",
    },
    delete_dialog: {
      title: "Borrar nota",
      message: "¿Quieres eliminar esta nota?",
      action: "Borrar nota",
    },
    resend_dialog: {
      title: "Reenviar email",
      message: "¿Está seguro de reenviar este correo electrónico a su cliente?",
      action: "si, reenviar",
      success: "Correo electrónico reenviado a su cliente.",
    },
  },

  /** {@see BPageShuttleWalletAccounts} **/
  accounts: {
    title: "Mi billetera",
    message:
      "Debe crear al menos una cuenta con la moneda que está utilizando en Selldone. Debe recargar esta cuenta para pagar la tarifa de servicio.",
    add_new: "Crear una nueva cuenta",
    new_account: "Agregar nueva cuenta",
    new_account_dialog: {
      title: "Nueva cuenta",
      account_name_input: "Nombre de la cuenta",
      currency_input: "Unidad monetaria",
      currency_input_message:
        "La cuenta creada solo tendrá los valores de esta moneda.",
      new_account_wage: "Costo de creación de nueva cuenta: Gratis para la primera cuenta",
      create_account_action: "Crear una cuenta",
    },
  },

  /** {@see UserGifts} **/
  user_gifts: {
    menu: {
      send_gift: "Enviar regalo",
      sent: "Enviar",
      received: "Recibió",
    },

    /** {@see BPageShuttleWalletGiftsSend} **/
    send_gifts: {
      title: "Regalos enviados",
      sub_title:
        "Puedes enviar un regalo a tus amigos o clientes. El destinatario puede aceptar o rechazar su regalo. El monto se bloquea en su cuenta y se retira si el destinatario acepta. De lo contrario, esta cantidad será transferida a su cuenta.",
      table: {
        user: "Usuario",
        amount: "Monto",
        currency: "Divisa",
        account_name: "Desde",
        status: "Estado",
        message: "Mensaje",
        created_at: "Fecha de creación",
      },
    },

    /** {@see BPageShuttleWalletGiftsReceived} **/
    received_gifts: {
      title: "Regalos recibidos",
      sub_title:
        "Sus regalos recibidos de Selldone u otros",

      table: {
        amount: "Monto",
        currency: "Divisa",
        account_from: "Desde",
        status: "Estado",
        message: "Mensaje",
        created_at: "Fecha de creación",
        receive: "Recibir",
      },
    },
  },

  /** {@see BAccountGiftRedeem} **/
  get_gift_dialog: {
    title: "Recibe un regalo",
    more: "Más ..",
    amount: "Monto",
    message: "Mensaje",
    account_to_input: "Cuenta de destino",
    account_to_input_message: "Los montos de los obsequios se depositarán en esta cuenta.",
    get_action: "Aceptar obsequio",
    notifications: {
      received_success_title: "Felicidades",
      received_success:
        "El monto del regalo {amount} {currency} se ha depositado en su cuenta.",
    },
  },
  /** {@see BAccountGiftSend} **/
  send_gift_dialog: {
    title: "Enviar regalo",
    account_from_input: "elige una cuenta",
    account_from_input_message: "Los montos de los obsequios se retiran de esta cuenta.",
    receiver_input: "Receptor",
    receiver_input_message: "Puede ingresar la dirección de correo electrónico o el número de teléfono.",
    message_input: "Mensaje",
    message_input_message: "Puede dejar un mensaje al destinatario.",
    amount_input: "Monto",
    currency_input: "Unidad monetaria",
    currency_input_message: "El precio se calcula en esta moneda.",
    send_action: "Enviar regalo",
    notifications: {
      send_success: "Se envió un regalo de {amount} {currency} a {receiver}.",
    },
  },

  /** {@see BAccountInput} **/
  account_list: {
    account_input: "Número de cuenta",
    account_input_message:
      "Los importes de los regalos por esta moneda se depositarán en esta cuenta.",
    free_balance: "Saldo libre",
    account_name: "Nombre de la cuenta",
  },
  /** {@see OPageMonetizeAccounts} **/
  user_monetize_accounts: {
    title: "Cuentas de depósito",
    sub_title:
      "Los montos de los obsequios se depositarán automáticamente en estas cuentas.",
    message:
      "Selldone deposita fondos para su actividad en las redes sociales, participar en el desarrollo de Selldone, presentar amigos, etc. Al elegir una cuenta de depósito para cada moneda, los montos de los obsequios se depositarán en esa cuenta en su dominio automáticamente. Estas cantidades se pueden acreditar a Selldone. Los retiros solo serán posibles para los socios comerciales.",
    add_account_action: "Añadir cuenta",
    add_dialog: {
      title: "Conecta una cuenta para recibir regalos",
      account_input: "Número de cuenta",
      account_input_message:
        "Los importes de los regalos por esta moneda se depositarán en esta cuenta.",
      set_as_default_action: "Seleccionar como cuenta predeterminada",
    },
    table: {
      currency: "Divisa",
      account_number: "Número de cuenta",
      account_name: "Nombre",
      payment: "Cantidad del depósito",
      reset_at: "Restablecer a",
      delete: "Borrar",
    },
    notifications: {
      set_success: "Cuenta añadida con éxito.",
      delete_success:
        "Cuenta eliminada con éxito de la lista de cuentas predeterminadas para recibir regalos.",
    },
    delete_alert: {
      title: "Borrar cuenta",
      message:
        "¿Desea eliminar esta cuenta de la lista de Cuentas de regalos?",
      action: "Borrar",
    },
  },
  /** {@see UserMonetize} **/
  user_monetize: {
    title: "Ganar dinero",
    menu: {
      plans: "planes",
      accounts: "cuentas",
      participant: "Partícipe",
    },
  },
  /** {@see OPageMonetizeReferral} **/
  user_monetize_plans: {
    title: "Proyectos de Colaboración y Monetización",
    sub_title:
      "Recibirá un crédito en la cuenta por los regalos de referencia. Estos montos se cargarán a su cuenta y solo se pueden retirar a los socios comerciales de Selldone (no a todos). Puede gastar el dinero en la tarifa de servicios de Selldone.",

    discount: "Descuento",
    your_income: "Tu ingreso",
    level_2: "Desde el Nivel Dos",
    level_3: "Desde el Nivel Tres",
    link_message: "Membresía: {registered}, aceptado: {accepted}",
    link_tip:
      "Puede agregar la frase ?ref={link_code} al final de cada dirección que comparta.",
    table: {
      currency: "Divisa",
      amount: "Equilibrio",
      total: "Pago total",
      payment_date: "Última Fecha de Pago",
      withdraw: "Retiro",
    },

    notifications: {
      get_credit_success:
        "La cantidad solicitada ha sido depositada en su cuenta.",
    },
  },
  /** {@see BPageShuttleIdentity} **/
  basic_information: {
    title: "Mi identidad y perfil",
    email: "Dirección de correo electrónico",
    tel: "Número de teléfono móvil",
    address: "dirección",
    payment: "Transacciones válidas",
    personal_information: "Información de identidad",
    main_profile: "Perfil principal",
    main_profile_subtitle:
      "Esta información está disponible públicamente para todos.",
    kyc_waiting_info:
      "Estamos verificando la exactitud de la información que ingresa. Este proceso es obligatorio de acuerdo con las reglas KYC y reducirá el riesgo de las transacciones financieras. Puede aprovechar los beneficios presentes y futuros de este servicio.",

    personal_info_dialog: {
      title: "Información de identidad",
      name_input: "Nombre de pila",
      family_name_input: "Apellido",
      number_input: "Número de pasaporte (o código nacional)",
      birthday_input: "Cumpleaños",
      birthday_input_placeholder: "Ingrese su cumpleaños",
      address_input: "dirección",
      postcode_input: "Código postal",
      tel_input: "Número de contacto",
      passport_image_input: "Seleccionar imagen de pasaporte",
      passport_image_input_message:
        "Cargue un escaneo de la imagen de su pasaporte.",
      personal_image_input: "Elige tu propia imagen",
      personal_image_input_message:
        "Cargue una imagen escaneada de ida y vuelta en su tarjeta nacional a una imagen.",
    },
    profile_dialog: {
      title: "Perfil principal",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
      full_name_input: "Nombre completo",
      tel_input: "Número de contacto",
      email_input: "Correo electrónico",
      website_input: "Sitio web",
      address_input: "dirección",
      about_input: "Sobre mí",
      about_long_input: "Texto largo sobre mí",
      image_input: "Seleccionar foto de perfil",
      image_input_message:
        "Sube tu imagen. Esta imagen se usará como tu foto de perfil.",
      notifications: {
        update_profile_success: "Tu perfil ha sido actualizado.",
        update_personal_info_success:
          "Su información fue registrada con éxito",
      },
    },
    charge_account_approve_message:
      "Cargue su cuenta para aprobar su transacción bancaria.",
    payment_approval: "Aprobación de pago",
    residential_address_checking:
      "Los documentos de su dirección residencial en la cola de comprobación.",
    add_residential_address:
      "Agregue su ubicación y documentos de prueba de dirección residencial.",
  },
  /** {@see BUserPhoneVerify} **/
  phone_verify: {
    title: "Número de teléfono móvil",
    step1_title:
      "Ingrese su numero celular.",
    phone_number_input: "Número de teléfono móvil",
    next: "Próximo paso",
    sms_code_input: "Código de verificación",
    sms_code_message: "Código de verificación de 6 dígitos enviado a {phone_number}.",

    notifications: {
      duplicated_number_error: "Este número ya ha sido aprobado por usted.",
      send_activation_code_success_title: "Código de verificación",
      send_activation_code_success:
        "El código de verificación se envió a {phone_number}.",
      verify_success: "Su número de móvil ha sido verificado",
    },
  },
  /** {@see BPageShuttleCompanies} **/
  companies: {
    title: "Mis cuentas comerciales",
    message:
      "Empresas, emprendedores y equipos profesionales pueden desarrollar productos y aplicaciones basados en Selldone. Es un requisito para crear un perfil comercial.",
    new_company: "Nueva compañia",
  },
  /** {@see BCompanyAdd} **/
  add_company: {
    name_input: "Nombre de empresa",
    website_input: "Sitio web",
    email_input: "Correo electrónico",
    address_input: "dirección",
    tel_input: "Teléfono",
    mobile_input: "Móvil",
    edit_action: "Editar empresa",
    create_action: "crear empresa",
    notifications: {
      add_success: "Cuenta comercial {name} creada.",
      edit_success: "Cuenta comercial editada.",
    },
  },
  /** {@see UserAccessControl} **/
  user_access_control: {
    menu: {
      personal_key: "Opción",
      shop_key: "Clientela",
      apps: "aplicaciones",
    },
    connected_apps_title: "Aplicaciones conectadas",
    connected_apps_message:
      "Verá una lista de todas las tiendas y aplicaciones que están conectadas a su cuenta de dominio. Puede eliminar el acceso a cualquiera de ellos.",
    clients_title: "Clientela",
    clients_message:
      "Estas claves se utilizan para crear tokens de acceso por parte de su servidor. Tenga en cuenta que las claves son confidenciales y solo se colocan en el servidor para que no sean visibles para otros.",
    personal_keys_title: "Claves de acceso personal",
    personal_keys_message:
      "Puede crear las claves de su cuenta aquí. Tenga en cuenta que estas claves podrán acceder a su cuenta. Cree y use estas claves solo si sabe exactamente lo que está haciendo.",
  },

  /** {@see BPageShuttleSecurity} **/
  user_security_control: {
    title: "Seguridad de la cuenta",
    message: "Puede editar la configuración de seguridad de su cuenta aquí.",

    delete: {
      title: "Borrar cuenta",
      subtitle:
        "Antes de eliminar su cuenta, asegúrese de haber eliminado todas las tiendas.",
      action: "Estoy seguro, borre mi cuenta",
      agreement:
        "Acepto que toda mi información será eliminada de su servidor. Su información se eliminará de acuerdo con un cronograma determinado por nosotros para evitar fraudes o usos indebidos.",
    },

    list: {
      email: {
        title: "Correo electrónico principal",
        sub_title:
          "Tiene la opción de actualizar el correo electrónico principal asociado con esta cuenta.",
        action_title: "Cambiar correo electrónico principal",
        action: "Enviar enlace de verificación",
      },
      password: {
        title: "Clave",
        sub_title: "Elija una contraseña segura para su cuenta.",
        action_title: "Contraseña de acceso a la cuenta",
        not_exist: "No entró",
        action: "Cambia la contraseña",
      },
      phone: {
        title: "Número de teléfono móvil",
        sub_title:
          "Confirma tu número de móvil. Podrá iniciar sesión a través de este número.",
        action_title: "Número de teléfono principal de la cuenta",
        action: "Verificar número",
      },

      two_step: {
        title: "Entrada en dos pasos",
        sub_title:
          "Confirma tu número de móvil. Podrá iniciar sesión a través de este número.",
        action_title: "Aumentar la seguridad de la cuenta",
        activated_action: "Activado",
        active_action: "Activo ahora",
      },
    },
    two_step_auth: {
      step_1: {
        title: "Instalar la aplicación Google Authenticator",
      },
      step_2: {
        title: "Ingrese el código generado por la aplicación",
        message:
          "El código de 6 dígitos es generado por un algoritmo en su teléfono móvil. Puedes descargar la aplicación desde el siguiente enlace. Presione la tecla del generador de códigos para crear un código QR que contenga la contraseña.",
        qr_code_info:
          "Si no es posible escanear, puede copiar y pegar manualmente el código en la aplicación:",
        create_new_code: "Crear nuevo código",
        qr_code_scanning:
          "Escanee el código QR creado por la aplicación móvil Google Authenticator e ingrese el código generado para confirmación en el cuadro de esta página.",
        qr_code_regenerate_info:
          "Nota: Al presionar la tecla anterior, se creará una nueva clave y la tecla anterior quedará inutilizable. Introduce la nueva clave en la aplicación de tu teléfono.",
      },
      step_3: {
        title: "Introduce el código creado",
        message:
          "Ingrese el código de acceso creado en la aplicación en el campo a continuación.",
        activation_key_input: "Código de acceso",
      },
      activated_alert: "El inicio de sesión en 2 pasos está habilitado.",
      activated_message:
        "El inicio de sesión en dos pasos está habilitado para su cuenta. A partir de ahora necesitarás ingresar un segundo código que cambia cada 30 segundos para acceder a tu cuenta. Para deshabilitar el inicio de sesión en dos pasos, simplemente haga doble clic en Presione un paso y siga los pasos.",
      cancel_two_step_login_action: "Cancelar inicio de sesión en dos pasos",
      cancel_two_step_login_info:
        "Si desea deshabilitar la verificación en dos pasos, ingrese su contraseña y haga clic en la clave de inicio de sesión en dos pasos.",
      password_input: "Clave",
      cancel_2fa_action: "Cancelar inicio de sesión en dos pasos",
    },

    change_password_dialog: {
      title: "Cambia la contraseña",
      message: "Utilice una contraseña compleja y fácil de recordar.",
      password_input: "Contraseña actual",
      new_password_input: "Nueva contraseña",
      re_new_password_input: "repita la nueva contraseña",
      tips: {
        length: "La contraseña debe tener al menos 8 caracteres",
        chars: "Al menos una letra mayúscula y un número.",
        match: "Contraseña coincidente.",
      },
      change_password_action: "Cambia la contraseña",
      notifications: {
        change_password_title: "Cambia la contraseña",
        change_password: "Contraseña cambiada con éxito.",
      },
    },
  },
  /** {@see AuthorizedClients} **/
  authorized_clients: {
    title: "Lista de tiendas / aplicaciones conectadas",
    table: {
      name: "Nombre",
      app: "aplicación",
      scopes: "Ámbitos",
      shop: "Tienda restringida",
    },
    remove_action: "Eliminar acceso",
    delete_alert: {
      title: "Borrar",
      message:
        "¿Quiere revocar este acceso? Tenga en cuenta que esta aplicación ya no tendrá acceso a su cuenta.",
      action: "Rechazar el acceso",
    },
  },
  /** {@see Clients} **/
  clients: {
    title: "Lista de clientes",
    create_new_action: "Crear nuevo cliente",
    table: {
      client_id: "Identificación del cliente",
      app: "aplicación",
      name: "Nombre",
      secret_key: "Llave secreta",
    },
    create_dialog: {
      title: "Cliente nuevo",
      error_msg: "<strong>¡Error!</strong> ¡Lo sentimos, ha ocurrido un error!",
      name_input: "Nombre",
      name_input_message: "Algo que sus usuarios reconozcan y confíen.",
      redirect_input_message: "Dirección de retorno a su sitio.",
    },
    edit_dialog: {
      title: "Editar acceso",
    },
    delete_alert: {
      title: "Borrar",
      message: "¿Quieres eliminar este cliente?",
      action: "Borrar",
    },
  },
  /** {@see PersonalAccessTokens} **/
  personal_access_tokens: {
    title: "Lista de tokens de acceso personal",
    create_action: "Crear nueva ficha",
    table: {
      name: "Nombre",
      scopes: "Accesos",
      expire_at: "Fecha de caducidad",
    },
    create_dialog: {
      title: "Edificio de fichas",
      error_message: "<strong>¡Error!</strong> ¡Lo sentimos, ha ocurrido un error!",
      name_input: "Alias Ej. mi nombre simbólico",
      name_input_message: "Nombre de token favorito.",
      scopes_list: "Lista de acceso a tokens",
    },
    access_token_dialog: {
      title: "Clave de acceso personal",
      message:
        "Aquí está el token de su token de acceso personal. Esta es la única vez que se mostrará este token, ¡así que no te lo pierdas! Ahora puede usar este token para solicitar una API.",
    },
    delete_alert: {
      title: "Borrar",
      message: "¿Desea eliminar este token de acceso?",
      action: "Borrar",
    },
  },

  /** {@see Scopes} **/
  scopes: {
    //--------------------------- Profile ---------------------------
    profile: {
      name: "Perfil",
      description:
        "Lea la información del perfil, incluido el nombre, la dirección de correo electrónico, la imagen y el estado de autenticación.",
    },
    phone: {
      name: "número de teléfono",
      description: "acceso al número de teléfono.",
    },
    address: {
      name: "direcciones",
      description: "Leer la dirección guardada de la libreta de direcciones.",
    },
    "user:profile:write": {
      name: "Perfil Gestión",
      description: "Descripción",
    },

    //--------------------------- Storefront ---------------------------
    "my-gift-cards": {
      name: "Tarjetas de regalo",
      description: "Acceso a Mis Tarjetas.",
    },
    "order-history": {
      name: "Historial de pedidos",
      description: "Leer historial de pedidos.",
    },
    buy: {
      name: "Compra",
      description: "Haz un pedido y compra en la tienda.",
    },

    //--------------------------- Backoffice ---------------------------
    articles: {
      name: "Contenido editado",
      description: "Editar artículos.",
    },
    "backoffice:notifications": {
      name: "Notificaciones Gestión",
      description: "Descripción",
    },
    "backoffice:order:write": {
      name: "Pedido Gestión",
      description: "Descripción",
    },
    "backoffice:order:read": {
      name: "Pedido Acceso",
      description: "Descripción",
    },
    "backoffice:support-tickets": {
      name: "Soporte Tickets",
      description: "Gestionar Soporte Tickets.",
    },
    "backoffice:shop:read": {
      name: "Tienda Información",
      description: "Descripción",
    },
    "backoffice:shop:write": {
      name: "Tienda Gestión",
      description: "Descripción",
    },
    "backoffice:shop:add": {
      name: "Añadir Tienda",
      description: "Descripción",
    },
    "backoffice:shop:delete": {
      name: "Eliminar Tienda",
      description: "Descripción",
    },
    "backoffice:giftcard:write": {
      name: "Regalo Tarjeta Gestión",
      description: "Descripción",
    },
    "backoffice:giftcard:read": {
      name: "Regalo Tarjeta Acceso",
      description: "Descripción",
    },
    "backoffice:faq:write": {
      name: "FAQ Gestión",
      description: "Descripción",
    },
    "backoffice:faq:read": {
      name: "FAQ Acceso",
      description: "Descripción",
    },
    "backoffice:category:write": {
      name: "Categoría Gestión",
      description: "Descripción",
    },
    "backoffice:category:read": {
      name: "Categoría Acceso",
      description: "Descripción",
    },
    "backoffice:product:write": {
      name: "Producto Gestión",
      description: "Descripción",
    },
    "backoffice:product:read": {
      name: "Producto Acceso",
      description: "Descripción",
    },
    "backoffice:report:read": {
      name: "Informe Acceso",
      description: "Descripción",
    },
    "backoffice:finance:write": {
      name: "Nombre",
      description: "Configura y gestiona esta opción para tu tienda.",
    },
    "backoffice:finance:read": {
      name: "Nombre",
      description: "Configura y gestiona esta opción para tu tienda.",
    },
    "backoffice:page:write": {
      name: "Página Gestión",
      description: "Editar Tienda Páginas.",
    },
    "backoffice:page:read": {
      name: "Página Acceso",
      description: "Descripción",
    },
    "backoffice:logistic:write": {
      name: "Logística Gestión",
      description: "Gestionar Logística Información.",
    },
    "backoffice:logistic:read": {
      name: "Logística Acceso",
      description: "Descripción",
    },
    "backoffice:staff:write": {
      name: "Personal Gestión",
      description: "Descripción",
    },
    "backoffice:staff:read": {
      name: "Personal Acceso",
      description: "Descripción",
    },
    "backoffice:business-profile:write": {
      name: "Negocio Perfil Gestión",
      description: "Gestionar Negocio Perfiles.",
    },
    "backoffice:business-profile:read": {
      name: "Negocio Perfil Acceso",
      description: "Descripción",
    },
    "backoffice:discount-code:write": {
      name: "Descuento Código Gestión",
      description: "Gestionar Tienda Descuento Código.",
    },
    "backoffice:discount-code:read": {
      name: "Descuento Código Acceso",
      description: "Descripción",
    },
    "backoffice:wallet:write": {
      name: "Billetera Gestión",
      description: "Gestionar Usuario Billeteras.",
    },
    "backoffice:wallet:read": {
      name: "Billetera Acceso",
      description: "Descripción",
    },
    "backoffice:coupon:write": {
      name: "Cupón Gestión",
      description: "Gestionar Tienda Cupón.",
    },
    "backoffice:coupon:read": {
      name: "Cupón Acceso",
      description: "Descripción",
    },
    "backoffice:offer:write": {
      name: "Oferta Gestión",
      description: "Gestionar Tienda Oferta.",
    },
    "backoffice:offer:read": {
      name: "Oferta Acceso",
      description: "Descripción",
    },
    "backoffice:cashback:write": {
      name: "Reembolso Gestión",
      description: "Gestionar Tienda Reembolso Oferta.",
    },
    "backoffice:cashback:read": {
      name: "Reembolso Acceso",
      description: "Descripción",
    },
    "backoffice:lottery:write": {
      name: "Nombre",
      description: "Descripción",
    },
    "backoffice:lottery:read": {
      name: "Nombre",
      description: "Descripción",
    },
    "backoffice:community:write": {
      name: "Comunidad Gestión",
      description: "Descripción",
    },
    "backoffice:community:read": {
      name: "Comunidad Acceso",
      description: "Descripción",
    },
    "backoffice:customer:write": {
      name: "Cliente Gestión",
      description: "Gestionar Cliente Detalles.",
    },
    "backoffice:customer:read": {
      name: "Cliente Acceso",
      description: "Descripción",
    },
    "backoffice:ribbon:write": {
      name: "Nombre",
      description: "Descripción",
    },
    "backoffice:ribbon:read": {
      name: "Nombre",
      description: "Descripción",
    },
    "backoffice:ai:write": {
      name: "AI Gestión",
      description: "Gestionar AI Configuración.",
    },
    "backoffice:ai:read": {
      name: "AI Acceso",
      description: "Descripción",
    },
    "backoffice:vendor-payment:write": {
      name: "Vendedor Pago Gestión",
      description: "Gestionar Vendedor Pagos.",
    },
    "backoffice:vendor-payment:read": {
      name: "Vendedor Pago Acceso",
      description: "Descripción",
    },
    "backoffice:company:read": {
      name: "Nombre",
      description: "Descripción",
    },
    "backoffice:company:write": {
      name: "Nombre",
      description: "Descripción",
    },
    "backoffice:note:read": {
      name: "Nota Acceso",
      description: "Descripción",
    },
    "backoffice:note:write": {
      name: "Nota Gestión",
      description: "Gestionar Notas.",
    },
    "backoffice:affiliate:write": {
      name: "Afiliado Gestión",
      description: "Gestionar Afiliado Información.",
    },
    "backoffice:affiliate:read": {
      name: "Afiliado Acceso",
      description: "Descripción",
    },
    "backoffice:print:write": {
      name: "Nombre",
      description: "Descripción",
    },
    "backoffice:print:read": {
      name: "Nombre",
      description: "Descripción",
    },
    "selldone:token:read": {
      name: "Nombre",
      description: "Descripción",
    },
    "selldone:token:write": {
      name: "Nombre",
      description: "Descripción",
    },

    //--------------------------- Selldone ---------------------------
    "selldone:monetization:read": {
      name: "Nombre",
      description: "Descripción",
    },
    "selldone:monetization:write": {
      name: "Nombre",
      description: "Configura y gestiona esta opción para tu tienda.",
    },
    "selldone:identification": {
      name: "Nombre",
      description: "Descripción",
    },
    "selldone:developer:read": {
      name: "Desarrollador Acceso",
      description: "Descripción",
    },
    "selldone:developer:write": {
      name: "Desarrollador Gestión",
      description: "Gestionar Desarrollador Información.",
    },
    "selldone:security:write": {
      name: "Seguridad Gestión",
      description: "Gestionar Seguridad Configuración.",
    },

    //--------------------------- Connect ---------------------------
    "connect:provider:write": {
      name: "Proveedor Gestión",
      description: "Descripción",
    },
    "connect:provider:read": {
      name: "Proveedor Acceso",
      description: "Descripción",
    },

    //--------------------------- Agency ---------------------------
    "agency:read": {
      name: "Nombre",
      description: "Descripción",
    },
    "agency:write": {
      name: "Nombre",
      description: "Descripción",
    },

    //--------------------------- Vendor ---------------------------

    "vendor-read": {
      name: "Acceso de vendedor",
      description: "Descripción",
    },
    "vendor-write": {
      name: "Vendedor Gestión",
      description: "Gestionar Vendedor Información.",
    },
  },

  scope_group: {
    backoffice: {
      title: "Título",
      description: "Configura y gestiona esta opción para tu tienda.",
    },
    storefront: {
      title: "Título",
      description: "Descripción",
    },
    profile: {
      title: "Perfil",
      description: "Acceso Usuario Perfil Información.",
    },
    selldone: {
      title: "Selldone",
      description: "Selldone Descripción",
    },
    others: {
      title: "Título",
      description: "Configura y gestiona esta opción para tu tienda.",
    },
    vendor: {
      title: "Vendedor",
      description: "Configura y gestiona esta opción para tu tienda.",
    },
    connect: {
      title: "Connect OS",
      description: "Descripción",
    },
    agency: {
      title: "Título",
      description: "Descripción",
    },
  },

  /** {@see AdminCompanyPage} **/
  company_page: {
    title: "Empresa",
    create_app: "Crear nueva aplicación",
    menu: {
      edit: "Editar",
      apps: "aplicaciones",
      dashboard: "Panel",
      companies: "Compañías",
    },
    /** {@see AdminCompanyPage_Dashboard} **/
    dashboard: {
      /** {@see CompanyInfoWidget} **/
      info_widget: {
        title: "Información de registro de la empresa",
        address: "dirección",
        website: "Sitio web",
        email: "Correo electrónico",
        phone: "número de teléfono",
        register: "Registro",
        developer: "Desarrollador",
        verified: "verificado",
        golden: "Dorado",
      },
    },
    /** {@see AdminCompanyPage_Develop} **/
    developer: {
      title: "Desarrolladores",
      menu: {
        new: "Nuevo",
        apps: "aplicaciones",
      },
    },
    /** {@see AdminCompanyPage_Edit} **/
    edit: {
      title: "Editar",
    },
  },
  /** {@see BAppAdd} **/
  add_app: {
    category_input: "Categoría",
    code_input: "Código",
    name_input: "Nombre",
    description_input: "Descripción",
    video_input: "URL del vídeo",
    public_form: "Estructura de información general",
    private_form: "Estructura de información privada",
    icon_input: "Icono de la aplicación",
    logo_input: "Aplicación de logotipo",
    enable_input: "¿Está activa la aplicación?",
    edit_action: "Editar aplicación",
    create_action: "Crear aplicación",
    notifications: {
      add_success: "Cuenta comercial {name} creada.",
      delete_success: "Cuenta comercial editada.",
    },
  },

  /** {@see AppPage} **/
  app_page: {
    title: "Solicitud",

    menu: {
      edit: "Editar",
      publish: "Publicar",
      history: "Versiones",
      dashboard: "Panel",
      company: "Empresa",
      api: "API",
      images: "Imágenes",
    },
    /** {@see AppPage_Dashboard} **/
    dashboard: {
      /** {@see AppInfoWidget} **/
      app_info_widget: {
        title: "Solicitud",
        app_code: "código de la aplicación",
        category: "Categoría",
        name: "Nombre",
        installs: "Instalar aplicaciones",
        uninstalls: "Desinstalar aplicaciones",
        actives: "aplicaciones activas",
        description: "Descripción",
        published: "Publicado",
        waiting_for_review: "Aprobación pendiente",
        app_mode: "Modo de aplicación",
      },
    },
  },
  /** {@see ShopPermissions} **/
  shop_permissions: {
    ADMIN: { text: "Propietario", description: "Acceso completo a todos los escaparates." },
    PRODUCT: {
      text: "Gerente de producto",
      description: "Agregue, edite y administre los productos de la tienda.",
    },
    AUDITING: {
      text: "Gerente Financiero",
      description: "Ver información financiera y pagos.",
    },
    CONTENT: {
      text: "Gestión de contenido",
      description: "Responda preguntas, escriba blogs y diseñe páginas.",
    },
    OFFICER: {
      text: "Gerente senior",
      description: "Ver y monitorear la actividad de los empleados.",
    },
    EMPLOYEE: {
      text: "Empleado",
      description: "Ver pedidos y cumplir pedidos.",
    },
    MARKETING: {
      text: "Márketing",
      description:
        "Accede a la configuración y crea campañas, email marketing y otras secciones relacionadas con el marketing.",
    },
    VIEWER: {
      text: "Espectador",
      description:
        "La capacidad de ver la información de la tienda sin poder editarla o cambiarla.",
    },
  },

  /** {@see ShopRoles} **/
  shop_roles: {
    PhysicalOrdersChecking: {
      text: "Comprobación física",
      description: "Consultar pedidos recibidos.",
    },
    PhysicalOrdersPackaging: {
      text: "Empaque Físico",
      description: "Almacén y proceso de embalaje.",
    },
    PhysicalOrdersDelivery: {
      text: "Envío físico",
      description: "Envío de pedidos.",
    },
    PhysicalOrdersSupport: {
      text: "Soporte físico",
      description: "Soporte post-venta.",
    },
  },

  /** {@see AccountStatus} **/
  account_status: {
    Checking: "Comprobación",
    Approved: "Confirmado",
    Rejected: "Rechazado",
    Deleted: "Eliminado",
    Banned: "Prohibido",
    Payment: "Pago",
    SelldoneSprite: "Cuenta de billetera Selldone",
    SelldoneStorage: "Almacenamiento Selldone",
  },
  /** {@see BPageAccount} **/
  account_page: {
    title: "Cuenta",
    menu: {
      setting: "Ajustes",
      charge: "Cargo",
      transfer: "Transferir",
      transactions: "Actas",
      history: "Historia",
      cards: "Tarjetas",
    },

    /** {@see BPageAccountTransactions} **/
    transactions: {
      title: "Transacciones de cuenta",
      detail: {
        title: "Transacción",
        amount: "Monto",
        description: "Descripción",
        from: "Desde",
        to: "Para",
        created_at: "Fecha",
        receipt: "Recibo",
        receipt_note: "Nota",
      },
      table: {
        type: "Tipo",
        from: "De la cuenta",
        to: "A la cuenta",
        amount: "Monto",
        receipt: "Recibo",
        created_at: "Fecha",
        description: "Descripción",
      },
    },

    /** {@see BPageAccountTransfer} **/
    transfer: {
      title: "Cargos de transferencia",
      form: {
        title: "Formulario de solicitud de transferencia",
        sub_title:
          "Selldone Depósito a cuentas propias o de terceros",
        message:
          "Tenga cuidado al transferir dinero, no podrá regresar si completa la transferencia.",
      },
    },
    /** {@see BPageAccountDeposit} **/
    deposit: {
      form: {
        title: "Cuenta de cargo",
        sub_title:
          "Debe cargar el saldo de su cuenta para comprar licencias, actualizar su cuenta y pagar los recibos del sistema.",
        amount_input: "Monto",
        charge_action: "Cuenta de cargo",
      },
      notifications: {
        qr_title: "Pago",
        qr_message: `Dirección de pago {currency} creada.`,
        gateway_title: "Pago",
        gateway_message: "Conexión a la pasarela de pago.",
      },
    },

    /** {@see BPageAccountEdit} **/
    setting: {
      title: "Configuraciones de la cuenta",
      account_name_input: "Nombre de la cuenta",
      notifications: {
        updated_success: "Su cuenta se actualizó con éxito.",
      },
    },
  },

  /** {@see BAccountReceiptPaymentDialog} **/
  receipt_payment_dialog: {
    title: "Recibo Pago",
    /*  message: 'If the following information is correct, hit the transaction confirmation key to make the transaction.',
      to: 'Destination account',
      amount: 'Amount',
      receipt: 'Receipt',
      description: 'Description',
      status_paid: 'This receipt has already been paid.',
      status_canceled: 'This receipt has been canceled.',
      pay_action: 'Pay via port',
      pay_internal_action: 'Payment from account',*/
  },
  /** {@see BAccountTransactionForm} **/
  transaction_form: {
    title: "Formulario de transacción",
    from_input: "Desde el número de cuenta",
    to_input: "Al número de cuenta",
    from_input_message: "El importe se retirará de esta cuenta.",
    account_name: "Nombre de la cuenta",
    currency: "Divisa",
    free_balance: "Saldo disponible",
    to: "Cuenta de destino",
    amount: "Monto",
    receipt_title: "pago por recibo",
    receipt_input: "Número de recibo",
    paid_status: "Este recibo ya ha sido pagado.",
    paid_canceled: "Este recibo ha sido cancelado.",
    description: "Explicación",
    created_at: "Fecha",
    duration: "Duración",
    unlimited: "Ilimitado",
    add_note_action: "Agregar descripción",
    note: "Nota",
    transfer_action: "Transferir",
    confirmation: {
      title: "Enviar dinero",
      subtitle: "Confirmación de transacción",
      message:
        "Si la siguiente información es correcta, presione la tecla de confirmación de transacción para realizar la transacción.",
      from: "De la cuenta",
      to: "A la cuenta",
      amount: "Monto",
      fee: "Tarifa de transacción",
      total_pay: "Monto retirado de su cuenta",
      receipt: "Recibo",
      description: "Descripción",
      accept_action: "Confirmación de transacción",
    },
    enter_account_number: "Ingrese el número de cuenta.",
    currency_not_match:
      "La divisa de la cuenta de destino no es la misma que la de origen",
    account_number_not_valid: "El número de cuenta es correcto.",
    account_number_is_valid: "El número de cuenta es correcto.",
    receipt_not_valid: "El número de factura es incorrecto.",
    receipt_is_valid: "El número de recibo es correcto.",

    notifications: {
      confirm_success: "Transacción completada con éxito.",
    },
  },

  /** {@see OPlanCalculator} **/
  price_calculator: {
    title: "Calculadora ╏ Ajuste a su negocio",
    description:
      "Calcula y elige el mejor plan en función de tus ventas mensuales:",
    sale_input: "Cantidad de ventas mensuales",
    hypernova_plan: "¡Solicite Hipernova %0!",
    show_normal_mode: "Mostrar modo normal",
    show_hypernova_mode: "¡Mi transacción es superior a 1 millón de dólares!",
  },

  /** {@see OPlanFeaturesCard} **/
  price_card: {
    billed_monthly: "Facturado {amount} mensualmente.",
    billed_yearly: "Facturado {amount} anualmente.",
    buy_license_action: "Compra ahora",
    select_your_store: "Selecciona tu tienda",
  },

  /** {@see BSessionsMap} **/
  shop_session_widget: {
    total_sessions: "Sesiones totales",
  },
  /** {@see BDashboardShopCustomersActivityMap} **/
  user_activities_keys: {
    add_baskets: "Añadir al carrito",
    remove_baskets: "Eliminar del carrito",
    buys: "Comprar",
    products_views: "Ver el producto",
  },
  /** {@see BDashboardShopAcquisition} **/
  shop_visitors_widget: {
    title: "Análisis de visitantes",
    new_visitors: "Nuevos visitantes",
    amp: "Vistas de AMP",
    returning_visitors: "Visitantes que regresan",
    page_views: "Visitas a la página",
    other_pages: "Otras páginas",
    from_previous_7_days: "de los últimos 7 días",
  },

  /** {@see BUserAppLevel}   {@see AppLevel}  **/
  app_levels: {
    title: "Nivel de aplicación",
    Newbie: "novato",
    Beginner: "Principiante",
    Novice: "Principiante",
    Intermediate: "Intermedio",
    Advanced: "Avanzado",
  },

  /** {@see Login} **/
  login: {
    register_title: "El medio de los negocios,<br> Experiencia disfrutable.",
    register_subtitle:
      "Inscríbete hoy gratis. Selldone es amado por nuevas empresas, empresas, compradores y vendedores.",

    password_recovery_title: "Recuperación de contraseña",
    password_recovery_message:
      "En caso de que haya olvidado su contraseña, ingrese la dirección de correo electrónico de su cuenta y presione la tecla de confirmación. Le enviaremos un correo electrónico con un enlace para restablecer su contraseña.",
    email: "Su dirección de correo electrónico",
    password_recovery_action: "Recibir correo electrónico de recuperación",

    register_google: "Continuar con Google",
    register_apple: "Continuar con Apple",
    continue_with: "Continua con",
    register_linkedin: "Continuar con LinkedIn",
    register_facebook: "Continuar con Facebook",
    register_github: "Continuar con GitHub",
    create_your_account: "Crea tu cuenta",
    password_8_chars: "La contraseña debe tener al menos 8 caracteres.",
    password_upercase_number: "Al menos una letra mayúscula y un número.",
    password_confirm: "La contraseña y la confirmación coinciden.",
    privacy_agreement:
      "Al registrarse, acepta los <a href='/terms' target='_blank'>Términos de uso</a> y la Política de <a href='/privacy' target='_blank'>privacidad</a> de Selldone.",
    register_action: "¡Vamos, es gratis!",
    login_action: "Acceso",
    already_signup: "¿Ya te registraste?",
    login_your_account: "Ingrese a su cuenta",
    login_google: "Continuar con Google",
    login_linkedin: "Continuar con LinkedIn",
    login_facebook: "Continuar con Facebook",
    login_github: "Continuar con GitHub",
    remember_me: "Acuérdate de mí.",
    login_button: "Acceso",
    two_step_problem: "¿Tienes algún problema con la contraseña de dos pasos?",
    two_step_problem_action: "Quiero deshabilitar el inicio de sesión en dos pasos.",
    two_step_confirm: "Confirmar código de acceso",
    forgot_password: "¿Se te olvidó tu contraseña?",
    signup_free: "Registrate gratis",
    checking_robot_message: "Comprobando si eres un robot o un humano..",
    notifications: {
      step2_login_success: "Inicio de sesión automático en la cuenta",
    },
    signup_email: "Regístrese por correo electrónico",

    name_placeholder: "Nombre",
    email_placeholder: "Correo electrónico",
    email_or_username_placeholder: "Correo electrónico, nombre de usuario o número de teléfono",
    password_placeholder: "Clave",
    re_password_placeholder: "confirmar Contraseña",
    new_in_samin: "¿Nuevo en Selldone?",
    auto_create_shop: "Tienda de creación automática",
  },
  /** {@see Layout} **/
  layout: {
    logout: "Cerrar sesión",
    menu: {
      my_public_profile_subtitle: "Mi perfil público {name}.",

      personal_information: "Información personal y perfil",
      personal_information_subtitle: "Editar mi perfil, dirección y KYC.",
      wallet: "Carteras y cuentas",
      wallet_subtitle: "Cuentas virtuales y tarjetas de pago conectadas.",

      companies: "Empresas y Cuentas Comerciales",
      companies_subtitle: "Registrar mi perfil empresarial y fiscal.",

      access: "Acceso a Mi Cuenta",
      access_subtitle:
        "Clientes OAuth, tokens de acceso personal y aplicaciones conectadas.",

      security: "Seguridad",
      security_subtitle: "Establezca dos factores y administre las opciones de inicio de sesión social.",

      preferences: "Preferencias del usuario",
      preferences_subtitle:
        "Cambiar tema, nivel, idioma y moneda predeterminada.",
      my_subscriptions: "mis Suscripciónes",
      my_subscriptions_subtitle:
        "Acceso a funciones premium de inteligencia artificial y personalización.",
    },
  },

  /** {@see PageBuilder} **/
  page_builder: {
    title: "Diseño de páginas web",

    menu: {
      user_view: "Vista",
      design: "Diseño",
      behavior: "Comportamiento",
      seo: "SEO",
      setting: "Ajustes",
      embed: "Empotrar",
    },
    waiting_fetch: "Recibiendo información..",

    /** {@see SettingCustomPage} **/
    setting: {
      title_input: "Título de la página",
      description_input: "Breve descripción",
      name_input: "URL de la página (letras y números)",
      bg_color_input: "Color de fondo",
      bg_style_input: "Estilo de fondo de página",
      page_label_input: "color de la etiqueta",
      page_dir_input: "dirección de la página",
      ltr: "De izquierda a derecha",
      rtl: "De derecha a izquierda",
      designer_note: "Nota del diseñador",
    },

    /** {@see LPageEditor} **/
    design: {
      themes: {
        title: "Asistente de diseño personal",
        message: "Diseñe las mejores páginas para su negocio sin programar.",
        page_title_input: "Introduce un título para tu página",
      },
      tools: {
        rearrange: "Pedido",
        tools: "Instrumentos",
        history: "Historia",
        style: "Estilo",
        typography: "Tipografía",
        hierarchy: "Jerarquía",
      },
      no_category: "Sin categorías",
    },

    /** {@see LPageEditorSeo} **/
    seo: {
      message:
        "La configuración de SEO se ajusta automáticamente por el motor SEO de Selldone.",
    },
  },

  /** {@see VerifyEmailCaution} **/
  verify_email_caution: {
    title: "confirme su dirección de correo electrónico",
    message:
      "El nuevo enlace de activación ha sido enviado a su dirección de correo electrónico {email}. Por favor revise su correo electrónico antes de tomar cualquier acción.",
    resend_message:
      "Si no ha recibido el enlace de activación en su correo electrónico, haga clic en el botón de abajo para volver a enviar.",
    resend_action: "Reenviar enlace de activación",
    resend_notice: "Enlace de activación enviado.",
  },

  /** {@see ShopAutomation_Autopilot} **/
  autopilot: {
    start: "Fecha de inicio",
    end: "Fecha final",
  },

  /** {@see Help} **/
  help: {
    menu: "Menú",
    more_helps: "Lee mas",
  },

  /** {@see WidgetCompanyCard} **/
  company_card: {
    pending_state: "Esperando para revisión",
    register: "Registrado",
    developer: "Desarrollador",
    verified: "Verificado",
    premier: "Primer ministro",
  },

  /** {@see ShopSubscriptionList} **/
  shop_license: {
    add: "Añadir suscripción",
    only_last: "Sólo última suscripción",
    vouchers: "vales",
    buy: "Comprar plan de suscripción",
    monthly: "Mensual",
    yearly: "Anual",
    start_date: "Fecha de inicio",
    end_date: "Fecha final",
    price: "precio",
    verify: {
      true_title: "Sí Título",
      true_description: "Selldone Sí Descripción",
    },
    need_charge: "Necesita cargo",
    buy_now: "Compra ahora",
    use_voucher_now: "Usar cupón ahora",
    plan_placeholder: "Seleccione su plan de suscripción",
    plan: "plan de licencia",
    use_date: "Fecha de activacion",
    validity_duration: "Duración de la validez",
    validity_duration_hint:
      "Al comprar una licencia de 12 meses, recibirá un 30% de descuento.",

    active_license: {
      title: "Licencia activa",
      subtitle:
        "La información de su licencia activa.",
      subtitle_partner:
        "La información de su licencia activa de {name}.",
    },
    licenses_table: {
      title: "Historial comprado",
      subtitle:
        "Licencias activas y pendientes.",
    },
    license_detail: {
      title: "Detalles",
      subtitle:
        "Límites en su plan actual.",
    },

    table: {
      plan: "Tipo de plan",
      start_date: "Fecha de inicio / finalización",
      renewal: "Auto renovación",
      linked_account: "Cuenta Vinculada / Cupón",
      payment: "Pago",
      cancel: "Cancelar",
    },
    notifications: {
      subscribe_success: "Suscrito con éxito.",
      cancel_success: "Suscripción cancelada con éxito.",
    },
    cancel_dialog: {
      title: "Cancelar confirmación de suscripción",
      message: "¿Estás seguro de cancelar esta suscripción?",
      action: "Cancelar suscripción",
    },
    add_dialog: {
      wallet: {
        title: "Elegir a Billetera",
        subtitle:
          "Configura y gestiona esta opción para tu tienda.",
      },
      auto_renewal: {
        true_title: "Auto renovación",
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
      },
      options: {
        title: "Título",
      },
      verify: {
        title: "Título",
      },
    },
  },

  /** {@see BLayoutBackofficeShop} **/

  admin_shop_layout: {
    download_txt: "Descargar texto de datos",
    download_excel: "descargar datos excel",
  },
  /** {@see BUserPreferences} **/
  user_preferences: {
    access: "Acceso",
    template: "Modelo",
    feedback: "Comentario",
    date_time: "Fecha y hora",

    company: "Empresa",
    company_message: "Si tienes empresa y quieres publicar apps.",
    access_keys: "Claves de acceso",
    access_keys_message: "Mostrar clientes y claves de acceso.",
    rating: "¿Cómo calificaría su experiencia con Selldone?",
    large_font: "Fuentes grandes",
    large_font_message: "Mostrar texto más grande de lo normal",
    samples: "Mostrar tiendas de muestra",
    samples_message:
      "Si está habilitado, se mostrarán algunas tiendas de muestra en su panel.",

    automation: "Automatización",
    automation_message:
      "Mostrar la pestaña de automatización en el panel de control de la tienda. (Webhooks, Programación visual, ...)",
  },

  /** {@see BPageShopSettingLocations} **/
  shop_locations: {
    title: "Países donde se presta el servicio",
    sub_title:
      "Seleccione los países en los que desea vender su producto de la lista a continuación.",

    delete_restriction: "Eliminar restricción",
    set_restriction: "establecer restricción",
    notifications: {
      locations_update: "Ubicación actualizada con éxito.",
    },
    table: {
      country: "País",
      currency: "Divisa",
      available: "Disponible",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "Agotado",
    review_unit: "Revisar",
    not_original: "No es original",
  },

  /** @see BProductAddStudio **/
  product_studio: {
    add_mode: "Agregar más detalles",
    auto_category: "Categoría de configuración automática",
    add_in_current_category: "Añadir a la categoría actual",
    category_mode_message:
      "Si está habilitado, el producto se agregará a la categoría o subcategoría predeterminada.",
    sku_name_input: "SKU / Nombre",
    info: {
      subtitle:
        "Para generar el producto, puedes ingresar únicamente los detalles esenciales necesarios para su creación.",
    },
    price: {
      subtitle:
        "Ingresa el precio y el descuento de este producto. Una vez agregado el producto tendrás acceso a más opciones.",
    },
    by_sku: {
      title: "Agregar por SKU",
      subtitle: "La base de datos de su país no está disponible.",
    },
    drop_shipping: {
      subtitle:
        "Encuentre productos en el mercado mayorista y agréguelos a su tienda.",
    },
    by_connect: {
      subtitle:
        "Agregue fácilmente productos de proveedores de POD o dropshipping con Selldone Connect OS: simplemente conecte su tienda y disfrute de la integración automática de productos, sin necesidad de complementos.",
    },
    your_license_is_not_eligible: "Su licencia no es elegible.",
    sku_dialog: {
      title: "Agregar producto por SKU",
      subtitle:
        "Tienes la posibilidad de localizar productos por su SKU en nuestra base de datos y agregarlos con tan solo un clic.",
    },
    dropshipping_dialog: {
      title: "Añadir productos de dropshipping",
    },
  },

  /**
   * @see BProductAddDropshippingShops
   */
  product_add_dropshipping_shops: {
    subtitle:
      "Aquí, puedes encontrar mayoristas que publican sus productos en Selldone, poniéndolos a disposición de otros comerciantes. La plataforma de dropshipping integrada de Selldone simplifica el proceso, haciéndolo fácil y sencillo tanto para mayoristas como para comerciantes.",
  },

  /** @see Affiliates **/
  my_affiliate: {
    title: "Mis contratos de afiliados",
    message:
      "Lista de acuerdos de afiliación con otras tiendas.",
  },

  /** @see BPageShopMarketingAffiliate **/
  affiliates: {
    title: "socios afiliados",
    subtitle:
      "Cree afiliados, realice un seguimiento de su rendimiento a lo largo del tiempo y tome medidas basadas en información precisa en un solo lugar. Te ayudamos a ti y a tus socios a construir una relación sólida.",

    affiliate_code: "Código de afiliación",
    crate_date: "Fecha de Creación",
    last_payment_date: "Última Fecha de Pago",
    for_all_products: "Aplicar a todos los productos",
    balance: "Equilibrio",
    fix_commission: "Comisión fija",
    percent_commission: "Comisión basada en porcentaje",
    total_payment: "Pagos totales",
    new_affiliate: "Nuevo socio afiliado",
    new_affiliate_message: "Agregar nuevo socio afiliado",

    link_factory: {
      title: "Generador de enlaces de socios afiliados",
      link_input: "Su enlace",
      link_output: "Enlace generado",
    },
  },

  /**
   * @see BAffiliateEdit
   */
  affiliate_edit: {
    affiliate_commission: "comisión de afiliados",

    config: {
      new: "Nuevo socio afiliado",
      edit: "Editar",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },

    payment: {
      title: "Pago Información",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },

    contact: {
      title: "Información del contacto",
      subtitle: "Configura y gestiona esta opción para tu tienda.",
    },

    restriction: {
      title: "Título",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },

    link_domain: {
      title: "Título",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",

      domain_not_approved_msg: "Opción",
      domain_is_not_enable_msg: "Opción",
      domain_is_linked_to_other_affiliate_msg:
        "Configura y gestiona esta opción para tu tienda.",
    },

    set_users_first_message: "Establecer Usuarios Primero Mensaje",

    cluster: {
      title: "Clúster",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
      manage_action: "Gestionar",
    },

    notifications: {
      create_success: "Crear Éxito",
      update_success: "Actualizar Éxito",
    },

    inputs: {
      name: {
        label: "Opción",
        message: "Configura y gestiona esta opción para tu tienda.",
      },
      commission: {
        label: "Opción",
        false_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
        false_title: "No Título",
        true_title: "Sí Título",
      },
      user: {
        label: "Usuario (Opcional)",
        message: "Opcional, por ejemplo: nombre del afiliado en Selldone",
      },
      web: {
        placeholder: "Opción",
      },
      address: {
        placeholder: "Opcional, e.g., 1200 POX, NY, USA",
      },
      tel: {
        placeholder: "Opcional, e.g., 001-808-210354",
      },
      bank: {
        placeholder: "Configura y gestiona esta opción para tu tienda.",
      },
      domain: {
        placeholder: "Seleccionar a Dominio... (Opcional)",
      },
      pos: {
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_title: "POS Acceso",
      },
      enable: {
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
      },
      products: {
        label: "Opción",
        select_product: "Seleccionar Productos",
      },
    },
    actions: {
      update: "Actualizar Afiliado",
      add: "Añadir",
    },
    /**
     * @see BPageAffiliateEdit
     */
    delete: {
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
  },

  /**
   * @see BPageShopFinanceValuations
   */
  shop_valuations: {
    title: "Título",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
    add_valuation_action: "Crear nuevo formulario de valoración",
    empty_message:
      "Configura y gestiona esta opción para tu tienda.",
    delete_dialog: {
      title: "Título",
      message:
        "Configura y gestiona esta opción para tu tienda.",
      action: "Sí, eliminar ahora",
    },
    notifications: {
      delete_success: "Eliminar Éxito",
    },
  },

  /**
   * @see BValuationInput
   */
  valuation_input: {
    label: "Opción",
  },

  /**
   * @see BValuationAdd
   */
  valuation_add: {
    title_edit: "Editar Valoración Formulario",
    title_add: "Crear nuevo formulario de valoración",
    config: {
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    valuation_preview: "Vista previa del formulario de valoración",
    load_sample: "Opción",
    conditions: {
      title: "Condiciones",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    structure: {
      title: "Título",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
      expand_action: "Opción",
      collapse_action: "Opción",
    },
    inputs: {
      title: {
        message: "Mensaje",
        placeholder: "Configura y gestiona esta opción para tu tienda.",
      },
    },
    samples: {
      title: "Título",
    },
  },

  /** @see AdminGiftcardPage_Orders **/
  gift_card_orders: {
    title: "Pedidos con Tarjeta Regalo",
    table: {
      order: "Pedido",
      order_price: "Total de la orden",
      paid_by_card: "Pagado con tarjeta",
      payment_status: "Estado de pago",
      date: "Fecha",
    },
  },

  /** @see BPageOfferOrders **/
  offer_orders: {
    title: "Órdenes de oferta",
    table: {
      order: "Pedido",
      order_price: "Total de la orden",
      offer_amount: "Ofrece una cantidad",
      payment_status: "Estado de pago",
      product: "Producto",
      date: "Fecha",
    },
  },

  /** @see BPageCouponOrders **/
  coupon_orders: {
    title: "Órdenes de cupón",
    table: {
      order: "Pedido",
      order_price: "Total de la orden",
      coupon_amount: "Importe del cupón",
      payment_status: "Estado de pago",
      date: "Fecha",
    },
  },

  /** @see BPageDiscountCodeOrders **/
  discount_code_orders: {
    title: "Pedidos con código de descuento",
    table: {
      order: "Pedido",
      order_price: "Total de la orden",
      discount_amount: "Importe de descuento",
      payment_status: "Estado de pago",
      date: "Fecha",
    },
  },

  /** @see BPageShopIncentives **/
  incentives: {
    discount_code: "Descuento",
    coupon: "Cupón",
    offer: "Oferta",
    gift_card: "Tarjeta de regalo",
    lottery: "Lotería",
    cashback: "Reembolso en efectivo",
  },

  /** {@see BPageShopIncentivesDiscountCode} **/
  discount_codes: {
    title: "Códigos de descuento",
    sub_title:
      "En esta sección podrás diseñar cupones de descuento a la medida de tus necesidades. Estos descuentos son independientes de cualquier descuento de producto y se aplicarán al importe final del pedido del usuario.",
    add_new: "Agregar nuevo código de descuento",
    card: {
      created: "Crear",
      start: "Comienzo",
      end: "Fin",
      currency: "Divisa",
      discount_percentage: "Tasa de descuento",
      discount_limit: "Límite de descuento",
      state: "Estado actual",
      enabled: "Ahora habilitado",
      disabled: "Ahora deshabilitado",
      used: "Consumado",
      count: "Contar",
      unit: "artículos)",
    },
    /** {@see BDiscountCodeAdd} **/
    dialog: {
      title_edit: "Editar código de descuento",
      title_add: "Agregar nuevo código de descuento",
      discount_code_input: "Código de descuento",
      discount_percent_input: "Tasa de descuento",
      discount_percent_input_hint: "Tasa de descuento del monto de la compra",
      count_input: "Contar",
      count_input_hint: "Máximo uso de este código",
      limit_input: "Límite de descuento",
      limit_input_hint: "Descuento máximo basado en moneda",
      currency_input_message: "Habrá descuentos disponibles para esta moneda.",
      limit_input_message:
        "El valor de 0 para el límite de descuento significa que no hay límite para la tasa de descuento.",
      title_input: "Título",
      title_input_hint: "Puede ingresar un título para este código de descuento",
      description_input: "Descripción",
      description_input_hint:
        "Puede introducir una descripción para este código de descuento",
      date_start_input: "Comienzo",
      date_start_input_placeholder: "Seleccione cuándo comenzar el descuento",
      date_end_input: "Fin",
      date_end_input_placeholder: "Seleccione cuándo terminará el descuento",
      notifications: {
        add: "Código de descuento añadido con éxito.",
        edit: "Código de descuento editado con éxito.",
      },
      config: {
        title: "Configuración general",
        subtitle:
          "La fórmula para calcular el código de descuento es: máx. (LÍMITE, PORCENTAJE * precio del carrito). Recuerda que los códigos deben ser relevantes y fáciles de recordar.",
      },
      limit: {
        title: "Limitaciones",
        subtitle:
          "En esta sección podrás definir el límite máximo de uso de cada código de descuento, así como el importe máximo del descuento.",
      },
      duration: {
        title: "Límite de duración",
        subtitle:
          "Si deseas activar un código de descuento para un período de tiempo específico, puedes establecer esa duración aquí.",
      },
      design: {
        subtitle:
          "Puedes establecer un título y una descripción para cada código de descuento. Estos detalles se mostrarán al usuario.",
      },
      cluster: {
        subtitle:
          "Al asociar este código de descuento con un clúster, puede administrarlo fácilmente junto con otros recursos en una sola ubicación.",
      },
    },
    delete_alert: {
      title: "Eliminar código de descuento",
      message: "¿Quieres eliminar este código de descuento?",
      action: "Eliminar descuento",
    },
    notifications: {
      delete_success: "Tu comentario fue eliminado con éxito",
    },
  },

  /** {@see BPageShopIncentivesGiftcard} **/
  gift_cards: {
    title: "Tarjeta de regalo",
    sub_title:
      "Cree una tarjeta de regalo y luego haga tantas como necesite. Esta tarjeta tiene un cargo y solo se puede usar para compras en su tienda.",

    create_new: "Agregar nueva tarjeta de regalo",
    card: {
      created: "Crear",
      lifetime: "Fecha de caducidad",
      lifetime_unit: "Mes a partir de la fecha de creación de cada tarjeta",
      currency: "Divisa",
      initial_balance: "Carga inicial",
      count: "Contar",
      count_unit: "ít",
      used: "Utilizado",
    },
    dialog: {
      title: "Diseño de tarjetas de regalo",
    },
    alert: {
      title: "Eliminar código de descuento",
      message:
        "¿Quieres eliminar este código de descuento?",
      action: "Borrar",
    },
    notifications: {
      delete_title: "Eliminar tarjeta de regalo",
      delete_message: "Su comentario ha sido eliminado con éxito.",
    },
  },

  /** {@see BPageShopIncentivesCoupon} **/
  coupons: {
    title: "cupones",
    sub_title:
      "Si desea dar a sus clientes un descuento que se puede utilizar con condiciones específicas, puede crear cupones. Los cupones pueden incluir un porcentaje de descuento con un límite o una cantidad fija o una combinación de ambos.",
    create_new: "Añadir nuevo cupón",
    qualified_products: "Productos elegibles",
    min_purchase: "Compra mínima",
    only_first_order: "Solo primera compra",

    one_time_use: "De un solo uso",
    multiple_use: "Uso múltiple",
    amount_usage: "Cantidad utilizada",

    delete_alert: {
      title: "Eliminar cupón",
      message: "¿Estás seguro de eliminar este cupón?",
      action: "Sí, eliminar cupón",
    },
    notifications: {
      delete_success: "El cupón ha sido eliminado con éxito.",
    },
  },
  /** {@see BCouponAdd} **/
  coupon_edit: {
    title_edit: "Editar cupón",
    title_add: "Nuevo cupón",
    discount_charge: "Descuento y cargo",
    charge: "Cargo",
    charge_message: "Importe del cargo inicial",
    percent: "Porcentaje de descuento",
    percent_message: "Importe del porcentaje de descuento",
    limit_input: "Límite",
    limit_input_hint: "Importe límite de descuento",
    currency_input_message: "Cupón disponible para esta moneda.",

    count_input: "Contar",
    count_input_hint: "Máximo uso de este código",
    limit_input_message:
      "El valor de 0 para el límite de descuento significa que no hay límite para la tasa de descuento.",
    date_start_input: "Comienzo",
    date_start_input_placeholder: "Seleccione cuándo comenzar el cupón",
    date_end_input: "Fin",
    date_end_input_placeholder: "Seleccione cuándo terminará el descuento",
    title_input: "Título",
    title_input_hint: "Puede ingresar un título para este código de descuento",
    description_input: "Descripción",
    description_input_hint:
      "Puede introducir una descripción para este código de descuento",
    coupon_code: "Código promocional",
    need_code: "¿Necesitas código?",

    coupon_color: "Color del cupón",
    min_purchase_amount: "Importe mínimo de compra",
    min_purchase_amount_hint:
      "El monto de la compra debe ser mayor o igual a este valor.",
    should_exist_product: "Al menos uno de estos productos debe estar en el carrito",
    apply_for_first_order: "Solo para la primera compra",
    apply_for_first_order_on:
      "¡Este cupón solo se puede usar para la primera compra del cliente!",
    apply_for_first_order_off:
      "El número de usos de cupones por comprador se puede ajustar a continuación.",

    has_qualify_constraints: "¿Quieres definir más límites?",
    has_qualify_constraints_message:
      "Establezca más condiciones para calificar al cliente para usar este cupón.",
    one_time_use_message: "El cliente puede usar este cupón por una vez.",
    daily_limit: "Límite diario",
    no_limit: "Sin límite",
    daily_limit_message: "Cantidad máxima de uso por día por cliente",

    monthly_limit: "Límite mensual",
    monthly_limit_message: "Cantidad máxima de uso por mes por cliente",

    yearly_limit: "Límite anual",
    yearly_limit_message: "Cantidad máxima de uso por año por cliente",

    notifications: {
      add: "Nuevo cupón creado con éxito.",
      edit: "El cupón ha sido actualizado.",
    },

    config: {
      subtitle:
        "La fórmula para calcular el descuento del cupón es: CARGO + máx. (LÍMITE, PORCENTAJE * precio del carrito).",
    },
    limit: {
      subtitle:
        "En esta sección, podrás establecer tanto el número máximo de usos por cupón como el monto máximo de descuento que puede proporcionar cada cupón.",
      zero_message: "cero: ¡no hay límite!",
    },
    duration: {
      subtitle:
        "Si desea establecer un período de tiempo específico para que un cupón esté activo, puede configurar la duración en esta sección.",
    },
    design: {
      subtitle:
        "Cada cupón permite añadir un título y una descripción. Estos detalles serán visibles para el cliente.",
    },
    constraints: {
      subtitle:
        "Aquí tienes la posibilidad de establecer parámetros personalizados adicionales para el cupón.",
      no_limit: "Sin limitación adicional",
      has_limit: "Restricciones adicionales",
      has_code_message: "El usuario debe ingresar el código para agregar el cupón.",
    },
    club: {
      subtitle:
        "El uso de este cupón puede restringirse exclusivamente a miembros de clubes de clientes seleccionados.",
    },
    cluster: {
      subtitle:
        "Al asociar este cupón con un clúster, puede administrarlo fácilmente junto con otros recursos en una sola ubicación.",
    },
    preview: {
      subtitle: "Aquí está la vista previa pública del cupón.",
    },
  },

  /** {@see BPageShopIncentivesOffer} **/
  offers: {
    title: "ofertas",
    sub_title:
      "Puedes crear ofertas especiales para tus clientes para que, tras comprar un artículo, reciban otro artículo con descuento o incluso gratis.",
    create_new: "Añadir nueva oferta",
    qualified_products: "Productos elegibles",
    min_quantity: "Cantidad mínima",
    min_purchase: "Compra mínima",
    amount_usage: "Cantidad utilizada",

    delete_alert: {
      title: "Eliminar oferta",
      message: "¿Estás seguro de eliminar esta oferta?",
      action: "Sí, eliminar oferta",
    },
    notifications: {
      delete_success: "La oferta ha sido eliminada con éxito.",
    },
  },

  /** {@see BOfferAdd} **/
  offer_edit: {
    title_edit: "Editar oferta",
    title_add: "Nueva oferta",

    design_style: "Estilo de diseño",
    eligible_constraints: "Límites elegibles del cliente",

    title_input: "Título",
    title_input_hint: "Puede ingresar un título para este código de descuento",
    description_input: "Descripción",
    description_input_hint: "Escriba una descripción para este código de descuento",

    currency_input_message: "Oferta disponible para esta moneda.",
    qualified_products: "Productos elegibles",
    qualified_products_message:
      "Para que los productos sean elegibles, el total de artículos en el carrito debe ser igual o mayor que la cantidad mínima.",
    min_items: "Cantidad mínima de artículos",
    min_items_message: "El número de artículos que el cliente debe comprar.",
    offered_products: "Productos ofrecidos",
    offered_products_message: "Al menos uno de estos productos debe estar en el carrito.",
    discount_percent: "porcentaje de descuento",
    discount_percent_message: "Porcentaje de descuento para estos artículos.",
    discount_percent_hint: "Importe del porcentaje de descuento",

    per_order: "Número máximo de usos por pedido",
    per_order_message:
      "El número máximo de veces que se puede aplicar la oferta a un pedido",

    count_input: "Monto",
    count_input_hint: "Uso máximo de esta oferta",

    min_purchase: "Importe mínimo de compra",
    min_purchase_hint:
      "El precio de compra debe ser mayor o igual a este valor",
    limitation: "Limitación",

    date_start_input: "Comienzo",
    date_start_input_placeholder: "Seleccione cuándo comenzar el cupón",
    date_end_input: "Fin",
    date_end_input_placeholder: "Seleccione cuándo terminará el descuento",
    max_actives_is_3: "Solo puedes tener tres ofertas activas al mismo tiempo.",
    enable: "Aplicar automáticamente",

    notifications: {
      add: "Nueva oferta creada con éxito.",
      edit: "Oferta actualizada con éxito.",
    },
    config: {
      subtitle:
        "Comience a elaborar un acuerdo inteligente estableciendo su título, descripción y estado de disponibilidad pública.",
    },
    limit: {
      subtitle: "Establezca el límite máximo de uso para esta oferta en esta sección.",
    },
    duration: {
      subtitle:
        "Si desea establecer un período de tiempo específico para una oferta, puede configurar la duración aquí.",
    },
    constraints: {
      subtitle:
        "Establezca aquí los criterios y condiciones de elegibilidad para la oferta. La oferta se aplica a los artículos del carrito que cumplan estas condiciones.",
    },
    discounted_products: {
      title: "productos con descuento",
      subtitle:
        "Puedes especificar los productos a los que esta oferta les aplicará un descuento.",
    },
    cluster: {
      subtitle:
        "Al asociar esta oferta con un clúster, puede administrarla fácilmente junto con otros recursos en una sola ubicación.",
    },
  },

  /** {@see BPageCampaignAds} **/
  campaign_ads: {
    menu: {
      banner: "Bandera",
      reportage: "Reportaje",
      social: "Medios de comunicación social",
      offline: "Desconectado",
    },
  },

  /** {@see BPageShopMarketingEmail} **/
  emails: {
    title: "Correo de propaganda",
    subtitle:
      "Diseñe correos electrónicos arrastrando y soltando, programe y lance campañas para aumentar la retención y vea información confiable y precisa en un solo lugar.",
    cation_message:
      "⚠ Restringido para comerciantes no verificados. (Beta)",

    subject: "Asunto",
    from: "Desde",
    in_que: "esperando",
    schedule_at: "Horario en",
    sent: "Enviado",
    sends: "envía",
    delivers: "Entregado",
    views: "Puntos de vista",
    clicks: "Clics",
    buys: "compras",
    new_email: "Agregar nuevo correo electrónico",
    new_email_message: "Crear y programar nuevos correos electrónicos de marketing",
  },

  /** {@see BPageEmailMarketingDashboard} **/
  email_dashboard: {
    review: "Revisar",
    waiting_for_approve: "Esperando la confirmación de {name}",
    approved_by: "Correo electrónico verificado por {name} y enviado.",
    not_submitted_send_request:
      "Todavía no ha enviado una solicitud para enviar este correo electrónico.",
    reviewed_by: "Revisado por {name}",
    status: "Estado del correo electrónico",
    conversion: "Medidas de conversión",

    sell_performance: "Rendimiento de las ventas",
    total_buys: "Número total de ventas",
    amount_buy: "Cantidad total de ventas",
    average_sell: "Ventas promedio",
    sessions: "Sesiones",
    overview: "Visión de conjunto",
    purchase_amount: "Monto de la compra",
    actions: "Actividad del usuario",
  },

  /** {@see BPageEmailMarketing} **/
  email_page: {
    emails: "Correos electrónicos",
    edit: "Editar",
  },
  /** {@see BPageAffiliator} **/
  affiliate_page: {
    affiliates: "socios afiliados",
    orders: "Pedidos",
    payments: "Pagos",
  },

  /** {@see BPageAffiliateDashboard**/
  affiliate_dashboard: {
    link: {
      title: "Afiliado Enlace",
      subtitle:
        "Configura y gestiona esta opción para tu tienda. {code}",
    },
    fix_commission: "Comisión fija",
    percent_commission: "Comisión basada en porcentaje",
    last_payment: "Ultimo pago",
    balance: "Equilibrio",
    total_payment: "Pagos totales",
    status: "Estado y restricciones de socios afiliados",
    available_for: "Disponible para",
    orders_count: "Cantidad de pedidos",
    orders_accepted: "Pedidos aceptados",
    finance: "Informe financiero",

    amount_accepted: "Monto aceptado",
    amount_paid: "Monto de pago",
    sessions: "Sesiones",
    affiliate_payment: "Pagos de socios afiliados",
    amount_payment: "Monto del pago",
    amount_payment_hint: "Monto exacto de la transacción",
    i_paid: "Pagué {amount} {currency} a {name}",
    pay_now: "Pagar ahora",
  },

  /** {@see BPageShopPermissionRoles**/
  permission_roles: {
    new_role: "Agregar nuevo rol",
    new_role_message: "Facilitar el trabajo en equipo.",
    new_role_action: "Agregar nuevo rol",
  },
  /** {@see Affiliate**/
  user_affiliates: {},
  /** {@see BPageShopIncentivesLottery**/
  shop_lotteries: {
    title: "Lotería",
    sub_title:
      "Sus clientes pueden jugar y ganar. Los clientes de tu tienda deben consumir 10 fichas por cada juego. Por ejemplo, si desea que sus clientes tengan la oportunidad de ganar 1000 USD, debe establecer el monto del precio de cada ficha en 100 USD. Un valor de 0 para cada ficha significa que el comprador recibirá una ficha por cada compra.",
    manually_send_chip: "¿Quieres enviar fichas manualmente a los usuarios?",
    manual_send_token_action: "Fichas manuales",
    lottery_enable: "¿Está habilitada la lotería?",
    chip_price_input: "Precio de la ficha",
    zero_chip_message: "Dar 1x chip por pedido",
    chip_has_price_message: "Da 1 ficha por {amount} {currency} de pedido.",
    chip_disabled_message: "¡El chip está desactivado!",
    create_new: "Agregar nuevo premio",
    delete_alert: {
      title: "Eliminar premio",
      message: "¿Estás seguro de eliminar este premio de forma permanente?",
      action: "Sí, eliminar ahora",
    },
    notifications: {
      delete_success: "Premio eliminado con éxito.",
    },

    config: {
      subtitle:
        "Incrementa las compras de los clientes con una experiencia gamificada en tu tienda. Establece premios y probabilidades de ganar para los clientes que obtengan tokens a través de las compras. Cada partida cuesta 10 tokens y puedes ofrecer premios especiales para quienes compren por primera vez. El juego predeterminado es la Rueda de la fortuna, pero puedes personalizarlo para que se adapte al diseño de tu tienda.",
    },
    empty_prize_list: "Crea y gestiona premios aquí...",
  },

  /** {@see BLotteryAdd**/
  lottery_edit: {
    title_edit: "Editar artículo de lotería",
    title_add: "Nuevo artículo de lotería",
    general_config: "Configuración general",
    design_style: "Estilo y apariencia",
    enable_message: "Los artículos máximos en una rueda son 14.",
    title_input: "Título",
    title_input_hint: "Escribe un título breve.",
    description_input: "Descripción",
    description_input_hint: "Escribe una descripción sobre el artículo.",
    quantity: "Cantidad",
    quantity_message: "Total de artículos disponibles",
    image: "Imagen",
    image_placeholder: "Seleccione una imagen para el artículo",
    chance: "Oportunidad",
    chance_message: "Probabilidad de ganar en porcentaje",
    free_for_first: "¿Es gratis para nuevos clientes?",
    free_for_first_message: "Los nuevos clientes pueden ganar este artículo.",
    not_free_for_first_message: "Este premio no está disponible para el primer juego gratuito.",

    amount: "monto del premio",
    amount_hint: "Los usuarios ganan esta cantidad de cargo por su pedido.",
    currency_message:
      "Moneda para este artículo. Otras monedas se convierten por tipo de cambio.",
    discount: "Descuento",
    discount_message: "Porcentaje de descuento en el pedido del cliente",
    discount_limit: "Límite de descuento",
    discount_limit_hint: "Descuento máximo para el cliente.",
    color: "Color del sorteo",
    condition: "Condiciones",

    notifications: {
      add: "Nuevo artículo de lotería creado con éxito.",
      edit: "Los artículos de la lotería se cambiaron con éxito.",
    },
    config: {
      subtitle:
        "Aquí puedes crear los premios de lotería de tu tienda. Establece el título, la descripción, el color y la imagen de cada premio.",
    },
    design: {
      subtitle:
        "Aquí tienes la opción de elegir una imagen y un color para el premio.",
    },
    constraints: {
      subtitle: "Especificar los criterios y limitaciones para ganar este premio.",
    },
    prize: {
      title: "Premio",
      subtitle:
        "Configure aquí los detalles del premio. Las opciones incluyen códigos de descuento, tarjetas de regalo, créditos y otros descuentos como premios de lotería.",
    },
    product_input: {
      label: "Premio del producto",
      message: "Seleccione un producto para el premio (es gratis)",
    },
  },

  /** {@see BGiftcardTypeInput**/
  gift_card_types_list: {
    label: "Tipo de tarjeta de regalo",
    message: "Seleccione un tipo de tarjeta de regalo de la lista.",
  },

  /** {@see BEmailMarketingEditor**/
  email_builder: {
    service_unavailable: "El servidor de correo no está activo en su cuenta.",
    design_section: "Su placa de diseño de correo electrónico",
    schedule_switch: "¿Programar envío de correo electrónico?",
    schedule_placeholder: "Seleccione la hora para enviar el correo electrónico",
  },

  /** {@see BCustomersFunnel**/
  user_funnel: {
    REGISTER_DATE: {
      title: "Fecha de Registro",
      description: "Filtrar por fecha de registro del usuario.",
    },
    LAST_BUY_DATE: {
      title: "Última compra",
      description: "Última fecha de compra.",
    },
    LOGIN_DATE: {
      title: "Fecha de inicio de sesión",
      description: "Última fecha de inicio de sesión.",
    },
    LEVEL: {
      title: "club de clientes",
      description: "Miembros del club de clientes.",
    },
    SUBSCRIBED: {
      title: "Suscrito",
      description: "Tener suscripción para recibir correo electrónico.",
    },
    NOT_PURCHASED: {
      title: "sin compra",
      description: "Clientes que no han comprado hasta ahora.",
    },
    SEX: {
      title: "Género",
      description: "Género del usuario.",
    },
    LOCATION: {
      title: "Localización",
      description: "Ubicación del usuario.",
    },

    LIMIT: {
      title: "Límite",
      description: "Establezca un límite en el número máximo de usuarios.",
    },

    SEGMENTS: {
      title: "Segmentos",
      description: "Limitar clientes en segmentación manual específica.",
    },
  },

  /** {@see InlineHelp**/
  inline_help: {
    helps_title: "Guía del usuario del servicio",
    blogs_title: "Contenido relacionado en el blog de Selldone",
  },

  /** {@see BPageShopFinanceTax**/
  shop_tax: {
    region: "Región",
    label: "Etiqueta",
    country_tax: "Impuesto del país",
    customer_tax: "IVA del cliente",
    business_tax: "IVA empresarial",
    shipping: "Envío",
    override: "Anular",
    country: "País",
    vat_range: "Rango de IVA",
    custom: "Costumbre",
    regions: "Regiones",
    rest_world: "El resto del mundo",
    overrides: "Anulaciones",
    dialog_set_title: "Configuración de impuestos",

    tax_setting: "Configuración de impuestos",
    vat: "VAT",

    calculate_tax_input: "Calcular impuestos automáticamente",
    calculate_tax_message:
      "Al activar esta opción, se calculará y aplicará el IVA para sus pedidos.",

    tax_number: "Número de impuesto",
    tax_number_message:
      "Ingrese su número de identificación fiscal. Este número de registro se hará constar en la factura del comprador.",

    tax_included_in_price_input: "Impuesto incluido en el precio de los productos",
    tax_included_in_price_message:
      "Seleccione esta opción si incluye el monto del impuesto en el precio de su producto. El importe del impuesto se calculará con la siguiente fórmula:",
    tax_included_in_price_formula:
      "Impuesto = (precio * IVA) / (1 + IVA), por ejemplo, el monto del impuesto por un producto a un precio de 100 $ con una tasa de valor agregado del 10 % se convierte en 9,09 $.",

    tax_exclude_title: "Excluido ╏ El impuesto se agregará al finalizar la compra",
    tax_excluded_message:
      "Los impuestos se calcularán antes de los pagos durante el proceso de pago y se agregarán al precio del impuesto excluido según la evidencia de su cliente.",

    tax_on_shipping_input: "Aplicar impuestos al envío",
    tax_on_shipping_message:
      "Al seleccionar esta opción se aplicará el impuesto al envío.",

    fixed_tax_rate: "Tasa fija de impuestos",
    dynamic_tax_rate: "Impuesto basado en regiones",

    locations_tip:
      "La lista anterior solo muestra los países que ha seleccionado en Configuración de la tienda > Ubicaciones como los países que vende.",
    locations_action: "Configuración de las ubicaciones de las tiendas",

    save_alert: "¡La configuración no se guarda!",

    pos_tax_setting: "Configuración de impuestos de POS",
  },

  /** {@see BPageTransportation**/
  transportation_page: {
    menu: {
      dashboard: "Panel",
      transportations: "Métodos de envío",
      orders: "Pedidos",
      setting: "Entorno",
      delivery_services: "Servicios",
      delivery_persons: "mensajeros",
    },

    go_to_courier_list: "Ver lista de mensajeros",
    go_to_service_list: "Ver lista de servicios de envío",
  },

  /** {@see BPageTransportationCouriers**/
  transportation_persons: {
    title: "mensajeros",
    notifications: {
      success_add: "Mensajero añadido.",
      success_reset: "Restablecimiento de estadísticas.",
      success_remove: "Mensajero eliminado con éxito.",
      success_update: "Información de mensajería actualizada con éxito.",
    },
    reset: {
      title: "Reiniciar las estadísticas",
      message: "¿Estás seguro de restablecer las estadísticas de este mensajero?",
      action: "Sí, restablecer ahora",
    },
    remove: {
      title: "Quitar mensajero",
      message: "¿Estás seguro de eliminar este mensajero?",
      action: "Sí, eliminar ahora",
    },
    add_dialog: {
      title: "Agregar nuevo mensajero",
      action: "Añadir mensajero",
    },
  },
  /** {@see BPageTransportationOrders**/
  transportation_orders: {
    title: "Pedidos para envío",
    notifications: {
      success_update: "Estado de envío actualizado con éxito.",
      success_payment: "Pago COD confirmado con éxito.",
    },
  },
  /** {@see BPageCourier**/
  delivery_person: {
    actions_title: "Configuración de mensajería",
    action_delivered: "Enviado",
    action_paid: "COD pagado",
    action_returned: "devuelto",
    cod_confirm_action: "Confirmar pago contra reembolso",
    pickup_dialog: {
      title: "¿Eres el mensajero de este paquete?",
      message:
        "Si usted es responsable de llevar este paquete, seleccione Sí, de lo contrario, seleccione No.",
    },
    status_dialog: {
      title: "Cambiar estado a {status}",
      message: "¿Está seguro de cambiar el estado de entrega a {status}?",
      action: "¡Sí, lo confirmo!",
    },
    cod_dialog: {
      title: "pago contra reembolso",
      message:
        "¿Confirmas que has recibido el importe del pedido del comprador?",
      action: "¡Sí, confirmo el pago!",
    },
  },

  /** {@see BPageTransportationServices**/
  transportation_services: {
    title: "Servicio de entrega",
    notifications: {
      success_add: "Servicio de entrega agregado.",
      success_reset: "Restablecimiento de estadísticas.",
      success_remove: "Servicio eliminado con éxito.",
      success_update: "Servicio actualizado con éxito.",
    },
    reset: {
      title: "Reiniciar las estadísticas",
      message: "¿Está seguro de restablecer las estadísticas de este servicio?",
      action: "Sí, restablecer ahora",
    },
    remove: {
      title: "Quitar el servicio de entrega",
      message: "¿Estás seguro de eliminar este servicio?",
      action: "Sí, eliminar ahora",
    },
    add_dialog: {
      title: "Agregar nuevo servicio de entrega",
      action: "Agregar servicio",
    },
  },
  /** {@see BPageTransportationPickups**/
  transportation_pickups: {
    addresses: {
      title: "direcciones de recogida",
      subtitle:
        "Agregue y edite direcciones de recogida aquí. Los usuarios podrán seleccionar la dirección de recogida en la página de pago.",
      add_action: "Agregar nueva ubicación",
    },
  },

  /** {@see DeliveryReceiptWidget**/
  delivery_receipt: {
    title: "Recibo de entrega",
    has_return: "Devolución de entrega",
    cashed: "Pago en efectivo",
  },
  /** {@see BPageTransportationServiceDashboard**/
  delivery_dashboard: {
    select_destinations: "Agregar pedidos a la lista",
    price_calculation: "Calcular tarifas de envío",
    price_calculation_action: "Calcular precio",
    add_request: "Solicitar servicio",
    add_request_action: "Enviar solicitud de servicio",
    refresh_action: "Actualizar información",
  },

  /** {@see DeliveryOrderWidget**/
  delivery_order: {
    title: "Orden de envío",
    has_return: "Devolución de entrega",
    cashed: "Pago en efectivo",
  },

  /** {@see BPagePos**/
  cash_register: {
    menu: {
      panel: "Caja registradora",
      orders: "Pedidos",
      customers: "Clientes",
      devices: "Dispositivos",
      inventory: "Inventario",
    },
    payment_confirm: "Confirmación de pago",
    payment_confirm_msg: "Pedido pagado por el cliente {basket_id}.",
  },

  /** {@see BPosDeviceBarcodeScanner**/
  barcode_scanner: {
    wifi_pass: "Tu contraseña wifi",
    message: "Ingrese la contraseña de su enrutador WiFi y escanee el código QR.",
    wifi_ssid: "SSID wifi",
    ssid_message: "Ingrese el nombre de su red Wi-Fi (SSID).",
  },

  /** {@see PosDeviceTypes**/
  pos_devices: {
    Scanner: "Escáner de código de barras",
    Scanner_desc:
      "Para usar el escáner de código de barras, debe ingresar el código SKU del producto correctamente en la configuración del producto.",
    Printer: "Impresora",
    Printer_desc:
      "Imprima el recibo de sus clientes conectándose a una impresora de recibos.",
    CustomerView: "Vista del cliente",
    CustomerView_desc:
      "Esta página le permite mostrar los detalles del pedido a sus clientes.",
    CardReader: "Lector de tarjetas",
    CardReader_desc: "Dispositivo lector de tarjetas para pago contra reembolso por parte de sus clientes.",
    ChipReader: "Lector de chips",
    ChipReader_desc: "Lector de etiquetas NFC para agregar artículos al carrito usando etiquetas.",
  },
  /** {@see BPagePosDevices**/
  pos_register_devices: {
    delete_dialog: {
      title: "Retire el dispositivo",
      message: "¿Estás seguro de eliminar este dispositivo de tu perfil de POS?",
      action: "Sí, eliminar ahora",
    },
  },

  /** {@see BPageOrderPos**/
  pos_process_center: {
    title: "Centro de procesamiento de pedidos POS",
    menu: {
      label: "Etiqueta del paquete",
      receipt: "Recibo",
      back: "Atrás",
      timeline: "Cronología",
      order: "Pedido",
    },
  },
  /** {@see BPagePosPanel**/
  pos: {
    name: "POS",
    message:
      "Tenga su punto de venta en línea sin costo de instalación, ejecútelo en cualquier teléfono inteligente, tableta y PC, o cree pedidos manualmente.",
    add_customer: "Agregar un cliente",
    set_delivery: "Establecer dirección de entrega",
    add_giftcards: "Agregar tarjeta de regalo",
    add_discount_code: "Agregar código de descuento",
    add_coupon: "Agregar cupón",
    set_campaign: "Establecer campaña",
    select_buyer: "¡Seleccione comprador!",
    send_to_pos: "Enviar a máquina lectora de tarjetas",
    print_receipt: "Imprima el recibo",
    confirm_cash_payment: "Confirmar pago en efectivo",
    payment_cod: {
      title: "Pago contra reembolso",
      message:
        "El importe de este pedido se abonará en el momento de la entrega. Después de recibir el importe por parte del comprador, debe confirmar el pago para completar el pedido en el sistema.",
    },
    payment_online: {
      title: "Seleccione el método de pago en línea",
      message:
        "Al seleccionar las siguientes opciones, se creará un enlace de pago y se enviará al comprador. Al pagar este enlace, el estado del pedido cambiará al modo pago. El enlace de pago se generará escaneando el código QR en la pantalla del cliente, SMS o correo electrónico. Para activar cualquier canal para enviar un enlace, haga clic en esa opción y luego presione el botón para enviar un recibo al comprador.",
    },
    notifications: {
      success_pay: "Pago del pedido completado.",
      success_order:
        "Pedido creado con éxito y esperando que el cliente lo pague.",
    },
    payment_dialog: {
      check_pay_now: "Comprobar manualmente el pago",
      close_action: "Cerrar diálogo. No quiero esperar el pago del cliente",
      go_to_order: "Ir a la página de pedido",
      paid_by_gift_card_msg:
        "¡El monto total del pedido se retiró de las tarjetas de regalo! El comprador no necesita pagar más.",
      cod_msg: "El cliente pagará al recibir el pedido.",
      online_msg: "Pida al cliente que escanee el código QR en la pantalla del cliente.",
    },
  },

  /** {@see BPageShopProductsImporter**/
  exporter: {
    title: "Exportar datos",
    subtitle:
      "¡Tus datos te pertenecen! Puede descargar la información de su empresa en el formato estándar en cualquier momento. Sin embargo, respete la privacidad de sus clientes, no les envíe spam y nunca comparta su información con terceros.",

    excel:
      "Recibirás una lista de todos los {type} en la tienda junto con información completa en formato Excel.",
    csv: "Recibirás una lista de todos los {type} de la tienda junto con información completa en formato CSV. Este formato coincide con el formato estándar de Selldone para importar {type} a la tienda.",
  },
  /** {@see BPageShopProductsImporter**/
  importer: {
    category: {
      title: "Importar categorías",
      subtitle:
        "Cargue el archivo CSV de las categorías aquí. Asegúrese de seguir el formato estándar.",
    },
    product: {
      title: "Importar productos",
      subtitle:
        "Cargue el archivo CSV de productos aquí. Asegúrese de seguir el formato estándar.",
    },
    product_images: {
      title: "Importar imágenes",
      subtitle:
        "Recibir información de la imagen lleva mucho tiempo. Asegúrese de respetar los derechos de autor al importar imágenes.",
    },
    inventory: {
      title: "Inventario de actualización masiva",
      subtitle:
        "Cargue el archivo CSV del inventario aquí. Asegúrese de seguir el formato estándar exportando primero el archivo CSV y luego editándolo.",
    },

    back_to_products: "Volver a la lista de productos",
    back_to_categories: "Volver a la lista de categorías",
    back_to_inventory: "Volver a la lista de inventario",

    step_select_file: "Seleccionar archivo CSV",
    step_send_to_server: "enviar al servidor",
    step_view_result: "Ver resultado",
    step_view_que: "Ver lista de espera",
    send_to_server_action: "enviar al servidor",

    shop_license: "Licencia de tienda",
    max_items_limit: "Límite máximo de artículos",
    total_items: "Articulos totales",

    /** {@see BShopCustomerImporter**/
    customer: {
      title: "Importar clientes",
      subtitle:
        "Cargue archivos CSV de clientes aquí. Asegúrese de seguir el formato estándar y también debe seguir las reglas de privacidad.",
    },

    /**
     * @see BVendorsImporter
     */
    vendor: {
      title: "Importar Vendedores",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
      checklist: {
        title: "Título",
        subtitle: "Subtítulo",
        sample_files: "Opción",
        valid_vendor_name_needed:
          "<b></b><b></b><i></i><i></i> Configura y gestiona esta opción para tu tienda.",
        assign_user_after_import:
          "Configura y gestiona esta opción para tu tienda.",
      },
      need_kyc_alert:
        "Configura y gestiona esta opción para tu tienda.",
      back_to_vendors_list: "Volver a la lista de vendedores",
    },
  },

  /**
   * @see BPageMarketplaceProducts
   */
  marketplace_products: {
    title: "Vendedor Productos",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
    filter_vendor: {
      placeholder: "Filtro by Vendedor...",
    },
    filter_status: {
      placeholder: "Filtro by Estado...",
    },
  },

  /**
   * @see BPageMarketplaceRequests
   */
  marketplace_requests: {
    open_vendors_panel: "Opción",
    title: "Título",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
  },
  /**
   * @see BPageMarketplaceSetting
   */
  marketplace_setting: {
    marketplace: {
      title: "Mercado",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    distribution_model: {
      title: "Título",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    access: {
      title: "Acceso de vendedor",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    need_enable_shipping_for_vendors_tips:
      "Configura y gestiona esta opción para tu tienda.",
    transportation_available_tooltip: "Opción",
    transportation_not_available_tooltip:
      "Configura y gestiona esta opción para tu tienda.",
    panel: {
      title: "Panel del vendedor",
      subtitle: "Configura y gestiona esta opción para tu tienda.",
    },
    documents: {
      title: "Documentos",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
      add_document_action: "Añadir Documento Acción",
    },
    inputs: {
      enable: {
        false_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
      },
      product: {
        label: "Agregar nuevo producto",
        true_title: "Sí Título",
        false_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
      },
      need_verify: {
        label: "Opción",
        false_description: "No Descripción",
        false_title: "No Verificación Obligatorio",
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_title: "Verificación Obligatorio",
      },
      category: {
        label: "Añadir nueva categoria",
        true_title: "Sí Título",
        false_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
      },
      shipping: {
        label: "Envío Opciones",
        true_title: "Sí Título",
        false_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
      },
      hidden_customer: {
        label: "Opción",
        true_description: "Configura y gestiona esta opción para tu tienda.",
        false_description:
          "Configura y gestiona esta opción para tu tienda.",
      },
      multi: {
        false_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_title: "Sí Título",
        false_title: "No Título",
      },

      listing: {
        label: "Opción",
        true_description: "Configura y gestiona esta opción para tu tienda.",
        false_description: "Configura y gestiona esta opción para tu tienda.",
        requires_listing_active_text:
          "Configura y gestiona esta opción para tu tienda.",
        requires_listing_active_button: "Abrir Canal Listado Ajustes",
      },



    },
    notifications: {
      update_success: "Actualizar Éxito",
    },
    add_document_dialog: {
      title: "Título",
      type: {
        title: "Tipo de documento",
        subtitle:
          "Configura y gestiona esta opción para tu tienda.",
      },
      guide: {
        title: "Guía",
        subtitle:
          "Configura y gestiona esta opción para tu tienda.",
      },
      code: {
        title: "Código de inserción",
        subtitle:
          "Configura y gestiona esta opción para tu tienda.",
      },
      link: {
        title: "Enlace externo",
        subtitle:
          "Configura y gestiona esta opción para tu tienda.",
      },
      inputs: {
        title: {
          label: "Título",
          placeholder: "Opción",
        },
        guide: {
          label: "Opción",
          placeholder:
            "Configura y gestiona esta opción para tu tienda.",
        },
        code: {
          label: "Código de inserción",
          placeholder: "Opción",
          message: "Mensaje",
        },
        url: {
          label: "URL",
          message: "Configura y gestiona esta opción para tu tienda.",
        },
      },
    },
  },

  /**
   * @see ShopMarketplaceModes
   */
  ShopMarketplaceModes: {
    Collective: {
      title: "Título",
      description:
        "Configura y gestiona esta opción para tu tienda.",
    },
    Direct: {
      title: "Título",
      description:
        "Configura y gestiona esta opción para tu tienda.",
    },
  },
  /**
   * @see VendorDocumentType
   */
  VendorDocumentType: {
    Identification: {
      title: "Título",
      description:
        "Configura y gestiona esta opción para tu tienda.",
    },
    Business: {
      title: "Título",
      description:
        "Configura y gestiona esta opción para tu tienda.",
    },
    Address: {
      title: "Dirección Verificación",
      description:
        "Configura y gestiona esta opción para tu tienda.",
    },
    Contract: {
      title: "Título",
      description:
        "Configura y gestiona esta opción para tu tienda.",
    },
    Copyright: {
      title: "Título",
      description:
        "Configura y gestiona esta opción para tu tienda.",
    },
    Privacy: {
      title: "Título",
      description:
        "Configura y gestiona esta opción para tu tienda.",
    },
    Embed: {
      title: "Título",
      description:
        "Configura y gestiona esta opción para tu tienda.",
    },
    Link: {
      title: "Enlace externo",
      description:
        "Configura y gestiona esta opción para tu tienda.",
    },
  },

  /**
   * @see BPageMarketplaceWallets
   */
  marketplace_wallets: {
    title: "Billeteras de vendedores",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
    filter_vendor: {
      placeholder: "Filtro by Vendedor...",
    },
  },

  /**
   * @see BVendorAccountTransactionsList
   */
  vendor_account_transactions: {
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
    vendor_bank: "Banco del vendedor",
    order_fee: "Pedido Comisión",
    order_refund: "Pedido Reembolso",
    reverse_fund: "Opción",
    payout: "Pago",
  },

  /**
   * @see BPageMarketplacePayouts
   */
  marketplace_payouts: {
    title: "Historial de pagos",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
    top_up_vendor_action: "Opción",
  },

  /**
   * @see BPageMarketplacePricings
   */
  marketplace_pricings: {
    title: "Planes de precios",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
    add_pricing_action: "Añadir Precios Plan",
  },

  /**
   * @see BVendorPricingAdd
   */
  vendor_pricing_add: {
    title: "Título",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
    delete: {
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
      remove_pricing_action: "Quitar Precios Acción",
    },
    inputs: {
      title: {
        placeholder: "Opción",
      },
      description: {
        placeholder: "Opción",
      },
      accept_delete: {
        true_description: "Sí Descripción",
        true_title: "Sí Título",
      },
    },
  },

  /**
   * @see BVendorPayoutAdd
   */
  vendor_payout_add: {
    vendor: {
      title: "Vendedor",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    vendor_wallet: "Vendedor Billetera",
    vendor_bank_account: "Vendedor Banco Cuenta",
    with_balance_tooltip:
      "Configura y gestiona esta opción para tu tienda.",
    with_balance: "Opción",
    without_balance: "Opción",
    bank_transfer: {
      title: "Transferencia bancaria",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    vendor_bank: "Banco del vendedor",
    gateway_in_debug_mode_warning:
      "Configura y gestiona esta opción para tu tienda.",
    payment: {
      title: "Pago",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    history: {
      title: "Historia",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    refund: {
      title: "Reembolso",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    inputs: {
      vendor: {
        placeholder: "Seleccionar a Vendedor...",
      },
      note: {
        placeholder:
          "Configura y gestiona esta opción para tu tienda.",
      },
      accept_refund: {
        true_description: "Sí Descripción",
        true_title: "Cancelar & Reembolso Pago",
      },
    },
    notifications: {
      reverse_fund_success: {
        title: "Título",
        message:
          "Configura y gestiona esta opción para tu tienda.",
      },
      payout_success: {
        title: "Pago",
        message:
          "Configura y gestiona esta opción para tu tienda.",
      },
    },
  },

  /**
   * @see BShopQuotaImporter
   */
  quota_importer: {
    quota: "Opción",
    max_batch_msg: "Configura y gestiona esta opción para tu tienda.",
    max_daily_limit_msg: "Configura y gestiona esta opción para tu tienda.",
    extra_daily_limit_msg: "Configura y gestiona esta opción para tu tienda.",
    add_items_today_msg: "Opción",
    file_statistic_msg: "Opción",
    used_quota: "Opción",
  },

  /** {@see BPageShopMarketingCampaign**/
  campaigns: {
    title: "Campañas",
    subtitle:
      "Cree campañas, enlaces rastreables y vea información confiable y precisa en un solo lugar. Te ayudamos a tomar mejores decisiones basadas en datos.",
    add_action: "Agregar nueva campaña",
    empty_message: "¡Crea tu primera campaña ahora!",
    delete: {
      title: "Eliminar campaña",
      message: "¿Está seguro de eliminar esta campaña y todos los datos?",
      action: "Sí, eliminar ahora",
    },
  },

  landing_categories: {
    raw: "Plantillas sin procesar",
    all: "Todas las plantillas",

    marketing: "Mercadeo y Anuncios",
    product: "Introducción del producto",
    health: "salud y estado fisico",
    food: "Alimentos y frutas",
    house: "Bienes raíces y casa",
    device: "máquina y dispositivo",
    car: "Coche",
    software: "Opción",
    clothing: "Ropa y Zapatos",
    jewellery: "Joyas",
  },

  /** {@see BPageShopSettingTheme**/
  shop_theme: {
    theme_colors: "colores del tema",
    theme_colors_description:
      "Configura y gestiona esta opción para tu tienda.",
    products_view_mode: "Vista de la lista de compras",
    products_view_mode_desc:
      "Puede ajustar el modo de visualización de los productos en su tienda según el tamaño de la pantalla. Este modo se considerará por defecto y no se aplicará si el usuario cambia el modo de visualización.",

    tabs: {
      vendor_page: "Vendedor Página",
    },

    color_light: "Color primario",
    color_dark: "color oscuro primario",
    color_deep_dark: "color oscuro profundo",
    color_info: "Enlaces",
    light_checkout: "Tema de pago ligero",
    light_header: "Encabezado de luz",
    light_footer: "Pie de página ligero",
    light_filter: "Tema de filtro de categoría",
    checkout_color: "Opción",

    typography: "Tipografía",
    header: "Encabezamiento",
    footer: "Opción",
    custom_code: "Código personalizado",
    custom_css: "CSS personalizado",
    custom_variants: "variantes",

    wrap_product_title: {
      title: "Título",
      subtitle: "Configura y gestiona esta opción para tu tienda.",
    },

    animation: {
      title: "Título",
      static: {
        false_title: "No Título",
        false_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_title: "Estático",
        true_description: "Sí Descripción",
      },
    },

    quick_actions: {
      title: "Acciones rápidas",
      hover: {
        false_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_title: "Sí Título",
      },
    },
    filter_products: {
      title: "Filtro Productos",
      only_available: {
        false_description: "Configura y gestiona esta opción para tu tienda.",
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_title: "Disponible Productos",
        false_title: "Todos los productos",
      },
    },
    filter_categories: {
      title: "Filtro Categorías",
      hide_empty_folders: {
        false_description: "No Descripción",
        false_title: "Mostrar todas las categorías",
        true_title: "Sí Título",
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
      },
    },

    product_page: {
      title: "Página de producto",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
      buy_button_color: "Opción",
      smart_price: {
        title: "Título",
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
      },
      reverse_currency: {
        title: "Título",
        false_title: "Modo normal",
        true_title: "Sí Título",
        false_description:
          "Configura y gestiona esta opción para tu tienda.",
        true_description:
          "Configura y gestiona esta opción para tu tienda.",
      },
      variants_selector: {
        title: "Título",
        subtitle:
          "Configura y gestiona esta opción para tu tienda.",
      },

      tabs_order: {
        title: "Pestañas Pedido",
        reset_to_default: "Restablecer valores predeterminados",
      },
    }, // end: product_page
  },

  /**
   * @see BShopThemeVendor
   */
  b_shop_theme_vendor: {
    onboarding: {
      title: "Título",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    inputs: {
      page_vendor_login: {
        label: "Opción",
        message:
          "Configura y gestiona esta opción para tu tienda.",
      },
      page_vendor_registered: {
        label: "Opción",
        message:
          "Selecciona una página personalizada para vendedores con sesión iniciada. Esta página se muestra si tu marketplace admite varios vendedores por usuario.",
      },
    },
  },

  /** @see BShopOptionsVariants **/
  b_shop_options_variants: {
    custom_variants: {
      title: "Variantes personalizadas",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
  },
  /** @see BShopThemeTypography **/
  b_shop_theme_typography: {
    main_font: {
      title: "Título",
      subtitle: "Subtítulo",
    },
    inputs: {
      font_family: {
        label: "Opción",
        message: "Mensaje",
      },
      font_res: {
        label: "Opción",
        message: "Mensaje",
      },
    },
  },

  /** @see BShopThemeHeader **/
  b_shop_theme_header: {
    logo: {
      title: "Título",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    header_title: {
      title: "Título de encabezado",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },

    inputs: {
      logo: {
        label: "Opción",
      },
      height: {
        label: "Opción",
      },
      width: {
        label: "Opción",
      },
      title: {
        label: "Título de encabezado",
        set_empty: "Opción",
      },
    },
  },

  /** @see ShopThemeVariantsMode**/
  shop_theme_variants_mode: {
    smart: {
      title: "Inteligente Modo",
      description:
        "Configura y gestiona esta opción para tu tienda.",
    },
    select: {
      title: "Seleccionar Modo",
      description:
        "Configura y gestiona esta opción para tu tienda.",
    },
  },

  /** @see BPropertySetAdd**/
  property_set_add: {
    edit_title: "Editar Propiedad Establecer",
    add_title: "Añadir conjunto de propiedades",
    config: {
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    variants: {
      title: "variantes",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },

    inputs: {
      title: {
        placeholder: "Opción",
      },
      description: {
        placeholder: "Opción",
      },
      custom_variants: {
        true_title: "Variantes personalizadas",
        false_title: "Predeterminado Variantes",
        true_description: "Sí Descripción",
        false_description: "No Descripción",
      },
    },
  },

  /** @see BPropertySetVariantRow **/
  property_set_variant_row: {
    inputs: {
      values: {
        placeholder: "Establecer Valores Establecer... (Opcional)",
        messages:
          "Configura y gestiona esta opción para tu tienda.",
      },
    },
  },

  /** {@see AppTemplates**/
  app_templates: {
    default: "Defecto",
    blue: "Océano azul",
    amber: "Ámbar",
    green: "Ecuatorial",
    red: "Vampiro",
    magenta: "Flor",
    master: "Maestría",
    black: "Lado oscuro",
  },

  /** {@see BPageAffiliateOrders**/
  affiliate_orders: {
    title: "Pedidos de socios afiliados",
    table: {
      order_price: "Total de la orden",
      order_payment: "Estado de pago del pedido",
      order_link: "Enlace de pedido",
      commission_status: "Estado de la comisión",
      commission_amount: "monto de la comisión",
      items: "Artículos",
      actions: "Comportamiento",
      create_date: "Fecha de Creación",
    },
    notifications: {
      update_success: "Estado de afiliado actualizado.",
    },
  },

  /** {@see BPageAffiliatePayments**/
  affiliate_payments: {
    title: "Pagos de socios afiliados",
    table: {
      staff: "Personal",
      amount: "Monto",
      note: "Nota",
      date: "Fecha",
    },
  },
  /** {@see BPageShuttleRoles**/
  my_roles: {
    title: "mis roles",
    message:
      "Los roles son un tipo de acceso otorgado a los empleados de una tienda. Por ejemplo, personal encargado de enviar o empacar pedidos.",
  },
  /** {@see WidgetMyRoleCard**/
  role_card: {
    complete_tasks: "tareas completadas",
    reject_tasks: "Tareas rechazadas",
    last_check: "Comprobación reciente",
  },

  /** {@see BAppConfigDialog**/
  app_config: {
    reviews: "Reseñas",
    rate_now: "Califica ahora",
    category: "Categoría",
    uninstall: "Desinstalar",
    get_app: "Obtener aplicaciones",
    public_keys: "Claves públicas",
    private_keys: "Claves privadas (seguras)",
    config: "Configuración de la aplicación",
    app_status: "Estado de la aplicación",
    app_info: "información de la aplicación",
    update_at: "Actualizacion reciente",
    visit_website: "Visita el sitio web",
    privacy: "Política de privacidad",
    installs: "Instalaciones",
    basic_profile_permission: "Información básica del perfil",
    developer: "Desarrollador",
    permissions: "permisos",
    total_comments: "Comentarios totales",
    delete_dialog: {
      title: "Desinstalar aplicación",
      message: "¿Quieres eliminar esta aplicación de tu tienda?",
      action: "Sí, Eliminar aplicación",
    },
    notifications: {
      uninstall_success: "Aplicación desinstalada con éxito.",
    },
  },

  /** {@see BPageShopChannelBots**/
  shop_bots: {
    not_set: "¡No establecido!",
    tokens: "fichas",
    webhook: "Opción",
    calls: "Llamadas",
    dialog: {
      title: "{name} Configuración del bot",
      message:
        "Un marco integral de bots para crear experiencias de compra de nivel empresarial.",
    },
  },

  /** {@see BPageShopCrmCustomers**/
  shop_customers: {
    title: "Gestión de clientes",
    subtitle:
      "Los clientes se pueden agregar a su tienda de varias maneras: manualmente, mediante una importación masiva de Excel, a través del punto de venta o mediante su tienda en línea. Cada vez que un usuario inicie sesión en su tienda, se lo registrará automáticamente como cliente.",
    add_customer_action: "Añadir nuevo cliente",

    all_customers: "Descargar todos los clientes",
    filtered_customers: "Clientes filtrados",
    dialog_chips: {
      title: "Establecer el número de fichas de cliente",
    },
    dialog_club: {
      title: "Establecer el nivel del club de clientes",
    },
  },

  /** {@see BCustomerAdd**/
  customer_add: {
    edit_title: "Editar cliente",
    add_title: "Añadir nuevo cliente",
    subtitle:
      "Para agregar un cliente a su tienda, proporcione una dirección de correo electrónico o un número de teléfono.",
    more: {
      title: "Agregar más detalles",
      subtitle: "Establecer moneda, club de clientes, segmentos, dirección y más.",
    },
    detail: {
      subtitle:
        "Mantenga un registro de la información personal de sus clientes. Respete la privacidad de sus clientes.",
    },
    preferences: {
      subtitle: "Establezca aquí la moneda de usuario predeterminada, el club de clientes y los segmentos.",
    },
    address: {
      subtitle:
        "Esta dirección se puede utilizar en el POS. El usuario no puede ver esta información.",
    },
  },

  /** {@see AppPageDashboard**/
  app_dashboard: {
    status: "Publicar estado",
    statistics: "Estadísticas",
  },
  /** {@see AppPage_Publish**/
  app_publish: {
    production_version: "Versión de producción",
    beta_version: "Versión beta",
    alpha_version: "versión alfa",
  },
  /** {@see AppPublishWidget**/
  app_publish_widget: {
    header: "Encabezado del sitio web de la tienda",
    header_code: "código de encabezado",
    admin_page: "Páginas de administración",
    name: "Nombre",
    icon: "Icono",
    url: "URL",
  },

  /** {@see AppPage_API**/
  app_api: {
    title: "Acceso API",
    revoke_api: "Revocar API",
    api_key: "Clave API",
    secret: "Llave secreta",
    client: "Cliente",
    redirect_url: "URL de redirección",
    client_name: "Nombre del cliente",
  },

  /** {@see BPageApplication**/
  app_loader_page: {
    no_ui_title: "¡Esta aplicación no tiene ninguna interfaz de usuario!",
    no_ui_desc:
      "Algunas aplicaciones no requieren una interfaz de usuario en su área de administración. Esta aplicación solo puede agregar código a la sección de encabezado del sitio web de su tienda.",
    header: "código de encabezado",
  },
  /** {@see BPageShopFinanceReport**/
  finance_report: {
    export_title: "Exportar datos financieros",
    export_sub_title:
      "Descarga los detalles financieros en un solo archivo.",
    start_input_placeholder: "Seleccione la fecha de inicio del informe",
    end_input_placeholder: "Seleccione la fecha de finalización del informe",
    download_action: "Descargar lista de finanzas",
  },

  /** {@see BPageShopSettingNotifications**/
  shop_notifications: {
    title: "Notificaciones de la tienda",
    message: "Edite la configuración y las preferencias de notificación de su tienda",
    channel: "Canal",
    status: "Estado",
    events: "Eventos",
    info: "Información",
    actions: "Comportamiento",
    connected: "Conectado",
    not_connected: "¡No conectado!",
    connect_now: "Conecte ahora",
    send_test: "Enviar datos de prueba",
    disconnect: "Desconectar",

    dialog: {
      title: "Configuración de bots",
      message:
        "Un marco de notificación integral para crear experiencias de comercio electrónico de nivel empresarial.",
      action: "¡Haga clic aquí!",
      set_config: "Establecer configuración",
    },
  },
  notification_events: {
    new_order: "🛍️ Pedido",
    payment: "💳 Pago",
    return: "📦 Regresar",
    weekly_report: "📈 Informes semanales",
  },

  /** {@see BOrderDashboardDelivery} **/
  order_delivery: {
    title: "Entrega",
    add_to_delivery_que_action: "Añadir a la cola de envío",
    in_que: "En cola de envío",
    message:
      "Después de entregar el paquete al servicio de mensajería, haga clic en el botón <b>Confirmar entrega</b> .",
    message_add_to_service:
      "Haga clic en el siguiente botón si desea enviar este paquete por un <b>servicio de entrega</b> .",
    courier_action: "Confirmacion de envio",
    courier_action_subtitle: "Mi mensajero recogerá el paquete.",

    pickup_ready_action: "Opción",
    pickup_ready_action_subtitle: "Opción",

    service_action: "Confirmación de ejecución",

    checklist: [
      "Verifique la tarjeta de identidad del mensajero.",
      "El buen empaque de los productos y la entrega oportuna pueden aumentar la tasa de retención de sus clientes.",
    ],
    manual: {
      title: "Esperando confirmación de entrega por parte del cliente.",
      action_received: "Confirmación del comprador",
      action_returned: "Entrega Devolución",

      message:
        "Nota: Si el cliente recibe el pedido, puede usar las siguientes opciones para completar el cumplimiento. Algunos servicios de envío en el sistema confirmarán la entrega automáticamente.",
    },
    auto_complete_note:
      "Después de un cierto período, el estado del pedido cambiará a entregado. Este plazo varía según el tipo de pedido y lo determina el sistema.",
    received: {
      title: "Entregado al Cliente.",
      delivered_date: "Fecha de entrega",
    },
    receiver: "Receptor",
    bill: "Recibo",

    tracking: {
      title: "Añadir código de seguimiento/URL",
      code: "Codigo de localización",
      url: "URL de seguimiento",
      message:
        "Si realizó el envío a través de un servicio que proporciona un código de seguimiento para este pedido, puede ingresar el código y el enlace de seguimiento correspondiente en esta sección. Esta información se le mostrará al cliente.",
    },
    preferred_delivery_time: "Tiempo de entrega preferido",
    manage_couriers: "Administrar mis mensajeros",
    manage_service: "Administrar servicio",

    option_deliver_by_courier: "Opción 1: Entrega por sus mensajeros.",
    option_add_to_que:
      "Opción 2: Agregar a la cola para procesar en la página de servicio de envío.",
    option_instant_shipping: "Opción 3: Envío instantáneo.",

    verify_delivery_input: {
      true_title: "Sí Título",
      true_description:
        "Confirmo que el pedido ha sido entregado al cliente.",
    },
  },

  /** {@see BShopHomeSelect} **/
  shop_home_edit: {
    title: "Configuración de la página de inicio",
    sub_title:
      "Establezca la página predeterminada de su sitio web",

    default_home: "Página de inicio predeterminada",
    default_home_placeholder: "La página de la tienda es la página de inicio del sitio web",
  },
  /**
   * @see OReferralBank
   */
  referral_bank: {
    title: "Panel de referencia",
    subtitle:
      "Si lo solicita, la comisión se abonará en la cuenta bancaria que usted indique. Indique aquí sus datos bancarios.",
    no_bank_info: "¡Sin información bancaria!",
    actions: {
      edit_my_bank_info: "Editar mi información bancaria",
    },
    bank_dialog: {
      title: "Mis datos bancarios",
      info: {
        title: "Banco",
        subtitle:
          "Ingrese aquí su información bancaria. Utilizaremos esta información para transferir fondos. Asegúrese de que la cuenta bancaria esté a su nombre o a nombre de su empresa, según corresponda.",
      },
      inputs: {
        name: {
          label: "Nombre del banco",
          message: "El nombre completo del banco donde está abierta la cuenta.",
        },
        holder_name: {
          label: "Nombre del titular de la cuenta",
          message:
            "El nombre completo de la persona o entidad que posee la cuenta.",
        },
        account_number: {
          label: "Número de cuenta",
          message:
            "El número único asociado con la cuenta bancaria específica.",
        },
        routing_number: {
          label: "Número de ruta (EE. UU.) o código de clasificación (Reino Unido)",
          message:
            "Un número que identifica la sucursal bancaria específica (se utilizan términos diferentes en distintos países).",
        },
        swift: {
          label: "Código SWIFT/BIC",
          message:
            "Un código internacional utilizado para identificar bancos a nivel mundial, especialmente para transferencias internacionales.",
        },
        iban: {
          label: "IBAN (Número de cuenta bancaria internacional)",
          message:
            "Utilizado principalmente en Europa, el IBAN es un sistema acordado internacionalmente para identificar cuentas bancarias a través de fronteras nacionales.",
        },
        contact: {
          label: "Información del contacto",
          message: "Número de teléfono o dirección de correo electrónico asociada a la cuenta.",
        },
        note: {
          label: "Nota",
          message: "Nota adicional",
        },
      },
    },
    notifications: {
      save: {
        message: "Su información bancaria se ha actualizado correctamente.",
      },
    },
  },

  /**
   * @see OReferralTier
   */
  referral_tier: {
    message:
      "De todas las tarifas de servicios, suscripciones y otros pagos realizados por sus referidos.",
  },

  /**
   * @see ReferralTiers
   */
  ReferralTiers: {
    Bronze: {
      title: "Nivel Bronce",
      description:
        "Estás en el nivel Bronce. Has ganado una comisión del 2 % de tus referidos.",
    },
    Silver: {
      title: "Nivel Plata",
      description:
        "Estás en el nivel Plata. Has ganado una comisión del 4 % de tus referidos.",
    },
    Gold: {
      title: "Nivel Oro",
      description:
        "Estás en el nivel Gold. Has ganado una comisión del 6 % de tus referidos.",
    },
    Platinum: {
      title: "Nivel Platino",
      description:
        "Estás en el nivel Platino. Has ganado una comisión del 8 % de tus referidos.",
    },
    Diamond: {
      title: "Nivel Diamante",
      description:
        "Estás en el nivel Diamante. Has ganado una comisión del 10 % de tus referidos.",
    },
  },

  /**
   * @see OPageMonetize
   */
  page_monetize: {
    title: "Monetizar",
    subtitle: "Distribuir el acceso a oportunidades de negocio.",
  },

  /** {@see OPageMonetizeReferral} **/
  selldone_referral_page: {
    referral_link: "Enlace de referencia",
    registered: "Registrado",
    accepted: "Aceptado",
    bank: "Banco",
    bank_title: "Información bancaria para retiro",
    new_users: "Usuarios nuevos",
    performance: "Actuación",
    credit_mode: "modo de crédito",
    get_stickers: "Obtenga el código Html de la etiqueta para copiar y pegar",
    click_copy_sticker_code: "Haga clic en la insignia para copiar el código html.",
  },
  /** {@see OReferralTransactions} **/
  selldone_referral_payment: {
    title: "Pagos de referencia",
    subtitle:
      "Es la lista de transacciones de retiro. Cuando transfieras fondos desde la billetera de referencia a tu cuenta bancaria o a tu billetera Selldone, aparecerán aquí.",

    officer: "Oficial",
    amount: "Monto de la transacción",
    note: "Nota",
    date: "Fecha",
  },

  /** {@see BGatewayCard} **/
  widget_shop_gateway: {
    link_account_caution:
      "¡Vincule una cuenta ({currency}) a su tienda! Haga clic aquí..",
  },

  /** {@see BProductOrderSalesPerformance} **/
  product_sell_widget: {
    title: "Desempeño de ventas de productos",
  },

  /** {@see BOrderDashboardDropshippingFulfillment} **/
  fulfilment_order_widget: {
    title: "Cumplimiento de envío directo",
    check_action: "Aceptar envío directo",
    uncheck_action: "Orden confirmada",
    pay_action: "Pagar el costo de los artículos..",
    pay_completed: "Confirmación de pago",
    list_of_items: "Reventa de artículos",

    checklist: [
      "Paga la cantidad de productos que vendes indirectamente al vendedor original.",
      "Puedes pagar y liquidar el coste de los productos al proveedor de forma conjunta en el apartado de contabilidad > Dropshipping de la tienda.",
      "Después del pago, el proveedor recibirá su pedido y lo enviará directamente al comprador después de la preparación.",
    ],
    message:
      "Después de pagar la tarifa del pedido al proveedor, vea el progreso del envío del pedido en esta sección.",
  },

  /** {@see BPageWholesaler} **/
  drop_shipping: {
    menu: {
      dashboard: "Panel",
      orders: "Pedidos",
      inventory: "Inventario",
      shops: "revendedores",
      requests: "Peticiones",
    },
    drop_shipping_charge: "Cargo por envío directo",
  },

  /** {@see DropshipRequestStatus} **/
  dropship_request_status: {
    PENDING: "Pendiente",
    ACCEPT: "Aceptar",
    REJECT: "Rechazar",
  },

  /** {@see BPageWholesalerShop} **/
  dropshipping_reseller_page: {
    menu: {
      dashboard: "Panel",
      orders: "Pedidos",
      wallet: "Cartera",
    },
  },

  /** {@see BPageWholesalerShopDashboard} **/
  dropshipping_reseller_dashboard: {
    title: "Panel de revendedor",
  },

  /** {@see BPageWholesalerShopOrders} **/
  dropshipping_reseller_orders: {
    title: "pedidos de revendedor",
  },

  /** {@see BPageWholesalerShopWallet} **/
  dropshipping_reseller_wallet: {
    title: "billetera de revendedor",
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Confirmación de pago",
      payment_success: "Pago completado.",
      buy_title: "Comprar",
      pay_by_giftcards: "Su pedido fue pagado con una tarjeta de regalo.",
      free_order: "Tu pedido es gratis.",
      pay_by_cod: "Su pedido ha sido registrado como pago contra reembolso.",
      pay_by_dir:
        "Su pedido ha sido registrado como pago directo, complete el pago y cargue el recibo en la página de su pedido.",

      pay_title: "Pago",
      qr_code_payment: "Código QR de pago creado.",
      connecting_to_online_gateway: "Conexión a la pasarela de pago en línea.",
    },
  },

  /** @see DropShippingAccountCharges **/
  dropship_charges: {
    notifications: {
      pay_confirm_message: "Se confirma el pago.<br> Fecha: {payment_at}",
      pay_fail_title: "No pagado",
      pay_fail_message: "¡El pago no puede ser verificado!",
    },
  },

  /** @see BPageShopFinanceResellerFulfillment **/
  dropship_checkout: {
    pay_dialog: {
      title: "Pago de pedidos de revendedor",
      balance: "el saldo de tu cuenta",
      total_cost: "Costo total de pedidos",
      need_charge: "necesita cargar",
      no_account_cation: "¡No tienes cuenta! Llamar al mayorista.",
      orders: "Pedidos",
    },
    notifications: {
      success_pay:
        "Su pago para estos pedidos confirmado y completado con éxito.",
    },
  },
  /** @see BPageShopFinanceResellerWallets **/
  dropship_accounts: {
    charge_account: "Cuenta de cargo",
    charge_dialog: {
      title: "Cobrar cuenta de dropshipping",
      amount_input: "cargo de cuenta",
      charge_now: "Carga ahora",
    },
  },

  /** @see BPageWholesalerDashboard **/
  dropship_admin_dashboard: {
    title: "Solicitudes de revendedor",
    today_order_count: "Los pedidos de hoy cuentan",
    yesterday_order_count: "Los pedidos de ayer cuentan",
    total_7_days: "Pedidos totales en los últimos 7 días",
  },

  /** @see BProductAddDropshipping **/
  dropshipping_products: {
    no_shops:
      "Lo sentimos, no se encontró ninguna tienda. Habrá más tiendas en el futuro para que puedas poner sus productos en tu tienda.",
    show_all_shops: "Mostrar todas las tiendas",
    show_eligible_shops_message: "Mostrar tiendas elegibles",
    show_all_message: "Puedes ver todas las tiendas",
    current_shop: "Tienda actual",
    request_account: "Solicitar cuenta",
    request_accepted: "Petición aceptada",
    request_rejected: "Solicitud rechazada",
    request_pending: "Pedido pendiente..",
    notifications: {
      add_product: "Producto añadido a tu tienda.",
      request_access:
        "Enviamos su solicitud de acceso al mayorista con éxito.",
    },
  },

  /** @see BProductDropshippingAbstractView **/
  product_dropshipping: {
    need_re_enable:
      "Este producto ha sido cambiado por el vendedor original, estos cambios de precio han desactivado el producto en tu tienda. Revisa los cambios y si aceptas reactivar el producto, presiona el botón de abajo.",
    need_re_enable_action: "Aceptar, aplicar cambios y activación",
    changed_value:
      "Este producto ha sido editado por el vendedor original. Verifique los cambios y si acepta aplicar los cambios a su producto, haga clic en el botón a continuación.",
    changed_value_action: "Aceptar, hacer cambios",
    parent_deleted: "Este artículo ha sido eliminado por el vendedor original.",
    parent_closed:
      "¡Este producto ha sido deshabilitado por el vendedor original! No podrá vender este producto en su tienda, pero si el vendedor original reactiva el producto, podrá reactivar este producto en su tienda.",
    notifications: {
      re_enable_success: "Este producto ha sido reactivado.",
      update_success:
        "La información de este producto se actualizó con la información del producto original.",
    },
  },

  /** @see BPageProductDropshipping **/
  product_dropshipping_admin: {
    title: "Envío directo",
    save_alert:
      "La configuración de dropshipping de este producto ha cambiado. ¿Quieres guardar los cambios?",
    reselling_message:
      "Al activar esta opción, otros vendedores podrán agregar su producto a su tienda.",
    reselling: "Habilitar envío directo",
    price_merchants: "precio para comerciantes",
    price_commission: "Comisión del comerciante (fijo)",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Esperando disponibilidad",
    inform_me_when_available: "¡Avísame cuando esté disponible!",
    pay_buy: "Pagar comprar",
    quantity: "Contar",
    quantity_in_basket: "artículos en el carrito",
    count_unit: "X",
    remove: "Remover",
    add_to_basket: "Añadir al carrito",
    book_now: "Reservar ahora",
    reserve_now: "reservar ahora",
    buy_now: "Comprar ahora",

    buy: "Comprar",
    notifications: {
      inform_add_success: "Te avisaremos cuando esté disponible.",
      inform_remove_success: "Ha sido eliminado de la lista de espera.",
    },
  },
  /** @see SProductOverview **/
  product_info: {
    fake: "Falso",
    action: "Subasta",
    compare_limit: "límite de 10 artículos",
    compare_add: "Añadir a comparar",
    compare_be_in_list: "En la lista de comparación",

    type: "Tipo",
    brand: "Marca",
    category: "Categoría",
    discount: "Descuento",
    track_price: "Seguimiento del precio",
    waiting_for_auction: "¿Esperando subasta?",
    inform_auction: "Avisarme cuando subasta",
    return_in_days: "{days} Días Garantía Devolución",
    support24h7: "Soporte 24 horas 7 días",
    support_normal: "Soporte de horas de trabajo",
    original_guarantee: "Garantía original",
    cod_payment: "Soporte contra reembolso",

    pros: "ventajas",
    cons: "Contras",

    external_link: "Lee mas",
    notifications: {
      congratulation: "Felicidades",
      waiting_list_add_success:
        "Te avisaremos cuando este producto sea subastado.",
      waiting_list_delete_success: "Saliste de la lista de espera de la subasta.",
    },

    offer_message: "Compre {min_quantity} Obtenga un {percent}% de descuento en estos artículos",
    up_to: "Hasta {per_order}x por pedido",
    get_free: "LIBERARSE",
    get_off: "OBTENGA {percent}% DE DESCUENTO",
  },

  /** @see SStyler **/
  styler: {
    size_class: "Tamaño y clase",
    delete_bg: "Eliminar imagen de fondo",
    bg_color: "Color de fondo",
    section_style: "Establecer estilo de sección",
    link: "Establecer enlace",
    show_products: "Gestión de listas de productos/categorías",
    show_product: "Seleccionar producto",
    delete_section: "Eliminar sección",
    text_color: "Color de texto",
    tex_align: "Alineación del texto",
    text_style: "Estilo de texto",
    bg_image: "Imagen de fondo",

    product: {
      title: "Seleccionar producto",
    },

    /** @see SPageProductsFilter **/
    products: {
      title: "Gestión de listas de productos y categorías",
      sort_options: "Seleccione la configuración de Ordenar y Ver",
      item_types: "Mostrar solo productos / categorías",
      product_only: "Solo productos",
      category_only: "Solo categorías",
      no_category: "No hay ninguna categoría en su tienda.",
      limit: "límite de productos",
      limit_message: "Ingrese los recuentos de resultados de productos",
      select_categories: "Seleccionar categorías disponibles",
      categories_limit: "Límite de categorías",
      categories_limit_msg:
        "Introduzca el número máximo de categorías. Establecer cero para ningún límite.",
    },
  },

  /** @see BPageShopCrmChat **/
  shop_contacts: {
    popup: "Habilitar soporte emergente",
    popup_message:
      "Al activar esta opción, la clave de soporte se verá en la parte inferior derecha de tu tienda.",
  },

  /** @see BPagePopup **/
  popup_page: {
    preview: "Ver ventana emergente en vivo",

    menu: {
      design: "Diseño",
      appearance: "Apariencia",
      filter: "Filtrar",
      setting: "Entorno",
    },
    notifications: {
      save: "Ventana emergente guardada con éxito.",
      edit: "Ventana emergente actualizada con éxito.",
    },
  },
  /** @see LMenuLeftPopupAppearance **/
  popup_appearance: {
    position: "Posición",
    position_desc:
      "Especifique la ubicación de visualización de esta notificación en la página.",
    width: "Ancho",
    width_desc: "Puede establecer el ancho de página máximo.",
    height: "Altura",
    height_desc: "Puede establecer la altura máxima de la página.",
    radius: "Radio de esquina",
    radius_desc:
      "En esta sección puede establecer el radio de curvatura de las esquinas de la notificación.",
    shadow: "Sombra",
    shadow_desc: "¿Quieres que la ventana emergente esté sombreada?",
    delay: "Mostrar retraso",
    delay_desc:
      "Una vez que el usuario ingrese a su tienda, luego de transcurrido este tiempo, se le mostrará una notificación al usuario.",
    hide: "Ocultar retraso",
    hide_desc:
      "Puedes configurar que la notificación se cierre automáticamente unos segundos después del espectáculo. Un valor de 0 significa que la notificación no se cerrará automáticamente.",
    transition: "Animación emergente",
  },

  /** @see BPagePopupFilter **/
  popup_filter: {
    registered: "Requisito de membresía e inicio de sesión",
    registered_desc:
      "Puede optar por mostrar esta notificación solo a los usuarios o invitados de la tienda.",
    only_guests: "solo invitados",
    only_users: "Solo usuarios registrados",
    purchased: "Historial de compras",
    purchased_desc:
      "Puede optar por mostrar esta notificación solo a los usuarios que ya han comprado o a los que aún no han comprado.",
    no_purchase: "No hay compra todavía",
    yes_purchase: "Comprado antes",
    sex: "Género",
    sex_desc:
      "¿Quieres que esta notificación se muestre solo a usuarios de un género específico?",
    age: "Edad mínima",
    age_desc:
      "Si se ingresa algún valor mayor a 6, el usuario debe estar logueado y debe haber ingresado su fecha de nacimiento.",
    levels: "Niveles del club de clientes",
    levels_desc:
      "Si el usuario tiene uno de los niveles seleccionados a continuación, se le mostrará esta notificación.",
    countries: "Restricciones de ubicación",
    countries_desc:
      "¿Quieres que esta notificación se muestre solo a los usuarios que vienen de un país específico?",
  },

  /** @see BPagePopupSetting **/
  popup_setting: {
    published: "Estado publicado",
    repeat: "Repetir",
    repeat_msg:
      "¿Desea que esta notificación se muestre al usuario más de una vez?",
    intervals: "Tiempo de duración de la pantalla emergente",
    intervals_msg:
      "Debe haber transcurrido el tiempo mínimo entre la visualización de notificaciones a un usuario.",
    designer_zone: "Zona de diseño",
    title: "título emergente",
    note: "Nota del diseñador",
    image: "Imagen de portada",
    delete: {
      title: "Borrar",
      sub_title:
        "Una vez que eliminas una ventana emergente, no hay retorno. Por favor, esté seguro.",
      action: "Eliminar esta ventana emergente",
    },
    notifications: {
      delete: "Ventana emergente eliminada.",
    },
  },

  /**
   *  {@see BPageShopSettingSms}
   *  {@see BShopSmsTemplateList}
   *  {@see BShopSmsTemplateEditor}
   *
   **/
  shop_sms: {
    tabs: {
      templates: "Plantillas",
      provider: "Proveedor",
    },

    manage: {
      title: "Administrar SMS",
      subtitle:
        "Puedes ver el contenido de los mensajes de texto enviados por tu tienda aquí. Debido a la limitación en el registro de los patrones de validación en el servicio de mensajería, por el momento no es posible personalizar los mensajes de texto.",
    },

    template: {
      title: "Plantillas",
      valid_message: "Puedes crear mensajes SMS personalizados.",
      provider_not_enable_message: "¡El proveedor de SMS no está habilitado!",
      need_custom_provider_message:
        "Los mensajes SMS personalizados solo funcionan si configura un proveedor personalizado.",
      add_new: "Agregar nuevo",
      disable_reason: {
        set_provider: "¡Configura tu proveedor primero!",
        provider_is_disabled: "¡El proveedor está deshabilitado!",
        otp: "OTP - ¡Ninguno personalizable!",
        select_another_provider: "Seleccione otro proveedor.",
      },
      enable_only_filter: "Mostrar solo habilitado",

      text_template_not_supported_msg:
        "Su proveedor no admite mensajes de texto simple.",
      structure_template_not_supported_msg:
        "Su proveedor no admite mensajes estructurales.",

      structured_data: "Datos estructurados",

      menu: {
        reset_error: "Restablecer errores",
        send_test: "Enviar mensaje de prueba",
      },
    },
    template_edit: {
      title_add: "Agregar nueva plantilla de mensaje",
      title_edit: "Editar plantilla de mensaje",
      config: {
        title: "Configuración del mensaje",
        subtitle:
          "Puede crear una plantilla para el mensaje SMS en el sitio web de su proveedor de SMS y luego especificar aquí su código y estructura de datos. Enviaremos esta información a su proveedor, donde se generará el mensaje SMS real.",
        code: "Código",
        language_msg: "Déjelo vacío para establecerlo como predeterminado.",
        enable_msg: "Esta plantilla se utilizará para crear mensajes.",
      },
      text: {
        title: "Texto simple",
        subtitle:
          "Introduzca aquí un mensaje SMS personalizado. Los valores dinámicos se sustituirán por sus valores reales antes de enviarse al usuario.",
        message: "Mensaje",
        reset_to_default: "Restablecen a los predeterminados",

        auto_fill: {
          title: "Parámetros de autocompletar",
          subtitle:
            "Puede utilizar cada uno de estos parámetros en el texto y Selldone los reemplazará con el valor correspondiente.",
        },

        sample: {
          title: "Mensaje de muestra",
        },
      },
      template: {
        title: "Plantilla estructural",
        subtitle:
          "Aquí puede configurar la clave y el valor de la plantilla. El código de plantilla debe ser exactamente el que configure en su proveedor de servicios de SMS, y la <code>key</code> es lo que su proveedor desea que se envíe el código. Si el campo <code>value</code> de la plantilla está vacío, entonces <code>{code}</code> se considerará como el código de plantilla.",
        add_new_parameter: "Añadir nuevo parámetro",

        auto_fill: {
          title: "Parámetros de autocompletar",
          subtitle:
            "Puede configurar cada uno de estos parámetros como un valor y Selldone los reemplazará con el valor correspondiente. Es mejor definir los valores predeterminados como plantillas en su proveedor de SMS para simplificar. En este caso, no será necesario definir valores de parámetros aquí.",
        },
        request: {
          title: "Carga útil de muestra",
        },
        sample: {
          title: "Ejemplo de mensaje de plantilla",
          subtitle: "Puede copiar y pegar esta plantilla en su proveedor de SMS.",
        },
        add_message_action: "Agregar plantilla de mensaje",
      },
    },
  },
  /** @see SmsTemplateMode **/
  sms_template_mode: {
    text: {
      title: "Texto simple",
      desc: "El mensaje se creará a partir de un texto con parámetros de reemplazo automático y se enviará.",
    },
    template: {
      title: "Plantilla estructural",
      desc: "Se creará un objeto a partir de parámetros y se enviará al proveedor.",
    },
  },

  /** @see BShopSmsProvider **/
  shop_sms_provider: {
    title: "Proveedor de SMS personalizado",
    reset_error: "Restablecer errores",
    subtitle:
      "Configure un proveedor de servicios de SMS personalizado y personalice sus SMS de autenticación y el nombre de su empresa. El proveedor predeterminado solo envía SMS de autenticación y mensajes de información en algunos países incluidos en la lista blanca.",
    plain_text: "Texto simple",
    structural_template: "Plantilla estructural",
    errors_limit_msg:
      "Si tu servicio supera los 100 errores, se deshabilitará automáticamente. Puedes restablecer los errores para volver a habilitarlo.",

    enable_input: {
      false_description:
        "Los mensajes OTP se enviarán a través de Selldone en países seleccionados, mientras que también se enviarán otros SMS de notificación de pedidos.",
      true_description:
        "Los mensajes SMS se enviarán a través de su proveedor de servicios.",
    },
    test_input: {
      true_title: "Validar configuración",
      true_description:
        "Te enviaremos un mensaje de prueba a tu número de teléfono 📞 <b>{phone}</b> , puede cobrarte, pero podrás asegurarte de que todo funciona bien.",
    },
    sync_action: {
      title: "Comportamiento",
      subtitle:
        "Algunos servicios de SMS ofrecen servicios adicionales como campañas, marketing y otras funciones. Puedes sincronizar tus contactos o información adicional para utilizar sus funciones más rápidamente.",
      action: "Sincronizar contactos",
    },
    tokens: {
      title: "Parámetros",
      subtitle:
        "Establezca los siguientes parámetros para vincular su proveedor de servicios SMS con su tienda.",
    },
  },
  sms_messages_options: {
    all: {
      title: "Notificaciones de pedidos OPT+",
      description:
        "Se enviarán mensajes de autenticación y notificación de pedido.",
    },
    otp: {
      title: "Solo OTP",
      description: "Se enviarán mensajes de autenticación.",
    },
  },

  /** @see BPageShopSettingEmail **/
  shop_emails: {
    title: "Administrar correos electrónicos",
    sub_title:
      "Verá la lista de correos electrónicos enviados por la tienda a clientes y gerentes en esta sección. Los correos electrónicos se diseñan y crean automáticamente en función de la información que ingresó para su tienda. Asimismo, en el futuro estará disponible para el público la posibilidad de personalizar mensajes e imágenes.",

    tabs: {
      preferences: "preferencias",
      templates: "Plantillas",
      provider: "Proveedor",
    },

    preferences: {
      title: "Correos electrónicos de notificación",
    },
  },

  /**
   * @see BShopEmailProvider
   */
  shop_email_provider: {
    title: "Servidor de correo personalizado",
    subtitle:
      "Conecte su proveedor de servicios de correo para enviar correos electrónicos a través de su dominio personalizado.",
    provider: "Proveedor",
    enable_input: {
      false_description: "Sus correos electrónicos se enviarán a través de su dominio myselldone.",
      true_description: "Sus correos electrónicos se enviarán a través de su dominio de correo personalizado.",
    },
    config: {
      title: "Configuraciones",
      subtitle:
        "Para configurar su servicio de correo personalizado para su tienda, ingrese su clave API de servicio junto con otras configuraciones necesarias.",
    },
    sender: {
      title: "Desde",
      subtitle:
        "Puede configurar el nombre y la dirección de correo electrónico del remitente predeterminado, que se utilizarán para enviar correos electrónicos a sus clientes.",
    },

    inputs: {
      from: {
        label: "Desde el correo electrónico",
      },
      from_name: {
        label: "De Nombre",
      },
    },

    actions: {
      send_test_email: "Enviar un correo electrónico de prueba",
    },

    messages: {
      provider_error_limit:
        "Si tu servicio supera los 100 errores, se deshabilitará automáticamente. Puedes restablecer los errores para volver a habilitarlo.",

      encryption_ports_guide:
        "Los proveedores de correo electrónico pueden ofrecer conexiones SSL, TLS o sin cifrar según los puertos disponibles. Si la conexión genera un error, modificar el modo de cifrado podría resolver el problema. El puerto estándar de <b>TLS</b> es <b>el 587</b> y el puerto <b>de SSL</b> es <b>el 465</b> .",

      enable_receive_test:
        "Después de guardar los cambios, recibirás un correo electrónico de prueba en <b>{email}</b> . Guarda los cambios antes de enviar un correo electrónico de prueba con la nueva configuración.",
    },
  },

  /** @see InstagramViewMedias **/
  instagram: {
    title: "Ventas en Instagram",

    add_product: "Agregar nuevo producto",
    create_product: "Crear producto",
    link_box_msg:
      "Pon este enlace en tu biografía en Instagram, Telegram u otras redes sociales para que tu audiencia pueda comprar más rápido, más fácil, más y finalmente más.",
    remove_account: "Cambiar / Eliminar enlace de Instagram",
  },
  /** @see BPageShopChannelInstagram **/
  shop_channel_instagram: {
    title: "Instagram Ventas Canal",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Lista de quehaceres",
      message:
        "Escribe los títulos del trabajo que quieres hacer y hazle saber al comprador cuánto ha progresado.",
    },
    booking: {
      title: "Reserva de reserva",
      message:
        "Este pedido se procesará en un tiempo específico, el cliente ha seleccionado el período deseado, si desea realizar algún cambio en el período seleccionado, comuníqueselo al cliente.",

      selected_checkin: "Fecha de inicio de sesión del cliente seleccionado",
      selected_checkout: "Fecha de salida del cliente seleccionado",
      change_days_question:
        "¿Necesita cambiar durante los días seleccionados por el cliente?",
      show_calendar: "Mostrar calendario de pedidos",
    },
    pricing: {
      title: "Precios",
      message: "¿Cuánto cobran por este servicio?",
    },
    subscription: {
      title: "Suscripción",
      message:
        "Puede elegir el período de suscripción comprando este servicio diariamente. Informe al comprador si desea cambiar los valores predeterminados que ya ingresó.",
      duration: "Periodo de suscripción",
    },
    charge: {
      title: "Cargo",
      message:
        "Ha especificado un cargo por este artículo. Puede cambiar el monto del cargo por el artículo comprado por el cliente.",
      charge: "Cargo",
    },

    save_item: "Verificar y configurar",
    start_service: "Empieza el servicio",
    end_service: "Terminar",
  },
  /** @see BOrderDashboardServiceTasks **/
  service_tasks: {
    notification_finish: {
      title: "fin de servicio",
      message:
        "Si se hace esto, presione la tecla de confirmación para completar y cerrar el pedido.",
      action: "Confirmar y completar el pedido",
    },
  },

  /** {@see BProductEditOutputs} **/
  product_outputs: {
    outputs_form: "Estructura de información de la pantalla (salida)",

    virtual: {
      title: "Formulario de información de salida del producto",
      sub_title:
        "La información que desea mostrar al usuario después de la compra. Este formulario es especialmente aplicable para la venta de productos virtuales como la tarjeta regalo.",
    },
    service: {
      title: "Diseño de servicio",
      sub_title:
        "Primero seleccione su tipo de servicio e ingrese la información requerida. Por ejemplo, puede definir una lista de tareas pendientes o pedirle al cliente una hora de reserva o una cita.",
    },
  },

  /** {@see BProductServiceManage} **/
  service_design: {
    type: "Tipo de servicio",
    type_message:
      "Configura y gestiona esta opción para tu tienda.",
  },

  /** {@see AvocadoHomePage} **/
  avocado: {
    name: "Avocado",
    title: "Ventas rápidas, precisas y agradables en todas las redes sociales",
    message:
      "¡Una cantidad y un título es todo lo que necesita para obtener dinero de sus clientes! El dinero se acreditará directamente en su cuenta y sus clientes tendrán una experiencia de compra única.",
    new_order: "nueva factura",
    create_by_seller_title: "Crear factura",
    create_by_seller_message:
      "Si desea crear una factura con un monto determinado y enviársela a alguien, puede presionar el botón a continuación para mostrar el formulario de factura. Proporcione el enlace generado al comprador para que pague y rastree su pedido a través de él.",

    create_by_buyer_title: "forma de aguacate",
    create_by_buyer_message:
      "Al activar esta sección, se le mostrará un enlace, proporcione este enlace a sus compradores para que puedan realizar su pedido.",

    orders_list: "Lista de pedidos",
    active_mode: "Recibo de pedido activo",
    inactive_mode: "inactivo",
    active_message:
      "Al activar esta fuente, sus clientes podrán realizar un pedido del producto a través del formulario de solicitud que ve a continuación.",
    avocado_form_link_message:
      "Pon este enlace en tu biografía en Instagram, Telegram u otras redes sociales para que tu audiencia pueda comprar más rápido, más fácil y finalmente más.",
    need_address: "Obtener dirección",
    need_address_msg:
      "Si necesita obtener la ubicación y la dirección del comprador, seleccione esta opción.",
    avocado_link_message:
      "Basta con proporcionar el enlace anterior al cliente para pagar el pedido. El cliente podrá seguir el pedido a través de este enlace.",
    edit_order: "Editar orden",
    progress: "Tasa de progreso",
    buyer_link: "Enlace del comprador",
    buyer_link_message:
      "Proporcione este enlace a su comprador. El comprador podrá realizar el pago y seguimiento de su pedido a través de este enlace. Este enlace está codificado, si el enlace se proporciona a cualquier persona, podrá pagar y ver la información. Este enlace estará activo durante 60 días. Haga clic en el enlace de abajo para copiar.",
    OrderConfirm_done: "Orden confirmada.",
    OrderConfirm_message:
      "Si confirma el pago y el pedido es correcto, haga clic en el botón a continuación.",
    OrderConfirm_action: "Confirmación del pedido",
    PreparingOrder_message:
      "Si el pedido del cliente está listo para enviarse, haga clic en el botón Aceptar a continuación.",
    PreparingOrder_action: "El pedido está listo para enviar",
    finish_message:
      "Si se completa este pedido, presione el botón Finalizar para cerrar este pedido.",
    finish_action: "Procesamiento completo de pedidos",
    finish_dialog: {
      title: "completar el pedido",
      message: "¿Se ha completado el pedido y está seguro de que desea cerrarlo?",
      action: "Sí, confirmar la finalización del pedido",
    },
    configuration: "Configuración de aguacate",
    delivery_price: "Costo de envío",
    edit_avocado_action: "editar informacion",
    submit_pricing_avocado_action: "Enviar el precio del pedido",
    add_avocado_action: "Crear enlace de factura",
    avocados_list: "Lista de Aguacates",
    not_pricing: "¡Este artículo no tiene precio!",

    show_all: "Mostrar todo",
    show_accepted: "Mostrar artículos confirmados",

    notifications: {
      update_success: "Aguacate actualizado con éxito.",
      add_success: "Aguacate creado con éxito.",
    },
  },

  /** {@see BDashboardShopOrdersAvocado} **/
  avocado_orders: {
    title: "Avocado",
    title_small: "Ventas en redes sociales",
    pending_orders: "Pedidos activos",
    avocado: "Pedir Aguacate",
  },
  /** {@see BAvocadoInvoice} **/
  avocado_process: {
    step1: "Precios",
    step1_msg:
      "Introduce el precio de cada artículo y marca la casilla verde. Si no es posible vender un artículo, cambie su estado a rechazado.",
    step2: "Confirmar factura",
    step2_msg:
      "Cree una factura para este pedido. Puede ingresar un título y una descripción para la factura. El importe del pedido se calcula en función del precio total de los artículos de forma automática.",
    title_input: "Título de la factura *",
    show_to_customer: "Esta información se muestra al comprador.",
    description_msg:
      "¿Quieres escribir una nota para este pedido? Esta información se mostrará al comprador.",
    price_input: "Total de la orden *",
    tax_none: "Libre de impuestos",
    tax_included: "Incluido en el precio",
    tax_add: "Agregar impuesto",
    tax_message: "Puede elegir si los impuestos están incluidos en el precio o no.",
    tax_included_messages: "El impuesto está incluido en el precio.",
    tax_add_messages: "El impuesto debe agregarse al precio final.",
    invoice: {
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
  },

  /** {@see BPageProductHyper} **/
  /** {@see BPageShopChannelHyper} **/
  hyper: {
    name: "Hiper",
    print_label:
      "Imprima la siguiente etiqueta y colóquela frente al producto",
    hyper_form_link_product_message:
      "Sus clientes podrán comprar {product} rápidamente a través de este enlace. También ingresarán al mismo enlace escaneando el código QR.",
    title: "Hiper Venta Rápida",
    message:
      "Con la ayuda del canal de ventas de Hyper Selldone, sus clientes podrán comprar productos escaneando un código QR sin necesidad de ninguna acción por su parte. Use esta forma para vender rápidamente algunos artículos en festivales, exhibiciones o ceremonias concurridas en grandes cantidades. Después de activar Hyper en esta sección, puede crear un código QR Hyper para productos físicos en la sección Gestión de productos.",
    orders_list: "Lista de hiperpedidos",
    active_mode: "Hipercanal de ventas activado",
    inactive_mode: "inactivo",
    active_message:
      "Si habilitas esta opción, en el apartado de gestión de cada producto se mostrará la posibilidad de crear los Fast-Sales-Codes.",
    hyper_form_link_message: "Vínculo de hiperpágina de su tienda",
    configuration: "Hiperconfiguraciones",
  },

  /** {@see BDashboardShopOrdersHyper} **/
  hyper_orders: {
    title: "Hiper",
    title_small: "Reporte de ventas",
    hyper: "Pedidos recibidos",
  },

  /** {@see BProductInventoryManagementFile} **/
  product_file: {
    no_file: "¡Todavía no se ha subido ningún archivo!",
    delete_dialog: {
      title: "Borrar archivo",
      message: "¿Estás seguro de eliminar este archivo?",
      action: "Sí, eliminar ahora",
    },
    notifications: {
      delete_success: "Archivo eliminado con éxito.",
    },
    drag_sort_msg: "Puede arrastrar y ordenar archivos.",
    paid_mode_msg: "Los usuarios pueden descargarlo solo después de comprar el producto.",
    free_mode_msg:
      "Los usuarios pueden descargarlo de forma gratuita. Los archivos de muestra deben tener un tamaño inferior a 50 MB.",
    has_gust_shopping_msg:
      "Los usuarios registrados e invitados pueden descargar archivos ya que las compras de invitados están habilitadas en la configuración de la tienda > flujo.",
    only_registered_shopping_msg:
      "Sólo los usuarios registrados pueden descargar archivos de muestra.",
    file_count_limit: "Límite de cantidad de archivos",
  },

  /**
   * @see BProductLocationRestrictionsList
   */
  product_location_restrictions: {
    title: "Ubicaciones disponibles",
    subtitle:
      "Si su producto o servicio solo está disponible en regiones específicas, definidas por país y códigos postales, puede designar esas ubicaciones aquí. Estas restricciones de ubicación se aplican a nivel de producto. En la página del producto, se les solicitará a los clientes que seleccionen su ubicación. Si el producto está disponible en el área elegida, podrán continuar con la compra.",

    add_location_action: "Agregar país",
    no_restriction: "Sin restricciones",
    import: {
      title: "Perfil de carga",
      subtitle: "Seleccione un perfil de ubicaciones guardadas.",
    },
    export: {
      title: "Guardar perfil",
      subtitle: "Almacene ubicaciones para uso futuro.",
    },
    has_restriction_input: {
      title: "Tiene restricción de ubicación",
      description:
        "Los clientes solo pueden comprar este producto dentro del país y código postal especificados, debido a la restricción de ubicación establecida.",
    },
    zip_pin_code: "Códigos postales/PIN",
    no_country_selected_error:
      "Incluya al menos un país junto con una lista de códigos postales. Sin esta información, este producto no estará disponible.",
    tips: "Haz clic en el botón <b>+ Agregar país</b> para comenzar a crear un nuevo conjunto de ubicaciones. Una vez que hayas terminado, puedes guardarlo haciendo clic en el <b>menú ⋮</b> de la parte superior derecha y seleccionando <b>Guardar perfil</b> .",
    need_save_message:
      "Se han modificado las configuraciones de restricción de ubicación del producto. Para conservar estos cambios, haga clic en el botón \"Guardar\" que aparece a continuación.",

    add_dialog: {
      title: "Agregar país",
      message:
        "Seleccione un país y haga clic en \"Agregar\". Esto agregará el país a la tabla, lo que le permitirá asignarle códigos postales, códigos PIN, nombres de ciudades o nombres de regiones.",
    },
    save_profile_dialog: {
      title: "Agregar perfil de ubicaciones",
      message:
        "Ingrese un nombre para guardar este conjunto de ubicaciones. Este conjunto de ubicaciones guardadas se puede aplicar a otros productos, lo que permite cargar ubicaciones rápidamente con un solo clic. Si ya existe un perfil con el nombre proporcionado, se actualizará con estos nuevos valores.",
      title_input: {
        title: "Título del perfil",
        placeholder: "Un nombre de categoría, o nombre de tienda, ...",
      },
    },
    load_profile_dialog: {
      title: "Perfil de ubicaciones de carga",
      message:
        "Puede cargar ubicaciones seleccionando una ubicación previamente guardada aquí.",

      select_input: {
        title: "Perfil de ubicación",
        placeholder: "Seleccione un perfil...",
      },
    },
  },

  /** {@see NotificationTopBar} **/
  notification_top_bar: {
    free_charge: "🎊 Cargue {amount} y obtenga {amount_total} de crédito.",
    charge_action: "Reclamación de crédito gratis",
    claim_title: "Reclama tu crédito gratis",
    claim_charge_caution:
      "Nota: No es posible convertir monedas entre sus cuentas de billetera. Por lo tanto, seleccione una cuenta que sea apropiada para la moneda cambiada en su tienda.",
    account_input: "Cuenta de depósito",
    account_msg: "El cargo se aplicará a esta cuenta.",
  },

  /** {@see BDashboardShopApplications} **/
  selldone_applications: {
    title: "¡No te quedes sin tus pedidos!",
    msg: "Administre su negocio en cualquier lugar y en cualquier momento.",
    scan_qr_code: "¡Escanéame con tu teléfono!",

    notification: {
      title: "Notificación",
      subtitle: "Recibir notificaciones de nuevos pedidos.",
    },
    order: {
      title: "Pedidos",
      subtitle: "Vea sus pedidos y gestiónelos.",
    },
    product: {
      title: "productos",
      subtitle: "Gestión de inventarios y planos de productos.",
    },
  },

  /** {@see BPageShopSettingSeo**/
  shop_seo: {
    title: "Configuración SEO",
    msg: "Avance rápido hacia el marketing en línea potenciando los canales de adquisición de clientes orgánicos.",
    auto: {
      title: "Motor SEO automático",
      msg: "Proporcione una experiencia móvil perfecta para la audiencia y los motores de búsqueda en su sitio web.",
    },

    amp: {
      title: "AMP",
      msg: "Autogeneración acelerada de páginas móviles.",
    },
  },

  /** {@see BPageShopSettingEmail} **/
  shop_preferences: {
    order: {
      title: "Pedidos",
      desc: "Si un cliente paga el pedido, se enviará a esta dirección un correo electrónico con la información del pedido.",
    },
    return: {
      title: "Devolver",
      desc: "Si el producto es devuelto por el comprador, se enviará este correo electrónico. El envío de este correo electrónico depende de su plan comprado.",
    },
    pos: {
      title: "POS",
      desc: "El informe de ventas de POS se enviará a este correo electrónico.",
    },
    avocado: {
      title: "Avocado",
      desc: "Enviar reporte diario de pedidos de Aguacate.",
    },
    accounting: {
      title: "Contabilidad",
      desc: "Almacenar informes financieros y actualizaciones.",
    },
    subscription: {
      title: "Suscripciones",
      desc: "El estado del plan comprado recientemente se alinea con las notificaciones de suscripción de inicio y finalización.",
    },
    technical: {
      title: "Técnico",
      desc: "Notificaciones técnicas sobre el estado del dominio y del servicio.",
    },
    report: {
      title: "Informes",
      desc: "Los informes semanales y mensuales se enviarán a este correo electrónico.",
    },
    review: {
      title: "Revisar",
      desc: "Si necesita confirmar un proceso en la tienda, el correo electrónico correspondiente será enviado a esta dirección. Por ejemplo, para confirmar el envío de un correo electrónico de marketing a los usuarios de la tienda.",
    },
    bulk: {
      title: "Título",
      desc: "Configura y gestiona esta opción para tu tienda.",
    },
  },

  /** {@see BPageShopSettingLanguages} **/
  shop_languages: {
    title: "Idiomas de la tienda",
    sub_title: "Instale y active los paquetes de traducción automática de la tienda.",
    message:
      "Puedes instalar hasta 10 paquetes de idiomas en tu tienda. Contáctenos si necesita instalar más paquetes.",
  },

  /** {@see SInviteFriends} **/
  invite_friends: {
    title: "¡Cuéntale sobre tu negocio al mundo!",
    msg: "Presenta Selldone a tus amigos. Recibirán un cupón de empresa de $99 cuando se registren, y usted obtendrá un cupón de inicio de $15 una vez que completen su primera transacción.",
    invite: {
      title: "Únase al sistema operativo comercial Selldone para obtener un cupón gratis de $ 99.",
      description:
        "Te invito a Selldone para que inicies tu negocio en línea con una herramienta fantástica.",
      hashtags: "comercio electrónico,constructor de sitios web",
      quot: "Construí una tienda en línea por Selldone, también puedes hacer tu negocio ahora.",
    },
  },

  /** {@see BPageShuttleShops} **/
  shops_list: {
    title: "Mis tiendas",
    message:
      "Listado de tiendas propias, tiendas permitidas y de muestra.",

    sample: {
      title: "Tiendas de muestras",
      subtitle:
        "Aquí podrá descubrir una selección de tiendas de muestra. Se le concede permiso para examinar la información disponible en estas tiendas. Sin embargo, absténgase de iniciar sesión o realizar pedidos utilizando información personal real, ya que estos datos serán accesibles al público. Si ingresa accidentalmente su información aquí, salga de la tienda y comuníquese con nosotros para obtener más ayuda.",
    },

    add_new_store: "Agregar nueva tienda",
    i_have_a_deal: "Tengo un trato",
    access: {
      title: "Invitación de acceso",
    },
  },

  /** {@see BTransportationServiceLabels} **/
  shipping: {
    warehouse_error:
      "¡Configura tu almacén primero! Esta dirección se utilizará como origen del envío.",
    errors: {
      set_origin: "Establece tu mapa de ubicación.",
      set_country: "Establece tu país.",
      set_address: "Establece tu dirección.",
      set_zip: "Establece tu código postal.",
    },
    set_warehouse: "Establecer almacén",
    pickup_location: "Lugar de recogida",
    refresh_rates: "Tasas de actualización",
    no_rate: "Sin tasa...",
    view_messages: "Ver mensajes...",
    not_set_yet: "¡Aún no configurado!",
    drop_orders_here: "Dejar pedidos aquí...",
  },

  /** {@see BPageShopBlogsCategories} **/
  blog_category: {
    title: "Categorías de blogs",
    subtitle:
      "Puedes crear un número limitado de categorías para las publicaciones de tu blog para administrarlas de manera más eficiente. Tener un límite de categorías promueve una mejor organización en tu sitio web. Cabe destacar que incluso las principales agencias de noticias mantienen un número limitado de categorías, a menudo menos de 100, para agilizar la administración y mantener un enfoque más amplio.",

    add_action: "Añadir nueva categoria",
    add_dialog: {
      title: "Categoría nueva/actualizada",
      force_edit: "Forzar ruta de edición",
      force_edit_msg: "Cambie el nombre de la categoría y actualice todos los artículos.",
      star_msg: "Las categorías destacadas tienen prioridad para mostrarse en el blog.",
      star: "miraba fijamente",
      delete_action: "Eliminar categoría",
      add_action: "añadir categoría",
      edit_action: "Editar categoria",
    },
  },
  /** {@see BPageShopBlogsTimeline} **/
  blog_timeline: {
    title: "Calendario de lanzamiento de contenido",
    subtitle:
      "Aquí se encuentra la lista de artículos programados para su publicación futura. Tiene la posibilidad de programar publicaciones de blog e incluso descripciones de productos para que se publiquen en momentos específicos.",
  },

  /** {@see BPageShopPagesAboutUs} **/
  about_us: {
    title: "Sobre nosotros página",
    subtitle:
      "Escriba un artículo sobre su empresa para mostrarlo en la página Acerca de nosotros. Esta página ayudará a tu audiencia a conocer tu marca y misión.",
  },
  /** {@see BPageShopPagesTerms} **/
  terms: {
    title: "Página de términos de servicio",
    subtitle:
      "Explique las condiciones de compra y uso de sus servicios para sus clientes.",
  },
  /** {@see BPageShopPagesPrivacy} **/
  privacy: {
    title: "Página de política de privacidad",
    subtitle:
      "Una política de privacidad es una declaración o documento legal que revela algunas o todas las formas en que una parte recopila, usa, divulga y administra un cliente o los datos de un cliente.",
  },
  /** {@see BPageShopPagesContactUs} **/
  contact_us: {
    title: "Contáctenos página",
    subtitle:
      "Escriba su información de contacto, dirección y número de teléfono para mostrar a sus clientes en la página de contacto.",
  },

  /** {@see BPageShopApplicationsMetaverse} **/
  metaverse: {
    title: "Puente Metaverso",
    subtitle:
      "Selldone proporciona %100 servicios basados en API en el espacio comercial. Los desarrolladores de juegos, cadenas de bloques y metaversos pueden usar estas potentes API para conectar empresas, clientes y servicios en el futuro del mundo del trabajo, la vida y el comercio.",
    message: "Acceso anticipado para desarrolladores de juegos",
  },

  /** {@see BProcessCenterBulkExport} **/
  orders_bulk_export: {
    title: "Asistente de pedidos",
    subtitle:
      "Exporte y descargue etiquetas para el procesamiento de pedidos en masa: ideal para manejar más de 100 pedidos diariamente.",

    timespan: {
      title: "Periodo de tiempo",
      subtitle: "Elija las fechas de inicio y finalización para realizar pedidos.",
    },
    tasks: {
      title: "Salida de tareas",
      subtitle:
        "Descargue la lista de tareas para el procesamiento de pedidos en bloque. El resultado solo contiene pedidos pagados y COD.",
      export_title: "Lista de tareas",
    },
    labels: {
      title: "Etiquetas de paquetes",
      subtitle:
        "Descargue la lista de todas las etiquetas de pedidos en el período de tiempo y el estado seleccionados. El resultado solo contiene pedidos pagados y COD.",
      export_title: "Etiquetas de caja",
    },
  },

  /** {@see BPageShopMarketingFunnel} **/
  customers_funnel: {
    title: "Clientes Demografía",
    subtitle:
      "¡Filtre y exporte los datos de sus clientes para tomar mejores decisiones y ofrecer más valor con menos marketing! ¡Respete la privacidad de sus clientes y nunca les envíe correos electrónicos masivos! Nunca comparta la información de sus clientes con servicios de terceros sin obtener el permiso de cada uno de ellos.",
  },

  /** {@see BPageAffiliatorDashboard} **/
  affiliate_pos: {
    title: "Punto de venta afiliado",
    open_pos_action: "TPV de pedidos rápidos",
    description:
      "Esta opción es adecuada para administradores de páginas de Instagram y otras redes sociales. Use Affiliate POS para recibir y agregar pedidos de clientes manualmente. Tus afiliados (o franquicia) pueden agregar nuevos pedidos en el TPV de Afiliados y cargar el comprobante de depósito.",
  },

  /** {@see BPageShopSettingFlow} **/
  shop_configuration: {
    /** {@see BShopOptionsLoginMethods} **/
    login: {
      title: "Métodos de inicio de sesión",
      subtitle: "Personaliza la forma en que los usuarios inician sesión en tu tienda.",

      tips: "Selldone <b></b> Configura y gestiona esta opción para tu tienda.",
    },

    /** {@see BShopOptionsCheckout} **/
    checkout: {
      title: "Flujo de pago",
      subtitle:
        "Personaliza el recorrido de tu cliente y el flujo de compra en tu ecommerce.",
      map: {
        title: "Mapa",
        subtitle:
          "Los usuarios deben seleccionar la ubicación de entrega en el mapa (como Uber).",
        subtitle_no_map:
          "La distancia en el cálculo del envío considera cero si la ubicación no existe en la dirección proporcionada por el cliente.",
      },
      mode: {
        title: "Punto de inicio de sesión de clientes",
        default: {
          title: "Lo antes posible (predeterminado)",
          msg: "Los usuarios inician sesión lo antes posible. (Más conversión)",
        },
        on_checkout: {
          title: "Al finalizar la compra",
          msg: "Obligar a los usuarios a iniciar sesión en el paso de pago.",
        },
        login_free: {
          title: "Inicio de sesión opcional",
          msg: "Inicio de sesión opcional después del pago del pedido.",
        },
      },

      express: {
        title: "Redirigir después de agregar al carrito",

        false: {
          title: "Modo normal",
          msg: "Permanezca en la página y continúe comprando después de hacer clic en agregar al carrito.",
        },
        true: {
          title: "modo expreso",
          msg: "Redirigir al cliente a la página de pago después de hacer clic en agregar al carrito.",
        },
      },

      shipping_address: {
        title: "Pregunta por la dirección de envío",
      },
    },

    /** {@see BShopOptionsCheckoutForm} **/
    checkout_form: {
      title: "Título",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
  },
  /** {@see CheckoutOptions} **/
  checkout_options: {
    default: {
      title: "Físico y servicio (predeterminado)",
      desc: "Solicite al cliente que ingrese una dirección en las cajas físicas y de servicio.",
    },
    physical: {
      title: "Solo físico",
      desc: "Pídale al cliente que ingrese una dirección solo en el pago físico.",
    },
    off: {
      title: "Nunca",
      desc: "Nunca pidas la dirección de envío. ⚠ Use esta opción si planea tener servicios con variantes seleccionando tipo físico para productos en lugar de tipo de servicio.",
    },
  },

  /** {@see BPageShopSettingBusinessModel} **/
  business_model: {
    title: "Configuración del modelo de negocio",
    subtitle:
      "Establezca su modelo de negocio y nosotros configuraremos su sistema operativo detrás de escena.",
  },
  business_type: {
    title: "Tipos de mercancías",
    subtitle:
      "Establece el tipo de productos que quieres vender en tu tienda. Los tipos de productos en Selldone son más que solo un tipo de productos; es más sobre el procedimiento de cumplimiento.",

    send_activation_request_to_support:
      "Envíe una solicitud de activación en un ticket de soporte.",
    require_kyc: "Propietario de negocio KYC.",
    needs_enterprise_license: "Necesita tener una licencia Enterprise.",
    marketplace_caution_message:
      "Establecer Marketplace como su modelo afecta profundamente la configuración del sistema operativo de su empresa. Por ejemplo, debe definir al menos un proveedor para cada producto con precios e inventario independientes. Los clientes no pueden comprar productos que no tienen vendedor.",
  },

  /** {@see BusinessModelView} **/
  business_model_view: {
    normal: {
      title: "Tienda normal",
      desc: "Por lo general, una PYME, una empresa doméstica o un dropshipper, que vende su producto directamente a los clientes o vende productos de mayoristas como revendedor.",
    },

    dropshipping: {
      title: "Envío directo",
      desc: "No mantenga ningún producto ni inventario: le paga a un tercero, generalmente un mayorista (como Printify, Wholesale2B, ...) o fabricante, y ellos cumplen los pedidos en segundo plano.",
    },

    wholesaler: {
      title: "Proveedor de envío directo",
      desc: "Por lo general, un mayorista o un fabricante, que envía los pedidos directamente al consumidor final. Otros comerciantes en Selldone pueden realizar envíos directos de sus productos en sus tiendas.",
    },
    marketplace: {
      title: "Mercado",
      desc: "Los mercados en línea conectan a compradores y vendedores en una plataforma propietaria y centralizada.",
    },

    franchise: {
      title: "Franquicia / Afiliado",
      desc: "Una franquicia es un método de distribución de productos o servicios que involucra a un franquiciador que establece su marca (Franquicia) o vende sus productos por su marca (Afiliado).",
    },
  },

  /** {@see BPageMarketplace} **/
  marketplace: {
    vendor_wallets: "Carteras",
    pricing_models: "Precios",
    add_vendor: "Agregar proveedor",
    requests: "Peticiones",
  },

  price_input_type: {
    title: "Tipo de entrada de precio",
    default: {
      title: "Defecto",
      desc: "Seleccione un valor como la cantidad en el carrito.",
    },
    area: {
      title: "Área",
      desc: "Ingrese el ancho y la longitud como entradas para calcular la cantidad.",
    },
    volume: {
      title: "volumen",
      desc: "Ingrese ancho, largo y alto como entradas para calcular la cantidad.",
    },
    custom: {
      title: "Personalizado (Por formulario de entrada)",
      desc: "¡No hay necesidad de cientos de variantes! Cree un formulario de cálculo de costos personalizado para productos altamente personalizables.",
    },
  },

  /** {@see BPageShuttleVendors} **/
  vendors_list: {
    title: "Mis proveedores",
    message:
      "Selldone Lista de mis propios proveedores.",
  },

  vendor_page: {},

  /** {@see BDomainsList} **/
  domains: {
    message:
      "Conecte varios dominios al sistema operativo de su empresa y adminístrelos todos en un solo lugar. Puede usar la función de múltiples dominios para crear dominios dedicados para cada parte de su sitio web, como blog y comunidad, o usar diferentes dominios para sus afiliados.",
  },

  /** {@see BNoteButton}   {@see BNoteDialog} **/
  notes: {
    add_action: "Agrega una nota para tu equipo",
    notifications: {
      success_add: "La nota se ha añadido correctamente.",
      success_delete: "La nota ha sido eliminada con éxito.",
    },
  },

  /** {@see BDashboardShopExternalServices} **/
  external_services: {
    title: "Servicios externos",
    subtitle:
      "Supervise el último estado de los servicios externos como SMS y correos electrónicos aquí.",
  },

  /** {@see BPageShopSettingQuota**/
  shop_quota: {
    title: "Cuota de uso",
    sub_title:
      "Esta es la lista de cuotas de uso para su tienda. Puede aumentar estos límites actualizando la licencia de su tienda. Si excede los límites, puede solicitarnos asignaciones de cuota diaria adicionales. Todo el uso se restablecerá diariamente.",
  },

  /** {@see WidgetAppCard} **/
  app_card: {
    category: "Categoría",
    installs: "Instalar",
    actives: "Activo",
    uninstalls: "Desinstalaciones",
    app_code: "código de aplicación",
    app_mode: "Modo de aplicación",
  },

  product_status: {
    open: {
      name: "Activo",
      title: "Activo ╏ Ventas en línea y fuera de línea",
      description: "Este producto estará disponible para pedidos en línea.",
    },
    close: {
      name: "inactivo",
      title: "Inactivo ╏ Solo ventas fuera de línea",
      description: "Este producto no estará disponible para pedidos en línea.",
    },
    pending: {
      name: "Pendiente",
      title: "Pendiente",
      description: "Requiere una revisión del mercado antes de entrar en funcionamiento.",
    },
    rejected: {
      name: "Rechazado",
      title: "Rechazado",
      description: "Este producto fue rechazado por el mercado.",
    },
    unlisted: {
      name: "No listado",
      title: "No listado",
      description:
        "Configura y gestiona esta opción para tu tienda.",
    },
  },

  /**
   * BDashboardShopFeedback
   */
  direct_feedback: {
    title: "Enviar solicitud directa",
    message:
      "Identifique las 3 principales necesidades de su empresa para prosperar y obtener ganancias en Selldone. Esta información se compartirá directamente con los fundadores y directores y se considerará cuidadosamente. También puede actualizar sus necesidades con el tiempo después del envío.",
    expand_action: "Escribe la solicitud...",
    input_label: "Su solicitud",
    to: {
      ceo: "Enviar al director ejecutivo",
      team: "Enviar al equipo",
    },
    placeholder: {
      ceo: "No hay necesidad de ser amable en absoluto, me gusta escuchar tus preguntas directas y al grano. Por ejemplo, necesito tener...",
      team: "Por favor, trate de ser amable con ellos. Por ejemplo, necesito tener...",
    },
  },

  /**
   * BInventoryFilter
   */
  inventory_filter: {
    placeholder: "Seleccionar filtro *.*",
  },
  /**
   * BVendorInput
   */
  vendor_input: {
    placeholder: "Proveedor de filtros...",
  },

  /**
   * BShopProductsImportProcessing
   */
  product_import_processing: {
    title: "Procesamiento de productos importados",
    message:
      "Estamos en proceso de importación de productos e imágenes, lo que puede tardar algún tiempo en completarse.",
  },

  /**
   * BOrderInput
   */
  order_input: {
    message:
      "La información que se muestra aquí ha sido enviada por el cliente, de acuerdo con la estructura del formulario de entrada del producto.",
  },

  /**
   * BPageConnectDashboard
   */
  shop_connect: {
    test: {
      title: "Configuración",
      subtitle: "Informe de servicio externo",
      action: "Conexión de prueba",
      last_update: "Última actualización realizada por",
    },
    service_status: {
      title: "Estado del servicio",
      syncing_message: "Sobre el proceso de sincronización...",
      action: "Sincronizar todo",
      connect_status: "Estado de conexión",
      service_status: "Estado del servicio",
      auto_confirm_enable_msg: "La confirmación automática de pedidos está habilitada.",
      auto_confirm_disable_msg:
        "La confirmación automática de pedidos no está habilitada.",
      shipping_enable_msg:
        "El costo de envío se calculará en base a la información proporcionada al momento del pago.",
    },
    detail: {
      title: "Detalle de conexión",
      auto_confirm_order: "Confirmar pedidos automáticamente",
      test_mode: "Modo de prueba",
      status: {
        subtitle: "Información general sobre el estado de la sincronización.",
      },
      sync: {
        title: "Detalle de sincronización",
        subtitle:
          "Detalles de sincronización interna. Esta información se guarda después de que finaliza con éxito un proceso de sincronización.",
        no_data: "¡No hay información de sincronización!",
      },
    },

    products: {
      title: "productos",
      subtitle:
        "Lista de productos agregados de {name}. Asegúrate de que tu producto tenga un nombre y un SKU únicos. Algunos servicios de Connect se utilizan para la migración, por lo que si tienes productos con <b>SKU</b> y <b>nombres</b> duplicados, esos productos se cambiarán.",
      action: "Obtener productos",
      syncing_message: "Sobre el proceso de sincronización...",
    },

    logs: {
      title: "Registros",
      subtitle:
        "Lista de todos los registros de los últimos 7 días. La función de registro solo es compatible con proveedores de servicios externos.",
    },

    edit: {
      title: "Añadir nueva conexión",

      service: {
        title: "Servicio",
        subtitle:
          "Seleccione la plataforma de destino, el proveedor de dropshipping o el mercado para conectarse.",
      },
      test: {
        false_title: "Sincronizar todo",
        false_desc: "Obtenga todos los productos, categorías y clientes disponibles.",
        true_title: "Limitado (recomendado para principiantes)",
        true_desc:
          "Obtén un máximo de 5 productos, categorías y clientes. Puedes activar el modo completo en Conectar > Configuración en cualquier momento.",
      },
      overwrite: {
        false_title: "No cambiar si existe",
        false_desc: "Conserve los detalles de productos y categorías existentes tal como están.",
        true_title: "Exagerar",
        true_desc:
          "Actualice la información existente del producto, variante y categoría.",
      },
      migration_tips:
        "<b>Consejos:</b> si desea probar la funcionalidad, seleccione la opción <b>Limitada</b> . Al seleccionar \"Sincronizar todo\", obtenemos todos los datos de sus servicios conectados y descargamos imágenes relacionadas, por lo que reducirá su almacenamiento gratuito. Además, eliminar muchos productos, categorías y clientes sería difícil.",
      add_action: "Conectar automáticamente a",
      order: {
        title: "Estado del pedido",
        subtitle:
          "Configure los ajustes de gestión de pedidos del servicio conectado para su tienda. Esto incluye configurar la aceptación de pedidos, habilitar la confirmación automática de pedidos (si es compatible) y configurar los cálculos de costos de envío.",
      },
      enable: {
        label: "Estado de conexión",
        true_desc: "El inventario y los pedidos se sincronizarán.",
      },
      confirm: {
        label: "Confirmar pedidos automáticamente",
        false_desc: "Debes confirmar el pedido manualmente.",
        true_desc:
          "Los pedidos con pago en vivo se aprobarán automáticamente. Los pedidos con pago de depuración no se aprobarán automáticamente.",
        tips: "Los pedidos pagados con tarjeta de regalo o COD o pasarelas de pago en el modo de depuración son excepciones y no se confirmarán automáticamente.",
      },

      shipping: {
        label: "Envío",
        tips: "Este servicio ofrece cálculo de gastos de envío, que puede habilitarse o deshabilitarse según sus preferencias. Si está habilitado, se requerirán API de cálculo de costos con servicios de terceros, lo que puede causar una demora de más de 300 ms para actualizar el precio en la página de pago.",
        false_title: "Desactivar",
        false_desc:
          "Utilice mi cálculo de costos de envío, en Tienda > Logística > Transporte para todos los productos, incluidos los importados.",
        true_title: "Calcular envío",
        true_desc:
          "Utilice la API de cálculo de tarifas de envío que ofrece este servicio.",
      },

      remove: {
        verify: "Verifico para eliminar esta conexión.",
        action: "Eliminar conexión",
      },
    },

    /**
     * BPageShopChannelConnect
     */
    list: {
      title: "Conectar sistema operativo",
      subtitle:
        "Conecte su sistema operativo empresarial a servicios externos y administre todos los canales en un mismo lugar.",
      action: "Conectar nuevos servicios",
      empty_message:
        "Olvídate de las aplicaciones y los complementos para dropshipping. Connect es el futuro de la gestión de pedidos multiplataforma.",
      auto_confirm: "Confirmación automática",
      shipping: "Envío",
      syncing_now: "¡Sincronizando ahora!",
      sync_not_started: "¡La sincronización aún no ha comenzado!",
    },
  },

  /**
   * ConnectMode
   */
  connect_mode: {
    Migration: {
      title: "Migración",
      desc: "Obtener productos, categorías y clientes. Una vez que el usuario elimine este servicio, los productos, categorías y clientes recibidos no se eliminarán.",
    },
    Dropshipping: {
      title: "Envío directo",
      desc: "Obtenga productos, categorías y pedidos. El sistema elimina productos después de que el usuario cancele el servicio.",
    },
    Marketplace: {
      title: "Mercado",
      desc: "Simplemente sincronice el inventario y reciba pedidos (los productos estarán vinculados por SKU).",
    },
    Accounting: {
      title: "Contabilidad",
      desc: "Enviar pedidos e información financiera.",
    },
    Other: {
      title: "Otro",
      desc: "Otros servicios.",
    },
  },

  /**
   * BPageShopPagesLandings
   */
  shop_landings: {
    title: "Páginas de destino",
    add_new_action: "Agregar nueva página",
    subtitle:
      "Cree páginas personalizadas distintivas y responsivas para su marca utilizando un editor en línea versátil impulsado por IA y genere contenido dinámico automáticamente al ingresar datos.",
    empty_message: "Diseña páginas personalizadas mediante arrastrar y soltar...",
  },

  /**
   * BPageShopPermissionStaff
   */
  shop_staff: {
    list: {
      title: "Gestión de personal",
      subtitle:
        "Los usuarios obtuvieron acceso al panel y a las secciones administrativas de esta tienda.",
    },
    pending: {
      title: "Pendiente",
      message: "Mostrar invitaciones pendientes.",
    },
  },

  /**
   * BPageShopCommunityComments
   */
  community_comments: {
    title: "comentarios",
    subtitle: "Esta es una lista de los comentarios de la comunidad.",
    empty_msg: "No se han creado comentarios hasta ahora...",
  },

  /**
   * BPageShopCommunityCategories
   */
  community_categories: {
    title: "categorías",
    subtitle: "Esta es una lista de las categorías de la comunidad.",
    new_category_action: "Nueva categoría",
    empty_msg: "No se han creado categorías hasta ahora...",
    filter: {
      delete: {
        title: "Eliminado",
        description: "Mostrar categorías eliminadas.",
      },
    },
  },
  /**
   * BPageShopCommunityPosts
   */
  community_posts: {
    title: "Publicaciones",
    subtitle: "Esta es una lista de las publicaciones de la comunidad.",
    filter: {
      deleted: {
        title: "Eliminado",
        description: "Mostrar publicaciones eliminadas.",
      },
      reported: {
        title: "Reportado",
        description: "Mostrar publicaciones denunciadas.",
      },
    },
    empty_msg: "No se han creado publicaciones hasta ahora...",
    menu: {
      open_post: {
        title: "Publicación abierta",
        subtitle: "Ver y editar publicaciones en la comunidad.",
      },
      spam: {
        title: "Informar y eliminar spam",
        subtitle: "Eliminar publicaciones en masa y banear usuarios.",
      },
      delete: {
        title: "Eliminar publicación",
        subtitle: "Eliminar esta publicación.",
      },
    },
  },

  /**
   * {@see BGoogleTagManager}
   */
  channel_google: {
    gtag: {
      title: "Administrador de etiquetas",
      subtitle:
        "Google Analytics permite medir el ROI de los anuncios mientras se rastrean sitios y aplicaciones de Flash, video y redes sociales. Administre las etiquetas de sitios web sin esfuerzo con las soluciones gratuitas, simples y confiables de Google Tag Manager, sin necesidad de editar códigos.",
      tag_id: {
        label: "Identificación del administrador de etiquetas de Google",
      },
    },
    shopping: {
      title: "Compras de Google",
      subtitle:
        "Las fuentes de datos indican el origen de la información de su catálogo en Google. Siga este enlace para agregar automáticamente todos los productos y categorías a Google Merchandising.",
      tips: "Puede utilizar esta herramienta para administrar anuncios de Google de forma sencilla y automática.",
      link_message: "URL de feed de productos de Google",
    },
    console: {
      title: "Consola de búsqueda",
      subtitle: `Agrega una metaetiqueta a tu página de inicio para la verificación de Google Search Console.`,
      code: {
        label: "Etiqueta Meta de verificación",
        placeholder: "De Google, por ejemplo viQg9mjdBj...",
      },
    },
    serp: {
      title: "SERP de Google y palabras clave",
      subtitle:
        "Obtenemos los datos de auditoría SEO más precisos de Google y te los presentamos de forma cómoda. Solo tienes que seguir los pasos indicados.",
    },
    serp_content: {
      title: "Conectarse a Google Search Console",
      subtitle:
        "Conecte su tienda a la consola de búsqueda y comience a explorar palabras clave, rangos y otras herramientas de SEO gratuitas en Selldone.",
      tips: {
        title:
          "Antes de vincular Selldone con Google Search Console, asegúrese de lo siguiente:",
        add_in_selldone: "Agregue, verifique y configure como principal su dominio personalizado.",
        add_in_google: `Añade y verifica <b>{domain}</b> en tu <a href="https://search.google.com/search-console" target="_blank"><b>Google Search Console</b></a>.`,
      },
      action_custom_domain: "Dominio personalizado",
      action_connect_now: "Conecte ahora",
      action_remove_connection: "Eliminar conexión",
    },
  },

  /**
   * {@see BPageShopIncentivesCoupon}
   */
  cashback: {
    add_new: "Añadir nuevo reembolso",
    title: "Programas de devolución de dinero",
    boosted: "Impulso (2x)",
    min_purchase: "Compra mínima",
    only_first_order: "Solo primer orden",
    total_cashback: "Reembolso total",
    delete_alert: {
      title: "Eliminar programa de reembolso",
      message: "¿Estás seguro de eliminar este programa de reembolso?",
      action: "Sí, eliminar ahora",
    },
    notifications: {
      delete_success: "Programa de reembolso eliminado exitosamente.",
    },
  },
  /**
   * {@see BPageCashback}
   */
  shop_cashback: {
    title: "Programa de reembolso",
    up_to: "arriba a",
    menu: {
      back: "Programas de regreso",
      dashboard: "tablero",
      orders: "Pedidos",
      edit: "Editar",
    },
    /**
     * {@see BPageCashbackDashboard}
     */
    dashboard: {
      chart_amount_buy: {
        label: "Comprar",
        y: "Importe de la compra {currency}",
      },
      chart_amount_cashback: {
        label: "Reembolso en efectivo",
        y: "Monto del reembolso {currency}",
      },
      chart_used: {
        label: "Utilizado",
        y: "Veces",
      },
    },
    /**
     * {@see BPageCashbackOrders}
     */
    orders: {
      title: "Pedidos con devolución de dinero",
      table: {
        amount_cashback: "Monto del reembolso",
        payment_status: "Estado del pago",
        date: "Fecha",
      },
    },
  },

  /**
   * {@see BCashbackAdd}
   */
  cashback_edit: {
    config: {
      subtitle: "Establezca aquí el porcentaje de chasback, el límite y su estado.",
    },
    percent_input: {
      title: "Porcentaje de reembolso",
      message: "Introduzca el porcentaje de reembolso del 1% al 20%.",
    },
    currency_input: {
      message: "El programa de devolución de dinero estará disponible sólo para esta moneda.",
    },
    limit_input: {
      title: "Límite",
      hint: "Introduzca el importe máximo de reembolso.",
      zero_message: "Introduzca 0 para obtener un reembolso ilimitado.",
    },
    duration: {
      title: "Límite de duración",
      subtitle: "Establezca la duración del programa de reembolso. Es opcional.",
    },
    start_input: {
      title: "Fecha de inicio",
      placeholder: "Seleccione fecha de inicio...",
    },
    end_input: {
      title: "Fecha de finalización",
      placeholder: "Seleccionar fecha de finalización...",
    },
    design: {
      subtitle:
        "Establezca un título y una breve descripción del programa de reembolso. Esta información se mostrará a los clientes.",
    },
    title_input: {
      title: "Título",
    },
    description_input: {
      title: "Descripción",
    },
    constraints: {
      subtitle: "Establezca las restricciones para el programa de devolución de dinero.",
    },
    min_purchase_input: {
      hint: "Ingrese el monto mínimo de compra para el programa de reembolso.",
      title: "Compra mínima",
    },
    only_first_buy_input: {
      false_desc: "El programa de devolución de dinero estará disponible para todos los pedidos.",
      true_desc:
        "El programa de devolución de dinero estará disponible solo para el primer pedido.",
      true_title: "Solo primer orden",
      false_title: "Todos los pedidos",
    },
    qualify_input: {
      false_title: "Todos los clientes",
      true_title: "Calificar clientes",
      true_msg:
        "El programa de devolución de dinero estará disponible sólo para los clientes que califiquen.",
    },
    club: {
      subtitle:
        "Establezca el club para el programa de reembolso. El programa de reembolso estará disponible solo para los clientes que estén en este club.",
    },
    cluster: {
      subtitle:
        "Al asociar un clúster con el programa de reembolso, puede administrarlo de manera más efectiva.",
    },
    notifications: {
      add: "Programa de reembolso agregado exitosamente.",
      edit: "Programa de reembolso actualizado exitosamente.",
    },
    enable_input: {
      true_msg: "El programa de reembolso está activo y los clientes pueden utilizarlo.",
      false_msg:
        "El programa de reembolso está inactivo y los clientes no pueden utilizarlo.",
    },
    boosted_input: {
      false_title: "Normal",
      true_title: "Boost (reembolso doble)",
      true_msg:
        "El programa de reembolso está en modo de refuerzo y los clientes recibirán un reembolso de 2x.",
      false_msg:
        "El programa de reembolso está en modo normal y los clientes recibirán el reembolso normal.",
    },
  },

  /**
   * @see BOrderPaymentRowPayment
   */
  row_payment: {
    actions: {
      refund: {
        title: "Pago de reembolso",
        subtitle: "Se admite reembolso parcial o total.",
      },
      delivery: {
        title: "Confirmar en el momento de la entrega",
        subtitle: "Puede confirmar manualmente la entrega para el proveedor de pagos.",
      },
    },
  },

  /**
   * @see BOrderPaymentActionsRefundDialog
   */
  payment_refund_dialog: {
    title: "Pago de reembolso",
    message:
      "Por razones de seguridad, solo los pedidos pagados dentro de los últimos 7 días son elegibles para reembolsos.",
    payment_amount: "Monto del pago",
    total_refund_amount: "Importe total reembolsado",
    can_refund: "¿Puede reembolsarse?",
    refund_amount: "Monto del reembolso",
    verify: {
      title: "Verificar reembolso",
      description:
        "Confirmo que el monto del reembolso es correcto y quiero continuar.",
    },
    action: "Reembolso ahora",
  },

  /**
   * @see BOrderPaymentActionsDeliveryDialog
   */
  payment_delivery_dialog: {
    title: "Confirmación de entrega al cliente",
    message:
      "Algunos servicios de pago requieren una confirmación de que el pedido ha sido entregado al cliente. Normalmente enviamos esta confirmación durante el paso final del procesamiento del pedido, cuando recibimos la confirmación de entrega del cliente. Sin embargo, si necesita realizar esta acción manualmente, puede hacerlo aquí.",
    verify: {
      title: "Verificar entrega",
      description:
        "Confirmo que el pedido ha sido entregado al cliente.",
    },
    action: "Confirmar ahora",
  },

  /**
   * @see BPageProductCrossSelling
   */
  product_cross_selling: {
    title: "Venta cruzada",
    add_new_actions: "Agregar nuevo producto",
    subtitle:
      "En esta sección, puede agregar y administrar productos de venta cruzada para esta página de producto. Estos productos se mostrarán como sugerencias para que los clientes los compren junto con el artículo principal. También puede establecer descuentos para alentar e incentivar compras adicionales. El sistema mostrará un máximo de 3 artículos para que el cliente los considere.",
    dialog: {
      edit_title: "Editar producto de venta cruzada",
      add_title: "Añadir nuevos productos de venta cruzada",
      target: {
        title: "Producto objetivo",
        subtitle:
          "Elija los productos que desea promocionar como opciones de venta cruzada junto con este producto.",
        select_products: "Seleccione producto(s)",
      },
      list: {
        title: "Producto objetivo",
        subtitle: "Este producto ha sido elegido para promoción de venta cruzada.",
        manage_product: "Administrar producto",
      },
      discount: {
        title: "Descuento y mensaje",
        subtitle:
          "Tiene la opción de incluir un mensaje y ofrecer un descuento para motivar a los clientes a comprar los artículos adicionales seleccionados. Estos incentivos pueden ayudar a impulsar las ventas y mejorar la experiencia de compra en general.",
        amount_input: {
          message:
            "El porcentaje de descuento se aplicará al precio del producto después de tener en cuenta todos los descuentos existentes.",
        },
        mismatch_type_warning:
          "Los descuentos no se pueden aplicar a otros tipos además de los tipos de productos principales, ya que los artículos de origen y de destino no se colocarán en cestas separadas.",
        not_support_subscription_type_warning:
          "No es posible establecer descuentos para la venta cruzada de productos de suscripción, ya que los planes de precios no se pueden ajustar de forma dinámica.",
        message_input: {
          message:
            "Cree un título atractivo y cautivador para captar la atención de los clientes.",
          placeholder:
            "Combina y ahorra: ¡completa tu look con nuestra selección cuidadosamente seleccionada!",
        },
      },
      action: {
        title: "Acción",
        subtitle:
          'Modifique aquí la acción del producto de venta cruzada. Si su producto requiere la introducción de información personalizada, como por ejemplo mediante un formulario de valoración, no seleccione "Añadir al carrito" como acción, ya que esto puede generar errores.',
      },
    },
  },
  /**
   * @see BProductVariantsBulkAdd
   */
  product_variants_bulk_add: {
    title: "Añadir variantes en bloque",
    variants: {
      title: "Variante Opciones",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    values: {
      title: "Variante Valores",
      subtitle: "Configura y gestiona esta opción para tu tienda.",
      prevent_duplicates_tips:
        "<b></b> Configura y gestiona esta opción para tu tienda.",
    },
    inventory: {
      title: "Título",
      subtitle: "Configura y gestiona esta opción para tu tienda.",
    },
    add_variants_action: "Crear Variantes",
  },

  /**
   * @see CrossSellActionType
   */
  CrossSellActionType: {
    AddToCart: {
      title: "añadir a la cesta",
      description:
        "Muestra el botón Agregar al carrito directamente. Ten en cuenta que esto no se aplica a los productos con suscripción.",
    },
    ViewProduct: {
      title: "Ver el producto",
      description:
        "Muestra un botón Ver más que dirige a los clientes a la página del producto abriendo una nueva ventana.",
    },
  },

  /**
   * @see BProductFlow
   */

  product_flow: {
    title: "Flujo de compra",
    subtitle: "Este es el flujo de compra y verificación del estado de su producto.",

    /**
     * @see BProductFlowRowConnect
     */
    connect: {
      subtitle: "Este producto ha sido agregado a través de <b>{name}</b> .",
      enable_msg: "Este puente al servicio externo está habilitado.",
      disable_msg: "Este puente al servicio externo está deshabilitado.",
      has_shipping_msg:
        "{name} admite envíos. Por lo tanto, tiene la opción de habilitar el cálculo automático de envío por parte de {name} en la página de pago.",
    },
    /**
     * @see BProductFlowRowHealth
     */
    health: {
      title: "Salud del producto",
      available_in_stock_msg: "El producto está disponible en stock.",
      out_of_stock_msg: "El producto está agotado.",
      file_count_msg:
        "{files_count} archivos con un total de {files_size} cargados para este producto.",
      no_file_uploaded_msg: "Aún no se ha cargado ningún archivo",
      no_image_uploaded_msg:
        "Sube una imagen del producto para hacerlo más atractivo.",
    },
    /**
     * @see BProductFlowErrorsVendor
     */
    vendor_errors: {
      title: "Proveedores faltantes",
      subtitle:
        "Este producto actualmente no tiene vendedores asociados. Para que un producto pueda comprarse en el mercado, debe tener al menos un vendedor.",
      manage_vendors: "Administrar proveedores",
    },

    /**
     * @see BProductFlowErrorsFile
     */
    file_errors: {
      title: "Archivos faltantes",
      subtitle:
        "Actualmente no se han cargado archivos para este producto. Cargue los archivos para continuar.",
      manage_files: "Administrar archivos",
    },

    /**
     * @see BProductFlowRowPricing
     */
    pricing: {
      title: "Precios",
      no_product_price_msg: "¡El precio predeterminado del producto aún no se ha establecido!",
      listing_pricing_msg: "Precios de listado:",
      has_valuation_msg: "El producto tiene valoración.",
      subscription_pricing_msg:
        "Este producto tiene {count} planes de precios de suscripción.",
      has_no_subscription_pricing_msg:
        "Este producto no tiene planes de precios de suscripción.",
    },
    /**
     * @see BProductFlowErrorsSubscription
     */
    subscription_errors: {
      title: "Planes de precios de suscripción faltantes",
      subtitle:
        "Este producto no tiene planes de precios de suscripción. Debe agregar al menos un plan de precios de suscripción para que este producto esté disponible para su compra por suscripción.",
      pricing_plans: "Planes de precios",
    },

    /**
     * @see BProductFlowRowLocation
     */
    location: {
      title: "Restricción de ubicación de venta ● {status}",
      status: {
        has_restriction: "Disponible en {count} países",
        no_restriction: "No restringido",
      },
      available_countries_msg:
        "Las compras a nivel mundial están restringidas a {count} países. Estos países son {countries}.",
      disable_for_all_countries_msg:
        "Las compras están deshabilitadas para todos los países en la configuración de tu tienda > ubicaciones.",
      location_is_not_in_permitted_shop_locations_msg:
        "Estableciste {country} como ubicación de venta, pero en el nivel de tienda no permites este país. Revisa la configuración de tu nivel de tienda.",
      shop_locations: "Ubicaciones de las tiendas",
      product_locations: "Ubicaciones de productos",
    },

    /**
     * @see BProductFlowErrorsLocation
     */
    location_errors: {
      title: "Error de ubicaciones disponibles",
      no_location_error_subtitle:
        "Ha activado una restricción de ubicación para comprar el producto, pero actualmente no hay ningún país que esté sujeto a esta restricción. Como resultado, este producto no está disponible para su compra.",
      invalid_location_error_subtitle:
        "La configuración de restricción de ubicación de su producto contiene un error: algunas ubicaciones que figuran en la lista no tienen ningún código postal asociado. En consecuencia, los usuarios no pueden seleccionar un código postal, lo que hace que el producto no esté disponible para su compra.",

      manage_locations: "Administrar ubicaciones",
    },

    /**
     * @see BProductFlowRowTax
     */
    tax: {
      title: "Impuesto de suscripción",
      default_shop: "Impuesto de tienda predeterminado",
      tax_profiles: "Perfiles fiscales",
      description: {
        subscription_tax_msg:
          "Podemos aplicar impuestos solo en el paso de creación del pago.",
        dedicated: "Dedicado",
        is_disabled: "¡Este perfil fiscal está deshabilitado!",
        tax_is_based_on_location: "Impuestos: basados en la ubicación",
        shipping_tax_is_based_on_location: "Envío: basado en la ubicación",
        included_in_price: "Incluido en el precio.",
      },
    },

    /**
     * @see BProductFlowRowVendor
     */
    vendor: {
      vendor_owner_msg: "Este producto pertenece a <b>{vendor}</b> .",
      has_vendors_msg: "Hay {count} proveedores para este producto.",
      no_vendor_msg:
        "No ha asignado un proveedor a este producto, por lo que los clientes no pueden comprarlo.",
      add_vendors: "Agregar proveedores",
    },
  },

  /**
   * @see BPageProductTemplate
   */
  product_template: {
    title: "Plantilla de página de producto",
    subtitle:
      "Puede insertar una página dentro de la página de su producto para mejorar la presentación. El enfoque óptimo es crear páginas con un fondo transparente y de 1 a 3 secciones adaptadas a cada categoría de producto. Luego, asigne una página a varios productos para lograr una presentación uniforme y atractiva.",
    edit_page: "Editar página",
    list_of_pages: "Lista de páginas",
  },
  /**
   * @see BPageProductEmbed
   */
  product_embed: {
    subtitle:
      "Puede incorporar fácilmente un producto o una lista de productos en su blog u otras páginas web con solo copiar y pegar los códigos que le proporcionamos. Aunque esta función aún se encuentra en sus primeras etapas, estamos trabajando activamente para ampliar su funcionalidad más allá de lo que está disponible actualmente en otros lugares. Si bien actualmente ofrece capacidades limitadas, tenemos planes de introducir más plantillas y opciones de personalización en el futuro.",
    card: {
      title: "Mínimo",
      description:
        "Generar código HTML para agregar tarjetas de productos en otras plataformas y páginas HTML.",
    },
    iframe: {
      title: "Marco flotante",
      description:
        "Genere el código iframe para mostrar detalles completos del producto en una ventana incorporada.",
    },
  },

  /**
   * @see BPermissionStaffAddDialog
   */
  permission_staff_add: {
    title_new: "Nuevo personal",
    title_edit: "Personal de edición",

    staff: {
      title: "Agregar personal y acceso",
      subtitle:
        "Todos los usuarios con acceso de personal pueden iniciar sesión en su panel y ver información financiera. Para agregar usuarios con acceso limitado, defina Rol.",
      go_to_roles: "Ir a Roles",
    },
    access: {
      customization_tips:
        "<b></b> Configura y gestiona esta opción para tu tienda.",
      simplify_tips:
        "<b>¡Importante!</b> Simplificamos el control de acceso de más de 300 a menos de 10 niveles. En la documentación se publicarán niveles de acceso más detallados y actualizados.",
      multi_permission_tips:
        "<b>¿Límites personalizados?</b> Puedes agregar más accesos a un usuario, por lo que después de agregar el primer acceso, crea accesos adicionales con los mismos pasos.",
      view_data: "Ver datos",
      apply_changes: "Aplicar cambios",
    },

    inputs: {
      email: {
        placeholder: "Correo electrónico",
        label: "Dirección de correo electrónico del usuario",
      },
      level: {
        label: "Nivel de acceso",
        placeholder: "Seleccione un nivel...",
      },
    },

    actions: {
      add: "Agregar personal",
    },
    notifications: {
      add_success: {
        title: "Acceso concedido",
        message: "Se ha añadido correctamente el nuevo acceso.",
      },
      update_success: {
        title: "Acceso actualizado",
        message: "Los permisos se han actualizado correctamente.",
      },
    },
  },

  /**
   * @see BCategoryEngineEditor
   */
  category_engine_editor: {
    title: "Listado de productos adicionales",
    subtitle:
      "Muestra productos de varias categorías. Tienes la opción de elegir varias categorías para mostrar productos o filtrar productos por etiquetas.",
    aut_add_sub_categories_tips:
      "Puede agregar automáticamente todas las subcategorías a la categoría actual haciendo clic en el botón a continuación.",
    inputs: {
      categories: {
        label: "categorías",
        messages: "Se mostrarán los productos de estas categorías.",
        placeholder: "Seleccionar categorías...",
      },
      tags: {
        label: "Etiquetas de productos",
        messages: "Se mostrarán los productos con estas etiquetas.",
        placeholder: "Coloque las etiquetas aquí y presione enter. ej. nueva colección",
      },
    },
    actions: {
      save_engine: "Guardar motor",
      auto_add_subcategories: "Añadir subcategorías automáticamente",
    },
  },

  /**
   * @see SProductsSortView
   */
  products_sort_view: {
    search_tips: {
      title: "Consejos de búsqueda",
      normal:
        "<b>Búsqueda general:</b> busque por título, MPN, SKU, marca o etiquetas.",
      product:
        '<b>ID de producto exacto:</b> utilice P+ID de producto para encontrar un producto específico, por ejemplo, <b class="text-green">P</b> <i class="text-yellow">360</i> .',
      quotes:
        '<b>Frase exacta:</b> utilice comillas para buscar una frase exacta, por ejemplo, <b class="text-green">"</b> <i class="text-yellow">su texto aquí</i> <b class="text-green">"</b> .',
      tax: '<b>Perfil fiscal:</b> busque productos con un perfil fiscal específico utilizando "impuesto:", por ejemplo, <b class="text-green">impuesto:</b> <i class="text-yellow">nombre del perfil fiscal</i> .',
      new_products:
        '<b>Nuevos productos:</b> busque productos agregados dentro de un rango de fechas específico, por ejemplo, <b class="text-green">nuevo~</b> <i class="text-yellow">2023-08-10</i> <b class="text-green">~</b> <i class="text-yellow">2023-08-20</i> .',
    },
  },

  /**
   * @see LAugmentForm
   */
  augment_form: {
    title: "Aumento",
    subtitle:
      "Introduzca la clave que se intercambiará con su valor correspondiente en el contenido de la página. Las claves deben tener un máximo de 32 caracteres.",
    add_caption: "Agregar nuevo artículo",
    add_sub_caption: "Agregar par clave-valor personalizado.",
    add_dialog: {
      title: "Seleccionar el tipo de entrada",
      html: {
        title: "Texto y HTML",
        subtitle: "El valor del artículo se puede designar como texto o HTML.",
      },
      image: {
        title: "imagen",
        subtitle: "Puedes subir una imagen.",
      },
    },
    help_dialog: {
      title: "Cómo utilizar contenido dinámico",
      how_it_works_tips:
        "En las páginas de destino, tiene la flexibilidad de designar marcadores de posición dinámicos tanto para texto como para imágenes. Estos marcadores de posición cumplen una función importante en la personalización del contenido según el contexto. La naturaleza dinámica de estos marcadores de posición permite que se completen con valores de aumento, que pueden variar en función de diferentes factores. Por ejemplo, los valores de aumento pueden ser diferentes para cada producto o categoría. La verdadera ventaja de esta función entra en juego cuando tiene una variedad de artículos con diferentes atributos. Puede utilizar eficazmente estos marcadores de posición dinámicos para personalizar y mejorar la visualización de cada artículo, creando así una experiencia única e interactiva en sus páginas de destino.",
      assign_tips:
        "Para asignar valores dinámicos a las imágenes, haga clic en el botón de alimentación ubicado en el lado izquierdo de la sección.",
      set_dynamic_image_tips:
        "Ahora tiene la posibilidad de modificar la URL de la imagen y asignarle un valor dinámico.",
      enter_values_tips:
        "Para cada producto, tienes la posibilidad de asignar pares clave-valor dedicados.",
      result_tips:
        "Este es el resultado final de la página, donde los marcadores de posición han sido sustituidos por valores aumentados.",
    },
  },

  /**
   * @see BLogisticProfileEditor
   */
  logistic_profile_editor: {
    languages: {
      title: "Multi idioma",
      subtitle:
        "Esta es la lista de idiomas del contenido. Puede configurar contenido diferente para el perfil logístico en cada idioma.",
      add_caption: "Añadir nuevo artículo",
      no_more_language: "¡No más lenguaje!",
    },
    content: {
      title: "Contenido",
      subtitle:
        "Puede personalizar el contenido del perfil logístico en varios idiomas.",

      language_input: "Idioma actual del artículo",
      delete_article: "Eliminar artículo",
      menu_tooltip: "Traducir automáticamente / Eliminar artículo",
    },
    translate_to: "Traducir a",
    notifications: {
      translate: {
        message: "La traducción del artículo se completó con éxito.",
      },
      save_article: {
        message: "El artículo se ha guardado correctamente.",
      },
      delete_article: {
        message: "El artículo ha sido eliminado con éxito.",
      },
    },
    delete_dialog: {
      message: "¿Estás seguro de eliminar este artículo para siempre?",
      action: "Sí, eliminar ahora",
    },
  },

  /**
   * @see LogisticProfilePage_Products
   */
  logistic_profile_products: {
    title: "productos",
    subtitle: "Listado de productos asociados a este perfil.",
  },
  /**
   * @see LogisticProfilePage_Setting
   */
  logistic_profile_setting: {
    title: "información general",
    inputs: {
      name: {
        message:
          "Este nombre se muestra a usted y no será revelado al público.",
      },
      accept_delete: {
        true_description:
          "Esta acción eliminará todos los artículos y enlaces a perfiles.",
        true_title: "Verifico para eliminar esta conexión.",
      },
    },
    actions: {
      remove: "Eliminar perfil y relaciones",
    },
  },

  /**
   * @see BPageShopLogisticProfiles
   */
  shop_logistic_profiles: {
    title: "Perfiles logísticos",
    add_caption: "Agregar nuevo perfil",
    subtitle:
      "Aquí puede crear y editar la garantía y la política de devolución de los productos y asignarlas a cualquier producto. Puede definir diferentes políticas de garantía para distintos tipos de productos.",
    add_dialog: {
      title: "Crear nuevo perfil logístico",
      config: {
        title: "información general",
        subtitle:
          "Seleccione el tipo de perfil. Puede ser una guía, una garantía o cualquier otro contenido y material que se comparta comúnmente entre varios productos.",
      },
      article: {
        title: "Artículo",
        subtitle:
          "Puede agregar más idiomas después de crear este perfil logístico.",
      },
      inputs: {
        name: {
          message:
            "Este nombre se muestra a usted y no será revelado al público.",
          placeholder: "Introduzca un nombre para el perfil...",
        },
      },
    },
  },

  /**
   * @see BPageShopLogisticIncludes
   */
  shop_logistic_includes: {
    title: "Gestión de elementos incluidos",
    add_caption: "Agregar nuevo artículo",
    subtitle:
      "Aquí puedes administrar los artículos incluidos en tus productos. Para garantizar una apariencia impecable para tu tienda, utiliza artículos con patrones de imagen similares, como wireframes, en todos los productos.",
    empty_list_msg: "Lista de artículos incluidos...",
    notifications: {
      delete: {
        message: "El artículo ha sido eliminado.",
      },
    },
    delete_dialog: {
      title: "Título",
      message:
        "¿Está seguro de que desea eliminar este artículo de forma permanente? ¡Tenga en cuenta que también se eliminará de todos los productos asociados!",
      action: "Sí, eliminar ahora",
    },
    actions: {
      edit_linked_page: "Editar página vinculada",
    },
  },

  /**
   * @see BIncludeItemAdd
   */
  include_item_add: {
    dialog_title_edit: "opción Título Editar",
    dialog_title_add: "opción Título Añadir",

    title: "Artículo incluido",
    subtitle:
      "Elija un título breve, idealmente de 2 a 3 palabras como máximo. Utilice imágenes cuadradas, ya que ajustaremos automáticamente el tamaño de las imágenes cargadas a un formato cuadrado de 256 x 256. Para lograr la mejor apariencia en todas las plantillas, utilice imágenes minimalistas con fondos transparentes y mantenga un patrón uniforme en todos sus productos.",
    inputs: {
      title: {
        placeholder: "Título conciso mostrado en la página del producto...",
      },
      code: {
        placeholder: "Código único, por ejemplo: mobile_cable_usb",
        hint: "Utilice este código para agilizar el proceso de búsqueda para localizar artículos.",
      },
      description: {
        placeholder: "Una breve descripción sobre este artículo...",
        hint: "La descripción se utilizará para SEO y es posible que sea visible para los usuarios en algunos diseños personalizados en la página del producto.",
      },
      image: {
        message: "Tamaño máximo de la imagen: 1 MB",
      },
      path: {
        label: "Ruta de la página",
      },
    },
    mode: {
      no_link: {
        title: "No hay enlace",
      },
      external_link: {
        title: "Enlace externo",
        description: "Establecer un enlace a una URL externa.",
        tips: "Puede adjuntar cualquier URL al artículo. Cuando los usuarios hagan clic en el artículo en la página del producto, serán redirigidos a ese enlace.",
      },
      internal_link: {
        title: "Enlace interno",
        description:
          "Cree una página dinámica con los datos ampliados proporcionados para este artículo.",
        tips: "Puedes vincular una página de destino con el perfil y establecer una ruta personalizada y contenido dinámico para ella. Selldone generará un enlace dinámico para el artículo.",
      },
    },
    notifications: {
      add: {
        message: "El artículo incluido se ha añadido correctamente.",
      },
      edit: {
        message: "El artículo incluido se ha actualizado correctamente.",
      },
    },
  },
  /**
   * @see BPageShopLogisticReturns
   */
  shop_logistic_returns: {
    title: "Pedidos devueltos",
    subtitle:
      "Sus clientes pueden devolver sus pedidos físicos y usted puede ver las solicitudes de devolución en la página de procesamiento de pedidos o acceder a una lista completa de pedidos devueltos aquí.",
  },
  /**
   * @see OReferralFees
   */
  referral_fees: {
    title: "Comisiones",
    subtitle:
      "La lista de todas las comisiones que has ganado gracias a tus referidos. La aprobación de la comisión y su transferencia a tu billetera demoran hasta 30 días.",
  },
  /**
   * @see OReferralWallets
   */
  referral_wallets: {
    title: "Carteras",
    subtitle:
      "Aquí puedes ver las comisiones que has ganado. Puedes transferirlas a tu cuenta bancaria o a tu billetera Selldone.",
    no_commission_yet: "Aún no has recibido ninguna comisión.",
    no_wallet: "¡Sin billetera!",

    withdraw_dialog: {
      title: "Comisiones por retiro de fondos",

      need_bank_info_message: "Ingrese primero su información bancaria.",

      to_wallet: {
        title: "A la billetera",
        subtitle:
          "Con esta opción, puedes transferir las comisiones a tu billetera Selldone. Asegúrate de que haya una billetera conectada como tu billetera de regalo y que funcione con la misma moneda.",
      },
      to_bank: {
        title: "Al banco",
        subtitle:
          "Con esta opción, puedes transferir las comisiones a tu billetera Selldone. Asegúrate de que haya una billetera conectada como tu billetera de regalo y que funcione con la misma moneda.",
      },
      inputs: {
        verify_to_wallet: {
          true_description:
            "Quiero transferir mi comisión a mi billetera Selldone.",
        },
        verify_to_bank: {
          true_description:
            "Verifico mis datos bancarios y quiero transferir mi comisión a mi cuenta bancaria.",
        },
      },
      actions: {
        withdraw_to_wallet: "Retirar a la billetera",
        withdraw_to_bank: "Retirar al banco",
      },
    },
    notifications: {
      request_transfer_to_bank_success:
        "Su solicitud ha sido recibida exitosamente y la revisaremos.",
    },
  },

  /**
   * @see OPageMonetizeReferral
   */
  monetize_referral: {
    copy_box: {
      message: "Puedes agregar <b>?ref={code}</b> a cualquier URL de Selldone.",
    },
    intro: {
      title: "Únase al programa de afiliados de Selldone",
      message:
        "El programa de afiliados de Selldone es simple y directo, diseñado para que usted gane dinero sin esfuerzo. Comparta su enlace de afiliado exclusivo para invitar a nuevos usuarios a Selldone y ganará una comisión por cada transacción que realicen, para siempre. Esto incluye las ganancias por suscripciones, tarifas de servicio, actualizaciones de la tienda y todas las demás fuentes de ingresos. Comience a ganar una parte de los ingresos sin límites de tiempo ni ganancias. ¡Únase a nosotros y convierta su red en un ingreso estable!",
      why_join_selldone_affiliate: "¿Por qué es esta una oportunidad única?",
      reasons: [
        "¡Dura para siempre!",
        "Cubre todas las tarifas de suscripción y transacción. Literalmente, todos los pagos del usuario en Selldone.",
        "Enviamos un cupón gratuito de $99 a cualquier persona que se registre usando su enlace.",
        "Cuando tu nivel mejore, ganarás a la nueva tasa de todos los usuarios referidos anteriormente.",
      ],
    },
  },

  /**
   * @see LMenuLeftAssets
   */
  l_menu_left_assets: {
    no_asset_uploaded: "Opción",
  },

  /**
   * @see LMenuTopHome
   */
  l_menu_top_home: {
    hot_keys: "Opción",
    click_to_view_all: "Opción",
    clone_tooltip: {
      title: "Título",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
      step_1:
        "Configura y gestiona esta opción para tu tienda.",
      step_2: "Configura y gestiona esta opción para tu tienda.",
      step_3:
        "Configura y gestiona esta opción para tu tienda.",
    },
    show_side_menu_tooltip: {
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    sort_tooltip: {
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    edit_mode_tooltip: {
      title: "Editar / Vista previa Modo",
      edit_mode_title: "Editar Modo",
      edit_mode_msg: "Opción",
      view_mode_title: "Vista previa Modo",
      view_mode_msg:
        "Configura y gestiona esta opción para tu tienda.",
    },
    repository_tooltip: {
      title: "Título",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    live_view: {
      title: "En vivo Vista previa",
      subtitle: "Configura y gestiona esta opción para tu tienda.",
    },
    hotkeys_dialog: {
      title: "Título",
      augment_tips:
        "<b></b><b></b><b></b><b></b><b></b><b></b> Configura y gestiona esta opción para tu tienda.",
    },
    hotkeys: {
      ctrl_b: "<b></b> Configura y gestiona esta opción para tu tienda.",
      ctrl_i: "<i></i> Configura y gestiona esta opción para tu tienda.",
      ctrl_l:
        "<s></s> Configura y gestiona esta opción para tu tienda.",
      ctrl_u: "<u></u> Configura y gestiona esta opción para tu tienda.",
      ctrl_1:
        "<small></small> Configura y gestiona esta opción para tu tienda.",
      ctrl_2: "<big></big> Configura y gestiona esta opción para tu tienda.",
      ctrl_r: "Configura y gestiona esta opción para tu tienda.",
      ctrl_s: "Opción",
      tab: "Pestaña",
      ctrl_e: "Opción",
    },
  },

  /**
   * @see LPageEditorRepository
   */
  l_page_editor_repository: {
    title: "Título",
    subtitle: "Subtítulo",
    add_dialog: {
      title: "Añadir Personalizado Sección",
      configuration: {
        title: "Ajustes",
        subtitle:
          "Configura y gestiona esta opción para tu tienda.",
      },
      image: {
        title: "Imagen",
        subtitle: "Subtítulo",
      },
      code: {
        title: "Código",
        subtitle:
          "Configura y gestiona esta opción para tu tienda.",
      },
      inputs: {
        title: {
          label: "Título",
          message: "Mensaje",
        },
        tags: {
          label: "Etiquetas",
          message: "Mensaje",
        },
        section: {
          message: "Mensaje",
        },
      },
    },
  },

  /**
   * @see BPageMarketplaceVendors
   */
  marketplace_vendors: {
    title: "Vendedores Lista",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
    add_new_vendor_action: "Añadir Nuevo Vendedor",
    status_tooltip: {
      title: "Estado del proveedor",
      ACCEPTED: "ACCEPTED",
      REJECTED: "REJECTED",
      PENDING: "Configura y gestiona esta opción para tu tienda.",
    },
    number_of_products: "Número of Productos",
    invited: "Opción",
    no_pricing: "Sin precios",
    no_pricing_tooltip: {
      title: "Predeterminado Precios Plan",
      subtitle: "Configura y gestiona esta opción para tu tienda.",
    },
    updated_products_tooltip: {
      title: "Título",
    },
    added_products_tooltip: {
      title: "Título",
    },
    access_tooltip: {
      title: "Título",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    reject_by_user_tooltip: {
      title: "Título",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },
    download_all_vendors: "Descargar Todo Vendedores",
    bulk_import: "Masivo Importar",
  },

  /**
   * @see BShopLicenseNeedUpdateOverlay
   */
  shop_license_need_update_overlay: {
    title: "Título",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
  },

  /**
   * {@see BOrderChatBox}
   */
  b_order_chat_box: {
    title: "Acciones rápidas",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
    send_update_email_action: "Enviar correo de actualización",
    add_template_action: "Añadir plantilla de mensaje",

    notifications: {
      add_chat_success_message: "Opción",
    },

    send_update_email: {
      title: "Pedido Actualizar Correo electrónico",
      need_set_service_alert: {
        message:
          "Configura y gestiona esta opción para tu tienda.",
        action: "Ir a ajustes",
      },
      send_action: "Enviar correo de actualización",

      notifications: {
        send_success_message: "Opción",
      },
    },
    add_template: {
      edit_title: "Editar plantilla de mensaje",
      add_title: "Añadir plantilla de mensaje",
      message:
        "Configura y gestiona esta opción para tu tienda.",

      save_action: "Guardar Plantilla",
      add_action: "Añadir Plantilla",

      notifications: {
        save_success_message: "Guardar Éxito Mensaje",
      },

      inputs: {
        title: {
          label: "Plantilla Título",
          placeholder: "Opción",
        },
        body: {
          label: "Plantilla Mensaje",
          placeholder: "Opción",
          messages:
            "Configura y gestiona esta opción para tu tienda. {buyer_name} {order_id}",
        },
      },
    },
  },

  /**
   * {@see BOrderShare}
   */
  b_order_share: {
    title: "Enlace de pedido",
    subtitle: "Configura y gestiona esta opción para tu tienda.",
    guest_checkout_message:
      "Configura y gestiona esta opción para tu tienda.",
    authentication: "Opción",
    guest: "Opción",
    click_to_create: "Opción",
    valid_for_30_days: "Opción",
    notifications: {
      secure_link_created: "Opción",
    },
  },

  /**
   * {@see BPageShopCrmReviews}
   */
  shop_reviews: {
    title: "Título",
    add_source_action: "Opción",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
  },

  /**
   * {@see BPageShopLogisticPropertySets}
   */
  shop_logistic_property_set: {
    add_caption: "Añadir Nuevo Propiedad Establecer",
    title: "Propiedad Establecer",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
  },

  /**
   * {@see BProductProfilePropertySet}
   */
  product_property_set: {
    profile: {
      title: "Propiedad Establecer - Personalizado Variantes",
      subtitle:
        "Configura y gestiona esta opción para tu tienda.",
    },

    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
    select_property_set: "Seleccionar Propiedad Establecer",
    add_property_set: "Añadir conjunto de propiedades",
  },

  /** {@see BPageShopLogisticInventory} **/
  transportation_boxes: {
    title: "Cajas",
    add_action: "Añadir Caja",
    subtitle:
      "Configura y gestiona esta opción para tu tienda.",
    empty: "Opción",
    edit: "Editar Caja",
    new: "Nuevo Caja",
    default_weight: "Predeterminado Peso",
    updated: "Opción",
    created: "Opción",
    deleted: "Opción",
  },

  /** {@see BBoxInput} **/
  transportation_boxes_input: {
    select_box: "Seleccionar a Paquete",
    define_package: "Opción",
    define_package_hint: "Opción",
  },























  /** {@see BPageShopListing} **/
  listing:{
    name:"Listado",
    message:"Configura y gestiona esta opción para tu tienda."
  },

  shop_listing: {
    name: "Listado",
    message:
      "Configura y gestiona esta opción para tu tienda.",

    items: {
      title: "Elementos",
      sub_title:
        "Configura y gestiona esta opción para tu tienda.",

      empty_title: "Opción",
      empty_subtitle:
        "Configura y gestiona esta opción para tu tienda.",

      add_title: "Añadir artículo",
      edit_title: "Editar Título",

      price_to: "Precio hasta",
      price_unit: "Opción",
      is_featured: "Opción",

      meta_json: "Meta JSON",
      links_json: "Enlaces JSON",
      opening_hours_json: "Opción",

      delete_title: "Eliminar Título",
      delete_message: "Eliminar Mensaje",
      delete_success: "Elemento eliminado con éxito.",
      restore_success: "Restaurar Éxito",

      opening_hours:"Opción",
      form_fields:"Formulario Campos",

      company: "Empresa",
      badges: "Insignias",

    },

    categories: {
      title: "Categorías",
      sub_title:
        "Configura y gestiona esta opción para tu tienda.",

      empty_title: "Opción",
      empty_subtitle:
        "Configura y gestiona esta opción para tu tienda.",

      add_title: "añadir categoría",
      edit_title: "Editar categoria",

      parent_filter: "Opción",
      parent: "Categoría principal",

      price_format: "Opción",
      icon: "Icono",
      design_id: "Diseño ID",

      delete_title: "Eliminar categoría",
      delete_message: "Configura y gestiona esta opción para tu tienda.",
      delete_success: "Eliminar Éxito",
      form_schema: "Categoría Formulario Campos",
    },

    options: {
      submission_title: "Opción",
      submission_enabled: "Opción",

      moderation_title: "Moderación",
      moderation_mode: "Moderación Modo",
      require_first_approved_before_more: "Opción",

      limits_title: "Límites",
      max_pending_per_user: "Opción",
      max_items_per_user: "Opción",
      limits_hint: "Opción",

      templates_title: "Plantillas",
      card_template: "Plantilla de tarjeta",
      details_template: "Plantilla de detalles",

      form_schema_title: "Opción",
      settings_title: "Ajustes Título"
    },

    supervision: {
      title: "Supervisión",
      sub_title:
        "Configura y gestiona esta opción para tu tienda.",

      empty_title: "Opción",
      empty_subtitle:
        "Configura y gestiona esta opción para tu tienda.",

      review_title: "Reseña Título",
      approve_publish: "Aprobar & Publicar",

      submitted_at: "Opción",
      quick_actions: "Acciones rápidas",

      open_review: "Abrir Reseña",
      reset_to_pending: "Restablecer a pendiente",
      items_title: "Elementos",

    },

    moderation: {
      approve_success: "Aprobar Éxito",
      publish_success: "Publicar Éxito",
      unpublish_success: "Retirar publicación Éxito",
      archive_success: "Archivar Éxito",
      reject_success: "Rechazar Éxito",
      penalty_success: "Penalización Éxito",

      reject_title: "Rechazar Título",
      reject_reason: "Opción",

      penalty: "Penalización",
      penalty_title: "Penalización",
      penalty_points: "Opción",
      penalty_note: "Penalización Nota"
    },

    media: {
      upload_images: "Subir Imágenes",
      url_type: "Tipo",
      url: "URL",
      is_main: "Opción"
    },






    /** {@see BShopListingDesignsList, BShopListingDesignUpsert} **/
    designs: {
      title: "Diseño",
      sub_title:
        "Configura y gestiona esta opción para tu tienda.",

      empty_title: "Opción",
      empty_subtitle:
        "Configura y gestiona esta opción para tu tienda.",

      add_title: "Añadir Diseño",
      edit_title: "Editar Diseño",

      card_template: "Plantilla de tarjeta",
      details_template: "Plantilla de detalles",

      notifications: {
        add_success: "Añadir Éxito",
        edit_success: "Editar Éxito",
        delete_success: "Eliminar Éxito",
      },

      delete_title: "Eliminar Diseño",
      delete_message:
        "Configura y gestiona esta opción para tu tienda.",
    },





    badges: {
      title: "Insignias",
      sub_title:
        "Configura y gestiona esta opción para tu tienda.",

      empty_title: "Opción",
      empty_subtitle:
        "Configura y gestiona esta opción para tu tienda.",

      add_title: "Añadir Insignia",
      edit_title: "Editar Insignia",

      notifications: {
        add_success: "Añadir Éxito",
        edit_success: "Editar Éxito",
        delete_success: "Eliminar Éxito",
      },

      delete_title: "Eliminar Insignia",
      delete_message: "Eliminar Mensaje",
    },

    companies: {
      title: "Compañías",
      sub_title:
        "Configura y gestiona esta opción para tu tienda.",

      empty_title: "Opción",
      empty_subtitle:
        "Configura y gestiona esta opción para tu tienda.",

      add_title: "Añadir Título",
      edit_title: "Editar empresa",

      notifications: {
        add_success: "Añadir Éxito",
        edit_success: "Editar Éxito",
        delete_success: "Eliminar Éxito",
      },

      delete_title: "Eliminar Título",
      delete_message:
        "Configura y gestiona esta opción para tu tienda.",
    },



    messages: {
      title: "Mensaje",
      sub_title: "Configura y gestiona esta opción para tu tienda.",
      empty_title: "No Mensaje",
      empty_subtitle: "Opción",

      sender: "Opción",
      item: "ít",
      has_reply: "Responder",
      has_reply_yes: "Opción",
      has_reply_no: "Opción",

      dialog_title: "Mensaje",
      owner_reply: "Opción",
      reply: "Responder",
      reply_hint: "Configura y gestiona esta opción para tu tienda.",

      mark_read: "Opción",
      mark_unread: "Opción",
      archive: "Archivar",
      unarchive: "Opción",
      mark_spam: "Opción",
      mark_not_spam: "Opción",

      delete_confirm: "Eliminar Confirmar",
    },

    enable: {
      title: "Listado",
      subtitle: "Selldone Configura y gestiona esta opción para tu tienda.",
      true_description: "Configura y gestiona esta opción para tu tienda.",
      false_description: "Configura y gestiona esta opción para tu tienda.",
      open_listing: "Abrir Listado",
      note: "Configura y gestiona esta opción para tu tienda.",
      vendor_prereq_text:
        "Configura y gestiona esta opción para tu tienda.",
      vendor_prereq_button: "Opción",

      vendor_access_text:
        "Configura y gestiona esta opción para tu tienda.",
      vendor_access_button: "Vendedor Acceso Botón",

      more_options_text:
        "Configura y gestiona esta opción para tu tienda.",
      more_options_button: "Ir a ajustes de listado",

      updated: "Opción",
      update_failed: "Opción",
    },


    search: {
      title: "Buscar Ajustes",
      subtitle: "Configura y gestiona esta opción para tu tienda.",

      location_title: "Ubicación Buscar",
      location_subtitle: "Configura y gestiona esta opción para tu tienda.",
      location_enabled_true: "Configura y gestiona esta opción para tu tienda.",
      location_enabled_false: "Configura y gestiona esta opción para tu tienda.",

      radius_default: "Opción",
      radius_default_hint: "Configura y gestiona esta opción para tu tienda.",
      radius_max: "Opción",
      radius_max_hint: "Configura y gestiona esta opción para tu tienda.",
      radius_options: "Opción",
      radius_options_hint: "Configura y gestiona esta opción para tu tienda.",

      filters_title: "Buscar Filtro",
      filters_subtitle: "Configura y gestiona esta opción para tu tienda.",
      no_filters: "Opción",
      auto_generate: "Opción",

      filter_field: "Filtro Campo",
      filter_label: "Etiqueta",
      filter_type: "Tipo",
      filter_options: "Opciones",
      filter_options_hint: "Configura y gestiona esta opción para tu tienda.",
      multiple: "Opción",
      single: "Opción",
      kv_mode: "kv Modo",

      requires_listing_active: "Configura y gestiona esta opción para tu tienda.",


    },


  },















  /**
   * Auto fill suggestions
   */
  suggestions: {
    /**
     * Vendor Payment
     */
    vendor_payment: {
      note: [
        "Pago por ventas cumplidas",
        "Desembolso de comisiones de proveedores.",
        "Transacción completada exitosamente.",
        "Remesa de Ventas Recientes.",
        "Transferencia exitosa de servicios de proveedores.",
      ],
      /**
       * Reverse fund
       */
      reverse_fund_reason: [
        "Devolución de Fondos: Transferencia del banco a la billetera del vendedor.",
        "Recarga de billetera del proveedor: reversión de fondos de la cuenta bancaria.",
        "Transacción inversa: transferencia de fondos de billetera de banco a proveedor.",
        "Reembolso: Reversión del depósito bancario a la billetera del vendedor.",
        "Reversión de fondos: Reposición de la billetera del proveedor desde el banco.",
      ],
    },

    /**
     * Email Marketing
     */
    shop_email: {
      name: [
        "Explosión de fin de semana de súper ahorros",
        "Se revelan ofertas exclusivas de información privilegiada",
        "Su acceso VIP a descuentos premium",
        "Extravagancia de rebajas de temporada",
        "Desbloquee su paraíso de compras",
        "El carnaval del gran comprador",
        "Juerga de compras de primavera",
        "Ofertas de otoño a las que no podrás resistirte",
        "Maravillas del invierno: ofertas cálidas para los días fríos",
        "Cuenta regresiva de liquidación de fin de verano",
        "Bonanza del Black Friday: acceso anticipado",
        "Hola vacaciones: tu guía de regalos y más",
        "Nuevos hallazgos: novedades solo para ti",
        "Lealtad recompensada: descuentos exclusivos en el interior",
      ],
      subject: [
        "⏰ ¡Oferta por tiempo limitado! Consigue tus favoritos ahora",
        "🌼 Nueva temporada, nuevos estilos: explore nuestra última colección",
        "👑 Venta VIP exclusiva solo para ti",
        "💃 Llama la atención con nuestras novedades",
        "🔚 Última oportunidad de disfrutar de un 20 % de descuento en todo",
        "🎁 Un regalo para ti: ¡crédito de $10 en el interior!",
        "☀️ Prepárate para el verano con nuestras ofertas especiales",
        "🛍️ Mejora tu guardarropa: te lo mereces",
        "👀 Avance: ¡Nuevos productos próximamente!",
        "🎂 ¡Feliz cumpleaños! Tu regalo especial te espera",
        "🖤 ¿Estás listo para las ofertas del Black Friday?",
        "🎯 Mejores opciones solo para usted: experiencia de compra personalizada",
        "🍹 Es hora de darse un capricho: ¡venta flash de fin de semana!",
        "🧹 Liquidación de fin de temporada: ¡todo debe desaparecer!",
        "🚀 ¡Te lo has ganado! Envío gratis en su próximo pedido",
        "📢 No te lo pierdas: los artículos de tu lista de deseos ya están a la venta",
        "🏡 Trae alegría a tu hogar con nuestra colección de decoración del hogar",
        "🎉 ¡Una Sorpresa Solo para Ti! Descubra su descuento misterioso",
      ],
    },

    /**
     * Discount code
     */
    discount_code: {
      code: [
        "BIENVENIDO10",
        "VERANO20",
        "VIPSALE30",
        "CUMPLEAÑOS15",
        "VIERNES NEGRO",
        "LUNES CIBERNÉTICO",
        "ENVÍO GRATIS",
        "VENTA EXPRESS",
        "AUTORIZACIÓN",
        "MADRUGADOR",
        "ESTUDIANTE10",
        "INVIERNO25",
        "PRIMAVERA15",
        "OTOÑO20",
        "MEJOR VENDEDOR10",
        "VACACIONES30",
        "SAN VALENTÍN20",
        "DÍA DE LA MADRE",
        "DIA DEL PADRE",
        "FIN DE AÑO",
      ],
      title: [
        "Venta flash: ¡20 % de descuento!",
        "Descuento de acceso anticipado VIP",
        "Oferta de fin de semana: ¡Ahorre ahora!",
        "Disfrute de un 15% de descuento hoy",
        "Oferta de verano: 10 % de descuento adicional",
        "¡Venta de liquidación! Ahorre en grande",
        "Oferta especial: envío gratuito",
        "2 por 1: ¡Solo hoy!",
        "Especial de vacaciones: 25% de descuento",
        "Descuento exclusivo del 30%",
        "¡Sorpresa! 20% de descuento adicional",
        "Ahorros estacionales en el interior",
        "Locura entre semana: 10% de descuento",
        "Termina pronto: 15 % de descuento en todo",
        "Familiares y amigos: 20 % de descuento",
        "Grandes ahorros este fin de semana",
        "Viernes Negro: 40% de descuento",
        "Descuento de adelanto: 30 % de descuento",
      ],
      description: [
        "¡Reclama tu oferta especial! Por tiempo limitado.",
        "¡Apurarse! Ahorros exclusivos te esperan en tu carrito.",
        "¡Grandes ahorros a solo un clic de distancia!",
        "Aprovecha esta oferta antes de que se acabe.",
        "¡Descuento especial esperando! No te lo pierdas.",
        "¡Aumenta tu espíritu de compras con nuestra oferta!",
        "¡Tu próximo pedido podría ser menor de lo que crees!",
        "Es el momento perfecto para conseguir ese artículo que deseabas.",
        "Un pequeño detalle para alegrar tu día.",
        "¿Listo para ahorrar? ¡Te espera un descuento sorpresa!",
        "Porque eres especial, aquí tienes una oferta especial.",
        "¿Tienes el ojo puesto en algo? ¡Aquí tienes un empujón!",
        "No hay mejor momento que el presente para ahorrar.",
        "¡No te pierdas esta oferta! Es demasiado bueno para dejarlo pasar.",
        "¡Una gran noticia! Tus compras ahora son más baratas.",
        "¡Date prisa, tu descuento exclusivo termina pronto!",
        "Aquí tienes un pequeño agradecimiento por tu fidelidad.",
      ],
    },
    /**
     * Coupon
     */
    coupon: {
      title: [
        "Ahorros desatados",
        "Desbloquea el descuento",
        "Súper ahorros",
        "Oferta exclusiva",
        "Ahorros de bonificación",
        "Descuento VIP",
        "Oferta especial",
        "Ahorros adicionales",
        "Alerta de descuento",
        "Felicidad presupuestaria",
        "Delicia económica",
        "Bonanza de valor",
        "Reducción de precios",
        "Felices ahorros",
        "Ahorre más, compre más",
        "Oferta relámpago",
        "Recompensa de ganga",
        "Ahorro instantáneo",
        "Oferta del día",
        "Robo estacional",
      ],
      description: [
        "¡Disfruta de una buena oferta con nosotros! Ahorra en tu próxima compra.",
        "Valoramos a nuestros clientes: aproveche esta oferta exclusiva.",
        "Obtenga más de lo que ama por menos. ¡Descuento sobre nosotros!",
        "¿Listo para ahorrar? ¡Te espera una oferta exclusiva!",
        "¡Porque eres especial! Disfruta de un descuento en tu próximo pedido.",
        "¡Regálate una jornada de compras y ahorra!",
        "Prepárese para comprar hasta cansarse y ¡ahorre!",
        "Celebra la temporada con un descuento especial.",
        "Agradecemos a nuestros fieles clientes con un descuento exclusivo.",
        "Desbloquee ahorros increíbles en su próxima compra.",
        "Eche un vistazo a sus ahorros exclusivos.",
        "¡Descubre tu descuento sorpresa con nosotros!",
        "Mejora tu experiencia de compra con nuestra oferta exclusiva.",
        "Impulsa tus ahorros con nuestra oferta especial.",
        "Disfrute de algo extra: un descuento especial.",
        "¡Tu próxima aventura de compras ahora es más asequible!",
        "Porque comprar es más divertido con descuento.",
      ],
    },

    /**
     * Offer
     */
    offer: {
      title: [
        "¡Agrupa y ahorra en grande!",
        "¡Compre más ahorre más!",
        "Ofertas inteligentes para compradores inteligentes",
        "¡Alerta de descuento! Ahorros en paquetes",
        "Oferta combinada: más por menos",
        "Ahorros exclusivos en paquetes",
        "¡Obtenga más por su dinero!",
        "Ahorre cuando combine",
        "Ofertas especiales en combos",
        "¡Grandes ahorros en la tienda!",
        "Paquetes de mejor valor",
        "Ofertas de paquetes por tiempo limitado",
        "Grandes descuentos en combos",
        "Ahorros inteligentes en artículos seleccionados",
        "Ofertas inmejorables en paquetes",
        "Descuentos por compras múltiples disponibles",
        "Duplique por menos ahora",
        "Compras al por mayor = grandes ahorros",
      ],

      description: [
        "Obtenga grandes ahorros cuando combine productos seleccionados. ¡Date prisa, oferta por tiempo limitado!",
        "¡Te esperan ofertas inteligentes! Ahorre más al comprar nuestros artículos destacados juntos.",
        "¡Descubre la forma inteligente de ahorrar! Agrupe sus favoritos y observe cómo baja el precio.",
        "Disfruta de descuentos exclusivos al comprar artículos seleccionados en combo. ¡Actuar ahora!",
        "¡Compre más ahorre más! Descuentos inmejorables en nuestros paquetes de productos especiales.",
        "Compra inteligentemente con nuestras ofertas especiales. Precios con descuento en paquetes de productos seleccionados.",
        "¡Consigue más por menos! Descuentos increíbles al comprar nuestros paquetes seleccionados.",
        "¡Ahorra en grande al combinar! Ofertas exclusivas en artículos seleccionados por tiempo limitado.",
        "¡Combina y ahorra! Descuentos exclusivos al comprar juntos nuestros productos seleccionados.",
        "Cuanto más se compra, más usted ahorra! Sea inteligente con nuestros paquetes especiales.",
      ],
    },

    /**
     * Gift card type
     */
    gift_card_type: {
      title: [
        "¡Date un capricho!",
        "¡Solo para ti!",
        "¡Feliz compra!",
        "¡Disfrútalo con nosotros!",
        "Disfrute un poco",
        "Porque eres especial",
        "Una pequeña sorpresa",
        "Haz tu día",
        "Para ti",
        "Difunde la alegría",
        "Un regalo de amor",
        "Compre con deleite",
        "Una muestra de agradecimiento",
        "Es hora de derrochar",
        "Saborea el momento",
        "Encuentra tus favoritos",
        "La decisión es tuya",
        "Exprésate",
        "Descubre la Magia",
        "Libera tu estilo",
      ],
    },

    /**
     * Refund vendor order
     */
    vendor_refund_order: {
      note: [
        "Los fondos se dedujeron de su billetera virtual y se devolvieron a la billetera del mercado.",
        "Se ha emitido un reembolso, lo que reduce el saldo de su billetera virtual.",
        "Reembolso completado. La billetera del mercado se ha recargado desde su billetera virtual.",
        "Se ha debitado un reembolso reciente de su billetera virtual a la billetera del mercado.",
        "Los fondos de su billetera virtual se han ajustado debido a un reembolso reciente.",
        "Se ha realizado un reembolso descontando el importe de su billetera virtual.",
        "El saldo de su billetera virtual se ha reducido debido a un reembolso a la billetera del mercado.",
        "Se ha realizado una transacción de reembolso, moviendo fondos de su billetera virtual de regreso al mercado.",
      ],
    },

    /**
     * Product
     */
    product: {
      warranty: [
        "Garantía de oro de 24 meses",
        "Protección Platino durante dos años",
        "Garantía de Diamante por 36 meses",
        "Silver Shield: Garantía de un año",
        "Garantía Elite de 2 años",
        "Protección Premium durante 24 meses",
        "Copia de seguridad Bronce: garantía de un año",
        "Garantía máxima de funcionamiento por 3 años",
        "Promesa de servicio seguro de 24 meses",
        "Protección de tranquilidad durante 36 meses",
      ],
      pros_name: [
        "Eficiencia mejorada",
        "Solución rentable",
        "Calidad asegurada",
        "Fácil de usar",
        "Ahorrador de tiempo",
        "Fiabilidad garantizada",
        "Uso versátil",
        "Tecnología de vanguardia",
        "Amigable con el medio ambiente",
        "Actuación excepcional",
      ],

      pros_value: [
        "Ahorra mucho tiempo con operaciones rápidas y eficientes.",
        "Utiliza tecnología avanzada para un rendimiento inigualable.",
        "Reduce costes y aumenta la productividad.",
        "Ofrece una interfaz fácil de usar para una fácil navegación.",
        "Garantiza un rendimiento confiable y consistente.",
        "Proporciona aplicaciones versátiles para diversas tareas.",
        "Utiliza materiales y procesos respetuosos con el medio ambiente.",
        "Diseñado con tecnología de punta para resultados superiores.",
        "El diseño de alta calidad garantiza una durabilidad duradera.",
        "Ofrece atención al cliente las 24 horas.",
      ],

      cons_name: [
        "Inversión costosa",
        "Compatibilidad limitada",
        "Configuración compleja",
        "Requiere entrenamiento",
        "Rendimiento mediocre",
        "Carece de versatilidad",
        "Soporte limitado",
        "Mantenimiento frecuente",
        "Alto consumo de energía",
        "Corto periodo de vida",
      ],

      cons_value: [
        "Mayor inversión inicial en comparación con las alternativas.",
        "Puede que no sea compatible con todos los sistemas o dispositivos.",
        "El proceso de configuración puede ser bastante complicado.",
        "Puede ser necesaria formación adicional para su uso.",
        "Es posible que el rendimiento no cumpla con todas las expectativas.",
        "Limitado en funcionalidad o carece de versatilidad.",
        "Es posible que la atención al cliente no esté disponible las 24 horas.",
        "Requiere mantenimiento frecuente, lo que genera mayores costos.",
        "Consume grandes cantidades de energía, lo que afecta los costos de los servicios públicos.",
        "Es posible que la vida útil del producto no sea tan larga como se esperaba.",
      ],
    },

    /**
     * Blog Category
     */
    blog_category: {
      category: [
        "Información tecnológica",
        "Hallazgos gastronómicos",
        "Cuentos de viajes",
        "Consejos de salud",
        "Favoritos de la moda",
        "Buzz de negocios",
        "Historias de estilo de vida",
        "Actualizaciones deportivas",
        "Aspectos destacados del arte",
        "Consejos para padres",
      ],
      description: [
        "Descubra artículos interesantes sobre diversos temas.",
        "Explore nuestra colección de publicaciones de blog informativas.",
        "Manténgase informado con el atractivo contenido de nuestra categoría de blog.",
        "Encuentre inspiración a través de nuestros artículos de categoría de blog que invitan a la reflexión.",
        "Amplíe sus conocimientos con nuestros diversos temas de categorías de blogs.",
        "Manténgase actualizado con nuestra cautivadora información sobre categorías de blogs.",
        "Profundice en las profundidades del intrigante contenido de nuestra categoría de blog.",
        "Descubra información valiosa en los archivos de nuestra categoría de blogs.",
        "Aprenda algo nuevo de nuestra categoría de blogs cuidadosamente seleccionada.",
        "Participe con nuestros enriquecedores artículos y publicaciones de categorías de blog.",
      ],
    },

    /**
     * Partner Plan
     */
    partner_plan: {
      name: [
        "Paquete de inicio",
        "Plan Esencial",
        "Suite Profesional",
        "Edición de Empresa",
        "Nivel avanzado",
        "Paquete Premium",
        "Solución definitiva",
        "Nivel élite",
        "Acelerador de crecimiento",
        "Poder Platino",
      ],
    },

    /**
     * Tax Profile
     */
    tax_profile: {
      name: [
        "Alimentos",
        "Dispositivos electrónicos",
        "Ropa y prendas de vestir",
        "Libros y papelería",
        "Productos de salud y belleza",
        "Muebles",
        "Artículos deportivos",
        "Juguetes y Juegos",
        "Joyería y accesorios",
        "Piezas de automóviles",
        "Jardín y aire libre",
        "Batería de cocina",
        "Decoración del hogar",
        "Instrumentos musicales",
        "Suministros de mascotas",
        "Calzado",
        "Bolsas y equipaje",
        "Material de oficina",
        "Herramientas de hardware",
        "Comestibles",
      ],

      label: [
        "VAT", // Value-Added Tax
        "GST", // Goods and Services Tax
        "PST", // Provincial Sales Tax
        "HST", // Harmonized Sales Tax
        "QST", // Quebec Sales Tax
        "CST", // Central Sales Tax
        "Impuesto al consumo", // Excise Tax
        "Derechos de Importación", // Import Duty
        "Impuesto de servicio", // Service Tax
        "Impuesto de lujo", // Luxury Tax
      ],
    },
    /**
     * Cluster
     */
    cluster: {
      name: [
        "Aspectos destacados de la venta",
        "Códigos promocionales",
        "Campañas destacadas",
        "Los recién llegados",
        "Los más vendidos",
        "Especiales de temporada",
        "Ofertas limitadas",
        "Ofertas de eventos",
        "Exclusivos VIP",
        "Artículos en liquidación",
        "Paquetes de vacaciones",
        "Colecciones temáticas",
        "Escaparates de marca",
        "Favoritos de los miembros",
        "Descuentos flash",
        "Comprar artículos esenciales",
        "Recursos digitales",
        "Ideas de regalo",
        "Selecciones ecológicas",
        "Recomendaciones del personal",
      ],
    },

    /**
     * Popup
     */
    popup: {
      title: [
        "¡Oferta especial!",
        "Los recién llegados",
        "Tiempo limitado",
        "¡Alerta de descuento!",
        "Ofertas exclusivas",
        "¡Gran venta!",
        "Alerta de liquidación",
        "Envío gratis",
        "¡Regalo adentro!",
        "Gana premios",
        "Beneficios para miembros",
        "Venta express",
      ],
    },

    /**
     * Campaign
     */
    campaign: {
      name: [
        "Comprar hasta el cansancio",
        "Frenesí de carritos",
        "Fiesta de venta flash",
        "Haga clic, compre, ahorre",
        "Bonanza de gangas",
        "Extravagancia de ofertas electrónicas",
        "Locura de mega rebajas",
        "Oleada de ahorros cibernéticos",
        "Días de descuento digitales",
        "Carnaval del comercio electrónico",
        "Oasis de venta online",
        "Fiebre minorista",
        "Venta de almacén de tienda web",
        "El paraíso del comprador electrónico",
        "Empresa de vales virtuales",
        "Explosivos digitales",
        "Liquidación de carrito electrónico",
        "Enfrentamiento de compras en línea",
        "Venta Cibernética Espectacular",
        "Bombardeo de gangas electrónicas",
      ],
    },

    /**
     * Valuation
     */
    valuation: {
      title: [
        "Precios de personalización de camisetas",
        "Valoración de joyas hechas a mano",
        "Precios de zapatos personalizados",
        "Valoración de obras de arte personalizadas",
        "Precios de trajes a medida",
        "Costo de personalización de dispositivos electrónicos",
        "Valoración de perfumes personalizados",
        "Precios de bolsas personalizadas",
        "Valoración de vestidos a medida",
        "Precios de portadas de libros personalizadas",
        "Valoración de muebles a medida",
        "Precios de relojes a medida",
        "Valoración de juguetes personalizada",
        "Precios de sombreros a medida",
        "Valoración de productos para el cuidado de la piel personalizados",
        "Precios de decoración del hogar a medida",
        "Valoración personalizada de menaje de cocina",
        "Precios de papelería personalizada",
        "Valoración de accesorios para el cabello a medida",
        "Precios de equipos deportivos personalizados",
      ],
      structure: {
        title: [
          "Diseño de impresión de camiseta",
          "Tipo de metal para joyería",
          "Elección del material del zapato",
          "Tamaño del marco artístico",
          "Selección de tela para traje",
          "Opción de color del gadget",
          "Perfil de aroma de perfume",
          "Material y tamaño de la bolsa",
          "Longitud y estilo del vestido",
          "Material de la cubierta del libro",
          "Tipo de madera de los muebles",
          "Material de la correa del reloj",
          "Características personalizadas del juguete",
          "Tamaño y color del sombrero",
          "Preferencias de ingredientes para el cuidado de la piel",
          "Tema de decoración del hogar",
          "Material de menaje de cocina",
          "Tipo de papel de papelería",
          "Material para accesorios para el cabello",
          "Tamaño del equipo deportivo",
        ],
      },
    },

    /**
     * Lottery
     */
    lottery: {
      title: [
        "¡Gira y gana grandes premios!",
        "Premio mayor de la rueda de la fortuna",
        "Bonanza de giros de la suerte",
        "Gira para ganar recompensas",
        "Rueda de la riqueza",
        "Extravagancia de la lotería de la suerte",
        "Sorpresa de megagiro",
        "Fiesta de la rueda de premios",
        "Espectacular giro del tesoro",
        "Gira la rueda mágica",
        "Rueda de la suerte en abundancia",
        "El favor de la fortuna",
        "Rueda de las maravillas",
        "Girar por riquezas",
        "Premio Spinner Delicia",
        "Lotería de giro dorado",
        "Gira un premio",
        "Rueda de la Fortuna",
        "Exhibición de giros afortunados",
        "Recompensa de giro definitiva",
      ],
      description: [
        "¡Gira la rueda para tener la oportunidad de ganar descuentos exclusivos!",
        "Pruebe suerte: ¡le esperan premios increíbles en nuestra rueda de la fortuna!",
        "Gana a lo grande con cada giro: ¡emocionantes recompensas en juego!",
        "¡Gira para ganar! Regalos sorpresa y ofertas en todo momento.",
        "Tu oportunidad de ganar mucho: ¡haz girar la rueda para obtener premios instantáneos!",
        "Recompensas exclusivas con cada giro: ¿serás tú el afortunado?",
        "¡Gira y gana! Descubre gemas ocultas en la rueda de la fortuna de nuestra tienda.",
        "Tenga suerte con nuestra rueda: ¡premios, descuentos y más!",
        "Cada giro es una ganancia: ¡consigue tu premio especial hoy!",
        "Gira la rueda para recibir una deliciosa sorpresa: ¿qué ganarás?",
        "Libera tu fortuna con un giro: te esperan emocionantes recompensas en la tienda.",
        "Gira para revelar tu premio: ¡descuentos, regalos y más!",
        "Un giro al día mantiene la emoción en juego: ¡gana premios únicos!",
        "Gira nuestra rueda de la fortuna para obtener obsequios exclusivos en la tienda.",
        "Los giros afortunados traen ganancias afortunadas: ¡obtén tu premio ahora!",
        "¡Tu giro podría desbloquear increíbles recompensas de compras!",
        "Gire para tener la oportunidad de conseguir promociones y ofertas exclusivas.",
        "La rueda de la fortuna está girando: ¡atrapa tu premio de la suerte!",
        "Gira, gana y sonríe: recompensas sorpresa en cada giro.",
        "¡Da una vuelta y deja que la fortuna decida tu premio!",
      ],
    },

    /**
     * Subscription Price
     */
    subscription_price: {
      title: [
        "Acceso básico",
        "Membresía Premium",
        "Paquete de oro",
        "Plan Plata",
        "Suscripción Platino",
        "Nivel empresarial",
        "Paquete de inicio",
        "Oferta ilimitada",
        "Paquete familiar",
        "Suite Profesional",
      ],
      description: [
        "Ideal para personas que exploran los conceptos básicos.",
        "Acceso a todas las funciones y contenidos premium.",
        "Beneficios exclusivos y soporte prioritario.",
        "Un paquete equilibrado para usuarios habituales.",
        "Acceso definitivo con ventajas de primer nivel.",
        "Soluciones personalizadas para grandes organizaciones.",
        "Una opción de nivel de entrada asequible.",
        "Sin límites de uso, para el usuario avanzado.",
        "Un plan especial para familias, hasta 4 integrantes.",
        "Diseñado para profesionales que buscan herramientas avanzadas.",
      ],
    },

    spec: {
      group: [
        "Especificaciones técnicas",
        "Dimensiones físicas",
        "Características de rendimiento",
        "Opciones de conectividad",
        "Requisitos de energía",
        "Material y calidad de construcción",
        "Opciones de color y acabado",
        "Almacenamiento y memoria",
        "Compatibilidad del sistema operativo",
        "Seguridad y cumplimiento",
        "Contenido del paquete",
        "Garantía y soporte",
        "Marca y fabricante",
        "Respeto al medio ambiente",
        "Eficiencia energética",
        "Cuidado y mantenimiento",
        "Opciones de personalización",
        "Accesorios incluidos",
        "Calificaciones y reseñas de usuarios",
        "Precios y disponibilidad",
      ],
    },

    avocado: {
      title: [
        "Recibo de compra",
        "Confirmación de venta",
        "Factura de pedido",
        "Factura de pago",
        "Recibo del cliente",
        "Resumen de la transacción",
        "Estado de cuenta",
        "Recibo de pago",
        "Resumen del pedido",
        "Factura de orden de compra",
        "Recibo de venta",
        "Factura de venta al por menor",
        "Recibo electrónico",
        "Factura de servicio",
        "Factura del producto",
        "Recibo de pago",
        "Confirmación de pedido",
        "Factura de facturación",
        "Factura de pago",
        "Factura del cliente",
      ],
      message: [
        "¡Gracias por tu compra!",
        "Apreciamos su negocio.",
        "¡Tu pedido está en camino!",
        "Gracias por comprar con nosotros.",
        "Esperando poder servirle nuevamente.",
        "Su satisfacción es nuestra máxima prioridad.",
        "No olvides valorar tu experiencia.",
        "Gracias por apoyar nuestra tienda.",
        "¡Esperamos que disfrutes de tu nueva compra!",
        "Guarde su factura para futuras referencias.",
        "Visítenos nuevamente para conocer más productos excelentes.",
        "Manténgase conectado para obtener ofertas exclusivas.",
        "Gracias por ser un cliente valioso.",
        "Estamos aquí para ayudarle si necesita asistencia.",
        "Sus comentarios nos ayudan a mejorar.",
        "Disfruta de un descuento especial en tu próxima compra.",
        "¡Has hecho una gran elección!",
        "Gracias por confiar en nosotros.",
        "Quedo a la espera de sus comentarios.",
        "Un sincero agradecimiento de parte de nuestro equipo.",
      ],
    },

    /**
     * Map Tag
     */
    map_tag: {
      title: [
        "Exhibición de propiedades",
        "Plaza de vendedores",
        "Casas Destacadas",
        "Mercado local",
        "Los recién llegados",
        "Jardines de la finca",
        "Distrito comercial",
        "Callejón de los artesanos",
        "Fincas de lujo",
        "Centro de alquiler",
        "Casas abiertas",
        "Innovaciones tecnológicas",
        "Calle de la moda",
        "Rincón de manualidades",
        "Patio de comidas",
        "Rincón de libros",
        "Unión de joyería",
        "Avenida de Antigüedades",
        "Zona Fitness",
      ],
    },

    /**
     * Marketplace Documents (For vendors)
     */
    marketplace_document: {
      title: [
        "Certificado de Registro Comercial",
        "Número de identificación fiscal (NIF)",
        "Formulario de acuerdo con el proveedor",
        "Catálogo de productos",
        "Lista de precios",
        "Datos de la cuenta bancaria",
        "Comprobante de domicilio",
        "Certificado de seguro",
        "Perfil de la empresa",
        "Certificado de garantía de calidad",
        "Hoja de datos de seguridad (HDS)",
        "Información de garantía del producto",
        "Política de devoluciones",
        "Procedimientos de envío y manipulación",
        "Política de atención al cliente",
        "Planes de marketing y promoción",
        "Enlaces de redes sociales",
        "Referencias comerciales",
        "Código de conducta del proveedor",
        "Acuerdo de confidencialidad (NDA)",
      ],
    },

    /**
     * Expert Contract
     */
    expert_contract: {
      title: [
        "Acuerdo de servicios de configuración de Marketplace",
        "Contrato de configuración de tienda",
        "Acuerdo de servicios de impresión bajo demanda",
        "Acuerdo de servicios de marketing digital",
        "Acuerdo de configuración de la plataforma de comercio electrónico",
        "Contrato de Consultoría Experta para Empresarios",
        "Acuerdo de servicio para la configuración del Marketplace",
        "Contrato de servicios de instalación y configuración de tiendas",
        "Acuerdo de prestación de servicios POD",
        "Acuerdo de Implementación de Estrategia de Marketing",
        "Contrato de servicios de desarrollo empresarial",
        "Acuerdo de configuración de tienda de comercio electrónico",
        "Acuerdo de prestación de servicios de expertos",
        "Contrato de Soluciones Empresariales y de Instalación",
        "Acuerdo de servicios de instalación de tiendas personalizadas",
        "Acuerdo de servicio de optimización del mercado",
        "Contrato de Servicios de Consultoría y Configuración",
        "Acuerdo de servicios de integración de POD",
        "Contrato de servicios de marketing y promoción",
        "Contrato de servicio de expansión empresarial",
      ],
    },

    /**
     * Account
     */
    account: {
      account_name: [
        "Monedero principal",
        "Cuenta de negocios",
        "Billetera personal",
        "Billetera de ahorros",
        "Cuenta de Gastos",
        "Monedero principal",
        "Cuenta General",
        "Billetera de reserva",
        "Monedero de transacciones",
        "Cuenta de fondos",
      ],
    },

    /**
     * Cashback
     */
    cashback: {
      title: [
        "Compre y gane reembolsos",
        "Reembolso en efectivo por recompensas de fidelidad",
        "Ofertas exclusivas de devolución de dinero",
        "Bonanza de reembolso",
        "Ofertas de devolución de dinero instantánea",
        "Ahorros de reembolso de temporada",
        "Días de doble reembolso",
        "Reembolso en cada compra",
        "Frenesí de devolución de dinero",
        "Programa de reembolso VIP",
        "Reembolso por tiempo limitado",
        "Club de recompensas con devolución de efectivo",
        "Compre más, ahorre más",
        "Recompensas de devolución de efectivo definitivas",
        "Extravagancia de devolución de dinero",
      ],
      description: [
        "¡Gana dinero en efectivo en cada compra!",
        "Obtenga recompensas por su lealtad.",
        "Ofertas de reembolso exclusivas solo para ti.",
        "Disfrute de grandes ahorros con recompensas de devolución de efectivo.",
        "Reembolso instantáneo en todos tus artículos favoritos.",
        "Ahorre más con ofertas de devolución de efectivo de temporada.",
        "¡Duplica tu reembolso en días especiales!",
        "Gane reembolsos cada vez que compre.",
        "¡Únete al frenesí del reembolso hoy!",
        "Los miembros VIP disfrutan de un reembolso exclusivo.",
        "¡Date prisa! Ofertas de devolución de dinero por tiempo limitado.",
        "Únase ahora a nuestro Club de recompensas Cashback.",
        "Cuanto más compres, más ahorrarás.",
        "Desbloquea las mejores recompensas de reembolso.",
        "Experimente las mejores ofertas de devolución de dinero.",
      ],
    },

    /**
     * Page
     */
    page: {
      prompts: [
        "Bienvenido a {shop} - Explore nuestra distintiva gama de artículos",
        "{shop} - Su fuente definitiva de productos de calidad y un servicio excepcional",
        "Ofertas y ahorros exclusivos solo en {shop}: ¡aproveche la oportunidad!",
        "Conozca la dedicación de {shop} al respeto al medio ambiente y las prácticas éticas",
        "Sea parte de la familia {shop}: suscríbase a nuestro boletín para recibir actualizaciones",
        "Sumérjase en las mejores selecciones y los productos mejor calificados en {shop}",
        "Ideas actuales y sugerencias creativas para todos los eventos en {shop}",
        "Ofertas inigualables y promociones especiales por tiempo limitado en {shop}: ¡actúe rápido!",
        "Consejos de compra completos y evaluaciones de productos de {shop}: compre con confianza",
        "Comuníquese con {shop}: nos esforzamos por brindar una experiencia de compra inigualable",
      ],
    },

    /**
     * Cross-Selling
     */
    cross_selling: {
      message: [
        "Completa tu look, ¡hazte con el conjunto!",
        "¡Ahorre a lo grande con nuestras ofertas combinadas!",
        "¡No te pierdas nuestros maridajes perfectos!",
        "Mejora tu compra, ¡te esperan complementos!",
        "¡Desbloquea ahorros exclusivos, compra juntos!",
        "¡Artículos complementarios, descuentos especiales!",
        "Obtenga más, gaste menos: ¡abríguese!",
        "Oferta por tiempo limitado: ¡productos combinados!",
        "Mejora tu experiencia, ¡ofertas combinadas!",
        "Descubre nuestros combos seleccionados, ¡ahorra ahora!",
        "¡Combínalos para lograr el combo perfecto!",
        "¡Compre de manera inteligente, compre en paquetes y ahorre!",
        "¡El doble de valor, el doble de diversión!",
        "¡Tu pareja perfecta está aquí! ¡Cómprala ahora!",
        "¡Precios de paquete exclusivos solo para ti!",
        "¡Maximiza tus ahorros con nuestros combos!",
        "¡Mejora tu colección con estas púas!",
        "Seleccionado especialmente para ti: ¡combina y ahorra!",
        "¡La pareja perfecta para un día perfecto!",
        "¡Agrupa tus favoritos para obtener ahorros adicionales!",
      ],
    },

    /**
     * Cross-Selling
     */
    vendor_pricing: {
      title: [
        "Título",
        "Libros",
        "Título",
        "Título",
        "Título",
        "Productos de belleza",
        "Equipo deportivo",
        "Juguetes y Juegos",
        "Comestibles",
        "Muebles",
        "Piezas de automóviles",
        "Joyas",
        "Título",
        "Suministros de mascotas",
        "Material de oficina",
        "Título",
        "Título",
        "Título",
        "Título",
        "Título",
      ],
    },

    /**
     * Template Message
     */
    template_message: {
      title: [
        "Confirmación del pedido",
        "Título",
        "Título",
        "Título",
        "Título",
        "Título",
        "Título",
        "Título",
        "Título",
        "Título",
        "Título",
      ],
      body: [
        "Configura y gestiona esta opción para tu tienda. {buyer_name} {order_id}",

        "Configura y gestiona esta opción para tu tienda. {buyer_name} {order_id}",

        "Configura y gestiona esta opción para tu tienda. {buyer_name} {order_id}",

        "Configura y gestiona esta opción para tu tienda. {buyer_name} {order_id}",

        "Configura y gestiona esta opción para tu tienda. {buyer_name} {order_id}",

        "Configura y gestiona esta opción para tu tienda. {buyer_name} {order_id}",

        "Configura y gestiona esta opción para tu tienda. {buyer_name} {order_id}",

        "Configura y gestiona esta opción para tu tienda. {buyer_name} {order_id}",

        "Configura y gestiona esta opción para tu tienda. {buyer_name} {order_id}",

        "Configura y gestiona esta opción para tu tienda. {buyer_name} {order_id}",

        "Configura y gestiona esta opción para tu tienda. {buyer_name} {order_id}",
      ],
    },

    /**
     * Property Set
     */
    property_set: {
      title: [
        "Título",
        "Título",
        "Título",
        "Alimentos",
        "Muebles",
        "Libros",
        "Productos de belleza",
        "Título",
        "Equipo deportivo",
        "Título",
      ],
      description: [
        "Configura y gestiona esta opción para tu tienda.",
        "Configura y gestiona esta opción para tu tienda.",
        "Descripción",
        "Descripción",
        "Descripción",
        "Descripción",
        "Configura y gestiona esta opción para tu tienda.",
        "Descripción",
        "Descripción",
        "Descripción",
      ],
    },

    /**
     * Boxes
     */
    boxes: {
      name: [
        "Caja XS",
        "Caja S",
        "Caja M",
        "Caja L",
        "Caja XL",
        "Caja XXL",
        "Nombre",
        "Nombre",
        "Nombre",
        "Nombre",
        "Nombre",
        "Nombre",
        "Nombre",
        "Nombre",
        "Nombre", // flexible mailer
        "Nombre", // bubble/padded
        "Nombre", // thermal
        "Nombre",
      ],
    },
  },
};
