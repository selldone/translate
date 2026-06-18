<?php

use App\Http\Controllers\Shop\Product\ProductAddController;
use App\Http\Controllers\Shop\Product\ProductController;
use App\Http\Controllers\Shop\Product\ProductEditController;
use App\Backoffice\Account\Enums\Currency;
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
            'description' => '取得商店的產品清單。',
            'url' => '店/{shop_id}/產品/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => '僅顯示可用產品。可以是真的也可以是假的。', 'type' => '布林值', 'default' => false],
                'with_parent' => ['title' => '取得父類別層次結構。可以是真的也可以是假的。', 'type' => '布林值', 'default' => false],
                'offset' => ['title' => '產品清單的偏移量（用於分頁）。', 'type' => '整數', 'default' => 0],
                'limit' => ['title' => '清單中的產品數量（用於分頁）。', 'type' => '整數', 'default' => 20],
                'sort' => ['title' => '列表排序類型', 'type' => '列舉', 'default' => null, 'values' => [null, '相關的', '訪問次數最多的', '最受歡迎的', '最新的', '暢銷書', '最便宜的', '最貴的', '隨機的', '相關的', '最喜歡的', '隨機的']],
                'product_id' => ['title' => '產品ID用於傳回相關產品（排序=相關）。', 'type' => '整數', 'default' => null],
                'set' => ['title' => '產品資料集。可以為 null 或 spec（null：預設值，spec：針對檢索規格進行最佳化）。', 'type' => '列舉', 'default' => null, 'values' => [null, '規格']],
                'search' => ['title' => '搜尋文字', 'type' => '字串', 'default' => null],
                'search_type' => ['title' => '搜尋類型。可以為 null 或類別。', 'type' => '列舉', 'default' => null, 'values' => [null, '類別']],
                'dir' => ['title' => '類別ID或姓名。設定後取得此類別中的產品。', 'type' => '任何', 'default' => null],
                'products_only' => ['title' => '僅取得產品（不包括類別）。', 'type' => '布林值', 'default' => false],
                'categories_only' => ['title' => '僅取得類別（不包括產品）。', 'type' => '布林值', 'default' => false],
                'need_full_variants' => ['title' => '取得完整的變體資訊。', 'type' => '布林值', 'default' => false],
                'optimized' => ['title' => '（僅以管理員身分取得產品時）取得不含價格、費率或統計資料的產品清單。', 'type' => '布林值', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => '陣列',
                    '_object' => '產品展示',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => '陣列',
                    '_object' => '類別',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => '物件',
                    '_object' => '類別',
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
            'description' => '取得產品資訊和統計資料。',
            'url' => '店/{shop_id}/產品/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => '物件',
                    '_object' => '產品展示',
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
                    '_type' => '陣列',
                    '_object' => '產品數據',
                    'title' => '最近 30 天的數據',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => '訂單資訊。',
                    'type' => '虛擬：計數（int）|物理：[計數，交貨狀態]（陣列）'
                ],

                'new_comments_count' => [
                    'title' => '新評論很重要。',
                    'type' => '整數'
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
            'description' => '將新產品加入商店。',
            'url' => '商店/{shop_id}/產品/添加',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => '設定產品/服務的類型。', 'type' => '列舉', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => '產品的價格。', 'type' => '浮動', 'require' => true],
                'commission' => ['title' => '在價格中添加佣金。', 'type' => '浮動', 'default' => 0],
                'discount' => ['title' => '預設產品價格折扣。', 'type' => '浮動', 'default' => 0],
                'dis_start' => ['title' => '折扣開始時間（UTC時區）（格式：YYYY-MM-DD HH:mm:ss）。', 'type' => '日期', 'default' => null],
                'dis_end' => ['title' => '折扣結束時間（UTC時區）（格式：YYYY-MM-DD HH:mm:ss）。', 'type' => '日期', 'default' => null],
                'currency' => ['title' => '貨幣，', 'type' => '列舉', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "產品的標題。", 'type' => '字串', 'require' => true],
                'title_en' => ['title' => '產品英文名稱（或副標題）', 'type' => '字串', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => '字串', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => '字串', 'default' => null],
                'gtin' => ['title' => "產品的全球貿易項目編號。", 'type' => '字串', 'default' => null],
                'gpc' => ['title' => 'Google 產品類別代碼。', 'type' => '整數', 'default' => null],
                'condition' => ['title' => "您商店中商品的當前狀況。", 'type' => '列舉', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => '如果存在輸入欄位（用於虛擬產品），則會向使用者顯示訊息。', 'type' => '字串', 'default' => null],
                'inputs' => ['title' => '可選輸入欄位（用於虛擬產品）。', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => '可選輸出欄位（用於虛擬產品）。', 'type' => 'json', 'default' => false],
                'blog' => ['title' => '可選部落格或網站網址。', 'type' => '字串', 'default' => false],
                'status' => ['title' => '產品狀態開啟/關閉，預設為開啟。', 'type' => '列舉', 'default' => '打開', 'values' => ['打開', '關閉']],
                'category_id' => ['title' => '類別 ID。', 'type' => '整數', 'default' => null],
                'lead' => ['title' => '交貨時間以小時為單位..', 'type' => '整數', 'default' => null],
                'style' => ['title' => '產品樣式 (Json)。', 'type' => 'json', 'default' => null],
                'brand' => ['title' => '產品品牌..', 'type' => '字串', 'default' => null],
                'warranty' => ['title' => '保固說明..', 'type' => '字串', 'default' => null],
                'original' => ['title' => '這個產品是原廠的嗎？', 'type' => '布林值', 'default' => false],
                'return_warranty' => ['title' => '按天退回保固。', 'type' => '整數', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => '物件',
                    '_object' => '產品展示',
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
            'description' => '將新產品加入商店。',
            'url' => '店/{shop_id}/產品/{product_id}/編輯',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => '設定產品/服務的類型。', 'type' => '列舉', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => '產品的價格。', 'type' => '浮動', 'require' => true],
                'commission' => ['title' => '在價格中添加佣金。', 'type' => '浮動', 'default' => 0],
                'discount' => ['title' => '預設產品價格折扣。', 'type' => '浮動', 'default' => 0],
                'dis_start' => ['title' => '折扣開始時間（UTC時區）（格式：YYYY-MM-DD HH:mm:ss）。', 'type' => '日期', 'default' => null],
                'dis_end' => ['title' => '折扣結束時間（UTC時區）（格式：YYYY-MM-DD HH:mm:ss）。', 'type' => '日期', 'default' => null],
                'currency' => ['title' => '貨幣，', 'type' => '列舉', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "產品的標題。", 'type' => '字串', 'require' => true],
                'title_en' => ['title' => '產品英文名稱（或副標題）', 'type' => '字串', 'default' => null],
                'message' => ['title' => '如果存在輸入欄位（用於虛擬產品），則會向使用者顯示訊息。', 'type' => '字串', 'default' => null],
                'inputs' => ['title' => '可選輸入欄位（用於虛擬產品）。', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => '可選輸出欄位（用於虛擬產品）。', 'type' => 'json', 'default' => false],
                'blog' => ['title' => '可選部落格或網站網址。', 'type' => '字串', 'default' => false],
                'status' => ['title' => '產品狀態開啟/關閉，預設為開啟。', 'type' => '列舉', 'default' => '打開', 'values' => ['打開', '關閉']],
                'category_id' => ['title' => '類別 ID。', 'type' => '整數', 'default' => null],
                'lead' => ['title' => '交貨時間以小時為單位..', 'type' => '整數', 'default' => null],
                'style' => ['title' => '產品樣式 (Json)。', 'type' => 'json', 'default' => null],
                'brand' => ['title' => '產品品牌..', 'type' => '字串', 'default' => null],
                'warranty' => ['title' => '保固說明..', 'type' => '字串', 'default' => null],
                'original' => ['title' => '這個產品是原廠的嗎？', 'type' => '布林值', 'default' => false],
                'return_warranty' => ['title' => '按天退回保固。', 'type' => '整數', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => '物件',
                    '_object' => '產品展示',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => '成功更新產品狀態。', 'type' => '布林值'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => '按 sku 將新產品從儲存庫新增至商店。',
            'url' => '商店/{shop_id}/產品儲存庫/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => '字串', 'require' => true, 'default' => null],

                'auto_category' => ['title' => '自動設定類別', 'type' => '布林值', 'require' => true, 'default' => true],
                'category_id' => ['title' => '產品按商店中的類別 id 新增至此類別。', 'type' => '整數', 'default' => null],

                'price' => ['title' => '產品的價格。', 'type' => '浮動', 'require' => true],
                'currency' => ['title' => '貨幣，', 'type' => '列舉', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => '數量', 'type' => '整數', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => '物件',
                    '_object' => '產品展示',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => '成功更新產品狀態。', 'type' => '布林值'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
