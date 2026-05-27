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
      title: "Beebid, lapsed ja mänguasjad",
      desc: "Lapsevankrid, mänguasjad, mängud, pusled, tegevusfiguurid",
    },
    Health: {
      title: "Tervis ja ilu",
      desc: "Apteek, heaolu, kosmeetika, lõhnad",
    },
    Media: {
      title: "Meedia ja mängud",
      desc: "Videomängud, filmid, muusika, raamatud",
    },
    Fashion: {
      title: "Rõivad, ehted ja kellad",
      desc: "Rõivad, jalanõud, kaelakeed, sõrmused, käevõrud, kellad",
    },
    Automotive: {
      title: "Autondus",
      desc: "Auto lisatarvikud, tööriistad, hooldus",
    },
    Electronics: {
      title: "Elektroonika",
      desc: "Mobiil, TV, heliseadmed, kaamera",
    },
    Computers: {
      title: "Arvutid",
      desc: "Sülearvutid, lauaarvutid, tarvikud, tarkvara",
    },
    Household: {
      title: "Kodused esmatarbed",
      desc: "Puhastusvahendid, vannituba, pesupesemine",
    },
    Garden: {
      title: "Aed ja tööriistad",
      desc: "Õuemööbel, aiatööriistad, taimed",
    },
    Food: {
      title: "Toit ja toidukaubad",
      desc: "Piimatooted, puuviljad, valmistoidud, liha, joogid",
    },
    Handmade: {
      title: "Käsitöö",
      desc: "Kollektsiooniesemed, maalitud kingad, skulptuurid, klaasikunst",
    },
    PetSupplies: {
      title: "Lemmikloomatarbed",
      desc: "Lemmikloomatoit, lemmikloomamänguasjad, lemmikloomahooldus",
    },
    Home: {
      title: "Kodu ja elustiil",
      desc: "Köögiseadmed, kodumööbel, sisustus",
    },
    Sports: {
      title: "Sport ja õuetegevused",
      desc: "Treening, telkimine, jalgrattad, vaba aeg",
    },
    Stationery: {
      title: "Kirjatarbed ja kontor",
      desc: "Kontoritarbed, koolitarbed, paberitooted",
    },
    Books: {
      title: "Raamatud",
      desc: "Ilukirjandus, aimekirjandus, õppekirjandus, koomiksid",
    },
    Marketplace: {
      title: "Kõige turg",
      desc: "Lai valik tooteid mitmest kategooriast",
    },
    Other: {
      title: "Muu...",
      desc: "Kinkekaardid, digitaalsed tooted, veebiteenused, kõik muu",
    },
  },

  partners: {
    title: "{name} teeb Selldone'iga koostööd",
    subtitle: "võrguettevõtete järgmise põlvkonna avamisel.",
    subtitle_official: "Avage järgmise põlvkonna veebiettevõtted.",

    create_new_shop: "Looge uus pood",
    select_a_shop: "Valige pood",
    apply_deal_to: "Rakenda tehingut {shop}",
    notifications: {
      success_apply: "Tehing edukalt aktiveeritud!",
    },
  },

  name: "Seadistamine",
  overview: {
    title: "Ülevaade",
    subtitle:
      "Saage ülevaade ettevõtte operatsioonisüsteemist ja avastage, kuidas see saab teie ettevõtet aidata.",
  },

  shop: {
    title: "Nullist tuluni",
    subtitle: "Minge järgmisele tasemele, täites need lihtsad sammud.",
  },

  open_website: "Ava minu veebisait",

  customize_theme: "Kohandage veebisaiti",
  setup_business: "Ettevõtte seadistamine",
  add_product: "Lisa toode",
  setup_shipping: "Kohaletoimetamise seadistamine",
  add_domain: "Lisa domeen",
  add_payment: "Ühendage makseväravaga",

  product: {
    step1: {
      title: "Valik 1. Lisa käsitsi",
      msg: "Saate oma poodi lisada füüsilisi tooteid, virtuaalseid üksusi, faile ja teenuseid ning alustada nende müüki.",
      action_on: "Lisage oma esimene toode",
      action_off: "Lisa rohkem tooteid",
      category:
        "Kategooriad on teie veebipoodide veebisaidi meistriteos teistega võrreldes. Jaotage kõik kategooriatesse ja korraldage, lisades kategooriaid ja haldades pukseerimisega.",
      add_category: "Lisa kategooria",
    },
    step2: {
      title: "Valik 2. Lisa Exceli abil",
      msg: "Kas teil on palju tooteid, näiteks 1 000 või 10 000 toodet? Ärge muretsege, importige kõik ühe toiminguga.",
      import_excel: "Import Exceliga",
      download_template: "Laadige mall alla",
    },
  },
  shipping: {
    step1: {
      title: "Samm 1. Määrake asukoht",
      msg: "Esimesel sammul määrake oma ladu (saadetiste päritolu). Seda teavet kasutatakse vahemaa, saatmiskulude ja saatmisteenuse piirkonnas viibimise kontrollimiseks.",
      edit_warehouse: "Redigeeri ladu",
      add_warehouse: "Lisage oma ladu",
    },
    step2: {
      title: "Samm 2. Aktiveerige saatmisviisid",
      msg: "Lisage oma poodi vähemalt üks tarneviis. Saate määrata hinna, lähtudes kaalust, vahemaast ja muudest parameetritest. Ärge unustage seada piiranguid vahemaa, kaalu ja pakkide suurusele, mida iga saatmisteenus toetab.",
      add_delivery: "Lisage saatmisviisid",
    },
  },

  domain: {
    buy_domain_step: {
      title: "1. samm. Ostke domeen",
      msg: "Kui teil pole veel isiklikku domeeni, on aeg osta oma domeen veebisaitidelt nagu namecheap.com .",
    },

    set_dns_step: {
      title: "2. samm. Seadistage DNS-kirjed",
      msg: "Palju õnne, nüüd tuleb teil vaid seadistada DNS oma domeeniteenuse pakkuja juures ja lisada domeen oma kontole.",
    },
  },

  payment: {
    step1: {
      title: "Hinnakujundus valuutad",
      msg: "Saate vastu võtta raha erinevates valuutades ja teie pood võib toetada rohkem kui ühte valuutat hinnakujunduses. Muide, kui määrate oma poe valuutaks USD, saavad kliendid teie käest ostmiseks maksta mis tahes valuutas (nt USD, EUR, GBP jne).",
      manage_currencies: "Hinnakujunduse valuutade haldamine",
    },
    step2: {
      title: "Võta raha vastu",
      msg: "Lisage oma poes sularaha, otseülekanne ja muud saadaolevad makseviisid.",
      online_title: "Online makseviisid",
      online_msg:
        "Aktsepteerige makseid kaartidega, uute pangarakendustega, osta-kohe-maksa-hiljem ja paljude muude veebimakseviisidega.",
      add_online_gateway: "Lisage võrgumakseviis",
      cod_title: "Kättetoimetamise makseviis",
      cod_msg:
        "Nõustuge maksega pärast tellimuste kohaletoimetamist. Sularahamakseid saate käsitsi kinnitada.",
      cash_title: "Sularahas makseviisid",
      cash_msg: "Seda tüüpi makset kasutatakse Selldone® POS-is.",
      dir_title: "Otsemakse viisid",
      dir_msg:
        "Saate vastu võtta makseid otsese rahaülekandega, pangaülekandega ja muudel traditsioonilistel viisidel.",
    },
    step3: {
      msg: "Ühendage Selldone oma Stripe’i kontoga vaid ühe klõpsuga 30 sekundi jooksul. Praegu toetame Stripe’i automaatse seadistamise protsessi. Minge oma makselüüsi vahekaardile, lisage Stripe ja klõpsake nuppu „<b>Ühenda Stripe’iga automaatselt</b>”.",
      my_gateways: "Minu makseväravad",
    },
  },


  /**
   * @see SShopOnboardingCustomization
   */
  customize: {
    tour:{
      title:'Tutvustus',
      subtitle:"Avastage, mis on siin võimalik ja mida mujal ei ole.",
      /**
       * @see BShopOnboardingTour
       */
      avocado:{
        title:"Avocado - müüge ilma ühtegi toodet lisamata",
        description: "Avocado abil saate pakkuda teenuseid või tooteid ilma eelmääratud hindade või detailideta. Looge kohandatud vorm, mille kaudu kliendid saavad teenuseid või tooteid taotleda. Kui nad taotluse esitavad, saate määrata hinna ja töödelda makse. Jagage vormi sotsiaalmeedias, et kliendid saaksid lihtsalt lisada tooteid, üles laadida pilte ja esitada tellimusi.",
        action:'Lugege Avocado kohta',
      },
      marketplace:{
        title: "Mitme müüjaga turg ja automaatne väljamakse",
        description: "Looge Selldone’iga edukas turg, lisades mitu müüjat. Müüjad saavad oma tooteid loetleda ja teie saate määrata igale müügile komisjonitasu. Kui klient ostu sooritab, saab müüja makse otse, haldab tellimust oma paneeli kaudu ja teie teenite automaatse väljamakse funktsiooni abil komisjonitasu.",
        action:'Müüjate automaatne väljamakse',
      },
      business_model:{
        title: "Keerukate ärimudelite tugi",
        description:
            "Selldone toetab nii lihtsaid kui ka keerukaid ärimudeleid, võimaldades teil vajaduse järgi kohaneda. Seadistage kõik taustal ilma täiendavaid laiendusi või rakendusi installimata, tagades sujuvad üleminekud ja toimingud.",
      },
      gift_shopping:{
        title: "Toote asukohapiirangud ja kingiostud",
        description:
            "Määrake iga toote jaoks asukohapiirangud, täpsustades mitu riiki, postiindekseid ja linna. See funktsioon sobib suurepäraselt isikupärastatud kingiostu kogemuse loomiseks või toote saadavuse piiramiseks kindlatele asukohtadele, näiteks restoranidele.",

      }
    },

    template: {
      title: "Mallid",
      msg: "Käivitage oma pood meie eelnevalt koostatud mallidega! Mitmekesistage hõlpsalt, lisades mitu lehte, millest igaühel on oma ainulaadne disain.",
      action:'Kuva kõik mallid...'

    },

    colors: {
      title: "Värvid ja paigutus",

      msg: "Kas soovite kohandada oma tootelehte ja poe paigutust, et need sobiksid paremini teie visiooniga? Sukelduge oma poe teemade kohandamise jaotisesse ja vaadake, kuidas maagia vaevata avaneb!",

      action:'Kohanda värve ja teemat'

    },

  },

  /**
   * @see ShopOnboardingSetupBusinessTab
   */
  business: {
    step1: {
      title: "Ärimudel",
      msg: "Iga ettevõte on ainulaadne ja nõuab sageli enamat kui lihtsat veebipoodi. Määrake oma tulumudel ja meie tegeleme ülejäänu sujuvalt teie eest.",
    },
  },

  migration: {
    title: "Ränne",
    shopify: {
      msg: "Lülituge Shopifyst sujuvalt üle Selldone'ile! Nautige oma veebipoe lihtsat migratsiooni, täiustatud funktsioone ja kulutõhusaid lahendusi.",
    },
    woocommerce: {
      msg: "Viige oma WooCommerce'i tooted sujuvalt üle Selldone'i vaid mõne hiireklõpsuga! Nautige täiustatud jõudlust, intuitiivset disaini ja tipptasemel kliendituge. Täiendage oma e-kaubanduse kogemust kohe.",
    },
  },





};
