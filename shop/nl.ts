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
  /** @see SShopProductRatingView **/
  surveys: ["Erg arm", "Arm", "normaal", "Goed", "Uitmuntend"],

  /** @see SFooterSection **/
  footer: {
    map: "Kaart",
    email: "E-mail",
    phone: "Telefoon",
    address: "Adres",

    copyright:
      "Het gebruik van inhoud alleen voor niet-commerciële doeleinden en met bronvermelding (link met {shop_title}). Alle rechten voorbehouden aan {shop_title}.",
    powered_by: "Aangedreven door",
    privacy: "Privacybeleid",
    term_of_use: "Gebruiksvoorwaarden",
    shop_app_setting: "Winkelinstelling & AVG",

    dialog_setting: {
      title: "Instellingen voor winkeltoepassingen",
      app_list: "Lijst met toepassingen",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Uitverkocht",
    review_unit: "Beoordeling",
    not_original: "Niet origineel",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filter",
    native: {
      title: "Aanmelden applicatie",
      message:
        "Deze app vereist toegang tot uw winkelaccountgegevens. Dit omvat toegang tot naam, contactnummer, adres, e-mail, bestelgeschiedenis, bestellen en het plaatsen van opmerkingen over deze winkel.",
      message_bold:
        "Zorg ervoor dat u de officiële winkel-app gebruikt om deze winkel binnen te gaan.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Sorteer op",
    title_small: "Sorteer op..",
    nothing: "Niets",
    most_views: "Meeste weergaven",
    most_likes: "Meest populair",
    most_recent: "Nieuwste",
    most_sell: "Best verkopende",
    cheapest: "goedkoopste",
    most_expensive: "duurste",
    only_available: "Beschikbaar",
    view_mode: {
      normal: "normaal",
      grid: "Rooster",
      list: "Lijst",
      insta: "Instagram",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Nep",
    action: "Veiling",
    compare_limit: "Maximaal 10 items",
    compare_add: "Voeg toe om te vergelijken",
    compare_be_in_list: "In vergelijkingslijst",

    type: "Type",
    brand: "Merk",
    category: "Categorie",
    discount: "Korting",
    track_price: "Prijs volgen",
    waiting_for_auction: "Wachten op de veiling?",
    inform_auction: "Vertel me over veiling",
    return_in_days: "{days} Dagen Garantie Retour",
    support24h7: "Ondersteuning 24 uur 7 dagen",
    support_normal: "Ondersteuning voor werkuren",
    original_guarantee: "Originele garantie",
    cod_payment: "Ondersteuning bij levering onder rembours",

    pros: "Pluspunten",
    cons: "nadelen",

    external_link: "Lees verder",
    notifications: {
      congratulation: "Gefeliciteerd",
      waiting_list_add_success:
        "We laten u weten wanneer dit product wordt geveild.",
      waiting_list_delete_success: "U heeft de wachtlijst voor veilingen verlaten.",
    },

    offer_message: "Koop {min_quantity} Krijg {percent}% korting op deze items",
    up_to: "Tot {per_order}x per bestelling",
    get_free: "ONTVANG GRATIS",
    get_off: "KRIJG {percent}% KORTING",
    select_a_vendor_message: "Selecteer een leverancier.",
    product_description_header: "Introductie van {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Wachten op beschikbaarheid",
    inform_me_when_available: "Hier op wachten?",
    pay_buy: "Betalen & Kopen",
    quantity: "Graaf",
    quantity_in_basket: "Artikelen in winkelwagen",
    count_unit: "x",
    remove: "Verwijderen",
    add_to_basket: "Voeg toe aan winkelmandje",
    buy: "Kopen",
    subscribe_now: "Abonneer nu",
    unsubscribe: "Uitschrijven",
    select_a_subscription_plan: "Selecteer eerst een abonnement!",
    manage_subscriptions: "Abonnementen beheren",
    notifications: {
      inform_add_success: "We laten je weten wanneer het beschikbaar is.",
      inform_remove_success: "U bent van de wachtlijst verwijderd.",
    },
    zip_pin_input: "Postcode / PIN",
    zip_pin_not_available_msg: "Niet beschikbaar op deze locatie!",
    zip_pin_placeholder: "Selecteer postcode/PIN-code...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Beoordeling",
    spec: "Specificaties",
    comments: "Opmerkingen",
    price: "Prijs",
    rate: "Tarief",
    comment: "Commentaar",
    warranty: "Garantie",
    return_policy: "TERUGSTUURBELEID",
    guide: "Gids",
    shipping: "Verzending",
    related_products_title: "Gerelateerde producten",
    related_categories_title: "Ontdek in collecties",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Bestelgeschiedenis",
      profile: "Mijn profiel",
      favorites: "Favoriete items",
      gift_cards: "Cadeaubonnen",
      return_requests: "Geretourneerde bestellingen",
      basket: "Winkelwagen",
    },
    user_menu: {
      my_shops: "Mijn winkels",
      go_to_admin: "{shop_name} beheren",
      exit_from: "Uitloggen {shop_name}",
      chips: "{chips} chips",
    },
    login_to_shop: "Inloggen op winkel",
    login_to_shop_short: "Log in",
    item_in_basket_message: "{count} Dit artikel bevindt zich in uw winkelwagen.",
    search_title: "Zoek in winkel {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Winkelwagen",
    basket_is_empty: "Uw winkelwagen is leeg.",
    total_price: "Totaal",
    view_basket: "Jouw winkelwagen",
    more: "Meer ...",
    accept_and_pay: "Uitchecken",
    items: "Artikel(en)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Afgekeurd",
    table: {
      code: "Bestelcode",
      reserved: "Datum",
      delivery_state: "Aflever status",
      price: "Totale prijs",
      status: "Betalingsstatus",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Bestelcode",
      items: "Artikelen",
      reserved: "Datum",
      delivery_state: "Laatste status",
      price: "Totale prijs",
      status: "Betalingsstatus",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Cadeaukaart",
      comments: "Opmerkingen",
      favorites: "Favorieten",
      return_requests: "Geeft terug",
      addresses: "Adressen",
      profile: "profiel",
      orders: "Bestellingen",
      wallets: "Portemonnees",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Mijn portemonnees",
    subtitle: "Als u in aanmerking komt en er een cashback-programma actief is, wordt een deel van uw bestelling bijgeschreven op uw portemonnee. U kunt dit tegoed gebruiken bij uw volgende aankoop."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Saldo van mijn portemonnee",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Volgorde",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Betaling",
      payment_waiting: "wachten op betaling",
      payment_completed: "Betaald",
      table: {
        title: "Titel",
        amount: "Hoeveelheid",
        description: "Beschrijving",
      },
      total_payment: "Betaald bedrag",
      discount: "Korting",
      discount_code: "Kortingscode",
      delivery_fee: "Transportkosten",
      delivery_fee_after: "Geen bezorging betaald",

      total_price: "Totaal aantal artikelen Prijs:",
      total_items_discount: "Artikelen korting",
      total_price_after_offers: "Totaal na het toepassen van aanbiedingen",
      total_order_price_before_tax: "Totale prijs vóór belasting",

      buyer_payment: "Koper betalingsbedrag:",

      payment_is_in_require_capture_message:
        "We hebben uw betaling ontvangen, maar deze is nog niet vastgelegd.",
      settle_the_earlier_bill_first: "Vereffen eerst de eerdere rekening!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Levering",
      subtitle: "Koper informatie:",
      confirm_received_action: "Bevestig productontvangst",
      confirm_received_info:
        "Klik op de bevestigingsknop als je de bestelling hebt ontvangen. Indien nodig kunt u een verwijzing indienen als u een bevestiging ontvangt.",
      Recipient: "Ontvanger",
      bill: "Factuur",
      name: "Naam",
      tel: "Telefoon",
      email: "E-mail",
      country: "Land",
      state: "Staat",
      city: "Stad",
      address: "Adres",
      building_no: "Gebouwnummer",
      unit_no: "Eenheidsnummer:",
      postal_code: "postcode",
      description: "Beschrijving",
      order_delivered: "De bestelling is afgeleverd.",
      delivery_time: "Tijd om te bezorgen",
      tracking_code: "Traceercode",
      tracking_url: "Tracking-URL",

      notifications: {
        confirm_delivery: "Uw bestelling is bevestigd.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Garantie van originaliteit van goederen",
      return: "Opbrengst",
      table: {
        product: "productnaam",
        count: "Graaf",
        unit_price: "Stuksprijs",
        total_price: "Totale prijs",
        discount: "Korting",
        final_price: "Eindprijs",
        returned: "Geretourneerd",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Opbrengst",
    count_input: "Aantal geretourneerde artikelen",
    count_input_message: "Hoeveel artikelen retourneert u?",
    reason_input: "reden voor terugkeer",
    reason_input_message: "Selecteer de reden voor het retourneren van dit artikel.",
    note_input: "Beschrijving",
    note_input_hint: "Beschrijf de reden van de retour..",
    note_input_message:
      "Beschrijf indien nodig de reden voor het retourneren van dit artikel.",
    media_message:
      "U kunt hier afbeeldingen, audio of video van het product uploaden om betere ondersteuning te krijgen voor informatie over de productstatus. Het selecteren van het bestand wordt automatisch verzonden en bevestigd.",
    video: "Video",
    voice: "Stem",
    add_action: "Retourverzoek verzenden",
    notifications: "Uw retouraanvraag is succesvol geregistreerd.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Volgorde",
    info: {
      title: "Virtueel product gekocht",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Mijn persoonlijke informatie",
    name: "Naam",
    email: "E-mail",
    tel: "Tel",
    identity: "authenticatie",
    success_kyc: "Geverifieerde KYC",
    no_kyc: "Geen KYC",
    club: "Gebruikers level",
    subscription: "Nieuws abonnement",
    leave_shop: "Verlaat deze winkel en verwijder alle klanten level",
    leave_shop_action: "winkel verlaten",
    edit_personal_info: "Persoonlijke gegevens bewerken",
    leave_dialog: {
      title: "winkel verlaten",
      message:
        "Als u zich afmeldt voor deze winkel, worden uw bestelinformatie en -records niet verwijderd.",
      action: "Vertrekken",
    },
    notifications: {
      leave_success: "winkel verlaten",
    },
    club_table: {
      discount: "Korting",
      limit: "Begrenzing",
      currency: "Munteenheid",
      free_shipping: "Gratis verzending",
    },

    my_profile: {
      title: "Mijn profiel",
      subtitle: "Dit is mijn klantprofielinformatie voor de winkel.",
      edit_action: "Profiel bewerken"
    },
    subscribe_status: {
      subscribed: "Ik ben geabonneerd om de nieuwste nieuwsberichten en promoties per e-mail te ontvangen.",
      unsubscribed: "Ik ben niet geabonneerd om nieuws of promoties per e-mail te ontvangen."
    },
    my_club: {
      subtitle: "Mijn clubniveau en de voordelen ervan."
    },
    kyc: {
      subtitle: "Dit is mijn wereldwijde identificatie-informatie."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Winkelwagen",
    total_price: "Totaalbedrag",
    shipping: "Transportkosten",
    free_shipping: "Gratis verzending",
    shipping_not_pay: "Niet inbegrepen",
    total_discount: "Totale korting",
    customer_club: "Client Club-lid",
    customer_club_discount: "Ledenkorting",
    final_price: "Laatste betaling",
    lead_time: "Voorbereidingstijd",
    lead_time_unit: "Uur",
    receive_time: "Gewenste levertijd",
    select_time: "Selecteer Levertijd",
    no_select_time: "Zo spoedig mogelijk",
    transportation_type: "Verzendtype:",
    days_input: "Bezorgdagen",
    days_input_label: "dagen",
    days_input_no_data: "Selecteer minimaal één dag",
    time_input: "Tijd om te bezorgen",
    time_input_label: "Bezorging bij",
    time_input_label_no_data: "Selecteer ten minste één tijdsinterval",
    support_cod: "Rembours",
    not_support_cod: "Kan niet ter plaatse betalen!",
    final_confirm_action: "Definitieve orderbevestiging",
    pay_and_complete_action: "Nu betalen",
    pre_confirm_service: "Aanvraag indienen",
    cross_selling_discount: "Ophaalkorting",

    errors: {
      no_address: "Selecteer het adres waarnaar u uw bestelling wilt laten verzenden.",
      no_phone: "Voer een contactnummer in om de ontvangst van goederen te coördineren.",
      select_billing_country: "Selecteer uw factureringsland",
      select_billing_state: "Selecteer uw belastingregio",
    },
    same_billing_address: "Factureringsgegevens hetzelfde als Ontvangergegevens",
    same_billing_address_desc:
      "Het factuuradres is hetzelfde als het verzendadres.",
    custom_billing_info: "Andere factureringsgegevens",
    custom_billing_info_desc:
      "U kunt uw BTW-nummer invoeren en een ander factuuradres instellen.",
    basket_empty: "Mandje is leeg",
    extra_shipping_count: "U ontvangt {count} pakketten.",
    select_location_error:
      "Zoek de plaats van ontvangst van de zending op de kaart en klik op de indicator in het midden van de kaart om het exacte adres van de ontvanger te bepalen.",

    billing_business_desc: "Het is een zakelijke rekening met een BTW-nummer.",
    billing_personal_desc: "Het is een persoonlijke rekening.",

    no_billing_title: "Geen facturering",
    no_billing_desc: "Laat het factuuradres leeg.",

    can_pay_cod_message:"U kunt deze bestelling contant betalen bij levering.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Uur",
    count_input: "Graaf",

    price_changed: "Prijs is veranderd. nieuwe prijs:",
    offer: "Ontvang {count}x item met {percent}% korting",
    offer_free: "Krijg {count}x gratis",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Mijn adressen",
    subtitle:"Bekijk hier uw opgeslagen adressen en voeg eenvoudig een nieuw adres toe.",
    new_action: "Nieuw adres",
    receiver: "Ontvanger",
    address: "Adres",
    building_no: "nummerplaat",
    building_unit: "eenheid",
    postcode: "postcode",
    tel: "Tel",
    description: "Opmerking",

    map: {
      title: "Mijn adressen",
      confirm: "Adresregistratie",
      address_type: "Adres",
      receptor_type: "Ontvanger",
    },
    add_dialog: {
      title: "Nieuwe adresnaam",
      message: "Voer een titel in voor een nieuw adres.",
      address_name_input: "Adres (verplicht)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Retourverzoeken",
    subtitle:"Bekijk hier uw retouraanvragen. Voor artikelen met een retourbeleid kunt u op de bestelpagina een retouraanvraag indienen.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "verlanglijst",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Mijn opmerkingen",
    first_post: "Eerste post",
    last_edit: "Laatste bewerking",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Mijn cadeaubonnen",
    add_action: "Voeg een kaart toe",
    add_card_dialog: {
      title: "Cadeaukaart toevoegen",
      message:
        "Voer het kaartnummer en de beveiligingscode in. Er wordt een cadeaubon aan uw account toegevoegd.",
      card_number_input: "Kaartnummer",
      info: "Let op: wanneer je in de winkel koopt, krijg je de mogelijkheid te zien om met cadeaubonnen te betalen. Door deze optie te selecteren, wordt het bedrag van uw oplaadsaldo in mindering gebracht op het orderbedrag.",
      add_action: "Kaartregistratie",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Vergelijk product",
    action_button: "Vergelijken",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Er zijn geen producten toegevoegd aan de vergelijkingslijst.",
      price: "Prijs",
      type: "Type",
      brand: "Merk",
      warranty: "Garantie",
      variants_comparison: "Vergelijk productvarianten",
      spec: "Technische specificaties",
      pros: "Pluspunten",
      cons: "nadelen",
      user_review: "Gebruikerscommentaar",
      rating: "Beoordeling",
      rating_count: "Aantal beoordelingen",
      info: "U kunt deze productvergelijkingstabel met uw vrienden delen door de volgende link te verzenden, of u kunt deze later openen door deze link op te slaan.",
      copy_action: "Vergelijkingslink kopiëren",
      check_list: ["Ja", "Heeft"],
      cross_list: ["Nee", "heeft niet"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Alleen originelen",
    only_has_discount: "Alleen afgeprijsd",
    price_range: "Prijsbereik",
    brands: "Merk",
    main_shop_page: "Hoofdpagina opslaan",
    home: "Thuis",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Beste {user}, U heeft dit product gekocht. Wat vind je van dit product?",
    notification: {
      title: "gefeliciteerd",
      message: "Uw opmerking is opgenomen.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blog",
    add_new_blog: "Nieuwe blog",
    popular: "Populair",
    topics: "Onderwerpen",
    suggestions: "Suggesties",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Over ons",
    terms: "Gebruiksvoorwaarden",
    privacy: "Privacybeleid",
    contact_us: "Neem contact op",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Neem contact met ons op",
    name: "Naam",
    email: "E-mail",
    phone: "Telefoon",
    message: "Bericht",
    notifications: {
      success: "Je bericht is verzonden.",
    },
    submitted_title: "Bedankt dat u contact met ons opneemt!",
    submitted_message:
      "Wij stellen het op prijs dat u de tijd neemt om contact met ons op te nemen. Uw bericht is ontvangen en ons team beoordeelt het momenteel. We zullen zo snel mogelijk reageren en danken u voor uw geduld gedurende deze periode. Uw interesse en feedback zijn belangrijk voor ons en wij doen er alles aan om u de best mogelijke ondersteuning te bieden.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Betalingsbevestiging",
      payment_success: "Betaling afgerond.",
      buy_title: "Kopen",
      pay_by_giftcards: "Uw bestelling is betaald met een cadeaubon.",
      free_order: "Uw bestelling is gratis.",
      pay_by_cod: "Uw bestelling is als rembours toegevoegd.",
      pay_by_dir:
        "Uw bestelling is succesvol toegevoegd. U kunt nu betalen via directe overboeking en vervolgens het betalingsbewijs uploaden op de bestelpagina.",
      pay_title: "Betaling",
      qr_code_payment: "Betaling QR-code adres aangemaakt.",
      connecting_to_online_gateway: "Verbinding maken met de online betalingsgateway.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Bleef tot het begin",
    title_between_start_end: "Tot het einde gebleven",
    title_after_end: "Afgewerkt",
    title_no_start_end: "Zonder tijdsbestek!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "U kunt één cadeau per bestelling ontvangen.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Couponcode",
    add_coupon: "Coupon toevoegen",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "De avocadovorm is niet ingeschakeld!",
    last_update: "Laatste update:",
    step1:
      "1. Voer de naam en details in van het product dat u wilt bestellen en klik op de knop Toevoegen.",
    title_plc: "Voer de naam van het product in.",
    description_plc: "Heb je meer productbeschrijvingen?",
    link_plc: "Heb je een link naar het product?",
    image: "product afbeelding",
    image_msg: "U kunt de productafbeelding indien nodig verzenden.",
    add_item: "Voeg item toe",
    items_list: "Lijst met gevraagde producten",
    currency_msg: "U dient het bedrag van deze bestelling met deze valuta te betalen.",
    step2:
      "2. Nadat u alle gewenste artikelen heeft toegevoegd, klikt u op de knop Orderbeoordelingsverzoek. In dit stadium zullen we de bestelling beoordelen en u informeren over de prijs. Door op deze link te klikken, krijgt u de prijs- en betaallink te zien.",
    order_action: "Bestelling registratie",
    show_all: "Toon alles",
    show_accepted: "Toon bevestigde items",
    last_orders: "Lijst met uw recente bestellingen",
    pending_status: "onder beoordeling",
    check_now: "Controleer bestelling",
    add_new_order: "Nieuwe bestelling plaatsen",
    pay_online: "Betaal online",
    pricing_not_completed_message:
      "Uw bestelling wordt beoordeeld. Uw bestelling wordt binnenkort beoordeeld en geprijsd en u kunt de bestelling betalen.",

    select_address_message:
      "Voer uw adres in en u kunt de bestelling verzenden.",

    delete_item_dialog: {
      title: "Artikel uit de winkelwagen verwijderen",
      message: "Wil je dit artikel uit de winkelwagen verwijderen?",
      action: "Ja, verwijderen",
    },

    notifications: {
      order_success: "Uw bestelling is succesvol geplaatst.",
      delete_success: "Artikel verwijderd.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Bestelling maken",
    message:
      "Maak de lijst met producten die u wilt kopen door de productcode te scannen.",

    currency_msg: "De valuta waarmee u wilt betalen.",
    order_action: "Betaling",
    add_new_order: "Nieuwe bestelling",
    continue_order: "Doorgaan met bestellen",

    delete_item_dialog: {
      title: "Artikel uit de winkelwagen verwijderen",
      message: "Wil je dit artikel uit de winkelwagen verwijderen?",
      action: "Ja, verwijderen",
    },
    notifications: {
      order_success: "Uw bestelling is succesvol geplaatst.",
      delete_success: "Artikel verwijderd.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Upload een afbeelding van het betalingsbewijs.",
    upload_payment_receipt_done:
      "✔ Je hebt de afbeelding van de bon al geüpload, wacht op onze goedkeuring. Als u moet wijzigen, kunt u de vorige afbeelding vervangen door een nieuwe.",
    public_form_title: "Rekeninginformatie voor geldoverdracht",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Te doen lijst",
      message: "Specificeer de titels van het werk dat u wilt doen en laat de koper weten hoe ver het is gevorderd.",
    },
    booking: {
      title: "Reservering",
      message: "Deze bestelling wordt op een bepaald tijdstip verwerkt, de klant heeft de gewenste periode geselecteerd, mocht u nog wijzigingen willen aanbrengen in de geselecteerde periode, laat dit dan aan de klant weten.",

      selected_checkin: "Geselecteerde check-in door klant",
      selected_checkout: "Geselecteerde check-out door klant",
      change_days_question:
        "Moet u overstappen tijdens de door de klant geselecteerde dagen?",
      show_calendar: "Toon kalender met bestellingen",
    },
    pricing: {
      title: "Prijzen",
      message: "Hoeveel rekent u voor deze dienst?",
    },
    subscription: {
      title: "Abonnement",
      message:
        "U kunt de abonnementsperiode kiezen door deze service dagelijks aan te schaffen. Laat de koper weten of je de standaardwaarden die je al hebt ingevoerd wilt wijzigen.",
      duration: "Abonnementsperiode",
    },
    charge: {
      title: "Aanval",
      message:
        "U heeft een toeslag voor dit artikel opgegeven. U kunt het afschrijvingsbedrag voor het door de klant gekochte artikel wijzigen.",
      charge: "Aanval",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Wachten om toegang te controleren...",
    no_access_message:
      "Helaas heeft u geen toegang tot onze winkel.<br/> Gelieve ons te contacteren.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Bestelling delen",
    title: "Deel deze bestelling met anderen.",
    message:
      "Het is een beveiligde link, deel deze alleen met degenen die u kent. Iedereen met deze link kan uw bestelling dupliceren en het geselecteerde adres zien. Het bevat informatie over uw huidige winkelwagen.",
    valid_period: "Deze link verloopt na 48 uur.",
    import_order_action: "Bestelling importeren",
    retrieve_dialog_title: "Externe bestelling ophalen",
    address_included: "Artikelen in winkelwagen delen + Adres",
    address_excluded: "Alleen winkelwagenitems delen",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Prijzen",
    inventory: "Voorraad",
    discount: "Korting",
  },

  rating: {
    product_rating_message:
      "Dit product heeft een beoordeling gekregen van {rate} uit 5 sterren en is beoordeeld door {rate_count} mensen.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Ontdekken!",
      same_tags_subtitle: "Vind meer opmerkelijke gerelateerde items.",
      same_category_subtitle: "Vind meer opmerkelijke items in deze categorie.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Bestel {product} met",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Bekijk de winkel van {vendor}",
  },

  login: {
    welcome: "Welkom",
  },


};
