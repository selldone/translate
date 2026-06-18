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
            'description' => 'Lấy danh sách sản phẩm của cửa hàng.',
            'url' => 'cửa hàng/{shop_id}/sản phẩm/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Chỉ hiển thị các sản phẩm có sẵn. Có thể đúng hoặc sai.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Nhận hệ thống phân cấp danh mục cha mẹ. Có thể đúng hoặc sai.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Phần bù của danh sách sản phẩm (để phân trang).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Số lượng sản phẩm trong danh sách (để phân trang).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Kiểu sắp xếp danh sách', 'type' => 'liệt kê', 'default' => null, 'values' => [null, 'liên quan', 'được truy cập nhiều nhất', 'nhất_phổ biến', 'mới nhất', 'bán chạy nhất', 'rẻ nhất', 'nhất_đắt nhất', 'ngẫu nhiên', 'liên quan', 'yêu thích', 'ngẫu nhiên']],
                'product_id' => ['title' => 'Sản phẩm ID dùng để trả về các sản phẩm liên quan (sort = liên quan).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Bộ dữ liệu sản phẩm. Có thể là null hoặc spec (null: mặc định, spec: được tối ưu hóa để truy xuất thông số kỹ thuật).', 'type' => 'liệt kê', 'default' => null, 'values' => [null, 'thông số kỹ thuật']],
                'search' => ['title' => 'Tìm kiếm văn bản', 'type' => 'chuỗi', 'default' => null],
                'search_type' => ['title' => 'Kiểu tìm kiếm. Có thể là null hoặc danh mục.', 'type' => 'liệt kê', 'default' => null, 'values' => [null, 'thể loại']],
                'dir' => ['title' => 'Danh mục ID hoặc tên. Nhận sản phẩm trong danh mục này khi được đặt.', 'type' => 'bất kỳ', 'default' => null],
                'products_only' => ['title' => 'Chỉ nhận sản phẩm (không bao gồm danh mục).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Chỉ nhận danh mục (không bao gồm sản phẩm).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Nhận thông tin biến thể đầy đủ.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Chỉ khi nhận sản phẩm với tư cách quản trị viên) Nhận danh sách sản phẩm không có giá, tỷ lệ hoặc thống kê.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'mảng',
                    '_object' => 'sản phẩm',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'mảng',
                    '_object' => 'Danh mục',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'vật thể',
                    '_object' => 'Danh mục',
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
            'description' => 'Nhận thông tin và số liệu thống kê về sản phẩm.',
            'url' => 'cửa hàng/{shop_id}/sản phẩm/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'vật thể',
                    '_object' => 'sản phẩm',
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
                    '_type' => 'mảng',
                    '_object' => 'Dữ liệu sản phẩm',
                    'title' => 'dữ liệu 30 ngày qua',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Thông tin hàng đợi đơn đặt hàng.',
                    'type' => 'Ảo: đếm (int)|Vật lý: [đếm, trạng thái phân phối] (mảng)'
                ],

                'new_comments_count' => [
                    'title' => 'Số lượng bình luận mới.',
                    'type' => 'int'
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
            'description' => 'Thêm sản phẩm mới vào cửa hàng.',
            'url' => 'cửa hàng/{shop_id}/sản phẩm/thêm',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Đặt loại sản phẩm/dịch vụ.', 'type' => 'liệt kê', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Giá của sản phẩm.', 'type' => 'phao', 'require' => true],
                'commission' => ['title' => 'Thêm hoa hồng vào giá.', 'type' => 'phao', 'default' => 0],
                'discount' => ['title' => 'Giảm giá sản phẩm mặc định.', 'type' => 'phao', 'default' => 0],
                'dis_start' => ['title' => 'Thời gian bắt đầu giảm giá theo múi giờ UTC (định dạng: YYYY-MM-DD HH:mm:ss).', 'type' => 'ngày', 'default' => null],
                'dis_end' => ['title' => 'Thời gian kết thúc giảm giá theo múi giờ UTC (định dạng: YYYY-MM-DD HH:mm:ss).', 'type' => 'ngày', 'default' => null],
                'currency' => ['title' => 'tiền tệ,', 'type' => 'liệt kê', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Tiêu đề của sản phẩm.", 'type' => 'chuỗi', 'require' => true],
                'title_en' => ['title' => 'Tiêu đề tiếng Anh của sản phẩm (hoặc tiêu đề phụ)', 'type' => 'chuỗi', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'chuỗi', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'chuỗi', 'default' => null],
                'gtin' => ['title' => "Mã số thương phẩm toàn cầu của sản phẩm.", 'type' => 'chuỗi', 'default' => null],
                'gpc' => ['title' => 'Mã danh mục sản phẩm của Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Tình trạng hiện tại của mặt hàng trong cửa hàng của bạn.", 'type' => 'liệt kê', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Thông báo hiển thị cho người dùng nếu trường nhập liệu tồn tại (dùng cho sản phẩm ảo).', 'type' => 'chuỗi', 'default' => null],
                'inputs' => ['title' => 'Các trường nhập tùy chọn (dùng cho sản phẩm ảo).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Các trường đầu ra tùy chọn (được sử dụng cho các sản phẩm ảo).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Url blog hoặc trang web tùy chọn.', 'type' => 'chuỗi', 'default' => false],
                'status' => ['title' => 'trạng thái sản phẩm Mở/Đóng, Mặc định là Mở.', 'type' => 'liệt kê', 'default' => 'Mở', 'values' => ['Mở', 'Đóng']],
                'category_id' => ['title' => 'id danh mục.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Thời gian tính bằng giờ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Kiểu dáng của sản phẩm (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Thương hiệu sản phẩm..', 'type' => 'chuỗi', 'default' => null],
                'warranty' => ['title' => 'mô tả bảo hành..', 'type' => 'chuỗi', 'default' => null],
                'original' => ['title' => 'Sản phẩm này có phải hàng chính hãng không?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Đổi trả bảo hành theo ngày.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'vật thể',
                    '_object' => 'sản phẩm',
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
            'description' => 'Thêm sản phẩm mới vào cửa hàng.',
            'url' => 'cửa hàng/{shop_id}/sản phẩm/{product_id}/chỉnh sửa',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Đặt loại sản phẩm/dịch vụ.', 'type' => 'liệt kê', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Giá của sản phẩm.', 'type' => 'phao', 'require' => true],
                'commission' => ['title' => 'Thêm hoa hồng vào giá.', 'type' => 'phao', 'default' => 0],
                'discount' => ['title' => 'Giảm giá sản phẩm mặc định.', 'type' => 'phao', 'default' => 0],
                'dis_start' => ['title' => 'Thời gian bắt đầu giảm giá theo múi giờ UTC (định dạng: YYYY-MM-DD HH:mm:ss).', 'type' => 'ngày', 'default' => null],
                'dis_end' => ['title' => 'Thời gian kết thúc giảm giá theo múi giờ UTC (định dạng: YYYY-MM-DD HH:mm:ss).', 'type' => 'ngày', 'default' => null],
                'currency' => ['title' => 'tiền tệ,', 'type' => 'liệt kê', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Tiêu đề của sản phẩm.", 'type' => 'chuỗi', 'require' => true],
                'title_en' => ['title' => 'Tiêu đề tiếng Anh của sản phẩm (hoặc tiêu đề phụ)', 'type' => 'chuỗi', 'default' => null],
                'message' => ['title' => 'Thông báo hiển thị cho người dùng nếu trường nhập liệu tồn tại (dùng cho sản phẩm ảo).', 'type' => 'chuỗi', 'default' => null],
                'inputs' => ['title' => 'Các trường nhập tùy chọn (dùng cho sản phẩm ảo).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Các trường đầu ra tùy chọn (được sử dụng cho các sản phẩm ảo).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Url blog hoặc trang web tùy chọn.', 'type' => 'chuỗi', 'default' => false],
                'status' => ['title' => 'trạng thái sản phẩm Mở/Đóng, Mặc định là Mở.', 'type' => 'liệt kê', 'default' => 'Mở', 'values' => ['Mở', 'Đóng']],
                'category_id' => ['title' => 'id danh mục.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Thời gian tính bằng giờ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Kiểu dáng của sản phẩm (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Thương hiệu sản phẩm..', 'type' => 'chuỗi', 'default' => null],
                'warranty' => ['title' => 'mô tả bảo hành..', 'type' => 'chuỗi', 'default' => null],
                'original' => ['title' => 'Sản phẩm này có phải hàng chính hãng không?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Đổi trả bảo hành theo ngày.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'vật thể',
                    '_object' => 'sản phẩm',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Trạng thái sản phẩm đã cập nhật thành công.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Thêm sản phẩm mới từ kho theo sku vào cửa hàng.',
            'url' => 'cửa hàng/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'chuỗi', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Tự động đặt danh mục', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Sản phẩm thêm vào danh mục này theo id danh mục trong cửa hàng.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Giá của sản phẩm.', 'type' => 'phao', 'require' => true],
                'currency' => ['title' => 'tiền tệ,', 'type' => 'liệt kê', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'số lượng', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'vật thể',
                    '_object' => 'sản phẩm',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Trạng thái sản phẩm đã cập nhật thành công.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
