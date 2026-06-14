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
    pay_today: "Pagato di oggi",
    pay_yesterday: "Pagato Ieri",
    pay_last30days: "Pagati negli ultimi 30 giorni",
    create_a_shop: "Crea un negozio",
    start_free: "Inizia gratis",
    featured_apps: "App in primo piano",
    more_apps: "Più applicazioni",
    my_public_profile: "La pagina del mio profilo pubblico",
    product_admin: "Amministrazione prodotto",
    make_money_affiliate: "Fare soldi",
    see_live_shop: "Vedi negozio live",
    see_live_product: "Vedi prodotto live",
    has_inputs: "Ha input",
    main_domain: "Dominio principale",
    domains: "Domini",
    home_page: "Pagina iniziale",
    google_icon_font_sample: "Esempio font Google",
    fontawesome_icon_font_sample: "Esempio Fontawesome (V6)",
  },

  numbers: {
    infinite: "Illimitato",
  },

  error: {
    not_fount_data: "Dati non trovati!",
    license_max_limit: "La tua licenza ha raggiunto il limite!",
    no_read_access: "Nessun accesso in lettura",
    no_write_access: "Nessun accesso in scrittura",
    no_access: "Nessun accesso",
  },

  time_spans: {
    days_range: "Intervallo in giorni",
    today: "Oggi",
    yesterday: "Ieri",
    last_7: "Ultimi 7 giorni",
    last_14: "Ultimi 14 giorni",
    last_30: "Ultimi 30 giorni",
    last_90: "Ultimi 90 giorni",
    custom: "Personalizzato",
  },
  device_types: {
    desktop: "elemento",
    mobile: "elemento",
    tablet: "elemento",
  },

  create_website_action: "Crea il tuo sito web: è gratis",
  show_shops_action: "I miei negozi",

  // Companies:

  Youtube: "YouTube",
  Linkedin: "LinkedIn",
  Twitter: "Twitter",
  Facebook: "Facebook",
  Instagram: "Instagram",
  Reddit: "Reddit",
  Github: "GitHub",

  theme: {
    dark_mode: "Modalità oscura",
    dark_mode_description:
      "Scegli questa opzione se desideri uno sfondo scuro con il colore del testo bianco.",
    light_mode: "Modalità luce",
    light_mode_description:
      "Scegli questa opzione se desideri che lo sfondo sia chiaro e il testo sia di colore nero.",
  },

  ai: {
    remove_bg: {
      title: "Rimuovi sfondo",
      subtitle: "Crea uno sfondo trasparente.",
    },
    reimagine: {
      title: "Reinventa",
      subtitle: "Crea altre immagini con nuovi sfondi.",
    },
    upscale: {
      title: "Aumenta risoluzione",
      subtitle: "Aumenta la risoluzione dell’immagine.",
    },
  },

  // ------------------ Pages Title ------------------
  page_titles: {
    home: "Selldone ╏ Il sistema operativo aziendale per le aziende in rapida crescita",
    login: "Accedi",
    register: "Registrati",
    auth_2fa: "Autenticazione a 2 fattori 🔐",
    academy: "Blog",
    help: "Centro assistenza",
    price_list: "Listino prezzi",
    my_stores: "I miei negozi",
    roles: "I miei ruoli",
    wallet: "Il mio portafoglio",
    personal_info: "Informazioni personali ╏ KYC",
    companies: "Le mie aziende",
    access_control: "Controllo accessi",
    security_center: "Centro di sicurezza",
    gifts: {
      received: "Regali ╏ Ricevuto",
      send: "Regali ╏ Inviati",
    },
    monetization: {
      linked_accounts: "Monetizzazione ╏ Account collegati",
      plans: "Monetizzazione ╏ Piano e collegamenti",
    },
    affiliate: "Affiliato",
    avocado: "Avocado — Canale di vendita sociale moderno",
    guild: "Gilda — Canale di vendita collettivo",
    partners_login: "Partner ╏ Accesso cliente",
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

  blank_is_all_products: "Lascia vuoto per includere tutti i prodotti!",

  // ---------------------------------------------

  /** @see ShopCautionHelper **/
  cautions: {
    title:
      "Gestisci la tua attività in modo professionale seguendo i seguenti suggerimenti. Continua a leggere per suggerimenti su come aumentare il margine di profitto e altro ancora. Siamo con te lungo la strada.",
    no_payment_method: {
      title: "Metodo di pagamento",
      message:
        "Devi aggiungere un metodo di pagamento al tuo negozio.",
      action: "Gateway di negozi",
    },
    link_account: {
      title: "Collega l'account",
      message:
        "Devi collegare un account ({currency}) al tuo negozio.",
      action: "Conti del negozio",
    },
    no_domain: {
      title: "Aggiungi dominio",
      message:
        "Puoi collegare uno o più domini personali al tuo negozio. Il tuo sito web verrà installato sul tuo dominio. Questo processo è facile e veloce.",
    },
    domain_not_approved: {
      title: "Verifica del dominio",
      message:
        "Il tuo dominio {domain} non è stato verificato. Verifica le impostazioni DNS e conferma il dominio.",
    },
    no_currency: {
      title: "Aggiungi valuta",
      message:
        "Devi definire almeno una valuta per il tuo negozio.",
      action: "Gestione valuta",
    },
    no_primary_domain: {
      title: "Il dominio principale",
      message:
        "Seleziona un dominio come dominio principale. Cliccando sul pulsante asterisco accanto al nome di dominio, puoi selezionare il dominio come dominio principale del tuo negozio. Questo è fondamentale per i motori di ricerca. Tieni presente che il tuo negozio sarà ancora disponibile attraverso tutti i domini attivi.",
    },
    shop_complete: {
      title: "Informazioni complete",
      action: "Impostazioni del negozio",
      location_msg: "Aggiungi la tua posizione",
      days_open_msg: "Imposta giorni di apertura",
      time_open_msg: "Impostare l'orario di apertura e chiusura",
      description_msg: "Scrivi una breve descrizione della tua attività",
      icon_msg: "Imposta il logo del tuo negozio",
      shop_gateways_msg: "Aggiungi metodo di pagamento",
      socials_msg: "Aggiungi i tuoi link social",
      clubs_msg: "Imposta i club dei clienti",
      domains_msg: "Aggiungi dominio personalizzato",
      primary_msg: "Imposta un dominio come principale",
    },
  },

  /** @see BSupportMenu **/
  support: {
    request: "Richiedi supporto",

    category: "Categoria",
    title: "Supporto",
    message:
      "Fai qualsiasi richiesta o domanda. Il nostro team di supporto ti guiderà. Ti consigliamo di porre la tua domanda nella pagina relativa alla tua richiesta. Ad esempio, se hai una domanda sull'impostazione del dominio, inviala nella pagina delle impostazioni del dominio del tuo negozio.",

    close_at: "Chiuso alle {date}",
    close_ticket_by_user: "Grazie, ho avuto la risposta",
  },

  /** @see SShopProductRatingView **/
  surveys: ["Scarso", "Non buono", "Normale", "Buono", "Eccellente"],

  /** @see SortView **/
  sort: {
    title: "Ordina per",
    title_small: "Ordina per..",
    nothing: "Niente",
    most_views: "Più visto",
    most_likes: "Più popolare",
    most_recent: "Più recente",
    most_sell: "Più Venduto",
    cheapest: "Più economico",
    most_expensive: "Più costoso",
    only_available: "Solo i disponibili",
    view_mode: {
      normal: "Normale",
      grid: "Griglia",
      list: "Elenco",
      insta: "elemento",
    },
  },

  /** {@see Helps} **/

  helps: {
    title: "Centro assistenza Selldone",
    subtitle:
      "Benvenuto in Selldone. Se stai costruendo un nuovo negozio online su un sistema operativo aziendale, puoi trovare maggiori informazioni qui.",

    add_new_help: "Nuovo aiuto",
    resources: "Risorse",

    categories: {
      Welcome: "Iniziare",
      Setup: "Impostazioni",
      Sell: "Vendite e marketing",
      Developer: "Sviluppatori",

      Product: "Gestione di prodotti e categorie",
      Blog: "CMS e blog",
      Order: "Centro di evasione ordini",
      Channel: "Canali di vendita",
      Accounting: "Contabilità e metodi di pagamento",
      Incentives: "Incentivi",
      Marketing: "Marketing e campagne",
      Logistic: "Logistica e spedizione",
      Customers: "Club dei clienti e segmentazione",
      Page: "Pagine di destinazione e personalizzate",
      Access: "Gestione degli accessi del personale / API",
      Application: "Applicazioni",
      POS: "POS",
    },
    faq: "FAQ",
    github: "Archivio GitHub",
    admin_api_app: "Servizio Web dell'API di amministrazione",
    shop_api_app: "Servizio web dell'API del negozio",
    design_kit: "Kit di progettazione",
    community: "Comunità",
  },

  /** {@see Blogs} **/
  /** {@see InterestTopicsView} **/

  blogs: {
    title: "elemento",
    subtitle:
      "Lezioni per gli affari, la fiducia e le conoscenze necessarie per creare un business fiorente.",
    add_new_blog: "Nuovo blog",
    popular: "Popolare",
    topics: "Temi",
    select_topics: "Seleziona il tuo lavoro.",
    select_job_topics: "Seleziona i tuoi argomenti relativi al lavoro",
    select_interested_topics: "Quali argomenti ti interessano?",
  },

  /** {@see ApiDocs} **/
  api: {
    title: "API e integrazione",
    message:
      "Una delle caratteristiche chiave di Selldone è la fornitura di API robuste e sicure per gestire e collegare i negozi ad altri servizi come magazzinaggio, contabilità, ecc. Puoi anche progettare app e app Web personalizzate per il tuo negozio. Senza doversi preoccupare di server e gestione dei dati. Basta usare le API di dominio. Avrai tutto il processo di gestione degli utenti, l'autenticazione e altre funzionalità del dominio.",
  },

  /** {@see BPageShuttle} **/
  user_dashboard: {
    title: "Pannello di controllo",
    subtitle: "Gestisci la tua attività con informazioni aggiornate e prospettive chiare.",
    menu: {
      affiliate: "Affiliato",
      monetize: "Monetizzazione",
      gift: "Regalo",
      security: "Sicurezza",
      access: "Accesso",
      business: "Azienda",
      wallet: "Portafoglio",
      identification: "KYC",
      stores: "Negozi",
      roles: "Ruoli",
      home: "Casa",
      expert: "Esperto",
      deals: "Offerte",
      providers: "Fornitori",
    },
    shops: {
      create_new: "Crea un nuovo negozio",
      create_new_sub_need_initial_charge:
        "Costruire il primo negozio è gratuito. Probabilmente un negozio è sufficiente per la tua attività, ma se hai bisogno di costruire più negozi, il costo per costruirne uno nuovo è di 25$. Preleviamo l'importo dal tuo conto portafoglio.",

      menu: {
        title: "I miei negozi",
        shops: "Negozi",
        new: "Nuovo",
      },

      accept_invite_question: "Accetti questo invito?",
      /** {@see BShopCard} **/

      shop_card: {
        menu_orders: {
          physical: "Ordini di prodotti fisici",
          virtual: "Ordini di prodotti virtuali",
          files: "File ordini",
          services: "Ordini di servizio",
          subscriptions: "Ordini di abbonamento",
        },
        status: "Stato",
        license: "Licenza",
        volume: "Spazio utilizzato",
        expire: "Licenza scaduta",
        products: "Prodotti",
        page_views: "Visualizzazioni",
        user_behavior: "Comportamento del cliente",
        time_span: "da {time} fino ad ora",
        finance_report: "Rapporto finanziario",
        buys: "Acquisti",
        payments: "Pagamenti",
        orders: "Ordini",
        currency: "Valuta",
        no_payment: "elemento pagamento!",
        no_purchase: "elemento elemento!",
      },
    },
  },

  widgets: {
    /** {@see BDashboardFeedback} **/
    overview: {
      title: "Feedback dei clienti",
      title_small: "Panoramica",
      wishlist: "Lista dei desideri",
      comments: "Commenti",
      likes: "Piace",
      favorites: "Preferiti",
      powers: "Applausi",
      views: "Visualizzazioni",
      report_today: "Rapporto di oggi",
      report_last7days: "Rapporto degli ultimi 7 giorni",
      report_last30days: "Rapporto degli ultimi 30 giorni",
    },
  },

  /** {@see BPageShop} **/
  admin_shop: {
    title: "negozio",
    menu: {
      edit: "Impostazioni",
      automation: "Automazione",
      application: "Applicazioni",
      access: "Accesso",
      pages: "Pagine",
      channels: "Canali",
      classification: "elemento",
      marketing: "elemento",
      customers: "Clienti",
      logistic: "Logistica",
      auditing: "Contabilità",
      incentives: "Incentivi",
      process_center: "Ordini",
      blog: "elemento",
      products: "Prodotti",
      shops: "Negozi",
      dashboard: "Pannello",
      autopilot: "Autopilota",
      apps: "App",
      pos: "POS",
      seo: "SEO",
      localization: "Localizzazione",
      crm: "CRM",
      listing: "inserzione",
    },

    /** {@see BPageShopDashboard} **/
    dashboard: {
      title: "Pannello di controllo del negozio",
      online_staff: "Personale/i online",

      notify_referral: {
        message: "Invia il tuo link di invito agli amici e ottieni buoni gratuiti.",
        action: "Il mio link di riferimento",
      },

      /** {@see BDashboardShopTechnical} **/
      info: {
        title: "Tecnico",
        subtitle: "Panoramica tecnica del tuo sistema operativo aziendale.",

        shop_name: "Nome del negozio",
        shop_link: "Collegamento al negozio",
        site_map: "Mappa del sito",
        shop_domains: "Domini",
        shop_domains_msg: "Elenco di domini personalizzati collegati.",

        home_msg:
          "Imposta la home page predefinita del tuo sito web. Può essere modificato per ogni dominio personalizzato.",

        add_domain: "Aggiungi nuovo dominio",
        currencies: "Valute attive",
        currencies_alert: "Seleziona almeno una valuta per il negozio!",
        status: "Stato",
        license: "Licenza",
        expire: "Data di scadenza della licenza",
        upgrade_license_action: "Esegui l'upgrade a {name}",
        wage: "Tassa",
        cpu_message:
          "Il numero di risorse che hai adattato al piano acquistato e le risorse che aggiungi al tuo servizio.",
        hide_domains: "Nascondi i miei domini",
        show_domains: "Mostra i miei domini",

        /** {@see BDomainsList} **/
        table: {
          primary: "Primario",
          url: "URL",
          site_map: "Mappa del sito",
          enable: "Abilita",
          indexed: "Indicizzato",
          and_more: "& di più..",
          auto_repair: "Auto Riparazione",
        },
        add_dialog: {
          title: "Configura il dominio del negozio",
          step1:
            "È possibile definire il limite IP del record A per un dominio o sottodominio DNS dai seguenti valori:",
          step2: "Aggiungi un record DNS TXT:",
          set_ip_alert:
            "Imposta il valore IP del record A <b>{ip}</b> .",

          input_domain: "URL di dominio",
          correct: "Le impostazioni del dominio sono corrette.",
          set_message: "Imposta CNAME di questo dominio su {cname}.",
          input_domain_message: "Immettere il nome di dominio senza http e https.",
          ssl_message:
            "Non preoccuparti del certificato SSL per il tuo sito web. Questa certificazione verrà rilasciata automaticamente per il tuo dominio da Selldone (beta).",
          active: "Il dominio è attivo",
          inactive: "Il dominio è disabilitato",
          success_message:
            "Congratulazioni, il tuo sito è abilitato su {domain}. Puoi presentare la tua attività e il tuo marchio al mondo attraverso questo dominio.",

          delete_action: "Eliminare il dominio?",
        },
        set_home_dialog: {
          title: "Imposta la home page del dominio",
        },
        notification: {
          add_message: "Indirizzo di dominio aggiunto correttamente.",
          update_message: "Il dominio è stato aggiornato correttamente.",
          delete_domain_message: "Il dominio è stato eliminato correttamente.",
        },
        alert: {
          title: "Elimina dominio",
          message:
            "Vuoi eliminare questo dominio? Assicurati di reimpostare i valori dei record DNS del tuo dominio per prevenire frodi ad altri.",
        },
      },

      /** {@see BDashboardShopOrders} **/
      active_orders: {
        title: "Ordini",
        title_small:
          "Ordini fisici, file, virtuali e di servizio",
        pending_orders: "Ordini in attesa",
        physical: "Ordini di prodotti fisici",
        virtual: "Ordini di prodotti virtuali",
        file: "Archivia gli ordini dei prodotti",
        service: "Servizio ordini di prodotti",
        subscription: "Ordini di abbonamento",
      },
      /** {@see BDashboardShopProducts} **/
      products: {
        title: "Inventario",
        title_small: "Prodotti, servizi, file",

        total_products: "Tipi di prodotti totali",
      },
      /** {@see BDashboardShopFinance} **/
      finance: {
        title: "Finanziario",
        title_small: "Relazione finanziaria",
        total_30days_title: "Importo totale delle vendite",
        last_30_day: "Ultimi 30 giorni",
        pay_amount_chart_title: "Pagamenti",
        sell_amount_chart_title: "I saldi",
        discount_amount_chart_title: "Sconto",
        currency_convert_to: "Alla valuta",
        active_currencies: "Valute attive",
        sell_count_chart_title: "Numero di vendite per variante",
        active_gateways: "Gateway di pagamento attivo",
        received_last_24h: "Ricevuto nelle ultime 7 ore",
        pie: {
          title: "Il rapporto di vendita di oggi",
          no_data: "Nessuna vendita oggi",
        },
        pay_amount: "Importo del pagamento",
        sell_amount: "Importo di vendita",
        discount_amount: "Totale sconto",
        sell_count: "Conteggio vendite",
        table: {
          currency: "Moneta",
          total_sell_30days: "Vendite totali di 30 giorni",
          sell_daily: "Tasso di vendita giornaliero",
          sell: "Vendita",
          pay: "Paga",
        },
      },
      /** {@see BDashboardShopCustomers} **/
      customers: {
        title: "Acquista i clienti",
        title_small: "Rapporto di conversione",
        total_customers: "Totale",
        new_customers_today: "In data odierna",
        new_customers_week: "Ultimi 7 giorni",
        orders_count: "Gli ordini contano",
        days_range: "Intervallo di giorni",
        new_users: "Nuovi utenti registrati",

        chart: {
          new_customers: "Nuovi clienti",
          customers: "Clienti totali",
        },
      },
      /** {@see BDashboardShopChannels} **/

      channels: {
        title: "Canali di acquisizione",
        subtitle:
          "La tua attività sta crescendo. Ecco il report dei tuoi canali di acquisizione clienti.",
      },

      /** {@see BDashboardShopPerformance} **/
      performance: {
        title: "In data odierna",
        title_small: "Panoramica utenti e vendite",
        users: "Utenti",
        views: "Visualizzazioni",
        orders: "Ordini",
        payments: "Pagamenti",
        no_visitor_today: "Non hai avuto visite oggi.",
      },
    },

    /** {@see BPageShopProductsList} **/
    products: {
      title: "Elenco prodotti",
      products_list: "Torna alla lista",
      products_menu: "Gestione dei prodotti",

      view_que_list: "Visualizza l'elenco delle code",
      menu_products_list: "Elenco prodotti",
      menu_export: "Esporta prodotti",
      menu_import: "Importa prodotti",
      drop_import_message:
        "Trascina qui il file dell'elenco dei prodotti (formato CSV, XLS, XLSX) per iniziare ad aggiungere prodotti in blocco. Assicurati che il file abbia il formato dell'elenco dei prodotti Selldone.",

      menu_advanced_options: "Opzioni avanzate",
      menu_advanced_options_description:
        "Collega il foglio Google, rimuovi prodotti duplicati e altro ancora...",

      products_rss: {
        title: "RSS prodotti",
        subtitle: "elemento prodotti elemento Google, Meta,...",
      },
      products_api: {
        title: "API prodotti",
        subtitle: "Importazione di prodotti tramite una chiamata API accessibile pubblicamente.",
      },
      google_sheet: {
        action: "Foglio collegato",
        tooltip:
          "I prodotti in questo negozio sono collegati a un foglio Google in Google Drive.",
      },
      show_deletes: {
        false_title: "Nascondi eliminati",
        false_description: "nascondi elemento prodotti.",
        true_title: "Mostra eliminati",
        true_description: "mostra elemento prodotti.",
      },
      show_vendors: {
        false_title: "Nascondi venditori",
        false_description: "elemento mostra venditore elemento.",
        true_title: "Mostra venditori",
        true_description: "mostra elemento venditori, ⌘Ctrl+1",
      },
      table_mode: {
        false_title: "Modalità trascina e rilascia",
        false_description:
          "Visualizza i prodotti organizzati per categorie e sottocategorie.",
        true_title: "Modalità tabella",
        true_description: "Visualizza i prodotti in un layout di tabella dettagliato.",
      },

      show_notes: {
        false_title: "Nascondi note",
        false_description: "nascondi elemento note.",
        true_title: "Mostra note",
        true_description: "mostra elemento note, ⌘Ctrl+2",
      },

      rss_dialog: {
        title: "RSS prodotti",
        subtitle:
          "Utilizza questo feed RSS per mantenere un elenco aggiornato di tutti i prodotti.",
      },
      api_dialog: {
        title: "API prodotti",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },

      /** {@see BProductWindowProductLarge} **/

      product_widget: {
        product_type: "Tipologia di prodotto",
        price: "prezzo",
        value_added: "Commissione",
        discount: "Sconto",
        in_stock: "In magazzino",
        product_unit: "Unità",
        total_sell: "Vendite totali",
        total_view: "Visualizzazioni totali",
        view_unit: "Volte",
        review_unit: "Recensioni",
      },

      /** {@see WidgetFolderCard} **/
      folder_widget: {
        products: "Prodotti",
        products_unit: "Tipi",
        sub_categories: "Categorie",
        sub_categories_unit: "Elementi",
        views: "Visualizzazioni",
        views_unit: "Volte",
      },
    },

    /** {@see BPageShopBlogs}  **/
    blogs: {
      new: "Scrivi nuovo",
      blogs: "elemento",

      /** {@see BPageShopBlogsList} **/
      list: {
        title: "I miei articoli",
        subtitle:
          "Scrivi articoli con un moderno editor inline per presentare te stesso e la tua attività. Il contenuto originale è la prima cosa su cui devi concentrarti quando scrivi un post di blog SEO-friendly di alta qualità.",
        waiting_message: "Ricezione informazioni in corso... Attendere",
        published: "Pubblicato",
        draft: "Brutta copia",
        private: "Privato",
        public: "Pubblico",
        table: {
          title: "Titolo",
          author: "Autore",
          claps: "Applausi",
          like: "Piace",
          comments: "Commenti",
          views: "Visualizzazioni",
          publish_state: "Stato",
          created_at: "Data di creazione",
          updated_at: "Ultimo aggiornamento",
        },
      },
    },

    /** {@see ShopPBPageShopOrdersrocessCenter} **/
    orders: {
      /** {@see BProcessCenterList} **/
      physical: {
        waiting_message: "Ricezione informazioni in corso... Attendere",
        rejected: "Respinto",
        delivery: "Spedizione",
        discount: "Sconto",
        not_paid: "Non pagato",

        table: {
          order_number: "Codice d'ordine",
          order_date: "Data di partenza",
          status: "Ultimo stato",
          price: "Importo totale",
          payment_status: "Stato del pagamento",
        },
      },

      /** {@see BPageShopOrdersVirtual} **/
      virtual: {
        waiting_message: "Ricezione informazioni in corso... Attendere",

        discount: "Sconto",
        table: {
          order_number: "Codice d'ordine",
          product: "Prodotto",
          order_date: "Data di registrazione",
          status: "Ultimo stato",
          price: "Importo totale",
          payment_status: "Stato del pagamento",
        },
      },
    },

    /** {@see BPageShopFinance} **/
    auditing: {
      menu: {
        exchange: "Scambio",
        gateway: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        invoice: "Fatturazione",
        report: "Rapporto",
        tax: "Imposta",
        drop_shipping: "Ricevute del rivenditore",
        reseller_accounts: "Account rivenditore",
        valuations: "Valutazioni",
        customer_wallets: "Portafogli clienti",
      },

      /** {@see BPageShopFinanceBill} **/
      invoice: {
        title: "Acquista portafogli collegati",
        subtitle:
          "Addebiti, commissioni e costi del negozio vengono detratti da questi conti portafoglio.",

        title_add: "Collega il nuovo account del portafoglio",
        subtitle_add:
          "Dovresti creare un nuovo portafoglio per ogni valuta e collegarlo al tuo negozio. La commissione di servizio verrà prelevata da questo portafoglio.",
        add_account: "Aggiungi account",
        charge_account: "Conto di addebito",
        show_transaction: "Mostra transazioni",

        table: {
          currency: "Moneta",
          account_number: "Numero di conto",
          account_name: "Nome utente",
          balance: "Bilancia",
          free_balance: "Saldo disponibile",
          actions: "Rimuovere",
        },
        add_account_dialog: {
          title: "Collegamento dell'account di credito per archiviare",
          subtitle:
            "Quando apri un conto portafoglio con Selldone, ti forniremo una carta di credito virtuale e un conto come qualsiasi altra carta di credito. La commissione di vendita di Selldone verrà detratta da questo account, ma se il saldo del tuo account non è sufficiente, questo importo sarà dovuto. Puoi utilizzare i servizi Selldone quanto vuoi.",
          account_number: "Numero di conto",
          account_number_input_message:
            "Il negozio sarà collegato a questo account. Questo account verrà utilizzato per commissioni e costi.",
          balance: "Saldo del conto",
          connect_account_to_shop: "Collega l'account al negozio",
        },
        notifications: {
          connect_account_success: "Account aggiunto correttamente.",
          delete_account_success:
            "Account rimosso dal negozio con successo.",
        },
        alert: {
          delete_account: "Disconnetti l'account",
          delete_account_message:
            "Vuoi rimuovere questo account dall'elenco degli account del negozio?",
          delete_account_action: "Eliminare l'account",
        },
        inform_charge_account: "Carica il tuo account!",
        inform_charge_account_critical:
          "Addebita il tuo account per evitare la sospensione del servizio!",
      },

      /** {@see BPageShopFinanceExchange} **/
      exchange: {
        title: "Memorizza valute attive",
        subtitle:
          "Gli utenti potranno selezionare una delle valute attive e i prezzi dei prodotti verranno calcolati e visualizzati. Spetta al venditore inserire il tasso di cambio.",
        shop_currencies_input: "Valute attive per gli utenti",
        shop_currencies_input_error: "Seleziona almeno una valuta",
        rates: {
          title: "Tasso di cambio",
          sub_title:
            "Puoi inserire i prezzi dei prodotti in base a una qualsiasi delle valute seguenti e i prezzi dei prodotti verranno calcolati automaticamente ai tassi di conversione tra le tue valute.",
          message:
            "Inserendo i tassi di cambio tra le valute, i prezzi dei tuoi prodotti verranno automaticamente calcolati e aggiornati.",
          add_new_rate: "Aggiungi nuova tariffa",
        },
        table: {
          waiting_receive_data: "Ottenere informazioni... attendere prego",
          rate_input: "Tasso di cambio",
          from: "A partire dal",
          to: "A",
          exchange_rate: "Tasso di cambio",
          edit: "Modificare",
          delete: "Eliminare",
          auto: "Tasso automatico",
        },
        add_rate_dialog: {
          title: "Imposta tasso di cambio",
          message:
            "Fare attenzione nell'inserimento delle informazioni. I prezzi dei tuoi prodotti verranno calcolati in base alle tariffe inserite qui.",
          currency_from: "Dalla valuta",
          currency_to: "Alla valuta",
          exchange_rate: "Tasso di cambio",
        },
        alert: {
          title: "Elimina tasso di conversione",
          message: "Vuoi eliminare questo tasso di conversione?",
          action: "Eliminare",
        },
        notifications: {
          delete_success: "Tasso di cambio rimosso.",
          add_success: "Tasso di cambio aggiornato.",
          update_success: "Memorizza valute attive aggiornate.",
        },
      },
    }, // End of auditing

    /** {@see BPageShopLogistic} **/
    logistic: {
      /** {@see BPageShopLogisticWarehouse} **/
      warehouses: {
        title: "Magazzini",
        subtitle: "Elenco dei miei magazzini.",
      },
      restriction: {
        title: "Restrizione di spedizione",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        no_enable_shipping_error:
          "Nessuno può acquistare da te perché non hai un metodo di spedizione abilitato!",
        customer_must_select_a_shipping_msg:
          "cliente elemento seleziona elemento spedizione metodo elemento elemento ordine.",
        customer_can_order_without_shipping_method_msg:
          "Il cliente può effettuare l'ordine anche se nessun metodo di spedizione è supportato per la località selezionata.",
        inputs: {
          restriction: {
            false_description:
              "I clienti possono comunque effettuare ordini anche se non è stato selezionato alcun metodo di spedizione specifico.",
            false_title: "Accetta tutti gli ordini",
            true_title: "Accettazione ordini limitata",
            true_description:
              "Seleziona o inserisci le informazioni richieste.",
          },
        },
      },

      warehouse_btn: "Aggiungi nuovo magazzino",
      warehouse_btn_error:
        "Imposta il tuo magazzino, negozio o origine della tua attività. È fondamentale avere nel calcolo dei costi di spedizione e nel processo di checkout.",
      no_multi_warehouse_support_message:
        "Per semplicità, questa funzionalità non è disponibile nei normali negozi.",
      size_unit: {
        title: "Unità di misura",
        subtitle: "L'unità utilizzata per lunghezza, larghezza e altezza.",
      },
      mass_unit: {
        title: "Unità di massa",
        subtitle: "L'unità utilizzata per il peso.",
      },
      distance_unit: {
        title: "Unità di distanza",
        subtitle: "elemento elemento elemento elemento elemento.",
      },

      menu: {
        return_request: "Restituito",
        delivery: "Spedizione",
        inventory: "Inventario",
        warehouse: "Magazzino",
        logistic_apps: "la logistica",
        profiles: "Profili",
        includes: "Include",
        property_sets: "Set di proprietà",
        boxes: "Pacchi",
      },

      /** {@see BPageShopLogisticInventory} **/
      warehouse: {
        title: "Magazzino del negozio",
        sub_title: "Questo indirizzo viene utilizzato come origine della spedizione.",
        table: {
          title: "Inventario",
          sub_title:
            "Elenco di tutti i prodotti del negozio inclusi fisici, virtuali, file e servizi",
        },
      },

      /** {@see BPageShopLogisticShipping} **/
      delivery: {
        title: "Metodi di spedizione",

        sub_title:
          "Impostando i valori in questa sezione, nel tuo negozio vengono attivate diverse modalità di invio. In questa sezione è possibile attivare anche la modalità Contrassegno.",
        add_transportation: "Aggiungi il trasporto",

        /** {@see DeliveryFormWidget} **/
        delivery_form: {
          payment: "Opzioni di pagamento",
          limits: "Limiti",

          currency_input: "Valuta di riferimento per il calcolo dei costi",
          currency_input_message: "I costi sono calcolati in questa valuta",
          distance_input: "Distanza percorsa dal magazzino",
          distance_input_message: "0 o -1 significa nessun limite.",
          max_weight_input: "Peso massimo del pacco accettabile",
          max_weight_input_message: "0 o -1 significa nessun limite.",
          max_size_input: "Dimensioni massime del pacchetto",
          width: "Larghezza",
          length: "Lunghezza",
          height: "Altezza",
          days_input: "Date di consegna disponibili",
          days_input_nodata: "Seleziona il giorno di consegna",
          hours_input: "Tempi di consegna disponibili",
          hours_input_nodata: "Seleziona un periodo di tempo",
          vacation_input: "Consegnate nei giorni festivi?",

          pricing: "Calcola il prezzo",
          const_input: "Costo fisso",
          distance_cof_input: "Coefficiente costo-distanza",
          distance_cof_input_dim: "elemento {dim}",
          weight_cof_input: "Fattore costo-peso",
          weight_cof_input_dim: "elemento {dim}",
          price_cof_input: "Costo di spedizione al fattore prezzo del prodotto",
          price_cof_input_message:
            "Include i costi assicurativi e altri servizi come i costi del contrassegno.",
          price_cof_input_dim: "elemento {dim}",
          distance_weight_cof_input: "Moltiplicatore di costo per moltiplicatore di peso",
          distance_weight_cof_input_dim: "Per ogni {weight} per {distance}",
          free_shipping_input: "Spedizione gratuita",
          free_shipping_limit_input: "Costo minimo dell'ordine per la spedizione gratuita",

          shipping_cost_calculation: "Calcolo del costo di spedizione",
          sod_true: "Ottieni il costo di spedizione a destinazione",
          sod_true_message:
            "Assicurati che il tuo servizio di spedizione accetti i costi di spedizione a destinazione.",
          sod_false: "Calcolo automatico dei costi di spedizione",

          cod_input: "Supporto COD",
          cod_true: "Accetta contanti alla consegna",
          cod_false: "Accetta solo pagamenti online",
          cod_true_message: "Assicurati che il tuo servizio di spedizione accetti il contrassegno.",

          notifications: {
            update_success: "Impostazioni del servizio di spedizione completate correttamente.",
          },
        },
      },
    }, // End of logistic

    /** {@see BPageShopCrm} **/
    users: {
      menu: {
        customers: "Clienti",
        contact_form: "Contatti",
        faq: "FAQ",
        club: "elemento",
        report: "Rapporto",
      },

      /** {@see BPageShopCrmReport} **/
      report: {
        title: "Panoramica dei clienti",
        sub_title: "Qui vedrai lo stato in tempo reale dei tuoi clienti.",
        report_30days_by_time:
          "Attività dell'utente basata su data e ora negli ultimi 30 giorni",
        report_30days_by_location:
          "Attività degli utenti di geolocalizzazione negli ultimi 30 giorni",
      },
      /** {@see BPageShopCrmClub} **/
      club: {
        title: "Club dei clienti",
        sub_title:
          "Inserisci l'importo di acquisto mensile e annuale e la valuta per attivare ogni livello. I tuoi clienti verranno registrati nel tuo club clienti poiché soddisfano i requisiti di acquisto mensile o annuale.",
        item: {
          members_count: "Numero di membri",
          purchases_count: "Il numero di ordini",
          monthly: "Mensile",
          annually: "Annuale",
          discount_percent: "Tasso di sconto",
          discount_limit: "Limite di sconto",
        },

        edit_dialog: {
          title: "Gestione del livello del cliente",
          currency_input: "Moneta",
          currency_input_message:
            "Gli acquisti totali sono calcolati in questa valuta.",
          free_shipping_input: "Spedizione gratuita",
          monthly_input: "Tasso di acquisto mensile",
          annually_input: "Tasso di acquisto annuo",
          discount_percent_input: "Sconto per i membri del club",
          discount_limit_input: "Limite di sconto",
          description_input: "Descrizione",
          description_input_message: "Immettere una breve descrizione di questo livello.",
        },
        notifications: {
          update_success: "Modifiche applicate al club clienti.",
        },
      },
      /** {@see BPageShopCrmFaq} **/
      faq: {
        title: "Domande frequenti",
        sub_title: "Aggiungi, modifica e rispondi alle domande dei tuoi clienti.",
      },
    }, // End of users

    /** {@see BPageShopMarketing} **/
    marketing: {
      menu: {
        campaigns: "Campagne",
        cross_selling: "Vendita incrociata",
        affiliate: "Affiliato",
        emails: "E-mail",
        funnel: "Imbuto",
      },

      /** {@see BPageShopMarketingCampaign} **/
      campaign: {
        name_input_name: "Nome della campagna",
        name_input_placeholder: "Nome della campagna",
        create_campaign_action: "Crea nuova campagna",
        table: {
          title: "Titolo",
          state: "Stato",
          discount: "Sconto",
          landing: "Pagina di destinazione",
          start: "Inizio",
          end: "Fine",
        },
        notifications: {
          add_success_title: "Crea una campagna",
          add_success: "La tua campagna è stata creata.",
        },
      },
    }, // End of marketing

    /** {@see BPageShopClassification} **/
    categories: {
      title: "Elenco delle categorie",
      subtitle:
        "Le categorie sono la caratteristica chiave del tuo negozio online. Ti invitiamo a utilizzare questi potenti strumenti di categorizzazione per creare una vetrina moderna e consentire ai tuoi clienti di trovare facilmente i prodotti giusti.",

      menu: {
        add_new: "Aggiungi nuova categoria",
        categories_list: "Elenco delle categorie",
        export: "Categorie di esportazione",
        import: "Categorie di importazione (CSV)",
      },
      /** {@see categoriesGraph} **/
      graph: {
        title: "Gerarchia delle categorie",
        subtitle:
          "Puoi avere una panoramica completa delle categorie del tuo negozio e di come gli utenti le navigano. Con la giusta disposizione delle categorie, i tuoi clienti possono trovare rapidamente i prodotti e il tasso di conversione aumenterà.",
        visits_count: "Visita",
        normal: "Semplice",
        items_count: "Numero di articoli",
        home: "Casa",
      },
    }, // End of categories
    /** {@see AdminShopApps} **/
    apps: {
      menu: {
        app_store: "negozio",
        my_apps: "App",
      },
      /** {@see BPageShopSettingApplications} **/
      my_apps: {
        title: "Archivia le app attive",
        subtitle:
          "Scopri la facilità di gestire le tue applicazioni aziendali con Selldone App Store. La nostra piattaforma offre una suite completa di strumenti progettati per ottimizzare le operazioni aziendali. Dalle soluzioni di gestione innovative alle app che aumentano la produttività, Selldone offre un'esperienza fluida per le aziende che cercano efficienza e crescita.",
        all: "Tutto",
      },
      /** {@see BAppShopStore} **/
      store: {
        title: "App Store",
        subtitle:
          "Collega i tuoi servizi preferiti alla tua attività in modo sicuro. Aggiungiamo plugin e app in base alle richieste dei nostri clienti.",

        nodata: "Nessun plug-in trovato.",
        all: "Tutto",
        more: "di più",
      },
    }, // End of apps
    /** {@see BPageShopPages} **/
    pages: {
      menu: {
        new_page: "Nuova pagina",
        contact_us: "Contattaci",
        privacy: "elemento",
        terms: "Termini",
        about_us: "Chi siamo",
        landings: "Approdo",
        popup: "Apparire",
        static: "Statico",
      },
    }, // End of pages

    /** {@see BPageShopPermission} **/
    permissions: {
      menu: {
        persons: "Personale",
        roles: "Ruoli",
        api: "API",
      },
      /** {@see BPageShopPermissionStaff} **/
      shop_permissions: {
        menu: {
          users: "Elenco del personale",
          new_user: "Aggiungi nuovo personale",
          new_user_message:
            "Utenti che avranno accesso alla dashboard e alle sezioni di gestione di questo negozio.",
        },
        delete_alert: {
          title: "Rimuovere l'accesso",
          message: "Vuoi eliminare questo utente?",
          action: "Eliminare",
        },
        notifications: {
          add_success_title: "Aggiungi accesso",
          add_success: "Nuovo accesso aggiunto.",
          delete_success_title: "Elimina l'accesso",
          delete_success: "Accesso cancellato.",
        },
      },

      /** {@see BPageShopPermissionApi} **/
      shop_api: {
        title: "Memorizza le chiavi di accesso",
        message:
          "Queste chiavi vengono utilizzate per creare token di accesso dal server. Si noti che le chiavi sono riservate e solo sul server in un modo che non è visibile ad altri.",
      },
    }, // End of permissions
    /** {@see BPageShopApplications} **/
    applications: {
      /** {@see BPageShopApplicationsPwa} **/
      pwa: {
        title: "Applicazione Web",
        sub_title: "Visualizza l'app web del tuo negozio qui",
        message:
          "Nota: puoi modificare la pagina di benvenuto del tuo sito Web sul tuo iPhone e iPad nell'app iOS",
        ios_app: "app per iOS",
      },

      /** {@see BPageShopApplicationsIos} **/
      ios: {
        title: "app per iOS",
        sub_title: "Presto sarai in grado di creare un'app iOS per il tuo negozio.",
        message:
          "Dimensione massima del file: 512 KB, puoi caricare file di dimensioni fino a 1 MB, a condizione che il nostro sistema di compressione sia in grado di ridurre le dimensioni a 512 KB. L'immagine caricata verrà ridimensionata in modo intelligente.",
      },
      /** {@see BPageShopApplicationsAndroid} **/
      android: {
        title: "Applicazione Android",
        sub_title: "Crea la tua app per Android",
        message:
          "Compila questo modulo e premi il tasto build. Non ci sarà bisogno di nient'altro. Tutti i passaggi del processo di creazione e firma dell'app vengono eseguiti sui server cloud. L'app finale verrà caricata su tutti gli AppStore.",
        server_un_available:
          "Sperimentalmente, il server delle applicazioni non è connesso in questo momento.",
        app_building_progress: "La tua app è in fase di creazione.",
        app_build_success: "La tua app è pronta.",
        download_app_action: "Scarica l'app",
        firmware_version: "Versione del firmware",
        main_info: "Pacchetto applicativo",
        package_name_input_message: "Assicurati che il nome del pacchetto sia univoco.",
        package_name_input_alert:
          "Se modifichi questo nome, non potrai più aggiornare le tue app precedenti in AppStore e installarne una nuova. Tieni presente che anche gli utenti delle versioni precedenti dell'app non saranno in grado di accedere ai propri account.",
        version_input: "Versione",
        version_input_message:
          "Questo numero deve essere sempre maggiore del suo valore precedente.",
        version_name_input: "nome della versione",
        version_name_input_message:
          "Inserisci un nome univoco per questa versione dell'app.",
        use_selldone_key: "Chiavi di default Selldone",
        use_last_key: "Chiave salvata",
        use_new_key: "Nuova chiave",
        appearance: "Aspetto",
        app_name_input: "Nome dell'applicazione",
        app_name_input_message: "Questo sarà il nome principale della tua app.",
        app_title_input: "titolo dell'app",
        app_title_input_message: "Questo titolo viene visualizzato nella parte superiore dell'app.",
        app_title_input_placeholder: "Inserisci un titolo",
        app_icon_input: "Icona dell'app",
        app_icon_input_placeholder: "Seleziona il file zip delle icone delle app.",
        generate_icon_pack_action: "Pacchetto Icone Costruisci",
        splash_design: "Progettazione della schermata iniziale",
        splash_logo_input: "Logo della schermata iniziale",
        splash_logo_input_placeholder: "Seleziona un'immagine per la schermata iniziale.",
        splash_title_input: "Titolo della schermata iniziale",
        splash_title_input_placeholder: "Immettere un titolo per la schermata iniziale",
        splash_title_input_message:
          "Questo titolo verrà visualizzato con caratteri di grandi dimensioni.",
        splash_message_input: "Messaggio schermata iniziale",
        splash_message_input_placeholder: "Messaggio ...",
        splash_message_input_message:
          "Questo messaggio verrà visualizzato come miniatura di seguito.",

        dark_theme: "Tema scuro",
        light_theme: "tema leggero",
        build: "Costruire",
        building_info:
          "La creazione di un'applicazione su un server cloud richiede da 10 secondi a diversi minuti. Per favore sii paziente. Il collegamento al file di download apparirà qui una volta che l'applicazione è pronta.",
        update_mode_action: "Aggiornare",
        build_mode_action: "Crea app",
        notifications: {
          icon_pack_not_valid_error: "Il file non è corretto.",
          start_building_title: "Costruzione ...",
          start_building_message:
            "Richiesta per la creazione di un'applicazione Android inviata.",
          build_success_title: "Congratulazioni",
          build_success:
            "La tua app per Android è pronta e puoi scaricarla ora.",
        },
      },
    }, // End of applications

    /** {@see ShopAutomation} **/
    automation: {
      menu: {
        autopilot: "Autopilota",
      },
    },

    /** {@see BPageShopSetting} **/
    edit: {
      menu: {
        delete: "Elimina negozio",
        activity_time: "Tempo",
        footer: "Menù",
        info: "Informazioni",
        notification: "Notifiche",
        home: "Casa",
        locations: "Posizioni",
        license: "Licenza",
        theme: "Tema",
        sms: "Sms",
        email: "E-mail",
        domain: "Dominio",
        verifications: "Verifiche",
        flow: "Fluire",
        business_model: "Modello di business",
      },
      delete_dialog: {
        title: "Elimina negozio",
        message: "Vuoi eliminare <b>{title}</b> Store?",
        action: "Elimina negozio",
      },

      notifications: {
        delete_success: "Negozio eliminato.",
      },

      /** {@see BPageShopSettingInfo} **/
      info: {
        title_tab: {
          title: "Nome azienda e lingua",
          subtitle: "Imposta un nome pubblico e una lingua predefinita.",
        },
        name_tab: {
          title: "Acquista nome univoco",
          subtitle: "È il nome utente della tua attività.",
        },

        description_tab: {
          title: "La tua storia d'affari",
          subtitle:
            "Scrivi della tua attività e della sua proposta di valore unica.",
        },
        contact_tab: {
          title: "Contatto e attività locali",
          subtitle:
            "Informazioni di contatto pubbliche e configurazione dell'attività locale di Google.",
        },
        image_tab: {
          title: "elemento",
          subtitle: "Seleziona un logo unico per il tuo marchio.",
        },
        favicon: {
          title: "elemento",
          subtitle:
            "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        },
      },

      /** {@see ShopEditMenuFooter} **/
      badge: {
        external_title: "Gestisci badge esterni",
        external_message:
          "Qui puoi inserire l'indirizzo dell'immagine del badge e il link ad essa. Gli URL devono provenire da un sito Web approvato.",
      },
      /** {@see BPageShopSettingMenus} **/
      edit_menu: {
        title: "Menù",

        footer: {
          title: "Menù a piè di pagina",
          sub_title:
            "Puoi configurare il menu in basso della pagina del tuo negozio qui. Questi menu possono essere home page, pagine progettate o collegamenti esterni.",
        },

        header: {
          title: "Menu di intestazione",
          sub_title:
            "Questo menu viene visualizzato solo su schermi più grandi dei dispositivi mobili e nella parte superiore della home page, delle categorie di prodotti, degli arrivi e delle pagine dei prodotti.",
        },

        save_menu: "Salva menu",
        dialog: {
          main_pages: "Pagine principali",
          custom_pages: "Pagine di destinazione",
        },
        table: {
          home: "Casa",
          shop: "Negozio",
          blogs: "elemento",
          about_us: "Chi siamo",
          privacy: "elemento",
          terms: "Condizioni d'uso",
          faq: "FAQ",
          contact_us: "Contattaci",
        },
        notifications: {
          save_success: "Il menu è stato aggiornato correttamente.",
        },
      },

      /** {@see ShopSocialField} **/
      social: {
        title: "Social media",
        message:
          "Inserisci il tuo link ufficiale ai social media in questa sezione. Segui le istruzioni per ogni articolo per confermare gli indirizzi.",
      },

      /** {@see BShopSettingWorkingDays} **/
      time: {
        title: "Giorni lavorativi",
        sub_title: "Imposta giorni e orari lavorativi",
        days_open_input: "Giorni",
        days_open_input_nodata: "Seleziona almeno un giorno",
        start_time_input: "Orario di inizio dell'attività del negozio",
        start_time_input_hint: "Orari di apertura del negozio",
        end_time_input: "Orario di chiusura del negozio",
        end_time_input_hint: "Memorizza l'ora di fine dell'attività",
        customer_support_service: "Responsabilità e servizio clienti",
        response_time_input: "Stato del servizio clienti",
        support_24h: "24 ore 7 giorni su 7",
        support_normal: "Solo in orario d'ufficio",
        no_service: "No",
        notifications: {
          update_success: "Negozio modificato.",
        },
      },
    }, // End of edit
  }, // End of admin_shop

  /** {@see BCategoryInput} **/
  category_select: {
    category_input_no_category: "Nessuna categoria",
  },

  /** {@see BProductAddFull} **/
  add_product: {
    title_new: "Nuovo prodotto",
    title_new_category: "Nuova categoria",
    title_new_drop_shipping: "Aggiungi dropshipping",

    title_edit: "Modifica prodotto",
    delete: "Elimina prodotto",
    completed: "Completato",

    menu: {
      type: "Tipologia di prodotto",
      general_info: "Informazioni generali",
      rating: "Sondaggio e caratteristiche",
      spec: "Specifiche",
      images: "Immagini",
      price: "prezzo",
      inputs: "Ingresso",
      outputs: "produzione",
      extra: "Dettagli aggiuntivi",
      review: "Recensione del prodotto",
      inventory: "Inventario / Varianti",
      change_status: "Cambiare stato",
    },
    menu_extra: {
      description: "Descrizione",
      form: "Modulo",
      no_spec: "Nessuna specifica",
      has_spec: "Con specifiche",
    },

    select_type: {
      title: "Scegli il tipo di prodotto o servizio",
    },

    /** {@see BProductEditInfo} **/
    edit_info: {
      category_input: "Categoria",
      category_input_msg: "elemento: elemento elemento negozio elemento",
      product_name: "Nome del prodotto*",
      product_name_placeholder: "Il nome del tuo prodotto qui..",
      product_code: "Codice prodotto (inglese)",
      sku: {
        label: "SKU",
        message: "elemento elemento elemento",
      },
      mpn: {
        label: "MPN",
        message: "elemento elemento elemento",
      },

      external_link: "Link esterno",

      brand_placeholder: "Marca Es. Mela.. (opzionale)",

      is_original: "Si tratta di un prodotto originale?",
      is_original_message:
        "Se non imposti il tuo prodotto originale, verrà mostrato il badge falso per questo prodotto.",
      return_warranty:
        "Per quanti giorni questo prodotto ha una garanzia di restituzione?",
      warehouse_section: "Magazzino e produzione",
      conditions_section: "Condizioni del prodotto",
      warranty_section: "Garanzia e consegna",

      unit_input: "Unità di prodotto",
      unit_message: "Immettere l'unità se necessario. Es: kg, metro, ...",

      unit_section: "Unità di prodotto",

      unit_float: "Unità galleggiante (presto)",
      unit_float_hint:
        "Ad esempio, il cliente può ordinare 3 kg di frutta, ma l'importo inviato al cliente è leggermente diverso dall'importo ordinato.",
      unit_float_message:
        "Durante l'elaborazione dell'ordine, l'importo consegnato potrebbe differire dall'importo ordinato. Il sistema calcola automaticamente questa differenza e la registra come tuo debito verso il cliente, che può essere applicato agli ordini successivi.",

      marketplace: {
        // Vendor panel > Fixed mode
        vendor_panel_message:
          "Il <b>{vendor_name}</b> è il proprietario del prodotto.",
        // Marketplace panel > Subscription products
        subscription_message:
          "I prodotti in abbonamento possono avere un fornitore, quindi puoi crearli nel pannello del fornitore o assegnare loro un fornitore nella fase di creazione. Il venditore selezionato sarà il proprietario del prodotto.",
        default_message:
          "Puoi specificare se questo prodotto appartiene a un fornitore e quindi solo un venditore può venderlo, oppure questo prodotto appartiene al Marketplace e più di un fornitore può venderlo.",

        single_vendor_title: "Fornitore unico",
        single_vendor_desc:
          "Questo prodotto appartiene a un fornitore e il fornitore selezionato può gestirlo.",

        multi_vendors_title: "Più fornitori",
        multi_vendors_desc:
          "Questo prodotto appartiene al marketplace e può essere modificato solo nel pannello del marketplace.",
      },

      category: {
        subtitle:
          "Configura la categoria e il titolo da visualizzare nella tua inserzione.",
      },
      unit: {
        subtitle:
          "Puoi personalizzare la visualizzazione dei prezzi e degli elementi di invito all'azione sulla pagina del prodotto.",
      },
      custom_pricing: {
        title: "Modulo prezzi personalizzato",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        valuation_need_saved_product_message:
          "Salvare prima il prodotto, quindi assegnare un modello di valutazione.",
        assign_valuation_message:
          "Si prega di assegnare un modello di valutazione a questo prodotto.",
        edit_pricing_action: "Modifica modulo prezzi",
        add_pricing_action: "Crea nuovo modulo prezzi",
      },
      action: {
        title: "Pulsante acquisto personalizzato",
        message:
          "Puoi cambiare l'icona seguendo questo schema: {icon name} didascalia...",
        placeholder: "elemento elemento elemento elemento...",
        multi_language_dialog_title: "elemento elemento elemento elemento",
      },
      external: {
        not_available_message:
          "Azione extra disponibile con le licenze Company ed Enterprise.",
        available_message: "Puoi aggiungere un ulteriore invito all'azione esterno.",
        input_label: "Seconda call to action",
      },
      warehouse: {
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      gtin: {
        hint: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        label: "prodotti elemento elemento elemento elemento",
        placeholder: "elemento elemento elemento elemento.. (opzionale)",
      },
      hsn: {
        hint: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        placeholder: "6~16 elemento HSN codice.. (opzionale)",
        label: "HSN",
      },
      condition: {
        label: "prodotto elemento elemento elemento negozio",
        message: "Scegli la condizione di questo prodotto.",
        subtitle:
          "Informa i tuoi clienti sulle condizioni e sulla marca del prodotto che offri.",
      },
      brand: {
        label: "Marca",
        placeholder: "Marca Es. Mela.. (opzionale)",
      },
      warranty: {
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

        label: "Garanzia",
        placeholder: "elemento 24 elemento elemento.. (opzionale)",
      },
      status: {
        title: "Stato",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      profiles: {
        title: "Profili",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      shortcuts: {
        title: "elemento prodotto elemento elemento categorie",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
    },

    /** {@see BProductEditFeatures} **/
    rating_pros_cons: {
      title: "Sondaggio",
      message:
        "Inserisci un elenco di specifiche del prodotto per consentire ai tuoi clienti di valutare il tuo prodotto. (Fino a 5 articoli)",
      rating_input: "Sondaggi",
      rating_input_message: "Puoi aggiungere 5 elementi al sondaggio.",
      rating_input_placeholder:
        "Scrivi qui la domanda del tuo sondaggio personalizzato... e premi Invio!",

      item_unit: "elemento",

      pros_title: "Professionisti",
      pros_message: "Inserisci le caratteristiche del prodotto. (Fino a 5 articoli)",
      pros_input_title: "Titolo della funzione",
      pros_input_value: "Valore della caratteristica",
      pros_group: "Pro del prodotto",

      cons_title: "contro",
      cons_message: "Inserisci i punti deboli del prodotto. (Fino a 5 articoli)",
      cons_input_title: "Titolo di debolezza",
      cons_input_value: "Valore di debolezza",
      cons_group: "Debolezze del prodotto",

      select_from_list: "Seleziona dall'elenco",

      suggestion_rating: [
        "Buona qualità",
        "Buon valore",
        "Consiglierei",
        "Caratteristiche e capacità",
        "Facile da usare",
        "Ben progettato",
        "Prestazioni affidabili",
        "Assistenza clienti efficace",
        "Tempi di consegna soddisfacenti",
        "Il prodotto corrisponde alla descrizione",
        "Durevole e di lunga durata",
        "Conveniente",
        "Confezione attraente",
        "Design innovativo",
        "Ecologico",
        "Istruzioni/manuale sufficienti",
        "Ha soddisfatto le aspettative",
        "Interfaccia intuitiva",
        "Alta efficienza",
        "Ottimo servizio post-vendita",
        "Funzionalità versatile",
        "Prezzi competitivi",
        "Disponibilità di pezzi di ricambio/accessori",
        "Marchio affidabile",
        "Sicuro da usare",
        "Servizio tempestivo e accurato",
      ],

      notifications: {
        add_rating_success: `Aggiunta opzione {rating_name} per la valutazione degli utenti.`,
        delete_rating_success: `Opzione di valutazione utente {rating_name} eliminata.`,

        add_pros_success: "Funzionalità del prodotto aggiunta.",
        delete_pros_success: "Funzionalità del prodotto rimossa.",

        add_cons_success: "Debolezza del prodotto aggiunta.",
        delete_cons_success: "Debolezza del prodotto rimossa.",
      },
    },

    /** {@see BProductEditSpec} **/
    edit_spec: {
      title: "Specifiche tecniche",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      manual: {
        title: "Manuale",
        subtitle:
          "Aggiungi manualmente le specifiche del prodotto definendo gruppi e coppie chiave-valore.",
        add_group_action: "Aggiungere gruppo",
        add_item_action: "Aggiungi valore specifica",
      },
      import: {
        subtitle:
          "Puoi importare specifiche tecniche di prodotti simili.",
        action_title: "Importa",
        action_subtitle: "elemento elemento elemento elemento prodotto.",
      },
      ai: {
        title: "AI",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        action_title: "automatico elemento elemento AI",
        action_subtitle: "Creare le specifiche del prodotto tramite prompt astratto.",
      },

      group_input_header: "Aggiungere gruppo",
      item_title_header: "Aggiungi articolo",
      group_input: "Intestazione del gruppo",
      group_input_message: "Inserisci il titolo.",
      group_add_action: "Aggiungere gruppo",

      item_title_input: "Titolo",
      item_title_input_message: "Inserisci il titolo della funzione.",

      item_value_input: "Valore",
      item_value_input_message: "Immettere il valore della caratteristica.",

      add_item_action: "Aggiungi articolo",

      dialog: {
        title: "Inserisci le specifiche tecniche",
        code_input: "numero identificativo del prodotto",
        code_input_message: "Codice Prodotto: P0000...",
        spec_view_title: "Specifiche del prodotto selezionato",
        spec_view_subtitle:
          "Le specifiche sono state importate dal prodotto scelto.",
        set_spec_action: "Specifiche tecniche duplicate",
      },
      notifications: {
        enter_group_title_error: "Inserisci il valore del titolo",
        enter_item_title_and_value_error:
          "Immettere il titolo e il valore della funzione",
        spec_saved_success: "Specifiche del prodotto salvate.",
      },
      dialog_ai: {
        title: "elemento elemento prodotto elemento",
        prompt: {
          title: "Panoramica prodotto",
          subtitle:
            "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        },
        generated_spec: {
          title: "AI-elemento elemento",
          subtitle:
            "Queste specifiche sono state generate dall'intelligenza artificiale.",
        },
        inputs: {
          prompt: {
            label: "Dettagli prodotto",
            placeholder: "elemento elemento prodotto elemento...",
          },
        },
        actions: {
          run: {
            title: "Genera specifiche",
            subtitle:
              "Fare clic per creare automaticamente le specifiche del prodotto dalla panoramica fornita.",
          },
          add_generated_spec: "Aggiungi specifiche generate",
        },
      },
    },
    /** {@see BProductEditImages} **/
    edit_images: {
      title: "Immagine principale",
      main_image_input_nodata: "Carica l'immagine del prodotto.",
      main_image_input_message: "Questa immagine viene visualizzata nell'elenco dei prodotti.",
      preview: "Anteprima",
      image_style: "Stile immagine",
      background_is_white: "Sfondo bianco",
      background_is_white_msg: "L'immagine ha lo sfondo bianco??",

      images: {
        title: "Galleria immagini prodotto",
        sub_title:
          "Carica le immagini dei prodotti, comuni a tutte le varianti di prodotto, in questa sezione.",
      },
      video: {
        title: "video",
        sub_title:
          "Innanzitutto, carica il video del tuo prodotto su YouTube, quindi inserisci l'URL del video qui.",
      },
      change_bg_ai: {
        title: "crea immagine elemento nuovo sfondo",
        inputs: {
          prompt: {
            label: "Descrizione sfondo",
            placeholder: "elemento elemento elemento sfondo...",
          },
        },
        actions: {
          reimagine: {
            title: "Genera nuova immagine",
            subtitle: "Reinventa l'intera immagine con un nuovo sfondo.",
          },
          replace: {
            subtitle: "elemento elemento elemento sfondo.",
          },
        },
      },
    },
    /** {@see BProductEditPrice} **/
    pricing: {
      edit_price: "Prezzo",
      price_input: "prezzo",
      currency_input: "Moneta",
      currency_input_messages: "Il prezzo è calcolato in questa valuta.",
      commission_input: "Commissione",
      commission_message:
        "Questa opzione è utile solo per particolari tipi di commercianti come i grossisti. Se non sei un grossista, lascia vuota questa opzione. Il prezzo che gli acquirenti vedono è la somma del prezzo e della commissione. Per aggiungere le tasse fare clic su Contabilità > Tasse.",
      add_commission_action: "Aggiungi commissione",

      price_label_input: "Etichetta prezzo",
      price_label_message:
        "Aggiungi informazioni extra sul prezzo come ($ 1,5/Fl Oz). Casi d'uso: alimentari, FMCG.",
      add_price_label_action: "Aggiungi l'etichetta del prezzo",
      discount_input: "Sconto",
      discount_input_message: "Tasso di sconto",
      has_discount_period_input: "Questo sconto è valido per un periodo specifico?",
      discount_timespan: "Inserisci il periodo di sconto.",
      start_input: "Inizio",
      end_input: "Fine",
      start_input_placeholder: "Seleziona l'ora di inizio",
      end_input_placeholder: "Seleziona l'ora di fine",
      independent_price: "Il prezzo solo per questa variante",
      same_price: "Il prezzo del prodotto principale",
      variant_pricing_message:
        "Selezionando questa opzione è possibile impostare il prezzo di questa variante indipendentemente dal prodotto principale.",

      subtitle: {
        marketplace:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        subscription:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        service:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        file: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        default:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      extra_pricings: {
        title: "Aggiungi prezzo extra",
        subtitle: "Implementa prezzi dinamici in base alla quantità acquistata.",
      },

      vendor: {
        title: "Prezzi venditore",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        manage_vendors: "Gestisci venditori",
        vendor_product_pricing_link:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        vendor_variant_pricing_link:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
    },
    /** {@see ProductEditInputs} **/
    inputs_edit: {
      title: "Modulo di immissione delle informazioni sull'acquirente",
      sub_title:
        "Puoi creare un modulo di inserimento dati per ogni prodotto, in modo che gli acquirenti ti inviino informazioni quando acquistano un prodotto. Ad esempio, questa informazione potrebbe essere un nome per un'incisione su una pietra.",
      message_input: "Messaggio all'utente",
      message_input_message:
        "Questo messaggio verrà mostrato al cliente al momento dell'acquisto dei prodotti.",
      inputs_form: "Struttura delle informazioni (input)",
      inputs_hint:
        "Seleziona o inserisci le informazioni richieste.",
    },

    /** {@see BProductEditExtra} **/
    extra_edit: {
      physical: {
        title: "Informazioni sulla spedizione",
        sub_title:
          "Il costo e il tempo di preparazione sono calcolati sulla base delle informazioni in questa sezione. Assicurati di inserire le informazioni in base alle unità selezionate nel negozio (peso, dimensioni, distanza).",
      },

      notifications: {
        save_title: "Imballaggio aggiornato",
        save_msg: "Informazioni sulla confezione del prodotto aggiornate correttamente.",
      },

      order_limit: {
        title: "Limiti ordine",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        no_limit: "Nessun limite",
        minimum_purchase_quantity: "Quantità minima di acquisto",
        maximum_purchase_quantity: "Quantità massima di acquisto",
      },
    },

    variants: {
      not_available:
        "Al momento non è possibile selezionare una variante per questo tipo di prodotto.",
    },

    delete_product: {
      title: "Rimuovere il prodotto",
      message: `Vuoi eliminare <b>{product_title}</b> ?`,
      tips: "Sei sicuro di voler eliminare questo elemento?",
    },
  },

  /** {@see BProductExtraPricingAdd} **/
  extra_pricing_add_dialog: {
    title: "elemento prezzi elemento elemento {min}",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    min_quantity: "Quantità minima",
  },
  /** {@see BProductInventoryManagementPhysical} **/
  product_inventory_management_physical: {
    subtitle: {
      dropshipping:
        "L'inventario per i prodotti in dropshipping è impostato dai grossisti e non può essere modificato qui.",
      marketplace:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      default: "Specifica qui il conteggio dell'inventario del prodotto.",
    },
    menu: {
      add_bulk: {
        title: "Aggiunta massiva",
        subtitle: "Aggiungi più varianti in un'unica azione.",
      },
      edit_property_set: {
        title: "elemento elemento elemento",
        subtitle: "Modifica i nomi, le icone e gli ordini delle varianti.",
      },
    },
  },

  /**
   * @see USmartMenu
   */
  smart_menu: {
    show_delete_items: "Mostra elementi eliminati",
  },

  /** {@see BProductGoogleCategoryInput} **/
  google_product_category_input: {
    label: "Codice categoria prodotto Google",
    hint: "Rappresenta la categoria del tuo prodotto secondo la tassonomia dei prodotti di Google.",
    placeholder: "elemento prodotto elemento servizio categoria.. (opzionale)",
  },
  /** {@see LogisticProfileType} **/
  LogisticProfileType: {
    WARRANTY: {
      title: "Garanzia",
      desc: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    RETURN_POLICY: {
      title: "Politica di reso",
      desc: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    GUIDE: {
      title: "Guida",
      desc: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    SHIPPING: {
      title: "Spedizione",
      desc: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
  },
  /** {@see BProductProfileLogistic} **/
  product_logistic_profile: {
    dialog: {
      title: "Seleziona profilo logistico",
      add_new_action: "Aggiungi nuovo profilo",
      add_new_disable_msg: "Proprietario marketplace",
    },
  },

  /**
   * @see BPageShopPagesPopups
   */
  b_shop_popups: {
    title: "Gestione popup",
    subtitle:
      "Crea finestre pop-up personalizzate, intelligenti e interattive.",
    add_action: "aggiungi nuovo elemento",
  },

  /** {@see BProductProfileTax} **/
  product_tax_profile: {
    description: {
      default: "Predefinito",
      dedicated: "Dedicato",

      subscription: "Possiamo applicare l'imposta solo nella fase di creazione del pagamento.",
      is_disabled: "elemento imposta profilo elemento disabilitato! (⚠️avviso)",
      shipping: "Spedizione",
      fixed_rate: "TAX",
      location_based_rate: "imposta: elemento elemento",
      shipping_location_based_rate: "spedizione: elemento elemento",
      include_in_price: "Incluso nel prezzo",
    },
    dialog: {
      header: "seleziona imposta profilo",

      title: "Profilo fiscale",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

      action_manage: "Gestisci imposte",
      action_manage_sub: "negozio > elemento > imposta",

      subscription_tips:
        "Quando selezioni un profilo fiscale per il prodotto in abbonamento, aggiorniamo il<code>codice fiscale</code> e impostiamo la modalità inclusiva/esclusiva sul tuo fornitore di servizi di pagamento. Il profilo fiscale selezionato specifica se il prezzo è considerato comprensivo di tasse o escluso di tasse. Uno tra <code>inclusive</code> o <code>exclusive</code>. Una volta specificato come inclusivo o esclusivo, non può essere modificato.<br /><br /><b>Importante!</b> Dopo aver modificato il profilo fiscale, devi fare clic sui piani tariffari nella scheda Prodotto > Inventario e fare clic sul pulsante Salva per applicare le modifiche.",
    },
  },

  /**
   * @see BProductVendorAbstractView
   */
  product_vendor_profile: {
    vendor: {
      subtitle:
        "Il prezzo e la quantità di questo prodotto sono stabiliti da un particolare venditore a cui appartiene.",
    },
    vendors: {
      subtitle:
        "Ecco un elenco dei fornitori del prodotto. La quantità e il prezzo saranno stabiliti dai fornitori.",
    },
  },
  /**
   * @see BVendorAdd
   */
  vendor_add: {
    menu: {
      profile: "profilo & elemento",
      business: "azienda & pagamento",
      documents: "Documenti",
      page: "pagina elemento",
      shipping: "Spedizione",
      access: "Accesso",
      critical_zone: "Zona critica",
    },

    profile: {
      title: "Informazioni venditore",
      subtitle: "Queste informazioni vengono mostrate pubblicamente ai clienti.",
      action_sub_caption: "elemento prodotti inserzione pagina.",
      action_see_listing_page: "elemento inserzione pagina",
      send_invitation_email: "elemento elemento Email",
      invitation_link: "elemento link",
    },

    profiles: {
      title: "Profili",
      subtitle: "Puoi assegnare la posizione a questo venditore.",
    },
    map: {
      no_map_message:
        "Assegna una posizione al fornitore se si tratta di un fornitore basato sulla posizione.",
    },
    page: {
      title: "elemento pagina",
      subtitle:
        "Imposta una pagina di destinazione personalizzata per il venditore, fornendogli un collegamento univoco alla sua pagina dedicata.",
      action_set_page: "elemento elemento pagina",
      action_sub_caption: "elemento elemento pagina.",
      vendor_has_landing_msg: "Il venditore ha una pagina di destinazione personalizzata.",
      no_landing_selected_msg: "elemento elemento pagina elemento.",
      no_landing_page: "elemento elemento pagina",
      we_can_create_dedicated_landing_msg:
        "Possiamo creare una landing page dedicata per te.",
    },
    contact: {
      title: "Informazioni di contatto",
      subtitle: "elemento elemento elemento elemento dettagli.",
    },
    business: {
      title: "Informazioni aziendali",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    bank: {
      title: "Informazioni di pagamento",
      subtitle: "Inserisci qui le tue coordinate bancarie per i pagamenti.",
    },
    default_pricing: {
      title: "Prezzo predefinito",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      no_pricing: "Nessun prezzo",
    },
    shipping: {
      title: "Spedizione",
      subtitle: "I venditori possono impostare i propri servizi di spedizione e corrieri.",
      shipping_services: "Servizi di spedizione",
      total_number_of_services:
        "Il numero totale di servizi di spedizione di cui dispone il venditore.",
      couriers: "corrieri",
      total_couriers_count: "Il numero totale di corrieri di cui dispone il venditore.",
    },
    configuration: {
      title: "Configurazione",
    },
    delete: {
      title: "Rimuovi venditore",
      action: "Rimuovi venditore",
      verify_description:
        "So che tutte le relazioni con i prodotti del fornitore verranno rimosse!",
      verify_title: "Voglio eliminare questo fornitore.",
    },

    send_invitation_tips:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    only_marketplace_owner_can_edit_user:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    vendor_is_disable_msg: "venditore elemento disabilitato.",
    email_not_match_with_user_msg:
      "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione. {user_name} {user_email} {email}</b><b></b>",

    order_information_email_to_email:
      "Invieremo le informazioni sugli ordini a <b>{email}</b>.",

    set_a_user_for_the_vendor_first_msg: "Impostare prima un utente per il fornitore.",

    inputs: {
      slug: {
        label: "elemento",
        placeholder: "elemento elemento elemento elemento...",
        hint: "Modifica il percorso della pagina di destinazione dinamica del fornitore.",
      },
      email: {
        message: "Questa email riceverà tutte le notifiche e gli aggiornamenti.",
      },
      business: {
        false_description: "elemento elemento elemento elemento elemento.",
        true_description: "Opero come entità commerciale legalmente riconosciuta.",
        false_title: "elemento",
        true_title: "azienda",
      },
      bank: {
        hint: "Il nome della banca presso la quale il venditore ha il proprio conto.",
        placeholder: "elemento elemento elemento..",
      },
      account_name: {
        hint: "Dovrebbe corrispondere al nome associato al conto bancario.",
        placeholder: "elemento elemento..",
      },
      account_number: {
        hint: "elemento venditori elemento elemento elemento.",
        placeholder: "elemento elemento elemento elemento..",
      },
      routing_number: {
        hint: "Questo numero varia in base al paese. Viene utilizzato per identificare la filiale bancaria specifica utilizzata dal venditore.",
        placeholder: "Il tuo numero di routing bancario, codice di ordinamento o numero BSB.",
      },
      iban: {
        hint: "Numero di conto bancario internazionale): se la banca del venditore è in Europa o in altri paesi.",
        placeholder: "elemento IBAN elemento.. elemento. DE89 3704 0044 0000 0000 00",
      },
      swift: {
        hint: "Numero di conto bancario internazionale): se la banca del venditore è in Europa o in altri paesi.",
        placeholder: "elemento Swift codice/BIC..",
      },
      branch_address: {
        hint: "L'indirizzo della filiale bancaria in cui il venditore ha il proprio conto.",
        placeholder: "elemento elemento indirizzo..",
      },
      enable: {
        label: "venditore stato",
        hint: "Seleziona o inserisci le informazioni richieste.",
        true_description:
          "Saranno in grado di vendere i loro prodotti attraverso il tuo mercato.",
      },
      access: {
        label: "venditore elemento & accesso",
        true_description:
          "Il venditore ha un pannello dedicato per aggiornare quantità e prezzo.",
        hint: "Seleziona o inserisci le informazioni richieste.",
        false_description: "Il venditore non ha accesso a nulla.",
      },

      logo: {
        label: "venditore elemento",
      },
      description: {
        placeholder: "scrittura elemento elemento descrizione...",
      },
    },
  },

  /**
   * @see BVendorDocumentsList
   */
  vendor_documents_list: {
    title: "Documenti",
    action_upload_doc: "carica elemento",
    vendor_subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    marketplace_subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    upload_dialog: {
      title: "Carica documento",
      type: {
        title: "documento tipo",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
    },
  },

  /**
   * @see BProductBadgesManage
   */
  product_badges: {
    title: "Badge",
    subtitle: "aggiungi elemento modifica elemento prodotto elemento.",
    only_marketplace_owner_msg: "elemento marketplace elemento",
    create_new_badge_action: "Crea nuovo badge",
    select_a_badge: "seleziona elemento elemento...",
    inputs: {
      custom: {
        false_description: "prodotti elemento elemento elemento elemento.",
        false_title: "automatico",
        true_title: "elemento prodotti elemento",
        true_description: "Aggiungi badge personalizzati nella pagina del prodotto.",
      },
    },
    add_custom_badge: {
      title: "elemento elemento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      show_advanced_options: "mostra elemento elemento",

      inputs: {
        title: {
          placeholder: "elemento titolo...",
        },
        image: {
          label: "immagine",
          message: "elemento immagine elemento: 128KB",
          placeholder: "seleziona elemento elemento immagine",
        },
        pattern: {
          label: "elemento",
          message:
            "Mostra automaticamente questo badge per i prodotti che hanno questo valore corrispondente nelle specifiche. Supportato dall'espressione regolare.",
          placeholder: "elemento mostra elemento elemento prodotti scrittura: *.*",
        },
      },
      notifications: {
        badge_added: "Il badge è stato aggiunto con successo!",
        badge_updated: "Il badge è stato aggiornato con successo!",
        item_not_found_error:
          "Impossibile trovare l'articolo. Aggiorna la pagina o contatta l'assistenza.",
      },
    },
  },
  /**
   * @see BProductTagsInput
   */
  product_tags: {
    title: "Tag",
    tips: [
      "Puoi filtrare i prodotti in base ai tag nelle <b>pagine di destinazione</b>.",
      "Tu e i tuoi clienti potete cercare questi tag nella barra<b>search</b>.",
      "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b><b></b>",
    ],
    inputs: {
      tags: {
        placeholder: "Collega i tag qui e premi Invio. ex. nuova collezione",
      },
    },
    notifications: {
      tags_updated: "I tag sono stati aggiornati con successo.",
    },
  },

  /**
   * @see VPageVendorShippingTransportation
   */
  vendor_shipping_services: {
    title: "Servizi di spedizione",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

    subtitle_pickup:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    action: "Aggiungi servizio",

    add_dialog: {
      select_service_msg:
        "I metodi di spedizione sono stabiliti dal marketplace e i clienti possono sceglierli. I venditori non hanno alcun controllo su queste opzioni ma possono integrare il proprio pannello con i servizi di spedizione per acquistare direttamente le etichette. Seleziona un metodo dall'elenco seguente per visualizzare i servizi disponibili. Scegli un servizio di spedizione dall'elenco seguente. Qui vengono visualizzati solo i servizi disponibili che possono essere aggiunti al tuo negozio.",
      no_available_service: "elemento disponibile servizio!",
    },
  },
  /**
   * @see VPageVendorShipping
   */
  vendor_shipping: {
    services: "Servizi",
  },

  /** {@see BProductProfileMap} **/
  product_location_profile: {
    title: "Posizione",
    empty_subtitle:
      "Assegna una posizione al prodotto se si tratta di un articolo basato sulla posizione.",
    dialog: {
      header: "seleziona elemento profilo",
      action_new_location: "Aggiungi nuova posizione",
      title: "elemento profilo",
      subtitle:
        "Puoi appuntare i prodotti sulla posizione della mappa assegnando tag di posizione ai prodotti.",
      tips: "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b><b></b><b></b><b></b>",
    },
  },

  /** {@see BTranslationButton} **/
  translation_button: {
    header: "Multilingua",
    auto_action: "Traduzione automatica",
    premium_user_only: "Utenti premium",
  },

  /** {@see BProductProfileInclude} **/
  product_include_profile: {
    subtitle:
      "Includere un elenco di articoli forniti con il prodotto o il pacchetto di servizi.",
    dialog: {
      header: "prodotto elemento elementi",
      title: "Elementi inclusi",
      subtitle: "Questa è una raccolta di articoli forniti con il prodotto.",
      action_manage: "Gestisci elementi",
      action_disable_msg: "Proprietario marketplace",
      select_items_tips:
        "Crea o scegli i componenti del pacchetto forniti con il prodotto o servizio. Utilizza questa funzione per enfatizzare ciò che i clienti possono aspettarsi di ricevere al momento dell'acquisto dell'articolo. Consigliamo di utilizzare questa funzione solo quando è fondamentale per il cliente comprendere i contenuti inclusi, come ad esempio quando si acquista uno smartphone.",
      create_item_tips:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      create_new_item_action: "Crea nuovo elemento incluso",
    },
  },

  /** {@see BPageProduct} **/
  product_admin: {
    products_list: "Elenco prodotti",
    product: "Prodotto",

    menu: {
      edit: "Modificare",
      review: "Revisione",
      orders: "Ordini",
      inventory: "Inventario",
      dashboard: "Pannello",
      back_to_products: "Prodotti",
      drop_shipping: "Scaricare la consegna",
    },

    /** {@see BPageProductDashboard} **/
    dashboard: {
      /** {@see BProductInfoAbstractView} **/
      info: {
        title: "profilo",
        title_small: "Prodotto",
        category: "categoria di prodotto",
        link: "Collegamento al prodotto",
        type: "Tipo",
        inputs: "Immettere le informazioni",
        outputs: "Informazioni sull'output",
        user_data_form: "Modulo Informazioni Acquirente",
        staff_messages: "Messaggi dello staff",
        add_note: "Aggiungi nota",
        product_tags: "Tag prodotto",
        edit_tags: "Modifica tag",
      },
      /** {@see BProductOrdersAbstractView} **/
      orders: {
        title: "Ordini",
        title_small: "non processato",
        physical_orders_title: "Carrelli della spesa con questo prodotto",
        send_count_in_period: "elemento ordini elemento {start} ~ {end}",
        downloads_count_in_period:
          "file elemento elemento elemento {start} ~ {end}",
      },

      /** {@see BProductInventoryAbstractView} **/
      inventory: {
        title: "Inventario",
        title_small: "Magazzino",
        total_sell: "Vendite totali",
        total_sell_today: "Saldi di oggi",
        total_sell_timespan: "elemento elemento elemento {start} ~ {end}",
        chart: {
          labels: ["Inventario", "Vendita"],
        },
        subscribers_title: "Iscritti",
        subscribers_title_small: "Ordini sottoscritti totali",
      },

      /** {@see BProductFinanceCharts} **/
      finance: {
        title: "Finanziario",
        title_small: "elemento rapporto elemento {start} ~ {end}.",
        select_mode_title: "Mostra da",
        modes: {
          sell: "Vendita",
          payment: "Pagamento",
          discount: "Sconto",
        },
        currency_select_title: "Prezzo per valuta selezionata",
        sell_today: "Saldi di oggi",
        product_price: "Prezzo del prodotto",
        currency_unit: "Unità monetaria",
        sell_30days: "30 giorni di vendita",
        sell_daily: "Vendite giornaliere",
        sell_yesterday: "Ieri saldi",
      },

      /** {@see BProductRatingCharts} **/
      survey: {
        title: "Valutazione del prodotto",
        title_small: "Rapporto sulla soddisfazione del cliente",
        total_participation: "Numero totale di contributi",
        total_participation_tooltip: "Conteggio totale dei valutatori per il prodotto.",
        today_participation: "Valutazioni di oggi",
        last7days_participation: "Contributi ultimi 7 giorni",
        chart: {
          participate: "Partecipazione",
          participate_title: "Il numero di contributi",
          score: "Punto",
        },
        users_not_rated_msg: "Gli utenti non hanno ancora valutato questo prodotto.",
      },

      /** {@see BProductMarketingAbstractView} **/
      inform: {
        title: "Aspettative dei clienti",
        title_small: "In attesa di sconti o disponibilità",
        message:
          "Avvisa i clienti quando i prodotti sono in vendita o diventano disponibili",
        waiting_for_auction: "In attesa che i prodotti vadano in vendita",
        waiting_for_available: "In attesa che i prodotti siano disponibili.",
        unit: "persona(e)",
      },
    },

    /** {@see BPageProductInventory} **/
    inventory: {
      /** {@see BProductInventoryManagement} **/
      variants: {
        inventory_list: "Inventario",
        add_variant: "Aggiungi variante",

        title: "Inventario del prodotto / Elenco delle varianti del prodotto",
        sub_title:
          "Se questo prodotto ha più di una variante, inseriscile in questa sezione. Puoi definire separatamente l'importo, il prezzo e lo sconto di ciascuna variante; in caso contrario verranno applicati i valori di default del prodotto per il prezzo.",
        add_action: "Aggiungi variante",
        count_input: "Inventario",
        count_input_action: "Imposta il conteggio",
        management_title: "Gestione dell'inventario e varianti di prodotto",
        add_title: "Aggiungi variante di prodotto",
        edit_title: "Modifica variante prodotto",
        notifications: {
          add_success: "Aggiunta variante di prodotto.",
          delete_success: "Variante di prodotto Eliminata.",
          save_product_inventory_success: "Inventario dei prodotti salvati.",
        },
      },

      /** {@see BProductInventoryManagementVirtual} **/
      variant_item: {
        price: "prezzo",
        same_as_product: "Simile al prodotto principale",
        in_stock: "Inventario",
        delete_dialog: {
          title: "Elimina variante prodotto",
          message: "Vuoi eliminare questa variante?",
        },
      },
      /** {@see BProductVariantAdd} **/
      variant_add_edit: {
        message: "Numero prodotto Univoco",
        active_input: "Questa variante è attiva?",
        sku: "SKU",
        sku_tips: "Codice Magazzino Prodotto.",
        mpn: "MPN",
        mpn_tips: "Codice prodotto inserito dal produttore sulla confezione del prodotto",

        has_pricing_input: "Il prezzo è diverso dal prodotto principale?",
        inventory_unit: "Elementi",
        images_message:
          "Dopo aver salvato questa variante potrai aggiungere un'immagine qui.",

        config: {
          title: "prodotto elemento elemento",
          subtitle: "Gestisci SKU, MPN e disponibilità per le varianti.",
        },
        variables: {
          title: "elemento elemento",
          subtitle:
            "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b><b></b>",
          graphical_asset_tips:
            "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b>",
          graphical_asset_action: "elemento elemento",
          graphical_asset_action_caption: "immagini elemento elemento elemento.",
        },
        smart_unit_price: {
          tips: "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b><b></b><b></b>",
          smart_unit_price: "Calcolo prezzo unitario",
        },
        quantity: {
          title: "Inventario",
          subtitle: "Imposta i livelli delle scorte per ciascuna variante.",
        },
        price: {
          title: "Prezzo",
          subtitle:
            "Imposta un prezzo personalizzato per la variante o utilizza il prezzo del prodotto predefinito.",
        },
        package: {
          title: "elemento & spedizione",
          subtitle:
            "Specificare peso e dimensioni per le varianti per determinare le opzioni di spedizione.",
          same_as_product_action: "elemento elemento prodotto",
        },
        image: {
          title: "Immagini variante",
          subtitle:
            "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        },
        inputs: {
          sku: {
            message: "elemento elemento elemento (SKU)",
          },
          mpn: {
            message: "elemento elemento elemento (MPN)",
          },
          gtin: {
            label: "elemento elemento elemento elemento (GTIN)",
            message:
              "Formati supportati: UPC (12 cifre), EAN (13 cifre), JAN (8 o 13 cifre), ISBN (13 cifre).",
          },
        },
      },
    },

    /** {@see BPageProductArticle} **/
    edit_article: {
      menu: {
        tags: "Tag",
        article: "Articolo",
      },
    },
  }, // product_admin

  /**
   * @see TransportationsEligibleView
   */
  transportation_eligible: {
    subtitle:
      "I servizi di spedizione disponibili dipendono dalle dimensioni e dal peso forniti.",
  },

  /** {@see BProductExtraInput} **/
  product_extra_physical: {
    weight: "Peso del pacco",
    weight_subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    weight_unit: "elemento",
    size: "Dimensioni della confezione",
    size_subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

    width: "Larghezza",
    length: "Lunghezza",
    height: "Altezza",
    lead_time_title: "Tempo di preparazione",
    lead_time: "Tempo di preparazione",
    lead_time_subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

    lead_time_dimension: "Ore)",
    bulk_action: "Azioni in blocco",
    bulk_action_subtitle:
      "È possibile applicare le informazioni sulla confezione a tutte le varianti del prodotto.",

    bulk_action_input: "Aggiorna tutte le varianti",
    bulk_action_msg:
      "Imposta la confezione del prodotto e il tempo di preparazione per tutte le varianti.",
    dynamic_lead_time: "elemento elemento ora",
    instant_delivery: "elemento elemento",
  },

  /**
   * @see SGalleryUploadGrid
   */
  gallery_upload_grid: {
    upload_images: "Carica immagini",
  },

  /**
   * @see BProductImagesGallery
   */
  product_images_gallery: {
    dialog_alt: {
      title: "Imposta testo alternativo immagine",
      placeholder: "elemento elemento elemento elemento elemento...",
      success_update_notification: "elemento elemento elemento elemento.",
    },
    dialog_bg_remove: {
      title: "rimuovi sfondo elemento",
      action: {
        title: "Rimuovi sfondo",
        subtitle: "crea elemento elemento sfondo.",
      },
      success_remove_bg_notification: "Sfondo rimosso con successo!",
    },
  },
  /**
   * @see VariantGraphicalAssetsList
   */
  variant_graphical_assets: {
    title: "Risorse grafiche variante",
    tips: {
      how_it_works:
        "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione. {filename}</b><br /><b></b><b><s></s></b>",
      how_set_name:
        "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b><br />",
    },
  },

  /**
   * @see ExtraPricingLevels
   */
  extra_pricing_levels: {
    extra_pricings: "elemento prezzi",
    min_quantity: "elemento quantità",
    range_is_out_of_stock: "Intervallo esaurito!",
  },

  /**
   * @see BProductVariantItem
   */
  product_variant_item: {
    duplicated_variant: "elemento elemento elemento elemento!",
    set_color_warning: "elemento seleziona elemento elemento.",
    set_volume_warning: "elemento elemento elemento elemento.",
    set_pack_warning: "elemento elemento elemento elemento elemento.",
    set_weight_warning: "elemento elemento elemento elemento.",
    set_type_warning: "elemento seleziona elemento tipo.",
    set_style_warning: "elemento seleziona elemento elemento.",
    out_of_stock: "Attualmente esaurito",

    image: {
      tooltip: "⚡ Trascina e rilascia qui un'immagine per assegnarla alla variante.",
    },
    enable: {
      true_tooltip: "Questo articolo è disponibile nel negozio online.",
      false_tooltip: "Questo articolo non è disponibile nel negozio online.",
    },
    restore_dialog: {
      title: "Ripristina variante",
      message: "Sei sicuro di voler ripristinare questa variante eliminata?",
      action: "elemento, elemento elemento",
    },
    notifications: {
      restore_variant_success: "La variante del prodotto è stata ripristinata con successo.",
    },
  },

  /** {@see BProductImagesGallery} **/
  product_images_list: {
    upload_button: "Altre immagini del prodotto",
    upload_an_image: "Seleziona un'immagine.",
    notifications: {
      update_sort_success: "Ordinamento delle immagini salvato",
      delete_image_title: "Elimina l'immagine del prodotto",
      delete_image_success: "Immagine eliminata correttamente",
    },
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Prezzi",
    inventory: "Inventario",
    discount: "Sconto",
  },

  /** {@see BGiftcardTypeAdd} **/
  gift_card_type_edit: {
    title_input: "Titolo",
    color_input: "Colore della carta",
    charge_input: "Carica iniziale",
    charge_input_hint: "Addebito iniziale per ogni carta",
    currency_input: "Moneta",
    currency_input_message: "Solo per l'acquisto con questa valuta",
    lifetime_input: "Validità della carta (mese)",
    lifetime_input_message: "Validità della carta",
    card_image_input: "Immagine della carta",
    notifications: {
      create_success: "Carta creata",
      update_success: "Carta aggiornata",
    },
  },

  /** {@see BInventoryWarehouse} **/
  shop_warehouse_edit: {
    title: "Aggiungi Magazzino",
    message:
      "Inserisci il tuo indirizzo di magazzino e il profilo per calcolare il costo di spedizione.",
    name_input: "Nome del magazzino",
    address: "indirizzo",
    name_input_message: "Inserisci un nickname per il tuo magazzino.",
    person_name: "Nome dell'ufficiale",
    phone_number: "Numero di contatto",
    map_title: "Indirizzo del magazzino del negozio",
    confirm_action: "Approvazione magazzino",
    address_name: "Magazzino",
    notifications: {
      success_save: "Modifiche salvate correttamente.",
    },
  },

  /** {@see BPageShopLogisticInventoryList} **/
  inventory_list: {
    title: "negozio inventario",
    subtitle: "elenco elemento elemento prodotti elemento negozio.",
    cant_set_here: "elemento elemento elemento",

    search_input: "Ricerca prodotto...",
    search_input_title: "Cerca tra i prodotti del negozio",
    apply_filter: "Applica il filtro",
    inventory: "Inventario",
    export: "Esporta inventario",
    import: "Importa inventario",
    bulk_price: "Modifica del prezzo all'ingrosso",
    bulk_discount: "Modifica sconto all'ingrosso",
    category_filter_msg: "⚡ Si applicherà a tutti i prodotti e sottocategorie!",
    table: {
      waiting: "Ricezione informazioni in corso... Attendere",
      open_state: "Attivo",
      close_state: "inattivo",
      image: "Immagine",
      product: "nome del prodotto",
      code: "Codice prodotto",
      sku: "SKU",
      mpn: "MPN",
      original: "Originale",
      status: "Stato",
      in_stock: "In magazzino",
      edit: "Modificare",
    },

    bulk_discount_dialog: {
      title: "Azioni collettive > Sconto",
      message:
        "Nota: il seguente importo sarà una percentuale sullo sconto di tutti i prodotti nel tuo negozio. Inoltre, i valori di sconto calcolati verranno convertiti in modo intelligente nel numero tondo più vicino in base alla valuta selezionata. Prestare attenzione nell'inserimento dei valori.",
      check: "Approvo le modifiche allo sconto.",
    },
    notifications: {
      save_success: "Modifica dell'inventario salvata.",
    },
  },

  /**
   * @see BInventoryBulkPrice
   */
  bulk_price_dialog: {
    title: "elemento elemento > prezzo",
    message:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    check: "elemento elemento prezzo elemento.",
    check_description:
      "Il prezzo verrà modificato per la categoria selezionata e tutte le sottocategorie.",
    add_percent_tab: "aggiungi elemento",
    add_constant_tab: "aggiungi elemento",
    ending_tab: "elemento elemento",
    marketplace_listing_price: "inserzione prezzo",

    constant: {
      subtitle:
        "L'importo verrà aggiunto o sottratto dal prezzo corrente dei prodotti.",
    },
    ending: {
      subtitle:
        "La fine del prezzo corrente dei prodotti verrà modificata nel valore specificato.",
    },
    marketplace: {
      title: "marketplace inserzione prezzo",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      strategy: {
        min: {
          title: "elemento minimo prezzo",
          description:
            "Imposta il prezzo minimo del prodotto come prezzo di listino.",
        },
        max: {
          title: "elemento massimo prezzo",
          description:
            "Imposta il prezzo massimo del prodotto come prezzo di listino.",
        },
      },
    },

    category: {
      subtitle: "Limita l'azione collettiva a una categoria e a tutte le sottocategorie.",
    },
    vendor: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      listing_price_need_update_msg:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    listing_products_changes: "inserzione prodotti elemento",
    total_vendor_products: "elemento venditore prodotti",
    total_products: "elemento prodotti",
    total_variants: "elemento elemento",
  },

  /** {@see BProductSpecTable} **/
  spec_view: {
    auto_save_input: "Salvataggio automatico",
    auto_save_input_message: "elemento elemento elemento elemento elemento.",
  },

  /** {@see STimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Rimanendo all'inizio",
    title_between_start_end: "Rimanendo fino alla fine",
    title_after_end: "Finito",
    title_no_start_end: "Senza periodo di tempo!",
  },

  /** {@see GeoMap} **/
  geo_map: {
    views: "Visualizzazioni",
    views_unit: "Volte",
    product_views: "Visualizzazioni del prodotto",
    buys: "Acquisti",
    buys_unit: "Ordini",
    baskets: "Carrelli attivi",
    added_items: "Aggiungi elementi",
    removed_items: "Rimuovi gli elementi",
  },

  /** {@see BPageShopFinanceGateways} **/
  b_page_shop_finance_gateway: {
    title: "Metodi di pagamento",
    sub_title:
      "Elenco dei metodi di pagamento attivi. Se vuoi aggiungere un nuovo metodo al tuo negozio, premi il pulsante seguente. Consigliamo vivamente di non superare i 10 gateway di pagamento aggiunti.",
    add_gateway: "Nuovo metodo di pagamento",

    add_gateway_dialog: {
      title: "Seleziona valuta",
      country_currencies: "Valute locali",
      crypto_currencies: "Criptovalute",

      confirm: "Aggiungi metodo di pagamento",

      online_methods: "Metodi online",
      cod_methods: "elemento elemento elemento",
      bank_transfer: "Bonifico bancario",
      cash_methods: "elemento pagamento (POS)",

      currency_step: {
        title: "Seleziona una valuta",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        add_first_currency: {
          subtitle: "Aggiungi una valuta al tuo negozio prima di procedere.",
          title: "Aggiungi valuta",
        },
      },
      gateway_step: {
        title: "Metodi di pagamento attivi",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },

      config_step: {
        import_config: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        import_from: "Importa da",
      },

      request_add_new_gateway: {
        title: "Non vedi il tuo metodo di pagamento preferito?",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },

      inputs: {
        currency: {
          placeholder: "Inserisci il valore...",
        },
        manual: {
          true_title: "Modalità manuale",
          true_description: "Seleziona o inserisci le informazioni richieste.",

          false_title: "Connessione automatica",
          false_description:
            "Seleziona o inserisci le informazioni richieste.",
        },
      },
    },
  },

  /** {@see FaqRequestsList} **/
  faq_list: {
    table: {
      nodata: "Nessuna domanda trovata.",
      more_data_action: "Più domande ..",
      user: "utente",
      tag: "Etichetta",
      question: "Domanda",
      officer: "Personale",
      answer: "Risposta",
      created_at: "Data",
      priority: "Priorità",
      edit: "Modificare",
    },
    dialog: {
      add_new_action: "Invia nuova domanda",
      edit_action: "Modifica le domande frequenti",
      question_input: "Domanda",
      question_input_placeholder: "Fai la tua domanda..",
      link_input: "Collegamento",
      link_input_placeholder: "Puoi fare riferimento a un link in risposta.",
      answer_input: "Risposta",
      answer_input_placeholder: "Inserisci il testo della risposta ..",
      tag_input: "Etichetta (titolo della categoria)",
      tag_input_placeholder: "Inserisci un titolo breve",
      priority_input: "Priorità: (da 0 a 10)",
    },
    delete_alert: {
      title: "Elimina domanda",
      message: "Vuoi eliminare questa domanda?",
      action: "Eliminare",
    },
    notifications: {
      send_success: "La tua risposta è stata inviata con successo.",
      delete_success: "La tua domanda è stata eliminata con successo.",
    },
  },
  /** {@see ContactMessagesList} **/
  contact_messages_list: {
    load_more_action: "Altri messaggi..",

    table: {
      nodata: "Nessuna domanda trovata.",
      user: "utente",
      message: "Corpo del messaggio",
      category: "Categoria",
      officer: "Personale",
      answer: "Risposta",
      created_at: "Data",
      contact: "Contatto",
      edit: "Modificare",
    },

    dialog: {
      title: "Rispondi al messaggio",
      category: "Categoria",
      user_name: "Nome",
      email: "E-mail",
      phone: "Numero di contatto",
      message: "Messaggio di testo",
      status: "Stato della risposta",
      status_answered: "Risposto",
      status_waiting: "In attesa di risposta",
      answer_input: "Testo di risposta",
      mail_input: "Inviare una mail",
      mail_input_message:
        "Se lo abiliti, la tua risposta verrà inviata all'e-mail dell'utente.",
    },
    delete_alert: {
      title: "Cancella il messaggio",
      message: "Vuoi eliminare questo messaggio?",
      action: "Eliminare",
    },
    notifications: {
      send_success: "La tua richiesta è stata inoltrata con successo.",
      delete_success: "Messaggio cancellato.",
    },
  },
  /** {@see BPageCampaign} **/
  campaign: {
    title: "Campagna",
    menu: {
      setting: "Impostazioni",
      return: "Di ritorno",
      dashboard: "Pannello",
      links: "Collegamenti",
      landing: "Approdo",
      ads: "Annunci",
      finance: "Finanza",
    },
    /** {@see BPageCampaignDashboard} **/
    dashboard: {
      title: "Pannello",
      status: "Panoramica dello stato",
      sessions: "Sessioni",
      links_overview: "Panoramica dei link della campagna",
      orders: "Ordini",
      performance: "Rendimento della campagna",
      links_funnel: "La campagna collega il rendimento",
      no_links:
        "Non ci sono dati disponibili! Crea un link alla tua campagna.",
      social: "Conduttori dei social media",
      conversion_over_time: "Conversione nel tempo",
      total_campaign_sell: "Vendite totali per campagna",
    },
    /** {@see BPageCampaignFinance} **/
    finance: {
      title: "Relazione finanziaria",
      campaign_revenue: "Entrate della campagna",
      total_revenue:
        "Entrate totali per campagna",
      links_revenue: "Entrate dei link della campagna",
      payments_over_time: "Vendite nel tempo",
      all_links: "Tutti i collegamenti",
    },
    /** {@see BPageCampaignLanding} **/
    landing: {
      empty_message: "Imposta una pagina di destinazione nelle impostazioni della campagna.",
      set_landing: "Imposta la pagina di destinazione",
      create_landing: "Crea una nuova pagina di destinazione",
    },

    /** {@see BPageCampaignLinks} **/
    links: {
      title: "Link alla campagna",
      url_input_message: "Inserisci l'URL della pagina di destinazione",
    },

    /** {@see BPageCampaignSetting} **/
    setting: {
      menu: {
        config: "elemento",
        timespan: "Periodo di tempo",
        banner: "elemento",
        Notification: "Notifica",
      },

      general_setting: {
        title: "Impostazioni generali della campagna",
        sub_title: "Nome, Pagina di destinazione e Codice Sconto",

        name_input: "Nome della campagna",
        name_input_hint: "Aggiungi un nome alla tua campagna",
        enable_input: "La campagna è attiva?",
        page_input: "Pagina di destinazione",
        discount_code_input: "Codice di sconto",
        limit: "Limite di sconto",
        max_count: "Conteggio massimo",
        max_count_unit: "Elementi",
        start: "Inizio",
        end: "Fine",
        notification_enable_input: "Notifica abilitata?",

        landing_page: "Pagina di destinazione",
        discount_code: "Codice di sconto",

        auto: "Campagna predefinita",
        auto_message:
          "Campagna predefinita attivata nel tuo negozio",
      },
      time_setting: {
        title: "Periodo di tempo",
        sub_title:
          "Data e ora di inizio / Data e ora di fine",
        start_input: "Inizio",
        start_input_placeholder: "Seleziona Ora di inizio campagna",
        end_input: "Fine",
        end_input_placeholder: "Seleziona Ora di fine campagna",
      },
      banner_setting: {
        title: "Banner del negozio",
        sub_title:
          "Visualizza nella parte superiore della pagina del negozio",

        message_input: "Messaggio di testo",
        message_input_placeholder: "Festa speciale...",
        message_input_hint: "Testo del messaggio banner nella parte superiore del negozio",
        bg_image_input: "URL immagine di sfondo",
        bg_image_input_hint: "URL completo dell'immagine di sfondo",
        repeat_pattern: "Ripeti il motivo",
        simple: "Semplice",
        dark_input: "Tema scuro?",
        icon_input: "Icona",
        icon_input_hint:
          "Nome icona design materiale o Fontawsom: fa:fas fa-star",
        anim_input: "Indirizzo di animazione",
        anim_input_message: "URL del file di animazione di Lottie",
        preview: "Anteprima",
        preview_update_action: "Anteprima di aggiornamento",
        bg_color: "Colore di sfondo",
        icon_bg: "Colore di sfondo dell'icona",
      },
      notifications: {
        title: "Notifica",
        sub_title: "Crea una notifica e collegala alla tua campagna.",
        update_success: "La tua campagna è stata aggiornata.",
        action_button: "Pulsante di azione",
        background_color: "Colore di sfondo",
        text_color: "Colore del testo",
        action_color: "Colore d'azione",
        action_text_color: "Colore del testo dell'azione",
        notification_image: "Immagine di notifica",
        notification_bg: "Sfondo di notifica",
        show_preview: "Anteprima dello spettacolo",
        persistence: "Persistenza",
        persistence_message:
          "Vuoi mostrare ogni volta che il tuo utente visita il sito web",
        radius: "Raggio",
        show_delay: "Mostra ritardo",
      },
    },
  },

  /** {@see BCategoryAdd} **/
  add_category: {
    title_edit: "Modifica categoria",
    title_update: "Aggiungi nuova categoria",

    config: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    parent: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    template: {
      title: "Modello",
      edit_page: "modifica pagina",
      Pages_list: "pagina elenco",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    critical_zone: {
      title: "Zona critica",
      subtitle:
        "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione. {parent}</b>",
      accept_delete: {
        true_description: "Voglio rimuovere questa categoria.",
        true_title: "Conferma rimozione categoria",
      },
    },

    menu: {
      delete: "Elimina categoria",
      filter: "Filtri",
      settings: "Impostazioni",
      back: "Di ritorno",
    },
    title_input: "Titolo categoria *",
    title_input_error: "Seleziona un titolo di categoria",
    name_input: "Nome della categoria (inglese) *",
    name_input_error: "Seleziona un nome univoco per la categoria",
    description_input: "Descrizione della categoria",
    description_input_message: "Inserisci una breve descrizione della categoria ..",
    parent_input: "Categoria genitore",
    parent_input_message: "Questa categoria appare nella home page del negozio.",
    image_input: "Immagine di categoria",
    image_input_placeholder: "Seleziona un'immagine per la categoria",
    edit_action: "Modifica categoria",
    add_action: "Aggiungi categoria",
    back_action: "Di ritorno",
    no_category: "Nessuna categoria",
    star: "Stella",

    filter: {
      title: "Filtri di categoria",
      sub_title: "Gestisci i filtri e le categorie applicabili ai prodotti in questa categoria.",
      message:
        "Inserisci e salva il titolo della caratteristica tecnica comune per questa categoria nella casella sottostante. Dopo aver salvato l'elenco, le categorie di filtri verranno visualizzate insieme ai contenuti di ciascuna categoria. Colore, peso, taglia, marca, ecc. vengono estratti automaticamente dalla variante del prodotto.",
    },
    delete_alert: {
      title: "Rimuovi categoria",
      message: "Vuoi eliminare la categoria {title}?",
      action: "Eliminare",
    },
    notifications: {
      add_success: "Nuova categoria aggiunta.",
      edit_success: "Categoria modificata.",
      delete_success: "{title} eliminato.",
    },
    /** {@see BCategoryFilterEditor} **/
    edit_filter: {
      spec_input: "Elenco delle specifiche tecniche",

      price: "prezzo",
      min: "min",
      max: "Massimo",
      suggested_list: {
        brand: "Marca",
        colors: "Colore",
        styles: "elemento",
        volumes: "volume",
        weights: "Il peso",
        packs: "Numero per confezione",
        types: "Tipo",
      },
      notifications: {
        edit_success: "Categoria modificata.",
      },
      manually_update_filters_tips:
        "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b>",

      inputs: {
        spec: {
          message:
            "Elenco delle funzionalità che desideri vengano visualizzate nella sezione filtro",
          placeholder: "seleziona elemento elemento mostra elemento filtro...",
        },
      },
    },
  },

  /** {@see BAppShopList} **/
  apps_list: {
    nodata: "Non ci sono app installate nel tuo negozio",
    inactive: "inattivo",
    my_apps: "Le mie applicazioni",
    app_store: "Aggiungi nuova app",
  },

  /** {@see BShopAdd} **/
  add_shop: {
    menu: {
      shop_title: "Titolo del negozio",
      shop_name: "Nome del negozio",
      description: "Descrizione",
      contact: "Informazioni sui contatti",
      image: "Immagine",
    },
    title_input: "Titolo",
    title_input_tips: "Inserisci il nome del tuo negozio, marchio o azienda.",
    active_message: "Imposta attivo per tutti possono accedere al tuo sito web.",
    language_input_message: "Seleziona la lingua del tuo negozio.",
    name_input: "Nome",
    name_input_message: "Inserisci un nome per il tuo negozio.",
    name_input_tips:
      "Non utilizzare caratteri, spazi o lettere non inglesi, se utilizzati, il nome del negozio potrebbe non essere visualizzato correttamente.",
    description_input: "Descrizione del negozio",
    description_input_message: "Scrivi una breve descrizione della tua attività.",
    description_input_tips:
      "Seleziona o inserisci le informazioni richieste.",
    address_input: "Indirizzo del negozio",
    address_input_message: "Inserisci l'indirizzo esatto della posizione del negozio",

    phone_input: "numero di telefono",
    phone_input_message: "Numero di contatto del cliente",
    phone_input_tips:
      "Inserisci il numero di contatto con il prefisso internazionale. Questo numero viene utilizzato anche per visualizzare le informazioni nella ricerca di Google.",
    email_input: "E-mail",
    email_input_message: "Indirizzo e-mail per i clienti",
    locality_input: "Posizione",
    locality_input_message: "Posizione del negozio",
    region_input: "Stato o Provincia",
    region_input_message: "Stato o provincia in cui operi",
    country_input: "Paese",
    country_input_message: "Paese di attività",
    postal_code_input: "codice postale",
    postal_code_input_message: "Codice postale del negozio",
    image_input: "Immagine del negozio",

    map: {
      title: "Indirizzo del negozio",
      confirm: "Registrazione dell'indirizzo",
      address: "indirizzo",
      receptor: "negozio",
    },

    create_shop_action: "Crea negozio",
    update_shop_action: "Aggiornare",

    notifications: {
      copy_success: "Copia dell'indirizzo del negozio.",
      name_available: `Questo nome ({name}) è disponibile.`,
      add_success: `Negozio {title} creato.`,
      edit_success: "Negozio modificato.",
    },
  },

  /** {@see BProductInventoryManagementVirtual} **/
  virtual_items_list: {
    add_virtual_item: "Aggiungi oggetto virtuale",
    add_virtual_item_desc:
      "Per vendere prodotti virtuali, devi aggiungerli in questa sezione. Il numero di oggetti virtuali è uguale al numero di oggetti gratuiti in questa sezione. Una volta che i clienti acquistano l'oggetto virtuale, il link verrà loro inviato.",

    filter_action: "Applica il filtro",
    not_processed: "Ordini non elaborati",
    title: "Elenco di articoli",
    vew_order: "Visualizza ordine",

    table: {
      nodata: "Non ci sono articoli",
      product: "Prodotto",
      data: "Dati",
      status: "Stato",
      user_message: "Messaggio dell'utente",
      updated_at: "Ultimo aggiornamento",
      order: "Ordine",
      delete: "Eliminare",
    },
    notifications: {
      delete_success: "Elemento eliminato correttamente.",
    },
  },

  /** {@see BProductVirtualItemAdd} **/
  add_virtual_item: {
    title_edit: "Modifica i valori",
    title_add: "Aggiungi articolo al prodotto",
    sub_title: "Creazione e modifica di prodotti virtuali",
    message:
      "Il gestore del negozio può mostrare all'acquirente il valore dopo il pagamento. Questi valori devono essere inseriti nel modulo sottostante. La struttura di questo modulo è impostata nella sezione Modifica elemento > Modifica informazioni di output.",
    edit_outputs: "Modifica modulo di output",
    notifications: {
      edit_success: "Articolo modificato.",
      add_success: "Articolo aggiunto all'elenco.",
    },
  },

  /** {@see BPageOrderVirtual} **/
  virtual_process_center: {
    title: "Centro di elaborazione",
    sub_title: "Elaborazione dell'ordine",
    virtual_product: "prodotto virtuale",
    menu: {
      report: "Rapporto",
      timeline: "Sequenza temporale",
      order: "Ordine",
    },

    /** {@see BOrderVirtualItem} **/
    outputs_widget: {
      title: "Modulo di output",
      table: {
        title: "Titolo",
        value: "Valore",
      },
      tips: [
        "Dopo aver completato la richiesta del cliente, premi il tasto di conferma dell'ordine per notificare l'ordine all'acquirente.",
        "Una volta che l'ordine è stato approvato, l'acquirente non sarà in grado di modificare le informazioni di input.",
      ],
      alerts: {
        order_completed_by_admin: "L'ordine è stato completato.",
        order_completed_by_buyer: "L'ordine è stato completato dall'acquirente.",
        waiting_for_buyer: "In attesa dell'approvazione dell'acquirente ..",
      },
    },
  },

  /** {@see BPageOrderFile} **/
  file_process_center: {
    title: "Centro di elaborazione",
    sub_title: "Elaborazione dell'ordine",
    menu: {
      report: "Rapporto",
      timeline: "Sequenza temporale",
      order: "Ordine",
    },
  },

  /** {@see BOrderDashboard} **/
  process_order_page_dashboard: {
    title: "Elaborazione dell'ordine",
    cancel_order_action: "Annulla Ordine",
    open_basket_cation:
      "Questo carrello è aperto, il che significa che il cliente sta facendo acquisti e non ha ancora pagato l'ordine.",

    reject_dialog: {
      title: "Motivo per rifiutare l'ordine",
      message:
        "Seleziona il motivo del rifiuto di questo ordine dall'elenco sottostante. Assicurati di informare il cliente della procedura di cancellazione e rimborso. I rimborsi devono essere effettuati entro 12 ore.",
      confirm_now_action: "annulla ordine elemento",
      confirm_in48h_action: "annulla ordine elemento 48 elemento",

      dismiss_reject_action: "Annulla l'annullamento dell'ordine",

      options: {
        title: "elemento",
        subtitle:
          "Se desideri annullare immediatamente il tuo ordine, puoi utilizzare questa opzione.",
      },

      express_input: {
        true_title: "elemento | annulla ordine elemento",
        false_title: "elemento | annulla ordine elemento 48 elemento",
        true_description:
          "Questa opzione annullerà immediatamente il tuo ordine e aggiornerà immediatamente l'inventario.",
        false_description:
          "Seleziona o inserisci le informazioni richieste.",
      },
    },

    notifications: {
      update_status_success: "Stato dell'ordine aggiornato.",
      reject_update_success:
        "Stato di annullamento dell'ordine aggiornato.",
      dismiss_reject_success:
        "L'ordine è tornato al normale processo.",
      set_tracking_success: "ID di tracciamento dell’ordine salvato correttamente.",
      shipping_address_update_success:
        "L'indirizzo di spedizione è stato aggiornato con successo.",
      vendor_order_status_update_success:
        "Lo stato di evasione del fornitore è stato aggiornato correttamente.",
    },
  },
  /** {@see BPageOrderPhysical} **/
  /** {@see BPageOrderVirtual} **/
  /** {@see BPageOrderFile} **/
  /** {@see BPageOrderService} **/
  process_center: {
    title: "Centro di elaborazione",

    physical_product: "Prodotti fisici",
    menu: {
      label: "Etichetta del pacchetto",
      receipt: "Fattura",
      back: "Di ritorno",
      return: "Ritorno",
      report: "Rapporto",
      timeline: "Sequenza temporale",
      inputs: "Ingressi",
      order: "Ordine",
    },

    /** {@see OrderPaymentWidget} **/
    payment_widget: {
      title: "Pagamento",
      checklist: [
        "Controlla l'importo dell'ordine e il pagamento del cliente.",
        "Controlla l'indirizzo di fatturazione.",
        "Assicurati che le informazioni inserite siano corrette, soprattutto se il pagamento è in contrassegno.",
      ],
      action_cod_pay: "Conferma il pagamento da parte del cliente",
      action_dir_pay: "Conferma la ricevuta di pagamento caricata",
      payment_receipt_not_uploaded_error:
        "La ricevuta di pagamento non è stata ancora caricata!",

      waiting_for_pay: "In attesa di Pagamento",
      processing_payment: "Pagamento in elaborazione",
      processing_cancel: "Pagamento annullato",
      require_capture: "elemento elemento",
      paid: "Pagato",
      cod_pay_info:
        "Quando hai ricevuto l'ordine dal cliente puoi confermare il pagamento e completare l'ordine.",
      dir_pay_info:
        "La ricevuta del pagamento apparirà sopra. Prima di confermare il pagamento, verifica l'importo del deposito e le informazioni sulla ricevuta con la tua banca.",

      created_date: "Data di Creazione",
      pay_date: "Data di pagamento",
      payment_gateway: "Casello stradale",
      payment_method: "Metodo di pagamento",
      risk: "Valore di rischio",
      billing_details: "Dettagli di fatturazione",

      add_transaction: "Aggiungi nuova fattura",
      add_transactions_message:
        "Devi creare almeno una transazione per questo ordine. In alcuni casi, il pagamento è richiesto in più passaggi. Le transazioni per le quali l'utente deve pagare saranno determinate da te, durante il lavoro.",

      add_bill_dialog: {
        title: "Aggiungi fattura",
        message:
          "Puoi aggiungere una o più nuove fatture per questo ordine. Il cliente vedrà queste fatture e pagherà ciascuna in base allo stato di avanzamento dei lavori.",
        amount_input: "Importo fattura",
        action: "Aggiungi fattura",
      },
      edit_bill_dialog: {
        title: "Modifica fattura",
        message: "Puoi modificare le fatture in sospeso.",
        action: "Modifica fattura",
      },
      bill_cash_payment_dialog: {
        title: "Registrati pagamento in contanti",
        message:
          "Se l'acquirente ha pagato l'importo di questa fattura in contanti o in un modo diverso dal pagamento online, in questa sezione, selezionando un'opzione, registrarsi e confermare il pagamento. In questa sezione puoi vedere solo i gateway di pagamento in contanti del tuo negozio,Se non vedi tale opzione, devi attivare un gateway di pagamento in contanti nella valuta selezionata nel tuo negozio.",
        action: "Conferma il pagamento della fattura",
      },

      table: {
        title: "Titolo",
        amount: "Importo",
        description: "Descrizione",
        info: "Informazioni",
      },
      user_payment: "Pagamento del cliente",
      cod: "Pagamento alla consegna",
      gateway_wage: "Tassa",
      gift_card: "Carta regalo",
      discount_code: {
        title: "Codice di sconto",
        code: "Codice",
        percent: "per cento",
        limit: "Limite",
      },
      club: {
        title: "Club dei clienti",
        percent: "per cento",
        limit: "Limite",
      },

      coupon: {
        title: "Buono",
        percent: "per cento",
        limit: "Limite",
        charge: "Caricare",
      },
      delivery: {
        title: "Spese di spedizione",
        not_paid: "Non pagato",
      },
      samin: {
        title: "Costo del servizio",
        description:
          "Questo importo è stato detratto dal tuo conto portafoglio Selldone.",
        tooltip: "Calcola per metodo di pagamento",
        percent: "per cento",
      },
      affiliate: {
        title: "Commissione di affiliazione",
        affiliate_message:
          "Dovresti pagare questa commissione al tuo affiliato. Questo processo è fatto da te.",
      },
      total_price: "Prezzo totale degli articoli",
      total_items_discount: "Sconto articoli",
      total_price_after_offers: "Totale dopo aver applicato le offerte",

      total_order_price_before_tax: "Prezzo totale al lordo delle imposte",

      user_payment_amount: "Importo del pagamento dell'acquirente",
      samin_wage: "Commissione di Selldone",
      pay_cod_dialog: {
        title: "Hai ricevuto il denaro dell'ordine?",
        message:
          "Conferma questa opzione nel metodo di pagamento in contrassegno, dopo aver assicurato il pagamento completo da parte del cliente.",
        confirm_action: "Conferma il pagamento del cliente",
      },
      pay_dir_dialog: {
        title: "Hai ricevuto il denaro dell'ordine?",
        message:
          "Conferma questa opzione dopo aver approvato la ricevuta di pagamento caricata con la tua banca. Assicurati di controllare il pagamento con la tua banca.",
        confirm_action: "Conferma il pagamento del cliente",
      },

      notifications: {
        pay_confirm_message:
          "Il pagamento è confermato.<br> Porta: {gateway_name}<br> Data: {payment_at}",
        pay_fail_title: "Non pagato",
        pay_fail_message: "Il pagamento non può essere approvato!",
      },
    },
    /** {@see BOrderDashboardCart} **/
    basket_list: {
      checklist: [
        "Controlla l'inventario.",
        "Se l'articolo non è disponibile, l'importo pagato per quell'articolo deve essere restituito al cliente.",
      ],
      message:
        "Se uno qualsiasi degli articoli non è disponibile o non può essere venduto, deseleziona la casella accanto ad esso e fai clic sul pulsante <b>Conferma ordine</b> .",
      action: "Conferma dell'ordine",
      list_of_items: "Elenco del carrello",
      apply_change_action: "Applica i cambiamenti",
      cant_apply_change: "Impossibile apportare modifiche",
      lottery_prize_inform:
        "Il tuo cliente vince 1 volta di questo prodotto. Invia un regalo con questo ordine.",

      need_to_refund: {
        title: "rimborso richiesto elemento elemento cliente",
        message:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        calculated_approximately:
          "L'importo è calcolato approssimativamente. Si prega di calcolare personalmente l'importo esatto.",
      },
      need_payback: {
        title: "cliente elemento richiesto",
        message:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      need_no_refund: {
        title: "Nessun rimborso necessario",
      },
      total_refund: {
        title: "Totale rimborsato",
        message:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
    },
    /** {@see BOrderDashboardPreparing} **/
    preparing: {
      title: "Preparazione",
      packing_weight: "Peso dell'imballaggio",
      delivery_type: "Metodo di spedizione",
      packing_size: "Dimensioni dell'imballaggio",
      distance_warning: "Supera il limite di distanza consentito.",
      weight_warning: "Supera il peso consentito.",
      volume_warning: "Supera la dimensione del pacchetto consentita.",
      items_weight_calculation:
        "Il peso combinato di tutti gli articoli è {weight} {unit}",
      not_available_message:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

      message:
        "Fare clic sul seguente pulsante <b>Ordine pronto</b> se l'ordine è pronto per la spedizione.",
      action: "Ordine pronto per la spedizione",
      checklist: [
        "Seguendo le regole standard nell'imballaggio.",
        "Stampa un elenco di articoli e mettilo all'interno della confezione.",
        "Stampa e attacca un'etichetta alla scatola.",
      ],
    },

    basket_items: "Ordinare articoli Elenco",

    delivered_dialog: {
      title: "Questo ordine è stato ricevuto dal cliente?",
      message: "Conferma questa opzione quando sai che il cliente ha ricevuto l'ordine",
      confirm_action: "Confermo che il cliente ha ricevuto il pacco",
    },
    return_delivery_dialog: {
      title: "L'ordine ha avuto problemi durante la consegna o è stato restituito?",
      message:
        "Conferma l'opzione per restituire la spedizione se l'ordine viene restituito dopo l'invio per qualche motivo ed è necessario inviare nuovamente la spedizione.",
      confirm_action: "Conferma la consegna restituita",
    },

    notifications: {
      update_status_success: "Stato dell'ordine aggiornato.",
      reject_update_success: "Stato di annullamento dell'ordine aggiornato.",
      dismiss_reject_success: "L'ordine è stato annullato.",
      pay_cod_success: "Pagamento in contrassegno confermato.",
      pay_dir_success:
        "Il pagamento è stato confermato tramite pagamento da carta a carta o trasferimento di denaro.",
      set_tracking_success: "ID di tracciamento dell’ordine salvato correttamente.",
      new_bill_success: "Nuova fattura aggiunta con successo.",
      edit_bill_success: "Fattura aggiornata correttamente.",
      update_bill_status_success: "Stato della fattura aggiornato correttamente.",
      set_payment_in_cash_success: "Pagamento della fattura confermato manualmente.",
    },

    delete_bill_dialog: {
      title: "Elimina fattura",
      message: "Sei sicuro di eliminare questa fattura?",
      action: "Sì, elimina ora",
    },
  },

  /** {@see AdminShopGatewayManagementPage} **/
  shop_gateway: {
    title: "gateway",
    menu: {
      dashboard: "Pannello",
      edit: "Modificare",
      transactions: "Transazioni",
      back: "Gateway",
    },

    /** {@see BPageGatewayDashboard} **/
    dashboard: {
      title: "Gestione del gateway",

      /** {@see BGatewayPaymentsChart} **/
      gateway_data_widget: {
        title: "Rapporto sui pagamenti",
        subtitle:
          "Pagamenti creati e transazioni effettuate durante il periodo di tempo selezionato.",
        chart: {
          times: "Contare",
          buys: "Acquista conteggio",
          pays: "Pagamento riuscito",
          amount_pay: "Pagato",
          amount_wage: "Tassa",
        },
      },
    },

    /** {@see BPageGatewayEdit} **/
    edit: {
      title: "Modifica gateway",
      menu: {
        delete: "Rimuovi gateway",
      },
      edit_action: "Modifica gateway",
    },

    /** {@see BPageGatewayTransactions} **/
    transactions: {
      title: "Transazioni",
      table: {
        amount: "Importo",
        currency: "Moneta",
        livemode: "Tipo",
        status: "Stato",
        target_id: "Ordine",
        risk: "Rischio",
        card: "Carta",
        issued_at: "Data di emissione",
        payment_at: "Data di pagamento",
      },
      live_mode: "Abitare",
      test_mode: "elemento",
    },
  },

  /** {@see BGatewayOverview} **/
  b_gateway_overview: {
    title: "Informazioni",
    subtitle: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    status: "Stato",
    cod_transportation: "elemento spedizione",
    cod_transportations_error:
      "Abilita il pagamento in contrassegno per almeno un metodo di spedizione!",
    payment_type: "pagamento tipo",
    cod: "elemento elemento elemento",
    online: "elemento pagamento",
    wage_percent: "elemento elemento",
    min_wage: "minimo elemento",
    max_wage: "massimo elemento",
    min_amount: "minimo transazione",
    max_amount: "massimo transazione",
    timeout: "pagamento elemento",
    timeout_unit: "elemento",
    link: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    your_gateway_status: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    oauth2_button: "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {gateway}",
    fee_payment_message:
      "Selldone — Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

    auto_config: "automatico elemento",

    keys: {
      title: "elemento elemento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    extra_config: {
      title: "pagamento servizio elemento",
      subtitle: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },

    recommended_actions: {
      title: "elemento elemento",
      subtitle:
        "Seguendo questi passaggi, inizierai a ricevere pagamenti effettivi dai tuoi clienti.",
      action_enable: "elemento elemento elemento elemento",
      make_live_enable: "elemento elemento live elemento",
    },
  },

  /** {@see BGatewayAdd} **/
  edit_gateway: {
    public_keys: "Chiavi pubbliche",
    private_keys: "Chiavi private (riservate)",
    link: "Sito web",
    status_title: "pagamento servizio stato",
    status_message:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    status_true_description: "I tuoi clienti possono pagare con questo metodo di pagamento.",

    manual_title: "manuale / automatico elemento pagamento",
    manual_message:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

    gateway_status: "Stato",
    wallet: "Portafoglio blockchain",
    developer_title: "modalità sviluppatore",
    developer_message:
      "Puoi elaborare transazioni false se il gateway supporta la modalità di debug.",
    live_mode_message: "Tutte le transazioni saranno in modalità live.",

    notifications: {
      edit_success: "Gateway {gateway_name} modificato.",
      success_delete: "pagamento metodo elemento elemento elemento!",
    },
    debug: {
      title: "elemento & elemento",
      subtitle: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },

    limit: {
      title: "ordine limite",
      subtitle: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    limit_input: {
      title: "minimo ordine importo",
      msg: "elemento elemento elemento limite.",
    },
    currency_input: {
      message: "Seleziona o inserisci le informazioni richieste.",
    },
    gateway_code: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

    hold_only_for: "elemento pagamento elemento disponibile elemento",
    manual_input: {
      false_description:
        "Seleziona o inserisci le informazioni richieste.",
      false_title: "automatico pagamento elemento",
      true_title: "elemento pagamenti elemento manuale elemento",
      true_description:
        "Seleziona o inserisci le informazioni richieste.",
    },
    delete_verify_input: {
      true_title: "Voglio rimuovere questo metodo di pagamento.",
      true_description:
        "Questo metodo di pagamento verrà rimosso dal negozio e non sarà disponibile per i clienti.",
    },
    delete_alert: {
      title: "elimina pagamento metodo",
      message: "Sei sicuro di eliminare questo metodo di pagamento dal tuo negozio?",
      action: "elimina pagamento metodo",
    },
  },

  /** {@see BPageGiftcard} **/
  gift_card: {
    title: "Carte regalo",
    menu: {
      edit: "Modificare",
      new_card: "Crea carta",
      list: "Carte",
      orders: "Ordini",
      dashboard: "Pannello",
      back: "Carte regalo",
    },

    /** {@see AdminGiftCardDashboardPage} **/
    dashboard: {
      title: "Cruscotto di gestione delle carte regalo",

      /** {@see BGiftcardStatisticsPayment} **/
      amount_widget: {
        title: "Pagamento con carta",
        title_small: "30 giorni",
        chart_amount_pay: {
          y: "Somma",
          label: "Pagamento",
        },
        chart_buys: {
          y: "Acquista",
          label: "Acquista",
        },
        total_buy: "Importo totale dell'acquisto",
        total_pay_30days: "Pagamento totale 30 giorni",
        total_pay_today: "Il pagamento di oggi",
      },

      /** {@see BGiftcardStatisticsCount} **/
      count_widget: {
        title: "Numero di carte emesse",
        title_small: "30 giorni",
        total_cards: "Numero totale di carte",
        used_cards_30days: "30 giorni di utilizzo",
        used_today: "Uso di oggi",
        chart: {
          new_cards: "Nuove carte",
          used_cards: "Carte usate",
          new_card_name: "Nuova carta",
          used_card_name: "Usato",
        },
      },

      /** {@see BGiftcardExport} **/
      export: {
        title: "Ottieni file di output",
        cards_list: "Ottieni un elenco di carte",
        get_report: "Ottieni rapporto",
      },
    }, // End of dashboard

    /** {@see AdminGiftCardManagementPage} **/
    cards: {
      title: "Elenco delle carte emesse",
      subtitle:
        "Visualizza e gestisci tutte le carte emesse. Puoi inviare carte agli utenti manualmente o vietarli se necessario.",

      loading_message: "Ottenere informazioni... attendere prego",
      issue_to_user: "Problema per l'utente",
      table: {
        card_number: "Numero di carta",
        balance: "Bilancia",
        paid: "Pagato",
        edit: "Modificare",
        delete: "Eliminare",
        expire: "Scade",
        user: "utente",
      },
      delete_alert: {
        title: "Rimuovi la carta",
        message: "Sei sicuro di voler eliminare questa carta?",
        action: "Eliminare",
      },
      notifications: {
        delete_success: "Carta regalo eliminata.",
        edit_success: "Sono state apportate modifiche.",
        issue_success: "Buono regalo rilasciato all'utente con successo.",
      },
      issue_dialog: {
        title: "Emettere carta regalo",
        action: "Confermo. Emetti la carta ora",
      },
    }, // End of cards

    /** {@see BGiftcardAdd} **/
    gift_card_edit: {
      title: "Crea Buono Regalo",
      validity: "Validità",
      validity_unit: "Mesi",
      currency: "Moneta",
      initial_balance: "Saldo iniziale della carta",
      count: "Contare",
      count_unit: "Oggetti)",
      enable_input_message: "Stato delle carte create",
      notifications: {
        create_success_title: "Salva",
        create_success: "{count} nuove carte create",
      },
    },

    /** {@see AdminGiftCardEditPage} **/
    gift_card_edit_page: {
      title: "Modifica carta regalo",
    },
  },

  /** {@see BPageDiscountCode} **/
  shop_discount: {
    title: "Codice di sconto",
    up_to: "fino a",
    menu: {
      dashboard: "Pannello",
      orders: "Ordini",
      back: "Codici Sconto",
    },

    /** {@see BPageDiscountCodeDashboard} **/
    dashboard: {
      title: "Cruscotto di gestione dei codici sconto",
      chart_amount_buy: {
        y: "Importo dell'acquisto {currency}",
        label: "Acquistare",
      },
      chart_amount_discount: {
        y: "Sconto {currency}",
        label: "Sconto",
      },
      chart_used: {
        y: "Quantità di usi",
        label: "Volte",
      },
    },
  },

  /** {@see BPageCoupon} **/
  shop_coupon: {
    title: "Buoni",
    up_to: "fino a",
    menu: {
      dashboard: "Pannello",
      back: "Buoni",
      orders: "Ordini",
    },

    /** {@see BPageCouponDashboard} **/
    dashboard: {
      title: "Cruscotto di gestione dei coupon",
      chart_amount_buy: {
        y: "Importo dell'acquisto {currency}",
        label: "Acquistare",
      },
      chart_amount_discount: {
        y: "Buono {currency}",
        label: "Buono",
      },
      chart_used: {
        y: "Quantità di usi",
        label: "Volte",
      },
    },
  },

  /** {@see BPageOffer} **/
  shop_offer: {
    title: "Offerte",
    up_to: "fino a",
    menu: {
      dashboard: "Pannello",
      orders: "Ordini",
      back: "Offerte",
    },

    /** {@see BPageOfferDashboard} **/
    dashboard: {
      title: "Cruscotto di gestione delle offerte",
      chart_amount_buy: {
        y: "Importo dell'acquisto {currency}",
        label: "Acquistare",
      },
      chart_amount_discount: {
        y: "Offerta {currency}",
        label: "Offerta",
      },
      chart_used: {
        y: "Quantità di usi",
        label: "Volte",
      },
    },
  },

  /**
   * @see BOrderConnectsList
   */
  order_connect_list: {
    subtitle:
      "Elenco degli ordini sincronizzati esternamente che devono essere evasi da fornitori di terze parti.",
  },
  /** {@see BAccountCard} **/
  account_card: {
    pay_create_receipt: "Paga la quota di attivazione",
    balance: "Bilancia",
    locked: "Bloccato",
    transfer: "Trasferimento",
    charge: "Depositare",
  },

  /** {@see TimelineStatus} **/
  timeline: {
    note: "{message}",
    info: "{message}",
    error: "{message}",

    buy: "Guardare",
    payment: "Pagamento",

    confirm:
      "Conferma dell'ordine, <b>{success}</b> confermato e <b>{fail}</b> rifiutato.",
    prepare: "Preparazione dell'ordine.",
    send: "Ordine spedito entro <b>{delivery}</b> .",
    delivered: "L'ordine è stato consegnato al cliente.",
    "fill-inputs": "Inserisci il modulo di informazioni compilato dall'acquirente.",
    "return-add": "Invia una richiesta di reso del prodotto, {product}.",
    "return-accept": "Richiesta di reso {return_code} confermata.",
    "return-reject": "Richiesta {return_code} rifiutata.",

    "reject-order": "Rifiuta l'ordine. Codice: {reject_code}.",
    "reject-order-clear": "Annulla il rifiuto dell'ordine. Codice: {reject_code}.",

    "delivery-returned":
      "L'ordine non è stato ricevuto dal cliente ed è stato restituito. È necessario spedire di nuovo.",
    "delivery-canceled": "Consegna annullata. È necessario spedire di nuovo.",
    "edit-receiver-info": "L'indirizzo di consegna dell'ordine è stato modificato dall'acquirente.",
    "edit-billing-info": "Indirizzo di fatturazione modificato dall'acquirente.",
    "payment-cod-confirm": "Contrassegno Il pagamento è stato confermato.",
    "payment-cash-confirm":
      "Il pagamento di {amount} {currency} in contanti per il conto è stato confermato.",
    "payment-dir-confirm": "Confermata la ricezione del pagamento diretto.",

    vendor: "Lo stato dell'ordine fornitore è cambiato da <b>{from}</b> a <b>{to}</b> .",

    "connect-sync": "Ordine sincronizzato da Connect OS.",
    "connect-shipped": "L'ordine Connect è stato spedito da {shipping}.",
    "connect-returned": "L'ordine Connect è stato restituito da {shipping}.",
    "connect-failed": "Evasione dell'ordine non riuscita dal partner. {reason}",
    "connect-canceled": "L'ordine è stato annullato dal partner. {reason}",
    "connect-action-cancel": "Richiesta di annullamento dell'ordine. {reason}",
    "connect-put-hold": "L'ordine è stato sospeso. {reason}",
    "connect-remove-hold": "L'ordine è stato rimosso dalla sospensione. {reason}",
    "connect-confirmed": "L'ordine è stato confermato.",

    "vendor-payout": "💸 Pagamento al venditore.",
    "vendor-wallet-transaction": "venditori portafoglio transazione.",

    "vendor-sms":
      "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione. {vendor} {phone}</b>",

    // ━━━━━━━━━━━━━━━━━━━━━━ Email Packs ━━━━━━━━━━━━━━━━━━━━━━

    "email-buy": "Invia email di conferma acquisto al cliente.",
    "email-payment": "Invia email di conferma pagamento al cliente.",
    "email-update": "elemento ordine aggiorna email elemento cliente.",

    "email-vendor":
      "🔔 L'e-mail di notifica dell'ordine è stata inviata a <b>{vendor}</b> ╏ {email}.",

    // ━━━━━━━━━━━━━━━━━━━━━━ SMS Packs ━━━━━━━━━━━━━━━━━━━━━━
    "sms-payment":
      "Invia un SMS di conferma del pagamento al cliente tramite {phone}.",
    "sms-ready-to-ship":
      "Invia un SMS al cliente informandolo che il suo ordine è pronto per essere spedito tramite {phone}.",
    "sms-ready-to-pickup":
      "Invia un SMS al cliente informandolo che il suo ordine è pronto per il ritiro tramite {phone}.",
    "sms-order-confirmation":
      "Invia un SMS di conferma dell'ordine al cliente tramite {phone}.",

    "count-adjustment":
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {product} {from} {to}",
  },

  /** {@see FinanceInlineChart} **/
  inline_chart: {
    today: "In data odierna",
    last_days: "{days} giorni fa",
  },
  /** {@see BProductsWindow} **/
  products_select: {
    move_category: "Sposta la categoria <b>{category}</b> in un'altra categoria",
    move_product: "Sposta il prodotto <b>{product}</b> nella categoria",
    load_more_products:
      "Altri prodotti sono disponibili in questa categoria. Fare clic per caricare più articoli.",
    product_menu: {
      dashboard: "Pannello di controllo del prodotto",
      inventory: "Inventario e varianti",
    },
    notifications: {
      copy_success: "Copia del prodotto.",
      change_category_success: "Categoria di prodotto modificata.",
    },

    filter_box: {
      no_root_filter_message: "Hai prodotti in root ma nessun filtro.",
      has_root_filter_message: "Imposta i filtri per la categoria principale.",
      set_filter_message: "elemento elemento elemento filtro.",
      edit_action: "Modifica filtri radice",
      clear_action: "Cancella filtri radice",
    },
    ai: {
      title: "AI prodotto elemento",
    },
    menu: {
      select_all_products: "seleziona elemento prodotti",
      unselect: "elemento",
      sort_categories: "elemento / ordina categorie",
      subscription_vendor_not_support_message:
        "Seleziona o inserisci le informazioni richieste.",
      vendor_owner_not_assignable_message:
        "Non è possibile assegnare un venditore per prodotti con un venditore come proprietario!",
      category_assign_profile: "Assegna il profilo ai prodotti nella categoria",
      category_assign_profile_subtitle: "imposta, spedizione, elemento, elemento,...",
      bulk_discount: "elemento sconto",
      bulk_discount_subtitle: "elemento sconto elemento elemento prodotti.",
    },

    engine: {
      title: "elemento prodotti elemento",
      subtitle:
        "Altri prodotti verranno caricati dalle categorie e dai tag selezionati.",
      load_in_tips: "Seleziona o inserisci le informazioni richieste. {category}",
      action: "modifica {category} elemento",
    },
  },
  /** {@see BProductsPanel} **/
  product_panel: {
    excel_import: {
      title: "elemento elemento / CSV file elemento.",
      select_file: "seleziona file",
      max_file: "massimo file elemento: 20mb",
      download_sample: "scarica elemento",
    },
    ai: {
      title: "AI prodotto elemento",
    },
  },

  /** {@see BOrderDashboardVendor} **/
  order_vendor: {
    has_panel: "elemento elemento",
    no_panel: "elemento elemento",
    manual_action: {
      title: "manuale elemento",
      message: "È possibile aggiornare manualmente lo stato dell'ordine fornitore.",
      guides: [
        "I fornitori con accesso al pannello possono aggiornare la propria evasione (sottoordini) nella dashboard dedicata.",
        "Se il fornitore non ha accesso al pannello, lo stato dell'ordine fornitore verrà modificato automaticamente modificando lo stato del carrello.",
        "elemento elemento aggiorna venditore ordini elemento.",
      ],
    },
    payouts: {
      title: "pagamento",
      message: "elemento elemento venditore pagamento elemento transazione.",

      charge_tooltip: "elemento venditore portafoglio.",
      withdraw_tooltip: "elemento elemento venditore portafoglio.",
      payout_tooltip: "pagamento elemento elemento venditore.",
    },
    order_canceled: "ordine elemento",
    order_rejected: "ordine elemento elemento venditore",
  },

  /**
   * @see VPageVendorDashboard
   */
  vendor_dashboard: {
    info: {
      subtitle: "marketplace informazioni.",
    },
    performance: {
      subtitle: "elemento elemento elemento.",
    },
    products: {
      title: "Prodotti",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    wallets: {
      title: "I miei portafogli",
      subtitle:
        "Non è necessario aggiungere portafogli manualmente! I portafogli fornitore verranno creati automaticamente.",
    },

    open_marketplace_page: "elemento marketplace pagina",
    open_my_store_page: "elemento elemento negozio pagina",
    open_my_listing_page: "elemento elemento inserzione pagina",
    add_products_permission: "aggiungi prodotti permesso",
    add_categories_permission: "aggiungi categorie permesso",
  },

  /**
   * @see VPageVendorInventory
   */
  vendor_inventory: {
    title: "Elenco prodotti",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
  },

  /**
   * @see VPageVendorAccess
   */
  vendor_member: {
    title: "Membri del team",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    add_action: "Aggiungi nuovo membro",
    pending: {
      title: "Inviti in sospeso",
      message: "Visualizza l'elenco degli inviti in attesa di accettazione.",
    },
  },

  /**
   * @see VMemberAddDialog
   */
  vendor_member_add: {
    title_edit: "Modifica membro team",
    title_new: "aggiungi nuovo team membro",
    member: {
      title: "team membro dettagli",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    access: {
      view_data: "elemento dati",
      apply_changes: "Salva modifiche",
    },
    inputs: {
      email: {
        label: "Email indirizzo",
        placeholder: "elemento elemento membri email indirizzo...",
      },
    },
    notifications: {
      add_success: {
        title: "membro elemento",
        message: "Il membro del team è stato aggiunto con successo.",
      },
      update_success: {
        title: "membro elemento",
        message: "Le informazioni del membro del team sono state aggiornate con successo.",
      },
    },
    actions: {
      add: "aggiungi membro",
    },
  },

  /**
   * @see VPageVendorPayments
   */
  vendor_payments: {
    list: {
      title: "Cronologia pagamenti",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    connect: {
      title: "Collega banca",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    verify_dialog: {
      title: "Verifica pagamento",
      option: {
        title: "venditore elemento",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      inputs: {
        verify: {
          label: "elemento elemento elemento elemento pagamento?",
          false_description:
            "No, non ho ancora ricevuto questo pagamento sul mio conto bancario.",
          true_description: "Sì, ho ricevuto e verificato questo pagamento.",
        },
      },
    },
  },

  /**
   * @see BVendorOrderRefund
   */
  vendor_order_refund: {
    title: "Rimborsa ordine",
    subtitle:
      "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b><b></b>",
    inputs: {
      note: {
        message: "elemento elemento elemento elemento venditore.",
        placeholder: "Puoi allegare una nota qui...",
      },
      amount: {
        error_message: "L'importo residuo è stato superato.",
      },
    },
  },

  /** {@see BOrderVendorPaymentManagement} **/
  order_vendor_payment: {
    message:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    vendor_wallets: "venditore portafogli",
    my_wallets: "Il mio portafoglio",
    refund_order_action: "rimborso ordine",
    automatic_payout_list: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    reversal_transfer_action: "Trasferimento inverso",
  },

  /** {@see BPageOrderPhysicalTrack} **/
  physical_order_track: {
    title: "Rapporti e valutazioni dei rischi",
  },
  /** {@see BPageOrderVirtualTrack} **/
  virtual_order_track: {
    title: "Rapporti e valutazioni dei rischi",
  },
  /** {@see BPageOrderVirtualTimeline} **/
  virtual_order_timeline: {
    title: "Sequenza temporale",
  },
  /** {@see BPageOrderPhysicalTimeline} **/
  physical_order_timeline: {
    title: "Sequenza temporale",
  },
  /** {@see BPageOrderPhysicalInput} **/
  physical_order_inputs: {},
  /** {@see BOrderTimeline} **/
  order_timeline: {
    message:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    add_note_subtitle: "Scrivi un messaggio e menziona i tuoi colleghi.",

    message_input: "Scrivi un messaggio qui...",
    pin_action: "Appunta in alto",
    unpin_action: "Sblocca",
    copy_html: "Copia Html",
    notifications: {
      add_note_success: "Nota aggiunta.",
      edit_note_success: "Nota modificata.",
      delete_note_success: "Nota cancellata.",
    },
    delete_dialog: {
      title: "Elimina nota",
      message: "Vuoi eliminare questa nota?",
      action: "Elimina nota",
    },
    resend_dialog: {
      title: "Rinvia l'e-mail",
      message: "Sei sicuro di inviare nuovamente questa email al tuo cliente?",
      action: "Sì, invia nuovamente",
      success: "Email reinviata al tuo cliente.",
    },
  },

  /** {@see BPageShuttleWalletAccounts} **/
  accounts: {
    title: "Il mio portafoglio",
    message:
      "Devi creare almeno un account con la valuta che stai utilizzando in Selldone. È necessario ricaricare questo account per pagare la tariffa del servizio.",
    add_new: "Crea un nuovo account",
    new_account: "Aggiungi nuovo account",
    new_account_dialog: {
      title: "Nuovo account",
      account_name_input: "Nome utente",
      currency_input: "Unità monetaria",
      currency_input_message:
        "L'account creato conterrà solo i valori di questa valuta.",
      new_account_wage: "Costo di creazione del nuovo account: gratuito per il primo account",
      create_account_action: "Creare un account",
    },
  },

  /** {@see UserGifts} **/
  user_gifts: {
    menu: {
      send_gift: "Invia REGALO",
      sent: "Spedire",
      received: "Ricevuto",
    },

    /** {@see BPageShuttleWalletGiftsSend} **/
    send_gifts: {
      title: "Regali inviati",
      sub_title:
        "Puoi inviare un regalo ai tuoi amici o clienti. Il destinatario può accettare o rifiutare il tuo regalo. L'importo viene bloccato nel tuo account e ritirato se il destinatario accetta. In caso contrario, questo importo verrà trasferito sul tuo account.",
      table: {
        user: "utente",
        amount: "Importo",
        currency: "Moneta",
        account_name: "A partire dal",
        status: "Stato",
        message: "Messaggio",
        created_at: "Data di Creazione",
      },
    },

    /** {@see BPageShuttleWalletGiftsReceived} **/
    received_gifts: {
      title: "Regali ricevuti",
      sub_title:
        "I tuoi regali ricevuti da Selldone o altri",

      table: {
        amount: "Importo",
        currency: "Moneta",
        account_from: "A partire dal",
        status: "Stato",
        message: "Messaggio",
        created_at: "Data di Creazione",
        receive: "Ricevere",
      },
    },
  },

  /** {@see BAccountGiftRedeem} **/
  get_gift_dialog: {
    title: "Ricevi un regalo",
    more: "Di più ..",
    amount: "Importo",
    message: "Messaggio",
    account_to_input: "Conto di destinazione",
    account_to_input_message: "Gli importi del regalo verranno depositati su questo conto.",
    get_action: "Accettare il regalo",
    notifications: {
      received_success_title: "Congratulazioni",
      received_success:
        "L'importo del regalo {amount} {currency} è stato depositato sul tuo account.",
    },
  },
  /** {@see BAccountGiftSend} **/
  send_gift_dialog: {
    title: "Invia REGALO",
    account_from_input: "Scegli un account",
    account_from_input_message: "Gli importi dei regali vengono prelevati da questo conto.",
    receiver_input: "Ricevitore",
    receiver_input_message: "È possibile inserire l'indirizzo e-mail o il numero di telefono.",
    message_input: "Messaggio",
    message_input_message: "Puoi lasciare un messaggio al destinatario.",
    amount_input: "Importo",
    currency_input: "Unità monetaria",
    currency_input_message: "Il prezzo è calcolato in questa valuta.",
    send_action: "Invia REGALO",
    notifications: {
      send_success: "Un regalo di {amount} {currency} è stato inviato a {receiver}.",
    },
  },

  /** {@see BAccountInput} **/
  account_list: {
    account_input: "Numero di conto",
    account_input_message:
      "Gli importi dei regali per questa valuta verranno depositati su questo conto.",
    free_balance: "Saldo libero",
    account_name: "Nome utente",
  },
  /** {@see OPageMonetizeAccounts} **/
  user_monetize_accounts: {
    title: "Conti di deposito",
    sub_title:
      "Gli importi dei regali verranno automaticamente depositati su questi conti.",
    message:
      "Selldone deposita fondi per la tua attività sui social media, partecipa allo sviluppo di Selldone, presenta amici e così via. Scegliendo un conto di deposito per ciascuna valuta, gli importi del regalo verranno depositati automaticamente su quel conto nel tuo dominio. Tali importi possono essere accreditati a Selldone. I prelievi saranno possibili solo per i partner commerciali.",
    add_account_action: "Aggiungi account",
    add_dialog: {
      title: "Collega un account per ricevere regali",
      account_input: "Numero di conto",
      account_input_message:
        "Gli importi dei regali per questa valuta verranno depositati su questo conto.",
      set_as_default_action: "Seleziona come account predefinito",
    },
    table: {
      currency: "Moneta",
      account_number: "Numero di conto",
      account_name: "Nome",
      payment: "Importo del deposito",
      reset_at: "Ripristina a",
      delete: "Eliminare",
    },
    notifications: {
      set_success: "Account aggiunto correttamente.",
      delete_success:
        "Account rimosso con successo dall'elenco degli account predefiniti per la ricezione di regali.",
    },
    delete_alert: {
      title: "Eliminare l'account",
      message:
        "Vuoi rimuovere questo account dall'elenco Account regalo?",
      action: "Eliminare",
    },
  },
  /** {@see UserMonetize} **/
  user_monetize: {
    title: "Fare soldi",
    menu: {
      plans: "Piani",
      accounts: "Conti",
      participant: "Partecipante",
    },
  },
  /** {@see OPageMonetizeReferral} **/
  user_monetize_plans: {
    title: "Progetti di collaborazione e monetizzazione",
    sub_title:
      "Riceverai un credito sul conto per i regali di riferimento. Questi importi verranno addebitati sul tuo conto e possono essere prelevati solo ai partner commerciali di Selldone (non tutti). Puoi spendere i soldi per la commissione dei servizi di Selldone.",

    discount: "Sconto",
    your_income: "Il tuo reddito",
    level_2: "Dal livello due",
    level_3: "Dal livello tre",
    link_message: "Iscrizione: {registered}, accettata: {accepted}",
    link_tip:
      "Puoi aggiungere la frase ?ref={link_code} alla fine di ogni indirizzo che condividi.",
    table: {
      currency: "Moneta",
      amount: "Bilancia",
      total: "Pagamento totale",
      payment_date: "Ultima data di pagamento",
      withdraw: "Ritiro",
    },

    notifications: {
      get_credit_success:
        "L'importo richiesto è stato depositato sul tuo conto.",
    },
  },
  /** {@see BPageShuttleIdentity} **/
  basic_information: {
    title: "La mia identità e il mio profilo",
    email: "Indirizzo e-mail",
    tel: "Numero di cellulare",
    address: "indirizzo",
    payment: "Transazioni valide",
    personal_information: "Informazioni sull'identità",
    main_profile: "Profilo principale",
    main_profile_subtitle:
      "Queste informazioni sono pubblicamente disponibili a tutti.",
    kyc_waiting_info:
      "Stiamo verificando l'accuratezza delle informazioni che inserisci. Questo processo è obbligatorio in conformità con le regole KYC e ridurrà il rischio di transazioni finanziarie. Puoi sfruttare i vantaggi presenti e futuri di questo servizio.",

    personal_info_dialog: {
      title: "Informazioni sull'identità",
      name_input: "nome di battesimo",
      family_name_input: "Cognome",
      number_input: "Numero di passaporto (o codice nazionale)",
      birthday_input: "Compleanno",
      birthday_input_placeholder: "Inserisci il tuo compleanno",
      address_input: "indirizzo",
      postcode_input: "codice postale",
      tel_input: "Numero di contatto",
      passport_image_input: "Seleziona l'immagine del passaporto",
      passport_image_input_message:
        "Carica una scansione dell'immagine del tuo passaporto.",
      personal_image_input: "Scegli la tua immagine",
      personal_image_input_message:
        "Carica un'immagine di scansione avanti e indietro sulla tua carta nazionale su un'immagine.",
    },
    profile_dialog: {
      title: "Profilo principale",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      full_name_input: "Nome e cognome",
      tel_input: "Numero di contatto",
      email_input: "E-mail",
      website_input: "Sito web",
      address_input: "indirizzo",
      about_input: "Su di me",
      about_long_input: "Testo lungo su di me",
      image_input: "Seleziona l'immagine del profilo",
      image_input_message:
        "Carica la tua immagine. Questa immagine verrà utilizzata come immagine del tuo profilo.",
      notifications: {
        update_profile_success: "Il tuo profilo è stato aggiornato.",
        update_personal_info_success:
          "Le tue informazioni sono state registrate con successo",
      },
    },
    charge_account_approve_message:
      "Addebita sul tuo conto per approvare la tua transazione bancaria.",
    payment_approval: "Approvazione del pagamento",
    residential_address_checking:
      "I documenti dell'indirizzo di residenza in coda di controllo.",
    add_residential_address:
      "Aggiungi la tua posizione e la prova dei documenti dell'indirizzo di residenza.",
  },
  /** {@see BUserPhoneVerify} **/
  phone_verify: {
    title: "Numero di cellulare",
    step1_title:
      "Inserisci il tuo numero di telefono.",
    phone_number_input: "Numero di cellulare",
    next: "Passo successivo",
    sms_code_input: "Codice di verifica",
    sms_code_message: "Codice di verifica a 6 cifre inviato a {phone_number}.",

    notifications: {
      duplicated_number_error: "Questo numero è già stato approvato da te.",
      send_activation_code_success_title: "Codice di verifica",
      send_activation_code_success:
        "Il codice di verifica è stato inviato a {phone_number}.",
      verify_success: "Il tuo numero di cellulare è stato verificato",
    },
  },
  /** {@see BPageShuttleCompanies} **/
  companies: {
    title: "I miei conti aziendali",
    message:
      "Aziende, imprenditori e team di professionisti possono sviluppare prodotti e applicazioni basati su Selldone. È un requisito per creare un profilo aziendale.",
    new_company: "Nuova compagnia",
  },
  /** {@see BCompanyAdd} **/
  add_company: {
    name_input: "Nome della ditta",
    website_input: "Sito web",
    email_input: "E-mail",
    address_input: "indirizzo",
    tel_input: "tel",
    mobile_input: "elemento",
    edit_action: "Modifica azienda",
    create_action: "Crea compagnia",
    notifications: {
      add_success: "Account aziendale {name} creato.",
      edit_success: "Account aziendale modificato.",
    },
  },
  /** {@see UserAccessControl} **/
  user_access_control: {
    menu: {
      personal_key: "Personale",
      shop_key: "Clienti",
      apps: "App",
    },
    connected_apps_title: "App connesse",
    connected_apps_message:
      "Vedrai un elenco di tutti gli store e le app collegati al tuo account di dominio. È possibile eliminare l'accesso a uno qualsiasi di essi.",
    clients_title: "Clienti",
    clients_message:
      "Queste chiavi vengono utilizzate per creare token di accesso dal server. Si noti che le chiavi sono riservate e posizionate sul server solo in modo che non siano visibili ad altri.",
    personal_keys_title: "Chiavi di accesso personali",
    personal_keys_message:
      "Puoi creare le chiavi del tuo account qui. Tieni presente che queste chiavi potranno accedere al tuo account. Crea e usa queste chiavi solo se sai esattamente cosa stai facendo.",
  },

  /** {@see BPageShuttleSecurity} **/
  user_security_control: {
    title: "Sicurezza dell 'Account",
    message: "Puoi modificare le impostazioni di sicurezza del tuo account qui.",

    delete: {
      title: "Eliminare l'account",
      subtitle:
        "Prima di eliminare il tuo account, assicurati di aver eliminato tutti i negozi.",
      action: "Sono sicuro, elimina il mio account",
      agreement:
        "Accetto che tutte le mie informazioni vengano cancellate dal tuo server. Le tue informazioni saranno cancellate secondo un programma da noi stabilito per prevenire frodi o usi impropri.",
    },

    list: {
      email: {
        title: "E-mail primario",
        sub_title:
          "Hai la possibilità di aggiornare l'e-mail principale associata a questo account.",
        action_title: "Modifica e-mail principale",
        action: "Invia collegamento di verifica",
      },
      password: {
        title: "Parola d'ordine",
        sub_title: "Scegli una password complessa per il tuo account.",
        action_title: "Password di accesso all'account",
        not_exist: "Non entrato",
        action: "Cambia la password",
      },
      phone: {
        title: "Numero di cellulare",
        sub_title:
          "Conferma il tuo numero di cellulare. Potrai accedere tramite questo numero.",
        action_title: "Il numero di telefono principale dell'account",
        action: "Verifica numero",
      },

      two_step: {
        title: "Entrata in due fasi",
        sub_title:
          "Conferma il tuo numero di cellulare. Potrai accedere tramite questo numero.",
        action_title: "Aumenta la sicurezza dell'account",
        activated_action: "Attivato",
        active_action: "Attivo ora",
      },
    },
    two_step_auth: {
      step_1: {
        title: "Installa l'app Google Authenticator",
      },
      step_2: {
        title: "Inserisci il codice generato dall'app",
        message:
          "Il codice a 6 cifre è generato da un algoritmo nel tuo cellulare. È possibile scaricare l'app dal seguente link. Premere il tasto generatore di codice per creare un codice QR contenente la password.",
        qr_code_info:
          "Se non è possibile eseguire la scansione, è possibile copiare e incollare manualmente il codice nell'app:",
        create_new_code: "Crea nuovo codice",
        qr_code_scanning:
          "Scansiona il codice QR creato da Google Authenticator Mobile App e inserisci il codice generato per conferma nel box in questa pagina.",
        qr_code_regenerate_info:
          "Nota: Premendo il tasto sopra verrà creata una nuova chiave e la chiave precedente sarà inutilizzabile. Immettere la nuova chiave nell'app del telefono.",
      },
      step_3: {
        title: "Inserisci il codice creato",
        message:
          "Inserisci nel campo sottostante il codice di accesso creato nell'applicazione.",
        activation_key_input: "Codice d'accesso",
      },
      activated_alert: "L'accesso in 2 passaggi è abilitato.",
      activated_message:
        "L'accesso in due passaggi è abilitato per il tuo account. D'ora in poi dovrai inserire un secondo codice che cambia ogni 30 secondi per accedere al tuo account. Per disabilitare l'accesso in due passaggi, fai doppio clic su Premi un passaggio e segui i passaggi.",
      cancel_two_step_login_action: "Annulla l'accesso in due passaggi",
      cancel_two_step_login_info:
        "Se desideri disabilitare la verifica in due passaggi, inserisci la tua password e fai clic sulla chiave di accesso in due passaggi.",
      password_input: "Parola d'ordine",
      cancel_2fa_action: "Annulla l'accesso in due passaggi",
    },

    change_password_dialog: {
      title: "Cambia la password",
      message: "Usa una password complessa e memorabile.",
      password_input: "Password attuale",
      new_password_input: "Nuova password",
      re_new_password_input: "ripetere la nuova password",
      tips: {
        length: "La password deve essere di almeno 8 caratteri",
        chars: "Almeno una lettera maiuscola e un numero.",
        match: "Password abbinata.",
      },
      change_password_action: "Cambia la password",
      notifications: {
        change_password_title: "Cambia la password",
        change_password: "Password cambiata con successo.",
      },
    },
  },
  /** {@see AuthorizedClients} **/
  authorized_clients: {
    title: "Elenco di negozi/app collegati",
    table: {
      name: "Nome",
      app: "elemento",
      scopes: "Ambiti",
      shop: "Negozio limitato",
    },
    remove_action: "Rimuovere l'accesso",
    delete_alert: {
      title: "Eliminare",
      message:
        "Vuoi revocare questo accesso? Tieni presente che questa app non avrà più accesso al tuo account.",
      action: "Rifiuta l'accesso",
    },
  },
  /** {@see Clients} **/
  clients: {
    title: "Elenco clienti",
    create_new_action: "Crea nuovo cliente",
    table: {
      client_id: "Identificativo cliente",
      app: "elemento",
      name: "elemento",
      secret_key: "Chiave segreta",
    },
    create_dialog: {
      title: "Nuovo cliente",
      error_msg: "<strong>Errore!</strong> Spiacenti, si è verificato un errore!",
      name_input: "Nome",
      name_input_message: "Qualcosa che i tuoi utenti riconoscono e di cui si fidano.",
      redirect_input_message: "Restituisci l'indirizzo al tuo sito.",
    },
    edit_dialog: {
      title: "Modifica accesso",
    },
    delete_alert: {
      title: "Eliminare",
      message: "Vuoi eliminare questo cliente?",
      action: "Eliminare",
    },
  },
  /** {@see PersonalAccessTokens} **/
  personal_access_tokens: {
    title: "Elenco dei token di accesso personali",
    create_action: "Crea un nuovo token",
    table: {
      name: "Nome",
      scopes: "Accessi",
      expire_at: "Data di scadenza",
    },
    create_dialog: {
      title: "Costruzione di gettoni",
      error_message: "<strong>Errore!</strong> Spiacenti, si è verificato un errore!",
      name_input: "alias es. il mio nome simbolico",
      name_input_message: "Nome token preferito.",
      scopes_list: "Elenco di accesso ai token",
    },
    access_token_dialog: {
      title: "Chiave di accesso personale",
      message:
        "Ecco il token del tuo token di accesso personale. Questa è l'unica volta che questo token verrà visualizzato, quindi non perderlo! Ora puoi utilizzare questo token per richiedere un'API.",
    },
    delete_alert: {
      title: "Eliminare",
      message: "Vuoi eliminare questo token di accesso?",
      action: "Eliminare",
    },
  },

  /** {@see Scopes} **/
  scopes: {
    //--------------------------- Profile ---------------------------
    profile: {
      name: "profilo",
      description:
        "Leggi le informazioni sul profilo tra cui nome, indirizzo e-mail, immagine e stato di autenticazione.",
    },
    phone: {
      name: "numero di telefono",
      description: "accesso al numero di telefono.",
    },
    address: {
      name: "Indirizzi",
      description: "Leggi l'indirizzo salvato dalla rubrica.",
    },
    "user:profile:write": {
      name: "profilo elemento",
      description: "modifica elemento elemento utente profilo informazioni.",
    },

    //--------------------------- Storefront ---------------------------
    "my-gift-cards": {
      name: "Carte regalo",
      description: "Accesso alle mie carte.",
    },
    "order-history": {
      name: "Cronologia degli ordini",
      description: "Leggi la cronologia degli ordini.",
    },
    buy: {
      name: "Acquistare",
      description: "Effettua un ordine e acquista dal negozio.",
    },

    //--------------------------- Backoffice ---------------------------
    articles: {
      name: "Modifica contenuto",
      description: "Modifica articoli.",
    },
    "backoffice:notifications": {
      name: "elemento elemento",
      description: "elemento elemento elemento elemento.",
    },
    "backoffice:order:write": {
      name: "ordine elemento",
      description: "modifica elemento elemento negozio ordini.",
    },
    "backoffice:order:read": {
      name: "ordine accesso",
      description: "lettura negozio ordini.",
    },
    "backoffice:support-tickets": {
      name: "elemento elemento",
      description: "elemento elemento elemento.",
    },
    "backoffice:shop:read": {
      name: "negozio informazioni",
      description: "lettura negozio dettagli elemento elemento.",
    },
    "backoffice:shop:write": {
      name: "negozio elemento",
      description: "crea elemento elemento negozio dettagli.",
    },
    "backoffice:shop:add": {
      name: "aggiungi negozio",
      description: "Aggiungi un nuovo negozio al sistema.",
    },
    "backoffice:shop:delete": {
      name: "elimina negozio",
      description: "Elimina un negozio dal sistema.",
    },
    "backoffice:giftcard:write": {
      name: "regalo carta elemento",
      description: "crea elemento elemento regalo carte.",
    },
    "backoffice:giftcard:read": {
      name: "regalo carta accesso",
      description: "lettura regalo carta dettagli elemento elemento.",
    },
    "backoffice:faq:write": {
      name: "elemento elemento",
      description: "Creare e gestire le domande frequenti.",
    },
    "backoffice:faq:read": {
      name: "elemento accesso",
      description: "lettura elemento dettagli elemento elemento.",
    },
    "backoffice:category:write": {
      name: "categoria elemento",
      description: "crea elemento elemento prodotto categorie.",
    },
    "backoffice:category:read": {
      name: "categoria accesso",
      description: "lettura categoria dettagli elemento elemento.",
    },
    "backoffice:product:write": {
      name: "prodotto elemento",
      description: "aggiungi elemento elemento prodotti.",
    },
    "backoffice:product:read": {
      name: "prodotto accesso",
      description: "lettura prodotto dettagli elemento elemento.",
    },
    "backoffice:report:read": {
      name: "rapporto accesso",
      description: "lettura negozio rapporti elemento informazioni.",
    },
    "backoffice:finance:write": {
      name: "elemento elemento elemento",
      description: "Gestisci i conti finanziari collegati al negozio.",
    },
    "backoffice:finance:read": {
      name: "elemento elemento accesso",
      description: "Leggi i dettagli e le statistiche del conto finanziario.",
    },
    "backoffice:page:write": {
      name: "pagina elemento",
      description: "modifica negozio pagina.",
    },
    "backoffice:page:read": {
      name: "pagina accesso",
      description: "lettura negozio pagina dettagli elemento elemento.",
    },
    "backoffice:logistic:write": {
      name: "elemento elemento",
      description: "elemento elemento informazioni.",
    },
    "backoffice:logistic:read": {
      name: "elemento accesso",
      description: "lettura elemento dettagli elemento elemento.",
    },
    "backoffice:staff:write": {
      name: "elemento elemento",
      description: "modifica elemento elemento elemento dettagli.",
    },
    "backoffice:staff:read": {
      name: "elemento accesso",
      description: "lettura elemento informazioni elemento elemento.",
    },
    "backoffice:business-profile:write": {
      name: "azienda profilo elemento",
      description: "elemento azienda profili.",
    },
    "backoffice:business-profile:read": {
      name: "azienda profilo accesso",
      description: "lettura azienda profilo dettagli.",
    },
    "backoffice:discount-code:write": {
      name: "sconto codice elemento",
      description: "elemento negozio sconto codice.",
    },
    "backoffice:discount-code:read": {
      name: "sconto codice accesso",
      description: "lettura sconto codice dettagli elemento elemento.",
    },
    "backoffice:wallet:write": {
      name: "portafoglio elemento",
      description: "elemento utente portafogli.",
    },
    "backoffice:wallet:read": {
      name: "portafoglio accesso",
      description: "lettura portafoglio informazioni elemento elemento.",
    },
    "backoffice:coupon:write": {
      name: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      description: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    "backoffice:coupon:read": {
      name: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      description: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    "backoffice:offer:write": {
      name: "offerta elemento",
      description: "elemento negozio offerta.",
    },
    "backoffice:offer:read": {
      name: "offerta accesso",
      description: "lettura offerta informazioni elemento elemento.",
    },
    "backoffice:cashback:write": {
      name: "elemento elemento",
      description: "elemento negozio elemento offerta.",
    },
    "backoffice:cashback:read": {
      name: "elemento accesso",
      description: "lettura elemento dettagli elemento elemento.",
    },
    "backoffice:lottery:write": {
      name: "elemento elemento",
      description: "elemento negozio elemento.",
    },
    "backoffice:lottery:read": {
      name: "elemento accesso",
      description: "lettura elemento dettagli elemento elemento.",
    },
    "backoffice:community:write": {
      name: "elemento elemento",
      description: "elemento elemento elemento.",
    },
    "backoffice:community:read": {
      name: "elemento accesso",
      description: "lettura elemento dettagli elemento elemento.",
    },
    "backoffice:customer:write": {
      name: "cliente elemento",
      description: "elemento cliente dettagli.",
    },
    "backoffice:customer:read": {
      name: "cliente accesso",
      description: "lettura cliente informazioni elemento elemento.",
    },
    "backoffice:ribbon:write": {
      name: "elemento elemento",
      description: "elemento negozio elemento.",
    },
    "backoffice:ribbon:read": {
      name: "elemento accesso",
      description: "lettura elemento dettagli elemento elemento.",
    },
    "backoffice:ai:write": {
      name: "AI elemento",
      description: "elemento AI elemento.",
    },
    "backoffice:ai:read": {
      name: "AI accesso",
      description: "lettura AI elemento elemento elemento.",
    },
    "backoffice:vendor-payment:write": {
      name: "venditore pagamento elemento",
      description: "elemento venditore pagamenti.",
    },
    "backoffice:vendor-payment:read": {
      name: "venditore pagamento accesso",
      description: "lettura venditore pagamento dettagli elemento elemento.",
    },
    "backoffice:company:read": {
      name: "azienda accesso",
      description: "lettura azienda dettagli elemento elemento.",
    },
    "backoffice:company:write": {
      name: "azienda elemento",
      description: "elemento azienda informazioni.",
    },
    "backoffice:note:read": {
      name: "nota accesso",
      description: "lettura note elemento elemento dettagli.",
    },
    "backoffice:note:write": {
      name: "nota elemento",
      description: "elemento note.",
    },
    "backoffice:affiliate:write": {
      name: "elemento elemento",
      description: "elemento elemento informazioni.",
    },
    "backoffice:affiliate:read": {
      name: "elemento accesso",
      description: "lettura elemento dettagli elemento elemento.",
    },
    "backoffice:print:write": {
      name: "elemento elemento",
      description: "elemento elemento elemento.",
    },
    "backoffice:print:read": {
      name: "elemento accesso",
      description: "lettura elemento dettagli.",
    },
    "selldone:token:read": {
      name: "Accesso token",
      description: "lettura elemento dettagli elemento elemento.",
    },
    "selldone:token:write": {
      name: "Gestione token",
      description: "elemento elemento.",
    },

    //--------------------------- Selldone ---------------------------
    "selldone:monetization:read": {
      name: "elemento accesso",
      description: "lettura elemento dettagli elemento elemento.",
    },
    "selldone:monetization:write": {
      name: "elemento elemento",
      description: "elemento elemento, elemento elemento elemento.",
    },
    "selldone:identification": {
      name: "elemento accesso",
      description: "accesso utente elemento dettagli.",
    },
    "selldone:developer:read": {
      name: "elemento accesso",
      description: "lettura elemento dettagli elemento elemento.",
    },
    "selldone:developer:write": {
      name: "elemento elemento",
      description: "elemento elemento informazioni.",
    },
    "selldone:security:write": {
      name: "elemento elemento",
      description: "elemento elemento elemento.",
    },

    //--------------------------- Connect ---------------------------
    "connect:provider:write": {
      name: "elemento elemento",
      description: "elemento collegato servizio elemento.",
    },
    "connect:provider:read": {
      name: "elemento accesso",
      description: "lettura elemento dettagli elemento elemento.",
    },

    //--------------------------- Agency ---------------------------
    "agency:read": {
      name: "elemento accesso",
      description: "lettura elemento dettagli elemento elemento.",
    },
    "agency:write": {
      name: "elemento elemento",
      description: "elemento elemento informazioni.",
    },

    //--------------------------- Vendor ---------------------------

    "vendor-read": {
      name: "Accesso venditore",
      description: "lettura venditore dettagli elemento elemento.",
    },
    "vendor-write": {
      name: "Gestione venditore",
      description: "elemento venditore informazioni.",
    },
  },

  scope_group: {
    backoffice: {
      title: "Ufficio interno",
      description: "Accesso alle funzionalità di backoffice e di gestione del negozio.",
    },
    storefront: {
      title: "Vetrina",
      description: "accesso elemento cliente elemento negozio informazioni.",
    },
    profile: {
      title: "profilo",
      description: "accesso utente profilo informazioni.",
    },
    selldone: {
      title: "Selldone",
      description: "accesso Selldone servizi elemento elemento.",
    },
    others: {
      title: "Altro",
      description: "Ambiti vari non definiti nel sistema.",
    },
    vendor: {
      title: "venditore",
      description: "accesso venditore informazioni elemento elemento elemento.",
    },
    connect: {
      title: "Connect OS",
      description: "accesso collegato servizi elemento elemento.",
    },
    agency: {
      title: "elemento",
      description: "accesso elemento informazioni elemento elemento.",
    },
  },

  /** {@see AdminCompanyPage} **/
  company_page: {
    title: "Azienda",
    create_app: "Crea nuova applicazione",
    menu: {
      edit: "Modificare",
      apps: "App",
      dashboard: "Pannello",
      companies: "Aziende",
    },
    /** {@see AdminCompanyPage_Dashboard} **/
    dashboard: {
      /** {@see CompanyInfoWidget} **/
      info_widget: {
        title: "Informazioni per la registrazione dell'azienda",
        address: "indirizzo",
        website: "Sito web",
        email: "E-mail",
        phone: "numero di telefono",
        register: "Registrati",
        developer: "Sviluppatore",
        verified: "Verificato",
        golden: "D'oro",
      },
    },
    /** {@see AdminCompanyPage_Develop} **/
    developer: {
      title: "Sviluppatori",
      menu: {
        new: "Nuovo",
        apps: "App",
      },
    },
    /** {@see AdminCompanyPage_Edit} **/
    edit: {
      title: "Modificare",
    },
  },
  /** {@see BAppAdd} **/
  add_app: {
    category_input: "Categoria",
    code_input: "Codice",
    name_input: "Nome",
    description_input: "Descrizione",
    video_input: "URL del video",
    public_form: "Struttura informativa generale",
    private_form: "Struttura informativa privata",
    icon_input: "Icona dell'app",
    logo_input: "App Logo",
    enable_input: "L'applicazione è attiva?",
    edit_action: "Modifica app",
    create_action: "Crea app",
    notifications: {
      add_success: "Account aziendale {name} creato.",
      delete_success: "Account aziendale modificato.",
    },
  },

  /** {@see AppPage} **/
  app_page: {
    title: "Applicazione",

    menu: {
      edit: "Modificare",
      publish: "Pubblicare",
      history: "Versioni",
      dashboard: "Pannello",
      company: "Azienda",
      api: "API",
      images: "immagini",
    },
    /** {@see AppPage_Dashboard} **/
    dashboard: {
      /** {@see AppInfoWidget} **/
      app_info_widget: {
        title: "Applicazione",
        app_code: "Codice dell'app",
        category: "Categoria",
        name: "Nome",
        installs: "Installa app",
        uninstalls: "Disinstalla le app",
        actives: "App attive",
        description: "Descrizione",
        published: "Pubblicato",
        waiting_for_review: "In attesa di approvazione",
        app_mode: "Modalità di applicazione",
      },
    },
  },
  /** {@see ShopPermissions} **/
  shop_permissions: {
    ADMIN: { text: "Proprietario", description: "Accesso completo a tutte le vetrine." },
    PRODUCT: {
      text: "Responsabile del prodotto",
      description: "Aggiungi, modifica e gestisci i prodotti del negozio.",
    },
    AUDITING: {
      text: "Responsabile finanziario",
      description: "Visualizza informazioni finanziarie e pagamenti.",
    },
    CONTENT: {
      text: "Gestione dei contenuti",
      description: "Rispondi alle domande, scrivi blog e progetta pagine.",
    },
    OFFICER: {
      text: "Capo direttore",
      description: "Visualizza e monitora l'attività dei dipendenti.",
    },
    EMPLOYEE: {
      text: "Dipendente",
      description: "Visualizza gli ordini ed evadi gli ordini.",
    },
    MARKETING: {
      text: "elemento",
      description:
        "Accesso alle impostazioni e creazione di campagne, email marketing e altre sezioni relative al marketing.",
    },
    VIEWER: {
      text: "Spettatore",
      description:
        "La possibilità di visualizzare le informazioni del negozio senza poterle modificare o cambiare.",
    },
  },

  /** {@see ShopRoles} **/
  shop_roles: {
    PhysicalOrdersChecking: {
      text: "Controllo fisico",
      description: "Controlla gli ordini ricevuti.",
    },
    PhysicalOrdersPackaging: {
      text: "Imballaggio fisico",
      description: "Magazzino e processo di confezionamento.",
    },
    PhysicalOrdersDelivery: {
      text: "Spedizione fisica",
      description: "Ordina la spedizione.",
    },
    PhysicalOrdersSupport: {
      text: "Supporto fisico",
      description: "Assistenza post vendita.",
    },
  },

  /** {@see AccountStatus} **/
  account_status: {
    Checking: "Controllo",
    Approved: "Confermato",
    Rejected: "Respinto",
    Deleted: "Eliminato",
    Banned: "Vietato",
    Payment: "Pagamento",
    SelldoneSprite: "Conto Portafoglio Selldone",
    SelldoneStorage: "Stoccaggio Selldone",
  },
  /** {@see BPageAccount} **/
  account_page: {
    title: "elemento",
    menu: {
      setting: "Impostazioni",
      charge: "Caricare",
      transfer: "Trasferimento",
      transactions: "Transazioni",
      history: "Storia",
      cards: "Carte",
    },

    /** {@see BPageAccountTransactions} **/
    transactions: {
      title: "Transazioni di conto",
      detail: {
        title: "Transazione",
        amount: "Importo",
        description: "Descrizione",
        from: "A partire dal",
        to: "A",
        created_at: "Data",
        receipt: "Ricevuta",
        receipt_note: "Nota",
      },
      table: {
        type: "Tipo",
        from: "Dal conto",
        to: "Per conto",
        amount: "Importo",
        receipt: "Ricevuta",
        created_at: "Data",
        description: "Descrizione",
      },
    },

    /** {@see BPageAccountTransfer} **/
    transfer: {
      title: "Spese di trasferimento",
      form: {
        title: "Modulo di richiesta di trasferimento",
        sub_title:
          "Selldone — Deposita sul tuo conto o su altri",
        message:
          "Fai attenzione nel trasferire denaro, non potrai restituire se completi il trasferimento.",
      },
    },
    /** {@see BPageAccountDeposit} **/
    deposit: {
      form: {
        title: "Conto di addebito",
        sub_title:
          "Devi addebitare il saldo del tuo account per acquistare licenze, aggiornare il tuo account e pagare le ricevute di sistema.",
        amount_input: "Importo",
        charge_action: "Conto di addebito",
      },
      notifications: {
        qr_title: "Pagamento",
        qr_message: `Indirizzo di pagamento {currency} creato.`,
        gateway_title: "Pagamento",
        gateway_message: "Collegamento al gateway di pagamento.",
      },
    },

    /** {@see BPageAccountEdit} **/
    setting: {
      title: "Impostazioni dell'account",
      account_name_input: "Nome utente",
      notifications: {
        updated_success: "Il tuo account è stato aggiornato correttamente.",
      },
    },
  },

  /** {@see BAccountReceiptPaymentDialog} **/
  receipt_payment_dialog: {
    title: "Ricevuta di pagamento",
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
    title: "Modulo di transazione",
    from_input: "Dal numero di conto",
    to_input: "Al numero di conto",
    from_input_message: "L'importo verrà prelevato da questo conto.",
    account_name: "Nome utente",
    currency: "Moneta",
    free_balance: "Saldo disponibile",
    to: "Conto di destinazione",
    amount: "Importo",
    receipt_title: "Pagamento per ricevuta",
    receipt_input: "Numero di ricevuta",
    paid_status: "Questa ricevuta è già stata pagata.",
    paid_canceled: "Questa ricevuta è stata annullata.",
    description: "Spiegazione",
    created_at: "Data",
    duration: "Durata",
    unlimited: "Illimitato",
    add_note_action: "Aggiungi una descrizione",
    note: "Nota",
    transfer_action: "Trasferimento",
    confirmation: {
      title: "Inviare soldi",
      subtitle: "Conferma della transazione",
      message:
        "Se le seguenti informazioni sono corrette, premi il tasto di conferma della transazione per effettuare la transazione.",
      from: "Dal conto",
      to: "Per conto",
      amount: "Importo",
      fee: "Costo della transazione",
      total_pay: "Importo prelevato dal tuo conto",
      receipt: "Ricevuta",
      description: "Descrizione",
      accept_action: "Conferma della transazione",
    },
    enter_account_number: "Inserisci il numero di conto.",
    currency_not_match:
      "La valuta del conto di destinazione non è la stessa di origine",
    account_number_not_valid: "Il numero di conto è corretto.",
    account_number_is_valid: "Il numero di conto è corretto.",
    receipt_not_valid: "Il numero di fattura non è corretto.",
    receipt_is_valid: "Il numero di ricevuta è corretto.",

    notifications: {
      confirm_success: "Transazione completata con successo.",
    },
  },

  /** {@see OPlanCalculator} **/
  price_calculator: {
    title: "Calcolatrice ╏ Adatta alla tua attività",
    description:
      "Calcola e scegli il miglior piano in base alle tue vendite mensili:",
    sale_input: "Importo mensile delle vendite",
    hypernova_plan: "Richiedi Hypernova %0!",
    show_normal_mode: "Mostra la modalità normale",
    show_hypernova_mode: "La mia transazione è superiore a 1 milione di dollari!",
  },

  /** {@see OPlanFeaturesCard} **/
  price_card: {
    billed_monthly: "Fatturato {amount} mensilmente.",
    billed_yearly: "Fatturato {amount} annualmente.",
    buy_license_action: "Acquista ora",
    select_your_store: "Seleziona il tuo negozio",
  },

  /** {@see BSessionsMap} **/
  shop_session_widget: {
    total_sessions: "Sessioni totali",
  },
  /** {@see BDashboardShopCustomersActivityMap} **/
  user_activities_keys: {
    add_baskets: "Aggiungi al carrello",
    remove_baskets: "Elimina dal carrello",
    buys: "Acquistare",
    products_views: "Visualizza prodotto",
  },
  /** {@see BDashboardShopAcquisition} **/
  shop_visitors_widget: {
    title: "Analisi dei visitatori",
    new_visitors: "Nuovi visitatori",
    amp: "Viste AMP",
    returning_visitors: "Visitatori di ritorno",
    page_views: "Visualizzazioni di pagina",
    other_pages: "Altre pagine",
    from_previous_7_days: "degli ultimi 7 giorni",
  },

  /** {@see BUserAppLevel}   {@see AppLevel}  **/
  app_levels: {
    title: "Livello app",
    Newbie: "Novizio",
    Beginner: "Principiante",
    Novice: "Novizio",
    Intermediate: "Intermedio",
    Advanced: "Avanzate",
  },

  /** {@see Login} **/
  login: {
    register_title: "Il mezzo delle imprese,<br> Esperienza piacevole.",
    register_subtitle:
      "Registrati oggi gratis. Selldone è amato da startup, imprese, acquirenti e venditori.",

    password_recovery_title: "Recupero della password",
    password_recovery_message:
      "Se hai dimenticato la password, inserisci l'indirizzo email del tuo account e premi il tasto di conferma. Ti invieremo un'e-mail con un link per reimpostare la tua password.",
    email: "Il tuo indirizzo di posta elettronica",
    password_recovery_action: "Ricevi email di recupero",

    register_google: "Continua con Google",
    register_apple: "Continua con Apple",
    continue_with: "Continua con",
    register_linkedin: "Continua con LinkedIn",
    register_facebook: "Continua con Facebook",
    register_github: "Continua con GitHub",
    create_your_account: "crea il tuo account",
    password_8_chars: "La password deve essere di almeno 8 caratteri.",
    password_upercase_number: "Almeno una lettera maiuscola e un numero.",
    password_confirm: "Password e conferma abbinate.",
    privacy_agreement:
      "Iscrivendoti, accetti i <a href='/terms' target='_blank'>Termini di utilizzo</a> e <a href='/privacy' target='_blank'>l'Informativa sulla privacy</a> di Selldone.",
    register_action: "Andiamo, è gratis!",
    login_action: "Accedere",
    already_signup: "Già iscritto?",
    login_your_account: "Accedi al tuo account",
    login_google: "Continua con Google",
    login_linkedin: "Continua con LinkedIn",
    login_facebook: "Continua con Facebook",
    login_github: "Continua con GitHub",
    remember_me: "Ricordati di me.",
    login_button: "Accedere",
    two_step_problem: "Hai un problema con la password in due passaggi?",
    two_step_problem_action: "Voglio disabilitare l'accesso in due passaggi.",
    two_step_confirm: "Conferma il codice di accesso",
    forgot_password: "Ha dimenticato la password?",
    signup_free: "Iscriviti gratis",
    checking_robot_message: "Verifica se sei un robot o un essere umano..",
    notifications: {
      step2_login_success: "Accesso automatico all'account",
    },
    signup_email: "Iscriviti via e-mail",

    name_placeholder: "Nome",
    email_placeholder: "E-mail",
    email_or_username_placeholder: "Email, nome utente o numero di telefono",
    password_placeholder: "Parola d'ordine",
    re_password_placeholder: "Conferma password",
    new_in_samin: "Nuovo a Selldone?",
    auto_create_shop: "Creazione automatica del negozio",
  },
  /** {@see Layout} **/
  layout: {
    logout: "Disconnettersi",
    menu: {
      my_public_profile_subtitle: "elemento elemento profilo {name}.",

      personal_information: "Informazioni personali e profilo",
      personal_information_subtitle: "modifica elemento profilo, indirizzo elemento KYC.",
      wallet: "Portafogli e conti",
      wallet_subtitle: "elemento elemento elemento collegato pagamento carte.",

      companies: "Aziende e conti aziendali",
      companies_subtitle: "elemento elemento azienda elemento imposta profili.",

      access: "Accesso al mio account",
      access_subtitle:
        "Client OAuth, token di accesso personali e app connesse.",

      security: "Sicurezza",
      security_subtitle: "Imposta due fattori e gestisci le opzioni di accesso social.",

      preferences: "Preferenze utente",
      preferences_subtitle:
        "Cambia tema, livello, lingua e valuta predefinita.",
      my_subscriptions: "le mie sottoscrizioni",
      my_subscriptions_subtitle:
        "Accesso all'intelligenza artificiale premium e alle funzionalità di personalizzazione.",
    },
  },

  /** {@see PageBuilder} **/
  page_builder: {
    title: "Progettazione di siti web",

    menu: {
      user_view: "Visualizzazione",
      design: "elemento",
      behavior: "Comportamento",
      seo: "SEO",
      setting: "Impostazioni",
      embed: "Incorporare",
    },
    waiting_fetch: "Ricezione di informazioni..",

    /** {@see SettingCustomPage} **/
    setting: {
      title_input: "Titolo della pagina",
      description_input: "Breve descrizione",
      name_input: "URL della pagina (lettere e numeri)",
      bg_color_input: "Colore di sfondo",
      bg_style_input: "Stile di sfondo della pagina",
      page_label_input: "Colore dell'etichetta",
      page_dir_input: "Direzione della pagina",
      ltr: "Da sinistra a destra",
      rtl: "Da destra a sinistra",
      designer_note: "Nota del progettista",
    },

    /** {@see LPageEditor} **/
    design: {
      themes: {
        title: "Assistente alla progettazione personale",
        message: "Progetta le migliori pagine per la tua attività senza codifica.",
        page_title_input: "Inserisci un titolo per la tua pagina",
      },
      tools: {
        rearrange: "Ordine",
        tools: "Strumenti",
        history: "Storia",
        style: "Stile",
        typography: "Tipografia",
        hierarchy: "elemento",
      },
      no_category: "Nessuna categoria",
    },

    /** {@see LPageEditorSeo} **/
    seo: {
      message:
        "Le impostazioni SEO sono regolate automaticamente dal motore SEO Selldone.",
    },
  },

  /** {@see VerifyEmailCaution} **/
  verify_email_caution: {
    title: "conferma il tuo indirizzo email",
    message:
      "Il nuovo link di attivazione è stato inviato al tuo indirizzo email {email}. Si prega di controllare la posta elettronica prima di intraprendere qualsiasi azione.",
    resend_message:
      "Se non hai ricevuto il link di attivazione nella tua e-mail, fai clic sul pulsante in basso per inviare nuovamente.",
    resend_action: "Invia nuovamente il link di attivazione",
    resend_notice: "Link di attivazione inviato.",
  },

  /** {@see ShopAutomation_Autopilot} **/
  autopilot: {
    start: "Data d'inizio",
    end: "Data di fine",
  },

  /** {@see Help} **/
  help: {
    menu: "Menù",
    more_helps: "Leggi di più",
  },

  /** {@see WidgetCompanyCard} **/
  company_card: {
    pending_state: "In attesa di revisione",
    register: "Registrato",
    developer: "Sviluppatore",
    verified: "Verificato",
    premier: "elemento",
  },

  /** {@see ShopSubscriptionList} **/
  shop_license: {
    add: "Aggiungi abbonamento",
    only_last: "Solo ultimo abbonamento",
    vouchers: "Buoni",
    buy: "Acquista un piano di abbonamento",
    monthly: "Mensile",
    yearly: "Annuale",
    start_date: "Data d'inizio",
    end_date: "Data di fine",
    price: "prezzo",
    verify: {
      true_title: "elemento elemento",
      true_description: "Ho letto e accetto i termini di utilizzo di Selldone",
    },
    need_charge: "Hai bisogno di una carica",
    buy_now: "Acquista ora",
    use_voucher_now: "Usa il voucher ora",
    plan_placeholder: "Seleziona il tuo piano di abbonamento",
    plan: "Piano di licenza",
    use_date: "Data di attivazione",
    validity_duration: "Durata di validità",
    validity_duration_hint:
      "Acquistando una licenza di 12 mesi, riceverai uno sconto del 30%.",

    active_license: {
      title: "Licenza attiva",
      subtitle:
        "Le tue informazioni sulla licenza attiva.",
      subtitle_partner:
        "Informazioni sulla licenza di {name} attiva.",
    },
    licenses_table: {
      title: "Storia degli acquisti",
      subtitle:
        "Questo è un elenco delle licenze attive e in sospeso. Puoi acquistare offerte dopo aver finanziato il tuo portafoglio. Inoltre, tieni presente che quando annulli un abbonamento, l'importo rimanente dell'abbonamento verrà restituito al tuo portafoglio virtuale.",
    },
    license_detail: {
      title: "Dettagli",
      subtitle:
        "Questi sono i limiti del tuo piano attuale. Per maggiori dettagli, visita la pagina dei prezzi. Puoi accedere a tutte le funzionalità di tutti i piani, incluso il piano gratuito, per avviare e far crescere la tua attività. Man mano che espandi la tua attività, valuta la possibilità di passare a un piano di livello superiore per ridurre le commissioni di servizio.",
    },

    table: {
      plan: "Piano",
      start_date: "Data di inizio/fine",
      renewal: "Rinnovo automatico",
      linked_account: "Conto/voucher collegato",
      payment: "Pagamento",
      cancel: "Annulla",
    },
    notifications: {
      subscribe_success: "Abbonato con successo.",
      cancel_success: "Abbonamento annullato con successo.",
    },
    cancel_dialog: {
      title: "Annulla la conferma dell'abbonamento",
      message: "Sei sicuro di annullare questo abbonamento?",
      action: "Annullare l'iscrizione",
    },
    add_dialog: {
      wallet: {
        title: "elemento elemento portafoglio",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      auto_renewal: {
        true_title: "Rinnovo automatico",
        true_description:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      options: {
        title: "elemento elemento",
      },
      verify: {
        title: "elemento",
      },
    },
  },

  /** {@see BLayoutBackofficeShop} **/

  admin_shop_layout: {
    download_txt: "Scarica testo dati",
    download_excel: "Scarica dati excel",
  },
  /** {@see BUserPreferences} **/
  user_preferences: {
    access: "Accesso",
    template: "Modello",
    feedback: "Risposta",
    date_time: "data & ora",

    company: "Azienda",
    company_message: "Se hai un'azienda e vuoi pubblicare app.",
    access_keys: "Chiavi di accesso",
    access_keys_message: "Mostra client e chiavi di accesso.",
    rating: "Come valuteresti la tua esperienza con Selldone?",
    large_font: "Caratteri grandi",
    large_font_message: "Mostra il testo più grande del normale",
    samples: "Mostra negozi campione",
    samples_message:
      "Se abilitato, alcuni negozi campione verranno visualizzati nel tuo pannello.",

    automation: "Automazione",
    automation_message:
      "Mostra la scheda di automazione sulla dashboard del negozio. (Webhook, Programmazione visiva, ...)",
  },

  /** {@see BPageShopSettingLocations} **/
  shop_locations: {
    title: "Paesi in cui viene fornito il servizio",
    sub_title:
      "Seleziona i paesi in cui desideri vendere il tuo prodotto dall'elenco sottostante.",

    delete_restriction: "Elimina restrizione",
    set_restriction: "impostare la restrizione",
    notifications: {
      locations_update: "Posizione aggiornata correttamente.",
    },
    table: {
      country: "Paese",
      currency: "Moneta",
      available: "Disponibile",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "Esaurito",
    review_unit: "Revisione",
    not_original: "Non originale",
  },

  /** @see BProductAddStudio **/
  product_studio: {
    add_mode: "Aggiungi più dettagli",
    auto_category: "Categoria di impostazione automatica",
    add_in_current_category: "Aggiungi alla categoria corrente",
    category_mode_message:
      "Se abilitato, il prodotto verrà aggiunto alla categoria o sottocategoria predefinita.",
    sku_name_input: "SKU / Nome",
    info: {
      subtitle:
        "Per generare il prodotto è possibile inserire solo i dettagli essenziali necessari alla sua creazione.",
    },
    price: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    by_sku: {
      title: "aggiungi elemento SKU",
      subtitle: "Il database nel tuo Paese non è disponibile.",
    },
    drop_shipping: {
      subtitle:
        "Trova i prodotti nel mercato all'ingrosso e aggiungili al tuo negozio.",
    },
    by_connect: {
      subtitle:
        "Selldone — Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    your_license_is_not_eligible: "elemento licenza elemento elemento elemento.",
    sku_dialog: {
      title: "aggiungi prodotto elemento SKU",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    dropshipping_dialog: {
      title: "aggiungi elemento prodotti",
    },
  },

  /**
   * @see BProductAddDropshippingShops
   */
  product_add_dropshipping_shops: {
    subtitle:
      "Selldone — Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
  },

  /** @see Affiliates **/
  my_affiliate: {
    title: "I miei contratti di affiliazione",
    message:
      "Elenco degli accordi di affiliazione con altri negozi.",
  },

  /** @see BPageShopMarketingAffiliate **/
  affiliates: {
    title: "Partner affiliati",
    subtitle:
      "Crea affiliati, monitora le loro prestazioni nel tempo e intraprendi azioni sulla base di informazioni accurate in un unico posto. Aiutiamo te e i tuoi partner a costruire una relazione forte.",

    affiliate_code: "Codice di affiliazione",
    crate_date: "Crea data",
    last_payment_date: "Ultima data di pagamento",
    for_all_products: "Applicare a tutti i prodotti",
    balance: "Bilancia",
    fix_commission: "Commissione fissa",
    percent_commission: "Commissione in percentuale",
    total_payment: "Pagamenti totali",
    new_affiliate: "Nuovo partner affiliato",
    new_affiliate_message: "Aggiungi nuovo partner affiliato",

    link_factory: {
      title: "Generatore di link partner di affiliazione",
      link_input: "Il tuo collegamento",
      link_output: "Collegamento generato",
    },
  },

  /**
   * @see BAffiliateEdit
   */
  affiliate_edit: {
    affiliate_commission: "elemento elemento",

    config: {
      new: "nuovo elemento elemento",
      edit: "modifica elemento elemento",
      subtitle:
        "Configura qui le impostazioni generali e il nome dell'affiliato.",
    },

    payment: {
      title: "pagamento informazioni",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },

    contact: {
      title: "Informazioni sui contatti",
      subtitle: "Fornisci qui i dettagli di contatto del partner affiliato.",
    },

    restriction: {
      title: "elemento elemento",
      subtitle:
        "Definisci quali prodotti hanno diritto alla commissione. Puoi limitare le commissioni a determinati prodotti.",
    },

    link_domain: {
      title: "collegato dominio",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

      domain_not_approved_msg: "Il dominio non è stato ancora approvato!",
      domain_is_not_enable_msg: "elemento dominio elemento elemento abilitato!",
      domain_is_linked_to_other_affiliate_msg:
        "Questo dominio è già collegato ad un altro affiliato!",
    },

    set_users_first_message: "elemento elemento elemento utente elemento!",

    cluster: {
      title: "elemento",
      subtitle:
        "Associa questo affiliato a un cluster per gestirlo insieme ad altre risorse in un unico posto.",
      manage_action: "elemento",
    },

    notifications: {
      create_success: "nuovo elemento elemento elemento.",
      update_success: "elemento elemento elemento.",
    },

    inputs: {
      name: {
        label: "elemento elemento elemento",
        message: "ad esempio, John Doe, Alex Company, X Marketers, ecc.",
      },
      commission: {
        label: "elemento elemento",
        false_description:
          "Calcola utilizzando una combinazione di commissioni fisse e percentuali.",
        true_description:
          "Calcola utilizzando le commissioni specifiche del prodotto impostate nella scheda dei prezzi.",
        false_title: "elemento + elemento elemento",
        true_title: "elemento elemento",
      },
      user: {
        label: "utente (opzionale)",
        message: "Facoltativo, ad esempio il nome dell'affiliato in Selldone",
      },
      web: {
        placeholder: "opzionale, elemento.elemento., elemento.elemento",
      },
      address: {
        placeholder: "Facoltativo, ad esempio 1200 POX, NY, USA",
      },
      tel: {
        placeholder: "opzionale, elemento.elemento., 001-808-210354",
      },
      bank: {
        placeholder: "Facoltativo, ad esempio Arstra Bank, n.: 10002-325-800-845213",
      },
      domain: {
        placeholder: "seleziona elemento dominio... (opzionale)",
      },
      pos: {
        true_description:
          "Gli affiliati possono effettuare ordini direttamente per i propri clienti attraverso il proprio pannello.",
        true_title: "POS accesso",
      },
      enable: {
        true_description:
          "Seleziona o inserisci le informazioni richieste.",
      },
      products: {
        label: "prodotti elemento elemento elemento",
        select_product: "seleziona prodotti",
      },
    },
    actions: {
      update: "aggiorna elemento",
      add: "aggiungi elemento elemento",
    },
    /**
     * @see BPageAffiliateEdit
     */
    delete: {
      subtitle:
        "Sei sicuro di voler eliminare questo elemento?",
    },
  },

  /**
   * @see BPageShopFinanceValuations
   */
  shop_valuations: {
    title: "elemento prezzi elemento elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    add_valuation_action: "crea nuovo elemento modulo",
    empty_message:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    delete_dialog: {
      title: "elemento rimuovi",
      message:
        "Sei sicuro di voler eliminare questo elemento?",
      action: "Sì, elimina ora",
    },
    notifications: {
      delete_success: "elemento elemento elemento elemento elemento.",
    },
  },

  /**
   * @see BValuationInput
   */
  valuation_input: {
    label: "prezzi & elemento elemento",
  },

  /**
   * @see BValuationAdd
   */
  valuation_add: {
    title_edit: "modifica elemento modulo",
    title_add: "crea nuovo elemento modulo",
    config: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    valuation_preview: "elemento elemento modulo",
    load_sample: "elemento elemento",
    conditions: {
      title: "Condizioni",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    structure: {
      title: "elemento",
      subtitle:
        "Progetta qui il tuo modulo di immissione dei prezzi integrando formule e tabelle di riferimento.",
      expand_action: "elemento",
      collapse_action: "elemento",
    },
    inputs: {
      title: {
        message: "Questo titolo non è visibile ai clienti.",
        placeholder: "Inserisci un nome per il prezzo, ad esempio \"Prezzo delle tazze\"",
      },
    },
    samples: {
      title: "elemento elemento",
    },
  },

  /** @see AdminGiftcardPage_Orders **/
  gift_card_orders: {
    title: "Ordini con Giftcard",
    table: {
      order: "Ordine",
      order_price: "Ammontare dell'ordine",
      paid_by_card: "Pagato con carta",
      payment_status: "Stato del pagamento",
      date: "Data",
    },
  },

  /** @see BPageOfferOrders **/
  offer_orders: {
    title: "Offerta ordini",
    table: {
      order: "Ordine",
      order_price: "Ammontare dell'ordine",
      offer_amount: "Importo Offerto",
      payment_status: "Stato del pagamento",
      product: "Prodotto",
      date: "Data",
    },
  },

  /** @see BPageCouponOrders **/
  coupon_orders: {
    title: "Buoni ordini",
    table: {
      order: "Ordine",
      order_price: "Ammontare dell'ordine",
      coupon_amount: "Importo della cedola",
      payment_status: "Stato del pagamento",
      date: "Data",
    },
  },

  /** @see BPageDiscountCodeOrders **/
  discount_code_orders: {
    title: "Ordini con codice sconto",
    table: {
      order: "Ordine",
      order_price: "Ammontare dell'ordine",
      discount_amount: "Totale sconto",
      payment_status: "Stato del pagamento",
      date: "Data",
    },
  },

  /** @see BPageShopIncentives **/
  incentives: {
    discount_code: "Sconto",
    coupon: "Buono",
    offer: "Offerta",
    gift_card: "Carta regalo",
    lottery: "Lotteria",
    cashback: "elemento",
  },

  /** {@see BPageShopIncentivesDiscountCode} **/
  discount_codes: {
    title: "Codici Sconto",
    sub_title:
      "In questa sezione potrai progettare buoni sconto in base alle tue esigenze. Questi sconti sono separati da qualsiasi sconto sul prodotto e si applicheranno all'importo finale dell'ordine dell'utente.",
    add_new: "Aggiungi nuovo codice sconto",
    card: {
      created: "Creare",
      start: "Inizio",
      end: "Fine",
      currency: "Moneta",
      discount_percentage: "Tasso di sconto",
      discount_limit: "Limite di sconto",
      state: "Stato attuale",
      enabled: "Ora abilitato",
      disabled: "Ora disabilitato",
      used: "Consumato",
      count: "Contare",
      unit: "Oggetti)",
    },
    /** {@see BDiscountCodeAdd} **/
    dialog: {
      title_edit: "Modifica codice sconto",
      title_add: "Aggiungi nuovo codice sconto",
      discount_code_input: "Codice di sconto",
      discount_percent_input: "Tasso di sconto",
      discount_percent_input_hint: "Tasso di sconto dell'importo di acquisto",
      count_input: "Contare",
      count_input_hint: "Massimo utilizzo di questo codice",
      limit_input: "Limite di sconto",
      limit_input_hint: "Sconto massimo in base alla valuta",
      currency_input_message: "Gli sconti saranno disponibili per questa valuta.",
      limit_input_message:
        "Il valore 0 per il limite di sconto significa che non c'è limite per il tasso di sconto.",
      title_input: "Titolo",
      title_input_hint: "Puoi inserire un titolo per questo codice sconto",
      description_input: "Descrizione",
      description_input_hint:
        "Puoi inserire una descrizione per questo codice sconto",
      date_start_input: "Inizio",
      date_start_input_placeholder: "Seleziona quando iniziare lo sconto",
      date_end_input: "Fine",
      date_end_input_placeholder: "Seleziona quando terminerà lo sconto",
      notifications: {
        add: "Codice sconto aggiunto con successo.",
        edit: "Codice sconto modificato correttamente.",
      },
      config: {
        title: "elemento elemento",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      limit: {
        title: "elemento",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      duration: {
        title: "elemento limite",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      design: {
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      cluster: {
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
    },
    delete_alert: {
      title: "Rimuovi codice sconto",
      message: "Vuoi eliminare questo codice sconto?",
      action: "Rimuovi lo sconto",
    },
    notifications: {
      delete_success: "Il tuo commento è stato eliminato con successo",
    },
  },

  /** {@see BPageShopIncentivesGiftcard} **/
  gift_cards: {
    title: "Carta regalo",
    sub_title:
      "Crea una carta regalo e poi creane quanti ne hai bisogno. Questa carta ha un addebito e può essere utilizzata solo per acquisti nel tuo negozio.",

    create_new: "Aggiungi una nuova carta regalo",
    card: {
      created: "Creare",
      lifetime: "Data di scadenza",
      lifetime_unit: "Mese dalla data di creazione di ciascuna carta",
      currency: "Moneta",
      initial_balance: "Carica iniziale",
      count: "Contare",
      count_unit: "elemento",
      used: "Usato",
    },
    dialog: {
      title: "Design della carta regalo",
    },
    alert: {
      title: "Rimuovi codice sconto",
      message:
        "Vuoi eliminare questo codice sconto?",
      action: "Eliminare",
    },
    notifications: {
      delete_title: "Elimina carta regalo",
      delete_message: "Il tuo commento è stato eliminato con successo.",
    },
  },

  /** {@see BPageShopIncentivesCoupon} **/
  coupons: {
    title: "Buoni",
    sub_title:
      "Se vuoi offrire ai tuoi clienti uno sconto che può essere utilizzato con condizioni specifiche, puoi creare dei coupon. I coupon possono includere uno sconto percentuale con un limite o un importo fisso o una combinazione di entrambi.",
    create_new: "Aggiungi nuovo coupon",
    qualified_products: "Prodotti idonei",
    min_purchase: "Acquisto minimo",
    only_first_order: "Solo primo acquisto",

    one_time_use: "Monouso",
    multiple_use: "Uso multiplo",
    amount_usage: "Importo utilizzato",

    delete_alert: {
      title: "Elimina coupon",
      message: "Sei sicuro di eliminare questo coupon?",
      action: "Sì, elimina il coupon",
    },
    notifications: {
      delete_success: "Il coupon è stato eliminato con successo.",
    },
  },
  /** {@see BCouponAdd} **/
  coupon_edit: {
    title_edit: "Modifica coupon",
    title_add: "Nuovo coupon",
    discount_charge: "Sconto e addebito",
    charge: "Caricare",
    charge_message: "Importo della carica iniziale",
    percent: "Percentuale di sconto",
    percent_message: "Importo della percentuale di sconto",
    limit_input: "Limite",
    limit_input_hint: "Importo limite di sconto",
    currency_input_message: "Coupon disponibile per questa valuta.",

    count_input: "Contare",
    count_input_hint: "Massimo utilizzo di questo codice",
    limit_input_message:
      "Il valore 0 per il limite di sconto significa che non c'è limite per il tasso di sconto.",
    date_start_input: "Inizio",
    date_start_input_placeholder: "Seleziona quando iniziare il coupon",
    date_end_input: "Fine",
    date_end_input_placeholder: "Seleziona quando terminerà lo sconto",
    title_input: "Titolo",
    title_input_hint: "Puoi inserire un titolo per questo codice sconto",
    description_input: "Descrizione",
    description_input_hint:
      "Puoi inserire una descrizione per questo codice sconto",
    coupon_code: "Codice coupon",
    need_code: "Hai bisogno di codice?",

    coupon_color: "Colore del buono",
    min_purchase_amount: "Importo minimo di acquisto",
    min_purchase_amount_hint:
      "L'importo dell'acquisto deve essere maggiore o uguale a questo valore.",
    should_exist_product: "Almeno uno di questi prodotti deve essere nel carrello",
    apply_for_first_order: "Solo per il primo acquisto",
    apply_for_first_order_on:
      "Questo coupon può essere utilizzato solo per il primo acquisto del cliente!",
    apply_for_first_order_off:
      "Il numero di utilizzi dei coupon per acquirente può essere modificato di seguito.",

    has_qualify_constraints: "Vuoi definire più limiti?",
    has_qualify_constraints_message:
      "Imposta più condizioni per qualificare il cliente a utilizzare questo coupon.",
    one_time_use_message: "Il cliente può utilizzare questo coupon per una volta.",
    daily_limit: "Limite giornaliero",
    no_limit: "Senza limiti",
    daily_limit_message: "Quantità massima di utilizzo al giorno da parte del cliente",

    monthly_limit: "Limite mensile",
    monthly_limit_message: "Quantità massima di utilizzo al mese da parte del cliente",

    yearly_limit: "Limite annuale",
    yearly_limit_message: "Quantità massima di utilizzo all'anno da parte del cliente",

    notifications: {
      add: "Nuovo coupon creato con successo.",
      edit: "Il coupon è stato aggiornato.",
    },

    config: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    limit: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      zero_message: "elemento: elemento elemento elemento limite!",
    },
    duration: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    design: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    constraints: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      no_limit: "elemento elemento elemento",
      has_limit: "elemento elemento",
      has_code_message: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    club: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    cluster: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    preview: {
      subtitle: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
  },

  /** {@see BPageShopIncentivesOffer} **/
  offers: {
    title: "Offerte",
    sub_title:
      "Puoi creare offerte speciali per i tuoi clienti in modo che, dopo aver acquistato un articolo, ne ricevano un altro con uno sconto o addirittura gratis.",
    create_new: "Aggiungi nuova offerta",
    qualified_products: "Prodotti idonei",
    min_quantity: "Quantità minima",
    min_purchase: "Acquisto minimo",
    amount_usage: "Importo utilizzato",

    delete_alert: {
      title: "Elimina offerta",
      message: "Sei sicuro di eliminare questa offerta?",
      action: "Sì, elimina l'offerta",
    },
    notifications: {
      delete_success: "L'offerta è stata eliminata con successo.",
    },
  },

  /** {@see BOfferAdd} **/
  offer_edit: {
    title_edit: "Modifica offerta",
    title_add: "Nuova offerta",

    design_style: "Design e stile",
    eligible_constraints: "Limiti idonei del cliente",

    title_input: "Titolo",
    title_input_hint: "Puoi inserire un titolo per questo codice sconto",
    description_input: "Descrizione",
    description_input_hint: "Scrivi una descrizione per questo codice sconto",

    currency_input_message: "Offerta disponibile per questa valuta.",
    qualified_products: "Prodotti idonei",
    qualified_products_message:
      "Affinché i prodotti siano idonei, il totale degli articoli nel carrello deve essere uguale o superiore alla quantità minima.",
    min_items: "Quantità minima di articoli",
    min_items_message: "Il numero di articoli che il cliente deve acquistare",
    offered_products: "Prodotti offerti",
    offered_products_message: "Almeno uno di questi prodotti deve essere nel carrello.",
    discount_percent: "Percentuale di sconto",
    discount_percent_message: "Percentuale di sconto per questi articoli.",
    discount_percent_hint: "Importo della percentuale di sconto",

    per_order: "Numero massimo di utilizzi per ordine",
    per_order_message:
      "Il numero massimo di volte in cui l'offerta può essere applicata a un ordine",

    count_input: "Importo",
    count_input_hint: "Massimo utilizzo di questa offerta",

    min_purchase: "Importo minimo di acquisto",
    min_purchase_hint:
      "Il prezzo di acquisto deve essere maggiore o uguale a questo valore",
    limitation: "Limitazione",

    date_start_input: "Inizio",
    date_start_input_placeholder: "Seleziona quando iniziare il coupon",
    date_end_input: "Fine",
    date_end_input_placeholder: "Seleziona quando terminerà lo sconto",
    max_actives_is_3: "Puoi avere solo tre offerte attive contemporaneamente.",
    enable: "Applicazione automatica",

    notifications: {
      add: "Nuova offerta creata con successo.",
      edit: "Offerta aggiornata con successo.",
    },
    config: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    limit: {
      subtitle: "Imposta il limite massimo di utilizzo per questa offerta in questa sezione.",
    },
    duration: {
      subtitle:
        "Se desideri impostare un periodo di tempo specifico per un'offerta, puoi configurare la durata qui.",
    },
    constraints: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    discounted_products: {
      title: "elemento prodotti",
      subtitle:
        "Puoi specificare i prodotti ai quali questa offerta applicherà uno sconto.",
    },
    cluster: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
  },

  /** {@see BPageCampaignAds} **/
  campaign_ads: {
    menu: {
      banner: "elemento",
      reportage: "elemento",
      social: "Social media",
      offline: "disconnesso",
    },
  },

  /** {@see BPageShopMarketingEmail} **/
  emails: {
    title: "Marketing via email",
    subtitle:
      "Progetta le email trascinandole, pianifica e avvia campagne per aumentare la fidelizzazione e visualizza informazioni affidabili e accurate in un unico posto.",
    cation_message:
      "⚠ Limitato ai commercianti non verificati. (Beta)",

    subject: "Soggetto",
    from: "A partire dal",
    in_que: "In attesa",
    schedule_at: "Programma alle",
    sent: "Spedito",
    sends: "Invia",
    delivers: "Consegnato",
    views: "Visualizzazioni",
    clicks: "Clic",
    buys: "Acquisti",
    new_email: "Aggiungi nuova email",
    new_email_message: "Crea e pianifica nuove e-mail di marketing",
  },

  /** {@see BPageEmailMarketingDashboard} **/
  email_dashboard: {
    review: "Revisione",
    waiting_for_approve: "In attesa di conferma da parte di {name}",
    approved_by: "Email verificata da {name} e inviata.",
    not_submitted_send_request:
      "Non hai ancora inviato una richiesta per inviare questa email.",
    reviewed_by: "Recensito da {name}",
    status: "Stato dell'e-mail",
    conversion: "Tassi di conversione",

    sell_performance: "Performance di vendita",
    total_buys: "Numero totale di vendite",
    amount_buy: "Importo totale delle vendite",
    average_sell: "Vendite nella media",
    sessions: "Sessioni",
    overview: "Panoramica",
    purchase_amount: "Ammontare dell'acquisto",
    actions: "Attività dell'utente",
  },

  /** {@see BPageEmailMarketing} **/
  email_page: {
    emails: "E-mail",
    edit: "Modificare",
  },
  /** {@see BPageAffiliator} **/
  affiliate_page: {
    affiliates: "Partner affiliati",
    orders: "Ordini",
    payments: "Pagamenti",
  },

  /** {@see BPageAffiliateDashboard**/
  affiliate_dashboard: {
    link: {
      title: "elemento link",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {code}",
    },
    fix_commission: "Commissione fissa",
    percent_commission: "Commissione basata su percentuale",
    last_payment: "L'ultimo pagamento",
    balance: "Bilancia",
    total_payment: "Pagamenti totali",
    status: "Stato e restrizioni del partner affiliato",
    available_for: "Disponibile per",
    orders_count: "Importo degli ordini",
    orders_accepted: "Ordini accettati",
    finance: "Relazione finanziaria",

    amount_accepted: "Importo accettato",
    amount_paid: "Importo pagato",
    sessions: "Sessioni",
    affiliate_payment: "Pagamenti partner affiliati",
    amount_payment: "Importo del pagamento",
    amount_payment_hint: "Importo esatto della transazione",
    i_paid: "Ho pagato {amount} {currency} a {name}",
    pay_now: "Paga ora",
  },

  /** {@see BPageShopPermissionRoles**/
  permission_roles: {
    new_role: "Aggiungi nuovo ruolo",
    new_role_message: "Semplifica il lavoro di squadra.",
    new_role_action: "Aggiungi nuovo ruolo",
  },
  /** {@see Affiliate**/
  user_affiliates: {},
  /** {@see BPageShopIncentivesLottery**/
  shop_lotteries: {
    title: "Lotteria",
    sub_title:
      "I tuoi clienti possono giocare e vincere. I clienti del tuo negozio devono consumare 10 gettoni per ogni gioco. Ad esempio, se vuoi che i tuoi clienti abbiano la possibilità di vincere 1000 USD, devi impostare l'importo del prezzo di ogni chip a 100 USD. Un valore di 0 per ogni chip significa che l'acquirente riceverà un chip per ogni acquisto.",
    manually_send_chip: "Vuoi inviare manualmente i chip agli utenti?",
    manual_send_token_action: "manuale elemento",
    lottery_enable: "La lotteria è abilitata?",
    chip_price_input: "Prezzo del chip",
    zero_chip_message: "Dare 1x chip per ordine",
    chip_has_price_message: "Assegna 1 gettone per {amount} {currency} dell'ordine.",
    chip_disabled_message: "Il chip è disabilitato!",
    create_new: "Aggiungi nuovo premio",
    delete_alert: {
      title: "Elimina premio",
      message: "Sei sicuro di eliminare definitivamente questo premio?",
      action: "Sì, elimina ora",
    },
    notifications: {
      delete_success: "Premio eliminato con successo.",
    },

    config: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    empty_prize_list: "crea elemento elemento elemento elemento...",
  },

  /** {@see BLotteryAdd**/
  lottery_edit: {
    title_edit: "Modifica oggetto della lotteria",
    title_add: "Nuovo oggetto della lotteria",
    general_config: "Configurazione generale",
    design_style: "Stile e aspetto",
    enable_message: "Gli elementi massimi in una ruota sono 14.",
    title_input: "Titolo",
    title_input_hint: "Scrivi un titolo breve.",
    description_input: "Descrizione",
    description_input_hint: "Scrivi una descrizione dell'oggetto.",
    quantity: "Quantità",
    quantity_message: "Totale articoli disponibili",
    image: "Immagine",
    image_placeholder: "Seleziona un'immagine per l'articolo",
    chance: "Opportunità",
    chance_message: "Possibilità di vincita in percentuale",
    free_for_first: "È gratuito per i nuovi clienti?",
    free_for_first_message: "I nuovi clienti possono vincere questo oggetto.",
    not_free_for_first_message: "Questo premio non è disponibile per il primo gioco gratuito.",

    amount: "Importo del premio",
    amount_hint: "Gli utenti ottengono questo importo di addebito per il loro ordine.",
    currency_message:
      "Valuta per questo articolo. Le altre valute vengono convertite in base al tasso di cambio.",
    discount: "Sconto",
    discount_message: "Percentuale di sconto sull'ordine del cliente",
    discount_limit: "Limite di sconto",
    discount_limit_hint: "Sconto massimo per il cliente.",
    color: "Colore",
    condition: "Condizioni",

    notifications: {
      add: "Nuovo oggetto della lotteria creato con successo.",
      edit: "Gli elementi della lotteria sono cambiati correttamente.",
    },
    config: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    design: {
      subtitle:
        "Qui hai la possibilità di scegliere un'immagine e un colore per il premio.",
    },
    constraints: {
      subtitle: "Specificare i criteri e le limitazioni per vincere questo premio.",
    },
    prize: {
      title: "elemento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    product_input: {
      label: "prodotto elemento",
      message: "Seleziona un prodotto per il premio (è gratuito)",
    },
  },

  /** {@see BGiftcardTypeInput**/
  gift_card_types_list: {
    label: "Tipo di carta regalo",
    message: "Seleziona un tipo di carta regalo dall'elenco.",
  },

  /** {@see BEmailMarketingEditor**/
  email_builder: {
    service_unavailable: "Il server di posta non è attivo nel tuo account.",
    design_section: "La tua targhetta per e-mail",
    schedule_switch: "Pianificare l'invio di e-mail?",
    schedule_placeholder: "Seleziona l'ora di invio dell'e-mail",
  },

  /** {@see BCustomersFunnel**/
  user_funnel: {
    REGISTER_DATE: {
      title: "Data di registrazione",
      description: "Filtra per data di registrazione dell'utente.",
    },
    LAST_BUY_DATE: {
      title: "Ultimo acquisto",
      description: "Data ultima acquisto.",
    },
    LOGIN_DATE: {
      title: "Data di accesso",
      description: "Data dell'ultimo accesso.",
    },
    LEVEL: {
      title: "Club dei clienti",
      description: "Membri del club clienti.",
    },
    SUBSCRIBED: {
      title: "Abbonato",
      description: "Per avere un abbonamento per ricevere e-mail.",
    },
    NOT_PURCHASED: {
      title: "Nessun acquisto",
      description: "Clienti che non hanno acquistato finora.",
    },
    SEX: {
      title: "Genere",
      description: "Sesso dell'utente.",
    },
    LOCATION: {
      title: "Posizione",
      description: "Posizione dell'utente.",
    },

    LIMIT: {
      title: "Limite",
      description: "Imposta un limite al numero massimo di utenti.",
    },

    SEGMENTS: {
      title: "Segmenti",
      description: "Limita i clienti in una segmentazione manuale specifica.",
    },
  },

  /** {@see InlineHelp**/
  inline_help: {
    helps_title: "Guida per l'utente del servizio",
    blogs_title: "Contenuti correlati nel blog Selldone",
  },

  /** {@see BPageShopFinanceTax**/
  shop_tax: {
    region: "Regione",
    label: "Etichetta",
    country_tax: "Tassa nazionale",
    customer_tax: "IVA cliente",
    business_tax: "IVA aziendale",
    shipping: "Spedizione",
    override: "Oltrepassare",
    country: "Paese",
    vat_range: "Fascia IVA",
    custom: "Costume",
    regions: "Regioni",
    rest_world: "Il resto del mondo",
    overrides: "Sostituzioni",
    dialog_set_title: "Impostazioni fiscali",

    tax_setting: "Impostazioni fiscali",
    vat: "VAT",

    calculate_tax_input: "Calcola automaticamente le tasse",
    calculate_tax_message:
      "Attivando questa opzione, l'IVA verrà calcolata e applicata ai tuoi ordini.",

    tax_number: "Codice Fiscale",
    tax_number_message:
      "Inserisci il tuo codice fiscale. Questo numero di registrazione sarà registrato nella fattura dell'acquirente.",

    tax_included_in_price_input: "Tasse incluse nel prezzo dei prodotti",
    tax_included_in_price_message:
      "Seleziona questa opzione se includi l'importo dell'imposta nel prezzo del tuo prodotto. L'importo dell'imposta sarà calcolato con la seguente formula:",
    tax_included_in_price_formula:
      "Imposta = (prezzo * IVA) / (1 + IVA), ad esempio, l'importo dell'imposta per un prodotto al prezzo di 100 $ con un'aliquota sul valore aggiunto del 10% diventa 9,09 $.",

    tax_exclude_title: "Escluso ╏ L'imposta verrà aggiunta al momento del pagamento",
    tax_excluded_message:
      "Le tasse verranno calcolate prima dei pagamenti durante il checkout e aggiunte al prezzo IVA esclusa in base alle prove del cliente.",

    tax_on_shipping_input: "Applicare le tasse alla spedizione",
    tax_on_shipping_message:
      "Selezionando questa opzione verrà applicata l'imposta sulla spedizione.",

    fixed_tax_rate: "Aliquota d'imposta fissa",
    dynamic_tax_rate: "Tasse in base alle regioni",

    locations_tip:
      "L'elenco sopra mostra solo i paesi che hai selezionato nelle impostazioni del negozio > Località come paesi che vendi.",
    locations_action: "Impostazioni delle posizioni dei negozi",

    save_alert: "Le impostazioni non vengono salvate!",

    pos_tax_setting: "Impostazioni fiscali POS",
  },

  /** {@see BPageTransportation**/
  transportation_page: {
    menu: {
      dashboard: "Pannello",
      transportations: "Metodi di spedizione",
      orders: "Ordini",
      setting: "Collocamento",
      delivery_services: "Servizi",
      delivery_persons: "corrieri",
    },

    go_to_courier_list: "Visualizza l'elenco dei corrieri",
    go_to_service_list: "Visualizza l'elenco dei servizi di spedizione",
  },

  /** {@see BPageTransportationCouriers**/
  transportation_persons: {
    title: "corrieri",
    notifications: {
      success_add: "Corriere aggiunto.",
      success_reset: "Ripristino delle statistiche.",
      success_remove: "Corriere rimosso con successo.",
      success_update: "Informazioni del corriere aggiornate correttamente.",
    },
    reset: {
      title: "Reimposta le statistiche",
      message: "Sei sicuro di resettare le statistiche di questo corriere?",
      action: "Sì, ripristina ora",
    },
    remove: {
      title: "Rimuovi Corriere",
      message: "Sei sicuro di eliminare questo corriere?",
      action: "Sì, Rimuovi ora",
    },
    add_dialog: {
      title: "Aggiungi nuovo corriere",
      action: "Aggiungi corriere",
    },
  },
  /** {@see BPageTransportationOrders**/
  transportation_orders: {
    title: "Ordini per la spedizione",
    notifications: {
      success_update: "Stato della spedizione aggiornato correttamente.",
      success_payment: "Pagamento in contrassegno confermato con successo.",
    },
  },
  /** {@see BPageCourier**/
  delivery_person: {
    actions_title: "Impostazioni del corriere",
    action_delivered: "Spedito",
    action_paid: "Contrassegno pagato",
    action_returned: "Restituito",
    cod_confirm_action: "Conferma il pagamento in contrassegno",
    pickup_dialog: {
      title: "Sei il corriere di questo pacco?",
      message:
        "Se sei responsabile del trasporto di questo pacco, seleziona Sì, altrimenti seleziona il No.",
    },
    status_dialog: {
      title: "Cambia lo stato in {status}",
      message: "Sei sicuro di cambiare lo stato di consegna in {status}?",
      action: "Sì, lo confermo!",
    },
    cod_dialog: {
      title: "Pagamento in contrassegno",
      message:
        "Confermi di aver ricevuto l'importo dell'ordine dall'acquirente?",
      action: "Sì, confermo il pagamento!",
    },
  },

  /** {@see BPageTransportationServices**/
  transportation_services: {
    title: "Servizio di consegna",
    notifications: {
      success_add: "Aggiunto servizio di consegna.",
      success_reset: "Ripristino delle statistiche.",
      success_remove: "Servizio rimosso con successo.",
      success_update: "Servizio aggiornato correttamente.",
    },
    reset: {
      title: "Reimposta le statistiche",
      message: "Sei sicuro di ripristinare le statistiche di questo servizio?",
      action: "Sì, ripristina ora",
    },
    remove: {
      title: "Rimuovere il servizio di consegna",
      message: "Sei sicuro di eliminare questo servizio?",
      action: "Sì, Rimuovi ora",
    },
    add_dialog: {
      title: "Aggiungi un nuovo servizio di consegna",
      action: "Aggiungi servizio",
    },
  },
  /** {@see BPageTransportationPickups**/
  transportation_pickups: {
    addresses: {
      title: "Indirizzi di ritiro",
      subtitle:
        "Aggiungi e modifica gli indirizzi di ritiro qui. Gli utenti potranno selezionare l'indirizzo di ritiro nella pagina di pagamento.",
      add_action: "Aggiungi nuova posizione",
    },
  },

  /** {@see DeliveryReceiptWidget**/
  delivery_receipt: {
    title: "Ricevuta di consegna",
    has_return: "Ritorno alla consegna",
    cashed: "Pagamento in contanti",
  },
  /** {@see BPageTransportationServiceDashboard**/
  delivery_dashboard: {
    select_destinations: "Aggiungi ordini alla lista",
    price_calculation: "Stimare le tariffe di spedizione",
    price_calculation_action: "Calcola il prezzo",
    add_request: "Richiedi il servizio",
    add_request_action: "Invia richiesta di servizio",
    refresh_action: "Aggiorna informazioni",
  },

  /** {@see DeliveryOrderWidget**/
  delivery_order: {
    title: "Ordine di spedizione",
    has_return: "Ritorno alla consegna",
    cashed: "Pagamento in contanti",
  },

  /** {@see BPagePos**/
  cash_register: {
    menu: {
      panel: "Registratore di cassa",
      orders: "Ordini",
      customers: "Clienti",
      devices: "Dispositivi",
      inventory: "Inventario",
    },
    payment_confirm: "Conferma di pagamento",
    payment_confirm_msg: "Ordine pagato dal cliente {basket_id}.",
  },

  /** {@see BPosDeviceBarcodeScanner**/
  barcode_scanner: {
    wifi_pass: "La tua password Wi-Fi",
    message: "Inserisci la password del tuo router WiFi e scansiona il codice QR.",
    wifi_ssid: "SSID Wi-Fi",
    ssid_message: "Inserisci il nome della tua rete Wi-Fi (SSID).",
  },

  /** {@see PosDeviceTypes**/
  pos_devices: {
    Scanner: "Scanner di codici a barre",
    Scanner_desc:
      "Per utilizzare lo scanner di codici a barre, è necessario inserire correttamente il codice SKU del prodotto nelle impostazioni del prodotto.",
    Printer: "Stampante",
    Printer_desc:
      "Stampa la ricevuta dei tuoi clienti collegandoti a una stampante per ricevute.",
    CustomerView: "Vista del cliente",
    CustomerView_desc:
      "Questa pagina ti consente di mostrare i dettagli dell'ordine ai tuoi clienti.",
    CardReader: "Lettore di schede",
    CardReader_desc: "Dispositivo lettore di carte per il pagamento in contrassegno da parte dei tuoi clienti.",
    ChipReader: "Lettore di chip",
    ChipReader_desc: "Lettore di tag NFC per aggiungere articoli al carrello tramite tag.",
  },
  /** {@see BPagePosDevices**/
  pos_register_devices: {
    delete_dialog: {
      title: "Rimuovi dispositivo",
      message: "Sei sicuro di rimuovere questo dispositivo dal tuo profilo POS?",
      action: "Sì, Rimuovi ora",
    },
  },

  /** {@see BPageOrderPos**/
  pos_process_center: {
    title: "Centro elaborazione ordini POS",
    menu: {
      label: "Etichetta del pacchetto",
      receipt: "Ricevuta",
      back: "Di ritorno",
      timeline: "Sequenza temporale",
      order: "Ordine",
    },
  },
  /** {@see BPagePosPanel**/
  pos: {
    name: "POS",
    message:
      "Avere il tuo punto vendita online a costo zero, eseguirlo su qualsiasi smartphone, tablet e PC o creare ordini manualmente.",
    add_customer: "Aggiungi un cliente",
    set_delivery: "Imposta indirizzo di consegna",
    add_giftcards: "Aggiungi carta regalo",
    add_discount_code: "Aggiungi codice sconto",
    add_coupon: "Aggiungi coupon",
    set_campaign: "Imposta campagna",
    select_buyer: "Seleziona acquirente!",
    send_to_pos: "Invia al lettore di carte",
    print_receipt: "Stampa ricevuta",
    confirm_cash_payment: "Conferma il pagamento in contanti",
    payment_cod: {
      title: "Pagamento in contrassegno",
      message:
        "L'importo di questo ordine verrà pagato al momento della consegna. Dopo aver ricevuto l'importo dall'acquirente, è necessario confermare il pagamento per completare l'ordine nel sistema.",
    },
    payment_online: {
      title: "Seleziona il metodo di pagamento online",
      message:
        "Selezionando le seguenti opzioni, verrà creato un link di pagamento che verrà inviato all'acquirente. Pagando questo link, lo stato dell'ordine passerà alla modalità a pagamento. Il collegamento al pagamento verrà generato scansionando il codice QR sullo schermo del cliente, SMS o e-mail. Per attivare qualsiasi canale per l'invio di un collegamento, fai clic su tale opzione e quindi premi il pulsante per inviare una ricevuta all'acquirente.",
    },
    notifications: {
      success_pay: "Pagamento dell'ordine completato.",
      success_order:
        "Ordine creato con successo e in attesa che il cliente lo paghi.",
    },
    payment_dialog: {
      check_pay_now: "Verifica manualmente il pagamento",
      close_action: "Chiudi finestra di dialogo. Non voglio aspettare il pagamento del cliente",
      go_to_order: "Vai alla pagina degli ordini",
      paid_by_gift_card_msg:
        "L'importo totale dell'ordine è stato prelevato dalle carte regalo! L'acquirente non deve pagare di più.",
      cod_msg: "Il cliente pagherà al ricevimento dell'ordine.",
      online_msg: "Chiedi al cliente di scansionare il codice QR sullo schermo del cliente.",
    },
  },

  /** {@see BPageShopProductsImporter**/
  exporter: {
    title: "Esporta dati",
    subtitle:
      "I tuoi dati ti appartengono! Puoi scaricare le informazioni sulla tua attività nel formato standard in qualsiasi momento. Tuttavia, rispetta la privacy dei tuoi clienti, non inviarli spam e non condividere mai le loro informazioni con terzi.",

    excel:
      "Riceverai un elenco di tutti i {type} presenti nel negozio insieme a informazioni complete in formato Excel.",
    csv: "Riceverai un elenco di tutti i {type} presenti nel negozio insieme a informazioni complete in formato CSV. Questo formato è conforme al formato standard di Selldone per l'importazione di {type} nel negozio.",
  },
  /** {@see BPageShopProductsImporter**/
  importer: {
    category: {
      title: "Categorie di importazione",
      subtitle:
        "Carica qui il file CSV delle categorie. Assicurati di seguire il formato standard.",
    },
    product: {
      title: "Importa prodotti",
      subtitle:
        "Carica qui il file CSV dei prodotti. Assicurati di seguire il formato standard.",
    },
    product_images: {
      title: "Importa immagini",
      subtitle:
        "La ricezione di informazioni sull'immagine richiede tempo. Assicurati di rispettare il copyright durante l'importazione delle immagini.",
    },
    inventory: {
      title: "Inventario di aggiornamento collettivo",
      subtitle:
        "Carica qui il file CSV dell'inventario. Assicurati di seguire il formato standard esportando prima il file CSV, quindi modificando quel file.",
    },

    back_to_products: "Torna all'elenco dei prodotti",
    back_to_categories: "Torna all'elenco delle categorie",
    back_to_inventory: "Torna all'elenco di inventario",

    step_select_file: "Seleziona File CSV",
    step_send_to_server: "Invia al server",
    step_view_result: "Visualizza risultato",
    step_view_que: "Visualizza elenco in attesa",
    send_to_server_action: "Invia al server",

    shop_license: "Licenza del negozio",
    max_items_limit: "Limite massimo di articoli",
    total_items: "Totale articoli",

    /** {@see BShopCustomerImporter**/
    customer: {
      title: "Importa clienti",
      subtitle:
        "Carica qui i file CSV dei clienti. Assicurati di seguire il formato standard e, inoltre, devi seguire le regole sulla privacy.",
    },

    /**
     * @see BVendorsImporter
     */
    vendor: {
      title: "importa venditori",
      subtitle:
        "Carica qui i file CSV del fornitore. Assicurati che il formato sia corretto e rispetti le norme sulla privacy.",
      checklist: {
        title: "elemento elemento",
        subtitle: "Assicurati di seguire le linee guida.",
        sample_files: "elemento file",
        valid_vendor_name_needed:
          "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b><b></b><i></i><i></i>",
        assign_user_after_import:
          "Dopo aver importato i fornitori, puoi assegnare manualmente un utente per concedergli l'accesso al pannello dei fornitori.",
      },
      need_kyc_alert:
        "È necessario verificare le informazioni personali prima di importare i fornitori.",
      back_to_vendors_list: "elemento elemento venditore elenco",
    },
  },

  /**
   * @see BPageMarketplaceProducts
   */
  marketplace_products: {
    title: "venditore prodotti",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    filter_vendor: {
      placeholder: "filtro elemento venditore...",
    },
    filter_status: {
      placeholder: "filtro elemento stato...",
    },
  },

  /**
   * @see BPageMarketplaceRequests
   */
  marketplace_requests: {
    open_vendors_panel: "elemento venditori elemento",
    title: "venditore elemento elenco",
    subtitle:
      "Questo è un elenco di richieste di persone che hanno fatto domanda per diventare venditori nel tuo marketplace.",
  },
  /**
   * @see BPageMarketplaceSetting
   */
  marketplace_setting: {
    marketplace: {
      title: "Mercato",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    distribution_model: {
      title: "elemento elemento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    access: {
      title: "Accesso venditore",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    need_enable_shipping_for_vendors_tips:
      "Abilita la spedizione per i fornitori nella scheda Negozio > Logistica per ciascun metodo individualmente.",
    transportation_available_tooltip: "Questa opzione è disponibile per i fornitori.",
    transportation_not_available_tooltip:
      "Non disponibile per i venditori! Puoi abilitarlo nelle impostazioni di trasporto.",
    panel: {
      title: "venditore elemento",
      subtitle: "Onboarding dei tuoi fornitori tramite il tuo dominio personalizzato.",
    },
    documents: {
      title: "Documenti",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      add_document_action: "aggiungi documento elemento",
    },
    inputs: {
      enable: {
        false_description:
          "Il mercato è spento, disabilitando tutte le funzionalità del mercato.",
        true_description:
          "Il marketplace è attivo e abilita tutte le funzionalità del marketplace.",
      },
      product: {
        label: "aggiungi nuovo prodotto",
        true_title: "venditori elemento aggiungi prodotti",
        false_description:
          "Aggiungi prodotti e assegni fornitori. I venditori possono gestire solo il prezzo e l'inventario.",
        true_description:
          "I fornitori possono aggiungere e gestire i propri prodotti direttamente nel pannello dei fornitori.",
      },
      need_verify: {
        label: "prodotto elemento elemento",
        false_description: "nuovo venditore prodotti elemento live elemento.",
        false_title: "elemento elemento richiesto",
        true_description:
          "I nuovi prodotti dei fornitori richiedono l'approvazione prima di essere pubblicati sul mercato.",
        true_title: "elemento richiesto",
      },
      category: {
        label: "aggiungi nuovo categoria",
        true_title: "venditori elemento aggiungi categorie",
        false_description:
          "Aggiungi categorie. I venditori possono aggiungere prodotti solo alle categorie esistenti.",
        true_description:
          "I fornitori possono aggiungere e gestire le categorie direttamente nel proprio pannello fornitori.",
      },
      shipping: {
        label: "spedizione elemento",
        true_title: "venditori elemento spedizione elemento",
        false_description:
          "I venditori non possono aggiungere o personalizzare i propri metodi di spedizione.",
        true_description:
          "I venditori possono impostare i propri metodi di spedizione, aggiungere corrieri e personalizzare la spedizione in base alle proprie esigenze.",
      },
      hidden_customer: {
        label: "mostra elemento elemento informazioni",
        true_description: "I dettagli di contatto dell'acquirente sono nascosti ai venditori.",
        false_description:
          "I dettagli di contatto dell'acquirente, come telefono ed e-mail, sono visibili ai fornitori.",
      },
      multi: {
        false_description:
          "Un utente può avere un solo account fornitore. Gli utenti verranno reindirizzati al proprio pannello in /vendors.",
        true_description:
          "Un utente può avere più account fornitore. Questa è una funzionalità beta; vi preghiamo di contattarci prima di utilizzarlo.",
        true_title: "elemento modalità",
        false_title: "elemento venditore modalità (elemento)",
      },

      listing: {
        label: "inserzione elemento venditori",
        true_description: "L'elenco è abilitato per i fornitori. I venditori possono gestire gli articoli e le aziende dell'elenco.",
        false_description: "L'elenco è disabilitato per i fornitori. Solo il proprietario del negozio può gestire l'elenco degli articoli e delle aziende.",
        requires_listing_active_text:
          "Seleziona o inserisci le informazioni richieste.",
        requires_listing_active_button: "elemento elemento inserzione impostazioni",
      },



    },
    notifications: {
      update_success: "venditore impostazioni elemento elemento.",
    },
    add_document_dialog: {
      title: "documento elemento",
      type: {
        title: "documento tipo",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      guide: {
        title: "Guida",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      code: {
        title: "elemento codice",
        subtitle:
          "Incolla il codice di incorporamento per un documento, modulo o contratto che il fornitore deve firmare.",
      },
      link: {
        title: "elemento link",
        subtitle:
          "Fornire un collegamento esterno a un documento o contratto che il fornitore deve firmare.",
      },
      inputs: {
        title: {
          label: "Titolo",
          placeholder: "Inserisci un titolo per la richiesta di documento.",
        },
        guide: {
          label: "elemento (opzionale)",
          placeholder:
            "Facoltativamente, fornire una breve guida o istruzioni, inclusi collegamenti a contratti o altri documenti.",
        },
        code: {
          label: "elemento codice",
          placeholder: "elemento elemento elemento codice elemento...",
          message: "elemento elemento HTML codice.",
        },
        url: {
          label: "URL",
          message: "Inserisci qui l'URL del documento o del contratto...",
        },
      },
    },
  },

  /**
   * @see ShopMarketplaceModes
   */
  ShopMarketplaceModes: {
    Collective: {
      title: "elemento modalità",
      description:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    Direct: {
      title: "elemento spedizione elemento venditore",
      description:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
  },
  /**
   * @see VendorDocumentType
   */
  VendorDocumentType: {
    Identification: {
      title: "elemento elemento documento",
      description:
        "Carica un documento d'identità rilasciato dal governo per verificare l'identità del proprietario dell'azienda o del dirigente chiave.",
    },
    Business: {
      title: "azienda elemento",
      description:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    Address: {
      title: "indirizzo elemento",
      description:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    Contract: {
      title: "elemento & elemento",
      description:
        "Carica contratti o accordi che descrivono in dettaglio i termini e le condizioni dei tuoi rapporti commerciali.",
    },
    Copyright: {
      title: "elemento elemento",
      description:
        "Fornisci i documenti di registrazione del copyright per affermare i tuoi diritti di proprietà intellettuale.",
    },
    Privacy: {
      title: "elemento elemento documenti",
      description:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    Embed: {
      title: "elemento modulo",
      description:
        "Completa il modulo incorporato per fornire le informazioni richieste.",
    },
    Link: {
      title: "elemento link",
      description:
        "Seguire il collegamento esterno per fornire le informazioni necessarie.",
    },
  },

  /**
   * @see BPageMarketplaceWallets
   */
  marketplace_wallets: {
    title: "venditore portafogli",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    filter_vendor: {
      placeholder: "filtro elemento venditore...",
    },
  },

  /**
   * @see BVendorAccountTransactionsList
   */
  vendor_account_transactions: {
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    vendor_bank: "venditore elemento",
    order_fee: "ordine elemento",
    order_refund: "ordine rimborso",
    reverse_fund: "elemento elemento",
    payout: "pagamento",
  },

  /**
   * @see BPageMarketplacePayouts
   */
  marketplace_payouts: {
    title: "pagamento elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    top_up_vendor_action: "elemento elemento venditore elemento",
  },

  /**
   * @see BPageMarketplacePricings
   */
  marketplace_pricings: {
    title: "prezzi elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    add_pricing_action: "aggiungi prezzi elemento",
  },

  /**
   * @see BVendorPricingAdd
   */
  vendor_pricing_add: {
    title: "marketplace prezzi elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    delete: {
      subtitle:
        "Sei sicuro di voler eliminare questo elemento?",
      remove_pricing_action: "rimuovi prezzi elemento",
    },
    inputs: {
      title: {
        placeholder: "elemento.elemento., elemento prodotti elemento...",
      },
      description: {
        placeholder: "Puoi aggiungere una nota qui...",
      },
      accept_delete: {
        true_description: "Voglio eliminare questo modello di prezzo.",
        true_title: "conferma prezzi elemento elemento",
      },
    },
  },

  /**
   * @see BVendorPayoutAdd
   */
  vendor_payout_add: {
    vendor: {
      title: "venditore",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    vendor_wallet: "venditore portafoglio",
    vendor_bank_account: "venditore elemento elemento",
    with_balance_tooltip:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    with_balance: "elemento elemento",
    without_balance: "elemento elemento - elemento modalità",
    bank_transfer: {
      title: "Bonifico bancario",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    vendor_bank: "venditore elemento",
    gateway_in_debug_mode_warning:
      "Controlla le informazioni prima di continuare.",
    payment: {
      title: "Pagamento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    history: {
      title: "Storia",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    refund: {
      title: "rimborso",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    inputs: {
      vendor: {
        placeholder: "seleziona elemento venditore...",
      },
      note: {
        placeholder:
          "Puoi aggiungere una nota qui... Questa nota non è visibile al venditore.",
      },
      accept_refund: {
        true_description: "Voglio annullare questo pagamento.",
        true_title: "annulla & rimborso pagamento",
      },
    },
    notifications: {
      reverse_fund_success: {
        title: "elemento elemento",
        message:
          "Operazione completata con successo.",
      },
      payout_success: {
        title: "pagamento",
        message:
          "Il pagamento del venditore è stato elaborato e aggiunto correttamente.",
      },
    },
  },

  /**
   * @see BShopQuotaImporter
   */
  quota_importer: {
    quota: "elemento",
    max_batch_msg: "Numero massimo di articoli che puoi importare in un singolo batch.",
    max_daily_limit_msg: "Numero massimo di articoli che puoi importare in un giorno.",
    extra_daily_limit_msg: "Articoli aggiuntivi consentiti oltre il limite giornaliero.",
    add_items_today_msg: "elementi elemento elemento.",
    file_statistic_msg: "elemento elemento elemento file.",
    used_quota: "elemento elemento",
  },

  /** {@see BPageShopMarketingCampaign**/
  campaigns: {
    title: "Campagne",
    subtitle:
      "Crea campagne, link tracciabili e visualizza informazioni affidabili e accurate in un unico posto. Ti aiutiamo a prendere decisioni migliori basate sui dati.",
    add_action: "Aggiungi nuova campagna",
    empty_message: "Crea ora la tua prima campagna!",
    delete: {
      title: "Elimina campagna",
      message: "Sei sicuro di eliminare questa campagna e tutti i dati?",
      action: "Sì, elimina ora",
    },
  },

  landing_categories: {
    raw: "Modelli grezzi",
    all: "Tutti i modelli",

    marketing: "Marketing e annunci",
    product: "Introduzione al prodotto",
    health: "Salute e fitness",
    food: "Cibo e frutta",
    house: "Immobiliare e casa",
    device: "Macchina e dispositivo",
    car: "Auto",
    software: "elemento",
    clothing: "Abbigliamento e scarpe",
    jewellery: "Gioielleria",
  },

  /** {@see BPageShopSettingTheme**/
  shop_theme: {
    theme_colors: "Colori a tema",
    theme_colors_description:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    products_view_mode: "Visualizzazione lista della spesa",
    products_view_mode_desc:
      "Puoi regolare la modalità di visualizzazione dei prodotti nel tuo negozio in base alle dimensioni dello schermo. Questa modalità sarà considerata di default e non verrà applicata se l'utente cambia la modalità di visualizzazione.",

    tabs: {
      vendor_page: "venditore pagina",
    },

    color_light: "Colore primario",
    color_dark: "Colore scuro primario",
    color_deep_dark: "Colore scuro intenso",
    color_info: "Collegamenti",
    light_checkout: "Tema di pagamento leggero",
    light_header: "Intestazione leggera",
    light_footer: "Piè di pagina leggero",
    light_filter: "Tema del filtro di categoria",
    checkout_color: "elemento elemento",

    typography: "Tipografia",
    header: "Intestazione",
    footer: "elemento",
    custom_code: "Codice personalizzato",
    custom_css: "CSS personalizzato",
    custom_variants: "Varianti",

    wrap_product_title: {
      title: "elemento titolo",
      subtitle: "L'altezza del titolo verrà regolata dinamicamente.",
    },

    animation: {
      title: "elemento",
      static: {
        false_title: "elemento elemento",
        false_description:
          "Categorie e prodotti hanno un'animazione interattiva per mostrare la funzionalità.",
        true_title: "Statico",
        true_description: "Categorie e prodotti non hanno animazione.",
      },
    },

    quick_actions: {
      title: "elemento elemento",
      hover: {
        false_description:
          "Modalità semplice e minimale senza azioni aggiuntive sulle schede prodotto.",
        true_description:
          "Mostra i pulsanti Acquista rapido e Aggiungi per confrontare sulla scheda del prodotto in bilico.",
        true_title: "mostra elemento elemento elemento",
      },
    },
    filter_products: {
      title: "filtro prodotti",
      only_available: {
        false_description: "Mostra tutti i prodotti nell'elenco del negozio come impostazione predefinita.",
        true_description:
          "Mostra solo i prodotti disponibili nell'elenco del negozio per impostazione predefinita.",
        true_title: "disponibile prodotti",
        false_title: "elemento prodotti",
      },
    },
    filter_categories: {
      title: "filtro categorie",
      hide_empty_folders: {
        false_description: "mostra elemento categorie elemento elemento negozio elenco.",
        false_title: "mostra elemento categorie",
        true_title: "nascondi elemento categorie",
        true_description:
          "mostra elemento categorie elemento prodotti elemento elemento negozio elenco.",
      },
    },

    product_page: {
      title: "prodotto pagina",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      buy_button_color: "elemento elemento elemento",
      smart_price: {
        title: "elemento elemento prezzo",
        true_description:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      reverse_currency: {
        title: "valuta elemento elemento",
        false_title: "Modalità normale",
        true_title: "elemento modalità",
        false_description:
          "Il segno della valuta verrà posizionato all'inizio dei numeri. Esempio: $95 , €30",
        true_description:
          "Il segno della valuta verrà posizionato alla fine dei numeri. Esempio: 95$, 30€",
      },
      variants_selector: {
        title: "elemento elemento",
        subtitle:
          "Puoi scegliere diversi modi per visualizzare le varianti sulla pagina del prodotto.",
      },

      tabs_order: {
        title: "elemento ordine",
        reset_to_default: "elemento elemento elemento",
      },
    }, // end: product_page
  },

  /**
   * @see BShopThemeVendor
   */
  b_shop_theme_vendor: {
    onboarding: {
      title: "elemento & elemento",
      subtitle:
        "Personalizza l'esperienza di onboarding e accesso del fornitore con un video, un'immagine o un messaggio personalizzato.",
    },
    inputs: {
      page_vendor_login: {
        label: "venditore elemento pagina",
        message:
          "Seleziona o inserisci le informazioni richieste.",
      },
      page_vendor_registered: {
        label: "venditore elemento pagina",
        message:
          "Seleziona o inserisci le informazioni richieste.",
      },
    },
  },

  /** @see BShopOptionsVariants **/
  b_shop_options_variants: {
    custom_variants: {
      title: "elemento elemento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
  },
  /** @see BShopThemeTypography **/
  b_shop_theme_typography: {
    main_font: {
      title: "principale elemento elemento",
      subtitle: "Scegli il tuo carattere preferito da Google Fonts.",
    },
    inputs: {
      font_family: {
        label: "elemento elemento",
        message: "elemento elemento elemento valore.",
      },
      font_res: {
        label: "elemento elemento",
        message: "elemento elemento elemento elemento.",
      },
    },
  },

  /** @see BShopThemeHeader **/
  b_shop_theme_header: {
    logo: {
      title: "elemento elemento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    header_title: {
      title: "elemento titolo",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },

    inputs: {
      logo: {
        label: "elemento elemento",
      },
      height: {
        label: "elemento elemento",
      },
      width: {
        label: "elemento elemento",
      },
      title: {
        label: "elemento titolo",
        set_empty: "elemento elemento titolo",
      },
    },
  },

  /** @see ShopThemeVariantsMode**/
  shop_theme_variants_mode: {
    smart: {
      title: "elemento modalità",
      description:
        "Varianti compatte in opzioni separate selezionabili, adatte alla maggior parte dei casi.",
    },
    select: {
      title: "seleziona modalità",
      description:
        "Visualizza tutte le varianti in un menu a discesa, ideale per un gran numero di varianti.",
    },
  },

  /** @see BPropertySetAdd**/
  property_set_add: {
    edit_title: "modifica elemento elemento",
    add_title: "aggiungi elemento elemento",
    config: {
      subtitle:
        "Imposta il titolo e la descrizione per il tuo insieme di proprietà. Sarà visibile solo al personale.",
    },
    variants: {
      title: "Varianti",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },

    inputs: {
      title: {
        placeholder: "Inserisci un titolo per l'insieme di proprietà...",
      },
      description: {
        placeholder: "elemento elemento elemento descrizione... (opzionale)",
      },
      custom_variants: {
        true_title: "elemento elemento",
        false_title: "elemento elemento",
        true_description: "elemento elemento prodotto elemento.",
        false_description: "elemento elemento elemento elemento.",
      },
    },
  },

  /** @see BPropertySetVariantRow **/
  property_set_variant_row: {
    inputs: {
      values: {
        placeholder: "elemento valori elemento... (opzionale)",
        messages:
          "È possibile fornire suggerimenti per i valori e personalizzare l'ordine.",
      },
    },
  },

  /** {@see AppTemplates**/
  app_templates: {
    default: "Predefinito",
    blue: "Oceano blu",
    amber: "Ambra",
    green: "Equatoriale",
    red: "Vampiro",
    magenta: "Fiore",
    master: "Maestro",
    black: "Lato oscuro",
  },

  /** {@see BPageAffiliateOrders**/
  affiliate_orders: {
    title: "Ordini di partner affiliati",
    table: {
      order_price: "Ammontare dell'ordine",
      order_payment: "Stato del pagamento dell'ordine",
      order_link: "Collegamento ordine",
      commission_status: "Stato della Commissione",
      commission_amount: "Importo della commissione",
      items: "Elementi",
      actions: "Azioni",
      create_date: "Crea data",
    },
    notifications: {
      update_success: "Stato affiliato aggiornato.",
    },
  },

  /** {@see BPageAffiliatePayments**/
  affiliate_payments: {
    title: "Pagamenti partner affiliati",
    table: {
      staff: "Personale",
      amount: "Importo",
      note: "Nota",
      date: "Data",
    },
  },
  /** {@see BPageShuttleRoles**/
  my_roles: {
    title: "I miei ruoli",
    message:
      "I ruoli sono il tipo di accesso concesso ai dipendenti di un negozio. Ad esempio, il personale responsabile dell'invio o dell'imballaggio degli ordini.",
  },
  /** {@see WidgetMyRoleCard**/
  role_card: {
    complete_tasks: "Compiti completati",
    reject_tasks: "Compiti rifiutati",
    last_check: "Controllo recente",
  },

  /** {@see BAppConfigDialog**/
  app_config: {
    reviews: "Recensioni",
    rate_now: "Vota adesso",
    category: "Categoria",
    uninstall: "Disinstalla",
    get_app: "Ottieni l'applicazione",
    public_keys: "Chiavi pubbliche",
    private_keys: "Chiavi private (Sicure)",
    config: "Configurazione dell'app",
    app_status: "Stato dell'applicazione",
    app_info: "Informazioni sull'applicazione",
    update_at: "Aggiornamento recente",
    visit_website: "Visita il sito web",
    privacy: "politica sulla riservatezza",
    installs: "Installa",
    basic_profile_permission: "Informazioni di base sul profilo",
    developer: "Sviluppatore",
    permissions: "Permessi",
    total_comments: "Commenti totali",
    delete_dialog: {
      title: "Disinstalla app",
      message: "Vuoi rimuovere questa app dal tuo negozio?",
      action: "Sì, Elimina app",
    },
    notifications: {
      uninstall_success: "Applicazione disinstallata correttamente.",
    },
  },

  /** {@see BPageShopChannelBots**/
  shop_bots: {
    not_set: "Non impostato!",
    tokens: "Gettone/i",
    webhook: "Webhook",
    calls: "Chiamate",
    dialog: {
      title: "{name} Configurazione bot",
      message:
        "Un framework bot completo per la creazione di esperienze di acquisto di livello aziendale.",
    },
  },

  /** {@see BPageShopCrmCustomers**/
  shop_customers: {
    title: "Gestione clienti",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    add_customer_action: "aggiungi nuovo cliente",

    all_customers: "Scarica tutti i clienti",
    filtered_customers: "Clienti filtrati",
    dialog_chips: {
      title: "Imposta il numero di gettoni cliente",
    },
    dialog_club: {
      title: "Imposta il livello del club dei clienti",
    },
  },

  /** {@see BCustomerAdd**/
  customer_add: {
    edit_title: "modifica cliente",
    add_title: "aggiungi nuovo cliente",
    subtitle:
      "Per aggiungere un cliente al tuo negozio, fornisci un indirizzo email o un numero di telefono.",
    more: {
      title: "Aggiungi più dettagli",
      subtitle: "Imposta valuta, club clienti, segmenti, indirizzo e altro.",
    },
    detail: {
      subtitle:
        "Tieni un registro delle informazioni personali del tuo cliente. Ti preghiamo di rispettare la privacy del tuo cliente.",
    },
    preferences: {
      subtitle: "Imposta qui la valuta utente, il club cliente e i segmenti predefiniti.",
    },
    address: {
      subtitle:
        "Questo indirizzo può essere utilizzato nel POS. L'utente non può vedere queste informazioni.",
    },
  },

  /** {@see AppPageDashboard**/
  app_dashboard: {
    status: "Stato di pubblicazione",
    statistics: "Statistiche",
  },
  /** {@see AppPage_Publish**/
  app_publish: {
    production_version: "Versione di produzione",
    beta_version: "Versione beta",
    alpha_version: "Versione alfa",
  },
  /** {@see AppPublishWidget**/
  app_publish_widget: {
    header: "Intestazione del sito web del negozio",
    header_code: "Codice intestazione",
    admin_page: "Pagine di amministrazione",
    name: "Nome",
    icon: "Icona",
    url: "URL",
  },

  /** {@see AppPage_API**/
  app_api: {
    title: "Accesso API",
    revoke_api: "Revoca API",
    api_key: "Chiave API",
    secret: "Chiave segreta",
    client: "Cliente",
    redirect_url: "URL di reindirizzamento",
    client_name: "Nome del cliente",
  },

  /** {@see BPageApplication**/
  app_loader_page: {
    no_ui_title: "Questa applicazione non ha alcuna interfaccia utente!",
    no_ui_desc:
      "Alcune applicazioni non richiedono un'interfaccia utente nella loro area di amministrazione. Questa applicazione può aggiungere codice solo alla sezione dell'intestazione del sito Web del tuo negozio.",
    header: "Codice intestazione",
  },
  /** {@see BPageShopFinanceReport**/
  finance_report: {
    export_title: "Esporta dati finanziari",
    export_sub_title:
      "Scarica i dettagli finanziari in un unico file.",
    start_input_placeholder: "Seleziona la data di inizio del rapporto",
    end_input_placeholder: "Seleziona la data di fine del rapporto",
    download_action: "Scarica la lista delle finanze",
  },

  /** {@see BPageShopSettingNotifications**/
  shop_notifications: {
    title: "Notifiche del negozio",
    message: "Modifica le impostazioni e le preferenze delle notifiche del negozio",
    channel: "Canale",
    status: "Stato",
    events: "Eventi",
    info: "Informazioni",
    actions: "Azioni",
    connected: "Collegato",
    not_connected: "Non collegato!",
    connect_now: "Connettiti ora",
    send_test: "Invia dati di prova",
    disconnect: "Disconnetti",

    dialog: {
      title: "Configurazione bot",
      message:
        "Un framework di notifica completo per creare esperienze di e-commerce di livello aziendale.",
      action: "Clicca qui!",
      set_config: "Imposta configurazione",
    },
  },
  notification_events: {
    new_order: "🛍️ Ordina",
    payment: "💳 Pagamento",
    return: "📦 Ritorno",
    weekly_report: "📈 Rapporti settimanali",
  },

  /** {@see BOrderDashboardDelivery} **/
  order_delivery: {
    title: "Consegna",
    add_to_delivery_que_action: "Aggiungi alla coda di spedizione",
    in_que: "In coda di spedizione",
    message:
      "Dopo aver consegnato il pacco al corriere di spedizione, clicca sul pulsante <b>Conferma Consegna</b> .",
    message_add_to_service:
      "Fare clic sul pulsante seguente se si desidera inviare questo pacco tramite un <b>servizio di consegna</b> .",
    courier_action: "elemento elemento",
    courier_action_subtitle: "Il mio corriere ritirerà il pacco.",

    pickup_ready_action: "elemento elemento",
    pickup_ready_action_subtitle: "L'ordine è pronto per il ritiro da parte del cliente.",

    service_action: "elemento elemento",

    checklist: [
      "Controlla la carta d'identità del corriere.",
      "Un buon imballaggio dei prodotti e una consegna tempestiva possono aumentare il tasso di fidelizzazione dei tuoi clienti.",
    ],
    manual: {
      title: "In attesa di conferma della consegna da parte del cliente.",
      action_received: "Conferma dell'acquirente",
      action_returned: "Consegna Ritorno",

      message:
        "Nota: se il cliente riceve l'ordine, puoi utilizzare le seguenti opzioni per completare l'evasione. Alcuni servizi di spedizione nel sistema confermeranno automaticamente la consegna.",
    },
    auto_complete_note:
      "Dopo un certo periodo, lo stato dell'ordine verrà modificato in consegnato. Questo periodo varia a seconda del tipo di ordine ed è determinato dal sistema.",
    received: {
      title: "Consegnato al cliente.",
      delivered_date: "Data di consegna",
    },
    receiver: "Ricevitore",
    bill: "Ricevuta",

    tracking: {
      title: "Aggiungi codice di monitoraggio/URL",
      code: "Codice di monitoraggio",
      url: "URL di monitoraggio",
      message:
        "Se hai spedito tramite un servizio che fornisce un codice di tracciamento per questo ordine, puoi inserire il codice e il relativo link di tracciamento in questa sezione. Queste informazioni verranno mostrate al cliente.",
    },
    preferred_delivery_time: "Tempo di consegna preferito",
    manage_couriers: "Gestisci i miei corrieri",
    manage_service: "Gestisci il servizio",

    option_deliver_by_courier: "Opzione 1: consegna con i tuoi corrieri.",
    option_add_to_que:
      "Opzione 2: aggiungi alla coda da elaborare nella pagina del servizio di spedizione.",
    option_instant_shipping: "Opzione 3: spedizione immediata.",

    verify_delivery_input: {
      true_title: "conferma elemento elemento",
      true_description:
        "Confermo che l'ordine è stato consegnato al cliente.",
    },
  },

  /** {@see BShopHomeSelect} **/
  shop_home_edit: {
    title: "Impostazione della pagina iniziale",
    sub_title:
      "Imposta la pagina predefinita del tuo sito web",

    default_home: "Pagina iniziale predefinita",
    default_home_placeholder: "La pagina del negozio è la home page del sito",
  },
  /**
   * @see OReferralBank
   */
  referral_bank: {
    title: "elemento dashboard",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    no_bank_info: "elemento elemento elemento!",
    actions: {
      edit_my_bank_info: "modifica elemento elemento elemento",
    },
    bank_dialog: {
      title: "elemento elemento dettagli",
      info: {
        title: "Banca",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      inputs: {
        name: {
          label: "elemento elemento",
          message: "Il nome completo della banca in cui è tenuto il conto.",
        },
        holder_name: {
          label: "elemento elemento elemento",
          message:
            "Il nome completo della persona o entità che detiene l'account.",
        },
        account_number: {
          label: "Numero di conto",
          message:
            "Il numero univoco associato al conto bancario specifico.",
        },
        routing_number: {
          label: "Routing Number (USA) o Sort Code (Regno Unito)",
          message:
            "Un numero che identifica la filiale bancaria specifica (termini diversi vengono utilizzati in paesi diversi).",
        },
        swift: {
          label: "SWIFT/BIC codice",
          message:
            "Un codice internazionale utilizzato per identificare le banche a livello globale, in particolare per i trasferimenti internazionali.",
        },
        iban: {
          label: "IBAN (elemento elemento elemento elemento)",
          message:
            "Seleziona o inserisci le informazioni richieste.",
        },
        contact: {
          label: "Informazioni sui contatti",
          message: "Numero di telefono o indirizzo email associato all'account.",
        },
        note: {
          label: "Nota",
          message: "elemento nota",
        },
      },
    },
    notifications: {
      save: {
        message: "Le tue informazioni bancarie sono state aggiornate con successo.",
      },
    },
  },

  /**
   * @see OReferralTier
   */
  referral_tier: {
    message:
      "Da tutte le commissioni di servizio, abbonamenti e altri pagamenti effettuati dai tuoi referral.",
  },

  /**
   * @see ReferralTiers
   */
  ReferralTiers: {
    Bronze: {
      title: "elemento elemento",
      description:
        "Sei nella fascia Bronzo. Hai guadagnato una commissione del 2% dai tuoi referral.",
    },
    Silver: {
      title: "elemento elemento",
      description:
        "Sei nel livello Argento. Hai guadagnato una commissione del 4% dai tuoi referral.",
    },
    Gold: {
      title: "elemento elemento",
      description:
        "Sei nella fascia Gold. Hai guadagnato una commissione del 6% dai tuoi referral.",
    },
    Platinum: {
      title: "elemento elemento",
      description:
        "Sei nel livello Platino. Hai guadagnato una commissione dell'8% dai tuoi referral.",
    },
    Diamond: {
      title: "elemento elemento",
      description:
        "Sei nella fascia diamante. Hai guadagnato una commissione del 10% dai tuoi referral.",
    },
  },

  /**
   * @see OPageMonetize
   */
  page_monetize: {
    title: "Monetizzazione",
    subtitle: "elemento accesso elemento azienda elemento.",
  },

  /** {@see OPageMonetizeReferral} **/
  selldone_referral_page: {
    referral_link: "Link di riferimento",
    registered: "Registrato",
    accepted: "Accettato",
    bank: "Banca",
    bank_title: "Informazioni bancarie per il ritiro",
    new_users: "Nuovi utenti",
    performance: "Prestazione",
    credit_mode: "Modalità credito",
    get_stickers: "Ottieni il codice HTML adesivo da copiare e incollare",
    click_copy_sticker_code: "Clicca sul badge per copiare il codice html.",
  },
  /** {@see OReferralTransactions} **/
  selldone_referral_payment: {
    title: "Pagamenti di riferimento",
    subtitle:
      "Selldone — Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

    officer: "Ufficiale",
    amount: "Importo transazione",
    note: "Nota",
    date: "Data",
  },

  /** {@see BGatewayCard} **/
  widget_shop_gateway: {
    link_account_caution:
      "Collega un account ({currency}) al tuo negozio! Clicca qui..",
  },

  /** {@see BProductOrderSalesPerformance} **/
  product_sell_widget: {
    title: "Performance di vendita del prodotto",
  },

  /** {@see BOrderDashboardDropshippingFulfillment} **/
  fulfilment_order_widget: {
    title: "Adempimento in dropshipping",
    check_action: "Accetta il dropshipping",
    uncheck_action: "Ordine confermato",
    pay_action: "Pagare gli articoli costano..",
    pay_completed: "Conferma di pagamento",
    list_of_items: "Rivendita di articoli",

    checklist: [
      "Paga la quantità di prodotti che vendi indirettamente al venditore originale.",
      "Puoi pagare e saldare insieme il costo dei prodotti al fornitore nella sezione contabilità > Dropshipping del negozio.",
      "Dopo il pagamento, il fornitore riceverà il tuo ordine e lo invierà direttamente all'acquirente dopo la preparazione.",
    ],
    message:
      "Dopo aver pagato la commissione dell'ordine al fornitore, vedere lo stato di avanzamento dell'invio dell'ordine in questa sezione.",
  },

  /** {@see BPageWholesaler} **/
  drop_shipping: {
    menu: {
      dashboard: "Pannello",
      orders: "Ordini",
      inventory: "Inventario",
      shops: "Rivenditori",
      requests: "Richieste",
    },
    drop_shipping_charge: "Addebito dropshipping",
  },

  /** {@see DropshipRequestStatus} **/
  dropship_request_status: {
    PENDING: "In attesa di",
    ACCEPT: "Accettare",
    REJECT: "Rifiutare",
  },

  /** {@see BPageWholesalerShop} **/
  dropshipping_reseller_page: {
    menu: {
      dashboard: "Pannello",
      orders: "Ordini",
      wallet: "Portafoglio",
    },
  },

  /** {@see BPageWholesalerShopDashboard} **/
  dropshipping_reseller_dashboard: {
    title: "Cruscotto rivenditore",
  },

  /** {@see BPageWholesalerShopOrders} **/
  dropshipping_reseller_orders: {
    title: "Ordini del rivenditore",
  },

  /** {@see BPageWholesalerShopWallet} **/
  dropshipping_reseller_wallet: {
    title: "Portafoglio rivenditore",
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Conferma di pagamento",
      payment_success: "Pagamento completato.",
      buy_title: "Acquistare",
      pay_by_giftcards: "Il tuo ordine è stato pagato con una carta regalo.",
      free_order: "Il tuo ordine è gratuito.",
      pay_by_cod: "Il tuo ordine è stato registrato come contrassegno.",
      pay_by_dir:
        "Il tuo ordine è stato registrato come pagamento diretto, completa il pagamento e carica la ricevuta nella pagina dell'ordine.",

      pay_title: "Pagamento",
      qr_code_payment: "Codice QR di pagamento creato.",
      connecting_to_online_gateway: "Connessione al gateway di pagamento online.",
    },
  },

  /** @see DropShippingAccountCharges **/
  dropship_charges: {
    notifications: {
      pay_confirm_message: "Il pagamento è confermato.<br> Data: {payment_at}",
      pay_fail_title: "Non pagato",
      pay_fail_message: "Impossibile verificare il pagamento!",
    },
  },

  /** @see BPageShopFinanceResellerFulfillment **/
  dropship_checkout: {
    pay_dialog: {
      title: "Pagamento ordini rivenditore",
      balance: "Il saldo del tuo conto",
      total_cost: "Costo totale degli ordini",
      need_charge: "Ha bisogno di caricare",
      no_account_cation: "Non hai un account! Chiama il grossista.",
      orders: "Ordini",
    },
    notifications: {
      success_pay:
        "Il pagamento per questi ordini è stato confermato e completato con successo.",
    },
  },
  /** @see BPageShopFinanceResellerWallets **/
  dropship_accounts: {
    charge_account: "Conto di addebito",
    charge_dialog: {
      title: "Addebita sul conto dropshipping",
      amount_input: "Addebito sul conto",
      charge_now: "Carica ora",
    },
  },

  /** @see BPageWholesalerDashboard **/
  dropship_admin_dashboard: {
    title: "Richieste del rivenditore",
    today_order_count: "Oggi gli ordini contano",
    yesterday_order_count: "Gli ordini di ieri contano",
    total_7_days: "Ordini totali negli ultimi 7 giorni",
  },

  /** @see BProductAddDropshipping **/
  dropshipping_products: {
    no_shops:
      "Siamo spiacenti, nessun negozio trovato. Ci saranno più negozi in futuro in modo da poter mettere i loro prodotti nel tuo negozio.",
    show_all_shops: "Mostra tutti i negozi",
    show_eligible_shops_message: "Mostra i negozi idonei",
    show_all_message: "Puoi vedere tutti i negozi",
    current_shop: "Negozio attuale",
    request_account: "Richiedi conto",
    request_accepted: "Richiesta accettata",
    request_rejected: "Richiesta respinta",
    request_pending: "Richiesta in sospeso..",
    notifications: {
      add_product: "Prodotto aggiunto al tuo negozio.",
      request_access:
        "Abbiamo inviato con successo la tua richiesta di accesso al grossista.",
    },
  },

  /** @see BProductDropshippingAbstractView **/
  product_dropshipping: {
    need_re_enable:
      "Questo prodotto è stato modificato dal venditore originale, queste variazioni di prezzo hanno disabilitato il prodotto nel tuo negozio. Verifica le modifiche e se accetti di riattivare il prodotto, premi il pulsante qui sotto.",
    need_re_enable_action: "Accetto, applica le modifiche e l'attivazione",
    changed_value:
      "Questo prodotto è stato modificato dal venditore originale. Controlla le modifiche e se accetti di applicare le modifiche al tuo prodotto, fai clic sul pulsante in basso.",
    changed_value_action: "D'accordo, apporta modifiche",
    parent_deleted: "Questo articolo è stato rimosso dal venditore originale.",
    parent_closed:
      "Questo prodotto è stato disabilitato dal venditore originale! Non potrai vendere questo prodotto nel tuo negozio, ma se il venditore originale riattiva il prodotto potrai riattivarlo nel tuo negozio.",
    notifications: {
      re_enable_success: "Questo prodotto è stato riattivato.",
      update_success:
        "Queste informazioni sul prodotto sono state aggiornate con le informazioni sul prodotto originale.",
    },
  },

  /** @see BPageProductDropshipping **/
  product_dropshipping_admin: {
    title: "Scaricare la consegna",
    save_alert:
      "Le impostazioni di dropshipping di questo prodotto sono cambiate. Vuoi salvare le modifiche?",
    reselling_message:
      "Attivando questa opzione, gli altri venditori potranno aggiungere il tuo prodotto al loro negozio.",
    reselling: "Abilita Dropshipping",
    price_merchants: "Prezzo per i commercianti",
    price_commission: "Commissione commerciante (fissa)",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "In attesa di disponibilità",
    inform_me_when_available: "Avvisami quando è disponibile!",
    pay_buy: "Paga e acquista",
    quantity: "Contare",
    quantity_in_basket: "Articoli nel carrello",
    count_unit: "X",
    remove: "Rimuovere",
    add_to_basket: "Aggiungi al carrello",
    book_now: "Prenota ora",
    reserve_now: "Prenota ora",
    buy_now: "Acquista ora",

    buy: "Acquistare",
    notifications: {
      inform_add_success: "Ti faremo sapere quando sarà disponibile.",
      inform_remove_success: "Sei stato rimosso dalla lista d'attesa.",
    },
  },
  /** @see SProductOverview **/
  product_info: {
    fake: "Impostore",
    action: "Asta",
    compare_limit: "Limite di 10 articoli",
    compare_add: "Aggiungi per confrontare",
    compare_be_in_list: "In lista di confronto",

    type: "Tipo",
    brand: "Marca",
    category: "Categoria",
    discount: "Sconto",
    track_price: "Traccia il prezzo",
    waiting_for_auction: "Aspettando l'asta?",
    inform_auction: "Avvisami quando asta",
    return_in_days: "{days} Giorni Garanzia Restituzione",
    support24h7: "Supporto 24 ore 7 giorni",
    support_normal: "Supporto orario di lavoro",
    original_guarantee: "Garanzia originale",
    cod_payment: "Assistenza in contrassegno",

    pros: "Professionisti",
    cons: "contro",

    external_link: "Leggi di più",
    notifications: {
      congratulation: "Congratulazioni",
      waiting_list_add_success:
        "Ti avviseremo quando questo prodotto sarà messo all'asta.",
      waiting_list_delete_success: "Sei uscito dalla lista d'attesa dell'asta.",
    },

    offer_message: "Acquista {min_quantity} Ottieni uno sconto del {percent}% su questi articoli",
    up_to: "Fino a {per_order}x per ordine",
    get_free: "OTTENERE GRATUITAMENTE",
    get_off: "OTTIENI uno SCONTO DEL {percent}%.",
  },

  /** @see SStyler **/
  styler: {
    size_class: "Dimensioni e classe",
    delete_bg: "Elimina immagine di sfondo",
    bg_color: "Colore di sfondo",
    section_style: "Imposta lo stile della sezione",
    link: "Imposta collegamento",
    show_products: "Gestione liste prodotti/categorie",
    show_product: "Seleziona il prodotto",
    delete_section: "Elimina sezione",
    text_color: "Colore del testo",
    tex_align: "Allineamento del testo",
    text_style: "Stile del testo",
    bg_image: "Immagine di sfondo",

    product: {
      title: "Seleziona il prodotto",
    },

    /** @see SPageProductsFilter **/
    products: {
      title: "Gestione elenco prodotti e categorie",
      sort_options: "Seleziona le impostazioni di ordinamento e visualizzazione",
      item_types: "Mostra solo prodotti/categorie",
      product_only: "Solo prodotti",
      category_only: "Solo categorie",
      no_category: "Non c'è una categoria nel tuo negozio.",
      limit: "Limite di prodotti",
      limit_message: "Inserisci i conteggi dei risultati dei prodotti",
      select_categories: "Seleziona le categorie disponibili",
      categories_limit: "Limite di categorie",
      categories_limit_msg:
        "Inserisci il numero massimo di categorie. Imposta zero per nessun limite.",
    },
  },

  /** @see BPageShopCrmChat **/
  shop_contacts: {
    popup: "Abilita il supporto dei popup",
    popup_message:
      "Attivando questa opzione, la chiave di supporto verrà visualizzata in basso a destra del tuo negozio.",
  },

  /** @see BPagePopup **/
  popup_page: {
    preview: "Visualizza popup dal vivo",

    menu: {
      design: "elemento",
      appearance: "Aspetto",
      filter: "Filtro",
      setting: "Collocamento",
    },
    notifications: {
      save: "Popup salvato correttamente.",
      edit: "Popup aggiornato correttamente.",
    },
  },
  /** @see LMenuLeftPopupAppearance **/
  popup_appearance: {
    position: "Posizione",
    position_desc:
      "Specificare la posizione di visualizzazione di questa notifica nella pagina.",
    width: "Larghezza",
    width_desc: "È possibile impostare la larghezza massima della pagina.",
    height: "Altezza",
    height_desc: "È possibile impostare l'altezza massima della pagina.",
    radius: "Raggio dell'angolo",
    radius_desc:
      "In questa sezione puoi impostare il raggio di curvatura degli angoli della notifica.",
    shadow: "Ombra",
    shadow_desc: "Vuoi che la finestra pop-up sia ombreggiata?",
    delay: "Mostra ritardo",
    delay_desc:
      "Una volta che l'utente è entrato nel tuo negozio, trascorso questo periodo di tempo, verrà visualizzata una notifica all'utente.",
    hide: "Nascondi ritardo",
    hide_desc:
      "Puoi impostare che la notifica si chiuda automaticamente pochi secondi dopo lo spettacolo. Un valore di 0 significa che la notifica non si chiuderà automaticamente.",
    transition: "Animazione popup",
  },

  /** @see BPagePopupFilter **/
  popup_filter: {
    registered: "Requisiti di iscrizione e di accesso",
    registered_desc:
      "Puoi scegliere di mostrare questa notifica solo agli utenti o agli ospiti del negozio.",
    only_guests: "Solo ospiti",
    only_users: "Solo utenti registrati",
    purchased: "Cronologia degli acquisti",
    purchased_desc:
      "Puoi scegliere di mostrare questa notifica solo agli utenti che hanno già acquistato oa coloro che non hanno ancora acquistato.",
    no_purchase: "Nessun acquisto ancora",
    yes_purchase: "Acquistato prima",
    sex: "Genere",
    sex_desc:
      "Vuoi che questa notifica venga mostrata solo agli utenti di un sesso specifico?",
    age: "Età minima",
    age_desc:
      "Se viene inserito un valore maggiore di 6, l'utente deve essere loggato e deve aver inserito la sua data di nascita.",
    levels: "Livelli del club dei clienti",
    levels_desc:
      "Se l'utente ha uno dei livelli selezionati di seguito, questa notifica gli verrà mostrata.",
    countries: "Restrizioni di posizione",
    countries_desc:
      "Vuoi che questa notifica venga mostrata solo agli utenti provenienti da un paese specifico?",
  },

  /** @see BPagePopupSetting **/
  popup_setting: {
    published: "Stato pubblicato",
    repeat: "Ripetere",
    repeat_msg:
      "Vuoi che questa notifica venga mostrata all'utente più di una volta?",
    intervals: "Durata della visualizzazione popup",
    intervals_msg:
      "Deve essere trascorso il tempo minimo tra la visualizzazione delle notifiche a un utente.",
    designer_zone: "Zona di design",
    title: "Titolo popup",
    note: "Nota del progettista",
    image: "Immagine di copertina",
    delete: {
      title: "Eliminare",
      sub_title:
        "Una volta eliminato un popup, non c'è ritorno. Si prega di essere certi.",
      action: "Elimina questo popup",
    },
    notifications: {
      delete: "Popup cancellato.",
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
      templates: "elemento",
      provider: "elemento",
    },

    manage: {
      title: "elemento SMS",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },

    template: {
      title: "elemento",
      valid_message: "elemento elemento crea elemento SMS messaggio.",
      provider_not_enable_message: "Il provider SMS non è abilitato!",
      need_custom_provider_message:
        "I messaggi SMS personalizzati funzionano solo se imposti un provider personalizzato.",
      add_new: "aggiungi nuovo",
      disable_reason: {
        set_provider: "elemento elemento elemento elemento!",
        provider_is_disabled: "elemento elemento elemento!",
        otp: "elemento - elemento elemento!",
        select_another_provider: "seleziona elemento elemento.",
      },
      enable_only_filter: "mostra elemento abilitato",

      text_template_not_supported_msg:
        "Il tuo provider non supporta i messaggi di testo normale.",
      structure_template_not_supported_msg:
        "Il tuo provider non supporta i messaggi strutturali.",

      structured_data: "elemento dati",

      menu: {
        reset_error: "elemento errore",
        send_test: "elemento elemento messaggio",
      },
    },
    template_edit: {
      title_add: "aggiungi nuovo messaggio elemento",
      title_edit: "modifica messaggio elemento",
      config: {
        title: "messaggio elemento",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        code: "Codice",
        language_msg: "Lascialo vuoto per impostarlo come predefinito.",
        enable_msg: "Questo modello verrà utilizzato per creare messaggi.",
      },
      text: {
        title: "elemento elemento",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        message: "Messaggio",
        reset_to_default: "elemento elemento elemento",

        auto_fill: {
          title: "automatico elemento elemento",
          subtitle:
            "Selldone — Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        },

        sample: {
          title: "elemento messaggio",
        },
      },
      template: {
        title: "elemento elemento",
        subtitle:
          "<code>Qui puoi gestire le informazioni e le impostazioni di questa sezione. {code}</code><code></code><code></code>",
        add_new_parameter: "aggiungi nuovo elemento",

        auto_fill: {
          title: "automatico elemento elemento",
          subtitle:
            "Selldone — Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        },
        request: {
          title: "elemento elemento",
        },
        sample: {
          title: "elemento elemento messaggio",
          subtitle: "Puoi copiare e incollare questo modello sul tuo provider SMS.",
        },
        add_message_action: "aggiungi messaggio elemento",
      },
    },
  },
  /** @see SmsTemplateMode **/
  sms_template_mode: {
    text: {
      title: "elemento elemento",
      desc: "Il messaggio verrà creato da un testo con parametri di sostituzione automatica e invierà.",
    },
    template: {
      title: "elemento elemento",
      desc: "Verrà creato un oggetto dai parametri e inviato al provider.",
    },
  },

  /** @see BShopSmsProvider **/
  shop_sms_provider: {
    title: "elemento SMS elemento",
    reset_error: "elemento errore",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    plain_text: "elemento elemento",
    structural_template: "elemento elemento",
    errors_limit_msg:
      "Controlla le informazioni prima di continuare.",

    enable_input: {
      false_description:
        "Selldone — Seleziona o inserisci le informazioni richieste.",
      true_description:
        "I messaggi SMS verranno consegnati utilizzando il tuo fornitore di servizi.",
    },
    test_input: {
      true_title: "elemento elemento",
      true_description:
        "<b>Seleziona o inserisci le informazioni richieste. {phone}</b>",
    },
    sync_action: {
      title: "Azioni",
      subtitle:
        "Alcuni servizi SMS forniscono servizi extra come campagne, marketing e altre funzionalità. Puoi sincronizzare i tuoi contatti o informazioni aggiuntive per utilizzare le loro funzionalità più rapidamente.",
      action: "elemento elemento",
    },
    tokens: {
      title: "elemento",
      subtitle:
        "Imposta i seguenti parametri per collegare il tuo fornitore di servizi SMS al tuo negozio.",
    },
  },
  sms_messages_options: {
    all: {
      title: "elemento + ordine elemento",
      description:
        "Verranno inviati messaggi di autenticazione e notifica dell'ordine.",
    },
    otp: {
      title: "elemento elemento",
      description: "elemento messaggio elemento elemento elemento.",
    },
  },

  /** @see BPageShopSettingEmail **/
  shop_emails: {
    title: "Gestisci le email",
    sub_title:
      "In questa sezione vedrai l'elenco delle email inviate dal negozio a clienti e gestori. Le e-mail vengono progettate e create automaticamente in base alle informazioni che hai inserito per il tuo negozio. Inoltre, in futuro sarà disponibile al pubblico la possibilità di personalizzare messaggi e immagini.",

    tabs: {
      preferences: "elemento",
      templates: "elemento",
      provider: "elemento",
    },

    preferences: {
      title: "elemento email",
    },
  },

  /**
   * @see BShopEmailProvider
   */
  shop_email_provider: {
    title: "elemento elemento elemento",
    subtitle:
      "Collega il tuo fornitore di servizi di posta per inviare e-mail tramite il tuo dominio personalizzato.",
    provider: "elemento",
    enable_input: {
      false_description: "Le tue email verranno inviate tramite il tuo dominio myselldone.",
      true_description: "Le tue email verranno inviate tramite il tuo dominio di posta personalizzato.",
    },
    config: {
      title: "elemento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    sender: {
      title: "A partire dal",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },

    inputs: {
      from: {
        label: "elemento Email",
      },
      from_name: {
        label: "elemento elemento",
      },
    },

    actions: {
      send_test_email: "elemento elemento elemento email",
    },

    messages: {
      provider_error_limit:
        "Controlla le informazioni prima di continuare.",

      encryption_ports_guide:
        "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b><b></b><b></b><b></b>",

      enable_receive_test:
        "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione. {email}</b>",
    },
  },

  /** @see InstagramViewMedias **/
  instagram: {
    title: "Vendite su Instagram",

    add_product: "Aggiungi nuovo prodotto",
    create_product: "Crea prodotto",
    link_box_msg:
      "Inserisci questo link nella tua biografia su Instagram, Telegram o altri social media in modo che il tuo pubblico possa acquistare più velocemente, più facilmente, di più e infine di più.",
    remove_account: "Cambia/Rimuovi link Instagram",
  },
  /** @see BPageShopChannelInstagram **/
  shop_channel_instagram: {
    title: "Instagram elemento elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Lista di cose da fare",
      message:
        "Scrivi i titoli del lavoro che vuoi fare e fai sapere all'acquirente fino a che punto è progredito.",
    },
    booking: {
      title: "Prenotazione / Prenotazione",
      message:
        "Questo ordine verrà elaborato a un'ora specifica, il cliente ha selezionato il periodo desiderato, se desideri apportare modifiche nel periodo selezionato, informa il cliente.",

      selected_checkin: "Data di accesso cliente selezionata",
      selected_checkout: "Data di uscita del cliente selezionata",
      change_days_question:
        "Hai bisogno di cambiare durante i giorni selezionati dal cliente?",
      show_calendar: "Mostra il calendario degli ordini",
    },
    pricing: {
      title: "Prezzo",
      message: "Quanto costa questo servizio?",
    },
    subscription: {
      title: "Sottoscrizione",
      message:
        "Puoi scegliere il periodo di abbonamento acquistando questo servizio su base giornaliera. Fai sapere all'acquirente se desideri modificare i valori predefiniti che hai già inserito.",
      duration: "Periodo di abbonamento",
    },
    charge: {
      title: "Caricare",
      message:
        "Hai specificato un addebito per questo articolo. È possibile modificare l'importo dell'addebito per l'articolo acquistato dal cliente.",
      charge: "Caricare",
    },

    save_item: "Verifica e imposta",
    start_service: "Avvia il servizio",
    end_service: "Fine",
  },
  /** @see BOrderDashboardServiceTasks **/
  service_tasks: {
    notification_finish: {
      title: "Fine del servizio",
      message:
        "In tal caso, premere il tasto di conferma per completare e chiudere l'ordine.",
      action: "Conferma e completa l'ordine",
    },
  },

  /** {@see BProductEditOutputs} **/
  product_outputs: {
    outputs_form: "Struttura delle informazioni del display (output)",

    virtual: {
      title: "Modulo informazioni sull'output del prodotto",
      sub_title:
        "Le informazioni che vuoi mostrare all'utente dopo l'acquisto. Questo modulo è particolarmente applicabile per la vendita di prodotti virtuali come la carta regalo.",
    },
    service: {
      title: "Progettazione di servizi",
      sub_title:
        "Per prima cosa seleziona il tipo di servizio e inserisci le informazioni richieste. Ad esempio, puoi definire una lista di cose da fare o chiedere al cliente un orario di prenotazione o un appuntamento.",
    },
  },

  /** {@see BProductServiceManage} **/
  service_design: {
    type: "Tipo di servizio",
    type_message:
      "Seleziona il tipo di servizio che offri per questo prodotto. Selezionando ogni voce verrà visualizzato il relativo form. A seconda del tipo di servizio scelto, maggiori informazioni potrebbero essere ricevute dal cliente al momento dell'ordine.",
  },

  /** {@see AvocadoHomePage} **/
  avocado: {
    name: "elemento",
    title: "Vendite veloci, accurate e divertenti su tutti i social media",
    message:
      "Un importo e un titolo sono tutto ciò di cui hai bisogno per ottenere denaro dai tuoi clienti! Il denaro verrà accreditato direttamente sul tuo account e i tuoi clienti avranno un'esperienza di acquisto unica.",
    new_order: "Nuova fattura",
    create_by_seller_title: "Crea fattura",
    create_by_seller_message:
      "Se vuoi creare una fattura con un determinato importo e inviarla a qualcuno, puoi premere il pulsante qui sotto per mostrare il modulo fattura. Fornisci il link generato all'acquirente per pagare e traccia il suo ordine attraverso di esso.",

    create_by_buyer_title: "Forma di avocado",
    create_by_buyer_message:
      "Attivando questa sezione, ti verrà mostrato un link, fornisci questo link ai tuoi acquirenti in modo che possano effettuare il loro ordine.",

    orders_list: "Elenco ordini",
    active_mode: "Ricevuta ordine attiva",
    inactive_mode: "inattivo",
    active_message:
      "Attivando questa fonte, i tuoi clienti potranno effettuare un ordine per il prodotto attraverso il modulo di richiesta che vedi sotto.",
    avocado_form_link_message:
      "Inserisci questo link nella tua biografia su Instagram, Telegram o altri social media in modo che il tuo pubblico possa acquistare più velocemente, più facilmente e infine di più",
    need_address: "Ottieni indirizzo",
    need_address_msg:
      "Se hai bisogno di ottenere la posizione e l'indirizzo dell'acquirente, seleziona questa opzione.",
    avocado_link_message:
      "È sufficiente fornire il link sopra al cliente per pagare l'ordine. Il cliente potrà seguire l'ordine attraverso questo link.",
    edit_order: "Modifica ordine",
    progress: "Tasso di avanzamento",
    buyer_link: "Collegamento acquirente",
    buyer_link_message:
      "Fornisci questo link al tuo acquirente. L'acquirente potrà pagare e tracciare il suo ordine tramite questo link. Questo collegamento è codificato, se il collegamento viene fornito a qualcuno, sarà in grado di pagare e vedere le informazioni. Questo link sarà attivo per 60 giorni. Clicca sul link qui sotto per copiare.",
    OrderConfirm_done: "Ordine confermato.",
    OrderConfirm_message:
      "Se confermi il pagamento e l'ordine è corretto, fai clic sul pulsante in basso.",
    OrderConfirm_action: "Conferma dell'ordine",
    PreparingOrder_message:
      "Se l'ordine del cliente è pronto per la spedizione, fai clic sul pulsante OK in basso.",
    PreparingOrder_action: "L'ordine è pronto per la spedizione",
    finish_message:
      "Se questo ordine è completato, premi il pulsante di fine per chiudere questo ordine.",
    finish_action: "Completare l'elaborazione dell'ordine",
    finish_dialog: {
      title: "Completa l'ordine",
      message: "L'ordine è completato e sei sicuro di volerlo chiudere?",
      action: "Sì, conferma il completamento dell'ordine",
    },
    configuration: "Impostazioni dell'avocado",
    delivery_price: "Spese di spedizione",
    edit_avocado_action: "Modifica informazioni",
    submit_pricing_avocado_action: "Invia il prezzo dell'ordine",
    add_avocado_action: "Crea collegamento fattura",
    avocados_list: "Elenco degli avocado",
    not_pricing: "Questo articolo non ha un prezzo!",

    show_all: "Mostra tutto",
    show_accepted: "Mostra elementi confermati",

    notifications: {
      update_success: "Avocado aggiornato correttamente.",
      add_success: "Avocado creato con successo.",
    },
  },

  /** {@see BDashboardShopOrdersAvocado} **/
  avocado_orders: {
    title: "elemento",
    title_small: "Vendite sui social media",
    pending_orders: "Ordini attivi",
    avocado: "Ordina Avocado",
  },
  /** {@see BAvocadoInvoice} **/
  avocado_process: {
    step1: "Prezzo",
    step1_msg:
      "Inserisci il prezzo di ogni articolo e spunta la casella verde. Se non è possibile vendere un articolo, cambia il suo stato in rifiutato.",
    step2: "Conferma fattura",
    step2_msg:
      "Crea una fattura per questo ordine. È possibile inserire un titolo e una descrizione per la fattura. L'importo dell'ordine viene calcolato automaticamente in base al prezzo totale degli articoli.",
    title_input: "Titolo fattura *",
    show_to_customer: "Questa informazione viene mostrata all'acquirente.",
    description_msg:
      "Vuoi scrivere una nota per questo ordine? Queste informazioni verranno mostrate all'acquirente.",
    price_input: "Ammontare dell'ordine *",
    tax_none: "Senza tasse",
    tax_included: "Incluso nel prezzo",
    tax_add: "Aggiungi tasse",
    tax_message: "Puoi scegliere se l'imposta è inclusa nel prezzo o meno.",
    tax_included_messages: "La tassa è inclusa nel prezzo.",
    tax_add_messages: "Le tasse dovrebbero essere aggiunte al prezzo finale.",
    invoice: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
  },

  /** {@see BPageProductHyper} **/
  /** {@see BPageShopChannelHyper} **/
  hyper: {
    name: "Iper",
    print_label:
      "Stampa la seguente etichetta e posizionala davanti al prodotto",
    hyper_form_link_product_message:
      "I tuoi clienti potranno acquistare rapidamente {product} tramite questo link. Inoltre, inseriranno lo stesso link scansionando il codice QR.",
    title: "Vendita iperveloce",
    message:
      "Con il canale di vendita Hyper di Selldone, i tuoi clienti potranno acquistare prodotti scansionando un codice QR senza alcuna azione da parte tua. Usa questo metodo per vendere rapidamente molti articoli durante festival, fiere o eventi affollati. Dopo aver attivato Hyper in questa sezione, puoi creare un codice QR Hyper per i prodotti fisici nella sezione Gestione prodotti.",
    orders_list: "Elenco ordini iper",
    active_mode: "Canale di vendita iper attivato",
    inactive_mode: "inattivo",
    active_message:
      "Se si abilita questa opzione, nella sezione di gestione di ogni prodotto verrà visualizzata la possibilità di creare i codici di vendita rapida.",
    hyper_form_link_message: "Collegamento alla pagina ipertestuale del tuo negozio",
    configuration: "Impostazioni iper",
  },

  /** {@see BDashboardShopOrdersHyper} **/
  hyper_orders: {
    title: "Iper",
    title_small: "Rapporto delle vendite",
    hyper: "Ordini ricevuti",
  },

  /** {@see BProductInventoryManagementFile} **/
  product_file: {
    no_file: "Nessun file ancora caricato!",
    delete_dialog: {
      title: "Cancella il file",
      message: "Sei sicuro di eliminare questo file?",
      action: "Sì, elimina ora",
    },
    notifications: {
      delete_success: "File eliminato con successo.",
    },
    drag_sort_msg: "Puoi trascinare e ordinare i file.",
    paid_mode_msg: "Gli utenti possono scaricarlo solo dopo aver acquistato il prodotto.",
    free_mode_msg:
      "Gli utenti possono scaricarlo gratuitamente. I file di esempio devono essere inferiori a 50 MB.",
    has_gust_shopping_msg:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    only_registered_shopping_msg:
      "Solo gli utenti registrati possono scaricare file di esempio.",
    file_count_limit: "file elemento limite",
  },

  /**
   * @see BProductLocationRestrictionsList
   */
  product_location_restrictions: {
    title: "disponibile elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

    add_location_action: "aggiungi elemento",
    no_restriction: "elemento elemento",
    import: {
      title: "elemento profilo",
      subtitle: "seleziona elemento elemento elemento profilo.",
    },
    export: {
      title: "salva profilo",
      subtitle: "negozio elemento elemento elemento elemento.",
    },
    has_restriction_input: {
      title: "elemento elemento elemento",
      description:
        "Seleziona o inserisci le informazioni richieste.",
    },
    zip_pin_code: "elemento / elemento codice",
    no_country_selected_error:
      "Seleziona o inserisci le informazioni richieste.",
    tips: "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b><b></b><b></b>",
    need_save_message:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

    add_dialog: {
      title: "aggiungi elemento",
      message:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    save_profile_dialog: {
      title: "aggiungi elemento profilo",
      message:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      title_input: {
        title: "profilo titolo",
        placeholder: "Il nome di una categoria o il nome di un negozio...",
      },
    },
    load_profile_dialog: {
      title: "elemento elemento profilo",
      message:
        "Puoi caricare le posizioni selezionando una posizione precedentemente salvata impostata qui.",

      select_input: {
        title: "elemento profilo",
        placeholder: "seleziona elemento profilo...",
      },
    },
  },

  /** {@see NotificationTopBar} **/
  notification_top_bar: {
    free_charge: "🎊 Addebita {amount} e ricevi {amount_total} di credito.",
    charge_action: "Richiedere credito gratuito",
    claim_title: "Richiedi il tuo credito gratuito",
    claim_charge_caution:
      "Nota: non è possibile convertire valute tra i conti del tuo portafoglio. Pertanto, seleziona un account appropriato per la valuta cambiata nel tuo negozio.",
    account_input: "Conto deposito",
    account_msg: "L'addebito verrà applicato a questo account",
  },

  /** {@see BDashboardShopApplications} **/
  selldone_applications: {
    title: "Non perdere i tuoi ordini!",
    msg: "Gestisci la tua attività ovunque e in qualsiasi momento.",
    scan_qr_code: "elemento elemento elemento elemento telefono!",

    notification: {
      title: "Notifica",
      subtitle: "elemento nuovo ordini elemento.",
    },
    order: {
      title: "Ordini",
      subtitle: "Visualizza i tuoi ordini e gestiscili.",
    },
    product: {
      title: "Prodotti",
      subtitle: "inventario elemento elemento prodotto elemento.",
    },
  },

  /** {@see BPageShopSettingSeo**/
  shop_seo: {
    title: "Configurazione SEO",
    msg: "Passa rapidamente al marketing online potenziando i canali di acquisizione dei clienti organici.",
    auto: {
      title: "Motore SEO automatico",
      msg: "Offri un'esperienza mobile senza interruzioni per il pubblico e i motori di ricerca sul tuo sito web.",
    },

    amp: {
      title: "AMP",
      msg: "Generazione automatica accelerata di pagine mobili.",
    },
  },

  /** {@see BPageShopSettingEmail} **/
  shop_preferences: {
    order: {
      title: "Ordini",
      desc: "Se un cliente paga l'ordine, un'e-mail contenente le informazioni sull'ordine verrà inviata a questo indirizzo.",
    },
    return: {
      title: "Ritorno",
      desc: "Se il prodotto viene restituito dall'acquirente, verrà inviata questa email. L'invio di questa email dipende dal piano acquistato.",
    },
    pos: {
      title: "POS",
      desc: "Il rapporto sulle vendite POS verrà inviato a questa email.",
    },
    avocado: {
      title: "elemento",
      desc: "Invia report giornaliero degli ordini di avocado.",
    },
    accounting: {
      title: "Contabilità",
      desc: "Archivia rapporti finanziari e aggiornamenti.",
    },
    subscription: {
      title: "Abbonamenti",
      desc: "Accesso allo stato del piano acquistato di recente con notifiche di inizio e fine abbonamento.",
    },
    technical: {
      title: "Tecnico",
      desc: "Notifiche tecniche sullo stato del dominio e del servizio.",
    },
    report: {
      title: "Rapporti",
      desc: "Rapporti settimanali e mensili verranno inviati a questa e-mail",
    },
    review: {
      title: "Revisione",
      desc: "Se hai bisogno di confermare un processo in negozio, l'e-mail pertinente verrà inviata a questo indirizzo. Ad esempio per confermare l'invio di un'e-mail di marketing agli utenti del negozio.",
    },
    bulk: {
      title: "elemento ordine rapporto",
      desc: "Ricevi un'e-mail giornaliera con il dettaglio degli ordini per quel giorno.",
    },
  },

  /** {@see BPageShopSettingLanguages} **/
  shop_languages: {
    title: "Memorizza le lingue",
    sub_title: "Installa e attiva i pacchetti di traduzione automatica del negozio.",
    message:
      "Puoi installare fino a 10 Language Pack nel tuo negozio. Contattaci se hai bisogno di installare più pacchetti.",
  },

  /** {@see SInviteFriends} **/
  invite_friends: {
    title: "Racconta la tua attività al mondo!",
    msg: "Presenta Selldone ai tuoi amici. Riceveranno un voucher aziendale di $ 99 al momento dell'iscrizione e tu riceverai $ 15 in voucher di avvio una volta completata la prima transazione.",
    invite: {
      title: "Unisciti al sistema operativo Selldone business per ottenere un buono gratuito di $ 99.",
      description:
        "Ti invito a Selldone per avviare la tua attività online con uno strumento fantastico.",
      hashtags: "e-commerce, costruttore di siti web",
      quot: "Ho creato un negozio online di Selldone, ora puoi anche fare la tua attività.",
    },
  },

  /** {@see BPageShuttleShops} **/
  shops_list: {
    title: "I miei negozi",
    message:
      "Elenco dei miei negozi, negozi autorizzati e campioni.",

    sample: {
      title: "elemento negozio",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },

    add_new_store: "aggiungi nuovo negozio",
    i_have_a_deal: "elemento elemento elemento elemento",
    access: {
      title: "accesso elemento",
    },
  },

  /** {@see BTransportationServiceLabels} **/
  shipping: {
    warehouse_error:
      "Imposta prima il tuo magazzino! Questo indirizzo verrà utilizzato come origine della spedizione.",
    errors: {
      set_origin: "Imposta la tua mappa della posizione.",
      set_country: "Imposta il tuo paese.",
      set_address: "Imposta il tuo indirizzo.",
      set_zip: "Imposta il tuo codice postale.",
    },
    set_warehouse: "Set magazzino",
    pickup_location: "Posto di raccolta",
    refresh_rates: "Aggiorna tariffe",
    no_rate: "Nessuna tariffa...",
    view_messages: "Visualizza messaggi...",
    not_set_yet: "Non ancora impostato!",
    drop_orders_here: "Rilascia gli ordini qui...",
  },

  /** {@see BPageShopBlogsCategories} **/
  blog_category: {
    title: "Categorie del blog",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

    add_action: "Aggiungi nuova categoria",
    add_dialog: {
      title: "Nuova / Aggiorna categoria",
      force_edit: "Forza il percorso di modifica",
      force_edit_msg: "Cambia il nome della categoria e aggiorna tutti gli articoli.",
      star_msg: "Le categorie speciali hanno la priorità da mostrare nel blog.",
      star: "Fissato",
      delete_action: "Elimina categoria",
      add_action: "Aggiungi categoria",
      edit_action: "Modifica categoria",
    },
  },
  /** {@see BPageShopBlogsTimeline} **/
  blog_timeline: {
    title: "elemento elemento elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
  },

  /** {@see BPageShopPagesAboutUs} **/
  about_us: {
    title: "Pagina Chi siamo",
    subtitle:
      "Scrivi un articolo sulla tua attività da mostrare nella pagina Chi siamo. Questa pagina aiuterà il tuo pubblico a conoscere il tuo marchio e la tua missione.",
  },
  /** {@see BPageShopPagesTerms} **/
  terms: {
    title: "Pagina dei termini di servizio",
    subtitle:
      "Spiega ai tuoi clienti le condizioni di acquisto e di utilizzo dei tuoi servizi.",
  },
  /** {@see BPageShopPagesPrivacy} **/
  privacy: {
    title: "Pagina informativa sulla privacy",
    subtitle:
      "Un'informativa sulla privacy è una dichiarazione o un documento legale che rivela alcuni o tutti i modi in cui una parte raccoglie, utilizza, divulga e gestisce i dati di un cliente o cliente.",
  },
  /** {@see BPageShopPagesContactUs} **/
  contact_us: {
    title: "Pagina Contattaci",
    subtitle:
      "Scrivi le tue informazioni di contatto, indirizzo e numero di telefono da mostrare ai tuoi clienti nella pagina dei contatti.",
  },

  /** {@see BPageShopApplicationsMetaverse} **/
  metaverse: {
    title: "Ponte Metaverso",
    subtitle:
      "Selldone fornisce %100 servizi basati su API nello spazio commerciale. Gli sviluppatori di giochi, blockchain e metaverse possono utilizzare queste potenti API per connettere aziende, clienti e servizi nel futuro del mondo del lavoro, della vita e del commercio.",
    message: "Accesso anticipato per gli sviluppatori di giochi",
  },

  /** {@see BProcessCenterBulkExport} **/
  orders_bulk_export: {
    title: "Assistente agli ordini",
    subtitle:
      "Esporta e scarica etichette per l'elaborazione di ordini in blocco: ideale per gestire oltre 100 ordini al giorno.",

    timespan: {
      title: "Periodo di tempo",
      subtitle: "Scegli le date di inizio e fine per effettuare gli ordini.",
    },
    tasks: {
      title: "Uscita compiti",
      subtitle:
        "Scarica l'elenco delle attività per l'elaborazione degli ordini in blocco. Il risultato contiene solo ordini pagati e in contrassegno.",
      export_title: "Elenco delle attività",
    },
    labels: {
      title: "Etichette dei pacchi",
      subtitle:
        "Scarica l'elenco di tutte le etichette degli ordini nel periodo e nello stato selezionati. Il risultato contiene solo ordini pagati e in contrassegno.",
      export_title: "Etichette per scatole",
    },
  },

  /** {@see BPageShopMarketingFunnel} **/
  customers_funnel: {
    title: "Demografia dei clienti",
    subtitle:
      "Filtra ed esporta i dati dei tuoi clienti per prendere decisioni migliori per offrire più valore con meno marketing! Rispetta la privacy dei tuoi clienti e non inviare mai loro e-mail di massa! Non condividere mai le informazioni dei tuoi clienti con servizi di terze parti senza ottenere il permesso da ognuno di loro.",
  },

  /** {@see BPageAffiliatorDashboard} **/
  affiliate_pos: {
    title: "POS di affiliazione",
    open_pos_action: "POS di ordinazione veloce",
    description:
      "Questa opzione è adatta per gli amministratori di pagine Instagram e altri social network. Utilizza Affiliate POS per ricevere e aggiungere manualmente gli ordini dei clienti. I tuoi affiliati (o franchising) possono aggiungere nuovi ordini nel POS di affiliazione e caricare la ricevuta di deposito.",
  },

  /** {@see BPageShopSettingFlow} **/
  shop_configuration: {
    /** {@see BShopOptionsLoginMethods} **/
    login: {
      title: "Metodi di accesso",
      subtitle: "Personalizza il modo in cui gli utenti accedono al tuo negozio.",

      tips: "Selldone — <b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b>",
    },

    /** {@see BShopOptionsCheckout} **/
    checkout: {
      title: "Flusso di pagamento",
      subtitle:
        "Personalizza il percorso del cliente e il flusso di acquisto nel tuo e-commerce.",
      map: {
        title: "Carta geografica",
        subtitle:
          "Gli utenti devono selezionare il luogo di consegna sulla mappa (come Uber).",
        subtitle_no_map:
          "La distanza nel calcolo della spedizione considera zero se la posizione non esiste nell'indirizzo fornito dal cliente.",
      },
      mode: {
        title: "Punto di accesso dei clienti",
        default: {
          title: "APPENA POSSIBILE (predefinito)",
          msg: "Gli utenti effettuano il login il prima possibile. (Più conversione)",
        },
        on_checkout: {
          title: "Alla cassa",
          msg: "Forza gli utenti ad accedere alla fase di checkout.",
        },
        login_free: {
          title: "Accesso facoltativo",
          msg: "Accesso facoltativo dopo il pagamento dell'ordine..",
        },
      },

      express: {
        title: "Reindirizzamento dopo l'aggiunta al carrello",

        false: {
          title: "Modalità normale",
          msg: "Rimani sulla pagina e continua lo shopping dopo aver cliccato su aggiungi al carrello.",
        },
        true: {
          title: "Modalità rapida",
          msg: "Reindirizza il cliente alla pagina di pagamento dopo aver fatto clic su aggiungi al carrello.",
        },
      },

      shipping_address: {
        title: "Chiedi l'indirizzo di spedizione",
      },
    },

    /** {@see BShopOptionsCheckoutForm} **/
    checkout_form: {
      title: "elemento modulo",
      subtitle:
        "Personalizza i campi del modulo di pagamento per raccogliere le informazioni di cui hai bisogno dai tuoi clienti.",
    },
  },
  /** {@see CheckoutOptions} **/
  checkout_options: {
    default: {
      title: "Fisico e servizio (predefinito)",
      desc: "Chiedi al cliente di inserire un indirizzo nelle casse fisiche e di servizio.",
    },
    physical: {
      title: "Solo fisico",
      desc: "Chiedi al cliente di inserire un indirizzo solo nella cassa fisica.",
    },
    off: {
      title: "Mai",
      desc: "Non chiedere mai l'indirizzo di spedizione. ⚠ Utilizza questa opzione se prevedi di avere servizi con varianti selezionando il tipo fisico per i prodotti invece del tipo di servizio.",
    },
  },

  /** {@see BPageShopSettingBusinessModel} **/
  business_model: {
    title: "Configurazione del modello di business",
    subtitle:
      "Imposta il tuo modello di business e configureremo il tuo sistema operativo dietro le quinte.",
  },
  business_type: {
    title: "Tipi di merce",
    subtitle:
      "Imposta il tipo di prodotti che vuoi vendere nel tuo negozio. I tipi di prodotto in Selldone sono più di un semplice tipo di prodotti; è più sulla procedura di adempimento.",

    send_activation_request_to_support:
      "Invia una richiesta di attivazione in un ticket di supporto.",
    require_kyc: "Titolare dell'azienda KYC.",
    needs_enterprise_license: "Devi avere una licenza Enterprise.",
    marketplace_caution_message:
      "Imposta Marketplace poiché il tuo modello influisce profondamente sulla configurazione del tuo sistema operativo aziendale. Ad esempio, è necessario definire almeno un fornitore per ogni prodotto con prezzi e inventario indipendenti. I clienti non possono acquistare prodotti che non hanno un fornitore.",
  },

  /** {@see BusinessModelView} **/
  business_model_view: {
    normal: {
      title: "Negozio normale",
      desc: "Comunemente una PMI, un'azienda da casa o un dropshipper, che vende il proprio prodotto direttamente ai clienti o vende i prodotti dei grossisti come rivenditore.",
    },

    dropshipping: {
      title: "Scaricare la consegna",
      desc: "Non tenere nessun prodotto e nessun inventario: paghi a una terza parte, di solito un grossista (come Printify, Wholesale2B, ...) o un produttore, e loro soddisfano gli ordini dietro le quinte.",
    },

    wholesaler: {
      title: "Fornitore dropshipping",
      desc: "Comunemente un grossista o un produttore, che spedisce gli ordini direttamente al consumatore finale. Altri commercianti su Selldone possono spedire i tuoi prodotti nei loro negozi.",
    },
    marketplace: {
      title: "Mercato",
      desc: "I mercati online connettono acquirenti e venditori su una piattaforma proprietaria e centralizzata.",
    },

    franchise: {
      title: "Franchise/Affiliato",
      desc: "Un franchising è un metodo di distribuzione di prodotti o servizi che coinvolge un franchisor che stabilisce il tuo marchio (Franchising) o vende i tuoi prodotti con il suo marchio (Affiliato).",
    },
  },

  /** {@see BPageMarketplace} **/
  marketplace: {
    vendor_wallets: "Portafogli",
    pricing_models: "Prezzo",
    add_vendor: "Aggiungi fornitore",
    requests: "Richieste",
  },

  price_input_type: {
    title: "Tipo di input del prezzo",
    default: {
      title: "Predefinito",
      desc: "Seleziona un valore come quantità nel carrello.",
    },
    area: {
      title: "La zona",
      desc: "Immettere larghezza e lunghezza come input per calcolare la quantità.",
    },
    volume: {
      title: "volume",
      desc: "Immettere larghezza, lunghezza e altezza come input per calcolare la quantità.",
    },
    custom: {
      title: "Personalizzato (tramite modulo di input)",
      desc: "Non c'è bisogno di centinaia di varianti! Crea un modulo di calcolo dei costi personalizzato per prodotti altamente personalizzabili.",
    },
  },

  /** {@see BPageShuttleVendors} **/
  vendors_list: {
    title: "I miei fornitori",
    message:
      "Selldone — Elenco dei miei fornitori.",
  },

  vendor_page: {},

  /** {@see BDomainsList} **/
  domains: {
    message:
      "Collega più domini al tuo sistema operativo aziendale e gestiscili tutti in un unico posto. Puoi utilizzare la funzione domini multipli per creare domini dedicati per ogni parte del tuo sito web, come blog e community, oppure utilizzare domini diversi per i tuoi affiliati.",
  },

  /** {@see BNoteButton}   {@see BNoteDialog} **/
  notes: {
    add_action: "Aggiungi una nota per la tua squadra",
    notifications: {
      success_add: "La nota è stata aggiunta correttamente.",
      success_delete: "La nota è stata eliminata correttamente.",
    },
  },

  /** {@see BDashboardShopExternalServices} **/
  external_services: {
    title: "Servizi esterni",
    subtitle:
      "Monitora l'ultimo stato dei servizi esterni come SMS ed e-mail qui.",
  },

  /** {@see BPageShopSettingQuota**/
  shop_quota: {
    title: "Quota di utilizzo",
    sub_title:
      "Questo è l'elenco delle quote di utilizzo per il tuo negozio. Puoi aumentare questi limiti aggiornando la licenza del tuo negozio. Se superi i limiti, puoi richiederci quote giornaliere aggiuntive. Tutto l'utilizzo verrà ripristinato quotidianamente.",
  },

  /** {@see WidgetAppCard} **/
  app_card: {
    category: "Categoria",
    installs: "Installare",
    actives: "Attivo",
    uninstalls: "Disinstalla",
    app_code: "Codice dell'app",
    app_mode: "Modalità di applicazione",
  },

  product_status: {
    open: {
      name: "Attivo",
      title: "Attivo ╏ Vendite online e offline",
      description: "Questo prodotto sarà disponibile per gli ordini online.",
    },
    close: {
      name: "inattivo",
      title: "inattivo ╏ Solo vendite offline",
      description: "Questo prodotto non sarà disponibile per gli ordini online.",
    },
    pending: {
      name: "In attesa di",
      title: "In attesa di",
      description: "Richiede la revisione del mercato prima di essere pubblicato.",
    },
    rejected: {
      name: "Respinto",
      title: "Respinto",
      description: "Questo prodotto è stato rifiutato dal marketplace.",
    },
    unlisted: {
      name: "elemento",
      title: "elemento",
      description:
        "Questo prodotto non è elencato nel negozio, ma è accessibile tramite collegamento diretto.",
    },
  },

  /**
   * BDashboardShopFeedback
   */
  direct_feedback: {
    title: "elemento elemento elemento",
    message:
      "Selldone — Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    expand_action: "scrittura elemento elemento...",
    input_label: "elemento elemento",
    to: {
      ceo: "elemento elemento elemento",
      team: "elemento elemento team",
    },
    placeholder: {
      ceo: "Inserisci il valore...",
      team: "Per favore, cerca di essere gentile con loro.\nper esempio. Ho bisogno di avere...",
    },
  },

  /**
   * BInventoryFilter
   */
  inventory_filter: {
    placeholder: "seleziona filtro *.*",
  },
  /**
   * BVendorInput
   */
  vendor_input: {
    placeholder: "filtro venditore...",
  },

  /**
   * BShopProductsImportProcessing
   */
  product_import_processing: {
    title: "elemento elemento prodotti",
    message:
      "Stiamo importando prodotti e immagini, il cui completamento potrebbe richiedere del tempo.",
  },

  /**
   * BOrderInput
   */
  order_input: {
    message:
      "Seleziona o inserisci le informazioni richieste.",
  },

  /**
   * BPageConnectDashboard
   */
  shop_connect: {
    test: {
      title: "Impostazioni",
      subtitle: "elemento servizio rapporto",
      action: "elemento elemento",
      last_update: "elemento elemento elemento",
    },
    service_status: {
      title: "servizio stato",
      syncing_message: "elemento elemento elemento...",
      action: "elemento elemento",
      connect_status: "Connect stato",
      service_status: "servizio stato",
      auto_confirm_enable_msg: "elemento elemento ordini elemento abilitato.",
      auto_confirm_disable_msg:
        "La conferma automatica degli ordini non è abilitata.",
      shipping_enable_msg:
        "Il costo di spedizione verrà calcolato in base alle informazioni fornite al momento del pagamento.",
    },
    detail: {
      title: "Connect elemento",
      auto_confirm_order: "automatico conferma ordini",
      test_mode: "elemento modalità",
      status: {
        subtitle: "elemento informazioni elemento elemento stato.",
      },
      sync: {
        title: "elemento elemento",
        subtitle:
          "Dettagli di sincronizzazione interna. Queste informazioni vengono salvate al termine dell'epoca del processo di sincronizzazione.",
        no_data: "elemento elemento informazioni!",
      },
    },

    products: {
      title: "Prodotti",
      subtitle:
        "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione. {name}</b><b></b>",
      action: "elemento prodotti",
      syncing_message: "elemento elemento elemento...",
    },

    logs: {
      title: "elemento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },

    edit: {
      title: "aggiungi nuovo Connect",

      service: {
        title: "servizio",
        subtitle:
          "Seleziona la piattaforma di destinazione, il fornitore in dropshipping o il marketplace per connetterti.",
      },
      test: {
        false_title: "elemento elemento",
        false_desc: "elemento elemento disponibile prodotti, categorie, clienti.",
        true_title: "elemento (elemento elemento elemento)",
        true_desc:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      overwrite: {
        false_title: "elemento elemento elemento elemento elemento",
        false_desc: "Conserva i dettagli del prodotto e della categoria esistenti così come sono.",
        true_title: "elemento",
        true_desc:
          "aggiorna elemento prodotto, elemento, elemento categoria informazioni.",
      },
      migration_tips: "<b>Suggerimento: </b>Se vuoi testare la funzionalità, seleziona l’opzione <b>Limitata</b>. Se scegli “Sincronizza tutto”, importeremo tutti i dati dai servizi collegati " +
      "e scaricheremo le immagini correlate, riducendo lo spazio di archiviazione gratuito. Rimuovere molti prodotti, categorie e clienti potrebbe inoltre essere difficile!",
      add_action: "automatico collega elemento",
      order: {
        title: "elemento stato",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      enable: {
        label: "Connect stato",
        true_desc: "L'inventario e gli ordini verranno sincronizzati.",
      },
      confirm: {
        label: "automatico conferma ordini",
        false_desc: "elemento elemento conferma ordine elemento.",
        true_desc:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        tips: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },

      shipping: {
        label: "Spedizione",
        tips: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        false_title: "elemento",
        false_desc:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        true_title: "elemento spedizione",
        true_desc:
          "Utilizza l'API per il calcolo della tariffa di spedizione offerta da questo servizio.",
      },

      remove: {
        verify: "Verifico di rimuovere questa connessione.",
        action: "rimuovi collega",
      },
    },

    /**
     * BPageShopChannelConnect
     */
    list: {
      title: "Connect OS",
      subtitle:
        "Collega il tuo sistema operativo aziendale a servizi esterni e gestisci tutti i canali nello stesso posto.",
      action: "Connect nuovo servizi",
      empty_message:
        "Dimentica app e plugin per il dropshipping! Connect è il futuro della gestione degli ordini multipiattaforma.",
      auto_confirm: "automatico conferma",
      shipping: "Spedizione",
      syncing_now: "elemento elemento!",
      sync_not_started: "elemento elemento elemento elemento elemento!",
    },
  },

  /**
   * ConnectMode
   */
  connect_mode: {
    Migration: {
      title: "elemento",
      desc: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    Dropshipping: {
      title: "Scaricare la consegna",
      desc: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    Marketplace: {
      title: "Mercato",
      desc: "Basta sincronizzare l'inventario e ricevere gli ordini (i prodotti saranno collegati tramite SKU).",
    },
    Accounting: {
      title: "Contabilità",
      desc: "elemento ordini elemento elemento informazioni.",
    },
    Other: {
      title: "elemento",
      desc: "elemento servizi.",
    },
  },

  /**
   * BPageShopPagesLandings
   */
  shop_landings: {
    title: "Pagine di destinazione",
    add_new_action: "aggiungi nuovo pagina",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    empty_message: "Progetta pagine personalizzate trascinando e rilasciando...",
  },

  /**
   * BPageShopPermissionStaff
   */
  shop_staff: {
    list: {
      title: "elemento elemento",
      subtitle:
        "Utenti che avranno accesso alla dashboard e alle sezioni di gestione di questo negozio.",
    },
    pending: {
      title: "In attesa di",
      message: "mostra elemento elemento.",
    },
  },

  /**
   * BPageShopCommunityComments
   */
  community_comments: {
    title: "Commenti",
    subtitle: "Questo è un elenco dei commenti della community.",
    empty_msg: "Nessun commento è stato creato finora...",
  },

  /**
   * BPageShopCommunityCategories
   */
  community_categories: {
    title: "Categorie",
    subtitle: "Questo è l'elenco delle categorie della comunità.",
    new_category_action: "nuovo categoria",
    empty_msg: "Nessuna categoria è stata creata finora...",
    filter: {
      delete: {
        title: "Eliminato",
        description: "mostra elemento categorie.",
      },
    },
  },
  /**
   * BPageShopCommunityPosts
   */
  community_posts: {
    title: "elemento",
    subtitle: "Questo è l'elenco dei post della community.",
    filter: {
      deleted: {
        title: "Eliminato",
        description: "mostra elemento elemento.",
      },
      reported: {
        title: "elemento",
        description: "mostra elemento elemento.",
      },
    },
    empty_msg: "Nessun post è stato creato finora...",
    menu: {
      open_post: {
        title: "elemento elemento",
        subtitle: "Visualizza e modifica i post nella community.",
      },
      spam: {
        title: "rapporto & rimuovi elemento",
        subtitle: "Rimuovere in blocco i post e bannare l'utente.",
      },
      delete: {
        title: "elimina elemento",
        subtitle: "rimuovi elemento elemento.",
      },
    },
  },

  /**
   * {@see BGoogleTagManager}
   */
  channel_google: {
    gtag: {
      title: "elemento elemento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      tag_id: {
        label: "Google elemento elemento elemento",
      },
    },
    shopping: {
      title: "Google elemento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      tips: "Puoi utilizzare questo strumento per gestire facilmente e automaticamente gli annunci Google.",
      link_message: "Google prodotti elemento URL",
    },
    console: {
      title: "cerca elemento",
      subtitle: "Aggiungi un meta tag alla tua home page per la verifica di Google Search Console.",
      code: {
        label: "elemento elemento elemento",
        placeholder: "Da Google, ad es. viQg9mjdBj...",
      },
    },
    serp: {
      title: "Google elemento & elemento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    serp_content: {
      title: "Connect elemento Google cerca elemento",
      subtitle:
        "Selldone — Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      tips: {
        title:
          "Prima di collegare Selldone con Google Search Console, assicurati di quanto segue:",
        add_in_selldone: "Aggiungi, verifica e imposta come principale il tuo dominio personalizzato.",
        add_in_google: `<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione. {domain}</b><a href="https://search.google.com/search-console" target="_blank"><b></b></a>`,
      },
      action_custom_domain: "elemento dominio",
      action_connect_now: "Connettiti ora",
      action_remove_connection: "rimuovi elemento",
    },
  },

  /**
   * {@see BPageShopIncentivesCoupon}
   */
  cashback: {
    add_new: "aggiungi nuovo elemento",
    title: "elemento elemento",
    boosted: "elemento (2x)",
    min_purchase: "minimo elemento",
    only_first_order: "elemento elemento ordine",
    total_cashback: "elemento elemento",
    delete_alert: {
      title: "elimina elemento elemento",
      message: "Sei sicuro di voler eliminare questo programma di cashback?",
      action: "Sì, elimina ora",
    },
    notifications: {
      delete_success: "elemento elemento elemento elemento.",
    },
  },
  /**
   * {@see BPageCashback}
   */
  shop_cashback: {
    title: "elemento elemento",
    up_to: "fino a",
    menu: {
      back: "elemento elemento",
      dashboard: "Pannello",
      orders: "Ordini",
      edit: "Modificare",
    },
    /**
     * {@see BPageCashbackDashboard}
     */
    dashboard: {
      chart_amount_buy: {
        label: "Acquistare",
        y: "Importo dell'acquisto {currency}",
      },
      chart_amount_cashback: {
        label: "elemento",
        y: "elemento importo {currency}",
      },
      chart_used: {
        label: "Usato",
        y: "Volte",
      },
    },
    /**
     * {@see BPageCashbackOrders}
     */
    orders: {
      title: "elemento ordini",
      table: {
        amount_cashback: "elemento importo",
        payment_status: "Stato del pagamento",
        date: "Data",
      },
    },
  },

  /**
   * {@see BCashbackAdd}
   */
  cashback_edit: {
    config: {
      subtitle: "Imposta qui la percentuale di chasback, il limite e il suo stato.",
    },
    percent_input: {
      title: "elemento elemento",
      message: "Inserisci la percentuale di rimborso dall'1% al 20%.",
    },
    currency_input: {
      message: "Il programma di cashback sarà disponibile solo per questa valuta.",
    },
    limit_input: {
      title: "Limite",
      hint: "Inserisci l'importo massimo del cashback.",
      zero_message: "elemento 0 elemento elemento elemento.",
    },
    duration: {
      title: "elemento limite",
      subtitle: "Imposta la durata del programma di cashback. È facoltativo.",
    },
    start_input: {
      title: "elemento data",
      placeholder: "seleziona elemento data...",
    },
    end_input: {
      title: "elemento data",
      placeholder: "seleziona elemento data...",
    },
    design: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    title_input: {
      title: "Titolo",
    },
    description_input: {
      title: "Descrizione",
    },
    constraints: {
      subtitle: "Imposta i vincoli per il programma di cashback.",
    },
    min_purchase_input: {
      hint: "Inserisci l'importo minimo di acquisto per il programma cashback.",
      title: "minimo elemento",
    },
    only_first_buy_input: {
      false_desc: "Il programma cashback sarà disponibile per tutti gli ordini.",
      true_desc:
        "Il programma cashback sarà disponibile solo per il primo ordine.",
      true_title: "elemento elemento ordine",
      false_title: "elemento ordini",
    },
    qualify_input: {
      false_title: "elemento clienti",
      true_title: "elemento clienti",
      true_msg:
        "Il programma di cashback sarà disponibile solo per i clienti qualificati.",
    },
    club: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    cluster: {
      subtitle:
        "Associando un cluster al programma cashback, potrai gestirlo in modo più efficace.",
    },
    notifications: {
      add: "elemento elemento elemento elemento.",
      edit: "elemento elemento elemento elemento.",
    },
    enable_input: {
      true_msg: "Il programma cashback è attivo e i clienti possono utilizzarlo.",
      false_msg:
        "Il programma cashback è inattivo e i clienti non possono utilizzarlo.",
    },
    boosted_input: {
      false_title: "Normale",
      true_title: "elemento (2x elemento)",
      true_msg:
        "Il programma di cashback è in modalità boost e i clienti riceveranno un cashback doppio.",
      false_msg:
        "Il programma di cashback è in modalità normale e i clienti riceveranno un normale cashback.",
    },
  },

  /**
   * @see BOrderPaymentRowPayment
   */
  row_payment: {
    actions: {
      refund: {
        title: "rimborso pagamento",
        subtitle: "elemento elemento elemento rimborso elemento.",
      },
      delivery: {
        title: "conferma elemento elemento",
        subtitle: "Puoi confermare manualmente la consegna per il fornitore di servizi di pagamento.",
      },
    },
  },

  /**
   * @see BOrderPaymentActionsRefundDialog
   */
  payment_refund_dialog: {
    title: "rimborso pagamento",
    message:
      "Per motivi di sicurezza, solo gli ordini pagati negli ultimi 7 giorni hanno diritto al rimborso.",
    payment_amount: "Importo del pagamento",
    total_refund_amount: "elemento elemento importo",
    can_refund: "elemento rimborso",
    refund_amount: "rimborso importo",
    verify: {
      title: "elemento rimborso",
      description:
        "Confermo che l'importo del rimborso è corretto e voglio procedere.",
    },
    action: "rimborso elemento",
  },

  /**
   * @see BOrderPaymentActionsDeliveryDialog
   */
  payment_delivery_dialog: {
    title: "cliente elemento elemento",
    message:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    verify: {
      title: "elemento elemento",
      description:
        "Confermo che l'ordine è stato consegnato al cliente.",
    },
    action: "conferma elemento",
  },

  /**
   * @see BPageProductCrossSelling
   */
  product_cross_selling: {
    title: "elemento elemento",
    add_new_actions: "aggiungi nuovo prodotto",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    dialog: {
      edit_title: "modifica elemento elemento prodotto",
      add_title: "aggiungi nuovo elemento elemento prodotti",
      target: {
        title: "elemento prodotto",
        subtitle:
          "Scegli i prodotti che desideri promuovere come opzioni di cross-sell insieme a questo prodotto.",
        select_products: "seleziona prodotto(elemento)",
      },
      list: {
        title: "elemento prodotto",
        subtitle: "Questo prodotto è stato scelto per la promozione del cross-selling.",
        manage_product: "elemento prodotto",
      },
      discount: {
        title: "sconto & messaggio",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
        amount_input: {
          message:
            "Seleziona o inserisci le informazioni richieste.",
        },
        mismatch_type_warning:
          "Controlla le informazioni prima di continuare.",
        not_support_subscription_type_warning:
          "Controlla le informazioni prima di continuare.",
        message_input: {
          message:
            "Crea un titolo avvincente e allettante per catturare l'attenzione dei clienti.",
          placeholder:
            "Combina e risparmia: completa il tuo look con la nostra selezione selezionata con cura!",
        },
      },
      action: {
        title: "elemento",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
    },
  },
  /**
   * @see BProductVariantsBulkAdd
   */
  product_variants_bulk_add: {
    title: "aggiungi elemento elemento elemento",
    variants: {
      title: "elemento elemento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    values: {
      title: "elemento valori",
      subtitle: "Inserisci qui i possibili valori per ciascuna opzione di variante.",
      prevent_duplicates_tips:
        "<b>Nota:</b> Controlliamo automaticamente le varianti esistenti per evitare duplicati.",
    },
    inventory: {
      title: "elemento inventario",
      subtitle: "Imposta il conteggio dell'inventario iniziale per le nuove varianti.",
    },
    add_variants_action: "crea elemento",
  },

  /**
   * @see CrossSellActionType
   */
  CrossSellActionType: {
    AddToCart: {
      title: "Aggiungi al carrello",
      description:
        "Visualizza direttamente il pulsante Aggiungi al carrello. Tieni presente che questo non è applicabile ai prodotti in abbonamento.",
    },
    ViewProduct: {
      title: "Visualizza prodotto",
      description:
        "Visualizza un pulsante Visualizza altro che indirizza i clienti alla pagina del prodotto aprendo una nuova finestra.",
    },
  },

  /**
   * @see BProductFlow
   */

  product_flow: {
    title: "elemento elemento",
    subtitle: "Questo è il flusso di acquisto e il controllo dello stato del tuo prodotto.",

    /**
     * @see BProductFlowRowConnect
     */
    connect: {
      subtitle: "Questo prodotto è stato aggiunto tramite <b>{name}</b>.",
      enable_msg: "Questo bridge al servizio esterno è abilitato.",
      disable_msg: "Questo bridge al servizio esterno è disabilitato.",
      has_shipping_msg:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {name} {name}",
    },
    /**
     * @see BProductFlowRowHealth
     */
    health: {
      title: "prodotto elemento",
      available_in_stock_msg: "prodotto elemento disponibile elemento elemento.",
      out_of_stock_msg: "prodotto elemento elemento elemento elemento.",
      file_count_msg:
        "{files_count} file con un totale di {files_size} caricati per questo prodotto.",
      no_file_uploaded_msg: "Nessun file è stato ancora caricato.",
      no_image_uploaded_msg:
        "Carica un'immagine del prodotto per renderlo più attraente.",
    },
    /**
     * @see BProductFlowErrorsVendor
     */
    vendor_errors: {
      title: "elemento venditori",
      subtitle:
        "Controlla le informazioni prima di continuare.",
      manage_vendors: "Gestisci venditori",
    },

    /**
     * @see BProductFlowErrorsFile
     */
    file_errors: {
      title: "elemento file",
      subtitle:
        "Al momento non è stato caricato alcun file per questo prodotto. Per favore carica i file per procedere.",
      manage_files: "elemento file",
    },

    /**
     * @see BProductFlowRowPricing
     */
    pricing: {
      title: "Prezzo",
      no_product_price_msg: "Il prezzo del prodotto predefinito non è ancora impostato!",
      listing_pricing_msg: "inserzione prezzi:",
      has_valuation_msg: "prodotto elemento elemento.",
      subscription_pricing_msg:
        "elemento prodotto elemento {count} abbonamento prezzi elemento.",
      has_no_subscription_pricing_msg:
        "Questo prodotto non prevede piani tariffari di abbonamento.",
    },
    /**
     * @see BProductFlowErrorsSubscription
     */
    subscription_errors: {
      title: "elemento abbonamento prezzi elemento",
      subtitle:
        "Controlla le informazioni prima di continuare.",
      pricing_plans: "prezzi elemento",
    },

    /**
     * @see BProductFlowRowLocation
     */
    location: {
      title: "elemento elemento elemento ● {status}",
      status: {
        has_restriction: "disponibile elemento {count} elemento",
        no_restriction: "elemento elemento",
      },
      available_countries_msg:
        "Acquisti a livello globale limitati a {count} paesi. Questi paesi sono {countries}.",
      disable_for_all_countries_msg:
        "Lo shopping è disabilitato per tutti i paesi nel tuo negozio > impostazione delle località.",
      location_is_not_in_permitted_shop_locations_msg:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {country}",
      shop_locations: "negozio elemento",
      product_locations: "prodotto elemento",
    },

    /**
     * @see BProductFlowErrorsLocation
     */
    location_errors: {
      title: "disponibile elemento errore",
      no_location_error_subtitle:
        "Controlla le informazioni prima di continuare.",
      invalid_location_error_subtitle:
        "Controlla le informazioni prima di continuare.",

      manage_locations: "elemento elemento",
    },

    /**
     * @see BProductFlowRowTax
     */
    tax: {
      title: "abbonamento imposta",
      default_shop: "elemento negozio imposta",
      tax_profiles: "imposta profili",
      description: {
        subscription_tax_msg:
          "Possiamo applicare l'imposta solo nella fase di creazione del pagamento.",
        dedicated: "Dedicato",
        is_disabled: "elemento imposta profilo elemento disabilitato!",
        tax_is_based_on_location: "imposta: elemento elemento",
        shipping_tax_is_based_on_location: "spedizione: elemento elemento",
        included_in_price: "elemento elemento prezzo.",
      },
    },

    /**
     * @see BProductFlowRowVendor
     */
    vendor: {
      vendor_owner_msg: "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione. {vendor}</b>",
      has_vendors_msg: "Esistono {count} fornitori per questo prodotto.",
      no_vendor_msg:
        "Non hai assegnato un fornitore a questo prodotto, quindi i clienti non possono acquistarlo.",
      add_vendors: "aggiungi venditori",
    },
  },

  /**
   * @see BPageProductTemplate
   */
  product_template: {
    title: "prodotto pagina elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    edit_page: "modifica pagina",
    list_of_pages: "elenco elemento pagina",
  },
  /**
   * @see BPageProductEmbed
   */
  product_embed: {
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    card: {
      title: "elemento",
      description:
        "Genera codice HTML per aggiungere schede prodotto in altre piattaforme e pagine HTML.",
    },
    iframe: {
      title: "elemento",
      description:
        "Genera il codice iframe per visualizzare i dettagli completi del prodotto in una finestra incorporata.",
    },
  },

  /**
   * @see BPermissionStaffAddDialog
   */
  permission_staff_add: {
    title_new: "nuovo elemento",
    title_edit: "modifica elemento",

    staff: {
      title: "aggiungi elemento & accesso",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      go_to_roles: "elemento elemento ruoli",
    },
    access: {
      customization_tips:
        "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b>",
      simplify_tips:
        "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b>",
      multi_permission_tips:
        "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b>",
      view_data: "elemento dati",
      apply_changes: "Applica i cambiamenti",
    },

    inputs: {
      email: {
        placeholder: "Email",
        label: "utente Email indirizzo",
      },
      level: {
        label: "accesso elemento",
        placeholder: "seleziona elemento elemento...",
      },
    },

    actions: {
      add: "aggiungi elemento",
    },
    notifications: {
      add_success: {
        title: "accesso elemento",
        message: "Il nuovo accesso è stato aggiunto con successo.",
      },
      update_success: {
        title: "accesso elemento",
        message: "permessi elemento elemento elemento elemento.",
      },
    },
  },

  /**
   * @see BCategoryEngineEditor
   */
  category_engine_editor: {
    title: "elemento prodotti inserzione",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    aut_add_sub_categories_tips:
      "Puoi aggiungere automaticamente tutte le sottocategorie alla categoria corrente facendo clic sul pulsante in basso.",
    inputs: {
      categories: {
        label: "Categorie",
        messages: "Verranno visualizzati i prodotti di queste categorie.",
        placeholder: "seleziona categorie...",
      },
      tags: {
        label: "Tag prodotto",
        messages: "Verranno visualizzati i prodotti con questi tag.",
        placeholder: "Collega i tag qui e premi Invio. ex. nuova collezione",
      },
    },
    actions: {
      save_engine: "salva elemento",
      auto_add_subcategories: "automatico aggiungi elemento",
    },
  },

  /**
   * @see SProductsSortView
   */
  products_sort_view: {
    search_tips: {
      title: "cerca elemento",
      normal:
        "<b>Ricerca generale: </b>Cerca per titolo, MPN, SKU, marca o tag.",
      product:
        "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b><b class=\"text-green\"></b><i class=\"text-yellow\"></i>",
      quotes:
        "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b><b class=\"text-green\"></b><i class=\"text-yellow\"></i><b class=\"text-green\"></b>",
      tax: "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b><b class=\"text-green\"></b><i class=\"text-yellow\"></i>",
      new_products:
        "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b><b class=\"text-green\"></b><i class=\"text-yellow\"></i><b class=\"text-green\"></b><i class=\"text-yellow\"></i>",
    },
  },

  /**
   * @see LAugmentForm
   */
  augment_form: {
    title: "elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    add_caption: "aggiungi nuovo elemento",
    add_sub_caption: "aggiungi elemento elemento elemento.",
    add_dialog: {
      title: "seleziona elemento tipo",
      html: {
        title: "elemento & Html",
        subtitle: "Il valore dell'elemento può essere designato come testo o HTML.",
      },
      image: {
        title: "Immagine",
        subtitle: "elemento elemento carica elemento immagine.",
      },
    },
    help_dialog: {
      title: "elemento elemento elemento elemento elemento",
      how_it_works_tips:
        "Nelle pagine di destinazione hai la flessibilità di designare segnaposto dinamici sia per il testo che per le immagini. Questi segnaposto svolgono un ruolo significativo nella personalizzazione del contenuto in base al contesto.   La natura dinamica di questi segnaposto consente di popolarli con valori di aumento, che possono variare in base a diversi fattori. Ad esempio, i valori di aumento potrebbero essere diversi per ciascun prodotto o categoria. Il vero vantaggio di questa funzione entra in gioco quando hai una varietà di oggetti con attributi diversi. Puoi utilizzare in modo efficace questi segnaposto dinamici per personalizzare e migliorare la visualizzazione di ciascun articolo, creando così un'esperienza unica e interattiva sulle tue pagine di destinazione.",
      assign_tips:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      set_dynamic_image_tips:
        "Ora hai la possibilità di modificare l'URL dell'immagine e assegnargli un valore dinamico.",
      enter_values_tips:
        "Per ogni prodotto, hai la possibilità di assegnare coppie chiave-valore dedicate.",
      result_tips:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
  },

  /**
   * @see BLogisticProfileEditor
   */
  logistic_profile_editor: {
    languages: {
      title: "Multilingua",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      add_caption: "aggiungi nuovo elemento",
      no_more_language: "elemento elemento elemento!",
    },
    content: {
      title: "elemento",
      subtitle:
        "È possibile personalizzare il contenuto del profilo logistico in più lingue.",

      language_input: "elemento elemento elemento",
      delete_article: "elimina elemento",
      menu_tooltip: "automatico elemento / elimina elemento",
    },
    translate_to: "elemento elemento",
    notifications: {
      translate: {
        message: "elemento elemento elemento elemento.",
      },
      save_article: {
        message: "elemento elemento elemento elemento elemento.",
      },
      delete_article: {
        message: "elemento elemento elemento elemento elemento.",
      },
    },
    delete_dialog: {
      message: "Sei sicuro di eliminare questo articolo per sempre?",
      action: "Sì, elimina ora",
    },
  },

  /**
   * @see LogisticProfilePage_Products
   */
  logistic_profile_products: {
    title: "Prodotti",
    subtitle: "Elenco dei prodotti associati a questo profilo.",
  },
  /**
   * @see LogisticProfilePage_Setting
   */
  logistic_profile_setting: {
    title: "elemento informazioni",
    inputs: {
      name: {
        message:
          "Questo nome ti viene mostrato e non sarà rivelato al pubblico.",
      },
      accept_delete: {
        true_description:
          "Questa azione rimuoverà tutti gli articoli e i collegamenti ai profili.",
        true_title: "Verifico di rimuovere questa connessione.",
      },
    },
    actions: {
      remove: "rimuovi profilo & elemento",
    },
  },

  /**
   * @see BPageShopLogisticProfiles
   */
  shop_logistic_profiles: {
    title: "elemento profili",
    add_caption: "aggiungi nuovo profilo",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    add_dialog: {
      title: "crea nuovo elemento profilo",
      config: {
        title: "elemento informazioni",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      article: {
        title: "Articolo",
        subtitle:
          "Puoi aggiungere più lingue dopo aver creato questo profilo logistico.",
      },
      inputs: {
        name: {
          message:
            "Questo nome ti viene mostrato e non sarà rivelato al pubblico.",
          placeholder: "Inserisci un nome per il profilo...",
        },
      },
    },
  },

  /**
   * @see BPageShopLogisticIncludes
   */
  shop_logistic_includes: {
    title: "elemento elementi elemento",
    add_caption: "aggiungi nuovo elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    empty_list_msg: "elenco elemento elemento elementi...",
    notifications: {
      delete: {
        message: "elemento elemento elemento elemento elemento.",
      },
    },
    delete_dialog: {
      title: "elimina elemento elemento",
      message:
        "Sei sicuro di voler eliminare questo elemento?",
      action: "elemento, elimina elemento",
    },
    actions: {
      edit_linked_page: "modifica collegato pagina",
    },
  },

  /**
   * @see BIncludeItemAdd
   */
  include_item_add: {
    dialog_title_edit: "modifica elemento elemento",
    dialog_title_add: "Crea nuovo elemento incluso",

    title: "elemento elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    inputs: {
      title: {
        placeholder: "elemento titolo elemento elemento prodotto pagina...",
      },
      code: {
        placeholder: "elemento codice, elemento. mobile_cable_usb",
        hint: "Utilizza questo codice per semplificare il processo di ricerca per individuare gli elementi.",
      },
      description: {
        placeholder: "Una breve descrizione di questo articolo...",
        hint: "Seleziona o inserisci le informazioni richieste.",
      },
      image: {
        message: "elemento immagine elemento: 1MB",
      },
      path: {
        label: "pagina elemento",
      },
    },
    mode: {
      no_link: {
        title: "elemento link",
      },
      external_link: {
        title: "Link esterno",
        description: "Imposta un collegamento a un URL esterno.",
        tips: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      internal_link: {
        title: "elemento link",
        description:
          "Crea una pagina dinamica fornendo i dati di ottimizzazione forniti per questo elemento.",
        tips: "Selldone — Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
    },
    notifications: {
      add: {
        message: "L'articolo incluso è stato aggiunto correttamente.",
      },
      edit: {
        message: "L'articolo incluso è stato aggiornato con successo.",
      },
    },
  },
  /**
   * @see BPageShopLogisticReturns
   */
  shop_logistic_returns: {
    title: "elemento ordini",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
  },
  /**
   * @see OReferralFees
   */
  referral_fees: {
    title: "elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
  },
  /**
   * @see OReferralWallets
   */
  referral_wallets: {
    title: "Portafogli",
    subtitle:
      "Selldone — Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    no_commission_yet: "Non hai ancora ricevuto alcuna commissione.",
    no_wallet: "elemento portafoglio!",

    withdraw_dialog: {
      title: "elemento elemento elemento",

      need_bank_info_message: "Inserisci prima le tue informazioni bancarie.",

      to_wallet: {
        title: "elemento portafoglio",
        subtitle:
          "Selldone — Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      to_bank: {
        title: "elemento elemento",
        subtitle:
          "Selldone — Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      inputs: {
        verify_to_wallet: {
          true_description:
            "Voglio trasferire la mia commissione sul mio portafoglio Selldone.",
        },
        verify_to_bank: {
          true_description:
            "Verifico le mie informazioni bancarie e desidero trasferire la mia commissione sul mio conto bancario.",
        },
      },
      actions: {
        withdraw_to_wallet: "elemento elemento portafoglio",
        withdraw_to_bank: "elemento elemento elemento",
      },
    },
    notifications: {
      request_transfer_to_bank_success:
        "La tua richiesta è stata ricevuta con successo e la esamineremo.",
    },
  },

  /**
   * @see OPageMonetizeReferral
   */
  monetize_referral: {
    copy_box: {
      message: "Puoi aggiungere <b>?ref={code}</b> a qualsiasi URL venduto.",
    },
    intro: {
      title: "elemento elemento Selldone elemento elemento",
      message:
        "Selldone — Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      why_join_selldone_affiliate: "Perché è un'opportunità unica?",
      reasons: [
        "elemento elemento elemento!",
        "Copre tutte le spese di abbonamento e di transazione. Letteralmente ogni pagamento dell'utente su Selldone.",
        "Inviamo un voucher $99 gratuito a chiunque si registri utilizzando il tuo link.",
        "Quando il tuo livello verrà aggiornato, guadagnerai alla nuova tariffa da tutti gli utenti precedentemente segnalati.",
      ],
    },
  },

  /**
   * @see LMenuLeftAssets
   */
  l_menu_left_assets: {
    no_asset_uploaded: "elemento elemento elemento elemento.",
  },

  /**
   * @see LMenuTopHome
   */
  l_menu_top_home: {
    hot_keys: "elemento",
    click_to_view_all: "elemento elemento elemento elemento...",
    clone_tooltip: {
      title: "elemento elemento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      step_1:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      step_2: "Fai clic sull'elemento di cui desideri copiare lo stile.",
      step_3:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    show_side_menu_tooltip: {
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    sort_tooltip: {
      subtitle:
        "Abilita questa funzione per riorganizzare e organizzare facilmente le sezioni trascinandole.",
    },
    edit_mode_tooltip: {
      title: "modifica / elemento modalità",
      edit_mode_title: "modifica modalità",
      edit_mode_msg: "Verranno visualizzati tutti gli strumenti di modifica.",
      view_mode_title: "elemento modalità",
      view_mode_msg:
        "Visualizza la tua pagina come la vedrebbero gli utenti nascondendo strumenti di modifica aggiuntivi e aree di testo vuote.",
    },
    repository_tooltip: {
      title: "elemento elemento",
      subtitle:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    },
    live_view: {
      title: "live elemento",
      subtitle: "Visualizza gli aggiornamenti in tempo reale mentre modifichi la tua pagina.",
    },
    hotkeys_dialog: {
      title: "elemento elemento",
      augment_tips:
        "<b>Qui puoi gestire le informazioni e le impostazioni di questa sezione.</b><b></b><b></b><b></b><b></b><b></b>",
    },
    hotkeys: {
      ctrl_b: "Attiva/disattiva il grassetto per il testo selezionato | <b>Fammi diventare audace</b>",
      ctrl_i: "Attiva/disattiva il corsivo per il testo selezionato | <i>Metti in corsivo</i>",
      ctrl_l:
        "Attiva/disattiva la barratura per il testo selezionato | <s>Colpiscimi</s>",
      ctrl_u: "Attiva/disattiva la sottolineatura per il testo selezionato | <u>Sottolineami</u>",
      ctrl_1:
        "Diminuisci la dimensione del carattere del testo selezionato | <small>Rendimi piccolo</small>",
      ctrl_2: "Aumenta la dimensione del carattere del testo selezionato | <big>Fammi diventare grande</big>",
      ctrl_r: "Rimuovi tutta la formattazione dal testo selezionato | Pulisci tutti gli stili",
      ctrl_s: "salva elemento pagina",
      tab: "elemento elemento elemento modalità",
      ctrl_e: "Attiva o disattiva la modalità stile clone",
    },
  },

  /**
   * @see LPageEditorRepository
   */
  l_page_editor_repository: {
    title: "elemento & elemento",
    subtitle: "elemento elemento",
    add_dialog: {
      title: "aggiungi elemento elemento",
      configuration: {
        title: "Impostazioni",
        subtitle:
          "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      },
      image: {
        title: "Immagine",
        subtitle: "Immagine pubblica visualizzata nell'elenco.",
      },
      code: {
        title: "Codice",
        subtitle:
          "Puoi copiare e incollare il codice dell'elemento dalle sezioni sul lato sinistro nel generatore di pagine.",
      },
      inputs: {
        title: {
          label: "Titolo",
          message: "elemento elemento elemento elemento titolo.",
        },
        tags: {
          label: "Tag",
          message: "Utilizzato per cercare e classificare gli elementi.",
        },
        section: {
          message: "Copia la sezione dal generatore di pagine.",
        },
      },
    },
  },

  /**
   * @see BPageMarketplaceVendors
   */
  marketplace_vendors: {
    title: "venditori elenco",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    add_new_vendor_action: "aggiungi nuovo venditore",
    status_tooltip: {
      title: "venditore stato",
      ACCEPTED: "Il venditore ha accesso al proprio pannello.",
      REJECTED: "La richiesta del fornitore è stata respinta.",
      PENDING: "La richiesta è in attesa di una decisione da parte del venditore.",
    },
    number_of_products: "elemento elemento prodotti",
    invited: "elemento",
    no_pricing: "elemento prezzi",
    no_pricing_tooltip: {
      title: "elemento prezzi elemento",
      subtitle: "Imposta un modello di prezzo predefinito per il fornitore.",
    },
    updated_products_tooltip: {
      title: "Prodotti aggiornati nelle ultime 24 ore",
    },
    added_products_tooltip: {
      title: "Prodotti aggiunti nelle ultime 24 ore",
    },
    access_tooltip: {
      title: "elemento accesso",
      subtitle:
        "Il venditore ha accesso al proprio pannello. Puoi modificarlo nella scheda Fornitore > Accesso.",
    },
    reject_by_user_tooltip: {
      title: "elemento elemento utente",
      subtitle:
        "L'utente ha rifiutato la richiesta di diventare fornitore e di accedere a questo fornitore.",
    },
    download_all_vendors: "scarica elemento venditori",
    bulk_import: "elemento importa (elemento)",
  },

  /**
   * @see BShopLicenseNeedUpdateOverlay
   */
  shop_license_need_update_overlay: {
    title: "licenza elemento richiesto!",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
  },

  /**
   * {@see BOrderChatBox}
   */
  b_order_chat_box: {
    title: "elemento elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    send_update_email_action: "elemento aggiorna Email",
    add_template_action: "aggiungi messaggio elemento",

    notifications: {
      add_chat_success_message: "messaggio elemento elemento elemento elemento.",
    },

    send_update_email: {
      title: "ordine aggiorna Email",
      need_set_service_alert: {
        message:
          "Imposta il tuo fornitore di servizi e-mail per consentire l'invio dell'e-mail.",
        action: "elemento elemento impostazioni",
      },
      send_action: "elemento aggiorna Email",

      notifications: {
        send_success_message: "Email elemento elemento elemento elemento.",
      },
    },
    add_template: {
      edit_title: "modifica messaggio elemento",
      add_title: "aggiungi messaggio elemento",
      message:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

      save_action: "salva elemento",
      add_action: "aggiungi elemento",

      notifications: {
        save_success_message: "elemento elemento elemento elemento elemento.",
      },

      inputs: {
        title: {
          label: "elemento titolo",
          placeholder: "scrittura elemento elemento titolo...",
        },
        body: {
          label: "elemento messaggio",
          placeholder: "scrittura elemento messaggio elemento...",
          messages:
            "Puoi impostare valori dinamici con {order_id} e {buyer_name}.",
        },
      },
    },
  },

  /**
   * {@see BOrderShare}
   */
  b_order_share: {
    title: "ordine link",
    subtitle: "Puoi condividere il collegamento dell'ordine con il cliente.",
    guest_checkout_message:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    authentication: "elemento",
    guest: "elemento",
    click_to_create: "elemento elemento crea...",
    valid_for_30_days: "elemento elemento 30 elemento",
    notifications: {
      secure_link_created: "Il collegamento sicuro è stato creato correttamente.",
    },
  },

  /**
   * {@see BPageShopCrmReviews}
   */
  shop_reviews: {
    title: "elemento elemento",
    add_source_action: "aggiungi elemento elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
  },

  /**
   * {@see BPageShopLogisticPropertySets}
   */
  shop_logistic_property_set: {
    add_caption: "aggiungi nuovo elemento elemento",
    title: "Set di proprietà",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
  },

  /**
   * {@see BProductProfilePropertySet}
   */
  product_property_set: {
    profile: {
      title: "elemento elemento - elemento elemento",
      subtitle:
        "Puoi personalizzare i nomi delle varianti per questo prodotto, sostituendo quelli predefiniti.",
    },

    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    select_property_set: "seleziona elemento elemento",
    add_property_set: "aggiungi elemento elemento",
  },

  /** {@see BPageShopLogisticInventory} **/
  transportation_boxes: {
    title: "elemento",
    add_action: "aggiungi elemento",
    subtitle:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
    empty: "Ancora nessuna scatola. Fare clic su \"Aggiungi casella\".",
    edit: "modifica elemento",
    new: "nuovo elemento",
    default_weight: "elemento elemento",
    updated: "elemento elemento.",
    created: "elemento elemento.",
    deleted: "elemento elemento.",
  },

  /** {@see BBoxInput} **/
  transportation_boxes_input: {
    select_box: "seleziona elemento elemento",
    define_package: "elemento elemento elemento",
    define_package_hint: "Crea o modifica le dimensioni dei pacchetti predefinite",
  },























  /** {@see BPageShopListing} **/
  listing:{
    name:"inserzione",
    message:"Qui puoi gestire le informazioni e le impostazioni di questa sezione."
  },

  shop_listing: {
    name: "inserzione",
    message:
      "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

    items: {
      title: "Elementi",
      sub_title:
        "Crea, modifica e gestisci gli elementi dell'elenco. Controlla lo stato, i prezzi, le informazioni di contatto e i media.",

      empty_title: "elemento elementi elemento",
      empty_subtitle:
        "Crea il tuo primo elemento dell'elenco per iniziare a costruire la tua directory.",

      add_title: "aggiungi elemento",
      edit_title: "modifica elemento",

      price_to: "prezzo elemento",
      price_unit: "prezzo elemento",
      is_featured: "elemento",

      meta_json: "Meta JSON",
      links_json: "link JSON",
      opening_hours_json: "elemento elemento JSON",

      delete_title: "elimina elemento",
      delete_message: "Sei sicuro di voler eliminare questo elemento?",
      delete_success: "Elemento eliminato correttamente.",
      restore_success: "elemento elemento elemento.",

      opening_hours:"elemento elemento",
      form_fields:"modulo elemento",

      company: "Azienda",
      badges: "Badge",

    },

    categories: {
      title: "Categorie",
      sub_title:
        "Organizza la tua directory con categorie e sottocategorie. Ciò migliora la navigazione e il filtraggio.",

      empty_title: "elemento categorie elemento",
      empty_subtitle:
        "Crea categorie per strutturare la tua inserzione e migliorare la navigazione.",

      add_title: "Aggiungi categoria",
      edit_title: "Modifica categoria",

      parent_filter: "filtro elemento elemento",
      parent: "Categoria genitore",

      price_format: "prezzo elemento",
      icon: "Icona",
      design_id: "elemento elemento",

      delete_title: "Elimina categoria",
      delete_message: "Sei sicuro di voler eliminare questa categoria?",
      delete_success: "categoria elemento elemento.",
      form_schema: "categoria modulo elemento",
    },

    options: {
      submission_title: "elemento",
      submission_enabled: "elemento elemento",

      moderation_title: "elemento",
      moderation_mode: "elemento modalità",
      require_first_approved_before_more: "elemento elemento elemento elemento elemento",

      limits_title: "Limiti",
      max_pending_per_user: "elemento elemento elemento utente",
      max_items_per_user: "elemento elementi elemento utente",
      limits_hint: "limiti elemento",

      templates_title: "elemento",
      card_template: "carta elemento",
      details_template: "dettagli elemento",

      form_schema_title: "modulo elemento",
      settings_title: "elemento impostazioni"
    },

    supervision: {
      title: "elemento",
      sub_title:
        "Esamina gli elementi inviati e decidi cosa succede dopo: approvare, pubblicare, rifiutare, archiviare o ripristinare lo stato in sospeso.",

      empty_title: "elemento elementi elemento elemento",
      empty_subtitle:
        "Quando gli utenti inviano nuovi elementi, verranno visualizzati qui per la moderazione.",

      review_title: "elemento elemento",
      approve_publish: "elemento & elemento",

      submitted_at: "elemento",
      quick_actions: "elemento elemento",

      open_review: "elemento elemento",
      reset_to_pending: "elemento elemento elemento",
      items_title: "Elementi",

    },

    moderation: {
      approve_success: "elemento elemento elemento.",
      publish_success: "elemento elemento elemento.",
      unpublish_success: "elemento elemento elemento.",
      archive_success: "elemento elemento elemento.",
      reject_success: "elemento elemento elemento.",
      penalty_success: "elemento elemento elemento.",

      reject_title: "elemento elemento",
      reject_reason: "elemento elemento",

      penalty: "elemento",
      penalty_title: "elemento",
      penalty_points: "elemento elemento",
      penalty_note: "elemento nota"
    },

    media: {
      upload_images: "carica immagini",
      url_type: "Tipo",
      url: "URL",
      is_main: "elemento elemento principale"
    },






    /** {@see BShopListingDesignsList, BShopListingDesignUpsert} **/
    designs: {
      title: "elemento",
      sub_title:
        "Crea più set di design (modelli di carte + dettagli) e assegnali a categorie. Le categorie possono utilizzare design diversi.",

      empty_title: "elemento elemento elemento",
      empty_subtitle:
        "Aggiungi il tuo primo set di design per iniziare a personalizzare l'aspetto delle categorie.",

      add_title: "aggiungi elemento",
      edit_title: "modifica elemento",

      card_template: "carta elemento",
      details_template: "dettagli elemento",

      notifications: {
        add_success: "elemento elemento elemento.",
        edit_success: "elemento elemento elemento.",
        delete_success: "elemento elemento elemento.",
      },

      delete_title: "elimina elemento",
      delete_message:
        "Eliminare questo disegno? Le categorie che lo utilizzano perderanno automaticamente design_id.",
    },





    badges: {
      title: "Badge",
      sub_title:
        "Crea e gestisci i badge della vetrina. È possibile assegnare badge agli elementi dell'elenco per evidenziare attributi speciali.",

      empty_title: "elemento elemento elemento",
      empty_subtitle:
        "Aggiungi il tuo primo badge per iniziare a evidenziare gli elementi dell'elenco.",

      add_title: "aggiungi elemento",
      edit_title: "modifica elemento",

      notifications: {
        add_success: "elemento elemento elemento.",
        edit_success: "elemento elemento elemento.",
        delete_success: "elemento elemento elemento.",
      },

      delete_title: "elimina elemento",
      delete_message: "Sei sicuro di voler eliminare questo badge?",
    },

    companies: {
      title: "Aziende",
      sub_title:
        "Creare e gestire aziende. Ciascun elemento dell'elenco può facoltativamente essere collegato a un'azienda.",

      empty_title: "elemento elemento elemento",
      empty_subtitle:
        "Aggiungi la tua prima azienda per collegarla agli elementi dell'elenco.",

      add_title: "aggiungi azienda",
      edit_title: "Modifica azienda",

      notifications: {
        add_success: "azienda elemento elemento.",
        edit_success: "azienda elemento elemento.",
        delete_success: "azienda elemento elemento.",
      },

      delete_title: "elimina azienda",
      delete_message:
        "Eliminare questa azienda? Gli articoli che lo utilizzano perderanno automaticamente il collegamento aziendale.",
    },



    messages: {
      title: "messaggio",
      sub_title: "Gestisci i messaggi inviati dagli utenti dai profili dell'elenco.",
      empty_title: "elemento messaggio",
      empty_subtitle: "I messaggi inviati dagli utenti verranno visualizzati qui.",

      sender: "elemento",
      item: "elemento",
      has_reply: "elemento",
      has_reply_yes: "elemento elemento",
      has_reply_no: "elemento elemento",

      dialog_title: "Messaggio",
      owner_reply: "elemento elemento",
      reply: "elemento",
      reply_hint: "Scrivi una risposta all'utente. Puoi anche contrassegnare il messaggio come letto/spam dalle azioni.",

      mark_read: "elemento elemento lettura",
      mark_unread: "elemento elemento elemento",
      archive: "elemento",
      unarchive: "elemento",
      mark_spam: "elemento elemento elemento",
      mark_not_spam: "elemento elemento",

      delete_confirm: "elimina elemento messaggio?",
    },

    enable: {
      title: "inserzione",
      subtitle: "Selldone — Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      true_description: "inserzione elemento abilitato. clienti elemento elemento inserzione pagina.",
      false_description: "L'elenco è disabilitato. Le pagine dell'elenco e gli invii sono bloccati.",
      open_listing: "elemento inserzione",
      note: "Potrai successivamente configurare la moderazione, i limiti, i moduli e il design nelle Impostazioni dell'elenco.",
      vendor_prereq_text:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      vendor_prereq_button: "elemento marketplace azienda elemento",

      vendor_access_text:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      vendor_access_button: "elemento inserzione elemento venditori",

      more_options_text:
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      more_options_button: "elemento elemento inserzione impostazioni",

      updated: "inserzione elemento.",
      update_failed: "elemento elemento aggiorna inserzione.",
    },


    search: {
      title: "cerca impostazioni",
      subtitle: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",

      location_title: "elemento cerca",
      location_subtitle: "Consenti ai clienti di scegliere una posizione e trovare risultati nelle vicinanze entro un raggio configurabile.",
      location_enabled_true: "Il filtro della posizione è abilitato. I clienti possono effettuare ricerche per distanza.",
      location_enabled_false: "Il filtro della posizione è disabilitato. I risultati non verranno filtrati in base alla distanza.",

      radius_default: "elemento elemento (elemento)",
      radius_default_hint: "Utilizzato quando il cliente seleziona una posizione ma non sceglie un raggio.",
      radius_max: "massimo elemento (elemento)",
      radius_max_hint: "Il raggio della vetrina verrà limitato a questo valore.",
      radius_options: "elemento elemento (elemento)",
      radius_options_hint: "Questi valori possono essere visualizzati come opzioni rapide nell'interfaccia utente della vetrina.",

      filters_title: "cerca filtro",
      filters_subtitle: "Qui puoi gestire le informazioni e le impostazioni di questa sezione.",
      no_filters: "elemento filtro elemento elemento.",
      auto_generate: "elemento elemento",

      filter_field: "elemento elemento",
      filter_label: "Etichetta",
      filter_type: "Tipo",
      filter_options: "elemento",
      filter_options_hint: "Per i filtri selezionati, le opzioni possono essere manuali o generate.",
      multiple: "elemento",
      single: "elemento",
      kv_mode: "elemento/valore modalità",

      requires_listing_active: "L'elenco non è attivo. Abilita prima l'elenco per utilizzarlo nella vetrina.",


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
        "Pagamento per le vendite soddisfatte",
        "Esborso della commissione del fornitore.",
        "Transazione completata con successo.",
        "Rimessa per vendite recenti.",
        "Trasferimento riuscito per i servizi del fornitore.",
      ],
      /**
       * Reverse fund
       */
      reverse_fund_reason: [
        "Restituzione dei fondi: trasferimento dalla banca al portafoglio del venditore.",
        "Ricarica portafoglio fornitore: storno di fondi dal conto bancario.",
        "Transazione inversa: trasferimento di fondi dalla banca al portafoglio del fornitore.",
        "Rimborso: storno del deposito bancario sul portafoglio del venditore.",
        "Storno fondi: rifornimento del portafoglio del venditore dalla banca.",
      ],
    },

    /**
     * Email Marketing
     */
    shop_email: {
      name: [
        "Fine settimana super risparmio",
        "Svelate le esclusive offerte privilegiate",
        "Il tuo accesso VIP agli sconti Premium",
        "Stravaganza dei saldi stagionali",
        "Sblocca il tuo paradiso dello shopping",
        "Il carnevale del grande compratore",
        "Shopping sfrenato primaverile",
        "Offerte autunnali a cui non puoi resistere",
        "Meraviglie invernali: offerte speciali per le giornate fredde",
        "Conto alla rovescia per le liquidazioni di fine estate",
        "Black Friday Bonanza: accesso anticipato",
        "Ciao vacanze: la tua guida ai regali e altro ancora",
        "Fresche scoperte: nuovi arrivi solo per te",
        "Fedeltà premiata: sconti esclusivi all'interno",
      ],
      subject: [
        "⏰ Offerta a tempo limitato! Prendi i tuoi preferiti adesso",
        "🌼 Nuova stagione, nuovi stili: esplora la nostra ultima collezione",
        "👑 Vendita VIP esclusiva solo per te",
        "💃 Fatti notare con i nostri nuovi arrivi",
        "🔚 Ultima occasione per usufruire dello sconto del 20% su tutto",
        "🎁 Un regalo per te: credito di $ 10 all'interno!",
        "☀️ Preparati per l'estate con le nostre fantastiche offerte",
        "🛍️ Migliora il tuo guardaroba: te lo meriti",
        "👀 Anteprima: nuovi prodotti in arrivo!",
        "🎂 Buon Compleanno! Il tuo regalo speciale ti aspetta",
        "🖤 Siete pronti per le offerte del Black Friday?",
        "🎯 Le migliori scelte solo per te: esperienza di acquisto personalizzata",
        "🍹 È ora di concedersi qualcosa - Saldi flash del fine settimana!",
        "🧹 Saldi di fine stagione: tutto deve andare!",
        "🚀 Te lo sei guadagnato! Spedizione gratuita sul tuo prossimo ordine",
        "📢 Da non perdere: gli articoli della tua lista dei desideri sono ora in vendita",
        "🏡 Porta gioia a casa tua con la nostra collezione di decorazioni per la casa",
        "🎉 Una Sorpresa Solo per Te! Scarta il tuo sconto misterioso",
      ],
    },

    /**
     * Discount code
     */
    discount_code: {
      code: [
        "BENVENUTO10",
        "ESTATE20",
        "SALDI VIP30",
        "COMPLEANNO15",
        "VENERDÌ NERO",
        "CYBERMONDAY",
        "SPEDIZIONE GRATUITA",
        "VENDITA FLASH",
        "LIQUIDAZIONE",
        "EARLYBIRD",
        "STUDENTE10",
        "INVERNO25",
        "PRIMAVERA15",
        "AUTUNNO20",
        "PIÙ VENDUTO10",
        "VACANZA30",
        "VALENTINO20",
        "FESTA DELLA MAMMA",
        "FESTA DEL PAPÀ",
        "FINE DELL'ANNO",
      ],
      title: [
        "Vendita lampo: 20% di sconto!",
        "Sconto per l'accesso anticipato VIP",
        "Offerta del fine settimana: risparmia adesso!",
        "Goditi uno sconto del 15% oggi",
        "Saldi estivi: sconto extra del 10%.",
        "Vendita di liquidazione! Risparmia alla grande",
        "Offerta Speciale: Spedizione Gratuita",
        "2 per 1: solo oggi!",
        "Speciale vacanze: sconto del 25%.",
        "Sconto esclusivo del 30%.",
        "Sorpresa! Sconto extra del 20%.",
        "Risparmio stagionale all'interno",
        "Follia infrasettimanale: 10% di sconto",
        "Termina presto: 15% di sconto su tutto",
        "Famiglia e amici: sconto del 20%.",
        "Grandi risparmi questo fine settimana",
        "Venerdì nero: sconto del 40%.",
        "Sconto in anteprima: 30% di sconto",
      ],
      description: [
        "Richiedi la tua offerta speciale! Solo per un tempo limitato.",
        "Fretta! Risparmi esclusivi ti aspettano nel tuo carrello.",
        "Grandi risparmi a portata di clic!",
        "Approfitta di questa offerta prima che scada.",
        "Sconto speciale in attesa! Da non perdere.",
        "Aumenta il tuo spirito di shopping con la nostra offerta!",
        "Il tuo prossimo ordine potrebbe essere inferiore a quanto pensi!",
        "È il momento perfetto per afferrare quell'oggetto che volevi.",
        "Un piccolo pensiero per rendere la tua giornata più luminosa.",
        "Pronto per salvare? Uno sconto a sorpresa ti aspetta!",
        "Poiché sei speciale, ecco un accordo speciale.",
        "Hai messo gli occhi su qualcosa? Ecco una spintarella!",
        "Non c'è momento migliore del presente da salvare.",
        "Non perdere questo affare! È troppo bello per lasciarselo sfuggire.",
        "Grandi notizie! I tuoi acquisti sono appena diventati più economici.",
        "Affrettati, il tuo sconto esclusivo scade presto!",
        "Ecco un piccolo ringraziamento per la vostra fedeltà.",
      ],
    },
    /**
     * Coupon
     */
    coupon: {
      title: [
        "Risparmio scatenato",
        "Sblocca lo sconto",
        "Super risparmio",
        "Offerta esclusiva",
        "Bonus Risparmio",
        "Sconto VIP",
        "Offerta speciale",
        "Risparmio extra",
        "Avviso di sconto",
        "Felicità del bilancio",
        "Delizia economica",
        "Valore Bonanza",
        "Taglio del prezzo",
        "Buon risparmio",
        "Risparmia di più, acquista di più",
        "Affare lampo",
        "Taglia d'affare",
        "risparmio immediato",
        "Affare del giorno",
        "Ruba stagionale",
      ],
      description: [
        "Goditi una dolce offerta con noi! Risparmia sul tuo prossimo acquisto.",
        "Apprezziamo i nostri clienti: approfitta di questa offerta esclusiva.",
        "Ottieni di più da ciò che ami pagando di meno. Sconto su di noi!",
        "Pronto per salvare? Un'offerta esclusiva ti aspetta!",
        "Perché sei speciale! Goditi uno sconto sul tuo prossimo ordine.",
        "Concediti uno shopping sfrenato e risparmia!",
        "Preparati a fare acquisti fino allo sfinimento e risparmia!",
        "Festeggia la stagione con uno sconto speciale.",
        "Ringraziamo i nostri affezionati clienti con uno sconto esclusivo.",
        "Sblocca incredibili risparmi sul tuo prossimo acquisto.",
        "Dai un'occhiata ai tuoi risparmi esclusivi.",
        "Scopri da noi il tuo sconto a sorpresa!",
        "Migliora la tua esperienza di acquisto con la nostra offerta esclusiva.",
        "Fai ripartire i tuoi risparmi con la nostra offerta speciale.",
        "Concedetevi qualcosa in più: uno sconto speciale.",
        "La tua prossima avventura di shopping è appena diventata più conveniente!",
        "Perché fare shopping è più divertente con lo sconto.",
      ],
    },

    /**
     * Offer
     */
    offer: {
      title: [
        "Raggruppa e risparmia alla grande!",
        "Acquista di più, risparmia di più!",
        "Offerte intelligenti per acquirenti intelligenti",
        "Avviso sconti! Risparmio in bundle",
        "Offerta combinata: di più con meno",
        "Risparmi esclusivi sui pacchetti",
        "Ottieni di più per i tuoi soldi!",
        "Risparmia quando fai il pacchetto",
        "Offerte speciali sulle combo",
        "Enormi risparmi in negozio!",
        "Pacchetti dal miglior rapporto qualità-prezzo",
        "Offerte pacchetto a tempo limitato",
        "Grandi sconti sulle combo",
        "Risparmi intelligenti su articoli selezionati",
        "Offerte imbattibili sui pacchetti",
        "Disponibili sconti per acquisti multipli",
        "Raddoppia per meno adesso",
        "Acquisti in blocco = grandi risparmi",
      ],

      description: [
        "Ottieni grandi risparmi raggruppando prodotti selezionati. Affrettati, offerta a tempo limitato!",
        "Ti aspettano offerte intelligenti! Risparmia di più acquistando insieme i nostri articoli evidenziati.",
        "Scopri il modo intelligente per risparmiare! Raggruppa i tuoi preferiti e osserva il calo dei prezzi.",
        "Goditi sconti esclusivi acquistando articoli selezionati in combo. Agisci adesso!",
        "Acquista di più, risparmia di più! Sconti imbattibili sui nostri pacchetti di prodotti speciali.",
        "Acquista in modo intelligente con le nostre offerte speciali. Prezzi scontati su pacchetti di prodotti selezionati.",
        "Ottieni di più spendendo meno! Sconti incredibili quando acquisti i nostri pacchetti selezionati.",
        "Risparmia alla grande quando raccogli! Offerte esclusive su articoli selezionati per un periodo limitato.",
        "Combina e risparmia! Sconti esclusivi quando acquisti insieme i nostri prodotti selezionati.",
        "Più acquisti, più risparmi! Diventa intelligente con i nostri pacchetti speciali.",
      ],
    },

    /**
     * Gift card type
     */
    gift_card_type: {
      title: [
        "Trattare voi stessi!",
        "Solo per te!",
        "Felice shopping!",
        "Divertitevi con noi!",
        "Concedetevi un po'",
        "Perché sei speciale",
        "Una piccola sorpresa",
        "Rendi la tua giornata migliore",
        "Ecco a te",
        "Diffondi la gioia",
        "Un dono d'amore",
        "Acquista con gioia",
        "Un segno di ringraziamento",
        "È ora di spendere",
        "Assapora il momento",
        "Trova i tuoi preferiti",
        "La scelta è tua",
        "Esprimiti",
        "Scopri la magia",
        "Scatena il tuo stile",
      ],
    },

    /**
     * Refund vendor order
     */
    vendor_refund_order: {
      note: [
        "I fondi sono stati detratti dal tuo portafoglio virtuale e restituiti al portafoglio del marketplace.",
        "È stato emesso un rimborso, riducendo il saldo del tuo portafoglio virtuale.",
        "Rimborso completato. Il portafoglio del mercato è stato rifornito dal tuo portafoglio virtuale.",
        "Sul tuo portafoglio virtuale è stato addebitato un recente rimborso sul portafoglio del marketplace.",
        "I fondi del tuo portafoglio virtuale sono stati modificati a causa di un recente rimborso.",
        "È stato effettuato un rimborso, detraendo l'importo dal tuo portafoglio virtuale.",
        "Il saldo del tuo portafoglio virtuale è stato ridotto a causa di un rimborso sul portafoglio del marketplace.",
        "È stata effettuata una transazione di rimborso, spostando i fondi dal tuo portafoglio virtuale al mercato.",
      ],
    },

    /**
     * Product
     */
    product: {
      warranty: [
        "Garanzia Oro di 24 mesi",
        "Protezione platino per due anni",
        "Garanzia diamante per 36 mesi",
        "Scudo d'argento: garanzia di un anno",
        "Garanzia Elite di 2 anni",
        "Protezione Premium per 24 mesi",
        "Backup Bronzo: Garanzia di un anno",
        "Garanzia di operatività definitiva di 3 anni",
        "Promessa di servizio sicuro per 24 mesi",
        "Protezione della tranquillità di 36 mesi",
      ],
      pros_name: [
        "Efficienza migliorata",
        "Soluzione conveniente",
        "Qualità assicurata",
        "Facile da usare",
        "Risparmia tempo",
        "Affidabilità garantita",
        "Utilizzo versatile",
        "Tecnologia all'avanguardia",
        "Ecologico",
        "Prestazioni eccezionali",
      ],

      pros_value: [
        "Risparmia tempo significativo con operazioni rapide ed efficienti.",
        "Utilizza una tecnologia avanzata per prestazioni senza pari.",
        "Riduce i costi e aumenta la produttività.",
        "Offre un'interfaccia intuitiva per una facile navigazione.",
        "Garantisce prestazioni affidabili e costanti.",
        "Fornisce applicazioni versatili per varie attività.",
        "Utilizza materiali e processi rispettosi dell'ambiente.",
        "Progettato con tecnologia all'avanguardia per risultati superiori.",
        "Il design di alta qualità garantisce una lunga durata.",
        "Offre assistenza clienti 24 ore su 24.",
      ],

      cons_name: [
        "Investimento costoso",
        "Compatibilità limitata",
        "Configurazione complessa",
        "Richiede formazione",
        "Prestazioni scadenti",
        "Manca di versatilità",
        "Supporto limitato",
        "Manutenzione frequente",
        "Consumo energetico elevato",
        "Durata della vita breve",
      ],

      cons_value: [
        "Investimento iniziale più elevato rispetto alle alternative.",
        "Potrebbe non essere compatibile con tutti i sistemi o dispositivi.",
        "Il processo di configurazione può essere piuttosto complicato.",
        "Per l'utilizzo potrebbe essere necessaria una formazione aggiuntiva.",
        "Le prestazioni potrebbero non soddisfare tutte le aspettative.",
        "Funzionalità limitata o mancanza di versatilità.",
        "L'assistenza clienti potrebbe non essere disponibile 24 ore su 24.",
        "È necessaria una manutenzione frequente, che comporta costi più elevati.",
        "Consuma elevate quantità di energia, incidendo sui costi delle utenze.",
        "La durata del prodotto potrebbe non essere così lunga come previsto.",
      ],
    },

    /**
     * Blog Category
     */
    blog_category: {
      category: [
        "Approfondimenti tecnologici",
        "Scoperte di buongustai",
        "Racconti di viaggio",
        "Consigli sulla salute",
        "Preferiti della moda",
        "Ronzio degli affari",
        "Storie di stili di vita",
        "Aggiornamenti sportivi",
        "Punti salienti dell'arte",
        "Indicazioni per la genitorialità",
      ],
      description: [
        "Scopri articoli approfonditi su vari argomenti.",
        "Esplora la nostra raccolta di post di blog informativi.",
        "Rimani informato con i contenuti accattivanti delle nostre categorie di blog.",
        "Trova ispirazione attraverso gli articoli delle nostre categorie di blog stimolanti.",
        "Espandi le tue conoscenze con i nostri diversi argomenti di categorie di blog.",
        "Rimani aggiornato con i nostri accattivanti approfondimenti sulle categorie del blog.",
        "Immergiti nelle profondità dei nostri intriganti contenuti delle categorie del blog.",
        "Scopri informazioni preziose negli archivi delle nostre categorie di blog.",
        "Impara qualcosa di nuovo dalla nostra categoria di blog attentamente curata.",
        "Interagisci con gli articoli e i post delle nostre arricchenti categorie di blog.",
      ],
    },

    /**
     * Partner Plan
     */
    partner_plan: {
      name: [
        "Pacchetto iniziale",
        "Piano essenziale",
        "Suite professionale",
        "Edizione aziendale",
        "Livello avanzato",
        "Pacchetto Premium",
        "Soluzione definitiva",
        "Livello d'élite",
        "Acceleratore della crescita",
        "Potenza del platino",
      ],
    },

    /**
     * Tax Profile
     */
    tax_profile: {
      name: [
        "Alimenti",
        "Dispositivi elettronici",
        "vestiti e accessori",
        "Libri e cancelleria",
        "Prodotti per la salute e la bellezza",
        "Mobilia",
        "Articoli sportivi",
        "Giocattoli e giochi",
        "Gioielli e accessori",
        "Parti automobilistiche",
        "Giardino e all'aperto",
        "Utensili da cucina",
        "Home decor",
        "Strumenti musicali",
        "Prodotti per animali",
        "Calzature",
        "Borse e bagagli",
        "Forniture per ufficio",
        "Strumenti hardware",
        "Drogheria",
      ],

      label: [
        "VAT", // Value-Added Tax
        "GST", // Goods and Services Tax
        "PST", // Provincial Sales Tax
        "HST", // Harmonized Sales Tax
        "QST", // Quebec Sales Tax
        "CST", // Central Sales Tax
        "Accise", // Excise Tax
        "Dazio all'importazione", // Import Duty
        "Tassa di servizio", // Service Tax
        "Imposta sul lusso", // Luxury Tax
      ],
    },
    /**
     * Cluster
     */
    cluster: {
      name: [
        "Punti salienti della vendita",
        "Codici promozionali",
        "Campagne in primo piano",
        "Nuovi arrivi",
        "I più venduti",
        "Specialità stagionali",
        "Offerte limitate",
        "Offerte per eventi",
        "Esclusive VIP",
        "Articoli in liquidazione",
        "Pacchetti vacanza",
        "Collezioni tematiche",
        "Vetrine del marchio",
        "Preferiti dei membri",
        "Sconti lampo",
        "Acquista gli elementi essenziali",
        "Risorse digitali",
        "Idee regalo",
        "Scelte ecologiche",
        "Raccomandazioni del personale",
      ],
    },

    /**
     * Popup
     */
    popup: {
      title: [
        "Offerta speciale!",
        "Nuovi arrivi",
        "Tempo limitato",
        "Avviso sconti!",
        "Offerte esclusive",
        "Vendita calda!",
        "Avviso di liquidazione",
        "Spedizione gratuita",
        "Regalo dentro!",
        "Vincere premi",
        "Vantaggi per i membri",
        "Vendita lampo",
      ],
    },

    /**
     * Campaign
     */
    campaign: {
      name: [
        "Acquista fino allo sfinimento",
        "La frenesia del carrello",
        "Festa in vendita lampo",
        "Fai clic, acquista, salva",
        "Affare Bonanza",
        "Stravaganza dell'e-deal",
        "Follia di mega ribassi",
        "Sciopero del risparmio informatico",
        "Giornate di sconti digitali",
        "Carnevale dell'e-commerce",
        "Outlet online Oasi",
        "Corsa al dettaglio",
        "Vendita magazzino webstore",
        "Il paradiso dell'e-shopping",
        "Avventura con voucher virtuali",
        "Bustaporta digitali",
        "Liquidazione del carrello elettronico",
        "Resa dei conti per lo shopping online",
        "Spettacolare vendita informatica",
        "Blitz di occasioni elettroniche",
      ],
    },

    /**
     * Valuation
     */
    valuation: {
      title: [
        "Prezzi personalizzazione t-shirt",
        "Valutazione di gioielli fatti a mano",
        "Prezzi scarpe personalizzati",
        "Valutazione di opere d'arte personalizzate",
        "Prezzi abiti su misura",
        "Costo personalizzazione gadget elettronici",
        "Valutazione personalizzata del profumo",
        "Prezzi delle borse personalizzate",
        "Valutazione abiti su misura",
        "Prezzi personalizzati per copertine di libri",
        "Valutazione mobili su misura",
        "Prezzi degli orologi su misura",
        "Valutazione personalizzata dei giocattoli",
        "Prezzi dei cappelli su misura",
        "Valutazione personalizzata dei prodotti per la cura della pelle",
        "Prezzi di decorazioni per la casa su misura",
        "Valutazione di utensili da cucina personalizzati",
        "Prezzi di cancelleria personalizzata",
        "Valutazione di accessori per capelli su misura",
        "Prezzi personalizzati per attrezzature sportive",
      ],
      structure: {
        title: [
          "Design con stampa di t-shirt",
          "Tipo di metallo per gioielli",
          "Scelta del materiale della scarpa",
          "Dimensioni della cornice artistica",
          "Selezione del tessuto dell'abito",
          "Opzione colore gadget",
          "Profilo del profumo del profumo",
          "Materiale e dimensioni della borsa",
          "Lunghezza e stile del vestito",
          "Materiale per la copertina del libro",
          "Tipo di legno per mobili",
          "Materiale del cinturino dell'orologio",
          "Funzionalità personalizzate del giocattolo",
          "Taglia e colore del cappello",
          "Preferenze sugli ingredienti per la cura della pelle",
          "Tema della decorazione domestica",
          "Materiale degli utensili da cucina",
          "Tipo di carta di cancelleria",
          "Materiale per accessori per capelli",
          "Dimensioni dell'attrezzatura sportiva",
        ],
      },
    },

    /**
     * Lottery
     */
    lottery: {
      title: [
        "Gira e vinci grandi premi!",
        "Jackpot della Ruota della Fortuna",
        "Spin fortunato Bonanza",
        "Gira per vincere premi",
        "Ruota della ricchezza",
        "Stravaganza della lotteria fortunata",
        "Sorpresa Mega Spin",
        "Festa della ruota dei premi",
        "Spettacolare giro del tesoro",
        "La magia del giro della ruota",
        "Ruota della fortuna in abbondanza",
        "Il favore della fortuna",
        "Ruota delle Meraviglie",
        "Gira per la ricchezza",
        "Delizia del filatore di premi",
        "Lotteria Golden Spin",
        "Gira un premio",
        "Ruota delle fortune",
        "Vetrina Lucky Spin",
        "Premio giro definitivo",
      ],
      description: [
        "Gira la ruota per avere la possibilità di vincere sconti esclusivi!",
        "Tenta la fortuna: fantastici premi ti aspettano nella nostra ruota della fortuna!",
        "Vinci alla grande ad ogni giro: emozionanti premi in palio!",
        "Gira per vincere! Regali e offerte a sorpresa ad ogni turno.",
        "La tua possibilità di ottenere grandi risultati: gira la ruota per premi immediati!",
        "Premi esclusivi ad ogni giro: sarai tu il fortunato?",
        "Gira e vinci! Scopri le gemme nascoste nella ruota della fortuna del nostro negozio.",
        "Ottieni fortuna con la nostra ruota: premi, sconti e altro ancora!",
        "Ogni giro è una vincita: prendi il tuo premio speciale oggi!",
        "Gira la ruota per una deliziosa sorpresa: cosa vincerai?",
        "Scatena la fortuna con un giro: ti aspettano emozionanti premi nel negozio.",
        "Gira per rivelare il tuo premio: sconti, regali e altro ancora!",
        "Un giro al giorno mantiene l'eccitazione in gioco: vinci premi unici!",
        "Gira la nostra ruota della fortuna per sorprese esclusive in negozio.",
        "I giri fortunati portano vincite fortunate: ricevi subito il tuo premio!",
        "Il tuo giro potrebbe sbloccare fantastici premi per lo shopping!",
        "Gira per avere la possibilità di aggiudicarti affari e offerte esclusive.",
        "La ruota della fortuna gira: prendi il tuo premio fortunato!",
        "Gira, vinci e sorridi: premi a sorpresa ad ogni turno.",
        "Fai un giro e lascia che sia la fortuna a decidere il tuo premio!",
      ],
    },

    /**
     * Subscription Price
     */
    subscription_price: {
      title: [
        "elemento accesso",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento abbonamento",
        "elemento elemento",
        "elemento elemento",
        "elemento offerta",
        "elemento elemento",
        "Suite professionale",
      ],
      description: [
        "Ideale per le persone che esplorano le nozioni di base.",
        "Accesso a tutte le funzionalità e i contenuti premium.",
        "elemento elemento elemento elemento elemento.",
        "Un pacchetto equilibrato per gli utenti abituali.",
        "elemento accesso elemento elemento elemento.",
        "elemento elemento elemento elemento elemento.",
        "elemento elemento elemento elemento.",
        "Nessun limite di utilizzo, per l'utente esperto.",
        "Un piano speciale per le famiglie, fino a 4 componenti.",
        "Progettato per i professionisti che cercano strumenti avanzati.",
      ],
    },

    spec: {
      group: [
        "Specifiche tecniche",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento elemento elemento",
        "elemento elemento elemento elemento",
        "elemento elemento elemento",
        "elemento elemento elemento",
        "elemento elemento elemento",
        "elemento elemento",
        "elemento elemento elemento",
        "elemento elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "utente elemento elemento elemento",
        "prezzi elemento elemento",
      ],
    },

    avocado: {
      title: [
        "elemento elemento",
        "elemento elemento",
        "ordine elemento",
        "pagamento elemento",
        "cliente elemento",
        "transazione elemento",
        "elemento elemento",
        "elemento elemento",
        "ordine elemento",
        "elemento ordine elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento",
        "servizio elemento",
        "prodotto elemento",
        "pagamento elemento",
        "Conferma dell'ordine",
        "elemento elemento",
        "elemento elemento",
        "cliente elemento",
      ],
      message: [
        "elemento elemento elemento elemento elemento!",
        "elemento elemento elemento azienda.",
        "Il tuo ordine è in arrivo!",
        "elemento elemento elemento elemento elemento.",
        "Non vedo l'ora di servirti di nuovo.",
        "La vostra soddisfazione è la nostra massima priorità.",
        "Non dimenticare di valutare la tua esperienza.",
        "Grazie per aver supportato il nostro negozio.",
        "Ci auguriamo che il tuo nuovo acquisto ti piaccia!",
        "Salva la fattura per riferimento futuro.",
        "Torna a trovarci per altri fantastici prodotti.",
        "elemento collegato elemento elemento offerta.",
        "Grazie per essere un cliente stimato.",
        "Siamo qui per aiutarti se hai bisogno di assistenza.",
        "elemento elemento elemento elemento elemento.",
        "Goditi uno sconto speciale sul tuo prossimo acquisto.",
        "elemento elemento elemento elemento elemento!",
        "Grazie per la fiducia che riponete in noi.",
        "elemento elemento elemento elemento elemento.",
        "Un sentito ringraziamento da parte del nostro team.",
      ],
    },

    /**
     * Map Tag
     */
    map_tag: {
      title: [
        "elemento elemento",
        "venditore elemento",
        "elemento home",
        "elemento elemento",
        "Nuovi arrivi",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
      ],
    },

    /**
     * Marketplace Documents (For vendors)
     */
    marketplace_document: {
      title: [
        "azienda elemento elemento",
        "imposta elemento elemento (elemento)",
        "venditore elemento modulo",
        "prodotto elemento",
        "prezzi elenco",
        "elemento elemento dettagli",
        "elemento elemento indirizzo",
        "elemento elemento",
        "azienda profilo",
        "elemento elemento elemento",
        "elemento dati elemento (elemento)",
        "prodotto elemento informazioni",
        "Politica di reso",
        "spedizione elemento elemento elemento",
        "cliente servizio elemento",
        "elemento elemento elemento elemento",
        "elemento elemento link",
        "elemento elemento",
        "elemento codice elemento elemento",
        "elemento elemento (elemento)",
      ],
    },

    /**
     * Expert Contract
     */
    expert_contract: {
      title: [
        "marketplace elemento servizi elemento",
        "negozio elemento elemento",
        "elemento servizi elemento",
        "elemento elemento servizio elemento",
        "elemento elemento elemento elemento",
        "Contratto di consulenza esperta per imprenditori",
        "servizio elemento elemento marketplace elemento",
        "Contratto di servizi di allestimento e configurazione del negozio",
        "POD servizio elemento elemento",
        "elemento elemento elemento elemento",
        "azienda elemento servizio elemento",
        "elemento negozio elemento elemento",
        "elemento servizio elemento elemento",
        "azienda elemento elemento elemento elemento",
        "elemento negozio elemento servizi elemento",
        "marketplace elemento servizio elemento",
        "elemento elemento elemento servizi elemento",
        "POD elemento servizi elemento",
        "elemento elemento elemento servizi elemento",
        "azienda elemento servizio elemento",
      ],
    },

    /**
     * Account
     */
    account: {
      account_name: [
        "principale portafoglio",
        "azienda elemento",
        "elemento portafoglio",
        "elemento portafoglio",
        "elemento elemento",
        "elemento portafoglio",
        "elemento elemento",
        "elemento portafoglio",
        "transazione portafoglio",
        "elemento elemento",
      ],
    },

    /**
     * Cashback
     */
    cashback: {
      title: [
        "negozio & elemento elemento",
        "elemento elemento elemento",
        "elemento elemento offerta",
        "elemento elemento",
        "elemento elemento elemento",
        "elemento elemento elemento",
        "elemento elemento elemento",
        "elemento elemento elemento elemento",
        "elemento elemento",
        "elemento elemento elemento",
        "elemento ora elemento",
        "elemento elemento elemento",
        "negozio elemento, salva elemento",
        "elemento elemento elemento",
        "elemento elemento",
      ],
      description: [
        "elemento elemento elemento elemento elemento!",
        "elemento elemento elemento elemento elemento.",
        "Offerte esclusive di cashback solo per te.",
        "Goditi grandi risparmi con i premi cashback.",
        "Cashback istantaneo su tutti i tuoi articoli preferiti.",
        "Risparmia di più con le offerte cashback stagionali.",
        "Raddoppia il tuo cashback nei giorni speciali!",
        "Guadagna cashback ogni volta che fai acquisti.",
        "elemento elemento elemento elemento elemento!",
        "elemento membri elemento elemento elemento.",
        "elemento! elemento ora elemento offerta.",
        "Unisciti subito al nostro Cashback Rewards Club.",
        "Più acquisti, più risparmi.",
        "elemento elemento elemento elemento elemento.",
        "Prova le migliori offerte di cashback in circolazione.",
      ],
    },

    /**
     * Page
     */
    page: {
      prompts: [
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {shop}",
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {shop}",
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {shop}",
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {shop}",
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {shop}",
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {shop}",
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {shop}",
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {shop}",
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {shop}",
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {shop}",
      ],
    },

    /**
     * Cross-Selling
     */
    cross_selling: {
      message: [
        "Completa il tuo look, prendi il set!",
        "Risparmia alla grande con le nostre offerte pacchetto!",
        "elemento elemento elemento elemento elemento!",
        "elemento elemento elemento, elemento elemento!",
        "elemento elemento elemento, elemento elemento!",
        "elemento elementi, elemento sconto!",
        "Ottieni di più, spendi di meno: raggruppati!",
        "elemento offerta: elemento prodotti!",
        "elemento elemento elemento, elemento elemento!",
        "Scopri le nostre combinazioni curate, risparmia ora!",
        "Abbinalo per la combinazione definitiva!",
        "negozio elemento, elemento elemento salva!",
        "Raddoppia il valore, raddoppia il divertimento!",
        "Il tuo abbinamento perfetto è qui: acquista ora!",
        "Prezzi bundle esclusivi solo per te!",
        "Massimizza il tuo risparmio con le nostre combo!",
        "Migliora la tua collezione con questi plettri!",
        "A cura di te: abbina e salva!",
        "La coppia perfetta per una giornata perfetta!",
        "Raggruppa i tuoi preferiti per risparmi extra!",
      ],
    },

    /**
     * Cross-Selling
     */
    vendor_pricing: {
      title: [
        "elemento elemento",
        "elemento",
        "elemento",
        "elemento",
        "home elemento",
        "elemento prodotti",
        "elemento elemento",
        "Giocattoli e giochi",
        "Drogheria",
        "Mobilia",
        "Parti automobilistiche",
        "Gioielleria",
        "elemento & elemento",
        "Prodotti per animali",
        "Forniture per ufficio",
        "elemento & elemento",
        "elemento & elemento mostra",
        "elemento",
        "elemento & elemento",
        "elemento elemento",
      ],
    },

    /**
     * Template Message
     */
    template_message: {
      title: [
        "Conferma dell'ordine",
        "ordine elemento",
        "ordine elemento",
        "pagamento elemento",
        "ordine elemento",
        "ordine elemento elemento",
        "ordine elemento elemento",
        "ordine elemento elemento elemento",
        "reso elemento",
        "rimborso elemento",
        "elemento elemento elemento elemento",
      ],
      body: [
        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {buyer_name} {order_id}",

        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {buyer_name} {order_id}",

        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {buyer_name} {order_id}",

        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {buyer_name} {order_id}",

        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {buyer_name} {order_id}",

        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {buyer_name} {order_id}",

        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {buyer_name} {order_id}",

        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {buyer_name} {order_id}",

        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {buyer_name} {order_id}",

        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {buyer_name} {order_id}",

        "Qui puoi gestire le informazioni e le impostazioni di questa sezione. {buyer_name} {order_id}",
      ],
    },

    /**
     * Property Set
     */
    property_set: {
      title: [
        "elemento",
        "elemento elemento",
        "elemento",
        "Alimenti",
        "Mobilia",
        "elemento",
        "elemento prodotti",
        "elemento",
        "elemento elemento",
        "elemento",
      ],
      description: [
        "Attributi per articoli di abbigliamento come taglia, colore e tessuto.",
        "Specifiche dei gadget come marca, modello e funzionalità.",
        "Sapori, dimensioni e tipi di bevande.",
        "Dettagli su pasti, spuntini e prodotti alimentari.",
        "elemento, elemento, elemento elemento elemento.",
        "elemento, elemento, elemento elemento elemento.",
        "Tipo di pelle, ingredienti e dettagli sulla confezione.",
        "Fascia d'età, materiale e standard di sicurezza.",
        "tipo, elemento, elemento elemento elemento.",
        "elemento, elemento, elemento elemento dettagli.",
      ],
    },

    /**
     * Boxes
     */
    boxes: {
      name: [
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento",
        "elemento elemento elemento",
        "elemento elemento elemento", // flexible mailer
        "elemento elemento", // bubble/padded
        "elemento elemento", // thermal
        "elemento elemento",
      ],
    },
  },
};
