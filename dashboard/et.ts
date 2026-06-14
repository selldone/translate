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
    pay_today: "Tänane makse",
    pay_yesterday: "Eilne makse",
    pay_last30days: "Viimase 30 päeva makse",
    create_a_shop: "Loo pood",
    start_free: "Alusta tasuta",
    featured_apps: "Esiletõstetud rakendused",
    more_apps: "Rohkem rakendusi",
    my_public_profile: "Minu avalik profiilileht",
    product_admin: "Tootehaldus",
    make_money_affiliate: "Raha teenida",
    see_live_shop: "Vaata aktiivset poodi",
    see_live_product: "Vaata aktiivset toodet",
    has_inputs: "Sisendid olemas",
    main_domain: "Peamine domeen",
    domains: "Domeenid",
    home_page: "Avaleht",
    google_icon_font_sample: "Google fondi näidis",
    fontawesome_icon_font_sample: "Fontawesome (V6) näidis",
  },

  numbers: {
    infinite: "Piiramatu",
  },

  error: {
    not_fount_data: "Andmeid ei leitud!",
    license_max_limit: "Teie litsents saavutas limiidi!",
    no_read_access: "Lugemisõigus puudub",
    no_write_access: "Kirjutusõigus puudub",
    no_access: "Juurdepääs puudub",
  },

  time_spans: {
    days_range: "Päevade vahemik",
    today: "Täna",
    yesterday: "eile",
    last_7: "Viimased 7 päeva",
    last_14: "Viimased 14 päeva",
    last_30: "Viimased 30 päeva",
    last_90: "Viimased 90 päeva",
    custom: "Kohandatud",
  },
  device_types: {
    desktop: "Töölaud",
    mobile: "Mobiilne",
    tablet: "Tahvelarvuti",
  },

  create_website_action: "Looge oma veebisait – see on tasuta",
  show_shops_action: "Minu kaupluste nimekiri",

  // Companies:

  Youtube: "YouTube",
  Linkedin: "LinkedIn",
  Twitter: "Twitter",
  Facebook: "Facebook",
  Instagram: "Instagram",
  Reddit: "Reddit",
  Github: "GitHub",

  theme: {
    dark_mode: "Tume režiim",
    dark_mode_description:
      "Valige see valik, kui soovite tumedat tausta valge tekstivärviga.",
    light_mode: "Valgusrežiim",
    light_mode_description:
      "Valige see valik, kui soovite, et taust oleks hele ja tekst musta värvi.",
  },

  ai: {
    remove_bg: {
      title: "Eemalda taust",
      subtitle: "Loo läbipaistev taust.",
    },
    reimagine: {
      title: "Kujunda ümber",
      subtitle: "Loo rohkem pilte uute taustadega.",
    },
    upscale: {
      title: "Suurenda kvaliteeti",
      subtitle: "Suurenda pildi eraldusvõimet.",
    },
  },

  // ------------------ Pages Title ------------------
  page_titles: {
    home: "Selldone ╏ Ärioperatsioonisüsteem kiiresti kasvavatele ettevõtetele",
    login: "Logi sisse",
    register: "Registreeri",
    auth_2fa: "2-faktoriline autentimine 🔐",
    academy: "Blogi",
    help: "Abikeskus",
    price_list: "Hinnakiri",
    my_stores: "Minu poed",
    roles: "Minu rollid",
    wallet: "Minu rahakott",
    personal_info: "Isiklik teave ╏ KYC",
    companies: "Minu ettevõtted",
    access_control: "Juurdepääsukontroll",
    security_center: "Turvakeskus",
    gifts: {
      received: "Kingitused ╏ Vastu võetud",
      send: "Kingitused ╏ Saadetud",
    },
    monetization: {
      linked_accounts: "Monetiseerimine ╏ Lingitud kontod",
      plans: "Monetiseerimine ╏ Plaan ja lingid",
    },
    affiliate: "Sidusettevõte",
    avocado: "Avokaado – kaasaegne sotsiaalne müügikanal",
    guild: "Gild – kollektiivne müügikanal",
    partners_login: "Partnerid ╏ Kliendi sisselogimine",
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

  blank_is_all_products: "Kõikide toodete kaasamiseks jätke tühjaks!",

  // ---------------------------------------------

  /** @see ShopCautionHelper **/
  cautions: {
    title:
      "Juhtige oma ettevõtet professionaalselt, järgides järgmisi näpunäiteid. Jätkake lugemist, et saada näpunäiteid kasumimarginaali suurendamise ja muu kohta. Oleme teiega teel.",
    no_payment_method: {
      title: "Makseviis",
      message:
        "Peate oma poele lisama makseviisi.",
      action: "Poeväravad",
    },
    link_account: {
      title: "Linkige konto",
      message:
        "Peate linkima konto ({currency}) oma poega.",
      action: "Poe kontod",
    },
    no_domain: {
      title: "Lisa domeen",
      message:
        "Saate oma poega ühendada ühe või mitu isiklikku domeeni. Teie veebisait installitakse teie domeeni. See protsess on kiire ja lihtne.",
    },
    domain_not_approved: {
      title: "Domeeni kinnitamine",
      message:
        "Teie domeen {domain} ei ole kinnitatud. Kontrollige DNS-i sätteid ja kinnitage domeen.",
    },
    no_currency: {
      title: "Lisa valuuta",
      message:
        "Peate oma poe jaoks määrama vähemalt ühe valuuta.",
      action: "Valuuta haldamine",
    },
    no_primary_domain: {
      title: "Peamine domeen",
      message:
        "Palun valige oma esmaseks domeeniks domeen. Klõpsates domeeninime kõrval tärninupul, saad valida domeeni oma poe esmaseks domeeniks. See on otsingumootorite jaoks kriitiline. Pange tähele, et teie pood on endiselt saadaval kõigi aktiivsete domeenide kaudu.",
    },
    shop_complete: {
      title: "Täielik teave",
      action: "Poe seaded",
      location_msg: "Lisage oma asukoht",
      days_open_msg: "Määrake lahtiste uste päevad",
      time_open_msg: "Määrake avamise ja sulgemise aeg",
      description_msg: "Kirjutage oma ettevõtte kohta lühikirjeldus",
      icon_msg: "Määrake oma poe logo",
      shop_gateways_msg: "Lisa makseviis",
      socials_msg: "Lisage oma sotsiaalsed lingid",
      clubs_msg: "Määrake kliendiklubid",
      domains_msg: "Lisa kohandatud domeen",
      primary_msg: "Määra domeen esmaseks",
    },
  },

  /** @see BSupportMenu **/
  support: {
    request: "Taotlege tuge",

    category: "Kategooria",
    title: "Toetus",
    message:
      "Esitage mis tahes taotlusi või küsimusi. Meie tugimeeskond juhendab teid. Soovitame teil esitada oma küsimuse teie taotlusega seotud lehel. Näiteks kui teil on küsimus domeeni seadistuse kohta, saatke see oma poe domeeniseadete lehele.",

    close_at: "Suletud {date}",
    close_ticket_by_user: "Aitäh, sain vastuse",
  },

  /** @see SShopProductRatingView **/
  surveys: ["Väga halb", "Vaene", "Tavaline", "Hea", "Suurepärane"],

  /** @see SortView **/
  sort: {
    title: "Sorteerima",
    title_small: "Sorteerima..",
    nothing: "Mitte midagi",
    most_views: "Enamik vaateid",
    most_likes: "Populaarseim",
    most_recent: "Uusim",
    most_sell: "Enimmüüdud",
    cheapest: "Odavaim",
    most_expensive: "Kõige kallim",
    only_available: "Saadaval",
    view_mode: {
      normal: "Tavaline",
      grid: "Võre",
      list: "Nimekiri",
      insta: "üksus",
    },
  },

  /** {@see Helps} **/

  helps: {
    title: "Selldone'i abikeskus",
    subtitle:
      "Tere tulemast Selldone'i. Kui ehitate ettevõtte operatsioonisüsteemile uut veebipoodi, leiate lisateavet siit.",

    add_new_help: "Uus spikker",
    resources: "Vahendid",

    categories: {
      Welcome: "Alustama",
      Setup: "kauplus",
      Sell: "Müük",
      Developer: "Arendada",

      Product: "Toodete ja kategooriate haldamine",
      Blog: "CMS ja ajaveeb",
      Order: "Tellimuste täitmise keskus",
      Channel: "Müügikanalid",
      Accounting: "Raamatupidamine ja makseviisid",
      Incentives: "Stiimulid",
      Marketing: "Turundus ja kampaaniad",
      Logistic: "Logistika ja saatmine",
      Customers: "Klientide klubi ja segmenteerimine",
      Page: "Siht- ja kohandatud lehed",
      Access: "Personali / API juurdepääsu haldamine",
      Application: "Rakendused",
      POS: "POS",
    },
    faq: "FAQ",
    github: "GitHubi hoidla",
    admin_api_app: "Administraatori API veebiteenus",
    shop_api_app: "Ostke API veebiteenust",
    design_kit: "Disaini komplektid",
    community: "kogukond",
  },

  /** {@see Blogs} **/
  /** {@see InterestTopicsView} **/

  blogs: {
    title: "Blogi",
    subtitle:
      "Õppetunnid ettevõtlusele, enesekindlus ja eduka ettevõtte loomiseks vajalikud teadmised.",
    add_new_blog: "Uus blogi",
    popular: "Populaarne",
    topics: "Teemad",
    select_topics: "Valige oma töökoht.",
    select_job_topics: "Valige oma tööga seotud teemad",
    select_interested_topics: "Mis teemad sind huvitavad?",
  },

  /** {@see ApiDocs} **/
  api: {
    title: "API ja integratsioon",
    message:
      "Üks Selldone'i põhifunktsioone on tugevate ja turvaliste API-de pakkumine kaupluste haldamiseks ja ühendamiseks muude teenustega, nagu laondus, raamatupidamine jne. Samuti saate oma poe jaoks kujundada kohandatud rakendusi ja veebirakendusi. Ilma serveri ja andmehalduse pärast muretsemata. Kasutage lihtsalt domeeni API-sid. Teil on kogu kasutajate haldamise, autentimise ja muude domeenifunktsioonide protsess.",
  },

  /** {@see BPageShuttle} **/
  user_dashboard: {
    title: "Minu süstik",
    subtitle: "Hallake oma ettevõtet ajakohase teabe ja selge väljavaate abil.",
    menu: {
      affiliate: "Sidusettevõte",
      monetize: "Raha teenimine",
      gift: "Kingitus",
      security: "Turvalisus",
      access: "Juurdepääs",
      business: "Ettevõte",
      wallet: "Rahakott",
      identification: "KYC",
      stores: "Kauplused",
      roles: "Rollid",
      home: "Kodu",
      expert: "Ekspert",
      deals: "Pakkumised",
      providers: "Pakkujad",
    },
    shops: {
      create_new: "Loo uus pood",
      create_new_sub_need_initial_charge:
        "Esimese poe ehitamine on tasuta. Tõenäoliselt piisab teie ettevõtte jaoks ühest kauplusest, kuid kui teil on vaja poode juurde ehitada, on uue poe ehitamise maksumus 25 dollarit. Võtame summa teie rahakoti kontolt välja.",

      menu: {
        title: "Minu poed",
        shops: "Kauplused",
        new: "Uus",
      },

      accept_invite_question: "Kas võtate selle kutse vastu?",
      /** {@see BShopCard} **/

      shop_card: {
        menu_orders: {
          physical: "Füüsilised toodete tellimused",
          virtual: "Virtuaalsed tootetellimused",
          files: "Esitage tellimused",
          services: "Teenuse tellimused",
          subscriptions: "Tellimuste tellimused",
        },
        status: "Olek",
        license: "Litsents",
        volume: "Kasutatud ruum",
        expire: "Litsents aegunud",
        products: "Tooted",
        page_views: "Vaated",
        user_behavior: "Kliendi käitumine",
        time_span: "alates {time} kuni praeguseni",
        finance_report: "Finantsaruanne",
        buys: "Ostud",
        payments: "Maksed",
        orders: "Tellimused",
        currency: "Valuuta",
        no_payment: "Makse puudub!",
        no_purchase: "Ost puudub!",
      },
    },
  },

  widgets: {
    /** {@see BDashboardFeedback} **/
    overview: {
      title: "Klientide tagasiside",
      title_small: "Ülevaade",
      wishlist: "Soovinimekiri",
      comments: "Kommentaarid",
      likes: "Meeldib",
      favorites: "Lemmikud",
      powers: "Plaksutab",
      views: "Vaated",
      report_today: "Tänane aruanne",
      report_last7days: "Viimase 7 päeva aruanne",
      report_last30days: "Viimase 30 päeva aruanne",
    },
  },

  /** {@see BPageShop} **/
  admin_shop: {
    title: "kauplus",
    menu: {
      edit: "Seaded",
      automation: "Automatiseerimine",
      application: "Rakendused",
      access: "Juurdepääs",
      pages: "Leheküljed",
      channels: "Kanalid",
      classification: "üksus",
      marketing: "Turundus",
      customers: "Kliendid",
      logistic: "Logistika",
      auditing: "Raamatupidamine",
      incentives: "Stiimulid",
      process_center: "Tellimused",
      blog: "Blogi",
      products: "Tooted",
      shops: "Kauplused",
      dashboard: "Armatuurlaud",
      autopilot: "Autopiloot",
      apps: "Rakendused",
      pos: "POS",
      seo: "SEO",
      localization: "Lokaliseerimine",
      crm: "CRM",
      listing: "Kirje",
    },

    /** {@see BPageShopDashboard} **/
    dashboard: {
      title: "Poe armatuurlaud",
      online_staff: "Interneti-töötaja(d)",

      notify_referral: {
        message: "Saatke oma kutselink sõpradele ja hankige tasuta vautšereid.",
        action: "Minu soovituslink",
      },

      /** {@see BDashboardShopTechnical} **/
      info: {
        title: "Tehniline",
        subtitle: "Teie ettevõtte operatsioonisüsteemi tehniline ülevaade.",

        shop_name: "Poe nimi",
        shop_link: "Poe link",
        site_map: "Saidikaart",
        shop_domains: "Domeenid",
        shop_domains_msg: "Ühendatud kohandatud domeenide loend.",

        home_msg:
          "Määrake oma veebisaidi vaikeavaleht. Seda saab muuta iga kohandatud domeeni jaoks.",

        add_domain: "Lisa uus domeen",
        currencies: "Aktiivsed valuutad",
        currencies_alert: "Valige poe jaoks vähemalt üks valuuta!",
        status: "Olek",
        license: "Litsents",
        expire: "Litsentsi aegumiskuupäev",
        upgrade_license_action: "Minge üle versioonile {name}",
        wage: "Tasu",
        cpu_message:
          "Ostetud plaanile kohandatud ressursside arv ja teenusele lisatud ressursid.",
        hide_domains: "Peida minu domeenid",
        show_domains: "Näita minu domeene",

        /** {@see BDomainsList} **/
        table: {
          primary: "Esmane",
          url: "URL",
          site_map: "Saidi kaart",
          enable: "Luba",
          indexed: "Indekseeritud",
          and_more: "ja veel..",
          auto_repair: "Auto remont",
        },
        add_dialog: {
          title: "Poe domeeni seadistamine",
          step1:
            "Saate määratleda DNS-domeeni või alamdomeeni kirje A IP-piirangu järgmiste väärtuste abil.",
          step2: "Lisage DNS-i TXT-kirje:",
          set_ip_alert:
            "Määrake kirje A IP väärtus <b>{ip}</b> .",

          input_domain: "Domeeni URL",
          correct: "Domeeni sätted on õiged.",
          set_message: "Määra selle domeeni CNAME väärtuseks {cname}.",
          input_domain_message: "Sisestage domeeninimi ilma http ja https-ita.",
          ssl_message:
            "Ärge muretsege oma veebisaidi SSL-sertifikaadi pärast. Selldone (beeta) väljastab selle sertifikaadi teie domeeni jaoks automaatselt.",
          active: "Domeen on aktiivne",
          inactive: "Domeen on keelatud",
          success_message:
            "Õnnitleme, teie sait on domeenis {domain} lubatud. Selle domeeni kaudu saate oma ettevõtet ja kaubamärki maailmale tutvustada.",

          delete_action: "Kas kustutada domeen?",
        },
        set_home_dialog: {
          title: "Määra domeeni avaleht",
        },
        notification: {
          add_message: "Domeeni aadressi lisamine õnnestus.",
          update_message: "Domeeni värskendamine õnnestus.",
          delete_domain_message: "Domeeni kustutamine õnnestus.",
        },
        alert: {
          title: "Kustuta domeen",
          message:
            "Kas soovite selle domeeni kustutada? Teiste pettuste vältimiseks lähtestage kindlasti oma domeeni DNS-kirje väärtused.",
        },
      },

      /** {@see BDashboardShopOrders} **/
      active_orders: {
        title: "Tellimused",
        title_small:
          "Füüsilised, faili-, virtuaal- ja teenindustellimused",
        pending_orders: "Ootel tellimused",
        physical: "Füüsilised toodete tellimused",
        virtual: "Virtuaalsed tootetellimused",
        file: "Esitage toodete tellimused",
        service: "Teenindustoodete tellimused",
        subscription: "Tellimistellimused",
      },
      /** {@see BDashboardShopProducts} **/
      products: {
        title: "Inventuur",
        title_small: "Tooted, teenused, failid",

        total_products: "Tootetüübid kokku",
      },
      /** {@see BDashboardShopFinance} **/
      finance: {
        title: "Rahaline",
        title_small: "Finantsaruanne",
        total_30days_title: "Müügi kogusumma",
        last_30_day: "Viimased 30 päeva",
        pay_amount_chart_title: "Maksed",
        sell_amount_chart_title: "Müük",
        discount_amount_chart_title: "Allahindlus",
        currency_convert_to: "Valuuta juurde",
        active_currencies: "Aktiivsed valuutad",
        sell_count_chart_title: "Müükide arv variantide kaupa",
        active_gateways: "Aktiivne maksevärav",
        received_last_24h: "Saabunud viimase 7 tunni jooksul",
        pie: {
          title: "Tänane müügisuhe",
          no_data: "Täna ei müüda",
        },
        pay_amount: "Makse summa",
        sell_amount: "Müügisumma",
        discount_amount: "Allahindluse summa",
        sell_count: "Müükide arv",
        table: {
          currency: "Valuuta",
          total_sell_30days: "30 päeva kogumüük",
          sell_daily: "Päevane müügimäär",
          sell: "Soodustus",
          pay: "Maksma",
        },
      },
      /** {@see BDashboardShopCustomers} **/
      customers: {
        title: "Poe kliendid",
        title_small: "Konversiooniaruanne",
        total_customers: "Kokku",
        new_customers_today: "Täna",
        new_customers_week: "Viimased 7 päeva",
        orders_count: "Tellimused loevad",
        days_range: "Päevade vahemik",
        new_users: "Uued registreeritud kasutajad",

        chart: {
          new_customers: "Uued kliendid",
          customers: "Kliente kokku",
        },
      },
      /** {@see BDashboardShopChannels} **/

      channels: {
        title: "Omandamiskanalid",
        subtitle:
          "Hallake üksust Kanalid ja kohandage oma poe seotud seadeid.",
      },

      /** {@see BDashboardShopPerformance} **/
      performance: {
        title: "Täna",
        title_small: "Kasutajate ja müügi ülevaade",
        users: "Kasutajad",
        views: "Vaated",
        orders: "Tellimused",
        payments: "Maksed",
        no_visitor_today: "Teil polnud täna külastajaid.",
      },
    },

    /** {@see BPageShopProductsList} **/
    products: {
      title: "Toodete loend",
      products_list: "Tagasi nimekirja",
      products_menu: "Toodete haldamine",

      view_que_list: "Vaadake järjekordade loendit",
      menu_products_list: "Toodete loend",
      menu_export: "Ekspordi tooteid",
      menu_import: "Impordi tooteid",
      drop_import_message:
        "Pukseerige toodete loendi fail (CSV-, XLS-, XLSX-vormingus) siia, et alustada hulgitoodete lisamist. Veenduge, et failil oleks Selldone toodete loendi vorming.",

      menu_advanced_options: "Täpsemad valikud",
      menu_advanced_options_description:
        "Hallake üksust Menüü üksus Valikud Kirjeldus ja kohandage oma poe seotud seadeid.",

      products_rss: {
        title: "Toodete RSS",
        subtitle: "Impordi Toode üksus Google, Meta,...",
      },
      products_api: {
        title: "Toodete API",
        subtitle: "Hallake üksust Toode api ja kohandage oma poe seotud seadeid.",
      },
      google_sheet: {
        action: "Lingitud leht",
        tooltip:
          "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      },
      show_deletes: {
        false_title: "Peida kustutatud",
        false_description: "Peida kustutatud tooted.",
        true_title: "Näita kustutatud",
        true_description: "Näita kustutatud tooteid.",
      },
      show_vendors: {
        false_title: "Peida müüjad",
        false_description: "üksus Näita Müüja Omanik.",
        true_title: "Näita müüjaid",
        true_description: "Näita kõiki müüjaid, ⌘Ctrl+1",
      },
      table_mode: {
        false_title: "Pukseerimisrežiim",
        false_description:
          "Kuva tooted kategooriate ja alamkategooriate järgi.",
        true_title: "Tabelirežiim",
        true_description: "Kuva tooted üksikasjalikus tabelivaates.",
      },

      show_notes: {
        false_title: "Peida Märkused",
        false_description: "Peida Tühi Märkused.",
        true_title: "Näita Märkused",
        true_description: "Näita kõiki märkusi, ⌘Ctrl+2",
      },

      rss_dialog: {
        title: "Toodete RSS",
        subtitle:
          "Hallake üksust rss dialoog ja kohandage oma poe seotud seadeid.",
      },
      api_dialog: {
        title: "Toodete API",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      },

      /** {@see BProductWindowProductLarge} **/

      product_widget: {
        product_type: "Toote tüüp",
        price: "hind",
        value_added: "komisjon",
        discount: "Allahindlus",
        in_stock: "Laos",
        product_unit: "Üksus",
        total_sell: "Müük kokku",
        total_view: "Vaatamisi kokku",
        view_unit: "Ajad",
        review_unit: "Arvustused",
      },

      /** {@see WidgetFolderCard} **/
      folder_widget: {
        products: "Tooted",
        products_unit: "Tüübid",
        sub_categories: "Kategooriad",
        sub_categories_unit: "Üksused",
        views: "Vaated",
        views_unit: "Ajad",
      },
    },

    /** {@see BPageShopBlogs}  **/
    blogs: {
      new: "Kirjuta uus",
      blogs: "Blogi",

      /** {@see BPageShopBlogsList} **/
      list: {
        title: "Minu artiklid",
        subtitle:
          "Kirjutage Lõpp ja oma ettevõtet tutvustamiseks tänapäevase tekstiredaktoriga artikleid. Kvaliteetse SEO-sõbraliku blogipostituse kirjutamisel tuleb esmalt keskenduda originaalsisu.",
        waiting_message: "Teabe saamine ... palun oodake",
        published: "Avaldatud",
        draft: "Mustand",
        private: "Privaatne",
        public: "Avalik",
        table: {
          title: "Pealkiri",
          author: "Autor",
          claps: "Plaksutab",
          like: "meeldib",
          comments: "Kommentaarid",
          views: "Vaated",
          publish_state: "Olek",
          created_at: "Loomise kuupäev",
          updated_at: "Viimane uuendus",
        },
      },
    },

    /** {@see ShopPBPageShopOrdersrocessCenter} **/
    orders: {
      /** {@see BProcessCenterList} **/
      physical: {
        waiting_message: "Teabe saamine ... palun oodake",
        rejected: "Tagasi lükatud",
        delivery: "Saatmine",
        discount: "Allahindlus",
        not_paid: "Maksmata",

        table: {
          order_number: "Tellimuse kood",
          order_date: "Väljaregistreerimise kuupäev",
          status: "Viimane olek",
          price: "Kogu summa",
          payment_status: "Makse staatus",
        },
      },

      /** {@see BPageShopOrdersVirtual} **/
      virtual: {
        waiting_message: "Teabe saamine ... palun oodake",

        discount: "Allahindlus",
        table: {
          order_number: "Tellimuse kood",
          product: "Toode",
          order_date: "Registreerimiskuupäev",
          status: "Viimane olek",
          price: "Kogu summa",
          payment_status: "Makse staatus",
        },
      },
    },

    /** {@see BPageShopFinance} **/
    auditing: {
      menu: {
        exchange: "Vahetada",
        gateway: "Värav",
        invoice: "Arveldamine",
        report: "Aruanne",
        tax: "Maksud",
        drop_shipping: "Edasimüüja kviitungid",
        reseller_accounts: "Edasimüüjate kontod",
        valuations: "Hinnangud",
        customer_wallets: "Klientide rahakotid",
      },

      /** {@see BPageShopFinanceBill} **/
      invoice: {
        title: "Ostke lingitud rahakotte",
        subtitle:
          "Tasud, komisjonitasud ja poekulud arvatakse nendelt rahakotikontodelt maha.",

        title_add: "Ühendage uus rahakoti konto",
        subtitle_add:
          "Peaksite looma iga valuuta jaoks uue rahakoti ja ühendama selle oma poega. Teenustasu võetakse sellelt rahakotilt välja.",
        add_account: "Lisada konto",
        charge_account: "Tasu konto",
        show_transaction: "Näita tehinguid",

        table: {
          currency: "Valuuta",
          account_number: "Konto number",
          account_name: "Kasutaja nimi",
          balance: "Tasakaal",
          free_balance: "Vaba jääk",
          actions: "Eemalda",
        },
        add_account_dialog: {
          title: "Krediidikonto ühendamine kauplusega",
          subtitle:
            "Kui avate Selldone'is rahakotikonto, anname teile virtuaalse krediitkaardi ja konto nagu igale teisele krediitkaardile. Selldone müügitasu arvatakse sellelt kontolt maha, kuid kui teie kontojäägist ei piisa, jääb see summa võlgu. Saate kasutada Selldone'i teenuseid nii palju kui vaja.",
          account_number: "Konto number",
          account_number_input_message:
            "Pood lingitakse selle kontoga. Seda kontot kasutatakse tasude ja kulude katmiseks.",
          balance: "Kontojääk",
          connect_account_to_shop: "Ühendage konto poega",
        },
        notifications: {
          connect_account_success: "Konto lisamine õnnestus.",
          delete_account_success:
            "Konto eemaldati poest edukalt.",
        },
        alert: {
          delete_account: "Katkesta konto ühendus",
          delete_account_message:
            "Kas soovite selle konto poekontode loendist eemaldada?",
          delete_account_action: "Kustuta konto",
        },
        inform_charge_account: "Võtke oma kontolt tasu!",
        inform_charge_account_critical:
          "Teenuse peatamise vältimiseks võtke oma kontolt tasu!",
      },

      /** {@see BPageShopFinanceExchange} **/
      exchange: {
        title: "Salvestage aktiivsed valuutad",
        subtitle:
          "Kasutajad saavad valida ühe aktiivsetest valuutadest ning toodete hinnad arvutatakse ja kuvatakse. Vahetuskursi sisestamine on müüja enda teha.",
        shop_currencies_input: "Aktiivsed valuutad kasutajatele",
        shop_currencies_input_error: "Valige vähemalt üks valuuta",
        rates: {
          title: "Valuuta vahetuskurss",
          sub_title:
            "Saate sisestada toodete hinnad mis tahes allpool toodud valuutade alusel ja toodete hinnad arvutatakse automaatselt teie valuutade vaheliste ümberarvestuskursside alusel.",
          message:
            "Sisestades valuutadevahelised vahetuskursid, arvutatakse ja uuendatakse teie toodete hindu automaatselt.",
          add_new_rate: "Lisa uus määr",
        },
        table: {
          waiting_receive_data: "Teabe hankimine ... palun oodake",
          rate_input: "Vahetuskurss",
          from: "Alates",
          to: "Kuhu",
          exchange_rate: "Vahetuskurss",
          edit: "Muuda",
          delete: "Kustuta",
          auto: "Automaatne hindamine",
        },
        add_rate_dialog: {
          title: "Määrake vahetuskurss",
          message:
            "Olge teabe sisestamisel ettevaatlik. Teie toodete hinnad arvutatakse siin sisestatud hindade alusel.",
          currency_from: "Valuutast",
          currency_to: "Valuuta juurde",
          exchange_rate: "Vahetuskurss",
        },
        alert: {
          title: "Kustuta konversioonimäär",
          message: "Kas soovite selle konversioonimäära kustutada?",
          action: "Kustuta",
        },
        notifications: {
          delete_success: "Vahetuskurss eemaldatud.",
          add_success: "Vahetuskurssi uuendatud.",
          update_success: "Salvesta aktiivseid valuutasid värskendatud.",
        },
      },
    }, // End of auditing

    /** {@see BPageShopLogistic} **/
    logistic: {
      /** {@see BPageShopLogisticWarehouse} **/
      warehouses: {
        title: "Laod",
        subtitle: "Minu ladude nimekiri.",
      },
      restriction: {
        title: "Tarne Piirang",
        subtitle:
          "Hallake üksust Piirang ja kohandage oma poe seotud seadeid.",
        no_enable_shipping_error:
          "Hallake üksust Ei üksus Tarne Viga ja kohandage oma poe seotud seadeid.",
        customer_must_select_a_shipping_msg:
          "Seadistage ja hallake seda valikut oma poe jaoks.",
        customer_can_order_without_shipping_method_msg:
          "Seadistage ja hallake seda valikut oma poe jaoks.",
        inputs: {
          restriction: {
            false_description:
              "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
            false_title: "üksus Kõik Tellimus",
            true_title: "üksus Pealkiri",
            true_description:
              "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
          },
        },
      },

      warehouse_btn: "Lisa uus ladu",
      warehouse_btn_error:
        "Määrake oma ladu, pood või ettevõtte asukoht. See on oluline, et oleksite saatekulu arvutamise ja kassasse viimise protsessis.",
      no_multi_warehouse_support_message:
        "Hallake üksust Ei mitmekeelne Ladu Tugi Sõnum ja kohandage oma poe seotud seadeid.",
      size_unit: {
        title: "Suuruse ühik",
        subtitle: "Pikkuse, laiuse ja kõrguse mõõtmiseks kasutatav ühik.",
      },
      mass_unit: {
        title: "Massiühik",
        subtitle: "Kaalu mõõtmiseks kasutatav ühik.",
      },
      distance_unit: {
        title: "üksus ühik",
        subtitle: "üksus ühik",
      },

      menu: {
        return_request: "Tagastatud",
        delivery: "Saatmine",
        inventory: "Inventuur",
        warehouse: "Ladu",
        logistic_apps: "Logistika",
        profiles: "Profiilid",
        includes: "Sisaldab",
        property_sets: "üksus määra",
        boxes: "Pakk",
      },

      /** {@see BPageShopLogisticInventory} **/
      warehouse: {
        title: "Kaupluse ladu",
        sub_title: "Seda aadressi kasutatakse saatmise lähtekohana.",
        table: {
          title: "Varude nimekiri",
          sub_title:
            "Kõigi poetoodete loend, sealhulgas füüsilised, virtuaalsed, failid ja teenused",
        },
      },

      /** {@see BPageShopLogisticShipping} **/
      delivery: {
        title: "Saatmisviisid",

        sub_title:
          "Selle jaotise väärtuste määramisega aktiveeritakse teie poes mitmesugused saatmisviisid. Selles jaotises saab aktiveerida ka sularaha meetodi.",
        add_transportation: "Lisage transport",

        /** {@see DeliveryFormWidget} **/
        delivery_form: {
          payment: "Maksevõimalused",
          limits: "Piirid",

          currency_input: "Kulude arvutamise võrdlusvaluuta",
          currency_input_message: "Kulud arvestatakse selles valuutas",
          distance_input: "Kaugus kaetud laost",
          distance_input_message: "0 või -1 tähendab, et piirangut pole.",
          max_weight_input: "Maksimaalne vastuvõetav paki kaal",
          max_weight_input_message: "0 või -1 tähendab, et piirangut pole.",
          max_size_input: "Pakendi maksimaalsed mõõtmed",
          width: "Laius",
          length: "Pikkus",
          height: "Kõrgus",
          days_input: "Saadaolevad tarnekuupäevad",
          days_input_nodata: "Valige kohaletoimetamise päev",
          hours_input: "Saadaval tarneajad",
          hours_input_nodata: "Valige ajavahemik",
          vacation_input: "Kas tarned pühade ajal?",

          pricing: "Arvutage hind",
          const_input: "Fikseeritud kulu",
          distance_cof_input: "Kulu ja vahemaa koefitsient",
          distance_cof_input_dim: "{dim} kohta",
          weight_cof_input: "Kulu-kaalu tegur",
          weight_cof_input_dim: "{dim} kohta",
          price_cof_input: "Saatekulu vastavalt toote hinnategurile",
          price_cof_input_message:
            "Sisaldab kindlustuskulusid ja muid teenuseid, näiteks järelmaksuga seotud kulusid.",
          price_cof_input_dim: "{dim} kohta",
          distance_weight_cof_input: "Kulude kordaja kaalu kordajaga",
          distance_weight_cof_input_dim: "Iga {weight} kohta {distance} kohta",
          free_shipping_input: "Tasuta saatmine",
          free_shipping_limit_input: "Tasuta kohaletoimetamise minimaalne tellimuse maksumus",

          shipping_cost_calculation: "Saatekulu arvestus",
          sod_true: "Hankige saatmiskulud sihtkohta",
          sod_true_message:
            "Veenduge, et teie saatmisteenus aktsepteeriks sihtkohas saatmiskulusid.",
          sod_false: "Automaatne saatmiskulude arvutamine",

          cod_input: "Toetage COD-i",
          cod_true: "Aktsepteeri sularaha kättetoimetamisel",
          cod_false: "Aktsepteerige ainult võrgumakseid",
          cod_true_message: "Veenduge, et teie saatmisteenus aktsepteeriks järelmaksu.",

          notifications: {
            update_success: "Saatmisteenuse seaded on edukalt lõpule viidud.",
          },
        },
      },
    }, // End of logistic

    /** {@see BPageShopCrm} **/
    users: {
      menu: {
        customers: "Kliendid",
        contact_form: "Kontaktid",
        faq: "FAQ",
        club: "Klubi",
        report: "Aruanne",
      },

      /** {@see BPageShopCrmReport} **/
      report: {
        title: "Klientide ülevaade",
        sub_title: "Siin näete oma klientide reaalajas olekut.",
        report_30days_by_time:
          "Kasutajate tegevus viimase 30 päeva kuupäeva ja kellaaja alusel",
        report_30days_by_location:
          "Geolokatsiooni kasutajate tegevus viimase 30 päeva jooksul",
      },
      /** {@see BPageShopCrmClub} **/
      club: {
        title: "Klientide klubi",
        sub_title:
          "Iga taseme aktiveerimiseks sisestage igakuine ja aastane ostusumma ning valuuta. Teie kliendid logitakse teie kliendiklubisse, kui nad vastavad igakuise või aasta ostu nõuetele.",
        item: {
          members_count: "Liikmete arv",
          purchases_count: "Tellimuste arv",
          monthly: "Igakuine",
          annually: "Aastane",
          discount_percent: "Allahindlus",
          discount_limit: "Allahindluse limiit",
        },

        edit_dialog: {
          title: "Klienditaseme juhtimine",
          currency_input: "Valuuta",
          currency_input_message:
            "Ostude kogusumma on arvestatud selles valuutas.",
          free_shipping_input: "Tasuta saatmine",
          monthly_input: "Kuu ostumäär",
          annually_input: "Aastane ostumäär",
          discount_percent_input: "Klubiliikmetele soodusmäär",
          discount_limit_input: "Allahindluse limiit",
          description_input: "Kirjeldus",
          description_input_message: "Sisestage selle taseme lühikirjeldus.",
        },
        notifications: {
          update_success: "Kliendiklubile rakendunud muudatused.",
        },
      },
      /** {@see BPageShopCrmFaq} **/
      faq: {
        title: "Korduma kippuvad küsimused",
        sub_title: "Lisage, muutke ja vastake oma klientide küsimustele.",
      },
    }, // End of users

    /** {@see BPageShopMarketing} **/
    marketing: {
      menu: {
        campaigns: "Kampaaniad",
        cross_selling: "Ristmüük",
        affiliate: "Sidusettevõte",
        emails: "Meilid",
        funnel: "Lehter",
      },

      /** {@see BPageShopMarketingCampaign} **/
      campaign: {
        name_input_name: "Kampaania nimi",
        name_input_placeholder: "Kampaania nimi",
        create_campaign_action: "Loo uus kampaania",
        table: {
          title: "Pealkiri",
          state: "Olek",
          discount: "Allahindlus",
          landing: "Sihtleht",
          start: "Alusta",
          end: "Lõpp",
        },
        notifications: {
          add_success_title: "Looge kampaania",
          add_success: "Teie kampaania on loodud.",
        },
      },
    }, // End of marketing

    /** {@see BPageShopClassification} **/
    categories: {
      title: "Kategooriate loend",
      subtitle:
        "Kategooriad on teie veebipoe põhifunktsioon. Soovitame teil kasutada neid võimsaid kategoriseerimise tööriistu, et luua kaasaegne kauplus ja muuta klientidel õigete toodete leidmine lihtsaks.",

      menu: {
        add_new: "Lisa uus kategooria",
        categories_list: "Kategooriate loend",
        export: "Ekspordi kategooriad",
        import: "Impordi kategooriad (CSV)",
      },
      /** {@see categoriesGraph} **/
      graph: {
        title: "Kategooriate hierarhia",
        subtitle:
          "Teil on täielik ülevaade oma poe kategooriatest ja sellest, kuidas kasutajad nendes navigeerivad. Kategooriate õige paigutusega leiavad teie kliendid tooted kiiresti ja konversioonimäär tõuseb.",
        visits_count: "Külastage",
        normal: "Lihtne",
        items_count: "Üksuste arv",
        home: "Kodu",
      },
    }, // End of categories
    /** {@see AdminShopApps} **/
    apps: {
      menu: {
        app_store: "kauplus",
        my_apps: "Rakendused",
      },
      /** {@see BPageShopSettingApplications} **/
      my_apps: {
        title: "Aktiivsete rakenduste salvestamine",
        subtitle:
          "Avastage oma ärirakenduste haldamise lihtsus Selldone App Store'iga. Meie platvorm pakub laiaulatuslikku tööriistakomplekti, mis on loodud teie äritegevuse optimeerimiseks. Alates uuenduslikest halduslahendustest kuni tootlikkust suurendavate rakendusteni – Selldone pakub sujuvat kogemust ettevõtetele, kes otsivad tõhusust ja kasvu.",
        all: "kõik",
      },
      /** {@see BAppShopStore} **/
      store: {
        title: "Rakenduste pood",
        subtitle:
          "Ühendage oma lemmikteenused turvaliselt oma ettevõttega. Lisame pistikprogramme ja rakendusi vastavalt klientide soovidele.",

        nodata: "Pluginat ei leitud.",
        all: "kõik",
        more: "rohkem",
      },
    }, // End of apps
    /** {@see BPageShopPages} **/
    pages: {
      menu: {
        new_page: "Uus leht",
        contact_us: "Võta meiega ühendust",
        privacy: "Privaatsus",
        terms: "Tingimused",
        about_us: "Meist",
        landings: "Maandumine",
        popup: "Hüpikaken",
        static: "Staatiline",
      },
    }, // End of pages

    /** {@see BPageShopPermission} **/
    permissions: {
      menu: {
        persons: "Personal",
        roles: "Rollid",
        api: "API",
      },
      /** {@see BPageShopPermissionStaff} **/
      shop_permissions: {
        menu: {
          users: "Personali nimekiri",
          new_user: "Lisage uusi töötajaid",
          new_user_message:
            "Kasutajad, kellel on juurdepääs selle poe armatuurlauale ja haldusjaotistele.",
        },
        delete_alert: {
          title: "Eemalda juurdepääs",
          message: "Kas soovite selle kasutaja kustutada?",
          action: "Kustuta",
        },
        notifications: {
          add_success_title: "Lisa juurdepääs",
          add_success: "Lisatud uus juurdepääs.",
          delete_success_title: "Kustuta juurdepääs",
          delete_success: "Juurdepääs kustutatud.",
        },
      },

      /** {@see BPageShopPermissionApi} **/
      shop_api: {
        title: "Poe juurdepääsuvõtmed",
        message:
          "Neid võtmeid kasutab teie server juurdepääsulubade loomiseks. Pange tähele, et võtmed on konfidentsiaalsed ja asuvad ainult serveris viisil, mis pole teistele nähtav.",
      },
    }, // End of permissions
    /** {@see BPageShopApplications} **/
    applications: {
      /** {@see BPageShopApplicationsPwa} **/
      pwa: {
        title: "Veebirakendus",
        sub_title: "Vaadake oma poe veebirakendust siit",
        message:
          "Märkus. Saate iOS-i rakenduses muuta oma veebisaidi tervituslehte iPhone'is ja iPadis",
        ios_app: "iOS-i rakendus",
      },

      /** {@see BPageShopApplicationsIos} **/
      ios: {
        title: "iOS-i rakendus",
        sub_title: "Peagi saate oma poe jaoks luua iOS-i rakenduse.",
        message:
          "Maksimaalne failisuurus: 512 KB, saate üles laadida kuni 1 MB suuruseid faile, eeldusel, et meie tihendussüsteem suudab faili suurust vähendada 512 KB-ni. Üleslaaditud pildi suurust muudetakse nutikalt.",
      },
      /** {@see BPageShopApplicationsAndroid} **/
      android: {
        title: "Androidi rakendus",
        sub_title: "Looge oma Androidi rakendus",
        message:
          "Täitke see vorm ja vajutage ehitusklahvi. Midagi muud pole vaja. Kõik teie rakenduse loomise ja allkirjastamise protsessi etapid viiakse läbi pilveserverites. Lõplik rakendus laaditakse üles kõikidesse AppStore'idesse.",
        server_un_available:
          "Katseliselt pole rakendusserver praegu ühendatud.",
        app_building_progress: "Teie rakendust luuakse.",
        app_build_success: "Teie rakendus on valmis.",
        download_app_action: "Hankige rakendus",
        firmware_version: "Püsivara versioon",
        main_info: "Rakenduspakett",
        package_name_input_message: "Veenduge, et paketi nimi oleks kordumatu.",
        package_name_input_alert:
          "Kui muudate seda nime, ei saa te enam oma eelmisi rakendusi AppStore'is värskendada ega uut installida. Pange tähele, et rakenduste vanemate versioonide kasutajad ei saa ka oma kontodele sisse logida.",
        version_input: "Versioon",
        version_input_message:
          "See arv peab alati olema suurem kui selle eelmine väärtus.",
        version_name_input: "versiooni nimi",
        version_name_input_message:
          "Sisestage selle rakenduse versiooni jaoks kordumatu nimi.",
        use_selldone_key: "Selldone vaikevõtmed",
        use_last_key: "Salvestatud võti",
        use_new_key: "Uus võti",
        appearance: "Välimus",
        app_name_input: "Rakenduse nimi",
        app_name_input_message: "See on teie rakenduse peamine nimi.",
        app_title_input: "rakenduse pealkiri",
        app_title_input_message: "See pealkiri kuvatakse rakenduse ülaosas.",
        app_title_input_placeholder: "Sisestage pealkiri",
        app_icon_input: "Rakenduse ikoon",
        app_icon_input_placeholder: "Valige rakenduse ikoonide ZIP-fail.",
        generate_icon_pack_action: "Ehitage ikoonipakett",
        splash_design: "üksus Kujundus",
        splash_logo_input: "Splash Screen logo",
        splash_logo_input_placeholder: "Valige pritskuva jaoks pilt.",
        splash_title_input: "Käivituskuva pealkiri",
        splash_title_input_placeholder: "Sisestage splash Screen pealkiri",
        splash_title_input_message:
          "See pealkiri kuvatakse suures kirjasuuruses.",
        splash_message_input: "Käivituskuva teade",
        splash_message_input_placeholder: "Sõnum...",
        splash_message_input_message:
          "See teade kuvatakse allpool pisipildina.",

        dark_theme: "Tume teema",
        light_theme: "kerge teema",
        build: "Ehitada",
        building_info:
          "Rakenduse loomine pilveserveris võtab aega 10 sekundit kuni mitu minutit. Palun ole kannatlik. Allalaadimisfaili link kuvatakse siin, kui rakendus on valmis.",
        update_mode_action: "Värskenda",
        build_mode_action: "Ehitage rakendus",
        notifications: {
          icon_pack_not_valid_error: "Fail pole õige.",
          start_building_title: "Ehitus ...",
          start_building_message:
            "Taotlus Androidi rakenduse loomiseks on esitatud.",
          build_success_title: "Palju õnne",
          build_success:
            "Teie Androidi rakendus on valmis ja saate selle kohe alla laadida.",
        },
      },
    }, // End of applications

    /** {@see ShopAutomation} **/
    automation: {
      menu: {
        autopilot: "Autopiloot",
      },
    },

    /** {@see BPageShopSetting} **/
    edit: {
      menu: {
        delete: "Kustuta pood",
        activity_time: "Aeg",
        footer: "Menüü",
        info: "Teave",
        notification: "Märguanded",
        home: "Kodu",
        locations: "Asukohad",
        license: "Litsents",
        theme: "Teema",
        sms: "SMS",
        email: "Meil",
        domain: "Domeen",
        verifications: "Kinnitused",
        flow: "Voolu",
        business_model: "Ärimudel",
      },
      delete_dialog: {
        title: "Kustuta pood",
        message: "Kas soovite poe <b>{title}</b> kustutada?",
        action: "Kustuta pood",
      },

      notifications: {
        delete_success: "Kauplus kustutatud.",
      },

      /** {@see BPageShopSettingInfo} **/
      info: {
        title_tab: {
          title: "Ettevõtte nimi ja keel",
          subtitle: "Määrake avalik nimi ja vaikekeel.",
        },
        name_tab: {
          title: "Poe ainulaadne nimi",
          subtitle: "See on teie ettevõtte kasutajanimi.",
        },

        description_tab: {
          title: "Sinu ärilugu",
          subtitle:
            "Kirjutage oma ettevõttest ja selle ainulaadsest väärtuspakkumisest.",
        },
        contact_tab: {
          title: "Kontakt ja kohalik äri",
          subtitle:
            "Avalik kontaktteave ja Google'i kohaliku ettevõtte seadistamine.",
        },
        image_tab: {
          title: "Logotüüp",
          subtitle: "Valige oma kaubamärgile ainulaadne logo.",
        },
        favicon: {
          title: "veebisaidi ikoon",
          subtitle:
            "Hallake üksust veebisaidi ikoon ja kohandage oma poe seotud seadeid.",
        },
      },

      /** {@see ShopEditMenuFooter} **/
      badge: {
        external_title: "Hallake väliseid märke",
        external_message:
          "Siin saate sisestada märgi pildi aadressi ja selle lingi. URL-id peavad pärinema kinnitatud veebisaidilt.",
      },
      /** {@see BPageShopSettingMenus} **/
      edit_menu: {
        title: "Menüüd",

        footer: {
          title: "Jaluse menüü",
          sub_title:
            "Siin saate seadistada oma poe lehe alumise menüü. Need menüüd võivad olla kodulehed, kujundatud lehed või välislingid.",
        },

        header: {
          title: "Päise menüü",
          sub_title:
            "Seda menüüd kuvatakse ainult mobiiliekraanidest suurematel ekraanidel ning avalehe, tootekategooriate, maandumiste ja tootelehtede ülaosas.",
        },

        save_menu: "Salvesta menüü",
        dialog: {
          main_pages: "Pealehed",
          custom_pages: "Sihtlehed",
        },
        table: {
          home: "Kodu",
          shop: "Pood",
          blogs: "Blogi",
          about_us: "Meist",
          privacy: "Privaatsus",
          terms: "Kasutustingimused",
          faq: "FAQ",
          contact_us: "Võta meiega ühendust",
        },
        notifications: {
          save_success: "Menüü värskendamine õnnestus.",
        },
      },

      /** {@see ShopSocialField} **/
      social: {
        title: "Sotsiaalmeedia",
        message:
          "Sisestage sellesse jaotisesse oma ametlik sotsiaalmeedia link. Aadresside kinnitamiseks järgige iga üksuse juhiseid.",
      },

      /** {@see BShopSettingWorkingDays} **/
      time: {
        title: "Tööpäevad",
        sub_title: "Määra tööpäevad ja kellaaeg",
        days_open_input: "Päevad",
        days_open_input_nodata: "Valige vähemalt üks päev",
        start_time_input: "Poe tegevuse algusaeg",
        start_time_input_hint: "Kaupluse lahtiolekuajad",
        end_time_input: "Kaupluse sulgemise aeg",
        end_time_input_hint: "Poetegevuse lõpuaeg",
        customer_support_service: "Vastutus ja klienditeenindus",
        response_time_input: "Klienditeeninduse olek",
        support_24h: "24 tundi 7 päeva nädalas",
        support_normal: "Ainult tööajal",
        no_service: "ei",
        notifications: {
          update_success: "Kauplus redigeeritud.",
        },
      },
    }, // End of edit
  }, // End of admin_shop

  /** {@see BCategoryInput} **/
  category_select: {
    category_input_no_category: "Kategooria puudub",
  },

  /** {@see BProductAddFull} **/
  add_product: {
    title_new: "Uus toode",
    title_new_category: "Uus kategooria",
    title_new_drop_shipping: "Lisa dropshipping",

    title_edit: "Redigeeri toodet",
    delete: "Kustuta toode",
    completed: "Lõpetatud",

    menu: {
      type: "Toote tüüp",
      general_info: "Üldinfo",
      rating: "Uuring ja funktsioonid",
      spec: "Tehnilised andmed",
      images: "Pildid",
      price: "hind",
      inputs: "Sisend",
      outputs: "väljund",
      extra: "Täiendavad üksikasjad",
      review: "Toote ülevaade",
      inventory: "Inventuur / Variandid",
      change_status: "Muuda olekut",
    },
    menu_extra: {
      description: "Kirjeldus",
      form: "Vorm",
      no_spec: "Ei spetsifikatsioon",
      has_spec: "koos spetsifikatsioon",
    },

    select_type: {
      title: "Valige oma toote või teenuse tüüp",
    },

    /** {@see BProductEditInfo} **/
    edit_info: {
      category_input: "Kategooria",
      category_input_msg: "Kategooria sisend üksus",
      product_name: "Tootenimi*",
      product_name_placeholder: "Sinu toote nimi siin..",
      product_code: "Tootekood (inglise keeles)",
      sku: {
        label: "SKU",
        message: "Laoseis üksus ühik",
      },
      mpn: {
        label: "MPN",
        message: "mpn",
      },

      external_link: "Väline link",

      brand_placeholder: "Kaubamärk Ex. Apple.. (Valikuline)",

      is_original: "Kas see on originaaltoode?",
      is_original_message:
        "Kui te oma toodet originaali ei määra, kuvatakse selle toote puhul võltsmärk.",
      return_warranty:
        "Mitu päeva on sellel tootel tagastusgarantii?",
      warehouse_section: "Ladu ja tootmine",
      conditions_section: "Toote tingimused",
      warranty_section: "Garantii ja kohaletoimetamine",

      unit_input: "Tooteüksus",
      unit_message: "Vajadusel sisestage ühik. Nt: KG, meeter, ...",

      unit_section: "Tooteüksus",

      unit_float: "Ujukühik (varsti)",
      unit_float_hint:
        "Näiteks saab klient tellida 3 kg puuvilju, kuid kliendile saadetav kogus erineb veidi tellitust.",
      unit_float_message:
        "Tellimuse töötlemisel võib tarnitud summa erineda tellitud summast. Süsteem arvutab selle vahe automaatselt välja ja kajastab selle Sinu võlgnevusena kliendi ees, mida saab rakendada järgmistele tellimustele.",

      marketplace: {
        // Vendor panel > Fixed mode
        vendor_panel_message:
          "<b>{vendor_name}</b> on toote omanik.",
        // Marketplace panel > Subscription products
        subscription_message:
          "Tellimustoodetel võib olla üks tarnija, nii et saate luua need hankija paneelil või määrata neile loomise etapis hankija. Valitud müüja on toote omanik.",
        default_message:
          "Saate määrata, kas see toode kuulub ühele müüjale ja seetõttu saab seda müüa ainult üks müüja või kuulub see toode Marketplace'i ja rohkem kui üks müüja võib seda müüa.",

        single_vendor_title: "Üksik müüja",
        single_vendor_desc:
          "See toode kuulub tarnijale ja valitud tarnija saab seda hallata.",

        multi_vendors_title: "Mitu müüjat",
        multi_vendors_desc:
          "See toode kuulub turule ja seda saab muuta ainult turu paneelil.",
      },

      category: {
        subtitle:
          "Hallake üksust Kategooria ja kohandage oma poe seotud seadeid.",
      },
      unit: {
        subtitle:
          "Hallake üksust ühik ja kohandage oma poe seotud seadeid.",
      },
      custom_pricing: {
        title: "Kohandatud Hinnastamine Vorm",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
        valuation_need_saved_product_message:
          "Hallake üksust Hindamine üksus salvestatud Toode Sõnum ja kohandage oma poe seotud seadeid.",
        assign_valuation_message:
          "Hallake üksust määra Hindamine Sõnum ja kohandage oma poe seotud seadeid.",
        edit_pricing_action: "Muuda Hinnastamine Vorm",
        add_pricing_action: "Loo Uus Hinnastamine Vorm",
      },
      action: {
        title: "Kohandatud Osta üksus",
        message:
          "Hallake üksust Toiming ja kohandage oma poe seotud seadeid. {icon name}",
        placeholder: "Sisestage tegevusele kutsuv tekst...",
        multi_language_dialog_title: "Kohandatud Osta üksus pealkiri",
      },
      external: {
        not_available_message:
          "Hallake üksust üksus Saadaval Sõnum ja kohandage oma poe seotud seadeid.",
        available_message: "Hallake üksust Saadaval Sõnum ja kohandage oma poe seotud seadeid.",
        input_label: "Teine tegevusele kutsuv nupp",
      },
      warehouse: {
        subtitle:
          "Hallake üksust Ladu ja kohandage oma poe seotud seadeid.",
      },
      gtin: {
        hint: "Hallake üksust gtin ja kohandage oma poe seotud seadeid.",
        label: "silt",
        placeholder: "gtin",
      },
      hsn: {
        hint: "Hallake üksust hsn ja kohandage oma poe seotud seadeid.",
        placeholder: "6~16 üksus HSN Kood.. (Valikuline)",
        label: "HSN",
      },
      condition: {
        label: "Toote seisukord teie poes",
        message: "Hallake üksust Tingimus ja kohandage oma poe seotud seadeid.",
        subtitle:
          "Hallake üksust Tingimus ja kohandage oma poe seotud seadeid.",
      },
      brand: {
        label: "Bränd",
        placeholder: "Kaubamärk Ex. Apple.. (Valikuline)",
      },
      warranty: {
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",

        label: "Garantii",
        placeholder: "üksus 24 Kuu Garantii.. (Valikuline)",
      },
      status: {
        title: "Olek",
        subtitle:
          "Hallake üksust Olek ja kohandage oma poe seotud seadeid.",
      },
      profiles: {
        title: "Profiilid",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      },
      shortcuts: {
        title: "Määra toode lisakategooriatesse",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      },
    },

    /** {@see BProductEditFeatures} **/
    rating_pros_cons: {
      title: "Küsitlus",
      message:
        "Sisestage oma klientidele toote spetsifikatsioonide loend, et teie toodet hinnata. (Kuni 5 eset)",
      rating_input: "Küsitlused",
      rating_input_message: "Küsitlusele saab lisada 5 eset.",
      rating_input_placeholder:
        "Kirjutage siia oma kohandatud küsitluse küsimus... ja vajutage sisestusklahvi!",

      item_unit: "üksus",

      pros_title: "Plussid",
      pros_message: "Sisestage toote omadused. (Kuni 5 eset)",
      pros_input_title: "Funktsiooni pealkiri",
      pros_input_value: "Funktsiooni väärtus",
      pros_group: "Toote plussid",

      cons_title: "Miinused",
      cons_message: "Sisestage toote nõrkused. (Kuni 5 eset)",
      cons_input_title: "Nõrkuse pealkiri",
      cons_input_value: "Nõrkuse väärtus",
      cons_group: "Toote nõrkused",

      select_from_list: "Valige loendist",

      suggestion_rating: [
        "Hea kvaliteet",
        "Hea väärtus",
        "Soovitaks",
        "Omadused ja võimalused",
        "Lihtne kasutada",
        "Hästi kujundatud",
        "Usaldusväärne jõudlus",
        "Tõhus klienditugi",
        "Rahuldav tarneaeg",
        "Toode vastab kirjeldusele",
        "Vastupidav ja kauakestev",
        "Kuluefektiivne",
        "Atraktiivne pakend",
        "Uuenduslik disain",
        "Keskkonnasõbralik",
        "Piisavad juhised/juhend",
        "Vastas ootustele",
        "Kasutajasõbralik liides",
        "Kõrge efektiivsusega",
        "Suurepärane müügijärgne teenindus",
        "Mitmekülgne funktsionaalsus",
        "Konkurentsivõimeline hinnakujundus",
        "Varuosade/tarvikute saadavus",
        "Usaldusväärne bränd",
        "Ohutu kasutada",
        "Kiire ja täpne teenindus",
      ],

      notifications: {
        add_rating_success: `Lisati kasutaja hinnangu valik {rating_name}.`,
        delete_rating_success: `Kasutaja reitingu valik {rating_name} on kustutatud.`,

        add_pros_success: "Toote funktsioon on lisatud.",
        delete_pros_success: "Toote funktsioon eemaldatud.",

        add_cons_success: "Toote nõrkus lisatud.",
        delete_cons_success: "Toote nõrkus eemaldatud.",
      },
    },

    /** {@see BProductEditSpec} **/
    edit_spec: {
      title: "Tehnilised kirjeldused",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      manual: {
        title: "üksus",
        subtitle:
          "Hallake üksust Käsitsi ja kohandage oma poe seotud seadeid.",
        add_group_action: "Lisa rühm",
        add_item_action: "Lisa spetsifikatsioon üksus",
      },
      import: {
        subtitle:
          "Hallake üksust Impordi ja kohandage oma poe seotud seadeid.",
        action_title: "Impordi",
        action_subtitle: "Toiming Alapealkiri",
      },
      ai: {
        title: "AI",
        subtitle:
          "Hallake üksust ai ja kohandage oma poe seotud seadeid.",
        action_title: "Toiming Pealkiri",
        action_subtitle: "Hallake üksust Toiming Alapealkiri ja kohandage oma poe seotud seadeid.",
      },

      group_input_header: "Lisa rühm",
      item_title_header: "Lisa üksus",
      group_input: "Grupi päis",
      group_input_message: "Sisestage pealkiri.",
      group_add_action: "Lisa rühm",

      item_title_input: "Pealkiri",
      item_title_input_message: "Sisestage funktsiooni pealkiri.",

      item_value_input: "Väärtus",
      item_value_input_message: "Sisestage funktsiooni väärtus.",

      add_item_action: "Lisa üksus",

      dialog: {
        title: "Sisestage tehnilised andmed",
        code_input: "Toote ID",
        code_input_message: "Tootekood: P0000 ...",
        spec_view_title: "Valitud toote spetsifikatsioonid",
        spec_view_subtitle:
          "Hallake üksust spetsifikatsioon Vaade Alapealkiri ja kohandage oma poe seotud seadeid.",
        set_spec_action: "Tehniliste kirjelduste duplikaat",
      },
      notifications: {
        enter_group_title_error: "Sisestage pealkirja väärtus",
        enter_item_title_and_value_error:
          "Sisestage funktsiooni pealkiri ja väärtus",
        spec_saved_success: "Toote spetsifikatsioonid salvestatud.",
      },
      dialog_ai: {
        title: "Pealkiri",
        prompt: {
          title: "Toode üksus",
          subtitle:
            "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
        },
        generated_spec: {
          title: "Pealkiri",
          subtitle:
            "Hallake üksust üksus spetsifikatsioon ja kohandage oma poe seotud seadeid.",
        },
        inputs: {
          prompt: {
            label: "Toode Üksikasjad",
            placeholder: "üksus",
          },
        },
        actions: {
          run: {
            title: "Pealkiri",
            subtitle:
              "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
          },
          add_generated_spec: "Lisa üksus spetsifikatsioon",
        },
      },
    },
    /** {@see BProductEditImages} **/
    edit_images: {
      title: "Peamine pilt",
      main_image_input_nodata: "Laadige üles toote pilt.",
      main_image_input_message: "See pilt kuvatakse tooteloendis.",
      preview: "Eelvaade",
      image_style: "Pildi stiil",
      background_is_white: "Valge taust",
      background_is_white_msg: "Kas pildil on valge taust??",

      images: {
        title: "Tootepiltide galerii",
        sub_title:
          "Laadige selles jaotises üles kõikide tootevariantide jaoks ühised tootepildid.",
      },
      video: {
        title: "Videoklipp",
        sub_title:
          "Esmalt laadige oma tootevideo YouTube'i üles ja seejärel sisestage Video URL siia.",
      },
      change_bg_ai: {
        title: "Loo Pilt üksus Uus Taust",
        inputs: {
          prompt: {
            label: "Taust Kirjeldus",
            placeholder: "üksus",
          },
        },
        actions: {
          reimagine: {
            title: "üksus Uus Pilt",
            subtitle: "Hallake üksust Kujunda ümber ja kohandage oma poe seotud seadeid.",
          },
          replace: {
            subtitle: "üksus",
          },
        },
      },
    },
    /** {@see BProductEditPrice} **/
    pricing: {
      edit_price: "Hinnakujundus",
      price_input: "hind",
      currency_input: "Valuuta",
      currency_input_messages: "Hind on arvutatud selles valuutas.",
      commission_input: "komisjon",
      commission_message:
        "See valik on kasulik ainult teatud tüüpi kaupmeestele, näiteks hulgimüüjatele. Kui te ei ole hulgimüüja, jätke see valik tühjaks. Hind, mida ostjad näevad, on hinna ja komisjonitasu summa. Maksu lisamiseks klõpsake Raamatupidamine > Maks.",
      add_commission_action: "Lisa vahendustasu",

      price_label_input: "Hinnasilt",
      price_label_message:
        "Lisage hinna kohta lisateavet, näiteks (1,5 $/Fl Oz). Kasutusjuhtumid: toidupoed, FMCG.",
      add_price_label_action: "Lisa hinnasilt",
      discount_input: "Allahindlus",
      discount_input_message: "Allahindlus",
      has_discount_period_input: "Kas see allahindlus kehtib kindla aja jooksul?",
      discount_timespan: "Sisesta allahindluse periood.",
      start_input: "Alusta",
      end_input: "Lõpp",
      start_input_placeholder: "Valige algusaeg",
      end_input_placeholder: "Valige lõpuaeg",
      independent_price: "Hind ainult selle variandi puhul",
      same_price: "Põhitoote hind",
      variant_pricing_message:
        "Selle valiku valides saab selle variandi hinda määrata põhitootest sõltumatult.",

      subtitle: {
        marketplace:
          "Hallake üksust Turuplats ja kohandage oma poe seotud seadeid.",
        subscription:
          "Hallake üksust Tellimus ja kohandage oma poe seotud seadeid.",
        service:
          "Hallake üksust Teenus ja kohandage oma poe seotud seadeid.",
        file: "Hallake üksust Fail ja kohandage oma poe seotud seadeid.",
        default:
          "Hallake üksust Vaikimisi ja kohandage oma poe seotud seadeid.",
      },
      extra_pricings: {
        title: "Lisa üksus Hinnastamine",
        subtitle: "Hallake üksust üksus Hinnastamine ja kohandage oma poe seotud seadeid.",
      },

      vendor: {
        title: "Müüja Hinnastamine",
        subtitle:
          "Hallake üksust Müüja ja kohandage oma poe seotud seadeid.",
        manage_vendors: "Halda Müüjad",
        vendor_product_pricing_link:
          "Müüja toote hinnastamine on seotud. Loendihinna muutmine siin mõjutab müüja tooteid, millel pole variante või mille variantidel pole eraldi hinnastamist (kasutatakse põhitoote hinda). Seda hinda käsitletakse turuhinnana ning müüja hind määratakse hinnastamismudeli või varasema turu kasumimarginaali põhjal.",
        vendor_variant_pricing_link:
          "Variandi hinna muutmine siin mõjutab sama variandiga müüja toodete hinnastamist. Seda hinda käsitletakse turuhinnana ning müüja hind määratakse hinnastamismudeli või varasema turu kasumimarginaali põhjal.",
      },
    },
    /** {@see ProductEditInputs} **/
    inputs_edit: {
      title: "Ostja teabe sisestusvorm",
      sub_title:
        "Saate luua iga toote jaoks andmesisestusvormi, nii et ostjad saadavad teile toote ostmisel teavet. Näiteks võib see teave olla kivile graveeringu nimi.",
      message_input: "Sõnum kasutajale",
      message_input_message:
        "Seda teadet näidatakse kliendile toodete ostmisel.",
      inputs_form: "Teabe struktuur (sisend)",
      inputs_hint:
        "Hallake üksust sisendid üksus ja kohandage oma poe seotud seadeid.",
    },

    /** {@see BProductEditExtra} **/
    extra_edit: {
      physical: {
        title: "saadetise info",
        sub_title:
          "Maksumus ja valmistamise aeg arvutatakse selles jaotises oleva teabe põhjal. Info sisestage kindlasti poes valitud ühikute järgi (kaal, mõõdud, vahemaa).",
      },

      notifications: {
        save_title: "Pakend uuendatud",
        save_msg: "Toote pakenditeabe värskendamine õnnestus.",
      },

      order_limit: {
        title: "Tellimus Piirangud",
        subtitle:
          "Hallake üksust Tellimus Piirang ja kohandage oma poe seotud seadeid.",
        no_limit: "Pole limiiti",
        minimum_purchase_quantity: "Miinimum Ost Kogus",
        maximum_purchase_quantity: "Maksimum Ost Kogus",
      },
    },

    variants: {
      not_available:
        "Seda tüüpi toote jaoks ei ole praegu võimalik varianti valida.",
    },

    delete_product: {
      title: "Eemaldage toode",
      message: `Kas soovite <b>toote {product_title}</b> kustutada?`,
      tips: "Hallake üksust Kustuta Toode ja kohandage oma poe seotud seadeid.",
    },
  },

  /** {@see BProductExtraPricingAdd} **/
  extra_pricing_add_dialog: {
    title: "Pealkiri {min}",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    min_quantity: "Minimaalne kogus",
  },
  /** {@see BProductInventoryManagementPhysical} **/
  product_inventory_management_physical: {
    subtitle: {
      dropshipping:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      marketplace:
        "Hallake üksust Turuplats ja kohandage oma poe seotud seadeid.",
      default: "Hallake üksust Vaikimisi ja kohandage oma poe seotud seadeid.",
    },
    menu: {
      add_bulk: {
        title: "üksus Lisa",
        subtitle: "Lisa üksus",
      },
      edit_property_set: {
        title: "Pealkiri",
        subtitle: "Muuda üksus määra",
      },
    },
  },

  /**
   * @see USmartMenu
   */
  smart_menu: {
    show_delete_items: "Näita Kustutatud Üksused",
  },

  /** {@see BProductGoogleCategoryInput} **/
  google_product_category_input: {
    label: "Google Toode Kategooria Kood",
    hint: "Hallake üksust google Toode Kategooria sisend ja kohandage oma poe seotud seadeid.",
    placeholder: "üksus Toode or Teenus Kategooria.. (Valikuline)",
  },
  /** {@see LogisticProfileType} **/
  LogisticProfileType: {
    WARRANTY: {
      title: "Garantii",
      desc: "Hallake üksust Garantii ja kohandage oma poe seotud seadeid.",
    },
    RETURN_POLICY: {
      title: "Tagastuspoliitika",
      desc: "Hallake üksust Tagastus Poliitika ja kohandage oma poe seotud seadeid.",
    },
    GUIDE: {
      title: "Juhend",
      desc: "Hallake üksust Juhend ja kohandage oma poe seotud seadeid.",
    },
    SHIPPING: {
      title: "Saatmine",
      desc: "Hallake üksust Tarne ja kohandage oma poe seotud seadeid.",
    },
  },
  /** {@see BProductProfileLogistic} **/
  product_logistic_profile: {
    dialog: {
      title: "üksus Logistika Profiil",
      add_new_action: "Lisa Uus Profiil",
      add_new_disable_msg: "Turuplatsi omanik",
    },
  },

  /**
   * @see BPageShopPagesPopups
   */
  b_shop_popups: {
    title: "hüpikaken Haldus",
    subtitle:
      "Hallake üksust b Pood üksus ja kohandage oma poe seotud seadeid.",
    add_action: "Lisa Uus hüpikaken",
  },

  /** {@see BProductProfileTax} **/
  product_tax_profile: {
    description: {
      default: "Vaikimisi",
      dedicated: "üksus",

      subscription: "Hallake üksust Tellimus ja kohandage oma poe seotud seadeid.",
      is_disabled: "üksus Maks Profiil is Keelatud! (⚠️Hoiatus)",
      shipping: "Saatmine",
      fixed_rate: "Maks",
      location_based_rate: "Asukoht üksus Määr",
      shipping_location_based_rate: "Tarne Asukoht üksus Määr",
      include_in_price: "Hinna sees",
    },
    dialog: {
      header: "üksus Maks Profiil",

      title: "Maksuprofiil",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",

      action_manage: "Halda Maks",
      action_manage_sub: "Pood > Rahandus > Maks",

      subscription_tips:
        "Kui valite tellimustoote jaoks maksuprofiili, värskendame<code>maksukoodi</code> ja määrame teie makseteenuse pakkujal kaasava/eksklusiivse režiimi. Valitud maksuprofiil määrab, kas hind loetakse koos maksudega või ilma maksudeta. Üks <code>kaasa arvatud</code> või <code>eksklusiivne</code>. Kui olete määranud kas kaasavaks või eksklusiivseks, ei saa seda muuta.<br /><br /><b>Tähtis!</b> Pärast maksuprofiili muutmist peaksite klikkima hinnaplaanidel vahekaardil Toode > Varud ja muudatuste rakendamiseks klikkima nupul Salvesta.",
    },
  },

  /**
   * @see BProductVendorAbstractView
   */
  product_vendor_profile: {
    vendor: {
      subtitle:
        "Hallake üksust Müüja ja kohandage oma poe seotud seadeid.",
    },
    vendors: {
      subtitle:
        "Hallake üksust Müüjad ja kohandage oma poe seotud seadeid.",
    },
  },
  /**
   * @see BVendorAdd
   */
  vendor_add: {
    menu: {
      profile: "Profiil & Info",
      business: "Äri & Makse",
      documents: "Dokumendid",
      page: "Leht Mall",
      shipping: "Saatmine",
      access: "Juurdepääs",
      critical_zone: "Kriitiline Tsoon",
    },

    profile: {
      title: "Müüja Info",
      subtitle: "Hallake üksust Profiil ja kohandage oma poe seotud seadeid.",
      action_sub_caption: "Avalik Toode Kirje Leht.",
      action_see_listing_page: "üksus Kirje Leht",
      send_invitation_email: "üksus Kutse E-post",
      invitation_link: "Kutse link",
    },

    profiles: {
      title: "Profiilid",
      subtitle: "Profiilid",
    },
    map: {
      no_map_message:
        "Hallake üksust Ei üksus Sõnum ja kohandage oma poe seotud seadeid.",
    },
    page: {
      title: "Kohandatud leht",
      subtitle:
        "Hallake üksust Leht ja kohandage oma poe seotud seadeid.",
      action_set_page: "üksus Avalik Leht",
      action_sub_caption: "Kohandatud sihtleht Leht.",
      vendor_has_landing_msg: "Müüja koos a Kohandatud sihtleht Leht.",
      no_landing_selected_msg: "Ei sihtleht Leht üksus.",
      no_landing_page: "Ei sihtleht Leht",
      we_can_create_dedicated_landing_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    contact: {
      title: "üksus Info",
      subtitle: "üksus",
    },
    business: {
      title: "Äri Info",
      subtitle:
        "Hallake üksust Äri ja kohandage oma poe seotud seadeid.",
    },
    bank: {
      title: "Väljamakse Teave",
      subtitle: "Pank",
    },
    default_pricing: {
      title: "Vaikimisi Hinnastamine",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      no_pricing: "Ei Hinnastamine",
    },
    shipping: {
      title: "Saatmine",
      subtitle: "Hallake üksust Tarne ja kohandage oma poe seotud seadeid.",
      shipping_services: "Tarne Teenused",
      total_number_of_services:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
      couriers: "Kullerid",
      total_couriers_count: "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    configuration: {
      title: "Konfiguratsioon",
    },
    delete: {
      title: "Eemalda Müüja",
      action: "Eemalda Müüja",
      verify_description:
        "Hallake üksust Kinnita Kirjeldus ja kohandage oma poe seotud seadeid.",
      verify_title: "Kinnita Pealkiri",
    },

    send_invitation_tips:
      "Seadistage ja hallake seda valikut oma poe jaoks.",
    only_marketplace_owner_can_edit_user:
      "Seadistage ja hallake seda valikut oma poe jaoks.",
    vendor_is_disable_msg: "Müüja is Keelatud.",
    email_not_match_with_user_msg:
      "<b></b><b></b> Seadistage ja hallake seda valikut oma poe jaoks. {user_name} {user_email} {email}",

    order_information_email_to_email:
      "Saadame tellimuste teabe aadressile <b>{email}</b>.",

    set_a_user_for_the_vendor_first_msg: "üksus",

    inputs: {
      slug: {
        label: "Tee",
        placeholder: "üksus a Kohandatud Tee...",
        hint: "Hallake üksust Slug ja kohandage oma poe seotud seadeid.",
      },
      email: {
        message: "Hallake üksust E-post ja kohandage oma poe seotud seadeid.",
      },
      business: {
        false_description: "üksus Kirjeldus",
        true_description: "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        false_title: "üksus",
        true_title: "Äri",
      },
      bank: {
        hint: "Hallake üksust Pank ja kohandage oma poe seotud seadeid.",
        placeholder: "üksus Pank Nimi..",
      },
      account_name: {
        hint: "Hallake üksust Konto Nimi ja kohandage oma poe seotud seadeid.",
        placeholder: "üksus Nimi..",
      },
      account_number: {
        hint: "Konto üksus",
        placeholder: "Konto üksus",
      },
      routing_number: {
        hint: "Seadistage ja hallake seda valikut oma poe jaoks.",
        placeholder: "Seadistage ja hallake seda valikut oma poe jaoks.",
      },
      iban: {
        hint: "Hallake üksust iban ja kohandage oma poe seotud seadeid.",
        placeholder: "Hallake üksust iban ja kohandage oma poe seotud seadeid.",
      },
      swift: {
        hint: "Hallake üksust swift ja kohandage oma poe seotud seadeid.",
        placeholder: "üksus Swift Kood/BIC..",
      },
      branch_address: {
        hint: "Hallake üksust üksus Aadress ja kohandage oma poe seotud seadeid.",
        placeholder: "üksus Pank Aadress..",
      },
      enable: {
        label: "Müüja Olek",
        hint: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      },
      access: {
        label: "Müüja üksus & Juurdepääs",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        hint: "Hallake üksust Juurdepääs ja kohandage oma poe seotud seadeid.",
        false_description: "üksus Kirjeldus",
      },

      logo: {
        label: "Müüja Logo",
      },
      description: {
        placeholder: "üksus a Avalik Kirjeldus...",
      },
    },
  },

  /**
   * @see BVendorDocumentsList
   */
  vendor_documents_list: {
    title: "Dokumendid",
    action_upload_doc: "Laadi üles üksus",
    vendor_subtitle:
      "Hallake üksust Müüja Alapealkiri ja kohandage oma poe seotud seadeid.",
    marketplace_subtitle:
      "Hallake üksust Turuplats Alapealkiri ja kohandage oma poe seotud seadeid.",
    upload_dialog: {
      title: "Laadi üles Dokument",
      type: {
        title: "Dokument Tüüp",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      },
    },
  },

  /**
   * @see BProductBadgesManage
   */
  product_badges: {
    title: "Märgid",
    subtitle: "Lisa üksus Muuda Kohandatud Toode Märgid.",
    only_marketplace_owner_msg: "üksus Turuplats Omanik",
    create_new_badge_action: "Loo Uus Märk",
    select_a_badge: "üksus a Märk...",
    inputs: {
      custom: {
        false_description: "üksus Kirjeldus",
        false_title: "üksus",
        true_title: "Kohandatud Toode Märgid",
        true_description: "Lisa tootepaginale kohandatud märgid.",
      },
    },
    add_custom_badge: {
      title: "Kohandatud Märk",
      subtitle:
        "Hallake üksust Lisa Kohandatud Märk ja kohandage oma poe seotud seadeid.",
      show_advanced_options: "Näita üksus Valikud",

      inputs: {
        title: {
          placeholder: "Avalik Pealkiri...",
        },
        image: {
          label: "Pilt",
          message: "Pilt",
          placeholder: "Pilt",
        },
        pattern: {
          label: "üksus",
          message:
            "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
          placeholder: "üksus",
        },
      },
      notifications: {
        badge_added: "Märk Lisa",
        badge_updated: "Märk Uuendatud",
        item_not_found_error:
          "Seadistage ja hallake seda valikut oma poe jaoks.",
      },
    },
  },
  /**
   * @see BProductTagsInput
   */
  product_tags: {
    title: "Sildid",
    tips: [
      "<b></b> Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      "<b></b> Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      "<b></b><b></b> Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    ],
    inputs: {
      tags: {
        placeholder: "Hallake üksust Sildid ja kohandage oma poe seotud seadeid.",
      },
    },
    notifications: {
      tags_updated: "Sildid Uuendatud",
    },
  },

  /**
   * @see VPageVendorShippingTransportation
   */
  vendor_shipping_services: {
    title: "Tarne Teenused",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",

    subtitle_pickup:
      "Hallake üksust Alapealkiri Järeletulemine ja kohandage oma poe seotud seadeid.",
    action: "Lisa teenus",

    add_dialog: {
      select_service_msg:
        "Tarneviisid määrab turg ja kliendid saavad nende hulgast valida. Müüjatel pole nende valikute üle kontrolli, kuid nad saavad etikettide otse ostmiseks integreerida oma paneeli tarneteenustega. Saadaolevate teenuste vaatamiseks valige allolevast loendist meetod. Valige allolevast loendist saatmisteenus. Siin kuvatakse ainult saadaolevad teenused, mida saab teie poodi lisada.",
      no_available_service: "Ei Saadaval Teenus!",
    },
  },
  /**
   * @see VPageVendorShipping
   */
  vendor_shipping: {
    services: "Teenused",
  },

  /** {@see BProductProfileMap} **/
  product_location_profile: {
    title: "Asukoht",
    empty_subtitle:
      "Hallake üksust Tühi Alapealkiri ja kohandage oma poe seotud seadeid.",
    dialog: {
      header: "üksus Asukoht Profiil",
      action_new_location: "Lisa uus asukoht",
      title: "Asukoht Profiil",
      subtitle:
        "Hallake üksust dialoog ja kohandage oma poe seotud seadeid.",
      tips: "<b></b><b></b><b></b><b></b> Hallake üksust dialoog ja kohandage oma poe seotud seadeid.",
    },
  },

  /** {@see BTranslationButton} **/
  translation_button: {
    header: "mitmekeelne keel",
    auto_action: "üksus Toiming",
    premium_user_only: "üksus Kasutaja",
  },

  /** {@see BProductProfileInclude} **/
  product_include_profile: {
    subtitle:
      "Hallake üksust Toode Kaasa Profiil ja kohandage oma poe seotud seadeid.",
    dialog: {
      header: "Toode Pakk Üksused",
      title: "Kaasatud Üksused",
      subtitle: "Hallake üksust dialoog ja kohandage oma poe seotud seadeid.",
      action_manage: "Halda Üksused",
      action_disable_msg: "Turuplatsi omanik",
      select_items_tips:
        "Looge või valige toote või teenusega kaasas olevad paketikomponendid. Kasutage seda funktsiooni, et rõhutada, mida kliendid võivad kauba ostmisel saada. Soovitame seda funktsiooni kasutada ainult siis, kui kliendi jaoks on oluline kaasasolevast sisust aru saada, näiteks nutitelefoni ostmisel.",
      create_item_tips:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
      create_new_item_action: "Loo Uus Kaasatud Üksus",
    },
  },

  /** {@see BPageProduct} **/
  product_admin: {
    products_list: "Tootenimekiri",
    product: "Toode",

    menu: {
      edit: "Muuda",
      review: "Ülevaade",
      orders: "Tellimused",
      inventory: "Inventuur",
      dashboard: "Armatuurlaud",
      back_to_products: "Tooted",
      drop_shipping: "üksus",
    },

    /** {@see BPageProductDashboard} **/
    dashboard: {
      /** {@see BProductInfoAbstractView} **/
      info: {
        title: "profiil",
        title_small: "Toode",
        category: "tootekategooria",
        link: "Toote link",
        type: "Tüüp",
        inputs: "Sisestage teave",
        outputs: "Väljundteave",
        user_data_form: "Ostja teabe vorm",
        staff_messages: "Töötajad Sõnum",
        add_note: "Lisa Märkus",
        product_tags: "Toode Sildid",
        edit_tags: "Muuda Sildid",
      },
      /** {@see BProductOrdersAbstractView} **/
      orders: {
        title: "Tellimused",
        title_small: "Töötlemata",
        physical_orders_title: "Selle tootega ostukorvid",
        send_count_in_period: "üksus {start} {end}",
        downloads_count_in_period:
          "Seadistage ja hallake seda valikut oma poe jaoks. {start} {end}",
      },

      /** {@see BProductInventoryAbstractView} **/
      inventory: {
        title: "Inventuur",
        title_small: "Ladu",
        total_sell: "Müük kokku",
        total_sell_today: "Täna müük",
        total_sell_timespan: "üksus {start} {end}",
        chart: {
          labels: ["Inventuur", "Soodustus"],
        },
        subscribers_title: "Tellijad",
        subscribers_title_small: "Tellitud tellimusi kokku",
      },

      /** {@see BProductFinanceCharts} **/
      finance: {
        title: "Rahaline",
        title_small: "Ost Aruanne üksus {start} ~ {end}.",
        select_mode_title: "Näita",
        modes: {
          sell: "Soodustus",
          payment: "Makse",
          discount: "Allahindlus",
        },
        currency_select_title: "Hind valitud valuuta järgi",
        sell_today: "Täna müük",
        product_price: "Toote hind",
        currency_unit: "Valuutaühik",
        sell_30days: "30 päeva müük",
        sell_daily: "Igapäevane müük",
        sell_yesterday: "Eilne müük",
      },

      /** {@see BProductRatingCharts} **/
      survey: {
        title: "Toote hinnang",
        title_small: "Kliendirahulolu aruanne",
        total_participation: "Panuste koguarv",
        total_participation_tooltip: "üksus",
        today_participation: "Tänased hinnangud",
        last7days_participation: "Viimase 7 päeva panused",
        chart: {
          participate: "Osalemine",
          participate_title: "Panuste arv",
          score: "Skoor",
        },
        users_not_rated_msg: "üksus",
      },

      /** {@see BProductMarketingAbstractView} **/
      inform: {
        title: "Klientide ootused",
        title_small: "Ootan allahindlusi või saadavust",
        message:
          "Teavitage kliente, kui tooted müügile jõuavad või saadavale tulevad",
        waiting_for_auction: "Oodatud tooted lähevad müüki",
        waiting_for_available: "Ootab, kuni tooted on saadaval.",
        unit: "isik(ud)",
      },
    },

    /** {@see BPageProductInventory} **/
    inventory: {
      /** {@see BProductInventoryManagement} **/
      variants: {
        inventory_list: "Varude nimekiri",
        add_variant: "Lisa variant",

        title: "Tootevaru / tootevariantide loend",
        sub_title:
          "Kui sellel tootel on rohkem kui üks variant, sisestage need selles jaotises. Iga variandi kogust, hinda ja allahindlust saab määrata eraldi; muidu rakendatakse hinnastamisel toote vaikeväärtusi.",
        add_action: "Lisa variant",
        count_input: "Inventuur",
        count_input_action: "Määra loendus",
        management_title: "Varude haldamine ja tootevariandid",
        add_title: "Lisa tootevariant",
        edit_title: "Muuda toote varianti",
        notifications: {
          add_success: "Tootevariant lisatud.",
          delete_success: "Tootevariant Kustutatud.",
          save_product_inventory_success: "Toodete laoseisu salvestatud.",
        },
      },

      /** {@see BProductInventoryManagementVirtual} **/
      variant_item: {
        price: "hind",
        same_as_product: "Sarnane põhitootele",
        in_stock: "Inventuur",
        delete_dialog: {
          title: "Kustuta tootevariant",
          message: "Kas soovite selle variandi kustutada?",
        },
      },
      /** {@see BProductVariantAdd} **/
      variant_add_edit: {
        message: "Unikaalne tootenumber",
        active_input: "Kas see variant on aktiivne?",
        sku: "SKU",
        sku_tips: "Toodete laokood.",
        mpn: "MPN",
        mpn_tips: "Tootja poolt toote pakendile sisestatud tootekood",

        has_pricing_input: "Kas hind erineb põhitoote hinnast?",
        inventory_unit: "Üksused",
        images_message:
          "Pärast selle variandi salvestamist saate siia pildi lisada.",

        config: {
          title: "Tootevariandi seadistus",
          subtitle: "Hallake üksust Konfiguratsioon ja kohandage oma poe seotud seadeid.",
        },
        variables: {
          title: "Variandi valikud",
          subtitle:
            "<b></b><b></b> Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
          graphical_asset_tips:
            "<b></b> Hallake üksust Graafiline Vara üksus ja kohandage oma poe seotud seadeid.",
          graphical_asset_action: "üksus Varad",
          graphical_asset_action_caption: "Pildid variandi valikute jaoks.",
        },
        smart_unit_price: {
          tips: "<b></b><b></b><b></b> Hallake üksust nutikas ühik Hind ja kohandage oma poe seotud seadeid.",
          smart_unit_price: "ühik Hind üksus",
        },
        quantity: {
          title: "Inventuur",
          subtitle: "Kogus",
        },
        price: {
          title: "Hinnakujundus",
          subtitle:
            "Hallake üksust Hind ja kohandage oma poe seotud seadeid.",
        },
        package: {
          title: "Pakendamine & Tarne",
          subtitle:
            "Hallake üksust Pakk ja kohandage oma poe seotud seadeid.",
          same_as_product_action: "Sama mis toode",
        },
        image: {
          title: "Variandi pildid",
          subtitle:
            "Hallake üksust Pilt ja kohandage oma poe seotud seadeid.",
        },
        inputs: {
          sku: {
            message: "Laoseis üksus ühik (SKU)",
          },
          mpn: {
            message: "mpn",
          },
          gtin: {
            label: "silt",
            message:
              "Hallake üksust gtin ja kohandage oma poe seotud seadeid.",
          },
        },
      },
    },

    /** {@see BPageProductArticle} **/
    edit_article: {
      menu: {
        tags: "Sildid",
        article: "Artikkel",
      },
    },
  }, // product_admin

  /**
   * @see TransportationsEligibleView
   */
  transportation_eligible: {
    subtitle:
      "Seadistage ja hallake seda valikut oma poe jaoks.",
  },

  /** {@see BProductExtraInput} **/
  product_extra_physical: {
    weight: "Paki kaal",
    weight_subtitle:
      "Hallake üksust Kaal Alapealkiri ja kohandage oma poe seotud seadeid.",
    weight_unit: "üksus",
    size: "Pakendi mõõtmed",
    size_subtitle:
      "Hallake üksust Suurus Alapealkiri ja kohandage oma poe seotud seadeid.",

    width: "Laius",
    length: "Pikkus",
    height: "Kõrgus",
    lead_time_title: "Ettevalmistusaeg",
    lead_time: "Ettevalmistusaeg",
    lead_time_subtitle:
      "Hallake üksust üksus Aeg Alapealkiri ja kohandage oma poe seotud seadeid.",

    lead_time_dimension: "Tunnid",
    bulk_action: "Hulgitoimingud",
    bulk_action_subtitle:
      "Hallake üksust üksus Toiming Alapealkiri ja kohandage oma poe seotud seadeid.",

    bulk_action_input: "Värskendage kõiki variante",
    bulk_action_msg:
      "Määra kõikidele variantidele toote pakendamise ja valmistamise aeg.",
    dynamic_lead_time: "üksus",
    instant_delivery: "üksus Kohaletoimetamine",
  },

  /**
   * @see SGalleryUploadGrid
   */
  gallery_upload_grid: {
    upload_images: "Laadi üles Pildid",
  },

  /**
   * @see BProductImagesGallery
   */
  product_images_gallery: {
    dialog_alt: {
      title: "määra Pilt alternatiivne Tekst",
      placeholder: "dialoog alternatiivne",
      success_update_notification: "alternatiivne Tekst Uuendatud üksus.",
    },
    dialog_bg_remove: {
      title: "Eemalda Taust üksus",
      action: {
        title: "Eemalda taust",
        subtitle: "Loo a Läbipaistev Taust.",
      },
      success_remove_bg_notification: "Õnnestus Eemalda bg Teavitus",
    },
  },
  /**
   * @see VariantGraphicalAssetsList
   */
  variant_graphical_assets: {
    title: "Variandi graafilised varad",
    tips: {
      how_it_works:
        "<b></b><br /><b></b><b><s></s></b> Seadistage ja hallake seda valikut oma poe jaoks. {filename}",
      how_set_name:
        "<b></b><br /> Hallake üksust üksus määra Nimi ja kohandage oma poe seotud seadeid.",
    },
  },

  /**
   * @see ExtraPricingLevels
   */
  extra_pricing_levels: {
    extra_pricings: "üksus Hinnastamine",
    min_quantity: "üksus Kogus",
    range_is_out_of_stock: "üksus",
  },

  /**
   * @see BProductVariantItem
   */
  product_variant_item: {
    duplicated_variant: "See variant on juba olemas!",
    set_color_warning: "määra värv Hoiatus",
    set_volume_warning: "määra maht Hoiatus",
    set_pack_warning: "määra üksus Hoiatus",
    set_weight_warning: "määra Kaal Hoiatus",
    set_type_warning: "määra Tüüp Hoiatus",
    set_style_warning: "määra üksus Hoiatus",
    out_of_stock: "üksus of Laoseis",

    image: {
      tooltip: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    enable: {
      true_tooltip: "Seadistage ja hallake seda valikut oma poe jaoks.",
      false_tooltip: "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    restore_dialog: {
      title: "Taasta variant",
      message: "Hallake üksust Taasta dialoog ja kohandage oma poe seotud seadeid.",
      action: "Jah, Taasta üksus",
    },
    notifications: {
      restore_variant_success: "Tootevariant taastati edukalt.",
    },
  },

  /** {@see BProductImagesGallery} **/
  product_images_list: {
    upload_button: "Rohkem tootepilte",
    upload_an_image: "Valige pilt.",
    notifications: {
      update_sort_success: "Piltide sortimine salvestatud",
      delete_image_title: "Kustuta toote pilt",
      delete_image_success: "Pildi kustutamine õnnestus",
    },
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Hinnad",
    inventory: "Inventuur",
    discount: "Allahindlus",
  },

  /** {@see BGiftcardTypeAdd} **/
  gift_card_type_edit: {
    title_input: "Pealkiri",
    color_input: "Kaardi värv",
    charge_input: "Esialgne tasu",
    charge_input_hint: "Esialgne tasu iga kaardi eest",
    currency_input: "Valuuta",
    currency_input_message: "Ainult selle valuutaga ostmiseks",
    lifetime_input: "Kaardi kehtivus (kuu)",
    lifetime_input_message: "Kaardi kehtivus",
    card_image_input: "Kaardi pilt",
    notifications: {
      create_success: "Kaart loodud",
      update_success: "Kaart uuendatud",
    },
  },

  /** {@see BInventoryWarehouse} **/
  shop_warehouse_edit: {
    title: "Lisa ladu",
    message:
      "Saatekulu arvutamiseks sisestage oma lao aadress ja profiil.",
    name_input: "Lao nimi",
    address: "aadress",
    name_input_message: "Sisestage oma lao jaoks hüüdnimi.",
    person_name: "Ohvitseri nimi",
    phone_number: "Kontaktnumber",
    map_title: "Kaupluse lao aadress",
    confirm_action: "Lao heakskiit",
    address_name: "Ladu",
    notifications: {
      success_save: "Muudatused salvestati edukalt.",
    },
  },

  /** {@see BPageShopLogisticInventoryList} **/
  inventory_list: {
    title: "Pood Laoseis",
    subtitle: "Kõigi poe toodete loend.",
    cant_set_here: "üksus",

    search_input: "Tooteotsing...",
    search_input_title: "Otsige poetoodete hulgast",
    apply_filter: "Rakenda Filter",
    inventory: "Varude nimekiri",
    export: "Ekspordi varud",
    import: "Impordi varud",
    bulk_price: "Hulgihinna muutus",
    bulk_discount: "Hulgi allahindluse muutmine",
    category_filter_msg: "⚡ Kehtib kõikidele toodetele ja alamkategooriatele!",
    table: {
      waiting: "Teabe saamine ... palun oodake",
      open_state: "Aktiivne",
      close_state: "mitteaktiivne",
      image: "Pilt",
      product: "tootenimi",
      code: "Toote kood",
      sku: "SKU",
      mpn: "MPN",
      original: "Originaal",
      status: "Olek",
      in_stock: "Laos",
      edit: "Muuda",
    },

    bulk_discount_dialog: {
      title: "Hulgitoimingud > Allahindlus",
      message:
        "Märkus. Järgmine summa arvestatakse protsendina kõigi teie poe toodete allahindlusest. Samuti teisendatakse arvutatud allahindlusväärtused arukalt lähimaks vooru numbriks valitud valuuta alusel. Olge väärtuste sisestamisel ettevaatlik.",
      check: "Kiidan allahindlusmuudatused heaks.",
    },
    notifications: {
      save_success: "Varude muudatus salvestatud.",
    },
  },

  /**
   * @see BInventoryBulkPrice
   */
  bulk_price_dialog: {
    title: "üksus Toimingud > Hind",
    message:
      "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
    check: "üksus",
    check_description:
      "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
    add_percent_tab: "Lisa üksus",
    add_constant_tab: "Lisa üksus",
    ending_tab: "Lõpp üksus",
    marketplace_listing_price: "Kirje Hind",

    constant: {
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    ending: {
      subtitle:
        "Hallake üksust Lõpp ja kohandage oma poe seotud seadeid.",
    },
    marketplace: {
      title: "Turuplats Kirje Hind",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      strategy: {
        min: {
          title: "määra Miinimum Hind",
          description:
            "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
        },
        max: {
          title: "määra Maksimum Hind",
          description:
            "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
        },
      },
    },

    category: {
      subtitle: "Hallake üksust Kategooria ja kohandage oma poe seotud seadeid.",
    },
    vendor: {
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      listing_price_need_update_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    listing_products_changes: "Kirje Toode üksus",
    total_vendor_products: "Müüja toodete koguarv",
    total_products: "üksus Toode",
    total_variants: "üksus Variandid",
  },

  /** {@see BProductSpecTable} **/
  spec_view: {
    auto_save_input: "Automaatne salvestamine",
    auto_save_input_message: "üksus Salvesta sisend Sõnum",
  },

  /** {@see STimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Jääb algusesse",
    title_between_start_end: "Jääb lõpuni",
    title_after_end: "Valmis",
    title_no_start_end: "Ilma ajaperioodita!",
  },

  /** {@see GeoMap} **/
  geo_map: {
    views: "Vaated",
    views_unit: "Ajad",
    product_views: "Toote vaated",
    buys: "Ostud",
    buys_unit: "Tellimused",
    baskets: "Aktiivsed kärud",
    added_items: "Lisa üksusi",
    removed_items: "Eemaldage üksused",
  },

  /** {@see BPageShopFinanceGateways} **/
  b_page_shop_finance_gateway: {
    title: "Makse Meetodid",
    sub_title:
      "Hallake üksust b Leht Pood Rahandus Lüüs ja kohandage oma poe seotud seadeid.",
    add_gateway: "Uus Makse Meetod",

    add_gateway_dialog: {
      title: "üksus Valuuta",
      country_currencies: "üksus Valuuta",
      crypto_currencies: "üksus",

      confirm: "Lisa makseviis",

      online_methods: "Veebis Meetodid",
      cod_methods: "Sularaha kohaletoimetamisel",
      bank_transfer: "Pangaülekanne",
      cash_methods: "Sularaha Makse (POS)",

      currency_step: {
        title: "üksus a Valuuta",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
        add_first_currency: {
          subtitle: "Hallake üksust Lisa üksus Valuuta ja kohandage oma poe seotud seadeid.",
          title: "Lisa valuuta",
        },
      },
      gateway_step: {
        title: "Aktiivne Makse Meetodid",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      },

      config_step: {
        import_config: "Hallake üksust Impordi Konfiguratsioon ja kohandage oma poe seotud seadeid.",
        import_from: "Impordi üksus",
      },

      request_add_new_gateway: {
        title: "Pealkiri",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      },

      inputs: {
        currency: {
          placeholder: "Valige imporditav maksevärav...",
        },
        manual: {
          true_title: "üksus Režiim",
          true_description: "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",

          false_title: "üksus Connect OS",
          false_description:
            "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        },
      },
    },
  },

  /** {@see FaqRequestsList} **/
  faq_list: {
    table: {
      nodata: "Küsimusi ei leitud.",
      more_data_action: "Veel küsimusi..",
      user: "Kasutaja",
      tag: "Silt",
      question: "küsimus",
      officer: "Personal",
      answer: "Vastus",
      created_at: "Kuupäev",
      priority: "Prioriteet",
      edit: "Muuda",
    },
    dialog: {
      add_new_action: "Esitage uus küsimus",
      edit_action: "Redigeeri KKK",
      question_input: "küsimus",
      question_input_placeholder: "Esitage oma küsimus..",
      link_input: "Viide",
      link_input_placeholder: "Saate vastuseks viidata lingile.",
      answer_input: "Vastus",
      answer_input_placeholder: "Sisesta vastuse tekst..",
      tag_input: "Silt (kategooria pealkiri)",
      tag_input_placeholder: "Sisestage lühike pealkiri",
      priority_input: "Prioriteet: (0 kuni 10)",
    },
    delete_alert: {
      title: "Kustuta küsimus",
      message: "Kas soovite selle küsimuse kustutada?",
      action: "Kustuta",
    },
    notifications: {
      send_success: "Teie vastus on edukalt edastatud.",
      delete_success: "Teie küsimus on edukalt kustutatud.",
    },
  },
  /** {@see ContactMessagesList} **/
  contact_messages_list: {
    load_more_action: "Veel sõnumeid..",

    table: {
      nodata: "Küsimusi ei leitud.",
      user: "Kasutaja",
      message: "Sõnumi sisu",
      category: "Kategooria",
      officer: "Personal",
      answer: "Vastus",
      created_at: "Kuupäev",
      contact: "Võtke ühendust",
      edit: "Muuda",
    },

    dialog: {
      title: "Vasta sõnumile",
      category: "Kategooria",
      user_name: "Nimi",
      email: "Meil",
      phone: "Kontaktnumber",
      message: "Sõnumi tekst",
      status: "Vastuse olek",
      status_answered: "Vastatud",
      status_waiting: "Ootan vastust",
      answer_input: "Vasta tekst",
      mail_input: "Kirja saatma",
      mail_input_message:
        "Kui lubate selle, saadetakse teie vastus kasutaja meilile.",
    },
    delete_alert: {
      title: "Kustuta sõnum",
      message: "Kas soovite selle sõnumi kustutada?",
      action: "Kustuta",
    },
    notifications: {
      send_success: "Teie taotlus on edukalt esitatud.",
      delete_success: "Sõnum kustutatud.",
    },
  },
  /** {@see BPageCampaign} **/
  campaign: {
    title: "Kampaania",
    menu: {
      setting: "Seaded",
      return: "tagasi",
      dashboard: "Armatuurlaud",
      links: "Lingid",
      landing: "Maandumine",
      ads: "Reklaamid",
      finance: "Rahandus",
    },
    /** {@see BPageCampaignDashboard} **/
    dashboard: {
      title: "Armatuurlaud",
      status: "Oleku ülevaade",
      sessions: "Seansid",
      links_overview: "Kampaania linkide ülevaade",
      orders: "Tellimused",
      performance: "Kampaania toimivus",
      links_funnel: "Kampaania lingid Toimivus",
      no_links:
        "Andmed puuduvad! Looge link oma kampaaniale.",
      social: "Sotsiaalmeedia juhib",
      conversion_over_time: "Teisendus aja jooksul",
      total_campaign_sell: "Müük kokku kampaaniate kaupa",
    },
    /** {@see BPageCampaignFinance} **/
    finance: {
      title: "Finantsaruanne",
      campaign_revenue: "Kampaania tulu",
      total_revenue:
        "Kogutulu kampaaniate kaupa",
      links_revenue: "Kampaania linkide tulu",
      payments_over_time: "Müük aja jooksul",
      all_links: "Kõik lingid",
    },
    /** {@see BPageCampaignLanding} **/
    landing: {
      empty_message: "Määrake kampaania seadetes sihtleht.",
      set_landing: "Määra sihtleht",
      create_landing: "Looge uus sihtleht",
    },

    /** {@see BPageCampaignLinks} **/
    links: {
      title: "Kampaania lingid",
      url_input_message: "Sisestage oma sihtlehe URL",
    },

    /** {@see BPageCampaignSetting} **/
    setting: {
      menu: {
        config: "Konfig",
        timespan: "Ajavahemik",
        banner: "Bänner",
        Notification: "Teavitus",
      },

      general_setting: {
        title: "Üldised kampaania seaded",
        sub_title: "Nimi, sihtleht ja allahindluskood",

        name_input: "Kampaania nimi",
        name_input_hint: "Lisage oma kampaaniale nimi",
        enable_input: "Kas kampaania on aktiivne?",
        page_input: "Sihtleht",
        discount_code_input: "Sooduskood",
        limit: "Allahindluse limiit",
        max_count: "Maksimaalne arv",
        max_count_unit: "Üksused",
        start: "Alusta",
        end: "Lõpp",
        notification_enable_input: "Kas teavitus on lubatud?",

        landing_page: "Sihtleht",
        discount_code: "Sooduskood",

        auto: "Vaikekampaania",
        auto_message:
          "Vaikekampaania on teie poes aktiveeritud",
      },
      time_setting: {
        title: "Ajavahemik",
        sub_title:
          "Alguskuupäev ja kellaaeg / Lõppkuupäev ja kellaaeg",
        start_input: "Alusta",
        start_input_placeholder: "Valige Kampaania algusaeg",
        end_input: "Lõpp",
        end_input_placeholder: "Valige Kampaania lõpuaeg",
      },
      banner_setting: {
        title: "Poe bänner",
        sub_title:
          "Kuva poe lehe ülaosas",

        message_input: "Sõnumi tekst",
        message_input_placeholder: "Eriline festival...",
        message_input_hint: "Bännersõnumi tekst poe ülaosas",
        bg_image_input: "Taustapildi URL",
        bg_image_input_hint: "Taustapildi täielik URL",
        repeat_pattern: "Korda mustrit",
        simple: "Lihtne",
        dark_input: "Tume teema?",
        icon_input: "Ikoon",
        icon_input_hint:
          "Materjalikujunduse ikooni nimi või Fontawsom: fa:fas fa-staar",
        anim_input: "Animatsiooni aadress",
        anim_input_message: "Lottie animatsioonifaili URL",
        preview: "Eelvaade",
        preview_update_action: "Värskenda eelvaadet",
        bg_color: "Taustavärv",
        icon_bg: "Ikooni taustavärv",
      },
      notifications: {
        title: "Teavitus",
        sub_title: "Looge teatis ja linkige see oma kampaaniaga.",
        update_success: "Teie kampaaniat on värskendatud.",
        action_button: "Tegevusnupp",
        background_color: "Taustavärv",
        text_color: "Teksti värv",
        action_color: "Tegevusvärv",
        action_text_color: "Tegevuse teksti värv",
        notification_image: "Teavituspilt",
        notification_bg: "Teavitamise taust",
        show_preview: "Kuva eelvaade",
        persistence: "Püsivus",
        persistence_message:
          "Kas soovite näidata iga kord, kui teie kasutaja veebisaiti külastab",
        radius: "Raadius",
        show_delay: "Näita viivitust",
      },
    },
  },

  /** {@see BCategoryAdd} **/
  add_category: {
    title_edit: "Muuda kategooriat",
    title_update: "Lisa uus kategooria",

    config: {
      subtitle:
        "Hallake üksust Konfiguratsioon ja kohandage oma poe seotud seadeid.",
    },
    parent: {
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    template: {
      title: "Mall",
      edit_page: "Muuda Leht",
      Pages_list: "Leht Loend",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    critical_zone: {
      title: "Kriitiline Tsoon",
      subtitle:
        "<b></b> Hallake üksust Kriitiline Tsoon ja kohandage oma poe seotud seadeid. {parent}",
      accept_delete: {
        true_description: "üksus Kirjeldus",
        true_title: "Kinnita Eemalda Kategooria",
      },
    },

    menu: {
      delete: "Kustuta kategooria",
      filter: "Filtrid",
      settings: "Seaded",
      back: "tagasi",
    },
    title_input: "Kategooria pealkiri *",
    title_input_error: "Valige kategooria pealkiri",
    name_input: "Kategooria nimi (inglise keeles) *",
    name_input_error: "Valige kategooriale ainulaadne nimi",
    description_input: "Kategooria kirjeldus",
    description_input_message: "Sisestage kategooria lühikirjeldus.",
    parent_input: "Vanemkategooria",
    parent_input_message: "See kategooria kuvatakse poe avalehel.",
    image_input: "Kategooria pilt",
    image_input_placeholder: "Valige kategooria jaoks pilt",
    edit_action: "Muuda kategooriat",
    add_action: "Lisa kategooria",
    back_action: "tagasi",
    no_category: "Kategooriaid pole",
    star: "Täht",

    filter: {
      title: "Kategooria filtrid",
      sub_title: "Selle kategooria toodetele kehtivate filtrite ja kategooriate haldamine.",
      message:
        "Sisestage ja salvestage allolevasse kasti selle kategooria ühise tehnilise funktsiooni pealkiri. Pärast loendi salvestamist kuvatakse filtrikategooriad koos iga kategooria sisuga. Tootevariandist ekstraheeritakse automaatselt värv, kaal, suurus, kaubamärk jne.",
    },
    delete_alert: {
      title: "Eemalda kategooria",
      message: "Kas soovite kategooria {title} kustutada?",
      action: "Kustuta",
    },
    notifications: {
      add_success: "Lisatud uus kategooria.",
      edit_success: "Kategooria muudetud.",
      delete_success: "Kustutatud {title}.",
    },
    /** {@see BCategoryFilterEditor} **/
    edit_filter: {
      spec_input: "Tehniliste kirjelduste loend",

      price: "hind",
      min: "üksus",
      max: "üksus",
      suggested_list: {
        brand: "Bränd",
        colors: "Värv",
        styles: "Disain",
        volumes: "Helitugevus",
        weights: "Kaal",
        packs: "Arv paki kohta",
        types: "Tüüp",
      },
      notifications: {
        edit_success: "Kategooria muudetud.",
      },
      manually_update_filters_tips:
        "<b></b> Seadistage ja hallake seda valikut oma poe jaoks.",

      inputs: {
        spec: {
          message:
            "Hallake üksust spetsifikatsioon ja kohandage oma poe seotud seadeid.",
          placeholder: "Valige filtris kuvatavad spetsifikatsioonid...",
        },
      },
    },
  },

  /** {@see BAppShopList} **/
  apps_list: {
    nodata: "Teie poodi pole installitud ühtegi rakendust",
    inactive: "mitteaktiivne",
    my_apps: "Minu rakendused",
    app_store: "Lisa uus rakendus",
  },

  /** {@see BShopAdd} **/
  add_shop: {
    menu: {
      shop_title: "Poe pealkiri",
      shop_name: "Kaupluse nimi",
      description: "Kirjeldus",
      contact: "Kontaktinfo",
      image: "Pilt",
    },
    title_input: "Pealkiri",
    title_input_tips: "Sisestage oma poe, kaubamärgi või ettevõtte nimi.",
    active_message: "Määrake aktiivseks, et kõik pääsevad teie veebisaidile juurde.",
    language_input_message: "Valige oma poe keel.",
    name_input: "Nimi",
    name_input_message: "Sisestage oma poe nimi.",
    name_input_tips:
      "Ärge kasutage mitte-ingliskeelseid tähemärke, tühikuid ega tähti, kui kasutate, ei pruugita poe nime õigesti kuvada.",
    description_input: "Kaupluse kirjeldus",
    description_input_message: "Kirjutage oma ettevõtte kohta lühikirjeldus.",
    description_input_tips:
      "Hallake üksust Kirjeldus sisend üksus ja kohandage oma poe seotud seadeid.",
    address_input: "Kaupluse aadress",
    address_input_message: "Sisestage poe asukoha täpne aadress",

    phone_input: "telefoninumber",
    phone_input_message: "Kliendi kontaktnumber",
    phone_input_tips:
      "Sisestage kontaktnumber koos riigikoodiga. Seda numbrit kasutatakse ka teabe kuvamiseks Google'i otsingus.",
    email_input: "Meil",
    email_input_message: "E-posti aadress klientidele",
    locality_input: "Asukoht",
    locality_input_message: "Kaupluse asukoht",
    region_input: "Osariik või maakond",
    region_input_message: "Osariik või provints, kus te tegutsete",
    country_input: "Riik",
    country_input_message: "Ettevõtlusriik",
    postal_code_input: "Postiindeks",
    postal_code_input_message: "Kaupluse postiindeks",
    image_input: "Poe pilt",

    map: {
      title: "Kaupluse aadress",
      confirm: "Aadressi registreerimine",
      address: "aadress",
      receptor: "kauplus",
    },

    create_shop_action: "Loo pood",
    update_shop_action: "Värskenda",

    notifications: {
      copy_success: "Kaupluse aadressi koopia.",
      name_available: `See nimi ({name}) on saadaval.`,
      add_success: `Pood {title} on loodud.`,
      edit_success: "Kauplus redigeeritud.",
    },
  },

  /** {@see BProductInventoryManagementVirtual} **/
  virtual_items_list: {
    add_virtual_item: "Lisage virtuaalne üksus",
    add_virtual_item_desc:
      "Seadistage ja hallake seda valikut oma poe jaoks.",

    filter_action: "Rakenda Filter",
    not_processed: "Töötlemata tellimused",
    title: "Üksuste loend",
    vew_order: "Vaata tellimust",

    table: {
      nodata: "Üksusi pole",
      product: "Toode",
      data: "Andmed",
      status: "Olek",
      user_message: "Kasutaja sõnum",
      updated_at: "Viimane uuendus",
      order: "Telli",
      delete: "Kustuta",
    },
    notifications: {
      delete_success: "Üksuse kustutamine õnnestus.",
    },
  },

  /** {@see BProductVirtualItemAdd} **/
  add_virtual_item: {
    title_edit: "Redigeeri väärtusi",
    title_add: "Lisa toode tootele",
    sub_title: "Virtuaalsete toodete loomine ja redigeerimine",
    message:
      "Kaupluse juhataja saab pärast makse sooritamist ostjale väärtust näidata. Need väärtused tuleb sisestada allolevale vormile. Selle vormi struktuur määratakse jaotises Redigeeri üksust > Redigeeri väljundteavet.",
    edit_outputs: "Redigeeri väljundvormi",
    notifications: {
      edit_success: "Üksus muudetud.",
      add_success: "Üksus lisati loendisse.",
    },
  },

  /** {@see BPageOrderVirtual} **/
  virtual_process_center: {
    title: "Töötlemiskeskus",
    sub_title: "Tellimuse töötlemine",
    virtual_product: "virtuaalne toode",
    menu: {
      report: "Aruanne",
      timeline: "Ajaskaala",
      order: "Telli",
    },

    /** {@see BOrderVirtualItem} **/
    outputs_widget: {
      title: "Väljundvorm",
      table: {
        title: "Pealkiri",
        value: "Väärtus",
      },
      tips: [
        "Pärast kliendi soovi täitmist vajutage tellimuse kinnitamise klahvi, et teavitada ostjat tellimusest.",
        "Kui tellimus on kinnitatud, ei saa ostja sisestatud teavet muuta.",
      ],
      alerts: {
        order_completed_by_admin: "Tellimus on täidetud.",
        order_completed_by_buyer: "Ostja poolt on tellimus täidetud.",
        waiting_for_buyer: "Ostja kinnituse ootel..",
      },
    },
  },

  /** {@see BPageOrderFile} **/
  file_process_center: {
    title: "Töötlemiskeskus",
    sub_title: "Tellimuse töötlemine",
    menu: {
      report: "Aruanne",
      timeline: "Ajaskaala",
      order: "Telli",
    },
  },

  /** {@see BOrderDashboard} **/
  process_order_page_dashboard: {
    title: "Tellimuse töötlemine",
    cancel_order_action: "Tühista tellimus",
    open_basket_cation:
      "See ostukorv on avatud, see tähendab, et klient on ostlemas ega ole veel tellimust tasunud.",

    reject_dialog: {
      title: "Tellimuse tagasilükkamise põhjus",
      message:
        "Valige allolevast loendist selle tellimuse tagasilükkamise põhjus. Teavitage klienti kindlasti tühistamise ja raha tagastamise protsessist. Tagasimaksed tuleb teha 12 tunni jooksul.",
      confirm_now_action: "Tühista Tellimus üksus",
      confirm_in48h_action: "Tühista Tellimus üksus 48 Tunnid",

      dismiss_reject_action: "Loobu tellimuse tühistamisest",

      options: {
        title: "Valikud",
        subtitle:
          "Hallake üksust Valikud ja kohandage oma poe seotud seadeid.",
      },

      express_input: {
        true_title: "üksus Pealkiri",
        false_title: "üksus Pealkiri",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        false_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      },
    },

    notifications: {
      update_status_success: "Tellimuse olekut värskendati.",
      reject_update_success:
        "Tellimuse tühistamise olekut värskendati.",
      dismiss_reject_success:
        "Tellimus naasis tavapärase protsessi juurde.",
      set_tracking_success: "Tellimuse raja ID salvestamine õnnestus.",
      shipping_address_update_success:
        "Hallake üksust Tarne Aadress Uuenda Õnnestus ja kohandage oma poe seotud seadeid.",
      vendor_order_status_update_success:
        "Hallake üksust Müüja Tellimus Olek Uuenda Õnnestus ja kohandage oma poe seotud seadeid.",
    },
  },
  /** {@see BPageOrderPhysical} **/
  /** {@see BPageOrderVirtual} **/
  /** {@see BPageOrderFile} **/
  /** {@see BPageOrderService} **/
  process_center: {
    title: "Töötlemiskeskus",

    physical_product: "Füüsilised tooted",
    menu: {
      label: "Pakendi etikett",
      receipt: "Arve",
      back: "tagasi",
      return: "Tagasi",
      report: "Aruanne",
      timeline: "Ajaskaala",
      inputs: "Sisendid",
      order: "Telli",
    },

    /** {@see OrderPaymentWidget} **/
    payment_widget: {
      title: "Makse",
      checklist: [
        "Kontrollige tellimuse summat ja kliendi makset.",
        "Kontrollige arveldusaadressi.",
        "Veenduge, et sisestatud teave on õige, eriti kui tasutakse sularahas kättetoimetamise teel.",
      ],
      action_cod_pay: "Kinnitage makse kliendi poolt",
      action_dir_pay: "Kinnitage üleslaaditud maksekviitung",
      payment_receipt_not_uploaded_error:
        "Maksekviitungit pole veel üles laaditud!",

      waiting_for_pay: "Ootel makse",
      processing_payment: "Makse töötlemine",
      processing_cancel: "Makse tühistatud",
      require_capture: "üksus",
      paid: "Tasuline",
      cod_pay_info:
        "Kui olete kliendilt tellimuse kätte saanud, saate makse kinnitada ja tellimuse vormistada.",
      dir_pay_info:
        "Üleval kuvatakse maksekviitung. Enne makse kinnitamist kontrollige oma pangast sissemakse summat ja kviitungiteavet.",

      created_date: "Loomise kuupäev",
      pay_date: "Makse kuupäev",
      payment_gateway: "Maksevärav",
      payment_method: "Makseviis",
      risk: "Riskiväärtus",
      billing_details: "Arvelduse üksikasjad",

      add_transaction: "Lisa uus arve",
      add_transactions_message:
        "Selle tellimuse jaoks peate looma vähemalt ühe tehingu. Mõnel juhul tuleb tasuda mitmes etapis. Milliste tehingute eest peab kasutaja tasuma, määrate ise töö käigus.",

      add_bill_dialog: {
        title: "Lisa arve",
        message:
          "Sellele tellimusele saate lisada ühe või mitu uut arvet. Klient näeb neid arveid ja maksab igaüks vastavalt töö edenemisele.",
        amount_input: "Arve summa",
        action: "Lisa arve",
      },
      edit_bill_dialog: {
        title: "Redigeeri arvet",
        message: "Ootel arveid saate muuta.",
        action: "Redigeeri arvet",
      },
      bill_cash_payment_dialog: {
        title: "Registreeri sularahamakse",
        message:
          "Kui ostja on käesoleva arve summa tasunud sularahas või muul viisil kui veebimaksega, registreerige selles jaotises suvandit valides ja kinnitage oma makse. Selles jaotises näete ainult oma poe sularahamaksete lüüsi.Kui te sellist valikut ei näe, peate oma poes aktiveerima sularahamaksete lüüsi valitud valuutas.",
        action: "Kinnitage arve tasumine",
      },

      table: {
        title: "Pealkiri",
        amount: "Summa",
        description: "Kirjeldus",
        info: "Teave",
      },
      user_payment: "Kliendi makse",
      cod: "Kohaletoimetamise sularaha",
      gateway_wage: "Tasu",
      gift_card: "Kinkekaart",
      discount_code: {
        title: "Sooduskood",
        code: "Kood",
        percent: "protsenti",
        limit: "Piirang",
      },
      club: {
        title: "Klientide klubi",
        percent: "protsenti",
        limit: "Piirang",
      },

      coupon: {
        title: "Kupong",
        percent: "protsenti",
        limit: "Piirang",
        charge: "Lae",
      },
      delivery: {
        title: "Postikulu",
        not_paid: "Maksmata",
      },
      samin: {
        title: "Teenustasu",
        description:
          "See summa on teie Selldone'i rahakoti kontolt maha arvatud.",
        tooltip: "Arvutage makseviisi järgi",
        percent: "protsenti",
      },
      affiliate: {
        title: "Sidusettevõtte komisjon",
        affiliate_message:
          "Peaksite selle vahendustasu maksma oma sidusettevõttele. Seda protsessi tehakse ise.",
      },
      total_price: "Kauba koguhind",
      total_items_discount: "Kaupade allahindlus",
      total_price_after_offers: "Kokku pärast pakkumiste rakendamist",

      total_order_price_before_tax: "Maksueelne koguhind",

      user_payment_amount: "Ostja maksesumma",
      samin_wage: "Müügitasu",
      pay_cod_dialog: {
        title: "Kas saite tellimusraha?",
        message:
          "Kinnitage see valik sularahas kohaletoimetamise makseviisis pärast kliendi poolt täieliku tasumise tagamist.",
        confirm_action: "Kinnitage kliendi makse",
      },
      pay_dir_dialog: {
        title: "Kas saite tellimusraha?",
        message:
          "Kinnitage see valik pärast üleslaaditud maksekviitungi kinnitamist oma pangaga. Kontrollige makset kindlasti oma pangast.",
        confirm_action: "Kinnitage kliendi makse",
      },

      notifications: {
        pay_confirm_message:
          "Makse on kinnitatud.<br> Port: {gateway_name}<br> Kuupäev: {payment_at}",
        pay_fail_title: "Maksmata",
        pay_fail_message: "Makse ei saa kinnitada!",
      },
    },
    /** {@see BOrderDashboardCart} **/
    basket_list: {
      checklist: [
        "Kontrollige laoseisu.",
        "Kui kaup pole saadaval, tuleb selle kauba eest tasutud summa kliendile tagastada.",
      ],
      message:
        "Kui mõni toode pole saadaval või seda ei saa müüa, tühjendage selle kõrval olev ruut ja klõpsake nuppu <b>Kinnita tellimus</b> .",
      action: "Tellimuse kinnitus",
      list_of_items: "Ostukorvi nimekiri",
      apply_change_action: "Rakenda muudatused",
      cant_apply_change: "Muudatusi ei saa teha",
      lottery_prize_inform:
        "Teie klient võidab seda toodet 1x. Saada kingitus selle tellimusega.",

      need_to_refund: {
        title: "Kliendile tuleb teha tagasimakse",
        message:
          "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
        calculated_approximately:
          "Seadistage ja hallake seda valikut oma poe jaoks.",
      },
      need_payback: {
        title: "Klient Laadi Nõutav",
        message:
          "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
      },
      need_no_refund: {
        title: "Ei Tagasimakse üksus",
      },
      total_refund: {
        title: "üksus Tagasimakse",
        message:
          "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
      },
    },
    /** {@see BOrderDashboardPreparing} **/
    preparing: {
      title: "Ettevalmistus",
      packing_weight: "Pakendi kaal",
      delivery_type: "Saatmisviis",
      packing_size: "Pakendi mõõtmed",
      distance_warning: "Ületab lubatud vahemaa piiri.",
      weight_warning: "Ületab lubatud kaalu.",
      volume_warning: "Ületab lubatud pakendi suuruse.",
      items_weight_calculation:
        "Seadistage ja hallake seda valikut oma poe jaoks. {weight} {unit}",
      not_available_message:
        "Hallake üksust üksus Saadaval Sõnum ja kohandage oma poe seotud seadeid.",

      message:
        "Kui tellimus on saatmiseks valmis, klõpsake nuppu <b>Tellimus</b> on valmis.",
      action: "Tellimus saatmiseks valmis",
      checklist: [
        "Pakendamisel standardreeglite järgimine.",
        "Printige kaupade loend ja pange see pakendisse.",
        "Printige ja kleepige karbile silt.",
      ],
    },

    basket_items: "Tellimuste loend",

    delivered_dialog: {
      title: "Kas klient on selle tellimuse kätte saanud?",
      message: "Kinnitage seda valikut, kui teate, et klient sai tellimuse kätte",
      confirm_action: "Kinnitan, et klient sai paki kätte",
    },
    return_delivery_dialog: {
      title: "Kas tellimusel tekkis tarne ajal probleeme või saadeti see tagasi?",
      message:
        "Kinnitage saadetise tagastamise võimalus, kui tellimus tagastatakse mingil põhjusel pärast saatmist ja tekib vajadus saadetis uuesti saata.",
      confirm_action: "Kinnitage tarne tagastamine",
    },

    notifications: {
      update_status_success: "Tellimuse olekut värskendati.",
      reject_update_success: "Tellimuse tühistamise olekut värskendati.",
      dismiss_reject_success: "Tellimus tühistati.",
      pay_cod_success: "Kättetoimetamise tasumine kinnitatud.",
      pay_dir_success:
        "Makse kinnitati kaardimaksega või rahaülekandega.",
      set_tracking_success: "Tellimuse raja ID salvestamine õnnestus.",
      new_bill_success: "Uus arve edukalt lisatud.",
      edit_bill_success: "Arve värskendamine õnnestus.",
      update_bill_status_success: "Arve oleku värskendamine õnnestus.",
      set_payment_in_cash_success: "Arve tasumine kinnitatud käsitsi.",
    },

    delete_bill_dialog: {
      title: "Kustuta arve",
      message: "Kas olete kindel, et kustutate selle arve?",
      action: "Jah, kustuta kohe",
    },
  },

  /** {@see AdminShopGatewayManagementPage} **/
  shop_gateway: {
    title: "Värav",
    menu: {
      dashboard: "Armatuurlaud",
      edit: "Muuda",
      transactions: "Tehingud",
      back: "Väravad",
    },

    /** {@see BPageGatewayDashboard} **/
    dashboard: {
      title: "Lüüs Haldus",

      /** {@see BGatewayPaymentsChart} **/
      gateway_data_widget: {
        title: "Maksearuanne",
        subtitle:
          "Seadistage ja hallake seda valikut oma poe jaoks.",
        chart: {
          times: "üksus",
          buys: "Ostude arv",
          pays: "Õnnestunud makse",
          amount_pay: "Tasuline",
          amount_wage: "Tasu",
        },
      },
    },

    /** {@see BPageGatewayEdit} **/
    edit: {
      title: "Muuda lüüsi",
      menu: {
        delete: "Eemalda lüüs",
      },
      edit_action: "Muuda lüüsi",
    },

    /** {@see BPageGatewayTransactions} **/
    transactions: {
      title: "Tehingud",
      table: {
        amount: "Summa",
        currency: "Valuuta",
        livemode: "Tüüp",
        status: "Olek",
        target_id: "Telli",
        risk: "Riskitase",
        card: "Kaart",
        issued_at: "Väljaandmise kuupäev",
        payment_at: "Makse kuupäev",
      },
      live_mode: "Otse",
      test_mode: "Liivakast",
    },
  },

  /** {@see BGatewayOverview} **/
  b_gateway_overview: {
    title: "Teave",
    subtitle: "Hallake üksust b Lüüs üksus ja kohandage oma poe seotud seadeid.",
    status: "Olek",
    cod_transportation: "Tugi Tarne",
    cod_transportations_error:
      "Hallake üksust cod üksus Viga ja kohandage oma poe seotud seadeid.",
    payment_type: "Makse Tüüp",
    cod: "Sularaha kohaletoimetamisel",
    online: "Veebis Makse",
    wage_percent: "Tasu üksus",
    min_wage: "Miinimum Tasu",
    max_wage: "Maksimum Tasu",
    min_amount: "Miinimum Tehing",
    max_amount: "Maksimum Tehing",
    timeout: "Makse üksus",
    timeout_unit: "üksus",
    link: "Maksevärava link",
    your_gateway_status: "üksus Lüüs Olek",
    oauth2_button: "Ühenda automaatselt teenusega {gateway}",
    fee_payment_message:
      "Hallake üksust Tasu Makse Sõnum ja kohandage oma poe seotud seadeid.",

    auto_config: "üksus Konfiguratsioon",

    keys: {
      title: "Privaatne üksus",
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    extra_config: {
      title: "Makse Teenus Konfiguratsioon",
      subtitle: "Hallake üksust üksus Konfiguratsioon ja kohandage oma poe seotud seadeid.",
    },

    recommended_actions: {
      title: "üksus Toimingud",
      subtitle:
        "Hallake üksust üksus Toimingud ja kohandage oma poe seotud seadeid.",
      action_enable: "Toiming üksus",
      make_live_enable: "Avaldamiseks klõpsake",
    },
  },

  /** {@see BGatewayAdd} **/
  edit_gateway: {
    public_keys: "avalikud võtmed",
    private_keys: "Privaatvõtmed (konfidentsiaalne)",
    link: "Veebileht",
    status_title: "Makse Teenus Olek",
    status_message:
      "Hallake üksust Olek Sõnum ja kohandage oma poe seotud seadeid.",
    status_true_description: "Hallake üksust Olek üksus Kirjeldus ja kohandage oma poe seotud seadeid.",

    manual_title: "Käsitsi Pealkiri",
    manual_message:
      "Hallake üksust Käsitsi Sõnum ja kohandage oma poe seotud seadeid.",

    gateway_status: "Olek",
    wallet: "Blockchaini rahakott",
    developer_title: "Arendaja režiim",
    developer_message:
      "Saate töödelda võltsitud tehinguid, kui lüüs toetab silumisrežiimi.",
    live_mode_message: "Kõik tehingud toimuvad reaalajas režiimis.",

    notifications: {
      edit_success: "Lüüsi {gateway_name} muudetud.",
      success_delete: "Makse Meetod koos üksus Kustutatud!",
    },
    debug: {
      title: "üksus & Test",
      subtitle: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },

    limit: {
      title: "Tellimus Piirang",
      subtitle: "Hallake üksust Piirang ja kohandage oma poe seotud seadeid.",
    },
    limit_input: {
      title: "Miinimum Tellimus Summa",
      msg: "üksus",
    },
    currency_input: {
      message: "Hallake üksust Valuuta sisend ja kohandage oma poe seotud seadeid.",
    },
    gateway_code: "Lüüs Kood",

    hold_only_for: "üksus",
    manual_input: {
      false_description:
        "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      false_title: "üksus Pealkiri",
      true_title: "üksus Pealkiri",
      true_description:
        "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
    },
    delete_verify_input: {
      true_title: "üksus Pealkiri",
      true_description:
        "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
    },
    delete_alert: {
      title: "Kustuta Makse Meetod",
      message: "Hallake üksust Kustuta üksus ja kohandage oma poe seotud seadeid.",
      action: "Kustuta Makse Meetod",
    },
  },

  /** {@see BPageGiftcard} **/
  gift_card: {
    title: "Kinkekaardid",
    menu: {
      edit: "Muuda",
      new_card: "Loo kaart",
      list: "Kaardid",
      orders: "Tellimused",
      dashboard: "Armatuurlaud",
      back: "Kinkekaardid",
    },

    /** {@see AdminGiftCardDashboardPage} **/
    dashboard: {
      title: "Kinkekaartide haldamise armatuurlaud",

      /** {@see BGiftcardStatisticsPayment} **/
      amount_widget: {
        title: "Kaardimakse",
        title_small: "30 päeva",
        chart_amount_pay: {
          y: "Summa",
          label: "Makse",
        },
        chart_buys: {
          y: "Ostab",
          label: "Ostab",
        },
        total_buy: "Ostu kogusumma",
        total_pay_30days: "30 päeva kogumakse",
        total_pay_today: "Tänane makse",
      },

      /** {@see BGiftcardStatisticsCount} **/
      count_widget: {
        title: "Välja antud kaartide arv",
        title_small: "30 päeva",
        total_cards: "Kaartide koguarv",
        used_cards_30days: "30 päeva kasutusiga",
        used_today: "Tänane kasutus",
        chart: {
          new_cards: "Uued kaardid",
          used_cards: "Kasutatud kaardid",
          new_card_name: "Uus kaart",
          used_card_name: "Kasutatud",
        },
      },

      /** {@see BGiftcardExport} **/
      export: {
        title: "Hangi väljundfail",
        cards_list: "Hankige kaartide loend",
        get_report: "Hankige aruanne",
      },
    }, // End of dashboard

    /** {@see AdminGiftCardManagementPage} **/
    cards: {
      title: "Välja antud kaartide nimekiri",
      subtitle:
        "Hallake üksust Kaardid ja kohandage oma poe seotud seadeid.",

      loading_message: "Teabe hankimine ... palun oodake",
      issue_to_user: "Probleem kasutajale",
      table: {
        card_number: "Kaardi number",
        balance: "Tasakaal",
        paid: "Tasuline",
        edit: "Muuda",
        delete: "Kustuta",
        expire: "Aegub",
        user: "Kasutaja",
      },
      delete_alert: {
        title: "Eemalda kaart",
        message: "Kas olete kindel, et soovite selle kaardi kustutada?",
        action: "Kustuta",
      },
      notifications: {
        delete_success: "Kinkekaart kustutatud.",
        edit_success: "Muudatusi on tehtud.",
        issue_success: "Kasutajale edukalt väljastatud kinkekaart.",
      },
      issue_dialog: {
        title: "Kinkekaardi väljastamine",
        action: "Kinnitan. Väljasta kaart kohe",
      },
    }, // End of cards

    /** {@see BGiftcardAdd} **/
    gift_card_edit: {
      title: "Loo kinkekaart",
      validity: "Kehtivus",
      validity_unit: "Kuud",
      currency: "Valuuta",
      initial_balance: "Kaardi esialgne saldo",
      count: "üksus",
      count_unit: "üksus(id)",
      enable_input_message: "Loodud kaartide olek.",
      notifications: {
        create_success_title: "Salvesta",
        create_success: "Loodi {count} uut kaarti",
      },
    },

    /** {@see AdminGiftCardEditPage} **/
    gift_card_edit_page: {
      title: "Muuda kinkekaarti",
    },
  },

  /** {@see BPageDiscountCode} **/
  shop_discount: {
    title: "Sooduskood",
    up_to: "kuni",
    menu: {
      dashboard: "Armatuurlaud",
      orders: "Tellimused",
      back: "Sooduskoodid",
    },

    /** {@see BPageDiscountCodeDashboard} **/
    dashboard: {
      title: "Allahindluskoodide haldamise armatuurlaud",
      chart_amount_buy: {
        y: "Ostusumma {currency}",
        label: "Osta",
      },
      chart_amount_discount: {
        y: "Allahindlus {currency}",
        label: "Allahindlus",
      },
      chart_used: {
        y: "Kasutamiste hulk",
        label: "Ajad",
      },
    },
  },

  /** {@see BPageCoupon} **/
  shop_coupon: {
    title: "Kupongid",
    up_to: "kuni",
    menu: {
      dashboard: "Armatuurlaud",
      back: "Kupongid",
      orders: "Tellimused",
    },

    /** {@see BPageCouponDashboard} **/
    dashboard: {
      title: "Kupongihalduse juhtpaneel",
      chart_amount_buy: {
        y: "Ostusumma {currency}",
        label: "Osta",
      },
      chart_amount_discount: {
        y: "Kupong {currency}",
        label: "Kupong",
      },
      chart_used: {
        y: "Kasutamiste hulk",
        label: "Ajad",
      },
    },
  },

  /** {@see BPageOffer} **/
  shop_offer: {
    title: "Pakkumised",
    up_to: "kuni",
    menu: {
      dashboard: "Armatuurlaud",
      orders: "Tellimused",
      back: "Pakkumised",
    },

    /** {@see BPageOfferDashboard} **/
    dashboard: {
      title: "Pakkumiste haldamise armatuurlaud",
      chart_amount_buy: {
        y: "Ostusumma {currency}",
        label: "Osta",
      },
      chart_amount_discount: {
        y: "Pakkumine {currency}",
        label: "Pakkumine",
      },
      chart_used: {
        y: "Kasutamiste hulk",
        label: "Ajad",
      },
    },
  },

  /**
   * @see BOrderConnectsList
   */
  order_connect_list: {
    subtitle:
      "Hallake üksust Tellimus Connect OS Loend ja kohandage oma poe seotud seadeid.",
  },
  /** {@see BAccountCard} **/
  account_card: {
    pay_create_receipt: "Maksa aktiveerimistasu",
    balance: "Tasakaal",
    locked: "Lukustatud",
    transfer: "Ülekanne",
    charge: "Deposiit",
  },

  /** {@see TimelineStatus} **/
  timeline: {
    note: "{message}",
    info: "{message}",
    error: "{message}",

    buy: "Kassasse",
    payment: "Makse",

    confirm:
      "Tellimuse kinnitus, <b>{success}</b> kinnitatud ja <b>{fail}</b> tagasi lükatud.",
    prepare: "Tellimuse ettevalmistamine.",
    send: "Tellimus tarnitakse <b>{delivery}</b> .",
    delivered: "Tellimus on kliendile üle antud.",
    "fill-inputs": "Ostja täitnud teabe sisestamise vormi.",
    "return-add": "Esitage toote tagastamise taotlus, {product}.",
    "return-accept": "Tagastamistaotlus {return_code} on kinnitatud.",
    "return-reject": "Taotlus {return_code} lükati tagasi.",

    "reject-order": "Keeldu tellimusest. Kood: {reject_code}.",
    "reject-order-clear": "Tühista tellimuse tagasilükkamine. Kood: {reject_code}.",

    "delivery-returned":
      "Tellimust klient ei saanud ja see tagastati. On vaja uuesti saata.",
    "delivery-canceled": "Kohaletoimetamine tühistatud. On vaja uuesti saata.",
    "edit-receiver-info": "Tellimuse tarneaadressi muutis ostja.",
    "edit-billing-info": "Ostja muutnud arveldusaadressi.",
    "payment-cod-confirm": "COD Makse kinnitati.",
    "payment-cash-confirm":
      "Kinnitati arve tasumine {amount} {currency} sularahas.",
    "payment-dir-confirm": "Otsemakse kviitung kinnitati.",

    vendor: "Tarnija tellimuse olek <b>{from}</b> muudeti olekuks <b>{to}</b> .",

    "connect-sync": "Tellimuse sünkroonis Connect OS.",
    "connect-shipped": "Ühendustellimuse saatis {shipping}.",
    "connect-returned": "Ühenduse tellimuse tagastas {shipping}.",
    "connect-failed": "Partneri poolt tellimust täitmine ebaõnnestus. {reason}",
    "connect-canceled": "Partner tühistas tellimuse. {reason}",
    "connect-action-cancel": "Tellimuse tühistamise taotlus. {reason}",
    "connect-put-hold": "Tellimus pandi ootele. {reason}",
    "connect-remove-hold": "Tellimus eemaldati ootel. {reason}",
    "connect-confirmed": "Tellimus kinnitati.",

    "vendor-payout": "💸 Väljamakse müüjale.",
    "vendor-wallet-transaction": "üksus Rahakott Tehing.",

    "vendor-sms":
      "<b></b> Hallake üksust Müüja SMS ja kohandage oma poe seotud seadeid. {vendor} {phone}",

    // ━━━━━━━━━━━━━━━━━━━━━━ Email Packs ━━━━━━━━━━━━━━━━━━━━━━

    "email-buy": "Saada kliendile ostukinnitus.",
    "email-payment": "Saada kliendile maksekinnitus.",
    "email-update": "Saada kliendile tellimuse värskenduse e-kiri.",

    "email-vendor":
      "🔔 Tellimuse teavitusmeil on saadetud aadressile <b>{vendor}</b> ╏ {email}.",

    // ━━━━━━━━━━━━━━━━━━━━━━ SMS Packs ━━━━━━━━━━━━━━━━━━━━━━
    "sms-payment":
      "Hallake üksust SMS Makse ja kohandage oma poe seotud seadeid. {phone}",
    "sms-ready-to-ship":
      "Seadistage ja hallake seda valikut oma poe jaoks. {phone}",
    "sms-ready-to-pickup":
      "Saada kliendile SMS teatega, et tellimus on järeletulemiseks valmis, numbrile {phone}.",
    "sms-order-confirmation":
      "Hallake üksust SMS Tellimus üksus ja kohandage oma poe seotud seadeid. {phone}",

    "count-adjustment":
      'Toote "{product}" kogus on muudetud {from}-lt {to}-le.',
  },

  /** {@see FinanceInlineChart} **/
  inline_chart: {
    today: "Täna",
    last_days: "{days} päeva tagasi",
  },
  /** {@see BProductsWindow} **/
  products_select: {
    move_category: "Teisalda kategooria <b>{category}</b> teise kategooriasse",
    move_product: "Teisaldage toode <b>{product}</b> kategooriasse",
    load_more_products:
      "Hallake üksust Laadi Rohkem Toode ja kohandage oma poe seotud seadeid.",
    product_menu: {
      dashboard: "Toote armatuurlaud",
      inventory: "Inventuur ja variandid",
    },
    notifications: {
      copy_success: "Toote koopia.",
      change_category_success: "Tootekategooria muudetud.",
    },

    filter_box: {
      no_root_filter_message: "Ei üksus Filter Sõnum",
      has_root_filter_message: "koos üksus Filter Sõnum",
      set_filter_message: "määra Filter Sõnum",
      edit_action: "Muuda üksus Filter",
      clear_action: "üksus Toiming",
    },
    ai: {
      title: "AI Toode üksus",
    },
    menu: {
      select_all_products: "üksus Kõik Toode",
      unselect: "üksus",
      sort_categories: "üksus / Sorteeri Kategooriad",
      subscription_vendor_not_support_message:
        "Hallake üksust Tellimus Müüja üksus Tugi Sõnum ja kohandage oma poe seotud seadeid.",
      vendor_owner_not_assignable_message:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
      category_assign_profile: "Määra kategooria toodetele profiil",
      category_assign_profile_subtitle: "Maks, Tarne, Juhend, Garantii,...",
      bulk_discount: "üksus Allahindlus",
      bulk_discount_subtitle: "Rakenda Allahindlus on Kõik Toode.",
    },

    engine: {
      title: "Pealkiri",
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      load_in_tips: "Laadi tooted kategooriatest jaotises {category}.",
      action: "Muuda {category} üksus",
    },
  },
  /** {@see BProductsPanel} **/
  product_panel: {
    excel_import: {
      title: "Pealkiri",
      select_file: "üksus Fail",
      max_file: "Maksimum Fail üksus 20mb",
      download_sample: "Laadi alla Näidis",
    },
    ai: {
      title: "AI Toode üksus",
    },
  },

  /** {@see BOrderDashboardVendor} **/
  order_vendor: {
    has_panel: "koos üksus",
    no_panel: "Ei üksus",
    manual_action: {
      title: "Käsitsi Toimingud",
      message: "Hallake üksust Käsitsi Toiming ja kohandage oma poe seotud seadeid.",
      guides: [
        "Hallake üksust Juhend ja kohandage oma poe seotud seadeid.",
        "Hallake üksust Juhend ja kohandage oma poe seotud seadeid.",
        "Juhend",
      ],
    },
    payouts: {
      title: "Väljamaksed",
      message: "Hallake üksust Väljamaksed ja kohandage oma poe seotud seadeid.",

      charge_tooltip: "Laadi Müüja Rahakott.",
      withdraw_tooltip: "üksus",
      payout_tooltip: "Väljamakse müüjale.",
    },
    order_canceled: "Tellimus Tühista",
    order_rejected: "Tellimus Lükka tagasi by Müüja",
  },

  /**
   * @see VPageVendorDashboard
   */
  vendor_dashboard: {
    info: {
      subtitle: "Turuplats Teave.",
    },
    performance: {
      subtitle: "üksus Müügid Toimivus.",
    },
    products: {
      title: "Tooted",
      subtitle:
        "Hallake üksust Toode ja kohandage oma poe seotud seadeid.",
    },
    wallets: {
      title: "Minu rahakott",
      subtitle:
        "Hallake üksust Rahakotid ja kohandage oma poe seotud seadeid.",
    },

    open_marketplace_page: "Ava Turuplats Leht",
    open_my_store_page: "Ava my Pood Leht",
    open_my_listing_page: "Ava my Kirje Leht",
    add_products_permission: "Lisa Toode Õigus",
    add_categories_permission: "Lisa Kategooriad Õigus",
  },

  /**
   * @see VPageVendorInventory
   */
  vendor_inventory: {
    title: "Toodete loend",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
  },

  /**
   * @see VPageVendorAccess
   */
  vendor_member: {
    title: "Meeskond Liikmed",
    subtitle:
      "Hallake üksust Müüja Liige ja kohandage oma poe seotud seadeid.",
    add_action: "Lisa Uus Liige",
    pending: {
      title: "Ootel Kutsed",
      message: "Hallake üksust Ootel ja kohandage oma poe seotud seadeid.",
    },
  },

  /**
   * @see VMemberAddDialog
   */
  vendor_member_add: {
    title_edit: "Muuda Meeskond Liige",
    title_new: "Lisa Uus Meeskond Liige",
    member: {
      title: "Meeskond Liige Üksikasjad",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    access: {
      view_data: "Vaade üksus",
      apply_changes: "Salvesta üksus",
    },
    inputs: {
      email: {
        label: "E-posti aadress",
        placeholder: "E-post",
      },
    },
    notifications: {
      add_success: {
        title: "Liige Lisa",
        message: "Hallake üksust Lisa Õnnestus ja kohandage oma poe seotud seadeid.",
      },
      update_success: {
        title: "Liige Uuendatud",
        message: "Hallake üksust Uuenda Õnnestus ja kohandage oma poe seotud seadeid.",
      },
    },
    actions: {
      add: "Lisa Liige",
    },
  },

  /**
   * @see VPageVendorPayments
   */
  vendor_payments: {
    list: {
      title: "Väljamakse Ajalugu",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    connect: {
      title: "Connect OS Pank",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    verify_dialog: {
      title: "Kinnita Makse",
      option: {
        title: "Müüja Toiming",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      },
      inputs: {
        verify: {
          label: "silt",
          false_description:
            "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
          true_description: "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        },
      },
    },
  },

  /**
   * @see BVendorOrderRefund
   */
  vendor_order_refund: {
    title: "Tagasimakse Tellimus",
    subtitle:
      "<b></b><b></b> Hallake üksust Müüja Tellimus Tagasimakse ja kohandage oma poe seotud seadeid.",
    inputs: {
      note: {
        message: "Märkus",
        placeholder: "Märkus",
      },
      amount: {
        error_message: "Viga Sõnum",
      },
    },
  },

  /** {@see BOrderVendorPaymentManagement} **/
  order_vendor_payment: {
    message:
      "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
    vendor_wallets: "Müüja Rahakotid",
    my_wallets: "Minu rahakott",
    refund_order_action: "Tagasimakse Tellimus",
    automatic_payout_list: {
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    reversal_transfer_action: "üksus Ülekanne",
  },

  /** {@see BPageOrderPhysicalTrack} **/
  physical_order_track: {
    title: "Riskiaruanded ja -hinnangud",
  },
  /** {@see BPageOrderVirtualTrack} **/
  virtual_order_track: {
    title: "Riskiaruanded ja -hinnangud",
  },
  /** {@see BPageOrderVirtualTimeline} **/
  virtual_order_timeline: {
    title: "Ajaskaala",
  },
  /** {@see BPageOrderPhysicalTimeline} **/
  physical_order_timeline: {
    title: "Ajaskaala",
  },
  /** {@see BPageOrderPhysicalInput} **/
  physical_order_inputs: {},
  /** {@see BOrderTimeline} **/
  order_timeline: {
    message:
      "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
    add_note_subtitle: "Hallake üksust Lisa Märkus Alapealkiri ja kohandage oma poe seotud seadeid.",

    message_input: "Kirjuta siia sõnum...",
    pin_action: "Kinnitage üles",
    unpin_action: "Vabastage",
    copy_html: "Kopeerige HTML",
    notifications: {
      add_note_success: "Märkus lisatud.",
      edit_note_success: "Märkus muudetud.",
      delete_note_success: "Märkus kustutatud.",
    },
    delete_dialog: {
      title: "Kustuta märge",
      message: "Kas soovite selle märkme kustutada?",
      action: "Kustuta märge",
    },
    resend_dialog: {
      title: "Saada meil uuesti",
      message: "Kas saadate selle meili kindlasti oma kliendile uuesti?",
      action: "Jah, saada uuesti",
      success: "E-kiri saadetakse teie kliendile uuesti.",
    },
  },

  /** {@see BPageShuttleWalletAccounts} **/
  accounts: {
    title: "Minu rahakott",
    message:
      "Peate looma vähemalt ühe konto selle valuutaga, mida Selldone'is kasutate. Teenustasu maksmiseks peate seda kontot täiendama.",
    add_new: "Loo uus konto",
    new_account: "Lisa uus konto",
    new_account_dialog: {
      title: "Uus konto",
      account_name_input: "Kasutaja nimi",
      currency_input: "Valuutaühik",
      currency_input_message:
        "Loodud kontole jäävad ainult selle valuuta väärtused.",
      new_account_wage: "Uue konto loomise hind: esimese konto jaoks tasuta",
      create_account_action: "Loo konto",
    },
  },

  /** {@see UserGifts} **/
  user_gifts: {
    menu: {
      send_gift: "Saada kingitus",
      sent: "Saada",
      received: "Vastu võetud",
    },

    /** {@see BPageShuttleWalletGiftsSend} **/
    send_gifts: {
      title: "Saadetud kingitused",
      sub_title:
        "Saate saata kingitusi oma sõpradele või klientidele. Kingituse saaja võib teie kingituse vastu võtta või tagasi lükata. Summa lukustatakse teie kontol ja võetakse välja, kui saaja nõustub. Vastasel juhul kantakse see summa teie kontole.",
      table: {
        user: "Kasutaja",
        amount: "Summa",
        currency: "Valuuta",
        account_name: "Alates",
        status: "Olek",
        message: "Sõnum",
        created_at: "Loomise kuupäev",
      },
    },

    /** {@see BPageShuttleWalletGiftsReceived} **/
    received_gifts: {
      title: "Saadud kingitused",
      sub_title:
        "Teie saadud kingitused Selldone'ilt või teistelt",

      table: {
        amount: "Summa",
        currency: "Valuuta",
        account_from: "Alates",
        status: "Olek",
        message: "Sõnum",
        created_at: "Loomise kuupäev",
        receive: "Vastu võtta",
      },
    },
  },

  /** {@see BAccountGiftRedeem} **/
  get_gift_dialog: {
    title: "Saate kingituse",
    more: "Veel ..",
    amount: "Summa",
    message: "Sõnum",
    account_to_input: "Sihtkoha konto",
    account_to_input_message: "Kingitussumma kantakse sellele kontole.",
    get_action: "Võta kingitus vastu",
    notifications: {
      received_success_title: "Palju õnne",
      received_success:
        "Kingituse summa {amount} {currency} on teie kontole kantud.",
    },
  },
  /** {@see BAccountGiftSend} **/
  send_gift_dialog: {
    title: "Saada kingitus",
    account_from_input: "Valige konto",
    account_from_input_message: "Kinkesummad võetakse sellelt kontolt välja.",
    receiver_input: "Vastuvõtja",
    receiver_input_message: "Saate sisestada e-posti aadressi või telefoninumbri.",
    message_input: "Sõnum",
    message_input_message: "Saate jätta adressaadile sõnumi.",
    amount_input: "Summa",
    currency_input: "Valuutaühik",
    currency_input_message: "Hind on arvutatud selles valuutas.",
    send_action: "Saada kingitus",
    notifications: {
      send_success: "Kingitus summas {amount} {currency} saadeti saajale {receiver}.",
    },
  },

  /** {@see BAccountInput} **/
  account_list: {
    account_input: "Konto number",
    account_input_message:
      "Selle valuuta kingituste summad kantakse sellele kontole.",
    free_balance: "Tasuta saldo",
    account_name: "Kasutaja nimi",
  },
  /** {@see OPageMonetizeAccounts} **/
  user_monetize_accounts: {
    title: "Hoiukontod",
    sub_title:
      "Kingitussummad kantakse nendele kontodele automaatselt.",
    message:
      "Selldone deponeerib raha teie sotsiaalmeedia tegevuste, Selldone arenduses osalemise, sõprade tutvustamise ja muu jaoks. Valides iga valuuta jaoks sissemaksekonto, kantakse kingituse summad automaatselt teie domeeni kontole. Neid summasid saab krediteerida Selldone'ile. Väljamakseid saavad teha ainult äripartnerid.",
    add_account_action: "Lisada konto",
    add_dialog: {
      title: "Kingituste saamiseks ühendage konto",
      account_input: "Konto number",
      account_input_message:
        "Selle valuuta kingituste summad kantakse sellele kontole.",
      set_as_default_action: "Valige vaikekontoks",
    },
    table: {
      currency: "Valuuta",
      account_number: "Konto number",
      account_name: "Nimi",
      payment: "Sissemakse summa",
      reset_at: "Lähtesta",
      delete: "Kustuta",
    },
    notifications: {
      set_success: "Konto lisamine õnnestus.",
      delete_success:
        "Konto on edukalt eemaldatud kingituste vastuvõtmise vaikekontode loendist.",
    },
    delete_alert: {
      title: "Kustuta konto",
      message:
        "Kas soovite selle konto kingituskontode loendist eemaldada?",
      action: "Kustuta",
    },
  },
  /** {@see UserMonetize} **/
  user_monetize: {
    title: "Raha teenida",
    menu: {
      plans: "Plaanid",
      accounts: "Kontod",
      participant: "Osaleja",
    },
  },
  /** {@see OPageMonetizeReferral} **/
  user_monetize_plans: {
    title: "Koostöö- ja monetiseerimisprojektid",
    sub_title:
      "Saate soovituskingituste eest kontokrediiti. Need summad kantakse teie kontolt ja neid saab välja võtta ainult Selldone'i äripartneritelt (mitte kõigilt). Võite kulutada raha Selldone'i teenustasule.",

    discount: "Allahindlus",
    your_income: "Sinu sissetulek",
    level_2: "Alates teisest tasemest",
    level_3: "Alates kolmandast tasemest",
    link_message: "Liikmelisus: {registered}, vastu võetud: {accepted}",
    link_tip:
      "Saate lisada fraasi ?ref={link_code} iga jagatud aadressi lõppu.",
    table: {
      currency: "Valuuta",
      amount: "Tasakaal",
      total: "Kogu makse",
      payment_date: "Viimane maksekuupäev",
      withdraw: "Väljavõtmine",
    },

    notifications: {
      get_credit_success:
        "Soovitud summa on teie kontole kantud.",
    },
  },
  /** {@see BPageShuttleIdentity} **/
  basic_information: {
    title: "Minu identiteet ja profiil",
    email: "E-posti aadress",
    tel: "Mobiili number",
    address: "aadress",
    payment: "Kehtivad tehingud",
    personal_information: "Isikuandmed",
    main_profile: "Peamine profiil",
    main_profile_subtitle:
      "See teave on kõigile avalikult kättesaadav.",
    kyc_waiting_info:
      "Kontrollime teie sisestatud teabe õigsust. See protsess on KYC reeglite kohaselt kohustuslik ja vähendab finantstehingute riski. Saate kasutada selle teenuse praegusi ja tulevasi eeliseid.",

    personal_info_dialog: {
      title: "Isikuandmed",
      name_input: "Eesnimi",
      family_name_input: "Perekonnanimi",
      number_input: "Passi number (või riiklik kood)",
      birthday_input: "Sünnipäev",
      birthday_input_placeholder: "Sisestage oma sünnipäev",
      address_input: "aadress",
      postcode_input: "Postiindeks",
      tel_input: "Kontaktnumber",
      passport_image_input: "Valige passi pilt",
      passport_image_input_message:
        "Laadige üles oma passipildi skanneering.",
      personal_image_input: "Valige oma pilt",
      personal_image_input_message:
        "Laadige skannitud pilt oma rahvuskaardile pildile edasi-tagasi.",
    },
    profile_dialog: {
      title: "Peamine profiil",
      subtitle:
        "Hallake üksust Profiil dialoog ja kohandage oma poe seotud seadeid.",
      full_name_input: "Täisnimi",
      tel_input: "Kontaktnumber",
      email_input: "Meil",
      website_input: "Veebileht",
      address_input: "aadress",
      about_input: "Minust",
      about_long_input: "Pikk tekst minust",
      image_input: "Valige profiilipilt",
      image_input_message:
        "Laadige oma pilt üles. Seda pilti kasutatakse teie profiilipildina.",
      notifications: {
        update_profile_success: "Teie profiili on värskendatud.",
        update_personal_info_success:
          "Teie andmed registreeriti edukalt",
      },
    },
    charge_account_approve_message:
      "Pangatehingu kinnitamiseks võtke oma kontolt tasu.",
    payment_approval: "Makse kinnitamine",
    residential_address_checking:
      "Teie elukoha aadressi dokumendid on kontrolljärjekorras.",
    add_residential_address:
      "Lisage oma asukoht ja elukoha aadressi tõendavad dokumendid.",
  },
  /** {@see BUserPhoneVerify} **/
  phone_verify: {
    title: "Mobiili number",
    step1_title:
      "Sisesta oma mobiilinumber.",
    phone_number_input: "Mobiili number",
    next: "Järgmine samm",
    sms_code_input: "Kinnituskood",
    sms_code_message: "6-kohaline kinnituskood saadeti numbrile {phone_number}.",

    notifications: {
      duplicated_number_error: "Olete selle numbri juba heaks kiitnud.",
      send_activation_code_success_title: "Kinnituskood",
      send_activation_code_success:
        "Kinnituskood saadeti numbrile {phone_number}.",
      verify_success: "Teie mobiilinumber on kinnitatud",
    },
  },
  /** {@see BPageShuttleCompanies} **/
  companies: {
    title: "Minu ettevõtte kontod",
    message:
      "Ettevõtted, ettevõtjad ja professionaalsed meeskonnad saavad arendada tooteid ja rakendusi, mis põhinevad Selldone'il. Ettevõtteprofiili loomine on kohustuslik.",
    new_company: "Uus firma",
  },
  /** {@see BCompanyAdd} **/
  add_company: {
    name_input: "Ettevõtte nimi",
    website_input: "Veebileht",
    email_input: "Meil",
    address_input: "aadress",
    tel_input: "üksus",
    mobile_input: "Mobiilne",
    edit_action: "Muuda ettevõtet",
    create_action: "Loo ettevõte",
    notifications: {
      add_success: "Ettevõttekonto {name} loodud.",
      edit_success: "Ettevõttekonto muudetud.",
    },
  },
  /** {@see UserAccessControl} **/
  user_access_control: {
    menu: {
      personal_key: "Isiklik",
      shop_key: "Kliendid",
      apps: "Rakendused",
    },
    connected_apps_title: "Ühendatud rakendused",
    connected_apps_message:
      "Näete kõigi teie domeenikontoga ühendatud poodide ja rakenduste loendit. Saate juurdepääsu mõnele neist kustutada.",
    clients_title: "Kliendid",
    clients_message:
      "Neid võtmeid kasutab teie server juurdepääsulubade loomiseks. Pange tähele, et võtmed on konfidentsiaalsed ja paigutatakse ainult serverisse nii, et need pole teistele nähtavad.",
    personal_keys_title: "Isiklikud juurdepääsuvõtmed",
    personal_keys_message:
      "Siin saate luua oma konto võtmed. Pange tähele, et need võtmed pääsevad teie kontole juurde. Looge ja kasutage neid võtmeid ainult siis, kui teate täpselt, mida teete.",
  },

  /** {@see BPageShuttleSecurity} **/
  user_security_control: {
    title: "Konto turvalisus",
    message: "Siin saate muuta oma konto turvaseadeid.",

    delete: {
      title: "Kustuta konto",
      subtitle:
        "Enne konto kustutamist veenduge, et olete kõik poed kustutanud.",
      action: "Olen kindel, kustutage mu konto",
      agreement:
        "Nõustun, et kogu minu teave kustutatakse teie serverist. Teie teave kustutatakse vastavalt meie määratud ajakavale, et vältida pettusi või väärkasutust.",
    },

    list: {
      email: {
        title: "Peamine e-posti aadress",
        sub_title:
          "Teil on võimalus värskendada selle kontoga seotud peamist e-posti aadressi.",
        action_title: "Peamise e-posti aadressi muutmine",
        action: "Saada kinnituslink",
      },
      password: {
        title: "Parool",
        sub_title: "Valige oma konto jaoks tugev parool.",
        action_title: "Konto juurdepääsu parool",
        not_exist: "Pole sisestatud",
        action: "Muuda salasõna",
      },
      phone: {
        title: "Mobiili number",
        sub_title:
          "Kinnitage oma mobiiltelefoni number. Selle numbri kaudu saate sisse logida.",
        action_title: "Konto esmane telefoninumber",
        action: "Kinnitage number",
      },

      two_step: {
        title: "Kaheastmeline sisestus",
        sub_title:
          "Kinnitage oma mobiiltelefoni number. Selle numbri kaudu saate sisse logida.",
        action_title: "Suurendage konto turvalisust",
        activated_action: "Aktiveeritud",
        active_action: "Praegu aktiivne",
      },
    },
    two_step_auth: {
      step_1: {
        title: "Installige rakendus Google Authenticator",
      },
      step_2: {
        title: "Sisestage rakenduse loodud kood",
        message:
          "6-kohaline kood genereeritakse teie mobiiltelefoni algoritmi abil. Rakenduse saate alla laadida järgmiselt lingilt. Parooli sisaldava QR-koodi loomiseks vajutage koodigeneraatori klahvi.",
        qr_code_info:
          "Kui skannimine pole võimalik, saate koodi käsitsi kopeerida ja rakendusse kleepida.",
        create_new_code: "Loo uus kood",
        qr_code_scanning:
          "Skannige Google Authenticator Mobile Appi loodud QR-kood ja sisestage selle lehe kasti kinnitamiseks genereeritud kood.",
        qr_code_regenerate_info:
          "Märkus. Ülaltoodud klahvi vajutamisel luuakse uus võti ja eelmine klahv muutub kasutuskõlbmatuks. Sisestage oma telefonirakendusse uus võti.",
      },
      step_3: {
        title: "Sisestage loodud kood",
        message:
          "Sisestage allolevale väljale rakenduses loodud pääsukood.",
        activation_key_input: "Juurdepääsukood",
      },
      activated_alert: "Kaheastmeline sisselogimine on lubatud.",
      activated_message:
        "Teie kontole on lubatud kaheastmeline sisselogimine. Nüüdsest peate oma kontole juurdepääsuks sisestama teise koodi, mis muutub iga 30 sekundi järel. Kaheastmelise sisselogimise keelamiseks topeltklõpsake nuppu Vajutage sammu ja minge läbi.",
      cancel_two_step_login_action: "Kaheastmelise sisselogimise tühistamine",
      cancel_two_step_login_info:
        "Kui soovite kaheastmelise kinnitamise keelata, sisestage oma parool ja klõpsake kaheastmelisel sisselogimisklahvil.",
      password_input: "Parool",
      cancel_2fa_action: "Kaheastmelise sisselogimise tühistamine",
    },

    change_password_dialog: {
      title: "Muuda salasõna",
      message: "Kasutage keerulist ja meeldejäävat parooli.",
      password_input: "Praegune salasõna",
      new_password_input: "Uus salasõna",
      re_new_password_input: "Korrake uut parooli",
      tips: {
        length: "Parool peab koosnema vähemalt 8 tähemärgist",
        chars: "Vähemalt üks suurtäht ja üks number.",
        match: "Parool sobitatud.",
      },
      change_password_action: "Muuda salasõna",
      notifications: {
        change_password_title: "Muuda salasõna",
        change_password: "Parooli muutmine õnnestus.",
      },
    },
  },
  /** {@see AuthorizedClients} **/
  authorized_clients: {
    title: "Ühendatud poodide/rakenduste loend",
    table: {
      name: "Nimi",
      app: "Rakendus",
      scopes: "Ulatused",
      shop: "Piiratud pood",
    },
    remove_action: "Eemalda juurdepääs",
    delete_alert: {
      title: "Kustuta",
      message:
        "Kas soovite selle juurdepääsu tühistada? Pange tähele, et sellel rakendusel ei ole enam juurdepääsu teie kontole.",
      action: "Juurdepääsust keeldumine",
    },
  },
  /** {@see Clients} **/
  clients: {
    title: "Klientide nimekiri",
    create_new_action: "Loo uus klient",
    table: {
      client_id: "Kliendi ID",
      app: "Rakendus",
      name: "Teise nimega",
      secret_key: "Salajane võti",
    },
    create_dialog: {
      title: "Uus klient",
      error_msg: "<strong>Viga!</strong> Vabandust, ilmnes viga!",
      name_input: "Nimi",
      name_input_message: "Midagi, mida teie kasutajad tunnevad ära ja usaldavad.",
      redirect_input_message: "Tagasta aadress oma saidile.",
    },
    edit_dialog: {
      title: "Muuda juurdepääsu",
    },
    delete_alert: {
      title: "Kustuta",
      message: "Kas soovite selle kliendi kustutada?",
      action: "Kustuta",
    },
  },
  /** {@see PersonalAccessTokens} **/
  personal_access_tokens: {
    title: "Isiklike juurdepääsulubade loend",
    create_action: "Loo uus tunnus",
    table: {
      name: "Nimi",
      scopes: "Juurdepääsud",
      expire_at: "Aegumiskuupäev",
    },
    create_dialog: {
      title: "Pealkiri",
      error_message: "<strong>Viga!</strong> Vabandust, ilmnes viga!",
      name_input: "Alias Ex. minu sümboolne nimi",
      name_input_message: "Lemmik märgi nimi.",
      scopes_list: "Token juurdepääsu loend",
    },
    access_token_dialog: {
      title: "Isiklik juurdepääsuvõti",
      message:
        "Siin on teie isikliku juurdepääsumärgi tunnus. See on ainus kord, kui seda märki näidatakse, nii et ärge jätke seda ilma! Nüüd saate seda luba kasutada API taotlemiseks.",
    },
    delete_alert: {
      title: "Kustuta",
      message: "Kas soovite selle juurdepääsuloa kustutada?",
      action: "Kustuta",
    },
  },

  /** {@see Scopes} **/
  scopes: {
    //--------------------------- Profile ---------------------------
    profile: {
      name: "profiil",
      description:
        "Lugege profiiliteavet, sealhulgas nime, e-posti aadressi, pilti ja autentimise olekut.",
    },
    phone: {
      name: "telefoninumber",
      description: "juurdepääs telefoninumbrile.",
    },
    address: {
      name: "Aadressid",
      description: "Salvestatud aadressi lugemine aadressiraamatust.",
    },
    "user:profile:write": {
      name: "Profiil Haldus",
      description: "Muuda üksus Halda Kasutaja Profiil Teave.",
    },

    //--------------------------- Storefront ---------------------------
    "my-gift-cards": {
      name: "Kinkekaardid",
      description: "Juurdepääs Minu kaartidele.",
    },
    "order-history": {
      name: "Tellimuste ajalugu",
      description: "Lugege tellimuste ajalugu.",
    },
    buy: {
      name: "ostma",
      description: "Esitage tellimus ja ostke poest.",
    },

    //--------------------------- Backoffice ---------------------------
    articles: {
      name: "Redigeeri sisu",
      description: "Redigeeri artikleid.",
    },
    "backoffice:notifications": {
      name: "Teavitused Haldus",
      description: "üksus Teavitused",
    },
    "backoffice:order:write": {
      name: "Tellimus Haldus",
      description: "Muuda üksus Halda Pood Tellimus.",
    },
    "backoffice:order:read": {
      name: "Tellimus Juurdepääs",
      description: "üksus Pood Tellimus.",
    },
    "backoffice:support-tickets": {
      name: "Tugi üksus",
      description: "Halda Tugi üksus.",
    },
    "backoffice:shop:read": {
      name: "Pood Teave",
      description: "üksus",
    },
    "backoffice:shop:write": {
      name: "Pood Haldus",
      description: "Loo üksus Halda Pood Üksikasjad.",
    },
    "backoffice:shop:add": {
      name: "Lisa Pood",
      description: "üksus Pood Lisa",
    },
    "backoffice:shop:delete": {
      name: "Kustuta Pood",
      description: "üksus Pood Kustuta",
    },
    "backoffice:giftcard:write": {
      name: "Kingitus Kaart Haldus",
      description: "Loo üksus Halda Kingitus Kaardid.",
    },
    "backoffice:giftcard:read": {
      name: "Kingitus Kaart Juurdepääs",
      description: "üksus",
    },
    "backoffice:faq:write": {
      name: "FAQ Haldus",
      description: "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    "backoffice:faq:read": {
      name: "FAQ Juurdepääs",
      description: "üksus",
    },
    "backoffice:category:write": {
      name: "Kategooria Haldus",
      description: "Loo üksus Halda Toode Kategooriad.",
    },
    "backoffice:category:read": {
      name: "Kategooria Juurdepääs",
      description: "üksus",
    },
    "backoffice:product:write": {
      name: "Toode Haldus",
      description: "Lisa üksus Halda Toode.",
    },
    "backoffice:product:read": {
      name: "Toode Juurdepääs",
      description: "üksus",
    },
    "backoffice:report:read": {
      name: "Aruanne Juurdepääs",
      description: "üksus",
    },
    "backoffice:finance:write": {
      name: "Rahaline Konto Haldus",
      description: "Halda poega seotud finantskontosid.",
    },
    "backoffice:finance:read": {
      name: "Rahaline Konto Juurdepääs",
      description: "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    "backoffice:page:write": {
      name: "Leht Haldus",
      description: "Muuda Pood Lehed.",
    },
    "backoffice:page:read": {
      name: "Leht Juurdepääs",
      description: "üksus",
    },
    "backoffice:logistic:write": {
      name: "Logistika Haldus",
      description: "Halda Logistika Teave.",
    },
    "backoffice:logistic:read": {
      name: "Logistika Juurdepääs",
      description: "üksus",
    },
    "backoffice:staff:write": {
      name: "Töötajad Haldus",
      description: "Muuda üksus Halda Töötajad Üksikasjad.",
    },
    "backoffice:staff:read": {
      name: "Töötajad Juurdepääs",
      description: "üksus",
    },
    "backoffice:business-profile:write": {
      name: "Äri Profiil Haldus",
      description: "Halda Äri Profiilid.",
    },
    "backoffice:business-profile:read": {
      name: "Äri Profiil Juurdepääs",
      description: "üksus Äri Profiil Üksikasjad.",
    },
    "backoffice:discount-code:write": {
      name: "Allahindlus Kood Haldus",
      description: "Halda Pood Allahindlus Kood.",
    },
    "backoffice:discount-code:read": {
      name: "Allahindlus Kood Juurdepääs",
      description: "üksus",
    },
    "backoffice:wallet:write": {
      name: "Rahakott Haldus",
      description: "Halda Kasutaja Rahakotid.",
    },
    "backoffice:wallet:read": {
      name: "Rahakott Juurdepääs",
      description: "üksus",
    },
    "backoffice:coupon:write": {
      name: "Kupong Haldus",
      description: "Halda Pood Kupongid.",
    },
    "backoffice:coupon:read": {
      name: "Kupong Juurdepääs",
      description: "üksus",
    },
    "backoffice:offer:write": {
      name: "Pakkumine Haldus",
      description: "Halda Pood Pakkumised.",
    },
    "backoffice:offer:read": {
      name: "Pakkumine Juurdepääs",
      description: "üksus",
    },
    "backoffice:cashback:write": {
      name: "raha tagasi Haldus",
      description: "Halda Pood raha tagasi Pakkumised.",
    },
    "backoffice:cashback:read": {
      name: "raha tagasi Juurdepääs",
      description: "üksus",
    },
    "backoffice:lottery:write": {
      name: "üksus Haldus",
      description: "Halda Pood üksus.",
    },
    "backoffice:lottery:read": {
      name: "üksus Juurdepääs",
      description: "üksus",
    },
    "backoffice:community:write": {
      name: "üksus Haldus",
      description: "Halda üksus Tegevus.",
    },
    "backoffice:community:read": {
      name: "üksus Juurdepääs",
      description: "üksus",
    },
    "backoffice:customer:write": {
      name: "Klient Haldus",
      description: "Halda Klient Üksikasjad.",
    },
    "backoffice:customer:read": {
      name: "Klient Juurdepääs",
      description: "üksus",
    },
    "backoffice:ribbon:write": {
      name: "üksus Haldus",
      description: "Halda Pood üksus.",
    },
    "backoffice:ribbon:read": {
      name: "üksus Juurdepääs",
      description: "üksus",
    },
    "backoffice:ai:write": {
      name: "AI Haldus",
      description: "Halda AI Konfiguratsioon.",
    },
    "backoffice:ai:read": {
      name: "AI Juurdepääs",
      description: "üksus",
    },
    "backoffice:vendor-payment:write": {
      name: "Müüja Makse Haldus",
      description: "Halda Müüja Maksed.",
    },
    "backoffice:vendor-payment:read": {
      name: "Müüja Makse Juurdepääs",
      description: "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    "backoffice:company:read": {
      name: "Ettevõte Juurdepääs",
      description: "üksus",
    },
    "backoffice:company:write": {
      name: "Ettevõte Haldus",
      description: "Halda Ettevõte Teave.",
    },
    "backoffice:note:read": {
      name: "Märkus Juurdepääs",
      description: "üksus",
    },
    "backoffice:note:write": {
      name: "Märkus Haldus",
      description: "Halda Märkused.",
    },
    "backoffice:affiliate:write": {
      name: "Siduspartner Haldus",
      description: "Halda Siduspartner Teave.",
    },
    "backoffice:affiliate:read": {
      name: "Siduspartner Juurdepääs",
      description: "üksus",
    },
    "backoffice:print:write": {
      name: "üksus Haldus",
      description: "Halda üksus Valikud.",
    },
    "backoffice:print:read": {
      name: "üksus Juurdepääs",
      description: "üksus",
    },
    "selldone:token:read": {
      name: "üksus Juurdepääs",
      description: "üksus",
    },
    "selldone:token:write": {
      name: "üksus Haldus",
      description: "Halda üksus.",
    },

    //--------------------------- Selldone ---------------------------
    "selldone:monetization:read": {
      name: "üksus Juurdepääs",
      description: "üksus",
    },
    "selldone:monetization:write": {
      name: "üksus Haldus",
      description: "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    "selldone:identification": {
      name: "üksus Juurdepääs",
      description: "Juurdepääs Kasutaja üksus Üksikasjad.",
    },
    "selldone:developer:read": {
      name: "Arendaja Juurdepääs",
      description: "selldone Arendaja üksus",
    },
    "selldone:developer:write": {
      name: "Arendaja Haldus",
      description: "Halda Arendaja Teave.",
    },
    "selldone:security:write": {
      name: "Turvalisus Haldus",
      description: "Halda Turvalisus Konfiguratsioon.",
    },

    //--------------------------- Connect ---------------------------
    "connect:provider:write": {
      name: "Teenusepakkuja Haldus",
      description: "Halda Ühendatud Teenus Teenusepakkujad.",
    },
    "connect:provider:read": {
      name: "Teenusepakkuja Juurdepääs",
      description: "Connect OS Teenusepakkuja üksus",
    },

    //--------------------------- Agency ---------------------------
    "agency:read": {
      name: "üksus Juurdepääs",
      description: "üksus",
    },
    "agency:write": {
      name: "üksus Haldus",
      description: "Halda üksus Teave.",
    },

    //--------------------------- Vendor ---------------------------

    "vendor-read": {
      name: "Müüja Juurdepääs",
      description: "Müüja üksus",
    },
    "vendor-write": {
      name: "Müüja Haldus",
      description: "Halda Müüja Teave.",
    },
  },

  scope_group: {
    backoffice: {
      title: "üksus",
      description: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    storefront: {
      title: "üksus",
      description: "Juurdepääs kliendi- ja poeinfole.",
    },
    profile: {
      title: "profiil",
      description: "Juurdepääs Kasutaja Profiil Teave.",
    },
    selldone: {
      title: "Selldone",
      description: "selldone",
    },
    others: {
      title: "üksus",
      description: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    vendor: {
      title: "Müüja",
      description: "Hallake üksust Müüja ja kohandage oma poe seotud seadeid.",
    },
    connect: {
      title: "Connect OS OS",
      description: "Juurdepääs Ühendatud Teenused üksus Teenusepakkujad.",
    },
    agency: {
      title: "üksus",
      description: "üksus",
    },
  },

  /** {@see AdminCompanyPage} **/
  company_page: {
    title: "Ettevõte",
    create_app: "Loo uus rakendus",
    menu: {
      edit: "Muuda",
      apps: "Rakendused",
      dashboard: "Armatuurlaud",
      companies: "Ettevõtted",
    },
    /** {@see AdminCompanyPage_Dashboard} **/
    dashboard: {
      /** {@see CompanyInfoWidget} **/
      info_widget: {
        title: "Ettevõtte registreerimise teave",
        address: "aadress",
        website: "Veebileht",
        email: "Meil",
        phone: "telefoninumber",
        register: "Registreeri",
        developer: "Arendaja",
        verified: "Kinnitatud",
        golden: "Kuldne",
      },
    },
    /** {@see AdminCompanyPage_Develop} **/
    developer: {
      title: "Arendajad",
      menu: {
        new: "Uus",
        apps: "Rakendused",
      },
    },
    /** {@see AdminCompanyPage_Edit} **/
    edit: {
      title: "Muuda",
    },
  },
  /** {@see BAppAdd} **/
  add_app: {
    category_input: "Kategooria",
    code_input: "Kood",
    name_input: "Nimi",
    description_input: "Kirjeldus",
    video_input: "Video URL",
    public_form: "Üldteabe struktuur",
    private_form: "Isikliku teabe struktuur",
    icon_input: "Rakenduse ikoon",
    logo_input: "Logo rakendus",
    enable_input: "Kas rakendus on aktiivne?",
    edit_action: "Redigeeri rakendust",
    create_action: "Loo rakendus",
    notifications: {
      add_success: "Ettevõttekonto {name} loodud.",
      delete_success: "Ettevõttekonto muudetud.",
    },
  },

  /** {@see AppPage} **/
  app_page: {
    title: "Rakendus",

    menu: {
      edit: "Muuda",
      publish: "Avalda",
      history: "Versioonid",
      dashboard: "Armatuurlaud",
      company: "Ettevõte",
      api: "API",
      images: "Pildid",
    },
    /** {@see AppPage_Dashboard} **/
    dashboard: {
      /** {@see AppInfoWidget} **/
      app_info_widget: {
        title: "Rakendus",
        app_code: "Rakenduse kood",
        category: "Kategooria",
        name: "Nimi",
        installs: "Installige rakendused",
        uninstalls: "Desinstallige rakendused",
        actives: "Aktiivsed rakendused",
        description: "Kirjeldus",
        published: "Avaldatud",
        waiting_for_review: "Kinnituse ootel",
        app_mode: "Rakendusrežiim",
      },
    },
  },
  /** {@see ShopPermissions} **/
  shop_permissions: {
    ADMIN: { text: "Omanik", description: "Täielik juurdepääs kõikidele vitriinidele." },
    PRODUCT: {
      text: "Tootejuht",
      description: "Lisage, muutke ja hallake poe tooteid.",
    },
    AUDITING: {
      text: "Finantsjuht",
      description: "Vaadake finantsteavet ja makseid.",
    },
    CONTENT: {
      text: "Sisuhaldus",
      description: "Vastake küsimustele, kirjutage blogisid ja kujundage lehti.",
    },
    OFFICER: {
      text: "Vanemjuht",
      description: "Vaadake ja jälgige töötajate tegevust.",
    },
    EMPLOYEE: {
      text: "Töötaja",
      description: "Vaata tellimusi ja täida tellimusi.",
    },
    MARKETING: {
      text: "Turundus",
      description:
        "Juurdepääs seadetele ja kampaaniate loomine, meiliturundus ja muud turundusega seotud jaotised.",
    },
    VIEWER: {
      text: "Vaataja",
      description:
        "Võimalus vaadata poe teavet, ilma et oleks võimalik seda redigeerida või muuta.",
    },
  },

  /** {@see ShopRoles} **/
  shop_roles: {
    PhysicalOrdersChecking: {
      text: "Füüsiline kontroll",
      description: "Kontrollige saadud tellimusi.",
    },
    PhysicalOrdersPackaging: {
      text: "Füüsiline pakkimine",
      description: "Ladu ja pakkimisprotsess.",
    },
    PhysicalOrdersDelivery: {
      text: "Füüsiline saatmine",
      description: "Telli saatmine.",
    },
    PhysicalOrdersSupport: {
      text: "Füüsiline tugi",
      description: "Müügijärgne tugi.",
    },
  },

  /** {@see AccountStatus} **/
  account_status: {
    Checking: "Kontrollimine",
    Approved: "Kinnitatud",
    Rejected: "Tagasi lükatud",
    Deleted: "Kustutatud",
    Banned: "Keelatud",
    Payment: "Makse",
    SelldoneSprite: "Selldone rahakoti konto",
    SelldoneStorage: "Selldone hoiuruum",
  },
  /** {@see BPageAccount} **/
  account_page: {
    title: "Konto",
    menu: {
      setting: "Seaded",
      charge: "Lae",
      transfer: "Ülekanne",
      transactions: "Tehingud",
      history: "Ajalugu",
      cards: "Kaardid",
    },

    /** {@see BPageAccountTransactions} **/
    transactions: {
      title: "Kontotehingud",
      detail: {
        title: "Tehing",
        amount: "Summa",
        description: "Kirjeldus",
        from: "Alates",
        to: "Kuhu",
        created_at: "Kuupäev",
        receipt: "Kviitung",
        receipt_note: "Märge",
      },
      table: {
        type: "Tüüp",
        from: "Kontolt",
        to: "Kontole",
        amount: "Summa",
        receipt: "Kviitung",
        created_at: "Kuupäev",
        description: "Kirjeldus",
      },
    },

    /** {@see BPageAccountTransfer} **/
    transfer: {
      title: "Ülekande tasud",
      form: {
        title: "Ülekandetaotluse vorm",
        sub_title:
          "Deposiit enda või teiste kontodele",
        message:
          "Olge raha ülekandmisel ettevaatlik, ülekande sooritamisel ei saa te tagastada.",
      },
    },
    /** {@see BPageAccountDeposit} **/
    deposit: {
      form: {
        title: "Arvelduskonto",
        sub_title:
          "Litsentside ostmiseks, konto uuendamiseks ja süsteemikviitungite maksmiseks peate oma konto saldot võtma.",
        amount_input: "Summa",
        charge_action: "Tasu konto",
      },
      notifications: {
        qr_title: "Makse",
        qr_message: `Makseaadress {currency} loodud.`,
        gateway_title: "Makse",
        gateway_message: "Ühenduse loomine makseväravaga.",
      },
    },

    /** {@see BPageAccountEdit} **/
    setting: {
      title: "Konto seaded",
      account_name_input: "Kasutaja nimi",
      notifications: {
        updated_success: "Teie konto värskendamine õnnestus.",
      },
    },
  },

  /** {@see BAccountReceiptPaymentDialog} **/
  receipt_payment_dialog: {
    title: "Kviitung Makse",
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
    title: "Tehinguvorm",
    from_input: "Konto numbrilt",
    to_input: "Konto numbrile",
    from_input_message: "Summa võetakse sellelt kontolt maha.",
    account_name: "Kasutaja nimi",
    currency: "Valuuta",
    free_balance: "Vaba jääk",
    to: "Sihtkoha konto",
    amount: "Summa",
    receipt_title: "Kviitungi eest tasumine",
    receipt_input: "Kviitungi number",
    paid_status: "See kviitung on juba makstud.",
    paid_canceled: "See kviitung on tühistatud.",
    description: "Selgitus",
    created_at: "Kuupäev",
    duration: "Kestus",
    unlimited: "Piiramatu",
    add_note_action: "Lisa kirjeldus",
    note: "Märge",
    transfer_action: "Ülekanne",
    confirmation: {
      title: "Saada raha",
      subtitle: "Tehingu kinnitus",
      message:
        "Kui järgmine teave on õige, vajutage tehingu tegemiseks tehingu kinnitusklahvi.",
      from: "Kontolt",
      to: "Kontole",
      amount: "Summa",
      fee: "Ülekandetasu",
      total_pay: "Teie kontolt välja võetud summa",
      receipt: "Kviitung",
      description: "Kirjeldus",
      accept_action: "Tehingu kinnitus",
    },
    enter_account_number: "Sisesta konto number.",
    currency_not_match:
      "Sihtkonto valuuta ei ole sama mis lähtevaluuta",
    account_number_not_valid: "Konto number on õige.",
    account_number_is_valid: "Konto number on õige.",
    receipt_not_valid: "Arve number on vale.",
    receipt_is_valid: "Kviitungi number on õige.",

    notifications: {
      confirm_success: "Tehing edukalt lõpule viidud.",
    },
  },

  /** {@see OPlanCalculator} **/
  price_calculator: {
    title: "Kalkulaator ╏ Sobib teie ettevõttele",
    description:
      "Arvutage ja valige oma igakuise müügi põhjal parim plaan:",
    sale_input: "Igakuine müügisumma",
    hypernova_plan: "Taotle Hypernova %0!",
    show_normal_mode: "Näita tavarežiimi",
    show_hypernova_mode: "Minu tehing on üle 1 miljoni dollari!",
  },

  /** {@see OPlanFeaturesCard} **/
  price_card: {
    billed_monthly: "Arve {amount} kuus.",
    billed_yearly: "Arveldatakse {amount} aastas.",
    buy_license_action: "Osta kohe",
    select_your_store: "Valige oma pood",
  },

  /** {@see BSessionsMap} **/
  shop_session_widget: {
    total_sessions: "Seansse kokku",
  },
  /** {@see BDashboardShopCustomersActivityMap} **/
  user_activities_keys: {
    add_baskets: "Lisa ostukorvi",
    remove_baskets: "Kustuta ostukorvist",
    buys: "Osta",
    products_views: "Vaata toodet",
  },
  /** {@see BDashboardShopAcquisition} **/
  shop_visitors_widget: {
    title: "Külastajate analüüs",
    new_visitors: "Uued külastajad",
    amp: "AMP vaated",
    returning_visitors: "Pöörduvad külastajad",
    page_views: "Lehe vaatamised",
    other_pages: "Muud lehed",
    from_previous_7_days: "viimasest 7 päevast",
  },

  /** {@see BUserAppLevel}   {@see AppLevel}  **/
  app_levels: {
    title: "Rakenduse tase",
    Newbie: "Algaja",
    Beginner: "Algaja",
    Novice: "Algaja",
    Intermediate: "Keskmine",
    Advanced: "Täpsemalt",
  },

  /** {@see Login} **/
  login: {
    register_title: "Ettevõtete meedium,<br> Nauditav kogemus.",
    register_subtitle:
      "Registreeruge täna tasuta. Selldone'i armastavad idufirmad, ettevõtted, ostjad ja müüjad.",

    password_recovery_title: "Parooli taastamine",
    password_recovery_message:
      "Kui unustasite parooli, sisestage oma konto e-posti aadress ja vajutage kinnitusklahvi. Saadame teile parooli lähtestamise lingiga meili.",
    email: "sinu emaili aadress",
    password_recovery_action: "Saate meili varuaadressi",

    register_google: "Jätkake Google'iga",
    register_apple: "Jätkake Apple'iga",
    continue_with: "Jätkake",
    register_linkedin: "Jätkake LinkedIniga",
    register_facebook: "Jätka Facebookiga",
    register_github: "Jätkake GitHubiga",
    create_your_account: "Loo enda konto",
    password_8_chars: "Parool peab koosnema vähemalt 8 tähemärgist.",
    password_upercase_number: "Vähemalt üks suurtäht ja üks number.",
    password_confirm: "Parool ja kinnitus sobisid.",
    privacy_agreement:
      "Registreerudes nõustute Selldone'i <a href='/terms' target='_blank'>kasutustingimuste</a> ja <a href='/privacy' target='_blank'>privaatsuspoliitikaga</a> .",
    register_action: "Lähme, see on tasuta!",
    login_action: "Logi sisse",
    already_signup: "Kas olete juba registreerunud?",
    login_your_account: "Logige oma kontole sisse",
    login_google: "Jätkake Google'iga",
    login_linkedin: "Jätkake LinkedIniga",
    login_facebook: "Jätka Facebookiga",
    login_github: "Jätkake GitHubiga",
    remember_me: "Mäleta mind.",
    login_button: "Logi sisse",
    two_step_problem: "Kas teil on probleeme kaheastmelise parooliga?",
    two_step_problem_action: "Soovin kaheastmelise sisselogimise keelata.",
    two_step_confirm: "Kinnitage pääsukood",
    forgot_password: "Unustasid parooli?",
    signup_free: "Registreeru tasuta",
    checking_robot_message: "Kontrollige, kas olete robot või inimene.",
    notifications: {
      step2_login_success: "Kontole automaatne sisselogimine",
    },
    signup_email: "Registreeruge meili teel",

    name_placeholder: "Nimi",
    email_placeholder: "Meil",
    email_or_username_placeholder: "E-post, kasutajanimi või telefoninumber",
    password_placeholder: "Parool",
    re_password_placeholder: "Kinnita salasõna",
    new_in_samin: "Uus Selldone'is?",
    auto_create_shop: "Poe automaatne loomine",
  },
  /** {@see Layout} **/
  layout: {
    logout: "Logi välja",
    menu: {
      my_public_profile_subtitle: "üksus Avalik Profiil {name}.",

      personal_information: "Isikuandmed ja profiil",
      personal_information_subtitle: "Muuda my Profiil, Aadress üksus KYC.",
      wallet: "Rahakotid ja kontod",
      wallet_subtitle: "Virtuaalne Kontod üksus Ühendatud Makse Kaardid.",

      companies: "Ettevõtted ja ärikontod",
      companies_subtitle: "Ettevõtted Alapealkiri",

      access: "Juurdepääs Minu kontole",
      access_subtitle:
        "Hallake üksust Juurdepääs Alapealkiri ja kohandage oma poe seotud seadeid.",

      security: "Turvalisus",
      security_subtitle: "Hallake üksust Turvalisus Alapealkiri ja kohandage oma poe seotud seadeid.",

      preferences: "Kasutaja eelistused",
      preferences_subtitle:
        "Hallake üksust üksus Alapealkiri ja kohandage oma poe seotud seadeid.",
      my_subscriptions: "Minu tellimused",
      my_subscriptions_subtitle:
        "Hallake üksust my Tellimused Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
  },

  /** {@see PageBuilder} **/
  page_builder: {
    title: "Veebilehe kujundus",

    menu: {
      user_view: "Vaade",
      design: "Disain",
      behavior: "Käitumine",
      seo: "SEO",
      setting: "Seaded",
      embed: "Manusta",
    },
    waiting_fetch: "Teabe vastuvõtmine..",

    /** {@see SettingCustomPage} **/
    setting: {
      title_input: "Lehekülje pealkiri",
      description_input: "Lühike kirjeldus",
      name_input: "Lehe URL (tähed ja numbrid)",
      bg_color_input: "Taustavärv",
      bg_style_input: "Lehekülje tausta stiil",
      page_label_input: "Sildi värv",
      page_dir_input: "Lehe suund",
      ltr: "Vasakult paremale",
      rtl: "Paremalt vasakule",
      designer_note: "Disaineri märkus",
    },

    /** {@see LPageEditor} **/
    design: {
      themes: {
        title: "Isiklik disainiassistent",
        message: "Kujundage oma ettevõtte jaoks parimad lehed ilma kodeerimiseta.",
        page_title_input: "Sisestage oma lehele pealkiri",
      },
      tools: {
        rearrange: "Telli",
        tools: "Tööriistad",
        history: "Ajalugu",
        style: "Stiil",
        typography: "Tüpograafia",
        hierarchy: "üksus",
      },
      no_category: "Kategooriaid pole",
    },

    /** {@see LPageEditorSeo} **/
    seo: {
      message:
        "SEO sätteid reguleerib Selldone SEO mootor automaatselt.",
    },
  },

  /** {@see VerifyEmailCaution} **/
  verify_email_caution: {
    title: "Kinnita oma E-maili aadress",
    message:
      "Uus aktiveerimislink on saadetud teie e-posti aadressile {email}. Enne mis tahes toimingu tegemist kontrollige oma e-posti.",
    resend_message:
      "Kui te pole oma meilis aktiveerimislinki saanud, klõpsake uuesti saatmiseks allolevat nuppu.",
    resend_action: "Saada aktiveerimislink uuesti",
    resend_notice: "Aktiveerimislink saadetud.",
  },

  /** {@see ShopAutomation_Autopilot} **/
  autopilot: {
    start: "Algus kuupäev",
    end: "Lõppkuupäev",
  },

  /** {@see Help} **/
  help: {
    menu: "Menüü",
    more_helps: "Loe rohkem",
  },

  /** {@see WidgetCompanyCard} **/
  company_card: {
    pending_state: "Ootab ülevaatust",
    register: "Registreeritud",
    developer: "Arendaja",
    verified: "Kinnitatud",
    premier: "Peaminister",
  },

  /** {@see ShopSubscriptionList} **/
  shop_license: {
    add: "Lisa tellimus",
    only_last: "Ainult viimane tellimus",
    vouchers: "Vautšerid",
    buy: "Ostke liitumispakett",
    monthly: "Igakuine",
    yearly: "Aastane",
    start_date: "Algus kuupäev",
    end_date: "Lõppkuupäev",
    price: "hind",
    verify: {
      true_title: "Kinnita üksus",
      true_description: "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
    },
    need_charge: "Tasu vaja",
    buy_now: "Osta kohe",
    use_voucher_now: "Kasutage voucherit kohe",
    plan_placeholder: "Valige oma liitumisplaan",
    plan: "Litsentsi plaan",
    use_date: "Aktiveerimise kuupäev",
    validity_duration: "Kehtivusaeg",
    validity_duration_hint:
      "Ostes 12-kuulise litsentsi, saate 30% allahindlust.",

    active_license: {
      title: "Aktiivne litsents",
      subtitle:
        "Teie aktiivse litsentsi teave.",
      subtitle_partner:
        "Teie aktiivse {name} litsentsi teave.",
    },
    licenses_table: {
      title: "Ostetud ajalugu",
      subtitle:
        "See on aktiivsete ja ootel olevate litsentside loend. Pärast rahakoti rahastamist saate pakkumisi osta. Lisaks pange tähele, et tellimuse tühistamisel tagastatakse ülejäänud tellimuse summa teie virtuaalsesse rahakotti.",
    },
    license_detail: {
      title: "Üksikasjad",
      subtitle:
        "Need on teie praeguse plaani piirangud. Lisateabe saamiseks külastage hinnalehte. Oma ettevõtte käivitamiseks ja kasvamiseks pääsete juurde kõikidele pakettide kõikidele funktsioonidele, sealhulgas tasuta paketile. Ettevõtte laiendamisel kaaluge teenustasude vähendamiseks üleviimist kõrgema taseme plaanile.",
    },

    table: {
      plan: "Plaan",
      start_date: "Algus-/lõppkuupäev",
      renewal: "Automaatne uuendamine",
      linked_account: "Lingitud konto/vautšer",
      payment: "Makse",
      cancel: "Tühista",
    },
    notifications: {
      subscribe_success: "Tellimine õnnestus.",
      cancel_success: "Tellimus on edukalt tühistatud.",
    },
    cancel_dialog: {
      title: "Tellimuse kinnituse tühistamine",
      message: "Kas olete kindel, et tühistate selle tellimuse?",
      action: "Tühista tellimus",
    },
    add_dialog: {
      wallet: {
        title: "üksus a Rahakott",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      },
      auto_renewal: {
        true_title: "Automaatne uuendamine",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      },
      options: {
        title: "üksus Valikud",
      },
      verify: {
        title: "üksus",
      },
    },
  },

  /** {@see BLayoutBackofficeShop} **/

  admin_shop_layout: {
    download_txt: "Andmete teksti allalaadimine",
    download_excel: "Laadige Exceli andmed alla",
  },
  /** {@see BUserPreferences} **/
  user_preferences: {
    access: "Juurdepääs",
    template: "Mall",
    feedback: "Tagasiside",
    date_time: "Kuupäev & Aeg",

    company: "Ettevõte",
    company_message: "Kui teil on ettevõte ja soovite rakendusi avaldada.",
    access_keys: "Juurdepääsuklahvid",
    access_keys_message: "Näita kliente ja juurdepääsuvõtmeid.",
    rating: "Kuidas hindaksite oma kogemust Selldone'iga?",
    large_font: "Suured fondid",
    large_font_message: "Kuva tekst tavalisest suuremana",
    samples: "Näidake näidispoode",
    samples_message:
      "Kui see on lubatud, kuvatakse teie paneelil mõned näidispoed.",

    automation: "Automatiseerimine",
    automation_message:
      "Kuva poe armatuurlaual automatiseerimise vahekaart. (Veebihaagid, visuaalne programmeerimine, ...)",
  },

  /** {@see BPageShopSettingLocations} **/
  shop_locations: {
    title: "Riigid, kus teenust osutatakse",
    sub_title:
      "Valige allolevast loendist riigid, kus soovite oma toodet müüa.",

    delete_restriction: "Kustuta piirang",
    set_restriction: "seada piirang",
    notifications: {
      locations_update: "Asukoha värskendamine õnnestus.",
    },
    table: {
      country: "Riik",
      currency: "Valuuta",
      available: "Saadaval",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "Välja müüdud",
    review_unit: "Ülevaade",
    not_original: "Mitte originaal",
  },

  /** @see BProductAddStudio **/
  product_studio: {
    add_mode: "Lisage rohkem üksikasju",
    auto_category: "Automaatselt määratud kategooria",
    add_in_current_category: "Lisa praegusesse kategooriasse",
    category_mode_message:
      "Kui see on lubatud, lisatakse toode vaikekategooriasse või alamkategooriasse.",
    sku_name_input: "SKU / nimi",
    info: {
      subtitle:
        "Hallake üksust Info ja kohandage oma poe seotud seadeid.",
    },
    price: {
      subtitle:
        "Hallake üksust Hind ja kohandage oma poe seotud seadeid.",
    },
    by_sku: {
      title: "Lisa by SKU",
      subtitle: "Hallake üksust by sku ja kohandage oma poe seotud seadeid.",
    },
    drop_shipping: {
      subtitle:
        "Hallake üksust üksus Tarne ja kohandage oma poe seotud seadeid.",
    },
    by_connect: {
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    your_license_is_not_eligible: "üksus",
    sku_dialog: {
      title: "Lisa Toode by SKU",
      subtitle:
        "Hallake üksust sku dialoog ja kohandage oma poe seotud seadeid.",
    },
    dropshipping_dialog: {
      title: "Lisa üksus Toode",
    },
  },

  /**
   * @see BProductAddDropshippingShops
   */
  product_add_dropshipping_shops: {
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
  },

  /** @see Affiliates **/
  my_affiliate: {
    title: "Minu sidusettevõtte lepingud",
    message:
      "Teiste kauplustega sõlmitud sidusettevõtete lepingute loend.",
  },

  /** @see BPageShopMarketingAffiliate **/
  affiliates: {
    title: "Siduspartnerid",
    subtitle:
      "Looge sidusettevõtteid, jälgige nende toimivust aja jooksul ja tehke ühes kohas täpse teabe põhjal toiminguid. Aitame teil ja teie partneritel luua tugeva suhte.",

    affiliate_code: "Sidusettevõtte kood",
    crate_date: "Loo kuupäev",
    last_payment_date: "Viimane maksekuupäev",
    for_all_products: "Rakenda kõikidele toodetele",
    balance: "Tasakaal",
    fix_commission: "Fikseeritud komisjonitasu",
    percent_commission: "Protsendipõhine komisjonitasu",
    total_payment: "Maksed kokku",
    new_affiliate: "Uus siduspartner",
    new_affiliate_message: "Lisage uus siduspartner",

    link_factory: {
      title: "Siduspartneri linkide generaator",
      link_input: "Sinu link",
      link_output: "Loodud link",
    },
  },

  /**
   * @see BAffiliateEdit
   */
  affiliate_edit: {
    affiliate_commission: "Sidusettevõtte komisjon",

    config: {
      new: "Uus siduspartner",
      edit: "Muuda Siduspartner üksus",
      subtitle:
        "Hallake üksust Konfiguratsioon ja kohandage oma poe seotud seadeid.",
    },

    payment: {
      title: "Makse Teave",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },

    contact: {
      title: "Kontaktinfo",
      subtitle: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },

    restriction: {
      title: "Komisjonitasu Piirangud",
      subtitle:
        "Hallake üksust Piirang ja kohandage oma poe seotud seadeid.",
    },

    link_domain: {
      title: "Link Domeen",
      subtitle:
        "Hallake üksust Link Domeen ja kohandage oma poe seotud seadeid.",

      domain_not_approved_msg: "üksus",
      domain_is_not_enable_msg: "üksus",
      domain_is_linked_to_other_affiliate_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
    },

    set_users_first_message: "määra Kasutaja üksus Sõnum",

    cluster: {
      title: "Klaster",
      subtitle:
        "Hallake üksust Klaster ja kohandage oma poe seotud seadeid.",
      manage_action: "Halda",
    },

    notifications: {
      create_success: "Uus Siduspartner Lisa üksus.",
      update_success: "Siduspartner Uuendatud üksus.",
    },

    inputs: {
      name: {
        label: "Siduspartner üksus Nimi",
        message: "Hallake üksust Nimi ja kohandage oma poe seotud seadeid.",
      },
      commission: {
        label: "Komisjonitasu üksus",
        false_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        false_title: "üksus Pealkiri",
        true_title: "üksus Komisjonitasu",
      },
      user: {
        label: "Kasutaja (Valikuline)",
        message: "Valikuline, nt siduspartneri nimi Selldone'is",
      },
      web: {
        placeholder: "üksus",
      },
      address: {
        placeholder: "Valikuline, e.g., 1200 POX, NY, USA",
      },
      tel: {
        placeholder: "Valikuline, e.g., 001-808-210354",
      },
      bank: {
        placeholder: "Hallake üksust Pank ja kohandage oma poe seotud seadeid.",
      },
      domain: {
        placeholder: "üksus a Domeen... (Valikuline)",
      },
      pos: {
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_title: "POS Juurdepääs",
      },
      enable: {
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      },
      products: {
        label: "silt",
        select_product: "üksus Toode",
      },
    },
    actions: {
      update: "Uuenda Siduspartner",
      add: "Lisa Siduspartner üksus",
    },
    /**
     * @see BPageAffiliateEdit
     */
    delete: {
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
  },

  /**
   * @see BPageShopFinanceValuations
   */
  shop_valuations: {
    title: "Kohandatud Hinnastamine üksus Hindamised",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    add_valuation_action: "Loo Uus Hindamine Vorm",
    empty_message:
      "Hallake üksust Tühi Sõnum ja kohandage oma poe seotud seadeid.",
    delete_dialog: {
      title: "üksus Eemalda",
      message:
        "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
      action: "Jah, kustuta kohe",
    },
    notifications: {
      delete_success: "Kustuta Õnnestus",
    },
  },

  /**
   * @see BValuationInput
   */
  valuation_input: {
    label: "Hinnastamine & Hindamine mudel",
  },

  /**
   * @see BValuationAdd
   */
  valuation_add: {
    title_edit: "Muuda Hindamine Vorm",
    title_add: "Loo Uus Hindamine Vorm",
    config: {
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    valuation_preview: "Eelvaade Hindamine Vorm",
    load_sample: "Laadi Näidis",
    conditions: {
      title: "Tingimused",
      subtitle:
        "Hallake üksust Tingimused ja kohandage oma poe seotud seadeid.",
    },
    structure: {
      title: "üksus",
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      expand_action: "Laienda",
      collapse_action: "Ahenda",
    },
    inputs: {
      title: {
        message: "Pealkiri",
        placeholder: "Hallake üksust Pealkiri ja kohandage oma poe seotud seadeid.",
      },
    },
    samples: {
      title: "Näidis Hindamised",
    },
  },

  /** @see AdminGiftcardPage_Orders **/
  gift_card_orders: {
    title: "Tellimused kinkekaardiga",
    table: {
      order: "Telli",
      order_price: "Tellimuse summa",
      paid_by_card: "Makstakse kaardiga",
      payment_status: "Makse staatus",
      date: "Kuupäev",
    },
  },

  /** @see BPageOfferOrders **/
  offer_orders: {
    title: "Pakkuge tellimusi",
    table: {
      order: "Telli",
      order_price: "Tellimuse summa",
      offer_amount: "Pakkumise summa",
      payment_status: "Makse staatus",
      product: "Toode",
      date: "Kuupäev",
    },
  },

  /** @see BPageCouponOrders **/
  coupon_orders: {
    title: "Kupongi tellimused",
    table: {
      order: "Telli",
      order_price: "Tellimuse summa",
      coupon_amount: "Kupongi summa",
      payment_status: "Makse staatus",
      date: "Kuupäev",
    },
  },

  /** @see BPageDiscountCodeOrders **/
  discount_code_orders: {
    title: "Tellimused sooduskoodiga",
    table: {
      order: "Telli",
      order_price: "Tellimuse summa",
      discount_amount: "Allahindluse summa",
      payment_status: "Makse staatus",
      date: "Kuupäev",
    },
  },

  /** @see BPageShopIncentives **/
  incentives: {
    discount_code: "Allahindlus",
    coupon: "Kupong",
    offer: "Pakkumine",
    gift_card: "Kinkekaart",
    lottery: "Loterii",
    cashback: "Raha tagasi",
  },

  /** {@see BPageShopIncentivesDiscountCode} **/
  discount_codes: {
    title: "Sooduskoodid",
    sub_title:
      "Selles jaotises saate kujundada oma vajadustele vastavaid sooduskuponge. Need allahindlused on toote allahindlustest eraldiseisvad ja kehtivad kasutaja tellimuse lõppsummale.",
    add_new: "Lisa uus sooduskood",
    card: {
      created: "Loo",
      start: "Alusta",
      end: "Lõpp",
      currency: "Valuuta",
      discount_percentage: "Allahindlus",
      discount_limit: "Allahindluse limiit",
      state: "Praegune seis",
      enabled: "Nüüd lubatud",
      disabled: "Nüüd keelatud",
      used: "Tarbitud",
      count: "üksus",
      unit: "üksus(id)",
    },
    /** {@see BDiscountCodeAdd} **/
    dialog: {
      title_edit: "Muuda sooduskoodi",
      title_add: "Lisa uus sooduskood",
      discount_code_input: "Sooduskood",
      discount_percent_input: "Allahindlus",
      discount_percent_input_hint: "Ostusumma allahindlusmäär",
      count_input: "üksus",
      count_input_hint: "Selle koodi maksimaalne kasutamine",
      limit_input: "Allahindluse limiit",
      limit_input_hint: "Maksimaalne allahindlus valuuta alusel",
      currency_input_message: "Selle valuuta puhul on saadaval allahindlused.",
      limit_input_message:
        "Allahindluslimiidi väärtus 0 tähendab, et diskontomääral ei ole piirangut.",
      title_input: "Pealkiri",
      title_input_hint: "Sellele sooduskoodile saate sisestada pealkirja",
      description_input: "Kirjeldus",
      description_input_hint:
        "Selle sooduskoodi jaoks saate sisestada kirjelduse",
      date_start_input: "Alusta",
      date_start_input_placeholder: "Valige, millal allahindlust alustada",
      date_end_input: "Lõpp",
      date_end_input_placeholder: "Valige, millal allahindlus lõpeb",
      notifications: {
        add: "Sooduskood edukalt lisatud.",
        edit: "Sooduskoodi redigeerimine õnnestus.",
      },
      config: {
        title: "üksus Konfiguratsioon",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      },
      limit: {
        title: "üksus",
        subtitle:
          "Hallake üksust Piirang ja kohandage oma poe seotud seadeid.",
      },
      duration: {
        title: "üksus Piirang",
        subtitle:
          "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      },
      design: {
        subtitle:
          "Hallake üksust Kujundus ja kohandage oma poe seotud seadeid.",
      },
      cluster: {
        subtitle:
          "Hallake üksust Klaster ja kohandage oma poe seotud seadeid.",
      },
    },
    delete_alert: {
      title: "Eemalda sooduskood",
      message: "Kas soovite selle sooduskoodi kustutada?",
      action: "Eemalda allahindlus",
    },
    notifications: {
      delete_success: "Teie kommentaar kustutati edukalt",
    },
  },

  /** {@see BPageShopIncentivesGiftcard} **/
  gift_cards: {
    title: "Kinkekaart",
    sub_title:
      "Looge kinkekaart ja seejärel tehke nii palju kui vaja. Sellel kaardil on tasu ja seda saab kasutada ainult teie poes ostmiseks.",

    create_new: "Lisa uus kinkekaart",
    card: {
      created: "Loo",
      lifetime: "Aegumiskuupäev",
      lifetime_unit: "Kuu alates iga kaardi loomise kuupäevast",
      currency: "Valuuta",
      initial_balance: "Esialgne tasu",
      count: "üksus",
      count_unit: "üksus",
      used: "Kasutatud",
    },
    dialog: {
      title: "Kinkekaardi kujundus",
    },
    alert: {
      title: "Eemalda sooduskood",
      message:
        "Kas soovite selle sooduskoodi kustutada?",
      action: "Kustuta",
    },
    notifications: {
      delete_title: "Kustuta kinkekaart",
      delete_message: "Teie kommentaar on edukalt kustutatud.",
    },
  },

  /** {@see BPageShopIncentivesCoupon} **/
  coupons: {
    title: "Kupongid",
    sub_title:
      "Kui soovite teha oma klientidele allahindlust, mida saab kasutada konkreetsete tingimustega, saate luua kuponge. Kupongid võivad sisaldada protsentuaalset allahindlust limiidiga või fikseeritud summaga või mõlema kombinatsiooni.",
    create_new: "Lisa uus kupong",
    qualified_products: "Abikõlblikud tooted",
    min_purchase: "Minimaalne ost",
    only_first_order: "Ainult esimene ost",

    one_time_use: "Ühekordne kasutus",
    multiple_use: "Mitmekordne kasutamine",
    amount_usage: "Kasutatud kogus",

    delete_alert: {
      title: "Kustuta kupong",
      message: "Kas olete kindel, et kustutate selle kupongi?",
      action: "Jah, kustuta kupong",
    },
    notifications: {
      delete_success: "Kupong on edukalt kustutatud.",
    },
  },
  /** {@see BCouponAdd} **/
  coupon_edit: {
    title_edit: "Muuda kupongi",
    title_add: "Uus kupong",
    discount_charge: "Allahindlus ja tasu",
    charge: "Lae",
    charge_message: "Esialgse tasu suurus",
    percent: "Soodusprotsent",
    percent_message: "Allahindluse summa protsentides",
    limit_input: "Piirang",
    limit_input_hint: "Allahindluse limiidi summa",
    currency_input_message: "Selle valuuta jaoks on saadaval kupong.",

    count_input: "üksus",
    count_input_hint: "Selle koodi maksimaalne kasutamine",
    limit_input_message:
      "Allahindluslimiidi väärtus 0 tähendab, et diskontomääral ei ole piirangut.",
    date_start_input: "Alusta",
    date_start_input_placeholder: "Valige kupongi käivitamise aeg",
    date_end_input: "Lõpp",
    date_end_input_placeholder: "Valige, millal allahindlus lõpeb",
    title_input: "Pealkiri",
    title_input_hint: "Sellele sooduskoodile saate sisestada pealkirja",
    description_input: "Kirjeldus",
    description_input_hint:
      "Selle sooduskoodi jaoks saate sisestada kirjelduse",
    coupon_code: "Kupongi kood",
    need_code: "Kas vajate koodi?",

    coupon_color: "Kupongi värv",
    min_purchase_amount: "Minimaalne ostusumma",
    min_purchase_amount_hint:
      "Ostusumma peab olema sellest väärtusest suurem või sellega võrdne.",
    should_exist_product: "Vähemalt üks neist toodetest peab olema ostukorvis",
    apply_for_first_order: "Ainult esimesel ostul",
    apply_for_first_order_on:
      "Seda kupongi saab kasutada ainult kliendi esimesel ostul!",
    apply_for_first_order_off:
      "Kupongi kasutuskordade arvu ostja kohta saab reguleerida allpool.",

    has_qualify_constraints: "Kas soovite määratleda rohkem piiranguid?",
    has_qualify_constraints_message:
      "Määrake rohkem tingimusi, et kvalifitseerida klient seda kupongi kasutama.",
    one_time_use_message: "Klient saab seda kupongi kasutada ühe korra.",
    daily_limit: "Päevane limiit",
    no_limit: "Pole limiiti",
    daily_limit_message: "Maksimaalne kasutuskogus päevas kliendi poolt",

    monthly_limit: "Kuu limiit",
    monthly_limit_message: "Maksimaalne kasutuskogus kuus kliendi poolt",

    yearly_limit: "Aastane limiit",
    yearly_limit_message: "Maksimaalne kasutuskogus aastas kliendi poolt",

    notifications: {
      add: "Uus kupong loodi edukalt.",
      edit: "Kupongi on uuendatud.",
    },

    config: {
      subtitle:
        "Hallake üksust Konfiguratsioon ja kohandage oma poe seotud seadeid.",
    },
    limit: {
      subtitle:
        "Hallake üksust Piirang ja kohandage oma poe seotud seadeid.",
      zero_message: "üksus Sõnum",
    },
    duration: {
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    design: {
      subtitle:
        "Hallake üksust Kujundus ja kohandage oma poe seotud seadeid.",
    },
    constraints: {
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      no_limit: "Ei Piirang",
      has_limit: "koos Piirang",
      has_code_message: "koos Kood Sõnum",
    },
    club: {
      subtitle:
        "Hallake üksust Klubi ja kohandage oma poe seotud seadeid.",
    },
    cluster: {
      subtitle:
        "Hallake üksust Klaster ja kohandage oma poe seotud seadeid.",
    },
    preview: {
      subtitle: "Eelvaade",
    },
  },

  /** {@see BPageShopIncentivesOffer} **/
  offers: {
    title: "Pakkumised",
    sub_title:
      "Saate luua oma klientidele eripakkumisi, et pärast ühe kauba ostmist saaksid nad teise kauba allahindlusega või isegi tasuta.",
    create_new: "Lisa uus pakkumine",
    qualified_products: "Abikõlblikud tooted",
    min_quantity: "Minimaalne kogus",
    min_purchase: "Minimaalne ost",
    amount_usage: "Kasutatud kogus",

    delete_alert: {
      title: "Kustuta pakkumine",
      message: "Kas olete kindel, et kustutate selle pakkumise?",
      action: "Jah, kustuta pakkumine",
    },
    notifications: {
      delete_success: "Pakkumine on edukalt kustutatud.",
    },
  },

  /** {@see BOfferAdd} **/
  offer_edit: {
    title_edit: "Muuda pakkumist",
    title_add: "Uus pakkumine",

    design_style: "Disain ja stiil",
    eligible_constraints: "Kliendile sobivad limiidid",

    title_input: "Pealkiri",
    title_input_hint: "Sellele sooduskoodile saate sisestada pealkirja",
    description_input: "Kirjeldus",
    description_input_hint: "Kirjutage selle sooduskoodi kirjeldus",

    currency_input_message: "Saadaval pakkumine selle valuuta jaoks.",
    qualified_products: "Abikõlblikud tooted",
    qualified_products_message:
      "Et tooted oleksid abikõlblikud, peab ostukorvis olevate kaupade koguarv olema võrdne miinimumkogusega või sellest suurem.",
    min_items: "Minimaalne kaubakogus",
    min_items_message: "Kaupade arv, mida klient peab ostma",
    offered_products: "Pakutavad tooted",
    offered_products_message: "Vähemalt üks neist toodetest peab olema ostukorvis.",
    discount_percent: "Allahindluse protsent",
    discount_percent_message: "Nende kaupade allahindlusprotsent.",
    discount_percent_hint: "Allahindluse protsendi suurus",

    per_order: "Maksimaalne kasutuskordade arv tellimuse kohta",
    per_order_message:
      "Maksimaalne kordade arv, mille jooksul saab pakkumist tellimusele rakendada",

    count_input: "Summa",
    count_input_hint: "Selle pakkumise maksimaalne kasutamine",

    min_purchase: "Minimaalne ostusumma",
    min_purchase_hint:
      "Ostuhind peab olema sellest väärtusest suurem või sellega võrdne",
    limitation: "Piirang",

    date_start_input: "Alusta",
    date_start_input_placeholder: "Valige kupongi käivitamise aeg",
    date_end_input: "Lõpp",
    date_end_input_placeholder: "Valige, millal allahindlus lõpeb",
    max_actives_is_3: "Teil võib korraga olla ainult kolm aktiivset pakkumist.",
    enable: "Automaatne rakendamine",

    notifications: {
      add: "Uue pakkumise loomine õnnestus.",
      edit: "Pakkumise värskendamine õnnestus.",
    },
    config: {
      subtitle:
        "Hallake üksust Konfiguratsioon ja kohandage oma poe seotud seadeid.",
    },
    limit: {
      subtitle: "Hallake üksust Piirang ja kohandage oma poe seotud seadeid.",
    },
    duration: {
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    constraints: {
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    discounted_products: {
      title: "Allahindlus Toode",
      subtitle:
        "Hallake üksust Allahindlus Toode ja kohandage oma poe seotud seadeid.",
    },
    cluster: {
      subtitle:
        "Hallake üksust Klaster ja kohandage oma poe seotud seadeid.",
    },
  },

  /** {@see BPageCampaignAds} **/
  campaign_ads: {
    menu: {
      banner: "Bänner",
      reportage: "Reportaaž",
      social: "Sotsiaalmeedia",
      offline: "Võrguühenduseta",
    },
  },

  /** {@see BPageShopMarketingEmail} **/
  emails: {
    title: "Meiliturundus",
    subtitle:
      "Kujundage e-kirju pukseerides, ajastage ja käivitage kampaaniaid, et suurendada säilitamist ning näha ühes kohas usaldusväärset ja täpset teavet.",
    cation_message:
      "⚠ Piiratud kinnitamata kaupmeestele. (beeta)",

    subject: "Teema",
    from: "Alates",
    in_que: "Ootab",
    schedule_at: "Ajakava kl",
    sent: "Saadetud",
    sends: "Saadab",
    delivers: "Kohale toimetatud",
    views: "Vaated",
    clicks: "Klikid",
    buys: "Ostud",
    new_email: "Lisa uus email",
    new_email_message: "Looge ja ajastage uus turundusmeil",
  },

  /** {@see BPageEmailMarketingDashboard} **/
  email_dashboard: {
    review: "Ülevaade",
    waiting_for_approve: "Ootan kinnitust kasutajalt {name}",
    approved_by: "E-posti kinnitas {name} ja saatis.",
    not_submitted_send_request:
      "Te pole veel selle meili saatmise taotlust esitanud.",
    reviewed_by: "Arvustanud {name}",
    status: "Meili olek",
    conversion: "Konversioonimäärad",

    sell_performance: "Müügi jõudlus",
    total_buys: "Müükide koguarv",
    amount_buy: "Müügi kogusumma",
    average_sell: "Keskmine müük",
    sessions: "Seansid",
    overview: "Ülevaade",
    purchase_amount: "Ostusumma",
    actions: "Kasutaja tegevus",
  },

  /** {@see BPageEmailMarketing} **/
  email_page: {
    emails: "Meilid",
    edit: "Muuda",
  },
  /** {@see BPageAffiliator} **/
  affiliate_page: {
    affiliates: "Siduspartnerid",
    orders: "Tellimused",
    payments: "Maksed",
  },

  /** {@see BPageAffiliateDashboard**/
  affiliate_dashboard: {
    link: {
      title: "Siduspartner Link",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid. {code}",
    },
    fix_commission: "Fikseeritud komisjonitasu",
    percent_commission: "Protsendipõhine komisjonitasu",
    last_payment: "Viimane makse",
    balance: "Tasakaal",
    total_payment: "Maksed kokku",
    status: "Siduspartneri staatus ja piirangud",
    available_for: "Saadaval",
    orders_count: "Tellimuste summa",
    orders_accepted: "Vastu võetud tellimused",
    finance: "Finantsaruanne",

    amount_accepted: "Aktsepteeritud summa",
    amount_paid: "Makstud summa",
    sessions: "Seansid",
    affiliate_payment: "Siduspartneri maksed",
    amount_payment: "Makse summa",
    amount_payment_hint: "Täpne tehingusumma",
    i_paid: "Maksin {amount} {currency} isikule {name}",
    pay_now: "Maksa nüüd",
  },

  /** {@see BPageShopPermissionRoles**/
  permission_roles: {
    new_role: "Lisa uus roll",
    new_role_message: "Tee meeskonnatöö lihtsamaks.",
    new_role_action: "Lisa uus roll",
  },
  /** {@see Affiliate**/
  user_affiliates: {},
  /** {@see BPageShopIncentivesLottery**/
  shop_lotteries: {
    title: "Loterii",
    sub_title:
      "Teie kliendid saavad mängida ja võita. Teie poe kliendid peavad iga mängu jaoks tarbima 10 žetooni. Näiteks kui soovite, et teie klientidel oleks võimalus võita 1000 USD, peate määrama iga kiibi hinnaks 100 USD. Iga kiibi väärtus 0 tähendab, et ostja saab iga ostu eest ühe kiibi.",
    manually_send_chip: "Kas soovite kasutajatele kiipe käsitsi saata?",
    manual_send_token_action: "Käsitsi üksus",
    lottery_enable: "Kas loterii on lubatud?",
    chip_price_input: "Kiibi hind",
    zero_chip_message: "Anna 1x kiip tellimuse kohta",
    chip_has_price_message: "Andke 1 kiip iga tellimuse {amount} {currency} kohta.",
    chip_disabled_message: "Kiip on keelatud!",
    create_new: "Lisa uus auhind",
    delete_alert: {
      title: "Kustuta auhind",
      message: "Kas olete kindel, et kustutate selle auhinna jäädavalt?",
      action: "Jah, kustuta kohe",
    },
    notifications: {
      delete_success: "Auhinna kustutamine õnnestus.",
    },

    config: {
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    empty_prize_list: "Tühi üksus Loend",
  },

  /** {@see BLotteryAdd**/
  lottery_edit: {
    title_edit: "Muutke loterii elementi",
    title_add: "Uus loosikaup",
    general_config: "Üldine konfiguratsioon",
    design_style: "Stiil ja välimus",
    enable_message: "Maksimaalne esemete arv rattas on 14.",
    title_input: "Pealkiri",
    title_input_hint: "Kirjutage lühike pealkiri.",
    description_input: "Kirjeldus",
    description_input_hint: "Kirjutage eseme kohta kirjeldus.",
    quantity: "Kogus",
    quantity_message: "Saadaolevad kaubad kokku",
    image: "Pilt",
    image_placeholder: "Valige üksuse jaoks pilt",
    chance: "Juhus",
    chance_message: "Võiduvõimalus protsentides",
    free_for_first: "Kas see on uutele klientidele tasuta?",
    free_for_first_message: "Uued kliendid võivad selle kauba võita.",
    not_free_for_first_message: "Seadistage ja hallake seda valikut oma poe jaoks.",

    amount: "Auhinna summa",
    amount_hint: "Kasutajad võidavad oma tellimuse eest selle summa.",
    currency_message:
      "Selle üksuse valuuta. Muud valuutad konverteeritakse vahetuskursi alusel.",
    discount: "Allahindlus",
    discount_message: "Soodusprotsent kliendi tellimusel",
    discount_limit: "Allahindluse limiit",
    discount_limit_hint: "Maksimaalne allahindlus kliendile.",
    color: "Värv",
    condition: "Tingimused",

    notifications: {
      add: "Uus loosiüksus on edukalt loodud.",
      edit: "Loterii esemete muutmine õnnestus.",
    },
    config: {
      subtitle:
        "Hallake üksust Konfiguratsioon ja kohandage oma poe seotud seadeid.",
    },
    design: {
      subtitle:
        "Hallake üksust Kujundus ja kohandage oma poe seotud seadeid.",
    },
    constraints: {
      subtitle: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    prize: {
      title: "üksus",
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    product_input: {
      label: "Toode üksus",
      message: "Toode sisend",
    },
  },

  /** {@see BGiftcardTypeInput**/
  gift_card_types_list: {
    label: "Kinkekaardi tüüp",
    message: "Valige loendist kinkekaardi tüüp.",
  },

  /** {@see BEmailMarketingEditor**/
  email_builder: {
    service_unavailable: "Meiliserver ei ole teie kontol aktiivne.",
    design_section: "Teie meili kujundusplaat",
    schedule_switch: "Kas planeerida meili saatmine?",
    schedule_placeholder: "Valige meili saatmise aeg",
  },

  /** {@see BCustomersFunnel**/
  user_funnel: {
    REGISTER_DATE: {
      title: "Registreerimiskuupäev",
      description: "Filtreerige kasutaja registreerimiskuupäeva järgi.",
    },
    LAST_BUY_DATE: {
      title: "Viimane ost",
      description: "Viimane ostukuupäev.",
    },
    LOGIN_DATE: {
      title: "Sisselogimiskuupäev",
      description: "Viimase sisselogimise kuupäev.",
    },
    LEVEL: {
      title: "Kliendiklubi",
      description: "Kliendiklubi liikmed.",
    },
    SUBSCRIBED: {
      title: "Tellitud",
      description: "E-kirjade vastuvõtmise tellimiseks.",
    },
    NOT_PURCHASED: {
      title: "Ostmata",
      description: "Kliendid, kes pole seni ostnud.",
    },
    SEX: {
      title: "Sugu",
      description: "Kasutaja sugu.",
    },
    LOCATION: {
      title: "Asukoht",
      description: "Kasutaja asukoht.",
    },

    LIMIT: {
      title: "Piirang",
      description: "Määrake maksimaalsele kasutajate arvule piirang.",
    },

    SEGMENTS: {
      title: "Segmendid",
      description: "Piirake kliente konkreetses käsitsi segmenteerimises.",
    },
  },

  /** {@see InlineHelp**/
  inline_help: {
    helps_title: "Teenuse kasutusjuhend",
    blogs_title: "Seotud sisu Selldone'i ajaveebis",
  },

  /** {@see BPageShopFinanceTax**/
  shop_tax: {
    region: "Piirkond",
    label: "Silt",
    country_tax: "Riigimaks",
    customer_tax: "Kliendi käibemaks",
    business_tax: "Ettevõtluse käibemaks",
    shipping: "Saatmine",
    override: "Alistada",
    country: "Riik",
    vat_range: "Käibemaksu vahemik",
    custom: "Kohandatud",
    regions: "Piirkonnad",
    rest_world: "Ülejäänud maailm",
    overrides: "Alistab",
    dialog_set_title: "Maksusätted",

    tax_setting: "Maksusätted",
    vat: "VAT",

    calculate_tax_input: "Automaatne tulumaksu arvutamine",
    calculate_tax_message:
      "Selle valiku aktiveerimisel arvutatakse ja rakendatakse teie tellimustele käibemaks.",

    tax_number: "Maksumaksu number",
    tax_number_message:
      "Sisestage oma maksunumber. See registreerimisnumber kajastub ostja arvele.",

    tax_included_in_price_input: "Toodete hinna sees käibemaks",
    tax_included_in_price_message:
      "Valige see valik, kui lisate oma toote hinnale maksusumma. Maksusumma arvutatakse järgmise valemiga:",
    tax_included_in_price_formula:
      "Maks = (hind * KM) / (1 + KM), näiteks 100$ hinna ja 10% lisandväärtuse määraga toote maksusummaks saab 9,09$.",

    tax_exclude_title: "Välistatud ╏ Kassas lisandub maks",
    tax_excluded_message:
      "Maksud arvutatakse enne makse sooritamist kassas ja lisatakse maksuvabale hinnale sõltuvalt teie kliendi tõenditest.",

    tax_on_shipping_input: "Kohaldage saatmisel maksud",
    tax_on_shipping_message:
      "Selle valiku valimisel rakendub maks kohaletoimetamisele.",

    fixed_tax_rate: "Fikseeritud maksumäär",
    dynamic_tax_rate: "Maks piirkondadepõhiselt",

    locations_tip:
      "Ülaltoodud loend näitab müüdavate riikidena ainult neid riike, mille olete valinud jaotises Poe seaded > Asukohad.",
    locations_action: "Kaupluse asukohad Seaded",

    save_alert: "Seadeid ei salvestata!",

    pos_tax_setting: "POS-maksu seaded",
  },

  /** {@see BPageTransportation**/
  transportation_page: {
    menu: {
      dashboard: "Armatuurlaud",
      transportations: "Saatmisviisid",
      orders: "Tellimused",
      setting: "Seadistamine",
      delivery_services: "Teenused",
      delivery_persons: "Kullerid",
    },

    go_to_courier_list: "Vaata kullerite nimekirja",
    go_to_service_list: "Vaadake saatmisteenuste loendit",
  },

  /** {@see BPageTransportationCouriers**/
  transportation_persons: {
    title: "Kullerid",
    notifications: {
      success_add: "Kuller lisas.",
      success_reset: "Statistika lähtestati.",
      success_remove: "Kulleri eemaldamine õnnestus.",
      success_update: "Kulleri teabe värskendamine õnnestus.",
    },
    reset: {
      title: "Lähtestage statistika",
      message: "Kas lähtestate kindlasti selle kulleri statistika?",
      action: "Jah, lähtestage kohe",
    },
    remove: {
      title: "Eemalda kuller",
      message: "Kas olete kindel, et kustutate selle kulleri?",
      action: "Jah, eemalda kohe",
    },
    add_dialog: {
      title: "Lisa uus kuller",
      action: "Lisa kuller",
    },
  },
  /** {@see BPageTransportationOrders**/
  transportation_orders: {
    title: "Tellimused saatmiseks",
    notifications: {
      success_update: "Kohaletoimetamise oleku värskendamine õnnestus.",
      success_payment: "COD-makse kinnitamine õnnestus.",
    },
  },
  /** {@see BPageCourier**/
  delivery_person: {
    actions_title: "Kulleri seaded",
    action_delivered: "Saadetud",
    action_paid: "COD makstud",
    action_returned: "Tagastatud",
    cod_confirm_action: "Kinnitage COD-makse",
    pickup_dialog: {
      title: "Kas olete selle paki kuller?",
      message:
        "Kui vastutate selle paki vedamise eest, valige Jah, muul juhul valige Ei.",
    },
    status_dialog: {
      title: "Muuda olekuks {status}",
      message: "Kas olete kindel, et muudate tarneolekuks {status}?",
      action: "Jah, ma kinnitan seda!",
    },
    cod_dialog: {
      title: "COD makse",
      message:
        "Kas kinnitate, et olete ostjalt tellimuse summa kätte saanud?",
      action: "Jah, kinnitan makse!",
    },
  },

  /** {@see BPageTransportationServices**/
  transportation_services: {
    title: "Kullerteenus",
    notifications: {
      success_add: "Lisatud kohaletoimetamise teenus.",
      success_reset: "Statistika lähtestati.",
      success_remove: "Teenus eemaldati edukalt.",
      success_update: "Teenuse värskendamine õnnestus.",
    },
    reset: {
      title: "Lähtestage statistika",
      message: "Kas olete kindel, et lähtestate selle teenuse statistika?",
      action: "Jah, lähtestage kohe",
    },
    remove: {
      title: "Eemalda kohaletoimetamisteenus",
      message: "Kas olete kindel, et kustutate selle teenuse?",
      action: "Jah, eemalda kohe",
    },
    add_dialog: {
      title: "Lisa uus kohaletoimetamisteenus",
      action: "Lisa teenus",
    },
  },
  /** {@see BPageTransportationPickups**/
  transportation_pickups: {
    addresses: {
      title: "Vastuvõtu aadressid",
      subtitle:
        "Lisage ja muutke siin järeletulemise aadresse. Kasutajad saavad valida kassalehel järeletulemise aadressi.",
      add_action: "Lisa uus asukoht",
    },
  },

  /** {@see DeliveryReceiptWidget**/
  delivery_receipt: {
    title: "Saatekviitung",
    has_return: "Tarne tagastamine",
    cashed: "Sularahamakse",
  },
  /** {@see BPageTransportationServiceDashboard**/
  delivery_dashboard: {
    select_destinations: "Lisage loendisse tellimused",
    price_calculation: "Hinnake saatmishindu",
    price_calculation_action: "Arvutage hind",
    add_request: "Taotlege teenust",
    add_request_action: "Esitage teenusetaotlus",
    refresh_action: "Uuenda teavet",
  },

  /** {@see DeliveryOrderWidget**/
  delivery_order: {
    title: "Saatekorraldus",
    has_return: "Tarne tagastamine",
    cashed: "Sularahamakse",
  },

  /** {@see BPagePos**/
  cash_register: {
    menu: {
      panel: "Kassaaparaat",
      orders: "Tellimused",
      customers: "Kliendid",
      devices: "Seadmed",
      inventory: "Inventuur",
    },
    payment_confirm: "Maksekinnitus",
    payment_confirm_msg: "Kliendi makstud tellimus {basket_id}.",
  },

  /** {@see BPosDeviceBarcodeScanner**/
  barcode_scanner: {
    wifi_pass: "Teie Wi-Fi parool",
    message: "Sisestage oma WiFi-ruuteri parool ja skannige QR-kood.",
    wifi_ssid: "üksus SSID",
    ssid_message: "Sisestage oma Wi-Fi võrgu nimi (SSID).",
  },

  /** {@see PosDeviceTypes**/
  pos_devices: {
    Scanner: "Vöötkoodi skanner",
    Scanner_desc:
      "Vöötkoodiskanneri kasutamiseks tuleb sisestada toote SKU kood õigesti toote seadetesse.",
    Printer: "üksus",
    Printer_desc:
      "Printige oma klientide kviitung, ühendades kviitungi printeriga.",
    CustomerView: "Kliendivaade",
    CustomerView_desc:
      "Sellel lehel saate oma klientidele tellimuse üksikasju kuvada.",
    CardReader: "Kaardilugeja",
    CardReader_desc: "Kaardilugeja seade teie klientide COD-makse tegemiseks.",
    ChipReader: "Kiibi lugeja",
    ChipReader_desc: "NFC sildilugeja, et lisada silte kasutades esemeid ostukorvi.",
  },
  /** {@see BPagePosDevices**/
  pos_register_devices: {
    delete_dialog: {
      title: "Eemaldage seade",
      message: "Kas olete kindel, et eemaldate selle seadme oma POS-profiilist?",
      action: "Jah, eemalda kohe",
    },
  },

  /** {@see BPageOrderPos**/
  pos_process_center: {
    title: "POS-i tellimuste töötlemise keskus",
    menu: {
      label: "Pakendi etikett",
      receipt: "Kviitung",
      back: "tagasi",
      timeline: "Ajaskaala",
      order: "Telli",
    },
  },
  /** {@see BPagePosPanel**/
  pos: {
    name: "POS",
    message:
      "Laske oma null-seadistusmaksuga veebimüügipunktis, käivitage see mis tahes nutitelefonis, tahvelarvutis ja arvutis või looge tellimusi käsitsi.",
    add_customer: "Lisage klient",
    set_delivery: "Määra kohaletoimetamise aadress",
    add_giftcards: "Lisa kinkekaart",
    add_discount_code: "Lisa sooduskood",
    add_coupon: "Lisa kupong",
    set_campaign: "Määra kampaania",
    select_buyer: "Vali ostja!",
    send_to_pos: "Saada kaardilugeja masinasse",
    print_receipt: "Printige kviitung",
    confirm_cash_payment: "Kinnitage sularahamakse",
    payment_cod: {
      title: "Tasumine sularahas",
      message:
        "Selle tellimuse summa tasutakse kohaletoimetamisel. Peale ostjalt summa laekumist tuleb tellimuse vormistamiseks süsteemis makse kinnitada.",
    },
    payment_online: {
      title: "Valige veebis makseviis",
      message:
        "Valides järgmised valikud, luuakse makselink, mis saadetakse ostjale. Selle lingi tasumisel muutub tellimuse olek tasutud režiimiks. Makselink genereeritakse QR-koodi skannimise teel kliendiekraanil, SMS-is või meilis. Mis tahes kanali aktiveerimiseks lingi saatmiseks klõpsake sellel valikul ja seejärel vajutage nuppu, et saata ostjale kviitung.",
    },
    notifications: {
      success_pay: "Tellimuse tasumine lõpetatud.",
      success_order:
        "Tellimus on edukalt loodud ja ootab, et klient selle tasuks.",
    },
    payment_dialog: {
      check_pay_now: "Kontrollige makset käsitsi",
      close_action: "Sule dialoog. Ma ei taha oodata kliendi makset",
      go_to_order: "Mine tellimislehele",
      paid_by_gift_card_msg:
        "Kinkekaartidelt võeti kogu tellimuse summa välja! Ostja ei pea rohkem maksma.",
      cod_msg: "Klient tasub tellimuse kättesaamisel.",
      online_msg: "Paluge kliendil skannida kliendiekraanil QR-kood.",
    },
  },

  /** {@see BPageShopProductsImporter**/
  exporter: {
    title: "Ekspordi andmed",
    subtitle:
      "Teie andmed kuuluvad teile! Saate oma ettevõtteteabe standardvormingus igal ajal alla laadida. Siiski austage oma klientide privaatsust, ärge saatke neile rämpsposti ega jagage kunagi nende teavet kolmandate osapooltega.",

    excel:
      "Saate kõigi poes olevate {type} loendi koos täieliku teabega Exceli vormingus.",
    csv: "Saate kõigi poes olevate toodete {type} loendi koos täieliku teabega CSV-vormingus. See vorming on kooskõlas Selldone'i standardvorminguga {type} poodi importimiseks.",
  },
  /** {@see BPageShopProductsImporter**/
  importer: {
    category: {
      title: "Impordi kategooriad",
      subtitle:
        "Laadige siia üles kategooriate CSV-fail. Veenduge, et järgite standardvormingut.",
    },
    product: {
      title: "Impordi tooteid",
      subtitle:
        "Laadige siia üles toodete CSV-fail. Veenduge, et järgite standardvormingut.",
    },
    product_images: {
      title: "Impordi pilte",
      subtitle:
        "Pildiinfo vastuvõtmine on aeganõudev. Piltide importimisel austage kindlasti autoriõigusi.",
    },
    inventory: {
      title: "Varude hulgivärskendus",
      subtitle:
        "Laadige siia üles varude CSV-fail. Veenduge, et järgiksite standardvormingut, eksportides esmalt CSV-faili ja seejärel seda faili redigeerides.",
    },

    back_to_products: "Tagasi toodete nimekirja",
    back_to_categories: "Tagasi kategooriate loendisse",
    back_to_inventory: "Tagasi varude nimekirja",

    step_select_file: "Valige CSV-fail",
    step_send_to_server: "Saada serverisse",
    step_view_result: "Vaata tulemust",
    step_view_que: "Kuva ooteloend",
    send_to_server_action: "Saada serverisse",

    shop_license: "Kaupluse litsents",
    max_items_limit: "Üksuste maksimumlimiit",
    total_items: "Üksused kokku",

    /** {@see BShopCustomerImporter**/
    customer: {
      title: "Impordi kliente",
      subtitle:
        "Laadige siia üles klientide CSV-failid. Veenduge, et järgiksite standardvormingut ja ka privaatsusreegleid.",
    },

    /**
     * @see BVendorsImporter
     */
    vendor: {
      title: "Impordi Müüjad",
      subtitle:
        "Hallake üksust Müüja ja kohandage oma poe seotud seadeid.",
      checklist: {
        title: "Pealkiri",
        subtitle: "üksus",
        sample_files: "Näidis Failid",
        valid_vendor_name_needed:
          "<b></b><b></b><i></i><i></i> Seadistage ja hallake seda valikut oma poe jaoks.",
        assign_user_after_import:
          "Hallake üksust määra Kasutaja üksus Impordi ja kohandage oma poe seotud seadeid.",
      },
      need_kyc_alert:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
      back_to_vendors_list: "Tagasi müüjate loendisse",
    },
  },

  /**
   * @see BPageMarketplaceProducts
   */
  marketplace_products: {
    title: "Müüja Toode",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    filter_vendor: {
      placeholder: "Filter by Müüja...",
    },
    filter_status: {
      placeholder: "Filter by Olek...",
    },
  },

  /**
   * @see BPageMarketplaceRequests
   */
  marketplace_requests: {
    open_vendors_panel: "Ava Müüjad üksus",
    title: "Müüja üksus Loend",
    subtitle:
      "Hallake üksust Turuplats üksus ja kohandage oma poe seotud seadeid.",
  },
  /**
   * @see BPageMarketplaceSetting
   */
  marketplace_setting: {
    marketplace: {
      title: "Turg",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    distribution_model: {
      title: "üksus mudel",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    access: {
      title: "Müüja Juurdepääs",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    need_enable_shipping_for_vendors_tips:
      "Seadistage ja hallake seda valikut oma poe jaoks.",
    transportation_available_tooltip: "üksus",
    transportation_not_available_tooltip:
      "Seadistage ja hallake seda valikut oma poe jaoks.",
    panel: {
      title: "Müüja paneel",
      subtitle: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    documents: {
      title: "Dokumendid",
      subtitle:
        "Hallake üksust Dokumendid ja kohandage oma poe seotud seadeid.",
      add_document_action: "Lisa Dokument üksus",
    },
    inputs: {
      enable: {
        false_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      },
      product: {
        label: "Lisa uus toode",
        true_title: "Müüjad üksus Lisa Toode",
        false_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      },
      need_verify: {
        label: "Toode Kinnitus üksus",
        false_description: "Uus Müüja Toode go Reaalajas üksus.",
        false_title: "Ei Kinnitus Nõutav",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_title: "Kinnitus Nõutav",
      },
      category: {
        label: "Lisa uus kategooria",
        true_title: "Müüjad üksus Lisa Kategooriad",
        false_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      },
      shipping: {
        label: "Tarne Valikud",
        true_title: "Müüjad üksus Tarne Valikud",
        false_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      },
      hidden_customer: {
        label: "Näita Ostja üksus Teave",
        true_description: "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        false_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      },
      multi: {
        false_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_title: "üksus Režiim",
        false_title: "üksus Müüja Režiim (Vaikimisi)",
      },

      listing: {
        label: "Kirje üksus Müüjad",
        true_description: "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        false_description: "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        requires_listing_active_text:
          "Hallake üksust üksus Kirje Aktiivne Tekst ja kohandage oma poe seotud seadeid.",
        requires_listing_active_button: "Ava Kanal Kirje Seaded",
      },



    },
    notifications: {
      update_success: "Müüja Seaded Uuendatud üksus.",
    },
    add_document_dialog: {
      title: "Dokument üksus",
      type: {
        title: "Dokument Tüüp",
        subtitle:
          "Hallake üksust Tüüp ja kohandage oma poe seotud seadeid.",
      },
      guide: {
        title: "Juhend",
        subtitle:
          "Hallake üksust Juhend ja kohandage oma poe seotud seadeid.",
      },
      code: {
        title: "üksus Kood",
        subtitle:
          "Hallake üksust Kood ja kohandage oma poe seotud seadeid.",
      },
      link: {
        title: "Väline link",
        subtitle:
          "Hallake üksust Link ja kohandage oma poe seotud seadeid.",
      },
      inputs: {
        title: {
          label: "Pealkiri",
          placeholder: "Pealkiri",
        },
        guide: {
          label: "Juhend (Valikuline)",
          placeholder:
            "Hallake üksust Juhend ja kohandage oma poe seotud seadeid.",
        },
        code: {
          label: "üksus Kood",
          placeholder: "Kood",
          message: "üksus Kaasa HTML Kood.",
        },
        url: {
          label: "URL",
          message: "Hallake üksust URL ja kohandage oma poe seotud seadeid.",
        },
      },
    },
  },

  /**
   * @see ShopMarketplaceModes
   */
  ShopMarketplaceModes: {
    Collective: {
      title: "üksus Režiim",
      description:
        "Hallake üksust Kirjeldus ja kohandage oma poe seotud seadeid.",
    },
    Direct: {
      title: "Pealkiri",
      description:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
  },
  /**
   * @see VendorDocumentType
   */
  VendorDocumentType: {
    Identification: {
      title: "Omanik üksus Dokument",
      description:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    Business: {
      title: "Äri üksus",
      description:
        "Hallake üksust Äri ja kohandage oma poe seotud seadeid.",
    },
    Address: {
      title: "Aadress Kinnitus",
      description:
        "Hallake üksust Aadress ja kohandage oma poe seotud seadeid.",
    },
    Contract: {
      title: "Pealkiri",
      description:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    Copyright: {
      title: "Pealkiri",
      description:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    Privacy: {
      title: "üksus Poliitika Dokumendid",
      description:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    Embed: {
      title: "üksus Vorm",
      description:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    Link: {
      title: "Väline link",
      description:
        "Hallake üksust Link ja kohandage oma poe seotud seadeid.",
    },
  },

  /**
   * @see BPageMarketplaceWallets
   */
  marketplace_wallets: {
    title: "Müüja Rahakotid",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    filter_vendor: {
      placeholder: "Filter by Müüja...",
    },
  },

  /**
   * @see BVendorAccountTransactionsList
   */
  vendor_account_transactions: {
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    vendor_bank: "Müüja Pank",
    order_fee: "Tellimus Tasu",
    order_refund: "Tellimus Tagasimakse",
    reverse_fund: "üksus",
    payout: "Väljamakse",
  },

  /**
   * @see BPageMarketplacePayouts
   */
  marketplace_payouts: {
    title: "Väljamakse Ajalugu",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    top_up_vendor_action: "üksus up Müüja Toiming",
  },

  /**
   * @see BPageMarketplacePricings
   */
  marketplace_pricings: {
    title: "Hinnastamine üksus",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    add_pricing_action: "Lisa Hinnastamine üksus",
  },

  /**
   * @see BVendorPricingAdd
   */
  vendor_pricing_add: {
    title: "Turuplats Hinnastamine mudel",
    subtitle:
      "Hallake üksust Müüja Hinnastamine Lisa ja kohandage oma poe seotud seadeid.",
    delete: {
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      remove_pricing_action: "Eemalda Hinnastamine mudel",
    },
    inputs: {
      title: {
        placeholder: "Pealkiri",
      },
      description: {
        placeholder: "Kirjeldus",
      },
      accept_delete: {
        true_description: "üksus Kirjeldus",
        true_title: "Kinnita Hinnastamine mudel üksus",
      },
    },
  },

  /**
   * @see BVendorPayoutAdd
   */
  vendor_payout_add: {
    vendor: {
      title: "Müüja",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    vendor_wallet: "Müüja Rahakott",
    vendor_bank_account: "Müüja Pank Konto",
    with_balance_tooltip:
      "Seadistage ja hallake seda valikut oma poe jaoks.",
    with_balance: "üksus Saldo",
    without_balance: "üksus Saldo",
    bank_transfer: {
      title: "Pangaülekanne",
      subtitle:
        "Hallake üksust Pank Ülekanne ja kohandage oma poe seotud seadeid.",
    },
    vendor_bank: "Müüja Pank",
    gateway_in_debug_mode_warning:
      "Kuna maksevärav on praegu silumisrežiimis, ei kanta raha päriskontole.",
    payment: {
      title: "Makse",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    history: {
      title: "Ajalugu",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    refund: {
      title: "Tagasimakse",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    inputs: {
      vendor: {
        placeholder: "üksus a Müüja...",
      },
      note: {
        placeholder:
          "Hallake üksust Märkus ja kohandage oma poe seotud seadeid.",
      },
      accept_refund: {
        true_description: "üksus Kirjeldus",
        true_title: "Tühista & Tagasimakse Makse",
      },
    },
    notifications: {
      reverse_fund_success: {
        title: "Pealkiri",
        message:
          "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
      },
      payout_success: {
        title: "Väljamakse",
        message:
          "Hallake üksust Väljamakse Õnnestus ja kohandage oma poe seotud seadeid.",
      },
    },
  },

  /**
   * @see BShopQuotaImporter
   */
  quota_importer: {
    quota: "üksus",
    max_batch_msg: "Seadistage ja hallake seda valikut oma poe jaoks.",
    max_daily_limit_msg: "Seadistage ja hallake seda valikut oma poe jaoks.",
    extra_daily_limit_msg: "Seadistage ja hallake seda valikut oma poe jaoks.",
    add_items_today_msg: "Üksused Lisa Täna.",
    file_statistic_msg: "üksus",
    used_quota: "üksus",
  },

  /** {@see BPageShopMarketingCampaign**/
  campaigns: {
    title: "Kampaaniad",
    subtitle:
      "Looge kampaaniaid, jälgitavaid linke ning vaadake usaldusväärset ja täpset teavet ühes kohas. Aitame teil teha paremaid andmepõhiseid otsuseid.",
    add_action: "Lisa uus kampaania",
    empty_message: "Looge oma esimene kampaania kohe!",
    delete: {
      title: "Kustuta kampaania",
      message: "Kas olete kindel, et kustutate selle kampaania ja kõik andmed?",
      action: "Jah, kustuta kohe",
    },
  },

  landing_categories: {
    raw: "Toores mallid",
    all: "Kõik mallid",

    marketing: "Turundus ja reklaamid",
    product: "Toote tutvustus",
    health: "Tervis ja Fitness",
    food: "Toit ja puuviljad",
    house: "Kinnisvara ja maja",
    device: "Masin ja seade",
    car: "Auto",
    software: "Tarkvara",
    clothing: "Rõivad ja jalanõud",
    jewellery: "Ehted",
  },

  /** {@see BPageShopSettingTheme**/
  shop_theme: {
    theme_colors: "Teema värvid",
    theme_colors_description:
      "Hallake üksust teema Värv Kirjeldus ja kohandage oma poe seotud seadeid.",
    products_view_mode: "Ostunimekirja vaade",
    products_view_mode_desc:
      "Saate kohandada oma poes olevate toodete kuvamisrežiimi vastavalt ekraani suurusele. Seda režiimi võetakse vaikimisi arvesse ja seda ei rakendata, kui kasutaja muudab kuvarežiimi.",

    tabs: {
      vendor_page: "Müüja Leht",
    },

    color_light: "Esmane värv",
    color_dark: "Peamine tume värv",
    color_deep_dark: "Sügav tume värv",
    color_info: "Lingid",
    light_checkout: "Kerge kassateema",
    light_header: "Hele päis",
    light_footer: "Hele jalus",
    light_filter: "Kategooria filtriteema",
    checkout_color: "üksus värv",

    typography: "Tüpograafia",
    header: "Päis",
    footer: "üksus",
    custom_code: "Kohandatud kood",
    custom_css: "Kohandatud CSS",
    custom_variants: "Variandid",

    wrap_product_title: {
      title: "üksus Pealkiri",
      subtitle: "Hallake üksust üksus Toode Pealkiri ja kohandage oma poe seotud seadeid.",
    },

    animation: {
      title: "üksus",
      static: {
        false_title: "üksus Pealkiri",
        false_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_title: "Staatiline",
        true_description: "üksus Kirjeldus",
      },
    },

    quick_actions: {
      title: "üksus Toimingud",
      hover: {
        false_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_title: "Näita Toiming on üksus",
      },
    },
    filter_products: {
      title: "Filter Toode",
      only_available: {
        false_description: "Näita vaikimisi poe loendis kõiki tooteid.",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_title: "Saadaval Toode",
        false_title: "Kõik Toode",
      },
    },
    filter_categories: {
      title: "Filter Kategooriad",
      hide_empty_folders: {
        false_description: "Näita poe loendis kõiki kategooriaid.",
        false_title: "Näita Kõik Kategooriad",
        true_title: "Peida Tühi Kategooriad",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      },
    },

    product_page: {
      title: "Tooteleht",
      subtitle:
        "Hallake üksust Toode Leht ja kohandage oma poe seotud seadeid.",
      buy_button_color: "Osta üksus värv",
      smart_price: {
        title: "nutikas ühik Hind",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      },
      reverse_currency: {
        title: "Pealkiri",
        false_title: "Tavaline mood",
        true_title: "üksus Režiim",
        false_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      },
      variants_selector: {
        title: "Variandid üksus",
        subtitle:
          "Hallake üksust Variandid üksus ja kohandage oma poe seotud seadeid.",
      },

      tabs_order: {
        title: "üksus Tellimus",
        reset_to_default: "Lähtesta vaikeväärtusele",
      },
    }, // end: product_page
  },

  /**
   * @see BShopThemeVendor
   */
  b_shop_theme_vendor: {
    onboarding: {
      title: "Pealkiri",
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    inputs: {
      page_vendor_login: {
        label: "Müüja üksus Leht",
        message:
          "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
      },
      page_vendor_registered: {
        label: "Müüja üksus Leht",
        message:
          "Valige sisseloginud müüjatele kohandatud leht. See leht kuvatakse siis, kui teie turg toetab mitut müüjat kasutaja kohta.",
      },
    },
  },

  /** @see BShopOptionsVariants **/
  b_shop_options_variants: {
    custom_variants: {
      title: "Kohandatud Variandid",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
  },
  /** @see BShopThemeTypography **/
  b_shop_theme_typography: {
    main_font: {
      title: "Peamine üksus Font",
      subtitle: "Hallake üksust Peamine Font ja kohandage oma poe seotud seadeid.",
    },
    inputs: {
      font_family: {
        label: "Font üksus",
        message: "Font üksus",
      },
      font_res: {
        label: "Font üksus",
        message: "Font üksus",
      },
    },
  },

  /** @see BShopThemeHeader **/
  b_shop_theme_header: {
    logo: {
      title: "üksus Logo",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    header_title: {
      title: "üksus Pealkiri",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },

    inputs: {
      logo: {
        label: "üksus Logo",
      },
      height: {
        label: "Logo Kõrgus",
      },
      width: {
        label: "Logo Laius",
      },
      title: {
        label: "üksus Pealkiri",
        set_empty: "määra Tühi Pealkiri",
      },
    },
  },

  /** @see ShopThemeVariantsMode**/
  shop_theme_variants_mode: {
    smart: {
      title: "nutikas Režiim",
      description:
        "Hallake üksust nutikas ja kohandage oma poe seotud seadeid.",
    },
    select: {
      title: "üksus Režiim",
      description:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
  },

  /** @see BPropertySetAdd**/
  property_set_add: {
    edit_title: "Muuda üksus määra",
    add_title: "Lisa üksus määra",
    config: {
      subtitle:
        "Hallake üksust Konfiguratsioon ja kohandage oma poe seotud seadeid.",
    },
    variants: {
      title: "Variandid",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },

    inputs: {
      title: {
        placeholder: "Pealkiri",
      },
      description: {
        placeholder: "Kirjeldus",
      },
      custom_variants: {
        true_title: "Kohandatud Variandid",
        false_title: "Vaikimisi Variandid",
        true_description: "üksus Kirjeldus",
        false_description: "üksus Kirjeldus",
      },
    },
  },

  /** @see BPropertySetVariantRow **/
  property_set_variant_row: {
    inputs: {
      values: {
        placeholder: "määra üksus määra... (Valikuline)",
        messages:
          "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
      },
    },
  },

  /** {@see AppTemplates**/
  app_templates: {
    default: "Vaikimisi",
    blue: "Sinine ookean",
    amber: "Merevaik",
    green: "Ekvatoriaalne",
    red: "Vampiir",
    magenta: "Lill",
    master: "Meister",
    black: "Tume pool",
  },

  /** {@see BPageAffiliateOrders**/
  affiliate_orders: {
    title: "Siduspartnerite tellimused",
    table: {
      order_price: "Tellimuse summa",
      order_payment: "Tellimuse makse olek",
      order_link: "Tellimuse link",
      commission_status: "Komisjoni staatus",
      commission_amount: "Komisjoni summa",
      items: "Üksused",
      actions: "Tegevused",
      create_date: "Loo kuupäev",
    },
    notifications: {
      update_success: "Sidusettevõtte olekut värskendati.",
    },
  },

  /** {@see BPageAffiliatePayments**/
  affiliate_payments: {
    title: "Siduspartneri maksed",
    table: {
      staff: "Personal",
      amount: "Summa",
      note: "Märge",
      date: "Kuupäev",
    },
  },
  /** {@see BPageShuttleRoles**/
  my_roles: {
    title: "Minu rollid",
    message:
      "Rollid on poe töötajatele antud juurdepääsu tüüp. Näiteks tellimuste saatmise või pakkimise eest vastutavad töötajad.",
  },
  /** {@see WidgetMyRoleCard**/
  role_card: {
    complete_tasks: "Täidetud ülesanded",
    reject_tasks: "Tagasilükatud ülesanded",
    last_check: "Hiljutine kontroll",
  },

  /** {@see BAppConfigDialog**/
  app_config: {
    reviews: "Arvustused",
    rate_now: "Hinda kohe",
    category: "Kategooria",
    uninstall: "Desinstallige",
    get_app: "Hangi rakendus",
    public_keys: "avalikud võtmed",
    private_keys: "Privaatvõtmed (turvaline)",
    config: "Rakenduse konfiguratsioon",
    app_status: "Rakenduse olek",
    app_info: "Rakenduse teave",
    update_at: "Hiljutine värskendus",
    visit_website: "Külastage veebisaiti",
    privacy: "Privaatsuspoliitika",
    installs: "Installib",
    basic_profile_permission: "Profiili põhiteave",
    developer: "Arendaja",
    permissions: "load",
    total_comments: "Kommentaarid kokku",
    delete_dialog: {
      title: "Desinstallige rakendus",
      message: "Kas soovite selle rakenduse oma poest eemaldada?",
      action: "Jah, kustuta rakendus",
    },
    notifications: {
      uninstall_success: "Rakenduse desinstallimine õnnestus.",
    },
  },

  /** {@see BPageShopChannelBots**/
  shop_bots: {
    not_set: "Pole määratud!",
    tokens: "Token(id)",
    webhook: "Veebihaak",
    calls: "Kõned",
    dialog: {
      title: "{name} Boti konfiguratsioon",
      message:
        "Põhjalik robotite raamistik ettevõttetasemel ostukogemuste loomiseks.",
    },
  },

  /** {@see BPageShopCrmCustomers**/
  shop_customers: {
    title: "Klientide haldamine",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    add_customer_action: "Lisa Uus Klient",

    all_customers: "Laadige alla kõik kliendid",
    filtered_customers: "Filtreeritud kliendid",
    dialog_chips: {
      title: "Määrake kliendi kiipide arv",
    },
    dialog_club: {
      title: "Määrake kliendiklubi tase",
    },
  },

  /** {@see BCustomerAdd**/
  customer_add: {
    edit_title: "Muuda Klient",
    add_title: "Lisa Uus Klient",
    subtitle:
      "Hallake üksust Klient Lisa ja kohandage oma poe seotud seadeid.",
    more: {
      title: "Lisage rohkem üksikasju",
      subtitle: "Hallake üksust Rohkem ja kohandage oma poe seotud seadeid.",
    },
    detail: {
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    preferences: {
      subtitle: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    address: {
      subtitle:
        "Hallake üksust Aadress ja kohandage oma poe seotud seadeid.",
    },
  },

  /** {@see AppPageDashboard**/
  app_dashboard: {
    status: "Avaldamise olek",
    statistics: "Statistika",
  },
  /** {@see AppPage_Publish**/
  app_publish: {
    production_version: "Tootmisversioon",
    beta_version: "Beetaversioon",
    alpha_version: "Alfa versioon",
  },
  /** {@see AppPublishWidget**/
  app_publish_widget: {
    header: "Poe veebisaidi päis",
    header_code: "Päise kood",
    admin_page: "Administraatori lehed",
    name: "Nimi",
    icon: "Ikoon",
    url: "URL",
  },

  /** {@see AppPage_API**/
  app_api: {
    title: "API juurdepääs",
    revoke_api: "Tühista API",
    api_key: "API võti",
    secret: "Salajane võti",
    client: "Klient",
    redirect_url: "URL-ide ümbersuunamine",
    client_name: "Kliendi nimi",
  },

  /** {@see BPageApplication**/
  app_loader_page: {
    no_ui_title: "Sellel rakendusel pole kasutajaliidest!",
    no_ui_desc:
      "Mõned rakendused ei vaja oma administraatorialas kasutajaliidest. See rakendus võib koodi lisada ainult teie poe veebisaidi päise jaotisesse.",
    header: "Päise kood",
  },
  /** {@see BPageShopFinanceReport**/
  finance_report: {
    export_title: "Ekspordi finantsandmeid",
    export_sub_title:
      "Laadige finantsandmed alla ühes failis.",
    start_input_placeholder: "Valige aruande alguskuupäev",
    end_input_placeholder: "Valige aruande lõppkuupäev",
    download_action: "Laadige alla finantsloend",
  },

  /** {@see BPageShopSettingNotifications**/
  shop_notifications: {
    title: "Poe teatised",
    message: "Muutke oma poe teavituste seadeid ja eelistusi",
    channel: "Kanal",
    status: "Olek",
    events: "Sündmused",
    info: "Teave",
    actions: "Tegevused",
    connected: "Ühendatud",
    not_connected: "Pole ühendatud!",
    connect_now: "Ühenda kohe",
    send_test: "Testiandmete saatmine",
    disconnect: "Katkesta ühendus",

    dialog: {
      title: "Boti konfiguratsioon",
      message:
        "Põhjalik teavitusraamistik ettevõttetasemel e-kaubanduse kogemuste loomiseks.",
      action: "Kliki siia!",
      set_config: "Määra konfiguratsioon",
    },
  },
  notification_events: {
    new_order: "🛍️ Telli",
    payment: "💳 Tasumine",
    return: "📦 Tagastamine",
    weekly_report: "📈 Nädalaaruanded",
  },

  /** {@see BOrderDashboardDelivery} **/
  order_delivery: {
    title: "Kohaletoimetamine",
    add_to_delivery_que_action: "Lisa tarnejärjekorda",
    in_que: "Saatmisjärjekorras",
    message:
      "Pärast paki saatmiskulerile üleandmist klõpsake nuppu <b>Kinnita kohaletoimetamine</b> .",
    message_add_to_service:
      "Kui soovite selle paki <b>kohaletoimetamise teenusega</b> saata, klõpsake allolevat nuppu.",
    courier_action: "Kohaletoimetamine üksus",
    courier_action_subtitle: "Kuller Toiming Alapealkiri",

    pickup_ready_action: "Järeletulemine üksus",
    pickup_ready_action_subtitle: "Järeletulemine üksus Toiming Alapealkiri",

    service_action: "Teenus Toiming",

    checklist: [
      "Kontrollige kulleri isikutunnistust.",
      "Toodete korralik pakendamine ja õigeaegne kohaletoimetamine võivad suurendada teie klientide hoidmise määra.",
    ],
    manual: {
      title: "Ootan kliendi kinnitust kohaletoimetamise kohta.",
      action_received: "Ostja kinnitus",
      action_returned: "Kohaletoimetamine Tagastamine",

      message:
        "Märkus. Kui klient saab tellimuse kätte, saate täitmise lõpetamiseks kasutada järgmisi võimalusi. Mõned süsteemis olevad saatmisteenused kinnitavad kohaletoimetamise automaatselt.",
    },
    auto_complete_note:
      "Teatud aja möödudes muudetakse tellimuse olek tarnituks. See periood erineb olenevalt tellimuse tüübist ja selle määrab süsteem.",
    received: {
      title: "Tarnitakse Kliendile.",
      delivered_date: "Tarnetähtaeg",
    },
    receiver: "Vastuvõtja",
    bill: "Kviitung",

    tracking: {
      title: "Lisage jälgimiskood / URL",
      code: "Jälgimiskood",
      url: "Jälgimise URL",
      message:
        "Kui olete tarninud teenuse kaudu, mis pakub sellele tellimusele jälgimiskoodi, saate sellesse jaotisesse sisestada koodi ja asjakohase jälgimislingi. Seda teavet näidatakse kliendile.",
    },
    preferred_delivery_time: "Eelistatud tarneaeg",
    manage_couriers: "Halda minu kullereid",
    manage_service: "Teenuse haldamine",

    option_deliver_by_courier: "1. võimalus: kohaletoimetamine kullerite poolt.",
    option_add_to_que:
      "2. valik: lisage saatmisteenuse lehel töötlemiseks järjekorda.",
    option_instant_shipping: "3. valik: kohene kohaletoimetamine.",

    verify_delivery_input: {
      true_title: "Kinnita Kohaletoimetamine üksus",
      true_description:
        "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
    },
  },

  /** {@see BShopHomeSelect} **/
  shop_home_edit: {
    title: "Avalehe seadistus",
    sub_title:
      "Määrake oma veebisaidi vaikeleht",

    default_home: "Vaikimisi avaleht",
    default_home_placeholder: "Poe leht on veebisaidi avaleht",
  },
  /**
   * @see OReferralBank
   */
  referral_bank: {
    title: "soovitus Juhtpaneel",
    subtitle:
      "Hallake üksust soovitus Pank ja kohandage oma poe seotud seadeid.",
    no_bank_info: "Ei Pank Info!",
    actions: {
      edit_my_bank_info: "Muuda üksus Pank Info",
    },
    bank_dialog: {
      title: "üksus Pank Üksikasjad",
      info: {
        title: "pank",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      },
      inputs: {
        name: {
          label: "Pank Nimi",
          message: "Hallake üksust Nimi ja kohandage oma poe seotud seadeid.",
        },
        holder_name: {
          label: "Konto üksus Nimi",
          message:
            "Hallake üksust üksus Nimi ja kohandage oma poe seotud seadeid.",
        },
        account_number: {
          label: "Konto number",
          message:
            "Hallake üksust Konto üksus ja kohandage oma poe seotud seadeid.",
        },
        routing_number: {
          label: "silt",
          message:
            "Seadistage ja hallake seda valikut oma poe jaoks.",
        },
        swift: {
          label: "SWIFT/BIC Kood",
          message:
            "Hallake üksust swift ja kohandage oma poe seotud seadeid.",
        },
        iban: {
          label: "silt",
          message:
            "Hallake üksust iban ja kohandage oma poe seotud seadeid.",
        },
        contact: {
          label: "Kontaktinfo",
          message: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
        },
        note: {
          label: "Märge",
          message: "üksus Märkus",
        },
      },
    },
    notifications: {
      save: {
        message: "Salvesta",
      },
    },
  },

  /**
   * @see OReferralTier
   */
  referral_tier: {
    message:
      "Hallake üksust soovitus üksus ja kohandage oma poe seotud seadeid.",
  },

  /**
   * @see ReferralTiers
   */
  ReferralTiers: {
    Bronze: {
      title: "Pealkiri",
      description:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    Silver: {
      title: "Pealkiri",
      description:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    Gold: {
      title: "Pealkiri",
      description:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    Platinum: {
      title: "Pealkiri",
      description:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    Diamond: {
      title: "Pealkiri",
      description:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
  },

  /**
   * @see OPageMonetize
   */
  page_monetize: {
    title: "Raha teenimine",
    subtitle: "Leht üksus",
  },

  /** {@see OPageMonetizeReferral} **/
  selldone_referral_page: {
    referral_link: "Viitamise link",
    registered: "Registreeritud",
    accepted: "Vastu võetud",
    bank: "pank",
    bank_title: "Pangaandmed väljamaksmiseks",
    new_users: "Uued kasutajad",
    performance: "Esitus",
    credit_mode: "Krediidirežiim",
    get_stickers: "Hankige kopeerimiseks ja kleepimiseks kleebise HTML-kood",
    click_copy_sticker_code: "Html-koodi kopeerimiseks klõpsake märgil.",
  },
  /** {@see OReferralTransactions} **/
  selldone_referral_payment: {
    title: "Suunamismaksed",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",

    officer: "Ohvitser",
    amount: "Tehingu summa",
    note: "Märge",
    date: "Kuupäev",
  },

  /** {@see BGatewayCard} **/
  widget_shop_gateway: {
    link_account_caution:
      "Linkige konto ({currency}) oma poega! Kliki siia..",
  },

  /** {@see BProductOrderSalesPerformance} **/
  product_sell_widget: {
    title: "Toote müüginäitajad",
  },

  /** {@see BOrderDashboardDropshippingFulfillment} **/
  fulfilment_order_widget: {
    title: "Dropshipping täitmine",
    check_action: "Nõustuge dropshippinguga",
    uncheck_action: "Tellimus kinnitatud",
    pay_action: "Maksa kauba maksumus..",
    pay_completed: "Maksekinnitus",
    list_of_items: "Esemete edasimüümine",

    checklist: [
      "Makske algsele müüjale kaudselt müüdud toodete kogus.",
      "Saate tasuda ja arveldada toodete maksumust tarnijale koos raamatupidamise jaotises> Poe väljapanek.",
      "Pärast tasumist saab tarnija teie tellimuse kätte ja saadab selle pärast ettevalmistamist otse ostjale.",
    ],
    message:
      "Pärast tarnijale tellimistasu tasumist vaadake selles jaotises tellimuse saatmise edenemist.",
  },

  /** {@see BPageWholesaler} **/
  drop_shipping: {
    menu: {
      dashboard: "Armatuurlaud",
      orders: "Tellimused",
      inventory: "Inventuur",
      shops: "Edasimüüjad",
      requests: "Taotlused",
    },
    drop_shipping_charge: "Dropshipping tasu",
  },

  /** {@see DropshipRequestStatus} **/
  dropship_request_status: {
    PENDING: "Ootel",
    ACCEPT: "Nõustu",
    REJECT: "Keeldu",
  },

  /** {@see BPageWholesalerShop} **/
  dropshipping_reseller_page: {
    menu: {
      dashboard: "Armatuurlaud",
      orders: "Tellimused",
      wallet: "Rahakott",
    },
  },

  /** {@see BPageWholesalerShopDashboard} **/
  dropshipping_reseller_dashboard: {
    title: "Edasimüüja armatuurlaud",
  },

  /** {@see BPageWholesalerShopOrders} **/
  dropshipping_reseller_orders: {
    title: "Edasimüüja tellimused",
  },

  /** {@see BPageWholesalerShopWallet} **/
  dropshipping_reseller_wallet: {
    title: "Edasimüüja rahakott",
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Maksekinnitus",
      payment_success: "Makse sooritatud.",
      buy_title: "Osta",
      pay_by_giftcards: "Teie tellimus tasuti kinkekaardiga.",
      free_order: "Teie tellimus on tasuta.",
      pay_by_cod: "Teie tellimus on registreeritud sularahana.",
      pay_by_dir:
        "Teie tellimus on registreeritud otsemaksena, palun viige makse lõpule ja laadige kviitung üles oma tellimuse lehele.",

      pay_title: "Makse",
      qr_code_payment: "Makse QR-kood loodud.",
      connecting_to_online_gateway: "Ühenduse loomine veebimaksete lüüsiga.",
    },
  },

  /** @see DropShippingAccountCharges **/
  dropship_charges: {
    notifications: {
      pay_confirm_message: "Makse on kinnitatud.<br> Kuupäev: {payment_at}",
      pay_fail_title: "Maksmata",
      pay_fail_message: "Makse ei saa kinnitada!",
    },
  },

  /** @see BPageShopFinanceResellerFulfillment **/
  dropship_checkout: {
    pay_dialog: {
      title: "Edasimüüja tellib makse",
      balance: "Teie konto saldo",
      total_cost: "Tellimuse kogumaksumus",
      need_charge: "Vajab laadida",
      no_account_cation: "Teil pole kontot! Helista hulgimüüjale.",
      orders: "Tellimused",
    },
    notifications: {
      success_pay:
        "Teie makse nende tellimuste eest on kinnitatud ja edukalt lõpule viidud.",
    },
  },
  /** @see BPageShopFinanceResellerWallets **/
  dropship_accounts: {
    charge_account: "Tasu konto",
    charge_dialog: {
      title: "Tasuta dropshipping kontolt",
      amount_input: "Konto tasu",
      charge_now: "Laadige kohe",
    },
  },

  /** @see BPageWholesalerDashboard **/
  dropship_admin_dashboard: {
    title: "Edasimüüja taotlused",
    today_order_count: "Täna loevad tellimused",
    yesterday_order_count: "Eilsed tellimused loevad",
    total_7_days: "Viimase 7 päeva tellimusi kokku",
  },

  /** @see BProductAddDropshipping **/
  dropshipping_products: {
    no_shops:
      "Kahjuks poodi ei leitud. Tulevikus on poode rohkem, et saaksite nende tooteid oma poodi panna.",
    show_all_shops: "Kuva kõik poed",
    show_eligible_shops_message: "Kuva sobilikud poed",
    show_all_message: "Näete kõiki poode",
    current_shop: "Praegune pood",
    request_account: "Taotlege kontot",
    request_accepted: "Taotlus vastu võetud",
    request_rejected: "Taotlus lükati tagasi",
    request_pending: "Taotlus on ootel..",
    notifications: {
      add_product: "Toode on teie poodi lisatud.",
      request_access:
        "Saatsime teie juurdepääsutaotluse hulgimüüjale edukalt.",
    },
  },

  /** @see BProductDropshippingAbstractView **/
  product_dropshipping: {
    need_re_enable:
      "Esialgne müüja on seda toodet muutnud, need hinnamuudatused on toote teie poes keelanud. Kontrollige muudatusi ja kui nõustute toote uuesti aktiveerima, vajutage allolevat nuppu.",
    need_re_enable_action: "Nõustuge, rakendage muudatused ja aktiveerige",
    changed_value:
      "Seda toodet on redigeerinud esialgne müüja. Kontrollige muudatusi ja kui nõustute muudatuste rakendamisega oma tootele, klõpsake allolevat nuppu.",
    changed_value_action: "Nõus, tee muudatusi",
    parent_deleted: "Algne müüja eemaldas selle kauba.",
    parent_closed:
      "Algne müüja on selle toote keelanud! Te ei saa seda toodet oma poes müüa, kuid kui algne müüja toote uuesti aktiveerib, saate selle toote oma poes uuesti aktiveerida.",
    notifications: {
      re_enable_success: "See toode on uuesti aktiveeritud.",
      update_success:
        "Seda tooteteavet värskendati algse tooteteabega.",
    },
  },

  /** @see BPageProductDropshipping **/
  product_dropshipping_admin: {
    title: "üksus",
    save_alert:
      "Selle toote dropshipping seaded on muutunud. Kas soovite muudatused salvestada?",
    reselling_message:
      "Selle valiku aktiveerides saavad teised müüjad teie toote oma poodi lisada.",
    reselling: "Luba Dropshipping",
    price_merchants: "Hind kaupmeestele",
    price_commission: "Kaupmehe vahendustasu (fikseeritud)",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Saadavuse ootel",
    inform_me_when_available: "Anna mulle teada, kui see on saadaval!",
    pay_buy: "Maksa ja osta",
    quantity: "üksus",
    quantity_in_basket: "Kaubad ostukorvis",
    count_unit: "x",
    remove: "Eemalda",
    add_to_basket: "Lisa ostukorvi",
    book_now: "Broneeri kohe",
    reserve_now: "Broneeri kohe",
    buy_now: "Osta kohe",

    buy: "Osta",
    notifications: {
      inform_add_success: "Anname teile teada, kui see on saadaval.",
      inform_remove_success: "Olete ootenimekirjast eemaldatud.",
    },
  },
  /** @see SProductOverview **/
  product_info: {
    fake: "Võlts",
    action: "Oksjon",
    compare_limit: "10 kauba piirang",
    compare_add: "Lisa võrdlusesse",
    compare_be_in_list: "Võrdlusnimekirjas",

    type: "Tüüp",
    brand: "Bränd",
    category: "Kategooria",
    discount: "Allahindlus",
    track_price: "Jälgi hinda",
    waiting_for_auction: "Ootad oksjonit?",
    inform_auction: "Anna oksjonil teada",
    return_in_days: "{days} päeva garantiiga tagastus",
    support24h7: "Tugi 24 tundi 7 päeva",
    support_normal: "Tööaja toetus",
    original_guarantee: "Originaalgarantii",
    cod_payment: "Sularahas kohaletoimetamise tugi",

    pros: "Plussid",
    cons: "Miinused",

    external_link: "Loe rohkem",
    notifications: {
      congratulation: "Palju õnne",
      waiting_list_add_success:
        "Anname teile teada, kui see toode oksjonile läheb.",
      waiting_list_delete_success: "Lahkusite oksjoni ootenimekirjast.",
    },

    offer_message: "Ostke {min_quantity} Saate nende kaupade puhul {percent}% allahindlust",
    up_to: "Kuni {per_order}x tellimuse kohta",
    get_free: "SAA TASUTA",
    get_off: "SAADA {percent}% SOODSALT",
  },

  /** @see SStyler **/
  styler: {
    size_class: "Suurus ja klass",
    delete_bg: "Kustuta taustpilt",
    bg_color: "Taustavärv",
    section_style: "Määrake jaotise stiil",
    link: "Määra link",
    show_products: "Toodete / kategooriate loendi haldamine",
    show_product: "Valige toode",
    delete_section: "Kustuta jaotis",
    text_color: "Teksti värv",
    tex_align: "Teksti joondamine",
    text_style: "Teksti stiil",
    bg_image: "Taustapilt",

    product: {
      title: "Valige toode",
    },

    /** @see SPageProductsFilter **/
    products: {
      title: "Toodete ja kategooriate loendi haldamine",
      sort_options: "Valige Sortimise ja kuvamise sätted",
      item_types: "Kuva ainult tooted/kategooriad",
      product_only: "Ainult tooted",
      category_only: "Ainult kategooriad",
      no_category: "Teie poes pole kategooriat.",
      limit: "Toodete piirang",
      limit_message: "Sisestage toodete tulemuste arv",
      select_categories: "Valige saadaolevad kategooriad",
      categories_limit: "Kategooriate piirang",
      categories_limit_msg:
        "Sisestage maksimaalne kategooriate arv. Seadke piiranguteta null.",
    },
  },

  /** @see BPageShopCrmChat **/
  shop_contacts: {
    popup: "Luba hüpikakende tugi",
    popup_message:
      "Selle valiku aktiveerimisel kuvatakse tugivõti teie poe paremas alanurgas.",
  },

  /** @see BPagePopup **/
  popup_page: {
    preview: "Vaadake otseülekannet",

    menu: {
      design: "Disain",
      appearance: "Välimus",
      filter: "Filtrid",
      setting: "Seadistamine",
    },
    notifications: {
      save: "Hüpikakna salvestamine õnnestus.",
      edit: "Hüpikakna värskendamine õnnestus.",
    },
  },
  /** @see LMenuLeftPopupAppearance **/
  popup_appearance: {
    position: "positsioon",
    position_desc:
      "Määrake selle teatise kuvamiskoht lehel.",
    width: "Laius",
    width_desc: "Saate määrata lehe maksimaalse laiuse.",
    height: "Kõrgus",
    height_desc: "Saate määrata lehe maksimaalse kõrguse.",
    radius: "Nurga raadius",
    radius_desc:
      "Selles jaotises saate määrata teatise nurkade kõverusraadiuse.",
    shadow: "Vari",
    shadow_desc: "Kas soovite, et hüpikaken oleks varjutatud?",
    delay: "Näita viivitust",
    delay_desc:
      "Kui kasutaja teie poodi siseneb, kuvatakse pärast selle aja möödumist kasutajale teatis.",
    hide: "Peida viivitus",
    hide_desc:
      "Saate määrata, et märguanne sulguks automaatselt mõni sekund pärast etendust. Väärtus 0 tähendab, et teade ei sulgu automaatselt.",
    transition: "Hüpikanimatsioon",
  },

  /** @see BPagePopupFilter **/
  popup_filter: {
    registered: "Liikmeks ja sisselogimise nõue",
    registered_desc:
      "Saate valida selle märguande kuvamise ainult poe kasutajatele või külalistele.",
    only_guests: "Ainult külalised",
    only_users: "Ainult sisse loginud kasutajad",
    purchased: "Ostude ajalugu",
    purchased_desc:
      "Saate valida selle teatise kuvamise ainult kasutajatele, kes on juba ostnud või kes pole veel ostnud.",
    no_purchase: "Ostu veel pole",
    yes_purchase: "Ostetud enne",
    sex: "Sugu",
    sex_desc:
      "Kas soovite, et seda teatist näidataks ainult kindlast soost kasutajatele?",
    age: "Minimaalne vanus",
    age_desc:
      "Kui sisestatakse mõni väärtus, mis on suurem kui 6, peab kasutaja olema sisse logitud ja sisestanud oma sünnikuupäeva.",
    levels: "Kliendiklubi tasemed",
    levels_desc:
      "Kui kasutajal on üks allpool valitud tasemetest, kuvatakse talle see märguanne.",
    countries: "Asukohapiirangud",
    countries_desc:
      "Kas soovite, et seda teatist kuvataks ainult konkreetsest riigist pärit kasutajatele?",
  },

  /** @see BPagePopupSetting **/
  popup_setting: {
    published: "Avaldatud olek",
    repeat: "Korda",
    repeat_msg:
      "Kas soovite, et seda teatist kuvataks kasutajale rohkem kui üks kord?",
    intervals: "Hüpikakna kuvamise kestus",
    intervals_msg:
      "Minimaalne ajavahemik kasutajale märguannete kuvamise vahel peab olema möödunud.",
    designer_zone: "Disainertsoon",
    title: "Hüpikakna pealkiri",
    note: "Disaineri märkus",
    image: "Kaanepilt",
    delete: {
      title: "Kustuta",
      sub_title:
        "Kui olete hüpikakna kustutanud, pole tagasipöördumist. Palun olge kindel.",
      action: "Kustuta see hüpikaken",
    },
    notifications: {
      delete: "Hüpikaken kustutatud.",
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
      templates: "Mall",
      provider: "Teenusepakkuja",
    },

    manage: {
      title: "Halda SMS",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },

    template: {
      title: "Mall",
      valid_message: "üksus Sõnum",
      provider_not_enable_message: "üksus",
      need_custom_provider_message:
        "Hallake üksust üksus Kohandatud Teenusepakkuja Sõnum ja kohandage oma poe seotud seadeid.",
      add_new: "Lisa uus",
      disable_reason: {
        set_provider: "määra Teenusepakkuja",
        provider_is_disabled: "Teenusepakkuja is üksus!",
        otp: "OTP - Puudub üksus!",
        select_another_provider: "üksus",
      },
      enable_only_filter: "Näita üksus Lubatud",

      text_template_not_supported_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
      structure_template_not_supported_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks.",

      structured_data: "üksus",

      menu: {
        reset_error: "üksus Viga",
        send_test: "üksus Test Sõnum",
      },
    },
    template_edit: {
      title_add: "Lisa Uus Sõnum Mall",
      title_edit: "Muuda Sõnum Mall",
      config: {
        title: "Sõnum Konfiguratsioon",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
        code: "Kood",
        language_msg: "Jätke tühjaks, et määrata see vaikeväärtuseks.",
        enable_msg: "Seadistage ja hallake seda valikut oma poe jaoks.",
      },
      text: {
        title: "üksus Tekst",
        subtitle:
          "Hallake üksust Tekst ja kohandage oma poe seotud seadeid.",
        message: "Sõnum",
        reset_to_default: "Lähtesta vaikeväärtusele",

        auto_fill: {
          title: "Pealkiri",
          subtitle:
            "Seadistage ja hallake seda valikut oma poe jaoks.",
        },

        sample: {
          title: "Näidis Sõnum",
        },
      },
      template: {
        title: "üksus Mall",
        subtitle:
          "<code></code><code></code><code></code> Hallake üksust Mall ja kohandage oma poe seotud seadeid. {code}",
        add_new_parameter: "Lisa Uus üksus",

        auto_fill: {
          title: "Pealkiri",
          subtitle:
            "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
        },
        request: {
          title: "Näidis üksus",
        },
        sample: {
          title: "Näidis Mall Sõnum",
          subtitle: "Hallake üksust Näidis ja kohandage oma poe seotud seadeid.",
        },
        add_message_action: "Lisa Sõnum Mall",
      },
    },
  },
  /** @see SmsTemplateMode **/
  sms_template_mode: {
    text: {
      title: "üksus Tekst",
      desc: "Hallake üksust Tekst ja kohandage oma poe seotud seadeid.",
    },
    template: {
      title: "üksus Mall",
      desc: "Hallake üksust Mall ja kohandage oma poe seotud seadeid.",
    },
  },

  /** @see BShopSmsProvider **/
  shop_sms_provider: {
    title: "Kohandatud SMS Teenusepakkuja",
    reset_error: "üksus Viga",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    plain_text: "üksus Tekst",
    structural_template: "üksus Mall",
    errors_limit_msg:
      "Hallake üksust Viga Piirang üksus ja kohandage oma poe seotud seadeid.",

    enable_input: {
      false_description:
        "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      true_description:
        "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
    },
    test_input: {
      true_title: "üksus Konfiguratsioon",
      true_description:
        "<b></b> Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid. {phone}",
    },
    sync_action: {
      title: "Tegevused",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      action: "Sünkrooni üksus",
    },
    tokens: {
      title: "üksus",
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
  },
  sms_messages_options: {
    all: {
      title: "OPT + Tellimus Teavitused",
      description:
        "Hallake üksust Kõik ja kohandage oma poe seotud seadeid.",
    },
    otp: {
      title: "OTP üksus",
      description: "otp",
    },
  },

  /** @see BPageShopSettingEmail **/
  shop_emails: {
    title: "Hallake e-kirju",
    sub_title:
      "Selles jaotises näete kaupluse poolt klientidele ja juhtidele saadetud meilide loendit. Meilid kujundatakse ja luuakse automaatselt teie poe jaoks sisestatud teabe põhjal. Samuti saab tulevikus avalikkusele kättesaadavaks sõnumite ja piltide isikupärastamise võimalus.",

    tabs: {
      preferences: "üksus",
      templates: "Mall",
      provider: "Teenusepakkuja",
    },

    preferences: {
      title: "Teavitus E-post",
    },
  },

  /**
   * @see BShopEmailProvider
   */
  shop_email_provider: {
    title: "Pealkiri",
    subtitle:
      "Hallake üksust Pood E-post Teenusepakkuja ja kohandage oma poe seotud seadeid.",
    provider: "Teenusepakkuja",
    enable_input: {
      false_description: "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      true_description: "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
    },
    config: {
      title: "Konfiguratsioon",
      subtitle:
        "Hallake üksust Konfiguratsioon ja kohandage oma poe seotud seadeid.",
    },
    sender: {
      title: "Alates",
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },

    inputs: {
      from: {
        label: "üksus E-post",
      },
      from_name: {
        label: "üksus Nimi",
      },
    },

    actions: {
      send_test_email: "üksus a Test E-post",
    },

    messages: {
      provider_error_limit:
        "Hallake üksust Teenusepakkuja Viga Piirang ja kohandage oma poe seotud seadeid.",

      encryption_ports_guide:
        "<b></b><b></b><b></b><b></b> Seadistage ja hallake seda valikut oma poe jaoks.",

      enable_receive_test:
        "<b></b> Seadistage ja hallake seda valikut oma poe jaoks. {email}",
    },
  },

  /** @see InstagramViewMedias **/
  instagram: {
    title: "Müük Instagramis",

    add_product: "Lisa uus toode",
    create_product: "Loo toode",
    link_box_msg:
      "Pange see link oma biograafiasse Instagrami, Telegrami või muusse sotsiaalmeediasse, et teie publik saaks kiiremini, lihtsamalt, rohkem ja lõpuks rohkem osta.",
    remove_account: "Muutke / eemaldage Instagrami link",
  },
  /** @see BPageShopChannelInstagram **/
  shop_channel_instagram: {
    title: "Instagram Müügid Kanal",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Nimekiri",
      message:
        "Kirjutage tööde pealkirjad, mida soovite teha, ja andke ostjale teada, kui kaugele see on edenenud.",
    },
    booking: {
      title: "Broneerimine / Broneerimine",
      message:
        "Seda tellimust töödeldakse kindlaksmääratud ajal, klient on valinud soovitud perioodi, kui soovite valitud perioodil muudatusi teha, andke sellest kliendile teada.",

      selected_checkin: "Valitud kliendi sisselogimiskuupäev",
      selected_checkout: "Valitud kliendi lahkumise kuupäev",
      change_days_question:
        "Kas peate vahetama kliendi valitud päevadel?",
      show_calendar: "Kuva tellimuste kalender",
    },
    pricing: {
      title: "Hinnakujundus",
      message: "Kui palju maksate selle teenuse eest?",
    },
    subscription: {
      title: "Tellimus",
      message:
        "Tellimisperioodi saate valida, ostes seda teenust igapäevaselt. Andke ostjale teada, kui soovite juba sisestatud vaikeväärtusi muuta.",
      duration: "Tellimisperiood",
    },
    charge: {
      title: "Lae",
      message:
        "Olete määranud selle üksuse tasu. Saate muuta kliendi ostetud kauba tasu suurust.",
      charge: "Lae",
    },

    save_item: "Kontrollige ja määrake",
    start_service: "Käivitage teenus",
    end_service: "Lõpetama",
  },
  /** @see BOrderDashboardServiceTasks **/
  service_tasks: {
    notification_finish: {
      title: "Teenuse lõpp",
      message:
        "Kui see on tehtud, vajutage tellimuse täitmiseks ja sulgemiseks kinnitusklahvi.",
      action: "Kinnitage ja täitke tellimus",
    },
  },

  /** {@see BProductEditOutputs} **/
  product_outputs: {
    outputs_form: "Kuvari teabe struktuur (väljund)",

    virtual: {
      title: "Toote väljundi teabe vorm",
      sub_title:
        "Teave, mida soovite kasutajale pärast ostmist näidata. See vorm on eriti kasutatav virtuaalsete toodete (nt kinkekaardi) müügi puhul.",
    },
    service: {
      title: "Teenuse disain",
      sub_title:
        "Esmalt valige oma teenuse tüüp ja sisestage nõutav teave. Näiteks saate koostada ülesannete nimekirja või küsida kliendilt broneerimisaega või kohtumise.",
    },
  },

  /** {@see BProductServiceManage} **/
  service_design: {
    type: "Teenuse tüüp",
    type_message:
      "Valige selle toote jaoks pakutava teenuse tüüp. Iga üksuse valimisel kuvatakse vastav vorm. Olenevalt valitud teenuse tüübist võidakse tellijalt saada lisateavet tellimuse vormistamisel.",
  },

  /** {@see AvocadoHomePage} **/
  avocado: {
    name: "Avokaado",
    title: "Kiire, täpne ja nauditav müük kõigis sotsiaalmeedias",
    message:
      "Üks summa ja üks tiitel on kõik, mida vajate, et klientidelt raha saada! Raha kantakse otse teie kontole ja teie kliendid saavad ainulaadse ostukogemuse.",
    new_order: "Uus arve",
    create_by_seller_title: "Loo arve",
    create_by_seller_message:
      "Kui soovid koostada kindla summaga arve ja saata selle kellelegi, siis vajuta allolevale nupule, et kuvada arve vorm. Andke genereeritud link ostjale tasumiseks ja selle kaudu tellimuse jälgimiseks.",

    create_by_buyer_title: "Avokaado vorm",
    create_by_buyer_message:
      "Selle jaotise aktiveerimisel kuvatakse teile link, edastage see link oma ostjatele, et nad saaksid oma tellimuse esitada.",

    orders_list: "Tellimuste loend",
    active_mode: "Tellimuse kviitung aktiivne",
    inactive_mode: "mitteaktiivne",
    active_message:
      "Selle allika aktiveerimisel saavad teie kliendid esitada toote tellimuse alloleva taotlusvormi kaudu.",
    avocado_form_link_message:
      "Lisage see link oma biograafiasse Instagrami, Telegrami või muusse sotsiaalmeediasse, et teie publik saaks kiiremini, lihtsamalt ja lõpuks rohkem osta",
    need_address: "Hangi aadress",
    need_address_msg:
      "Kui soovite hankida ostja asukoha ja aadressi, valige see valik.",
    avocado_link_message:
      "Tellimuse tasumiseks piisab ülaltoodud lingi andmisest kliendile. Selle lingi kaudu saab klient tellimust jälgida.",
    edit_order: "Muuda tellimust",
    progress: "Edenemismäär",
    buyer_link: "Ostja link",
    buyer_link_message:
      "Esitage see link oma ostjale. Ostja saab selle lingi kaudu maksta ja oma tellimust jälgida. See link on kodeeritud, kui kellelegi link antakse, saab ta maksta ja infot näha. See link on aktiivne 60 päeva. Kopeerimiseks klõpsake alloleval lingil.",
    OrderConfirm_done: "Tellimus kinnitatud.",
    OrderConfirm_message:
      "Kui kinnitate makse ja tellimus on õige, klõpsake allolevat nuppu.",
    OrderConfirm_action: "Tellimuse kinnitus",
    PreparingOrder_message:
      "Kui kliendi tellimus on saatmiseks valmis, klõpsake alloleval nupul OK.",
    PreparingOrder_action: "Tellimus on saatmiseks valmis",
    finish_message:
      "Kui see tellimus on lõpetatud, vajutage selle tellimuse sulgemiseks nuppu Lõpeta.",
    finish_action: "Täielik tellimuse töötlemine",
    finish_dialog: {
      title: "Täitke tellimus",
      message: "Kas tellimus on lõpetatud ja kas soovite selle kindlasti sulgeda?",
      action: "Jah, kinnitage tellimuse täitmine",
    },
    configuration: "Avokaado seaded",
    delivery_price: "Postikulu",
    edit_avocado_action: "Redigeeri teavet",
    submit_pricing_avocado_action: "Esitage tellimuse hind",
    add_avocado_action: "Loo arve link",
    avocados_list: "Avokaadode nimekiri",
    not_pricing: "Sellel kaubal ei ole hinda!",

    show_all: "Näita kõike",
    show_accepted: "Näita kinnitatud üksusi",

    notifications: {
      update_success: "Avokaado värskendamine õnnestus.",
      add_success: "Avokaado loodud edukalt.",
    },
  },

  /** {@see BDashboardShopOrdersAvocado} **/
  avocado_orders: {
    title: "Avokaado",
    title_small: "Sotsiaalmeedia müük",
    pending_orders: "Aktiivsed tellimused",
    avocado: "Telli avokaado",
  },
  /** {@see BAvocadoInvoice} **/
  avocado_process: {
    step1: "Hinnakujundus",
    step1_msg:
      "Sisestage iga kauba hind ja märkige roheline ruut. Kui kaupa ei ole võimalik müüa, muutke selle olek tagasi lükatud.",
    step2: "Kinnitage arve",
    step2_msg:
      "Koostage selle tellimuse jaoks arve. Saate sisestada arvele pealkirja ja kirjelduse. Tellimuse summa arvutatakse kaupade koguhinna alusel automaatselt.",
    title_input: "Arve pealkiri *",
    show_to_customer: "Seda teavet näidatakse ostjale.",
    description_msg:
      "Kas soovite selle tellimuse kohta märkuse kirjutada? Seda teavet näidatakse ostjale.",
    price_input: "Tellimuse summa*",
    tax_none: "Maksuvaba",
    tax_included: "Hinna sees",
    tax_add: "Lisage maks",
    tax_message: "Saate valida, kas käibemaks on hinna sees või mitte.",
    tax_included_messages: "Käibemaks on hinna sees.",
    tax_add_messages: "Lõpphinnale tuleks lisada käibemaks.",
    invoice: {
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
  },

  /** {@see BPageProductHyper} **/
  /** {@see BPageShopChannelHyper} **/
  hyper: {
    name: "Hüper",
    print_label:
      "Printige järgmine etikett ja asetage see toote ette",
    hyper_form_link_product_message:
      "Teie kliendid saavad selle lingi kaudu kiiresti osta toodet {product}. Nad sisestavad sama lingi ka QR-koodi skannides.",
    title: "Hüperkiirmüük",
    message:
      "Hyper Selldone müügikanali abil saavad teie kliendid QR-koodi skaneerides tooteid osta, ilma et teil oleks vaja midagi teha. Kasutage seda võimalust mõne eseme kiireks müümiseks suurel hulgal festivalidel, näitustel või tihedatel tseremooniatel. Pärast selles jaotises Hyperi aktiveerimist saate jaotises Tootehaldus luua füüsiliste toodete jaoks hüper QR-koodi.",
    orders_list: "Hüpertellimuste loend",
    active_mode: "Hüpermüügikanal on aktiveeritud",
    inactive_mode: "mitteaktiivne",
    active_message:
      "Kui lubate selle valiku, kuvatakse iga toote halduse jaotises kiirmüügikoodide loomise võimalus.",
    hyper_form_link_message: "Teie poe hüperlehe link",
    configuration: "Hüperseaded",
  },

  /** {@see BDashboardShopOrdersHyper} **/
  hyper_orders: {
    title: "Hüper",
    title_small: "Müügiaruanne",
    hyper: "Vastu võetud tellimusi",
  },

  /** {@see BProductInventoryManagementFile} **/
  product_file: {
    no_file: "Ühtegi faili pole veel üles laaditud!",
    delete_dialog: {
      title: "Kustuta fail",
      message: "Kas olete kindel, et kustutate selle faili?",
      action: "Jah, kustuta kohe",
    },
    notifications: {
      delete_success: "Fail kustutati edukalt.",
    },
    drag_sort_msg: "üksus",
    paid_mode_msg: "Seadistage ja hallake seda valikut oma poe jaoks.",
    free_mode_msg:
      "Hallake üksust Tasuta Režiim üksus ja kohandage oma poe seotud seadeid.",
    has_gust_shopping_msg:
      "Seadistage ja hallake seda valikut oma poe jaoks.",
    only_registered_shopping_msg:
      "Seadistage ja hallake seda valikut oma poe jaoks.",
    file_count_limit: "Failid üksus Piirang",
  },

  /**
   * @see BProductLocationRestrictionsList
   */
  product_location_restrictions: {
    title: "Saadaval Asukohad",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",

    add_location_action: "Lisa üksus",
    no_restriction: "Ei Piirang",
    import: {
      title: "Laadi Profiil",
      subtitle: "üksus a salvestatud Asukohad Profiil.",
    },
    export: {
      title: "Salvesta Profiil",
      subtitle: "Ekspordi",
    },
    has_restriction_input: {
      title: "koos Asukoht Piirang",
      description:
        "Hallake üksust koos Piirang sisend ja kohandage oma poe seotud seadeid.",
    },
    zip_pin_code: "üksus",
    no_country_selected_error:
      "Seadistage ja hallake seda valikut oma poe jaoks.",
    tips: "<b></b><b></b><b></b> Hallake üksust Toode Asukoht Piirangud ja kohandage oma poe seotud seadeid.",
    need_save_message:
      "Hallake üksust üksus Salvesta Sõnum ja kohandage oma poe seotud seadeid.",

    add_dialog: {
      title: "Lisa üksus",
      message:
        "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
    },
    save_profile_dialog: {
      title: "Lisa Asukohad Profiil",
      message:
        "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
      title_input: {
        title: "Profiil Pealkiri",
        placeholder: "üksus Kategooria Nimi, or Pood Nimi,...",
      },
    },
    load_profile_dialog: {
      title: "Laadi Asukohad Profiil",
      message:
        "Hallake üksust Laadi Profiil dialoog ja kohandage oma poe seotud seadeid.",

      select_input: {
        title: "Asukoht Profiil",
        placeholder: "üksus a Profiil...",
      },
    },
  },

  /** {@see NotificationTopBar} **/
  notification_top_bar: {
    free_charge: "🎊 Võtke tasu {amount} ja saate {amount_total} krediiti.",
    charge_action: "Tasuta krediidi taotlemine",
    claim_title: "Taotlege oma tasuta krediiti",
    claim_charge_caution:
      "Märkus. Rahakoti kontode vahel ei ole valuutat võimalik konverteerida. Seetõttu valige konto, mis sobib teie poes vahetatava valuuta jaoks.",
    account_input: "Hoiukonto",
    account_msg: "Sellele kontole rakendatakse tasu",
  },

  /** {@see BDashboardShopApplications} **/
  selldone_applications: {
    title: "Ärge jääge oma tellimustest ilma!",
    msg: "Hallake oma ettevõtet igal pool ja igal ajal.",
    scan_qr_code: "üksus qr Kood",

    notification: {
      title: "Teavitus",
      subtitle: "üksus Uus Tellimus Teavitus.",
    },
    order: {
      title: "Tellimused",
      subtitle: "Tellimus",
    },
    product: {
      title: "Tooted",
      subtitle: "Toode",
    },
  },

  /** {@see BPageShopSettingSeo**/
  shop_seo: {
    title: "SEO konfiguratsioon",
    msg: "Liikuge kiiresti edasi veebiturundusele, võimaldades orgaaniliste klientide hankimise kanaleid.",
    auto: {
      title: "Auto SEO mootor",
      msg: "Pakkuge oma veebisaidi vaatajaskonnale ja otsingumootoritele sujuvat mobiilikogemust.",
    },

    amp: {
      title: "AMP",
      msg: "Kiirendatud mobiililehtede automaatne genereerimine.",
    },
  },

  /** {@see BPageShopSettingEmail} **/
  shop_preferences: {
    order: {
      title: "Tellimused",
      desc: "Kui klient on tellimuse tasunud, saadetakse sellele aadressile e-kiri, mis sisaldab tellimuse andmeid.",
    },
    return: {
      title: "Tagasi",
      desc: "Kui ostja tagastab toote, saadetakse see e-kiri. Selle meili saatmine sõltub teie ostetud plaanist.",
    },
    pos: {
      title: "POS",
      desc: "POS müügiaruanne saadetakse sellele meilile.",
    },
    avocado: {
      title: "Avokaado",
      desc: "Saada igapäevane aruanne avokaado tellimuste kohta.",
    },
    accounting: {
      title: "Raamatupidamine",
      desc: "Salvestage finantsaruandeid ja värskendusi.",
    },
    subscription: {
      title: "Tellimused",
      desc: "Hiljuti ostetud paketi olek koostatakse tellimuse alguse ja lõpu märguannetega.",
    },
    technical: {
      title: "Tehniline",
      desc: "Tehnilised teatised domeeni ja teenuse oleku kohta.",
    },
    report: {
      title: "Aruanded",
      desc: "Sellele meilile saadetakse nädala- ja kuuaruanded",
    },
    review: {
      title: "Ülevaade",
      desc: "Kui teil on vaja mõnda protsessi poes kinnitada, saadetakse vastav e-kiri sellele aadressile. Näiteks poe kasutajatele turundusmeili saatmise kinnitamiseks.",
    },
    bulk: {
      title: "üksus Tellimus Aruanne",
      desc: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
  },

  /** {@see BPageShopSettingLanguages} **/
  shop_languages: {
    title: "Poe keeled",
    sub_title: "Installige ja aktiveerige poe automaattõlkepaketid.",
    message:
      "Saate oma poodi installida kuni 10 keelepaketti. Kui teil on vaja installida rohkem pakette, võtke meiega ühendust.",
  },

  /** {@see SInviteFriends} **/
  invite_friends: {
    title: "Rääkige oma ettevõttest maailmale!",
    msg: "Tutvustage oma sõpradele Selldone'i. Registreerumisel saavad nad ettevõtte vautšeri 99 dollarit ja pärast esimese tehingu sooritamist saate 15 dollari suuruse stardivautšeri.",
    invite: {
      title: "Liituge Selldone'i ärisüsteemiga, et saada tasuta 99-dollarine vautšer.",
      description:
        "Kutsun teid Selldone'i, et alustada oma äri veebis suurepärase tööriistaga.",
      hashtags: "pood, veebisaitide koostaja",
      quot: "Ehitasin Selldone'i poolt veebipoe, nüüd saate ka oma äri ajada.",
    },
  },

  /** {@see BPageShuttleShops} **/
  shops_list: {
    title: "Minu poed",
    message:
      "Minu enda poodide, lubatud ja näidispoodide nimekiri.",

    sample: {
      title: "Näidis Poed",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },

    add_new_store: "Lisa Uus Pood",
    i_have_a_deal: "üksus",
    access: {
      title: "Juurdepääs Kutse",
    },
  },

  /** {@see BTransportationServiceLabels} **/
  shipping: {
    warehouse_error:
      "Seadke esmalt oma ladu! Seda aadressi kasutatakse saatmise lähtekohana.",
    errors: {
      set_origin: "Määrake oma asukohakaart.",
      set_country: "Määrake oma riik.",
      set_address: "Määrake oma aadress.",
      set_zip: "Määrake oma sihtnumber.",
    },
    set_warehouse: "Määra ladu",
    pickup_location: "Ülevõtmise koht",
    refresh_rates: "Värskendussagedus",
    no_rate: "Hinda pole...",
    view_messages: "Vaata sõnumeid...",
    not_set_yet: "Pole veel määratud!",
    drop_orders_here: "Anna tellimused siia...",
  },

  /** {@see BPageShopBlogsCategories} **/
  blog_category: {
    title: "Blogi kategooriad",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",

    add_action: "Lisa uus kategooria",
    add_dialog: {
      title: "Uus / Värskenda kategooriat",
      force_edit: "Sunni muutmise tee",
      force_edit_msg: "Muutke kategooria nime ja värskendage kõiki artikleid.",
      star_msg: "Täheldatud kategooriatel on ajaveebis kuvamiseks eelisõigus.",
      star: "Vaatas",
      delete_action: "Kustuta kategooria",
      add_action: "Lisa kategooria",
      edit_action: "Muuda kategooriat",
    },
  },
  /** {@see BPageShopBlogsTimeline} **/
  blog_timeline: {
    title: "Pealkiri",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
  },

  /** {@see BPageShopPagesAboutUs} **/
  about_us: {
    title: "Meie leht",
    subtitle:
      "Kirjutage oma ettevõtte kohta artikkel, mida kuvada lehel Meist. See leht aitab teie vaatajaskonnal teie brändi ja missiooni tundma õppida.",
  },
  /** {@see BPageShopPagesTerms} **/
  terms: {
    title: "Kasutustingimuste leht",
    subtitle:
      "Selgitage oma klientidele oma teenuste ostmise ja kasutamise tingimusi.",
  },
  /** {@see BPageShopPagesPrivacy} **/
  privacy: {
    title: "Privaatsuspoliitika leht",
    subtitle:
      "Privaatsuspoliitika on avaldus või juriidiline dokument, mis avalikustab mõned või kõik viisid, kuidas osapool kliendi või kliendi andmeid kogub, kasutab, avalikustab ja haldab.",
  },
  /** {@see BPageShopPagesContactUs} **/
  contact_us: {
    title: "Võtke meiega ühendust lehel",
    subtitle:
      "Kirjutage oma kontaktteave, aadress ja telefoninumber, mida näidatakse teie klientidele kontakti lehel.",
  },

  /** {@see BPageShopApplicationsMetaverse} **/
  metaverse: {
    title: "Metaverse sild",
    subtitle:
      "Selldone pakub kaubandusruumis %100 API-põhist teenust. Mängude, plokiahela ja metaversumi arendajad saavad kasutada neid võimsaid API-sid, et ühendada ettevõtted, kliendid ja teenused tulevikus töö-, elu- ja kaubandusmaailmas.",
    message: "Varajane juurdepääs mänguarendajatele",
  },

  /** {@see BProcessCenterBulkExport} **/
  orders_bulk_export: {
    title: "Tellimuste assistent",
    subtitle:
      "Hallake üksust Tellimus üksus Ekspordi ja kohandage oma poe seotud seadeid.",

    timespan: {
      title: "Ajavahemik",
      subtitle: "Valige tellimuste esitamise algus- ja lõppkuupäev.",
    },
    tasks: {
      title: "Ülesanded Väljund",
      subtitle:
        "Laadige alla ülesannete loend tellimuste hulgi töötlemiseks. Tulemus sisaldab ainult tasulisi ja järelmaksuga tellimusi.",
      export_title: "Ülesannete loetelu",
    },
    labels: {
      title: "Pakendid Sildid",
      subtitle:
        "Laadige alla kõigi valitud ajaperioodi ja oleku tellimuste siltide loend. Tulemus sisaldab ainult tasulisi ja järelmaksuga tellimusi.",
      export_title: "Karbi etiketid",
    },
  },

  /** {@see BPageShopMarketingFunnel} **/
  customers_funnel: {
    title: "Klientide demograafia",
    subtitle:
      "Filtreerige ja eksportige oma klientide andmeid, et teha paremaid otsuseid, et pakkuda vähema turundusega rohkem väärtust! Palun austage oma klientide privaatsust ja ärge kunagi saatke neile massmeile! Ärge kunagi jagage oma klientide teavet kolmandate osapoolte teenustega, ilma et oleksite neilt luba saanud.",
  },

  /** {@see BPageAffiliatorDashboard} **/
  affiliate_pos: {
    title: "Sidusettevõtte POS",
    open_pos_action: "Kiire tellimine POS",
    description:
      "See valik sobib Instagrami lehtede ja muude sotsiaalvõrgustike administraatoritele. Kasutage Siduspartner POS-i klientide tellimuste käsitsi vastuvõtmiseks ja lisamiseks. Teie sidusettevõtted (või frantsiis) saavad sidusettevõtte POS-is uusi tellimusi lisada ja deposiidikviitungi üles laadida.",
  },

  /** {@see BPageShopSettingFlow} **/
  shop_configuration: {
    /** {@see BShopOptionsLoginMethods} **/
    login: {
      title: "Sisselogimismeetodid",
      subtitle: "Kohandage viisi, kuidas kasutajad teie poodi sisse logivad.",

      tips: "<b>Tähtis.</b> Kui kasutaja registreerub teie poes, luuakse vastav Selldone kasutaja, kui seda veel pole. Sellel kasutajal on juurdepääs oma aadressiraamatule kõigis poodides ja ta saab vaadata oma tellimuste ajalugu isegi siis, kui pood on suletud. Me ei kasuta seda teavet turunduseesmärkidel, vaid nõuame seda mõlemapoolsete pettuste vältimiseks. Läbipaistvuse säilitamiseks saadame kasutajale meili, milles teavitame teda registreerumisest.",
    },

    /** {@see BShopOptionsCheckout} **/
    checkout: {
      title: "Kassavoog",
      subtitle:
        "Kohandage oma klienditeekonda ja ostuvoogu oma e-kaubanduses.",
      map: {
        title: "Kaart",
        subtitle:
          "Kasutajad peavad valima tarnekoha kaardil (nagu Uber).",
        subtitle_no_map:
          "Kaugus tarnearvestuses loetakse nulliks, kui asukohta ei ole kliendi antud aadressil.",
      },
      mode: {
        title: "Klientide sisselogimispunkt",
        default: {
          title: "ASAP (vaikimisi)",
          msg: "Kasutajad logivad sisse esimesel võimalusel. (Rohkem konversioone)",
        },
        on_checkout: {
          title: "Kassas",
          msg: "Sundige kasutajaid kassast sisse logima.",
        },
        login_free: {
          title: "Valikuline sisselogimine",
          msg: "Valikuline sisselogimine pärast tellimuse tasumist..",
        },
      },

      express: {
        title: "Suuna ümber pärast ostukorvi lisamist",

        false: {
          title: "Tavaline mood",
          msg: "Jääge lehele ja jätkake ostlemist pärast nuppu Lisa ostukorvi.",
        },
        true: {
          title: "Ekspressrežiim",
          msg: "Pärast nuppu Lisa ostukorvi suunake klient kassalehele.",
        },
      },

      shipping_address: {
        title: "Küsi tarneaadressi",
      },
    },

    /** {@see BShopOptionsCheckoutForm} **/
    checkout_form: {
      title: "üksus Vorm",
      subtitle:
        "Hallake üksust üksus Vorm ja kohandage oma poe seotud seadeid.",
    },
  },
  /** {@see CheckoutOptions} **/
  checkout_options: {
    default: {
      title: "Füüsiline ja teenindus (vaikimisi)",
      desc: "Paluge kliendil füüsilisse ja teeninduskassasse aadress sisestada.",
    },
    physical: {
      title: "Ainult füüsiline",
      desc: "Paluge kliendil sisestada aadress just füüsilises kassas.",
    },
    off: {
      title: "Mitte kunagi",
      desc: "Ärge kunagi küsige tarneaadressi. ⚠ Kasutage seda valikut, kui plaanite kasutada teenuseid variantidega, valides teenuse tüübi asemel toodete jaoks füüsilise tüübi.",
    },
  },

  /** {@see BPageShopSettingBusinessModel} **/
  business_model: {
    title: "Ärimudeli seadistamine",
    subtitle:
      "Määrake oma ärimudel ja me konfigureerime teie operatsioonisüsteemi kulisside taga.",
  },
  business_type: {
    title: "Kauba tüübid",
    subtitle:
      "Määrake, millist tüüpi tooteid soovite oma poes müüa. Selldone'i tootetüübid on midagi enamat kui lihtsalt toote tüüp; see puudutab rohkem täitmisprotseduuri.",

    send_activation_request_to_support:
      "Saatke aktiveerimistaotlus tugipiletis.",
    require_kyc: "Ettevõtte omanik KYC.",
    needs_enterprise_license: "Teil peab olema ettevõtte litsents.",
    marketplace_caution_message:
      "Seadke Turuplats oma mudeliks, mis mõjutab teie ettevõtte operatsioonisüsteemi konfiguratsiooni sügavalt. Näiteks peate iga toote jaoks määratlema vähemalt ühe sõltumatu hinnakujunduse ja laoseisuga hankija. Kliendid ei saa osta tooteid, millel pole müüjat.",
  },

  /** {@see BusinessModelView} **/
  business_model_view: {
    normal: {
      title: "Tavaline pood",
      desc: "Tavaliselt VKE, koduettevõte või dropshipper – kes müüb oma toodet otse klientidele või müüb edasimüüjana hulgimüüjate tooteid.",
    },

    dropshipping: {
      title: "üksus",
      desc: "Ärge hoidke tooteid ega laoseisu – maksate kolmandale osapoolele, tavaliselt hulgimüüjale (nagu Printify, Wholesale2B jne) või tootjale, ja nemad täidavad tellimusi kulisside taga.",
    },

    wholesaler: {
      title: "Dropshipping tarnija",
      desc: "Tavaliselt hulgimüüja või tootja – kes saadab tellimused otse lõpptarbijale. Teised Selldone'i kaupmehed saavad teie tooteid oma kauplustesse saata.",
    },
    marketplace: {
      title: "Turg",
      desc: "Veebiturud ühendavad ostjaid ja müüjaid patenteeritud ja tsentraliseeritud platvormil.",
    },

    franchise: {
      title: "Frantsiis / sidusettevõte",
      desc: "Frantsiis on toodete või teenuste levitamise meetod, mis hõlmab frantsiisiandjat, kes loob teie kaubamärgi (frantsiis) või müüb teie tooteid oma kaubamärgi järgi (sidusettevõte).",
    },
  },

  /** {@see BPageMarketplace} **/
  marketplace: {
    vendor_wallets: "Rahakotid",
    pricing_models: "Hinnakujundus",
    add_vendor: "Lisa tarnija",
    requests: "Taotlused",
  },

  price_input_type: {
    title: "Hinna sisestamise tüüp",
    default: {
      title: "Vaikimisi",
      desc: "Valige ostukorvis koguseks väärtus.",
    },
    area: {
      title: "Piirkond",
      desc: "Koguse arvutamiseks sisestage sisenditena laius ja pikkus.",
    },
    volume: {
      title: "maht",
      desc: "Koguse arvutamiseks sisestage sisenditena laius, pikkus ja kõrgus.",
    },
    custom: {
      title: "Kohandatud (sisestusvormi järgi)",
      desc: "Pole vaja sadu variante! Looge kohandatud kuluarvestuse vorm väga kohandatavate toodete jaoks.",
    },
  },

  /** {@see BPageShuttleVendors} **/
  vendors_list: {
    title: "Minu müüjad",
    message:
      "See on teie hankija kontode loend. Siin kuvatakse kõik Selldone'i platvormi kasutavate kauplustega seotud hankijakontod, mis võimaldab teil neid hõlpsalt hallata.",
  },

  vendor_page: {},

  /** {@see BDomainsList} **/
  domains: {
    message:
      "Ühendage oma ettevõtte operatsioonisüsteemiga mitu domeeni ja hallake neid kõiki ühes kohas. Saate kasutada mitme domeeni funktsiooni, et luua oma veebisaidi igale osale (nt ajaveebi ja kogukonna) jaoks spetsiaalseid domeene või kasutada sidusettevõtete jaoks erinevaid domeene.",
  },

  /** {@see BNoteButton}   {@see BNoteDialog} **/
  notes: {
    add_action: "Lisage oma meeskonnale märkus",
    notifications: {
      success_add: "Märkus on edukalt lisatud.",
      success_delete: "Märkus on edukalt kustutatud.",
    },
  },

  /** {@see BDashboardShopExternalServices} **/
  external_services: {
    title: "Välisteenused",
    subtitle:
      "Jälgige siin välisteenuste (nt SMS-id ja meilid) viimast olekut.",
  },

  /** {@see BPageShopSettingQuota**/
  shop_quota: {
    title: "Kasutuskvoot",
    sub_title:
      "See on teie poe kasutuskvootide loend. Saate neid limiite suurendada, kui uuendate oma poe litsentsi. Kui ületate piirmäärasid, saate meilt taotleda täiendavaid päevarahasid. Kogu kasutus lähtestatakse iga päev.",
  },

  /** {@see WidgetAppCard} **/
  app_card: {
    category: "Kategooria",
    installs: "Installige",
    actives: "Aktiivne",
    uninstalls: "Desinstallimised",
    app_code: "Rakenduse kood",
    app_mode: "Rakendusrežiim",
  },

  product_status: {
    open: {
      name: "Aktiivne",
      title: "Aktiivne ╏ Interneti- ja võrgumüük",
      description: "See toode on saadaval veebitellimuste jaoks.",
    },
    close: {
      name: "mitteaktiivne",
      title: "Mitteaktiivne ╏ Ainult võrguühenduseta müük",
      description: "See toode ei ole saadaval veebipõhiste tellimuste jaoks.",
    },
    pending: {
      name: "Ootel",
      title: "Ootel",
      description: "Enne avaldamist tuleb turuplats üle vaadata.",
    },
    rejected: {
      name: "Tagasi lükatud",
      title: "Tagasi lükatud",
      description: "Turg lükkas selle toote tagasi.",
    },
    unlisted: {
      name: "üksus",
      title: "üksus",
      description:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
  },

  /**
   * BDashboardShopFeedback
   */
  direct_feedback: {
    title: "Pealkiri",
    message:
      "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
    expand_action: "Laienda Toiming",
    input_label: "sisend silt",
    to: {
      ceo: "Saada tegevjuhile",
      team: "Saada meeskonnale",
    },
    placeholder: {
      ceo: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      team: "Hallake üksust Meeskond ja kohandage oma poe seotud seadeid.",
    },
  },

  /**
   * BInventoryFilter
   */
  inventory_filter: {
    placeholder: "üksus Filter *.*",
  },
  /**
   * BVendorInput
   */
  vendor_input: {
    placeholder: "Filter Müüja...",
  },

  /**
   * BShopProductsImportProcessing
   */
  product_import_processing: {
    title: "üksus Impordi Toode",
    message:
      "Hallake üksust Toode Impordi üksus ja kohandage oma poe seotud seadeid.",
  },

  /**
   * BOrderInput
   */
  order_input: {
    message:
      "Hallake üksust Tellimus sisend ja kohandage oma poe seotud seadeid.",
  },

  /**
   * BPageConnectDashboard
   */
  shop_connect: {
    test: {
      title: "kauplus",
      subtitle: "väline Teenus Aruanne",
      action: "Test üksus",
      last_update: "üksus Uuendatud by",
    },
    service_status: {
      title: "Teenus Olek",
      syncing_message: "Sünkrooni Sõnum",
      action: "Sünkrooni Kõik",
      connect_status: "Connect OS Olek",
      service_status: "Teenus Olek",
      auto_confirm_enable_msg: "üksus",
      auto_confirm_disable_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
      shipping_enable_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    detail: {
      title: "Connect OS üksus",
      auto_confirm_order: "üksus Kinnita Tellimus",
      test_mode: "Test Režiim",
      status: {
        subtitle: "Olek",
      },
      sync: {
        title: "Sünkrooni üksus",
        subtitle:
          "Hallake üksust Sünkrooni ja kohandage oma poe seotud seadeid.",
        no_data: "Ei Sünkrooni Teave!",
      },
    },

    products: {
      title: "Tooted",
      subtitle:
        "<b></b><b></b> Hallake üksust Toode ja kohandage oma poe seotud seadeid. {name}",
      action: "üksus Toode",
      syncing_message: "Sünkrooni Sõnum",
    },

    logs: {
      title: "üksus",
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },

    edit: {
      title: "Lisa Uus Connect OS",

      service: {
        title: "Teenus",
        subtitle:
          "Hallake üksust Teenus ja kohandage oma poe seotud seadeid.",
      },
      test: {
        false_title: "Sünkrooni Kõik",
        false_desc: "üksus Kõik Saadaval Toode, Kategooriad, Klient.",
        true_title: "üksus Pealkiri",
        true_desc:
          "Seadistage ja hallake seda valikut oma poe jaoks.",
      },
      overwrite: {
        false_title: "üksus Pealkiri",
        false_desc: "Seadistage ja hallake seda valikut oma poe jaoks.",
        true_title: "üksus",
        true_desc:
          "Seadistage ja hallake seda valikut oma poe jaoks.",
      },
      migration_tips:
        "<b></b><b></b> Seadistage ja hal" +
        "lake seda valikut oma poe jaoks.",
      add_action: "Ühenda automaatselt",
      order: {
        title: "Tellimus Olek",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      },
      enable: {
        label: "Connect OS Olek",
        true_desc: "üksus",
      },
      confirm: {
        label: "üksus Kinnita Tellimus",
        false_desc: "üksus",
        true_desc:
          "Seadistage ja hallake seda valikut oma poe jaoks.",
        tips: "Hallake üksust Kinnita ja kohandage oma poe seotud seadeid.",
      },

      shipping: {
        label: "Saatmine",
        tips: "Hallake üksust Tarne ja kohandage oma poe seotud seadeid.",
        false_title: "üksus",
        false_desc:
          "Seadistage ja hallake seda valikut oma poe jaoks.",
        true_title: "üksus Tarne",
        true_desc:
          "Seadistage ja hallake seda valikut oma poe jaoks.",
      },

      remove: {
        verify: "Kinnita",
        action: "Eemalda Connect OS",
      },
    },

    /**
     * BPageShopChannelConnect
     */
    list: {
      title: "Connect OS OS",
      subtitle:
        "Hallake üksust Loend ja kohandage oma poe seotud seadeid.",
      action: "Connect OS Uus Teenused",
      empty_message:
        "Hallake üksust Tühi Sõnum ja kohandage oma poe seotud seadeid.",
      auto_confirm: "üksus Kinnita",
      shipping: "Saatmine",
      syncing_now: "Sünkrooni üksus!",
      sync_not_started: "Sünkrooni üksus Algus",
    },
  },

  /**
   * ConnectMode
   */
  connect_mode: {
    Migration: {
      title: "üksus",
      desc: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    Dropshipping: {
      title: "üksus",
      desc: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    Marketplace: {
      title: "Turg",
      desc: "Hallake üksust Turuplats ja kohandage oma poe seotud seadeid.",
    },
    Accounting: {
      title: "Raamatupidamine",
      desc: "Raamatupidamine",
    },
    Other: {
      title: "üksus",
      desc: "üksus Teenused.",
    },
  },

  /**
   * BPageShopPagesLandings
   */
  shop_landings: {
    title: "Sihtlehed",
    add_new_action: "Lisa Uus Leht",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    empty_message: "Tühi Sõnum",
  },

  /**
   * BPageShopPermissionStaff
   */
  shop_staff: {
    list: {
      title: "Töötajad Haldus",
      subtitle:
        "Kasutajad, kellel on juurdepääs selle poe armatuurlauale ja haldusjaotistele.",
    },
    pending: {
      title: "Ootel",
      message: "Näita Ootel Kutsed.",
    },
  },

  /**
   * BPageShopCommunityComments
   */
  community_comments: {
    title: "Kommentaarid",
    subtitle: "Hallake üksust üksus Kommentaarid ja kohandage oma poe seotud seadeid.",
    empty_msg: "Tühi üksus",
  },

  /**
   * BPageShopCommunityCategories
   */
  community_categories: {
    title: "Kategooriad",
    subtitle: "Hallake üksust üksus Kategooriad ja kohandage oma poe seotud seadeid.",
    new_category_action: "Uus kategooria",
    empty_msg: "Tühi üksus",
    filter: {
      delete: {
        title: "Kustutatud",
        description: "Näita Kustutatud Kategooriad.",
      },
    },
  },
  /**
   * BPageShopCommunityPosts
   */
  community_posts: {
    title: "üksus",
    subtitle: "üksus",
    filter: {
      deleted: {
        title: "Kustutatud",
        description: "Näita Kustutatud üksus.",
      },
      reported: {
        title: "Aruanne",
        description: "Näita Aruanne üksus.",
      },
    },
    empty_msg: "Tühi üksus",
    menu: {
      open_post: {
        title: "Ava üksus",
        subtitle: "Ava üksus",
      },
      spam: {
        title: "Aruanne & Eemalda üksus",
        subtitle: "üksus",
      },
      delete: {
        title: "Kustuta üksus",
        subtitle: "Kustuta",
      },
    },
  },

  /**
   * {@see BGoogleTagManager}
   */
  channel_google: {
    gtag: {
      title: "Silt üksus",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      tag_id: {
        label: "Google Silt üksus ID",
      },
    },
    shopping: {
      title: "Google üksus",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      tips: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      link_message: "Google Toode üksus URL",
    },
    console: {
      title: "Otsi üksus",
      subtitle: `Hallake üksust üksus ja kohandage oma poe seotud seadeid.`,
      code: {
        label: "Kinnitus meta Silt",
        placeholder: "Kood",
      },
    },
    serp: {
      title: "Google SERP & üksus",
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    serp_content: {
      title: "Ühenda Google Search Console'iga",
      subtitle:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
      tips: {
        title:
          "Enne Selldone'i linkimist Google'i otsingukonsooliga veenduge järgmiselt.",
        add_in_selldone: "Lisage ja kinnitage kohandatud domeen ning määrake see esmaseks.",
        add_in_google: `Lisa ja kinnita <b>{domain}</b> oma <a href="https://search.google.com/search-console" target="_blank"><b>Google Search Console</b></a> kontol.`,
      },
      action_custom_domain: "Kohandatud Domeen",
      action_connect_now: "Ühenda kohe",
      action_remove_connection: "Eemalda üksus",
    },
  },

  /**
   * {@see BPageShopIncentivesCoupon}
   */
  cashback: {
    add_new: "Lisa Uus raha tagasi",
    title: "raha tagasi üksus",
    boosted: "üksus (2x)",
    min_purchase: "Minimaalne ost",
    only_first_order: "üksus",
    total_cashback: "üksus raha tagasi",
    delete_alert: {
      title: "Kustuta raha tagasi üksus",
      message: "Hallake üksust Kustuta üksus ja kohandage oma poe seotud seadeid.",
      action: "Jah, kustuta kohe",
    },
    notifications: {
      delete_success: "Kustuta Õnnestus",
    },
  },
  /**
   * {@see BPageCashback}
   */
  shop_cashback: {
    title: "raha tagasi üksus",
    up_to: "kuni",
    menu: {
      back: "Tagasi üksus",
      dashboard: "Armatuurlaud",
      orders: "Tellimused",
      edit: "Muuda",
    },
    /**
     * {@see BPageCashbackDashboard}
     */
    dashboard: {
      chart_amount_buy: {
        label: "Osta",
        y: "Ostusumma {currency}",
      },
      chart_amount_cashback: {
        label: "Raha tagasi",
        y: "raha tagasi Summa {currency}",
      },
      chart_used: {
        label: "Kasutatud",
        y: "Ajad",
      },
    },
    /**
     * {@see BPageCashbackOrders}
     */
    orders: {
      title: "raha tagasi Tellimus",
      table: {
        amount_cashback: "raha tagasi Summa",
        payment_status: "Makse staatus",
        date: "Kuupäev",
      },
    },
  },

  /**
   * {@see BCashbackAdd}
   */
  cashback_edit: {
    config: {
      subtitle: "Hallake üksust Konfiguratsioon ja kohandage oma poe seotud seadeid.",
    },
    percent_input: {
      title: "raha tagasi üksus",
      message: "Hallake üksust üksus sisend ja kohandage oma poe seotud seadeid.",
    },
    currency_input: {
      message: "Hallake üksust Valuuta sisend ja kohandage oma poe seotud seadeid.",
    },
    limit_input: {
      title: "Piirang",
      hint: "Piirang sisend",
      zero_message: "üksus Sõnum",
    },
    duration: {
      title: "üksus Piirang",
      subtitle: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    start_input: {
      title: "Algus kuupäev",
      placeholder: "üksus Algus Kuupäev...",
    },
    end_input: {
      title: "Lõppkuupäev",
      placeholder: "üksus Lõpp Kuupäev...",
    },
    design: {
      subtitle:
        "Hallake üksust Kujundus ja kohandage oma poe seotud seadeid.",
    },
    title_input: {
      title: "Pealkiri",
    },
    description_input: {
      title: "Kirjeldus",
    },
    constraints: {
      subtitle: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
    min_purchase_input: {
      hint: "Hallake üksust üksus Ost sisend ja kohandage oma poe seotud seadeid.",
      title: "Minimaalne ost",
    },
    only_first_buy_input: {
      false_desc: "Seadistage ja hallake seda valikut oma poe jaoks.",
      true_desc:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
      true_title: "üksus Pealkiri",
      false_title: "Kõik Tellimus",
    },
    qualify_input: {
      false_title: "Kõik Klient",
      true_title: "üksus Klient",
      true_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    club: {
      subtitle:
        "Hallake üksust Klubi ja kohandage oma poe seotud seadeid.",
    },
    cluster: {
      subtitle:
        "Hallake üksust Klaster ja kohandage oma poe seotud seadeid.",
    },
    notifications: {
      add: "Lisa",
      edit: "Muuda",
    },
    enable_input: {
      true_msg: "Seadistage ja hallake seda valikut oma poe jaoks.",
      false_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    boosted_input: {
      false_title: "Tavaline",
      true_title: "üksus (2x raha tagasi)",
      true_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
      false_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
  },

  /**
   * @see BOrderPaymentRowPayment
   */
  row_payment: {
    actions: {
      refund: {
        title: "Tagasimakse Makse",
        subtitle: "Tagasimakse",
      },
      delivery: {
        title: "Kinnita üksus Kohaletoimetamine",
        subtitle: "Hallake üksust Kohaletoimetamine ja kohandage oma poe seotud seadeid.",
      },
    },
  },

  /**
   * @see BOrderPaymentActionsRefundDialog
   */
  payment_refund_dialog: {
    title: "Tagasimakse Makse",
    message:
      "Hallake üksust Makse Tagasimakse dialoog ja kohandage oma poe seotud seadeid.",
    payment_amount: "Makse summa",
    total_refund_amount: "üksus Tagasimakse Summa",
    can_refund: "üksus Tagasimakse",
    refund_amount: "Tagasimakse Summa",
    verify: {
      title: "Kinnita Tagasimakse",
      description:
        "Hallake üksust Kinnita ja kohandage oma poe seotud seadeid.",
    },
    action: "Tagasimakse üksus",
  },

  /**
   * @see BOrderPaymentActionsDeliveryDialog
   */
  payment_delivery_dialog: {
    title: "Klient Kohaletoimetamine üksus",
    message:
      "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
    verify: {
      title: "Kinnita Kohaletoimetamine",
      description:
        "Hallake üksust Kinnita ja kohandage oma poe seotud seadeid.",
    },
    action: "Kinnita üksus",
  },

  /**
   * @see BPageProductCrossSelling
   */
  product_cross_selling: {
    title: "Ristmüük",
    add_new_actions: "Lisa uus toode",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    dialog: {
      edit_title: "Muuda üksus Müük Toode",
      add_title: "Lisa Uus üksus Müük Toode",
      target: {
        title: "üksus Toode",
        subtitle:
          "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
        select_products: "üksus Toode(s)",
      },
      list: {
        title: "üksus Toode",
        subtitle: "Hallake üksust Loend ja kohandage oma poe seotud seadeid.",
        manage_product: "Halda Toode",
      },
      discount: {
        title: "Allahindlus & Sõnum",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
        amount_input: {
          message:
            "Hallake üksust Summa sisend ja kohandage oma poe seotud seadeid.",
        },
        mismatch_type_warning:
          "Hallake üksust üksus Tüüp Hoiatus ja kohandage oma poe seotud seadeid.",
        not_support_subscription_type_warning:
          "Hallake üksust üksus Tugi Tellimus Tüüp Hoiatus ja kohandage oma poe seotud seadeid.",
        message_input: {
          message:
            "Hallake üksust Sõnum sisend ja kohandage oma poe seotud seadeid.",
          placeholder:
            "Hallake üksust Sõnum sisend ja kohandage oma poe seotud seadeid.",
        },
      },
      action: {
        title: "Toiming",
        subtitle:
          'Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.',
      },
    },
  },
  /**
   * @see BProductVariantsBulkAdd
   */
  product_variants_bulk_add: {
    title: "Lisa variante hulgi",
    variants: {
      title: "Variant Valikud",
      subtitle:
        "Hallake üksust Variandid ja kohandage oma poe seotud seadeid.",
    },
    values: {
      title: "Variandi väärtused",
      subtitle: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      prevent_duplicates_tips:
        "<b></b> Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    inventory: {
      title: "üksus Laoseis",
      subtitle: "Hallake üksust Laoseis ja kohandage oma poe seotud seadeid.",
    },
    add_variants_action: "Loo Variandid",
  },

  /**
   * @see CrossSellActionType
   */
  CrossSellActionType: {
    AddToCart: {
      title: "Lisa ostukorvi",
      description:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    ViewProduct: {
      title: "Vaata toodet",
      description:
        "Hallake üksust Vaade Toode ja kohandage oma poe seotud seadeid.",
    },
  },

  /**
   * @see BProductFlow
   */

  product_flow: {
    title: "Ost üksus",
    subtitle: "Hallake üksust Toode üksus ja kohandage oma poe seotud seadeid.",

    /**
     * @see BProductFlowRowConnect
     */
    connect: {
      subtitle: "<b></b> Hallake üksust Connect OS ja kohandage oma poe seotud seadeid. {name}",
      enable_msg: "Seadistage ja hallake seda valikut oma poe jaoks.",
      disable_msg: "Seadistage ja hallake seda valikut oma poe jaoks.",
      has_shipping_msg:
        "{name} toetab tarnet. Seega saate kassalehel lubada automaatse tarnekulu arvutamise teenuse {name} kaudu.",
    },
    /**
     * @see BProductFlowRowHealth
     */
    health: {
      title: "Toode üksus",
      available_in_stock_msg: "Toode on laos saadaval.",
      out_of_stock_msg: "Toode is üksus of Laoseis.",
      file_count_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks. {files_count} {files_size}",
      no_file_uploaded_msg: "Ei Fail Laadi üles üksus",
      no_image_uploaded_msg:
        "Hallake üksust Ei Pilt Laadi üles üksus ja kohandage oma poe seotud seadeid.",
    },
    /**
     * @see BProductFlowErrorsVendor
     */
    vendor_errors: {
      title: "üksus Müüjad",
      subtitle:
        "Hallake üksust Müüja Viga ja kohandage oma poe seotud seadeid.",
      manage_vendors: "Halda Müüjad",
    },

    /**
     * @see BProductFlowErrorsFile
     */
    file_errors: {
      title: "üksus Failid",
      subtitle:
        "Hallake üksust Fail Viga ja kohandage oma poe seotud seadeid.",
      manage_files: "Halda Failid",
    },

    /**
     * @see BProductFlowRowPricing
     */
    pricing: {
      title: "Hinnakujundus",
      no_product_price_msg: "Ei Toode Hind üksus",
      listing_pricing_msg: "Kirje üksus",
      has_valuation_msg: "Toode koos Hindamine.",
      subscription_pricing_msg:
        "Hallake üksust Tellimus Hinnastamine üksus ja kohandage oma poe seotud seadeid. {count}",
      has_no_subscription_pricing_msg:
        "Hallake üksust koos Ei Tellimus Hinnastamine üksus ja kohandage oma poe seotud seadeid.",
    },
    /**
     * @see BProductFlowErrorsSubscription
     */
    subscription_errors: {
      title: "Pealkiri",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      pricing_plans: "Hinnastamine üksus",
    },

    /**
     * @see BProductFlowRowLocation
     */
    location: {
      title: "Müük Asukoht Piirang ● {status}",
      status: {
        has_restriction: "Saadaval {count} riigis",
        no_restriction: "Ei Piirang",
      },
      available_countries_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks. {count} {countries}",
      disable_for_all_countries_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
      location_is_not_in_permitted_shop_locations_msg:
        "Seadistage ja hallake seda valikut oma poe jaoks. {country}",
      shop_locations: "Pood Asukohad",
      product_locations: "Toode Asukohad",
    },

    /**
     * @see BProductFlowErrorsLocation
     */
    location_errors: {
      title: "Saadaval Asukohad Viga",
      no_location_error_subtitle:
        "Hallake üksust Ei Asukoht Viga Alapealkiri ja kohandage oma poe seotud seadeid.",
      invalid_location_error_subtitle:
        "Hallake üksust üksus Asukoht Viga Alapealkiri ja kohandage oma poe seotud seadeid.",

      manage_locations: "Halda Asukohad",
    },

    /**
     * @see BProductFlowRowTax
     */
    tax: {
      title: "Tellimus Maks",
      default_shop: "Vaikimisi Pood Maks",
      tax_profiles: "Maks Profiilid",
      description: {
        subscription_tax_msg:
          "Hallake üksust Tellimus Maks üksus ja kohandage oma poe seotud seadeid.",
        dedicated: "üksus",
        is_disabled: "üksus Maks Profiil is Keelatud!",
        tax_is_based_on_location: "Maks is üksus on Asukoht",
        shipping_tax_is_based_on_location: "Tarne Maks is üksus on Asukoht",
        included_in_price: "Hinna sees.",
      },
    },

    /**
     * @see BProductFlowRowVendor
     */
    vendor: {
      vendor_owner_msg: "<b></b> Müüja Omanik üksus {vendor}",
      has_vendors_msg: "koos Müüjad üksus {count}",
      no_vendor_msg:
        "Hallake üksust Ei Müüja üksus ja kohandage oma poe seotud seadeid.",
      add_vendors: "Lisa Müüjad",
    },
  },

  /**
   * @see BPageProductTemplate
   */
  product_template: {
    title: "Toode Leht Mall",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    edit_page: "Muuda Leht",
    list_of_pages: "Loend of Lehed",
  },
  /**
   * @see BPageProductEmbed
   */
  product_embed: {
    subtitle:
      "Saate hõlpsasti manustada toote või toodete loendi oma ajaveebi või muudele veebilehtedele, lihtsalt kopeerides ja kleepides meie pakutavad koodid. Kuigi see funktsioon on alles algusjärgus, töötame aktiivselt selle nimel, et laiendada selle funktsionaalsust kaugemale sellest, mis mujal praegu saadaval on. Kuigi see pakub praegu piiratud võimalusi, plaanime tulevikus kasutusele võtta rohkem malle ja kohandamisvalikuid.",
    card: {
      title: "üksus",
      description:
        "Hallake üksust Kaart ja kohandage oma poe seotud seadeid.",
    },
    iframe: {
      title: "üksus",
      description:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
    },
  },

  /**
   * @see BPermissionStaffAddDialog
   */
  permission_staff_add: {
    title_new: "Uus Töötajad",
    title_edit: "Muuda Töötajad",

    staff: {
      title: "Lisa Töötajad & Juurdepääs",
      subtitle:
        "Hallake üksust Töötajad ja kohandage oma poe seotud seadeid.",
      go_to_roles: "Mine rollide juurde",
    },
    access: {
      customization_tips:
        "<b></b> Seadistage ja hallake seda valikut oma poe jaoks.",
      simplify_tips:
        "<b></b> Seadistage ja hallake seda valikut oma poe jaoks.",
      multi_permission_tips:
        "<b></b> Hallake üksust mitmekeelne Õigus üksus ja kohandage oma poe seotud seadeid.",
      view_data: "Vaade üksus",
      apply_changes: "Rakenda muudatused",
    },

    inputs: {
      email: {
        placeholder: "Meil",
        label: "Kasutaja E-post Aadress",
      },
      level: {
        label: "Juurdepääs üksus",
        placeholder: "üksus",
      },
    },

    actions: {
      add: "Lisa Töötajad",
    },
    notifications: {
      add_success: {
        title: "Juurdepääs üksus",
        message: "Lisa Õnnestus",
      },
      update_success: {
        title: "Juurdepääs Uuendatud",
        message: "Hallake üksust Uuenda Õnnestus ja kohandage oma poe seotud seadeid.",
      },
    },
  },

  /**
   * @see BCategoryEngineEditor
   */
  category_engine_editor: {
    title: "üksus Toode Kirje",
    subtitle:
      "Seadistage ja hallake seda valikut oma poe jaoks.",
    aut_add_sub_categories_tips:
      "Seadistage ja hallake seda valikut oma poe jaoks.",
    inputs: {
      categories: {
        label: "Kategooriad",
        messages: "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
        placeholder: "üksus Kategooriad...",
      },
      tags: {
        label: "Toode Sildid",
        messages: "Sõnum",
        placeholder: "Hallake üksust Sildid ja kohandage oma poe seotud seadeid.",
      },
    },
    actions: {
      save_engine: "Salvesta üksus",
      auto_add_subcategories: "üksus",
    },
  },

  /**
   * @see SProductsSortView
   */
  products_sort_view: {
    search_tips: {
      title: "Otsi üksus",
      normal:
        "<b></b> Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      product:
        '<b></b><b class="text-green"></b><i class="text-yellow"></i> Hallake üksust Toode ja kohandage oma poe seotud seadeid.',
      quotes:
        '<b></b><b class="text-green"></b><i class="text-yellow"></i><b class="text-green"></b> Hallake üksust üksus ja kohandage oma poe seotud seadeid.',
      tax: '<b></b><b class="text-green"></b><i class="text-yellow"></i> Hallake üksust Maks ja kohandage oma poe seotud seadeid.',
      new_products:
        '<b></b><b class="text-green"></b><i class="text-yellow"></i><b class="text-green"></b><i class="text-yellow"></i> Hallake üksust Uus Toode ja kohandage oma poe seotud seadeid.',
    },
  },

  /**
   * @see LAugmentForm
   */
  augment_form: {
    title: "üksus",
    subtitle:
      "Hallake üksust üksus Vorm ja kohandage oma poe seotud seadeid.",
    add_caption: "Lisa Uus Üksus",
    add_sub_caption: "Lisa üksus pealkiri",
    add_dialog: {
      title: "üksus sisend Tüüp",
      html: {
        title: "Tekst & Html",
        subtitle: "Hallake üksust html ja kohandage oma poe seotud seadeid.",
      },
      image: {
        title: "Pilt",
        subtitle: "Pilt",
      },
    },
    help_dialog: {
      title: "Pealkiri",
      how_it_works_tips:
        "Sihtlehtedel saate paindlikult määrata nii teksti kui ka piltide jaoks dünaamilisi kohahoidjaid. Need kohatäitjad mängivad olulist rolli sisu kohandamisel vastavalt kontekstile.   Nende kohatäitjate dünaamiline olemus võimaldab neid täita laiendusväärtustega, mis võivad olenevalt erinevatest teguritest erineda. Näiteks võivad lisaväärtused iga toote või kategooria puhul olla erinevad. Selle funktsiooni tõeline eelis tuleb mängu siis, kui teil on palju erinevate omadustega üksusi. Saate neid dünaamilisi kohahoidjaid tõhusalt kasutada iga üksuse kuvamise isikupärastamiseks ja täiustamiseks, luues seeläbi oma sihtlehtedel ainulaadse ja interaktiivse kogemuse.",
      assign_tips:
        "Hallake üksust määra üksus ja kohandage oma poe seotud seadeid.",
      set_dynamic_image_tips:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
      enter_values_tips:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
      result_tips:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
  },

  /**
   * @see BLogisticProfileEditor
   */
  logistic_profile_editor: {
    languages: {
      title: "mitmekeelne keel",
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      add_caption: "Lisa Uus Artikkel",
      no_more_language: "Ei Rohkem keel!",
    },
    content: {
      title: "üksus",
      subtitle:
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",

      language_input: "üksus Artikkel keel",
      delete_article: "Kustuta Artikkel",
      menu_tooltip: "Menüü üksus",
    },
    translate_to: "Tõlgi keelde",
    notifications: {
      translate: {
        message: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      },
      save_article: {
        message: "Salvesta Artikkel",
      },
      delete_article: {
        message: "Kustuta Artikkel",
      },
    },
    delete_dialog: {
      message: "Hallake üksust Kustuta dialoog ja kohandage oma poe seotud seadeid.",
      action: "Jah, kustuta kohe",
    },
  },

  /**
   * @see LogisticProfilePage_Products
   */
  logistic_profile_products: {
    title: "Tooted",
    subtitle: "Hallake üksust Logistika Profiil Toode ja kohandage oma poe seotud seadeid.",
  },
  /**
   * @see LogisticProfilePage_Setting
   */
  logistic_profile_setting: {
    title: "Üldine Teave",
    inputs: {
      name: {
        message:
          "Hallake üksust Nimi ja kohandage oma poe seotud seadeid.",
      },
      accept_delete: {
        true_description:
          "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        true_title: "üksus Pealkiri",
      },
    },
    actions: {
      remove: "Eemalda Profiil & üksus",
    },
  },

  /**
   * @see BPageShopLogisticProfiles
   */
  shop_logistic_profiles: {
    title: "Logistika Profiilid",
    add_caption: "Lisa Uus Profiil",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    add_dialog: {
      title: "Loo Uus Logistika Profiil",
      config: {
        title: "Üldine Teave",
        subtitle:
          "Hallake üksust Konfiguratsioon ja kohandage oma poe seotud seadeid.",
      },
      article: {
        title: "Artikkel",
        subtitle:
          "Hallake üksust Artikkel ja kohandage oma poe seotud seadeid.",
      },
      inputs: {
        name: {
          message:
            "Hallake üksust Nimi ja kohandage oma poe seotud seadeid.",
          placeholder: "Nimi",
        },
      },
    },
  },

  /**
   * @see BPageShopLogisticIncludes
   */
  shop_logistic_includes: {
    title: "Kaasatud Üksused Haldus",
    add_caption: "Lisa Uus Üksus",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    empty_list_msg: "Loend of Kaasatud Üksused...",
    notifications: {
      delete: {
        message: "Kustuta",
      },
    },
    delete_dialog: {
      title: "Kustuta Kaasatud Üksus",
      message:
        "Hallake üksust Kustuta dialoog ja kohandage oma poe seotud seadeid.",
      action: "Jah, kustuta kohe",
    },
    actions: {
      edit_linked_page: "Muuda Link Leht",
    },
  },

  /**
   * @see BIncludeItemAdd
   */
  include_item_add: {
    dialog_title_edit: "Muuda Kaasatud Üksus",
    dialog_title_add: "Loo Uus Kaasatud Üksus",

    title: "Kaasatud Üksus",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    inputs: {
      title: {
        placeholder: "Pealkiri",
      },
      code: {
        placeholder: "Kood",
        hint: "Hallake üksust Kood ja kohandage oma poe seotud seadeid.",
      },
      description: {
        placeholder: "Kirjeldus",
        hint: "Hallake üksust Kirjeldus ja kohandage oma poe seotud seadeid.",
      },
      image: {
        message: "Pilt",
      },
      path: {
        label: "Leht Tee",
      },
    },
    mode: {
      no_link: {
        title: "Link puudub",
      },
      external_link: {
        title: "Väline link",
        description: "Määra link välisele URL-ile.",
        tips: "Saate üksusele lisada mis tahes URL-i. Kui kasutajad klõpsavad tootelehe üksusel, suunatakse nad sellele lingile.",
      },
      internal_link: {
        title: "Sisemine link",
        description:
          "Loo selle üksuse lisandandmete põhjal dünaamiline leht.",
        tips: "Saate siduda sihtlehe profiiliga ning määrata sellele kohandatud tee ja dünaamilise sisu. Selldone loob üksusele dünaamilise lingi.",
      },
    },
    notifications: {
      add: {
        message: "Hallake üksust Lisa ja kohandage oma poe seotud seadeid.",
      },
      edit: {
        message: "Hallake üksust Muuda ja kohandage oma poe seotud seadeid.",
      },
    },
  },
  /**
   * @see BPageShopLogisticReturns
   */
  shop_logistic_returns: {
    title: "Tagastus Tellimus",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
  },
  /**
   * @see OReferralFees
   */
  referral_fees: {
    title: "Komisjonitasud",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
  },
  /**
   * @see OReferralWallets
   */
  referral_wallets: {
    title: "Rahakotid",
    subtitle:
      "Hallake üksust soovitus Rahakotid ja kohandage oma poe seotud seadeid.",
    no_commission_yet: "Ei Komisjonitasu üksus",
    no_wallet: "Ei Rahakott!",

    withdraw_dialog: {
      title: "üksus Komisjonitasu Tasud",

      need_bank_info_message: "üksus Pank Info Sõnum",

      to_wallet: {
        title: "üksus Rahakott",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      },
      to_bank: {
        title: "üksus Pank",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      },
      inputs: {
        verify_to_wallet: {
          true_description:
            "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        },
        verify_to_bank: {
          true_description:
            "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
        },
      },
      actions: {
        withdraw_to_wallet: "Võta rahakotti välja",
        withdraw_to_bank: "Võta panka välja",
      },
    },
    notifications: {
      request_transfer_to_bank_success:
        "Teie taotlus on edukalt vastu võetud ja me vaatame selle üle.",
    },
  },

  /**
   * @see OPageMonetizeReferral
   */
  monetize_referral: {
    copy_box: {
      message: "<b></b> Hallake üksust üksus kast ja kohandage oma poe seotud seadeid. {code}",
    },
    intro: {
      title: "Pealkiri",
      message:
        "Selldone'i sidusprogramm on lihtne ja arusaadav, loodud selleks, et saaksite vaevata teenida. Jagage oma ainulaadset sidusettevõtte linki, et kutsuda uusi kasutajaid Selldone'i, ja teenite komisjonitasu iga nende tehingu eest – igaveseks. See hõlmab tellimustest saadavat tulu, teenustasusid, poe versiooniuuendusi ja kõiki muid tuluvooge. Alustage osa tulu teenimist ilma aja- või sissetulekupiiranguteta. Liituge meiega ja muutke oma võrgustik püsivaks sissetulekuks!",
      why_join_selldone_affiliate: "üksus",
      reasons: [
        "üksus",
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      ],
    },
  },

  /**
   * @see LMenuLeftAssets
   */
  l_menu_left_assets: {
    no_asset_uploaded: "Ei Vara Laadi üles üksus.",
  },

  /**
   * @see LMenuTopHome
   */
  l_menu_top_home: {
    hot_keys: "üksus",
    click_to_view_all: "Kõigi vaatamiseks klõpsake...",
    clone_tooltip: {
      title: "Pealkiri",
      subtitle:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
      step_1:
        "Hallake üksust üksus 1 ja kohandage oma poe seotud seadeid.",
      step_2: "Hallake üksust üksus 2 ja kohandage oma poe seotud seadeid.",
      step_3:
        "Hallake üksust üksus 3 ja kohandage oma poe seotud seadeid.",
    },
    show_side_menu_tooltip: {
      subtitle:
        "Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    sort_tooltip: {
      subtitle:
        "Hallake üksust Sorteeri üksus ja kohandage oma poe seotud seadeid.",
    },
    edit_mode_tooltip: {
      title: "Muuda / Eelvaade Režiim",
      edit_mode_title: "Muuda Režiim",
      edit_mode_msg: "Muuda Režiim üksus",
      view_mode_title: "Eelvaade Režiim",
      view_mode_msg:
        "Hallake üksust Vaade Režiim üksus ja kohandage oma poe seotud seadeid.",
    },
    repository_tooltip: {
      title: "Pealkiri",
      subtitle:
        "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    },
    live_view: {
      title: "Reaalajas Eelvaade",
      subtitle: "Hallake üksust Reaalajas Vaade ja kohandage oma poe seotud seadeid.",
    },
    hotkeys_dialog: {
      title: "Pealkiri",
      augment_tips:
        "<b></b><b></b><b></b><b></b><b></b><b></b> Seadistage ja hallake seda valikut oma poe jaoks.",
    },
    hotkeys: {
      ctrl_b: "<b></b> Hallake üksust üksus b ja kohandage oma poe seotud seadeid.",
      ctrl_i: "<i></i> Hallake üksust üksus i ja kohandage oma poe seotud seadeid.",
      ctrl_l:
        "<s></s> Hallake üksust üksus l ja kohandage oma poe seotud seadeid.",
      ctrl_u: "<u></u> Hallake üksust üksus u ja kohandage oma poe seotud seadeid.",
      ctrl_1:
        "<small></small> Hallake üksust üksus 1 ja kohandage oma poe seotud seadeid.",
      ctrl_2: "<big></big> Hallake üksust üksus 2 ja kohandage oma poe seotud seadeid.",
      ctrl_r: "Hallake üksust üksus r ja kohandage oma poe seotud seadeid.",
      ctrl_s: "Salvesta üksus Leht",
      tab: "üksus",
      ctrl_e: "üksus e",
    },
  },

  /**
   * @see LPageEditorRepository
   */
  l_page_editor_repository: {
    title: "Pealkiri",
    subtitle: "l Leht üksus hoidla",
    add_dialog: {
      title: "Lisa Kohandatud üksus",
      configuration: {
        title: "Seaded",
        subtitle:
          "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
      },
      image: {
        title: "Pilt",
        subtitle: "Pilt",
      },
      code: {
        title: "Kood",
        subtitle:
          "Hallake üksust Kood ja kohandage oma poe seotud seadeid.",
      },
      inputs: {
        title: {
          label: "Pealkiri",
          message: "Pealkiri",
        },
        tags: {
          label: "Sildid",
          message: "Hallake üksust Sildid ja kohandage oma poe seotud seadeid.",
        },
        section: {
          message: "üksus",
        },
      },
    },
  },

  /**
   * @see BPageMarketplaceVendors
   */
  marketplace_vendors: {
    title: "Müüjad Loend",
    subtitle:
      "Hallake üksust Turuplats Müüjad ja kohandage oma poe seotud seadeid.",
    add_new_vendor_action: "Lisa Uus Müüja",
    status_tooltip: {
      title: "Müüja Olek",
      ACCEPTED: "ACCEPTED",
      REJECTED: "Lükka tagasi",
      PENDING: "Hallake üksust Ootel ja kohandage oma poe seotud seadeid.",
    },
    number_of_products: "üksus of Toode",
    invited: "üksus",
    no_pricing: "Ei Hinnastamine",
    no_pricing_tooltip: {
      title: "Vaikimisi Hinnastamine üksus",
      subtitle: "Hallake üksust Ei Hinnastamine üksus ja kohandage oma poe seotud seadeid.",
    },
    updated_products_tooltip: {
      title: "Pealkiri",
    },
    added_products_tooltip: {
      title: "Pealkiri",
    },
    access_tooltip: {
      title: "üksus Juurdepääs",
      subtitle:
        "Hallake üksust Juurdepääs üksus ja kohandage oma poe seotud seadeid.",
    },
    reject_by_user_tooltip: {
      title: "Lükka tagasi by Kasutaja",
      subtitle:
        "Hallake üksust Lükka tagasi by Kasutaja üksus ja kohandage oma poe seotud seadeid.",
    },
    download_all_vendors: "Laadi alla Kõik Müüjad",
    bulk_import: "üksus Impordi",
  },

  /**
   * @see BShopLicenseNeedUpdateOverlay
   */
  shop_license_need_update_overlay: {
    title: "Pealkiri",
    subtitle:
      "Seadistage ja hallake seda valikut oma poe jaoks.",
  },

  /**
   * {@see BOrderChatBox}
   */
  b_order_chat_box: {
    title: "üksus Toimingud",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    send_update_email_action: "üksus Uuenda E-post",
    add_template_action: "Lisa Sõnum Mall",

    notifications: {
      add_chat_success_message: "Lisa üksus Õnnestus Sõnum",
    },

    send_update_email: {
      title: "Tellimus Uuenda E-post",
      need_set_service_alert: {
        message:
          "Seadistage ja hallake seda valikut oma poe jaoks.",
        action: "Mine seadetesse",
      },
      send_action: "üksus Uuenda E-post",

      notifications: {
        send_success_message: "üksus Õnnestus Sõnum",
      },
    },
    add_template: {
      edit_title: "Muuda Sõnum Mall",
      add_title: "Lisa Sõnum Mall",
      message:
        "Hallake üksust Lisa Mall ja kohandage oma poe seotud seadeid.",

      save_action: "Salvesta Mall",
      add_action: "Lisa Mall",

      notifications: {
        save_success_message: "Salvesta Õnnestus Sõnum",
      },

      inputs: {
        title: {
          label: "Mall Pealkiri",
          placeholder: "Pealkiri",
        },
        body: {
          label: "Mall Sõnum",
          placeholder: "üksus",
          messages:
            "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid. {order_id} {buyer_name}",
        },
      },
    },
  },

  /**
   * {@see BOrderShare}
   */
  b_order_share: {
    title: "Tellimuse link",
    subtitle: "Hallake üksust b Tellimus üksus ja kohandage oma poe seotud seadeid.",
    guest_checkout_message:
      "Seadistage ja hallake seda valikut oma poe jaoks.",
    authentication: "üksus",
    guest: "üksus",
    click_to_create: "Loomiseks klõpsake...",
    valid_for_30_days: "üksus",
    notifications: {
      secure_link_created: "Turvaline link on loodud.",
    },
  },

  /**
   * {@see BPageShopCrmReviews}
   */
  shop_reviews: {
    title: "Arvustused üksus",
    add_source_action: "Lisa Arvustus üksus",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
  },

  /**
   * {@see BPageShopLogisticPropertySets}
   */
  shop_logistic_property_set: {
    add_caption: "Lisa Uus üksus määra",
    title: "üksus määra",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
  },

  /**
   * {@see BProductProfilePropertySet}
   */
  product_property_set: {
    profile: {
      title: "üksus määra - Kohandatud Variandid",
      subtitle:
        "Hallake üksust Profiil ja kohandage oma poe seotud seadeid.",
    },

    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    select_property_set: "üksus",
    add_property_set: "Lisa üksus määra",
  },

  /** {@see BPageShopLogisticInventory} **/
  transportation_boxes: {
    title: "kastid",
    add_action: "Lisa kast",
    subtitle:
      "Hallake üksust Alapealkiri ja kohandage oma poe seotud seadeid.",
    empty: "Tühi",
    edit: "Muuda kast",
    new: "Uus kast",
    default_weight: "Vaikimisi Kaal",
    updated: "kast Uuendatud.",
    created: "Kast on loodud.",
    deleted: "kast Kustutatud.",
  },

  /** {@see BBoxInput} **/
  transportation_boxes_input: {
    select_box: "üksus a Pakk",
    define_package: "üksus a Pakk",
    define_package_hint: "Seadistage ja hallake seda valikut oma poe jaoks.",
  },























  /** {@see BPageShopListing} **/
  listing:{
    name:"Kirje",
    message:"Hallake üksust Kirje ja kohandage oma poe seotud seadeid."
  },

  shop_listing: {
    name: "Kirje",
    message:
      "Hallake üksust Pood Kirje ja kohandage oma poe seotud seadeid.",

    items: {
      title: "Üksused",
      sub_title:
        "Hallake üksust Üksused ja kohandage oma poe seotud seadeid.",

      empty_title: "Tühi Pealkiri",
      empty_subtitle:
        "Hallake üksust Tühi Alapealkiri ja kohandage oma poe seotud seadeid.",

      add_title: "Lisa üksus",
      edit_title: "Muuda Üksus",

      price_to: "Hind kuni",
      price_unit: "Hind ühik",
      is_featured: "üksus",

      meta_json: "Meta JSON",
      links_json: "Lingid JSON",
      opening_hours_json: "Ava Tunnid JSON",

      delete_title: "Kustuta Üksus",
      delete_message: "Kustuta Sõnum",
      delete_success: "Üksuse kustutamine õnnestus.",
      restore_success: "Taasta Õnnestus",

      opening_hours:"Ava Tunnid",
      form_fields:"Vorm üksus",

      company: "Ettevõte",
      badges: "Märgid",

    },

    categories: {
      title: "Kategooriad",
      sub_title:
        "Hallake üksust Kategooriad ja kohandage oma poe seotud seadeid.",

      empty_title: "Ei Kategooriad üksus",
      empty_subtitle:
        "Hallake üksust Tühi Alapealkiri ja kohandage oma poe seotud seadeid.",

      add_title: "Lisa kategooria",
      edit_title: "Muuda kategooriat",

      parent_filter: "Filter by üksus",
      parent: "Vanemkategooria",

      price_format: "Hind üksus",
      icon: "Ikoon",
      design_id: "Kujundus ID",

      delete_title: "Kustuta kategooria",
      delete_message: "Hallake üksust Kustuta Sõnum ja kohandage oma poe seotud seadeid.",
      delete_success: "Kategooria Kustutatud üksus.",
      form_schema: "Kategooria Vorm üksus",
    },

    options: {
      submission_title: "üksus",
      submission_enabled: "üksus Lubatud",

      moderation_title: "Modereerimine",
      moderation_mode: "Modereerimine Režiim",
      require_first_approved_before_more: "üksus",

      limits_title: "Piirid",
      max_pending_per_user: "üksus",
      max_items_per_user: "üksus",
      limits_hint: "Piirangud üksus",

      templates_title: "Mall",
      card_template: "Kaart Mall",
      details_template: "Üksikasjad Mall",

      form_schema_title: "Vorm üksus",
      settings_title: "üksus Seaded"
    },

    supervision: {
      title: "Ülevaatus",
      sub_title:
        "Hallake üksust Ülevaatus ja kohandage oma poe seotud seadeid.",

      empty_title: "Ülevaatamiseks üksusi pole",
      empty_subtitle:
        "Hallake üksust Tühi Alapealkiri ja kohandage oma poe seotud seadeid.",

      review_title: "Arvustus Üksus",
      approve_publish: "Kinnita & Avalda",

      submitted_at: "Esitatud",
      quick_actions: "üksus Toimingud",

      open_review: "Ava Arvustus",
      reset_to_pending: "Lähtesta ootel olekusse",
      items_title: "Üksused",

    },

    moderation: {
      approve_success: "Kinnita Õnnestus",
      publish_success: "Avalda Õnnestus",
      unpublish_success: "Tühista avaldamine Õnnestus",
      archive_success: "Arhiveeri Õnnestus",
      reject_success: "Lükka tagasi Õnnestus",
      penalty_success: "üksus Õnnestus",

      reject_title: "Lükka tagasi Üksus",
      reject_reason: "Lükka tagasi üksus",

      penalty: "üksus",
      penalty_title: "üksus",
      penalty_points: "üksus",
      penalty_note: "üksus Märkus"
    },

    media: {
      upload_images: "Laadi üles Pildid",
      url_type: "Tüüp",
      url: "URL",
      is_main: "Määra peamiseks"
    },






    /** {@see BShopListingDesignsList, BShopListingDesignUpsert} **/
    designs: {
      title: "Kujundus",
      sub_title:
        "Hallake üksust Kujundus ja kohandage oma poe seotud seadeid.",

      empty_title: "Ei Kujundus üksus",
      empty_subtitle:
        "Hallake üksust Tühi Alapealkiri ja kohandage oma poe seotud seadeid.",

      add_title: "Lisa Kujundus",
      edit_title: "Muuda Kujundus",

      card_template: "Kaart Mall",
      details_template: "Üksikasjad Mall",

      notifications: {
        add_success: "Kujundus Loodud üksus.",
        edit_success: "Kujundus Uuendatud üksus.",
        delete_success: "Kujundus Kustutatud üksus.",
      },

      delete_title: "Kustuta Kujundus",
      delete_message:
        "Hallake üksust Kustuta Sõnum ja kohandage oma poe seotud seadeid.",
    },





    badges: {
      title: "Märgid",
      sub_title:
        "Hallake üksust Märgid ja kohandage oma poe seotud seadeid.",

      empty_title: "Ei Märgid üksus",
      empty_subtitle:
        "Hallake üksust Tühi Alapealkiri ja kohandage oma poe seotud seadeid.",

      add_title: "Lisa Märk",
      edit_title: "Muuda Märk",

      notifications: {
        add_success: "Märk Loodud üksus.",
        edit_success: "Märk Uuendatud üksus.",
        delete_success: "Märk Kustutatud üksus.",
      },

      delete_title: "Kustuta Märk",
      delete_message: "Hallake üksust Kustuta Sõnum ja kohandage oma poe seotud seadeid.",
    },

    companies: {
      title: "Ettevõtted",
      sub_title:
        "Hallake üksust Ettevõtted ja kohandage oma poe seotud seadeid.",

      empty_title: "Ei Ettevõtted üksus",
      empty_subtitle:
        "Hallake üksust Tühi Alapealkiri ja kohandage oma poe seotud seadeid.",

      add_title: "Lisa Ettevõte",
      edit_title: "Muuda ettevõtet",

      notifications: {
        add_success: "Ettevõte Loodud üksus.",
        edit_success: "Ettevõte Uuendatud üksus.",
        delete_success: "Ettevõte Kustutatud üksus.",
      },

      delete_title: "Kustuta Ettevõte",
      delete_message:
        "Hallake üksust Kustuta Sõnum ja kohandage oma poe seotud seadeid.",
    },



    messages: {
      title: "Sõnum",
      sub_title: "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
      empty_title: "Ei Sõnum",
      empty_subtitle: "Tühi Alapealkiri",

      sender: "üksus",
      item: "üksus",
      has_reply: "üksus",
      has_reply_yes: "koos üksus",
      has_reply_no: "Ei üksus",

      dialog_title: "Sõnum",
      owner_reply: "Omanik üksus",
      reply: "üksus",
      reply_hint: "Seadistage ja hallake seda valikut oma poe jaoks.",

      mark_read: "üksus",
      mark_unread: "üksus",
      archive: "Arhiveeri",
      unarchive: "üksus",
      mark_spam: "üksus",
      mark_not_spam: "üksus",

      delete_confirm: "Kustuta üksus Sõnum?",
    },

    enable: {
      title: "Kirje",
      subtitle: "Hallake üksust üksus ja kohandage oma poe seotud seadeid.",
      true_description: "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      false_description: "Hallake üksust üksus Kirjeldus ja kohandage oma poe seotud seadeid.",
      open_listing: "Ava Kirje",
      note: "Hallake üksust Märkus ja kohandage oma poe seotud seadeid.",
      vendor_prereq_text:
        "Hallake üksust Müüja üksus Tekst ja kohandage oma poe seotud seadeid.",
      vendor_prereq_button: "määra Turuplats Äri mudel",

      vendor_access_text:
        "Hallake üksust Müüja Juurdepääs Tekst ja kohandage oma poe seotud seadeid.",
      vendor_access_button: "Müüja Juurdepääs üksus",

      more_options_text:
        "Hallake üksust Rohkem Valikud Tekst ja kohandage oma poe seotud seadeid.",
      more_options_button: "Mine kirje seadetesse",

      updated: "Kirje Uuendatud.",
      update_failed: "Kirje värskendamine ebaõnnestus.",
    },


    search: {
      title: "Otsi Seaded",
      subtitle: "Hallake üksust Otsi ja kohandage oma poe seotud seadeid.",

      location_title: "Asukoht Otsi",
      location_subtitle: "Hallake üksust Asukoht Alapealkiri ja kohandage oma poe seotud seadeid.",
      location_enabled_true: "Hallake üksust Asukoht Lubatud üksus ja kohandage oma poe seotud seadeid.",
      location_enabled_false: "Hallake üksust Asukoht Lubatud üksus ja kohandage oma poe seotud seadeid.",

      radius_default: "Vaikimisi üksus (km)",
      radius_default_hint: "Seadistage ja hallake seda valikut oma poe jaoks.",
      radius_max: "Maksimum üksus (km)",
      radius_max_hint: "Seadistage ja hallake seda valikut oma poe jaoks.",
      radius_options: "üksus Valikud (km)",
      radius_options_hint: "Seadistage ja hallake seda valikut oma poe jaoks.",

      filters_title: "Otsi Filter",
      filters_subtitle: "Hallake üksust Filter Alapealkiri ja kohandage oma poe seotud seadeid.",
      no_filters: "Ei Filter Lisa üksus.",
      auto_generate: "üksus Valikud",

      filter_field: "Filter üksus",
      filter_label: "Silt",
      filter_type: "Tüüp",
      filter_options: "Valikud",
      filter_options_hint: "Hallake üksust Filter Valikud üksus ja kohandage oma poe seotud seadeid.",
      multiple: "üksus",
      single: "üksus",
      kv_mode: "kv Režiim",

      requires_listing_active: "Hallake üksust üksus Kirje Aktiivne ja kohandage oma poe seotud seadeid.",


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
        "Müügi eest tasumine täidetud",
        "Müüja komisjonitasu väljamakse.",
        "Tehing edukalt lõpule viidud.",
        "Hiljutiste müükide rahaülekanne.",
        "Edukas üleminek tarnijateenustele.",
      ],
      /**
       * Reverse fund
       */
      reverse_fund_reason: [
        "Raha tagastamine: ülekanne pangast müüja rahakotti.",
        "Müüja rahakoti täitmine: raha tagasivõtmine pangakontolt.",
        "Pöördtehing: rahaülekanne pangalt müüja rahakotile.",
        "Tagastamine: pangahoiuse tagasimaksmine müüja rahakotti.",
        "Raha tagasivõtmine: müüja rahakoti täiendamine pangast.",
      ],
    },

    /**
     * Email Marketing
     */
    shop_email: {
      name: [
        "Nimi",
        "Avaldati eksklusiivsed siseringi pakkumised",
        "Teie VIP-juurdepääs Premium-allahindlustele",
        "Ekstravagantne hooajaline müük",
        "Avage oma ostuparadiis",
        "Grand Shopperi karneval",
        "Nimi",
        "Sügispakkumised, millele ei saa vastu panna",
        "Talveimed: soojad pakkumised külmadeks päevadeks",
        "Suvelõpu kliirensitarve",
        "Black Friday Bonanza: Varajane juurdepääs",
        "Tere pühad: teie kingituste juhend ja palju muud",
        "Värsked leiud: uued just teile",
        "Lojaalsuspreemia: eksklusiivsed allahindlused",
      ],
      subject: [
        "⏰ Piiratud ajaga pakkumine! Hankige oma lemmikud kohe",
        "🌼 Uus hooaeg, uued stiilid – avastage meie uusim kollektsioon",
        "👑 Eksklusiivne VIP-müük just teile",
        "💃 Pöörake tähelepanu meie uutele saabujatele",
        "🔚 Viimane võimalus nautida kõike 20% soodsamalt",
        "🎁 Kingitus teile: $10 krediiti sees!",
        "☀️ Valmistuge suveks meie kuumade pakkumistega",
        "🛍️ Täiendage oma garderoobi – olete selle ära teeninud",
        "👀 Sneak Peek: uued tooted on peagi tulemas!",
        "🎂 Palju õnne sünnipäevaks! Teie eriline kingitus ootab",
        "🖤 Kas olete musta reede pakkumisteks valmis?",
        "🎯 Parimad valikud just teile – isikupärastatud ostukogemus",
        "🍹 Aeg Lõpp hellitada – nädalavahetuse välkmüük!",
        "🧹 Hooaja lõpp - kõik peab minema!",
        "🚀 Olete selle välja teeninud! Tasuta kohaletoimetamine teie järgmisele tellimusele",
        "📢 Ärge jääge ilma – teie sooviloendi tooted on kohe müügil",
        "🏡 Tooge meie kodukaunistuste kollektsiooniga oma koju rõõmu",
        "🎉 Üllatus just Sulle! Avage oma salapärane allahindlus",
      ],
    },

    /**
     * Discount code
     */
    discount_code: {
      code: [
        "TERE TULEMAST 10",
        "SUVI20",
        "VIPSALE30",
        "BDAY15",
        "MUST REEDE",
        "KÜBERESMASPÄEV",
        "TASUTA SAATMINE",
        "VÄLMÜÜK",
        "KLIITSIOON",
        "VARAJANE LIND",
        "ÕPILANE10",
        "TALV25",
        "KEVAD15",
        "KUGI 20",
        "MÜÜDAJA10",
        "PUHKUS30",
        "SÕBER 20",
        "EMADEPÄEV",
        "ISADEPÄEV",
        "AASTA LÕPP",
      ],
      title: [
        "Välkmüük: 20% soodsam!",
        "VIP varajase juurdepääsu allahindlus",
        "Nädalavahetuse pakkumine: säästke kohe!",
        "Nautige täna 15% allahindlust",
        "Suvine allahindlus: 10% lisaallahindlus",
        "Lõpumüük! Salvesta suur",
        "Eripakkumine: tasuta kohaletoimetamine",
        "2-1: ainult täna!",
        "Pühade eripakkumine: 25% allahindlus",
        "Eksklusiivne 30% allahindlus",
        "Üllatus! 20% lisaallahindlus",
        "Hooajalised säästud sees",
        "Kesknädala hullus: 10% soodsam",
        "Lõpeb peagi: kõigest 15% allahindlus",
        "Perekond ja sõbrad: 20% allahindlus",
        "Suured säästud sel nädalavahetusel",
        "Must reede: 40% soodsam",
        "Sneak Peek allahindlus: 30% allahindlus",
      ],
      description: [
        "Taotlege oma eripakkumist! Ainult piiratud aeg.",
        "Kiirusta! Eksklusiivne kokkuhoid ootab teie ostukorvis.",
        "Suur kokkuhoid on vaid ühe kliki kaugusel!",
        "Kasutage seda tehingut enne, kui see on lõppenud.",
        "Erisoodustus ootamas! Ärge jääge ilma.",
        "Suurendage oma ostuvaimu meie pakkumisega!",
        "Teie järgmine tellimus võib olla väiksem, kui arvate!",
        "See on ideaalne aeg soovitud eseme haaramiseks.",
        "Midagi, mis muudab teie päeva helgemaks.",
        "Kas olete valmis salvestama? Oodatud on üllatusallahindlus!",
        "Kuna sa oled eriline, on siin eripakkumine.",
        "Kas teil on midagi silma peal? Siin on tõuge!",
        "Säästmiseks pole aega nagu praegu.",
        "Ära jäta seda tehingut maha! See on liiga hea, et mööda minna.",
        "Hea uudis! Teie ostlemine muutus just odavamaks.",
        "Kiirusta, teie eksklusiivne allahindlus lõpeb peagi!",
        "Siin on väike tänu teile lojaalsuse eest.",
      ],
    },
    /**
     * Coupon
     */
    coupon: {
      title: [
        "Säästud vallandatud",
        "Avage allahindlus",
        "Super kokkuhoid",
        "Eksklusiivne pakkumine",
        "Boonus kokkuhoid",
        "VIP allahindlus",
        "Eripakkumine",
        "Lisasääst",
        "Allahindluse hoiatus",
        "Eelarve õndsus",
        "Pealkiri",
        "Väärtus Bonanza",
        "Hinna alandamine",
        "Head säästmist",
        "Säästke rohkem, ostke rohkem",
        "Välkdiil",
        "Soodne Bounty",
        "Kohene kokkuhoid",
        "Päeva pakkumine",
        "Hooajaline varastamine",
      ],
      description: [
        "Nautige meie poolt magusat pakkumist! Säästke järgmisel ostul.",
        "Väärtustame oma kliente – kasutage seda eksklusiivset pakkumist.",
        "Hankige vähem seda, mida armastate. Meilt allahindlus!",
        "Kas olete valmis salvestama? Eksklusiivne pakkumine ootab!",
        "Sest sa oled eriline! Nautige oma järgmisel tellimusel allahindlust.",
        "Luba endale ostlemine ja säästa!",
        "Olge valmis ostlema kuni kukmiseni – ja säästke!",
        "Tähistage hooaega erisoodustusega.",
        "TäNimi oma püsikliente eksklusiivse allahindlusega.",
        "Järgmisel ostul saate uskumatult säästa.",
        "Heitke pilk oma eksklusiivsetele säästudele.",
        "Tutvuge meie üllatusallahindlusega!",
        "Täiustage oma ostukogemust meie eksklusiivse pakkumisega.",
        "Alustage säästmist meie eripakkumisega.",
        "Hellitage Lõpp väikese millegi lisaga – erisoodustusega.",
        "Teie järgmine ostuseiklus on just soodsam!",
        "Sest ostlemine on allahindlusega lõbusam.",
      ],
    },

    /**
     * Offer
     */
    offer: {
      title: [
        "Pakkige kokku ja säästke palju!",
        "Osta rohkem, säästa rohkem!",
        "Nutikad pakkumised nutikatele ostjatele",
        "Allahindluste hoiatus! Kokkuhoid",
        "Kombineeritud pakkumine – rohkem odavamalt",
        "Eksklusiivne kokkuhoid pakettidelt",
        "Hankige oma raha eest rohkem!",
        "Salvestage, kui komplekteerite",
        "Combode eripakkumised",
        "Suur kokkuhoid poes!",
        "Parima väärtusega komplektid",
        "Piiratud aja komplektipakkumised",
        "Suured allahindlused kombinatsioonidel",
        "Nutikas kokkuhoid valitud üksustelt",
        "Võitmatud pakettide pakkumised",
        "Saadaval mitme ostu allahindlused",
        "Topeltmakse kohe",
        "Hulgiostud = suur kokkuhoid",
      ],

      description: [
        "Valitud toodete komplekteerimisel säästate palju. Kiirusta, piiratud aja pakkumine!",
        "Targad pakkumised ootavad! Säästke rohkem, kui ostate meie esiletõstetud esemeid koos.",
        "Avasta nutikas viis säästmiseks! Pane oma lemmikud kokku ja jälgi hinnalangust.",
        "Naudi eksklusiivseid allahindlusi, kui ostad valitud esemeid kombineeritult. Tegutse nüüd!",
        "Osta rohkem, säästa rohkem! Võitmatud allahindlused meie spetsiaalsetele tootepakettidele.",
        "Ostke nutikalt meie eripakkumistega. Valitud tootekomplektidel soodushinnad.",
        "Hankige vähema eest rohkem! Suurepärased allahindlused, kui ostate meie valitud komplekte.",
        "Pakkides säästke palju! Eksklusiivsed pakkumised valitud toodetele piiratud aja jooksul.",
        "Kombineeri ja säästa! Eksklusiivsed allahindlused, kui ostate meie valitud tooteid koos.",
        "Mida rohkem ostate, seda rohkem säästate! Olge meie spetsiaalsete komplektidega nutikas.",
      ],
    },

    /**
     * Gift card type
     */
    gift_card_type: {
      title: [
        "Ravi ennast!",
        "Ainult sinule!",
        "Head ostlemist!",
        "Nautige meie peal!",
        "Nautige veidi",
        "Sest sa oled eriline",
        "Väike üllatus",
        "Tee oma päev",
        "Siin on teile",
        "Levitage rõõmu",
        "Armastuse kingitus",
        "Ostke Delightiga",
        "Tänumärk",
        "Aeg laiutada",
        "Nautige hetke",
        "Leidke oma lemmikud",
        "Valik on sinu",
        "Väljenda ennast",
        "Avasta maagia",
        "Laske oma stiil valla",
      ],
    },

    /**
     * Refund vendor order
     */
    vendor_refund_order: {
      note: [
        "Vahendid on teie virtuaalsest rahakotist maha võetud ja turuplatsi rahakotti tagastatud.",
        "Tagasimakse on tehtud, mis vähendab teie virtuaalse rahakoti saldot.",
        "Tagasimakse lõpetatud. Marketplace'i rahakotti on teie virtuaalsest rahakotist täiendatud.",
        "Teie virtuaalset rahakotti on hiljuti turuplatsi rahakotti tagasimaksmiseks debiteeritud.",
        "Teie virtuaalse rahakoti vahendeid on hiljutise tagasimakse tõttu korrigeeritud.",
        "Tagasimakse on tehtud, summa arvatakse maha teie virtuaalsest rahakotist.",
        "Teie virtuaalse rahakoti saldo on turuplatsi rahakotti tehtud tagasimakse tõttu vähenenud.",
        "Toimunud on tagasimakse tehing, mis liigub teie virtuaalsest rahakotist tagasi turule.",
      ],
    },

    /**
     * Product
     */
    product: {
      warranty: [
        "24-kuuline kullagarantii",
        "Plaatinakaitse kaheks aastaks",
        "Teemantkindlustus 36 kuud",
        "Silver Shield: üheaastane garantii",
        "2-aastane Elite Assurance",
        "Premium kaitse 24 kuud",
        "Pronksvarundus: üheaastane garantii",
        "3-aastane ülima tööaja garantii",
        "24-kuuline turvalise teenuse lubadus",
        "36-kuuline meelerahu kaitse",
      ],
      pros_name: [
        "Tõhusust suurendatud",
        "Kulusäästlik lahendus",
        "Kvaliteet tagatud",
        "Kasutajasõbralik",
        "Aja säästja",
        "Töökindlus garanteeritud",
        "Mitmekülgne kasutamine",
        "Viimasepeal tehnoloogia",
        "Keskkonnasõbralik",
        "Erakordne jõudlus",
      ],

      pros_value: [
        "Säästab märkimisväärselt aega kiirete ja tõhusate toimingute abil.",
        "Kasutab täiustatud tehnoloogiat, et saavutada võrreldamatu jõudlus.",
        "Vähendab kulusid ja suurendab tootlikkust.",
        "Pakub kasutajasõbralikku liidest lihtsaks navigeerimiseks.",
        "Garanteerib usaldusväärse ja ühtlase jõudluse.",
        "Pakub mitmekülgseid rakendusi erinevate ülesannete jaoks.",
        "Kasutab keskkonnasõbralikke materjale ja protsesse.",
        "Kavandatud tipptasemel tehnoloogiaga parimate tulemuste saavutamiseks.",
        "Kvaliteetne disain tagab pikaajalise vastupidavuse.",
        "Pakub ööpäevaringset kliendituge.",
      ],

      cons_name: [
        "Kallis investeering",
        "Piiratud ühilduvus",
        "Kompleksne seadistus",
        "Nõuab väljaõpet",
        "Alataseme jõudlus",
        "Puudub mitmekülgsus",
        "Piiratud tugi",
        "Sagedane hooldus",
        "Kõrge energiatarbimine",
        "Lühike eluiga",
      ],

      cons_value: [
        "Suurem alginvesteering võrreldes alternatiividega.",
        "Ei pruugi ühilduda kõigi süsteemide või seadmetega.",
        "Seadistamisprotsess võib olla üsna keeruline.",
        "Kasutamiseks võib olla vajalik lisakoolitus.",
        "Jõudlus ei pruugi vastata kõigile ootustele.",
        "Funktsionaalsus on piiratud või puudub mitmekülgsus.",
        "Klienditugi ei pruugi ööpäevaringselt saadaval olla.",
        "Vajalik on sagedane hooldus, mis suurendab kulusid.",
        "Tarbib palju energiat, mis mõjutab kommunaalkulusid.",
        "Toote eluiga ei pruugi olla oodatust pikk.",
      ],
    },

    /**
     * Blog Category
     */
    blog_category: {
      category: [
        "Tehnilised ülevaated",
        "Toiduhuvilise leiud",
        "Reisijutud",
        "Tervise näpunäited",
        "Kategooria",
        "Äri üksus",
        "Elustiili lood",
        "Spordivärskendused",
        "Kunsti esiletõstmised",
        "Lapsevanemate juhised",
      ],
      description: [
        "Avastage erinevatel teemadel sisukaid artikleid.",
        "Tutvuge meie informatiivsete ajaveebipostituste koguga.",
        "Olge kursis meie kaasahaarava ajaveebikategooria sisuga.",
        "Leidke inspiratsiooni meie mõtlemapanevate ajaveebi kategooria artiklite kaudu.",
        "Laiendage oma teadmisi meie erinevate ajaveebikategooriateemade abil.",
        "Olge meie põnevate ajaveebikategooriate ülevaadetega kursis.",
        "Süvenege meie intrigeeriva ajaveebikategooria sisu sügavustesse.",
        "Avastage meie ajaveebikategooria arhiivides väärtuslikku teavet.",
        "Õppige midagi uut meie hoolikalt kureeritud ajaveebikategooriast.",
        "Võtke ühendust meie rikastavate ajaveebikategooria artiklite ja postitustega.",
      ],
    },

    /**
     * Partner Plan
     */
    partner_plan: {
      name: [
        "Stardipakett",
        "Oluline plaan",
        "Professionaalne sviit",
        "Nimi",
        "Täiustatud tase",
        "Premium pakett",
        "Ülim lahendus",
        "Eliittase",
        "Kasvukiirendaja",
        "Plaatina võimsus",
      ],
    },

    /**
     * Tax Profile
     */
    tax_profile: {
      name: [
        "Toiduained",
        "Elektroonilised seadmed",
        "Rõivad ja rõivad",
        "Raamatud ja kirjatarbed",
        "Tervise- ja ilutooted",
        "Mööbel",
        "Spordikaubad",
        "Mänguasjad ja mängud",
        "Ehted ja aksessuaarid",
        "Autoosad",
        "Aed ja õues",
        "Kööginõud",
        "Kodu kaunistus",
        "Muusikariistad",
        "Lemmikloomatarbed",
        "Jalatsid",
        "Kotid ja pagas",
        "Kontoritarbed",
        "Riistvara tööriistad",
        "Toidukaubad",
      ],

      label: [
        "VAT", // Value-Added Tax
        "GST", // Goods and Services Tax
        "PST", // Provincial Sales Tax
        "HST", // Harmonized Sales Tax
        "QST", // Quebec Sales Tax
        "CST", // Central Sales Tax
        "Aktsiis", // Excise Tax
        "Impordimaks", // Import Duty
        "Teenusemaks", // Service Tax
        "Luksusmaks", // Luxury Tax
      ],
    },
    /**
     * Cluster
     */
    cluster: {
      name: [
        "Müügi esiletõstmised",
        "Sooduskoodid",
        "Esiletõstetud kampaaniad",
        "Uustulnukad",
        "Parimad müüjad",
        "Hooajalised eripakkumised",
        "Piiratud pakkumised",
        "Ürituste pakkumised",
        "VIP eksklusiivsed pakkumised",
        "Kliirensi esemed",
        "Pühade komplektid",
        "Teemakogud",
        "Brändi vitriinid",
        "Liikmete lemmikud",
        "Flash allahindlused",
        "Ostke Essentials",
        "Digitaalsed ressursid",
        "Kingiideed",
        "Keskkonnasõbralikud valikud",
        "Töötajate soovitused",
      ],
    },

    /**
     * Popup
     */
    popup: {
      title: [
        "Eripakkumine!",
        "Uustulnukad",
        "Piiratud aeg",
        "Allahindluste hoiatus!",
        "Eksklusiivsed pakkumised",
        "Kuum allahindlus!",
        "Kliirensi hoiatus",
        "Tasuta saatmine",
        "Kingitus sees!",
        "Võida auhindu",
        "Liikme eelised",
        "Välkmüük",
      ],
    },

    /**
     * Campaign
     */
    campaign: {
      name: [
        "Ostke kuni kukumiseni",
        "Käru hullus",
        "Nimi",
        "Klõpsake, ostke, salvestage",
        "Soodne Bonanza",
        "Nimi",
        "Nimi",
        "Nimi",
        "Digitaalsed allahindluspäevad",
        "E-kaubanduse karneval",
        "Nimi",
        "Jaemüügi kiirus",
        "Veebipood Ladu müük",
        "E-ostlejate paradiis",
        "Virtuaalne vautšeri ettevõtmine",
        "Digitaalsed ukselõksud",
        "E-käru tühjendamine",
        "Nimi",
        "Suurepärane kübermüük",
        "E-sooduspakkumine",
      ],
    },

    /**
     * Valuation
     */
    valuation: {
      title: [
        "T-särgi kohandamise hinnakujundus",
        "Käsitsi valmistatud ehete hindamine",
        "Individuaalne kingade hind",
        "Kohandatud kunstiteose hindamine",
        "Kohandatud ülikonna hinnakujundus",
        "Elektrooniliste vidinate kohandamise kulud",
        "Personaalne parfüümi hindamine",
        "Kohandatud koti hinnakujundus",
        "Kohandatud kleidi hindamine",
        "Isikupärastatud raamatukaante hind",
        "Mööbli hindamine eritellimusel",
        "Eritellimusel kellade hind",
        "Isikupärastatud mänguasjade hindamine",
        "Kohandatud mütsi hinnakujundus",
        "Kohandatud nahahooldustoodete hindamine",
        "Eritellimusel kodukujunduse hinnakujundus",
        "Kohandatud kööginõude hindamine",
        "Isikupärastatud kirjatarvete hinnakujundus",
        "Juuste aksessuaaride hindamine eritellimusel",
        "Kohandatud spordivarustuse hinnakujundus",
      ],
      structure: {
        title: [
          "T-särgi trükikujundus",
          "Ehted Metallitüüp",
          "Kinga materjali valik",
          "Kunsti raami suurus",
          "Ülikonna kanga valik",
          "Vidina värvivalik",
          "Parfüümi lõhnaprofiil",
          "Koti materjal ja suurus",
          "Kleidi pikkus ja stiil",
          "Raamatu kaanematerjal",
          "Mööbli puittüüp",
          "Kellarihma materjal",
          "Mänguasja kohandatud omadused",
          "Mütsi suurus ja värv",
          "Nahahoolduse koostisosade eelistused",
          "Kodukujunduse teema",
          "Kööginõude materjal",
          "Kirjatarvete paberi tüüp",
          "Juuste aksessuaaride materjal",
          "Spordivarustuse suurus",
        ],
      },
    },

    /**
     * Lottery
     */
    lottery: {
      title: [
        "Keeruta ja võida suuri auhindu!",
        "Pealkiri",
        "Pealkiri",
        "Pöörake auhindade võitmiseks",
        "Rikkuse ratas",
        "Ekstravagantne õnnelik loterii",
        "Pealkiri",
        "Auhind Ratta Fiesta",
        "Pealkiri",
        "Keerake rattamaagiat",
        "Pealkiri",
        "Fortuuna soosing",
        "Imede ratas",
        "Pealkiri",
        "Auhind Spinner Delight",
        "Golden Spin loterii",
        "Spin-a-Auhind",
        "Õnneratas",
        "Pealkiri",
        "Pealkiri",
      ],
      description: [
        "Keera ratast, et võita eksklusiivseid allahindlusi!",
        "Proovi oma õnne – meie õnnerattas ootavad suurepärased auhinnad!",
        "Võitke iga keerutusega – põnevad auhinnad!",
        "Keerake võitmiseks! Üllatuskingitusi ja pakkumisi igal sammul.",
        "Sinu võimalus teha suuri punkte – keeruta ratast koheste auhindade nimel!",
        "Eksklusiivsed preemiad iga keerutusega – kas sina oled õnnelik?",
        "Keeruta ja võida! Avastage meie poe õnnerattas peidetud kalliskive.",
        "Õnn meie rattaga – auhinnad, allahindlused ja palju muud!",
        "Iga keerutus on võit – haara oma eriauhind juba täna!",
        "Pöörake rooli, et saada rõõmustav üllatus – mille võidate?",
        "Vabastage õnn keerutusega – ees ootavad põnevad poepreemiad.",
        "Keerutage, et paljastada oma auhind – allahindlused, kingitused ja palju muud!",
        "Üks keerutus päevas hoiab põnevust mängus – võida ainulaadseid auhindu!",
        "Keerake meie õnneratast eksklusiivsete poemaiuste saamiseks.",
        "Õnnelikud keerutused toovad õnnelikke võite – hankige oma auhind kohe!",
        "Teie keerutus võib avada suurepäraseid ostupreemiaid!",
        "Pöörake, et saada eksklusiivseid pakkumisi ja pakkumisi.",
        "Õnneratas keerleb – püüdke oma õnnelik auhind kinni!",
        "Pöörake, võitke ja naeratage – üllatage iga pöördega.",
        "Keerake ringi ja laske varandusel teie auhind otsustada!",
      ],
    },

    /**
     * Subscription Price
     */
    subscription_price: {
      title: [
        "üksus Juurdepääs",
        "Pealkiri",
        "üksus Pakk",
        "Pealkiri",
        "üksus Tellimus",
        "Pealkiri",
        "Pealkiri",
        "üksus Pakkumine",
        "Pealkiri",
        "Professionaalne sviit",
      ],
      description: [
        "Hallake üksust Kirjeldus ja kohandage oma poe seotud seadeid.",
        "Hallake üksust Kirjeldus ja kohandage oma poe seotud seadeid.",
        "Kirjeldus",
        "Kirjeldus",
        "Kirjeldus",
        "Kirjeldus",
        "Kirjeldus",
        "Kirjeldus",
        "Hallake üksust Kirjeldus ja kohandage oma poe seotud seadeid.",
        "Hallake üksust Kirjeldus ja kohandage oma poe seotud seadeid.",
      ],
    },

    spec: {
      group: [
        "Tehnilised kirjeldused",
        "Füüsiline üksus",
        "Toimivus üksus",
        "üksus Valikud",
        "üksus",
        "üksus",
        "üksus",
        "üksus",
        "üksus",
        "üksus",
        "Pakk üksus",
        "Garantii üksus Tugi",
        "üksus",
        "üksus",
        "üksus",
        "üksus",
        "üksus Valikud",
        "Kaasatud üksus",
        "Kasutaja Hinnang üksus Arvustused",
        "üksus",
      ],
    },

    avocado: {
      title: [
        "Ost üksus",
        "Pealkiri",
        "Tellimus Arve",
        "Makse Arve",
        "Klient üksus",
        "Tehing üksus",
        "Arveldamine üksus",
        "Pealkiri",
        "Tellimus üksus",
        "Ost Tellimus Arve",
        "Müügid üksus",
        "üksus Arve",
        "üksus",
        "Teenus Arve",
        "Toode Arve",
        "Makse üksus",
        "Tellimuse kinnitus",
        "Arveldamine Arve",
        "üksus Arve",
        "Klient Arve",
      ],
      message: [
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Hallake üksust Sõnum ja kohandage oma poe seotud seadeid.",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
      ],
    },

    /**
     * Map Tag
     */
    map_tag: {
      title: [
        "Pealkiri",
        "Müüja üksus",
        "üksus Avaleht",
        "Pealkiri",
        "Uustulnukad",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Ava üksus",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "üksus Tsoon",
      ],
    },

    /**
     * Marketplace Documents (For vendors)
     */
    marketplace_document: {
      title: [
        "Pealkiri",
        "Pealkiri",
        "Müüja üksus Vorm",
        "Toode üksus",
        "Hinnastamine Loend",
        "Pank Konto Üksikasjad",
        "üksus of Aadress",
        "Pealkiri",
        "Ettevõte Profiil",
        "Pealkiri",
        "Pealkiri",
        "Toode Garantii Teave",
        "Tagastuspoliitika",
        "Pealkiri",
        "Klient Teenus Poliitika",
        "Pealkiri",
        "üksus Meedia Lingid",
        "Pealkiri",
        "Tarnija Kood of üksus",
        "Pealkiri",
      ],
    },

    /**
     * Expert Contract
     */
    expert_contract: {
      title: [
        "Pealkiri",
        "Pood Konfiguratsioon üksus",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Hallake üksust Pealkiri ja kohandage oma poe seotud seadeid.",
        "Hallake üksust Pealkiri ja kohandage oma poe seotud seadeid.",
        "Hallake üksust Pealkiri ja kohandage oma poe seotud seadeid.",
        "Pealkiri",
        "Hallake üksust Pealkiri ja kohandage oma poe seotud seadeid.",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
      ],
    },

    /**
     * Account
     */
    account: {
      account_name: [
        "Peamine Rahakott",
        "Äri Konto",
        "üksus Rahakott",
        "üksus Rahakott",
        "üksus Konto",
        "üksus Rahakott",
        "Üldine Konto",
        "üksus Rahakott",
        "Tehing Rahakott",
        "üksus Konto",
      ],
    },

    /**
     * Cashback
     */
    cashback: {
      title: [
        "Pood & üksus raha tagasi",
        "Pealkiri",
        "üksus raha tagasi Pakkumised",
        "raha tagasi üksus",
        "Pealkiri",
        "Pealkiri",
        "üksus raha tagasi Päevad",
        "raha tagasi on üksus Ost",
        "raha tagasi üksus",
        "VIP raha tagasi üksus",
        "Piirang Aeg raha tagasi",
        "raha tagasi üksus Klubi",
        "Pood Rohkem, Salvesta Rohkem",
        "Pealkiri",
        "raha tagasi üksus",
      ],
      description: [
        "Kirjeldus",
        "Kirjeldus",
        "Kirjeldus",
        "Kirjeldus",
        "Hallake üksust Kirjeldus ja kohandage oma poe seotud seadeid.",
        "Kirjeldus",
        "Kirjeldus",
        "Kirjeldus",
        "Kirjeldus",
        "Kirjeldus",
        "üksus! Piirang Aeg raha tagasi Pakkumised.",
        "Kirjeldus",
        "Kirjeldus",
        "Kirjeldus",
        "Kirjeldus",
      ],
    },

    /**
     * Page
     */
    page: {
      prompts: [
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {shop}",
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {shop}",
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {shop}",
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {shop}",
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {shop}",
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {shop}",
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {shop}",
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {shop}",
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {shop}",
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {shop}",
      ],
    },

    /**
     * Cross-Selling
     */
    cross_selling: {
      message: [
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
        "Sõnum",
      ],
    },

    /**
     * Cross-Selling
     */
    vendor_pricing: {
      title: [
        "Pealkiri",
        "üksus",
        "üksus",
        "üksus",
        "Avaleht üksus",
        "üksus Toode",
        "Pealkiri",
        "Mänguasjad ja mängud",
        "Toidukaubad",
        "Mööbel",
        "Autoosad",
        "Ehted",
        "Pealkiri",
        "Lemmikloomatarbed",
        "Kontoritarbed",
        "Pealkiri",
        "üksus & TV Näita",
        "Tarkvara",
        "Pealkiri",
        "Pealkiri",
      ],
    },

    /**
     * Template Message
     */
    template_message: {
      title: [
        "Tellimuse kinnitus",
        "Tellimus üksus",
        "Tellimus üksus",
        "Makse üksus",
        "Tellimus üksus",
        "Pealkiri",
        "Pealkiri",
        "Pealkiri",
        "Tagastus üksus",
        "Tagasimakse üksus",
        "Kaup on jälle laos",
      ],
      body: [
        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {buyer_name} {order_id}",

        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {buyer_name} {order_id}",

        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {buyer_name} {order_id}",

        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {buyer_name} {order_id}",

        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {buyer_name} {order_id}",

        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {buyer_name} {order_id}",

        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {buyer_name} {order_id}",

        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {buyer_name} {order_id}",

        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {buyer_name} {order_id}",

        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {buyer_name} {order_id}",

        "Hallake üksust üksus ja kohandage oma poe seotud seadeid. {buyer_name} {order_id}",
      ],
    },

    /**
     * Property Set
     */
    property_set: {
      title: [
        "üksus",
        "Pealkiri",
        "üksus",
        "Toiduained",
        "Mööbel",
        "üksus",
        "üksus Toode",
        "üksus",
        "Pealkiri",
        "üksus",
      ],
      description: [
        "Hallake üksust Kirjeldus ja kohandage oma poe seotud seadeid.",
        "Hallake üksust Kirjeldus ja kohandage oma poe seotud seadeid.",
        "Kirjeldus",
        "Hallake üksust Kirjeldus ja kohandage oma poe seotud seadeid.",
        "Kirjeldus",
        "Kirjeldus",
        "Hallake üksust Kirjeldus ja kohandage oma poe seotud seadeid.",
        "Kirjeldus",
        "Kirjeldus",
        "Kirjeldus",
      ],
    },

    /**
     * Boxes
     */
    boxes: {
      name: [
        "Kast XS",
        "Kast S",
        "Kast M",
        "Kast L",
        "Kast XL",
        "Kast XXL",
        "Kitsas kast",
        "Lai kast",
        "Kõrge kast",
        "Lame kast",
        "Kuubikukast",
        "Toru kast",
        "Kast habrastele esemetele",
        "Kast klaaspudelitele",
        "Paindlik saatmisümbrik", // flexible mailer
        "Polsterdatud kast", // bubble/padded
        "Isoleeritud kast", // thermal
        "Tugevdatud kast",
      ],
    },
  },
};
