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

import {ShopMarketplaceModes} from "@selldone/core-js/models/shop/shop.model.ts";
import VendorDocumentType from "@selldone/core-js/enums/vendor/VendorDocumentType.ts";

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
    make_money_affiliate: "Make Money",
  },

  numbers: {
    infinite: "Unlimited",
  },

  error: {
    not_fount_data: "Data not found!",
    license_max_limit: "Your license reached the limit!",
    no_read_access: "No read access",
    no_write_access: "No write access",
    no_access: "No access",
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
    dark_mode: "Dark Mode",
    dark_mode_description:
      "Choose this option if you desire a dark background with white text color.",
    light_mode: "Light Mode",
    light_mode_description:
      "Choose this option if you wish for the background to be light and the text to be in black color.",
  },

  ai: {
    remove_bg: {
      title: "Remove Background",
      subtitle: "Create transparent background.",
    },
    reimagine: {
      title: "Reimagine",
      subtitle: "Create more images with new backgrounds.",
    },
    upscale: {
      title: "Upscale",
      subtitle: "Increase the resolution of the image.",
    },
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
      /** {@see BDashboardShopChannels} **/

      channels: {
        title: "Acquisition Channels",
        subtitle:
          "Your business is growing. Here is the report of your customer acquisition channels.",
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

      products_rss: {
        title: "Products RSS",
        subtitle: "Importing products into Google, Meta, ...",
      },
      products_api: {
        title: "Products API",
        subtitle: "Importing products via a publicly accessible API call.",
      },
      google_sheet: {
        action: "Linked Sheet",
        tooltip:
          "The products in this shop are linked to a Google Sheet in Google Drive.",
      },
      show_deletes: {
        false_title: "Hide deleted",
        true_title: "Show deleted",
      },
      show_vendors: {
        false_title: "Hide vendors",
        false_description: "Show all vendors, ⌘Ctrl+1",
        true_title: "Show vendors",
      },

      show_notes: {
        false_title: "Hide notes",
        false_description: "Show all notes, ⌘Ctrl+2",
        true_title: "Show notes",
      },

      rss_dialog: {
        title: "Products RSS",
        subtitle:
          "Utilize this RSS feed to maintain an up-to-date list of all products.",
      },
      api_dialog: {
        title: "Products API",
        subtitle:
          "Use this API feed to keep your product list up-to-date. It provides a publicly accessible API to fetch products from your store, making it ideal for product listing and comparison websites.",
      },

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
        customer_wallets: "Customer Wallets",
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
          rate_input: "Exchange Rate",
          from: "From",
          to: "To",
          exchange_rate: "Exchange Rate",
          edit: "Edit",
          delete: "Delete",
          auto: "Auto rate",
        },
        add_rate_dialog: {
          title: "Set Exchange Rate",
          message:
            "Be careful in entering information. The prices of your products will be calculated based on the rates entered here. ",
          currency_from: "From Currency",
          currency_to: "To Currency",
          exchange_rate: "Exchange Rate",
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
      restriction: {
        title: "Shipping restriction",
        subtitle:
          "You can implement restrictions to ensure that only customers within the designated shipping areas can make purchases from you!",
        no_enable_shipping_error:
          "No one can buy from you because you have no enabled shipping method!",
        customer_must_select_a_shipping_msg:
          "Customer must select a shipping method to place order.",
        customer_can_order_without_shipping_method_msg:
          "Customer can place the order even if no shipping method supported for the selected location.",
        inputs: {
          restriction: {
            false_description:
              "Customers can still place orders even if no specific shipping method has been selected.",
            false_title: "Accept all orders",
            true_title: "Restricted accept order",
            true_description:
              "Customers are required to choose either a shipping or pickup option in order to complete their purchase.",
          },
        },
      },

      warehouse_btn: "Add new warehouse",
      warehouse_btn_error:
        "Set your warehouse, store, or origin of your business. It's vital to have in the shipping cost calculation and checkout process.",
      no_multi_warehouse_support_message:
        "For simplicity, this feature is not available in normal stores.",
      size_unit: {
        title: "Size unit",
        subtitle: "The unit used for length, width and height.",
      },
      mass_unit: {
        title: "Mass unit",
        subtitle: "The unit used for weight.",
      },
      distance_unit: {
        title: "Distance unit",
        subtitle: "The unit used for distance.",
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
    menu_extra: {
      description: "Description",
      form: "Form",
      no_spec: "No spec",
      has_spec: "Has spec",
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
      external: {
        not_available_message:
          "Extra action available with Company & Enterprise licenses.",
        available_message: "You can add an extra external call to action.",
        input_label: "Second Call to Action",
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
        spec_view_subtitle:
          "The specifications have been imported from the chosen product.",
        set_spec_action: "Duplicate Technical Specifications",
      },
      notifications: {
        enter_group_title_error: "Enter headline value",
        enter_item_title_and_value_error:
          "Enter the title and value of the feature",
        spec_saved_success: "Product specifications saved.",
      },
      dialog_ai: {
        title: "Automatically Generate Product Specifications",
        prompt: {
          title: "Product Overview",
          subtitle:
            "Please provide a brief and clear description of the product, highlighting its key features and details. This information will be used to automatically generate the product specifications.",
        },
        generated_spec: {
          title: "AI-Generated Specifications",
          subtitle:
            "These specifications were generated by artificial intelligence.",
        },
        inputs: {
          prompt: {
            label: "Product Details",
            placeholder: "Describe the product here...",
          },
        },
        actions: {
          run: {
            title: "Generate Specifications",
            subtitle:
              "Click to automatically create product specifications from the provided overview.",
          },
          add_generated_spec: "Add Generated Specifications",
        },
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
      change_bg_ai: {
        title: "Create Image With New Background",
        inputs: {
          prompt: {
            label: "Background Description",
            placeholder: "Describe the desired background...",
          },
        },
        actions: {
          reimagine: {
            title: "Generate New Image",
            subtitle: "Reimagine the entire image with a new background.",
          },
          replace: {
            subtitle: "Replace the existing background.",
          },
        },
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
        subtitle: "Implement dynamic pricing based on purchase quantity.",
      },

      vendor: {
        title: "Vendor pricing",
        subtitle:
          "This price will be shown only in the products listing. You can set vendor price in the Product > Vendors tab.",
        manage_vendors: "Manage Vendors",
        vendor_product_pricing_link:
          "The vendor's product pricing is connected. Changing the listing price here will affect vendor products without variants or those with variants that don't have their own pricing (using the same price as the main product). This price will be treated as the marketplace price, and the vendor's price will be set based on the pricing model or the previous marketplace profit margin.",
        vendor_variant_pricing_link:
          "Changing the variant price here will affect the pricing of vendor products with the same variant. This price will be considered the marketplace price, and the vendor's price will be set according to the pricing model or the previous marketplace profit margin.",
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
      inputs_hint:
        "You have the option to set up a personalized form to gather details from your customers when they're ready to place an order.",
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

      order_limit: {
        title: "Order limits",
        subtitle:
          "If you're a wholesaler or there's a minimum or maximum limit on the quantity of this item per order, you can specify that here.",
        no_limit: "No Limit",
        minimum_purchase_quantity: "Minimum purchase quantity",
        maximum_purchase_quantity: "Maximum purchase quantity",
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
    menu: {
      add_bulk: {
        title: "Bulk Add",
        subtitle: "Add multiple variants in one action.",
      },
    },
  },

  /**
   * @see USmartMenu
   */
  smart_menu: {
    show_delete_items: "Show deleted items",
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
      desc: "A warranty is part of a contract where the manufacturer promises to repair or replace a product within a specified period. This commitment can extend even to consumers who do not have a direct contract with the manufacturer.",
    },
    RETURN_POLICY: {
      title: "Return Policy",
      desc: "Return policies outline how customers can return or exchange unwanted merchandise. They specify eligible items, acceptable reasons for returns, and the timeframe for making returns.",
    },
    GUIDE: {
      title: "Guide",
      desc: "A guide could include a size chart for apparel or a selection guide for diamonds. It's important that guides are versatile and applicable across multiple products.",
    },
    SHIPPING: {
      title: "Shipping",
      desc: "A shipping policy details the key aspects of shipping for online orders, including shipping costs, methods, and estimated delivery times.",
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

  /**
   * @see BPageShopPagesPopups
   */
  b_shop_popups: {
    title: "Popups management",
    subtitle:
      "Create personalized, intelligent, and interactive pop-up windows.",
    add_action: "Add New Popup",
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

  /**
   * @see BProductVendorAbstractView
   */
  product_vendor_profile: {
    vendor: {
      subtitle:
        "The price and quantity of this product are set by a particular vendor to whom it belongs.",
    },
    vendors: {
      subtitle:
        "Here's a list of suppliers for the product. The quantity and price will be set by the suppliers.",
    },
  },
  /**
   * @see BVendorAdd
   */
  vendor_add: {
    menu: {
      profile: "Profile & Info",
      business: "Business & Payment",
      documents: "Documents",
      page: "Page Template",
      shipping: "Shipping",
      access: "Access",
      critical_zone: "Critical Zone",
    },

    profile: {
      title: "Vendor info",
      subtitle: "This information is shown to customers publicly.",
      action_sub_caption: "Public products listing page.",
      action_see_listing_page: "See Listing Page",
      send_invitation_email: "Send Invitation Email",
      invitation_link: "Invitation Link",
    },

    profiles: {
      title: "Profiles",
      subtitle: "You can assign location to this vendor.",
    },
    map: {
      no_map_message:
        "Assign a location to the vendor if it's a location-based vendor.",
    },
    page: {
      title: "Custom page",
      subtitle:
        "Set a custom landing page for the vendor, providing them with a unique link to their dedicated page.",
      action_set_page: "See Public Page",
      action_sub_caption: "Custom landing page.",
      vendor_has_landing_msg: "Vendor has a custom landing page.",
      no_landing_selected_msg: "No landing page selected.",
      no_landing_page: "No landing page",
      we_can_create_dedicated_landing_msg:
        "We can create a dedicated landing page for you.",
    },
    contact: {
      title: "Contact info",
      subtitle: "Kindly provide valid contact details.",
    },
    business: {
      title: "Business info",
      subtitle:
        "Please provide accurate information about your business to ensure a swift and seamless revenue collection process.",
    },
    bank: {
      title: "Payout Information",
      subtitle: "Input your bank details here for payouts.",
    },
    default_pricing: {
      title: "Default Pricing",
      subtitle:
        "You can assign a default pricing model for the vendor. When the vendor adds a new product, this pricing model will be used to calculate the marketplace margin on the product's price. You can later adjust the pricing model for each product individually.",
      no_pricing: "No pricing",
    },
    shipping: {
      title: "Shipping",
      subtitle: "Vendors can setup their own shipping services and couriers.",
      shipping_services: "Shipping Services",
      total_number_of_services:
        "The total number of shipping services that the vendor has.",
      couriers: "Couriers",
      total_couriers_count: "The total number of couriers that the vendor has.",
    },
    configuration: {
      title: "Configuration",
    },
    delete: {
      title: "Remove vendor",
      action: "Remove vendor",
      verify_description:
        "I know that all vendor product relations will be removed!",
      verify_title: "I want to delete this vendor.",
    },

    send_invitation_tips:
      "We will send an invitation email to this user. If the user joins your shop as a vendor, their account will be automatically assigned to them.",
    only_marketplace_owner_can_edit_user:
      "Only the marketplace owner can edit the user. If you want to change the owner of this vendor, you can send the request to us.",
    vendor_is_disable_msg: "Vendor is disabled.",
    email_not_match_with_user_msg:
      "Entered email does not match with user's email (<b>{user_name}:</b>{user_email}). Are you sure to send emails to<b>{email}</b>?",

    order_information_email_to_email:
      "We will send orders information to <b>{email}</b>.",

    set_a_user_for_the_vendor_first_msg: "Set a user for the vendor first.",

    inputs: {
      slug: {
        label: "Path",
        placeholder: "Enter a custom path...",
        hint: "Change the path the vendor's dynamic landing page.",
      },
      email: {
        message: "This email will receive all notifications and updates.",
      },
      business: {
        false_description: "I work as an individual.",
        true_description: "I operate as a legally recognized business entity.",
        false_title: "Individual",
        true_title: "Business",
      },
      bank: {
        hint: "The name of the bank where the vendor has their account.",
        placeholder: "Your bank name..",
      },
      account_name: {
        hint: "This should match the name associated with the bank account.",
        placeholder: "Your name..",
      },
      account_number: {
        hint: "The vendor's unique account number.",
        placeholder: "Your bank account number..",
      },
      routing_number: {
        hint: "This number varies by country. It's used to identify the specific bank branch the vendor uses.",
        placeholder: "Your bank routing number, sort code, or BSB number..",
      },
      iban: {
        hint: "International Bank Account Number): If the vendor's bank is in Europe or certain other countries.",
        placeholder: "Your IBAN number..  eg. DE89 3704 0044 0000 0000 00",
      },
      swift: {
        hint: "International Bank Account Number): If the vendor's bank is in Europe or certain other countries.",
        placeholder: "Your Swift code/BIC..",
      },
      branch_address: {
        hint: "The address of the bank branch where the vendor has their account.",
        placeholder: "Your bank address..",
      },
      enable: {
        label: "Vendor status",
        hint: "You can enable or disable vendors globally. Customers will not be able to purchase anything from disabled vendors.",
        true_description:
          "They will be able to sell their products through your marketplace.",
      },
      access: {
        label: "Vendor panel & access",
        true_description:
          "The vendor has a dedicated panel to update quantity and price.",
        hint: "You can enable or disable the vendor panel, which allows vendors to update product quantities and prices and receive partial orders.",
        false_description: "The vendor has no access to anything.",
      },

      logo: {
        label: "Vendor Logo",
      },
      description: {
        placeholder: "Write a public description...",
      },
    },
  },

  /**
   * @see BVendorDocumentsList
   */
  vendor_documents_list: {
    title: "Documents",
    action_upload_doc: "Upload Doc",
    vendor_subtitle:
      "Please upload the necessary business, IP, and address verification documents. We require this information to confirm your partnership and provide you with the necessary access.",
    marketplace_subtitle:
      "Vendors can submit documents such as business, intellectual property, and address verification to facilitate their KYC process, allowing you to grant them the appropriate access.",
    upload_dialog: {
      title: "Upload Document",
      type: {
        title: "Document Type",
        subtitle:
          "Please upload only the necessary documents. Avoid sharing any documents that contain sensitive information. We request documents that are publicly available.",
      },
    },
  },

  /**
   * @see BProductBadgesManage
   */
  product_badges: {
    title: "Badges",
    subtitle: "Add and edit custom product badges.",
    only_marketplace_owner_msg: "Only marketplace owners",
    create_new_badge_action: "Create new badge",
    select_a_badge: "Select a badge...",
    inputs: {
      custom: {
        false_description: "Products badges are created automatically.",
        false_title: "Auto",
        true_title: "Custom products badges",
        true_description: "Add custom badges in the product page.",
      },
    },
    add_custom_badge: {
      title: "Custom badge",
      subtitle:
        "Add a new custom badge to my shop. Keep badges count under 10. More badges would slow down your shop.",
      show_advanced_options: "Show advanced option",

      inputs: {
        title: {
          placeholder: "Public title...",
        },
        image: {
          label: "image",
          message: "Max image size: 128KB",
          placeholder: "Select a cover image",
        },
        pattern: {
          label: "Pattern",
          message:
            "Automatically show this badge for products has this matched value in their spec. Regex supported.",
          placeholder: "To show for all products write: *.*",
        },
      },
      notifications: {
        badge_added: "The badge has been added successfully!",
        badge_updated: "The badge has been updated successfully!",
        item_not_found_error:
          "The item could not be found. Please refresh the page or contact support.",
      },
    },
  },
  /**
   * @see BProductTagsInput
   */
  product_tags: {
    title: "Tags",
    tips: [
      "You can filter products based on tags on <b>landing pages</b>.",
      "You and your customers can search for these tags in the<b>search</b> bar.",
      "If set tags, only products with the <b>common tags</b> will be displayed in the <b>related products section</b> on the product page; otherwise, products in the same category will be displayed.",
    ],
    inputs: {
      tags: {
        placeholder: "Wire tags here and press enter. ex. new collection",
      },
    },
    notifications: {
      tags_updated: "The tags have been successfully updated.",
    },
  },

  /**
   * @see VPageVendorShippingTransportation
   */
  vendor_shipping_services: {
    title: "Shipping Services",
    subtitle:
      "The marketplace offers shipping methods to help vendors fulfill their orders. You can add shipping services here to easily order shipping labels from your order page. This simplifies the process by syncing addresses and tracking codes with the shipping provider.",

    subtitle_pickup:
      "The marketplace enables pickup for vendors, allowing buyers to choose pickup from your location as a shipping option. You can add your pickup location in your profile (your warehouse will be used as the default pickup location).",
    action: "Add Service",

    add_dialog: {
      select_service_msg:
        "Shipping methods are set by the marketplace, and customers can choose from them. Vendors have no control over these options but can integrate their panel with shipping services to purchase labels directly. Please select a method from the list below to view available services. Choose a shipping service from the list below. Only the available services that can be added to your store are displayed here.",
      no_available_service: "No available service!",
    },
  },
  /**
   * @see VPageVendorShipping
   */
  vendor_shipping: {
    services: "Services",
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
        staff_messages: "Staff messages",
        add_note: "Add note",
        product_tags: "Product tags",
        edit_tags: "Edit tags",
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
        total_participation_tooltip: "Total count of raters for the product.",
        today_participation: "Today ratings",
        last7days_participation: "Last 7 days contributions",
        chart: {
          participate: "Participation",
          participate_title: "The number of contributions",
          score: "Score",
        },
        users_not_rated_msg: "Users have not rated this product yet.",
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
        message: "Unique Product Variant Code",
        active_input: "Is this Variant active?",
        sku: "SKU",
        sku_tips: "Product Warehouse Code.",
        mpn: "MPN",
        mpn_tips: "Product code inserted by manufacturer on product packaging",

        has_pricing_input: "Is the price different from the main product?",
        inventory_unit: "Items",
        images_message:
          "After saving this variant you will be able to add more images here.",

        config: {
          title: "Product Variant Setup",
          subtitle: "Manage SKU, MPN, and availability for variants.",
        },
        variables: {
          title: "Variant Options",
          subtitle:
            "Enter a hex color code, e.g., <b>#654FFF</b>, or two colors separated by a slash, e.g., <b>#764FFA/#000000</b>.",
          graphical_asset_tips:
            "You can assign any value to the variables, including images using <b>Graphic Assets</b>. Upload a pattern and use the generated code for the variant.",
          graphical_asset_action: "Graphic Assets",
          graphical_asset_action_caption: "Images for variant options.",
        },
        smart_unit_price: {
          tips: "Calculate unit price based on <b>weight</b>, <b>volume</b>, and <b>pack size</b>.",
          smart_unit_price: "Unit Price Calculation",
        },
        quantity: {
          title: "Inventory",
          subtitle: "Set stock levels for each variant.",
        },
        price: {
          title: "Pricing",
          subtitle:
            "Set a custom price for the variant or use the default product price.",
        },
        package: {
          title: "Packaging & Shipping",
          subtitle:
            "Specify weight and dimensions for variants to determine shipping options.",
          same_as_product_action: "Same as product",
        },
        image: {
          title: "Variant Images",
          subtitle:
            "Add unique images for each variant. The first image uploaded will be the primary image for that variant.",
        },
        inputs: {
          sku: {
            message: "Stock Keeping Unit (SKU)",
          },
          mpn: {
            message: "Manufacturer Part Number (MPN)",
          },
          gtin: {
            label: "Global Trade Item Number (GTIN)",
            message:
              "Supported formats: UPC (12 digits), EAN (13 digits), JAN (8 or 13 digits), ISBN (13 digits).",
          },
        },
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

  /**
   * @see TransportationsEligibleView
   */
  transportation_eligible: {
    subtitle:
      "Shipping services available depend on the provided size and weight.",
  },

  /** {@see BProductExtraInput} **/
  product_extra_physical: {
    weight: "Package weight",
    weight_subtitle:
      "Input the product's total packaging weight here. This information helps choose the right shipping method and ensures the order doesn't surpass the shipping limit.",
    weight_unit: "Kg",
    size: "Package Dimensions",
    size_subtitle:
      "Input the product's full packaging size here. This information is used to choose the correct shipping method and ensure the order doesn't exceed the parcel size limit.",

    width: "Width",
    length: "Length",
    height: "Height",
    lead_time_title: "Preparation time",
    lead_time: "Preparation time",
    lead_time_subtitle:
      "Lead time estimates the duration required to prepare a product for shipping, which helps in estimating the delivery time.",

    lead_time_dimension: "Hour(s)",
    bulk_action: "Bulk Actions",
    bulk_action_subtitle:
      "You can apply the packaging information to all product variants.",

    bulk_action_input: "Update all variants",
    bulk_action_msg:
      "Set product packaging and preparation time for all variants.",
    dynamic_lead_time: "Dynamic lead time",
    instant_delivery: "Instant Delivery",
  },

  /**
   * @see SGalleryUploadGrid
   */
  gallery_upload_grid: {
    upload_images: "Upload Images",
  },

  /**
   * @see BProductImagesGallery
   */
  product_images_gallery: {
    dialog_alt: {
      title: "Set Image Alt Text",
      placeholder: "Enter a descriptive alt text...",
      success_update_notification: "Alt text updated successfully.",
    },
    dialog_bg_remove: {
      title: "Remove Background Automatically",
      action: {
        title: "Remove Background",
        subtitle: "Create a transparent background.",
      },
      success_remove_bg_notification: "Background removed successfully!",
    },
  },
  /**
   * @see VariantGraphicalAssetsList
   */
  variant_graphical_assets: {
    title: "Variant Graphical Assets",
    tips: {
      how_it_works:
        "<b>How It Works:</b><br />Upload pattern or item images here. To use these images as a variant option, include <b>{filename}</b> in the variant value. Note that this code cannot be used in the <b><s>color</s></b> value.",
      how_set_name:
        "<b>Naming Tips:</b><br />The first 12 characters of the uploaded file name will be used as the asset name. This feature is ideal for showcasing customizable aspects of a product, such as tire sizes for motorcycles or fabric patterns. To optimize the use of this feature, avoid uploading variant images here unless the number of graphical assets is fewer than 100, such as different wood types for furniture.",
    },
  },

  /**
   * @see ExtraPricingLevels
   */
  extra_pricing_levels: {
    extra_pricings: "extra pricings",
    min_quantity: "Min quantity",
    range_is_out_of_stock: "Range is out of stock!",
  },

  /**
   * @see BProductVariantItem
   */
  product_variant_item: {
    duplicated_variant: "This variant already exists!",
    set_color_warning: "Please select a color.",
    set_volume_warning: "Please specify the volume.",
    set_pack_warning: "Please specify the pack size.",
    set_weight_warning: "Please specify the weight.",
    set_type_warning: "Please select a type.",
    set_style_warning: "Please select a style.",
    out_of_stock: "Currently out of stock",

    image: {
      tooltip: "⚡ Drag and drop an image here to assign it to the variant.",
    },
    enable: {
      true_tooltip: "This item is available in the online store.",
      false_tooltip: "This item is not available in the online store.",
    },
    restore_dialog: {
      title: "Restore Variant",
      message: "Are you sure you want to restore this deleted variant?",
      action: "Yes, Restore Now",
    },
    notifications: {
      restore_variant_success: "The product variant was successfully restored.",
    },
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

  /**
   * @see BInventoryBulkPrice
   */
  bulk_price_dialog: {
    title: "Bulk actions > Price",
    message:
      "The following amount will apply as a percentage to the price of all products in your store. Also, the calculated price values will be intelligently converted to the closest round number based on the selected currency.Be careful in entering the values.",
    check: "I approve price changes.",
    check_description:
      "The price will be changed for the selected category and all subcategories.",
    add_percent_tab: "Add Percent",
    add_constant_tab: "Add Constant",
    ending_tab: "Ending strategy",
    marketplace_listing_price: "Listing Price",

    constant: {
      subtitle:
        "The amount will be added or subtracted from the current price of products.",
    },
    ending: {
      subtitle:
        "The ending of the current price of products will be changed to the specified value.",
    },
    marketplace: {
      title: "Marketplace Listing Price",
      subtitle:
        "This option allows you to automatically update the listing price of products in the marketplace. Occasionally, the main product price may not align with vendor pricing due to manual price changes.",
      strategy: {
        min: {
          title: "Set Minimum Price",
          description:
            "Set the minimum price of the product as the listing price.",
        },
        max: {
          title: "Set Maximum Price",
          description:
            "Set the maximum price of the product as the listing price.",
        },
      },
    },

    category: {
      subtitle: "Limit bulk action to a category and all subcategories.",
    },
    vendor: {
      subtitle:
        "Limit bulk actions to a specific vendor. When a vendor is selected, the price update will be applied to the vendor's products, which represents the selling price for that vendor.",
      listing_price_need_update_msg:
        "If you want to update the listing price (the price displayed in the product list), you should resubmit the bulk update with the same filters but without selecting a vendor.",
    },
    listing_products_changes: "Listing products change",
    total_vendor_products: "Total vendor products",
    total_products: "Total products",
    total_variants: "Total variants",
  },

  /** {@see BProductSpecTable} **/
  spec_view: {
    auto_save_input: "Auto save",
    auto_save_input_message: "Changes will be saved automatically.",
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

  /** {@see BPageShopFinanceGateways} **/
  b_page_shop_finance_gateway: {
    title: "Payment Methods",
    sub_title:
      "List of active payment methods. If you want to add a new method to your shop, press the following button. We highly recommended not exceeding 10 added payment gateways.",
    add_gateway: "New payment method",

    add_gateway_dialog: {
      title: "Select Currency",
      country_currencies: "Local currencies",
      crypto_currencies: "Cryptocurrencies",

      confirm: "Add payment method",

      online_methods: "Online Methods",
      cod_methods: "Cash On Delivery",
      bank_transfer: "Bank Transfer",
      cash_methods: "Cash Payment (POS)",

      currency_step: {
        title: "Select a currency",
        subtitle:
          "Try to keep the number of currencies in your store to a minimum—ideally fewer than 3. Most payment gateways can process transactions in almost any currency.",
        add_first_currency: {
          subtitle: "Please add a currency to your shop before proceeding.",
          title: "Add Currency",
        },
      },
      gateway_step: {
        title: "Active payment methods",
        subtitle:
          "Please choose from the available payment methods. Once you select a gateway, you'll be able to enter the necessary connection details to link your shop directly to your preferred payment method.",
      },

      config_step: {
        import_config: "You can import config from other similar gateways",
        import_from: "Import from",
      },

      request_add_new_gateway: {
        title: "Don't see your preferred payment method?",
        subtitle:
          "If your local payment provider isn't listed, subscribe to any yearly plan (including Startup for affordability) and request an integration. We'll complete it within 48 hours if a test account and documentation are provided.",
      },

      inputs: {
        currency: {
          placeholder: "Select a gateway to import...",
        },
        manual: {
          true_title: "Manually mode",
          true_description: "You can set gateway configuration manually.",

          false_title: "Auto connect",
          false_description:
            "The system will automatically connect to the gateway if you already have a configured gateway in place.",
        },
      },
    },
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

    config: {
      subtitle:
        "Categories help streamline product management and make it easier for your customers to find products in your store.",
    },
    parent: {
      subtitle:
        "This category will appear under its parent category. If a product doesn’t have a parent category, it will be displayed in the main category.",
    },
    template: {
      title: "Template",
      edit_page: "Edit Page",
      Pages_list: "Page List",
      subtitle:
        "You can enhance the display of your category page by overlaying a custom page. The best approach is to create pages with transparent backgrounds and design 1 to 2 sections specific to each category. You can then link one page to multiple categories, using dynamic content to tailor each category individually.",
    },
    critical_zone: {
      title: "Critical Zone",
      subtitle:
        "If you remove a category, its subcategories and products will be moved to the parent directory<b>📁 {parent}</b>. To manage categories that are not in the product list, go to the Shop > Categories tab.",
      accept_delete: {
        true_description: "I want to remove this category.",
        true_title: "Confirm Remove Category",
      },
    },

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
      manually_update_filters_tips:
        "<b>Important!</b> Filters are automatically updated when products change. However, after making changes to products in a category, please return here and click the save/regenerate button to refresh the filter.",

      inputs: {
        spec: {
          message:
            "List of features that you want to be shown in the filter section",
          placeholder: "Select specs to show in filter...",
        },
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
      confirm_now_action: "Cancel Order Now",
      confirm_in48h_action: "Cancel Order In 48 Hours",

      dismiss_reject_action: "Dismiss the order cancellation",

      options: {
        title: "Options",
        subtitle:
          "If you want to cancel your order immediately, you can use this option.",
      },

      express_input: {
        true_title: "Express | Cancel Order Immediately",
        false_title: "Standard | Cancel Order After 48 Hours",
        true_description:
          "This option will cancel your order immediately and update the inventory right away.",
        false_description:
          "This option will cancel your order after 48 hours. Until then, items will be reserved and cannot be purchased by others.",
      },
    },

    notifications: {
      update_status_success: "Order status has been updated successfully.",
      reject_update_success:
        "Order cancellation status has been updated successfully.",
      dismiss_reject_success:
        "Order has been returned to the normal processing workflow.",
      set_tracking_success: "Order tracking ID has been saved successfully.",
      shipping_address_update_success:
        "Shipping address has been updated successfully.",
      vendor_order_status_update_success:
        "Vendor fulfillment status has been updated successfully.",
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
        "You are required to issue at least one bill for this order. Multi-step payments may sometimes be necessary. As the work progresses, you will determine which bills the user needs to pay.",

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
        title: "Set cash payment",
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

      need_to_refund: {
        title: "Refund required to the customer",
        message:
          "We calculate the total amount of refunds that you need to make manually. It calculated based on unavailable items and total refunded values yet.",
        calculated_approximately:
          "The amount is calculated approximately. Please calculate the exact amount yourself.",
      },
      need_payback: {
        title: "Customer pay back required",
        message:
          "We've noticed that the total refunded to the customer is higher than the amount due based on the items in the cart. You may need to charge your customer to recover the excess amount.",
      },
      need_no_refund: {
        title: "No refund necessary",
      },
      total_refund: {
        title: "Total refunded",
        message:
          "It's the total amount of refunds automatically made by your payment gateway. Only some payment services support this feature, so you need to refund manually.",
      },
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
      title: "Has the customer received the order?",
      message: "Confirm if the customer has received the order.",
      confirm_action: "Confirm order received",
    },
    return_delivery_dialog: {
      title: "Was there an issue with delivery or a return?",
      message:
        "Confirm if the order was returned or needs to be resent due to a delivery issue.",
      confirm_action: "Confirm order return",
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
        subtitle:
          "Created payments and transactions made during the selected time period.",
        chart: {
          times: "Count",
          buys: "Buy count",
          pays: "Successful payment",
          amount_pay: "Paid",
          amount_wage: "Fee",
        },
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

  /** {@see BGatewayOverview} **/
  b_gateway_overview: {
    title: "Info",
    subtitle: "Overview of payment gateway configuration and status.",
    status: "Status",
    cod_transportation: "Supported Shipping",
    cod_transportations_error:
      "Enable cash on delivery payment for at least one shipping method!",
    payment_type: "Payment type",
    cod: "Cash On Delivery",
    online: "Online payment",
    wage_percent: "Fee Percent",
    min_wage: "Minimum Fee",
    max_wage: "Maximum Fee",
    min_amount: "Minimum Transaction",
    max_amount: "Maximum Transaction",
    timeout: "Payment Period",
    timeout_unit: "Seconds",
    link: "Gateway Link",
    your_gateway_status: "Your gateway status",
    oauth2_button: "Auto Connect to {gateway}",
    fee_payment_message:
      "The entire amount paid by the customer will be transferred to your account. The service fee will be deducted from your wallet in Selldone.",

    auto_config: "Auto Config",

    keys: {
      title: "Private Keys",
      subtitle:
        "List of private keys for the payment. This information is essential for creating and managing payments.",
    },
    extra_config: {
      title: "Payment service configuration",
      subtitle: "Additional configuration information for the payment gateway.",
    },

    recommended_actions: {
      title: "Recommended actions",
      subtitle:
        "By taking these steps, you'll begin to receive actual payments from your customers.",
      action_enable: "Click to enable it",
      make_live_enable: "Click to live it",
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
    status_true_description: "Your customers can pay with this payment method.",

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
      success_delete: "Payment method has been deleted!",
    },
    debug: {
      title: "Develop & Test",
      subtitle: "You can enable the debug mode to test the payment gateway.",
    },

    limit: {
      title: "Order Limit",
      subtitle: "Set the minimum order amount for this payment gateway.",
    },
    limit_input: {
      title: "Minimum order amount",
      msg: "Zero means no limit.",
    },
    currency_input: {
      message: "The currency that this payment gateway supports.",
    },
    gateway_code: "Gateway Code",

    hold_only_for: "Hold payment only available for",
    manual_input: {
      false_description:
        "The payment status will be changed automatically from pending to confirmed in the payment provider system.",
      false_title: "Auto payment confirmation",
      true_title: "Hold payments and Manual confirmation",
      true_description:
        "Place a hold on a payment so you need to verify the payments for an order to change their status from pending to confirmed in the payment provider system.",
    },
    delete_verify_input: {
      true_title: "I want to remove this payment method.",
      true_description:
        "This payment method will be removed from the store and will not be available to customers.",
    },
    delete_alert: {
      title: "Delete payment method",
      message: "Are you sure delete this payment method from your shop?",
      action: "Delete payment method",
    },
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
      title: "Issued Cards Overview",
      subtitle:
        "View and manage all issued cards. You can send cards to users manually or ban them if needed.",

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

  /**
   * @see BOrderConnectsList
   */
  order_connect_list: {
    subtitle:
      "List of externally synced orders that need to be fulfilled by third-party providers.",
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
    "email-update": "Send order update email to customer.",
    "sms-payment": "Send payment confirmation SMS to customer via {phone}.",
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
    "vendor-sms":
      "🔔 Order inform SMS has been sent to <b>{vendor}</b> ╏ {phone}.",
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
    load_more_products:
      "More products are available in this category. Click to load more items.",
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

    engine: {
      title: "Extra Products Engine",
      subtitle:
        "More products will be loaded from selected categories and tags.",
      load_in_tips: "Load products from categories in the {category}.",
      action: "Edit {category} Engine",
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
    order_canceled: "Order canceled",
    order_rejected: "Order rejected by vendor",
  },

  /**
   * @see VPageVendorDashboard
   */
  vendor_dashboard: {
    info: {
      subtitle: "Marketplace information.",
    },
    performance: {
      subtitle: "My sales performance.",
    },
    products: {
      title: "Products",
      subtitle:
        "Here you can view the count of your products listed on the marketplace. Products by multiple vendors are not included.",
    },
    wallets: {
      title: "My wallets",
      subtitle:
        "You don't need to add wallets manually! Vendor wallets will be created automatically.",
    },

    open_marketplace_page: "Open marketplace page",
    open_my_store_page: "Open my store page",
    open_my_listing_page: "Open my listing page",
    add_products_permission: "Add products permission",
    add_categories_permission: "Add categories permission",
  },

  /**
   * @see VPageVendorInventory
   */
  vendor_inventory: {
    title: "Products list",
    subtitle:
      "This is a list of your products in the marketplace. Update prices and quantities for your assigned products in the inventory. As a vendor, you'll only see single-vendor products you own in the product list. Other assigned products can be modified here as well.",
  },

  /**
   * @see VPageVendorAccess
   */
  vendor_member: {
    title: "Team Members",
    subtitle:
      "This is the list of users who have access to your vendor panel. You can add new team members and customize their permissions here.",
    add_action: "Add New Member",
    pending: {
      title: "Pending Invitations",
      message: "View the list of invitations that are awaiting acceptance.",
    },
  },

  /**
   * @see VMemberAddDialog
   */
  vendor_member_add: {
    title_edit: "Edit Team Member",
    title_new: "Add New Team Member",
    member: {
      title: "Team Member Details",
      subtitle:
        "Add a new team member and set their permissions. Click on each item to adjust read/write access. Each row corresponds to a permission level for the main shop dashboard.",
    },
    access: {
      view_data: "View Data",
      apply_changes: "Save Changes",
    },
    inputs: {
      email: {
        label: "Email Address",
        placeholder: "Enter the member's email address...",
      },
    },
    notifications: {
      add_success: {
        title: "Member Added",
        message: "The team member has been successfully added.",
      },
      update_success: {
        title: "Member Updated",
        message: "The team member's information has been successfully updated.",
      },
    },
    actions: {
      add: "Add Member",
    },
  },

  /**
   * @see VPageVendorPayments
   */
  vendor_payments: {
    list: {
      title: "Payout history",
      subtitle:
        "You can view your payout history here. These payouts may be processed manually through bank transfers or automatically using payment services that offer payout capabilities.",
    },
    connect: {
      title: "Connect bank",
      subtitle:
        "We offer split payment capabilities for the following payment gateways. To receive payments seamlessly after each purchase, please connect your bank account using these options.",
    },
    verify_dialog: {
      title: "Verify payment",
      option: {
        title: "Vendor action",
        subtitle:
          "You have the option to accept or reject this transfer. This action serves as a historical record only. Simply confirm if you have received the funds; if not, there's no need to take any action.",
      },
      inputs: {
        verify: {
          label: "Have you confirmed this payment?",
          false_description:
            "No, I have not yet received this payment in my bank account.",
          true_description: "Yes, I have received and verified this payment.",
        },
      },
    },
  },

  /**
   * @see BVendorOrderRefund
   */
  vendor_order_refund: {
    title: "Refund order",
    subtitle:
      "<b>Important! </b>Executing this action will generate a negative transaction in the vendor's wallet and subtract the chosen amount from it. The amount cannot exceed the remaining total transactions for the selected order. Additionally, if funds have been transferred to connected bank accounts (such as with Stripe Connect or manual wire transfer), you should create a <b>reversal transfer</b>.",
    inputs: {
      note: {
        message: "It's visible to the vendor.",
        placeholder: "You can attach a note here...",
      },
      amount: {
        error_message: "The remaining amount has been exceeded.",
      },
    },
  },

  /** {@see BOrderVendorPaymentManagement} **/
  order_vendor_payment: {
    message:
      "This provides an overview of the transactions in the vendor's virtual wallet on the marketplace. Whenever an order is placed, the vendor's share of the sale is added to their wallet.",
    vendor_wallets: "Vendor Wallets",
    my_wallets: "My Wallets",
    refund_order_action: "Refund Order",
    automatic_payout_list: {
      subtitle:
        "This is a list of automatic payouts to your connected bank account. Please note that only automatic payouts will be displayed here, and manual payouts will not be shown.",
    },
    reversal_transfer_action: "Reversal Transfer",
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
  /** {@see OPageMonetizeAccounts} **/
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
      reset_at: "Reset date",
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
  /** {@see OPageMonetizeReferral} **/
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
    //--------------------------- Profile ---------------------------
    profile: {
      name: "Profile Information",
      description: "Read user profile details including name, email, image, and authentication status."
    },
    phone: {
      name: "Phone Number",
      description: "Access user phone number."
    },
    address: {
      name: "Addresses",
      description: "Read saved addresses from the address book."
    },
    "user:profile:write": {
      name: "Profile Management",
      description: "Edit and manage user profile information."
    },

    //--------------------------- Storefront ---------------------------
    "my-gift-cards": {
      name: "Gift Cards",
      description: "Access user's gift cards."
    },
    "order-history": {
      name: "Order History",
      description: "Read user order history."
    },
    buy: {
      name: "Purchase",
      description: "Place an order from the store."
    },

    //--------------------------- Backoffice ---------------------------
    articles: {
      name: "Content Management",
      description: "Edit articles and content."
    },
    "backoffice:notifications": {
      name: "Notifications Management",
      description: "Send and receive notifications."
    },
    "backoffice:order:write": {
      name: "Order Management",
      description: "Edit and manage store orders."
    },
    "backoffice:order:read": {
      name: "Order Access",
      description: "Read store orders."
    },
    "backoffice:support-tickets": {
      name: "Support Tickets",
      description: "Manage support tickets."
    },
    "backoffice:shop:read": {
      name: "Shop Information",
      description: "Read shop details and statistics."
    },
    "backoffice:shop:write": {
      name: "Shop Management",
      description: "Create and manage shop details."
    },
    "backoffice:shop:add": {
      name: "Add Shop",
      description: "Add a new shop to the system."
    },
    "backoffice:shop:delete": {
      name: "Delete Shop",
      description: "Delete a shop from the system."
    },
    "backoffice:giftcard:write": {
      name: "Gift Card Management",
      description: "Create and manage gift cards."
    },
    "backoffice:giftcard:read": {
      name: "Gift Card Access",
      description: "Read gift card details and statistics."
    },
    "backoffice:faq:write": {
      name: "FAQ Management",
      description: "Create and manage frequently asked questions."
    },
    "backoffice:faq:read": {
      name: "FAQ Access",
      description: "Read FAQ details and statistics."
    },
    "backoffice:category:write": {
      name: "Category Management",
      description: "Create and manage product categories."
    },
    "backoffice:category:read": {
      name: "Category Access",
      description: "Read category details and statistics."
    },
    "backoffice:product:write": {
      name: "Product Management",
      description: "Add and manage products."
    },
    "backoffice:product:read": {
      name: "Product Access",
      description: "Read product details and statistics."
    },
    "backoffice:report:read": {
      name: "Report Access",
      description: "Read store reports and information."
    },
    "backoffice:finance:write": {
      name: "Financial Account Management",
      description: "Manage financial accounts linked to the store."
    },
    "backoffice:finance:read": {
      name: "Financial Account Access",
      description: "Read financial account details and statistics."
    },
    "backoffice:page:write": {
      name: "Page Management",
      description: "Edit shop pages."
    },
    "backoffice:page:read": {
      name: "Page Access",
      description: "Read shop page details and statistics."
    },
    "backoffice:logistic:write": {
      name: "Logistics Management",
      description: "Manage logistics information."
    },
    "backoffice:logistic:read": {
      name: "Logistics Access",
      description: "Read logistics details and statistics."
    },
    "backoffice:staff:write": {
      name: "Staff Management",
      description: "Edit and manage staff details."
    },
    "backoffice:staff:read": {
      name: "Staff Access",
      description: "Read staff information and statistics."
    },
    "backoffice:business-profile:write": {
      name: "Business Profile Management",
      description: "Manage business profiles."
    },
    "backoffice:business-profile:read": {
      name: "Business Profile Access",
      description: "Read business profile details."
    },
    "backoffice:discount-code:write": {
      name: "Discount Code Management",
      description: "Manage store discount codes."
    },
    "backoffice:discount-code:read": {
      name: "Discount Code Access",
      description: "Read discount code details and statistics."
    },
    "backoffice:wallet:write": {
      name: "Wallet Management",
      description: "Manage user wallets."
    },
    "backoffice:wallet:read": {
      name: "Wallet Access",
      description: "Read wallet information and statistics."
    },
    "backoffice:coupon:write": {
      name: "Coupon Management",
      description: "Manage store coupons."
    },
    "backoffice:coupon:read": {
      name: "Coupon Access",
      description: "Read coupon details and statistics."
    },
    "backoffice:offer:write": {
      name: "Offer Management",
      description: "Manage store offers."
    },
    "backoffice:offer:read": {
      name: "Offer Access",
      description: "Read offer information and statistics."
    },
    "backoffice:cashback:write": {
      name: "Cashback Management",
      description: "Manage store cashback offers."
    },
    "backoffice:cashback:read": {
      name: "Cashback Access",
      description: "Read cashback details and statistics."
    },
    "backoffice:lottery:write": {
      name: "Lottery Management",
      description: "Manage store lotteries."
    },
    "backoffice:lottery:read": {
      name: "Lottery Access",
      description: "Read lottery details and statistics."
    },
    "backoffice:community:write": {
      name: "Community Management",
      description: "Manage community activities."
    },
    "backoffice:community:read": {
      name: "Community Access",
      description: "Read community details and statistics."
    },
    "backoffice:customer:write": {
      name: "Customer Management",
      description: "Manage customer details."
    },
    "backoffice:customer:read": {
      name: "Customer Access",
      description: "Read customer information and statistics."
    },
    "backoffice:ribbon:write": {
      name: "Ribbon Management",
      description: "Manage store ribbons."
    },
    "backoffice:ribbon:read": {
      name: "Ribbon Access",
      description: "Read ribbon details and statistics."
    },
    "backoffice:ai:write": {
      name: "AI Management",
      description: "Manage AI configurations."
    },
    "backoffice:ai:read": {
      name: "AI Access",
      description: "Read AI configurations and statistics."
    },
    "backoffice:vendor-payment:write": {
      name: "Vendor Payment Management",
      description: "Manage vendor payments."
    },
    "backoffice:vendor-payment:read": {
      name: "Vendor Payment Access",
      description: "Read vendor payment details and statistics."
    },
    "backoffice:company:read": {
      name: "Company Access",
      description: "Read company details and statistics."
    },
    "backoffice:company:write": {
      name: "Company Management",
      description: "Manage company information."
    },
    "backoffice:note:read": {
      name: "Note Access",
      description: "Read notes and related details."
    },
    "backoffice:note:write": {
      name: "Note Management",
      description: "Manage notes."
    },
    "backoffice:affiliate:write": {
      name: "Affiliate Management",
      description: "Manage affiliate information."
    },
    "backoffice:affiliate:read": {
      name: "Affiliate Access",
      description: "Read affiliate details and statistics."
    },
    "backoffice:print:write": {
      name: "Print Management",
      description: "Manage print options."
    },
    "backoffice:print:read": {
      name: "Print Access",
      description: "Read print details."
    },
    "selldone:token:read": {
      name: "Token Access",
      description: "Read token details and statistics."
    },
    "selldone:token:write": {
      name: "Token Management",
      description: "Manage tokens."
    },

    //--------------------------- Selldone ---------------------------
    "selldone:monetization:read": {
      name: "Monetization Access",
      description: "Read monetization details and statistics."
    },
    "selldone:monetization:write": {
      name: "Monetization Management",
      description: "Manage monetization, including referral programs."
    },
    "selldone:identification": {
      name: "Identification Access",
      description: "Access user identification details."
    },
    "selldone:developer:read": {
      name: "Developer Access",
      description: "Read developer details and statistics."
    },
    "selldone:developer:write": {
      name: "Developer Management",
      description: "Manage developer information."
    },
    "selldone:security:write": {
      name: "Security Management",
      description: "Manage security configurations."
    },

    //--------------------------- Connect ---------------------------
    "connect:provider:write": {
      name: "Provider Management",
      description: "Manage connected service providers."
    },
    "connect:provider:read": {
      name: "Provider Access",
      description: "Read provider details and statistics."
    },

    //--------------------------- Agency ---------------------------
    "agency:read": {
      name: "Agency Access",
      description: "Read agency details and statistics."
    },
    "agency:write": {
      name: "Agency Management",
      description: "Manage agency information."
    },

    //--------------------------- Vendor ---------------------------

    "vendor-read": {
        name: "Vendor Access",
        description: "Read vendor details and statistics."
    },
    "vendor-write": {
        name: "Vendor Management",
        description: "Manage vendor information."
    }
  },

  scope_group: {
    backoffice: {
      title: "Backoffice",
      description: "Access to backoffice and store management features."
    },
    storefront: {
      title: "Storefront",
      description: "Access to customer and store information."
    },
    profile: {
      title: "Profile",
      description: "Access user profile information."
    },
    selldone: {
      title: "Selldone",
      description: "Access Selldone services and features."
    },
    others: {
      title: "Others",
      description: "Miscellaneous scopes not defined in the system."
    },
    vendor: {
      title: "Vendor",
      description: "Access vendor information and management features."
    },
    connect: {
      title: "Connect OS",
      description: "Access connected services and providers."
    },
    agency: {
      title: "Agency",
      description: "Access agency information and management."
    }
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
        hierarchy: "Hierarchy",
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
    verify: {
      true_title: "Verify Terms",
      true_description: "I read and agree with Selldone terms of use",
    },
    need_charge: "Need charge",
    buy_now: "Buy now",
    use_voucher_now: "Use voucher now",
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
    add_dialog: {
      wallet: {
        title: "Choose a Wallet",
        subtitle:
          "Select a virtual wallet to use for your subscription. If you don't have one yet, you can create it in the wallet section. This wallet will be used for any charges.",
      },
      auto_renewal: {
        true_title: "Auto Renewal",
        true_description:
          "Your subscription will automatically renew if your wallet has enough balance or if you have a valid voucher.",
      },
      options: {
        title: "Additional Options",
      },
      verify: {
        title: "Confirmation",
      },
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
    by_sku: {
      title: "Add by SKU",
      subtitle: "The database in your country is not available.",
    },
    drop_shipping: {
      subtitle:
        "Find products in the wholesale marketplace and add them to your store.",
    },
    by_connect: {
      subtitle:
        "Easily add products from POD or dropshipping suppliers with Selldone Connect OS—just connect your store and enjoy automatic product integration, no plugins needed.",
    },
    your_license_is_not_eligible: "Your license is not eligible.",
    sku_dialog: {
      title: "Add Product by SKU",
      subtitle:
        "You have the ability to locate products by their SKU in our database and add them with just a single click.",
    },
    dropshipping_dialog: {
      title: "Add dropshipping products",
    },
  },

  /**
   * @see BProductAddDropshippingShops
   */
  product_add_dropshipping_shops: {
    subtitle:
      "Here, you can find wholesalers who list their products on Selldone, making them available for other merchants. Selldone's built-in dropshipping platform simplifies the process, making it easy and straightforward for both wholesalers and merchants.",
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

    link_factory: {
      title: "Affiliate partner link generator",
      link_input: "Your link",
      link_output: "Generated link",
    },
  },

  /**
   * @see BAffiliateEdit
   */
  affiliate_edit: {
    affiliate_commission: "Affiliate Commission",

    config: {
      new: "New Affiliate Partner",
      edit: "Edit Affiliate Partner",
      subtitle:
        "Configure the general settings and name of the affiliate here.",
    },

    payment: {
      title: "Payment Information",
      subtitle:
        "Set the commission structure for the affiliate. You can combine fixed and percentage-based commissions, or set specific commissions for each product.",
    },

    contact: {
      title: "Contact Information",
      subtitle: "Provide the contact details of the affiliate partner here.",
    },

    restriction: {
      title: "Commission Restrictions",
      subtitle:
        "Define which products are eligible for commission. You can restrict commissions to certain products.",
    },

    link_domain: {
      title: "Linked Domain",
      subtitle:
        "Link one of your domains to this affiliate partner. Visitors who buy through this domain will be attributed to this affiliate.",

      domain_not_approved_msg: "The domain has not been approved yet!",
      domain_is_not_enable_msg: "The domain is not enabled!",
      domain_is_linked_to_other_affiliate_msg:
        "This domain is already linked to another affiliate!",
    },

    set_users_first_message: "Please set the user first!",

    cluster: {
      title: "Cluster",
      subtitle:
        "Associate this affiliate with a cluster to manage it alongside other resources in one place.",
      manage_action: "Manage",
    },

    notifications: {
      create_success: "New affiliate added successfully.",
      update_success: "Affiliate updated successfully.",
    },

    inputs: {
      name: {
        label: "Affiliate Partner Name",
        message: "e.g., John Doe, Alex Company, X Marketers, etc.",
      },
      commission: {
        label: "Commission Calculation",
        false_description:
          "Calculate using a combination of fixed and percentage commissions.",
        true_description:
          "Calculate using product-specific commissions set in the pricing tab.",
        false_title: "Fixed + Percentage Commission",
        true_title: "Product-Based Commission",
      },
      user: {
        label: "User (Optional)",
        message: "Optional, e.g., affiliate name in Selldone",
      },
      web: {
        placeholder: "Optional, e.g., affiliate-web.com",
      },
      address: {
        placeholder: "Optional, e.g., 1200 POX, NY, USA",
      },
      tel: {
        placeholder: "Optional, e.g., 001-808-210354",
      },
      bank: {
        placeholder: "Optional, e.g., Arstra Bank, No: 10002-325-800-845213",
      },
      domain: {
        placeholder: "Select a domain... (Optional)",
      },
      pos: {
        true_description:
          "Affiliates can place orders directly for their customers through their panel.",
        true_title: "POS Access",
      },
      enable: {
        true_description:
          "Is this affiliate currently active? If inactive, their affiliate program won't apply to orders made through their link.",
      },
      products: {
        label: "Products Eligible for Commission",
        select_product: "Select Products",
      },
    },
    actions: {
      update: "Update Affiliate",
      add: "Add Affiliate Partner",
    },
    /**
     * @see BPageAffiliateEdit
     */
    delete: {
      subtitle:
        "You can settle any outstanding debts with the affiliate before removing them from your shop. Affiliate information will remain accessible for a limited time after deletion.",
    },
  },

  /**
   * @see BPageShopFinanceValuations
   */
  shop_valuations: {
    title: "Custom Pricing and Valuations",
    subtitle:
      "Assign a valuation (a pricing input form) to a product, allowing customers to select variants or personalize your merchandise. The system will then calculate the price based on the custom inputs.",
    add_valuation_action: "Create New Valuation Form",
    empty_message:
      "Instead of creating multiple variants, consider developing a valuation strategy that can be applied to a simple product.",
    delete_dialog: {
      title: "Permanently Remove",
      message:
        "Are you sure you want to delete this pricing form? Please ensure that this custom pricing strategy is removed from all associated products first.",
      action: "Yes, Delete Now",
    },
    notifications: {
      delete_success: "Valuation has been successfully deleted.",
    },
  },

  /**
   * @see BValuationInput
   */
  valuation_input: {
    label: "Pricing & Valuation Model",
  },

  /**
   * @see BValuationAdd
   */
  valuation_add: {
    title_edit: "Edit Valuation Form",
    title_add: "Create New Valuation Form",
    config: {
      subtitle:
        "Set up a valuation system to create flexible pricing using formulas and reference tables for your products. Start by giving this valuation a unique name.",
    },
    valuation_preview: "Preview Valuation Form",
    load_sample: "Load Sample",
    conditions: {
      title: "Conditions",
      subtitle:
        "Define the logic for custom variants. This configuration simplifies the management of variant availability.",
    },
    structure: {
      title: "Structure",
      subtitle:
        "Design your pricing input form here by integrating formulas and reference tables.",
      expand_action: "Expand",
      collapse_action: "Collapse",
    },
    inputs: {
      title: {
        message: "This title is not visible to customers.",
        placeholder: "Enter a name for pricing, e.g., 'Mugs Pricing'",
      },
    },
    samples: {
      title: "Sample Valuations",
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
    cashback: "Cashback",
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
      title: "Import Customers",
      subtitle:
        "Upload customer CSV files here. Ensure the format is correct and complies with privacy regulations.",
    },

    /**
     * @see BVendorsImporter
     */
    vendor: {
      title: "Import Vendors",
      subtitle:
        "Upload vendor CSV files here. Ensure the format is correct and adheres to privacy regulations.",
      checklist: {
        title: "Important Checklist",
        subtitle: "Be sure to follow the guidelines.",
        sample_files: "Sample Files",
        valid_vendor_name_needed:
          "You must provide a <b>valid name</b>. The <b>name</b> is used to determine whether to <i>Create</i> a new vendor or <i>Update</i> an existing one.",
        assign_user_after_import:
          "After importing vendors, you can manually assign a user to give them access to the vendor panel.",
      },
      need_kyc_alert:
        "You need to verify your personal information before importing vendors.",
      back_to_vendors_list: "Back to Vendor List",
    },
  },

  /**
   * @see BPageMarketplaceProducts
   */
  marketplace_products: {
    title: "Vendor Products",
    subtitle:
      "This catalog lists all products offered by vendors. In the marketplace, a product can be linked to one or more vendors. Each vendor associated with a product has a unique entry that includes inventory and pricing details specific to that vendor.",
    filter_vendor: {
      placeholder: "Filter by vendor...",
    },
    filter_status: {
      placeholder: "Filter by status...",
    },
  },

  /**
   * @see BPageMarketplaceRequests
   */
  marketplace_requests: {
    open_vendors_panel: "Open Vendors Panel",
    title: "Vendor Request List",
    subtitle:
      "This is a list of requests from individuals who have applied to become vendors in your marketplace.",
  },
  /**
   * @see BPageMarketplaceSetting
   */
  marketplace_setting: {
    marketplace: {
      title: "Marketplace",
      subtitle:
        "Disabling the marketplace will turn off some functionalities. If you want to shut down your entire marketplace, you should disable your store in the settings.",
    },
    distribution_model: {
      title: "Distribution Model",
      subtitle:
        "Marketplaces can operate under different distribution models. Whether you prefer vendors to ship items directly to buyers or consolidate orders at your warehouse for shipping, you can choose the model that best suits your needs here.",
    },
    access: {
      title: "Vendor Access",
      subtitle:
        "As an administrator, you control the level of access vendors have to the product dashboard. Adjust global access settings to allow vendors to add their own products and categories or restrict this access to administrators only.",
    },
    need_enable_shipping_for_vendors_tips:
      "Enable shipping for vendors in the Shop > Logistic tab for each method individually.",
    transportation_available_tooltip: "This option is available for vendors.",
    transportation_not_available_tooltip:
      "Not available for vendors! You can enable it in the transportation settings.",
    panel: {
      title: "Vendor Panel",
      subtitle: "Onboard your vendors through your custom domain.",
    },
    documents: {
      title: "Documents",
      subtitle:
        "You can require your vendors to upload documents or sign certain contracts. Specify the required documents here.",
      add_document_action: "Add Document Request",
    },
    inputs: {
      enable: {
        false_description:
          "The marketplace is turned off, disabling all marketplace functionalities.",
        true_description:
          "The marketplace is active, enabling all marketplace functionalities.",
      },
      product: {
        label: "Add New Product",
        true_title: "Vendors Can Add Products",
        false_description:
          "You add products and assign vendors. Vendors can only manage price and inventory.",
        true_description:
          "Vendors can add and manage their own products directly in their vendor panel.",
      },
      need_verify: {
        label: "Product Verification Flow",
        false_description: "New vendor products go live instantly.",
        false_title: "No Verification Required",
        true_description:
          "Vendors' new products require approval before going live on the marketplace.",
        true_title: "Verification Required",
      },
      category: {
        label: "Add New Category",
        true_title: "Vendors Can Add Categories",
        false_description:
          "You add categories. Vendors can only add products to existing categories.",
        true_description:
          "Vendors can add and manage categories directly in their vendor panel.",
      },
      shipping: {
        label: "Shipping Options",
        true_title: "Vendors Have Shipping Options",
        false_description:
          "Vendors cannot add or customize their shipping methods.",
        true_description:
          "Vendors can set up their own shipping methods, add couriers, and customize shipping for their needs.",
      },
      hidden_customer: {
        label: "Show Buyer Contact Information",
        true_description: "Buyer contact details are hidden from vendors.",
        false_description:
          "Buyer contact details, such as phone and email, are visible to vendors.",
      },
      multi: {
        false_description:
          "A user can have only one vendor account. Users will be redirected to their panel at /vendors.",
        true_description:
          "A user can have multiple vendor accounts. This is a beta feature; please contact us before using it.",
        true_title: "Multi-Vendor Mode",
        false_title: "Single Vendor Mode (Default)",
      },
    },
    notifications: {
      update_success: "Vendor settings updated successfully.",
    },
    add_document_dialog: {
      title: "Document Requirements",
      type: {
        title: "Document Type",
        subtitle:
          "Add a document request item here. It will appear in the vendor's panel, prompting them to upload the required document.",
      },
      guide: {
        title: "Guide",
        subtitle:
          "Provide a brief guide to help vendors understand which documents to upload and how to do it properly.",
      },
      code: {
        title: "Embed Code",
        subtitle:
          "Paste the embed code for a document, form, or contract that the vendor must sign.",
      },
      link: {
        title: "External Link",
        subtitle:
          "Provide an external link to a document or contract that the vendor must sign.",
      },
      inputs: {
        title: {
          label: "Title",
          placeholder: "Enter a title for the document request.",
        },
        guide: {
          label: "Guide (Optional)",
          placeholder:
            "Optionally, provide a brief guide or instructions, including links to contracts or other documents.",
        },
        code: {
          label: "Embed Code",
          placeholder: "Paste the embed code here...",
          message: "Can include HTML code.",
        },
        url: {
          label: "URL",
          message: "Enter the URL for the document or contract here...",
        },
      },
    },
  },

  /**
   * @see ShopMarketplaceModes
   */
  ShopMarketplaceModes: {
    Collective: {
      title: "Collective Mode",
      description:
        "In this mode, all orders are sent to your warehouse first and then shipped to customers from a central location. Vendors will send their items to your warehouse, so the shipping address for vendors will be your warehouse address.",
    },
    Direct: {
      title: "Direct Shipping from Vendor",
      description:
        "In this mode, vendors ship orders directly to customers. The shipping address for vendor orders will be the buyer's address.",
    },
  },
  /**
   * @see VendorDocumentType
   */
  VendorDocumentType: {
    Identification: {
      title: "Owner Identification Document",
      description:
        "Upload a government-issued ID to verify the identity of the business owner or key executive.",
    },
    Business: {
      title: "Business Documentation",
      description:
        "Provide essential business documents such as licenses or registration certificates to confirm the legal status of your business.",
    },
    Address: {
      title: "Address Verification",
      description:
        "Submit a document to verify your business address, such as a utility bill, tax invoice, or lease agreement.",
    },
    Contract: {
      title: "Contracts & Agreements",
      description:
        "Upload contracts or agreements that detail the terms and conditions of your business relationships.",
    },
    Copyright: {
      title: "Copyright Documentation",
      description:
        "Provide copyright registration documents to affirm your intellectual property rights.",
    },
    Privacy: {
      title: "Privacy Policy Documents",
      description:
        "Include your privacy policy documents to demonstrate your commitment to protecting user and customer information.",
    },
    Embed: {
      title: "Embedded Form",
      description:
        "Complete the embedded form to provide the required information.",
    },
    Link: {
      title: "External Link",
      description:
        "Follow the external link to provide the necessary information.",
    },
  },

  /**
   * @see BPageMarketplaceWallets
   */
  marketplace_wallets: {
    title: "Vendor Wallets",
    subtitle:
      "No need to manually add wallets! Vendor wallets are created automatically. If you enable a payment method that supports split payouts (like Stripe Connect), the system will automatically distribute payments to the connected vendors' accounts. If this feature is not enabled, you'll need to manually pay vendors, and you can check the amounts owed to them in the wallet list.",
    filter_vendor: {
      placeholder: "Filter by vendor...",
    },
  },

  /**
   * @see BVendorAccountTransactionsList
   */
  vendor_account_transactions: {
    subtitle:
      "This section provides a detailed list of all transactions for the selected wallet. A charge transaction is recorded when a customer successfully pays for an order. If an order is canceled or partially refunded, the corresponding refund transaction will also be recorded here.",
    vendor_bank: "Vendor Bank",
    order_fee: "Order Fee",
    order_refund: "Order Refund",
    reverse_fund: "Fund Reversal",
    payout: "Payout",
  },

  /**
   * @see BPageMarketplacePayouts
   */
  marketplace_payouts: {
    title: "Payout History",
    subtitle:
      "This feature streamlines accounting for you and your vendors by keeping a detailed record of all transactions. Payments can be processed manually through bank transfers or other methods, or automatically managed by payment providers that support split payments, like Stripe.",
    top_up_vendor_action: "Top Up Vendor Account",
  },

  /**
   * @see BPageMarketplacePricings
   */
  marketplace_pricings: {
    title: "Pricing Plans",
    subtitle:
      "Set up pricing models for your marketplace, like a 5% margin fee for digital products. This makes pricing management faster and more efficient.",
    add_pricing_action: "Add Pricing Plan",
  },

  /**
   * @see BVendorPricingAdd
   */
  vendor_pricing_add: {
    title: "Marketplace Pricing Model",
    subtitle:
      "When you assign a pricing model to vendor products, the price will automatically be calculated as Vendor Price * (1 + Commission%).",
    delete: {
      subtitle:
        "Deleting a pricing model will affect all vendor products linked to it. Before removing a pricing model, make sure to update all vendor products using it and assign them a different pricing model.",
      remove_pricing_action: "Remove Pricing Model",
    },
    inputs: {
      title: {
        placeholder: "e.g., Digital Products Class...",
      },
      description: {
        placeholder: "You can add a note here...",
      },
      accept_delete: {
        true_description: "I want to delete this pricing model.",
        true_title: "Confirm Pricing Model Removal",
      },
    },
  },

  /**
   * @see BVendorPayoutAdd
   */
  vendor_payout_add: {
    vendor: {
      title: "Vendor",
      subtitle:
        "Select the vendor you wish to transfer funds to. Once selected, available payment options will be displayed. If you've enabled payout-capable payment gateways, those options will also appear here.",
    },
    vendor_wallet: "Vendor Wallet",
    vendor_bank_account: "Vendor Bank Account",
    with_balance_tooltip:
      "When you connect payout services like Stripe Connect, we retrieve and display the available balance in your Stripe account for reference.",
    with_balance: "With Balance",
    without_balance: "Without Balance - Fast Mode",
    bank_transfer: {
      title: "Bank Transfer",
      subtitle:
        "This is a record of payment history. No actual money will be transferred to the vendor by the system; you must manually pay your vendors.",
    },
    vendor_bank: "Vendor Bank",
    gateway_in_debug_mode_warning:
      "Since the payment gateway is currently in debug mode, funds will not be transferred to a real account.",
    payment: {
      title: "Payment",
      subtitle:
        "Choose the currency and enter the amount you want to transfer to the vendor. If you enter a negative amount, the funds will be withdrawn from the vendor's wallet. For connected accounts with payout options, the funds will be deducted from the connected account, such as the vendor's Stripe account.",
    },
    history: {
      title: "History",
      subtitle:
        "Part of this payment has been refunded through a reversal transfer, meaning the balance has been deducted from the vendor's account and returned to your account.",
    },
    refund: {
      title: "Refund",
      subtitle:
        "The refunded amount will be deducted from the vendor's balance. All payments (or remaining amounts) in the vendor's account (like Stripe Connect) will be refunded through a reversal transfer.",
    },
    inputs: {
      vendor: {
        placeholder: "Select a vendor...",
      },
      note: {
        placeholder:
          "You can add a note here... This note is not visible to the vendor.",
      },
      accept_refund: {
        true_description: "I want to cancel this payment.",
        true_title: "Cancel & Refund Payment",
      },
    },
    notifications: {
      reverse_fund_success: {
        title: "Fund Reversed",
        message:
          "The vendor's fund reversal has been completed successfully, with money transferred from the bank to the wallet and added to the wallet balance.",
      },
      payout_success: {
        title: "Payout",
        message:
          "The vendor's payout has been successfully processed and added.",
      },
    },
  },

  /**
   * @see BShopQuotaImporter
   */
  quota_importer: {
    quota: "Quota",
    max_batch_msg: "Maximum number of items you can import in a single batch.",
    max_daily_limit_msg: "Maximum number of items you can import in a day.",
    extra_daily_limit_msg: "Additional items allowed beyond the daily limit.",
    add_items_today_msg: "Items added today.",
    file_statistic_msg: "Statistics for this file.",
    used_quota: "Used quota",
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

    pickup_ready_action: "Pickup Ready",
    pickup_ready_action_subtitle: "The order is ready for customer pickup.",

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

    verify_delivery_input: {
      true_title: "Confirm Delivery Completion",
      true_description:
        "I confirm that the order has been delivered to the customer.",
    },
  },

  /** {@see BShopHomeSelect} **/
  shop_home_edit: {
    title: "Home page setting",
    sub_title:
      "Set up the default page for your website in this section. You also have the flexibility to designate a custom homepage for each domain separately through the domain settings.",

    default_home: "Default home page",
    default_home_placeholder: "Shop page is the website home page",
  },
  /**
   * @see OReferralBank
   */
  referral_bank: {
    title: "Referral Dashboard",
    subtitle:
      "Upon your request, the commission fee will be paid to the bank account specified by you. Please provide your bank information here.",
    no_bank_info: "No bank info!",
    actions: {
      edit_my_bank_info: "Edit My Bank Info",
    },
    bank_dialog: {
      title: "My Bank Details",
      info: {
        title: "Bank",
        subtitle:
          "Please input your bank information here. We will use this information to transfer funds. Ensure that the bank account is in your name or under your business name, as applicable.",
      },
      inputs: {
        name: {
          label: "Bank Name",
          message: "The full name of the bank where the account is held.",
        },
        holder_name: {
          label: "Account Holder Name",
          message:
            "The full name of the person or entity that holds the account.",
        },
        account_number: {
          label: "Account Number",
          message:
            "The unique number associated with the specific bank account.",
        },
        routing_number: {
          label: "Routing Number (USA) or Sort Code (UK)",
          message:
            "A number that identifies the specific bank branch (different terms are used in different countries).",
        },
        swift: {
          label: "SWIFT/BIC Code",
          message:
            "An international code used to identify banks globally, especially for international transfers.",
        },
        iban: {
          label: "IBAN (International Bank Account Number)",
          message:
            "Used primarily in Europe, the IBAN is an internationally agreed-upon system for identifying bank accounts across national borders.",
        },
        contact: {
          label: "Contact Information",
          message: "Phone number or email address associated with the account.",
        },
        note: {
          label: "Note",
          message: "Extra note",
        },
      },
    },
    notifications: {
      save: {
        message: "Your bank info been successfully updated.",
      },
    },
  },

  /**
   * @see OReferralTier
   */
  referral_tier: {
    message:
      "From all service fees, subscription and other payments made by your referrals.",
  },

  /**
   * @see ReferralTiers
   */
  ReferralTiers: {
    Bronze: {
      title: "Tier Bronze",
      description:
        "You are in the Bronze Tier. You have earned 2% commission from your referrals.",
    },
    Silver: {
      title: "Tier Silver",
      description:
        "You are in the Silver Tier. You have earned 4% commission from your referrals.",
    },
    Gold: {
      title: "Tier Gold",
      description:
        "You are in the Gold Tier. You have earned 6% commission from your referrals.",
    },
    Platinum: {
      title: "Tier Platinum",
      description:
        "You are in the Platinum Tier. You have earned 8% commission from your referrals.",
    },
    Diamond: {
      title: "Tier Diamond",
      description:
        "You are in the Diamond Tier. You have earned 10% commission from your referrals.",
    },
  },

  /**
   * @see OPageMonetize
   */
  page_monetize: {
    title: "Monetize",
    subtitle: "Spread access to business opportunities.",
  },

  /** {@see OPageMonetizeReferral} **/
  selldone_referral_page: {
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
  /** {@see OReferralTransactions} **/
  selldone_referral_payment: {
    title: "Withdrawals",
    subtitle:
      "It's the list of withdrawal transactions. When you transfer fund from referral wallet to your bank account or your Selldone wallet, it will be listed here.",

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
      "Sorry, no wholesaler stores were found. More stores will be added in the future, allowing you to include their products in your store.",
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
    price_commission: "Merchant commission",
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
  /** @see LMenuLeftPopupAppearance **/
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
          "You can set the template key and value here. The template code should be exactly what you set in your SMS service provider, and the <code>key</code> is what your provider wants to send the code through. If the <code>value</code> field of template is empty, then <code>{code}</code> will be considered as the template code.",
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
          subtitle: "You can copy and past this template to your SMS provider.",
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

    tabs: {
      preferences: "Preferences",
      templates: "Templates",
      provider: "Provider",
    },

    preferences: {
      title: "Notification emails",
    },
  },

  /**
   * @see BShopEmailProvider
   */
  shop_email_provider: {
    title: "Custom mail server",
    subtitle:
      "Connect your mail service provider to send emails via your custom domain.",
    provider: "Provider",
    enable_input: {
      false_description: "Your emails will be sent via your myselldone domain.",
      true_description: "Your emails will be sent via your custom mail domain.",
    },
    config: {
      title: "Configs",
      subtitle:
        "To configure your custom mail service for your shop, input your service API key along with other necessary settings.",
    },
    sender: {
      title: "From",
      subtitle:
        "You can configure the default sender's name and email address, which will be used for dispatching emails to your customers.",
    },

    inputs: {
      from: {
        label: "From Email",
      },
      from_name: {
        label: "From Name",
      },
    },

    actions: {
      send_test_email: "Send a test email",
    },

    messages: {
      provider_error_limit:
        "If your service exceeds 100 errors, it will be disabled automatically! You can reset errors to re-enable it.",

      encryption_ports_guide:
        "Email providers may offer SSL, TLS, or unencrypted connections based on available ports. If connecting results in an error, altering the encryption mode might resolve the issue. Standard <b>TLS</b> use Port : <b>587</b> and <b>SSL</b> use Port : <b>465</b>.",

      enable_receive_test:
        "After save changes, you will receive a test mail on <b>{email}</b>. Save changes before sending a test email with the new configuration.",
    },
  },

  /** @see InstagramViewMedias **/
  instagram: {
    title: "Sales on Instagram",

    add_product: "Add new product",
    create_product: "Create product",
    link_box_msg:
      "Put this link in your bio on Instagram, Telegram, or other social media so that your audience can find products faster and buy easier.",
    remove_account: "Change / Remove Instagram link",
  },
  /** @see BPageShopChannelInstagram **/
  shop_channel_instagram: {
    title: "Instagram Sales Channel",
    subtitle:
      "Create a dedicated category for your products, complete with images and videos, and share it across your social media. It's similar to Instagram and TikTok, but with full control, allowing you to directly sell your products.",
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
        "Do you need to modify the booking duration for the selected days?",
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
    invoice: {
      subtitle:
        "By using this form, you can create a payment link for a specific amount. It also makes tracking the invoice and confirming payment completion straightforward and easy.",
    },
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
    drag_sort_msg: "You can drag and sort files.",
    paid_mode_msg: "Users can download it only after purchasing the product.",
    free_mode_msg:
      "Users can download it for free. Sample files must be under 50 MB.",
    has_gust_shopping_msg:
      "Registered and guest users can download files since guest purchases are enabled in the shop's settings > flow.",
    only_registered_shopping_msg:
      "Only registered users can download sample files.",
    file_count_limit: "Files count limit",
  },

  /**
   * @see BProductLocationRestrictionsList
   */
  product_location_restrictions: {
    title: "Available Locations",
    subtitle:
      "If your product or service is only available in specific regions, defined by country and zip or pin codes, you can designate those locations here. These location restrictions are enforced at the product level. On the product page, customers will be prompted to select their location. If the product is available in their chosen area, they will be able to proceed with the purchase.",

    add_location_action: "Add Country",
    no_restriction: "No restriction",
    import: {
      title: "Load profile",
      subtitle: "Select a saved locations profile.",
    },
    export: {
      title: "Save profile",
      subtitle: "Store locations for future use.",
    },
    has_restriction_input: {
      title: "Has location restriction",
      description:
        "Customers can only purchase this product within the specified country and zip code, due to the established location restriction.",
    },
    zip_pin_code: "Zip / Pin Codes",
    no_country_selected_error:
      "Please include at least one country along with a list of zip/pin codes. Without it, this product will not be available.",
    tips: "Click on the <b>+ Add Country</b> button to start creating a new location set. Once you're done, you can save it by clicking on the top-right <b>⋮ Menu</b> and selecting <b>Save Profile</b>.",
    need_save_message:
      "The location restriction settings for the product have been changed. To preserve these changes, please click on the 'Save' button below.",

    add_dialog: {
      title: "Add Country",
      message:
        "Choose a country and click 'Add'. This will append the country to the table, allowing you to assign Zipcodes, Pin codes, City names, or Region names to it.",
    },
    save_profile_dialog: {
      title: "Add Locations Profile",
      message:
        "Please input a name to save this set of locations. This saved location set can be applied to other products, allowing for quick location loading with just a single click. If a profile with the provided name already exists, it will be updated with these new values.",
      title_input: {
        title: "Profile title",
        placeholder: "A category name, or store name, ...",
      },
    },
    load_profile_dialog: {
      title: "Load Locations Profile",
      message:
        "You can load locations by selecting a previously saved location set here.",

      select_input: {
        title: "Location Profile",
        placeholder: "Select a profile...",
      },
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

  /** {@see SInviteFriends} **/
  invite_friends: {
    title: "Tell about your business to the world and make money!",
    msg: "Refer your friends to Selldone and give them a $99 Company voucher when they sign up. Once they make their first transaction, you'll earn a lifetime commission from all their transactions. Visit our affiliate page to start earning today!",
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
   * {@see BPageShopIncentivesCoupon}
   */
  cashback: {
    add_new: "Add New Cashback",
    title: "Cashback Programs",
    boosted: "Boost (2x)",
    min_purchase: "Minimum Purchase",
    only_first_order: "Only First Order",
    total_cashback: "Total Cashback",
    delete_alert: {
      title: "Delete Cashback Program",
      message: "Are you sure to delete this cashback program?",
      action: "Yes, delete now",
    },
    notifications: {
      delete_success: "Cashback program deleted successfully.",
    },
  },
  /**
   * {@see BPageCashback}
   */
  shop_cashback: {
    title: "Cashback Program",
    up_to: "Up to",
    menu: {
      back: "Back Programs",
      dashboard: "Dashboard",
      orders: "Orders",
      edit: "Edit",
    },
    /**
     * {@see BPageCashbackDashboard}
     */
    dashboard: {
      chart_amount_buy: {
        label: "Buy",
        y: "Purchase amount {currency}",
      },
      chart_amount_cashback: {
        label: "Cashback",
        y: "Cashback amount {currency}",
      },
      chart_used: {
        label: "Used",
        y: "Times",
      },
    },
    /**
     * {@see BPageCashbackOrders}
     */
    orders: {
      title: "Cashback Orders",
      table: {
        amount_cashback: "Cashback Amount",
        payment_status: "Payment Status",
        date: "Date",
      },
    },
  },

  /**
   * {@see BCashbackAdd}
   */
  cashback_edit: {
    config: {
      subtitle: "Set the chasback percent, limit and its status here.",
    },
    percent_input: {
      title: "Cashback Percentage",
      message: "Enter the cashback percentage from 1% to 20%.",
    },
    currency_input: {
      message: "The cashback program will be available just for this currency.",
    },
    limit_input: {
      title: "Limit",
      hint: "Enter the maximum amount of cashback.",
      zero_message: "Enter 0 for unlimited cashback.",
    },
    duration: {
      title: "Duration Limit",
      subtitle: "Set duration of cashback program. It's optional.",
    },
    start_input: {
      title: "Start Date",
      placeholder: "Select start date...",
    },
    end_input: {
      title: "End Date",
      placeholder: "Select end date...",
    },
    design: {
      subtitle:
        "Set title and short description for the cashback program. These information will be shown to customers.",
    },
    title_input: {
      title: "Title",
    },
    description_input: {
      title: "Description",
    },
    constraints: {
      subtitle: "Set the constraints for the cashback program.",
    },
    min_purchase_input: {
      hint: "Enter the minimum purchase amount for cashback program.",
      title: "Minimum Purchase",
    },
    only_first_buy_input: {
      false_desc: "The cashback program will be available for all orders.",
      true_desc:
        "The cashback program will be available just for the first order.",
      true_title: "Only First Order",
      false_title: "All Orders",
    },
    qualify_input: {
      false_title: "All Customers",
      true_title: "Qualify Customers",
      true_msg:
        "The cashback program will be available just for the customers who are qualified.",
    },
    club: {
      subtitle:
        "Set the club for the cashback program. The cashback program will be available just for the customers who are in this club.",
    },
    cluster: {
      subtitle:
        "By associating a cluster with the cashback program, you can manage it more effectively.",
    },
    notifications: {
      add: "Cashback program added successfully.",
      edit: "Cashback program updated successfully.",
    },
    enable_input: {
      true_msg: "The cashback program is active and customers can use it.",
      false_msg:
        "The cashback program is inactive and customers can not use it.",
    },
    boosted_input: {
      false_title: "Normal",
      true_title: "Boost (2x Cashback)",
      true_msg:
        "The cashback program is in boost mode and customers will receive 2x cashback.",
      false_msg:
        "The cashback program is in normal mode and customers will receive normal cashback.",
    },
  },

  /**
   * @see BOrderPaymentRowPayment
   */
  row_payment: {
    actions: {
      refund: {
        title: "Refund Payment",
        subtitle: "Partial or full refund supported.",
      },
      delivery: {
        title: "Confirm On Delivery",
        subtitle: "You can manually confirm delivery for payment provider.",
      },
    },
  },

  /**
   * @see BOrderPaymentActionsRefundDialog
   */
  payment_refund_dialog: {
    title: "Refund Payment",
    message:
      "For security reasons, only orders paid within the last 7 days are eligible for refunds.",
    payment_amount: "Payment Amount",
    total_refund_amount: "Total Refunded Amount",
    can_refund: "Can Refund",
    refund_amount: "Refund Amount",
    verify: {
      title: "Verify Refund",
      description:
        "I confirm that the refund amount is correct and I want to proceed.",
    },
    action: "Refund Now",
  },

  /**
   * @see BOrderPaymentActionsDeliveryDialog
   */
  payment_delivery_dialog: {
    title: "Customer Delivery Confirmation",
    message:
      "Certain payment services require confirmation that the order has been delivered to the customer. We typically send this confirmation during the final step of order fulfillment when we receive the customer's delivery confirmation. However, if you need to perform this action manually, you can do so here.",
    verify: {
      title: "Verify Delivery",
      description:
        "I confirm that the order has been delivered to the customer.",
    },
    action: "Confirm Now",
  },

  /**
   * @see BPageProductCrossSelling
   */
  product_cross_selling: {
    title: "Cross Selling",
    add_new_actions: "Add New Product",
    subtitle:
      "In this section, you can add and manage cross-sell products for this product page. These products will be displayed as suggestions for customers to purchase alongside the main item. You can also set discounts to encourage and incentivize additional purchases. The system will showcase a maximum of 3 items for the customer to consider.",
    dialog: {
      edit_title: "Edit cross selling product",
      add_title: "Add new cross selling products",
      target: {
        title: "Target Product",
        subtitle:
          "Choose the products you'd like to promote as cross-sell options alongside this product.",
        select_products: "Select product(s)",
      },
      list: {
        title: "Target Product",
        subtitle: "This product has been chosen for cross-selling promotion.",
        manage_product: "Manage Product",
      },
      discount: {
        title: "Discount & Message",
        subtitle:
          "You have the option to include a message and offer a discount to motivate customers to buy the selected additional items. These incentives can help drive sales and enhance the overall shopping experience.",
        amount_input: {
          message:
            "The discount percentage will be applied to the product price after taking into account all existing discounts.",
        },
        mismatch_type_warning:
          "Discounts cannot be applied to other types besides the main product types, as the source and target items will not be placed in a same basket.",
        not_support_subscription_type_warning:
          "Setting discounts for cross-selling subscription products is not possible, as the pricing plans cannot be adjusted dynamically.",
        message_input: {
          message:
            "Craft a compelling and enticing title to capture customers' attention.",
          placeholder:
            "Bundle & Save: Complete Your Look with Our Handpicked Selection!",
        },
      },
      action: {
        title: "Action",
        subtitle:
          'Modify the cross-selling product\'s action here. If your product requires the input of custom information, such as through a Valuation Form, do not choose "Add To Cart" as the action, as this may lead to errors.',
      },
    },
  },
  /**
   * @see BProductVariantsBulkAdd
   */
  product_variants_bulk_add: {
    title: "Add Variants in Bulk",
    variants: {
      title: "Variant Options",
      subtitle:
        "Select up to two variant options. After selection, you can choose which specific variants to create automatically.",
    },
    values: {
      title: "Variant Values",
      subtitle: "Enter the possible values for each variant option here.",
      prevent_duplicates_tips:
        "<b>Note:</b> We automatically check for existing variants to prevent duplicates.",
    },
    inventory: {
      title: "Initial Inventory",
      subtitle: "Set the starting inventory count for the new variants.",
    },
    add_variants_action: "Create Variants",
  },

  /**
   * @see CrossSellActionType
   */
  CrossSellActionType: {
    AddToCart: {
      title: "Add to cart",
      description:
        "Display the Add to Cart button directly. Note that this is not applicable for subscription products.",
    },
    ViewProduct: {
      title: "View Product",
      description:
        "Display a View More button that directs customers to the product page by opening a new window.",
    },
  },

  /**
   * @see BProductFlow
   */

  product_flow: {
    title: "Purchase flow",
    subtitle: "This is the purchase flow and health check of your product.",

    /**
     * @see BProductFlowRowConnect
     */
    connect: {
      subtitle: "This product has been added via <b>{name}</b>.",
      enable_msg: "This bridge to external service is enabled.",
      disable_msg: "This bridge to external service is disabled.",
      has_shipping_msg:
        "{name} support shipping. So you have the option to enable auto shipping calculation by {name} on the checkout page.",
    },
    /**
     * @see BProductFlowRowHealth
     */
    health: {
      title: "Product Health",
      available_in_stock_msg: "Product is available in stock.",
      out_of_stock_msg: "Product is out of stock.",
      file_count_msg:
        "{files_count} files with total {files_size} uploaded for this product.",
      no_file_uploaded_msg: "No file has been uploaded yet.",
      no_image_uploaded_msg:
        "Upload a product image to make it more attractive.",
    },
    /**
     * @see BProductFlowErrorsVendor
     */
    vendor_errors: {
      title: "Missing Vendors",
      subtitle:
        "This product currently has no associated vendors. For a product to be purchasable in the marketplace, it must have at least one vendor.",
      manage_vendors: "Manage Vendors",
    },

    /**
     * @see BProductFlowErrorsFile
     */
    file_errors: {
      title: "Missing Files",
      subtitle:
        "Currently, no files have been uploaded for this product. Please upload files to proceed.",
      manage_files: "Manage Files",
    },

    /**
     * @see BProductFlowRowPricing
     */
    pricing: {
      title: "Pricing",
      no_product_price_msg: "The default product price not set yet!",
      listing_pricing_msg: "Listing pricing:",
      has_valuation_msg: "Product has valuation.",
      subscription_pricing_msg:
        "This product has {count} subscription pricing plans.",
      has_no_subscription_pricing_msg:
        "This product has no subscription pricing plans.",
    },
    /**
     * @see BProductFlowErrorsSubscription
     */
    subscription_errors: {
      title: "Missing Subscription Pricing Plans",
      subtitle:
        "This product has no subscription pricing plans. You need to add at least one subscription pricing plan to make this product available for subscription purchase.",
      pricing_plans: "Pricing Plans",
    },

    /**
     * @see BProductFlowRowLocation
     */
    location: {
      title: "Selling location restriction ● {status}",
      status: {
        has_restriction: "Available in {count} countries",
        no_restriction: "Not restricted",
      },
      available_countries_msg:
        "Shopping globally restricted to {count} countries. These countries are {countries}.",
      disable_for_all_countries_msg:
        "Shopping is disabled for all countries in your shop > locations setting.",
      location_is_not_in_permitted_shop_locations_msg:
        "You set {country} as a selling location but in the store level you not permit this country. Please check your store level settings.",
      shop_locations: "Shop Locations",
      product_locations: "Product Locations",
    },

    /**
     * @see BProductFlowErrorsLocation
     */
    location_errors: {
      title: "Available locations error",
      no_location_error_subtitle:
        "You have activated a location restriction for purchasing the product, but currently, no country is listed under this restriction. As a result, this product is unavailable for purchase by anyone.",
      invalid_location_error_subtitle:
        "The location restriction settings for your product contain an error: certain locations listed do not have any associated ZIP codes. Consequently, users are unable to select a ZIP code, rendering the product unavailable for purchase.",

      manage_locations: "Manage Locations",
    },

    /**
     * @see BProductFlowRowTax
     */
    tax: {
      title: "Subscription tax",
      default_shop: "Default Shop Tax",
      tax_profiles: "Tax Profiles",
      description: {
        subscription_tax_msg:
          "We can apply tax only on the payment creation step.",
        dedicated: "Dedicated",
        is_disabled: "This tax profile is disabled!",
        tax_is_based_on_location: "Tax: Location based",
        shipping_tax_is_based_on_location: "Shipping: Location based",
        included_in_price: "Included in price.",
      },
    },

    /**
     * @see BProductFlowRowVendor
     */
    vendor: {
      vendor_owner_msg: "This product belongs to <b>{vendor}</b>.",
      has_vendors_msg: "There is {count} vendors for this product.",
      no_vendor_msg:
        "You haven't assigned a vendor to this product, so customers are unable to purchase it.",
      add_vendors: "Add Vendors",
    },
  },

  /**
   * @see BPageProductTemplate
   */
  product_template: {
    title: "Product Page Template",
    subtitle:
      "You can embed a page within your product page for an enhanced presentation. The optimal approach is to create pages featuring a transparent background and 1 to 3 sections tailored to each product category. Then, assign one page to multiple products for a consistent and appealing display.",
    edit_page: "Edit Page",
    list_of_pages: "List of Pages",
  },
  /**
   * @see BPageProductEmbed
   */
  product_embed: {
    subtitle:
      "You can easily embed a product or a list of products in your blog or other web pages by simply copying and pasting the codes we provide. Although this feature is still in its early stages, we are actively working to expand its functionality beyond what is currently available elsewhere. While it currently offers limited capabilities, we have plans to introduce more templates and customization options in the future.",
    card: {
      title: "Minimal",
      description:
        "Generate HTML code to add product cards in other platforms and HTML pages.",
    },
    iframe: {
      title: "Iframe",
      description:
        "Generate the iframe code to display comprehensive product details in an embedded window.",
    },
  },

  /**
   * @see BPermissionStaffAddDialog
   */
  permission_staff_add: {
    title_new: "New Staff",
    title_edit: "Edit Staff",

    staff: {
      title: "Add Staff & Access",
      subtitle:
        "All users with staff access can log in to your dashboard and see financial information. To add users with limited access, define Role.",
      go_to_roles: "Go to Roles",
    },
    access: {
      customization_tips:
        "<b>Customization:</b> Click on each item to customize the default read/write access. Each row represents an access level corresponding to the main shop dashboard.",
      simplify_tips:
        "<b>Important!</b> We simplify the access control from over 300 to under 10 levels. More detailed and up-to-date access levels will be published in the documentation.",
      multi_permission_tips:
        "<b>Custom limits?</b> You can add more access to one user, so after adding the first access, create additional access with the same steps.",
      view_data: "View Data",
      apply_changes: "Apply Changes",
    },

    inputs: {
      email: {
        placeholder: "Email",
        label: "User Email Address",
      },
      level: {
        label: "Access level",
        placeholder: "Select a level...",
      },
    },

    actions: {
      add: "Add Staff",
    },
    notifications: {
      add_success: {
        title: "Access Granted",
        message: "New access has been successfully added.",
      },
      update_success: {
        title: "Access Updated",
        message: "Permissions have been updated successfully.",
      },
    },
  },

  /**
   * @see BCategoryEngineEditor
   */
  category_engine_editor: {
    title: "Extra Products Listing",
    subtitle:
      "Display products from various categories. You have the option to choose multiple categories to showcase products or filter products by tags.",
    aut_add_sub_categories_tips:
      "You can automatically add all subcategories to the current category by clicking the button below.",
    inputs: {
      categories: {
        label: "Categories",
        messages: "Products in these categories will be shown.",
        placeholder: "Select categories...",
      },
      tags: {
        label: "Product tags",
        messages: "Products with these tags will be show.",
        placeholder: "Wire tags here and press enter. ex. new collection",
      },
    },
    actions: {
      save_engine: "Save Engine",
      auto_add_subcategories: "Auto add sub-categories",
    },
  },

  /**
   * @see SProductsSortView
   */
  products_sort_view: {
    search_tips: {
      title: "Search Tips",
      normal:
        "<b>General Search: </b>Search by Title, MPN, SKU, Brand, or Tags.",
      product:
        '<b>Exact Product ID: </b>Use P+Product ID to find a specific product, e.g., <b class="text-green">P</b><i class="text-yellow">360</i>.',
      quotes:
        '<b>Exact Phrase: </b>Use quotation marks to search for an exact phrase, e.g., <b class="text-green">"</b><i class="text-yellow">your text here</i><b class="text-green">"</b>.',
      tax: '<b>Tax Profile: </b>Search for products with a specific tax profile using "tax:", e.g., <b class="text-green">tax:</b><i class="text-yellow">tax profile name</i>.',
      new_products:
        '<b>New Products: </b>Find products added within a specific date range, e.g., <b class="text-green">new~</b><i class="text-yellow">2023-08-10</i><b class="text-green">~</b><i class="text-yellow">2023-08-20</i>.',
    },
  },

  /**
   * @see LAugmentForm
   */
  augment_form: {
    title: "Augmentation",
    subtitle:
      "Input the key that will be swapped with its corresponding value in the page content. Keys should be max 32 characters.",
    add_caption: "Add New Item",
    add_sub_caption: "Add custom key-value pair.",
    add_dialog: {
      title: "Select input type",
      html: {
        title: "Text & Html",
        subtitle: "The item's value can be designated as either text or HTML.",
      },
      image: {
        title: "Image",
        subtitle: "You can upload an image.",
      },
    },
    help_dialog: {
      title: "How to use dynamic content",
      how_it_works_tips:
        "In the landing pages, you have the flexibility to designate dynamic placeholders for both text and images. These placeholders serve a significant role in customizing the content according to the context.   The dynamic nature of these placeholders allows them to be populated by augmentation values, which can vary based on different factors. For example, the augmentation values might be different for each product or category. The real advantage of this feature comes into play when you have a variety of items with differing attributes. You can effectively utilize these dynamic placeholders to personalize and enhance the display of each item, thereby creating a unique and interactive experience on your landing pages.",
      assign_tips:
        "To assign dynamic values to images, click on the feeder button located on the left side of the section.",
      set_dynamic_image_tips:
        "You now have the ability to modify the image URL and assign it a dynamic value.",
      enter_values_tips:
        "For every product, you have the ability to assign dedicated key-value pairs.",
      result_tips:
        "This is the final outcome of the page, where placeholders have been substituted with augmented values.",
    },
  },

  /**
   * @see BLogisticProfileEditor
   */
  logistic_profile_editor: {
    languages: {
      title: "Multi Language",
      subtitle:
        "This is the list of content languages. You can set different content for the logistics profile in each language.",
      add_caption: "Add new article",
      no_more_language: "No more language!",
    },
    content: {
      title: "Content",
      subtitle:
        "You can customize the content for the logistics profile in multiple languages.",

      language_input: "Current article language",
      delete_article: "Delete Article",
      menu_tooltip: "Auto translate / Delete article",
    },
    translate_to: "Translate to",
    notifications: {
      translate: {
        message: "Article translation completed successfully.",
      },
      save_article: {
        message: "Article has been saved successfully.",
      },
      delete_article: {
        message: "Article has been deleted successfully.",
      },
    },
    delete_dialog: {
      message: "Are you sure to delete this article for ever?",
      action: "Yes, delete now",
    },
  },

  /**
   * @see LogisticProfilePage_Products
   */
  logistic_profile_products: {
    title: "Products",
    subtitle: "List of products associated with this profile.",
  },
  /**
   * @see LogisticProfilePage_Setting
   */
  logistic_profile_setting: {
    title: "General information",
    inputs: {
      name: {
        message:
          "This name shows to you and will not be revealed to the public.",
      },
      accept_delete: {
        true_description:
          "This action will remove all articles and profiles links.",
        true_title: "I verify to remove this connection.",
      },
    },
    actions: {
      remove: "Remove profile & relations",
    },
  },

  /**
   * @see BPageShopLogisticProfiles
   */
  shop_logistic_profiles: {
    title: "Logistics Profiles",
    add_caption: "Add new Profile",
    subtitle:
      "You can create and edit the warranty and return policy for products here and assign it to any products. You can define different warranty policies for different types of products.",
    add_dialog: {
      title: "Create new logistic profile",
      config: {
        title: "General information",
        subtitle:
          "Choose the profile type. It can be a guide, warranty, or any other content and material commonly shared among multiple products.",
      },
      article: {
        title: "Article",
        subtitle:
          "You can add more languages after creating this logistic profile.",
      },
      inputs: {
        name: {
          message:
            "This name shows to you and will not be revealed to the public.",
          placeholder: "Enter a name for the profile...",
        },
      },
    },
  },

  /**
   * @see BPageShopLogisticIncludes
   */
  shop_logistic_includes: {
    title: "Included Items Management",
    add_caption: "Add new item",
    subtitle:
      "Here, you can manage the items included in your products. To ensure a flawless appearance for your store, consistently use items with similar image patterns, such as wireframes, across all products.",
    empty_list_msg: "List of included items...",
    notifications: {
      delete: {
        message: "The item has been deleted.",
      },
    },
    delete_dialog: {
      title: "Delete included item",
      message:
        "Are you certain you want to permanently delete this item? Please note that it will also be removed from all associated products!",
      action: "Yes, Delete now",
    },
    actions: {
      edit_linked_page: "Edit linked page",
    },
  },

  /**
   * @see BIncludeItemAdd
   */
  include_item_add: {
    dialog_title_edit: "Edit included item",
    dialog_title_add: "Create new included item",

    title: "Included item",
    subtitle:
      "Choose a brief title, ideally with 2 to 3 words at most. Use square images, as we will auto-resize uploaded pictures to a 256x256 square format. For the best appearance across all templates, employ minimalistic images with transparent backgrounds and sustain a uniform pattern throughout your products.",
    inputs: {
      title: {
        placeholder: "Concise title displayed on product page...",
      },
      code: {
        placeholder: "Unique code, ex. mobile_cable_usb",
        hint: "Use this code to streamline the search process for locating items.",
      },
      description: {
        placeholder: "A short description about this item...",
        hint: "Description will be used for SEO and maybe visible to users on some custom layouts in the product page.",
      },
      image: {
        message: "Max image size: 1MB",
      },
      path: {
        label: "Page path",
      },
    },
    mode: {
      no_link: {
        title: "No link",
      },
      external_link: {
        title: "External link",
        description: "Set a link to an external url.",
        tips: "You can attach any URL to the item. When users click on the item on the product page, they will be redirected to that link.",
      },
      internal_link: {
        title: "Internal link",
        description:
          "Create dynamic page by provided augment data for this item.",
        tips: "You can link a landing page with the profile and set a custom path and dynamic content for it. Selldone will generate a dynamic link for the item.",
      },
    },
    notifications: {
      add: {
        message: "The included item has been added successfully.",
      },
      edit: {
        message: "The included item has been updated successfully.",
      },
    },
  },
  /**
   * @see BPageShopLogisticReturns
   */
  shop_logistic_returns: {
    title: "Returned Orders",
    subtitle:
      "Your customers can return their physical orders, and you can view return requests on the order processing page or access a complete list of returned orders here.",
  },
  /**
   * @see OReferralFees
   */
  referral_fees: {
    title: "Commissions",
    subtitle:
      "The list of all commissions you have earned from your referrals. It takes up to 30 days for the commission to be approved and transfer to your wallet.",
  },
  /**
   * @see OReferralWallets
   */
  referral_wallets: {
    title: "Wallets",
    subtitle:
      "Here you can see the commission fees you have earned. You can transfer your commission fees to your bank account or your Selldone wallet.",
    no_commission_yet: "You have not received any commission yet.",
    no_wallet: "No Wallet!",

    withdraw_dialog: {
      title: "Withdraw Commission Fees",

      need_bank_info_message: "Please enter you bank info first.",

      to_wallet: {
        title: "To Wallet",
        subtitle:
          "With this option, you can transfer commission fees to your Selldone wallet. Please make sure that a wallet is connected as your gift wallet, and that it operates with the same currency.",
      },
      to_bank: {
        title: "To Bank",
        subtitle:
          "With this option, you can transfer commission fees to your Selldone wallet. Please make sure that a wallet is connected as your gift wallet, and that it operates with the same currency.",
      },
      inputs: {
        verify_to_wallet: {
          true_description:
            "I want to transfer my commission to my Selldone wallet.",
        },
        verify_to_bank: {
          true_description:
            "I verify my bank info and I want to transfer my commission to my bank account.",
        },
      },
      actions: {
        withdraw_to_wallet: "Withdraw to wallet",
        withdraw_to_bank: "Withdraw to bank",
      },
    },
    notifications: {
      request_transfer_to_bank_success:
        "Your request has been successfully received, and we will review it.",
    },
  },

  /**
   * @see OPageMonetizeReferral
   */
  monetize_referral: {
    copy_box: {
      message: "You can add <b>?ref={code}</b> to any selldone url.",
    },
    intro: {
      title: "Join the Selldone Affiliate Program",
      message:
        "The Selldone Affiliate Program is simple and straightforward, designed for you to earn effortlessly. Share your unique affiliate link to invite new users to Selldone, and you'll earn a commission from every transaction they make—forever. This includes earnings from subscriptions, service fees, shop upgrades, and all other revenue streams. Start earning a share of the revenue without any limits on time or earnings. Join us and turn your network into a steady income!",
      why_join_selldone_affiliate: "Why is this a unique opportunity?",
      reasons: [
        "It lasts forever!",
        "Covers all subscription and transaction fees. Literally every payment of the user on Selldone.",
        "We send a free $99 voucher to anyone who registers using your link.",
        "When your tier upgrades, you will earn at the new rate from all previously referred users.",
      ],
    },
  },

  /**
   * @see LMenuLeftAssets
   */
  l_menu_left_assets: {
    no_asset_uploaded: "No asset uploaded yet.",
  },

  /**
   * @see LMenuTopHome
   */
  l_menu_top_home: {
    hot_keys: "Hotkeys",
    click_to_view_all: "Click to view all...",
    clone_tooltip: {
      title: "Duplicate Style",
      subtitle:
        "Use this tool to replicate styles such as fonts, backgrounds, margins, and borders. Follow these steps to duplicate styles:",
      step_1:
        "Activate the tool and hover your mouse over text, columns, or images; the cursor will change to a pipette.",
      step_2: "Click on the element whose style you want to copy.",
      step_3:
        "The cursor will change back to a palette; click on the element where you want to apply the copied style.",
    },
    show_side_menu_tooltip: {
      subtitle:
        "Toggle the visibility of the side menu, which includes all section categories for building your page.",
    },
    sort_tooltip: {
      subtitle:
        "Enable this feature to easily rearrange and organize sections by dragging them.",
    },
    edit_mode_tooltip: {
      title: "Edit / Preview Mode",
      edit_mode_title: "Edit Mode",
      edit_mode_msg: "All editing tools will be displayed.",
      view_mode_title: "Preview Mode",
      view_mode_msg:
        "View your page as users would see it by hiding extra editing tools and empty text areas.",
    },
    repository_tooltip: {
      title: "Prebuilt Sections",
      subtitle:
        "Toggle the display of pre-designed sections. These sections are created using the standard sections available in the left menu, showcasing the flexibility of this page builder.",
    },
    live_view: {
      title: "Live Preview",
      subtitle: "See updates in real-time as you edit your page.",
    },
    hotkeys_dialog: {
      title: "Keyboard Shortcuts",
      augment_tips:
        "You can load dynamic content onto your page and replace it with <b>augment</b> values. Augment is used for custom dynamic pages such as <b>Products</b>, <b>Categories</b>, and <b>Include Items</b>. To set an image to load dynamically, click on <b>Feeder</b> and select <b>Dynamic Source</b> for that image.",
    },
    hotkeys: {
      ctrl_b: "Toggle bold on/off for selected text | <b>Make me bold</b>",
      ctrl_i: "Toggle italics on/off for selected text | <i>Make me italic</i>",
      ctrl_l:
        "Toggle strikethrough on/off for selected text | <s>Strike through me</s>",
      ctrl_u: "Toggle underline on/off for selected text | <u>Underline me</u>",
      ctrl_1:
        "Decrease font size of selected text | <small>Make me small</small>",
      ctrl_2: "Increase font size of selected text | <big>Make me big</big>",
      ctrl_r: "Remove all formatting from selected text | Clean all styles",
      ctrl_s: "Save the page",
      tab: "Switch between scale modes",
      ctrl_e: "Activate or deactivate clone style mode",
    },
  },

  /**
   * @see LPageEditorRepository
   */
  l_page_editor_repository: {
    title: "Drag & Drop",
    subtitle: "Pre-Built Sections",
    add_dialog: {
      title: "Add Custom Section",
      configuration: {
        title: "Settings",
        subtitle:
          "You can save custom-designed sections for future use in your page designs. These saved sections will be accessible to all administrators in this store.",
      },
      image: {
        title: "Image",
        subtitle: "Public image displayed in the list.",
      },
      code: {
        title: "Code",
        subtitle:
          "You can copy and paste the element code from the left side sections in the page builder.",
      },
      inputs: {
        title: {
          label: "Title",
          message: "This is the public title.",
        },
        tags: {
          label: "Tags",
          message: "Used for searching and categorizing elements.",
        },
        section: {
          message: "Copy the section from the page builder.",
        },
      },
    },
  },

  /**
   * @see BPageMarketplaceVendors
   */
  marketplace_vendors: {
    title: "Vendors List",
    subtitle:
      "Add vendors here, then assign them to products in the Product Dashboard > Vendors.",
    add_new_vendor_action: "Add New Vendor",
    status_tooltip: {
      title: "Vendor Status",
      ACCEPTED: "The vendor has access to their panel.",
      REJECTED: "The vendor request has been rejected.",
      PENDING: "The request is awaiting a decision from the vendor.",
    },
    number_of_products: "Number of Products",
    invited: "Invited",
    no_pricing: "No Pricing",
    no_pricing_tooltip: {
      title: "Default Pricing Plan",
      subtitle: "Please set a default pricing model for the vendor.",
    },
    updated_products_tooltip: {
      title: "Products updated in the last 24 hours",
    },
    added_products_tooltip: {
      title: "Products Added in the Last 24 Hours",
    },
    access_tooltip: {
      title: "Panel Access",
      subtitle:
        "The vendor has access to their panel. You can edit this in Vendor > Access tab.",
    },
    reject_by_user_tooltip: {
      title: "Rejected by User",
      subtitle:
        "The user rejected the request to become a vendor and access this vendor.",
    },
    download_all_vendors: "Download all vendors",
    bulk_import: "Bulk import (Excel)",
  },

  /**
   * @see BShopLicenseNeedUpdateOverlay
   */
  shop_license_need_update_overlay: {
    title: "License Upgrade Required!",
    subtitle:
      "Your current license does not meet the requirements of your selected business model. Please upgrade your license to the Enterprise plan.",
  },

  /**
   * {@see BOrderChatBox}
   */
  b_order_chat_box: {
    title: "Quick Actions",
    subtitle:
      "You can send a status update email to the buyer with just one click. Additionally, you can define common messages here to reuse, so you don't have to rewrite them each time.",
    send_update_email_action: "Send Update Email",
    add_template_action: "Add Message Template",

    notifications: {
      add_chat_success_message: "Message has been added successfully.",
    },

    send_update_email: {
      title: "Order Update Email",
      need_set_service_alert: {
        message:
          "Please set your email service provider to allow the email to be sent.",
        action: "Go to settings",
      },
      send_action: "Send Update Email",

      notifications: {
        send_success_message: "Email has been sent successfully.",
      },
    },
    add_template: {
      edit_title: "Edit Message Template",
      add_title: "Add Message Template",
      message:
        "You should set a title and message body here. The title only be used for your reference and will not sent to the customer.",

      save_action: "Save Template",
      add_action: "Add Template",

      notifications: {
        save_success_message: "Template has been saved successfully.",
      },

      inputs: {
        title: {
          label: "Template Title",
          placeholder: "Write a short title...",
        },
        body: {
          label: "Template Message",
          placeholder: "Write your message here...",
          messages:
            "You can set dynamic values by {order_id} and {buyer_name}.",
        },
      },
    },
  },

  /**
   * {@see BOrderShare}
   */
  b_order_share: {
    title: "Order Link",
    subtitle: "You can share the order link with the customer.",
    guest_checkout_message:
      "Guest shoppers can automatically view their order in the same browser.However, if the customer is a guest and you need to share the order details, you can create a secure link for them.",
    authentication: "Authentication",
    guest: "Guest",
    click_to_create: "Click to create...",
    valid_for_30_days: "valid for 30 days",
    notifications: {
      secure_link_created: "Secure link has been created successfully.",
    },
  },

  /**
   * Auto fill suggestions
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

    /**
     * Expert Contract
     */
    expert_contract: {
      title: [
        "Marketplace Setup Services Agreement",
        "Shop Configuration Contract",
        "Print-On-Demand Services Agreement",
        "Digital Marketing Service Agreement",
        "E-commerce Platform Setup Agreement",
        "Expert Consultancy Contract for Business Owners",
        "Service Agreement for Marketplace Configuration",
        "Shop Setup and Configuration Services Contract",
        "POD Service Provision Agreement",
        "Marketing Strategy Implementation Agreement",
        "Business Development Service Contract",
        "E-commerce Store Setup Agreement",
        "Expert Service Provision Agreement",
        "Business Solutions and Setup Contract",
        "Custom Shop Setup Services Agreement",
        "Marketplace Optimization Service Agreement",
        "Consulting and Setup Services Contract",
        "POD Integration Services Agreement",
        "Marketing and Promotion Services Contract",
        "Business Expansion Service Agreement",
      ],
    },

    /**
     * Account
     */
    account: {
      account_name: [
        "Main Wallet",
        "Business Account",
        "Personal Wallet",
        "Savings Wallet",
        "Expense Account",
        "Primary Wallet",
        "General Account",
        "Reserve Wallet",
        "Transaction Wallet",
        "Fund Account",
      ],
    },

    /**
     * Cashback
     */
    cashback: {
      title: [
        "Shop & Earn Cashback",
        "Loyalty Rewards Cashback",
        "Exclusive Cashback Offers",
        "Cashback Bonanza",
        "Instant Cashback Deals",
        "Seasonal Cashback Savings",
        "Double Cashback Days",
        "Cashback on Every Purchase",
        "Cashback Frenzy",
        "VIP Cashback Program",
        "Limited Time Cashback",
        "Cashback Rewards Club",
        "Shop More, Save More",
        "Ultimate Cashback Rewards",
        "Cashback Extravaganza",
      ],
      description: [
        "Earn cashback on every purchase!",
        "Get rewarded for your loyalty.",
        "Exclusive cashback offers just for you.",
        "Enjoy great savings with cashback rewards.",
        "Instant cashback on all your favorite items.",
        "Save more with seasonal cashback deals.",
        "Double your cashback on special days!",
        "Earn cashback every time you shop.",
        "Join the cashback frenzy today!",
        "VIP members enjoy exclusive cashback.",
        "Hurry! Limited time cashback offers.",
        "Join our Cashback Rewards Club now.",
        "The more you shop, the more you save.",
        "Unlock the ultimate cashback rewards.",
        "Experience the best cashback deals around.",
      ],
    },

    /**
     * Page
     */
    page: {
      prompts: [
        "Welcome to {shop} - Explore Our Distinctive Range of Items",
        "{shop} - Your Ultimate Source for Quality Merchandise and Outstanding Service",
        "Exclusive Deals and Savings Only at {shop} - Seize the Opportunity!",
        "Get to Know {shop}'s Dedication to Eco-friendliness and Ethical Practices",
        "Become a Part of the {shop} Family - Subscribe to Our Newsletter for Updates",
        "Dive into Top Picks and Highly-rated Goods at {shop}",
        "Present Ideas and Creative Suggestions for All Events at {shop}",
        "Unrivalled Offers and Time-sensitive Specials at {shop} - Act Fast!",
        "{shop}'s Comprehensive Buying Tips and Product Evaluations - Shop with Confidence",
        "Reach Out to {shop} - We Strive to Deliver an Unmatched Shopping Experience",
      ],
    },

    /**
     * Cross-Selling
     */
    cross_selling: {
      message: [
        "Complete your look, grab the set!",
        "Save big with our bundle deals!",
        "Don't miss our perfect pairings!",
        "Enhance your purchase, add-ons await!",
        "Unlock exclusive savings, buy together!",
        "Complementary items, special discounts!",
        "Get more, spend less – bundle up!",
        "Limited-time offer: matched products!",
        "Upgrade your experience, combo deals!",
        "Discover our curated combos, save now!",
        "Pair it up for the ultimate combo!",
        "Shop smart, bundle and save!",
        "Double the value, double the fun!",
        "Your perfect match is here – shop now!",
        "Exclusive bundle pricing just for you!",
        "Maximize your savings with our combos!",
        "Enhance your collection with these picks!",
        "Curated for you: match and save!",
        "The perfect pair for a perfect day!",
        "Bundle your favorites for extra savings!",
      ],
    },

    /**
     * Cross-Selling
     */
    vendor_pricing: {
      title: [
        "Digital Goods",
        "Books",
        "Electronics",
        "Fashion",
        "Home Appliances",
        "Beauty Products",
        "Sports Equipment",
        "Toys & Games",
        "Groceries",
        "Furniture",
        "Automotive Parts",
        "Jewelry",
        "Health & Wellness",
        "Pet Supplies",
        "Office Supplies",
        "Music & Instruments",
        "Movies & TV Shows",
        "Software",
        "Art & Crafts",
        "Outdoor Gear",
      ],
    },

    /**
     * Template Message
     */
    template_message: {
      title: [
        "Order Confirmation",
        "Order Shipped",
        "Order Delivered",
        "Payment Received",
        "Order Cancelled",
        "Order Processing Delay",
        "Order On Hold",
        "Order Out for Delivery",
        "Return Processed",
        "Refund Issued",
        "Item Back in Stock",
      ],
      body: [
        "Hi {buyer_name}, your order #{order_id} has been confirmed! We’re processing it and will notify you when it’s ready to ship.",

        "Good news, {buyer_name}! Your order #{order_id} has been shipped. You can track it through your account. Thanks for shopping with us!",

        "Hello {buyer_name}, your order #{order_id} has been successfully delivered. We hope you enjoy your purchase. Thank you!",

        "Hi {buyer_name}, we have received the payment for order #{order_id}. Your order is now being processed and will be shipped soon.",

        "Dear {buyer_name}, we're sorry to inform you that your order #{order_id} has been cancelled. If you have any questions, please contact support.",

        "Dear {buyer_name}, we’re experiencing a delay with your order #{order_id}. We apologize for the inconvenience and are working to resolve it as soon as possible.",

        "Hi {buyer_name}, your order #{order_id} is currently on hold. Please check your account or contact support for further details.",

        "Hi {buyer_name}, your order #{order_id} is out for delivery and should reach you soon. Thank you for your patience!",

        "Dear {buyer_name}, we have processed the return for your order #{order_id}. If you have any questions, please contact support.",

        "Hi {buyer_name}, your refund for order #{order_id} has been issued. You should see the funds in your account soon.",

        "Hi {buyer_name}, the item from your order #{order_id} is back in stock! You can place a new order now if you’re still interested.",
      ],
    },
  },
};
