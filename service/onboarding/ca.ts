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
      title: "Nadons, infants i joguines",
      desc: "Cotxets, joguines, jocs, trencaclosques, figures d'acció",
    },
    Health: {
      title: "Salut i bellesa",
      desc: "Farmàcia, benestar, cosmètica, fragàncies",
    },
    Media: {
      title: "Mitjans i jocs",
      desc: "Videojocs, pel·lícules, música, llibres",
    },
    Fashion: {
      title: "Roba, joieria i rellotges",
      desc: "Roba, sabates, collarets, anells, polseres, rellotges",
    },
    Automotive: {
      title: "Automoció",
      desc: "Accessoris de cotxe, eines, manteniment",
    },
    Electronics: {
      title: "Electrònica",
      desc: "Mòbils, TV, dispositius d'àudio, càmeres",
    },
    Computers: {
      title: "Ordinadors",
      desc: "Portàtils, ordinadors de sobretaula, accessoris, programari",
    },
    Household: {
      title: "Articles essencials per a la llar",
      desc: "Productes de neteja, bany, bugaderia",
    },
    Garden: {
      title: "Jardí i eines",
      desc: "Mobles d'exterior, eines de jardineria, plantes",
    },
    Food: {
      title: "Alimentació i queviures",
      desc: "Làctics, fruita, menjar preparat, carn, begudes",
    },
    Handmade: {
      title: "Fet a mà",
      desc: "Objectes de col·lecció, sabates pintades, escultures, art en vidre",
    },
    PetSupplies: {
      title: "Subministraments per a mascotes",
      desc: "Menjar per a mascotes, joguines, cura de mascotes",
    },
    Home: {
      title: "Llar i vida",
      desc: "Electrodomèstics de cuina, mobles de la llar, decoració",
    },
    Sports: {
      title: "Esports i aire lliure",
      desc: "Exercici, càmping, bicicletes, lleure",
    },
    Stationery: {
      title: "Papereria i oficina",
      desc: "Material d'oficina, material escolar, productes de paper",
    },
    Books: {
      title: "Llibres",
      desc: "Ficció, no-ficció, educatius, còmics",
    },
    Marketplace: {
      title: "Mercat de tot",
      desc: "Una gran varietat de productes de múltiples categories",
    },
    Other: {
      title: "Altres...",
      desc: "Targetes regal, productes digitals, serveis en línia, qualsevol cosa",
    },
  },

  partners: {
    title: "{name} s'associa amb Selldone",
    subtitle: "per desbloquejar la propera generació de negocis en línia.",
    subtitle_official: "Desbloqueja la propera generació de negocis en línia.",

    create_new_shop: "Crea una botiga nova",
    select_a_shop: "Seleccioneu una botiga",
    apply_deal_to: "Aplica l'oferta a {shop}",
    notifications: {
      success_apply: "Oferta activada correctament!",
    },
  },

  name: "Configuració",
  overview: {
    title: "Visió general",
    subtitle:
      "Obtén informació sobre el sistema operatiu empresarial i descobreix com pot ajudar el teu negoci.",
  },

  shop: {
    title: "De zero a ingressos",
    subtitle: "Passeu al següent nivell completant aquests senzills passos.",
  },

  open_website: "Obre el meu lloc web",

  customize_theme: "Personalitza el lloc web",
  setup_business: "Configuració de negocis",
  add_product: "Afegeix producte",
  setup_shipping: "Configura l'enviament",
  add_domain: "Afegeix domini",
  add_payment: "Connecteu-vos a una passarel·la de pagament",

  product: {
    step1: {
      title: "Opció 1. Afegeix manualment",
      msg: "Podeu afegir productes físics, articles virtuals, fitxers i serveis a la vostra botiga i començar a vendre'ls.",
      action_on: "Afegeix el teu primer producte",
      action_off: "Afegeix més productes",
      category:
        "Les categories fan destacar el teu lloc de compres en línia davant dels altres. Mantén-ho tot categoritzat i ordenat afegint categories i gestionant-les amb arrossegar i deixar anar.",
      add_category: "Afegeix una categoria",
    },
    step2: {
      title: "Opció 2. Afegir per Excel",
      msg: "Teniu molts productes, com ara 1K, 10K articles? No us preocupeu per importar-ho tot amb una acció.",
      import_excel: "Importació per Excel",
      download_template: "Descarrega la plantilla",
    },
  },
  shipping: {
    step1: {
      title: "Pas 1. Establiu la ubicació",
      msg: "En el primer pas, configureu el vostre magatzem (origen de l'enviament). Aquesta informació s'utilitza per calcular la distància, el cost d'enviament i el control per estar a l'àrea de servei d'enviament.",
      edit_warehouse: "Edita magatzem",
      add_warehouse: "Afegeix el teu magatzem",
    },
    step2: {
      title: "Pas 2. Activa els mètodes d'enviament",
      msg: "Afegiu almenys un mètode d'enviament a la vostra botiga. Podeu establir el preu en funció del pes, la distància i altres paràmetres. No oblideu establir límits de distància, pes i mida dels paquets que admet cada servei d'enviament.",
      add_delivery: "Afegeix mètodes d'enviament",
    },
  },

  domain: {
    buy_domain_step: {
      title: "Pas 1. Compra un domini",
      msg: "Si encara no tens un domini personal, és hora de comprar el teu propi domini en llocs com namecheap.com.",
    },

    set_dns_step: {
      title: "Pas 2. Configura els registres DNS",
      msg: "Enhorabona, ara només has de configurar el DNS al teu proveïdor de serveis de domini i afegir el domini al teu compte.",
    },
  },

  payment: {
    step1: {
      title: "Preus de monedes",
      msg: "Podeu acceptar diners en diferents monedes i la vostra botiga admet més d'una moneda per fixar els preus. Per cert, si configureu la moneda de la vostra botiga en USD, els clients podran pagar en qualsevol moneda, com ara USD, EUR, GBP, etc., per comprar-vos-hi.",
      manage_currencies: "Gestioneu les monedes de preus",
    },
    step2: {
      title: "Accepta diners",
      msg: "Afegiu efectiu a l'entrega, transferència directa de diners i altres mètodes de pagament disponibles a la vostra botiga.",
      online_title: "Mètodes de pagament en línia",
      online_msg:
        "Accepta pagaments amb targetes, noves aplicacions bancàries, serveis de compra ara i paga després, i molts altres mètodes de pagament en línia.",
      add_online_gateway: "Afegiu un mètode de pagament en línia",
      cod_title: "Forma de pagament contra reemborsament",
      cod_msg:
        "Acceptar el pagament després del lliurament de les comandes. Podeu confirmar els pagaments contra reemborsament manualment.",
      cash_title: "Mètodes de pagament en efectiu",
      cash_msg: "Aquest tipus de pagament s'utilitza a Selldone® TPV.",
      dir_title: "Mètodes de pagament directe",
      dir_msg:
        "Podeu acceptar el pagament mitjançant transferència directa de diners, transferència bancària de diners i altres maneres tradicionals.",
    },
    step3: {
      msg: "Connecta Selldone al teu compte de Stripe amb un sol clic en 30 segons. Actualment admetem el procés de configuració automàtica de Stripe. Ves a la pestanya de la teva passarel·la de pagament, afegeix Stripe i fes clic al botó '<b>Connexió automàtica amb Stripe</b>'.",
      my_gateways: "Les meves passarel·les de pagament",
    },
  },


  /**
   * @see SShopOnboardingCustomization
   */
  customize: {
    tour:{
      title:'Visita guiada',
      subtitle:"Descobreix què és possible aquí i no ho és enlloc més.",
      /**
       * @see BShopOnboardingTour
       */
      avocado:{
        title:"Avocado - ven sense afegir cap producte",
        description: "Amb Avocado pots oferir serveis o productes sense preus ni detalls predefinits. Crea un formulari personalitzat perquè els teus clients sol·licitin serveis o productes. Un cop enviïn la sol·licitud, pots establir el preu i processar el pagament. Comparteix el formulari a les xarxes socials perquè els clients puguin afegir articles, pujar imatges i enviar comandes fàcilment.",
        action:'Llegeix sobre Avocado',
      },
      marketplace:{
        title: "Mercat amb múltiples venedors i pagament automàtic",
        description: "Crea un mercat pròsper amb Selldone afegint múltiples venedors. Els venedors poden publicar els seus productes, i tu pots definir una comissió per cada venda. Quan un client fa una compra, el venedor rep el pagament directament, gestiona la comanda des del seu panell dedicat, i tu guanyes una comissió mitjançant la funció de pagament automàtic.",
        action:'Pagament automàtic als venedors',
      },
      business_model:{
        title: "Suport per a models de negoci complexos",
        description:
            "Selldone admet models de negoci simples i complexos, i et permet adaptar-te segons calgui. Configura-ho tot entre bastidors sense instal·lar connectors o aplicacions addicionals, assegurant transicions i operacions fluides.",
      },
      gift_shopping:{
        title: "Restriccions de ubicació de productes i compra de regals",
        description:
            "Estableix restriccions d'ubicació per a cada producte indicant diversos països, codis postals i ciutats. Aquesta funció és perfecta per crear una experiència personalitzada de compra de regals o limitar la disponibilitat del producte a ubicacions concretes, com ara restaurants.",

      }
    },

    template: {
      title: "Plantilles",
      msg: "Posa en marxa la teva botiga amb les nostres plantilles prefabricades! Diversifiqueu fàcilment afegint diverses pàgines, cadascuna amb el seu propi disseny únic.",
      action:'Mostra totes les plantilles...'

    },

    colors: {
      title: "Colors i disposició",

      msg: "Voleu adaptar la vostra pàgina de producte i el disseny de la vostra botiga per adaptar-vos millor a la vostra visió? Submergeix-te a la secció de personalització del tema de la teva botiga i mira com es desenvolupa la màgia sense esforç!",

      action:'Personalitza colors i tema'

    },

  },

  /**
   * @see ShopOnboardingSetupBusinessTab
   */
  business: {
    step1: {
      title: "Model de negoci",
      msg: "Cada negoci és únic i sovint requereix més que una botiga en línia bàsica. Definiu el vostre model d'ingressos i nosaltres ens encarreguem de la resta de manera perfecta.",
    },
  },

  migration: {
    title: "Migració",
    shopify: {
      msg: "Canvia a Selldone sense problemes des de Shopify! Gaudeix d'una migració sense esforç, de funcions millorades i de solucions rendibles per a la teva botiga en línia.",
    },
    woocommerce: {
      msg: "Migreu perfectament els vostres productes WooCommerce a Selldone amb només uns quants clics! Gaudeix d'un rendiment millorat, un disseny intuïtiu i una atenció al client de primer nivell. Actualitzeu ara la vostra experiència de comerç electrònic.",
    },
  },





};
