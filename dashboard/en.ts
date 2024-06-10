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
  commons: {
    pay_today: "Today payment",
    pay_yesterday: "Yesterday payment",
    pay_last30days: "Last 30 days payment",
    create_a_shop: "Create a shop",
    start_free: "Start free",
    featured_apps: "Featured apps",
    more_apps: "More apps",
    my_public_profile: "My public profile page",
    product_admin: "Product Admin",
  },

  numbers: {
    infinite: "Unlimited",
  },

  error: {
    not_fount_data: "Data not found!",
    license_max_limit: "Your license reached the limit!",
  },

  time_spans: {
    days_range: "Days Range",
    today: "Today",
    yesterday: "Yesterday",
    last_7: "Last 7 days",
    last_14: "Last 14 days",
    last_30: "Last 30 days",
    last_90: "Last 90 days",
    custom: "Custom",
  },
  device_types: {
    desktop: "Desktop",
    mobile: "Mobile",
    tablet: "Tablet",
  },

  create_website_action: "Create your website — It's free",
  show_shops_action: "List of my stores",

  // Companies:

  Youtube: "YouTube",
  Linkedin: "Linkedin",
  Twitter: "Twitter",
  Facebook: "Facebook",
  Instagram: "Instagram",
  Reddit: "Reddit",
  Github: "Github",

  theme: {
    dark_mode: "Darnk Mode",
    dark_mode_description:
      "Choose this option if you desire a dark background with white text color.",
    light_mode: "Light Mode",
    light_mode_description:
      "Choose this option if you wish for the background to be light and the text to be in black color.",
  },

  // ------------------ Pages Title ------------------
  page_titles: {
    home: "Selldone ╏ The Business Operating System For Fast-growing Companies",
    login: "Login",
    register: "Register",
    auth_2fa: "2 factor Authenticate 🔐",
    academy: "Blog",
    help: "Help Center",
    price_list: "Price list",
    my_stores: "My Stores",
    roles: "My Roles",
    wallet: "My Wallets",
    personal_info: "Personal Info ╏ KYC",
    companies: "My Companies",
    access_control: "Access Control",
    security_center: "Security Center",
    gifts: {
      received: "Gifts ╏ Received",
      send: "Gifts ╏ Sent",
    },
    monetization: {
      linked_accounts: "Monetization ╏ Linked Accounts",
      plans: "Monetization ╏ Plan & Links",
    },
    affiliate: "Affiliate",
    avocado: "Avocado — Modern Social Sales Channel",
    guild: "Guild — Collective Sales Channel",
    partners_login: "Partners ╏ Client login",
  },

  /** NOT USED! */
  /* data: {
    shop: {
      users: "User",
      views: "View",
      likes: "Like",
      favorites: "Favorite",
      comments: "Comment",
      ratings: "Rating",
      wishlist: "Wishlist",
      new_visitors: "New Visitor",
      returning_visitors: "Return Visitor",
      page_views: "Page View",
      order_physical_added: "Physical Add to Cart",
      order_physical_checkout: "Physical Checkout",
      order_virtual_added: "Virtual Add to Cart",
      order_virtual_checkout: "Virtual Checkout",
      order_file_added: "File Add to Cart",
      order_file_checkout: "File Checkout",
      order_service_added: "Service Add to Cart",
      order_service_checkout: "Service Checkout",
    },
  },*/

  blank_is_all_products: "Leave blank to include all products!",

  // ---------------------------------------------

  /** @see ShopCautionHelper **/
  cautions: {
    title:
      "Manage your business professionally by doing the following tips. Keep reading for tips on how to increase profit margin and more. We are with you along the way.",
    no_payment_method: {
      title: "Payment method",
      message:
        "To unlock the full potential of your shop, please add a payment method! 🛍️💳",
      action: "Shop gateways",
    },
    link_account: {
      title: "Link account",
      message:
        "To enhance your shop's experience, please link an account with {currency}!",
      action: "Shop accounts",
    },
    no_domain: {
      title: "Add Domain",
      message:
        "Easily link one or several personal domains to your store, and watch your website come to life on your very own domain in no time! It's swift and straightforward.",
    },
    domain_not_approved: {
      title: "Domain Verification",
      message:
        "Let's get your {domain} up and running! Please double-check the DNS settings and confirm the domain to ensure everything is set perfectly.",
    },
    no_currency: {
      title: "Add Currency",
      message:
        "Ensure you set at least one currency for your store to enhance the shopping experience!",
      action: "Currency Management",
    },
    no_primary_domain: {
      title: "The main domain",
      message:
        "Set your primary domain with a simple click! Just tap the star button next to your desired domain name to make it the flagship domain for your store. This move is essential for optimal search engine performance. Rest assured, your store remains accessible via all active domains.",
    },
    shop_complete: {
      title: "Complete information",
      action: "Shop Settings",
      location_msg: "Add your location",
      days_open_msg: "Set open days",
      time_open_msg: "Set open and close time",
      description_msg: "Write a brief description about your business",
      icon_msg: "Set your store logo",
      shop_gateways_msg: "Add payment method",
      socials_msg: "Add your social links",
      clubs_msg: "Set customer clubs",
      domains_msg: "Add custom domain",
      primary_msg: "Set a domain as primary",
    },
  },

  /** @see BSupportMenu **/
  support: {
    request: "Request support",

    category: "Category",
    title: "Support",
    message:
      "Ask any requests or questions. Our support team will guide you. We suggest you to ask your question in the page related to your request. For example, if you have a question about domain setting, send it in your store's domain setting page.",

    close_at: "Closed at {date}",
    close_ticket_by_user: "Thanks, I got the answer",
  },

  /** @see SShopProductRatingView **/
  surveys: ["Very poor", "Poor", "Normal", "Good", "Excellent"],

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

  /** {@see Helps} **/

  helps: {
    title: "Selldone Help Center",
    subtitle:
      "Welcome to Selldone. If you are building a new online store on a business OS, you can find more information here.",
    add_new_help: "New Help",
    resources: "Resources",

    categories: {
      Welcome: "Get Started",
      Setup: "Setup",
      Sell: "Sales & Marketing",
      Developer: "Develop",

      Product: "Products & Categories Management",
      Blog: "CMS & Blog",
      Order: "Orders Fulfillment Center",
      Channel: "Sales Channels",
      Accounting: "Accounting & Payment Methods",
      Incentives: "Incentives",
      Marketing: "Marketing & Campaigns",
      Logistic: "Logistic & Shipping",
      Customers: "Customers Club & Segmentation",
      Page: "Landing & Custom Pages",
      Access: "Staff / API Access Management",
      Application: "Applications",
      POS: "POS",
    },
    faq: "FAQ",
    github: "Github Repository",
    admin_api_app: "Admin API web service",
    shop_api_app: "Shop API web service",
    design_kit: "Design kits",
    community: "Community",
  },

  /** {@see Blogs} **/
  /** {@see InterestTopicsView} **/

  blogs: {
    title: "Blog",
    subtitle:
      "Lessons for business, confidence and the knowledge you need to create a thriving business.",
    add_new_blog: "New Blog",
    popular: "Popular",
    topics: "Topics",
    select_topics: "Select your job.",
    select_job_topics: "Select your job-related topics",
    select_interested_topics: "What topics are you interested in?",
  },

  /** {@see ApiDocs} **/
  api: {
    title: "API & Integration",
    message:
      "One of the key features of Selldone is providing robust and secure APIs to manage and connect stores to other services such as warehousing, accounting, etc. You can also design custom apps and web apps for your store. Without having to worry about server and data management. Just use the domain APIs. You will have all the process of managing users, authentication and other domain features.",
  },

  /** {@see BPageShuttle} **/
  user_dashboard: {
    title: "My shuttle",
    subtitle: "Comprehensive overview of my businesses.",
    menu: {
      affiliate: "Affiliate",
      monetize: "Monetize",
      gift: "Gift",
      security: "Security",
      access: "Access",
      business: "Company",
      wallet: "Wallet",
      identification: "Identity",
      stores: "Stores",
      roles: "Roles",
      home: "Home",
      expert: "Expert",
      deals: "Deals",
      providers: "Providers",
    },
    shops: {
      create_new: "Create new shop",
      create_new_sub: "Free",
      create_new_sub_need_initial_charge:
        "Building the first store is free. Probably one shop is enough for your business, but if you need to build more stores, the cost of building a new store is 25$. We withdraw the amount from your wallet account.",

      menu: {
        title: "My Shops",
        shops: "Shops",
        new: "New",
      },

      accept_invite_question: "Do you accept this invitation?",
      /** {@see BShopCard} **/

      shop_card: {
        menu_orders: {
          physical: "Physical product orders",
          virtual: "Virtual product orders",
          files: "File orders",
          services: "Service orders",
          subscriptions: "Subscriptions orders",
        },
        status: "Status",
        license: "License",
        volume: "Used space",
        expire: "License expiration",
        products: "Products",
        page_views: "Views",
        user_behavior: "Customer behavior",
        time_span: "from {time} till now",
        finance_report: "Financial report",
        buys: "Purchases",
        payments: "Payments",
        orders: "Orders",
        currency: "Currency",
        no_payment: "No payment!",
        no_purchase: "No purchase!",
      },
    },
  },

  widgets: {
    /** {@see BDashboardFeedback} **/
    overview: {
      title: "Customers feedback",
      title_small: "overview",
      wishlist: "Wishlist",
      comments: "Comments",
      likes: "Likes",
      favorites: "Favorites",
      powers: "Claps",
      views: "Views",
      report_today: "Today report",
      report_last7days: "Last 7 days report",
      report_last30days: "Last 30 days report",
    },
  },

  /** {@see BPageShop} **/
  admin_shop: {
    title: "Store",
    menu: {
      edit: "Settings",
      automation: "Automation",
      application: "Applications",
      access: "Access",
      pages: "Pages",
      channels: "Channels",
      classification: "Classification",
      marketing: "Marketing",
      customers: "Customers",
      logistic: "Logistic",
      auditing: "Accounting",
      incentives: "Incentives",
      process_center: "Orders",
      blog: "Blog",
      products: "Products",
      shops: "Shops",
      dashboard: "Dashboard",
      autopilot: "Autopilot",
      apps: "Apps",
      pos: "POS",
      seo: "SEO",
      localization: "Localization",
    },

    /** {@see BPageShopDashboard} **/
    dashboard: {
      title: "Shop dashboard",
      online_staff: "Online staff",

      notify_referral: {
        message: "Send your invitation link to friends and get free vouchers.",
        action: "My referral link",
      },

      /** {@see BDashboardShopTechnical} **/
      info: {
        title: "Technical",
        subtitle: "Technical overview of your business OS.",

        shop_name: "Shop name",
        shop_link: "Shop link",
        site_map: "Sitemap",
        shop_domains: "Domains",
        shop_domains_msg: "Connected custom domains list.",

        home_msg:
          "Set the default homepage of your website. It can be changed for each custom domain.",

        add_domain: "Add new domain",
        currencies: "Active currencies",
        currencies_alert: "Select at least one currency for the store!",
        status: "Status",
        license: "License",
        expire: "License expiry date",
        upgrade_license_action: "Upgrade to {name}",
        wage: "Fee",
        cpu_message:
          "The number of resources you have tailored to the purchased plan and the resources you add to your service.",
        hide_domains: "Hide my domains",
        show_domains: "Show my domains",

        /** {@see BDomainsList} **/
        table: {
          primary: "Primary",
          url: "Url",
          site_map: "Site map",
          enable: "Enable",
          indexed: "Indexed",
          and_more: "& more..",
          auto_repair: "Auto repair",
        },
        add_dialog: {
          title: "Configure Store Domain",
          step1:
            "You can define the IP limit of record A for a DNS domain or subdomain from the following values:",
          step2: "Add a DNS TXT record:",
          set_ip_alert:
            "Set the IP value of record A <b> {ip} </b> - If your domain has not been added through CDNs.",

          input_domain: "Domain URL",
          correct: "Domain settings are correct.",
          set_message: "Set CNAME of this domain to {cname}.",
          input_domain_message: "Enter the domain name without http and https.",
          ssl_message:
            "Don't worry about the SSL certificate for your website. You can get SSL through free or paid CDN providers like Cloudflare.",
          active: "The domain is active",
          inactive: "Domain is disabled",
          success_message:
            "Congratulations, your site is enabled on {domain}. You can introduce your business and brand to the world through this domain.",

          delete_action: "Delete domain?",
        },
        set_home_dialog: {
          title: "Set domain home page",
        },
        notification: {
          add_message: "Domain address added successfully.",
          update_message: "The domain updated successfully.",
          delete_domain_message: "The domain deleted successfully.",
        },
        alert: {
          title: "Delete Domain",
          message:
            "Do you want to delete this domain? Make sure to reset your domain's DNS record values to prevent others from fraud.",
        },
      },

      /** {@see BDashboardShopOrders} **/
      active_orders: {
        title: "Orders",
        title_small:
          "Physical, File, Virtual, Service, and Subscription Orders via online, avocado and hyper channels.",
        pending_orders: "Pending orders",
        physical: "Physical orders",
        virtual: "Virtual orders",
        file: "File orders",
        service: "Service orders",
        subscription: "Subscription orders",
      },
      /** {@see BDashboardShopProducts} **/
      products: {
        title: "Inventory",
        title_small: "Products, Services, Files",

        total_products: "Total product types",
      },
      /** {@see BDashboardShopFinance} **/
      finance: {
        title: "Financial",
        title_small: "Financial report",
        total_30days_title: "Total sales amount",
        last_30_day: "Last 30 days",
        pay_amount_chart_title: "Payments",
        sell_amount_chart_title: "Sales",
        discount_amount_chart_title: "Discount",
        currency_convert_to: "To currency",
        active_currencies: "Active currencies",
        sell_count_chart_title: "Number of sales by variant",
        active_gateways: "Active payment gateway",
        received_last_24h: "Received last 7 hours",
        pie: {
          title: "Today's sales ratio",
          no_data: "No sale today",
        },
        pay_amount: "Payment amount",
        sell_amount: "Sale amount",
        discount_amount: "Discount amount",
        sell_count: "Sale count",
        table: {
          currency: "Currency",
          total_sell_30days: "30 day total sales",
          sell_daily: "Daily Sales Rate",
          sell: "Sale",
          pay: "Pay",
        },
      },
      /** {@see BDashboardShopCustomers} **/
      customers: {
        title: "Shop customers",
        title_small: "Conversion report",
        total_customers: "Total",
        new_customers_today: "Today",
        new_customers_week: "Last 7 days",
        orders_count: "Orders count",
        days_range: "Days Range",
        new_users: "New registered users",

        chart: {
          new_customers: "New customers",
          customers: "Total customers",
        },
      },

      /** {@see BDashboardShopPerformance} **/
      performance: {
        title: "Today",
        title_small: "Users and sales overview",
        users: "Users",
        views: "Views",
        orders: "Orders",
        payments: "Payments",
        no_visitor_today: "You had no visitors today.",
      },
    },

    /** {@see BPageShopProductsList} **/
    products: {
      title: "Products list",
      products_list: "Back to list",
      products_menu: "Products management",

      view_que_list: "View queue list",
      menu_products_list: "Products list",
      menu_export: "Export products",
      menu_import: "Import products",
      menu_show_deletes: "Show deleted products",
      drop_import_message:
        "Drop products list file (CSV, XLS, XLSX format) here to start adding bulk products. Ensure that the file has the Selldone products list format.",

      menu_advanced_options: "Advanced options",
      /** {@see BProductWindowProductLarge} **/

      product_widget: {
        product_type: "Product type",
        price: "Price",
        value_added: "Commission",
        discount: "Discount",
        in_stock: "In stock",
        product_unit: "Unit",
        total_sell: "Total Sales",
        total_view: "Total views",
        view_unit: "Times",
        review_unit: "Reviews",
      },

      /** {@see WidgetFolderCard} **/
      folder_widget: {
        products: "Products",
        products_unit: "Types",
        sub_categories: "Categories",
        sub_categories_unit: "Items",
        views: "Views",
        views_unit: "Times",
      },
    },

    /** {@see BPageShopBlogs}  **/
    blogs: {
      new: "Write new",
      blogs: "Blog",

      /** {@see BPageShopBlogsList} **/
      list: {
        title: "My Articles",
        subtitle:
          "Compose articles using a contemporary inline editor to showcase yourself and your business effectively. Prioritizing original content is essential for crafting high-quality, SEO-friendly blog posts.",
        waiting_message: "Receiving information ... please wait",
        published: "Published",
        draft: "Draft",
        private: "Private",
        public: "Public",
        table: {
          title: "Title",
          author: "Author",
          claps: "Claps",
          like: "Like",
          comments: "Comments",
          views: "Views",
          publish_state: "Status",
          created_at: "Creation Date",
          updated_at: "Last Update",
        },
      },
    },

    /** {@see ShopPBPageShopOrdersrocessCenter} **/
    orders: {
      /** {@see BProcessCenterList} **/
      physical: {
        waiting_message: "Receiving information ... please wait",
        rejected: "Rejected",
        delivery: "Shipping",
        discount: "Discount",
        not_paid: "Not paid",

        table: {
          order_number: "Order code",
          order_date: "Checkout Date",
          status: "Last status",
          price: "Total amount",
          payment_status: "Payment Status",
        },
      },

      /** {@see BPageShopOrdersVirtual} **/
      virtual: {
        waiting_message: "Receiving information ... please wait",

        discount: "Discount",
        table: {
          order_number: "Order code",
          product: "Product",
          order_date: "Registration date",
          status: "Last status",
          price: "Total amount",
          payment_status: "Payment Status",
        },
      },
    },

    /** {@see BPageShopFinance} **/
    auditing: {
      menu: {
        exchange: "Exchange",
        gateway: "Gateway",
        invoice: "Billing",
        report: "Report",
        tax: "Tax",
        drop_shipping: "Reseller receipts",
        reseller_accounts: "Reseller accounts",
        valuations: "Valuations",
      },

      /** {@see BPageShopFinanceBill} **/
      invoice: {
        title: "Shop Linked Wallets",
        subtitle:
          "Fees, commissions, and store expenses are debited from these virtual wallet accounts.",

        title_add: "Connect new wallet account",
        subtitle_add:
          "You should create a new wallet for each currency and connect it to your store. The service fee will be withdrawn from this wallet.",
        add_account: "Add Account",
        charge_account: "Charge account",
        show_transaction: "Show transactions",

        table: {
          currency: "Currency",
          account_number: "Account Number",
          account_name: "Account Name",
          balance: "Balance",
          free_balance: "Available Balance",
          actions: "Remove",
        },
        add_account_dialog: {
          title: "Connecting credit account to store",
          subtitle:
            "Upon opening a wallet account with Selldone, you will receive a virtual credit card. The Selldone service fee will be charged to this account. However, if your account balance is insufficient, the fee will become a payable debt.",
          account_number: "Account Number",
          account_number_input_message:
            "The store will be linked to this account. This account will be used for fees and costs. ",
          balance: "Account Balance",
          connect_account_to_shop: "Connect Account to Store",
        },
        notifications: {
          connect_account_success: "Account added successfully.",
          delete_account_success:
            "Account removed from the store successfully.",
        },
        alert: {
          delete_account: "Disconnect account",
          delete_account_message:
            "Do you want to remove this account from the store accounts list?",
          delete_account_action: "Delete Account",
        },
        inform_charge_account: "Charge your account!",
        inform_charge_account_critical:
          "Charge your account to prevent service suspension!",
      },

      /** {@see BPageShopFinanceGateways} **/
      gateway: {
        title: "Payment Methods",
        sub_title:
          "List of active payment methods. If you want to add a new method to your shop, press the following button. We highly recommended not exceeding 10 added payment gateways.",
        add_gateway: "New payment method",

        add_gateway_dialog: {
          title: "Select Currency",
          country_currencies: "Local currencies",
          crypto_currencies: "Cryptocurrencies",
          active_gateways: "Active payment methods",

          confirm: "Add payment method",
        },
      },

      /** {@see BPageShopFinanceExchange} **/
      exchange: {
        title: "Store Active Currencies",
        subtitle:
          "Users will be able to select one of the active currencies and prices of the products will be calculated and displayed. It is up to the seller to enter the exchange rate. ",
        shop_currencies_input: "Active currencies for users",
        shop_currencies_input_error: "Select at least one currency",
        rates: {
          title: "Currency Exchange Rate",
          sub_title:
            "You can enter product prices based on any of the currencies below and the product prices will be calculated automatically at conversion rates between your currencies.",
          message:
            "By entering the exchange rates between currencies, the prices of your products will be automatically calculated and updated.",
          add_new_rate: "Add new rate",
        },
        table: {
          waiting_receive_data: "Getting information ... please wait",
          rate_input: "Exchange rate",
          from: "From",
          to: "To",
          exchange_rate: "Exchange rate",
          edit: "Edit",
          delete: "Delete",
          auto: "Auto rate",
        },
        add_rate_dialog: {
          title: "Set Exchange Rate",
          message:
            "Be careful in entering information. The prices of your products will be calculated based on the rates entered here. ",
          currency_from: "From currency",
          currency_to: "To currency",
          exchange_rate: "Exchange rate",
        },
        alert: {
          title: "Delete Conversion Rate",
          message: "Do you want to delete this conversion rate?",
          action: "Delete",
        },
        notifications: {
          delete_success: "Exchange rate removed.",
          add_success: "Exchange rate updated.",
          update_success: "Store active currencies updated.",
        },
      },
    }, // End of auditing

    /** {@see BPageShopLogistic} **/
    logistic: {
      /** {@see BPageShopLogisticWarehouse} **/
      warehouses: {
        title: "Warehouses",
        subtitle: "List of my warehouses.",
      },

      warehouse_btn: "Add new warehouse",
      warehouse_btn_error:
        "Set your warehouse, store, or origin of your business. It's vital to have in the shipping cost calculation and checkout process.",
      size_unit: {
        title: "Size unit",
        subtitle: "The unit used for length, width and height.",
      },
      mass_unit: {
        title: "Mass unit",
        subtitle: "The unit used for weight.",
      },

      menu: {
        return_request: "Returned",
        delivery: "Shipping",
        inventory: "Inventory",
        warehouse: "warehouse",
        logistic_apps: "Logistics",
        profiles: "Profiles",
        includes: "Includes",
      },

      /** {@see BPageShopLogisticInventory} **/
      warehouse: {
        title: "Store Warehouse",
        sub_title: "This address is used as the origin of the shipping.",
        table: {
          title: "Inventory List",
          sub_title:
            "List of all store products including physical, virtual, file and service",
        },
      },

      /** {@see BPageShopLogisticShipping} **/
      delivery: {
        title: "Shipping Methods",

        sub_title:
          "By incorporating shipping options into your store in this section, you enable a range of delivery methods. The Cash on Delivery method can be activated for each shipping service. Each service allows for independent cost calculations, and you can customize these transportation services to suit your needs. Additionally, you have the option to integrate third-party shipping services or personal couriers with each shipping option.",
        add_transportation: "Add Shipping Method",

        /** {@see DeliveryFormWidget} **/
        delivery_form: {
          payment: "Payment options",
          limits: "Limits",

          currency_input: "Reference currency for cost calculations",
          currency_input_message: "Costs are calculated in this currency",
          distance_input: "Distance covered from warehouse",
          distance_input_message: "0 or -1 means no limit.",
          max_weight_input: "Maximum acceptable pack weight",
          max_weight_input_message: "0 or -1 means no limit.",
          max_size_input: "Maximum Package Dimensions",
          width: "Width",
          length: "Length",
          height: "Height",
          days_input: "Available delivery dates",
          days_input_nodata: "Select the delivery day",
          hours_input: "Avaialbe delivery times",
          hours_input_nodata: "Select a time period",
          vacation_input: "Do you deliver on holidays?",

          pricing: "Calculate Price",
          const_input: "Fixed cost",
          distance_cof_input: "Distance factor",
          distance_cof_input_dim: "Per {dim}",
          weight_cof_input: "Weight factor",
          weight_cof_input_dim: "Per {dim}",
          price_cof_input: "Order price factor",
          price_cof_input_message:
            "Includes insurance costs and other services such as COD costs.",
          price_cof_input_dim: "Per {dim}",
          distance_weight_cof_input: "Distance 🞬 Weight factor",
          distance_weight_cof_input_dim: "For every {weight} per {distance}",
          free_shipping_input: "Free shipping",
          free_shipping_limit_input: "Minimum order cost for free shipping",

          shipping_cost_calculation: "Shipping cost calculation",
          sod_true: "Get shipping cost on destination",
          sod_true_message:
            "Ensure that your shipping service accepts shipping cost on destination.",
          sod_false: "Auto shipping cost calculation",

          cod_input: "Support COD",
          cod_true: "Accept cash on delivery",
          cod_false: "Accept online payment only",
          cod_true_message: "Make sure your shipping service accepts COD.",

          notifications: {
            update_success: "Shipping service settings completed successfully.",
          },
        },
      },
    }, // End of logistic

    /** {@see BPageShopCrm} **/
    users: {
      menu: {
        customers: "Customers",
        contact_form: "Contacts",
        faq: "FAQ",
        club: "Club",
        report: "Report",
      },

      /** {@see BPageShopCrmReport} **/
      report: {
        title: "Customers Overview",
        sub_title: "You will see the live status of your customers here. ",
        report_30days_by_time:
          "User activity based on date and time in last 30 days",
        report_30days_by_location:
          "Geolocation users activity in the last 30 days",
      },
      /** {@see BPageShopCrmClub} **/
      club: {
        title: "Customers Club",
        sub_title:
          "Enter monthly and yearly purchase amount and the currnecy to activate each level. Your customers will be logged into your customer club as they meet the requirements of monthly or annual purchase. ",
        item: {
          members_count: "Number of members",
          purchases_count: "The Number of Orders",
          monthly: "Monthly",
          annually: "Yearly",
          discount_percent: "Discount Rate",
          discount_limit: "Discount limit",
        },

        edit_dialog: {
          title: "Customer Level Management",
          currency_input: "Currency",
          currency_input_message:
            "Total purchases are calculated in this currency.",
          free_shipping_input: "Free Shipping",
          monthly_input: "Monthly purchase rate",
          annually_input: "Annual purchase rate",
          discount_percent_input: "Discount rate for club members",
          discount_limit_input: "Discount limit",
          description_input: "Description",
          description_input_message: "Enter a brief description of this level.",
        },
        notifications: {
          update_success: "Changes applied to the customer club.",
        },
      },
      /** {@see BPageShopCrmFaq} **/
      faq: {
        title: "Frequently Asked Questions",
        sub_title: "Add, edit, and answer your customers questions.",
      },
    }, // End of users

    /** {@see BPageShopMarketing} **/
    marketing: {
      menu: {
        campaigns: "Campaigns",
        cross_selling: "Cross selling",
        affiliate: "Affiliate",
        emails: "Emails",
        funnel: "Funnel",
      },

      /** {@see BPageShopMarketingCampaign} **/
      campaign: {
        name_input_name: "Campaign Name",
        name_input_placeholder: "Enter your campaign title.",
        create_campaign_action: "Create new campaign",
        table: {
          title: "Title",
          state: "Status",
          discount: "Discount",
          landing: "Landing page",
          start: "Start",
          end: "End",
        },
        notifications: {
          add_success_title: "Create a Campaign",
          add_success: "Your campaign was created.",
        },
      },
    }, // End of marketing

    /** {@see BPageShopClassification} **/
    categories: {
      title: "Category List",
      subtitle:
        "Categories are the key feature of your online store. We encourage you to use these powerful categorize tools to build a modern storefront and make it easy for your customers to find right products.",

      menu: {
        add_new: "Add new category",
        categories_list: "Categories list",
        export: "Export categories",
        import: "Import categories (CSV)",
      },
      /** {@see categoriesGraph} **/
      graph: {
        title: "Hierarchy of Categories ",
        subtitle:
          "You can have a complete overview of your store categories and how users navigate them. With the right arrangement of categories, your customers can find products quickly and the conversion rate will rise.",
        visits_count: "Visit",
        normal: "Simple",
        items_count: "Number of items",
        home: "Home",
      },
    }, // End of categories
    /** {@see AdminShopApps} **/
    apps: {
      menu: {
        app_store: "App Store",
        my_apps: "Apps",
      },
      /** {@see BPageShopSettingApplications} **/
      my_apps: {
        title: "Applications",
        subtitle:
          "Discover the ease of managing your business applications with Selldone App Store. Our platform offers a comprehensive suite of tools designed to optimize your business operations. From innovative management solutions to productivity-boosting apps, Selldone provides a seamless experience for businesses seeking efficiency and growth.",
        all: "All",
      },
      /** {@see BAppShopStore} **/
      store: {
        title: "App store",
        subtitle:
          "Connect your favorite services to your business securely. We add plugins and apps based on our customers requests.",

        nodata: "No plugin found.",
        all: "all",
        more: "more",
      },
    }, // End of apps
    /** {@see BPageShopPages} **/
    pages: {
      menu: {
        new_page: "New Page",
        contact_us: "Contact Us",
        privacy: "Privacy",
        terms: "Terms",
        about_us: "About Us",
        landings: "Landing",
        popup: "Popup",
        static: "Static",
      },
    }, // End of pages

    /** {@see BPageShopPermission} **/
    permissions: {
      menu: {
        persons: "Staff",
        roles: "Roles",
        api: "API",
      },
      /** {@see BPageShopPermissionStaff} **/
      shop_permissions: {
        menu: {
          users: "Personnel List",
          new_user: "Add New Staff",
          new_user_message:
            "Users granted access to the dashboard and administrative sections of this store.",
          email_input_placeholder: "Email",
          email_input: "User Email Address",
          level_input: "Access level",
          add_user_action: "Add Staff",
        },
        delete_alert: {
          title: "Remove Access",
          message: "Do you want to delete this user?",
          action: "Delete",
        },
        notifications: {
          add_success_title: "Add Access",
          add_success: "New access added.",
          delete_success_title: "Delete access",
          delete_success: "Access deleted.",
        },
      },

      /** {@see BPageShopPermissionApi} **/
      shop_api: {
        title: "Clients",
        message:
          "These keys are used to create Access Token by your server. Note that the keys are confidential and only on the server in a way that is not visible to others. ",
      },
    }, // End of permissions
    /** {@see BPageShopApplications} **/
    applications: {
      /** {@see BPageShopApplicationsPwa} **/
      pwa: {
        title: "Web App",
        sub_title: "It's the preview of your store's web app.",
        message:
          "You can edit your website welcome page on your iPhone and iPad in the iOS app.",
        ios_app: "iOS app",
      },

      /** {@see BPageShopApplicationsIos} **/
      ios: {
        title: "iOS app",
        sub_title: "You will soon be able to build an iOS app for your store.",
        message:
          "Maximum file size: 512 KB, you can upload files up to 1MB in size, provided our compression system is able to reduce the size to 512KB. The uploaded image will be intelligently resized. ",
      },
      /** {@see BPageShopApplicationsAndroid} **/
      android: {
        title: "Android Application",
        sub_title: "Build your own Android app",
        message:
          "Fill out this form and press the build key. There will be no need for anything else. All steps of your app's Build and Sign process are performed on the cloud servers. The final app will be uploaded to all AppStores.",
        server_un_available:
          "Experimentally, the application server is not connected at this time.",
        app_building_progress: "Your app is being built.",
        app_build_success: "Your app is ready.",
        download_app_action: "Get the app",
        firmware_version: "Firmware Version",
        main_info: "Application Package",
        package_name_input_message: "Make sure the package name is unique.",
        package_name_input_alert:
          "If you change this name, you will no longer be able to update your previous apps in AppStore and install a new one. Note that older versions app users will also not be able to log in to their accounts. ",
        version_input: "Version",
        version_input_message:
          "This number must always be greater than its previous value.",
        version_name_input: "version name",
        version_name_input_message:
          "Enter a unique name for this version of the app.",
        use_selldone_key: "Selldone default keys",
        use_last_key: "Saved key",
        use_new_key: "New key",
        appearance: "Appearance",
        app_name_input: "App name",
        app_name_input_message: "This will be the main name of your app.",
        app_title_input: "app title",
        app_title_input_message: "This title appears at the top of the app.",
        app_title_input_placeholder: "Enter a title",
        app_icon_input: "app icon",
        app_icon_input_placeholder: "Select the zip file of app icons.",
        generate_icon_pack_action: "Build Icon Pack",
        splash_design: "Splash Screen Desgin",
        splash_logo_input: "Splash Screen Logo",
        splash_logo_input_placeholder: "Select an image for the Splash Screen.",
        splash_title_input: "Splash Screen Title",
        splash_title_input_placeholder: "Enter a title for Splash Screen",
        splash_title_input_message:
          "This title will be displayed in large font size.",
        splash_message_input: "Splash Screen Message",
        splash_message_input_placeholder: "Message ...",
        splash_message_input_message:
          "This message will be displayed as a thumbnail below.",

        dark_theme: "Dark theme",
        light_theme: "light theme",
        build: "Build",
        building_info:
          "Building an application on a cloud server takes 10 seconds to several minutes. Please be patient. The download file link will appear here once the application is ready.",
        update_mode_action: "Update",
        build_mode_action: "Build app",
        notifications: {
          icon_pack_not_valid_error: "File is not correct.",
          start_building_title: "Building ...",
          start_building_message:
            "Request for building Android application submitted.",
          build_success_title: "Congratulations",
          build_success:
            "Your Android app is ready, and you can download it now.",
        },
      },
    }, // End of applications

    /** {@see ShopAutomation} **/
    automation: {
      menu: {
        autopilot: "Autopilot",
      },
    },

    /** {@see BPageShopSetting} **/
    edit: {
      menu: {
        delete: "Delete Store",
        activity_time: "Time",
        footer: "Menu",
        info: "Info",
        notification: "Notifications",
        home: "Home",
        locations: "Locations",
        license: "License",
        theme: "Theme",
        sms: "Sms",
        email: "Email",
        domain: "Domain",
        verifications: "Verifications",
        flow: "Flow",
        business_model: "Business Model",
      },
      delete_dialog: {
        title: "Delete Store",
        message: "Do you want to delete <b> {title} </b> Store?",
        action: "Delete Store",
      },

      notifications: {
        delete_success: "Store deleted.",
      },

      /** {@see BPageShopSettingInfo} **/
      info: {
        title_tab: {
          title: "Business name & Language",
          subtitle: "Set a public name and default language.",
        },
        name_tab: {
          title: "Shop unique name",
          subtitle: "It's your business username.",
        },

        description_tab: {
          title: "Your business story",
          subtitle:
            "Write about your business and its unique value proposition.",
        },
        contact_tab: {
          title: "Contact & Local business",
          subtitle:
            "Public contact information and Google local business setup.",
        },
        image_tab: {
          title: "Logo",
          subtitle: "Select a unique logo for your brand.",
        },
      },

      /** {@see ShopEditMenuFooter} **/
      badge: {
        external_title: "Manage external badges",
        external_message:
          "Here, you can enter the address of the badge image and the link to it. URLs must be from an approved website. ",
      },
      /** {@see BPageShopSettingMenus} **/
      edit_menu: {
        title: "Menus",

        footer: {
          title: "Footer menu",
          sub_title:
            "You can configure the bottom menu of your store page here. These menus can be home pages, designed pages or external links. ",
        },

        header: {
          title: "Header menu",
          sub_title:
            "This menu is only displayed on screens larger than mobile, and at the top of the home page, product categories, landings, and product pages.",
        },

        save_menu: "Save Menu",
        dialog: {
          main_pages: "Main Pages",
          custom_pages: "Landing pages",
        },
        table: {
          home: "Home",
          shop: "Shop",
          blogs: "Blog",
          about_us: "About Us",
          privacy: "Privacy",
          terms: "Terms of Use",
          faq: "FAQ",
          contact_us: "Contact Us",
        },
        notifications: {
          save_success: "The menu has been updated successfully.",
        },
      },

      /** {@see ShopEdit_Footer} **/
      social: {
        title: "Social Media",
        message:
          "Enter your official social media link in this section. Follow the instructions for each item to confirm the addresses. ",
      },

      /** {@see BShopSettingWorkingDays} **/
      time: {
        title: "Working Days",
        sub_title: "Set working days and time",
        days_open_input: "Days",
        days_open_input_nodata: "Select at least one day",
        start_time_input: "Store activity start time",
        start_time_input_hint: "Store Open hours",
        end_time_input: "Store Close time",
        end_time_input_hint: "Store activity end time",
        customer_support_service: "Customer Service",
        response_time_input: "Customer Service Status",
        support_24h: "24 hours 7 days a week ",
        support_normal: "Only during office hours",
        no_service: "no",
        notifications: {
          update_success: "Store edited.",
        },
      },
    }, // End of edit
  }, // End of admin_shop

  /** {@see BCategoryInput} **/
  category_select: {
    category_input_no_category: "No category",
  },

  /** {@see BProductAddFull} **/
  add_product: {
    title_new: "New product",
    title_new_category: "New category",
    title_new_drop_shipping: "Add dropshipping",

    title_edit: "Edit product",
    delete: "Delete product",
    completed: "Completed",

    menu: {
      type: "Product type",
      general_info: "General info",
      rating: "Survey and Features",
      spec: "Specifications",
      images: "Pictures",
      price: "Price",
      inputs: "Input",
      outputs: "output",
      extra: "Additional details",
      review: "Product Description",
      inventory: "Inventory / Variants",
      change_status: "Change Status",
    },

    select_type: {
      title: "Choose your product or service type.",
    },

    /** {@see BProductEditInfo} **/
    edit_info: {
      category_input: "Category",
      category_input_msg: "Empty: In the store's root",
      product_name: "Product name*",
      product_name_placeholder: "Your product name here..",
      product_code: "Product code (English)",
      sku: {
        label: "SKU",
        message: "Stock Keeping Unit",
      },
      mpn: {
        label: "MPN",
        message: "Manufacturer Part Number",
      },

      external_link: "External link",

      brand_placeholder: "Brand Ex. Apple.. (Optional)",

      is_original: "Is this an original product?",
      is_original_message:
        "If you do not set your product original, the fake badge will be shown for this product.",
      return_warranty:
        "How many days does this product have a return guarantee?",
      warehouse_section: "Warehouse & Manufacturing",
      conditions_section: "Product conditions",
      warranty_section: "Warranty & Delivery",

      unit_input: "Product unit",
      unit_message: "Enter the unit if needed. Ex: KG, Meter, ...",

      unit_section: "Product unit",
      unit_float: "Float unit (soon)",
      unit_float_hint:
        "For example, the customer can order 3 kg of fruit, but the amount sent to the customer is slightly different from the ordered amount.",
      unit_float_message:
        "During order processing, the delivered amount may differ from the ordered amount. The system automatically calculates this difference and records it as your debt to the customer, which can be applied to the next orders.",

      marketplace: {
        // Vendor panel > Fixed mode
        vendor_panel_message:
          "The <b> {vendor_name} </b> is the owner of the product.",
        // Marketplace panel > Subscription products
        subscription_message:
          "Subscription products can have one vendor, so you can create them in the vendor panel or assign a vendor to them on the creation step. The selected vendor will be the owner of the product.",
        default_message:
          "You can specify whether this product belongs to one vendor and therefore only one vendor can sell it, or this product belongs to Marketplace and more than one vendor can sell it.",

        single_vendor_title: "Single vendor",
        single_vendor_desc:
          "This product belongs to a vendor, and the selected vendor can manage it.",

        multi_vendors_title: "Multiple vendors",
        multi_vendors_desc:
          "This product belongs to the marketplace and only can be edited in the marketplace panel.",
      },

      category: {
        subtitle:
          "Configure the category and title to be displayed in your listing.",
      },
      unit: {
        subtitle:
          "You can personalize the display of pricing and call-to-action elements on the product page.",
      },
      custom_pricing: {
        title: "Custom pricing form",
        subtitle:
          "You can create or assign a valuation (a pricing input form) to the product, and your customers can select between variants or customize your merchandise by an intuitive input form.",
        valuation_need_saved_product_message:
          "Please save the product first, and then you can assign a valuation model.",
        assign_valuation_message:
          "Please assign a valuation model to this product.",
        edit_pricing_action: "Edit pricing form",
        add_pricing_action: "Create new pricing form",
      },
      action: {
        title: "Custom buy button",
        message:
          "You can change icon by following this pattern : {icon name} caption...",
        placeholder: "Enter call to action...",
        multi_language_dialog_title: "Custom buy button caption",
      },
      warehouse: {
        subtitle:
          "This information is utilized by the warehouse management system and serves to globally identify the product.",
      },
      gtin: {
        hint: "Supported values are UPC (North America, 12 digits), EAN (Europe, 13 digits), JAN (Japan, 8 or 13 digits), ISBN (books, 13 digits).",
        label: "Product's Global Trade Item Number",
        placeholder: "Global trade number here.. (Optional)",
      },
      hsn: {
        hint: "HSN, or Harmonized System of Nomenclature, is an internationally standardized classification system for categorizing goods and products.",
        placeholder: "6~16 digits HSN code.. (Optional)",
        label: "HSN",
      },
      condition: {
        label: "Product condition in your store",
        message: "Please choose the condition of this product.",
        subtitle:
          "Inform your customers about the condition and brand of the product you're offering.",
      },
      brand: {
        label: "Brand",
        placeholder: "Brand Ex. Apple.. (Optional)",
      },
      warranty: {
        subtitle:
          "Set the warranty and product status, as this information regarding warranty will be displayed to the customer and helps establish the time frame within which products can be returned after purchase.",

        label: "Warranty",
        placeholder: "Golden 24 months warranty.. (Optional)",
      },
      status: {
        title: "Status",
        subtitle:
          "The product's status determines its availability online and in-store. To make a product draft, just switch its status to 'Inactive'..",
      },
      profiles: {
        title: "Profiles",
        subtitle:
          "You can define warranty, return policy, shipping, and guide and assign them to this product. It will be shown as new tabs on the product page.",
      },
      shortcuts: {
        title: "Assign Product to Additional Categories",
        subtitle:
          "This feature allows you to list the product in multiple categories while retaining its placement in the primary category set under Product > Edit > Category. Essentially, it functions similarly to creating 'shortcuts' in operating systems, enabling the product to appear in additional specified categories.",
      },
    },

    /** {@see BProductEditFeatures} **/
    rating_pros_cons: {
      title: "Survey",
      message:
        "Enter a list of product specifications for your customers to rate your product. (Up to 5 items)",
      rating_input: "Polls",
      rating_input_message: "You can add 5 items to the poll.",
      rating_input_placeholder:
        "Write your custom survey question here... and press enter!",

      item_unit: "Item",

      pros_title: "Pros",
      pros_message: "Enter features of of the product. (Up to 5 items)",
      pros_input_title: "Feature Title",
      pros_input_value: "Feature value",
      pros_group: "Pros of product",
      pros_group_messages: "The main features of the product",

      cons_title: "Cons",
      cons_message: "Enter the weaknesses of the product. (Up to 5 items)",
      cons_input_title: "Weakness title",
      cons_input_value: "Weakness value",
      cons_group: "Weaknesses of product",
      cons_group_messages: "The main weaknesses of the product",

      select_from_list: "Select from list",

      suggestion_rating: [
        "Good quality",
        "Good value",
        "Would Recommend",
        "Features and capabilities",
        "Ease to use",
        "Well designed",
        "Reliable Performance",
        "Effective Customer Support",
        "Satisfactory Delivery Time",
        "Product Matches Description",
        "Durable and Long-lasting",
        "Cost-Effective",
        "Attractive Packaging",
        "Innovative Design",
        "Environmentally Friendly",
        "Sufficient Instructions/Manual",
        "Met Expectations",
        "User-Friendly Interface",
        "High Efficiency",
        "Great After-Sale Service",
        "Versatile Functionality",
        "Competitive Pricing",
        "Availability of Spare Parts/Accessories",
        "Trustworthy Brand",
        "Safe to Use",
        "Prompt and Accurate Service",
      ],

      notifications: {
        add_rating_success: `User-rating {rating_name} option added.`,
        delete_rating_success: `User-rating {rating_name} option deleted.`,

        add_pros_success: "Product feature added.",
        delete_pros_success: "Product feature removed.",

        add_cons_success: "Product weakness added.",
        delete_cons_success: "Product weakness removed.",
      },
    },

    /** {@see BProductEditSpec} **/
    edit_spec: {
      title: "Technical Specifications",
      subtitle:
        "Insert product specifications here. This information will be displayed to customers and can also be utilized in the category's intelligent filtering system.",
      manual: {
        title: "Manually",
        subtitle:
          "Add product specifications manually by defining groups and key-values pair.",
        add_group_action: "Add Group",
        add_item_action: "Add Spec Value",
      },
      import: {
        subtitle:
          "You can import technical specifications of similar products.",
        action_title: "Import",
        action_subtitle: "Clone spec from another product.",
      },
      ai: {
        title: "AI",
        subtitle:
          "You can automatically create product specifications by submitting the product's raw data in textual form.",
        action_title: "Auto Generate by AI",
        action_subtitle: "Create product specifications by abstract prompt.",
      },

      group_input_header: "Add Group",
      item_title_header: "Add Item",
      group_input: "Group header",
      group_input_message: "Enter the title.",
      group_add_action: "Add Group",

      item_title_input: "Title",
      item_title_input_message: "Enter the feature title.",

      item_value_input: "Value",
      item_value_input_message: "Enter the feature value.",

      add_item_action: "Add Item",

      dialog: {
        title: "Import Technical Specifications",
        code_input: "Product ID",
        code_input_message: "Product Code: P0000 ...",
        spec_view_title: "Specifications of the selected product",
        set_spec_action: "Duplicate Technical Specifications",
      },
      notifications: {
        enter_group_title_error: "Enter headline value",
        enter_item_title_and_value_error:
          "Enter the title and value of the feature",
        spec_saved_success: "Product specifications saved.",
      },
    },
    /** {@see BProductEditImages} **/
    edit_images: {
      title: "Main image",
      main_image_input_nodata: "Upload product image.",
      main_image_input_message: "This image is displayed in the product list.",
      preview: "Preview",
      image_style: "Image style",
      background_is_white: "White Background",
      background_is_white_msg: "Does the image have white background??",

      images: {
        title: "Product Images Gallery",
        sub_title:
          "Upload product images, common to all product variants, in this section.",
      },
      video: {
        title: "Video",
        sub_title:
          "First, upload your product video on Youtube, and then put the video URL here.",
      },
    },
    /** {@see BProductEditPrice} **/
    pricing: {
      edit_price: "Pricing",
      price_input: "Price",
      currency_input: "Currency",
      currency_input_messages: "Price is calculated in this currency.",
      commission_input: "Commission",
      commission_message:
        "This option is useful only for particular types of merchants like wholesalers. If you are not a wholesaler, leave this option blank. The price that buyers see is sum of price and commission. For adding tax click Accounting > Tax.",
      add_commission_action: "Add commission",

      price_label_input: "Price label",
      price_label_message:
        "Add extra info about price like ( $1.5/Fl Oz ). Use cases: grocery, FMCG.",
      add_price_label_action: "Add price label",
      discount_input: "Discount",
      discount_input_message: "Discount rate",
      has_discount_period_input: "Is this discount valid for a specific time?",
      discount_timespan: "Enter the discount period.",
      start_input: "Start",
      end_input: "End",
      start_input_placeholder: "Select the start time ",
      end_input_placeholder: "Select the end time",
      independent_price: "The price only for this variant",
      same_price: "The price for the main product",
      variant_pricing_message:
        "By selecting this option, the price of this variant can be set independently of the main product.",

      subtitle: {
        marketplace:
          "Within the marketplace, the primary product pricing displayed is the listing price, while the actual price is determined based on the vendor-product relationship records.",
        subscription:
          "For subscriptions, only the listing price is displayed, while the actual cost will be determined based on the selected subscription plan.",
        service:
          "For service-based products, the listed pricing is solely for display purposes, providing an estimated cost of the service. The actual service price will be determined by you once the customer has placed their order (upon checkout).",
        file: "This refers to the listed and actual price of the file, which customers must pay in order to gain access to the files.",
        default:
          "This refers to the product's listed price and also takes into account the price of any variants that do not have separate pricing.",
      },
      extra_pricings: {
        title: "Add extra pricing",
        subtitle: "Apply varying prices based on the quantity purchased.",
      },
    },
    /** {@see ProductEditInputs} **/
    inputs_edit: {
      title: "Input Form Message",
      sub_title:
        "You can create a data entry form for each product, so shoppers send you information when buying a product. For example, this information could be a name for an engraving on a stone.",
      message_input: "Message to User",
      message_input_message:
        "This message will be shown to the customer when purchasing products.",
      inputs_form: "Input Form Structure",
    },

    /** {@see BProductEditExtra} **/
    extra_edit: {
      physical: {
        title: "Shipping Information",
        sub_title:
          "Cost and time of preparation are calculated based on the information in this section. Be sure to enter the information according to the selected units in the store (weight, dimensions, distance).",
      },

      notifications: {
        save_title: "Packaging Updated",
        save_msg: "Product packaging information updated successfully.",
      },
    },

    variants: {
      not_available:
        "It is currently not possible to select a variant for this type of product.",
    },

    delete_product: {
      title: "Remove product",
      message: `Do you want to delete <b> {product_title} </b>?`,
      tips: "If you accidentally delete a product, you can recover it by navigating to your Shop > Products, enabling Show Deleted Items, and then right-clicking on the product, and selecting Restore.",
    },
  },

  /** {@see BProductExtraPricingAdd} **/
  extra_pricing_add_dialog: {
    title: "Extra Pricing for over {min}",
    subtitle:
      "The system automatically determines the order and priority for price calculation. Please input the minimum quantity required for this pricing to take effect.",
    min_quantity: "Minimum quantity",
  },
  /** {@see BProductInventoryManagementPhysical} **/
  product_inventory_management_physical: {
    subtitle: {
      dropshipping:
        "Inventory for dropshipping products is set by wholesalers, and cannot be modified here.",
      marketplace:
        "The overall product inventory in the marketplace is determined by adding up the inventories of all vendors. You cannot modify it here.",
      default: "Specify the product's inventory count here.",
    },
  },

  /** {@see BProductGoogleCategoryInput} **/
  google_product_category_input: {
    label: "Google product category code",
    hint: "Represents the category of your product according to the Google's product taxonomy.",
    placeholder: "Enter product or service category.. (Optional)",
  },
  /** {@see LogisticProfileType} **/
  LogisticProfileType: {
    WARRANTY: {
      title: "Warranty",
      desc: "A warranty is a term of a contract. Depending on the terms of the contract, a product warranty may cover a product such that a manufacturer provides a warranty to a consumer with which the manufacturer has no direct contractual relationship. ",
    },
    RETURN_POLICY: {
      title: "Return Policy",
      desc: "Return policies are the rules a retailer creates to manage how customers return and exchange unwanted merchandise they purchased. A return policy tells customers what items can be returned and for what reasons, as well as the timeframe over which returns are accepted.",
    },
    GUIDE: {
      title: "Guide",
      desc: "It can be a size table of dresses or a diamond selection guide. The important thing to consider before creating guide profiles is that they should be applicable to more than one product.",
    },
    SHIPPING: {
      title: "Shipping",
      desc: "A shipping policy is a concise document or webpage that outlines important information around shipping when an order is placed online. It often includes details on shipping costs and methods, delivery times, and more.",
    },
  },
  /** {@see BProductProfileLogistic} **/
  product_logistic_profile: {
    dialog: {
      title: "Select logistic profile",
      add_new_action: "Add new profile",
      add_new_disable_msg: "Marketplace owner",
    },
  },

  /** {@see BProductProfileTax} **/
  product_tax_profile: {
    description: {
      default: "Default",
      dedicated: "Dedicated",

      subscription: "We can apply tax only on the payment creation step.",
      is_disabled: "This tax profile is disabled! (⚠️Warning)",
      shipping: "Shipping",
      fixed_rate: "TAX",
      location_based_rate: "Tax: Location based",
      shipping_location_based_rate: "Shipping: Location based",
      include_in_price: "Included in price",
    },
    dialog: {
      header: "Select tax profile",

      title: "Tax profile",
      subtitle:
        "You can assign particular tax regulations to the product. Should a tax profile not be chosen for the product, the default store tax regulations will then be applied.",

      action_manage: "Manage tax",
      action_manage_sub: "Shop > Finance > Tax",

      subscription_tips:
        "When you select a tax profile for subscription product, we update<code>tax code</code> and set inclusive/exclusive mode on your payment service provider. The selected tax profile specifies whether the price is considered inclusive of taxes or exclusive of taxes. One of <code>inclusive</code> or <code>exclusive</code>. Once specified as either inclusive or exclusive, it cannot be changed.<br /><br /><b>Important!</b> After changing the tax profile, you should click on pricing plans on the Product > Inventory tab and click the Save button to apply changes.",
    },
  },

  /** {@see BProductProfileMap} **/
  product_location_profile: {
    title: "Location",
    empty_subtitle:
      "Assign a location to the product if it's a location-based item.",
    dialog: {
      header: "Select location profile",
      action_new_location: "Add new location",
      title: "Location profile",
      subtitle:
        "You can pin products on the map location by assigning location tags to the products.",
      tips: "<b>Important: </b> Assign a location to the product <b>only</b> if you want to show the product on the specific location on the map. The pined product must have the location as its main specification, like <b>rental homes/places</b> or in-person services like<b>Hairdressing and Spa</b>.",
    },
  },

  /** {@see BTranslationButton} **/
  translation_button: {
    header: "Multi Language",
    auto_action: "Auto Translate",
    premium_user_only: "Premium Users",
  },

  /** {@see BProductProfileInclude} **/
  product_include_profile: {
    subtitle:
      "Include a list of items that come with the product or service package.",
    dialog: {
      header: "Product Package Items",
      title: "Included items",
      subtitle: "This is a compilation of items that come with the product.",
      action_manage: "Manage items",
      action_disable_msg: "Marketplace owner",
      select_items_tips:
        "Create or choose package components that come with the product or service. Utilize this feature to emphasize what customers can anticipate receiving upon purchasing the item. We advise employing this function only when it is crucial for the customer to understand the contents included, such as when buying a smartphone.",
      create_item_tips:
        "Alternatively, you can include a new item. Utilize square images, as we will automatically resize uploaded pictures to a 256x256 square format. To ensure optimal appearance across all templates, use minimalistic images with transparent backgrounds and maintain a consistent pattern for all your products.",
      create_new_item_action: "Create new included item",
    },
  },

  /** {@see BPageProduct} **/
  product_admin: {
    products_list: "Product List",
    product: "Product",

    menu: {
      edit: "Edit",
      review: "Description",
      orders: "Orders",
      inventory: "Inventory",
      dashboard: "Dashboard",
      back_to_products: "Products",
      drop_shipping: "Dropshipping",
    },

    /** {@see BPageProductDashboard} **/
    dashboard: {
      /** {@see BProductInfoAbstractView} **/
      info: {
        title: "Profile",
        title_small: "Product",
        category: "Product Category",
        link: "Product Link",
        type: "Type",
        inputs: "Input information",
        outputs: "Output information",
        user_data_form: "Buyer Information Form",
      },
      /** {@see BProductOrdersAbstractView} **/
      orders: {
        title: "Orders",
        title_small: "Unprocessed",
        physical_orders_title: "Shopping carts with this product",
        send_count_in_period: "Shipped orders between {start} ~ {end}",
        downloads_count_in_period:
          "File downloaded count between {start} ~ {end}",
      },

      /** {@see BProductInventoryAbstractView} **/
      inventory: {
        title: "Inventory",
        title_small: "Warehouse",
        total_sell: "Total Sales",
        total_sell_today: "Today Sales",
        total_sell_timespan: "Total Sales between {start} ~ {end}",
        chart: {
          labels: ["Inventory", "Sale"],
        },
        subscribers_title: "Subscribers",
        subscribers_title_small: "Total subscribed orders",
      },

      /** {@see BProductFinanceCharts} **/
      finance: {
        title: "Financial",
        title_small: "Purchase Report between  {start} ~ {end}.",
        select_mode_title: "Show By",
        modes: {
          sell: "Sale",
          payment: "Payment",
          discount: "Discount",
        },
        currency_select_title: "Price by selected currency",
        sell_today: "Today sales",
        product_price: "Product Price",
        currency_unit: "Currency Unit",
        sell_30days: "30 days sales ",
        sell_daily: "Daily sales",
        sell_yesterday: "Yesterday sales",
      },

      /** {@see BProductRatingCharts} **/
      survey: {
        title: "Product Rating",
        title_small: "Customer Satisfaction Report",
        total_participation: "Total contributions",
        today_participation: "Today ratings",
        last7days_participation: "Last 7 days contributions",
        chart: {
          participate: "Participation",
          participate_title: "The number of contributions",
          score: "Score",
        },
      },

      /** {@see BProductMarketingAbstractView} **/
      inform: {
        title: "Customer Expectations",
        title_small: "Waiting for discounts or availability.",
        message:
          "Notify customers when products go on sale or become available.",
        waiting_for_auction: "Waiting for products go on sales.",
        waiting_for_available: "Waiting for the products to be available.",
        unit: "person(s)",
      },
    },

    /** {@see BPageProductInventory} **/
    inventory: {
      /** {@see BProductInventoryManagement} **/
      variants: {
        inventory_list: "Inventory list",
        add_variant: "Add variant",

        title: "Product Inventory / Product Variants List",
        sub_title:
          "If this product has more than one variant, enter them in this section. You can separately define the amount, price and discount of each variant; otherwise the default values ​​of the product will be applied for pricing. ",
        add_action: "Add Variant",
        count_input: "Inventory",
        count_input_action: "Set count",
        management_title: "Inventory management and product variants",
        add_title: "Add product variant",
        edit_title: "Edit product variant",
        notifications: {
          add_success: "Product variant added.",
          delete_success: "Product variant Deleted.",
          save_product_inventory_success: "Inventory of products saved.",
        },
      },

      /** {@see BProductInventoryManagementVirtual} **/
      variant_item: {
        price: "price",
        same_as_product: "Similar to the main product",
        in_stock: "Inventory",
        delete_dialog: {
          title: "Delete product variant",
          message: "Do you want to delete this variant?",
        },
      },
      /** {@see BProductVariantAdd} **/
      variant_add_edit: {
        title: "Defining Product Variant",
        message: "Unique Product Variant Code",
        active_input: "Is this Variant active?",
        sku: "SKU",
        sku_tips: "Product Warehouse Code.",
        mpn: "MPN",
        mpn_tips: "Product code inserted by manufacturer on product packaging",
        variant_variable: "Variant variables",
        pricing: "Pricing",
        has_pricing_input: "Is the price different from the main product?",
        inventory: "Inventory",
        inventory_unit: "Items",
        delivery_info: "Packaging & Shipping",
        images: "Variant's images",
        images_message:
          "After saving this variant you will be able to add more images here.",
      },
    },

    /** {@see BPageProductArticle} **/
    edit_article: {
      menu: {
        tags: "Tags",
        article: "Article",
      },
    },
  }, // product_admin

  /** {@see BProductExtraInput} **/
  product_extra_physical: {
    weight: "Package weight",
    weight_unit: "Kg",
    size: "Package Dimensions",
    dimension: "Cm",
    width: "Width",
    length: "Length",
    height: "Height",
    lead_time_title: "Preparation time",
    lead_time: "Preparation time",
    lead_time_dimension: "Hour(s)",
    bulk_action: "Bulk Actions",
    bulk_action_input: "Update all variants",
    bulk_action_msg:
      "Set product packaging and preparation time for all variants.",
  },

  /** {@see BProductImagesGallery} **/
  product_images_list: {
    upload_button: "More Product Images",
    upload_an_image: "Select an image.",
    notifications: {
      update_sort_success: "Images sorting saved",
      delete_image_title: "Delete product image",
      delete_image_success: "Image deleted successfully",
    },
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Prices",
    inventory: "Inventory",
    discount: "Discount",
  },

  /** {@see BGiftcardTypeAdd} **/
  gift_card_type_edit: {
    title_input: "Title",
    color_input: "Card color",
    charge_input: "Initial charge",
    charge_input_hint: "Initial charge for each card",
    currency_input: "Currency",
    currency_input_message: "Only for purchase with this currency",
    lifetime_input: "Card validity (month)",
    lifetime_input_message: "Card validity",
    card_image_input: "Card image",
    notifications: {
      create_success: "Card created",
      update_success: "Card updated",
    },
  },

  /** {@see BInventoryWarehouse} **/
  shop_warehouse_edit: {
    title: "Add Warehouse",
    message:
      "Enter your warehouse address and profile to calculate shipping cost.",
    name_input: "Warehouse Name",
    address: "Address",
    name_input_message: "Enter a nickname for your warehouse.",
    person_name: "Officer Name",
    phone_number: "Contact Number",
    map_title: "Store Warehouse Address",
    confirm_action: "Warehouse Approval",
    address_name: "Warehouse",
    notifications: {
      success_save: "Changes saved successfully.",
    },
  },

  /** {@see BPageShopLogisticInventoryList} **/
  inventory_list: {
    title: "Store Inventory",
    subtitle: "List of all products in store.",
    cant_set_here: "Can't set here",

    search_input: "Product Search...",
    search_input_title: "Search among store products",
    apply_filter: "Apply filter",
    inventory: "Inventory list",
    export: "Export inventory",
    import: "Import inventory",
    bulk_price: "Bulk price change",
    bulk_discount: "Bulk discount change",
    category_filter_msg: "⚡ It will apply to all products and subcategories!",
    table: {
      waiting: "Receiving information ... please wait",
      open_state: "Active",
      close_state: "Inactive",
      image: "Image",
      product: "Product Name",
      code: "Product Code",
      sku: "SKU",
      mpn: "MPN",
      original: "Original",
      status: "Status",
      in_stock: "In stock",
      edit: "Change",
    },
    bulk_price_dialog: {
      title: "Bulk actions > Price",
      message:
        "The following amount will apply as a percentage to the price of all products in your store. Also, the calculated price values will be intelligently converted to the closest round number based on the selected currency.Be careful in entering the values.",
      check: "I approve price changes.",
      add_percent_tab: "Add Percent",
      add_constant_tab: "Add Constant",
      ending_tab: "Ending strategy",
    },
    bulk_discount_dialog: {
      title: "Bulk actions > Discount",
      message:
        "Note: The following amount will as a percentage to the discount of all products in your store. Also, the calculated discount values will be intelligently converted to the closest round number based on the selected currency.Be careful in entering the values.",
      check: "I approve discount changes.",
    },
    notifications: {
      save_success: "Inventory change saved.",
    },
  },

  /** {@see BProductSpecTable} **/
  spec_view: {
    auto_save_input: "Auto save",
  },

  /** {@see STimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Remaining to the start",
    title_between_start_end: "Remaining to the end",
    title_after_end: "Finished",
    title_no_start_end: "Without time period!",
  },

  /** {@see GeoMap} **/
  geo_map: {
    views: "Views",
    views_unit: "Times",
    product_views: "Product views",
    buys: "Purchases",
    buys_unit: "Orders",
    baskets: "Active carts",
    added_items: "Add items",
    removed_items: "Remove items",
  },

  /** {@see FaqRequestsList} **/
  faq_list: {
    table: {
      nodata: "No questions found.",
      more_data_action: "More questions ..",
      user: "User",
      tag: "Tag",
      question: "Question",
      officer: "Staff",
      answer: "Answer",
      created_at: "Date",
      priority: "Priority",
      edit: "Edit",
    },
    dialog: {
      add_new_action: "Submit new question",
      edit_action: "Edit FAQ",
      question_input: "Question",
      question_input_placeholder: "Ask your question  ..",
      link_input: "Link",
      link_input_placeholder: "You can refer to a link in reply.",
      answer_input: "Answer",
      answer_input_placeholder: "Enter answer text ..",
      tag_input: "Tag (Category Title)",
      tag_input_placeholder: "Enter a short title",
      priority_input: "Priority: (0 to 10)",
    },
    delete_alert: {
      title: "Delete Question",
      message: "Do you want to delete this question?",
      action: "Delete",
    },
    notifications: {
      send_success: "Your answer has been submitted successfully.",
      delete_success: "Your question has been deleted successfully.",
    },
  },
  /** {@see ContactMessagesList} **/
  contact_messages_list: {
    load_more_action: "More messages ..",

    table: {
      nodata: "No questions found.",
      user: "User",
      message: "Message body",
      category: "Category",
      officer: "Staff",
      answer: "Answer",
      created_at: "Date",
      contact: "Contact",
      edit: "Edit",
    },

    dialog: {
      title: "Reply to message",
      category: "Category",
      user_name: "Name",
      email: "Email",
      phone: "Contact Number",
      message: "Message text",
      status: "Response Status",
      status_answered: "Answered",
      status_waiting: "Awaiting Response",
      answer_input: "Reply text",
      mail_input: "Send mail",
      mail_input_message:
        "If you enable this, your response will be sent to the user email.",
    },
    delete_alert: {
      title: "Delete Message",
      message: "Do you want to delete this message?",
      action: "Delete",
    },
    notifications: {
      send_success: "Your request has been submitted successfully.",
      delete_success: "Message deleted.",
    },
  },
  /** {@see BPageCampaign} **/
  campaign: {
    title: "Campaign",
    menu: {
      setting: "Settings",
      return: "Back",
      dashboard: "Dashboard",
      links: "Links",
      landing: "Landing",
      ads: "Ads",
      finance: "Finance",
    },
    /** {@see BPageCampaignDashboard} **/
    dashboard: {
      title: "Dashboard",
      status: "Status overview",
      sessions: "Sessions",
      links_overview: "Campaign links overview",
      orders: "Orders",
      performance: "Campaign performance",
      links_funnel: "Campaign links Performance",
      no_links:
        "There is no data available! Please create a link to your campaign.",
      social: "Social media leads",
      conversion_over_time: "Conversion over time",
      total_campaign_sell: "Total sales by campaign",
    },
    /** {@see BPageCampaignFinance} **/
    finance: {
      title: "Finance report",
      campaign_revenue: "Campaign revenue",
      total_revenue:
        "This represents the overall revenue generated by each campaign.",
      links_revenue: "Campaign Links revenue",
      payments_over_time: "Sales over time",
      all_links: "All links",
    },
    /** {@see BPageCampaignLanding} **/
    landing: {
      empty_message: "You can specify a custom landing page for the campaign.",
      set_landing: "Set landing page",
      create_landing: "Create new landing page",
    },

    /** {@see BPageCampaignLinks} **/
    links: {
      title: "Campaign links",
      url_input_message: "Enter your target page url",
    },

    /** {@see BPageCampaignSetting} **/
    setting: {
      menu: {
        config: "Config",
        timespan: "Time Period",
        banner: "Banner",
        Notification: "Notification",
      },

      general_setting: {
        title: "General Campaign Settings",
        sub_title: "Set the campaign's name, landing page, and discount code.",

        name_input: "Campaign Name",
        name_input_hint: "Add a Name to Your Campaign",
        enable_input: "Is the campaign active?",
        page_input: "Landing Page",
        discount_code_input: "Discount code",
        limit: "Discount limit",
        max_count: "Max count",
        max_count_unit: "Items",
        start: "Start",
        end: "End",
        notification_enable_input: "Notification enabled?",

        landing_page: "Landing Page",
        discount_code: "Discount Code",

        auto: "Default campaign",
        auto_message:
          "This campaign has been established as the default campaign for the shop.",
      },
      time_setting: {
        title: "Time period",
        sub_title:
          "You have the option to set the start and end date & time for the campaign.",
        start_input: "Start",
        start_input_placeholder: "Select Campaign Start Time",
        end_input: "End",
        end_input_placeholder: "Select Campaign End Time",
      },
      banner_setting: {
        title: "Shop Banner",
        sub_title:
          "This message will be prominently displayed as a banner at the top of the shop page.",

        message_input: "Message text",
        message_input_placeholder: "Special Festival ...",
        message_input_hint: "Banner message text top of store",
        bg_image_input: "Background image URL",
        bg_image_input_hint: "Full background image URL",
        repeat_pattern: "Repeat pattern",
        simple: "Simple",
        dark_input: "Dark theme?",
        icon_input: "Icon",
        icon_input_hint:
          "Material Design Icon Name or Fontawsom: fa:fas fa-star",
        anim_input: "Animation Address",
        anim_input_message: "Lottie animation file URL",
        preview: "Preview",
        preview_update_action: "Update preview",
        bg_color: "Background color",
        icon_bg: "Icon background color",
      },
      notifications: {
        title: "Notification",
        sub_title: "Create a notification and link it to your campaign.",
        update_success: "Your campaign has been updated.",
        action_button: "Action button",
        background_color: "Background color",
        text_color: "Text color",
        action_color: "Action color",
        action_text_color: "Action text color",
        notification_image: "Notification image",
        notification_bg: "Notification background",
        show_preview: "Show preview",
        persistence: "Persistence",
        persistence_message:
          "Do you want to show every time your user visits the website",
        radius: "Radius",
        show_delay: "Show delay",
      },
    },
  },

  /** {@see BCategoryAdd} **/
  add_category: {
    title_edit: "Edit category",
    title_update: "Add new category",
    menu: {
      delete: "Delete category",
      filter: "Filters",
      settings: "Settings",
      back: "Back",
    },
    title_input: "Category Title *",
    title_input_error: "Enter a title for the category.",
    name_input: "Category name (English) *",
    name_input_error: "Select a unique name for the category",
    description_input: "Category description",
    description_input_message: "Enter a brief description of the category ..",
    parent_input: "Parent category",
    parent_input_message: "This category appears on the store homepage.",
    image_input: "Category image",
    image_input_placeholder: "Select an image for the category",
    edit_action: "Edit category",
    add_action: "Add category",
    back_action: "Back",
    no_category: "No Categories",
    star: "Star",

    filter: {
      title: "Category filters",
      sub_title: "Modify the product filters for this category.",
      message:
        "Enter and save the common technical feature title for this category in the box below. After saving the list, the filter categories will be displayed along with the contents of each category. Color, weight, size, brand, etc. are automatically extracted from product variant. ",
    },
    delete_alert: {
      title: "Remove Category",
      message: "Do you want to delete the {title} category?",
      action: "Delete",
    },
    notifications: {
      add_success: "New category added.",
      edit_success: "Category edited.",
      delete_success: "Deleted {title}.",
    },
    /** {@see BCategoryFilterEditor} **/
    edit_filter: {
      spec_input: "Technical Specifications List",
      spec_input_message:
        "List of features that you want to be shown in the filter section",
      price: "Price",
      min: "Min",
      max: "Max",
      suggested_list: {
        brand: "Brand",
        colors: "Color",
        styles: "Design",
        volumes: "Volume",
        weights: "Weight",
        packs: "Number per pack",
        types: "Type",
      },
      notifications: {
        edit_success: "Category edited.",
      },
    },
  },

  /** {@see BAppShopList} **/
  apps_list: {
    nodata: "There is no app installed on your store",
    inactive: "Inactive",
    my_apps: "My apps",
    app_store: "Add new app",
  },

  /** {@see BShopAdd} **/
  add_shop: {
    menu: {
      shop_title: "Store title",
      shop_name: "Store name",
      description: "Description",
      contact: "Contact Information",
      image: "Image",
    },
    title_input: "Title",
    title_input_tips: "Enter the name of your store, brand or company.",
    active_message: "Set active to everyone can access your website.",
    language_input_message: "Select your store language.",
    name_input: "Name",
    name_input_message: "Enter a name for your store.",
    name_input_tips:
      "Do not use non-English characters, spaces or letters, if used, the store name may not be displayed properly.",
    description_input: "Store description",
    description_input_message: "Write a brief description about your business.",
    description_input_tips:
      "This description will appear in your store's footer and will also be used as the default meta tag description for your store pages.",
    address_input: "Store Address",
    address_input_message: "Enter exact store location address",

    phone_input: "Phone number",
    phone_input_message: "Customer Contact Number",
    phone_input_tips:
      "Enter contact number with country code. This number is also used to display information in Google search. ",
    email_input: "Email",
    email_input_message: "Email address for customers",
    locality_input: "location",
    locality_input_message: "Store location",
    region_input: "State or Province",
    region_input_message: "State or province in which you operate",
    country_input: "Country",
    country_input_message: "Country of business",
    postal_code_input: "Postal Code",
    postal_code_input_message: "Store Postal Code",
    image_input: "Store Image",

    map: {
      title: "Store Address",
      confirm: "Address registration",
      address: "address",
      receptor: "store",
    },

    create_shop_action: "Create Store",
    update_shop_action: "Update",

    notifications: {
      copy_success: "Copy of store address.",
      name_available: `This name ({name}) is available.`,
      add_success: `Store {title} created.`,
      edit_success: "Store edited.",
    },
  },

  /** {@see BProductInventoryManagementVirtual} **/
  virtual_items_list: {
    add_virtual_item: "Add virtual item",
    add_virtual_item_desc:
      "To sell virtual products, you can add them in this section. The number of virtual items is equal to the number of free items in this section. Once customers purchase the virtual item, the link will be sent to them.",

    filter_action: "Apply filter",
    not_processed: "Unprocessed Orders",
    title: "List of Items",
    vew_order: "View order",

    table: {
      nodata: "There are no items",
      product: "Product",
      data: "Data",
      status: "Status",
      user_message: "User message",
      updated_at: "Last update",
      order: "Order",
      delete: "Delete",
    },
    notifications: {
      delete_success: "Item deleted successfully.",
    },
  },

  /** {@see BProductVirtualItemAdd} **/
  add_virtual_item: {
    title_edit: "Edit values",
    title_add: "Add item to product",
    sub_title: "Creating and Editing Virtual Products",
    message:
      "After the payment is completed, we will send the virtual item values to the buyer. You can set the structure of this form in the Product >Edit > Output tab.",
    edit_outputs: "Edit output form",
    notifications: {
      edit_success: "Item edited.",
      add_success: "Item added to the list.",
    },
  },

  /** {@see BPageOrderVirtual} **/
  virtual_process_center: {
    title: "Processing Center",
    sub_title: "Order Processing",
    virtual_product: "virtual product",
    menu: {
      report: "Report",
      timeline: "Timeline",
      order: "Order",
    },

    /** {@see BOrderVirtualItem} **/
    outputs_widget: {
      title: "Output form",
      table: {
        title: "Title",
        value: "Value",
      },
      tips: [
        "After completing the customer request, hit the order confirmation key to notify the buyer of the order.",
        "Once the order is approved, the buyer will not be able to edit the input information.",
      ],
      alerts: {
        order_completed_by_admin: "Order has been completed.",
        order_completed_by_buyer: "Order has been completed by the buyer.",
        waiting_for_buyer: "Waiting for the buyer approval ..",
      },
    },
  },

  /** {@see BPageOrderFile} **/
  file_process_center: {
    title: "Processing Center",
    sub_title: "Order Processing",
    menu: {
      report: "Report",
      timeline: "Timeline",
      order: "Order",
    },
  },

  /** {@see BOrderDashboard} **/
  process_order_page_dashboard: {
    title: "Order Processing",
    cancel_order_action: "Cancel Order",
    open_basket_cation:
      "This shopping cart is open, meaning the customer is shopping and has not paid the order yet.",

    reject_dialog: {
      title: "Reason to Reject the Order",
      message:
        "Select the reason for rejecting this order from the list below. Make sure to inform the customer of the cancellation and refund process. Refunds must be made within 12 hours.",
      confirm_action: "Cancel order",
      dismiss_reject_action: "Dismiss the order cancellation",
    },

    notifications: {
      update_status_success: "Order status updated.",
      reject_update_success: "Order cancellation status updated.",
      dismiss_reject_success: "Order returned to the normal process.",
      set_tracking_success: "Order Track ID saved successfully.",
    },
  },
  /** {@see BPageOrderPhysical} **/
  /** {@see BPageOrderVirtual} **/
  /** {@see BPageOrderFile} **/
  /** {@see BPageOrderService} **/
  process_center: {
    title: "Processing Center",

    physical_product: "Physical products",
    menu: {
      label: "Package Label",
      receipt: "Invoice",
      back: "Back",
      return: "Return",
      report: "Report",
      timeline: "Timeline",
      inputs: "Inputs",
      order: "Order",
    },

    /** {@see OrderPaymentWidget} **/
    payment_widget: {
      title: "Payment",
      checklist: [
        "Check order amount and customer payment.",
        "Check billing address.",
        "Ensure the entered information is correct, especially if the payment is Cash On Delivery.",
      ],
      action_cod_pay: "Confirm payment by customer",
      action_dir_pay: "Confirm uploaded payment receipt",
      payment_receipt_not_uploaded_error:
        "Payment receipt has not been uploaded yet!",

      waiting_for_pay: "Pending payment",
      processing_payment: "Processing payment",
      processing_cancel: "Payment canceled",
      require_capture: "Require capture",
      paid: "Paid",
      cod_pay_info:
        "When you have received the order from the customer you can confirm payment and complete the order.",
      dir_pay_info:
        "The payment receipt will appear above. Before you confirm the payment, verify the deposit amount and receipt information with your bank.",

      created_date: "Created Date",
      pay_date: "Payment Date",
      payment_gateway: "Payment gateway",
      payment_method: "Payment method",
      risk: "Risk value",
      billing_details: "Billing details",

      add_transaction: "Add new bill",
      add_transactions_message:
        "You need to generate a minimum of one bill for this order. Sometimes, multi-step payments may be necessary. You will decide which bills the user needs to pay for as you progress with the work.",

      add_bill_dialog: {
        title: "Add Invoice",
        message:
          "You can add one or more new invoices for this order. The customer will see these invoices and pay each one according to the progress of the work.",
        amount_input: "Invoice amount",
        action: "Add bill",
      },
      edit_bill_dialog: {
        title: "Edit Invoice",
        message: "You can edit pending invoices.",
        action: "Edit Invoice",
      },
      bill_cash_payment_dialog: {
        title: "Register cash payment",
        message:
          "If the buyer has paid the amount of this invoice in cash or in a way other than online payment, in this section, by selecting an option, register and confirm his payment. In this section, you can see only the cash payment gateways of your store,If you do not see such an option, you can activate a cash payment gateway in the selected currency in your store.",
        action: "Confirm bill payment",
      },

      table: {
        title: "Title",
        amount: "Amount",
        description: "Description",
        info: "Info",
      },
      user_payment: "Customer payment",
      cod: "Cash on Delivery",
      gateway_wage: "Fee",
      gift_card: "Gift Card",
      discount_code: {
        title: "Discount Code",
        code: "Code",
        percent: "Percent",
        limit: "Limit",
      },
      club: {
        title: "Customers Club",
        percent: "Percent",
        limit: "Limit",
      },

      coupon: {
        title: "Coupon",
        percent: "Percent",
        limit: "Limit",
        charge: "Charge",
      },
      delivery: {
        title: "Shipping Cost",
        not_paid: "Not paid",
      },
      samin: {
        title: "Service Fee",
        description:
          "This amount has been deducted from your Selldone wallet account.",
        tooltip: "Calculate Total Service Fees",
        percent: "Percent",
      },
      affiliate: {
        title: "Affiliate commission",
        affiliate_message:
          "You should pay this commission to your affiliate. This process is done by yourself.",
      },
      total_price: "Total Items Price",
      total_items_discount: "Items Discount",
      total_price_after_offers: "Total after applying offers",

      total_order_price_before_tax: "Pre-tax Total Price",

      user_payment_amount: "Customer's Paid Amount",
      samin_wage: "Selldone Fee",
      pay_cod_dialog: {
        title: "Did You Receive Order Money?",
        message:
          "Confirm this option in the cash on delivery payment method, after ensuring full payment by the customer.",
        confirm_action: "Confirm customer payment",
      },
      pay_dir_dialog: {
        title: "Did You Receive Order Money?",
        message:
          "Confirm this option after approving uploaded payment receipt with your bank. Be sure to check the payment with your bank.",
        confirm_action: "Confirm customer payment",
      },

      notifications: {
        pay_confirm_message:
          "Payment is confirmed.<br> Port: {gateway_name} <br> Date: {payment_at} ",
        pay_fail_title: "Not paid",
        pay_fail_message: "Payment cannot be approved!",
      },
    },
    /** {@see BOrderDashboardCart} **/
    basket_list: {
      checklist: [
        "Check inventory.",
        "If the item is unavailable, the amount paid for that item must be returned to the customer.",
      ],
      message:
        "If any of the items are unavailable or cannot be sold, uncheck the box next to it and click on the <b> Confirm Order </b> button.",
      action: "Order confirmation",
      list_of_items: "Shopping Cart List",
      apply_change_action: "Apply Changes",
      cant_apply_change: "Cannot make changes",
      lottery_prize_inform:
        "Your customer win 1x of this product. Send  gift with this order.",
    },
    /** {@see BOrderDashboardPreparing} **/
    preparing: {
      title: "Preparation",
      packing_weight: "Packing Weight",
      delivery_type: "Shipping method",
      packing_size: "Packaging Dimensions",
      distance_warning: "Exceeds the allowed distance limit.",
      weight_warning: "Exceeds the allowed weight.",
      volume_warning: "Exceeds the allowed package size.",
      items_weight_calculation:
        "Combined weight of all items is {weight} {unit}",
      not_available_message:
        "It's not available when you are disabled asking for shipping address and also user did not fill address after purchase!",

      message:
        "Click the following <b> Order Ready</b> button if the order is ready to ship.",
      action: "Order ready to ship",
      checklist: [
        "Following standard rules in packaging.",
        "Print a list of items and put it inside the package.",
        "Print and stick a label to the box.",
      ],
    },

    basket_items: "Order items List",

    delivered_dialog: {
      title: "Has this order been received by the customer?",
      message:
        "Confirm this option when you know the customer received the order",
      confirm_action: "I confirm that customer recieved the package",
    },
    return_delivery_dialog: {
      title:
        "Did the order have any problems during delivery or was it returned?",
      message:
        "Confirm the option to return the shipment if the order is returned after sending for some reason and there is a need to resend the shipment.",
      confirm_action: "Confirm Delivery Returned",
    },

    notifications: {
      update_status_success: "Order status updated.",
      reject_update_success: "Order cancellation status updated.",
      dismiss_reject_success: "The order was canceled.",
      pay_cod_success: "Cash on delivery payment confirmed.",
      pay_dir_success:
        "Payment was confirmed by card-to-card payment or money transfer.",
      set_tracking_success: "Order Track ID saved successfully.",
      new_bill_success: "New bill added successfully.",
      edit_bill_success: "Bill updated successfully.",
      update_bill_status_success: "Bill status updated successfully.",
      set_payment_in_cash_success: "Bill payment confirmed manually.",
    },

    delete_bill_dialog: {
      title: "Delete bill",
      message: "Are you sure to delete this bill?",
      action: "Yes, delete now",
    },
  },

  /** {@see AdminShopGatewayManagementPage} **/
  shop_gateway: {
    title: "Gateway",
    menu: {
      dashboard: "Dashboard",
      edit: "Edit",
      transactions: "Transactions",
      back: "Gateways",
    },

    /** {@see BPageGatewayDashboard} **/
    dashboard: {
      title: "Gateway Management",

      /** {@see BGatewayPaymentsChart} **/
      gateway_data_widget: {
        title: "Payments Report",
        title_small: "Gateway",
        chart: {
          times: "Count",
          buys: "Buy count",
          pays: "Sccessful payment",
          amount_pay: "Paid",
          amount_wage: "Fee",
        },
      },

      /** {@see BGatewayOverview} **/
      gateway_info_widget: {
        title: "Info",
        title_small: "Gateway",
        status: "Status",
        cod_transportation: "Shipping methods thst support COD",
        cod_transportations_error:
          "Enable cash on delivery payment for at least one shipping method!",
        payment_type: "Payment type",
        cod: "Cash On Delivery",
        online: "Online payment",
        wage_percent: "Fee Percent",
        min_wage: "Minimum Fee",
        max_wage: "Maximum Fee",
        min_amount: "Minimum transaction",
        max_amount: "Maximum transaction",
        timeout: "Payment period",
        timeout_unit: "Seconds",
        link: "Gateway Link",
        your_gateway_status: "Your gateway status",
        config_extra_info: "Payment service configuration",
        oauth2_button: "Auto Connect to {gateway}",
        fee_payment_message:
          "The entire amount paid by the customer will be transferred to your account. Service's fee will be deducted from your wallet in Selldone.",
      },
    },

    /** {@see BPageGatewayEdit} **/
    edit: {
      title: "Edit Gateway",
      menu: {
        delete: "Remove Gateway",
      },
      edit_action: "Edit Gateway",
    },

    /** {@see BPageGatewayTransactions} **/
    transactions: {
      title: "Transactions",
      table: {
        amount: "Amount",
        currency: "Currency",
        livemode: "Type",
        status: "Status",
        target_id: "Order",
        risk: "Risk",
        card: "Card",
        issued_at: "Issue Date",
        payment_at: "Payment Date",
      },
      live_mode: "Live",
      test_mode: "Sandbox",
    },
  },

  /** {@see BGatewayAdd} **/
  edit_gateway: {
    public_keys: "Public keys",
    private_keys: "Private keys (confidential)",
    link: "Website",
    status_title: "Payment service status",
    status_message:
      "Configure the payment method as Active or Inactive. Only methods set as active will be displayed to customers.",
    manual_title: "Manual / Auto capture payment",
    manual_message:
      "When you create a payment, you can place a hold on an eligible payment method to reserve funds that you can capture later. For example, hotels often authorize a payment in full before a guest arrives, then capture the money when the guest checks out.",

    gateway_status: "Status",
    wallet: "Blockchain wallet",
    developer_title: "Developer mode",
    developer_message:
      "You can process simulated transactions if the gateway supports debug mode.",
    live_mode_message: "All transactions will be in live mode.",

    notifications: {
      edit_success: "Gateway {gateway_name} edited.",
    },
    developer_setting: "Develop & Test",
  },

  /** {@see BPageGiftcard} **/
  gift_card: {
    title: "Gift Cards",
    menu: {
      edit: "Edit",
      new_card: "Create card",
      list: "Cards",
      orders: "Orders",
      dashboard: "Dashboard",
      back: "Gift Cards",
    },

    /** {@see AdminGiftCardDashboardPage} **/
    dashboard: {
      title: "Gift Card Management Dashboard",

      /** {@see BGiftcardStatisticsPayment} **/
      amount_widget: {
        title: "Card Payment",
        title_small: "30 days",
        chart_amount_pay: {
          y: "Sum",
          label: "Payment",
        },
        chart_buys: {
          y: "Buys",
          label: "Buys",
        },
        total_buy: "Total purchase amount",
        total_pay_30days: "30 days total payment",
        total_pay_today: "Today's payment",
      },

      /** {@see BGiftcardStatisticsCount} **/
      count_widget: {
        title: "Number of issued cards",
        title_small: "30 days",
        total_cards: "Total number of cards",
        used_cards_30days: "30 days usage",
        used_today: "Today's Usage",
        chart: {
          new_cards: "New cards",
          used_cards: "Used cards",
          new_card_name: "New card",
          used_card_name: "Used",
        },
      },

      /** {@see BGiftcardExport} **/
      export: {
        title: "Get Output file",
        cards_list: "Get a list of cards",
        get_report: "Get Report",
      },
    }, // End of dashboard

    /** {@see AdminGiftCardManagementPage} **/
    cards: {
      title: "List of issued cards",
      loading_message: "Getting information ... please wait",
      issue_to_user: "Issue to user",
      table: {
        card_number: "Card Number",
        balance: "Balance",
        paid: "Paid",
        edit: "Edit",
        delete: "Delete",
        expire: "Expires",
        user: "User",
      },
      delete_alert: {
        title: "Remove card",
        message: "Are you sure you want to delete this card?",
        action: "Delete",
      },
      notifications: {
        delete_success: "Gift card deleted.",
        edit_success: "Changes have been made.",
        issue_success: "Gift card issued to the user successfully.",
      },
      issue_dialog: {
        title: "Issue gift card",
        action: "I Confirm. Issue the card now",
      },
    }, // End of cards

    /** {@see BGiftcardAdd} **/
    gift_card_edit: {
      title: "Create Gift Card",
      validity: "Validity",
      validity_unit: "Months",
      currency: "Currency",
      initial_balance: "Initial card balance",
      count: "Count",
      count_unit: "Item(s)",
      enable_input_message: "The status of the created cards.",
      notifications: {
        create_success_title: "Save",
        create_success: "{count} new cards created.",
      },
    },

    /** {@see AdminGiftCardEditPage} **/
    gift_card_edit_page: {
      title: "Edit Gift Card",
    },
  },

  /** {@see BPageDiscountCode} **/
  shop_discount: {
    title: "Discount code",
    up_to: "Up to",
    menu: {
      dashboard: "Dashboard",
      orders: "Orders",
      back: "Discount Codes",
    },

    /** {@see BPageDiscountCodeDashboard} **/
    dashboard: {
      title: "Discount Code Management Dashboard",
      chart_amount_buy: {
        y: "Purchase amount {currency}",
        label: "Buy",
      },
      chart_amount_discount: {
        y: "Discount {currency}",
        label: "Discount",
      },
      chart_used: {
        y: "Amount of uses",
        label: "Times",
      },
    },
  },

  /** {@see BPageCoupon} **/
  shop_coupon: {
    title: "Coupons",
    up_to: "up to",
    menu: {
      dashboard: "Dashboard",
      back: "Coupons",
      orders: "Orders",
    },

    /** {@see BPageCouponDashboard} **/
    dashboard: {
      title: "Coupon Management Dashboard",
      chart_amount_buy: {
        y: "Purchase amount {currency}",
        label: "Buy",
      },
      chart_amount_discount: {
        y: "Coupon {currency}",
        label: "Coupon",
      },
      chart_used: {
        y: "Amount of uses",
        label: "Times",
      },
    },
  },

  /** {@see BPageOffer} **/
  shop_offer: {
    title: "Offers",
    up_to: "up to",
    menu: {
      dashboard: "Dashboard",
      orders: "Orders",
      back: "Offers",
    },

    /** {@see BPageOfferDashboard} **/
    dashboard: {
      title: "Offer Management Dashboard",
      chart_amount_buy: {
        y: "Purchase amount {currency}",
        label: "Buy",
      },
      chart_amount_discount: {
        y: "Offer {currency}",
        label: "Offer",
      },
      chart_used: {
        y: "Amount of uses",
        label: "Times",
      },
    },
  },

  /** {@see BAccountCard} **/
  account_card: {
    pay_create_receipt: "Pay activation fee",
    balance: "Balance",
    locked: "Locked",
    transfer: "Transfer",
    charge: "Deposit",
  },

  /** {@see TimelineStatus} **/
  timeline: {
    note: "{message}",
    info: "{message}",
    error: "{message}",

    buy: "Checkout",
    payment: "Payment",

    confirm:
      "Order confirmation, <b> {success} </b> confirmed and <b> {fail} </b> rejected.",
    prepare: "Order preparation.",
    send: "Order shipped by <b> {delivery} </b>.",
    delivered: "Order has been delivered to customer.",
    "fill-inputs": "Input info form completed by buyer.",
    "return-add": "Submit a product return request, {product}.",
    "return-accept": "Return request {return_code} confirmed.",
    "return-reject": "Request {return_code} rejected.",

    "reject-order": "Reject order. Code: {reject_code}.",
    "reject-order-clear": "Cancel the order rejection. Code: {reject_code}.",

    "email-buy": "Send purchase confirmation email to customer.",
    "email-payment": "Send payment confirmation email to customer.",
    "delivery-returned":
      "The order was not received by the customer and was returned. It is necessary to ship again.",
    "delivery-canceled": "Delivery canceled. It is necessary to ship again.",
    "edit-receiver-info": "Order delivery address was edited by the buyer.",
    "edit-billing-info": "Billing address edited by buyer.",
    "payment-cod-confirm": "COD Payment was confirmed.",
    "payment-cash-confirm":
      "Payment  of {amount} {currency} in cash for the bill was confirmed.",
    "payment-dir-confirm": "Direct payment receipt was confirmed.",

    vendor: "Vendor order state changed from <b>{from}</b> to <b>{to}</b>.",

    "connect-sync": "Order synced by Connect OS.",
    "connect-shipped": "Connect order has been shipped by {shipping}.",
    "connect-returned": "Connect order has been returned by {shipping}.",
    "connect-failed": "Order fulfillment failed by the partner. {reason}",
    "connect-canceled": "The order was canceled by the partner.  {reason}",
    "connect-action-cancel": "Request to cancel order.  {reason}",
    "connect-put-hold": "The order was putted on hold. {reason}",
    "connect-remove-hold": "The order was removed from hold. {reason}",
    "connect-confirmed": "The order was confirmed.",

    "email-vendor":
      "🔔 Order inform email has been sent to <b>{vendor}</b> ╏ {email}.",
    "vendor-payout": "💸 Payout to vendor.",
  },

  /** {@see FinanceInlineChart} **/
  inline_chart: {
    today: "Today",
    last_days: "{days} days ago",
  },
  /** {@see BProductsWindow} **/
  products_select: {
    move_category: "Move category <b> {category} </b> to another category",
    move_product: "Move product <b> {product} </b> to category",
    product_menu: {
      dashboard: "Product dashboard",
      inventory: "Inventory and Variants",
    },
    notifications: {
      copy_success: "Copy of product.",
      change_category_success: "Product category edited.",
    },

    filter_box: {
      no_root_filter_message: "You have products in root but no filter.",
      has_root_filter_message: "You set filters for root category.",
      set_filter_message: "You can set filters.",
      edit_action: "Edit Root Filters",
      clear_action: "Clear Root Filters",
    },
    ai: {
      title: "AI Product Assistance",
    },
    menu: {
      select_all_products: "Select all products",
      unselect: "Unselect",
      sort_categories: "Arrange / Sort Categories",
      subscription_vendor_not_support_message:
        "Can not assign vendor for subscription products! Subscription products must always have a vendor as their owner!",
      vendor_owner_not_assignable_message:
        "Can not assign a vendor for products with a vendor as its owner!",
      category_assign_profile: "Assign profile to products in the category",
      category_assign_profile_subtitle: "Tax, Shipping, Guide, Warranty, ...",
      bulk_discount: "Bulk discount",
      bulk_discount_subtitle: "Apply discount on all products.",
    },
  },
  /** {@see BProductsPanel} **/
  product_panel: {
    excel_import: {
      title: "Drop Excel / CSV file here.",
      select_file: "Select file",
      max_file: "Maximum file size: 20mb",
      download_sample: "Download sample",
    },
    ai: {
      title: "AI Product Assistance",
    },
  },

  /** {@see BOrderDashboardVendor} **/
  order_vendor: {
    has_panel: "Has panel",
    no_panel: "No panel",
    manual_action: {
      title: "Manual actions",
      message: "You can update the vendor order status manually.",
      guides: [
        "Vendors with panel access can update their fulfillment (sub-orders) in their dedicated dashboard.",
        "If the vendor has no panel access, the vendor order status will be changed automatically by changing the basket status.",
        "You can update vendor orders manually.",
      ],
    },
    payouts: {
      title: "Payouts",
      message: "Manage the vendor payouts and transactions.",

      charge_tooltip: "Charge vendor wallet.",
      withdraw_tooltip: "Withdraw from vendor wallet.",
      payout_tooltip: "Payout to the vendor.",
    },
  },

  /** {@see BOrderVendorPaymentManagement} **/
  order_vendor_payment: {
    message:
      "This is an overview of the transactions in your virtual wallet on the marketplace.",
    vendor_wallets: "Vendor Wallets",
    my_wallets: "My Wallets",
  },

  /** {@see BPageOrderPhysicalTrack} **/
  physical_order_track: {
    title: "Risk Reports and Assessments",
  },
  /** {@see BPageOrderVirtualTrack} **/
  virtual_order_track: {
    title: "Risk Reports and Assessments",
  },
  /** {@see BPageOrderVirtualTimeline} **/
  virtual_order_timeline: {
    title: "Timeline",
  },
  /** {@see BPageOrderPhysicalTimeline} **/
  physical_order_timeline: {
    title: "Timeline",
  },
  /** {@see BPageOrderPhysicalInput} **/
  physical_order_inputs: {},
  /** {@see BOrderTimeline} **/
  order_timeline: {
    message:
      "In this section, you can view the timeline of events related to the order, fulfillment, payment, and their respective statuses. Additionally, you can observe the orders dispatched to both customers and vendors.",
    add_note_subtitle: "Write a message and mention your colleagues.",

    message_input: "Write a message here...",
    pin_action: "Pin to top",
    unpin_action: "Unpin",
    copy_html: "Copy Html",
    notifications: {
      add_note_success: "Note added.",
      edit_note_success: "Note edited.",
      delete_note_success: "Note deleted.",
    },
    delete_dialog: {
      title: "Delete note",
      message: "Do you want to delete this note?",
      action: "Delete note",
    },
    resend_dialog: {
      title: "Resend email",
      message: "Are you sure to resend this email to your customer?",
      action: "Yes, resend",
      success: "Email resent to your customer.",
    },
  },

  /** {@see BPageShuttleWalletAccounts} **/
  accounts: {
    title: "My Wallets",
    message:
      "Kindly set up a minimum of one account for each currency you utilize with Selldone. These funds will be dedicated to covering your service fees.",
    add_new: "Create new account",
    new_account: "Add new account",
    new_account_dialog: {
      title: "New Account",
      account_name_input: "Account name",
      currency_input: "Currency unit",
      currency_input_message:
        "The created account will only hold the values of this currency.",
      new_account_wage: "New account creation cost: Free for the first account",
      create_account_action: "Create Account",
    },
  },

  /** {@see UserGifts} **/
  user_gifts: {
    menu: {
      send_gift: "Send gift",
      sent: "Send",
      received: "Received",
    },

    /** {@see BPageShuttleWalletGiftsSend} **/
    send_gifts: {
      title: "Sent Gifts",
      sub_title:
        "You can send a gift to your friends or customers. The recipient may accept or reject your gift. The amount is locked in your account and withdrawn if the recipient accepts. Otherwise, this amount will be transferred to your account.",
      table: {
        user: "User",
        amount: "Amount",
        currency: "Currency",
        account_name: "From",
        status: "Status",
        message: "Message",
        created_at: "Created Date",
      },
    },

    /** {@see BPageShuttleWalletGiftsReceived} **/
    received_gifts: {
      title: "Received Gifts",
      sub_title:
        "Here is a compilation of the gifts you have received, either from Selldone or other sources.",

      table: {
        amount: "Amount",
        currency: "Currency",
        account_from: "From",
        status: "Status",
        message: "Message",
        created_at: "Created Date",
        receive: "Receive",
      },
    },
  },

  /** {@see BAccountGiftRedeem} **/
  get_gift_dialog: {
    title: "Receive a Gift",
    more: "More ..",
    amount: "Amount",
    message: "Message",
    account_to_input: "Destination Account",
    account_to_input_message: "Gift amounts will be deposited to this account.",
    get_action: "Accept Gift",
    notifications: {
      received_success_title: "Congratulations",
      received_success:
        "The amount of gift {amount} {currency} has been deposited into your account.",
    },
  },
  /** {@see BAccountGiftSend} **/
  send_gift_dialog: {
    title: "Send Gift",
    account_from_input: "Choose an account",
    account_from_input_message: "Gift amounts are withdrawn from this account.",
    receiver_input: "Receiver",
    receiver_input_message: "You can enter the email address or phone number.",
    message_input: "Message",
    message_input_message: "You can leave a message to the recipient.",
    amount_input: "Amount",
    currency_input: "Currency unit",
    currency_input_message: "Price is calculated in this currency.",
    send_action: "Send Gift",
    notifications: {
      send_success: "A gift of {amount} {currency} was sent to {receiver}.",
    },
  },

  /** {@see BAccountInput} **/
  account_list: {
    account_input: "Account Number",
    account_input_message:
      "The amounts of gifts for this currency will be deposited into this account.",
    free_balance: "Free balance",
    account_name: "Account Name",
  },
  /** {@see UserMonetizeAccounts} **/
  user_monetize_accounts: {
    title: "Deposit Accounts",
    sub_title:
      "Gift amounts will be automatically deposited into these accounts.",
    message:
      "Selldone deposits funds for your social media activity, participating in Selldone development, introducing friends and so on. By choosing a deposit account for each currency, the gift amounts will be deposited into that account in your domain automatically. These amounts can be credited to Selldone. Withdrawals will only be possible for business partners. ",
    add_account_action: "Add Account",
    add_dialog: {
      title: "Connect an account to receive gifts",
      account_input: "Account Number",
      account_input_message:
        "The amounts of gifts for this currency will be deposited into this account.",
      set_as_default_action: "Select as default account",
    },
    table: {
      currency: "Currency",
      account_number: "Account Number",
      account_name: "Name",
      payment: "Deposit amount",
      reset_at: "Reset to",
      delete: "Delete",
    },
    notifications: {
      set_success: "Account added successfully.",
      delete_success:
        "Account successfully removed from the list of default accounts for receiving gifts.",
    },
    delete_alert: {
      title: "Delete Account",
      message:
        "Do you want to remove this account from the Gift Accounts list?",
      action: "Delete",
    },
  },
  /** {@see UserMonetize} **/
  user_monetize: {
    title: "Make Money",
    menu: {
      plans: "Plans",
      accounts: "Accounts",
      participant: "Participant",
    },
  },
  /** {@see UserMonetizePlans} **/
  user_monetize_plans: {
    title: "Collaboration and Monetization",
    sub_title:
      "You'll be credited with referral rewards in your Selldone wallet, and these funds can be used to pay for Selldone service fees (available for all). Please note that only Selldone VIP business partners have the ability to withdraw these referral credits, and this option is not available to all users.",

    discount: "Discount",
    your_income: "Your income",
    level_2: "From Level Two",
    level_3: "From Level Three",
    link_message: "Membership: {registered}, accepted: {accepted}",
    link_tip:
      "You can add the phrase ?ref={link_code} to the end of every address you share.",
    table: {
      currency: "Currency",
      amount: "Balance",
      total: "Total payment",
      payment_date: "Last payment date",
      withdraw: "Withdrawal",
    },

    notifications: {
      get_credit_success:
        "The requested amount has been deposited into your account.",
    },
  },
  /** {@see BPageShuttleIdentity} **/
  basic_information: {
    title: "My Identity and Profile",
    email: "Email address",
    tel: "Mobile number",
    address: "Address",
    payment: "Valid transactions",
    personal_information: "Identity information",
    main_profile: "Main profile",
    main_profile_subtitle:
      "This information is publicly available to everyone.",
    kyc_waiting_info:
      "We are checking the accuracy of the information you enter. This process is mandatory in accordance with KYC rules and will reduce the risk of financial transactions. You can take advantage of the present and future benefits of this service. ",

    personal_info_dialog: {
      title: "Identity Information",
      name_input: "First name",
      family_name_input: "Last name",
      number_input: "Passport Number (or National Code)",
      birthday_input: "Birthday",
      birthday_input_placeholder: "Enter your birthday",
      address_input: "Address",
      postcode_input: "Postal Code",
      tel_input: "Contact Number",
      passport_image_input: "Passport or driver's license",
      passport_image_input_message:
        "Please upload a scan of your passport or driver's license.",
      personal_image_input: "ID card",
      personal_image_input_message:
        "Please upload your national ID card image. Some countries don't have ID cards, so just upload your passport or driver's license here.",
    },
    profile_dialog: {
      title: "Main Profile",
      full_name_input: "Full Name",
      tel_input: "Contact Number",
      email_input: "Email",
      website_input: "Website",
      address_input: "Address",
      about_input: "About me",
      about_long_input: "Long text about me",
      image_input: "Select profile picture",
      image_input_message:
        "Upload your image. This image will be used as your profile picture. ",
      notifications: {
        update_profile_success: "Your profile has been updated.",
        update_personal_info_success:
          "Your information was successfully registered",
      },
    },
    charge_account_approve_message:
      "Charge your account to approve your bank transaction.",
    payment_approval: "Payment approval",
    residential_address_checking:
      "Your residential address documents in checking queue.",
    add_residential_address:
      "Add your location and proof of residential address documents.",
  },
  /** {@see BUserPhoneVerify} **/
  phone_verify: {
    title: "Mobile Number Verification",
    step1_title:
      "Input your mobile number, and you'll receive a verification SMS.",
    phone_number_input: "Mobile number",
    next: "Next step",
    sms_code_input: "Verification code",
    sms_code_message: "6-digit verification code sent to {phone_number}.",

    notifications: {
      duplicated_number_error: "This number has already been approved by you.",
      send_activation_code_success_title: "Verification code",
      send_activation_code_success:
        "The verification code was sent to {phone_number}.",
      verify_success: "Your mobile number has been verified",
    },
  },
  /** {@see BPageShuttleCompanies} **/
  companies: {
    title: "My Business Accounts",
    message:
      "Businesses, entrepreneurs, and professional teams can develop products and applications based on the Selldone. It is a requirement to create a business profile.",
    new_company: "New company",
  },
  /** {@see BCompanyAdd} **/
  add_company: {
    name_input: "Company name",
    website_input: "Website",
    email_input: "Email",
    address_input: "Address",
    tel_input: "Tel",
    mobile_input: "Mobile",
    edit_action: "Edit company",
    create_action: "Create company",
    notifications: {
      add_success: "Business account {name} created.",
      edit_success: "Business account edited.",
    },
  },
  /** {@see UserAccessControl} **/
  user_access_control: {
    menu: {
      personal_key: "Personal",
      shop_key: "Clients",
      apps: "Apps",
    },
    connected_apps_title: "Connected apps",
    connected_apps_message:
      "You will see a list of all the stores and apps that are connected to your domain account. You can delete access to any of them.",
    clients_title: "Clients",
    clients_message:
      "These keys are used to create Access Token by your server. Note that the keys are confidential and only placed on the server so that they are not visible to others.",
    personal_keys_title: "Personal Access Keys",
    personal_keys_message:
      "You can create the keys to your account here. Note that these keys will be able to access your account. Create and use these keys only if you know exactly what you are doing.",
  },

  /** {@see BPageShuttleSecurity} **/
  user_security_control: {
    title: "Account Security",
    message: "You can edit your account security settings here.",

    delete: {
      title: "Delete Account",
      subtitle:
        "Before deleting your account, make sure you have deleted all shops.",
      action: "I'm sure, delete my account",
      agreement:
        "I accept that all my information will be deleted from your server. Your information will be deleted according to a schedule determined by us to prevent fraud or misuse.",
    },

    list: {
      email: {
        title: "Primary Email",
        sub_title:
          "You have the option to update the main email associated with this account.",
        action_title: "Change Primary Email",
        action: "Send verification link",
      },
      password: {
        title: "Password",
        sub_title: "Choose a strong password for your account.",
        action_title: "Account access password",
        not_exist: "Not Entered",
        action: "Change password",
      },
      phone: {
        title: "Mobile number",
        sub_title:
          "Confirm your mobile number. You will be able to log in through this number.",
        action_title: "Account's primary phone number",
        action: "Verify Number",
      },

      two_step: {
        title: "Two Step Entry",
        sub_title:
          "Confirm your mobile number. You will be able to log in through this number.",
        action_title: "Increase account security",
        activated_action: "Activated",
        active_action: "Active Now",
      },
    },
    two_step_auth: {
      step_1: {
        title: "Install Google Authenticator app",
      },
      step_2: {
        title: "Enter the code generated by the app",
        message:
          "The 6-digit code is generated by an algorithm in your mobile phone. You can download the app from the following link. Press the code generator key to create a QR code containing the password.",
        qr_code_info:
          "If it is not possible to scan, you can manually copy and paste the code into the app:",
        create_new_code: "Create new code",
        qr_code_scanning:
          "Scan the QR code created by Google Authenticator Mobile App and enter the code generated for confirmation in the box on this page.",
        qr_code_regenerate_info:
          "Note: By pressing the above key a new key will be created and the previous key will be unusable. Enter the new key in your phone app.",
      },
      step_3: {
        title: "Enter the Created Code ",
        message:
          "Enter the access code created in the application in the field below.",
        activation_key_input: "Access Code",
      },
      activated_alert: "2-step login is enabled.",
      activated_message:
        "Two-step login is enabled for your account. From now on you will need to enter a second code that changes every 30 seconds to access your account. To disable two-step login, just double-click Press a step and go through the steps. ",
      cancel_two_step_login_action: "Cancel two-step login",
      cancel_two_step_login_info:
        "If you want to disable 2-step verification, enter your password and click on the two-step log-in key.",
      password_input: "Password",
      cancel_2fa_action: "Cancel two-step login",
    },

    change_password_dialog: {
      title: "Change Password",
      message: "Use a complex and memorable password.",
      password_input: "Current password",
      new_password_input: "New password",
      re_new_password_input: "Repeat new password",
      tips: {
        length: "Password must be at least 8 characters",
        chars: "At least one uppercase letter and one number.",
        match: "Password matched.",
      },
      change_password_action: "Change password",
      notifications: {
        change_password_title: "Change password",
        change_password: "Password changed successfully.",
      },
    },
  },
  /** {@see AuthorizedClients} **/
  authorized_clients: {
    title: "List of connected stores / apps",
    table: {
      name: "Name",
      app: "App",
      scopes: "Scopes",
      shop: "Restricted Store",
    },
    remove_action: "Remove access",
    delete_alert: {
      title: "Delete",
      message:
        "Do you want to revoke this access? Note that this app will no longer have access to your account. ",
      action: "Refuse the access",
    },
  },
  /** {@see Clients} **/
  clients: {
    title: "Clients List",
    create_new_action: "Create new client",
    table: {
      client_id: "Client ID",
      app: "App",
      name: "Alias",
      secret_key: "Secret Key",
    },
    create_dialog: {
      title: "New client",
      error_msg: "<strong> Error! </strong> Sorry, an error has occurred!",
      name_input: "Name",
      name_input_message: "Something your users recognize and trust.",
      redirect_input_message: "Return address to your site.",
    },
    edit_dialog: {
      title: "Edit access",
    },
    delete_alert: {
      title: "Delete",
      message: "Do you want to delete this client?",
      action: "Delete",
    },
  },
  /** {@see PersonalAccessTokens} **/
  personal_access_tokens: {
    title: "List of Personal Access Tokens",
    create_action: "Create new token",
    table: {
      name: "Name",
      scopes: "Accesses",
      expire_at: "Expiry date",
    },
    create_dialog: {
      title: "Token Building",
      error_message: "<strong> Error! </strong> Sorry, an error has occurred!",
      name_input: "Alias Ex. my token name",
      name_input_message: "Favorite token name.",
      scopes_list: "Token Access List",
    },
    access_token_dialog: {
      title: "Personal Access Key",
      message:
        "Here is the token of your personal access token. This is the only time this token will be displayed, so don't miss it! You can now use this token to request an API.",
    },
    delete_alert: {
      title: "Delete",
      message: "Do you want to delete this access token?",
      action: "Delete",
    },
  },

  /** {@see Scopes} **/

  scopes: {
    profile: {
      name: "Profile",
      description:
        "Read profile information including name, email address, image and authentication status.",
    },
    phone: { name: "phone number", description: "access to phone number." },
    address: {
      name: "Addresses",
      description: "Read saved address from address book.",
    },

    buy: {
      name: "Purchase",
      description: "Place an order and purchase from the store.",
    },
    "order-history": {
      name: "Orders History",
      description: "Read Orders History.",
    },
    "my-gift-cards": { name: "Gift Cards", description: "Access to My Cards." },

    articles: { name: "Edit Content", description: "Edit Articles." },
    notifications: {
      name: "Send and Receive Notification",
      description: "Send and Receive Notification.",
    },

    "read-shops": { name: "Stores List", description: "Read the store list." },

    "shop-edit": {
      name: "Store Management",
      description: "Edit the store access",
    },

    "shop-contacts": {
      name: "Contact Form Management",
      description: "Receive and edit contact forms.",
    },
    "shop-gift-cards": {
      name: "Manage Gift Cards",
      description: "Create, edit and manage gift cards.",
    },
    "shop-faqs": {
      name: "Managing Questions and Answers",
      description: "Create, Edit, and Manage the Frequently Asked Questions.",
    },

    "shop-categories": {
      name: "Manage Categories",
      description: "Create, Edit, and Manage the Categories.",
    },
    "shop-products": {
      name: "Product Management",
      description: "Add, Edit, and Manage the Products.",
    },
    "shop-read-reports": {
      name: "Read reports",
      description: "Read information and reports.",
    },
    "shop-socials": {
      name: "Manage Social Media",
      description: "Edit the store social media",
    },
    "shop-accounts": {
      name: "Manage financial accounts",
      description: "Edit and delete financial accounts linked to the store.",
    },
    "shop-menus": { name: "Manage Menus", description: "Edit store menus." },
    "shop-pages": { name: "Manage Pages", description: "Edit Shop Pages." },
    "shop-warehouse": {
      name: "Warehouse Management",
      description: "Edit Store Warehouse",
    },
    "shop-permissions": {
      name: "Manage access",
      description: "View and edit store access.",
    },
    "shop-process-center": {
      name: "Order Management",
      description: "Order Management.",
    },
    "shop-profile": {
      name: "Manage profiles",
      description: "Manage store profiles.",
    },
    "shop-discount-code": {
      name: "Discount code management",
      description: "Manage, edit and add store discount codes.",
    },
  },
  /** {@see AdminCompanyPage} **/
  company_page: {
    title: "Company",
    create_app: "Create new application",
    menu: {
      edit: "Edit",
      apps: "Apps",
      dashboard: "Dashboard",
      companies: "Companies",
    },
    /** {@see AdminCompanyPage_Dashboard} **/
    dashboard: {
      /** {@see CompanyInfoWidget} **/
      info_widget: {
        title: "Company registration info",
        address: "Address",
        website: "Website",
        email: "Email",
        phone: "Phone number",
        register: "Register",
        developer: "Developer",
        verified: "Verfied",
        golden: "Golden",
      },
    },
    /** {@see AdminCompanyPage_Develop} **/
    developer: {
      title: "Developers",
      menu: {
        new: "New",
        apps: "Apps",
      },
    },
    /** {@see AdminCompanyPage_Edit} **/
    edit: {
      title: "Edit",
    },
  },
  /** {@see BAppAdd} **/
  add_app: {
    category_input: "Category",
    code_input: "Code",
    name_input: "Name",
    description_input: "Description",
    video_input: "Video URL",
    public_form: "General Information Structure",
    private_form: "Private Information Structure",
    icon_input: "App Icon",
    logo_input: "Logo App",
    enable_input: "Is the application active?",
    edit_action: "Edit App",
    create_action: "Create App",
    notifications: {
      add_success: "Business account {name} created.",
      delete_success: "Business account edited.",
    },
  },

  /** {@see AppPage} **/
  app_page: {
    title: "Application",

    menu: {
      edit: "Edit",
      publish: "Publish",
      history: "Versions",
      dashboard: "Dashboard",
      company: "Company",
      api: "API",
      images: "Images",
    },
    /** {@see AppPage_Dashboard} **/
    dashboard: {
      /** {@see AppInfoWidget} **/
      app_info_widget: {
        title: "Application",
        app_code: "App code",
        category: "Category",
        name: "Name",
        installs: "Install apps",
        uninstalls: "Uninstall apps",
        actives: "Active apps",
        description: "Description",
        published: "Published",
        waiting_for_review: "Pending approval",
        app_mode: "Application mode",
      },
    },
  },
  /** {@see ShopPermissions} **/
  shop_permissions: {
    ADMIN: { text: "Owner", description: "Full access to all storefronts." },
    PRODUCT: {
      text: "Product Manager",
      description: "Add, edit and manage store products.",
    },
    AUDITING: {
      text: "Financial Manager",
      description: "View financial information and payments.",
    },
    CONTENT: {
      text: "Content Management",
      description: "Answer questions, write blogs, and design pages.",
    },
    OFFICER: {
      text: "Senior Manager",
      description: "View and monitor employee activity.",
    },
    EMPLOYEE: {
      text: "Employee",
      description: "View orders and fulfill orders.",
    },
    MARKETING: {
      text: "Marketing",
      description:
        "Access to settings and create campaigns, email marketing and other marketing-related sections.",
    },
    VIEWER: {
      text: "Viewer",
      description:
        "The ability to view store information without being able to edit or change it.",
    },
  },

  /** {@see ShopRoles} **/
  shop_roles: {
    PhysicalOrdersChecking: {
      text: "Physical Checking",
      description: "Check received orders.",
    },
    PhysicalOrdersPackaging: {
      text: "Physical Packaging",
      description: "Warehouse and packaging process.",
    },
    PhysicalOrdersDelivery: {
      text: "Physical Shipping",
      description: "Order shipping.",
    },
    PhysicalOrdersSupport: {
      text: "Physical Support",
      description: "After sales support.",
    },
  },

  /** {@see AccountStatus} **/
  account_status: {
    Checking: "Checking",
    Approved: "Confirmed",
    Rejected: "Rejected",
    Deleted: "Deleted",
    Banned: "Banned",
    Payment: "Payment",
    SelldoneSprite: "Selldone Wallet Account",
    SelldoneStorage: "Selldone Storage",
  },
  /** {@see BPageAccount} **/
  account_page: {
    title: "Account",
    menu: {
      setting: "Settings",
      charge: "Charge",
      transfer: "Transfer",
      transactions: "Transactions",
      history: "History",
      cards: "Cards",
    },

    /** {@see BPageAccountTransactions} **/
    transactions: {
      title: "Account Transactions",
      detail: {
        title: "Transaction",
        amount: "Amount",
        description: "Description",
        from: "From",
        to: "To",
        created_at: "Date",
        receipt: "Receipt",
        receipt_note: "Note",
      },
      table: {
        type: "Type",
        from: "From account",
        to: "To account",
        amount: "Amount",
        receipt: "Receipt",
        created_at: "Date",
        description: "Description",
      },
    },

    /** {@see BPageAccountTransfer} **/
    transfer: {
      title: "Transfer Charges",
      form: {
        title: "Transfer Request Form",
        sub_title:
          "It is possible to move accessible funds within your wallet among wallets of the same currency, or transfer them to different wallets on Selldone.",
        message:
          "Be careful in transferring money, you will not be able to return if you complete the transfer.",
      },
    },
    /** {@see BPageAccountDeposit} **/
    deposit: {
      form: {
        title: "Charging Account",
        sub_title:
          "You need to top-up your account balance to purchase licenses, upgrade your account and pay system receipts.",
        amount_input: "Amount",
        charge_action: "Charge Account",
      },
      notifications: {
        qr_title: "Payment",
        qr_message: `Payment address {currency} created.`,
        gateway_title: "Payment",
        gateway_message: "Connecting to payment gateway.",
      },
    },

    /** {@see BPageAccountEdit} **/
    setting: {
      title: "Account Settings",
      account_name_input: "Account name",
      notifications: {
        updated_success: "Your account updated successfully.",
      },
    },
  },

  /** {@see BAccountReceiptPaymentDialog} **/
  receipt_payment_dialog: {
    title: "Receipt Payment",
    /*  message: 'If the following information is correct, hit the transaction confirmation key to make the transaction.',
      to: 'Destination account',
      amount: 'Amount',
      receipt: 'Receipt',
      description: 'Description',
      status_paid: 'This receipt has already been paid.',
      status_canceled: 'This receipt has been canceled.',
      pay_action: 'Pay via port',
      pay_internal_action: 'Payment from account',*/
  },
  /** {@see BAccountTransactionForm} **/
  transaction_form: {
    title: "Transaction Form",
    from_input: "From account number",
    to_input: "To account number",
    from_input_message: "The amount will be withdrawn from this account.",
    account_name: "Account Name",
    currency: "Currency",
    free_balance: "Available balance",
    to: "Destination account",
    amount: "Amount",
    receipt_title: "Payment for receipt",
    receipt_input: "Receipt number",
    paid_status: "This receipt has already been paid.",
    paid_canceled: "This receipt has been canceled.",
    description: "Explanation",
    created_at: "Date",
    duration: "Duration",
    unlimited: "Unlimited",
    add_note_action: "Add Description",
    note: "Note",
    transfer_action: "Transfer",
    confirmation: {
      title: "Send Money",
      subtitle: "Transaction Confirmation",
      message:
        "If the following information is correct, hit the transaction confirmation key to make the transaction.",
      from: "From account",
      to: "To account",
      amount: "Amount",
      fee: "Transaction fee",
      total_pay: "Amount withdrawn from your account",
      receipt: "Receipt",
      description: "Description",
      accept_action: "Transaction Confirmation",
    },
    enter_account_number: "Enter account number.",
    currency_not_match:
      "Destination account currency is not the same as source",
    account_number_not_valid: "Account number is correct.",
    account_number_is_valid: "Account number is correct.",
    receipt_not_valid: "Invoice number is incorrect.",
    receipt_is_valid: "Receipt number is correct.",

    notifications: {
      confirm_success: "Transaction completed successfully.",
    },
  },

  /** {@see OPlanCalculator} **/
  price_calculator: {
    title: "Calculator ╏ Fit to your business",
    description:
      "Calculate and choose the best plan based on your monthly sales:",
    sale_input: "Monthly sales amount",
    hypernova_plan: "Apply for Hypernova %0!",
    show_normal_mode: "Show normal mode",
    show_hypernova_mode: "My transaction is over 20M$!",
  },

  /** {@see OPlanFeaturesCard} **/
  price_card: {
    billed_monthly: "Billed {amount} monthly.",
    billed_yearly: "Billed {amount} yearly.",
    buy_license_action: "Buy now",
    select_your_store: "Select your store",
  },

  /** {@see BSessionsMap} **/
  shop_session_widget: {
    total_sessions: "Total sessions",
  },
  /** {@see BDashboardShopCustomersActivityMap} **/
  user_activities_keys: {
    add_baskets: "Add to Cart",
    remove_baskets: "Delete from Cart",
    buys: "Buy",
    products_views: "View Product",
  },
  /** {@see BDashboardShopAcquisition} **/
  shop_visitors_widget: {
    title: "Acquisition Analytics",
    new_visitors: "New visitors",
    amp: "AMP views",
    returning_visitors: "Returning visitors",
    page_views: "Page views",
    other_pages: "Other pages",
    from_previous_7_days: "from last 7 days",
  },

  /** {@see BUserAppLevel}   {@see AppLevel}  **/
  app_levels: {
    title: "App Level",
    Newbie: "Newbie",
    Beginner: "Beginner",
    Novice: "Novice",
    Intermediate: "Intermediate",
    Advanced: "Advanced",
  },

  /** {@see Login} **/
  login: {
    register_title: "The medium of businesses,<br>Enjoyable experience.",
    register_subtitle:
      "Sign up today for free. Selldone is loved by startups, enterprises, buyers, and sellers.",

    password_recovery_title: "Password recovery",
    password_recovery_message:
      "In case you forgot your password, enter the email address of your account and press the confirmation key. We will send you an email with a link to reset your password.",
    email: "Your email address",
    password_recovery_action: "Receive recovery email",

    register_google: "Continue with Google",
    register_apple: "Continue with Apple",
    continue_with: "Continue with ",
    register_linkedin: "Continue with LinkedIn",
    register_facebook: "Continue with Facebook",
    register_github: "Continue with Github",
    create_your_account: "Create your account",
    password_8_chars: "Password must be at least 8 characters.",
    password_upercase_number: "At least one uppercase letter and one number.",
    password_confirm: "Password and confirmation matched.",
    privacy_agreement:
      "By signing up, you agree to Selldone's <a href='/terms' target='_blank'>Terms of Use</a> and <a href='/privacy' target='_blank'>Privacy Policy </a>.",
    register_action: "Let's go, it's free!",
    login_action: "Login",
    already_signup: "Already signed up?",
    login_your_account: "Login to your account",
    login_google: "Continue with Google",
    login_linkedin: "Continue with LinkedIn",
    login_facebook: "Continue with Facebook",
    login_github: "Continue with Github",
    remember_me: "Remember me.",
    login_button: "Login",
    two_step_problem: "Do you have a problem with the two-step password?",
    two_step_problem_action: "I want to disable two-step login.",
    two_step_confirm: "Confirm access code",
    forgot_password: "Forgot password?",
    signup_free: "Signup for Free",
    checking_robot_message: "Checking if you are a robot or a human..",
    notifications: {
      step2_login_success: "Auto-login to the account",
    },
    signup_email: "Sign up by email",

    name_placeholder: "Name",
    email_placeholder: "Email",
    email_or_username_placeholder: "Email, User name or Phone number",
    password_placeholder: "Password",
    re_password_placeholder: "Confirm Password",
    new_in_samin: "New in Selldone?",
    auto_create_shop: "Auto create shop",
  },
  /** {@see Layout} **/
  layout: {
    logout: "Logout",
    menu: {
      my_public_profile_subtitle: "My public profile {name}.",

      personal_information: "Personal Information and Profile",
      personal_information_subtitle: "Edit my profile, address and KYC.",
      wallet: "Wallets & Accounts",
      wallet_subtitle: "Virtual accounts and connected payment cards.",

      companies: "Companies & Businesses",
      companies_subtitle: "Register my business and tax profiles.",

      access: "Developers & API Keys",
      access_subtitle:
        "OAuth clients, personal access tokens and connected apps.",

      security: "Account Security",
      security_subtitle: "Set two factor and manage social login options.",

      preferences: "User Preferences & Personalization",
      preferences_subtitle:
        "Change theme, level, language and default currency.",
      my_subscriptions: "My Subscriptions",
      my_subscriptions_subtitle:
        "Access to premium AI and customization features.",
    },
  },

  /** {@see PageBuilder} **/
  page_builder: {
    title: "Website Design",

    menu: {
      user_view: "View",
      design: "Design",
      behavior: "Behavior",
      seo: "SEO",
      setting: "Settings",
      embed: "Embed",
    },
    waiting_fetch: "Receiving information ..",

    /** {@see SettingCustomPage} **/
    setting: {
      title_input: "Page Title",
      description_input: "Short description",
      name_input: "Page URL (Letters and Numbers)",
      bg_color_input: "Background color",
      bg_style_input: "Page Background Style",
      page_label_input: "Label color",
      page_dir_input: "Page direction",
      ltr: "Left to Right",
      rtl: "Right to Left",
      designer_note: "Designer Note",
    },
    history: {
      title: "Saved History",
    },

    /** {@see LPageEditor} **/
    design: {
      themes: {
        title: "Inline Page Builder",
        message: "Craft top-notch pages for your business, no coding required.",
        page_title_input: "Enter a title for your page",
      },
      tools: {
        rearrange: "Order",
        tools: "Tools",
        history: "History",
        style: "Style",
        typography: "Typography",
      },
      no_category: "No Categories",
    },

    /** {@see LPageEditorSeo} **/
    seo: {
      message:
        "SEO settings are adjusted automatically by the Selldone SEO engine.",
    },
  },

  /** {@see VerifyEmailCaution} **/
  verify_email_caution: {
    title: "Confirm Your Email Address",
    message:
      "The new activation link has been sent to your email address {email}. Please check your email before any action is taken.",
    resend_message:
      "If you have not received the activation link in your email, click the button below to resend.",
    resend_action: "Resend activation link",
    resend_notice: "Activation link sent.",
  },

  /** {@see ShopAutomation_Autopilot} **/
  autopilot: {
    start: "Start date",
    end: "End date",
  },

  /** {@see Help} **/
  help: {
    menu: "Menu",
    more_helps: "Read more",
  },

  /** {@see WidgetCompanyCard} **/
  company_card: {
    pending_state: "Waiting for review",
    register: "Registered",
    developer: "Developer",
    verified: "Verified",
    premier: "Premier",
  },

  /** {@see ShopSubscriptionList} **/
  shop_license: {
    add: "Add subscription",
    only_last: "Only last subscription",
    vouchers: "Vouchers",
    buy: "Buy subscription plan",
    monthly: "Monthly",
    yearly: "Yearly",
    start_date: "Start date",
    end_date: "End date",
    price: "Price",
    terms: "I read and agree with Selldone terms of use",
    need_charge: "Need charge",
    buy_now: "Buy now",
    use_voucher_now: "Use voucher now",
    auto_renewal: "Auto renewal",
    plan_placeholder: "Choose your subscription plan.",
    plan: "License plan",
    use_date: "Added date",
    validity_duration: "Validity duration",
    validity_duration_hint:
      "By purchasing a 12-month license, you will receive a 30% discount.",

    active_license: {
      title: "Active License",
      subtitle:
        "This is your active license information. You can reduce your service fee by upgrading to a higher-tier plan.",
      subtitle_partner:
        "Your active {name} license info. This shop currently has an active partner deal. If you wish to cancel the deal and upgrade to a higher-tier plan, please contact our support team for assistance.",
    },
    licenses_table: {
      title: "Purchased History",
      subtitle:
        "This is a list of active and pending licenses. You can purchase deals after funding your wallet. Additionally, please note that when you cancel a subscription, the remaining subscription amount will be returned to your virtual wallet.",
    },
    license_detail: {
      title: "Details",
      subtitle:
        "These are the limitations of your current plan. For more details, please visit the pricing page. You can access all features across all plans, including the free plan, to kickstart your business and grow. As you scale your business, consider upgrading to a higher-tier plan to lower your service fees.",
    },

    table: {
      plan: "Plan",
      start_date: "Start / End Date",
      renewal: "Auto Renewal",
      linked_account: "Linked Account / Voucher",
      payment: "Payment",
      cancel: "Cancel",
    },
    notifications: {
      subscribe_success: "Subscribed successfully.",
      cancel_success: "Subscription canceled successfully.",
    },
    cancel_dialog: {
      title: "Cancel subscription confirmation",
      message: "Are you sure to cancel this subscription?",
      action: "Cancel subscription",
    },
  },

  /** {@see BLayoutBackofficeShop} **/

  admin_shop_layout: {
    download_txt: "Download data text",
    download_excel: "Download data excel",
  },
  /** {@see BUserPreferences} **/
  user_preferences: {
    access: "Access",
    template: "Template",
    feedback: "Feedback",
    date_time: "Date & Time",

    company: "Company",
    company_message: "If you have company and want to publish apps.",
    access_keys: "Access Keys",
    access_keys_message: "Show clients and access keys.",
    rating: "How would you rate your experience with Selldone?",
    large_font: "Large fonts",
    large_font_message: "Show text larger than normal",
    samples: "Show sample shops",
    samples_message:
      "If enabled, some sample shops will be displayed in your panel.",

    automation: "Automation",
    automation_message:
      "Show automation tab on shop dashboard. (Webhooks, Visual programming, ...)",
  },

  /** {@see BPageShopSettingLocations} **/
  shop_locations: {
    title: "Countries where service is provided",
    sub_title:
      "Select the countries where you want to sell your product from the list below.",

    delete_restriction: "Delete restriction",
    set_restriction: "set restriction",
    notifications: {
      locations_update: "Location updated successfully.",
    },
    table: {
      country: "Country",
      currency: "Currency",
      available: "Available",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "Sold out",
    review_unit: "Review",
    not_original: "Not original",
  },

  /** @see BProductAddStudio **/
  product_studio: {
    add_mode: "Add more details",
    add_by_sku: "Add by SKU",
    auto_category: "Auto-set category",
    add_in_current_category: "Add to the current category",
    category_mode_message:
      "If enable, product will be added in to the default category or subcategory.",
    sku_name_input: "SKU / Name",
    info: {
      subtitle:
        "To generate the product, you can enter only the essential details necessary for its creation.",
    },
    price: {
      subtitle:
        "Enter the price and discount for this product. Once the product is added, you'll have access to more options.",
    },
  },
  /** @see Affiliates **/
  my_affiliate: {
    title: "My Affiliate Contracts",
    message:
      "This is a list of affiliate partnerships with other stores. When store owners designate you as an affiliate, you can view your commissions, order details, and related statistics here.",
  },

  /** @see BPageShopMarketingAffiliate **/
  affiliates: {
    title: "Affiliate Partners",
    subtitle:
      "Create affiliates, track their performance over time, and take actions based on accurate information in one place. We help you and your partners to build a strong relationship.",

    affiliate_code: "Affiliate code",
    crate_date: "Create date",
    last_payment_date: "Last payment date",
    for_all_products: "Apply to all products",
    balance: "Balance",
    fix_commission: "Fixed commission",
    percent_commission: "Percent-based commission",
    total_payment: "Total payments",
    new_affiliate: "New affiliate partner",
    new_affiliate_message: "Add new affiliate partner",
    link_domain: {
      title: "Linked domain",
      subtitle:
        "You can connect one of your domains to this affiliate partner. This partner will be known as the representative of every person who visits your store and buys through this domain.",
    },

    dialog: {
      new: "New affiliate partner",
      edit: "Edit affiliate partner",
      user: "User (Optional)",
      bank_info: "Bank info",
      restriction: "Restriction",
      select_products: "Select products",
      select_products_message:
        "Affiliate partner gets commission for these products",
      edit_action: "Update affiliate",
      add_action: "Add affiliate partner",
      affiliate_name: "Affiliate partner name",
      payment_info: "Payment info",
      enable_switch:
        "Is this affiliate currently active or inactive? If the affiliate is inactive, the affiliate program will not be applied to orders made through their affiliate link.",
      affiliate_info: "Affiliate partner info",
    },
    link_factory: {
      title: "Affiliate partner link generator",
      link_input: "Your link",
      link_output: "Generated link",
    },
  },

  /** @see AdminGiftcardPage_Orders **/
  gift_card_orders: {
    title: "Orders with Giftcard",
    table: {
      order: "Order",
      order_price: "Order amount",
      paid_by_card: "Paid by card",
      payment_status: "Payment status",
      date: "Date",
    },
  },

  /** @see BPageOfferOrders **/
  offer_orders: {
    title: "Offer Orders",
    table: {
      order: "Order",
      order_price: "Order amount",
      offer_amount: "Offer amount",
      payment_status: "Payment status",
      product: "Product",
      date: "Date",
    },
  },

  /** @see BPageCouponOrders **/
  coupon_orders: {
    title: "Coupon Orders",
    table: {
      order: "Order",
      order_price: "Order amount",
      coupon_amount: "Coupon amount",
      payment_status: "Payment status",
      date: "Date",
    },
  },

  /** @see BPageDiscountCodeOrders **/
  discount_code_orders: {
    title: "Orders with Discount Code ",
    table: {
      order: "Order",
      order_price: "Order amount",
      discount_amount: "Discount amount",
      payment_status: "Payment status",
      date: "Date",
    },
  },

  /** @see BPageShopIncentives **/
  incentives: {
    discount_code: "Discount",
    coupon: "Coupon",
    offer: "Offer",
    gift_card: "Gift card",
    lottery: "Lottery",
  },

  /** {@see BPageShopIncentivesDiscountCode} **/
  discount_codes: {
    title: "Discount Codes",
    sub_title:
      "In this section you will be able to design discount coupons to suit your needs. These discounts are separate from any product discount and will apply to the final amount of the user order. ",
    add_new: "Add new discount code",
    card: {
      created: "Create",
      start: "Start",
      end: "End",
      currency: "Currency",
      discount_percentage: "Discount Rate",
      discount_limit: "Discount limit",
      state: "Current Status",
      enabled: "Now enabled",
      disabled: "Now disabled",
      used: "Consumed",
      count: "Count",
      unit: "item(s)",
    },
    /** {@see BDiscountCodeAdd} **/
    dialog: {
      title_edit: "Edit discount code",
      title_add: "Add new discount code",
      discount_code_input: "Discount code",
      discount_percent_input: "Discount Rate",
      discount_percent_input_hint: "Discount rate of purchase amount",
      count_input: "Count",
      count_input_hint: "Maximum use of this code",
      limit_input: "Discount limit",
      limit_input_hint: "Maximum discount based on currency",
      currency_input_message: "Discounts will be available for this currency.",
      limit_input_message:
        "The value of 0 for the discount limit means there is no limit for the discount rate.",
      title_input: "Title",
      title_input_hint: "You can enter a title for this discount code",
      description_input: "Description",
      description_input_hint:
        "You can enter a description for this discount code",
      date_start_input: "Start",
      date_start_input_placeholder: "Select when to start discount",
      date_end_input: "End",
      date_end_input_placeholder: "Select when the discount will end",
      notifications: {
        add: "Discount code successfully added.",
        edit: "Discount code successfully edited.",
      },
      config: {
        title: "Genral Config",
        subtitle:
          "The formula of the discount code calculation is: max (LIMIT, PERCENT * cart price). Remember to make the codes relevant and easy to remember.",
      },
      limit: {
        title: "Limitations",
        subtitle:
          "You can define the maximum usage limit for each discount code, as well as the maximum discount amount, in this section.",
      },
      duration: {
        title: "Duration Limit",
        subtitle:
          "Should you want to activate a discount code for a specific timeframe, you can establish that duration here.",
      },
      design: {
        subtitle:
          "You can set a title and description for each discount code. These details will be displayed to the user.",
      },
      cluster: {
        subtitle:
          "By associating this discount code with a cluster, you can easily manage it alongside other resources in a single location.",
      },
    },
    delete_alert: {
      title: "Remove Discount Code",
      message: "Do you want to delete this discount code?",
      action: "Remove discount",
    },
    notifications: {
      delete_success: "Your comment was successfully deleted",
    },
  },

  /** {@see BPageShopIncentivesGiftcard} **/
  gift_cards: {
    title: "Gift Card",
    sub_title:
      "Create a gift card and then make as many as you need. This card has a charge on it, and it can only be used for purchases in your shop.",

    create_new: "Add new gift card",
    card: {
      created: "Create",
      lifetime: "Expiry date",
      lifetime_unit: "Month from the date each card was created",
      currency: "Currency",
      initial_balance: "Initial charge",
      count: "Count",
      count_unit: "item",
      used: "Used",
    },
    dialog: {
      title: "Gift Card Design",
    },
    alert: {
      title: "Remove Gift Card",
      message:
        "Would you like to remove this gift card category along with all the cards issued under it?",
      action: "Delete",
    },
    notifications: {
      delete_title: "Delete gift card",
      delete_message: "Your comment has been deleted successfully.",
    },
  },

  /** {@see BPageShopIncentivesCoupon} **/
  coupons: {
    title: "Coupons",
    sub_title:
      "If you want to give your customers a discount that can be used with specific conditions, you can create coupons. Coupons can include a percentage discount with a limit or a fixed amount or a combination of both.",
    create_new: "Add new coupon",
    qualified_products: "Eligible  products",
    min_purchase: "Minimum purchase",
    only_first_order: "Only first purchase",

    one_time_use: "One time use",
    multiple_use: "Multiple use",
    amount_usage: "Used amount",

    delete_alert: {
      title: "Delete coupon",
      message: "Are you sure to delete this coupon?",
      action: "Yes, delete coupon",
    },
    notifications: {
      delete_success: "Coupon has been deleted successfully.",
    },
  },
  /** {@see BCouponAdd} **/
  coupon_edit: {
    title_edit: "Edit coupon",
    title_add: "New coupon",
    discount_charge: "Discount & Charge",
    charge: "Charge",
    charge_message: "Amount of initial charge",
    percent: "Discount percent",
    percent_message: "Amount of discount percent",
    limit_input: "Limit",
    limit_input_hint: "Discount limit amount",
    currency_input_message: "Coupon available for this currency.",

    count_input: "Count",
    count_input_hint: "Maximum use of this code",
    limit_input_message:
      "The value of 0 for the discount limit means there is no limit for the discount rate.",
    date_start_input: "Start",
    date_start_input_placeholder: "Select when to start coupon",
    date_end_input: "End",
    date_end_input_placeholder: "Select when the discount will end",
    title_input: "Title",
    title_input_hint: "You can enter a title for this discount code",
    description_input: "Description",
    description_input_hint:
      "You can enter a description for this discount code",
    coupon_code: "Coupon code",
    need_code: "Need code?",

    coupon_color: "Coupon color",
    min_purchase_amount: "Minimum purchase amount",
    min_purchase_amount_hint:
      "Purchase amount must be greater than or equal to this value.",
    should_exist_product: "At least one of these products must be in cart",
    apply_for_first_order: "Only for the first purchase",
    apply_for_first_order_on:
      "This coupon can only be used for the customer's first purchase!",
    apply_for_first_order_off:
      "The number of coupon usages per buyer can be adjusted below.",

    has_qualify_constraints: "Do you want to define more limits?",
    has_qualify_constraints_message:
      "Set more conditions to qualify the customer to use this coupon.",
    one_time_use_message: "Customer can use this coupon for one time.",
    daily_limit: "Daily limit",
    no_limit: "No limit",
    daily_limit_message: "Maximum amount of use per day by customer",

    monthly_limit: "Monthly limit",
    monthly_limit_message: "Maximum amount of use per month by customer",

    yearly_limit: "Yearly limit",
    yearly_limit_message: "Max amount of use per year by customer",

    notifications: {
      add: "New coupon created successfully.",
      edit: "Coupon has been updated.",
    },

    config: {
      subtitle:
        "The formula of the coupon discount calculation is: CHARGE + max (LIMIT, PERCENT * cart price).",
    },
    limit: {
      subtitle:
        "In this section, you're able to set both the maximum number of uses per coupon and the highest discount amount each coupon can provide.",
      zero_message: "zero: there is no limit!",
    },
    duration: {
      subtitle:
        "If you wish to set a specific timeframe for a coupon to be active, you can configure the duration in this section.",
    },
    design: {
      subtitle:
        "Each coupon allows for the addition of a title and description. These details will be visible to the customer.",
    },
    constraints: {
      subtitle:
        "Here, you have the ability to establish additional personalized parameters for the coupon.",
      no_limit: "No extra limitation",
      has_limit: "Extra constraints",
      has_code_message: "User should enter the code to add coupon.",
    },
    club: {
      subtitle:
        "This coupon's use can be restricted exclusively to members of chosen customer clubs.",
    },
    cluster: {
      subtitle:
        "By associating this coupon with a cluster, you can easily manage it alongside other resources in a single location.",
    },
    preview: {
      subtitle: "Here's the public preview of the coupon.",
    },
  },

  /** {@see BPageShopIncentivesOffer} **/
  offers: {
    title: "Offers",
    sub_title:
      "You can create special offers for your customers so that, after buying one item, they will receive another item at a discount or even free.",
    create_new: "Add new offer",
    qualified_products: "Eligible products",
    min_quantity: "Minimum quantity",
    min_purchase: "Minimum purchase",
    amount_usage: "Used amount ",

    delete_alert: {
      title: "Delete offer",
      message: "Are you sure to delete this offer?",
      action: "Yes, delete offer",
    },
    notifications: {
      delete_success: "Offer has been deleted successfully.",
    },
  },

  /** {@see BOfferAdd} **/
  offer_edit: {
    title_edit: "Edit offer",
    title_add: "New offer",

    design_style: "Design & Style",
    eligible_constraints: "Customer eligible limits",

    title_input: "Title",
    title_input_hint: "You can enter a title for this discount code",
    description_input: "Description",
    description_input_hint: "Write a description for this discount code",

    currency_input_message: "Available offer for this currency.",
    qualified_products: "Eligible products",
    qualified_products_message:
      "For products to be eligible, total items in cart must be equal or greater than minimum quantity.",
    min_items: "Minimum quantity of items",
    min_items_message: "The number of items that the customer must buy",
    offered_products: "Offered products",
    offered_products_message: "At least one of these products must be in cart.",
    discount_percent: "Discount percentage",
    discount_percent_message: "Discount percentage for these items.",
    discount_percent_hint: "Amount of discount percentage",

    per_order: "Maximum number of uses per order",
    per_order_message:
      "The maximum number of times that the offer can be applied to an order",

    count_input: "Amount",
    count_input_hint: "Maximum use of this offer",

    min_purchase: "Minimum purchase amount",
    min_purchase_hint:
      "Purchase price must be greater than or equal to this value",
    limitation: "Limitation",

    date_start_input: "Start",
    date_start_input_placeholder: "Select when to start coupon",
    date_end_input: "End",
    date_end_input_placeholder: "Select when the discount will end",
    max_actives_is_3: "You can only have three active offers at the same time.",
    enable: "Auto apply",

    notifications: {
      add: "New offer created successfully.",
      edit: "Offer updated successfully.",
    },
    config: {
      subtitle:
        "Begin crafting an intelligent deal by establishing its title, description, and public availability status.",
    },
    limit: {
      subtitle: "Set the maximum usage limit for this offer in this section.",
    },
    duration: {
      subtitle:
        "If you wish to set a specific timeframe for an offer, you can configure the duration here.",
    },
    constraints: {
      subtitle:
        "Set the eligibility criteria and conditions for the offer here. The offer applies to cart items that meet these conditions.",
    },
    discounted_products: {
      title: "Discounted products",
      subtitle:
        "You can specify the products to which this offer will apply a discount.",
    },
    cluster: {
      subtitle:
        "By associating this offer with a cluster, you can easily manage it alongside other resources in a single location.",
    },
  },

  /** {@see BPageCampaignAds} **/
  campaign_ads: {
    menu: {
      banner: "Banner",
      reportage: "Reportage",
      social: "Social Media",
      offline: "Offline",
    },
  },

  /** {@see BPageShopMarketingEmail} **/
  emails: {
    title: "Email Marketing",
    subtitle:
      "Effortlessly design emails with drag-and-drop functionality, schedule and initiate campaigns to boost customer retention, and access trustworthy, precise data all in one convenient location.",
    cation_message:
      "⚠ Kindly connect your email provider to begin dispatching emails using your custom domain.",

    subject: "Subject",
    from: "From",
    in_que: "Awaiting",
    schedule_at: "Schedule at",
    sent: "Sent",
    sends: "Sends",
    delivers: "Delivered",
    views: "Views",
    clicks: "Clicks",
    buys: "Purchases",
    new_email: "Add New email",
    new_email_message: "Create & schedule new marketing email",
  },

  /** {@see BPageEmailMarketingDashboard} **/
  email_dashboard: {
    review: "Review",
    waiting_for_approve: "Waiting for confirmation by {name}",
    approved_by: "Email verified by {name} and sent.",
    not_submitted_send_request:
      "You have not yet submitted a request to send this email.",
    reviewed_by: "Reviewed by {name}",
    status: "Email status",
    conversion: "Conversion rates",

    sell_performance: "Sales performance",
    total_buys: "Total number of sales",
    amount_buy: "Total sales amount",
    average_sell: "Average sales",
    sessions: "Sessions",
    overview: "Overview",
    purchase_amount: "Purchase amount",
    actions: "User activity",
  },

  /** {@see BPageEmailMarketing} **/
  email_page: {
    emails: "Emails",
    edit: "Edit",
  },
  /** {@see BPageAffiliator} **/
  affiliate_page: {
    affiliates: "Affiliate partners",
    orders: "Orders",
    payments: "Payments",
  },

  /** {@see BPageAffiliateDashboard**/
  affiliate_dashboard: {
    link: "Affiliate partner link",
    fix_commission: "Fixed commission",
    percent_commission: "Percentage-based commission",
    last_payment: "Last payment",
    balance: "Balance",
    total_payment: "Total payments",
    status: "Affiliate partner status & restrictions",
    available_for: "Available for",
    orders_count: "Orders amount",
    orders_accepted: "Accepted Orders",
    finance: "Financial report",

    amount_accepted: "Accepted Amount",
    amount_paid: "Paid Amount",
    sessions: "Sessions",
    affiliate_payment: "Affiliate partner payments",
    amount_payment: "Payment Amount",
    amount_payment_hint: "Exact amount of transaction",
    i_paid: "I paid {amount} {currency} to {name}.",
    pay_now: "Pay now",
  },

  /** {@see BPageShopPermissionRoles**/
  permission_roles: {
    new_role: "Add New role",
    new_role_message: "Make teamwork easier.",
    new_role_action: "Add new role",
  },
  /** {@see Affiliate**/
  user_affiliates: {},
  /** {@see BPageShopIncentivesLottery**/
  shop_lotteries: {
    title: "Lottery",
    sub_title:
      "Your customers can play game and win. Customers of your store must consume 10 chips for each game. For example, if you want your customers to have a chance to win 1000 USD, you can set the amount of each chip price at 100 USD. A value of 0 for each chip means that the buyer will receive one chip for each purchase.",
    manually_send_chip: "Do you want to manually send chips to users?",
    manual_send_token_action: "Manual Tokens",
    lottery_enable: "Is lottery enabled?",
    chip_price_input: "Chip price",
    zero_chip_message: "Give 1x chip per order",
    chip_has_price_message: "Give 1 chip per {amount} {currency} of order.",
    chip_disabled_message: "Chip is disabled!",
    create_new: "Add new prize",
    delete_alert: {
      title: "Delete Prize",
      message: "Are you sure to delete this prize permanently?",
      action: "Yes, Delete Now",
    },
    notifications: {
      delete_success: "Prize deleted successfully.",
    },

    config: {
      subtitle:
        "Boost customer purchases with a gamified experience in your store. Set up prizes and winning odds for customers who earn tokens through purchases. Each game play costs 10 tokens, and you can offer special prizes for first-time buyers. The default game is Wheel of Fortune, but you can customize it to fit your shop's layout.",
    },
    empty_prize_list: "Create and manage prizes here...",
  },

  /** {@see BLotteryAdd**/
  lottery_edit: {
    title_edit: "Edit lottery item",
    title_add: "New lottery item",
    general_config: "General configuration",
    design_style: "Style & Appearance",
    enable_message: "Maximum items in a wheel are 14.",
    title_input: "Title",
    title_input_hint: "Write a short title.",
    description_input: "Description",
    description_input_hint: "Write a description about the item.",
    quantity: "Quantity",
    quantity_message: "Total available items",
    image: "Image",
    image_placeholder: "Select an image for item",
    chance: "Chance",
    chance_message: "Winning Chance in percent",
    free_for_first: "Is it free for new customers?",
    free_for_first_message: "New customers can win this item.",
    not_free_for_first_message: "This prize not available for first free play.",

    amount: "Prize amount",
    amount_hint: "Users win this amount of charge for their order.",
    currency_message:
      "Currency for this item. Other currencies are converted by exchange rate.",
    discount: "Discount",
    discount_message: "Discount percent on customer order",
    discount_limit: "Discount limit",
    discount_limit_hint: "Maximum discount for customer.",
    color: "Color",
    condition: "Conditions",

    notifications: {
      add: "New lottery item created successfully.",
      edit: "Lottery items changed successfully.",
    },
    config: {
      subtitle:
        "Here, you can create your shop's lottery prizes. Set the title, description, color, and image for each prize.",
    },
    design: {
      subtitle:
        "Here, you have the option to choose an image and color for the prize.",
    },
    constraints: {
      subtitle: "Specify the criteria and limitations for winning this prize.",
    },
    prize: {
      title: "Prize",
      subtitle:
        "Set up the prize details here. Options include discount codes, gift cards, credits, and other discounts as lottery rewards.",
    },
    product_input: {
      label: "Product prize",
      message: "Select a product for prize (is free)",
    },
  },

  /** {@see BGiftcardTypeInput**/
  gift_card_types_list: {
    label: "Gift card type",
    message: "Select a gift card type from the list.",
  },

  /** {@see BEmailMarketingEditor**/
  email_builder: {
    service_unavailable: "The mail server is not active in your account.",
    design_section: "Your email design plate",
    schedule_switch: "Schedule sending emails?",
    schedule_placeholder: "Select time to send email",
  },

  /** {@see BCustomersFunnel**/
  user_funnel: {
    REGISTER_DATE: {
      title: "Registration date",
      description: "Filter by registration date of user.",
    },
    LAST_BUY_DATE: {
      title: "Last purchase",
      description: "Last purchase date.",
    },
    LOGIN_DATE: {
      title: "Login date",
      description: "Last login date.",
    },
    LEVEL: {
      title: "Customer club",
      description: "Members of Customer club.",
    },
    SUBSCRIBED: {
      title: "Subscribed",
      description: "To have subscription for receiving email.",
    },
    NOT_PURCHASED: {
      title: "No Purchase",
      description: "Customers who have not purchased so far.",
    },
    SEX: {
      title: "Gender",
      description: "User gender.",
    },
    LOCATION: {
      title: "Location",
      description: "User Location .",
    },

    LIMIT: {
      title: "Limit",
      description: "Set a limit on the maximum number of users.",
    },

    SEGMENTS: {
      title: "Segments",
      description: "Limit customers in specific manual segmentation.",
    },
  },

  /** {@see InlineHelp**/
  inline_help: {
    helps_title: "Service User Guide",
    blogs_title: "Related Content in Selldone Blog",
  },

  /** {@see BPageShopFinanceTax**/
  shop_tax: {
    region: "Region",
    label: "Label",
    country_tax: "Country Tax",
    customer_tax: "Customer VAT",
    business_tax: "Business VAT",
    shipping: "Shipping",
    override: "Override",
    country: "Country",
    vat_range: "VAT Range",
    custom: "Custom",
    regions: "Regions",
    rest_world: "The rest of the world",
    overrides: "Overrides",
    dialog_set_title: "Tax settings",

    tax_setting: "Tax settings",
    vat: "VAT",

    calculate_tax_input: "Auto calculate tax",
    calculate_tax_message:
      "By activating this option, VAT will be calculated and applied for your orders.",

    tax_number: "Tax number",
    tax_number_message:
      "Enter your tax number. This registration number will be recorded in the buyer's invoice.",

    tax_included_in_price_input: "Included ╏ Tax included in products price",
    tax_included_in_price_message:
      "Select this option if you include the tax amount in the price of your product. The tax amount will be calculated with the following formula.",
    tax_included_in_price_formula:
      "Tax = (price * VAT) / (1 + VAT), for example, the amount of tax for a product at a price of 100$ with a value added rate of 10% becomes 9.09$.",

    tax_exclude_title: "Excluded ╏ Tax will be added at checkout",
    tax_excluded_message:
      "The taxes will be calculated before the payments during the checkout and added to the excluded tax price depending on your customer evidence.",

    tax_on_shipping_input: "Apply taxes to shipping",
    tax_on_shipping_message:
      "By selecting this option the tax will be applied to shipping .",

    fixed_tax_rate: "Fixed tax rate",
    dynamic_tax_rate: "Tax based on regions",

    locations_tip:
      "The above list only shows the countries that you have selected in the Shop settings > Locations  as the countries you sell.",
    locations_action: "Store locations Settings",

    save_alert: "Settings are not saved!",

    pos_tax_setting: "POS Tax settings",
  },

  /** {@see BPageTransportation**/
  transportation_page: {
    menu: {
      dashboard: "Dashboard",
      transportations: "Shipping methods",
      orders: "Orders",
      setting: "Setting",
      delivery_services: "Services",
      delivery_persons: "Couriers",
    },

    go_to_courier_list: "View couriers list",
    go_to_service_list: "View shipping services list",
  },

  /** {@see BPageTransportationCouriers**/
  transportation_persons: {
    title: "Couriers",
    notifications: {
      success_add: "Courier added.",
      success_reset: "Statistics reset.",
      success_remove: "Courier removed successfully.",
      success_update: "Courier information updated successfully.",
    },
    reset: {
      title: "Reset statistics",
      message: "Are you sure to reset statistics of this courier?",
      action: "Yes, reset now",
    },
    remove: {
      title: "Remove Courier",
      message: "Are you sure to delete this courier?",
      action: "Yes, remove now",
    },
    add_dialog: {
      title: "Add new courier",
      action: "Add courier",
    },
  },
  /** {@see BPageTransportationOrders**/
  transportation_orders: {
    title: "Orders for Shipping",
    notifications: {
      success_update: "Shipping status updated successfully.",
      success_payment: "COD payment confirmed successfully.",
    },
  },
  /** {@see BPageCourier**/
  delivery_person: {
    actions_title: "Courier Settings",
    action_delivered: "Shipped",
    action_paid: "COD Paid",
    action_returned: "Returned",
    cod_confirm_action: "Confirm COD Payment",
    pickup_dialog: {
      title: "Are you courier of this package?",
      message:
        "If you are responsible for carrying this parcel, select the Yes, otherwise select the No.",
    },
    status_dialog: {
      title: "Change status to {status}",
      message: "Are you sure to change the delivery status to {status}?",
      action: "Yes, I confirm it!",
    },
    cod_dialog: {
      title: "COD Payment",
      message:
        "Do you confirm that you have received the order amount from the buyer?",
      action: "Yes, I confirm payment!",
    },
  },

  /** {@see BPageTransportationServices**/
  transportation_services: {
    title: "Delivery service",
    notifications: {
      success_add: "Delivery service added.",
      success_reset: "Statistics reset.",
      success_remove: "Service removed successfully.",
      success_update: "Service updated successfully.",
    },
    reset: {
      title: "Reset statistics",
      message: "Are you sure to reset statistics of this service?",
      action: "Yes, reset now",
    },
    remove: {
      title: "Remove delivery service",
      message: "Are you sure to delete this service?",
      action: "Yes, remove now",
    },
    add_dialog: {
      title: "Add new delivery service",
      action: "Add service",
    },
  },
  /** {@see BPageTransportationPickups**/
  transportation_pickups: {
    addresses: {
      title: "Pickup addresses",
      subtitle:
        "Add and edit pickup addresses here. Users will be able to select the pickup address on the checkout page.",
      add_action: "Add new location",
    },
  },

  /** {@see DeliveryReceiptWidget**/
  delivery_receipt: {
    title: "Delivery receipt",
    has_return: "Return of delivery",
    cashed: "Cash payment",
  },
  /** {@see BPageTransportationServiceDashboard**/
  delivery_dashboard: {
    select_destinations: "Add orders to the list",
    price_calculation: "Estimate shipping rates",
    price_calculation_action: "Calculate price",
    add_request: "Request Service",
    add_request_action: "Submit Service Request",
    refresh_action: "Update information",
  },

  /** {@see DeliveryOrderWidget**/
  delivery_order: {
    title: "Shipping order",
    has_return: "Return of delivery",
    cashed: "Cash payment",
  },

  /** {@see BPagePos**/
  cash_register: {
    menu: {
      panel: "Cash Register",
      orders: "Orders",
      customers: "Customers",
      devices: "Devices",
      inventory: "Inventory",
    },
    payment_confirm: "Payment confirmation",
    payment_confirm_msg: "Customer paid order {basket_id}.",
  },

  /** {@see BPosDeviceBarcodeScanner**/
  barcode_scanner: {
    wifi_pass: "Your Wi-Fi Password",
    message: "Enter your WiFi router password and scan the QR code.",
    wifi_ssid: "Wi-Fi SSID",
    ssid_message: "Enter your Wi-Fi network name (SSID).",
  },

  /** {@see PosDeviceTypes**/
  pos_devices: {
    Scanner: "Barcode Scanner",
    Scanner_desc:
      "To use the barcode scanner, you can enter the product SKU code correctly in the product settings.",
    Printer: "Printer",
    Printer_desc:
      "Print your customers receipt by connecting to a receipt printer.",
    CustomerView: "Customer View",
    CustomerView_desc:
      "This page enables you to display the order details to your customers.",
    CardReader: "Card Reader",
    CardReader_desc: "Card reader device for COD payment by your customers.",
    ChipReader: "Chip Reader",
    ChipReader_desc: "NFC tag reader to add items to cart using tags.",
  },
  /** {@see BPagePosDevices**/
  pos_register_devices: {
    delete_dialog: {
      title: "Remove device",
      message: "Are you sure to remove this device from your POS profile?",
      action: "Yes, Remove now",
    },
  },

  /** {@see BPageOrderPos**/
  pos_process_center: {
    title: "POS order processing center",
    menu: {
      label: "Package Label",
      receipt: "Receipt",
      back: "Back",
      timeline: "Timeline",
      order: "Order",
    },
  },
  /** {@see BPagePosPanel**/
  pos: {
    name: "POS",
    message:
      "Have your zero-setup cost online point of sale, run it on any smartphone, tablet, and PC, or create orders manually.",
    add_customer: "Add a Customer",
    set_delivery: "Set Delivery Address",
    add_giftcards: "Add Gift Card",
    add_discount_code: "Add Discount Code",
    add_coupon: "Add Coupon",
    set_campaign: "Set Campaign",
    select_buyer: "Select buyer!",
    send_to_pos: "Send to card reader machine",
    print_receipt: "Print receipt",
    confirm_cash_payment: "Confirm cash payment",
    payment_cod: {
      title: "Cash on delivery payment",
      message:
        "The amount of this order will be paid upon delivery. After receiving the amount from the buyer, you can confirm the payment to complete the order in the system.",
    },
    payment_online: {
      title: "Select online payment method",
      message:
        "By selecting following options, a payment link will be created and sent to the buyer. By paying this link, the status of the order will change to the paid mode. Payment link will be generated by scanning the QR code on the customer screen , SMS or email. To activate any channel to send a link, click on that option and then press the button to send a receipt to the buyer.",
    },
    notifications: {
      success_pay: "Order payment completed.",
      success_order:
        "Order created successfully and waiting for customer to pay it.",
    },
    payment_dialog: {
      check_pay_now: "Manually check the payment",
      close_action: "Close dialog. I do not want to wait for customer payment",
      go_to_order: "Go to order page",
      paid_by_gift_card_msg:
        "The total order amount was withdrawn from the gift cards! The buyer does not need to pay more.",
      cod_msg: "The customer will pay when receiving the order.",
      online_msg: "Ask the customer to scan QR code on the customer screen.",
    },
  },

  /** {@see BPageShopProductsImporter**/
  exporter: {
    title: "Export data",
    subtitle:
      "Your data belongs to you! You can download your business information in the standard format at any time. However, respect your customers' privacy, don't spam them, and never share their information with a third party.",

    excel:
      "You will receive a list of all the {type} in the store along with complete information in Excel format.",
    csv: "You will receive a list of all the {type} in the store along with complete information in CSV format. This format is in accordance with the standard format of Selldone for importing {type} into the store.",
  },
  /** {@see BPageShopProductsImporter**/
  importer: {
    category: {
      title: "Import categories",
      subtitle:
        "Upload CSV file of categories here. Make sure you follow standard format.",
    },
    product: {
      title: "Import products",
      subtitle:
        "Upload CSV file of products here. Make sure you follow standard format.",
    },
    product_images: {
      title: "Import images",
      subtitle:
        "Receiving image information is time consuming. Remember to honor copyright laws when importing images. Images that fail to import will be automatically deleted from the list after 7 days.",
    },
    inventory: {
      title: "Bulk update inventory",
      subtitle:
        "Upload CSV file of inventory here. Make sure you follow the standard format by exporting the CSV file first, then editing that file.",
    },

    back_to_products: "Back to products list",
    back_to_categories: "Back to category list",
    back_to_inventory: "Back to inventory list",

    step_select_file: "Select CSV File",
    step_send_to_server: "Send To Server",
    step_view_result: "View Result",
    step_view_que: "View Awaiting List",
    send_to_server_action: "Send to server",

    shop_license: "Shop license",
    max_items_limit: "Maximum items limit",
    total_items: "Total items",

    /** {@see BShopCustomerImporter**/
    customer: {
      title: "Import customers",
      subtitle:
        "Upload CSV files of customers here. Make sure you follow the standard format, and also, you have to follow privacy rules.",
    },
  },
  /** {@see BPageShopMarketingCampaign**/
  campaigns: {
    title: "Campaigns",
    subtitle:
      "Create campaigns, trackable links, and see reliable and accurate information in one place. We help you make better data-driven decisions.",
    add_action: "Add New Campaign",
    empty_message: "Create your first campaign now!",
    delete: {
      title: "Delete campaign",
      message: "Are you sure to delete this campaign and all the data?",
      action: "Yes, Delete Now",
    },
  },

  landing_categories: {
    raw: "Raw templates",
    all: "All templates",

    marketing: "Marketing & Ads",
    product: "Product introduction",
    health: "Health & Fitness",
    food: "Food & Fruits",
    house: "Real estate & House",
    device: "Machine and device",
    car: "Car",
    software: "Software",
    clothing: "Clothing & Shoes",
    jewellery: "Jewelry",
  },

  /** {@see BPageShopSettingTheme**/
  shop_theme: {
    theme_colors: "Theme colors",
    products_view_mode: "Shopping list view",
    products_view_mode_desc:
      "You can adjust the display mode of products in your store based on the screen size. This mode will be considered by default and will not be applied if the user changes the display mode.",

    color_light: "Primary color",
    color_dark: "Primary dark color",
    color_deep_dark: "Deep dark color",
    color_info: "Links",
    light_checkout: "Checkout theme",
    light_header: "Header theme",
    light_footer: "Footer theme",
    light_filter: "Category filter theme",

    product_page: "Product Page",
    typography: "Typography",
    header: "Header",
    custom_code: "Custom code",
    custom_css: "Custom CSS",
    custom_variants: "Variants",
  },

  /** {@see AppTemplates**/
  app_templates: {
    default: "Default",
    blue: "Blue ocean",
    amber: "Amber",
    green: "Equatorial",
    red: "Vampire",
    magenta: "Flower",
    master: "Master",
    black: "Dark side",
  },

  /** {@see BPageAffiliateOrders**/
  affiliate_orders: {
    title: "Affiliate Partner Orders",
    table: {
      order_price: "Order amount",
      order_payment: "Order payment status",
      order_link: "Order link",
      commission_status: "Commission status",
      commission_amount: "Commission amount",
      items: "Items",
      actions: "Actions",
      create_date: "Create date",
    },
    notifications: {
      update_success: "Affiliate status updated.",
    },
  },

  /** {@see BPageAffiliatePayments**/
  affiliate_payments: {
    title: "Affiliate Partner Payments",
    table: {
      staff: "Staff",
      amount: "Amount",
      note: "Note",
      date: "Date",
    },
  },
  /** {@see BPageShuttleRoles**/
  my_roles: {
    title: "My roles ",
    message:
      "Roles represent the specific access permissions granted to store employees. For instance, roles may be assigned to staff members responsible for order processing, such as shipping or packaging.",
  },
  /** {@see WidgetMyRoleCard**/
  role_card: {
    complete_tasks: "Completed tasks",
    reject_tasks: "Rejected tasks",
    last_check: "Recent checking",
  },

  /** {@see ReferralLinkWidget**/
  referral_widget: {
    apply_now: "Apply now for this program!",
    no_bonus: "Receive the first prize by inviting a friend.",
    your_gift: "Your gift",
    invited_gift: "Invited gift",
    percent_bonus: "Percent bonus",
    discount_bonus: "Discount bonus",
    registered: "New user",
    accepted: "Accepted user",
  },

  /** {@see BAppConfigDialog**/
  app_config: {
    reviews: "Reviews",
    rate_now: "Rate now",
    category: "Category",
    uninstall: "Uninstall",
    get_app: "Get app",
    public_keys: "Public Keys",
    private_keys: "Private keys (Secure)",
    config: "App configuration",
    app_status: "Application status",
    app_info: "Application info",
    update_at: "Recent update",
    visit_website: "Visit website",
    privacy: "Privacy Policy",
    installs: "Installs",
    basic_profile_permission: "Basic profile information",
    developer: "Developer",
    permissions: "Permissions",
    total_comments: "Total comments",
    delete_dialog: {
      title: "Uninstall app",
      message: "Do you want to remove this app from your store?",
      action: "Yes, Delete app",
    },
    notifications: {
      uninstall_success: "Application uninstalled successfully.",
    },
  },

  /** {@see BPageShopChannelBots**/
  shop_bots: {
    not_set: "Not Set!",
    tokens: "Token(s)",
    webhook: "Webhook",
    calls: "Calls",
    dialog: {
      title: "{name} Bot Configuration",
      message:
        "A comprehensive bot framework for building enterprise-grade shopping experiences.",
    },
  },

  /** {@see BPageShopCrmCustomers**/
  shop_customers: {
    title: "Customers Management",
    subtitle:
      "Customers can be added to your store in several ways; manually, bulk Excel import, through the POS, or via your online store. Whenever a user logs into your store, they will automatically be registered as a customer.",
    add_customer_action: "Add new customer",

    all_customers: "Download all customers",
    filtered_customers: "Filtered customers",
    dialog_chips: {
      title: "Set the number of customer chips",
    },
    dialog_club: {
      title: "Set customer club level",
    },
  },

  /** {@see BCustomerAdd**/
  customer_add: {
    edit_title: "Edit customer",
    add_title: "Add new customer",
    subtitle:
      "To add a customer to your store, please provide either an email address or a phone number.",
    more: {
      title: "Add more details",
      subtitle: "Set currency, customer club, segments, address and more.",
    },
    detail: {
      subtitle:
        "Keep a record of personal information about your customer. Please respect your customer's privacy.",
    },
    preferences: {
      subtitle: "Set default user currency, customer club, and segments here.",
    },
    address: {
      subtitle:
        "This address can be used in the POS. The user can not see this information.",
    },
  },

  /** {@see AppPageDashboard**/
  app_dashboard: {
    status: "Publish status",
    statistics: "Statistics",
  },
  /** {@see AppPage_Publish**/
  app_publish: {
    production_version: "Production version",
    beta_version: "Beta version",
    alpha_version: "Alpha version",
  },
  /** {@see AppPublishWidget**/
  app_publish_widget: {
    header: "Store Website Header",
    header_code: "Header code",
    admin_page: "Admin Pages",
    name: "Name",
    icon: "Icon",
    url: "Url",
  },

  /** {@see AppPage_API**/
  app_api: {
    title: "API Access",
    revoke_api: "Revoke API",
    api_key: "API Key",
    secret: "Secret Key",
    client: "Client",
    redirect_url: "Redirect urls",
    client_name: "Client name",
  },

  /** {@see BPageApplication**/
  app_loader_page: {
    no_ui_title: "This application does not have any UI!",
    no_ui_desc:
      "Some applications do not require a user interface in their admin area. This application may only add code to the header section of your store website.",
    header: "Header code",
  },
  /** {@see BPageShopFinanceReport**/
  finance_report: {
    export_title: "Export financial data",
    export_sub_title:
      "Get a single file that contains financial information. This includes details of both online and in-store orders, as well as product-wise sales data for your chosen time period.",
    start_input_placeholder: "Select start date of report",
    end_input_placeholder: "Select end date of report",
    download_action: "Download finance list",
  },

  /** {@see BPageShopSettingNotifications**/
  shop_notifications: {
    title: "Shop notifications",
    message: "Edit your store notification settings and preferences",
    channel: "Channel",
    status: "Status",
    events: "Events",
    info: "Info",
    actions: "Actions",
    connected: "Connected",
    not_connected: "Not connected!",
    connect_now: "Connect Now",
    send_test: "Send test data",
    disconnect: "Disconnect",

    dialog: {
      title: "Bot Configuration",
      message:
        "A comprehensive notification framework for building enterprise-grade ecommerce experiences.",
      action: "Click here!",
      set_config: "Set config",
    },
  },
  notification_events: {
    new_order: "🛍️ Order",
    payment: "💳 Payment",
    return: "📦 Return",
    weekly_report: "📈 Weekly Reports",
  },

  /** {@see BOrderDashboardDelivery} **/
  order_delivery: {
    title: "Delivery",
    add_to_delivery_que_action: "Add to shipping queue",
    in_que: "In shipping queue",
    message:
      "Once the package has been handed over to the shipping courier, please click the <b>Confirm Delivery</b> button.",
    message_add_to_service:
      "Press the button below to add your order to the shipping queue and dispatch the package via a <b>delivery service</b>.",
    courier_action: "Delivery Confirmation",
    courier_action_subtitle: "My courier will pick up the parcel.",

    pickup_action: "Pickup confirmation",
    pickup_action_subtitle: "The customer picked up the order.",

    service_action: "Execution Confirmation",

    checklist: [
      "Check courier's identity card.",
      "Well-packaging of products and timely delivery can increase your customers' retention rate.",
    ],
    manual: {
      title: "Waiting for confirmation of delivery by the customer.",
      action_received: "Buyer Confirmation",
      action_returned: "Delivery Return",

      message:
        "Note: If the customer receives the order, you can use the following options to complete the fulfillment. Some shipping services in the system will confirm the delivery automatically.",
    },
    auto_complete_note:
      "After a certain period, the order status will be changed to the delivered. This period varies depending on the type of order and is determined by the system.",
    received: {
      title: "Delivered to Customer.",
      delivered_date: "Delivery Date",
    },
    receiver: "Receiver",
    bill: "Receipt",

    tracking: {
      title: "Add tracking code / Url",
      code: "Tracking code",
      url: "Tracking url",
      message:
        "If you have shipped through a service that provides a tracking code for this order, you can enter the code and the relevant tracking link in this section. This information will be shown to the customer.",
    },
    preferred_delivery_time: "Preferred Delivery Time",
    manage_couriers: "Manage my couriers",
    manage_service: "Manage service",

    option_deliver_by_courier: "Option 1: Deliver by your couriers.",
    option_add_to_que:
      "Option 2: Add to queue to process on shipping service page.",
    option_instant_shipping: "Option 3: Instant shipping.",
  },

  /** {@see BShopHomeSelect} **/
  shop_home_edit: {
    title: "Home page setting",
    sub_title:
      "Set up the default page for your website in this section. You also have the flexibility to designate a custom homepage for each domain separately through the domain settings.",

    default_home: "Default home page",
    default_home_placeholder: "Shop page is the website home page",
  },
  /** {@see ReferralLinkPage_Dashboard} **/
  selldone_referral_page: {
    title: "Referral Dashboard",
    referral_link: "Referral link",
    registered: "Registered",
    accepted: "Accepted",
    bank: "Bank",
    bank_title: "Bank info for withdrawal",
    new_users: "New users",
    performance: "Performance",
    credit_mode: "Credit mode",
    get_stickers: "Get sticker Html code to copy & past",
    click_copy_sticker_code: "Click on the badge to copy html code.",
  },
  /** {@see ReferralLinkPage_Payments} **/
  selldone_referral_payment: {
    title: "Referral Payments",
    officer: "Officer",
    amount: "Amount transaction",
    note: "Note",
    date: "Date",
  },

  /** {@see BGatewayCard} **/
  widget_shop_gateway: {
    link_account_caution:
      "Link an account ({currency}) to your shop! Click here..",
  },

  /** {@see BProductOrderSalesPerformance} **/
  product_sell_widget: {
    title: "Product sales performance",
  },

  /** {@see BOrderDashboardDropshippingFulfillment} **/
  fulfilment_order_widget: {
    title: "Dropshipping fulfillment",
    check_action: "Accept dropshipping",
    uncheck_action: "Order confirmed",
    pay_action: "Pay items cost..",
    pay_completed: "Payment confirmation",
    list_of_items: "Reselling Items",

    checklist: [
      "Pay the amount of products you sell indirectly to the original seller.",
      "You can pay and settle the cost of products to the supplier together in the accounting section> Dropshipping of the store.",
      "After payment, the supplier will receive your order and send it directly to the buyer after preparation.",
    ],
    message:
      "After paying the order fee to the supplier, see the progress of sending the order in this section.",
  },

  /** {@see BPageWholesaler} **/
  drop_shipping: {
    menu: {
      dashboard: "Dashboard",
      orders: "Orders",
      inventory: "Inventory",
      shops: "Resellers",
      requests: "Requests",
    },
    drop_shipping_charge: "Dropshipping Charge",
  },

  /** {@see DropshipRequestStatus} **/
  dropship_request_status: {
    PENDING: "Pending",
    ACCEPT: "Accept",
    REJECT: "Reject",
  },

  /** {@see BPageWholesalerShop} **/
  dropshipping_reseller_page: {
    menu: {
      dashboard: "Dashboard",
      orders: "Orders",
      wallet: "Wallet",
    },
  },

  /** {@see BPageWholesalerShopDashboard} **/
  dropshipping_reseller_dashboard: {
    title: "Reseller dashboard",
  },

  /** {@see BPageWholesalerShopOrders} **/
  dropshipping_reseller_orders: {
    title: "Reseller orders",
  },

  /** {@see BPageWholesalerShopWallet} **/
  dropshipping_reseller_wallet: {
    title: "Reseller wallet",
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Payment Confirmation",
      payment_success: "Payment completed.",
      buy_title: "Buy",
      pay_by_giftcards: "Your order was paid with a gift card.",
      free_order: "Your order is free.",
      pay_by_cod: "Your order has been registered as cash on delivery.",
      pay_by_dir:
        "Your order has been registered as direct payment, please complete payment and upload the receipt in your order page.",

      pay_title: "Payment",
      qr_code_payment: "Payment QR code created.",
      connecting_to_online_gateway: "Connecting to online payment gateway.",
    },
  },

  /** @see DropShippingAccountCharges **/
  dropship_charges: {
    notifications: {
      pay_confirm_message: "Payment is confirmed.<br> Date: {payment_at} ",
      pay_fail_title: "Not paid",
      pay_fail_message: "Payment cannot be verified!",
    },
  },

  /** @see BPageShopFinanceResellerFulfillment **/
  dropship_checkout: {
    pay_dialog: {
      title: "Reseller orders payment",
      balance: "Your account balance",
      total_cost: "Total orders cost",
      need_charge: "Needs to charge",
      no_account_cation: "You have no account! Call wholesaler.",
      orders: "Orders",
    },
    notifications: {
      success_pay:
        "Your payment for these orders confirmed and completed successfully.",
    },
  },
  /** @see BPageShopFinanceResellerWallets **/
  dropship_accounts: {
    charge_account: "Charge account",
    charge_dialog: {
      title: "Charge dropshipping account",
      amount_input: "Account charge",
      charge_now: "Charge now",
    },
  },

  /** @see BPageWholesalerDashboard **/
  dropship_admin_dashboard: {
    title: "Reseller requests",
    today_order_count: "Today orders count",
    yesterday_order_count: "Yesterday orders count",
    total_7_days: "Total orders in last 7 days",
  },

  /** @see BProductAddDropshipping **/
  dropshipping_products: {
    no_shops:
      "Sorry, no store found. There will be more stores in the future so you can put their products in your store.",
    show_all_shops: "Show all shops",
    show_eligible_shops_message: "Show eligible shops",
    show_all_message: "You can see all shops",
    current_shop: "Current shop",
    request_account: "Request account",
    request_accepted: "Request accepted",
    request_rejected: "Request rejected",
    request_pending: "Request pending..",
    notifications: {
      add_product: "Product added to your store.",
      request_access:
        "We sent your access request to the wholesaler successfully.",
    },
  },

  /** @see BProductDropshippingAbstractView **/
  product_dropshipping: {
    need_re_enable:
      "This product has been changed by the original seller, these price changes have disabled the product in your store. Check the changes and if you agree to reactivate the product, press the button below.",
    need_re_enable_action: "Agree, apply changes and activation",
    changed_value:
      "This product has been edited by the original seller. Check the changes and if you agree to apply the changes to your product, click the button below.",
    changed_value_action: "Agree, make changes",
    parent_deleted: "This item has been removed by the original seller.",
    parent_closed:
      "This product has been disabled by the original seller! You will not be able to sell this product in your store, but if the original seller reactivates the product you will be able to reactivate this product in your store.",
    notifications: {
      re_enable_success: "This product has been reactivated.",
      update_success:
        "This product information was updated with the original product information.",
    },
  },

  /** @see BPageProductDropshipping **/
  product_dropshipping_admin: {
    title: "Dropshipping",
    save_alert:
      "The dropshipping settings of this product have changed. Do you want to save the changes?",
    reselling_message:
      "By activating this option, other sellers will be able to add your product to their store.",
    reselling: "Enable Dropshipping",
    price_merchants: "Price for merchants",
    price_commission: "Merchant commission (Fixed)",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Waiting for availability",
    inform_me_when_available: "Notify me when it is available!",
    pay_buy: "Pay & Buy",
    quantity: "Count",
    quantity_in_basket: "Items in cart",
    count_unit: "x",
    remove: "Remove",
    add_to_basket: "Add to cart",
    book_now: "Book now",
    reserve_now: "Reserve now",
    buy_now: "Buy now",

    buy: "Buy",
    notifications: {
      inform_add_success: "We'll let you know when it's available.",
      inform_remove_success: "You have been removed from the waiting list.",
    },
  },
  /** @see SProductOverview **/
  product_info: {
    fake: "Fake",
    action: "Auction",
    compare_limit: "10 items limit",
    compare_add: "Add to Compare",
    compare_be_in_list: "In comparison list",

    type: "Type",
    brand: "Brand",
    category: "Category",
    discount: "Discount",
    track_price: "Track price",
    waiting_for_auction: "Waiting for auction?",
    inform_auction: "Notify me when auction",
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
  },

  /** @see SStyler **/
  styler: {
    size_class: "Size & Class",
    delete_bg: "Delete background image",
    bg_color: "Background color",
    section_style: "Set section style",
    link: "Set link",
    show_products: "Products / Categories list management",
    show_product: "Select product",
    delete_section: "Delete section",
    text_color: "Text color",
    tex_align: "Text alignment",
    text_style: "Text style",
    bg_image: "Background image",

    product: {
      title: "Select product",
    },

    /** @see SPageProductsFilter **/
    products: {
      title: "Product & categories list management",
      sort_options: "Select the Sorting and View settings.",
      item_types: "Show only products / categories.",
      product_only: "Products only",
      category_only: "Categories only",
      no_category: "There is no category in your store.",
      limit: "Products limit",
      limit_message: "Enter products result counts.",
      select_categories: "Select available categories.",
      categories_limit: "Categories limit",
      categories_limit_msg:
        "Enter the maximum number of categories. Set zero for no limit.",
    },
  },

  /** @see BPageShopCrmChat **/
  shop_contacts: {
    popup: "Enable popup support",
    popup_message:
      "By activating this option, the support key will be seen at the bottom right of your store.",
  },

  /** @see BPagePopup **/
  popup_page: {
    preview: "View live popup",

    menu: {
      design: "Design",
      appearance: "Appearance",
      filter: "Filter",
      setting: "Setting",
    },
    notifications: {
      save: "Popup saved successfully.",
      edit: "Popup updated successfully.",
    },
  },
  /** @see BPagePopupAppearance **/
  popup_appearance: {
    position: "Position",
    position_desc:
      "Specify the display location of this notification on the page.",
    width: "Width",
    width_desc: "You can set the maximum page width.",
    height: "Height",
    height_desc: "You can set the maximum page height.",
    radius: "Corner radius",
    radius_desc:
      "In this section you can set the radius of curvature of the corners of the notification.",
    shadow: "Shadow",
    shadow_desc: "Do you want the pop-up window to be shaded?",
    delay: "Show delay",
    delay_desc:
      "Once the user enters your store, after this amount of time has elapsed, a notification will be displayed to the user.",
    hide: "Hide delay",
    hide_desc:
      "You can set that the notification closes automatically a few seconds after the show. A value of 0 means that the notification will not close automatically.",
    transition: "Popup animation",
  },

  /** @see BPagePopupFilter **/
  popup_filter: {
    registered: "Membership and login requirement",
    registered_desc:
      "You can choose to show this notification only to store users or guests.",
    only_guests: "Only guests",
    only_users: "Only logged in users",
    purchased: "Purchase history",
    purchased_desc:
      "You can choose to show this notification only to users who have already purchased or those who have not yet purchased.",
    no_purchase: "No purchase yet",
    yes_purchase: "Purchased before",
    sex: "Gender",
    sex_desc:
      "Do you want this notification to be shown only to users of a specific gender?",
    age: "Minimum age",
    age_desc:
      "If any value greater than 6 is entered, the user must be logged in and must have entered his date of birth.",
    levels: "Customer Club Levels",
    levels_desc:
      "If the user has one of the selected levels below, this notification will be displayed to him.",
    countries: "Location restrictions",
    countries_desc:
      "Do you want this notification to be displayed only to users coming from a specific country?",
  },

  /** @see BPagePopupSetting **/
  popup_setting: {
    published: "Published status",
    repeat: "Repeat",
    repeat_msg:
      "Do you want this notification to be displayed to the user more than once?",
    intervals: "Time duration of the popup display",
    intervals_msg:
      "The minimum time duration between displaying notifications to a user must have elapsed.",
    designer_zone: "Designer zone",
    title: "Popup title",
    note: "Designer note",
    image: "Cover image",
    delete: {
      title: "Delete",
      sub_title:
        "Once you delete a popup, there is no return. Please be certain.",
      action: "Delete This Popup",
    },
    notifications: {
      delete: "Popup deleted.",
    },
  },

  /**
   *  {@see BPageShopSettingSms}
   *  {@see BShopSmsTemplateList}
   *  {@see BShopSmsTemplateEditor}
   *
   **/
  shop_sms: {
    tabs: {
      templates: "Templates",
      provider: "Provider",
    },

    manage: {
      title: "Manage SMS",
      subtitle:
        "You can see the content of the text messages sent by your store here. Due to the limitation in registering the validation patterns in the messaging service, it is not possible to personalize the text messages at the moment.",
    },

    template: {
      title: "Templates",
      valid_message: "You can create custom SMS messages.",
      provider_not_enable_message: "The SMS provider is not enabled!",
      need_custom_provider_message:
        "Customized SMS messages only work if you set a custom provider.",
      add_new: "Add New",
      disable_reason: {
        set_provider: "Set your provider first!",
        provider_is_disabled: "Provider is disable!",
        otp: "OTP - None customizable!",
        select_another_provider: "Select another provider.",
      },
      enable_only_filter: "Show only enabled",

      text_template_not_supported_msg:
        "Your provider does not support plain text messages.",
      structure_template_not_supported_msg:
        "Your provider does not support structural messages.",

      structured_data: "Structured Data",

      menu: {
        reset_error: "Reset errors",
        send_test: "Send test message",
      },
    },
    template_edit: {
      title_add: "Add new message template",
      title_edit: "Edit message template",
      config: {
        title: "Message Config",
        subtitle:
          "You can create a template for the SMS message on your SMS provider's website, then specify its code and data structure here. We'll forward this information to your provider, where the actual SMS message will be generated.",
        code: "Code",
        language_msg: "Leave it empty to set it as default.",
        enable_msg: "This template will be used to create messages.",
      },
      text: {
        title: "Plain text",
        subtitle:
          "Enter a personalized SMS message here. Dynamic values will be substituted with their actual values before being sent to the user.",
        message: "Message",
        reset_to_default: "Reset to default",

        auto_fill: {
          title: "Auto fill parameters",
          subtitle:
            "You can use each of these parameters in the text and Selldone will replace them with the corresponding value.",
        },

        sample: {
          title: "Sample message",
        },
      },
      template: {
        title: "Structural Template",
        subtitle:
          "You can set the template key and value here. The template code should be exactly what you set in your SMS service provider, and the key is what your provider wants to send the code through. If the <code>value</code> field is empty, then <code>{code}</code> will be considered as the template code.",
        add_new_parameter: "Add new parameter",

        auto_fill: {
          title: "Auto fill parameters",
          subtitle:
            "You can set each of these parameters as a value, and Selldone will replace them with the corresponding value. It's better to define the default values as templates in your SMS provider for simplicity. In this case, there will be no need to define parameter values here.",
        },
        request: {
          title: "Sample payload",
        },
        sample: {
          title: "Sample template message",
          subtitle:"You can copy and past this template to your SMS provider.",
        },
        add_message_action: "Add message template",
      },
    },
  },
  /** @see SmsTemplateMode **/
  sms_template_mode: {
    text: {
      title: "Plain Text",
      desc: "Message will be created from a text with auto replace parameters and send.",
    },
    template: {
      title: "Structural Template",
      desc: "An object will be created from parameters and send to the provider.",
    },
  },

  /** @see BShopSmsProvider **/
  shop_sms_provider: {
    title: "Custom SMS provider",
    reset_error: "Reset errors",
    subtitle:
      "Set up a custom SMS service provider and customize your authentication SMS and business name. The default provider just sends authentication SMS and inform messages in some white-listed countries.",
    plain_text: "Plain text",
    structural_template: "Structural template",
    errors_limit_msg:
      "If your service exceeds 100 errors, it will be disabled automatically! You can reset errors to re-enable it.",

    enable_input: {
      false_description:
        "OTP messages will be dispatched through Selldone in select countries, while other order notification SMS will be sent as well.",
      true_description:
        "SMS messages will be delivered using your service provider.",
    },
    test_input: {
      true_title: "Validate Configuration",
      true_description:
        "We will send a test message to your phone number 📞 <b>{phone}</b>, it can charge you, but you can make sure everything works well.",
    },
    sync_action: {
      title: "Actions",
      subtitle:
        "Some SMS services provide extra services like campaigns, marketing, and other features. You can sync your contacts or additional information to use their features more quickly.",
      action: "Sync contacts",
    },
    tokens: {
      title: "Parameters",
      subtitle:
        "Set the following parameters to link your SMS service provider with your shop.",
    },
  },
  sms_messages_options: {
    all: {
      title: "OPT + Order Notifications",
      description:
        "Authentication messages and order notification will be sent.",
    },
    otp: {
      title: "OTP Only",
      description: "Authentication messages will be sent.",
    },
  },

  /** @see BPageShopSettingEmail **/
  shop_emails: {
    title: "Manage emails",
    sub_title:
      "You will see the list of emails sent by the store to customers and managers in this section. Emails are automatically designed and created based on the information you have entered for your store. Also, the possibility of personalizing messages and images will be available to the public in the future. ",
  },

  /** @see InstagramViewMedias **/
  instagram: {
    title: "Sales on Instagram",
    message:
      "You can turn your Instagram into a shoppable category. First, verify your Instagram account, then you will be able to attach one or more products to posts or stories. It's an experimental (beta) feature.",
    add_product: "Add new product",
    create_product: "Create product",
    link_box_msg:
      "Put this link in your bio on Instagram, Telegram, or other social media so that your audience can find products faster and buy easier.",
    remove_account: "Change / Remove Instagram link",
    sync: "Sync account data (every 60 minutes)",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "To-do list",
      message:
        "Write the titles of the work you want to do and let the buyer know how far it has progressed.",
    },
    booking: {
      title: "Booking / Reservation",
      message:
        "This order will be processed at a specified time, the customer has selected the desired period, if you want to make any changes in the selected period, let the customer knows.",

      selected_checkin: "Checkin Date",
      selected_checkout: "Checkout date",
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
        "You can choose the subscription period by purchasing this service on a daily basis. Let the buyer knows if you want to change the default values you have already entered.",
      duration: "Subscription period",
    },
    charge: {
      title: "Charge",
      message:
        "You have specified a charge for this item. You can change the charge amount for the item purchased by the customer.",
      charge: "Charge",
    },

    save_item: "Verify and set",
    start_service: "Start service",
    end_service: "Finish",
  },
  /** @see BOrderDashboardServiceTasks **/
  service_tasks: {
    notification_finish: {
      title: "Finish of service",
      message:
        "If this is done, press the confirmation key to complete and close the order.",
      action: "Confirm and complete the order",
    },
  },

  /** {@see BProductEditOutputs} **/
  product_outputs: {
    outputs_form: "Output Form structure",

    virtual: {
      title: "Product Output Information Form",
      sub_title:
        "The information you want to show to the user after purchase. This form is especially applicable for the sale of virtual products such as gift card.",
    },
    service: {
      title: "Service Design",
      sub_title:
        "First select your service type and enter the required information. For example, you can define a todo list or ask the customer for a booking time or an appointment.",
    },
  },

  /** {@see BProductServiceManage} **/
  service_design: {
    type: "Service type",
    type_message:
      "Select the type of service you provide for this product. By selecting each item, the relevant form will be displayed. Depending on the type of service you choose, more information may be received from the customer when ordering. ",
  },

  /** ServiceTypes **/
  ServiceTypes: {
    DEMAND: {
      title: "On-Demand",
      desc: "such as home repairs, painting, car repair, etc.",
    },
    BOOKING: {
      title: "Booking",
      desc: "Like booking a hotel room or villa.",
    },
    APPOINTMENT: {
      title: "Appointment",
      desc: "Like a pet care appointment or in-person training.",
    },
    RENTAL: {
      title: "Rental",
      desc: "Like renting a place or a car.",
    },
    SUBSCRIPTION: {
      title: "Subscription",
      desc: "Like club membership or Online Coaching.",
    },
    CHARGE: {
      title: "Charge",
      desc: "Such as charging an account or charging to use an application.",
    },
    CUSTOM: {
      title: "Custom",
      desc: "Select this option if the service you provide is none of the above.",
    },
  },

  /** {@see AvocadoHomePage} **/
  avocado: {
    name: "Avocado",
    title: "Fast, Accurate & Enjoyable Sales on Social Media",
    message:
      "One amount and one title is all you need to get money from your customers! Money will be credited directly to your account and your customers will have a unique shopping experience.",
    new_order: "New bill",
    create_by_seller_title: "Create Invoice",
    create_by_seller_message:
      "To generate an invoice for a specific amount and send it to a recipient, simply click the button below to display the invoice form. Share the provided link with the buyer, allowing them to make a payment and monitor their order status.",

    create_by_buyer_title: "Avocado form",
    create_by_buyer_message:
      "Once you enable this feature, a link will be displayed. Share this link with your customers to facilitate their order placement.",

    orders_list: "Orders List",
    active_mode: "Order Receipt Active",
    inactive_mode: "inactive",
    active_message:
      "By activating this source, your customers will be able to place an order for the product through the request form you see below.",
    avocado_form_link_message:
      "Put this link in your bio on Instagram, Telegram or other social media so that your audience can buy faster, easier, and finally more.",
    need_address: "Get Address",
    need_address_msg:
      "If you need to get the location and address of the buyer, select this option.",
    avocado_link_message:
      "It is enough to provide the above link to the customer to pay the order. The customer will be able to follow the order through this link.",
    edit_order: "Edit Order",
    progress: "Progress Rate",
    buyer_link: "Buyer Link",
    buyer_link_message:
      "Provide this link to your buyer. The buyer will be able to pay and track his order through this link. This link is coded, if the link is provided to anyone, he will be able to pay and see the information. This link will be active for 60 days. Click on the link below to copy.",
    OrderConfirm_done: "Order confirmed.",
    OrderConfirm_message:
      "If you confirm the payment and the order is correct, click the button below.",
    OrderConfirm_action: "Order Confirmation",
    PreparingOrder_message:
      "If the customer order is ready to ship, click the OK button below.",
    PreparingOrder_action: "Order is ready to ship",
    finish_message:
      "If this order is completed, hit the end button to close this order.",
    finish_action: "Complete order processing",
    finish_dialog: {
      title: "Complete the order",
      message: "Is the order completed and are you sure you want to close it?",
      action: "Yes, confirm the completion of the order",
    },
    configuration: "Avocado Settings",
    delivery_price: "Shipping Cost",
    edit_avocado_action: "Edit Information",
    submit_pricing_avocado_action: "Submit the order's pricing",
    add_avocado_action: "Create Invoice Link",
    avocados_list: "List of Avocados",
    not_pricing: "This item is not priced!",

    show_all: "Show All",
    show_accepted: "Show Confirmed Items",

    notifications: {
      update_success: "Avocado updated successfully.",
      add_success: "Avocado created successfully.",
    },
  },

  /** {@see BDashboardShopOrdersAvocado} **/
  avocado_orders: {
    title: "Avocado",
    title_small: "Social Media Sales",
    pending_orders: "Active orders",
    avocado: "Order Avocado",
  },
  /** {@see BAvocadoInvoice} **/
  avocado_process: {
    step1: "Pricing",
    step1_msg:
      "Enter the price of each item and check the green box. If it is not possible to sell an item, change its status to rejected.",
    step2: "Confirm invoice",
    step2_msg:
      "Create an invoice for this order. You can enter a title and description for the invoice. The order amount is calculated based on the total price of the items automatically.",
    title_input: "Invoice Title *",
    show_to_customer: "This information is shown to the buyer.",
    description_msg:
      "Do you want to write a note for this order? This information will be shown to the buyer.",
    price_input: "Order amount *",
    tax_none: "Tax-free",
    tax_included: "Included in price",
    tax_add: "Add tax",
    tax_message: "You can choose whether tax is included in the price or not.",
    tax_included_messages: "Tax is included in the price.",
    tax_add_messages: "Tax should be added to the final price.",
  },

  /** {@see BPageProductHyper} **/
  /** {@see BPageShopChannelHyper} **/
  hyper: {
    name: "Hyper",
    print_label:
      "Print the following label and place it in front of the product",
    hyper_form_link_product_message:
      "Your customers will be able to buy {product} quickly through this link. They will also enter the same link by scanning the QR code.",
    title: "Hyper Quick Sale",
    message:
      "With the help of Hyper Selldone sales channel, your customers will be able to buy products by scanning a QR code without any action needed from your side. Use this way to quickly sell some items at festivals, exhibitions, or busy ceremonies in large numbers. After activating Hyper in this section, you can create a hyper QR code for physical products in the Product Management section.",
    orders_list: "Hyper Orders List",
    active_mode: "Hyper Sales Channel Activated",
    inactive_mode: "Inactive",
    active_message:
      "If you enable this option, the possibility of creating the Fast-Sales-Codes will be displayed in the management section of each product.",
    hyper_form_link_message: "Your store's hyper page link",
    configuration: "Hyper Settings",
  },

  /** {@see BDashboardShopOrdersHyper} **/
  hyper_orders: {
    title: "Hyper",
    title_small: "Sales Report",
    hyper: "Received Orders",
  },

  /** {@see BProductInventoryManagementFile} **/
  product_file: {
    no_file: "No file uploaded yet!",
    delete_dialog: {
      title: "Delete file",
      message: "Are you sure to delete this file?",
      action: "Yes, delete now",
    },
    notifications: {
      delete_success: "File deleted successfully.",
    },
  },

  /** {@see NotificationTopBar} **/
  notification_top_bar: {
    free_charge: "🎊 Charge {amount} and get {amount_total} credit.",
    charge_action: "Claiming free credit",
    claim_title: "Claim your free credit",
    claim_charge_caution:
      "Note: It is not possible to convert currencies between your wallet accounts. Therefore, select an account that is appropriate for the currency exchanged in your store.",
    account_input: "Deposit account",
    account_msg: "Charge will be applied to this account",
  },

  /** {@see BDashboardShopApplications} **/
  selldone_applications: {
    title: "Don't miss your orders! ",
    msg: "Manage your business anywhere & anytime.",
    scan_qr_code: "Scan me with your phone!",

    notification: {
      title: "Notification",
      subtitle: "Get new orders notification.",
    },
    order: {
      title: "Orders",
      subtitle: "See your orders and manage them.",
    },
    product: {
      title: "Products",
      subtitle: "Inventory management and product plain.",
    },
  },

  /** {@see BPageShopSettingSeo**/
  shop_seo: {
    title: "SEO Configuration",
    msg: "Fast-forward to online marketing by empowering organic customers acquisition channels.",
    auto: {
      title: "Auto SEO Engine",
      msg: "Provide a seamless mobile experience for the audience and search engines on your website.",
    },

    amp: {
      title: "AMP",
      msg: "Accelerated mobile pages auto generation.",
    },
  },

  /** {@see BPageShopSettingEmail} **/
  shop_preferences: {
    order: {
      title: "Orders",
      desc: "If a customer pays the order, an email containing the order information will be sent to this address.",
    },
    return: {
      title: "Return",
      desc: "If the product is returned by the buyer, this email will be sent. Sending this email depends on your purchased plan.",
    },
    pos: {
      title: "POS",
      desc: "POS sales report will be sent to this email.",
    },
    avocado: {
      title: "Avocado",
      desc: "Send daily report of Avocado orders.",
    },
    accounting: {
      title: "Accounting",
      desc: "Store financial reports and updates.",
    },
    subscription: {
      title: "Subscriptions",
      desc: "Recent purchased plan status alogn with start and end subscription notifications.",
    },
    technical: {
      title: "Technical",
      desc: "Technical notifications about domain and service status.",
    },
    report: {
      title: "Reports",
      desc: "Weekly and monthly reports will be sent to this email",
    },
    review: {
      title: "Review",
      desc: "If you need to confirm a process in the store, the relevant email will be sent to this address. For example to confirm the sending of a marketing email to store users.",
    },
  },

  /** {@see BPageShopSettingLanguages} **/
  shop_languages: {
    title: "Store languages",
    sub_title: "Install and activate store auto-translation packages.",
    message:
      "You can install up to 10 language packs in your store. Contact us if you need to install more packages.",
  },

  /** {@see SInviteFriendsDialog} **/
  invite_friends: {
    title: "Tell about your business to the world and make money!",
    msg: "Refer Selldone to your friends. When they sign up, they'll receive a $99 Company voucher. After they make their first transaction, you'll earn a $15 Startup voucher and receive 5% from all license and transaction fees of new users. For more opportunities, check out our affiliate page.",
    invite: {
      title: "Join Selldone business OS to get a free $99 voucher.",
      description:
        "I invite you to Selldone to start your business online with a fantastic tool.",
      hashtags: "ecommerce,websiteBuilder",
      quot: "I built an online store by Selldone, you can also do your business now.",
    },
  },

  /** {@see BPageShuttleShops} **/
  shops_list: {
    title: "My Shops",
    message:
      "Here is a list of your owned shops, authorized shops, and sample shops. To hide sample shops, navigate to the bottom of the page and select the preferences.",

    sample: {
      title: "Sample Stores",
      subtitle:
        "Here, you can discover a selection of sample stores. You are granted permission to peruse the information available in these stores. However, please refrain from logging in or placing orders using real personal information, as this data will be accessible to the public. If you accidentally enter your information here, kindly exit the store and get in touch with us for further assistance.",
    },

    add_new_store: "Add New Store",
    i_have_a_deal: "I have a deal",
    access: {
      title: "Access Invitation",
    },
  },

  /** {@see BTransportationServiceLabels} **/
  shipping: {
    warehouse_error:
      "Set your warehouse first! This address will be used as the origin of shipping.",
    errors: {
      set_origin: "Set your location map.",
      set_country: "Set your country.",
      set_address: "Set your address.",
      set_zip: "Set your postal code.",
    },
    set_warehouse: "Set warehouse",
    pickup_location: "Pickup location",
    refresh_rates: "Refresh rates",
    no_rate: "No rate...",
    view_messages: "View messages...",
    not_set_yet: "Not set yet!",
    drop_orders_here: "Drop orders here...",
  },

  /** {@see BPageShopBlogsCategories} **/
  blog_category: {
    title: "Blog Categories",
    subtitle:
      "You can create a limited number of categories for your blog posts to manage them more efficiently. Having a category limit promotes better organization on your website. Notably, even the top news agencies maintain a limited number of categories, often fewer than 100, to streamline management and maintain a broader focus.",

    add_action: "Add new category",
    add_dialog: {
      title: "New / Update Category",
      force_edit: "Force edit path",
      force_edit_msg: "Change category name & update all articles.",
      star_msg: "Stared categories have priority to show in the blog.",
      star: "Stared",
      delete_action: "Delete category",
      add_action: "Add Category",
      edit_action: "Edit category",
    },
  },
  /** {@see BPageShopBlogsTimeline} **/
  blog_timeline: {
    title: "Content Release Schedule ",
    subtitle:
      "Here is the list of scheduled articles set for future publication. You have the ability to schedule blog posts and even product descriptions to be published at specific times.",
  },

  /** {@see BPageShopPagesAboutUs} **/
  about_us: {
    title: "About us page",
    subtitle:
      "Write an article about your business to show on the About Us page. This page will help your audience to know your brand and mission.",
  },
  /** {@see BPageShopPagesTerms} **/
  terms: {
    title: "Terms of service page",
    subtitle:
      "Explain the terms of purchase and use of your services for your customers.",
  },
  /** {@see BPageShopPagesPrivacy} **/
  privacy: {
    title: "Privacy policy page",
    subtitle:
      "A privacy policy is a statement or legal document that discloses some or all of the ways a party gathers, uses, discloses, and manages a customer or client's data.",
  },
  /** {@see BPageShopPagesContactUs} **/
  contact_us: {
    title: "Contact us page",
    subtitle:
      "Write your contact information, address, and phone number to be shown to your customers on the contact us page.",
  },

  /** {@see BPageShopApplicationsMetaverse} **/
  metaverse: {
    title: "Metaverse Bridge",
    subtitle:
      "Selldone provides %100 API-based services in the commerce space. Game, blockchain, and metaverse developers can use these powerful APIs to connect businesses, customers, and services in the future of work, life and trade world.",
    message: "Early Access For Game Developers",
  },

  /** {@see BProcessCenterBulkExport} **/
  orders_bulk_export: {
    title: "Orders Assistant",
    subtitle:
      "Export and download labels for bulk order processing - ideal for handling over 100 orders daily.",

    timespan: {
      title: "Time period",
      subtitle: "Choose the start and end dates for placing orders.",
    },
    tasks: {
      title: "Tasks Output",
      subtitle:
        "Download the list of tasks for processing orders in bulk. The result only contains paid and COD orders.",
      export_title: "List of tasks",
    },
    labels: {
      title: "Packages Labels",
      subtitle:
        "Download the list of all orders labels in the selected time period and status. The result only contains paid and COD orders.",
      export_title: "Box labels",
    },
  },

  /** {@see BPageShopMarketingFunnel} **/
  customers_funnel: {
    title: "Customers Demography",
    subtitle:
      "Filter and export your customers data to make better decisions to deliver more value with less marketing! Please respect your customers' privacy and never send mass bulk emails to them! Never share your customers' information with 3rd party services without getting permission from every single of them.",
  },

  /** {@see BPageAffiliatorDashboard} **/
  affiliate_pos: {
    title: "Affiliate POS",
    open_pos_action: "Fast ordering POS",
    description:
      "This option is suitable for admins of Instagram pages and other social networks. Use Affiliate POS to receive and add orders from customers manually. Your affiliates (or franchise) can add new orders in the Affiliate POS and upload the deposit slip.",
  },

  /** {@see BPageShopSettingFlow} **/
  shop_configuration: {
    /** {@see BShopOptionsLoginMethods} **/
    login: {
      title: "Login methods",
      subtitle: "Customize the way users log in to your store.",
    },

    /** {@see BShopOptionsCheckout} **/
    checkout: {
      title: "Checkout flow",
      subtitle:
        "Customize your customer journey and purchase flow in your ecommerce.",
      map: {
        title: "Map",
        subtitle:
          "Users must select the delivery location on the map (like Uber).",
        subtitle_no_map:
          "Distance in shipping calculation considers zero if the location does not exist in customer provided address.",
      },
      mode: {
        title: "Customers login point",
        default: {
          title: "ASAP (Default)",
          msg: "Users log in as soon as possible. (More conversion)",
        },
        on_checkout: {
          title: "On checkout",
          msg: "Force users to log in at the checkout step.",
        },
        login_free: {
          title: "Optional login",
          msg: "Optional login after order payment..",
        },
      },

      express: {
        title: "Redirect after add to cart",

        false: {
          title: "Normal mode",
          msg: "Remain on the page and continue shopping after clicking add to cart.",
        },
        true: {
          title: "Express mode",
          msg: "Redirect customer to the checkout page after clicking add to cart.",
        },
      },

      shipping_address: {
        title: "Ask for shipping address",
      },
    },
  },
  /** {@see CheckoutOptions} **/
  checkout_options: {
    default: {
      title: "Physical & Service (Default)",
      desc: "Ask the customer to enter an address in the physical and service checkouts.",
    },
    physical: {
      title: "Physical Only",
      desc: "Ask the customer to enter an address just in the physical checkout.",
    },
    off: {
      title: "Never",
      desc: "Never ask for the shipping address. ⚠ Use this option if you plan to have services with variants by selecting physical type for products instead of service type.",
    },
  },

  /** {@see BPageShopSettingBusinessModel} **/
  business_model: {
    title: "Business model setup",
    subtitle:
      "Set your business model, and we will configure your OS  behind the scene.",
  },
  business_type: {
    title: "Merchandise types",
    subtitle:
      "Set the type of products you want to sell in your store. Product types in Selldone are more than just a type of the products; it's more about fulfillment procedure.",

    send_activation_request_to_support:
      "Send an activation request in a support ticket.",
    require_kyc: "Business owner KYC.",
    needs_enterprise_license: "You need to have an Enterprise license.",
    marketplace_caution_message:
      "Set Marketplace as your model deeply affects your business OS configuration. For example, you should define at least one vendor for each product with independent pricing and inventory. Customers can not buy products that have no vendor.",
  },

  /** {@see BusinessModelView} **/
  business_model_view: {
    normal: {
      title: "Normal Store",
      desc: "Typically a small or medium-sized enterprise, home business, or dropshipper - selling products directly to customers or reselling products from wholesalers.",
    },

    dropshipping: {
      title: "Dropshipping",
      desc: "Outsource the fulfillment of orders by paying a third party, such as a wholesaler or manufacturer, to handle inventory and product management behind the scenes.",
    },

    wholesaler: {
      title: "Dropshipping Supplier",
      desc: "A wholesaler or manufacturer commonly ships orders directly to the end consumer. Other merchants on Selldone can also sell your products in their stores through the dropshipping model.",
    },
    marketplace: {
      title: "Marketplace",
      desc: "Online marketplaces connect buyers and sellers on a platform that is owned and controlled by a single company.",
    },

    franchise: {
      title: "Franchise / Affiliate",
      desc: "A franchise is a method of distributing products or services involving a franchisor who establishes your brand (Franchising) or sells your products by their brand (Affiliate).",
    },
  },

  /** {@see BPageMarketplace} **/
  marketplace: {
    vendor_wallets: "Wallets",
    pricing_models: "Pricing",
    add_vendor: "Add vendor",
    requests: "Requests",
  },

  price_input_type: {
    title: "Price input type",
    default: {
      title: "Default",
      desc: "Select a value as the quantity in the cart.",
    },
    area: {
      title: "Area",
      desc: "Enter width and length as inputs to calculate the quantity.",
    },
    volume: {
      title: "Volume",
      desc: "Enter width, length, and height as inputs to calculate the quantity.",
    },
    custom: {
      title: "Custom (By input form)",
      desc: "No need for hundreds of variants! Create a custom cost calculation form for highly customizable products.",
    },
  },

  /** {@see BPageShuttleVendors} **/
  vendors_list: {
    title: "My Vendors",
    message:
      "This is a list of your vendor accounts. All vendor accounts associated with shops utilizing the Selldone platform will be displayed here, allowing you to manage them with ease.",
  },

  vendor_page: {},

  /** {@see BDomainsList} **/
  domains: {
    message:
      "Connect multiple domains to your business OS and manage all of them in one place. You can use the multiple domains feature to create dedicated domains for each part of your website, like blog and community, or use different domains for your affiliates.",
  },

  /** {@see BNoteButton}   {@see BNoteDialog} **/
  notes: {
    add_action: "Add a note for your team",
    notifications: {
      success_add: "Note has been added successfully.",
      success_delete: "Note has been deleted successfully.",
    },
  },

  /** {@see BDashboardShopExternalServices} **/
  external_services: {
    title: "External services",
    subtitle:
      "Monitor the last status of the external services like SMS and emails here.",
  },

  /** {@see BPageShopSettingQuota**/
  shop_quota: {
    title: "Usage quota",
    sub_title:
      "This is the usage quota list for your shop. You can increase these limits by upgrading your shop's license. If you exceed the limits, you can request additional daily quota allowances from us. All usage will reset daily.\n",
  },

  /** {@see WidgetAppCard} **/
  app_card: {
    category: "Category",
    installs: "Install",
    actives: "Active",
    uninstalls: "Uninstalls",
    app_code: "App Code",
    app_mode: "Application mode",
  },

  product_status: {
    open: {
      name: "Active",
      title: "Active ╏ Online & Offline Sales",
      description: "This product will be available for online orders.",
    },
    close: {
      name: "Inactive",
      title: "Inactive ╏ Only Offline Sales",
      description: "This product will not be available for online orders.",
    },
    pending: {
      name: "Pending",
      title: "Pending",
      description: "Requires marketplace review before going live.",
    },
    rejected: {
      name: "Rejected",
      title: "Rejected",
      description: "This product was rejected by the marketplace.",
    },
  },

  /**
   * BDashboardShopFeedback
   */
  direct_feedback: {
    title: "Send Direct Request",
    message:
      "Identify your top 3 business needs to thrive and profit on Selldone. This information will be shared directly with founders and directors and will be considered carefully. You can also update your needs over time after submission.",
    expand_action: "Write the request...",
    input_label: "Your Request",
    to: {
      ceo: "Send to CEO",
      team: "Send to Team",
    },
    placeholder: {
      ceo: "Absolutely no need to be nice, I like to hear your direct, right-to-the-point ask.\ne.g. I need to have...",
      team: "Please try to be nice to them.\ne.g. I need to have...",
    },
  },

  /**
   * BInventoryFilter
   */
  inventory_filter: {
    placeholder: "Select Filter *.*",
  },
  /**
   * BVendorInput
   */
  vendor_input: {
    placeholder: "Filter vendor...",
  },

  /**
   * BShopProductsImportProcessing
   */
  product_import_processing: {
    title: "Processing imported products",
    message:
      "We are in the process of importing products and images, which may take some time to complete.",
  },

  /**
   * BOrderInput
   */
  order_input: {
    message:
      "The information displayed here has been submitted by the customer, in accordance with the product input form structure.",
  },

  /**
   * BPageConnectDashboard
   */
  shop_connect: {
    test: {
      title: "Setup",
      subtitle: "External service report",
      action: "Test connection",
      last_update: "Last updated by",
    },
    service_status: {
      title: "Service status",
      syncing_message: "On syncing process...",
      action: "Sync all",
      connect_status: "Connect status",
      service_status: "Service status",
      auto_confirm_enable_msg: "Auto-confirmation for orders is enabled.",
      auto_confirm_disable_msg:
        "Automatic confirmation of orders is not enabled.",
      shipping_enable_msg:
        "The shipping cost will be calculated based on the information provided at checkout.",
    },
    detail: {
      title: "Connect detail",
      auto_confirm_order: "Auto confirm orders",
      test_mode: "Test mode",
      status: {
        subtitle: "Overall information about sync status.",
      },
      sync: {
        title: "Sync detail",
        subtitle:
          "Internal sync details. This information is saved after a sync process epoch successfully ends.",
        no_data: "No sync information!",
      },
    },

    products: {
      title: "Products",
      subtitle:
        "List of added products from {name}. Make sure your product has a unique name and SKU. Some Connect services are used for migration, so if you have products with duplicate <b>SKUs</b> and <b>Names</b>, those products will be changed!",
      action: "Fetch products",
      syncing_message: "On syncing process...",
    },

    logs: {
      title: "Logs",
      subtitle:
        "The list of all logs in the last 7 days. Logging feature supported only on external service providers.",
    },

    edit: {
      title: "Add new Connect",

      service: {
        title: "Service",
        subtitle:
          "Select target platform, dropshipping supplier, or marketplace to connect.",
      },
      test: {
        false_title: "Sync all",
        false_desc: "Get all available products, categories, customers.",
        true_title: "Limited (Recommended for beginners)",
        true_desc:
          "Get max 5 products, categories, and customers. You can turn it to full mode in the Connect > Setting at any time.",
      },
      overwrite: {
        false_title: "Do not change if exist",
        false_desc: "Retain existing product and category details as they are.",
        true_title: "Overwrite",
        true_desc:
          "Update existing product, variant, and category information.",
      },
      migration_tips:
        "<b>Tips: </b>If you want to test the functionality please select\n" +
        "            <b>Limited</b> option. By selecting 'Sync all', we get all data from your connected services and download related images, so it will reduce your free storage. Also, removing many products, categories, and customers would be hard!",
      add_action: "Auto connect to",
      order: {
        title: "Ordering Status",
        subtitle:
          "Configure the connected service's order management settings for your store. This includes setting up order acceptance, enabling automatic order confirmation (if supported), and configuring shipping cost calculations.",
      },
      enable: {
        label: "Connect status",
        true_desc: "Inventory and orders will be synced.",
      },
      confirm: {
        label: "Auto confirm orders",
        false_desc: "You should confirm order manually.",
        true_desc:
          "Orders with live payment will be automatically approved. Orders with debug payment will not approve automatically. ",
        tips: "Orders paid by gift card or COD or payment gateways in the debug mode are exceptions and will not be confirmed automatically.",
      },

      shipping: {
        label: "Shipping",
        tips: "This service offers shipping calculation, which can be enabled or disabled as per your preference. If enabled, cost calculation APIs with 3rd party services will be required, which may cause a delay of over 300ms for updating the price on the checkout page.",
        false_title: "Disable",
        false_desc:
          "Use my shipping cost calculation, in Shop > Logistic > Transportation for all products, including imported ones.",
        true_title: "Calculate shipping",
        true_desc:
          "Employ the shipping rate calculation API offered by this service.",
      },

      remove: {
        verify: "I verify to remove this connection.",
        action: "Remove connect",
      },
    },

    /**
     * BPageShopChannelConnect
     */
    list: {
      title: "Connect OS",
      subtitle:
        "Connect your business os to external services and manage all channels in the same place.",
      action: "Connect new services",
      empty_message:
        "Forget apps and plugins for dropshipping! Connect is the future of cross-platform order management.",
      auto_confirm: "Auto Confirm",
      shipping: "Shipping",
      syncing_now: "Syncing now!",
      sync_not_started: "Sync has not started yet!",
    },
  },

  /**
   * ConnectMode
   */
  connect_mode: {
    Migration: {
      title: "Migration",
      desc: "Get products, categories, and customers. After the user deletes this service, the received products, categories, and customers will not be deleted.",
    },
    Dropshipping: {
      title: "Dropshipping",
      desc: "Get products, categories, and orders. The system removes products after the user removes the service.",
    },
    Marketplace: {
      title: "Marketplace",
      desc: "Just sync inventory and receive orders (Products will be linked by SKU).",
    },
    Accounting: {
      title: "Accounting",
      desc: "Send orders and financial information.",
    },
    Other: {
      title: "Other",
      desc: "Other services.",
    },
  },

  /**
   * BPageShopPagesLandings
   */
  shop_landings: {
    title: "Landing pages",
    add_new_action: "Add New Page",
    subtitle:
      "Create distinctive, responsive custom pages for your brand using a versatile AI-powered inline editor, and automatically generate dynamic content by feeding in data.",
    empty_message: "Design custom pages by drag & drop...",
  },

  /**
   * BPageShopPermissionStaff
   */
  shop_staff: {
    list: {
      title: "Staff management ",
      subtitle:
        "Users granted access to the dashboard and administrative sections of this store.",
    },
    pending: {
      title: "Pending",
      message: "Show pending invitations.",
    },
  },

  /**
   * BPageShopCommunityComments
   */
  community_comments: {
    title: "Comments",
    subtitle: "This is a list of the community's comments.",
    empty_msg: "No comments have been created so far...",
  },

  /**
   * BPageShopCommunityCategories
   */
  community_categories: {
    title: "Categories",
    subtitle: "This is a list of the community's categories.",
    new_category_action: "New Category",
    empty_msg: "No categories have been created so far...",
    filter: {
      delete: {
        title: "Deleted",
        description: "Show deleted categories.",
      },
    },
  },
  /**
   * BPageShopCommunityPosts
   */
  community_posts: {
    title: "Posts",
    subtitle: "This is a list of the community's posts.",
    filter: {
      deleted: {
        title: "Deleted",
        description: "Show deleted posts.",
      },
      reported: {
        title: "Reported",
        description: "Show reported posts.",
      },
    },
    empty_msg: "No posts have been created so far...",
    menu: {
      open_post: {
        title: "Open Post",
        subtitle: "View and edit post in the community.",
      },
      spam: {
        title: "Report & Remove Spams",
        subtitle: "Bulk remove posts and ban user.",
      },
      delete: {
        title: "Delete Post",
        subtitle: "Remove this post.",
      },
    },
  },

  /**
   * {@see BGoogleTagManager}
   */
  channel_google: {
    gtag: {
      title: "Tag Manager",
      subtitle:
        "Google Analytics enables measurement of ad ROI while tracking Flash, video, and social media sites and apps. Manage website tags effortlessly with Google Tag Manager's free, simple, and reliable solutions—no code editing required.",
      tag_id: {
        label: "Google Tag Manger ID",
      },
    },
    shopping: {
      title: "Google Shopping",
      subtitle:
        "Data Sources indicate the origins of your catalog information on Google. Follow this link to automatically add all products and categories to Google merchandise.",
      tips: "You can utilize this tool to effortlessly and automatically manage Google ads.",
      link_message: "Google Products Feed URL",
    },
    console: {
      title: "Search Console",
      subtitle: `Add a meta tag to your homepage for Google Search Console verification.`,
      code: {
        label: "Verification meta tag",
        placeholder: "From google, e.g. viQg9mjdBj...",
      },
    },
    serp: {
      title: "Google SERP & Keywords",
      subtitle:
        "We obtain the most precise SEO audit data from Google and present it to you in a convenient manner. Simply follow the steps provided.",
    },
    serp_content: {
      title: "Connect to Google Search Console",
      subtitle:
        "Connect your shop to the search console and start exploring keywords, ranks, and other free SEO tools on Selldone.",
      tips: {
        title:
          "Prior to linking Selldone with Google Search Console, ensure the following:",
        add_in_selldone: "Add, verify, and set as primary your Custom Domain.",
        add_in_google: `Add and verify <b>{domain}</b> in your<a href="https://search.google.com/search-console" target="_blank"> <b>Google Search Console</b></a>.`,
      },
      action_custom_domain: "Custom Domain",
      action_connect_now: "Connect Now",
      action_remove_connection: "Remove connection",
    },
  },

  /**
   * AUto fill suggestions
   */
  suggestions: {
    /**
     * Vendor Payment
     */
    vendor_payment: {
      note: [
        "Payment for sales fulfilled",
        "Vendor Commission Disbursement.",
        "Transaction Completed Successfully.",
        "Remittance for Recent Sales.",
        "Successful Transfer for Vendor Services.",
      ],
      /**
       * Reverse fund
       */
      reverse_fund_reason: [
        "Return of Funds: Transfer from bank to vendor's wallet.",
        "Vendor Wallet Refill: Reversing funds from bank account.",
        "Reverse Transaction: Bank to vendor wallet fund transfer.",
        "Refund: Bank deposit reversal to vendor's wallet.",
        "Funds Reversal: Replenishment of vendor's wallet from bank.",
      ],
    },

    /**
     * Email Marketing
     */
    shop_email: {
      name: [
        "Super Savings Weekend Blast",
        "Exclusive Insider Deals Unveiled",
        "Your VIP Access to Premium Discounts",
        "Seasonal Sale Extravaganza",
        "Unlock Your Shopping Paradise",
        "The Grand Shopper's Carnival",
        "Spring Fling Shopping Spree",
        "Autumn Deals You Can't Resist",
        "Winter Wonders: Warm Deals for Cold Days",
        "End-of-Summer Clearance Countdown",
        "Black Friday Bonanza: Early Bird Access",
        "Hello Holidays: Your Gift Guide and More",
        "Fresh Finds: New Arrivals Just for You",
        "Loyalty Rewarded: Exclusive Discounts Inside",
      ],
      subject: [
        "⏰ Limited Time Offer! Grab Your Favorites Now",
        "🌼 New Season, New Styles - Explore Our Latest Collection",
        "👑 Exclusive VIP Sale Just for You",
        "💃 Turn Heads with Our New Arrivals",
        "🔚 Last Chance to Enjoy 20% Off Everything",
        "🎁 A Gift for You: $10 Credit Inside!",
        "☀️ Get Ready for Summer with Our Hot Deals",
        "🛍️ Upgrade Your Wardrobe - You Deserve It",
        "👀 Sneak Peek: New Products Coming Soon!",
        "🎂 Happy Birthday! Your Special Gift Awaits",
        "🖤 Are You Ready for Black Friday Deals?",
        "🎯 Top Picks Just for You - Personalized Shopping Experience",
        "🍹 Time to Treat Yourself - Weekend Flash Sale!",
        "🧹 End of Season Clearance - Everything Must Go!",
        "🚀 You've Earned It! Free Shipping on Your Next Order",
        "📢 Don't Miss Out - Your Wishlist Items are On Sale Now",
        "🏡 Bring Joy to Your Home with Our Home Decor Collection",
        "🎉 A Surprise Just for You! Unwrap Your Mystery Discount",
      ],
    },

    /**
     * Discount code
     */
    discount_code: {
      code: [
        "WELCOME10",
        "SUMMER20",
        "VIPSALE30",
        "BDAY15",
        "BLACKFRIDAY",
        "CYBERMONDAY",
        "FREESHIPPING",
        "FLASHSALE",
        "CLEARANCE",
        "EARLYBIRD",
        "STUDENT10",
        "WINTER25",
        "SPRING15",
        "FALL20",
        "BESTSELLER10",
        "HOLIDAY30",
        "VALENTINE20",
        "MOTHERSDAY",
        "FATHERSDAY",
        "ENDOFYEAR",
      ],
      title: [
        "Flash Sale: 20% Off!",
        "VIP Early Access Discount",
        "Weekend Deal: Save Now!",
        "Enjoy 15% Off Today",
        "Summer Sale: Extra 10% Off",
        "Clearance Sale! Save Big",
        "Special Offer: Free Shipping",
        "2-for-1: Today Only!",
        "Holiday Special: 25% Off",
        "Exclusive 30% Discount",
        "Surprise! Extra 20% Off",
        "Seasonal Savings Inside",
        "Midweek Madness: 10% Off",
        "Ends Soon: 15% Off Everything",
        "Family & Friends: 20% Off",
        "Big Savings This Weekend",
        "Black Friday: 40% Off",
        "Sneak Peek Discount: 30% Off",
      ],
      description: [
        "Claim your special offer! Limited time only.",
        "Hurry! Exclusive savings await in your cart.",
        "Big savings are just a click away!",
        "Take advantage of this deal before it's gone.",
        "Special discount waiting! Don't miss out.",
        "Boost your shopping spirit with our offer!",
        "Your next order could be less than you think!",
        "It's the perfect time to grab that item you wanted.",
        "A little something to make your day brighter.",
        "Ready to save? A surprise discount is waiting!",
        "Because you're special, here's a special deal.",
        "Got your eye on something? Here's a nudge!",
        "There's no time like the present to save.",
        "Don't miss this deal! It's too good to pass up.",
        "Great news! Your shopping just got cheaper.",
        "Hurry, your exclusive discount ends soon!",
        "Here's a little thank you for your loyalty.",
      ],
    },
    /**
     * Coupon
     */
    coupon: {
      title: [
        "Savings Unleashed",
        "Unlock the Discount",
        "Super Savings",
        "Exclusive Deal",
        "Bonus Savings",
        "VIP Discount",
        "Special Offer",
        "Extra Savings",
        "Discount Alert",
        "Budget Bliss",
        "Economy Delight",
        "Value Bonanza",
        "Price Cut",
        "Happy Savings",
        "Save More, Shop More",
        "Flash Deal",
        "Bargain Bounty",
        "Instant Savings",
        "Deal of the Day",
        "Seasonal Steal",
      ],
      description: [
        "Enjoy a sweet deal on us! Save on your next purchase.",
        "We value our customers - take advantage of this exclusive offer.",
        "Get more of what you love for less. Discount on us!",
        "Ready to save? An exclusive offer awaits!",
        "Because you're special! Enjoy a discount on your next order.",
        "Treat yourself to a shopping spree and save!",
        "Get ready to shop till you drop - and save!",
        "Celebrate the season with a special discount.",
        "We're thanking our loyal customers with an exclusive discount.",
        "Unlock incredible savings on your next purchase.",
        "Take a peek at your exclusive savings.",
        "Discover your surprise discount on us!",
        "Upgrade your shopping experience with our exclusive offer.",
        "Jumpstart your savings with our special offer.",
        "Indulge yourself with a little something extra - a special discount.",
        "Your next shopping adventure just got more affordable!",
        "Because shopping is more fun with a discount.",
      ],
    },

    /**
     * Offer
     */
    offer: {
      title: [
        "Bundle & Save Big!",
        "Buy More, Save More!",
        "Smart Deals for Smart Shoppers",
        "Discount Alert! Bundle Savings",
        "Combo Offer - More for Less",
        "Exclusive Savings on Bundles",
        "Get More for Your Money!",
        "Save When You Bundle",
        "Special Deals on Combos",
        "Huge Savings in Store!",
        "Best Value Bundles",
        "Limited Time Bundle Deals",
        "Big Discounts on Combos",
        "Smart Savings on Select Items",
        "Unbeatable Deals on Bundles",
        "Multi-Buy Discounts Available",
        "Double Up for Less Now",
        "Bulk Buys = Big Savings",
      ],

      description: [
        "Score big savings when you bundle select products. Hurry, limited time offer!",
        "Smart deals await! Save more when buying our highlighted items together.",
        "Discover the smart way to save! Bundle your favorites and watch the price drop.",
        "Enjoy exclusive discounts when purchasing selected items in combo. Act now!",
        "Buy more, save more! Unbeatable discounts on our special product bundles.",
        "Shop smart with our special offers. Discounted prices on select product bundles.",
        "Get more for less! Amazing discounts when you purchase our selected bundles.",
        "Save big when you bundle! Exclusive deals on select items for a limited time.",
        "Combine and save! Exclusive discounts when you buy our selected products together.",
        "The more you buy, the more you save! Get smart with our special bundles.",
      ],
    },

    /**
     * Gift card type
     */
    gift_card_type: {
      title: [
        "Treat Yourself!",
        "Just for You!",
        "Happy Shopping!",
        "Enjoy on Us!",
        "Indulge a Little",
        "Because You're Special",
        "A Little Surprise",
        "Make Your Day",
        "Here's to You",
        "Spread the Joy",
        "A Gift of Love",
        "Shop with Delight",
        "A Token of Thanks",
        "Time to Splurge",
        "Savor the Moment",
        "Find Your Favorites",
        "The Choice is Yours",
        "Express Yourself",
        "Discover the Magic",
        "Unleash Your Style",
      ],
    },

    /**
     * Refund vendor order
     */
    vendor_refund_order: {
      note: [
        "Funds have been deducted from your virtual wallet and returned to the marketplace wallet.",
        "A refund has been issued, reducing your virtual wallet balance.",
        "Refund completed. The marketplace wallet has been replenished from your virtual wallet.",
        "Your virtual wallet has been debited for a recent refund to the marketplace wallet.",
        "Your virtual wallet funds have been adjusted due to a recent refund.",
        "A refund has been conducted, deducting the amount from your virtual wallet.",
        "Your virtual wallet balance has been decreased due to a refund to the marketplace wallet.",
        "A refund transaction has taken place, moving funds from your virtual wallet back to the marketplace.",
      ],
    },

    /**
     * Product
     */
    product: {
      warranty: [
        "24-Month Gold Guarantee",
        "Platinum Protection for Two Years",
        "Diamond Assurance for 36 Months",
        "Silver Shield: One-Year Warranty",
        "2-Year Elite Assurance",
        "Premium Protection for 24 Months",
        "Bronze Backup: One-Year Warranty",
        "3-Year Ultimate Uptime Guarantee",
        "24-Month Secure Service Promise",
        "36-Month Peace of Mind Protection",
      ],
      pros_name: [
        "Efficiency Enhanced",
        "Cost-Effective Solution",
        "Quality Assured",
        "User-Friendly",
        "Time-Saver",
        "Reliability Guaranteed",
        "Versatile Use",
        "Cutting-Edge Technology",
        "Environmentally Friendly",
        "Exceptional Performance",
      ],

      pros_value: [
        "Saves significant time with quick and efficient operations.",
        "Uses advanced technology for unmatched performance.",
        "Reduces costs and boosts productivity.",
        "Offers a user-friendly interface for easy navigation.",
        "Guarantees reliable and consistent performance.",
        "Provides versatile applications across various tasks.",
        "Utilizes environmentally friendly materials and processes.",
        "Designed with cutting-edge technology for superior results.",
        "High-quality design ensures long-lasting durability.",
        "Offers round-the-clock customer support.",
      ],

      cons_name: [
        "Pricey Investment",
        "Limited Compatibility",
        "Complex Setup",
        "Requires Training",
        "Subpar Performance",
        "Lacks Versatility",
        "Limited Support",
        "Frequent Maintenance",
        "High Energy Consumption",
        "Short Lifespan",
      ],

      cons_value: [
        "Higher initial investment compared to alternatives.",
        "May not be compatible with all systems or devices.",
        "Set-up process can be quite complicated.",
        "Additional training may be necessary for use.",
        "Performance may not meet all expectations.",
        "Limited in functionality or lacks versatility.",
        "Customer support may not be available round-the-clock.",
        "Frequent maintenance required, leading to higher costs.",
        "Consumes high amounts of energy, impacting utility costs.",
        "Product lifespan may not be as long as expected.",
      ],
    },

    /**
     * Blog Category
     */
    blog_category: {
      category: [
        "Tech Insights",
        "Foodie Finds",
        "Travel Tales",
        "Health Tips",
        "Fashion Faves",
        "Business Buzz",
        "Lifestyle Stories",
        "Sports Updates",
        "Art Highlights",
        "Parenting Pointers",
      ],
      description: [
        "Discover insightful articles on various topics.",
        "Explore our collection of informative blog posts.",
        "Stay informed with our engaging blog category content.",
        "Find inspiration through our thought-provoking blog category articles.",
        "Expand your knowledge with our diverse blog category topics.",
        "Stay up-to-date with our captivating blog category insights.",
        "Delve into the depths of our intriguing blog category content.",
        "Uncover valuable information within our blog category archives.",
        "Learn something new from our carefully curated blog category.",
        "Engage with our enriching blog category articles and posts.",
      ],
    },

    /**
     * Partner Plan
     */
    partner_plan: {
      name: [
        "Starter Pack",
        "Essential Plan",
        "Professional Suite",
        "Enterprise Edition",
        "Advanced Tier",
        "Premium Package",
        "Ultimate Solution",
        "Elite Level",
        "Growth Accelerator",
        "Platinum Power",
      ],
    },

    /**
     * Tax Profile
     */
    tax_profile: {
      name: [
        "Foods",
        "Electronic Devices",
        "Clothing & Apparel",
        "Books & Stationery",
        "Health & Beauty Products",
        "Furniture",
        "Sporting Goods",
        "Toys & Games",
        "Jewelry & Accessories",
        "Automotive Parts",
        "Garden & Outdoors",
        "Kitchenware",
        "Home Decor",
        "Musical Instruments",
        "Pet Supplies",
        "Footwear",
        "Bags & Luggage",
        "Office Supplies",
        "Hardware Tools",
        "Groceries",
      ],

      label: [
        "VAT", // Value-Added Tax
        "GST", // Goods and Services Tax
        "PST", // Provincial Sales Tax
        "HST", // Harmonized Sales Tax
        "QST", // Quebec Sales Tax
        "CST", // Central Sales Tax
        "ExciseTax", // Excise Tax
        "ImportDuty", // Import Duty
        "ServiceTax", // Service Tax
        "LuxuryTax", // Luxury Tax
      ],
    },
    /**
     * Cluster
     */
    cluster: {
      name: [
        "Sale Highlights",
        "Promo Codes",
        "Featured Campaigns",
        "New Arrivals",
        "Best Sellers",
        "Seasonal Specials",
        "Limited Offers",
        "Event Deals",
        "VIP Exclusives",
        "Clearance Items",
        "Holiday Bundles",
        "Theme Collections",
        "Brand Showcases",
        "Member Favorites",
        "Flash Discounts",
        "Shop Essentials",
        "Digital Resources",
        "Gift Ideas",
        "Eco-friendly Picks",
        "Staff Recommendations",
      ],
    },

    /**
     * Popup
     */
    popup: {
      title: [
        "Special Offer!",
        "New Arrivals",
        "Limited Time",
        "Discount Alert!",
        "Exclusive Deals",
        "Hot Sale!",
        "Clearance Alert",
        "Free Shipping",
        "Gift Inside!",
        "Win Prizes",
        "Member Perks",
        "Flash Sale",
      ],
    },

    /**
     * Campaign
     */
    campaign: {
      name: [
        "Shop 'Til You Drop",
        "Cart Frenzy",
        "Flash Sale Fiesta",
        "Click, Shop, Save",
        "Bargain Bonanza",
        "E-Deal Extravaganza",
        "Mega Markdown Madness",
        "Cyber Savings Spree",
        "Digital Discount Days",
        "E-Commerce Carnival",
        "Online Outlet Oasis",
        "Retail Rush",
        "Webstore Warehouse Sale",
        "E-Shopper's Paradise",
        "Virtual Voucher Venture",
        "Digital Doorbusters",
        "E-Cart Clearance",
        "Online Shopping Showdown",
        "Cyber Sale Spectacular",
        "E-Bargain Blitz",
      ],
    },

    /**
     * Valuation
     */
    valuation: {
      title: [
        "T-Shirt Customization Pricing",
        "Handmade Jewelry Valuation",
        "Personalized Shoe Pricing",
        "Custom Artwork Valuation",
        "Tailored Suit Pricing",
        "Electronic Gadgets Customization Cost",
        "Personalized Perfume Valuation",
        "Custom Bag Pricing",
        "Tailored Dress Valuation",
        "Personalized Book Cover Pricing",
        "Custom Furniture Valuation",
        "Bespoke Watch Pricing",
        "Personalized Toy Valuation",
        "Tailored Hat Pricing",
        "Custom Skincare Product Valuation",
        "Bespoke Home Decor Pricing",
        "Customized Kitchenware Valuation",
        "Personalized Stationery Pricing",
        "Bespoke Hair Accessory Valuation",
        "Custom Sports Equipment Pricing",
      ],
      structure: {
        title: [
          "T-shirt Print Design",
          "Jewelry Metal Type",
          "Shoe Material Choice",
          "Art Frame Size",
          "Suit Fabric Selection",
          "Gadget Color Option",
          "Perfume Scent Profile",
          "Bag Material and Size",
          "Dress Length and Style",
          "Book Cover Material",
          "Furniture Wood Type",
          "Watch Strap Material",
          "Toy Custom Features",
          "Hat Size and Color",
          "Skincare Ingredient Preferences",
          "Home Decor Theme",
          "Kitchenware Material",
          "Stationery Paper Type",
          "Hair Accessory Material",
          "Sports Equipment Size",
        ],
      },
    },

    /**
     * Lottery
     */
    lottery: {
      title: [
        "Spin & Win Big Prizes!",
        "Fortune Wheel Jackpot",
        "Lucky Spin Bonanza",
        "Spin to Win Rewards",
        "Wheel of Wealth",
        "Lucky Lottery Extravaganza",
        "Mega Spin Surprise",
        "Prize Wheel Fiesta",
        "Treasure Spin Spectacular",
        "Spin the Wheel Magic",
        "Lucky Wheel Galore",
        "Fortune's Favor",
        "Wheel of Wonders",
        "Spin for Riches",
        "Prize Spinner Delight",
        "Golden Spin Lottery",
        "Spin-a-Prize",
        "Wheel of Fortunes",
        "Lucky Spin Showcase",
        "Ultimate Spin Reward",
      ],
      description: [
        "Spin the wheel for a chance to win exclusive discounts!",
        "Try your luck – amazing prizes await in our fortune wheel!",
        "Win big with each spin – exciting rewards up for grabs!",
        "Spin to win! Surprise gifts and offers on every turn.",
        "Your chance to score big – spin the wheel for instant prizes!",
        "Exclusive rewards with every spin – will you be the lucky one?",
        "Spin and win! Uncover hidden gems in our shop's wheel of fortune.",
        "Get lucky with our wheel – prizes, discounts, and more!",
        "Every spin's a win – grab your special prize today!",
        "Turn the wheel for a delightful surprise – what will you win?",
        "Unleash fortune with a spin – exciting shop rewards await.",
        "Spin to reveal your prize – discounts, gifts, and more!",
        "A spin a day keeps the excitement in play – win unique prizes!",
        "Spin our wheel of fortune for exclusive shop treats.",
        "Lucky spins bring lucky wins – get your prize now!",
        "Your spin could unlock amazing shopping rewards!",
        "Spin for a chance to bag exclusive deals and offers.",
        "The wheel of fortune is spinning – catch your lucky prize!",
        "Spin, win, and smile – surprise rewards with every turn.",
        "Take a spin and let the fortune decide your prize!",
      ],
    },

    /**
     * Subscription Price
     */
    subscription_price: {
      title: [
        "Basic Access",
        "Premium Membership",
        "Gold Package",
        "Silver Plan",
        "Platinum Subscription",
        "Enterprise Tier",
        "Starter Bundle",
        "Unlimited Offer",
        "Family Pack",
        "Professional Suite",
      ],
      description: [
        "Ideal for individuals exploring the basics.",
        "Access to all premium features and content.",
        "Exclusive benefits and priority support.",
        "A balanced package for regular users.",
        "Ultimate access with top-tier perks.",
        "Custom solutions for large organizations.",
        "An affordable entry-level option.",
        "No limits on usage, for the power user.",
        "A special plan for families, up to 4 members.",
        "Designed for professionals seeking advanced tools.",
      ],
    },

    spec: {
      group: [
        "Technical Specifications",
        "Physical Dimensions",
        "Performance Features",
        "Connectivity Options",
        "Power Requirements",
        "Material and Build Quality",
        "Color and Finish Options",
        "Storage and Memory",
        "Operating System Compatibility",
        "Safety and Compliance",
        "Package Contents",
        "Warranty and Support",
        "Brand and Manufacturer",
        "Environmental Friendliness",
        "Energy Efficiency",
        "Care and Maintenance",
        "Customization Options",
        "Included Accessories",
        "User Ratings and Reviews",
        "Pricing and Availability",
      ],
    },

    avocado: {
      title: [
        "Purchase Receipt",
        "Sale Confirmation",
        "Order Invoice",
        "Payment Invoice",
        "Customer Receipt",
        "Transaction Summary",
        "Billing Statement",
        "Checkout Receipt",
        "Order Summary",
        "Purchase Order Invoice",
        "Sales Receipt",
        "Retail Invoice",
        "E-Receipt",
        "Service Invoice",
        "Product Invoice",
        "Payment Receipt",
        "Order Confirmation",
        "Billing Invoice",
        "Checkout Invoice",
        "Customer Invoice",
      ],
      message: [
        "Thank you for your purchase!",
        "We appreciate your business.",
        "Your order is on its way!",
        "Thanks for shopping with us.",
        "Looking forward to serving you again.",
        "Your satisfaction is our top priority.",
        "Don't forget to rate your experience.",
        "Thank you for supporting our store.",
        "We hope you enjoy your new purchase!",
        "Save your invoice for future reference.",
        "Visit us again for more great products.",
        "Stay connected for exclusive offers.",
        "Thank you for being a valued customer.",
        "We're here to help if you need assistance.",
        "Your feedback helps us improve.",
        "Enjoy a special discount on your next purchase.",
        "You've made a great choice!",
        "Thank you for your trust in us.",
        "Looking forward to your feedback.",
        "A heartfelt thank you from our team.",
      ],
    },

    /**
     * Map Tag
     */
    map_tag: {
      title: [
        "Property Showcase",
        "Vendor Plaza",
        "Featured Homes",
        "Local Market",
        "New Arrivals",
        "Estate Gardens",
        "Shopping District",
        "Artisan Alley",
        "Luxury Estates",
        "Rental Hub",
        "Open Houses",
        "Tech Innovations",
        "Fashion Lane",
        "Crafts Corner",
        "Food Court",
        "Book Nook",
        "Jewelry Junction",
        "Antique Avenue",
        "Fitness Zone",
      ],
    },

    /**
     * Marketplace Documents (For vendors)
     */
    marketplace_document: {
      title: [
        "Business Registration Certificate",
        "Tax Identification Number (TIN)",
        "Vendor Agreement Form",
        "Product Catalog",
        "Pricing List",
        "Bank Account Details",
        "Proof of Address",
        "Insurance Certificate",
        "Company Profile",
        "Quality Assurance Certificate",
        "Safety Data Sheet (SDS)",
        "Product Warranty Information",
        "Return Policy",
        "Shipping and Handling Procedures",
        "Customer Service Policy",
        "Marketing and Promotion Plans",
        "Social Media Links",
        "Trade References",
        "Supplier Code of Conduct",
        "Non-Disclosure Agreement (NDA)",
      ],
    },
  },
};
