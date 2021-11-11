export default {
  /** @see ProductRatingView **/
  surveys: ["很窮", "貧窮的", "普通的", "好的", "優秀"],


  /** @see ShopFooter **/
  footer: {
    map: "地圖",
    email: "電子郵件",
    phone: "電話",
    address: "地址",

    copyright:
      "僅出於非商業目的使用內容並參考來源（與 {shop_title} 鏈接）。 {shop_title} 保留所有權利。",
    powered_by: "供電",
    privacy: "隱私政策",
    term_of_use: "使用條款",
    shop_app_setting: "商店設置和 GDPR",

    dialog_setting: {
      title: "商店應用程序設置",
      app_list: "申請清單",
    },
  },

  /** @see ProductCard **/
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
      title: "申請登錄",
      message:
        "此應用程序需要訪問您的商店帳戶信息。 這包括訪問該商店的姓名、聯繫電話、地址、電子郵件、訂單歷史、訂購和發布評論。",
      message_bold:
        "請務必使用官方商店應用程序進入本商店。",
    },
  },

  /** @see SortView **/
  sort: {
    title: "排序方式",
    title_small: "排序方式..",
    nothing: "沒有",
    most_views: "大多數觀看次數",
    most_likes: "最受歡迎",
    most_recent: "最新",
    most_sell: "最暢銷",
    cheapest: "最便宜",
    most_expensive: "最貴的",
    only_available: "可用的",
    view_mode: {
      normal: "普通的",
      grid: "網格",
      list: "列表",
      insta: "Insta",
    },
  },

  /** @see ProductInfo **/
  product_info: {
    fake: "偽造的",
    action: "拍賣",
    compare_limit: "10 項限制",
    compare_add: "加入比較",
    compare_be_in_list: "在比較列表中",

    type: "類型",
    brand: "牌",
    category: "類別",
    discount: "折扣",
    track_price: "跟踪價格",
    waiting_for_auction: "等待拍賣？",
    inform_auction: "告訴我關於拍賣",
    return_in_days: "{days} 天保修退貨",
    support24h7: "7天24小時支持",
    support_normal: "工作時間支持",
    original_guarantee: "原廠保證",
    cod_payment: "貨到付款支持",

    pros: "優點",
    cons: "缺點",

    external_link: "閱讀更多",
    notifications: {
      congratulation: "恭喜",
      waiting_list_add_success:
        "我們會在此產品拍賣時通知您。",
      waiting_list_delete_success: "您已退出拍賣等候名單。",
    },

    offer_message: "購買 {min_quantity} 這些商品可享受 {percent}% 的折扣",
    up_to: "每個訂單最多 {per_order}x 個",
    get_free: "免費",
    get_off: "獲得 {percent}% 折扣",
  },

  /** @see BuyButton **/

  buy_button: {
    waiting_for_availability: "等待可用性",
    inform_me_when_available: "等待這個？",
    pay_buy: "支付和購買",
    quantity: "數數",
    quantity_in_basket: "購物車中的物品",
    count_unit: "x",
    remove: "消除",
    add_to_basket: "添加到購物車",
    buy: "買",
    notifications: {
      inform_add_success: "我們會在可用時通知您。",
      inform_remove_success: "您已從等候名單中刪除。",
    },
  },

  /** @see ProductPage **/

  product: {
    review: "審查",
    spec: "規格",
    comments: "註釋",
    related_products_title: "相關產品",
    price: "價錢",
    rate: "速度",
    comment: "評論",
  },

  /** @see LayoutShop **/
  layout_shop: {
    shop_menu: {
      orders_history: "訂單歷史",
      profile: "輪廓",
      favorites: "我最喜歡的",
      gift_cards: "禮品卡",
      return_requests: "退貨要求",
      basket: "購物車",
    },
    user_menu: {
      my_shops: "我的店鋪",
      go_to_admin: "管理{shop_name}",
      exit_from: "退出{shop_name}",
      chips: "{chips} 籌碼",
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
    view_basket: "查看購物車",
    more: "更多的 ...",
    accept_and_pay: "查看",
    items: "項目）",
  },



  /** {@see HistoryOrdersPhysical} **/
  history_orders_physical: {
    rejected: "拒絕了",
    table: {
      code: "訂購代碼",
      reserved: "日期",
      delivery_state: "郵寄狀態",
      price: "總價",
      status: "支付狀態",
    },
  },
  /** {@see OrdersHistoryListTemplate} **/
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

  /** {@see UserPagesLayout} **/
  user_page: {
    menu: {
      gift_card: "禮物卡",
      comments: "註釋",
      favorites: "收藏夾",
      return_requests: "退貨",
      addresses: "地址",
      profile: "輪廓",
      orders: "訂單",
    },
  },
  /** {@see MyPhysicalOrderInfoPage} **/
  physical_order_page: {
    title: "訂單",

    /** {@see CustomerOrderPaymentWidget} **/
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
      delivery_fee_after: "未支付運費",

      total_price: "商品總價",
      total_items_discount: "商品折扣",
      total_price_after_offers: "申請優惠後的總價",

      buyer_payment: "買家付款金額",
    },
    /** {@see CustomerOrderDeliveryWidget} **/
    delivery: {
      title: "送貨",
      subtitle: "買家信息",
      confirm_received_action: "確認收貨",
      confirm_received_info:
        "如果您收到訂單，請單擊確認按鈕。 如果需要，您可以在收到確認後提交推薦信。",
      receiver: "接收者",
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
        confirm_delivery: "您的訂單已獲批准。",
      },
    },
    /** {@see BasketItemsListView} **/
    basket_items: {
      original_warranty: "保證商品的原創性",
      return: "返回",
      table: {
        product: "產品名稱",
        count: "數數",
        unit_price: "單價",
        total_price: "總價",
        discount: "折扣",
        final_price: "最終價格",
        returned: "最終價格",
      },
    },
  },

  /** {@see BasketItemReturnForm} **/
  return_request: {
    title: "返回",
    count_input: "退貨數量",
    count_input_message: "你返回多少？",
    reason_input: “回來的理由",
    reason_input_message: "選擇退貨原因。",
    note_input: "描述",
    note_input_hint: "描述引用的原因..",
    note_input_message:
      "如果需要，請描述引用此項目的原因。",
    media_message:
      "您可以在此處上傳產品的圖片、音頻或視頻，以獲得更好的產品狀態信息支持。 選擇文件將自動發送並確認。",
    video: "視頻",
    voice: "語音",
    add_action: "發送退貨請求",
    notifications: "您的推薦請求已成功註冊。",
  },
  /** {@see MyVirtualOrderInfoPage} **/
  virtual_order_page: {
    title: "命令",
    info: {
      title: "購買的虛擬產品",
    },
  },

  /** {@see UserProfilePage} **/
  user_profile: {
    title: "我的個人信息",
    name: "姓名",
    email: "電子郵件",
    tel: "電話",
    identity: "驗證",
    success_kyc: "批准的 KYC",
    club: "用戶級別",
    subscription: "新聞訂閱",
    leave_shop: "離開這家商店並刪除所有客戶級別",
    leave_shop_action: "離開商店",
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
      currency: "限制",
      free_shipping: "免運費",
    },
  },
  /** {@see BasketPage} **/
  basket_page: {
    title: "購物車",
    total_price: "總金額",
    shipping: "運輸費",
    free_shipping: "免運費",
    shipping_not_pay: "不包含",
    total_discount: "總折扣",
    customer_club: "客戶俱樂部會員",
    customer_club_discount: "會員優惠",
    final_price: "最後付款",
    lead_time: "準備時間",
    lead_time_unit: "小時",
    receive_time: "領取時間",
    select_time: "選擇交貨時間",
    no_select_time: "隨時發送。",
    transportation_type: "車輛類型",
    days_input: "交貨天數",
    days_input_label: "天",
    days_input_no_data: "至少選擇一天",
    time_input: "交貨時間",
    time_input_label: "交貨地點",
    time_input_label_no_data: "選擇至少一個時間間隔",
    support_cod: "貨到付款",
    not_support_cod: "本地無法支付！",
    final_confirm_action: "最終訂單確認",
    pay_and_complete_action: "現在付款",
    pre_confirm_service: "提交請求",

    errors: {
      no_address: "選擇您希望將訂單運送到的地址。",
      no_phone: "輸入聯繫電話以協調收貨。",
      select_billing_country: "選擇您的帳單國家/地區",
      select_billing_state: "選擇您的納稅地區",
    },
    same_billing_address: "帳單信息與接收者信息相同",
    custom_billing_info: "不同的賬單信息",
    basket_empty: "籃子是空的",
    extra_shipping_count: "您將收到 {count} 個包裹。",
    select_location_error:
      "在地圖上找到收貨地點，然後點擊地圖中間的指示符，確定收件人的確切地址。",
  },
  /** {@see BasketListItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "小時",
    count_input: "數數",

    price_changed: "價格變了。 新價格：",
    offer: "獲得 {count}x 件商品 {percent}% 的折扣",
    offer_free: "免費獲得 {count}x 個",
  },

  /** {@see UserAddressesPage} **/
  addresses_page: {
    title: "我的地址",
    new_action: "新地址",
    receiver: "接收者",
    address: "地址",
    building_no: "牌照",
    building_unit: "單元",
    postcode: "郵政編碼",
    tel: "電話",
    description: "筆記",

    map: {
      title: "我的地址",
      confirm: "地址註冊",
      address_type: "地址",
      receptor_type: "接收者",
    },
    add_dialog: {
      title: "新地址名稱",
      message: "輸入新地址的標題。",
      address_name_input: "地址（必填）",
    },
  },
  /** {@see UserReturnRequests} **/
  return_requests: {
    title: "退貨要求",
  },
  /** {@see UserFavoritesPage} **/
  user_favorites: {
    title: "願望清單",
  },
  /** {@see UserCommentsPage} **/
  user_comments: {
    title: "我的評論",
    first_post: "第一個帖子",
    last_edit: "上次編輯",
  },
  /** {@see UserGiftCardsPage} **/
  user_gift_cards: {
    title: "我的禮品卡",
    add_action: "添加卡片",
    add_card_dialog: {
      title: "添加禮品卡",
      message:
        "輸入卡號和安全碼。 禮品卡將添加到您的帳戶中。",
      card_number_input: "卡號",
      info: "注意：從商店購買時，您將看到使用禮品卡付款的選項。 選擇此選項，您的充值餘額將從訂單金額中扣除。",
      add_action: "卡註冊",
    },
  },

  /** {@see ProductComparison} **/
  product_comparison: {
    title: "產品比較",
    action_button: "相比",

    /** {@see ProductComparisonList} **/
    list: {
      no_data: "沒有產品添加到比較列表中。",
      price: "價錢",
      type: "類型",
      brand: "牌",
      warranty: "保修單",
      variants_comparison: "比較產品多樣性",
      spec: "技術規格",
      pros: "優點",
      cons: "缺點",
      user_review: "用戶評論",
      rating: "評分",
      rating_count: "評論數量",
      info: "您可以通過發送以下鏈接與您的朋友分享此產品比較表，也可以通過保存此鏈接稍後訪問。",
      copy_action: "複製比較鏈接",
      check_list: ["是的", "已"],
      cross_list: ["不", "没有"],
    },
  },
  /** {@see ProductFilterMenu} **/
  product_filter_menu: {
    only_original: "只有原件",
    only_has_discount: "只打折",
    price_range: "價格範圍",
    brands: "牌",
    main_shop_page: "店鋪主頁",
    home: "家",
  },

  /** {@see ProductRatingView} **/
  product_rating_view: {
    message:
      "尊敬的{user}，您已購買此產品。 你覺得這個產品怎麼樣？",
    notification: {
      title: "祝賀",
      message: "您的評論已被記錄。",
    },
  },

  /** @see ShopBlogsPage **/
  blogs: {
    title: "博客",
    add_new_blog: "新博客",
    popular: "受歡迎的",
    topics: "話題",
    suggestions: "建議",
  },

  /** @see ShopProfilePage **/
  official_pages: {
    about_us: "關於我們",
    terms: "使用條款",
    privacy: "隱私政策",
    contact_us: "聯繫我們",
  },

  /** @see ShopContactUs **/
  contact_us_form: {
    title: "聯繫我們表格",
    name: "姓名",
    email: "電子郵件",
    phone: "電話",
    message: "信息",
    notifications: {
      success: "您的留言已發送。",
    },
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "付款確認",
      payment_success: "付款完成。",
      buy_title: "買",
      pay_by_giftcards: "您的訂單是使用禮品卡支付的。",
      free_order: "您的訂單是免費的。",
      pay_by_cod: "您的訂單已添加為貨到付款。",
      pay_by_dir:
        "您的訂單已成功添加。 現在您可以通過直接匯款付款，然後在訂單頁面上傳付款收據。",
      pay_title: "支付",
      qr_code_payment: "已創建付款二維碼地址。",
      connecting_to_online_gateway: "連接到在線支付網關。",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "剩下的開始",
    title_between_start_end: "留到最後",
    title_after_end: "完成的",
    title_no_start_end: "無時限！",
  },
  /** {@see LotteryPrizes} **/
  lottery_prizes: {
    message: "每個訂單您可以收到一份禮物。",
  },

  /** {@see Coupons} **/
  coupons: {
    coupon_code: "優惠卷號碼",
    add_coupon: "添加優惠券",
  },

  /** {@see AvocadoCustomerAddOrderForm} **/
  /** {@see AvocadoItemsList} **/
  /** {@see AvocadoMyOrdersList} **/
  /** {@see AvocadoBuyerFormPage} **/
  /** {@see AvocadoOrderPage} **/

  avocado: {
    not_enable: "鱷梨表單未啟用！",
    last_update: "最後更新：",
    step1:
      "1. 輸入您要訂購的產品的名稱和詳細信息，然後單擊添加按鈕。",
    title_plc: "輸入產品名稱。",
    description_plc: "你有更多的產品描述嗎？",
    link_plc: "你有產品的鏈接嗎？",
    image: "產品圖片",
    image_msg: "如果需要，您可以發送產品圖片。",
    add_item: "新增項目",
    items_list: "请求产品清单",
    currency_msg: "您必須使用該貨幣支付該訂單的金額。",
    step2:
      "2. 添加所有需要的項目後，單擊訂單審核請求按鈕。 在此階段，我們將審核訂單並告知您價格。 通過單擊此鏈接，您將能夠看到價格和付款鏈接。",
    order_action: "訂單登記",
    show_all: "顯示所有",
    show_accepted: "顯示已驗證的項目",
    last_orders: "您的最新訂單清單",
    pending_status: "審查中",
    check_now: "檢查訂單",
    add_new_order: "註冊新訂單",
    pay_online: "在線支付",
    pricing_not_completed_message:
      "您的訂單正在審核中。 您的訂單將很快得到審核和定價，您將能夠支付訂單。",

    delete_item_dialog: {
      title: "從購物車中刪除項目",
      message: "您要從購物車中刪除此商品嗎？",
      action: "是的，刪除",
    },

    notifications: {
      order_success: "您的訂單已成功下達。",
      delete_success: "項目已刪除。",
    },
  },

  /** {@see HyperAddOrderForm} **/
  hyper: {
    title: "訂單創建",
    message:
      "通過掃描產品代碼創建您要購買的產品列表。",

    currency_msg: "您要支付的貨幣。",
    order_action: "支付",
    add_new_order: "新命令",
    continue_order: "繼續訂購",
  },

  /** {@see RowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "上傳付款收據的圖片。",
    upload_payment_receipt_done:
      "✔ 您已經上傳了收據圖片，等待我們的批准。 如果需要更改，可以用新圖像替換之前的圖像。",
    public_form_title: "匯款賬戶信息",
  },
};
