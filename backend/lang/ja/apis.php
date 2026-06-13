<?php

use App\Http\Controllers\Shop\Product\ProductAddController;
use App\Http\Controllers\Shop\Product\ProductController;
use App\Http\Controllers\Shop\Product\ProductEditController;
use App\Samin\Account\Enums\Currency;
use App\Shop\Category\ShopCategory;
use App\Shop\Products\Enums\ProductCondition;
use App\Shop\Products\Product;
use App\Shop\Products\ProductImages;
use App\Shop\Products\ProductVariant;
use App\Shop\Rating\ShopRating;
use App\Shop\Shop;
use App\Shop\Statistic\ProductData;
use App\Social\Article;
const StandardJsonHeaders=['Accept' => 'application/json', 'Content-Type' => 'application/json'];

return [

    /*
    |--------------------------------------------------------------------------
    | APIs repository (For playground / help)
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */


    'Product' => [

        /**
         * @see ProductController::api_getMyProductsAll()
         */

        'Get products list' => [
            'auth' => true,
            'scope' => ProductController::GET_MY_PRODUCTS_SCOPE,
            'permissions' => ProductController::GET_MY_PRODUCTS_PERMISSION,
            'description' => 'ショップの商品リストを取得します。',
            'url' => 'ショップ/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => '入手可能な製品のみを表示します。真でも偽でも構いません。', 'type' => 'ブール値', 'default' => false],
                'with_parent' => ['title' => '親カテゴリの階層を取得します。真でも偽でも構いません。', 'type' => 'ブール値', 'default' => false],
                'offset' => ['title' => '製品リストのオフセット (ページネーション用)。', 'type' => '整数', 'default' => 0],
                'limit' => ['title' => 'リスト内の製品の数 (ページネーション用)。', 'type' => '整数', 'default' => 20],
                'sort' => ['title' => 'リストソートタイプ', 'type' => '列挙型', 'default' => null, 'values' => [null, '関連する', '最も訪問された', '最も人気のある', '最新の', 'ベストセラー', '最安', '最も高価な', 'ランダム', '関連する', 'お気に入り', 'ランダム']],
                'product_id' => ['title' => '製品 ID は、関連製品を返すために使用されます (並べ替え = 関連)。', 'type' => '整数', 'default' => null],
                'set' => ['title' => '製品データセット。 null または spec を指定できます (null: デフォルト、spec: 仕様の取得用に最適化)。', 'type' => '列挙型', 'default' => null, 'values' => [null, 'スペック']],
                'search' => ['title' => '検索テキスト', 'type' => '文字列', 'default' => null],
                'search_type' => ['title' => '検索タイプ。 null またはカテゴリを指定できます。', 'type' => '列挙型', 'default' => null, 'values' => [null, 'カテゴリ']],
                'dir' => ['title' => 'カテゴリ ID または名前。設定すると、このカテゴリの製品を取得します。', 'type' => 'どれでも', 'default' => null],
                'products_only' => ['title' => '製品のみを取得します (カテゴリは含まれません)。', 'type' => 'ブール値', 'default' => false],
                'categories_only' => ['title' => 'カテゴリのみを取得します (製品は含まれません)。', 'type' => 'ブール値', 'default' => false],
                'need_full_variants' => ['title' => '完全なバリアント情報を取得します。', 'type' => 'ブール値', 'default' => false],
                'optimized' => ['title' => '(管理者として製品を取得する場合のみ) 価格、レート、または統計情報を含まない製品リストを取得します。', 'type' => 'ブール値', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => '配列',
                    '_object' => '製品',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => '配列',
                    '_object' => 'カテゴリ',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'オブジェクト',
                    '_object' => 'カテゴリ',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,parent_id,filters')
                ],


            ]
        ],

        /**
         * @see ProductController::api_getMyProduct()
         */
        'Get product info' => [
            'auth' => true,
            'scope' => ProductController::GET_MY_PRODUCTS_SCOPE,
            'permissions' => ProductController::GET_MY_PRODUCTS_PERMISSION,
            'description' => '製品情報と統計を取得します。',
            'url' => 'ショップ/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'オブジェクト',
                    '_object' => '製品',
                    'structure' => array_merge(Product::STRUCTURE, [
                        'category' => [
                            '_type' => 'object',
                            '_object' => 'Category',
                            'structure' => ShopCategory::STRUCTURE
                        ],
                        'images' => [
                            '_type' => 'array',
                            '_object' => 'Product-Image',
                            'structure' => ProductImages::CustomStructure('id,path,variant_id')
                        ],
                        'product_variants' => [
                            '_type' => 'array',
                            '_object' => 'Variant',
                            'structure' => ProductVariant::STRUCTURE
                        ],

                        'shop' => [
                            '_type' => 'object',
                            '_object' => 'Shop',
                            'structure' => Shop::CustomStructure('id,name')
                        ],
                        'article' => [
                            '_type' => 'object',
                            '_object' => 'Article',
                            'structure' => Article::STRUCTURE
                        ],


                        'ratings' => [
                            '_type' => 'array',
                            '_object' => 'Rating',
                            'structure' => ShopRating::CustomStructure('id,name,value,count')
                        ],

                    ]),
                ],
                'data' => [
                    '_type' => '配列',
                    '_object' => '製品データ',
                    'title' => '過去 30 日間のデータ',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => '注文情報。',
                    'type' => '仮想: カウント (int)|物理: [カウント、配信状態] (配列)'
                ],

                'new_comments_count' => [
                    'title' => '新しいコメントはカウントされます。',
                    'type' => '整数'
                ],

            ]

            ],

        /**
         * @see ProductAddController::api_addProduct()
         */
        'Add new product' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => '新しい商品をショップに追加します。',
            'url' => 'ショップ/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => '製品/サービスの種類を設定します。', 'type' => '列挙型', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => '製品の価格。', 'type' => 'フロート', 'require' => true],
                'commission' => ['title' => '価格に手数料を加算します。', 'type' => 'フロート', 'default' => 0],
                'discount' => ['title' => 'デフォルトの製品価格の割引。', 'type' => 'フロート', 'default' => 0],
                'dis_start' => ['title' => 'UTC タイム ゾーンでの割引開始時刻 (形式: YYYY-MM-DD HH:mm:ss)。', 'type' => '日付', 'default' => null],
                'dis_end' => ['title' => 'UTC タイムゾーンでの割引終了時刻 (形式: YYYY-MM-DD HH:mm:ss)。', 'type' => '日付', 'default' => null],
                'currency' => ['title' => '通貨、', 'type' => '列挙型', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "商品のタイトル。", 'type' => '文字列', 'require' => true],
                'title_en' => ['title' => '商品の英語タイトル（またはサブタイトル）', 'type' => '文字列', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => '文字列', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => '文字列', 'default' => null],
                'gtin' => ['title' => "製品の世界貿易商品番号。", 'type' => '文字列', 'default' => null],
                'gpc' => ['title' => 'Google の商品カテゴリ コード。', 'type' => '整数', 'default' => null],
                'condition' => ['title' => "ストア内の商品の現在の状態。", 'type' => '列挙型', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => '入力フィールドが存在する場合にユーザーにメッセージが表示されます (仮想製品に使用されます)。', 'type' => '文字列', 'default' => null],
                'inputs' => ['title' => 'オプションの入力フィールド (仮想製品に使用)。', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'オプションの出力フィールド (仮想製品に使用)。', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'オプションのブログまたは Web サイトの URL。', 'type' => '文字列', 'default' => false],
                'status' => ['title' => '製品ステータス オープン/クローズ、デフォルトはオープンです。', 'type' => '列挙型', 'default' => '開く', 'values' => ['開く', '閉じる']],
                'category_id' => ['title' => 'カテゴリID。', 'type' => '整数', 'default' => null],
                'lead' => ['title' => 'リードタイムは時間単位です。', 'type' => '整数', 'default' => null],
                'style' => ['title' => '製品のスタイル (Json)。', 'type' => 'json', 'default' => null],
                'brand' => ['title' => '製品のブランド..', 'type' => '文字列', 'default' => null],
                'warranty' => ['title' => '保証の説明..', 'type' => '文字列', 'default' => null],
                'original' => ['title' => 'この商品はオリジナルですか？', 'type' => 'ブール値', 'default' => false],
                'return_warranty' => ['title' => '日数単位の返品保証。', 'type' => '整数', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'オブジェクト',
                    '_object' => '製品',
                    'structure' => Product::STRUCTURE
                ],
            ]
        ],



        /**
         * @see ProductEditController::api_editProduct()
         */
        'Edit product' => [
            'auth' => true,
            'scope' => ProductEditController::EDIT_PRODUCT_SCOPE,
            'permissions' => ProductEditController::EDIT_PERMISSION,
            'description' => '新しい商品をショップに追加します。',
            'url' => 'ショップ/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => '製品/サービスの種類を設定します。', 'type' => '列挙型', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => '製品の価格。', 'type' => 'フロート', 'require' => true],
                'commission' => ['title' => '価格に手数料を加算します。', 'type' => 'フロート', 'default' => 0],
                'discount' => ['title' => 'デフォルトの製品価格の割引。', 'type' => 'フロート', 'default' => 0],
                'dis_start' => ['title' => 'UTC タイム ゾーンでの割引開始時刻 (形式: YYYY-MM-DD HH:mm:ss)。', 'type' => '日付', 'default' => null],
                'dis_end' => ['title' => 'UTC タイムゾーンでの割引終了時刻 (形式: YYYY-MM-DD HH:mm:ss)。', 'type' => '日付', 'default' => null],
                'currency' => ['title' => '通貨、', 'type' => '列挙型', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "商品のタイトル。", 'type' => '文字列', 'require' => true],
                'title_en' => ['title' => '商品の英語タイトル（またはサブタイトル）', 'type' => '文字列', 'default' => null],
                'message' => ['title' => '入力フィールドが存在する場合にユーザーにメッセージが表示されます (仮想製品に使用されます)。', 'type' => '文字列', 'default' => null],
                'inputs' => ['title' => 'オプションの入力フィールド (仮想製品に使用)。', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'オプションの出力フィールド (仮想製品に使用)。', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'オプションのブログまたは Web サイトの URL。', 'type' => '文字列', 'default' => false],
                'status' => ['title' => '製品ステータス オープン/クローズ、デフォルトはオープンです。', 'type' => '列挙型', 'default' => '開く', 'values' => ['開く', '閉じる']],
                'category_id' => ['title' => 'カテゴリID。', 'type' => '整数', 'default' => null],
                'lead' => ['title' => 'リードタイムは時間単位です。', 'type' => '整数', 'default' => null],
                'style' => ['title' => '製品のスタイル (Json)。', 'type' => 'json', 'default' => null],
                'brand' => ['title' => '製品のブランド..', 'type' => '文字列', 'default' => null],
                'warranty' => ['title' => '保証の説明..', 'type' => '文字列', 'default' => null],
                'original' => ['title' => 'この商品はオリジナルですか？', 'type' => 'ブール値', 'default' => false],
                'return_warranty' => ['title' => '日数単位の返品保証。', 'type' => '整数', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'オブジェクト',
                    '_object' => '製品',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => '製品の状態が更新されました。', 'type' => 'ブール値'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'SKU ごとにリポジトリから新しい製品をショップに追加します。',
            'url' => 'ショップ/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => '文字列', 'require' => true, 'default' => null],

                'auto_category' => ['title' => '自動設定カテゴリー', 'type' => 'ブール値', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'ショップ内のカテゴリ ID を使用してこのカテゴリに製品を追加します。', 'type' => '整数', 'default' => null],

                'price' => ['title' => '製品の価格。', 'type' => 'フロート', 'require' => true],
                'currency' => ['title' => '通貨、', 'type' => '列挙型', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => '数量', 'type' => '整数', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'オブジェクト',
                    '_object' => '製品',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => '製品の状態が更新されました。', 'type' => 'ブール値'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
