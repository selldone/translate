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
      title: "Haurtxoak, haurrak eta jostailuak",
      desc: "Haur-kotxeak, jostailuak, jokoak, puzzleak, akzio-figurak",
    },
    Health: {
      title: "Osasuna eta edertasuna",
      desc: "Farmazia, ongizatea, kosmetika, lurrinak",
    },
    Media: {
      title: "Media eta jokoak",
      desc: "Bideo-jokoak, filmak, musika, liburuak",
    },
    Fashion: {
      title: "Arropa, bitxiak eta erlojuak",
      desc: "Arropa, oinetakoak, lepokoa, eraztuna, eskumuturrekoa, erlojua",
    },
    Automotive: {
      title: "Automozioa",
      desc: "Auto osagarriak, tresnak, mantentzea",
    },
    Electronics: {
      title: "Elektronika",
      desc: "Mugikorra, TV, audio-gailuak, kamera",
    },
    Computers: {
      title: "Ordenagailuak",
      desc: "Ordenagailu eramangarriak, mahaigainekoak, osagarriak, softwarea",
    },
    Household: {
      title: "Etxeko oinarrizkoak",
      desc: "Garbiketa produktuak, bainugela, arropa-garbiketa",
    },
    Garden: {
      title: "Lorategia eta tresnak",
      desc: "Kanpoko altzariak, lorezaintza tresnak, landareak",
    },
    Food: {
      title: "Janaria eta elikagaiak",
      desc: "Esnekiak, fruta, prestatutako janaria, haragia, edariak",
    },
    Handmade: {
      title: "Eskuz egina",
      desc: "Bildumagarriak, margotutako oinetakoak, eskulturak, beira-artea",
    },
    PetSupplies: {
      title: "Maskotentzako hornigaiak",
      desc: "Maskoten janaria, maskoten jostailuak, maskoten zaintza",
    },
    Home: {
      title: "Etxea eta bizimodua",
      desc: "Sukaldeko etxetresnak, etxeko altzariak, dekorazioa",
    },
    Sports: {
      title: "Kirolak eta aire librea",
      desc: "Ariketa, kanpina, bizikletak, aisialdia",
    },
    Stationery: {
      title: "Paper-denda eta bulegoa",
      desc: "Bulegoko hornigaiak, eskolako hornigaiak, paper-produktuak",
    },
    Books: {
      title: "Liburuak",
      desc: "Fikzioa, ez-fikzioa, hezkuntzakoa, komikiak",
    },
    Marketplace: {
      title: "Denetariko merkatua",
      desc: "Kategoria anitzetako produktu aukera zabala",
    },
    Other: {
      title: "Beste batzuk...",
      desc: "Opari txartelak, produktu digitalak, lineako zerbitzuak, edozer",
    },
  },

  partners: {
    title: "{name} Selldone-rekin lankidetzan ari da",
    subtitle: "lineako negozioen hurrengo belaunaldia desblokeatzeko.",
    subtitle_official: "Desblokeatu lineako negozioen hurrengo belaunaldia.",

    create_new_shop: "Sortu denda berri bat",
    select_a_shop: "Hautatu denda bat",
    apply_deal_to: "Aplikatu eskaintza {shop}",
    notifications: {
      success_apply: "Aktibatu da akordioa!",
    },
  },

  name: "Konfigurazioa",
  overview: {
    title: "Ikuspegi orokorra",
    subtitle:
      "Lortu negozio-sistema eragilearen ikuspegia eta ezagutu nola lagun diezaiokeen zure negozioari.",
  },

  shop: {
    title: "Zerotik diru-sarreretara",
    subtitle: "Joan hurrengo mailara urrats erraz hauek betez.",
  },

  open_website: "Ireki nire webgunea",

  customize_theme: "Pertsonalizatu webgunea",
  setup_business: "Konfiguratu negozioa",
  add_product: "Gehitu produktua",
  setup_shipping: "Konfiguratu bidalketa",
  add_domain: "Gehitu domeinua",
  add_payment: "Konektatu ordainketa-pasabide batera",

  product: {
    step1: {
      title: "1 aukera. Gehitu eskuz",
      msg: "Produktu fisikoak, elementu birtualak, fitxategiak eta zerbitzuak gehi ditzakezu zure dendan eta saltzen has zaitezke.",
      action_on: "Gehitu zure lehen produktua",
      action_off: "Gehitu produktu gehiago",
      category:
        "Kategoriak zure online erosketa webgunearen maisulana dira besteekin alderatuta. Egin dena sailkatu eta antolatu kategoriak gehituz eta arrastatu eta jareginez kudeatuz.",
      add_category: "Gehitu Kategoria",
    },
    step2: {
      title: "2. aukera. Gehitu Excel-en bidez",
      msg: "Produktu asko dituzu, adibidez, 1K, 10K elementuak? Ez kezkatu inportatu guztiak ekintza bakarrarekin.",
      import_excel: "Excel bidez inportatu",
      download_template: "Deskargatu txantiloia",
    },
  },
  shipping: {
    step1: {
      title: "1. urratsa. Ezarri kokapena",
      msg: "Lehen urratsean, ezarri zure biltegia (bidalketaren jatorria). Informazio hori bidalketa zerbitzuaren eremuan egon behar den distantzia, bidalketa kostua eta egiaztapena kalkulatzeko erabiltzen da.",
      edit_warehouse: "Editatu biltegia",
      add_warehouse: "Gehitu zure biltegia",
    },
    step2: {
      title: "2. urratsa. Aktibatu bidalketa-metodoak",
      msg: "Gehitu gutxienez bidalketa-metodo bat zure dendan. Pisuaren, distantziaren eta beste parametro batzuen arabera ezar ditzakezu prezioak. Ez ahaztu bidalketa-zerbitzu bakoitzak onartzen dituen paketeen distantziari, pisuari eta tamainari buruzko mugak ezartzea.",
      add_delivery: "Gehitu bidalketa-metodoak",
    },
  },

  domain: {
    buy_domain_step: {
      title: "1. urratsa. Erosi domeinu bat",
      msg: "Oraindik zure domeinu pertsonalik ez baduzu, zure domeinua erosteko unea da namecheap.com bezalako webguneetan.",
    },

    set_dns_step: {
      title: "2. urratsa. Ezarri DNS erregistroak",
      msg: "Zorionak, orain egin behar duzun bakarra zure domeinu-zerbitzu hornitzailean DNS konfiguratzea eta domeinua zure kontura gehitzea da.",
    },
  },

  payment: {
    step1: {
      title: "Prezio-monetak",
      msg: "Dirua hainbat monetatan onar dezakezu eta zure dendak moneta bat baino gehiago onartzen ditu prezioak egiteko. Bide batez, zure dendako moneta USD gisa ezartzen baduzu, bezeroek USD, EUR, GBP eta abar bezalako dibisetan ordain dezakete zuregandik erosteko.",
      manage_currencies: "Kudeatu prezioen moneta",
    },
    step2: {
      title: "Onartu dirua",
      msg: "Gehitu eskudirua entregatzerakoan, zuzeneko diru-transferentzia eta erabilgarri dauden beste ordainketa-metodo batzuk zure dendan.",
      online_title: "Lineako ordainketa-metodoak",
      online_msg:
        "Onartu txartelen bidezko ordainketa, banku-aplikazio berriak, erosi-orain-ordaindu-geroago eta lineako beste hainbat ordainketa-metodo.",
      add_online_gateway: "Gehitu lineako ordainketa-metodo bat",
      cod_title: "Eskudirutan ordainketa modua",
      cod_msg:
        "Onartu ordainketa eskaerak entregatu ondoren. Eskudirua bidaltzeko ordainketak berretsi ditzakezu eskuz.",
      cash_title: "Eskudirutan ordaintzeko moduak",
      cash_msg: "Ordainketa mota hau Selldone® POS-n erabiltzen da.",
      dir_title: "Ordainketa zuzeneko moduak",
      dir_msg:
        "Ordainketa onar dezakezu zuzeneko diru-transferentzia, banku-diru transferentzia eta beste modu tradizionalen bidez.",
    },
    step3: {
      msg: "Konektatu Selldone zure Stripe kontura klik bakar batekin 30 segundotan. Une honetan, Stripe-ren konfigurazio automatikoaren prozesua onartzen dugu. Joan ordainketa-pasabidearen fitxara, gehitu Stripe eta egin klik «<b>Konektatu automatikoki Stripe-ra</b>» botoian.",
      my_gateways: "Nire ordainketa-pasabideak",
    },
  },


  /**
   * @see SShopOnboardingCustomization
   */
  customize: {
    tour:{
      title:'Bisita gidatua',
      subtitle:"Ezagutu hemen posible dena eta beste inon ez dagoena.",
      /**
       * @see BShopOnboardingTour
       */
      avocado:{
        title:"Avocado - saldu produkturik gehitu gabe",
        description: "Avocado-rekin, zerbitzuak edo produktuak eskain ditzakezu aurrez ezarritako preziorik edo xehetasunik gabe. Sortu formulario pertsonalizatu bat bezeroek zerbitzuak edo produktuak eskatzeko. Eskaera bidaltzen dutenean, prezioa ezarri eta ordainketa prozesatu dezakezu. Partekatu formularioa sare sozialetan, bezeroek elementuak gehitu, irudiak igo eta eskaerak erraz bidal ditzaten.",
        action:'Irakurri Avocado-ri buruz',
      },
      marketplace:{
        title: "Saltzaile anitzeko merkatua eta ordainketa automatikoa",
        description: "Eraiki merkatu oparoa Selldone-rekin hainbat saltzaile gehituz. Saltzaileek beren produktuak zerrendatu ditzakete, eta zuk salmenta bakoitzerako komisio-tasa ezar dezakezu. Bezero batek erosketa egiten duenean, saltzaileak ordainketa zuzenean jasotzen du, eskaera bere panel dedikatuan kudeatzen du, eta zuk komisioa irabazten duzu ordainketa automatikoaren funtzioaren bidez.",
        action:'Saltzaileentzako ordainketa automatikoa',
      },
      business_model:{
        title: "Negozio-eredu konplexuak onartu",
        description:
            "Selldone-k negozio-eredu sinpleak eta konplexuak onartzen ditu, behar denean egokitzeko aukera emanez. Konfiguratu guztia atzean gehigarri edo aplikazio gehigarririk instalatu gabe, trantsizio eta eragiketa leunak bermatuz.",
      },
      gift_shopping:{
        title: "Produktuen kokapen-murrizketak eta opari-erosketak",
        description:
            "Ezarri kokapen-murrizketak produktu bakoitzerako, hainbat herrialde, posta-kodeak eta hiri zehaztuz. Funtzio hau ezin hobea da opari-erosketa esperientzia pertsonalizatua sortzeko edo produktuen eskuragarritasuna kokapen jakinetara mugatzeko, hala nola jatetxeetarako.",

      }
    },

    template: {
      title: "Txantiloiak",
      msg: "Hasi zure denda aurrez eraikitako gure txantiloiekin! Dibertsifikatu erraz orrialde anitz gehituz, bakoitzak bere diseinu berezia duela.",
      action:'Ikusi txantiloi guztiak...'

    },

    colors: {
      title: "Koloreak eta diseinua",

      msg: "Zure produktuaren orria eta dendaren diseinua egokitu nahi dituzu zure ikuspegira hobeto egokitzeko? Murgil zaitez zure dendako gaia pertsonalizatzeko atalean eta ikusi magia esfortzurik gabe garatzen!",

      action:'Pertsonalizatu koloreak eta gaia'

    },

  },

  /**
   * @see ShopOnboardingSetupBusinessTab
   */
  business: {
    step1: {
      title: "Negozio Eredua",
      msg: "Negozio bakoitza bakarra da, eta askotan oinarrizko lineako denda bat baino gehiago eskatzen du. Definitu zure diru-sarreren eredua, eta gainerakoa ezin hobeto kudeatuko dugu.",
    },
  },

  migration: {
    title: "Migrazioa",
    shopify: {
      msg: "Aldatu Selldone-ra ezin hobeto Shopify-tik! Gozatu esfortzurik gabeko migrazioa, eginbide hobetuak eta irtenbide errentagarriak zure lineako dendarako.",
    },
    woocommerce: {
      msg: "Migratu zure WooCommerce produktuak Selldone-ra klik gutxi batzuetan! Gozatu errendimendu hobetua, diseinu intuitiboa eta goi mailako bezeroarentzako laguntza. Berritu zure merkataritza elektronikoko esperientzia orain.",
    },
  },





};
