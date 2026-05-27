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
  categories: {
    Baby: {
      title: "母婴、儿童与玩具",
      desc: "婴儿车、玩具、游戏、拼图、手办",
    },
    Health: {
      title: "健康与美容",
      desc: "药房、健康护理、美妆、香水",
    },
    Media: {
      title: "媒体与游戏",
      desc: "电子游戏、电影、音乐、书籍",
    },
    Fashion: {
      title: "服装、珠宝与手表",
      desc: "服装、鞋履、项链、戒指、手链、手表",
    },
    Automotive: {
      title: "汽车用品",
      desc: "汽车配件、工具、保养",
    },
    Electronics: {
      title: "电子产品",
      desc: "手机、电视、音频设备、相机",
    },
    Computers: {
      title: "电脑",
      desc: "笔记本电脑、台式电脑、配件、软件",
    },
    Household: {
      title: "家居必需品",
      desc: "清洁用品、浴室用品、洗衣用品",
    },
    Garden: {
      title: "花园与工具",
      desc: "户外家具、园艺工具、植物",
    },
    Food: {
      title: "食品与杂货",
      desc: "乳制品、水果、预制食品、肉类、饮料",
    },
    Handmade: {
      title: "手工制品",
      desc: "收藏品、彩绘鞋、雕塑、玻璃艺术",
    },
    PetSupplies: {
      title: "宠物用品",
      desc: "宠物食品、宠物玩具、宠物护理",
    },
    Home: {
      title: "家居生活",
      desc: "厨房电器、家居家具、装饰",
    },
    Sports: {
      title: "运动与户外",
      desc: "健身、露营、自行车、休闲",
    },
    Stationery: {
      title: "文具与办公",
      desc: "办公用品、学习用品、纸制品",
    },
    Books: {
      title: "图书",
      desc: "小说、非虚构、教育、漫画",
    },
    Marketplace: {
      title: "综合市场",
      desc: "来自多个类别的丰富产品",
    },
    Other: {
      title: "其他...",
      desc: "礼品卡、数字产品、在线服务、任何商品",
    },
  },

  partners: {
    title: "{name} 正在与 Selldone 合作",
    subtitle: "共同开启下一代在线商业系统。",
    subtitle_official: "开启下一代在线商业系统。",

    create_new_shop: "创建一个新商店",
    select_a_shop: "选择店铺",
    apply_deal_to: "将优惠应用到 {shop}",
    notifications: {
      success_apply: "优惠已成功激活！",
    },
  },

  name: "设置",
  overview: {
    title: "概述",
    subtitle:
      "深入了解业务操作系统，并了解它如何帮助您的业务。",
  },

  shop: {
    title: "从零到营收",
    subtitle: "按照这些简单步骤进入下一阶段。",
  },

  open_website: "打开我的网站",

  customize_theme: "自定义网站",
  setup_business: "设置业务",
  add_product: "添加产品",
  setup_shipping: "设置运输",
  add_domain: "添加域名",
  add_payment: "连接支付",

  product: {
    step1: {
      title: "选项 1. 手动添加",
      msg: "您可以将实体产品、虚拟物品、文件和服务添加到您的商店并开始销售。",
      action_on: "添加您的第一个产品",
      action_off: "添加更多产品",
      category:
        "分类是您在线商店的亮点，与其他商店相比，我们的分类更清晰且整齐。通过添加分类并使用拖放功能进行管理。",
      add_category: "添加分类",
    },
    step2: {
      title: "选项 2. 通过 Excel 添加",
      msg: "有很多产品，比如一千、一万个商品？不用担心只需一个操作即可全部导入。",
      import_excel: "通过 Excel 导入",
      download_template: "下载模板",
    },
  },
  shipping: {
    step1: {
      title: "步骤 1. 设置位置",
      msg: "在第一步中，设置你的仓库（发货地）。这些信息将用于计算距离、运费，并检查是否在配送服务区域内。",
      edit_warehouse: "编辑仓库",
      add_warehouse: "添加您的仓库",
    },
    step2: {
      title: "步骤 2. 启用运输方式",
      msg: "为你的商店添加至少一种运输方式。你可以根据重量、距离和其他参数设置定价。别忘了为每个运输服务设置配送的距离、重量和包裹大小的限制。",
      add_delivery: "添加运输方式",
    },
  },

  domain: {
    buy_domain_step: {
      title: "步骤 1. 购买域名",
      msg: "如果您还没有个人域名，现在就可以从 namecheap.com 等网站购买自己的域名。",
    },

    set_dns_step: {
      title: "步骤 2. 设置 DNS 记录",
      msg: "恭喜，现在您只需要在域名服务提供商处配置 DNS，并将域名添加到您的账户。",
    },
  },

  payment: {
    step1: {
      title: "定价货币",
      msg: "您可以接受不同货币的付款，商店也可以支持多种定价货币。顺便说一下，如果您将商店货币设置为 USD，客户可以使用 USD、EUR、GBP 等任何货币向您付款购买。",
      manage_currencies: "管理定价货币",
    },
    step2: {
      title: "接受支付",
      msg: "在你的商店中添加货到付款、直接转账以及其他可用的支付方式。",
      online_title: "在线支付方式",
      online_msg:
        "接受信用卡支付、新型银行应用支付、先买后付等多种在线支付方式。",
      add_online_gateway: "添加在线支付方式",
      cod_title: "货到付款方式",
      cod_msg:
        "收到订单后客户再付款。您可以手动确认货到付款的订单。",
      cash_title: "现金支付方式",
      cash_msg: "这种付款方式用于 Selldone® POS。",
      dir_title: "直接付款方式",
      dir_msg:
        "您可以通过直接汇款、银行汇款和其他传统方式接受付款。",
    },
    step3: {
      msg: "只需 30 秒，一键将 Selldone 与你的 Stripe 账户连接。现在我们支持通过 Stripe 自动配置。前往支付网关标签，添加 Stripe，并点击‘<b>自动连接到 Stripe</b>’按钮。",
      my_gateways: "我的支付网关",
    },
  },


  /**
   * @see SShopOnboardingCustomization
   */
  customize: {
    tour:{
      title:'导览',
      subtitle:"发现这里独有的可能性。",
      /**
       * @see BShopOnboardingTour
       */
      avocado:{
        title:"Avocado - 无需添加任何产品即可销售",
        description: "使用 Avocado，您可以在没有预设价格或详细信息的情况下提供服务或产品。为客户创建自定义表单，让他们请求服务或产品。客户提交请求后，您可以设置价格并处理付款。将表单分享到社交媒体，让客户轻松添加项目、上传图片并提交订单。",
        action:'阅读 Avocado 介绍',
      },
      marketplace:{
        title: "多卖家市场与自动付款",
        description: "通过在 Selldone 中添加多个卖家，打造蓬勃发展的市场。卖家可以上架自己的产品，您可以为每笔销售设置佣金比例。当客户购买时，卖家会直接收到付款，通过专属面板管理订单，而您则通过自动付款功能获得佣金。",
        action:'卖家自动付款',
      },
      business_model:{
        title: "支持复杂业务模式",
        description:
            "Selldone 支持简单和复杂的业务模式，让您可以按需调整。无需安装额外插件或应用，即可在后台完成所有配置，确保迁移和运营顺畅。",
      },
      gift_shopping:{
        title: "产品位置限制与礼品购物",
        description:
            "通过指定多个国家、ZIP 代码和城市，为每个产品设置位置限制。此功能非常适合创建个性化礼品购物体验，或将产品可售范围限制在特定地点，例如餐厅。",

      }
    },

    template: {
      title: "模板",
      msg: "通过我们的模板快速启动您的商店！轻松通过添加多个页面来实现多样化，每个页面都可以有自己独特的设计。",
      action:'查看所有模板...'

    },

    colors: {
      title: "颜色和布局",

      msg: "想要定制您的产品页面和商店布局以更好地符合您的创意吗？进入您的商店主题自定义部分，轻松见证奇迹！",

      action:'自定义颜色与主题'

    },

  },

  /**
   * @see ShopOnboardingSetupBusinessTab
   */
  business: {
    step1: {
      title: "商业模式",
      msg: "每个业务都是独特的，而且往往需要的不只是一个基础在线商店。定义您的收入模式，其余事项由我们为您顺畅处理。",
    },
  },

  migration: {
    title: "迁移",
    shopify: {
      msg: "轻松从 Shopify 迁移到 Selldone！享受无缝迁移、超强功能和高性价比的解决方案，提升您的在线商店体验。",
    },
    woocommerce: {
      msg: "只需几次点击，便可无缝将您的 WooCommerce 产品迁移到 Selldone！享受更高的性能、直观的设计和一流的客户支持。立即升级您的电商体验。",
    },
  },





};
