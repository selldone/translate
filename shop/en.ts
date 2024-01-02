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
  surveys: ["Very poor", "Poor", "Normal", "Good", "Excellent"],

  /** @see SStorefrontPrimaryFooter **/
  footer: {
    map: "Map",
    email: "Email",
    phone: "Phone",
    address: "Address",

    copyright:
      "The use of content only for non-commercial purposes and with reference to the source (link with {shop_title}). All rights reserved to {shop_title}.",
    powered_by: "Powered by",
    privacy: "Privacy policy",
    term_of_use: "Terms of use",
    shop_app_setting: "Shop setting & GDPR",

    dialog_setting: {
      title: "Shop Applications Setting",
      app_list: "List of applications",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Sold out",
    review_unit: "review",
    not_original: "Not original",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filter",
    native: {
      title: "Application Login",
      message:
        "This app requires access to your store account information. This includes access to name, contact number, address, email, order history, ordering and posting comments on this store.",
      message_bold:
        "Be sure to use the official store app to enter this store.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Sort by",
    title_small: "Sort by..",
    nothing: "Nothing",
    most_views: "Most Views",
    most_likes: "Most Popular",
    most_recent: "Newest",
    most_sell: "Bestselling",
    cheapest: "Cheapest",
    most_expensive: "Most Expensive",
    only_available: "Available",
    view_mode: {
      normal: "Normal",
      grid: "Grid",
      list: "List",
      insta: "Insta",
    },
  },

  /** @see SShopProductMainCard **/
  product_info: {
    fake: "Fake",
    action: "Auction",
    compare_limit: "10 items limit",
    compare_add: "Add to Compare",
    compare_be_in_list: "In compare list",

    type: "Type",
    brand: "Brand",
    category: "Category",
    discount: "Discount",
    track_price: "Track price",
    waiting_for_auction: "Waiting for the auction?",
    inform_auction: "Tell me about auction",
    return_in_days: "{days} Days Return Warranty",
    support24h7: "Support 24 hours 7 days",
    support_normal: "Working hours support",
    original_guarantee: "Original guarantee",
    cod_payment: "Cash on delivery support",

    pros: "Pros",
    cons: "Cons",

    external_link: "Read More",
    notifications: {
      congratulation: "Congratulations",
      waiting_list_add_success:
        "We will notify you when this product is auctioned.",
      waiting_list_delete_success: "You exited from the auction waiting list.",
    },

    offer_message: "Buy {min_quantity} Get {percent}% off for these items",
    up_to: "Up to {per_order}x per order",
    get_free: "GET FREE",
    get_off: "GET {percent}% OFF",
    select_a_vendor_message: "Please select a vendor.",
    product_description_header: "Introducing {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Waiting for availability",
    inform_me_when_available: "Waiting for this?",
    pay_buy: "Pay & Buy",
    quantity: "Count",
    quantity_in_basket: "Items in cart",
    count_unit: "x",
    remove: "Remove",
    add_to_basket: "Add to cart",
    buy: "Buy",
    subscribe_now: "Subscribe Now",
    unsubscribe: "Unsubscribe",
    select_a_subscription_plan: "Select a plan first!",
    manage_subscriptions: "Manage subscriptions",
    notifications: {
      inform_add_success: "We'll let you know when it's available.",
      inform_remove_success: "You have been removed from the waiting list.",
    },
  },

  /** @see SStorefrontProfilePage **/

  product: {
    review: "Description",
    spec: "Spec",
    comments: "Reviews",
    price: "Price",
    rate: "Rate",
    comment: "Comment",
    warranty: "Warranty",
    return_policy: "Return Policy",
    guide: "Guide",
    shipping: "Shipping",
    related_products_title: "You might also enjoy",
    related_categories_title: "Discover in collections",
  },

  /** @see SStorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Orders History",
      profile: "My Profile",
      favorites: "Favorite Items",
      gift_cards: "Gift Cards",
      return_requests: "Returned Orders",
      basket: "Shopping Cart",
    },
    user_menu: {
      my_shops: "My Stores",
      go_to_admin: "Manage {shop_name}",
      exit_from: "Logout {shop_name}",
      chips: "{chips} Chips",
    },
    login_to_shop: "Login to Store",
    login_to_shop_short: "login",
    item_in_basket_message: "{count} This item is in your cart.",
    search_title: "Search in store {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Cart",
    basket_is_empty: "Your cart is empty.",
    total_price: "Total",
    view_basket: "Your Cart",
    more: "More ...",
    accept_and_pay: "Checkout",
    items: "Item(s)",
  },

  /** {@see SStorefrontHistoryOrdersPhysicalPage} **/
  history_orders_physical: {
    rejected: "Rejected",
    table: {
      code: "Order Code",
      reserved: "Date",
      delivery_state: "Delivery status",
      price: "Total price",
      status: "Payment Status",
    },
  },
  /** {@see SStorefrontOrdersList} **/
  history_orders: {
    table: {
      code: "Order Code",
      items: "Items",
      reserved: "Date",
      delivery_state: "Latest status",
      price: "Total price",
      status: "Payment Status",
    },
  },

  /** {@see SStorefrontUserPagesLayout} **/
  user_page: {
    menu: {
      gift_card: "Gift Card",
      comments: "Comments",
      favorites: "Favorites",
      return_requests: "Returns",
      addresses: "Addresses",
      profile: "profile",
      orders: "Orders",
    },
  },
  /** {@see SStorefrontPhysicalOrderDetailPage} **/
  order_page: {
    title: "Order",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Payment",
      payment_waiting: "Waiting for payment",
      payment_completed: "Paid",
      table: {
        title: "Title",
        amount: "Amount",
        description: "Description",
      },
      total_payment: "Amount paid",
      discount: "Discount",
      discount_code: "Discount Code",
      delivery_fee: "Shipping Cost",
      delivery_fee_after: "No delivery paid",

      total_price: "Total Items Price",
      total_items_discount: "Items Discount",
      total_price_after_offers: "Total after applying offers",
      total_order_price_before_tax: "Pre-tax Total Price",

      buyer_payment: "Customer's Paid Amount",

      payment_is_in_require_capture_message:
        "We have received your payment, but it has not been captured yet.",
      settle_the_earlier_bill_first: "Settle the earlier bill first!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Delivery",
      subtitle: "Buyer information",
      confirm_received_action: "Confirm Product Receipt",
      confirm_received_info:
        "Click the confirmation button if you received the order. If needed, you will be able to submit a referral if you receive confirmation. ",
      Recipient: "Recipient",
      bill: "Invoice",
      name: "Name",
      tel: "Phone",
      email: "Email",
      country: "Country",
      state: "State",
      city: "City",
      address: "Address",
      building_no: "Building number",
      unit_no: "Unit number",
      postal_code: "Postcode",
      description: "Description",
      order_delivered: "The order has been delivered.",
      delivery_time: "Delivery Time",
      tracking_code: "Tracking code",
      tracking_url: "Tracking Url",

      notifications: {
        confirm_delivery: "Your order is confirmed.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Guarantee of originality of goods",
      return: "Return",
      table: {
        product: "Product Name",
        count: "Count",
        unit_price: "Unit price",
        total_price: "Total Price",
        discount: "Discount",
        final_price: "Final Price",
        returned: "Returned",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Return",
    count_input: "Number of returned items",
    count_input_message: "How many items do you return?",
    reason_input: "Reason for return",
    reason_input_message: "Select the reason for returning this item.",
    note_input: "Description",
    note_input_hint: "Describe the reason for the return ..",
    note_input_message:
      "Describe the reason for returning this item if needed.",
    media_message:
      "You can upload image, audio or video of the product here to get better support for product status information. Selecting the file will automatically send and confirm. ",
    video: "Video",
    voice: "Voice",
    add_action: "Send return request",
    notifications: "Your return request has been successfully registered.",
  },
  /** {@see SStorefrontVirtualOrderDetailPage} **/
  virtual_order_page: {
    title: "Order",
    info: {
      title: "Purchased Virtual Product",
    },
  },

  /** {@see SStorefrontUserProfilePage} **/
  user_profile: {
    title: "My Personal Information",
    name: "Name",
    email: "Email",
    tel: "Tel",
    identity: "Authentication",
    success_kyc: "Verified KYC",
    club: "User Level",
    subscription: "News subscription",
    leave_shop: "Leave this store and remove all customers level",
    leave_shop_action: "Leave shop",
    edit_personal_info: "Edit personal info",
    leave_dialog: {
      title: "Leave shop",
      message:
        "Unsubscribing to this store will not delete your order information and records.",
      action: "Leave",
    },
    notifications: {
      leave_success: "Leave shop",
    },
    club_table: {
      discount: "Discount",
      limit: "Limit",
      currency: "Currency",
      free_shipping: "Free Shipping",
    },
  },
  /** {@see SStorefrontBasketPage} **/
  basket_page: {
    title: "Shopping Cart",
    total_price: "Total amount",
    shipping: "Shipping cost",
    free_shipping: "Free Shipping",
    shipping_not_pay: "Not included",
    total_discount: "Total discount",
    customer_club: "Customer Club Member",
    customer_club_discount: "Member Discount",
    final_price: "Final Payment",
    lead_time: "Preparation time",
    lead_time_unit: "hour",
    receive_time: "Preferred delivery time",
    select_time: "Select Delivery Time",
    no_select_time: "As soon as possible",
    transportation_type: "Shipping type",
    days_input: "Delivery days",
    days_input_label: "Days",
    days_input_no_data: "Select at least one day",
    time_input: "Delivery time",
    time_input_label: "Delivery at",
    time_input_label_no_data: "Select at least one time interval",
    support_cod: "Cash on Delivery",
    not_support_cod: "Unable to pay locally!",
    final_confirm_action: "Final order confirmation",
    pay_and_complete_action: "Pay Now",
    pre_confirm_service: "Submit request",
    cross_selling_discount: "Collection discount",

    errors: {
      no_address: "Select the address you want your order to be shipped to.",
      no_phone: "Enter a contact number to coordinate the receipt of goods.",
      select_billing_country: "Select your billing country",
      select_billing_state: "Select your tax region",
    },
    same_billing_address: "Same for billing",
    same_billing_address_desc:
      "The billing address is the same as the shipping address.",
    custom_billing_info: "Different billing address",
    custom_billing_info_desc:
      "You can enter your TAX number and set a different address for billing.",
    basket_empty: "Basket is empty",
    extra_shipping_count: "You will receive {count} packages.",
    select_location_error:
      "Find the place of receipt of the shipment on the map and click on the indicator in the middle of the map to determine the exact address of the recipient.",

    billing_business_desc: "It's a business account with a TAX number.",
    billing_personal_desc: "It's a personal account.",

    no_billing_title: "No billing",
    no_billing_desc: "Leave billing address empty.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Hour",
    count_input: "Count",

    price_changed: "Price has changed. new price:",
    offer: "Get {count}x item by {percent}% off",
    offer_free: "Get {count}x free",
  },

  /** {@see SStorefrontUserAddressesPage} **/
  addresses_page: {
    title: "My Addresses",
    new_action: "New Address",
    Recipient: "Recipient",
    address: "Address",
    building_no: "license plate",
    building_unit: "unit",
    postcode: "Postcode",
    tel: "Tel",
    description: "Note",

    map: {
      title: "My Addresses",
      confirm: "Address registration",
      address_type: "Address",
      receptor_type: "Recipient",
    },
    add_dialog: {
      title: "New Address Name",
      message: "Enter a title for a new address.",
      address_name_input: "Address (required)",
    },
  },
  /** {@see SStorefrontUserReturnRequests} **/
  return_requests: {
    title: "Return requests",
  },
  /** {@see SStorefrontUserFavoritesPage} **/
  user_favorites: {
    title: "Wishlist",
  },
  /** {@see SStorefrontUserCommentsPage} **/
  user_comments: {
    title: "My Comments",
    first_post: "First post",
    last_edit: "Last edit",
  },
  /** {@see SStorefrontUserGiftCardsPage} **/
  user_gift_cards: {
    title: "My Gift Cards",
    add_action: "Add card",
    add_card_dialog: {
      title: "Add Gift Card",
      message:
        "Enter the card number and security code. A gift card will be added to your account.",
      card_number_input: "Card number",
      info: "Note: When buying from the store, you will be shown the option of paying with gift cards. By selecting this option, the amount of your recharge balance will be deducted from the order amount. ",
      add_action: "Card Registration",
    },
  },

  /** {@see SStorefrontProductsComparisonButton} **/
  product_comparison: {
    title: "Compare Products",
    action_button: "Compare",

    /** {@see ProductComparisonList} **/
    list: {
      no_data: "No products were added to the comparison list.",
      price: "Price",
      type: "Type",
      brand: "Brand",
      warranty: "Warranty",
      variants_comparison: "Compare product variants",
      spec: "Technical Specifications",
      pros: "Pros",
      cons: "Cons",
      user_review: "User comments",
      rating: "Rating",
      rating_count: "Number of reviews",
      info: "You can share this product comparison table with your friends by sending the following link. Additionally, you can access it later by saving the link.",
      copy_action: "Copy Comparison Link",
      check_list: ["Yes", "Has"],
      cross_list: ["No", "Hasn't"],
    },
  },
  /** {@see SStorefrontProductsFilterMenu} **/
  product_filter_menu: {
    only_original: "Only originals",
    only_has_discount: "Only discounted",
    price_range: "Price range",
    brands: "Brand",
    main_shop_page: "Store main page",
    home: "Home",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Dear {user}, You have purchased this product. What do you think about this product?",
    notification: {
      title: "Congratulation",
      message: "Your comment has been recorded.",
    },
  },

  /** @see SStorefrontBlogsPage **/
  blogs: {
    title: "Blog",
    add_new_blog: "New Blog",
    popular: "Popular",
    topics: "Topics",
    suggestions: "Suggestions",
  },

  /** @see SStorefrontProfilePage **/
  official_pages: {
    about_us: "About us",
    terms: "Terms of use",
    privacy: "Privacy policy",
    contact_us: "Contact us",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Contact us",
    name: "Name",
    email: "Email",
    phone: "Phone",
    message: "Message",
    notifications: {
      success: "Your message has been sent.",
    },
    submitted_title: "Thank You for Reaching Out to Us!",
    submitted_message:
      "We appreciate your time in contacting us. Your message has been received and our team is currently reviewing it. We will respond as soon as possible, and we thank you for your patience during this time. Your interest and feedback are important to us, and we are committed to providing you with the best possible support.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Payment Confirmation",
      payment_success: "Payment completed.",
      buy_title: "Buy",
      pay_by_giftcards: "Your order was paid with a gift card.",
      free_order: "Your order is free.",
      pay_by_cod: "Your order has been added as cash on delivery.",
      pay_by_dir:
        "Your order has been added successfully. Now you can pay by direct money transfer and then upload the payment receipt on the order page.",
      pay_title: "Payment",
      qr_code_payment: "Payment QR code address created.",
      connecting_to_online_gateway: "Connecting to the online payment gateway.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Remained to the begin",
    title_between_start_end: "Remained to the end",
    title_after_end: "Finished",
    title_no_start_end: "Without time period!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "You can receive one gift per order.",
  },

  /** {@see Coupons} **/
  coupons: {
    coupon_code: "Coupon code",
    add_coupon: "Add coupon",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see SStorefrontAvocadoPage} **/
  /** {@see SStorefrontAvocadoOrderPage} **/

  avocado: {
    not_enable: "The avocado form is not enabled!",
    last_update: "Last update",
    step1:
      "1. Enter the name and details of the product you want to order and click the Add button.",
    title_plc: "Enter the name of the product.",
    description_plc: "Do you have more product descriptions?",
    link_plc: "Do you have a link to the product?",
    image: "Product Image",
    image_msg: "You can send the product image if needed.",
    add_item: "Add item",
    items_list: "List of requested products",
    currency_msg: "You can pay the amount of this order with this currency.",
    step2:
      "2. After adding all the desired items, click on the order review request button. At this stage, we will review the order and let you know about the price. By clicking on this link, you will be able to see the price and payment link.",
    order_action: "Order registration",
    show_all: "Show All",
    show_accepted: "Show Confirmed Items",
    last_orders: "List of your recent orders",
    pending_status: "under review",
    check_now: "Check order",
    add_new_order: "Make New Order",
    pay_online: "Pay online",
    pricing_not_completed_message:
      "Your order is being reviewed. Your order will be reviewed and priced soon and you will be able to pay the order.",

    select_address_message:
      "Please enter your address, and then you can submit the order.",

    delete_item_dialog: {
      title: "Remove item from the shopping cart",
      message: "Do you want to delete this item from the cart?",
      action: "Yes, delete",
    },

    notifications: {
      order_success: "Your order was successfully placed.",
      delete_success: "Item deleted.",
    },
  },

  /** {@see SStorefrontHyperAddOrderForm} **/
  hyper: {
    title: "Order creation",
    message:
      "Create the list of products you want to buy by scanning the product code.",

    currency_msg: "The currency you want to pay with.",
    order_action: "Payment",
    add_new_order: "New order",
    continue_order: "Continue order",

    delete_item_dialog: {
      title: "Remove item from the shopping cart",
      message: "Do you want to delete this item from the cart?",
      action: "Yes, delete",
    },
    notifications: {
      order_success: "Your order was successfully placed.",
      delete_success: "Item deleted.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Upload image of the payment receipt.",
    upload_payment_receipt_done:
      "✔ You have already uploaded the receipt image, wait for our approval. If you need to change, you can replace the previous image with a new one.",
    public_form_title: "Account information for money transfer",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "To-do list",
      message:
        "Specify the titles of the work you want to do and let the buyer know how far it has progressed.",
    },
    booking: {
      title: "Booking / Reservation",
      message:
        "This order will be processed at a specified time, the customer has selected the desired period, if you want to make any changes in the selected period, let the customer know.",

      selected_checkin: "Selected check-in by customer",
      selected_checkout: "Selected check-out by customer",
      change_days_question:
        "Do you need to change during the customer selected days?",
      show_calendar: "Show Calendar of Orders",
    },
    pricing: {
      title: "Pricing",
      message: "How much do you charge for this service?",
    },
    subscription: {
      title: "Subscription",
      message:
        "You can choose the subscription period by purchasing this service on a daily basis. Let the buyer know if you want to change the default values you have already entered.",
      duration: "Subscription period",
    },
    charge: {
      title: "Charge",
      message:
        "You have specified a charge for this item. You can change the charge amount for the item purchased by the customer.",
      charge: "Charge",
    },
  },

  /** @see SStorefrontPrivateAccessCheckView **/
  check_access: {
    waiting_message: "Waiting to check access...",
    no_access_message:
      "Unfortunately, you do not have access to our store. <br/>Please contact us.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Share order",
    title: "Share this order with others.",
    message:
      "It's a secure link, only share it with those you know. Everybody with this link can duplicate your order and see the selected address. It will contain information about your current cart.",
    valid_period: "This link will expire after 48 hours.",
    import_order_action: "Import order",
    retrieve_dialog_title: "Retrieve external order",
    address_included: "Share basket items + Address",
    address_excluded: "Share only basket items",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Prices",
    inventory: "Inventory",
    discount: "Discount",
  },

  rating: {
    product_rating_message:
      "This product has received a rating of {rate} out of 5 stars and rated by {rate_count} people.",
  },

  /** {@see SShopRelatedProducts} **/
  related_products: {
    card: {
      title: "Explore!",
      same_tags_subtitle: "Find more remarkable related items.",
      same_category_subtitle: "Find more remarkable items in this category.",
    },
  },
};
