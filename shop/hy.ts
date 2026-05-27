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
  surveys: ["Շատ աղքատ", "Խեղճ", "Նորմալ", "Լավ", "Գերազանց"],

  /** @see SFooterSection **/
  footer: {
    map: "Քարտեզ",
    email: "Էլ",
    phone: "Հեռախոս",
    address: "Հասցե",

    copyright:
      "Բովանդակության օգտագործումը միայն ոչ առևտրային նպատակներով և աղբյուրին հղումով (հղումը {shop_title}-ով): Բոլոր իրավունքները պաշտպանված են {shop_title}-ին:",
    powered_by: "Աշխատում է",
    privacy: "Գաղտնիության քաղաքականություն",
    term_of_use: "Օգտվելու կանոններ",
    shop_app_setting: "Խանութի կարգավորում և GDPR",

    dialog_setting: {
      title: "Խանութ հավելվածների կարգավորում",
      app_list: "Դիմումների ցանկ",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Վաճառված է",
    review_unit: "Վերանայում",
    not_original: "Ոչ օրիգինալ",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Զտել",
    native: {
      title: "Հավելվածի մուտք",
      message:
        "Այս հավելվածը պահանջում է մուտք գործել ձեր խանութի հաշվի տվյալները: Սա ներառում է անուն, կոնտակտային համար, հասցե, էլ.",
      message_bold:
        "Համոզվեք, որ օգտագործեք պաշտոնական խանութի հավելվածը՝ այս խանութ մուտք գործելու համար:",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Դասավորել ըստ",
    title_small: "Դասավորել ըստ..",
    nothing: "Ոչինչ",
    most_views: "Ամենաշատ դիտումները",
    most_likes: "Ամենահայտնի",
    most_recent: "Նորագույն",
    most_sell: "Բեսթսելլեր",
    cheapest: "Ամենաէժան",
    most_expensive: "Ամենաթանկը",
    only_available: "Հասանելի է",
    view_mode: {
      normal: "Նորմալ",
      grid: "Ցանց",
      list: "Ցուցակ",
      insta: "Ինստա",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Կեղծ",
    action: "Աճուրդ",
    compare_limit: "10 ապրանքի սահմանափակում",
    compare_add: "Ավելացնել Համեմատության համար",
    compare_be_in_list: "Համեմատության ցանկում",

    type: "Տիպ",
    brand: "Ապրանքանիշը",
    category: "Կարգավիճակ",
    discount: "Զեղչ",
    track_price: "Հետևել գնին",
    waiting_for_auction: "Սպասու՞մ եք աճուրդին։",
    inform_auction: "Ասա ինձ աճուրդի մասին",
    return_in_days: "{days} Օրեր երաշխիքային վերադարձ",
    support24h7: "Աջակցություն 24 ժամ 7 օր",
    support_normal: "Աշխատանքային ժամերի աջակցություն",
    original_guarantee: "Օրիգինալ երաշխիք",
    cod_payment: "Առաքման ժամանակ կանխիկ աջակցություն",

    pros: "Կողմ",
    cons: "Դեմ",

    external_link: "Կարդալ ավելին",
    notifications: {
      congratulation: "Շնորհավորում եմ",
      waiting_list_add_success:
        "Մենք ձեզ կտեղեկացնենք, երբ այս ապրանքն աճուրդի կհանվի:",
      waiting_list_delete_success: "Դուք դուրս եք եկել աճուրդի սպասման ցուցակից:",
    },

    offer_message: "Գնեք {min_quantity} Ստացեք {percent}% զեղչ այս ապրանքների համար",
    up_to: "Յուրաքանչյուր պատվերի համար մինչև {per_order}x",
    get_free: "ՍՏԱՆԱԼ ԱՆՎՃԱՐ",
    get_off: "ՍՏԱՆԱԼ {percent}% ԶԵՂՉ",
    select_a_vendor_message: "Խնդրում ենք ընտրել վաճառող:",
    product_description_header: "Ներկայացնում ենք {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Սպասում է առկայությանը",
    inform_me_when_available: "Սպասու՞մ եք սրան։",
    pay_buy: "Վճարեք և գնեք",
    quantity: "հաշվել",
    quantity_in_basket: "Ապրանքներ զամբյուղում",
    count_unit: "x",
    remove: "Հեռացնել",
    add_to_basket: "Ավելացնել քարտին",
    buy: "Գնել",
    subscribe_now: "Բաժանորդագրվեք հիմա",
    unsubscribe: "Չեղարկել բաժանորդագրությունը",
    select_a_subscription_plan: "Նախ ընտրեք պլան:",
    manage_subscriptions: "Կառավարեք բաժանորդագրությունները",
    notifications: {
      inform_add_success: "Մենք ձեզ կտեղեկացնենք, երբ այն հասանելի լինի:",
      inform_remove_success: "Դուք հեռացվել եք սպասման ցուցակից։",
    },
    zip_pin_input: "Փոստային կոդ / PIN",
    zip_pin_not_available_msg: "Այս վայրում հասանելի չէ։",
    zip_pin_placeholder: "Ընտրեք փոստային/PIN կոդը...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Վերանայում",
    spec: "Տեսակ",
    comments: "Մեկնաբանություններ",
    price: "Գին",
    rate: "Գնահատել",
    comment: "Մեկնաբանություն",
    warranty: "Երաշխիք",
    return_policy: "Վերադարձի քաղաքականություն",
    guide: "Ուղեցույց",
    shipping: "առաքում",
    related_products_title: "Հարակից ապրանքներ",
    related_categories_title: "Բացահայտեք հավաքածուներում",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Պատվերների պատմություն",
      profile: "Իմ էջը",
      favorites: "Սիրված իրեր",
      gift_cards: "Նվեր Քարտեր",
      return_requests: "Վերադարձված պատվերներ",
      basket: "Գնումների զամբյուղ",
    },
    user_menu: {
      my_shops: "Իմ Խանութները",
      go_to_admin: "Կառավարել {shop_name}-ը",
      exit_from: "Դուրս գալ {shop_name}",
      chips: "{chips} թոքեն",
    },
    login_to_shop: "Մուտք գործեք խանութ",
    login_to_shop_short: "մուտք",
    item_in_basket_message: "{count} Այս ապրանքը ձեր զամբյուղում է:",
    search_title: "Որոնել {shop_name} խանութում",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Սայլակ",
    basket_is_empty: "Ձեր զամբյուղը դատարկ է:",
    total_price: "Ընդամենը",
    view_basket: "Ձեր զամբյուղը",
    more: "Ավելին ...",
    accept_and_pay: "Ստուգում",
    items: "Տարր(ներ)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Մերժված է",
    table: {
      code: "Պատվերի կոդը",
      reserved: "Ամսաթիվ",
      delivery_state: "Առաքման կարգավիճակը",
      price: "Ընդհանուր գինը",
      status: "Վճարման կարգավիճակ",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Պատվերի կոդը",
      items: "Նյութեր",
      reserved: "Ամսաթիվ",
      delivery_state: "Վերջին կարգավիճակը",
      price: "Ընդհանուր գինը",
      status: "Վճարման կարգավիճակ",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Նվեր քարտ",
      comments: "Մեկնաբանություններ",
      favorites: "Ֆավորիտներ",
      return_requests: "Վերադարձնում է",
      addresses: "Հասցեներ",
      profile: "պրոֆիլը",
      orders: "Պատվերներ",
      wallets: "Դրամապանակներ",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Իմ դրամապանակները",
    subtitle: "Եթե դուք համապատասխան եք, և գործում է հետվճարի ծրագիր, ձեր պատվերի մի մասը կփոխանցվի ձեր դրամապանակին։ Այդ միջոցները կարող եք օգտագործել հաջորդ գնումում։"
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:'Իմ դրամապանակի մնացորդը',
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Պատվեր",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Վճարում",
      payment_waiting: "Սպասում է վճարմանը",
      payment_completed: "Վճարված",
      table: {
        title: "Կոչում",
        amount: "Գումարը",
        description: "Նկարագրություն",
      },
      total_payment: "Վճարված գումարը",
      discount: "Զեղչ",
      discount_code: "Զեղչի կոդը",
      delivery_fee: "Առաքման ծախսերը",
      delivery_fee_after: "Առաքում չի վճարվում",

      total_price: "Ապրանքների ընդհանուր արժեքը",
      total_items_discount: "Ապրանքների զեղչ",
      total_price_after_offers: "Ընդամենը առաջարկներ կիրառելուց հետո",
      total_order_price_before_tax: "Նախքան հարկը Ընդհանուր գինը",

      buyer_payment: "Գնորդի վճարման գումարը",

      payment_is_in_require_capture_message:
        "Մենք ստացել ենք ձեր վճարումը, սակայն այն դեռ վերջնականապես չի գանձվել։",
      settle_the_earlier_bill_first: "Նախ մարեք նախորդ հաշիվը։",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Առաքում",
      subtitle: "Գնորդի տեղեկատվություն",
      confirm_received_action: "Հաստատեք ապրանքի ստացումը",
      confirm_received_info:
        "Կտտացրեք հաստատման կոճակը, եթե ստացել եք պատվերը: Անհրաժեշտության դեպքում դուք կկարողանաք ուղղորդում ներկայացնել, եթե հաստատում ստանաք:",
      Recipient: "Ստացող",
      bill: "Հաշիվ-ապրանքագիր",
      name: "Անուն",
      tel: "Հեռախոս",
      email: "Էլ",
      country: "Երկիր",
      state: "Պետություն",
      city: "Քաղաք",
      address: "Հասցե",
      building_no: "Շենքի համարը",
      unit_no: "Միավորի համարը",
      postal_code: "Ինդեքս",
      description: "Նկարագրություն",
      order_delivered: "Պատվերը առաքվել է։",
      delivery_time: "Առաքման ժամանակ",
      tracking_code: "Հետևման կոդը",
      tracking_url: "Հետևող URL",

      notifications: {
        confirm_delivery: "Ձեր պատվերը հաստատված է:",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Ապրանքների ինքնատիպության երաշխիք",
      return: "Վերադարձ",
      table: {
        product: "ապրանքային անուն",
        count: "հաշվել",
        unit_price: "Միավոր գինը",
        total_price: "Ընդհանուր գինը",
        discount: "Զեղչ",
        final_price: "Վերջնական գին",
        returned: "Վերադարձել է",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Վերադարձ",
    count_input: "Վերադարձված ապրանքների քանակը",
    count_input_message: "Քանի՞ ապրանք եք վերադարձնում:",
    reason_input: "Վերադարձի պատճառ",
    reason_input_message: "Ընտրեք այս ապրանքը վերադարձնելու պատճառը:",
    note_input: "Նկարագրություն",
    note_input_hint: "Նկարագրեք վերադարձի պատճառը..",
    note_input_message:
      "Անհրաժեշտության դեպքում նկարագրեք այս ապրանքը վերադարձնելու պատճառը:",
    media_message:
      "Դուք կարող եք վերբեռնել ապրանքի պատկերը, աուդիո կամ տեսանյութը այստեղ՝ արտադրանքի կարգավիճակի մասին տեղեկատվության ավելի լավ աջակցություն ստանալու համար: Ընտրելով ֆայլը ավտոմատ կերպով կուղարկվի և կհաստատվի:",
    video: "Տեսանյութ",
    voice: "Ձայն",
    add_action: "Ուղարկեք վերադարձի հարցում",
    notifications: "Ձեր վերադարձի հարցումը հաջողությամբ գրանցվել է:",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Պատվեր",
    info: {
      title: "Գնված վիրտուալ արտադրանք",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Իմ անձնական տվյալները",
    name: "Անուն",
    email: "Էլ",
    tel: "Հեռ",
    identity: "Նույնականացում",
    success_kyc: "Ստուգված KYC",
    no_kyc: "Առանց KYC",
    club: "Օգտագործողի մակարդակ",
    subscription: "Նորությունների բաժանորդագրություն",
    leave_shop: "Լքեք այս խանութը և հեռացրեք բոլոր հաճախորդների մակարդակը",
    leave_shop_action: "Խանութից դուրս գալ",
    edit_personal_info: "Խմբագրել անձնական տվյալները",
    leave_dialog: {
      title: "Խանութից դուրս գալ",
      message:
        "Այս խանութի բաժանորդագրությունից դուրս գալը չի ջնջի ձեր պատվերի տեղեկությունները և գրառումները:",
      action: "Հեռանալ",
    },
    notifications: {
      leave_success: "Խանութից դուրս գալ",
    },
    club_table: {
      discount: "Զեղչ",
      limit: "Սահման",
      currency: "Արժույթ",
      free_shipping: "Անվճար առաքում",
    },

    my_profile: {
      title: "Իմ պրոֆիլը",
      subtitle: "Սա խանութի համար իմ հաճախորդի պրոֆիլի տեղեկատվությունն է։",
      edit_action: "Խմբագրել պրոֆիլը"
    },
    subscribe_status: {
      subscribed: "Ես բաժանորդագրված եմ՝ էլ. փոստով ստանալու վերջին նորություններն ու ակցիաները։",
      unsubscribed: "Ես բաժանորդագրված չեմ՝ էլ. փոստով որևէ նորություն կամ ակցիա ստանալու համար։"
    },
    my_club: {
      subtitle: "Իմ ակումբային մակարդակը և դրա առավելությունները։"
    },
    kyc: {
      subtitle: "Սա իմ համաշխարհային նույնականացման տեղեկատվությունն է։"
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Գնումների զամբյուղ",
    total_price: "Ընդհանուր գումարը",
    shipping: "Առաքման ծախսերը",
    free_shipping: "Անվճար առաքում",
    shipping_not_pay: "Ներառված չէ",
    total_discount: "Ընդհանուր զեղչ",
    customer_club: "Հաճախորդների ակումբի անդամ",
    customer_club_discount: "Անդամների զեղչ",
    final_price: "Վերջնական վճարում",
    lead_time: "Պատրաստման ժամանակը",
    lead_time_unit: "Ժամ",
    receive_time: "Նախընտրելի առաքման ժամանակ",
    select_time: "Ընտրեք Առաքման ժամանակը",
    no_select_time: "Որքան հնարավոր է արագ",
    transportation_type: "Առաքման տեսակը",
    days_input: "Առաքման օրեր",
    days_input_label: "Օրեր",
    days_input_no_data: "Ընտրեք առնվազն մեկ օր",
    time_input: "Առաքման ժամանակ",
    time_input_label: "Առաքում ժամը",
    time_input_label_no_data: "Ընտրեք առնվազն մեկ ժամանակային ընդմիջում",
    support_cod: "Կանխիկ առաքում",
    not_support_cod: "Հնարավոր չէ տեղական վճարել:",
    final_confirm_action: "Վերջնական պատվերի հաստատում",
    pay_and_complete_action: "Վճարեք հիմա",
    pre_confirm_service: "Ներկայացրեք հարցումը",
    cross_selling_discount: "Հավաքածուի զեղչ",

    errors: {
      no_address: "Ընտրեք այն հասցեն, որով ցանկանում եք, որ ձեր պատվերը առաքվի:",
      no_phone: "Մուտքագրեք կոնտակտային համարը ապրանքների ստացումը համակարգելու համար:",
      select_billing_country: "Ընտրեք ձեր վճարման երկիրը",
      select_billing_state: "Ընտրեք ձեր հարկային շրջանը",
    },
    same_billing_address: "Վճարման տվյալները նույնն են, ինչ Ստացողի տվյալները",
    same_billing_address_desc:
      "Վճարման հասցեն նույնն է, ինչ առաքման հասցեն:",
    custom_billing_info: "Տարբեր հաշվարկային տեղեկություններ",
    custom_billing_info_desc:
      "Դուք կարող եք մուտքագրել ձեր հարկային համարը և վճարման այլ հասցե սահմանել:",
    basket_empty: "Զամբյուղը դատարկ է",
    extra_shipping_count: "Դուք կստանաք {count} փաթեթ:",
    select_location_error:
      "Քարտեզի վրա գտեք բեռնափոխադրման ստացման վայրը և կտտացրեք քարտեզի մեջտեղում գտնվող ցուցիչը՝ ստացողի ճշգրիտ հասցեն որոշելու համար:",

    billing_business_desc: "Դա բիզնես հաշիվ է, որի համարը հարկային համար է:",
    billing_personal_desc: "Դա անձնական հաշիվ է:",

    no_billing_title: "Բիլինգ չկա",
    no_billing_desc: "Վճարման հասցեն դատարկ թողեք:",

    can_pay_cod_message:"Այս պատվերի համար կարող եք վճարել կանխիկ՝ առաքման պահին։",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Ժամ",
    count_input: "հաշվել",

    price_changed: "Գինը փոխվել է. նոր գին.",
    offer: "Ստացեք {count}x ապրանք {percent}% զեղչով",
    offer_free: "Ստացեք {count}x անվճար",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Իմ հասցեները",
    subtitle:"Դիտեք ձեր պահպանված հասցեները այստեղ և հեշտությամբ ավելացրեք նորը։",
    new_action: "Նոր Հասցե",
    receiver: "Ստացող",
    address: "Հասցե",
    building_no: "համարանիշը",
    building_unit: "միավոր",
    postcode: "Ինդեքս",
    tel: "Հեռ",
    description: "Նշում",

    map: {
      title: "Իմ հասցեները",
      confirm: "Հասցեի գրանցում",
      address_type: "Հասցե",
      receptor_type: "Ստացող",
    },
    add_dialog: {
      title: "Նոր Հասցե Անուն",
      message: "Մուտքագրեք վերնագիր նոր հասցեի համար:",
      address_name_input: "Հասցե (պարտադիր)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Վերադարձի հարցումներ",
    subtitle:"Դիտեք ձեր վերադարձի հարցումները այստեղ։ Վերադարձի քաղաքականություն ունեցող ապրանքների համար կարող եք պատվերի էջում ներկայացնել վերադարձի հարցում։",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Ցանկությունների ցուցակ",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Իմ մեկնաբանությունները",
    first_post: "Առաջին գրառումը",
    last_edit: "Վերջին խմբագրումը",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Իմ նվեր քարտերը",
    add_action: "Ավելացնել քարտ",
    add_card_dialog: {
      title: "Ավելացնել նվեր քարտ",
      message:
        "Մուտքագրեք քարտի համարը և անվտանգության կոդը: Ձեր հաշվին կավելացվի նվեր քարտ:",
      card_number_input: "Քարտի համար",
      info: "Նշում. Խանութից գնումներ կատարելիս ձեզ կցուցադրվի նվեր քարտերով վճարելու տարբերակը: Ընտրելով այս տարբերակը՝ ձեր վերալիցքավորման մնացորդի գումարը կհանվի պատվերի գումարից:",
      add_action: "Քարտի գրանցում",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Համեմատեք արտադրանքը",
    action_button: "Համեմատեք",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Համեմատության ցանկում ոչ մի ապրանք չի ավելացվել:",
      price: "Գին",
      type: "Տիպ",
      brand: "Ապրանքանիշը",
      warranty: "Երաշխիք",
      variants_comparison: "Համեմատեք արտադրանքի տարբերակները",
      spec: "Տեխնիկական բնութագրեր",
      pros: "Կողմ",
      cons: "Դեմ",
      user_review: "Օգտատիրոջ մեկնաբանությունները",
      rating: "Վարկանիշ",
      rating_count: "Կարծիքների քանակը",
      info: "Դուք կարող եք համօգտագործել այս ապրանքների համեմատության աղյուսակը ձեր ընկերների հետ՝ ուղարկելով հետևյալ հղումը, կամ մուտք գործեք այն ավելի ուշ՝ պահպանելով այս հղումը:",
      copy_action: "Պատճենել համեմատության հղումը",
      check_list: ["Այո՛", "Ունի"],
      cross_list: ["Ոչ", "Չի ունեցել"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Միայն օրիգինալներ",
    only_has_discount: "Միայն զեղչված",
    price_range: "Գնային միջակայք",
    brands: "Ապրանքանիշը",
    main_shop_page: "Խանութի գլխավոր էջը",
    home: "տուն",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Հարգելի {user}, Դուք գնել եք այս ապրանքը: Ի՞նչ կարծիքի եք այս ապրանքի մասին:",
    notification: {
      title: "Շնորհավորում եմ",
      message: "Ձեր մեկնաբանությունը գրանցված է:",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Բլոգ",
    add_new_blog: "Նոր բլոգ",
    popular: "Հանրաճանաչ",
    topics: "Թեմաներ",
    suggestions: "Առաջարկություններ",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Մեր մասին",
    terms: "Օգտվելու կանոններ",
    privacy: "Գաղտնիության քաղաքականություն",
    contact_us: "Կապվեք մեզ հետ",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Կապ մեզ հետ ձևաթուղթ",
    name: "Անուն",
    email: "Էլ",
    phone: "Հեռախոս",
    message: "Հաղորդագրություն",
    notifications: {
      success: "Ձեր հաղորդագրությունն ուղարկված է.",
    },
    submitted_title: "Շնորհակալություն մեզ դիմելու համար:",
    submitted_message:
      "Մենք բարձր ենք գնահատում մեզ հետ կապվելու ձեր ժամանակը: Ձեր հաղորդագրությունը ստացվել է, և մեր թիմը ներկայումս ուսումնասիրում է այն: Մենք կպատասխանենք որքան հնարավոր է շուտ, և շնորհակալություն ենք հայտնում այս ընթացքում ձեր համբերության համար։ Ձեր հետաքրքրությունը և կարծիքը կարևոր են մեզ համար, և մենք պարտավորվում ենք ձեզ հնարավորինս լավագույն աջակցություն ցուցաբերել:",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Վճարման հաստատում",
      payment_success: "Վճարումն ավարտված է:",
      buy_title: "Գնել",
      pay_by_giftcards: "Ձեր պատվերը վճարվել է նվեր քարտով:",
      free_order: "Ձեր պատվերն անվճար է:",
      pay_by_cod: "Ձեր պատվերն ավելացվել է որպես կանխիկ առաքում:",
      pay_by_dir:
        "Ձեր պատվերը հաջողությամբ ավելացվել է: Այժմ դուք կարող եք վճարել ուղղակի դրամական փոխանցումով, այնուհետև վերբեռնել վճարման անդորրագիրը պատվերի էջում:",
      pay_title: "Վճարում",
      qr_code_payment: "Ստեղծվել է վճարման QR կոդը:",
      connecting_to_online_gateway: "Միացում առցանց վճարման դարպասին:",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Մնաց սկիզբը",
    title_between_start_end: "Մնաց մինչև վերջ",
    title_after_end: "Ավարտված",
    title_no_start_end: "Առանց ժամանակի!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Մեկ պատվերի համար կարող եք ստանալ մեկ նվեր:",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Կտրոնի կոդը",
    add_coupon: "Ավելացնել կտրոն",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Ավոկադոյի ձևը միացված չէ:",
    last_update: "Վերջին թարմացում.",
    step1:
      "1. Մուտքագրեք այն ապրանքի անվանումը և մանրամասները, որը ցանկանում եք պատվիրել և սեղմեք Ավելացնել կոճակը:",
    title_plc: "Մուտքագրեք ապրանքի անվանումը:",
    description_plc: "Դուք ավելի շատ ապրանքի նկարագրություններ ունե՞ք:",
    link_plc: "Դուք ունե՞ք ապրանքի հղում:",
    image: "Ապրանքի պատկեր",
    image_msg: "Անհրաժեշտության դեպքում կարող եք ուղարկել ապրանքի պատկերը:",
    add_item: "Ավելացնել տարր",
    items_list: "Պահանջվող ապրանքների ցանկ",
    currency_msg: "Դուք պետք է վճարեք այս պատվերի գումարը այս արժույթով:",
    step2:
      "2. Բոլոր ցանկալի կետերը ավելացնելուց հետո սեղմեք պատվերի վերանայման հարցում կոճակը: Այս փուլում մենք կվերանայենք պատվերը և ձեզ կտեղեկացնենք գնի մասին: Սեղմելով այս հղման վրա՝ դուք կկարողանաք տեսնել գինը և վճարման հղումը:",
    order_action: "Պատվերի գրանցում",
    show_all: "Ցույց տալ ամբողջը",
    show_accepted: "Ցույց տալ հաստատված տարրերը",
    last_orders: "Ձեր վերջին պատվերների ցանկը",
    pending_status: "վերանայման փուլում է",
    check_now: "Ստուգեք կարգը",
    add_new_order: "Կատարեք նոր պատվեր",
    pay_online: "Վճարեք առցանց",
    pricing_not_completed_message:
      "Ձեր պատվերը վերանայվում է: Ձեր պատվերը շուտով կվերանայվի և կգնահատվի, և դուք կկարողանաք վճարել պատվերը:",

    select_address_message:
      "Խնդրում ենք մուտքագրել ձեր հասցեն, այնուհետև կարող եք ուղարկել պատվերը:",

    delete_item_dialog: {
      title: "Հեռացրեք ապրանքը զամբյուղից",
      message: "Ցանկանու՞մ եք ջնջել այս ապրանքը զամբյուղից:",
      action: "Այո, ջնջել",
    },

    notifications: {
      order_success: "Ձեր պատվերը հաջողությամբ տեղադրվեց:",
      delete_success: "Տարրը ջնջված է:",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Պատվերի ստեղծում",
    message:
      "Ստեղծեք այն ապրանքների ցանկը, որոնք ցանկանում եք գնել՝ սկանավորելով ապրանքի կոդը:",

    currency_msg: "Արժույթը, որով ցանկանում եք վճարել:",
    order_action: "Վճարում",
    add_new_order: "Նոր պատվեր",
    continue_order: "Շարունակեք պատվերը",

    delete_item_dialog: {
      title: "Հեռացրեք ապրանքը զամբյուղից",
      message: "Ցանկանու՞մ եք ջնջել այս ապրանքը զամբյուղից:",
      action: "Այո, ջնջել",
    },
    notifications: {
      order_success: "Ձեր պատվերը հաջողությամբ տեղադրվեց:",
      delete_success: "Տարրը ջնջված է:",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Վերբեռնեք վճարման անդորրագրի պատկերը:",
    upload_payment_receipt_done:
      "✔ Դուք արդեն բեռնել եք անդորրագրի պատկերը, սպասեք մեր հաստատմանը։ Եթե Ձեզ անհրաժեշտ է փոխել, կարող եք փոխարինել նախորդ պատկերը նորով:",
    public_form_title: "Հաշվի տվյալները դրամական փոխանցման համար",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Անելիքների ցանկ",
      message: "Նշեք աշխատանքի վերնագրերը, որոնք ցանկանում եք անել, և գնորդին տեղեկացրեք, թե որքանով է այն առաջադիմել:",
    },
    booking: {
      title: "Ամրագրում / ամրագրում",
      message: "Այս պատվերը կմշակվի սահմանված ժամկետում, հաճախորդն ընտրել է ցանկալի ժամկետը, եթե ցանկանում եք որևէ փոփոխություն կատարել ընտրված ժամանակահատվածում, տեղեկացրեք հաճախորդին։",

      selected_checkin: "Հաճախորդի կողմից ընտրված գրանցում",
      selected_checkout: "Հաճախորդի կողմից ընտրված դուրսգրում",
      change_days_question:
        "Ձեզ անհրաժեշտ է փոխել հաճախորդի կողմից ընտրված օրերի ընթացքում:",
      show_calendar: "Ցույց տալ պատվերների օրացույցը",
    },
    pricing: {
      title: "Գնագոյացում",
      message: "Որքա՞ն եք վճարում այս ծառայության համար:",
    },
    subscription: {
      title: "Բաժանորդագրություն",
      message:
        "Դուք կարող եք ընտրել բաժանորդագրության ժամկետը՝ օրական գնելով այս ծառայությունը: Տեղեկացրեք գնորդին, եթե ցանկանում եք փոխել ձեր արդեն մուտքագրած լռելյայն արժեքները:",
      duration: "Բաժանորդագրման ժամկետը",
    },
    charge: {
      title: "Լիցքավորում",
      message:
        "Դուք վճար եք սահմանել այս ապրանքի համար: Հաճախորդի կողմից գնված ապրանքի համար կարող եք փոխել վճարի չափը:",
      charge: "Լիցքավորում",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Սպասում է ստուգել մուտքը...",
    no_access_message:
      "Ցավոք, դուք մուտք չունեք մեր խանութ:<br/> Խնդրում ենք կապվել մեզ հետ:",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Տարածեք պատվերը",
    title: "Կիսվեք այս պատվերով ուրիշների հետ:",
    message:
      "Դա անվտանգ հղում է, կիսվեք միայն նրանց հետ, ում ճանաչում եք: Բոլորը, ովքեր ունեն այս հղումը, կարող են կրկնօրինակել ձեր պատվերը և տեսնել ընտրված հասցեն: Այն կպարունակի տեղեկատվություն ձեր ընթացիկ զամբյուղի մասին:",
    valid_period: "Այս հղման ժամկետը կլրանա 48 ժամ հետո:",
    import_order_action: "Ներմուծման պատվեր",
    retrieve_dialog_title: "Առբերեք արտաքին պատվերը",
    address_included: "Կիսվեք զամբյուղի իրերով + Հասցե",
    address_excluded: "Կիսվեք միայն զամբյուղի իրերով",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Գները",
    inventory: "Գույքագրում",
    discount: "Զեղչ",
  },

  rating: {
    product_rating_message:
      "Այս ապրանքը ստացել է {rate} գնահատականը 5 աստղից և գնահատվել է {rate_count} հոգու կողմից:",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Բացահայտե՛ք",
      same_tags_subtitle: "Գտեք ավելի ուշագրավ հարակից իրեր:",
      same_category_subtitle: "Գտեք այս կատեգորիայի ավելի ուշագրավ իրեր:",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Պատվիրեք {product}-ը հետևյալի հետ",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Դիտել {vendor}-ի խանութը",
  },

  login: {
    welcome: "Բարի գալուստ",
  },


};
