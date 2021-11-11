export default {
  /** @see ProductRatingView **/
  surveys: ["Sehr arm", "Arm", "Normal", "Gut", "Exzellent"],


  /** @see ShopFooter **/
  footer: {
    map: "Karte",
    email: "Email",
    phone: "Telefon",
    address: "Die Anschrift",

    copyright:
      "Die Verwendung der Inhalte nur zu nicht-kommerziellen Zwecken und unter Angabe der Quelle (Link mit {shop_title}). Alle Rechte vorbehalten {shop_title}.",
    powered_by: "Unterstützt von",
    privacy: "Datenschutz-Bestimmungen",
    term_of_use: "Nutzungsbedingungen",
    shop_app_setting: "Shop-Einstellung & DSGVO",

    dialog_setting: {
      title: "Einstellungen für Shop-Anwendungen",
      app_list: "Liste der Anwendungen",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "Ausverkauft",
    review_unit: "Rezension",
    not_original: "Nicht original",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filter",
    native: {
      title: "Anwendungsanmeldung",
      message:
        "Diese App erfordert Zugriff auf Ihre Store-Kontoinformationen. Dies beinhaltet den Zugriff auf Name, Kontaktnummer, Adresse, E-Mail, Bestellhistorie, Bestellung und das Veröffentlichen von Kommentaren in diesem Shop.",
      message_bold:
        "Verwenden Sie unbedingt die offizielle Store-App, um diesen Store zu betreten.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Sortieren nach",
    title_small: "Sortieren nach..",
    nothing: "Nichts",
    most_views: "Die meisten Aufrufe",
    most_likes: "Am beliebtesten",
    most_recent: "Neueste",
    most_sell: "Meistverkauft",
    cheapest: "Am billigsten",
    most_expensive: "Teuerste",
    only_available: "Erhältlich",
    view_mode: {
      normal: "Normal",
      grid: "Netz",
      list: "Aufführen",
      insta: "Insta",
    },
  },

  /** @see ProductInfo **/
  product_info: {
    fake: "Gefälscht",
    action: "Versteigerung",
    compare_limit: "Limit von 10 Artikeln",
    compare_add: "Hinzufügen zum vergleichen",
    compare_be_in_list: "In der Vergleichsliste",

    type: "Typ",
    brand: "Marke",
    category: "Kategorie",
    discount: "Rabatt",
    track_price: "Preis verfolgen",
    waiting_for_auction: "Warten auf Auktion?",
    inform_auction: "Erzähl mir von der Auktion",
    return_in_days: "{days} Tage Garantierückgabe",
    support24h7: "Support 24 Stunden 7 Tage",
    support_normal: "Arbeitszeitunterstützung",
    original_guarantee: "Originalgarantie",
    cod_payment: "Unterstützung per Nachnahme",

    pros: "Vorteile",
    cons: "Nachteile",

    external_link: "Weiterlesen",
    notifications: {
      congratulation: "Herzliche Glückwünsche",
      waiting_list_add_success:
        "Wir benachrichtigen Sie, wenn dieses Produkt versteigert wird.",
      waiting_list_delete_success: "Sie haben die Auktionswarteliste verlassen.",
    },

    offer_message: "Kaufen Sie {min_quantity} Erhalten Sie {percent} % Rabatt auf diese Artikel",
    up_to: "Bis zu {per_order}x pro Bestellung",
    get_free: "KOSTENLOS ERHALTEN",
    get_off: "ERHALTE {Prozent}% RABATT",
  },

  /** @see BuyButton **/

  buy_button: {
    waiting_for_availability: "Warten auf Verfügbarkeit",
    inform_me_when_available: "Darauf warten?",
    pay_buy: "Bezahlen & Kaufen",
    quantity: "Zählen",
    quantity_in_basket: "Artikel im Warenkorb",
    count_unit: "x",
    remove: "Entfernen",
    add_to_basket: "In den Warenkorb legen",
    buy: "Besorgen",
    notifications: {
      inform_add_success: "Wir informieren Sie, wenn es verfügbar ist.",
      inform_remove_success: "Sie wurden von der Warteliste gestrichen.",
    },
  },

  /** @see ProductPage **/

  product: {
    review: "Rezension",
    spec: "Spez",
    comments: "Kommentare",
    related_products_title: "Verwandte Produkte",
    price: "Preis",
    rate: "Rate",
    comment: "Kommentar",
  },

  /** @see LayoutShop **/
  layout_shop: {
    shop_menu: {
      orders_history: "Bestellverlauf",
      profile: "Profil",
      favorites: "Meine Favoriten",
      gift_cards: "Geschenkkarten",
      return_requests: "Rücksendeanfragen",
      basket: "Einkaufswagen",
    },
    user_menu: {
      my_shops: "Meine Geschäfte",
      go_to_admin: "{shop_name} verwalten",
      exit_from: "Abmelden {shop_name}",
      chips: "{Chips} Chips",
    },
    login_to_shop: "Im Shop anmelden",
    login_to_shop_short: "Anmeldung",
    item_in_basket_message: "{count} Dieser Artikel befindet sich in Ihrem Warenkorb.",
    search_title: "Im Geschäft {shop_name} suchen",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Wagen",
    basket_is_empty: "Ihr Warenkorb ist leer.",
    total_price: "Gesamt",
    view_basket: "Warenkorb ansehen",
    more: "Mehr ...",
    accept_and_pay: "Auschecken",
    items: "Produkte)",
  },



  /** {@see HistoryOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Hat abgelehnt",
    table: {
      code: "Bestellcode",
      reserved: "Datum",
      delivery_state: "Lieferstatus",
      price: "Gesamtpreis",
      status: "Zahlungsstatus",
    },
  },
  /** {@see OrdersHistoryListTemplate} **/
  history_orders: {
    table: {
      code: "Bestellcode",
      items: "Produkte",
      reserved: "Datum",
      delivery_state: "Letzter Status",
      price: "Gesamtpreis",
      status: "Zahlungsstatus",
    },
  },

  /** {@see UserPagesLayout} **/
  user_page: {
    menu: {
      gift_card: "Geschenkkarte",
      comments: "Kommentare",
      favorites: "Favoriten",
      return_requests: "Kehrt zurück",
      addresses: "Adressen",
      profile: "Profil",
      orders: "Aufträge",
    },
  },
  /** {@see MyPhysicalOrderInfoPage} **/
  physical_order_page: {
    title: "Befehl",

    /** {@see CustomerOrderPaymentWidget} **/
    payment: {
      title: "Zahlung",
      payment_waiting: "Warten auf Zahlung",
      payment_completed: "Bezahlt",
      table: {
        title: "Titel",
        amount: "Betragen",
        description: "Beschreibung",
      },
      total_payment: "Bezahlter Betrag",
      discount: "Rabatt",
      discount_code: "Rabattcode",
      delivery_fee: "Versandkosten",
      delivery_fee_after: "Keine Lieferung bezahlt",

      total_price: "Gesamtpreis der Artikel",
      total_items_discount: "Artikelrabatt",
      total_price_after_offers: "Gesamtpreis nach Anwendung der Angebote",

      buyer_payment: "Zahlungsbetrag des Käufers",
    },
    /** {@see CustomerOrderDeliveryWidget} **/
    delivery: {
      title: "Lieferung",
      subtitle: "Käuferinformationen",
      confirm_received_action: "Produkteingang bestätigen",
      confirm_received_info:
        "Klicken Sie auf den Bestätigungsbutton, wenn Sie die Bestellung erhalten haben. Bei Bedarf können Sie eine Empfehlung abgeben, wenn Sie eine Bestätigung erhalten.",
      receiver: "Empfänger",
      bill: "Rechnung",
      name: "Name",
      tel: "Telefon",
      email: "Email",
      country: "Land",
      state: "Bundesland",
      city: "Stadt",
      address: "Die Anschrift",
      building_no: "Hausnummer",
      unit_no: "Gerätenummer",
      postal_code: "Postleitzahl",
      description: "Beschreibung",
      order_delivered: "Die Bestellung wurde geliefert.",
      delivery_time: "Lieferzeit",
      tracking_code: "Verfolgungscode",
      tracking_url: "Tracking-URL",

      notifications: {
        confirm_delivery: "Ihre Bestellung wurde genehmigt.",
      },
    },
    /** {@see BasketItemsListView} **/
    basket_items: {
      original_warranty: "Garantie der Originalität der Ware",
      return: "Zurückkehren",
      table: {
        product: "Produktname",
        count: "Zählen",
        unit_price: "Stückpreis",
        total_price: "Gesamtpreis",
        discount: "Rabatt",
        final_price: "Endgültiger Preis",
        returned: "Ist zurückgekommen",
      },
    },
  },

  /** {@see BasketItemReturnForm} **/
  return_request: {
    title: "Zurückkehren",
    count_input: "Anzahl der zurückgegebenen Artikel",
    count_input_message: "Wie viele kehren Sie zurück?",
    reason_input: "Grund der Rückkehr",
    reason_input_message: "Wählen Sie den Grund für die Rücksendung dieses Artikels aus.",
    note_input: "Beschreibung",
    note_input_hint: "Beschreiben Sie den Grund für die Referenz..",
    note_input_message:
      "Beschreiben Sie bei Bedarf den Grund für die Weiterleitung dieses Artikels.",
    media_message:
      "Sie können hier Bild, Audio oder Video des Produkts hochladen, um besseren Support für Produktstatusinformationen zu erhalten. Die Auswahl der Datei wird automatisch gesendet und bestätigt.",
    video: "Video",
    voice: "Stimme",
    add_action: "Rücksendeanfrage senden",
    notifications: "Ihre Empfehlungsanfrage wurde erfolgreich registriert.",
  },
  /** {@see MyVirtualOrderInfoPage} **/
  virtual_order_page: {
    title: "Befehl",
    info: {
      title: "Gekauftes virtuelles Produkt",
    },
  },

  /** {@see UserProfilePage} **/
  user_profile: {
    title: "Meine persönlichen Informationen",
    name: "Name",
    email: "Email",
    tel: "Tel",
    identity: "Authentifizierung",
    success_kyc: "Genehmigtes KYC",
    club: "Benutzerlevel",
    subscription: "News-Abo",
    leave_shop: "Verlasse diesen Shop und entferne alle Kundenlevel",
    leave_shop_action: "Laden verlassen",
    leave_dialog: {
      title: "Laden verlassen",
      message:
        "Wenn Sie sich von diesem Shop abmelden, werden Ihre Bestellinformationen und -aufzeichnungen nicht gelöscht.",
      action: "Verlassen",
    },
    notifications: {
      leave_success: "Laden verlassen",
    },
    club_table: {
      discount: "Rabatt",
      limit: "Grenze",
      currency: "Währung",
      free_shipping: "Kostenloser Versand",
    },
  },
  /** {@see BasketPage} **/
  basket_page: {
    title: "Einkaufswagen",
    total_price: "Gesamtsumme",
    shipping: "Versandkosten",
    free_shipping: "Kostenloser Versand",
    shipping_not_pay: "Nicht enthalten",
    total_discount: "Totaler Rabatt",
    customer_club: "Kundenclub-Mitglied",
    customer_club_discount: "Mitgliederrabatt",
    final_price: "Restzahlung",
    lead_time: "Vorbereitungszeit",
    lead_time_unit: "Stunde",
    receive_time: "Zeit zum Empfangen",
    select_time: "Lieferzeit auswählen",
    no_select_time: "Senden Sie, wann immer Sie bereit sind.",
    transportation_type: "Fahrzeugtyp",
    days_input: "Liefertage",
    days_input_label: "Tage",
    days_input_no_data: "Wählen Sie mindestens einen Tag aus",
    time_input: "Lieferzeit",
    time_input_label: "Lieferung um",
    time_input_label_no_data: "Wählen Sie mindestens ein Zeitintervall",
    support_cod: "Barzahlung bei Lieferung",
    not_support_cod: "Zahlung vor Ort nicht möglich!",
    final_confirm_action: "Endgültige Auftragsbestätigung",
    pay_and_complete_action: "Zahlen Sie jetzt",
    pre_confirm_service: "Anfrage einreichen",

    errors: {
      no_address: "Wählen Sie die Adresse aus, an die Ihre Bestellung versendet werden soll.",
      no_phone: "Geben Sie eine Kontaktnummer ein, um den Wareneingang zu koordinieren.",
      select_billing_country: "Wählen Sie Ihr Rechnungsland aus",
      select_billing_state: "Wählen Sie Ihre Steuerregion",
    },
    same_billing_address: "Rechnungsinformationen wie Empfängerinformationen",
    custom_billing_info: "Abweichende Rechnungsinformationen",
    basket_empty: "Warenkorb ist leer",
    extra_shipping_count: "Sie erhalten {count} Pakete.",
    select_location_error:
      "Suchen Sie auf der Karte den Empfangsort der Sendung und klicken Sie auf den Indikator in der Mitte der Karte, um die genaue Adresse des Empfängers zu ermitteln.",
  },
  /** {@see BasketListItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Stunde",
    count_input: "Zählen",

    price_changed: "Preis hat sich geändert. neuer Preis:",
    offer: "Erhalte {count}x Artikel um {percent} % Rabatt",
    offer_free: "{count}x gratis erhalten",
  },

  /** {@see UserAddressesPage} **/
  addresses_page: {
    title: "Meine Adressen",
    new_action: "Neue Adresse",
    receiver: "Empfänger",
    address: "Die Anschrift",
    building_no: "Nummernschild",
    building_unit: "Einheit",
    postcode: "Postleitzahl",
    tel: "Tel",
    description: "Notiz",

    map: {
      title: "Meine Adressen",
      confirm: "Adressregistrierung",
      address_type: "Die Anschrift",
      receptor_type: "Empfänger",
    },
    add_dialog: {
      title: "Neuer Adressname",
      message: "Geben Sie einen Titel für eine neue Adresse ein.",
      address_name_input: "Adresse (erforderlich)",
    },
  },
  /** {@see UserReturnRequests} **/
  return_requests: {
    title: "Rücksendeanfragen",
  },
  /** {@see UserFavoritesPage} **/
  user_favorites: {
    title: "Wunschzettel",
  },
  /** {@see UserCommentsPage} **/
  user_comments: {
    title: "Meine Kommentare",
    first_post: "Erster Beitrag",
    last_edit: "Letzte Änderung",
  },
  /** {@see UserGiftCardsPage} **/
  user_gift_cards: {
    title: "Meine Geschenkkarten",
    add_action: "Karte hinzufügen",
    add_card_dialog: {
      title: "Geschenkkarte hinzufügen",
      message:
        "Geben Sie die Kartennummer und den Sicherheitscode ein. Ihrem Konto wird eine Geschenkkarte hinzugefügt.",
      card_number_input: "Kartennummer",
      info: "Hinweis: Beim Kauf im Store wird Ihnen die Möglichkeit angezeigt, mit Geschenkkarten zu bezahlen. Wenn Sie diese Option auswählen, wird der Betrag Ihres Aufladeguthabens vom Bestellbetrag abgezogen. ",
      add_action: "Kartenregistrierung",
    },
  },

  /** {@see ProductComparison} **/
  product_comparison: {
    title: "Produktvergleich",
    action_button: "vergleichen",

    /** {@see ProductComparisonList} **/
    list: {
      no_data: "Der Vergleichsliste wurden keine Produkte hinzugefügt.",
      price: "Preis",
      type: "Typ",
      brand: "Marke",
      warranty: "Garantie",
      variants_comparison: "Produktvielfalt vergleichen",
      spec: "Technische Spezifikationen",
      pros: "Vorteile",
      cons: "Nachteile",
      user_review: "Benutzerkommentare",
      rating: "Bewertung",
      rating_count: "Anzahl der Bewertungen",
      info: "Sie können diese Produktvergleichstabelle mit Ihren Freunden teilen, indem Sie den folgenden Link senden, oder später darauf zugreifen, indem Sie diesen Link speichern.",
      copy_action: "Vergleichslink kopieren",
      check_list: ["Jawohl", "Hat"],
      cross_list: ["Nein", "Hat nicht"],
    },
  },
  /** {@see ProductFilterMenu} **/
  product_filter_menu: {
    only_original: "Nur Originale",
    only_has_discount: "Nur ermäßigt",
    price_range: "Preisklasse",
    brands: "Marke",
    main_shop_page: "Store-Hauptseite",
    home: "Heim",
  },

  /** {@see ProductRatingView} **/
  product_rating_view: {
    message:
      "Sehr geehrter {user}, Sie haben dieses Produkt gekauft. Was halten Sie von diesem Produkt?",
    notification: {
      title: "Herzlichen Glückwunsch",
      message: "Ihr Kommentar wurde aufgezeichnet.",
    },
  },

  /** @see ShopBlogsPage **/
  blogs: {
    title: "Blog",
    add_new_blog: "Neuer Blog",
    popular: "Beliebt",
    topics: "Themen",
    suggestions: "Vorschläge",
  },

  /** @see ShopProfilePage **/
  official_pages: {
    about_us: "Über uns",
    terms: "Nutzungsbedingungen",
    privacy: "Datenschutz-Bestimmungen",
    contact_us: "Kontaktiere uns",
  },

  /** @see ShopContactUs **/
  contact_us_form: {
    title: "Kontaktieren Sie uns Formular",
    name: "Name",
    email: "Email",
    phone: "Telefon",
    message: "Nachricht",
    notifications: {
      success: "Ihre Nachricht wurde gesendet.",
    },
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Zahlungsbestätigung",
      payment_success: "Bezahlvorgang abgeschlossen.",
      buy_title: "Besorgen",
      pay_by_giftcards: "Ihre Bestellung wurde mit einer Geschenkkarte bezahlt.",
      free_order: "Ihre Bestellung ist kostenlos.",
      pay_by_cod: "Ihre Bestellung wurde als Nachnahme hinzugefügt.",
      pay_by_dir:
        "Ihre Bestellung wurde erfolgreich hinzugefügt. Jetzt können Sie per Sofortüberweisung bezahlen und anschließend den Zahlungsbeleg auf der Bestellseite hochladen.",
      pay_title: "Zahlung",
      qr_code_payment: "Zahlungs-QR-Code-Adresse erstellt.",
      connecting_to_online_gateway: "Verbindung zum Online-Zahlungsgateway.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Bleibt bis zum Anfang",
    title_between_start_end: "Bleibt bis zum Schluss",
    title_after_end: "Fertig",
    title_no_start_end: "Ohne Zeitraum!",
  },
  /** {@see LotteryPrizes} **/
  lottery_prizes: {
    message: "Sie können pro Bestellung ein Geschenk erhalten.",
  },

  /** {@see Coupons} **/
  coupons: {
    coupon_code: "Gutscheincode",
    add_coupon: "Gutschein hinzufügen",
  },

  /** {@see AvocadoCustomerAddOrderForm} **/
  /** {@see AvocadoItemsList} **/
  /** {@see AvocadoMyOrdersList} **/
  /** {@see AvocadoBuyerFormPage} **/
  /** {@see AvocadoOrderPage} **/

  avocado: {
    not_enable: "Das Avocado-Formular ist nicht aktiviert!",
    last_update: "Letztes Update:",
    step1:
      "1. Geben Sie den Namen und die Details des Produkts ein, das Sie bestellen möchten, und klicken Sie auf die Schaltfläche Hinzufügen.",
    title_plc: "Geben Sie den Namen des Produkts ein.",
    description_plc: "Haben Sie weitere Produktbeschreibungen?",
    link_plc: "Hast du einen Link zum Produkt?",
    image: "Produktbild",
    image_msg: "Sie können das Produktbild bei Bedarf senden.",
    add_item: "Artikel hinzufügen",
    items_list: "Liste der angeforderten Produkte",
    currency_msg: "Sie müssen den Betrag dieser Bestellung mit dieser Währung bezahlen.",
    step2:
      "2. Nachdem Sie alle gewünschten Artikel hinzugefügt haben, klicken Sie auf die Schaltfläche Bestellprüfungsanfrage. In dieser Phase werden wir die Bestellung überprüfen und Sie über den Preis informieren. Wenn Sie auf diesen Link klicken, können Sie den Preis und den Zahlungslink sehen.",
    order_action: "Auftragsregistrierung",
    show_all: "Zeige alles",
    show_accepted: "Verifizierte Artikel anzeigen",
    last_orders: "Liste Ihrer letzten Bestellungen",
    pending_status: "in Prüfung",
    check_now: "Prüfe die Reihenfolge",
    add_new_order: "Neue Bestellung registrieren",
    pay_online: "online bezahlen",
    pricing_not_completed_message:
      "Ihre Bestellung wird überprüft. Ihre Bestellung wird in Kürze überprüft und bewertet und Sie können die Bestellung bezahlen.",

    delete_item_dialog: {
      title: "Artikel aus dem Warenkorb entfernen",
      message: "Möchten Sie diesen Artikel aus dem Warenkorb löschen?",
      action: "Ja, löschen",
    },

    notifications: {
      order_success: "Ihre Bestellung wurde erfolgreich aufgegeben.",
      delete_success: "Artikel gelöscht.",
    },
  },

  /** {@see HyperAddOrderForm} **/
  hyper: {
    title: "Auftragserstellung",
    message:
      "Erstellen Sie die Liste der Produkte, die Sie kaufen möchten, indem Sie den Produktcode scannen.",

    currency_msg: "Die Währung, mit der Sie bezahlen möchten.",
    order_action: "Zahlung",
    add_new_order: "Neue Bestellung",
    continue_order: "Bestellung fortsetzen",
  },

  /** {@see RowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Laden Sie das Bild des Zahlungsbelegs hoch.",
    upload_payment_receipt_done:
      "✔ Du hast das Quittungsbild bereits hochgeladen, warte auf unsere Freigabe. Wenn Sie Änderungen vornehmen müssen, können Sie das vorherige Bild durch ein neues ersetzen.",
    public_form_title: "Kontoinformationen für Überweisungen",
  },
};
