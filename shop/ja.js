export default {
  /** @see ProductRatingView **/
  surveys: ["非常に貧しい", "貧しい", "普通", "良い", "優秀な"],


  /** @see ShopFooter **/
  footer: {
    map: "地図",
    email: "電子メイル",
    phone: "電話",
    address: "住所",

    copyright:
      "非営利目的でのみ、ソースを参照してコンテンツを使用する（{shop_title}とのリンク）。 すべての権利は{shop_title}に帰属します。",
    powered_by: "搭載",
    privacy: "プライバシーポリシー",
    term_of_use: "利用規約",
    shop_app_setting: "ショップの設定とGDPR",

    dialog_setting: {
      title: "ショップアプリケーションの設定",
      app_list: "アプリケーションのリスト",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "完売",
    review_unit: "レビュー",
    not_original: "オリジナルではありません",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "フィルター",
    native: {
      title: "アプリケーションログイン",
      message:
        "このアプリはあなたの店のアカウント情報へのアクセスを必要とします。 これには、名前、連絡先番号、住所、電子メール、注文履歴、注文、およびこのストアへのコメントの投稿へのアクセスが含まれます。",
      message_bold:
        "このストアに入るには、必ず公式ストアアプリを使用してください。",
    },
  },

  /** @see SortView **/
  sort: {
    title: "並び替え",
    title_small: "並び替え..",
    nothing: "何もない",
    most_views: "ほとんどのビュー",
    most_likes: "最も人気のある",
    most_recent: "最新",
    most_sell: "ベストセラー",
    cheapest: "最も安い",
    most_expensive: "最も高価な",
    only_available: "利用可能",
    view_mode: {
      normal: "普通",
      grid: "グリッド",
      list: "リスト",
      insta: "インスタ",
    },
  },

  /** @see ProductInfo **/
  product_info: {
    fake: "偽",
    action: "競売",
    compare_limit: "10アイテム制限",
    compare_add: "比較リストに追加",
    compare_be_in_list: "比較リスト内",

    type: "タイプ",
    brand: "ブランド",
    category: "カテゴリー",
    discount: "割引",
    track_price: "価格を追跡する",
    waiting_for_auction: "オークションを待っていますか？",
    inform_auction: "オークションについて教えてください",
    return_in_days: "{日}日保証返品",
    support24h7: "24時間7日間のサポート",
    support_normal: "労働時間のサポート",
    original_guarantee: "元の保証",
    cod_payment: "代金引換サポート",

    pros: "長所",
    cons: "短所",

    external_link: "続きを読む",
    notifications: {
      congratulation: "おめでとう",
      waiting_list_add_success:
        "この商品がオークションにかけられたらお知らせします。",
      waiting_list_delete_success: "オークションの順番待ちリストを終了しました。",
    },

    offer_message: "{min_quantity}を購入すると、これらのアイテムが{％}％オフになります",
    up_to: "注文ごとに最大{per_order} x",
    get_free: "自由になる",
    get_off: "{パーセント}％オフをゲット",
  },

  /** @see BuyButton **/

  buy_button: {
    waiting_for_availability: "空き状況を待っています",
    inform_me_when_available: "これを待っていますか？",
    pay_buy: "支払いと購入",
    quantity: "カウント",
    quantity_in_basket: "カート内のアイテム",
    count_unit: "x",
    remove: "削除する",
    add_to_basket: "カートに追加",
    buy: "買う",
    notifications: {
      inform_add_success: "利用可能になり次第お知らせします。",
      inform_remove_success: "順番待ちリストから削除されました。",
    },
  },

  /** @see ProductPage **/

  product: {
    review: "レビュー",
    spec: "スペック",
    comments: "コメント",
    related_products_title: "関連製品",
    price: "価格",
    rate: "割合",
    comment: "コメント",
  },

  /** @see LayoutShop **/
  layout_shop: {
    shop_menu: {
      orders_history: "注文履歴",
      profile: "プロフィール",
      favorites: "私のお気に入り",
      gift_cards: "ギフトカード",
      return_requests: "返品リクエスト",
      basket: "ショッピングカート",
    },
    user_menu: {
      my_shops: "マイストア",
      go_to_admin: "{shop_name}を管理する",
      exit_from: "ログアウト{shop_name}",
      chips: "{チップ}チップ",
    },
    login_to_shop: "ストアにログイン",
    login_to_shop_short: "ログインする",
    item_in_basket_message: "{カウント}このアイテムはカートに入っています。",
    search_title: "ストア{shop_name}で検索",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "カート",
    basket_is_empty: "あなたのカートは空です。",
    total_price: "合計",
    view_basket: "かごの中身を見る",
    more: "もっと ...",
    accept_and_pay: "チェックアウト",
    items: "アイテム",
  },



  /** {@see HistoryOrdersPhysical} **/
  history_orders_physical: {
    rejected: "拒否されました",
    table: {
      code: "注文コード",
      reserved: "日にち",
      delivery_state: "配送状況",
      price: "合計金額",
      status: "支払い状況",
    },
  },
  /** {@see OrdersHistoryListTemplate} **/
  history_orders: {
    table: {
      code: "注文コード",
      items: "アイテム",
      reserved: "日にち",
      delivery_state: "最新の状況",
      price: "合計金額",
      status: "支払い状況",
    },
  },

  /** {@see UserPagesLayout} **/
  user_page: {
    menu: {
      gift_card: "ギフトカード",
      comments: "コメント",
      favorites: "お気に入り",
      return_requests: "戻り値",
      addresses: "住所",
      profile: "プロフィール",
      orders: "注文",
    },
  },
  /** {@see MyPhysicalOrderInfoPage} **/
  physical_order_page: {
    title: "注文",

    /** {@see CustomerOrderPaymentWidget} **/
    payment: {
      title: "支払い",
      payment_waiting: "入金待ち",
      payment_completed: "有料",
      table: {
        title: "題名",
        amount: "額",
        description: "説明",
      },
      total_payment: "払込金額",
      discount: "割引",
      discount_code: "ディスカウントコード",
      delivery_fee: "輸送費",
      delivery_fee_after: "配達は支払われません",

      total_price: "アイテムの合計価格",
      total_items_discount: "アイテム割引",
      total_price_after_offers: "オファーを適用した後の合計価格",

      buyer_payment: "バイヤーの支払い額",
    },
    /** {@see CustomerOrderDeliveryWidget} **/
    delivery: {
      title: "配達",
      subtitle: "購入者情報",
      confirm_received_action: "製品の受領を確認する",
      confirm_received_info:
        "ご注文をいただいた場合は、確認ボタンをクリックしてください。 必要に応じて、確認を受け取った場合に紹介を送信できます。",
      receiver: "レシーバー",
      bill: "請求書",
      name: "名前",
      tel: "電話",
      email: "電子メイル",
      country: "国",
      state: "州",
      city: "市",
      address: "住所",
      building_no: "ビル番号",
      unit_no: "ユニット番号",
      postal_code: "郵便番号",
      description: "説明",
      order_delivered: "注文は配達されました。",
      delivery_time: "納期",
      tracking_code: "トラッキングコード",
      tracking_url: "URLの追跡",

      notifications: {
        confirm_delivery: "ご注文は承認されました。",
      },
    },
    /** {@see BasketItemsListView} **/
    basket_items: {
      original_warranty: "商品の独創性の保証",
      return: "戻る",
      table: {
        product: "商品名",
        count: "カウント",
        unit_price: "単価",
        total_price: "合計金額",
        discount: "割引",
        final_price: "最終価格",
        returned: "戻ってきた",
      },
    },
  },

  /** {@see BasketItemReturnForm} **/
  return_request: {
    title: "戻る",
    count_input: "返品数",
    count_input_message: "何人帰りますか？",
    reason_input: "返却理由",
    reason_input_message: "このアイテムを返品する理由を選択してください。",
    note_input: "説明",
    note_input_hint: "参照の理由を説明してください..",
    note_input_message:
      "必要に応じて、この項目を参照する理由を説明してください。",
    media_message:
      "必要に応じて、この項目を参照する理由を説明してください。",
    video: "ビデオ",
    voice: "ボイス",
    add_action: "返品リクエストを送信する",
    notifications: "紹介リクエストは正常に登録されました。",
  },
  /** {@see MyVirtualOrderInfoPage} **/
  virtual_order_page: {
    title: "注文",
    info: {
      title: "購入した仮想製品",
    },
  },

  /** {@see UserProfilePage} **/
  user_profile: {
    title: "私の個人情報",
    name: "名前",
    email: "Eメール",
    tel: "電話",
    identity: "認証",
    success_kyc: "承認されたKYC",
    club: "ユーザーレベル",
    subscription: "ニュース購読",
    leave_shop: "このストアを離れて、すべての顧客レベルを削除します",
    leave_shop_action: "店を出る",
    leave_dialog: {
      title: "店を出る",
      message:
        "このストアの購読を解除しても、注文情報とレコードは削除されません。",
      action: "離れる",
    },
    notifications: {
      leave_success: "店を出る",
    },
    club_table: {
      discount: "割引",
      limit: "制限",
      currency: "通貨",
      free_shipping: "送料無料",
    },
  },
  /** {@see BasketPage} **/
  basket_page: {
    title: "ショッピングカート",
    total_price: "合計金額",
    shipping: "輸送費",
    free_shipping: "送料無料",
    shipping_not_pay: "含まれていない",
    total_discount: "合計割引",
    customer_club: "クライアントクラブ会員",
    customer_club_discount: "会員割引",
    final_price: "最終的な支払い",
    lead_time: "準備時間",
    lead_time_unit: "時間",
    receive_time: "受け取る時間",
    select_time: "配達時間を選択",
    no_select_time: "準備ができたらいつでも送信してください。",
    transportation_type: "車両の種類",
    days_input: "配達日",
    days_input_label: "日々",
    days_input_no_data: "少なくとも1日を選択してください",
    time_input: "納期",
    time_input_label: "での配達",
    time_input_label_no_data: "少なくとも1つの時間間隔を選択してください",
    support_cod: "代金引換",
    not_support_cod: "ローカルで支払うことができません！",
    final_confirm_action: "最終注文確認",
    pay_and_complete_action: "今払う",
    pre_confirm_service: "リクエストを送信",

    errors: {
      no_address: "ご注文の配送先住所を選択してください。",
      no_phone: "入庫を調整するための連絡先番号を入力します。",
      select_billing_country: "請求国を選択してください",
      select_billing_state: "課税地域を選択してください",
    },
    same_billing_address: "レシーバー情報と同じ請求情報",
    custom_billing_info: "さまざまな請求情報",
    basket_empty: "バスケットが空です",
    extra_shipping_count: "{count}パッケージを受け取ります。",
    select_location_error:
      "地図上で貨物の受け取り場所を見つけ、地図の中央にあるインジケーターをクリックして、受取人の正確な住所を確認します。",
  },
  /** {@see BasketListItems} **/
  basket_items: {
    items_unit: "NS",
    lead_unit: "時間",
    count_input: "カウント",

    price_changed: "価格が変更されました。 新しい価格：",
    offer: "Get {count}x item by {percent}% off",
    offer_free: "{count} xを無料で入手",
  },

  /** {@see UserAddressesPage} **/
  addresses_page: {
    title: "私の住所",
    new_action: "新しいアドレス",
    receiver: "レシーバー",
    address: "住所",
    building_no: "ナンバープレート",
    building_unit: "単位",
    postcode: "郵便番号",
    tel: "電話",
    description: "ノート",

    map: {
      title: "私の住所",
      confirm: "住所登録",
      address_type: "住所",
      receptor_type: "レシーバー",
    },
    add_dialog: {
      title: "新しいアドレス名",
      message: "新しいアドレスのタイトルを入力します。",
      address_name_input: "住所（必須）",
    },
  },
  /** {@see UserReturnRequests} **/
  return_requests: {
    title: "返品リクエスト",
  },
  /** {@see UserFavoritesPage} **/
  user_favorites: {
    title: "ウィッシュリスト",
  },
  /** {@see UserCommentsPage} **/
  user_comments: {
    title: "私のコメント",
    first_post: "最初の投稿",
    last_edit: "最終編集",
  },
  /** {@see UserGiftCardsPage} **/
  user_gift_cards: {
    title: "マイギフトカード",
    add_action: "カードを追加",
    add_card_dialog: {
      title: "ギフトカードを追加する",
      message:
        "カード番号とセキュリティコードを入力します。 アカウントにギフトカードが追加されます。",
      card_number_input: "カード番号",
      info: "注：ストアから購入する場合、ギフトカードで支払うオプションが表示されます。 このオプションを選択すると、リチャージ残高の金額が注文金額から差し引かれます。",
      add_action: "カード登録",
    },
  },

  /** {@see ProductComparison} **/
  product_comparison: {
    title: "製品比較",
    action_button: "比較",

    /** {@see ProductComparisonList} **/
    list: {
      no_data: "比較リストに製品は追加されませんでした。",
      price: "価格",
      type: "タイプ",
      brand: "ブランド",
      warranty: "保証",
      variants_comparison: "製品の多様性を比較する",
      spec: "技術仕様",
      pros: "長所",
      cons: "短所",
      user_review: "ユーザーコメント",
      rating: "評価",
      rating_count: "レビュー数",
      info: "この製品比較表は、次のリンクを送信して友達と共有するか、このリンクを保存して後でアクセスできます。",
      copy_action: "比較リンクをコピー",
      check_list: ["はい", "もっている"],
      cross_list: ["番号", "していません"],
    },
  },
  /** {@see ProductFilterMenu} **/
  product_filter_menu: {
    only_original: "オリジナルのみ",
    only_has_discount: "割引のみ",
    price_range: "価格帯",
    brands: "ブランド",
    main_shop_page: "メインページを保存する",
    home: "家",
  },

  /** {@see ProductRatingView} **/
  product_rating_view: {
    message:
      "{user}様、この製品を購入しました。 この商品についてどう思いますか？",
    notification: {
      title: "おめでとうございます",
      message: "コメントが記録されました。",
    },
  },

  /** @see ShopBlogsPage **/
  blogs: {
    title: "ブログ",
    add_new_blog: "新しいブログ",
    popular: "人気",
    topics: "トピック",
    suggestions: "提案",
  },

  /** @see ShopProfilePage **/
  official_pages: {
    about_us: "私たちに関しては",
    terms: "利用規約",
    privacy: "プライバシーポリシー",
    contact_us: "お問い合わせ",
  },

  /** @see ShopContactUs **/
  contact_us_form: {
    title: "お問い合わせフォーム",
    name: "名前",
    email: "Eメール",
    phone: "電話",
    message: "メッセージ",
    notifications: {
      success: "メッセージが送信されました。",
    },
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "支払い確認",
      payment_success: "支払いが完了しました。",
      buy_title: "買う",
      pay_by_giftcards: "ご注文はギフトカードで支払われました。",
      free_order: "ご注文は無料です。",
      pay_by_cod: "ご注文は代金引換として追加されました。",
      pay_by_dir:
        "ご注文は正常に追加されました。 これで、直接送金で支払いを行ってから、注文ページに支払い領収書をアップロードできます。",
      pay_title: "支払い",
      qr_code_payment: "支払いQRコードアドレスが作成されました。",
      connecting_to_online_gateway: "オンライン支払いゲートウェイに接続しています。",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "初めに残ります",
    title_between_start_end: "最後まで残っている",
    title_after_end: "終了した",
    title_no_start_end: "期間なし！",
  },
  /** {@see LotteryPrizes} **/
  lottery_prizes: {
    message: "注文ごとに1つのギフトを受け取ることができます。",
  },

  /** {@see Coupons} **/
  coupons: {
    coupon_code: "クーポンコード",
    add_coupon: "クーポンを追加",
  },

  /** {@see AvocadoCustomerAddOrderForm} **/
  /** {@see AvocadoItemsList} **/
  /** {@see AvocadoMyOrdersList} **/
  /** {@see AvocadoBuyerFormPage} **/
  /** {@see AvocadoOrderPage} **/

  avocado: {
    not_enable: "アボカドフォームが有効になっていません！",
    last_update: "最後の更新：",
    step1:
      "1.注文する製品の名前と詳細を入力し、[追加]ボタンをクリックします。",
    title_plc: "製品の名前を入力します。",
    description_plc: "製品の説明は他にもありますか？",
    link_plc: "製品へのリンクはありますか？",
    image: "商品画像",
    image_msg: "必要に応じて商品画像を送信できます。",
    add_item: "アイテムを追加",
    items_list: "リクエストされた製品のリスト",
    currency_msg: "この注文の金額をこの通貨で支払う必要があります。",
    step2:
      "2.必要なアイテムをすべて追加したら、注文レビューリクエストボタンをクリックします。 この段階で、注文を確認し、価格をお知らせします。 このリンクをクリックすると、価格と支払いのリンクが表示されます。",
    order_action: "注文登録",
    show_all: "すべて表示する",
    show_accepted: "確認済みのアイテムを表示する",
    last_orders: "最新の注文のリスト",
    pending_status: "レビュー中",
    check_now: "注文を確認する",
    add_new_order: "新規注文の登録",
    pay_online: "オンラインで支払う",
    pricing_not_completed_message:
      "ご注文は審査中です。 ご注文はまもなく確認され、価格が設定され、注文を支払うことができるようになります。",

    delete_item_dialog: {
      title: "ショッピングカートからアイテムを削除します",
      message: "このアイテムをカートから削除しますか？",
      action: "はい、削除します",
    },

    notifications: {
      order_success: "ご注文は正常に行われました。",
      delete_success: "アイテムが削除されました。",
    },
  },

  /** {@see HyperAddOrderForm} **/
  hyper: {
    title: "注文の作成",
    message:
      "製品コードをスキャンして、購入する製品のリストを作成します。",

    currency_msg: "支払いたい通貨。",
    order_action: "支払い",
    add_new_order: "新規注文",
    continue_order: "注文を続ける",
  },

  /** {@see RowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "領収書の画像をアップロードします。",
    upload_payment_receipt_done:
      "✔領収書の画像は既にアップロードされています。承認されるまでお待ちください。 変更する必要がある場合は、前の画像を新しい画像に置き換えることができます。",
    public_form_title: "送金の口座情報",
  },
};
