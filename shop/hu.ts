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
  surveys: ["Nagyon rossz", "Szegény", "Normál", "Jó", "Kiváló"],

  /** @see SFooterSection **/
  footer: {
    map: "Térkép",
    email: "E-mail",
    phone: "Telefon",
    address: "Cím",

    copyright:
      "A tartalom csak nem kereskedelmi célokra és a forrásra való hivatkozással használható (link a következővel: {shop_title}). Minden jog fenntartva a(z) {shop_title} számára.",
    powered_by: "Működteti",
    privacy: "Adatvédelmi irányelvek",
    term_of_use: "Használati feltételek",
    shop_app_setting: "Boltbeállítások és GDPR",

    dialog_setting: {
      title: "Shop alkalmazások beállítása",
      app_list: "Alkalmazások listája",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Elkelt",
    review_unit: "Felülvizsgálat",
    not_original: "Nem eredeti",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Szűrő",
    native: {
      title: "Alkalmazás bejelentkezés",
      message:
        "Ez az alkalmazás hozzáférést igényel az áruházi fiókadataihoz. Ez magában foglalja a névhez, kapcsolattartási számhoz, címhez, e-mail címhez, rendelési előzményekhez, rendelésekhez és megjegyzések közzétételéhez való hozzáférést az üzletben.",
      message_bold:
        "Ügyeljen arra, hogy a hivatalos áruház alkalmazást használja az áruházba való belépéshez.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Rendezés",
    title_small: "Rendezés..",
    nothing: "Semmi",
    most_views: "A legtöbb nézet",
    most_likes: "Legnepszerubb",
    most_recent: "Legújabb",
    most_sell: "Legkelendőbb",
    cheapest: "Legolcsóbb",
    most_expensive: "Legdrágább",
    only_available: "Elérhető",
    view_mode: {
      normal: "Normál",
      grid: "Rács",
      list: "Lista",
      insta: "Insta stílus",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Hamisítvány",
    action: "Árverés",
    compare_limit: "10 tétel limit",
    compare_add: "Hozzáadás az összehasonlításhoz",
    compare_be_in_list: "Összehasonlító listában",

    type: "típus",
    brand: "Márka",
    category: "Kategória",
    discount: "Kedvezmény",
    track_price: "A pálya árát",
    waiting_for_auction: "Várod az aukciót?",
    inform_auction: "Mesélj az aukcióról",
    return_in_days: "{days} nap garanciális visszaküldés",
    support24h7: "Támogatás 24 óra 7 nap",
    support_normal: "Munkaidő támogatás",
    original_guarantee: "Eredeti garancia",
    cod_payment: "Utánvétes támogatás",

    pros: "Profik",
    cons: "Hátrányok",

    external_link: "Olvass tovább",
    notifications: {
      congratulation: "Gratulálunk",
      waiting_list_add_success:
        "Értesítjük, ha ezt a terméket elárverezzük.",
      waiting_list_delete_success: "Kilépett az aukciós várólistáról.",
    },

    offer_message: "{min_quantity} vásárlás {percent}% kedvezményt kap ezekre a termékekre",
    up_to: "Rendelésenként legfeljebb {per_order}x",
    get_free: "INGYENES",
    get_off: "{percent}% KEDVEZMÉNYT KERESZT",
    select_a_vendor_message: "Kérjük, válasszon szállítót.",
    product_description_header: "Bemutatkozik a {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Várakozás az elérhetőségre",
    inform_me_when_available: "Erre vársz?",
    pay_buy: "Fizessen és vásároljon",
    quantity: "Számol",
    quantity_in_basket: "Tételek a kosárban",
    count_unit: "x",
    remove: "Távolítsa el",
    add_to_basket: "Kosárba",
    buy: "megvesz",
    subscribe_now: "Iratkozz fel most",
    unsubscribe: "Leiratkozás",
    select_a_subscription_plan: "Először válasszon tervet!",
    manage_subscriptions: "Előfizetések kezelése",
    notifications: {
      inform_add_success: "Értesítjük, ha elérhető lesz.",
      inform_remove_success: "Lekerültél a várólistáról.",
    },
    zip_pin_input: "Irányítószám / PIN",
    zip_pin_not_available_msg: "Ezen a helyen nem érhető el!",
    zip_pin_placeholder: "Válasszon irányítószámot/PIN-kódot...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Felülvizsgálat",
    spec: "Specifikáció",
    comments: "Hozzászólások",
    price: "Ár",
    rate: "Mérték",
    comment: "Megjegyzés",
    warranty: "Garancia",
    return_policy: "Visszaküldési szabályzat",
    guide: "Útmutató",
    shipping: "Szállítás",
    related_products_title: "Kapcsolódó termékek",
    related_categories_title: "Fedezze fel a gyűjteményekben",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Megrendelések története",
      profile: "A profilom",
      favorites: "Kedvenc tételek",
      gift_cards: "Ajándékkártya",
      return_requests: "Visszaküldött rendelések",
      basket: "Bevásárlókocsi",
    },
    user_menu: {
      my_shops: "Saját üzletek",
      go_to_admin: "{shop_name} kezelése",
      exit_from: "Kijelentkezés {shop_name}",
      chips: "{chips} Zseton",
    },
    login_to_shop: "Bejelentkezés az Áruházba",
    login_to_shop_short: "Belépés",
    item_in_basket_message: "{count} Ez a termék a kosarában van.",
    search_title: "Keresés a(z) {shop_name} üzletben",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Kosár",
    basket_is_empty: "Az Ön kosara üres.",
    total_price: "Teljes",
    view_basket: "Az Ön kosara",
    more: "Több ...",
    accept_and_pay: "Pénztár",
    items: "elem(ek)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Elutasítva",
    table: {
      code: "Rendelési kód",
      reserved: "Dátum",
      delivery_state: "Kiszállítás állapota",
      price: "Teljes ár",
      status: "Fizetési állapot",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Rendelési kód",
      items: "Tételek",
      reserved: "Dátum",
      delivery_state: "Legújabb állapot",
      price: "Teljes ár",
      status: "Fizetési állapot",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Ajándékkártya",
      comments: "Hozzászólások",
      favorites: "Kedvencek",
      return_requests: "Visszatér",
      addresses: "Címek",
      profile: "profil",
      orders: "Megrendelések",
      wallets: "Pénztárcák",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Pénztárcáim",
    subtitle: "Ha jogosult rá, és aktív egy pénzvisszatérítési program, a rendelése egy része jóváírásra kerül a pénztárcájában. Ezeket az összegeket a következő vásárlásánál használhatja fel."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:'Pénztárcám egyenlege',
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Rendelés",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Fizetés",
      payment_waiting: "fizetésre vár",
      payment_completed: "Fizetett",
      table: {
        title: "Cím",
        amount: "Összeg",
        description: "Leírás",
      },
      total_payment: "Kifizetett összeg",
      discount: "Kedvezmény",
      discount_code: "Kedvezményes kód",
      delivery_fee: "Szállítási költség",
      delivery_fee_after: "Nincs kiszállítás fizetve",

      total_price: "Teljes tétel ára",
      total_items_discount: "Tételek kedvezmény",
      total_price_after_offers: "Az ajánlatok alkalmazása után összesen",
      total_order_price_before_tax: "Adózás előtti teljes ár",

      buyer_payment: "Vevő fizetési összege",

      payment_is_in_require_capture_message:
        "Megkaptuk a fizetését, de még nem véglegesítettük.",
      settle_the_earlier_bill_first: "Előbb rendezze a korábbi számlát!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Szállítás",
      subtitle: "Vevői információk",
      confirm_received_action: "Erősítse meg a termék átvételét",
      confirm_received_info:
        "Kattintson a megerősítő gombra, ha megkapta a rendelést. Ha szükséges, beutalót küldhet, ha visszaigazolást kap.",
      Recipient: "Befogadó",
      bill: "Számla",
      name: "Név",
      tel: "Telefon",
      email: "E-mail",
      country: "Ország",
      state: "Állapot",
      city: "Város",
      address: "Cím",
      building_no: "Épületszám",
      unit_no: "Egység szám",
      postal_code: "Irányítószám",
      description: "Leírás",
      order_delivered: "A rendelés kézbesítve.",
      delivery_time: "Szállítási idő",
      tracking_code: "Azonosító kód",
      tracking_url: "Nyomkövetési URL",

      notifications: {
        confirm_delivery: "Megrendelését visszaigazoltuk.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Garancia az áru eredetiségére",
      return: "Visszatérés",
      table: {
        product: "termék név",
        count: "Számol",
        unit_price: "Egységár",
        total_price: "Teljes ár",
        discount: "Kedvezmény",
        final_price: "Végső ár",
        returned: "Visszatért",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Visszatérés",
    count_input: "A visszaküldött termékek száma",
    count_input_message: "Hány terméket küld vissza?",
    reason_input: "A visszatérés oka",
    reason_input_message: "Válassza ki a cikk visszaküldésének okát.",
    note_input: "Leírás",
    note_input_hint: "Írja le a visszaküldés okát..",
    note_input_message:
      "Szükség esetén írja le a cikk visszaküldésének okát.",
    media_message:
      "Ide töltheti fel a termék képét, hangját vagy videóját, hogy jobb támogatást kapjon a termékállapot-információkhoz. A fájl kiválasztása automatikusan elküldi és megerősíti.",
    video: "Videó",
    voice: "Hang",
    add_action: "Visszaküldési kérelem küldése",
    notifications: "Visszaküldési kérelmét sikeresen regisztráltuk.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Rendelés",
    info: {
      title: "Vásárolt virtuális termék",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Személyes adataim",
    name: "Név",
    email: "E-mail",
    tel: "Telefon",
    identity: "Hitelesítés",
    success_kyc: "Ellenőrzött KYC",
    no_kyc: "Nincs KYC",
    club: "Felhasználói szint",
    subscription: "Hírek előfizetés",
    leave_shop: "Hagyja el ezt az üzletet, és távolítsa el az összes vásárló szintjét",
    leave_shop_action: "Hagyja el a boltot",
    edit_personal_info: "Személyes adatok szerkesztése",
    leave_dialog: {
      title: "Hagyja el a boltot",
      message:
        "Az áruházra való leiratkozás nem törli a rendelési adatait és nyilvántartásait.",
      action: "Elhagy",
    },
    notifications: {
      leave_success: "Hagyja el a boltot",
    },
    club_table: {
      discount: "Kedvezmény",
      limit: "Határ",
      currency: "Valuta",
      free_shipping: "Ingyenes szállítás",
    },

    my_profile: {
      title: "Saját profilom",
      subtitle: "Ez az üzlethez tartozó ügyfélprofil-információm.",
      edit_action: "Profil szerkesztése"
    },
    subscribe_status: {
      subscribed: "Feliratkoztam a legfrissebb hírek és promóciók e-mailes fogadására.",
      unsubscribed: "Nem iratkoztam fel hírek vagy promóciók e-mailes fogadására."
    },
    my_club: {
      subtitle: "Klubszintem és annak előnyei."
    },
    kyc: {
      subtitle: "Ez a globális azonosítási információm."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Bevásárlókocsi",
    total_price: "Teljes összeg",
    shipping: "Szállítási költség",
    free_shipping: "Ingyenes szállítás",
    shipping_not_pay: "Nem tartalmazza",
    total_discount: "Teljes kedvezmény",
    customer_club: "Ügyfél Klubtag",
    customer_club_discount: "Tagi kedvezmény",
    final_price: "Végkielégítés",
    lead_time: "Felkészülési idő",
    lead_time_unit: "Óra",
    receive_time: "Előnyben részesített szállítási idő",
    select_time: "Válassza a Szállítási idő lehetőséget",
    no_select_time: "A lehető leghamarabb",
    transportation_type: "Szállítási típus",
    days_input: "Szállítási napok",
    days_input_label: "Napok",
    days_input_no_data: "Válasszon ki legalább egy napot",
    time_input: "Szállítási idő",
    time_input_label: "Szállítás a",
    time_input_label_no_data: "Válasszon ki legalább egy időintervallumot",
    support_cod: "Utánvétes fizetés",
    not_support_cod: "Helyben nem lehet fizetni!",
    final_confirm_action: "Megrendelés végleges visszaigazolása",
    pay_and_complete_action: "Fizess most",
    pre_confirm_service: "Benyújtási kérelem",
    cross_selling_discount: "Gyűjteményi kedvezmény",

    errors: {
      no_address: "Válassza ki azt a címet, amelyre a rendelést ki akarja küldeni.",
      no_phone: "Adjon meg egy elérhetőségi számot az áru átvételének koordinálásához.",
      select_billing_country: "Válassza ki a számlázási országot",
      select_billing_state: "Válassza ki adózási régióját",
    },
    same_billing_address: "Számlázási adatok megegyeznek a Címzett adataival",
    same_billing_address_desc:
      "A számlázási cím megegyezik a szállítási címmel.",
    custom_billing_info: "Különböző számlázási adatok",
    custom_billing_info_desc:
      "Megadhatja az adószámát, és beállíthat egy másik címet a számlázáshoz.",
    basket_empty: "A kosár üres",
    extra_shipping_count: "{count} csomagot fog kapni.",
    select_location_error:
      "Keresse meg a térképen a küldemény átvételének helyét, és kattintson a térkép közepén található jelzőre a címzett pontos címének meghatározásához.",

    billing_business_desc: "Ez egy üzleti számla adószámmal.",
    billing_personal_desc: "Ez egy személyes fiók.",

    no_billing_title: "Nincs számlázás",
    no_billing_desc: "Hagyja üresen a számlázási címet.",

    can_pay_cod_message:"Ezt a rendelést kiszállításkor készpénzzel is kifizetheti.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Óra",
    count_input: "Számol",

    price_changed: "Az ár változott. új ár:",
    offer: "Szerezzen {count}x tételt {percent}%-kal",
    offer_free: "{count}x ingyenes",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Saját címek",
    subtitle:"Itt megtekintheti mentett címeit, és egyszerűen hozzáadhat újat.",
    new_action: "Új cím",
    receiver: "Címzett",
    address: "Cím",
    building_no: "rendszámtábla",
    building_unit: "Mértékegység",
    postcode: "Irányítószám",
    tel: "Telefon",
    description: "jegyzet",

    map: {
      title: "Saját címek",
      confirm: "Cím regisztráció",
      address_type: "Cím",
      receptor_type: "Befogadó",
    },
    add_dialog: {
      title: "Új cím neve",
      message: "Adja meg az új cím címét.",
      address_name_input: "Cím (kötelező)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Visszaküldési kérések",
    subtitle:"Itt megtekintheti visszaküldési kérelmeit. Visszaküldési szabályzattal rendelkező tételeknél a rendelési oldalon küldhet be visszaküldési kérelmet.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Kívánság lista",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Saját megjegyzéseim",
    first_post: "Első poszt",
    last_edit: "Utolsó szerkesztés",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Ajándékkártyáim",
    add_action: "Kártya hozzáadása",
    add_card_dialog: {
      title: "Adjon hozzá ajándékkártyát",
      message:
        "Adja meg a kártya számát és a biztonsági kódot. Ajándékkártya kerül hozzáadásra a fiókjához.",
      card_number_input: "Kártyaszám",
      info: "Megjegyzés: Az üzletben történő vásárláskor megjelenik az ajándékkártyás fizetés lehetősége. Ha ezt a lehetőséget választja, a feltöltési egyenleg összege levonásra kerül a rendelés összegéből.",
      add_action: "Kártya regisztráció",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Termék összehasonlítása",
    action_button: "Hasonlítsa össze",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Egyetlen termék sem került fel az összehasonlító listára.",
      price: "Ár",
      type: "típus",
      brand: "Márka",
      warranty: "Garancia",
      variants_comparison: "Hasonlítsa össze a termékváltozatokat",
      spec: "Műszaki adatok",
      pros: "Profik",
      cons: "Hátrányok",
      user_review: "Felhasználói megjegyzések",
      rating: "Értékelés",
      rating_count: "Vélemények száma",
      info: "Ezt a termék-összehasonlító táblázatot megoszthatja ismerőseivel az alábbi link elküldésével, vagy később elérheti a link elmentésével.",
      copy_action: "Összehasonlító hivatkozás másolása",
      check_list: ["Igen", "Van"],
      cross_list: ["Nem", "Nem"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Csak eredetiek",
    only_has_discount: "Csak kedvezményes",
    price_range: "Árkategória",
    brands: "Márka",
    main_shop_page: "Az üzlet főoldala",
    home: "itthon",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Kedves {user}! Ön megvásárolta ezt a terméket. Mit gondol erről a termékről?",
    notification: {
      title: "Gratulálok",
      message: "Megjegyzését rögzítettük.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blog",
    add_new_blog: "Új Blog",
    popular: "Népszerű",
    topics: "Témák",
    suggestions: "Javaslatok",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Rólunk",
    terms: "Használati feltételek",
    privacy: "Adatvédelmi irányelvek",
    contact_us: "Lépjen kapcsolatba velünk",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Lépjen kapcsolatba velünk űrlap",
    name: "Név",
    email: "E-mail",
    phone: "Telefon",
    message: "Üzenet",
    notifications: {
      success: "Üzenetét elküldtük.",
    },
    submitted_title: "Köszönjük, hogy megkeresett minket!",
    submitted_message:
      "Nagyra értékeljük, hogy időt szakított velünk kapcsolatba. Üzenetét megkaptuk, és csapatunk jelenleg vizsgálja azt. A lehető legrövidebb időn belül válaszolunk, és köszönjük az eddigi türelmüket. Érdeklődése és visszajelzése fontos számunkra, és elkötelezettek vagyunk amellett, hogy a lehető legjobb támogatást nyújtsuk Önnek.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Fizetési visszaigazolás",
      payment_success: "Fizetés befejeződött.",
      buy_title: "megvesz",
      pay_by_giftcards: "Megrendelését ajándékkártyával fizették ki.",
      free_order: "Megrendelése ingyenes.",
      pay_by_cod: "Megrendelését utánvétesként adtuk hozzá.",
      pay_by_dir:
        "Megrendelése sikeresen hozzáadva. Most már közvetlen pénzátutalással is fizethet, majd feltöltheti a fizetési bizonylatot a rendelési oldalon.",
      pay_title: "Fizetés",
      qr_code_payment: "Fizetési QR-kód cím létrehozva.",
      connecting_to_online_gateway: "Csatlakozás az online fizetési átjáróhoz.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Maradt az elején",
    title_between_start_end: "A végére maradt",
    title_after_end: "Befejezett",
    title_no_start_end: "Időtartam nélkül!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Megrendelésenként egy ajándékot kaphat.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kupon kód",
    add_coupon: "Kupon hozzáadása",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Az avokádó forma nincs engedélyezve!",
    last_update: "Utolsó frissítés:",
    step1:
      "1. Adja meg a megrendelni kívánt termék nevét és adatait, majd kattintson a Hozzáadás gombra.",
    title_plc: "Adja meg a termék nevét.",
    description_plc: "Van több termékleírásod?",
    link_plc: "Van linked a termékhez?",
    image: "Termék kép",
    image_msg: "Igény esetén a termék képét is elküldheti.",
    add_item: "Elem hozzáadása",
    items_list: "A kért termékek listája",
    currency_msg: "Ebben a pénznemben kell kifizetnie a rendelés összegét.",
    step2:
      "2. Az összes kívánt tétel hozzáadása után kattintson a rendelés-ellenőrzés kérése gombra. Ebben a szakaszban felülvizsgáljuk a rendelést, és tájékoztatjuk Önt az árról. Erre a linkre kattintva megtekintheti az árat és a fizetési linket.",
    order_action: "Rendelés regisztráció",
    show_all: "Mutasd az összeset",
    show_accepted: "Megerősített elemek megjelenítése",
    last_orders: "Legutóbbi rendeléseinek listája",
    pending_status: "Felülvizsgálat alatt",
    check_now: "Ellenőrizze a rendelést",
    add_new_order: "Készítsen új rendelést",
    pay_online: "Fizessen online",
    pricing_not_completed_message:
      "Megrendelése felülvizsgálat alatt áll. Megrendelését hamarosan felülvizsgáljuk és árlistázzuk, és Ön ki tudja fizetni a rendelést.",

    select_address_message:
      "Kérjük, adja meg címét, és már tudja leadni a rendelést.",

    delete_item_dialog: {
      title: "Távolítsa el a tételt a bevásárlókosárból",
      message: "Törli ezt a terméket a kosárból?",
      action: "Igen, törölni",
    },

    notifications: {
      order_success: "Megrendelése sikeresen feladásra került.",
      delete_success: "Elem törölve.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Rendelés létrehozása",
    message:
      "A termékkód beolvasásával hozza létre a megvásárolni kívánt termékek listáját.",

    currency_msg: "A pénznem, amellyel fizetni szeretne.",
    order_action: "Fizetés",
    add_new_order: "Új rend",
    continue_order: "Rendelés folytatása",

    delete_item_dialog: {
      title: "Távolítsa el a tételt a bevásárlókosárból",
      message: "Törli ezt a terméket a kosárból?",
      action: "Igen, törölni",
    },
    notifications: {
      order_success: "Megrendelése sikeresen feladásra került.",
      delete_success: "Elem törölve.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Töltse fel a fizetési bizonylat képét.",
    upload_payment_receipt_done:
      "✔ Már feltöltötte a nyugta képét, várja meg jóváhagyásunkat. Ha módosítani kell, lecserélheti az előző képet egy újra.",
    public_form_title: "Számlainformációk pénzátutaláshoz",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Feladatlista",
      message: "Adja meg az elvégezni kívánt munka címét, és tájékoztassa a vevőt, hogy mennyit haladt előre.",
    },
    booking: {
      title: "Foglalás / Foglalás",
      message: "Ez a rendelés egy meghatározott időpontban kerül feldolgozásra, az ügyfél kiválasztotta a kívánt időszakot, ha a kiválasztott időszakban bármilyen változtatást szeretne végrehajtani, jelezze a vásárlónak.",

      selected_checkin: "Az ügyfél által kiválasztott bejelentkezés",
      selected_checkout: "Az ügyfél által kiválasztott kijelentkezés",
      change_days_question:
        "Változtatni kell az ügyfél által kiválasztott napokon?",
      show_calendar: "Megrendelési naptár megjelenítése",
    },
    pricing: {
      title: "Árazás",
      message: "Mennyit kérsz ezért a szolgáltatásért?",
    },
    subscription: {
      title: "Feliratkozás",
      message:
        "Az előfizetési időszakot a szolgáltatás napi megvásárlásával választhatja ki. Tájékoztassa a vásárlót, ha módosítani szeretné a már megadott alapértelmezett értékeket.",
      duration: "Előfizetési időszak",
    },
    charge: {
      title: "Díj",
      message:
        "Ön díjat adott meg ehhez a tételhez. Módosíthatja az ügyfél által vásárolt tétel díjának összegét.",
      charge: "Díj",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Várakozás a hozzáférés ellenőrzésére...",
    no_access_message:
      "Sajnos Ön nem fér hozzá üzletünkhöz.<br/> Kérjük, lépjen kapcsolatba velünk.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Rendelés megosztása",
    title: "Oszd meg ezt a megrendelést másokkal.",
    message:
      "Ez egy biztonságos link, csak azokkal ossza meg, akiket ismer. A link birtokában mindenki megismételheti megrendelését, és láthatja a kiválasztott címet. Információkat tartalmaz az aktuális kosaráról.",
    valid_period: "Ez a link 48 óra elteltével lejár.",
    import_order_action: "Import rendelés",
    retrieve_dialog_title: "Külső rendelés lekérése",
    address_included: "Megosztás kosár tételek + Cím",
    address_excluded: "Csak a kosár tételeit ossza meg",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Árak",
    inventory: "Leltár",
    discount: "Kedvezmény",
  },

  rating: {
    product_rating_message:
      "Ez a termék {rate}/5 csillagot kapott, és {rate_count} ember értékelte.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Fedezd fel!",
      same_tags_subtitle: "Keressen további figyelemre méltó kapcsolódó elemeket.",
      same_category_subtitle: "További figyelemre méltó elemeket találhat ebben a kategóriában.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Rendelje meg a(z) {product} terméket ezzel:",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "A(z) {vendor} üzletének megtekintése",
  },

  login: {
    welcome: "Üdvözöljük",
  },


};
