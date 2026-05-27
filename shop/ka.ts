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
  surveys: ["ძალიან ღარიბი", "ღარიბი", "ნორმალური", "კარგი", "შესანიშნავი"],

  /** @see SFooterSection **/
  footer: {
    map: "რუკა",
    email: "ფოსტა",
    phone: "ტელეფონი",
    address: "მისამართი",

    copyright:
      "კონტენტის გამოყენება მხოლოდ არაკომერციული მიზნებისთვის და წყაროს მითითებით (ბმული {shop_title}-ით). ყველა უფლება დაცულია {shop_title}-ზე.",
    powered_by: "უზრუნველყოფილია",
    privacy: "Კონფიდენციალურობის პოლიტიკა",
    term_of_use: "Მოხმარების პირობები",
    shop_app_setting: "მაღაზიის პარამეტრები და GDPR",

    dialog_setting: {
      title: "მაღაზიის აპლიკაციების პარამეტრი",
      app_list: "განაცხადების სია",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Გაყიდულია",
    review_unit: "Მიმოხილვა",
    not_original: "არა ორიგინალური",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "ფილტრი",
    native: {
      title: "აპლიკაციის შესვლა",
      message:
        "ეს აპლიკაცია საჭიროებს წვდომას თქვენი მაღაზიის ანგარიშის ინფორმაციაზე. ეს მოიცავს წვდომას სახელზე, საკონტაქტო ნომერზე, მისამართზე, ელფოსტაზე, შეკვეთის ისტორიაზე, შეკვეთაზე და კომენტარების გამოქვეყნებაზე ამ მაღაზიაში.",
      message_bold:
        "დარწმუნდით, რომ გამოიყენეთ მაღაზიის ოფიციალური აპლიკაცია ამ მაღაზიაში შესასვლელად.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Დალაგება",
    title_small: "Დალაგება..",
    nothing: "არაფერი",
    most_views: "ყველაზე მეტი ნახვები",
    most_likes: "Ყველაზე პოპულარული",
    most_recent: "უახლესი",
    most_sell: "ბესტსელერი",
    cheapest: "ყველაზე იაფად",
    most_expensive: "Ყველაზე ძვირადღირებული",
    only_available: "ხელმისაწვდომია",
    view_mode: {
      normal: "ნორმალური",
      grid: "ბადე",
      list: "სია",
      insta: "Insta სტილი",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "ყალბი",
    action: "აუქციონი",
    compare_limit: "10 ელემენტის ლიმიტი",
    compare_add: "დამატება შედარებაში",
    compare_be_in_list: "შედარების სიაში",

    type: "ტიპი",
    brand: "ბრენდი",
    category: "კატეგორია",
    discount: "ფასდაკლება",
    track_price: "აკონტროლეთ ფასი",
    waiting_for_auction: "ელოდებით აუქციონს?",
    inform_auction: "აუქციონის შესახებ მითხარი",
    return_in_days: "{days} დღე გარანტიის დაბრუნება",
    support24h7: "მხარდაჭერა 24 საათი 7 დღე",
    support_normal: "სამუშაო საათების მხარდაჭერა",
    original_guarantee: "ორიგინალური გარანტია",
    cod_payment: "ნაღდი ფულის მიწოდების მხარდაჭერა",

    pros: "Დადებითი",
    cons: "მინუსები",

    external_link: "Წაიკითხე მეტი",
    notifications: {
      congratulation: "გილოცავ",
      waiting_list_add_success:
        "ჩვენ შეგატყობინებთ, როდესაც ეს პროდუქტი აუქციონზე გაიყიდება.",
      waiting_list_delete_success: "თქვენ გამოხვედით აუქციონის მოლოდინების სიიდან.",
    },

    offer_message: "შეიძინეთ {min_quantity} მიიღეთ {percent}% ფასდაკლება ამ ნივთებზე",
    up_to: "მაქსიმუმ {per_order}x თითო შეკვეთაზე",
    get_free: "მიიღეთ უფასო",
    get_off: "მიიღეთ {percent}% ფასდაკლება",
    select_a_vendor_message: "გთხოვთ, აირჩიოთ გამყიდველი.",
    product_description_header: "წარმოგიდგენთ {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "ველოდები ხელმისაწვდომობას",
    inform_me_when_available: "ამას ელოდები?",
    pay_buy: "გადაიხადე და იყიდე",
    quantity: "დათვალეთ",
    quantity_in_basket: "ნივთები კალათაში",
    count_unit: "x",
    remove: "ამოღება",
    add_to_basket: "Კალათაში დამატება",
    buy: "იყიდე",
    subscribe_now: "გამოიწერეთ ახლავე",
    unsubscribe: "გამოწერის გაუქმება",
    select_a_subscription_plan: "ჯერ აირჩიეთ გეგმა!",
    manage_subscriptions: "მართეთ გამოწერები",
    notifications: {
      inform_add_success: "ჩვენ შეგატყობინებთ, როდესაც ის ხელმისაწვდომი იქნება.",
      inform_remove_success: "თქვენ ამოღებული ხართ ლოდინის სიიდან.",
    },
    zip_pin_input: "საფოსტო კოდი / PIN",
    zip_pin_not_available_msg: "ამ მდებარეობაზე მიუწვდომელია!",
    zip_pin_placeholder: "აირჩიეთ საფოსტო/PIN კოდი...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Მიმოხილვა",
    spec: "სპეც",
    comments: "კომენტარები",
    price: "ფასი",
    rate: "შეფასება",
    comment: "კომენტარი",
    warranty: "Გარანტია",
    return_policy: "დაბრუნების პოლიტიკა",
    guide: "გზამკვლევი",
    shipping: "ტრანსპორტირება",
    related_products_title: "Მსგავსი პროდუქტები",
    related_categories_title: "აღმოაჩინეთ კოლექციებში",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "შეკვეთების ისტორია",
      profile: "Ჩემი პროფილი",
      favorites: "საყვარელი ნივთები",
      gift_cards: "Სასაჩუქრე ბარათი",
      return_requests: "დაბრუნებული შეკვეთები",
      basket: "Საყიდლების კალათი",
    },
    user_menu: {
      my_shops: "ჩემი მაღაზიები",
      go_to_admin: "{shop_name}-ის მართვა",
      exit_from: "გამოსვლა {shop_name}",
      chips: "{chips} ჩიფსები",
    },
    login_to_shop: "შედით მაღაზიაში",
    login_to_shop_short: "შესვლა",
    item_in_basket_message: "{count} ეს საქონელი თქვენს კალათაშია.",
    search_title: "ძებნა მაღაზიაში {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "კალათა",
    basket_is_empty: "Თქვენი კალათა ცარიელია.",
    total_price: "სულ",
    view_basket: "თქვენი კალათა",
    more: "მეტი ...",
    accept_and_pay: "გადახდა",
    items: "ელემენტ(ებ)ი",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "უარყოფილია",
    table: {
      code: "შეკვეთის კოდი",
      reserved: "თარიღი",
      delivery_state: "Მიტანის სტატუსი",
      price: "Ჯამური ღირებულება",
      status: "გადახდის სტატუსი",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "შეკვეთის კოდი",
      items: "ნივთები",
      reserved: "თარიღი",
      delivery_state: "უახლესი სტატუსი",
      price: "Ჯამური ღირებულება",
      status: "გადახდის სტატუსი",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Სასაჩუქრე ბარათი",
      comments: "კომენტარები",
      favorites: "რჩეულები",
      return_requests: "ბრუნდება",
      addresses: "მისამართები",
      profile: "პროფილი",
      orders: "შეკვეთები",
      wallets: "საფულეები",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "ჩემი საფულეები",
    subtitle: "თუ აკმაყოფილებთ პირობებს და ქეშბექის პროგრამა აქტიურია, თქვენი შეკვეთის ნაწილი ჩაირიცხება თქვენს საფულეში. ამ თანხის გამოყენება შემდეგ შეძენაზე შეგიძლიათ."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:'ჩემი საფულის ბალანსი',
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "შეკვეთა",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "გადახდა",
      payment_waiting: "ელოდება გადახდას",
      payment_completed: "გადახდილი",
      table: {
        title: "სათაური",
        amount: "თანხა",
        description: "აღწერა",
      },
      total_payment: "Გადახდილი თანხა",
      discount: "ფასდაკლება",
      discount_code: "Ფასდაკლების კოდი",
      delivery_fee: "Გადაზიდვის ღირებულება",
      delivery_fee_after: "მიწოდება არ არის გადახდილი",

      total_price: "მთლიანი ნივთების ფასი",
      total_items_discount: "პროდუქციის ფასდაკლება",
      total_price_after_offers: "სულ შეთავაზებების გამოყენების შემდეგ",
      total_order_price_before_tax: "გადასახადამდე მთლიანი ფასი",

      buyer_payment: "მყიდველის გადახდის თანხა",

      payment_is_in_require_capture_message:
        "ჩვენ მივიღეთ თქვენი გადახდა, მაგრამ თანხა ჯერ არ არის ჩამოჭრილი.",
      settle_the_earlier_bill_first: "ჯერ წინა ანგარიში დაფარეთ!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "მიწოდება",
      subtitle: "მყიდველის ინფორმაცია",
      confirm_received_action: "დაადასტურეთ პროდუქტის მიღება",
      confirm_received_info:
        "დააწკაპუნეთ დადასტურების ღილაკს თუ მიიღეთ შეკვეთა. საჭიროების შემთხვევაში, თქვენ შეძლებთ რეფერალის გაგზავნას, თუ დადასტურებას მიიღებთ.",
      Recipient: "მიმღები",
      bill: "ინვოისი",
      name: "სახელი",
      tel: "ტელეფონი",
      email: "ფოსტა",
      country: "ქვეყანა",
      state: "სახელმწიფო",
      city: "ქალაქი",
      address: "მისამართი",
      building_no: "შენობის ნომერი",
      unit_no: "ერთეულის ნომერი",
      postal_code: "საფოსტო ინდექსი",
      description: "აღწერა",
      order_delivered: "შეკვეთა მიტანილია.",
      delivery_time: "Მიტანის დრო",
      tracking_code: "თვალთვალის კოდი",
      tracking_url: "თვალთვალის URL",

      notifications: {
        confirm_delivery: "თქვენი შეკვეთა დადასტურებულია.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "საქონლის ორიგინალობის გარანტია",
      return: "Დაბრუნების",
      table: {
        product: "Პროდუქტის სახელი",
        count: "დათვალეთ",
        unit_price: "Ერთეულის ფასი",
        total_price: "Ჯამური ღირებულება",
        discount: "ფასდაკლება",
        final_price: "Საბოლოო ფასი",
        returned: "დაბრუნდა",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Დაბრუნების",
    count_input: "დაბრუნებული ნივთების რაოდენობა",
    count_input_message: "რამდენ ნივთს აბრუნებთ?",
    reason_input: "დაბრუნების მიზეზი",
    reason_input_message: "აირჩიეთ ამ ნივთის დაბრუნების მიზეზი.",
    note_input: "აღწერა",
    note_input_hint: "აღწერეთ დაბრუნების მიზეზი..",
    note_input_message:
      "საჭიროების შემთხვევაში აღწერეთ ამ ნივთის დაბრუნების მიზეზი.",
    media_message:
      "თქვენ შეგიძლიათ ატვირთოთ პროდუქტის სურათი, აუდიო ან ვიდეო აქ, რომ მიიღოთ უკეთესი მხარდაჭერა პროდუქტის სტატუსის შესახებ. ფაილის არჩევით ავტომატურად გაიგზავნება და დადასტურდება.",
    video: "ვიდეო",
    voice: "ხმა",
    add_action: "დაბრუნების მოთხოვნის გაგზავნა",
    notifications: "თქვენი დაბრუნების მოთხოვნა წარმატებით დარეგისტრირდა.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "შეკვეთა",
    info: {
      title: "შეძენილი ვირტუალური პროდუქტი",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "ჩემი პერსონალური ინფორმაცია",
    name: "სახელი",
    email: "ფოსტა",
    tel: "ტელ",
    identity: "ავთენტიფიკაცია",
    success_kyc: "დამოწმებული KYC",
    no_kyc: "KYC-ის გარეშე",
    club: "მომხმარებლის დონე",
    subscription: "ახალი ამბების გამოწერა",
    leave_shop: "დატოვეთ ეს მაღაზია და წაშალეთ ყველა კლიენტის დონე",
    leave_shop_action: "დატოვე მაღაზია",
    edit_personal_info: "პირადი ინფორმაციის რედაქტირება",
    leave_dialog: {
      title: "დატოვე მაღაზია",
      message:
        "ამ მაღაზიის გამოწერის გაუქმება არ წაშლის თქვენი შეკვეთის ინფორმაციას და ჩანაწერებს.",
      action: "დატოვე",
    },
    notifications: {
      leave_success: "დატოვე მაღაზია",
    },
    club_table: {
      discount: "ფასდაკლება",
      limit: "Ზღვარი",
      currency: "ვალუტა",
      free_shipping: "Უფასო გზავნილი",
    },

    my_profile: {
      title: "ჩემი პროფილი",
      subtitle: "ეს არის ჩემი მომხმარებლის პროფილის ინფორმაცია ამ მაღაზიისთვის.",
      edit_action: "პროფილის რედაქტირება"
    },
    subscribe_status: {
      subscribed: "მე გამოწერილი მაქვს უახლესი სიახლეებისა და აქციების მიღება ელფოსტით.",
      unsubscribed: "მე არ ვარ გამოწერილი სიახლეებისა თუ აქციების მიღებაზე ელფოსტით."
    },
    my_club: {
      subtitle: "ჩემი კლუბის დონე და მისი სარგებელი."
    },
    kyc: {
      subtitle: "ეს არის ჩემი გლობალური საიდენტიფიკაციო ინფორმაცია."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Საყიდლების კალათი",
    total_price: "Მთლიანი რაოდენობა",
    shipping: "Გადაზიდვის ღირებულება",
    free_shipping: "Უფასო გზავნილი",
    shipping_not_pay: "Არ შედის",
    total_discount: "სულ ფასდაკლება",
    customer_club: "კლიენტთა კლუბის წევრი",
    customer_club_discount: "წევრის ფასდაკლება",
    final_price: "Საბოლოო გადახდა",
    lead_time: "Მოსამზადებელი დრო",
    lead_time_unit: "საათი",
    receive_time: "მიტანის სასურველი დრო",
    select_time: "აირჩიეთ მიწოდების დრო",
    no_select_time: "Რაც შეიძლება მალე",
    transportation_type: "გადაზიდვის ტიპი",
    days_input: "მიწოდების დღეები",
    days_input_label: "დღეები",
    days_input_no_data: "აირჩიეთ მინიმუმ ერთი დღე",
    time_input: "Მიტანის დრო",
    time_input_label: "მიწოდება ზე",
    time_input_label_no_data: "აირჩიეთ მინიმუმ ერთი დროის ინტერვალი",
    support_cod: "ნაღდი ანგარიშსწორება ადგილზე",
    not_support_cod: "ადგილობრივად გადახდა შეუძლებელია!",
    final_confirm_action: "შეკვეთის საბოლოო დადასტურება",
    pay_and_complete_action: "Გადაიხადე ახლა",
    pre_confirm_service: "მოთხოვნის გაგზავნა",
    cross_selling_discount: "ფასდაკლება კოლექციაზე",

    errors: {
      no_address: "აირჩიეთ მისამართი, სადაც გსურთ თქვენი შეკვეთის გაგზავნა.",
      no_phone: "შეიყვანეთ საკონტაქტო ნომერი საქონლის მიღების კოორდინაციისთვის.",
      select_billing_country: "აირჩიეთ თქვენი ბილინგის ქვეყანა",
      select_billing_state: "აირჩიეთ თქვენი საგადასახადო რეგიონი",
    },
    same_billing_address: "ბილინგის ინფორმაცია იგივეა, რაც მიმღების ინფორმაცია",
    same_billing_address_desc:
      "ბილინგის მისამართი იგივეა, რაც მიწოდების მისამართი.",
    custom_billing_info: "ბილინგის სხვადასხვა ინფორმაცია",
    custom_billing_info_desc:
      "შეგიძლიათ შეიყვანოთ თქვენი საგადასახადო ნომერი და დააყენოთ ბილინგის სხვა მისამართი.",
    basket_empty: "კალათა ცარიელია",
    extra_shipping_count: "თქვენ მიიღებთ {count} პაკეტს.",
    select_location_error:
      "იპოვეთ ტვირთის მიღების ადგილი რუკაზე და დააწკაპუნეთ ინდიკატორზე რუკის შუაში, რათა დადგინდეს მიმღების ზუსტი მისამართი.",

    billing_business_desc: "ეს არის ბიზნეს ანგარიში საგადასახადო ნომრით.",
    billing_personal_desc: "ეს არის პირადი ანგარიში.",

    no_billing_title: "ბილინგი არ არის",
    no_billing_desc: "დატოვეთ ბილინგის მისამართი ცარიელი.",

    can_pay_cod_message:"ამ შეკვეთის გადახდა შეგიძლიათ ნაღდი ფულით მიღებისას.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "საათი",
    count_input: "დათვალეთ",

    price_changed: "ფასი შეცვლილია. ახალი ფასი:",
    offer: "მიიღეთ {count}x პროდუქტი {percent}%-ით",
    offer_free: "მიიღეთ {count}x უფასოდ",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "ჩემი მისამართები",
    subtitle:"აქ ნახეთ თქვენი შენახული მისამართები და მარტივად დაამატეთ ახალი.",
    new_action: "Ახალი მისამართი",
    receiver: "მიმღები",
    address: "მისამართი",
    building_no: "სანომრე ნიშანი",
    building_unit: "ერთეული",
    postcode: "საფოსტო ინდექსი",
    tel: "ტელ",
    description: "შენიშვნა",

    map: {
      title: "ჩემი მისამართები",
      confirm: "მისამართის რეგისტრაცია",
      address_type: "მისამართი",
      receptor_type: "მიმღები",
    },
    add_dialog: {
      title: "ახალი მისამართის სახელი",
      message: "შეიყვანეთ სათაური ახალი მისამართისთვის.",
      address_name_input: "მისამართი (აუცილებელია)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "დაბრუნების მოთხოვნები",
    subtitle:"აქ ნახეთ თქვენი დაბრუნების მოთხოვნები. დაბრუნების პოლიტიკის მქონე ნივთებისთვის მოთხოვნის გაგზავნა შეგიძლიათ შეკვეთის გვერდიდან.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "სურვილების სია",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "ჩემი კომენტარები",
    first_post: "პირველი პოსტი",
    last_edit: "ბოლო რედაქტირება",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "ჩემი სასაჩუქრე ბარათები",
    add_action: "ბარათის დამატება",
    add_card_dialog: {
      title: "დაამატეთ სასაჩუქრე ბარათი",
      message:
        "შეიყვანეთ ბარათის ნომერი და უსაფრთხოების კოდი. სასაჩუქრე ბარათი დაემატება თქვენს ანგარიშს.",
      card_number_input: "Ბარათის ნომერი",
      info: "შენიშვნა: მაღაზიიდან ყიდვისას გამოჩნდება სასაჩუქრე ბარათებით გადახდის შესაძლებლობა. ამ პარამეტრის არჩევით, თქვენი დატენვის ბალანსის თანხა ჩამოიჭრება შეკვეთის თანხიდან.",
      add_action: "ბარათის რეგისტრაცია",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "შეადარეთ პროდუქტი",
    action_button: "შეადარე",

    /** {@see SComparisonList} **/
    list: {
      no_data: "შედარების სიას არცერთი პროდუქტი არ დაემატა.",
      price: "ფასი",
      type: "ტიპი",
      brand: "ბრენდი",
      warranty: "Გარანტია",
      variants_comparison: "შეადარეთ პროდუქტის ვარიანტები",
      spec: "ტექნიკური მახასიათებლები",
      pros: "Დადებითი",
      cons: "მინუსები",
      user_review: "მომხმარებლის კომენტარები",
      rating: "რეიტინგი",
      rating_count: "მიმოხილვების რაოდენობა",
      info: "შეგიძლიათ პროდუქტის შედარების ცხრილი გაუზიაროთ თქვენს მეგობრებს შემდეგი ბმულის გაგზავნით, ან მოგვიანებით შეხვიდეთ მასზე ამ ბმულის შენახვით.",
      copy_action: "დააკოპირეთ შედარების ლინკი",
      check_list: ["დიახ", "აქვს"],
      cross_list: ["არა", "არ აქვს"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "მხოლოდ ორიგინალები",
    only_has_discount: "მხოლოდ ფასდაკლებით",
    price_range: "Ფასების დიაპაზონი",
    brands: "ბრენდი",
    main_shop_page: "მაღაზიის მთავარი გვერდი",
    home: "მთავარი",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "ძვირფასო {user}, თქვენ შეიძინეთ ეს პროდუქტი. რას ფიქრობთ ამ პროდუქტზე?",
    notification: {
      title: "გილოცავ",
      message: "თქვენი კომენტარი ჩაწერილია.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "ბლოგი",
    add_new_blog: "ახალი ბლოგი",
    popular: "პოპულარული",
    topics: "თემები",
    suggestions: "წინადადებები",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Ჩვენს შესახებ",
    terms: "Მოხმარების პირობები",
    privacy: "Კონფიდენციალურობის პოლიტიკა",
    contact_us: "Დაგვიკავშირდით",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "დაგვიკავშირდით ფორმა",
    name: "სახელი",
    email: "ფოსტა",
    phone: "ტელეფონი",
    message: "შეტყობინება",
    notifications: {
      success: "Თქვენი შეტყობინება გაიგზავნა.",
    },
    submitted_title: "გმადლობთ, რომ დაგვიკავშირდით!",
    submitted_message:
      "ჩვენ ვაფასებთ თქვენს დროს ჩვენთან დაკავშირებისას. თქვენი შეტყობინება მიღებულია და ჩვენი გუნდი ამჟამად განიხილავს მას. ჩვენ გიპასუხებთ რაც შეიძლება მალე და მადლობას გიხდით მოთმინებისთვის ამ დროის განმავლობაში. თქვენი ინტერესი და გამოხმაურება ჩვენთვის მნიშვნელოვანია და ჩვენ მზად ვართ მოგაწოდოთ მაქსიმალური მხარდაჭერა.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Გადახდის დასტური",
      payment_success: "გადახდა დასრულებულია.",
      buy_title: "იყიდე",
      pay_by_giftcards: "თქვენი შეკვეთა გადაიხადეს სასაჩუქრე ბარათით.",
      free_order: "თქვენი შეკვეთა უფასოა.",
      pay_by_cod: "თქვენი შეკვეთა დამატებულია ნაღდი ანგარიშსწორების სახით.",
      pay_by_dir:
        "თქვენი შეკვეთა წარმატებით დამატებულია. ახლა თქვენ შეგიძლიათ გადაიხადოთ პირდაპირი თანხის გადარიცხვით და შემდეგ ატვირთოთ გადახდის ქვითარი შეკვეთის გვერდზე.",
      pay_title: "გადახდა",
      qr_code_payment: "გადახდის QR კოდის მისამართი შეიქმნა.",
      connecting_to_online_gateway: "ონლაინ გადახდის კარიბჭესთან დაკავშირება.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "დასაწყისამდე დარჩა",
    title_between_start_end: "დარჩა ბოლომდე",
    title_after_end: "დასრულდა",
    title_no_start_end: "ვადის გარეშე!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "შეკვეთაზე შეგიძლიათ მიიღოთ ერთი საჩუქარი.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Კუპონის კოდი",
    add_coupon: "დაამატეთ კუპონი",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "ავოკადოს ფორმა არ არის ჩართული!",
    last_update: "Ბოლო განახლება:",
    step1:
      "1. შეიყვანეთ პროდუქტის სახელი და დეტალები, რომლის შეკვეთაც გსურთ და დააწკაპუნეთ ღილაკს დამატება.",
    title_plc: "შეიყვანეთ პროდუქტის სახელი.",
    description_plc: "გაქვთ მეტი პროდუქტის აღწერა?",
    link_plc: "გაქვთ პროდუქტის ბმული?",
    image: "პროდუქტის სურათი",
    image_msg: "საჭიროების შემთხვევაში შეგიძლიათ გამოაგზავნოთ პროდუქტის სურათი.",
    add_item: "დაამატეთ ელემენტი",
    items_list: "მოთხოვნილი პროდუქტების სია",
    currency_msg: "ამ შეკვეთის თანხა ამ ვალუტით უნდა გადაიხადოთ.",
    step2:
      "2. ყველა სასურველი ნივთის დამატების შემდეგ დააწკაპუნეთ შეკვეთის განხილვის მოთხოვნის ღილაკზე. ამ ეტაპზე განვიხილავთ შეკვეთას და შეგატყობინებთ ფასს. ამ ბმულზე დაწკაპუნებით თქვენ შეძლებთ იხილოთ ფასი და გადახდის ლინკი.",
    order_action: "შეკვეთის რეგისტრაცია",
    show_all: "Მაჩვენე ყველა",
    show_accepted: "დადასტურებული ნივთების ჩვენება",
    last_orders: "თქვენი ბოლო შეკვეთების სია",
    pending_status: "განხილვის ქვეშ",
    check_now: "შეამოწმეთ შეკვეთა",
    add_new_order: "გააკეთე ახალი შეკვეთა",
    pay_online: "გადაიხადე ონლაინ",
    pricing_not_completed_message:
      "თქვენი შეკვეთა განიხილება. თქვენი შეკვეთა განიხილება და ფასი მალე მოხდება და თქვენ შეძლებთ შეკვეთის გადახდას.",

    select_address_message:
      "გთხოვთ შეიყვანოთ თქვენი მისამართი და შემდეგ შეკვეთის გაგზავნა შეგიძლიათ.",

    delete_item_dialog: {
      title: "ამოიღეთ საქონელი საყიდლების კალათიდან",
      message: "გსურთ ამ ნივთის კალათიდან წაშლა?",
      action: "დიახ, წაშალეთ",
    },

    notifications: {
      order_success: "თქვენი შეკვეთა წარმატებით განთავსდა.",
      delete_success: "ელემენტი წაიშალა.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "შეკვეთის შექმნა",
    message:
      "შექმენით პროდუქტების სია, რომელთა შეძენაც გსურთ პროდუქტის კოდის სკანირებით.",

    currency_msg: "ვალუტა, რომლითაც გსურთ გადახდა.",
    order_action: "გადახდა",
    add_new_order: "Ახალი შეკვეთა",
    continue_order: "განაგრძეთ შეკვეთა",

    delete_item_dialog: {
      title: "ამოიღეთ საქონელი საყიდლების კალათიდან",
      message: "გსურთ ამ ნივთის კალათიდან წაშლა?",
      action: "დიახ, წაშალეთ",
    },
    notifications: {
      order_success: "თქვენი შეკვეთა წარმატებით განთავსდა.",
      delete_success: "ელემენტი წაიშალა.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "ატვირთეთ გადახდის ქვითრის სურათი.",
    upload_payment_receipt_done:
      "✔ თქვენ უკვე ატვირთეთ ქვითრის სურათი, დაელოდეთ ჩვენს დამტკიცებას. თუ შეცვლა გჭირდებათ, შეგიძლიათ შეცვალოთ წინა სურათი ახლით.",
    public_form_title: "ანგარიშის ინფორმაცია ფულის გადარიცხვისთვის",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "სამუშაოების სია",
      message: "მიუთითეთ სამუშაოს სათაური, რომლის გაკეთებაც გსურთ და აცნობეთ მყიდველს, რამდენად წინ წავიდა იგი.",
    },
    booking: {
      title: "დაჯავშნა / დაჯავშნა",
      message: "ეს შეკვეთა დამუშავდება მითითებულ დროს, მომხმარებელმა შეარჩია სასურველი პერიოდი, თუ გსურთ რაიმე ცვლილების შეტანა შერჩეულ პერიოდში, შეატყობინეთ მომხმარებელს.",

      selected_checkin: "შერჩეული რეგისტრაცია მომხმარებლის მიერ",
      selected_checkout: "შერჩეული გასვლა მომხმარებლის მიერ",
      change_days_question:
        "გჭირდებათ შეცვლა მომხმარებლის მიერ შერჩეულ დღეებში?",
      show_calendar: "შეკვეთების კალენდრის ჩვენება",
    },
    pricing: {
      title: "ფასი",
      message: "რამდენს იხდით ამ სერვისისთვის?",
    },
    subscription: {
      title: "გამოწერა",
      message:
        "თქვენ შეგიძლიათ აირჩიოთ გამოწერის პერიოდი ამ სერვისის ყოველდღიური შეძენით. აცნობეთ მყიდველს, თუ გსურთ შეცვალოთ უკვე შეყვანილი ნაგულისხმევი მნიშვნელობები.",
      duration: "გამოწერის პერიოდი",
    },
    charge: {
      title: "დატენვა",
      message:
        "თქვენ მიუთითეთ გადასახადი ამ ერთეულისთვის. თქვენ შეგიძლიათ შეცვალოთ გადასახადის ოდენობა მომხმარებლის მიერ შეძენილი ნივთისთვის.",
      charge: "დატენვა",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "ელოდება წვდომის შემოწმებას...",
    no_access_message:
      "სამწუხაროდ, თქვენ არ გაქვთ წვდომა ჩვენს მაღაზიაში.<br/> Გთხოვთ, დაგვიკავშირდით.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "გააზიარეთ შეკვეთა",
    title: "გაუზიარეთ ეს შეკვეთა სხვებს.",
    message:
      "ეს არის უსაფრთხო ბმული, გაუზიარეთ ის მხოლოდ მათ, ვინც იცნობთ. ყველას ამ ბმულით შეუძლია თქვენი შეკვეთის დუბლირება და არჩეული მისამართის ნახვა. ის შეიცავს ინფორმაციას თქვენი მიმდინარე კალათის შესახებ.",
    valid_period: "ამ ბმულს ვადა გაუვა 48 საათის შემდეგ.",
    import_order_action: "იმპორტის შეკვეთა",
    retrieve_dialog_title: "გარე შეკვეთის აღდგენა",
    address_included: "გააზიარეთ კალათის ნივთები + მისამართი",
    address_excluded: "გააზიარეთ მხოლოდ კალათის ნივთები",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "ფასები",
    inventory: "ინვენტარი",
    discount: "ფასდაკლება",
  },

  rating: {
    product_rating_message:
      "ამ პროდუქტმა მიიღო შეფასება 5 ვარსკვლავიდან {rate} და შეაფასა {rate_count} ადამიანის მიერ.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Გამოკვლევა!",
      same_tags_subtitle: "იპოვეთ უფრო მნიშვნელოვანი დაკავშირებული ნივთები.",
      same_category_subtitle: "იპოვეთ მეტი ღირსშესანიშნავი ნივთები ამ კატეგორიაში.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "შეუკვეთეთ {product} ერთად",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "{vendor}-ის მაღაზიის ნახვა",
  },

  login: {
    welcome: "მოგესალმებით",
  },


};
