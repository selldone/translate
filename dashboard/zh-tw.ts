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
    pay_today: "今天付款",
    pay_yesterday: "昨天付款",
    pay_last30days: "最後 30 天付款",
    create_a_shop: "創建商店",
    start_free: "免費開始",
    featured_apps: "特色應用",
    more_apps: "更多的應用",
    my_public_profile: "我的公開個人資料頁面",
    product_admin: "產品管理",
    make_money_affiliate: "賺錢",
    see_live_shop: "查看線上商店",
    see_live_product: "查看線上產品",
    has_inputs: "有輸入項",
    main_domain: "主網域",
    domains: "域",
    home_page: "首頁",
    google_icon_font_sample: "谷歌字體範例",
    fontawesome_icon_font_sample: "Fontawesome (V6) 项目",
  },

  numbers: {
    infinite: "無限",
  },

  error: {
    not_fount_data: "未找到數據！",
    license_max_limit: "您的許可證已達到上限！",
    no_read_access: "不 项目 使用權",
    no_write_access: "不 项目 使用權",
    no_access: "不 使用權",
  },

  time_spans: {
    days_range: "天數範圍",
    today: "今天",
    yesterday: "昨天",
    last_7: "過去 7 天",
    last_14: "過去 14 天",
    last_30: "過去 30 天",
    last_90: "過去 90 天",
    custom: "風俗",
  },
  device_types: {
    desktop: "桌面",
    mobile: "移動的",
    tablet: "藥片",
  },

  create_website_action: "創建您的網站 — 免費",
  show_shops_action: "我的店鋪列表",

  // Companies:

  Youtube: "YouTube",
  Linkedin: "LinkedIn",
  Twitter: "Twitter",
  Facebook: "Facebook",
  Instagram: "Instagram",
  Reddit: "Reddit",
  Github: "GitHub",

  theme: {
    dark_mode: "黑暗模式",
    dark_mode_description:
      "如果您需要深色背景和白色文字顏色，請選擇此選項。",
    light_mode: "燈光模式",
    light_mode_description:
      "如果您希望背景為淺色且文字為黑色，請選擇此選項。",
  },

  ai: {
    remove_bg: {
      title: "移除背景",
      subtitle: "建立透明背景。",
    },
    reimagine: {
      title: "项目",
      subtitle: "創造 更多的 圖片 项目 新的 项目.",
    },
    upscale: {
      title: "项目",
      subtitle: "提高影像的解析度。",
    },
  },

  // ------------------ Pages Title ------------------
  page_titles: {
    home: "Seldone ╏ 快速成長公司的業務作業系統",
    login: "登錄",
    register: "登記",
    auth_2fa: "2因素認證🔐",
    academy: "博客",
    help: "幫助中心",
    price_list: "價位表",
    my_stores: "我的商店",
    roles: "我的角色",
    wallet: "我的錢包",
    personal_info: "個人資料 |了解客戶",
    companies: "我的公司",
    access_control: "訪問控制",
    security_center: "安全中心",
    gifts: {
      received: "禮品 |已收到",
      send: "禮品 |發送",
    },
    monetization: {
      linked_accounts: "貨幣化 |關聯賬戶",
      plans: "貨幣化 |計劃和鏈接",
    },
    affiliate: "附屬公司",
    avocado: "鱷梨——現代社交銷售渠道",
    guild: "公會——集體銷售渠道",
    partners_login: "合作夥伴 |客戶登錄",
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

  blank_is_all_products: "留空以包括所有產品！",

  // ---------------------------------------------

  /** @see ShopCautionHelper **/
  cautions: {
    title:
      "通過執行以下提示來專業地管理您的業務。繼續閱讀有關如何提高利潤率等的提示。一路走來，我們與您同在。",
    no_payment_method: {
      title: "付款方式",
      message:
        "您必須向您的商店添加付款方式。",
      action: "商店網關",
    },
    link_account: {
      title: "關聯帳號",
      message:
        "您必須將帳戶 ({currency}) 鏈接到您的商店。",
      action: "店鋪賬戶",
    },
    no_domain: {
      title: "添加域",
      message:
        "您可以將一個或多個個人域連接到您的商店。您的網站將安裝在您的域上。這個過程既快速又簡單。",
    },
    domain_not_approved: {
      title: "域驗證",
      message:
        "您的域 {domain} 尚未經過驗證。檢查 DNS 設置並確認域。",
    },
    no_currency: {
      title: "添加貨幣",
      message:
        "您必須為您的商店定義至少一種貨幣。",
      action: "貨幣管理",
    },
    no_primary_domain: {
      title: "主域",
      message:
        "請選擇一個域作為您的主域。通過單擊域名旁邊的星號按鈕，您可以選擇該域作為您商店的主域。這對搜索引擎至關重要。請注意，您的商店仍可通過所有活動域訪問。",
    },
    shop_complete: {
      title: "完整信息",
      action: "店鋪設置",
      location_msg: "添加您的位置",
      days_open_msg: "設置開放日",
      time_open_msg: "設置打開和關閉時間",
      description_msg: "寫一個關於您的業務的簡短描述",
      icon_msg: "設置您的商店徽標",
      shop_gateways_msg: "添加付款方式",
      socials_msg: "添加您的社交鏈接",
      clubs_msg: "設置客戶俱樂部",
      domains_msg: "添加自定義域",
      primary_msg: "將域設置為主域",
    },
  },

  /** @see BSupportMenu **/
  support: {
    request: "請求支持",

    category: "類別",
    title: "支持",
    message:
      "提出任何要求或問題。我們的支持團隊將為您提供指導。我們建議您在與您的請求相關的頁面中提出您的問題。例如，如果您對域設置有疑問，請在商店的域設置頁面中發送。",

    close_at: "{date}關閉",
    close_ticket_by_user: "謝謝，我得到了答案",
  },

  /** @see SShopProductRatingView **/
  surveys: ["很窮", "项目", "普通的", "项目", "项目"],

  /** @see SortView **/
  sort: {
    title: "排序方式",
    title_small: "排序方式..",
    nothing: "沒有什麼",
    most_views: "最多觀看次數",
    most_likes: "最受歡迎",
    most_recent: "最新",
    most_sell: "最暢銷",
    cheapest: "最便宜的",
    most_expensive: "最貴的",
    only_available: "可用的",
    view_mode: {
      normal: "普通的",
      grid: "網格",
      list: "列表",
      insta: "即時通訊",
    },
  },

  /** {@see Helps} **/

  helps: {
    title: "塞爾丹幫助中心",
    subtitle:
      "歡迎來到 Seldone 幫助中心，這是您在強大的商業作業系統中建立和管理線上商店的綜合指南。探索我們的資源、教學和最佳實踐，以簡化商店的設置、最大限度地提高效率並推動成長。",

    add_new_help: "新幫助",
    resources: "資源",

    categories: {
      Welcome: "開始使用",
      Setup: "設置",
      Sell: "銷售與市場營銷",
      Developer: "開發",

      Product: "產品和類別管理",
      Blog: "內容管理系統和博客",
      Order: "訂單履行中心",
      Channel: "銷售渠道",
      Accounting: "會計和付款方式",
      Incentives: "激勵措施",
      Marketing: "營銷與活動",
      Logistic: "物流與運輸",
      Customers: "客戶俱樂部和細分",
      Page: "登陸和自定義頁面",
      Access: "員工/API 訪問管理",
      Application: "應用",
      POS: "POS",
    },
    faq: "FAQ",
    github: "GitHub 项目",
    admin_api_app: "管理 API 網絡服務",
    shop_api_app: "商店 API 網絡服務",
    design_kit: "設計套件",
    community: "社區",
  },

  /** {@see Blogs} **/
  /** {@see InterestTopicsView} **/

  blogs: {
    title: "博客",
    subtitle:
      "商業課程、信心和創建蓬勃發展的企業所需的知識。",
    add_new_blog: "新博客",
    popular: "受歡迎的",
    topics: "話題",
    select_topics: "選擇你的工作。",
    select_job_topics: "選擇與工作相關的主題",
    select_interested_topics: "你對哪些話題感興趣？",
  },

  /** {@see ApiDocs} **/
  api: {
    title: "API 與集成",
    message:
      "Selldone 的主要功能之一是提供強大且安全的 API 來管理商店並將其連接到其他服務，例如倉儲、會計等。您也可以為商店設計自訂應用程式和 Web 應用程式。無需擔心伺服器和資料管理。只需使用網域 API。您將擁有管理使用者、身份驗證和其他網域功能的所有流程。",
  },

  /** {@see BPageShuttle} **/
  user_dashboard: {
    title: "我的班車",
    subtitle: "使用最新信息和清晰的前景管理您的業務。",
    menu: {
      affiliate: "附屬公司",
      monetize: "貨幣化",
      gift: "禮物",
      security: "安全",
      access: "使用權",
      business: "公司",
      wallet: "錢包",
      identification: "KYC",
      stores: "專賣店",
      roles: "角色",
      home: "家",
      expert: "專家",
      deals: "交易",
      providers: "提供者",
    },
    shops: {
      create_new: "創建新店",
      create_new_sub_need_initial_charge:
        "建造第一家商店是免費的。一家商店可能足以滿足您的業務，但如果您需要建立更多商店，則建立新商店的成本為 25 美元。我們從您的錢包賬戶中提取金額。",

      menu: {
        title: "我的商店",
        shops: "商店",
        new: "新的",
      },

      accept_invite_question: "你接受這個邀請嗎？",
      /** {@see BShopCard} **/

      shop_card: {
        menu_orders: {
          physical: "實物產品訂單",
          virtual: "虛擬產品訂單",
          files: "提交訂單",
          services: "服務訂單",
          subscriptions: "訂閱訂單",
        },
        status: "地位",
        license: "執照",
        volume: "已用空間",
        expire: "證件過期",
        products: "產品",
        page_views: "意見",
        user_behavior: "客戶行為",
        time_span: "從 {time} 到現在",
        finance_report: "財務報告",
        buys: "購買",
        payments: "付款",
        orders: "訂單",
        currency: "貨幣",
        no_payment: "不 支付!",
        no_purchase: "不 購買!",
      },
    },
  },

  widgets: {
    /** {@see BDashboardFeedback} **/
    overview: {
      title: "客戶反饋",
      title_small: "概述",
      wishlist: "願望清單",
      comments: "註釋",
      likes: "喜歡",
      favorites: "收藏夾",
      powers: "拍手",
      views: "意見",
      report_today: "今日報導",
      report_last7days: "過去 7 天報告",
      report_last30days: "過去 30 天報告",
    },
  },

  /** {@see BPageShop} **/
  admin_shop: {
    title: "店鋪",
    menu: {
      edit: "設置",
      automation: "自動化",
      application: "應用",
      access: "使用權",
      pages: "頁面",
      channels: "頻道",
      classification: "项目",
      marketing: "營銷",
      customers: "顧客",
      logistic: "物流",
      auditing: "會計",
      incentives: "激勵措施",
      process_center: "訂單",
      blog: "博客",
      products: "產品",
      shops: "商店",
      dashboard: "儀表板",
      autopilot: "自動駕駛儀",
      apps: "應用",
      pos: "POS",
      seo: "SEO",
      localization: "本土化",
      crm: "CRM",
      listing: "项目",
    },

    /** {@see BPageShopDashboard} **/
    dashboard: {
      title: "商店儀表板",
      online_staff: "在線員工",

      notify_referral: {
        message: "將您的邀請鏈接發送給朋友並獲得免費優惠券。",
        action: "我的推薦鏈接",
      },

      /** {@see BDashboardShopTechnical} **/
      info: {
        title: "技術的",
        subtitle: "您的業務操作系統的技術概述。",

        shop_name: "店鋪名稱",
        shop_link: "店鋪鏈接",
        site_map: "網站地圖",
        shop_domains: "域",
        shop_domains_msg: "已連接的自定義域列表。",

        home_msg:
          "設置您網站的默認主頁。它可以針對每個自定義域進行更改。",

        add_domain: "添加新域",
        currencies: "活躍貨幣",
        currencies_alert: "為商店選擇至少一種貨幣！",
        status: "地位",
        license: "執照",
        expire: "執照到期日",
        upgrade_license_action: "升級到 {name}",
        wage: "費用",
        cpu_message:
          "您為購買的計劃定制的資源數量以及您添加到服務中的資源。",
        hide_domains: "隱藏我的域",
        show_domains: "顯示我的域",

        /** {@see BDomainsList} **/
        table: {
          primary: "基本的",
          url: "網址",
          site_map: "網站地圖",
          enable: "使能夠",
          indexed: "索引",
          and_more: "＆ 更多的..",
          auto_repair: "自動修理",
        },
        add_dialog: {
          title: "配置存儲域",
          step1:
            "您可以從以下值定義 DNS 域或子域的記錄 A 的 IP 限制：",
          step2: "添加 DNS TXT 記錄：",
          set_ip_alert:
            "設置記錄 A <b>{ip}</b>的 IP 值。",

          input_domain: "域名網址",
          correct: "域設置正確。",
          set_message: "將此域的 CNAME 設置為 {cname}。",
          input_domain_message: "輸入域名，不帶http和https。",
          ssl_message:
            "不用擔心您網站的 SSL 憑證。您可以透過免費或付費 CDN 提供者（例如 Cloudflare）來取得 SSL。",
          active: "域處於活動狀態",
          inactive: "域被禁用",
          success_message:
            "恭喜，您的網站已在 {domain} 上啟用。您可以通過此域向世界介紹您的業務和品牌。",

          delete_action: "刪除域？",
        },
        set_home_dialog: {
          title: "設置域主頁",
        },
        notification: {
          add_message: "域名地址添加成功。",
          update_message: "域更新成功。",
          delete_domain_message: "域刪除成功。",
        },
        alert: {
          title: "刪除域",
          message:
            "您要刪除此域嗎？確保重置您域的 DNS 記錄值，以防止他人欺詐。",
        },
      },

      /** {@see BDashboardShopOrders} **/
      active_orders: {
        title: "訂單",
        title_small:
          "透過線上、酪梨和超級管道進行實體、文件、虛擬、服務和訂閱訂單。",
        pending_orders: "掛單",
        physical: "實物產品訂單",
        virtual: "虛擬產品訂單",
        file: "提交產品訂單",
        service: "服務產品訂單",
        subscription: "認購訂單",
      },
      /** {@see BDashboardShopProducts} **/
      products: {
        title: "存貨",
        title_small: "產品、服務、文件",

        total_products: "總產品類型",
      },
      /** {@see BDashboardShopFinance} **/
      finance: {
        title: "金融",
        title_small: "財務報告",
        total_30days_title: "總銷售額",
        last_30_day: "過去 30 天",
        pay_amount_chart_title: "付款",
        sell_amount_chart_title: "銷售量",
        discount_amount_chart_title: "折扣",
        currency_convert_to: "到貨幣",
        active_currencies: "活躍貨幣",
        sell_count_chart_title: "按變體分類的銷售數量",
        active_gateways: "主動支付網關",
        received_last_24h: "最近 7 小時收到",
        pie: {
          title: "今天的銷售比率",
          no_data: "今天不賣",
        },
        pay_amount: "支付金額",
        sell_amount: "銷售金額",
        discount_amount: "折扣金額",
        sell_count: "銷售數量",
        table: {
          currency: "貨幣",
          total_sell_30days: "30天總銷售額",
          sell_daily: "每日銷售率",
          sell: "銷售",
          pay: "支付",
        },
      },
      /** {@see BDashboardShopCustomers} **/
      customers: {
        title: "店鋪顧客",
        title_small: "轉化報告",
        total_customers: "全部的",
        new_customers_today: "今天",
        new_customers_week: "過去 7 天",
        orders_count: "訂單數",
        days_range: "天數範圍",
        new_users: "新註冊用戶",

        chart: {
          new_customers: "新客戶",
          customers: "客戶總數",
        },
      },
      /** {@see BDashboardShopChannels} **/

      channels: {
        title: "獲客渠道",
        subtitle:
          "您的業務正在成長。這是您的客戶獲取管道的報告。",
      },

      /** {@see BDashboardShopPerformance} **/
      performance: {
        title: "今天",
        title_small: "用戶和銷售概覽",
        users: "用戶",
        views: "意見",
        orders: "訂單",
        payments: "付款",
        no_visitor_today: "你今天沒有訪客。",
      },
    },

    /** {@see BPageShopProductsList} **/
    products: {
      title: "產品列表",
      products_list: "返回目錄",
      products_menu: "產品管理",

      view_que_list: "查看隊列列表",
      menu_products_list: "產品列表",
      menu_export: "出口產品",
      menu_import: "進口產品",
      drop_import_message:
        "將產品清單檔案（CSV、XLS、XLSX 格式）拖曳到此處即可開始新增大量產品。確保檔案具有 Selldone 產品清單格式。",

      menu_advanced_options: "進階選項",
      menu_advanced_options_description:
        "项目 Google 项目, 消除 项目 產品 项目 更多的...",

      products_rss: {
        title: "產品 RSS",
        subtitle: "项目 產品 项目 Google, Meta,...",
      },
      products_api: {
        title: "產品 API",
        subtitle: "透過可公開存取的 API 呼叫導入產品。",
      },
      google_sheet: {
        action: "連結表",
        tooltip:
          "該商店中的產品連結到 Google 雲端硬碟中的 Google 試算表。",
      },
      show_deletes: {
        false_title: "隱藏已刪除",
        false_description: "项目 已刪除 產品.",
        true_title: "项目 已刪除",
        true_description: "项目 已刪除 產品.",
      },
      show_vendors: {
        false_title: "隱藏供應商",
        false_description: "只需向供應商所有者展示即可。",
        true_title: "顯示供應商",
        true_description: "项目 全部 项目, ⌘Ctrl+1",
      },
      table_mode: {
        false_title: "拖放模式",
        false_description:
          "查看按類別和子類別組織的產品。",
        true_title: "表格模式",
        true_description: "以詳細的表格佈局查看產品。",
      },

      show_notes: {
        false_title: "隱藏註釋",
        false_description: "隱藏空筆記。",
        true_title: "顯示註釋",
        true_description: "项目 全部 项目, ⌘Ctrl+2",
      },

      rss_dialog: {
        title: "產品 RSS",
        subtitle:
          "利用此 RSS 來源來維護所有產品的最新清單。",
      },
      api_dialog: {
        title: "產品 API",
        subtitle:
          "使用此 API Feed 讓您的產品清單保持最新。它提供了一個可公開訪問的 API，用於從您的商店獲取產品，使其成為產品清單和比較網站的理想選擇。",
      },

      /** {@see BProductWindowProductLarge} **/

      product_widget: {
        product_type: "產品類別",
        price: "價格",
        value_added: "委員會",
        discount: "折扣",
        in_stock: "有存貨",
        product_unit: "單元",
        total_sell: "總銷售額",
        total_view: "總瀏覽",
        view_unit: "時代",
        review_unit: "評論",
      },

      /** {@see WidgetFolderCard} **/
      folder_widget: {
        products: "產品",
        products_unit: "類型",
        sub_categories: "類別",
        sub_categories_unit: "項目",
        views: "意見",
        views_unit: "時代",
      },
    },

    /** {@see BPageShopBlogs}  **/
    blogs: {
      new: "寫新",
      blogs: "博客",

      /** {@see BPageShopBlogsList} **/
      list: {
        title: "我的文章",
        subtitle:
          "使用現代內聯編輯器撰寫文章，展示您自己和您的業務。在撰寫高質量的 SEO 友好型博客文章時，您首先需要關注原創內容。",
        waiting_message: "正在接收信息...請稍候",
        published: "發表",
        draft: "草稿",
        private: "私人的",
        public: "上市",
        table: {
          title: "標題",
          author: "作者",
          claps: "拍手",
          like: "喜歡",
          comments: "註釋",
          views: "意見",
          publish_state: "地位",
          created_at: "創建日期",
          updated_at: "最後更新",
        },
      },
    },

    /** {@see ShopPBPageShopOrdersrocessCenter} **/
    orders: {
      /** {@see BProcessCenterList} **/
      physical: {
        waiting_message: "正在接收信息...請稍候",
        rejected: "被拒絕",
        delivery: "船運",
        discount: "折扣",
        not_paid: "沒有支付",

        table: {
          order_number: "訂購代碼",
          order_date: "離開日期",
          status: "最後狀態",
          price: "總金額",
          payment_status: "支付狀態",
        },
      },

      /** {@see BPageShopOrdersVirtual} **/
      virtual: {
        waiting_message: "正在接收信息...請稍候",

        discount: "折扣",
        table: {
          order_number: "訂購代碼",
          product: "產品",
          order_date: "註冊日期",
          status: "最後狀態",
          price: "總金額",
          payment_status: "支付狀態",
        },
      },
    },

    /** {@see BPageShopFinance} **/
    auditing: {
      menu: {
        exchange: "交換",
        gateway: "網關",
        invoice: "計費",
        report: "報告",
        tax: "稅",
        drop_shipping: "經銷商收據",
        reseller_accounts: "經銷商帳戶",
        valuations: "估值",
        customer_wallets: "客戶錢包",
      },

      /** {@see BPageShopFinanceBill} **/
      invoice: {
        title: "購買鏈接錢包",
        subtitle:
          "費用、佣金和商店成本將從這些錢包賬戶中扣除。",

        title_add: "連接新的錢包賬戶",
        subtitle_add:
          "您應該為每種貨幣創建一個新錢包並將其連接到您的商店。服務費將從該錢包中提取。",
        add_account: "新增帳戶",
        charge_account: "付費賬號",
        show_transaction: "顯示交易",

        table: {
          currency: "貨幣",
          account_number: "帳號",
          account_name: "帳戶名稱",
          balance: "平衡",
          free_balance: "可用餘額",
          actions: "消除",
        },
        add_account_dialog: {
          title: "將信用賬戶連接到商店",
          subtitle:
            "在 Selldone 開設錢包帳戶後，您將收到一張虛擬信用卡。 Seldone 服務費將記入此帳戶。但如果您的帳戶餘額不足，該費用將成為應付債務。",
          account_number: "帳號",
          account_number_input_message:
            "該商店將鏈接到此帳戶。該帳戶將用於支付費用和成本。",
          balance: "賬戶餘額",
          connect_account_to_shop: "將帳戶連接到商店",
        },
        notifications: {
          connect_account_success: "帳號添加成功。",
          delete_account_success:
            "帳戶已成功從商店中刪除。",
        },
        alert: {
          delete_account: "斷開帳戶",
          delete_account_message:
            "您想從商店帳戶列表中刪除此帳戶嗎？",
          delete_account_action: "刪除帳戶",
        },
        inform_charge_account: "向您的帳戶收費！",
        inform_charge_account_critical:
          "向您的帳戶收費以防止服務暫停！",
      },

      /** {@see BPageShopFinanceExchange} **/
      exchange: {
        title: "存儲活躍貨幣",
        subtitle:
          "用戶將能夠選擇一種有效的貨幣，產品的價格將被計算和顯示。輸入匯率由賣方決定。",
        shop_currencies_input: "用戶的活躍貨幣",
        shop_currencies_input_error: "至少選擇一種貨幣",
        rates: {
          title: "匯率",
          sub_title:
            "您可以根據以下任何一種貨幣輸入產品價格，產品價格將根據您的貨幣之間的兌換率自動計算。",
          message:
            "通過輸入貨幣之間的匯率，您的產品價格將被自動計算和更新。",
          add_new_rate: "添加新費率",
        },
        table: {
          waiting_receive_data: "正在獲取信息...請稍候",
          rate_input: "匯率",
          from: "從",
          to: "至",
          exchange_rate: "匯率",
          edit: "編輯",
          delete: "刪除",
          auto: "自動評分",
        },
        add_rate_dialog: {
          title: "設置匯率",
          message:
            "輸入信息時要小心。您的產品價格將根據此處輸入的價格計算。",
          currency_from: "從貨幣",
          currency_to: "到貨幣",
          exchange_rate: "匯率",
        },
        alert: {
          title: "刪除轉化率",
          message: "要刪除此轉化率嗎？",
          action: "刪除",
        },
        notifications: {
          delete_success: "匯率已移除。",
          add_success: "匯率已更新。",
          update_success: "存儲更新的活躍貨幣。",
        },
      },
    }, // End of auditing

    /** {@see BPageShopLogistic} **/
    logistic: {
      /** {@see BPageShopLogisticWarehouse} **/
      warehouses: {
        title: "倉庫",
        subtitle: "我的倉庫列表。",
      },
      restriction: {
        title: "船運 项目",
        subtitle:
          "您可以實施限制，確保只有指定配送區域內的客戶才能向您購買！",
        no_enable_shipping_error:
          "沒有人可以向您購買，因為您沒有啟用的運送方式！",
        customer_must_select_a_shipping_msg:
          "客戶必須選擇運送方式才能下訂單。",
        customer_can_order_without_shipping_method_msg:
          "即使所選地點不支援運送方式，客戶也可以下訂單。",
        inputs: {
          restriction: {
            false_description:
              "即使沒有選擇特定的運送方式，客戶仍然可以下訂單。",
            false_title: "接受 全部 訂單",
            true_title: "项目 接受 命令",
            true_description:
              "客戶需要選擇送貨或取貨選項才能完成購買。",
          },
        },
      },

      warehouse_btn: "添加新倉庫",
      warehouse_btn_error:
        "設置您的倉庫、商店或業務來源。在運輸成本計算和結帳過程中至關重要。",
      no_multi_warehouse_support_message:
        "為簡單起見，一般商店不提供此功能。",
      size_unit: {
        title: "尺寸單位",
        subtitle: "用於長度、寬度和高度的單位。",
      },
      mass_unit: {
        title: "質量單位",
        subtitle: "用於重量的單位。",
      },
      distance_unit: {
        title: "项目 單元",
        subtitle: "用於距離的單位。",
      },

      menu: {
        return_request: "回來",
        delivery: "船運",
        inventory: "存貨",
        warehouse: "倉庫",
        logistic_apps: "後勤",
        profiles: "簡介",
        includes: "包括",
        property_sets: "屬性集",
        boxes: "项目",
      },

      /** {@see BPageShopLogisticInventory} **/
      warehouse: {
        title: "倉庫",
        sub_title: "此地址用作發貨的來源。",
        table: {
          title: "庫存清單",
          sub_title:
            "所有商店產品列表，包括物理、虛擬、文件和服務",
        },
      },

      /** {@see BPageShopLogisticShipping} **/
      delivery: {
        title: "運輸方式",

        sub_title:
          "透過在本節中將送貨選項納入您的商店，您可以啟用一系列送貨方式。可以為每種運輸服務啟動貨到付款方式。每項服務都允許獨立的成本計算，並且您可以自訂這些運輸服務以滿足您的需求。此外，您還可以選擇將第三方運輸服務或個人快遞與每個運送選項整合。",
        add_transportation: "添加交通工具",

        /** {@see DeliveryFormWidget} **/
        delivery_form: {
          payment: "付款方式",
          limits: "限制",

          currency_input: "成本計算的參考貨幣",
          currency_input_message: "費用以這種貨幣計算",
          distance_input: "距倉庫的距離",
          distance_input_message: "0 或 -1 表示沒有限制。",
          max_weight_input: "最大可接受包裝重量",
          max_weight_input_message: "0 或 -1 表示沒有限制。",
          max_size_input: "最大封裝尺寸",
          width: "寬度",
          length: "長度",
          height: "高度",
          days_input: "可用的交貨日期",
          days_input_nodata: "選擇交貨日期",
          hours_input: "可用的交貨時間",
          hours_input_nodata: "選擇一個時間段",
          vacation_input: "你們節假日送貨嗎？",

          pricing: "計算價格",
          const_input: "固定成本",
          distance_cof_input: "成本距離係數",
          distance_cof_input_dim: "每 {dim}",
          weight_cof_input: "成本重量比",
          weight_cof_input_dim: "每 {dim}",
          price_cof_input: "運費到產品價格因素",
          price_cof_input_message:
            "包括保險費用和其他服務，例如 COD 費用。",
          price_cof_input_dim: "每 {dim}",
          distance_weight_cof_input: "成本乘數乘重量乘數",
          distance_weight_cof_input_dim: "每{distance}每{weight}",
          free_shipping_input: "免運費",
          free_shipping_limit_input: "免費送貨的最低訂單成本",

          shipping_cost_calculation: "運費計算",
          sod_true: "獲取目的地的運費",
          sod_true_message:
            "確保您的運輸服務接受目的地的運輸成本。",
          sod_false: "自動運費計算",

          cod_input: "支持貨到付款",
          cod_true: "接受貨到付款",
          cod_false: "只接受網上支付",
          cod_true_message: "確保您的運輸服務接受 COD。",

          notifications: {
            update_success: "配送服務設置已成功完成。",
          },
        },
      },
    }, // End of logistic

    /** {@see BPageShopCrm} **/
    users: {
      menu: {
        customers: "顧客",
        contact_form: "聯繫人",
        faq: "FAQ",
        club: "俱樂部",
        report: "報告",
      },

      /** {@see BPageShopCrmReport} **/
      report: {
        title: "客戶概覽",
        sub_title: "您將在此處看到客戶的實時狀態。",
        report_30days_by_time:
          "基於過去 30 天日期和時間的用戶活動",
        report_30days_by_location:
          "過去 30 天的地理位置用戶活動",
      },
      /** {@see BPageShopCrmClub} **/
      club: {
        title: "顧客俱樂部",
        sub_title:
          "輸入每月和每年的購買金額和激活每個級別的貨幣。當您的客戶滿足每月或每年購買的要求時，他們將登錄到您的客戶俱樂部。",
        item: {
          members_count: "成員數量",
          purchases_count: "訂單數",
          monthly: "月刊",
          annually: "每年",
          discount_percent: "折扣率",
          discount_limit: "折扣限額",
        },

        edit_dialog: {
          title: "客戶級別管理",
          currency_input: "貨幣",
          currency_input_message:
            "總購買量以這種貨幣計算。",
          free_shipping_input: "免運費",
          monthly_input: "每月購買率",
          annually_input: "年購買率",
          discount_percent_input: "俱樂部會員折扣率",
          discount_limit_input: "折扣限額",
          description_input: "描述",
          description_input_message: "輸入此級別的簡要說明。",
        },
        notifications: {
          update_success: "更改適用於客戶俱樂部。",
        },
      },
      /** {@see BPageShopCrmFaq} **/
      faq: {
        title: "經常問的問題",
        sub_title: "添加、編輯和回答客戶的問題。",
      },
    }, // End of users

    /** {@see BPageShopMarketing} **/
    marketing: {
      menu: {
        campaigns: "活動",
        cross_selling: "交叉銷售",
        affiliate: "附屬公司",
        emails: "電子郵件",
        funnel: "漏斗",
      },

      /** {@see BPageShopMarketingCampaign} **/
      campaign: {
        name_input_name: "活動名稱",
        name_input_placeholder: "活動名稱",
        create_campaign_action: "製作新廣告系列",
        table: {
          title: "標題",
          state: "地位",
          discount: "折扣",
          landing: "登陸頁面",
          start: "開始",
          end: "結尾",
        },
        notifications: {
          add_success_title: "創建活動",
          add_success: "您的廣告系列已創建。",
        },
      },
    }, // End of marketing

    /** {@see BPageShopClassification} **/
    categories: {
      title: "類別列表",
      subtitle:
        "類別是您在線商店的關鍵功能。我們鼓勵您使用這些強大的分類工具來構建現代店面，讓您的客戶輕鬆找到合適的產品。",

      menu: {
        add_new: "添加新類別",
        categories_list: "類別列表",
        export: "出口類別",
        import: "導入類別 (CSV)",
      },
      /** {@see categoriesGraph} **/
      graph: {
        title: "類別層次結構",
        subtitle:
          "您可以全面了解您的商店類別以及用戶如何瀏覽它們。通過正確的類別安排，您的客戶可以快速找到產品，並且轉化率會提高。",
        visits_count: "訪問",
        normal: "簡單的",
        items_count: "項目數",
        home: "家",
      },
    }, // End of categories
    /** {@see AdminShopApps} **/
    apps: {
      menu: {
        app_store: "應用商店",
        my_apps: "應用",
      },
      /** {@see BPageShopSettingApplications} **/
      my_apps: {
        title: "存儲活躍的應用程序",
        subtitle:
          "使用 Selldone App Store 探索管理業務應用程式的便利性。我們的平台提供一整套旨在優化您的業務營運的工具。從創新的管理解決方案到提高生產力的應用程序，Selldone 為尋求效率和成長的企業提供無縫體驗。",
        all: "全部",
      },
      /** {@see BAppShopStore} **/
      store: {
        title: "應用商店",
        subtitle:
          "將您喜愛的服務安全地連接到您的業務。我們根據客戶的要求添加插件和應用程序。",

        nodata: "沒有找到插件。",
        all: "全部",
        more: "更多的",
      },
    }, // End of apps
    /** {@see BPageShopPages} **/
    pages: {
      menu: {
        new_page: "新頁面",
        contact_us: "聯繫我們",
        privacy: "隱私",
        terms: "條款",
        about_us: "關於我們",
        landings: "降落",
        popup: "彈出",
        static: "靜止的",
      },
    }, // End of pages

    /** {@see BPageShopPermission} **/
    permissions: {
      menu: {
        persons: "職員",
        roles: "角色",
        api: "API",
      },
      /** {@see BPageShopPermissionStaff} **/
      shop_permissions: {
        menu: {
          users: "人員名單",
          new_user: "添加新員工",
          new_user_message:
            "有權訪問此商店的儀表板和管理部分的用戶。",
        },
        delete_alert: {
          title: "移除訪問權限",
          message: "您要刪除此用戶嗎？",
          action: "刪除",
        },
        notifications: {
          add_success_title: "添加訪問權限",
          add_success: "添加了新的訪問權限。",
          delete_success_title: "刪除訪問",
          delete_success: "訪問已刪除。",
        },
      },

      /** {@see BPageShopPermissionApi} **/
      shop_api: {
        title: "存儲訪問密鑰",
        message:
          "這些密鑰用於由您的服務器創建訪問令牌。請注意，密鑰是機密的，並且僅以其他人不可見的方式在服務器上。",
      },
    }, // End of permissions
    /** {@see BPageShopApplications} **/
    applications: {
      /** {@see BPageShopApplicationsPwa} **/
      pwa: {
        title: "網絡應用",
        sub_title: "在此處查看您的商店網絡應用程序",
        message:
          "您可以在 iPhone 和 iPad 上的 iOS 應用程式中編輯網站歡迎頁面。",
        ios_app: "iOS 應用程序",
      },

      /** {@see BPageShopApplicationsIos} **/
      ios: {
        title: "iOS 應用程序",
        sub_title: "您很快就可以為您的商店建立 iOS 應用程式。",
        message:
          "最大文件大小：512 KB，您可以上傳最大 1MB 的文件，前提是我們的壓縮系統能夠將大小減小到 512KB。上傳的圖像將智能調整大小。",
      },
      /** {@see BPageShopApplicationsAndroid} **/
      android: {
        title: "安卓應用",
        sub_title: "建立您自己的 Android 應用程式",
        message:
          "填寫此表格並按建構鍵。不需要任何其他東西。應用程式建置和簽署過程的所有步驟都在雲端伺服器上執行。最終的應用程式將上傳到所有AppStore。",
        server_un_available:
          "實驗上，此時應用服務器沒有連接。",
        app_building_progress: "您的應用正在構建中。",
        app_build_success: "您的應用程序已準備就緒。",
        download_app_action: "下載這個軟件",
        firmware_version: "固件版本",
        main_info: "應用程序包",
        package_name_input_message: "確保包名是唯一的。",
        package_name_input_alert:
          "如果更改此名稱，您將無法再更新 AppStore 中先前的應用程式並安裝新應用程式。請注意，舊版應用程式使用者也將無法登入其帳戶。",
        version_input: "版本",
        version_input_message:
          "此數字必須始終大於其先前的值。",
        version_name_input: "版本名稱",
        version_name_input_message:
          "輸入此版本的應用程序的唯一名稱。",
        use_selldone_key: "Selldone 默認 项目",
        use_last_key: "已保存的密鑰",
        use_new_key: "新鑰匙",
        appearance: "外貌",
        app_name_input: "應用名稱",
        app_name_input_message: "這將是您的應用程序的主要名稱。",
        app_title_input: "應用標題",
        app_title_input_message: "此標題顯示在應用程序的頂部。",
        app_title_input_placeholder: "輸入標題",
        app_icon_input: "應用程序圖標",
        app_icon_input_placeholder: "選擇應用程式圖示的 zip 檔案。",
        generate_icon_pack_action: "構建圖標包",
        splash_design: "啟動畫面設計",
        splash_logo_input: "啟動畫面標誌",
        splash_logo_input_placeholder: "選擇啟動畫面的圖像。",
        splash_title_input: "啟動畫面標題",
        splash_title_input_placeholder: "輸入啟動畫面的標題",
        splash_title_input_message:
          "此標題將以大字體顯示。",
        splash_message_input: "啟動畫面消息",
        splash_message_input_placeholder: "信息 ...",
        splash_message_input_message:
          "此消息將在下方顯示為縮略圖。",

        dark_theme: "深色主題",
        light_theme: "輕主題",
        build: "建造",
        building_info:
          "在雲服務器上構建應用程序需要 10 秒到幾分鐘。請耐心等待。應用程序準備就緒後，下載文件鏈接將出現在此處。",
        update_mode_action: "更新",
        build_mode_action: "構建應用",
        notifications: {
          icon_pack_not_valid_error: "文件不正確。",
          start_building_title: "建造 ...",
          start_building_message:
            "已提交建置 Android 應用程式的請求。",
          build_success_title: "恭喜",
          build_success:
            "您的 Android 應用程式已準備就緒，您可以立即下載。",
        },
      },
    }, // End of applications

    /** {@see ShopAutomation} **/
    automation: {
      menu: {
        autopilot: "自動駕駛儀",
      },
    },

    /** {@see BPageShopSetting} **/
    edit: {
      menu: {
        delete: "刪除存儲",
        activity_time: "時間",
        footer: "菜單",
        info: "信息",
        notification: "通知",
        home: "家",
        locations: "地點",
        license: "執照",
        theme: "主題",
        sms: "短信",
        email: "電子郵件",
        domain: "領域",
        verifications: "驗證",
        flow: "流動",
        business_model: "商業模式",
      },
      delete_dialog: {
        title: "刪除存儲",
        message: "您要刪除<b>{title}</b>商店嗎？",
        action: "刪除存儲",
      },

      notifications: {
        delete_success: "商店已刪除。",
      },

      /** {@see BPageShopSettingInfo} **/
      info: {
        title_tab: {
          title: "公司名稱和語言",
          subtitle: "設置公共名稱和默認語言。",
        },
        name_tab: {
          title: "店鋪唯一名稱",
          subtitle: "這是您的企業用戶名。",
        },

        description_tab: {
          title: "您的商業故事",
          subtitle:
            "寫下您的業務及其獨特的價值主張。",
        },
        contact_tab: {
          title: "聯繫方式和本地業務",
          subtitle:
            "公開聯絡資訊和 Google 本地業務設定。",
        },
        image_tab: {
          title: "標識",
          subtitle: "為您的品牌選擇一個獨特的標誌。",
        },
        favicon: {
          title: "项目",
          subtitle:
            "網站圖示是小型的標誌性圖像，在瀏覽器標籤、書籤和行動應用程式介面中代表網站。",
        },
      },

      /** {@see ShopEditMenuFooter} **/
      badge: {
        external_title: "管理外部徽章",
        external_message:
          "在這裡，您可以輸入徽章圖像的地址及其鏈接。 URL 必須來自經批准的網站。",
      },
      /** {@see BPageShopSettingMenus} **/
      edit_menu: {
        title: "菜單",

        footer: {
          title: "頁腳菜單",
          sub_title:
            "您可以在此處配置商店頁面的底部菜單。這些菜單可以是主頁、設計頁面或外部鏈接。",
        },

        header: {
          title: "標題菜單",
          sub_title:
            "此菜單僅顯示在比移動設備更大的屏幕上，以及主頁、產品類別、登陸和產品頁面的頂部。",
        },

        save_menu: "保存菜單",
        dialog: {
          main_pages: "主頁",
          custom_pages: "登陸頁面",
        },
        table: {
          home: "家",
          shop: "店鋪",
          blogs: "博客",
          about_us: "關於我們",
          privacy: "隱私",
          terms: "使用條款",
          faq: "FAQ",
          contact_us: "聯繫我們",
        },
        notifications: {
          save_success: "菜單已成功更新。",
        },
      },

      /** {@see ShopSocialField} **/
      social: {
        title: "社交媒體",
        message:
          "在此部分中輸入您的官方社交媒體鏈接。按照每個項目的說明確認地址。",
      },

      /** {@see BShopSettingWorkingDays} **/
      time: {
        title: "工作日",
        sub_title: "設置工作日和時間",
        days_open_input: "天",
        days_open_input_nodata: "至少選擇一天",
        start_time_input: "店鋪活動開始時間",
        start_time_input_hint: "店鋪營業時間",
        end_time_input: "店鋪關門時間",
        end_time_input_hint: "店鋪活動結束時間",
        customer_support_service: "問責制和客戶服務",
        response_time_input: "客戶服務狀態",
        support_24h: "每週 7 天 24 小時",
        support_normal: "僅在辦公時間內",
        no_service: "不",
        notifications: {
          update_success: "商店編輯。",
        },
      },
    }, // End of edit
  }, // End of admin_shop

  /** {@see BCategoryInput} **/
  category_select: {
    category_input_no_category: "沒有類別",
  },

  /** {@see BProductAddFull} **/
  add_product: {
    title_new: "新產品",
    title_new_category: "新類別",
    title_new_drop_shipping: "添加代發貨",

    title_edit: "編輯產品",
    delete: "刪除產品",
    completed: "完全的",

    menu: {
      type: "產品類別",
      general_info: "基本信息",
      rating: "調查和特點",
      spec: "規格",
      images: "圖片",
      price: "價格",
      inputs: "輸入",
      outputs: "輸出",
      extra: "額外細節",
      review: "產品描述",
      inventory: "庫存/變體",
      change_status: "更改狀態",
    },
    menu_extra: {
      description: "描述",
      form: "项目",
      no_spec: "不 项目",
      has_spec: "有規格",
    },

    select_type: {
      title: "選擇您的產品或服務類型",
    },

    /** {@see BProductEditInfo} **/
    edit_info: {
      category_input: "類別",
      category_input_msg: "空：在商店的根目錄中",
      product_name: "產品名稱*",
      product_name_placeholder: "您的產品名稱在這裡..",
      product_code: "產品代碼（英文）",
      sku: {
        label: "SKU",
        message: "庫存單位",
      },
      mpn: {
        label: "MPN",
        message: "製造商零件號",
      },

      external_link: "外部鏈接",

      brand_placeholder: "品牌前。蘋果..（可選）",

      is_original: "這是原創產品嗎？",
      is_original_message:
        "如果您沒有將產品設置為原始產品，則會顯示該產品的假徽章。",
      return_warranty:
        "該產品有多少天的退貨保證？",
      warehouse_section: "倉庫與製造",
      conditions_section: "產品條件",
      warranty_section: "保修和交付",

      unit_input: "產品單元",
      unit_message: "如果需要，輸入單位。例如：公斤，米，...",

      unit_section: "產品單元",

      unit_float: "浮動單元（很快）",
      unit_float_hint:
        "例如，客戶可以訂購 3 公斤的水果，但發送給客戶的數量與訂購的數量略有不同。",
      unit_float_message:
        "在訂單處理期間，交付金額可能與訂購金額不同。系統會自動計算此差額並將其記錄為您對客戶的欠款，可應用於下一個訂單。",

      marketplace: {
        // Vendor panel > Fixed mode
        vendor_panel_message:
          "<b>{vendor_name}</b>是產品的擁有者。",
        // Marketplace panel > Subscription products
        subscription_message:
          "訂閱產品可以有一個供應商，因此您可以在供應商面板中建立它們或在建立步驟中為其分配供應商。選定的供應商將成為該產品的所有者。",
        default_message:
          "您可以指定該產品是否屬於一個供應商，因此只有一個供應商可以銷售它，或者該產品屬於 Marketplace 並且多個供應商可以銷售它。",

        single_vendor_title: "單一供應商",
        single_vendor_desc:
          "該產品屬於某個供應商，所選供應商可以對其進行管理。",

        multi_vendors_title: "多個供應商",
        multi_vendors_desc:
          "該產品屬於市場，只能在市場面板中編輯。",
      },

      category: {
        subtitle:
          "配置要在清單中顯示的類別和標題。",
      },
      unit: {
        subtitle:
          "您可以個性化產品頁面上定價和號召性用語元素的顯示。",
      },
      custom_pricing: {
        title: "風俗 價錢 项目",
        subtitle:
          "您可以為產品建立或分配估價（定價輸入表單），並且您的客戶可以在變體之間進行選擇或透過直覺的輸入表單自訂您的商品。",
        valuation_need_saved_product_message:
          "請先儲存產品，然後您可以指定評估模型。",
        assign_valuation_message:
          "請為該產品指派一個評估模型。",
        edit_pricing_action: "編輯 價錢 项目",
        add_pricing_action: "創造 新的 價錢 项目",
      },
      action: {
        title: "風俗 買 项目",
        message:
          "您可以依照下列模式變更圖示：{icon name} 標題...",
        placeholder: "輸入號召性用語...",
        multi_language_dialog_title: "自訂購買按鈕標題",
      },
      external: {
        not_available_message:
          "透過公司和企業許可證可以執行額外操作。",
        available_message: "您可以新增額外的外部號召性用語。",
        input_label: "第二次號召性用語",
      },
      warehouse: {
        subtitle:
          "此資訊由倉庫管理系統使用，用於全域識別產品。",
      },
      gtin: {
        hint: "支援的值為 UPC（北美，12 位數字）、EAN（歐洲，13 位數字）、JAN（日本，8 或 13 位數字）、ISBN（書籍，13 位數字）。",
        label: "產品的全球貿易項目編號",
        placeholder: "全球貿易編號在這裡..（可選）",
      },
      hsn: {
        hint: "HSN（統一命名系統）是用於對商品和產品進行分類的國際標準化分類系統。",
        placeholder: "6~16 项目 HSN 代碼.. (项目)",
        label: "HSN",
      },
      condition: {
        label: "您商店中的產品狀況",
        message: "請選擇該產品的狀況。",
        subtitle:
          "告知您的客戶您所提供產品的狀況和品牌。",
      },
      brand: {
        label: "牌",
        placeholder: "品牌前。蘋果..（可選） Apple",
      },
      warranty: {
        subtitle:
          "設定保固和產品狀態，因為有關保固的資訊將顯示給客戶，並有助於確定購買後可以退回產品的時間範圍。",

        label: "项目",
        placeholder: "金的 24 月 项目.. (项目)",
      },
      status: {
        title: "地位",
        subtitle:
          "產品的狀態決定了其線上和店內的可用性。要製作產品草稿，只需將其狀態切換為「非活動」即可。",
      },
      profiles: {
        title: "簡介",
        subtitle:
          "您可以定義保固、退貨政策、運送並指導並將其分配給該產品。它將在產品頁面上顯示為新選項卡。",
      },
      shortcuts: {
        title: "项目 產品 至 项目 類別",
        subtitle:
          "此功能可讓您在多個類別中列出產品，同時保留其在產品 > 編輯 > 類別下設定的主要類別中的位置。從本質上講，它的功能類似於在作業系統中建立“快捷方式”，使產品能夠出現在其他指定的類別中。",
      },
    },

    /** {@see BProductEditFeatures} **/
    rating_pros_cons: {
      title: "民意調查",
      message:
        "為您的客戶輸入產品規格列表以對您的產品進行評分。 （最多 5 項）",
      rating_input: "民意調查",
      rating_input_message: "您可以在投票中添加 5 個項目。",
      rating_input_placeholder:
        "在這裡寫下您的自訂調查問題...然後按 Enter！",

      item_unit: "物品",

      pros_title: "優點",
      pros_message: "輸入產品的功能。 （最多 5 項）",
      pros_input_title: "專題標題",
      pros_input_value: "特徵值",
      pros_group: "產品的優點",

      cons_title: "缺點",
      cons_message: "輸入產品的弱點。 （最多 5 項）",
      cons_input_title: "弱點標題",
      cons_input_value: "弱點值",
      cons_group: "產品的弱點",

      select_from_list: "從列表中選擇",

      suggestion_rating: [
        "品質好",
        "项目 價值",
        "會推薦",
        "特性和功能",
        "项目 至 项目",
        "設計精良",
        "性能可靠",
        "有效的客戶支持",
        "滿意的交貨時間",
        "產品匹配說明",
        "耐用且持久",
        "性價比高",
        "精美的包裝",
        "創新設計",
        "環保",
        "足夠的說明/手冊",
        "達到預期",
        "使用者友善的介面",
        "高效率",
        "優質的售後服務",
        "多功能性",
        "有競爭力的定價",
        "備件/配件的可用性",
        "值得信賴的品牌",
        "使用安全",
        "及時、準確的服務",
      ],

      notifications: {
        add_rating_success: `添加了用戶評分 {rating_name} 選項。`,
        delete_rating_success: `用戶評分 {rating_name} 選項已刪除。`,

        add_pros_success: "添加了產品功能。",
        delete_pros_success: "產品功能已移除。",

        add_cons_success: "產品弱點增加。",
        delete_cons_success: "消除了產品弱點。",
      },
    },

    /** {@see BProductEditSpec} **/
    edit_spec: {
      title: "技術規格",
      subtitle:
        "在此插入產品規格。這些資訊將向客戶顯示，也可以在該類別的智慧過濾系統中使用。",
      manual: {
        title: "项目",
        subtitle:
          "透過定義群組和鍵值對手動新增產品規格。",
        add_group_action: "添加組",
        add_item_action: "新增規格值",
      },
      import: {
        subtitle:
          "您可以匯入同類產品的技術規格。",
        action_title: "项目",
        action_subtitle: "從另一個產品克隆規格。",
      },
      ai: {
        title: "AI",
        subtitle:
          "您可以透過以文字形式提交產品的原始資料來自動建立產品規格。",
        action_title: "AI自動生成",
        action_subtitle: "透過抽象提示建立產品規格。",
      },

      group_input_header: "添加組",
      item_title_header: "添加項目",
      group_input: "組頭",
      group_input_message: "輸入標題。",
      group_add_action: "添加組",

      item_title_input: "標題",
      item_title_input_message: "輸入功能標題。",

      item_value_input: "價值",
      item_value_input_message: "輸入特徵值。",

      add_item_action: "添加項目",

      dialog: {
        title: "輸入技術規格",
        code_input: "產品編號",
        code_input_message: "產品編號：P0000 ...",
        spec_view_title: "所選產品的規格",
        spec_view_subtitle:
          "規格已從所選產品中匯入。",
        set_spec_action: "重複的技術規格",
      },
      notifications: {
        enter_group_title_error: "輸入標題值",
        enter_item_title_and_value_error:
          "輸入特徵的標題和值",
        spec_saved_success: "產品規格已保存。",
      },
      dialog_ai: {
        title: "自動產生產品規格",
        prompt: {
          title: "產品 概述",
          subtitle:
            "請提供產品的簡短清晰的描述，突出其主要功能和細節。這些資訊將用於自動產生產品規格。",
        },
        generated_spec: {
          title: "AI-项目 規格",
          subtitle:
            "這些規格是由人工智慧產生的。",
        },
        inputs: {
          prompt: {
            label: "產品 細節",
            placeholder: "在這裡描述產品...",
          },
        },
        actions: {
          run: {
            title: "项目 規格",
            subtitle:
              "按一下可根據提供的概述自動建立產品規格。",
          },
          add_generated_spec: "新增生成的規格",
        },
      },
    },
    /** {@see BProductEditImages} **/
    edit_images: {
      title: "主圖",
      main_image_input_nodata: "上傳產品圖片。",
      main_image_input_message: "此圖像顯示在產品列表中。",
      preview: "預習",
      image_style: "圖片風格",
      background_is_white: "白色背景",
      background_is_white_msg: "圖片有白色背景嗎？？",

      images: {
        title: "產品圖片庫",
        sub_title:
          "在此部分中上傳所有產品變體通用的產品圖片。",
      },
      video: {
        title: "視頻",
        sub_title:
          "首先，在 Youtube 上上傳您的產品視頻，然後將視頻 URL 放在這裡。",
      },
      change_bg_ai: {
        title: "創造 圖片 项目 新的 项目",
        inputs: {
          prompt: {
            label: "项目 描述",
            placeholder: "描述所需的背景...",
          },
        },
        actions: {
          reimagine: {
            title: "项目 新的 圖片",
            subtitle: "用新的背景重新想像整個影像。",
          },
          replace: {
            subtitle: "替換現有背景。",
          },
        },
      },
    },
    /** {@see BProductEditPrice} **/
    pricing: {
      edit_price: "價錢",
      price_input: "價格",
      currency_input: "貨幣",
      currency_input_messages: "價格以這種貨幣計算。",
      commission_input: "委員會",
      commission_message:
        "此選項僅對批發商等特定類型的商家有用。如果您不是批發商，請將此選項留空。買家看到的價格是價格和佣金的總和。要添加稅收，請單擊會計 > 稅收。",
      add_commission_action: "添加佣金",

      price_label_input: "價格標籤",
      price_label_message:
        "添加有關價格的額外信息，例如 ($1.5/Fl Oz)。使用案例：雜貨、快速消費品。",
      add_price_label_action: "添加價格標籤",
      discount_input: "折扣",
      discount_input_message: "折扣率",
      has_discount_period_input: "此折扣在特定時間有效嗎？",
      discount_timespan: "輸入折扣期。",
      start_input: "開始",
      end_input: "結尾",
      start_input_placeholder: "選擇開始時間",
      end_input_placeholder: "選擇結束時間",
      independent_price: "僅此變體的價格",
      same_price: "主要產品的價格",
      variant_pricing_message:
        "通過選擇此選項，可以獨立於主要產品設置此變體的價格。",

      subtitle: {
        marketplace:
          "在市場中，顯示的主要產品定價是標價，而實際價格則根據供應商-產品關係記錄確定。",
        subscription:
          "對於訂閱，僅顯示掛牌價格，實際費用將根據所選訂閱方案決定。",
        service:
          "對於基於服務的產品，列出的定價僅用於展示目的，提供服務的估計成本。實際服務價格將在客戶下訂單（結帳時）後由您決定。",
        file: "這是指文件的列出價格和實際價格，客戶必須支付該價格才能存取文件。",
        default:
          "這是指產品的標價，並且還考慮到任何沒有單獨定價的變體的價格。",
      },
      extra_pricings: {
        title: "添加額外定價",
        subtitle: "根據採購數量實施動態定價。",
      },

      vendor: {
        title: "项目 價錢",
        subtitle:
          "此價格僅顯示在產品清單中。您可以在產品 > 供應商標籤中設定供應商價格。",
        manage_vendors: "管理供應商",
        vendor_product_pricing_link:
          "供應商的產品定價是相關的。更改此处的上市价格将影响没有变体的供应商产品或具有没有自己定价的变体的供应商产品（使用与主要产品相同的价格）。該價格將被視為市場價格，供應商的價格將根據定價模型或先前的市場利潤率來設定。",
        vendor_variant_pricing_link:
          "在此改變體價格將影響具有相同變體的供應商產品的定價。該價格將被視為市場價格，供應商的價格將根據定價模型或先前的市場利潤率來設定。",
      },
    },
    /** {@see ProductEditInputs} **/
    inputs_edit: {
      title: "買家信息輸入表",
      sub_title:
        "您可以為每個產品創建一個數據輸入表單，以便購物者在購買產品時向您發送信息。例如，此信息可以是石頭上雕刻的名稱。",
      message_input: "給用戶的消息",
      message_input_message:
        "此消息將在購買產品時顯示給客戶。",
      inputs_form: "信息結構（輸入）",
      inputs_hint:
        "您可以選擇設定個人化表單，以便在客戶準備下訂單時收集詳細資訊。",
    },

    /** {@see BProductEditExtra} **/
    extra_edit: {
      physical: {
        title: "運輸信息",
        sub_title:
          "根據本節中的信息計算準備成本和時間。請務必根據店內選擇的單位（重量、尺寸、距離）輸入信息。",
      },

      notifications: {
        save_title: "包裝更新",
        save_msg: "產品包裝信息更新成功。",
      },

      order_limit: {
        title: "命令 限制",
        subtitle:
          "如果您是批發商，或每個訂單的該商品數量有最小或最大限制，您可以在此指定。",
        no_limit: "不 限制",
        minimum_purchase_quantity: "项目 購買 數量",
        maximum_purchase_quantity: "项目 購買 數量",
      },
    },

    variants: {
      not_available:
        "目前無法為此類產品選擇變體。",
    },

    delete_product: {
      title: "刪除產品",
      message: `您要刪除<b>{product_title}</b>嗎？`,
      tips: "如果您不小心刪除了產品，您可以透過導航到商店 > 產品，啟用“顯示已刪除的項目”，然後右鍵單擊該產品並選擇“恢復”來恢復它。",
    },
  },

  /** {@see BProductExtraPricingAdd} **/
  extra_pricing_add_dialog: {
    title: "超過 {min} 的額外定價",
    subtitle:
      "系統會自動決定價格計算的順序和優先順序。請輸入此定價生效所需的最低數量。",
    min_quantity: "最小用量",
  },
  /** {@see BProductInventoryManagementPhysical} **/
  product_inventory_management_physical: {
    subtitle: {
      dropshipping:
        "直銷產品的庫存由批發商設置，無法在此修改。",
      marketplace:
        "市場上的整體產品庫存是透過將所有供應商的庫存相加來確定的。您不能在這裡修改它。",
      default: "在此指定產品的庫存數量。",
    },
    menu: {
      add_bulk: {
        title: "大量新增",
        subtitle: "在一項操作中新增多個變體。",
      },
      edit_property_set: {
        title: "自訂屬性集",
        subtitle: "更改變體名稱、圖標和順序。",
      },
    },
  },

  /**
   * @see USmartMenu
   */
  smart_menu: {
    show_delete_items: "项目 已刪除 項目",
  },

  /** {@see BProductGoogleCategoryInput} **/
  google_product_category_input: {
    label: "Google 產品 類別 代碼",
    hint: "代表根據 Google 產品分類法的產品類別。",
    placeholder: "輸入產品或服務類別..（可選）",
  },
  /** {@see LogisticProfileType} **/
  LogisticProfileType: {
    WARRANTY: {
      title: "项目",
      desc: "保固是合約的一部分，製造商承諾在指定期限內維修或更換產品。這項承諾甚至可以延伸到與製造商沒有直接合約的消費者。",
    },
    RETURN_POLICY: {
      title: "返回 项目",
      desc: "退貨政策概述了客戶如何退貨或換貨不需要的商品。它們指定了符合條件的商品、可接受的退貨原因以及退貨的時間範圍。",
    },
    GUIDE: {
      title: "项目",
      desc: "指南可以包括服裝尺寸表或鑽石選擇指南。重要的是指南具有多功能性並且適用於多種產品。",
    },
    SHIPPING: {
      title: "船運",
      desc: "運輸政策詳細說明了線上訂單運輸的關鍵方面，包括運輸成本、方法和預計交貨時間。",
    },
  },
  /** {@see BProductProfileLogistic} **/
  product_logistic_profile: {
    dialog: {
      title: "项目 物流 輪廓",
      add_new_action: "项目 新的 輪廓",
      add_new_disable_msg: "市場 所有者",
    },
  },

  /**
   * @see BPageShopPagesPopups
   */
  b_shop_popups: {
    title: "彈跳窗管理",
    subtitle:
      "創造個人化、智慧化、互動性的彈跳窗。",
    add_action: "项目 新的 彈出",
  },

  /** {@see BProductProfileTax} **/
  product_tax_profile: {
    description: {
      default: "默認",
      dedicated: "项目",

      subscription: "我們只能對付款創建步驟徵稅。",
      is_disabled: "此稅務資料已停用！ （⚠️警告）",
      shipping: "船運",
      fixed_rate: "TAX",
      location_based_rate: "TAX: 地點 项目",
      shipping_location_based_rate: "船運: 地點 项目",
      include_in_price: "包含在價格中",
    },
    dialog: {
      header: "项目 TAX 輪廓",

      title: "TAX 輪廓",
      subtitle:
        "您可以為產品分配特定的稅務法規。如果未為產品選擇稅務資料，則將套用預設的商店稅務法規。",

      action_manage: "项目 TAX",
      action_manage_sub: "店鋪 > 金融 > TAX",

      subscription_tips:
        "當您為訂閱產品選擇稅務資料時，我們會更新<code>稅碼</code>並在您的支付服務提供者上設定包含/排除模式。所選稅收配置檔案指定價格被視為含稅還是不含稅。 <code>inclusive</code> 或 <code>exclusive</code> 之一。一旦指定為包含或排除，則無法變更。 <br /><br /><b>重要！ </b> 更改稅務設定檔後，您應該按一下「產品」>「庫存」標籤上的定價計劃，然後按一下「儲存」按鈕以套用變更。",
    },
  },

  /**
   * @see BProductVendorAbstractView
   */
  product_vendor_profile: {
    vendor: {
      subtitle:
        "該產品的價格和數量由其所屬的特定供應商設定。",
    },
    vendors: {
      subtitle:
        "以下是該產品的供應商清單。數量和價格將由供應商決定。",
    },
  },
  /**
   * @see BVendorAdd
   */
  vendor_add: {
    menu: {
      profile: "輪廓 & 信息",
      business: "项目 & 支付",
      documents: "项目",
      page: "项目 模板",
      shipping: "船運",
      access: "使用權",
      critical_zone: "臨界區",
    },

    profile: {
      title: "项目 信息",
      subtitle: "此資訊公開顯示給客戶。",
      action_sub_caption: "公共產品清單頁面。",
      action_see_listing_page: "查看清單頁面",
      send_invitation_email: "發送 项目 電子郵件",
      invitation_link: "项目 關聯",
    },

    profiles: {
      title: "簡介",
      subtitle: "您可以向該供應商指派位置。",
    },
    map: {
      no_map_message:
        "如果供應商是基於位置的供應商，則為該供應商指派位置。",
    },
    page: {
      title: "風俗 项目",
      subtitle:
        "為供應商設定自訂登入頁面，為他們提供指向其專用頁面的唯一連結。",
      action_set_page: "项目 上市 项目",
      action_sub_caption: "風俗 降落 项目.",
      vendor_has_landing_msg: "供應商有一個自訂登陸頁面。",
      no_landing_selected_msg: "未選擇目標網頁。",
      no_landing_page: "不 降落 项目",
      we_can_create_dedicated_landing_msg:
        "我們可以為您建立專用的登陸頁面。",
    },
    contact: {
      title: "接觸 信息",
      subtitle: "請提供有效的聯絡方式。",
    },
    business: {
      title: "项目 信息",
      subtitle:
        "請提供有關您企業的準確信息，以確保快速、無縫的收稅流程。",
    },
    bank: {
      title: "支付訊息",
      subtitle: "在此輸入您的銀行詳細資料以進行付款。",
    },
    default_pricing: {
      title: "默認 價錢",
      subtitle:
        "您可以為供應商指派預設定價模型。當供應商添加新產品時，此定價模型將用於計算產品價格的市場利潤。您稍後可以單獨調整每個產品的定價模型。",
      no_pricing: "不 價錢",
    },
    shipping: {
      title: "船運",
      subtitle: "供應商可以設定自己的運輸服務和快遞公司。",
      shipping_services: "船運 服務",
      total_number_of_services:
        "供應商擁有的運輸服務總數。",
      couriers: "快遞員",
      total_couriers_count: "供應商擁有的快遞員總數。",
    },
    configuration: {
      title: "项目",
    },
    delete: {
      title: "消除 项目",
      action: "消除 项目",
      verify_description:
        "我知道所有供應商產品關係都將被刪除！",
      verify_title: "我想刪除這個供應商。",
    },

    send_invitation_tips:
      "我們將向該用戶發送一封邀請電子郵件。如果用戶作為供應商加入您的商店，他們的帳戶將自動分配給他們。",
    only_marketplace_owner_can_edit_user:
      "只有市場所有者才能編輯用戶。如果您想變更該供應商的擁有者，您可以向我們發送請求。",
    vendor_is_disable_msg: "供應商已停用。",
    email_not_match_with_user_msg:
      "輸入的電子郵件與使用者的電子郵件不符 (<b>{user_name}:</b>{user_email})。您確定要傳送電子郵件至<b>{email}</b>嗎？",

    order_information_email_to_email:
      "我們會將訂單資訊傳送至 <b>{email}</b>。",

    set_a_user_for_the_vendor_first_msg: "首先為供應商設定使用者。",

    inputs: {
      slug: {
        label: "项目",
        placeholder: "輸入自訂路徑...",
        hint: "變更供應商動態登入頁面的路徑。",
      },
      email: {
        message: "此電子郵件將收到所有通知和更新。",
      },
      business: {
        false_description: "我以個人身分工作。",
        true_description: "我作為合法認可的商業實體運作。",
        false_title: "项目",
        true_title: "项目",
      },
      bank: {
        hint: "供應商開設帳戶的銀行名稱。",
        placeholder: "项目 銀行 姓名..",
      },
      account_name: {
        hint: "這應該與與銀行帳戶關聯的姓名相符。",
        placeholder: "项目 姓名..",
      },
      account_number: {
        hint: "供應商的唯一帳號。",
        placeholder: "项目 銀行 帳戶 项目..",
      },
      routing_number: {
        hint: "這個數字因國家而異。它用於識別供應商使用的特定銀行分行。",
        placeholder: "您的銀行路由號碼、分類代碼或 BSB 號碼。",
      },
      iban: {
        hint: "國際銀行帳號）：如果供應商的銀行位於歐洲或某些其他國家。",
        placeholder: "项目 IBAN 项目.. 项目. DE89 3704 0044 0000 0000 00",
      },
      swift: {
        hint: "國際銀行帳號）：如果供應商的銀行位於歐洲或某些其他國家。",
        placeholder: "项目 SWIFT 代碼/BIC..",
      },
      branch_address: {
        hint: "供應商擁有帳戶的銀行分行的地址。",
        placeholder: "项目 銀行 地址..",
      },
      enable: {
        label: "项目 地位",
        hint: "您可以全域啟用或停用供應商。客戶將無法從禁用的供應商購買任何東西。",
        true_description:
          "他們將能夠透過您的市場銷售他們的產品。",
      },
      access: {
        label: "供應商面板和訪問",
        true_description:
          "供應商有一個專門的面板來更新數量和價格。",
        hint: "您可以啟用或停用供應商面板，該面板允許供應商更新產品數量和價格並接收部分訂單。",
        false_description: "供應商無法存取任何內容。",
      },

      logo: {
        label: "项目 標識",
      },
      description: {
        placeholder: "寫一個公開的描述...",
      },
    },
  },

  /**
   * @see BVendorDocumentsList
   */
  vendor_documents_list: {
    title: "项目",
    action_upload_doc: "上傳文檔",
    vendor_subtitle:
      "請上傳必要的業務、IP、位址驗證文件。我們需要這些資訊來確認您的合作夥伴關係並為您提供必要的存取權限。",
    marketplace_subtitle:
      "供應商可以提交業務、智慧財產權和地址驗證等文件，以促進其 KYC 流程，從而允許您授予他們適當的存取權限。",
    upload_dialog: {
      title: "上傳文件",
      type: {
        title: "项目 類型",
        subtitle:
          "請僅上傳必要的文件。避免共享任何包含敏感資訊的文件。我們要求提供公開的文件。",
      },
    },
  },

  /**
   * @see BProductBadgesManage
   */
  product_badges: {
    title: "项目",
    subtitle: "新增和編輯自訂產品徽章。",
    only_marketplace_owner_msg: "项目 市場 项目",
    create_new_badge_action: "創造 新的 项目",
    select_a_badge: "選擇徽章...",
    inputs: {
      custom: {
        false_description: "產品徽章是自動建立的。",
        false_title: "项目",
        true_title: "風俗 產品 项目",
        true_description: "在產品頁面中新增自訂徽章。",
      },
    },
    add_custom_badge: {
      title: "風俗 项目",
      subtitle:
        "在我的商店中添加新的自訂徽章。將徽章數量控制在 10 以下。更多徽章會減慢您的商店速度。",
      show_advanced_options: "项目 先進的 项目",

      inputs: {
        title: {
          placeholder: "上市 標題...",
        },
        image: {
          label: "圖片",
          message: "最大限度 圖片 项目: 128KB",
          placeholder: "選擇封面圖片",
        },
        pattern: {
          label: "项目",
          message:
            "對於在其規格中具有此匹配值的產品，請自動顯示此徽章。支援正規表達式。",
          placeholder: "若要顯示所有產品，請寫：*.*",
        },
      },
      notifications: {
        badge_added: "徽章添加成功！",
        badge_updated: "徽章已成功更新！",
        item_not_found_error:
          "找不到該項目。請刷新頁面或聯絡支援人員。",
      },
    },
  },
  /**
   * @see BProductTagsInput
   */
  product_tags: {
    title: "標籤",
    tips: [
      "您可以根據<b>著陸頁</b>上的標籤過濾產品。",
      "您和您的客戶可以在<b>搜尋</b>欄中搜尋這些標籤。",
      "若設定標籤，商品頁面的<b>相關商品欄</b>只會顯示有<b>常用標籤</b>的商品；否則，將顯示相同類別的產品。",
    ],
    inputs: {
      tags: {
        placeholder: "在此連接標籤並按 Enter 鍵。前任。新系列",
      },
    },
    notifications: {
      tags_updated: "標籤已成功更新。",
    },
  },

  /**
   * @see VPageVendorShippingTransportation
   */
  vendor_shipping_services: {
    title: "船運 服務",
    subtitle:
      "市場提供運輸方式來幫助供應商履行訂單。您可以在此處新增運送服務，以便從訂單頁面輕鬆訂購運送標籤。透過與運輸提供者同步地址和追蹤代碼，簡化了流程。",

    subtitle_pickup:
      "該市場為供應商提供提貨服務，讓買家選擇從您所在位置提貨作為運輸選項。您可以在您的個人資料中新增您的取貨地點（您的倉庫將用作預設取貨地點）。",
    action: "新增服務",

    add_dialog: {
      select_service_msg:
        "運輸方式由市場設定，客戶可從中選擇。供應商無法控制這些選項，但可以將其面板與運輸服務整合以直接購買標籤。請從下面的清單中選擇一種方法來查看可用的服務。從下面的清單中選擇運輸服務。此處僅顯示可新增至您商店的可用服務。",
      no_available_service: "不 可用的 项目!",
    },
  },
  /**
   * @see VPageVendorShipping
   */
  vendor_shipping: {
    services: "服務",
  },

  /** {@see BProductProfileMap} **/
  product_location_profile: {
    title: "地點",
    empty_subtitle:
      "如果產品是基於位置的商品，請為其分配位置。",
    dialog: {
      header: "项目 地點 輪廓",
      action_new_location: "添加新位置",
      title: "地點 輪廓",
      subtitle:
        "您可以透過為產品分配位置標籤來將產品固定在地圖位置上。",
      tips: "<b>重要：</b> 如果您想在地圖上的特定位置顯示產品，請為產品指定位置 <b>only</b>。固定產品必須將位置作為其主要規格，例如<b>出租房屋/場所</b>或面對面服務，例如<b>美髮和水療</b>。",
    },
  },

  /** {@see BTranslationButton} **/
  translation_button: {
    header: "多語言",
    auto_action: "自動翻譯",
    premium_user_only: "项目 用戶",
  },

  /** {@see BProductProfileInclude} **/
  product_include_profile: {
    subtitle:
      "包括產品或服務包附帶的物品清單。",
    dialog: {
      header: "產品 项目 項目",
      title: "项目 項目",
      subtitle: "這是產品附帶的物品的彙編。",
      action_manage: "项目 項目",
      action_disable_msg: "市場 所有者",
      select_items_tips:
        "建立或選擇產品或服務附帶的包組件。利用此功能來強調客戶在購買該商品後可以預期收到的商品。我們建議僅在客戶了解其中包含的內容至關重要時（例如購買智慧型手機時）才使用此功能。",
      create_item_tips:
        "或者，您可以新增一個項目。使用方形影像，因為我們會自動將上傳的圖片調整為 256x256 方形格式。為了確保所有模板的最佳外觀，請使用具有透明背景的簡約圖像，並為所有產品保持一致的圖案。",
      create_new_item_action: "創造 新的 项目 物品",
    },
  },

  /** {@see BPageProduct} **/
  product_admin: {
    products_list: "產品列表",
    product: "產品",

    menu: {
      edit: "編輯",
      review: "描述",
      orders: "訂單",
      inventory: "存貨",
      dashboard: "儀表板",
      back_to_products: "產品",
      drop_shipping: "代發貨",
    },

    /** {@see BPageProductDashboard} **/
    dashboard: {
      /** {@see BProductInfoAbstractView} **/
      info: {
        title: "輪廓",
        title_small: "產品",
        category: "產品分類",
        link: "產品鏈接",
        type: "類型",
        inputs: "輸入信息",
        outputs: "輸出信息",
        user_data_form: "買家信息表",
        staff_messages: "職員 项目",
        add_note: "项目 筆記",
        product_tags: "產品 標籤",
        edit_tags: "編輯 標籤",
      },
      /** {@see BProductOrdersAbstractView} **/
      orders: {
        title: "訂單",
        title_small: "未加工",
        physical_orders_title: "此產品的購物車",
        send_count_in_period: "已發貨 訂單 项目 {start} ~ {end}",
        downloads_count_in_period:
          "文件下載計數在 {start} ~ {end} 之間",
      },

      /** {@see BProductInventoryAbstractView} **/
      inventory: {
        title: "存貨",
        title_small: "倉庫",
        total_sell: "總銷售額",
        total_sell_today: "今日銷量",
        total_sell_timespan: "全部的 銷售量 项目 {start} ~ {end}",
        chart: {
          labels: ["存貨", "銷售"],
        },
        subscribers_title: "訂閱者",
        subscribers_title_small: "總認購訂單數",
      },

      /** {@see BProductFinanceCharts} **/
      finance: {
        title: "金融",
        title_small: "購買 報告 项目 {start} ~ {end}.",
        select_mode_title: "顯示者",
        modes: {
          sell: "銷售",
          payment: "支付",
          discount: "折扣",
        },
        currency_select_title: "所選貨幣的價格",
        sell_today: "今日銷量",
        product_price: "產品價格",
        currency_unit: "貨幣單位",
        sell_30days: "30天銷售",
        sell_daily: "每日銷售額",
        sell_yesterday: "昨天的銷售",
      },

      /** {@see BProductRatingCharts} **/
      survey: {
        title: "產品評級",
        title_small: "客戶滿意度報告",
        total_participation: "捐款總數",
        total_participation_tooltip: "產品的評分者總數。",
        today_participation: "今日收視率",
        last7days_participation: "過去 7 天的貢獻",
        chart: {
          participate: "參與",
          participate_title: "投稿數",
          score: "分數",
        },
        users_not_rated_msg: "用戶尚未評價該產品。",
      },

      /** {@see BProductMarketingAbstractView} **/
      inform: {
        title: "客戶期望",
        title_small: "等待折扣或可用性",
        message:
          "當產品開始銷售或可用時通知客戶",
        waiting_for_auction: "等待產品上市",
        waiting_for_available: "等待產品上市。",
        unit: "人",
      },
    },

    /** {@see BPageProductInventory} **/
    inventory: {
      /** {@see BProductInventoryManagement} **/
      variants: {
        inventory_list: "庫存清單",
        add_variant: "添加變體",

        title: "產品庫存/產品變體列表",
        sub_title:
          "如果此產品有多個變體，請在此部分中輸入它們。您可以單獨定義每個變體的數量、價格和折扣；否則將應用產品的默認值進行定價。",
        add_action: "添加變體",
        count_input: "存貨",
        count_input_action: "設置計數",
        management_title: "庫存管理和產品變體",
        add_title: "添加產品變體",
        edit_title: "編輯產品變體",
        notifications: {
          add_success: "添加了產品變體。",
          delete_success: "產品變型已刪除。",
          save_product_inventory_success: "保存的產品庫存。",
        },
      },

      /** {@see BProductInventoryManagementVirtual} **/
      variant_item: {
        price: "價格",
        same_as_product: "與主要產品相似",
        in_stock: "存貨",
        delete_dialog: {
          title: "刪除產品變體",
          message: "是否要刪除此變體？",
        },
      },
      /** {@see BProductVariantAdd} **/
      variant_add_edit: {
        message: "產品編號唯一",
        active_input: "此變體是否有效？",
        sku: "SKU",
        sku_tips: "產品倉庫代碼。",
        mpn: "MPN",
        mpn_tips: "製造商在產品包裝上插入的產品代碼",

        has_pricing_input: "價格與主要產品不同嗎？",
        inventory_unit: "項目",
        images_message:
          "保存此變體後，您將能夠在此處添加圖像。",

        config: {
          title: "產品 项目 設置",
          subtitle: "管理 SKU、MPN 和變體的可用性。",
        },
        variables: {
          title: "變體選項",
          subtitle:
            "輸入十六進位顏色代碼，例如 <b>#654FFF</b>，或以斜線分隔的兩種顏色，例如 <b>#764FFA/#000000</b>。",
          graphical_asset_tips:
            "您可以為變數指派任何值，包括使用 <b>Graphic Assets</b> 的圖像。上傳模式並使用為變體產生的程式碼。",
          graphical_asset_action: "圖形資產",
          graphical_asset_action_caption: "變體選項的影像。",
        },
        smart_unit_price: {
          tips: "根據<b>重量</b>、<b>體積</b>和<b>包裝尺寸</b>計算單價。若要停用此功能，請導覽至商店 > 設定 > 主題 > 產品頁面 > 智慧單價。",
          smart_unit_price: "單元 價格 项目",
        },
        quantity: {
          title: "存貨",
          subtitle: "為每個變體設定庫存水準。",
        },
        price: {
          title: "價錢",
          subtitle:
            "為變體設定自訂價格或使用預設產品價格。",
        },
        package: {
          title: "项目 & 船運",
          subtitle:
            "指定型號的重量和尺寸以確定運輸選項。",
          same_as_product_action: "與產品相同",
        },
        image: {
          title: "项目 圖片",
          subtitle:
            "為每個變體添加獨特的圖像。上傳的第一張圖片將是該變體的主圖片。",
        },
        inputs: {
          sku: {
            message: "庫存單位 (SKU)",
          },
          mpn: {
            message: "製造商零件號 (MPN)",
          },
          gtin: {
            label: "全球貿易項目編號 (GTIN)",
            message:
              "支援的格式：UPC（12 位數字）、EAN（13 位數字）、JAN（8 或 13 位數字）、ISBN（13 位數字）。",
          },
        },
      },
    },

    /** {@see BPageProductArticle} **/
    edit_article: {
      menu: {
        tags: "標籤",
        article: "文章",
      },
    },
  }, // product_admin

  /**
   * @see TransportationsEligibleView
   */
  transportation_eligible: {
    subtitle:
      "可用的運輸服務取決於所提供的尺寸和重量。",
  },

  /** {@see BProductExtraInput} **/
  product_extra_physical: {
    weight: "包裹重量",
    weight_subtitle:
      "在此輸入產品的包裝總重量。此資訊有助於選擇正確的運送方式並確保訂單不會超出運輸限制。",
    weight_unit: "公斤",
    size: "包裝尺寸",
    size_subtitle:
      "在此輸入產品的完整包裝尺寸。此資訊用於選擇正確的運送方式並確保訂單不超過包裹尺寸限制。",

    width: "寬度",
    length: "長度",
    height: "高度",
    lead_time_title: "準備時間",
    lead_time: "準備時間",
    lead_time_subtitle:
      "交貨時間估計準備產品運輸所需的持續時間，這有助於估計交貨時間。",

    lead_time_dimension: "小時）",
    bulk_action: "批量操作",
    bulk_action_subtitle:
      "您可以將包裝資訊應用於所有產品變體。",

    bulk_action_input: "更新所有變體",
    bulk_action_msg:
      "為所有變體設置產品包裝和準備時間。",
    dynamic_lead_time: "動態提前期",
    instant_delivery: "项目 送貨",
  },

  /**
   * @see SGalleryUploadGrid
   */
  gallery_upload_grid: {
    upload_images: "项目 圖片",
  },

  /**
   * @see BProductImagesGallery
   */
  product_images_gallery: {
    dialog_alt: {
      title: "設定圖像替代文字",
      placeholder: "輸入描述性替代文字...",
      success_update_notification: "替代文字已成功更新。",
    },
    dialog_bg_remove: {
      title: "自動刪除背景",
      action: {
        title: "移除背景",
        subtitle: "建立透明背景。",
      },
      success_remove_bg_notification: "背景刪除成功！",
    },
  },
  /**
   * @see VariantGraphicalAssetsList
   */
  variant_graphical_assets: {
    title: "變體圖形資源",
    tips: {
      how_it_works:
        "<b>工作原理：</b><br />在此上傳圖案或商品圖像。若要將這些影像用作變體選項，請在變體值中包含 <b>{filename}</b>。請注意，此程式碼不能用於 <b><s>color</s></b> 值。",
      how_set_name:
        "<b>命名提示：</b><br />上傳檔案名稱的前12個字元將用作資產名稱。此功能非常適合展示產品的可自訂方面，例如摩托車的輪胎尺寸或織物圖案。為了優化此功能的使用，請避免在此處上傳變體圖像，除非圖形資源的數量少於 100 個，例如家具的不同木材類型。",
    },
  },

  /**
   * @see ExtraPricingLevels
   */
  extra_pricing_levels: {
    extra_pricings: "額外定價",
    min_quantity: "敏 數量",
    range_is_out_of_stock: "系列已缺貨！",
  },

  /**
   * @see BProductVariantItem
   */
  product_variant_item: {
    duplicated_variant: "這個變體已經存在！",
    set_color_warning: "請選擇一種顏色。",
    set_volume_warning: "請註明體積。",
    set_pack_warning: "請註明包裝尺寸。",
    set_weight_warning: "請註明重量。",
    set_type_warning: "請選擇類型。",
    set_style_warning: "請選擇一種風格。",
    out_of_stock: "目前缺貨",

    image: {
      tooltip: "⚡ 將圖像拖曳到此處以將其指派給變體。",
    },
    enable: {
      true_tooltip: "該商品可在線上商店購買。",
      false_tooltip: "該商品在線上商店中不可用。",
    },
    restore_dialog: {
      title: "恢復變體",
      message: "您確定要恢復這個已刪除的變體嗎？",
      action: "是的，立即恢復",
    },
    notifications: {
      restore_variant_success: "產品變體已成功恢復。",
    },
  },

  /** {@see BProductImagesGallery} **/
  product_images_list: {
    upload_button: "更多產品圖片",
    upload_an_image: "選擇圖像。",
    notifications: {
      update_sort_success: "圖像排序已保存",
      delete_image_title: "刪除產品圖片",
      delete_image_success: "圖片刪除成功",
    },
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "價格",
    inventory: "存貨",
    discount: "折扣",
  },

  /** {@see BGiftcardTypeAdd} **/
  gift_card_type_edit: {
    title_input: "標題",
    color_input: "卡片顏色",
    charge_input: "初始費用",
    charge_input_hint: "每張卡的初始費用",
    currency_input: "貨幣",
    currency_input_message: "僅適用於使用此貨幣購買",
    lifetime_input: "卡有效期（月）",
    lifetime_input_message: "卡有效期",
    card_image_input: "卡片圖片",
    notifications: {
      create_success: "已創建卡片",
      update_success: "卡已更新",
    },
  },

  /** {@see BInventoryWarehouse} **/
  shop_warehouse_edit: {
    title: "添加倉庫",
    message:
      "輸入您的倉庫地址和資料以計算運費。",
    name_input: "倉庫名稱",
    address: "地址",
    name_input_message: "輸入倉庫的暱稱。",
    person_name: "官員姓名",
    phone_number: "聯繫電話",
    map_title: "店鋪倉庫地址",
    confirm_action: "倉庫審批",
    address_name: "倉庫",
    notifications: {
      success_save: "更改已成功保存。",
    },
  },

  /** {@see BPageShopLogisticInventoryList} **/
  inventory_list: {
    title: "店鋪 存貨",
    subtitle: "列表 项目 全部 產品 项目 店鋪.",
    cant_set_here: "這裡不能設定",

    search_input: "產品搜索...",
    search_input_title: "在商店產品中搜索",
    apply_filter: "應用過濾器",
    inventory: "庫存清單",
    export: "出口庫存",
    import: "進口庫存",
    bulk_price: "批量價格變化",
    bulk_discount: "批量折扣更改",
    category_filter_msg: "⚡ 它將適用於所有產品和子類別！",
    table: {
      waiting: "正在接收信息...請稍候",
      open_state: "積極的",
      close_state: "不活躍",
      image: "圖片",
      product: "產品名稱",
      code: "產品代碼",
      sku: "SKU",
      mpn: "MPN",
      original: "原來的",
      status: "地位",
      in_stock: "有存貨",
      edit: "改變",
    },

    bulk_discount_dialog: {
      title: "批量操作 > 折扣",
      message:
        "注意：以下金額將作為您商店中所有產品折扣的百分比。此外，計算出的折扣值將根據所選貨幣智能轉換為最接近的整數。輸入值時請小心。",
      check: "我同意折扣更改。",
    },
    notifications: {
      save_success: "庫存更改已保存。",
    },
  },

  /**
   * @see BInventoryBulkPrice
   */
  bulk_price_dialog: {
    title: "项目 行動 > 價格",
    message:
      "以下金額將按百分比應用於您商店中所有產品的價格。此外，計算出的價格值將根據所選貨幣智慧轉換為最接近的整數。輸入值時請小心。",
    check: "我同意價格變動。",
    check_description:
      "所選類別和所有子類別的價格將會變更。",
    add_percent_tab: "项目 百分",
    add_constant_tab: "新增常數",
    ending_tab: "結束策略",
    marketplace_listing_price: "项目 價格",

    constant: {
      subtitle:
        "該金額將從產品的當前價格中添加或減去。",
    },
    ending: {
      subtitle:
        "產品當前價格的結尾將變更為指定值。",
    },
    marketplace: {
      title: "市場 项目 價格",
      subtitle:
        "此選項可讓您自動更新市場中產品的上市價格。有時，由於手動價格更改，主要產品價格可能與供應商定價不一致。",
      strategy: {
        min: {
          title: "設定最低價格",
          description:
            "將產品的最低價格設定為掛牌價格。",
        },
        max: {
          title: "設定最高價格",
          description:
            "將產品的最高價格設定為掛牌價格。",
        },
      },
    },

    category: {
      subtitle: "將批量操作限制為類別和所有子類別。",
    },
    vendor: {
      subtitle:
        "將批量操作限制為特定供應商。選擇供應商後，價格更新將應用於該供應商的產品，這代表該供應商的銷售價格。",
      listing_price_need_update_msg:
        "如果您想要更新清單價格（產品清單中顯示的價格），您應該使用相同的篩選器重新提交大量更新，但不選擇供應商。",
    },
    listing_products_changes: "项目 產品 改變",
    total_vendor_products: "全部的 项目 產品",
    total_products: "全部的 產品",
    total_variants: "全部的 變體",
  },

  /** {@see BProductSpecTable} **/
  spec_view: {
    auto_save_input: "自動保存",
    auto_save_input_message: "變更將自動儲存。",
  },

  /** {@see STimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "留在起點",
    title_between_start_end: "留到最後",
    title_after_end: "完成的",
    title_no_start_end: "沒有時間段！",
  },

  /** {@see GeoMap} **/
  geo_map: {
    views: "意見",
    views_unit: "時代",
    product_views: "產品視圖",
    buys: "購買",
    buys_unit: "訂單",
    baskets: "活躍的購物車",
    added_items: "添加項目",
    removed_items: "刪除項目",
  },

  /** {@see BPageShopFinanceGateways} **/
  b_page_shop_finance_gateway: {
    title: "支付 项目",
    sub_title:
      "有效付款方式清單。如果您想為您的商店新增方法，請按以下按鈕。我們強烈建議添加的支付網關不要超過 10 個。",
    add_gateway: "新的 支付 项目",

    add_gateway_dialog: {
      title: "项目 貨幣",
      country_currencies: "當地貨幣",
      crypto_currencies: "项目",

      confirm: "添加付款方式",

      online_methods: "在線方法",
      cod_methods: "貨到付款",
      bank_transfer: "銀行 轉移",
      cash_methods: "项目 支付 (POS)",

      currency_step: {
        title: "選擇貨幣",
        subtitle:
          "盡量將商店中的貨幣數量保持在最低限度，最好少於 3 種。大多數支付網關可以處理幾乎任何貨幣的交易。",
        add_first_currency: {
          subtitle: "請先在您的商店中新增貨幣，然後再繼續。",
          title: "添加貨幣",
        },
      },
      gateway_step: {
        title: "積極的 支付 项目",
        subtitle:
          "請從可用的付款方式中進行選擇。選擇網關後，您將能夠輸入必要的連接詳細信息，將您的商店直接連結到您的首選付款方式。",
      },

      config_step: {
        import_config: "您可以從其他類似網關匯入配置",
        import_from: "项目 從",
      },

      request_add_new_gateway: {
        title: "沒有看到您首選的付款方式？",
        subtitle:
          "如果您的本地付款提供者未列出，請訂閱任何年度方案（包括 Startup foraffordable）並要求整合。如果提供測試帳戶和文檔，我們將在 48 小時內完成。",
      },

      inputs: {
        currency: {
          placeholder: "選擇要匯入的網關...",
        },
        manual: {
          true_title: "手動模式",
          true_description: "您可以手動設定網關配置。",

          false_title: "自動連線",
          false_description:
            "如果您已經設定了網關，系統將自動連線到網關。",
        },
      },
    },
  },

  /** {@see FaqRequestsList} **/
  faq_list: {
    table: {
      nodata: "未找到任何問題。",
      more_data_action: "更多問題..",
      user: "用戶",
      tag: "標籤",
      question: "問題",
      officer: "職員",
      answer: "回答",
      created_at: "日期",
      priority: "優先",
      edit: "編輯",
    },
    dialog: {
      add_new_action: "提交新問題",
      edit_action: "編輯常見問題",
      question_input: "問題",
      question_input_placeholder: "問你的問題..",
      link_input: "關聯",
      link_input_placeholder: "您可以參考回复鏈接。",
      answer_input: "回答",
      answer_input_placeholder: "輸入答案文本..",
      tag_input: "標籤（類別標題）",
      tag_input_placeholder: "輸入一個簡短的標題",
      priority_input: "優先級：（0 到 10）",
    },
    delete_alert: {
      title: "刪除問題",
      message: "要刪除此問題嗎？",
      action: "刪除",
    },
    notifications: {
      send_success: "您的答案已成功提交。",
      delete_success: "您的問題已成功刪除。",
    },
  },
  /** {@see ContactMessagesList} **/
  contact_messages_list: {
    load_more_action: "更多消息..",

    table: {
      nodata: "未找到任何問題。",
      user: "用戶",
      message: "郵件正文",
      category: "類別",
      officer: "職員",
      answer: "回答",
      created_at: "日期",
      contact: "接觸",
      edit: "編輯",
    },

    dialog: {
      title: "回复消息",
      category: "類別",
      user_name: "姓名",
      email: "電子郵件",
      phone: "聯繫電話",
      message: "留言文字",
      status: "響應狀態",
      status_answered: "已回答",
      status_waiting: "等待回复",
      answer_input: "回复文字",
      mail_input: "發郵件",
      mail_input_message:
        "如果您啟用此功能，您的回復將發送到用戶電子郵件。",
    },
    delete_alert: {
      title: "刪除消息",
      message: "您要刪除此消息嗎？",
      action: "刪除",
    },
    notifications: {
      send_success: "您的請求已成功提交。",
      delete_success: "消息已刪除。",
    },
  },
  /** {@see BPageCampaign} **/
  campaign: {
    title: "活動",
    menu: {
      setting: "設置",
      return: "後退",
      dashboard: "儀表板",
      links: "鏈接",
      landing: "降落",
      ads: "廣告",
      finance: "金融",
    },
    /** {@see BPageCampaignDashboard} **/
    dashboard: {
      title: "儀表板",
      status: "狀態概覽",
      sessions: "會話",
      links_overview: "廣告系列鏈接概覽",
      orders: "訂單",
      performance: "廣告系列效果",
      links_funnel: "廣告系列鏈接效果",
      no_links:
        "沒有可用的數據！請創建指向您的廣告系列的鏈接。",
      social: "社交媒體線索",
      conversion_over_time: "隨時間的轉換",
      total_campaign_sell: "按廣告系列的總銷售額",
    },
    /** {@see BPageCampaignFinance} **/
    finance: {
      title: "財務報告",
      campaign_revenue: "活動收入",
      total_revenue:
        "按廣告系列劃分的總收入",
      links_revenue: "活動鏈接收入",
      payments_over_time: "隨時間推移的銷售額",
      all_links: "所有鏈接",
    },
    /** {@see BPageCampaignLanding} **/
    landing: {
      empty_message: "在廣告系列設置中設置著陸頁。",
      set_landing: "設置登陸頁面",
      create_landing: "創建新的登陸頁面",
    },

    /** {@see BPageCampaignLinks} **/
    links: {
      title: "活動鏈接",
      url_input_message: "輸入您的目標頁面網址",
    },

    /** {@see BPageCampaignSetting} **/
    setting: {
      menu: {
        config: "配置",
        timespan: "時間段",
        banner: "橫幅",
        Notification: "通知",
      },

      general_setting: {
        title: "常規廣告系列設置",
        sub_title: "名稱、登陸頁面和折扣代碼",

        name_input: "活動名稱",
        name_input_hint: "為您的廣告系列添加名稱",
        enable_input: "活動是否有效？",
        page_input: "登陸頁面",
        discount_code_input: "優惠碼",
        limit: "折扣限額",
        max_count: "最大計數",
        max_count_unit: "項目",
        start: "開始",
        end: "結尾",
        notification_enable_input: "啟用通知？",

        landing_page: "登陸頁面",
        discount_code: "優惠碼",

        auto: "默認廣告系列",
        auto_message:
          "在您的商店中激活的默認廣告系列",
      },
      time_setting: {
        title: "時間段",
        sub_title:
          "開始日期和時間/結束日期和時間",
        start_input: "開始",
        start_input_placeholder: "選擇活動開始時間",
        end_input: "結尾",
        end_input_placeholder: "選擇活動結束時間",
      },
      banner_setting: {
        title: "店鋪橫幅",
        sub_title:
          "此訊息將作為橫幅突出顯示在商店頁面的頂部。",

        message_input: "留言文字",
        message_input_placeholder: "特別節...",
        message_input_hint: "商店的橫幅消息文本頂部",
        bg_image_input: "背景圖片網址",
        bg_image_input_hint: "完整的背景圖片 URL",
        repeat_pattern: "重複模式",
        simple: "簡單的",
        dark_input: "黑暗主題？",
        icon_input: "圖標",
        icon_input_hint:
          "材料設計圖示名稱或 Fontawsom：fa:fas fa-star",
        anim_input: "動畫地址",
        anim_input_message: "洛蒂動畫檔案 URL",
        preview: "預習",
        preview_update_action: "更新預覽",
        bg_color: "背景顏色",
        icon_bg: "圖標背景顏色",
      },
      notifications: {
        title: "通知",
        sub_title: "創建通知並將其鏈接到您的廣告系列。",
        update_success: "您的廣告系列已更新。",
        action_button: "操作按鈕",
        background_color: "背景顏色",
        text_color: "文字顏色",
        action_color: "動作顏色",
        action_text_color: "動作文本顏色",
        notification_image: "通知圖片",
        notification_bg: "通知背景",
        show_preview: "顯示預覽",
        persistence: "持久性",
        persistence_message:
          "您想在每次用戶訪問網站時顯示",
        radius: "半徑",
        show_delay: "顯示延遲",
      },
    },
  },

  /** {@see BCategoryAdd} **/
  add_category: {
    title_edit: "編輯類別",
    title_update: "添加新類別",

    config: {
      subtitle:
        "類別有助於簡化產品管理，讓客戶更輕鬆地在您的商店中找到產品。",
    },
    parent: {
      subtitle:
        "該類別將顯示在其父類別下。如果產品沒有父類別，它將顯示在主類別中。",
    },
    template: {
      title: "模板",
      edit_page: "編輯 项目",
      Pages_list: "项目 列表",
      subtitle:
        "您可以透過疊加自訂頁面來增強類別頁面的顯示。最好的方法是建立具有透明背景的頁面，並針對每個類別設計 1 到 2 個部分。然後，您可以將一個頁面連結到多個類別，使用動態內容單獨自訂每個類別。",
    },
    critical_zone: {
      title: "臨界區",
      subtitle:
        "如果刪除某個類別，其子類別和產品將移至父目錄<b>📁 {parent}</b>。若要管理不在產品清單中的類別，請前往商店 > 類別標籤。",
      accept_delete: {
        true_description: "我想刪除這個類別。",
        true_title: "项目 消除 類別",
      },
    },

    menu: {
      delete: "刪除類別",
      filter: "過濾器",
      settings: "設置",
      back: "後退",
    },
    title_input: "類別標題 *",
    title_input_error: "選擇類別標題",
    name_input: "類別名稱（英文） *",
    name_input_error: "為類別選擇一個唯一的名稱",
    description_input: "類別說明",
    description_input_message: "輸入類別的簡要說明..",
    parent_input: "父類",
    parent_input_message: "此類別出現在商店主頁上。",
    image_input: "類別圖片",
    image_input_placeholder: "選擇類別的圖像",
    edit_action: "編輯類別",
    add_action: "添加類別",
    back_action: "後退",
    no_category: "沒有分類",
    star: "星星",

    filter: {
      title: "類別過濾器",
      sub_title: "管理適用於該類別產品的過濾器和類別。",
      message:
        "在下面的框中輸入並保存該類別的通用技術特徵標題。保存列表後，過濾器類別將與每個類別的內容一起顯示。顏色、重量、尺寸、品牌等會自動從產品變型中提取。",
    },
    delete_alert: {
      title: "刪除類別",
      message: "您要刪除 {title} 類別嗎？",
      action: "刪除",
    },
    notifications: {
      add_success: "添加了新類別。",
      edit_success: "類別已編輯。",
      delete_success: "已刪除 {title}。",
    },
    /** {@see BCategoryFilterEditor} **/
    edit_filter: {
      spec_input: "技術規格表",

      price: "價格",
      min: "敏",
      max: "最大限度",
      suggested_list: {
        brand: "牌",
        colors: "顏色",
        styles: "設計",
        volumes: "體積",
        weights: "重量",
        packs: "每包數量",
        types: "類型",
      },
      notifications: {
        edit_success: "類別已編輯。",
      },
      manually_update_filters_tips:
        "<b>重要！ </b> 產品變更時篩選器會自動更新。但是，對類別中的產品進行更改後，請返回此處並點擊“儲存/重新生成”按鈕以刷新過濾器。",

      inputs: {
        spec: {
          message:
            "您希望在篩選器部分中顯示的功能列表",
          placeholder: "選擇要在過濾器中顯示的規格...",
        },
      },
    },
  },

  /** {@see BAppShopList} **/
  apps_list: {
    nodata: "您的商店中沒有安裝應用程序",
    inactive: "不活躍",
    my_apps: "我的應用",
    app_store: "添加新應用",
  },

  /** {@see BShopAdd} **/
  add_shop: {
    menu: {
      shop_title: "店鋪名稱",
      shop_name: "店鋪名稱",
      description: "描述",
      contact: "聯繫信息",
      image: "圖片",
    },
    title_input: "標題",
    title_input_tips: "輸入您的商店、品牌或公司的名稱。",
    active_message: "設置為每個人都可以訪問您的網站。",
    language_input_message: "選擇您的商店語言。",
    name_input: "姓名",
    name_input_message: "輸入商店的名稱。",
    name_input_tips:
      "請勿使用非英文字符、空格或字母，如果使用，可能無法正常顯示店鋪名稱。",
    description_input: "店鋪介紹",
    description_input_message: "寫一個關於您的業務的簡短描述。",
    description_input_tips:
      "此描述將顯示在您商店的頁腳中，也將用作商店頁面的預設元標記描述。",
    address_input: "店鋪地址",
    address_input_message: "輸入確切的商店位置地址",

    phone_input: "電話號碼",
    phone_input_message: "客戶聯繫電話",
    phone_input_tips:
      "輸入帶有國家/地區代碼的聯絡電話。該號碼也用於在 Google 搜尋中顯示資訊。",
    email_input: "電子郵件",
    email_input_message: "客戶的電子郵件地址",
    locality_input: "地點",
    locality_input_message: "店面位置",
    region_input: "州或省",
    region_input_message: "您經營所在的州或省",
    country_input: "國家",
    country_input_message: "經營國家",
    postal_code_input: "郵政編碼",
    postal_code_input_message: "商店郵政編碼",
    image_input: "店鋪形象",

    map: {
      title: "店鋪地址",
      confirm: "地址登記",
      address: "地址",
      receptor: "店鋪",
    },

    create_shop_action: "創建商店",
    update_shop_action: "更新",

    notifications: {
      copy_success: "店鋪地址複印件。",
      name_available: `此名稱 ({name}) 可用。`,
      add_success: `商店 {title} 已創建。`,
      edit_success: "商店編輯。",
    },
  },

  /** {@see BProductInventoryManagementVirtual} **/
  virtual_items_list: {
    add_virtual_item: "添加虛擬物品",
    add_virtual_item_desc:
      "要銷售虛擬產品，您必須在此部分中添加它們。虛擬物品的數量等於本節中的免費物品數量。一旦客戶購買了虛擬物品，鏈接就會發送給他們。",

    filter_action: "應用過濾器",
    not_processed: "未處理的訂單",
    title: "物品清單",
    vew_order: "查看訂單",

    table: {
      nodata: "沒有項目",
      product: "產品",
      data: "數據",
      status: "地位",
      user_message: "用戶留言",
      updated_at: "最後更新",
      order: "命令",
      delete: "刪除",
    },
    notifications: {
      delete_success: "項目已成功刪除。",
    },
  },

  /** {@see BProductVirtualItemAdd} **/
  add_virtual_item: {
    title_edit: "編輯值",
    title_add: "將項目添加到產品",
    sub_title: "創建和編輯虛擬產品",
    message:
      "付款完成後，我們會將虛擬物品的價值發送給買家。您可以在「產品」>「編輯」>「輸出」標籤中設定此表單的結構。",
    edit_outputs: "編輯輸出表格",
    notifications: {
      edit_success: "項目已編輯。",
      add_success: "項目已添加到列表中。",
    },
  },

  /** {@see BPageOrderVirtual} **/
  virtual_process_center: {
    title: "加工中心",
    sub_title: "訂單處理",
    virtual_product: "虛擬產品",
    menu: {
      report: "報告",
      timeline: "時間線",
      order: "命令",
    },

    /** {@see BOrderVirtualItem} **/
    outputs_widget: {
      title: "輸出形式",
      table: {
        title: "標題",
        value: "價值",
      },
      tips: [
        "完成客戶要求後，按下訂單確認鍵以通知買家訂單。",
        "一旦訂單被批准，買家將無法編輯輸入資訊。",
      ],
      alerts: {
        order_completed_by_admin: "訂單已完成。",
        order_completed_by_buyer: "買家已完成訂單。",
        waiting_for_buyer: "等待買家批准..",
      },
    },
  },

  /** {@see BPageOrderFile} **/
  file_process_center: {
    title: "加工中心",
    sub_title: "訂單處理",
    menu: {
      report: "報告",
      timeline: "時間線",
      order: "命令",
    },
  },

  /** {@see BOrderDashboard} **/
  process_order_page_dashboard: {
    title: "訂單處理",
    cancel_order_action: "取消訂單",
    open_basket_cation:
      "此購物車已打開，這意味著客戶正在購物且尚未支付訂單。",

    reject_dialog: {
      title: "拒絕訂單的原因",
      message:
        "從下面的列表中選擇拒絕此訂單的原因。請務必通知客戶取消和退款流程。退款必須在 12 小時內完成。",
      confirm_now_action: "取消 命令 项目",
      confirm_in48h_action: "取消 命令 项目 48 项目",

      dismiss_reject_action: "取消訂單",

      options: {
        title: "项目",
        subtitle:
          "如果您想立即取消訂單，可以使用此選項。",
      },

      express_input: {
        true_title: "项目 | 取消 命令 项目",
        false_title: "项目 | 取消 命令 项目 48 项目",
        true_description:
          "此選項將立即取消您的訂單並立即更新庫存。",
        false_description:
          "此選項將在 48 小時後取消您的訂單。在此之前，物品將被保留，其他人無法購買。",
      },
    },

    notifications: {
      update_status_success: "訂單狀態已更新。",
      reject_update_success:
        "訂單取消狀態已更新。",
      dismiss_reject_success:
        "訂單已返回正常處理流程。",
      set_tracking_success: "訂單跟踪 ID 已成功保存。",
      shipping_address_update_success:
        "送貨地址已成功更新。",
      vendor_order_status_update_success:
        "供應商履行狀態已成功更新。",
    },
  },
  /** {@see BPageOrderPhysical} **/
  /** {@see BPageOrderVirtual} **/
  /** {@see BPageOrderFile} **/
  /** {@see BPageOrderService} **/
  process_center: {
    title: "加工中心",

    physical_product: "實物產品",
    menu: {
      label: "包裝標籤",
      receipt: "發票",
      back: "後退",
      return: "返回",
      report: "報告",
      timeline: "時間線",
      inputs: "輸入",
      order: "命令",
    },

    /** {@see OrderPaymentWidget} **/
    payment_widget: {
      title: "支付",
      checklist: [
        "檢查訂單金額和客戶付款。",
        "项目 計費 地址.",
        "確保輸入的資訊正確，尤其是貨到付款時。",
      ],
      action_cod_pay: "客戶確認付款",
      action_dir_pay: "確認上傳的付款收據",
      payment_receipt_not_uploaded_error:
        "付款收據尚未上傳！",

      waiting_for_pay: "待付款",
      processing_payment: "處理付款",
      processing_cancel: "付款已取消",
      require_capture: "需要捕獲",
      paid: "有薪酬的",
      cod_pay_info:
        "當您收到客戶的訂單後，您可以確認付款並完成訂單。",
      dir_pay_info:
        "付款收據將出現在上方。在您確認付款之前，請與您的銀行核實存款金額和收據信息。",

      created_date: "創建日期",
      pay_date: "付款日期",
      payment_gateway: "支付網關",
      payment_method: "付款方式",
      risk: "風險價值",
      billing_details: "結算明細",

      add_transaction: "添加新賬單",
      add_transactions_message:
        "您必須為此訂單創建至少一個交易。在某些情況下，需要分幾個步驟付款。用戶必須支付哪些交易將由您在工作期間確定。",

      add_bill_dialog: {
        title: "添加發票",
        message:
          "您可以為此訂單添加一張或多張新發票。客戶將看到這些發票，並根據工作進度支付每一張。",
        amount_input: "發票金額",
        action: "添加賬單",
      },
      edit_bill_dialog: {
        title: "編輯發票",
        message: "您可以編輯待處理的發票。",
        action: "編輯發票",
      },
      bill_cash_payment_dialog: {
        title: "登記現金支付",
        message:
          "如果買方以現金或在線支付以外的方式支付了此發票的金額，請在本節中選擇一個選項，註冊並確認他的付款。在此部分中，您只能看到您商店的現金支付網關，如果您沒有看到這樣的選項，您必須在您的商店中以所選貨幣激活現金支付網關。",
        action: "確認賬單支付",
      },

      table: {
        title: "標題",
        amount: "數量",
        description: "描述",
        info: "信息",
      },
      user_payment: "客戶付款",
      cod: "貨到付款",
      gateway_wage: "費用",
      gift_card: "禮物卡",
      discount_code: {
        title: "優惠碼",
        code: "代碼",
        percent: "百分",
        limit: "限制",
      },
      club: {
        title: "顧客俱樂部",
        percent: "百分",
        limit: "限制",
      },

      coupon: {
        title: "優惠券",
        percent: "百分",
        limit: "限制",
        charge: "收費",
      },
      delivery: {
        title: "運輸費",
        not_paid: "沒有支付",
      },
      samin: {
        title: "服務費",
        description:
          "該金額已從您的 Selldone 錢包帳戶中扣除。",
        tooltip: "計算總服務費",
        percent: "百分",
      },
      affiliate: {
        title: "加盟佣金",
        affiliate_message:
          "您應該將此佣金支付給您的會員。此過程由您自己完成。",
      },
      total_price: "總項目價格",
      total_items_discount: "商品折扣",
      total_price_after_offers: "申請報價後總計",

      total_order_price_before_tax: "稅前總價",

      user_payment_amount: "買家付款金額",
      samin_wage: "Selldone 費用",
      pay_cod_dialog: {
        title: "您收到訂單款了嗎？",
        message:
          "在確保客戶全額付款後，在貨到付款方式中確認此選項。",
        confirm_action: "確認客戶付款",
      },
      pay_dir_dialog: {
        title: "您收到訂單款了嗎？",
        message:
          "在您的銀行批准上傳的付款收據後確認此選項。請務必與您的銀行核對付款。",
        confirm_action: "確認客戶付款",
      },

      notifications: {
        pay_confirm_message:
          "付款已確認。<br>端口：{gateway_name}<br>日期：{payment_at}",
        pay_fail_title: "沒有支付",
        pay_fail_message: "無法批准付款！",
      },
    },
    /** {@see BOrderDashboardCart} **/
    basket_list: {
      checklist: [
        "项目 存貨.",
        "如果該商品缺貨，則必須將該商品支付的金額退還給客戶。",
      ],
      message:
        "如果有任何商品不可用或無法出售，請取消選中它旁邊的框，然後單擊“<b>確認訂單”</b>按鈕。",
      action: "訂單確認",
      list_of_items: "購物車清單",
      apply_change_action: "應用更改",
      cant_apply_change: "無法進行更改",
      lottery_prize_inform:
        "您的客戶贏得該產品的 1 倍。使用此訂單發送禮物。",

      need_to_refund: {
        title: "要求客戶退款",
        message:
          "我們會計算您需要手動退款的總金額。它是根據不可用的商品和尚未退款的總價值來計算的。",
        calculated_approximately:
          "金額是大約計算的。具體金額請自行計算。",
      },
      need_payback: {
        title: "项目 收費 项目",
        message:
          "我們注意到，根據購物車中的商品，退還給客戶的總金額高於應付金額。您可能需要向客戶收取費用才能收回多餘的金額。",
      },
      need_no_refund: {
        title: "無需退款",
      },
      total_refund: {
        title: "全部的 项目",
        message:
          "這是您的支付網關自動退款的總金額。僅部分支付服務支援此功能，因此您需要手動退款。",
      },
    },
    /** {@see BOrderDashboardPreparing} **/
    preparing: {
      title: "準備",
      packing_weight: "包裝重量",
      delivery_type: "郵寄方式",
      packing_size: "包裝尺寸",
      distance_warning: "超出允許的距離限制。",
      weight_warning: "超過允許的重量。",
      volume_warning: "超過允許的包裝尺寸。",
      items_weight_calculation:
        "项目 重量 项目 全部 項目 项目 {weight} {unit}",
      not_available_message:
        "當您被禁止詢問送貨地址並且用戶購買後未填寫地址時，此功能不可用！",

      message:
        "如果訂單已準備好發貨，請單擊以下<b>訂單就緒</b>按鈕。",
      action: "訂單準備發貨",
      checklist: [
        "遵循包裝標準規則。",
        "列印物品清單並將其放入包裹內。",
        "列印標籤並將其貼到盒子上。",
      ],
    },

    basket_items: "訂購商品列表",

    delivered_dialog: {
      title: "客戶收到此訂單了嗎？",
      message: "當您知道客戶收到訂單時確認此選項",
      confirm_action: "我確認客戶收到包裹",
    },
    return_delivery_dialog: {
      title: "訂單在送貨過程中是否有任何問題或被退回？",
      message:
        "如果訂單因某種原因在發送後被退回並且需要重新發送貨物，請確認退回貨物的選項。",
      confirm_action: "確認退貨",
    },

    notifications: {
      update_status_success: "訂單狀態已更新。",
      reject_update_success: "訂單取消狀態已更新。",
      dismiss_reject_success: "訂單被取消。",
      pay_cod_success: "貨到付款確認。",
      pay_dir_success:
        "通過卡對卡付款或匯款確認付款。",
      set_tracking_success: "訂單跟踪 ID 已成功保存。",
      new_bill_success: "新賬單添加成功。",
      edit_bill_success: "賬單更新成功。",
      update_bill_status_success: "賬單狀態更新成功。",
      set_payment_in_cash_success: "賬單支付手動確認。",
    },

    delete_bill_dialog: {
      title: "刪除賬單",
      message: "您確定要刪除此帳單嗎？",
      action: "是的，立即刪除",
    },
  },

  /** {@see AdminShopGatewayManagementPage} **/
  shop_gateway: {
    title: "網關",
    menu: {
      dashboard: "儀表板",
      edit: "編輯",
      transactions: "交易",
      back: "網關",
    },

    /** {@see BPageGatewayDashboard} **/
    dashboard: {
      title: "網關管理",

      /** {@see BGatewayPaymentsChart} **/
      gateway_data_widget: {
        title: "付款報告",
        subtitle:
          "建立在選定時間內進行的付款和交易。",
        chart: {
          times: "數數",
          buys: "購買數量",
          pays: "支付成功",
          amount_pay: "有薪酬的",
          amount_wage: "費用",
        },
      },
    },

    /** {@see BPageGatewayEdit} **/
    edit: {
      title: "編輯網關",
      menu: {
        delete: "移除網關",
      },
      edit_action: "編輯網關",
    },

    /** {@see BPageGatewayTransactions} **/
    transactions: {
      title: "交易",
      table: {
        amount: "數量",
        currency: "貨幣",
        livemode: "類型",
        status: "地位",
        target_id: "命令",
        risk: "風險",
        card: "卡片",
        issued_at: "發行日期",
        payment_at: "付款日期",
      },
      live_mode: "居住",
      test_mode: "沙盒",
    },
  },

  /** {@see BGatewayOverview} **/
  b_gateway_overview: {
    title: "信息",
    subtitle: "支付網關配置和狀態概述。",
    status: "地位",
    cod_transportation: "项目 船運",
    cod_transportations_error:
      "為至少一種運送方式啟用貨到付款！",
    payment_type: "支付 類型",
    cod: "貨到付款",
    online: "项目 支付",
    wage_percent: "費用 百分",
    min_wage: "项目 費用",
    max_wage: "项目 費用",
    min_amount: "项目 交易",
    max_amount: "项目 交易",
    timeout: "支付 项目",
    timeout_unit: "项目",
    link: "網關 關聯",
    your_gateway_status: "项目 網關 地位",
    oauth2_button: "自動連接到 {gateway}",
    fee_payment_message:
      "客戶支付的全部金額將轉入您的帳戶。服務費將從您在Selldone的錢包中扣除。",

    auto_config: "项目 配置",

    keys: {
      title: "私人的 项目",
      subtitle:
        "用於支付的私鑰列表。此資訊對於建立和管理付款至關重要。",
    },
    extra_config: {
      title: "支付服務配置",
      subtitle: "支付網關的附加設定資訊。",
    },

    recommended_actions: {
      title: "项目 行動",
      subtitle:
        "透過這些步驟，您將開始收到客戶的實際付款。",
      action_enable: "项目 至 使能夠 项目",
      make_live_enable: "项目 至 居住 项目",
    },
  },

  /** {@see BGatewayAdd} **/
  edit_gateway: {
    public_keys: "公鑰",
    private_keys: "私鑰（機密）",
    link: "網站",
    status_title: "支付 项目 地位",
    status_message:
      "將付款方式配置為「有效」或「無效」。只有設定為活動的方法才會向客戶顯示。",
    status_true_description: "您的客戶可以使用此付款方式付款。",

    manual_title: "手動/自動抓取支付",
    manual_message:
      "建立付款時，您可以暫停符合條件的付款方式，以保留稍後可以提取的資金。例如，飯店通常會在客人抵達之前授權全額付款，然後在客人退房時扣款。",

    gateway_status: "地位",
    wallet: "區塊鏈錢包",
    developer_title: "開發者模式",
    developer_message:
      "如果網關支持調試模式，您可以處理模擬事務。",
    live_mode_message: "所有交易都將處於實時模式。",

    notifications: {
      edit_success: "網關 {gateway_name} 已編輯。",
      success_delete: "付款方式已刪除！",
    },
    debug: {
      title: "開發 & 项目",
      subtitle: "您可以啟用調試模式來測試支付網關。",
    },

    limit: {
      title: "命令 限制",
      subtitle: "設定此支付網關的最低訂單金額。",
    },
    limit_input: {
      title: "项目 命令 數量",
      msg: "零意味著沒有限制。",
    },
    currency_input: {
      message: "該支付網關支援的貨幣。",
    },
    gateway_code: "網關 代碼",

    hold_only_for: "项目 支付 项目 可用的 项目",
    manual_input: {
      false_description:
        "在支付提供者係統中，付款狀態將自動從待處理變更為已確認。",
      false_title: "项目 支付 项目",
      true_title: "保留付款和手動確認",
      true_description:
        "暫停付款，因此您需要驗證訂單的付款，以在付款提供者係統中將其狀態從待處理更改為已確認。",
    },
    delete_verify_input: {
      true_title: "我想刪除此付款方式。",
      true_description:
        "此付款方式將從商店中刪除，並且顧客將無法使用。",
    },
    delete_alert: {
      title: "刪除 支付 项目",
      message: "您確定從您的商店中刪除此付款方式嗎？",
      action: "刪除 支付 项目",
    },
  },

  /** {@see BPageGiftcard} **/
  gift_card: {
    title: "禮品卡",
    menu: {
      edit: "編輯",
      new_card: "創建卡片",
      list: "牌",
      orders: "訂單",
      dashboard: "儀表板",
      back: "禮品卡",
    },

    /** {@see AdminGiftCardDashboardPage} **/
    dashboard: {
      title: "禮品卡管理儀表板",

      /** {@see BGiftcardStatisticsPayment} **/
      amount_widget: {
        title: "信用卡支付",
        title_small: "30天",
        chart_amount_pay: {
          y: "和",
          label: "支付",
        },
        chart_buys: {
          y: "購買",
          label: "購買",
        },
        total_buy: "採購總額",
        total_pay_30days: "30天總付款",
        total_pay_today: "今天的付款",
      },

      /** {@see BGiftcardStatisticsCount} **/
      count_widget: {
        title: "發卡張數",
        title_small: "30天",
        total_cards: "卡片總數",
        used_cards_30days: "30天使用",
        used_today: "今天的用法",
        chart: {
          new_cards: "新卡",
          used_cards: "用過的卡",
          new_card_name: "新卡",
          used_card_name: "用過的",
        },
      },

      /** {@see BGiftcardExport} **/
      export: {
        title: "獲取輸出文件",
        cards_list: "獲取卡片列表",
        get_report: "獲取報告",
      },
    }, // End of dashboard

    /** {@see AdminGiftCardManagementPage} **/
    cards: {
      title: "發行卡清單",
      subtitle:
        "查看和管理所有已發行的卡片。您可以手動向用戶發送卡片或根據需要禁止他們。",

      loading_message: "正在獲取信息...請稍候",
      issue_to_user: "發給用戶",
      table: {
        card_number: "卡號",
        balance: "平衡",
        paid: "有薪酬的",
        edit: "編輯",
        delete: "刪除",
        expire: "過期",
        user: "用戶",
      },
      delete_alert: {
        title: "移除卡",
        message: "確定要刪除此卡嗎？",
        action: "刪除",
      },
      notifications: {
        delete_success: "禮品卡已刪除。",
        edit_success: "已進行更改。",
        issue_success: "已成功向用戶發放禮品卡。",
      },
      issue_dialog: {
        title: "發行禮品卡",
        action: "我確定。立即發卡",
      },
    }, // End of cards

    /** {@see BGiftcardAdd} **/
    gift_card_edit: {
      title: "創建禮品卡",
      validity: "有效性",
      validity_unit: "月",
      currency: "貨幣",
      initial_balance: "初始卡餘額",
      count: "數數",
      count_unit: "項目）",
      enable_input_message: "創建卡的狀態",
      notifications: {
        create_success_title: "節省",
        create_success: "{count} 張新卡片已創建",
      },
    },

    /** {@see AdminGiftCardEditPage} **/
    gift_card_edit_page: {
      title: "編輯禮品卡",
    },
  },

  /** {@see BPageDiscountCode} **/
  shop_discount: {
    title: "優惠碼",
    up_to: "取決於",
    menu: {
      dashboard: "儀表板",
      orders: "訂單",
      back: "折扣碼",
    },

    /** {@see BPageDiscountCodeDashboard} **/
    dashboard: {
      title: "折扣碼管理儀表板",
      chart_amount_buy: {
        y: "購買金額{currency}",
        label: "買",
      },
      chart_amount_discount: {
        y: "折扣 {currency}",
        label: "折扣",
      },
      chart_used: {
        y: "使用量",
        label: "時代",
      },
    },
  },

  /** {@see BPageCoupon} **/
  shop_coupon: {
    title: "優惠券",
    up_to: "取決於",
    menu: {
      dashboard: "儀表板",
      back: "優惠券",
      orders: "訂單",
    },

    /** {@see BPageCouponDashboard} **/
    dashboard: {
      title: "優惠券管理儀表板",
      chart_amount_buy: {
        y: "購買金額{currency}",
        label: "買",
      },
      chart_amount_discount: {
        y: "優惠券 {currency}",
        label: "優惠券",
      },
      chart_used: {
        y: "使用量",
        label: "時代",
      },
    },
  },

  /** {@see BPageOffer} **/
  shop_offer: {
    title: "優惠",
    up_to: "取決於",
    menu: {
      dashboard: "儀表板",
      orders: "訂單",
      back: "優惠",
    },

    /** {@see BPageOfferDashboard} **/
    dashboard: {
      title: "報價管理儀表板",
      chart_amount_buy: {
        y: "購買金額{currency}",
        label: "買",
      },
      chart_amount_discount: {
        y: "優惠{currency}",
        label: "提供",
      },
      chart_used: {
        y: "使用量",
        label: "時代",
      },
    },
  },

  /**
   * @see BOrderConnectsList
   */
  order_connect_list: {
    subtitle:
      "需要由第三方提供者履行的外部同步訂單清單。",
  },
  /** {@see BAccountCard} **/
  account_card: {
    pay_create_receipt: "支付啟動費",
    balance: "平衡",
    locked: "鎖定",
    transfer: "轉移",
    charge: "訂金",
  },

  /** {@see TimelineStatus} **/
  timeline: {
    note: "{message}",
    info: "{message}",
    error: "{message}",

    buy: "查看",
    payment: "支付",

    confirm:
      "訂單確認， <b>{success}</b>確認和<b>{fail}</b>被拒絕。",
    prepare: "訂單準備。",
    send: "訂單由<b>{delivery} 發貨</b>。",
    delivered: "訂單已交付給客戶。",
    "fill-inputs": "買家填寫的輸入信息表。",
    "return-add": "提交產品退貨請求，{product}。",
    "return-accept": "退貨請求 {return_code} 已確認。",
    "return-reject": "請求 {return_code} 被拒絕。",

    "reject-order": "拒絕訂單。代碼：{reject_code}。",
    "reject-order-clear": "取消訂單拒絕。代碼：{reject_code}。",

    "delivery-returned":
      "客戶未收到訂單並被退回。需要重新發貨。",
    "delivery-canceled": "交貨取消。需要重新發貨。",
    "edit-receiver-info": "訂單收貨地址由買家編輯。",
    "edit-billing-info": "由買方編輯的帳單地址。",
    "payment-cod-confirm": "COD 付款已確認。",
    "payment-cash-confirm":
      "已確認以現金支付 {amount} {currency} 的賬單。",
    "payment-dir-confirm": "確認直接付款收據。",

    vendor: "供應商訂單狀態從<b>{from}</b>更改為<b>{to}</b> 。",

    "connect-sync": "訂單由 Connect OS 同步。",
    "connect-shipped": "Connect 訂單已由 {shipping} 出貨。",
    "connect-returned": "連接訂單已由 {shipping} 傳回。",
    "connect-failed": "合作夥伴未能完成訂單。 {reason}",
    "connect-canceled": "訂單已被合作夥伴取消。 {reason}",
    "connect-action-cancel": "請求取消訂單。 {reason}",
    "connect-put-hold": "訂單被擱置。 {reason}",
    "connect-remove-hold": "訂單已解除保留。 {reason}",
    "connect-confirmed": "訂單得到確認。",

    "vendor-payout": "💸 支付給供應商。",
    "vendor-wallet-transaction": "项目 錢包 交易.",

    "vendor-sms":
      "🔔 訂單通知簡訊已發送至<b>{vendor}</b> ╏ {phone}。",

    // ━━━━━━━━━━━━━━━━━━━━━━ Email Packs ━━━━━━━━━━━━━━━━━━━━━━

    "email-buy": "向客戶發送購買確認電子郵件。",
    "email-payment": "向客戶發送付款確認電子郵件。",
    "email-update": "發送 命令 更新 電子郵件 至 项目.",

    "email-vendor":
      "🔔 訂單通知郵件已發送至<b>{vendor}</b> ╏ {email}。",

    // ━━━━━━━━━━━━━━━━━━━━━━ SMS Packs ━━━━━━━━━━━━━━━━━━━━━━
    "sms-payment":
      "透過 {phone} 向客戶發送付款確認簡訊。",
    "sms-ready-to-ship":
      "向客戶發送短信，通知他們的訂單已準備好透過 {phone} 發貨。",
    "sms-ready-to-pickup":
      "向客戶發送短信，通知他們的訂單已準備好透過 {phone} 取貨。",
    "sms-order-confirmation":
      "透過 {phone} 向客戶發送訂單確認簡訊。",

    "count-adjustment":
      "產品「{product}」的數量已從 {from} 更新為 {to}。",
  },

  /** {@see FinanceInlineChart} **/
  inline_chart: {
    today: "今天",
    last_days: "{days} 天前",
  },
  /** {@see BProductsWindow} **/
  products_select: {
    move_category: "將類別<b>{category}</b>移至另一個類別",
    move_product: "將產品<b>{product}</b>移至類別",
    load_more_products:
      "此類別中有更多產品可供選擇。點擊可載入更多項目。",
    product_menu: {
      dashboard: "產品儀表板",
      inventory: "庫存和變體",
    },
    notifications: {
      copy_success: "產品副本。",
      change_category_success: "產品類別已編輯。",
    },

    filter_box: {
      no_root_filter_message: "您的根目錄中有產品，但沒有過濾器。",
      has_root_filter_message: "您可以為根類別設定篩選器。",
      set_filter_message: "您可以設定過濾器。",
      edit_action: "編輯 项目 過濾器",
      clear_action: "清除根過濾器",
    },
    ai: {
      title: "AI 產品 项目",
    },
    menu: {
      select_all_products: "项目 全部 產品",
      unselect: "项目",
      sort_categories: "项目 / 项目 類別",
      subscription_vendor_not_support_message:
        "無法為訂閱產品指定供應商！訂閱產品必須始終有供應商作為其所有者！",
      vendor_owner_not_assignable_message:
        "無法為以供應商為所有者的產品分配供應商！",
      category_assign_profile: "將設定檔指派給類別中的產品",
      category_assign_profile_subtitle: "TAX, 船運, 项目, 项目,...",
      bulk_discount: "项目 折扣",
      bulk_discount_subtitle: "项目 折扣 项目 全部 產品.",
    },

    engine: {
      title: "项目 產品 项目",
      subtitle:
        "將從選定的類別和標籤載入更多產品。",
      load_in_tips: "從 {category} 中的類別載入產品。",
      action: "編輯 {category} 项目",
    },
  },
  /** {@see BProductsPanel} **/
  product_panel: {
    excel_import: {
      title: "將 Excel/CSV 檔案拖曳到此處。",
      select_file: "選擇文件",
      max_file: "最大檔案大小：20mb",
      download_sample: "下載樣本",
    },
    ai: {
      title: "AI 產品 项目",
    },
  },

  /** {@see BOrderDashboardVendor} **/
  order_vendor: {
    has_panel: "有面板",
    no_panel: "不 项目",
    manual_action: {
      title: "项目 行動",
      message: "您可以手動更新供應商訂單狀態。",
      guides: [
        "具有面板存取權限的供應商可以在其專用儀表板中更新其履行情況（子訂單）。",
        "如果供應商沒有面板存取權限，供應商訂單狀態將透過變更購物籃狀態自動變更。",
        "您可以手動更新供應商訂單。",
      ],
    },
    payouts: {
      title: "项目",
      message: "管理供應商付款和交易。",

      charge_tooltip: "收費 项目 錢包.",
      withdraw_tooltip: "项目 從 项目 錢包.",
      payout_tooltip: "付款給供應商。",
    },
    order_canceled: "命令 项目",
    order_rejected: "訂單被供應商拒絕",
  },

  /**
   * @see VPageVendorDashboard
   */
  vendor_dashboard: {
    info: {
      subtitle: "市場 项目.",
    },
    performance: {
      subtitle: "项目 銷售量 表現.",
    },
    products: {
      title: "產品",
      subtitle:
        "在這裡您可以查看市場上列出的產品數量。不包括多個供應商的產品。",
    },
    wallets: {
      title: "项目 錢包",
      subtitle:
        "您無需手動添加錢包！供應商錢包將自動創建。",
    },

    open_marketplace_page: "项目 市場 项目",
    open_my_store_page: "開啟我的商店頁面",
    open_my_listing_page: "開啟我的清單頁面",
    add_products_permission: "项目 產品 项目",
    add_categories_permission: "项目 類別 项目",
  },

  /**
   * @see VPageVendorInventory
   */
  vendor_inventory: {
    title: "產品列表",
    subtitle:
      "這是您在市場上的產品清單。更新庫存中指定產品的價格和數量。作為供應商，您只能在產品清單中看到您擁有的單一供應商產品。其他分配的產品也可以在此修改。",
  },

  /**
   * @see VPageVendorAccess
   */
  vendor_member: {
    title: "團隊成員",
    subtitle:
      "這是有權存取您的供應商面板的使用者清單。您可以在此處新增的團隊成員並自訂他們的權限。",
    add_action: "项目 新的 项目",
    pending: {
      title: "待辦的 项目",
      message: "查看等待接受的邀請清單。",
    },
  },

  /**
   * @see VMemberAddDialog
   */
  vendor_member_add: {
    title_edit: "編輯團隊成員",
    title_new: "新增團隊成員",
    member: {
      title: "團隊成員詳情",
      subtitle:
        "新增新的團隊成員並設定他們的權限。按一下每個項目可調整讀取/寫入存取權限。每行對應於主商店儀表板的權限等級。",
    },
    access: {
      view_data: "看法 數據",
      apply_changes: "節省 项目",
    },
    inputs: {
      email: {
        label: "電子郵件 地址",
        placeholder: "輸入會員的電子郵件地址...",
      },
    },
    notifications: {
      add_success: {
        title: "已新增會員",
        message: "團隊成員已成功新增。",
      },
      update_success: {
        title: "會員更新",
        message: "團隊成員資訊已成功更新。",
      },
    },
    actions: {
      add: "新增會員",
    },
  },

  /**
   * @see VPageVendorPayments
   */
  vendor_payments: {
    list: {
      title: "项目 歷史",
      subtitle:
        "您可以在此處查看您的付款記錄。這些付款可以透過銀行轉帳手動處理，也可以使用提供付款功能的支付服務自動處理。",
    },
    connect: {
      title: "项目 銀行",
      subtitle:
        "我們為以下支付網關提供拆分支付功能。若要在每次購買後無縫接收付款，請使用這些選項連接您的銀行帳戶。",
    },
    verify_dialog: {
      title: "项目 支付",
      option: {
        title: "供應商行動",
        subtitle:
          "您可以選擇接受或拒絕此轉讓。此行為僅作為歷史記錄。只需確認您是否已收到資金；如果沒有，則無需採取任何操作。",
      },
      inputs: {
        verify: {
          label: "您確認這筆款項了嗎？",
          false_description:
            "否，我的銀行帳戶尚未收到這筆款項。",
          true_description: "是的，我已收到並驗證了這筆款項。",
        },
      },
    },
  },

  /**
   * @see BVendorOrderRefund
   */
  vendor_order_refund: {
    title: "项目 命令",
    subtitle:
      "<b>重要！ </b>執行此操作將在供應商的錢包中產生負交易，並從中減去所選金額。該金額不能超過所選訂單的剩餘交易總額。此外，如果資金已轉入關聯的銀行帳戶（例如透過 Stripe Connect 或手動電匯），您應該建立 <b> 反轉轉帳 </b>。",
    inputs: {
      note: {
        message: "它對供應商可見。",
        placeholder: "您可以在此處附加註釋...",
      },
      amount: {
        error_message: "剩餘金額已超。",
      },
    },
  },

  /** {@see BOrderVendorPaymentManagement} **/
  order_vendor_payment: {
    message:
      "這提供了市場上供應商虛擬錢包中交易的概述。每當下訂單時，供應商的銷售份額就會添加到他們的錢包中。",
    vendor_wallets: "项目 錢包",
    my_wallets: "我的錢包",
    refund_order_action: "项目 命令",
    automatic_payout_list: {
      subtitle:
        "這是向您關聯的銀行帳戶自動付款的清單。請注意，此處僅顯示自動付款，不會顯示手動付款。",
    },
    reversal_transfer_action: "项目 轉移",
  },

  /** {@see BPageOrderPhysicalTrack} **/
  physical_order_track: {
    title: "風險報告和評估",
  },
  /** {@see BPageOrderVirtualTrack} **/
  virtual_order_track: {
    title: "風險報告和評估",
  },
  /** {@see BPageOrderVirtualTimeline} **/
  virtual_order_timeline: {
    title: "時間線",
  },
  /** {@see BPageOrderPhysicalTimeline} **/
  physical_order_timeline: {
    title: "時間線",
  },
  /** {@see BPageOrderPhysicalInput} **/
  physical_order_inputs: {},
  /** {@see BOrderTimeline} **/
  order_timeline: {
    message:
      "在此部分中，您可以查看與訂單、履行、付款及其各自狀態相關的事件的時間表。此外，您還可以觀察發送給客戶和供應商的訂單。",
    add_note_subtitle: "寫一條訊息並提及您的同事。",

    message_input: "在這裡寫留言...",
    pin_action: "置頂",
    unpin_action: "取消固定",
    copy_html: "複製 HTML",
    notifications: {
      add_note_success: "補充說明。",
      edit_note_success: "註釋已編輯。",
      delete_note_success: "註釋已刪除。",
    },
    delete_dialog: {
      title: "刪除筆記",
      message: "你想刪除這個筆記嗎？",
      action: "刪除筆記",
    },
    resend_dialog: {
      title: "重發電子郵件",
      message: "您確定要將此電子郵件重新發送給您的客戶嗎？",
      action: "是的，重新發送",
      success: "重新發送給您的客戶的電子郵件。",
    },
  },

  /** {@see BPageShuttleWalletAccounts} **/
  accounts: {
    title: "我的錢包",
    message:
      "請為您在 Selldone 使用的每種貨幣至少設定一個帳戶。這些資金將專門用於支付您的服務費。",
    add_new: "建立新帳戶",
    new_account: "添加新帳戶",
    new_account_dialog: {
      title: "新賬戶",
      account_name_input: "帳戶名稱",
      currency_input: "貨幣單位",
      currency_input_message:
        "創建的帳戶將僅保存該貨幣的價值。",
      new_account_wage: "新賬戶創建費用：第一個賬戶免費",
      create_account_action: "創建賬戶",
    },
  },

  /** {@see UserGifts} **/
  user_gifts: {
    menu: {
      send_gift: "送禮物",
      sent: "發送",
      received: "已收到",
    },

    /** {@see BPageShuttleWalletGiftsSend} **/
    send_gifts: {
      title: "送禮物",
      sub_title:
        "您可以向您的朋友或客戶發送禮物。收件人可以接受或拒絕您的禮物。如果收款人接受，金額將鎖定在您的帳戶中並提取。否則，這筆款項將轉入您的賬戶。",
      table: {
        user: "用戶",
        amount: "數量",
        currency: "貨幣",
        account_name: "從",
        status: "地位",
        message: "信息",
        created_at: "創建日期",
      },
    },

    /** {@see BPageShuttleWalletGiftsReceived} **/
    received_gifts: {
      title: "收到禮物",
      sub_title:
        "以下是您從 Seldone 或其他來源收到的禮物的彙編。",

      table: {
        amount: "數量",
        currency: "貨幣",
        account_from: "從",
        status: "地位",
        message: "信息",
        created_at: "創建日期",
        receive: "收到",
      },
    },
  },

  /** {@see BAccountGiftRedeem} **/
  get_gift_dialog: {
    title: "收到禮物",
    more: "更多的 ..",
    amount: "數量",
    message: "信息",
    account_to_input: "目的地帳戶",
    account_to_input_message: "禮品金額將存入此帳戶。",
    get_action: "接受禮物",
    notifications: {
      received_success_title: "恭喜",
      received_success:
        "禮品金額 {amount} {currency} 已存入您的賬戶。",
    },
  },
  /** {@see BAccountGiftSend} **/
  send_gift_dialog: {
    title: "送禮物",
    account_from_input: "選擇一個帳戶",
    account_from_input_message: "禮品金額將從該帳戶中提取。",
    receiver_input: "接收者",
    receiver_input_message: "您可以輸入電子郵件地址或電話號碼。",
    message_input: "信息",
    message_input_message: "您可以給收件人留言。",
    amount_input: "數量",
    currency_input: "貨幣單位",
    currency_input_message: "價格以這種貨幣計算。",
    send_action: "送禮物",
    notifications: {
      send_success: "{amount} {currency} 的禮物已發送給 {receiver}。",
    },
  },

  /** {@see BAccountInput} **/
  account_list: {
    account_input: "帳號",
    account_input_message:
      "該幣種的禮品金額將存入該賬戶。",
    free_balance: "免費餘額",
    account_name: "帳戶名稱",
  },
  /** {@see OPageMonetizeAccounts} **/
  user_monetize_accounts: {
    title: "存款賬戶",
    sub_title:
      "禮品金額將自動存入這些賬戶。",
    message:
      "Selldone 為您的社群媒體活動、參與 Selldone 開發、介紹朋友等存入資金。透過為每種貨幣選擇一個存款帳戶，禮品金額將自動存入您網域中的該帳戶。這些金額可以記入 Selldone。僅業務合作夥伴可以提款。",
    add_account_action: "新增帳戶",
    add_dialog: {
      title: "連接賬戶以接收禮物",
      account_input: "帳號",
      account_input_message:
        "該幣種的禮品金額將存入該賬戶。",
      set_as_default_action: "選擇為默認帳戶",
    },
    table: {
      currency: "貨幣",
      account_number: "帳號",
      account_name: "姓名",
      payment: "存款金額",
      reset_at: "重置為",
      delete: "刪除",
    },
    notifications: {
      set_success: "帳號添加成功。",
      delete_success:
        "帳戶已成功從接收禮物的默認帳戶列表中刪除。",
    },
    delete_alert: {
      title: "刪除帳戶",
      message:
        "您想從禮物帳戶列表中刪除此帳戶嗎？",
      action: "刪除",
    },
  },
  /** {@see UserMonetize} **/
  user_monetize: {
    title: "掙錢",
    menu: {
      plans: "計劃",
      accounts: "賬戶",
      participant: "參與者",
    },
  },
  /** {@see OPageMonetizeReferral} **/
  user_monetize_plans: {
    title: "合作和貨幣化項目",
    sub_title:
      "您將在 Selldone 錢包中獲得推薦獎勵，這些資金可用於支付 Selldone 服務費（適用於所有人）。請注意，只有 Selldone VIP 業務合作夥伴才有能力提取這些建議積分，並且並非所有用戶都可以使用此選項。",

    discount: "折扣",
    your_income: "你的收入",
    level_2: "從二樓",
    level_3: "從三級",
    link_message: "成員資格：{registered}，接受：{accepted}",
    link_tip:
      "您可以將短語 ?ref={link_code} 新增到您共享的每個位址的末尾。",
    table: {
      currency: "貨幣",
      amount: "平衡",
      total: "總付款",
      payment_date: "最後付款日期",
      withdraw: "退出",
    },

    notifications: {
      get_credit_success:
        "要求的金額已存入您的帳戶。",
    },
  },
  /** {@see BPageShuttleIdentity} **/
  basic_information: {
    title: "我的身份和個人資料",
    email: "電子郵件地址",
    tel: "手機號碼",
    address: "地址",
    payment: "有效交易",
    personal_information: "身份信息",
    main_profile: "主要簡介",
    main_profile_subtitle:
      "此信息對所有人公開。",
    kyc_waiting_info:
      "我們正在檢查您輸入的信息的準確性。根據 KYC 規則，此過程是強制性的，將降低金融交易的風險。您可以利用這項服務的當前和未來優勢。",

    personal_info_dialog: {
      title: "身份信息",
      name_input: "名",
      family_name_input: "姓",
      number_input: "護照號碼（或國家代碼）",
      birthday_input: "生日",
      birthday_input_placeholder: "輸入你的生日",
      address_input: "地址",
      postcode_input: "郵政編碼",
      tel_input: "聯繫電話",
      passport_image_input: "選擇護照圖片",
      passport_image_input_message:
        "上傳您的護照圖像掃描件。",
      personal_image_input: "選擇你自己的形象",
      personal_image_input_message:
        "請上傳您的國民身分證圖像。有些國家/地區沒有身分證，因此只需在此處上傳您的護照或駕照即可。",
    },
    profile_dialog: {
      title: "主要簡介",
      subtitle:
        "在此編輯您的公開個人資料資訊。您的客戶或其他使用者可能會看到此資訊。",
      full_name_input: "全名",
      tel_input: "聯繫電話",
      email_input: "電子郵件",
      website_input: "網站",
      address_input: "地址",
      about_input: "關於我",
      about_long_input: "關於我的長文",
      image_input: "選擇頭像",
      image_input_message:
        "上傳您的圖片。此圖片將用作您的個人資料圖片。",
      notifications: {
        update_profile_success: "你的個人資料已經更新。",
        update_personal_info_success:
          "您的信息已成功註冊",
      },
    },
    charge_account_approve_message:
      "向您的帳戶收取費用以批准您的銀行交易。",
    payment_approval: "付款批准",
    residential_address_checking:
      "您的居住地址文件在檢查隊列中。",
    add_residential_address:
      "添加您的位置和居住地址證明文件。",
  },
  /** {@see BUserPhoneVerify} **/
  phone_verify: {
    title: "手機號碼",
    step1_title:
      "輸入您的手機號碼，您將收到一條驗證簡訊。",
    phone_number_input: "手機號碼",
    next: "下一步",
    sms_code_input: "驗證碼",
    sms_code_message: "6 位驗證碼已發送至 {phone_number}。",

    notifications: {
      duplicated_number_error: "此號碼已被您批准。",
      send_activation_code_success_title: "驗證碼",
      send_activation_code_success:
        "驗證碼已發送至 {phone_number}。",
      verify_success: "您的手機號碼已通過驗證",
    },
  },
  /** {@see BPageShuttleCompanies} **/
  companies: {
    title: "我的企業帳戶",
    message:
      "企業、企業家和專業團隊可以基於Selldone開發產品和應用。建立業務檔案是一項要求。",
    new_company: "新公司",
  },
  /** {@see BCompanyAdd} **/
  add_company: {
    name_input: "公司名稱",
    website_input: "網站",
    email_input: "電子郵件",
    address_input: "地址",
    tel_input: "電話",
    mobile_input: "移動的",
    edit_action: "編輯公司",
    create_action: "創建公司",
    notifications: {
      add_success: "已創建企業帳戶 {name}。",
      edit_success: "商業帳戶已編輯。",
    },
  },
  /** {@see UserAccessControl} **/
  user_access_control: {
    menu: {
      personal_key: "個人的",
      shop_key: "客戶",
      apps: "應用",
    },
    connected_apps_title: "連接的應用程序",
    connected_apps_message:
      "您將看到連接到您的域帳戶的所有商店和應用程序的列表。您可以刪除對其中任何一個的訪問權限。",
    clients_title: "客戶",
    clients_message:
      "這些密鑰用於由您的服務器創建訪問令牌。請注意，密鑰是機密的，並且僅放置在服務器上，因此其他人看不到它們。",
    personal_keys_title: "個人訪問密鑰",
    personal_keys_message:
      "您可以在此處為您的帳戶創建密鑰。請注意，這些密鑰將能夠訪問您的帳戶。僅當您確切知道自己在做什麼時才創建和使用這些密鑰。",
  },

  /** {@see BPageShuttleSecurity} **/
  user_security_control: {
    title: "賬戶安全",
    message: "您可以在此處編輯您的帳戶安全設置。",

    delete: {
      title: "刪除帳戶",
      subtitle:
        "在刪除您的帳戶之前，請確保您已刪除所有商店。",
      action: "我確定，刪除我的帳戶",
      agreement:
        "我接受我的所有信息將從您的服務器中刪除。您的信息將根據我們確定的時間表被刪除，以防止欺詐或濫用。",
    },

    list: {
      email: {
        title: "主要信箱",
        sub_title:
          "您可以選擇更新與此帳戶關聯的主電子郵件。",
        action_title: "更改主要電子郵件",
        action: "發送驗證連結",
      },
      password: {
        title: "密碼",
        sub_title: "為您的帳戶選擇一個強密碼。",
        action_title: "賬戶訪問密碼",
        not_exist: "沒有進入",
        action: "更改密碼",
      },
      phone: {
        title: "手機號碼",
        sub_title:
          "確認您的手機號碼。您將可以通過此號碼登錄。",
        action_title: "帳戶的主要電話號碼",
        action: "驗證號碼",
      },

      two_step: {
        title: "兩步進入",
        sub_title:
          "確認您的手機號碼。您將可以通過此號碼登錄。",
        action_title: "提高賬戶安全性",
        activated_action: "活性",
        active_action: "現在激活",
      },
    },
    two_step_auth: {
      step_1: {
        title: "安裝 Google 项目 應用程序",
      },
      step_2: {
        title: "輸入應用程序生成的代碼",
        message:
          "6 位代碼是由您手機中的算法生成的。您可以從以下鏈接下載該應用程序。按代碼生成器鍵創建包含密碼的二維碼。",
        qr_code_info:
          "如果無法掃描，您可以手動將代碼複製並粘貼到應用程序中：",
        create_new_code: "創建新代碼",
        qr_code_scanning:
          "掃描 Google Authenticator 行動應用程式建立的二維碼，然後在此頁面的方塊中輸入產生的程式碼進行確認。",
        qr_code_regenerate_info:
          "注意：通過按上述鍵，將創建一個新鍵，之前的鍵將無法使用。在您的手機應用程序中輸入新密鑰。",
      },
      step_3: {
        title: "輸入創建的代碼",
        message:
          "在下面的字段中輸入在應用程序中創建的訪問代碼。",
        activation_key_input: "訪問代碼",
      },
      activated_alert: "兩步登錄已啟用。",
      activated_message:
        "您的帳戶已啟用兩步登錄。從現在開始，您需要輸入每 30 秒更改一次的第二個代碼才能訪問您的帳戶。要禁用兩步登錄，只需雙擊按一個步驟並完成這些步驟。",
      cancel_two_step_login_action: "取消兩步登錄",
      cancel_two_step_login_info:
        "如果您想禁用兩步驗證，請輸入您的密碼並單擊兩步登錄鍵。",
      password_input: "密碼",
      cancel_2fa_action: "取消兩步登錄",
    },

    change_password_dialog: {
      title: "更改密碼",
      message: "使用複雜且容易記住的密碼。",
      password_input: "當前密碼",
      new_password_input: "新密碼",
      re_new_password_input: "重複新密碼",
      tips: {
        length: "密碼必須至少8個字符",
        chars: "至少一個大寫字母和一個數字。",
        match: "密碼匹配。",
      },
      change_password_action: "更改密碼",
      notifications: {
        change_password_title: "更改密碼",
        change_password: "密碼修改成功。",
      },
    },
  },
  /** {@see AuthorizedClients} **/
  authorized_clients: {
    title: "連接的商店/應用程序列表",
    table: {
      name: "姓名",
      app: "應用程序",
      scopes: "範圍",
      shop: "限製商店",
    },
    remove_action: "移除訪問權限",
    delete_alert: {
      title: "刪除",
      message:
        "您要撤消此訪問權限嗎？請注意，此應用將無法再訪問您的帳戶。",
      action: "拒絕訪問",
    },
  },
  /** {@see Clients} **/
  clients: {
    title: "客戶名單",
    create_new_action: "創建新客戶",
    table: {
      client_id: "客戶編號",
      app: "應用程序",
      name: "別名",
      secret_key: "密鑰",
    },
    create_dialog: {
      title: "新客戶",
      error_msg: "<strong>錯誤！</strong>抱歉，發生錯誤了！",
      name_input: "姓名",
      name_input_message: "您的用戶認可和信任的東西。",
      redirect_input_message: "將地址返回到您的站點。",
    },
    edit_dialog: {
      title: "編輯權限",
    },
    delete_alert: {
      title: "刪除",
      message: "您要刪除此客戶端嗎？",
      action: "刪除",
    },
  },
  /** {@see PersonalAccessTokens} **/
  personal_access_tokens: {
    title: "個人訪問令牌列表",
    create_action: "創建新令牌",
    table: {
      name: "姓名",
      scopes: "訪問",
      expire_at: "到期日",
    },
    create_dialog: {
      title: "代幣建設",
      error_message: "<strong>錯誤！</strong>抱歉，發生錯誤了！",
      name_input: "別名前。我的令牌名稱",
      name_input_message: "最喜歡的令牌名稱。",
      scopes_list: "令牌訪問列表",
    },
    access_token_dialog: {
      title: "個人訪問密鑰",
      message:
        "這是您的個人訪問令牌的令牌。這是唯一一次顯示此令牌，所以不要錯過它！您現在可以使用此令牌來請求 API。",
    },
    delete_alert: {
      title: "刪除",
      message: "是否要刪除此訪問令牌？",
      action: "刪除",
    },
  },

  /** {@see Scopes} **/
  scopes: {
    //--------------------------- Profile ---------------------------
    profile: {
      name: "輪廓",
      description:
        "閱讀個人資料信息，包括姓名、電子郵件地址、圖像和身份驗證狀態。",
    },
    phone: {
      name: "電話號碼",
      description: "訪問電話號碼。",
    },
    address: {
      name: "地址",
      description: "從通訊錄中讀取保存的地址。",
    },
    "user:profile:write": {
      name: "輪廓 项目",
      description: "編輯和管理用戶個人資料資訊。",
    },

    //--------------------------- Storefront ---------------------------
    "my-gift-cards": {
      name: "禮品卡",
      description: "訪問我的卡片。",
    },
    "order-history": {
      name: "訂單歷史",
      description: "閱讀訂單歷史。",
    },
    buy: {
      name: "購買",
      description: "下訂單並從商店購買。",
    },

    //--------------------------- Backoffice ---------------------------
    articles: {
      name: "編輯內容",
      description: "編輯文章。",
    },
    "backoffice:notifications": {
      name: "通知 项目",
      description: "發送 项目 收到 通知.",
    },
    "backoffice:order:write": {
      name: "命令 项目",
      description: "編輯和管理商店訂單。",
    },
    "backoffice:order:read": {
      name: "命令 使用權",
      description: "项目 店鋪 訂單.",
    },
    "backoffice:support-tickets": {
      name: "支持 项目",
      description: "项目 支持 项目.",
    },
    "backoffice:shop:read": {
      name: "店鋪 项目",
      description: "项目 店鋪 細節 项目 統計數據.",
    },
    "backoffice:shop:write": {
      name: "店鋪 项目",
      description: "建立和管理商店詳細資訊。",
    },
    "backoffice:shop:add": {
      name: "项目 店鋪",
      description: "將新商店新增至系統。",
    },
    "backoffice:shop:delete": {
      name: "刪除 店鋪",
      description: "從系統中刪除商店。",
    },
    "backoffice:giftcard:write": {
      name: "禮物 卡片 项目",
      description: "建立和管理禮品卡。",
    },
    "backoffice:giftcard:read": {
      name: "禮物 卡片 使用權",
      description: "项目 禮物 卡片 細節 项目 統計數據.",
    },
    "backoffice:faq:write": {
      name: "FAQ 项目",
      description: "建立和管理常見問題。",
    },
    "backoffice:faq:read": {
      name: "FAQ 使用權",
      description: "项目 FAQ 細節 项目 統計數據.",
    },
    "backoffice:category:write": {
      name: "類別 项目",
      description: "建立和管理產品類別。",
    },
    "backoffice:category:read": {
      name: "類別 使用權",
      description: "项目 類別 細節 项目 統計數據.",
    },
    "backoffice:product:write": {
      name: "產品 项目",
      description: "新增和管理產品。",
    },
    "backoffice:product:read": {
      name: "產品 使用權",
      description: "项目 產品 細節 项目 統計數據.",
    },
    "backoffice:report:read": {
      name: "報告 使用權",
      description: "閱讀商店報告和資訊。",
    },
    "backoffice:finance:write": {
      name: "金融 帳戶 项目",
      description: "项目 金融 賬戶 项目 至 项目 店鋪.",
    },
    "backoffice:finance:read": {
      name: "金融 帳戶 使用權",
      description: "项目 金融 帳戶 細節 项目 統計數據.",
    },
    "backoffice:page:write": {
      name: "頁面管理",
      description: "編輯 店鋪 頁面.",
    },
    "backoffice:page:read": {
      name: "项目 使用權",
      description: "项目 店鋪 项目 細節 项目 統計數據.",
    },
    "backoffice:logistic:write": {
      name: "後勤 项目",
      description: "项目 後勤 项目.",
    },
    "backoffice:logistic:read": {
      name: "後勤 使用權",
      description: "项目 後勤 細節 项目 統計數據.",
    },
    "backoffice:staff:write": {
      name: "職員 项目",
      description: "編輯和管理員工詳細資料。",
    },
    "backoffice:staff:read": {
      name: "職員 使用權",
      description: "閱讀員工資訊和統計數據。",
    },
    "backoffice:business-profile:write": {
      name: "项目 輪廓 项目",
      description: "管理業務資料。",
    },
    "backoffice:business-profile:read": {
      name: "项目 輪廓 使用權",
      description: "閱讀企業簡介詳細資訊。",
    },
    "backoffice:discount-code:write": {
      name: "折扣 代碼 项目",
      description: "项目 店鋪 折扣 项目.",
    },
    "backoffice:discount-code:read": {
      name: "折扣 代碼 使用權",
      description: "项目 折扣 代碼 細節 项目 統計數據.",
    },
    "backoffice:wallet:write": {
      name: "錢包 项目",
      description: "项目 用戶 錢包.",
    },
    "backoffice:wallet:read": {
      name: "錢包 使用權",
      description: "閱讀錢包資訊和統計數據。",
    },
    "backoffice:coupon:write": {
      name: "優惠券 项目",
      description: "项目 店鋪 優惠券.",
    },
    "backoffice:coupon:read": {
      name: "優惠券 使用權",
      description: "项目 優惠券 細節 项目 統計數據.",
    },
    "backoffice:offer:write": {
      name: "提供 项目",
      description: "项目 店鋪 優惠.",
    },
    "backoffice:offer:read": {
      name: "提供 使用權",
      description: "閱讀報價資訊和統計資料。",
    },
    "backoffice:cashback:write": {
      name: "現金回饋管理",
      description: "项目 店鋪 项目 優惠.",
    },
    "backoffice:cashback:read": {
      name: "项目 使用權",
      description: "閱讀現金返還詳細資訊和統計數據。",
    },
    "backoffice:lottery:write": {
      name: "彩票 项目",
      description: "项目 店鋪 项目.",
    },
    "backoffice:lottery:read": {
      name: "彩票 使用權",
      description: "项目 彩票 細節 项目 統計數據.",
    },
    "backoffice:community:write": {
      name: "社區 项目",
      description: "项目 社區 项目.",
    },
    "backoffice:community:read": {
      name: "社區 使用權",
      description: "项目 社區 細節 项目 統計數據.",
    },
    "backoffice:customer:write": {
      name: "客戶管理",
      description: "管理客戶詳細資料。",
    },
    "backoffice:customer:read": {
      name: "项目 使用權",
      description: "閱讀客戶資訊和統計資料。",
    },
    "backoffice:ribbon:write": {
      name: "色帶管理",
      description: "项目 店鋪 项目.",
    },
    "backoffice:ribbon:read": {
      name: "项目 使用權",
      description: "閱讀功能區詳細資訊和統計資料。",
    },
    "backoffice:ai:write": {
      name: "AI 项目",
      description: "项目 AI 项目.",
    },
    "backoffice:ai:read": {
      name: "AI 使用權",
      description: "閱讀 AI 配置和統計數據。",
    },
    "backoffice:vendor-payment:write": {
      name: "项目 支付 项目",
      description: "管理供應商付款。",
    },
    "backoffice:vendor-payment:read": {
      name: "项目 支付 使用權",
      description: "閱讀供應商付款詳細資訊和統計資料。",
    },
    "backoffice:company:read": {
      name: "公司 使用權",
      description: "项目 公司 細節 项目 統計數據.",
    },
    "backoffice:company:write": {
      name: "公司 项目",
      description: "项目 公司 项目.",
    },
    "backoffice:note:read": {
      name: "筆記 使用權",
      description: "閱讀註釋和相關詳細資訊。",
    },
    "backoffice:note:write": {
      name: "筆記 项目",
      description: "管理筆記。",
    },
    "backoffice:affiliate:write": {
      name: "附屬公司 项目",
      description: "项目 附屬公司 项目.",
    },
    "backoffice:affiliate:read": {
      name: "附屬公司 使用權",
      description: "项目 附屬公司 細節 项目 統計數據.",
    },
    "backoffice:print:write": {
      name: "列印管理",
      description: "管理列印選項。",
    },
    "backoffice:print:read": {
      name: "项目 使用權",
      description: "閱讀列印詳細資訊。",
    },
    "selldone:token:read": {
      name: "项目 使用權",
      description: "閱讀代幣詳細資料和統計數據。",
    },
    "selldone:token:write": {
      name: "代幣管理",
      description: "管理代幣。",
    },

    //--------------------------- Selldone ---------------------------
    "selldone:monetization:read": {
      name: "项目 使用權",
      description: "閱讀獲利詳細資訊和統計資料。",
    },
    "selldone:monetization:write": {
      name: "貨幣化管理",
      description: "管理貨幣化，包括推薦計畫。",
    },
    "selldone:identification": {
      name: "项目 使用權",
      description: "使用權 用戶 项目 細節.",
    },
    "selldone:developer:read": {
      name: "開發商 使用權",
      description: "项目 開發商 細節 项目 統計數據.",
    },
    "selldone:developer:write": {
      name: "開發商 项目",
      description: "项目 開發商 项目.",
    },
    "selldone:security:write": {
      name: "安全 项目",
      description: "项目 安全 项目.",
    },

    //--------------------------- Connect ---------------------------
    "connect:provider:write": {
      name: "供應商管理",
      description: "项目 連接的 项目 提供者.",
    },
    "connect:provider:read": {
      name: "项目 使用權",
      description: "閱讀提供者詳細資訊和統計資料。",
    },

    //--------------------------- Agency ---------------------------
    "agency:read": {
      name: "项目 使用權",
      description: "閱讀機構詳細資訊和統計數據。",
    },
    "agency:write": {
      name: "代理管理",
      description: "管理機構資訊。",
    },

    //--------------------------- Vendor ---------------------------

    "vendor-read": {
      name: "项目 使用權",
      description: "閱讀供應商詳細資訊和統計數據。",
    },
    "vendor-write": {
      name: "供應商管理",
      description: "管理供應商資訊。",
    },
  },

  scope_group: {
    backoffice: {
      title: "项目",
      description: "存取後台和商店管理功能。",
    },
    storefront: {
      title: "项目",
      description: "存取客戶和商店資訊。",
    },
    profile: {
      title: "輪廓",
      description: "使用權 用戶 輪廓 项目.",
    },
    selldone: {
      title: "Selldone",
      description: "存取 Soldone 服務和功能。",
    },
    others: {
      title: "项目",
      description: "系統中未定義的其他範圍。",
    },
    vendor: {
      title: "项目",
      description: "存取供應商資訊和管理功能。",
    },
    connect: {
      title: "项目 OS",
      description: "使用權 連接的 服務 项目 提供者.",
    },
    agency: {
      title: "项目",
      description: "存取機構資訊和管理。",
    },
  },

  /** {@see AdminCompanyPage} **/
  company_page: {
    title: "公司",
    create_app: "創建新應用程序",
    menu: {
      edit: "編輯",
      apps: "應用",
      dashboard: "儀表板",
      companies: "公司",
    },
    /** {@see AdminCompanyPage_Dashboard} **/
    dashboard: {
      /** {@see CompanyInfoWidget} **/
      info_widget: {
        title: "公司註冊信息",
        address: "地址",
        website: "網站",
        email: "電子郵件",
        phone: "電話號碼",
        register: "登記",
        developer: "開發商",
        verified: "已驗證",
        golden: "金的",
      },
    },
    /** {@see AdminCompanyPage_Develop} **/
    developer: {
      title: "開發者",
      menu: {
        new: "新的",
        apps: "應用",
      },
    },
    /** {@see AdminCompanyPage_Edit} **/
    edit: {
      title: "編輯",
    },
  },
  /** {@see BAppAdd} **/
  add_app: {
    category_input: "類別",
    code_input: "代碼",
    name_input: "姓名",
    description_input: "描述",
    video_input: "視頻網址",
    public_form: "一般信息結構",
    private_form: "私人信息結構",
    icon_input: "應用程序圖標",
    logo_input: "標誌應用",
    enable_input: "應用程序是否處於活動狀態？",
    edit_action: "編輯應用",
    create_action: "創建應用",
    notifications: {
      add_success: "已創建企業帳戶 {name}。",
      delete_success: "商業帳戶已編輯。",
    },
  },

  /** {@see AppPage} **/
  app_page: {
    title: "應用",

    menu: {
      edit: "編輯",
      publish: "發布",
      history: "版本",
      dashboard: "儀表板",
      company: "公司",
      api: "API",
      images: "圖片",
    },
    /** {@see AppPage_Dashboard} **/
    dashboard: {
      /** {@see AppInfoWidget} **/
      app_info_widget: {
        title: "應用",
        app_code: "應用代碼",
        category: "類別",
        name: "姓名",
        installs: "安裝應用",
        uninstalls: "卸載應用",
        actives: "活躍的應用",
        description: "描述",
        published: "發表",
        waiting_for_review: "待批准",
        app_mode: "應用方式",
      },
    },
  },
  /** {@see ShopPermissions} **/
  shop_permissions: {
    ADMIN: { text: "所有者", description: "完全訪問所有店面。" },
    PRODUCT: {
      text: "產品經理",
      description: "添加、編輯和管理商店產品。",
    },
    AUDITING: {
      text: "財務經理",
      description: "查看財務信息和付款。",
    },
    CONTENT: {
      text: "內容管理",
      description: "回答問題、撰寫博客和設計頁面。",
    },
    OFFICER: {
      text: "高級經理",
      description: "查看和監控員工活動。",
    },
    EMPLOYEE: {
      text: "員工",
      description: "查看訂單並履行訂單。",
    },
    MARKETING: {
      text: "營銷",
      description:
        "訪問設置並創建活動、電子郵件營銷和其他營銷相關部分。",
    },
    VIEWER: {
      text: "查看器",
      description:
        "無需編輯或更改即可查看商店信息的能力。",
    },
  },

  /** {@see ShopRoles} **/
  shop_roles: {
    PhysicalOrdersChecking: {
      text: "體檢",
      description: "檢查收到的訂單。",
    },
    PhysicalOrdersPackaging: {
      text: "物理包裝",
      description: "倉庫和包裝過程。",
    },
    PhysicalOrdersDelivery: {
      text: "實物運輸",
      description: "訂購運輸。",
    },
    PhysicalOrdersSupport: {
      text: "物理支持",
      description: "售後支持。",
    },
  },

  /** {@see AccountStatus} **/
  account_status: {
    Checking: "檢查",
    Approved: "確認的",
    Rejected: "被拒絕",
    Deleted: "已刪除",
    Banned: "禁止",
    Payment: "支付",
    SelldoneSprite: "Selldone 錢包 帳戶",
    SelldoneStorage: "Selldone 项目",
  },
  /** {@see BPageAccount} **/
  account_page: {
    title: "帳戶",
    menu: {
      setting: "設置",
      charge: "收費",
      transfer: "轉移",
      transactions: "交易",
      history: "歷史",
      cards: "牌",
    },

    /** {@see BPageAccountTransactions} **/
    transactions: {
      title: "賬戶交易",
      detail: {
        title: "交易",
        amount: "數量",
        description: "描述",
        from: "從",
        to: "至",
        created_at: "日期",
        receipt: "收據",
        receipt_note: "筆記",
      },
      table: {
        type: "類型",
        from: "從帳戶",
        to: "記賬",
        amount: "數量",
        receipt: "收據",
        created_at: "日期",
        description: "描述",
      },
    },

    /** {@see BPageAccountTransfer} **/
    transfer: {
      title: "轉賬費用",
      form: {
        title: "轉讓申請表",
        sub_title:
          "您可以將錢包內的可用資金在相同貨幣的錢包之間轉移，或者將其轉移到 Selldone 上的不同錢包。",
        message:
          "匯款時要小心，如果您完成轉賬，您將無法返回。",
      },
    },
    /** {@see BPageAccountDeposit} **/
    deposit: {
      form: {
        title: "收費賬戶",
        sub_title:
          "您必須從您的賬戶餘額中扣除購買許可證、升級您的賬戶和支付系統收據。",
        amount_input: "數量",
        charge_action: "付費賬號",
      },
      notifications: {
        qr_title: "支付",
        qr_message: `付款地址 {currency} 已創建。`,
        gateway_title: "支付",
        gateway_message: "連接到支付網關。",
      },
    },

    /** {@see BPageAccountEdit} **/
    setting: {
      title: "帳號設定",
      account_name_input: "帳戶名稱",
      notifications: {
        updated_success: "您的帳戶已成功更新。",
      },
    },
  },

  /** {@see BAccountReceiptPaymentDialog} **/
  receipt_payment_dialog: {
    title: "收據付款",
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
    title: "交易表格",
    from_input: "從帳號",
    to_input: "到帳號",
    from_input_message: "金額將從該帳戶中提取。",
    account_name: "帳戶名稱",
    currency: "貨幣",
    free_balance: "可用餘額",
    to: "目的地帳戶",
    amount: "數量",
    receipt_title: "收據付款",
    receipt_input: "收據號碼",
    paid_status: "這張收據已經支付。",
    paid_canceled: "此收據已被取消。",
    description: "解釋",
    created_at: "日期",
    duration: "期間",
    unlimited: "無限",
    add_note_action: "添加說明",
    note: "筆記",
    transfer_action: "轉移",
    confirmation: {
      title: "寄錢",
      subtitle: "交易確認",
      message:
        "如果以下信息正確，請點擊交易確認鍵進行交易。",
      from: "從帳戶",
      to: "記賬",
      amount: "數量",
      fee: "手續費",
      total_pay: "從您的賬戶中提取的金額",
      receipt: "收據",
      description: "描述",
      accept_action: "交易確認",
    },
    enter_account_number: "輸入帳號。",
    currency_not_match:
      "目標帳戶貨幣與來源不同",
    account_number_not_valid: "帳號是正確的。",
    account_number_is_valid: "帳號是正確的。",
    receipt_not_valid: "發票號碼不正確。",
    receipt_is_valid: "收據編號正確。",

    notifications: {
      confirm_success: "交易成功完成。",
    },
  },

  /** {@see OPlanCalculator} **/
  price_calculator: {
    title: "計算器 |適合您的業務",
    description:
      "根據您的每月銷售額計算並選擇最佳計劃：",
    sale_input: "月銷售額",
    hypernova_plan: "申請超新星%0！",
    show_normal_mode: "顯示正常模式",
    show_hypernova_mode: "我的交易額超過 100 萬美元！",
  },

  /** {@see OPlanFeaturesCard} **/
  price_card: {
    billed_monthly: "每月結算 {amount}。",
    billed_yearly: "每年結算 {amount}。",
    buy_license_action: "立即購買",
    select_your_store: "選擇您的商店",
  },

  /** {@see BSessionsMap} **/
  shop_session_widget: {
    total_sessions: "總會話數",
  },
  /** {@see BDashboardShopCustomersActivityMap} **/
  user_activities_keys: {
    add_baskets: "添加到購物車",
    remove_baskets: "從購物車中刪除",
    buys: "買",
    products_views: "查看產品",
  },
  /** {@see BDashboardShopAcquisition} **/
  shop_visitors_widget: {
    title: "訪客分析",
    new_visitors: "新訪客",
    amp: "AMP 視圖",
    returning_visitors: "回頭客",
    page_views: "頁面瀏覽量",
    other_pages: "其他頁面",
    from_previous_7_days: "從過去 7 天開始",
  },

  /** {@see BUserAppLevel}   {@see AppLevel}  **/
  app_levels: {
    title: "應用級別",
    Newbie: "新手",
    Beginner: "初學者",
    Novice: "新手",
    Intermediate: "中間的",
    Advanced: "先進的",
  },

  /** {@see Login} **/
  login: {
    register_title: "商業媒介，<br>愉快的經歷。",
    register_subtitle:
      "立即免費註冊。 Selldone 深受新創公司、企業、買家和賣家的喜愛。",

    password_recovery_title: "找回密碼",
    password_recovery_message:
      "如果您忘記了密碼，請輸入您帳戶的電子郵件地址，然後按確認鍵。我們將向您發送一封電子郵件，其中包含重置密碼的鏈接。",
    email: "您的電子郵件地址",
    password_recovery_action: "接收恢復電子郵件",

    register_google: "繼續使用谷歌",
    register_apple: "繼續使用蘋果",
    continue_with: "繼續",
    register_linkedin: "繼續領英",
    register_facebook: "繼續使用 Facebook",
    register_github: "繼續使用 Github",
    create_your_account: "創建您的帳戶",
    password_8_chars: "密碼必須至少8個字符。",
    password_upercase_number: "至少一個大寫字母和一個數字。",
    password_confirm: "密碼和確認匹配。",
    privacy_agreement:
      "註冊即表示您同意 Selldone 的 <a href='/terms' target='_blank'> 使用條款 </a> 和 <a href='/privacy' target='_blank'> 隱私權政策 </a>。",
    register_action: "走吧，它是免費的！",
    login_action: "登錄",
    already_signup: "已經註冊了？",
    login_your_account: "登錄到您的帳戶",
    login_google: "繼續使用谷歌",
    login_linkedin: "繼續領英",
    login_facebook: "繼續使用 Facebook",
    login_github: "繼續使用 Github",
    remember_me: "記得我。",
    login_button: "登錄",
    two_step_problem: "兩步密碼有問題嗎？",
    two_step_problem_action: "我想禁用兩步登錄。",
    two_step_confirm: "確認訪問代碼",
    forgot_password: "忘記密碼？",
    signup_free: "免費註冊",
    checking_robot_message: "檢查你是機器人還是人..",
    notifications: {
      step2_login_success: "自動登錄帳戶",
    },
    signup_email: "通過電子郵件註冊",

    name_placeholder: "姓名",
    email_placeholder: "電子郵件",
    email_or_username_placeholder: "電子郵件、用戶名或電話號碼",
    password_placeholder: "密碼",
    re_password_placeholder: "確認密碼",
    new_in_samin: "新的 项目 Selldone?",
    auto_create_shop: "自動創建商店",
  },
  /** {@see Layout} **/
  layout: {
    logout: "登出",
    menu: {
      my_public_profile_subtitle: "项目 上市 輪廓 {name}.",

      personal_information: "個人信息和個人資料",
      personal_information_subtitle: "編輯 项目 輪廓, 地址 项目 KYC.",
      wallet: "錢包和賬戶",
      wallet_subtitle: "项目 賬戶 项目 連接的 支付 牌.",

      companies: "公司和商業賬戶",
      companies_subtitle: "註冊我的企業和稅務資料。",

      access: "訪問我的帳戶",
      access_subtitle:
        "OAuth 用戶端、個人存取權杖和連線的應用程式。",

      security: "安全",
      security_subtitle: "設定兩個因素並管理社交登入選項。",

      preferences: "用戶偏好",
      preferences_subtitle:
        "更改主題、等級、語言和預設貨幣。",
      my_subscriptions: "我的訂閱",
      my_subscriptions_subtitle:
        "存取高級人工智慧和自訂功能。",
    },
  },

  /** {@see PageBuilder} **/
  page_builder: {
    title: "網站設計",

    menu: {
      user_view: "看法",
      design: "設計",
      behavior: "行為",
      seo: "SEO",
      setting: "設置",
      embed: "嵌入",
    },
    waiting_fetch: "接收信息..",

    /** {@see SettingCustomPage} **/
    setting: {
      title_input: "頁面標題",
      description_input: "簡短的介紹",
      name_input: "頁面 URL（字母和數字）",
      bg_color_input: "背景顏色",
      bg_style_input: "頁面背景樣式",
      page_label_input: "標籤顏色",
      page_dir_input: "頁面方向",
      ltr: "左到右",
      rtl: "右到左",
      designer_note: "設計師筆記",
    },

    /** {@see LPageEditor} **/
    design: {
      themes: {
        title: "個人設計助理",
        message: "無需編碼即可為您的業務設計最佳頁面。",
        page_title_input: "輸入頁面標題",
      },
      tools: {
        rearrange: "命令",
        tools: "工具",
        history: "歷史",
        style: "風格",
        typography: "排版",
        hierarchy: "项目",
      },
      no_category: "沒有分類",
    },

    /** {@see LPageEditorSeo} **/
    seo: {
      message:
        "SEO 設定由 Selldone SEO 引擎自動調整。",
    },
  },

  /** {@see VerifyEmailCaution} **/
  verify_email_caution: {
    title: "請確認您的電郵地址",
    message:
      "新的激活鏈接已發送到您的電子郵件地址 {email}。在採取任何行動之前，請檢查您的電子郵件。",
    resend_message:
      "如果您沒有在電子郵件中收到激活鏈接，請單擊下面的按鈕重新發送。",
    resend_action: "重新發送激活鏈接",
    resend_notice: "激活鏈接已發送。",
  },

  /** {@see ShopAutomation_Autopilot} **/
  autopilot: {
    start: "開始日期",
    end: "結束日期",
  },

  /** {@see Help} **/
  help: {
    menu: "菜單",
    more_helps: "閱讀更多",
  },

  /** {@see WidgetCompanyCard} **/
  company_card: {
    pending_state: "等待審核",
    register: "掛號的",
    developer: "開發商",
    verified: "已驗證",
    premier: "總理",
  },

  /** {@see ShopSubscriptionList} **/
  shop_license: {
    add: "添加訂閱",
    only_last: "僅最後一次訂閱",
    vouchers: "代金券",
    buy: "購買訂閱計劃",
    monthly: "月刊",
    yearly: "每年",
    start_date: "開始日期",
    end_date: "結束日期",
    price: "價格",
    verify: {
      true_title: "项目 條款",
      true_description: "我已閱讀並同意 Selldone 使用條款",
    },
    need_charge: "需要收費",
    buy_now: "立即購買",
    use_voucher_now: "立即使用優惠券",
    plan_placeholder: "選擇您的訂閱計劃",
    plan: "許可計劃",
    use_date: "添加日期",
    validity_duration: "有效期",
    validity_duration_hint:
      "通過購買 12 個月的許可證，您將獲得 30% 的折扣。",

    active_license: {
      title: "有效許可證",
      subtitle:
        "這是您的有效許可證資訊。您可以透過升級到更高等級的方案來降低服務費。",
      subtitle_partner:
        "您的有效 {name} 許可證資訊。這家商店目前有一個活躍的合作夥伴協議。如果您想取消交易並升級到更高層級的計劃，請聯絡我們的支援團隊尋求協助。",
    },
    licenses_table: {
      title: "購買歷史",
      subtitle:
        "這是有效和待定許可證的清單。您可以在為錢包充值後購買優惠。另外，請注意，當您取消訂閱時，剩餘的訂閱金額將退回到您的虛擬錢包。",
    },
    license_detail: {
      title: "細節",
      subtitle:
        "這些是您目前計劃的限制。如欲了解更多詳情，請瀏覽定價頁面。您可以存取所有計劃（包括免費計劃）的所有功能，以啟動您的業務並成長。當您擴展業務時，請考慮升級到更高級別的計劃以降低服務費用。",
    },

    table: {
      plan: "計劃",
      start_date: "開始/結束日期",
      renewal: "自動續訂",
      linked_account: "關聯賬戶/優惠券",
      payment: "支付",
      cancel: "取消",
    },
    notifications: {
      subscribe_success: "訂閱成功。",
      cancel_success: "訂閱成功取消。",
    },
    cancel_dialog: {
      title: "取消訂閱確認",
      message: "您確定要取消此訂閱嗎？",
      action: "取消訂閱",
    },
    add_dialog: {
      wallet: {
        title: "選擇錢包",
        subtitle:
          "選擇用於您的訂閱的虛擬錢包。如果您還沒有，您可以在錢包部分創建它。該錢包將用於支付任何費用。",
      },
      auto_renewal: {
        true_title: "自動續訂",
        true_description:
          "如果您的錢包有足夠的餘額或您擁有有效的優惠券，您的訂閱將自動續訂。",
      },
      options: {
        title: "附加選項",
      },
      verify: {
        title: "项目",
      },
    },
  },

  /** {@see BLayoutBackofficeShop} **/

  admin_shop_layout: {
    download_txt: "下載數據文本",
    download_excel: "项目 數據 项目",
  },
  /** {@see BUserPreferences} **/
  user_preferences: {
    access: "使用權",
    template: "模板",
    feedback: "反饋",
    date_time: "日期 & 時間",

    company: "公司",
    company_message: "如果您有公司並想要發布應用程序。",
    access_keys: "訪問密鑰",
    access_keys_message: "顯示客戶端和訪問密鑰。",
    rating: "您如何評價您在 Seldone 的體驗？",
    large_font: "大字體",
    large_font_message: "顯示比正常大的文本",
    samples: "展示樣品店",
    samples_message:
      "如果啟用，一些示例商店將顯示在您的面板中。",

    automation: "自動化",
    automation_message:
      "在商店儀表板上顯示自動化標籤。 （Webhook、視覺化程式設計…）",
  },

  /** {@see BPageShopSettingLocations} **/
  shop_locations: {
    title: "提供服務的國家",
    sub_title:
      "從下面的列表中選擇您想要銷售產品的國家/地區。",

    delete_restriction: "刪除限制",
    set_restriction: "設置限制",
    notifications: {
      locations_update: "位置更新成功。",
    },
    table: {
      country: "國家",
      currency: "貨幣",
      available: "可用的",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "售罄",
    review_unit: "審查",
    not_original: "非原創",
  },

  /** @see BProductAddStudio **/
  product_studio: {
    add_mode: "添加更多詳細信息",
    auto_category: "自動設置類別",
    add_in_current_category: "添加到當前類別",
    category_mode_message:
      "如果啟用，產品將被添加到默認類別或子類別中。",
    sku_name_input: "SKU/名稱",
    info: {
      subtitle:
        "要產生產品，您只需輸入建立產品所需的基本詳細資訊。",
    },
    price: {
      subtitle:
        "輸入該產品的價格和折扣。新增產品後，您將可以使用更多選項。",
    },
    by_sku: {
      title: "按 SKU 新增",
      subtitle: "您所在國家/地區的資料庫無法使用。",
    },
    drop_shipping: {
      subtitle:
        "在批發市場中尋找產品並將其添加到您的商店。",
    },
    by_connect: {
      subtitle:
        "使用 Selldone Connect OS 輕鬆添加來自 POD 或代發貨供應商的產品 - 只需連接您的商店即可享受自動產品集成，無需任何插件。",
    },
    your_license_is_not_eligible: "您的許可證不符合資格。",
    sku_dialog: {
      title: "项目 產品 项目 SKU",
      subtitle:
        "您可以在我們的資料庫中按 SKU 尋找產品，然後只需單擊即可新增它們。",
    },
    dropshipping_dialog: {
      title: "项目 代發貨 產品",
    },
  },

  /**
   * @see BProductAddDropshippingShops
   */
  product_add_dropshipping_shops: {
    subtitle:
      "在這裡，您可以找到在 Selldone 上列出其產品的批發商，以便其他商家可以使用它們。 Selldone 內建的直銷平台簡化了流程，讓批發商和商家都變得簡單明了。",
  },

  /** @see Affiliates **/
  my_affiliate: {
    title: "我的附屬合同",
    message:
      "這是與其他商店的聯盟合作夥伴關係清單。當店主指定您為會員時，您可以在此處查看您的佣金、訂單詳細資料和相關統計資料。",
  },

  /** @see BPageShopMarketingAffiliate **/
  affiliates: {
    title: "附屬合作夥伴",
    subtitle:
      "創建聯屬網絡營銷公司，隨時間跟踪他們的表現，並在一個地方根據準確信息採取行動。我們幫助您和您的合作夥伴建立牢固的關係。",

    affiliate_code: "會員代碼",
    crate_date: "創建日期",
    last_payment_date: "最後付款日期",
    for_all_products: "適用於所有產品",
    balance: "平衡",
    fix_commission: "固定佣金",
    percent_commission: "基於百分比的佣金",
    total_payment: "總付款",
    new_affiliate: "新的合作夥伴",
    new_affiliate_message: "添加新的合作夥伴",

    link_factory: {
      title: "附屬合作夥伴鏈接生成器",
      link_input: "你的鏈接",
      link_output: "生成的鏈接",
    },
  },

  /**
   * @see BAffiliateEdit
   */
  affiliate_edit: {
    affiliate_commission: "附屬公司 委員會",

    config: {
      new: "新的 附屬公司 项目",
      edit: "編輯 附屬公司 项目",
      subtitle:
        "在此配置常規設定和聯營公司名稱。",
    },

    payment: {
      title: "支付 项目",
      subtitle:
        "設定聯營公司的佣金結構。您可以結合固定佣金和基於百分比的佣金，或為每種產品設定特定佣金。",
    },

    contact: {
      title: "聯繫信息",
      subtitle: "請在此提供聯盟夥伴的聯絡方式。",
    },

    restriction: {
      title: "委員會 项目",
      subtitle:
        "定義哪些產品有資格獲得佣金。您可以限制某些產品的佣金。",
    },

    link_domain: {
      title: "项目 領域",
      subtitle:
        "將您的一個網域連結到該聯屬合作夥伴。透過此網域購買的訪客將歸屬於該附屬機構。",

      domain_not_approved_msg: "該域名尚未獲得批准！",
      domain_is_not_enable_msg: "域名未啟用！",
      domain_is_linked_to_other_affiliate_msg:
        "該網域已連結到另一個附屬機構！",
    },

    set_users_first_message: "請先設定用戶！",

    cluster: {
      title: "项目",
      subtitle:
        "將此附屬機構與叢集關聯，以便將其與其他資源一起管理在一個位置。",
      manage_action: "项目",
    },

    notifications: {
      create_success: "新會員新增成功。",
      update_success: "會員更新成功。",
    },

    inputs: {
      name: {
        label: "附屬公司 项目 姓名",
        message: "例如，John Doe、Alex Company、X Marketers 等。",
      },
      commission: {
        label: "委員會 项目",
        false_description:
          "使用固定佣金和百分比佣金的組合進行計算。",
        true_description:
          "使用定價標籤中設定的特定產品佣金進行計算。",
        false_title: "项目 + 项目 委員會",
        true_title: "项目 委員會",
      },
      user: {
        label: "用戶 (项目)",
        message: "项目, 项目.项目., 附屬公司 姓名 项目 Selldone",
      },
      web: {
        placeholder: "项目, 项目.项目., affiliate-web.com",
      },
      address: {
        placeholder: "项目, 项目.项目., 1200 POX, NY, USA",
      },
      tel: {
        placeholder: "项目, 项目.项目., 001-808-210354",
      },
      bank: {
        placeholder: "项目, 项目.项目., 项目 銀行, 不: 10002-325-800-845213",
      },
      domain: {
        placeholder: "選擇一個網域...（可選）",
      },
      pos: {
        true_description:
          "附屬公司可以透過他們的面板直接為客戶下訂單。",
        true_title: "POS 使用權",
      },
      enable: {
        true_description:
          "該附屬機構目前是否活躍？如果處於非活動狀態，他們的聯盟行銷計劃將不適用於透過其連結發出的訂單。",
      },
      products: {
        label: "符合佣金資格的產品",
        select_product: "项目 產品",
      },
    },
    actions: {
      update: "更新 附屬公司",
      add: "项目 附屬公司 项目",
    },
    /**
     * @see BPageAffiliateEdit
     */
    delete: {
      subtitle:
        "您可以先與聯營公司解決任何未償債務，然後再將其從您的商店中刪除。刪除後，附屬資訊在有限時間內仍可存取。",
    },
  },

  /**
   * @see BPageShopFinanceValuations
   */
  shop_valuations: {
    title: "風俗 價錢 项目 估值",
    subtitle:
      "為產品分配估價（定價輸入表），讓客戶選擇變體或個人化您的商品。然後系統將根據自訂輸入計算價格。",
    add_valuation_action: "建立新的評估表",
    empty_message:
      "與其創建多個變體，不如考慮開發可應用於簡單產品的估值策略。",
    delete_dialog: {
      title: "项目 消除",
      message:
        "您確定要刪除此定價表嗎？請確保首先從所有關聯產品中刪除此自訂定價策略。",
      action: "是的，立即刪除",
    },
    notifications: {
      delete_success: "評估已成功刪除。",
    },
  },

  /**
   * @see BValuationInput
   */
  valuation_input: {
    label: "定價和估值模型",
  },

  /**
   * @see BValuationAdd
   */
  valuation_add: {
    title_edit: "編輯估價表",
    title_add: "建立新的評估表",
    config: {
      subtitle:
        "設定評估系統，使用公式和參考表為您的產品建立靈活的定價。首先給這個評估一個獨特的名稱。",
    },
    valuation_preview: "預覽估價表",
    load_sample: "加載樣品",
    conditions: {
      title: "條件",
      subtitle:
        "定義自訂變體的邏輯。此配置簡化了變體可用性的管理。",
    },
    structure: {
      title: "项目",
      subtitle:
        "透過整合公式和參考表在此設計您的定價輸入表單。",
      expand_action: "项目",
      collapse_action: "项目",
    },
    inputs: {
      title: {
        message: "此標題對客戶不可見。",
        placeholder: "輸入定價名稱，例如“Mugs Pricing”",
      },
    },
    samples: {
      title: "项目 估值",
    },
  },

  /** @see AdminGiftcardPage_Orders **/
  gift_card_orders: {
    title: "使用禮品卡的訂單",
    table: {
      order: "命令",
      order_price: "訂單金額",
      paid_by_card: "刷卡支付",
      payment_status: "支付狀態",
      date: "日期",
    },
  },

  /** @see BPageOfferOrders **/
  offer_orders: {
    title: "報價單",
    table: {
      order: "命令",
      order_price: "訂單金額",
      offer_amount: "報價金額",
      payment_status: "支付狀態",
      product: "產品",
      date: "日期",
    },
  },

  /** @see BPageCouponOrders **/
  coupon_orders: {
    title: "優惠券訂單",
    table: {
      order: "命令",
      order_price: "訂單金額",
      coupon_amount: "優惠券金額",
      payment_status: "支付狀態",
      date: "日期",
    },
  },

  /** @see BPageDiscountCodeOrders **/
  discount_code_orders: {
    title: "帶有折扣碼的訂單",
    table: {
      order: "命令",
      order_price: "訂單金額",
      discount_amount: "折扣金額",
      payment_status: "支付狀態",
      date: "日期",
    },
  },

  /** @see BPageShopIncentives **/
  incentives: {
    discount_code: "折扣",
    coupon: "優惠券",
    offer: "提供",
    gift_card: "禮物卡",
    lottery: "彩票",
    cashback: "项目",
  },

  /** {@see BPageShopIncentivesDiscountCode} **/
  discount_codes: {
    title: "折扣碼",
    sub_title:
      "在本節中，您將能夠根據您的需要設計折扣券。這些折扣與任何產品折扣是分開的，將適用於用戶訂單的最終金額。",
    add_new: "添加新的折扣代碼",
    card: {
      created: "創造",
      start: "開始",
      end: "結尾",
      currency: "貨幣",
      discount_percentage: "折扣率",
      discount_limit: "折扣限額",
      state: "當前狀態",
      enabled: "現已啟用",
      disabled: "現在禁用",
      used: "已消費",
      count: "數數",
      unit: "項目）",
    },
    /** {@see BDiscountCodeAdd} **/
    dialog: {
      title_edit: "修改折扣碼",
      title_add: "添加新的折扣代碼",
      discount_code_input: "優惠碼",
      discount_percent_input: "折扣率",
      discount_percent_input_hint: "購買金額折現率",
      count_input: "數數",
      count_input_hint: "此代碼的最大使用量",
      limit_input: "折扣限額",
      limit_input_hint: "基於貨幣的最大折扣",
      currency_input_message: "此貨幣可享受折扣。",
      limit_input_message:
        "折扣限制值為 0 表示折扣率沒有限制。",
      title_input: "標題",
      title_input_hint: "您可以輸入此折扣代碼的標題",
      description_input: "描述",
      description_input_hint:
        "您可以輸入此折扣代碼的說明",
      date_start_input: "開始",
      date_start_input_placeholder: "選擇何時開始打折",
      date_end_input: "結尾",
      date_end_input_placeholder: "選擇折扣結束的時間",
      notifications: {
        add: "折扣碼已成功添加。",
        edit: "折扣碼已成功編輯。",
      },
      config: {
        title: "项目 配置",
        subtitle:
          "折扣碼計算公式為：max(LIMIT, PERCENT * 購物車價格)。請記住使程式碼相關且易於記憶。",
      },
      limit: {
        title: "项目",
        subtitle:
          "您可以在此部分定義每個折扣代碼的最大使用限制以及最大折扣金額。",
      },
      duration: {
        title: "期間 限制",
        subtitle:
          "如果您想在特定時間範圍內啟動折扣代碼，您可以在此處確定該持續時間。",
      },
      design: {
        subtitle:
          "您可以為每個折扣代碼設定標題和說明。這些詳細資訊將顯示給使用者。",
      },
      cluster: {
        subtitle:
          "透過將此折扣代碼與叢集關聯，您可以在單一位置輕鬆管理它以及其他資源。",
      },
    },
    delete_alert: {
      title: "刪除折扣碼",
      message: "要刪除此折扣代碼嗎？",
      action: "移除折扣",
    },
    notifications: {
      delete_success: "您的評論已成功刪除",
    },
  },

  /** {@see BPageShopIncentivesGiftcard} **/
  gift_cards: {
    title: "禮物卡",
    sub_title:
      "創建一張禮品卡，然後根據需要製作盡可能多的禮品卡。這張卡是收費的，只能用於在您的商店購物。",

    create_new: "添加新的禮品卡",
    card: {
      created: "創造",
      lifetime: "到期日",
      lifetime_unit: "自每張卡片創建之日起的月份",
      currency: "貨幣",
      initial_balance: "初始費用",
      count: "數數",
      count_unit: "物品",
      used: "用過的",
    },
    dialog: {
      title: "禮品卡設計",
    },
    alert: {
      title: "刪除折扣碼",
      message:
        "您想刪除此禮品卡類別及其下發行的所有禮品卡嗎？",
      action: "刪除",
    },
    notifications: {
      delete_title: "刪除禮品卡",
      delete_message: "您的評論已成功刪除。",
    },
  },

  /** {@see BPageShopIncentivesCoupon} **/
  coupons: {
    title: "優惠券",
    sub_title:
      "如果您想為客戶提供可在特定條件下使用的折扣，您可以創建優惠券。優惠券可以包括帶有限製或固定金額或兩者組合的百分比折扣。",
    create_new: "添加新優惠券",
    qualified_products: "符合條件的產品",
    min_purchase: "最低購買量",
    only_first_order: "僅限首次購買",

    one_time_use: "一次性使用",
    multiple_use: "多次使用",
    amount_usage: "使用量",

    delete_alert: {
      title: "刪除優惠券",
      message: "您確定要刪除此優惠券嗎？",
      action: "是的，刪除優惠券",
    },
    notifications: {
      delete_success: "優惠券已成功刪除。",
    },
  },
  /** {@see BCouponAdd} **/
  coupon_edit: {
    title_edit: "修改優惠券",
    title_add: "新優惠券",
    discount_charge: "折扣與收費",
    charge: "收費",
    charge_message: "初始費用金額",
    percent: "折扣百分比",
    percent_message: "折扣百分比數額",
    limit_input: "限制",
    limit_input_hint: "折扣限額金額",
    currency_input_message: "此貨幣可用的優惠券。",

    count_input: "數數",
    count_input_hint: "此代碼的最大使用量",
    limit_input_message:
      "折扣限制值為 0 表示折扣率沒有限制。",
    date_start_input: "開始",
    date_start_input_placeholder: "選擇何時開始使用優惠券",
    date_end_input: "結尾",
    date_end_input_placeholder: "選擇折扣結束的時間",
    title_input: "標題",
    title_input_hint: "您可以輸入此折扣代碼的標題",
    description_input: "描述",
    description_input_hint:
      "您可以輸入此折扣代碼的說明",
    coupon_code: "優惠券代碼",
    need_code: "需要代碼嗎？",

    coupon_color: "優惠券顏色",
    min_purchase_amount: "最低購買金額",
    min_purchase_amount_hint:
      "購買金額必須大於或等於該值。",
    should_exist_product: "至少其中一種產品必須在購物車中",
    apply_for_first_order: "僅限第一次購買",
    apply_for_first_order_on:
      "此優惠券僅可用於客戶首次購買！",
    apply_for_first_order_off:
      "每個買家的優惠券使用次數可以在下面調整。",

    has_qualify_constraints: "您想定義更多限制嗎？",
    has_qualify_constraints_message:
      "設置更多條件以使客戶有資格使用此優惠券。",
    one_time_use_message: "客戶可以使用此優惠券一次。",
    daily_limit: "每日限額",
    no_limit: "沒有限制",
    daily_limit_message: "客戶每天的最大使用量",

    monthly_limit: "每月限額",
    monthly_limit_message: "客戶每月最大使用量",

    yearly_limit: "年度限額",
    yearly_limit_message: "客戶每年最大使用量",

    notifications: {
      add: "新優惠券創建成功。",
      edit: "優惠券已更新。",
    },

    config: {
      subtitle:
        "優惠券折扣計算公式為：CHARGE + max (LIMIT, PERCENT * 購物車價格)。",
    },
    limit: {
      subtitle:
        "在此部分中，您可以設定每張優惠券的最大使用次數以及每張優惠券可提供的最高折扣金額。",
      zero_message: "零：沒有限制！",
    },
    duration: {
      subtitle:
        "如果您希望設定優惠券生效的特定時間範圍，您可以在此部分配置持續時間。",
    },
    design: {
      subtitle:
        "每張優惠券都允許添加標題和描述。這些詳細資訊將對客戶可見。",
    },
    constraints: {
      subtitle:
        "在這裡，您可以為優惠券建立額外的個人化參數。",
      no_limit: "不 项目 局限性",
      has_limit: "額外的限制",
      has_code_message: "用戶應輸入代碼以添加優惠券。",
    },
    club: {
      subtitle:
        "此優惠券的使用僅限於所選客戶俱樂部的會員。",
    },
    cluster: {
      subtitle:
        "透過將此優惠券與集群關聯，您可以在單一位置輕鬆管理它以及其他資源。",
    },
    preview: {
      subtitle: "這是優惠券的公開預覽。",
    },
  },

  /** {@see BPageShopIncentivesOffer} **/
  offers: {
    title: "優惠",
    sub_title:
      "您可以為您的客戶創建特別優惠，以便在購買一件商品後，他們會以折扣甚至免費的價格收到另一件商品。",
    create_new: "添加新優惠",
    qualified_products: "符合條件的產品",
    min_quantity: "最小用量",
    min_purchase: "最低購買量",
    amount_usage: "使用量",

    delete_alert: {
      title: "刪除報價",
      message: "您確定要刪除此優惠嗎？",
      action: "是的，刪除優惠",
    },
    notifications: {
      delete_success: "優惠已成功刪除。",
    },
  },

  /** {@see BOfferAdd} **/
  offer_edit: {
    title_edit: "編輯報價",
    title_add: "新報價",

    design_style: "設計與風格",
    eligible_constraints: "客戶合格限制",

    title_input: "標題",
    title_input_hint: "您可以輸入此折扣代碼的標題",
    description_input: "描述",
    description_input_hint: "寫下這個折扣碼的描述",

    currency_input_message: "此貨幣的可用報價。",
    qualified_products: "符合條件的產品",
    qualified_products_message:
      "對於符合條件的產品，購物車中的商品總數必須等於或大於最小數量。",
    min_items: "最少物品數量",
    min_items_message: "客戶必須購買的商品數量",
    offered_products: "提供的產品",
    offered_products_message: "至少其中一種產品必須在購物車中。",
    discount_percent: "折扣百分比",
    discount_percent_message: "這些項目的折扣百分比。",
    discount_percent_hint: "折扣百分比金額",

    per_order: "每個訂單的最大使用次數",
    per_order_message:
      "報價可應用於訂單的最大次數",

    count_input: "數量",
    count_input_hint: "最大限度地使用此優惠",

    min_purchase: "最低購買金額",
    min_purchase_hint:
      "購買價格必須大於或等於該值",
    limitation: "局限性",

    date_start_input: "開始",
    date_start_input_placeholder: "選擇何時開始使用優惠券",
    date_end_input: "結尾",
    date_end_input_placeholder: "選擇折扣結束的時間",
    max_actives_is_3: "您只能同時擁有三個有效優惠。",
    enable: "自動申請",

    notifications: {
      add: "新報價創建成功。",
      edit: "優惠更新成功。",
    },
    config: {
      subtitle:
        "透過確定標題、描述和公開可用性狀態，開始製定明智的交易。",
    },
    limit: {
      subtitle: "在此部分中設定此優惠的最大使用限制。",
    },
    duration: {
      subtitle:
        "如果您想為優惠設定特定的時間範圍，您可以在此處配置持續時間。",
    },
    constraints: {
      subtitle:
        "在此設定優惠的資格標準和條件。此優惠適用於滿足這些條件的購物車商品。",
    },
    discounted_products: {
      title: "项目 產品",
      subtitle:
        "您可以指定此優惠將適用折扣的產品。",
    },
    cluster: {
      subtitle:
        "透過將此產品與叢集關聯，您可以在單一位置輕鬆管理它以及其他資源。",
    },
  },

  /** {@see BPageCampaignAds} **/
  campaign_ads: {
    menu: {
      banner: "橫幅",
      reportage: "報告文學",
      social: "社交媒體",
      offline: "離線",
    },
  },

  /** {@see BPageShopMarketingEmail} **/
  emails: {
    title: "電子郵件營銷",
    subtitle:
      "通過拖放、安排和啟動活動來設計電子郵件，以提高保留率，並在一個地方查看可靠和準確的信息。",
    cation_message:
      "⚠ 限制為未經驗證的商家。 （測試版）",

    subject: "主題",
    from: "從",
    in_que: "等待中",
    schedule_at: "安排在",
    sent: "發送",
    sends: "發送",
    delivers: "發表",
    views: "意見",
    clicks: "點擊次數",
    buys: "購買",
    new_email: "添加新電子郵件",
    new_email_message: "創建和安排新的營銷電子郵件",
  },

  /** {@see BPageEmailMarketingDashboard} **/
  email_dashboard: {
    review: "審查",
    waiting_for_approve: "等待 {name} 的確認",
    approved_by: "電子郵件由 {name} 驗證並發送。",
    not_submitted_send_request:
      "您尚未提交發送此電子郵件的請求。",
    reviewed_by: "由 {name} 審核",
    status: "電子郵件狀態",
    conversion: "轉化率",

    sell_performance: "銷售成績",
    total_buys: "銷售總數",
    amount_buy: "總銷售額",
    average_sell: "平均銷售額",
    sessions: "會話",
    overview: "概述",
    purchase_amount: "採購量",
    actions: "用戶活動",
  },

  /** {@see BPageEmailMarketing} **/
  email_page: {
    emails: "電子郵件",
    edit: "編輯",
  },
  /** {@see BPageAffiliator} **/
  affiliate_page: {
    affiliates: "附屬合作夥伴",
    orders: "訂單",
    payments: "付款",
  },

  /** {@see BPageAffiliateDashboard**/
  affiliate_dashboard: {
    link: {
      title: "附屬公司 關聯",
      subtitle:
        "為您的聯盟合作夥伴產生一個獨特的鏈接，以追蹤銷售和佣金。將推薦代碼「{code}」新增至任何連結或為您的聯盟公司指派自訂專用網域。系統將對其進行48小時的追蹤。",
    },
    fix_commission: "固定佣金",
    percent_commission: "基於百分比的佣金",
    last_payment: "最後一次付款",
    balance: "平衡",
    total_payment: "總付款",
    status: "附屬合作夥伴狀態和限制",
    available_for: "可以用來",
    orders_count: "訂單金額",
    orders_accepted: "接受的訂單",
    finance: "財務報告",

    amount_accepted: "接受金額",
    amount_paid: "已付金額",
    sessions: "會話",
    affiliate_payment: "附屬合作夥伴付款",
    amount_payment: "支付金額",
    amount_payment_hint: "確切的交易金額",
    i_paid: "我向 {name} 支付了 {amount} {currency}。",
    pay_now: "現在付款",
  },

  /** {@see BPageShopPermissionRoles**/
  permission_roles: {
    new_role: "添加新角色",
    new_role_message: "讓團隊合作更輕鬆。",
    new_role_action: "添加新角色",
  },
  /** {@see Affiliate**/
  user_affiliates: {},
  /** {@see BPageShopIncentivesLottery**/
  shop_lotteries: {
    title: "彩票",
    sub_title:
      "您的客戶可以玩遊戲並獲勝。您商店的顧客每場遊戲必須消耗 10 個籌碼。例如，如果您希望您的客戶有機會贏得 1000 美元，您必須將每個籌碼價格的金額設置為 100 美元。每個籌碼的值為 0 表示買方每次購買將收到一個籌碼。",
    manually_send_chip: "您要手動將籌碼發送給用戶嗎？",
    manual_send_token_action: "手動令牌",
    lottery_enable: "是否啟用彩票？",
    chip_price_input: "芯片價格",
    zero_chip_message: "每個訂單贈送 1x 籌碼",
    chip_has_price_message: "每 {amount} {currency} 訂單贈送 1 個籌碼。",
    chip_disabled_message: "芯片被禁用！",
    create_new: "添加新獎品",
    delete_alert: {
      title: "刪除獎品",
      message: "您確定要永久刪除此獎品嗎？",
      action: "是的，立即刪除",
    },
    notifications: {
      delete_success: "獎品刪除成功。",
    },

    config: {
      subtitle:
        "透過商店中的遊戲化體驗來促進客戶購買。為透過購買賺取代幣的客戶設定獎品和中獎賠率。每個遊戲花費 10 個代幣，您可以為首次購買者提供特別獎品。預設遊戲是命運之輪，但您可以對其進行自訂以適合您商店的佈局。",
    },
    empty_prize_list: "在這裡建立和管理獎品...",
  },

  /** {@see BLotteryAdd**/
  lottery_edit: {
    title_edit: "編輯彩票項目",
    title_add: "新彩票項目",
    general_config: "一般配置",
    design_style: "風格與外觀",
    enable_message: "一個輪子中的最大物品是 14 個。",
    title_input: "標題",
    title_input_hint: "寫一個簡短的標題。",
    description_input: "描述",
    description_input_hint: "寫一個關於該項目的描述。",
    quantity: "數量",
    quantity_message: "可用項目總數",
    image: "圖片",
    image_placeholder: "為項目選擇圖像",
    chance: "機會",
    chance_message: "獲勝機會百分比",
    free_for_first: "新客戶免費嗎？",
    free_for_first_message: "新客戶可以贏得這個項目。",
    not_free_for_first_message: "此獎品不適用於首次免費遊戲。",

    amount: "獎金金額",
    amount_hint: "用戶為他們的訂單贏得了這筆費用。",
    currency_message:
      "此項目的貨幣。其他貨幣按匯率換算。",
    discount: "折扣",
    discount_message: "客戶訂單的折扣百分比",
    discount_limit: "折扣限額",
    discount_limit_hint: "客戶的最大折扣。",
    color: "顏色",
    condition: "條件",

    notifications: {
      add: "新彩票項目創建成功。",
      edit: "彩票項目更改成功。",
    },
    config: {
      subtitle:
        "在這裡，您可以建立商店的彩票獎品。設定每個獎品的標題、描述、顏色和圖像。",
    },
    design: {
      subtitle:
        "在這裡，您可以選擇獎品的圖像和顏色。",
    },
    constraints: {
      subtitle: "指定贏得此獎項的標準和限制。",
    },
    prize: {
      title: "项目",
      subtitle:
        "在此設定獎品詳細資料。選項包括折扣代碼、禮品卡、積分和其他折扣作為彩票獎勵。",
    },
    product_input: {
      label: "產品 项目",
      message: "選擇有獎產品（免費）",
    },
  },

  /** {@see BGiftcardTypeInput**/
  gift_card_types_list: {
    label: "禮品卡類型",
    message: "從列表中選擇禮品卡類型。",
  },

  /** {@see BEmailMarketingEditor**/
  email_builder: {
    service_unavailable: "郵件服務器在您的帳戶中未激活。",
    design_section: "您的電子郵件設計板",
    schedule_switch: "安排電子郵件發送？",
    schedule_placeholder: "選擇發送電子郵件的時間",
  },

  /** {@see BCustomersFunnel**/
  user_funnel: {
    REGISTER_DATE: {
      title: "註冊日期",
      description: "按用戶註冊日期過濾。",
    },
    LAST_BUY_DATE: {
      title: "最後一次購買",
      description: "最後購買日期。",
    },
    LOGIN_DATE: {
      title: "登錄日期",
      description: "上次登錄日期。",
    },
    LEVEL: {
      title: "客戶俱樂部",
      description: "客戶俱樂部成員。",
    },
    SUBSCRIBED: {
      title: "訂閱",
      description: "訂閱接收電子郵件。",
    },
    NOT_PURCHASED: {
      title: "沒有購買",
      description: "到目前為止還沒有購買的客戶。",
    },
    SEX: {
      title: "性別",
      description: "用戶性別。",
    },
    LOCATION: {
      title: "地點",
      description: "用戶位置。",
    },

    LIMIT: {
      title: "限制",
      description: "設置最大用戶數限制。",
    },

    SEGMENTS: {
      title: "細分市場",
      description: "將客戶限制在特定的手動細分中。",
    },
  },

  /** {@see InlineHelp**/
  inline_help: {
    helps_title: "服務用戶指南",
    blogs_title: "Selldone 部落格中的相關內容",
  },

  /** {@see BPageShopFinanceTax**/
  shop_tax: {
    region: "地區",
    label: "標籤",
    country_tax: "國稅",
    customer_tax: "客戶增值稅",
    business_tax: "營業增值稅",
    shipping: "船運",
    override: "覆蓋",
    country: "國家",
    vat_range: "增值稅範圍",
    custom: "風俗",
    regions: "地區",
    rest_world: "剩下的世界",
    overrides: "覆蓋",
    dialog_set_title: "稅收設置",

    tax_setting: "稅收設置",
    vat: "VAT",

    calculate_tax_input: "自動計算稅金",
    calculate_tax_message:
      "通過激活此選項，將計算增值稅並將其應用於您的訂單。",

    tax_number: "稅號",
    tax_number_message:
      "輸入您的稅號。該註冊號將記錄在買方的發票中。",

    tax_included_in_price_input: "產品價格含稅",
    tax_included_in_price_message:
      "如果您在產品價格中包含稅額，請選擇此選項。稅額將使用以下公式計算：",
    tax_included_in_price_formula:
      "稅額=（價格*增值稅）/（1+增值稅），例如，價格為100美元、增值稅率為10%的產品的稅額為9.09美元。",

    tax_exclude_title: "排除|結帳時將會加稅費",
    tax_excluded_message:
      "稅金將在結帳時在付款前計算，並根據您的客戶證據添加到不含稅價格中。",

    tax_on_shipping_input: "對運費徵稅",
    tax_on_shipping_message:
      "通過選擇此選項，稅費將應用於運費。",

    fixed_tax_rate: "固定稅率",
    dynamic_tax_rate: "按地區計稅",

    locations_tip:
      "上面的列表僅顯示您在商店設置 > 地點中選擇的國家作為您銷售的國家。",
    locations_action: "店舖位置設置",

    save_alert: "設置不保存！",

    pos_tax_setting: "POS 稅務設置",
  },

  /** {@see BPageTransportation**/
  transportation_page: {
    menu: {
      dashboard: "儀表板",
      transportations: "運輸方式",
      orders: "訂單",
      setting: "環境",
      delivery_services: "服務",
      delivery_persons: "快遞員",
    },

    go_to_courier_list: "查看快遞列表",
    go_to_service_list: "查看運輸服務列表",
  },

  /** {@see BPageTransportationCouriers**/
  transportation_persons: {
    title: "快遞員",
    notifications: {
      success_add: "快遞員補充道。",
      success_reset: "統計重置。",
      success_remove: "快遞刪除成功。",
      success_update: "快遞信息更新成功。",
    },
    reset: {
      title: "重置統計信息",
      message: "您確定要重置此快遞員的統計信息嗎？",
      action: "是的，立即重置",
    },
    remove: {
      title: "刪除信使",
      message: "你確定要刪除這個快遞嗎？",
      action: "是的，立即移除",
    },
    add_dialog: {
      title: "添加新快遞",
      action: "添加快遞",
    },
  },
  /** {@see BPageTransportationOrders**/
  transportation_orders: {
    title: "發貨訂單",
    notifications: {
      success_update: "發貨狀態更新成功。",
      success_payment: "貨到付款確認成功。",
    },
  },
  /** {@see BPageCourier**/
  delivery_person: {
    actions_title: "快遞設置",
    action_delivered: "已發貨",
    action_paid: "貨到付款",
    action_returned: "回來",
    cod_confirm_action: "確認貨到付款",
    pickup_dialog: {
      title: "你是這個包裹的快遞員嗎？",
      message:
        "如果您負責運送此包裹，請選擇是，否則選擇否。",
    },
    status_dialog: {
      title: "將狀態更改為 {status}",
      message: "您確定將配送狀態更改為 {status} 嗎？",
      action: "是的，我確認！",
    },
    cod_dialog: {
      title: "貨到付款",
      message:
        "您是否確認已收到買家的訂單金額？",
      action: "是的，我確認付款！",
    },
  },

  /** {@see BPageTransportationServices**/
  transportation_services: {
    title: "送貨服務",
    notifications: {
      success_add: "增加了送貨服務。",
      success_reset: "統計重置。",
      success_remove: "服務已成功刪除。",
      success_update: "服務更新成功。",
    },
    reset: {
      title: "重置統計信息",
      message: "您確定要重置此服務的統計信息嗎？",
      action: "是的，立即重置",
    },
    remove: {
      title: "刪除送貨服務",
      message: "您確定要刪除此服務嗎？",
      action: "是的，立即移除",
    },
    add_dialog: {
      title: "添加新的送貨服務",
      action: "添加服務",
    },
  },
  /** {@see BPageTransportationPickups**/
  transportation_pickups: {
    addresses: {
      title: "取貨地址",
      subtitle:
        "在此處添加和編輯取貨地址。用戶將能夠在結帳頁面上選擇取貨地址。",
      add_action: "添加新位置",
    },
  },

  /** {@see DeliveryReceiptWidget**/
  delivery_receipt: {
    title: "交貨收據",
    has_return: "退貨",
    cashed: "現金支付",
  },
  /** {@see BPageTransportationServiceDashboard**/
  delivery_dashboard: {
    select_destinations: "將訂單添加到列表",
    price_calculation: "估算運費",
    price_calculation_action: "計算價格",
    add_request: "請求服務",
    add_request_action: "提交服務請求",
    refresh_action: "更新信息",
  },

  /** {@see DeliveryOrderWidget**/
  delivery_order: {
    title: "裝貨單",
    has_return: "退貨",
    cashed: "現金支付",
  },

  /** {@see BPagePos**/
  cash_register: {
    menu: {
      panel: "收銀機",
      orders: "訂單",
      customers: "顧客",
      devices: "設備",
      inventory: "存貨",
    },
    payment_confirm: "付款確認",
    payment_confirm_msg: "客戶支付訂單 {basket_id}。",
  },

  /** {@see BPosDeviceBarcodeScanner**/
  barcode_scanner: {
    wifi_pass: "您的無線網絡密碼",
    message: "輸入您的 WiFi 路由器密碼並掃描二維碼。",
    wifi_ssid: "無線網絡SSID",
    ssid_message: "輸入您的 Wi-Fi 網路名稱 (SSID)。",
  },

  /** {@see PosDeviceTypes**/
  pos_devices: {
    Scanner: "條形碼掃描器",
    Scanner_desc:
      "要使用條碼掃描器，您必須在產品設置中正確輸入產品 SKU 代碼。",
    Printer: "打印機",
    Printer_desc:
      "通過連接到收據打印機打印您的客戶收據。",
    CustomerView: "客戶視圖",
    CustomerView_desc:
      "此頁面使您能夠向客戶顯示訂單詳細信息。",
    CardReader: "讀卡器",
    CardReader_desc: "您的客戶用於貨到付款的讀卡器設備。",
    ChipReader: "芯片閱讀器",
    ChipReader_desc: "NFC 標籤閱讀器使用標籤將商品添加到購物車。",
  },
  /** {@see BPagePosDevices**/
  pos_register_devices: {
    delete_dialog: {
      title: "刪除設備",
      message: "您確定要從您的 POS 配置文件中刪除此設備嗎？",
      action: "是的，立即移除",
    },
  },

  /** {@see BPageOrderPos**/
  pos_process_center: {
    title: "POS訂單處理中心",
    menu: {
      label: "包裝標籤",
      receipt: "收據",
      back: "後退",
      timeline: "時間線",
      order: "命令",
    },
  },
  /** {@see BPagePosPanel**/
  pos: {
    name: "POS",
    message:
      "讓您的零設置成本在線銷售點，在任何智能手機、平板電腦和 PC 上運行，或手動創建訂單。",
    add_customer: "添加客戶",
    set_delivery: "設置收貨地址",
    add_giftcards: "添加禮品卡",
    add_discount_code: "添加折扣碼",
    add_coupon: "添加優惠券",
    set_campaign: "設置廣告系列",
    select_buyer: "選擇買家！",
    send_to_pos: "發送到讀卡機",
    print_receipt: "打印收據",
    confirm_cash_payment: "確認現金支付",
    payment_cod: {
      title: "貨到付款",
      message:
        "此訂單的金額將在交貨時支付。收到買家的款項後，您必須確認付款才能在系統中完成訂單。",
    },
    payment_online: {
      title: "選擇在線支付方式",
      message:
        "通過選擇以下選項，將創建一個付款鏈接並將其發送給買家。通過支付此鏈接，訂單狀態將變為已支付模式。付款鏈接將通過掃描客戶屏幕上的二維碼、短信或電子郵件生成。要激活任何渠道以發送鏈接，請單擊該選項，然後按下按鈕向買家發送收據。",
    },
    notifications: {
      success_pay: "訂單付款完成。",
      success_order:
        "訂單創建成功，等待客戶付款。",
    },
    payment_dialog: {
      check_pay_now: "手動檢查付款",
      close_action: "關閉對話框。我不想等待客戶付款",
      go_to_order: "前往訂購頁面",
      paid_by_gift_card_msg:
        "總訂單金額已從禮品卡中提取！買家無需支付更多費用。",
      cod_msg: "客戶將在收到訂單時付款。",
      online_msg: "請客戶掃描客戶屏幕上的二維碼。",
    },
  },

  /** {@see BPageShopProductsImporter**/
  exporter: {
    title: "導出數據",
    subtitle:
      "您的數據屬於您！您可以隨時以標準格式下載您的業務信息。但是，請尊重您客戶的隱私，不要向他們發送垃圾郵件，也不要與第三方共享他們的信息。",

    excel:
      "您將收到商店中所有 {type} 的清單以及 Excel 格式的完整資訊。",
    csv: "您將收到商店中所有 {type} 的清單以及 CSV 格式的完整資訊。此格式符合Selldone將{type}匯入商店的標準格式。",
  },
  /** {@see BPageShopProductsImporter**/
  importer: {
    category: {
      title: "導入類別",
      subtitle:
        "在此處上傳類別的 CSV 文件。確保遵循標準格式。",
    },
    product: {
      title: "進口產品",
      subtitle:
        "在此處上傳產品的 CSV 文件。確保遵循標準格式。",
    },
    product_images: {
      title: "導入圖像",
      subtitle:
        "接收影像資訊非常耗時。匯入圖像時請記住遵守版權法。匯入失敗的圖片將在 7 天後自動從清單中刪除。",
    },
    inventory: {
      title: "批量更新庫存",
      subtitle:
        "在此處上傳庫存的 CSV 文件。確保遵循標準格式，首先導出 CSV 文件，然後編輯該文件。",
    },

    back_to_products: "返回產品列表",
    back_to_categories: "返回類別列表",
    back_to_inventory: "返回庫存清單",

    step_select_file: "選擇 CSV 文件",
    step_send_to_server: "發送到服務器",
    step_view_result: "查看結果",
    step_view_que: "查看等候名單",
    send_to_server_action: "發送到服務器",

    shop_license: "店鋪執照",
    max_items_limit: "最大項目限制",
    total_items: "項目總數",

    /** {@see BShopCustomerImporter**/
    customer: {
      title: "導入客戶",
      subtitle:
        "在此處上傳客戶的 CSV 文件。確保您遵循標準格式，並且您必須遵守隱私規則。",
    },

    /**
     * @see BVendorsImporter
     */
    vendor: {
      title: "進口供應商",
      subtitle:
        "在此上傳供應商 CSV 檔案。確保格式正確並遵守隱私法規。",
      checklist: {
        title: "重要清單",
        subtitle: "請務必遵循指南。",
        sample_files: "範例文件",
        valid_vendor_name_needed:
          "您必須提供<b>有效名稱</b>。 <b>name</b> 用來決定是 <i>Create</i> 新供應商或 <i>Update</i> 現有供應商。",
        assign_user_after_import:
          "匯入供應商後，您可以手動指派使用者以授予他們存取供應商面板的權限。",
      },
      need_kyc_alert:
        "在匯入供應商之前，您需要驗證您的個人資訊。",
      back_to_vendors_list: "後退 至 项目 列表",
    },
  },

  /**
   * @see BPageMarketplaceProducts
   */
  marketplace_products: {
    title: "项目 產品",
    subtitle:
      "目錄列出了供應商提供的所有產品。在市場中，產品可以連結到一個或多個供應商。與產品關聯的每個供應商都有一個唯一的條目，其中包括特定於該供應商的庫存和定價詳細資訊。",
    filter_vendor: {
      placeholder: "按供應商過濾...",
    },
    filter_status: {
      placeholder: "篩選 项目 地位...",
    },
  },

  /**
   * @see BPageMarketplaceRequests
   */
  marketplace_requests: {
    open_vendors_panel: "打開供應商面板",
    title: "供應商請求清單",
    subtitle:
      "這是已申請成為您市場中的供應商的個人的請求清單。",
  },
  /**
   * @see BPageMarketplaceSetting
   */
  marketplace_setting: {
    marketplace: {
      title: "市場",
      subtitle:
        "禁用市場將關閉某些功能。如果您想關閉整個市場，您應該在設定中停用您的商店。",
    },
    distribution_model: {
      title: "分銷模式",
      subtitle:
        "市場可以在不同的分銷模式下運作。無論您是希望供應商直接將商品運送給買家，還是在您的倉庫合併訂單進行運送，您都可以在這裡選擇最適合您需求的型號。",
    },
    access: {
      title: "项目 使用權",
      subtitle:
        "身為管理員，您可以控制供應商對產品儀表板的存取等級。調整全域存取設定以允許供應商新增自己的產品和類別，或將此存取權限僅限於管理員。",
    },
    need_enable_shipping_for_vendors_tips:
      "在商店 > 物流標籤中為每種方法單獨啟用供應商運輸。",
    transportation_available_tooltip: "此選項可供供應商使用。",
    transportation_not_available_tooltip:
      "不適用於供應商！您可以在交通設定中啟用它。",
    panel: {
      title: "供應商面板",
      subtitle: "透過您的自訂網域加入您的供應商。",
    },
    documents: {
      title: "项目",
      subtitle:
        "您可以要求供應商上傳文件或簽署某些合約。在此指定所需的文件。",
      add_document_action: "新增文件請求",
    },
    inputs: {
      enable: {
        false_description:
          "市場已關閉，禁用所有市場功能。",
        true_description:
          "项目 市場 项目 積極的, 项目 全部 市場 项目.",
      },
      product: {
        label: "项目 新的 產品",
        true_title: "供應商可以新增產品",
        false_description:
          "您新增產品並分配供應商。供應商只能管理價格和庫存。",
        true_description:
          "供應商可以直接在其供應商面板中新增和管理自己的產品。",
      },
      need_verify: {
        label: "產品 项目 流動",
        false_description: "新的 项目 產品 项目 居住 项目.",
        false_title: "無需驗證",
        true_description:
          "供應商的新產品在投放市場之前需要獲得批准。",
        true_title: "需要驗證",
      },
      category: {
        label: "项目 新的 類別",
        true_title: "供應商可以新增類別",
        false_description:
          "您新增類別。供應商只能將產品新增至現有類別。",
        true_description:
          "供應商可以直接在其供應商面板中新增和管理類別。",
      },
      shipping: {
        label: "船運 项目",
        true_title: "供應商有運輸選項",
        false_description:
          "供應商無法新增或自訂其運輸方式。",
        true_description:
          "供應商可以設定自己的運輸方式、添加快遞員並根據自己的需求量身定制運輸。",
      },
      hidden_customer: {
        label: "顯示買家聯絡資訊",
        true_description: "買家的聯絡方式對供應商是隱藏的。",
        false_description:
          "供應商可以看到買家的聯絡方式，例如電話和電子郵件。",
      },
      multi: {
        false_description:
          "一名用戶只能擁有一個供應商帳戶。用戶將被重定向到位於 /vendors 的面板。",
        true_description:
          "一個用戶可以擁有多個供應商帳戶。這是測試版功能；使用前請聯絡我們。",
        true_title: "多供應商模式",
        false_title: "單一供應商模式（預設）",
      },

      listing: {
        label: "供應商列表",
        true_description: "為供應商啟用清單。供應商可以管理清單項目和公司。",
        false_description: "供應商禁用清單。只有店主可以管理清單項目和公司。",
        requires_listing_active_text:
          "若要讓供應商使用Listing（商品+公司），先在通路→Listing中啟用商店Listing功能。然後返回此處以允許供應商訪問。",
        requires_listing_active_button: "项目 渠道 项目 設置",
      },



    },
    notifications: {
      update_success: "供應商設定已成功更新。",
    },
    add_document_dialog: {
      title: "文件要求",
      type: {
        title: "项目 類型",
        subtitle:
          "此處新增文件請求項。它將出現在供應商的面板中，提示他們上傳所需的文件。",
      },
      guide: {
        title: "项目",
        subtitle:
          "提供簡要指南，幫助供應商了解要上傳哪些文件以及如何正確上傳。",
      },
      code: {
        title: "嵌入 代碼",
        subtitle:
          "貼上供應商必須簽署的文件、表單或合約的嵌入代碼。",
      },
      link: {
        title: "项目 關聯",
        subtitle:
          "提供供應商必須簽署的文件或合約的外部連結。",
      },
      inputs: {
        title: {
          label: "標題",
          placeholder: "輸入文檔請求的標題。",
        },
        guide: {
          label: "项目 (项目)",
          placeholder:
            "（可選）提供簡短的指南或說明，包括合約或其他文件的連結。",
        },
        code: {
          label: "嵌入 代碼",
          placeholder: "將嵌入程式碼貼到此處...",
          message: "可以包含 HTML 程式碼。",
        },
        url: {
          label: "URL",
          message: "在此輸入文件或合約的 URL...",
        },
      },
    },
  },

  /**
   * @see ShopMarketplaceModes
   */
  ShopMarketplaceModes: {
    Collective: {
      title: "集體模式",
      description:
        "在這種模式下，所有訂單都會先發送到您的倉庫，然後從一個中心位置運送給客戶。供應商會將其物品發送到您的倉庫，因此供應商的送貨地址將是您的倉庫地址。",
    },
    Direct: {
      title: "项目 船運 從 项目",
      description:
        "在這種模式下，供應商直接向客戶出貨。供應商訂單的送貨地址將是買家的地址。",
    },
  },
  /**
   * @see VendorDocumentType
   */
  VendorDocumentType: {
    Identification: {
      title: "業主身分證明文件",
      description:
        "上傳政府核發的身份證件以驗證企業主或主要管理人員的身分。",
    },
    Business: {
      title: "商業文件",
      description:
        "提供必要的商業文件，例如許可證或註冊證書，以確認您企業的合法地位。",
    },
    Address: {
      title: "地址 项目",
      description:
        "提交文件以驗證您的營業地址，例如公用事業帳單、稅務發票或租賃協議。",
    },
    Contract: {
      title: "项目 & 项目",
      description:
        "上傳詳細說明業務關係條款和條件的合約或協議。",
    },
    Copyright: {
      title: "版權文檔",
      description:
        "提供版權登記文件以確認您的智慧財產權。",
    },
    Privacy: {
      title: "隱私權政策文件",
      description:
        "包括您的隱私權政策文件，以證明您對保護使用者和客戶資訊的承諾。",
    },
    Embed: {
      title: "嵌入表格",
      description:
        "填寫嵌入表格以提供所需資訊。",
    },
    Link: {
      title: "项目 關聯",
      description:
        "點擊外部連結提供必要的資訊。",
    },
  },

  /**
   * @see BPageMarketplaceWallets
   */
  marketplace_wallets: {
    title: "项目 錢包",
    subtitle:
      "無需手動添加錢包！供應商錢包是自動創建的。如果您啟用支援拆分付款的付款方式（例如 Stripe Connect），系統將自動將付款指派到連接的供應商的帳戶。如果未啟用此功能，您需要手動向供應商付款，您可以在錢包清單中查看欠他們的金額。",
    filter_vendor: {
      placeholder: "按供應商過濾...",
    },
  },

  /**
   * @see BVendorAccountTransactionsList
   */
  vendor_account_transactions: {
    subtitle:
      "此部分提供所選錢包的所有交易的詳細清單。當客戶成功支付訂單時，就會記錄一筆費用交易。如果訂單被取消或部分退款，相應的退款交易也會記錄在這裡。",
    vendor_bank: "项目 銀行",
    order_fee: "命令 費用",
    order_refund: "命令 项目",
    reverse_fund: "資金逆轉",
    payout: "项目",
  },

  /**
   * @see BPageMarketplacePayouts
   */
  marketplace_payouts: {
    title: "项目 歷史",
    subtitle:
      "此功能透過保留所有交易的詳細記錄來簡化您和您的供應商的會計工作。付款可以透過銀行轉帳或其他方式手動處理，也可以由支援分期付款的支付提供者（例如 Stripe）自動管理。",
    top_up_vendor_action: "儲值供應商帳戶",
  },

  /**
   * @see BPageMarketplacePricings
   */
  marketplace_pricings: {
    title: "價錢 計劃",
    subtitle:
      "為您的市場設定定價模型，例如數位產品 5% 的保證金費用。這使得定價管理更快、更有效率。",
    add_pricing_action: "项目 價錢 計劃",
  },

  /**
   * @see BVendorPricingAdd
   */
  vendor_pricing_add: {
    title: "市場 價錢 项目",
    subtitle:
      "當您為供應商產品指派定價模型時，價格將自動計算為供應商價格 * (1 + 佣金%)。",
    delete: {
      subtitle:
        "刪除定價模型將影響與其關聯的所有供應商產品。在刪除定價模型之前，請確保更新使用該定價模型的所有供應商產品並為它們分配不同的定價模型。",
      remove_pricing_action: "消除 價錢 项目",
    },
    inputs: {
      title: {
        placeholder: "项目.项目., 项目 產品 项目...",
      },
      description: {
        placeholder: "您可以在此處新增註釋...",
      },
      accept_delete: {
        true_description: "我想刪除這個定價模型。",
        true_title: "確認定價模型刪除",
      },
    },
  },

  /**
   * @see BVendorPayoutAdd
   */
  vendor_payout_add: {
    vendor: {
      title: "项目",
      subtitle:
        "選擇您想要轉帳的供應商。選擇後，將顯示可用的付款選項。如果您啟用了支援付款的支付網關，這些選項也會出現在此。",
    },
    vendor_wallet: "项目 錢包",
    vendor_bank_account: "项目 銀行 帳戶",
    with_balance_tooltip:
      "當您連接 Stripe Connect 等付款服務時，我們會擷取並顯示您 Stripe 帳戶中的可用餘額以供參考。",
    with_balance: "项目 平衡",
    without_balance: "無平衡 - 快速模式",
    bank_transfer: {
      title: "銀行 轉移",
      subtitle:
        "這是付款記錄。系統不會將實際資金轉移給供應商；您必須手動向供應商付款。",
    },
    vendor_bank: "项目 銀行",
    gateway_in_debug_mode_warning:
      "由於支付網關目前處於調試模式，資金不會轉入真實帳戶。",
    payment: {
      title: "支付",
      subtitle:
        "選擇貨幣並輸入您要轉帳給供應商的金額。如果您輸入負數，資金將從供應商的錢包中提取。對於具有付款選項的關聯帳戶，資金將從關聯帳戶中扣除，例如供應商的 Stripe 帳戶。",
    },
    history: {
      title: "歷史",
      subtitle:
        "部分付款已透過沖銷轉帳退還，這表示餘額已從供應商的帳戶中扣除並退還到您的帳戶。",
    },
    refund: {
      title: "项目",
      subtitle:
        "退款金額將從供應商的餘額中扣除。供應商帳戶（如 Stripe Connect）中的所有付款（或剩餘金額）將透過沖銷轉帳退還。",
    },
    inputs: {
      vendor: {
        placeholder: "選擇供應商...",
      },
      note: {
        placeholder:
          "您可以在此處新增註釋...此註釋對供應商不可見。",
      },
      accept_refund: {
        true_description: "我想取消這筆款項。",
        true_title: "取消 & 项目 支付",
      },
    },
    notifications: {
      reverse_fund_success: {
        title: "基金逆轉",
        message:
          "賣家的資金轉回已成功完成，資金從銀行轉入錢包並添加到錢包餘額中。",
      },
      payout_success: {
        title: "项目",
        message:
          "供應商的付款已成功處理並新增。",
      },
    },
  },

  /**
   * @see BShopQuotaImporter
   */
  quota_importer: {
    quota: "项目",
    max_batch_msg: "單批次可以匯入的最大項目數。",
    max_daily_limit_msg: "一天可以匯入的最大物品數量。",
    extra_daily_limit_msg: "允許超出每日限額的額外物品。",
    add_items_today_msg: "項目 项目 今天.",
    file_statistic_msg: "該文件的統計資訊。",
    used_quota: "用過的 项目",
  },

  /** {@see BPageShopMarketingCampaign**/
  campaigns: {
    title: "活動",
    subtitle:
      "創建活動、可跟踪鏈接，並在一處查看可靠且準確的信息。我們幫助您做出更好的數據驅動決策。",
    add_action: "添加新廣告系列",
    empty_message: "立即創建您的第一個廣告系列！",
    delete: {
      title: "刪除廣告系列",
      message: "您確定要刪除此廣告系列和所有數據嗎？",
      action: "是的，立即刪除",
    },
  },

  landing_categories: {
    raw: "原始模板",
    all: "所有模板",

    marketing: "營銷與廣告",
    product: "產品介紹",
    health: "健康與健身",
    food: "食品和水果",
    house: "房地產和房屋",
    device: "機器和設備",
    car: "車",
    software: "軟件",
    clothing: "服裝鞋履",
    jewellery: "珠寶",
  },

  /** {@see BPageShopSettingTheme**/
  shop_theme: {
    theme_colors: "主題顏色",
    theme_colors_description:
      "您可以在此處個性化商店的主要調色板。每個模板都可以利用這些顏色自動產生與您的品牌相符的完整顏色範圍。",
    products_view_mode: "購物清單視圖",
    products_view_mode_desc:
      "您可以根據屏幕大小調整商店中產品的顯示方式。默認情況下會考慮此模式，如果用戶更改顯示模式，則不會應用此模式。",

    tabs: {
      vendor_page: "供應商頁面",
    },

    color_light: "原色",
    color_dark: "原色深色",
    color_deep_dark: "深沉的顏色",
    color_info: "鏈接",
    light_checkout: "結帳主題",
    light_header: "標題主題",
    light_footer: "頁腳主題",
    light_filter: "類別篩選主題",
    checkout_color: "查看 顏色",

    typography: "排版",
    header: "標題",
    footer: "项目",
    custom_code: "自定義代碼",
    custom_css: "自定義 CSS",
    custom_variants: "變體",

    wrap_product_title: {
      title: "项目 標題",
      subtitle: "標題的高度會動態調整。",
    },

    animation: {
      title: "项目",
      static: {
        false_title: "帶動畫",
        false_description:
          "類別和產品有互動式動畫來顯示功能。",
        true_title: "靜止的",
        true_description: "類別 项目 產品 项目 不 项目.",
      },
    },

    quick_actions: {
      title: "项目 行動",
      hover: {
        false_description:
          "簡單和最小的模式，無需在產品卡上進行任何額外操作。",
        true_description:
          "在懸停的產品卡上顯示“快速購買”和“添加以比較”按鈕。",
        true_title: "懸停時顯示操作",
      },
    },
    filter_products: {
      title: "篩選 產品",
      only_available: {
        false_description: "預設顯示商店清單中的所有產品。",
        true_description:
          "預設僅顯示商店清單中的可用產品。",
        true_title: "可用的 產品",
        false_title: "全部 產品",
      },
    },
    filter_categories: {
      title: "篩選 類別",
      hide_empty_folders: {
        false_description: "顯示商店清單中的所有類別。",
        false_title: "项目 全部 類別",
        true_title: "隱藏空白類別",
        true_description:
          "僅顯示商店清單中包含產品的類別。",
      },
    },

    product_page: {
      title: "產品 项目",
      subtitle:
        "在此個性化您的產品頁面。您可以調整價格的顯示並修改部分的排列以滿足您的喜好。",
      buy_button_color: "買 项目 顏色",
      smart_price: {
        title: "项目 單元 價格",
        true_description:
          "透過考慮重量、體積和包裝變體屬性來計算單價。前任。如果您有 2L 尺寸且價格為 $5 的變體，則客戶會在產品頁面上看到 $2.5/L。",
      },
      reverse_currency: {
        title: "貨幣 项目 位置",
        false_title: "正常模式",
        true_title: "反轉模式",
        false_description:
          "貨幣符號將放置在數字的開頭。例如： $95 ， €30",
        true_description:
          "貨幣符號將放置在數字末尾。例如： 95$ , 30€",
      },
      variants_selector: {
        title: "變體 项目",
        subtitle:
          "您可以選擇不同的方式在產品頁面上顯示變體。",
      },

      tabs_order: {
        title: "项目 命令",
        reset_to_default: "项目 至 默認",
      },
    }, // end: product_page
  },

  /**
   * @see BShopThemeVendor
   */
  b_shop_theme_vendor: {
    onboarding: {
      title: "项目 & 登錄",
      subtitle:
        "使用自訂影片、圖像或訊息個人化供應商入職和登入體驗。",
    },
    inputs: {
      page_vendor_login: {
        label: "项目 登錄 项目",
        message:
          "選擇供應商登入的自訂登入頁面。包含影片、圖像或文字以實現獨特的設計。此頁面顯示給未登入的供應商。",
      },
      page_vendor_registered: {
        label: "项目 掛號的 项目",
        message:
          "為已登入的供應商選擇自訂頁面。如果您的市場支援每個使用者多個供應商，則會顯示此頁面。",
      },
    },
  },

  /** @see BShopOptionsVariants **/
  b_shop_options_variants: {
    custom_variants: {
      title: "風俗 變體",
      subtitle:
        "實體產品可以有變體。您可以更改變體的預設名稱。我們的建議是將這些項目保留為預設值並保留為空，以便 selldone 會自動為您的客戶將其翻譯成他們的語言。最大長度為 24。",
    },
  },
  /** @see BShopThemeTypography **/
  b_shop_theme_typography: {
    main_font: {
      title: "项目 網站 项目",
      subtitle: "從 Google Fonts 中選擇您最喜歡的字體。",
    },
    inputs: {
      font_family: {
        label: "字體家族",
        message: "輸入字體系列值。",
      },
      font_res: {
        label: "字體資源",
        message: "指定字體資源。",
      },
    },
  },

  /** @see BShopThemeHeader **/
  b_shop_theme_header: {
    logo: {
      title: "標題 標識",
      subtitle:
        "預設情況下，您商店的徽標顯示在標題中，但您可以上傳自訂徽標。如果您的標誌沒有方形縱橫比，您可能需要手動調整高度和寬度以獲得最佳呈現效果。",
    },
    header_title: {
      title: "標題 標題",
      subtitle:
        "您可以在此處個性化顯示在頁面標題中的標題。如果您想完全刪除它，請點擊“設定空標題”按鈕。",
    },

    inputs: {
      logo: {
        label: "牌 標識",
      },
      height: {
        label: "標識 高度",
      },
      width: {
        label: "標識 寬度",
      },
      title: {
        label: "標題 標題",
        set_empty: "設定空標題",
      },
    },
  },

  /** @see ShopThemeVariantsMode**/
  shop_theme_variants_mode: {
    smart: {
      title: "智慧模式",
      description:
        "可選擇單獨選項的緊湊型變體，適用於大多數情況。",
    },
    select: {
      title: "選擇模式",
      description:
        "在下拉清單中顯示所有變體，非常適合大量變體。",
    },
  },

  /** @see BPropertySetAdd**/
  property_set_add: {
    edit_title: "編輯屬性集",
    add_title: "新增屬性集",
    config: {
      subtitle:
        "設定屬性集的標題和描述。僅工作人員可見。",
    },
    variants: {
      title: "變體",
      subtitle:
        "您可以在此處自訂變體名稱、圖示和順序。如果您有多種產品，其獨特的變體不適合預設的 6 個變體，您可以在此處為每個產品設定自訂變體。",
    },

    inputs: {
      title: {
        placeholder: "輸入屬性集的標題...",
      },
      description: {
        placeholder: "輸入簡短描述...（選購）",
      },
      custom_variants: {
        true_title: "風俗 變體",
        false_title: "默認 變體",
        true_description: "客製化您的產品變體。",
        false_description: "项目 默認 项目 變體.",
      },
    },
  },

  /** @see BPropertySetVariantRow **/
  property_set_variant_row: {
    inputs: {
      values: {
        placeholder: "設定值設定...（可選）",
        messages:
          "您可以提供值建議並自訂順序。",
      },
    },
  },

  /** {@see AppTemplates**/
  app_templates: {
    default: "默認",
    blue: "藍色的海洋",
    amber: "琥珀色",
    green: "赤道",
    red: "吸血鬼",
    magenta: "花",
    master: "掌握",
    black: "陰暗面",
  },

  /** {@see BPageAffiliateOrders**/
  affiliate_orders: {
    title: "附屬合作夥伴訂單",
    table: {
      order_price: "訂單金額",
      order_payment: "訂單付款狀態",
      order_link: "訂購鏈接",
      commission_status: "佣金狀況",
      commission_amount: "佣金金額",
      items: "項目",
      actions: "行動",
      create_date: "創建日期",
    },
    notifications: {
      update_success: "會員狀態已更新。",
    },
  },

  /** {@see BPageAffiliatePayments**/
  affiliate_payments: {
    title: "附屬合作夥伴付款",
    table: {
      staff: "職員",
      amount: "數量",
      note: "筆記",
      date: "日期",
    },
  },
  /** {@see BPageShuttleRoles**/
  my_roles: {
    title: "我的角色",
    message:
      "角色是授予商店員工的訪問權限類型。例如，負責發送或包裝訂單的工作人員。",
  },
  /** {@see WidgetMyRoleCard**/
  role_card: {
    complete_tasks: "已完成的任務",
    reject_tasks: "被拒絕的任務",
    last_check: "最近的檢查",
  },

  /** {@see BAppConfigDialog**/
  app_config: {
    reviews: "評論",
    rate_now: "現在就評價吧",
    category: "類別",
    uninstall: "卸載",
    get_app: "獲取應用",
    public_keys: "公鑰",
    private_keys: "私鑰（安全）",
    config: "應用配置",
    app_status: "申請狀態",
    app_info: "申請信息",
    update_at: "最近更新",
    visit_website: "訪問網站",
    privacy: "隱私政策",
    installs: "安裝",
    basic_profile_permission: "基本資料信息",
    developer: "開發商",
    permissions: "權限",
    total_comments: "總評論",
    delete_dialog: {
      title: "卸載應用",
      message: "你想從你的商店中刪除這個應用程序嗎？",
      action: "是的，刪除應用",
    },
    notifications: {
      uninstall_success: "應用程序卸載成功。",
    },
  },

  /** {@see BPageShopChannelBots**/
  shop_bots: {
    not_set: "沒有設置！",
    tokens: "代幣",
    webhook: "網絡鉤子",
    calls: "來電",
    dialog: {
      title: "{name} 機器人配置",
      message:
        "用於構建企業級購物體驗的綜合機器人框架。",
    },
  },

  /** {@see BPageShopCrmCustomers**/
  shop_customers: {
    title: "客戶管理",
    subtitle:
      "可以透過多種方式將客戶新增至您的商店；手動、批次 Excel 匯入、透過 POS 或透過您的線上商店。每當用戶登入您的商店時，他們都會自動註冊為客戶。",
    add_customer_action: "项目 新的 项目",

    all_customers: "下載所有客戶",
    filtered_customers: "過濾的客戶",
    dialog_chips: {
      title: "設置客戶籌碼數量",
    },
    dialog_club: {
      title: "設置客戶俱樂部級別",
    },
  },

  /** {@see BCustomerAdd**/
  customer_add: {
    edit_title: "編輯 项目",
    add_title: "项目 新的 项目",
    subtitle:
      "若要將客戶新增至您的商店，請提供電子郵件地址或電話號碼。",
    more: {
      title: "添加更多詳細信息",
      subtitle: "项目 貨幣, 项目 俱樂部, 細分市場, 地址 项目 更多的.",
    },
    detail: {
      subtitle:
        "記錄有關您客戶的個人資訊。請尊重您客戶的隱私。",
    },
    preferences: {
      subtitle: "项目 默認 用戶 貨幣, 项目 俱樂部, 项目 細分市場 项目.",
    },
    address: {
      subtitle:
        "該位址可在 POS 中使用。用戶看不到此資訊。",
    },
  },

  /** {@see AppPageDashboard**/
  app_dashboard: {
    status: "發布狀態",
    statistics: "統計數據",
  },
  /** {@see AppPage_Publish**/
  app_publish: {
    production_version: "生產版",
    beta_version: "測試版",
    alpha_version: "阿爾法版本",
  },
  /** {@see AppPublishWidget**/
  app_publish_widget: {
    header: "商店網站標題",
    header_code: "標頭代碼",
    admin_page: "管理頁面",
    name: "姓名",
    icon: "圖標",
    url: "網址",
  },

  /** {@see AppPage_API**/
  app_api: {
    title: "API 訪問",
    revoke_api: "撤銷 API",
    api_key: "API 密鑰",
    secret: "密鑰",
    client: "客戶",
    redirect_url: "重定向網址",
    client_name: "客戶名稱",
  },

  /** {@see BPageApplication**/
  app_loader_page: {
    no_ui_title: "此應用程序沒有任何用戶界面！",
    no_ui_desc:
      "某些應用程序在其管理區域中不需要用戶界面。此應用程序只能將代碼添加到您商店網站的標題部分。",
    header: "標頭代碼",
  },
  /** {@see BPageShopFinanceReport**/
  finance_report: {
    export_title: "導出財務數據",
    export_sub_title:
      "取得包含財務資訊的單一文件。這包括在線和店內訂單的詳細信息，以及您選擇的時間段內的產品銷售數據。",
    start_input_placeholder: "選擇報告開始日期",
    end_input_placeholder: "選擇報告的結束日期",
    download_action: "下載財務清單",
  },

  /** {@see BPageShopSettingNotifications**/
  shop_notifications: {
    title: "商店通知",
    message: "編輯您的商店通知設置和首選項",
    channel: "渠道",
    status: "地位",
    events: "活動",
    info: "信息",
    actions: "行動",
    connected: "連接的",
    not_connected: "未連接！",
    connect_now: "立即連接",
    send_test: "發送測試數據",
    disconnect: "斷開",

    dialog: {
      title: "機器人配置",
      message:
        "用於構建企業級電子商務體驗的綜合通知框架。",
      action: "點擊這裡！",
      set_config: "設置配置",
    },
  },
  notification_events: {
    new_order: "🛍️ 訂購",
    payment: "💳 付款",
    return: "📦 返回",
    weekly_report: "📈 每週報告",
  },

  /** {@see BOrderDashboardDelivery} **/
  order_delivery: {
    title: "送貨",
    add_to_delivery_que_action: "添加到發貨隊列",
    in_que: "在運送隊列中",
    message:
      "將包裹交給快遞員後，單擊“<b>確認交貨</b>”按鈕。",
    message_add_to_service:
      "如果您想通過<b>送貨服務</b>發送此包裹，請單擊以下按鈕。",
    courier_action: "送貨 项目",
    courier_action_subtitle: "我的快遞員會來取包裹。",

    pickup_ready_action: "準備取貨",
    pickup_ready_action_subtitle: "訂單已準備好供顧客提貨。",

    service_action: "執行確認",

    checklist: [
      "檢查快遞員的身份證。",
      "良好的產品包裝和及時的交貨可以提高客戶的保留率。",
    ],
    manual: {
      title: "等待客戶確認收貨。",
      action_received: "買家確認",
      action_returned: "交貨退貨",

      message:
        "注意：如果客戶收到訂單，您可以使用以下選項來完成履行。系統中的部分配送服務會自動確認配送。",
    },
    auto_complete_note:
      "一段時間後，訂單狀態將更改為已發貨。此期限因訂單類型而異，由系統確定。",
    received: {
      title: "交付給客戶。",
      delivered_date: "交貨日期",
    },
    receiver: "接收者",
    bill: "收據",

    tracking: {
      title: "添加跟踪代碼/網址",
      code: "跟踪代碼",
      url: "跟踪網址",
      message:
        "如果您通過提供此訂單跟踪代碼的服務發貨，您可以在此部分輸入代碼和相關跟踪鏈接。此信息將顯示給客戶。",
    },
    preferred_delivery_time: "首選交貨時間",
    manage_couriers: "管理我的快遞員",
    manage_service: "管理服務",

    option_deliver_by_courier: "選項 1：由您的快遞員送貨。",
    option_add_to_que:
      "選項 2：添加到隊列以在運輸服務頁面上處理。",
    option_instant_shipping: "選項 3：即時發貨。",

    verify_delivery_input: {
      true_title: "项目 送貨 项目",
      true_description:
        "我確認訂單已交付給客戶。",
    },
  },

  /** {@see BShopHomeSelect} **/
  shop_home_edit: {
    title: "主頁設置",
    sub_title:
      "在此部分中設定您網站的預設頁面。您也可以透過網域設定靈活地為每個網域單獨指定自訂主頁。",

    default_home: "默認主頁",
    default_home_placeholder: "店鋪頁面是網站首頁",
  },
  /**
   * @see OReferralBank
   */
  referral_bank: {
    title: "项目 儀表板",
    subtitle:
      "根據您的要求，佣金將支付至您指定的銀行帳戶。請在此提供您的銀行資訊。",
    no_bank_info: "不 銀行 信息!",
    actions: {
      edit_my_bank_info: "編輯 项目 銀行 信息",
    },
    bank_dialog: {
      title: "项目 銀行 細節",
      info: {
        title: "銀行",
        subtitle:
          "請在此輸入您的銀行資訊。我們將使用這些資訊來轉移資金。確保銀行帳戶位於您的名下或您的公司名下（如果適用）。",
      },
      inputs: {
        name: {
          label: "銀行 姓名",
          message: "持有帳戶的銀行的全名。",
        },
        holder_name: {
          label: "帳戶 项目 姓名",
          message:
            "持有帳戶的個人或實體的全名。",
        },
        account_number: {
          label: "帳號",
          message:
            "與特定銀行帳戶關聯的唯一號碼。",
        },
        routing_number: {
          label: "路由號碼（美國）或排序代碼（英國）",
          message:
            "標識特定銀行分行的號碼（不同國家使用不同的術語）。",
        },
        swift: {
          label: "SWIFT/BIC 代碼",
          message:
            "用於識別全球銀行的國際代碼，尤其是國際轉帳。",
        },
        iban: {
          label: "IBAN (项目 銀行 帳戶 项目)",
          message:
            "IBAN 主要在歐洲使用，是國際公認的跨境銀行帳戶識別系統。",
        },
        contact: {
          label: "聯繫信息",
          message: "與帳戶關聯的電話號碼或電子郵件地址。",
        },
        note: {
          label: "筆記",
          message: "项目 筆記",
        },
      },
    },
    notifications: {
      save: {
        message: "您的銀行資訊已成功更新。",
      },
    },
  },

  /**
   * @see OReferralTier
   */
  referral_tier: {
    message:
      "來自您的推薦人支付的所有服務費、訂閱費和其他費用。",
  },

  /**
   * @see ReferralTiers
   */
  ReferralTiers: {
    Bronze: {
      title: "青銅級",
      description:
        "您處於青銅級。您從推薦中獲得了 2% 的佣金。",
    },
    Silver: {
      title: "銀級",
      description:
        "您處於白銀級別。您從推薦中獲得了 4% 的佣金。",
    },
    Gold: {
      title: "黃金級",
      description:
        "您處於黃金級別。您從推薦中獲得了 6% 的佣金。",
    },
    Platinum: {
      title: "白金級",
      description:
        "您處於白金級別。您從推薦中獲得了 8% 的佣金。",
    },
    Diamond: {
      title: "鑽石級",
      description:
        "您處於鑽石等級。您從推薦中獲得了 10% 的佣金。",
    },
  },

  /**
   * @see OPageMonetize
   */
  page_monetize: {
    title: "貨幣化",
    subtitle: "傳播商業機會。",
  },

  /** {@see OPageMonetizeReferral} **/
  selldone_referral_page: {
    referral_link: "推薦鏈接",
    registered: "掛號的",
    accepted: "公認",
    bank: "銀行",
    bank_title: "取款銀行信息",
    new_users: "新用戶",
    performance: "表現",
    credit_mode: "信用模式",
    get_stickers: "取得貼紙 Html 代碼以複製和貼上",
    click_copy_sticker_code: "按一下徽章複製 html 程式碼。",
  },
  /** {@see OReferralTransactions} **/
  selldone_referral_payment: {
    title: "推薦付款",
    subtitle:
      "這是提款交易清單。當您將資金從推薦錢包轉入您的銀行帳戶或 Selldone 錢包時，將會在此列出。",

    officer: "官",
    amount: "金額交易",
    note: "筆記",
    date: "日期",
  },

  /** {@see BGatewayCard} **/
  widget_shop_gateway: {
    link_account_caution:
      "將帳戶 ({currency}) 鏈接到您的商店！點擊這裡..",
  },

  /** {@see BProductOrderSalesPerformance} **/
  product_sell_widget: {
    title: "產品銷售業績",
  },

  /** {@see BOrderDashboardDropshippingFulfillment} **/
  fulfilment_order_widget: {
    title: "代發貨履行",
    check_action: "接受直銷",
    uncheck_action: "訂單已確認",
    pay_action: "支付項目成本..",
    pay_completed: "付款確認",
    list_of_items: "轉售物品",

    checklist: [
      "將您間接銷售的產品金額支付給原始賣家。",
      "您可以在店舖的核算>Dropshipping中一起向供應商支付和結算產品成本。",
      "付款後，供應商將收到您的訂單並準備好後直接發送給買家。",
    ],
    message:
      "向供應商支付訂單費用後，請參閱本節發送訂單的進度。",
  },

  /** {@see BPageWholesaler} **/
  drop_shipping: {
    menu: {
      dashboard: "儀表板",
      orders: "訂單",
      inventory: "存貨",
      shops: "經銷商",
      requests: "要求",
    },
    drop_shipping_charge: "托運費用",
  },

  /** {@see DropshipRequestStatus} **/
  dropship_request_status: {
    PENDING: "待辦的",
    ACCEPT: "接受",
    REJECT: "拒絕",
  },

  /** {@see BPageWholesalerShop} **/
  dropshipping_reseller_page: {
    menu: {
      dashboard: "儀表板",
      orders: "訂單",
      wallet: "錢包",
    },
  },

  /** {@see BPageWholesalerShopDashboard} **/
  dropshipping_reseller_dashboard: {
    title: "經銷商儀表板",
  },

  /** {@see BPageWholesalerShopOrders} **/
  dropshipping_reseller_orders: {
    title: "經銷商訂單",
  },

  /** {@see BPageWholesalerShopWallet} **/
  dropshipping_reseller_wallet: {
    title: "經銷商錢包",
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "付款確認",
      payment_success: "付款完成。",
      buy_title: "買",
      pay_by_giftcards: "您的訂單是使用禮品卡支付的。",
      free_order: "您的訂單是免費的。",
      pay_by_cod: "您的訂單已註冊為貨到付款。",
      pay_by_dir:
        "您的訂單已註冊為直接付款，請在您的訂單頁面完成付款並上傳收據。",

      pay_title: "支付",
      qr_code_payment: "付款二維碼已創建。",
      connecting_to_online_gateway: "連接到在線支付網關。",
    },
  },

  /** @see DropShippingAccountCharges **/
  dropship_charges: {
    notifications: {
      pay_confirm_message: "付款已確認。<br>日期：{payment_at}",
      pay_fail_title: "沒有支付",
      pay_fail_message: "付款無法驗證！",
    },
  },

  /** @see BPageShopFinanceResellerFulfillment **/
  dropship_checkout: {
    pay_dialog: {
      title: "經銷商訂單付款",
      balance: "您的賬戶餘額",
      total_cost: "總訂單成本",
      need_charge: "需要充電",
      no_account_cation: "你沒有賬號！致電批發商。",
      orders: "訂單",
    },
    notifications: {
      success_pay:
        "您對這些訂單的付款已確認並成功完成。",
    },
  },
  /** @see BPageShopFinanceResellerWallets **/
  dropship_accounts: {
    charge_account: "付費賬號",
    charge_dialog: {
      title: "收取直銷帳戶",
      amount_input: "賬戶費用",
      charge_now: "立即充電",
    },
  },

  /** @see BPageWholesalerDashboard **/
  dropship_admin_dashboard: {
    title: "經銷商請求",
    today_order_count: "今天的訂單數",
    yesterday_order_count: "昨天的訂單數",
    total_7_days: "過去 7 天的訂單總數",
  },

  /** @see BProductAddDropshipping **/
  dropshipping_products: {
    no_shops:
      "抱歉，沒有找到店鋪。將來會有更多的商店，所以你可以把他們的產品放在你的商店裡。",
    show_all_shops: "顯示所有商店",
    show_eligible_shops_message: "顯示符合條件的商店",
    show_all_message: "你可以看到所有的商店",
    current_shop: "當前店鋪",
    request_account: "申請帳號",
    request_accepted: "已接受請求",
    request_rejected: "請求被拒絕",
    request_pending: "請求待定..",
    notifications: {
      add_product: "產品添加到您的商店。",
      request_access:
        "我們已成功將您的訪問請求發送給批發商。",
    },
  },

  /** @see BProductDropshippingAbstractView **/
  product_dropshipping: {
    need_re_enable:
      "此產品已被原賣家更改，這些價格更改已禁用您商店中的產品。檢查更改，如果您同意重新激活產品，請按下面的按鈕。",
    need_re_enable_action: "同意，應用更改和激活",
    changed_value:
      "此產品已由原賣家編輯。檢查更改，如果您同意將更改應用於您的產品，請單擊下面的按鈕。",
    changed_value_action: "同意，修改",
    parent_deleted: "此商品已被原賣家移除。",
    parent_closed:
      "該產品已被原賣家禁用！您將無法在您的商店中銷售該產品，但如果原始賣家重新激活該產品，您將能夠在您的商店中重新激活該產品。",
    notifications: {
      re_enable_success: "該產品已重新激活。",
      update_success:
        "此產品信息已使用原始產品信息進行了更新。",
    },
  },

  /** @see BPageProductDropshipping **/
  product_dropshipping_admin: {
    title: "代發貨",
    save_alert:
      "此產品的直銷設置已更改。是否要保存更改？",
    reselling_message:
      "通過激活此選項，其他賣家將能夠將您的產品添加到他們的商店。",
    reselling: "啟用直銷",
    price_merchants: "商家價格",
    price_commission: "商家佣金（固定）",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "等待可用性",
    inform_me_when_available: "有貨時通知我！",
    pay_buy: "支付和購買",
    quantity: "數數",
    quantity_in_basket: "購物車中的物品",
    count_unit: "X",
    remove: "消除",
    add_to_basket: "添加到購物車",
    book_now: "現在預訂",
    reserve_now: "立即預訂",
    buy_now: "立即購買",

    buy: "買",
    notifications: {
      inform_add_success: "我們會在有貨時通知您。",
      inform_remove_success: "您已從等候名單中刪除。",
    },
  },
  /** @see SProductOverview **/
  product_info: {
    fake: "偽造的",
    action: "拍賣",
    compare_limit: "10 件限制",
    compare_add: "加入對比",
    compare_be_in_list: "在比較列表中",

    type: "類型",
    brand: "牌",
    category: "類別",
    discount: "折扣",
    track_price: "追踪價格",
    waiting_for_auction: "等待拍賣？",
    inform_auction: "拍賣時通知我",
    return_in_days: "{days} 天保修退貨",
    support24h7: "支持7天24小時",
    support_normal: "工作時間支持",
    original_guarantee: "原始保證",
    cod_payment: "貨到付款支持",

    pros: "優點",
    cons: "缺點",

    external_link: "閱讀更多",
    notifications: {
      congratulation: "恭喜",
      waiting_list_add_success:
        "當該產品被拍賣時，我們會通知您。",
      waiting_list_delete_success: "您已退出拍賣等候名單。",
    },

    offer_message: "購買 {min_quantity} 這些商品可享受 {percent}% 折扣",
    up_to: "每個訂單最多 {per_order}x",
    get_free: "免費",
    get_off: "獲得 {percent}% 折扣",
  },

  /** @see SStyler **/
  styler: {
    size_class: "尺寸和等級",
    delete_bg: "刪除背景圖片",
    bg_color: "背景顏色",
    section_style: "設置截面樣式",
    link: "設置鏈接",
    show_products: "產品/分類列表管理",
    show_product: "選擇產品",
    delete_section: "刪除部分",
    text_color: "文字顏色",
    tex_align: "文本對齊",
    text_style: "文字樣式",
    bg_image: "背景圖片",

    product: {
      title: "選擇產品",
    },

    /** @see SPageProductsFilter **/
    products: {
      title: "產品和類別列表管理",
      sort_options: "選擇排序和查看設置。",
      item_types: "僅顯示產品/類別。",
      product_only: "僅限產品",
      category_only: "僅限類別",
      no_category: "您的商店中沒有類別。",
      limit: "產品限制",
      limit_message: "輸入產品結果計數。",
      select_categories: "選擇可用的類別。",
      categories_limit: "類別限制",
      categories_limit_msg:
        "輸入最大類別數。將零設置為無限制。",
    },
  },

  /** @see BPageShopCrmChat **/
  shop_contacts: {
    popup: "啟用彈出支持",
    popup_message:
      "通過激活此選項，支持鍵將顯示在商店的右下角。",
  },

  /** @see BPagePopup **/
  popup_page: {
    preview: "查看實時彈出窗口",

    menu: {
      design: "設計",
      appearance: "外貌",
      filter: "篩選",
      setting: "環境",
    },
    notifications: {
      save: "彈出窗口已成功保存。",
      edit: "彈窗更新成功。",
    },
  },
  /** @see LMenuLeftPopupAppearance **/
  popup_appearance: {
    position: "位置",
    position_desc:
      "指定此通知在頁面上的顯示位置。",
    width: "寬度",
    width_desc: "您可以設置最大頁面寬度。",
    height: "高度",
    height_desc: "您可以設置最大頁面高度。",
    radius: "拐角半徑",
    radius_desc:
      "在本節中，您可以設置通知角的曲率半徑。",
    shadow: "陰影",
    shadow_desc: "你想讓彈出窗口有陰影嗎？",
    delay: "顯示延遲",
    delay_desc:
      "一旦用戶進入您的商店，經過這段時間後，將向用戶顯示通知。",
    hide: "隱藏延遲",
    hide_desc:
      "您可以設置通知在演出後幾秒鐘自動關閉。值 0 表示通知不會自動關閉。",
    transition: "彈出動畫",
  },

  /** @see BPagePopupFilter **/
  popup_filter: {
    registered: "會員資格和登錄要求",
    registered_desc:
      "您可以選擇僅向商店用戶或訪客顯示此通知。",
    only_guests: "只有客人",
    only_users: "僅登錄用戶",
    purchased: "購買歷史",
    purchased_desc:
      "您可以選擇僅向已購買或尚未購買的用戶顯示此通知。",
    no_purchase: "還沒有購買",
    yes_purchase: "之前購買",
    sex: "性別",
    sex_desc:
      "您是否希望僅向特定性別的用戶顯示此通知？",
    age: "最低年齡",
    age_desc:
      "如果輸入任何大於 6 的值，則用戶必須登錄並且必須輸入他的出生日期。",
    levels: "客戶俱樂部級別",
    levels_desc:
      "如果用戶具有以下選定級別之一，則會向他顯示此通知。",
    countries: "位置限制",
    countries_desc:
      "您是否希望僅向來自特定國家/地區的用戶顯示此通知？",
  },

  /** @see BPagePopupSetting **/
  popup_setting: {
    published: "發布狀態",
    repeat: "重複",
    repeat_msg:
      "您是否希望多次向用戶顯示此通知？",
    intervals: "彈出顯示的持續時間",
    intervals_msg:
      "必須經過向用戶顯示通知之間的最短時間間隔。",
    designer_zone: "設計師專區",
    title: "彈出標題",
    note: "設計師筆記",
    image: "封面圖片",
    delete: {
      title: "刪除",
      sub_title:
        "刪除彈出窗口後，將無法返回。請確定。",
      action: "刪除此彈出窗口",
    },
    notifications: {
      delete: "彈出窗口已刪除。",
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
      templates: "项目",
      provider: "项目",
    },

    manage: {
      title: "项目 SMS",
      subtitle:
        "您可以在此處查看您的商店發送的簡訊內容。由於在訊息服務中註冊驗證模式的限制，目前無法對文字訊息進行個人化設定。",
    },

    template: {
      title: "项目",
      valid_message: "您可以建立自訂簡訊。",
      provider_not_enable_message: "簡訊服務提供者未啟用！",
      need_custom_provider_message:
        "只有當您設定自訂提供者時，自訂 SMS 訊息才有效。",
      add_new: "项目 新的",
      disable_reason: {
        set_provider: "首先設定您的提供者！",
        provider_is_disabled: "提供者已禁用！",
        otp: "OTP - 不可自訂！",
        select_another_provider: "選擇另一個提供者。",
      },
      enable_only_filter: "僅顯示啟用的",

      text_template_not_supported_msg:
        "您的提供者不支援純文字訊息。",
      structure_template_not_supported_msg:
        "您的提供者不支援結構訊息。",

      structured_data: "项目 數據",

      menu: {
        reset_error: "重置錯誤",
        send_test: "發送 项目 信息",
      },
    },
    template_edit: {
      title_add: "项目 新的 信息 模板",
      title_edit: "編輯 信息 模板",
      config: {
        title: "信息 配置",
        subtitle:
          "您可以在 SMS 提供者的網站上建立 SMS 訊息模板，然後在此處指定其程式碼和資料結構。我們會將此資訊轉發給您的提供者，在那裡將產生實際的 SMS 訊息。",
        code: "代碼",
        language_msg: "將其留空以將其設為預設值。",
        enable_msg: "該模板將用於建立訊息。",
      },
      text: {
        title: "純文字",
        subtitle:
          "在此輸入個人化簡訊。動態值在發送給使用者之前將被替換為實際值。",
        message: "信息",
        reset_to_default: "项目 至 默認",

        auto_fill: {
          title: "自動填充參數",
          subtitle:
            "您可以在文字中使用這些參數，Selldone 會將它們替換為相應的值。",
        },

        sample: {
          title: "项目 信息",
        },
      },
      template: {
        title: "项目 模板",
        subtitle:
          "您可以在此處設定模板鍵和值。範本代碼應該與您在簡訊服務提供者中設定的內容完全相同，並且 <code>key</code> 是您的提供者希望透過其發送代碼的內容。如果模板的 <code>value</code> 欄位為空，則 <code>{code}</code> 將被視為模板代碼。",
        add_new_parameter: "项目 新的 项目",

        auto_fill: {
          title: "自動填充參數",
          subtitle:
            "您可以將每個參數設定為一個值，Selldone 會將它們替換為對應的值。為了簡單起見，最好將預設值定義為 SMS 提供者中的範本。在這種情況下，無需在此定義參數值。",
        },
        request: {
          title: "範例有效載荷",
        },
        sample: {
          title: "项目 模板 信息",
          subtitle: "您可以將此範本複製並貼上到您的 SMS 提供者。",
        },
        add_message_action: "项目 信息 模板",
      },
    },
  },
  /** @see SmsTemplateMode **/
  sms_template_mode: {
    text: {
      title: "純文字",
      desc: "訊息將從具有自動替換參數的文字建立並發送。",
    },
    template: {
      title: "项目 模板",
      desc: "將從參數建立一個物件並將其發送給提供者。",
    },
  },

  /** @see BShopSmsProvider **/
  shop_sms_provider: {
    title: "風俗 SMS 项目",
    reset_error: "重置錯誤",
    subtitle:
      "設定自訂簡訊服務提供者並自訂您的身份驗證簡訊和公司名稱。預設提供者僅在某些白名單國家/地區發送身份驗證簡訊和通知訊息。",
    plain_text: "純文字",
    structural_template: "项目 模板",
    errors_limit_msg:
      "如果您的服務錯誤超過 100 個，它將自動停用！您可以重置錯誤以重新啟用它。",

    enable_input: {
      false_description:
        "OTP 訊息將透過 Selldone 在選定的國家/地區發送，同時也會發送其他訂單通知簡訊。",
      true_description:
        "SMS 訊息將透過您的服務提供者發送。",
    },
    test_input: {
      true_title: "驗證配置",
      true_description:
        "我們將向您的電話號碼📞 <b>{phone}</b> 發送一條測試訊息，它可以向您收費，但您可以確保一切正常。",
    },
    sync_action: {
      title: "行動",
      subtitle:
        "一些 SMS 服務提供額外的服務，例如活動、行銷和其他功能。您可以同步您的聯絡人或其他訊息，以更快地使用其功能。",
      action: "项目 聯繫人",
    },
    tokens: {
      title: "项目",
      subtitle:
        "設定以下參數以將您的簡訊服務提供者與您的商店關聯起來。",
    },
  },
  sms_messages_options: {
    all: {
      title: "OPT + 命令 通知",
      description:
        "將發送驗證訊息和訂單通知。",
    },
    otp: {
      title: "OTP 项目",
      description: "將發送驗證訊息。",
    },
  },

  /** @see BPageShopSettingEmail **/
  shop_emails: {
    title: "管理電子郵件",
    sub_title:
      "您將在此部分中看到商店發送給客戶和經理的電子郵件列表。電子郵件是根據您為商店輸入的信息自動設計和創建的。此外，未來將向公眾提供個性化消息和圖像的可能性。",

    tabs: {
      preferences: "项目",
      templates: "项目",
      provider: "项目",
    },

    preferences: {
      title: "通知 電子郵件",
    },
  },

  /**
   * @see BShopEmailProvider
   */
  shop_email_provider: {
    title: "自訂郵件伺服器",
    subtitle:
      "連接您的郵件服務提供者以透過您的自訂網域發送電子郵件。",
    provider: "项目",
    enable_input: {
      false_description: "您的電子郵件將透過您的 myselldone 網域發送。",
      true_description: "您的電子郵件將透過您的自訂郵件網域發送。",
    },
    config: {
      title: "项目",
      subtitle:
        "若要為您的商店設定自訂郵件服務，請輸入您的服務 API 金鑰以及其他必要的設定。",
    },
    sender: {
      title: "從",
      subtitle:
        "您可以設定預設寄件者的姓名和電子郵件地址，這些地址將用於向您的客戶發送電子郵件。",
    },

    inputs: {
      from: {
        label: "從 電子郵件",
      },
      from_name: {
        label: "從 姓名",
      },
    },

    actions: {
      send_test_email: "發送測試電子郵件",
    },

    messages: {
      provider_error_limit:
        "如果您的服務錯誤超過 100 個，它將自動停用！您可以重置錯誤以重新啟用它。",

      encryption_ports_guide:
        "電子郵件提供者可能會根據可用連接埠提供 SSL、TLS 或未加密的連線。如果連線導致錯誤，更改加密模式可能會解決問題。標準 <b>TLS</b> 使用連接埠：<b>587</b> 與 <b>SSL</b> 使用連接埠：<b>465</b>。",

      enable_receive_test:
        "儲存變更後，您將在 <b>{email}</b> 上收到一封測試郵件。在使用新配置發送測試電子郵件之前儲存變更。",
    },
  },

  /** @see InstagramViewMedias **/
  instagram: {
    title: "銷售量 项目 Instagram",

    add_product: "添加新產品",
    create_product: "創建產品",
    link_box_msg:
      "將此連結放入您在 Instagram、Telegram 或其他社交媒體上的簡介中，以便您的受眾可以更快地找到產品並更輕鬆地購買。",
    remove_account: "改變 / 消除 Instagram 關聯",
  },
  /** @see BPageShopChannelInstagram **/
  shop_channel_instagram: {
    title: "Instagram 銷售量 渠道",
    subtitle:
      "為您的產品建立一個包含圖像和影片的專用類別，並在您的社群媒體上分享。它類似於 Instagram 和 TikTok，但具有完全控制權，可讓您直接銷售您的產品。",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "待辦事項清單",
      message:
        "寫下你想做的工作的標題，讓買家知道它的進展情況。",
    },
    booking: {
      title: "預訂/預訂",
      message:
        "此訂單將在指定時間處理，客戶已選擇所需時間段，如果您想在所選時間段內進行任何更改，請告知客戶。",

      selected_checkin: "選定的客戶登錄日期",
      selected_checkout: "選定的客戶退出日期",
      change_days_question:
        "您是否需要在客戶選定的日期內進行更改？",
      show_calendar: "顯示訂單日曆",
    },
    pricing: {
      title: "價錢",
      message: "您對這項服務收取多少費用？",
    },
    subscription: {
      title: "訂閱",
      message:
        "您可以通過每天購買此服務來選擇訂閱期。讓買家知道您是否要更改已輸入的默認值。",
      duration: "訂閱期",
    },
    charge: {
      title: "收費",
      message:
        "您已為此項目指定費用。您可以更改客戶購買的商品的費用金額。",
      charge: "收費",
    },

    save_item: "驗證並設置",
    start_service: "啟動服務",
    end_service: "結束",
  },
  /** @see BOrderDashboardServiceTasks **/
  service_tasks: {
    notification_finish: {
      title: "服務結束",
      message:
        "如果這樣做了，請按確認鍵以完成並關閉訂單。",
      action: "確認並完成訂單",
    },
  },

  /** {@see BProductEditOutputs} **/
  product_outputs: {
    outputs_form: "顯示器的信息結構（輸出）",

    virtual: {
      title: "產品輸出信息表",
      sub_title:
        "購買後要向用戶顯示的信息。這種形式特別適用於禮品卡等虛擬產品的銷售。",
    },
    service: {
      title: "服務設計",
      sub_title:
        "首先選擇您的服務類型並輸入所需信息。例如，您可以定義待辦事項列表或向客戶詢問預訂時間或約會。",
    },
  },

  /** {@see BProductServiceManage} **/
  service_design: {
    type: "服務類型",
    type_message:
      "選擇您為此產品提供的服務類型。通過選擇每個項目，將顯示相關表格。根據您選擇的服務類型，訂購時可能會從客戶那裡收到更多信息。",
  },

  /** {@see AvocadoHomePage} **/
  avocado: {
    name: "牛油果",
    title: "在社交媒體上進行快速、準確和愉快的銷售",
    message:
      "只需一筆金額和一份頭銜即可從客戶那裡獲得資金！錢將直接記入您的帳戶，您的客戶將獲得獨特的購物體驗。",
    new_order: "新法案",
    create_by_seller_title: "創建發票",
    create_by_seller_message:
      "如果您想創建具有一定金額的發票並將其發送給某人，您可以點擊下面的按鈕以顯示發票表格。將生成的鏈接提供給買家以通過它支付和跟踪他們的訂單。",

    create_by_buyer_title: "鱷梨形式",
    create_by_buyer_message:
      "通過激活此部分，將向您顯示一個鏈接，將此鏈接提供給您的買家，以便他們可以下訂單。",

    orders_list: "訂單清單",
    active_mode: "訂單收據有效",
    inactive_mode: "不活躍",
    active_message:
      "通過激活此來源，您的客戶將能夠通過您在下面看到的請求表下訂單。",
    avocado_form_link_message:
      "將此連結添加到您在 Instagram、Telegram 或其他社交媒體上的簡介中，以便您的受眾可以更快、更輕鬆地購買，並最終購買更多產品。",
    need_address: "獲取地址",
    need_address_msg:
      "如果您需要獲取買家的位置和地址，請選擇此選項。",
    avocado_link_message:
      "提供上述鏈接給客戶支付訂單就足夠了。客戶將能夠通過此鏈接關注訂單。",
    edit_order: "編輯訂單",
    progress: "進度",
    buyer_link: "買家鏈接",
    buyer_link_message:
      "將此鏈接提供給您的買家。買家將能夠通過此鏈接支付和跟踪他的訂單。此鏈接已編碼，如果將鏈接提供給任何人，他將能夠付款並查看信息。此鏈接將有效 60 天。點擊下面的鏈接進行複制。",
    OrderConfirm_done: "訂單已確認。",
    OrderConfirm_message:
      "如果您確認付款並且訂單正確，請單擊下面的按鈕。",
    OrderConfirm_action: "訂單確認",
    PreparingOrder_message:
      "如果客戶訂單已準備好發貨，請單擊下面的確定按鈕。",
    PreparingOrder_action: "訂單已準備好發貨",
    finish_message:
      "如果此訂單完成，請點擊結束按鈕關閉此訂單。",
    finish_action: "完成訂單處理",
    finish_dialog: {
      title: "完成訂單",
      message: "訂單是否已完成，您確定要關閉它嗎？",
      action: "是的，確認訂單完成",
    },
    configuration: "鱷梨設置",
    delivery_price: "運輸費",
    edit_avocado_action: "編輯信息",
    submit_pricing_avocado_action: "提交訂單的定價",
    add_avocado_action: "創建發票鏈接",
    avocados_list: "鱷梨清單",
    not_pricing: "此商品不計價！",

    show_all: "顯示所有",
    show_accepted: "顯示已確認的項目",

    notifications: {
      update_success: "鱷梨更新成功。",
      add_success: "鱷梨創建成功。",
    },
  },

  /** {@see BDashboardShopOrdersAvocado} **/
  avocado_orders: {
    title: "牛油果",
    title_small: "社交媒體銷售",
    pending_orders: "活躍訂單",
    avocado: "訂購鱷梨",
  },
  /** {@see BAvocadoInvoice} **/
  avocado_process: {
    step1: "價錢",
    step1_msg:
      "輸入每件商品的價格並選中綠色框。如果無法出售商品，請將其狀態更改為拒絕。",
    step2: "確認發票",
    step2_msg:
      "為此訂單創建發票。您可以輸入發票的標題和說明。訂單金額是根據商品的總價自動計算的。",
    title_input: "發票標題 *",
    show_to_customer: "此信息顯示給買方。",
    description_msg:
      "您想為此訂單寫註釋嗎？此信息將顯示給買方。",
    price_input: "訂單金額 *",
    tax_none: "免稅",
    tax_included: "包含在價格中",
    tax_add: "加稅",
    tax_message: "您可以選擇是否包含稅費。",
    tax_included_messages: "稅費已包含在價格中。",
    tax_add_messages: "最終價格應加稅。",
    invoice: {
      subtitle:
        "透過使用此表單，您可以建立特定金額的付款連結。它還使追蹤發票和確認付款完成變得簡單明了。",
    },
  },

  /** {@see BPageProductHyper} **/
  /** {@see BPageShopChannelHyper} **/
  hyper: {
    name: "超",
    print_label:
      "打印以下標籤並將其放置在產品前面",
    hyper_form_link_product_message:
      "您的客戶將能夠通過此鏈接快速購買 {product}。他們還將通過掃描二維碼輸入相同的鏈接。",
    title: "超級快速銷售",
    message:
      "透過 Hyper Selldone 銷售管道，您的客戶將能夠透過掃描二維碼購買產品，而無需您採取任何操作。使用這種方式可以在節日、展覽或繁忙的儀式上快速大量銷售一些物品。在此版塊啟動Hyper後，您可以在商品管理部分為實體產品建立Hyper二維碼。",
    orders_list: "超級訂單列表",
    active_mode: "超級銷售渠道已激活",
    inactive_mode: "不活躍",
    active_message:
      "如果啟用此選項，創建快速銷售代碼的可能性將顯示在每個產品的管理部分。",
    hyper_form_link_message: "您商店的超級頁面鏈接",
    configuration: "超級設置",
  },

  /** {@see BDashboardShopOrdersHyper} **/
  hyper_orders: {
    title: "超",
    title_small: "銷售報告",
    hyper: "收到的訂單",
  },

  /** {@see BProductInventoryManagementFile} **/
  product_file: {
    no_file: "還沒有上傳文件！",
    delete_dialog: {
      title: "刪除文件",
      message: "您確定要刪除此文件嗎？",
      action: "是的，立即刪除",
    },
    notifications: {
      delete_success: "文件刪除成功。",
    },
    drag_sort_msg: "您可以拖曳文件並對其進行排序。",
    paid_mode_msg: "用戶購買產品後才可以下載。",
    free_mode_msg:
      "用戶可以免費下載。範例檔案必須小於 50 MB。",
    has_gust_shopping_msg:
      "註冊用戶和訪客用戶可以下載文件，因為訪客購買已在商店的設定 > 流程中啟用。",
    only_registered_shopping_msg:
      "只有註冊用戶才能下載範例檔案。",
    file_count_limit: "项目 數數 限制",
  },

  /**
   * @see BProductLocationRestrictionsList
   */
  product_location_restrictions: {
    title: "可用的 地點",
    subtitle:
      "如果您的產品或服務僅在按國家/地區和郵遞區號或個人識別碼定義的特定區域提供，您可以在此處指定這些位置。這些位置限制是在產品層級強制執行的。在產品頁面上，系統將提示客戶選擇他們的位置。如果該產品在他們選擇的區域有售，他們將能夠繼續購買。",

    add_location_action: "项目 國家",
    no_restriction: "不 项目",
    import: {
      title: "项目 輪廓",
      subtitle: "選擇已儲存的位置設定檔。",
    },
    export: {
      title: "節省 輪廓",
      subtitle: "儲存位置以供將來使用。",
    },
    has_restriction_input: {
      title: "项目 地點 项目",
      description:
        "由於既定的地點限制，客戶只能在指定的國家/地區和郵遞區號內購買此產品。",
    },
    zip_pin_code: "郵遞區號/密碼",
    no_country_selected_error:
      "請至少包含一個國家/地區以及郵遞區號/密碼清單。沒有它，該產品將不可用。",
    tips: "點選 <b>+ 新增國家/地區</b> 按鈕開始建立新位置集。完成後，您可以透過點擊右上角的<b>⋮選單</b>並選擇<b>儲存設定檔</b>來儲存它。",
    need_save_message:
      "產品的位置限制設定已變更。要保留這些更改，請點擊下面的“儲存”按鈕。",

    add_dialog: {
      title: "项目 國家",
      message:
        "選擇一個國家/地區並點擊“新增”。這會將國家附加到表中，允許您為其分配郵遞區號、Pin 代碼、城市名稱或地區名稱。",
    },
    save_profile_dialog: {
      title: "项目 地點 輪廓",
      message:
        "請輸入名稱來儲存這組位置。此已儲存的位置集可以應用於其他產品，只需單擊即可快速載入位置。如果具有所提供名稱的設定檔已存在，它將使用這些新值進行更新。",
      title_input: {
        title: "輪廓 標題",
        placeholder: "项目 類別 姓名, 项目 店鋪 姓名,...",
      },
    },
    load_profile_dialog: {
      title: "项目 地點 輪廓",
      message:
        "您可以透過選擇此處設定的先前儲存的位置來載入位置。",

      select_input: {
        title: "地點 輪廓",
        placeholder: "選擇個人資料...",
      },
    },
  },

  /** {@see NotificationTopBar} **/
  notification_top_bar: {
    free_charge: "🎊 充值 {amount} 並獲得 {amount_total} 信用。",
    charge_action: "要求免費信用",
    claim_title: "索取您的免費信用",
    claim_charge_caution:
      "注意：您的錢包賬戶之間無法進行貨幣兌換。因此，請選擇適合您商店中兌換的貨幣的賬戶。",
    account_input: "存款賬戶",
    account_msg: "費用將記入此帳戶",
  },

  /** {@see BDashboardShopApplications} **/
  selldone_applications: {
    title: "不要錯過您的訂單！",
    msg: "隨時隨地管理您的業務。",
    scan_qr_code: "用手機掃我吧！",

    notification: {
      title: "通知",
      subtitle: "项目 新的 訂單 通知.",
    },
    order: {
      title: "訂單",
      subtitle: "查看您的訂單並進行管理。",
    },
    product: {
      title: "產品",
      subtitle: "庫存管理和產品簡單明了。",
    },
  },

  /** {@see BPageShopSettingSeo**/
  shop_seo: {
    title: "搜索引擎優化配置",
    msg: "通過賦能有機客戶獲取渠道，快進到在線營銷。",
    auto: {
      title: "自動搜索引擎優化引擎",
      msg: "為您網站上的受眾和搜索引擎提供無縫的移動體驗。",
    },

    amp: {
      title: "AMP",
      msg: "加速移動頁面自動生成。",
    },
  },

  /** {@see BPageShopSettingEmail} **/
  shop_preferences: {
    order: {
      title: "訂單",
      desc: "如果客戶支付訂單，包含訂單信息的電子郵件將發送到此地址。",
    },
    return: {
      title: "返回",
      desc: "如果產品被買家退回，將發送此電子郵件。發送此電子郵件取決於您購買的計劃。",
    },
    pos: {
      title: "POS",
      desc: "POS 銷售報告將發送到此電子郵件。",
    },
    avocado: {
      title: "牛油果",
      desc: "發送鱷梨訂單的每日報告。",
    },
    accounting: {
      title: "會計",
      desc: "存儲財務報告和更新。",
    },
    subscription: {
      title: "訂閱",
      desc: "最近購買的計劃狀態與開始和結束訂閱通知同步。",
    },
    technical: {
      title: "技術的",
      desc: "有關域和服務狀態的技術通知。",
    },
    report: {
      title: "報告",
      desc: "每周和每月報告將發送到此電子郵件",
    },
    review: {
      title: "審查",
      desc: "如果您需要在商店確認某個流程，相關的電子郵件將發送到此地址。例如，確認向商店用戶發送營銷電子郵件。",
    },
    bulk: {
      title: "项目 命令 報告",
      desc: "每天收到一封電子郵件，其中包含當天的訂單詳細資訊。",
    },
  },

  /** {@see BPageShopSettingLanguages} **/
  shop_languages: {
    title: "商店語言",
    sub_title: "安裝並激活商店自動翻譯包。",
    message:
      "您最多可以在商店中安裝 10 個語言包。如果您需要安裝更多軟件包，請聯繫我們。",
  },

  /** {@see SInviteFriends} **/
  invite_friends: {
    title: "向世界講述您的業務！",
    msg: "將您的朋友推薦給 Selldone，並在他們註冊時給他們一張 $99 公司優惠券。一旦他們進行了第一筆交易，您將從他們的所有交易中賺取終身佣金。造訪我們的聯盟頁面，立即開始賺錢！",
    invite: {
      title: "加入 Selldone 商業作業系統即可獲得免費的 $99 優惠券。",
      description:
        "我邀請您來到 Seldone，使用一款出色的工具在線上開展您的業務。",
      hashtags: "電子商務，網站建設者",
      quot: "我透過Selldone建立了一個網路商店，你現在也可以做你的生意了。",
    },
  },

  /** {@see BPageShuttleShops} **/
  shops_list: {
    title: "我的商店",
    message:
      "以下是您的自營店、授權店和樣品店的清單。若要隱藏樣品商店，請導航至頁面底部並選擇首選項。",

    sample: {
      title: "项目 專賣店",
      subtitle:
        "在這裡，您可以發現精選的樣品商店。您被授予仔細閱讀這些商店中提供的資訊的權限。但是，請不要使用真實的個人資訊登入或下訂單，因為這些資料將被公眾存取。如果您不小心在此輸入了信息，請退出商店並與我們聯繫以獲取進一步幫助。",
    },

    add_new_store: "项目 新的 店鋪",
    i_have_a_deal: "我有一筆交易",
    access: {
      title: "使用權 项目",
    },
  },

  /** {@see BTransportationServiceLabels} **/
  shipping: {
    warehouse_error:
      "首先設置您的倉庫！此地址將用作發貨地。",
    errors: {
      set_origin: "設置您的位置圖。",
      set_country: "設置你的國家。",
      set_address: "設置你的地址。",
      set_zip: "設置您的郵政編碼。",
    },
    set_warehouse: "設置倉庫",
    pickup_location: "接人的地方",
    refresh_rates: "刷新率",
    no_rate: "沒有率...",
    view_messages: "查看消息...",
    not_set_yet: "還沒定！",
    drop_orders_here: "在這裡下單...",
  },

  /** {@see BPageShopBlogsCategories} **/
  blog_category: {
    title: "博客類別",
    subtitle:
      "您可以為部落格文章建立有限數量的類別，以更有效地管理它們。設定類別限制可以促進網站上更好的組織。值得注意的是，即使是頂級新聞機構也維持有限數量的類別，通常少於 100 個，以簡化管理並保持更廣泛的關注範圍。",

    add_action: "添加新類別",
    add_dialog: {
      title: "新/更新類別",
      force_edit: "強制編輯路徑",
      force_edit_msg: "更改類別名稱並更新所有文章。",
      star_msg: "已註視的類別優先顯示在博客中。",
      star: "盯著看",
      delete_action: "刪除類別",
      add_action: "添加類別",
      edit_action: "編輯類別",
    },
  },
  /** {@see BPageShopBlogsTimeline} **/
  blog_timeline: {
    title: "內容發佈時間表",
    subtitle:
      "以下是未來出版的預定文章清單。您可以安排在特定時間發布部落格文章甚至產品描述。",
  },

  /** {@see BPageShopPagesAboutUs} **/
  about_us: {
    title: "關於我們頁面",
    subtitle:
      "寫一篇關於您的業務的文章以顯示在“關於我們”頁面上。此頁面將幫助您的受眾了解您的品牌和使命。",
  },
  /** {@see BPageShopPagesTerms} **/
  terms: {
    title: "服務條款頁面",
    subtitle:
      "為您的客戶解釋購買和使用您的服務的條款。",
  },
  /** {@see BPageShopPagesPrivacy} **/
  privacy: {
    title: "隱私政策頁面",
    subtitle:
      "隱私政策是披露一方收集、使用、披露和管理客戶或客戶數據的部分或全部方式的聲明或法律文件。",
  },
  /** {@see BPageShopPagesContactUs} **/
  contact_us: {
    title: "聯繫我們頁面",
    subtitle:
      "寫下您的聯繫信息、地址和電話號碼，以便在聯繫我們頁面上顯示給您的客戶。",
  },

  /** {@see BPageShopApplicationsMetaverse} **/
  metaverse: {
    title: "元界橋",
    subtitle:
      "Selldone 在商務領域提供 %100 基於 API 的服務。遊戲、區塊鏈和元界開發人員可以使用這些強大的 API 在未來的工作、生活和貿易世界中連接企業、客戶和服務。",
    message: "遊戲開發者搶先體驗",
  },

  /** {@see BProcessCenterBulkExport} **/
  orders_bulk_export: {
    title: "訂單助理",
    subtitle:
      "匯出和下載用於大量訂單處理的標籤 - 非常適合每天處理 100 多個訂單。",

    timespan: {
      title: "時間段",
      subtitle: "選擇下訂單的開始日期和結束日期。",
    },
    tasks: {
      title: "任務輸出",
      subtitle:
        "下載批量處理訂單的任務列表。結果僅包含已付款和 COD 訂單。",
      export_title: "任務清單",
    },
    labels: {
      title: "包裹標籤",
      subtitle:
        "下載所選時間段和狀態的所有訂單標籤列表。結果僅包含已付款和 COD 訂單。",
      export_title: "盒子標籤",
    },
  },

  /** {@see BPageShopMarketingFunnel} **/
  customers_funnel: {
    title: "客戶人口統計",
    subtitle:
      "過濾並匯出您的客戶數據，以做出更好的決策，以更少的行銷提供更多價值！請尊重客戶的隱私，切勿向他們發送大量電子郵件！在未經第三方服務許可的情況下，切勿與第三方服務分享您的客戶資訊。",
  },

  /** {@see BPageAffiliatorDashboard} **/
  affiliate_pos: {
    title: "附屬POS",
    open_pos_action: "快速訂購POS",
    description:
      "此選項適合 Instagram 頁面和其他社交網路的管理員。使用 Affiliate POS 手動接收和新增客戶的訂單。您的關聯公司（或特許經營商）可以在關聯公司 POS 中新增訂單並上傳存款單。",
  },

  /** {@see BPageShopSettingFlow} **/
  shop_configuration: {
    /** {@see BShopOptionsLoginMethods} **/
    login: {
      title: "登錄方式",
      subtitle: "自定義用戶登錄您商店的方式。",

      tips: "<b>重要.</b> 當使用者在您的商店註冊時，系統會建立對應的 Selldone 使用者（如果尚不存在）。該用戶將可以存取所有商店的地址簿，並可以查看他們的訂單歷史記錄，即使商店已經關閉。我們不會將此資訊用於行銷目的，但需要它來防止雙方詐欺。為了保持透明度，我們將向用戶發送電子郵件，通知他們註冊情況。",
    },

    /** {@see BShopOptionsCheckout} **/
    checkout: {
      title: "結帳流程",
      subtitle:
        "在您的電子商務中自定義您的客戶旅程和購買流程。",
      map: {
        title: "地圖",
        subtitle:
          "用戶必須在地圖上選擇送貨地點（如優步）。",
        subtitle_no_map:
          "如果客戶提供的地址中不存在該位置，則運輸計算中的距離為零。",
      },
      mode: {
        title: "客戶登錄點",
        default: {
          title: "盡快（默認）",
          msg: "用戶盡快登錄。 （更多轉換）",
        },
        on_checkout: {
          title: "結帳時",
          msg: "強制用戶在結帳步驟登錄。",
        },
        login_free: {
          title: "可選登錄",
          msg: "訂單付款後可選登錄..",
        },
      },

      express: {
        title: "添加到購物車後重定向",

        false: {
          title: "正常模式",
          msg: "單擊添加到購物車後，留在頁面上並繼續購物。",
        },
        true: {
          title: "快遞模式",
          msg: "單擊添加到購物車後將客戶重定向到結帳頁面。",
        },
      },

      shipping_address: {
        title: "詢問收貨地址",
      },
    },

    /** {@see BShopOptionsCheckoutForm} **/
    checkout_form: {
      title: "查看 项目",
      subtitle:
        "自訂結帳表單欄位以從客戶收集所需的資訊。",
    },
  },
  /** {@see CheckoutOptions} **/
  checkout_options: {
    default: {
      title: "物理和服務（默認）",
      desc: "要求客戶在物理和服務結賬時輸入地址。",
    },
    physical: {
      title: "僅限物理",
      desc: "要求客戶在實體結賬時輸入地址。",
    },
    off: {
      title: "絕不",
      desc: "永遠不要詢問收貨地址。 ⚠ 如果您計劃通過選擇產品的物理類型而不是服務類型來提供具有變體的服務，請使用此選項。",
    },
  },

  /** {@see BPageShopSettingBusinessModel} **/
  business_model: {
    title: "商業模式設置",
    subtitle:
      "設置您的商業模式，我們將在幕後配置您的操作系統。",
  },
  business_type: {
    title: "商品類型",
    subtitle:
      "設定您想要在商店中銷售的產品類型。 Selldone 中的產品類型不僅僅是產品的一種類型；更多的是關於履行程序。",

    send_activation_request_to_support:
      "在支持票證中發送激活請求。",
    require_kyc: "企業主KYC。",
    needs_enterprise_license: "您需要擁有企業許可證。",
    marketplace_caution_message:
      "將 Marketplace 設定為您的模型會深刻影響您的業務作業系統配置。例如，您應該為每種產品定義至少一個具有獨立定價和庫存的供應商。客戶不能購買沒有供應商的產品。",
  },

  /** {@see BusinessModelView} **/
  business_model_view: {
    normal: {
      title: "普通商店",
      desc: "通常是 SME、家庭企業或直銷商 - 直接向客戶銷售產品或作為經銷商銷售批發商的產品。",
    },

    dropshipping: {
      title: "代發貨",
      desc: "透過向批發商或製造商等第三方付費來外包訂單履行，以在幕後處理庫存和產品管理。",
    },

    wholesaler: {
      title: "直銷供應商",
      desc: "批發商或製造商通常將訂單直接運送給最終消費者。 Selldone 上的其他商家也可以透過代發貨模式在他們的商店中銷售您的產品。",
    },
    marketplace: {
      title: "市場",
      desc: "在線市場在專有和集中的平台上連接買家和賣家。",
    },

    franchise: {
      title: "特許經營/附屬公司",
      desc: "特許經營是一種分銷產品或服務的方法，涉及建立您的品牌（特許經營）或通過其品牌（附屬公司）銷售您的產品的特許人。",
    },
  },

  /** {@see BPageMarketplace} **/
  marketplace: {
    vendor_wallets: "錢包",
    pricing_models: "價錢",
    add_vendor: "添加供應商",
    requests: "要求",
  },

  price_input_type: {
    title: "價格輸入類型",
    default: {
      title: "默認",
      desc: "選擇一個值作為購物車中的數量。",
    },
    area: {
      title: "區域",
      desc: "輸入寬度和長度作為輸入以計算數量。",
    },
    volume: {
      title: "體積",
      desc: "輸入寬度、長度和高度作為輸入以計算數量。",
    },
    custom: {
      title: "自定義（通過輸入表單）",
      desc: "無需數百種變體！為高度可定制的產品創建自定義成本計算表。",
    },
  },

  /** {@see BPageShuttleVendors} **/
  vendors_list: {
    title: "我的供應商",
    message:
      "這是您的供應商帳戶的清單。所有與使用 Selldone 平台的商店關聯的供應商帳戶都將顯示在此處，以便您輕鬆管理它們。",
  },

  vendor_page: {},

  /** {@see BDomainsList} **/
  domains: {
    message:
      "將多個域連接到您的業務操作系統並在一個地方管理所有域。您可以使用多域功能為網站的每個部分（如博客和社區）創建專用域，或為您的附屬公司使用不同的域。",
  },

  /** {@see BNoteButton}   {@see BNoteDialog} **/
  notes: {
    add_action: "為您的團隊添加備註",
    notifications: {
      success_add: "註釋已成功添加。",
      success_delete: "筆記已成功刪除。",
    },
  },

  /** {@see BDashboardShopExternalServices} **/
  external_services: {
    title: "外部服務",
    subtitle:
      "在此處監控 SMS 和電子郵件等外部服務的最後狀態。",
  },

  /** {@see BPageShopSettingQuota**/
  shop_quota: {
    title: "使用配額",
    sub_title:
      "這是您商店的使用配額清單。您可以透過升級商店許可證來增加這些限制。如果您超出限制，您可以向我們申請額外的每日配額津貼。所有使用情況每天都會重置。",
  },

  /** {@see WidgetAppCard} **/
  app_card: {
    category: "類別",
    installs: "安裝",
    actives: "積極的",
    uninstalls: "卸載",
    app_code: "應用程式程式碼",
    app_mode: "應用方式",
  },

  product_status: {
    open: {
      name: "積極的",
      title: "活躍 |線上線下銷售",
      description: "該產品將可用於在線訂購。",
    },
    close: {
      name: "不活躍的",
      title: "不活躍 |僅限線下銷售",
      description: "該產品將無法在線訂購。",
    },
    pending: {
      name: "待辦的",
      title: "待辦的",
      description: "上線前需要進行市場審查。",
    },
    rejected: {
      name: "被拒絕",
      title: "被拒絕",
      description: "該產品被市場拒絕。",
    },
    unlisted: {
      name: "项目",
      title: "项目",
      description:
        "該產品未在商店中列出，但可透過直接連結存取。",
    },
  },

  /**
   * BDashboardShopFeedback
   */
  direct_feedback: {
    title: "發送直接請求",
    message:
      "確定您在 Seldone 上蓬勃發展並獲利的三大業務需求。這些資訊將直接與創始人和董事共享，並將仔細考慮。您也可以在提交後隨時間更新您的需求。",
    expand_action: "寫下請求...",
    input_label: "您的要求",
    to: {
      ceo: "發送 至 CEO",
      team: "發送 至 项目",
    },
    placeholder: {
      ceo: "完全沒必要表現得友善，我喜歡聽你直接、中肯的提問。\n例如我需要有...",
      team: "請嘗試對他們好一點。\n例如我需要有...",
    },
  },

  /**
   * BInventoryFilter
   */
  inventory_filter: {
    placeholder: "项目 篩選 *.*",
  },
  /**
   * BVendorInput
   */
  vendor_input: {
    placeholder: "篩選 项目...",
  },

  /**
   * BShopProductsImportProcessing
   */
  product_import_processing: {
    title: "加工進口產品",
    message:
      "我們正在導入產品和圖像，這可能需要一些時間才能完成。",
  },

  /**
   * BOrderInput
   */
  order_input: {
    message:
      "此處顯示的資訊已由客戶根據產品輸入表單結構提交。",
  },

  /**
   * BPageConnectDashboard
   */
  shop_connect: {
    test: {
      title: "設置",
      subtitle: "對外服務報告",
      action: "測試連接",
      last_update: "最後更新者",
    },
    service_status: {
      title: "项目 地位",
      syncing_message: "正在同步過程中...",
      action: "项目 全部",
      connect_status: "项目 地位",
      service_status: "项目 地位",
      auto_confirm_enable_msg: "訂單自動確認已啟用。",
      auto_confirm_disable_msg:
        "未啟用訂單自動確認。",
      shipping_enable_msg:
        "運費將根據結帳時提供的資訊計算。",
    },
    detail: {
      title: "連接細節",
      auto_confirm_order: "自動確認訂單",
      test_mode: "測試模式",
      status: {
        subtitle: "有關同步狀態的總體資訊。",
      },
      sync: {
        title: "同步細節",
        subtitle:
          "內部同步詳細資料。此資訊將在同步進程時期成功結束後保存。",
        no_data: "沒有同步訊息！",
      },
    },

    products: {
      title: "產品",
      subtitle:
        "來自 {name} 的新增產品清單。確保您的產品具有唯一的名稱和 SKU。某些 Connect 服務用於遷移，因此如果您的產品具有重複的 <b>SKUs</b> 和 <b>Names</b>，這些產品將會變更！",
      action: "项目 產品",
      syncing_message: "正在同步過程中...",
    },

    logs: {
      title: "项目",
      subtitle:
        "過去 7 天內的所有日誌清單。僅外部服務提供者支援日誌記錄功能。",
    },

    edit: {
      title: "项目 新的 项目",

      service: {
        title: "项目",
        subtitle:
          "選擇要連接的目標平台、直銷供應商或市場。",
      },
      test: {
        false_title: "项目 全部",
        false_desc: "项目 全部 可用的 產品, 類別, 顧客.",
        true_title: "有限（推薦初學者）",
        true_desc:
          "獲得最多 5 個產品、類別和客戶。您可以隨時在“連接”>“設定”中將其切換為完整模式。",
      },
      overwrite: {
        false_title: "如果存在請勿更改",
        false_desc: "按原樣保留現有產品和類別詳細資訊。",
        true_title: "项目",
        true_desc:
          "更新 项目 產品, 项目, 项目 類別 项目.",
      },
      migration_tips:
        "<b>项目: </b>项目 项目 项目 至 项目 项目 项目 项目 项目 <b>项目</b> 项目. 项目 项目 '项目 项目, 项目 项目 全部 數據 從 " +
        "项目 連接的 服務 项目 项目 项目 圖片, 项目 项目 项目 项目 项目 项目 项目. 项目, 项目 项目 產品, 類別, 项目 顧客 项目 项目 项目!",
      add_action: "自動連接到",
      order: {
        title: "项目 地位",
        subtitle:
          "為您的商店設定連線服務的訂單管理設定。這包括設定訂單接受、啟用自動訂單確認（如果支援）以及配置運費計算。",
      },
      enable: {
        label: "项目 地位",
        true_desc: "庫存和訂單將同步。",
      },
      confirm: {
        label: "自動確認訂單",
        false_desc: "您應該手動確認訂單。",
        true_desc:
          "即時付款的訂單將自動獲得批准。帶有調試付款的訂單不會自動批准。",
        tips: "在調試模式下透過禮品卡或 COD 或支付網關支付的訂單屬於例外情況，不會自動確認。",
      },

      shipping: {
        label: "船運",
        tips: "該服務提供運費計算，可根據您的喜好啟用或停用。如果啟用，則需要使用第三方服務的成本計算 API，這可能會導致結帳頁面價格更新延遲超過 300 毫秒。",
        false_title: "项目",
        false_desc:
          "使用我的運費計算，在“商店”>“物流”>“運輸”中對所有產品（包括進口產品）進行計算。",
        true_title: "项目 船運",
        true_desc:
          "使用此服務提供的運費計算 API。",
      },

      remove: {
        verify: "我確認要刪除此連線。",
        action: "消除 项目",
      },
    },

    /**
     * BPageShopChannelConnect
     */
    list: {
      title: "项目 OS",
      subtitle:
        "將您的業務作業系統連接到外部服務並在同一位置管理所有管道。",
      action: "项目 新的 服務",
      empty_message:
        "忘記直銷的應用程式和插件！ Connect 是跨平台訂單管理的未來。",
      auto_confirm: "自動確認",
      shipping: "船運",
      syncing_now: "現在正在同步！",
      sync_not_started: "同步尚未開始！",
    },
  },

  /**
   * ConnectMode
   */
  connect_mode: {
    Migration: {
      title: "项目",
      desc: "獲取產品、類別和客戶。用戶刪除本服務後，收到的商品、類別、客戶不會被刪除。",
    },
    Dropshipping: {
      title: "代發貨",
      desc: "取得產品、類別和訂單。用戶刪除服務後，系統將刪除產品。",
    },
    Marketplace: {
      title: "市場",
      desc: "只需同步庫存並接收訂單（產品將按 SKU 連結）。",
    },
    Accounting: {
      title: "會計",
      desc: "發送 訂單 项目 金融 项目.",
    },
    Other: {
      title: "项目",
      desc: "项目 服務.",
    },
  },

  /**
   * BPageShopPagesLandings
   */
  shop_landings: {
    title: "登陸頁面",
    add_new_action: "项目 新的 项目",
    subtitle:
      "使用多功能人工智慧驅動的內嵌編輯器為您的品牌建立獨特的響應式自訂頁面，並透過輸入資料自動產生動態內容。",
    empty_message: "透過拖放設計自訂頁面...",
  },

  /**
   * BPageShopPermissionStaff
   */
  shop_staff: {
    list: {
      title: "職員 项目",
      subtitle:
        "有權訪問此商店的儀表板和管理部分的用戶。",
    },
    pending: {
      title: "待辦的",
      message: "项目 待辦的 项目.",
    },
  },

  /**
   * BPageShopCommunityComments
   */
  community_comments: {
    title: "註釋",
    subtitle: "這是社區評論的清單。",
    empty_msg: "到目前為止還沒有創建任何評論...",
  },

  /**
   * BPageShopCommunityCategories
   */
  community_categories: {
    title: "類別",
    subtitle: "這是社區類別的列表。",
    new_category_action: "新的 類別",
    empty_msg: "到目前為止還沒有創建任何類別...",
    filter: {
      delete: {
        title: "已刪除",
        description: "项目 已刪除 類別.",
      },
    },
  },
  /**
   * BPageShopCommunityPosts
   */
  community_posts: {
    title: "项目",
    subtitle: "這是社區貼文的清單。",
    filter: {
      deleted: {
        title: "已刪除",
        description: "项目 已刪除 项目.",
      },
      reported: {
        title: "项目",
        description: "顯示檢舉的貼文。",
      },
    },
    empty_msg: "到目前為止還沒有創建任何帖子...",
    menu: {
      open_post: {
        title: "開啟貼文",
        subtitle: "查看和編輯社群中的貼文。",
      },
      spam: {
        title: "報告 & 消除 项目",
        subtitle: "大量刪除帖子並禁止用戶。",
      },
      delete: {
        title: "刪除 项目",
        subtitle: "刪除此帖子。",
      },
    },
  },

  /**
   * {@see BGoogleTagManager}
   */
  channel_google: {
    gtag: {
      title: "標籤 项目",
      subtitle:
        "Google Analytics（分析）可以在追蹤 Flash、影片和社群媒體網站和應用程式的同時衡量廣告投資報酬率。使用 Google 追蹤程式碼管理器的免費、簡單且可靠的解決方案輕鬆管理網站標籤，無需編輯程式碼。",
      tag_id: {
        label: "Google 標籤 项目 ID",
      },
    },
    shopping: {
      title: "Google 项目",
      subtitle:
        "資料來源顯示 Google 上目錄資訊的來源。點擊此連結可自動將所有產品和類別新增至 Google 商品。",
      tips: "您可以利用此工具輕鬆自動管理 Google 廣告。",
      link_message: "Google 產品 项目 URL",
    },
    console: {
      title: "搜尋控制台",
      subtitle: "將元標記新增至您的主頁以進行 Google Search Console 驗證。",
      code: {
        label: "项目 Meta 標籤",
        placeholder: "從 Google, 项目.项目. 项目9项目...",
      },
    },
    serp: {
      title: "Google SERP & 项目",
      subtitle:
        "我們從Google取得最精準的SEO審核數據，並以便捷的方式呈現給您。只需按照提供的步驟操作即可。",
    },
    serp_content: {
      title: "連接到 Google 搜尋控制台",
      subtitle:
        "將您的商店連接到搜尋控制台，然後開始在 Selldone 上探索關鍵字、排名和其他免費 SEO 工具。",
      tips: {
        title:
          "在將 Selldone 與 Google Search Console 關聯之前，請確保滿足以下條件：",
        add_in_selldone: "新增、驗證自訂網域並將其設定為主要自訂網域。",
        add_in_google: "在您的 <a href=\"https://search.google.com/search-console\" target=\"_blank\"> <b>Google Search Console</b></a> 中新增並驗證 <b>{domain}</b>。",
      },
      action_custom_domain: "風俗 領域",
      action_connect_now: "立即連接",
      action_remove_connection: "消除 项目",
    },
  },

  /**
   * {@see BPageShopIncentivesCoupon}
   */
  cashback: {
    add_new: "项目 新的 项目",
    title: "現金回饋計劃",
    boosted: "项目 (2项目)",
    min_purchase: "项目 購買",
    only_first_order: "僅限第一訂單",
    total_cashback: "全部的 项目",
    delete_alert: {
      title: "刪除現金回饋計劃",
      message: "您確定刪除此回現計畫嗎？",
      action: "是的，立即刪除",
    },
    notifications: {
      delete_success: "現金返還計劃刪除成功。",
    },
  },
  /**
   * {@see BPageCashback}
   */
  shop_cashback: {
    title: "現金回饋計劃",
    up_to: "取決於",
    menu: {
      back: "後退 项目",
      dashboard: "儀表板",
      orders: "訂單",
      edit: "編輯",
    },
    /**
     * {@see BPageCashbackDashboard}
     */
    dashboard: {
      chart_amount_buy: {
        label: "買",
        y: "購買金額{currency}",
      },
      chart_amount_cashback: {
        label: "项目",
        y: "项目 數量 {currency}",
      },
      chart_used: {
        label: "用過的",
        y: "時代",
      },
    },
    /**
     * {@see BPageCashbackOrders}
     */
    orders: {
      title: "项目 訂單",
      table: {
        amount_cashback: "项目 數量",
        payment_status: "支付狀態",
        date: "日期",
      },
    },
  },

  /**
   * {@see BCashbackAdd}
   */
  cashback_edit: {
    config: {
      subtitle: "在此設定回退百分比、限制及其狀態。",
    },
    percent_input: {
      title: "現金回饋比例",
      message: "輸入 1% 到 20% 之間的現金回饋百分比。",
    },
    currency_input: {
      message: "現金返還計劃僅適用於該貨幣。",
    },
    limit_input: {
      title: "限制",
      hint: "輸入現金回饋的最高金額。",
      zero_message: "项目 0 项目 無限 项目.",
    },
    duration: {
      title: "期間 限制",
      subtitle: "設定現金回饋計畫的持續時間。這是可選的。",
    },
    start_input: {
      title: "開始 日期",
      placeholder: "项目 開始 日期...",
    },
    end_input: {
      title: "結尾 日期",
      placeholder: "项目 結尾 日期...",
    },
    design: {
      subtitle:
        "設定現金返還計劃的標題和簡短描述。這些資訊將顯示給客戶。",
    },
    title_input: {
      title: "標題",
    },
    description_input: {
      title: "描述",
    },
    constraints: {
      subtitle: "設定現金返還計劃的限制。",
    },
    min_purchase_input: {
      hint: "輸入現金回饋計畫的最低購買金額。",
      title: "项目 購買",
    },
    only_first_buy_input: {
      false_desc: "現金返還計劃適用於所有訂單。",
      true_desc:
        "現金返還計劃僅適用於第一個訂單。",
      true_title: "僅限第一訂單",
      false_title: "全部 訂單",
    },
    qualify_input: {
      false_title: "全部 顧客",
      true_title: "项目 顧客",
      true_msg:
        "現金返還計劃僅適用於符合資格的客戶。",
    },
    club: {
      subtitle:
        "設置俱樂部的現金返還計劃。現金返還計劃僅適用於該俱樂部的客戶。",
    },
    cluster: {
      subtitle:
        "透過將集群與現金返還計劃關聯，您可以更有效地對其進行管理。",
    },
    notifications: {
      add: "現金返還計劃添加成功。",
      edit: "現金返還計劃更新成功。",
    },
    enable_input: {
      true_msg: "現金返還計劃已啟動，客戶可以使用。",
      false_msg:
        "現金返還計劃處於非活動狀態，客戶無法使用它。",
    },
    boosted_input: {
      false_title: "普通的",
      true_title: "Boost（2 倍現金回饋）",
      true_msg:
        "現金回饋計畫處於增強模式，客戶將獲得 2 倍現金回饋。",
      false_msg:
        "現金回饋計畫處於正常模式，客戶將收到正常的現金回饋。",
    },
  },

  /**
   * @see BOrderPaymentRowPayment
   */
  row_payment: {
    actions: {
      refund: {
        title: "项目 支付",
        subtitle: "支援部分或全額退款。",
      },
      delivery: {
        title: "確認交貨",
        subtitle: "您可以手動向付款提供者確認交貨。",
      },
    },
  },

  /**
   * @see BOrderPaymentActionsRefundDialog
   */
  payment_refund_dialog: {
    title: "项目 支付",
    message:
      "出於安全原因，只有過去 7 天內付款的訂單才有資格獲得退款。",
    payment_amount: "支付金額",
    total_refund_amount: "全部的 项目 數量",
    can_refund: "可以退款",
    refund_amount: "项目 數量",
    verify: {
      title: "驗證退款",
      description:
        "我確認退款金額正確並且我想繼續。",
    },
    action: "立即退款",
  },

  /**
   * @see BOrderPaymentActionsDeliveryDialog
   */
  payment_delivery_dialog: {
    title: "项目 送貨 项目",
    message:
      "某些支付服務需要確認訂單已交付給客戶。當我們收到客戶的交貨確認時，我們通常會在訂單履行的最後一步發送此確認。但是，如果您需要手動執行此操作，您可以在此處執行此操作。",
    verify: {
      title: "项目 送貨",
      description:
        "我確認訂單已交付給客戶。",
    },
    action: "立即確認",
  },

  /**
   * @see BPageProductCrossSelling
   */
  product_cross_selling: {
    title: "交叉銷售",
    add_new_actions: "项目 新的 產品",
    subtitle:
      "在此部分中，您可以新增和管理此產品頁面的交叉銷售產品。這些產品將作為主要產品旁的建議供客戶購買。您還可以設定折扣來鼓勵和激勵額外購買。系統將展示最多 3 個項目供客戶考慮。",
    dialog: {
      edit_title: "編輯交叉銷售產品",
      add_title: "增加新的交叉銷售產品",
      target: {
        title: "项目 產品",
        subtitle:
          "選擇您想要與該產品一起作為交叉銷售選項進行推廣的產品。",
        select_products: "项目 產品(项目)",
      },
      list: {
        title: "项目 產品",
        subtitle: "該產品已被選擇進行交叉銷售促銷。",
        manage_product: "项目 產品",
      },
      discount: {
        title: "折扣 & 信息",
        subtitle:
          "您可以選擇新增訊息並提供折扣，以激勵客戶購買所選的附加商品。這些激勵措施有助於推動銷售並增強整體購物體驗。",
        amount_input: {
          message:
            "折扣百分比將在考慮所有現有折扣後應用於產品價格。",
        },
        mismatch_type_warning:
          "折扣不能應用於主要產品類型以外的其他類型，因為來源商品和目標商品不會放置在同一個購物籃中。",
        not_support_subscription_type_warning:
          "無法為交叉銷售訂閱產品設定折扣，因為定價方案無法動態調整。",
        message_input: {
          message:
            "精心設計一個引人注目的標題來吸引客戶的注意。",
          placeholder:
            "捆綁並節省：用我們精心挑選的產品來完善您的造型！",
        },
      },
      action: {
        title: "项目",
        subtitle:
          "在此修改交叉銷售產品的操作。如果您的產品需要輸入自訂資訊（例如透過評估表），請勿選擇「新增至購物車」作為操作，因為這可能會導致錯誤。",
      },
    },
  },
  /**
   * @see BProductVariantsBulkAdd
   */
  product_variants_bulk_add: {
    title: "批量添加變體",
    variants: {
      title: "變體選項",
      subtitle:
        "最多選擇兩個變體選項。選擇後，您可以選擇要自動建立的特定變體。",
    },
    values: {
      title: "變體值",
      subtitle: "在此輸入每個變體選項的可能值。",
      prevent_duplicates_tips:
        "<b>注意：</b> 我們自動檢查現有變體以防止重複。",
    },
    inventory: {
      title: "项目 存貨",
      subtitle: "設定新變體的起始庫存計數。",
    },
    add_variants_action: "創造 變體",
  },

  /**
   * @see CrossSellActionType
   */
  CrossSellActionType: {
    AddToCart: {
      title: "添加到購物車",
      description:
        "直接顯示“加入購物車”按鈕。請注意，這不適用於訂閱產品。",
    },
    ViewProduct: {
      title: "查看產品",
      description:
        "顯示「查看更多」按鈕，透過開啟新視窗將客戶引導至產品頁面。",
    },
  },

  /**
   * @see BProductFlow
   */

  product_flow: {
    title: "購買 流動",
    subtitle: "這是您產品的購買流程和健康檢查。",

    /**
     * @see BProductFlowRowConnect
     */
    connect: {
      subtitle: "本產品已透過 <b>{name}</b> 新增。",
      enable_msg: "已啟用此與外部服務的橋樑。",
      disable_msg: "與外部服務的此橋被停用。",
      has_shipping_msg:
        "{name} 支援出貨。因此，您可以選擇在結帳頁面上啟用透過 {name} 自動運費計算。",
    },
    /**
     * @see BProductFlowRowHealth
     */
    health: {
      title: "產品 项目",
      available_in_stock_msg: "產品有現貨。",
      out_of_stock_msg: "產品缺貨。",
      file_count_msg:
        "為此產品上傳了 {files_count} 個文件，總共 {files_size} 個。",
      no_file_uploaded_msg: "尚未上傳任何文件。",
      no_image_uploaded_msg:
        "上傳產品圖片以使其更具吸引力。",
    },
    /**
     * @see BProductFlowErrorsVendor
     */
    vendor_errors: {
      title: "失蹤的供應商",
      subtitle:
        "該產品目前沒有關聯的供應商。對於一種可以在市場上購買的產品，它必須至少有一個供應商。",
      manage_vendors: "管理供應商",
    },

    /**
     * @see BProductFlowErrorsFile
     */
    file_errors: {
      title: "遺失文件",
      subtitle:
        "目前，尚未上傳該產品的任何文件。請上傳文件以繼續。",
      manage_files: "管理文件",
    },

    /**
     * @see BProductFlowRowPricing
     */
    pricing: {
      title: "價錢",
      no_product_price_msg: "預設產品價格尚未設定！",
      listing_pricing_msg: "项目 價錢:",
      has_valuation_msg: "產品有估值。",
      subscription_pricing_msg:
        "项目 產品 项目 {count} 訂閱 價錢 計劃.",
      has_no_subscription_pricing_msg:
        "项目 產品 项目 不 訂閱 價錢 計劃.",
    },
    /**
     * @see BProductFlowErrorsSubscription
     */
    subscription_errors: {
      title: "项目 訂閱 價錢 計劃",
      subtitle:
        "該產品沒有訂閱定價方案。您需要添加至少一項訂閱定價方案才能使該產品可供訂閱購買。",
      pricing_plans: "價錢 計劃",
    },

    /**
     * @see BProductFlowRowLocation
     */
    location: {
      title: "项目 地點 项目 ● {status}",
      status: {
        has_restriction: "可用的 项目 {count} 项目",
        no_restriction: "不受限",
      },
      available_countries_msg:
        "全球購物僅限 {count} 國家。這些國家是{countries}。",
      disable_for_all_countries_msg:
        "您的商店 > 地點設定中的所有國家/地區均禁用購物。",
      location_is_not_in_permitted_shop_locations_msg:
        "您將 {country} 設定為銷售地點，但在商店層級您不允許該國家/地區。請檢查您的商店等級設定。",
      shop_locations: "店鋪 地點",
      product_locations: "產品 地點",
    },

    /**
     * @see BProductFlowErrorsLocation
     */
    location_errors: {
      title: "可用的 地點 项目",
      no_location_error_subtitle:
        "您已啟動購買產品的地點限制，但目前此限制下沒有列出任何國家。因此，任何人都無法購買該產品。",
      invalid_location_error_subtitle:
        "您產品的位置限制設定包含錯誤：列出的某些位置沒有任何關聯的郵遞區號。因此，用戶無法選擇郵政編碼，導致無法購買產品。",

      manage_locations: "项目 地點",
    },

    /**
     * @see BProductFlowRowTax
     */
    tax: {
      title: "訂閱 TAX",
      default_shop: "默認 店鋪 TAX",
      tax_profiles: "TAX 簡介",
      description: {
        subscription_tax_msg:
          "我們只能對付款創建步驟徵稅。",
        dedicated: "项目",
        is_disabled: "此稅務資料已停用！",
        tax_is_based_on_location: "TAX: 地點 项目",
        shipping_tax_is_based_on_location: "船運: 地點 项目",
        included_in_price: "包含在價格中。",
      },
    },

    /**
     * @see BProductFlowRowVendor
     */
    vendor: {
      vendor_owner_msg: "项目 產品 项目 至 <b>{vendor}</b>.",
      has_vendors_msg: "此產品有 {count} 供應商。",
      no_vendor_msg:
        "您尚未為此產品分配供應商，因此客戶無法購買它。",
      add_vendors: "新增供應商",
    },
  },

  /**
   * @see BPageProductTemplate
   */
  product_template: {
    title: "產品 项目 模板",
    subtitle:
      "您可以在產品頁面中嵌入頁面以增強演示效果。最佳方法是建立具有透明背景和針對每個產品類別量身定制的 1 到 3 個部分的頁面。然後，將一頁分配給多個產品，以獲得一致且有吸引力的顯示。",
    edit_page: "編輯 项目",
    list_of_pages: "列表 项目 頁面",
  },
  /**
   * @see BPageProductEmbed
   */
  product_embed: {
    subtitle:
      "只需複製並貼上我們提供的程式碼，您就可以輕鬆地將產品或產品清單嵌入到您的部落格或其他網頁中。儘管此功能仍處於早期階段，但我們正在積極努力將其功能擴展到其他地方目前可用的功能之外。雖然它目前提供的功能有限，但我們計劃在未來引入更多模板和自訂選項。",
    card: {
      title: "项目",
      description:
        "產生 HTML 程式碼以在其他平台和 HTML 頁面中新增產品卡。",
    },
    iframe: {
      title: "项目",
      description:
        "產生 iframe 程式碼以在嵌入式視窗中顯示全面的產品詳細資訊。",
    },
  },

  /**
   * @see BPermissionStaffAddDialog
   */
  permission_staff_add: {
    title_new: "新的 職員",
    title_edit: "編輯 職員",

    staff: {
      title: "项目 職員 & 使用權",
      subtitle:
        "所有具有員工存取權限的使用者都可以登入您的儀表板並查看財務資訊。若要新增具有有限存取權限的用戶，請定義角色。",
      go_to_roles: "项目 至 角色",
    },
    access: {
      customization_tips:
        "<b>自訂：</b> 按一下每個項目可自訂預設讀取/寫入存取權限。每行代表與主商店儀表板相對應的存取等級。",
      simplify_tips:
        "<b>重要！ </b> 我們將存取控制從 300 多個層級簡化到 10 個層級以下。更詳細和最新的訪問級別將在文件中發布。",
      multi_permission_tips:
        "<b>自訂限制？ </b> 您可以為一個使用者新增更多存取權限，因此在新增第一個存取權限後，請使用相同的步驟建立其他存取權限。",
      view_data: "看法 數據",
      apply_changes: "應用更改",
    },

    inputs: {
      email: {
        placeholder: "電子郵件",
        label: "用戶 電子郵件 地址",
      },
      level: {
        label: "使用權 项目",
        placeholder: "選擇級別...",
      },
    },

    actions: {
      add: "项目 職員",
    },
    notifications: {
      add_success: {
        title: "使用權 项目",
        message: "新的存取權限已成功新增。",
      },
      update_success: {
        title: "使用權 项目",
        message: "權限已成功更新。",
      },
    },
  },

  /**
   * @see BCategoryEngineEditor
   */
  category_engine_editor: {
    title: "项目 產品 项目",
    subtitle:
      "展示不同類別的產品。您可以選擇多個類別來展示產品或按標籤過濾產品。",
    aut_add_sub_categories_tips:
      "您可以透過點擊下面的按鈕自動將所有子類別新增至目前類別。",
    inputs: {
      categories: {
        label: "類別",
        messages: "將顯示這些類別的產品。",
        placeholder: "项目 類別...",
      },
      tags: {
        label: "產品 標籤",
        messages: "將顯示帶有這些標籤的產品。",
        placeholder: "在此連接標籤並按 Enter 鍵。前任。新系列",
      },
    },
    actions: {
      save_engine: "節省 项目",
      auto_add_subcategories: "自動新增子類別",
    },
  },

  /**
   * @see SProductsSortView
   */
  products_sort_view: {
    search_tips: {
      title: "搜尋技巧",
      normal:
        "<b>一般搜尋：</b>依標題、MPN、SKU、品牌或標籤搜尋。",
      product:
        "<b>準確產品 ID：</b>使用 P+產品 ID 尋找特定產品，例如 <b class=\"text-green\">P</b><i class=\"text-yellow\">360</i>。",
      quotes:
        "<b>精確片語：</b>使用引號搜尋精確短語，例如，<b class=\"text-green\">\"</b><i class=\"text-yellow\">此處的文字</i><b class=\"text-green\">\"</b>。",
      tax: "<b>稅務資料：</b>使用「稅：」搜尋具有特定稅務資料的產品，例如 <b class=\"text-green\">tax:</b><i class=\"text-yellow\">稅務資料名稱</i>。",
      new_products:
        "<b>新產品：</b>尋找在特定日期範圍內新增的產品，例如<b class=\"text-green\">new~</b><i class=\"text-yellow\">2023-08-10</i><b class=\"text-green\">~</b><i class=\"text-yellow\">2023-08-20</i>。",
    },
  },

  /**
   * @see LAugmentForm
   */
  augment_form: {
    title: "项目",
    subtitle:
      "輸入要與頁面內容中對應的值進行交換的鍵。鍵最多應包含 32 個字元。",
    add_caption: "项目 新的 物品",
    add_sub_caption: "新增自訂鍵值對。",
    add_dialog: {
      title: "项目 輸入 類型",
      html: {
        title: "项目 & HTML",
        subtitle: "該項目的值可以指定為文字或 HTML。",
      },
      image: {
        title: "圖片",
        subtitle: "您可以上傳圖片。",
      },
    },
    help_dialog: {
      title: "如何使用動態內容",
      how_it_works_tips:
        "在登陸頁面中，您可以靈活地為文字和圖像指定動態佔位符。這些佔位符在根據上下文自訂內容方面發揮著重要作用。   這些佔位符的動態性質允許它們由增強值填充，這些值可以根據不同的因素而變化。例如，每個產品或類別的增強值可能不同。當您擁有多種具有不同屬性的物品時，此功能的真正優勢就會發揮出來。您可以有效地利用這些動態佔位符來個性化和增強每個項目的顯示，從而在您的登陸頁面上創建獨特的互動體驗。",
      assign_tips:
        "若要將動態值指派給影像，請按一下該部分左側的供給按鈕。",
      set_dynamic_image_tips:
        "現在您可以修改圖像 URL 並為其指派動態值。",
      enter_values_tips:
        "對於每個產品，您都可以指派專用的鍵值對。",
      result_tips:
        "這是頁面的最終結果，其中佔位符已替換為增強值。",
    },
  },

  /**
   * @see BLogisticProfileEditor
   */
  logistic_profile_editor: {
    languages: {
      title: "多語言",
      subtitle:
        "這是內容語言的清單。您可以為每種語言的物流檔案設定不同的內容。",
      add_caption: "项目 新的 文章",
      no_more_language: "不 更多的 项目!",
    },
    content: {
      title: "项目",
      subtitle:
        "您可以用多種語言自訂物流資料的內容。",

      language_input: "项目 文章 项目",
      delete_article: "刪除 文章",
      menu_tooltip: "自動翻譯/刪除文章",
    },
    translate_to: "项目 至",
    notifications: {
      translate: {
        message: "文章 项目 完全的 项目.",
      },
      save_article: {
        message: "文章已成功儲存。",
      },
      delete_article: {
        message: "文章已成功刪除。",
      },
    },
    delete_dialog: {
      message: "您確定永久刪除這篇文章嗎？",
      action: "是的，立即刪除",
    },
  },

  /**
   * @see LogisticProfilePage_Products
   */
  logistic_profile_products: {
    title: "產品",
    subtitle: "與此設定檔關聯的產品清單。",
  },
  /**
   * @see LogisticProfilePage_Setting
   */
  logistic_profile_setting: {
    title: "一般資訊",
    inputs: {
      name: {
        message:
          "該名稱會向您顯示，不會向公眾透露。",
      },
      accept_delete: {
        true_description:
          "此操作將刪除所有文章和個人資料連結。",
        true_title: "我確認要刪除此連線。",
      },
    },
    actions: {
      remove: "消除 輪廓 & 项目",
    },
  },

  /**
   * @see BPageShopLogisticProfiles
   */
  shop_logistic_profiles: {
    title: "後勤 簡介",
    add_caption: "项目 新的 輪廓",
    subtitle:
      "您可以在此處建立和編輯產品的保固和退貨政策，並將其分配給任何產品。您可以為不同類型的產品定義不同的保固政策。",
    add_dialog: {
      title: "創造 新的 物流 輪廓",
      config: {
        title: "一般資訊",
        subtitle:
          "選擇設定檔類型。它可以是指南、保固或多個產品之間共同共享的任何其他內容和材料。",
      },
      article: {
        title: "文章",
        subtitle:
          "建立此物流設定檔後，您可以新增更多語言。",
      },
      inputs: {
        name: {
          message:
            "該名稱會向您顯示，不會向公眾透露。",
          placeholder: "輸入設定檔的名稱...",
        },
      },
    },
  },

  /**
   * @see BPageShopLogisticIncludes
   */
  shop_logistic_includes: {
    title: "项目 項目 项目",
    add_caption: "项目 新的 物品",
    subtitle:
      "在這裡，您可以管理產品中包含的項目。為了確保您的商店外觀完美無瑕，請在所有產品中始終使用具有相似圖像圖案的商品，例如線框。",
    empty_list_msg: "包含的物品列表...",
    notifications: {
      delete: {
        message: "該項目已被刪除。",
      },
    },
    delete_dialog: {
      title: "刪除 项目 物品",
      message:
        "您確定要永久刪除該項目嗎？請注意，它也將從所有相關產品中刪除！",
      action: "项目, 刪除 项目",
    },
    actions: {
      edit_linked_page: "編輯連結頁面",
    },
  },

  /**
   * @see BIncludeItemAdd
   */
  include_item_add: {
    dialog_title_edit: "編輯 项目 物品",
    dialog_title_add: "創造 新的 项目 物品",

    title: "项目 物品",
    subtitle:
      "選擇一個簡短的標題，最好最多 2 到 3 個單字。使用方形影像，因為我們會自動將上傳的圖片調整為 256x256 方形格式。為了在所有模板中獲得最佳外觀，請使用具有透明背景的簡約圖像，並在整個產品中保持統一的圖案。",
    inputs: {
      title: {
        placeholder: "產品頁面上顯示的簡潔標題...",
      },
      code: {
        placeholder: "项目 代碼, 项目. 移動的_项目_项目",
        hint: "使用此程式碼可以簡化查找項目的搜尋過程。",
      },
      description: {
        placeholder: "關於該項目的簡短描述...",
        hint: "描述將用於 SEO，並且可能在產品頁面的某些自訂佈局上對使用者可見。",
      },
      image: {
        message: "最大限度 圖片 项目: 1MB",
      },
      path: {
        label: "頁面路徑",
      },
    },
    mode: {
      no_link: {
        title: "不 關聯",
      },
      external_link: {
        title: "外部鏈接",
        description: "設定指向外部 url 的連結。",
        tips: "您可以將任何 URL 附加到該項目。當使用者點擊產品頁面上的項目時，他們將被重新導向到該連結。",
      },
      internal_link: {
        title: "项目 關聯",
        description:
          "透過為此專案提供的增強資料建立動態頁面。",
        tips: "您可以將登入頁面與設定檔連結起來，並為其設定自訂路徑和動態內容。 Selldone 將為該專案產生動態連結。",
      },
    },
    notifications: {
      add: {
        message: "包含的項目已成功新增。",
      },
      edit: {
        message: "包含的項目已成功更新。",
      },
    },
  },
  /**
   * @see BPageShopLogisticReturns
   */
  shop_logistic_returns: {
    title: "回來 訂單",
    subtitle:
      "您的客戶可以退回實際訂單，您可以在訂單處理頁面上查看退貨要求或在此處存取完整的退貨訂單清單。",
  },
  /**
   * @see OReferralFees
   */
  referral_fees: {
    title: "项目",
    subtitle:
      "您從推薦中賺取的所有佣金的清單。佣金最多需要 30 天才能獲得批准並轉入您的錢包。",
  },
  /**
   * @see OReferralWallets
   */
  referral_wallets: {
    title: "錢包",
    subtitle:
      "在這裡您可以看到您賺取的佣金。您可以將佣金轉入您的銀行帳戶或 Selldone 錢包。",
    no_commission_yet: "您還沒有收到任何佣金。",
    no_wallet: "不 錢包!",

    withdraw_dialog: {
      title: "项目 委員會 项目",

      need_bank_info_message: "請先輸入您的銀行資料。",

      to_wallet: {
        title: "至 錢包",
        subtitle:
          "透過此選項，您可以將佣金轉移到您的 Seldone 錢包。請確保錢包與您的禮品錢包連接，並使用相同的貨幣。",
      },
      to_bank: {
        title: "至 銀行",
        subtitle:
          "透過此選項，您可以將佣金轉移到您的 Seldone 錢包。請確保錢包與您的禮品錢包連接，並使用相同的貨幣。",
      },
      inputs: {
        verify_to_wallet: {
          true_description:
            "我想將我的佣金轉入我的 Seldone 錢包。",
        },
        verify_to_bank: {
          true_description:
            "我驗證了我的銀行訊息，並且想將佣金轉入我的銀行帳戶。",
        },
      },
      actions: {
        withdraw_to_wallet: "项目 至 錢包",
        withdraw_to_bank: "项目 至 銀行",
      },
    },
    notifications: {
      request_transfer_to_bank_success:
        "您的請求已成功收到，我們將對其進行審核。",
    },
  },

  /**
   * @see OPageMonetizeReferral
   */
  monetize_referral: {
    copy_box: {
      message: "您可以將 <b>?ref={code}</b> 新增至任何 selldone 網址。",
    },
    intro: {
      title: "加入 Seldone 聯盟計劃",
      message:
        "Selldone 聯盟計劃簡單明了，專為您輕鬆賺錢而設計。分享您獨特的聯盟連結以邀請新用戶加入 Selldone，您將從他們進行的每筆交易中永遠賺取佣金。這包括來自訂閱、服務費、商店升級和所有其他收入來源的收入。開始賺取收入的一部分，不受時間或收入的任何限制。加入我們，將您的人脈變成穩定的收入！",
      why_join_selldone_affiliate: "為什麼這是一個獨特的機會？",
      reasons: [
        "它永遠持續下去！",
        "涵蓋所有訂閱和交易費用。從字面上看，是用戶在 Selldone 上的每筆付款。",
        "我們向使用您的連結註冊的任何人發送免費的 $99 優惠券。",
        "當您的等級升級時，您將從所有先前推薦的用戶中以新的費率賺取收入。",
      ],
    },
  },

  /**
   * @see LMenuLeftAssets
   */
  l_menu_left_assets: {
    no_asset_uploaded: "尚未上傳資產。",
  },

  /**
   * @see LMenuTopHome
   */
  l_menu_top_home: {
    hot_keys: "项目",
    click_to_view_all: "项目 至 看法 全部...",
    clone_tooltip: {
      title: "项目 風格",
      subtitle:
        "使用此工具可以複製字體、背景、邊距和邊框等樣式。請依照以下步驟複製樣式：",
      step_1:
        "啟動工具並將滑鼠懸停在文字、列或圖像上；遊標將變為移液器。",
      step_2: "按一下要複製其樣式的元素。",
      step_3:
        "遊標將變回調色板；按一下要套用複製樣式的元素。",
    },
    show_side_menu_tooltip: {
      subtitle:
        "切換側面選單的可見性，其中包括用於建立頁面的所有部分類別。",
    },
    sort_tooltip: {
      subtitle:
        "啟用此功能可以透過拖曳輕鬆地重新排列和組織部分。",
    },
    edit_mode_tooltip: {
      title: "編輯 / 預習 项目",
      edit_mode_title: "編輯 项目",
      edit_mode_msg: "將顯示所有編輯工具。",
      view_mode_title: "預習 项目",
      view_mode_msg:
        "透過隱藏額外的編輯工具和空白文字區域，以使用者看到的方式查看您的頁面。",
    },
    repository_tooltip: {
      title: "預製部分",
      subtitle:
        "切換預先設計的部分的顯示。這些部分是使用左側選單中可用的標準部分建立的，展示了該頁面建立器的靈活性。",
    },
    live_view: {
      title: "居住 預習",
      subtitle: "編輯頁面時即時查看更新。",
    },
    hotkeys_dialog: {
      title: "鍵盤快速鍵",
      augment_tips:
        "您可以將動態內容載入到頁面上，並將其替換為 <b>augment</b> 值。增強用於自訂動態頁面，例如<b>產品</b>、<b>類別</b>和<b>包含項目</b>。若要將影像設為動態加載，請點選<b>供稿器</b>，然後為該影像選擇<b>動態來源</b>。",
    },
    hotkeys: {
      ctrl_b: "開啟/關閉所選文字的粗體 | <b>讓我大膽</b>",
      ctrl_i: "開啟/關閉所選文字的斜體 | <i>使我斜體</i>",
      ctrl_l:
        "開啟/關閉所選文字的刪除線 | <s>擊穿我</s>",
      ctrl_u: "開啟/關閉所選文字的底線 | <u>在我底線</u>",
      ctrl_1:
        "減小所選文字的字體大小 | <small>讓我變小</small>",
      ctrl_2: "增加所選文字的字體大小 | <big>讓我變大</big>",
      ctrl_r: "刪除所選文字的所有格式|清理所有款式",
      ctrl_s: "儲存頁面",
      tab: "在縮放模式之間切換",
      ctrl_e: "啟用或停用克隆風格模式",
    },
  },

  /**
   * @see LPageEditorRepository
   */
  l_page_editor_repository: {
    title: "项目 & 项目",
    subtitle: "預建部分",
    add_dialog: {
      title: "项目 風俗 项目",
      configuration: {
        title: "設置",
        subtitle:
          "您可以儲存自訂設計的部分以供將來在頁面設計中使用。該商店中的所有管理員都可以存取這些已儲存的部分。",
      },
      image: {
        title: "圖片",
        subtitle: "清單中顯示的公共圖像。",
      },
      code: {
        title: "代碼",
        subtitle:
          "您可以從頁面建立器的左側部分複製並貼上元素程式碼。",
      },
      inputs: {
        title: {
          label: "標題",
          message: "這是公共標題。",
        },
        tags: {
          label: "標籤",
          message: "用於搜尋和分類元素。",
        },
        section: {
          message: "從頁面產生器複製該部分。",
        },
      },
    },
  },

  /**
   * @see BPageMarketplaceVendors
   */
  marketplace_vendors: {
    title: "项目 列表",
    subtitle:
      "在此處新增供應商，然後將其指派給產品儀表板 > 供應商中的產品。",
    add_new_vendor_action: "项目 新的 项目",
    status_tooltip: {
      title: "项目 地位",
      ACCEPTED: "供應商可以訪問他們的面板。",
      REJECTED: "供應商的請求已被拒絕。",
      PENDING: "該請求正在等待供應商的決定。",
    },
    number_of_products: "產品數量",
    invited: "项目",
    no_pricing: "不 價錢",
    no_pricing_tooltip: {
      title: "默認 價錢 計劃",
      subtitle: "請為供應商設定預設定價模型。",
    },
    updated_products_tooltip: {
      title: "過去 24 小時內更新的產品",
    },
    added_products_tooltip: {
      title: "過去 24 小時內新增的產品",
    },
    access_tooltip: {
      title: "项目 使用權",
      subtitle:
        "供應商可以訪問他們的面板。您可以在「供應商」>「存取」標籤中編輯此內容。",
    },
    reject_by_user_tooltip: {
      title: "被拒絕 项目 用戶",
      subtitle:
        "用戶拒絕成為供應商並存取該供應商的請求。",
    },
    download_all_vendors: "项目 全部 项目",
    bulk_import: "批次匯入（Excel）",
  },

  /**
   * @see BShopLicenseNeedUpdateOverlay
   */
  shop_license_need_update_overlay: {
    title: "需要升級許可證！",
    subtitle:
      "您目前的許可證不符合您所選業務模式的要求。請將您的許可證升級到企業計劃。",
  },

  /**
   * {@see BOrderChatBox}
   */
  b_order_chat_box: {
    title: "项目 行動",
    subtitle:
      "您只需單擊即可向買家發送狀態更新電子郵件。此外，您可以在此處定義公共訊息以供重複使用，因此不必每次都重寫它們。",
    send_update_email_action: "發送 更新 電子郵件",
    add_template_action: "项目 信息 模板",

    notifications: {
      add_chat_success_message: "訊息已新增成功。",
    },

    send_update_email: {
      title: "命令 更新 電子郵件",
      need_set_service_alert: {
        message:
          "請設定您的電子郵件服務提供者以允許發送電子郵件。",
        action: "项目 至 設置",
      },
      send_action: "發送 更新 電子郵件",

      notifications: {
        send_success_message: "電子郵件已成功發送。",
      },
    },
    add_template: {
      edit_title: "編輯 信息 模板",
      add_title: "项目 信息 模板",
      message:
        "您應該在此處設定標題和訊息正文。此標題僅供您參考，不會發送給客戶。",

      save_action: "節省 模板",
      add_action: "项目 模板",

      notifications: {
        save_success_message: "模板已成功儲存。",
      },

      inputs: {
        title: {
          label: "模板 標題",
          placeholder: "寫一個短標題...",
        },
        body: {
          label: "模板 信息",
          placeholder: "在這裡寫下您的留言...",
          messages:
            "您可以透過 {order_id} 和 {buyer_name} 設定動態值。",
        },
      },
    },
  },

  /**
   * {@see BOrderShare}
   */
  b_order_share: {
    title: "命令 關聯",
    subtitle: "您可以與客戶分享訂單連結。",
    guest_checkout_message:
      "訪客購物者可以在同一瀏覽器中自動查看他們的訂單。但是，如果客戶是訪客並且您需要共享訂單詳細信息，則可以為他們建立安全連結。",
    authentication: "项目",
    guest: "项目",
    click_to_create: "项目 至 創造...",
    valid_for_30_days: "有效期限30天",
    notifications: {
      secure_link_created: "安全連結已成功建立。",
    },
  },

  /**
   * {@see BPageShopCrmReviews}
   */
  shop_reviews: {
    title: "評論 项目",
    add_source_action: "项目 審查 项目",
    subtitle:
      "輕鬆連接外部平台，從 Facebook、Google 等來源收集和分析有關您業務的評論。我們會自動將客戶與其評論進行匹配，以獲得更好的客戶體驗。您也可以在登陸頁面和產品頁面上展示這些評論。",
  },

  /**
   * {@see BPageShopLogisticPropertySets}
   */
  shop_logistic_property_set: {
    add_caption: "新增新的屬性集",
    title: "屬性集",
    subtitle:
      "您可以在此處建立和管理屬性集。屬性集用於定義產品和服務的屬性。您可以在產品儀表板 > 編輯中將這些屬性集指派給產品。",
  },

  /**
   * {@see BProductProfilePropertySet}
   */
  product_property_set: {
    profile: {
      title: "屬性集 - 自訂變體",
      subtitle:
        "您可以自訂該產品的變體名稱，取代預設名稱。",
    },

    subtitle:
      "您可以在此處自訂變體名稱、圖示及其順序。對於具有超出預設六種獨特變體的產品，您可以設定針對每個產品量身定制的自訂變體。只需在物流 > 屬性集標籤中定義屬性集，然後根據需要將它們指派給任意數量的產品。",
    select_property_set: "選擇屬性集",
    add_property_set: "新增屬性集",
  },

  /** {@see BPageShopLogisticInventory} **/
  transportation_boxes: {
    title: "项目",
    add_action: "新增框",
    subtitle:
      "創建可重複使用的盒子尺寸以加快標籤購買速度並確保準確的運費。履行訂單時，選擇已儲存的盒子，其尺寸將自動填入。",
    empty: "還沒有盒子。按一下“新增框”。",
    edit: "編輯 项目",
    new: "新的 项目",
    default_weight: "默認 重量",
    updated: "盒子已更新。",
    created: "盒子已建立。",
    deleted: "项目 已刪除.",
  },

  /** {@see BBoxInput} **/
  transportation_boxes_input: {
    select_box: "選擇套餐",
    define_package: "定義一個包",
    define_package_hint: "建立或編輯您的預定義包裹尺寸",
  },























  /** {@see BPageShopListing} **/
  listing:{
    name:"项目",
    message:"為任何類型的清單（房產、飯店、醫生、服務等）建立可搜尋、審核的目錄。"
  },

  shop_listing: {
    name: "项目",
    message:
      "為任何類型的清單（房產、飯店、醫生、服務等）建立可搜尋、審核的目錄。",

    items: {
      title: "項目",
      sub_title:
        "建立、編輯和管理清單項目。控制狀態、定價、聯絡資訊和媒體。",

      empty_title: "不 項目 项目",
      empty_subtitle:
        "建立您的第一個清單項目以開始建立您的目錄。",

      add_title: "项目 物品",
      edit_title: "編輯 物品",

      price_to: "價格 至",
      price_unit: "價格 單元",
      is_featured: "项目",

      meta_json: "Meta JSON",
      links_json: "鏈接 JSON",
      opening_hours_json: "開放時間 JSON",

      delete_title: "刪除 物品",
      delete_message: "您確定要刪除該項目嗎？",
      delete_success: "項目已成功刪除。",
      restore_success: "項目恢復成功。",

      opening_hours:"開放時間",
      form_fields:"表單字段",

      company: "公司",
      badges: "项目",

    },

    categories: {
      title: "類別",
      sub_title:
        "使用類別和子類別組織您的目錄。這改進了導航和過濾。",

      empty_title: "不 類別 项目",
      empty_subtitle:
        "建立類別來建立您的清單並改進瀏覽。",

      add_title: "添加類別",
      edit_title: "編輯類別",

      parent_filter: "按父級過濾",
      parent: "父類",

      price_format: "價格 项目",
      icon: "圖標",
      design_id: "設計 ID",

      delete_title: "刪除類別",
      delete_message: "您確定要刪除該類別嗎？",
      delete_success: "類別 已刪除 项目.",
      form_schema: "類別表單字段",
    },

    options: {
      submission_title: "项目",
      submission_enabled: "使能夠 项目",

      moderation_title: "项目",
      moderation_mode: "審核模式",
      require_first_approved_before_more: "需要先獲得批准才能進行更多操作",

      limits_title: "限制",
      max_pending_per_user: "最大限度 待辦的 项目 用戶",
      max_items_per_user: "最大限度 項目 项目 用戶",
      limits_hint: "限制 项目",

      templates_title: "项目",
      card_template: "卡片 模板",
      details_template: "細節 模板",

      form_schema_title: "表單架構",
      settings_title: "项目 設置"
    },

    supervision: {
      title: "项目",
      sub_title:
        "查看提交的項目並決定接下來發生的事情：批准、發布、拒絕、存檔或重置為待處理。",

      empty_title: "不 項目 至 審查",
      empty_subtitle:
        "當用戶提交新項目時，它們將出現在此處進行審核。",

      review_title: "審查 物品",
      approve_publish: "项目 & 發布",

      submitted_at: "项目",
      quick_actions: "项目 行動",

      open_review: "项目 審查",
      reset_to_pending: "项目 至 待辦的",
      items_title: "項目",

    },

    moderation: {
      approve_success: "項目已成功批准。",
      publish_success: "物品 發表 项目.",
      unpublish_success: "項目已成功取消發布。",
      archive_success: "專案已成功存檔。",
      reject_success: "物品 被拒絕 项目.",
      penalty_success: "處罰成功。",

      reject_title: "拒絕 物品",
      reject_reason: "拒絕原因",

      penalty: "项目",
      penalty_title: "项目",
      penalty_points: "罰分",
      penalty_note: "项目 筆記"
    },

    media: {
      upload_images: "项目 圖片",
      url_type: "類型",
      url: "URL",
      is_main: "設定為主"
    },






    /** {@see BShopListingDesignsList, BShopListingDesignUpsert} **/
    designs: {
      title: "项目",
      sub_title:
        "建立多個設計集（卡片+詳細資訊範本）並將它們指派給類別。類別可以使用不同的設計。",

      empty_title: "還沒設計",
      empty_subtitle:
        "新增您的第一個設計集以開始自訂類別的外觀。",

      add_title: "项目 設計",
      edit_title: "編輯 設計",

      card_template: "卡片 模板",
      details_template: "細節 模板",

      notifications: {
        add_success: "設計創建成功。",
        edit_success: "設計更新成功。",
        delete_success: "設計 已刪除 项目.",
      },

      delete_title: "刪除 設計",
      delete_message:
        "刪除這個設計嗎？使用它的類別將自動丟失 design_id。",
    },





    badges: {
      title: "项目",
      sub_title:
        "建立和管理店面徽章。可以將徽章指派給清單項目以反白顯示特殊屬性。",

      empty_title: "還沒有徽章",
      empty_subtitle:
        "新增您的第一個徽章以開始突出顯示清單項目。",

      add_title: "添加徽章",
      edit_title: "編輯 项目",

      notifications: {
        add_success: "徽章創建成功。",
        edit_success: "徽章更新成功。",
        delete_success: "项目 已刪除 项目.",
      },

      delete_title: "刪除 项目",
      delete_message: "您確定要刪除此徽章嗎？",
    },

    companies: {
      title: "公司",
      sub_title:
        "創建和管理公司。每個清單項目都可以選擇連結到一家公司。",

      empty_title: "不 公司 项目",
      empty_subtitle:
        "新增您的第一家公司以將其連結到清單項目。",

      add_title: "项目 公司",
      edit_title: "編輯公司",

      notifications: {
        add_success: "公司創建成功。",
        edit_success: "公司更新成功。",
        delete_success: "公司 已刪除 项目.",
      },

      delete_title: "刪除 公司",
      delete_message:
        "刪除這家公司？使用它的項目將自動丟失公司連結。",
    },



    messages: {
      title: "项目",
      sub_title: "管理使用者從清單設定檔發送的訊息。",
      empty_title: "不 项目",
      empty_subtitle: "用戶發送的訊息將顯示在這裡。",

      sender: "项目",
      item: "物品",
      has_reply: "项目",
      has_reply_yes: "已回覆",
      has_reply_no: "不 项目",

      dialog_title: "信息",
      owner_reply: "所有者 项目",
      reply: "项目",
      reply_hint: "寫一封回覆給用戶。您也可以透過操作將郵件標記為已讀/垃圾郵件。",

      mark_read: "標記為已讀",
      mark_unread: "標記為未讀",
      archive: "项目",
      unarchive: "项目",
      mark_spam: "標記為垃圾郵件",
      mark_not_spam: "不是垃圾郵件",

      delete_confirm: "刪除 项目 信息?",
    },

    enable: {
      title: "项目",
      subtitle: "啟用或停用您的公開清單頁面。首次啟用時，Selldone 將自動建立清單配置。",
      true_description: "清單已啟用。客戶可以瀏覽清單頁面。",
      false_description: "清單已停用。清單頁面和提交內容被阻止。",
      open_listing: "公開上市",
      note: "您稍後可以在清單設定中設定審核、限制、表單和設計。",
      vendor_prereq_text:
        "希望供應商從其供應商面板添加清單項目？首先，將您的業務模式切換到 Marketplace。",
      vendor_prereq_button: "設定市場商業模式",

      vendor_access_text:
        "現在您可以決定供應商是否可以存取清單功能（商品+公司）。在市場設定中啟用它。",
      vendor_access_button: "啟用供應商列表",

      more_options_text:
        "清單設定中提供了更多控制項。您可以設定輸入、UI/外觀、審核、限制和貨幣化選項。",
      more_options_button: "项目 至 项目 設置",

      updated: "清單已更新。",
      update_failed: "项目 至 更新 项目.",
    },


    search: {
      title: "项目 設置",
      subtitle: "設計客戶搜尋您的清單的方式。啟用基於位置的搜尋並從自訂表單欄位建立篩選器。",

      location_title: "地點 项目",
      location_subtitle: "允許客戶選擇一個位置並在可配置的半徑內找到附近的結果。",
      location_enabled_true: "位置過濾器已啟用。客戶可以根據距離進行搜尋。",
      location_enabled_false: "位置過濾器已停用。結果不會按距離過濾。",

      radius_default: "默認 半徑 (项目)",
      radius_default_hint: "當客戶選擇位置但未選擇半徑時使用。",
      radius_max: "项目 半徑 (项目)",
      radius_max_hint: "店面半徑將被限制為該值。",
      radius_options: "半徑 项目 (项目)",
      radius_options_hint: "這些值可以在店面 UI 中顯示為快速選項。",

      filters_title: "项目 過濾器",
      filters_subtitle: "新增從項目元欄位（您的清單/類別表單欄位）讀取值的篩選器。使用自動產生從已發布的項目中收集實際選擇權。",
      no_filters: "尚未添加過濾器。",
      auto_generate: "自動產生選項",

      filter_field: "字段鍵",
      filter_label: "標籤",
      filter_type: "類型",
      filter_options: "项目",
      filter_options_hint: "對於選擇過濾器，選項可以是手動的或產生的。",
      multiple: "项目",
      single: "项目",
      kv_mode: "项目/價值 项目",

      requires_listing_active: "列表未啟動。首先啟用清單以在店面使用它。",


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
        "已完成銷售付款",
        "供應商佣金支付。",
        "交易成功完成。",
        "最近銷售的匯款。",
        "供應商服務成功轉移。",
      ],
      /**
       * Reverse fund
       */
      reverse_fund_reason: [
        "資金回饋：從銀行轉帳到供應商的錢包。",
        "供應商錢包儲值：從銀行帳戶轉回資金。",
        "反向交易：銀行到供應商錢包的資金轉帳。",
        "退款：銀行存款退回至供應商的錢包。",
        "資金逆轉：從銀行補充供應商的錢包。",
      ],
    },

    /**
     * Email Marketing
     */
    shop_email: {
      name: [
        "超級優惠週末狂歡",
        "獨家內線交易揭曉",
        "您可享有高級折扣的 VIP 待遇",
        "季節性特賣盛宴",
        "解鎖您的購物天堂",
        "大購物者嘉年華",
        "春季狂歡購物狂歡",
        "您無法抗拒的秋季優惠",
        "冬季奇蹟：寒冷日子的溫馨優惠",
        "夏末清倉倒數",
        "黑色星期五富礦：早鳥優惠",
        "你好假期：您的禮物指南及更多內容",
        "新鮮發現：專為您打造的新品",
        "忠誠度獎勵：內部獨家折扣",
      ],
      subject: [
        "⏰ 限時優惠！立即獲取您的最愛",
        "🌼 新季節，新款式 - 探索我們的最新系列",
        "👑 專屬 VIP 特賣",
        "💃 我們的新品令人矚目",
        "🔚 享受所有商品 20% 折扣的最後機會",
        "🎁 送給您的禮物：內含 10 美元積分！",
        "☀️ 透過我們的熱銷活動為夏天做好準備",
        "🛍️ 升級你的衣櫃 - 你值得擁有",
        "👀 先睹為快：新產品即將推出！",
        "🎂生日快樂！您的特別禮物正在等待著",
        "🖤 黑色星期五優惠你準備好了嗎？",
        "🎯 精選精選 - 個人化購物體驗",
        "🍹 是時候犒賞自己了 - 週末閃購！",
        "🧹 季末清倉 - 一切都必須結束！",
        "🚀 你賺到了！下一個訂單免運費",
        "📢 不要錯過 - 您的願望清單商品正在促銷",
        "🏡 用我們的居家裝飾系列為您的家帶來歡樂",
        "🎉 專屬於您的驚喜！揭開你的神秘折扣",
      ],
    },

    /**
     * Discount code
     */
    discount_code: {
      code: [
        "歡迎10",
        "20年夏季",
        "VIPSALE30",
        "生日15",
        "黑色星期五",
        "網路星期一",
        "免運費",
        "閃購",
        "清除",
        "早起的鳥兒",
        "學生10",
        "冬季25",
        "15年春季",
        "2020秋季",
        "暢銷書10",
        "假期30",
        "情人節20",
        "母親節",
        "父親節",
        "年末",
      ],
      title: [
        "閃購：20% 折扣！",
        "VIP 搶先體驗折扣",
        "週末優惠：立即節省！",
        "立即享 15% 折扣",
        "夏季促銷：額外 10% 折扣",
        "清倉大拍賣!省大錢",
        "特別優惠：免費送貨",
        "買二送一：僅限今天！",
        "節慶特惠：25% 折扣",
        "獨家 30% 折扣",
        "驚喜！額外 20% 折扣",
        "季節性節省",
        "周中瘋狂：10% 折扣",
        "即將結束：所有商品 15% 折扣",
        "家人和朋友：20% 折扣",
        "這個週末大優惠",
        "黑色星期五：40% 折扣",
        "先睹為快折扣：30% 折扣",
      ],
      description: [
        "索取您的特別優惠！時間不多了。",
        "匆忙！獨家優惠在您的購物車中等待著。",
        "只需點擊一下即可節省大量費用！",
        "在這筆交易消失之前充分利用它。",
        "特價折扣等待！不要錯過。",
        "透過我們的優惠提升您的購物熱情！",
        "您的下一個訂單可能比您想像的要少！",
        "現在是獲得您想要的物品的最佳時機。",
        "一點小事讓你的一天變得更美好。",
        "準備好保存了嗎？驚喜折扣正在等待！",
        "因為您很特別，所以這裡有特別優惠。",
        "你注意到什麼了嗎？這是一個輕推！",
        "沒有比現在更值得省的時間了。",
        "不要錯過這個優惠！太好了，不容錯過。",
        "好消息！您的購物變得更便宜了。",
        "快點，你的獨家折扣即將結束！",
        "在此對您的忠誠表示一點感謝。",
      ],
    },
    /**
     * Coupon
     */
    coupon: {
      title: [
        "節省開支",
        "解鎖折扣",
        "超級節省",
        "獨家優惠",
        "獎金儲蓄",
        "貴賓折扣",
        "特價",
        "額外節省",
        "折扣提醒",
        "預算幸福",
        "經濟喜悅",
        "價值富礦",
        "減價",
        "快樂儲蓄",
        "節省更多，購物更多",
        "閃購",
        "討價還價賞金",
        "即時節省",
        "每日特惠",
        "季節性偷竊",
      ],
      description: [
        "享受我們的甜蜜優惠！為您下次購買節省開支。",
        "我們重視我們的客戶 - 利用這項獨家優惠。",
        "以更少的成本獲得更多您喜愛的東西。我們有折扣！",
        "準備好保存了嗎？獨家優惠正在等待！",
        "因為你很特別！下次訂單可享折扣。",
        "犒賞自己，盡情購物，省錢！",
        "準備好盡情購物吧——而且還能省錢！",
        "以特別折扣慶祝這個季節。",
        "我們以獨家折扣來感謝我們的忠實客戶。",
        "在下次購買時釋放令人難以置信的節省。",
        "查看您的專屬儲蓄。",
        "發現我們的驚喜折扣！",
        "透過我們的獨家優惠升級您的購物體驗。",
        "透過我們的特別優惠快速啟動您的儲蓄。",
        "犒勞一下自己，享受一些額外的東西——特別折扣。",
        "您的下一次購物之旅將變得更實惠！",
        "因為有折扣購物比較有趣。",
      ],
    },

    /**
     * Offer
     */
    offer: {
      title: [
        "捆綁並節省大量！",
        "買越多，省越多！",
        "為精明購物者提供精明優惠",
        "折扣提醒！捆綁優惠",
        "組合優惠 - 少花錢多辦事",
        "捆綁包獨家優惠",
        "讓您的錢花得更多！",
        "捆綁時保存",
        "組合特別優惠",
        "商店可節省巨額費用！",
        "最超值套餐",
        "限時捆綁優惠",
        "組合大折扣",
        "精選商品智能省錢",
        "無與倫比的捆綁優惠",
        "多次購買可享折扣",
        "現在以更少的價格加倍",
        "大量購買 = 大節省",
      ],

      description: [
        "捆綁精選產品可節省大量成本。抓緊時間，限時優惠！",
        "智能優惠等待您！一起購買我們重點推薦的商品可節省更多。",
        "探索明智的儲蓄方式！捆綁您最喜歡的產品並觀看價格下降。",
        "組合購買指定商品可享獨家優惠。現在就採取行動吧！",
        "買越多，省越多！我們的特殊產品套裝提供無與倫比的折扣。",
        "透過我們的特別優惠明智地購物。特定產品捆綁包可享折扣價。",
        "花更少的錢獲得更多！購買我們精選的捆綁包可享受驚人的折扣。",
        "捆綁時節省大量！精選商品限時獨家優惠。",
        "合併並保存！一起購買我們精選的產品可享獨家折扣。",
        "你買的越多，你越省錢！透過我們的特殊捆綁包變得聰明起來。",
      ],
    },

    /**
     * Gift card type
     */
    gift_card_type: {
      title: [
        "請你自便！",
        "只為你！",
        "開心購物！",
        "盡情享受我們吧！",
        "放縱一點",
        "因為你很特別",
        "一點驚喜",
        "讓你開心一天",
        "獻給你",
        "傳播歡樂",
        "愛的禮物",
        "愉快購物",
        "感謝信",
        "揮霍的時間",
        "品味這一刻",
        "找到你最喜歡的",
        "這是你的選擇",
        "表達自己",
        "發現魔法",
        "釋放你的風格",
      ],
    },

    /**
     * Refund vendor order
     */
    vendor_refund_order: {
      note: [
        "資金已從您的虛擬錢包中扣除並返回市場錢包。",
        "退款已發放，減少了您的虛擬錢包餘額。",
        "退款完成。市場錢包已從您的虛擬錢包補充。",
        "您的虛擬錢包已扣除最近向市場錢包退款的費用。",
        "由於最近的退款，您的虛擬錢包資金已被調整。",
        "退款已進行，並從您的虛擬錢包中扣除金額。",
        "由於退款至市場錢包，您的虛擬錢包餘額已減少。",
        "退款交易已發生，將資金從您的虛擬錢包轉移回市場。",
      ],
    },

    /**
     * Product
     */
    product: {
      warranty: [
        "24 個月黃金保證",
        "兩年白金保護",
        "36 個月鑽石保證",
        "銀盾：一年保固",
        "2年菁英保證",
        "24 個月的高級保障",
        "銅級備份：一年保固",
        "3 年最終正常運轉時間保證",
        "24 個月安全服務承諾",
        "36 個月安心保護",
      ],
      pros_name: [
        "效率提升",
        "經濟高效的解決方案",
        "品質保證",
        "方便使用的",
        "省時間",
        "可靠性保證",
        "用途廣泛",
        "尖端技術",
        "環保",
        "卓越的性能",
      ],

      pros_value: [
        "透過快速且有效率的操作節省大量時間。",
        "採用先進技術實現無與倫比的性能。",
        "降低成本並提高生產力。",
        "提供使用者友善的介面，方便導航。",
        "保證可靠且一致的性能。",
        "提供跨各種任務的多功能應用程式。",
        "採用環保材質和工藝。",
        "採用尖端技術設計，實現卓越效果。",
        "高品質設計確保持久耐用。",
        "提供全天候客戶支援。",
      ],

      cons_name: [
        "昂貴的投資",
        "相容性有限",
        "複雜的設定",
        "需要培訓",
        "表現不佳",
        "缺乏多功能性",
        "有限支持",
        "經常維護",
        "高能耗",
        "壽命短",
      ],

      cons_value: [
        "與替代方案相比，初始投資更高。",
        "可能不與所有系統或設備相容。",
        "設定過程可能相當複雜。",
        "使用時可能需要額外的訓練。",
        "性能可能無法滿足所有期望。",
        "功能有限或缺乏通用性。",
        "客戶支援可能無法全天候提供。",
        "需要頻繁維護，導致成本較高。",
        "消耗大量能源，影響公用事業成本。",
        "產品的使用壽命可能沒有預期的那麼長。",
      ],
    },

    /**
     * Blog Category
     */
    blog_category: {
      category: [
        "技術見解",
        "美食家發現",
        "旅行故事",
        "健康小貼士",
        "時尚寵兒",
        "商業熱潮",
        "生活方式故事",
        "體育動態",
        "藝術亮點",
        "育兒指南",
      ],
      description: [
        "發現各種主題的富有洞察力的文章。",
        "探索我們內容豐富的部落格文章集。",
        "隨時了解我們引人入勝的部落格類別內容。",
        "透過我們發人深省的部落格類別文章尋找靈感。",
        "透過我們多樣化的部落格類別主題擴展您的知識。",
        "隨時了解我們迷人的部落格類別見解。",
        "深入研究我們有趣的部落格類別內容。",
        "在我們的部落格類別檔案中發現有價值的資訊。",
        "從我們精心策劃的部落格類別中學習新事物。",
        "參與我們豐富的部落格類別文章和貼文。",
      ],
    },

    /**
     * Partner Plan
     */
    partner_plan: {
      name: [
        "入門包",
        "基本計劃",
        "專業套房",
        "企業版",
        "高級等級",
        "高級套餐",
        "最終解決方案",
        "精英級別",
        "成長加速器",
        "白金電源",
      ],
    },

    /**
     * Tax Profile
     */
    tax_profile: {
      name: [
        "食品",
        "電子設備",
        "服飾服飾",
        "書籍和文具",
        "健康與美容產品",
        "家具",
        "體育用品",
        "玩具和遊戲",
        "珠寶及配件",
        "汽車零件",
        "花園與戶外",
        "廚具",
        "居家裝飾",
        "樂器",
        "寵物用品",
        "鞋類",
        "箱包及行李箱",
        "辦公用品",
        "五金工具",
        "雜貨",
      ],

      label: [
        "VAT", // Value-Added Tax
        "GST", // Goods and Services Tax
        "PST", // Provincial Sales Tax
        "HST", // Harmonized Sales Tax
        "QST", // Quebec Sales Tax
        "CST", // Central Sales Tax
        "消費稅", // Excise Tax
        "進口關稅", // Import Duty
        "服務稅", // Service Tax
        "奢侈稅", // Luxury Tax
      ],
    },
    /**
     * Cluster
     */
    cluster: {
      name: [
        "銷售亮點",
        "促銷代碼",
        "特色活動",
        "新品上市",
        "最暢銷",
        "季節性特價",
        "優惠有限",
        "活動優惠",
        "貴賓專享",
        "清倉物品",
        "假日套餐",
        "主題合集",
        "品牌展示",
        "會員最愛",
        "閃購折扣",
        "選購必需品",
        "數位資源",
        "禮物創意",
        "環保精選",
        "員工推薦",
      ],
    },

    /**
     * Popup
     */
    popup: {
      title: [
        "特價！",
        "新品上市",
        "有限的時間",
        "折扣提醒！",
        "獨家優惠",
        "熱賣！",
        "清關提醒",
        "免運費",
        "裡面有禮物！",
        "贏得獎品",
        "會員福利",
        "閃購",
      ],
    },

    /**
     * Campaign
     */
    campaign: {
      name: [
        "盡情購物",
        "購物車狂熱",
        "閃購嘉年華",
        "點擊、購買、儲存",
        "便宜貨",
        "電子交易盛宴",
        "超級降價瘋狂",
        "網路儲蓄熱潮",
        "數位折扣日",
        "電商嘉年華",
        "網上奧特萊斯綠洲",
        "零售熱潮",
        "網上商店倉庫銷售",
        "電子購物者的天堂",
        "虛擬優惠券創投",
        "數位門禁",
        "試車清倉",
        "網購對決",
        "精彩網路促銷",
        "電子討價還價閃電戰",
      ],
    },

    /**
     * Valuation
     */
    valuation: {
      title: [
        "T卹客製定價",
        "手工珠寶估價",
        "個性化鞋子定價",
        "客製化藝術品估價",
        "訂製西裝定價",
        "電子產品客製化成本",
        "個人化香水估價",
        "客製化袋定價",
        "訂製禮服估價",
        "個性化書籍封面定價",
        "訂製家具估價",
        "客製化手錶定價",
        "個人化玩具估價",
        "客製化帽子定價",
        "客製化護膚產品估價",
        "客製化家居裝飾定價",
        "定制廚具估價",
        "個性化文具定價",
        "客製化髮飾估價",
        "客製化運動器材定價",
      ],
      structure: {
        title: [
          "T卹印花設計",
          "珠寶金屬類型",
          "鞋材選擇",
          "藝術框尺寸",
          "西裝布料選擇",
          "小工具顏色選項",
          "香水香氣簡介",
          "袋子材質及尺寸",
          "洋裝長度和款式",
          "書籍封面材料",
          "家具木型",
          "錶帶材質",
          "玩具客製化功能",
          "帽子尺寸和顏色",
          "護膚成分偏好",
          "家居裝飾主題",
          "廚具材質",
          "文具紙類型",
          "髮飾材質",
          "運動器材尺寸",
        ],
      },
    },

    /**
     * Lottery
     */
    lottery: {
      title: [
        "旋轉並贏得大獎！",
        "幸運輪大獎",
        "幸運旋轉富礦",
        "旋轉贏取獎勵",
        "財富之輪",
        "幸運彩券盛宴",
        "超級旋轉驚喜",
        "獎品輪嘉年華",
        "寶藏旋轉壯觀",
        "旋轉輪子魔法",
        "幸運大轉盤",
        "財富的眷顧",
        "奇蹟之輪",
        "旋轉致富",
        "大獎旋轉者的喜悅",
        "金轉彩票",
        "旋轉獎品",
        "命運之輪",
        "幸運旋轉展示",
        "終極旋轉獎勵",
      ],
      description: [
        "轉動轉盤就有機會贏得獨家優惠！",
        "試試你的運氣－我們的幸運輪裡有驚喜獎品等著你！",
        "每次旋轉都能贏取大獎——刺激的獎勵等你來拿！",
        "旋轉即可獲勝！每次都有驚喜禮物和優惠。",
        "您有機會獲得大獎 - 旋轉輪盤即可獲得即時獎品！",
        "每次旋轉都會獲得獨家獎勵 - 您會是幸運者嗎？",
        "旋轉並獲勝！揭開我們商店的命運之輪中隱藏的寶石。",
        "透過我們的輪盤獲得幸運——獎品、折扣等等！",
        "每一次旋轉都是一場勝利－今天就獲得您的特別獎品！",
        "轉動方向盤，驚喜不斷－您會贏得什麼？",
        "透過旋轉釋放財富——令人興奮的商店獎勵等待著您。",
        "旋轉即可揭曉您的獎品——折扣、禮物等等！",
        "每天旋轉一次，保持遊戲的興奮感 - 贏得獨特的獎品！",
        "轉動我們的幸運大轉盤，獲得獨家商店美食。",
        "幸運旋轉帶來幸運勝利 - 立即領取您的獎品！",
        "您的旋轉可以解鎖驚人的購物獎勵！",
        "旋轉就有機會獲得獨家優惠和優惠。",
        "命運之輪正在轉動——抓住你的幸運獎品！",
        "旋轉、獲勝和微笑——每轉一圈都有驚喜獎勵。",
        "旋轉一下，讓命運決定您的獎品！",
      ],
    },

    /**
     * Subscription Price
     */
    subscription_price: {
      title: [
        "项目 使用權",
        "高級會員資格",
        "黃金套餐",
        "项目 計劃",
        "项目 訂閱",
        "企業級",
        "入門包",
        "無限 提供",
        "家庭套裝",
        "專業套房",
      ],
      description: [
        "非常適合探索基礎知識的個人。",
        "存取所有高級功能和內容。",
        "專屬福利和優先支援。",
        "適合一般使用者的平衡包。",
        "終極訪問和頂級福利。",
        "為大型組織客製化解決方案。",
        "經濟實惠的入門選擇。",
        "對於進階用戶來說，沒有使用限制。",
        "適合最多 4 名成員的家庭的特別計劃。",
        "專為尋求先進工具的專業人士而設計。",
      ],
    },

    spec: {
      group: [
        "技術規格",
        "物理尺寸",
        "表現 项目",
        "連線選項",
        "電源需求",
        "材料和建造質量",
        "顏色 项目 結束 项目",
        "儲存和記憶體",
        "作業系統相容性",
        "安全與合規",
        "包裝內容",
        "保固和支持",
        "品牌及製造商",
        "環保",
        "能源效率",
        "保養和維護",
        "自訂選項",
        "隨附配件",
        "用戶評分和評論",
        "定價和供貨情況",
      ],
    },

    avocado: {
      title: [
        "購買 收據",
        "銷售 项目",
        "命令 發票",
        "支付 發票",
        "项目 收據",
        "交易 项目",
        "計費 项目",
        "查看 收據",
        "命令 项目",
        "購買 命令 發票",
        "銷售量 收據",
        "项目 發票",
        "项目",
        "项目 發票",
        "產品 發票",
        "支付 收據",
        "訂單確認",
        "計費 發票",
        "查看 發票",
        "项目 發票",
      ],
      message: [
        "感謝您的購買！",
        "我們感謝您的惠顧。",
        "您的訂單正在運送中！",
        "感謝您與我們一起購物。",
        "期待再次為您服務。",
        "您的滿意是我們的首要任務。",
        "不要忘記評價您的體驗。",
        "感謝您對本店的支持。",
        "我們希望您喜歡您的新購買！",
        "儲存您的發票以供日後參考。",
        "再次造訪我們以獲取更多優質產品。",
        "保持聯繫以獲得獨家優惠。",
        "感謝您成為尊貴的客戶。",
        "如果您需要協助，我們隨時為您提供協助。",
        "您的回饋有助於我們改進。",
        "下次購買時可享特別折扣。",
        "您做了一個很好的選擇！",
        "感謝您對我們的信任。",
        "期待您的回饋。",
        "我們團隊衷心感謝您。",
      ],
    },

    /**
     * Map Tag
     */
    map_tag: {
      title: [
        "房產展示",
        "供應商廣場",
        "特色住宅",
        "當地市場",
        "新品上市",
        "莊園花園",
        "購物區",
        "工匠胡同",
        "豪華莊園",
        "租賃中心",
        "開放日",
        "技術創新",
        "時尚巷",
        "工藝品角",
        "美食廣場",
        "書角",
        "珠寶 项目",
        "古玩大道",
        "健身區",
      ],
    },

    /**
     * Marketplace Documents (For vendors)
     */
    marketplace_document: {
      title: [
        "商業登記證",
        "納稅識別號碼 (TIN)",
        "供應商協議表",
        "產品 项目",
        "價錢 列表",
        "銀行 帳戶 細節",
        "地址證明",
        "保險憑證",
        "公司 輪廓",
        "品質保證證書",
        "项目 數據 项目 (SDS)",
        "產品保固資訊",
        "返回 项目",
        "運輸和處理程序",
        "客戶服務政策",
        "行銷和促銷計劃",
        "社群媒體連結",
        "貿易參考",
        "供應商行為準則",
        "保密協議 (NDA)",
      ],
    },

    /**
     * Expert Contract
     */
    expert_contract: {
      title: [
        "市場 設置 服務 项目",
        "店鋪配置合約",
        "项目 服務 项目",
        "數位行銷服務協議",
        "電商平台建置協議",
        "企業主專家諮詢合約",
        "市場配置服務協議",
        "商店設定和配置服務合約",
        "POD服務提供協議",
        "行銷策略實施協議",
        "業務發展服務合約",
        "项目 店鋪 設置 项目",
        "專家服務提供協議",
        "業務解決方案和設定合約",
        "風俗 店鋪 設置 服務 项目",
        "市場優化服務協議",
        "諮詢及安裝服務合約",
        "POD 项目 服務 项目",
        "行銷及推廣服務合約",
        "業務擴展服務協議",
      ],
    },

    /**
     * Account
     */
    account: {
      account_name: [
        "项目 錢包",
        "项目 帳戶",
        "個人的 錢包",
        "项目 錢包",
        "项目 帳戶",
        "基本的 錢包",
        "项目 帳戶",
        "项目 錢包",
        "交易 錢包",
        "项目 帳戶",
      ],
    },

    /**
     * Cashback
     */
    cashback: {
      title: [
        "購物並賺取現金回饋",
        "忠誠獎勵現金回饋",
        "獨家現金回饋優惠",
        "現金回饋富礦",
        "即時現金回饋優惠",
        "季節性現金回饋儲蓄",
        "雙倍返現日",
        "每次購買現金回饋",
        "現金回饋狂潮",
        "VIP 現金回饋計劃",
        "项目 時間 项目",
        "現金回饋獎勵俱樂部",
        "店鋪 更多的, 節省 更多的",
        "終極現金回饋獎勵",
        "現金回饋盛宴",
      ],
      description: [
        "每次購買均可賺取現金回饋！",
        "因您的忠誠而獲得獎勵。",
        "專為您提供的獨家現金回饋優惠。",
        "透過現金回饋獎勵享受巨額節省。",
        "所有您喜愛的商品均可即時回饋。",
        "透過季節性現金返還優惠節省更多。",
        "特殊日子雙倍返現！",
        "每次購物均可賺取現金回饋。",
        "今天就加入現金回饋狂潮吧！",
        "VIP會員尊享專屬返現。",
        "项目! 项目 時間 项目 優惠.",
        "立即加入我們的現金回饋獎勵俱樂部。",
        "项目 更多的 项目 店鋪, 项目 更多的 项目 節省.",
        "解鎖終極現金回饋獎勵。",
        "體驗周圍最好的現金回饋優惠。",
      ],
    },

    /**
     * Page
     */
    page: {
      prompts: [
        "歡迎來到 {shop} - 探索我們獨特的商品系列",
        "{shop} - 您優質商品和卓越服務的終極來源",
        "獨家優惠和優惠僅在 {shop} - 抓住機會！",
        "了解 {shop} 對生態友善和道德實踐的奉獻",
        "成為 {shop} 家族的一員 - 訂閱我們的電子報以獲取更新",
        "在 {shop} 深入了解熱門精選和高評價商品",
        "在{shop} 提出所有活動的想法和創意建議",
        "{shop} 提供無與倫比的優惠和限時特價 - 趕快行動！",
        "{shop} 全面的購買技巧和產品評估 - 放心購物",
        "聯絡 {shop} - 我們努力提供無與倫比的購物體驗",
      ],
    },

    /**
     * Cross-Selling
     */
    cross_selling: {
      message: [
        "完成你的造型，拿起套裝吧！",
        "透過我們的捆綁優惠節省大筆費用！",
        "不要錯過我們的完美搭配！",
        "增強您的購買體驗，附加元件等著您！",
        "解鎖專屬優惠，一起購買！",
        "補充商品，特別折扣！",
        "獲得更多，花費更少 – 捆綁起來！",
        "项目 提供: 项目 產品!",
        "升級您的體驗，組合優惠！",
        "發現我們精心策劃的組合，立即保存！",
        "將其配對以獲得終極組合！",
        "明智購物，捆綁並節省！",
        "雙倍價值，雙倍樂趣！",
        "您的完美搭配就在這裡 – 立即購買！",
        "專為您打造的獨家捆綁價格！",
        "透過我們的組合最大限度地節省您的費用！",
        "用這些精選來豐富您的收藏！",
        "為您精心策劃：配對並保存！",
        "完美的一天的完美搭配！",
        "捆綁您最喜歡的產品以節省額外費用！",
      ],
    },

    /**
     * Cross-Selling
     */
    vendor_pricing: {
      title: [
        "數位產品",
        "项目",
        "项目",
        "项目",
        "家 项目",
        "项目 產品",
        "運動器材",
        "玩具和遊戲",
        "雜貨",
        "家具",
        "汽車零件",
        "珠寶",
        "项目 & 项目",
        "寵物用品",
        "辦公用品",
        "项目 & 项目",
        "项目 & TV 项目",
        "軟件",
        "项目 & 项目",
        "戶外裝備",
      ],
    },

    /**
     * Template Message
     */
    template_message: {
      title: [
        "訂單確認",
        "命令 已發貨",
        "命令 發表",
        "支付 已收到",
        "命令 项目",
        "訂單處理延遲",
        "訂單暫停",
        "訂單出貨",
        "返回 项目",
        "退款已發出",
        "商品有貨",
      ],
      body: [
        "您好{buyer_name}，您的訂單#{order_id}已確認！我們正在處理它，並會在準備好發貨時通知您。",

        "好消息，{buyer_name}！您的訂單 #{order_id} 已出貨。您可以透過您的帳戶追蹤它。感謝您與我們一起購物！",

        "您好{buyer_name}，您的訂單#{order_id}已成功交付。我們希望您購買愉快。謝謝你！",

        "您好 {buyer_name}，我們已收到訂單 #{order_id} 的付款。您的訂單正在處理中，很快就會發貨。",

        "親愛的 {buyer_name}，我們很遺憾地通知您，您的訂單 #{order_id} 已被取消。如果您有任何疑問，請聯絡支援人員。",

        "親愛的 {buyer_name}，您的訂單 #{order_id} 遇到延遲。對於造成您的不便，我們深表歉意，並努力盡快解決。",

        "您好 {buyer_name}，您的訂單 #{order_id} 目前處於暫停狀態。請檢查您的帳戶或聯絡支援人員以取得更多詳細資訊。",

        "您好 {buyer_name}，您的訂單 #{order_id} 已出貨，應該很快就會送達您。感謝您的耐心等待！",

        "親愛的 {buyer_name}，我們已處理您訂單 #{order_id} 的退貨。如果您有任何疑問，請聯絡支援人員。",

        "您好 {buyer_name}，您的訂單 #{order_id} 的退款已發放。您應該很快就會看到您帳戶中的資金。",

        "您好 {buyer_name}，您訂單 #{order_id} 中的商品又有貨了！如果您仍然感興趣，現在可以下新訂單。",
      ],
    },

    /**
     * Property Set
     */
    property_set: {
      title: [
        "项目",
        "數位產品",
        "项目",
        "食品",
        "家具",
        "项目",
        "项目 產品",
        "项目",
        "運動器材",
        "项目",
      ],
      description: [
        "服裝的屬性，例如尺寸、顏色和布料。",
        "小工具的規格，例如品牌、型號和功能。",
        "飲料的口味、尺寸和類型。",
        "膳食、零食和食品的詳細資訊。",
        "项目, 项目, 项目 設計 项目.",
        "作者、類型和出版年份。",
        "皮膚類型、成分和包裝詳細資訊。",
        "年齡層、材料和安全標準。",
        "類型, 项目, 项目 表現 项目.",
        "项目, 项目, 项目 牌 細節.",
      ],
    },

    /**
     * Boxes
     */
    boxes: {
      name: [
        "项目 XS",
        "盒子S",
        "中號盒",
        "L號箱",
        "项目 XL",
        "项目 XXL",
        "盒子超薄",
        "箱寬",
        "盒子高",
        "平盒",
        "立方體",
        "箱管",
        "盒子易碎",
        "盒裝玻璃瓶",
        "盒裝軟包", // flexible mailer
        "盒裝襯墊", // bubble/padded
        "絕緣盒", // thermal
        "重型箱式",
      ],
    },
  },
};
