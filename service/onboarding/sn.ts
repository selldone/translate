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
      title: "Vacheche, vana nematoyi",
      desc: "Ngoro dzevana, matoyi, mitambo, mapuzzle, mifananidzo yekutamba",
    },
    Health: {
      title: "Utano nerunako",
      desc: "Famasitiri, kugara zvakanaka, zvekuzora, zvinonhuwira",
    },
    Media: {
      title: "Midhiya nemitambo",
      desc: "Mitambo yevhidhiyo, mafirimu, mimhanzi, mabhuku",
    },
    Fashion: {
      title: "Zvipfeko, zvishongo nemawachi",
      desc: "Zvipfeko, shangu, maketani, mhete, mabracelet, wachi",
    },
    Automotive: {
      title: "Zvemotokari",
      desc: "Zvishongedzo zvemotokari, maturusi, kugadzirisa",
    },
    Electronics: {
      title: "Zvemagetsi",
      desc: "Nharembozha, TV, midziyo yeruzha, makamera",
    },
    Computers: {
      title: "Makombiyuta",
      desc: "Malaptop, madesktop, zvishongedzo, software",
    },
    Household: {
      title: "Zvinodiwa pamba",
      desc: "Zvekuchenesa, imba yekugezera, kuwacha",
    },
    Garden: {
      title: "Gadheni nematurusi",
      desc: "Fenicha yekunze, maturusi egadheni, zvirimwa",
    },
    Food: {
      title: "Chikafu nezvekutenga",
      desc: "Mukaka nezvigadzirwa zvawo, michero, chikafu chakagadzirwa, nyama, zvinwiwa",
    },
    Handmade: {
      title: "Zvakagadzirwa nemaoko",
      desc: "Zvinounganidzwa, shangu dzakapendwa, zvivezwa, unyanzvi hwegirazi",
    },
    PetSupplies: {
      title: "Zvekuchengeta mhuka dzinovaraidza",
      desc: "Chikafu chemhuka, matoyi emhuka, kutarisirwa kwemhuka",
    },
    Home: {
      title: "Imba nekurarama",
      desc: "Midziyo yekicheni, fenicha yepamba, kushongedza",
    },
    Sports: {
      title: "Mitambo nekunze",
      desc: "Maekisesaizi, kambi, mabhasikoro, kuzorora",
    },
    Stationery: {
      title: "Zvekunyora nehofisi",
      desc: "Zvekushandisa muhofisi, zvechikoro, zvigadzirwa zvemapepa",
    },
    Books: {
      title: "Mabhuku",
      desc: "Ngano, zvisiri ngano, zvedzidzo, makomiki",
    },
    Marketplace: {
      title: "Musika wezvose",
      desc: "Mhando dzakasiyana dzezvigadzirwa kubva mumapoka mazhinji",
    },
    Other: {
      title: "Zvimwe...",
      desc: "Makadhi ezvipo, zvigadzirwa zvedhijitari, masevhisi epamhepo, chero chinhu",
    },
  },

  partners: {
    title: "{name} inodyidzana neSelldone",
    subtitle: "mukuvhura chizvarwa chinotevera chebhizinesi repamhepo.",
    subtitle_official: "Vhura chizvarwa chinotevera chebhizinesi repamhepo.",

    create_new_shop: "Gadzira chitoro chitsva",
    select_a_shop: "Sarudza chitoro",
    apply_deal_to: "Isa dhiri ku{shop}",
    notifications: {
      success_apply: "Deal yakabudirira!",
    },
  },

  name: "Gadzirira",
  overview: {
    title: "Ongororo",
    subtitle:
      "Wana nzwisiso muBhizinesi OS uye tsvaga kuti ingabatsire sei bhizinesi rako.",
  },

  shop: {
    title: "Gadzirisa shopu yangu",
    subtitle: "Enda kune inotevera nhanho nekuzadzisa aya matanho akareruka.",
  },

  open_website: "Vhura webhusaiti yangu",

  customize_theme: "Gadzirisa Webhusaiti",
  setup_business: "Seta Bhizinesi",
  add_product: "Wedzera chigadzirwa",
  setup_shipping: "Seta kutumira",
  add_domain: "Wedzera Domain",
  add_payment: "Batanidza kugedhi rekubhadhara",

  product: {
    step1: {
      title: "Sarudzo 1. Wedzera nemaoko",
      msg: "Iwe unogona kuwedzera zvigadzirwa zvemuviri, chaiwo zvinhu, mafaera, uye masevhisi kuchitoro chako wotanga kuzvitengesa.",
      action_on: "Wedzera chigadzirwa chako chekutanga",
      action_off: "Wedzera zvimwe zvigadzirwa",
      category:
        "Zvikamu ndizvo hunyanzvi hwewebhusaiti yako yekutenga online zvichienzaniswa nevamwe. Ita kuti zvese zvigadziriswe uye zvakarongeka nekuwedzera zvikamu uye kutonga nekudhonza & kudonha.",
      add_category: "Wedzera Category",
    },
    step2: {
      title: "Sarudzo 2. Wedzera neExcel",
      msg: "Une zvigadzirwa zvakawanda, se1K, 10K zvinhu? Usanetseke pinza zvese nechiito chimwe chete.",
      import_excel: "Pinza neExcel",
      download_template: "Dhaunirodha template",
    },
  },
  shipping: {
    step1: {
      title: "Danho 1. Seta nzvimbo",
      msg: "Padanho rekutanga, isa imba yako yekuchengetera (mabviro ekutumira). Ruzivo urwu runoshandiswa kuverenga chinhambwe, mutengo wekutumira, uye kutarisa kuve munzvimbo yebasa rekutumira.",
      edit_warehouse: "Rongedza imba yekuchengetera",
      add_warehouse: "Wedzera dura rako",
    },
    step2: {
      title: "Nhanho 2. Shandisa nzira dzekutumira",
      msg: "Wedzera kana imwe nzira yekutumira kuchitoro chako. Iwe unogona kuseta mitengo zvichienderana nehuremu, chinhambwe, uye mamwe ma parameter. Usakanganwe kuseta miganhu yedaro, uremu, uye saizi yemapakeji anotsigirwa neimwe sevhisi yekutumira.",
      add_delivery: "Wedzera nzira dzekutumira",
    },
  },

  domain: {
    buy_domain_step: {
      title: "Danho 1. Tenga domain",
      msg: "Kana usati wava nedomain yako, yave nguva yekutenga domain yako kubva pamawebhusaiti akaita se namecheap.com.",
    },

    set_dns_step: {
      title: "Danho 2. Seta marekodhi eDNS",
      msg: "Makorokoto, zvino chaunofanira kuita kugadzirisa DNS kumupi webasa redomain yako uye kuwedzera domain kuakaundi yako.",
    },
  },

  payment: {
    step1: {
      title: "Mari dzemitengo",
      msg: "Iwe unogona kugamuchira mari mumari dzakasiyana, uye shopu yako inogona kutsigira inodarika mari imwe yemitengo. Nenzira, kana iwe ukaisa mari yako yechitoro kuUSD, vatengi vanogona kubhadhara mune chero mari seUSD, EUR, GBP, nezvimwewo, kutenga kubva kwauri.",
      manage_currencies: "Tonga mari dzemitengo",
    },
    step2: {
      title: "Bvuma mari",
      msg: "Wedzera mari pakutumira, kuendesa mari yakananga, uye dzimwe nzira dzekubhadhara dziripo muchitoro chako.",
      online_title: "Online kubhadhara nzira",
      online_msg:
        "Gamuchira kubhadhara nemakadhi, kunyorera kutsva kwebhangi, tenga-ikozvino-kubhadhara-gare gare, uye dzimwe nzira dzakawanda dzekubhadhara pamhepo.",
      add_online_gateway: "Wedzera nzira yekubhadhara pamhepo",
      cod_title: "Mari pakutumira nzira yekubhadhara",
      cod_msg:
        "Bvuma kubhadhara mushure mekutumira mirairo. Iwe unogona kusimbisa mari pakutumira kubhadhara iwe pachako.",
      cash_title: "Nzira dzekubhadhara mari",
      cash_msg: "Mhando yekubhadhara iyi inoshandiswa muSelldone POS.",
      dir_title: "Nzira dzekubhadhara dzakananga",
      dir_msg:
        "Iwe unogona kugamuchira kubhadhara nekuendesa mari yakananga, kuendesa mari kubhangi, uye dzimwe nzira dzechinyakare.",
    },
    step3: {
      msg: "Batanidza Selldone neakaundi yako yeStripe nekudzvanya kamwe chete mumasekonzi 30. Parizvino tiri kutsigira maitiro ekugadzirisa otomatiki neStripe. Enda kutabhu yegedhi rako, wedzera Stripe, wobva wadzvanya bhatani '<b>Batanidza otomatiki kuStripe</b>'.",
      my_gateways: "Magedhi angu ekubhadhara",
    },
  },


  /**
   * @see SShopOnboardingCustomization
   */
  customize: {
    tour:{
      title:'Rwendo',
      subtitle:"Ziva zvinogoneka pano zvisingawanikwi kumwe.",
      /**
       * @see BShopOnboardingTour
       */
      avocado:{
        title:"Avocado - Tengesa pasina kuwedzera chero chigadzirwa",
        description: "NeAvocado unogona kupa masevhisi kana zvigadzirwa pasina mitengo kana ruzivo rwakatarwa kare. Gadzira fomu rakagadzirirwa vatengi vako kuti vakumbire masevhisi kana zvigadzirwa. Kana vatumira chikumbiro chavo, unogona kuseta mutengo uye kugadzirisa mubhadharo. Govera fomu pasocial media yako kuti vatengi vawedzere zvinhu, vaise mifananidzo uye vatumire maodha zviri nyore.",
        action:'Verenga nezve Avocado',
      },
      marketplace:{
        title: "Musika wevatengesi vakawanda uye kubhadhara otomatiki",
        description: "Vaka musika unokura neSelldone nekuwedzera vatengesi vakawanda. Vatengesi vanogona kunyora zvigadzirwa zvavo, uye iwe unogona kuseta chikamu chekomisheni pakutengesa kwega kwega. Kana mutengi atenga, mutengesi anogamuchira mubhadharo zvakananga, anogadzirisa odha kuburikidza nepaneru yake yakatsaurirwa, uye iwe unowana komisheni kuburikidza nechinhu chekubhadhara otomatiki.",
        action:'Kubhadhara vatengesi otomatiki',
      },
      business_model:{
        title: "Tsigira mamodheru akaomarara ebhizinesi",
        description:
            "Selldone inotsigira mamodheru ari nyore uye akaomarara ebhizinesi, ichikubvumira kugadzirisa sezvinodiwa. Gadzirisa zvese kumashure usingaisi mapulagini kana maapp ekuwedzera, kuti kuchinja nekushanda kuve nyore.",
      },
      gift_shopping:{
        title: "Kurambidza nzvimbo dzezvigadzirwa uye kutenga zvipo",
        description:
            "Seta zvirambidzo zvenzvimbo pachigadzirwa chimwe nechimwe nekutsanangura nyika dzakawanda, macode eZIP nemaguta. Chinhu ichi chakakodzera kugadzira ruzivo rwekutenga zvipo rwakasarudzika kana kudzikamisa kuwanikwa kwezvigadzirwa kunzvimbo dzakati, senge maresitorendi.",

      }
    },

    template: {
      title: "Matemplate",
      msg: "Tanga chitoro chako nematemu edu ekare akavakwa! Nyatsosiyanisa nekuwedzera akawanda mapeji, rimwe nerimwe richizvikudza rakasiyana dhizaini.",
      action:'Ona matemplate ese...'

    },

    colors: {
      title: "Mavara nemarongerwo",

      msg: "Uri kutsvaga kugadzirisa yako chigadzirwa peji uye dhizaini yechitoro kuti ikwane chiono chako? Dive muchikamu chekugadzirisa dingindira muchitoro chako uye tarisa mashiripiti achiitika zvisingaite!",

      action:'Gadzirisa mavara nedingindira'

    },

  },

  /**
   * @see ShopOnboardingSetupBusinessTab
   */
  business: {
    step1: {
      title: "Muenzaniso webhizinesi",
      msg: "Bhizinesi rega rega rakasiyana, uye rinowanzoda zvinopfuura kungoita zvekutanga online chitoro. Tsanangura mari yako modhi, uye isu tichakubata zvisina mutsetse zvimwe zvese kwauri.",
    },
  },

  migration: {
    title: "Kutama",
    shopify: {
      msg: "Chinja kuSelldone zvisina musono kubva kuShopify! Nakidzwa nekutama-tama kusingaite, maficha akavandudzwa, uye zvinodhura zvinogadzirisa zvechitoro chako chepamhepo.",
    },
    woocommerce: {
      msg: "Fambisa zvigadzirwa zvako zveWooCommerce kuSelldone zviri nyore nemaklik mashoma chete! Nakidzwa nekuita kwakavandudzwa, dhizaini iri nyore kunzwisisa uye rutsigiro rwevatengi rwepamusoro. Simudzira ruzivo rwako rwekutengeserana pamhepo izvozvi.",
    },
  },





};
