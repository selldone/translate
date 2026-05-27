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
  surveys: ["非常差", "差", "普通", "好", "優秀"],

  /** @see SFooterSection **/
  footer: {
    map: "地圖",
    email: "電子郵件",
    phone: "電話",
    address: "地址",

    copyright:
      "僅出於非商業目的使用內容並參考來源（與 {shop_title} 的鏈接）。 {shop_title} 保留所有權利。",
    powered_by: "供電",
    privacy: "隱私政策",
    term_of_use: "使用條款",
    shop_app_setting: "店鋪設置和 GDPR",

    dialog_setting: {
      title: "店鋪應用設置",
      app_list: "申請清單",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "售罄",
    review_unit: "審查",
    not_original: "非原創",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "篩選",
    native: {
      title: "應用程序登錄",
      message:
        "此應用程序需要訪問您的商店帳戶信息。這包括訪問姓名、聯繫電話、地址、電子郵件、訂單歷史記錄、訂購和在該商店發表評論。",
      message_bold:
        "請務必使用官方商店應用程序進入該商店。",
    },
  },

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
    inform_auction: "告訴我關於拍賣",
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
    up_to: "每筆訂單最多 {per_order} 件",
    get_free: "免費",
    get_off: "獲得 {percent}% 折扣",
    select_a_vendor_message: "請選擇供應商。",
    product_description_header: "介紹{product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "等待可用性",
    inform_me_when_available: "還在等這個？",
    pay_buy: "支付和購買",
    quantity: "數數",
    quantity_in_basket: "購物車中的物品",
    count_unit: "件",
    remove: "消除",
    add_to_basket: "添加到購物車",
    buy: "買",
    subscribe_now: "現在訂閱",
    unsubscribe: "退訂",
    select_a_subscription_plan: "先選方案！",
    manage_subscriptions: "管理訂閱",
    notifications: {
      inform_add_success: "我們會在有貨時通知您。",
      inform_remove_success: "您已從等候名單中刪除。",
    },
    zip_pin_input: "郵遞區號 / PIN",
    zip_pin_not_available_msg: "此位置不可用！",
    zip_pin_placeholder: "選擇郵遞區號/PIN 碼...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "描述",
    spec: "規格",
    comments: "評論",
    price: "價格",
    rate: "速度",
    comment: "評論",
    warranty: "保修單",
    return_policy: "退貨政策",
    guide: "指導",
    shipping: "船運",
    related_products_title: "相關產品",
    related_categories_title: "在收藏中發現",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "訂單歷史",
      profile: "我的簡歷",
      favorites: "最喜歡的項目",
      gift_cards: "禮品卡",
      return_requests: "退回的訂單",
      basket: "購物車",
    },
    user_menu: {
      my_shops: "我的商店",
      go_to_admin: "管理 {shop_name}",
      exit_from: "退出 {shop_name}",
      chips: "{chips} 積分",
    },
    login_to_shop: "登錄商店",
    login_to_shop_short: "登錄",
    item_in_basket_message: "{count} 此商品在您的購物車中。",
    search_title: "在商店 {shop_name} 中搜索",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "大車",
    basket_is_empty: "您的購物車是空的。",
    total_price: "全部的",
    view_basket: "您的購物車",
    more: "更多的 ...",
    accept_and_pay: "查看",
    items: "項目）",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "被拒絕",
    table: {
      code: "訂購代碼",
      reserved: "日期",
      delivery_state: "郵寄狀態",
      price: "總價",
      status: "支付狀態",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "訂購代碼",
      items: "項目",
      reserved: "日期",
      delivery_state: "最新狀態",
      price: "總價",
      status: "支付狀態",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "禮物卡",
      comments: "註釋",
      favorites: "收藏夾",
      return_requests: "退貨",
      addresses: "地址",
      profile: "輪廓",
      orders: "訂單",
      wallets: "錢包",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "我的錢包",
    subtitle: "若您符合資格且返現方案已啟用，訂單的一部分金額將存入您的錢包。您可以在下次購買時使用這筆金額。"
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"我的錢包餘額",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "命令",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "支付",
      payment_waiting: "等待付款",
      payment_completed: "有薪酬的",
      table: {
        title: "標題",
        amount: "數量",
        description: "描述",
      },
      total_payment: "支付的金額",
      discount: "折扣",
      discount_code: "優惠碼",
      delivery_fee: "運輸費",
      delivery_fee_after: "不支付運費",

      total_price: "總項目價格",
      total_items_discount: "商品折扣",
      total_price_after_offers: "申請報價後總計",
      total_order_price_before_tax: "稅前總價",

      buyer_payment: "買家付款金額",

      payment_is_in_require_capture_message:
        "我們已收到您的付款，但尚未完成扣款。",
      settle_the_earlier_bill_first: "請先結清先前的帳單！",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "送貨",
      subtitle: "買家信息",
      confirm_received_action: "確認收貨",
      confirm_received_info:
        "如果您收到訂單，請單擊確認按鈕。如果需要，如果您收到確認，您將能夠提交推薦。",
      Recipient: "接受者",
      bill: "發票",
      name: "姓名",
      tel: "電話",
      email: "電子郵件",
      country: "國家",
      state: "狀態",
      city: "城市",
      address: "地址",
      building_no: "樓號",
      unit_no: "單元號",
      postal_code: "郵政編碼",
      description: "描述",
      order_delivered: "訂單已送達。",
      delivery_time: "交貨時間",
      tracking_code: "跟踪代碼",
      tracking_url: "跟踪網址",

      notifications: {
        confirm_delivery: "您的訂單已確認。",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "商品原創性保證",
      return: "返回",
      table: {
        product: "產品名稱",
        count: "數數",
        unit_price: "單價",
        total_price: "總價",
        discount: "折扣",
        final_price: "最終價格",
        returned: "回來",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "返回",
    count_input: "退貨件數",
    count_input_message: "您退回多少件商品？",
    reason_input: "回來的理由",
    reason_input_message: "選擇退貨的原因。",
    note_input: "描述",
    note_input_hint: "說明退貨原因..",
    note_input_message:
      "如有需要，請說明退回此商品的原因。",
    media_message:
      "您可以在這裡上傳產品的圖片、音頻或視頻，以獲得更好的產品狀態信息支持。選擇文件將自動發送並確認。",
    video: "視頻",
    voice: "嗓音",
    add_action: "發送退貨請求",
    notifications: "您的退貨申請已成功註冊。",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "命令",
    info: {
      title: "購買的虛擬產品",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "我的個人信息",
    name: "姓名",
    email: "電子郵件",
    tel: "電話",
    identity: "驗證",
    success_kyc: "已驗證的 KYC",
    no_kyc: "無 KYC",
    club: "用戶級別",
    subscription: "新聞訂閱",
    leave_shop: "離開此商店並移除所有客戶級別",
    leave_shop_action: "離開商店",
    edit_personal_info: "編輯個人信息",
    leave_dialog: {
      title: "離開商店",
      message:
        "退訂本店不會刪除您的訂單信息和記錄。",
      action: "離開",
    },
    notifications: {
      leave_success: "離開商店",
    },
    club_table: {
      discount: "折扣",
      limit: "限制",
      currency: "貨幣",
      free_shipping: "免運費",
    },

    my_profile: {
      title: "我的個人資料",
      subtitle: "這是我在商店中的顧客個人資料。",
      edit_action: "編輯個人資料"
    },
    subscribe_status: {
      subscribed: "我已訂閱透過電子郵件接收最新消息與優惠活動。",
      unsubscribed: "我未訂閱透過電子郵件接收任何消息或優惠活動。"
    },
    my_club: {
      subtitle: "我的會員俱樂部等級及其權益。"
    },
    kyc: {
      subtitle: "這是我的全球身分識別資訊。"
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "購物車",
    total_price: "總金額",
    shipping: "運輸費",
    free_shipping: "免運費",
    shipping_not_pay: "不包含",
    total_discount: "總折扣",
    customer_club: "客戶俱樂部會員",
    customer_club_discount: "會員折扣",
    final_price: "最後付款",
    lead_time: "準備時間",
    lead_time_unit: "小時",
    receive_time: "首選交貨時間",
    select_time: "選擇交貨時間",
    no_select_time: "儘早",
    transportation_type: "運輸類型",
    days_input: "交貨天數",
    days_input_label: "天",
    days_input_no_data: "至少選擇一天",
    time_input: "交貨時間",
    time_input_label: "交貨時間",
    time_input_label_no_data: "選擇至少一個時間間隔",
    support_cod: "貨到付款",
    not_support_cod: "無法在當地支付！",
    final_confirm_action: "最終訂單確認",
    pay_and_complete_action: "現在付款",
    pre_confirm_service: "提交請求",
    cross_selling_discount: "收藏折扣",

    errors: {
      no_address: "選擇您希望將訂單運送到的地址。",
      no_phone: "輸入聯繫電話以協調收貨。",
      select_billing_country: "選擇您的帳單國家/地區",
      select_billing_state: "選擇您的稅務區域",
    },
    same_billing_address: "帳單信息與收件人信息相同",
    same_billing_address_desc:
      "賬單地址與送貨地址相同。",
    custom_billing_info: "不同的帳單信息",
    custom_billing_info_desc:
      "您可以輸入您的稅號並設置不同的帳單地址。",
    basket_empty: "籃子是空的",
    extra_shipping_count: "您將收到 {count} 個包裹。",
    select_location_error:
      "在地圖上找到收貨地點，點擊地圖中間的指示符，確定收貨人的準確地址。",

    billing_business_desc: "這是一個帶有稅號的企業帳戶。",
    billing_personal_desc: "這是一個個人帳戶。",

    no_billing_title: "無計費",
    no_billing_desc: "將賬單地址留空。",

    can_pay_cod_message:"您可以在配送時以現金支付此訂單。",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "件",
    lead_unit: "小時",
    count_input: "數數",

    price_changed: "價格變了。新的價格：",
    offer: "購買 {count} 件商品可享 {percent}% 折扣",
    offer_free: "免費獲得 {count} 件",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "我的地址",
    subtitle:"在此查看已儲存的地址，並輕鬆新增地址。",
    new_action: "新地址",
    receiver: "收件人",
    address: "地址",
    building_no: "牌照",
    building_unit: "單元",
    postcode: "郵政編碼",
    tel: "電話",
    description: "筆記",

    map: {
      title: "我的地址",
      confirm: "地址登記",
      address_type: "地址",
      receptor_type: "接受者",
    },
    add_dialog: {
      title: "新地址名稱",
      message: "輸入新地址的標題。",
      address_name_input: "地址（必填）",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "退貨請求",
    subtitle:"在此查看您的退貨申請。對於有退貨政策的商品，您可以在訂單頁提交退貨申請。",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "願望清單",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "我的評論",
    first_post: "第一篇文章",
    last_edit: "上次編輯",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "我的禮品卡",
    add_action: "添加卡",
    add_card_dialog: {
      title: "添加禮品卡",
      message:
        "輸入卡號和安全碼。禮品卡將添加到您的帳戶。",
      card_number_input: "卡號",
      info: "注意：從商店購買時，您會看到使用禮品卡付款的選項。選擇此選項，您的充值餘額將從訂單金額中扣除。",
      add_action: "卡註冊",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "比較產品",
    action_button: "相比",

    /** {@see SComparisonList} **/
    list: {
      no_data: "沒有產品被添加到比較列表中。",
      price: "價格",
      type: "類型",
      brand: "牌",
      warranty: "保修單",
      variants_comparison: "比較產品變體",
      spec: "技術規格",
      pros: "優點",
      cons: "缺點",
      user_review: "用戶評論",
      rating: "評分",
      rating_count: "評論數",
      info: "您可以通過發送以下鏈接與您的朋友分享此產品比較表，或通過保存此鏈接稍後訪問它。",
      copy_action: "複製比較鏈接",
      check_list: ["是", "有"],
      cross_list: ["否", "沒有"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "只有原件",
    only_has_discount: "只打折",
    price_range: "價格範圍",
    brands: "牌",
    main_shop_page: "店鋪主頁",
    home: "家",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "尊敬的 {user}，您已購買此產品。你覺得這個產品怎麼樣？",
    notification: {
      title: "祝賀",
      message: "您的評論已被記錄。",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "博客",
    add_new_blog: "新博客",
    popular: "受歡迎的",
    topics: "話題",
    suggestions: "建議",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "關於我們",
    terms: "使用條款",
    privacy: "隱私政策",
    contact_us: "聯繫我們",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "聯繫我們表格",
    name: "姓名",
    email: "電子郵件",
    phone: "電話",
    message: "信息",
    notifications: {
      success: "您的留言已發送。",
    },
    submitted_title: "感謝您與我們聯繫！",
    submitted_message:
      "感謝您抽空與我們聯繫。您的訊息已收到，我們的團隊目前正在審核。我們將盡快回复，感謝您在此期間的耐心等待。您的興趣和回饋對我們很重要，我們致力於為您提供最好的支援。",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "付款確認",
      payment_success: "付款完成。",
      buy_title: "買",
      pay_by_giftcards: "您的訂單是使用禮品卡支付的。",
      free_order: "您的訂單是免費的。",
      pay_by_cod: "您的訂單已添加為貨到付款。",
      pay_by_dir:
        "您的訂單已成功添加。現在您可以通過直接匯款支付，然後在訂單頁面上傳付款收據。",
      pay_title: "支付",
      qr_code_payment: "付款二維碼地址已創建。",
      connecting_to_online_gateway: "連接到在線支付網關。",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "保持到開始",
    title_between_start_end: "堅持到最後",
    title_after_end: "完成的",
    title_no_start_end: "沒有時間段！",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "每個訂單您可以收到一份禮物。",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "優惠券代碼",
    add_coupon: "添加優惠券",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "鱷梨表格未啟用！",
    last_update: "最後更新：",
    step1:
      "1. 輸入您要訂購的產品名稱和詳細信息，然後單擊添加按鈕。",
    title_plc: "輸入產品名稱。",
    description_plc: "你有更多的產品描述嗎？",
    link_plc: "你有產品的鏈接嗎？",
    image: "產品圖片",
    image_msg: "如果需要，您可以發送產品圖片。",
    add_item: "添加項目",
    items_list: "要求的產品清單",
    currency_msg: "您必須使用該貨幣支付此訂單的金額。",
    step2:
      "2. 添加所有需要的項目後，單擊訂單審核請求按鈕。在此階段，我們將審核訂單並告知您價格。通過單擊此鏈接，您將能夠看到價格和付款鏈接。",
    order_action: "訂單登記",
    show_all: "顯示所有",
    show_accepted: "顯示已確認的項目",
    last_orders: "您最近的訂單列表",
    pending_status: "審查中",
    check_now: "檢查訂單",
    add_new_order: "下新訂單",
    pay_online: "在線支付",
    pricing_not_completed_message:
      "您的訂單正在審核中。您的訂單將很快得到審核和定價，您將能夠支付訂單。",

    select_address_message:
      "請輸入您的地址，然後您就可以提交訂單了。",

    delete_item_dialog: {
      title: "從購物車中刪除商品",
      message: "您想從購物車中刪除此商品嗎？",
      action: "是的，刪除",
    },

    notifications: {
      order_success: "您的訂單已成功下單。",
      delete_success: "項目已刪除。",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "訂單創建",
    message:
      "通過掃描產品代碼創建您要購買的產品列表。",

    currency_msg: "您要支付的貨幣。",
    order_action: "支付",
    add_new_order: "新命令",
    continue_order: "繼續訂購",

    delete_item_dialog: {
      title: "從購物車中刪除商品",
      message: "您想從購物車中刪除此商品嗎？",
      action: "是的，刪除",
    },
    notifications: {
      order_success: "您的訂單已成功下單。",
      delete_success: "項目已刪除。",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "上傳付款收據的圖片。",
    upload_payment_receipt_done:
      "✔ 您已經上傳收據圖片，等待我們的批准。如果需要更改，可以將之前的圖像替換為新圖像。",
    public_form_title: "匯款賬戶信息",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "待辦事項清單",
      message: "指定您想要做的工作的標題，並讓買家知道它的進展情況。",
    },
    booking: {
      title: "預訂/預訂",
      message: "此訂單將在指定時間處理，客戶已選擇所需時間段，如果您想在所選時間段內進行任何更改，請告知客戶。",

      selected_checkin: "客戶選擇入住",
      selected_checkout: "客戶選擇的退房",
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
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "正在等待檢查訪問...",
    no_access_message:
      "很遺憾，您無權訪問我們的商店。<br/>請聯繫我們。",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "分享訂單",
    title: "與他人共享此訂單。",
    message:
      "這是一個安全鏈接，只與您認識的人分享。擁有此鏈接的每個人都可以復制您的訂單並查看所選地址。它將包含有關您當前購物車的信息。",
    valid_period: "此鏈接將在 48 小時後失效。",
    import_order_action: "進口訂單",
    retrieve_dialog_title: "檢索外部訂單",
    address_included: "分享籃子物品+地址",
    address_excluded: "僅分享購物籃物品",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "價格",
    inventory: "存貨",
    discount: "折扣",
  },

  rating: {
    product_rating_message:
      "該產品已獲得 {rate} 的評分（滿分 5 星）並由 {rate_count} 人評分。",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "探索！",
      same_tags_subtitle: "查找更多卓越的相關項目。",
      same_category_subtitle: "在此類別中查找更多卓越的項目。",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "將 {product} 搭配",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "查看 {vendor} 的商店",
  },

  login: {
    welcome: "歡迎",
  },


};
