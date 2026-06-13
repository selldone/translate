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
    pay_today: "今天的付款",
    pay_yesterday: "昨天的付款",
    pay_last30days: "过去30天的付款",
    create_a_shop: "创建商店",
    start_free: "免费开始",
    featured_apps: "特色应用",
    more_apps: "更多的应用",
    my_public_profile: "我的公开个人资料",
    product_admin: "产品管理员",
    make_money_affiliate: "赚钱",
    see_live_shop: "查看在线商店",
    see_live_product: "查看在线产品",
    has_inputs: "有输入项",
    main_domain: "主域名",
    domains: "域名",
    home_page: "主页",
    google_icon_font_sample: "Google 项目 项目",
    fontawesome_icon_font_sample: "Fontawesome (V6) 项目",
  },

  numbers: {
    infinite: "无限",
  },

  error: {
    not_fount_data: "未找到数据！",
    license_max_limit: "您的许可证已达到上限！",
    no_read_access: "无读取权限",
    no_write_access: "无写入权限",
    no_access: "禁止访问",
  },

  time_spans: {
    days_range: "天数范围",
    today: "今天",
    yesterday: "昨天",
    last_7: "过去 7 天",
    last_14: "过去 14 天",
    last_30: "过去 30 天",
    last_90: "过去 90 天",
    custom: "自定义",
  },
  device_types: {
    desktop: "桌面电脑",
    mobile: "手机",
    tablet: "平板",
  },

  create_website_action: "创建您的网站 — 免费",
  show_shops_action: "我的店铺列表",

  // Companies:

  YouTube: "YouTube",
  LinkedIn: "LinkedIn",
  Twitter: "Twitter",
  Facebook: "Facebook",
  Instagram: "Instagram",
  Reddit: "Reddit",
  GitHub: "GitHub",

  theme: {
    dark_mode: "暗色模式",
    dark_mode_description:
      "如果您需要深色背景和白色文本颜色，请选择此选项。",
    light_mode: "亮色模式",
    light_mode_description:
      "如果您希望背景为浅色且文本为黑色，请选择此选项。",
  },

  ai: {
    remove_bg: {
      title: "去除背景",
      subtitle: "创建透明背景。",
    },
    reimagine: {
      title: "重新想象",
      subtitle: "使用新背景创建更多图片。",
    },
    upscale: {
      title: "项目",
      subtitle: "项目 项目 项目 项目 项目 图片.",
    },
  },

  // ------------------ Pages Title ------------------
  page_titles: {
    home: "Selldone ╏ 项目 企业 项目 项目 项目 项目 公司",
    login: "登录",
    register: "注册",
    auth_2fa: "双因素认证🔐",
    academy: "教学中心",
    help: "帮助中心",
    price_list: "价格表",
    my_stores: "我的商店",
    roles: "我的角色",
    wallet: "我的钱包",
    personal_info: "个人资料 |了解客户",
    companies: "我的公司",
    access_control: "访问控制",
    security_center: "安全中心",
    gifts: {
      received: "礼品 |已收到",
      send: "礼品 |已发送",
    },
    monetization: {
      linked_accounts: "收入管理 |关联账户",
      plans: "收入管理 |计划和链接",
    },
    affiliate: "联盟",
    avocado: "现代社交销售渠道",
    guild: "集体销售渠道",
    partners_login: "合作伙伴 |客户登录",
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

  blank_is_all_products: "留空以包括所有产品！",

  // ---------------------------------------------

  /** @see ShopCautionHelper **/
  cautions: {
    title:
      "通过以下提示，专业管理您的业务。继续阅读以了解如何提高利润率等更多内容。我们始终与您同行。",
    no_payment_method: {
      title: "支付方式",
      message:
        "您必须向您的商店添加支付方式，以解锁所有功能。",
      action: "商店收款渠道",
    },
    link_account: {
      title: "关联帐号",
      message:
        "为了优化您的商店体验，请关联一个 {currency} 账户！",
      action: "店铺账户",
    },
    no_domain: {
      title: "添加域名",
      message:
        "轻松将一个或多个自有域名连接到您的商店，立刻在自己专属域名上展示网站！整个过程快速、简单。",
    },
    domain_not_approved: {
      title: "域名验证",
      message:
        "让您的 {domain} 快速上线吧！请再次确认 DNS 设置，并验证域名，以确保一切配置正确。",
    },
    no_currency: {
      title: "添加货币",
      message:
        "您必须为您的商店定义至少一种货币。",
      action: "货币管理",
    },
    no_primary_domain: {
      title: "主域名",
      message:
        "只需轻点你想要设为主域名的旁边的星形按钮，就可以轻松设置你的主域名。把某个域名设为旗舰主域名对优化搜索引擎排名非常重要。放心，你的商店依然可以通过所有已启用的域名访问。",
    },
    shop_complete: {
      title: "完整信息",
      action: "店铺设置",
      location_msg: "添加您的位置",
      days_open_msg: "设置开店时期",
      time_open_msg: "设置开关店的时间",
      description_msg: "写一个关于您的业务的简短描述",
      icon_msg: "设置您的商店图标",
      shop_gateways_msg: "添加付款方式",
      socials_msg: "添加您的社交链接",
      clubs_msg: "设置客户俱乐部",
      domains_msg: "添加自定义域名",
      primary_msg: "将域名设置为主域名",
    },
  },

  /** @see BSupportMenu **/
  support: {
    request: "请求支持",

    category: "类别",
    title: "支持",
    message:
      "提出任何要求或问题。我们的支持团队将为您提供指导。我们建议您在与您的请求相关的页面中提出您的问题。例如，如果您对域名设置有疑问，请在商店的域名设置页面中发送。",

    close_at: "{date}关闭",
    close_ticket_by_user: "谢谢，我获得了解答",
  },

  /** @see SShopProductRatingView **/
  surveys: ["很差", "较差", "一般", "较好", "非常好"],

  /** @see SortView **/
  sort: {
    title: "排序方式",
    title_small: "排序方式..",
    nothing: "无",
    most_views: "最多浏览",
    most_likes: "最受欢迎",
    most_recent: "最新上架",
    most_sell: "最畅销",
    cheapest: "最便宜",
    most_expensive: "最贵",
    only_available: "有库存的",
    view_mode: {
      normal: "标准视图",
      grid: "网格视图",
      list: "列表视图",
      insta: "瀑布视图",
    },
  },

  /** {@see Helps} **/

  helps: {
    title: "Selldone 项目 项目",
    subtitle:
      "项目 到 项目 Selldone 项目 项目, 项目 项目 指南 到 项目 项目 项目 项目 项目 店铺 项目 项目 项目 企业 项目 项目. 项目 项目 资源, 项目, 项目 项目 项目 到 项目 项目 店铺’项目 安装, 项目 项目, 项目 项目 项目.",

    add_new_help: "新帮助",
    resources: "资源",

    categories: {
      Welcome: "开始使用",
      Setup: "安装",
      Sell: "销售与市场营销",
      Developer: "发展",

      Product: "产品和类别管理",
      Blog: "博客",
      Order: "订单",
      Channel: "销售渠道",
      Accounting: "会计和付款方式",
      Incentives: "激励措施",
      Marketing: "营销与活动",
      Logistic: "物流与运输",
      Customers: "客户俱乐部和细分",
      Page: "登陆和自定义页面",
      Access: "员工/API 访问管理",
      Application: "应用",
      POS: "POS",
    },
    faq: "FAQ",
    github: "GitHub 项目",
    admin_api_app: "管理 API 网络服务",
    shop_api_app: "商店 API 网络服务",
    design_kit: "设计套件",
    community: "社区",
  },

  /** {@see Blogs} **/
  /** {@see InterestTopicsView} **/

  blogs: {
    title: "博客",
    subtitle:
      "商业课程、信心和创建蓬勃发展业务所需的知识。",
    add_new_blog: "新博客",
    popular: "受欢迎的",
    topics: "话题",
    select_topics: "选择你的话题。",
    select_job_topics: "选择与工作相关的话题",
    select_interested_topics: "你对哪些话题感兴趣？",
  },

  /** {@see ApiDocs} **/
  api: {
    title: "API 与集成",
    message:
      "项目 项目 项目 项目 项目 项目 Selldone 项目 项目 项目 项目 项目 项目 到 项目 项目 项目 店铺 到 其他 配送服务 项目 项目 项目, 财务, 项目. 项目 项目 项目 设计 自定义 应用 项目 项目 应用 项目 项目 店铺. 项目 项目 到 项目 项目 项目 项目 数据 项目. 项目 项目 项目 域名 项目. 项目 项目 项目 全部 项目 项目 项目 项目 用户数, 项目 项目 其他 域名 项目.",
  },

  /** {@see BPageShuttle} **/
  user_dashboard: {
    title: "我的仪表盘",
    subtitle: "使用最新信息和清晰的前景管理您的业务。",
    menu: {
      affiliate: "推广联盟",
      monetize: "变现",
      gift: "礼物",
      security: "安全",
      access: "访问权限",
      business: "商户",
      wallet: "钱包",
      identification: "身份认证(KYC)",
      stores: "店铺",
      roles: "角色",
      home: "主页",
      expert: "专家",
      deals: "促销",
      providers: "服务商",
    },
    shops: {
      create_new: "创建新店",
      create_new_sub_need_initial_charge:
        "创建第一家商店是免费的。一家商店可能足以满足您的业务，但如果您需要创建更多商店，则创建新商店的成本为 25 美元。我们将从您的钱包账户中扣除。",

      menu: {
        title: "我的商店",
        shops: "商店",
        new: "新建",
      },

      accept_invite_question: "你接受这个邀请吗？",
      /** {@see BShopCard} **/

      shop_card: {
        menu_orders: {
          physical: "实物产品订单",
          virtual: "虚拟产品订单",
          files: "提交订单",
          services: "服务订单",
          subscriptions: "订阅订单",
        },
        status: "状态",
        license: "许可证",
        volume: "已用额度",
        expire: "证件过期",
        products: "产品",
        page_views: "浏览量",
        user_behavior: "用户行为",
        time_span: "从 {time} 到现在",
        finance_report: "财务报告",
        buys: "购买",
        payments: "付款",
        orders: "订单",
        currency: "货币",
        no_payment: "没有付款！",
        no_purchase: "沒有购买！",
      },
    },
  },

  widgets: {
    /** {@see BDashboardFeedback} **/
    overview: {
      title: "客户反馈",
      title_small: "概述",
      wishlist: "愿望清单",
      comments: "评论",
      likes: "喜欢",
      favorites: "收藏夹",
      powers: "点赞",
      views: "意见",
      report_today: "今日报告",
      report_last7days: "过去 7 天的报告",
      report_last30days: "过去 30 天的报告",
    },
  },

  /** {@see BPageShop} **/
  admin_shop: {
    title: "店铺",
    menu: {
      edit: "编辑",
      automation: "自动化",
      application: "应用",
      access: "权限",
      pages: "页面",
      channels: "频道",
      classification: "分类",
      marketing: "营销",
      customers: "顾客",
      logistic: "物流",
      auditing: "财务",
      incentives: "激励措施",
      process_center: "订单",
      blog: "博客",
      products: "产品",
      shops: "商店",
      dashboard: "仪表盘",
      autopilot: "自动化管理",
      apps: "应用",
      pos: "POS收款",
      seo: "SEO",
      localization: "本土化设置",
      crm: "CRM",
      listing: "项目",
    },

    /** {@see BPageShopDashboard} **/
    dashboard: {
      title: "商店仪表板",
      online_staff: "在线员工",

      notify_referral: {
        message: "将您的邀请链接发送给朋友并获得免费优惠券。",
        action: "我的推荐链接",
      },

      /** {@see BDashboardShopTechnical} **/
      info: {
        title: "技术概览",
        subtitle: "您的业务系统的技术概述。",

        shop_name: "店铺名称",
        shop_link: "店铺链接",
        site_map: "网站地图",
        shop_domains: "域名",
        shop_domains_msg: "已连接的自定义域名列表。",

        home_msg:
          "设置您网站的默认主页。可以针对每个自定义域名进行更改。",

        add_domain: "添加新域名",
        currencies: "货币",
        currencies_alert: "为商店选择至少一种货币！",
        status: "状态",
        license: "许可证",
        expire: "许可证到期日",
        upgrade_license_action: "升级到 {name}",
        wage: "费用",
        cpu_message:
          "你根据所购买的计划所分配的资源数量，以及你在服务中添加的资源。",
        hide_domains: "隐藏我的域名",
        show_domains: "显示我的域名",

        /** {@see BDomainsList} **/
        table: {
          primary: "主域名",
          url: "网址",
          site_map: "网站地图",
          enable: "启用",
          indexed: "索引",
          and_more: "＆ 更多..",
          auto_repair: "自动修复",
        },
        add_dialog: {
          title: "配置域名",
          step1:
            "您可以为以下域名或子域设置 DNS A 记录的 IP 值：",
          step2: "添加 DNS TXT 记录：",
          set_ip_alert:
            "请将 A 记录的 IP 设置为 <b>{ip}</b>",

          input_domain: "域名",
          correct: "域名设置正确。",
          set_message: "将此域名的 CNAME 设置为 {cname}。",
          input_domain_message: "项目 项目 域名 姓名 项目 HTTP 项目 HTTPS.",
          ssl_message:
            "项目 项目 项目 项目 SSL 项目 项目 项目 网站. 项目 项目 项目 SSL 项目 项目 项目 已付款 CDN 服务商 喜欢 Cloudflare.",
          active: "域名已启用",
          inactive: "域名被禁用",
          success_message:
            "恭喜，您的网站已在 {domain} 上启用。您可以通过此域名向世界介绍您的业务和品牌。",

          delete_action: "删除域名？",
        },
        set_home_dialog: {
          title: "设置域名主页",
        },
        notification: {
          add_message: "域名添加成功。",
          update_message: "域名更新成功。",
          delete_domain_message: "域名删除成功。",
        },
        alert: {
          title: "删除域名",
          message:
            "您要删除此域名吗？确保重置您域名的 DNS 记录值，以防止他人欺诈。",
        },
      },

      /** {@see BDashboardShopOrders} **/
      active_orders: {
        title: "订单",
        title_small:
          "实物、文件、虚拟产品和服务订单",
        pending_orders: "待处理订单",
        physical: "实物产品订单",
        virtual: "虚拟产品订单",
        file: "文件产品订单",
        service: "服务产品订单",
        subscription: "订阅订单",
      },
      /** {@see BDashboardShopProducts} **/
      products: {
        title: "库存",
        title_small: "产品、服务、文件",

        total_products: "总产品类型",
      },
      /** {@see BDashboardShopFinance} **/
      finance: {
        title: "财务",
        title_small: "财务报告",
        total_30days_title: "30天的总销售额",
        last_30_day: "最近 30 天",
        pay_amount_chart_title: "付款",
        sell_amount_chart_title: "销售额",
        discount_amount_chart_title: "折扣",
        currency_convert_to: "转换为货币",
        active_currencies: "活跃货币",
        sell_count_chart_title: "按变体分类的销售数量",
        active_gateways: "活跃支付网关",
        received_last_24h: "24小时内收到的",
        pie: {
          title: "今天的销售占比",
          no_data: "今日无销售",
        },
        pay_amount: "支付金额",
        sell_amount: "销售金额",
        discount_amount: "折扣金额",
        sell_count: "销售数量",
        table: {
          currency: "货币",
          total_sell_30days: "30天总销售额",
          sell_daily: "每日销售比",
          sell: "销售",
          pay: "支付",
        },
      },
      /** {@see BDashboardShopCustomers} **/
      customers: {
        title: "店铺顾客",
        title_small: "转化报告",
        total_customers: "总客户",
        new_customers_today: "今天",
        new_customers_week: "最近 7 天",
        orders_count: "订单数",
        days_range: "天数范围",
        new_users: "新注册用户",

        chart: {
          new_customers: "新客户",
          customers: "客户总数",
        },
      },
      /** {@see BDashboardShopChannels} **/

      channels: {
        title: "销售渠道",
        subtitle:
          "您的业务正在增长。以下是您的销售渠道报告。",
      },

      /** {@see BDashboardShopPerformance} **/
      performance: {
        title: "今天",
        title_small: "用户和销售概览",
        users: "用户数",
        views: "浏览量",
        orders: "订单",
        payments: "付款",
        no_visitor_today: "今天没有访客。",
      },
    },

    /** {@see BPageShopProductsList} **/
    products: {
      title: "产品列表",
      products_list: "返回列表",
      products_menu: "产品管理",

      view_que_list: "查看队列列表",
      menu_products_list: "产品列表",
      menu_export: "导出产品",
      menu_import: "导入产品",
      drop_import_message:
        "项目 产品 列表视图 项目 (CSV, XLS, XLSX 项目) 项目 到 开始时间 项目 项目 产品. 项目 项目 项目 项目 项目 项目 Selldone 产品 列表视图 项目.",

      menu_advanced_options: "高级选项",
      menu_advanced_options_description:
        "项目 Google 项目, 移除 项目 产品 项目 更多的...",

      products_rss: {
        title: "产品 RSS",
        subtitle: "项目 产品 项目 Google, Meta,...",
      },
      products_api: {
        title: "产品 API",
        subtitle: "通过可公开访问的 API 调用导入产品。",
      },
      google_sheet: {
        action: "关联谷歌表格",
        tooltip:
          "项目 产品 项目 项目 店铺 项目 项目 到 项目 Google 项目 项目 Google 项目.",
      },
      show_deletes: {
        false_title: "隐藏已删除",
        false_description: "项目 已删除 产品.",
        true_title: "显示已删除",
        true_description: "项目 已删除 产品.",
      },
      show_vendors: {
        false_title: "隐藏供应商",
        false_description: "仅显示店主",
        true_title: "显示供应商",
        true_description: "项目 全部 项目, ⌘Ctrl+1",
      },
      table_mode: {
        false_title: "拖放模式",
        false_description:
          "预览 产品 项目 项目 子类别 项目 项目.",
        true_title: "表格模式",
        true_description: "预览 产品 项目 项目 项目 项目 项目.",
      },

      show_notes: {
        false_title: "隐藏注释",
        false_description: "隐藏空白注释",
        true_title: "显示注释",
        true_description: "项目 全部 项目, ⌘Ctrl+2",
      },

      rss_dialog: {
        title: "产品 RSS",
        subtitle:
          "使用此 RSS 源来保持所有产品的实时列表更新。",
      },
      api_dialog: {
        title: "产品 API",
        subtitle:
          "使用此 API 源可使您的产品列表保持最新状态。它提供了一个可公开访问的 API 来从您的商店获取产品，非常适合产品列表和比较网站。",
      },

      /** {@see BProductWindowProductLarge} **/

      product_widget: {
        product_type: "产品类别",
        price: "价格",
        value_added: "佣金",
        discount: "折扣",
        in_stock: "库存数量",
        product_unit: "单位",
        total_sell: "总销售额",
        total_view: "总浏览",
        view_unit: "次",
        review_unit: "条评价",
      },

      /** {@see WidgetFolderCard} **/
      folder_widget: {
        products: "产品",
        products_unit: "类",
        sub_categories: "子类别",
        sub_categories_unit: "个",
        views: "浏览量",
        views_unit: "次",
      },
    },

    /** {@see BPageShopBlogs}  **/
    blogs: {
      new: "新建",
      blogs: "博客",

      /** {@see BPageShopBlogsList} **/
      list: {
        title: "我的文章",
        subtitle:
          "使用现代化的内嵌编辑器撰写文章，充分展示你自己和你的业务。坚持原创内容是打造高质量、适合 SEO 的博客文章的关键。",
        waiting_message: "正在接收信息...请稍候",
        published: "已发表",
        draft: "草稿",
        private: "私密",
        public: "公开",
        table: {
          title: "标题",
          author: "作者",
          claps: "赞",
          like: "喜欢",
          comments: "评论",
          views: "浏览",
          publish_state: "状态",
          created_at: "创建日期",
          updated_at: "最后更新",
        },
      },
    },

    /** {@see ShopPBPageShopOrdersrocessCenter} **/
    orders: {
      /** {@see BProcessCenterList} **/
      physical: {
        waiting_message: "正在接收信息...请稍候",
        rejected: "已拒绝",
        delivery: "发货中",
        discount: "折扣",
        not_paid: "未支付",

        table: {
          order_number: "订单号码",
          order_date: "下单日期",
          status: "最新状态",
          price: "订单总额",
          payment_status: "支付状态",
        },
      },

      /** {@see BPageShopOrdersVirtual} **/
      virtual: {
        waiting_message: "正在接收信息...请稍候",

        discount: "折扣",
        table: {
          order_number: "订单编号",
          product: "产品",
          order_date: "下单日期",
          status: "最新状态",
          price: "订单金额",
          payment_status: "支付状态",
        },
      },
    },

    /** {@see BPageShopFinance} **/
    auditing: {
      menu: {
        exchange: "汇率",
        gateway: "网关",
        invoice: "发票账单",
        report: "报告",
        tax: "税务",
        drop_shipping: "经销商收据",
        reseller_accounts: "经销商帐户",
        valuations: "资产价值",
        customer_wallets: "顾客钱包",
      },

      /** {@see BPageShopFinanceBill} **/
      invoice: {
        title: "店铺关联钱包",
        subtitle:
          "费用、佣金和商店费用将从这些钱包账户中扣除。",

        title_add: "连接新的钱包账户",
        subtitle_add:
          "您应该为每种货币创建一个新钱包并将其连接到您的商店。服务费将从该钱包中提取。",
        add_account: "新增帐户",
        charge_account: "充值账号",
        show_transaction: "查看交易记录",

        table: {
          currency: "货币",
          account_number: "帐号",
          account_name: "帐户名称",
          balance: "余额",
          free_balance: "可用余额",
          actions: "移除",
        },
        add_account_dialog: {
          title: "将信用账户连接到商店",
          subtitle:
            "项目 项目 项目 钱包 账户 项目 Selldone, 项目 项目 接收 项目 项目 项目 卡片. 项目 Selldone 服务 费用 项目 项目 项目 到 项目 账户. 项目, 项目 项目 账户 余额 项目 项目, 项目 费用 项目 项目 项目 项目 项目.",
          account_number: "帐号",
          account_number_input_message:
            "该商店将链接到此帐户。该帐户将用于支付费用和成本。",
          balance: "账户余额",
          connect_account_to_shop: "将帐户连接到商店",
        },
        notifications: {
          connect_account_success: "帐号添加成功。",
          delete_account_success:
            "帐号已成功从商店中移除。",
        },
        alert: {
          delete_account: "断开帐户",
          delete_account_message:
            "您想从帐户列表中删除此帐户吗？",
          delete_account_action: "删除帐户",
        },
        inform_charge_account: "向您的帐户充值！",
        inform_charge_account_critical:
          "向您的帐户充值以防止服务被暂停！",
      },

      /** {@see BPageShopFinanceExchange} **/
      exchange: {
        title: "店铺启用的货币",
        subtitle:
          "用户可以选择其中一种启用的货币，商品价格将按该货币计算和显示。卖家需自行填写汇率。",
        shop_currencies_input: "启用的货币",
        shop_currencies_input_error: "至少选择一种货币",
        rates: {
          title: "汇率",
          sub_title:
            "您可以基于下列任一货币输入商品价格，系统将根据您设置的货币兑换率自动计算商品价格。",
          message:
            "输入货币间的兑换汇率后，商品价格将自动计算并更新。",
          add_new_rate: "添加新汇率",
        },
        table: {
          waiting_receive_data: "正在获取信息...请稍候",
          rate_input: "汇率",
          from: "从",
          to: "到",
          exchange_rate: "汇率",
          edit: "编辑",
          delete: "删除",
          auto: "自动汇率",
        },
        add_rate_dialog: {
          title: "设置汇率",
          message:
            "请谨慎输入信息，产品价格的计算将基于您在此输入的汇率",
          currency_from: "从货币",
          currency_to: "到货币",
          exchange_rate: "汇率",
        },
        alert: {
          title: "删除汇率",
          message: "要删除此汇率吗？",
          action: "删除",
        },
        notifications: {
          delete_success: "汇率已移除。",
          add_success: "汇率已更新。",
          update_success: "店铺启用货币已更新。",
        },
      },
    }, // End of auditing

    /** {@see BPageShopLogistic} **/
    logistic: {
      /** {@see BPageShopLogisticWarehouse} **/
      warehouses: {
        title: "仓库",
        subtitle: "我的仓库列表。",
      },
      restriction: {
        title: "配送限制",
        subtitle:
          "您可以设置禁运地区，以确保只有指定运送区域内的客户才能向您购买商品！",
        no_enable_shipping_error:
          "没有启用的物流方案，任何人都无法下单！",
        customer_must_select_a_shipping_msg:
          "客户必须选择一种物流方案才能下订单。",
        customer_can_order_without_shipping_method_msg:
          "即使所选地址没有支持的物流方案，客户仍可下单。",
        inputs: {
          restriction: {
            false_description:
              "即使没有选择特定的物流方案，客户仍然可以下订单。",
            false_title: "接受所有订单",
            true_title: "限制接受订单",
            true_description:
              "客户需要选择物流或提货选项才能完成购买。",
          },
        },
      },

      warehouse_btn: "添加新仓库",
      warehouse_btn_error:
        "设置您的仓库、门店或业务地址。这对于计算运费和结账流程至关重要。",
      no_multi_warehouse_support_message:
        "为简单起见，普通商店不提供此功能。",
      size_unit: {
        title: "尺寸单位",
        subtitle: "用于长度、宽度和高度的单位。",
      },
      mass_unit: {
        title: "重量单位",
        subtitle: "用于重量的单位。",
      },
      distance_unit: {
        title: "项目 单位",
        subtitle: "项目 单位 已使用 项目 项目.",
      },

      menu: {
        return_request: "退货",
        delivery: "发货",
        inventory: "库存",
        warehouse: "仓库",
        logistic_apps: "物流",
        profiles: "简介",
        includes: "包括",
        property_sets: "项目 项目",
        boxes: "项目",
      },

      /** {@see BPageShopLogisticInventory} **/
      warehouse: {
        title: "店铺仓库",
        sub_title: "此地址作为发货起始地使用。",
        table: {
          title: "库存列表",
          sub_title:
            "所有商店产品列表，包括物理、虚拟、文件和服务产品",
        },
      },

      /** {@see BPageShopLogisticShipping} **/
      delivery: {
        title: "运输方式",

        sub_title:
          "通过设置此部分中的设置，可以在您的商店中激活各种运输方式。货到付款方式也可以在此部分激活。",
        add_transportation: "添加运输方式",

        /** {@see DeliveryFormWidget} **/
        delivery_form: {
          payment: "付款方式",
          limits: "限制",

          currency_input: "成本计算的参考货币",
          currency_input_message: "成本以这种货币计算",
          distance_input: "仓库发货覆盖距离",
          distance_input_message: "0 或 -1 表示没有限制。",
          max_weight_input: "最大可接受包裹重量",
          max_weight_input_message: "0 或 -1 表示没有限制。",
          max_size_input: "最大包裹尺寸",
          width: "宽度",
          length: "长度",
          height: "高度",
          days_input: "可用的送货日期",
          days_input_nodata: "选择送货日期",
          hours_input: "可用的送货时间",
          hours_input_nodata: "选择一个时间段",
          vacation_input: "节假日是否送货？",

          pricing: "计算价格",
          const_input: "固定成本",
          distance_cof_input: "成本距离系数",
          distance_cof_input_dim: "每 {dim}",
          weight_cof_input: "重量系数",
          weight_cof_input_dim: "每 {dim}",
          price_cof_input: "订单价格系数",
          price_cof_input_message:
            "包括保险费用及其他服务费用，如货到付款费用。",
          price_cof_input_dim: "每 {dim}",
          distance_weight_cof_input: "距离 🞬 重量系数",
          distance_weight_cof_input_dim: "每{weight}每{distance}",
          free_shipping_input: "免运费",
          free_shipping_limit_input: "免运费最低订单金额",

          shipping_cost_calculation: "运费计算",
          sod_true: "根据目的地计算运费",
          sod_true_message:
            "请确保您的物流服务支持目的地计费。",
          sod_false: "自动运费计算",

          cod_input: "支持货到付款",
          cod_true: "接受货到付款",
          cod_false: "只接受网上支付",
          cod_true_message: "确保您的运输服务接受货到付款。",

          notifications: {
            update_success: "配送服务设置已成功完成。",
          },
        },
      },
    }, // End of logistic

    /** {@see BPageShopCrm} **/
    users: {
      menu: {
        customers: "客户",
        contact_form: "联系人",
        faq: "常见问题",
        club: "会员俱乐部",
        report: "报告",
      },

      /** {@see BPageShopCrmReport} **/
      report: {
        title: "客户概览",
        sub_title: "在这里您可以查看客户的实时状态。",
        report_30days_by_time:
          "过去30天用户按日期和时间的活动",
        report_30days_by_location:
          "过去30天用户按地理位置的活动",
      },
      /** {@see BPageShopCrmClub} **/
      club: {
        title: "客户俱乐部",
        sub_title:
          "输入每月和每年的购买金额以及币种，以激活各个等级。当客户达到月度或年度购买要求时，他们将自动成为您的客户俱乐部会员。",
        item: {
          members_count: "会员人数",
          purchases_count: "订单数量",
          monthly: "月度",
          annually: "年度",
          discount_percent: "折扣率",
          discount_limit: "折扣上限",
        },

        edit_dialog: {
          title: "客户等级管理",
          currency_input: "货币",
          currency_input_message:
            "总购买金额以此货币计算。",
          free_shipping_input: "免运费",
          monthly_input: "月度购买金额",
          annually_input: "年度购买金额",
          discount_percent_input: "俱乐部会员折扣率",
          discount_limit_input: "折扣上限",
          description_input: "等级描述",
          description_input_message: "输入此等级的简要说明。",
        },
        notifications: {
          update_success: "客户俱乐部设置已更新。",
        },
      },
      /** {@see BPageShopCrmFaq} **/
      faq: {
        title: "常见问题",
        sub_title: "添加、编辑和回答客户的问题。",
      },
    }, // End of users

    /** {@see BPageShopMarketing} **/
    marketing: {
      menu: {
        campaigns: "营销活动",
        cross_selling: "交叉销售",
        affiliate: "联盟推广",
        emails: "邮件邮箱",
        funnel: "客户转化过程",
      },

      /** {@see BPageShopMarketingCampaign} **/
      campaign: {
        name_input_name: "活动名称",
        name_input_placeholder: "请输入您的活动标题",
        create_campaign_action: "创建新活动",
        table: {
          title: "标题",
          state: "状态",
          discount: "折扣",
          landing: "落地页",
          start: "开始时间",
          end: "结束时间",
        },
        notifications: {
          add_success_title: "创建活动",
          add_success: "您的活动已创建。",
        },
      },
    }, // End of marketing

    /** {@see BPageShopClassification} **/
    categories: {
      title: "类别列表",
      subtitle:
        "分类是您的网店的核心功能。我们鼓励您使用这些强大的分类工具来构建现代化的店面，并让您的客户轻松找到合适的产品。",

      menu: {
        add_new: "添加新类别",
        categories_list: "类别列表",
        export: "导出类别",
        import: "导入类别 (CSV)",
      },
      /** {@see categoriesGraph} **/
      graph: {
        title: "类别层次结构",
        subtitle:
          "您可以全面查看店铺分类及用户浏览路径。合理的分类布局能帮助客户快速找到产品，提高转化率。",
        visits_count: "访问量",
        normal: "简单的",
        items_count: "商品数量",
        home: "首页",
      },
    }, // End of categories
    /** {@see AdminShopApps} **/
    apps: {
      menu: {
        app_store: "应用商店",
        my_apps: "我的应用",
      },
      /** {@see BPageShopSettingApplications} **/
      my_apps: {
        title: "应用程序",
        subtitle:
          "项目 项目 项目 项目 项目 项目 企业 应用 项目 Selldone 应用程序 店铺. 项目 项目 促销活动 项目 项目 项目 项目 工具 项目 到 项目 项目 企业 项目. 从 项目 项目 项目 到 项目 应用, Selldone 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目.",
        all: "全部",
      },
      /** {@see BAppShopStore} **/
      store: {
        title: "应用商店",
        subtitle:
          "安全地将您喜爱的服务连接到您的业务。我们根据客户需求添加插件和应用。",

        nodata: "未找到插件。",
        all: "全部",
        more: "更多的",
      },
    }, // End of apps
    /** {@see BPageShopPages} **/
    pages: {
      menu: {
        new_page: "新建页面",
        contact_us: "联系我们",
        privacy: "隐私政策",
        terms: "使用条款",
        about_us: "关于我们",
        landings: "落地页",
        popup: "弹出窗口",
        static: "静态页面",
      },
    }, // End of pages

    /** {@see BPageShopPermission} **/
    permissions: {
      menu: {
        persons: "员工",
        roles: "角色",
        api: "API",
      },
      /** {@see BPageShopPermissionStaff} **/
      shop_permissions: {
        menu: {
          users: "人员列表",
          new_user: "添加新员工",
          new_user_message:
            "获准访问仪表盘和本店管理部分的用户。",
        },
        delete_alert: {
          title: "移除访问权限",
          message: "您要删除此用户吗？",
          action: "删除",
        },
        notifications: {
          add_success_title: "添加访问权限",
          add_success: "成功添加了新的访问权限。",
          delete_success_title: "删除访问权限",
          delete_success: "访问权限已删除。",
        },
      },

      /** {@see BPageShopPermissionApi} **/
      shop_api: {
        title: "客户端",
        message:
          "这些密钥用于由您的服务器创建访问令牌。请注意，密钥是保密的，只能在服务器上以其他人不可见的方式使用。",
      },
    }, // End of permissions
    /** {@see BPageShopApplications} **/
    applications: {
      /** {@see BPageShopApplicationsPwa} **/
      pwa: {
        title: "网页应用",
        sub_title: "这是您商店网页应用的预览",
        message:
          "项目 项目 编辑 项目 网站 项目 项目 项目 项目 iPhone 项目 iPad 项目 项目 iOS 应用程序.",
        ios_app: "iOS 应用程序",
      },

      /** {@see BPageShopApplicationsIos} **/
      ios: {
        title: "iOS 应用程序",
        sub_title: "项目 项目 项目 项目 项目 到 构建 项目 iOS 应用程序 项目 项目 店铺.",
        message:
          "最大文件大小：512KB，您可以上传最大 1MB 的文件，前提是我们的压缩系统能够将文件大小压缩到 512KB。上传的图片将被智能调整大小。",
      },
      /** {@see BPageShopApplicationsAndroid} **/
      android: {
        title: "安卓应用",
        sub_title: "构建您自己的安卓应用",
        message:
          "填写此表格并按构建键。无需其他操作。应用的构建和签名过程全部在云服务器上完成。最终的应用将上传到所有应用商店。",
        server_un_available:
          "当前应用服务器未连接。",
        app_building_progress: "您的应用正在创建中。",
        app_build_success: "您的应用程序已准备就绪。",
        download_app_action: "获取应用",
        firmware_version: "固件版本",
        main_info: "应用程序包",
        package_name_input_message: "确保包名是唯一的。",
        package_name_input_alert:
          "如果您更改此名称，将无法更新之前在应用商店发布的应用，也无法安装新版本。请注意，旧版本的用户也无法登录账户。",
        version_input: "版本号",
        version_input_message:
          "此数字必须始终大于之前的版本号。",
        version_name_input: "版本名称",
        version_name_input_message:
          "输入此版本的应用程序的唯一名称。",
        use_selldone_key: "Selldone 默认 项目",
        use_last_key: "已保存的密钥",
        use_new_key: "新密钥",
        appearance: "外观",
        app_name_input: "应用名称",
        app_name_input_message: "这将是您的应用程序主名称。",
        app_title_input: "应用标题",
        app_title_input_message: "此标题将显示在应用程序的顶部。",
        app_title_input_placeholder: "输入标题",
        app_icon_input: "应用程序图标",
        app_icon_input_placeholder: "项目 项目 项目 项目 项目 应用程序 项目.",
        generate_icon_pack_action: "生成图标包",
        splash_design: "启动画面设计",
        splash_logo_input: "启动画面标志",
        splash_logo_input_placeholder: "选择启动画面的图片。",
        splash_title_input: "启动画面标题",
        splash_title_input_placeholder: "输入启动画面的标题",
        splash_title_input_message:
          "此标题将以大字体显示。",
        splash_message_input: "启动画面信息",
        splash_message_input_placeholder: "信息 ...",
        splash_message_input_message:
          "此消息将在下方显示为缩略图。",

        dark_theme: "深色主题",
        light_theme: "亮色主题",
        build: "构建",
        building_info:
          "在云服务器上构建应用需要10秒到几分钟，请耐心等待。应用准备好后，下载链接将显示在这里。",
        update_mode_action: "更新",
        build_mode_action: "构建应用",
        notifications: {
          icon_pack_not_valid_error: "文件不正确。",
          start_building_title: "构建中 ...",
          start_building_message:
            "项目 项目 项目 Android 应用 项目.",
          build_success_title: "恭喜",
          build_success:
            "项目 Android 应用程序 项目 项目, 项目 项目 项目 项目 项目 项目.",
        },
      },
    }, // End of applications

    /** {@see ShopAutomation} **/
    automation: {
      menu: {
        autopilot: "自动化管理",
      },
    },

    /** {@see BPageShopSetting} **/
    edit: {
      menu: {
        delete: "删除店铺",
        activity_time: "时间",
        footer: "菜单",
        info: "信息",
        notification: "通知",
        home: "首页",
        locations: "地点",
        license: "许可证",
        theme: "主题",
        sms: "短信",
        email: "电子邮件",
        domain: "域名",
        verifications: "验证",
        flow: "流程",
        business_model: "商业模式",
      },
      delete_dialog: {
        title: "删除店铺",
        message: "您要删除<b>{title}</b>商店吗？",
        action: "删除店铺",
      },

      notifications: {
        delete_success: "店铺已删除。",
      },

      /** {@see BPageShopSettingInfo} **/
      info: {
        title_tab: {
          title: "商户名称和语言",
          subtitle: "设置公开名称和默认语言。",
        },
        name_tab: {
          title: "店铺唯一名称",
          subtitle: "这是您的商户用户名。",
        },

        description_tab: {
          title: "您的商业故事",
          subtitle:
            "写下您的业务及其独特的价值。",
        },
        contact_tab: {
          title: "联系方式和本地业务",
          subtitle:
            "公开 联系方式 项目 项目 Google 项目 企业 安装.",
        },
        image_tab: {
          title: "项目",
          subtitle: "项目 项目 项目 项目 项目 项目 品牌.",
        },
        favicon: {
          title: "项目",
          subtitle:
            "项目 项目 项目, 项目 图片 项目 项目 项目 网站 项目 项目 项目, 项目, 项目 手机 应用程序 项目.",
        },
      },

      /** {@see ShopEditMenuFooter} **/
      badge: {
        external_title: "管理外部徽章",
        external_message:
          "在这里，您可以输入徽章图片的地址及其链接。网址必须来已经认证的网站。",
      },
      /** {@see BPageShopSettingMenus} **/
      edit_menu: {
        title: "菜单",

        footer: {
          title: "底部菜单",
          sub_title:
            "您可以在此处配置商店页面的底部菜单。这些菜单可以链接主页、设计页面或外部链接。",
        },

        header: {
          title: "顶部菜单",
          sub_title:
            "该菜单仅显示在大于手机屏幕的设备上，且位于主页、产品分类页、着陆页和产品页的顶部。",
        },

        save_menu: "保存菜单",
        dialog: {
          main_pages: "主页",
          custom_pages: "登陆页面",
        },
        table: {
          home: "主页",
          shop: "店铺",
          blogs: "博客",
          about_us: "关于我们",
          privacy: "隐私条款",
          terms: "使用条款",
          faq: "常见问题",
          contact_us: "联系我们",
        },
        notifications: {
          save_success: "菜单已成功更新。",
        },
      },

      /** {@see ShopSocialField} **/
      social: {
        title: "社交媒体",
        message:
          "在此处输入您的官方社交媒体链接。请按照每项的说明确认地址。",
      },

      /** {@see BShopSettingWorkingDays} **/
      time: {
        title: "工作日",
        sub_title: "设置工作日和时间",
        days_open_input: "营业日",
        days_open_input_nodata: "至少选择一天",
        start_time_input: "店铺营业开始时间",
        start_time_input_hint: "店铺开放时间（小时）",
        end_time_input: "店铺关门时间",
        end_time_input_hint: "店铺营业结束时间",
        customer_support_service: "客户服务",
        response_time_input: "客户服务状态",
        support_24h: "7 天 24 小时",
        support_normal: "仅在办公时间内",
        no_service: "无服务",
        notifications: {
          update_success: "商店已编辑。",
        },
      },
    }, // End of edit
  }, // End of admin_shop

  /** {@see BCategoryInput} **/
  category_select: {
    category_input_no_category: "无分类",
  },

  /** {@see BProductAddFull} **/
  add_product: {
    title_new: "新产品",
    title_new_category: "新类别",
    title_new_drop_shipping: "添加代发货",

    title_edit: "编辑产品",
    delete: "删除产品",
    completed: "已完成",

    menu: {
      type: "产品类型",
      general_info: "基本信息",
      rating: "评价和特点",
      spec: "规格",
      images: "图片",
      price: "价格",
      inputs: "输入",
      outputs: "输出",
      extra: "附加详情",
      review: "产品描述",
      inventory: "库存/变体",
      change_status: "更改状态",
    },
    menu_extra: {
      description: "等级描述",
      form: "项目",
      no_spec: "无服务 项目",
      has_spec: "项目 项目",
    },

    select_type: {
      title: "选择您的产品或服务类型",
    },

    /** {@see BProductEditInfo} **/
    edit_info: {
      category_input: "分类",
      category_input_msg: "空：在商店的根目录中",
      product_name: "产品名称*",
      product_name_placeholder: "请输入您的产品名称..",
      product_code: "产品代码（英文）",
      sku: {
        label: "SKU",
        message: "库存管理单位",
      },
      mpn: {
        label: "MPN",
        message: "制造商零件编号",
      },

      external_link: "外部链接",

      brand_placeholder: "品牌 项目. Apple.. (项目)",

      is_original: "这是正品吗？",
      is_original_message:
        "如果您未将产品设置为正品，该产品将显示‘仿品’标签。",
      return_warranty:
        "该产品有多少天的退货保证？",
      warehouse_section: "仓库与制造",
      conditions_section: "产品状态",
      warranty_section: "保修和配送",

      unit_input: "产品单位",
      unit_message: "如果需要，输入单位。例如：公斤，米，...",

      unit_section: "产品单位",

      unit_float: "浮动单位",
      unit_float_hint:
        "例如，客户可能订购3公斤水果，但实际发货数量可能与订购数量略有差异。",
      unit_float_message:
        "在订单处理中，实际交付的数量可能与订购数量不同。系统会自动计算差额，并将其作为应退款项记录，您可以在下一次订单中抵扣。",

      marketplace: {
        // Vendor panel > Fixed mode
        vendor_panel_message:
          "<b>{vendor_name}</b>是产品的所有者。",
        // Marketplace panel > Subscription products
        subscription_message:
          "订阅类型产品只能有一个供应商，您可以在供应商面板创建这些产品，或在创建步骤中为其分配供应商。选定的供应商将成为该产品的拥有者。",
        default_message:
          "项目 项目 项目 项目 项目 产品 项目 到 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目, 项目 项目 产品 项目 到 商城模式 项目 更多的 项目 项目 项目 项目 项目 项目.",

        single_vendor_title: "单一供应商",
        single_vendor_desc:
          "该产品属于某个供应商，选定的供应商可以管理该产品。",

        multi_vendors_title: "多个供应商",
        multi_vendors_desc:
          "该产品属于市场，只能在市场面板中编辑。",
      },

      category: {
        subtitle:
          "设置在您的商品列表中显示的类别和标题。",
      },
      unit: {
        subtitle:
          "您可以自定义产品页面上价格和购买按钮的显示方式。",
      },
      custom_pricing: {
        title: "自定义定价表单",
        subtitle:
          "您可以为产品创建或分配一个估值（定价输入表单），客户可以在不同变体之间进行选择，或通过直观的输入表单自定义您的商品。",
        valuation_need_saved_product_message:
          "请先保存该产品，然后您才能分配估值模型。",
        assign_valuation_message:
          "请为此产品分配一个估值模型。",
        edit_pricing_action: "编辑定价表单",
        add_pricing_action: "创建新的定价表单",
      },
      action: {
        title: "自定义购买按钮",
        message:
          "您可以按照以下模式更改图标：{icon name} 标题...",
        placeholder: "输入按钮文案...",
        multi_language_dialog_title: "自定义购买按钮标题",
      },
      external: {
        not_available_message:
          "项目 操作 有库存的 项目 商户 & 项目 项目.",
        available_message: "项目 项目 项目 项目 项目 项目 项目 到 操作.",
        input_label: "项目 项目 到 操作",
      },
      warehouse: {
        subtitle:
          "此信息由仓库管理系统使用，用于在全球范围内识别该产品。",
      },
      gtin: {
        hint: "支持的标签包括 UPC（北美，12 位数字）、EAN（欧洲，13 位数字）、JAN（日本，8 位或 13 位数字）、ISBN（书籍，13 位数字）。",
        label: "产品的全球贸易编号",
        placeholder: "在此输入全球贸易编号..（可选）",
      },
      hsn: {
        hint: "HSN（协调制度编码）是用于对商品和产品进行国际标准化分类的编码系统。",
        placeholder: "6~16位HSN代码..（可选）",
        label: "HSN",
      },
      condition: {
        label: "您店铺中的产品状态",
        message: "请选择该产品的状态。",
        subtitle:
          "告知您的客户您所提供产品的状态和品牌信息。",
      },
      brand: {
        label: "品牌",
        placeholder: "品牌 项目. Apple.. (项目)",
      },
      warranty: {
        subtitle:
          "设置保修期限及产品状态，此保修信息将显示给客户，明确产品购买后可退货的时间期限。",

        label: "保修单",
        placeholder: "黄金级24个月保修..（可选）",
      },
      status: {
        title: "状态",
        subtitle:
          "产品状态决定了它在网上和店内是否可卖。如果想暂时下架产品，只需要把它的状态切换到“未激活”即可。",
      },
      profiles: {
        title: "配置文件",
        subtitle:
          "您可以定义保修、退货政策、运输和指南，并将它们分配给此产品。它们将以新选项卡的形式显示在产品页面上。",
      },
      shortcuts: {
        title: "分配产品到额外类别",
        subtitle:
          "此功能允许您将产品同时列在多个类别中，同时保留在 产品 > 编辑 > 类别 中设置的主要类别。基本上，它的功能类似于操作系统中的“快捷方式”，使产品能够出现在指定的其他类别中。",
      },
    },

    /** {@see BProductEditFeatures} **/
    rating_pros_cons: {
      title: "调查问卷",
      message:
        "输入一组产品规格供客户评分。（最多5项）",
      rating_input: "投票",
      rating_input_message: "您最多可以添加5个投票项。",
      rating_input_placeholder:
        "项目 项目 自定义 调查问卷 问题 项目... 项目 项目 项目!",

      item_unit: "产品",

      pros_title: "优点",
      pros_message: "输入产品的优点。 （最多 5 项）",
      pros_input_title: "优点标题",
      pros_input_value: "优点内容",
      pros_group: "产品的优点",

      cons_title: "缺点",
      cons_message: "输入产品的缺点。（最多5项）",
      cons_input_title: "缺点标题",
      cons_input_value: "缺点内容",
      cons_group: "产品缺点",

      select_from_list: "从列表中选择",

      suggestion_rating: [
        "质量优良",
        "物有所值",
        "值得推荐",
        "功能与性能",
        "易于使用",
        "精心设计",
        "性能可靠",
        "有效的客户支持",
        "满意的交货时间",
        "产品与描述相符",
        "耐用且持久",
        "性价比高",
        "精美的包装",
        "创新设计",
        "环保",
        "说明手册清晰明了",
        "达到预期",
        "友好的用户界面",
        "高效能",
        "优质的售后服务",
        "多功能",
        "价格有优势",
        "备件/配件供应良好",
        "值得信赖的品牌",
        "安全使用",
        "及时与快速的服务",
      ],

      notifications: {
        add_rating_success: `用户评分选项 {rating_name} 已添加。`,
        delete_rating_success: `用户评分选项 {rating_name} 已删除。`,

        add_pros_success: "产品优点已添加。",
        delete_pros_success: "产品优点已移除。",

        add_cons_success: "产品缺点已添加。",
        delete_cons_success: "产品缺点已移除。",
      },
    },

    /** {@see BProductEditSpec} **/
    edit_spec: {
      title: "技术参数",
      subtitle:
        "在此处插入产品参数。此信息将显示给客户，也可在类别的智能过滤系统中使用。",
      manual: {
        title: "手动添加",
        subtitle:
          "通过定义分组和键值对，手动添加产品参数。",
        add_group_action: "添加分组",
        add_item_action: "添加参数值",
      },
      import: {
        subtitle:
          "您可以导入类似产品的技术参数。",
        action_title: "导入",
        action_subtitle: "从另一个产品复制参数。",
      },
      ai: {
        title: "AI",
        subtitle:
          "您可以通过提交产品的原始文本数据，自动创建产品参数。",
        action_title: "AI自动生成",
        action_subtitle: "通过摘要提示创建产品参数。",
      },

      group_input_header: "添加分组",
      item_title_header: "添加条目",
      group_input: "分组标题",
      group_input_message: "请输入标题。",
      group_add_action: "添加分组",

      item_title_input: "标题",
      item_title_input_message: "输入特征标题。",

      item_value_input: "值",
      item_value_input_message: "请输入特征值。",

      add_item_action: "添加条目",

      dialog: {
        title: "导入技术参数",
        code_input: "产品编号",
        code_input_message: "产品编号：P0000 ...",
        spec_view_title: "所选产品的参数",
        spec_view_subtitle:
          "参数已从所选产品导入。",
        set_spec_action: "复制技术参数",
      },
      notifications: {
        enter_group_title_error: "请输入标题",
        enter_item_title_and_value_error:
          "输入特征的标题和值",
        spec_saved_success: "产品参数已保存。",
      },
      dialog_ai: {
        title: "自动生成产品参数",
        prompt: {
          title: "产品概述",
          subtitle:
            "请简要清晰地描述产品，突出其主要特征和细节。此信息将用于自动生成产品参数。",
        },
        generated_spec: {
          title: "人工智能生成的参数",
          subtitle:
            "这些参数是由人工智能生成的。",
        },
        inputs: {
          prompt: {
            label: "产品详情",
            placeholder: "在此描述产品...",
          },
        },
        actions: {
          run: {
            title: "生成参数",
            subtitle:
              "点击以根据提供的概述自动创建产品参数。",
          },
          add_generated_spec: "添加生成的参数",
        },
      },
    },
    /** {@see BProductEditImages} **/
    edit_images: {
      title: "主图",
      main_image_input_nodata: "上传产品图片。",
      main_image_input_message: "此图像显示在产品列表中。",
      preview: "预览",
      image_style: "图片样式",
      background_is_white: "白色背景",
      background_is_white_msg: "图片是白色背景吗？？",

      images: {
        title: "产品图片库",
        sub_title:
          "在此部分上传所有产品变体通用的产品图片。",
      },
      video: {
        title: "视频",
        sub_title:
          "项目, 项目 项目 产品 视频 项目 YouTube, 项目 项目 项目 项目 视频 URL 项目.",
      },
      change_bg_ai: {
        title: "生成新背景的图片",
        inputs: {
          prompt: {
            label: "背景描述",
            placeholder: "描述您想要的背景...",
          },
        },
        actions: {
          reimagine: {
            title: "生成新图片",
            subtitle: "使用新背景重新构思整张图片。",
          },
          replace: {
            subtitle: "替换现有的背景。",
          },
        },
      },
    },
    /** {@see BProductEditPrice} **/
    pricing: {
      edit_price: "定价",
      price_input: "价格",
      currency_input: "货币",
      currency_input_messages: "价格以此货币计算。",
      commission_input: "佣金",
      commission_message:
        "该选项仅适用于批发商等特定商家。如果您不是批发商，请将此选项留空。买家看到的价格是 价格 + 佣金 的总和。如需添加税，请点击 会计 > 税务。",
      add_commission_action: "添加佣金",

      price_label_input: "价格标签",
      price_label_message:
        "可为价格添加额外说明，如 ($1.5/盎司)，常用于食品杂货或快速消费品。",
      add_price_label_action: "添加价格标签",
      discount_input: "折扣",
      discount_input_message: "折扣率",
      has_discount_period_input: "此折扣是否仅在特定时间内有效？",
      discount_timespan: "请输入折扣有效期。",
      start_input: "开始时间",
      end_input: "结束时间",
      start_input_placeholder: "选择开始时间",
      end_input_placeholder: "选择结束时间",
      independent_price: "此价格仅对此变体生效",
      same_price: "此价格与主产品相同",
      variant_pricing_message:
        "选择此选项后，该变体的价格将独立于主产品价格",

      subtitle: {
        marketplace:
          "在市场中，主要显示的是商品的标价，实际价格则根据供应商与商品的关联记录确定。",
        subscription:
          "对于订阅产品，仅显示标价，实际费用将根据所选订阅计划确定。",
        service:
          "对于服务类产品，标价仅供展示提供服务的预计费用。实际服务价格由您在客户下单结账时确定。",
        file: "指文件的标价和实际价格，客户需支付此费用才能获取文件访问权限。",
        default:
          "指产品的标价，同时考虑没有单独定价的变体价格。",
      },
      extra_pricings: {
        title: "添加额外定价",
        subtitle: "根据购买数量动态定价",
      },

      vendor: {
        title: "供应商定价",
        subtitle:
          "此价格仅显示在产品列表中。您可以在产品 > 供应商选项卡中设置供应商价格。",
        manage_vendors: "管理供应商",
        vendor_product_pricing_link:
          "供应商产品定价已关联。在此更改列表价格将影响没有变体的供应商产品，或那些变体没有独立定价（使用与主产品相同价格）的产品。此价格将被视为市场价格，供应商价格将根据定价模型或之前的市场利润率进行设置。",
        vendor_variant_pricing_link:
          "在此更改变体价格将影响具有相同变体的供应商产品的定价。此价格将被视为市场价格，供应商价格将根据定价模型或之前的市场利润率进行设置。",
      },
    },
    /** {@see ProductEditInputs} **/
    inputs_edit: {
      title: "输入表单提示信息",
      sub_title:
        "您可以为每个产品创建一个数据录入表单，方便买家在购买时向您提供信息。例如，这些信息可以是刻在石头上的名字。",
      message_input: "给用户的消息",
      message_input_message:
        "此消息将在购买产品时显示给客户。",
      inputs_form: "输入表单结构",
      inputs_hint:
        "您可以设置个性化表单，在客户准备下单时收集他们的详细信息。",
    },

    /** {@see BProductEditExtra} **/
    extra_edit: {
      physical: {
        title: "运输信息",
        sub_title:
          "备货成本和时间将根据本部分的信息计算。请确保根据商店中选择的单位（重量、尺寸、距离）填写信息。",
      },

      notifications: {
        save_title: "包装信息已更新",
        save_msg: "产品包装信息更新成功。",
      },

      order_limit: {
        title: "订单限制",
        subtitle:
          "如果您是批发商或每个订单中该商品的数量有最低或最高限制，您可以在此处指定。",
        no_limit: "无限制",
        minimum_purchase_quantity: "最低购买数量",
        maximum_purchase_quantity: "最高购买数量",
      },
    },

    variants: {
      not_available:
        "目前无法为此类产品选择变体。",
    },

    delete_product: {
      title: "删除产品",
      message: `您要删除<b>{product_title}</b>吗？`,
      tips: "如果您不小心删除了某个产品，您可以通过导航至您的商店 > 产品，启用“显示已删除的商品”，然后右键单击该产品并选择“恢复”来恢复它。",
    },
  },

  /** {@see BProductExtraPricingAdd} **/
  extra_pricing_add_dialog: {
    title: "超过 {min} 的额外定价",
    subtitle:
      "系统自动确定价格计算的顺序和优先级。请输入此定价生效所需的最小数量。",
    min_quantity: "最小数量",
  },
  /** {@see BProductInventoryManagementPhysical} **/
  product_inventory_management_physical: {
    subtitle: {
      dropshipping:
        "代发货产品的库存由批发商设置，无法在此处修改。",
      marketplace:
        "市场中产品的整体库存由所有供应商的库存总和决定，您无法在此处修改。",
      default: "请在此处指定产品的库存数量。",
    },
    menu: {
      add_bulk: {
        title: "项目 项目",
        subtitle: "项目 项目 变体 项目 项目 操作.",
      },
      edit_property_set: {
        title: "项目 项目 项目",
        subtitle: "编辑 变体 项目, 项目 项目 订单.",
      },
    },
  },

  /**
   * @see USmartMenu
   */
  smart_menu: {
    show_delete_items: "项目 已删除 个",
  },

  /** {@see BProductGoogleCategoryInput} **/
  google_product_category_input: {
    label: "Google 产品 类别 代码",
    hint: "项目 项目 类别 项目 项目 产品 项目 到 项目 Google'项目 产品 项目.",
    placeholder: "输入产品或服务类别..（可选）",
  },
  /** {@see LogisticProfileType} **/
  LogisticProfileType: {
    WARRANTY: {
      title: "保修",
      desc: "保修是合同的一部分，制造商承诺在规定期限内维修或更换产品。此承诺甚至可以延伸至未与制造商直接签订合同的消费者。",
    },
    RETURN_POLICY: {
      title: "退货政策",
      desc: "退货政策概述了客户如何退换不想要的商品。退货政策规定了符合条件的商品、可接受的退货原因以及退货期限。",
    },
    GUIDE: {
      title: "指南",
      desc: "指南可以包括服装尺码表或钻石选购指南，且应具有通用性，适用于多种产品。",
    },
    SHIPPING: {
      title: "运输",
      desc: "运输政策详细说明了在线订单运输的关键事项，包括运输成本、方式和预计交货时间。",
    },
  },
  /** {@see BProductProfileLogistic} **/
  product_logistic_profile: {
    dialog: {
      title: "选择物流方案",
      add_new_action: "新增方案",
      add_new_disable_msg: "市场所有者",
    },
  },

  /**
   * @see BPageShopPagesPopups
   */
  b_shop_popups: {
    title: "项目 项目",
    subtitle:
      "创建 项目, 项目, 项目 项目 项目 项目.",
    add_action: "项目 新建 弹出窗口",
  },

  /** {@see BProductProfileTax} **/
  product_tax_profile: {
    description: {
      default: "默认",
      dedicated: "专用",

      subscription: "我们只在支付创建阶段应用税费。",
      is_disabled: "此税务配置文件已被禁用！（⚠️警告）",
      shipping: "运费",
      fixed_rate: "TAX 税费",
      location_based_rate: "税费：基于地点",
      shipping_location_based_rate: "运送：基于位置",
      include_in_price: "包含在价格中",
    },
    dialog: {
      header: "选择税务配置文件",

      title: "税务方案",
      subtitle:
        "您可以为产品指定特定的税收规定。如果没有为产品选择税收配置文件，则将应用默认的商店税收规定。",

      action_manage: "管理税务",
      action_manage_sub: "商店 > 财务 > 税务",

      subscription_tips:
        "项目 项目 项目 项目 TAX 产品概况 项目 订阅 产品, 项目 更新<code>TAX 代码</code> 项目 项目 项目/项目 项目 项目 项目 支付 服务 服务商. 项目 项目 TAX 产品概况 项目 项目 项目 价格 项目 项目 项目 项目 项目 项目 项目 项目 项目. 项目 项目 <code>项目</code> 项目 <code>项目</code>. 项目 项目 项目 项目 项目 项目 项目, 项目 项目 项目 项目.<br /><br /><b>项目!</b> 项目 项目 项目 TAX 产品概况, 项目 项目 项目 项目 定价 计划 项目 项目 产品 > 库存 项目 项目 项目 项目 保存 项目 到 项目 项目.",
    },
  },

  /**
   * @see BProductVendorAbstractView
   */
  product_vendor_profile: {
    vendor: {
      subtitle:
        "该产品的价格和数量由其所属的特定供应商设定。",
    },
    vendors: {
      subtitle:
        "这是该产品的供应商列表。数量和价格将由供应商决定。",
    },
  },
  /**
   * @see BVendorAdd
   */
  vendor_add: {
    menu: {
      profile: "产品概况 & 信息",
      business: "企业 & 支付",
      documents: "文件",
      page: "项目 模板",
      shipping: "发货中",
      access: "访问权限",
      critical_zone: "临界区",
    },

    profile: {
      title: "供应商信息",
      subtitle: "该信息向客户公开显示。",
      action_sub_caption: "公共产品列表页面。",
      action_see_listing_page: "查看列表页面",
      send_invitation_email: "已发送 项目 电子邮件",
      invitation_link: "项目 链接",
    },

    profiles: {
      title: "简介",
      subtitle: "项目 项目 项目 位置 到 项目 项目.",
    },
    map: {
      no_map_message:
        "项目 项目 位置 到 项目 项目 项目 项目 项目 项目 项目.",
    },
    page: {
      title: "自定义页面",
      subtitle:
        "为供应商设置自定义登陆页面，提供专属链接访问其专属页面。",
      action_set_page: "查看公开页面",
      action_sub_caption: "自定义登陆页面。",
      vendor_has_landing_msg: "供应商有一个自定义登陆页面。",
      no_landing_selected_msg: "未选择目标网页。",
      no_landing_page: "没有登陆页面",
      we_can_create_dedicated_landing_msg:
        "我们可以为您创建专门的登陆页面。",
    },
    contact: {
      title: "联系信息",
      subtitle: "请提供有效的联系信息。",
    },
    business: {
      title: "商业信息",
      subtitle:
        "请提供准确的业务信息，以确保收入收取流程顺利无阻。",
    },
    bank: {
      title: "付款信息",
      subtitle: "在此输入您的银行详细信息以便付款。",
    },
    default_pricing: {
      title: "默认定价",
      subtitle:
        "您可以为供应商指定默认定价模式。当供应商添加新产品时，将使用此定价模式计算产品价格的市场利润。您之后可以单独调整每个产品的定价模式。",
      no_pricing: "没有定价",
    },
    shipping: {
      title: "运输",
      subtitle: "供应商可以设置自己的运输服务和快递公司。",
      shipping_services: "运输服务",
      total_number_of_services:
        "供应商拥有的运输服务总数。",
      couriers: "快递公司",
      total_couriers_count: "供应商拥有的快递公司总数。",
    },
    configuration: {
      title: "配置",
    },
    delete: {
      title: "移除供应商",
      action: "移除供应商",
      verify_description:
        "我知道所有供应商与产品的关联关系将被移除！",
      verify_title: "我想删除这个供应商。",
    },

    send_invitation_tips:
      "我们将向该用户发送邀请电子邮件。如果该用户以供应商身份加入您的商店，他们的帐户将自动分配给他们。",
    only_marketplace_owner_can_edit_user:
      "只有市场所有者可以编辑用户。如果您想更改此供应商的所有者，可以向我们发送请求。",
    vendor_is_disable_msg: "供应商已被禁用。",
    email_not_match_with_user_msg:
      "输入的电子邮箱与用户电子邮箱 ( <b>{user_name}:</b> {user_email}) 不匹配。您确定要将电子邮件发送至<b>{email}</b>吗？",

    order_information_email_to_email:
      "项目 项目 已发送 订单 项目 到 <b>{email}</b>.",

    set_a_user_for_the_vendor_first_msg: "首先为供应商设置一个用户。",

    inputs: {
      slug: {
        label: "路径",
        placeholder: "输入自定义路径...",
        hint: "更改供应商动态登陆页面的路径。",
      },
      email: {
        message: "该电子邮件将接收所有通知和更新。",
      },
      business: {
        false_description: "我以个人身份工作。",
        true_description: "我以合法注册的企业身份运营。",
        false_title: "个人",
        true_title: "企业",
      },
      bank: {
        hint: "供应商银行账户所在银行的名称。",
        placeholder: "您的银行名称..",
      },
      account_name: {
        hint: "此名称应与银行账户关联的名称一致。",
        placeholder: "你的名字..",
      },
      account_number: {
        hint: "供应商的唯一账户号码。",
        placeholder: "您的银行账户号码..",
      },
      routing_number: {
        hint: "此号码因国家而异，用于识别供应商所使用的具体银行分支机构。",
        placeholder: "您的银行路由号码、分类代码或 BSB 号码..",
      },
      iban: {
        hint: "国际银行账户号码（IBAN）：适用于供应商银行位于欧洲或其他部分国家。",
        placeholder: "您的 IBAN 号码.. 例如 DE89 3704 0044 0000 0000 00",
      },
      swift: {
        hint: "国际银行代码（SWIFT/BIC）：适用于供应商银行位于欧洲或其他部分国家。",
        placeholder: "项目 SWIFT 代码/BIC..",
      },
      branch_address: {
        hint: "供应商银行账户所在分行的地址。",
        placeholder: "您的银行地址..",
      },
      enable: {
        label: "供应商状态",
        hint: "您可以全局启用或禁用供应商。客户将无法从已禁用的供应商处购买任何商品。",
        true_description:
          "他们将能够通过您的市场销售他们的产品。",
      },
      access: {
        label: "供应商面板和访问权限",
        true_description:
          "供应商有一个专门的面板来更新数量和价格。",
        hint: "您可以启用或禁用供应商面板，这允许供应商更新产品数量和价格并接收部分订单。",
        false_description: "供应商没有任何权限。",
      },

      logo: {
        label: "项目 项目",
      },
      description: {
        placeholder: "项目 项目 公开 等级描述...",
      },
    },
  },

  /**
   * @see BVendorDocumentsList
   */
  vendor_documents_list: {
    title: "文件",
    action_upload_doc: "上传文件",
    vendor_subtitle:
      "请上传必要的营业执照、知识产权和地址验证文件。我们需要这些信息来确认您的合作关系，并为您提供相应的权限。",
    marketplace_subtitle:
      "供应商可提交营业执照、知识产权和地址验证等文件，以便完成身份验证（KYC）流程，从而获得适当的权限。",
    upload_dialog: {
      title: "上传文件",
      type: {
        title: "文件类型",
        subtitle:
          "请仅上传必要的文件。避免上传包含敏感信息的文件。我们只需公开可用的文件。",
      },
    },
  },

  /**
   * @see BProductBadgesManage
   */
  product_badges: {
    title: "徽章",
    subtitle: "添加和编辑自定义产品徽章。",
    only_marketplace_owner_msg: "仅限市场所有者",
    create_new_badge_action: "创建新徽章",
    select_a_badge: "选择徽章...",
    inputs: {
      custom: {
        false_description: "产品徽章会自动生成。",
        false_title: "自动",
        true_title: "自定义产品徽章",
        true_description: "在产品页面添加自定义徽章。",
      },
    },
    add_custom_badge: {
      title: "自定义徽章",
      subtitle:
        "向我的店铺添加一个新的自定义徽章。徽章数量请保持在10个以内。过多徽章会降低店铺速度。",
      show_advanced_options: "显示高级选项",

      inputs: {
        title: {
          placeholder: "公开标题...",
        },
        image: {
          label: "图片",
          message: "最大图片大小：128KB",
          placeholder: "选择封面图片",
        },
        pattern: {
          label: "图案",
          message:
            "自动为规格中匹配该值的产品显示此徽章。支持正则表达式。",
          placeholder: "要显示所有产品，请输入：*.*",
        },
      },
      notifications: {
        badge_added: "徽章已成功添加！",
        badge_updated: "徽章已成功更新！",
        item_not_found_error:
          "找不到该商品。请刷新页面或联系客服。",
      },
    },
  },
  /**
   * @see BProductTagsInput
   */
  product_tags: {
    title: "标签",
    tips: [
      "您可以在<b>着陆页</b>上根据标签筛选产品。",
      "您和您的客户可以在<b>搜索</b>栏中搜索这些标签。",
      "如果设置了标签，产品页面的<b>相关产品部分</b>将只显示具有<b>共同标签</b>的产品；否则，将显示同一类别的产品。",
    ],
    inputs: {
      tags: {
        placeholder: "项目 标签 项目 项目 项目 项目. 项目. 新建 项目",
      },
    },
    notifications: {
      tags_updated: "标签已成功更新。",
    },
  },

  /**
   * @see VPageVendorShippingTransportation
   */
  vendor_shipping_services: {
    title: "运输服务",
    subtitle:
      "平台提供运输方式，帮助商家完成订单。您可以在此添加运输服务，方便从订单页面直接购买运单标签。这样可以简化流程，实现地址和追踪码与运输服务商的同步。",

    subtitle_pickup:
      "项目 商城模式 项目 项目 项目 项目, 项目 项目 到 项目 项目 从 项目 位置 项目 项目 发货中 项目. 项目 项目 项目 项目 项目 位置 项目 项目 产品概况 (项目 仓库 项目 项目 已使用 项目 项目 默认 项目 位置).",
    action: "添加服务",

    add_dialog: {
      select_service_msg:
        "运输方式由平台设定，客户可从中选择。商家无法控制这些选项，但可以将面板与运输服务集成，直接购买运单标签。请选择下面列表中的运输方式以查看可用服务。这里仅显示可添加到您店铺的可用服务。",
      no_available_service: "没有可用的服务！",
    },
  },
  /**
   * @see VPageVendorShipping
   */
  vendor_shipping: {
    services: "配送服务",
  },

  /** {@see BProductProfileMap} **/
  product_location_profile: {
    title: "地点",
    empty_subtitle:
      "如果产品是基于位置的商品，则为产品分配一个位置。",
    dialog: {
      header: "选择位置配置文件",
      action_new_location: "添加新位置",
      title: "位置简介",
      subtitle:
        "您可以通过为产品分配位置标签将产品固定在地图位置上。",
      tips: "<b>重要提示：</b> 仅当您希望在地图上显示产品的具体位置时，才为产品分配地点。被固定的产品必须以地点作为其主要规格，例如<b>出租房屋/场所</b>或线下服务如<b>美发和水疗</b>。",
    },
  },

  /** {@see BTranslationButton} **/
  translation_button: {
    header: "多语言",
    auto_action: "自动翻译",
    premium_user_only: "高级用户",
  },

  /** {@see BProductProfileInclude} **/
  product_include_profile: {
    subtitle:
      "包含产品或服务套餐中的物品列表。",
    dialog: {
      header: "产品包含物品",
      title: "包含物品",
      subtitle: "这是产品附带物品的汇总列表。",
      action_manage: "管理物品",
      action_disable_msg: "仅限市场所有者",
      select_items_tips:
        "创建或选择随产品或服务附带的包装组件。利用此功能强调客户在购买商品后可以期待收到什么。我们建议仅在客户必须了解所包含的内容时才使用此功能，例如购买智能手机时。",
      create_item_tips:
        "您也可以添加新的包含物品。请使用方形图片，系统会自动调整上传的图片为256x256的正方形格式。为了保证所有模板中显示效果最佳，请使用简约风格且带透明背景的图片，并保持所有产品图案一致。",
      create_new_item_action: "创建新的包含物品",
    },
  },

  /** {@see BPageProduct} **/
  product_admin: {
    products_list: "产品列表",
    product: "产品",

    menu: {
      edit: "编辑",
      review: "描述",
      orders: "订单",
      inventory: "库存",
      dashboard: "仪表盘",
      back_to_products: "产品",
      drop_shipping: "代发货",
    },

    /** {@see BPageProductDashboard} **/
    dashboard: {
      /** {@see BProductInfoAbstractView} **/
      info: {
        title: "产品概况",
        title_small: "产品",
        category: "产品分类",
        link: "产品链接",
        type: "类型",
        inputs: "输入信息",
        outputs: "输出信息",
        user_data_form: "买家信息表",
        staff_messages: "员工消息",
        add_note: "添加备注",
        product_tags: "产品标签",
        edit_tags: "编辑标签",
      },
      /** {@see BProductOrdersAbstractView} **/
      orders: {
        title: "订单",
        title_small: "未处理",
        physical_orders_title: "包含该产品的购物车",
        send_count_in_period: "已在 {start} ~ {end} 之间发货的订单",
        downloads_count_in_period:
          "{start} ~ {end} 之间的文件下载计数",
      },

      /** {@see BProductInventoryAbstractView} **/
      inventory: {
        title: "存货",
        title_small: "仓库",
        total_sell: "总销售额",
        total_sell_today: "今日销售额",
        total_sell_timespan: "{start} ~ {end} 之间的总销售额",
        chart: {
          labels: ["存货", "销售"],
        },
        subscribers_title: "订阅者",
        subscribers_title_small: "总订阅订单数",
      },

      /** {@see BProductFinanceCharts} **/
      finance: {
        title: "财务",
        title_small: "{start} 到 {end} 期间购买报告",
        select_mode_title: "显示方式",
        modes: {
          sell: "销售",
          payment: "支付",
          discount: "折扣",
        },
        currency_select_title: "按所选货币显示价格",
        sell_today: "今日销量",
        product_price: "产品价格",
        currency_unit: "货币单位",
        sell_30days: "30天销售",
        sell_daily: "日销售额",
        sell_yesterday: "昨天的销售额",
      },

      /** {@see BProductRatingCharts} **/
      survey: {
        title: "产品评分",
        title_small: "客户满意度报告",
        total_participation: "累计参与次数",
        total_participation_tooltip: "该产品的评分者总数。",
        today_participation: "今日评分次数",
        last7days_participation: "最近7天参与次数",
        chart: {
          participate: "参与度",
          participate_title: "参与次数",
          score: "分数",
        },
        users_not_rated_msg: "用户尚未对此产品进行评分。",
      },

      /** {@see BProductMarketingAbstractView} **/
      inform: {
        title: "客户期望",
        title_small: "等待折扣或补货",
        message:
          "当产品有折扣或上架时，通知客户。",
        waiting_for_auction: "等待产品上架",
        waiting_for_available: "等待产品补货。",
        unit: "人",
      },
    },

    /** {@see BPageProductInventory} **/
    inventory: {
      /** {@see BProductInventoryManagement} **/
      variants: {
        inventory_list: "库存清单",
        add_variant: "添加变体",

        title: "产品库存/产品变体列表",
        sub_title:
          "如果此产品有多个变体，请在此部分输入。您可以单独定义每个变体的数量、价格和折扣；否则将使用产品的默认值进行定价。",
        add_action: "添加变体",
        count_input: "库存",
        count_input_action: "设置库存",
        management_title: "库存管理和产品变体",
        add_title: "添加产品变体",
        edit_title: "编辑产品变体",
        notifications: {
          add_success: "产品变体已添加。",
          delete_success: "产品变体已删除。",
          save_product_inventory_success: "产品库存已保存。",
        },
      },

      /** {@see BProductInventoryManagementVirtual} **/
      variant_item: {
        price: "价格",
        same_as_product: "与主产品相同",
        in_stock: "库存",
        delete_dialog: {
          title: "删除产品变体",
          message: "是否要删除此变体？",
        },
      },
      /** {@see BProductVariantAdd} **/
      variant_add_edit: {
        message: "唯一的产品变体编码",
        active_input: "此变体是否有效？",
        sku: "SKU",
        sku_tips: "产品仓库代码。",
        mpn: "MPN",
        mpn_tips: "制造商在产品包装上插入的产品代码",

        has_pricing_input: "该变体的价格是否不同于主产品？",
        inventory_unit: "件",
        images_message:
          "保存此变体后，您将能够在此处添加图片。",

        config: {
          title: "产品 项目 安装",
          subtitle: "项目 SKU, MPN, 项目 项目 项目 变体.",
        },
        variables: {
          title: "项目 选项",
          subtitle:
            "项目 项目 项目 颜色 代码, 项目.项目., <b>#654FFF</b>, 项目 项目 项目 项目 项目 项目 项目, 项目.项目., <b>#764FFA/#000000</b>.",
          graphical_asset_tips:
            "项目 项目 项目 项目 值 到 项目 项目, 项目 图片 项目 <b>项目 项目</b>. 项目 项目 图案 项目 项目 项目 项目 代码 项目 项目 项目.",
          graphical_asset_action: "项目 项目",
          graphical_asset_action_caption: "图片 项目 项目 选项.",
        },
        smart_unit_price: {
          tips: "项目 单位 价格 项目 项目 <b>重量</b>, <b>体积</b>, 项目 <b>项目 项目</b>. 到 禁用 项目 项目, 项目 到 店铺 > 编辑 > 主题 > 产品 项目 > 项目 单位 价格.",
          smart_unit_price: "单位 价格 项目",
        },
        quantity: {
          title: "库存",
          subtitle: "项目 项目 项目 项目 项目 项目.",
        },
        price: {
          title: "定价",
          subtitle:
            "项目 项目 自定义 价格 项目 项目 项目 项目 项目 项目 默认 产品 价格.",
        },
        package: {
          title: "项目 & 发货中",
          subtitle:
            "项目 重量 项目 项目 项目 变体 到 项目 发货中 选项.",
          same_as_product_action: "项目 项目 产品",
        },
        image: {
          title: "项目 图片",
          subtitle:
            "项目 项目 图片 项目 项目 项目. 项目 项目 图片 项目 项目 项目 项目 主域名 图片 项目 项目 项目.",
        },
        inputs: {
          sku: {
            message: "项目 项目 单位 (SKU)",
          },
          mpn: {
            message: "项目 项目 项目 (MPN)",
          },
          gtin: {
            label: "项目 项目 产品 项目 (GTIN)",
            message:
              "项目 项目: UPC (12 项目), EAN (13 项目), JAN (8 项目 13 项目), ISBN (13 项目).",
          },
        },
      },
    },

    /** {@see BPageProductArticle} **/
    edit_article: {
      menu: {
        tags: "标签",
        article: "文章",
      },
    },
  }, // product_admin

  /**
   * @see TransportationsEligibleView
   */
  transportation_eligible: {
    subtitle:
      "可用的运输服务取决于提供的尺寸和重量。",
  },

  /** {@see BProductExtraInput} **/
  product_extra_physical: {
    weight: "包裹重量",
    weight_subtitle:
      "在此输入产品的总包装重量。此信息有助于选择正确的运输方式并确保订单不超过运输限制。",
    weight_unit: "千克",
    size: "包装尺寸",
    size_subtitle:
      "在此输入产品的完整包装尺寸。此信息用于选择正确的运输方式并确保订单不超过包裹尺寸限制。",

    width: "宽度",
    length: "长度",
    height: "高度",
    lead_time_title: "备货时间",
    lead_time: "备货时间",
    lead_time_subtitle:
      "备货时间用于估计产品从下单到准备完毕所需的时间，有助于预估交付时间。",

    lead_time_dimension: "小时",
    bulk_action: "批量操作",
    bulk_action_subtitle:
      "您可以将包装信息应用到所有产品变体。",

    bulk_action_input: "更新所有变体",
    bulk_action_msg:
      "为所有变体设置产品包装和备货时间。",
    dynamic_lead_time: "项目 项目 时间",
    instant_delivery: "项目 配送",
  },

  /**
   * @see SGalleryUploadGrid
   */
  gallery_upload_grid: {
    upload_images: "项目 图片",
  },

  /**
   * @see BProductImagesGallery
   */
  product_images_gallery: {
    dialog_alt: {
      title: "项目 图片 项目 项目",
      placeholder: "项目 项目 项目 项目 项目...",
      success_update_notification: "项目 项目 项目 项目.",
    },
    dialog_bg_remove: {
      title: "移除 项目 项目",
      action: {
        title: "移除背景",
        subtitle: "创建 项目 项目 项目.",
      },
      success_remove_bg_notification: "项目 项目 项目!",
    },
  },
  /**
   * @see VariantGraphicalAssetsList
   */
  variant_graphical_assets: {
    title: "项目 项目 项目",
    tips: {
      how_it_works:
        "<b>项目 项目 项目:</b><br />项目 图案 项目 产品 图片 项目. 到 项目 项目 图片 项目 项目 项目 项目, 项目 <b>{filename}</b> 项目 项目 项目 值. 备注 项目 项目 代码 项目 项目 已使用 项目 项目 <b><s>颜色</s></b> 值.",
      how_set_name:
        "<b>项目 项目:</b><br />项目 项目 12 项目 项目 项目 项目 项目 姓名 项目 项目 已使用 项目 项目 项目 姓名. 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 产品, 项目 项目 项目 项目 项目 项目 项目 项目 项目. 到 项目 项目 项目 项目 项目 项目, 项目 项目 项目 图片 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 100, 项目 项目 项目 项目 类 项目 家具.",
    },
  },

  /**
   * @see ExtraPricingLevels
   */
  extra_pricing_levels: {
    extra_pricings: "项目 项目",
    min_quantity: "最低 数量",
    range_is_out_of_stock: "项目 项目 项目 项目 项目!",
  },

  /**
   * @see BProductVariantItem
   */
  product_variant_item: {
    duplicated_variant: "项目 项目 项目 项目!",
    set_color_warning: "项目 项目 项目 颜色.",
    set_volume_warning: "项目 项目 项目 体积.",
    set_pack_warning: "项目 项目 项目 项目 项目.",
    set_weight_warning: "项目 项目 项目 重量.",
    set_type_warning: "项目 项目 项目 类型.",
    set_style_warning: "项目 项目 项目 风格.",
    out_of_stock: "项目 项目 项目 项目",

    image: {
      tooltip: "⚡ 项目 项目 项目 项目 图片 项目 到 项目 项目 到 项目 项目.",
    },
    enable: {
      true_tooltip: "项目 产品 项目 有库存的 项目 项目 项目 店铺.",
      false_tooltip: "项目 产品 项目 项目 有库存的 项目 项目 项目 店铺.",
    },
    restore_dialog: {
      title: "项目 项目",
      message: "项目 项目 项目 项目 项目 到 项目 项目 已删除 项目?",
      action: "项目, 项目 项目",
    },
    notifications: {
      restore_variant_success: "项目 产品 项目 项目 项目 项目.",
    },
  },

  /** {@see BProductImagesGallery} **/
  product_images_list: {
    upload_button: "更多产品图片",
    upload_an_image: "选择一张图片。",
    notifications: {
      update_sort_success: "图片排序已保存",
      delete_image_title: "删除产品图片",
      delete_image_success: "图片删除成功",
    },
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "价格",
    inventory: "存货",
    discount: "折扣",
  },

  /** {@see BGiftcardTypeAdd} **/
  gift_card_type_edit: {
    title_input: "标题",
    color_input: "卡片颜色",
    charge_input: "初始金额",
    charge_input_hint: "每张卡的初始金额",
    currency_input: "货币",
    currency_input_message: "仅适用于使用此货币购买",
    lifetime_input: "卡有效期（月）",
    lifetime_input_message: "卡有效期",
    card_image_input: "卡片图片",
    notifications: {
      create_success: "已创建卡片",
      update_success: "卡片已更新",
    },
  },

  /** {@see BInventoryWarehouse} **/
  shop_warehouse_edit: {
    title: "添加仓库",
    message:
      "输入您的仓库地址和资料以计算运费。",
    name_input: "仓库名称",
    address: "地址",
    name_input_message: "输入仓库的昵称。",
    person_name: "负责人姓名",
    phone_number: "联系电话",
    map_title: "店铺仓库地址",
    confirm_action: "仓库确认",
    address_name: "仓库",
    notifications: {
      success_save: "更改已成功保存。",
    },
  },

  /** {@see BPageShopLogisticInventoryList} **/
  inventory_list: {
    title: "商店库存",
    subtitle: "商店中所有产品的列表。",
    cant_set_here: "无法在此处设置",

    search_input: "产品搜索...",
    search_input_title: "在商店产品中搜索",
    apply_filter: "应用筛选",
    inventory: "库存清单",
    export: "导出库存",
    import: "导入库存",
    bulk_price: "批量价格修改",
    bulk_discount: "批量折扣修改",
    category_filter_msg: "⚡ 将应用于所有产品和子类别！",
    table: {
      waiting: "正在接收信息...请稍候",
      open_state: "已启用的",
      close_state: "已停用的",
      image: "图片",
      product: "产品名称",
      code: "产品代码",
      sku: "SKU",
      mpn: "MPN",
      original: "原产地",
      status: "状态",
      in_stock: "有库存",
      edit: "编辑",
    },

    bulk_discount_dialog: {
      title: "批量操作 > 折扣",
      message:
        "注意：以下将按百分比应用于您商店中所有产品的折扣。同时，计算出的折扣数值将根据所选货币自动四舍五入为接近的整数。请谨慎输入数值。",
      check: "我确认折扣更改。",
    },
    notifications: {
      save_success: "库存更改已保存。",
    },
  },

  /**
   * @see BInventoryBulkPrice
   */
  bulk_price_dialog: {
    title: "批量操作 > 价格",
    message:
      "以下金额将以百分比形式应用于您商店中所有产品的价格。此外，计算出的价格值将根据所选货币智能转换为最接近的整数。输入这些值时请小心谨慎。",
    check: "我同意价格变动。",
    check_description:
      "所选类别及其所有子类别的价格将会改变。",
    add_percent_tab: "添加百分比",
    add_constant_tab: "添加固定金额",
    ending_tab: "结束策略",
    marketplace_listing_price: "标价(挂牌价格）",

    constant: {
      subtitle:
        "该金额将从产品的当前价格中增加或减少。",
    },
    ending: {
      subtitle:
        "产品当前价格的结尾将被更改为指定值。",
    },
    marketplace: {
      title: "市场挂牌价格",
      subtitle:
        "此选项可让您自动更新市场上产品的标价。有时，由于手动价格变动，主要产品价格可能与供应商定价不一致。",
      strategy: {
        min: {
          title: "设定最低价格",
          description:
            "将产品的最低价格设置为标价。",
        },
        max: {
          title: "设定最高价格",
          description:
            "将产品的最高价格设为标价。",
        },
      },
    },

    category: {
      subtitle: "将批量操作限制在一个类别及其所有子类别内。",
    },
    vendor: {
      subtitle:
        "将批量操作限制到特定供应商。选择供应商后，价格更新将应用于该供应商的产品，这代表该供应商的销售价格。",
      listing_price_need_update_msg:
        "如果您想更新标价（产品列表中显示的价格），您应该使用相同的筛选器重新提交批量更新，但不要选择供应商。",
    },
    listing_products_changes: "挂牌产品变更",
    total_vendor_products: "供应商产品总数",
    total_products: "产品总数",
    total_variants: "总变体数",
  },

  /** {@see BProductSpecTable} **/
  spec_view: {
    auto_save_input: "自动保存",
    auto_save_input_message: "更改将自动保存。",
  },

  /** {@see STimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "距离开始还有",
    title_between_start_end: "距离结束还有",
    title_after_end: "已结束",
    title_no_start_end: "无时间段！",
  },

  /** {@see GeoMap} **/
  geo_map: {
    views: "浏览次数",
    views_unit: "次",
    product_views: "产品浏览量",
    buys: "购买",
    buys_unit: "订单",
    baskets: "活跃购物车",
    added_items: "添加商品",
    removed_items: "移除商品",
  },

  /** {@see BPageShopFinanceGateways} **/
  b_page_shop_finance_gateway: {
    title: "支付 项目",
    sub_title:
      "列表视图 项目 已启用的 支付 项目. 项目 项目 项目 到 项目 项目 新建 项目 到 项目 店铺, 项目 项目 项目 项目. 项目 项目 项目 项目 项目 10 项目 支付 支付网关.",
    add_gateway: "新建 支付 项目",

    add_gateway_dialog: {
      title: "项目 货币",
      country_currencies: "项目 项目",
      crypto_currencies: "项目",

      confirm: "添加付款方式",

      online_methods: "项目 项目",
      cod_methods: "项目 项目 配送",
      bank_transfer: "银行 转账",
      cash_methods: "项目 支付 (POS)",

      currency_step: {
        title: "项目 项目 货币",
        subtitle:
          "项目 到 项目 项目 项目 项目 项目 项目 项目 店铺 到 项目 项目—项目 项目 项目 3. 项目 支付 支付网关 项目 项目 交易 项目 项目 项目 货币.",
        add_first_currency: {
          subtitle: "项目 项目 项目 货币 到 项目 店铺 项目 项目.",
          title: "添加货币",
        },
      },
      gateway_step: {
        title: "已启用的 支付 项目",
        subtitle:
          "项目 项目 从 项目 有库存的 支付 项目. 项目 项目 项目 项目 网关, 项目 项目 项目 到 项目 项目 项目 项目 许可证详情 到 链接 项目 店铺 项目 到 项目 项目 支付 项目.",
      },

      config_step: {
        import_config: "项目 项目 导入 配置 从 其他 项目 支付网关",
        import_from: "导入 从",
      },

      request_add_new_gateway: {
        title: "项目 项目 项目 项目 支付 项目?",
        subtitle:
          "项目 项目 项目 支付 服务商 项目 项目, 项目 到 项目 年度 计划 (项目 项目 项目 项目) 项目 项目 项目 项目. 项目 项目 项目 项目 48 项目 项目 项目 项目 账户 项目 项目 项目 项目.",
      },

      inputs: {
        currency: {
          placeholder: "项目 项目 网关 到 导入...",
        },
        manual: {
          true_title: "手动添加 项目",
          true_description: "项目 项目 项目 网关 配置 手动添加.",

          false_title: "自动 项目",
          false_description:
            "项目 项目 项目 项目 项目 到 项目 网关 项目 项目 项目 项目 项目 项目 网关 项目 项目.",
        },
      },
    },
  },

  /** {@see FaqRequestsList} **/
  faq_list: {
    table: {
      nodata: "未找到问题。",
      more_data_action: "更多问题..",
      user: "用户",
      tag: "标签",
      question: "问题",
      officer: "客服人员",
      answer: "回答",
      created_at: "日期",
      priority: "优先级",
      edit: "编辑",
    },
    dialog: {
      add_new_action: "提交新问题",
      edit_action: "编辑常见问题",
      question_input: "问题",
      question_input_placeholder: "请输入你的问题..",
      link_input: "链接",
      link_input_placeholder: "您可以在回复中引用链接。",
      answer_input: "回答",
      answer_input_placeholder: "请输入答案文本..",
      tag_input: "标签（类别标题）",
      tag_input_placeholder: "输入一个简短的标题",
      priority_input: "优先级：（0 到 10）",
    },
    delete_alert: {
      title: "删除问题",
      message: "您确定要删除此问题吗？",
      action: "删除",
    },
    notifications: {
      send_success: "您的答案已成功提交。",
      delete_success: "您的问题已成功删除。",
    },
  },
  /** {@see ContactMessagesList} **/
  contact_messages_list: {
    load_more_action: "更多消息..",

    table: {
      nodata: "未找到任何问题。",
      user: "用户",
      message: "消息内容",
      category: "分类",
      officer: "客服",
      answer: "回复",
      created_at: "日期",
      contact: "联系方式",
      edit: "编辑",
    },

    dialog: {
      title: "回复消息",
      category: "分类",
      user_name: "姓名",
      email: "电子邮件",
      phone: "联系电话",
      message: "消息文本",
      status: "回复状态",
      status_answered: "已回复",
      status_waiting: "等待回复",
      answer_input: "回复内容",
      mail_input: "发送邮件",
      mail_input_message:
        "启用后，您的回复将通过电子邮件发送给用户。",
    },
    delete_alert: {
      title: "删除消息",
      message: "您要删除此消息吗？",
      action: "删除",
    },
    notifications: {
      send_success: "您的请求已成功提交。",
      delete_success: "消息已删除。",
    },
  },
  /** {@see BPageCampaign} **/
  campaign: {
    title: "活动",
    menu: {
      setting: "设置",
      return: "返回",
      dashboard: "仪表盘",
      links: "链接",
      landing: "落地页",
      ads: "广告",
      finance: "财务",
    },
    /** {@see BPageCampaignDashboard} **/
    dashboard: {
      title: "仪表盘",
      status: "状态概览",
      sessions: "访问次数",
      links_overview: "活动链接概览",
      orders: "订单",
      performance: "活动表现",
      links_funnel: "活动链接表现",
      no_links:
        "暂无可用数据！请先创建活动链接。",
      social: "社交媒体引流",
      conversion_over_time: "转化趋势",
      total_campaign_sell: "活动总销售额",
    },
    /** {@see BPageCampaignFinance} **/
    finance: {
      title: "财务报告",
      campaign_revenue: "活动收入",
      total_revenue:
        "代表每个活动产生的总体收入。",
      links_revenue: "活动链接收入",
      payments_over_time: "随时间变化的销售额",
      all_links: "所有链接",
    },
    /** {@see BPageCampaignLanding} **/
    landing: {
      empty_message: "您可以为活动设定一个自定义落地页。",
      set_landing: "设置落地页",
      create_landing: "创建新的落地面",
    },

    /** {@see BPageCampaignLinks} **/
    links: {
      title: "活动链接",
      url_input_message: "请输入您的目标页面网址",
    },

    /** {@see BPageCampaignSetting} **/
    setting: {
      menu: {
        config: "配置",
        timespan: "时间段",
        banner: "横幅",
        Notification: "通知",
      },

      general_setting: {
        title: "通用活动设置",
        sub_title: "为您的活动添加名称",

        name_input: "活动名称",
        name_input_hint: "为您的活动添加名称",
        enable_input: "活动是否启用？",
        page_input: "落地页",
        discount_code_input: "优惠码",
        limit: "折扣限额",
        max_count: "最大数量",
        max_count_unit: "件",
        start: "开始时间",
        end: "结束时间",
        notification_enable_input: "启用通知？",

        landing_page: "落地页",
        discount_code: "优惠码",

        auto: "默认活动",
        auto_message:
          "此活动已设为店铺的默认活动。",
      },
      time_setting: {
        title: "时间段",
        sub_title:
          "您可以为活动设置开始和结束的日期和时间。",
        start_input: "开始时间",
        start_input_placeholder: "选择活动开始时间",
        end_input: "结束时间",
        end_input_placeholder: "选择活动结束时间",
      },
      banner_setting: {
        title: "店铺横幅",
        sub_title:
          "此消息将作为横幅在商店页面顶部显眼显示。",

        message_input: "消息文本",
        message_input_placeholder: "特别节日...",
        message_input_hint: "横幅顶部的消息文本",
        bg_image_input: "背景图片网址",
        bg_image_input_hint: "完整的背景图片网址",
        repeat_pattern: "重复模式",
        simple: "简单",
        dark_input: "暗色主题？",
        icon_input: "图标",
        icon_input_hint:
          "项目 设计 图标 姓名 项目 Fontawsom: 项目:项目 项目",
        anim_input: "动画文件地址",
        anim_input_message: "Lottie 项目 项目 URL",
        preview: "预览",
        preview_update_action: "更新预览",
        bg_color: "背景颜色",
        icon_bg: "图标背景颜色",
      },
      notifications: {
        title: "通知",
        sub_title: "创建一个通知并将其与您的活动关联。",
        update_success: "您的活动已更新。",
        action_button: "动作按钮",
        background_color: "背景颜色",
        text_color: "文字颜色",
        action_color: "按钮颜色",
        action_text_color: "按钮文本颜色",
        notification_image: "通知图片",
        notification_bg: "通知背景",
        show_preview: "显示预览",
        persistence: "显示频率",
        persistence_message:
          "是否在用户每次访问网站时显示该通知",
        radius: "圆角半径",
        show_delay: "显示延迟",
      },
    },
  },

  /** {@see BCategoryAdd} **/
  add_category: {
    title_edit: "编辑分类",
    title_update: "添加新分类",

    config: {
      subtitle:
        "分类有助于简化产品管理，让您的客户更容易在店铺中找到产品。",
    },
    parent: {
      subtitle:
        "该分类将显示在其父分类下。如果产品没有父分类，则会显示在主分类中。",
    },
    template: {
      title: "模板",
      edit_page: "编辑页面",
      Pages_list: "页面列表",
      subtitle:
        "您可以通过叠加自定义页面来增强分类页面的展示效果。最佳做法是创建透明背景的页面，并设计针对每个分类的1至2个专属版块。然后，您可以将一个页面链接到多个分类，使用动态内容为每个分类单独定制。",
    },
    critical_zone: {
      title: "临界区",
      subtitle:
        "如果您删除一个分类，其子分类和产品将被移至父目录<b>📁 {parent}</b>。要管理未出现在产品列表中的分类，请前往店铺 > 分类 标签。",
      accept_delete: {
        true_description: "我想删除此分类。",
        true_title: "确认删除分类",
      },
    },

    menu: {
      delete: "删除分类",
      filter: "筛选器",
      settings: "设置",
      back: "返回",
    },
    title_input: "分类标题 *",
    title_input_error: "请输入一个类别标题。",
    name_input: "分类名称（英文） *",
    name_input_error: "请选择一个唯一的分类名称",
    description_input: "分类说明",
    description_input_message: "输入分类的简要说明..",
    parent_input: "上级分类",
    parent_input_message: "此分类显示在店铺首页。",
    image_input: "分类图片",
    image_input_placeholder: "为分类选择一张图片",
    edit_action: "编辑分类",
    add_action: "添加分类",
    back_action: "返回",
    no_category: "没有分类",
    star: "星标",

    filter: {
      title: "分类筛选器",
      sub_title: "修改该分类的商品筛选条件。",
      message:
        "在下方输入并保存该分类的常用技术特征标题。保存列表后，筛选条件将与每个类别的内容一起显示。颜色、重量、尺寸、品牌等信息将自动从商品变体中提取。",
    },
    delete_alert: {
      title: "移除分类",
      message: "您要移除 {title} 类别吗？",
      action: "删除",
    },
    notifications: {
      add_success: "新分类已添加。",
      edit_success: "分类已编辑。",
      delete_success: "已删除 {title}。",
    },
    /** {@see BCategoryFilterEditor} **/
    edit_filter: {
      spec_input: "技术规格表",

      price: "价格",
      min: "最低",
      max: "最高",
      suggested_list: {
        brand: "品牌",
        colors: "颜色",
        styles: "设计",
        volumes: "体积",
        weights: "重量",
        packs: "每包数量",
        types: "类型",
      },
      notifications: {
        edit_success: "分类已编辑。",
      },
      manually_update_filters_tips:
        "<b>重要提示！</b> 当产品发生变化时，筛选器会自动更新。但在对某分类的产品进行更改后，请返回此处并点击保存/重新生成按钮以刷新筛选器。",

      inputs: {
        spec: {
          message:
            "您希望在筛选部分显示的特征列表",
          placeholder: "选择要在筛选中显示的规格...",
        },
      },
    },
  },

  /** {@see BAppShopList} **/
  apps_list: {
    nodata: "您的店铺中没有安装任何应用",
    inactive: "未激活",
    my_apps: "我的应用",
    app_store: "添加新应用",
  },

  /** {@see BShopAdd} **/
  add_shop: {
    menu: {
      shop_title: "店铺标题",
      shop_name: "店铺名称",
      description: "描述",
      contact: "联系信息",
      image: "图片",
    },
    title_input: "标题",
    title_input_tips: "输入您的店铺、品牌或公司的名称。",
    active_message: "设置为激活后，所有人都可以访问您的网站。",
    language_input_message: "选择您的店铺语言。",
    name_input: "名称",
    name_input_message: "输入店铺的名称。",
    name_input_tips:
      "请勿使用非英文字符、空格或字母，如果使用，可能无法正常显示店铺名称。",
    description_input: "店铺描述",
    description_input_message: "写一个关于您的业务的简短描述。",
    description_input_tips:
      "项目 等级描述 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 已使用 项目 项目 默认 Meta 标签 等级描述 项目 项目 店铺 页面.",
    address_input: "店铺地址",
    address_input_message: "请输入准确的店铺地址。",

    phone_input: "电话号码",
    phone_input_message: "客户联系电话",
    phone_input_tips:
      "请输入带国家代码的联系电话。此号码也会显示在谷歌搜索信息中。",
    email_input: "电子邮件",
    email_input_message: "客服电子邮件",
    locality_input: "位置",
    locality_input_message: "店铺位置",
    region_input: "州或省",
    region_input_message: "您经营所在的州或省",
    country_input: "国家",
    country_input_message: "经营所在国家",
    postal_code_input: "邮政编码",
    postal_code_input_message: "商店邮政编码",
    image_input: "店铺图片",

    map: {
      title: "店铺地址",
      confirm: "地址登记",
      address: "地址",
      receptor: "店铺",
    },

    create_shop_action: "创建店铺",
    update_shop_action: "更新",

    notifications: {
      copy_success: "店铺地址已复制。",
      name_available: `此名称 ({name}) 可用。`,
      add_success: `店铺 {title} 已创建。`,
      edit_success: "商店已编辑。",
    },
  },

  /** {@see BProductInventoryManagementVirtual} **/
  virtual_items_list: {
    add_virtual_item: "添加虚拟商品",
    add_virtual_item_desc:
      "要销售虚拟产品，您可以在此部分添加。虚拟商品的数量由本部分免费商品数量决定。客户购买虚拟商品后，将收到相应的链接。",

    filter_action: "应用筛选器",
    not_processed: "未处理的订单",
    title: "商品列表",
    vew_order: "查看订单",

    table: {
      nodata: "暂无商品",
      product: "商品",
      data: "数据",
      status: "状态",
      user_message: "用户留言",
      updated_at: "最后更新",
      order: "订单",
      delete: "删除",
    },
    notifications: {
      delete_success: "商品已成功删除。",
    },
  },

  /** {@see BProductVirtualItemAdd} **/
  add_virtual_item: {
    title_edit: "编辑数值",
    title_add: "添加虚拟内容到商品",
    sub_title: "创建和编辑虚拟产品",
    message:
      "付款完成后，我们会将虚拟商品发送给买家。您可以在“商品 > 编辑 > 输出”标签页中设置此表单的结构。",
    edit_outputs: "编辑输出表格",
    notifications: {
      edit_success: "产品已编辑。",
      add_success: "产品已添加到列表中。",
    },
  },

  /** {@see BPageOrderVirtual} **/
  virtual_process_center: {
    title: "处理中心",
    sub_title: "订单处理",
    virtual_product: "虚拟产品",
    menu: {
      report: "报告",
      timeline: "时间线",
      order: "订单",
    },

    /** {@see BOrderVirtualItem} **/
    outputs_widget: {
      title: "输出表格",
      table: {
        title: "标题",
        value: "数值",
      },
      tips: [
        "完成客户请求后，点击订单确认键通知买家订单状态。",
        "订单一旦确认，买家将无法修改输入信息。",
      ],
      alerts: {
        order_completed_by_admin: "订单已完成。",
        order_completed_by_buyer: "买家已完成订单。",
        waiting_for_buyer: "等待买家确认中……",
      },
    },
  },

  /** {@see BPageOrderFile} **/
  file_process_center: {
    title: "处理中心",
    sub_title: "订单处理",
    menu: {
      report: "报告",
      timeline: "时间线",
      order: "订单",
    },
  },

  /** {@see BOrderDashboard} **/
  process_order_page_dashboard: {
    title: "订单处理",
    cancel_order_action: "取消订单",
    open_basket_cation:
      "此购物车处于打开状态，表示客户正在购物且尚未付款。",

    reject_dialog: {
      title: "拒绝订单的原因",
      message:
        "请从下面的列表中选择拒绝此订单的原因。务必告知客户取消及退款流程，退款必须在12小时内完成。",
      confirm_now_action: "即时取消订单",
      confirm_in48h_action: "48 小时内取消订单",

      dismiss_reject_action: "取消订单",

      options: {
        title: "选项",
        subtitle:
          "如果您想立即取消订单，可以使用此选项。",
      },

      express_input: {
        true_title: "项目 | 取消 订单 项目",
        false_title: "项目 | 取消 订单 项目 48 项目",
        true_description:
          "项目 项目 项目 取消 项目 订单 项目 项目 更新 项目 库存 项目 项目.",
        false_description:
          "项目 项目 项目 取消 项目 订单 项目 48 项目. 项目 项目, 个 项目 项目 项目 项目 项目 项目 项目 项目 项目.",
      },
    },

    notifications: {
      update_status_success: "订单状态已更新。",
      reject_update_success:
        "订单取消状态已更新。",
      dismiss_reject_success:
        "订单已恢复到正常流程。",
      set_tracking_success: "订单追踪号已成功保存。",
      shipping_address_update_success:
        "发货中 地址 项目 项目 项目 项目.",
      vendor_order_status_update_success:
        "项目 项目 状态 项目 项目 项目 项目.",
    },
  },
  /** {@see BPageOrderPhysical} **/
  /** {@see BPageOrderVirtual} **/
  /** {@see BPageOrderFile} **/
  /** {@see BPageOrderService} **/
  process_center: {
    title: "处理中心",

    physical_product: "实物产品",
    menu: {
      label: "包装标签",
      receipt: "发票",
      back: "返回",
      return: "退货",
      report: "报告",
      timeline: "时间线",
      inputs: "输入",
      order: "订单",
    },

    /** {@see OrderPaymentWidget} **/
    payment_widget: {
      title: "付款",
      checklist: [
        "检查订单金额和客户付款。",
        "检查账单地址。",
        "确保输入的信息正确，尤其是当付款方式为货到付款（COD）时。",
      ],
      action_cod_pay: "客户确认付款",
      action_dir_pay: "确认上传的付款收据",
      payment_receipt_not_uploaded_error:
        "付款收据尚未上传！",

      waiting_for_pay: "待付款",
      processing_payment: "付款处理中",
      processing_cancel: "付款已取消",
      require_capture: "需要执行扣款操作",
      paid: "已付款",
      cod_pay_info:
        "当您收到客户的订单后，您可以确认付款并完成订单。",
      dir_pay_info:
        "付款凭证将显示在上方。请在确认付款之前，核实存款金额和银行凭证信息。",

      created_date: "创建日期",
      pay_date: "付款日期",
      payment_gateway: "支付网关",
      payment_method: "支付方式",
      risk: "风险值",
      billing_details: "账单明细",

      add_transaction: "添加新账单",
      add_transactions_message:
        "您需要为此订单至少开具一张账单。 有时可能需要分步付款。 随着工作的进展，您需确定客户需要支付哪些账单。",

      add_bill_dialog: {
        title: "添加发票",
        message:
          "您可以为此订单添加一张或多张发票。客户可以看到这些发票，并根据工作进度支付每一张发票。",
        amount_input: "发票金额",
        action: "添加账单",
      },
      edit_bill_dialog: {
        title: "编辑发票",
        message: "您可以编辑待付款的发票。",
        action: "编辑发票",
      },
      bill_cash_payment_dialog: {
        title: "登记现金支付",
        message:
          "如果买家已以现金或非线上支付方式支付了此账单的金额，您可以在此处选择一个选项，登记并确认其付款记录。在此部分中，您只能看到您商店已启用的现金支付网关。如果未显示该选项，您可以在商店设置中启用所选货币的现金支付网关。",
        action: "确认账单付款",
      },

      table: {
        title: "标题",
        amount: "金额",
        description: "描述",
        info: "信息",
      },
      user_payment: "客户付款",
      cod: "货到付款",
      gateway_wage: "费用",
      gift_card: "礼品卡",
      discount_code: {
        title: "优惠码",
        code: "代码",
        percent: "折扣百分比",
        limit: "限制",
      },
      club: {
        title: "会员俱乐部",
        percent: "折扣百分比",
        limit: "限制",
      },

      coupon: {
        title: "优惠券",
        percent: "折扣百分比",
        limit: "限制",
        charge: "抵扣金额",
      },
      delivery: {
        title: "运费",
        not_paid: "未支付",
      },
      samin: {
        title: "服务费",
        description:
          "项目 金额 项目 项目 项目 从 项目 Selldone 钱包 账户.",
        tooltip: "计算总服务费用",
        percent: "百分比",
      },
      affiliate: {
        title: "推广佣金",
        affiliate_message:
          "您需要向您的推广伙伴支付此佣金。该过程由您自行完成。",
      },
      total_price: "商品总价",
      total_items_discount: "商品折扣",
      total_price_after_offers: "优惠后的总价",

      total_order_price_before_tax: "税前订单总价",

      user_payment_amount: "买家付款金额",
      samin_wage: "Selldone 费用",
      pay_cod_dialog: {
        title: "是否已收到货到付款的款项？",
        message:
          "在确认客户已全额支付后，点击此选项以确认。",
        confirm_action: "确认客户付款",
      },
      pay_dir_dialog: {
        title: "是否已收到订单款项？",
        message:
          "在与您的银行核实客户上传的付款凭证后，点击此选项确认付款。请确保与银行核实到账情况。",
        confirm_action: "确认客户付款",
      },

      notifications: {
        pay_confirm_message:
          "付款已确认。<br>端口：{gateway_name}<br>日期：{payment_at}",
        pay_fail_title: "未付款",
        pay_fail_message: "无法确认付款！",
      },
    },
    /** {@see BOrderDashboardCart} **/
    basket_list: {
      checklist: [
        "检查库存。",
        "如果商品缺货，必须将已支付的款项退还给客户。",
      ],
      message:
        "如果某些商品缺货或无法出售，请取消勾选相应商品，然后点击 <b> 确认订单 </b> 按钮。",
      action: "订单确认",
      list_of_items: "购物车列表",
      apply_change_action: "应用更改",
      cant_apply_change: "无法更改",
      lottery_prize_inform:
        "您的客户赢得了一件该产品的。随此订单发送这件礼品。",

      need_to_refund: {
        title: "需要退款给客户",
        message:
          "我们会根据缺货商品和已退款金额，手动计算需要退款给客户的总金额。",
        calculated_approximately:
          "该金额为预估金额。请自行核算确切金额。",
      },
      need_payback: {
        title: "客户需补付款",
        message:
          "我们注意到退款总额高于客户实际应付款项，您可能需要向客户收回多退的部分。",
      },
      need_no_refund: {
        title: "无需退款",
      },
      total_refund: {
        title: "已退款总额",
        message:
          "这是支付网关已自动退款的总额。只有部分支付服务支持该功能，您仍需手动完成退款。",
      },
    },
    /** {@see BOrderDashboardPreparing} **/
    preparing: {
      title: "备货中",
      packing_weight: "包裹重量",
      delivery_type: "运输方式",
      packing_size: "包装尺寸",
      distance_warning: "超出允许的配送距离限制。",
      weight_warning: "超过允许的重量限制。",
      volume_warning: "超过允许的包装尺寸限制。",
      items_weight_calculation:
        "所有商品的总重量为 {weight} {unit}",
      not_available_message:
        "在禁用了收货地址或客户在下单后未填写地址的情况下，无法使用！",

      message:
        "如果订单已准备好发货，请单击以下<b>订单已准备发货</b>按钮。",
      action: "订单准备发货",
      checklist: [
        "按照包装标准进行包装。",
        "打印商品清单并放入包裹内。",
        "打印并粘贴物流标签在包裹上。",
      ],
    },

    basket_items: "订购商品列表",

    delivered_dialog: {
      title: "客户是否已收到订单？",
      message: "请确认客户是否已经收到订单。",
      confirm_action: "确认已收货",
    },
    return_delivery_dialog: {
      title: "配送或退货是否有问题？",
      message:
        "请确认订单是否因配送问题而退回或需要重新发货。",
      confirm_action: "确认订单退货",
    },

    notifications: {
      update_status_success: "订单状态已更新。",
      reject_update_success: "订单取消状态已更新。",
      dismiss_reject_success: "订单已取消。",
      pay_cod_success: "货到付款已确认收到款项。",
      pay_dir_success:
        "通过转账或汇款的付款已确认。",
      set_tracking_success: "订单追踪号已成功保存。",
      new_bill_success: "新账单添加成功。",
      edit_bill_success: "账单更新成功。",
      update_bill_status_success: "账单状态更新成功。",
      set_payment_in_cash_success: "账单支付已经手动确认。",
    },

    delete_bill_dialog: {
      title: "删除账单",
      message: "您确定要删除此账单吗？",
      action: "是的，立即删除",
    },
  },

  /** {@see AdminShopGatewayManagementPage} **/
  shop_gateway: {
    title: "支付网关",
    menu: {
      dashboard: "仪表盘",
      edit: "编辑",
      transactions: "交易",
      back: "支付网关",
    },

    /** {@see BPageGatewayDashboard} **/
    dashboard: {
      title: "支付网关管理",

      /** {@see BGatewayPaymentsChart} **/
      gateway_data_widget: {
        title: "支付报告",
        subtitle:
          "项目 付款 项目 交易 项目 项目 项目 项目 时间 项目.",
        chart: {
          times: "次数",
          buys: "购买次数",
          pays: "支付成功数",
          amount_pay: "支付金额",
          amount_wage: "费用",
        },
      },
    },

    /** {@see BPageGatewayEdit} **/
    edit: {
      title: "编辑网关",
      menu: {
        delete: "移除网关",
      },
      edit_action: "编辑网关",
    },

    /** {@see BPageGatewayTransactions} **/
    transactions: {
      title: "交易",
      table: {
        amount: "金额",
        currency: "货币",
        livemode: "类型",
        status: "状态",
        target_id: "订单",
        risk: "风险",
        card: "卡片",
        issued_at: "发起日期",
        payment_at: "支付日期",
      },
      live_mode: "正式环境",
      test_mode: "测试环境",
    },
  },

  /** {@see BGatewayOverview} **/
  b_gateway_overview: {
    title: "信息",
    subtitle: "概述 项目 支付 网关 配置 项目 状态.",
    status: "状态",
    cod_transportation: "项目 发货中",
    cod_transportations_error:
      "启用 项目 项目 配送 支付 项目 项目 项目 项目 发货中 项目!",
    payment_type: "支付 类型",
    cod: "项目 项目 配送",
    online: "项目 支付",
    wage_percent: "费用 折扣百分比",
    min_wage: "项目 费用",
    max_wage: "项目 费用",
    min_amount: "项目 交易",
    max_amount: "项目 交易",
    timeout: "支付 项目",
    timeout_unit: "项目",
    link: "网关 链接",
    your_gateway_status: "项目 网关 状态",
    oauth2_button: "自动 项目 到 {gateway}",
    fee_payment_message:
      "项目 项目 金额 已付款 项目 项目 项目 项目 项目 项目 到 项目 账户. 项目 服务 费用 项目 项目 项目 从 项目 钱包 项目 Selldone.",

    auto_config: "自动 配置",

    keys: {
      title: "私密 项目",
      subtitle:
        "列表视图 项目 私密 项目 项目 项目 支付. 项目 项目 项目 项目 项目 项目 项目 项目 付款.",
    },
    extra_config: {
      title: "支付 服务 配置",
      subtitle: "项目 配置 项目 项目 项目 支付 网关.",
    },

    recommended_actions: {
      title: "项目 操作",
      subtitle:
        "项目 项目 项目 项目, 项目 项目 到 接收 项目 付款 从 项目 顾客.",
      action_enable: "项目 到 启用 项目",
      make_live_enable: "项目 到 正式环境 项目",
    },
  },

  /** {@see BGatewayAdd} **/
  edit_gateway: {
    public_keys: "公钥",
    private_keys: "私钥（保密）",
    link: "网站",
    status_title: "支付服务状态",
    status_message:
      "将支付方式设置为启用或禁用。只有设置为启用的支付方式才会显示给客户。",
    status_true_description: "您的客户可以使用此付款方式付款。",

    manual_title: "手动/自动捕获付款",
    manual_message:
      "创建付款时，您可以对符合条件的付款方式预授权资金，保留金额以便稍后进行扣款。例如，酒店通常会在客人入住前预授权全额付款，客人退房时再实际扣款。",

    gateway_status: "状态",
    wallet: "区块链钱包",
    developer_title: "开发者模式",
    developer_message:
      "如果网关支持调试模式，您可以处理模拟交易。",
    live_mode_message: "所有交易都将处于实时模式。",

    notifications: {
      edit_success: "网关 {gateway_name} 已编辑。",
      success_delete: "支付方式已删除！",
    },
    debug: {
      title: "开发和测试",
      subtitle: "您可以启用调试模式来测试支付网关。",
    },

    limit: {
      title: "订单限制",
      subtitle: "设置此支付网关的最低订单金额。",
    },
    limit_input: {
      title: "最低订单金额",
      msg: "0表示没有限制。",
    },
    currency_input: {
      message: "此支付网关支持的货币。",
    },
    gateway_code: "网关代码",

    hold_only_for: "仅支持以下方式的预授权付款",
    manual_input: {
      false_description:
        "支付状态将在支付提供商系统中自动从待处理变为已确认。",
      false_title: "自动确认付款",
      true_title: "预授权付款及手动确认",
      true_description:
        "对付款进行预授权，您需要验证订单付款后，才能将支付状态从待处理变为已确认。",
    },
    delete_verify_input: {
      true_title: "我想删除这种支付方式。",
      true_description:
        "此支付方式将从商店中移除，客户将无法使用。",
    },
    delete_alert: {
      title: "删除付款方式",
      message: "您确定从您的商店删除此付款方式吗？",
      action: "删除付款方式",
    },
  },

  /** {@see BPageGiftcard} **/
  gift_card: {
    title: "礼品卡",
    menu: {
      edit: "编辑",
      new_card: "创建卡片",
      list: "卡片列表",
      orders: "订单",
      dashboard: "仪表盘",
      back: "礼品卡",
    },

    /** {@see AdminGiftCardDashboardPage} **/
    dashboard: {
      title: "礼品卡管理仪表板",

      /** {@see BGiftcardStatisticsPayment} **/
      amount_widget: {
        title: "卡片卡支付",
        title_small: "30天",
        chart_amount_pay: {
          y: "总额",
          label: "支付",
        },
        chart_buys: {
          y: "购买次数",
          label: "购买",
        },
        total_buy: "总购买金额",
        total_pay_30days: "30天总付款",
        total_pay_today: "今天的付款",
      },

      /** {@see BGiftcardStatisticsCount} **/
      count_widget: {
        title: "发行卡片数量",
        title_small: "30天",
        total_cards: "卡片总数",
        used_cards_30days: "30天使用",
        used_today: "今日使用",
        chart: {
          new_cards: "新卡",
          used_cards: "已使用卡",
          new_card_name: "新卡",
          used_card_name: "已使用",
        },
      },

      /** {@see BGiftcardExport} **/
      export: {
        title: "获取输出文件",
        cards_list: "获取卡片列表",
        get_report: "获取报告",
      },
    }, // End of dashboard

    /** {@see AdminGiftCardManagementPage} **/
    cards: {
      title: "已发行卡片概览",
      subtitle:
        "预览 项目 项目 全部 项目 卡片列表. 项目 项目 已发送 卡片列表 到 用户数 手动添加 项目 项目 项目 项目 项目.",

      loading_message: "正在获取信息...请稍候",
      issue_to_user: "发给用户",
      table: {
        card_number: "卡号",
        balance: "余额",
        paid: "已付金额",
        edit: "编辑",
        delete: "删除",
        expire: "过期",
        user: "用户",
      },
      delete_alert: {
        title: "移除卡片",
        message: "确定要删除此卡片吗？",
        action: "删除",
      },
      notifications: {
        delete_success: "礼品卡已删除。",
        edit_success: "更改已保存。",
        issue_success: "已成功向用户发放礼品卡。",
      },
      issue_dialog: {
        title: "发行礼品卡",
        action: "我确定。立即发卡",
      },
    }, // End of cards

    /** {@see BGiftcardAdd} **/
    gift_card_edit: {
      title: "创建礼品卡",
      validity: "有效期",
      validity_unit: "月",
      currency: "货币",
      initial_balance: "卡片初始金额",
      count: "数量",
      count_unit: "件",
      enable_input_message: "所创建卡片的状态。",
      notifications: {
        create_success_title: "保存",
        create_success: "{count} 张新卡片已创建",
      },
    },

    /** {@see AdminGiftCardEditPage} **/
    gift_card_edit_page: {
      title: "编辑礼品卡",
    },
  },

  /** {@see BPageDiscountCode} **/
  shop_discount: {
    title: "优惠码",
    up_to: "最高",
    menu: {
      dashboard: "仪表盘",
      orders: "订单",
      back: "折扣码",
    },

    /** {@see BPageDiscountCodeDashboard} **/
    dashboard: {
      title: "折扣码管理仪表板",
      chart_amount_buy: {
        y: "购买金额{currency}",
        label: "买",
      },
      chart_amount_discount: {
        y: "折扣金额 {currency}",
        label: "折扣",
      },
      chart_used: {
        y: "使用次数",
        label: "次",
      },
    },
  },

  /** {@see BPageCoupon} **/
  shop_coupon: {
    title: "优惠券",
    up_to: "最高",
    menu: {
      dashboard: "仪表盘",
      back: "优惠券",
      orders: "订单",
    },

    /** {@see BPageCouponDashboard} **/
    dashboard: {
      title: "优惠券管理仪表板",
      chart_amount_buy: {
        y: "购买金额{currency}",
        label: "购买",
      },
      chart_amount_discount: {
        y: "优惠券金额 {currency}",
        label: "优惠券",
      },
      chart_used: {
        y: "使用次数",
        label: "次",
      },
    },
  },

  /** {@see BPageOffer} **/
  shop_offer: {
    title: "促销活动",
    up_to: "最高",
    menu: {
      dashboard: "仪表盘",
      orders: "订单",
      back: "优惠",
    },

    /** {@see BPageOfferDashboard} **/
    dashboard: {
      title: "促销管理仪表板",
      chart_amount_buy: {
        y: "购买金额{currency}",
        label: "购买",
      },
      chart_amount_discount: {
        y: "促销金额{currency}",
        label: "促销",
      },
      chart_used: {
        y: "使用次数",
        label: "次",
      },
    },
  },

  /**
   * @see BOrderConnectsList
   */
  order_connect_list: {
    subtitle:
      "列表视图 项目 项目 项目 订单 项目 项目 到 项目 项目 项目 项目 服务商.",
  },
  /** {@see BAccountCard} **/
  account_card: {
    pay_create_receipt: "支付激活费",
    balance: "余额",
    locked: "已锁定",
    transfer: "转账",
    charge: "充值",
  },

  /** {@see TimelineStatus} **/
  timeline: {
    note: "{message}",
    info: "{message}",
    error: "{message}",

    buy: "结账",
    payment: "付款",

    confirm:
      "订单确认， <b>{success}</b>已确认和<b>{fail}</b>已被拒绝。",
    prepare: "订单准备中。",
    send: "订单由<b>{delivery} 发货</b>。",
    delivered: "订单已交付给客户。",
    "fill-inputs": "买家已填写信息表。",
    "return-add": "提交产品退货申请，{product}。",
    "return-accept": "退货申请 {return_code} 已确认。",
    "return-reject": "申请 {return_code} 已被拒绝。",

    "reject-order": "拒绝订单。编号：{reject_code}。",
    "reject-order-clear": "取消订单拒绝。代码：{reject_code}。",

    "delivery-returned":
      "客户未收到订单并被退回。需要重新发货。",
    "delivery-canceled": "交货取消。需要重新发货。",
    "edit-receiver-info": "买家已编辑订单收货地址。",
    "edit-billing-info": "买家已编辑帐单地址。",
    "payment-cod-confirm": "COD 付款已确认。",
    "payment-cash-confirm":
      "已确认以现金支付账单 {amount} {currency}。",
    "payment-dir-confirm": "直接付款收据已确认。",

    vendor: "供应商订单状态从<b>{from}</b>更改为<b>{to}</b> 。",

    "connect-sync": "订单 项目 项目 项目 OS.",
    "connect-shipped": "项目 订单 项目 项目 已发货 项目 {shipping}.",
    "connect-returned": "项目 订单 项目 项目 退货 项目 {shipping}.",
    "connect-failed": "合作方履行订单失败。原因：{reason}",
    "connect-canceled": "合作方已取消订单。原因：{reason}",
    "connect-action-cancel": "已请求取消订单。原因：{reason}",
    "connect-put-hold": "订单已暂停。原因：{reason}",
    "connect-remove-hold": "订单已恢复处理。原因：{reason}",
    "connect-confirmed": "订单已确认。",

    "vendor-payout": "💸 支付给供应商。",
    "vendor-wallet-transaction": "项目 钱包 交易.",

    "vendor-sms":
      "🔔 订单通知短信已发送至<b>{vendor}</b> ╏ {phone}。",

    // ━━━━━━━━━━━━━━━━━━━━━━ Email Packs ━━━━━━━━━━━━━━━━━━━━━━

    "email-buy": "向客户发送购买确认电子邮件。",
    "email-payment": "向客户发送付款确认电子邮件。",
    "email-update": "已发送 订单 更新 电子邮件 到 项目.",

    "email-vendor":
      "🔔 订单通知邮件已发送至<b>{vendor}</b> ╏ {email}。",

    // ━━━━━━━━━━━━━━━━━━━━━━ SMS Packs ━━━━━━━━━━━━━━━━━━━━━━
    "sms-payment":
      "通过{phone}向客户发送付款确认短信。",
    "sms-ready-to-ship":
      "已发送 项目 SMS 到 项目 项目 项目 项目 项目 订单 项目 项目 到 项目 已发货 项目 {phone}.",
    "sms-ready-to-pickup":
      "已发送 项目 SMS 到 项目 项目 项目 项目 项目 订单 项目 项目 项目 项目 项目 {phone}.",
    "sms-order-confirmation":
      "已发送 项目 订单 项目 SMS 到 项目 项目 项目 {phone}.",

    "count-adjustment":
      '项目 数量 项目 项目 产品 "{product}" 项目 项目 项目 从 {from} 到 {to}.',
  },

  /** {@see FinanceInlineChart} **/
  inline_chart: {
    today: "今天",
    last_days: "{days} 天前",
  },
  /** {@see BProductsWindow} **/
  products_select: {
    move_category: "将分类<b>{category}</b>移至其他分类",
    move_product: "将产品<b>{product}</b>移至分类",
    load_more_products:
      "此分类下还有更多产品。单击以加载更多商品。",
    product_menu: {
      dashboard: "产品仪表板",
      inventory: "库存和变体",
    },
    notifications: {
      copy_success: "已复制产品。",
      change_category_success: "产品分类已编辑。",
    },

    filter_box: {
      no_root_filter_message: "您的根目录中有产品，但没有筛选器。",
      has_root_filter_message: "您已为根分类设置筛选器。",
      set_filter_message: "您可以设置筛选器。",
      edit_action: "编辑根筛选器",
      clear_action: "清除根筛选器",
    },
    ai: {
      title: "AI产品协助",
    },
    menu: {
      select_all_products: "选择所有产品",
      unselect: "取消选择",
      sort_categories: "排列 / 分类排序",
      subscription_vendor_not_support_message:
        "无法为订阅产品分配供应商！订阅产品必须始终有供应商作为其所有者！",
      vendor_owner_not_assignable_message:
        "无法为已有供应商作为所有者的产品分配供应商！",
      category_assign_profile: "为分类中的产品分配资料",
      category_assign_profile_subtitle: "税务、运输、指南、保修等",
      bulk_discount: "批量折扣",
      bulk_discount_subtitle: "对所有产品应用折扣。",
    },

    engine: {
      title: "额外产品引擎",
      subtitle:
        "从所选分类和标签加载更多产品。",
      load_in_tips: "加载{category}分类中的产品。",
      action: "编辑{category}引擎",
    },
  },
  /** {@see BProductsPanel} **/
  product_panel: {
    excel_import: {
      title: "项目 项目 / CSV 项目 项目.",
      select_file: "选择文件",
      max_file: "项目 项目 项目: 20mb",
      download_sample: "下载示例",
    },
    ai: {
      title: "AI产品协助",
    },
  },

  /** {@see BOrderDashboardVendor} **/
  order_vendor: {
    has_panel: "有面板",
    no_panel: "无面板",
    manual_action: {
      title: "手动操作",
      message: "您可以手动更新供应商订单状态。",
      guides: [
        "具有面板访问权限的供应商可以在其专用仪表板上更新其履行情况（子订单）。",
        "如果供应商没有面板访问权限，则通过更改购物车状态，供应商订单状态将自动更新。",
        "您可以手动更新供应商订单。",
      ],
    },
    payouts: {
      title: "付款",
      message: "管理供应商的付款和交易。",

      charge_tooltip: "向供应商钱包收款。",
      withdraw_tooltip: "从供应商钱包中提取。",
      payout_tooltip: "向供应商付款。",
    },
    order_canceled: "订单 项目",
    order_rejected: "订单 已拒绝 项目 项目",
  },

  /**
   * @see VPageVendorDashboard
   */
  vendor_dashboard: {
    info: {
      subtitle: "市场信息。",
    },
    performance: {
      subtitle: "我的销售表现。",
    },
    products: {
      title: "产品",
      subtitle:
        "您可以在这里查看您在市场上列出的产品数量。不包括其他供应商的产品。",
    },
    wallets: {
      title: "我的钱包",
      subtitle:
        "您无需手动添加钱包！供应商钱包将自动创建。",
    },

    open_marketplace_page: "打开市场页面",
    open_my_store_page: "打开我的商店页面",
    open_my_listing_page: "打开我的列表页面",
    add_products_permission: "添加产品权限",
    add_categories_permission: "添加分类权限",
  },

  /**
   * @see VPageVendorInventory
   */
  vendor_inventory: {
    title: "产品列表",
    subtitle:
      "这是您在市场中的产品列表。您可以在库存中更新所分配产品的价格和数量。作为供应商，您只能看到您拥有的单供应商产品。其他分配的产品也可以在此处进行修改。",
  },

  /**
   * @see VPageVendorAccess
   */
  vendor_member: {
    title: "项目 项目",
    subtitle:
      "项目 项目 项目 列表视图 项目 用户数 项目 项目 访问权限 到 项目 项目 项目. 项目 项目 项目 新建 项目 项目 项目 项目 项目 权限 项目.",
    add_action: "项目 新建 项目",
    pending: {
      title: "待处理 项目",
      message: "预览 项目 列表视图 项目 项目 项目 项目 等待中 项目.",
    },
  },

  /**
   * @see VMemberAddDialog
   */
  vendor_member_add: {
    title_edit: "编辑 项目 项目",
    title_new: "项目 新建 项目 项目",
    member: {
      title: "项目 项目 许可证详情",
      subtitle:
        "项目 项目 新建 项目 项目 项目 项目 项目 权限. 项目 项目 项目 产品 到 项目 项目/项目 访问权限. 项目 项目 项目 到 项目 项目 项目 项目 项目 项目 店铺 仪表盘.",
    },
    access: {
      view_data: "查看数据",
      apply_changes: "保存 项目",
    },
    inputs: {
      email: {
        label: "电子邮件 地址",
        placeholder: "项目 项目 项目 电子邮件 地址...",
      },
    },
    notifications: {
      add_success: {
        title: "项目 项目",
        message: "项目 项目 项目 项目 项目 项目 项目.",
      },
      update_success: {
        title: "项目 项目",
        message: "项目 项目 项目 项目 项目 项目 项目 项目.",
      },
    },
    actions: {
      add: "项目 项目",
    },
  },

  /**
   * @see VPageVendorPayments
   */
  vendor_payments: {
    list: {
      title: "付款历史记录",
      subtitle:
        "您可以在此处查看您的付款历史记录。这些付款可能是通过银行转账手动处理，也可能是通过具有付款能力的支付服务自动处理的。",
    },
    connect: {
      title: "连接银行账户",
      subtitle:
        "我们为以下支付网关提供分期付款功能。为了在每次购买后无缝接收付款，请使用这些选项连接您的银行账户。",
    },
    verify_dialog: {
      title: "验证付款",
      option: {
        title: "供应商操作",
        subtitle:
          "您可以选择接受或拒绝此转账。此操作仅作为历史记录。只需确认您是否已收到款项；如果尚未收到，则无需采取任何行动。",
      },
      inputs: {
        verify: {
          label: "您是否已确认收到该付款？",
          false_description:
            "否，我尚未在我的银行账户中收到该付款。",
          true_description: "是的，我已收到并验证了这笔付款。",
        },
      },
    },
  },

  /**
   * @see BVendorOrderRefund
   */
  vendor_order_refund: {
    title: "项目 订单",
    subtitle:
      "<b>项目! </b>项目 项目 操作 项目 项目 项目 项目 交易 项目 项目 项目 钱包 项目 项目 项目 项目 金额 从 项目. 项目 金额 项目 项目 项目 项目 总客户 交易 项目 项目 项目 订单. 项目, 项目 项目 项目 项目 项目 到 已连接 银行 账户 (项目 项目 项目 Stripe 项目 项目 项目 项目 转账), 项目 项目 创建 项目 <b>项目 转账</b>.",
    inputs: {
      note: {
        message: "项目 项目 到 项目 项目.",
        placeholder: "项目 项目 项目 项目 备注 项目...",
      },
      amount: {
        error_message: "项目 项目 金额 项目 项目 项目.",
      },
    },
  },

  /** {@see BOrderVendorPaymentManagement} **/
  order_vendor_payment: {
    message:
      "这提供了市场上供应商虚拟钱包中交易的概述。每当有订单生成，供应商在销售中的分成就会被添加到他们的钱包中。",
    vendor_wallets: "供应商钱包",
    my_wallets: "我的钱包",
    refund_order_action: "项目 订单",
    automatic_payout_list: {
      subtitle:
        "项目 项目 项目 列表视图 项目 项目 付款 到 项目 已连接 银行 账户. 项目 备注 项目 项目 项目 付款 项目 项目 项目 项目, 项目 项目 付款 项目 项目 项目 项目.",
    },
    reversal_transfer_action: "项目 转账",
  },

  /** {@see BPageOrderPhysicalTrack} **/
  physical_order_track: {
    title: "风险报告和评估",
  },
  /** {@see BPageOrderVirtualTrack} **/
  virtual_order_track: {
    title: "风险报告和评估",
  },
  /** {@see BPageOrderVirtualTimeline} **/
  virtual_order_timeline: {
    title: "时间线",
  },
  /** {@see BPageOrderPhysicalTimeline} **/
  physical_order_timeline: {
    title: "时间线",
  },
  /** {@see BPageOrderPhysicalInput} **/
  physical_order_inputs: {},
  /** {@see BOrderTimeline} **/
  order_timeline: {
    message:
      "在此部分，您可以查看与订单、履行、付款及其各自状态相关的事件时间线。此外，您还可以查看发往客户和供应商的订单。",
    add_note_subtitle: "撰写消息并提及您的同事。",

    message_input: "在此处撰写消息...",
    pin_action: "置顶",
    unpin_action: "取消置顶",
    copy_html: "复制 HTML",
    notifications: {
      add_note_success: "备注已添加。",
      edit_note_success: "备注已编辑。",
      delete_note_success: "备注已删除。",
    },
    delete_dialog: {
      title: "删除备注",
      message: "您确定要删除此备注吗？",
      action: "删除备注",
    },
    resend_dialog: {
      title: "重发电子邮件",
      message: "您确定要将此电子邮件重新发送给您的客户吗？",
      action: "是的，重新发送",
      success: "邮件已重新发送给客户。",
    },
  },

  /** {@see BPageShuttleWalletAccounts} **/
  accounts: {
    title: "我的钱包",
    message:
      "项目 项目 项目 项目 项目 项目 项目 账户 项目 项目 货币 项目 项目 项目 Selldone. 项目 项目 项目 项目 专用 到 项目 项目 服务 项目.",
    add_new: "创建新账户",
    new_account: "添加新钱包",
    new_account_dialog: {
      title: "新账户",
      account_name_input: "账户名称",
      currency_input: "货币单位",
      currency_input_message:
        "创建的账户仅保存该货币的资金。",
      new_account_wage: "新账户创建费用：第一个账户免费",
      create_account_action: "创建账户",
    },
  },

  /** {@see UserGifts} **/
  user_gifts: {
    menu: {
      send_gift: "发送礼物",
      sent: "已发送",
      received: "已收到",
    },

    /** {@see BPageShuttleWalletGiftsSend} **/
    send_gifts: {
      title: "已发送的礼物",
      sub_title:
        "您可以向您的朋友或客户发送礼物。收礼人可以接受或拒绝您的礼物。金额会在您的账户中冻结，若收礼人接受则扣除。否则该金额将退回您的账户。",
      table: {
        user: "用户",
        amount: "金额",
        currency: "货币",
        account_name: "来自",
        status: "状态",
        message: "信息",
        created_at: "创建日期",
      },
    },

    /** {@see BPageShuttleWalletGiftsReceived} **/
    received_gifts: {
      title: "收到的礼物",
      sub_title:
        "项目 项目 项目 项目 项目 项目 项目 项目 项目 已收到, 项目 从 Selldone 项目 其他 项目.",

      table: {
        amount: "金额",
        currency: "货币",
        account_from: "从",
        status: "状态",
        message: "信息",
        created_at: "创建日期",
        receive: "接收",
      },
    },
  },

  /** {@see BAccountGiftRedeem} **/
  get_gift_dialog: {
    title: "接收礼物",
    more: "更多的 ..",
    amount: "金额",
    message: "信息",
    account_to_input: "目标账户",
    account_to_input_message: "礼品金额将存入此帐户。",
    get_action: "接受礼物",
    notifications: {
      received_success_title: "恭喜",
      received_success:
        "礼品金额 {amount} {currency} 已存入您的账户。",
    },
  },
  /** {@see BAccountGiftSend} **/
  send_gift_dialog: {
    title: "发送礼物",
    account_from_input: "选择一个账户",
    account_from_input_message: "礼物金额将从此账户扣除。",
    receiver_input: "接收人",
    receiver_input_message: "您可以输入电子邮箱或电话号码。",
    message_input: "信息",
    message_input_message: "您可以给收件人留言。",
    amount_input: "金额",
    currency_input: "货币单位",
    currency_input_message: "价格以这种货币计算。",
    send_action: "发送礼物",
    notifications: {
      send_success: "{amount} {currency} 的礼物已发送给 {receiver}。",
    },
  },

  /** {@see BAccountInput} **/
  account_list: {
    account_input: "账户号码",
    account_input_message:
      "该币种的礼品金额将存入该账户。",
    free_balance: "可用余额",
    account_name: "账户名称",
  },
  /** {@see OPageMonetizeAccounts} **/
  user_monetize_accounts: {
    title: "礼物收款账户",
    sub_title:
      "礼物金额将自动存入这些账户。",
    message:
      "Selldone 项目 项目 项目 项目 项目 项目 项目, 项目 项目 Selldone 项目, 项目 项目 项目 项目 项目. 项目 项目 项目 充值 账户 项目 项目 货币, 项目 礼物 项目 项目 项目 项目 项目 项目 账户 项目 项目 域名 项目. 项目 项目 项目 项目 项目 到 Selldone. 提现记录 项目 项目 项目 项目 项目 企业 项目.",
    add_account_action: "添加账户",
    add_dialog: {
      title: "连接账户以接收礼物",
      account_input: "账户号码",
      account_input_message:
        "该币种的礼品金额将存入该账户。",
      set_as_default_action: "设为默认账户",
    },
    table: {
      currency: "货币",
      account_number: "账户号码",
      account_name: "账户名称",
      payment: "存款金额",
      reset_at: "重置日期",
      delete: "删除",
    },
    notifications: {
      set_success: "账户添加成功。",
      delete_success:
        "账户已成功从接收礼物的默认账户列表中移除。",
    },
    delete_alert: {
      title: "删除账户",
      message:
        "是否要将该账户从礼物账户列表中移除？",
      action: "删除",
    },
  },
  /** {@see UserMonetize} **/
  user_monetize: {
    title: "赚钱",
    menu: {
      plans: "计划",
      accounts: "账户",
      participant: "参与者",
    },
  },
  /** {@see OPageMonetizeReferral} **/
  user_monetize_plans: {
    title: "合作和变现",
    sub_title:
      "项目 项目 项目 项目 项目 项目 项目 项目 Selldone 钱包, 项目 项目 项目 项目 项目 已使用 到 支付 项目 Selldone 服务 项目 (有库存的 项目 全部). 项目 备注 项目 项目 Selldone VIP 企业 项目 项目 项目 项目 到 项目 项目 项目 项目, 项目 项目 项目 项目 项目 有库存的 到 全部 用户数.",

    discount: "折扣",
    your_income: "你的收入",
    level_2: "来自第二层级",
    level_3: "来自第三层级",
    link_message: "会员：{registered}，已接受：{accepted}",
    link_tip:
      "项目 项目 项目 项目 项目?项目={link_code} 到 项目 结束时间 项目 项目 地址 项目 项目.",
    table: {
      currency: "货币",
      amount: "余额",
      total: "总付款",
      payment_date: "最后付款日期",
      withdraw: "提现",
    },

    notifications: {
      get_credit_success:
        "请求的金额已存入您的帐户。",
    },
  },
  /** {@see BPageShuttleIdentity} **/
  basic_information: {
    title: "我的身份和个人资料",
    email: "电子邮件地址",
    tel: "手机号码",
    address: "地址",
    payment: "有效交易",
    personal_information: "身份信息",
    main_profile: "主要个人资料",
    main_profile_subtitle:
      "此信息对所有人公开。",
    kyc_waiting_info:
      "我们正在核实您所填写的信息的准确性。此过程是根据 KYC（了解你的客户）规定的必要步骤，能够降低金融交易的风险。完成后，您将能够享受此服务的当前和未来福利。",

    personal_info_dialog: {
      title: "身份信息",
      name_input: "名字",
      family_name_input: "姓氏",
      number_input: "护照号码（或身份证号码）",
      birthday_input: "生日",
      birthday_input_placeholder: "输入你的出生日期",
      address_input: "地址",
      postcode_input: "邮政编码",
      tel_input: "联系电话",
      passport_image_input: "护照或驾照",
      passport_image_input_message:
        "请上传您护照或驾照的扫描件。",
      personal_image_input: "身份证",
      personal_image_input_message:
        "请上传您身份证的照片。如果您所在的国家没有身份证，请上传您的护照或驾照。",
    },
    profile_dialog: {
      title: "主要个人资料",
      subtitle:
        "编辑 项目 公开 产品概况 项目 项目. 项目 项目 项目 项目 项目 到 项目 顾客 项目 其他 用户数.",
      full_name_input: "全名",
      tel_input: "联系电话",
      email_input: "电子邮件",
      website_input: "网站",
      address_input: "地址",
      about_input: "关于我",
      about_long_input: "关于我的详细介绍",
      image_input: "选择头像",
      image_input_message:
        "请上传您的头像图片。",
      notifications: {
        update_profile_success: "你的个人资料已经更新。",
        update_personal_info_success:
          "您的信息已成功注册",
      },
    },
    charge_account_approve_message:
      "为批准您的银行交易，请充值您的账户。",
    payment_approval: "付款批准",
    residential_address_checking:
      "您的居住地址文件正在审核队列中。",
    add_residential_address:
      "添加您的居住地址及相关证明文件。",
  },
  /** {@see BUserPhoneVerify} **/
  phone_verify: {
    title: "手机号验证",
    step1_title:
      "输入您的手机号码，您将收到一条验证短信。",
    phone_number_input: "手机号码",
    next: "下一步",
    sms_code_input: "验证码",
    sms_code_message: "6 位验证码已发送至 {phone_number}。",

    notifications: {
      duplicated_number_error: "您已验证过该号码。",
      send_activation_code_success_title: "验证码",
      send_activation_code_success:
        "验证码已发送至 {phone_number}。",
      verify_success: "您的手机号码已通过验证",
    },
  },
  /** {@see BPageShuttleCompanies} **/
  companies: {
    title: "我的企业帐户",
    message:
      "项目, 项目, 项目 项目 项目 项目 发展 产品 项目 应用 项目 项目 项目 Selldone. 项目 项目 项目 项目 到 创建 项目 企业 产品概况.",
    new_company: "新建公司",
  },
  /** {@see BCompanyAdd} **/
  add_company: {
    name_input: "公司名称",
    website_input: "网站",
    email_input: "电子邮件",
    address_input: "地址",
    tel_input: "电话",
    mobile_input: "手机号码",
    edit_action: "编辑公司",
    create_action: "创建公司",
    notifications: {
      add_success: "已创建企业帐户 {name}。",
      edit_success: "企业帐户已编辑。",
    },
  },
  /** {@see UserAccessControl} **/
  user_access_control: {
    menu: {
      personal_key: "个人的",
      shop_key: "客户",
      apps: "应用",
    },
    connected_apps_title: "已连接的应用",
    connected_apps_message:
      "您将看到所有连接到您的域名账户的商店和应用列表。您可以删除其中任何一个的访问权限。",
    clients_title: "客户",
    clients_message:
      "项目 项目 项目 已使用 到 创建 访问权限 项目 项目 项目 项目. 备注 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 到 项目.",
    personal_keys_title: "个人访问密钥",
    personal_keys_message:
      "您可以在这里创建账户密钥。请注意，这些密钥将能访问您的账户。只有在您确切知道自己在做什么时，才创建和使用这些密钥。",
  },

  /** {@see BPageShuttleSecurity} **/
  user_security_control: {
    title: "帐户安全",
    message: "您可以在此处编辑您的帐户安全设置。",

    delete: {
      title: "删除帐户",
      subtitle:
        "在删除您的帐户之前，请确保您已删除所有店铺。",
      action: "我确定，删除我的帐户",
      agreement:
        "我同意我的所有信息将从您的服务器中删除。您的信息将根据我们确定的时间表删除，以防止欺诈或滥用。",
    },

    list: {
      email: {
        title: "主要邮箱",
        sub_title:
          "您可以选择更新与此帐户关联的主要电子邮件。",
        action_title: "更改主要电子邮件",
        action: "发送验证链接",
      },
      password: {
        title: "密码",
        sub_title: "为您的帐户选择一个强密码。",
        action_title: "账户访问密码",
        not_exist: "未输入",
        action: "更改密码",
      },
      phone: {
        title: "手机号码",
        sub_title:
          "确认您的手机号码。您可以通过此号码登录。",
        action_title: "帐户的主要电话号码",
        action: "验证号码",
      },

      two_step: {
        title: "两步进入",
        sub_title:
          "确认您的手机号码。您将可以通过此号码登录。",
        action_title: "提高账户安全性",
        activated_action: "已经激活",
        active_action: "立即激活",
      },
    },
    two_step_auth: {
      step_1: {
        title: "安装量 Google 项目 应用程序",
      },
      step_2: {
        title: "输入应用程序生成的代码",
        message:
          "这6位数代码由您手机中的算法生成。您可以通过以下链接下载该应用。点击代码生成键即可创建包含密码的二维码。",
        qr_code_info:
          "如果无法扫描，您可以手动复制并粘贴代码到应用中：",
        create_new_code: "生成新代码",
        qr_code_scanning:
          "项目 项目 QR 代码 项目 项目 Google 项目 手机 应用程序 项目 项目 项目 代码 项目 项目 项目 项目 项目 项目 项目 项目 项目.",
        qr_code_regenerate_info:
          "注意：点击上述按钮将生成新密钥，之前的密钥将失效。请在手机应用中输入新密钥。",
      },
      step_3: {
        title: "输入生成的代码",
        message:
          "请在下方输入应用中生成的访问代码。",
        activation_key_input: "访问代码",
      },
      activated_alert: "两步登录已启用。",
      activated_message:
        "您的账户已启用两步登录。今后登录时，您需要输入每30秒变化一次的第二个验证码。若要禁用两步登录，只需双击“按步骤操作”，然后按照指引完成即可。",
      cancel_two_step_login_action: "取消两步登录",
      cancel_two_step_login_info:
        "如果您想禁用两步验证，请输入您的密码并单击两步登录键。",
      password_input: "密码",
      cancel_2fa_action: "取消两步登录",
    },

    change_password_dialog: {
      title: "修改密码",
      message: "请使用复杂且容易记住的密码。",
      password_input: "当前密码",
      new_password_input: "新密码",
      re_new_password_input: "重复新密码",
      tips: {
        length: "密码必须至少8个字符",
        chars: "至少一个大写字母和一个数字。",
        match: "密码匹配。",
      },
      change_password_action: "修改密码",
      notifications: {
        change_password_title: "修改密码",
        change_password: "密码修改成功。",
      },
    },
  },
  /** {@see AuthorizedClients} **/
  authorized_clients: {
    title: "已连接的店铺/应用程序列表",
    table: {
      name: "名称",
      app: "应用程序",
      scopes: "权限范围",
      shop: "受限商店",
    },
    remove_action: "移除访问权限",
    delete_alert: {
      title: "删除",
      message:
        "您确定要撤销此访问权限吗？请注意，该应用将不再能访问您的账户。",
      action: "拒绝访问",
    },
  },
  /** {@see Clients} **/
  clients: {
    title: "客户列表",
    create_new_action: "创建新客户",
    table: {
      client_id: "客户ID",
      app: "应用程序",
      name: "别名",
      secret_key: "密钥",
    },
    create_dialog: {
      title: "新客户",
      error_msg: "<strong>错误！</strong>抱歉，发生错误了！",
      name_input: "名称",
      name_input_message: "让用户能识别并信任的名称。",
      redirect_input_message: "返回您网站的地址。",
    },
    edit_dialog: {
      title: "编辑访问权限",
    },
    delete_alert: {
      title: "删除",
      message: "您要删除此客户吗？",
      action: "删除",
    },
  },
  /** {@see PersonalAccessTokens} **/
  personal_access_tokens: {
    title: "个人访问令牌列表",
    create_action: "创建新令牌",
    table: {
      name: "名称",
      scopes: "访问权限",
      expire_at: "到期日",
    },
    create_dialog: {
      title: "令牌生成",
      error_message: "<strong>错误！</strong>抱歉，发生错误了！",
      name_input: "别名 例如：我的令牌名称",
      name_input_message: "最喜欢的令牌名称。",
      scopes_list: "令牌访问权限列表",
    },
    access_token_dialog: {
      title: "个人访问密钥",
      message:
        "这是您个人访问令牌的密钥。这是唯一一次显示此令牌，请务必妥善截图或存储保管！您现在可以使用该令牌请求API。",
    },
    delete_alert: {
      title: "删除",
      message: "是否要删除此访问令牌？",
      action: "删除",
    },
  },

  /** {@see Scopes} **/
  scopes: {
    //--------------------------- Profile ---------------------------
    profile: {
      name: "个人资料信息",
      description:
        "读取用户个人资料详情，包括姓名、电子邮件、头像和认证状态。",
    },
    phone: {
      name: "电话号码",
      description: "访问用户的电话号码。",
    },
    address: {
      name: "地址",
      description: "读取地址簿中保存的地址。",
    },
    "user:profile:write": {
      name: "产品概况 项目",
      description: "编辑 项目 项目 用户 产品概况 项目.",
    },

    //--------------------------- Storefront ---------------------------
    "my-gift-cards": {
      name: "礼品卡",
      description: "访问用户的礼品卡。",
    },
    "order-history": {
      name: "订单历史",
      description: "读取订单历史。",
    },
    buy: {
      name: "购买",
      description: "从商店下单。",
    },

    //--------------------------- Backoffice ---------------------------
    articles: {
      name: "内容管理",
      description: "编辑文章。",
    },
    "backoffice:notifications": {
      name: "通知 项目",
      description: "已发送 项目 接收 通知.",
    },
    "backoffice:order:write": {
      name: "订单 项目",
      description: "编辑 项目 项目 店铺 订单.",
    },
    "backoffice:order:read": {
      name: "订单 访问权限",
      description: "项目 店铺 订单.",
    },
    "backoffice:support-tickets": {
      name: "支持 项目",
      description: "项目 支持 项目.",
    },
    "backoffice:shop:read": {
      name: "店铺 项目",
      description: "项目 店铺 许可证详情 项目 统计数据.",
    },
    "backoffice:shop:write": {
      name: "店铺 项目",
      description: "创建 项目 项目 店铺 许可证详情.",
    },
    "backoffice:shop:add": {
      name: "项目 店铺",
      description: "项目 项目 新建 店铺 到 项目 项目.",
    },
    "backoffice:shop:delete": {
      name: "删除 店铺",
      description: "删除 项目 店铺 从 项目 项目.",
    },
    "backoffice:giftcard:write": {
      name: "礼物 卡片 项目",
      description: "创建 项目 项目 礼物 卡片列表.",
    },
    "backoffice:giftcard:read": {
      name: "礼物 卡片 访问权限",
      description: "项目 礼物 卡片 许可证详情 项目 统计数据.",
    },
    "backoffice:faq:write": {
      name: "FAQ 项目",
      description: "创建 项目 项目 项目 项目 项目.",
    },
    "backoffice:faq:read": {
      name: "FAQ 访问权限",
      description: "项目 FAQ 许可证详情 项目 统计数据.",
    },
    "backoffice:category:write": {
      name: "类别 项目",
      description: "创建 项目 项目 产品 子类别.",
    },
    "backoffice:category:read": {
      name: "类别 访问权限",
      description: "项目 类别 许可证详情 项目 统计数据.",
    },
    "backoffice:product:write": {
      name: "产品 项目",
      description: "项目 项目 项目 产品.",
    },
    "backoffice:product:read": {
      name: "产品 访问权限",
      description: "项目 产品 许可证详情 项目 统计数据.",
    },
    "backoffice:report:read": {
      name: "报告 访问权限",
      description: "项目 店铺 报告 项目 项目.",
    },
    "backoffice:finance:write": {
      name: "财务 账户 项目",
      description: "项目 财务 账户 项目 到 项目 店铺.",
    },
    "backoffice:finance:read": {
      name: "财务 账户 访问权限",
      description: "项目 财务 账户 许可证详情 项目 统计数据.",
    },
    "backoffice:page:write": {
      name: "项目 项目",
      description: "编辑 店铺 页面.",
    },
    "backoffice:page:read": {
      name: "项目 访问权限",
      description: "项目 店铺 项目 许可证详情 项目 统计数据.",
    },
    "backoffice:logistic:write": {
      name: "物流 项目",
      description: "项目 物流 项目.",
    },
    "backoffice:logistic:read": {
      name: "物流 访问权限",
      description: "项目 物流 许可证详情 项目 统计数据.",
    },
    "backoffice:staff:write": {
      name: "员工 项目",
      description: "编辑 项目 项目 员工 许可证详情.",
    },
    "backoffice:staff:read": {
      name: "员工 访问权限",
      description: "项目 员工 项目 项目 统计数据.",
    },
    "backoffice:business-profile:write": {
      name: "企业 产品概况 项目",
      description: "项目 企业 简介.",
    },
    "backoffice:business-profile:read": {
      name: "企业 产品概况 访问权限",
      description: "项目 企业 产品概况 许可证详情.",
    },
    "backoffice:discount-code:write": {
      name: "折扣 代码 项目",
      description: "项目 店铺 折扣 项目.",
    },
    "backoffice:discount-code:read": {
      name: "折扣 代码 访问权限",
      description: "项目 折扣 代码 许可证详情 项目 统计数据.",
    },
    "backoffice:wallet:write": {
      name: "钱包 项目",
      description: "项目 用户 钱包.",
    },
    "backoffice:wallet:read": {
      name: "钱包 访问权限",
      description: "项目 钱包 项目 项目 统计数据.",
    },
    "backoffice:coupon:write": {
      name: "优惠券 项目",
      description: "项目 店铺 优惠券.",
    },
    "backoffice:coupon:read": {
      name: "优惠券 访问权限",
      description: "项目 优惠券 许可证详情 项目 统计数据.",
    },
    "backoffice:offer:write": {
      name: "促销 项目",
      description: "项目 店铺 促销活动.",
    },
    "backoffice:offer:read": {
      name: "促销 访问权限",
      description: "项目 促销 项目 项目 统计数据.",
    },
    "backoffice:cashback:write": {
      name: "返现 项目",
      description: "项目 店铺 返现 促销活动.",
    },
    "backoffice:cashback:read": {
      name: "返现 访问权限",
      description: "项目 返现 许可证详情 项目 统计数据.",
    },
    "backoffice:lottery:write": {
      name: "抽奖 项目",
      description: "项目 店铺 项目.",
    },
    "backoffice:lottery:read": {
      name: "抽奖 访问权限",
      description: "项目 抽奖 许可证详情 项目 统计数据.",
    },
    "backoffice:community:write": {
      name: "社区 项目",
      description: "项目 社区 项目.",
    },
    "backoffice:community:read": {
      name: "社区 访问权限",
      description: "项目 社区 许可证详情 项目 统计数据.",
    },
    "backoffice:customer:write": {
      name: "项目 项目",
      description: "项目 项目 许可证详情.",
    },
    "backoffice:customer:read": {
      name: "项目 访问权限",
      description: "项目 项目 项目 项目 统计数据.",
    },
    "backoffice:ribbon:write": {
      name: "项目 项目",
      description: "项目 店铺 项目.",
    },
    "backoffice:ribbon:read": {
      name: "项目 访问权限",
      description: "项目 项目 许可证详情 项目 统计数据.",
    },
    "backoffice:ai:write": {
      name: "AI 项目",
      description: "项目 AI 项目.",
    },
    "backoffice:ai:read": {
      name: "AI 访问权限",
      description: "项目 AI 项目 项目 统计数据.",
    },
    "backoffice:vendor-payment:write": {
      name: "项目 支付 项目",
      description: "项目 项目 付款.",
    },
    "backoffice:vendor-payment:read": {
      name: "项目 支付 访问权限",
      description: "项目 项目 支付 许可证详情 项目 统计数据.",
    },
    "backoffice:company:read": {
      name: "商户 访问权限",
      description: "项目 商户 许可证详情 项目 统计数据.",
    },
    "backoffice:company:write": {
      name: "商户 项目",
      description: "项目 商户 项目.",
    },
    "backoffice:note:read": {
      name: "备注 访问权限",
      description: "项目 项目 项目 项目 许可证详情.",
    },
    "backoffice:note:write": {
      name: "备注 项目",
      description: "项目 项目.",
    },
    "backoffice:affiliate:write": {
      name: "联盟 项目",
      description: "项目 联盟 项目.",
    },
    "backoffice:affiliate:read": {
      name: "联盟 访问权限",
      description: "项目 联盟 许可证详情 项目 统计数据.",
    },
    "backoffice:print:write": {
      name: "项目 项目",
      description: "项目 项目 选项.",
    },
    "backoffice:print:read": {
      name: "项目 访问权限",
      description: "项目 项目 许可证详情.",
    },
    "selldone:token:read": {
      name: "项目 访问权限",
      description: "项目 项目 许可证详情 项目 统计数据.",
    },
    "selldone:token:write": {
      name: "项目 项目",
      description: "项目 项目.",
    },

    //--------------------------- Selldone ---------------------------
    "selldone:monetization:read": {
      name: "项目 访问权限",
      description: "项目 项目 许可证详情 项目 统计数据.",
    },
    "selldone:monetization:write": {
      name: "项目 项目",
      description: "项目 项目, 项目 项目 项目.",
    },
    "selldone:identification": {
      name: "项目 访问权限",
      description: "访问权限 用户 项目 许可证详情.",
    },
    "selldone:developer:read": {
      name: "开发者 访问权限",
      description: "项目 开发者 许可证详情 项目 统计数据.",
    },
    "selldone:developer:write": {
      name: "开发者 项目",
      description: "项目 开发者 项目.",
    },
    "selldone:security:write": {
      name: "安全 项目",
      description: "项目 安全 项目.",
    },

    //--------------------------- Connect ---------------------------
    "connect:provider:write": {
      name: "服务商 项目",
      description: "项目 已连接 服务 服务商.",
    },
    "connect:provider:read": {
      name: "服务商 访问权限",
      description: "项目 服务商 许可证详情 项目 统计数据.",
    },

    //--------------------------- Agency ---------------------------
    "agency:read": {
      name: "项目 访问权限",
      description: "项目 项目 许可证详情 项目 统计数据.",
    },
    "agency:write": {
      name: "项目 项目",
      description: "项目 项目 项目.",
    },

    //--------------------------- Vendor ---------------------------

    "vendor-read": {
      name: "项目 访问权限",
      description: "项目 项目 许可证详情 项目 统计数据.",
    },
    "vendor-write": {
      name: "项目 项目",
      description: "项目 项目 项目.",
    },
  },

  scope_group: {
    backoffice: {
      title: "项目",
      description: "访问权限 到 项目 项目 店铺 项目 项目.",
    },
    storefront: {
      title: "项目",
      description: "访问权限 到 项目 项目 店铺 项目.",
    },
    profile: {
      title: "产品概况",
      description: "访问权限 用户 产品概况 项目.",
    },
    selldone: {
      title: "Selldone",
      description: "访问权限 Selldone 配送服务 项目 项目.",
    },
    others: {
      title: "项目",
      description: "项目 权限范围 项目 项目 项目 项目 项目.",
    },
    vendor: {
      title: "项目",
      description: "访问权限 项目 项目 项目 项目 项目.",
    },
    connect: {
      title: "连接操作系统",
      description: "访问权限 已连接 配送服务 项目 服务商.",
    },
    agency: {
      title: "项目",
      description: "访问权限 项目 项目 项目 项目.",
    },
  },

  /** {@see AdminCompanyPage} **/
  company_page: {
    title: "公司",
    create_app: "创建新应用程序",
    menu: {
      edit: "编辑",
      apps: "应用",
      dashboard: "仪表盘",
      companies: "公司",
    },
    /** {@see AdminCompanyPage_Dashboard} **/
    dashboard: {
      /** {@see CompanyInfoWidget} **/
      info_widget: {
        title: "公司注册信息",
        address: "地址",
        website: "网站",
        email: "电子邮件",
        phone: "电话号码",
        register: "注册",
        developer: "开发者",
        verified: "已验证",
        golden: "金牌认证",
      },
    },
    /** {@see AdminCompanyPage_Develop} **/
    developer: {
      title: "开发者",
      menu: {
        new: "新建",
        apps: "应用",
      },
    },
    /** {@see AdminCompanyPage_Edit} **/
    edit: {
      title: "编辑",
    },
  },
  /** {@see BAppAdd} **/
  add_app: {
    category_input: "分类",
    code_input: "代码",
    name_input: "名称",
    description_input: "描述",
    video_input: "视频网址",
    public_form: "通用信息结构",
    private_form: "私密信息结构",
    icon_input: "应用图标",
    logo_input: "项目 应用程序",
    enable_input: "应用程序是否启用？",
    edit_action: "编辑应用",
    create_action: "创建应用",
    notifications: {
      add_success: "已创建企业帐户 {name}。",
      delete_success: "企业帐户已编辑。",
    },
  },

  /** {@see AppPage} **/
  app_page: {
    title: "应用",

    menu: {
      edit: "编辑",
      publish: "发布",
      history: "版本历史",
      dashboard: "仪表盘",
      company: "公司",
      api: "API",
      images: "图片",
    },
    /** {@see AppPage_Dashboard} **/
    dashboard: {
      /** {@see AppInfoWidget} **/
      app_info_widget: {
        title: "应用",
        app_code: "应用代码",
        category: "分类",
        name: "名称",
        installs: "安装量",
        uninstalls: "卸载量",
        actives: "活跃量",
        description: "描述",
        published: "已发布",
        waiting_for_review: "待审核",
        app_mode: "应用模式",
      },
    },
  },
  /** {@see ShopPermissions} **/
  shop_permissions: {
    ADMIN: { text: "所有者", description: "对所有店铺拥有完全访问权限。" },
    PRODUCT: {
      text: "产品经理",
      description: "添加、编辑和管理商店产品。",
    },
    AUDITING: {
      text: "财务经理",
      description: "查看财务信息和付款。",
    },
    CONTENT: {
      text: "内容管理",
      description: "回答问题、撰写博客和设计页面。",
    },
    OFFICER: {
      text: "高级经理",
      description: "查看和监控员工活动。",
    },
    EMPLOYEE: {
      text: "员工",
      description: "查看订单并履行订单。",
    },
    MARKETING: {
      text: "营销",
      description:
        "访问设置，创建活动、邮件营销及其他与营销相关的部分。",
    },
    VIEWER: {
      text: "查看者",
      description:
        "能够查看店铺信息，但不能编辑或更改。",
    },
  },

  /** {@see ShopRoles} **/
  shop_roles: {
    PhysicalOrdersChecking: {
      text: "实物验货",
      description: "检查收到的订单。",
    },
    PhysicalOrdersPackaging: {
      text: "实物包装",
      description: "仓库和包装过程。",
    },
    PhysicalOrdersDelivery: {
      text: "实物发货",
      description: "订单发货。",
    },
    PhysicalOrdersSupport: {
      text: "实物售后",
      description: "售后支持。",
    },
  },

  /** {@see AccountStatus} **/
  account_status: {
    Checking: "审核中",
    Approved: "已确认",
    Rejected: "已拒绝",
    Deleted: "已删除",
    Banned: "已禁止",
    Payment: "支付",
    SelldoneSprite: "Selldone 钱包 账户",
    SelldoneStorage: "Selldone 项目",
  },
  /** {@see BPageAccount} **/
  account_page: {
    title: "账户",
    menu: {
      setting: "设置",
      charge: "充值",
      transfer: "转账",
      transactions: "交易",
      history: "历史",
      cards: "卡片",
    },

    /** {@see BPageAccountTransactions} **/
    transactions: {
      title: "账户交易",
      detail: {
        title: "交易",
        amount: "金额",
        description: "描述",
        from: "从",
        to: "到",
        created_at: "日期",
        receipt: "收据",
        receipt_note: "备注",
      },
      table: {
        type: "类型",
        from: "从账户",
        to: "到账户",
        amount: "金额",
        receipt: "收据",
        created_at: "日期",
        description: "描述",
      },
    },

    /** {@see BPageAccountTransfer} **/
    transfer: {
      title: "转账费用",
      form: {
        title: "转账请求表",
        sub_title:
          "项目 项目 项目 到 项目 项目 项目 项目 项目 钱包 项目 钱包 项目 项目 项目 货币, 项目 转账 项目 到 项目 钱包 项目 Selldone.",
        message:
          "转账时请谨慎操作，转账完成后无法撤回。",
      },
    },
    /** {@see BPageAccountDeposit} **/
    deposit: {
      form: {
        title: "账户充值",
        sub_title:
          "您需要充值账户余额以购买许可证、升级账户和支付系统账单。",
        amount_input: "金额",
        charge_action: "充值账号",
      },
      notifications: {
        qr_title: "支付",
        qr_message: `付款地址 {currency} 已创建。`,
        gateway_title: "支付",
        gateway_message: "正在连接到支付网关。",
      },
    },

    /** {@see BPageAccountEdit} **/
    setting: {
      title: "账户设置",
      account_name_input: "账户名称",
      notifications: {
        updated_success: "您的账户已成功更新。",
      },
    },
  },

  /** {@see BAccountReceiptPaymentDialog} **/
  receipt_payment_dialog: {
    title: "收据付款",
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
    title: "交易表单",
    from_input: "从账号",
    to_input: "到账号",
    from_input_message: "款项将从此账户中扣除。",
    account_name: "账户名称",
    currency: "货币",
    free_balance: "可用余额",
    to: "收款账户",
    amount: "金额",
    receipt_title: "收据付款",
    receipt_input: "收据号",
    paid_status: "这张收据已经支付。",
    paid_canceled: "此收据已被取消。",
    description: "说明",
    created_at: "日期",
    duration: "期限",
    unlimited: "无限期",
    add_note_action: "添加说明",
    note: "备注",
    transfer_action: "转账",
    confirmation: {
      title: "发送款项",
      subtitle: "交易确认",
      message:
        "如果以下信息无误，请点击交易确认按钮以完成交易。",
      from: "从账户",
      to: "账户",
      amount: "金额",
      fee: "交易费用",
      total_pay: "从账户扣除的总额",
      receipt: "收据",
      description: "说明",
      accept_action: "确认交易",
    },
    enter_account_number: "请输入账户号码。",
    currency_not_match:
      "收款账户的货币与付款账户不一致。",
    account_number_not_valid: "账户号码不正确。",
    account_number_is_valid: "账户号码正确。",
    receipt_not_valid: "收据号码不正确。",
    receipt_is_valid: "收据号码正确。",

    notifications: {
      confirm_success: "交易成功完成。",
    },
  },

  /** {@see OPlanCalculator} **/
  price_calculator: {
    title: "计算器 |适合您的业务",
    description:
      "根据您的每月销售额计算并选择最佳计划：",
    sale_input: "月销售额",
    hypernova_plan: "项目 项目 项目 %0!",
    show_normal_mode: "显示普通模式",
    show_hypernova_mode: "我的交易额超过2000万美元！",
  },

  /** {@see OPlanFeaturesCard} **/
  price_card: {
    billed_monthly: "每月结算 {amount}。",
    billed_yearly: "每年结算 {amount}。",
    buy_license_action: "立即购买",
    select_your_store: "选择您的商店",
  },

  /** {@see BSessionsMap} **/
  shop_session_widget: {
    total_sessions: "总会话数",
  },
  /** {@see BDashboardShopCustomersActivityMap} **/
  user_activities_keys: {
    add_baskets: "添加到购物车",
    remove_baskets: "从购物车中删除",
    buys: "购买",
    products_views: "查看产品",
  },
  /** {@see BDashboardShopAcquisition} **/
  shop_visitors_widget: {
    title: "访客分析",
    new_visitors: "新访客",
    amp: "AMP 浏览量",
    returning_visitors: "回头客",
    page_views: "页面浏览量",
    other_pages: "其他页面",
    from_previous_7_days: "过去7天内",
  },

  /** {@see BUserAppLevel}   {@see AppLevel}  **/
  app_levels: {
    title: "应用等级",
    Newbie: "初学",
    Beginner: "入门",
    Novice: "初级",
    Intermediate: "中级",
    Advanced: "高级",
  },

  /** {@see Login} **/
  login: {
    register_title: "商业的桥梁，<br>愉快的体验。",
    register_subtitle:
      "项目 项目 今天 项目 项目. Selldone 项目 项目 项目 项目, 项目, 项目, 项目 项目.",

    password_recovery_title: "找回密码",
    password_recovery_message:
      "如果您忘记了密码，请输入您帐户的电子邮件地址，然后按确认键。我们将向您发送一封电子邮件，其中包含重置密码的链接。",
    email: "您的电子邮件地址",
    password_recovery_action: "接收密码找回邮件",

    register_google: "项目 项目 Google",
    register_apple: "项目 项目 Apple",
    continue_with: "继续使用",
    register_linkedin: "项目 项目 LinkedIn",
    register_facebook: "项目 项目 Facebook",
    register_github: "项目 项目 GitHub",
    create_your_account: "创建您的帐户",
    password_8_chars: "密码至少需要8个字符。",
    password_upercase_number: "至少包含一个大写字母和一个数字。",
    password_confirm: "密码与确认密码一致。",
    privacy_agreement:
      "项目 项目 项目, 项目 项目 到 Selldone'项目 <a href='/terms' target='_blank'>使用条款 项目 项目</a> 项目 <a href='/privacy' target='_blank'>隐私政策 项目 </a>.",
    register_action: "开始吧，免费注册！",
    login_action: "登录",
    already_signup: "已经注册？",
    login_your_account: "登录到您的帐户",
    login_google: "项目 项目 Google",
    login_linkedin: "项目 项目 LinkedIn",
    login_facebook: "项目 项目 Facebook",
    login_github: "项目 项目 GitHub",
    remember_me: "记住我。",
    login_button: "登录",
    two_step_problem: "两步验证出现问题了吗？",
    two_step_problem_action: "我想禁用两步登录。",
    two_step_confirm: "确认访问代码",
    forgot_password: "忘记密码？",
    signup_free: "免费注册",
    checking_robot_message: "正在验证您是机器人还是人类...",
    notifications: {
      step2_login_success: "自动登录帐户",
    },
    signup_email: "通过电子邮件注册",

    name_placeholder: "姓名",
    email_placeholder: "电子邮件",
    email_or_username_placeholder: "电子邮件、用户名或电话号码",
    password_placeholder: "密码",
    re_password_placeholder: "确认密码",
    new_in_samin: "新建 项目 Selldone?",
    auto_create_shop: "自动创建商店",
  },
  /** {@see Layout} **/
  layout: {
    logout: "登出",
    menu: {
      my_public_profile_subtitle: "我的公开个人资料{name}。",

      personal_information: "个人信息和资料",
      personal_information_subtitle: "编辑我的资料、地址和身份认证（KYC）。",
      wallet: "钱包和账户",
      wallet_subtitle: "虚拟账户和已绑定的支付卡。",

      companies: "公司与业务",
      companies_subtitle: "注册我的业务及税务资料。",

      access: "开发者与 API 密钥",
      access_subtitle:
        "OAuth 客户端, 个人的 访问权限 项目 项目 已连接 应用.",

      security: "账户安全",
      security_subtitle: "设置双重认证并管理社交登录选项。",

      preferences: "用户偏好与个性化",
      preferences_subtitle:
        "更改主题、等级、语言和默认货币。",
      my_subscriptions: "我的订阅",
      my_subscriptions_subtitle:
        "访问高级 AI 和定制功能。",
    },
  },

  /** {@see PageBuilder} **/
  page_builder: {
    title: "网站设计",

    menu: {
      user_view: "预览",
      design: "设计",
      behavior: "行为",
      seo: "SEO 搜索引擎优化",
      setting: "设置",
      embed: "嵌入",
    },
    waiting_fetch: "正在接收信息...",

    /** {@see SettingCustomPage} **/
    setting: {
      title_input: "页面标题",
      description_input: "简短描述",
      name_input: "页面网址（字母和数字）",
      bg_color_input: "背景颜色",
      bg_style_input: "页面背景样式",
      page_label_input: "标签颜色",
      page_dir_input: "页面方向",
      ltr: "从左到右",
      rtl: "从右到左",
      designer_note: "设计师备注",
    },

    /** {@see LPageEditor} **/
    design: {
      themes: {
        title: "页面编辑器",
        message: "无需代码，打造顶级商务页面。",
        page_title_input: "输入页面标题",
      },
      tools: {
        rearrange: "排序",
        tools: "工具",
        history: "历史记录",
        style: "风格",
        typography: "字体排版",
        hierarchy: "层级",
      },
      no_category: "无分类",
    },

    /** {@see LPageEditorSeo} **/
    seo: {
      message:
        "SEO 编辑 项目 项目 项目 项目 项目 Selldone SEO 项目.",
    },
  },

  /** {@see VerifyEmailCaution} **/
  verify_email_caution: {
    title: "请确认您的邮箱地址",
    message:
      "新的激活链接已发送到您的电子邮件地址 {email}。请在进行任何操作前检查您的邮箱。",
    resend_message:
      "如果您未收到激活链接，请点击下方按钮重新发送。",
    resend_action: "重新发送激活链接",
    resend_notice: "激活链接已发送。",
  },

  /** {@see ShopAutomation_Autopilot} **/
  autopilot: {
    start: "开始日期",
    end: "结束日期",
  },

  /** {@see Help} **/
  help: {
    menu: "菜单",
    more_helps: "阅读更多",
  },

  /** {@see WidgetCompanyCard} **/
  company_card: {
    pending_state: "等待审核",
    register: "已注册",
    developer: "开发者",
    verified: "已验证",
    premier: "高级",
  },

  /** {@see ShopSubscriptionList} **/
  shop_license: {
    add: "添加订阅",
    only_last: "仅最后一次订阅",
    vouchers: "代金券",
    buy: "购买订阅计划",
    monthly: "月度",
    yearly: "年度",
    start_date: "开始日期",
    end_date: "结束日期",
    price: "价格",
    verify: {
      true_title: "项目 使用条款",
      true_description: "项目 项目 项目 项目 项目 Selldone 使用条款 项目 项目",
    },
    need_charge: "需要付费",
    buy_now: "立即购买",
    use_voucher_now: "立即使用代金券",
    plan_placeholder: "选择您的订阅计划",
    plan: "许可证计划",
    use_date: "添加日期",
    validity_duration: "有效期",
    validity_duration_hint:
      "通过购买 12 个月的许可证，您将获得 30% 的折扣。",

    active_license: {
      title: "有效许可证",
      subtitle:
        "这是您的有效许可证信息。您可以通过升级到更高等级的计划来降低服务费用。",
      subtitle_partner:
        "您的 {name} 有效许可证信息。商店目前有一个合作伙伴协议。如果您希望取消该协议并升级到更高等级的计划，请联系客户支持团队以获取帮助。",
    },
    licenses_table: {
      title: "购买历史",
      subtitle:
        "这是您所有有效和待处理的许可证清单。您可以在钱包充值后购买许可证计划。此外，请注意，取消订阅后，剩余的订阅金额将返还至您的虚拟钱包中。",
    },
    license_detail: {
      title: "许可证详情",
      subtitle:
        "这些是您当前计划的使用限制。欲了解更多详细信息，请访问定价页面。您可以在所有计划中（包括免费计划）访问所有功能，以开始和发展您的业务。随着业务的扩展，请考虑升级至更高等级的计划以降低服务费。",
    },

    table: {
      plan: "计划",
      start_date: "开始/结束日期",
      renewal: "自动续订",
      linked_account: "关联账户/代金券",
      payment: "付款",
      cancel: "取消",
    },
    notifications: {
      subscribe_success: "订阅成功。",
      cancel_success: "取消订阅成功。",
    },
    cancel_dialog: {
      title: "确认取消订阅",
      message: "您确定要取消此订阅吗？",
      action: "取消订阅",
    },
    add_dialog: {
      wallet: {
        title: "项目 项目 钱包",
        subtitle:
          "项目 项目 项目 钱包 到 项目 项目 项目 订阅. 项目 项目 项目 项目 项目 项目, 项目 项目 创建 项目 项目 项目 钱包 项目. 项目 钱包 项目 项目 已使用 项目 项目 项目.",
      },
      auto_renewal: {
        true_title: "自动续订",
        true_description:
          "项目 订阅 项目 项目 项目 项目 项目 钱包 项目 项目 余额 项目 项目 项目 项目 项目 项目 项目.",
      },
      options: {
        title: "项目 选项",
      },
      verify: {
        title: "项目",
      },
    },
  },

  /** {@see BLayoutBackofficeShop} **/

  admin_shop_layout: {
    download_txt: "下载文本数据",
    download_excel: "项目 数据 项目",
  },
  /** {@see BUserPreferences} **/
  user_preferences: {
    access: "访问权限",
    template: "模板",
    feedback: "反馈",
    date_time: "日期和时间",

    company: "公司",
    company_message: "如果您有公司并想要发布应用程序。",
    access_keys: "访问密钥",
    access_keys_message: "显示客户端和访问密钥。",
    rating: "项目 项目 项目 项目 项目 项目 项目 Selldone?",
    large_font: "大字体",
    large_font_message: "显示比正常大的文本",
    samples: "显示示例商店",
    samples_message:
      "如果启用，在你的面板中将显示一些示例商店。",

    automation: "自动化",
    automation_message:
      "项目 自动化 项目 项目 店铺 仪表盘. (项目, 项目 项目,...)",
  },

  /** {@see BPageShopSettingLocations} **/
  shop_locations: {
    title: "提供服务的国家",
    sub_title:
      "从下方列表中选择你想要销售产品的国家。",

    delete_restriction: "删除限制",
    set_restriction: "设置限制",
    notifications: {
      locations_update: "位置更新成功。",
    },
    table: {
      country: "国家",
      currency: "货币",
      available: "可用的",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "售罄",
    review_unit: "条评价",
    not_original: "非原版",
  },

  /** @see BProductAddStudio **/
  product_studio: {
    add_mode: "添加更多详细信息",
    auto_category: "自动设置分类",
    add_in_current_category: "添加到当前分类",
    category_mode_message:
      "如果启用，产品将被添加到默认分类或子分类中。",
    sku_name_input: "SKU/名称",
    info: {
      subtitle:
        "若要生成产品，您只需填写创建所需的基本信息即可。",
    },
    price: {
      subtitle:
        "输入此产品的价格和折扣。添加产品后，您将可以访问更多选项。",
    },
    by_sku: {
      title: "按 SKU 添加",
      subtitle: "您所在国家/地区的数据库不可用。",
    },
    drop_shipping: {
      subtitle:
        "在批发市场中查找产品并将其添加到您的商店。",
    },
    by_connect: {
      subtitle:
        "项目 项目 产品 从 POD 项目 代发货 项目 项目 Selldone 项目 OS—项目 项目 项目 店铺 项目 项目 项目 产品 项目, 无服务 项目 项目.",
    },
    your_license_is_not_eligible: "您的许可证不符合条件。",
    sku_dialog: {
      title: "按 SKU 添加产品",
      subtitle:
        "您可以通过我们的数据库根据 SKU 查找产品，并一键添加。",
    },
    dropshipping_dialog: {
      title: "添加代发货产品",
    },
  },

  /**
   * @see BProductAddDropshippingShops
   */
  product_add_dropshipping_shops: {
    subtitle:
      "项目, 项目 项目 项目 项目 项目 列表视图 项目 产品 项目 Selldone, 项目 项目 有库存的 项目 其他 项目. Selldone'项目 项目 代发货 项目 项目 项目 项目, 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目.",
  },

  /** @see Affiliates **/
  my_affiliate: {
    title: "我的联盟合同",
    message:
      "这是与其他店铺的联盟合作列表。当店铺所有者指定您为联盟合作伙伴时，您可以在这里查看您的佣金、订单详情和相关统计数据。",
  },

  /** @see BPageShopMarketingAffiliate **/
  affiliates: {
    title: "联盟合作伙伴",
    subtitle:
      "创建联盟，追踪他们的表现，并根据准确的信息统一管理。我们帮助您和您的合作伙伴建立稳固的关系。",

    affiliate_code: "联盟代码",
    crate_date: "创建日期",
    last_payment_date: "最后付款日期",
    for_all_products: "适用于所有产品",
    balance: "余额",
    fix_commission: "固定佣金",
    percent_commission: "百分比佣金",
    total_payment: "累计付款",
    new_affiliate: "新增联盟合作伙伴",
    new_affiliate_message: "添加新的联盟合作伙伴",

    link_factory: {
      title: "联盟合作伙伴链接生成器",
      link_input: "你的链接",
      link_output: "生成的链接",
    },
  },

  /**
   * @see BAffiliateEdit
   */
  affiliate_edit: {
    affiliate_commission: "联盟 佣金",

    config: {
      new: "新建 联盟 项目",
      edit: "编辑 联盟 项目",
      subtitle:
        "项目 项目 项目 编辑 项目 姓名 项目 项目 联盟 项目.",
    },

    payment: {
      title: "支付 项目",
      subtitle:
        "项目 项目 佣金 项目 项目 项目 联盟. 项目 项目 项目 项目 项目 项目 佣金, 项目 项目 项目 佣金 项目 项目 产品.",
    },

    contact: {
      title: "联系信息",
      subtitle: "项目 项目 联系方式 许可证详情 项目 项目 联盟 项目 项目.",
    },

    restriction: {
      title: "佣金 项目",
      subtitle:
        "项目 项目 产品 项目 项目 项目 佣金. 项目 项目 项目 佣金 到 项目 产品.",
    },

    link_domain: {
      title: "项目 域名",
      subtitle:
        "链接 项目 项目 项目 域名 到 项目 联盟 项目. 项目 项目 买 项目 项目 域名 项目 项目 项目 到 项目 联盟.",

      domain_not_approved_msg: "项目 域名 项目 项目 项目 项目 项目!",
      domain_is_not_enable_msg: "项目 域名 项目 项目 项目!",
      domain_is_linked_to_other_affiliate_msg:
        "项目 域名 项目 项目 项目 到 项目 联盟!",
    },

    set_users_first_message: "项目 项目 项目 用户 项目!",

    cluster: {
      title: "项目",
      subtitle:
        "项目 项目 联盟 项目 项目 项目 到 项目 项目 项目 其他 资源 项目 项目 项目.",
      manage_action: "项目",
    },

    notifications: {
      create_success: "新建 联盟 项目 项目.",
      update_success: "联盟 项目 项目.",
    },

    inputs: {
      name: {
        label: "联盟 项目 姓名",
        message: "项目.项目., 项目 项目, 项目 商户, 项目 项目, 项目.",
      },
      commission: {
        label: "佣金 项目",
        false_description:
          "项目 项目 项目 项目 项目 项目 项目 项目 佣金.",
        true_description:
          "项目 项目 项目 佣金 项目 项目 项目 定价 项目.",
        false_title: "项目 + 项目 佣金",
        true_title: "项目 佣金",
      },
      user: {
        label: "用户 (项目)",
        message: "项目, 项目.项目., 联盟 姓名 项目 Selldone",
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
        placeholder: "项目, 项目.项目., 项目 银行, 无服务: 10002-325-800-845213",
      },
      domain: {
        placeholder: "项目 项目 域名... (项目)",
      },
      pos: {
        true_description:
          "项目 项目 项目 订单 项目 项目 项目 顾客 项目 项目 项目.",
        true_title: "POS 访问权限",
      },
      enable: {
        true_description:
          "项目 项目 联盟 项目 已启用的? 项目 已停用的, 项目 联盟 项目 项目 项目 到 订单 项目 项目 项目 链接.",
      },
      products: {
        label: "产品 项目 项目 佣金",
        select_product: "项目 产品",
      },
    },
    actions: {
      update: "更新 联盟",
      add: "项目 联盟 项目",
    },
    /**
     * @see BPageAffiliateEdit
     */
    delete: {
      subtitle:
        "项目 项目 项目 项目 项目 项目 项目 项目 联盟 项目 项目 项目 从 项目 店铺. 联盟 项目 项目 项目 项目 项目 项目 项目 时间 项目 项目.",
    },
  },

  /**
   * @see BPageShopFinanceValuations
   */
  shop_valuations: {
    title: "自定义 定价 项目 资产价值",
    subtitle:
      "项目 项目 项目 (项目 定价 输入 项目) 到 项目 产品, 项目 顾客 到 项目 变体 项目 项目 项目 项目. 项目 项目 项目 项目 项目 项目 价格 项目 项目 项目 自定义 输入.",
    add_valuation_action: "创建 新建 项目 项目",
    empty_message:
      "项目 项目 项目 项目 变体, 项目 项目 项目 项目 项目 项目 项目 项目 项目 到 项目 简单的 产品.",
    delete_dialog: {
      title: "项目 移除",
      message:
        "项目 项目 项目 项目 项目 到 删除 项目 定价 项目? 项目 项目 项目 项目 自定义 定价 项目 项目 项目 从 全部 项目 产品 项目.",
      action: "是的，立即删除",
    },
    notifications: {
      delete_success: "项目 项目 项目 项目 已删除.",
    },
  },

  /**
   * @see BValuationInput
   */
  valuation_input: {
    label: "定价 & 项目 项目",
  },

  /**
   * @see BValuationAdd
   */
  valuation_add: {
    title_edit: "编辑 项目 项目",
    title_add: "创建 新建 项目 项目",
    config: {
      subtitle:
        "项目 项目 项目 项目 项目 到 创建 项目 定价 项目 项目 项目 项目 项目 项目 项目 产品. 开始时间 项目 项目 项目 项目 项目 项目 姓名.",
    },
    valuation_preview: "预览 项目 项目",
    load_sample: "项目 项目",
    conditions: {
      title: "条件",
      subtitle:
        "项目 项目 项目 项目 自定义 变体. 项目 配置 项目 项目 项目 项目 项目 项目.",
    },
    structure: {
      title: "项目",
      subtitle:
        "设计 项目 定价 输入 项目 项目 项目 项目 项目 项目 项目 项目.",
      expand_action: "项目",
      collapse_action: "项目",
    },
    inputs: {
      title: {
        message: "项目 标题 项目 项目 项目 到 顾客.",
        placeholder: "项目 项目 姓名 项目 定价, 项目.项目., '项目 项目",
      },
    },
    samples: {
      title: "项目 资产价值",
    },
  },

  /** @see AdminGiftcardPage_Orders **/
  gift_card_orders: {
    title: "使用礼品卡的订单",
    table: {
      order: "订单",
      order_price: "订单金额",
      paid_by_card: "礼品卡支付",
      payment_status: "支付状态",
      date: "日期",
    },
  },

  /** @see BPageOfferOrders **/
  offer_orders: {
    title: "优惠订单",
    table: {
      order: "订单",
      order_price: "订单金额",
      offer_amount: "优惠金额",
      payment_status: "支付状态",
      product: "产品",
      date: "日期",
    },
  },

  /** @see BPageCouponOrders **/
  coupon_orders: {
    title: "优惠券订单",
    table: {
      order: "订单",
      order_price: "订单金额",
      coupon_amount: "优惠券金额",
      payment_status: "支付状态",
      date: "日期",
    },
  },

  /** @see BPageDiscountCodeOrders **/
  discount_code_orders: {
    title: "折扣码订单",
    table: {
      order: "订单",
      order_price: "订单金额",
      discount_amount: "折扣金额",
      payment_status: "支付状态",
      date: "日期",
    },
  },

  /** @see BPageShopIncentives **/
  incentives: {
    discount_code: "折扣",
    coupon: "优惠券",
    offer: "特价优惠",
    gift_card: "礼品卡",
    lottery: "抽奖",
    cashback: "返现",
  },

  /** {@see BPageShopIncentivesDiscountCode} **/
  discount_codes: {
    title: "折扣码",
    sub_title:
      "在此部分，您可以设计符合您需求的折扣优惠券。这些折扣独立于任何产品折扣，将应用于用户订单的最终金额。",
    add_new: "添加新的折扣代码",
    card: {
      created: "创建",
      start: "开始",
      end: "结束",
      currency: "货币",
      discount_percentage: "折扣率",
      discount_limit: "折扣限额",
      state: "当前状态",
      enabled: "已启用",
      disabled: "已禁用",
      used: "已使用",
      count: "数量",
      unit: "件",
    },
    /** {@see BDiscountCodeAdd} **/
    dialog: {
      title_edit: "修改折扣码",
      title_add: "添加新的折扣码",
      discount_code_input: "折扣码",
      discount_percent_input: "折扣率",
      discount_percent_input_hint: "购买金额的折现率",
      count_input: "数量",
      count_input_hint: "此折扣码的最大使用次数",
      limit_input: "折扣限额",
      limit_input_hint: "基于货币的最大折扣",
      currency_input_message: "折扣仅适用于此货币。",
      limit_input_message:
        "折扣额度为0表示折扣率无上限。",
      title_input: "标题",
      title_input_hint: "您可以输入此折扣代码的标题",
      description_input: "描述",
      description_input_hint:
        "您可以输入此折扣代码的描述",
      date_start_input: "开始时间",
      date_start_input_placeholder: "选择折扣开始时间",
      date_end_input: "结束时间",
      date_end_input_placeholder: "选择折扣结束时间",
      notifications: {
        add: "折扣码已成功添加。",
        edit: "折扣码已成功编辑。",
      },
      config: {
        title: "通用配置",
        subtitle:
          "项目 项目 项目 项目 折扣 代码 项目 项目: 最高 (LIMIT, PERCENT * 项目 价格). 项目 到 项目 项目 项目 项目 项目 项目 到 项目.",
      },
      limit: {
        title: "限制",
        subtitle:
          "您可以在此部分定义每个折扣码的最大使用限制以及最大折扣金额。",
      },
      duration: {
        title: "期限限制",
        subtitle:
          "如果您想在特定时间段内启用折扣码，可以在这里设定该期限。",
      },
      design: {
        subtitle:
          "您可以为每个折扣码设置标题和描述。这些详细信息将显示给用户。",
      },
      cluster: {
        subtitle:
          "通过将折扣码与集群关联，您可以在一个地方轻松管理多个资源。",
      },
    },
    delete_alert: {
      title: "删除折扣码",
      message: "要删除此折扣代码吗？",
      action: "删除折扣码",
    },
    notifications: {
      delete_success: "您的折扣码已成功删除",
    },
  },

  /** {@see BPageShopIncentivesGiftcard} **/
  gift_cards: {
    title: "礼品卡",
    sub_title:
      "创建礼品卡并根据需要可以制作多张。此卡已充值，仅限用于您店铺内的购买行为。",

    create_new: "添加新的礼品卡",
    card: {
      created: "创建",
      lifetime: "有效期",
      lifetime_unit: "从每张卡创建之日起计算的月数",
      currency: "货币",
      initial_balance: "初始充值金额",
      count: "数量",
      count_unit: "张",
      used: "已使用",
    },
    dialog: {
      title: "礼品卡设计",
    },
    alert: {
      title: "删除礼品卡",
      message:
        "您是否要删除此礼品卡类别及其下所有已发行的礼品卡？",
      action: "删除",
    },
    notifications: {
      delete_title: "删除礼品卡",
      delete_message: "您的礼品卡已成功删除。",
    },
  },

  /** {@see BPageShopIncentivesCoupon} **/
  coupons: {
    title: "优惠券",
    sub_title:
      "如果您想为客户提供可在特定条件下使用的折扣，您可以创建优惠券。优惠券可以包含有限额的百分比折扣、固定金额折扣，或者两者结合。",
    create_new: "添加新优惠券",
    qualified_products: "适用产品",
    min_purchase: "最低购买金额",
    only_first_order: "仅限首次购买",

    one_time_use: "一次性使用",
    multiple_use: "多次使用",
    amount_usage: "使用次数",

    delete_alert: {
      title: "删除优惠券",
      message: "您确定要删除此优惠券吗？",
      action: "是的，删除优惠券",
    },
    notifications: {
      delete_success: "优惠券已成功删除。",
    },
  },
  /** {@see BCouponAdd} **/
  coupon_edit: {
    title_edit: "修改优惠券",
    title_add: "新建优惠券",
    discount_charge: "折扣与收费",
    charge: "收费",
    charge_message: "初始费用金额",
    percent: "折扣百分比",
    percent_message: "折扣百分比金额",
    limit_input: "限额",
    limit_input_hint: "折扣限额金额",
    currency_input_message: "该优惠券可用于此货币。",

    count_input: "次数",
    count_input_hint: "此优惠码的最大使用次数",
    limit_input_message:
      "将折扣限额设置为 0 表示没有折扣上限。",
    date_start_input: "开始时间",
    date_start_input_placeholder: "选择优惠券的开始时间",
    date_end_input: "结束时间",
    date_end_input_placeholder: "选择优惠券的结束时间",
    title_input: "标题",
    title_input_hint: "您可以输入此优惠码的标题",
    description_input: "说明",
    description_input_hint:
      "您可以输入此优惠券代码的说明",
    coupon_code: "优惠券代码",
    need_code: "需要代码吗？",

    coupon_color: "优惠券颜色",
    min_purchase_amount: "最低购买金额",
    min_purchase_amount_hint:
      "购买金额必须大于或等于该数值。",
    should_exist_product: "购物车中至少需包含以下产品之一",
    apply_for_first_order: "仅限第一次购买",
    apply_for_first_order_on:
      "此优惠券仅可用于客户首次购买！",
    apply_for_first_order_off:
      "可在下方调整每位买家的优惠券使用次数。",

    has_qualify_constraints: "是否要设置更多限制条件？",
    has_qualify_constraints_message:
      "设置更多条件，以便让客户符合使用该优惠券的资格。",
    one_time_use_message: "客户可以使用此优惠券一次。",
    daily_limit: "每日限额",
    no_limit: "无限制",
    daily_limit_message: "每位客户每天可使用的最大次数",

    monthly_limit: "每月限额",
    monthly_limit_message: "每位客户每月可使用的最大次数",

    yearly_limit: "每年限额",
    yearly_limit_message: "每位客户每年可使用的最大次数",

    notifications: {
      add: "新优惠券创建成功。",
      edit: "优惠券已更新。",
    },

    config: {
      subtitle:
        "项目 项目 项目 项目 优惠券 折扣 项目 项目: CHARGE + 最高 (LIMIT, PERCENT * 项目 价格).",
    },
    limit: {
      subtitle:
        "在本节中，您可以设置每张优惠券的最大使用次数，以及每张优惠券可提供的最高折扣金额。",
      zero_message: "0：没有限制！",
    },
    duration: {
      subtitle:
        "如果您希望优惠券在特定时间段内生效，您可以在本节配置使用期限。",
    },
    design: {
      subtitle:
        "每张优惠券都可以添加标题和描述。客户将可以看到这些信息。",
    },
    constraints: {
      subtitle:
        "在这里，您可以为优惠券建立更多的个性化参数。",
      no_limit: "无额外限制",
      has_limit: "额外限制",
      has_code_message: "用户需要输入代码才能添加优惠券。",
    },
    club: {
      subtitle:
        "该优惠券的使用可仅限于特定客户俱乐部的会员。",
    },
    cluster: {
      subtitle:
        "将优惠券与集群相关联，可方便地在单个位置管理它及其他资源。",
    },
    preview: {
      subtitle: "以下是该优惠券的公开预览。",
    },
  },

  /** {@see BPageShopIncentivesOffer} **/
  offers: {
    title: "优惠活动",
    sub_title:
      "您可以为客户创建特别优惠，例如购买一件商品后，获得另一件商品的折扣或免费。",
    create_new: "添加新优惠",
    qualified_products: "符合条件的产品",
    min_quantity: "最低购买数量",
    min_purchase: "最低购买金额",
    amount_usage: "使用次数",

    delete_alert: {
      title: "删除优惠",
      message: "您确定要删除此优惠吗？",
      action: "是的，删除优惠",
    },
    notifications: {
      delete_success: "优惠已成功删除。",
    },
  },

  /** {@see BOfferAdd} **/
  offer_edit: {
    title_edit: "编辑优惠",
    title_add: "新优惠",

    design_style: "设计与样式",
    eligible_constraints: "客户使用限制",

    title_input: "标题",
    title_input_hint: "您可以输入此折扣代码的标题",
    description_input: "描述",
    description_input_hint: "写下这个折扣码的描述",

    currency_input_message: "适用于该货币的优惠。",
    qualified_products: "符合条件的产品",
    qualified_products_message:
      "要符合条件，购物车中商品总数必须大于或等于最低数量。",
    min_items: "最低商品数量",
    min_items_message: "客户必须购买的商品数量",
    offered_products: "优惠产品",
    offered_products_message: "购物车中至少要包含这些商品之一。",
    discount_percent: "折扣百分比",
    discount_percent_message: "这些商品的折扣百分比。",
    discount_percent_hint: "折扣百分比金额",

    per_order: "每个订单的最大使用次数",
    per_order_message:
      "优惠在一个订单中最多可使用的次数",

    count_input: "数量",
    count_input_hint: "优惠的最大使用次数",

    min_purchase: "最低购买金额",
    min_purchase_hint:
      "购买金额必须大于或等于此值",
    limitation: "使用限制",

    date_start_input: "开始时间",
    date_start_input_placeholder: "选择优惠开始时间",
    date_end_input: "结束时间",
    date_end_input_placeholder: "选择优惠结束时间",
    max_actives_is_3: "您最多只能同时启用三个优惠。",
    enable: "自动应用",

    notifications: {
      add: "新优惠创建成功。",
      edit: "优惠已更新成功。",
    },
    config: {
      subtitle:
        "开始制定一个智能优惠，设置标题、描述和公开可用状态。",
    },
    limit: {
      subtitle: "在此部分设置此优惠的最大使用次数。",
    },
    duration: {
      subtitle:
        "如果您希望为优惠设置特定的有效期，可以在这里配置时长。",
    },
    constraints: {
      subtitle:
        "在这里设置优惠的使用条件和资格。优惠仅适用于符合条件的购物车商品。",
    },
    discounted_products: {
      title: "打折产品",
      subtitle:
        "您可以指定此优惠所应用的折扣的产品。",
    },
    cluster: {
      subtitle:
        "通过将优惠与集群关联，您可以在一个位置轻松管理它和其他资源。",
    },
  },

  /** {@see BPageCampaignAds} **/
  campaign_ads: {
    menu: {
      banner: "横幅广告",
      reportage: "报道",
      social: "社交媒体",
      offline: "线下推广",
    },
  },

  /** {@see BPageShopMarketingEmail} **/
  emails: {
    title: "电子邮件营销",
    subtitle:
      "轻松拖放设计电子邮件，安排和发起活动以提升客户留存，在一个方便的位置访问可靠且准确的数据。",
    cation_message:
      "⚠ 请先连接您的邮件服务提供商，以便使用您的自定义域名发送邮件。",

    subject: "主体",
    from: "发件人",
    in_que: "等待中",
    schedule_at: "计划发送时间",
    sent: "已发送",
    sends: "发送次数",
    delivers: "送达次数",
    views: "浏览次数",
    clicks: "点击次数",
    buys: "购买次数",
    new_email: "添加新邮件",
    new_email_message: "创建和安排新的营销电子邮件",
  },

  /** {@see BPageEmailMarketingDashboard} **/
  email_dashboard: {
    review: "审核",
    waiting_for_approve: "等待 {name} 确认",
    approved_by: "由 {name} 验证并发送。",
    not_submitted_send_request:
      "您尚未提交发送此电子邮件的请求。",
    reviewed_by: "已由 {name} 审核",
    status: "电子邮件状态",
    conversion: "转化率",

    sell_performance: "销售表现",
    total_buys: "总销售次数",
    amount_buy: "总销售金额",
    average_sell: "平均销售额",
    sessions: "会话数",
    overview: "概览",
    purchase_amount: "购买金额",
    actions: "用户行为",
  },

  /** {@see BPageEmailMarketing} **/
  email_page: {
    emails: "电子邮件",
    edit: "编辑",
  },
  /** {@see BPageAffiliator} **/
  affiliate_page: {
    affiliates: "联盟推广合作伙伴",
    orders: "订单",
    payments: "付款",
  },

  /** {@see BPageAffiliateDashboard**/
  affiliate_dashboard: {
    link: {
      title: "联盟 链接",
      subtitle:
        "项目 项目 项目 链接 项目 项目 联盟 项目 到 项目 销售额 项目 佣金. 项目 项目 项目 '{code}' 到 项目 链接 项目 项目 项目 自定义 专用 域名 项目 项目 联盟. 项目 项目 项目 项目 项目 项目 项目 项目 48项目.",
    },
    fix_commission: "固定佣金",
    percent_commission: "基于百分比的佣金",
    last_payment: "最后一次付款",
    balance: "余额",
    total_payment: "总付款金额",
    status: "联盟合作伙伴状态和限制",
    available_for: "适用于",
    orders_count: "订单数量",
    orders_accepted: "已接受的订单",
    finance: "财务报告",

    amount_accepted: "已接受金额",
    amount_paid: "已支付的金额",
    sessions: "会话数",
    affiliate_payment: "联盟合作伙伴付款",
    amount_payment: "支付金额",
    amount_payment_hint: "确切的交易金额",
    i_paid: "我已经向 {name} 支付了 {amount} {currency}",
    pay_now: "立即付款",
  },

  /** {@see BPageShopPermissionRoles**/
  permission_roles: {
    new_role: "添加新角色",
    new_role_message: "让团队合作更轻松。",
    new_role_action: "添加新角色",
  },
  /** {@see Affiliate**/
  user_affiliates: {},
  /** {@see BPageShopIncentivesLottery**/
  shop_lotteries: {
    title: "抽奖（有奖游戏）",
    sub_title:
      "您的客户可以参与游戏并赢取奖品。客户每次游戏需消耗10个筹码。例如，如果您希望客户有机会赢取1000美元，可以将每个筹码价格设置为100美元。筹码价格为0时，买家每次购买可获得一个筹码。",
    manually_send_chip: "您要手动将筹码发送给用户吗？",
    manual_send_token_action: "手动发放筹码",
    lottery_enable: "是否启用抽奖？",
    chip_price_input: "筹码价格",
    zero_chip_message: "每个订单赠送 1x 筹码",
    chip_has_price_message: "每 消费 {amount} {currency} 订单赠送 1 个筹码。",
    chip_disabled_message: "筹码功能被禁用！",
    create_new: "添加新奖品",
    delete_alert: {
      title: "删除奖品",
      message: "您确定要永久删除此奖品吗？",
      action: "是的，立即删除",
    },
    notifications: {
      delete_success: "奖品删除成功。",
    },

    config: {
      subtitle:
        "通过游戏化体验提升客户购买力。设置奖品和中奖概率，客户通过购买获得筹码。每次游戏消耗10个筹码，您还可以为首次购买者提供特别奖品。默认游戏为幸运转盘，但您可以自定义以适应您的店铺布局。",
    },
    empty_prize_list: "在此创建和管理奖品...",
  },

  /** {@see BLotteryAdd**/
  lottery_edit: {
    title_edit: "编辑抽奖项目",
    title_add: "新增抽奖项目",
    general_config: "基本配置",
    design_style: "样式与外观",
    enable_message: "转盘最多可包含14个奖品。",
    title_input: "标题",
    title_input_hint: "写一个简短的标题。",
    description_input: "描述",
    description_input_hint: "写一个关于该奖品的描述。",
    quantity: "数量",
    quantity_message: "可用奖品总数",
    image: "图片",
    image_placeholder: "为奖品选择图像",
    chance: "中奖概率",
    chance_message: "中奖概率（百分比）",
    free_for_first: "是否对新客户免费？",
    free_for_first_message: "新客户可以免费获得此奖品。",
    not_free_for_first_message: "首次免费游戏不提供此奖品。",

    amount: "奖品金额",
    amount_hint: "用户中奖后订单可抵扣金额。",
    currency_message:
      "此奖品使用的货币，其他货币按汇率换算。",
    discount: "折扣",
    discount_message: "客户订单的折扣百分比",
    discount_limit: "折扣上限",
    discount_limit_hint: "客户可享受的最大折扣金额。",
    color: "颜色",
    condition: "条件",

    notifications: {
      add: "新抽奖奖品创建成功。",
      edit: "抽奖奖品更改成功。",
    },
    config: {
      subtitle:
        "您可以在此处创建商店的抽奖奖品。设置每个奖品的标题、描述、颜色和图片。",
    },
    design: {
      subtitle:
        "在这里，您可以为奖品选择图片和颜色。",
    },
    constraints: {
      subtitle: "指定赢得此奖品的条件和限制。",
    },
    prize: {
      title: "奖品",
      subtitle:
        "在此设置奖品详情。选项包括折扣代码、礼品卡、积分和其他折扣作为抽奖奖励。",
    },
    product_input: {
      label: "产品奖品",
      message: "选择一件产品作为奖品（免费）",
    },
  },

  /** {@see BGiftcardTypeInput**/
  gift_card_types_list: {
    label: "礼品卡类型",
    message: "从列表中选择礼品卡类型。",
  },

  /** {@see BEmailMarketingEditor**/
  email_builder: {
    service_unavailable: "您的账户中邮件服务器未激活。",
    design_section: "您的电子邮件设计模板",
    schedule_switch: "安排发送邮件？",
    schedule_placeholder: "选择发送电子邮件的时间",
  },

  /** {@see BCustomersFunnel**/
  user_funnel: {
    REGISTER_DATE: {
      title: "注册日期",
      description: "按用户注册日期筛选。",
    },
    LAST_BUY_DATE: {
      title: "最后购买",
      description: "最后购买日期。",
    },
    LOGIN_DATE: {
      title: "登录日期",
      description: "上次登录日期。",
    },
    LEVEL: {
      title: "客户俱乐部",
      description: "客户俱乐部会员。",
    },
    SUBSCRIBED: {
      title: "已订阅",
      description: "已订阅接收邮件。",
    },
    NOT_PURCHASED: {
      title: "未购买",
      description: "至今未购买的客户。",
    },
    SEX: {
      title: "性别",
      description: "用户性别。",
    },
    LOCATION: {
      title: "位置",
      description: "用户位置。",
    },

    LIMIT: {
      title: "限制",
      description: "设置用户最大数量限制。",
    },

    SEGMENTS: {
      title: "细分市场",
      description: "限制特定手动分组内的客户。",
    },
  },

  /** {@see InlineHelp**/
  inline_help: {
    helps_title: "服务使用指南",
    blogs_title: "项目 内容 项目 Selldone 博客",
  },

  /** {@see BPageShopFinanceTax**/
  shop_tax: {
    region: "地区",
    label: "标签",
    country_tax: "国家税率",
    customer_tax: "客户增值税VAT",
    business_tax: "企业增值税VAT",
    shipping: "运费",
    override: "覆盖",
    country: "国家",
    vat_range: "增值税范围",
    custom: "自定义",
    regions: "地区",
    rest_world: "世界其他地区",
    overrides: "覆盖",
    dialog_set_title: "税务设置",

    tax_setting: "税务设置",
    vat: "VAT增值税",

    calculate_tax_input: "自动计算税费",
    calculate_tax_message:
      "启用此选项后，增值税将自动计算并应用于您的订单。",

    tax_number: "税号",
    tax_number_message:
      "请输入您的税号。此注册号将记录在买家的发票中。",

    tax_included_in_price_input: "产品价格含税",
    tax_included_in_price_message:
      "如果您在产品价格中包含税额，请选择此选项。税额将使用以下公式计算：",
    tax_included_in_price_formula:
      "税额=（价格*增值税）/（1+增值税），例如，价格为100美元、增值税率为10%的产品的税额为9.09美元。",

    tax_exclude_title: "排除|结帐时将添加税费",
    tax_excluded_message:
      "税费将在结账时在付款前计算，并根据您的客户证据添加到不含税价格中。",

    tax_on_shipping_input: "对运费征税",
    tax_on_shipping_message:
      "选择此项则税费将应用于运费。",

    fixed_tax_rate: "固定税率",
    dynamic_tax_rate: "按地区计税",

    locations_tip:
      "上方列表仅显示您在店铺设置 > 地点 中选择的销售国家。",
    locations_action: "店铺位置设置",

    save_alert: "设置未保存！",

    pos_tax_setting: "POS 税务设置",
  },

  /** {@see BPageTransportation**/
  transportation_page: {
    menu: {
      dashboard: "仪表盘",
      transportations: "运输方式",
      orders: "订单",
      setting: "设置",
      delivery_services: "配送服务",
      delivery_persons: "快递公司",
    },

    go_to_courier_list: "查看快递列表",
    go_to_service_list: "查看运输服务列表",
  },

  /** {@see BPageTransportationCouriers**/
  transportation_persons: {
    title: "快递公司",
    notifications: {
      success_add: "已添加快递公司。",
      success_reset: "已重置统计数据。",
      success_remove: "已成功移除快递公司。",
      success_update: "已成功更新快递公司信息。",
    },
    reset: {
      title: "重置统计数据",
      message: "您确定要重置此快递公司的统计数据吗？",
      action: "是的，立即重置",
    },
    remove: {
      title: "移除快递公司",
      message: "您确定要删除此快递公司吗？",
      action: "是的，立即移除",
    },
    add_dialog: {
      title: "添加新快递公司",
      action: "加快递公司",
    },
  },
  /** {@see BPageTransportationOrders**/
  transportation_orders: {
    title: "运输订单",
    notifications: {
      success_update: "发货状态更新成功。",
      success_payment: "货到付款确认成功。",
    },
  },
  /** {@see BPageCourier**/
  delivery_person: {
    actions_title: "快递设置",
    action_delivered: "已发货",
    action_paid: "货到付款已支付",
    action_returned: "已退货",
    cod_confirm_action: "确认货到付款",
    pickup_dialog: {
      title: "您是此包裹的快递公司吗？",
      message:
        "如果您负责运输此包裹，请选择“是”。否则，请选择“否”。",
    },
    status_dialog: {
      title: "将状态更改为 {status}",
      message: "您确定将配送状态更改为 {status} 吗？",
      action: "是的，我确认！",
    },
    cod_dialog: {
      title: "货到付款",
      message:
        "您是否确认已收到买家的订单金额？",
      action: "是的，我确认！",
    },
  },

  /** {@see BPageTransportationServices**/
  transportation_services: {
    title: "配送服务",
    notifications: {
      success_add: "已添加配送服务。",
      success_reset: "已重置统计数据。",
      success_remove: "已成功删除该服务。",
      success_update: "已成功更新该服务。",
    },
    reset: {
      title: "重置统计数据",
      message: "您确定要重置该服务的统计数据吗？",
      action: "是的，立即重置",
    },
    remove: {
      title: "删除配送服务",
      message: "您确定要删除此服务吗？",
      action: "是的，立即移除",
    },
    add_dialog: {
      title: "添加新的配送服务",
      action: "添加服务",
    },
  },
  /** {@see BPageTransportationPickups**/
  transportation_pickups: {
    addresses: {
      title: "取货地址",
      subtitle:
        "在此处添加和编辑取货地址。用户将能够在结帐页面上选择取货地址。",
      add_action: "添加新位置",
    },
  },

  /** {@see DeliveryReceiptWidget**/
  delivery_receipt: {
    title: "配送收据",
    has_return: "退货配送",
    cashed: "现金支付",
  },
  /** {@see BPageTransportationServiceDashboard**/
  delivery_dashboard: {
    select_destinations: "将订单添加到列表",
    price_calculation: "预估运费",
    price_calculation_action: "计算价格",
    add_request: "请求服务",
    add_request_action: "提交服务请求",
    refresh_action: "更新信息",
  },

  /** {@see DeliveryOrderWidget**/
  delivery_order: {
    title: "配送订单",
    has_return: "退货配送",
    cashed: "现金支付",
  },

  /** {@see BPagePos**/
  cash_register: {
    menu: {
      panel: "收银台",
      orders: "订单",
      customers: "顾客",
      devices: "设备",
      inventory: "库存",
    },
    payment_confirm: "付款确认",
    payment_confirm_msg: "客户已支付订单 {basket_id}。",
  },

  /** {@see BPosDeviceBarcodeScanner**/
  barcode_scanner: {
    wifi_pass: "项目 项目 密码",
    message: "项目 项目 项目 项目 密码 项目 项目 项目 QR 代码.",
    wifi_ssid: "无线网络SSID",
    ssid_message: "项目 项目 项目 项目 姓名 (SSID).",
  },

  /** {@see PosDeviceTypes**/
  pos_devices: {
    Scanner: "条码扫描器",
    Scanner_desc:
      "使用条码扫描器时，您可以在产品设置中正确输入产品的SKU代码。",
    Printer: "打印机",
    Printer_desc:
      "通过连接收据打印机为您的客户打印收据。",
    CustomerView: "客户显示屏",
    CustomerView_desc:
      "此页面使您能够向客户显示订单详细信息。",
    CardReader: "刷卡器",
    CardReader_desc: "供客户使用的货到付款刷卡设备。",
    ChipReader: "芯片读取器",
    ChipReader_desc: "使用NFC标签读取器，通过标签将商品添加到购物车。",
  },
  /** {@see BPagePosDevices**/
  pos_register_devices: {
    delete_dialog: {
      title: "删除设备",
      message: "您确定要从您的 POS 配置文件中删除此设备吗？",
      action: "是的，立即移除",
    },
  },

  /** {@see BPageOrderPos**/
  pos_process_center: {
    title: "POS订单处理中心",
    menu: {
      label: "包裹标签",
      receipt: "收据",
      back: "返回",
      timeline: "时间线",
      order: "订单",
    },
  },
  /** {@see BPagePosPanel**/
  pos: {
    name: "POS",
    message:
      "享受零配置成本的在线销售点系统，支持在智能手机、平板和电脑上运行，亦可手动创建订单。",
    add_customer: "添加客户",
    set_delivery: "设置收货地址",
    add_giftcards: "添加礼品卡",
    add_discount_code: "添加折扣码",
    add_coupon: "添加优惠券",
    set_campaign: "设置活动",
    select_buyer: "选择买家！",
    send_to_pos: "发送到刷卡机",
    print_receipt: "打印收据",
    confirm_cash_payment: "确认现金支付",
    payment_cod: {
      title: "货到付款",
      message:
        "该订单款项将在送货时支付。收到买家付款后，您可以确认付款，以完成系统中的订单。",
    },
    payment_online: {
      title: "选择在线支付方式",
      message:
        "选择以下选项后，将生成支付链接并发送给买家。买家通过该链接付款后，订单状态将变为已付款。支付链接可通过扫描客户屏幕上的二维码、短信或电子邮件生成。要启用任何渠道发送链接，点击该选项，然后按按钮发送收据给买家。",
    },
    notifications: {
      success_pay: "订单付款完成。",
      success_order:
        "订单创建成功，等待客户付款。",
    },
    payment_dialog: {
      check_pay_now: "手动检查付款",
      close_action: "关闭对话框。我不想等待客户付款",
      go_to_order: "前往订单页面",
      paid_by_gift_card_msg:
        "订单总金额已从礼品卡扣除！买家无需再付款。",
      cod_msg: "客户将在收货时付款。",
      online_msg: "请客户扫描客户屏幕上的二维码进行支付。",
    },
  },

  /** {@see BPageShopProductsImporter**/
  exporter: {
    title: "导出数据",
    subtitle:
      "您的数据属于您！您可以随时以标准格式下载您的业务信息。但是，请尊重您客户的隐私，不要向他们发送垃圾邮件，也不要与第三方共享他们的信息。",

    excel:
      "项目 项目 接收 项目 列表视图 项目 全部 项目 {type} 项目 项目 店铺 项目 项目 项目 项目 项目 项目 项目.",
    csv: "项目 项目 接收 项目 列表视图 项目 全部 项目 {type} 项目 项目 店铺 项目 项目 项目 项目 项目 CSV 项目. 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 Selldone 项目 项目 {type} 项目 项目 店铺.",
  },
  /** {@see BPageShopProductsImporter**/
  importer: {
    category: {
      title: "导入分类",
      subtitle:
        "在此处上传类别的 CSV 文件。确保遵循标准格式。",
    },
    product: {
      title: "导入产品",
      subtitle:
        "在此处上传产品的 CSV 文件。确保遵循标准格式。",
    },
    product_images: {
      title: "导入图片",
      subtitle:
        "导入图片信息较为耗时。导入时请遵守版权法律。导入失败的图片将在7天后自动从列表中删除。",
    },
    inventory: {
      title: "批量更新库存",
      subtitle:
        "在此处上传库存的 CSV 文件。确保遵循标准格式，首先导出 CSV 文件，然后编辑该文件。",
    },

    back_to_products: "返回产品列表",
    back_to_categories: "返回分类列表",
    back_to_inventory: "返回库存列表",

    step_select_file: "选择 CSV 文件",
    step_send_to_server: "发送到服务器",
    step_view_result: "查看结果",
    step_view_que: "查看等待列表",
    send_to_server_action: "发送到服务器",

    shop_license: "店铺许可证",
    max_items_limit: "最大商品数量限制",
    total_items: "商品总数",

    /** {@see BShopCustomerImporter**/
    customer: {
      title: "导入客户",
      subtitle:
        "在此处上传客户的 CSV 文件。确保您遵循标准格式，并且您必须遵守隐私规则。",
    },

    /**
     * @see BVendorsImporter
     */
    vendor: {
      title: "导入 项目",
      subtitle:
        "项目 项目 CSV 项目 项目. 项目 项目 项目 项目 项目 项目 项目 到 隐私政策 项目.",
      checklist: {
        title: "项目 项目",
        subtitle: "项目 项目 到 项目 项目 项目.",
        sample_files: "项目 项目",
        valid_vendor_name_needed:
          "项目 项目 项目 项目 <b>项目 姓名</b>. 项目 <b>姓名</b> 项目 已使用 到 项目 项目 到 <i>创建</i> 项目 新建 项目 项目 <i>更新</i> 项目 项目 项目.",
        assign_user_after_import:
          "项目 项目 项目, 项目 项目 手动添加 项目 项目 用户 到 项目 项目 访问权限 到 项目 项目 项目.",
      },
      need_kyc_alert:
        "项目 项目 到 项目 项目 个人的 项目 项目 项目 项目.",
      back_to_vendors_list: "返回 到 项目 列表视图",
    },
  },

  /**
   * @see BPageMarketplaceProducts
   */
  marketplace_products: {
    title: "项目 产品",
    subtitle:
      "项目 项目 项目 全部 产品 项目 项目 项目. 项目 项目 商城模式, 项目 产品 项目 项目 项目 到 项目 项目 更多的 项目. 项目 项目 项目 项目 项目 产品 项目 项目 项目 项目 项目 包括 库存 项目 定价 许可证详情 项目 到 项目 项目.",
    filter_vendor: {
      placeholder: "筛选 项目 项目...",
    },
    filter_status: {
      placeholder: "筛选 项目 状态...",
    },
  },

  /**
   * @see BPageMarketplaceRequests
   */
  marketplace_requests: {
    open_vendors_panel: "项目 项目 项目",
    title: "项目 项目 列表视图",
    subtitle:
      "项目 项目 项目 列表视图 项目 请求 从 项目 项目 项目 项目 到 项目 项目 项目 项目 商城模式.",
  },
  /**
   * @see BPageMarketplaceSetting
   */
  marketplace_setting: {
    marketplace: {
      title: "商城模式",
      subtitle:
        "项目 项目 商城模式 项目 项目 项目 项目 项目. 项目 项目 项目 到 项目 项目 项目 项目 商城模式, 项目 项目 禁用 项目 店铺 项目 项目 编辑.",
    },
    distribution_model: {
      title: "项目 项目",
      subtitle:
        "项目 项目 项目 项目 项目 项目 项目. 项目 项目 项目 项目 到 项目 个 项目 到 项目 项目 项目 订单 项目 项目 仓库 项目 发货中, 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目.",
    },
    access: {
      title: "项目 访问权限",
      subtitle:
        "项目 项目 项目, 项目 项目 项目 项目 项目 访问权限 项目 项目 到 项目 产品 仪表盘. 项目 项目 访问权限 编辑 到 项目 项目 到 项目 项目 项目 产品 项目 子类别 项目 项目 项目 访问权限 到 项目 项目.",
    },
    need_enable_shipping_for_vendors_tips:
      "启用 发货中 项目 项目 项目 项目 店铺 > 物流 项目 项目 项目 项目 项目.",
    transportation_available_tooltip: "项目 项目 项目 有库存的 项目 项目.",
    transportation_not_available_tooltip:
      "项目 有库存的 项目 项目! 项目 项目 启用 项目 项目 项目 项目 编辑.",
    panel: {
      title: "项目 项目",
      subtitle: "项目 项目 项目 项目 项目 自定义 域名.",
    },
    documents: {
      title: "文件",
      subtitle:
        "项目 项目 项目 项目 项目 到 项目 文件 项目 项目 项目 项目. 项目 项目 项目 文件 项目.",
      add_document_action: "项目 项目 项目",
    },
    inputs: {
      enable: {
        false_description:
          "项目 商城模式 项目 项目 项目, 项目 全部 商城模式 项目.",
        true_description:
          "项目 商城模式 项目 已启用的, 项目 全部 商城模式 项目.",
      },
      product: {
        label: "添加新产品",
        true_title: "项目 项目 项目 产品",
        false_description:
          "项目 项目 产品 项目 项目 项目. 项目 项目 项目 项目 价格 项目 库存.",
        true_description:
          "项目 项目 项目 项目 项目 项目 项目 产品 项目 项目 项目 项目 项目.",
      },
      need_verify: {
        label: "产品 项目 流程",
        false_description: "新建 项目 产品 项目 正式环境 项目.",
        false_title: "无服务 项目 项目",
        true_description:
          "项目 新建 产品 项目 项目 项目 项目 正式环境 项目 项目 商城模式.",
        true_title: "项目 项目",
      },
      category: {
        label: "项目 新建 类别",
        true_title: "项目 项目 项目 子类别",
        false_description:
          "项目 项目 子类别. 项目 项目 项目 项目 产品 到 项目 子类别.",
        true_description:
          "项目 项目 项目 项目 项目 子类别 项目 项目 项目 项目 项目.",
      },
      shipping: {
        label: "发货中 选项",
        true_title: "项目 项目 发货中 选项",
        false_description:
          "项目 项目 项目 项目 项目 项目 发货中 项目.",
        true_description:
          "项目 项目 项目 项目 项目 项目 发货中 项目, 项目 快递公司, 项目 项目 发货中 项目 项目 项目.",
      },
      hidden_customer: {
        label: "项目 项目 联系方式 项目",
        true_description: "项目 联系方式 许可证详情 项目 项目 从 项目.",
        false_description:
          "项目 联系方式 许可证详情, 项目 项目 项目 项目 电子邮件, 项目 项目 到 项目.",
      },
      multi: {
        false_description:
          "项目 用户 项目 项目 项目 项目 项目 账户. 用户数 项目 项目 项目 到 项目 项目 项目 /项目.",
        true_description:
          "项目 用户 项目 项目 项目 项目 账户. 项目 项目 项目 项目 项目; 项目 联系方式 项目 项目 项目 项目.",
        true_title: "项目 项目",
        false_title: "项目 项目 项目 (默认)",
      },

      listing: {
        label: "项目 项目 项目",
        true_description: "项目 项目 项目 项目 项目. 项目 项目 项目 项目 个 项目 公司.",
        false_description: "项目 项目 项目 项目 项目. 项目 项目 店铺 所有者 项目 项目 项目 个 项目 公司.",
        requires_listing_active_text:
          "到 项目 项目 项目 项目 (个 + 公司), 项目 启用 项目 店铺 项目 项目 项目 渠道 → 项目. 项目 项目 返回 项目 到 项目 项目 访问权限.",
        requires_listing_active_button: "项目 渠道 项目 编辑",
      },



    },
    notifications: {
      update_success: "项目 编辑 项目 项目.",
    },
    add_document_dialog: {
      title: "项目 项目",
      type: {
        title: "文件类型",
        subtitle:
          "项目 项目 项目 项目 产品 项目. 项目 项目 项目 项目 项目 项目 项目, 项目 项目 到 项目 项目 项目 项目.",
      },
      guide: {
        title: "指南",
        subtitle:
          "项目 项目 项目 指南 到 项目 项目 项目 项目 文件 到 项目 项目 项目 到 项目 项目 项目.",
      },
      code: {
        title: "嵌入 代码",
        subtitle:
          "项目 项目 嵌入 代码 项目 项目 项目, 项目, 项目 项目 项目 项目 项目 项目 项目.",
      },
      link: {
        title: "项目 链接",
        subtitle:
          "项目 项目 项目 链接 到 项目 项目 项目 项目 项目 项目 项目 项目 项目.",
      },
      inputs: {
        title: {
          label: "标题",
          placeholder: "项目 项目 标题 项目 项目 项目 项目.",
        },
        guide: {
          label: "指南 (项目)",
          placeholder:
            "项目, 项目 项目 项目 指南 项目 项目, 项目 链接 到 项目 项目 其他 文件.",
        },
        code: {
          label: "嵌入 代码",
          placeholder: "项目 项目 嵌入 代码 项目...",
          message: "项目 项目 HTML 代码.",
        },
        url: {
          label: "URL",
          message: "项目 项目 URL 项目 项目 项目 项目 项目 项目...",
        },
      },
    },
  },

  /**
   * @see ShopMarketplaceModes
   */
  ShopMarketplaceModes: {
    Collective: {
      title: "项目 项目",
      description:
        "项目 项目 项目, 全部 订单 项目 已发送 到 项目 仓库 项目 项目 项目 已发货 到 顾客 从 项目 项目 位置. 项目 项目 已发送 项目 个 到 项目 仓库, 项目 项目 发货中 地址 项目 项目 项目 项目 项目 仓库 地址.",
    },
    Direct: {
      title: "项目 发货中 从 项目",
      description:
        "项目 项目 项目, 项目 项目 订单 项目 到 顾客. 项目 发货中 地址 项目 项目 订单 项目 项目 项目 项目 地址.",
    },
  },
  /**
   * @see VendorDocumentType
   */
  VendorDocumentType: {
    Identification: {
      title: "所有者 项目 项目",
      description:
        "项目 项目 项目 ID 到 项目 项目 身份认证(KYC) 项目 项目 企业 所有者 项目 项目 项目.",
    },
    Business: {
      title: "企业 项目",
      description:
        "项目 项目 企业 文件 项目 项目 项目 项目 项目 项目 到 项目 项目 项目 状态 项目 项目 企业.",
    },
    Address: {
      title: "地址 项目",
      description:
        "项目 项目 项目 到 项目 项目 企业 地址, 项目 项目 项目 项目 项目, TAX 发票, 项目 项目 项目.",
    },
    Contract: {
      title: "项目 & 项目",
      description:
        "项目 项目 项目 项目 项目 项目 项目 使用条款 项目 条件 项目 项目 企业 项目.",
    },
    Copyright: {
      title: "项目 项目",
      description:
        "项目 项目 项目 文件 到 项目 项目 项目 项目 项目.",
    },
    Privacy: {
      title: "隐私政策 项目 文件",
      description:
        "项目 项目 隐私政策 项目 文件 到 项目 项目 项目 到 项目 用户 项目 项目 项目.",
    },
    Embed: {
      title: "项目 项目",
      description:
        "项目 项目 项目 项目 到 项目 项目 项目 项目.",
    },
    Link: {
      title: "项目 链接",
      description:
        "项目 项目 项目 链接 到 项目 项目 项目 项目.",
    },
  },

  /**
   * @see BPageMarketplaceWallets
   */
  marketplace_wallets: {
    title: "供应商钱包",
    subtitle:
      "无服务 项目 到 手动添加 项目 钱包! 项目 钱包 项目 项目 项目. 项目 项目 启用 项目 支付 项目 项目 项目 项目 付款 (喜欢 Stripe 项目), 项目 项目 项目 项目 项目 付款 到 项目 已连接 项目 账户. 项目 项目 项目 项目 项目 项目, 项目 项目 到 手动添加 支付 项目, 项目 项目 项目 项目 项目 项目 项目 到 项目 项目 项目 钱包 列表视图.",
    filter_vendor: {
      placeholder: "筛选 项目 项目...",
    },
  },

  /**
   * @see BVendorAccountTransactionsList
   */
  vendor_account_transactions: {
    subtitle:
      "项目 项目 项目 项目 项目 列表视图 项目 全部 交易 项目 项目 项目 钱包. 项目 抵扣金额 交易 项目 项目 项目 项目 项目 项目 项目 项目 项目 订单. 项目 项目 订单 项目 项目 项目 项目 项目, 项目 项目 项目 交易 项目 项目 项目 项目 项目.",
    vendor_bank: "项目 银行",
    order_fee: "订单 费用",
    order_refund: "订单 项目",
    reverse_fund: "项目 项目",
    payout: "项目",
  },

  /**
   * @see BPageMarketplacePayouts
   */
  marketplace_payouts: {
    title: "项目 历史",
    subtitle:
      "项目 项目 项目 财务 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 全部 交易. 付款 项目 项目 项目 手动添加 项目 银行 项目 项目 其他 项目, 项目 项目 项目 项目 支付 服务商 项目 支持 项目 付款, 喜欢 Stripe.",
    top_up_vendor_action: "项目 项目 项目 账户",
  },

  /**
   * @see BPageMarketplacePricings
   */
  marketplace_pricings: {
    title: "定价计划",
    subtitle:
      "项目 项目 定价 项目 项目 项目 商城模式, 喜欢 项目 5% 项目 费用 项目 项目 产品. 项目 项目 定价 项目 项目 项目 更多的 项目.",
    add_pricing_action: "项目 定价 计划",
  },

  /**
   * @see BVendorPricingAdd
   */
  vendor_pricing_add: {
    title: "商城模式 定价 项目",
    subtitle:
      "项目 项目 项目 项目 定价 项目 到 项目 产品, 项目 价格 项目 项目 项目 项目 项目 项目 价格 * (1 + 佣金%).",
    delete: {
      subtitle:
        "项目 项目 定价 项目 项目 项目 全部 项目 产品 项目 到 项目. 项目 项目 项目 定价 项目, 项目 项目 到 更新 全部 项目 产品 项目 项目 项目 项目 项目 项目 项目 定价 项目.",
      remove_pricing_action: "移除 定价 项目",
    },
    inputs: {
      title: {
        placeholder: "项目.项目., 项目 产品 项目...",
      },
      description: {
        placeholder: "项目 项目 项目 项目 备注 项目...",
      },
      accept_delete: {
        true_description: "项目 项目 到 删除 项目 定价 项目.",
        true_title: "项目 定价 项目 项目",
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
        "项目 项目 项目 项目 项目 到 转账 项目 到. 项目 项目, 有库存的 支付 选项 项目 项目 项目. 项目 项目 项目 项目 支付 支付网关, 项目 选项 项目 项目 项目 项目.",
    },
    vendor_wallet: "项目 钱包",
    vendor_bank_account: "项目 银行 账户",
    with_balance_tooltip:
      "项目 项目 项目 项目 配送服务 喜欢 Stripe 项目, 项目 项目 项目 项目 项目 有库存的 余额 项目 项目 Stripe 账户 项目 项目.",
    with_balance: "项目 余额",
    without_balance: "项目 余额 - 项目 项目",
    bank_transfer: {
      title: "银行 转账",
      subtitle:
        "项目 项目 项目 项目 项目 支付 历史. 无服务 项目 项目 项目 项目 项目 到 项目 项目 项目 项目 项目; 项目 项目 手动添加 支付 项目 项目.",
    },
    vendor_bank: "项目 银行",
    gateway_in_debug_mode_warning:
      "项目 项目 支付 网关 项目 项目 项目 项目 项目, 项目 项目 项目 项目 项目 到 项目 项目 账户.",
    payment: {
      title: "支付",
      subtitle:
        "项目 项目 货币 项目 项目 项目 金额 项目 项目 到 转账 到 项目 项目. 项目 项目 项目 项目 项目 金额, 项目 项目 项目 项目 项目 从 项目 项目 钱包. 项目 已连接 账户 项目 项目 选项, 项目 项目 项目 项目 项目 从 项目 已连接 账户, 项目 项目 项目 项目 Stripe 账户.",
    },
    history: {
      title: "历史",
      subtitle:
        "项目 项目 项目 支付 项目 项目 项目 项目 项目 项目 转账, 项目 项目 余额 项目 项目 项目 从 项目 项目 账户 项目 退货 到 项目 账户.",
    },
    refund: {
      title: "项目",
      subtitle:
        "项目 项目 金额 项目 项目 项目 从 项目 项目 余额. 全部 付款 (项目 项目 项目) 项目 项目 项目 账户 (喜欢 Stripe 项目) 项目 项目 项目 项目 项目 项目 转账.",
    },
    inputs: {
      vendor: {
        placeholder: "项目 项目 项目...",
      },
      note: {
        placeholder:
          "项目 项目 项目 项目 备注 项目... 项目 备注 项目 项目 项目 到 项目 项目.",
      },
      accept_refund: {
        true_description: "项目 项目 到 取消 项目 支付.",
        true_title: "取消 & 项目 支付",
      },
    },
    notifications: {
      reverse_fund_success: {
        title: "项目 项目",
        message:
          "项目 项目 项目 项目 项目 项目 已完成 项目, 项目 项目 项目 从 项目 银行 到 项目 钱包 项目 项目 到 项目 钱包 余额.",
      },
      payout_success: {
        title: "项目",
        message:
          "项目 项目 项目 项目 项目 项目 项目 项目 项目.",
      },
    },
  },

  /**
   * @see BShopQuotaImporter
   */
  quota_importer: {
    quota: "项目",
    max_batch_msg: "项目 项目 项目 个 项目 项目 导入 项目 项目 项目 项目.",
    max_daily_limit_msg: "项目 项目 项目 个 项目 项目 导入 项目 项目 项目.",
    extra_daily_limit_msg: "项目 个 项目 项目 项目 项目 限制.",
    add_items_today_msg: "个 项目 今天.",
    file_statistic_msg: "统计数据 项目 项目 项目.",
    used_quota: "已使用 项目",
  },

  /** {@see BPageShopMarketingCampaign**/
  campaigns: {
    title: "营销活动",
    subtitle:
      "创建营销活动和可追踪链接，一处查看可靠且准确的信息。我们帮助您做出更好的数据驱动决策。",
    add_action: "新增营销活动",
    empty_message: "立即创建您的第一个营销活动！",
    delete: {
      title: "删除营销活动",
      message: "您确定要删除此营销活动及其所有数据吗？",
      action: "是的，立即删除",
    },
  },

  landing_categories: {
    raw: "原始模板",
    all: "所有模板",

    marketing: "营销与广告",
    product: "产品介绍",
    health: "健康与健身",
    food: "食品和水果",
    house: "房地产和房屋",
    device: "机器和设备",
    car: "汽车",
    software: "软件",
    clothing: "服装与鞋类",
    jewellery: "珠宝",
  },

  /** {@see BPageShopSettingTheme**/
  shop_theme: {
    theme_colors: "主题颜色",
    theme_colors_description:
      "项目 项目 项目 项目 主域名 颜色 项目 项目 项目 店铺 项目. 项目 模板 项目 项目 项目 项目 到 项目 项目 项目 项目 颜色 项目 项目 项目 项目 项目 品牌.",
    products_view_mode: "商品列表视图",
    products_view_mode_desc:
      "您可以根据屏幕尺寸调整店铺中商品的显示模式。此模式为默认模式，用户手动更改显示模式时则不会应用。",

    tabs: {
      vendor_page: "项目 项目",
    },

    color_light: "主色",
    color_dark: "主暗色",
    color_deep_dark: "深暗色",
    color_info: "链接",
    light_checkout: "结账主题",
    light_header: "页眉主题",
    light_footer: "页脚主题",
    light_filter: "分类筛选主题",
    checkout_color: "结账 颜色",

    typography: "排版",
    header: "标题",
    footer: "项目",
    custom_code: "自定义代码",
    custom_css: "自定义 CSS",
    custom_variants: "变体",

    wrap_product_title: {
      title: "项目 标题",
      subtitle: "项目 高度 项目 项目 标题 项目 项目 项目.",
    },

    animation: {
      title: "项目",
      static: {
        false_title: "项目 项目",
        false_description:
          "子类别 项目 产品 项目 项目 项目 项目 到 项目 项目 项目.",
        true_title: "静态页面",
        true_description: "子类别 项目 产品 项目 无服务 项目.",
      },
    },

    quick_actions: {
      title: "项目 操作",
      hover: {
        false_description:
          "简单的 项目 最小 项目 项目 项目 项目 操作 项目 产品 卡片列表.",
        true_description:
          "项目 项目 买 & 项目 到 项目 项目 项目 产品 卡片 项目.",
        true_title: "项目 操作 项目 项目",
      },
    },
    filter_products: {
      title: "筛选 产品",
      only_available: {
        false_description: "项目 全部 产品 项目 项目 店铺 列表视图 项目 默认.",
        true_description:
          "项目 项目 有库存的 产品 项目 项目 店铺 列表视图 项目 默认.",
        true_title: "有库存的 产品",
        false_title: "全部 产品",
      },
    },
    filter_categories: {
      title: "筛选 子类别",
      hide_empty_folders: {
        false_description: "项目 全部 子类别 项目 项目 店铺 列表视图.",
        false_title: "项目 全部 子类别",
        true_title: "项目 项目 子类别",
        true_description:
          "项目 项目 子类别 项目 产品 项目 项目 店铺 列表视图.",
      },
    },

    product_page: {
      title: "产品 项目",
      subtitle:
        "项目 项目 产品 项目 项目. 项目 项目 项目 项目 项目 项目 价格 项目 项目 项目 项目 项目 项目 到 项目 项目 偏好设置.",
      buy_button_color: "买 项目 颜色",
      smart_price: {
        title: "项目 单位 价格",
        true_description:
          "项目 单位 价格 项目 项目 重量, 体积, 项目 项目 变体 项目. 项目. 项目 项目 项目 项目 项目 项目 2项目 项目 项目 $5 项目 价格, 项目 项目 项目 项目 项目 $2.5/项目 项目 项目 产品 项目.",
      },
      reverse_currency: {
        title: "货币 项目 位置",
        false_title: "正常模式",
        true_title: "项目 项目",
        false_description:
          "项目 货币 项目 项目 项目 项目 项目 项目 开始时间 项目 项目 项目. 项目: $95, €30",
        true_description:
          "项目 货币 项目 项目 项目 项目 项目 项目 结束时间 项目 项目 项目. 项目: 95$, 30€",
      },
      variants_selector: {
        title: "变体 项目",
        subtitle:
          "项目 项目 项目 项目 项目 到 项目 变体 项目 项目 产品 项目.",
      },

      tabs_order: {
        title: "项目 订单",
        reset_to_default: "重置为默认内容",
      },
    }, // end: product_page
  },

  /**
   * @see BShopThemeVendor
   */
  b_shop_theme_vendor: {
    onboarding: {
      title: "项目 & 登录",
      subtitle:
        "项目 项目 项目 项目 项目 登录 项目 项目 项目 自定义 视频, 图片, 项目 信息.",
    },
    inputs: {
      page_vendor_login: {
        label: "项目 登录 项目",
        message:
          "项目 项目 自定义 落地页 项目 项目 项目 登录. 项目 视频, 图片, 项目 项目 项目 项目 项目 设计. 项目 项目 项目 项目 到 项目 项目 项目 项目 项目 项目.",
      },
      page_vendor_registered: {
        label: "项目 已注册 项目",
        message:
          "项目 项目 自定义 项目 项目 项目 项目. 项目 项目 项目 项目 项目 项目 商城模式 项目 项目 项目 项目 用户.",
      },
    },
  },

  /** @see BShopOptionsVariants **/
  b_shop_options_variants: {
    custom_variants: {
      title: "自定义 变体",
      subtitle:
        "项目 产品 项目 项目 变体. 项目 项目 编辑 项目 默认 姓名 项目 变体. 项目 项目 项目 到 项目 项目 个 项目 默认 项目 项目 项目 项目 Selldone 项目 项目 项目 项目 项目 项目 顾客 项目 项目 项目. 项目 项目 长度 项目 24.",
    },
  },
  /** @see BShopThemeTypography **/
  b_shop_theme_typography: {
    main_font: {
      title: "项目 网站 项目",
      subtitle: "项目 项目 项目 项目 从 Google 项目.",
    },
    inputs: {
      font_family: {
        label: "项目 项目",
        message: "项目 项目 项目 值.",
      },
      font_res: {
        label: "项目 项目",
        message: "项目 项目 项目 项目.",
      },
    },
  },

  /** @see BShopThemeHeader **/
  b_shop_theme_header: {
    logo: {
      title: "标题 项目",
      subtitle:
        "项目 默认, 项目 项目 项目 项目 项目 项目 项目 标题, 项目 项目 项目 项目 项目 自定义 项目 项目. 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目, 项目 项目 项目 到 手动添加 项目 项目 高度 项目 宽度 项目 项目 项目.",
    },
    header_title: {
      title: "标题 标题",
      subtitle:
        "项目 项目 项目 项目 标题 项目 项目 项目 标题 项目 项目 页面 项目. 项目 项目 项目 到 项目 移除 项目, 项目 项目 项目 '项目 项目 项目 项目.",
    },

    inputs: {
      logo: {
        label: "品牌 项目",
      },
      height: {
        label: "项目 高度",
      },
      width: {
        label: "项目 宽度",
      },
      title: {
        label: "标题 标题",
        set_empty: "项目 项目 标题",
      },
    },
  },

  /** @see ShopThemeVariantsMode**/
  shop_theme_variants_mode: {
    smart: {
      title: "项目 项目",
      description:
        "项目 变体 项目 项目 项目 选项, 项目 项目 项目 项目.",
    },
    select: {
      title: "项目 项目",
      description:
        "项目 全部 变体 项目 项目 项目, 项目 项目 项目 项目 项目 项目 变体.",
    },
  },

  /** @see BPropertySetAdd**/
  property_set_add: {
    edit_title: "编辑 项目 项目",
    add_title: "项目 项目 项目",
    config: {
      subtitle:
        "项目 标题 项目 等级描述 项目 项目 项目 项目. 项目 项目 项目 项目 到 员工 项目.",
    },
    variants: {
      title: "变体",
      subtitle:
        "项目 项目 项目 项目 项目 姓名, 图标, 项目 订单 项目. 项目 项目 项目 项目 项目 项目 产品 项目 项目 变体 项目 项目’项目 项目 默认 6 变体, 项目 项目 项目 自定义 变体 项目 项目 产品 项目.",
    },

    inputs: {
      title: {
        placeholder: "项目 项目 标题 项目 项目 项目...",
      },
      description: {
        placeholder: "项目 项目 项目 等级描述... (项目)",
      },
      custom_variants: {
        true_title: "自定义 变体",
        false_title: "默认 变体",
        true_description: "项目 项目 产品 变体.",
        false_description: "项目 默认 项目 变体.",
      },
    },
  },

  /** @see BPropertySetVariantRow **/
  property_set_variant_row: {
    inputs: {
      values: {
        placeholder: "项目 项目 项目... (项目)",
        messages:
          "项目 项目 项目 项目 项目 项目 项目 项目 项目 订单.",
      },
    },
  },

  /** {@see AppTemplates**/
  app_templates: {
    default: "默认",
    blue: "蓝色海洋",
    amber: "琥珀色",
    green: "赤道绿",
    red: "吸血鬼红",
    magenta: "花色",
    master: "大师风",
    black: "黑暗面",
  },

  /** {@see BPageAffiliateOrders**/
  affiliate_orders: {
    title: "联盟合作伙伴订单",
    table: {
      order_price: "订单金额",
      order_payment: "订单付款状态",
      order_link: "订单链接",
      commission_status: "佣金状况",
      commission_amount: "佣金金额",
      items: "商品",
      actions: "操作",
      create_date: "创建日期",
    },
    notifications: {
      update_success: "联盟状态已更新。",
    },
  },

  /** {@see BPageAffiliatePayments**/
  affiliate_payments: {
    title: "联盟合作伙伴付款",
    table: {
      staff: "员工",
      amount: "金额",
      note: "备注",
      date: "日期",
    },
  },
  /** {@see BPageShuttleRoles**/
  my_roles: {
    title: "我的角色",
    message:
      "角色代表授予店铺员工的具体访问权限。例如，角色可以分配给负责订单处理的员工，如发货或包装人员。",
  },
  /** {@see WidgetMyRoleCard**/
  role_card: {
    complete_tasks: "已完成的任务",
    reject_tasks: "已拒绝的任务",
    last_check: "最近的检查",
  },

  /** {@see BAppConfigDialog**/
  app_config: {
    reviews: "评价",
    rate_now: "立即评分",
    category: "分类",
    uninstall: "卸载",
    get_app: "获取应用",
    public_keys: "公钥",
    private_keys: "私钥（安全）",
    config: "应用配置",
    app_status: "应用状态",
    app_info: "应用信息",
    update_at: "最近更新",
    visit_website: "访问网站",
    privacy: "隐私政策",
    installs: "安装次数",
    basic_profile_permission: "基本资料信息",
    developer: "开发者",
    permissions: "权限",
    total_comments: "总评论",
    delete_dialog: {
      title: "卸载应用",
      message: "你想从你的商店中删除这个应用程序吗？",
      action: "是的，删除应用",
    },
    notifications: {
      uninstall_success: "应用程序卸载成功。",
    },
  },

  /** {@see BPageShopChannelBots**/
  shop_bots: {
    not_set: "未设置！",
    tokens: "令牌",
    webhook: "项目",
    calls: "调用次数",
    dialog: {
      title: "{name} 机器人配置",
      message:
        "一个用于构建企业级购物体验的综合机器人框架。",
    },
  },

  /** {@see BPageShopCrmCustomers**/
  shop_customers: {
    title: "客户管理",
    subtitle:
      "顾客 项目 项目 项目 到 项目 店铺 项目 项目 项目; 手动添加, 项目 项目 导入, 项目 项目 POS, 项目 项目 项目 项目 店铺. 项目 项目 用户 日志 项目 项目 店铺, 项目 项目 项目 项目 已注册 项目 项目 项目.",
    add_customer_action: "添加新客户",

    all_customers: "下载所有客户",
    filtered_customers: "筛选后的客户",
    dialog_chips: {
      title: "设置客户积分数量",
    },
    dialog_club: {
      title: "设置客户俱乐部级别",
    },
  },

  /** {@see BCustomerAdd**/
  customer_add: {
    edit_title: "编辑客户",
    add_title: "添加新客户",
    subtitle:
      "要将客户添加到您的商店，请提供电子邮件地址或电话号码。",
    more: {
      title: "添加更多详细信息",
      subtitle: "设置货币、客户俱乐部、细分、地址等。",
    },
    detail: {
      subtitle:
        "记录客户的个人信息。请尊重客户的隐私。",
    },
    preferences: {
      subtitle: "在此设置默认用户货币、客户俱乐部和客户分组。",
    },
    address: {
      subtitle:
        "该地址可用于POS系统。用户无法查看此信息。",
    },
  },

  /** {@see AppPageDashboard**/
  app_dashboard: {
    status: "发布状态",
    statistics: "统计数据",
  },
  /** {@see AppPage_Publish**/
  app_publish: {
    production_version: "正式版本",
    beta_version: "测试版本",
    alpha_version: "内部测试版本",
  },
  /** {@see AppPublishWidget**/
  app_publish_widget: {
    header: "店铺网站页眉",
    header_code: "页眉代码",
    admin_page: "管理页面",
    name: "名称",
    icon: "图标",
    url: "网址",
  },

  /** {@see AppPage_API**/
  app_api: {
    title: "API 访问",
    revoke_api: "撤销 API",
    api_key: "API 密钥",
    secret: "密钥",
    client: "客户端",
    redirect_url: "重定向网址",
    client_name: "客户端名称",
  },

  /** {@see BPageApplication**/
  app_loader_page: {
    no_ui_title: "此应用程序没有任何用户界面！",
    no_ui_desc:
      "有些应用在管理后台不需要用户界面。此应用可能仅向您的店铺网站页眉部分添加代码。",
    header: "页眉代码",
  },
  /** {@see BPageShopFinanceReport**/
  finance_report: {
    export_title: "导出财务数据",
    export_sub_title:
      "获取包含财务信息的单一文件。包括在线和店内订单详情，以及所选时间段内的按产品分类的销售数据。",
    start_input_placeholder: "选择报告开始日期",
    end_input_placeholder: "选择报告的结束日期",
    download_action: "下载财务数据清单",
  },

  /** {@see BPageShopSettingNotifications**/
  shop_notifications: {
    title: "店铺通知",
    message: "编辑您的店铺通知设置和偏好",
    channel: "渠道",
    status: "状态",
    events: "事件",
    info: "信息",
    actions: "操作",
    connected: "已连接",
    not_connected: "未连接！",
    connect_now: "立即连接",
    send_test: "发送测试数据",
    disconnect: "断开链接",

    dialog: {
      title: "机器人配置",
      message:
        "一个全面的通知框架，用于构建企业级电商体验。",
      action: "点击这里！",
      set_config: "设置配置",
    },
  },
  notification_events: {
    new_order: "🛍️ 订单",
    payment: "💳 付款",
    return: "📦 退货",
    weekly_report: "📈 每周报告",
  },

  /** {@see BOrderDashboardDelivery} **/
  order_delivery: {
    title: "配送",
    add_to_delivery_que_action: "添加到发货队列",
    in_que: "在发货队列中",
    message:
      "将包裹交给快递员后，单击“<b>确认交货</b>”按钮。",
    message_add_to_service:
      "如果您想通过<b>送货服务</b>发送此包裹，请单击以下按钮。",
    courier_action: "发货确认",
    courier_action_subtitle: "我的快递公司会收取包裹。",

    pickup_ready_action: "项目 项目",
    pickup_ready_action_subtitle: "项目 订单 项目 项目 项目 项目 项目.",

    service_action: "执行确认",

    checklist: [
      "检查快递员的身份证。",
      "良好的产品包装和及时的交货可以提高您的客户保留率。",
    ],
    manual: {
      title: "等待客户确认收货。",
      action_received: "买家确认",
      action_returned: "配送退回",

      message:
        "注意：如果客户已收到订单，您可以使用以下选项完成订单履行。系统中的部分配送服务会自动确认送达。",
    },
    auto_complete_note:
      "经过一定时间后，订单状态将自动更改为已送达。该时间长度取决于订单类型，由系统决定。",
    received: {
      title: "已送达客户。",
      delivered_date: "送达日期",
    },
    receiver: "收件人",
    bill: "收据",

    tracking: {
      title: "添加追踪码/网址",
      code: "追踪码",
      url: "跟踪网址",
      message:
        "如果您使用了提供订单追踪码的配送服务，可以在此处输入追踪码及相关链接。该信息将展示给客户。",
    },
    preferred_delivery_time: "首选送货时间",
    manage_couriers: "管理我的快递公司",
    manage_service: "管理配送服务",

    option_deliver_by_courier: "选项 1：由您的快递公司送货。",
    option_add_to_que:
      "选项 2：添加到队列以在运输服务页面上处理。",
    option_instant_shipping: "选项 3：即时配送。",

    verify_delivery_input: {
      true_title: "项目 配送 项目",
      true_description:
        "我确认订单已经送达客户。",
    },
  },

  /** {@see BShopHomeSelect} **/
  shop_home_edit: {
    title: "主页设置",
    sub_title:
      "您可以在此部分设置您网站的默认首页。您也可以通过域名设置为每个域名分别指定自定义首页。",

    default_home: "默认主页",
    default_home_placeholder: "店铺页面即是网站首页",
  },
  /**
   * @see OReferralBank
   */
  referral_bank: {
    title: "推广仪表板",
    subtitle:
      "根据您的请求，佣金将支付到您指定的银行账户。请在此处提供您的银行信息。",
    no_bank_info: "暂无银行信息！",
    actions: {
      edit_my_bank_info: "编辑我的银行信息",
    },
    bank_dialog: {
      title: "我的银行详细信息",
      info: {
        title: "银行",
        subtitle:
          "请在此处输入您的银行信息。我们将使用此信息转账。确保银行账户属于您的名下或您的公司名下（如适用）。",
      },
      inputs: {
        name: {
          label: "银行名称",
          message: "账户所在银行的全名。",
        },
        holder_name: {
          label: "账户持有人姓名",
          message:
            "持有帐户的个人或实体的全名。",
        },
        account_number: {
          label: "账户号码",
          message:
            "与特定银行账户相关的唯一号码。",
        },
        routing_number: {
          label: "项目 项目 (USA) 项目 项目 代码 (UK)",
          message:
            "用于识别具体银行分支的号码（不同国家使用不同术语）。",
        },
        swift: {
          label: "SWIFT/BIC 代码",
          message:
            "用于在全球范围内识别银行的国际代码，尤其是用于国际转账。",
        },
        iban: {
          label: "IBAN（国际银行账户号码）",
          message:
            "IBAN 主要在欧洲使用，是一种国际认可的跨境银行账户识别系统。",
        },
        contact: {
          label: "联系信息",
          message: "与账户关联的电话号码或电子邮件地址。",
        },
        note: {
          label: "备注",
          message: "补充备注",
        },
      },
    },
    notifications: {
      save: {
        message: "您的银行信息已成功更新。",
      },
    },
  },

  /**
   * @see OReferralTier
   */
  referral_tier: {
    message:
      "来自您的推荐人支付的所有服务费、订阅费和其他款项。",
  },

  /**
   * @see ReferralTiers
   */
  ReferralTiers: {
    Bronze: {
      title: "青铜级",
      description:
        "您处于青铜级。您已从推荐人那里获得 2% 的佣金。",
    },
    Silver: {
      title: "银级",
      description:
        "您处于银级。您已从推荐人那里获得 4% 的佣金。",
    },
    Gold: {
      title: "金级",
      description:
        "您已进入黄金级别。您已从推荐人处获得 6% 的佣金。",
    },
    Platinum: {
      title: "白金级",
      description:
        "您已进入白金级别。您已从推荐人那里获得 8% 的佣金。",
    },
    Diamond: {
      title: "钻石级",
      description:
        "您已进入钻石级别。您已从推荐人处获得 10% 的佣金。",
    },
  },

  /**
   * @see OPageMonetize
   */
  page_monetize: {
    title: "变现",
    subtitle: "拓展商业机会。",
  },

  /** {@see OPageMonetizeReferral} **/
  selldone_referral_page: {
    referral_link: "推广链接",
    registered: "已注册",
    accepted: "已接受",
    bank: "银行",
    bank_title: "提现银行信息",
    new_users: "新用户",
    performance: "表现",
    credit_mode: "信用模式",
    get_stickers: "项目 项目 HTML 代码 到 项目 & 项目",
    click_copy_sticker_code: "项目 项目 项目 项目 到 项目 HTML 代码.",
  },
  /** {@see OReferralTransactions} **/
  selldone_referral_payment: {
    title: "提现记录",
    subtitle:
      "项目 项目 列表视图 项目 提现 交易. 项目 项目 转账 项目 从 项目 钱包 到 项目 银行 账户 项目 项目 Selldone 钱包, 项目 项目 项目 项目 项目.",

    officer: "负责人",
    amount: "交易金额",
    note: "备注",
    date: "日期",
  },

  /** {@see BGatewayCard} **/
  widget_shop_gateway: {
    link_account_caution:
      "将钱包 ({currency}) 链接到您的商店！点击这里..",
  },

  /** {@see BProductOrderSalesPerformance} **/
  product_sell_widget: {
    title: "产品销售业绩",
  },

  /** {@see BOrderDashboardDropshippingFulfillment} **/
  fulfilment_order_widget: {
    title: "代发货履单",
    check_action: "接受代发货",
    uncheck_action: "订单已确认",
    pay_action: "支付商品成本..",
    pay_completed: "付款确认",
    list_of_items: "代售商品清单",

    checklist: [
      "向原卖家间接支付您所售商品的金额。",
      "您可以在商店的会计>代发货部分统一支付和结清商品成本。",
      "支付后，供应商会收到您的订单并在备货后直接发给买家。",
    ],
    message:
      "在向供应商支付订单费用后，您可以在此查看订单的发货进度。",
  },

  /** {@see BPageWholesaler} **/
  drop_shipping: {
    menu: {
      dashboard: "仪表盘",
      orders: "订单",
      inventory: "库存",
      shops: "经销商",
      requests: "请求",
    },
    drop_shipping_charge: "代发货费用",
  },

  /** {@see DropshipRequestStatus} **/
  dropship_request_status: {
    PENDING: "待处理",
    ACCEPT: "接受",
    REJECT: "拒绝",
  },

  /** {@see BPageWholesalerShop} **/
  dropshipping_reseller_page: {
    menu: {
      dashboard: "仪表盘",
      orders: "订单",
      wallet: "钱包",
    },
  },

  /** {@see BPageWholesalerShopDashboard} **/
  dropshipping_reseller_dashboard: {
    title: "分销商仪表板",
  },

  /** {@see BPageWholesalerShopOrders} **/
  dropshipping_reseller_orders: {
    title: "分销商订单",
  },

  /** {@see BPageWholesalerShopWallet} **/
  dropshipping_reseller_wallet: {
    title: "分销商钱包",
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "付款确认",
      payment_success: "付款完成。",
      buy_title: "购买",
      pay_by_giftcards: "您的订单已使用礼品卡支付。",
      free_order: "您的订单是免费的。",
      pay_by_cod: "您的订单已登记为货到付款。",
      pay_by_dir:
        "您的订单已登记为直接支付，请在订单页面完成付款并上传收据。",

      pay_title: "付款",
      qr_code_payment: "付款二维码已创建。",
      connecting_to_online_gateway: "正在连接到在线支付网关。",
    },
  },

  /** @see DropShippingAccountCharges **/
  dropship_charges: {
    notifications: {
      pay_confirm_message: "付款已确认。<br>日期：{payment_at}",
      pay_fail_title: "未支付",
      pay_fail_message: "付款无法验证！",
    },
  },

  /** @see BPageShopFinanceResellerFulfillment **/
  dropship_checkout: {
    pay_dialog: {
      title: "分销商订单付款",
      balance: "您的账户余额",
      total_cost: "总订单成本",
      need_charge: "需要充值",
      no_account_cation: "您没有账户！请联系批发商。",
      orders: "订单",
    },
    notifications: {
      success_pay:
        "您已成功支付这些订单，付款已确认完成。",
    },
  },
  /** @see BPageShopFinanceResellerWallets **/
  dropship_accounts: {
    charge_account: "账户充值",
    charge_dialog: {
      title: "充值分销帐户",
      amount_input: "充值金额",
      charge_now: "立即充值",
    },
  },

  /** @see BPageWholesalerDashboard **/
  dropship_admin_dashboard: {
    title: "分销商请求",
    today_order_count: "今天的订单数",
    yesterday_order_count: "昨天的订单数",
    total_7_days: "过去 7 天的订单总数",
  },

  /** @see BProductAddDropshipping **/
  dropshipping_products: {
    no_shops:
      "抱歉，没有找到批发商店铺。未来将会添加更多店铺，您将能够将他们的产品加入到您的商店中。",
    show_all_shops: "显示所有商店",
    show_eligible_shops_message: "显示符合条件的商店",
    show_all_message: "您可以查看所有店铺",
    current_shop: "当前店铺",
    request_account: "申请帐号",
    request_accepted: "已接受申请",
    request_rejected: "申请被拒绝",
    request_pending: "申请待定..",
    notifications: {
      add_product: "产品已添加到您的商店。",
      request_access:
        "我们已成功将您的访问申请发送给批发商。",
    },
  },

  /** @see BProductDropshippingAbstractView **/
  product_dropshipping: {
    need_re_enable:
      "该商品已被原卖家修改，价格变动导致该商品在您的店铺中被禁用。请查看变动情况，若您同意重新激活该商品，请点击下方按钮。",
    need_re_enable_action: "同意，应用更改并激活",
    changed_value:
      "该商品已被原卖家修改。请查看变动情况，若您同意将更改应用到您的商品中，请点击下方按钮。",
    changed_value_action: "同意，进行更改",
    parent_deleted: "该商品已被原卖家移除。",
    parent_closed:
      "该商品已被原卖家下架！您将无法再在您的店铺中销售该商品，但如果原卖家重新上架该商品，您将可以在您的店铺中重新激活该商品。",
    notifications: {
      re_enable_success: "该产品已重新激活。",
      update_success:
        "该商品信息已更新为原商品信息。",
    },
  },

  /** @see BPageProductDropshipping **/
  product_dropshipping_admin: {
    title: "代发货",
    save_alert:
      "该商品的代发货设置已被更改。您想保存更改吗？",
    reselling_message:
      "启用此选项后，其他卖家将能够将您的商品添加到他们的店铺中。",
    reselling: "启用代发货",
    price_merchants: "给商家价格",
    price_commission: "商家佣金",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "等待库存",
    inform_me_when_available: "有货时通知我！",
    pay_buy: "支付和购买",
    quantity: "数量",
    quantity_in_basket: "购物车中的商品",
    count_unit: "X",
    remove: "移除",
    add_to_basket: "添加到购物车",
    book_now: "现在预订",
    reserve_now: "立即预订",
    buy_now: "立即购买",

    buy: "购买",
    notifications: {
      inform_add_success: "我们会在有货时通知您。",
      inform_remove_success: "您已被移出等待名单。",
    },
  },
  /** @see SProductOverview **/
  product_info: {
    fake: "仿品",
    action: "拍卖",
    compare_limit: "限对比10件商品",
    compare_add: "加入对比",
    compare_be_in_list: "已在对比列表",

    type: "类型",
    brand: "品牌",
    category: "分类",
    discount: "折扣",
    track_price: "追踪价格",
    waiting_for_auction: "等待拍卖？",
    inform_auction: "拍卖时通知我",
    return_in_days: "{days} 天保修退货",
    support24h7: "7天24小时支持",
    support_normal: "工作时间支持",
    original_guarantee: "原厂保证",
    cod_payment: "支持货到付款",

    pros: "优点",
    cons: "缺点",

    external_link: "阅读更多",
    notifications: {
      congratulation: "恭喜",
      waiting_list_add_success:
        "我们将在该商品拍卖时通知您。",
      waiting_list_delete_success: "您已退出拍卖等候名单。",
    },

    offer_message: "购买 {min_quantity} 件，可享受 {percent}% 折扣",
    up_to: "每个订单最多 {per_order}件",
    get_free: "免费获得",
    get_off: "获得 {percent}% 折扣",
  },

  /** @see SStyler **/
  styler: {
    size_class: "尺寸和分类",
    delete_bg: "删除背景图片",
    bg_color: "背景颜色",
    section_style: "设置区域样式",
    link: "设置链接",
    show_products: "产品/类别列表管理",
    show_product: "选择产品",
    delete_section: "删除区域",
    text_color: "文字颜色",
    tex_align: "文本对齐",
    text_style: "文字样式",
    bg_image: "背景图片",

    product: {
      title: "选择产品",
    },

    /** @see SPageProductsFilter **/
    products: {
      title: "产品和类别列表管理",
      sort_options: "选择排序和显示设置。",
      item_types: "仅显示产品/分类",
      product_only: "仅产品",
      category_only: "仅类别",
      no_category: "您的商店中没有分类。",
      limit: "产品数量限制",
      limit_message: "请输入商品结果数量。",
      select_categories: "选择可用分类",
      categories_limit: "分类数量限制",
      categories_limit_msg:
        "输入分类的最大数量。设置为零则无限制。",
    },
  },

  /** @see BPageShopCrmChat **/
  shop_contacts: {
    popup: "启用弹出支持",
    popup_message:
      "启用此选项后，支持按钮将显示在您的店铺右下角。",
  },

  /** @see BPagePopup **/
  popup_page: {
    preview: "查看实时弹出窗口",

    menu: {
      design: "设计",
      appearance: "外观",
      filter: "筛选",
      setting: "设置",
    },
    notifications: {
      save: "弹出窗口已成功保存。",
      edit: "弹窗更新成功。",
    },
  },
  /** @see LMenuLeftPopupAppearance **/
  popup_appearance: {
    position: "位置",
    position_desc:
      "指定此通知在页面上的显示位置。",
    width: "宽度",
    width_desc: "您可以设置最大页面宽度。",
    height: "高度",
    height_desc: "您可以设置最大页面高度。",
    radius: "圆角半径",
    radius_desc:
      "在此处您可以设置通知窗口的圆角半径。",
    shadow: "阴影",
    shadow_desc: "您是否希望弹窗带有阴影？",
    delay: "显示延迟",
    delay_desc:
      "用户进入您的店铺后，经过此时间后通知会显示给用户。",
    hide: "隐藏延迟",
    hide_desc:
      "您可以设置通知在显示后几秒自动关闭。值为0表示通知不会自动关闭。",
    transition: "弹窗动画",
  },

  /** @see BPagePopupFilter **/
  popup_filter: {
    registered: "会员及登录要求",
    registered_desc:
      "您可以选择仅向店铺用户或访客显示此通知。",
    only_guests: "仅访客",
    only_users: "仅已登录用户",
    purchased: "购买历史",
    purchased_desc:
      "您可以选择仅向已购买或尚未购买的用户显示此通知。",
    no_purchase: "尚未购买",
    yes_purchase: "之前购买过",
    sex: "性别",
    sex_desc:
      "您是否希望仅向特定性别的用户显示此通知？",
    age: "最低年龄",
    age_desc:
      "如果输入任何大于 6 的值，则用户必须登录并且必须输入他的出生日期。",
    levels: "客户俱乐部级别",
    levels_desc:
      "如果用户拥有以下选定的任一等级，将显示此通知。",
    countries: "位置限制",
    countries_desc:
      "您是否希望此通知仅显示给来自特定国家的用户？",
  },

  /** @see BPagePopupSetting **/
  popup_setting: {
    published: "发布状态",
    repeat: "重复显示",
    repeat_msg:
      "您是否希望此通知向用户显示多次？",
    intervals: "弹窗显示间隔时间",
    intervals_msg:
      "弹窗再次显示给用户前，必须间隔的最短时间。",
    designer_zone: "设计者区域",
    title: "弹窗标题",
    note: "设计者备注",
    image: "封面图片",
    delete: {
      title: "删除",
      sub_title:
        "删除弹窗后不可恢复，请确认。",
      action: "删除此弹出窗口",
    },
    notifications: {
      delete: "弹出窗口已删除。",
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
      templates: "模板",
      provider: "服务商",
    },

    manage: {
      title: "管理短信",
      subtitle:
        "您可以在这里查看您店铺发送的短信内容。由于短信服务商在注册验证模式方面的限制，目前暂时无法个性化短信内容。",
    },

    template: {
      title: "模板",
      valid_message: "您可以创建自定义短信。",
      provider_not_enable_message: "短信提供商未启用！",
      need_custom_provider_message:
        "仅当您设置了自定义服务商时，自定义短信才可用。",
      add_new: "新增模板",
      disable_reason: {
        set_provider: "请先设置您的短信服务商！",
        provider_is_disabled: "服务商已被禁用！",
        otp: "一次性密码（OTP）不可自定义！",
        select_another_provider: "请选择其他服务商。",
      },
      enable_only_filter: "仅显示已启用",

      text_template_not_supported_msg:
        "您的服务商不支持纯文本消息。",
      structure_template_not_supported_msg:
        "您的服务商不支持结构化消息。",

      structured_data: "结构化数据",

      menu: {
        reset_error: "重置错误",
        send_test: "发送测试消息",
      },
    },
    template_edit: {
      title_add: "添加新的消息模板",
      title_edit: "编辑消息模板",
      config: {
        title: "消息配置",
        subtitle:
          "您可以在短信服务商的网站上创建短信模板，然后在这里指定其代码和数据结构。我们会将这些信息传递给您的服务商，由其生成实际的短信消息。",
        code: "代码",
        language_msg: "留空表示使用默认语言。",
        enable_msg: "启用该模板用于生成短信内容。",
      },
      text: {
        title: "纯文本",
        subtitle:
          "在此输入您自定义的短信内容。动态值将会在发送之前被替换为实际的值。",
        message: "消息内容",
        reset_to_default: "重置为默认内容",

        auto_fill: {
          title: "自动填充参数",
          subtitle:
            "项目 项目 项目 项目 项目 项目 参数 项目 项目 项目 项目 Selldone 项目 项目 项目 项目 项目 项目 值.",
        },

        sample: {
          title: "示例消息",
        },
      },
      template: {
        title: "结构化模板",
        subtitle:
          "项目 项目 项目 项目 模板 项目 项目 值 项目. 项目 模板 代码 项目 项目 项目 项目 项目 项目 项目 项目 SMS 服务 服务商, 项目 项目 <code>项目</code> 项目 项目 项目 服务商 项目 到 已发送 项目 代码 项目. 项目 项目 <code>值</code> 项目 项目 模板 项目 项目, 项目 <code>{code}</code> 项目 项目 项目 项目 项目 模板 代码.",
        add_new_parameter: "添加新参数",

        auto_fill: {
          title: "自动填充参数",
          subtitle:
            "项目 项目 项目 项目 项目 项目 参数 项目 项目 值, 项目 Selldone 项目 项目 项目 项目 项目 项目 值. 项目 项目 到 项目 项目 默认 项目 项目 模板 项目 项目 SMS 服务商 项目 项目. 项目 项目 项目, 项目 项目 项目 无服务 项目 到 项目 项目 项目 项目.",
        },
        request: {
          title: "示例请求数据",
        },
        sample: {
          title: "示例模板消息",
          subtitle: "您可以将此模板复制粘贴到您的短信服务商处。",
        },
        add_message_action: "添加消息模板",
      },
    },
  },
  /** @see SmsTemplateMode **/
  sms_template_mode: {
    text: {
      title: "纯文本",
      desc: "消息将从具有自动替换参数的文本创建并发送。",
    },
    template: {
      title: "结构化模板",
      desc: "将根据参数创建一个对象并发送给服务提供者。",
    },
  },

  /** @see BShopSmsProvider **/
  shop_sms_provider: {
    title: "自定义短信提供商",
    reset_error: "重置错误",
    subtitle:
      "设置自定义短信服务提供商，并自定义您的验证短信和商家名称。默认服务商仅在部分白名单国家发送验证短信和通知消息。",
    plain_text: "纯文本",
    structural_template: "结构化模板",
    errors_limit_msg:
      "如果您的服务错误超过100次，将自动被禁用！您可以重置错误以重新启用。",

    enable_input: {
      false_description:
        "OTP 项目 项目 项目 项目 项目 Selldone 项目 项目 项目, 项目 其他 订单 通知 SMS 项目 项目 已发送 项目 项目.",
      true_description:
        "短信将通过您的服务提供商传送。",
    },
    test_input: {
      true_title: "验证配置",
      true_description:
        "我们将向您的电话号码 📞 <b>{phone}</b>发送一条测试消息，这可能需要您付费，但您可以确保一切正常。",
    },
    sync_action: {
      title: "操作",
      subtitle:
        "一些短信服务提供额外的服务，如活动、营销和其他功能。您可以同步您的联系人或其他信息，以更快地使用其功能。",
      action: "同步联系人",
    },
    tokens: {
      title: "参数",
      subtitle:
        "设置以下参数，将您的短信服务提供商与商店关联。",
    },
  },
  sms_messages_options: {
    all: {
      title: "验证码 + 订单通知",
      description:
        "将发送验证短信和订单通知短信。",
    },
    otp: {
      title: "仅限验证码OTP",
      description: "将发送验证消息。",
    },
  },

  /** @see BPageShopSettingEmail **/
  shop_emails: {
    title: "管理电子邮件",
    sub_title:
      "您将在本部分中查看商店向客户和管理员发送的邮件列表。邮件会根据您为商店填写的信息自动生成和设计。同时，未来也会向公众开放个性化消息和图片的功能。",

    tabs: {
      preferences: "偏好设置",
      templates: "模板",
      provider: "服务商",
    },

    preferences: {
      title: "通知邮件",
    },
  },

  /**
   * @see BShopEmailProvider
   */
  shop_email_provider: {
    title: "自定义邮件服务器",
    subtitle:
      "连接您的邮件服务提供商，通过您的自定义域名发送邮件。",
    provider: "服务提供商",
    enable_input: {
      false_description: "项目 邮件邮箱 项目 项目 已发送 项目 项目 项目 域名.",
      true_description: "您的电子邮件将通过您的自定义邮件域名发送。",
    },
    config: {
      title: "配置",
      subtitle:
        "要为您的商店配置自定义邮件服务，请输入您的服务 API 密钥以及其他必要的设置。",
    },
    sender: {
      title: "发件人",
      subtitle:
        "您可以配置默认的发件人名称和邮箱地址，用于向客户发送邮件。",
    },

    inputs: {
      from: {
        label: "发件邮箱",
      },
      from_name: {
        label: "发件人姓名",
      },
    },

    actions: {
      send_test_email: "发送测试电子邮件",
    },

    messages: {
      provider_error_limit:
        "如果您的服务错误超过 100 个，它将被自动禁用！您可以重置错误以重新启用它。",

      encryption_ports_guide:
        "邮件服务提供商可能根据可用端口提供 SSL、TLS 或未加密连接。如果连接时出现错误，更改加密模式可能解决问题。标准的 <b>TLS</b> 使用端口：<b>587</b>，<b>SSL</b> 使用端口：<b>465</b>。",

      enable_receive_test:
        "保存更改后，您将在<b>{email}</b>上收到一封测试邮件。在使用新配置发送测试电子邮件之前，请保存更改。",
    },
  },

  /** @see InstagramViewMedias **/
  instagram: {
    title: "销售额 项目 Instagram",

    add_product: "添加新产品",
    create_product: "创建产品",
    link_box_msg:
      "项目 项目 链接 项目 项目 项目 项目 Instagram, 项目, 项目 其他 项目 项目 项目 项目 项目 项目 项目 项目 产品 项目 项目 买 项目.",
    remove_account: "编辑 / 移除 Instagram 链接",
  },
  /** @see BPageShopChannelInstagram **/
  shop_channel_instagram: {
    title: "Instagram 销售额 渠道",
    subtitle:
      "创建 项目 专用 类别 项目 项目 产品, 项目 项目 图片 项目 项目, 项目 项目 项目 项目 项目 项目 项目. 项目 项目 到 Instagram 项目 项目, 项目 项目 项目 项目, 项目 项目 到 项目 项目 项目 产品.",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "待办事项清单",
      message:
        "写下您要完成的工作内容，并让买家知道其进展情况。",
    },
    booking: {
      title: "预订/预约",
      message:
        "该订单将在指定的时间进行处理，客户已经选择了期望的时间段。如果您想更改所选时间段，请及时告知客户。",

      selected_checkin: "入住日期",
      selected_checkout: "退房日期",
      change_days_question:
        "您需要修改所选天数的预订时长吗？",
      show_calendar: "显示订单日历",
    },
    pricing: {
      title: "价格",
      message: "您为此服务收取的费用是多少？",
    },
    subscription: {
      title: "订阅",
      message:
        "通过按天购买该服务，您可以选择订阅期。如果您想更改已经输入的默认值，请告知买家。",
      duration: "订阅期",
    },
    charge: {
      title: "收费",
      message:
        "您已为该项目设置了费用。您可以更改客户已购买商品的收费金额。",
      charge: "收费金额",
    },

    save_item: "验证并设置",
    start_service: "启动服务",
    end_service: "完成",
  },
  /** @see BOrderDashboardServiceTasks **/
  service_tasks: {
    notification_finish: {
      title: "服务完成",
      message:
        "如果服务已完成，请按确认按钮以完成并关闭订单。",
      action: "确认并完成订单",
    },
  },

  /** {@see BProductEditOutputs} **/
  product_outputs: {
    outputs_form: "输出表单结构",

    virtual: {
      title: "产品输出信息表单",
      sub_title:
        "您希望在客户购买后向其展示的信息。该表单非常适用于虚拟产品的销售，例如礼品卡。",
    },
    service: {
      title: "服务设计",
      sub_title:
        "首先选择您的服务类型并填写所需信息。例如，您可以定义一个待办事项清单，或让客户选择预订时间或预约时间。",
    },
  },

  /** {@see BProductServiceManage} **/
  service_design: {
    type: "服务类型",
    type_message:
      "请选择您为此产品提供的服务类型。选择每个项目后，将显示相关的表单。根据您选择的服务类型，在下单时可能需要从客户那里获取更多信息。",
  },

  /** {@see AvocadoHomePage} **/
  avocado: {
    name: "项目",
    title: "社交媒体上的快捷、精准、愉快销售",
    message:
      "只需一个金额和一个标题，就能让客户付款！资金会直接打入您的账户，客户将拥有独特的购物体验。",
    new_order: "新账单",
    create_by_seller_title: "创建发票",
    create_by_seller_message:
      "要为特定金额生成发票并发送给收款人，只需点击下方按钮，系统将显示发票表单。将生成的链接分享给买家，他们即可完成支付并跟踪订单状态。",

    create_by_buyer_title: "项目 项目",
    create_by_buyer_message:
      "启用此功能后，将显示一个链接。将此链接分享给客户，即可方便他们下单。",

    orders_list: "订单列表",
    active_mode: "订单收据有效",
    inactive_mode: "已关闭",
    active_message:
      "启用此来源后，客户可通过您下方看到的请求表单来下单。",
    avocado_form_link_message:
      "项目 项目 链接 项目 项目 项目 项目 Instagram, 项目 项目 其他 项目 项目 项目 项目 项目 项目 项目 买 项目, 项目, 项目 项目 更多的.",
    need_address: "获取地址",
    need_address_msg:
      "如果您需要获取买家的地址信息，请勾选此选项。",
    avocado_link_message:
      "只需将上方链接提供给客户，客户即可通过该链接进行订单支付。客户也可以通过该链接跟踪订单状态。",
    edit_order: "编辑订单",
    progress: "进度",
    buyer_link: "买家链接",
    buyer_link_message:
      "将此链接提供给买家。买家可以通过该链接支付并跟踪订单状态。此链接是加密的，如果提供给其他人，他们也可通过此链接支付并查看相关信息。此链接有效期为 60 天。点击下方链接即可复制。",
    OrderConfirm_done: "订单已确认。",
    OrderConfirm_message:
      "如果您已确认付款且订单无误，请点击下方按钮。",
    OrderConfirm_action: "订单确认",
    PreparingOrder_message:
      "如果客户订单已准备好发货，请单击下面的按钮。",
    PreparingOrder_action: "订单已准备好发货",
    finish_message:
      "如果该订单已完成，请点击结束按钮以关闭该订单。",
    finish_action: "完成订单处理",
    finish_dialog: {
      title: "完成订单",
      message: "订单是否已完成？确定关闭订单吗？",
      action: "是的，确认订单完成",
    },
    configuration: "项目 编辑",
    delivery_price: "运费",
    edit_avocado_action: "编辑信息",
    submit_pricing_avocado_action: "提交订单定价",
    add_avocado_action: "创建发票链接",
    avocados_list: "列表视图 项目 项目",
    not_pricing: "该商品未定价！",

    show_all: "显示全部",
    show_accepted: "显示已确认的项目",

    notifications: {
      update_success: "项目 项目 项目.",
      add_success: "项目 项目 项目.",
    },
  },

  /** {@see BDashboardShopOrdersAvocado} **/
  avocado_orders: {
    title: "项目",
    title_small: "社交媒体销售",
    pending_orders: "进行中的订单",
    avocado: "订单 项目",
  },
  /** {@see BAvocadoInvoice} **/
  avocado_process: {
    step1: "定价",
    step1_msg:
      "输入每个商品的价格并勾选绿色框。如果某个商品无法出售，请将其状态改为已拒绝。",
    step2: "确认发票",
    step2_msg:
      "为此订单创建发票。您可以输入发票的标题和说明。订单金额是根据商品的总价自动计算的。",
    title_input: "发票标题 *",
    show_to_customer: "该信息将展示给买家。",
    description_msg:
      "您想为这个订单写备注吗？该信息将展示给买家。",
    price_input: "订单金额 *",
    tax_none: "免税",
    tax_included: "已含税",
    tax_add: "加税",
    tax_message: "您可以选择是否在价格中包含税费。",
    tax_included_messages: "价格已含税。",
    tax_add_messages: "税费应加到最终价格中。",
    invoice: {
      subtitle:
        "项目 项目 项目 项目, 项目 项目 创建 项目 支付 链接 项目 项目 项目 金额. 项目 项目 项目 项目 项目 发票 项目 项目 支付 项目 项目 项目 项目.",
    },
  },

  /** {@see BPageProductHyper} **/
  /** {@see BPageShopChannelHyper} **/
  hyper: {
    name: "项目",
    print_label:
      "打印以下标签并将其放在产品前面",
    hyper_form_link_product_message:
      "您的客户可以通过此链接快速购买 {product}。他们还可以通过扫描二维码访问该链接。",
    title: "项目 项目 销售",
    message:
      "项目 项目 项目 项目 项目 Selldone 销售额 渠道, 项目 顾客 项目 项目 项目 到 买 产品 项目 项目 项目 QR 代码 项目 项目 操作 项目 从 项目 项目. 项目 项目 项目 到 项目 项目 项目 个 项目 项目, 项目, 项目 项目 项目 项目 项目 项目. 项目 项目 项目 项目 项目 项目, 项目 项目 创建 项目 项目 QR 代码 项目 项目 产品 项目 项目 产品 项目 项目.",
    orders_list: "项目 订单 列表视图",
    active_mode: "项目 销售额 渠道 已经激活",
    inactive_mode: "未激活",
    active_message:
      "启用此选项后，在每个产品的管理部分会显示创建快速销售代码的选项。",
    hyper_form_link_message: "项目 项目 项目 项目 链接",
    configuration: "项目 编辑",
  },

  /** {@see BDashboardShopOrdersHyper} **/
  hyper_orders: {
    title: "项目",
    title_small: "销售报告",
    hyper: "收到的订单",
  },

  /** {@see BProductInventoryManagementFile} **/
  product_file: {
    no_file: "尚未上传文件！",
    delete_dialog: {
      title: "删除文件",
      message: "您确定要删除此文件吗？",
      action: "是的，立即删除",
    },
    notifications: {
      delete_success: "文件删除成功。",
    },
    drag_sort_msg: "您可以拖动和排序文件。",
    paid_mode_msg: "只有在购买产品后，用户才能下载文件。",
    free_mode_msg:
      "用户可以免费下载。示例文件必须小于 50 MB。",
    has_gust_shopping_msg:
      "由于在商店设置 > 流程中启用了访客购买，注册用户和访客都可以下载文件。",
    only_registered_shopping_msg:
      "只有注册用户才能下载示例文件。",
    file_count_limit: "文件数量限制",
  },

  /**
   * @see BProductLocationRestrictionsList
   */
  product_location_restrictions: {
    title: "可用地区",
    subtitle:
      "如果您的产品或服务仅在特定地区提供（由国家和邮政编码或区号定义），您可以在此指定这些地区。这些地区限制将在产品层面执行。在产品页面，客户将被提示选择他们的位置。如果产品在所选区域内可用，客户即可继续购买。",

    add_location_action: "添加国家",
    no_restriction: "无限制",
    import: {
      title: "加载配置文件",
      subtitle: "选择已保存的位置配置文件。",
    },
    export: {
      title: "保存个人资料",
      subtitle: "存储位置以供将来使用。",
    },
    has_restriction_input: {
      title: "有位置限制",
      description:
        "由于设置了位置限制，客户只能在指定的国家和邮政编码范围内购买此产品。",
    },
    zip_pin_code: "邮政编码",
    no_country_selected_error:
      "请至少提供一个国家/地区以及邮政编码列表。如果没有这些信息，则无法提供该产品。",
    tips: "点击<b>+ 添加国家/地区</b>按钮开始创建新的地区集合。完成后，您可以点击右上角的<b>⋮ 菜单</b>并选择<b>保存配置文件 来</b>保存它。",
    need_save_message:
      "该产品的位置限制设置已更改。要保存这些更改，请点击下面的“保存”按钮。",

    add_dialog: {
      title: "添加国家",
      message:
        "选择一个国家并点击“添加”。这会将该国家添加到表中，您可以为其分配邮政编码、邮政编码、城市名称或地区名称。",
    },
    save_profile_dialog: {
      title: "添加地区配置文件",
      message:
        "请输入名称以保存这组地区。保存后，该地区集合可应用于其他产品，实现一键快速加载。如果同名配置文件已存在，将会被新内容更新。",
      title_input: {
        title: "配置文件名称",
        placeholder: "类别名称或商店名称...",
      },
    },
    load_profile_dialog: {
      title: "加载地区配置文件",
      message:
        "您可以通过选择之前保存的位置集合来加载地区。",

      select_input: {
        title: "地区配置文件",
        placeholder: "选择配置文件...",
      },
    },
  },

  /** {@see NotificationTopBar} **/
  notification_top_bar: {
    free_charge: "🎊 充值 {amount} 即可获得 {amount_total} 余额。",
    charge_action: "领取免费余额",
    claim_title: "领取您的免费余额",
    claim_charge_caution:
      "注意：无法在钱包账户之间转换货币，因此请选择与您商店交易货币匹配的账户进行充值。",
    account_input: "充值账户",
    account_msg: "充值将应用于此账户",
  },

  /** {@see BDashboardShopApplications} **/
  selldone_applications: {
    title: "不要错过您的订单！",
    msg: "随时随地管理您的业务。",
    scan_qr_code: "用你的手机扫描我！",

    notification: {
      title: "通知",
      subtitle: "接收新订单通知。",
    },
    order: {
      title: "订单",
      subtitle: "查看和管理您的订单。",
    },
    product: {
      title: "产品",
      subtitle: "库存管理和产品管理。",
    },
  },

  /** {@see BPageShopSettingSeo**/
  shop_seo: {
    title: "SEO 配置",
    msg: "通过优化自然获客渠道，加速线上营销。",
    auto: {
      title: "自动化 SEO 引擎",
      msg: "为您的网站提供无缝的移动体验，兼顾访客和搜索引擎。",
    },

    amp: {
      title: "AMP",
      msg: "自动生成加速移动页面。",
    },
  },

  /** {@see BPageShopSettingEmail} **/
  shop_preferences: {
    order: {
      title: "订单",
      desc: "如果客户已付款，将会向该地址发送包含订单信息的邮件。",
    },
    return: {
      title: "退货",
      desc: "如果买家退货，将会向该地址发送邮件。发送此邮件取决于您购买的套餐。",
    },
    pos: {
      title: "POS",
      desc: "POS 销售报告将发送至此邮箱。",
    },
    avocado: {
      title: "项目",
      desc: "已发送 项目 报告 项目 项目 订单.",
    },
    accounting: {
      title: "会计",
      desc: "商店财务报告和更新将发送至此邮箱。",
    },
    subscription: {
      title: "订阅",
      desc: "最近购买的套餐状态及开始和结束订阅通知。",
    },
    technical: {
      title: "技术",
      desc: "关于域名和服务状态的技术通知。",
    },
    report: {
      title: "报告",
      desc: "每周和每月报告将发送到此电子邮件",
    },
    review: {
      title: "审核",
      desc: "如果您需要确认店铺内的某个流程，相关邮件将发送至此地址。例如确认向店铺用户发送营销邮件。",
    },
    bulk: {
      title: "项目 订单 报告",
      desc: "接收 项目 项目 电子邮件 项目 项目 许可证详情 项目 订单 项目 项目 项目.",
    },
  },

  /** {@see BPageShopSettingLanguages} **/
  shop_languages: {
    title: "商店语言",
    sub_title: "安装并激活商店自动翻译包。",
    message:
      "您最多可以在商店中安装 10 种语言包。如需安装更多语言包，请联系我们。",
  },

  /** {@see SInviteFriends} **/
  invite_friends: {
    title: "向世界介绍您的业务并赚取收入！",
    msg: "项目 项目 项目 到 Selldone 项目 项目 项目 项目 $99 商户 项目 项目 项目 项目 项目. 项目 项目 项目 项目 项目 交易, 项目 项目 项目 项目 佣金 从 全部 项目 交易. 访问量 项目 联盟 项目 到 开始时间 项目 今天!",
    invite: {
      title: "项目 Selldone 企业 OS 到 项目 项目 项目 $99 项目.",
      description:
        "项目 项目 项目 到 Selldone 到 开始时间 项目 企业 项目 项目 项目 项目 项目.",
      hashtags: "电子商务，网站建设者",
      quot: "项目 项目 项目 项目 店铺 项目 Selldone, 项目 项目 项目 项目 项目 企业 项目.",
    },
  },

  /** {@see BPageShuttleShops} **/
  shops_list: {
    title: "我的店铺",
    message:
      "这里是您拥有的商店、授权商店以及示例商店的列表。如需隐藏示例商店，请导航到页面底部并选择偏好设置。",

    sample: {
      title: "示例商店",
      subtitle:
        "在这里，您可以浏览一系列示例商店。您被授权查看这些商店中的信息，但请勿使用真实的个人信息登录或下单，因为这些数据将对公众可见。如您不小心输入了自己的信息，请退出商店并联系我们以获得进一步帮助。",
    },

    add_new_store: "添加新商店",
    i_have_a_deal: "我有一笔交易",
    access: {
      title: "访问邀请",
    },
  },

  /** {@see BTransportationServiceLabels} **/
  shipping: {
    warehouse_error:
      "请先设置您的仓库！此地址将作为发货起点。",
    errors: {
      set_origin: "请设置您的位置地图。",
      set_country: "设置你的国家。",
      set_address: "设置你的地址。",
      set_zip: "设置您的邮政编码。",
    },
    set_warehouse: "设置仓库",
    pickup_location: "取货地点",
    refresh_rates: "刷新运费",
    no_rate: "没有运费...",
    view_messages: "查看消息...",
    not_set_yet: "尚未设置！",
    drop_orders_here: "请将订单拖放至此处...",
  },

  /** {@see BPageShopBlogsCategories} **/
  blog_category: {
    title: "博客分类",
    subtitle:
      "您可以为博客文章创建有限数量的分类，以便更高效地管理它们。限制分类数量有助于网站更好地组织管理。值得注意的是，即使是顶级新闻机构也通常保持分类数量在100个以下，以简化管理并保持更广泛的关注点。",

    add_action: "添加新分类",
    add_dialog: {
      title: "新建/更新类别",
      force_edit: "强制编辑路径",
      force_edit_msg: "更改分类名称并更新所有相关文章。",
      star_msg: "标星分类优先在博客中显示。",
      star: "标星",
      delete_action: "删除分类",
      add_action: "添加分类",
      edit_action: "编辑类别",
    },
  },
  /** {@see BPageShopBlogsTimeline} **/
  blog_timeline: {
    title: "内容发布时间表",
    subtitle:
      "这里是未来计划发布的文章列表。您可以安排博客文章甚至产品描述在特定时间发布。",
  },

  /** {@see BPageShopPagesAboutUs} **/
  about_us: {
    title: "关于我们页面",
    subtitle:
      "写一篇关于您的业务的文章以显示在“关于我们”页面上。此页面将帮助您的受众了解您的品牌和使命。",
  },
  /** {@see BPageShopPagesTerms} **/
  terms: {
    title: "服务条款页面",
    subtitle:
      "为您的客户说明购买和使用服务的条款。",
  },
  /** {@see BPageShopPagesPrivacy} **/
  privacy: {
    title: "隐私政策页面",
    subtitle:
      "隐私政策是一份声明或法律文件，披露一方如何收集、使用、披露和管理客户或用户数据的部分或全部方式。",
  },
  /** {@see BPageShopPagesContactUs} **/
  contact_us: {
    title: "联系我们页面",
    subtitle:
      "写下您的联系信息、地址和电话号码，以便在联系我们页面上显示给您的客户。",
  },

  /** {@see BPageShopApplicationsMetaverse} **/
  metaverse: {
    title: "元宇宙桥接",
    subtitle:
      "Selldone 项目 %100 API-项目 配送服务 项目 项目 项目 项目. 项目, 项目, 项目 项目 开发者 项目 项目 项目 项目 项目 到 项目 项目, 顾客, 项目 配送服务 项目 项目 项目 项目 项目, 项目 项目 项目 项目.",
    message: "面向游戏开发者的抢先体验",
  },

  /** {@see BProcessCenterBulkExport} **/
  orders_bulk_export: {
    title: "订单助手",
    subtitle:
      "导出并下载标签，便于批量处理订单——适合每天处理超过100个订单。",

    timespan: {
      title: "时间区间",
      subtitle: "选择下订单的开始日期和结束日期。",
    },
    tasks: {
      title: "任务输出",
      subtitle:
        "下载用于批量处理订单的任务列表。结果仅包含已付款和货到付款的订单。",
      export_title: "任务列表",
    },
    labels: {
      title: "包裹标签",
      subtitle:
        "下载所选时间段和状态内所有订单的标签列表。结果仅包含已付款和货到付款的订单。",
      export_title: "箱子标签",
    },
  },

  /** {@see BPageShopMarketingFunnel} **/
  customers_funnel: {
    title: "客户人群统计",
    subtitle:
      "筛选并导出您的客户数据，以便做出更好的决策，提供更多价值同时减少营销成本！请尊重客户隐私，切勿向客户群发大量邮件！未经每位客户许可，绝不要将客户信息共享给第三方服务。",
  },

  /** {@see BPageAffiliatorDashboard} **/
  affiliate_pos: {
    title: "加盟POS",
    open_pos_action: "快速订购POS",
    description:
      "项目 项目 项目 项目 项目 项目 项目 Instagram 页面 项目 其他 项目 项目. 项目 联盟 POS 到 接收 项目 项目 订单 从 顾客 手动添加. 项目 项目 (项目 项目) 项目 项目 新建 订单 项目 项目 联盟 POS 项目 项目 项目 充值 项目.",
  },

  /** {@see BPageShopSettingFlow} **/
  shop_configuration: {
    /** {@see BShopOptionsLoginMethods} **/
    login: {
      title: "登录方式",
      subtitle: "自定义用户登录您店铺的方式。",

      tips: "<b>项目.</b> 项目 项目 用户 项目 项目 项目 店铺, 项目 项目 Selldone 用户 项目 项目, 项目 项目 项目 项目 项目. 项目 用户 项目 项目 访问权限 到 项目 地址 项目 项目 全部 商店 项目 项目 预览 项目 订单 历史, 项目 项目 项目 店铺 项目 项目. 项目 项目 项目 项目 项目 项目 项目 营销 项目 项目 项目 项目 到 项目 项目 项目 项目 项目. 到 项目 项目, 项目 已发送 项目 电子邮件 到 项目 用户 项目 项目 项目 项目 项目.",
    },

    /** {@see BShopOptionsCheckout} **/
    checkout: {
      title: "结账流程",
      subtitle:
        "自定义您的客户购物路径和电商购买流程。",
      map: {
        title: "地图",
        subtitle:
          "用户数 项目 项目 项目 配送 位置 项目 项目 地图 (喜欢 项目).",
        subtitle_no_map:
          "如果客户提供的地址中没有具体位置，运费计算时距离将视为零。",
      },
      mode: {
        title: "客户登录点",
        default: {
          title: "尽快（默认）",
          msg: "用户尽早登录。（提高转化率）",
        },
        on_checkout: {
          title: "结账时登录",
          msg: "强制用户在结账步骤登录。",
        },
        login_free: {
          title: "可选登录",
          msg: "订单付款后可选择是否登录。",
        },
      },

      express: {
        title: "添加到购物车后重定向",

        false: {
          title: "正常模式",
          msg: "单击添加到购物车后，留在页面上并继续购物。",
        },
        true: {
          title: "快速模式",
          msg: "点击加入购物车后跳转到结账页面。",
        },
      },

      shipping_address: {
        title: "询问收货地址",
      },
    },

    /** {@see BShopOptionsCheckoutForm} **/
    checkout_form: {
      title: "结账 项目",
      subtitle:
        "项目 项目 结账 项目 项目 到 项目 项目 项目 项目 项目 从 项目 顾客.",
    },
  },
  /** {@see CheckoutOptions} **/
  checkout_options: {
    default: {
      title: "实物和服务（默认）",
      desc: "要求客户在实物产品和服务结账时输入地址。",
    },
    physical: {
      title: "仅限实物",
      desc: "只要求客户在实物结账时输入地址。",
    },
    off: {
      title: "从不要求",
      desc: "从不要求填写送货地址。⚠ 你如果做的是有不同变体的服务产品，想用“实物类型”来管理它们，那就可以选择“从不要求填写地址”，避免客户被要求填写送货地址。",
    },
  },

  /** {@see BPageShopSettingBusinessModel} **/
  business_model: {
    title: "业务模型设置",
    subtitle:
      "设置您的业务模型，我们将在后台为您配置操作系统。",
  },
  business_type: {
    title: "商品类型",
    subtitle:
      "项目 项目 类型 项目 产品 项目 项目 到 项目 项目 项目 店铺. 产品 类 项目 Selldone 项目 更多的 项目 项目 项目 类型 项目 项目 产品; 项目 更多的 项目 项目 项目.",

    send_activation_request_to_support:
      "通过客服工单发送激活请求。",
    require_kyc: "需要进行企业主身份认证（KYC）。",
    needs_enterprise_license: "您需要拥有企业许可证。",
    marketplace_caution_message:
      "将市场模式设置为您的业务模型会深刻影响您的业务操作系统配置。例如，您需要为每个产品至少指定一个供应商，并且供应商拥有独立的定价和库存。客户无法购买没有供应商的产品。",
  },

  /** {@see BusinessModelView} **/
  business_model_view: {
    normal: {
      title: "普通商店",
      desc: "通常是中小企业、家庭作坊或代发货卖家——直接向客户销售产品或从批发商处购进产品再销售。",
    },

    dropshipping: {
      title: "代发货模式",
      desc: "将订单履约外包给第三方（如批发商或制造商），由其在幕后管理库存和产品。",
    },

    wholesaler: {
      title: "代发货供应商",
      desc: "项目 项目 项目 项目 项目 项目 订单 项目 到 项目 结束时间 项目. 其他 项目 项目 Selldone 项目 项目 项目 项目 产品 项目 项目 店铺 项目 项目 代发货 项目.",
    },
    marketplace: {
      title: "商城模式",
      desc: "在线商城将买家和卖家聚集在一个由单一公司拥有和管理的平台上。",
    },

    franchise: {
      title: "特许经营/联盟模式",
      desc: "特许经营是一种分销产品或服务的方式，涉及一个特许方建立品牌（特许经营），或以其自有品牌销售您的产品（联盟模式）。",
    },
  },

  /** {@see BPageMarketplace} **/
  marketplace: {
    vendor_wallets: "钱包",
    pricing_models: "定价",
    add_vendor: "添加供应商",
    requests: "请求",
  },

  price_input_type: {
    title: "价格输入类型",
    default: {
      title: "默认",
      desc: "选择一个值作为购物车中的数量。",
    },
    area: {
      title: "面积",
      desc: "输入宽度和长度，以计算数量。",
    },
    volume: {
      title: "体积",
      desc: "输入宽度、长度和高度，以计算数量。",
    },
    custom: {
      title: "自定义（通过输入表单）",
      desc: "无需数百种变体！为高度可定制的产品创建一个自定义成本计算表单。",
    },
  },

  /** {@see BPageShuttleVendors} **/
  vendors_list: {
    title: "我的供应商",
    message:
      "项目 项目 项目 列表视图 项目 项目 项目 账户. 全部 项目 账户 项目 项目 商店 项目 项目 Selldone 项目 项目 项目 项目 项目, 项目 项目 到 项目 项目 项目 项目.",
  },

  vendor_page: {},

  /** {@see BDomainsList} **/
  domains: {
    message:
      "将多个域名连接到您的业务操作系统，在同一处管理它们。您可以使用多域名功能为网站的每个部分（如博客和社区）创建专用域名，或者为您的合作伙伴使用不同的域名。",
  },

  /** {@see BNoteButton}   {@see BNoteDialog} **/
  notes: {
    add_action: "为您的团队添加备注",
    notifications: {
      success_add: "备注已成功添加。",
      success_delete: "备注已成功删除。",
    },
  },

  /** {@see BDashboardShopExternalServices} **/
  external_services: {
    title: "外部服务",
    subtitle:
      "在这里监控外部服务（如短信和电子邮件）的最新状态。",
  },

  /** {@see BPageShopSettingQuota**/
  shop_quota: {
    title: "使用配额",
    sub_title:
      "这是您商店的使用配额列表。您可以通过升级商店许可证来提高这些限制。如果超出限制，您可以向我们请求额外的每日配额。所有使用配额将每天重置。",
  },

  /** {@see WidgetAppCard} **/
  app_card: {
    category: "分类",
    installs: "安装量",
    actives: "活跃量",
    uninstalls: "卸载量",
    app_code: "应用程序代码",
    app_mode: "应用模式",
  },

  product_status: {
    open: {
      name: "激活",
      title: "激活 ╏ 在线和线下销售",
      description: "此产品可供在线订购。",
    },
    close: {
      name: "未激活",
      title: "未激活 |仅限线下销售",
      description: "该产品将无法在线订购。",
    },
    pending: {
      name: "待审核",
      title: "待审核",
      description: "需经市场审核后才能上线。",
    },
    rejected: {
      name: "已拒绝",
      title: "已拒绝",
      description: "该产品被市场拒绝。",
    },
    unlisted: {
      name: "项目",
      title: "项目",
      description:
        "项目 产品 项目 项目 项目 项目 项目 店铺, 项目 项目 项目 项目 链接.",
    },
  },

  /**
   * BDashboardShopFeedback
   */
  direct_feedback: {
    title: "发送直接请求",
    message:
      "项目 项目 项目 3 企业 项目 到 项目 项目 项目 项目 Selldone. 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目. 项目 项目 项目 更新 项目 项目 项目 时间 项目 项目.",
    expand_action: "填写请求...",
    input_label: "您的请求",
    to: {
      ceo: "发送给 CEO",
      team: "发送给团队",
    },
    placeholder: {
      ceo: "完全不必客气，我喜欢您直接、切中要点的请求。\n例如：我需要……",
      team: "请尽量礼貌对待他们。\n例如：我需要……",
    },
  },

  /**
   * BInventoryFilter
   */
  inventory_filter: {
    placeholder: "选择筛选器 *.*",
  },
  /**
   * BVendorInput
   */
  vendor_input: {
    placeholder: "筛选供应商...",
  },

  /**
   * BShopProductsImportProcessing
   */
  product_import_processing: {
    title: "正在处理导入的产品",
    message:
      "我们正在导入产品和图像，可能需要一些时间才能完成。",
  },

  /**
   * BOrderInput
   */
  order_input: {
    message:
      "此处显示的信息由客户提交，依据产品输入表单结构。",
  },

  /**
   * BPageConnectDashboard
   */
  shop_connect: {
    test: {
      title: "设置",
      subtitle: "外部服务报告",
      action: "测试连接",
      last_update: "最后更新者",
    },
    service_status: {
      title: "服务状态",
      syncing_message: "正在同步中...",
      action: "同步全部",
      connect_status: "连接状态",
      service_status: "服务状态",
      auto_confirm_enable_msg: "订单自动确认功能已启用。",
      auto_confirm_disable_msg:
        "订单自动确认功能未启用。",
      shipping_enable_msg:
        "运费将根据结账时提供的信息计算。",
    },
    detail: {
      title: "连接详情",
      auto_confirm_order: "自动确认订单",
      test_mode: "测试模式",
      status: {
        subtitle: "关于同步状态的总体信息。",
      },
      sync: {
        title: "同步详情",
        subtitle:
          "内部同步详情。此信息在同步过程成功完成后保存。",
        no_data: "无同步信息！",
      },
    },

    products: {
      title: "产品",
      subtitle:
        "列表视图 项目 项目 产品 从 {name}. 项目 项目 项目 产品 项目 项目 项目 姓名 项目 SKU. 项目 项目 配送服务 项目 已使用 项目 迁移, 项目 项目 项目 项目 产品 项目 项目 <b>项目</b> 项目 <b>项目</b>, 项目 产品 项目 项目 项目!",
      action: "获取产品",
      syncing_message: "正在同步中...",
    },

    logs: {
      title: "日志",
      subtitle:
        "最近7天内的所有日志列表。日志功能仅支持外部服务提供商。",
    },

    edit: {
      title: "添加新连接",

      service: {
        title: "服务",
        subtitle:
          "选择目标平台、代发货供应商或市场进行连接。",
      },
      test: {
        false_title: "同步全部",
        false_desc: "获取所有可用的产品、分类和客户。",
        true_title: "有限同步（推荐给初学者）",
        true_desc:
          "最多可获得 5 个产品、分类和客户。您可以随时在“连接”>“设置”中将其切换为完整模式。",
      },
      overwrite: {
        false_title: "存在时不更改",
        false_desc: "保留现有的产品和类别详细信息。",
        true_title: "覆盖",
        true_desc:
          "更新现有产品、变体和分类信息。",
      },
      migration_tips:
        "<b>提示：</b>如果您想测试功能，请选择<b>有限</b>选项。选择“全部同步”时，我们会从您连接的服务获取所有数据并下载相关图片，这将占用您的免费存储空间。此外，删除大量产品、分类和客户会比较困难！",
      add_action: "自动连接到",
      order: {
        title: "订单状态",
        subtitle:
          "配置连接服务的订单管理设置，包含订单接收、启用自动确认（如支持）以及配置运费计算。",
      },
      enable: {
        label: "连接状态",
        true_desc: "库存和订单将同步。",
      },
      confirm: {
        label: "自动确认订单",
        false_desc: "您应该手动确认订单。",
        true_desc:
          "已支付订单将自动批准。调试支付订单不会自动批准。",
        tips: "使用礼品卡、货到付款或调试模式下的支付网关支付的订单除外，不会自动确认。",
      },

      shipping: {
        label: "配送",
        tips: "此服务提供运费计算功能，您可以根据自己的喜好启用或禁用此功能。如果启用，则需要使用第三方服务的费用计算 API，这可能会导致结账页面上的价格更新延迟超过 300 毫秒。",
        false_title: "禁用",
        false_desc:
          "使用我在 店铺 > 物流 > 运输 中设置的运费计算，适用于所有产品，包括导入产品。",
        true_title: "计算运费",
        true_desc:
          "使用此服务提供的运费计算API。",
      },

      remove: {
        verify: "我确认删除此连接。",
        action: "删除连接",
      },
    },

    /**
     * BPageShopChannelConnect
     */
    list: {
      title: "连接操作系统",
      subtitle:
        "将您的业务操作系统连接到外部服务并在同一地方管理所有渠道。",
      action: "连接新服务",
      empty_message:
        "忘记代发货应用程序和插件吧！直连系统是跨平台订单管理的未来。",
      auto_confirm: "自动确认",
      shipping: "运输",
      syncing_now: "正在同步！",
      sync_not_started: "同步尚未开始！",
    },
  },

  /**
   * ConnectMode
   */
  connect_mode: {
    Migration: {
      title: "迁移",
      desc: "获取商品、分类、客户，用户删除本服务后，已获取的商品、分类、客户不会被删除。",
    },
    Dropshipping: {
      title: "代发货",
      desc: "获取产品、分类和订单。用户移除服务后，系统会删除产品。",
    },
    Marketplace: {
      title: "市场",
      desc: "仅同步库存并接收订单（产品将通过SKU关联）。",
    },
    Accounting: {
      title: "会计",
      desc: "发送订单和财务信息。",
    },
    Other: {
      title: "其他",
      desc: "其他服务。",
    },
  },

  /**
   * BPageShopPagesLandings
   */
  shop_landings: {
    title: "登陆页面",
    add_new_action: "添加新页面",
    subtitle:
      "使用多功能 AI 内联编辑器为您的品牌创建独特、响应迅速的自定义页面，并通过输入数据自动生成动态内容。",
    empty_message: "通过拖放设计自定义页面...",
  },

  /**
   * BPageShopPermissionStaff
   */
  shop_staff: {
    list: {
      title: "员工管理",
      subtitle:
        "被授权访问此商店仪表盘和管理部分的用户。",
    },
    pending: {
      title: "待处理",
      message: "显示待处理的邀请。",
    },
  },

  /**
   * BPageShopCommunityComments
   */
  community_comments: {
    title: "评论",
    subtitle: "这是社区评论的列表。",
    empty_msg: "目前尚未有任何评论...",
  },

  /**
   * BPageShopCommunityCategories
   */
  community_categories: {
    title: "分类",
    subtitle: "这是社区分类的列表。",
    new_category_action: "新建分类",
    empty_msg: "目前尚未创建任何类别...",
    filter: {
      delete: {
        title: "已删除",
        description: "显示已删除的类别。",
      },
    },
  },
  /**
   * BPageShopCommunityPosts
   */
  community_posts: {
    title: "帖子",
    subtitle: "这是社区帖子的列表。",
    filter: {
      deleted: {
        title: "已删除",
        description: "显示已删除的帖子。",
      },
      reported: {
        title: "已举报",
        description: "显示已举报的帖子。",
      },
    },
    empty_msg: "目前尚未创建任何帖子...",
    menu: {
      open_post: {
        title: "打开帖子",
        subtitle: "查看和编辑社区中的帖子。",
      },
      spam: {
        title: "报告并删除垃圾信息",
        subtitle: "批量删除帖子并封禁用户。",
      },
      delete: {
        title: "删除帖子",
        subtitle: "删除此帖子。",
      },
    },
  },

  /**
   * {@see BGoogleTagManager}
   */
  channel_google: {
    gtag: {
      title: "标签管理器",
      subtitle:
        "Google 项目 项目 项目 项目 项目 ROI 项目 项目 项目, 视频, 项目 项目 项目 项目 项目 应用. 项目 网站 标签 项目 项目 Google 标签 项目 项目, 简单的, 项目 项目 项目—无服务 代码 项目 项目.",
      tag_id: {
        label: "Google 标签 项目 ID",
      },
    },
    shopping: {
      title: "Google 项目",
      subtitle:
        "数据 项目 项目 项目 项目 项目 项目 项目 项目 项目 Google. 项目 项目 链接 到 项目 项目 全部 产品 项目 子类别 到 Google 项目.",
      tips: "项目 项目 项目 项目 项目 到 项目 项目 项目 项目 Google 广告.",
      link_message: "Google 产品 项目 URL",
    },
    console: {
      title: "搜索控制台",
      subtitle: `项目 项目 Meta 标签 到 项目 项目 项目 Google 项目 项目 项目.`,
      code: {
        label: "验证元标记",
        placeholder: "从 Google, 项目.项目. 项目9项目...",
      },
    },
    serp: {
      title: "Google SERP & 项目",
      subtitle:
        "项目 项目 项目 项目 项目 SEO 项目 数据 从 Google 项目 项目 项目 到 项目 项目 项目 项目 项目. 项目 项目 项目 项目 项目.",
    },
    serp_content: {
      title: "项目 到 Google 项目 项目",
      subtitle:
        "项目 项目 店铺 到 项目 项目 项目 项目 开始时间 项目 项目, 项目, 项目 其他 项目 SEO 工具 项目 Selldone.",
      tips: {
        title:
          "项目 到 项目 Selldone 项目 Google 项目 项目, 项目 项目 项目:",
        add_in_selldone: "添加、验证并将您的自定义域名设置为主要域名。",
        add_in_google: `项目 项目 项目 <b>{domain}</b> 项目 项目<a href="https://search.google.com/search-console" target="_blank"> <b>Google 项目 项目</b></a>.`,
      },
      action_custom_domain: "自定义域名",
      action_connect_now: "立即连接",
      action_remove_connection: "删除连接",
    },
  },

  /**
   * {@see BPageShopIncentivesCoupon}
   */
  cashback: {
    add_new: "添加新现金返还活动",
    title: "现金返还计划",
    boosted: "加倍返现 (2 倍)",
    min_purchase: "最低购买金额",
    only_first_order: "仅限首单",
    total_cashback: "返现总额",
    delete_alert: {
      title: "删除现金返还计划",
      message: "您确定要删除此现金返还计划吗？",
      action: "是的，立即删除",
    },
    notifications: {
      delete_success: "现金返还计划已成功删除。",
    },
  },
  /**
   * {@see BPageCashback}
   */
  shop_cashback: {
    title: "现金返还计划",
    up_to: "最高",
    menu: {
      back: "返现计划列表",
      dashboard: "仪表盘",
      orders: "订单",
      edit: "编辑",
    },
    /**
     * {@see BPageCashbackDashboard}
     */
    dashboard: {
      chart_amount_buy: {
        label: "购买",
        y: "购买金额{currency}",
      },
      chart_amount_cashback: {
        label: "现金返还",
        y: "返现金额 {currency}",
      },
      chart_used: {
        label: "使用次数",
        y: "次数",
      },
    },
    /**
     * {@see BPageCashbackOrders}
     */
    orders: {
      title: "现金返还订单",
      table: {
        amount_cashback: "返现金额",
        payment_status: "付款状态",
        date: "日期",
      },
    },
  },

  /**
   * {@see BCashbackAdd}
   */
  cashback_edit: {
    config: {
      subtitle: "在此设置返现百分比、限制和状态。",
    },
    percent_input: {
      title: "现金返还百分比",
      message: "输入现金返还百分比，从 1% 到 20%。",
    },
    currency_input: {
      message: "现金返还计划仅适用于此货币。",
    },
    limit_input: {
      title: "限制",
      hint: "输入最高返现金额。",
      zero_message: "输入0表示没有返现限制。",
    },
    duration: {
      title: "持续时间限制",
      subtitle: "设置返现活动的持续时间（可选）。",
    },
    start_input: {
      title: "开始日期",
      placeholder: "选择开始日期...",
    },
    end_input: {
      title: "结束日期",
      placeholder: "选择结束日期...",
    },
    design: {
      subtitle:
        "设置返现计划的标题和简短描述。这些信息将显示给客户。",
    },
    title_input: {
      title: "标题",
    },
    description_input: {
      title: "描述",
    },
    constraints: {
      subtitle: "设置现金返还计划的限制。",
    },
    min_purchase_input: {
      hint: "输入现金返还计划的最低购买金额。",
      title: "最低消费",
    },
    only_first_buy_input: {
      false_desc: "所有订单均可享受现金返还计划。",
      true_desc:
        "现金返还计划仅适用于首单。",
      true_title: "仅限首单",
      false_title: "所有订单",
    },
    qualify_input: {
      false_title: "所有客户",
      true_title: "合格客户",
      true_msg:
        "现金返还计划仅向符合条件的客户开放。",
    },
    club: {
      subtitle:
        "设置俱乐部的现金返还计划。现金返还计划仅适用于加入该俱乐部的客户。",
    },
    cluster: {
      subtitle:
        "通过将集群与现金返还计划关联，您可以更有效地管理它。",
    },
    notifications: {
      add: "现金返还计划添加成功。",
      edit: "现金返还计划更新成功。",
    },
    enable_input: {
      true_msg: "现金返还计划已激活，客户可使用。",
      false_msg:
        "现金返还计划已停用，客户无法使用。",
    },
    boosted_input: {
      false_title: "正常",
      true_title: "2 倍现金返还",
      true_msg:
        "现金返还计划处于双倍模式，客户将获得双倍现金返还。",
      false_msg:
        "现金返还计划处于正常模式，客户将获得正常现金返还。",
    },
  },

  /**
   * @see BOrderPaymentRowPayment
   */
  row_payment: {
    actions: {
      refund: {
        title: "退款支付",
        subtitle: "支持部分或全额退款。",
      },
      delivery: {
        title: "确认货到付款",
        subtitle: "您可以手动确认货到付款的交付。",
      },
    },
  },

  /**
   * @see BOrderPaymentActionsRefundDialog
   */
  payment_refund_dialog: {
    title: "退款付款",
    message:
      "出于安全考虑，仅对最近7天内支付的订单支持退款。",
    payment_amount: "付款金额",
    total_refund_amount: "已退款金额总计",
    can_refund: "可以退款",
    refund_amount: "退款金额",
    verify: {
      title: "确认退款",
      description:
        "我确认退款金额正确，并希望继续操作。",
    },
    action: "立即退款",
  },

  /**
   * @see BOrderPaymentActionsDeliveryDialog
   */
  payment_delivery_dialog: {
    title: "客户收货确认",
    message:
      "部分支付服务需要确认订单已送达客户。我们通常在订单履行的最后一步、收到客户收货确认时发送此确认。如果您需要手动执行此操作，可在此进行。",
    verify: {
      title: "确认收货",
      description:
        "我确认订单已经送达客户。",
    },
    action: "立即确认",
  },

  /**
   * @see BPageProductCrossSelling
   */
  product_cross_selling: {
    title: "交叉销售",
    add_new_actions: "添加新产品",
    subtitle:
      "在此部分，您可以为该商品页面添加和管理交叉销售产品。这些产品将作为建议向客户展示，以便与主商品一同购买。您还可以设置折扣以鼓励和激励附加购买。系统最多将为客户展示3个推荐商品。",
    dialog: {
      edit_title: "编辑交叉销售产品",
      add_title: "添加新的交叉销售产品",
      target: {
        title: "目标产品",
        subtitle:
          "选择您希望与此产品搭配推广的交叉销售产品。",
        select_products: "选择产品",
      },
      list: {
        title: "目标产品",
        subtitle: "该产品已被选为交叉销售促销产品。",
        manage_product: "管理产品",
      },
      discount: {
        title: "折扣与消息",
        subtitle:
          "您可以添加一段信息并提供折扣，激励客户购买选中的附加商品。这些激励措施有助于促进销售，提升整体购物体验。",
        amount_input: {
          message:
            "该折扣百分比将在所有现有折扣之后，应用于产品价格。",
        },
        mismatch_type_warning:
          "折扣不能应用于主要产品类型之外的商品，因为源商品和目标商品将无法放入同一个购物车中。",
        not_support_subscription_type_warning:
          "无法为交叉销售订阅商品设置折扣，因为订阅定价计划无法动态调整。",
        message_input: {
          message:
            "撰写一条有吸引力且引人注目的标题以抓住客户的注意力。",
          placeholder:
            "套装优惠：使用我们精心挑选的组合，尽享更多优惠！",
        },
      },
      action: {
        title: "操作",
        subtitle:
          '在此处修改交叉销售产品的操作。如果您的产品需要输入自定义信息(例如通过估价表)，请不要选择“添加到购物车”作为操作，因为这可能会导致错误。',
      },
    },
  },
  /**
   * @see BProductVariantsBulkAdd
   */
  product_variants_bulk_add: {
    title: "项目 变体 项目 项目",
    variants: {
      title: "项目 选项",
      subtitle:
        "项目 项目 到 项目 项目 选项. 项目 项目, 项目 项目 项目 项目 项目 变体 到 创建 项目.",
    },
    values: {
      title: "项目 项目",
      subtitle: "项目 项目 项目 项目 项目 项目 项目 项目 项目.",
      prevent_duplicates_tips:
        "<b>备注:</b> 项目 项目 项目 项目 项目 变体 到 项目 项目.",
    },
    inventory: {
      title: "项目 库存",
      subtitle: "项目 项目 项目 库存 次数 项目 项目 新建 变体.",
    },
    add_variants_action: "创建 变体",
  },

  /**
   * @see CrossSellActionType
   */
  CrossSellActionType: {
    AddToCart: {
      title: "添加到购物车",
      description:
        "直接显示“加入购物车”按钮。注意，此操作不适用于订阅类产品。",
    },
    ViewProduct: {
      title: "查看产品",
      description:
        "显示“查看更多”按钮，点击后在新窗口打开产品页面，引导客户查看详情。",
    },
  },

  /**
   * @see BProductFlow
   */

  product_flow: {
    title: "购买流程",
    subtitle: "这是您的产品的购买流程和健康检查。",

    /**
     * @see BProductFlowRowConnect
     */
    connect: {
      subtitle: "该产品已通过<b>{name}</b>添加。",
      enable_msg: "此外部服务连接已启用。",
      disable_msg: "此外部服务连接已禁用。",
      has_shipping_msg:
        "{name} 支持配送。因此，您可以选择在结帐页面上启用 {name} 的自动运费计算。",
    },
    /**
     * @see BProductFlowRowHealth
     */
    health: {
      title: "产品健康状态",
      available_in_stock_msg: "产品有现货。",
      out_of_stock_msg: "产品缺货。",
      file_count_msg:
        "该产品已上传了 {files_count} 个文件，大小 {files_size} 。",
      no_file_uploaded_msg: "尚未上传任何文件。",
      no_image_uploaded_msg:
        "上传产品图片以使其更具吸引力。",
    },
    /**
     * @see BProductFlowErrorsVendor
     */
    vendor_errors: {
      title: "缺失供应商",
      subtitle:
        "此产品目前没有关联供应商。要使产品可以在市场上出售，它必须至少有一个供应商。",
      manage_vendors: "管理供应商",
    },

    /**
     * @see BProductFlowErrorsFile
     */
    file_errors: {
      title: "缺失文件",
      subtitle:
        "目前尚未上传该产品的文件。请上传文件以继续。",
      manage_files: "管理文件",
    },

    /**
     * @see BProductFlowRowPricing
     */
    pricing: {
      title: "价格",
      no_product_price_msg: "默认产品价格尚未设定！",
      listing_pricing_msg: "列表定价：",
      has_valuation_msg: "产品包含估价。",
      subscription_pricing_msg:
        "该产品有{count}个订阅定价计划。",
      has_no_subscription_pricing_msg:
        "该产品没有订阅定价计划。",
    },
    /**
     * @see BProductFlowErrorsSubscription
     */
    subscription_errors: {
      title: "缺少订阅定价计划",
      subtitle:
        "此产品没有订阅定价方案。您需要添加至少一个订阅定价方案，才能使此产品可供订阅购买。",
      pricing_plans: "定价计划",
    },

    /**
     * @see BProductFlowRowLocation
     */
    location: {
      title: "销售地点限制 ● {status}",
      status: {
        has_restriction: "在 {count} 个国家/地区有售",
        no_restriction: "无限制",
      },
      available_countries_msg:
        "全球购物仅限 {count} 个国家/地区。这些国家/地区是 {countries}。",
      disable_for_all_countries_msg:
        "您的商店 > 地区设置中，购物功能已对所有国家禁用。",
      location_is_not_in_permitted_shop_locations_msg:
        "您设置了 {country} 作为销售地区，但商店级别未允许该国家。请检查您的商店设置。",
      shop_locations: "商店位置",
      product_locations: "产品位置",
    },

    /**
     * @see BProductFlowErrorsLocation
     */
    location_errors: {
      title: "可用位置错误",
      no_location_error_subtitle:
        "您已启用产品购买的地区限制，但当前该限制下没有列出任何国家。因此，任何人都无法购买此产品。",
      invalid_location_error_subtitle:
        "您的产品地区限制设置存在错误：部分列出的地区没有关联任何邮政编码。导致用户无法选择邮政编码，产品无法购买。",

      manage_locations: "管理位置",
    },

    /**
     * @see BProductFlowRowTax
     */
    tax: {
      title: "订阅税",
      default_shop: "默认店铺税",
      tax_profiles: "税务配置文件",
      description: {
        subscription_tax_msg:
          "我们只能在付款创建步骤时应用税费。",
        dedicated: "专用",
        is_disabled: "此税务配置文件已被禁用！",
        tax_is_based_on_location: "税费：基于地点",
        shipping_tax_is_based_on_location: "运费：基于地点",
        included_in_price: "包含在价格中。",
      },
    },

    /**
     * @see BProductFlowRowVendor
     */
    vendor: {
      vendor_owner_msg: "该产品属于<b>{vendor}</b> 。",
      has_vendors_msg: "此产品有 {count} 个供应商。",
      no_vendor_msg:
        "您尚未为该产品指定供应商，因此客户无法购买该产品。",
      add_vendors: "添加供应商",
    },
  },

  /**
   * @see BPageProductTemplate
   */
  product_template: {
    title: "产品页面模板",
    subtitle:
      "您可以在产品页面中嵌入一个页面以增强展示效果。最佳做法是为每个产品类别创建具有透明背景和1至3个部分的页面，然后将同一页面分配给多个产品，以实现统一且吸引人的展示。",
    edit_page: "编辑页面",
    list_of_pages: "页面列表",
  },
  /**
   * @see BPageProductEmbed
   */
  product_embed: {
    subtitle:
      "您只需复制并粘贴我们提供的代码，即可轻松地将产品或产品列表嵌入到您的博客或其他网页中。尽管此功能仍处于早期阶段，但我们正在积极努力扩展其功能，使其超越目前其他地方提供的功能。虽然它目前提供的功能有限，但我们计划在未来推出更多模板和自定义选项。",
    card: {
      title: "最小",
      description:
        "生成 HTML 代码以在其他平台和 HTML 页面中添加产品卡。",
    },
    iframe: {
      title: "内嵌框架",
      description:
        "项目 项目 内嵌框架 代码 到 项目 项目 产品 许可证详情 项目 项目 项目 项目.",
    },
  },

  /**
   * @see BPermissionStaffAddDialog
   */
  permission_staff_add: {
    title_new: "新员工",
    title_edit: "编辑员工",

    staff: {
      title: "添加员工和访问权限",
      subtitle:
        "所有拥有员工访问权限的用户都可以登录您的后台并查看财务信息。若要添加访问权限有限的用户，请定义角色。",
      go_to_roles: "前往角色设置",
    },
    access: {
      customization_tips:
        "<b>自定义：</b>单击每个项目可自定义默认的读/写访问权限。每行代表与主商店仪表板相对应的访问级别。",
      simplify_tips:
        "<b>重要提示！</b>我们将访问控制从 300 多个级别简化到 10 个级别以下。更详细和最新的访问级别将在文档中发布。",
      multi_permission_tips:
        "<b>自定义限制？</b>您可以为一个用户添加更多访问权限，因此在添加第一个访问权限后，按照相同步骤创建其他访问权限。",
      view_data: "查看数据",
      apply_changes: "应用更改",
    },

    inputs: {
      email: {
        placeholder: "电子邮件",
        label: "用户电子邮件地址",
      },
      level: {
        label: "访问权限",
        placeholder: "选择一个级别...",
      },
    },

    actions: {
      add: "添加员工",
    },
    notifications: {
      add_success: {
        title: "已授予访问权限",
        message: "已成功添加新访问权限。",
      },
      update_success: {
        title: "访问权限已更新",
        message: "权限已成功更新。",
      },
    },
  },

  /**
   * @see BCategoryEngineEditor
   */
  category_engine_editor: {
    title: "额外产品列表",
    subtitle:
      "展示来自多个类别的产品。您可以选择多个类别来展示产品，或通过标签筛选产品。",
    aut_add_sub_categories_tips:
      "点击下面的按钮，您可以自动将所有子类别添加到当前类别中。",
    inputs: {
      categories: {
        label: "分类",
        messages: "将显示这些分类中的产品。",
        placeholder: "选择分类...",
      },
      tags: {
        label: "产品标签",
        messages: "带有这些标签的产品将会显示。",
        placeholder: "项目 标签 项目 项目 项目 项目. 项目. 新建 项目",
      },
    },
    actions: {
      save_engine: "保存引擎",
      auto_add_subcategories: "自动添加子类别",
    },
  },

  /**
   * @see SProductsSortView
   */
  products_sort_view: {
    search_tips: {
      title: "搜索提示",
      normal:
        "<b>常规搜索：</b>按标题、MPN、SKU、品牌或标签搜索。",
      product:
        '<b>精确产品 ID：</b>使用 P+产品 ID 查找特定产品，例如<b class="text-green">P</b> <i class="text-yellow">360</i> 。',
      quotes:
        '<b>精确短语：</b>使用引号搜索精确短语，例如<b class="text-green">“</b><i class="text-yellow">此处输入您的文本</i><b class="text-green">”</b> 。',
      tax: '<b>TAX 产品概况: </b>项目 项目 产品 项目 项目 项目 TAX 产品概况 项目 "TAX:", 项目.项目., <b class="text-green">TAX:</b><i class="text-yellow">TAX 产品概况 姓名</i>.',
      new_products:
        '<b>新产品：</b>查找特定日期范围内添加的产品，例如， <b class="text-green">new~</b> <i class="text-yellow">2023-08-10</i> <b class="text-green">~</b> <i class="text-yellow">2023-08-20</i> 。',
    },
  },

  /**
   * @see LAugmentForm
   */
  augment_form: {
    title: "增强功能",
    subtitle:
      "输入 项目 项目 项目 项目 项目 项目 项目 项目 项目 值 项目 项目 项目 内容. 项目 项目 项目 最高 32 项目.",
    add_caption: "添加新项目",
    add_sub_caption: "项目 自定义 项目 项目.",
    add_dialog: {
      title: "选择输入类型",
      html: {
        title: "文本和 HTML",
        subtitle: "该项目的值可以指定为文本或 HTML。",
      },
      image: {
        title: "图片",
        subtitle: "您可以上传图片。",
      },
    },
    help_dialog: {
      title: "如何使用动态内容",
      how_it_works_tips:
        "在登陆页中，您可以灵活地为文本和图像指定动态占位符。这些占位符在根据上下文自定义内容方面发挥着重要作用。这些占位符的动态特性允许它们填充增强值，这些值可能因不同因素而异。例如，每个产品或类别的增强值可能不同。当您拥有具有不同属性的各种项目时，此功能的真正优势就会发挥作用。您可以有效地利用这些动态占位符来个性化和增强每个项目的显示，从而在您的着陆页上创建独特的交互式体验。",
      assign_tips:
        "要为图像分配动态值，请单击位于该部分左侧的供给器按钮。",
      set_dynamic_image_tips:
        "您现在可以修改图像 URL 并为其分配动态值。",
      enter_values_tips:
        "对于每种产品，您都可以分配专用的键值对。",
      result_tips:
        "这是页面的最终结果，其中占位符已被增强值替换。",
    },
  },

  /**
   * @see BLogisticProfileEditor
   */
  logistic_profile_editor: {
    languages: {
      title: "多语言",
      subtitle:
        "这是内容语言列表。您可以为每种语言设置不同的物流配置文件内容。",
      add_caption: "添加新文章",
      no_more_language: "没有更多语言了！",
    },
    content: {
      title: "内容",
      subtitle:
        "您可以为物流配置文件自定义多种语言的内容。",

      language_input: "当前文章语言",
      delete_article: "删除文章",
      menu_tooltip: "自动翻译/删除文章",
    },
    translate_to: "翻译为",
    notifications: {
      translate: {
        message: "文章翻译成功完成。",
      },
      save_article: {
        message: "文章已成功保存。",
      },
      delete_article: {
        message: "文章已成功删除。",
      },
    },
    delete_dialog: {
      message: "您确定要永久删除该篇文章吗？",
      action: "是的，立即删除",
    },
  },

  /**
   * @see LogisticProfilePage_Products
   */
  logistic_profile_products: {
    title: "产品",
    subtitle: "与此配置文件相关的产品列表。",
  },
  /**
   * @see LogisticProfilePage_Setting
   */
  logistic_profile_setting: {
    title: "基本信息",
    inputs: {
      name: {
        message:
          "此名称仅向您显示，不会向公众透露。",
      },
      accept_delete: {
        true_description:
          "此操作将删除所有文章和配置文件关联。",
        true_title: "我确认删除此连接。",
      },
    },
    actions: {
      remove: "移除配置文件及关联",
    },
  },

  /**
   * @see BPageShopLogisticProfiles
   */
  shop_logistic_profiles: {
    title: "物流配置文件",
    add_caption: "添加新配置文件",
    subtitle:
      "您可以在此处创建和编辑产品的保修和退货政策，并将其分配给任何产品。您可以为不同类型的产品定义不同的保修政策。",
    add_dialog: {
      title: "创建新的物流配置文件",
      config: {
        title: "基本信息",
        subtitle:
          "选择配置文件类型。它可以是指南、保修或多种产品之间共享的任何其他内容和材料。",
      },
      article: {
        title: "文章",
        subtitle:
          "创建此物流配置文件后，您可以添加更多语言版本。",
      },
      inputs: {
        name: {
          message:
            "此名称仅向您显示，不会向公众透露。",
          placeholder: "输入配置文件的名称...",
        },
      },
    },
  },

  /**
   * @see BPageShopLogisticIncludes
   */
  shop_logistic_includes: {
    title: "包含物品管理",
    add_caption: "添加新物品",
    subtitle:
      "您可以在此处管理产品中包含的物品。为确保您的商店外观完美无瑕，请在所有产品中一致使用具有类似图像模式（例如线框）的物品。",
    empty_list_msg: "包含物品的清单...",
    notifications: {
      delete: {
        message: "该物品已被删除。",
      },
    },
    delete_dialog: {
      title: "删除包含的物品",
      message:
        "您确定要永久删除此物品吗？请注意，此物品也会从所有相关产品中删除！",
      action: "是的，立即删除",
    },
    actions: {
      edit_linked_page: "编辑链接页面",
    },
  },

  /**
   * @see BIncludeItemAdd
   */
  include_item_add: {
    dialog_title_edit: "编辑包含的物品",
    dialog_title_add: "创建新的包含物品",

    title: "包含物品",
    subtitle:
      "选择一个简短的标题，最好最多包含 2 到 3 个单词。使用方形图片，因为我们会自动将上传的图片调整为 256x256 方形格式。为了在所有模板中获得最佳外观，请使用具有透明背景的简约图片，并在整个产品中保持统一的图案。",
    inputs: {
      title: {
        placeholder: "产品页面上显示的简洁标题...",
      },
      code: {
        placeholder: "项目 代码, 项目. 手机_项目_项目",
        hint: "使用此代码可以简化查找物品的搜索过程。",
      },
      description: {
        placeholder: "关于此物品的简短描述...",
        hint: "描述将用于SEO，并可能在产品页面某些自定义布局中向用户显示。",
      },
      image: {
        message: "最大图片大小：1MB",
      },
      path: {
        label: "页面路径",
      },
    },
    mode: {
      no_link: {
        title: "没有链接",
      },
      external_link: {
        title: "外部链接",
        description: "设置一个指向外部网址的链接。",
        tips: "您可以为该物品附加任何URL。当用户点击产品页面上的该物品时，会被重定向到该链接。",
      },
      internal_link: {
        title: "内部链接",
        description:
          "通过为该项目提供的增强数据创建动态页面。",
        tips: "项目 项目 链接 项目 落地页 项目 项目 项目 产品概况 项目 项目 项目 自定义 路径 项目 项目 内容 项目 项目. Selldone 项目 项目 项目 项目 链接 项目 项目 产品.",
      },
    },
    notifications: {
      add: {
        message: "包含的物品已成功添加。",
      },
      edit: {
        message: "所包含的物品已成功更新。",
      },
    },
  },
  /**
   * @see BPageShopLogisticReturns
   */
  shop_logistic_returns: {
    title: "退货订单",
    subtitle:
      "您的客户可以退回他们的实物订单，您可以在订单处理页面查看退货请求或在此处访问完整的退货订单列表。",
  },
  /**
   * @see OReferralFees
   */
  referral_fees: {
    title: "佣金",
    subtitle:
      "您从推荐人那里获得的所有佣金的列表。佣金最多需要 30 天才能获得批准并转入您的钱包。",
  },
  /**
   * @see OReferralWallets
   */
  referral_wallets: {
    title: "钱包",
    subtitle:
      "项目 项目 项目 项目 项目 佣金 项目 项目 项目 项目. 项目 项目 转账 项目 佣金 项目 到 项目 银行 账户 项目 项目 Selldone 钱包.",
    no_commission_yet: "您尚未收到任何佣金。",
    no_wallet: "没有钱包！",

    withdraw_dialog: {
      title: "提现佣金",

      need_bank_info_message: "请先输入您的银行信息。",

      to_wallet: {
        title: "转入钱包",
        subtitle:
          "项目 项目 项目, 项目 项目 转账 佣金 项目 到 项目 Selldone 钱包. 项目 项目 项目 项目 项目 钱包 项目 已连接 项目 项目 礼物 钱包, 项目 项目 项目 项目 项目 项目 项目 货币.",
      },
      to_bank: {
        title: "到银行",
        subtitle:
          "项目 项目 项目, 项目 项目 转账 佣金 项目 到 项目 Selldone 钱包. 项目 项目 项目 项目 项目 钱包 项目 已连接 项目 项目 礼物 钱包, 项目 项目 项目 项目 项目 项目 项目 货币.",
      },
      inputs: {
        verify_to_wallet: {
          true_description:
            "项目 项目 到 转账 项目 佣金 到 项目 Selldone 钱包.",
        },
        verify_to_bank: {
          true_description:
            "我确认我的银行信息，且想将佣金转入我的银行账户。",
        },
      },
      actions: {
        withdraw_to_wallet: "提现至钱包",
        withdraw_to_bank: "提现至银行",
      },
    },
    notifications: {
      request_transfer_to_bank_success:
        "您的请求已成功收到，我们将进行审核。",
    },
  },

  /**
   * @see OPageMonetizeReferral
   */
  monetize_referral: {
    copy_box: {
      message: "项目 项目 项目 <b>?项目={code}</b> 到 项目 Selldone URL.",
    },
    intro: {
      title: "项目 项目 Selldone 联盟 项目",
      message:
        "项目 Selldone 联盟 项目 项目 简单的 项目 项目, 项目 项目 项目 到 项目 项目. 项目 项目 项目 联盟 链接 到 项目 新建 用户数 到 Selldone, 项目 项目 项目 项目 佣金 从 项目 交易 项目 项目—项目. 项目 包括 项目 从 订阅, 服务 项目, 店铺 项目, 项目 全部 其他 项目 项目. 开始时间 项目 项目 项目 项目 项目 项目 项目 项目 限制 项目 时间 项目 项目. 项目 项目 项目 项目 项目 项目 项目 项目 项目 项目!",
      why_join_selldone_affiliate: "为什么这是一个独特的机会？",
      reasons: [
        "收益永久有效！",
        "项目 全部 订阅 项目 交易 项目. 项目 项目 支付 项目 项目 用户 项目 Selldone.",
        "通过您的链接注册的用户将获得价值99美元的免费代金券。",
        "当您的等级提升后，您将按新费率从所有之前推荐的用户获得收益。",
      ],
    },
  },

  /**
   * @see LMenuLeftAssets
   */
  l_menu_left_assets: {
    no_asset_uploaded: "无服务 项目 项目 项目.",
  },

  /**
   * @see LMenuTopHome
   */
  l_menu_top_home: {
    hot_keys: "项目",
    click_to_view_all: "项目 到 预览 全部...",
    clone_tooltip: {
      title: "项目 风格",
      subtitle:
        "项目 项目 项目 到 项目 项目 项目 项目 项目, 项目, 项目, 项目 项目. 项目 项目 项目 到 项目 项目:",
      step_1:
        "项目 项目 项目 项目 项目 项目 项目 项目 项目, 项目, 项目 图片; 项目 项目 项目 编辑 到 项目 项目.",
      step_2: "项目 项目 项目 项目 项目 风格 项目 项目 到 项目.",
      step_3:
        "项目 项目 项目 编辑 返回 到 项目 项目; 项目 项目 项目 项目 项目 项目 项目 到 项目 项目 项目 风格.",
    },
    show_side_menu_tooltip: {
      subtitle:
        "项目 项目 项目 项目 项目 项目 菜单, 项目 包括 全部 项目 子类别 项目 项目 项目 项目.",
    },
    sort_tooltip: {
      subtitle:
        "启用 项目 项目 到 项目 项目 项目 项目 项目 项目 项目 项目.",
    },
    edit_mode_tooltip: {
      title: "编辑 / 预览 项目",
      edit_mode_title: "编辑 项目",
      edit_mode_msg: "全部 项目 工具 项目 项目 项目.",
      view_mode_title: "预览 项目",
      view_mode_msg:
        "预览 项目 项目 项目 用户数 项目 项目 项目 项目 项目 项目 项目 工具 项目 项目 项目 项目.",
    },
    repository_tooltip: {
      title: "项目 项目",
      subtitle:
        "项目 项目 项目 项目 项目 项目. 项目 项目 项目 项目 项目 项目 项目 项目 有库存的 项目 项目 项目 菜单, 项目 项目 项目 项目 项目 项目 项目.",
    },
    live_view: {
      title: "正式环境 预览",
      subtitle: "项目 项目 项目 项目 项目 项目 编辑 项目 项目.",
    },
    hotkeys_dialog: {
      title: "项目 项目",
      augment_tips:
        "项目 项目 项目 项目 内容 项目 项目 项目 项目 项目 项目 项目 <b>项目</b> 项目. 项目 项目 已使用 项目 自定义 项目 页面 项目 项目 <b>产品</b>, <b>子类别</b>, 项目 <b>项目 个</b>. 到 项目 项目 图片 到 项目 项目, 项目 项目 <b>项目</b> 项目 项目 <b>项目 项目</b> 项目 项目 图片.",
    },
    hotkeys: {
      ctrl_b: "项目 项目 项目/项目 项目 项目 项目 | <b>项目 项目 项目</b>",
      ctrl_i: "项目 项目 项目/项目 项目 项目 项目 | <i>项目 项目 项目</i>",
      ctrl_l:
        "项目 项目 项目/项目 项目 项目 项目 | <s>项目 项目 项目</s>",
      ctrl_u: "项目 项目 项目/项目 项目 项目 项目 | <u>项目 项目</u>",
      ctrl_1:
        "项目 项目 项目 项目 项目 项目 | <small>项目 项目 项目</small>",
      ctrl_2: "项目 项目 项目 项目 项目 项目 | <big>项目 项目 项目</big>",
      ctrl_r: "移除 全部 项目 从 项目 项目 | 项目 全部 项目",
      ctrl_s: "保存 项目 项目",
      tab: "项目 项目 项目 项目",
      ctrl_e: "项目 项目 项目 项目 风格 项目",
    },
  },

  /**
   * @see LPageEditorRepository
   */
  l_page_editor_repository: {
    title: "项目 & 项目",
    subtitle: "项目 项目",
    add_dialog: {
      title: "项目 自定义 项目",
      configuration: {
        title: "编辑",
        subtitle:
          "项目 项目 保存 项目 项目 项目 项目 项目 项目 项目 项目 项目. 项目 项目 项目 项目 项目 项目 到 全部 项目 项目 项目 店铺.",
      },
      image: {
        title: "图片",
        subtitle: "公开 图片 项目 项目 项目 列表视图.",
      },
      code: {
        title: "代码",
        subtitle:
          "项目 项目 项目 项目 项目 项目 项目 代码 从 项目 项目 项目 项目 项目 项目 项目 项目.",
      },
      inputs: {
        title: {
          label: "标题",
          message: "项目 项目 项目 公开 标题.",
        },
        tags: {
          label: "标签",
          message: "已使用 项目 项目 项目 项目 项目.",
        },
        section: {
          message: "项目 项目 项目 从 项目 项目 项目.",
        },
      },
    },
  },

  /**
   * @see BPageMarketplaceVendors
   */
  marketplace_vendors: {
    title: "项目 列表视图",
    subtitle:
      "项目 项目 项目, 项目 项目 项目 到 产品 项目 项目 产品 仪表盘 > 项目.",
    add_new_vendor_action: "项目 新建 项目",
    status_tooltip: {
      title: "项目 状态",
      ACCEPTED: "项目 项目 项目 访问权限 到 项目 项目.",
      REJECTED: "项目 项目 项目 项目 项目 已拒绝.",
      PENDING: "项目 项目 项目 等待中 项目 项目 从 项目 项目.",
    },
    number_of_products: "项目 项目 产品",
    invited: "项目",
    no_pricing: "无服务 定价",
    no_pricing_tooltip: {
      title: "默认 定价 计划",
      subtitle: "项目 项目 项目 默认 定价 项目 项目 项目 项目.",
    },
    updated_products_tooltip: {
      title: "产品 项目 项目 项目 项目 24 项目",
    },
    added_products_tooltip: {
      title: "产品 项目 项目 项目 项目 24 项目",
    },
    access_tooltip: {
      title: "项目 访问权限",
      subtitle:
        "项目 项目 项目 访问权限 到 项目 项目. 项目 项目 编辑 项目 项目 项目 > 访问权限 项目.",
    },
    reject_by_user_tooltip: {
      title: "已拒绝 项目 用户",
      subtitle:
        "项目 用户 已拒绝 项目 项目 到 项目 项目 项目 项目 访问权限 项目 项目.",
    },
    download_all_vendors: "项目 全部 项目",
    bulk_import: "项目 导入 (项目)",
  },

  /**
   * @see BShopLicenseNeedUpdateOverlay
   */
  shop_license_need_update_overlay: {
    title: "许可证 项目 项目!",
    subtitle:
      "项目 项目 许可证 项目 项目 项目 项目 项目 项目 项目 项目 企业 项目. 项目 项目 项目 许可证 到 项目 项目 计划.",
  },

  /**
   * {@see BOrderChatBox}
   */
  b_order_chat_box: {
    title: "项目 操作",
    subtitle:
      "项目 项目 已发送 项目 状态 更新 电子邮件 到 项目 项目 项目 项目 项目 项目. 项目, 项目 项目 项目 项目 项目 项目 到 项目, 项目 项目 项目 项目 到 项目 项目 项目 时间.",
    send_update_email_action: "已发送 更新 电子邮件",
    add_template_action: "项目 信息 模板",

    notifications: {
      add_chat_success_message: "信息 项目 项目 项目 项目.",
    },

    send_update_email: {
      title: "订单 更新 电子邮件",
      need_set_service_alert: {
        message:
          "项目 项目 项目 电子邮件 服务 服务商 到 项目 项目 电子邮件 到 项目 已发送.",
        action: "项目 到 编辑",
      },
      send_action: "已发送 更新 电子邮件",

      notifications: {
        send_success_message: "电子邮件 项目 项目 已发送 项目.",
      },
    },
    add_template: {
      edit_title: "编辑 信息 模板",
      add_title: "项目 信息 模板",
      message:
        "项目 项目 项目 项目 标题 项目 信息 项目 项目. 项目 标题 项目 项目 已使用 项目 项目 项目 项目 项目 项目 已发送 到 项目 项目.",

      save_action: "保存 模板",
      add_action: "项目 模板",

      notifications: {
        save_success_message: "模板 项目 项目 项目 项目.",
      },

      inputs: {
        title: {
          label: "模板 标题",
          placeholder: "项目 项目 项目 标题...",
        },
        body: {
          label: "模板 信息",
          placeholder: "项目 项目 信息 项目...",
          messages:
            "项目 项目 项目 项目 项目 项目 {order_id} 项目 {buyer_name}.",
        },
      },
    },
  },

  /**
   * {@see BOrderShare}
   */
  b_order_share: {
    title: "订单 链接",
    subtitle: "项目 项目 项目 项目 订单 链接 项目 项目 项目.",
    guest_checkout_message:
      "项目 项目 项目 项目 预览 项目 订单 项目 项目 项目 项目.项目, 项目 项目 项目 项目 项目 项目 项目 项目 项目 到 项目 项目 订单 许可证详情, 项目 项目 创建 项目 项目 链接 项目 项目.",
    authentication: "项目",
    guest: "项目",
    click_to_create: "项目 到 创建...",
    valid_for_30_days: "项目 项目 30 营业日",
    notifications: {
      secure_link_created: "项目 链接 项目 项目 项目 项目.",
    },
  },

  /**
   * {@see BPageShopCrmReviews}
   */
  shop_reviews: {
    title: "条评价 项目",
    add_source_action: "项目 条评价 项目",
    subtitle:
      "项目 项目 项目 项目 到 项目 项目 项目 条评价 项目 项目 企业 从 项目 喜欢 Facebook, Google, 项目 更多的. 项目 项目 项目 顾客 到 项目 条评价 项目 项目 项目 项目 项目. 项目 项目 项目 项目 项目 条评价 项目 项目 落地页 页面 项目 产品 页面.",
  },

  /**
   * {@see BPageShopLogisticPropertySets}
   */
  shop_logistic_property_set: {
    add_caption: "项目 新建 项目 项目",
    title: "项目 项目",
    subtitle:
      "项目 项目 创建 项目 项目 项目 项目 项目. 项目 项目 项目 已使用 到 项目 项目 项目 项目 产品 项目 配送服务. 项目 项目 项目 项目 项目 项目 到 产品 项目 项目 产品 仪表盘 > 编辑.",
  },

  /**
   * {@see BProductProfilePropertySet}
   */
  product_property_set: {
    profile: {
      title: "项目 项目 - 自定义 变体",
      subtitle:
        "项目 项目 项目 项目 项目 项目 项目 项目 产品, 项目 项目 默认 项目.",
    },

    subtitle:
      "项目 项目 项目 项目 项目, 项目, 项目 项目 订单 项目. 项目 产品 项目 项目 变体 项目 项目 项目 项目 默认 项目, 项目 项目 项目 自定义 变体 项目 到 项目 产品. 项目 项目 项目 项目 项目 项目 物流 > 项目 项目 项目 项目 项目 项目 到 项目 项目 项目 产品 项目 项目.",
    select_property_set: "项目 项目 项目",
    add_property_set: "项目 项目 项目",
  },

  /** {@see BPageShopLogisticInventory} **/
  transportation_boxes: {
    title: "项目",
    add_action: "项目 项目",
    subtitle:
      "创建 项目 项目 项目 到 项目 项目 标签 购买 项目 项目 项目 发货中 项目. 项目 项目 项目 订单, 项目 项目 项目 项目 项目 项目 项目 项目 项目.",
    empty: "无服务 项目 项目. 项目 “项目 项目”.",
    edit: "编辑 项目",
    new: "新建 项目",
    default_weight: "默认 重量",
    updated: "项目 项目.",
    created: "项目 项目.",
    deleted: "项目 已删除.",
  },

  /** {@see BBoxInput} **/
  transportation_boxes_input: {
    select_box: "项目 项目 项目",
    define_package: "项目 项目 项目",
    define_package_hint: "创建 项目 编辑 项目 项目 项目 项目",
  },























  /** {@see BPageShopListing} **/
  listing:{
    name:"项目",
    message:"创建 项目 项目, 项目 项目 项目 项目 类型 项目 项目—项目, 项目, 项目, 配送服务, 项目 更多的."
  },

  shop_listing: {
    name: "项目",
    message:
      "创建 项目 项目, 项目 项目 项目 项目 类型 项目 项目—项目, 项目, 项目, 配送服务, 项目 更多的.",

    items: {
      title: "个",
      sub_title:
        "创建, 编辑, 项目 项目 项目 个. 项目 状态, 定价, 联系方式 信息, 项目 项目.",

      empty_title: "无服务 个 项目",
      empty_subtitle:
        "创建 项目 项目 项目 产品 到 开始时间 项目 项目 项目.",

      add_title: "项目 产品",
      edit_title: "编辑 产品",

      price_to: "价格 到",
      price_unit: "价格 单位",
      is_featured: "项目",

      meta_json: "Meta JSON",
      links_json: "链接 JSON",
      opening_hours_json: "项目 项目 JSON",

      delete_title: "删除 产品",
      delete_message: "项目 项目 项目 项目 项目 到 删除 项目 产品?",
      delete_success: "商品已成功删除。",
      restore_success: "产品 项目 项目.",

      opening_hours:"项目 项目",
      form_fields:"项目 项目",

      company: "商户",
      badges: "徽章",

    },

    categories: {
      title: "子类别",
      sub_title:
        "项目 项目 项目 项目 子类别 项目 项目. 项目 项目 项目 项目 项目.",

      empty_title: "无服务 子类别 项目",
      empty_subtitle:
        "创建 子类别 到 项目 项目 项目 项目 项目 项目.",

      add_title: "添加分类",
      edit_title: "编辑分类",

      parent_filter: "筛选 项目 项目",
      parent: "上级分类",

      price_format: "价格 项目",
      icon: "图标",
      design_id: "设计 ID",

      delete_title: "删除分类",
      delete_message: "项目 项目 项目 项目 项目 到 删除 项目 类别?",
      delete_success: "类别 已删除 项目.",
      form_schema: "类别 项目 项目",
    },

    options: {
      submission_title: "项目",
      submission_enabled: "启用 项目",

      moderation_title: "项目",
      moderation_mode: "项目 项目",
      require_first_approved_before_more: "项目 项目 项目 项目 更多的",

      limits_title: "限制",
      max_pending_per_user: "最高 待处理 项目 用户",
      max_items_per_user: "最高 个 项目 用户",
      limits_hint: "限制 项目",

      templates_title: "模板",
      card_template: "卡片 模板",
      details_template: "许可证详情 模板",

      form_schema_title: "项目 项目",
      settings_title: "项目 编辑"
    },

    supervision: {
      title: "项目",
      sub_title:
        "条评价 项目 个 项目 项目 项目 项目 项目: 项目, 发布, 拒绝, 项目, 项目 项目 到 待处理.",

      empty_title: "无服务 个 到 条评价",
      empty_subtitle:
        "项目 用户数 项目 新建 个, 项目 项目 项目 项目 项目 项目.",

      review_title: "条评价 产品",
      approve_publish: "项目 & 发布",

      submitted_at: "项目",
      quick_actions: "项目 操作",

      open_review: "项目 条评价",
      reset_to_pending: "项目 到 待处理",
      items_title: "个",

    },

    moderation: {
      approve_success: "产品 项目 项目.",
      publish_success: "产品 已发表 项目.",
      unpublish_success: "产品 项目 项目.",
      archive_success: "产品 项目 项目.",
      reject_success: "产品 已拒绝 项目.",
      penalty_success: "项目 项目 项目.",

      reject_title: "拒绝 产品",
      reject_reason: "项目 项目",

      penalty: "项目",
      penalty_title: "项目",
      penalty_points: "项目 项目",
      penalty_note: "项目 备注"
    },

    media: {
      upload_images: "项目 图片",
      url_type: "类型",
      url: "URL",
      is_main: "项目 项目 项目"
    },






    /** {@see BShopListingDesignsList, BShopListingDesignUpsert} **/
    designs: {
      title: "项目",
      sub_title:
        "创建 项目 设计 项目 (卡片 + 许可证详情 模板) 项目 项目 项目 到 子类别. 子类别 项目 项目 项目 项目.",

      empty_title: "无服务 项目 项目",
      empty_subtitle:
        "项目 项目 项目 设计 项目 到 开始时间 项目 项目 子类别 项目.",

      add_title: "项目 设计",
      edit_title: "编辑 设计",

      card_template: "卡片 模板",
      details_template: "许可证详情 模板",

      notifications: {
        add_success: "设计 项目 项目.",
        edit_success: "设计 项目 项目.",
        delete_success: "设计 已删除 项目.",
      },

      delete_title: "删除 设计",
      delete_message:
        "删除 项目 设计? 子类别 项目 项目 项目 项目 项目 设计_项目.",
    },





    badges: {
      title: "徽章",
      sub_title:
        "创建 项目 项目 项目 徽章. 徽章 项目 项目 项目 到 项目 个 到 项目 项目 项目.",

      empty_title: "无服务 徽章 项目",
      empty_subtitle:
        "项目 项目 项目 项目 到 开始时间 项目 项目 个.",

      add_title: "项目 项目",
      edit_title: "编辑 项目",

      notifications: {
        add_success: "项目 项目 项目.",
        edit_success: "项目 项目 项目.",
        delete_success: "项目 已删除 项目.",
      },

      delete_title: "删除 项目",
      delete_message: "项目 项目 项目 项目 项目 到 删除 项目 项目?",
    },

    companies: {
      title: "公司",
      sub_title:
        "创建 项目 项目 公司. 项目 项目 产品 项目 项目 项目 项目 到 项目 商户.",

      empty_title: "无服务 公司 项目",
      empty_subtitle:
        "项目 项目 项目 商户 到 链接 项目 到 项目 个.",

      add_title: "项目 商户",
      edit_title: "编辑公司",

      notifications: {
        add_success: "商户 项目 项目.",
        edit_success: "商户 项目 项目.",
        delete_success: "商户 已删除 项目.",
      },

      delete_title: "删除 商户",
      delete_message:
        "删除 项目 商户? 个 项目 项目 项目 项目 项目 项目 商户 链接.",
    },



    messages: {
      title: "项目",
      sub_title: "项目 项目 已发送 项目 用户数 从 项目 简介.",
      empty_title: "无服务 项目",
      empty_subtitle: "项目 已发送 项目 用户数 项目 项目 项目.",

      sender: "项目",
      item: "产品",
      has_reply: "项目",
      has_reply_yes: "项目 项目",
      has_reply_no: "无服务 项目",

      dialog_title: "信息",
      owner_reply: "所有者 项目",
      reply: "项目",
      reply_hint: "项目 项目 项目 到 项目 用户. 项目 项目 项目 项目 项目 信息 项目 项目/项目 从 操作.",

      mark_read: "项目 项目 项目",
      mark_unread: "项目 项目 项目",
      archive: "项目",
      unarchive: "项目",
      mark_spam: "项目 项目 项目",
      mark_not_spam: "项目 项目",

      delete_confirm: "删除 项目 信息?",
    },

    enable: {
      title: "项目",
      subtitle: "启用 项目 禁用 项目 公开 项目 项目. 项目 项目 项目 项目 项目 时间, Selldone 项目 创建 项目 项目 配置 项目.",
      true_description: "项目 项目 项目. 顾客 项目 项目 项目 页面.",
      false_description: "项目 项目 项目. 项目 项目 页面 项目 项目 项目 项目.",
      open_listing: "项目 项目",
      note: "项目 项目 项目 项目 项目, 限制, 项目, 项目 设计 项目 项目 编辑.",
      vendor_prereq_text:
        "项目 项目 到 项目 项目 个 从 项目 项目 项目? 项目, 项目 项目 企业 项目 到 商城模式.",
      vendor_prereq_button: "项目 商城模式 企业 项目",

      vendor_access_text:
        "项目 项目 项目 项目 项目 项目 项目 访问权限 项目 项目 (个 + 公司). 启用 项目 项目 商城模式 编辑.",
      vendor_access_button: "启用 项目 项目 项目",

      more_options_text:
        "更多的 项目 项目 有库存的 项目 项目 编辑. 项目 项目 项目 输入, UI/外观, 项目, 限制, 项目 项目 选项.",
      more_options_button: "项目 到 项目 编辑",

      updated: "项目 项目.",
      update_failed: "项目 到 更新 项目.",
    },


    search: {
      title: "项目 编辑",
      subtitle: "设计 项目 顾客 项目 项目 项目. 启用 项目 项目 项目 构建 筛选器 从 项目 自定义 项目 项目.",

      location_title: "位置 项目",
      location_subtitle: "项目 顾客 到 项目 项目 位置 项目 项目 项目 项目 项目 项目 项目 圆角半径.",
      location_enabled_true: "位置 筛选 项目 项目. 顾客 项目 项目 项目 项目.",
      location_enabled_false: "位置 筛选 项目 项目. 项目 项目 项目 项目 项目 项目 项目.",

      radius_default: "默认 圆角半径 (项目)",
      radius_default_hint: "已使用 项目 项目 项目 项目 项目 位置 项目 项目 项目 项目 项目 圆角半径.",
      radius_max: "项目 圆角半径 (项目)",
      radius_max_hint: "项目 项目 圆角半径 项目 项目 项目 到 项目 值.",
      radius_options: "圆角半径 选项 (项目)",
      radius_options_hint: "项目 项目 项目 项目 项目 项目 项目 选项 项目 项目 项目 UI.",

      filters_title: "项目 筛选器",
      filters_subtitle: "项目 筛选器 项目 项目 项目 从 产品 Meta 项目 (项目 项目/类别 项目 项目). 项目 项目 到 项目 项目 选项 从 已发表 个.",
      no_filters: "无服务 筛选器 项目 项目.",
      auto_generate: "项目 选项",

      filter_field: "项目 项目",
      filter_label: "标签",
      filter_type: "类型",
      filter_options: "选项",
      filter_options_hint: "项目 项目 筛选器, 选项 项目 项目 项目 项目 项目.",
      multiple: "项目",
      single: "项目",
      kv_mode: "项目/值 项目",

      requires_listing_active: "项目 项目 项目 已启用的. 启用 项目 项目 到 项目 项目 项目 项目 项目.",


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
        "已完成的销售款项支付",
        "供应商佣金支付。",
        "交易成功完成。",
        "最近销售的汇款。",
        "供应商服务的成功转账。",
      ],
      /**
       * Reverse fund
       */
      reverse_fund_reason: [
        "资金返还：从银行转账到供应商的钱包。",
        "供应商钱包充值：从银行账户转回资金。",
        "交易退回：银行账户转至供应商钱包。",
        "退款：银行存款退回至供应商的钱包。",
        "资金补充：从银行补充供应商的钱包。",
      ],
    },

    /**
     * Email Marketing
     */
    shop_email: {
      name: [
        "超值周末优惠来袭",
        "独家内幕优惠大揭秘",
        "尊享 VIP 专属折扣",
        "季节大促销盛宴",
        "解锁您的购物天堂",
        "盛大购物嘉年华",
        "春季狂欢购物盛会",
        "秋季优惠，无法抗拒",
        "冬日暖心特惠",
        "夏末清仓倒计时",
        "黑色星期五狂欢：早鸟抢先享",
        "节日问候：您的礼物指南及更多",
        "新品上市：专为您准备",
        "忠诚有礼：独家折扣在此",
      ],
      subject: [
        "⏰ 限时优惠！快来抢购心仪好物",
        "🌼 新季新风尚 - 探索我们的全新系列",
        "👑 专属 VIP 特卖会只为您",
        "💃 新品上架，尽显风采",
        "🔚 抓住最后机会，全场 8 折起",
        "🎁 送您 10 美元礼金，尽在其中！",
        "☀️ 夏日热卖季，准备好了吗？",
        "🛍️ 升级衣橱 - 你值得拥有",
        "👀 预览：即将上新，敬请期待！",
        "🎂 生日快乐！您的专属好礼待领取",
        "🖤 黑色星期五，准备好了吗？",
        "🎯 为您精选 - 个性化购物体验",
        "🍹 犒赏自己 - 周末闪购特惠",
        "🧹 季末清仓 - 全场大甩卖",
        "🚀 您赢了！下单立享免运费",
        "📢 不容错过 - 心愿单好物现已特惠",
        "🏡 让家焕发光彩 - 精选家居好物",
        "🎉 专属惊喜 - 开启您的神秘折扣",
      ],
    },

    /**
     * Discount code
     */
    discount_code: {
      code: [
        "WELCOME10 —— 欢迎优惠10%（代码仅可填写英文与数字，下同）",
        "SUMMER20 —— 夏季优惠20%",
        "VIPSALE30 —— VIP专享30%",
        "BDAY15 —— 生日优惠15%",
        "BLACKFRIDAY —— 黑色星期五特惠",
        "CYBERMONDAY —— 网络星期一特惠",
        "FREESHIPPING —— 免运费",
        "FLASHSALE —— 闪购优惠",
        "CLEARANCE —— 清仓特价",
        "EARLYBIRD —— 早鸟优惠",
        "STUDENT10 —— 学生优惠10%",
        "WINTER25 —— 冬季优惠25%",
        "SPRING15 —— 春季优惠15%",
        "FALL20 —— 秋季优惠20%",
        "BESTSELLER10 —— 畅销品10%优惠",
        "HOLIDAY30 —— 节日优惠30%",
        "VALENTINE20 —— 情人节优惠20%",
        "MOTHERSDAY —— 母亲节优惠",
        "FATHERSDAY —— 父亲节优惠",
        "ENDOFYEAR —— 年终特惠",
      ],
      title: [
        "闪购特惠：立减20%！",
        "VIP提前访问折扣",
        "周末优惠：立即省钱！",
        "今日享受15%折扣",
        "夏季大促：额外10%折扣",
        "清仓大甩卖！省更多",
        "特别优惠：免运费",
        "今日限时买二送一！",
        "节日特惠：25%折扣",
        "独家30%优惠",
        "惊喜！额外 20% 折扣",
        "季节性优惠",
        "周中狂欢：10%折扣",
        "即将结束：全场15%折扣",
        "家人朋友专享20%折扣",
        "本周末超值优惠",
        "黑色星期五：40%折扣",
        "抢先优惠：30%折扣",
      ],
      description: [
        "领取您的特别优惠！限时抢购。",
        "快来吧！专属优惠正等着您加入购物车。",
        "超值省钱，只需轻点一下！",
        "抓住这次机会，优惠即将结束。",
        "特别折扣等着您，别错过。",
        "用我们的优惠点燃您的购物热情！",
        "您的下一笔订单可能比想象中更优惠！",
        "现在是购买心仪商品的最佳时机。",
        "一点小惊喜，让您的日子更美好。",
        "准备好省钱了吗？惊喜折扣等着您！",
        "因为您特别，所以为您准备了特别优惠。",
        "看上了什么？给您一个小小推动！",
        "省钱良机就在眼前，别犹豫。",
        "别错过这个优惠！好机会不容错过。",
        "好消息！您的购物变得更实惠了。",
        "抓紧，您的专属折扣即将结束！",
        "这是对您忠诚的感谢小礼物。",
      ],
    },
    /**
     * Coupon
     */
    coupon: {
      title: [
        "省钱无限",
        "解锁折扣",
        "超级省钱",
        "独家优惠",
        "额外省钱",
        "VIP专享折扣",
        "特别优惠",
        "额外折扣",
        "折扣提醒",
        "省钱乐园",
        "经济实惠",
        "超值盛宴",
        "降价优惠",
        "快乐省钱",
        "多买多省",
        "限时抢购",
        "砍价宝藏",
        "立刻省钱",
        "今日特惠",
        "季节特卖",
      ],
      description: [
        "尽享我们的甜蜜优惠！下次购物省更多。",
        "我们珍视每一位客户——快来享受这份专属优惠。",
        "喜欢的更多，花费更少。折扣由我们承担！",
        "准备好省钱了吗？独家优惠等你来拿！",
        "因为你很特别！享受下单折扣吧。",
        "犒劳自己一场购物狂欢，顺便省点钱！",
        "准备好疯狂购物并省钱了吗？",
        "以特别折扣庆祝这个季节。",
        "感谢忠实客户，献上专属折扣。",
        "解锁下一次购物的超值优惠。",
        "快来看看你的专属省钱好礼。",
        "发现我们的惊喜折扣吧！",
        "用我们的专属优惠升级你的购物体验。",
        "通过特别优惠，迅速开启省钱之旅。",
        "宠爱自己一点点——专属折扣等你享。",
        "你的下一场购物冒险变得更实惠了！",
        "因为折扣让购物更有趣。",
      ],
    },

    /**
     * Offer
     */
    offer: {
      title: [
        "套装组合，省更多！",
        "买多省多！",
        "精明购物者的聪明优惠",
        "折扣提醒！套装优惠",
        "组合优惠——多买更划算",
        "套装专享折扣",
        "花更少，拿更多！",
        "套装购买，立省更多",
        "组合特惠专场",
        "店内超大优惠！",
        "最佳性价比套装",
        "限时套装特惠",
        "组合商品大折扣",
        "精选商品聪明省",
        "套装优惠无敌",
        "多买多优惠",
        "现在双倍优惠，省不停",
        "批量购买，省更多",
      ],

      description: [
        "选购精选产品套装，享受超值优惠。抓紧时间，限时特惠！",
        "精明优惠等你来！一起购买重点推荐商品，省更多。",
        "发现聪明省钱法！将心仪商品打包购买，价格立减。",
        "购买指定组合商品，享受专属折扣。行动要快！",
        "买得越多，省得越多！我们的特价产品套装优惠无敌。",
        "精明购物，享受特惠。精选产品套装价格优惠。",
        "花更少，拿更多！购买精选套装享惊人折扣。",
        "打包购买，省大钱！精选商品限时独家优惠",
        "组合购买立省！购买指定商品享专属折扣。",
        "买越多省越多！选择我们的特价套装，聪明购物。",
      ],
    },

    /**
     * Gift card type
     */
    gift_card_type: {
      title: [
        "宠爱自己！",
        "只为你！",
        "开心购物！",
        "尽情享受！",
        "纵情一刻",
        "因为你很特别",
        "一点小惊喜",
        "点亮你的日子",
        "致敬于你",
        "传播欢乐",
        "爱的礼物",
        "愉快购物",
        "感谢的象征",
        "该犒劳自己了",
        "品味这一刻",
        "寻找你的心头好",
        "这是你的选择",
        "表达你自己",
        "发现魔法",
        "释放你的风格",
      ],
    },

    /**
     * Refund vendor order
     */
    vendor_refund_order: {
      note: [
        "资金已从您的虚拟钱包中扣除并返回到市场钱包。",
        "已发起退款，您的虚拟钱包余额已减少。",
        "退款完成，市场钱包已从您的虚拟钱包补充资金。",
        "您的虚拟钱包因近期退款已被扣款至市场钱包。",
        "由于近期退款，您的虚拟钱包资金已调整。",
        "已执行退款交易，金额从您的虚拟钱包中扣除。",
        "由于向市场钱包退款，您的虚拟钱包余额已减少。",
        "已发生退款交易，资金从您的虚拟钱包转回市场钱包。",
      ],
    },

    /**
     * Product
     */
    product: {
      warranty: [
        "24 个月黄金保证",
        "两年白金保证",
        "36 个月钻石保证",
        "银盾：一年保修",
        "2年精英保证",
        "24 个月的高级保障",
        "铜级：一年保修",
        "3 年最终正常运行时间保证",
        "24 个月安全服务承诺",
        "36 个月安心保护",
      ],
      pros_name: [
        "效率提升",
        "成本效益方案",
        "品质保证",
        "用户友好",
        "节省时间",
        "可靠保障",
        "用途广泛",
        "尖端技术",
        "环保节能",
        "卓越的性能",
      ],

      pros_value: [
        "通过快速高效的操作节省大量时间。",
        "采用先进技术，性能无与伦比。",
        "降低成本并提升生产力。",
        "提供用户友好的界面，操作简单便捷。",
        "保证可靠且稳定的性能表现。",
        "适用于多种任务，应用广泛。",
        "采用环保材料和工艺。",
        "以前沿科技设计，效果卓越。",
        "高品质设计确保持久耐用。",
        "提供全天候客户支持。",
      ],

      cons_name: [
        "价格较高",
        "兼容性低",
        "设置复杂",
        "需要培训",
        "性能不佳",
        "功能单一",
        "有限支持",
        "维护麻烦",
        "高能耗性",
        "寿命短暂",
      ],

      cons_value: [
        "初期投资高于其他替代品。",
        "可能不兼容所有系统或设备。",
        "安装过程可能相当复杂。",
        "使用前可能需要额外培训。",
        "性能可能达不到所有预期。",
        "功能有限或缺乏多样性。",
        "客服可能无法全天候提供支持。",
        "需频繁维护，导致成本增加。",
        "能耗高，增加使用成本。",
        "产品寿命可能不如预期。",
      ],
    },

    /**
     * Blog Category
     */
    blog_category: {
      category: [
        "科技洞察",
        "美食发现",
        "旅行故事",
        "健康敲门",
        "时尚精选",
        "商业资讯",
        "生活故事",
        "体育动态",
        "艺术亮点",
        "育儿指南",
      ],
      description: [
        "发现各类主题的深度文章。",
        "探索我们丰富的信息博客内容。",
        "通过引人入胜的博客分类内容保持信息更新。",
        "从发人深省的博客文章中获得灵感。",
        "通过多样的博客分类主题拓展知识面。",
        "关注我们引人注目的博客分类洞见，保持最新动态。",
        "深入探索我们精彩的博客分类内容。",
        "在我们的博客分类档案中发掘宝贵信息。",
        "从精心策划的博客分类中学习新知识。",
        "参与我们的丰富博客文章和帖子互动。",
      ],
    },

    /**
     * Partner Plan
     */
    partner_plan: {
      name: [
        "入门套餐",
        "基本计划",
        "专业套餐",
        "企业级版",
        "高等级版",
        "尊享级版",
        "终极方案",
        "精英级别",
        "成长加速",
        "白金动力",
      ],
    },

    /**
     * Tax Profile
     */
    tax_profile: {
      name: [
        "食品",
        "电子设备",
        "服装服饰",
        "书籍和文具",
        "健康与美容产品",
        "家具",
        "体育用品",
        "玩具和游戏",
        "珠宝及配饰",
        "汽车零部件",
        "园艺与户外",
        "厨具",
        "家居装饰",
        "乐器",
        "宠物用品",
        "鞋类",
        "行李箱包",
        "办公用品",
        "五金工具",
        "杂货",
      ],

      label: [
        "VAT", // Value-Added Tax
        "GST", // Goods and Services Tax
        "PST", // Provincial Sales Tax
        "HST", // Harmonized Sales Tax
        "QST", // Quebec Sales Tax
        "CST", // Central Sales Tax
        "消费税", // Excise Tax
        "进口关税", // Import Duty
        "服务税", // Service Tax
        "奢侈品税", // Luxury Tax
      ],
    },
    /**
     * Cluster
     */
    cluster: {
      name: [
        "销售亮点",
        "促销代码",
        "特色活动",
        "新品上市",
        "最畅销品",
        "季节特惠",
        "限时优惠",
        "活动专享",
        "VIP专享",
        "清仓商品",
        "节日礼包",
        "主题合集",
        "品牌展示",
        "会员最爱",
        "闪购折扣",
        "购物必备",
        "数字资源",
        "礼物创意",
        "环保精选",
        "员工推荐",
      ],
    },

    /**
     * Popup
     */
    popup: {
      title: [
        "特别优惠！",
        "新品上市",
        "限时抢购",
        "折扣提醒！",
        "独家优惠",
        "热卖产品！",
        "清仓提醒",
        "免运费",
        "内含礼物！",
        "赢得奖品",
        "会员福利",
        "闪购活动",
      ],
    },

    /**
     * Campaign
     */
    campaign: {
      name: [
        "疯狂购物节",
        "购物车狂欢",
        "闪购嘉年华",
        "点击购物省更多",
        "特价狂欢",
        "电子优惠盛宴",
        "超级降价狂潮",
        "网络省钱狂欢",
        "数字折扣日",
        "电商嘉年华",
        "网上奥特莱斯",
        "零售热潮",
        "仓库大甩卖",
        "电子购物天堂",
        "虚拟优惠券探险",
        "数字爆款",
        "电商清仓特卖",
        "网购对决",
        "网络闪购盛典",
        "电子特价冲刺",
      ],
    },

    /**
     * Valuation
     */
    valuation: {
      title: [
        "T恤定制定价",
        "手工珠宝估价",
        "个性化鞋子定价",
        "定制艺术品估价",
        "定制西装定价",
        "电子产品定制定价",
        "个性化香水估价",
        "定制包包定价",
        "定制礼服估价",
        "个性化书籍封面定价",
        "定制家具估价",
        "定制手表定价",
        "个性化玩具估价",
        "定制帽子定价",
        "定制护肤产品估价",
        "定制家居装饰定价",
        "定制厨具估价",
        "个性化文具定价",
        "定制发饰估价",
        "定制运动器材定价",
      ],
      structure: {
        title: [
          "T恤印花设计",
          "珠宝金属类型",
          "鞋材选择",
          "艺术画框尺寸",
          "西装面料选择",
          "小工具颜色选项",
          "香水香型特征",
          "包包材质及尺寸",
          "连衣裙长度和款式",
          "书籍封面材料",
          "家具木材类型",
          "表带材质",
          "玩具定制功能",
          "帽子尺寸和颜色",
          "护肤成分偏好",
          "家居装饰主题",
          "厨具材质",
          "文具纸张类型",
          "发饰材质",
          "运动器材尺寸",
        ],
      },
    },

    /**
     * Lottery
     */
    lottery: {
      title: [
        "旋转并赢取大奖！",
        "幸运转盘头奖",
        "幸运旋转盛宴",
        "旋转赢取奖励",
        "财富之轮",
        "幸运乐透盛会",
        "超级旋转惊喜",
        "奖品转盘嘉年华",
        "宝藏旋转盛典",
        "魔法旋转之轮",
        "幸运大转盘",
        "幸运之神眷顾",
        "奇迹之轮",
        "旋转赢取财富",
        "奖品旋转乐趣",
        "黄金旋转彩票",
        "旋转赢奖",
        "财富之轮展",
        "幸运旋转展示",
        "终极旋转奖励",
      ],
      description: [
        "旋转转盘，赢取专属折扣的机会！",
        "试试运气——幸运转盘中有惊喜大奖等你拿！",
        "每次旋转都有机会赢大奖——激动人心的奖励等着你！",
        "旋转赢取惊喜！每转一圈都有礼物和优惠。",
        "抓住机会赢大奖——旋转转盘立刻领取奖品！",
        "每次旋转都有独家奖励——你会是那个幸运儿吗？",
        "旋转并获胜！在我们的幸运转盘中发现隐藏宝藏。",
        "在我们的转盘上试试运气——奖品、折扣应有尽有！",
        "每次旋转都是胜利——今天就来领取你的专属奖品！",
        "转动转盘，获得惊喜——你将赢得什么？",
        "旋转释放好运——激动人心的购物奖励等你来拿。",
        "旋转揭晓你的奖品——折扣、礼物多多！",
        "每天一转，乐趣不断——赢取独特奖品！",
        "旋转我们的幸运转盘，赢取专属好礼。",
        "幸运旋转带来幸运胜利 - 立即领取您的奖品！",
        "你的旋转可能解锁惊人的购物奖励！",
        "旋转就有机会获得独家优惠和优惠。",
        "命运之轮正在转动——抓住你的幸运奖品吧！",
        "旋转、赢取、微笑——每次转动都有惊喜奖励。",
        "来转一圈，让幸运决定你的奖品！",
      ],
    },

    /**
     * Subscription Price
     */
    subscription_price: {
      title: [
        "基础访问",
        "高级会员",
        "黄金套餐",
        "银质方案",
        "铂金订阅",
        "企业级别",
        "入门组合",
        "无限优惠",
        "家庭套餐",
        "专业套装",
      ],
      description: [
        "适合刚入门的个人用户。",
        "可使用所有高级功能和内容。",
        "独享专属福利与优先支持。",
        "为常规用户提供的均衡套餐。",
        "终极访问权限及顶级特权。",
        "为大型组织量身定制的解决方案。",
        "经济实惠的入门级选择。",
        "无限制使用，适合高级别用户。",
        "专为家庭设计的特别计划，最多可容纳 4 名成员。",
        "为追求高级工具的专业人士设计。",
      ],
    },

    spec: {
      group: [
        "技术规格",
        "物理尺寸",
        "性能特点",
        "连接选项",
        "电源要求",
        "材料和制造质量",
        "颜色和饰面选项",
        "存储和内存",
        "操作系统兼容性",
        "安全与合规",
        "包装内容",
        "保修和支持",
        "品牌和制造商",
        "环保性能",
        "能源效率",
        "保养和维护",
        "定制选项",
        "附带配件",
        "用户评分和评论",
        "价格与供货",
      ],
    },

    avocado: {
      title: [
        "购买收据",
        "销售确认",
        "订单发票",
        "付款发票",
        "客户收据",
        "交易摘要",
        "账单明细",
        "结账收据",
        "订单摘要",
        "采购订单发票",
        "销售收据",
        "零售发票",
        "电子收据",
        "服务发票",
        "产品发票",
        "付款收据",
        "订单确认",
        "帐单发票",
        "结帐发票",
        "客户发票",
      ],
      message: [
        "感谢您的购买！",
        "我们非常感谢您的惠顾。",
        "您的订单正在运送中！",
        "感谢您在我们店铺购物。",
        "期待再次为您服务。",
        "您的满意是我们的首要任务。",
        "别忘了评价您的购物体验。",
        "感谢您对我们商店的支持。",
        "我们希望您喜欢您的新商品！",
        "请保存您的发票以备后用。",
        "再次访问我们以获取更多优质产品。",
        "关注我们，获取独家优惠。",
        "感谢您成为我们尊贵的客户。",
        "如果您需要帮助，我们会随时为您提供帮助。",
        "您的反馈帮助我们不断改进。",
        "下次购买时可享受特别折扣。",
        "您做了一个很棒的选择！",
        "感谢您对我们的信任。",
        "期待您的宝贵反馈。",
        "我们团队向您致以衷心的感谢。",
      ],
    },

    /**
     * Map Tag
     */
    map_tag: {
      title: [
        "房产展示",
        "供应商广场",
        "精选房源",
        "本地市场",
        "新品上市",
        "庄园花园",
        "购物街区",
        "匠人巷",
        "豪华庄园",
        "租赁中心",
        "开放参观",
        "技术创新",
        "时尚大道",
        "工艺品角",
        "美食广场",
        "图书角",
        "珠宝汇",
        "古董街",
        "健身专区",
      ],
    },

    /**
     * Marketplace Documents (For vendors)
     */
    marketplace_document: {
      title: [
        "营业执照",
        "税务识别号 (TIN)",
        "供应商协议表格",
        "产品目录",
        "价格表",
        "银行账户详细信息",
        "地址证明",
        "保险证明",
        "公司简介",
        "质量保证证书",
        "安全数据表 (SDS)",
        "产品保修信息",
        "退货政策",
        "运输和处理程序",
        "客户服务政策",
        "营销和推广计划",
        "社交媒体链接",
        "贸易参考",
        "供应商行为准则",
        "保密协议（NDA）",
      ],
    },

    /**
     * Expert Contract
     */
    expert_contract: {
      title: [
        "市场设置服务协议",
        "店铺配置合同",
        "按需印刷服务协议",
        "数字营销服务协议",
        "电商平台入驻协议",
        "企业主专家咨询合同",
        "市场配置服务协议",
        "店铺设置和配置服务合同",
        "POD服务提供协议",
        "营销策略实施协议",
        "业务发展服务合同",
        "电子商务商店设置协议",
        "专家服务提供协议",
        "商业解决方案和设置合同",
        "定制店铺设置服务协议",
        "市场优化服务协议",
        "咨询及安装服务合同",
        "POD集成服务协议",
        "营销及推广服务合同",
        "业务扩展服务协议",
      ],
    },

    /**
     * Account
     */
    account: {
      account_name: [
        "主钱包",
        "企业账户",
        "个人钱包",
        "储蓄钱包",
        "费用账户",
        "首选钱包",
        "普通帐户",
        "备用钱包",
        "交易账户",
        "资金账户",
      ],
    },

    /**
     * Cashback
     */
    cashback: {
      title: [
        "购物并赚取现金返还",
        "忠诚度奖励返现",
        "专属现金返还优惠",
        "返现盛宴",
        "即时现金返还优惠",
        "季节性现金返还优惠",
        "双倍现金返还日",
        "每次购物均可获得现金返还",
        "现金返还狂潮",
        "VIP现金返还计划",
        "限时现金返还",
        "现金返还奖励俱乐部",
        "买得越多，省得越多",
        "终极现金返还奖励",
        "现金返还盛宴",
      ],
      description: [
        "每次购买均可赚取现金返还！",
        "因您的忠诚而获得奖励。",
        "专为您提供的专属现金返还优惠。",
        "尽情享受返现奖励带来的超值优惠。",
        "你喜爱的商品即时返现。",
        "利用季节性现金返还优惠节省更多。",
        "在特别日子享受双倍返现！",
        "每次购物均可赚取现金返还。",
        "今天就加入现金返还狂潮吧！",
        "VIP会员享受专属现金返还。",
        "快来抢购！限时现金返还优惠。",
        "立即加入我们的现金返还奖励俱乐部。",
        "购物越多，节省越多。",
        "解锁终极现金返还奖励。",
        "体验最佳的现金返还优惠。",
      ],
    },

    /**
     * Page
     */
    page: {
      prompts: [
        "欢迎来到{shop} - 探索我们独特的商品系列",
        "{shop} - 您优质商品与卓越服务的首选之地",
        "仅在{shop}享受独家优惠和折扣——抓住机会！",
        "了解{shop}对环保和道德实践的奉献精神",
        "成为{shop}家庭的一员 - 订阅我们的时事通讯以获取最新资讯",
        "探索{shop}的热门精选和高评价商品",
        "在{shop}上展示针对所有活动的想法和创意建议",
        "{shop} 提供无与伦比的优惠和限时特价 - 行动要快！",
        "{shop} 的全面购买技巧和产品评测 - 放心购物",
        "联系{shop} - 我们致力于提供无与伦比的购物体验",
      ],
    },

    /**
     * Cross-Selling
     */
    cross_selling: {
      message: [
        "完善你的装扮，赶快购买这套吧！",
        "利用我们的捆绑优惠节省大笔费用！",
        "不要错过我们的完美搭配！",
        "提升购物体验，更多配件等你来加购！",
        "解锁专属优惠，一起买更省！",
        "精选搭配商品，享受特别折扣！",
        "多买多省，组合套餐更实惠！",
        "限时优惠：搭配好物组合等你来抢！",
        "升级你的购物体验，尽在组合套餐！",
        "探索我们的精心搭配组合，立即省钱！",
        "配对搭配，尽享终极组合！",
        "明智购物，捆绑购买，节省开支！",
        "双倍价值，双倍乐趣！",
        "完美搭配等你选购 – 马上行动！",
        "专属优惠价，尽在组合套餐！",
        "最大化你的优惠，选购组合搭配！",
        "用这些精选搭配丰富你的购物体验！",
        "专为你搭配：匹配购买，立享优惠！",
        "完美的一天从完美搭配开始！",
        "捆绑你的心头好，享受额外优惠！",
      ],
    },

    /**
     * Cross-Selling
     */
    vendor_pricing: {
      title: [
        "项目 项目",
        "项目",
        "项目",
        "项目",
        "主页 项目",
        "项目 产品",
        "项目 项目",
        "玩具和游戏",
        "杂货",
        "家具",
        "汽车零部件",
        "珠宝",
        "项目 & 项目",
        "宠物用品",
        "办公用品",
        "项目 & 项目",
        "项目 & TV 项目",
        "软件",
        "项目 & 项目",
        "项目 项目",
      ],
    },

    /**
     * Template Message
     */
    template_message: {
      title: [
        "订单确认",
        "订单 已发货",
        "订单 送达次数",
        "支付 已收到",
        "订单 项目",
        "订单 项目 项目",
        "订单 项目 项目",
        "订单 项目 项目 配送",
        "退货 项目",
        "项目 项目",
        "产品 返回 项目 项目",
      ],
      body: [
        "项目 {buyer_name}, 项目 订单 #{order_id} 项目 项目 已确认! 项目’项目 项目 项目 项目 项目 项目 项目 项目 项目’项目 项目 到 项目.",

        "较好 项目, {buyer_name}! 项目 订单 #{order_id} 项目 项目 已发货. 项目 项目 项目 项目 项目 项目 账户. 项目 项目 项目 项目 项目!",

        "项目 {buyer_name}, 项目 订单 #{order_id} 项目 项目 项目 送达次数. 项目 项目 项目 项目 项目 购买. 项目 项目!",

        "项目 {buyer_name}, 项目 项目 已收到 项目 支付 项目 订单 #{order_id}. 项目 订单 项目 项目 项目 项目 项目 项目 项目 已发货 项目.",

        "项目 {buyer_name}, 项目 项目 到 项目 项目 项目 项目 订单 #{order_id} 项目 项目 项目. 项目 项目 项目 项目 项目, 项目 联系方式 支持.",

        "项目 {buyer_name}, 项目’项目 项目 项目 项目 项目 项目 订单 #{order_id}. 项目 项目 项目 项目 项目 项目 项目 项目 到 项目 项目 项目 项目 项目 项目.",

        "项目 {buyer_name}, 项目 订单 #{order_id} 项目 项目 项目 项目. 项目 项目 项目 账户 项目 联系方式 支持 项目 项目 许可证详情.",

        "项目 {buyer_name}, 项目 订单 #{order_id} 项目 项目 项目 配送 项目 项目 项目 项目 项目. 项目 项目 项目 项目 项目!",

        "项目 {buyer_name}, 项目 项目 项目 项目 退货 项目 项目 订单 #{order_id}. 项目 项目 项目 项目 项目, 项目 联系方式 支持.",

        "项目 {buyer_name}, 项目 项目 项目 订单 #{order_id} 项目 项目 项目. 项目 项目 项目 项目 项目 项目 项目 账户 项目.",

        "项目 {buyer_name}, 项目 产品 从 项目 订单 #{order_id} 项目 返回 项目 项目! 项目 项目 项目 项目 新建 订单 项目 项目 项目’项目 项目 项目.",
      ],
    },

    /**
     * Property Set
     */
    property_set: {
      title: [
        "项目",
        "项目 项目",
        "项目",
        "食品",
        "家具",
        "项目",
        "项目 产品",
        "项目",
        "项目 项目",
        "项目",
      ],
      description: [
        "项目 项目 项目 个 喜欢 项目, 颜色, 项目 项目.",
        "规格 项目 项目 项目 项目 品牌, 项目, 项目 项目.",
        "项目, 项目, 项目 类 项目 项目.",
        "许可证详情 项目 项目, 项目, 项目 项目 产品.",
        "项目, 项目, 项目 设计 项目.",
        "作者, 项目, 项目 项目 项目.",
        "项目 类型, 项目, 项目 项目 许可证详情.",
        "项目 项目, 项目, 项目 项目 项目.",
        "类型, 项目, 项目 表现 项目.",
        "项目, 项目, 项目 品牌 许可证详情.",
      ],
    },

    /**
     * Boxes
     */
    boxes: {
      name: [
        "项目 XS",
        "项目 项目",
        "项目 项目",
        "项目 项目",
        "项目 XL",
        "项目 XXL",
        "项目 项目",
        "项目 项目",
        "项目 项目",
        "项目 项目",
        "项目 项目",
        "项目 项目",
        "项目 项目",
        "项目 项目 项目",
        "项目 项目 项目", // flexible mailer
        "项目 项目", // bubble/padded
        "项目 项目", // thermal
        "项目 项目",
      ],
    },
  },
};
