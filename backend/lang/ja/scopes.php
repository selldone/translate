<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone 管理者のスコープ。',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => '投資家のアクセスは制限されています。',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'ユーザープロファイルの詳細を読み取ります。',
    AuthServiceProvider::SCOPE_USER_PHONE => '電話番号を読み取ります。',
    AuthServiceProvider::SCOPE_USER_ADDRESS => '保存されたアドレスを読み取り、更新します。',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'ユーザープロフィールを更新します。',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => '注文します。',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => '注文履歴を表示します。',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'ギフトカードにアクセスします。',

    AuthServiceProvider::SCOPE_ARTICLES => '記事を編集します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => '通知を管理します。',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'ショップリストを見る。',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'ショップの詳細を編集します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => '新しいショップを追加します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'ショップを削除します。',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'サポートチケットを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'ギフトカードを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'ギフトカードを表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'よくある質問を管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'よくある質問を表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'カテゴリを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'カテゴリを表示します。',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => '製品を管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => '製品を見る。',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'レポートを表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => '金融口座を管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => '金融口座を表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'ストアページを編集します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'ストアページを表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => '倉庫を管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => '倉庫を見る。',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'スタッフのアクセスを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'スタッフアクセスを表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => '注文を表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => '注文を管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'ビジネスプロファイルを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'ビジネスプロフィールを表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => '割引コードを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => '割引コードを表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'クーポンを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'クーポンを表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'オファーを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'オファーを表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'キャッシュバックを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'キャッシュバックを表示します。',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => '宝くじを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => '宝くじを見る。',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'コミュニティを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'コミュニティを表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => '顧客を管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => '顧客を表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'サブスクリプションを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'サブスクリプションを表示します。',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'ベンダーの注文を表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'ベンダーの注文と支払いを管理します。',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => '接続プロバイダーを管理します。',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => '接続プロバイダーを表示します。',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AIコマンドを実行します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI情報を表示します。',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'ベンダーの支払いを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'ベンダーの支払いを表示します。',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'ビジネスプロフィールを表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'ビジネスプロファイルを管理します。',

    AuthServiceProvider::SCOPE_AGENCY_READ => '代理店情報をご覧いただけます。',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => '代理店情報を管理します。',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'ショップメモを表示します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'ショップメモを管理します。',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => '開発者アセットを表示します。',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => '開発者の資産を管理します。',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => '個人情報とアカウント設定にアクセスします。',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'ウォレットとトランザクションを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'ウォレットのトランザクションを表示します。',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth トークンとクライアントを表示します。',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth トークンとクライアントを管理します。',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'セキュリティ設定を管理します。',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'アフィリエイトを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'アフィリエイトを表示します。',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => '印刷テンプレートを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => '印刷テンプレートを表示します。',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'レビューを管理します。',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'レビューを表示します。',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => '収益化情報を表示します。',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => '収益化情報を管理します。',



    'profile' => '名前、電子メールアドレス、画像、認証ステータスなどのプロファイル情報を読み取ります。',
    'phone' => '連絡先番号へのアクセス',
    'address' => '保存したアドレス帳からアドレスを読み取って編集する',
    'buy' => 'オーダー＆ショップオーダー。',
    'order-history' => '注文履歴を読む。',
    'my-gift-cards' => 'ギフトカードへのアクセス。',
    'articles' => '記事を編集します。',
    'notifications' => '通知を送受信します。',
    'read-shops' => '店舗一覧を読む。',
    'shop-edit' => 'ストア編集アクセス。',
    'shop-contacts' => 'お問い合わせフォームを受け取り、編集します。',
    'shop-gift-cards' => 'カードの作成、編集、および管理。',
    'shop-faqs' => 'よくある質問を作成、編集、および管理します。',
    'shop-categories' => 'カテゴリの作成、編集、および管理。',
    'backoffice-write-products' => 'バックオフィスでの製品の作成、編集、管理を承認します。',
    'backoffice-read-products' => 'バックオフィスで製品リストと詳細な製品情報を表示するためのアクセスを許可します。',
    'shop-read-reports' => '情報とレポートを読みます。',
    'shop-socials' => 'ストアのソーシャル ネットワークを編集します。',
    'shop-accounts' => '店舗にリンクされた金融口座を編集および削除します。',
    'shop-menus' => 'ストアメニューを編集します。',
    'shop-pages' => 'ストアページを編集します。',
    'shop-warehouse' => 'ストアウェアハウスの編集',
    'shop-permissions' => 'ストアアクセスを表示および編集します。',
    'shop-process-center' => '受注を管理します。',
    'shop-profile' => 'ストアプロファイルを管理します。',
    'shop-discount-code' => '割引コードを管理します。',
    'shop-coupon' => 'クーポンを管理します。',
    'shop-offer' => 'オファーを管理します。',
    'shop-cashback' => 'キャッシュバックを管理します。',
    'shop-lottery' => '宝くじを管理します。',
    'shop-community' => 'コミュニティを管理します。',
    'shop-customers' => '顧客を管理します。',
    'shop-ribbon' => 'リボンのサブスクリプションを管理します。',
    'community-read' => 'Selldone コミュニティを読んでください。',
    'community-write' => 'selldoneコミュニティに書き込みます。',
    'profile-write' => 'ユーザープロファイル情報を書き込みます。',
    'vendor-read' => 'ベンダー注文の履行アクションへのアクセス。',
    'vendor-write' => 'ベンダーの注文、支払い、その他の情報を変更します。',
    'connect-providers' => '接続プロバイダーを追加、読み取り、書き込みます。',
    'personal-identification' => '個人情報、アクセス、アカウント設定を読み取ります。',
    'accounts' => 'ウォレットにアクセスし、取引とチャージ履歴を読み取ります。',
    'shop-add' => '新しいショップを追加します。',
    'shop-delete' => 'ショップを削除します。',
    'shop-ai-write' => 'ユーザーが AI コマンドを実行できるようにします。',
    'shop-ai-read' => 'ユーザーがコマンドを実行せずに AI 情報にアクセスできるようにします。',
    'vendor-payment' => 'ユーザーは、ベンダーの支払い記録を追加したり、Stripe Connect などの接続されたアカウントを介して資金を送金したりできます。',
    'company-read' => 'ビジネスプロフィール情報を読み取ることができます。',
    'company-write' => 'ビジネス プロフィール情報の読み取りと書き込みを許可します。',
    'agency-read' => '代理店情報を閲覧できます。',
    'agency-write' => '代理店情報の読み取りと書き込みを許可します。',
    'note-read' => 'ショップノートを読むことができます。',
    'note-write' => 'ショップノートの読み取りと書き込みが可能になります。',
    'developer-read' => '開発者のアセットを読み取ることができます。',
    'developer-write' => '開発者のアセットの読み取りと書き込みを許可します。',
    'tokens-read' => 'Oauth トークンとクライアントを読み取ります。',
    'tokens-write' => 'Oauth トークンとクライアントを記述します。',
];
