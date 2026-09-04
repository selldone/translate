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
  /** @see OLayoutFooter **/
  footer: {
    title: "El sistema operativo n.º 1 para empresas de rápido crecimiento",
    message:
      "Selldone, como plataforma de comercio electrónico, opera como un ángel para el crecimiento de los negocios. Ya sea que tenga una tienda física o una gran empresa, debe exhibir su producto en Internet. Selldone solía construir tiendas en línea con costos operativos más bajos y mayor flexibilidad. Además, proporcionamos una cadena de herramientas de gestión de comercio electrónico en constante mejora que obtiene nuevas funciones cada semana, como la integración de la administración de la tienda y la interfaz de programación visual para crear procesos de automatización personalizados o integración de IA.",

    contact_us: "Contáctenos",
    about_us: "Acerca de Selldone",
    supported_countries_and_payments:"Países y pagos admitidos",

    affiliate_program:"Programa de afiliados",
    business_idea:"Ideas de negocios",
    roadmap:"Hoja de ruta",
    apply_partner:"Solicitar socio",
    partner:{
      title: "Únase como socio",
      subtitle: "Ofrecemos a nuestros socios una oportunidad fantástica para expandir sus negocios y obtener ingresos mensuales consistentes."},
    add_service:"Agregar servicio",
    service:{
      title: "Integra tu servicio",
      subtitle: "¡Muestre su servicio a miles de empresas prósperas hoy y a millones más en el futuro!"},
    add_supplier:"Agregar proveedor",
    supplier:{
      title: "Únase como proveedor",
      subtitle: "Podemos ayudar a que sus productos lleguen a miles de tiendas locales y online activas en todo el mundo."},


    menu: [
      {
        title: "vendidohecho",
        items: [
          { title: "¿Qué es Selldone?", to: { name: "WhatIsSelldone"} },
          { title: "Comunidad Selldone", to: { name: "CommunityHomePage"} },
          { title: "Ayudar", to: { name: "ParticipantPage"} },

          { title: "Blog", to: { name: "Helps"} },
          { title: "FAQ", to: { name: "Blogs"} },

          { title: "Política de privacidad", to: { name: "Landing_Privacy"} },
          { title: "Términos de servicio", to: { name: "Landing_Terms"} },

        ],
      },
      {
        title: "Características",
        items: [
          { title: "características y beneficios", to: { name: "Landing_Features"} },
          { title: "Personal y Escala", to: { name: "Landing_Staffs"} },
          { title: "Herramientas de marketing", to: { name: "Landing_Marketing"} },
          {
            title: "Centro de procesamiento",
            to: { name: "Landing_OrderProcessing"},
          },
          { title: "Incentivos y Clubes", to: { name: "Landing_Incentives"} },
          { title: "Solución de pago", to: { name: "Landing_Auditing"} },
          { title: "Comercio IA", to: { name: "Landing_AI"} },
        ],
      },
      {
        title: "Soluciones",
        items: [
          { title: "🎨 Arte", to: { name: "Landing_NFT"} },
          { title: "🤝 gremio", to: { name: "GPageHome"} },
          { title: "🥑 Avocado", to: { name: "AvocadoHomePage"} },
          // { title: "Experts", to: { name: "ExpertsPage" } }, TODO: ACTIVATE AFTER RUNNING EXPERTS
          { title: "Motor SEO", to: { name: "DocHome"} },

          { title: "Informe inteligente", to: { name: "Landing_SEO"} },
          { title: "Alojamiento en la nube", to: { name: "Landing_SmartReport"} },
          { title: "Solución Logística", to: { name: "Landing_Cloud"} },
        ],
      },
      {
        title: "Servicios",
        items: [
          { title: "Planes y precios", to: { name: "OPagePrice"} },
          { title: "Aplicaciones", to: { name: "AppStore_List"} },
          { title: "Creador de aplicaciones", to: { name: "Landing_AppBuilder"} },
          { title: "Creador de páginas", to: { name: "Landing_PageBuilder"} },
          { title: "Automatización e IoT", to: { name: "Landing_Automation"} },
          { title: "Plataforma comunitaria", to: { name: "Landing_Community"} },
          { title: "Manuales de Ventas", to: { name: "Handbooks"} },
        ],
      },
    ],
    copyright:
      "El uso del contenido solo para fines no comerciales y con referencia a la fuente (enlace con Selldone.com). Todos los derechos reservados a Selldone Group.",

    red_alert:'Alerta roja',
  },

  admin_footer: {
    title: "Menú de acceso rápido:",
    boost_mode: "Aumentar",
    normal_mode: "Normal",
    boost_message: "¿Conexión a Internet deficiente y necesita ayuda?",
    dark: "Oscuro",
    light: "Luz",
    theme_message: "Activar inversión inteligente",
    preferences: "preferencias",
    select_language: "elige tu idioma",
    preferences_dialog: {
      title: "Preferencias del usuario",
    },
    invite_link: "Comparte este enlace único para invitar a nuevos miembros",
  },

  admin_shop_footer: {
    title: "Panel de acceso rápido de {shop_name}",
  },


  /**
   * @see SelldonePressView
   */
  press_view:{
    on_all_review_websites:"En todos los sitios web de reseñas",
  }
};
