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
  surveys: ["Velmi špatné", "Chudý", "Normální", "Dobrý", "Vynikající"],

  /** @see SFooterSection **/
  footer: {
    map: "Mapa",
    email: "E-mailem",
    phone: "Telefon",
    address: "Adresa",

    copyright:
      "Použití obsahu pouze pro nekomerční účely as odkazem na zdroj (odkaz na {shop_title}). Všechna práva vyhrazena pro {shop_title}.",
    powered_by: "Poháněno",
    privacy: "Zásady ochrany osobních údajů",
    term_of_use: "Podmínky použití",
    shop_app_setting: "Nastavení obchodu a GDPR",

    dialog_setting: {
      title: "Nastavení obchodních aplikací",
      app_list: "Seznam aplikací",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Vyprodáno",
    review_unit: "Posouzení",
    not_original: "Není originální",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtr",
    native: {
      title: "Přihlášení do aplikace",
      message:
        "Tato aplikace vyžaduje přístup k informacím o vašem účtu obchodu. To zahrnuje přístup ke jménu, kontaktnímu číslu, adrese, e-mailu, historii objednávek, objednávání a přidávání komentářů k tomuto obchodu.",
      message_bold:
        "Pro vstup do tohoto obchodu použijte oficiální aplikaci obchodu.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Seřazeno podle",
    title_small: "Seřazeno podle..",
    nothing: "Nic",
    most_views: "Nejvíce zobrazení",
    most_likes: "Nejoblíbenější",
    most_recent: "Nejnovější",
    most_sell: "Nejprodávanější",
    cheapest: "Nejlevnější",
    most_expensive: "Nejdražší",
    only_available: "K dispozici",
    view_mode: {
      normal: "Normální",
      grid: "Mřížka",
      list: "Seznam",
      insta: "Insta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Falešný",
    action: "Aukce",
    compare_limit: "Limit 10 položek",
    compare_add: "přidat ke srovnání",
    compare_be_in_list: "V porovnávacím seznamu",

    type: "Typ",
    brand: "Značka",
    category: "Kategorie",
    discount: "Sleva",
    track_price: "Sledovat cenu",
    waiting_for_auction: "Čekání na aukci?",
    inform_auction: "Řekněte mi o aukci",
    return_in_days: "{days} Dny vrácení záruky",
    support24h7: "Podpora 24 hodin 7 dní",
    support_normal: "Podpora pracovní doby",
    original_guarantee: "Původní záruka",
    cod_payment: "Podpora na dobírku",

    pros: "Profesionálové",
    cons: "Nevýhody",

    external_link: "Přečtěte si více",
    notifications: {
      congratulation: "Gratulujeme",
      waiting_list_add_success:
        "Až bude tento produkt vydražen, budeme vás informovat.",
      waiting_list_delete_success: "Odešli jste z pořadníku aukce.",
    },

    offer_message: "Kupte {min_quantity} a získejte slevu {percent} % na tyto položky",
    up_to: "Až {per_order}x na objednávku",
    get_free: "ZÍSKAT ZDARMA",
    get_off: "ZÍSKEJTE SLEVU {percent} %.",
    select_a_vendor_message: "Vyberte dodavatele.",
    product_description_header: "Představujeme {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Čekání na dostupnost",
    inform_me_when_available: "Čekání na tohle?",
    pay_buy: "Zaplatit a koupit",
    quantity: "Počet",
    quantity_in_basket: "Položky v košíku",
    count_unit: "X",
    remove: "Odstranit",
    add_to_basket: "Přidat do košíku",
    buy: "Koupit",
    subscribe_now: "Přihlaste se k odběru",
    unsubscribe: "Odhlásit odběr",
    select_a_subscription_plan: "Nejprve vyberte plán!",
    manage_subscriptions: "Správa předplatných",
    notifications: {
      inform_add_success: "Dáme vám vědět, až bude k dispozici.",
      inform_remove_success: "Byli jste odstraněni z čekací listiny.",
    },
    zip_pin_input: "PSČ / PIN",
    zip_pin_not_available_msg: "V této lokalitě není k dispozici!",
    zip_pin_placeholder: "Vyberte PSČ/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Popis",
    spec: "Specifikace",
    comments: "Recenze",
    price: "Cena",
    rate: "Hodnocení",
    comment: "Komentář",
    warranty: "Záruka",
    return_policy: "Reklamační řád",
    guide: "Průvodce",
    shipping: "Doprava",
    related_products_title: "Mohlo by se vám také líbit",
    related_categories_title: "Objevte ve sbírkách",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Historie objednávek",
      profile: "Můj profil",
      favorites: "Oblíbené položky",
      gift_cards: "Dárkové poukázky",
      return_requests: "Vrácené objednávky",
      basket: "Nákupní košík",
    },
    user_menu: {
      my_shops: "Moje obchody",
      go_to_admin: "Spravovat {shop_name}",
      exit_from: "Odhlásit {shop_name}",
      chips: "{chips} Čipy",
    },
    login_to_shop: "Přihlaste se do obchodu",
    login_to_shop_short: "přihlásit se",
    item_in_basket_message: "{count} Tato položka je ve vašem košíku.",
    search_title: "Hledat v obchodě {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Vozík",
    basket_is_empty: "Tvůj vozík je prázdný.",
    total_price: "Celkový",
    view_basket: "Váš košík",
    more: "Více ...",
    accept_and_pay: "Překontrolovat",
    items: "Položky",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Odmítnuto",
    table: {
      code: "Objednávkový kód",
      reserved: "datum",
      delivery_state: "Stav dodání",
      price: "Celková cena",
      status: "Status platby",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Objednávkový kód",
      items: "Položky",
      reserved: "datum",
      delivery_state: "Nejnovější stav",
      price: "Celková cena",
      status: "Status platby",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Dárková poukázka",
      comments: "Komentáře",
      favorites: "Oblíbené",
      return_requests: "Návraty",
      addresses: "Adresy",
      profile: "profil",
      orders: "Objednávky",
      wallets: "Peněženky",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Moje peněženky",
    subtitle: "Pokud splňujete podmínky a je aktivní program cashbacku, část vaší objednávky bude připsána do vaší peněženky. Tyto prostředky můžete použít při dalším nákupu."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Zůstatek mé peněženky",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Objednat",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Způsob platby",
      payment_waiting: "Čekání na platbu",
      payment_completed: "Zaplaceno",
      table: {
        title: "Titul",
        amount: "Množství",
        description: "Popis",
      },
      total_payment: "Částka vyplacená",
      discount: "Sleva",
      discount_code: "Slevový kód",
      delivery_fee: "Cena poštovného",
      delivery_fee_after: "Žádné doručení zaplaceno",

      total_price: "Celková cena položek",
      total_items_discount: "Sleva na položky",
      total_price_after_offers: "Celkem po uplatnění nabídek",
      total_order_price_before_tax: "Celková cena před zdaněním",

      buyer_payment: "Částka platby kupujícím",

      payment_is_in_require_capture_message:
        "Vaši platbu jsme přijali, ale zatím nebyla zachycena.",
      settle_the_earlier_bill_first: "Nejprve uhraďte předchozí účet!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "dodávka",
      subtitle: "Informace o kupujícím",
      confirm_received_action: "Potvrďte příjem produktu",
      confirm_received_info:
        "Pokud jste objednávku obdrželi, klikněte na potvrzovací tlačítko. V případě potřeby budete moci odeslat doporučení, pokud obdržíte potvrzení.",
      Recipient: "Příjemce",
      bill: "Faktura",
      name: "název",
      tel: "Telefon",
      email: "E-mailem",
      country: "Země",
      state: "Stát",
      city: "Město",
      address: "Adresa",
      building_no: "Číslo budovy",
      unit_no: "Číslo jednotky",
      postal_code: "PSČ",
      description: "Popis",
      order_delivered: "Objednávka byla doručena.",
      delivery_time: "Čas doručení",
      tracking_code: "Sledovací kód",
      tracking_url: "Sledovací URL",

      notifications: {
        confirm_delivery: "Vaše objednávka je potvrzena.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Záruka originality zboží",
      return: "Vrátit se",
      table: {
        product: "jméno výrobku",
        count: "Počet",
        unit_price: "Jednotková cena",
        total_price: "Celková cena",
        discount: "Sleva",
        final_price: "Konečná cena",
        returned: "Vrátil",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Vrátit se",
    count_input: "Počet vrácených položek",
    count_input_message: "Kolik položek vracíte?",
    reason_input: "Důvod k návratu",
    reason_input_message: "Vyberte důvod vrácení této položky.",
    note_input: "Popis",
    note_input_hint: "Popište důvod vrácení..",
    note_input_message:
      "V případě potřeby popište důvod vrácení této položky.",
    media_message:
      "Zde můžete nahrát obrázek, zvuk nebo video produktu, abyste získali lepší podporu pro informace o stavu produktu. Výběr souboru automaticky odešle a potvrdí.",
    video: "Video",
    voice: "Hlas",
    add_action: "Odeslat žádost o vrácení",
    notifications: "Vaše žádost o vrácení byla úspěšně zaregistrována.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Objednat",
    info: {
      title: "Zakoupený virtuální produkt",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Moje osobní údaje",
    name: "název",
    email: "E-mailem",
    tel: "Telefon",
    identity: "Autentizace",
    success_kyc: "Ověřeno KYC",
    no_kyc: "Žádné KYC",
    club: "Uživatelská úroveň",
    subscription: "Odběr novinek",
    leave_shop: "Opusťte tento obchod a odeberte úroveň všech zákazníků",
    leave_shop_action: "Opustit obchod",
    edit_personal_info: "Upravit osobní údaje",
    leave_dialog: {
      title: "Opustit obchod",
      message:
        "Odhlášením odběru tohoto obchodu se nesmažou informace a záznamy o vaší objednávce.",
      action: "Odejít",
    },
    notifications: {
      leave_success: "Opustit obchod",
    },
    club_table: {
      discount: "Sleva",
      limit: "Omezit",
      currency: "Měna",
      free_shipping: "Doprava zdarma",
    },

    my_profile: {
      title: "Můj profil",
      subtitle: "Toto jsou informace mého zákaznického profilu pro obchod.",
      edit_action: "Upravit profil"
    },
    subscribe_status: {
      subscribed: "Jsem přihlášen/a k odběru nejnovějších novinek a akcí e-mailem.",
      unsubscribed: "Nejsem přihlášen/a k odběru žádných novinek ani akcí e-mailem."
    },
    my_club: {
      subtitle: "Úroveň mého klubu a její výhody."
    },
    kyc: {
      subtitle: "Toto jsou mé globální identifikační údaje."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Nákupní košík",
    total_price: "Celková částka",
    shipping: "Cena poštovného",
    free_shipping: "Doprava zdarma",
    shipping_not_pay: "Není v ceně",
    total_discount: "Celková sleva",
    customer_club: "Člen klientského klubu",
    customer_club_discount: "Členská sleva",
    final_price: "Konečná platba",
    lead_time: "Čas na přípravu",
    lead_time_unit: "Hodina",
    receive_time: "Preferovaná dodací lhůta",
    select_time: "Vyberte Čas doručení",
    no_select_time: "Co nejdříve",
    transportation_type: "Typ dopravy",
    days_input: "Dodací dny",
    days_input_label: "Dny",
    days_input_no_data: "Vyberte alespoň jeden den",
    time_input: "Čas doručení",
    time_input_label: "Doručení v",
    time_input_label_no_data: "Vyberte alespoň jeden časový interval",
    support_cod: "Dobírka",
    not_support_cod: "Nelze platit na místě!",
    final_confirm_action: "Konečné potvrzení objednávky",
    pay_and_complete_action: "Zaplať teď",
    pre_confirm_service: "Podat žádost",
    cross_selling_discount: "Sleva na kolekci",

    errors: {
      no_address: "Vyberte adresu, na kterou chcete objednávku odeslat.",
      no_phone: "Zadejte kontaktní číslo pro koordinaci příjmu zboží.",
      select_billing_country: "Vyberte svou fakturační zemi",
      select_billing_state: "Vyberte svou daňovou oblast",
    },
    same_billing_address: "Fakturační údaje stejné jako údaje o příjemci",
    same_billing_address_desc:
      "Fakturační adresa je stejná jako dodací adresa.",
    custom_billing_info: "Jiné fakturační údaje",
    custom_billing_info_desc:
      "Můžete zadat své DIČ a nastavit jinou fakturační adresu.",
    basket_empty: "Košík je prázdný",
    extra_shipping_count: "Obdržíte {count} balíčků.",
    select_location_error:
      "Najděte na mapě místo příjmu zásilky a kliknutím na indikátor uprostřed mapy určíte přesnou adresu příjemce.",

    billing_business_desc: "Je to podnikatelský účet s daňovým číslem.",
    billing_personal_desc: "Je to osobní účet.",

    no_billing_title: "Žádné účtování",
    no_billing_desc: "Fakturační adresu ponechte prázdnou.",

    can_pay_cod_message:"Tuto objednávku můžete zaplatit v hotovosti při doručení.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "X",
    lead_unit: "Hodina",
    count_input: "Počet",

    price_changed: "Cena se změnila. nová cena:",
    offer: "Získejte slevu {count}x položky o {percent} %.",
    offer_free: "Získejte {count}x zdarma",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Moje adresy",
    subtitle:"Zde si prohlédněte své uložené adresy a snadno přidejte novou.",
    new_action: "Nová adresa",
    receiver: "Příjemce",
    address: "Adresa",
    building_no: "číslo budovy",
    building_unit: "jednotka",
    postcode: "PSČ",
    tel: "Telefon",
    description: "Poznámka",

    map: {
      title: "Moje adresy",
      confirm: "Registrace adresy",
      address_type: "Adresa",
      receptor_type: "Příjemce",
    },
    add_dialog: {
      title: "Název nové adresy",
      message: "Zadejte název nové adresy.",
      address_name_input: "Adresa (povinné)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Žádosti o vrácení",
    subtitle:"Zde si prohlédněte své žádosti o vrácení. U položek s pravidly vrácení můžete žádost o vrácení odeslat na stránce objednávky.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Seznam přání",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Moje komentáře",
    first_post: "První příspěvek",
    last_edit: "Poslední úprava",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Moje dárkové poukázky",
    add_action: "Přidat kartu",
    add_card_dialog: {
      title: "Přidat dárkový poukaz",
      message:
        "Zadejte číslo karty a bezpečnostní kód. K vašemu účtu bude přidána dárková karta.",
      card_number_input: "Číslo karty",
      info: "Poznámka: Při nákupu v obchodě se vám zobrazí možnost platby dárkovými kartami. Výběrem této možnosti bude částka vašeho dobití odečtena z částky objednávky.",
      add_action: "Registrace karty",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Porovnat produkt",
    action_button: "Porovnejte",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Do srovnávacího seznamu nebyly přidány žádné produkty.",
      price: "Cena",
      type: "Typ",
      brand: "Značka",
      warranty: "Záruka",
      variants_comparison: "Porovnejte varianty produktů",
      spec: "Technické specifikace",
      pros: "Profesionálové",
      cons: "Nevýhody",
      user_review: "Komentáře uživatelů",
      rating: "Hodnocení",
      rating_count: "Počet recenzí",
      info: "Tuto srovnávací tabulku produktů můžete sdílet se svými přáteli zasláním následujícího odkazu nebo k ní získat přístup později uložením tohoto odkazu.",
      copy_action: "Kopírovat odkaz na srovnání",
      check_list: ["Ano", "Má"],
      cross_list: ["Ne", "Ne"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Pouze originály",
    only_has_discount: "Pouze zlevněné",
    price_range: "Cenové rozpětí",
    brands: "Značka",
    main_shop_page: "Hlavní stránka obchodu",
    home: "Domov",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Vážený uživateli {user}, zakoupili jste tento produkt. Co si myslíte o tomto produktu?",
    notification: {
      title: "gratuluji",
      message: "Váš komentář byl zaznamenán.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blog",
    add_new_blog: "Nový blog",
    popular: "Oblíbený",
    topics: "Témata",
    suggestions: "Návrhy",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "O nás",
    terms: "Podmínky použití",
    privacy: "Zásady ochrany osobních údajů",
    contact_us: "Kontaktujte nás",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Kontaktní formulář",
    name: "název",
    email: "E-mailem",
    phone: "Telefon",
    message: "Zpráva",
    notifications: {
      success: "Vaše zpráva byla odeslána.",
    },
    submitted_title: "Děkujeme, že jste se na nás obrátili.",
    submitted_message:
      "Vážíme si vašeho času, kdy jste nás kontaktovali. Vaše zpráva byla přijata a náš tým ji právě kontroluje. Odpovíme vám co nejdříve a děkujeme vám za trpělivost během této doby. Váš zájem a zpětná vazba jsou pro nás důležité a jsme odhodláni poskytovat vám tu nejlepší možnou podporu.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Potvrzení platby",
      payment_success: "Platba dokončena.",
      buy_title: "Koupit",
      pay_by_giftcards: "Vaše objednávka byla zaplacena dárkovou kartou.",
      free_order: "Vaše objednávka je zdarma.",
      pay_by_cod: "Vaše objednávka byla přidána jako dobírka.",
      pay_by_dir:
        "Vaše objednávka byla úspěšně přidána. Nyní můžete platit přímým převodem peněz a poté nahrát potvrzení o platbě na stránku objednávky.",
      pay_title: "Způsob platby",
      qr_code_payment: "Platební adresa QR kódu vytvořena.",
      connecting_to_online_gateway: "Připojení k online platební bráně.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Zůstalo na začátku",
    title_between_start_end: "Zůstalo až do konce",
    title_after_end: "Hotovo",
    title_no_start_end: "Bez časového období!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Ke každé objednávce můžete dostat jeden dárek.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kód kupónu",
    add_coupon: "Přidat kupón",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Forma avokáda není povolena!",
    last_update: "Poslední aktualizace:",
    step1:
      "1. Zadejte název a podrobnosti o produktu, který chcete objednat, a klikněte na tlačítko Přidat.",
    title_plc: "Zadejte název produktu.",
    description_plc: "Máte více popisů produktů?",
    link_plc: "Máte odkaz na produkt?",
    image: "Obrázek produktu",
    image_msg: "V případě potřeby můžete poslat obrázek produktu.",
    add_item: "Přidat položku",
    items_list: "Seznam požadovaných produktů",
    currency_msg: "Částku této objednávky musíte zaplatit v této měně.",
    step2:
      "2. Po přidání všech požadovaných položek klikněte na tlačítko žádosti o kontrolu objednávky. V této fázi objednávku zkontrolujeme a dáme vám vědět o ceně. Kliknutím na tento odkaz se vám zobrazí cena a odkaz k platbě.",
    order_action: "Registrace objednávky",
    show_all: "Ukázat vše",
    show_accepted: "Zobrazit potvrzené položky",
    last_orders: "Seznam vašich posledních objednávek",
    pending_status: "pod kontrolou",
    check_now: "Zkontrolujte objednávku",
    add_new_order: "Vytvořte novou objednávku",
    pay_online: "Plaťte online",
    pricing_not_completed_message:
      "Vaše objednávka se kontroluje. Vaše objednávka bude brzy zkontrolována a naceněna a vy budete moci objednávku zaplatit.",

    select_address_message:
      "Zadejte prosím svou adresu a poté můžete odeslat objednávku.",

    delete_item_dialog: {
      title: "Odeberte položku z nákupního košíku",
      message: "Chcete tuto položku smazat z košíku?",
      action: "Ano, smazat",
    },

    notifications: {
      order_success: "Vaše objednávka byla úspěšně zadána.",
      delete_success: "Položka smazána.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Vytvoření objednávky",
    message:
      "Vytvořte seznam produktů, které chcete koupit, naskenováním kódu produktu.",

    currency_msg: "Měna, kterou chcete platit.",
    order_action: "Způsob platby",
    add_new_order: "Nová objednávka",
    continue_order: "Pokračovat v objednávce",

    delete_item_dialog: {
      title: "Odeberte položku z nákupního košíku",
      message: "Chcete tuto položku smazat z košíku?",
      action: "Ano, smazat",
    },
    notifications: {
      order_success: "Vaše objednávka byla úspěšně zadána.",
      delete_success: "Položka smazána.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Nahrajte obrázek potvrzení o platbě.",
    upload_payment_receipt_done:
      "✔ Obrázek účtenky jste již nahráli, počkejte na naše schválení. Pokud potřebujete změnit, můžete nahradit předchozí obrázek novým.",
    public_form_title: "Informace o účtu pro převod peněz",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Seznam úkolů",
      message: "Zadejte názvy práce, kterou chcete udělat, a dejte kupujícímu vědět, jak daleko pokročila.",
    },
    booking: {
      title: "Rezervace / Rezervace",
      message: "Tato objednávka bude zpracována v určený čas, zákazník si zvolil požadované období, pokud chcete ve zvoleném období provést nějaké změny, dejte zákazníkovi vědět.",

      selected_checkin: "Odbavení vybrané zákazníkem",
      selected_checkout: "Odbavení vybrané zákazníkem",
      change_days_question:
        "Potřebujete změnit v zákazníkem vybraných dnech?",
      show_calendar: "Zobrazit kalendář objednávek",
    },
    pricing: {
      title: "Ceny",
      message: "Kolik si za tuto službu účtujete?",
    },
    subscription: {
      title: "Předplatné",
      message:
        "Období předplatného si můžete vybrat tak, že si tuto službu zakoupíte na denní bázi. Dejte kupujícímu vědět, zda chcete změnit výchozí hodnoty, které jste již zadali.",
      duration: "Období předplatného",
    },
    charge: {
      title: "Nabít",
      message:
        "Zadali jste poplatek za tuto položku. Můžete změnit výši poplatku za položku zakoupenou zákazníkem.",
      charge: "Nabít",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Čekání na kontrolu přístupu...",
    no_access_message:
      "Bohužel nemáte přístup do našeho obchodu.<br/> Prosím kontaktujte nás.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Sdílejte objednávku",
    title: "Sdílejte tuto objednávku s ostatními.",
    message:
      "Je to zabezpečený odkaz, sdílejte jej pouze s těmi, které znáte. Každý s tímto odkazem může duplikovat vaši objednávku a zobrazit vybranou adresu. Bude obsahovat informace o vašem aktuálním košíku.",
    valid_period: "Platnost tohoto odkazu vyprší po 48 hodinách.",
    import_order_action: "Importovat objednávku",
    retrieve_dialog_title: "Načíst externí objednávku",
    address_included: "Sdílejte položky košíku + adresa",
    address_excluded: "Sdílejte pouze položky košíku",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Ceny",
    inventory: "Inventář",
    discount: "Sleva",
  },

  rating: {
    product_rating_message:
      "Tento produkt získal hodnocení {rate} z 5 hvězdiček a bylo hodnoceno {rate_count} lidmi.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Prozkoumat!",
      same_tags_subtitle: "Najděte další pozoruhodné související položky.",
      same_category_subtitle: "Další pozoruhodné položky najdete v této kategorii.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Objednat {product} s",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Zobrazit obchod {vendor}",
  },

  login: {
    welcome: "Vítejte",
  },


};
