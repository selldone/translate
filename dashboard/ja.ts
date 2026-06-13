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
    pay_today: "今日の支払い",
    pay_yesterday: "昨日の支払い",
    pay_last30days: "過去30日間の支払い",
    create_a_shop: "ショップを作成する",
    start_free: "無料で始めましょう",
    featured_apps: "注目のアプリ",
    more_apps: "より多くのアプリケーション",
    my_public_profile: "私の公開プロフィールページ",
    product_admin: "製品管理者",
    make_money_affiliate: "お金を稼ぐ",
    see_live_shop: "公開中のショップを見る",
    see_live_product: "公開中の商品を見る",
    has_inputs: "入力あり",
    main_domain: "メインドメイン",
    domains: "ドメイン",
    home_page: "ホームページ",
    google_icon_font_sample: "Google フォントのサンプル",
    fontawesome_icon_font_sample: "Fontawesome (V6) サンプル",
  },

  numbers: {
    infinite: "無制限",
  },

  error: {
    not_fount_data: "データが見つかりません！",
    license_max_limit: "ライセンスが制限に達しました！",
    no_read_access: "読み取りアクセスなし",
    no_write_access: "書き込みアクセスなし",
    no_access: "アクセス不可",
  },

  time_spans: {
    days_range: "日数範囲",
    today: "今日",
    yesterday: "昨日",
    last_7: "過去7日間",
    last_14: "過去14日間",
    last_30: "過去30日間",
    last_90: "過去90日間",
    custom: "カスタム",
  },
  device_types: {
    desktop: "デスクトップ",
    mobile: "モバイル",
    tablet: "タブレット",
  },

  create_website_action: "あなたのウェブサイトを作成してください—それは無料です",
  show_shops_action: "私の店のリスト",

  // Companies:

  YouTube: "YouTube",
  LinkedIn: "LinkedIn",
  Twitter: "Twitter",
  Facebook: "Facebook",
  Instagram: "Instagram",
  Reddit: "Reddit",
  GitHub: "GitHub",

  theme: {
    dark_mode: "ダークモード",
    dark_mode_description:
      "暗い背景に白い文字色を使用したい場合は、このオプションを選択してください。",
    light_mode: "ライトモード",
    light_mode_description:
      "背景を明るくし、テキストを黒色にしたい場合は、このオプションを選択します。",
  },

  ai: {
    remove_bg: {
      title: "背景を削除",
      subtitle: "透明な背景を作成します。",
    },
    reimagine: {
      title: "再考する",
      subtitle: "新しい背景でさらに多くの画像を作成します。",
    },
    upscale: {
      title: "高解像度化",
      subtitle: "画像の解像度を上げます。",
    },
  },

  // ------------------ Pages Title ------------------
  page_titles: {
    home: "Selldone|急成長中の企業向けのビジネスオペレーティングシステム",
    login: "ログイン",
    register: "登録",
    auth_2fa: "2要素認証🔐",
    academy: "ブログ",
    help: "ヘルプセンター",
    price_list: "価格表",
    my_stores: "マイストア",
    roles: "私の役割",
    wallet: "私の財布",
    personal_info: "個人情報| KYC",
    companies: "私の会社",
    access_control: "アクセス制御",
    security_center: "セキュリティセンター",
    gifts: {
      received: "ギフト|受け取った",
      send: "ギフト|送信済",
    },
    monetization: {
      linked_accounts: "収益化|リンクされたアカウント",
      plans: "収益化|計画とリンク",
    },
    affiliate: "アフィリエイト",
    avocado: "アボカド—現代のソーシャルセールスチャネル",
    guild: "ギルド—集合販売チャネル",
    partners_login: "パートナー|クライアントログイン",
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

  blank_is_all_products: "すべての製品を含めるには空白のままにします。",

  // ---------------------------------------------

  /** @see ShopCautionHelper **/
  cautions: {
    title:
      "次のヒントを実行して、ビジネスを専門的に管理します。利益率などを上げる方法のヒントを読み続けてください。私たちは途中であなたと一緒にいます。",
    no_payment_method: {
      title: "支払方法",
      message:
        "お店に支払い方法を追加する必要があります。",
      action: "ショップゲートウェイ",
    },
    link_account: {
      title: "リンクアカウント",
      message:
        "アカウント（{currency}）をショップにリンクする必要があります。",
      action: "ショップアカウント",
    },
    no_domain: {
      title: "ドメインを追加",
      message:
        "1つ以上のパーソナルドメインをストアに接続できます。あなたのウェブサイトはあなたのドメインにインストールされます。このプロセスは迅速かつ簡単です。",
    },
    domain_not_approved: {
      title: "ドメイン検証",
      message:
        "ドメイン{domain}は確認されていません。 DNS設定を確認し、ドメインを確認します。",
    },
    no_currency: {
      title: "通貨を追加する",
      message:
        "ストアには少なくとも1つの通貨を定義する必要があります。",
      action: "通貨管理",
    },
    no_primary_domain: {
      title: "メインドメイン",
      message:
        "プライマリドメインとしてドメインを選択してください。ドメイン名の横にあるスターボタンをクリックすると、ストアのプライマリドメインとしてドメインを選択できます。これは検索エンジンにとって重要です。ストアは、すべてのアクティブなドメインで引き続き利用できることに注意してください。",
    },
    shop_complete: {
      title: "完全な情報",
      action: "ショップ設定",
      location_msg: "あなたの場所を追加します",
      days_open_msg: "営業日を設定",
      time_open_msg: "開閉時間を設定する",
      description_msg: "あなたのビジネスについて簡単な説明を書いてください",
      icon_msg: "ストアのロゴを設定する",
      shop_gateways_msg: "お支払い方法を追加",
      socials_msg: "ソーシャルリンクを追加する",
      clubs_msg: "カスタマークラブを設定する",
      domains_msg: "カスタムドメインを追加する",
      primary_msg: "ドメインをプライマリとして設定する",
    },
  },

  /** @see BSupportMenu **/
  support: {
    request: "サポートをリクエストする",

    category: "カテゴリー",
    title: "サポート",
    message:
      "リクエストや質問をしてください。サポートチームがご案内します。リクエストに関連するページで質問することをお勧めします。たとえば、ドメイン設定について質問がある場合は、ストアのドメイン設定ページで送信してください。",

    close_at: "{date}に閉店",
    close_ticket_by_user: "ありがとう、私は答えを得ました",
  },

  /** @see SShopProductRatingView **/
  surveys: ["非常に貧しい", "貧しい", "普通", "良い", "素晴らしい"],

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

  /** {@see Helps} **/

  helps: {
    title: "Selldoneヘルプセンター",
    subtitle:
      "Selldoneへようこそ。ビジネスOSで新しいオンラインストアを構築している場合は、ここで詳細を確認できます。",

    add_new_help: "新しいヘルプ",
    resources: "資力",

    categories: {
      Welcome: "はじめに",
      Setup: "お店",
      Sell: "セールス＆マーケティング",
      Developer: "発展させる",

      Product: "製品とカテゴリの管理",
      Blog: "CMSとブログ",
      Order: "注文処理センター",
      Channel: "販売チャネル",
      Accounting: "会計とお支払い方法",
      Incentives: "インセンティブ",
      Marketing: "マーケティングとキャンペーン",
      Logistic: "物流と配送",
      Customers: "顧客クラブとセグメンテーション",
      Page: "ランディング ページとカスタム ページ",
      Access: "スタッフ / API アクセス管理",
      Application: "アプリケーション",
      POS: "POS",
    },
    faq: "FAQ",
    github: "GitHubリポジトリ",
    admin_api_app: "管理APIWebサービス",
    shop_api_app: "APIWebサービスを購入する",
    design_kit: "デザインキット",
    community: "コミュニティ",
  },

  /** {@see Blogs} **/
  /** {@see InterestTopicsView} **/

  blogs: {
    title: "ブログ",
    subtitle:
      "ビジネス、自信、そして繁栄するビジネスを作成するために必要な知識のためのレッスン。",
    add_new_blog: "新しいブログ",
    popular: "人気",
    topics: "トピック",
    select_topics: "あなたの仕事を選択してください。",
    select_job_topics: "仕事に関連するトピックを選択してください",
    select_interested_topics: "どんなトピックに興味がありますか？",
  },

  /** {@see ApiDocs} **/
  api: {
    title: "APIと統合",
    message:
      "Selldoneの重要な機能の1つは、ストアを管理し、ウェアハウジング、アカウンティングなどの他のサービスに接続するための堅牢で安全なAPIを提供することです。ストアのカスタムアプリやWebアプリを設計することもできます。サーバーとデータの管理について心配する必要はありません。ドメインAPIを使用するだけです。ユーザー、認証、その他のドメイン機能を管理するすべてのプロセスがあります。",
  },

  /** {@see BPageShuttle} **/
  user_dashboard: {
    title: "私のシャトル",
    subtitle: "最新の情報と明確な見通しであなたのビジネスを管理します。",
    menu: {
      affiliate: "アフィリエイト",
      monetize: "収益化する",
      gift: "贈り物",
      security: "安全",
      access: "アクセス",
      business: "会社",
      wallet: "財布",
      identification: "KYC",
      stores: "店舗",
      roles: "役割",
      home: "家",
      expert: "エキスパート",
      deals: "お買い得",
      providers: "プロバイダー",
    },
    shops: {
      create_new: "新しいショップを作成する",
      create_new_sub_need_initial_charge:
        "最初の店舗の建設は無料です。おそらく1店舗で十分ですが、さらに店舗を建てる必要がある場合、新しい店舗を建てる費用は25ドルです。ウォレットアカウントから金額を引き出します。",

      menu: {
        title: "私の店",
        shops: "ショップ",
        new: "新しい",
      },

      accept_invite_question: "この招待を受け入れますか？",
      /** {@see BShopCard} **/

      shop_card: {
        menu_orders: {
          physical: "物理的な製品の注文",
          virtual: "仮想製品の注文",
          files: "注文を提出する",
          services: "サービスオーダー",
          subscriptions: "定期購入の注文",
        },
        status: "状態",
        license: "ライセンス",
        volume: "使用済みスペース",
        expire: "ライセンスが失効しています",
        products: "製品",
        page_views: "ビュー",
        user_behavior: "顧客の行動",
        time_span: "{time}から今まで",
        finance_report: "財務報告",
        buys: "購入",
        payments: "支払い",
        orders: "注文",
        currency: "通貨",
        no_payment: "支払いはありませんよ！",
        no_purchase: "購入不可！",
      },
    },
  },

  widgets: {
    /** {@see BDashboardFeedback} **/
    overview: {
      title: "お客様からのフィードバック",
      title_small: "概要",
      wishlist: "ウィッシュリスト",
      comments: "コメントコメント",
      likes: "いいね",
      favorites: "お気に入り",
      powers: "拍手",
      views: "ビュー",
      report_today: "今日のレポート",
      report_last7days: "過去7日間のレポート",
      report_last30days: "過去30日間のレポート",
    },
  },

  /** {@see BPageShop} **/
  admin_shop: {
    title: "お店",
    menu: {
      edit: "設定",
      automation: "オートメーション",
      application: "アプリケーション",
      access: "アクセス",
      pages: "ページ",
      channels: "チャネル",
      classification: "分類",
      marketing: "マーケティング",
      customers: "お客様",
      logistic: "ロジスティック",
      auditing: "会計",
      incentives: "インセンティブ",
      process_center: "注文",
      blog: "ブログ",
      products: "製品",
      shops: "ショップ",
      dashboard: "ダッシュボード",
      autopilot: "オートパイロット",
      apps: "アプリ",
      pos: "POS",
      seo: "SEO",
      localization: "ローカリゼーション",
      crm: "CRM",
      listing: "項目",
    },

    /** {@see BPageShopDashboard} **/
    dashboard: {
      title: "ショップダッシュボード",
      online_staff: "オンラインスタッフ",

      notify_referral: {
        message: "招待リンクを友達に送信して、無料のバウチャーを入手してください。",
        action: "私の紹介リンク",
      },

      /** {@see BDashboardShopTechnical} **/
      info: {
        title: "テクニカル",
        subtitle: "ビジネスOSの技術概要。",

        shop_name: "ショップ名",
        shop_link: "ショップリンク",
        site_map: "サイトマップ",
        shop_domains: "ドメイン",
        shop_domains_msg: "接続されたカスタムドメインリスト。",

        home_msg:
          "Webサイトのデフォルトのホームページを設定します。カスタムドメインごとに変更できます。",

        add_domain: "新しいドメインを追加する",
        currencies: "有効通貨",
        currencies_alert: "ストアに少なくとも1つの通貨を選択してください！",
        status: "状態",
        license: "ライセンス",
        expire: "ライセンスの有効期限",
        upgrade_license_action: "{name}にアップグレード",
        wage: "手数料",
        cpu_message:
          "購入したプランに合わせて調整したリソースの数と、サービスに追加するリソース。",
        hide_domains: "ドメインを非表示にする",
        show_domains: "ドメインを表示する",

        /** {@see BDomainsList} **/
        table: {
          primary: "主要な",
          url: "URL",
          site_map: "サイトマップ",
          enable: "有効",
          indexed: "インデックス付き",
          and_more: "＆ もっと..",
          auto_repair: "自動車修理",
        },
        add_dialog: {
          title: "ストアドメインを構成する",
          step1:
            "DNSドメインまたはサブドメインのレコードAのIP制限は、次の値から定義できます。",
          step2: "DNSTXTレコードを追加します。",
          set_ip_alert:
            "レコードA <b>{ip}</b>のIP値を設定します。",

          input_domain: "ドメインURL",
          correct: "ドメイン設定は正しいです。",
          set_message: "このドメインのCNAMEを{cname}に設定します。",
          input_domain_message: "httpとhttpsなしでドメイン名を入力します。",
          ssl_message:
            "WebサイトのSSL証明書について心配する必要はありません。この認定は、Selldone（ベータ版）によってドメインに対して自動的に発行されます。",
          active: "ドメインはアクティブです",
          inactive: "ドメインが無効になっています",
          success_message:
            "おめでとうございます。サイトは{domain}で有効になっています。このドメインを通じて、あなたのビジネスとブランドを世界に紹介することができます。",

          delete_action: "ドメインを削除しますか？",
        },
        set_home_dialog: {
          title: "ドメインホームページを設定する",
        },
        notification: {
          add_message: "ドメインアドレスが正常に追加されました。",
          update_message: "ドメインは正常に更新されました。",
          delete_domain_message: "ドメインは正常に削除されました。",
        },
        alert: {
          title: "ドメインを削除する",
          message:
            "このドメインを削除しますか？他の人が詐欺を防ぐために、ドメインのDNSレコード値をリセットしてください。",
        },
      },

      /** {@see BDashboardShopOrders} **/
      active_orders: {
        title: "注文",
        title_small:
          "物理、ファイル、仮想、およびサービスの注文",
        pending_orders: "保留中の注文",
        physical: "物理的な製品の注文",
        virtual: "仮想製品の注文",
        file: "製品注文を提出する",
        service: "サービス製品の注文",
        subscription: "定期購入の注文",
      },
      /** {@see BDashboardShopProducts} **/
      products: {
        title: "在庫",
        title_small: "製品、サービス、ファイル",

        total_products: "総製品タイプ",
      },
      /** {@see BDashboardShopFinance} **/
      finance: {
        title: "金融",
        title_small: "財務報告",
        total_30days_title: "総売上高",
        last_30_day: "過去30日間",
        pay_amount_chart_title: "支払い",
        sell_amount_chart_title: "売上高",
        discount_amount_chart_title: "割引",
        currency_convert_to: "通貨へ",
        active_currencies: "有効通貨",
        sell_count_chart_title: "バリアント別の販売数",
        active_gateways: "アクティブな支払いゲートウェイ",
        received_last_24h: "過去7時間に受信",
        pie: {
          title: "今日の売上高比率",
          no_data: "今日は販売なし",
        },
        pay_amount: "支払金額",
        sell_amount: "販売額",
        discount_amount: "割引額",
        sell_count: "販売数",
        table: {
          currency: "通貨",
          total_sell_30days: "30日間の総売上高",
          sell_daily: "毎日の販売率",
          sell: "セール",
          pay: "支払い",
        },
      },
      /** {@see BDashboardShopCustomers} **/
      customers: {
        title: "顧客を購入する",
        title_small: "変換レポート",
        total_customers: "合計",
        new_customers_today: "今日",
        new_customers_week: "過去7日間",
        orders_count: "注文数",
        days_range: "日数範囲",
        new_users: "新規登録ユーザー",

        chart: {
          new_customers: "新規のお客様",
          customers: "総顧客",
        },
      },
      /** {@see BDashboardShopChannels} **/

      channels: {
        title: "獲得チャネル",
        subtitle:
          "あなたのビジネスは成長しています。こちらが顧客獲得チャネルのレポートです。",
      },

      /** {@see BDashboardShopPerformance} **/
      performance: {
        title: "今日",
        title_small: "ユーザーと販売の概要",
        users: "ユーザー",
        views: "ビュー",
        orders: "注文",
        payments: "支払い",
        no_visitor_today: "今日は訪問者がいませんでした。",
      },
    },

    /** {@see BPageShopProductsList} **/
    products: {
      title: "製品リスト",
      products_list: "リストに戻る",
      products_menu: "製品管理",

      view_que_list: "キューリストを表示",
      menu_products_list: "製品リスト",
      menu_export: "製品の輸出",
      menu_import: "製品の輸入",
      drop_import_message:
        "製品リストファイル（CSV、XLS、XLSX形式）をここにドロップして、バルク製品の追加を開始します。ファイルがSelldone製品リスト形式であることを確認してください。",

      menu_advanced_options: "高度なオプション",
      menu_advanced_options_description:
        "Connect Google 項目, 削除 項目 商品 項目 項目...",

      products_rss: {
        title: "製品RSS",
        subtitle: "Google、Meta などに製品をインポートしています...",
      },
      products_api: {
        title: "製品API",
        subtitle: "公開アクセス可能な API 呼び出しを介して製品をインポートします。",
      },
      google_sheet: {
        action: "リンクシート",
        tooltip:
          "このショップの商品は、Google ドライブの Google スプレッドシートにリンクされています。",
      },
      show_deletes: {
        false_title: "削除済みを非表示",
        false_description: "非表示 項目 商品.",
        true_title: "削除された番組",
        true_description: "表示 項目 商品.",
      },
      show_vendors: {
        false_title: "ベンダーを非表示",
        false_description: "すべてのベンダーを表示、⌘Ctrl+1",
        true_title: "ベンダーを表示",
        true_description: "表示 項目 販売者, ⌘Ctrl+1",
      },
      table_mode: {
        false_title: "ドラッグ＆ドロップモード",
        false_description:
          "項目 商品 項目 項目 項目 項目 項目.",
        true_title: "テーブルモード",
        true_description: "項目 商品 項目 項目 項目 項目 項目.",
      },

      show_notes: {
        false_title: "メモを非表示",
        false_description: "すべてのノートを表示、⌘Ctrl+2",
        true_title: "ノートを表示",
        true_description: "表示 項目 メモ, ⌘Ctrl+2",
      },

      rss_dialog: {
        title: "製品RSS",
        subtitle:
          "この RSS フィードを利用して、すべての製品の最新リストを維持します。",
      },
      api_dialog: {
        title: "製品API",
        subtitle:
          "この API フィードを使用して、製品リストを最新の状態に保ちます。ストアから製品を取得するための公開アクセス可能な API が提供されるため、製品リストや比較 Web サイトに最適です。",
      },

      /** {@see BProductWindowProductLarge} **/

      product_widget: {
        product_type: "製品型",
        price: "価格",
        value_added: "手数料",
        discount: "割引",
        in_stock: "在庫あり",
        product_unit: "単位",
        total_sell: "総売上高",
        total_view: "総視聴回数",
        view_unit: "タイムズ",
        review_unit: "レビュー",
      },

      /** {@see WidgetFolderCard} **/
      folder_widget: {
        products: "製品",
        products_unit: "タイプ",
        sub_categories: "カテゴリ",
        sub_categories_unit: "アイテム",
        views: "ビュー",
        views_unit: "タイムズ",
      },
    },

    /** {@see BPageShopBlogs}  **/
    blogs: {
      new: "新規書き込み",
      blogs: "ブログ",

      /** {@see BPageShopBlogsList} **/
      list: {
        title: "私の記事",
        subtitle:
          "最新のインライン エディターを使用して記事を作成し、自分自身とビジネスを紹介します。高品質で SEO に適したブログ投稿を作成する際に最初に注目する必要があるのは、オリジナルのコンテンツです。",
        waiting_message: "情報を受け取る...お待ちください",
        published: "公開",
        draft: "下書き",
        private: "プライベート",
        public: "公衆",
        table: {
          title: "タイトル",
          author: "著者",
          claps: "拍手",
          like: "好き",
          comments: "コメントコメント",
          views: "ビュー",
          publish_state: "状態",
          created_at: "作成日",
          updated_at: "最後の更新",
        },
      },
    },

    /** {@see ShopPBPageShopOrdersrocessCenter} **/
    orders: {
      /** {@see BProcessCenterList} **/
      physical: {
        waiting_message: "情報を受け取る...お待ちください",
        rejected: "拒否されました",
        delivery: "運送",
        discount: "割引",
        not_paid: "未払い",

        table: {
          order_number: "注文コード",
          order_date: "チェックアウト日",
          status: "最終ステータス",
          price: "合計金額",
          payment_status: "支払い状況",
        },
      },

      /** {@see BPageShopOrdersVirtual} **/
      virtual: {
        waiting_message: "情報を受け取る...お待ちください",

        discount: "割引",
        table: {
          order_number: "注文コード",
          product: "製品",
          order_date: "登録日",
          status: "最終ステータス",
          price: "合計金額",
          payment_status: "支払い状況",
        },
      },
    },

    /** {@see BPageShopFinance} **/
    auditing: {
      menu: {
        exchange: "交換",
        gateway: "ゲートウェイ",
        invoice: "請求する",
        report: "報告する",
        tax: "税",
        drop_shipping: "リセラーレシート",
        reseller_accounts: "リセラーアカウント",
        valuations: "評価",
        customer_wallets: "顧客ウォレット",
      },

      /** {@see BPageShopFinanceBill} **/
      invoice: {
        title: "リンクされたウォレットを購入する",
        subtitle:
          "料金、手数料、店舗の費用は、これらのウォレットアカウントから差し引かれます。",

        title_add: "新しいウォレットアカウントを接続する",
        subtitle_add:
          "通貨ごとに新しいウォレットを作成し、ストアに接続する必要があります。このウォレットからサービス料が引き落とされます。",
        add_account: "アカウントを追加する",
        charge_account: "アカウントを請求する",
        show_transaction: "トランザクションを表示",

        table: {
          currency: "通貨",
          account_number: "口座番号",
          account_name: "アカウント名",
          balance: "バランス",
          free_balance: "利用可能残高",
          actions: "削除する",
        },
        add_account_dialog: {
          title: "クレジットアカウントをストアに接続する",
          subtitle:
            "Selldoneでウォレットアカウントを開くと、他のクレジットカードと同じように仮想クレジットカードとアカウントが提供されます。販売済みの販売手数料はこのアカウントから差し引かれますが、アカウントの残高が不足している場合は、この金額を支払う必要があります。必要なだけSelldoneサービスを使用できます。",
          account_number: "口座番号",
          account_number_input_message:
            "ストアはこのアカウントにリンクされます。このアカウントは、手数料と費用に使用されます。",
          balance: "勘定残高",
          connect_account_to_shop: "アカウントをストアに接続する",
        },
        notifications: {
          connect_account_success: "アカウントが正常に追加されました。",
          delete_account_success:
            "アカウントがストアから正常に削除されました。",
        },
        alert: {
          delete_account: "アカウントを切断する",
          delete_account_message:
            "このアカウントをストアアカウントリストから削除しますか？",
          delete_account_action: "アカウントを削除する",
        },
        inform_charge_account: "アカウントに請求してください！",
        inform_charge_account_critical:
          "サービスの停止を防ぐためにアカウントに請求してください。",
      },

      /** {@see BPageShopFinanceExchange} **/
      exchange: {
        title: "アクティブな通貨を保存する",
        subtitle:
          "ユーザーはアクティブな通貨の1つを選択できるようになり、製品の価格が計算されて表示されます。為替レートを入力するのは売り手次第です。",
        shop_currencies_input: "ユーザーの有効通貨",
        shop_currencies_input_error: "少なくとも1つの通貨を選択してください",
        rates: {
          title: "為替レート",
          sub_title:
            "以下の通貨のいずれかに基づいて商品価格を入力できます。商品価格は、通貨間の換算レートで自動的に計算されます。",
          message:
            "通貨間の為替レートを入力することにより、商品の価格が自動的に計算され、更新されます。",
          add_new_rate: "新しいレートを追加",
        },
        table: {
          waiting_receive_data: "情報を入手しています...お待ちください",
          rate_input: "為替レート",
          from: "から",
          to: "に",
          exchange_rate: "為替レート",
          edit: "編集",
          delete: "消去",
          auto: "自動レート",
        },
        add_rate_dialog: {
          title: "為替レートを設定する",
          message:
            "情報の入力には注意してください。商品の価格は、ここに入力した料金に基づいて計算されます。",
          currency_from: "通貨から",
          currency_to: "通貨へ",
          exchange_rate: "為替レート",
        },
        alert: {
          title: "コンバージョン率を削除",
          message: "このコンバージョン率を削除しますか？",
          action: "消去",
        },
        notifications: {
          delete_success: "為替レートが削除されました。",
          add_success: "為替レートが更新されました。",
          update_success: "更新されたアクティブな通貨を保存します。",
        },
      },
    }, // End of auditing

    /** {@see BPageShopLogistic} **/
    logistic: {
      /** {@see BPageShopLogisticWarehouse} **/
      warehouses: {
        title: "倉庫",
        subtitle: "私の倉庫のリスト。",
      },
      restriction: {
        title: "配送制限",
        subtitle:
          "指定された配送エリア内の顧客のみが購入できるように制限を実装できます。",
        no_enable_shipping_error:
          "有効な配送方法がないため、誰もあなたから購入できません。",
        customer_must_select_a_shipping_msg:
          "顧客は注文を行うために配送方法を選択する必要があります。",
        customer_can_order_without_shipping_method_msg:
          "選択した場所で配送方法がサポートされていない場合でも、顧客は注文を行うことができます。",
        inputs: {
          restriction: {
            false_description:
              "特定の配送方法が選択されていない場合でも、顧客は注文を行うことができます。",
            false_title: "すべての注文を受け入れる",
            true_title: "制限付き受諾注文",
            true_description:
              "顧客は購入を完了するために、配送または集荷オプションのいずれかを選択する必要があります。",
          },
        },
      },

      warehouse_btn: "新しい倉庫を追加する",
      warehouse_btn_error:
        "あなたの倉庫、店、またはあなたのビジネスの起源を設定します。送料の計算とチェックアウトのプロセスに参加することが重要です。",
      no_multi_warehouse_support_message:
        "簡便のため、この機能は通常の店舗では利用できません。",
      size_unit: {
        title: "サイズ単位",
        subtitle: "長さ、幅、高さに使用される単位。",
      },
      mass_unit: {
        title: "質量単位",
        subtitle: "重量に使用される単位。",
      },
      distance_unit: {
        title: "距離単位",
        subtitle: "項目 項目 項目 項目 項目.",
      },

      menu: {
        return_request: "戻ってきた",
        delivery: "運送",
        inventory: "在庫",
        warehouse: "倉庫",
        logistic_apps: "ロジスティクス",
        profiles: "プロファイル",
        includes: "含まれるもの",
        property_sets: "プロパティセット",
        boxes: "パッケージ",
      },

      /** {@see BPageShopLogisticInventory} **/
      warehouse: {
        title: "倉庫を保管する",
        sub_title: "この住所は、発送元として使用されます。",
        table: {
          title: "在庫表",
          sub_title:
            "物理、仮想、ファイル、サービスを含むすべてのストア製品のリスト",
        },
      },

      /** {@see BPageShopLogisticShipping} **/
      delivery: {
        title: "輸送方法",

        sub_title:
          "このセクションで値を設定することにより、ストアでさまざまな送信方法がアクティブになります。このセクションでは、代金引換方法も有効にできます。",
        add_transportation: "交通機関を追加する",

        /** {@see DeliveryFormWidget} **/
        delivery_form: {
          payment: "支払いオプション",
          limits: "制限",

          currency_input: "コスト計算の参照通貨",
          currency_input_message: "コストはこの通貨で計算されます",
          distance_input: "倉庫からの距離",
          distance_input_message: "0または-1は、制限がないことを意味します。",
          max_weight_input: "最大許容パック重量",
          max_weight_input_message: "0または-1は、制限がないことを意味します。",
          max_size_input: "パッケージの最大寸法",
          width: "幅",
          length: "長さ",
          height: "身長",
          days_input: "配達可能日",
          days_input_nodata: "配達日を選択してください",
          hours_input: "Avaialbeの配達時間",
          hours_input_nodata: "期間を選択してください",
          vacation_input: "休日に配達しますか？",

          pricing: "価格を計算する",
          const_input: "固定費",
          distance_cof_input: "距離に対するコスト係数",
          distance_cof_input_dim: "{dim}ごと",
          weight_cof_input: "重量に対するコストの要因",
          weight_cof_input_dim: "{dim}ごと",
          price_cof_input: "製品の価格要因に対する送料",
          price_cof_input_message:
            "保険料および代金引換費用などの他のサービスが含まれます。",
          price_cof_input_dim: "{dim}ごと",
          distance_weight_cof_input: "重量乗数によるコスト乗数",
          distance_weight_cof_input_dim: "{weight}ごとの{distance}ごと",
          free_shipping_input: "送料無料",
          free_shipping_limit_input: "送料無料の最小注文費用",

          shipping_cost_calculation: "送料計算",
          sod_true: "配送先で送料を取得する",
          sod_true_message:
            "配送サービスが目的地での配送料を受け入れていることを確認してください。",
          sod_false: "自動送料計算",

          cod_input: "代金引換をサポート",
          cod_true: "代金引換で承ります",
          cod_false: "オンライン決済のみ承ります",
          cod_true_message: "配送サービスが代金引換を受け入れることを確認してください。",

          notifications: {
            update_success: "配送サービスの設定が正常に完了しました。",
          },
        },
      },
    }, // End of logistic

    /** {@see BPageShopCrm} **/
    users: {
      menu: {
        customers: "お客様",
        contact_form: "連絡先",
        faq: "FAQ",
        club: "クラブ",
        report: "報告する",
      },

      /** {@see BPageShopCrmReport} **/
      report: {
        title: "お客様概要",
        sub_title: "ここに顧客のライブステータスが表示されます。",
        report_30days_by_time:
          "過去30日間の日時に基づくユーザーアクティビティ",
        report_30days_by_location:
          "過去30日間のジオロケーションユーザーのアクティビティ",
      },
      /** {@see BPageShopCrmClub} **/
      club: {
        title: "カスタマークラブ",
        sub_title:
          "月次および年次の購入金額と通貨を入力して、各レベルをアクティブにします。顧客は、月次または年次購入の要件を満たしているため、顧客クラブにログインします。",
        item: {
          members_count: "会員数",
          purchases_count: "注文数",
          monthly: "毎月",
          annually: "毎年",
          discount_percent: "割引率",
          discount_limit: "割引制限",
        },

        edit_dialog: {
          title: "顧客レベルの管理",
          currency_input: "通貨",
          currency_input_message:
            "合計購入額はこの通貨で計算されます。",
          free_shipping_input: "送料無料",
          monthly_input: "月額購入率",
          annually_input: "年間購入率",
          discount_percent_input: "クラブ会員の割引率",
          discount_limit_input: "割引制限",
          description_input: "説明",
          description_input_message: "このレベルの簡単な説明を入力します。",
        },
        notifications: {
          update_success: "カスタマークラブに適用される変更。",
        },
      },
      /** {@see BPageShopCrmFaq} **/
      faq: {
        title: "よくある質問",
        sub_title: "顧客の質問を追加、編集、および回答します。",
      },
    }, // End of users

    /** {@see BPageShopMarketing} **/
    marketing: {
      menu: {
        campaigns: "キャンペーン",
        cross_selling: "クロスセリング",
        affiliate: "アフィリエイト",
        emails: "メール",
        funnel: "漏斗",
      },

      /** {@see BPageShopMarketingCampaign} **/
      campaign: {
        name_input_name: "キャンペーン名",
        name_input_placeholder: "キャンペーン名",
        create_campaign_action: "新しいキャンペーンを作成する",
        table: {
          title: "タイトル",
          state: "状態",
          discount: "割引",
          landing: "ランディングページ",
          start: "始める",
          end: "終わり",
        },
        notifications: {
          add_success_title: "キャンペーンを作成する",
          add_success: "キャンペーンが作成されました。",
        },
      },
    }, // End of marketing

    /** {@see BPageShopClassification} **/
    categories: {
      title: "カテゴリリスト",
      subtitle:
        "カテゴリは、オンラインストアの重要な機能です。これらの強力な分類ツールを使用して、最新のストアフロントを構築し、顧客が適切な製品を簡単に見つけられるようにすることをお勧めします。",

      menu: {
        add_new: "新しいカテゴリを追加",
        categories_list: "カテゴリリスト",
        export: "カテゴリのエクスポート",
        import: "カテゴリのインポート（CSV）",
      },
      /** {@see categoriesGraph} **/
      graph: {
        title: "カテゴリの階層",
        subtitle:
          "ストアカテゴリの完全な概要と、ユーザーがそれらをナビゲートする方法を知ることができます。カテゴリを適切に配置することで、顧客は製品をすばやく見つけることができ、コンバージョン率が向上します。",
        visits_count: "訪問",
        normal: "単純",
        items_count: "アイテム数",
        home: "家",
      },
    }, // End of categories
    /** {@see AdminShopApps} **/
    apps: {
      menu: {
        app_store: "お店",
        my_apps: "アプリ",
      },
      /** {@see BPageShopSettingApplications} **/
      my_apps: {
        title: "アクティブなアプリを保存する",
        subtitle:
          "Selldone — ビジネスアプリケーションを管理します。",
        all: "すべて",
      },
      /** {@see BAppShopStore} **/
      store: {
        title: "アプリストア",
        subtitle:
          "お気に入りのサービスをビジネスに安全に接続します。お客様のご要望に応じてプラグインやアプリを追加します。",

        nodata: "プラグインが見つかりません。",
        all: "すべて",
        more: "もっと",
      },
    }, // End of apps
    /** {@see BPageShopPages} **/
    pages: {
      menu: {
        new_page: "新しいページ",
        contact_us: "お問い合わせ",
        privacy: "プライバシー",
        terms: "条項",
        about_us: "私たちに関しては",
        landings: "着陸",
        popup: "現れる",
        static: "静的",
      },
    }, // End of pages

    /** {@see BPageShopPermission} **/
    permissions: {
      menu: {
        persons: "スタッフ",
        roles: "役割",
        api: "API",
      },
      /** {@see BPageShopPermissionStaff} **/
      shop_permissions: {
        menu: {
          users: "人事リスト",
          new_user: "新しいスタッフを追加する",
          new_user_message:
            "このストアのダッシュボードと管理セクションにアクセスできるユーザー。",
        },
        delete_alert: {
          title: "アクセスを削除する",
          message: "このユーザーを削除しますか？",
          action: "消去",
        },
        notifications: {
          add_success_title: "アクセスを追加",
          add_success: "新しいアクセスが追加されました。",
          delete_success_title: "アクセスを削除",
          delete_success: "アクセスが削除されました。",
        },
      },

      /** {@see BPageShopPermissionApi} **/
      shop_api: {
        title: "アクセスキーを保存する",
        message:
          "これらのキーは、サーバーがアクセストークンを作成するために使用されます。キーは機密情報であり、他の人には見えない方法でサーバー上にのみ存在することに注意してください。",
      },
    }, // End of permissions
    /** {@see BPageShopApplications} **/
    applications: {
      /** {@see BPageShopApplicationsPwa} **/
      pwa: {
        title: "Webアプリ",
        sub_title: "ここでストアのWebアプリを表示します",
        message:
          "注：iOSアプリでiPhoneとiPadのウェブサイトのウェルカムページを編集できます",
        ios_app: "iOSアプリ",
      },

      /** {@see BPageShopApplicationsIos} **/
      ios: {
        title: "iOSアプリ",
        sub_title: "間もなく、ストア用のiOSアプリを作成できるようになります。",
        message:
          "最大ファイルサイズ：512 KB、圧縮システムでサイズを512 KBに縮小できる場合は、最大1MBのファイルをアップロードできます。アップロードされた画像はインテリジェントにサイズ変更されます。",
      },
      /** {@see BPageShopApplicationsAndroid} **/
      android: {
        title: "Androidアプリケーション",
        sub_title: "独自のAndroidアプリを作成する",
        message:
          "このフォームに記入して、ビルドキーを押します。他に何も必要ありません。アプリのビルドと署名のプロセスのすべてのステップは、クラウドサーバーで実行されます。最終的なアプリはすべてのAppStoreにアップロードされます。",
        server_un_available:
          "実験的に、この時点ではアプリケーションサーバーは接続されていません。",
        app_building_progress: "アプリが構築されています。",
        app_build_success: "アプリの準備ができました。",
        download_app_action: "アプリを取得する",
        firmware_version: "ファームウェアバージョン",
        main_info: "アプリケーションパッケージ",
        package_name_input_message: "パッケージ名が一意であることを確認してください。",
        package_name_input_alert:
          "この名前を変更すると、AppStoreで以前のアプリを更新して新しいアプリをインストールすることができなくなります。古いバージョンのアプリユーザーも自分のアカウントにログインできないことに注意してください。",
        version_input: "バージョン",
        version_input_message:
          "この数値は、常に以前の値よりも大きくする必要があります。",
        version_name_input: "バージョン名",
        version_name_input_message:
          "このバージョンのアプリの一意の名前を入力します。",
        use_selldone_key: "Selldone — 販売済みのデフォルトキー",
        use_last_key: "保存されたキー",
        use_new_key: "新しいキー",
        appearance: "外観",
        app_name_input: "アプリ名",
        app_name_input_message: "これがアプリのメイン名になります。",
        app_title_input: "アプリのタイトル",
        app_title_input_message: "このタイトルはアプリの上部に表示されます。",
        app_title_input_placeholder: "タイトルを入力してください",
        app_icon_input: "アプリアイコン",
        app_icon_input_placeholder: "アプリアイコンのzipファイルを選択します。",
        generate_icon_pack_action: "アイコンパックを作成する",
        splash_design: "スプラッシュ画面の設計",
        splash_logo_input: "スプラッシュ画面のロゴ",
        splash_logo_input_placeholder: "スプラッシュ画面の画像を選択します。",
        splash_title_input: "スプラッシュ画面のタイトル",
        splash_title_input_placeholder: "スプラッシュ画面のタイトルを入力してください",
        splash_title_input_message:
          "このタイトルは大きなフォントサイズで表示されます。",
        splash_message_input: "スプラッシュ画面メッセージ",
        splash_message_input_placeholder: "メッセージ ...",
        splash_message_input_message:
          "このメッセージは下のサムネイルとして表示されます。",

        dark_theme: "暗いテーマ",
        light_theme: "軽いテーマ",
        build: "建てる",
        building_info:
          "クラウドサーバー上でのアプリケーションの構築には、10秒から数分かかります。しばらくお待ちください。アプリケーションの準備が整うと、ダウンロードファイルのリンクがここに表示されます。",
        update_mode_action: "アップデート",
        build_mode_action: "アプリを作成する",
        notifications: {
          icon_pack_not_valid_error: "ファイルが正しくありません。",
          start_building_title: "建物 ...",
          start_building_message:
            "Androidアプリケーションのビルドリクエストが送信されました。",
          build_success_title: "おめでとう",
          build_success:
            "Androidアプリの準備が整い、今すぐダウンロードできます。",
        },
      },
    }, // End of applications

    /** {@see ShopAutomation} **/
    automation: {
      menu: {
        autopilot: "オートパイロット",
      },
    },

    /** {@see BPageShopSetting} **/
    edit: {
      menu: {
        delete: "ストアを削除",
        activity_time: "時間",
        footer: "メニュー",
        info: "情報",
        notification: "通知",
        home: "家",
        locations: "場所",
        license: "ライセンス",
        theme: "テーマ",
        sms: "SMS",
        email: "Eメール",
        domain: "ドメイン",
        verifications: "検証",
        flow: "フロー",
        business_model: "事業の型",
      },
      delete_dialog: {
        title: "ストアを削除",
        message: "<b>{title}</b>ストアを削除しますか？",
        action: "ストアを削除",
      },

      notifications: {
        delete_success: "ストアが削除されました。",
      },

      /** {@see BPageShopSettingInfo} **/
      info: {
        title_tab: {
          title: "商号と言語",
          subtitle: "パブリック名とデフォルト言語を設定します。",
        },
        name_tab: {
          title: "ショップの一意の名前",
          subtitle: "それはあなたのビジネスのユーザー名です。",
        },

        description_tab: {
          title: "あなたのビジネスストーリー",
          subtitle:
            "あなたのビジネスとそのユニークな価値提案について書いてください。",
        },
        contact_tab: {
          title: "お問い合わせとローカルビジネス",
          subtitle:
            "公開連絡先情報とGoogleローカルビジネスの設定。",
        },
        image_tab: {
          title: "ロゴ",
          subtitle: "ブランドに固有のロゴを選択してください。",
        },
        favicon: {
          title: "項目",
          subtitle:
            "ここでこのセクションの情報と設定を管理できます。",
        },
      },

      /** {@see ShopEditMenuFooter} **/
      badge: {
        external_title: "外部バッジを管理する",
        external_message:
          "ここに、バッジ画像のアドレスとその画像へのリンクを入力できます。 URLは、承認されたWebサイトからのものである必要があります。",
      },
      /** {@see BPageShopSettingMenus} **/
      edit_menu: {
        title: "メニュー",

        footer: {
          title: "フッターメニュー",
          sub_title:
            "ここでストアページの下部メニューを構成できます。これらのメニューは、ホームページ、デザインページ、または外部リンクにすることができます。",
        },

        header: {
          title: "ヘッダーメニュー",
          sub_title:
            "このメニューは、モバイルよりも大きい画面、およびホームページ、製品カテゴリ、ランディング、および製品ページの上部にのみ表示されます。",
        },

        save_menu: "保存メニュー",
        dialog: {
          main_pages: "メインページ",
          custom_pages: "ランディングページ",
        },
        table: {
          home: "家",
          shop: "店",
          blogs: "ブログ",
          about_us: "私たちに関しては",
          privacy: "プライバシー",
          terms: "利用規約",
          faq: "FAQ",
          contact_us: "お問い合わせ",
        },
        notifications: {
          save_success: "メニューが正常に更新されました。",
        },
      },

      /** {@see ShopSocialField} **/
      social: {
        title: "ソーシャルメディア",
        message:
          "このセクションに公式のソーシャルメディアリンクを入力します。各項目の指示に従って、住所を確認してください。",
      },

      /** {@see BShopSettingWorkingDays} **/
      time: {
        title: "営業日",
        sub_title: "営業日と時間を設定する",
        days_open_input: "日々",
        days_open_input_nodata: "少なくとも1日を選択してください",
        start_time_input: "ストアアクティビティの開始時間",
        start_time_input_hint: "営業時間",
        end_time_input: "閉店時間",
        end_time_input_hint: "ストアアクティビティの終了時間",
        customer_support_service: "説明責任とカスタマーサービス",
        response_time_input: "カスタマーサービスのステータス",
        support_24h: "24時間年中無休",
        support_normal: "営業時間中のみ",
        no_service: "いいえ",
        notifications: {
          update_success: "編集したストア。",
        },
      },
    }, // End of edit
  }, // End of admin_shop

  /** {@see BCategoryInput} **/
  category_select: {
    category_input_no_category: "カテゴリなし",
  },

  /** {@see BProductAddFull} **/
  add_product: {
    title_new: "新製品",
    title_new_category: "新たなカテゴリー",
    title_new_drop_shipping: "ドロップシッピングを追加する",

    title_edit: "製品を編集する",
    delete: "製品を削除する",
    completed: "完了",

    menu: {
      type: "製品型",
      general_info: "一般的な情報",
      rating: "調査と機能",
      spec: "仕様",
      images: "ピクチャー",
      price: "価格",
      inputs: "入力",
      outputs: "出力",
      extra: "追加の詳細",
      review: "製品レビュー",
      inventory: "在庫/バリアント",
      change_status: "ステータスを変更する",
    },
    menu_extra: {
      description: "説明",
      form: "フォーム",
      no_spec: "仕様なし",
      has_spec: "仕様あり",
    },

    select_type: {
      title: "製品またはサービスの種類を選択してください",
    },

    /** {@see BProductEditInfo} **/
    edit_info: {
      category_input: "カテゴリー",
      category_input_msg: "空: ストアのルート",
      product_name: "商品名*",
      product_name_placeholder: "ここにあなたの製品名があります。",
      product_code: "製品コード（英語）",
      sku: {
        label: "SKU",
        message: "在庫管理ユニット",
      },
      mpn: {
        label: "MPN",
        message: "製造業者識別番号",
      },

      external_link: "外部リンク",

      brand_placeholder: "ブランド例Apple ..（オプション）",

      is_original: "オリジナル商品ですか？",
      is_original_message:
        "オリジナルの商品を設定していない場合、この商品には偽のバッジが表示されます。",
      return_warranty:
        "この商品の返品保証は何日ありますか？",
      warehouse_section: "倉庫および製造",
      conditions_section: "製品条件",
      warranty_section: "保証と配達",

      unit_input: "製品ユニット",
      unit_message: "必要に応じてユニットを入力してください。例：KG、メーター、..。",

      unit_section: "製品ユニット",

      unit_float: "フロートユニット（まもなく）",
      unit_float_hint:
        "たとえば、顧客は3 kgの果物を注文できますが、顧客に送られる金額は注文された金額とわずかに異なります。",
      unit_float_message:
        "注文処理中、配送金額が注文金額と異なる場合があります。システムはこの差額を自動的に計算し、それを顧客への債務として記録します。これは次の注文に適用できます。",

      marketplace: {
        // Vendor panel > Fixed mode
        vendor_panel_message:
          "<b>{vendor_name}</b>は製品の所有者です。",
        // Marketplace panel > Subscription products
        subscription_message:
          "サブスクリプション製品には 1 つのベンダーを含めることができるため、ベンダー パネルでサブスクリプション製品を作成することも、作成ステップでベンダーを製品に割り当てることもできます。選択したベンダーが製品の所有者になります。",
        default_message:
          "この製品が 1 つのベンダーに属し、そのため 1 つのベンダーのみが販売できるか、またはこの製品がマーケットプレイスに属し、複数のベンダーが販売できるかを指定できます。",

        single_vendor_title: "単一ベンダー",
        single_vendor_desc:
          "この製品はベンダーに属しており、選択されたベンダーが管理できます。",

        multi_vendors_title: "複数のベンダー",
        multi_vendors_desc:
          "この商品はマーケットプレイスに属しており、マーケットプレイス パネルでのみ編集できます。",
      },

      category: {
        subtitle:
          "リストに表示されるカテゴリとタイトルを設定します。",
      },
      unit: {
        subtitle:
          "製品ページでの価格設定と行動喚起要素の表示をカスタマイズできます。",
      },
      custom_pricing: {
        title: "カスタム価格設定フォーム",
        subtitle:
          "製品に評価（価格入力フォーム）を作成または割り当てることができ、顧客は直感的な入力フォームを使用してバリエーションを選択したり、商品をカスタマイズしたりできます。",
        valuation_need_saved_product_message:
          "まず製品を保存してから、評価モデルを割り当てることができます。",
        assign_valuation_message:
          "この製品に評価モデルを割り当ててください。",
        edit_pricing_action: "価格フォームの編集",
        add_pricing_action: "新しい価格設定フォームを作成する",
      },
      action: {
        title: "カスタム購入ボタン",
        message:
          "次のパターンに従ってアイコンを変更できます: {icon name} キャプション...",
        placeholder: "行動喚起を入力してください...",
        multi_language_dialog_title: "カスタム購入ボタンのキャプション",
      },
      external: {
        not_available_message:
          "項目 項目 利用可能 項目 会社 & 項目 ライセンス.",
        available_message: "項目 項目 追加 項目 項目 項目 項目 項目 項目.",
        input_label: "2番目の行動ボタン",
      },
      warehouse: {
        subtitle:
          "この情報は倉庫管理システムによって利用され、製品をグローバルに識別するのに役立ちます。",
      },
      gtin: {
        hint: "サポートされている値は、UPC (北米、12 桁)、EAN (ヨーロッパ、13 桁)、JAN (日本、8 桁または 13 桁)、ISBN (書籍、13 桁) です。",
        label: "製品の国際貿易商品番号",
        placeholder: "グローバル貿易番号をここに入力してください。（オプション）",
      },
      hsn: {
        hint: "HSN（Harmonized System of Nomenclature）は、商品や製品を分類するための国際的に標準化された分類システムです。",
        placeholder: "6〜16桁のHSNコード（オプション）",
        label: "HSN",
      },
      condition: {
        label: "あなたの店の製品状態",
        message: "この商品の状態を選択してください。",
        subtitle:
          "提供している製品の状態とブランドについて顧客に知らせます。",
      },
      brand: {
        label: "ブランド",
        placeholder: "ブランド例Apple ..（オプション）",
      },
      warranty: {
        subtitle:
          "保証と製品のステータスを設定します。保証に関するこの情報は顧客に表示され、購入後に製品を返品できる期間を確立するのに役立ちます。",

        label: "保証",
        placeholder: "24か月のゴールデン保証。（オプション）",
      },
      status: {
        title: "状態",
        subtitle:
          "商品のステータスによって、オンラインおよび店舗での在庫状況が決まります。商品の下書きを作成するには、ステータスを「非アクティブ」に切り替えるだけです。",
      },
      profiles: {
        title: "プロファイル",
        subtitle:
          "保証、返品ポリシー、配送、ガイドを定義してこの製品に割り当てることができます。製品ページに新しいタブとして表示されます。",
      },
      shortcuts: {
        title: "追加カテゴリに製品を割り当てる",
        subtitle:
          "この機能を使用すると、製品 > 編集 > カテゴリで設定されたプライマリ カテゴリでの配置を維持しながら、製品を複数のカテゴリにリストできます。基本的に、これはオペレーティング システムで「ショートカット」を作成するのと同様に機能し、製品を追加の指定されたカテゴリに表示できるようにします。",
      },
    },

    /** {@see BProductEditFeatures} **/
    rating_pros_cons: {
      title: "調査",
      message:
        "顧客が製品を評価するための製品仕様のリストを入力します。 （最大5アイテム）",
      rating_input: "世論調査",
      rating_input_message: "投票に5つのアイテムを追加できます。",
      rating_input_placeholder:
        "ここにカスタム アンケートの質問を書いて、Enter キーを押してください。",

      item_unit: "アイテム",

      pros_title: "長所",
      pros_message: "製品の機能を入力します。 （最大5アイテム）",
      pros_input_title: "特集タイトル",
      pros_input_value: "特徴値",
      pros_group: "製品の長所",

      cons_title: "短所",
      cons_message: "製品の弱点を入力してください。 （最大5アイテム）",
      cons_input_title: "弱点タイトル",
      cons_input_value: "弱値",
      cons_group: "製品の弱点",

      select_from_list: "リストから選択",

      suggestion_rating: [
        "良品質",
        "価値がある",
        "おすすめします",
        "特徴と能力",
        "使いやすさ",
        "うまく設計された",
        "信頼できるパフォーマンス",
        "効果的な顧客サポート",
        "満足のいく納期",
        "製品の説明と一致",
        "丈夫で長持ち",
        "費用対効果が高い",
        "魅力的なパッケージ",
        "革新的なデザイン",
        "環境にやさしい",
        "十分な指示/マニュアル",
        "期待に応えた",
        "ユーザーフレンドリーなインターフェース",
        "高効率",
        "優れたアフターサービス",
        "多彩な機能",
        "競争力のある価格設定",
        "スペアパーツ/アクセサリの入手可能性",
        "信頼のブランド",
        "安全に使用できる",
        "迅速かつ正確なサービス",
      ],

      notifications: {
        add_rating_success: `ユーザー評価{rating_name}オプションが追加されました。`,
        delete_rating_success: `ユーザー評価{rating_name}オプションが削除されました。`,

        add_pros_success: "製品機能が追加されました。",
        delete_pros_success: "製品機能が削除されました。",

        add_cons_success: "製品の弱点が追加されました。",
        delete_cons_success: "製品の弱点が取り除かれました。",
      },
    },

    /** {@see BProductEditSpec} **/
    edit_spec: {
      title: "技術仕様",
      subtitle:
        "ここに製品仕様を入力します。この情報は顧客に表示され、カテゴリのインテリジェント フィルタリング システムでも利用できます。",
      manual: {
        title: "手動で",
        subtitle:
          "グループとキーと値のペアを定義して、製品仕様を手動で追加します。",
        add_group_action: "グループを追加",
        add_item_action: "スペック値を追加",
      },
      import: {
        subtitle:
          "類似製品の技術仕様をインポートできます。",
        action_title: "輸入",
        action_subtitle: "別の製品から仕様を複製します。",
      },
      ai: {
        title: "AI",
        subtitle:
          "製品の生データをテキスト形式で送信することで、製品仕様を自動的に作成できます。",
        action_title: "AIによる自動生成",
        action_subtitle: "抽象的なプロンプトによって製品仕様を作成します。",
      },

      group_input_header: "グループを追加",
      item_title_header: "アイテムを追加",
      group_input: "グループヘッダー",
      group_input_message: "タイトルを入力してください。",
      group_add_action: "グループを追加",

      item_title_input: "タイトル",
      item_title_input_message: "機能のタイトルを入力します。",

      item_value_input: "価値",
      item_value_input_message: "機能値を入力します。",

      add_item_action: "アイテムを追加",

      dialog: {
        title: "技術仕様を入力してください",
        code_input: "製品番号",
        code_input_message: "製品コード：P0000..。",
        spec_view_title: "選択した製品の仕様",
        spec_view_subtitle:
          "選択した製品から仕様がインポートされました。",
        set_spec_action: "技術仕様が重複している",
      },
      notifications: {
        enter_group_title_error: "見出しの値を入力してください",
        enter_item_title_and_value_error:
          "機能のタイトルと値を入力します",
        spec_saved_success: "製品仕様を保存しました。",
      },
      dialog_ai: {
        title: "製品仕様を自動生成",
        prompt: {
          title: "製品概要",
          subtitle:
            "製品の主な特徴と詳細を強調した、製品の簡潔で明確な説明を入力してください。この情報は、製品仕様を自動的に生成するために使用されます。",
        },
        generated_spec: {
          title: "AI生成仕様",
          subtitle:
            "これらの仕様は人工知能によって生成されました。",
        },
        inputs: {
          prompt: {
            label: "製品詳細",
            placeholder: "ここで製品について説明してください...",
          },
        },
        actions: {
          run: {
            title: "仕様を生成する",
            subtitle:
              "クリックすると、提供された概要から製品仕様が自動的に作成されます。",
          },
          add_generated_spec: "生成された仕様を追加する",
        },
      },
    },
    /** {@see BProductEditImages} **/
    edit_images: {
      title: "メイン画像",
      main_image_input_nodata: "商品画像をアップロードします。",
      main_image_input_message: "この画像は製品リストに表示されます。",
      preview: "プレビュー",
      image_style: "画像スタイル",
      background_is_white: "白色の背景",
      background_is_white_msg: "画像の背景は白ですか？",

      images: {
        title: "製品画像ギャラリー",
        sub_title:
          "このセクションに、すべての商品バリエーションに共通する商品画像をアップロードします。",
      },
      video: {
        title: "ビデオ",
        sub_title:
          "まず、YouTubeに製品ビデオをアップロードしてから、ビデオのURLをここに入力します。",
      },
      change_bg_ai: {
        title: "新しい背景で画像を作成する",
        inputs: {
          prompt: {
            label: "背景説明",
            placeholder: "希望する背景を説明してください...",
          },
        },
        actions: {
          reimagine: {
            title: "新しい画像を生成する",
            subtitle: "新しい背景で画像全体を再想像します。",
          },
          replace: {
            subtitle: "既存の背景を置き換えます。",
          },
        },
      },
    },
    /** {@see BProductEditPrice} **/
    pricing: {
      edit_price: "価格設定",
      price_input: "価格",
      currency_input: "通貨",
      currency_input_messages: "価格はこの通貨で計算されます。",
      commission_input: "手数料",
      commission_message:
        "このオプションは、卸売業者などの特定のタイプの販売者にのみ役立ちます。卸売業者でない場合は、このオプションを空白のままにしてください。購入者に表示される価格は、価格と手数料の合計です。税金を追加するには、[会計]>[税金]をクリックします。",
      add_commission_action: "手数料を追加する",

      price_label_input: "価格ラベル",
      price_label_message:
        "( $1.5/Fl Oz ) のような価格に関する追加情報を追加します。ユースケース: 食料品、FMCG。",
      add_price_label_action: "価格ラベルを追加",
      discount_input: "割引",
      discount_input_message: "割引率",
      has_discount_period_input: "この割引は特定の期間有効ですか？",
      discount_timespan: "割引期間を入力します。",
      start_input: "始める",
      end_input: "終わり",
      start_input_placeholder: "開始時間を選択します",
      end_input_placeholder: "終了時間を選択します",
      independent_price: "このバリアントのみの価格",
      same_price: "主な製品の価格",
      variant_pricing_message:
        "このオプションを選択することにより、このバリアントの価格を主な製品とは独立して設定できます。",

      subtitle: {
        marketplace:
          "マーケットプレイス内では、表示される主な製品価格はリスト価格ですが、実際の価格はベンダーと製品の関係レコードに基づいて決定されます。",
        subscription:
          "サブスクリプションの場合、リスト価格のみが表示され、実際のコストは選択したサブスクリプションプランに基づいて決定されます。",
        service:
          "サービスベースの製品の場合、記載されている価格は表示目的のみで、サービスの見積り費用を示しています。実際のサービス価格は、顧客が注文を確定した後（チェックアウト時）に決定されます。",
        file: "これは、ファイルにアクセスするために顧客が支払う必要がある、ファイルの記載された価格と実際の価格を指します。",
        default:
          "これは製品の表示価格を指し、個別の価格設定がないバリエーションの価格も考慮されます。",
      },
      extra_pricings: {
        title: "追加料金を追加",
        subtitle: "購入数量に応じて異なる価格を適用します。",
      },

      vendor: {
        title: "ベンダー価格",
        subtitle:
          "この価格は製品リストにのみ表示されます。ベンダー価格は、[製品] > [ベンダー] タブで設定できます。",
        manage_vendors: "ベンダーの管理",
        vendor_product_pricing_link:
          "ベンダーの製品価格設定は連動しています。ここで出品価格を変更すると、バリエーションのないベンダー製品、またはバリエーションがあっても独自の価格設定がない (メイン製品と同じ価格を使用する) ベンダー製品に影響します。この価格はマーケットプレイス価格として扱われ、ベンダーの価格は価格設定モデルまたは以前のマーケットプレイスの利益率に基づいて設定されます。",
        vendor_variant_pricing_link:
          "ここでバリアントの価格を変更すると、同じバリアントを持つベンダー製品の価格設定に影響します。この価格はマーケットプレイスの価格とみなされ、ベンダーの価格は価格設定モデルまたは以前のマーケットプレイスの利益率に従って設定されます。",
      },
    },
    /** {@see ProductEditInputs} **/
    inputs_edit: {
      title: "バイヤー情報の入力フォーム",
      sub_title:
        "商品ごとにデータ入力フォームを作成できるので、買い物客は商品を購入するときに情報を送信します。たとえば、この情報は石に刻まれた名前である可能性があります。",
      message_input: "ユーザーへのメッセージ",
      message_input_message:
        "このメッセージは、製品を購入するときに顧客に表示されます。",
      inputs_form: "情報構造（入力）",
      inputs_hint:
        "顧客が注文する準備ができたときに詳細情報を収集するためのパーソナライズされたフォームを設定するオプションがあります。",
    },

    /** {@see BProductEditExtra} **/
    extra_edit: {
      physical: {
        title: "出荷情報",
        sub_title:
          "準備の費用と時間は、このセクションの情報に基づいて計算されます。店舗で選択した単位（重量、寸法、距離）に応じた情報を必ず入力してください。",
      },

      notifications: {
        save_title: "パッケージが更新されました",
        save_msg: "製品のパッケージ情報が正常に更新されました。",
      },

      order_limit: {
        title: "注文制限",
        subtitle:
          "卸売業者の場合、または注文ごとのこの商品の数量に最小または最大の制限がある場合は、ここで指定できます。",
        no_limit: "制限なし",
        minimum_purchase_quantity: "最小購入数量",
        maximum_purchase_quantity: "最大購入数量",
      },
    },

    variants: {
      not_available:
        "現在、このタイプの製品のバリアントを選択することはできません。",
    },

    delete_product: {
      title: "製品を削除します",
      message: `<b>{product_title}</b>を削除しますか？`,
      tips: "誤って商品を削除した場合は、「ショップ > 商品」に移動し、「削除されたアイテムを表示」を有効にして、商品を右クリックし、「復元」を選択すると、商品を復元できます。",
    },
  },

  /** {@see BProductExtraPricingAdd} **/
  extra_pricing_add_dialog: {
    title: "{min} を超える場合は追加料金がかかります",
    subtitle:
      "価格計算の順序と優先順位はシステムによって自動的に決定されます。この価格設定を有効にするために必要な最小数量を入力してください。",
    min_quantity: "最小数量",
  },
  /** {@see BProductInventoryManagementPhysical} **/
  product_inventory_management_physical: {
    subtitle: {
      dropshipping:
        "ドロップシッピング製品の在庫は卸売業者によって設定され、ここでは変更できません。",
      marketplace:
        "マーケットプレイス全体の製品在庫は、すべてのベンダーの在庫を合計して決定されます。ここでは変更できません。",
      default: "ここで商品の在庫数を指定します。",
    },
    menu: {
      add_bulk: {
        title: "一括追加",
        subtitle: "追加 項目 項目 項目 項目 項目.",
      },
      edit_property_set: {
        title: "項目 項目 項目",
        subtitle: "項目 項目 項目, 項目 項目 注文.",
      },
    },
  },

  /**
   * @see USmartMenu
   */
  smart_menu: {
    show_delete_items: "削除済み項目を表示",
  },

  /** {@see BProductGoogleCategoryInput} **/
  google_product_category_input: {
    label: "Google 製品カテゴリ コード",
    hint: "Google の商品分類に従って商品のカテゴリを表します。",
    placeholder: "製品またはサービスのカテゴリを入力します。（オプション）",
  },
  /** {@see LogisticProfileType} **/
  LogisticProfileType: {
    WARRANTY: {
      title: "保証",
      desc: "保証は、製造業者が指定された期間内に製品を修理または交換することを約束する契約の一部です。この約束は、製造業者と直接契約を結んでいない消費者にも適用されます。",
    },
    RETURN_POLICY: {
      title: "返品規則",
      desc: "返品ポリシーでは、顧客が不要な商品を返品または交換する方法を概説しています。返品対象商品、返品の許容理由、返品期限が指定されています。",
    },
    GUIDE: {
      title: "ガイド",
      desc: "ガイドには、アパレルのサイズ表やダイヤモンドの選択ガイドなどが含まれます。ガイドは多用途で、複数の製品に適用できることが重要です。",
    },
    SHIPPING: {
      title: "運送",
      desc: "配送ポリシーには、配送料、配送方法、配送予定時間など、オンライン注文の配送に関する重要な側面が詳細に記載されています。",
    },
  },
  /** {@see BProductProfileLogistic} **/
  product_logistic_profile: {
    dialog: {
      title: "物流プロファイルを選択",
      add_new_action: "新しいプロフィールを追加",
      add_new_disable_msg: "マーケットプレイスオーナー",
    },
  },

  /**
   * @see BPageShopPagesPopups
   */
  b_shop_popups: {
    title: "ポップアップ管理",
    subtitle:
      "作成 項目, 項目, 項目 項目 項目 項目.",
    add_action: "追加 項目 項目",
  },

  /** {@see BProductProfileTax} **/
  product_tax_profile: {
    description: {
      default: "デフォルト",
      dedicated: "ひたむきな",

      subscription: "税金は支払い作成ステップでのみ適用できます。",
      is_disabled: "この税金プロファイルは無効です! (⚠️警告)",
      shipping: "運送",
      fixed_rate: "TAX",
      location_based_rate: "税金: 場所に基づく",
      shipping_location_based_rate: "配送: 場所に基づく",
      include_in_price: "価格に含まれています",
    },
    dialog: {
      header: "税務プロファイルを選択",

      title: "税務プロファイル",
      subtitle:
        "製品に特定の税規制を割り当てることができます。製品に税プロファイルが選択されていない場合は、デフォルトのストア税規制が適用されます。",

      action_manage: "税金の管理",
      action_manage_sub: "ショップ > 財務 > 税金",

      subscription_tips:
        "サブスクリプション製品の税金プロファイルを選択すると、 <code>tax code</code>が更新され、支払いサービス プロバイダーで税込/税抜モードが設定されます。選択した税金プロファイルは、価格が税込みか税抜きかを指定します。 <code>inclusive</code>または税<code>exclusive</code>のいずれかです。税込または税抜きとして指定した後は、変更できません。<br /><br /><b>重要!</b>税金プロファイルを変更した後は、[製品] > [在庫] タブで価格プランをクリックし、[保存] ボタンをクリックして変更を適用する必要があります。",
    },
  },

  /**
   * @see BProductVendorAbstractView
   */
  product_vendor_profile: {
    vendor: {
      subtitle:
        "この製品の価格と数量は、それが属する特定のベンダーによって設定されます。",
    },
    vendors: {
      subtitle:
        "製品のサプライヤーのリストはこちらです。数量と価格はサプライヤーによって設定されます。",
    },
  },
  /**
   * @see BVendorAdd
   */
  vendor_add: {
    menu: {
      profile: "プロフィール & 項目",
      business: "ビジネス & 支払い",
      documents: "ドキュメント",
      page: "項目 項目",
      shipping: "運送",
      access: "アクセス",
      critical_zone: "クリティカルゾーン",
    },

    profile: {
      title: "ベンダー情報",
      subtitle: "この情報は顧客に公開されます。",
      action_sub_caption: "公開製品一覧ページ。",
      action_see_listing_page: "リストページを見る",
      send_invitation_email: "項目 項目 Email",
      invitation_link: "項目 リンク",
    },

    profiles: {
      title: "プロファイル",
      subtitle: "項目 項目 項目 項目 項目 項目 販売者.",
    },
    map: {
      no_map_message:
        "項目 項目 項目 項目 項目 販売者 項目 項目 項目 項目 販売者.",
    },
    page: {
      title: "カスタムページ",
      subtitle:
        "ベンダー用のカスタム ランディング ページを設定し、専用ページへの固有のリンクを提供します。",
      action_set_page: "公開ページを見る",
      action_sub_caption: "カスタムランディングページ。",
      vendor_has_landing_msg: "ベンダーにはカスタムランディングページがあります。",
      no_landing_selected_msg: "ランディング ページが選択されていません。",
      no_landing_page: "ランディングページなし",
      we_can_create_dedicated_landing_msg:
        "専用のランディングページを作成できます。",
    },
    contact: {
      title: "連絡先情報",
      subtitle: "有効な連絡先の詳細をご提供ください。",
    },
    business: {
      title: "ビジネス情報",
      subtitle:
        "迅速かつ円滑な収益回収プロセスを確実に行うために、事業に関する正確な情報を提供してください。",
    },
    bank: {
      title: "支払い情報",
      subtitle: "支払いを受けるには、ここに銀行口座の詳細を入力してください。",
    },
    default_pricing: {
      title: "デフォルト価格",
      subtitle:
        "ベンダーにデフォルトの価格設定モデルを割り当てることができます。ベンダーが新しい製品を追加すると、この価格設定モデルを使用して、製品の価格に対するマーケットプレイス マージンが計算されます。後で、各製品の価格設定モデルを個別に調整できます。",
      no_pricing: "価格設定なし",
    },
    shipping: {
      title: "運送",
      subtitle: "ベンダーは独自の配送サービスと宅配業者を設定できます。",
      shipping_services: "配送サービス",
      total_number_of_services:
        "ベンダーが持つ配送サービスの合計数。",
      couriers: "宅配便",
      total_couriers_count: "ベンダーが保有する宅配業者の総数。",
    },
    configuration: {
      title: "構成",
    },
    delete: {
      title: "ベンダーを削除",
      action: "ベンダーを削除",
      verify_description:
        "すべてのベンダー製品関係が削除されることは承知しています。",
      verify_title: "このベンダーを削除したいです。",
    },

    send_invitation_tips:
      "このユーザーに招待メールを送信します。ユーザーがベンダーとしてショップに参加すると、アカウントが自動的に割り当てられます。",
    only_marketplace_owner_can_edit_user:
      "ユーザーを編集できるのはマーケットプレイスの所有者のみです。このベンダーの所有者を変更する場合は、リクエストを当社に送信してください。",
    vendor_is_disable_msg: "ベンダーが無効になっています。",
    email_not_match_with_user_msg:
      "入力したメールはユーザーのメール（ <b>{user_name}：</b> {user_email}）と一致しません。 <b>{email}</b>にメールを送信してもよろしいですか？",

    order_information_email_to_email:
      "項目 項目 項目 注文 情報 項目 <b>{email}</b>.",

    set_a_user_for_the_vendor_first_msg: "まずベンダーのユーザーを設定します。",

    inputs: {
      slug: {
        label: "パス",
        placeholder: "カスタム パスを入力してください...",
        hint: "ベンダーの動的ランディング ページのパスを変更します。",
      },
      email: {
        message: "このメールにはすべての通知と更新が届きます。",
      },
      business: {
        false_description: "私は個人として働いています。",
        true_description: "私は法的に認められた事業体として運営しています。",
        false_title: "個人",
        true_title: "仕事",
      },
      bank: {
        hint: "ベンダーが口座を持っている銀行の名前。",
        placeholder: "あなたの銀行名。",
      },
      account_name: {
        hint: "これは銀行口座に関連付けられた名前と一致する必要があります。",
        placeholder: "あなたの名前..",
      },
      account_number: {
        hint: "ベンダーの一意のアカウント番号。",
        placeholder: "あなたの銀行口座番号。",
      },
      routing_number: {
        hint: "この番号は国によって異なります。ベンダーが使用する特定の銀行支店を識別するために使用されます。",
        placeholder: "銀行のルーティング番号、ソートコード、または BSB 番号。",
      },
      iban: {
        hint: "国際銀行口座番号: ベンダーの銀行がヨーロッパまたはその他の特定の国にある場合。",
        placeholder: "IBAN番号。例：DE89 3704 0044 0000 0000 00",
      },
      swift: {
        hint: "国際銀行口座番号: ベンダーの銀行がヨーロッパまたはその他の特定の国にある場合。",
        placeholder: "あなたのSwiftコード/BIC。",
      },
      branch_address: {
        hint: "ベンダーが口座を持っている銀行支店の住所。",
        placeholder: "あなたの銀行住所。",
      },
      enable: {
        label: "ベンダーステータス",
        hint: "ベンダーをグローバルに有効または無効にすることができます。顧客は無効なベンダーからは何も購入できなくなります。",
        true_description:
          "彼らはあなたのマーケットプレイスを通じて製品を販売できるようになります。",
      },
      access: {
        label: "ベンダーパネルとアクセス",
        true_description:
          "ベンダーには数量と価格を更新するための専用パネルがあります。",
        hint: "ベンダー パネルを有効または無効にすることができます。これにより、ベンダーは製品の数量と価格を更新し、部分注文を受け取ることができます。",
        false_description: "ベンダーは何にもアクセスできません。",
      },

      logo: {
        label: "販売者 項目",
      },
      description: {
        placeholder: "項目 項目 項目 説明...",
      },
    },
  },

  /**
   * @see BVendorDocumentsList
   */
  vendor_documents_list: {
    title: "ドキュメント",
    action_upload_doc: "ドキュメントをアップロード",
    vendor_subtitle:
      "必要な事業、IP、住所の確認書類をアップロードしてください。パートナーシップを確認し、必要なアクセスを提供するためにこの情報が必要です。",
    marketplace_subtitle:
      "ベンダーは、ビジネス、知的財産、住所確認などの文書を提出して KYC プロセスを容易にし、適切なアクセス権を付与することができます。",
    upload_dialog: {
      title: "ドキュメントをアップロード",
      type: {
        title: "文書タイプ",
        subtitle:
          "必要な書類のみアップロードしてください。機密情報を含む書類は共有しないでください。公開されている書類を要求します。",
      },
    },
  },

  /**
   * @see BProductBadgesManage
   */
  product_badges: {
    title: "バッジ",
    subtitle: "カスタム製品バッジを追加および編集します。",
    only_marketplace_owner_msg: "マーケットプレイスオーナーのみ",
    create_new_badge_action: "新しいバッジを作成",
    select_a_badge: "バッジを選択してください...",
    inputs: {
      custom: {
        false_description: "製品バッジは自動的に作成されます。",
        false_title: "自動",
        true_title: "カスタム製品バッジ",
        true_description: "製品ページにカスタムバッジを追加します。",
      },
    },
    add_custom_badge: {
      title: "カスタムバッジ",
      subtitle:
        "新しいカスタム バッジをショップに追加します。バッジの数は 10 個以下にしてください。バッジの数が増えるとショップの速度が低下します。",
      show_advanced_options: "詳細オプションを表示",

      inputs: {
        title: {
          placeholder: "公開タイトル...",
        },
        image: {
          label: "画像",
          message: "最大画像サイズ: 128KB",
          placeholder: "カバー画像を選択",
        },
        pattern: {
          label: "パターン",
          message:
            "仕様にこの一致する値を持つ製品に対して、このバッジを自動的に表示します。正規表現がサポートされています。",
          placeholder: "すべての製品を表示するには、次のように記述します: *.*",
        },
      },
      notifications: {
        badge_added: "バッジが正常に追加されました。",
        badge_updated: "バッジが正常に更新されました。",
        item_not_found_error:
          "アイテムが見つかりませんでした。ページを更新するか、サポートにお問い合わせください。",
      },
    },
  },
  /**
   * @see BProductTagsInput
   */
  product_tags: {
    title: "タグ",
    tips: [
      "<b>ランディング ページ</b>のタグに基づいて製品をフィルターできます。",
      "あなたとあなたの顧客は、<b>検索</b>バーでこれらのタグを検索できます。",
      "タグを設定すると、商品ページの<b>関連商品セクション</b>に<b>共通タグが</b>付いた商品のみが表示されます。タグを設定しない場合は、同じカテゴリの商品が表示されます。",
    ],
    inputs: {
      tags: {
        placeholder: "ここにタグを配線して Enter キーを押します。例: 新しいコレクション",
      },
    },
    notifications: {
      tags_updated: "タグは正常に更新されました。",
    },
  },

  /**
   * @see VPageVendorShippingTransportation
   */
  vendor_shipping_services: {
    title: "運送",
    subtitle:
      "ここで配送サービスと宅配業者を追加できます。配送サービスと宅配業者は、マーケットプレイスで定義された事前定義された輸送方法の下にある必要があります。配送サービスと宅配業者を追加すると、注文を簡単に割り当て、ラベルや宅配業者を自動的に注文できます。",

    subtitle_pickup:
      "ここでこのセクションの情報と設定を管理できます。",
    action: "サービスを追加",

    add_dialog: {
      select_service_msg:
        "以下のリストから配送サービスを選択してください。ここには、ストアに追加できる利用可能なサービスのみが表示されます。",
      no_available_service: "利用可能なサービスがありません!",
    },
  },
  /**
   * @see VPageVendorShipping
   */
  vendor_shipping: {
    services: "サービス",
  },

  /** {@see BProductProfileMap} **/
  product_location_profile: {
    title: "位置",
    empty_subtitle:
      "場所ベースのアイテムの場合は、製品に場所を割り当てます。",
    dialog: {
      header: "ロケーションプロファイルを選択",
      action_new_location: "新しい場所を追加",
      title: "ロケーションプロファイル",
      subtitle:
        "製品に位置タグを割り当てることで、地図上の場所に製品をピン留めすることができます。",
      tips: "<b>重要:</b>商品を地図上の特定の場所に表示する場合に<b>のみ</b>、商品に場所を割り当てます。ピン留めされた商品には、<b>レンタル住宅/場所</b>や、<b>ヘアサロンやスパ</b>などの対面サービスなど、主な仕様として場所を指定する必要があります。",
    },
  },

  /** {@see BTranslationButton} **/
  translation_button: {
    header: "多言語",
    auto_action: "自動翻訳",
    premium_user_only: "プレミアムユーザー",
  },

  /** {@see BProductProfileInclude} **/
  product_include_profile: {
    subtitle:
      "製品またはサービス パッケージに付属するアイテムのリストを含めます。",
    dialog: {
      header: "製品パッケージ項目",
      title: "含まれるもの",
      subtitle: "製品に付属するアイテムをまとめたものです。",
      action_manage: "アイテムを管理する",
      action_disable_msg: "マーケットプレイスオーナー",
      select_items_tips:
        "製品またはサービスに付属するパッケージ コンポーネントを作成または選択します。この機能を使用して、顧客がアイテムを購入したときに何を受け取ることができるかを強調します。スマートフォンを購入する場合など、顧客が同梱されている内容を理解する必要がある場合にのみ、この機能を使用することをお勧めします。",
      create_item_tips:
        "あるいは、新しいアイテムを追加することもできます。アップロードされた画像は自動的に 256 x 256 の正方形形式にサイズ変更されるため、正方形の画像を使用してください。すべてのテンプレートで最適な外観を確保するには、透明な背景のミニマルな画像を使用し、すべての製品で一貫したパターンを維持します。",
      create_new_item_action: "新しい含まれるアイテムを作成する",
    },
  },

  /** {@see BPageProduct} **/
  product_admin: {
    products_list: "製品一覧",
    product: "製品",

    menu: {
      edit: "編集",
      review: "レビュー",
      orders: "注文",
      inventory: "在庫",
      dashboard: "ダッシュボード",
      back_to_products: "製品",
      drop_shipping: "ドロップシッピング",
    },

    /** {@see BPageProductDashboard} **/
    dashboard: {
      /** {@see BProductInfoAbstractView} **/
      info: {
        title: "プロフィール",
        title_small: "製品",
        category: "製品カテゴリ",
        link: "製品リンク",
        type: "タイプ",
        inputs: "入力情報",
        outputs: "出力情報",
        user_data_form: "バイヤー情報フォーム",
        staff_messages: "スタッフメッセージ",
        add_note: "メモを追加",
        product_tags: "製品タグ",
        edit_tags: "タグを編集",
      },
      /** {@see BProductOrdersAbstractView} **/
      orders: {
        title: "注文",
        title_small: "未処理",
        physical_orders_title: "この製品のショッピングカート",
        send_count_in_period: "{start} ～ {end} の間に発送された注文",
        downloads_count_in_period:
          "{start} ～ {end} の間のファイルのダウンロード数",
      },

      /** {@see BProductInventoryAbstractView} **/
      inventory: {
        title: "在庫",
        title_small: "倉庫",
        total_sell: "総売上高",
        total_sell_today: "今日の売り上げ",
        total_sell_timespan: "{start} ～ {end} 間の総売上",
        chart: {
          labels: ["在庫", "セール"],
        },
        subscribers_title: "購読者",
        subscribers_title_small: "購読された注文の合計",
      },

      /** {@see BProductFinanceCharts} **/
      finance: {
        title: "金融",
        title_small: "項目 レポート 項目 {start} ~ {end}.",
        select_mode_title: "表示者",
        modes: {
          sell: "セール",
          payment: "支払い",
          discount: "割引",
        },
        currency_select_title: "選択した通貨による価格",
        sell_today: "今日の売り上げ",
        product_price: "製品価格",
        currency_unit: "通貨単位",
        sell_30days: "30日間の販売",
        sell_daily: "毎日の売り上げ",
        sell_yesterday: "昨日の売り上げ",
      },

      /** {@see BProductRatingCharts} **/
      survey: {
        title: "製品の評価",
        title_small: "顧客満足度レポート",
        total_participation: "貢献の総数",
        total_participation_tooltip: "製品の評価者の合計数。",
        today_participation: "今日の評価",
        last7days_participation: "過去7日間の貢献",
        chart: {
          participate: "参加",
          participate_title: "貢献の数",
          score: "スコア",
        },
        users_not_rated_msg: "ユーザーはまだこの製品を評価していません。",
      },

      /** {@see BProductMarketingAbstractView} **/
      inform: {
        title: "お客様の期待",
        title_small: "割引や在庫状況を待っています",
        message:
          "製品が発売または利用可能になったときに顧客に通知する",
        waiting_for_auction: "商品発売待ち",
        waiting_for_available: "製品が利用可能になるのを待っています。",
        unit: "人）",
      },
    },

    /** {@see BPageProductInventory} **/
    inventory: {
      /** {@see BProductInventoryManagement} **/
      variants: {
        inventory_list: "在庫表",
        add_variant: "バリアントを追加",

        title: "製品在庫/製品バリアントリスト",
        sub_title:
          "この製品に複数のバリエーションがある場合は、このセクションにそれらを入力します。各バリアントの金額、価格、割引を個別に定義できます。それ以外の場合、製品のデフォルト値が価格設定に適用されます。",
        add_action: "バリアントを追加",
        count_input: "在庫",
        count_input_action: "カウントを設定",
        management_title: "在庫管理と製品バリエーション",
        add_title: "製品バリアントを追加する",
        edit_title: "製品バリアントの編集",
        notifications: {
          add_success: "製品バリアントが追加されました。",
          delete_success: "製品バリアントが削除されました。",
          save_product_inventory_success: "保存された製品の在庫。",
        },
      },

      /** {@see BProductInventoryManagementVirtual} **/
      variant_item: {
        price: "価格",
        same_as_product: "主な製品と同様",
        in_stock: "在庫",
        delete_dialog: {
          title: "製品バリアントを削除する",
          message: "このバリアントを削除しますか？",
        },
      },
      /** {@see BProductVariantAdd} **/
      variant_add_edit: {
        message: "固有の製品番号",
        active_input: "このバリアントはアクティブですか？",
        sku: "SKU",
        sku_tips: "製品倉庫コード。",
        mpn: "MPN",
        mpn_tips: "製品パッケージにメーカーが挿入した製品コード",

        has_pricing_input: "価格は本製品と違いますか？",
        inventory_unit: "アイテム",
        images_message:
          "このバリアントを保存した後、ここに画像を追加できるようになります。",

        config: {
          title: "商品 項目 項目",
          subtitle: "項目 SKU, MPN, 項目 項目 項目 項目.",
        },
        variables: {
          title: "項目 項目",
          subtitle:
            "<b>ここでこのセクションの情報と設定を管理できます。</b><b></b>",
          graphical_asset_tips:
            "<b>ここでこのセクションの情報と設定を管理できます。</b>",
          graphical_asset_action: "項目 項目",
          graphical_asset_action_caption: "項目 項目 項目 項目.",
        },
        smart_unit_price: {
          tips: "<b>ここでこのセクションの情報と設定を管理できます。</b><b></b><b></b>",
          smart_unit_price: "単価計算",
        },
        quantity: {
          title: "在庫",
          subtitle: "項目 項目 項目 項目 項目 項目.",
        },
        price: {
          title: "価格設定",
          subtitle:
            "項目 項目 項目 価格 項目 項目 項目 項目 項目 項目 項目 商品 価格.",
        },
        package: {
          title: "項目 & 配送",
          subtitle:
            "項目 項目 項目 項目 項目 項目 項目 項目 配送 項目.",
          same_as_product_action: "項目 項目 商品",
        },
        image: {
          title: "バリエーション画像",
          subtitle:
            "ここでこのセクションの情報と設定を管理できます。",
        },
        inputs: {
          sku: {
            message: "項目 項目 項目 (SKU)",
          },
          mpn: {
            message: "項目 項目 項目 (MPN)",
          },
          gtin: {
            label: "項目 項目 項目 項目 (GTIN)",
            message:
              "項目 項目: UPC (12 項目), EAN (13 項目), JAN (8 項目 13 項目), ISBN (13 項目).",
          },
        },
      },
    },

    /** {@see BPageProductArticle} **/
    edit_article: {
      menu: {
        tags: "タグ",
        article: "記事",
      },
    },
  }, // product_admin

  /**
   * @see TransportationsEligibleView
   */
  transportation_eligible: {
    subtitle:
      "利用可能な配送サービスは、指定されたサイズと重量によって異なります。",
  },

  /** {@see BProductExtraInput} **/
  product_extra_physical: {
    weight: "パッケージの重量",
    weight_subtitle:
      "ここで、商品の総梱包重量を入力します。この情報は、適切な配送方法を選択し、注文が配送制限を超えないようにするのに役立ちます。",
    weight_unit: "項目",
    size: "パッケージの寸法",
    size_subtitle:
      "ここで製品の完全な梱包サイズを入力します。この情報は、正しい配送方法を選択し、注文が小包のサイズ制限を超えないようにするために使用されます。",

    width: "幅",
    length: "長さ",
    height: "身長",
    lead_time_title: "準備時間",
    lead_time: "準備時間",
    lead_time_subtitle:
      "リードタイムは、製品を出荷準備するのに必要な期間を推定するもので、配達時間を見積もるのに役立ちます。",

    lead_time_dimension: "時間）",
    bulk_action: "一括操作",
    bulk_action_subtitle:
      "パッケージ情報をすべての製品バリアントに適用できます。",

    bulk_action_input: "すべてのバリアントを更新します",
    bulk_action_msg:
      "すべてのバリエーションの製品パッケージと準備時間を設定します。",
    dynamic_lead_time: "項目 項目 項目",
    instant_delivery: "項目 項目",
  },

  /**
   * @see SGalleryUploadGrid
   */
  gallery_upload_grid: {
    upload_images: "画像をアップロード",
  },

  /**
   * @see BProductImagesGallery
   */
  product_images_gallery: {
    dialog_alt: {
      title: "画像の代替テキストを設定",
      placeholder: "項目 項目 項目 項目 項目...",
      success_update_notification: "項目 項目 項目 項目.",
    },
    dialog_bg_remove: {
      title: "削除 項目 項目",
      action: {
        title: "背景を削除",
        subtitle: "作成 項目 項目 項目.",
      },
      success_remove_bg_notification: "背景が正常に削除されました！",
    },
  },
  /**
   * @see VariantGraphicalAssetsList
   */
  variant_graphical_assets: {
    title: "バリエーションのグラフィック素材",
    tips: {
      how_it_works:
        "<b>ここでこのセクションの情報と設定を管理できます。 {filename}</b><br /><b></b><b><s></s></b>",
      how_set_name:
        "<b>ここでこのセクションの情報と設定を管理できます。</b><br />",
    },
  },

  /**
   * @see ExtraPricingLevels
   */
  extra_pricing_levels: {
    extra_pricings: "項目 項目",
    min_quantity: "項目 数量",
    range_is_out_of_stock: "この範囲は在庫切れです！",
  },

  /**
   * @see BProductVariantItem
   */
  product_variant_item: {
    duplicated_variant: "項目 項目 項目 項目!",
    set_color_warning: "項目 選択 項目 項目.",
    set_volume_warning: "項目 項目 項目 項目.",
    set_pack_warning: "項目 項目 項目 項目 項目.",
    set_weight_warning: "項目 項目 項目 項目.",
    set_type_warning: "項目 選択 項目 タイプ.",
    set_style_warning: "項目 選択 項目 項目.",
    out_of_stock: "現在在庫切れ",

    image: {
      tooltip: "⚡ 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目.",
    },
    enable: {
      true_tooltip: "項目 項目 項目 利用可能 項目 項目 項目 ストア.",
      false_tooltip: "項目 項目 項目 項目 利用可能 項目 項目 項目 ストア.",
    },
    restore_dialog: {
      title: "バリエーションを復元",
      message: "項目 項目 項目 項目 項目 項目 項目 項目 項目 項目?",
      action: "項目, 項目 項目",
    },
    notifications: {
      restore_variant_success: "項目 商品 項目 項目 項目 項目.",
    },
  },

  /** {@see BProductImagesGallery} **/
  product_images_list: {
    upload_button: "その他の製品画像",
    upload_an_image: "画像を選択します。",
    notifications: {
      update_sort_success: "保存された画像の並べ替え",
      delete_image_title: "商品画像を削除する",
      delete_image_success: "画像が正常に削除されました",
    },
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "価格",
    inventory: "在庫",
    discount: "割引",
  },

  /** {@see BGiftcardTypeAdd} **/
  gift_card_type_edit: {
    title_input: "タイトル",
    color_input: "カードの色",
    charge_input: "初期費用",
    charge_input_hint: "各カードの初期料金",
    currency_input: "通貨",
    currency_input_message: "この通貨での購入のみ",
    lifetime_input: "カードの有効期間（月）",
    lifetime_input_message: "カードの有効性",
    card_image_input: "カード画像",
    notifications: {
      create_success: "カードを作成しました",
      update_success: "カードを更新",
    },
  },

  /** {@see BInventoryWarehouse} **/
  shop_warehouse_edit: {
    title: "倉庫を追加",
    message:
      "倉庫の住所とプロファイルを入力して、送料を計算します。",
    name_input: "倉庫名",
    address: "住所",
    name_input_message: "倉庫のニックネームを入力します。",
    person_name: "役員名",
    phone_number: "連絡先番号",
    map_title: "店舗倉庫の住所",
    confirm_action: "倉庫の承認",
    address_name: "倉庫",
    notifications: {
      success_save: "変更は正常に保存されました。",
    },
  },

  /** {@see BPageShopLogisticInventoryList} **/
  inventory_list: {
    title: "店舗在庫",
    subtitle: "店舗内のすべての製品のリスト。",
    cant_set_here: "ここでは設定できません",

    search_input: "製品検索...",
    search_input_title: "ストア製品を検索する",
    apply_filter: "フィルタを適用する",
    inventory: "在庫表",
    export: "在庫のエクスポート",
    import: "在庫のインポート",
    bulk_price: "一括価格変更",
    bulk_discount: "一括割引変更",
    category_filter_msg: "⚡すべての製品とサブカテゴリに適用されます！",
    table: {
      waiting: "情報を受け取る...お待ちください",
      open_state: "アクティブ",
      close_state: "非活性",
      image: "画像",
      product: "商品名",
      code: "製品コード",
      sku: "SKU",
      mpn: "MPN",
      original: "オリジナル",
      status: "状態",
      in_stock: "在庫あり",
      edit: "変化する",
    },

    bulk_discount_dialog: {
      title: "一括アクション>割引",
      message:
        "注：次の金額は、ストア内のすべての商品の割引に対するパーセンテージとして表示されます。また、計算された割引値は、選択した通貨に基づいて最も近いラウンド数にインテリジェントに変換されます。値の入力には注意してください。",
      check: "割引の変更を承認します。",
    },
    notifications: {
      save_success: "在庫の変更が保存されました。",
    },
  },

  /**
   * @see BInventoryBulkPrice
   */
  bulk_price_dialog: {
    title: "一括アクション>価格",
    message:
      "以下の金額は、ストア内のすべての製品の価格にパーセンテージとして適用されます。また、計算された価格の値は、選択した通貨に基づいて最も近い端数にインテリジェントに変換されます。値を入力する際には注意してください。",
    check: "価格変更を承認します。",
    check_description:
      "選択したカテゴリとすべてのサブカテゴリの価格が変更されます。",
    add_percent_tab: "パーセントを追加",
    add_constant_tab: "定数を追加",
    ending_tab: "エンディング戦略",
    marketplace_listing_price: "掲載価格",

    constant: {
      subtitle:
        "金額は商品の現在の価格に加算または減算されます。",
    },
    ending: {
      subtitle:
        "商品の現在の価格の末尾が指定された値に変更されます。",
    },
    marketplace: {
      title: "マーケットプレイス掲載価格",
      subtitle:
        "このオプションを使用すると、マーケットプレイス内の製品のリスト価格を自動的に更新できます。手動による価格変更により、メインの製品価格がベンダーの価格と一致しない場合があります。",
      strategy: {
        min: {
          title: "最低価格を設定する",
          description:
            "商品の最低価格を出品価格として設定します。",
        },
        max: {
          title: "最高価格を設定する",
          description:
            "商品の最大価格を出品価格として設定します。",
        },
      },
    },

    category: {
      subtitle: "一括操作をカテゴリとすべてのサブカテゴリに制限します。",
    },
    vendor: {
      subtitle:
        "一括アクションを特定のベンダーに制限します。ベンダーを選択すると、価格更新がそのベンダーの製品に適用され、そのベンダーの販売価格が示されます。",
      listing_price_need_update_msg:
        "リスト価格（商品リストに表示される価格）を更新する場合は、ベンダーを選択せずに、同じフィルターを使用して一括更新を再送信する必要があります。",
    },
    listing_products_changes: "商品リストの変更",
    total_vendor_products: "ベンダー製品合計",
    total_products: "総製品数",
    total_variants: "合計バリアント",
  },

  /** {@see BProductSpecTable} **/
  spec_view: {
    auto_save_input: "自動保存",
    auto_save_input_message: "変更は自動的に保存されます。",
  },

  /** {@see STimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "スタートを切る",
    title_between_start_end: "最後まで残っている",
    title_after_end: "終了した",
    title_no_start_end: "期間なし！",
  },

  /** {@see GeoMap} **/
  geo_map: {
    views: "ビュー",
    views_unit: "タイムズ",
    product_views: "製品ビュー",
    buys: "購入",
    buys_unit: "注文",
    baskets: "アクティブなカート",
    added_items: "アイテムを追加する",
    removed_items: "アイテムを削除する",
  },

  /** {@see BPageShopFinanceGateways} **/
  b_page_shop_finance_gateway: {
    title: "支払い方法",
    sub_title:
      "項目 項目 項目 支払い 方法. 項目 項目 項目 項目 追加 項目 項目 方法 項目 項目 ショップ, 項目 項目 項目 項目. 項目 項目 項目 項目 項目 10 項目 支払い ゲートウェイ.",
    add_gateway: "新しい支払い方法",

    add_gateway_dialog: {
      title: "通貨を選択",
      country_currencies: "現地通貨",
      crypto_currencies: "暗号通貨",

      confirm: "お支払い方法を追加",

      online_methods: "オンライン方法",
      cod_methods: "項目 項目 項目",
      bank_transfer: "銀行振込",
      cash_methods: "項目 支払い (POS)",

      currency_step: {
        title: "通貨を選択",
        subtitle:
          "ここでこのセクションの情報と設定を管理できます。",
        add_first_currency: {
          subtitle: "項目 追加 項目 通貨 項目 項目 ショップ 項目 項目.",
          title: "通貨を追加する",
        },
      },
      gateway_step: {
        title: "有効な支払い方法",
        subtitle:
          "ここでこのセクションの情報と設定を管理できます。",
      },

      config_step: {
        import_config: "項目 項目 項目 項目 項目 項目 項目 ゲートウェイ",
        import_from: "インポート元",
      },

      request_add_new_gateway: {
        title: "項目 項目 項目 項目 支払い 方法?",
        subtitle:
          "ここでこのセクションの情報と設定を管理できます。",
      },

      inputs: {
        currency: {
          placeholder: "選択 項目 ゲートウェイ 項目 項目...",
        },
        manual: {
          true_title: "手動モード",
          true_description: "項目 項目 項目 ゲートウェイ 項目 項目.",

          false_title: "自動接続",
          false_description:
            "必要な情報を選択または入力してください。",
        },
      },
    },
  },

  /** {@see FaqRequestsList} **/
  faq_list: {
    table: {
      nodata: "質問は見つかりませんでした。",
      more_data_action: "さらに質問を ..",
      user: "ユーザー",
      tag: "鬼ごっこ",
      question: "質問",
      officer: "スタッフ",
      answer: "答え",
      created_at: "日にち",
      priority: "優先度",
      edit: "編集",
    },
    dialog: {
      add_new_action: "新しい質問を送信する",
      edit_action: "FAQを編集",
      question_input: "質問",
      question_input_placeholder: "あなたの質問をしてください..",
      link_input: "リンク",
      link_input_placeholder: "返信のリンクを参照できます。",
      answer_input: "答え",
      answer_input_placeholder: "回答テキストを入力してください。",
      tag_input: "タグ（カテゴリタイトル）",
      tag_input_placeholder: "短いタイトルを入力してください",
      priority_input: "優先度：（0から10）",
    },
    delete_alert: {
      title: "質問を削除",
      message: "この質問を削除しますか？",
      action: "消去",
    },
    notifications: {
      send_success: "回答は正常に送信されました。",
      delete_success: "質問は正常に削除されました。",
    },
  },
  /** {@see ContactMessagesList} **/
  contact_messages_list: {
    load_more_action: "その他のメッセージ..",

    table: {
      nodata: "質問は見つかりませんでした。",
      user: "ユーザー",
      message: "メッセージ本文",
      category: "カテゴリー",
      officer: "スタッフ",
      answer: "答え",
      created_at: "日にち",
      contact: "コンタクト",
      edit: "編集",
    },

    dialog: {
      title: "メッセージに返信する",
      category: "カテゴリー",
      user_name: "名前",
      email: "Eメール",
      phone: "連絡先番号",
      message: "メッセージテキスト",
      status: "応答状況",
      status_answered: "答えた",
      status_waiting: "応答待ち",
      answer_input: "返信テキスト",
      mail_input: "メールを送る",
      mail_input_message:
        "これを有効にすると、応答がユーザーの電子メールに送信されます。",
    },
    delete_alert: {
      title: "メッセージを削除",
      message: "このメッセージを削除しますか？",
      action: "消去",
    },
    notifications: {
      send_success: "リクエストは正常に送信されました。",
      delete_success: "メッセージが削除されました。",
    },
  },
  /** {@see BPageCampaign} **/
  campaign: {
    title: "運動",
    menu: {
      setting: "設定",
      return: "戻る",
      dashboard: "ダッシュボード",
      links: "リンク",
      landing: "着陸",
      ads: "広告",
      finance: "ファイナンス",
    },
    /** {@see BPageCampaignDashboard} **/
    dashboard: {
      title: "ダッシュボード",
      status: "ステータスの概要",
      sessions: "セッション",
      links_overview: "キャンペーンリンクの概要",
      orders: "注文",
      performance: "キャンペーンのパフォーマンス",
      links_funnel: "キャンペーンリンクパフォーマンス",
      no_links:
        "利用可能なデータはありません！キャンペーンへのリンクを作成してください。",
      social: "ソーシャルメディアリード",
      conversion_over_time: "時間の経過に伴う変換",
      total_campaign_sell: "キャンペーン別総売上高",
    },
    /** {@see BPageCampaignFinance} **/
    finance: {
      title: "財務報告",
      campaign_revenue: "キャンペーン収入",
      total_revenue:
        "キャンペーン別の総収入",
      links_revenue: "キャンペーンリンクの収益",
      payments_over_time: "時間の経過に伴う売上",
      all_links: "すべてのリンク",
    },
    /** {@see BPageCampaignLanding} **/
    landing: {
      empty_message: "キャンペーン設定でランディングページを設定します。",
      set_landing: "ランディングページを設定する",
      create_landing: "新しいランディングページを作成する",
    },

    /** {@see BPageCampaignLinks} **/
    links: {
      title: "キャンペーンリンク",
      url_input_message: "ターゲットページのURLを入力してください",
    },

    /** {@see BPageCampaignSetting} **/
    setting: {
      menu: {
        config: "構成",
        timespan: "期間",
        banner: "バナー",
        Notification: "通知",
      },

      general_setting: {
        title: "一般的なキャンペーン設定",
        sub_title: "名前、ランディングページ、割引コード",

        name_input: "キャンペーン名",
        name_input_hint: "キャンペーンに名前を追加する",
        enable_input: "キャンペーンはアクティブですか？",
        page_input: "ランディングページ",
        discount_code_input: "ディスカウントコード",
        limit: "割引制限",
        max_count: "最大数",
        max_count_unit: "アイテム",
        start: "始める",
        end: "終わり",
        notification_enable_input: "通知は有効ですか？",

        landing_page: "ランディングページ",
        discount_code: "ディスカウントコード",

        auto: "デフォルトのキャンペーン",
        auto_message:
          "ショップでアクティブ化されたデフォルトのキャンペーン",
      },
      time_setting: {
        title: "期間",
        sub_title:
          "開始日時/終了日時",
        start_input: "始める",
        start_input_placeholder: "キャンペーン開始時刻を選択",
        end_input: "終わり",
        end_input_placeholder: "キャンペーン終了時間を選択します",
      },
      banner_setting: {
        title: "ショップバナー",
        sub_title:
          "ショップページの上部に表示",

        message_input: "メッセージテキスト",
        message_input_placeholder: "特別祭..。",
        message_input_hint: "ストアの上部にあるバナーメッセージテキスト",
        bg_image_input: "背景画像のURL",
        bg_image_input_hint: "完全な背景画像のURL",
        repeat_pattern: "パターンを繰り返す",
        simple: "単純",
        dark_input: "暗いテーマ？",
        icon_input: "アイコン",
        icon_input_hint:
          "マテリアルデザインのアイコン名またはFontawsom：fa:fas fa-star",
        anim_input: "アニメーションアドレス",
        anim_input_message: "ロッティアニメーションファイルのURL",
        preview: "プレビュー",
        preview_update_action: "プレビューを更新",
        bg_color: "背景色",
        icon_bg: "アイコンの背景色",
      },
      notifications: {
        title: "通知",
        sub_title: "通知を作成し、キャンペーンにリンクします。",
        update_success: "キャンペーンが更新されました。",
        action_button: "アクションボタン",
        background_color: "背景色",
        text_color: "テキストの色",
        action_color: "アクションカラー",
        action_text_color: "アクションテキストの色",
        notification_image: "通知画像",
        notification_bg: "通知の背景",
        show_preview: "ショープレビュー",
        persistence: "永続性",
        persistence_message:
          "ユーザーがWebサイトにアクセスするたびに表示しますか",
        radius: "半径",
        show_delay: "遅延を表示",
      },
    },
  },

  /** {@see BCategoryAdd} **/
  add_category: {
    title_edit: "カテゴリを編集",
    title_update: "新しいカテゴリを追加",

    config: {
      subtitle:
        "カテゴリを使用すると、製品管理が効率化され、顧客がストア内の製品を見つけやすくなります。",
    },
    parent: {
      subtitle:
        "このカテゴリは親カテゴリの下に表示されます。製品に親カテゴリがない場合は、メインカテゴリに表示されます。",
    },
    template: {
      title: "レンプレート",
      edit_page: "ページを編集",
      Pages_list: "ページリスト",
      subtitle:
        "カスタム ページを重ねることで、カテゴリ ページの表示を強化できます。最適な方法は、透明な背景のページを作成し、各カテゴリに固有の 1 ～ 2 つのセクションを設計することです。その後、1 つのページを複数のカテゴリにリンクし、動的コンテンツを使用して各カテゴリを個別にカスタマイズできます。",
    },
    critical_zone: {
      title: "クリティカルゾーン",
      subtitle:
        "カテゴリーを削除すると、そのサブカテゴリーと商品は親ディレクトリ<b>📁 {parent}</b>に移動されます。商品リストにないカテゴリーを管理するには、[ショップ] > [カテゴリー] タブに移動します。",
      accept_delete: {
        true_description: "このカテゴリーを削除したいです。",
        true_title: "カテゴリの削除を確認",
      },
    },

    menu: {
      delete: "カテゴリを削除",
      filter: "フィルタ",
      settings: "設定",
      back: "戻る",
    },
    title_input: "カテゴリタイトル*",
    title_input_error: "カテゴリタイトルを選択",
    name_input: "カテゴリ名（英語）*",
    name_input_error: "カテゴリの一意の名前を選択してください",
    description_input: "カテゴリの説明",
    description_input_message: "カテゴリの簡単な説明を入力してください。",
    parent_input: "親カテゴリ",
    parent_input_message: "このカテゴリはストアのホームページに表示されます。",
    image_input: "カテゴリ画像",
    image_input_placeholder: "カテゴリの画像を選択してください",
    edit_action: "カテゴリを編集",
    add_action: "カテゴリを追加",
    back_action: "戻る",
    no_category: "カテゴリなし",
    star: "星",

    filter: {
      title: "カテゴリフィルター",
      sub_title: "このカテゴリの製品に適用可能なフィルタとカテゴリを管理します。",
      message:
        "下のボックスに、このカテゴリの一般的な技術機能のタイトルを入力して保存します。リストを保存すると、フィルターカテゴリが各カテゴリの内容とともに表示されます。色、重量、サイズ、ブランドなどは、製品バリエーションから自動的に抽出されます。",
    },
    delete_alert: {
      title: "カテゴリを削除",
      message: "{title}カテゴリを削除しますか？",
      action: "消去",
    },
    notifications: {
      add_success: "新しいカテゴリが追加されました。",
      edit_success: "カテゴリを編集しました。",
      delete_success: "{title}を削除しました。",
    },
    /** {@see BCategoryFilterEditor} **/
    edit_filter: {
      spec_input: "技術仕様リスト",

      price: "価格",
      min: "最小",
      max: "マックス",
      suggested_list: {
        brand: "ブランド",
        colors: "色",
        styles: "設計",
        volumes: "音量",
        weights: "重さ",
        packs: "パックあたりの数",
        types: "タイプ",
      },
      notifications: {
        edit_success: "カテゴリを編集しました。",
      },
      manually_update_filters_tips:
        "<b>重要!</b>製品が変更されると、フィルターは自動的に更新されます。ただし、カテゴリ内の製品に変更を加えた後は、ここに戻って [保存/再生成] ボタンをクリックしてフィルターを更新してください。",

      inputs: {
        spec: {
          message:
            "フィルタセクションに表示する機能のリスト",
          placeholder: "フィルターに表示する仕様を選択してください...",
        },
      },
    },
  },

  /** {@see BAppShopList} **/
  apps_list: {
    nodata: "ストアにアプリがインストールされていません",
    inactive: "非活性",
    my_apps: "私のアプリ",
    app_store: "新しいアプリを追加する",
  },

  /** {@see BShopAdd} **/
  add_shop: {
    menu: {
      shop_title: "ストアタイトル",
      shop_name: "店名",
      description: "説明",
      contact: "連絡先",
      image: "画像",
    },
    title_input: "タイトル",
    title_input_tips: "店舗、ブランド、または会社の名前を入力します。",
    active_message: "誰もがあなたのウェブサイトにアクセスできるようにアクティブに設定します。",
    language_input_message: "ストアの言語を選択してください。",
    name_input: "名前",
    name_input_message: "ストアの名前を入力します。",
    name_input_tips:
      "英語以外の文字、スペース、文字は使用しないでください。使用すると、ストア名が正しく表示されない場合があります。",
    description_input: "ストアの説明",
    description_input_message: "あなたのビジネスについて簡単な説明を書いてください。",
    description_input_tips:
      "この説明はストアのフッターに表示され、ストア ページのデフォルトのメタ タグの説明としても使用されます。",
    address_input: "店舗の住所",
    address_input_message: "正確な店舗の場所の住所を入力してください",

    phone_input: "電話番号",
    phone_input_message: "お客様の連絡先番号",
    phone_input_tips:
      "連絡先番号と国コードを入力します。この番号は、Google検索で情報を表示するためにも使用されます。",
    email_input: "Eメール",
    email_input_message: "お客様のメールアドレス",
    locality_input: "位置",
    locality_input_message: "店の所在地",
    region_input: "州または県",
    region_input_message: "事業を行っている州または県",
    country_input: "国",
    country_input_message: "事業国",
    postal_code_input: "郵便番号",
    postal_code_input_message: "店舗の郵便番号",
    image_input: "画像を保存",

    map: {
      title: "店舗の住所",
      confirm: "住所登録",
      address: "住所",
      receptor: "お店",
    },

    create_shop_action: "ストアを作成する",
    update_shop_action: "アップデート",

    notifications: {
      copy_success: "店舗の住所のコピー。",
      name_available: `この名前（{name}）は使用可能です。`,
      add_success: `作成されたストア{title}。`,
      edit_success: "編集したストア。",
    },
  },

  /** {@see BProductInventoryManagementVirtual} **/
  virtual_items_list: {
    add_virtual_item: "仮想アイテムを追加する",
    add_virtual_item_desc:
      "仮想製品を販売するには、このセクションに仮想製品を追加する必要があります。仮想アイテムの数は、このセクションの無料アイテムの数と同じです。顧客が仮想アイテムを購入すると、リンクが顧客に送信されます。",

    filter_action: "フィルタを適用する",
    not_processed: "未処理の注文",
    title: "アイテムのリスト",
    vew_order: "表示の順序",

    table: {
      nodata: "アイテムはありません",
      product: "製品",
      data: "データ",
      status: "状態",
      user_message: "ユーザーメッセージ",
      updated_at: "最後の更新",
      order: "注文",
      delete: "消去",
    },
    notifications: {
      delete_success: "アイテムが正常に削除されました。",
    },
  },

  /** {@see BProductVirtualItemAdd} **/
  add_virtual_item: {
    title_edit: "値を編集する",
    title_add: "商品にアイテムを追加する",
    sub_title: "仮想製品の作成と編集",
    message:
      "店長は、支払い後に購入者に価値を示すことができます。これらの値は、以下のフォームに入力する必要があります。このフォームの構造は、「アイテムの編集」>「出力情報の編集」セクションで設定されます。",
    edit_outputs: "出力フォームの編集",
    notifications: {
      edit_success: "編集されたアイテム。",
      add_success: "リストに追加されたアイテム。",
    },
  },

  /** {@see BPageOrderVirtual} **/
  virtual_process_center: {
    title: "処理センター",
    sub_title: "注文処理",
    virtual_product: "仮想製品",
    menu: {
      report: "報告する",
      timeline: "タイムライン",
      order: "注文",
    },

    /** {@see BOrderVirtualItem} **/
    outputs_widget: {
      title: "出力フォーム",
      table: {
        title: "タイトル",
        value: "価値",
      },
      tips: [
        "顧客の要求を完了した後、注文確認キーを押して購入者に注文を通知します。",
        "注文が承認されると、購入者は入力情報を編集できなくなります。",
      ],
      alerts: {
        order_completed_by_admin: "注文が完了しました。",
        order_completed_by_buyer: "購入者が注文を完了しました。",
        waiting_for_buyer: "バイヤーの承認を待っています..",
      },
    },
  },

  /** {@see BPageOrderFile} **/
  file_process_center: {
    title: "処理センター",
    sub_title: "注文処理",
    menu: {
      report: "報告する",
      timeline: "タイムライン",
      order: "注文",
    },
  },

  /** {@see BOrderDashboard} **/
  process_order_page_dashboard: {
    title: "注文処理",
    cancel_order_action: "注文をキャンセルする",
    open_basket_cation:
      "このショッピングカートは開いています。つまり、顧客は買い物をしていて、まだ注文を支払っていません。",

    reject_dialog: {
      title: "注文を拒否する理由",
      message:
        "以下のリストから、この注文を拒否する理由を選択してください。キャンセルと払い戻しのプロセスについては、必ずお客様にお知らせください。払い戻しは12時間以内に行う必要があります。",
      confirm_now_action: "今すぐ注文をキャンセル",
      confirm_in48h_action: "48時間以内に注文をキャンセル",

      dismiss_reject_action: "注文のキャンセルを却下します",

      options: {
        title: "オプション",
        subtitle:
          "注文をすぐにキャンセルしたい場合は、このオプションを使用できます。",
      },

      express_input: {
        true_title: "項目 | 項目 注文 項目",
        false_title: "項目 | 項目 注文 項目 48 項目",
        true_description:
          "項目 項目 項目 項目 項目 注文 項目 項目 更新 項目 項目 項目 項目.",
        false_description:
          "必要な情報を選択または入力してください。",
      },
    },

    notifications: {
      update_status_success: "注文状況が更新されました。",
      reject_update_success:
        "注文キャンセルステータスが更新されました。",
      dismiss_reject_success:
        "注文は通常のプロセスに戻りました。",
      set_tracking_success: "注文トラックIDが正常に保存されました。",
      shipping_address_update_success:
        "配送 住所 項目 項目 項目 項目.",
      vendor_order_status_update_success:
        "販売者 項目 ステータス 項目 項目 項目 項目.",
    },
  },
  /** {@see BPageOrderPhysical} **/
  /** {@see BPageOrderVirtual} **/
  /** {@see BPageOrderFile} **/
  /** {@see BPageOrderService} **/
  process_center: {
    title: "処理センター",

    physical_product: "物理的な製品",
    menu: {
      label: "パッケージラベル",
      receipt: "請求書",
      back: "戻る",
      return: "戻る",
      report: "報告する",
      timeline: "タイムライン",
      inputs: "入力",
      order: "注文",
    },

    /** {@see OrderPaymentWidget} **/
    payment_widget: {
      title: "支払い",
      checklist: [
        "注文金額と顧客の支払いを確認してください。",
        "請求先住所を確認してください。",
        "特に支払いが代金引換である場合は、入力した情報が正しいことを確認してください。",
      ],
      action_cod_pay: "顧客による支払いの確認",
      action_dir_pay: "アップロードされた領収書を確認する",
      payment_receipt_not_uploaded_error:
        "領収書はまだアップロードされていません！",

      waiting_for_pay: "支払い待ち",
      processing_payment: "支払いの処理",
      processing_cancel: "支払いがキャンセルされました",
      require_capture: "キャプチャが必要",
      paid: "有料",
      cod_pay_info:
        "顧客から注文を受け取ったら、支払いを確認して注文を完了することができます。",
      dir_pay_info:
        "領収書は上に表示されます。お支払いを確認する前に、銀行に預金額と領収書の情報を確認してください。",

      created_date: "作成日",
      pay_date: "支払期日",
      payment_gateway: "支払いゲートウェイ",
      payment_method: "支払方法",
      risk: "リスク値",
      billing_details: "支払明細",

      add_transaction: "新しい請求書を追加する",
      add_transactions_message:
        "この注文には、少なくとも1つのトランザクションを作成する必要があります。場合によっては、いくつかのステップで支払いが必要になります。ユーザーが支払う必要のあるトランザクションは、作業中にユーザーが決定します。",

      add_bill_dialog: {
        title: "請求書を追加する",
        message:
          "この注文に対して1つ以上の新しい請求書を追加できます。顧客はこれらの請求書を見て、作業の進捗状況に応じてそれぞれを支払います。",
        amount_input: "請求額",
        action: "請求書を追加",
      },
      edit_bill_dialog: {
        title: "請求書の編集",
        message: "保留中の請求書を編集できます。",
        action: "請求書の編集",
      },
      bill_cash_payment_dialog: {
        title: "現金支払いを登録する",
        message:
          "購入者がこの請求書の金額を現金またはオンライン支払い以外の方法で支払った場合は、このセクションでオプションを選択して、支払いを登録および確認します。このセクションでは、ストアの現金支払いゲートウェイのみを表示できます。そのようなオプションが表示されない場合は、ストアで選択した通貨で現金支払いゲートウェイをアクティブ化する必要があります。",
        action: "請求書の支払いを確認する",
      },

      table: {
        title: "タイトル",
        amount: "額",
        description: "説明",
        info: "情報",
      },
      user_payment: "顧客の支払い",
      cod: "代金引換",
      gateway_wage: "手数料",
      gift_card: "ギフトカード",
      discount_code: {
        title: "ディスカウントコード",
        code: "コード",
        percent: "パーセント",
        limit: "制限",
      },
      club: {
        title: "カスタマークラブ",
        percent: "パーセント",
        limit: "制限",
      },

      coupon: {
        title: "クーポン",
        percent: "パーセント",
        limit: "制限",
        charge: "充電",
      },
      delivery: {
        title: "輸送費",
        not_paid: "未払い",
      },
      samin: {
        title: "サービス料",
        description:
          "この金額は、Selldoneウォレットアカウントから差し引かれています。",
        tooltip: "お支払い方法で計算",
        percent: "パーセント",
      },
      affiliate: {
        title: "アフィリエイトコミッション",
        affiliate_message:
          "このコミッションはアフィリエイトに支払う必要があります。このプロセスは自分で行います。",
      },
      total_price: "アイテムの合計価格",
      total_items_discount: "アイテム割引",
      total_price_after_offers: "オファーを適用した後の合計",

      total_order_price_before_tax: "税引き前の合計価格",

      user_payment_amount: "購入者の支払い額",
      samin_wage: "Selldone — 販売手数料",
      pay_cod_dialog: {
        title: "注文金を受け取りましたか？",
        message:
          "顧客による全額支払いを確認した後、代金引換支払い方法でこのオプションを確認します。",
        confirm_action: "顧客の支払いを確認する",
      },
      pay_dir_dialog: {
        title: "注文金を受け取りましたか？",
        message:
          "アップロードされた領収書を銀行で承認した後、このオプションを確認してください。必ず銀行に確認してください。",
        confirm_action: "顧客の支払いを確認する",
      },

      notifications: {
        pay_confirm_message:
          "支払いが確認されました。<br>ポート：{gateway_name}<br>日付：{payment_at}",
        pay_fail_title: "未払い",
        pay_fail_message: "支払いは承認できません！",
      },
    },
    /** {@see BOrderDashboardCart} **/
    basket_list: {
      checklist: [
        "在庫を確認してください。",
        "アイテムが利用できない場合、そのアイテムに支払われた金額を顧客に返金する必要があります。",
      ],
      message:
        "いずれかの商品が入手できない、または販売できない場合は、その横にあるチェックボックスをオフにして、[<b>注文の確認</b>]ボタンをクリックします。",
      action: "注文確認",
      list_of_items: "ショッピングカートリスト",
      apply_change_action: "変更を適用する",
      cant_apply_change: "変更できません",
      lottery_prize_inform:
        "あなたの顧客はこの製品の1倍を獲得します。この注文でギフトを送ってください。",

      need_to_refund: {
        title: "顧客への返金が必要",
        message:
          "返金する必要のある合計金額を手動で計算します。これは、入手できない商品と返金された合計金額に基づいて計算されます。",
        calculated_approximately:
          "金額は概算ですので、正確な金額はご自身で計算してください。",
      },
      need_payback: {
        title: "顧客への返金が必要",
        message:
          "カート内の商品に基づいて、顧客に返金された合計金額が請求金額よりも高いことがわかりました。超過額を回収するには、顧客に請求する必要がある可能性があります。",
      },
      need_no_refund: {
        title: "返金の必要はありません",
      },
      total_refund: {
        title: "払い戻し総額",
        message:
          "これは、決済ゲートウェイによって自動的に行われた払い戻しの合計金額です。この機能をサポートしているのは一部の決済サービスのみであるため、手動で払い戻しを行う必要があります。",
      },
    },
    /** {@see BOrderDashboardPreparing} **/
    preparing: {
      title: "準備",
      packing_weight: "パッキング重量",
      delivery_type: "配送方法",
      packing_size: "梱包寸法",
      distance_warning: "許容距離制限を超えています。",
      weight_warning: "許容重量を超えています。",
      volume_warning: "許可されたパッケージサイズを超えています。",
      items_weight_calculation:
        "すべてのアイテムの合計重量は {weight} {unit} です",
      not_available_message:
        "配送先住所の入力を無効にしており、ユーザーが購入後に住所を入力していない場合は利用できません。",

      message:
        "注文を発送する準備ができたら、次の[<b>注文準備</b>完了]ボタンをクリックします。",
      action: "発送準備完了",
      checklist: [
        "パッケージングの標準ルールに従います。",
        "アイテムのリストを印刷して、パッケージに入れます。",
        "ラベルを印刷してボックスに貼り付けます。",
      ],
    },

    basket_items: "注文アイテムリスト",

    delivered_dialog: {
      title: "この注文は顧客によって受け取られましたか？",
      message: "顧客が注文を受け取ったことがわかったら、このオプションを確認します",
      confirm_action: "お客様が荷物を受け取ったことを確認します",
    },
    return_delivery_dialog: {
      title: "注文は配達中に問題がありましたか、それとも返品されましたか？",
      message:
        "何らかの理由で発送後に注文が返品され、発送を再送する必要がある場合は、発送を返品するオプションを確認します。",
      confirm_action: "返送の確認",
    },

    notifications: {
      update_status_success: "注文状況が更新されました。",
      reject_update_success: "注文キャンセルステータスが更新されました。",
      dismiss_reject_success: "注文はキャンセルされました。",
      pay_cod_success: "代金引換の支払いが確認されました。",
      pay_dir_success:
        "支払いは、カード間支払いまたは送金によって確認されました。",
      set_tracking_success: "注文トラックIDが正常に保存されました。",
      new_bill_success: "新しい請求書が正常に追加されました。",
      edit_bill_success: "請求書は正常に更新されました。",
      update_bill_status_success: "請求ステータスが正常に更新されました。",
      set_payment_in_cash_success: "請求書の支払いは手動で確認されました。",
    },

    delete_bill_dialog: {
      title: "請求書を削除する",
      message: "この請求書を削除してもよろしいですか？",
      action: "はい、今すぐ削除",
    },
  },

  /** {@see AdminShopGatewayManagementPage} **/
  shop_gateway: {
    title: "ゲートウェイ",
    menu: {
      dashboard: "ダッシュボード",
      edit: "編集",
      transactions: "トランザクション",
      back: "ゲートウェイ",
    },

    /** {@see BPageGatewayDashboard} **/
    dashboard: {
      title: "ゲートウェイ管理",

      /** {@see BGatewayPaymentsChart} **/
      gateway_data_widget: {
        title: "支払いレポート",
        subtitle:
          "項目 支払い 項目 取引 項目 項目 項目 項目 項目 項目.",
        chart: {
          times: "カウント",
          buys: "購入数",
          pays: "支払いの成功",
          amount_pay: "有料",
          amount_wage: "手数料",
        },
      },
    },

    /** {@see BPageGatewayEdit} **/
    edit: {
      title: "ゲートウェイの編集",
      menu: {
        delete: "ゲートウェイを削除する",
      },
      edit_action: "ゲートウェイの編集",
    },

    /** {@see BPageGatewayTransactions} **/
    transactions: {
      title: "トランザクション",
      table: {
        amount: "額",
        currency: "通貨",
        livemode: "タイプ",
        status: "状態",
        target_id: "注文",
        risk: "危険",
        card: "カード",
        issued_at: "発行日",
        payment_at: "支払期日",
      },
      live_mode: "住む",
      test_mode: "サンドボックス",
    },
  },

  /** {@see BGatewayOverview} **/
  b_gateway_overview: {
    title: "情報",
    subtitle: "項目 項目 支払い ゲートウェイ 項目 項目 ステータス.",
    status: "状態",
    cod_transportation: "項目 配送",
    cod_transportations_error:
      "項目 項目 項目 項目 支払い 項目 項目 項目 項目 配送 方法!",
    payment_type: "支払い タイプ",
    cod: "項目 項目 項目",
    online: "項目 支払い",
    wage_percent: "項目 項目",
    min_wage: "項目 項目",
    max_wage: "項目 項目",
    min_amount: "項目 取引",
    max_amount: "項目 取引",
    timeout: "支払い 項目",
    timeout_unit: "項目",
    link: "ゲートウェイ リンク",
    your_gateway_status: "項目 ゲートウェイ ステータス",
    oauth2_button: "自動 Connect 項目 {gateway}",
    fee_payment_message:
      "Selldone — ここでこのセクションの情報と設定を管理できます。",

    auto_config: "自動 項目",

    keys: {
      title: "項目 項目",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    extra_config: {
      title: "支払い 項目 項目",
      subtitle: "項目 項目 情報 項目 項目 支払い ゲートウェイ.",
    },

    recommended_actions: {
      title: "項目 項目",
      subtitle:
        "項目 項目 項目 項目, 項目 項目 項目 項目 項目 支払い 項目 項目 顧客.",
      action_enable: "項目 項目 項目 項目",
      make_live_enable: "項目 項目 項目 項目",
    },
  },

  /** {@see BGatewayAdd} **/
  edit_gateway: {
    public_keys: "公開鍵",
    private_keys: "秘密鍵（機密）",
    link: "Webサイト",
    status_title: "決済サービスのステータス",
    status_message:
      "支払い方法をアクティブまたは非アクティブとして設定します。アクティブとして設定された方法のみが顧客に表示されます。",
    status_true_description: "お客様はこの支払い方法で支払うことができます。",

    manual_title: "手動/自動決済",
    manual_message:
      "支払いを作成するときに、対象となる支払い方法を保留にして、後で取り出せるように資金を確保することができます。たとえば、ホテルではゲストが到着する前に全額支払いを承認し、ゲストがチェックアウトするときにお金を取り出すことがよくあります。",

    gateway_status: "状態",
    wallet: "ブロックチェーンウォレット",
    developer_title: "開発者モード",
    developer_message:
      "ゲートウェイがデバッグモードをサポートしている場合は、偽のトランザクションを処理できます。",
    live_mode_message: "すべての取引はライブモードになります。",

    notifications: {
      edit_success: "ゲートウェイ{gateway_name}が編集されました。",
      success_delete: "支払い方法が削除されました!",
    },
    debug: {
      title: "開発とテスト",
      subtitle: "デバッグ モードを有効にして、支払いゲートウェイをテストできます。",
    },

    limit: {
      title: "注文制限",
      subtitle: "この支払いゲートウェイの最小注文金額を設定します。",
    },
    limit_input: {
      title: "最低注文金額",
      msg: "ゼロは制限がないことを意味します。",
    },
    currency_input: {
      message: "この支払いゲートウェイがサポートする通貨。",
    },
    gateway_code: "ゲートウェイコード",

    hold_only_for: "支払い保留は以下でのみ利用可能です",
    manual_input: {
      false_description:
        "支払いステータスは、支払いプロバイダーのシステムで保留中から確認済みに自動的に変更されます。",
      false_title: "自動支払い確認",
      true_title: "支払い保留と手動確認",
      true_description:
        "支払いを保留にすると、支払いプロバイダー システムで注文の支払いステータスを保留から確認済みに変更するために支払いを検証する必要が生じます。",
    },
    delete_verify_input: {
      true_title: "この支払い方法を削除したいです。",
      true_description:
        "この支払い方法はストアから削除され、顧客は利用できなくなります。",
    },
    delete_alert: {
      title: "支払い方法の削除",
      message: "この支払い方法をショップから削除してもよろしいですか?",
      action: "支払い方法の削除",
    },
  },

  /** {@see BPageGiftcard} **/
  gift_card: {
    title: "ギフトカード",
    menu: {
      edit: "編集",
      new_card: "カードを作成する",
      list: "カード",
      orders: "注文",
      dashboard: "ダッシュボード",
      back: "ギフトカード",
    },

    /** {@see AdminGiftCardDashboardPage} **/
    dashboard: {
      title: "ギフトカード管理ダッシュボード",

      /** {@see BGiftcardStatisticsPayment} **/
      amount_widget: {
        title: "カード決済",
        title_small: "30日",
        chart_amount_pay: {
          y: "和",
          label: "支払い",
        },
        chart_buys: {
          y: "購入する",
          label: "購入する",
        },
        total_buy: "総購入額",
        total_pay_30days: "合計30日",
        total_pay_today: "今日のお支払い",
      },

      /** {@see BGiftcardStatisticsCount} **/
      count_widget: {
        title: "発行されたカードの数",
        title_small: "30日",
        total_cards: "カードの総数",
        used_cards_30days: "30日間の使用",
        used_today: "今日の使用法",
        chart: {
          new_cards: "新しいカード",
          used_cards: "中古カード",
          new_card_name: "新しいカード",
          used_card_name: "使用済み",
        },
      },

      /** {@see BGiftcardExport} **/
      export: {
        title: "出力ファイルを取得",
        cards_list: "カードのリストを取得する",
        get_report: "レポートを取得",
      },
    }, // End of dashboard

    /** {@see AdminGiftCardManagementPage} **/
    cards: {
      title: "発行されたカードのリスト",
      subtitle:
        "項目 項目 項目 項目 項目 項目. 項目 項目 項目 項目 項目 ユーザー 項目 項目 項目 項目 項目 項目.",

      loading_message: "情報を入手しています...お待ちください",
      issue_to_user: "ユーザーへの発行",
      table: {
        card_number: "カード番号",
        balance: "バランス",
        paid: "有料",
        edit: "編集",
        delete: "消去",
        expire: "有効期限",
        user: "ユーザー",
      },
      delete_alert: {
        title: "カードを削除します",
        message: "このカードを削除してもよろしいですか？",
        action: "消去",
      },
      notifications: {
        delete_success: "ギフトカードが削除されました。",
        edit_success: "変更が加えられました。",
        issue_success: "ユーザーに正常に発行されたギフトカード。",
      },
      issue_dialog: {
        title: "ギフトカードを発行する",
        action: "私が確認する。今すぐカードを発行してください",
      },
    }, // End of cards

    /** {@see BGiftcardAdd} **/
    gift_card_edit: {
      title: "ギフトカードを作成する",
      validity: "有効",
      validity_unit: "月",
      currency: "通貨",
      initial_balance: "カードの初期残高",
      count: "カウント",
      count_unit: "アイテム",
      enable_input_message: "作成されたカードのステータス",
      notifications: {
        create_success_title: "保存する",
        create_success: "{count}新しいカードが作成されました",
      },
    },

    /** {@see AdminGiftCardEditPage} **/
    gift_card_edit_page: {
      title: "ギフトカードを編集する",
    },
  },

  /** {@see BPageDiscountCode} **/
  shop_discount: {
    title: "ディスカウントコード",
    up_to: "まで",
    menu: {
      dashboard: "ダッシュボード",
      orders: "注文",
      back: "割引コード",
    },

    /** {@see BPageDiscountCodeDashboard} **/
    dashboard: {
      title: "割引コード管理ダッシュボード",
      chart_amount_buy: {
        y: "購入金額{currency}",
        label: "買う",
      },
      chart_amount_discount: {
        y: "割引{currency}",
        label: "割引",
      },
      chart_used: {
        y: "使用量",
        label: "タイムズ",
      },
    },
  },

  /** {@see BPageCoupon} **/
  shop_coupon: {
    title: "クーポン",
    up_to: "まで",
    menu: {
      dashboard: "ダッシュボード",
      back: "クーポン",
      orders: "注文",
    },

    /** {@see BPageCouponDashboard} **/
    dashboard: {
      title: "クーポン管理ダッシュボード",
      chart_amount_buy: {
        y: "購入金額{currency}",
        label: "買う",
      },
      chart_amount_discount: {
        y: "クーポン{currency}",
        label: "クーポン",
      },
      chart_used: {
        y: "使用量",
        label: "タイムズ",
      },
    },
  },

  /** {@see BPageOffer} **/
  shop_offer: {
    title: "オファー",
    up_to: "まで",
    menu: {
      dashboard: "ダッシュボード",
      orders: "注文",
      back: "オファー",
    },

    /** {@see BPageOfferDashboard} **/
    dashboard: {
      title: "オファー管理ダッシュボード",
      chart_amount_buy: {
        y: "購入金額{currency}",
        label: "買う",
      },
      chart_amount_discount: {
        y: "{currency}を提供する",
        label: "オファー",
      },
      chart_used: {
        y: "使用量",
        label: "タイムズ",
      },
    },
  },

  /**
   * @see BOrderConnectsList
   */
  order_connect_list: {
    subtitle:
      "項目 項目 項目 項目 注文 項目 項目 項目 項目 項目 項目 項目 項目.",
  },
  /** {@see BAccountCard} **/
  account_card: {
    pay_create_receipt: "アクティベーション料金を支払う",
    balance: "バランス",
    locked: "ロック済み",
    transfer: "移行",
    charge: "預り金",
  },

  /** {@see TimelineStatus} **/
  timeline: {
    note: "{message}",
    info: "{message}",
    error: "{message}",

    buy: "チェックアウト",
    payment: "支払い",

    confirm:
      "注文の確認、 <b>{success}</b>の確認、 <b>{fail}</b>の拒否。",
    prepare: "注文の準備。",
    send: "注文は<b>{delivery}</b>で発送されます。",
    delivered: "注文は顧客に配達されました。",
    "fill-inputs": "購入者が記入した入力情報フォーム。",
    "return-add": "商品の返品リクエスト{product}を送信します。",
    "return-accept": "戻り要求{return_code}が確認されました。",
    "return-reject": "要求{return_code}は拒否されました。",

    "reject-order": "注文を拒否します。コード：{reject_code}。",
    "reject-order-clear": "注文拒否をキャンセルします。コード：{reject_code}。",

    "delivery-returned":
      "注文は顧客に受け取られず、返品されました。再度発送する必要があります。",
    "delivery-canceled": "配達がキャンセルされました。再度発送する必要があります。",
    "edit-receiver-info": "注文の配送先住所は購入者が編集しました。",
    "edit-billing-info": "購入者が編集した請求先住所。",
    "payment-cod-confirm": "代金引換の支払いが確認されました。",
    "payment-cash-confirm":
      "請求書の現金での{amount}{currency}の支払いが確認されました。",
    "payment-dir-confirm": "直接支払いの領収書が確認されました。",

    vendor: "仕入先の注文状態が<b>{from}</b>から<b>{to}</b>に変更されました。",

    "connect-sync": "Connect OS によって同期された注文。",
    "connect-shipped": "Connect の注文は {shipping} で発送されました。",
    "connect-returned": "Connect の注文は {shipping} から返品されました。",
    "connect-failed": "パートナーが注文のフルフィルメントに失敗しました。 {reason}",
    "connect-canceled": "注文はパートナーによってキャンセルされました。 {reason}",
    "connect-action-cancel": "注文のキャンセルをリクエストします。 {reason}",
    "connect-put-hold": "注文は保留されました。 {reason}",
    "connect-remove-hold": "注文は保留から削除されました。 {reason}",
    "connect-confirmed": "注文が確認されました。",

    "vendor-payout": "💸ベンダーへの支払い。",
    "vendor-wallet-transaction": "販売者 ウォレット 取引.",

    "vendor-sms":
      "🔔 注文通知 SMS が<b>{vendor}</b> ╏ {phone} に送信されました。",

    // ━━━━━━━━━━━━━━━━━━━━━━ Email Packs ━━━━━━━━━━━━━━━━━━━━━━

    "email-buy": "購入確認メールを顧客に送信します。",
    "email-payment": "支払い確認メールを顧客に送信します。",
    "email-update": "項目 注文 更新 項目 項目 顧客.",

    "email-vendor":
      "🔔 注文通知メールが<b>{vendor}</b>に送信されました ╏ {email}。",

    // ━━━━━━━━━━━━━━━━━━━━━━ SMS Packs ━━━━━━━━━━━━━━━━━━━━━━
    "sms-payment":
      "{phone} 経由で顧客に支払い確認 SMS を送信します。",
    "sms-ready-to-ship":
      "項目 項目 SMS 項目 項目 顧客 項目 項目 項目 注文 項目 項目 項目 項目 項目 項目 {phone}.",
    "sms-ready-to-pickup":
      "項目 項目 SMS 項目 項目 顧客 項目 項目 項目 注文 項目 項目 項目 項目 項目 {phone}.",
    "sms-order-confirmation":
      "項目 項目 注文 項目 SMS 項目 項目 顧客 項目 {phone}.",

    "count-adjustment":
      "項目 数量 項目 項目 商品 \"{product}\" 項目 項目 項目 項目 {from} 項目 {to}.",
  },

  /** {@see FinanceInlineChart} **/
  inline_chart: {
    today: "今日",
    last_days: "{days}日前",
  },
  /** {@see BProductsWindow} **/
  products_select: {
    move_category: "カテゴリ<b>{category}</b>を別のカテゴリに移動します",
    move_product: "商品<b>{product}</b>をカテゴリに移動",
    load_more_products:
      "このカテゴリには他にも商品があります。クリックすると、さらに多くのアイテムが読み込まれます。",
    product_menu: {
      dashboard: "製品ダッシュボード",
      inventory: "在庫とバリアント",
    },
    notifications: {
      copy_success: "製品のコピー。",
      change_category_success: "編集された製品カテゴリ。",
    },

    filter_box: {
      no_root_filter_message: "ルートに製品はありますが、フィルターがありません。",
      has_root_filter_message: "ルート カテゴリにフィルターを設定します。",
      set_filter_message: "フィルターを設定できます。",
      edit_action: "ルートフィルターの編集",
      clear_action: "ルートフィルターをクリア",
    },
    ai: {
      title: "AI製品サポート",
    },
    menu: {
      select_all_products: "すべての製品を選択",
      unselect: "選択解除",
      sort_categories: "カテゴリの整理/並べ替え",
      subscription_vendor_not_support_message:
        "サブスクリプション製品にベンダーを割り当てることができません。サブスクリプション製品は常にベンダーを所有者として持つ必要があります。",
      vendor_owner_not_assignable_message:
        "ベンダーが所有者である製品にベンダーを割り当てることはできません。",
      category_assign_profile: "カテゴリ内の製品にプロファイルを割り当てる",
      category_assign_profile_subtitle: "税金、配送、ガイド、保証、...",
      bulk_discount: "まとめ買い割引",
      bulk_discount_subtitle: "すべての製品に割引を適用します。",
    },

    engine: {
      title: "追加製品エンジン",
      subtitle:
        "選択したカテゴリとタグからさらに多くの製品が読み込まれます。",
      load_in_tips: "{category} 内のカテゴリから製品を読み込みます。",
      action: "{category} エンジンを編集",
    },
  },
  /** {@see BProductsPanel} **/
  product_panel: {
    excel_import: {
      title: "Excel / CSV ファイルをここにドロップします。",
      select_file: "ファイルを選択",
      max_file: "最大ファイルサイズ: 20MB",
      download_sample: "サンプルをダウンロード",
    },
    ai: {
      title: "AI製品サポート",
    },
  },

  /** {@see BOrderDashboardVendor} **/
  order_vendor: {
    has_panel: "パネルあり",
    no_panel: "パネルなし",
    manual_action: {
      title: "手動アクション",
      message: "ベンダーの注文ステータスを手動で更新できます。",
      guides: [
        "パネルへのアクセス権を持つベンダーは、専用のダッシュボードでフルフィルメント (サブオーダー) を更新できます。",
        "ベンダーにパネルへのアクセス権がない場合は、バスケットのステータスを変更すると、ベンダーの注文ステータスが自動的に変更されます。",
        "ベンダーの注文を手動で更新できます。",
      ],
    },
    payouts: {
      title: "支払い",
      message: "ベンダーの支払いと取引を管理します。",

      charge_tooltip: "ベンダーウォレットに請求します。",
      withdraw_tooltip: "ベンダーウォレットから引き出します。",
      payout_tooltip: "ベンダーへの支払い。",
    },
    order_canceled: "注文 項目",
    order_rejected: "注文 項目 項目 販売者",
  },

  /**
   * @see VPageVendorDashboard
   */
  vendor_dashboard: {
    info: {
      subtitle: "マーケットプレイス情報。",
    },
    performance: {
      subtitle: "私の販売実績。",
    },
    products: {
      title: "製品",
      subtitle:
        "ここでは、マーケットプレイスに掲載されている製品の数を確認できます。複数のベンダーによる製品は含まれません。",
    },
    wallets: {
      title: "私の財布",
      subtitle:
        "ウォレットを手動で追加する必要はありません。ベンダーウォレットは自動的に作成されます。",
    },

    open_marketplace_page: "マーケットプレイスページを開く",
    open_my_store_page: "ストアページを開く",
    open_my_listing_page: "私のリストページを開く",
    add_products_permission: "製品権限の追加",
    add_categories_permission: "カテゴリ権限の追加",
  },

  /**
   * @see VPageVendorInventory
   */
  vendor_inventory: {
    title: "製品リスト",
    subtitle:
      "これはマーケットプレイスにあるあなたの製品のリストです。在庫にあるあなたの割り当てられた製品の価格と数量を更新してください。ベンダーの場合、製品リストにはあなたが所有する単一ベンダー製品のみが表示されます。他の割り当てられた製品もここで変更できます。",
  },

  /**
   * @see VPageVendorAccess
   */
  vendor_member: {
    title: "チームメンバー",
    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
    add_action: "新しいメンバーを追加",
    pending: {
      title: "保留中の招待",
      message: "項目 項目 項目 項目 項目 項目 項目 項目 項目.",
    },
  },

  /**
   * @see VMemberAddDialog
   */
  vendor_member_add: {
    title_edit: "チームメンバーを編集",
    title_new: "追加 項目 項目 項目",
    member: {
      title: "項目 項目 詳細",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    access: {
      view_data: "データを表示",
      apply_changes: "変更を保存",
    },
    inputs: {
      email: {
        label: "Email 住所",
        placeholder: "項目 項目 項目 項目 住所...",
      },
    },
    notifications: {
      add_success: {
        title: "項目 項目",
        message: "項目 項目 項目 項目 項目 項目 項目.",
      },
      update_success: {
        title: "項目 項目",
        message: "項目 項目 項目 情報 項目 項目 項目 項目.",
      },
    },
    actions: {
      add: "追加 項目",
    },
  },

  /**
   * @see VPageVendorPayments
   */
  vendor_payments: {
    list: {
      title: "支払い履歴",
      subtitle:
        "支払い履歴はここで確認できます。これらの支払いは、銀行振込によって手動で処理されるか、支払い機能を提供する支払いサービスを使用して自動的に処理される可能性があります。",
    },
    connect: {
      title: "銀行を接続する",
      subtitle:
        "以下の支払いゲートウェイでは分割支払い機能をご利用いただけます。購入ごとに支払いをシームレスに受け取るには、これらのオプションを使用して銀行口座を接続してください。",
    },
    verify_dialog: {
      title: "支払いを確認する",
      option: {
        title: "ベンダーのアクション",
        subtitle:
          "この送金を承認するか拒否するかを選択できます。このアクションは履歴記録としてのみ機能します。資金を受け取ったかどうかを確認するだけで、受け取っていない場合は何もする必要はありません。",
      },
      inputs: {
        verify: {
          label: "このお支払いは確認されましたか?",
          false_description:
            "いいえ、この支払いはまだ銀行口座に入金されていません。",
          true_description: "はい、この支払いを受け取り、確認しました。",
        },
      },
    },
  },

  /**
   * @see BVendorOrderRefund
   */
  vendor_order_refund: {
    title: "注文を返金",
    subtitle:
      "<b>ここでこのセクションの情報と設定を管理できます。</b><b></b>",
    inputs: {
      note: {
        message: "項目 項目 項目 項目 販売者.",
        placeholder: "項目 項目 項目 項目 メモ 項目...",
      },
      amount: {
        error_message: "項目 項目 金額 項目 項目 項目.",
      },
    },
  },

  /** {@see BOrderVendorPaymentManagement} **/
  order_vendor_payment: {
    message:
      "これは、マーケットプレイス上の仮想ウォレットでの取引の概要です。",
    vendor_wallets: "ベンダーウォレット",
    my_wallets: "私の財布",
    refund_order_action: "返金 注文",
    automatic_payout_list: {
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    reversal_transfer_action: "戻し送金",
  },

  /** {@see BPageOrderPhysicalTrack} **/
  physical_order_track: {
    title: "リスクレポートと評価",
  },
  /** {@see BPageOrderVirtualTrack} **/
  virtual_order_track: {
    title: "リスクレポートと評価",
  },
  /** {@see BPageOrderVirtualTimeline} **/
  virtual_order_timeline: {
    title: "タイムライン",
  },
  /** {@see BPageOrderPhysicalTimeline} **/
  physical_order_timeline: {
    title: "タイムライン",
  },
  /** {@see BPageOrderPhysicalInput} **/
  physical_order_inputs: {},
  /** {@see BOrderTimeline} **/
  order_timeline: {
    message:
      "このセクションでは、注文、履行、支払い、およびそれぞれのステータスに関連するイベントのタイムラインを表示できます。さらに、顧客とベンダーの両方に発送された注文を確認することもできます。",
    add_note_subtitle: "メッセージを書き、同僚に言及してください。",

    message_input: "ここにメッセージを書いてください...",
    pin_action: "上に固定",
    unpin_action: "固定を解除する",
    copy_html: "HTMLをコピー",
    notifications: {
      add_note_success: "メモを追加しました。",
      edit_note_success: "メモを編集しました。",
      delete_note_success: "メモが削除されました。",
    },
    delete_dialog: {
      title: "メモを削除",
      message: "このメモを削除しますか？",
      action: "メモを削除",
    },
    resend_dialog: {
      title: "メールを再送",
      message: "このメールを顧客に再送信してもよろしいですか？",
      action: "はい、再送します",
      success: "顧客に再送信された電子メール。",
    },
  },

  /** {@see BPageShuttleWalletAccounts} **/
  accounts: {
    title: "私の財布",
    message:
      "Selldoneで使用している通貨で少なくとも1つのアカウントを作成する必要があります。サービス料金を支払うには、このアカウントにチャージする必要があります。",
    add_new: "新しいアカウントを作成する",
    new_account: "新しいアカウントを追加する",
    new_account_dialog: {
      title: "新しいアカウント",
      account_name_input: "アカウント名",
      currency_input: "通貨単位",
      currency_input_message:
        "作成されたアカウントは、この通貨の値のみを保持します。",
      new_account_wage: "新規アカウント作成費用：最初のアカウントは無料",
      create_account_action: "アカウントを作成する",
    },
  },

  /** {@see UserGifts} **/
  user_gifts: {
    menu: {
      send_gift: "ギフトを送る",
      sent: "送信",
      received: "受け取った",
    },

    /** {@see BPageShuttleWalletGiftsSend} **/
    send_gifts: {
      title: "送信されたギフト",
      sub_title:
        "あなたはあなたの友人や顧客に贈り物を送ることができます。受取人はあなたの贈り物を受け入れるか拒否することができます。金額はアカウントにロックされ、受信者が承諾すると引き落とされます。それ以外の場合、この金額はアカウントに送金されます。",
      table: {
        user: "ユーザー",
        amount: "額",
        currency: "通貨",
        account_name: "から",
        status: "状態",
        message: "メッセージ",
        created_at: "作成日",
      },
    },

    /** {@see BPageShuttleWalletGiftsReceived} **/
    received_gifts: {
      title: "受け取ったギフト",
      sub_title:
        "Selldoneまたは他の人から受け取った贈り物",

      table: {
        amount: "額",
        currency: "通貨",
        account_from: "から",
        status: "状態",
        message: "メッセージ",
        created_at: "作成日",
        receive: "受け取る",
      },
    },
  },

  /** {@see BAccountGiftRedeem} **/
  get_gift_dialog: {
    title: "ギフトを受け取る",
    more: "もっと ..",
    amount: "額",
    message: "メッセージ",
    account_to_input: "宛先アカウント",
    account_to_input_message: "ギフトの金額はこのアカウントに預けられます。",
    get_action: "贈り物を受け取る",
    notifications: {
      received_success_title: "おめでとう",
      received_success:
        "ギフトの金額{amount}{currency}がアカウントに預けられました。",
    },
  },
  /** {@see BAccountGiftSend} **/
  send_gift_dialog: {
    title: "ギフトを送る",
    account_from_input: "アカウントを選択してください",
    account_from_input_message: "ギフトの金額はこのアカウントから引き落とされます。",
    receiver_input: "レシーバー",
    receiver_input_message: "メールアドレスや電話番号を入力できます。",
    message_input: "メッセージ",
    message_input_message: "受信者にメッセージを残すことができます。",
    amount_input: "額",
    currency_input: "通貨単位",
    currency_input_message: "価格はこの通貨で計算されます。",
    send_action: "ギフトを送る",
    notifications: {
      send_success: "{amount}{currency}のギフトが{receiver}に送られました。",
    },
  },

  /** {@see BAccountInput} **/
  account_list: {
    account_input: "口座番号",
    account_input_message:
      "この通貨のギフトの金額は、このアカウントに預け入れられます。",
    free_balance: "フリーバランス",
    account_name: "アカウント名",
  },
  /** {@see OPageMonetizeAccounts} **/
  user_monetize_accounts: {
    title: "預金口座",
    sub_title:
      "ギフトの金額は、これらのアカウントに自動的にデポジットされます。",
    message:
      "Selldoneは、ソーシャルメディア活動、Selldone開発への参加、友人の紹介などのために資金を預け入れます。通貨ごとに預金口座を選択すると、ギフトの金額がドメイン内のその口座に自動的に預金されます。これらの金額はSelldoneにクレジットされます。引き出しはビジネスパートナーのみが可能です。",
    add_account_action: "アカウントを追加する",
    add_dialog: {
      title: "アカウントを接続してギフトを受け取る",
      account_input: "口座番号",
      account_input_message:
        "この通貨のギフトの金額は、このアカウントに預け入れられます。",
      set_as_default_action: "デフォルトのアカウントとして選択",
    },
    table: {
      currency: "通貨",
      account_number: "口座番号",
      account_name: "名前",
      payment: "入金額",
      reset_at: "にリセット",
      delete: "消去",
    },
    notifications: {
      set_success: "アカウントが正常に追加されました。",
      delete_success:
        "ギフトを受け取るためのデフォルトアカウントのリストからアカウントが正常に削除されました。",
    },
    delete_alert: {
      title: "アカウントを削除する",
      message:
        "このアカウントをギフトアカウントリストから削除しますか？",
      action: "消去",
    },
  },
  /** {@see UserMonetize} **/
  user_monetize: {
    title: "お金を稼ぐ",
    menu: {
      plans: "予定",
      accounts: "アカウント",
      participant: "参加者",
    },
  },
  /** {@see OPageMonetizeReferral} **/
  user_monetize_plans: {
    title: "コラボレーションと収益化プロジェクト",
    sub_title:
      "紹介ギフトのアカウントクレジットを受け取ります。これらの金額はアカウントに請求され、Selldoneビジネスパートナー（すべてではない）にのみ引き出すことができます。あなたはSelldoneサービス料金にお金を使うことができます。",

    discount: "割引",
    your_income: "あなたの収入",
    level_2: "レベル2から",
    level_3: "レベル3から",
    link_message: "メンバーシップ：{registered}、承認済み：{accepted}",
    link_tip:
      "共有するすべてのアドレスの末尾に？ref={link_code}というフレーズを追加できます。",
    table: {
      currency: "通貨",
      amount: "バランス",
      total: "合計金額",
      payment_date: "最終支払日",
      withdraw: "撤退",
    },

    notifications: {
      get_credit_success:
        "要求された金額がアカウントにデポジットされました。",
    },
  },
  /** {@see BPageShuttleIdentity} **/
  basic_information: {
    title: "私のアイデンティティとプロフィール",
    email: "電子メールアドレス",
    tel: "携帯電話番号",
    address: "住所",
    payment: "有効なトランザクション",
    personal_information: "アイデンティティ情報",
    main_profile: "メインプロファイル",
    main_profile_subtitle:
      "この情報は誰でも公開されています。",
    kyc_waiting_info:
      "入力した情報の正確性をチェックしています。このプロセスはKYC規則に従って必須であり、金融取引のリスクを軽減します。このサービスの現在および将来のメリットを活用できます。",

    personal_info_dialog: {
      title: "アイデンティティ情報",
      name_input: "ファーストネーム",
      family_name_input: "苗字",
      number_input: "パスポート番号（または国のコード）",
      birthday_input: "お誕生日",
      birthday_input_placeholder: "誕生日を入力してください",
      address_input: "住所",
      postcode_input: "郵便番号",
      tel_input: "連絡先番号",
      passport_image_input: "パスポート画像を選択",
      passport_image_input_message:
        "パスポート画像のスキャンをアップロードします。",
      personal_image_input: "自分の画像を選択してください",
      personal_image_input_message:
        "ナショナルカードのスキャン画像を画像にアップロードします。",
    },
    profile_dialog: {
      title: "メインプロファイル",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
      full_name_input: "フルネーム",
      tel_input: "連絡先番号",
      email_input: "Eメール",
      website_input: "Webサイト",
      address_input: "住所",
      about_input: "私について",
      about_long_input: "私についての長いテキスト",
      image_input: "プロフィール写真を選択",
      image_input_message:
        "画像をアップロードします。この画像はプロフィール写真として使用されます。",
      notifications: {
        update_profile_success: "プロファイルが更新されました。",
        update_personal_info_success:
          "あなたの情報は正常に登録されました",
      },
    },
    charge_account_approve_message:
      "アカウントに請求して、銀行取引を承認します。",
    payment_approval: "支払い承認",
    residential_address_checking:
      "チェックキューにあるあなたの住居の住所文書。",
    add_residential_address:
      "あなたの場所と居住地の住所書類の証明を追加してください。",
  },
  /** {@see BUserPhoneVerify} **/
  phone_verify: {
    title: "携帯電話番号",
    step1_title:
      "携帯電話の番号を入力してください。",
    phone_number_input: "携帯電話番号",
    next: "次のステップ",
    sms_code_input: "検証コード",
    sms_code_message: "{phone_number}に送信される6桁の確認コード。",

    notifications: {
      duplicated_number_error: "この番号はすでに承認されています。",
      send_activation_code_success_title: "検証コード",
      send_activation_code_success:
        "確認コードが{phone_number}に送信されました。",
      verify_success: "あなたの携帯電話番号は確認されました",
    },
  },
  /** {@see BPageShuttleCompanies} **/
  companies: {
    title: "私のビジネスアカウント",
    message:
      "企業、起業家、専門家チームは、Selldoneに基づいて製品やアプリケーションを開発できます。ビジネスプロファイルを作成する必要があります。",
    new_company: "新会社",
  },
  /** {@see BCompanyAdd} **/
  add_company: {
    name_input: "会社名",
    website_input: "Webサイト",
    email_input: "Eメール",
    address_input: "住所",
    tel_input: "電話",
    mobile_input: "モバイル",
    edit_action: "会社を編集する",
    create_action: "会社を作る",
    notifications: {
      add_success: "ビジネスアカウント{name}が作成されました。",
      edit_success: "ビジネスアカウントを編集しました。",
    },
  },
  /** {@see UserAccessControl} **/
  user_access_control: {
    menu: {
      personal_key: "個人的",
      shop_key: "クライアント",
      apps: "アプリ",
    },
    connected_apps_title: "接続されたアプリ",
    connected_apps_message:
      "ドメインアカウントに接続されているすべてのストアとアプリのリストが表示されます。それらのいずれかへのアクセスを削除できます。",
    clients_title: "クライアント",
    clients_message:
      "これらのキーは、サーバーがアクセストークンを作成するために使用されます。キーは機密情報であり、他のユーザーに表示されないようにサーバーにのみ配置されることに注意してください。",
    personal_keys_title: "パーソナルアクセスキー",
    personal_keys_message:
      "ここでアカウントのキーを作成できます。これらのキーはアカウントにアクセスできることに注意してください。これらのキーを作成して使用するのは、自分が何をしているかを正確に理解している場合のみです。",
  },

  /** {@see BPageShuttleSecurity} **/
  user_security_control: {
    title: "アカウントのセキュリティ",
    message: "ここでアカウントのセキュリティ設定を編集できます。",

    delete: {
      title: "アカウントを削除する",
      subtitle:
        "アカウントを削除する前に、すべてのショップを削除したことを確認してください。",
      action: "確かに、私のアカウントを削除します",
      agreement:
        "私はすべての私の情報があなたのサーバーから削除されることを受け入れます。お客様の情報は、詐欺や誤用を防ぐために、当社が決定したスケジュールに従って削除されます。",
    },

    list: {
      email: {
        title: "主に使用するメールアドレス",
        sub_title:
          "このアカウントに関連付けられているメインの電子メールを更新するオプションがあります。",
        action_title: "プライマリメールアドレスを変更する",
        action: "確認リンクを送信する",
      },
      password: {
        title: "パスワード",
        sub_title: "アカウントに強力なパスワードを選択してください。",
        action_title: "アカウントアクセスパスワード",
        not_exist: "入力されていません",
        action: "パスワードを変更する",
      },
      phone: {
        title: "携帯電話番号",
        sub_title:
          "携帯電話番号を確認してください。この番号からログインできます。",
        action_title: "アカウントのメインの電話番号",
        action: "番号を確認する",
      },

      two_step: {
        title: "2ステップのエントリ",
        sub_title:
          "携帯電話番号を確認してください。この番号からログインできます。",
        action_title: "アカウントのセキュリティを強化する",
        activated_action: "アクティベート",
        active_action: "今すぐアクティブ",
      },
    },
    two_step_auth: {
      step_1: {
        title: "Google認証システムアプリをインストールします",
      },
      step_2: {
        title: "アプリによって生成されたコードを入力します",
        message:
          "6桁のコードは、携帯電話のアルゴリズムによって生成されます。次のリンクからアプリをダウンロードできます。コードジェネレータキーを押して、パスワードを含むQRコードを作成します。",
        qr_code_info:
          "スキャンできない場合は、コードを手動でコピーしてアプリに貼り付けることができます。",
        create_new_code: "新しいコードを作成する",
        qr_code_scanning:
          "Google認証システムモバイルアプリによって作成されたQRコードをスキャンし、確認のために生成されたコードをこのページのボックスに入力します。",
        qr_code_regenerate_info:
          "注：上記のキーを押すと、新しいキーが作成され、前のキーは使用できなくなります。電話アプリに新しいキーを入力します。",
      },
      step_3: {
        title: "作成したコードを入力してください",
        message:
          "アプリケーションで作成されたアクセスコードを下のフィールドに入力します。",
        activation_key_input: "アクセスコード",
      },
      activated_alert: "2段階ログインが有効になります。",
      activated_message:
        "アカウントで2段階ログインが有効になっています。今後は、アカウントにアクセスするために30秒ごとに変更される2番目のコードを入力する必要があります。 2段階ログインを無効にするには、[ステップを押す]をダブルクリックして手順を実行します。",
      cancel_two_step_login_action: "2段階ログインをキャンセルする",
      cancel_two_step_login_info:
        "2段階認証プロセスを無効にする場合は、パスワードを入力して2段階ログインキーをクリックします。",
      password_input: "パスワード",
      cancel_2fa_action: "2段階ログインをキャンセルする",
    },

    change_password_dialog: {
      title: "パスワードを変更する",
      message: "複雑で覚えやすいパスワードを使用してください。",
      password_input: "現在のパスワード",
      new_password_input: "新しいパスワード",
      re_new_password_input: "新しいパスワードを繰り返す",
      tips: {
        length: "パスワードは8文字以上でなければなりません",
        chars: "少なくとも1つの大文字と1つの数字。",
        match: "パスワードが一致しました。",
      },
      change_password_action: "パスワードを変更する",
      notifications: {
        change_password_title: "パスワードを変更する",
        change_password: "パスワードは正常に変更されました。",
      },
    },
  },
  /** {@see AuthorizedClients} **/
  authorized_clients: {
    title: "接続されているストア/アプリのリスト",
    table: {
      name: "名前",
      app: "アプリ",
      scopes: "スコープ",
      shop: "制限付きストア",
    },
    remove_action: "アクセスを削除する",
    delete_alert: {
      title: "消去",
      message:
        "このアクセスを取り消しますか？このアプリはあなたのアカウントにアクセスできなくなることに注意してください。",
      action: "アクセスを拒否する",
    },
  },
  /** {@see Clients} **/
  clients: {
    title: "クライアントリスト",
    create_new_action: "新しいクライアントを作成する",
    table: {
      client_id: "クライアントID",
      app: "アプリ",
      name: "エイリアス",
      secret_key: "シークレットキー",
    },
    create_dialog: {
      title: "新しいクライアント",
      error_msg: "<strong>エラー！</strong>申し訳ありません、エラーが発生しました！",
      name_input: "名前",
      name_input_message: "ユーザーが認識して信頼するもの。",
      redirect_input_message: "差出人住所をサイトに戻します。",
    },
    edit_dialog: {
      title: "アクセスの編集",
    },
    delete_alert: {
      title: "消去",
      message: "このクライアントを削除しますか？",
      action: "消去",
    },
  },
  /** {@see PersonalAccessTokens} **/
  personal_access_tokens: {
    title: "パーソナルアクセストークンのリスト",
    create_action: "新しいトークンを作成する",
    table: {
      name: "名前",
      scopes: "アクセス",
      expire_at: "有効期限",
    },
    create_dialog: {
      title: "トークンの構築",
      error_message: "<strong>エラー！</strong>申し訳ありません、エラーが発生しました！",
      name_input: "エイリアス例私のトークン名",
      name_input_message: "お気に入りのトークン名。",
      scopes_list: "トークンアクセスリスト",
    },
    access_token_dialog: {
      title: "パーソナルアクセスキー",
      message:
        "これがあなたの個人アクセストークンのトークンです。このトークンが表示されるのはこれだけですので、お見逃しなく！これで、このトークンを使用してAPIをリクエストできます。",
    },
    delete_alert: {
      title: "消去",
      message: "このアクセストークンを削除しますか？",
      action: "消去",
    },
  },

  /** {@see Scopes} **/
  scopes: {
    //--------------------------- Profile ---------------------------
    profile: {
      name: "プロフィール",
      description:
        "名前、電子メールアドレス、画像、認証ステータスなどのプロファイル情報を読み取ります。",
    },
    phone: {
      name: "電話番号",
      description: "電話番号へのアクセス。",
    },
    address: {
      name: "住所",
      description: "保存したアドレスをアドレス帳から読み取ります。",
    },
    "user:profile:write": {
      name: "プロフィール 項目",
      description: "編集 項目 項目 ユーザー プロフィール 情報.",
    },

    //--------------------------- Storefront ---------------------------
    "my-gift-cards": {
      name: "ギフトカード",
      description: "マイカードへのアクセス。",
    },
    "order-history": {
      name: "注文履歴",
      description: "注文履歴をお読みください。",
    },
    buy: {
      name: "購入",
      description: "注文してストアから購入します。",
    },

    //--------------------------- Backoffice ---------------------------
    articles: {
      name: "コンテンツを編集する",
      description: "記事を編集します。",
    },
    "backoffice:notifications": {
      name: "項目 項目",
      description: "項目 項目 項目 項目.",
    },
    "backoffice:order:write": {
      name: "注文 項目",
      description: "編集 項目 項目 ストア 注文.",
    },
    "backoffice:order:read": {
      name: "注文 項目",
      description: "項目 ストア 注文.",
    },
    "backoffice:support-tickets": {
      name: "項目 項目",
      description: "項目 項目 項目.",
    },
    "backoffice:shop:read": {
      name: "ショップ 情報",
      description: "項目 ショップ 詳細 項目 項目.",
    },
    "backoffice:shop:write": {
      name: "ショップ 項目",
      description: "作成 項目 項目 ショップ 詳細.",
    },
    "backoffice:shop:add": {
      name: "追加 ショップ",
      description: "追加 項目 項目 ショップ 項目 項目 項目.",
    },
    "backoffice:shop:delete": {
      name: "削除 ショップ",
      description: "削除 項目 ショップ 項目 項目 項目.",
    },
    "backoffice:giftcard:write": {
      name: "項目 項目 項目",
      description: "作成 項目 項目 項目 項目.",
    },
    "backoffice:giftcard:read": {
      name: "項目 項目 項目",
      description: "項目 項目 項目 詳細 項目 項目.",
    },
    "backoffice:faq:write": {
      name: "項目 項目",
      description: "作成 項目 項目 項目 項目 項目.",
    },
    "backoffice:faq:read": {
      name: "項目 項目",
      description: "項目 項目 詳細 項目 項目.",
    },
    "backoffice:category:write": {
      name: "カテゴリ 項目",
      description: "作成 項目 項目 商品 項目.",
    },
    "backoffice:category:read": {
      name: "カテゴリ 項目",
      description: "項目 カテゴリ 詳細 項目 項目.",
    },
    "backoffice:product:write": {
      name: "商品 項目",
      description: "追加 項目 項目 商品.",
    },
    "backoffice:product:read": {
      name: "商品 項目",
      description: "項目 商品 詳細 項目 項目.",
    },
    "backoffice:report:read": {
      name: "レポート 項目",
      description: "項目 ストア レポート 項目 情報.",
    },
    "backoffice:finance:write": {
      name: "項目 項目 項目",
      description: "項目 項目 項目 項目 項目 項目 ストア.",
    },
    "backoffice:finance:read": {
      name: "項目 項目 項目",
      description: "項目 項目 項目 詳細 項目 項目.",
    },
    "backoffice:page:write": {
      name: "項目 項目",
      description: "編集 ショップ 項目.",
    },
    "backoffice:page:read": {
      name: "項目 項目",
      description: "項目 ショップ 項目 詳細 項目 項目.",
    },
    "backoffice:logistic:write": {
      name: "項目 項目",
      description: "項目 項目 情報.",
    },
    "backoffice:logistic:read": {
      name: "項目 項目",
      description: "項目 項目 詳細 項目 項目.",
    },
    "backoffice:staff:write": {
      name: "項目 項目",
      description: "編集 項目 項目 項目 詳細.",
    },
    "backoffice:staff:read": {
      name: "項目 項目",
      description: "項目 項目 情報 項目 項目.",
    },
    "backoffice:business-profile:write": {
      name: "ビジネス プロフィール 項目",
      description: "項目 ビジネス プロフィール.",
    },
    "backoffice:business-profile:read": {
      name: "ビジネス プロフィール 項目",
      description: "項目 ビジネス プロフィール 詳細.",
    },
    "backoffice:discount-code:write": {
      name: "割引 項目 項目",
      description: "項目 ストア 割引 項目.",
    },
    "backoffice:discount-code:read": {
      name: "割引 項目 項目",
      description: "項目 割引 項目 詳細 項目 項目.",
    },
    "backoffice:wallet:write": {
      name: "ウォレット 項目",
      description: "項目 ユーザー ウォレット.",
    },
    "backoffice:wallet:read": {
      name: "ウォレット 項目",
      description: "項目 ウォレット 情報 項目 項目.",
    },
    "backoffice:coupon:write": {
      name: "クーポン 項目",
      description: "項目 ストア クーポン.",
    },
    "backoffice:coupon:read": {
      name: "クーポン 項目",
      description: "項目 クーポン 詳細 項目 項目.",
    },
    "backoffice:offer:write": {
      name: "オファー 項目",
      description: "項目 ストア オファー.",
    },
    "backoffice:offer:read": {
      name: "オファー 項目",
      description: "項目 オファー 情報 項目 項目.",
    },
    "backoffice:cashback:write": {
      name: "項目 項目",
      description: "項目 ストア 項目 オファー.",
    },
    "backoffice:cashback:read": {
      name: "項目 項目",
      description: "項目 項目 詳細 項目 項目.",
    },
    "backoffice:lottery:write": {
      name: "項目 項目",
      description: "項目 ストア 項目.",
    },
    "backoffice:lottery:read": {
      name: "項目 項目",
      description: "項目 項目 詳細 項目 項目.",
    },
    "backoffice:community:write": {
      name: "項目 項目",
      description: "項目 項目 項目.",
    },
    "backoffice:community:read": {
      name: "項目 項目",
      description: "項目 項目 詳細 項目 項目.",
    },
    "backoffice:customer:write": {
      name: "顧客 項目",
      description: "項目 顧客 詳細.",
    },
    "backoffice:customer:read": {
      name: "顧客 項目",
      description: "項目 顧客 情報 項目 項目.",
    },
    "backoffice:ribbon:write": {
      name: "項目 項目",
      description: "項目 ストア 項目.",
    },
    "backoffice:ribbon:read": {
      name: "項目 項目",
      description: "項目 項目 詳細 項目 項目.",
    },
    "backoffice:ai:write": {
      name: "AI 項目",
      description: "項目 AI 項目.",
    },
    "backoffice:ai:read": {
      name: "AI 項目",
      description: "項目 AI 項目 項目 項目.",
    },
    "backoffice:vendor-payment:write": {
      name: "販売者 支払い 項目",
      description: "項目 販売者 支払い.",
    },
    "backoffice:vendor-payment:read": {
      name: "販売者 支払い 項目",
      description: "項目 販売者 支払い 詳細 項目 項目.",
    },
    "backoffice:company:read": {
      name: "会社 項目",
      description: "項目 会社 詳細 項目 項目.",
    },
    "backoffice:company:write": {
      name: "会社 項目",
      description: "項目 会社 情報.",
    },
    "backoffice:note:read": {
      name: "メモ 項目",
      description: "項目 メモ 項目 項目 詳細.",
    },
    "backoffice:note:write": {
      name: "メモ 項目",
      description: "項目 メモ.",
    },
    "backoffice:affiliate:write": {
      name: "項目 項目",
      description: "項目 項目 情報.",
    },
    "backoffice:affiliate:read": {
      name: "項目 項目",
      description: "項目 項目 詳細 項目 項目.",
    },
    "backoffice:print:write": {
      name: "項目 項目",
      description: "項目 項目 項目.",
    },
    "backoffice:print:read": {
      name: "項目 項目",
      description: "項目 項目 詳細.",
    },
    "selldone:token:read": {
      name: "トークンアクセス",
      description: "項目 項目 詳細 項目 項目.",
    },
    "selldone:token:write": {
      name: "トークン管理",
      description: "項目 項目.",
    },

    //--------------------------- Selldone ---------------------------
    "selldone:monetization:read": {
      name: "項目 項目",
      description: "項目 項目 詳細 項目 項目.",
    },
    "selldone:monetization:write": {
      name: "項目 項目",
      description: "項目 項目, 項目 項目 項目.",
    },
    "selldone:identification": {
      name: "項目 項目",
      description: "項目 ユーザー 項目 詳細.",
    },
    "selldone:developer:read": {
      name: "項目 項目",
      description: "項目 項目 詳細 項目 項目.",
    },
    "selldone:developer:write": {
      name: "項目 項目",
      description: "項目 項目 情報.",
    },
    "selldone:security:write": {
      name: "項目 項目",
      description: "項目 項目 項目.",
    },

    //--------------------------- Connect ---------------------------
    "connect:provider:write": {
      name: "項目 項目",
      description: "項目 項目 項目 項目.",
    },
    "connect:provider:read": {
      name: "項目 項目",
      description: "項目 項目 詳細 項目 項目.",
    },

    //--------------------------- Agency ---------------------------
    "agency:read": {
      name: "項目 項目",
      description: "項目 項目 詳細 項目 項目.",
    },
    "agency:write": {
      name: "項目 項目",
      description: "項目 項目 情報.",
    },

    //--------------------------- Vendor ---------------------------

    "vendor-read": {
      name: "販売者アクセス",
      description: "項目 販売者 詳細 項目 項目.",
    },
    "vendor-write": {
      name: "販売者管理",
      description: "項目 販売者 情報.",
    },
  },

  scope_group: {
    backoffice: {
      title: "バックオフィス",
      description: "項目 項目 項目 項目 ストア 項目 項目.",
    },
    storefront: {
      title: "ストアフロント",
      description: "項目 項目 顧客 項目 ストア 情報.",
    },
    profile: {
      title: "プロフィール",
      description: "項目 ユーザー プロフィール 情報.",
    },
    selldone: {
      title: "Selldone",
      description: "項目 Selldone 項目 項目 項目.",
    },
    others: {
      title: "その他",
      description: "項目 項目 項目 項目 項目 項目 項目.",
    },
    vendor: {
      title: "販売者",
      description: "項目 販売者 情報 項目 項目 項目.",
    },
    connect: {
      title: "Connect OS",
      description: "項目 項目 項目 項目 項目.",
    },
    agency: {
      title: "項目",
      description: "項目 項目 情報 項目 項目.",
    },
  },

  /** {@see AdminCompanyPage} **/
  company_page: {
    title: "会社",
    create_app: "新しいアプリケーションを作成する",
    menu: {
      edit: "編集",
      apps: "アプリ",
      dashboard: "ダッシュボード",
      companies: "企業",
    },
    /** {@see AdminCompanyPage_Dashboard} **/
    dashboard: {
      /** {@see CompanyInfoWidget} **/
      info_widget: {
        title: "会社登録情報",
        address: "住所",
        website: "Webサイト",
        email: "Eメール",
        phone: "電話番号",
        register: "登録",
        developer: "デベロッパー",
        verified: "検証済み",
        golden: "ゴールデン",
      },
    },
    /** {@see AdminCompanyPage_Develop} **/
    developer: {
      title: "開発者",
      menu: {
        new: "新しい",
        apps: "アプリ",
      },
    },
    /** {@see AdminCompanyPage_Edit} **/
    edit: {
      title: "編集",
    },
  },
  /** {@see BAppAdd} **/
  add_app: {
    category_input: "カテゴリー",
    code_input: "コード",
    name_input: "名前",
    description_input: "説明",
    video_input: "ビデオURL",
    public_form: "一般的な情報構造",
    private_form: "個人情報の構造",
    icon_input: "アプリアイコン",
    logo_input: "ロゴアプリ",
    enable_input: "アプリケーションはアクティブですか？",
    edit_action: "アプリを編集",
    create_action: "アプリを作成する",
    notifications: {
      add_success: "ビジネスアカウント{name}が作成されました。",
      delete_success: "ビジネスアカウントを編集しました。",
    },
  },

  /** {@see AppPage} **/
  app_page: {
    title: "応用",

    menu: {
      edit: "編集",
      publish: "公開",
      history: "バージョン",
      dashboard: "ダッシュボード",
      company: "会社",
      api: "API",
      images: "画像",
    },
    /** {@see AppPage_Dashboard} **/
    dashboard: {
      /** {@see AppInfoWidget} **/
      app_info_widget: {
        title: "応用",
        app_code: "アプリコード",
        category: "カテゴリー",
        name: "名前",
        installs: "アプリをインストールする",
        uninstalls: "アプリをアンインストールする",
        actives: "アクティブなアプリ",
        description: "説明",
        published: "公開",
        waiting_for_review: "承認待ちの",
        app_mode: "アプリケーションモード",
      },
    },
  },
  /** {@see ShopPermissions} **/
  shop_permissions: {
    ADMIN: { text: "オーナー", description: "すべての店先へのフルアクセス。" },
    PRODUCT: {
      text: "プロダクトマネージャー",
      description: "ストア製品を追加、編集、および管理します。",
    },
    AUDITING: {
      text: "財務管理者",
      description: "財務情報と支払いを表示します。",
    },
    CONTENT: {
      text: "コンテンツ管理",
      description: "質問に答えたり、ブログを書いたり、ページをデザインしたりします。",
    },
    OFFICER: {
      text: "シニアマネージャー",
      description: "従業員の活動を表示および監視します。",
    },
    EMPLOYEE: {
      text: "従業員",
      description: "注文を表示し、注文を履行します。",
    },
    MARKETING: {
      text: "マーケティング",
      description:
        "設定にアクセスし、キャンペーン、メールマーケティング、その他のマーケティング関連のセクションを作成します。",
    },
    VIEWER: {
      text: "ビューア",
      description:
        "店舗情報を編集または変更せずに表示する機能。",
    },
  },

  /** {@see ShopRoles} **/
  shop_roles: {
    PhysicalOrdersChecking: {
      text: "物理的なチェック",
      description: "受け取った注文を確認します。",
    },
    PhysicalOrdersPackaging: {
      text: "物理的なパッケージ",
      description: "倉庫および梱包プロセス。",
    },
    PhysicalOrdersDelivery: {
      text: "物理的な配送",
      description: "配送を注文します。",
    },
    PhysicalOrdersSupport: {
      text: "物理的サポート",
      description: "アフターサポート。",
    },
  },

  /** {@see AccountStatus} **/
  account_status: {
    Checking: "チェック中",
    Approved: "確認済み",
    Rejected: "拒否されました",
    Deleted: "削除",
    Banned: "禁止された",
    Payment: "支払い",
    SelldoneSprite: "Selldoneウォレットアカウント",
    SelldoneStorage: "Selldoneストレージ",
  },
  /** {@see BPageAccount} **/
  account_page: {
    title: "アカウント",
    menu: {
      setting: "設定",
      charge: "充電",
      transfer: "移行",
      transactions: "トランザクション",
      history: "歴史",
      cards: "カード",
    },

    /** {@see BPageAccountTransactions} **/
    transactions: {
      title: "アカウントトランザクション",
      detail: {
        title: "取引",
        amount: "額",
        description: "説明",
        from: "から",
        to: "に",
        created_at: "日にち",
        receipt: "レシート",
        receipt_note: "ノート",
      },
      table: {
        type: "タイプ",
        from: "アカウントから",
        to: "アカウントへ",
        amount: "額",
        receipt: "レシート",
        created_at: "日にち",
        description: "説明",
      },
    },

    /** {@see BPageAccountTransfer} **/
    transfer: {
      title: "転送料金",
      form: {
        title: "転送リクエストフォーム",
        sub_title:
          "Selldone — 自分のアカウントまたは他の人にデポジットする",
        message:
          "送金にはご注意ください。送金を完了すると返品できなくなります。",
      },
    },
    /** {@see BPageAccountDeposit} **/
    deposit: {
      form: {
        title: "課金アカウント",
        sub_title:
          "ライセンスを購入し、アカウントをアップグレードし、システムの領収書を支払うには、アカウントの残高を請求する必要があります。",
        amount_input: "額",
        charge_action: "アカウントを請求する",
      },
      notifications: {
        qr_title: "支払い",
        qr_message: `支払いアドレス{currency}が作成されました。`,
        gateway_title: "支払い",
        gateway_message: "支払いゲートウェイに接続しています。",
      },
    },

    /** {@see BPageAccountEdit} **/
    setting: {
      title: "アカウント設定",
      account_name_input: "アカウント名",
      notifications: {
        updated_success: "アカウントが正常に更新されました。",
      },
    },
  },

  /** {@see BAccountReceiptPaymentDialog} **/
  receipt_payment_dialog: {
    title: "領収書の支払い",
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
    title: "取引フォーム",
    from_input: "アカウント番号から",
    to_input: "アカウント番号へ",
    from_input_message: "金額はこのアカウントから引き落とされます。",
    account_name: "アカウント名",
    currency: "通貨",
    free_balance: "利用可能残高",
    to: "宛先アカウント",
    amount: "額",
    receipt_title: "領収書の支払い",
    receipt_input: "受付番号",
    paid_status: "この領収書はすでに支払われています。",
    paid_canceled: "この領収書はキャンセルされました。",
    description: "説明",
    created_at: "日にち",
    duration: "間隔",
    unlimited: "無制限",
    add_note_action: "説明を追加",
    note: "ノート",
    transfer_action: "移行",
    confirmation: {
      title: "送金する",
      subtitle: "取引確認",
      message:
        "以下の情報が正しければ、取引確認キーを押して取引を行ってください。",
      from: "アカウントから",
      to: "アカウントへ",
      amount: "額",
      fee: "取引料金",
      total_pay: "アカウントから引き出された金額",
      receipt: "レシート",
      description: "説明",
      accept_action: "取引確認",
    },
    enter_account_number: "アカウント番号を入力します。",
    currency_not_match:
      "宛先アカウントの通貨はソースと同じではありません",
    account_number_not_valid: "アカウント番号は正しいです。",
    account_number_is_valid: "アカウント番号は正しいです。",
    receipt_not_valid: "請求書番号が正しくありません。",
    receipt_is_valid: "領収書番号は正しいです。",

    notifications: {
      confirm_success: "トランザクションは正常に完了しました。",
    },
  },

  /** {@see OPlanCalculator} **/
  price_calculator: {
    title: "電卓|あなたのビジネスにフィット",
    description:
      "毎月の売り上げに基づいて最適なプランを計算して選択します。",
    sale_input: "月間売上高",
    hypernova_plan: "Hypernova％0に申し込む！",
    show_normal_mode: "通常モードを表示",
    show_hypernova_mode: "私の取引は100万ドルを超えています！",
  },

  /** {@see OPlanFeaturesCard} **/
  price_card: {
    billed_monthly: "毎月{amount}を請求します。",
    billed_yearly: "毎年{amount}を請求します。",
    buy_license_action: "今買う",
    select_your_store: "お店を選択",
  },

  /** {@see BSessionsMap} **/
  shop_session_widget: {
    total_sessions: "合計セッション",
  },
  /** {@see BDashboardShopCustomersActivityMap} **/
  user_activities_keys: {
    add_baskets: "カートに追加",
    remove_baskets: "カートから削除",
    buys: "買う",
    products_views: "製品を見る",
  },
  /** {@see BDashboardShopAcquisition} **/
  shop_visitors_widget: {
    title: "訪問者分析",
    new_visitors: "新規訪問者",
    amp: "AMPビュー",
    returning_visitors: "リピーター",
    page_views: "ページビュー",
    other_pages: "他のページ",
    from_previous_7_days: "過去7日間から",
  },

  /** {@see BUserAppLevel}   {@see AppLevel}  **/
  app_levels: {
    title: "アプリレベル",
    Newbie: "初心者",
    Beginner: "初心者",
    Novice: "初心者",
    Intermediate: "中級",
    Advanced: "高度",
  },

  /** {@see Login} **/
  login: {
    register_title: "ビジネスの媒体、<br>楽しい経験。",
    register_subtitle:
      "今すぐ無料でサインアップしてください。 Selldoneは、スタートアップ、企業、買い手、売り手に愛されています。",

    password_recovery_title: "パスワードの復元",
    password_recovery_message:
      "パスワードを忘れた場合は、アカウントのメールアドレスを入力して確認キーを押してください。パスワードをリセットするためのリンクが記載されたメールをお送りします。",
    email: "あなたのメールアドレス",
    password_recovery_action: "回復メールを受信する",

    register_google: "Googleを続行",
    register_apple: "Appleを続ける",
    continue_with: "を続行",
    register_linkedin: "LinkedInを続行",
    register_facebook: "Facebookを続ける",
    register_github: "GitHubを続行します",
    create_your_account: "アカウントを作成",
    password_8_chars: "パスワードは8文字以上でなければなりません。",
    password_upercase_number: "少なくとも1つの大文字と1つの数字。",
    password_confirm: "パスワードと確認が一致しました。",
    privacy_agreement:
      "サインアップすることにより、Selldoneの<a href='/terms' target='_blank'>利用規約</a>と<a href='/privacy' target='_blank'>プライバシーポリシー</a>に同意したことになります。",
    register_action: "行きましょう、それは無料です！",
    login_action: "ログイン",
    already_signup: "すでにサインアップしていますか？",
    login_your_account: "あなたのアカウントにログイン",
    login_google: "Googleを続行",
    login_linkedin: "LinkedInを続行",
    login_facebook: "Facebookを続ける",
    login_github: "GitHubを続行します",
    remember_me: "私を覚えてますか。",
    login_button: "ログイン",
    two_step_problem: "2段階パスワードに問題がありますか？",
    two_step_problem_action: "2段階ログインを無効にしたい。",
    two_step_confirm: "アクセスコードを確認する",
    forgot_password: "パスワードをお忘れですか？",
    signup_free: "無料でお申し込み頂けます",
    checking_robot_message: "あなたがロボットか人間かをチェックします。",
    notifications: {
      step2_login_success: "アカウントへの自動ログイン",
    },
    signup_email: "メールでサインアップ",

    name_placeholder: "名前",
    email_placeholder: "Eメール",
    email_or_username_placeholder: "メールアドレス、ユーザー名または電話番号",
    password_placeholder: "パスワード",
    re_password_placeholder: "パスワードを認証する",
    new_in_samin: "Selldoneの新機能？",
    auto_create_shop: "オートクリエイトショップ",
  },
  /** {@see Layout} **/
  layout: {
    logout: "ログアウト",
    menu: {
      my_public_profile_subtitle: "私の公開プロフィール {name}。",

      personal_information: "個人情報とプロフィール",
      personal_information_subtitle: "プロフィール、住所、KYC を編集します。",
      wallet: "ウォレットとアカウント",
      wallet_subtitle: "仮想アカウントと接続された支払いカード。",

      companies: "企業とビジネスアカウント",
      companies_subtitle: "ビジネスおよび税金のプロファイルを登録します。",

      access: "マイアカウントへのアクセス",
      access_subtitle:
        "OAuth クライアント、個人アクセス トークン、接続されたアプリ。",

      security: "安全",
      security_subtitle: "2 要素認証を設定し、ソーシャル ログイン オプションを管理します。",

      preferences: "ユーザー設定",
      preferences_subtitle:
        "テーマ、レベル、言語、デフォルトの通貨を変更します。",
      my_subscriptions: "私の定期購入",
      my_subscriptions_subtitle:
        "プレミアム AI とカスタマイズ機能にアクセスできます。",
    },
  },

  /** {@see PageBuilder} **/
  page_builder: {
    title: "ウェブサイトデザイン",

    menu: {
      user_view: "意見",
      design: "設計",
      behavior: "行動",
      seo: "SEO",
      setting: "設定",
      embed: "埋め込む",
    },
    waiting_fetch: "情報を受け取る..",

    /** {@see SettingCustomPage} **/
    setting: {
      title_input: "ページタイトル",
      description_input: "簡単な説明",
      name_input: "ページのURL（文字と数字）",
      bg_color_input: "背景色",
      bg_style_input: "ページの背景スタイル",
      page_label_input: "ラベルの色",
      page_dir_input: "ページの方向",
      ltr: "左から右へ",
      rtl: "右から左へ",
      designer_note: "デザイナーノート",
    },

    /** {@see LPageEditor} **/
    design: {
      themes: {
        title: "パーソナルデザインアシスタント",
        message: "コーディングせずにビジネスに最適なページをデザインします。",
        page_title_input: "ページのタイトルを入力してください",
      },
      tools: {
        rearrange: "注文",
        tools: "ツール",
        history: "歴史",
        style: "スタイル",
        typography: "タイポグラフィ",
        hierarchy: "階層",
      },
      no_category: "カテゴリなし",
    },

    /** {@see LPageEditorSeo} **/
    seo: {
      message:
        "SEO設定は、SelldoneSEOエンジンによって自動的に調整されます。",
    },
  },

  /** {@see VerifyEmailCaution} **/
  verify_email_caution: {
    title: "メールアドレスを確認してください",
    message:
      "新しいアクティベーションリンクがあなたのメールアドレス{email}に送信されました。アクションを実行する前に、メールを確認してください。",
    resend_message:
      "メールにアクティベーションリンクが記載されていない場合は、下のボタンをクリックして再送信してください。",
    resend_action: "アクティベーションリンクを再送",
    resend_notice: "アクティベーションリンクが送信されました。",
  },

  /** {@see ShopAutomation_Autopilot} **/
  autopilot: {
    start: "開始日",
    end: "終了日",
  },

  /** {@see Help} **/
  help: {
    menu: "メニュー",
    more_helps: "続きを読む",
  },

  /** {@see WidgetCompanyCard} **/
  company_card: {
    pending_state: "レビュー待ち",
    register: "登録済み",
    developer: "デベロッパー",
    verified: "確認済み",
    premier: "プレミア",
  },

  /** {@see ShopSubscriptionList} **/
  shop_license: {
    add: "サブスクリプションを追加",
    only_last: "最後のサブスクリプションのみ",
    vouchers: "バウチャー",
    buy: "サブスクリプションプランを購入する",
    monthly: "毎月",
    yearly: "毎年",
    start_date: "開始日",
    end_date: "終了日",
    price: "価格",
    verify: {
      true_title: "項目 項目",
      true_description: "項目 項目 項目 項目 項目 Selldone 項目 項目 項目",
    },
    need_charge: "料金が必要",
    buy_now: "今買う",
    use_voucher_now: "今すぐバウチャーを使用する",
    plan_placeholder: "サブスクリプションプランを選択してください",
    plan: "ライセンスプラン",
    use_date: "アクティベーション日",
    validity_duration: "有効期間",
    validity_duration_hint:
      "12 か月のライセンスを購入すると、30% 割引になります。",

    active_license: {
      title: "アクティブライセンス",
      subtitle:
        "アクティブなライセンス情報。",
      subtitle_partner:
        "アクティブな{name}ライセンス情報。",
    },
    licenses_table: {
      title: "購入履歴",
      subtitle:
        "アクティブおよび保留中のライセンス。",
    },
    license_detail: {
      title: "詳細",
      subtitle:
        "現在の計画の制限。",
    },

    table: {
      plan: "プラン",
      start_date: "開始/終了日",
      renewal: "自動更新",
      linked_account: "リンクされたアカウント/バウチャー",
      payment: "支払い",
      cancel: "キャンセル",
    },
    notifications: {
      subscribe_success: "正常にサブスクライブしました。",
      cancel_success: "サブスクリプションは正常にキャンセルされました。",
    },
    cancel_dialog: {
      title: "サブスクリプションの確認をキャンセルする",
      message: "このサブスクリプションをキャンセルしてもよろしいですか？",
      action: "サブスクリプションをキャンセルする",
    },
    add_dialog: {
      wallet: {
        title: "項目 項目 ウォレット",
        subtitle:
          "ここでこのセクションの情報と設定を管理できます。",
      },
      auto_renewal: {
        true_title: "自動更新",
        true_description:
          "ここでこのセクションの情報と設定を管理できます。",
      },
      options: {
        title: "項目 項目",
      },
      verify: {
        title: "項目",
      },
    },
  },

  /** {@see BLayoutBackofficeShop} **/

  admin_shop_layout: {
    download_txt: "データテキストをダウンロード",
    download_excel: "データのダウンロードExcel",
  },
  /** {@see BUserPreferences} **/
  user_preferences: {
    access: "アクセス",
    template: "レンプレート",
    feedback: "フィードバック",
    date_time: "日付と時刻",

    company: "会社",
    company_message: "会社があり、アプリを公開したい場合。",
    access_keys: "アクセスキー",
    access_keys_message: "クライアントとアクセスキーを表示します。",
    rating: "Selldoneでの経験をどのように評価しますか？",
    large_font: "大きいフォント",
    large_font_message: "通常よりも大きいテキストを表示する",
    samples: "サンプルショップを表示",
    samples_message:
      "有効にすると、いくつかのサンプルショップがパネルに表示されます。",

    automation: "オートメーション",
    automation_message:
      "ショップのダッシュボードに自動化タブを表示します。 (Webhook、ビジュアル プログラミング、...)",
  },

  /** {@see BPageShopSettingLocations} **/
  shop_locations: {
    title: "サービスが提供されている国",
    sub_title:
      "以下のリストから、製品を販売する国を選択してください。",

    delete_restriction: "削除制限",
    set_restriction: "制限を設定する",
    notifications: {
      locations_update: "場所が正常に更新されました。",
    },
    table: {
      country: "国",
      currency: "通貨",
      available: "利用可能",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "完売",
    review_unit: "レビュー",
    not_original: "オリジナルではない",
  },

  /** @see BProductAddStudio **/
  product_studio: {
    add_mode: "詳細を追加",
    auto_category: "カテゴリの自動設定",
    add_in_current_category: "現在のカテゴリに追加",
    category_mode_message:
      "有効にすると、製品はデフォルトのカテゴリまたはサブカテゴリに追加されます。",
    sku_name_input: "SKU/名前",
    info: {
      subtitle:
        "製品を生成するには、その作成に必要な重要な詳細のみを入力します。",
    },
    price: {
      subtitle:
        "この商品の価格と割引を入力します。商品を追加すると、さらに多くのオプションにアクセスできるようになります。",
    },
    by_sku: {
      title: "SKUで追加",
      subtitle: "あなたの国のデータベースは利用できません。",
    },
    drop_shipping: {
      subtitle:
        "卸売市場で製品を見つけて、ストアに追加します。",
    },
    by_connect: {
      subtitle:
        "Selldone Connect OS を使用すると、POD またはドロップシッピング サプライヤーから製品を簡単に追加できます。ストアを接続するだけで、プラグインを必要とせず、自動的に製品が統合されます。",
    },
    your_license_is_not_eligible: "あなたのライセンスは適格ではありません。",
    sku_dialog: {
      title: "SKUで製品を追加",
      subtitle:
        "当社のデータベースで SKU 別に製品を検索し、ワンクリックで追加することができます。",
    },
    dropshipping_dialog: {
      title: "ドロップシッピング商品を追加する",
    },
  },

  /**
   * @see BProductAddDropshippingShops
   */
  product_add_dropshipping_shops: {
    subtitle:
      "ここでは、Selldone に商品を掲載し、他の販売業者が利用できるようにしている卸売業者を見つけることができます。Selldone に組み込まれているドロップシッピング プラットフォームはプロセスを簡素化し、卸売業者と販売業者の両方にとって簡単かつわかりやすくします。",
  },

  /** @see Affiliates **/
  my_affiliate: {
    title: "私のアフィリエイト契約",
    message:
      "他の店舗との提携契約のリスト。",
  },

  /** @see BPageShopMarketingAffiliate **/
  affiliates: {
    title: "アフィリエイトパートナー",
    subtitle:
      "アフィリエイトを作成し、時間の経過とともにパフォーマンスを追跡し、正確な情報に基づいて1か所でアクションを実行します。私たちはあなたとあなたのパートナーが強い関係を築くのを助けます。",

    affiliate_code: "アフィリエイトコード",
    crate_date: "日付を作成します",
    last_payment_date: "最終支払日",
    for_all_products: "すべての製品に適用",
    balance: "バランス",
    fix_commission: "固定手数料",
    percent_commission: "パーセントベースの手数料",
    total_payment: "総支払い",
    new_affiliate: "新しいアフィリエイトパートナー",
    new_affiliate_message: "新しいアフィリエイトパートナーを追加する",

    link_factory: {
      title: "アフィリエイトパートナーリンクジェネレータ",
      link_input: "あなたのリンク",
      link_output: "生成されたリンク",
    },
  },

  /**
   * @see BAffiliateEdit
   */
  affiliate_edit: {
    affiliate_commission: "項目 項目",

    config: {
      new: "項目 項目 項目",
      edit: "編集 項目 項目",
      subtitle:
        "項目 項目 項目 設定 項目 項目 項目 項目 項目 項目.",
    },

    payment: {
      title: "支払い 情報",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },

    contact: {
      title: "連絡先",
      subtitle: "項目 項目 項目 詳細 項目 項目 項目 項目 項目.",
    },

    restriction: {
      title: "項目 項目",
      subtitle:
        "項目 項目 商品 項目 項目 項目 項目. 項目 項目 項目 項目 項目 項目 商品.",
    },

    link_domain: {
      title: "項目 項目",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",

      domain_not_approved_msg: "項目 項目 項目 項目 項目 項目 項目!",
      domain_is_not_enable_msg: "項目 項目 項目 項目 項目!",
      domain_is_linked_to_other_affiliate_msg:
        "項目 項目 項目 項目 項目 項目 項目 項目!",
    },

    set_users_first_message: "項目 項目 項目 ユーザー 項目!",

    cluster: {
      title: "項目",
      subtitle:
        "項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目.",
      manage_action: "項目",
    },

    notifications: {
      create_success: "項目 項目 項目 項目.",
      update_success: "項目 項目 項目.",
    },

    inputs: {
      name: {
        label: "項目 項目 項目",
        message: "項目.項目., 項目 項目, 項目 会社, 項目 項目, 項目.",
      },
      commission: {
        label: "項目 項目",
        false_description:
          "項目 項目 項目 項目 項目 項目 項目 項目 項目.",
        true_description:
          "項目 項目 項目 項目 項目 項目 項目 項目 項目.",
        false_title: "項目 + 項目 項目",
        true_title: "項目 項目",
      },
      user: {
        label: "ユーザー (項目)",
        message: "項目, 項目.項目., 項目 項目 項目 Selldone",
      },
      web: {
        placeholder: "項目, 項目.項目., 項目.項目",
      },
      address: {
        placeholder: "項目, 項目.項目., 1200 項目, 項目, 項目",
      },
      tel: {
        placeholder: "項目, 項目.項目., 001-808-210354",
      },
      bank: {
        placeholder: "項目, 項目.項目., 項目 項目, 項目: 10002-325-800-845213",
      },
      domain: {
        placeholder: "選択 項目 項目... (項目)",
      },
      pos: {
        true_description:
          "項目 項目 項目 注文 項目 項目 項目 顧客 項目 項目 項目.",
        true_title: "POS 項目",
      },
      enable: {
        true_description:
          "必要な情報を選択または入力してください。",
      },
      products: {
        label: "商品 項目 項目 項目",
        select_product: "選択 商品",
      },
    },
    actions: {
      update: "更新 項目",
      add: "追加 項目 項目",
    },
    /**
     * @see BPageAffiliateEdit
     */
    delete: {
      subtitle:
        "この項目を削除してもよろしいですか？",
    },
  },

  /**
   * @see BPageShopFinanceValuations
   */
  shop_valuations: {
    title: "項目 項目 項目 項目",
    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
    add_valuation_action: "作成 項目 項目 フォーム",
    empty_message:
      "ここでこのセクションの情報と設定を管理できます。",
    delete_dialog: {
      title: "項目 削除",
      message:
        "この項目を削除してもよろしいですか？",
      action: "はい、今すぐ削除",
    },
    notifications: {
      delete_success: "項目 項目 項目 項目 項目.",
    },
  },

  /**
   * @see BValuationInput
   */
  valuation_input: {
    label: "項目 & 項目 項目",
  },

  /**
   * @see BValuationAdd
   */
  valuation_add: {
    title_edit: "編集 項目 フォーム",
    title_add: "作成 項目 項目 フォーム",
    config: {
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    valuation_preview: "項目 項目 フォーム",
    load_sample: "項目 項目",
    conditions: {
      title: "条件",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    structure: {
      title: "項目",
      subtitle:
        "項目 項目 項目 項目 フォーム 項目 項目 項目 項目 項目 項目 項目.",
      expand_action: "項目",
      collapse_action: "項目",
    },
    inputs: {
      title: {
        message: "項目 タイトル 項目 項目 項目 項目 顧客.",
        placeholder: "項目 項目 項目 項目 項目, 項目.項目., '項目 項目'",
      },
    },
    samples: {
      title: "項目 項目",
    },
  },

  /** @see AdminGiftcardPage_Orders **/
  gift_card_orders: {
    title: "ギフトカードでの注文",
    table: {
      order: "注文",
      order_price: "注文金額",
      paid_by_card: "カードで支払う",
      payment_status: "支払い状況",
      date: "日にち",
    },
  },

  /** @see BPageOfferOrders **/
  offer_orders: {
    title: "オファーオーダー",
    table: {
      order: "注文",
      order_price: "注文金額",
      offer_amount: "オファー金額",
      payment_status: "支払い状況",
      product: "製品",
      date: "日にち",
    },
  },

  /** @see BPageCouponOrders **/
  coupon_orders: {
    title: "クーポン注文",
    table: {
      order: "注文",
      order_price: "注文金額",
      coupon_amount: "クーポン金額",
      payment_status: "支払い状況",
      date: "日にち",
    },
  },

  /** @see BPageDiscountCodeOrders **/
  discount_code_orders: {
    title: "割引コード付きの注文",
    table: {
      order: "注文",
      order_price: "注文金額",
      discount_amount: "割引額",
      payment_status: "支払い状況",
      date: "日にち",
    },
  },

  /** @see BPageShopIncentives **/
  incentives: {
    discount_code: "割引",
    coupon: "クーポン",
    offer: "オファー",
    gift_card: "ギフトカード",
    lottery: "宝くじ",
    cashback: "キャッシュバック",
  },

  /** {@see BPageShopIncentivesDiscountCode} **/
  discount_codes: {
    title: "割引コード",
    sub_title:
      "このセクションでは、ニーズに合わせて割引クーポンをデザインできます。これらの割引は、製品の割引とは別に、ユーザー注文の最終金額に適用されます。",
    add_new: "新しい割引コードを追加する",
    card: {
      created: "作成",
      start: "始める",
      end: "終わり",
      currency: "通貨",
      discount_percentage: "割引率",
      discount_limit: "割引制限",
      state: "現在のステータス",
      enabled: "有効になりました",
      disabled: "現在無効になっています",
      used: "消費",
      count: "カウント",
      unit: "アイテム",
    },
    /** {@see BDiscountCodeAdd} **/
    dialog: {
      title_edit: "割引コードを編集する",
      title_add: "新しい割引コードを追加する",
      discount_code_input: "ディスカウントコード",
      discount_percent_input: "割引率",
      discount_percent_input_hint: "購入金額の割引率",
      count_input: "カウント",
      count_input_hint: "このコードの最大限の使用",
      limit_input: "割引制限",
      limit_input_hint: "通貨に基づく最大割引",
      currency_input_message: "この通貨には割引が適用されます。",
      limit_input_message:
        "割引制限の値0は、割引率に制限がないことを意味します。",
      title_input: "タイトル",
      title_input_hint: "この割引コードのタイトルを入力できます",
      description_input: "説明",
      description_input_hint:
        "この割引コードの説明を入力できます",
      date_start_input: "始める",
      date_start_input_placeholder: "いつ割引を開始するかを選択します",
      date_end_input: "終わり",
      date_end_input_placeholder: "割引がいつ終了するかを選択します",
      notifications: {
        add: "割引コードが正常に追加されました。",
        edit: "割引コードが正常に編集されました。",
      },
      config: {
        title: "一般設定",
        subtitle:
          "割引コードの計算式は、max (LIMIT、PERCENT * カート価格) です。コードは関連性があり、覚えやすいものにしてください。",
      },
      limit: {
        title: "制限事項",
        subtitle:
          "このセクションでは、各割引コードの最大使用制限と最大割引額を定義できます。",
      },
      duration: {
        title: "期間制限",
        subtitle:
          "割引コードを特定の期間有効にしたい場合は、ここでその期間を設定できます。",
      },
      design: {
        subtitle:
          "各割引コードにタイトルと説明を設定できます。これらの詳細はユーザーに表示されます。",
      },
      cluster: {
        subtitle:
          "この割引コードをクラスターに関連付けると、他のリソースと一緒に 1 つの場所で簡単に管理できます。",
      },
    },
    delete_alert: {
      title: "割引コードを削除する",
      message: "この割引コードを削除しますか？",
      action: "割引を削除する",
    },
    notifications: {
      delete_success: "コメントは正常に削除されました",
    },
  },

  /** {@see BPageShopIncentivesGiftcard} **/
  gift_cards: {
    title: "ギフトカード",
    sub_title:
      "ギフトカードを作成して、必要な数だけ作成します。このカードには料金がかかり、お店での購入にのみ使用できます。",

    create_new: "新しいギフトカードを追加する",
    card: {
      created: "作成",
      lifetime: "有効期限",
      lifetime_unit: "各カードが作成された日からの月",
      currency: "通貨",
      initial_balance: "初期費用",
      count: "カウント",
      count_unit: "アイテム",
      used: "使用済み",
    },
    dialog: {
      title: "ギフトカードのデザイン",
    },
    alert: {
      title: "割引コードを削除する",
      message:
        "この割引コードを削除しますか？",
      action: "消去",
    },
    notifications: {
      delete_title: "ギフトカードを削除する",
      delete_message: "コメントは正常に削除されました。",
    },
  },

  /** {@see BPageShopIncentivesCoupon} **/
  coupons: {
    title: "クーポン",
    sub_title:
      "特定の条件で使用できる割引を顧客に提供したい場合は、クーポンを作成できます。クーポンには、制限付きのパーセンテージ割引、固定金額、または両方の組み合わせを含めることができます。",
    create_new: "新しいクーポンを追加する",
    qualified_products: "対象製品",
    min_purchase: "最小購入",
    only_first_order: "初回購入のみ",

    one_time_use: "使い捨て",
    multiple_use: "複数の使用",
    amount_usage: "使用量",

    delete_alert: {
      title: "クーポンを削除する",
      message: "このクーポンを削除してもよろしいですか？",
      action: "はい、クーポンを削除します",
    },
    notifications: {
      delete_success: "クーポンは正常に削除されました。",
    },
  },
  /** {@see BCouponAdd} **/
  coupon_edit: {
    title_edit: "クーポンを編集",
    title_add: "新しいクーポン",
    discount_charge: "割引と料金",
    charge: "充電",
    charge_message: "初期費用の額",
    percent: "割引率",
    percent_message: "割引率の金額",
    limit_input: "制限",
    limit_input_hint: "割引限度額",
    currency_input_message: "この通貨で利用できるクーポン。",

    count_input: "カウント",
    count_input_hint: "このコードの最大限の使用",
    limit_input_message:
      "割引制限の値0は、割引率に制限がないことを意味します。",
    date_start_input: "始める",
    date_start_input_placeholder: "いつクーポンを開始するかを選択します",
    date_end_input: "終わり",
    date_end_input_placeholder: "割引がいつ終了するかを選択します",
    title_input: "タイトル",
    title_input_hint: "この割引コードのタイトルを入力できます",
    description_input: "説明",
    description_input_hint:
      "この割引コードの説明を入力できます",
    coupon_code: "クーポンコード",
    need_code: "コードが必要ですか？",

    coupon_color: "クーポンカラー",
    min_purchase_amount: "最小購入額",
    min_purchase_amount_hint:
      "購入金額はこの値以上である必要があります。",
    should_exist_product: "これらの製品の少なくとも1つはカートに入っている必要があります",
    apply_for_first_order: "初回購入のみ",
    apply_for_first_order_on:
      "このクーポンは、お客様の最初の購入にのみ使用できます。",
    apply_for_first_order_off:
      "購入者1人あたりのクーポン使用回数は以下で調整できます。",

    has_qualify_constraints: "より多くの制限を定義しますか？",
    has_qualify_constraints_message:
      "このクーポンを使用するために顧客を修飾するために、より多くの条件を設定します。",
    one_time_use_message: "お客様はこのクーポンを1回だけご利用いただけます。",
    daily_limit: "1日あたりの制限",
    no_limit: "制限なし",
    daily_limit_message: "顧客による1日あたりの最大使用量",

    monthly_limit: "月間制限",
    monthly_limit_message: "顧客による1か月あたりの最大使用量",

    yearly_limit: "年間制限",
    yearly_limit_message: "顧客による年間最大使用量",

    notifications: {
      add: "新しいクーポンが正常に作成されました。",
      edit: "クーポンが更新されました。",
    },

    config: {
      subtitle:
        "クーポン割引の計算式は、CHARGE + max (LIMIT, PERCENT * カート価格) です。",
    },
    limit: {
      subtitle:
        "このセクションでは、クーポンごとの最大使用回数と、各クーポンで提供できる最大割引額の両方を設定できます。",
      zero_message: "ゼロ：制限はありません！",
    },
    duration: {
      subtitle:
        "クーポンを有効にする特定の期間を設定する場合は、このセクションで期間を設定できます。",
    },
    design: {
      subtitle:
        "各クーポンにはタイトルと説明を追加できます。これらの詳細は顧客に表示されます。",
    },
    constraints: {
      subtitle:
        "ここでは、クーポンの追加のパーソナライズされたパラメータを設定することができます。",
      no_limit: "追加の制限なし",
      has_limit: "追加の制約",
      has_code_message: "クーポンを追加するには、ユーザーがコードを入力する必要があります。",
    },
    club: {
      subtitle:
        "このクーポンの使用は、選択された顧客クラブの会員のみに制限される場合があります。",
    },
    cluster: {
      subtitle:
        "このクーポンをクラスターに関連付けることで、他のリソースと一緒に 1 つの場所で簡単に管理できます。",
    },
    preview: {
      subtitle: "クーポンの公開プレビューはこちらです。",
    },
  },

  /** {@see BPageShopIncentivesOffer} **/
  offers: {
    title: "オファー",
    sub_title:
      "顧客向けの特別オファーを作成して、1つのアイテムを購入した後、割引または無料で別のアイテムを受け取ることができます。",
    create_new: "新しいオファーを追加する",
    qualified_products: "対象製品",
    min_quantity: "最小数量",
    min_purchase: "最小購入",
    amount_usage: "使用量",

    delete_alert: {
      title: "オファーを削除する",
      message: "このオファーを削除してもよろしいですか？",
      action: "はい、オファーを削除します",
    },
    notifications: {
      delete_success: "オファーは正常に削除されました。",
    },
  },

  /** {@see BOfferAdd} **/
  offer_edit: {
    title_edit: "オファーを編集",
    title_add: "新しいオファー",

    design_style: "デザインとスタイル",
    eligible_constraints: "顧客適格制限",

    title_input: "タイトル",
    title_input_hint: "この割引コードのタイトルを入力できます",
    description_input: "説明",
    description_input_hint: "この割引コードの説明を書く",

    currency_input_message: "この通貨で利用可能なオファー。",
    qualified_products: "対象製品",
    qualified_products_message:
      "商品が対象となるには、カート内の商品の合計が最小数量以上である必要があります。",
    min_items: "アイテムの最小数量",
    min_items_message: "顧客が購入しなければならないアイテムの数",
    offered_products: "提供する製品",
    offered_products_message: "これらの製品の少なくとも1つはカートに入っている必要があります。",
    discount_percent: "割引率",
    discount_percent_message: "これらのアイテムの割引率。",
    discount_percent_hint: "割引率の金額",

    per_order: "注文あたりの最大使用回数",
    per_order_message:
      "オファーを注文に適用できる最大回数",

    count_input: "額",
    count_input_hint: "このオファーの最大限の活用",

    min_purchase: "最小購入額",
    min_purchase_hint:
      "購入価格はこの値以上である必要があります",
    limitation: "制限",

    date_start_input: "始める",
    date_start_input_placeholder: "いつクーポンを開始するかを選択します",
    date_end_input: "終わり",
    date_end_input_placeholder: "割引がいつ終了するかを選択します",
    max_actives_is_3: "同時にアクティブなオファーは3つだけです。",
    enable: "自動適用",

    notifications: {
      add: "新しいオファーが正常に作成されました。",
      edit: "オファーが正常に更新されました。",
    },
    config: {
      subtitle:
        "タイトル、説明、公開ステータスを確立して、インテリジェントな取引の作成を開始します。",
    },
    limit: {
      subtitle: "このセクションでは、このオファーの最大使用制限を設定します。",
    },
    duration: {
      subtitle:
        "オファーに特定の期間を設定する場合は、ここで期間を設定できます。",
    },
    constraints: {
      subtitle:
        "ここでオファーの資格基準と条件を設定します。オファーはこれらの条件を満たすカートアイテムに適用されます。",
    },
    discounted_products: {
      title: "割引商品",
      subtitle:
        "このオファーで割引が適用される製品を指定できます。",
    },
    cluster: {
      subtitle:
        "このオファーをクラスターに関連付けることで、他のリソースと一緒に 1 つの場所で簡単に管理できます。",
    },
  },

  /** {@see BPageCampaignAds} **/
  campaign_ads: {
    menu: {
      banner: "バナー",
      reportage: "ルポルタージュ",
      social: "ソーシャルメディア",
      offline: "オフライン",
    },
  },

  /** {@see BPageShopMarketingEmail} **/
  emails: {
    title: "メールマーケティング",
    subtitle:
      "ドラッグアンドドロップでメールをデザインし、キャンペーンをスケジュールして開始し、保持を増やし、信頼できる正確な情報を1か所で確認します。",
    cation_message:
      "⚠未確認の販売者に制限されます。 （ベータ）",

    subject: "主題",
    from: "から",
    in_que: "待っています",
    schedule_at: "でスケジュール",
    sent: "送信済",
    sends: "送信します",
    delivers: "配信",
    views: "ビュー",
    clicks: "クリック数",
    buys: "購入",
    new_email: "新しいメールを追加",
    new_email_message: "新しいマーケティングメールを作成してスケジュールする",
  },

  /** {@see BPageEmailMarketingDashboard} **/
  email_dashboard: {
    review: "レビュー",
    waiting_for_approve: "{name}による確認を待っています",
    approved_by: "{name}によって確認され、送信されたメール。",
    not_submitted_send_request:
      "このメールの送信リクエストはまだ送信されていません。",
    reviewed_by: "{name}によるレビュー",
    status: "メールステータス",
    conversion: "コンバージョン率",

    sell_performance: "販売実績",
    total_buys: "総売上高",
    amount_buy: "総売上高",
    average_sell: "平均売上高",
    sessions: "セッション",
    overview: "概要",
    purchase_amount: "購入金額",
    actions: "ユーザーアクティビティ",
  },

  /** {@see BPageEmailMarketing} **/
  email_page: {
    emails: "メール",
    edit: "編集",
  },
  /** {@see BPageAffiliator} **/
  affiliate_page: {
    affiliates: "アフィリエイトパートナー",
    orders: "注文",
    payments: "支払い",
  },

  /** {@see BPageAffiliateDashboard**/
  affiliate_dashboard: {
    link: {
      title: "項目 リンク",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。 {code}",
    },
    fix_commission: "固定手数料",
    percent_commission: "パーセンテージベースの手数料",
    last_payment: "最終の支払い",
    balance: "バランス",
    total_payment: "総支払い",
    status: "アフィリエイトパートナーのステータスと制限",
    available_for: "以下のために利用可能",
    orders_count: "注文金額",
    orders_accepted: "受理された注文",
    finance: "財務報告",

    amount_accepted: "許容額",
    amount_paid: "支払金額",
    sessions: "セッション",
    affiliate_payment: "アフィリエイトパートナーの支払い",
    amount_payment: "支払金額",
    amount_payment_hint: "正確な取引額",
    i_paid: "{amount}{currency}を{name}に支払いました",
    pay_now: "今払う",
  },

  /** {@see BPageShopPermissionRoles**/
  permission_roles: {
    new_role: "新しい役割を追加する",
    new_role_message: "チームワークを容易にします。",
    new_role_action: "新しい役割を追加する",
  },
  /** {@see Affiliate**/
  user_affiliates: {},
  /** {@see BPageShopIncentivesLottery**/
  shop_lotteries: {
    title: "宝くじ",
    sub_title:
      "あなたの顧客はゲームをして勝つことができます。ストアの顧客は、ゲームごとに10チップを消費する必要があります。たとえば、顧客に1000米ドルを獲得するチャンスを与えたい場合は、各チップの価格を100米ドルに設定する必要があります。チップごとに0の値は、購入者が購入ごとに1つのチップを受け取ることを意味します。",
    manually_send_chip: "手動でチップをユーザーに送信しますか？",
    manual_send_token_action: "手動トークン",
    lottery_enable: "宝くじは有効ですか？",
    chip_price_input: "チップ価格",
    zero_chip_message: "注文ごとに1xチップを与える",
    chip_has_price_message: "注文の{amount}{currency}ごとに1チップを与えます。",
    chip_disabled_message: "チップが無効になっています！",
    create_new: "新しい賞品を追加する",
    delete_alert: {
      title: "賞品を削除",
      message: "この賞品を完全に削除してもよろしいですか？",
      action: "はい、今すぐ削除",
    },
    notifications: {
      delete_success: "賞品が正常に削除されました。",
    },

    config: {
      subtitle:
        "店舗でゲーム体験を提供して、顧客の購入を促進します。購入を通じてトークンを獲得した顧客向けに、賞品や当選確率を設定します。ゲームプレイごとに 10 トークンかかり、初めて購入する顧客には特別な賞品を提供することもできます。デフォルトのゲームは Wheel of Fortune ですが、ショップのレイアウトに合わせてカスタマイズできます。",
    },
    empty_prize_list: "ここで賞品を作成および管理します...",
  },

  /** {@see BLotteryAdd**/
  lottery_edit: {
    title_edit: "宝くじの編集",
    title_add: "新しい宝くじアイテム",
    general_config: "一般的な構成",
    design_style: "スタイルと外観",
    enable_message: "ホイールの最大アイテムは14です。",
    title_input: "タイトル",
    title_input_hint: "短いタイトルを書いてください。",
    description_input: "説明",
    description_input_hint: "アイテムについての説明を書きます。",
    quantity: "量",
    quantity_message: "利用可能なアイテムの合計",
    image: "画像",
    image_placeholder: "アイテムの画像を選択",
    chance: "チャンス",
    chance_message: "勝率（パーセント）",
    free_for_first: "新規のお客様は無料ですか？",
    free_for_first_message: "新規のお客様はこのアイテムを獲得できます。",
    not_free_for_first_message: "この賞品は初回無料プレイではご利用いただけません。",

    amount: "賞金額",
    amount_hint: "ユーザーは注文に対してこの料金を獲得します。",
    currency_message:
      "このアイテムの通貨。その他の通貨は為替レートで換算されます。",
    discount: "割引",
    discount_message: "顧客注文の割引率",
    discount_limit: "割引制限",
    discount_limit_hint: "顧客の最大割引。",
    color: "色",
    condition: "条件",

    notifications: {
      add: "新しい宝くじアイテムが正常に作成されました。",
      edit: "宝くじのアイテムが正常に変更されました。",
    },
    config: {
      subtitle:
        "ここでは、ショップの抽選賞品を作成できます。各賞品のタイトル、説明、色、画像を設定します。",
    },
    design: {
      subtitle:
        "ここで、賞品の画像と色を選択するオプションがあります。",
    },
    constraints: {
      subtitle: "この賞品を獲得するための基準と制限を指定します。",
    },
    prize: {
      title: "賞",
      subtitle:
        "ここで賞品の詳細を設定します。オプションには、割引コード、ギフト カード、クレジット、宝くじの報酬としてのその他の割引が含まれます。",
    },
    product_input: {
      label: "製品賞",
      message: "賞品対象商品を選択してください（無料）",
    },
  },

  /** {@see BGiftcardTypeInput**/
  gift_card_types_list: {
    label: "ギフトカードタイプ",
    message: "リストからギフトカードの種類を選択します。",
  },

  /** {@see BEmailMarketingEditor**/
  email_builder: {
    service_unavailable: "メールサーバーがアカウントでアクティブではありません。",
    design_section: "あなたのメールデザインプレート",
    schedule_switch: "メール送信をスケジュールしますか？",
    schedule_placeholder: "メールを送信する時間を選択します",
  },

  /** {@see BCustomersFunnel**/
  user_funnel: {
    REGISTER_DATE: {
      title: "登録日",
      description: "ユーザーの登録日でフィルタリングします。",
    },
    LAST_BUY_DATE: {
      title: "最後の購入",
      description: "最終購入日。",
    },
    LOGIN_DATE: {
      title: "ログイン日",
      description: "最終ログイン日。",
    },
    LEVEL: {
      title: "カスタマークラブ",
      description: "カスタマークラブの会員。",
    },
    SUBSCRIBED: {
      title: "購読済み",
      description: "電子メールを受信するためのサブスクリプションを持つため。",
    },
    NOT_PURCHASED: {
      title: "購入なし",
      description: "これまで購入していないお客様。",
    },
    SEX: {
      title: "性別",
      description: "ユーザーの性別。",
    },
    LOCATION: {
      title: "位置",
      description: "ユーザーの場所。",
    },

    LIMIT: {
      title: "制限",
      description: "ユーザーの最大数に制限を設定します。",
    },

    SEGMENTS: {
      title: "セグメント",
      description: "特定の手動セグメンテーションで顧客を制限します。",
    },
  },

  /** {@see InlineHelp**/
  inline_help: {
    helps_title: "サービスユーザーガイド",
    blogs_title: "Selldoneブログの関連コンテンツ",
  },

  /** {@see BPageShopFinanceTax**/
  shop_tax: {
    region: "領域",
    label: "ラベル",
    country_tax: "国税",
    customer_tax: "顧客の付加価値税",
    business_tax: "ビジネスVAT",
    shipping: "運送",
    override: "オーバーライド",
    country: "国",
    vat_range: "VAT範囲",
    custom: "カスタム",
    regions: "地域",
    rest_world: "世界の残りの部分",
    overrides: "オーバーライド",
    dialog_set_title: "税設定",

    tax_setting: "税設定",
    vat: "VAT",

    calculate_tax_input: "税金の自動計算",
    calculate_tax_message:
      "このオプションを有効にすると、VATが計算され、注文に適用されます。",

    tax_number: "税番号",
    tax_number_message:
      "税番号を入力してください。この登録番号は、購入者の請求書に記録されます。",

    tax_included_in_price_input: "製品価格に含まれる税金",
    tax_included_in_price_message:
      "商品の価格に税額を含める場合は、このオプションを選択してください。税額は次の式で計算されます。",
    tax_included_in_price_formula:
      "税=（価格* VAT）/（1 + VAT）たとえば、価格が100ドルで、付加価値税が10％の製品の税額は9.09ドルになります。",

    tax_exclude_title: "除外 |チェックアウト時に税金が加算されます",
    tax_excluded_message:
      "税金はチェックアウト時の支払い前に計算され、顧客の証拠に応じて税抜価格に追加されます。",

    tax_on_shipping_input: "送料に税金を適用する",
    tax_on_shipping_message:
      "このオプションを選択すると、送料に税金が適用されます。",

    fixed_tax_rate: "固定税率",
    dynamic_tax_rate: "地域に基づく税金",

    locations_tip:
      "上記のリストには、[ショップの設定]>[場所]で販売する国として選択した国のみが表示されます。",
    locations_action: "店舗の場所設定",

    save_alert: "設定は保存されません！",

    pos_tax_setting: "POS税設定",
  },

  /** {@see BPageTransportation**/
  transportation_page: {
    menu: {
      dashboard: "ダッシュボード",
      transportations: "輸送方法",
      orders: "注文",
      setting: "設定",
      delivery_services: "サービス",
      delivery_persons: "宅配便",
    },

    go_to_courier_list: "宅配便リストを表示",
    go_to_service_list: "配送サービスリストを表示",
  },

  /** {@see BPageTransportationCouriers**/
  transportation_persons: {
    title: "宅配便",
    notifications: {
      success_add: "宅配便が追加されました。",
      success_reset: "統計がリセットされました。",
      success_remove: "宅配便は正常に削除されました。",
      success_update: "宅配便情報が正常に更新されました。",
    },
    reset: {
      title: "統計をリセット",
      message: "この宅配便の統計をリセットしてもよろしいですか？",
      action: "はい、今すぐリセット",
    },
    remove: {
      title: "宅配便を削除します",
      message: "この宅配便を削除してもよろしいですか？",
      action: "はい、今すぐ削除します",
    },
    add_dialog: {
      title: "新しい宅配便を追加する",
      action: "宅配便を追加する",
    },
  },
  /** {@see BPageTransportationOrders**/
  transportation_orders: {
    title: "配送の注文",
    notifications: {
      success_update: "出荷ステータスが正常に更新されました。",
      success_payment: "代金引換の支払いが正常に確認されました。",
    },
  },
  /** {@see BPageCourier**/
  delivery_person: {
    actions_title: "宅配便の設定",
    action_delivered: "発送済み",
    action_paid: "代金引換払い",
    action_returned: "戻ってきた",
    cod_confirm_action: "代金引換の支払いを確認する",
    pickup_dialog: {
      title: "このパッケージの宅配便ですか？",
      message:
        "この小包を運ぶ責任がある場合は、[はい]を選択し、そうでない場合は[いいえ]を選択します。",
    },
    status_dialog: {
      title: "ステータスを{status}に変更します",
      message: "配信ステータスを{status}に変更してもよろしいですか？",
      action: "はい、確認します！",
    },
    cod_dialog: {
      title: "代金引換支払い",
      message:
        "購入者から注文金額を受け取ったことを確認しますか？",
      action: "はい、支払いを確認します！",
    },
  },

  /** {@see BPageTransportationServices**/
  transportation_services: {
    title: "配達サービス",
    notifications: {
      success_add: "配送サービスを追加しました。",
      success_reset: "統計がリセットされました。",
      success_remove: "サービスは正常に削除されました。",
      success_update: "サービスが正常に更新されました。",
    },
    reset: {
      title: "統計をリセット",
      message: "このサービスの統計をリセットしてもよろしいですか？",
      action: "はい、今すぐリセット",
    },
    remove: {
      title: "配達サービスを削除する",
      message: "このサービスを削除してもよろしいですか？",
      action: "はい、今すぐ削除します",
    },
    add_dialog: {
      title: "新しい配達サービスを追加する",
      action: "サービスを追加",
    },
  },
  /** {@see BPageTransportationPickups**/
  transportation_pickups: {
    addresses: {
      title: "受け取り場所",
      subtitle:
        "ここで集荷先住所を追加および編集します。ユーザーは、チェックアウト ページで集荷先住所を選択できます。",
      add_action: "新しい場所を追加",
    },
  },

  /** {@see DeliveryReceiptWidget**/
  delivery_receipt: {
    title: "領収書",
    has_return: "返送",
    cashed: "現金払い",
  },
  /** {@see BPageTransportationServiceDashboard**/
  delivery_dashboard: {
    select_destinations: "リストに注文を追加する",
    price_calculation: "配送料の見積もり",
    price_calculation_action: "価格を計算する",
    add_request: "サービスのリクエスト",
    add_request_action: "サービスリクエストを送信する",
    refresh_action: "情報を更新する",
  },

  /** {@see DeliveryOrderWidget**/
  delivery_order: {
    title: "発送依頼",
    has_return: "返送",
    cashed: "現金払い",
  },

  /** {@see BPagePos**/
  cash_register: {
    menu: {
      panel: "レジ",
      orders: "注文",
      customers: "お客様",
      devices: "デバイス",
      inventory: "在庫",
    },
    payment_confirm: "支払い確認",
    payment_confirm_msg: "顧客が注文を支払った{basket_id}。",
  },

  /** {@see BPosDeviceBarcodeScanner**/
  barcode_scanner: {
    wifi_pass: "Wi-Fiパスワード",
    message: "WiFiルーターのパスワードを入力し、QRコードをスキャンします。",
    wifi_ssid: "項目 項目",
    ssid_message: "Wi-Fiネットワーク名（SSID）を入力します。",
  },

  /** {@see PosDeviceTypes**/
  pos_devices: {
    Scanner: "バーコードスキャナ",
    Scanner_desc:
      "バーコードスキャナーを使用するには、製品設定に製品SKUコードを正しく入力する必要があります。",
    Printer: "プリンター",
    Printer_desc:
      "レシートプリンターに接続して、顧客のレシートを印刷します。",
    CustomerView: "カスタマービュー",
    CustomerView_desc:
      "このページでは、注文の詳細を顧客に表示できます。",
    CardReader: "カード読み取り装置",
    CardReader_desc: "顧客による代金引換支払い用のカードリーダーデバイス。",
    ChipReader: "チップリーダー",
    ChipReader_desc: "タグを使用してカートにアイテムを追加するNFCタグリーダー。",
  },
  /** {@see BPagePosDevices**/
  pos_register_devices: {
    delete_dialog: {
      title: "デバイスを削除",
      message: "このデバイスをPOSプロファイルから削除してもよろしいですか？",
      action: "はい、今すぐ削除します",
    },
  },

  /** {@see BPageOrderPos**/
  pos_process_center: {
    title: "POS注文処理センター",
    menu: {
      label: "パッケージラベル",
      receipt: "レシート",
      back: "戻る",
      timeline: "タイムライン",
      order: "注文",
    },
  },
  /** {@see BPagePosPanel**/
  pos: {
    name: "POS",
    message:
      "ゼロセットアップ コストのオンライン POS を使用して、任意のスマートフォン、タブレット、および PC で実行するか、手動で注文を作成します。",
    add_customer: "顧客を追加する",
    set_delivery: "配送先住所の設定",
    add_giftcards: "ギフトカードを追加する",
    add_discount_code: "割引コードを追加する",
    add_coupon: "クーポンを追加",
    set_campaign: "キャンペーンを設定する",
    select_buyer: "購入者を選択してください！",
    send_to_pos: "カードリーダーマシンに送信",
    print_receipt: "領収書を印刷する",
    confirm_cash_payment: "現金での支払いを確認する",
    payment_cod: {
      title: "代金引換支払い",
      message:
        "この注文の金額は配達時に支払われます。購入者から金額を受け取った後、システムで注文を完了するには、支払いを確認する必要があります。",
    },
    payment_online: {
      title: "オンライン支払い方法を選択する",
      message:
        "以下のオプションを選択すると、支払いリンクが作成され、購入者に送信されます。このリンクを支払うことにより、注文のステータスが有料モードに変わります。支払いリンクは、顧客画面、SMS、または電子メールのQRコードをスキャンすることによって生成されます。リンクを送信するチャネルをアクティブにするには、そのオプションをクリックしてからボタンを押して、購入者に領収書を送信します。",
    },
    notifications: {
      success_pay: "注文の支払いが完了しました。",
      success_order:
        "注文は正常に作成され、顧客が支払うのを待っています。",
    },
    payment_dialog: {
      check_pay_now: "手動で支払いを確認する",
      close_action: "ダイアログを閉じます。顧客の支払いを待ちたくない",
      go_to_order: "注文ページに移動",
      paid_by_gift_card_msg:
        "ギフトカードから注文総額が引き落とされました！買い手はそれ以上支払う必要はありません。",
      cod_msg: "注文を受けた時点でお客様がお支払いいただきます。",
      online_msg: "顧客の画面でQRコードをスキャンするように顧客に依頼します。",
    },
  },

  /** {@see BPageShopProductsImporter**/
  exporter: {
    title: "データのエクスポート",
    subtitle:
      "あなたのデータはあなたのものです！ビジネス情報はいつでも標準形式でダウンロードできます。ただし、顧客のプライバシーを尊重し、スパムを送信したり、第三者と情報を共有したりしないでください。",

    excel:
      "ストア内のすべての{type}のリストと、Excel形式の完全な情報を受け取ります。",
    csv: "ストア内のすべての{type}のリストと、CSV形式の完全な情報が届きます。この形式は、{type}をストアにインポートするためのSelldoneの標準形式に準拠しています。",
  },
  /** {@see BPageShopProductsImporter**/
  importer: {
    category: {
      title: "カテゴリをインポートする",
      subtitle:
        "カテゴリのCSVファイルをここにアップロードします。標準形式に従っていることを確認してください。",
    },
    product: {
      title: "製品の輸入",
      subtitle:
        "ここに製品のCSVファイルをアップロードします。標準形式に従っていることを確認してください。",
    },
    product_images: {
      title: "画像をインポートする",
      subtitle:
        "画像情報の受信には時間がかかります。画像をインポートするときは、著作権を尊重してください。",
    },
    inventory: {
      title: "在庫の一括更新",
      subtitle:
        "ここに在庫のCSVファイルをアップロードします。最初にCSVファイルをエクスポートしてから、そのファイルを編集して、標準形式に従っていることを確認してください。",
    },

    back_to_products: "製品リストに戻る",
    back_to_categories: "カテゴリリストに戻る",
    back_to_inventory: "在庫リストに戻る",

    step_select_file: "CSVファイルを選択",
    step_send_to_server: "サーバーに送信",
    step_view_result: "結果を表示",
    step_view_que: "待機リストを表示",
    send_to_server_action: "サーバーに送信",

    shop_license: "ショップライセンス",
    max_items_limit: "最大アイテム制限",
    total_items: "総アイテム",

    /** {@see BShopCustomerImporter**/
    customer: {
      title: "顧客のインポート",
      subtitle:
        "顧客の CSV ファイルをここにアップロードします。標準形式に従っていることを確認してください。また、プライバシー規則に従う必要があります。",
    },

    /**
     * @see BVendorsImporter
     */
    vendor: {
      title: "項目 販売者",
      subtitle:
        "アップロード 販売者 CSV 項目 項目. 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目.",
      checklist: {
        title: "項目 項目",
        subtitle: "項目 項目 項目 項目 項目 項目.",
        sample_files: "項目 項目",
        valid_vendor_name_needed:
          "<b>ここでこのセクションの情報と設定を管理できます。</b><b></b><i></i><i></i>",
        assign_user_after_import:
          "項目 項目 販売者, 項目 項目 項目 項目 項目 ユーザー 項目 項目 項目 項目 項目 項目 販売者 項目.",
      },
      need_kyc_alert:
        "項目 項目 項目 項目 項目 項目 情報 項目 項目 販売者.",
      back_to_vendors_list: "項目 項目 販売者 項目",
    },
  },

  /**
   * @see BPageMarketplaceProducts
   */
  marketplace_products: {
    title: "販売者 商品",
    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
    filter_vendor: {
      placeholder: "フィルター 項目 販売者...",
    },
    filter_status: {
      placeholder: "フィルター 項目 ステータス...",
    },
  },

  /**
   * @see BPageMarketplaceRequests
   */
  marketplace_requests: {
    open_vendors_panel: "項目 販売者 項目",
    title: "販売者 項目 項目",
    subtitle:
      "項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 販売者 項目 項目 マーケットプレイス.",
  },
  /**
   * @see BPageMarketplaceSetting
   */
  marketplace_setting: {
    marketplace: {
      title: "市場",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    distribution_model: {
      title: "項目 項目",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    access: {
      title: "販売者アクセス",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    need_enable_shipping_for_vendors_tips:
      "項目 配送 項目 販売者 項目 項目 ショップ > 項目 項目 項目 項目 方法 項目.",
    transportation_available_tooltip: "項目 項目 項目 利用可能 項目 販売者.",
    transportation_not_available_tooltip:
      "項目 利用可能 項目 販売者! 項目 項目 項目 項目 項目 項目 項目 設定.",
    panel: {
      title: "販売者 項目",
      subtitle: "項目 項目 販売者 項目 項目 項目 項目.",
    },
    documents: {
      title: "ドキュメント",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
      add_document_action: "追加 書類 項目",
    },
    inputs: {
      enable: {
        false_description:
          "項目 マーケットプレイス 項目 項目 項目, 項目 項目 マーケットプレイス 項目.",
        true_description:
          "項目 マーケットプレイス 項目 項目, 項目 項目 マーケットプレイス 項目.",
      },
      product: {
        label: "新製品を追加",
        true_title: "販売者 項目 追加 商品",
        false_description:
          "項目 追加 商品 項目 項目 販売者. 販売者 項目 項目 項目 価格 項目 項目.",
        true_description:
          "販売者 項目 追加 項目 項目 項目 項目 商品 項目 項目 項目 販売者 項目.",
      },
      need_verify: {
        label: "商品 項目 項目",
        false_description: "項目 販売者 商品 項目 項目 項目.",
        false_title: "項目 項目 項目",
        true_description:
          "販売者' 項目 商品 項目 項目 項目 項目 項目 項目 項目 マーケットプレイス.",
        true_title: "項目 項目",
      },
      category: {
        label: "追加 項目 カテゴリ",
        true_title: "販売者 項目 追加 項目",
        false_description:
          "項目 追加 項目. 販売者 項目 項目 追加 商品 項目 項目 項目.",
        true_description:
          "販売者 項目 追加 項目 項目 項目 項目 項目 項目 販売者 項目.",
      },
      shipping: {
        label: "配送 項目",
        true_title: "販売者 項目 配送 項目",
        false_description:
          "販売者 項目 追加 項目 項目 項目 配送 方法.",
        true_description:
          "販売者 項目 項目 項目 項目 項目 配送 方法, 追加 項目, 項目 項目 配送 項目 項目 項目.",
      },
      hidden_customer: {
        label: "表示 項目 項目 情報",
        true_description: "項目 項目 詳細 項目 項目 項目 販売者.",
        false_description:
          "項目 項目 詳細, 項目 項目 電話 項目 項目, 項目 項目 項目 販売者.",
      },
      multi: {
        false_description:
          "項目 ユーザー 項目 項目 項目 項目 販売者 項目. ユーザー 項目 項目 項目 項目 項目 項目 項目 /販売者.",
        true_description:
          "項目 ユーザー 項目 項目 項目 販売者 項目. 項目 項目 項目 項目 項目; 項目 項目 項目 項目 項目 項目.",
        true_title: "項目 項目",
        false_title: "項目 販売者 項目 (項目)",
      },

      listing: {
        label: "項目 項目 販売者",
        true_description: "項目 項目 項目 項目 販売者. 販売者 項目 項目 項目 項目 項目 項目.",
        false_description: "項目 項目 項目 項目 販売者. 項目 項目 ショップ 項目 項目 項目 項目 項目 項目 項目.",
        requires_listing_active_text:
          "必要な情報を選択または入力してください。",
        requires_listing_active_button: "項目 項目 項目 設定",
      },



    },
    notifications: {
      update_success: "販売者 設定 項目 項目.",
    },
    add_document_dialog: {
      title: "書類 項目",
      type: {
        title: "文書タイプ",
        subtitle:
          "ここでこのセクションの情報と設定を管理できます。",
      },
      guide: {
        title: "ガイド",
        subtitle:
          "ここでこのセクションの情報と設定を管理できます。",
      },
      code: {
        title: "項目 項目",
        subtitle:
          "項目 項目 項目 項目 項目 項目 書類, フォーム, 項目 項目 項目 項目 販売者 項目 項目.",
      },
      link: {
        title: "項目 リンク",
        subtitle:
          "項目 項目 項目 リンク 項目 項目 書類 項目 項目 項目 項目 販売者 項目 項目.",
      },
      inputs: {
        title: {
          label: "タイトル",
          placeholder: "項目 項目 タイトル 項目 項目 書類 項目.",
        },
        guide: {
          label: "項目 (項目)",
          placeholder:
            "項目, 項目 項目 項目 項目 項目 項目, 項目 リンク 項目 項目 項目 項目 書類.",
        },
        code: {
          label: "項目 項目",
          placeholder: "項目 項目 項目 項目 項目...",
          message: "項目 項目 HTML 項目.",
        },
        url: {
          label: "URL",
          message: "項目 項目 URL 項目 項目 書類 項目 項目 項目...",
        },
      },
    },
  },

  /**
   * @see ShopMarketplaceModes
   */
  ShopMarketplaceModes: {
    Collective: {
      title: "項目 項目",
      description:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    Direct: {
      title: "項目 配送 項目 販売者",
      description:
        "ここでこのセクションの情報と設定を管理できます。",
    },
  },
  /**
   * @see VendorDocumentType
   */
  VendorDocumentType: {
    Identification: {
      title: "項目 項目 書類",
      description:
        "アップロード 項目 項目 項目 項目 項目 項目 項目 項目 項目 ビジネス 項目 項目 項目 項目.",
    },
    Business: {
      title: "ビジネス 項目",
      description:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    Address: {
      title: "住所 項目",
      description:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    Contract: {
      title: "項目 & 項目",
      description:
        "アップロード 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 ビジネス 項目.",
    },
    Copyright: {
      title: "項目 項目",
      description:
        "項目 項目 項目 書類 項目 項目 項目 項目 項目 項目.",
    },
    Privacy: {
      title: "項目 項目 書類",
      description:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    Embed: {
      title: "項目 フォーム",
      description:
        "項目 項目 項目 フォーム 項目 項目 項目 項目 情報.",
    },
    Link: {
      title: "項目 リンク",
      description:
        "項目 項目 項目 リンク 項目 項目 項目 項目 情報.",
    },
  },

  /**
   * @see BPageMarketplaceWallets
   */
  marketplace_wallets: {
    title: "ベンダーウォレット",
    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
    filter_vendor: {
      placeholder: "フィルター 項目 販売者...",
    },
  },

  /**
   * @see BVendorAccountTransactionsList
   */
  vendor_account_transactions: {
    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
    vendor_bank: "販売者 項目",
    order_fee: "注文 項目",
    order_refund: "注文 返金",
    reverse_fund: "項目 項目",
    payout: "項目",
  },

  /**
   * @see BPageMarketplacePayouts
   */
  marketplace_payouts: {
    title: "項目 項目",
    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
    top_up_vendor_action: "項目 項目 販売者 項目",
  },

  /**
   * @see BPageMarketplacePricings
   */
  marketplace_pricings: {
    title: "料金プラン",
    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
    add_pricing_action: "追加 項目 項目",
  },

  /**
   * @see BVendorPricingAdd
   */
  vendor_pricing_add: {
    title: "マーケットプレイス 項目 項目",
    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
    delete: {
      subtitle:
        "この項目を削除してもよろしいですか？",
      remove_pricing_action: "削除 項目 項目",
    },
    inputs: {
      title: {
        placeholder: "項目.項目., 項目 商品 項目...",
      },
      description: {
        placeholder: "項目 項目 追加 項目 メモ 項目...",
      },
      accept_delete: {
        true_description: "項目 項目 項目 削除 項目 項目 項目.",
        true_title: "項目 項目 項目 項目",
      },
    },
  },

  /**
   * @see BVendorPayoutAdd
   */
  vendor_payout_add: {
    vendor: {
      title: "販売者",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    vendor_wallet: "販売者 ウォレット",
    vendor_bank_account: "販売者 項目 項目",
    with_balance_tooltip:
      "ここでこのセクションの情報と設定を管理できます。",
    with_balance: "項目 項目",
    without_balance: "項目 項目 - 項目 項目",
    bank_transfer: {
      title: "銀行振込",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    vendor_bank: "販売者 項目",
    gateway_in_debug_mode_warning:
      "続行する前に情報を確認してください。",
    payment: {
      title: "支払い",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    history: {
      title: "歴史",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    refund: {
      title: "返金",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    inputs: {
      vendor: {
        placeholder: "選択 項目 販売者...",
      },
      note: {
        placeholder:
          "項目 項目 追加 項目 メモ 項目... 項目 メモ 項目 項目 項目 項目 項目 販売者.",
      },
      accept_refund: {
        true_description: "項目 項目 項目 項目 項目 支払い.",
        true_title: "項目 & 返金 支払い",
      },
    },
    notifications: {
      reverse_fund_success: {
        title: "項目 項目",
        message:
          "操作が正常に完了しました。",
      },
      payout_success: {
        title: "項目",
        message:
          "項目 販売者 項目 項目 項目 項目 項目 項目 項目.",
      },
    },
  },

  /**
   * @see BShopQuotaImporter
   */
  quota_importer: {
    quota: "項目",
    max_batch_msg: "項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目.",
    max_daily_limit_msg: "項目 項目 項目 項目 項目 項目 項目 項目 項目 項目.",
    extra_daily_limit_msg: "項目 項目 項目 項目 項目 項目 制限.",
    add_items_today_msg: "項目 項目 項目.",
    file_statistic_msg: "項目 項目 項目 項目.",
    used_quota: "項目 項目",
  },

  /** {@see BPageShopMarketingCampaign**/
  campaigns: {
    title: "キャンペーン",
    subtitle:
      "キャンペーンや追跡可能なリンクを作成し、信頼できる正確な情報を1か所で確認できます。私たちは、データ主導のより良い意思決定を支援します。",
    add_action: "新しいキャンペーンを追加",
    empty_message: "今すぐ最初のキャンペーンを作成してください！",
    delete: {
      title: "キャンペーンを削除",
      message: "このキャンペーンとすべてのデータを削除してもよろしいですか？",
      action: "はい、今すぐ削除",
    },
  },

  landing_categories: {
    raw: "生のテンプレート",
    all: "すべてのテンプレート",

    marketing: "マーケティングと広告",
    product: "製品導入",
    health: "ヘルス＆フィットネス",
    food: "食品と果物",
    house: "不動産＆住宅",
    device: "機械と装置",
    car: "車両",
    software: "ソフトウェア",
    clothing: "衣料品と靴",
    jewellery: "ジュエリー",
  },

  /** {@see BPageShopSettingTheme**/
  shop_theme: {
    theme_colors: "テーマカラー",
    theme_colors_description:
      "ここでこのセクションの情報と設定を管理できます。",
    products_view_mode: "ショッピングリストビュー",
    products_view_mode_desc:
      "画面サイズに基づいて、ストア内の商品の表示モードを調整できます。このモードはデフォルトで考慮され、ユーザーが表示モードを変更した場合は適用されません。",

    tabs: {
      vendor_page: "販売者 項目",
    },

    color_light: "原色",
    color_dark: "プライマリダークカラー",
    color_deep_dark: "濃い色",
    color_info: "リンク",
    light_checkout: "ライトチェックアウトテーマ",
    light_header: "軽いヘッダー",
    light_footer: "ライトフッター",
    light_filter: "カテゴリフィルターテーマ",
    checkout_color: "項目 項目",

    typography: "タイポグラフィ",
    header: "ヘッダ",
    footer: "項目",
    custom_code: "カスタムコード",
    custom_css: "カスタム CSS",
    custom_variants: "バリアント",

    wrap_product_title: {
      title: "項目 タイトル",
      subtitle: "項目 項目 項目 項目 タイトル 項目 項目 項目.",
    },

    animation: {
      title: "項目",
      static: {
        false_title: "項目 項目",
        false_description:
          "項目 項目 商品 項目 項目 項目 項目 項目 表示 項目 項目.",
        true_title: "静的",
        true_description: "項目 項目 商品 項目 項目 項目.",
      },
    },

    quick_actions: {
      title: "項目 項目",
      hover: {
        false_description:
          "項目 項目 項目 項目 項目 項目 項目 項目 項目 商品 項目.",
        true_description:
          "表示 項目 項目 & 追加 項目 項目 項目 項目 商品 項目 項目.",
        true_title: "表示 項目 項目 項目",
      },
    },
    filter_products: {
      title: "フィルター 商品",
      only_available: {
        false_description: "表示 項目 商品 項目 項目 ショップ 項目 項目 項目.",
        true_description:
          "表示 項目 利用可能 商品 項目 項目 ショップ 項目 項目 項目.",
        true_title: "利用可能 商品",
        false_title: "項目 商品",
      },
    },
    filter_categories: {
      title: "フィルター 項目",
      hide_empty_folders: {
        false_description: "表示 項目 項目 項目 項目 ショップ 項目.",
        false_title: "表示 項目 項目",
        true_title: "非表示 項目 項目",
        true_description:
          "表示 項目 項目 項目 商品 項目 項目 ショップ 項目.",
      },
    },

    product_page: {
      title: "商品 項目",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
      buy_button_color: "項目 項目 項目",
      smart_price: {
        title: "項目 項目 価格",
        true_description:
          "ここでこのセクションの情報と設定を管理できます。",
      },
      reverse_currency: {
        title: "通貨 項目 項目",
        false_title: "ノーマルモード",
        true_title: "項目 項目",
        false_description:
          "項目 通貨 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目. 項目: $95, €30",
        true_description:
          "項目 通貨 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目. 項目: 95$, 30€",
      },
      variants_selector: {
        title: "項目 項目",
        subtitle:
          "項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 商品 項目.",
      },

      tabs_order: {
        title: "項目 注文",
        reset_to_default: "デフォルトにリセット",
      },
    }, // end: product_page
  },

  /**
   * @see BShopThemeVendor
   */
  b_shop_theme_vendor: {
    onboarding: {
      title: "項目 & 項目",
      subtitle:
        "項目 項目 販売者 項目 項目 項目 項目 項目 項目 項目 項目, 項目, 項目 メッセージ.",
    },
    inputs: {
      page_vendor_login: {
        label: "販売者 項目 項目",
        message:
          "必要な情報を選択または入力してください。",
      },
      page_vendor_registered: {
        label: "販売者 項目 項目",
        message:
          "必要な情報を選択または入力してください。",
      },
    },
  },

  /** @see BShopOptionsVariants **/
  b_shop_options_variants: {
    custom_variants: {
      title: "項目 項目",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
  },
  /** @see BShopThemeTypography **/
  b_shop_theme_typography: {
    main_font: {
      title: "項目 項目 項目",
      subtitle: "項目 項目 項目 項目 項目 Google 項目.",
    },
    inputs: {
      font_family: {
        label: "項目 項目",
        message: "項目 項目 項目 値.",
      },
      font_res: {
        label: "項目 項目",
        message: "項目 項目 項目 項目.",
      },
    },
  },

  /** @see BShopThemeHeader **/
  b_shop_theme_header: {
    logo: {
      title: "項目 項目",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    header_title: {
      title: "項目 タイトル",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },

    inputs: {
      logo: {
        label: "項目 項目",
      },
      height: {
        label: "項目 項目",
      },
      width: {
        label: "項目 項目",
      },
      title: {
        label: "項目 タイトル",
        set_empty: "項目 項目 タイトル",
      },
    },
  },

  /** @see ShopThemeVariantsMode**/
  shop_theme_variants_mode: {
    smart: {
      title: "項目 項目",
      description:
        "項目 項目 項目 項目 項目 項目, 項目 項目 項目 項目.",
    },
    select: {
      title: "選択 項目",
      description:
        "項目 項目 項目 項目 項目 項目, 項目 項目 項目 項目 項目 項目 項目.",
    },
  },

  /** @see BPropertySetAdd**/
  property_set_add: {
    edit_title: "編集 項目 項目",
    add_title: "追加 項目 項目",
    config: {
      subtitle:
        "項目 タイトル 項目 説明 項目 項目 項目 項目. 項目 項目 項目 項目 項目 項目 項目.",
    },
    variants: {
      title: "バリアント",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },

    inputs: {
      title: {
        placeholder: "項目 項目 タイトル 項目 項目 項目...",
      },
      description: {
        placeholder: "項目 項目 項目 説明... (項目)",
      },
      custom_variants: {
        true_title: "項目 項目",
        false_title: "項目 項目",
        true_description: "項目 項目 商品 項目.",
        false_description: "項目 項目 項目 項目.",
      },
    },
  },

  /** @see BPropertySetVariantRow **/
  property_set_variant_row: {
    inputs: {
      values: {
        placeholder: "項目 値 項目... (項目)",
        messages:
          "項目 項目 項目 項目 項目 項目 値 項目 項目 注文.",
      },
    },
  },

  /** {@see AppTemplates**/
  app_templates: {
    default: "デフォルト",
    blue: "青い海",
    amber: "アンバー",
    green: "赤道",
    red: "吸血鬼",
    magenta: "花",
    master: "マスター",
    black: "暗黒面",
  },

  /** {@see BPageAffiliateOrders**/
  affiliate_orders: {
    title: "アフィリエイトパートナーの注文",
    table: {
      order_price: "注文金額",
      order_payment: "注文の支払い状況",
      order_link: "注文リンク",
      commission_status: "委員会のステータス",
      commission_amount: "手数料額",
      items: "アイテム",
      actions: "行動",
      create_date: "日付を作成します",
    },
    notifications: {
      update_success: "アフィリエイトステータスが更新されました。",
    },
  },

  /** {@see BPageAffiliatePayments**/
  affiliate_payments: {
    title: "アフィリエイトパートナーの支払い",
    table: {
      staff: "スタッフ",
      amount: "額",
      note: "ノート",
      date: "日にち",
    },
  },
  /** {@see BPageShuttleRoles**/
  my_roles: {
    title: "私の役割",
    message:
      "役割は、店舗の従業員に与えられるアクセスの種類です。たとえば、注文の送信または梱包を担当するスタッフ。",
  },
  /** {@see WidgetMyRoleCard**/
  role_card: {
    complete_tasks: "完了したタスク",
    reject_tasks: "拒否されたタスク",
    last_check: "最近のチェック",
  },

  /** {@see BAppConfigDialog**/
  app_config: {
    reviews: "レビュー",
    rate_now: "今すぐ評価",
    category: "カテゴリー",
    uninstall: "アンインストール",
    get_app: "アプリを取得",
    public_keys: "公開鍵",
    private_keys: "秘密鍵（セキュア）",
    config: "アプリの構成",
    app_status: "アプリケーションの状態",
    app_info: "アプリケーション情報",
    update_at: "最近の更新",
    visit_website: "ウェブサイトを訪問",
    privacy: "プライバシーポリシー",
    installs: "インストール",
    basic_profile_permission: "基本的なプロファイル情報",
    developer: "デベロッパー",
    permissions: "権限",
    total_comments: "コメント合計",
    delete_dialog: {
      title: "アプリをアンインストールします",
      message: "このアプリをストアから削除しますか？",
      action: "はい、アプリを削除します",
    },
    notifications: {
      uninstall_success: "アプリケーションは正常にアンインストールされました。",
    },
  },

  /** {@see BPageShopChannelBots**/
  shop_bots: {
    not_set: "設定されていません！",
    tokens: "トークン",
    webhook: "Webhook",
    calls: "呼び出し",
    dialog: {
      title: "{name}ボット構成",
      message:
        "エンタープライズグレードのショッピング体験を構築するための包括的なボットフレームワーク。",
    },
  },

  /** {@see BPageShopCrmCustomers**/
  shop_customers: {
    title: "顧客管理",
    subtitle:
      "顧客は、手動、一括 Excel インポート、POS、オンライン ストアなど、いくつかの方法でストアに追加できます。ユーザーがストアにログインするたびに、自動的に顧客として登録されます。",
    add_customer_action: "新規顧客を追加",

    all_customers: "すべての顧客をダウンロードする",
    filtered_customers: "フィルタリングされた顧客",
    dialog_chips: {
      title: "カスタマーチップの数を設定する",
    },
    dialog_club: {
      title: "カスタマークラブレベルを設定する",
    },
  },

  /** {@see BCustomerAdd**/
  customer_add: {
    edit_title: "顧客を編集",
    add_title: "新規顧客を追加",
    subtitle:
      "ストアに顧客を追加するには、メールアドレスまたは電話番号のいずれかを入力してください。",
    more: {
      title: "詳細を追加",
      subtitle: "通貨、顧客クラブ、セグメント、住所などを設定します。",
    },
    detail: {
      subtitle:
        "顧客の個人情報を記録してください。顧客のプライバシーを尊重してください。",
    },
    preferences: {
      subtitle: "ここで、デフォルトのユーザー通貨、顧客クラブ、セグメントを設定します。",
    },
    address: {
      subtitle:
        "このアドレスは POS で使用できます。ユーザーはこの情報を見ることはできません。",
    },
  },

  /** {@see AppPageDashboard**/
  app_dashboard: {
    status: "公開ステータス",
    statistics: "統計学",
  },
  /** {@see AppPage_Publish**/
  app_publish: {
    production_version: "プロダクションバージョン",
    beta_version: "ベータ版",
    alpha_version: "アルファ版",
  },
  /** {@see AppPublishWidget**/
  app_publish_widget: {
    header: "ウェブサイトのヘッダーを保存する",
    header_code: "ヘッダーコード",
    admin_page: "管理ページ",
    name: "名前",
    icon: "アイコン",
    url: "URL",
  },

  /** {@see AppPage_API**/
  app_api: {
    title: "APIアクセス",
    revoke_api: "APIを取り消す",
    api_key: "APIキー",
    secret: "シークレットキー",
    client: "クライアント",
    redirect_url: "URLをリダイレクトする",
    client_name: "クライアント名",
  },

  /** {@see BPageApplication**/
  app_loader_page: {
    no_ui_title: "このアプリケーションにはUIがありません！",
    no_ui_desc:
      "一部のアプリケーションでは、管理領域にユーザーインターフェイスは必要ありません。このアプリケーションは、ストアWebサイトのヘッダーセクションにのみコードを追加できます。",
    header: "ヘッダーコード",
  },
  /** {@see BPageShopFinanceReport**/
  finance_report: {
    export_title: "財務データのエクスポート",
    export_sub_title:
      "財務の詳細を1つのファイルにダウンロードします。",
    start_input_placeholder: "レポートの開始日を選択します",
    end_input_placeholder: "レポートの終了日を選択",
    download_action: "財務リストをダウンロード",
  },

  /** {@see BPageShopSettingNotifications**/
  shop_notifications: {
    title: "ショップ通知",
    message: "ストア通知の設定と設定を編集します",
    channel: "チャネル",
    status: "状態",
    events: "イベント",
    info: "情報",
    actions: "行動",
    connected: "接続済み",
    not_connected: "接続されていません！",
    connect_now: "今すぐ接続",
    send_test: "テストデータを送信する",
    disconnect: "切断する",

    dialog: {
      title: "ボット構成",
      message:
        "エンタープライズグレードのeコマースエクスペリエンスを構築するための包括的な通知フレームワーク。",
      action: "ここをクリック！",
      set_config: "設定を設定",
    },
  },
  notification_events: {
    new_order: "🛍️注文",
    payment: "💳支払い",
    return: "📦戻る",
    weekly_report: "📈ウィークリーレポート",
  },

  /** {@see BOrderDashboardDelivery} **/
  order_delivery: {
    title: "配達",
    add_to_delivery_que_action: "配送キューに追加",
    in_que: "発送待ち行列",
    message:
      "配送業者に荷物を渡した後、[<b>配達の確認</b>]ボタンをクリックします。",
    message_add_to_service:
      "このパッケージを<b>配送サービス</b>で送信する場合は、次のボタンをクリックしてください。",
    courier_action: "配達確認",
    courier_action_subtitle: "宅配業者が荷物を引き取りに来ます。",

    pickup_ready_action: "項目 項目",
    pickup_ready_action_subtitle: "項目 注文 項目 項目 項目 顧客 項目.",

    service_action: "実行確認",

    checklist: [
      "宅配便の身分証明書を確認してください。",
      "製品を適切に梱包し、タイムリーに配送することで、顧客の維持率を高めることができます。",
    ],
    manual: {
      title: "お客様からの納品確認待ちです。",
      action_received: "購入者の確認",
      action_returned: "配達返品",

      message:
        "注：顧客が注文を受け取った場合は、次のオプションを使用してフルフィルメントを完了することができます。システム内の一部の配送サービスは、配送を自動的に確認します。",
    },
    auto_complete_note:
      "一定期間が経過すると、注文状況が納品に変更されます。この期間は注文の種類によって異なり、システムによって決定されます。",
    received: {
      title: "お客様にお届けします。",
      delivered_date: "配送日",
    },
    receiver: "レシーバー",
    bill: "レシート",

    tracking: {
      title: "トラッキングコード/URLを追加",
      code: "トラッキングコード",
      url: "トラッキングURL",
      message:
        "この注文の追跡コードを提供するサービスを介して出荷した場合は、このセクションにコードと関連する追跡リンクを入力できます。この情報はお客様に表示されます。",
    },
    preferred_delivery_time: "希望配達時間",
    manage_couriers: "私の宅配便を管理する",
    manage_service: "サービスの管理",

    option_deliver_by_courier: "オプション1：宅配便で配達します。",
    option_add_to_que:
      "オプション2：配送サービスページで処理するキューに追加します。",
    option_instant_shipping: "オプション3：即納。",

    verify_delivery_input: {
      true_title: "項目 項目 項目",
      true_description:
        "注文品が顧客に配達されたことを確認しました。",
    },
  },

  /** {@see BShopHomeSelect} **/
  shop_home_edit: {
    title: "ホームページの設定",
    sub_title:
      "Webサイトのデフォルトページを設定する",

    default_home: "デフォルトのホームページ",
    default_home_placeholder: "ショップページはウェブサイトのホームページです",
  },
  /**
   * @see OReferralBank
   */
  referral_bank: {
    title: "紹介ダッシュボード",
    subtitle:
      "ご要望に応じて、手数料はご指定の銀行口座に振り込まれます。こちらに銀行情報をご入力ください。",
    no_bank_info: "銀行情報がありません!",
    actions: {
      edit_my_bank_info: "銀行情報を編集する",
    },
    bank_dialog: {
      title: "私の銀行口座情報",
      info: {
        title: "銀行",
        subtitle:
          "ここに銀行情報を入力してください。この情報は資金の送金に使用されます。該当する場合は、銀行口座がお客様の名前または会社名義であることを確認してください。",
      },
      inputs: {
        name: {
          label: "銀行名",
          message: "口座が開設されている銀行の正式名称。",
        },
        holder_name: {
          label: "口座名義人名",
          message:
            "アカウントを保有する個人または団体のフルネーム。",
        },
        account_number: {
          label: "口座番号",
          message:
            "特定の銀行口座に関連付けられた一意の番号。",
        },
        routing_number: {
          label: "ルーティング番号 (米国) またはソートコード (英国)",
          message:
            "特定の銀行支店を識別する番号（国によって異なる用語が使用されます）。",
        },
        swift: {
          label: "SWIFT/BICコード",
          message:
            "特に国際送金の場合、世界中で銀行を識別するために使用される国際コード。",
        },
        iban: {
          label: "IBAN（国際銀行口座番号）",
          message:
            "主にヨーロッパで使用されている IBAN は、国境を越えて銀行口座を識別するための国際的に合意されたシステムです。",
        },
        contact: {
          label: "連絡先",
          message: "アカウントに関連付けられている電話番号またはメールアドレス。",
        },
        note: {
          label: "ノート",
          message: "補足事項",
        },
      },
    },
    notifications: {
      save: {
        message: "銀行情報が正常に更新されました。",
      },
    },
  },

  /**
   * @see OReferralTier
   */
  referral_tier: {
    message:
      "紹介者によるすべてのサービス料金、サブスクリプション、その他の支払いから。",
  },

  /**
   * @see ReferralTiers
   */
  ReferralTiers: {
    Bronze: {
      title: "ブロンズ",
      description:
        "あなたはブロンズ ティアにいます。紹介者から 2% のコミッションを獲得しました。",
    },
    Silver: {
      title: "ティア シルバー",
      description:
        "あなたはシルバー ティアにいます。紹介者から 4% のコミッションを獲得しました。",
    },
    Gold: {
      title: "ティアゴールド",
      description:
        "あなたはゴールド ティアです。紹介者から 6% のコミッションを獲得しました。",
    },
    Platinum: {
      title: "プラチナレベル",
      description:
        "あなたはプラチナレベルです。紹介者から 8% のコミッションを獲得しました。",
    },
    Diamond: {
      title: "ティア ダイヤモンド",
      description:
        "あなたはダイヤモンド レベルです。紹介者から 10% のコミッションを獲得しました。",
    },
  },

  /**
   * @see OPageMonetize
   */
  page_monetize: {
    title: "収益化する",
    subtitle: "ビジネスチャンスへのアクセスを広げます。",
  },

  /** {@see OPageMonetizeReferral} **/
  selldone_referral_page: {
    referral_link: "紹介リンク",
    registered: "登録済み",
    accepted: "承認済み",
    bank: "銀行",
    bank_title: "引き出しの銀行情報",
    new_users: "新しい利用者",
    performance: "パフォーマンス",
    credit_mode: "クレジットモード",
    get_stickers: "ステッカーのHTMLコードを取得してコピーして貼り付ける",
    click_copy_sticker_code: "バッジをクリックして、HTMLコードをコピーします。",
  },
  /** {@see OReferralTransactions} **/
  selldone_referral_payment: {
    title: "紹介料",
    subtitle:
      "出金取引のリストです。紹介ウォレットから銀行口座またはSelldoneウォレットに資金を送金すると、ここにリストされます。",

    officer: "役員",
    amount: "金額取引",
    note: "ノート",
    date: "日にち",
  },

  /** {@see BGatewayCard} **/
  widget_shop_gateway: {
    link_account_caution:
      "アカウント（{currency}）をショップにリンクしてください！ここをクリック..",
  },

  /** {@see BProductOrderSalesPerformance} **/
  product_sell_widget: {
    title: "製品の販売実績",
  },

  /** {@see BOrderDashboardDropshippingFulfillment} **/
  fulfilment_order_widget: {
    title: "ドロップシッピングフルフィルメント",
    check_action: "ドロップシッピングを受け入れる",
    uncheck_action: "注文確認済み",
    pay_action: "アイテムの費用を支払う。",
    pay_completed: "支払い確認",
    list_of_items: "再販アイテム",

    checklist: [
      "元の販売者に間接的に販売する製品の金額を支払います。",
      "会計セクション>店舗の直送で、製品の原価をサプライヤにまとめて支払うことができます。",
      "支払い後、サプライヤーは注文を受け取り、準備後にバイヤーに直接送信します。",
    ],
    message:
      "サプライヤーに注文料金を支払った後、このセクションで注文の送信の進行状況を確認してください。",
  },

  /** {@see BPageWholesaler} **/
  drop_shipping: {
    menu: {
      dashboard: "ダッシュボード",
      orders: "注文",
      inventory: "在庫",
      shops: "リセラー",
      requests: "リクエスト",
    },
    drop_shipping_charge: "ドロップシッピング料金",
  },

  /** {@see DropshipRequestStatus} **/
  dropship_request_status: {
    PENDING: "保留中",
    ACCEPT: "承認",
    REJECT: "拒絶",
  },

  /** {@see BPageWholesalerShop} **/
  dropshipping_reseller_page: {
    menu: {
      dashboard: "ダッシュボード",
      orders: "注文",
      wallet: "財布",
    },
  },

  /** {@see BPageWholesalerShopDashboard} **/
  dropshipping_reseller_dashboard: {
    title: "リセラーダッシュボード",
  },

  /** {@see BPageWholesalerShopOrders} **/
  dropshipping_reseller_orders: {
    title: "リセラーの注文",
  },

  /** {@see BPageWholesalerShopWallet} **/
  dropshipping_reseller_wallet: {
    title: "リセラーウォレット",
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "支払い確認",
      payment_success: "支払いが完了しました。",
      buy_title: "買う",
      pay_by_giftcards: "ご注文はギフトカードで支払われました。",
      free_order: "ご注文は無料です。",
      pay_by_cod: "ご注文は代金引換として登録されています。",
      pay_by_dir:
        "ご注文は直接支払いとして登録されています。支払いを完了し、注文ページに領収書をアップロードしてください。",

      pay_title: "支払い",
      qr_code_payment: "支払いQRコードが作成されました。",
      connecting_to_online_gateway: "オンライン支払いゲートウェイに接続しています。",
    },
  },

  /** @see DropShippingAccountCharges **/
  dropship_charges: {
    notifications: {
      pay_confirm_message: "支払いが確認されました。<br>日付：{payment_at}",
      pay_fail_title: "未払い",
      pay_fail_message: "お支払いは確認できません！",
    },
  },

  /** @see BPageShopFinanceResellerFulfillment **/
  dropship_checkout: {
    pay_dialog: {
      title: "リセラーが支払いを注文する",
      balance: "アカウントの残高",
      total_cost: "総注文費用",
      need_charge: "充電する必要があります",
      no_account_cation: "アカウントがありません！卸売業者に電話してください。",
      orders: "注文",
    },
    notifications: {
      success_pay:
        "これらの注文に対する支払いが確認され、正常に完了しました。",
    },
  },
  /** @see BPageShopFinanceResellerWallets **/
  dropship_accounts: {
    charge_account: "アカウントを請求する",
    charge_dialog: {
      title: "ドロップシッピングアカウントに請求する",
      amount_input: "アカウント料金",
      charge_now: "今すぐ充電",
    },
  },

  /** @see BPageWholesalerDashboard **/
  dropship_admin_dashboard: {
    title: "リセラーリクエスト",
    today_order_count: "今日の注文数",
    yesterday_order_count: "昨日の注文数",
    total_7_days: "過去7日間の注文総数",
  },

  /** @see BProductAddDropshipping **/
  dropshipping_products: {
    no_shops:
      "申し訳ありませんが、店舗が見つかりません。将来的にはもっと多くの店舗があるので、あなたは彼らの製品をあなたの店に置くことができます。",
    show_all_shops: "すべてのお店を表示",
    show_eligible_shops_message: "対象店舗を表示",
    show_all_message: "あなたはすべての店を見ることができます",
    current_shop: "現在のお店",
    request_account: "アカウントをリクエストする",
    request_accepted: "リクエストを受け付けました",
    request_rejected: "リクエストが拒否されました",
    request_pending: "リクエストを保留..",
    notifications: {
      add_product: "ストアに追加された製品。",
      request_access:
        "アクセスリクエストを卸売業者に正常に送信しました。",
    },
  },

  /** @see BProductDropshippingAbstractView **/
  product_dropshipping: {
    need_re_enable:
      "この商品は元の販売者によって変更されました。これらの価格変更により、ストアの商品が無効になりました。変更を確認し、製品の再アクティブ化に同意する場合は、下のボタンを押してください。",
    need_re_enable_action: "同意し、変更とアクティベーションを適用します",
    changed_value:
      "この商品は元の販売者によって編集されています。変更を確認し、製品に変更を適用することに同意する場合は、下のボタンをクリックしてください。",
    changed_value_action: "同意し、変更を加えます",
    parent_deleted: "このアイテムは元の販売者によって削除されました。",
    parent_closed:
      "この商品は元の販売者によって無効にされています！あなたはあなたの店でこの製品を売ることができません、しかし元の売り手が製品を再び活性化するならば、あなたはあなたの店でこの製品を再び活性化することができます。",
    notifications: {
      re_enable_success: "この製品は再アクティブ化されました。",
      update_success:
        "この製品情報は、元の製品情報で更新されました。",
    },
  },

  /** @see BPageProductDropshipping **/
  product_dropshipping_admin: {
    title: "ドロップシッピング",
    save_alert:
      "この製品のドロップシッピング設定が変更されました。変更を保存しますか？",
    reselling_message:
      "このオプションを有効にすると、他の販売者があなたの商品を自分のストアに追加できるようになります。",
    reselling: "ドロップシッピングを有効にする",
    price_merchants: "商人の価格",
    price_commission: "マーチャントコミッション（固定）",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "空き状況を待っています",
    inform_me_when_available: "利用可能になったら通知してください。",
    pay_buy: "支払いと購入",
    quantity: "カウント",
    quantity_in_basket: "カート内のアイテム",
    count_unit: "バツ",
    remove: "削除する",
    add_to_basket: "カートに追加",
    book_now: "今予約する",
    reserve_now: "今すぐ予約する",
    buy_now: "今すぐ購入",

    buy: "買う",
    notifications: {
      inform_add_success: "利用可能になり次第お知らせします。",
      inform_remove_success: "順番待ちリストから削除されました。",
    },
  },
  /** @see SProductOverview **/
  product_info: {
    fake: "偽",
    action: "競売",
    compare_limit: "10アイテム制限",
    compare_add: "比較リストに追加",
    compare_be_in_list: "比較リスト",

    type: "タイプ",
    brand: "ブランド",
    category: "カテゴリー",
    discount: "割引",
    track_price: "トラック価格",
    waiting_for_auction: "オークションを待っていますか？",
    inform_auction: "オークション時に通知する",
    return_in_days: "{days}日保証返品",
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

    offer_message: "{min_quantity}を購入すると、これらのアイテムが{percent}％オフになります",
    up_to: "注文ごとに最大{per_order}x",
    get_free: "自由になる",
    get_off: "{percent}％オフをゲット",
  },

  /** @see SStyler **/
  styler: {
    size_class: "サイズとクラス",
    delete_bg: "背景画像を削除する",
    bg_color: "背景色",
    section_style: "セクションスタイルを設定する",
    link: "リンクを設定",
    show_products: "製品/カテゴリーリスト管理",
    show_product: "製品を選択",
    delete_section: "セクションを削除",
    text_color: "テキストの色",
    tex_align: "テキストの配置",
    text_style: "テキストスタイル",
    bg_image: "背景画像",

    product: {
      title: "製品を選択",
    },

    /** @see SPageProductsFilter **/
    products: {
      title: "製品とカテゴリのリスト管理",
      sort_options: "並べ替えと表示の設定を選択します",
      item_types: "商品/カテゴリのみを表示",
      product_only: "製品のみ",
      category_only: "カテゴリのみ",
      no_category: "あなたの店にはカテゴリーがありません。",
      limit: "製品の制限",
      limit_message: "製品の結果カウントを入力してください",
      select_categories: "利用可能なカテゴリを選択",
      categories_limit: "カテゴリ制限",
      categories_limit_msg:
        "カテゴリの最大数を入力します。無制限の場合はゼロを設定します。",
    },
  },

  /** @see BPageShopCrmChat **/
  shop_contacts: {
    popup: "ポップアップサポートを有効にする",
    popup_message:
      "このオプションを有効にすると、ストアの右下にサポートキーが表示されます。",
  },

  /** @see BPagePopup **/
  popup_page: {
    preview: "ライブポップアップを表示",

    menu: {
      design: "設計",
      appearance: "外観",
      filter: "フィルター",
      setting: "設定",
    },
    notifications: {
      save: "ポップアップは正常に保存されました。",
      edit: "ポップアップが正常に更新されました。",
    },
  },
  /** @see LMenuLeftPopupAppearance **/
  popup_appearance: {
    position: "ポジション",
    position_desc:
      "この通知のページ上の表示場所を指定します。",
    width: "幅",
    width_desc: "最大ページ幅を設定できます。",
    height: "身長",
    height_desc: "ページの最大の高さを設定できます。",
    radius: "コーナー半径",
    radius_desc:
      "このセクションでは、通知のコーナーの曲率半径を設定できます。",
    shadow: "風邪",
    shadow_desc: "ポップアップウィンドウをシェーディングしますか？",
    delay: "遅延を表示",
    delay_desc:
      "ユーザーがストアに入ると、この時間が経過すると、ユーザーに通知が表示されます。",
    hide: "遅延を非表示",
    hide_desc:
      "ショーの数秒後に通知が自動的に閉じるように設定できます。値0は、通知が自動的に閉じられないことを意味します。",
    transition: "ポップアップアニメーション",
  },

  /** @see BPagePopupFilter **/
  popup_filter: {
    registered: "メンバーシップとログイン要件",
    registered_desc:
      "この通知をストアユーザーまたはゲストにのみ表示するように選択できます。",
    only_guests: "ゲストのみ",
    only_users: "ログインしたユーザーのみ",
    purchased: "購入履歴",
    purchased_desc:
      "この通知は、すでに購入したユーザーまたはまだ購入していないユーザーにのみ表示するように選択できます。",
    no_purchase: "まだ購入していません",
    yes_purchase: "以前に購入した",
    sex: "性別",
    sex_desc:
      "この通知を特定の性別のユーザーにのみ表示しますか？",
    age: "最低年齢",
    age_desc:
      "6より大きい値を入力する場合、ユーザーはログインしており、生年月日を入力している必要があります。",
    levels: "カスタマークラブレベル",
    levels_desc:
      "ユーザーが以下で選択したレベルのいずれかを持っている場合、この通知がユーザーに表示されます。",
    countries: "場所の制限",
    countries_desc:
      "この通知を特定の国からのユーザーにのみ表示しますか？",
  },

  /** @see BPagePopupSetting **/
  popup_setting: {
    published: "公開ステータス",
    repeat: "繰り返す",
    repeat_msg:
      "この通知をユーザーに複数回表示しますか？",
    intervals: "ポップアップ表示の継続時間",
    intervals_msg:
      "ユーザーに通知を表示する間の最小時間が経過している必要があります。",
    designer_zone: "デザイナーゾーン",
    title: "ポップアップタイトル",
    note: "デザイナーノート",
    image: "表紙画像",
    delete: {
      title: "消去",
      sub_title:
        "ポップアップを削除すると、戻り値はありません。必ず確認してください。",
      action: "このポップアップを削除する",
    },
    notifications: {
      delete: "ポップアップが削除されました。",
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
      templates: "テンプレート",
      provider: "プロバイダー",
    },

    manage: {
      title: "SMSを管理する",
      subtitle:
        "あなたはここであなたの店によって送られたテキストメッセージの内容を見ることができます。メッセージングサービスへの検証パターンの登録には制限があるため、現時点ではテキストメッセージをパーソナライズすることはできません。",
    },

    template: {
      title: "テンプレート",
      valid_message: "カスタム SMS メッセージを作成できます。",
      provider_not_enable_message: "SMS プロバイダーが有効になっていません。",
      need_custom_provider_message:
        "カスタマイズされた SMS メッセージは、カスタム プロバイダーを設定した場合にのみ機能します。",
      add_new: "新規追加",
      disable_reason: {
        set_provider: "まずはプロバイダーを設定しましょう!",
        provider_is_disabled: "プロバイダーが無効です。",
        otp: "OTP - カスタマイズ不可!",
        select_another_provider: "別のプロバイダーを選択してください。",
      },
      enable_only_filter: "有効なもののみ表示",

      text_template_not_supported_msg:
        "プロバイダーはプレーンテキスト メッセージをサポートしていません。",
      structure_template_not_supported_msg:
        "プロバイダーは構造化メッセージをサポートしていません。",

      structured_data: "構造化データ",

      menu: {
        reset_error: "エラーをリセットする",
        send_test: "テストメッセージを送信",
      },
    },
    template_edit: {
      title_add: "新しいメッセージテンプレートを追加",
      title_edit: "メッセージテンプレートを編集",
      config: {
        title: "メッセージ設定",
        subtitle:
          "SMS プロバイダーの Web サイトで SMS メッセージのテンプレートを作成し、ここでコードとデータ構造を指定できます。この情報はプロバイダーに転送され、実際の SMS メッセージが生成されます。",
        code: "コード",
        language_msg: "デフォルトとして設定するには、空白のままにしておきます。",
        enable_msg: "このテンプレートはメッセージを作成するために使用されます。",
      },
      text: {
        title: "プレーンテキスト",
        subtitle:
          "ここにパーソナライズされた SMS メッセージを入力します。動的な値は、ユーザーに送信される前に実際の値に置き換えられます。",
        message: "メッセージ",
        reset_to_default: "デフォルトにリセット",

        auto_fill: {
          title: "自動入力パラメータ",
          subtitle:
            "これらの各パラメータをテキスト内で使用すると、Selldone によって対応する値に置き換えられます。",
        },

        sample: {
          title: "サンプルメッセージ",
        },
      },
      template: {
        title: "構造テンプレート",
        subtitle:
          "ここでテンプレートのキーと値を設定できます。テンプレート コードは SMS サービス プロバイダーで設定したものとまったく同じである必要があります。 <code>key</code>はプロバイダーがコードを送信するときに使用するものです。テンプレートの<code>value</code>フィールドが空の場合、 <code>{code}</code>テンプレート コードと見なされます。",
        add_new_parameter: "新しいパラメータを追加",

        auto_fill: {
          title: "自動入力パラメータ",
          subtitle:
            "これらの各パラメータを値として設定すると、Selldone が対応する値に置き換えます。簡単にするために、SMS プロバイダーでデフォルト値をテンプレートとして定義することをお勧めします。この場合、ここでパラメータ値を定義する必要はありません。",
        },
        request: {
          title: "サンプルペイロード",
        },
        sample: {
          title: "サンプルテンプレートメッセージ",
          subtitle: "このテンプレートをコピーして SMS プロバイダーに貼り付けることができます。",
        },
        add_message_action: "メッセージテンプレートを追加",
      },
    },
  },
  /** @see SmsTemplateMode **/
  sms_template_mode: {
    text: {
      title: "プレーンテキスト",
      desc: "自動置換パラメータを使用してテキストからメッセージが作成され、送信されます。",
    },
    template: {
      title: "構造テンプレート",
      desc: "パラメータからオブジェクトが作成され、プロバイダーに送信されます。",
    },
  },

  /** @see BShopSmsProvider **/
  shop_sms_provider: {
    title: "カスタムSMSプロバイダー",
    reset_error: "エラーをリセットする",
    subtitle:
      "カスタム SMS サービス プロバイダーを設定し、認証 SMS と会社名をカスタマイズします。デフォルトのプロバイダーは、ホワイト リストに登録されている一部の国で認証 SMS と通知メッセージを送信するだけです。",
    plain_text: "プレーンテキスト",
    structural_template: "構造テンプレート",
    errors_limit_msg:
      "サービスが 100 エラーを超えると、自動的に無効になります。エラーをリセットして再度有効にすることができます。",

    enable_input: {
      false_description:
        "一部の国では、OTP メッセージは Selldone を通じて送信され、その他の注文通知 SMS も送信されます。",
      true_description:
        "SMS メッセージはサービス プロバイダーを使用して配信されます。",
    },
    test_input: {
      true_title: "構成の検証",
      true_description:
        "あなたの電話番号 📞 <b>{phone}</b>にテスト メッセージを送信します。料金はかかりますが、すべてが正常に機能することを確認できます。",
    },
    sync_action: {
      title: "行動",
      subtitle:
        "一部の SMS サービスでは、キャンペーン、マーケティング、その他の機能などの追加サービスが提供されています。連絡先や追加情報を同期すると、より迅速に機能を使用できます。",
      action: "連絡先を同期する",
    },
    tokens: {
      title: "パラメータ",
      subtitle:
        "SMS サービス プロバイダーとショップをリンクするには、次のパラメータを設定します。",
    },
  },
  sms_messages_options: {
    all: {
      title: "OPT + 注文通知",
      description:
        "認証メッセージと注文通知が送信されます。",
    },
    otp: {
      title: "OTPのみ",
      description: "認証メッセージが送信されます。",
    },
  },

  /** @see BPageShopSettingEmail **/
  shop_emails: {
    title: "メールを管理する",
    sub_title:
      "このセクションには、ストアから顧客とマネージャーに送信された電子メールのリストが表示されます。メールは、ストアに入力した情報に基づいて自動的に設計および作成されます。また、メッセージや画像をパーソナライズする可能性は、将来的に一般に公開される予定です。",

    tabs: {
      preferences: "環境設定",
      templates: "テンプレート",
      provider: "プロバイダー",
    },

    preferences: {
      title: "通知メール",
    },
  },

  /**
   * @see BShopEmailProvider
   */
  shop_email_provider: {
    title: "カスタムメールサーバー",
    subtitle:
      "メール サービス プロバイダーを接続して、カスタム ドメイン経由でメールを送信します。",
    provider: "プロバイダー",
    enable_input: {
      false_description: "メールはmyselldoneドメイン経由で送信されます。",
      true_description: "メールはカスタムメールドメイン経由で送信されます。",
    },
    config: {
      title: "構成",
      subtitle:
        "ショップのカスタム メール サービスを構成するには、サービス API キーとその他の必要な設定を入力します。",
    },
    sender: {
      title: "から",
      subtitle:
        "顧客にメールを送信する際に使用される、デフォルトの送信者名とメール アドレスを設定できます。",
    },

    inputs: {
      from: {
        label: "メールから",
      },
      from_name: {
        label: "差出人名",
      },
    },

    actions: {
      send_test_email: "テストメールを送信する",
    },

    messages: {
      provider_error_limit:
        "サービスが 100 エラーを超えると、自動的に無効になります。エラーをリセットして再度有効にすることができます。",

      encryption_ports_guide:
        "メール プロバイダーは、使用可能なポートに基づいて、SSL、TLS、または暗号化されていない接続を提供する場合があります。接続時にエラーが発生する場合は、暗号化モードを変更すると問題が解決する可能性があります。標準の<b>TLS</b>はポート<b>587</b>を使用し、 <b>SSL は</b>ポート<b>465</b>を使用します。",

      enable_receive_test:
        "変更を保存すると、 <b>{email}</b>にテストメールが届きます。新しい構成でテストメールを送信する前に、変更を保存してください。",
    },
  },

  /** @see InstagramViewMedias **/
  instagram: {
    title: "Instagramでの販売",

    add_product: "新製品を追加する",
    create_product: "製品を作成する",
    link_box_msg:
      "このリンクをInstagram、Telegram、またはその他のソーシャルメディアの略歴に入れて、視聴者がより速く、より簡単に、より多く、そして最終的にはより多く購入できるようにします。",
    remove_account: "Instagramリンクの変更/削除",
  },
  /** @see BPageShopChannelInstagram **/
  shop_channel_instagram: {
    title: "Instagram 項目 項目",
    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "やることリスト",
      message:
        "あなたがやりたい仕事のタイトルを書いて、それがどこまで進んだかを買い手に知らせてください。",
    },
    booking: {
      title: "予約/予約",
      message:
        "この注文は指定された時間に処理されます。お客様は希望の期間を選択しました。選択した期間に変更を加える場合は、お客様に知らせてください。",

      selected_checkin: "選択された顧客のログイン日",
      selected_checkout: "選択した顧客の終了日",
      change_days_question:
        "お客様が選択した日中に変更する必要がありますか？",
      show_calendar: "注文のカレンダーを表示する",
    },
    pricing: {
      title: "価格設定",
      message: "このサービスにはいくらかかりますか？",
    },
    subscription: {
      title: "サブスクリプション",
      message:
        "このサービスを毎日購入することで、サブスクリプション期間を選択できます。すでに入力したデフォルト値を変更するかどうかを購入者に知らせます。",
      duration: "サブスクリプション期間",
    },
    charge: {
      title: "充電",
      message:
        "このアイテムの料金を指定しました。お客様が購入した商品の請求額を変更することができます。",
      charge: "充電",
    },

    save_item: "確認して設定する",
    start_service: "サービス開始",
    end_service: "終了",
  },
  /** @see BOrderDashboardServiceTasks **/
  service_tasks: {
    notification_finish: {
      title: "サービスの終了",
      message:
        "これが完了したら、確認キーを押して注文を完了して閉じます。",
      action: "注文を確認して完了します",
    },
  },

  /** {@see BProductEditOutputs} **/
  product_outputs: {
    outputs_form: "ディスプレイの情報構造（出力）",

    virtual: {
      title: "製品出力情報フォーム",
      sub_title:
        "購入後にユーザーに表示したい情報。このフォームは、ギフトカードなどの仮想製品の販売に特に適用されます。",
    },
    service: {
      title: "サービスデザイン",
      sub_title:
        "まず、サービスタイプを選択し、必要な情報を入力します。たとえば、ToDoリストを定義したり、顧客に予約時間や予定を尋ねたりすることができます。",
    },
  },

  /** {@see BProductServiceManage} **/
  service_design: {
    type: "サービスの種類",
    type_message:
      "この製品に提供するサービスの種類を選択してください。各項目を選択すると、該当するフォームが表示されます。選択したサービスの種類によっては、注文時にお客様からより多くの情報を受け取る場合があります。",
  },

  /** {@see AvocadoHomePage} **/
  avocado: {
    name: "アボカド",
    title: "すべてのソーシャルメディアでの迅速、正確、そして楽しい販売",
    message:
      "顧客からお金を稼ぐために必要なのは、1つの金額と1つのタイトルだけです。お金はあなたのアカウントに直接入金され、あなたの顧客はユニークなショッピング体験をするでしょう。",
    new_order: "新しい法案",
    create_by_seller_title: "請求書を作成する",
    create_by_seller_message:
      "特定の金額の請求書を作成して誰かに送信する場合は、下のボタンを押して請求書フォームを表示できます。生成されたリンクを購入者に提供して、購入者の注文を支払い、追跡します。",

    create_by_buyer_title: "アボカドフォーム",
    create_by_buyer_message:
      "このセクションをアクティブにすると、リンクが表示され、購入者が注文できるようにこのリンクを購入者に提供します。",

    orders_list: "注文リスト",
    active_mode: "領収書がアクティブな注文",
    inactive_mode: "非活性",
    active_message:
      "このソースをアクティブ化することにより、顧客は以下に表示されるリクエストフォームから製品を注文できるようになります。",
    avocado_form_link_message:
      "このリンクをInstagram、Telegram、またはその他のソーシャルメディアの略歴に入れて、視聴者がより速く、より簡単に、そして最終的にはより多くを購入できるようにします",
    need_address: "アドレスを取得",
    need_address_msg:
      "購入者の場所と住所を取得する必要がある場合は、このオプションを選択してください。",
    avocado_link_message:
      "注文を支払うには、上記のリンクを顧客に提供するだけで十分です。お客様は、このリンクから注文をフォローできます。",
    edit_order: "注文の編集",
    progress: "進捗率",
    buyer_link: "バイヤーリンク",
    buyer_link_message:
      "このリンクを購入者に提供します。購入者は、このリンクを介して注文の支払いと追跡を行うことができます。このリンクはコード化されており、リンクが誰かに提供された場合、彼は支払いをして情報を見ることができます。このリンクは60日間有効です。コピーするには、以下のリンクをクリックしてください。",
    OrderConfirm_done: "注文が確認されました。",
    OrderConfirm_message:
      "支払いを確認し、注文が正しい場合は、下のボタンをクリックしてください。",
    OrderConfirm_action: "注文確認",
    PreparingOrder_message:
      "顧客の注文を発送する準備ができたら、下の[OK]ボタンをクリックします。",
    PreparingOrder_action: "注文は発送の準備ができています",
    finish_message:
      "この注文が完了したら、終了ボタンを押してこの注文を閉じます。",
    finish_action: "完全な注文処理",
    finish_dialog: {
      title: "注文を完了する",
      message: "注文は完了しましたか？それを閉じてもよろしいですか？",
      action: "はい、注文の完了を確認します",
    },
    configuration: "アボカドの設定",
    delivery_price: "輸送費",
    edit_avocado_action: "情報の編集",
    submit_pricing_avocado_action: "注文の価格を送信する",
    add_avocado_action: "請求書リンクを作成する",
    avocados_list: "アボカドのリスト",
    not_pricing: "このアイテムは価格設定されていません！",

    show_all: "すべて表示する",
    show_accepted: "確認済みのアイテムを表示する",

    notifications: {
      update_success: "アボカドは正常に更新されました。",
      add_success: "アボカドは正常に作成されました。",
    },
  },

  /** {@see BDashboardShopOrdersAvocado} **/
  avocado_orders: {
    title: "アボカド",
    title_small: "ソーシャルメディアセールス",
    pending_orders: "有効な注文",
    avocado: "アボカドを注文する",
  },
  /** {@see BAvocadoInvoice} **/
  avocado_process: {
    step1: "価格設定",
    step1_msg:
      "各アイテムの価格を入力し、緑色のボックスをオンにします。アイテムを販売できない場合は、ステータスを拒否に変更します。",
    step2: "請求書を確認する",
    step2_msg:
      "この注文の請求書を作成します。請求書のタイトルと説明を入力できます。注文金額は、アイテムの合計価格に基づいて自動的に計算されます。",
    title_input: "請求書のタイトル*",
    show_to_customer: "この情報は購入者に表示されます。",
    description_msg:
      "この注文のメモを書きますか？この情報は購入者に表示されます。",
    price_input: "注文金額 *",
    tax_none: "無税",
    tax_included: "価格に含まれています",
    tax_add: "税金を追加",
    tax_message: "料金に税金を含めるかどうかを選択できます。",
    tax_included_messages: "料金には税金が含まれています。",
    tax_add_messages: "最終価格に税金を加算する必要があります。",
    invoice: {
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
  },

  /** {@see BPageProductHyper} **/
  /** {@see BPageShopChannelHyper} **/
  hyper: {
    name: "ハイパー",
    print_label:
      "次のラベルを印刷して、製品の前に置きます",
    hyper_form_link_product_message:
      "顧客はこのリンクから{product}をすばやく購入できます。また、QRコードをスキャンして同じリンクを入力します。",
    title: "ハイパークイックセール",
    message:
      "Hyper Selldone販売チャネルの助けを借りて、顧客はあなたの側から何のアクションも必要とせずにQRコードをスキャンすることによって製品を購入することができます。この方法を使用して、お祭り、展示会、または忙しい式典でいくつかのアイテムをすばやく大量に販売します。このセクションでHyperをアクティブ化した後、[製品管理]セクションで物理的な製品のハイパーQRコードを作成できます。",
    orders_list: "ハイパーオーダーリスト",
    active_mode: "ハイパーセールスチャネルがアクティブ化",
    inactive_mode: "非活性",
    active_message:
      "このオプションを有効にすると、Fast-Sales-Codesを作成できる可能性が各製品の管理セクションに表示されます。",
    hyper_form_link_message: "あなたの店のハイパーページリンク",
    configuration: "ハイパー設定",
  },

  /** {@see BDashboardShopOrdersHyper} **/
  hyper_orders: {
    title: "ハイパー",
    title_small: "セールスレポート",
    hyper: "受注",
  },

  /** {@see BProductInventoryManagementFile} **/
  product_file: {
    no_file: "まだファイルがアップロードされていません！",
    delete_dialog: {
      title: "ファイルを削除する",
      message: "このファイルを削除してもよろしいですか？",
      action: "はい、今すぐ削除",
    },
    notifications: {
      delete_success: "ファイルが正常に削除されました。",
    },
    drag_sort_msg: "ファイルをドラッグして並べ替えることができます。",
    paid_mode_msg: "ユーザーは製品を購入した後にのみダウンロードできます。",
    free_mode_msg:
      "ユーザーは無料でダウンロードできます。サンプル ファイルは 50 MB 未満である必要があります。",
    has_gust_shopping_msg:
      "ショップの設定 > フローでゲスト購入が有効になっているため、登録ユーザーとゲストユーザーはファイルをダウンロードできます。",
    only_registered_shopping_msg:
      "サンプルファイルをダウンロードできるのは登録ユーザーのみです。",
    file_count_limit: "ファイル数の制限",
  },

  /**
   * @see BProductLocationRestrictionsList
   */
  product_location_restrictions: {
    title: "利用可能な場所",
    subtitle:
      "製品またはサービスが、国と郵便番号で定義された特定の地域でのみ利用できる場合は、ここでそれらの場所を指定できます。これらの場所の制限は、製品レベルに適用されます。製品ページで、顧客は場所を選択するように求められます。選択した地域で製品が利用できる場合は、購入手続きに進むことができます。",

    add_location_action: "国を追加",
    no_restriction: "制限なし",
    import: {
      title: "負荷プロファイル",
      subtitle: "保存した場所のプロファイルを選択します。",
    },
    export: {
      title: "プロフィールを保存",
      subtitle: "将来使用するために場所を保存します。",
    },
    has_restriction_input: {
      title: "場所制限あり",
      description:
        "所在地制限により、お客様は指定された国と郵便番号の範囲内でのみこの製品を購入できます。",
    },
    zip_pin_code: "郵便番号",
    no_country_selected_error:
      "郵便番号のリストとともに、少なくとも 1 つの国名を含めてください。そうしないと、この製品は利用できません。",
    tips: "<b>「+ 国を追加」</b>ボタンをクリックして、新しい場所セットの作成を開始します。完了したら、右上の<b>⋮ メニュー</b>をクリックし、 <b>「プロフィールを保存」</b>を選択して保存できます。",
    need_save_message:
      "製品の場所制限設定が変更されました。これらの変更を保存するには、下の「保存」ボタンをクリックしてください。",

    add_dialog: {
      title: "国を追加",
      message:
        "国を選択して「追加」をクリックします。これにより、国がテーブルに追加され、郵便番号、PIN コード、都市名、または地域名を割り当てることができるようになります。",
    },
    save_profile_dialog: {
      title: "場所のプロフィールを追加",
      message:
        "この場所のセットを保存するには、名前を入力してください。保存されたこの場所のセットは他の製品に適用でき、1 回のクリックで場所をすばやく読み込むことができます。指定された名前のプロファイルがすでに存在する場合は、新しい値で更新されます。",
      title_input: {
        title: "プロフィールタイトル",
        placeholder: "カテゴリ名、またはストア名、...",
      },
    },
    load_profile_dialog: {
      title: "場所プロファイルを読み込む",
      message:
        "ここで以前に保存した場所セットを選択して、場所を読み込むことができます。",

      select_input: {
        title: "ロケーションプロファイル",
        placeholder: "プロフィールを選択してください...",
      },
    },
  },

  /** {@see NotificationTopBar} **/
  notification_top_bar: {
    free_charge: "🎊{amount}を請求し、{amount_total}クレジットを取得します。",
    charge_action: "無料クレジットの請求",
    claim_title: "無料クレジットを請求する",
    claim_charge_caution:
      "注：ウォレットアカウント間で通貨を変換することはできません。したがって、ストアで交換される通貨に適したアカウントを選択してください。",
    account_input: "預金口座",
    account_msg: "このアカウントには料金が適用されます",
  },

  /** {@see BDashboardShopApplications} **/
  selldone_applications: {
    title: "ご注文をお見逃しなく！",
    msg: "いつでもどこでもあなたのビジネスを管理します。",
    scan_qr_code: "携帯電話で私をスキャンしてください!",

    notification: {
      title: "通知",
      subtitle: "新しい注文の通知を受け取ります。",
    },
    order: {
      title: "注文",
      subtitle: "注文を確認し、管理します。",
    },
    product: {
      title: "製品",
      subtitle: "在庫管理と商品プレーン。",
    },
  },

  /** {@see BPageShopSettingSeo**/
  shop_seo: {
    title: "SEO構成",
    msg: "有機的な顧客獲得チャネルを強化することにより、オンラインマーケティングに早送りします。",
    auto: {
      title: "自動SEOエンジン",
      msg: "Webサイトのオーディエンスと検索エンジンにシームレスなモバイルエクスペリエンスを提供します。",
    },

    amp: {
      title: "AMP",
      msg: "AcceleratedMobilePagesの自動生成。",
    },
  },

  /** {@see BPageShopSettingEmail} **/
  shop_preferences: {
    order: {
      title: "注文",
      desc: "顧客が注文を支払うと、注文情報を含む電子メールがこのアドレスに送信されます。",
    },
    return: {
      title: "戻る",
      desc: "購入者から返品された場合は、このメールが送信されます。このメールの送信は、購入したプランによって異なります。",
    },
    pos: {
      title: "POS",
      desc: "POS販売レポートがこのメールに送信されます。",
    },
    avocado: {
      title: "アボカド",
      desc: "アボカドの注文の日報を送信します。",
    },
    accounting: {
      title: "会計",
      desc: "財務レポートと更新を保存します。",
    },
    subscription: {
      title: "サブスクリプション",
      desc: "最近購入したプランのステータスは、サブスクリプションの開始と終了の通知とともに記録されます。",
    },
    technical: {
      title: "テクニカル",
      desc: "ドメインとサービスのステータスに関する技術的な通知。",
    },
    report: {
      title: "レポート",
      desc: "週次および月次のレポートがこのメールに送信されます",
    },
    review: {
      title: "レビュー",
      desc: "ストアでのプロセスを確認する必要がある場合は、関連するメールがこのアドレスに送信されます。たとえば、ストアユーザーへのマーケティングメールの送信を確認します。",
    },
    bulk: {
      title: "項目 注文 レポート",
      desc: "項目 項目 項目 項目 項目 項目 詳細 項目 注文 項目 項目 項目.",
    },
  },

  /** {@see BPageShopSettingLanguages} **/
  shop_languages: {
    title: "店舗の言語",
    sub_title: "ストアの自動翻訳パッケージをインストールしてアクティブ化します。",
    message:
      "ストアには最大10個の言語パックをインストールできます。さらにパッケージをインストールする必要がある場合は、お問い合わせください。",
  },

  /** {@see SInviteFriends} **/
  invite_friends: {
    title: "あなたのビジネスについて世界に知らせましょう！",
    msg: "友達にSelldoneを紹介します。サインアップすると99ドルの会社バウチャーを受け取り、最初の取引が完了すると15ドルのスタートアップバウチャーを受け取ります。",
    invite: {
      title: "SelldoneビジネスOSに参加して、99ドルの無料バウチャーを入手してください。",
      description:
        "素晴らしいツールを使ってオンラインでビジネスを始めるためにSelldoneにあなたを招待します。",
      hashtags: "eコマース、ウェブサイトビルダー",
      quot: "私はSelldoneによってオンラインストアを構築しました、あなたは今あなたのビジネスをすることもできます。",
    },
  },

  /** {@see BPageShuttleShops} **/
  shops_list: {
    title: "私の店",
    message:
      "自分のショップ、許可されたショップ、サンプルショップのリスト。",

    sample: {
      title: "サンプルストア",
      subtitle:
        "ここでは、サンプル ストアのセレクションをご覧いただけます。これらのストアで利用可能な情報を閲覧する権限が与えられます。ただし、実際の個人情報を使用してログインしたり注文したりすることはお控えください。このデータは一般に公開されます。誤ってここに情報を入力した場合は、ストアを終了して、さらにサポートを受けるために当社にご連絡ください。",
    },

    add_new_store: "新しいストアを追加",
    i_have_a_deal: "取引がある",
    access: {
      title: "アクセス招待",
    },
  },

  /** {@see BTransportationServiceLabels} **/
  shipping: {
    warehouse_error:
      "最初に倉庫を設定してください！この住所が配送元として使用されます。",
    errors: {
      set_origin: "ロケーションマップを設定します。",
      set_country: "あなたの国を設定します。",
      set_address: "住所を設定します。",
      set_zip: "郵便番号を設定します。",
    },
    set_warehouse: "セット倉庫",
    pickup_location: "ピックアップ場所",
    refresh_rates: "リフレッシュレート",
    no_rate: "料金なし...",
    view_messages: "メッセージを表示...",
    not_set_yet: "まだ設定されていません！",
    drop_orders_here: "ここに注文をドロップ...",
  },

  /** {@see BPageShopBlogsCategories} **/
  blog_category: {
    title: "ブログのカテゴリ",
    subtitle:
      "ブログ投稿をより効率的に管理するために、ブログ投稿のカテゴリを限定して作成することができます。カテゴリ制限を設けることで、Web サイトの整理がしやすくなります。特に、トップクラスのニュース エージェンシーでも、管理を効率化し、より広い焦点を維持するために、カテゴリの数を限定し、多くの場合 100 未満に抑えています。",

    add_action: "新しいカテゴリを追加",
    add_dialog: {
      title: "新規/更新カテゴリ",
      force_edit: "パスを強制的に編集",
      force_edit_msg: "カテゴリ名を変更し、すべての記事を更新します。",
      star_msg: "スター付きのカテゴリは、ブログに表示する優先順位があります。",
      star: "見つめられた",
      delete_action: "カテゴリを削除",
      add_action: "カテゴリを追加",
      edit_action: "カテゴリを編集",
    },
  },
  /** {@see BPageShopBlogsTimeline} **/
  blog_timeline: {
    title: "コンテンツリリーススケジュール",
    subtitle:
      "ここに、今後の公開が予定されている記事のリストがあります。ブログ投稿や製品の説明を特定の時間に公開するようにスケジュール設定できます。",
  },

  /** {@see BPageShopPagesAboutUs} **/
  about_us: {
    title: "私たちについてのページ",
    subtitle:
      "私たちについてのページに表示するあなたのビジネスについての記事を書いてください。このページは、視聴者があなたのブランドと使命を知るのに役立ちます。",
  },
  /** {@see BPageShopPagesTerms} **/
  terms: {
    title: "利用規約ページ",
    subtitle:
      "あなたの顧客のためにあなたのサービスの購入と使用の条件を説明してください。",
  },
  /** {@see BPageShopPagesPrivacy} **/
  privacy: {
    title: "プライバシーポリシーページ",
    subtitle:
      "プライバシーポリシーは、当事者が顧客またはクライアントのデータを収集、使用、開示、および管理する方法の一部またはすべてを開示する声明または法的文書です。",
  },
  /** {@see BPageShopPagesContactUs} **/
  contact_us: {
    title: "お問い合わせページ",
    subtitle:
      "お問い合わせページに、顧客に表示する連絡先情報、住所、電話番号を記入してください。",
  },

  /** {@see BPageShopApplicationsMetaverse} **/
  metaverse: {
    title: "メタバースブリッジ",
    subtitle:
      "Selldoneは、コマーススペースで100％のAPIベースのサービスを提供します。ゲーム、ブロックチェーン、およびメタバースの開発者は、これらの強力なAPIを使用して、将来の仕事、生活、貿易の世界でビジネス、顧客、およびサービスを接続できます。",
    message: "ゲーム開発者向けの早期アクセス",
  },

  /** {@see BProcessCenterBulkExport} **/
  orders_bulk_export: {
    title: "注文アシスタント",
    subtitle:
      "一括注文処理用にラベルをエクスポートおよびダウンロードします。毎日 100 件を超える注文を処理する場合に最適です。",

    timespan: {
      title: "期間",
      subtitle: "注文の開始日と終了日を選択します。",
    },
    tasks: {
      title: "タスク出力",
      subtitle:
        "注文をまとめて処理するためのタスクのリストをダウンロードします。結果には、有料注文と代金引換注文のみが含まれます。",
      export_title: "タスクのリスト",
    },
    labels: {
      title: "パッケージラベル",
      subtitle:
        "選択した期間とステータスのすべての注文ラベルのリストをダウンロードします。結果には、有料注文と代金引換注文のみが含まれます。",
      export_title: "ボックスラベル",
    },
  },

  /** {@see BPageShopMarketingFunnel} **/
  customers_funnel: {
    title: "顧客の人口統計",
    subtitle:
      "顧客データをフィルタリングおよびエクスポートして、より少ないマーケティングでより多くの価値を提供するためのより良い意思決定を行います。顧客のプライバシーを尊重し、大量のメールを送信しないでください。顧客のすべての許可を得ずに、顧客の情報をサードパーティのサービスと共有しないでください。",
  },

  /** {@see BPageAffiliatorDashboard} **/
  affiliate_pos: {
    title: "アフィリエイトPOS",
    open_pos_action: "高速注文POS",
    description:
      "このオプションは、Instagram ページやその他のソーシャル ネットワークの管理者に適しています。アフィリエイト POS を使用して、顧客からの注文を手動で受け取り、追加します。アフィリエイト (またはフランチャイズ) は、アフィリエイト POS に新しい注文を追加し、入金伝票をアップロードできます。",
  },

  /** {@see BPageShopSettingFlow} **/
  shop_configuration: {
    /** {@see BShopOptionsLoginMethods} **/
    login: {
      title: "ログイン方法",
      subtitle: "ユーザーがストアにログインする方法をカスタマイズします。",

      tips: "Selldone — <b>ここでこのセクションの情報と設定を管理できます。</b>",
    },

    /** {@see BShopOptionsCheckout} **/
    checkout: {
      title: "お会計の流れ",
      subtitle:
        "e コマースでのカスタマー ジャーニーと購入フローをカスタマイズします。",
      map: {
        title: "地図",
        subtitle:
          "ユーザーは地図上で配達場所を選択する必要があります (Uber など)。",
        subtitle_no_map:
          "顧客が提供した住所にその場所が存在しない場合、配送計算の距離はゼロと見なされます。",
      },
      mode: {
        title: "お客様ログインポイント",
        default: {
          title: "ASAP (デフォルト)",
          msg: "ユーザーはできるだけ早くログインします。 (より多くの変換)",
        },
        on_checkout: {
          title: "チェックアウト時",
          msg: "チェックアウトのステップでユーザーにログインを強制します。",
        },
        login_free: {
          title: "オプションのログイン",
          msg: "注文支払い後のオプションのログイン..",
        },
      },

      express: {
        title: "カートに追加後にリダイレクト",

        false: {
          title: "ノーマルモード",
          msg: "ページに留まり、カートに追加をクリックした後、ショッピングを続けます。",
        },
        true: {
          title: "エクスプレスモード",
          msg: "[カートに追加] をクリックした後、顧客をチェックアウト ページにリダイレクトします。",
        },
      },

      shipping_address: {
        title: "配送先住所を尋ねる",
      },
    },

    /** {@see BShopOptionsCheckoutForm} **/
    checkout_form: {
      title: "項目 フォーム",
      subtitle:
        "項目 項目 項目 フォーム 項目 項目 項目 項目 情報 項目 項目 項目 項目 顧客.",
    },
  },
  /** {@see CheckoutOptions} **/
  checkout_options: {
    default: {
      title: "物理的およびサービス (デフォルト)",
      desc: "現物チェックアウトとサービス チェックアウトで住所を入力するように顧客に依頼します。",
    },
    physical: {
      title: "物理のみ",
      desc: "物理的なチェックアウトで住所を入力するよう顧客に依頼します。",
    },
    off: {
      title: "一度もない",
      desc: "配送先住所は決して尋ねないでください。 ⚠ サービス タイプの代わりに製品の物理タイプを選択して、バリエーションのあるサービスを計画している場合は、このオプションを使用します。",
    },
  },

  /** {@see BPageShopSettingBusinessModel} **/
  business_model: {
    title: "ビジネスモデルの設定",
    subtitle:
      "ビジネスモデルを設定すると、舞台裏でOSを構成します。",
  },
  business_type: {
    title: "商品の種類",
    subtitle:
      "ストアで販売する商品のタイプを設定します。 Selldone の製品タイプは、単なる製品のタイプではありません。それはフルフィルメント手順についてです。",

    send_activation_request_to_support:
      "サポート チケットでアクティベーション リクエストを送信します。",
    require_kyc: "ビジネスオーナーKYC.",
    needs_enterprise_license: "Enterprise ライセンスが必要です。",
    marketplace_caution_message:
      "モデルがビジネス OS 構成に深く影響するため、Marketplace を設定します。たとえば、独立した価格設定と在庫を持つ製品ごとに、少なくとも 1 つのベンダーを定義する必要があります。お客様は、ベンダーのいない製品を購入することはできません。",
  },

  /** {@see BusinessModelView} **/
  business_model_view: {
    normal: {
      title: "ノーマルストア",
      desc: "通常、中小企業、在宅ビジネス、またはドロップシッパー - 製品を顧客に直接販売するか、卸売業者の製品を再販業者として販売します。",
    },

    dropshipping: {
      title: "ドロップシッピング",
      desc: "製品も在庫も持たない - 第三者、通常は卸売業者 (Printify、Wholesale2B など) またはメーカーに支払い、舞台裏で注文を処理します。",
    },

    wholesaler: {
      title: "ドロップシッピングサプライヤー",
      desc: "一般的には、最終消費者に注文を直接発送する卸売業者または製造業者です。 Selldone の他のマーチャントは、ストアで商品をドロップシップできます。",
    },
    marketplace: {
      title: "市場",
      desc: "オンライン市場は、独自の集中型プラットフォームで買い手と売り手を結びつけます。",
    },

    franchise: {
      title: "フランチャイズ/アフィリエイト",
      desc: "フランチャイズとは、ブランドを確立する (フランチャイズ) か、ブランドによって製品を販売する (アフィリエイト) フランチャイザーが関与する製品またはサービスを配布する方法です。",
    },
  },

  /** {@see BPageMarketplace} **/
  marketplace: {
    vendor_wallets: "財布",
    pricing_models: "価格設定",
    add_vendor: "ベンダーを追加",
    requests: "リクエスト",
  },

  price_input_type: {
    title: "価格入力タイプ",
    default: {
      title: "デフォルト",
      desc: "カート内の数量として値を選択します。",
    },
    area: {
      title: "領域",
      desc: "幅と長さを入力して数量を計算します。",
    },
    volume: {
      title: "音量",
      desc: "幅、長さ、高さを入力して数量を計算します。",
    },
    custom: {
      title: "カスタム（入力フォームによる）",
      desc: "何百ものバリアントは必要ありません。高度にカスタマイズ可能な製品のカスタム コスト計算フォームを作成します。",
    },
  },

  /** {@see BPageShuttleVendors} **/
  vendors_list: {
    title: "私のベンダー",
    message:
      "Selldone — 私自身のベンダーのリスト。",
  },

  vendor_page: {},

  /** {@see BDomainsList} **/
  domains: {
    message:
      "複数のドメインをビジネス OS に接続し、それらすべてを 1 か所で管理します。複数のドメイン機能を使用して、ブログやコミュニティなど、Web サイトの各部分に専用のドメインを作成したり、アフィリエイトに別のドメインを使用したりできます。",
  },

  /** {@see BNoteButton}   {@see BNoteDialog} **/
  notes: {
    add_action: "チーム用のメモを追加",
    notifications: {
      success_add: "メモが正常に追加されました。",
      success_delete: "メモは正常に削除されました。",
    },
  },

  /** {@see BDashboardShopExternalServices} **/
  external_services: {
    title: "外部サービス",
    subtitle:
      "ここで、SMS や電子メールなどの外部サービスの最新のステータスを監視します。",
  },

  /** {@see BPageShopSettingQuota**/
  shop_quota: {
    title: "使用量割り当て",
    sub_title:
      "これはあなたのショップの使用量割り当てリストです。ショップのライセンスをアップグレードすることで、これらの制限を増やすことができます。制限を超えた場合は、追加の 1 日あたりの割り当て許容量を当社にリクエストできます。すべての使用量は毎日リセットされます。",
  },

  /** {@see WidgetAppCard} **/
  app_card: {
    category: "カテゴリー",
    installs: "インストール",
    actives: "アクティブ",
    uninstalls: "アンインストール",
    app_code: "アプリコード",
    app_mode: "アプリケーションモード",
  },

  product_status: {
    open: {
      name: "アクティブ",
      title: "アクティブ |オンラインとオフラインの販売",
      description: "こちらの商品はネット注文になります。",
    },
    close: {
      name: "非活性",
      title: "非アクティブ |オフライン販売のみ",
      description: "この商品はオンライン注文ではご利用いただけません。",
    },
    pending: {
      name: "保留中",
      title: "保留中",
      description: "公開前にマーケットプレイスのレビューが必要です。",
    },
    rejected: {
      name: "拒否されました",
      title: "拒否されました",
      description: "この製品は市場で拒否されました。",
    },
    unlisted: {
      name: "項目",
      title: "項目",
      description:
        "項目 商品 項目 項目 項目 項目 項目 ストア, 項目 項目 項目 項目 リンク.",
    },
  },

  /**
   * BDashboardShopFeedback
   */
  direct_feedback: {
    title: "直接リクエストを送信",
    message:
      "Selldone で成功し利益を上げるための、ビジネス上の主な 3 つのニーズを特定します。この情報は、創設者や取締役と直接共有され、慎重に検討されます。提出後も、ニーズを随時更新できます。",
    expand_action: "リクエストを書いてください...",
    input_label: "リクエスト",
    to: {
      ceo: "CEOに送信",
      team: "チームに送信",
    },
    placeholder: {
      ceo: "親切にする必要はまったくありません。直接的で要点を突いた質問を聞くのが好きです。たとえば、...が必要です。",
      team: "彼らに優しくしてください。例えば、私は...を持っている必要があります。",
    },
  },

  /**
   * BInventoryFilter
   */
  inventory_filter: {
    placeholder: "フィルターを選択*.*",
  },
  /**
   * BVendorInput
   */
  vendor_input: {
    placeholder: "フィルターベンダー...",
  },

  /**
   * BShopProductsImportProcessing
   */
  product_import_processing: {
    title: "輸入品の加工",
    message:
      "現在、商品と画像のインポート作業中です。完了するまでに時間がかかる可能性があります。",
  },

  /**
   * BOrderInput
   */
  order_input: {
    message:
      "ここで表示される情報は、製品入力フォームの構造に従って顧客によって送信されたものです。",
  },

  /**
   * BPageConnectDashboard
   */
  shop_connect: {
    test: {
      title: "設定",
      subtitle: "外部サービスレポート",
      action: "テスト接続",
      last_update: "最終更新者",
    },
    service_status: {
      title: "サービスステータス",
      syncing_message: "同期処理中...",
      action: "すべてを同期",
      connect_status: "接続ステータス",
      service_status: "サービスステータス",
      auto_confirm_enable_msg: "注文の自動確認が有効になっています。",
      auto_confirm_disable_msg:
        "注文の自動確認は有効になっていません。",
      shipping_enable_msg:
        "配送料はチェックアウト時に提供された情報に基づいて計算されます。",
    },
    detail: {
      title: "詳細を接続",
      auto_confirm_order: "注文の自動確認",
      test_mode: "テストモード",
      status: {
        subtitle: "同期ステータスに関する全体的な情報。",
      },
      sync: {
        title: "同期の詳細",
        subtitle:
          "内部同期の詳細。この情報は、同期プロセス エポックが正常に終了した後に保存されます。",
        no_data: "同期情報がありません!",
      },
    },

    products: {
      title: "製品",
      subtitle:
        "{name} から追加された製品のリスト。製品の名前と SKU が一意であることを確認してください。移行には一部の Connect サービスが使用されるため、重複する<b>SKU</b>と<b>名前</b>を持つ製品がある場合、それらの製品は変更されます。",
      action: "製品を取得する",
      syncing_message: "同期処理中...",
    },

    logs: {
      title: "ログ",
      subtitle:
        "過去 7 日間のすべてのログのリスト。ログ機能は外部サービス プロバイダーでのみサポートされます。",
    },

    edit: {
      title: "新しい接続を追加",

      service: {
        title: "サービス",
        subtitle:
          "接続するターゲット プラットフォーム、ドロップシッピング サプライヤー、またはマーケットプレイスを選択します。",
      },
      test: {
        false_title: "すべてを同期",
        false_desc: "利用可能なすべての製品、カテゴリ、顧客を取得します。",
        true_title: "限定（初心者におすすめ）",
        true_desc:
          "最大 5 つの製品、カテゴリ、顧客を取得できます。[接続] > [設定] でいつでもフル モードに切り替えることができます。",
      },
      overwrite: {
        false_title: "存在する場合は変更しないでください",
        false_desc: "既存の製品とカテゴリの詳細はそのまま保持します。",
        true_title: "上書き",
        true_desc:
          "既存の製品、バリアント、カテゴリ情報を更新します。",
      },
      migration_tips: "<b>ヒント: </b>機能をテストする場合は、<b>制限付き</b>オプションを選択してください。「すべて同期」を選択すると、接続済みサービスからすべてのデータを取得し、関連画像もダウンロードするため、無料ストレージが減ります。また、多数の商品、カテゴリ、顧客を削除するのは難しくなる場合があります。",
      add_action: "自動接続",
      order: {
        title: "注文状況",
        subtitle:
          "ストアの接続されたサービスの注文管理設定を構成します。これには、注文の受け入れの設定、自動注文確認の有効化 (サポートされている場合)、配送料の計算の構成が含まれます。",
      },
      enable: {
        label: "接続ステータス",
        true_desc: "在庫と注文は同期されます。",
      },
      confirm: {
        label: "注文の自動確認",
        false_desc: "注文は手動で確認する必要があります。",
        true_desc:
          "ライブ支払いの注文は自動的に承認されます。デバッグ支払いの注文は自動的に承認されません。",
        tips: "ギフト カード、代金引換、またはデバッグ モードの支払いゲートウェイで支払われる注文は例外であり、自動的に確認されません。",
      },

      shipping: {
        label: "運送",
        tips: "このサービスでは配送料の計算機能を提供しており、設定に応じて有効または無効にすることができます。有効にすると、サードパーティのサービスによるコスト計算 API が必要になり、チェックアウト ページで価格を更新する際に 300 ミリ秒を超える遅延が発生する可能性があります。",
        false_title: "無効にする",
        false_desc:
          "輸入品を含むすべての製品について、「ショップ > ロジスティクス > 輸送」で送料の計算を使用します。",
        true_title: "送料を計算する",
        true_desc:
          "当サービスが提供する配送料計算APIをご利用ください。",
      },

      remove: {
        verify: "この接続を削除することを確認します。",
        action: "接続を削除",
      },
    },

    /**
     * BPageShopChannelConnect
     */
    list: {
      title: "OSを接続する",
      subtitle:
        "ビジネス OS を外部サービスに接続し、すべてのチャネルを同じ場所で管理します。",
      action: "新しいサービスを接続する",
      empty_message:
        "ドロップシッピング用のアプリやプラグインは忘れてください。Connect はクロスプラットフォーム注文管理の未来です。",
      auto_confirm: "自動確認",
      shipping: "運送",
      syncing_now: "同期中です!",
      sync_not_started: "同期はまだ開始されていません。",
    },
  },

  /**
   * ConnectMode
   */
  connect_mode: {
    Migration: {
      title: "移住",
      desc: "商品、カテゴリ、顧客を取得します。ユーザーがこのサービスを削除しても、受信した商品、カテゴリ、顧客は削除されません。",
    },
    Dropshipping: {
      title: "ドロップシッピング",
      desc: "製品、カテゴリ、注文を取得します。ユーザーがサービスを削除すると、システムは製品を削除します。",
    },
    Marketplace: {
      title: "市場",
      desc: "在庫を同期して注文を受け取るだけです (製品は SKU によってリンクされます)。",
    },
    Accounting: {
      title: "会計",
      desc: "注文と財務情報を送信します。",
    },
    Other: {
      title: "他の",
      desc: "その他のサービス。",
    },
  },

  /**
   * BPageShopPagesLandings
   */
  shop_landings: {
    title: "ランディングページ",
    add_new_action: "新しいページを追加",
    subtitle:
      "多用途の AI 搭載インライン エディターを使用して、ブランド独自のレスポンシブなカスタム ページを作成し、データを入力することで動的なコンテンツを自動的に生成します。",
    empty_message: "ドラッグ アンド ドロップでカスタム ページをデザインします...",
  },

  /**
   * BPageShopPermissionStaff
   */
  shop_staff: {
    list: {
      title: "スタッフ管理",
      subtitle:
        "このストアのダッシュボードと管理セクションへのアクセスを許可されたユーザー。",
    },
    pending: {
      title: "保留中",
      message: "保留中の招待を表示します。",
    },
  },

  /**
   * BPageShopCommunityComments
   */
  community_comments: {
    title: "コメント",
    subtitle: "これはコミュニティのコメントのリストです。",
    empty_msg: "今のところコメントは作成されていません...",
  },

  /**
   * BPageShopCommunityCategories
   */
  community_categories: {
    title: "カテゴリー",
    subtitle: "これはコミュニティのカテゴリのリストです。",
    new_category_action: "新しいカテゴリー",
    empty_msg: "現時点ではカテゴリは作成されていません...",
    filter: {
      delete: {
        title: "削除",
        description: "削除されたカテゴリを表示します。",
      },
    },
  },
  /**
   * BPageShopCommunityPosts
   */
  community_posts: {
    title: "投稿",
    subtitle: "これはコミュニティの投稿のリストです。",
    filter: {
      deleted: {
        title: "削除",
        description: "削除された投稿を表示します。",
      },
      reported: {
        title: "報告",
        description: "報告された投稿を表示します。",
      },
    },
    empty_msg: "今のところ投稿は作成されていません...",
    menu: {
      open_post: {
        title: "オープンポスト",
        subtitle: "コミュニティ内の投稿を表示および編集します。",
      },
      spam: {
        title: "スパムを報告して削除する",
        subtitle: "投稿を一括削除し、ユーザーを禁止します。",
      },
      delete: {
        title: "投稿を削除",
        subtitle: "この投稿を削除します。",
      },
    },
  },

  /**
   * {@see BGoogleTagManager}
   */
  channel_google: {
    gtag: {
      title: "タグマネージャー",
      subtitle:
        "Google アナリティクスでは、Flash、動画、ソーシャル メディアのサイトやアプリを追跡しながら広告の ROI を測定できます。Google タグ マネージャーのシンプルで信頼性の高い無料ソリューションを使用すれば、コード編集を必要とせず、ウェブサイトのタグを簡単に管理できます。",
      tag_id: {
        label: "Google タグ マネージャー ID",
      },
    },
    shopping: {
      title: "Google ショッピング",
      subtitle:
        "データ ソースは、Google のカタログ情報の出所を示します。このリンクをクリックすると、すべての商品とカテゴリが Google の商品に自動的に追加されます。",
      tips: "このツールを利用すると、Google 広告を簡単かつ自動的に管理できます。",
      link_message: "Google 製品フィード URL",
    },
    console: {
      title: "検索コンソール",
      subtitle: `Google Search Console による検証のために、ホームページにメタ タグを追加します。`,
      code: {
        label: "検証メタタグ",
        placeholder: "Google から、例えば viQg9mjdBj...",
      },
    },
    serp: {
      title: "Google SERPとキーワード",
      subtitle:
        "当社は Google から最も正確な SEO 監査データを取得し、便利な方法でお客様に提示します。提供されている手順に従うだけです。",
    },
    serp_content: {
      title: "Google Search Consoleに接続する",
      subtitle:
        "ショップを検索コンソールに接続し、Selldone でキーワード、ランク、その他の無料 SEO ツールの探索を始めましょう。",
      tips: {
        title:
          "Selldone を Google Search Console にリンクする前に、次の点を確認してください。",
        add_in_selldone: "カスタム ドメインを追加、確認し、プライマリとして設定します。",
        add_in_google: `<b>ここでこのセクションの情報と設定を管理できます。 {domain}</b><a href="https://search.google.com/search-console" target="_blank"><b></b></a>`,
      },
      action_custom_domain: "カスタムドメイン",
      action_connect_now: "今すぐ接続",
      action_remove_connection: "接続を削除",
    },
  },

  /**
   * {@see BPageShopIncentivesCoupon}
   */
  cashback: {
    add_new: "新しいキャッシュバックを追加",
    title: "キャッシュバックプログラム",
    boosted: "ブースト（2倍）",
    min_purchase: "最低購入額",
    only_first_order: "初回注文のみ",
    total_cashback: "合計キャッシュバック",
    delete_alert: {
      title: "キャッシュバックプログラムを削除する",
      message: "このキャッシュバックプログラムを削除してもよろしいですか?",
      action: "はい、今すぐ削除",
    },
    notifications: {
      delete_success: "キャッシュバックプログラムが正常に削除されました。",
    },
  },
  /**
   * {@see BPageCashback}
   */
  shop_cashback: {
    title: "キャッシュバックプログラム",
    up_to: "まで",
    menu: {
      back: "戻るプログラム",
      dashboard: "ダッシュボード",
      orders: "注文",
      edit: "編集",
    },
    /**
     * {@see BPageCashbackDashboard}
     */
    dashboard: {
      chart_amount_buy: {
        label: "買う",
        y: "購入金額{currency}",
      },
      chart_amount_cashback: {
        label: "キャッシュバック",
        y: "キャッシュバック金額 {currency}",
      },
      chart_used: {
        label: "使用済み",
        y: "タイムズ",
      },
    },
    /**
     * {@see BPageCashbackOrders}
     */
    orders: {
      title: "キャッシュバック注文",
      table: {
        amount_cashback: "キャッシュバック金額",
        payment_status: "支払い状況",
        date: "日にち",
      },
    },
  },

  /**
   * {@see BCashbackAdd}
   */
  cashback_edit: {
    config: {
      subtitle: "ここで、チャスバックのパーセント、制限、およびそのステータスを設定します。",
    },
    percent_input: {
      title: "キャッシュバック率",
      message: "キャッシュバック率を1%～20%の範囲で入力します。",
    },
    currency_input: {
      message: "キャッシュバックプログラムはこの通貨のみでご利用いただけます。",
    },
    limit_input: {
      title: "制限",
      hint: "キャッシュバックの最大金額を入力してください。",
      zero_message: "無制限のキャッシュバックには 0 を入力してください。",
    },
    duration: {
      title: "期間制限",
      subtitle: "キャッシュバック プログラムの期間を設定します。これはオプションです。",
    },
    start_input: {
      title: "開始日",
      placeholder: "開始日を選択...",
    },
    end_input: {
      title: "終了日",
      placeholder: "終了日を選択してください...",
    },
    design: {
      subtitle:
        "キャッシュバック プログラムのタイトルと簡単な説明を設定します。これらの情報は顧客に表示されます。",
    },
    title_input: {
      title: "タイトル",
    },
    description_input: {
      title: "説明",
    },
    constraints: {
      subtitle: "キャッシュバック プログラムの制約を設定します。",
    },
    min_purchase_input: {
      hint: "キャッシュバックプログラムの最低購入金額を入力してください。",
      title: "最低購入額",
    },
    only_first_buy_input: {
      false_desc: "キャッシュバックプログラムはすべての注文にご利用いただけます。",
      true_desc:
        "キャッシュバックプログラムは初回注文のみご利用いただけます。",
      true_title: "初回注文のみ",
      false_title: "すべての注文",
    },
    qualify_input: {
      false_title: "すべてのお客様",
      true_title: "顧客の選別",
      true_msg:
        "キャッシュバックプログラムは、資格を満たす顧客のみが利用できます。",
    },
    club: {
      subtitle:
        "キャッシュバック プログラムにクラブを設定します。キャッシュバック プログラムは、このクラブに所属する顧客のみが利用できます。",
    },
    cluster: {
      subtitle:
        "クラスターをキャッシュバック プログラムに関連付けることで、より効果的に管理できます。",
    },
    notifications: {
      add: "キャッシュバックプログラムが正常に追加されました。",
      edit: "キャッシュバックプログラムが正常に更新されました。",
    },
    enable_input: {
      true_msg: "キャッシュバックプログラムが有効になっており、お客様はご利用いただけます。",
      false_msg:
        "キャッシュバックプログラムは非アクティブであり、顧客はそれを利用できません。",
    },
    boosted_input: {
      false_title: "普通",
      true_title: "ブースト（キャッシュバック2倍）",
      true_msg:
        "キャッシュバック プログラムはブースト モードになっており、顧客は 2 倍のキャッシュバックを受け取ります。",
      false_msg:
        "キャッシュバック プログラムは通常モードであり、顧客は通常のキャッシュバックを受け取ります。",
    },
  },

  /**
   * @see BOrderPaymentRowPayment
   */
  row_payment: {
    actions: {
      refund: {
        title: "払い戻し支払い",
        subtitle: "一部または全額の払い戻しがサポートされます。",
      },
      delivery: {
        title: "配達時に確認",
        subtitle: "支払いプロバイダーの配送を手動で確認できます。",
      },
    },
  },

  /**
   * @see BOrderPaymentActionsRefundDialog
   */
  payment_refund_dialog: {
    title: "払い戻し支払い",
    message:
      "セキュリティ上の理由により、過去 7 日以内に支払われた注文のみが払い戻しの対象となります。",
    payment_amount: "支払金額",
    total_refund_amount: "返金総額",
    can_refund: "払い戻し可能",
    refund_amount: "返金額",
    verify: {
      title: "払い戻しの確認",
      description:
        "返金額が正しいことを確認し、続行します。",
    },
    action: "今すぐ返金",
  },

  /**
   * @see BOrderPaymentActionsDeliveryDialog
   */
  payment_delivery_dialog: {
    title: "顧客配送確認",
    message:
      "一部の支払いサービスでは、注文が顧客に配達されたことの確認が必要です。通常、この確認は、顧客の配達確認を受け取った注文処理の最終段階で送信されます。ただし、このアクションを手動で実行する必要がある場合は、ここで実行できます。",
    verify: {
      title: "配送の確認",
      description:
        "注文品が顧客に配達されたことを確認しました。",
    },
    action: "今すぐ確認",
  },

  /**
   * @see BPageProductCrossSelling
   */
  product_cross_selling: {
    title: "クロスセリング",
    add_new_actions: "新製品を追加",
    subtitle:
      "このセクションでは、この商品ページのクロスセル商品を追加および管理できます。これらの商品は、メイン商品と一緒に購入するための提案として顧客に表示されます。また、追加購入を促し、インセンティブを与えるために割引を設定することもできます。システムは、顧客が検討できる最大 3 つの商品を表示します。",
    dialog: {
      edit_title: "クロスセリング商品を編集",
      add_title: "新しいクロスセリング製品を追加する",
      target: {
        title: "対象製品",
        subtitle:
          "この商品と一緒にクロスセル オプションとして宣伝したい商品を選択します。",
        select_products: "製品を選択",
      },
      list: {
        title: "対象製品",
        subtitle: "この製品はクロスセルプロモーションに選ばれました。",
        manage_product: "製品の管理",
      },
      discount: {
        title: "割引とメッセージ",
        subtitle:
          "選択した追加アイテムを購入するよう顧客を促すために、メッセージを追加したり割引を提供したりすることもできます。これらのインセンティブは、売上を促進し、全体的なショッピング体験を向上させるのに役立ちます。",
        amount_input: {
          message:
            "既存のすべての割引を考慮した上で、割引率が製品価格に適用されます。",
        },
        mismatch_type_warning:
          "ソース商品とターゲット商品は別々のバスケットに入れられないため、メイン商品タイプ以外のタイプには割引を適用できません。",
        not_support_subscription_type_warning:
          "料金プランを動的に調整できないため、クロスセリングサブスクリプション製品の割引を設定することはできません。",
        message_input: {
          message:
            "顧客の注目を集める、魅力的で魅力的なタイトルを作成します。",
          placeholder:
            "バンドルして節約: 厳選したセレクションであなたのスタイルを完成させましょう!",
        },
      },
      action: {
        title: "アクション",
        subtitle:
          "ここでクロスセリング製品のアクションを変更します。製品に評価フォームなどのカスタム情報の入力が必要な場合は、アクションとして「カートに追加」を選択しないでください。エラーが発生する可能性があります。",
      },
    },
  },
  /**
   * @see BProductVariantsBulkAdd
   */
  product_variants_bulk_add: {
    title: "追加 項目 項目 項目",
    variants: {
      title: "項目 項目",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    values: {
      title: "項目 値",
      subtitle: "項目 項目 項目 値 項目 項目 項目 項目 項目.",
      prevent_duplicates_tips:
        "<b>メモ:</b> 項目 項目 項目 項目 項目 項目 項目 項目 項目.",
    },
    inventory: {
      title: "項目 項目",
      subtitle: "項目 項目 項目 項目 項目 項目 項目 項目 項目.",
    },
    add_variants_action: "作成 項目",
  },

  /**
   * @see CrossSellActionType
   */
  CrossSellActionType: {
    AddToCart: {
      title: "カートに追加",
      description:
        "「カートに追加」ボタンを直接表示します。これはサブスクリプション製品には適用されないことに注意してください。",
    },
    ViewProduct: {
      title: "製品を見る",
      description:
        "新しいウィンドウを開いて顧客を製品ページに誘導する「詳細を表示」ボタンを表示します。",
    },
  },

  /**
   * @see BProductFlow
   */

  product_flow: {
    title: "購入フロー",
    subtitle: "これは製品の購入フローとヘルスチェックです。",

    /**
     * @see BProductFlowRowConnect
     */
    connect: {
      subtitle: "この製品は<b>{name}</b>経由で追加されました。",
      enable_msg: "この外部サービスへのブリッジは有効になっています。",
      disable_msg: "この外部サービスへのブリッジは無効になっています。",
      has_shipping_msg:
        "{name} は配送をサポートしています。そのため、チェックアウト ページで {name} による自動配送計算を有効にするオプションがあります。",
    },
    /**
     * @see BProductFlowRowHealth
     */
    health: {
      title: "製品の健全性",
      available_in_stock_msg: "商品は在庫ありです。",
      out_of_stock_msg: "商品は在庫切れです。",
      file_count_msg:
        "この製品には、合計 {files_size} の {files_count} 個のファイルがアップロードされています。",
      no_file_uploaded_msg: "ファイルはまだアップロードされていません。",
      no_image_uploaded_msg:
        "商品の画像をアップロードして、より魅力的にしましょう。",
    },
    /**
     * @see BProductFlowErrorsVendor
     */
    vendor_errors: {
      title: "不足しているベンダー",
      subtitle:
        "この製品には現在、関連付けられているベンダーがありません。製品をマーケットプレイスで購入できるようにするには、少なくとも 1 つのベンダーが必要です。",
      manage_vendors: "ベンダーの管理",
    },

    /**
     * @see BProductFlowErrorsFile
     */
    file_errors: {
      title: "不足しているファイル",
      subtitle:
        "現在、この製品のファイルはアップロードされていません。続行するにはファイルをアップロードしてください。",
      manage_files: "ファイルの管理",
    },

    /**
     * @see BProductFlowRowPricing
     */
    pricing: {
      title: "価格設定",
      no_product_price_msg: "デフォルトの製品価格はまだ設定されていません。",
      listing_pricing_msg: "掲載価格:",
      has_valuation_msg: "商品には価値があります。",
      subscription_pricing_msg:
        "この製品には {count} 個のサブスクリプション価格プランがあります。",
      has_no_subscription_pricing_msg:
        "この製品にはサブスクリプション価格プランはありません。",
    },
    /**
     * @see BProductFlowErrorsSubscription
     */
    subscription_errors: {
      title: "サブスクリプション料金プランが見つかりません",
      subtitle:
        "この製品にはサブスクリプション価格プランがありません。この製品をサブスクリプション購入できるようにするには、少なくとも 1 つのサブスクリプション価格プランを追加する必要があります。",
      pricing_plans: "料金プラン",
    },

    /**
     * @see BProductFlowRowLocation
     */
    location: {
      title: "販売場所の制限 ● {status}",
      status: {
        has_restriction: "{count} か国で利用可能",
        no_restriction: "制限なし",
      },
      available_countries_msg:
        "ショッピングは世界中で {count} か国に制限されています。これらの国は {countries} です。",
      disable_for_all_countries_msg:
        "ショップ > 場所の設定で、すべての国でショッピングが無効になっています。",
      location_is_not_in_permitted_shop_locations_msg:
        "販売場所として {country} を設定しましたが、ストア レベルではこの国を許可していません。ストア レベルの設定を確認してください。",
      shop_locations: "店舗所在地",
      product_locations: "製品所在地",
    },

    /**
     * @see BProductFlowErrorsLocation
     */
    location_errors: {
      title: "利用可能な場所のエラー",
      no_location_error_subtitle:
        "製品の購入に対して場所の制限を有効にしましたが、現在この制限に該当する国はリストされていません。そのため、この製品は誰も購入できません。",
      invalid_location_error_subtitle:
        "製品の地域制限設定にエラーがあります。リストされている一部の地域には、関連付けられた郵便番号がありません。その結果、ユーザーは郵便番号を選択できず、製品を購入できなくなります。",

      manage_locations: "場所の管理",
    },

    /**
     * @see BProductFlowRowTax
     */
    tax: {
      title: "購読税",
      default_shop: "デフォルトのショップ税",
      tax_profiles: "税務プロファイル",
      description: {
        subscription_tax_msg:
          "税金は支払い作成ステップでのみ適用できます。",
        dedicated: "ひたむきな",
        is_disabled: "この税金プロファイルは無効です。",
        tax_is_based_on_location: "税金: 場所に基づく",
        shipping_tax_is_based_on_location: "配送: 場所に基づく",
        included_in_price: "料金に含まれます。",
      },
    },

    /**
     * @see BProductFlowRowVendor
     */
    vendor: {
      vendor_owner_msg: "この製品は<b>{vendor}</b>のものです。",
      has_vendors_msg: "この製品には {count} 社のベンダーが存在します。",
      no_vendor_msg:
        "この製品にはベンダーが割り当てられていないため、顧客は購入できません。",
      add_vendors: "ベンダーを追加",
    },
  },

  /**
   * @see BPageProductTemplate
   */
  product_template: {
    title: "製品ページテンプレート",
    subtitle:
      "プレゼンテーションを強化するために、商品ページ内にページを埋め込むことができます。最適な方法は、透明な背景と、各商品カテゴリに合わせた 1 ～ 3 つのセクションを備えたページを作成することです。次に、1 つのページを複数の商品に割り当てて、一貫性のある魅力的な表示を実現します。",
    edit_page: "ページを編集",
    list_of_pages: "ページ一覧",
  },
  /**
   * @see BPageProductEmbed
   */
  product_embed: {
    subtitle:
      "弊社が提供するコードをコピーして貼り付けるだけで、ブログやその他の Web ページに商品や商品リストを簡単に埋め込むことができます。この機能はまだ初期段階ですが、現在他の場所で利用できる機能を超えて機能を拡張できるよう積極的に取り組んでいます。現在は機能が限られていますが、将来的にはさらに多くのテンプレートとカスタマイズ オプションを導入する予定です。",
    card: {
      title: "最小限",
      description:
        "他のプラットフォームや HTML ページに製品カードを追加するための HTML コードを生成します。",
    },
    iframe: {
      title: "インラインフレーム",
      description:
        "埋め込みウィンドウに包括的な製品詳細を表示するための iframe コードを生成してください。",
    },
  },

  /**
   * @see BPermissionStaffAddDialog
   */
  permission_staff_add: {
    title_new: "新スタッフ",
    title_edit: "編集スタッフ",

    staff: {
      title: "スタッフとアクセスの追加",
      subtitle:
        "スタッフ アクセス権を持つすべてのユーザーはダッシュボードにログインして財務情報を表示できます。アクセスが制限されたユーザーを追加するには、ロールを定義します。",
      go_to_roles: "役割へ移動",
    },
    access: {
      customization_tips:
        "<b>カスタマイズ:</b>各項目をクリックして、デフォルトの読み取り/書き込みアクセスをカスタマイズします。各行は、メインショップダッシュボードに対応するアクセス レベルを表します。",
      simplify_tips:
        "<b>重要!</b>アクセス制御を 300 を超えるレベルから 10 未満に簡素化しました。より詳細で最新のアクセス レベルはドキュメントで公開されます。",
      multi_permission_tips:
        "<b>カスタム制限?</b> 1 人のユーザーにさらにアクセスを追加できます。最初のアクセスを追加した後、同じ手順で追加のアクセスを作成します。",
      view_data: "データを表示",
      apply_changes: "変更を適用する",
    },

    inputs: {
      email: {
        placeholder: "Eメール",
        label: "ユーザーのメールアドレス",
      },
      level: {
        label: "アクセスレベル",
        placeholder: "レベルを選択してください...",
      },
    },

    actions: {
      add: "スタッフを追加",
    },
    notifications: {
      add_success: {
        title: "アクセス承認",
        message: "新しいアクセスが正常に追加されました。",
      },
      update_success: {
        title: "アクセスが更新されました",
        message: "権限が正常に更新されました。",
      },
    },
  },

  /**
   * @see BCategoryEngineEditor
   */
  category_engine_editor: {
    title: "追加製品リスト",
    subtitle:
      "さまざまなカテゴリの製品を表示します。複数のカテゴリを選択して製品を表示したり、タグで製品をフィルタリングしたりすることができます。",
    aut_add_sub_categories_tips:
      "下のボタンをクリックすると、すべてのサブカテゴリを現在のカテゴリに自動的に追加できます。",
    inputs: {
      categories: {
        label: "カテゴリー",
        messages: "これらのカテゴリの製品が表示されます。",
        placeholder: "カテゴリを選択...",
      },
      tags: {
        label: "製品タグ",
        messages: "これらのタグが付いた製品が表示されます。",
        placeholder: "ここにタグを配線して Enter キーを押します。例: 新しいコレクション",
      },
    },
    actions: {
      save_engine: "エンジンを保存",
      auto_add_subcategories: "サブカテゴリの自動追加",
    },
  },

  /**
   * @see SProductsSortView
   */
  products_sort_view: {
    search_tips: {
      title: "検索のヒント",
      normal:
        "<b>一般検索:</b>タイトル、MPN、SKU、ブランド、またはタグで検索します。",
      product:
        "<b>正確な製品 ID:</b>特定の製品 (例: <b class=\"text-green\">P</b> <i class=\"text-yellow\">360)</i>を検索するには、P+製品 ID を使用します。",
      quotes:
        "<b>正確なフレーズ:</b>引用符を使用して正確なフレーズを検索します (例: <b class=\"text-green\">\"</b> <i class=\"text-yellow\">your text here</i> <b class=\"text-green\">\")</b> 。",
      tax: "<b>税金プロファイル:</b> 「tax:」を使用して、特定の税金プロファイルを持つ製品を検索します (例: <b class=\"text-green\">tax:</b><i class=\"text-yellow\">税金プロファイル名)</i> 。",
      new_products:
        "<b>新製品:</b>特定の日付範囲内に追加された製品を検索します (例: <b class=\"text-green\">new~</b> <i class=\"text-yellow\">2023-08-10</i> <b class=\"text-green\">~</b> <i class=\"text-yellow\">2023-08-20)</i> 。",
    },
  },

  /**
   * @see LAugmentForm
   */
  augment_form: {
    title: "増強",
    subtitle:
      "ページ コンテンツ内の対応する値と交換されるキーを入力します。キーは最大 32 文字にする必要があります。",
    add_caption: "新しいアイテムを追加",
    add_sub_caption: "カスタムのキーと値のペアを追加します。",
    add_dialog: {
      title: "入力タイプを選択",
      html: {
        title: "テキストとHTML",
        subtitle: "アイテムの値は、テキストまたは HTML のいずれかとして指定できます。",
      },
      image: {
        title: "画像",
        subtitle: "画像をアップロードできます。",
      },
    },
    help_dialog: {
      title: "動的コンテンツの使用方法",
      how_it_works_tips:
        "ランディング ページでは、テキストと画像の両方に動的プレースホルダーを柔軟に指定できます。これらのプレースホルダーは、コンテキストに応じてコンテンツをカスタマイズする上で重要な役割を果たします。これらのプレースホルダーは動的であるため、さまざまな要因に基づいて変化する拡張値を設定できます。たとえば、拡張値は製品やカテゴリごとに異なる場合があります。この機能の本当の利点は、さまざまな属性を持つさまざまなアイテムがある場合に発揮されます。これらの動的プレースホルダーを効果的に利用して、各アイテムの表示をパーソナライズおよび強化し、ランディング ページでユニークでインタラクティブなエクスペリエンスを作成できます。",
      assign_tips:
        "画像に動的な値を割り当てるには、セクションの左側にあるフィーダー ボタンをクリックします。",
      set_dynamic_image_tips:
        "画像の URL を変更し、動的な値を割り当てることができるようになりました。",
      enter_values_tips:
        "すべての製品に対して、専用のキーと値のペアを割り当てることができます。",
      result_tips:
        "これは、プレースホルダーが拡張された値に置き換えられたページの最終結果です。",
    },
  },

  /**
   * @see BLogisticProfileEditor
   */
  logistic_profile_editor: {
    languages: {
      title: "多言語",
      subtitle:
        "コンテンツ言語のリストです。各言語ごとにロジスティクス プロファイルに異なるコンテンツを設定できます。",
      add_caption: "新しい記事を追加",
      no_more_language: "もう言語は必要ありません!",
    },
    content: {
      title: "コンテンツ",
      subtitle:
        "ロジスティクス プロファイルのコンテンツを複数の言語でカスタマイズできます。",

      language_input: "現在の記事の言語",
      delete_article: "記事を削除",
      menu_tooltip: "自動翻訳 / 記事の削除",
    },
    translate_to: "翻訳する",
    notifications: {
      translate: {
        message: "記事の翻訳が正常に完了しました。",
      },
      save_article: {
        message: "記事は正常に保存されました。",
      },
      delete_article: {
        message: "記事は正常に削除されました。",
      },
    },
    delete_dialog: {
      message: "この記事を永久に削除してもよろしいですか?",
      action: "はい、今すぐ削除",
    },
  },

  /**
   * @see LogisticProfilePage_Products
   */
  logistic_profile_products: {
    title: "製品",
    subtitle: "このプロファイルに関連付けられている製品のリスト。",
  },
  /**
   * @see LogisticProfilePage_Setting
   */
  logistic_profile_setting: {
    title: "一般情報",
    inputs: {
      name: {
        message:
          "この名前はあなただけに表示されますが、一般には公開されません。",
      },
      accept_delete: {
        true_description:
          "この操作により、すべての記事とプロフィール リンクが削除されます。",
        true_title: "この接続を削除することを確認します。",
      },
    },
    actions: {
      remove: "プロフィールと関係を削除する",
    },
  },

  /**
   * @see BPageShopLogisticProfiles
   */
  shop_logistic_profiles: {
    title: "物流プロファイル",
    add_caption: "新しいプロフィールを追加",
    subtitle:
      "ここで製品の保証および返品ポリシーを作成および編集し、任意の製品に割り当てることができます。製品の種類ごとに異なる保証ポリシーを定義できます。",
    add_dialog: {
      title: "新しいロジスティクスプロファイルを作成する",
      config: {
        title: "一般情報",
        subtitle:
          "プロファイル タイプを選択します。ガイド、保証、または複数の製品間で共通して共有されるその他のコンテンツや資料を選択できます。",
      },
      article: {
        title: "記事",
        subtitle:
          "このロジスティクス プロファイルを作成した後、さらに言語を追加できます。",
      },
      inputs: {
        name: {
          message:
            "この名前はあなただけに表示されますが、一般には公開されません。",
          placeholder: "プロファイルの名前を入力してください...",
        },
      },
    },
  },

  /**
   * @see BPageShopLogisticIncludes
   */
  shop_logistic_includes: {
    title: "同梱品管理",
    add_caption: "新しいアイテムを追加",
    subtitle:
      "ここでは、商品に含まれるアイテムを管理できます。ストアの外観を完璧にするには、ワイヤーフレームなどの類似した画像パターンを持つアイテムをすべての商品で一貫して使用します。",
    empty_list_msg: "含まれるアイテムのリスト...",
    notifications: {
      delete: {
        message: "アイテムは削除されました。",
      },
    },
    delete_dialog: {
      title: "含まれるアイテムを削除する",
      message:
        "このアイテムを完全に削除してもよろしいですか? 関連するすべての製品からも削除されることにご注意ください。",
      action: "はい、今すぐ削除",
    },
    actions: {
      edit_linked_page: "リンクされたページを編集",
    },
  },

  /**
   * @see BIncludeItemAdd
   */
  include_item_add: {
    dialog_title_edit: "含まれるアイテムを編集",
    dialog_title_add: "新しい含まれるアイテムを作成する",

    title: "含まれるもの",
    subtitle:
      "簡単なタイトルを選択します。理想的には 2 ～ 3 語以内です。アップロードされた画像は 256 x 256 の正方形形式に自動的にサイズ変更されるため、正方形の画像を使用してください。すべてのテンプレートで最適な外観を実現するには、透明な背景のミニマルな画像を使用し、製品全体で均一なパターンを維持します。",
    inputs: {
      title: {
        placeholder: "製品ページに簡潔なタイトルが表示されます...",
      },
      code: {
        placeholder: "一意のコード、例: mobile_cable_usb",
        hint: "このコードを使用すると、アイテムを見つけるための検索プロセスを効率化できます。",
      },
      description: {
        placeholder: "このアイテムについての簡単な説明...",
        hint: "説明は SEO に使用され、製品ページの一部のカスタム レイアウトでユーザーに表示される可能性があります。",
      },
      image: {
        message: "最大画像サイズ: 1MB",
      },
      path: {
        label: "ページパス",
      },
    },
    mode: {
      no_link: {
        title: "リンクなし",
      },
      external_link: {
        title: "外部リンク",
        description: "外部 URL へのリンクを設定します。",
        tips: "アイテムには任意の URL を添付できます。ユーザーが商品ページでアイテムをクリックすると、そのリンクにリダイレクトされます。",
      },
      internal_link: {
        title: "内部リンク",
        description:
          "このアイテムに提供された拡張データを使用して動的なページを作成します。",
        tips: "ランディング ページをプロファイルにリンクし、カスタム パスと動的コンテンツを設定できます。Selldone はアイテムの動的リンクを生成します。",
      },
    },
    notifications: {
      add: {
        message: "含まれているアイテムが正常に追加されました。",
      },
      edit: {
        message: "含まれているアイテムが正常に更新されました。",
      },
    },
  },
  /**
   * @see BPageShopLogisticReturns
   */
  shop_logistic_returns: {
    title: "返品された注文",
    subtitle:
      "顧客は物理的な注文を返品することができ、注文処理ページで返品リクエストを確認したり、返品された注文の完全なリストにここからアクセスしたりできます。",
  },
  /**
   * @see OReferralFees
   */
  referral_fees: {
    title: "手数料",
    subtitle:
      "紹介者から獲得したすべてのコミッションのリスト。コミッションが承認されてウォレットに送金されるまでに最大 30 日かかります。",
  },
  /**
   * @see OReferralWallets
   */
  referral_wallets: {
    title: "財布",
    subtitle:
      "ここで獲得した手数料を確認できます。手数料は銀行口座または Selldone ウォレットに送金できます。",
    no_commission_yet: "まだ手数料を受け取っていません。",
    no_wallet: "財布がない！",

    withdraw_dialog: {
      title: "手数料の引き出し",

      need_bank_info_message: "まず銀行情報を入力してください。",

      to_wallet: {
        title: "ウォレットへ",
        subtitle:
          "このオプションを使用すると、手数料を Selldone ウォレットに転送できます。ウォレットがギフト ウォレットとして接続されており、同じ通貨で動作していることを確認してください。",
      },
      to_bank: {
        title: "銀行へ",
        subtitle:
          "このオプションを使用すると、手数料を Selldone ウォレットに転送できます。ウォレットがギフト ウォレットとして接続されており、同じ通貨で動作していることを確認してください。",
      },
      inputs: {
        verify_to_wallet: {
          true_description:
            "手数料をSelldoneウォレットに送金したいです。",
        },
        verify_to_bank: {
          true_description:
            "銀行情報を確認し、手数料を銀行口座に振り込みたいです。",
        },
      },
      actions: {
        withdraw_to_wallet: "ウォレットに引き出す",
        withdraw_to_bank: "銀行に引き出す",
      },
    },
    notifications: {
      request_transfer_to_bank_success:
        "リクエストは正常に受信されました。確認させていただきます。",
    },
  },

  /**
   * @see OPageMonetizeReferral
   */
  monetize_referral: {
    copy_box: {
      message: "任意の selldone URL に<b>?ref={code}</b>を追加できます。",
    },
    intro: {
      title: "Selldoneアフィリエイトプログラムに参加する",
      message:
        "Selldone アフィリエイト プログラムはシンプルでわかりやすく、簡単に稼げるように設計されています。独自のアフィリエイト リンクを共有して Selldone に新規ユーザーを招待すると、そのユーザーが行うすべての取引から永久にコミッションを獲得できます。これには、サブスクリプション、サービス料金、ショップのアップグレード、およびその他のすべての収益源からの収益が含まれます。時間や収益の制限なしに収益の分配を獲得し始めましょう。参加して、ネットワークを安定した収入に変えましょう。",
      why_join_selldone_affiliate: "なぜこれが特別な機会なのでしょうか?",
      reasons: [
        "永遠に続きます！",
        "すべてのサブスクリプション料金と取引手数料をカバーします。文字通り、Selldone のユーザーのすべての支払いが対象です。",
        "あなたのリンクを使用して登録した人には、無料の 99 ドルのバウチャーをお送りします。",
        "ティアがアップグレードされると、以前に紹介したすべてのユーザーから新しいレートで報酬を獲得できます。",
      ],
    },
  },

  /**
   * @see LMenuLeftAssets
   */
  l_menu_left_assets: {
    no_asset_uploaded: "項目 項目 項目 項目.",
  },

  /**
   * @see LMenuTopHome
   */
  l_menu_top_home: {
    hot_keys: "項目",
    click_to_view_all: "項目 項目 項目 項目...",
    clone_tooltip: {
      title: "項目 項目",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
      step_1:
        "ここでこのセクションの情報と設定を管理できます。",
      step_2: "項目 項目 項目 項目 項目 項目 項目 項目 項目 項目.",
      step_3:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    show_side_menu_tooltip: {
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    sort_tooltip: {
      subtitle:
        "項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目.",
    },
    edit_mode_tooltip: {
      title: "編集 / 項目 項目",
      edit_mode_title: "編集 項目",
      edit_mode_msg: "項目 項目 項目 項目 項目 項目.",
      view_mode_title: "項目 項目",
      view_mode_msg:
        "項目 項目 項目 項目 ユーザー 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目.",
    },
    repository_tooltip: {
      title: "項目 項目",
      subtitle:
        "ここでこのセクションの情報と設定を管理できます。",
    },
    live_view: {
      title: "項目 項目",
      subtitle: "項目 更新 項目 項目 項目 項目 編集 項目 項目.",
    },
    hotkeys_dialog: {
      title: "項目 項目",
      augment_tips:
        "<b>ここでこのセクションの情報と設定を管理できます。</b><b></b><b></b><b></b><b></b><b></b>",
    },
    hotkeys: {
      ctrl_b: "項目 項目 項目/項目 項目 項目 項目 | <b>項目 項目 項目</b>",
      ctrl_i: "項目 項目 項目/項目 項目 項目 項目 | <i>項目 項目 項目</i>",
      ctrl_l:
        "項目 項目 項目/項目 項目 項目 項目 | <s>項目 項目 項目</s>",
      ctrl_u: "項目 項目 項目/項目 項目 項目 項目 | <u>項目 項目</u>",
      ctrl_1:
        "項目 項目 項目 項目 項目 項目 | <small>項目 項目 項目</small>",
      ctrl_2: "項目 項目 項目 項目 項目 項目 | <big>項目 項目 項目</big>",
      ctrl_r: "削除 項目 項目 項目 項目 項目 | 項目 項目 項目",
      ctrl_s: "保存 項目 項目",
      tab: "項目 項目 項目 項目",
      ctrl_e: "項目 項目 項目 項目 項目 項目",
    },
  },

  /**
   * @see LPageEditorRepository
   */
  l_page_editor_repository: {
    title: "項目 & 項目",
    subtitle: "項目 項目",
    add_dialog: {
      title: "追加 項目 項目",
      configuration: {
        title: "設定",
        subtitle:
          "ここでこのセクションの情報と設定を管理できます。",
      },
      image: {
        title: "画像",
        subtitle: "項目 項目 項目 項目 項目 項目.",
      },
      code: {
        title: "コード",
        subtitle:
          "項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目.",
      },
      inputs: {
        title: {
          label: "タイトル",
          message: "項目 項目 項目 項目 タイトル.",
        },
        tags: {
          label: "タグ",
          message: "項目 項目 項目 項目 項目 項目.",
        },
        section: {
          message: "項目 項目 項目 項目 項目 項目 項目.",
        },
      },
    },
  },

  /**
   * @see BPageMarketplaceVendors
   */
  marketplace_vendors: {
    title: "販売者 項目",
    subtitle:
      "追加 販売者 項目, 項目 項目 項目 項目 商品 項目 項目 商品 ダッシュボード > 販売者.",
    add_new_vendor_action: "追加 項目 販売者",
    status_tooltip: {
      title: "販売者 ステータス",
      ACCEPTED: "項目 販売者 項目 項目 項目 項目 項目.",
      REJECTED: "項目 販売者 項目 項目 項目 項目.",
      PENDING: "項目 項目 項目 項目 項目 項目 項目 項目 販売者.",
    },
    number_of_products: "項目 項目 商品",
    invited: "項目",
    no_pricing: "項目 項目",
    no_pricing_tooltip: {
      title: "項目 項目 項目",
      subtitle: "項目 項目 項目 項目 項目 項目 項目 項目 販売者.",
    },
    updated_products_tooltip: {
      title: "商品 項目 項目 項目 項目 24 項目",
    },
    added_products_tooltip: {
      title: "商品 項目 項目 項目 項目 24 項目",
    },
    access_tooltip: {
      title: "項目 項目",
      subtitle:
        "項目 販売者 項目 項目 項目 項目 項目. 項目 項目 編集 項目 項目 販売者 > 項目 項目.",
    },
    reject_by_user_tooltip: {
      title: "項目 項目 ユーザー",
      subtitle:
        "項目 ユーザー 項目 項目 項目 項目 項目 項目 販売者 項目 項目 項目 販売者.",
    },
    download_all_vendors: "ダウンロード 項目 販売者",
    bulk_import: "項目 項目 (項目)",
  },

  /**
   * @see BShopLicenseNeedUpdateOverlay
   */
  shop_license_need_update_overlay: {
    title: "ライセンス 項目 項目!",
    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
  },

  /**
   * {@see BOrderChatBox}
   */
  b_order_chat_box: {
    title: "項目 項目",
    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
    send_update_email_action: "項目 更新 Email",
    add_template_action: "追加 メッセージ 項目",

    notifications: {
      add_chat_success_message: "メッセージ 項目 項目 項目 項目.",
    },

    send_update_email: {
      title: "注文 更新 Email",
      need_set_service_alert: {
        message:
          "項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目.",
        action: "項目 項目 設定",
      },
      send_action: "項目 更新 Email",

      notifications: {
        send_success_message: "Email 項目 項目 項目 項目.",
      },
    },
    add_template: {
      edit_title: "編集 メッセージ 項目",
      add_title: "追加 メッセージ 項目",
      message:
        "ここでこのセクションの情報と設定を管理できます。",

      save_action: "保存 項目",
      add_action: "追加 項目",

      notifications: {
        save_success_message: "項目 項目 項目 項目 項目.",
      },

      inputs: {
        title: {
          label: "項目 タイトル",
          placeholder: "項目 項目 項目 タイトル...",
        },
        body: {
          label: "項目 メッセージ",
          placeholder: "項目 項目 メッセージ 項目...",
          messages:
            "項目 項目 項目 項目 値 項目 {order_id} 項目 {buyer_name}.",
        },
      },
    },
  },

  /**
   * {@see BOrderShare}
   */
  b_order_share: {
    title: "注文 リンク",
    subtitle: "項目 項目 項目 項目 注文 リンク 項目 項目 顧客.",
    guest_checkout_message:
      "ここでこのセクションの情報と設定を管理できます。",
    authentication: "項目",
    guest: "項目",
    click_to_create: "項目 項目 作成...",
    valid_for_30_days: "項目 項目 30 項目",
    notifications: {
      secure_link_created: "項目 リンク 項目 項目 項目 項目.",
    },
  },

  /**
   * {@see BPageShopCrmReviews}
   */
  shop_reviews: {
    title: "項目 項目",
    add_source_action: "追加 項目 項目",
    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
  },

  /**
   * {@see BPageShopLogisticPropertySets}
   */
  shop_logistic_property_set: {
    add_caption: "追加 項目 項目 項目",
    title: "プロパティセット",
    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
  },

  /**
   * {@see BProductProfilePropertySet}
   */
  product_property_set: {
    profile: {
      title: "項目 項目 - 項目 項目",
      subtitle:
        "項目 項目 項目 項目 項目 項目 項目 項目 商品, 項目 項目 項目 項目.",
    },

    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
    select_property_set: "選択 項目 項目",
    add_property_set: "追加 項目 項目",
  },

  /** {@see BPageShopLogisticInventory} **/
  transportation_boxes: {
    title: "項目",
    add_action: "追加 項目",
    subtitle:
      "ここでこのセクションの情報と設定を管理できます。",
    empty: "項目 項目 項目. 項目 “追加 項目”.",
    edit: "編集 項目",
    new: "項目 項目",
    default_weight: "項目 項目",
    updated: "項目 項目.",
    created: "項目 項目.",
    deleted: "項目 項目.",
  },

  /** {@see BBoxInput} **/
  transportation_boxes_input: {
    select_box: "選択 項目 項目",
    define_package: "項目 項目 項目",
    define_package_hint: "作成 項目 編集 項目 項目 項目 項目",
  },























  /** {@see BPageShopListing} **/
  listing:{
    name:"項目",
    message:"ここでこのセクションの情報と設定を管理できます。"
  },

  shop_listing: {
    name: "項目",
    message:
      "ここでこのセクションの情報と設定を管理できます。",

    items: {
      title: "アイテム",
      sub_title:
        "作成, 編集, 項目 項目 項目 項目. 項目 ステータス, 項目, 項目 項目, 項目 項目.",

      empty_title: "項目 項目 項目",
      empty_subtitle:
        "作成 項目 項目 項目 項目 項目 項目 項目 項目 項目.",

      add_title: "追加 項目",
      edit_title: "編集 項目",

      price_to: "価格 項目",
      price_unit: "価格 項目",
      is_featured: "項目",

      meta_json: "Meta JSON",
      links_json: "リンク JSON",
      opening_hours_json: "項目 項目 JSON",

      delete_title: "削除 項目",
      delete_message: "項目 項目 項目 項目 項目 項目 削除 項目 項目?",
      delete_success: "アイテムが正常に削除されました。",
      restore_success: "項目 項目 項目.",

      opening_hours:"項目 項目",
      form_fields:"フォーム 項目",

      company: "会社",
      badges: "バッジ",

    },

    categories: {
      title: "カテゴリ",
      sub_title:
        "項目 項目 項目 項目 項目 項目 項目. 項目 項目 項目 項目 項目.",

      empty_title: "項目 項目 項目",
      empty_subtitle:
        "作成 項目 項目 項目 項目 項目 項目 項目 項目.",

      add_title: "カテゴリを追加",
      edit_title: "カテゴリを編集",

      parent_filter: "フィルター 項目 項目",
      parent: "親カテゴリ",

      price_format: "価格 項目",
      icon: "アイコン",
      design_id: "項目 項目",

      delete_title: "カテゴリを削除",
      delete_message: "項目 項目 項目 項目 項目 項目 削除 項目 カテゴリ?",
      delete_success: "カテゴリ 項目 項目.",
      form_schema: "カテゴリ フォーム 項目",
    },

    options: {
      submission_title: "項目",
      submission_enabled: "項目 項目",

      moderation_title: "項目",
      moderation_mode: "項目 項目",
      require_first_approved_before_more: "項目 項目 項目 項目 項目",

      limits_title: "制限",
      max_pending_per_user: "項目 項目 項目 ユーザー",
      max_items_per_user: "項目 項目 項目 ユーザー",
      limits_hint: "制限 項目",

      templates_title: "テンプレート",
      card_template: "項目 項目",
      details_template: "詳細 項目",

      form_schema_title: "フォーム 項目",
      settings_title: "項目 設定"
    },

    supervision: {
      title: "項目",
      sub_title:
        "項目 項目 項目 項目 項目 項目 項目 項目: 項目, 項目, 項目, 項目, 項目 項目 項目 項目.",

      empty_title: "項目 項目 項目 項目",
      empty_subtitle:
        "項目 ユーザー 項目 項目 項目, 項目 項目 項目 項目 項目 項目.",

      review_title: "項目 項目",
      approve_publish: "項目 & 項目",

      submitted_at: "項目",
      quick_actions: "項目 項目",

      open_review: "項目 項目",
      reset_to_pending: "項目 項目 項目",
      items_title: "アイテム",

    },

    moderation: {
      approve_success: "項目 項目 項目.",
      publish_success: "項目 項目 項目.",
      unpublish_success: "項目 項目 項目.",
      archive_success: "項目 項目 項目.",
      reject_success: "項目 項目 項目.",
      penalty_success: "項目 項目 項目.",

      reject_title: "項目 項目",
      reject_reason: "項目 項目",

      penalty: "項目",
      penalty_title: "項目",
      penalty_points: "項目 項目",
      penalty_note: "項目 メモ"
    },

    media: {
      upload_images: "アップロード 項目",
      url_type: "タイプ",
      url: "URL",
      is_main: "項目 項目 項目"
    },






    /** {@see BShopListingDesignsList, BShopListingDesignUpsert} **/
    designs: {
      title: "項目",
      sub_title:
        "作成 項目 項目 項目 (項目 + 詳細 項目) 項目 項目 項目 項目 項目. 項目 項目 項目 項目 項目.",

      empty_title: "項目 項目 項目",
      empty_subtitle:
        "追加 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目.",

      add_title: "追加 項目",
      edit_title: "編集 項目",

      card_template: "項目 項目",
      details_template: "詳細 項目",

      notifications: {
        add_success: "項目 項目 項目.",
        edit_success: "項目 項目 項目.",
        delete_success: "項目 項目 項目.",
      },

      delete_title: "削除 項目",
      delete_message:
        "削除 項目 項目? 項目 項目 項目 項目 項目 項目 design_id.",
    },





    badges: {
      title: "バッジ",
      sub_title:
        "作成 項目 項目 項目 項目. 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目.",

      empty_title: "項目 項目 項目",
      empty_subtitle:
        "追加 項目 項目 項目 項目 項目 項目 項目 項目.",

      add_title: "追加 項目",
      edit_title: "編集 項目",

      notifications: {
        add_success: "項目 項目 項目.",
        edit_success: "項目 項目 項目.",
        delete_success: "項目 項目 項目.",
      },

      delete_title: "削除 項目",
      delete_message: "項目 項目 項目 項目 項目 項目 削除 項目 項目?",
    },

    companies: {
      title: "企業",
      sub_title:
        "作成 項目 項目 項目. 項目 項目 項目 項目 項目 項目 項目 項目 項目 会社.",

      empty_title: "項目 項目 項目",
      empty_subtitle:
        "追加 項目 項目 会社 項目 リンク 項目 項目 項目 項目.",

      add_title: "追加 会社",
      edit_title: "会社を編集する",

      notifications: {
        add_success: "会社 項目 項目.",
        edit_success: "会社 項目 項目.",
        delete_success: "会社 項目 項目.",
      },

      delete_title: "削除 会社",
      delete_message:
        "削除 項目 会社? 項目 項目 項目 項目 項目 項目 項目 会社 リンク.",
    },



    messages: {
      title: "メッセージ",
      sub_title: "項目 メッセージ 項目 項目 ユーザー 項目 項目 プロフィール.",
      empty_title: "項目 メッセージ",
      empty_subtitle: "メッセージ 項目 項目 ユーザー 項目 項目 項目.",

      sender: "項目",
      item: "アイテム",
      has_reply: "項目",
      has_reply_yes: "項目 項目",
      has_reply_no: "項目 項目",

      dialog_title: "メッセージ",
      owner_reply: "項目 項目",
      reply: "項目",
      reply_hint: "項目 項目 項目 項目 項目 ユーザー. 項目 項目 項目 項目 項目 メッセージ 項目 項目/項目 項目 項目.",

      mark_read: "項目 項目 項目",
      mark_unread: "項目 項目 項目",
      archive: "項目",
      unarchive: "項目",
      mark_spam: "項目 項目 項目",
      mark_not_spam: "項目 項目",

      delete_confirm: "削除 項目 メッセージ?",
    },

    enable: {
      title: "項目",
      subtitle: "Selldone — ここでこのセクションの情報と設定を管理できます。",
      true_description: "項目 項目 項目. 顧客 項目 項目 項目 項目.",
      false_description: "項目 項目 項目. 項目 項目 項目 項目 項目 項目 項目.",
      open_listing: "項目 項目",
      note: "項目 項目 項目 項目 項目, 制限, フォーム, 項目 項目 項目 項目 設定.",
      vendor_prereq_text:
        "ここでこのセクションの情報と設定を管理できます。",
      vendor_prereq_button: "項目 マーケットプレイス ビジネス 項目",

      vendor_access_text:
        "ここでこのセクションの情報と設定を管理できます。",
      vendor_access_button: "項目 項目 項目 販売者",

      more_options_text:
        "ここでこのセクションの情報と設定を管理できます。",
      more_options_button: "項目 項目 項目 設定",

      updated: "項目 項目.",
      update_failed: "項目 項目 更新 項目.",
    },


    search: {
      title: "検索 設定",
      subtitle: "ここでこのセクションの情報と設定を管理できます。",

      location_title: "項目 検索",
      location_subtitle: "項目 顧客 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目.",
      location_enabled_true: "項目 フィルター 項目 項目. 顧客 項目 検索 項目 項目.",
      location_enabled_false: "項目 フィルター 項目 項目. 項目 項目 項目 項目 項目 項目 項目.",

      radius_default: "項目 項目 (項目)",
      radius_default_hint: "項目 項目 項目 顧客 選択 項目 項目 項目 項目 項目 項目 項目 項目.",
      radius_max: "項目 項目 (項目)",
      radius_max_hint: "項目 項目 項目 項目 項目 項目 項目 項目 値.",
      radius_options: "項目 項目 (項目)",
      radius_options_hint: "項目 値 項目 項目 項目 項目 項目 項目 項目 項目 項目 項目.",

      filters_title: "検索 フィルター",
      filters_subtitle: "ここでこのセクションの情報と設定を管理できます。",
      no_filters: "項目 フィルター 項目 項目.",
      auto_generate: "項目 項目",

      filter_field: "項目 項目",
      filter_label: "ラベル",
      filter_type: "タイプ",
      filter_options: "オプション",
      filter_options_hint: "項目 選択 フィルター, 項目 項目 項目 手動 項目 項目.",
      multiple: "項目",
      single: "項目",
      kv_mode: "項目/値 項目",

      requires_listing_active: "項目 項目 項目 項目. 項目 項目 項目 項目 項目 項目 項目 項目 項目.",


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
        "売上の支払いが完了しました",
        "ベンダー手数料の支払い。",
        "取引は正常に完了しました。",
        "最近の売上に対する送金。",
        "ベンダー サービスの転送が成功しました。",
      ],
      /**
       * Reverse fund
       */
      reverse_fund_reason: [
        "資金の返却: 銀行からベンダーのウォレットに送金します。",
        "ベンダー ウォレット リフィル: 銀行口座から資金を取り消します。",
        "逆トランザクション: 銀行からベンダーへのウォレット資金移動。",
        "払い戻し: 銀行預金をベンダーのウォレットに戻します。",
        "資金の取り消し: ベンダーのウォレットを銀行から補充します。",
      ],
    },

    /**
     * Email Marketing
     */
    shop_email: {
      name: [
        "超節約週末爆発",
        "独占的なインサイダー取引が明らかに",
        "プレミアム割引への VIP アクセス",
        "豪華な季節セール",
        "ショッピングパラダイスを解放しましょう",
        "グランドショッパーズカーニバル",
        "春のショッピング三昧",
        "見逃せない秋のセール",
        "冬の驚異: 寒い日にぴったりのお買い得品",
        "夏の終わりのクリアランスカウントダウン",
        "ブラック フライデー ボナンザ: 早期アクセス",
        "Hello Holidays: ギフトガイドなど",
        "新鮮な発見: あなただけの新着商品",
        "ロイヤルティの特典: 内部限定割引",
      ],
      subject: [
        "⏰ 期間限定オファー！今すぐお気に入りを手に入れましょう",
        "🌼 新しいシーズン、新しいスタイル - 最新コレクションをご覧ください",
        "👑 あなただけのための特別な VIP セール",
        "💃 新着商品で注目を集める",
        "🔚 すべてが 20% オフになる最後のチャンス",
        "🎁 あなたへのギフト: $10 クレジットが入っています!",
        "☀️ ホットセールで夏に備えましょう",
        "🛍️ ワードローブをアップグレード - あなたにはそれに値するものがあります",
        "👀 スニークピーク: 新製品が近日登場します!",
        "🎂お誕生日おめでとう！特別なギフトが待っています",
        "🖤 ブラック フライデー セールの準備はできていますか?",
        "🎯 あなたのためのトップピック - パーソナライズされたショッピング体験",
        "🍹 自分へのご褒美の時間 - 週末フラッシュセール!",
        "🧹 シーズン終了クリアランス - すべてを完了する必要があります!",
        "🚀 勝ちました!次回のご注文は送料無料",
        "📢 お見逃しなく - ウィッシュリストのアイテムが現在セール中です",
        "🏡 当社の室内装飾コレクションでご自宅に喜びをもたらしましょう",
        "🎉 あなただけのサプライズ!ミステリー割引を解き明かす",
      ],
    },

    /**
     * Discount code
     */
    discount_code: {
      code: [
        "ようこそ10",
        "サマー20",
        "VIPセール30",
        "誕生日15",
        "ブラックフライデー",
        "サイバー月曜日",
        "送料無料",
        "フラッシュセール",
        "クリアランス",
        "早起き",
        "学生10",
        "冬25",
        "春15",
        "秋20",
        "ベストセラー10",
        "ホリデー30",
        "バレンタイン20",
        "母の日",
        "父の日",
        "年の終わり",
      ],
      title: [
        "フラッシュセール: 20% オフ!",
        "VIP 早期アクセス割引",
        "週末セール: 今すぐお得!",
        "今なら 15% オフをお楽しみください",
        "サマーセール: さらに 10% オフ",
        "クリアランスセール！大きく節約",
        "特別オファー: 送料無料",
        "2-for-1: 今日限定!",
        "ホリデースペシャル: 25% オフ",
        "特別な 30% 割引",
        "驚き！さらに20%オフ",
        "季節ごとの節約",
        "ミッドウィーク マッドネス: 10% オフ",
        "まもなく終了: すべて 15% オフ",
        "家族&友人: 20% オフ",
        "今週末は大幅な節約",
        "ブラック フライデー: 40% オフ",
        "こっそり割引: 30% オフ",
      ],
      description: [
        "特別オファーを請求してください!限られた時間のみ。",
        "急いで！特別な割引があなたのカートで待っています。",
        "クリックするだけで大幅な節約が可能です!",
        "このセールが終了する前にぜひご利用ください。",
        "特別割引待ってます！お見逃しなく。",
        "私たちのオファーでショッピング気分を高めましょう!",
        "次回の注文はあなたが思っているよりも少ないかもしれません。",
        "欲しかったあのアイテムを手に入れる絶好のチャンスです。",
        "あなたの一日を明るくするためのちょっとしたこと。",
        "保存する準備はできましたか?驚きの割引が待っています！",
        "あなたは特別だから、特別な特典をご用意します。",
        "何かに目をつけましたか？ここにナッジがあります！",
        "現在ほど節約できる時間はありません。",
        "この取引をお見逃しなく!諦めるのはもったいないです。",
        "素晴らしいニュース！お買い物がさらに安くなりました。",
        "限定割引はまもなく終了しますのでお早めに！",
        "ここであなたの忠誠心に少し感謝します。",
      ],
    },
    /**
     * Coupon
     */
    coupon: {
      title: [
        "節約が解放される",
        "割引のロックを解除する",
        "超節約",
        "独占取引",
        "ボーナス貯蓄",
        "VIP割引",
        "特別なオファー",
        "追加の節約",
        "割引のお知らせ",
        "バジェットブリス",
        "エコノミーディライト",
        "バリューボナンザ",
        "値下げ",
        "ハッピーセービング",
        "もっと節約してもっと買い物しよう",
        "フラッシュディール",
        "バーゲンバウンティ",
        "即時節約",
        "今日の取引",
        "季節の盗み",
      ],
      description: [
        "お得な特典をお楽しみください!次回の購入で節約できます。",
        "私たちはお客様を大切にしています。この特別オファーをぜひご利用ください。",
        "お気に入りのものをより安く手に入れましょう。弊社では割引を行っております！",
        "保存する準備はできましたか?特別な特典が待っています！",
        "あなたは特別だから！次回のご注文で割引をお楽しみください。",
        "たっぷりお買い物して節約しましょう！",
        "倒れるまで買い物をして、節約しましょう!",
        "特別割引でこの季節を祝いましょう。",
        "忠実な顧客に感謝し、特別割引を提供します。",
        "次回の購入で驚くほどの節約を実現しましょう。",
        "あなただけの節約を覗いてみましょう。",
        "驚きの割引を発見してください!",
        "当社限定のオファーでショッピング体験をアップグレードしてください。",
        "特別オファーを利用して節約を始めましょう。",
        "ちょっとした特別な特典、特別割引をご利用ください。",
        "次回のショッピングはさらにお手頃価格になりました!",
        "割引があると買い物がもっと楽しくなるからです。",
      ],
    },

    /**
     * Offer
     */
    offer: {
      title: [
        "バンドルして大幅割引!",
        "もっと買えばもっと節約！",
        "賢い買い物客のための賢い買い物",
        "割引のお知らせ！バンドル割引",
        "コンボオファー - より少ないコストでより多くを",
        "バンドル限定割引",
        "より多くのお金を手に入れましょう!",
        "バンドルすると節約できる",
        "コンボの特別セール",
        "店内で大幅割引！",
        "ベストバリューバンドル",
        "期間限定バンドルセール",
        "コンボで大幅割引",
        "選択した商品を賢く節約",
        "バンドルの無敵のお買い得品",
        "複数購入割引あり",
        "今ならお得にダブルアップ",
        "まとめ買い = 大幅な節約",
      ],

      description: [
        "選択した製品をバンドルすると大幅な割引が得られます。期間限定ですのでお早めに！",
        "賢い取引が待っています!注目のアイテムを一緒に購入するとさらにお得になります。",
        "賢い節約方法を発見しましょう！お気に入りをバンドルして、価格が下がるのを見てください。",
        "選択したアイテムを組み合わせて購入すると、限定割引が受けられます。思い立ったが吉日！",
        "もっと買えばもっと節約！特別な製品バンドルを破格の割引でご提供します。",
        "特別オファーを利用して賢くお買い物をしましょう。一部の製品バンドルの割引価格。",
        "より少ないコストでより多くを手に入れましょう!厳選されたバンドルを購入すると、驚くほどの割引が受けられます。",
        "バンドルすると大幅に節約できます!厳選されたアイテムを期間限定で特別価格でご提供します。",
        "組み合わせて保存！選択した商品を一緒にご購入いただくと、特別割引が適用されます。",
        "買えば買うほどお得になります！特別なバンドルを利用して賢く利用しましょう。",
      ],
    },

    /**
     * Gift card type
     */
    gift_card_type: {
      title: [
        "自分へのご褒美に！",
        "貴方のために！",
        "楽しい買い物！",
        "ぜひお楽しみください！",
        "少し贅沢をする",
        "あなたは特別だから",
        "ちょっとしたサプライズ",
        "あなたの一日を作りましょう",
        "ここがあなたです",
        "喜びを広げよう",
        "愛の贈り物",
        "楽しくお買い物",
        "感謝の印",
        "贅沢をする時間",
        "瞬間を味わう",
        "お気に入りを見つけてください",
        "選択はあなた次第です",
        "自分を表現",
        "魔法を発見する",
        "自分のスタイルを解き放つ",
      ],
    },

    /**
     * Refund vendor order
     */
    vendor_refund_order: {
      note: [
        "資金は仮想ウォレットから引き落とされ、マーケットプレイスのウォレットに戻されました。",
        "返金が行われ、仮想ウォレットの残高が減少しました。",
        "払い戻しが完了しました。マーケットプレイスのウォレットは仮想ウォレットから補充されました。",
        "あなたの仮想ウォレットは、マーケットプレイス ウォレットへの最近の払い戻しのために引き落とされました。",
        "最近の返金により、仮想ウォレットの資金が調整されました。",
        "返金が行われ、仮想ウォレットから金額が差し引かれます。",
        "マーケットプレイス ウォレットへの返金により、仮想ウォレットの残高が減少しました。",
        "返金取引が行われ、仮想ウォレットからマーケットプレイスに資金が戻されました。",
      ],
    },

    /**
     * Product
     */
    product: {
      warranty: [
        "24 か月のゴールド保証",
        "2 年間のプラチナ プロテクション",
        "36 か月間のダイヤモンド保証",
        "シルバーシールド: 1年間の保証",
        "2 年間のエリート保証",
        "24 か月間のプレミアム保護",
        "ブロンズ バックアップ: 1 年間の保証",
        "3 年間の究極の稼働時間保証",
        "24 か月間の安全なサービスの約束",
        "36 か月間の安心保証",
      ],
      pros_name: [
        "効率の向上",
        "費用対効果の高いソリューション",
        "品質保証",
        "使いやすい",
        "タイムセーバー",
        "信頼性の保証",
        "多用途に使用可能",
        "最先端の技術",
        "環境にやさしい",
        "卓越したパフォーマンス",
      ],

      pros_value: [
        "迅速かつ効率的な操作により時間を大幅に節約します。",
        "高度なテクノロジーを採用し、比類のないパフォーマンスを実現します。",
        "コストを削減し、生産性を向上させます。",
        "簡単にナビゲーションできるユーザーフレンドリーなインターフェイスを提供します。",
        "信頼性の高い一貫したパフォーマンスを保証します。",
        "さまざまなタスクにわたって多用途のアプリケーションを提供します。",
        "環境に優しい材料とプロセスを使用しています。",
        "最先端のテクノロジーを使用して設計されており、優れた結果が得られます。",
        "高品質の設計により、長期にわたる耐久性が保証されます。",
        "24 時間体制のカスタマー サポートを提供します。",
      ],

      cons_name: [
        "高額な投資",
        "限定的な互換性",
        "複雑なセットアップ",
        "トレーニングが必要です",
        "標準以下のパフォーマンス",
        "汎用性に欠ける",
        "限定的なサポート",
        "頻繁なメンテナンス",
        "高いエネルギー消費",
        "寿命が短い",
      ],

      cons_value: [
        "代替品と比較して初期投資が高くなります。",
        "すべてのシステムまたはデバイスと互換性があるとは限りません。",
        "セットアッププロセスは非常に複雑になる場合があります。",
        "使用するには追加のトレーニングが必要な場合があります。",
        "パフォーマンスがすべての期待を満たさない場合があります。",
        "機能が制限されているか、汎用性に欠けています。",
        "カスタマー サポートは 24 時間対応できない場合があります。",
        "頻繁なメンテナンスが必要となり、コストが高くなります。",
        "大量のエネルギーを消費し、光熱費に影響を与えます。",
        "製品の寿命は期待したほど長くない可能性があります。",
      ],
    },

    /**
     * Blog Category
     */
    blog_category: {
      category: [
        "技術的な洞察",
        "グルメな発見",
        "旅行物語",
        "健康に関するヒント",
        "ファッションのお気に入り",
        "ビジネスの話題",
        "ライフスタイルストーリー",
        "スポーツ最新情報",
        "アートのハイライト",
        "子育てのポイント",
      ],
      description: [
        "さまざまなトピックに関する洞察力に富んだ記事をご覧ください。",
        "有益なブログ投稿のコレクションをご覧ください。",
        "魅力的なブログ カテゴリのコンテンツに関する最新情報を入手してください。",
        "示唆に富むブログ カテゴリの記事からインスピレーションを得てください。",
        "さまざまなブログ カテゴリのトピックで知識を広げてください。",
        "魅力的なブログ カテゴリの洞察で最新情報を入手してください。",
        "興味深いブログ カテゴリのコンテンツを深く掘り下げてみましょう。",
        "ブログ カテゴリ アーカイブ内で貴重な情報を発見してください。",
        "厳選されたブログ カテゴリから何か新しいことを学びましょう。",
        "充実したブログ カテゴリの記事や投稿にご参加ください。",
      ],
    },

    /**
     * Partner Plan
     */
    partner_plan: {
      name: [
        "スターターパック",
        "エッセンシャルプラン",
        "プロフェッショナル スイート",
        "エンタープライズ版",
        "上級レベル",
        "プレミアムパッケージ",
        "究極のソリューション",
        "エリートレベル",
        "成長アクセラレーター",
        "プラチナパワー",
      ],
    },

    /**
     * Tax Profile
     */
    tax_profile: {
      name: [
        "食品",
        "電子デバイス",
        "衣料品・アパレル",
        "本と文具",
        "健康と美容製品",
        "家具",
        "スポーツ用品",
        "おもちゃとゲーム",
        "ジュエリーとアクセサリー",
        "自動車部品",
        "ガーデン＆アウトドア",
        "キッチン用品",
        "室内装飾",
        "楽器",
        "ペット用品",
        "履物",
        "バッグ＆ラゲージ",
        "事務用品",
        "ハードウェアツール",
        "食料品",
      ],

      label: [
        "VAT", // Value-Added Tax
        "GST", // Goods and Services Tax
        "PST", // Provincial Sales Tax
        "HST", // Harmonized Sales Tax
        "QST", // Quebec Sales Tax
        "CST", // Central Sales Tax
        "消費税", // Excise Tax
        "輸入税", // Import Duty
        "サービス税", // Service Tax
        "高級税", // Luxury Tax
      ],
    },
    /**
     * Cluster
     */
    cluster: {
      name: [
        "セールのハイライト",
        "プロモーションコード",
        "注目のキャンペーン",
        "新着",
        "ベストセラー",
        "季節のスペシャル",
        "限定オファー",
        "イベントセール",
        "VIP限定品",
        "クリアランスアイテム",
        "ホリデーバンドル",
        "テーマコレクション",
        "ブランドショーケース",
        "メンバーのお気に入り",
        "フラッシュディスカウント",
        "必需品を買う",
        "デジタルリソース",
        "ギフトのアイデア",
        "環境に優しいおすすめ",
        "スタッフのおすすめ",
      ],
    },

    /**
     * Popup
     */
    popup: {
      title: [
        "特別なオファー！",
        "新着",
        "期間限定",
        "割引のお知らせ！",
        "限定セール",
        "ホット販売！",
        "クリアランスアラート",
        "送料無料",
        "中にはギフトが！",
        "賞品を獲得する",
        "会員特典",
        "フラッシュセール",
      ],
    },

    /**
     * Campaign
     */
    campaign: {
      name: [
        "ドロップするまでショッピング",
        "カートフレンジー",
        "フラッシュセールフェスタ",
        "クリック、ショッピング、保存",
        "バーゲンボナンザ",
        "E ディールの祭典",
        "メガ マークダウン マッドネス",
        "サイバー節約スプリー",
        "デジタル割引デー",
        "Eコマースカーニバル",
        "オンラインアウトレットオアシス",
        "小売ラッシュ",
        "ウェブストア倉庫セール",
        "E-ショッパーズ パラダイス",
        "バーチャルバウチャーベンチャー",
        "デジタルドアバスター",
        "Eカートのクリアランス",
        "オンラインショッピング対決",
        "スペクタクルなサイバーセール",
        "Eバーゲンブリッツ",
      ],
    },

    /**
     * Valuation
     */
    valuation: {
      title: [
        "T シャツのカスタマイズの価格",
        "手作りジュエリーの査定",
        "パーソナライズされた靴の価格設定",
        "カスタムアートワークの評価",
        "オーダースーツの価格",
        "電子機器のカスタマイズ費用",
        "パーソナライズされた香水の評価",
        "カスタムバッグの価格設定",
        "オーダードレスの査定",
        "パーソナライズされたブックカバーの価格",
        "カスタム家具の評価",
        "オーダーメイド時計の価格",
        "パーソナライズされたおもちゃの評価",
        "オーダーメイド帽子の価格",
        "カスタムスキンケア製品の評価",
        "オーダーメイドの室内装飾の価格",
        "カスタマイズされたキッチン用品の評価",
        "パーソナライズされた文房具の価格設定",
        "オーダーメイドヘアアクセサリーの査定",
        "カスタムスポーツ用品の価格設定",
      ],
      structure: {
        title: [
          "Tシャツのプリントデザイン",
          "ジュエリーメタルタイプ",
          "靴の素材の選択",
          "アートフレームサイズ",
          "スーツ生地の選択",
          "ガジェットのカラーオプション",
          "香水の香りのプロフィール",
          "バッグの素材とサイズ",
          "ドレスの長さとスタイル",
          "ブックカバー素材",
          "家具の木の種類",
          "時計ベルトの素材",
          "おもちゃのカスタム機能",
          "帽子のサイズと色",
          "スキンケア成分の好み",
          "ホームデコレーションのテーマ",
          "キッチン用品素材",
          "便箋の用紙の種類",
          "ヘアアクセサリー素材",
          "スポーツ用品のサイズ",
        ],
      },
    },

    /**
     * Lottery
     */
    lottery: {
      title: [
        "スピンして高額賞品を獲得しましょう！",
        "フォーチュン ホイール ジャックポット",
        "ラッキースピンボナンザ",
        "スピンして報酬を獲得しましょう",
        "富の輪",
        "ラッキー宝くじの祭典",
        "メガスピンサプライズ",
        "プライズ ホイール フェスタ",
        "トレジャースピンスペクタキュラー",
        "スピン・ザ・ホイール・マジック",
        "ラッキーホイールがいっぱい",
        "幸運の恩恵",
        "驚異の輪",
        "スピンして富を得る",
        "賞品スピナーディライト",
        "ゴールデンスピン宝くじ",
        "スピン・ア・プライズ",
        "運命の輪",
        "ラッキー スピン ショーケース",
        "アルティメットスピン報酬",
      ],
      description: [
        "ホイールを回して限定割引を獲得するチャンス!",
        "運試し – フォーチュン ホイールで素晴らしい賞品が待っています!",
        "スピンするたびに大勝利 – 刺激的な報酬を手に入れましょう!",
        "スピンして勝ちましょう！毎回サプライズギフトやオファーが提供されます。",
        "ビッグスコアを獲得するチャンス – ホイールを回してすぐに賞品を獲得しましょう!",
        "スピンするたびに特別な報酬が得られます – あなたは幸運ですか?",
        "回して勝ちましょう！当店のwheel of Fortuneで隠された宝石を見つけてください。",
        "私たちのホイールで幸運を掴みましょう – 賞品や割引など!",
        "すべてのスピンが勝利です - 今すぐ特別賞品を手に入れましょう!",
        "楽しいサプライズのためにハンドルを回してください – 何が当たるでしょうか?",
        "スピンして幸運を解き放ちましょう – 刺激的なショップ特典が待っています。",
        "回転して、割引やギフトなどの賞品を明らかにしましょう!",
        "毎日スピンして興奮を持続させて、ユニークな賞品を獲得しましょう!",
        "運命の輪を回して、ショップ限定のお菓子を手に入れましょう。",
        "ラッキースピンで幸運な勝利がもたらされます – 今すぐ賞品を手に入れましょう!",
        "スピンすると素晴らしいショッピング特典が手に入るかもしれません!",
        "スピンして限定セールや特典を手に入れるチャンスを手に入れましょう。",
        "運命の輪が回っています – 幸運な賞品を手に入れましょう!",
        "回して、勝ち、そして笑顔 – ターンするたびに驚きの報酬が得られます。",
        "スピンして、賞品を運勢に任せましょう!",
      ],
    },

    /**
     * Subscription Price
     */
    subscription_price: {
      title: [
        "基本アクセス",
        "プレミアム会員",
        "ゴールドパッケージ",
        "シルバープラン",
        "プラチナサブスクリプション",
        "エンタープライズ層",
        "スターターバンドル",
        "無制限オファー",
        "ファミリーパック",
        "プロフェッショナル スイート",
      ],
      description: [
        "基礎を探求する個人に最適です。",
        "すべてのプレミアム機能とコンテンツにアクセスできます。",
        "特別な特典と優先サポート。",
        "通常のユーザー向けのバランスの取れたパッケージ。",
        "最高レベルの特典を備えた究極のアクセス。",
        "大規模組織向けのカスタム ソリューション。",
        "手頃な価格のエントリーレベルのオプション。",
        "パワーユーザー向けに、使用制限はありません。",
        "最大4名様までのご家族向け特別プランです。",
        "高度なツールを求めるプロフェッショナル向けに設計されています。",
      ],
    },

    spec: {
      group: [
        "技術仕様",
        "物理的寸法",
        "パフォーマンス機能",
        "接続オプション",
        "電力要件",
        "素材と品質",
        "色と仕上げのオプション",
        "ストレージとメモリ",
        "オペレーティングシステムの互換性",
        "安全性とコンプライアンス",
        "パッケージ内容",
        "保証とサポート",
        "ブランドとメーカー",
        "環境への配慮",
        "エネルギー効率",
        "お手入れとメンテナンス",
        "カスタマイズオプション",
        "付属アクセサリ",
        "ユーザーの評価とレビュー",
        "価格と販売状況",
      ],
    },

    avocado: {
      title: [
        "購入領収書",
        "販売確認",
        "注文請求書",
        "支払い請求書",
        "顧客領収書",
        "取引概要",
        "請求書",
        "チェックアウト領収書",
        "注文の概要",
        "発注書請求書",
        "売上領収書",
        "小売請求書",
        "電子レシート",
        "サービス請求書",
        "製品請求書",
        "支払い領収書",
        "注文確認",
        "請求書",
        "チェックアウト請求書",
        "顧客請求書",
      ],
      message: [
        "ご購入ありがとうございます！",
        "ご利用いただきありがとうございます。",
        "ご注文の商品は発送中です!",
        "当店をご利用いただきありがとうございます。",
        "再度ご利用いただけることを楽しみにしております。",
        "お客様の満足が私たちの最優先事項です。",
        "あなたの体験を評価することを忘れないでください。",
        "当店をご愛顧いただきありがとうございます。",
        "新しいご購入品をお楽しみいただければ幸いです。",
        "将来の参照用に請求書を保存してください。",
        "素晴らしい製品をもっとご覧になりたい方は、ぜひまたお越しください。",
        "特別オファーを受け取るには、接続を維持してください。",
        "大切なお客様になっていただきありがとうございます。",
        "サポートが必要な場合は、お気軽にお問い合わせください。",
        "あなたのフィードバックは私たちの改善に役立ちます。",
        "次回のご購入時に特別割引をお楽しみください。",
        "素晴らしい選択をしましたね！",
        "弊社を信頼していただきありがとうございます。",
        "ご意見をお待ちしております。",
        "私たちのチームから心からの感謝を申し上げます。",
      ],
    },

    /**
     * Map Tag
     */
    map_tag: {
      title: [
        "物件紹介",
        "ベンダープラザ",
        "注目の住宅",
        "ローカルマーケット",
        "新着",
        "エステートガーデン",
        "ショッピング街",
        "アーティザン・アレー",
        "高級不動産",
        "レンタルハブ",
        "オープンハウス",
        "技術革新",
        "ファッションレーン",
        "クラフトコーナー",
        "フードコート",
        "ブックヌーク",
        "ジュエリージャンクション",
        "アンティークアベニュー",
        "フィットネスゾーン",
      ],
    },

    /**
     * Marketplace Documents (For vendors)
     */
    marketplace_document: {
      title: [
        "事業登録証明書",
        "納税者番号 (TIN)",
        "ベンダー契約書",
        "製品カタログ",
        "価格表",
        "銀行口座の詳細",
        "住所証明",
        "保険証書",
        "会社概要",
        "品質保証証明書",
        "安全データシート (SDS)",
        "製品保証情報",
        "返品規則",
        "配送および取り扱い手順",
        "カスタマーサービスポリシー",
        "マーケティングおよびプロモーション計画",
        "ソーシャルメディアリンク",
        "取引参照",
        "サプライヤー行動規範",
        "秘密保持契約（NDA）",
      ],
    },

    /**
     * Expert Contract
     */
    expert_contract: {
      title: [
        "マーケットプレイス設定サービス契約",
        "ショップ構成契約",
        "オンデマンド印刷サービス契約",
        "デジタルマーケティングサービス契約",
        "電子商取引プラットフォーム設定契約",
        "事業主向け専門コンサルタント契約",
        "マーケットプレイス構成に関するサービス契約",
        "ショップのセットアップおよび構成サービス契約",
        "PODサービス提供契約",
        "マーケティング戦略実施契約",
        "ビジネス開発サービス契約",
        "電子商取引ストア設定契約",
        "専門家サービス提供契約",
        "ビジネスソリューションとセットアップ契約",
        "カスタムショップセットアップサービス契約",
        "マーケットプレイス最適化サービス契約",
        "コンサルティングおよびセットアップサービス契約",
        "POD統合サービス契約",
        "マーケティングおよびプロモーションサービス契約",
        "事業拡大サービス契約",
      ],
    },

    /**
     * Account
     */
    account: {
      account_name: [
        "メインウォレット",
        "ビジネスアカウント",
        "個人用ウォレット",
        "貯金ウォレット",
        "経費勘定",
        "プライマリウォレット",
        "一般会計",
        "リザーブウォレット",
        "トランザクションウォレット",
        "ファンド口座",
      ],
    },

    /**
     * Cashback
     */
    cashback: {
      title: [
        "買い物してキャッシュバックを獲得",
        "ロイヤルティリワードキャッシュバック",
        "限定キャッシュバックオファー",
        "キャッシュバック大当たり",
        "即時キャッシュバック特典",
        "季節限定キャッシュバックセール",
        "ダブルキャッシュバックデー",
        "購入ごとにキャッシュバック",
        "キャッシュバック狂乱",
        "VIPキャッシュバックプログラム",
        "期間限定キャッシュバック",
        "キャッシュバックリワードクラブ",
        "より多く購入して、より多く節約",
        "究極のキャッシュバック報酬",
        "キャッシュバック大セール",
      ],
      description: [
        "ご購入ごとにキャッシュバックを獲得しましょう！",
        "あなたの忠誠心に対して報酬を得ましょう。",
        "あなただけのための特別なキャッシュバックオファー。",
        "キャッシュバック特典で大幅な節約をお楽しみください。",
        "お気に入りのアイテムすべてに即時キャッシュバック。",
        "季節ごとのキャッシュバック特典でさらに節約しましょう。",
        "特別な日にキャッシュバックが2倍になります！",
        "買い物をするたびにキャッシュバックを獲得できます。",
        "今すぐキャッシュバック熱狂に参加しましょう!",
        "VIP会員は限定キャッシュバックをお楽しみいただけます。",
        "お急ぎください！期間限定のキャッシュバックオファー。",
        "今すぐキャッシュバック リワード クラブにご参加ください。",
        "買い物をすればするほど、節約できます。",
        "究極のキャッシュバック特典を獲得しましょう。",
        "最高のキャッシュバック特典を体験してください。",
      ],
    },

    /**
     * Page
     */
    page: {
      prompts: [
        "{shop}へようこそ - 当店のユニークな商品ラインナップをご覧ください",
        "{shop} - 高品質の商品と優れたサービスを提供する究極のソース",
        "{shop} だけの特別セールと割引 - この機会をお見逃しなく!",
        "{shop} の環境への配慮と倫理的な取り組みについて知る",
        "{shop}ファミリーの一員になりましょう - 最新情報を受け取るにはニュースレターを購読してください",
        "{shop} で人気の商品や高評価の商品をチェックしましょう",
        "{shop} のあらゆるイベントのアイデアとクリエイティブな提案をご紹介します",
        "{shop} では他に類を見ないオファーと期間限定の特別セールをご用意しています - お早めにお買い求めください!",
        "{shop} の包括的な購入のヒントと製品評価 - 安心してお買い物",
        "{shop} にご連絡ください - 私たちは比類のないショッピング体験を提供することを目指しています",
      ],
    },

    /**
     * Cross-Selling
     */
    cross_selling: {
      message: [
        "あなたのルックを完成させるために、セットを手に入れましょう!",
        "バンドル セールで大幅に節約しましょう!",
        "完璧な組み合わせをお見逃しなく!",
        "購入を強化すると、アドオンが待っています!",
        "特別割引をゲットして、一緒に購入しましょう!",
        "補完アイテム、特別割引！",
        "より多く手に入れ、より少なく支出 – まとめ買いしましょう!",
        "期間限定オファー：マッチした商品！",
        "コンボ ディールで体験をアップグレードしましょう!",
        "厳選されたコンボを見つけて、今すぐ節約しましょう!",
        "究極のコンボのために組み合わせてください!",
        "賢く買い物して、まとめ買いして節約しましょう!",
        "価値が2倍、楽しさも2倍！",
        "あなたにぴったりの商品がここにあります – 今すぐご購入ください!",
        "あなただけのための特別バンドル価格!",
        "コンボで節約を最大限にしましょう!",
        "これらのピックでコレクションを充実させましょう!",
        "あなたのために厳選：マッチして節約！",
        "完璧な一日のための完璧なペア！",
        "お気に入りをまとめ買いするとさらにお得になります!",
      ],
    },

    /**
     * Cross-Selling
     */
    vendor_pricing: {
      title: [
        "項目 項目",
        "項目",
        "項目",
        "項目",
        "項目 項目",
        "項目 商品",
        "項目 項目",
        "おもちゃとゲーム",
        "食料品",
        "家具",
        "自動車部品",
        "ジュエリー",
        "項目 & 項目",
        "ペット用品",
        "事務用品",
        "項目 & 項目",
        "項目 & 項目 表示",
        "ソフトウェア",
        "項目 & 項目",
        "項目 項目",
      ],
    },

    /**
     * Template Message
     */
    template_message: {
      title: [
        "注文確認",
        "注文 項目",
        "注文 項目",
        "支払い 項目",
        "注文 項目",
        "注文 項目 項目",
        "注文 項目 項目",
        "注文 項目 項目 項目",
        "項目 項目",
        "返金 項目",
        "項目 項目 項目 項目",
      ],
      body: [
        "ここでこのセクションの情報と設定を管理できます。 {buyer_name} {order_id}",

        "ここでこのセクションの情報と設定を管理できます。 {buyer_name} {order_id}",

        "ここでこのセクションの情報と設定を管理できます。 {buyer_name} {order_id}",

        "ここでこのセクションの情報と設定を管理できます。 {buyer_name} {order_id}",

        "ここでこのセクションの情報と設定を管理できます。 {buyer_name} {order_id}",

        "ここでこのセクションの情報と設定を管理できます。 {buyer_name} {order_id}",

        "ここでこのセクションの情報と設定を管理できます。 {buyer_name} {order_id}",

        "ここでこのセクションの情報と設定を管理できます。 {buyer_name} {order_id}",

        "ここでこのセクションの情報と設定を管理できます。 {buyer_name} {order_id}",

        "ここでこのセクションの情報と設定を管理できます。 {buyer_name} {order_id}",

        "ここでこのセクションの情報と設定を管理できます。 {buyer_name} {order_id}",
      ],
    },

    /**
     * Property Set
     */
    property_set: {
      title: [
        "項目",
        "項目 項目",
        "項目",
        "食品",
        "家具",
        "項目",
        "項目 商品",
        "項目",
        "項目 項目",
        "項目",
      ],
      description: [
        "項目 項目 項目 項目 項目 項目, 項目, 項目 項目.",
        "項目 項目 項目 項目 項目 項目, 項目, 項目 項目.",
        "項目, 項目, 項目 タイプ 項目 項目.",
        "詳細 項目 項目, 項目, 項目 項目 商品.",
        "項目, 項目, 項目 項目 項目.",
        "項目, 項目, 項目 項目 項目.",
        "項目 タイプ, 項目, 項目 項目 詳細.",
        "項目 項目, 項目, 項目 項目 項目.",
        "タイプ, 項目, 項目 項目 項目.",
        "項目, 項目, 項目 項目 詳細.",
      ],
    },

    /**
     * Boxes
     */
    boxes: {
      name: [
        "項目 項目",
        "項目 項目",
        "項目 項目",
        "項目 項目",
        "項目 項目",
        "項目 項目",
        "項目 項目",
        "項目 項目",
        "項目 項目",
        "項目 項目",
        "項目 項目",
        "項目 項目",
        "項目 項目",
        "項目 項目 項目",
        "項目 項目 項目", // flexible mailer
        "項目 項目", // bubble/padded
        "項目 項目", // thermal
        "項目 項目",
      ],
    },
  },
};
