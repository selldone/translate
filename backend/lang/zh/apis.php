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
            'description' => '获取商店的产品列表。',
            'url' => '商店/{shop_id}/产品/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => '仅显示可用产品。可以是真的也可以是假的。', 'type' => '布尔值', 'default' => false],
                'with_parent' => ['title' => '获取父类别层次结构。可以是真的也可以是假的。', 'type' => '布尔值', 'default' => false],
                'offset' => ['title' => '产品列表的偏移量（用于分页）。', 'type' => '整数', 'default' => 0],
                'limit' => ['title' => '列表中的产品数量（用于分页）。', 'type' => '整数', 'default' => 20],
                'sort' => ['title' => '列表排序类型', 'type' => '枚举', 'default' => null, 'values' => [null, '相关的', '访问次数最多的', '最流行的', '最新的', '畅销书', '最便宜的', '最贵的', '随机的', '相关的', '最喜欢的', '随机的']],
                'product_id' => ['title' => '产品ID用于返回相关产品（排序=相关）。', 'type' => '整数', 'default' => null],
                'set' => ['title' => '产品数据集。可以为 null 或 spec（null：默认值，spec：针对检索规范进行优化）。', 'type' => '枚举', 'default' => null, 'values' => [null, '规格']],
                'search' => ['title' => '搜索文字', 'type' => '字符串', 'default' => null],
                'search_type' => ['title' => '搜索类型。可以为 null 或类别。', 'type' => '枚举', 'default' => null, 'values' => [null, '类别']],
                'dir' => ['title' => '类别ID或姓名。设置后获取此类别中的产品。', 'type' => '任何', 'default' => null],
                'products_only' => ['title' => '仅获取产品（不包括类别）。', 'type' => '布尔值', 'default' => false],
                'categories_only' => ['title' => '仅获取类别（不包括产品）。', 'type' => '布尔值', 'default' => false],
                'need_full_variants' => ['title' => '获取完整的变体信息。', 'type' => '布尔值', 'default' => false],
                'optimized' => ['title' => '（仅当以管理员身份获取产品时）获取不带价格、费率或统计信息的产品列表。', 'type' => '布尔值', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => '数组',
                    '_object' => '产品展示',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => '数组',
                    '_object' => '类别',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => '对象',
                    '_object' => '类别',
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
            'description' => '获取产品信息和统计数据。',
            'url' => '商店/{shop_id}/产品/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => '对象',
                    '_object' => '产品展示',
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
                    '_type' => '数组',
                    '_object' => '产品数据',
                    'title' => '最近 30 天的数据',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => '订单信息。',
                    'type' => '虚拟：计数（int）|物理：[计数，交货状态]（数组）'
                ],

                'new_comments_count' => [
                    'title' => '新评论很重要。',
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
            'description' => '将新产品添加到商店。',
            'url' => '商店/{shop_id}/产品/添加',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => '设置产品/服务的类型。', 'type' => '枚举', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => '产品的价格。', 'type' => '浮动', 'require' => true],
                'commission' => ['title' => '在价格中添加佣金。', 'type' => '浮动', 'default' => 0],
                'discount' => ['title' => '默认产品价格折扣。', 'type' => '浮动', 'default' => 0],
                'dis_start' => ['title' => '折扣开始时间（UTC时区）（格式：YYYY-MM-DD HH:mm:ss）。', 'type' => '日期', 'default' => null],
                'dis_end' => ['title' => '折扣结束时间（UTC时区）（格式：YYYY-MM-DD HH:mm:ss）。', 'type' => '日期', 'default' => null],
                'currency' => ['title' => '货币，', 'type' => '枚举', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "产品的标题。", 'type' => '字符串', 'require' => true],
                'title_en' => ['title' => '产品英文名称（或副标题）', 'type' => '字符串', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => '字符串', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => '字符串', 'default' => null],
                'gtin' => ['title' => "产品的全球贸易项目编号。", 'type' => '字符串', 'default' => null],
                'gpc' => ['title' => 'Google 产品类别代码。', 'type' => '整数', 'default' => null],
                'condition' => ['title' => "您商店中商品的当前状况。", 'type' => '枚举', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => '如果存在输入字段（用于虚拟产品），则会向用户显示消息。', 'type' => '字符串', 'default' => null],
                'inputs' => ['title' => '可选输入字段（用于虚拟产品）。', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => '可选输出字段（用于虚拟产品）。', 'type' => 'json', 'default' => false],
                'blog' => ['title' => '可选博客或网站网址。', 'type' => '字符串', 'default' => false],
                'status' => ['title' => '产品状态打开/关闭，默认为打开。', 'type' => '枚举', 'default' => '打开', 'values' => ['打开', '关闭']],
                'category_id' => ['title' => '类别 ID。', 'type' => '整数', 'default' => null],
                'lead' => ['title' => '交货时间以小时为单位..', 'type' => '整数', 'default' => null],
                'style' => ['title' => '产品样式 (Json)。', 'type' => 'json', 'default' => null],
                'brand' => ['title' => '产品品牌..', 'type' => '字符串', 'default' => null],
                'warranty' => ['title' => '保修说明..', 'type' => '字符串', 'default' => null],
                'original' => ['title' => '这个产品是原装的吗？', 'type' => '布尔值', 'default' => false],
                'return_warranty' => ['title' => '按天退回保修。', 'type' => '整数', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => '对象',
                    '_object' => '产品展示',
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
            'description' => '将新产品添加到商店。',
            'url' => '商店/{shop_id}/产品/{product_id}/编辑',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => '设置产品/服务的类型。', 'type' => '枚举', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => '产品的价格。', 'type' => '浮动', 'require' => true],
                'commission' => ['title' => '在价格中添加佣金。', 'type' => '浮动', 'default' => 0],
                'discount' => ['title' => '默认产品价格折扣。', 'type' => '浮动', 'default' => 0],
                'dis_start' => ['title' => '折扣开始时间（UTC时区）（格式：YYYY-MM-DD HH:mm:ss）。', 'type' => '日期', 'default' => null],
                'dis_end' => ['title' => '折扣结束时间（UTC时区）（格式：YYYY-MM-DD HH:mm:ss）。', 'type' => '日期', 'default' => null],
                'currency' => ['title' => '货币，', 'type' => '枚举', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "产品的标题。", 'type' => '字符串', 'require' => true],
                'title_en' => ['title' => '产品英文名称（或副标题）', 'type' => '字符串', 'default' => null],
                'message' => ['title' => '如果存在输入字段（用于虚拟产品），则会向用户显示消息。', 'type' => '字符串', 'default' => null],
                'inputs' => ['title' => '可选输入字段（用于虚拟产品）。', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => '可选输出字段（用于虚拟产品）。', 'type' => 'json', 'default' => false],
                'blog' => ['title' => '可选博客或网站网址。', 'type' => '字符串', 'default' => false],
                'status' => ['title' => '产品状态打开/关闭，默认为打开。', 'type' => '枚举', 'default' => '打开', 'values' => ['打开', '关闭']],
                'category_id' => ['title' => '类别 ID。', 'type' => '整数', 'default' => null],
                'lead' => ['title' => '交货时间以小时为单位..', 'type' => '整数', 'default' => null],
                'style' => ['title' => '产品样式 (Json)。', 'type' => 'json', 'default' => null],
                'brand' => ['title' => '产品品牌..', 'type' => '字符串', 'default' => null],
                'warranty' => ['title' => '保修说明..', 'type' => '字符串', 'default' => null],
                'original' => ['title' => '这个产品是原装的吗？', 'type' => '布尔值', 'default' => false],
                'return_warranty' => ['title' => '按天退回保修。', 'type' => '整数', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => '对象',
                    '_object' => '产品展示',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => '成功更新产品状态。', 'type' => '布尔值'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => '按 sku 将新产品从存储库添加到商店。',
            'url' => '商店/{shop_id}/产品存储库/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => '字符串', 'require' => true, 'default' => null],

                'auto_category' => ['title' => '自动设置类别', 'type' => '布尔值', 'require' => true, 'default' => true],
                'category_id' => ['title' => '产品按商店中的类别 id 添加到此类别。', 'type' => '整数', 'default' => null],

                'price' => ['title' => '产品的价格。', 'type' => '浮动', 'require' => true],
                'currency' => ['title' => '货币，', 'type' => '枚举', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => '数量', 'type' => '整数', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => '对象',
                    '_object' => '产品展示',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => '成功更新产品状态。', 'type' => '布尔值'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
