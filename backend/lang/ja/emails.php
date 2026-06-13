<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'このメッセージは、ショップへの新しい購入者を歓迎します。',
        ShopMailTemplateCodes::OrderCheckout => 'この通知は、購入者が注文を確認したときに送信されます。',
        ShopMailTemplateCodes::OrderPayment => 'この通知は、顧客による支払いが正常に行われたことを確認します。',
        ShopMailTemplateCodes::OrderUpdate => 'このメッセージは、購入者に注文のステータスを更新するために送信されます。',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'このメッセージは、注文が確認されたことを通知するために販売者に送信されます。',
        ShopMailTemplateCodes::PosCheckout => 'この通知は、購入者の POS 注文を確認するために送信されます。',
        ShopMailTemplateCodes::PosPayment => 'この通知は、購入者による販売時点での支払いを確認します。',
        ShopMailTemplateCodes::PosPaymentAdmin => 'このメッセージは、販売時点での購入を販売者に通知します。',
        ShopMailTemplateCodes::ShopContact => 'この通知は、お問い合わせフォームが送信されたときに送信されます。',
        ShopMailTemplateCodes::ShopGiftCard => 'この通知は、ギフトカードを受け取ったことをユーザーに知らせます。',

        ShopMailTemplateCodes::ShopVendorJoin => 'このメッセージは、ショップへの新しいベンダーを歓迎します。',
        ShopMailTemplateCodes::ShopVendorInvite => "このメッセージは、ベンダーをマーケットプレイスに参加するよう招待するために送信されます。",
        ShopMailTemplateCodes::ShopVendorOrder => "このメッセージは、注文が支払い済みまたは代金引換 (COD) ステータスで受け取られたときにベンダーに送信されます。",
        ShopMailTemplateCodes::ShopVendorProducts => "ベンダーに製品のステータスを更新するために毎日派遣されます。",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "このメッセージは、ベンダーをマーケットプレイスに招待するために送信されます。",

        ShopMailTemplateCodes::UserLogin => "セキュリティ上の理由から、IP アドレス、日付、デバイスなどのログイン詳細をユーザーに通知します。",
        ShopMailTemplateCodes::LoginCode => "ユーザーがストアにログインするためのワンタイム パスワード コードを送信します。",

        ShopMailTemplateCodes::EmailVerifyLink => "ユーザーの電子メール アドレスを確認するためのリンクを送信します。この電子メールは、ユーザーが SMS で登録し、電子メールを入力すると送信されます。ユーザーがソーシャル ログインまたは電子メールを使用して直接登録した場合は送信されません。",

        ShopMailTemplateCodes::EmailBulkOrder => "特定の日に受け取った注文と支払った注文のリストを一括で送信します。"


    ,

    ],


    'global' => [
        'greetings' => 'こんにちは、:name!',
        'end-statement' => '支援チーム',

        'receiver_name' => 'こんにちは:user_name',
        'footer-help' => "助けが必要ですか? [support@selldone.com](mailto:support@selldone.com) にお問い合わせいただくか、[ヘルプ センター](https://selldone.com/community) にアクセスしてください。",
        'selldone-team' => 'Selldone チーム',
        'footer-shop' => "何かご不明な点がございましたら、お気軽にメールでお問い合わせください: :shop_mail",
        'accept' => "承認",
        'reject' => "拒絶",
        'verify' => "確認する",
        'title' => "タイトル",
        'value' => "価値",
        'description' => "説明",
        'shop' => "店",
        'shop-info' => "店舗情報",
        'user' => "ユーザー",
        'user-info' => "アカウント情報",
        'license' => "ライセンス",
        'status' => "状態",
        'start' => "始める",
        'end' => "終わり",
        'renewal' => "リニューアル",
        'view' => "意見",

        'balance' => "バランス",
        'card_number' => "カード番号",
        'cvv' => "履歴書",
        'expire_date' => "有効期限",

        'Dashboard' => "ダッシュボード",
        'order' => "注文",
        'view_order' => "表示の順序",
        'pay_now' => "Pay now",

        'official_selldone' => "公式セルドン",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "通貨",
        'free-balance' => "フリーバランス",
        'locked-balance' => "ロックされた残高",
        'bot' => "ボット",
        'requests' => "リクエスト",
        'baskets' => 'カート',
        'physical' => "物理的",
        'virtual' => "バーチャル",
        'file' => "ファイル",
        'service' => "サービス",
        'fulfillment' => "フルフィルメント",
        'open' => "開ける",
        'reserved' => "予約済み",
        'canceled' => "キャンセル",
        'payed' => "有料",
        'cod' => "COD",
        'orders-count' => '注文',
        'payments-count' => '支払い',
        'confirms-count' => '確認する',
        'sends-count' => '送信します',
        'delivers-count' => '配達します',
        'count' => 'カウント',
        'transactions-count' => 'トランザクション数',
        'success-transactions' => '成功取引',
        'total-amount' => '合計金額',
        'amount' => '額',
        'wage' => '賃金',
        'debug' => 'デバッグ',
        'pos' => 'POS',
        'live' => '住む',
        'CheckQueue' => 'キューをチェック',
        'OrderConfirm' => '注文確認',
        'PreparingOrder' => '注文の準備',
        'SentOrder' => '注文を送信しました',
        'ToCustomer' => 'お客様へお届け',
        'Pending' => '保留中',
        'Accepted' => '承認済み',
        'Rejected' => '拒否されました',
        'pc' => 'PC',
        'tablet' => 'タブレット',
        'phone' => '電話',
        'total' => '合計',
        'view-detail' => '詳細を表示',
        'empty' => '空',
        'dropshipping' => 'ドロップシッピング',
        'reply' => '返事',
        'reactions' => '反応',
        'Comments' => 'コメント',
        'last-comment' => '最後のコメント',
        'response-to' => 'への応答',
        'posts' => '投稿',
        'post' => '役職',

        'name' => '名前',
        'email' => 'Eメール',
        'type' => 'タイプ',
        'device' => '端末',
        'platform' => 'プラットホーム',
        'browser' => 'ブラウザ',
        'time' => '時間',
        'Wallet' => 'ウォレット',
        'date' => '日にち',

        'account' => 'アカウント',
        'transaction' => '取引',
        'fee' => '手数料',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => '明細書',
        'category' => 'カテゴリー',
        'password' => 'パスワード',
        'verify-login' => "確認してログイン",
        'url' => 'URL',
        'avocado' => 'アボカド',
        'hyper' => 'ハイパー',
        'buy-now' => "今買う",
        'add-domain' => "Add Domain",
        'views' => 'ビュー',


        'country' => '国',
        'address' => '住所',
        'postal' => '郵便番号',
        'building_no' => '建物 ＃',
        'building_unit' => '単位 ＃',
        'message' => 'メッセージ',


        'customer' => 'お客様',
        'cart-items' => 'カートの商品',
        'payment' => '支払い',
        'receiver' => 'レシーバー',
        'virtual-items' => '仮想アイテム',
        'no-payment' => '支払いはありませんよ！',

        'enable' => '有効',
        'access' => 'アクセス',
        'bank' => '銀行情報',

        'vendor' => 'ベンダー',

        'view_content' => "全文を見る",
        'files' => 'ファイル',
        'download' => 'ダウンロード',
        'file_name' => 'ファイル名',
        'file_size' => 'サイズ',

        'subscription' => 'サブスクリプション',
        'products' => '製品',
        'vendor_products' => 'ベンダー製品',

        'pickup' => 'ピックアップ',

        'minutes' => '分',
        'hours' => '営業時間',

        'refund' => '払い戻し',
        'recipient_address' => '受信者のアドレス',
        'signature' => '署名',
        'blockchain' => 'ブロックチェーン',
        'details' => '詳細',


    

        'Shop' => '店',
        'dashboard' => 'ダッシュボード',
        'comments' => 'コメント',
        'wallet' => '財布',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone ビジネス OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'パフォーマンス レポート、Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'シーズンレポート、Selldone'
        ],
        'Onboarding' => [
            'id' => 'こんにちは',
            'name' => 'Selldone 販売者'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'サポート :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'こんにちは',
            'name' => 'Selldone コミュニティ'
        ],
        'NewShop' => [
            'id' => '商人',
            'name' => 'Selldone 販売者'
        ],
        'Approve' => [
            'id' => '承認',
            'name' => 'Selldone 販売者'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => '注文管理 :name'
        ],

        'Recovery' => [
            'id' => '回復',
            'name' => 'Selldone 復旧チーム'
        ],

    ],


    'bill-status' => [
        'PENDING' => '保留中 ⌛',
        'PAYED' => '有料 ✅',
        'CANCELED' => 'キャンセル❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => '管理者',
            'OFFICER' => 'オフィサーとスーパーバイザー',
            'AUDITING' => '監査責任者',
            'EMPLOYEE' => '従業員',
            'PRODUCT' => 'プロダクトマネージャー',
            'CONTENT' => 'コンテンツマネージャ',
            'MARKETING' => 'マーケティング・マネージャー',
            'VIEWER' => 'ビューア',

        ],
        'subject' => ":inviter が :level として招待しました| :shop",
        'category' => "スタッフ招待",
        'title' => "<b>:shop_name</b> に <b>:level</b> として招待されました。",
        'message' => "<b>:shop_title</b> チームとビジネスで共同作業するための招待状を受け取りました。このオファーを受け入れるか拒否するかを選択できます。受け入れることを選択した場合は、Selldone サービスにログインして決定を確認してください。確認すると、ストア管理セクションにアクセスできるようになります。",

    ],

    'welcome-email' => [
        'subject' => "👋 :name へようこそ。Selldone を始めましょう!",
        'category' => 'CONGRATULATION',
        'title' => "Selldone へようこそ",
        'message' => "Selldone をお選びいただきありがとうございます。あなたは今、世界的な販売者と顧客、地元企業と企業、個人と企業を結び付ける活気に満ちたコミュニティの一員です。当社のマスター ツールとプロ ツールはすべて **無料**かつ*無制限**でご利用いただけます。私たちはあなたをサポートし、成功への扉を開くためにここにいます。",

        'index' => "ステップ:step。",

        'step-domain' => [
            'title' => 'カスタム ドメインを追加する',
            'message' => "まず、ショップ ダッシュボードの [設定] > [ドメイン設定] でカスタム ドメインを無料で追加します。",
            'action' => '私のドメインの管理',
        ],
        'step-landing' => [
            'title' => 'ホームページをカスタマイズする',
            'message' => "[ダッシュボード] > [ページ] に移動して、ホームページをパーソナライズします。ランディング ページを選択するか、新しいランディング ページを作成します。簡単かつ直感的に操作できるので、すぐに作業を始めることができます。",
            'action' => 'ランディング ページをカスタマイズする',
        ],
        'step-payment' => [
            'title' => '支払い方法の設定',
            'message' => "銀行口座への直接支払いの受け入れを開始します。 Stripe、PayPal などの支払いプロバイダーに接続するには、[ダッシュボード] > [会計] > [ゲートウェイ] に移動します。",
            'action' => '支払い方法の追加',
        ],
        'step-products' => [
            'title' => '製品を追加する',
            'message' => "[ダッシュボード] > [製品] で製品とカテゴリを簡単に追加できます。 PC 上のファイルやフォルダーを管理するのと同じように、ドラッグ アンド ドロップで完全に操作できます。 Excel を使用して商品を一括インポートすることもできます。開始に役立つサンプル テンプレートが用意されています。",
            'action' => '私の製品を管理する',
        ],
        'step-shipping' => [
            'title' => '配送方法の設定',
            'message' => "顧客に送料を請求するには、「ダッシュボード」>「ロジスティック」>「配送」で配送方法を定義します。さまざまな場所に異なる価格設定とサポートを設定できます。 [ダッシュボード] > [ロジスティック] > [倉庫] で倉庫の起点を設定することを忘れないでください。",
            'action' => '配送方法の管理',
        ],
    

        'seller' => [
            'title' => 'あなたは売り手ですか？',
            'message' => '販売を開始するには、以下のリンクから Selldone のダッシュボードに入り、完全に無料で最初のストアを作成してください。これには数分かかり、独自のストアとオンライン サイトが作成されます。その後、次のステップに進み、支払いゲートウェイを取得します。',
            'action' => 'マイダッシュボードにログイン',
        ],
        'buyer' => [
            'title' => '私はバイヤーです',
            'message' => 'おめでとう。 Selldone のメンバーになると、オンライン ストアでのメンバーシップや認証の煩わしさから解放されます。 Selldone プラットフォームを使用するストアやサイトを利用するには、ワンクリックでログインして、簡単、迅速、安全に購入できます。',
        ],
    ],


    'charge-account' => [
        'category' => 'ウォレット > アカウント > チャージ',
        'title' => "サクセスチャージ",
        'message' => "あなたのアカウント<b>:account_number</b>は正常に<b>:amount を</b>請求されました。",
        'account' => 'アカウント',
        'charge' => '充電',
        'balance' => 'バランス',
        'footer' => "世界中の誰もが簡単に、達成可能で、アクセスしやすいビジネスを実現します。"
    ],

    'verify-email' => [
        'subject' => "🙌 Selldone へのサインアップを完了してください!リンクを確認します。",
        'category' => "あなたは一歩先です",
        'title' => "あなたのメールアドレスを確認してください",
        'message' => "こんにちは :name、<br><br>Selldone をお選びいただきありがとうございます!<br><br><b>:email</b> が正しい電子メール アドレスであることを確認するには、下のボタンをクリックするか、提供されたリンクを使用してください。この検証を完了するには 48 時間以内に行ってください。",
        'footer' => "[確認] ボタンをクリックできない場合は、次の URL をコピーして Web ブラウザーに貼り付けます: :activation_url",
        'next-step' => "次に、カスタム ドメインの追加、支払いの設定、製品の追加、最初の注文を簡単に行うための役立つ資料とステップバイステップ ガイドをお送りします。",

    ],
    'verify-email-code' => [
        'subject' => ":name の確認コード",
        'category' => "SECURITY",
        'title' => "メール認証コード",
        'message' => "こんにちは、:name、<br><br><b>:email</b> が正しい電子メール アドレスであることを確認するには、次の <b>10 分以内に次のコードを入力してください</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 ショップの準備は完了です| :name",
        'category' => "あなたは一歩先です",
        'title' => "セットアップ完了",
        'account_title' => "貴方のアカウント",
        'account_msg' => "この情報を使用してアカウントを確認し、ログインします。",
        'shop_msg' => "Selldone ビジネス オペレーティング システムのアカウント情報。",

    ],

    'reset2fa' => [
        'category' => "セキュリティ公式メッセージ",
        'title' => "2 段階ログインの無効化をリクエストする",
        'message' => "このメールは、**:email** メールで **:name** アカウントの 2 要素認証をリセットするリクエストを受信したためにお送りしています。<br><br>あなたのアカウントについて次の詳細が見つかりました:",
        'footer' => "パスワードのリセットを要求していない場合は、これ以上の操作は必要ありません。",
        'action' => '2 段階ログインを無効にする',
    ],


    'build-new-shop' => [
        'subject' => "🎊 お店の準備が整いました！",
        'category' => "世界に新しいオンラインストアが誕生",
        'title' => "おめでとうございます、:name!",
        'message' => "<b>:name さん、おめでとうございます。あなたの新しいオンライン ビジネスが開始されました!</b> Selldoners コミュニティへのお越しをお待ちしております。あなたは成功への第一歩を踏み出しました。私たちはあらゆる段階であなたをサポートします。<br>ストアの準備が整ったので、顧客から直接支払いを受け取り、帝国の拡大を開始できるようにしましょう。サポートが必要な場合は、メッセージをお送りください。サポート チームがいつでも対応します。<br><br><b>重要な次のステップ:</b> まず、支払いの受け取りとスムーズな操作のための設定がすべて整っていることを確認してください。ストアをシームレスに運営するための各段階をガイドします。",
        'pdf-book' => "添付のハンドブックをお見逃しなく: Do Your Business Like A Game",

        'account' => [
            'title' => 'ステップ 1: Selldone ウォレットにアカウントを作成する',
            'message' => "まず、Selldone ウォレットにアカウントを作成します。ここで手数料が差し引かれ、ストアを円滑に運営し続けるために補充する場所でもあります。残高がマイナスになっても心配しないでください。ストアは中断することなく営業を続けます。",
            'action' => 'ウォレットにログイン',
        ],

        'shop-account' => [
            'title' => 'ステップ 2: アカウントをストアに接続する',
            'message' => "次に、ウォレット アカウントをストアに接続します。 <b>ストア > 会計 > Invoice</b> に移動し、ウォレットをリンクします。これにより、すべての顧客の支払いがあなたの銀行口座に直接入金されることが保証されます。Selldone はあなたの収益から金額を差し引くことはありません。",
            'action' => '請求書パネルの保管',
        ],

        'gateway' => [
            'title' => 'ステップ 3: オンライン決済ゲートウェイを接続する',
            'message' => "次に、オンライン支払いゲートウェイを設定しましょう。 <b>ストア > アカウンティング > ポート</b> に移動し、<b>新しいポートの追加</b> をクリックします。通貨を選択すると、利用可能な支払いゲートウェイのリストが表示されます。ゲートウェイの接続はすばやく簡単ですが、サポートが必要な場合は、Selldone ガイドを確認するか、お気軽にお問い合わせください。",
            'action' => 'ストアにポータルを追加する',
        ],

        'domain' => [
            'title' => '最後のステップ: 専用ドメインの接続',
            'message' => "必要な数のドメインにストアを配置できます。専用ドメインをストアに接続するには、少なくともスタートアップ ライセンスが必要です。お友達1人1人をSelldoneに紹介することで、1ヶ月分のスタートアップライセンスギフトカードがもらえます。友達の支払いの一部は、顧客のアカウントにも入金されます。",
            'action' => '無制限のギフトカードの紹介と受け取り',
        ],
    ],


    'basket-list' => [
        'item' => "アイテム",
        'count' => "カウント",
        'price' => "価格",
        'discount-code' => "ディスカウントコード",
        'customer-club' => 'カスタマークラブ',
        'shipping' => "運送",
        'total' => "合計",
        'offer' => "オファー",
        'coupon' => "クーポン",
        'lottery' => "アワード",
        'tax' => "税",
        'tax_included' => "価格に含まれています",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => '方法',
        'amount' => '額',
        'giftcard' => 'Gift card',
        'payment' => '支払い',
    ],


    'shop-subscription-email' => [
        'category' => "サブスクリプションの更新",
        'title' => "ストアライセンス: :shop_title",
        'title-reserved' => "予約ライセンス: :shop_title",
        'title-active' => "有効なライセンス: :shop_title",
        'title-finished' => "完成したライセンス: :shop_title",
        'title-cancel' => "ライセンスをキャンセル: :shop_title",
        'message' => "ショップ ライセンス プランが更新されました。",
        'RESERVED' => "⚡ あなたのサブスクリプション プランは**予約済み**です。",
        'ACTIVE' => "🟢 サブスクリプション プランが **アクティブ化**されました。",
        'FINISHED' => "🚧 サブスクリプション プランは **終了**しました。",
        'CANCEL' => "⛔ お客様のサブスクリプション プランは **キャンセルされました**。",
    ],

    'support' => [
        'subject' => "サポートセンター|:nameが返信しました",
        'category' => "サポートセンター",
        'title' => "返信がありました",
        'action' => "ショップ管理者を開く",
    ],

    'shop-customer-join' => [
        'subject' => "参加:shop_title",
        'category' => "新規のお客様のお祝い",
        'title' => "会員登録をよろしくお願いします",
        'action' => "今すぐアクセス",
    ],

    'shop-vendor-join' => [
        'subject' => "ベンダーオンボーディング | :shop_title",
        'category' => "新規ベンダーのお祝い",
        'title' => "会員登録をよろしくお願いします",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "ギフトカード :shop_title",
        'category' => "新しいカードを追加",
        'title' => "おめでとうございます、ギフトカードを受け取りました",
        'action' => "今すぐ購入",
        'message' => ":balance :currency のギフトカードを受け取りました。このギフトカードで当店でお買い物ができます。",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "サポートセンター| :shop",
        'category' => "サポート",
        'title' => "返信がありました",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 注文チェックアウト | :order_id",
        'title' => "注文",
        'message' => "当店でご注文いただきました。ご注文を受け付けましたので、お支払いが確認され次第、再度メールをお送りいたします。"
    ,

        'payments' => '支払い',
    ],

    'order-payment' => [
        'subject' => "🛍 支払い確認 | :order_id",
        'title' => "支払指図書",
        'message' => "お支払いが完了し、<br>ご注文を承りました。ご注文の商品が発送されたら、別のメールをお送りします。",
    

        'payments' => '支払い',
    ],

    'order-update' => [
        'subject' => "🛍️ 注文ステータスの更新|注文:order_id",
        'title' => "注文状況の更新",
        'message' => "ご注文が更新されました。この注文の最新ステータスはアカウントで確認できます。",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "ご注文は処理待ちの状態です。準備ができ次第お知らせいたします。",
                'OrderConfirm' => "ご注文が確定し、準備が始まりました。",
                'PreparingOrder' => "ご注文は準備中で、間もなく発送されます。",
                'SentOrder' => "ご注文は発送されました。すぐに届きます。",
                'ToCustomer' => "ご注文は配達されました。ぜひお楽しみください。",

                'PreparingOrder-PICKUP' => "ご注文は準備中です。受け取りの準備が整うと通知が届きます。",
                'SentOrder-PICKUP' => "ご注文は受け取りの準備ができています。店頭まで引き取りに来てください。",
                'ToCustomer-PICKUP' => "ご注文は受け取りました。ぜひお楽しみください。"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "ご注文は処理待ちの状態です。準備ができたらお知らせします。",
                'OrderConfirm' => "ご注文を確認し、準備を進めております。",
                'PreparingOrder' => "ご注文は準備中ですので、間もなく発送されます。",
                'ToCustomer' => "仮想注文があなたのアカウントに届けられました。ありがとう！"
            ],
            'SERVICE' => [
                'CheckQueue' => "サービスリクエストはキューに入っています。開始したらお知らせします。",
                'OrderConfirm' => "サービスが確認され、開始の準備を行っています。",
                'PreparingOrder' => "サービスを準備中です。完了したらお知らせします。",
                'ToCustomer' => "サービスは完了しました。私たちを選んでいただきありがとうございます!"
            ],
            'FILE' => [
                'PreparingOrder' => "ファイルは準備中です。間もなく利用可能になります。",
                'ToCustomer' => "ファイルの準備が完了し、配信されました。ダウンロードできるようになりました。"
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "あなたのサブスクリプション注文はキューにあります。処理が開始されると通知されます。",
                'OrderConfirm' => "あなたのサブスクリプションが確認され、設定中です。",
                'PreparingOrder' => "サブスクリプションの準備を行っており、間もなく開始されます。",
                'SentOrder' => "サブスクリプションが有効になりました。継続的な更新情報を受け取ることができます。",
                'ToCustomer' => "サブスクリプション サービスが正常にアクティベートされました。"
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'おめでとうございます:name|新しいクーポン: :title',
        'category' => "おめでとうございます、新しいバウチャー",
        'message' => ":name、<br><br> 私たちからのギフトとして新しいクーポンを受け取りました。 Selldone を友達や知り合い全員に紹介すると、さらに多くのクーポンを獲得できます。このバウチャーは **:price :currency** の価値があります。<br><br>あなたは最初の一歩を踏み出しました。バウチャーを使用して新機能のロックを解除するお手伝いをいたします。 **:email** でログインし、ショップ **ダッシュボード** > **設定** > **ライセンス** でバウチャーを見つけてください。<br><br>おめでとうございます!",
        'action' => "マイ ダッシュボード",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'おめでとう、 親愛なる :name |ギフトを受け取りました',
        'category' => "プレゼント当選のお知らせ",
        'title' => "あなたへの贈り物",
        'message' => "こんにちは、:name さん。Selldone から特別なギフトを受け取ったのでお知らせいたします。 🎉 アクティブに活動を続け、ストアを成長させ、Selldone の専門知識を向上させることで、より多くのギフトを獲得できます。ギフトを確認するには、:email でログインし、ダッシュボードの右上隅でギフトを探してください。<br><br>このギフトは **:price :currency** の価値があり、Selldone 内のウォレットに簡単に入金できます。<br><br>ギフトを使用してストアをアップグレードしてください。オンライン ビジネスを強化するためのさらに強力なツールのライセンスを取得し、ロックを解除してください。",
        'action' => "ギフト",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 新しい注文を受け取りました | :order_id",
        'title' => "New Order",
        'message' => "新しい注文を受け取りました。ストアの注文処理ページに移動してください。",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => '入力した情報',
        'output-form-title' => '購入商品情報',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬:shop_title|週次レポート :time',
        'title' => '週間店舗実績レポート',
        'message' => "これは、<b>:start</b> から <b>:end</b> までのストアの週次レポートです。このレポートにはビジネスを改善するためのヒントが含まれており、オンライン ストアのステータスや最近の注文を確認することもできます。これからも良い一日、そして一週間をお過ごしください。"
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ 過去 3 か月間の :amount 貯蓄レポート| :shop_title',
        'title' => 'ビジネス活動、報酬、経済的貯蓄に関する季節的なレポート',
        'message' => "これは、<b>:start</b> から <b>:end</b> までの <b>:shop_title</b> 季節レポートです。"
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => '接続されたアカウント',
        'sub-title' => 'ストアに接続されているウォレット アカウントの最新のステータスは?',
        'view-wallet' => 'ウォレットを見る',
        'tip-title' => '重要なヒント',
        'tip' => "無料の Selldone ウォレットをセットアップし、ストアにリンクします。残高がマイナスであっても、顧客は問題なく買い物や支払いを行うことができます。ご心配なく。ストアの運営とデータは最大 1 か月間、中断されることなくスムーズに継続されます。",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'アカウントに接続'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'インストール済みのアプリ',
        'sub-title' => '今週ストアにインストールしたアプリのリスト。',
        'tip' => "ストア用のアプリをもっと見つけたいですか?",
        'view-app-store' => 'Selldone アプリ ストアにアクセスします。',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'あなたのストアボット',
        'sub-title' => '私の店でアクティブな販売ボット。',
        'tip-title' => 'ボットセール',
        'tip' => "Selldone は、自動販売ボットを提供しています。 Add-ons> Bots パネルに移動し、ストア ボットを有効にするだけです。関連するサービスがあなたの国で利用可能でなければならないことに注意してください。",
        'view-bots' => 'ボットを管理する',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'お客様とのコミュニケーション',
        'sub-title' => '今週、クライアントと何回連絡を取りましたか?',
        'faqs' => 'よくある質問',
        'tickets' => '顧客チケット',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'ユーザーのステータス',
        'sub-title' => ':start から :end までのアクティビティ',
        'users' => [
            'title' => 'お客様',
            'subtitle' => '登録ユーザー',
        ],
        'views' => [
            'title' => '訪問',
            'subtitle' => '何回お店に行ったことがありますか',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => '戻ってきたユーザー',

        'shop_views' => 'ショップビュー',
        'baskets' => [
            'title' => 'ショッピングカート',
            'subtitle' => '新しいショッピング カートの数を報告する',
        ],
        'products' => [
            'title' => '製品概要',
            'subtitle' => '種類別店頭在庫状況',
            'value_name' => '製品'
        ],
        'products_count' => '製品タイプ',
        'views_count' => 'ビュー数',
        'sell_count' => '販売数',
        'send_count' => '出荷数',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => '直送',
        'sub-title' => 'Drop Shipping Selldone の主要セラー向けパネル。',
        'total_fulfillments' => '受注総数',
        'ds_count' => '受注',
        'statistics_title' => '受注報告',
        'ds_cancels' => 'インターフェイス販売者によるキャンセル',
        'ds_rejects' => 'お客様によるキャンセル',
        'tip' => "あなたは倉庫、工場、または製品流通業者を持つ大規模な販売者ですか? Selldone のドロップシッピング サービスを通じて他の販売者に製品を提供することで、リーチを拡大できます。詳細については、support@selldone.com までメールでお問い合わせください。",
        'view-drop-shipping-panel' => '卸売パネルにログイン',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => '為替相場',
        'sub-title' => 'ストアの最新の通貨換算レートのリスト。',
        'from' => 'ソース通貨',
        'to' => '宛先通貨',
        'rate' => 'コンバージョン率',
        'view-exchange-panel' => '為替レートの管理',
    

        'vew-exchange-panel' => '為替レート管理パネル',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => '専門家契約',
        'sub-title' => 'どの専門家が私の店で働いていますか?',
        'cost' => '契約額',
        'duration' => '間隔',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => '日付キャンセル',
        'end_at' => '配送日',
        'tip' => 'Selldone で最高のスペシャリストを雇って、ビジネスを発展させることができます。',
        'view-experts' => 'クリックして開始します。',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'ショップ :shop でアクティブな支払いゲートウェイを報告します。',
        'tip-title' => '重要なヒント',
        'tip' => "ストアのポータル管理ページに移動し、数分で少なくとも 1 つのポートを追加します。顧客は、オンライン ポータルを通じて迅速かつ安全に支払うことを好みます。",
        'view-shop-gateways' => 'マイ ストア ポータル管理にログインします。',
        'view-gateways' => '他のゲートウェイを表示',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => '注文',
        'sub-title' => '今週受け取った注文のリスト。',
        'total_baskets' => '総注文数',
        'total_posBaskets' => '合計現金注文',
        'pos-title' => 'POSストアボックス',
        'chart-label' => '完了した注文 (これらの注文は必ずしも支払われるとは限りません!)',
        'tip-title' => 'もっと頑張らなきゃ…',
        'tip' => "単純な成功はありません。",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => '加工センター',
        'sub-title' => '今週、店舗でどれくらいの注文を処理しましたか?',
        'tip-title' => 'セールはありませんでした。',
        'tip' => "残念ながら、今週は売上がありませんでした。より多くの商品をお店に届ける必要があります。商品を追加したり、より良い画像を選択したり、商品のより良い説明を書いたりすることができます。あなたのビジネスのためのフルタイムの仕事を考えてみましょう。失敗せずに正しく行えば、必ず成功します。",
        'view-process-center' => 'プロセスセンターを見る',
        'return' => [
            'title' => '返品された注文',
            'subtitle' => '返品された注文を報告します。',
            'tip-title' => '知ってた ...',
            'tip' => "Selldone POS を使用すると、必要な数だけレジを作成できます。タブレット、モバイル、ラップトップなど、あらゆるデバイスを店舗の POS に変えることができます。シンプルで素早くセットアップでき、サーバー用に完全に準備できます。今日から使い始めましょう！",
            'view-pos' => 'マイオンラインストアキャッシャーにログイン'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'セッション',
        'sub-title' => '私は何回私の店を訪れましたか？',
        'countries-title' => '最も訪問された国は?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => '1ドルも使わずにお金を稼ぎたいですか？',
        'message' => ":name 様、[ダッシュボード] > [デモネット化] に移動して、紹介リンクを作成してください。リンクを友達に送信すると、Selldone ギフトカードと友達の支払いの一部を受け取ります。ギフトカードはあなたとあなたの友達の両方に送られます。",
        'action' => '私の紹介リンクを見る',
        'mail-clip' => "<b style='color: #C2185B'>重要:</b>メールの長さに制限がある Gmail などのメール サービスを使用している場合は、メールの最後にある次のオプションを見つけて、レポート全体を表示し、クリックしてください。",

        'no-coin-reward' => "<b style='color: #C2185B'>申し訳ありません:</b>あなたのアクティビティは、無料の SEL Coins リワードを獲得するための要件を満たしていませんでした.次のシーズンに向けてもっと頑張って、あなたのショップでもっと売れましょう。",
        'yes-coin-reward' => "<b style='color: #4CAF50'>報酬:</b>おめでとうございます。あなたの素晴らしいパフォーマンスにより、:amount SEL コインの無料報酬を提供しました。",

        'need-buy-license' => "<b>ビジネスをレベルアップ:</b>ビジネス Web サイトのサブスクリプション プランが登録されていません。そのため、少なくとも 1 つのサブスクリプションを購入する時が来ました。年間購入の場合、毎月 :amount の費用がかかります。",
        'not-afford-message' => "余裕がない場合、または支払いに問題がある場合は、support@selldone.com までお気軽にお問い合わせください。",
        'add-domain' => "<b>ビジネス用のカスタム ドメインを作成しませんか?</b><br>今すぐウェブサイトにドメインを追加してください。それは無料です！"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone は <del>product</del> <span style = 'color: forestgreen'> コミュニティ</span>.<br>プロの出品者になりましょう!",
        'message' => "Twitter、LinkedIn、ソーシャル ネットワークで Selldone の公式ページをフォローしてください。 Selldone に関するコメント、リクエスト、批判をお送りいただくか、ディスカッションに参加してください。私たちは、<b>You make</b> の Selldone コミュニティの一員でもあります。"
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => '新しいアボカドの注文を受け取りました|:shop_title :time',
        'title' => "過去 24 時間のパフォーマンス レポート",
        'message' => "あなたの顧客は、あなたの注文がレビューされ、価格設定されるのを待っています。より多くの売上を得るために、顧客の要求にできるだけ早く対応してください。",
        'card_title' => "キュー内の注文",
        'card_subtitle' => ":date以降",

        'card_payed' => "有料注文"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => ':community_title の投稿に返信してください',
        'title' => ":name、および :count の他のユーザーがあなたの投稿にコメントしました。",
        'message' => "こんにちは、:name さん、あなたの投稿が注目を集めています。私たちのコミュニティにコメントが届きました。アカウントにログインしてディスカッションに参加し、みんなの意見を確認してください。",
        'title-simple' => ":name があなたの投稿にコメントしました。",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 トピックに返信:topic_title',
        'title' => ":name、および :count 他の人があなたのトピックに返信しました。",
        'message' => "こんにちは、:name さん、あなたのトピックは注目を集めています。私たちのコミュニティで返信を受け取りました。アカウントにログインしてディスカッションに参加し、みんなの意見を確認してください。",
        'title-simple' => ":name があなたのトピックに返信しました。",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 新規ログイン :name',
        'category' => 'セキュリティ通知',
        'title' => "アカウントにログイン",
        'message' => ":name 様、Selldone アカウントにログインされました。",   // Login in selldone (seller)
        'message-shop' => ":name 様、:shop_title にログインしました。",  // Login in shop (buyer)

        'footer' => "ログインしていない場合は、パスワードを変更してください。",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "撤退",
        'deposit' => "預り金",

        'withdraw_subject' => "アカウントから引き出す :account",
        'deposit_subject' => "口座への入金 :account",

        'message' => "以下の仕様で送金を行いました。",

        'type' => "取引タイプ",

        'from' => "ソース アカウント",
        'to' => "Destination account",

        'desc' => "取引内容",
        'action' => "取引を見る",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔重要！ルール違反| :shop",
        'category' => "重要な情報",
        'title' => "あなたのショップは罰せられました",
        'action' => "ショップのダッシュボードを開く",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter があなたを Selldone に招待しました",
        'title' => ":name から :amount が送られてきました。これは、新しいオンライン Web サイトを立ち上げて収益化するのに役立ちます。",
        'message' => "こんにちは **:receiver_name** さん、<br><br>Selldone へようこそ! Selldone では、e コマース サイト、ブログ、オンライン コミュニティを簡単に作成でき、さらには対面販売用のオンライン POS システムをセットアップすることもすべて数分以内に行えます。これは、ビジネスをより良く、より速く、より簡単に実行できるように設計された完全なオンライン ビジネス オペレーティング システムです。<br><br><b>:date</b> までにサインアップして、:amount クーポンを受け取って開始してください。",
        'accept' => "招待を受ける",
        'owner' => "の所有者",
        'join-date' => "以来、Selldone",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "リカバリリンク| :shop",
        'category' => "ショップセキュリティ",
        'title' => "<b>:shop_name</b>の復元リンクを保存します。",
        'message' => "このメールは、ストアの復元をリクエストされた方に送信されました。以下のリンクをクリックすると、ショップとそれに属するすべてのデータが復元されます。",
        'action' => "ショップの復旧を確認",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Selldone はあなたのビジネスのためにどれくらいのお金を節約しましたか?',
        'sub-title' => '日付 :start から :end まで',
        'infrastructure' => [
            'title' => 'インフラストラクチャー',
            'subtitle' => 'サーバー、CDN、ストレージ、その他のクラウド サービス',
        ],
        'experts' => [
            'title' => '専門家とスタッフ',
            'subtitle' => '開発者、メンテナンス、およびサポート',
        ],
        'total_save' => '貯めたお金の合計'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'あなたのパフォーマンス',
        'sub-title' => ':start から :end までの事業概要',

        'new_visitors' => 'New Users',
        'returning_visitors' => '戻ってきたユーザー',

        'shop_views' => 'ショップビュー',
        'baskets' => [
            'title' => 'ショッピングカート',
            'subtitle' => '新しいショッピング カートの数を報告する',

        ],
        'products' => [
            'title' => '製品概要',
            'subtitle' => '種類別店頭在庫状況',
            'value_name' => '製品'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'ウェブサイトの合計ページ ビュー',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "新しい注文を受け取りました。ベンダー パネルの注文処理ページに移動してください。",
        'subject' => "🛍 新しい注文を受け取りました | :order_id",
        'your_revenue' => "あなたの収益",
    ],
    'vendor-invite' => [
        'title' => 'ベンダー招待',
        'message' => ":shop_name のベンダーになるための招待を受け取りました。次のボタンをクリックして、それを承諾または拒否することができます。",
        'subject' => ":shop_name | 弊社のベンダーになるための招待を受け取りました",
        'accept' => "受け入れてベンダーになる",
        'reject' => "拒絶",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => '私たちのチームへの招待',
        'message' => ":shop_name で :vendor_name に参加するよう招待されました。以下のボタンを使用して、この招待を承諾または拒否できます。",
        'subject' => ":vendor_name への招待|チームメンバーになる",
        'accept' => "同意してチームに参加する",
        'reject' => "拒否する",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => ":shop のログインコード",
        'header-message' => "このメールは、ショップのログイン コードをリクエストされた方にお送りしています。ワンタイム パスワード (OTP) は以下をご覧ください。",
        'footer-message' => "このコードは 10 分間有効です。このログイン コードをリクエストしていない場合は、このメールを無視してください。"
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "メールアドレスの確認 | :shop",
        'title' => 'メール認証',
        'header-message' => "こんにちは:nameさん、<br>ボタンをクリックするか、48 時間以内に以下のリンクを使用して、**:email** があなたの電子メール アドレスであることを確認してください。",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "製品のアップデート| :shop",
        'title' => "製品ステータスの更新 - 過去 24 時間",
        'message' => "このメッセージがあなたに元気を与えてくれることを願っています。これは、過去 24 時間の当社プラットフォーム上の製品のステータスについてお知らせする簡単な更新です。\nこの期間中に、一部の製品のステータスに変更が発生しました。これらの変更は、購入、在庫更新、またはその他の関連イベントによって発生する可能性があります。\n各製品の詳細については、アカウントにログインして「製品ステータス」セクションをご確認ください。",
        'action' => "ベンダーパネルを開く",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "大量注文を受け取りました| :shop | :date",
        'title' => "大量注文の通知",
        'message' => "大量の注文をまとめて受け取りました。詳細については、パネルの注文処理ページをご覧ください。提供されている安全なリンクを介して注文リストをダウンロードすることもできます。有効期限は 7 日間です。<br><br>\n        <b>重要:</b> このリンクは 7 日間有効です。<br>\n        このリンクは動的であるため、クリックするたびに、この特定の日付の最新の注文を受け取ることになります。 <b>注文の支払いステータスが拒否に変わると、ダウンロードした CSV にその注文が表示されなくなるか、注文が支払われた場合はリストに表示されることを意味します。</b><br><br>\n        <ul>\n            <li>CSV には、:date.</li> に予約日が設定された支払い済み注文が含まれています\n            <li>予約日は、ユーザーが注文ページでチェックアウトをクリックした日付です。</li>\n        </ul>\n        <b>重複注文を防ぐため、送信する前に必ず注文 ID を確認してください。</b>",
        'action' => "オーダーリストのダウンロード",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "ご注文の一部の商品が受け付けられず、配送できません。これらの商品の金額は間もなくカードに返金されます。"
    ]

];
