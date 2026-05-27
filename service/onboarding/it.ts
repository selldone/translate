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
      title: "Neonati, bambini e giocattoli",
      desc: "Passeggini, giocattoli, giochi, puzzle, action figure",
    },
    Health: {
      title: "Salute e bellezza",
      desc: "Farmacia, benessere, cosmetici, profumi",
    },
    Media: {
      title: "Media e giochi",
      desc: "Videogiochi, film, musica, libri",
    },
    Fashion: {
      title: "Abbigliamento, gioielli e orologi",
      desc: "Abbigliamento, scarpe, collane, anelli, bracciali, orologi",
    },
    Automotive: {
      title: "Auto e motori",
      desc: "Accessori auto, strumenti, manutenzione",
    },
    Electronics: {
      title: "Elettronica",
      desc: "Cellulari, TV, dispositivi audio, fotocamere",
    },
    Computers: {
      title: "Computer",
      desc: "Laptop, desktop, accessori, software",
    },
    Household: {
      title: "Essenziali per la casa",
      desc: "Prodotti per la pulizia, bagno, bucato",
    },
    Garden: {
      title: "Giardino e strumenti",
      desc: "Mobili da esterno, attrezzi da giardinaggio, piante",
    },
    Food: {
      title: "Alimentari e generi di prima necessità",
      desc: "Latticini, frutta, cibi pronti, carne, bevande",
    },
    Handmade: {
      title: "Fatto a mano",
      desc: "Oggetti da collezione, scarpe dipinte, sculture, arte del vetro",
    },
    PetSupplies: {
      title: "Articoli per animali",
      desc: "Cibo per animali, giochi per animali, cura degli animali",
    },
    Home: {
      title: "Casa e vita quotidiana",
      desc: "Elettrodomestici da cucina, mobili per la casa, arredamento",
    },
    Sports: {
      title: "Sport e outdoor",
      desc: "Esercizio, campeggio, biciclette, tempo libero",
    },
    Stationery: {
      title: "Cancelleria e ufficio",
      desc: "Forniture per ufficio, materiale scolastico, prodotti in carta",
    },
    Books: {
      title: "Libri",
      desc: "Narrativa, saggistica, didattica, fumetti",
    },
    Marketplace: {
      title: "Mercato di ogni tipo",
      desc: "Un’ampia varietà di prodotti da più categorie",
    },
    Other: {
      title: "Altro...",
      desc: "Carte regalo, prodotti digitali, servizi online, qualsiasi cosa",
    },
  },

  partners: {
    title: "{name} sta collaborando con Selldone",
    subtitle: "nello sbloccare la prossima generazione di attività online.",
    subtitle_official: "Sblocca la prossima generazione di attività online.",

    create_new_shop: "Crea un nuovo negozio",
    select_a_shop: "Seleziona un negozio",
    apply_deal_to: "Applica l'offerta a {shop}",
    notifications: {
      success_apply: "Affare attivato con successo!",
    },
  },

  name: "Configurazione",
  overview: {
    title: "Panoramica",
    subtitle:
      "Scopri meglio il sistema operativo aziendale e come può aiutare la tua attività.",
  },

  shop: {
    title: "Da zero ai ricavi",
    subtitle: "Passa al livello successivo seguendo questi semplici passaggi.",
  },

  open_website: "Apri il mio sito web",

  customize_theme: "Personalizza il sito web",
  setup_business: "Configura attività",
  add_product: "Aggiungi prodotti",
  setup_shipping: "Configura spedizioni",
  add_domain: "Aggiungi dominio",
  add_payment: "Collega pagamenti",

  product: {
    step1: {
      title: "Opzione 1. Aggiungi manualmente",
      msg: "Puoi aggiungere prodotti fisici, oggetti virtuali, file e servizi al tuo negozio e iniziare a venderli.",
      action_on: "Aggiungi il tuo primo prodotto",
      action_off: "Aggiungi più prodotti",
      category:
        "Le categorie sono ciò che rende speciale il tuo sito di vendita online rispetto agli altri. Mantieni tutto classificato e ordinato aggiungendo categorie e gestendole con il trascinamento.",
      add_category: "Aggiungi categoria",
    },
    step2: {
      title: "Opzione 2. Aggiungi con Excel",
      msg: "Hai molti prodotti, come 1K, 10K articoli? Non preoccuparti, importa tutto con un'unica azione.",
      import_excel: "Importa da Excel",
      download_template: "Scarica modello",
    },
  },
  shipping: {
    step1: {
      title: "Passaggio 1. Imposta la posizione",
      msg: "Nella prima fase, imposta il tuo magazzino (origine della spedizione). Queste informazioni vengono utilizzate per calcolare la distanza, il costo di spedizione e verificare di trovarsi nell'area del servizio di spedizione.",
      edit_warehouse: "Modifica magazzino",
      add_warehouse: "Aggiungi il tuo magazzino",
    },
    step2: {
      title: "Passaggio 2. Attiva i metodi di spedizione",
      msg: "Aggiungi almeno un metodo di spedizione al tuo negozio. È possibile impostare i prezzi in base a peso, distanza e altri parametri. Non dimenticare di impostare i limiti di distanza, peso e dimensione dei pacchi supportati da ciascun servizio di spedizione.",
      add_delivery: "Aggiungi metodi di spedizione",
    },
  },

  domain: {
    buy_domain_step: {
      title: "Passaggio 1. Acquista un dominio",
      msg: "Se non hai ancora un dominio personale, è il momento di acquistarlo da siti come namecheap.com .",
    },

    set_dns_step: {
      title: "Passaggio 2. Imposta i record DNS",
      msg: "Congratulazioni, ora devi solo configurare il DNS presso il tuo provider di domini e aggiungere il dominio al tuo account.",
    },
  },

  payment: {
    step1: {
      title: "Valutare le valute",
      msg: "Puoi accettare denaro in diverse valute e il tuo negozio può supportare più di una valuta per i prezzi. A proposito, se imposti la valuta del tuo negozio su USD, i clienti possono pagare in qualsiasi valuta come USD, EUR, GBP, ecc., per acquistare da te.",
      manage_currencies: "Gestisci le valute dei prezzi",
    },
    step2: {
      title: "Accetta soldi",
      msg: "Aggiungi il contrassegno, il trasferimento di denaro diretto e altri metodi di pagamento disponibili nel tuo negozio.",
      online_title: "Metodi di pagamento online",
      online_msg:
        "Accetta pagamenti con carte, nuove applicazioni bancarie, acquista ora paga dopo e molti altri metodi di pagamento online.",
      add_online_gateway: "Aggiungi un metodo di pagamento online",
      cod_title: "Modalità di pagamento in contrassegno",
      cod_msg:
        "Accetta il pagamento dopo la consegna degli ordini. Puoi confermare manualmente i pagamenti in contrassegno.",
      cash_title: "Modalità di pagamento in contanti",
      cash_msg: "Questo tipo di pagamento viene utilizzato in Selldone POS.",
      dir_title: "Modalità di pagamento diretto",
      dir_msg:
        "Puoi accettare pagamenti tramite trasferimento di denaro diretto, bonifico bancario e altri metodi tradizionali.",
    },
    step3: {
      msg: "Collega Selldone al tuo account Stripe con un solo clic in 30 secondi. Al momento supportiamo la configurazione automatica tramite Stripe. Vai alla scheda del tuo gateway, aggiungi Stripe e fai clic sul pulsante “<b>Connessione automatica a Stripe</b>”.",
      my_gateways: "I miei gateway di pagamento",
    },
  },


  /**
   * @see SShopOnboardingCustomization
   */
  customize: {
    tour:{
      title:'Visita guidata',
      subtitle:"Scopri cosa è possibile fare qui e non altrove.",
      /**
       * @see BShopOnboardingTour
       */
      avocado:{
        title:"Avocado - vendi senza aggiungere prodotti",
        description: "Con Avocado puoi offrire servizi o prodotti senza prezzi o dettagli predefiniti. Crea un modulo personalizzato affinché i clienti richiedano servizi o prodotti. Dopo l’invio della richiesta, puoi impostare il prezzo ed elaborare il pagamento. Condividi il modulo sui social media per consentire ai clienti di aggiungere articoli, caricare immagini e inviare ordini con facilità.",
        action:'Leggi su Avocado',
      },
      marketplace:{
        title: "Mercato multi-venditore e pagamenti automatici",
        description: "Crea un mercato florido con Selldone aggiungendo più venditori. I venditori possono pubblicare i propri prodotti e tu puoi impostare una commissione per ogni vendita. Quando un cliente acquista, il venditore riceve il pagamento direttamente, gestisce l’ordine dal proprio pannello dedicato e tu guadagni la commissione tramite la funzione di pagamento automatico.",
        action:'Pagamenti automatici ai venditori',
      },
      business_model:{
        title: "Supporta modelli di business complessi",
        description:
            "Selldone supporta modelli di business sia semplici sia complessi, permettendoti di adattarti quando serve. Configura tutto dietro le quinte senza installare componenti aggiuntivi o applicazioni, garantendo passaggi e operazioni senza interruzioni.",
      },
      gift_shopping:{
        title: "Limitazioni geografiche dei prodotti e acquisti regalo",
        description:
            "Imposta limitazioni geografiche per ogni prodotto specificando più paesi, codici postali e città. Questa funzione è perfetta per creare un’esperienza di acquisto regalo personalizzata o limitare la disponibilità dei prodotti a località specifiche, ad esempio per i ristoranti.",

      }
    },

    template: {
      title: "Modelli",
      msg: "Dai il via al tuo negozio con i nostri modelli predefiniti! Diversifica facilmente aggiungendo più pagine, ognuna con il proprio design unico.",
      action:'Visualizza tutti i modelli...'

    },

    colors: {
      title: "Colori e struttura",

      msg: "Vuoi adattare la pagina prodotto e la struttura del negozio alla tua visione? Apri la sezione di personalizzazione del tema nel tuo negozio e guarda tutto prendere forma con facilità!",

      action:'Personalizza colori e tema'

    },

  },

  /**
   * @see ShopOnboardingSetupBusinessTab
   */
  business: {
    step1: {
      title: "Modello di business",
      msg: "Ogni attività è unica e spesso richiede più di un semplice negozio online. Definisci il tuo modello di entrate e noi gestiremo il resto senza problemi per te.",
    },
  },

  migration: {
    title: "Migrazione",
    shopify: {
      msg: "Passa a Selldone senza problemi da Shopify! Goditi una migrazione semplice, funzionalità avanzate e soluzioni convenienti per il tuo negozio online.",
    },
    woocommerce: {
      msg: "Migra senza problemi i tuoi prodotti WooCommerce su Selldone in pochi clic! Goditi prestazioni migliorate, design intuitivo e supporto clienti di alto livello. Aggiorna ora la tua esperienza di e-commerce.",
    },
  },





};
