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
      title: "Bebis, barn och leksaker",
      desc: "Barnvagnar, leksaker, spel, pussel, actionfigurer",
    },
    Health: {
      title: "Hälsa och skönhet",
      desc: "Apotek, välmående, kosmetik, dofter",
    },
    Media: {
      title: "Media och spel",
      desc: "Videospel, filmer, musik, böcker",
    },
    Fashion: {
      title: "Kläder, smycken och klockor",
      desc: "Kläder, skor, halsband, ringar, armband, klockor",
    },
    Automotive: {
      title: "Fordon",
      desc: "Biltillbehör, verktyg, underhåll",
    },
    Electronics: {
      title: "Elektronik",
      desc: "Mobil, TV, ljudenheter, kamera",
    },
    Computers: {
      title: "Datorer",
      desc: "Bärbara datorer, stationära datorer, tillbehör, programvara",
    },
    Household: {
      title: "Hushållsartiklar",
      desc: "Städartiklar, badrum, tvätt",
    },
    Garden: {
      title: "Trädgård och verktyg",
      desc: "Utemöbler, trädgårdsverktyg, växter",
    },
    Food: {
      title: "Mat och livsmedel",
      desc: "Mejeri, frukt, färdigmat, kött, drycker",
    },
    Handmade: {
      title: "Handgjort",
      desc: "Samlarobjekt, målade skor, skulpturer, glaskonst",
    },
    PetSupplies: {
      title: "Husdjursartiklar",
      desc: "Husdjursfoder, leksaker för husdjur, husdjursvård",
    },
    Home: {
      title: "Hem och boende",
      desc: "Köksapparater, heminredning, dekor",
    },
    Sports: {
      title: "Sport och friluftsliv",
      desc: "Träning, camping, cyklar, rekreation",
    },
    Stationery: {
      title: "Kontors- och skolmaterial",
      desc: "Kontorsmaterial, skolmaterial, pappersprodukter",
    },
    Books: {
      title: "Böcker",
      desc: "Skönlitteratur, facklitteratur, utbildning, serier",
    },
    Marketplace: {
      title: "Marknadsplats för allt",
      desc: "Ett brett utbud av produkter från flera kategorier",
    },
    Other: {
      title: "Annat...",
      desc: "Presentkort, digitala produkter, onlinetjänster, allt möjligt",
    },
  },

  partners: {
    title: "{name} samarbetar med Selldone",
    subtitle: "att låsa upp nästa generations onlineföretag.",
    subtitle_official: "Lås upp nästa generations onlineföretag.",

    create_new_shop: "Skapa en ny butik",
    select_a_shop: "Välj en butik",
    apply_deal_to: "Ansök erbjudande på {shop}",
    notifications: {
      success_apply: "Affären har aktiverats!",
    },
  },

  name: "Uppstart",
  overview: {
    title: "Översikt",
    subtitle:
      "Få insikt i Business OS och upptäck hur det kan hjälpa ditt företag.",
  },

  shop: {
    title: "Skapa min butik",
    subtitle: "Gå till nästa nivå genom att slutföra dessa enkla steg.",
  },

  open_website: "Öppna min hemsida",

  customize_theme: "Anpassa webbplatsen",
  setup_business: "Konfigurera företag",
  add_product: "Lägg till produkt",
  setup_shipping: "Ställ in frakt",
  add_domain: "Lägg till domän",
  add_payment: "Anslut till en betalningsgateway",

  product: {
    step1: {
      title: "Alternativ 1. Lägg till manuellt",
      msg: "Du kan lägga till fysiska produkter, virtuella föremål, filer och tjänster till din butik och börja sälja dem.",
      action_on: "Lägg till din första produkt",
      action_off: "Lägg till fler produkter",
      category:
        "Kategorier är mästerverket på din online shoppingwebbplats jämfört med andra. Gör allt kategoriserat och ordnat genom att lägga till kategorier och hantera med dra och släpp.",
      add_category: "Lägg till Kategori",
    },
    step2: {
      title: "Alternativ 2. Lägg till med Excel",
      msg: "Har du många produkter, som 1K, 10K objekt? Oroa dig inte, importera allt bara genom en åtgärd.",
      import_excel: "Importera med Excel",
      download_template: "Ladda ner mall",
    },
  },
  shipping: {
    step1: {
      title: "Steg 1. Ställ in plats",
      msg: "I det första steget ställer du in ditt lager (leveransens ursprung). Denna information används för att beräkna avståndet, fraktkostnaden och checken för att vara i fraktserviceområdet.",
      edit_warehouse: "Redigera lager",
      add_warehouse: "Lägg till ditt lager",
    },
    step2: {
      title: "Steg 2. Aktivera fraktmetoder",
      msg: "Lägg till minst en leveransmetod till din butik. Du kan ställa in prissättning baserat på vikt, avstånd och andra parametrar. Glöm inte att sätta gränser för avstånd, vikt och storlek på paket som varje frakttjänst stöder.",
      add_delivery: "Lägg till fraktsätt",
    },
  },

  domain: {
    buy_domain_step: {
      title: "Steg 1. Köp en domän",
      msg: "Om du ännu inte har en egen domän är det dags att köpa din domän från webbplatser som namecheap.com.",
    },

    set_dns_step: {
      title: "Steg 2. Ställ in DNS-poster",
      msg: "Grattis, nu behöver du bara konfigurera DNS hos din domänleverantör och lägga till domänen i ditt konto.",
    },
  },

  payment: {
    step1: {
      title: "Prissättning av valutor",
      msg: "Du kan ta emot pengar i olika valutor, och din butik kan stödja mer än en valuta för prissättning. Förresten, om du ställer in din butiksvaluta till USD kan kunderna betala i valfri valutor som USD, EUR, GBP, etc., för att köpa från dig.",
      manage_currencies: "Hantera prissättningsvalutor",
    },
    step2: {
      title: "Acceptera pengar",
      msg: "Lägg till postförskott, direkt överföring av pengar och andra tillgängliga betalningsmetoder i din butik.",
      online_title: "Betalningsmetoder online",
      online_msg:
        "Acceptera betalning med kort, nya bankapplikationer, köp-nu-betala-senare och många andra betalningsmetoder online.",
      add_online_gateway: "Lägg till en onlinebetalningsmetod",
      cod_title: "Postförskottsbetalningsmetod",
      cod_msg:
        "Acceptera betalning efter leverans av beställningar. Du kan bekräfta postförskottsbetalningar manuellt.",
      cash_title: "Kontant betalningsmetoder",
      cash_msg: "Denna typ av betalning används i Selldone POS.",
      dir_title: "Direktbetalningsmetoder",
      dir_msg:
        "Du kan acceptera betalning med direkt penningöverföring, banköverföring och andra traditionella sätt.",
    },
    step3: {
      msg: "Anslut Selldone till ditt Stripe-konto med ett enda klick på 30 sekunder. För närvarande stöder vi den automatiska konfigurationsprocessen via Stripe. Gå till fliken för din betalningsgateway, lägg till Stripe och klicka på knappen '<b>Anslut automatiskt till Stripe</b>'.",
      my_gateways: "Mina betalningsportaler",
    },
  },


  /**
   * @see SShopOnboardingCustomization
   */
  customize: {
    tour:{
      title:'Rundtur',
      subtitle:"Upptäck vad som är möjligt här och inte finns någon annanstans.",
      /**
       * @see BShopOnboardingTour
       */
      avocado:{
        title:"Avocado - Sälj utan att lägga till någon produkt",
        description: "Med Avocado kan du erbjuda tjänster eller produkter utan fördefinierade priser eller detaljer. Skapa ett anpassat formulär där dina kunder kan begära tjänster eller produkter. När de skickar in sin begäran kan du ange priset och behandla betalningen. Dela formuläret i dina sociala medier så att kunder enkelt kan lägga till artiklar, ladda upp bilder och skicka beställningar.",
        action:'Läs om Avocado',
      },
      marketplace:{
        title: "Marknadsplats med flera säljare och automatisk utbetalning",
        description: "Bygg en växande marknadsplats med Selldone genom att lägga till flera säljare. Säljare kan lista sina produkter och du kan ange en provisionsnivå för varje försäljning. När en kund gör ett köp får säljaren betalningen direkt, hanterar ordern via sin dedikerade panel och du tjänar provision via funktionen för automatisk utbetalning.",
        action:'Automatisk utbetalning till säljare',
      },
      business_model:{
        title: "Stöd komplexa affärsmodeller",
        description:
            "Selldone stöder både enkla och komplexa affärsmodeller så att du kan anpassa dig efter behov. Konfigurera allt bakom kulisserna utan att installera extra tillägg eller appar, och säkerställ smidiga övergångar och arbetsflöden.",
      },
      gift_shopping:{
        title: "Platsbegränsningar för produkter och presentköp",
        description:
            "Ställ in platsbegränsningar för varje produkt genom att ange flera länder, ZIP-koder och städer. Funktionen passar perfekt för en personlig presentköpupplevelse eller för att begränsa produkttillgänglighet till specifika platser, till exempel för restauranger.",

      }
    },

    template: {
      title: "Mallar",
      msg: "Kom igång med din butik med våra färdigbyggda mallar! Variera enkelt genom att lägga till flera sidor, var och en med sin egen unika design.",
      action:'Visa alla mallar...'

    },

    colors: {
      title: "Färger & Layout",

      msg: "Vill du skräddarsy din produktsida och butikslayout för att bättre passa din vision? Dyk in i temaanpassningssektionen i din butik och se magin utvecklas utan ansträngning!",

      action:'Anpassa färger och tema'

    },

  },

  /**
   * @see ShopOnboardingSetupBusinessTab
   */
  business: {
    step1: {
      title: "Affärsmodell",
      msg: "Varje företag är unikt och kräver ofta mer än bara en grundläggande webbutik. Definiera din intäktsmodell så tar vi hand om resten sömlöst åt dig.",
    },
  },

  migration: {
    title: "Migrering",
    shopify: {
      msg: "Byt till Selldone sömlöst från Shopify! Njut av enkel migrering, förbättrade funktioner och kostnadseffektiva lösningar för din onlinebutik.",
    },
    woocommerce: {
      msg: "Migrera dina produkter från WooCommerce till Selldone med bara några få klick! Njut av förbättrad prestanda, intuitiv design och kundsupport på toppnivå. Uppgradera din e-handelsupplevelse nu.",
    },
  },





};
