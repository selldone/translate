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
      title: "Baby, børn og legetøj",
      desc: "Barnevogne, legetøj, spil, puslespil, actionfigurer",
    },
    Health: {
      title: "Sundhed og skønhed",
      desc: "Apotek, velvære, kosmetik, dufte",
    },
    Media: {
      title: "Medier og spil",
      desc: "Videospil, film, musik, bøger",
    },
    Fashion: {
      title: "Tøj, smykker og ure",
      desc: "Tøj, sko, halskæder, ringe, armbånd, ure",
    },
    Automotive: {
      title: "Biler",
      desc: "Biltilbehør, værktøj, vedligeholdelse",
    },
    Electronics: {
      title: "Elektronik",
      desc: "Mobil, TV, lydenheder, kamera",
    },
    Computers: {
      title: "Computere",
      desc: "Bærbare, stationære, tilbehør, software",
    },
    Household: {
      title: "Husholdningsartikler",
      desc: "Rengøringsmidler, badeværelse, tøjvask",
    },
    Garden: {
      title: "Have og værktøj",
      desc: "Udendørsmøbler, haveredskaber, planter",
    },
    Food: {
      title: "Mad og dagligvarer",
      desc: "Mejerivarer, frugt, færdigmad, kød, drikkevarer",
    },
    Handmade: {
      title: "Håndlavet",
      desc: "Samlerobjekter, malede sko, skulpturer, glaskunst",
    },
    PetSupplies: {
      title: "Kæledyrsartikler",
      desc: "Kæledyrsfoder, kæledyrslegetøj, kæledyrspleje",
    },
    Home: {
      title: "Hjem og bolig",
      desc: "Køkkenapparater, boligindretning, dekor",
    },
    Sports: {
      title: "Sport og friluftsliv",
      desc: "Træning, camping, cykler, fritid",
    },
    Stationery: {
      title: "Kontorartikler",
      desc: "Kontorartikler, skoleartikler, papirprodukter",
    },
    Books: {
      title: "Bøger",
      desc: "Skønlitteratur, faglitteratur, undervisning, tegneserier",
    },
    Marketplace: {
      title: "Markedsplads for alt",
      desc: "Et bredt udvalg af produkter fra flere kategorier",
    },
    Other: {
      title: "Andet...",
      desc: "Gavekort, digitale produkter, onlinetjenester, hvad som helst",
    },
  },

  partners: {
    title: "{name} samarbejder med Selldone",
    subtitle: "med at åbne næste generation af onlinevirksomheder.",
    subtitle_official: "Åbn næste generation af onlinevirksomheder.",

    create_new_shop: "Opret en ny butik",
    select_a_shop: "Vælg en butik",
    apply_deal_to: "Anvend tilbud til {shop}",
    notifications: {
      success_apply: "Aftalen blev aktiveret!",
    },
  },

  name: "Opsætning",
  overview: {
    title: "Oversigt",
    subtitle:
      "Få indsigt i forretningsstyresystemet, og opdag hvordan det kan hjælpe din virksomhed.",
  },

  shop: {
    title: "Fra nul til omsætning",
    subtitle: "Gå til næste niveau ved at fuldføre disse enkle trin.",
  },

  open_website: "Åbn min hjemmeside",

  customize_theme: "Tilpas hjemmeside",
  setup_business: "Opret virksomhed",
  add_product: "Tilføj produkt",
  setup_shipping: "Opsætning af forsendelse",
  add_domain: "Tilføj domæne",
  add_payment: "Opret forbindelse til en betalingsgateway",

  product: {
    step1: {
      title: "Mulighed 1. Tilføj manuelt",
      msg: "Du kan tilføje fysiske produkter, virtuelle varer, filer og tjenester til din butik og begynde at sælge dem.",
      action_on: "Tilføj dit første produkt",
      action_off: "Tilføj flere produkter",
      category:
        "Kategorier får din webshop til at skille sig ud fra andre. Hold alt kategoriseret og organiseret ved at tilføje kategorier og administrere dem med træk og slip.",
      add_category: "Tilføj kategori",
    },
    step2: {
      title: "Mulighed 2. Tilføj med Excel",
      msg: "Har du mange produkter, såsom 1K, 10K varer? Bare rolig importer det hele kun ved én handling.",
      import_excel: "Importer med Excel",
      download_template: "Download skabelon",
    },
  },
  shipping: {
    step1: {
      title: "Trin 1. Indstil placering",
      msg: "Ved det første trin skal du indstille dit lager (forsendelsesoprindelse). Disse oplysninger bruges til at beregne afstand, forsendelsesomkostninger og check for at være i forsendelsesserviceområdet.",
      edit_warehouse: "Rediger lager",
      add_warehouse: "Tilføj dit lager",
    },
    step2: {
      title: "Trin 2. Aktiver forsendelsesmetoder",
      msg: "Tilføj mindst én forsendelsesmetode til din butik. Du kan indstille priser baseret på vægt, afstand og andre parametre. Glem ikke at sætte grænser for afstand, vægt og størrelse af pakker, som hver forsendelsesservice understøtter.",
      add_delivery: "Tilføj forsendelsesmetoder",
    },
  },

  domain: {
    buy_domain_step: {
      title: "Trin 1. Køb et domæne",
      msg: "Hvis du endnu ikke har dit personlige domæne, er det tid til at købe dit eget domæne fra websteder som namecheap.com.",
    },

    set_dns_step: {
      title: "Trin 2. Opsæt DNS-poster",
      msg: "Tillykke, nu skal du blot konfigurere DNS hos din domæneudbyder og føje domænet til din konto.",
    },
  },

  payment: {
    step1: {
      title: "Prisfastsættelse af valutaer",
      msg: "Du kan acceptere penge i forskellige valutaer, og din butik kan understøtte mere end én valuta til prisfastsættelse. Forresten, hvis du indstiller din butiksvaluta til USD, kan kunder betale i alle valutaer som USD, EUR, GBP osv. for at købe hos dig.",
      manage_currencies: "Administrer prisfastsættelsesvalutaer",
    },
    step2: {
      title: "Accepter penge",
      msg: "Tilføj efterkrav, direkte pengeoverførsel og andre tilgængelige betalingsmetoder i din butik.",
      online_title: "Online betalingsmetoder",
      online_msg:
        "Accepter betalinger med kort, nye bankapps, køb nu og betal senere-tjenester og mange andre onlinebetalingsmetoder.",
      add_online_gateway: "Tilføj en online betalingsmetode",
      cod_title: "Betalingsmetode efterkrav",
      cod_msg:
        "Accepter betaling efter levering af ordrer. Du kan bekræfte betalinger ved efterkrav manuelt.",
      cash_title: "Kontant betalingsmetoder",
      cash_msg: "Denne type betaling bruges i Selldone® POS.",
      dir_title: "Direkte betalingsmetoder",
      dir_msg:
        "Du kan acceptere betaling ved direkte pengeoverførsel, bankoverførsel og andre traditionelle måder.",
    },
    step3: {
      msg: "Forbind Selldone til din Stripe-konto med et enkelt klik på 30 sekunder. Vi understøtter i øjeblikket den automatiske konfigurationsproces via Stripe. Gå til fanen for din betalingsgateway, tilføj Stripe, og klik på knappen '<b>Opret automatisk forbindelse til Stripe</b>'.",
      my_gateways: "Mine betalingsgateways",
    },
  },


  /**
   * @see SShopOnboardingCustomization
   */
  customize: {
    tour:{
      title:'Rundvisning',
      subtitle:"Opdag, hvad der er muligt her, og som ikke findes andre steder.",
      /**
       * @see BShopOnboardingTour
       */
      avocado:{
        title:"Avocado - sælg uden at tilføje noget produkt",
        description: "Med Avocado kan du tilbyde tjenester eller produkter uden foruddefinerede priser eller detaljer. Opret en tilpasset formular, hvor dine kunder kan anmode om tjenester eller produkter. Når de sender deres anmodning, kan du angive prisen og behandle betalingen. Del formularen på dine sociale medier, så kunder nemt kan tilføje varer, uploade billeder og sende ordrer.",
        action:'Læs om Avocado',
      },
      marketplace:{
        title: "Markedsplads med flere leverandører og automatisk udbetaling",
        description: "Opbyg en blomstrende markedsplads med Selldone ved at tilføje flere leverandører. Leverandører kan liste deres produkter, og du kan angive en kommissionssats for hvert salg. Når en kunde køber, modtager leverandøren betalingen direkte, administrerer ordren via sit dedikerede panel, og du tjener kommission via funktionen til automatisk udbetaling.",
        action:'Automatisk udbetaling til leverandører',
      },
      business_model:{
        title: "Understøt komplekse forretningsmodeller",
        description:
            "Selldone understøtter både enkle og komplekse forretningsmodeller, så du kan tilpasse dig efter behov. Konfigurer alt bag kulisserne uden at installere ekstra plugins eller apps, og sikr problemfri overgange og drift.",
      },
      gift_shopping:{
        title: "Produktlokationsbegrænsninger og gaveindkøb",
        description:
            "Angiv lokationsbegrænsninger for hvert produkt ved at specificere flere lande, postnumre og byer. Denne funktion er perfekt til at skabe en personlig gaveindkøbsoplevelse eller begrænse produkttilgængelighed til bestemte lokationer, såsom restauranter.",

      }
    },

    template: {
      title: "Skabeloner",
      msg: "Kickstart din butik med vores færdigbyggede skabeloner! Du kan nemt diversificere ved at tilføje flere sider, der hver kan prale af sit eget unikke design.",
      action:'Se alle skabeloner...'

    },

    colors: {
      title: "Farver og layout",

      msg: "Ønsker du at skræddersy din produktside og butikslayout, så den passer bedre til din vision? Dyk ned i tematilpasningssektionen i din butik, og se magien udfolde sig ubesværet!",

      action:'Tilpas farver og tema'

    },

  },

  /**
   * @see ShopOnboardingSetupBusinessTab
   */
  business: {
    step1: {
      title: "Forretningsmodel",
      msg: "Hver virksomhed er unik og kræver ofte mere end blot en grundlæggende netbutik. Definer din indtægtsmodel, så klarer vi resten problemfrit for dig.",
    },
  },

  migration: {
    title: "Migration",
    shopify: {
      msg: "Skift til Sellone problemfrit fra Shopify! Nyd ubesværet migrering, forbedrede funktioner og omkostningseffektive løsninger til din onlinebutik.",
    },
    woocommerce: {
      msg: "Migrér dine WooCommerce-produkter problemfrit til Selldone med blot et par klik! Nyd forbedret ydeevne, intuitivt design og kundesupport på højeste niveau. Opgrader din e-handelsoplevelse nu.",
    },
  },





};
