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
  categories: {
    Baby: {
      title: "Bebés, niños y juguetes",
      desc: "Carritos, juguetes, juegos, rompecabezas, figuras de acción",
    },
    Health: {
      title: "Salud y belleza",
      desc: "Farmacia, bienestar, cosmética, fragancias",
    },
    Media: {
      title: "Medios y juegos",
      desc: "Videojuegos, películas, música, libros",
    },
    Fashion: {
      title: "Ropa, joyas y relojes",
      desc: "Ropa, zapatos, collares, anillos, pulseras, relojes",
    },
    Automotive: {
      title: "Automotriz",
      desc: "Accesorios para autos, herramientas, mantenimiento",
    },
    Electronics: {
      title: "Electrónica",
      desc: "Móvil, TV, dispositivos de audio, cámara",
    },
    Computers: {
      title: "Computadoras",
      desc: "Portátiles, computadoras de escritorio, accesorios, software",
    },
    Household: {
      title: "Esenciales del hogar",
      desc: "Artículos de limpieza, baño, lavandería",
    },
    Garden: {
      title: "Jardín y herramientas",
      desc: "Muebles de exterior, herramientas de jardinería, plantas",
    },
    Food: {
      title: "Alimentos y comestibles",
      desc: "Lácteos, fruta, comida preparada, carne, bebidas",
    },
    Handmade: {
      title: "Hecho a mano",
      desc: "Coleccionables, zapatos pintados, esculturas, arte en vidrio",
    },
    PetSupplies: {
      title: "Artículos para mascotas",
      desc: "Comida para mascotas, juguetes para mascotas, cuidado de mascotas",
    },
    Home: {
      title: "Hogar y vida",
      desc: "Electrodomésticos de cocina, muebles para el hogar, decoración",
    },
    Sports: {
      title: "Deportes y aire libre",
      desc: "Ejercicio, camping, bicicletas, recreación",
    },
    Stationery: {
      title: "Papelería y oficina",
      desc: "Suministros de oficina, útiles escolares, productos de papel",
    },
    Books: {
      title: "Libros",
      desc: "Ficción, no ficción, educativo, cómics",
    },
    Marketplace: {
      title: "Mercado de todo",
      desc: "Una amplia variedad de productos de múltiples categorías",
    },
    Other: {
      title: "Otros...",
      desc: "Tarjetas de regalo, productos digitales, servicios en línea, cualquier cosa",
    },
  },

  partners: {
    title: "{name} se asocia con Selldone",
    subtitle: "para desbloquear la próxima generación de negocios en línea.",
    subtitle_official: "Desbloquee la próxima generación de negocios en línea.",

    create_new_shop: "Crear una nueva tienda",
    select_a_shop: "Seleccione una tienda",
    apply_deal_to: "Aplicar oferta a {shop}",
    notifications: {
      success_apply: "¡Oferta activada con éxito!",
    },
  },

  name: "Configuración",
  overview: {
    title: "Descripción general",
    subtitle:
      "Obtén información sobre el sistema operativo empresarial y descubre cómo puede ayudar a tu negocio.",
  },

  shop: {
    title: "De cero a ingresos",
    subtitle: "Pasa al siguiente nivel completando estos sencillos pasos.",
  },

  open_website: "abrir mi sitio web",

  customize_theme: "Personalizar sitio web",
  setup_business: "Configurar negocio",
  add_product: "Agregar producto",
  setup_shipping: "Configuración de envío",
  add_domain: "Agregar dominio",
  add_payment: "Conectarse a una pasarela de pago",

  product: {
    step1: {
      title: "Opción 1. Agregar manualmente",
      msg: "Puede agregar productos físicos, artículos virtuales, archivos y servicios a su tienda y comenzar a venderlos.",
      action_on: "Agrega tu primer producto",
      action_off: "Añadir más productos",
      category:
        "Las categorías son la obra maestra de su sitio web de compras en línea en comparación con otros. Haga que todo esté categorizado y organizado agregando categorías y administrando con arrastrar y soltar.",
      add_category: "añadir categoría",
    },
    step2: {
      title: "Opción 2. Agregar por Excel",
      msg: "¿Tiene muchos productos, como artículos 1K, 10K? No se preocupe, importe todo con una sola acción.",
      import_excel: "Importar por Excel",
      download_template: "Descargar plantilla",
    },
  },
  shipping: {
    step1: {
      title: "Paso 1. Establecer ubicación",
      msg: "En el primer paso, configure su almacén (origen del envío). Esta información se utiliza para calcular la distancia, el costo de envío y verificar estar en el área de servicio de envío.",
      edit_warehouse: "Editar almacén",
      add_warehouse: "Añade tu almacén",
    },
    step2: {
      title: "Paso 2. Activa los métodos de envío",
      msg: "Agrega al menos un método de envío a tu tienda. Puede establecer precios en función del peso, la distancia y otros parámetros. No olvide establecer límites de distancia, peso y tamaño de los paquetes que admite cada servicio de envío.",
      add_delivery: "Añadir métodos de envío",
    },
  },

  domain: {
    buy_domain_step: {
      title: "Paso 1. Comprar un dominio",
      msg: "Si aún no tienes tu dominio personal, es momento de comprar tu propio dominio en sitios como namecheap.com .",
    },

    set_dns_step: {
      title: "Paso 2. Configurar registros DNS",
      msg: "Felicitaciones, ahora solo tienes que configurar el DNS en tu proveedor de servicios de dominio y agregar el dominio a tu cuenta.",
    },
  },

  payment: {
    step1: {
      title: "Monedas de precios",
      msg: "Puede aceptar dinero en diferentes monedas y su tienda puede admitir más de una moneda para el precio. Por cierto, si configura la moneda de su tienda en USD, los clientes pueden pagar en cualquier moneda como USD, EUR, GBP, etc., para comprarle.",
      manage_currencies: "Administrar monedas de precios",
    },
    step2: {
      title: "aceptar dinero",
      msg: "Agregue pago contra reembolso, transferencia directa de dinero y otros métodos de pago disponibles en su tienda.",
      online_title: "Métodos de pago en línea",
      online_msg:
        "Acepte pagos con tarjetas, nuevas aplicaciones bancarias, compre ahora, pague después y muchos otros métodos de pago en línea.",
      add_online_gateway: "Agregar un método de pago en línea",
      cod_title: "Forma de pago contrareembolso",
      cod_msg:
        "Aceptar el pago después de la entrega de los pedidos. Puede confirmar los pagos contra reembolso de forma manual.",
      cash_title: "Métodos de pago en efectivo",
      cash_msg: "Este tipo de pago se utiliza en Selldone® POS.",
      dir_title: "Métodos de pago directo",
      dir_msg:
        "Puede aceptar el pago mediante transferencia directa de dinero, transferencia bancaria y otras formas tradicionales.",
    },
    step3: {
      msg: "Conecta Selldone a tu cuenta de Stripe con un solo clic en 30 segundos. Actualmente admitimos el proceso de configuración automática de Stripe. Ve a la pestaña de tu pasarela, agrega Stripe y haz clic en el botón «<b>Conectar automáticamente a Stripe</b>».",
      my_gateways: "Mis pasarelas de pago",
    },
  },


  /**
   * @see SShopOnboardingCustomization
   */
  customize: {
    tour:{
      title:'Recorrido',
      subtitle:"Descubre lo que es posible aquí y no lo es en ningún otro lugar.",
      /**
       * @see BShopOnboardingTour
       */
      avocado:{
        title:"Avocado - vende sin agregar ningún producto",
        description: "Con Avocado, puedes ofrecer servicios o productos sin precios ni detalles predefinidos. Crea un formulario personalizado para que tus clientes soliciten servicios o productos. Cuando envíen la solicitud, podrás definir el precio y procesar el pago. Comparte el formulario en tus redes sociales para que los clientes puedan agregar artículos, subir imágenes y enviar pedidos fácilmente.",
        action:'Leer sobre Avocado',
      },
      marketplace:{
        title: "Mercado multivendedor y pago automático",
        description: "Crea un marketplace próspero con Selldone agregando varios vendedores. Los vendedores pueden listar sus productos y tú puedes definir una tasa de comisión para cada venta. Cuando un cliente realiza una compra, el vendedor recibe el pago directamente, gestiona el pedido desde su panel dedicado y tú ganas una comisión mediante la función de pago automático.",
        action:'Pago automático a vendedores',
      },
      business_model:{
        title: "Compatibilidad con modelos de negocio complejos",
        description:
            "Selldone admite modelos de negocio simples y complejos, lo que te permite adaptarte según sea necesario. Configura todo en segundo plano sin instalar complementos ni aplicaciones adicionales, garantizando transiciones y operaciones fluidas.",
      },
      gift_shopping:{
        title: "Restricción de ubicaciones de productos y compra de regalos",
        description:
            "Establece restricciones de ubicación para cada producto especificando varios países, códigos postales y ciudades. Esta función es perfecta para crear una experiencia personalizada de compra de regalos o limitar la disponibilidad de productos a ubicaciones específicas, como restaurantes.",

      }
    },

    template: {
      title: "Plantillas",
      msg: "¡Inicia tu tienda con nuestras plantillas prediseñadas! Diversifique fácilmente agregando varias páginas, cada una con su propio diseño único.",
      action:'Ver todas las plantillas...'

    },

    colors: {
      title: "Colores y diseño",

      msg: "¿Quiere adaptar la página de su producto y el diseño de su tienda para que se ajusten mejor a su visión? ¡Sumérgete en la sección de personalización de temas de tu tienda y observa cómo se desarrolla la magia sin esfuerzo!",

      action:'Personalizar colores y tema'

    },

  },

  /**
   * @see ShopOnboardingSetupBusinessTab
   */
  business: {
    step1: {
      title: "modelo de negocio",
      msg: "Cada negocio es único y, a menudo, requiere algo más que una simple tienda en línea. Defina su modelo de ingresos y nosotros nos encargaremos del resto sin problemas.",
    },
  },

  migration: {
    title: "Migración",
    shopify: {
      msg: "¡Cámbiate a Selldone sin problemas desde Shopify! Disfrute de una migración sencilla, funciones mejoradas y soluciones rentables para su tienda en línea.",
    },
    woocommerce: {
      msg: "¡Migre sin problemas sus productos WooCommerce a Selldone con solo unos pocos clics! Disfrute de un rendimiento mejorado, un diseño intuitivo y una atención al cliente de primer nivel. Actualice su experiencia de comercio electrónico ahora.",
    },
  },





};
