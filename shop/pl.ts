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
  surveys: ["Bardzo ubogi", "Słaby", "Normalna", "Dobry", "Doskonały"],

  /** @see SFooterSection **/
  footer: {
    map: "Mapa",
    email: "E-mail",
    phone: "Telefon",
    address: "Adres",

    copyright:
      "Wykorzystywanie treści wyłącznie w celach niekomercyjnych i w odniesieniu do źródła (link z {shop_title}). Wszelkie prawa zastrzeżone dla {shop_title}.",
    powered_by: "Obsługiwane przez",
    privacy: "Polityka prywatności",
    term_of_use: "Warunki korzystania",
    shop_app_setting: "Ustawienia sklepu i RODO",

    dialog_setting: {
      title: "Sklep Ustawienia aplikacji",
      app_list: "Lista aplikacji",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Wyprzedane",
    review_unit: "Recenzja",
    not_original: "Nieorginalny",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtr",
    native: {
      title: "Logowanie do aplikacji",
      message:
        "Ta aplikacja wymaga dostępu do informacji o Twoim koncie w sklepie. Obejmuje to dostęp do imienia i nazwiska, numeru kontaktowego, adresu, adresu e-mail, historii zamówień, składania zamówień i zamieszczania komentarzy w tym sklepie.",
      message_bold:
        "Aby wejść do tego sklepu, skorzystaj z oficjalnej aplikacji sklepu.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Sortuj według",
    title_small: "Sortuj według..",
    nothing: "Nic",
    most_views: "Większość wyświetleń",
    most_likes: "Najbardziej popularny",
    most_recent: "Najnowszy",
    most_sell: "Najlepiej sprzedający się",
    cheapest: "Najtańszy",
    most_expensive: "Najdroższy",
    only_available: "Dostępny",
    view_mode: {
      normal: "Normalna",
      grid: "Siatka",
      list: "Lista",
      insta: "Insta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Podróbka",
    action: "Aukcja",
    compare_limit: "Limit 10 pozycji",
    compare_add: "Dodaj do porównania",
    compare_be_in_list: "Na liście porównawczej",

    type: "Rodzaj",
    brand: "Marka",
    category: "Kategoria",
    discount: "Zniżka",
    track_price: "Śledź cenę",
    waiting_for_auction: "Czekasz na aukcję?",
    inform_auction: "Opowiedz mi o aukcji",
    return_in_days: "{days} Dni Zwrotu Gwarancji",
    support24h7: "Wsparcie 24 godziny 7 dni",
    support_normal: "Obsługa godzin pracy",
    original_guarantee: "Oryginalna gwarancja",
    cod_payment: "Obsługa za pobraniem",

    pros: "Plusy",
    cons: "Wady",

    external_link: "Czytaj więcej",
    notifications: {
      congratulation: "Gratulacje",
      waiting_list_add_success:
        "Powiadomimy Cię, gdy ten produkt zostanie wystawiony na aukcję.",
      waiting_list_delete_success: "Wyszedłeś z listy oczekujących na aukcję.",
    },

    offer_message: "Kup {min_quantity} Uzyskaj {percent}% zniżki na te przedmioty",
    up_to: "Do {per_order}x na zamówienie",
    get_free: "UWOLNIĆ SIĘ",
    get_off: "UZYSKAJ {percent}% ZNIŻKI",
    select_a_vendor_message: "Wybierz dostawcę.",
    product_description_header: "Przedstawiamy {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Czekam na dostępność",
    inform_me_when_available: "Czekasz na to?",
    pay_buy: "Zapłać i kup",
    quantity: "Liczyć",
    quantity_in_basket: "Przedmioty w koszyku",
    count_unit: "x",
    remove: "Usunąć",
    add_to_basket: "Dodaj do koszyka",
    buy: "Kupić",
    subscribe_now: "Zapisz się teraz",
    unsubscribe: "Anuluj subskrypcję",
    select_a_subscription_plan: "Najpierw wybierz plan!",
    manage_subscriptions: "Zarządzanie subskrypcjami",
    notifications: {
      inform_add_success: "Powiadomimy Cię, gdy będzie dostępny.",
      inform_remove_success: "Zostałeś usunięty z listy oczekujących.",
    },
    zip_pin_input: "Kod pocztowy / PIN",
    zip_pin_not_available_msg: "Niedostępne w tej lokalizacji!",
    zip_pin_placeholder: "Wybierz kod pocztowy/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Recenzja",
    spec: "Specyfikacja",
    comments: "Uwagi",
    price: "Cena £",
    rate: "Wskaźnik",
    comment: "Komentarz",
    warranty: "Gwarancja",
    return_policy: "Polityka zwrotów",
    guide: "Przewodnik",
    shipping: "Wysyłka",
    related_products_title: "Produkty powiązane",
    related_categories_title: "Odkryj w kolekcjach",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Historia zamówień",
      profile: "Mój profil",
      favorites: "Ulubione przedmioty",
      gift_cards: "Karty podarunkowe",
      return_requests: "Zwrócone zamówienia",
      basket: "Wózek sklepowy",
    },
    user_menu: {
      my_shops: "Moje sklepy",
      go_to_admin: "Zarządzaj sklepem {shop_name}",
      exit_from: "Wyloguj się {shop_name}",
      chips: "{chips} żetony",
    },
    login_to_shop: "Zaloguj się do sklepu",
    login_to_shop_short: "Zaloguj sie",
    item_in_basket_message: "{count} Ten produkt jest w Twoim koszyku.",
    search_title: "Szukaj w sklepie {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Wózek",
    basket_is_empty: "Twój koszyk jest pusty.",
    total_price: "Całkowity",
    view_basket: "Twój wózek",
    more: "Więcej ...",
    accept_and_pay: "Wymeldować się",
    items: "Rzeczy)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Odrzucony",
    table: {
      code: "Kod zamówienia",
      reserved: "Data",
      delivery_state: "Status przesyłki",
      price: "Całkowita cena",
      status: "Status płatności",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Kod zamówienia",
      items: "Rzeczy",
      reserved: "Data",
      delivery_state: "Ostatni status",
      price: "Całkowita cena",
      status: "Status płatności",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Karta podarunkowa",
      comments: "Uwagi",
      favorites: "Ulubione",
      return_requests: "Zwroty",
      addresses: "Adresy",
      profile: "profil",
      orders: "Zamówienia",
      wallets: "Portfele",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Moje portfele",
    subtitle: "Jeśli kwalifikujesz się i program cashback jest aktywny, część wartości zamówienia zostanie przelana do Twojego portfela. Możesz wykorzystać te środki przy następnym zakupie."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Saldo mojego portfela",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Zamówienie",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Zapłata",
      payment_waiting: "czekać na wypłatę",
      payment_completed: "Płatny",
      table: {
        title: "Tytuł",
        amount: "Ilość",
        description: "Opis",
      },
      total_payment: "Opłata zapłacona",
      discount: "Zniżka",
      discount_code: "Kod rabatowy",
      delivery_fee: "Koszty wysyłki",
      delivery_fee_after: "Brak opłaconej dostawy",

      total_price: "Całkowita cena przedmiotów",
      total_items_discount: "Zniżka na przedmioty",
      total_price_after_offers: "Razem po zastosowaniu ofert",
      total_order_price_before_tax: "Całkowita cena przed opodatkowaniem",

      buyer_payment: "Kwota płatności kupującego",

      payment_is_in_require_capture_message:
        "Otrzymaliśmy Twoją płatność, ale nie została jeszcze zaksięgowana.",
      settle_the_earlier_bill_first: "Najpierw ureguluj wcześniejszy rachunek!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Dostawa",
      subtitle: "Informacje o kupującym!",
      confirm_received_action: "Potwierdź odbiór produktu",
      confirm_received_info:
        "Kliknij przycisk potwierdzenia, jeśli otrzymałeś zamówienie. W razie potrzeby będziesz mógł przesłać skierowanie, jeśli otrzymasz potwierdzenie.",
      Recipient: "Odbiorca",
      bill: "Faktura",
      name: "Nazwać",
      tel: "Telefon",
      email: "E-mail",
      country: "Kraj",
      state: "Stan",
      city: "Miasto",
      address: "Adres",
      building_no: "Numer budynku",
      unit_no: "Numer jednostki",
      postal_code: "Kod pocztowy",
      description: "Opis",
      order_delivered: "Zamówienie zostało dostarczone.",
      delivery_time: "Czas dostawy",
      tracking_code: "Kod śledzenia",
      tracking_url: "Link monitorujący",

      notifications: {
        confirm_delivery: "Twoje zamówienie zostało potwierdzone.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Gwarancja oryginalności towaru",
      return: "Zwrócić",
      table: {
        product: "Nazwa produktu",
        count: "Liczyć",
        unit_price: "Cena jednostkowa",
        total_price: "Całkowita cena",
        discount: "Zniżka",
        final_price: "Cena ostateczna",
        returned: "Zwrócony",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Zwrócić",
    count_input: "Liczba zwróconych przedmiotów",
    count_input_message: "Ile przedmiotów zwracasz?",
    reason_input: "powód do powrotu",
    reason_input_message: "Wybierz powód zwrotu tego przedmiotu.",
    note_input: "Opis",
    note_input_hint: "Opisz przyczynę zwrotu..",
    note_input_message:
      "W razie potrzeby opisz powód zwrotu tego przedmiotu.",
    media_message:
      "Tutaj możesz przesłać obraz, dźwięk lub wideo produktu, aby uzyskać lepszą obsługę informacji o stanie produktu. Wybranie pliku spowoduje automatyczne wysłanie i potwierdzenie.",
    video: "Wideo",
    voice: "Głos",
    add_action: "Wyślij prośbę o zwrot",
    notifications: "Twoja prośba o zwrot została pomyślnie zarejestrowana.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Zamówienie",
    info: {
      title: "Zakupiony produkt wirtualny",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Moje prywatne dane",
    name: "Nazwać",
    email: "E-mail",
    tel: "Telefon",
    identity: "Uwierzytelnianie",
    success_kyc: "Zweryfikowany KYC",
    no_kyc: "Brak KYC",
    club: "Poziom użytkownika",
    subscription: "Subskrypcja wiadomości",
    leave_shop: "Opuść ten sklep i usuń poziom wszystkich klientów",
    leave_shop_action: "Opuść sklep",
    edit_personal_info: "Edytuj dane osobowe",
    leave_dialog: {
      title: "Opuść sklep",
      message:
        "Rezygnacja z subskrypcji tego sklepu nie spowoduje usunięcia informacji i zapisów dotyczących zamówienia.",
      action: "Wyjechać",
    },
    notifications: {
      leave_success: "Opuść sklep",
    },
    club_table: {
      discount: "Zniżka",
      limit: "Limit",
      currency: "Waluta",
      free_shipping: "Darmowa dostawa",
    },

    my_profile: {
      title: "Mój profil",
      subtitle: "To są informacje mojego profilu klienta dla sklepu.",
      edit_action: "Edytuj profil"
    },
    subscribe_status: {
      subscribed: "Subskrybuję otrzymywanie najnowszych wiadomości i promocji e-mailem.",
      unsubscribed: "Nie subskrybuję otrzymywania wiadomości ani promocji e-mailem."
    },
    my_club: {
      subtitle: "Mój poziom klubowy i jego korzyści."
    },
    kyc: {
      subtitle: "To są moje globalne informacje identyfikacyjne."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Wózek sklepowy",
    total_price: "Całkowita kwota",
    shipping: "Koszty wysyłki",
    free_shipping: "Darmowa dostawa",
    shipping_not_pay: "Nie zawarty",
    total_discount: "Całkowity rabat",
    customer_club: "Członek Klubu Klienta",
    customer_club_discount: "Rabat dla członków",
    final_price: "Płatność końcowa",
    lead_time: "Czas przygotowania",
    lead_time_unit: "Godzina",
    receive_time: "Preferowany czas dostawy",
    select_time: "Wybierz czas dostawy",
    no_select_time: "Tak szybko, jak to możliwe",
    transportation_type: "Rodzaj wysyłki",
    days_input: "Dni dostawy",
    days_input_label: "Dni",
    days_input_no_data: "Wybierz co najmniej jeden dzień",
    time_input: "Czas dostawy",
    time_input_label: "Dostawa w",
    time_input_label_no_data: "Wybierz co najmniej jeden przedział czasu",
    support_cod: "Płatność gotówką przy odbiorze",
    not_support_cod: "Nie można zapłacić lokalnie!",
    final_confirm_action: "Ostateczne potwierdzenie zamówienia",
    pay_and_complete_action: "Zapłać teraz",
    pre_confirm_service: "Złożyć wniosek",
    cross_selling_discount: "Rabat na kolekcję",

    errors: {
      no_address: "Wybierz adres, na który chcesz wysłać zamówienie.",
      no_phone: "Wprowadź numer kontaktowy do koordynowania odbioru towaru.",
      select_billing_country: "Wybierz kraj rozliczenia",
      select_billing_state: "Wybierz swój region podatkowy",
    },
    same_billing_address: "Informacje rozliczeniowe takie same jak informacje o odbiorcy",
    same_billing_address_desc:
      "Adres rozliczeniowy jest taki sam jak adres wysyłki.",
    custom_billing_info: "Różne informacje rozliczeniowe",
    custom_billing_info_desc:
      "Możesz podać swój NIP i ustawić inny adres rozliczeniowy.",
    basket_empty: "Koszyk jest pusty",
    extra_shipping_count: "Otrzymasz {count} paczek.",
    select_location_error:
      "Znajdź na mapie miejsce odbioru przesyłki i kliknij wskaźnik na środku mapy, aby ustalić dokładny adres odbiorcy.",

    billing_business_desc: "Jest to konto firmowe z numerem NIP.",
    billing_personal_desc: "To konto osobiste.",

    no_billing_title: "Brak rozliczeń",
    no_billing_desc: "Pozostaw adres rozliczeniowy pusty.",

    can_pay_cod_message:"Możesz zapłacić za to zamówienie gotówką przy dostawie.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Godzina",
    count_input: "Liczyć",

    price_changed: "Cena się zmieniła. Nowa cena:",
    offer: "Zdobądź {count}x przedmiot o {percent}% zniżki",
    offer_free: "Uzyskaj {count}x za darmo",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Moje adresy",
    subtitle:"Tutaj zobaczysz zapisane adresy i łatwo dodasz nowy.",
    new_action: "Nowy adres",
    receiver: "Odbiorca",
    address: "Adres",
    building_no: "tablica rejestracyjna",
    building_unit: "jednostka",
    postcode: "Kod pocztowy",
    tel: "Telefon",
    description: "Notatka",

    map: {
      title: "Moje adresy",
      confirm: "Rejestracja adresu",
      address_type: "Adres",
      receptor_type: "Odbiorca",
    },
    add_dialog: {
      title: "Nowa nazwa adresu",
      message: "Wpisz tytuł nowego adresu.",
      address_name_input: "Adres (wymagane)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Prośby o zwrot",
    subtitle:"Tutaj zobaczysz swoje zgłoszenia zwrotu. W przypadku produktów objętych polityką zwrotów możesz wysłać zgłoszenie zwrotu na stronie zamówienia.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Lista życzeń",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Moje komentarze",
    first_post: "Pierwszy post",
    last_edit: "Ostatnia edycja",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Moje karty podarunkowe",
    add_action: "Dodaj kartę",
    add_card_dialog: {
      title: "Dodaj kartę podarunkową",
      message:
        "Wprowadź numer karty i kod zabezpieczający. Karta podarunkowa zostanie dodana do Twojego konta.",
      card_number_input: "Numer karty",
      info: "Uwaga: Kupując w sklepie, zobaczysz opcję płatności kartami podarunkowymi. Wybierając tę opcję, kwota Twojego salda doładowania zostanie odjęta od kwoty zamówienia.",
      add_action: "Rejestracja karty",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Porównaj produkt",
    action_button: "Porównywać",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Do listy porównawczej nie dodano żadnych produktów.",
      price: "Cena £",
      type: "Rodzaj",
      brand: "Marka",
      warranty: "Gwarancja",
      variants_comparison: "Porównaj warianty produktów",
      spec: "Specyfikacja techniczna",
      pros: "Plusy",
      cons: "Wady",
      user_review: "Komentarze użytkowników",
      rating: "Ocena",
      rating_count: "Liczba recenzji",
      info: "Możesz udostępnić tę tabelę porównawczą produktów swoim znajomym, wysyłając poniższy link lub uzyskać do niej dostęp później, zapisując ten link.",
      copy_action: "Skopiuj link porównawczy",
      check_list: ["tak", "Ma"],
      cross_list: ["Nie", "Nie ma"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Tylko oryginały",
    only_has_discount: "Tylko ze zniżką",
    price_range: "Przedział cenowy",
    brands: "Marka",
    main_shop_page: "Strona główna sklepu",
    home: "Dom",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Drogi {user}, Kupiłeś ten produkt. Co myślisz o tym produkcie?",
    notification: {
      title: "Gratulacje",
      message: "Twój komentarz został zarejestrowany.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blog",
    add_new_blog: "Nowy blog",
    popular: "Popularny",
    topics: "Tematy",
    suggestions: "Propozycje",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "O nas",
    terms: "Warunki korzystania",
    privacy: "Polityka prywatności",
    contact_us: "Skontaktuj się z nami",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Formularz kontaktowy",
    name: "Nazwać",
    email: "E-mail",
    phone: "Telefon",
    message: "Wiadomość",
    notifications: {
      success: "Twoja wiadomość została wysłana.",
    },
    submitted_title: "Dziękujemy za skontaktowanie się z nami!",
    submitted_message:
      "Dziękujemy za poświęcony czas na skontaktowanie się z nami. Twoja wiadomość została otrzymana i nasz zespół obecnie ją przegląda. Odpowiemy tak szybko, jak to możliwe i dziękujemy za cierpliwość w tym czasie. Twoje zainteresowanie i opinie są dla nas ważne, dlatego dokładamy wszelkich starań, aby zapewnić Ci najlepsze możliwe wsparcie.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Potwierdzenie płatności",
      payment_success: "Płatność zakończona.",
      buy_title: "Kupić",
      pay_by_giftcards: "Twoje zamówienie zostało opłacone kartą podarunkową.",
      free_order: "Twoje zamówienie jest bezpłatne.",
      pay_by_cod: "Twoje zamówienie zostało dodane jako płatność przy odbiorze.",
      pay_by_dir:
        "Twoje zamówienie zostało pomyślnie dodane. Teraz możesz zapłacić przelewem bezpośrednim, a następnie przesłać potwierdzenie wpłaty na stronie zamówienia.",
      pay_title: "Zapłata",
      qr_code_payment: "Utworzono adres QR kodu płatności.",
      connecting_to_online_gateway: "Łączenie się z bramką płatności online.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Pozostało do początku",
    title_between_start_end: "Pozostał do końca",
    title_after_end: "Skończone",
    title_no_start_end: "Bez terminu!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Możesz otrzymać jeden prezent na zamówienie.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kod kuponu",
    add_coupon: "Dodaj kupon",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Forma awokado nie jest włączona!",
    last_update: "Ostatnia aktualizacja:",
    step1:
      "1. Wpisz nazwę i dane produktu, który chcesz zamówić i kliknij przycisk Dodaj.",
    title_plc: "Wpisz nazwę produktu.",
    description_plc: "Masz więcej opisów produktów?",
    link_plc: "Masz link do produktu?",
    image: "obraz produktu",
    image_msg: "W razie potrzeby możesz wysłać zdjęcie produktu.",
    add_item: "Dodaj Przedmiot",
    items_list: "Lista żądanych produktów",
    currency_msg: "Musisz zapłacić kwotę tego zamówienia w tej walucie.",
    step2:
      "2. Po dodaniu wszystkich żądanych pozycji kliknij przycisk prośby o sprawdzenie zamówienia. Na tym etapie zapoznamy się z zamówieniem i poinformujemy o cenie. Klikając w ten link, będziesz mógł zobaczyć cenę i link do płatności.",
    order_action: "Rejestracja zamówienia",
    show_all: "Pokaż wszystko",
    show_accepted: "Pokaż potwierdzone przedmioty",
    last_orders: "Lista Twoich ostatnich zamówień",
    pending_status: "w trakcie przeglądu",
    check_now: "Sprawdź zamówienie",
    add_new_order: "Złóż nowe zamówienie",
    pay_online: "Zapłać online",
    pricing_not_completed_message:
      "Twoje zamówienie jest sprawdzane. Twoje zamówienie zostanie wkrótce sprawdzone i wycenione, a Ty będziesz mógł zapłacić za zamówienie.",

    select_address_message:
      "Podaj swój adres, a następnie możesz złożyć zamówienie.",

    delete_item_dialog: {
      title: "Usuń przedmiot z koszyka",
      message: "Czy chcesz usunąć ten przedmiot z koszyka?",
      action: "Tak, usuń",
    },

    notifications: {
      order_success: "Twoje zamówienie zostało pomyślnie złożone.",
      delete_success: "Pozycja została usunięta.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Tworzenie zamówienia",
    message:
      "Utwórz listę produktów, które chcesz kupić, skanując kod produktu.",

    currency_msg: "Waluta, którą chcesz zapłacić.",
    order_action: "Zapłata",
    add_new_order: "Nowe zamówienie",
    continue_order: "Kontynuuj zamówienie",

    delete_item_dialog: {
      title: "Usuń przedmiot z koszyka",
      message: "Czy chcesz usunąć ten przedmiot z koszyka?",
      action: "Tak, usuń",
    },
    notifications: {
      order_success: "Twoje zamówienie zostało pomyślnie złożone.",
      delete_success: "Pozycja została usunięta.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Prześlij obraz dowodu wpłaty.",
    upload_payment_receipt_done:
      "✔ Przesłałeś już obraz paragonu, poczekaj na naszą akceptację. Jeśli musisz zmienić, możesz zastąpić poprzedni obraz nowym.",
    public_form_title: "Informacje o koncie do przelewu",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Lista rzeczy do zrobienia",
      message: "Określ tytuły pracy, którą chcesz wykonać, i poinformuj kupującego o postępach.",
    },
    booking: {
      title: "Rezerwacja / Rezerwacja",
      message: "To zamówienie zostanie zrealizowane w określonym czasie, klient wybrał żądany okres, jeśli chcesz dokonać jakichkolwiek zmian w wybranym okresie, poinformuj o tym klienta.",

      selected_checkin: "Wybrana odprawa przez klienta",
      selected_checkout: "Wybrane wymeldowanie przez klienta",
      change_days_question:
        "Czy musisz zmienić w wybrane przez klienta dni?",
      show_calendar: "Pokaż kalendarz zamówień",
    },
    pricing: {
      title: "cennik",
      message: "Ile kosztuje ta usługa?",
    },
    subscription: {
      title: "Subskrypcja",
      message:
        "Okres subskrypcji możesz wybrać, kupując tę usługę codziennie. Powiadom kupującego, jeśli chcesz zmienić wprowadzone wcześniej wartości domyślne.",
      duration: "Okres subskrypcji",
    },
    charge: {
      title: "Opłata",
      message:
        "Określiłeś opłatę za ten przedmiot. Możesz zmienić kwotę opłaty za przedmiot zakupiony przez klienta.",
      charge: "Opłata",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Czekam na sprawdzenie dostępu...",
    no_access_message:
      "Niestety nie masz dostępu do naszego sklepu.<br/> Proszę skontaktuj się z nami.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Podziel się kolejnością",
    title: "Podziel się tym zamówieniem z innymi.",
    message:
      "To bezpieczny link, udostępniaj go tylko tym, których znasz. Każdy, kto ma ten link, może zduplikować Twoje zamówienie i zobaczyć wybrany adres. Będzie zawierać informacje o Twoim aktualnym koszyku.",
    valid_period: "Ten link wygaśnie po 48 godzinach.",
    import_order_action: "Importuj zamówienie",
    retrieve_dialog_title: "Pobierz zamówienie zewnętrzne",
    address_included: "Udostępnij elementy koszyka + adres",
    address_excluded: "Udostępnij tylko elementy koszyka",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Ceny",
    inventory: "Spis",
    discount: "Zniżka",
  },

  rating: {
    product_rating_message:
      "Ten produkt uzyskał ocenę {rate} na 5 możliwych gwiazdek i został oceniony przez {rate_count} osób.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Badać!",
      same_tags_subtitle: "Znajdź więcej niezwykłych powiązanych przedmiotów.",
      same_category_subtitle: "Znajdź więcej niezwykłych przedmiotów w tej kategorii.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Zamów {product} z",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Zobacz sklep {vendor}",
  },

  login: {
    welcome: "Witamy",
  },


};
