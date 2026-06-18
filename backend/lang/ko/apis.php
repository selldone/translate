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
            'description' => '매장의 상품 목록을 받아보세요.',
            'url' => '상점/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => '구매 가능한 상품만 표시합니다. 참일 수도 있고 거짓일 수도 있습니다.', 'type' => '부울', 'default' => false],
                'with_parent' => ['title' => '상위 카테고리 계층 구조를 가져옵니다. 참일 수도 있고 거짓일 수도 있습니다.', 'type' => '부울', 'default' => false],
                'offset' => ['title' => '제품 목록의 오프셋(페이지 매기기용)', 'type' => '정수', 'default' => 0],
                'limit' => ['title' => '목록에 있는 제품 수입니다(페이지 매기기용).', 'type' => '정수', 'default' => 20],
                'sort' => ['title' => '목록 정렬 유형', 'type' => '열거형', 'default' => null, 'values' => [null, '관련', '가장 많이 방문한', '가장_인기있는', '최신', '베스트셀러', '가장 저렴한', '가장_비싼', '무작위', '관련', '좋아하는', '무작위']],
                'product_id' => ['title' => '관련 제품(정렬 = 관련)을 반환하는 데 사용되는 제품 ID입니다.', 'type' => '정수', 'default' => null],
                'set' => ['title' => '제품 데이터 세트. null 또는 spec일 수 있습니다(null: 기본값, spec: 사양 검색에 최적화됨).', 'type' => '열거형', 'default' => null, 'values' => [null, '사양']],
                'search' => ['title' => '텍스트 검색', 'type' => '문자열', 'default' => null],
                'search_type' => ['title' => '검색 유형. null 또는 카테고리일 수 있습니다.', 'type' => '열거형', 'default' => null, 'values' => [null, '카테고리']],
                'dir' => ['title' => '카테고리 ID 또는 이름. 설정되면 이 카테고리의 제품을 가져옵니다.', 'type' => '어떤', 'default' => null],
                'products_only' => ['title' => '제품만 가져옵니다(카테고리는 포함되지 않음).', 'type' => '부울', 'default' => false],
                'categories_only' => ['title' => '카테고리만 가져옵니다(제품은 포함되지 않음).', 'type' => '부울', 'default' => false],
                'need_full_variants' => ['title' => '전체 변형 정보를 얻으세요.', 'type' => '부울', 'default' => false],
                'optimized' => ['title' => '(관리자로 상품을 가져오는 경우에만) 가격, 요율, 통계 없이 상품 목록을 가져옵니다.', 'type' => '부울', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => '배열',
                    '_object' => '제품',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => '배열',
                    '_object' => '카테고리',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => '물체',
                    '_object' => '카테고리',
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
            'description' => '제품 정보 및 통계를 받아보세요.',
            'url' => '상점/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => '물체',
                    '_object' => '제품',
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
                    '_type' => '배열',
                    '_object' => '제품 데이터',
                    'title' => '지난 30일 데이터',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => '주문 정보입니다.',
                    'type' => '가상: 개수(int)|실제: [개수, 배송_상태](배열)'
                ],

                'new_comments_count' => [
                    'title' => '새로운 댓글이 중요합니다.',
                    'type' => '정수'
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
            'description' => '상점에 새 제품을 추가하세요.',
            'url' => '상점/{shop_id}/제품/추가',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => '제품/서비스 유형을 설정합니다.', 'type' => '열거형', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => '제품 가격.', 'type' => '플로트', 'require' => true],
                'commission' => ['title' => '가격에 수수료를 추가하세요.', 'type' => '플로트', 'default' => 0],
                'discount' => ['title' => '기본 제품 가격 할인.', 'type' => '플로트', 'default' => 0],
                'dis_start' => ['title' => 'UTC 시간대의 할인 시작 시간(형식: YYYY-MM-DD HH:mm:ss)', 'type' => '날짜', 'default' => null],
                'dis_end' => ['title' => 'UTC 시간대의 할인 종료 시간(형식: YYYY-MM-DD HH:mm:ss)', 'type' => '날짜', 'default' => null],
                'currency' => ['title' => '통화,', 'type' => '열거형', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "제품의 제목입니다.", 'type' => '문자열', 'require' => true],
                'title_en' => ['title' => '제품의 영문명(또는 부제목)', 'type' => '문자열', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => '문자열', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => '문자열', 'default' => null],
                'gtin' => ['title' => "제품의 국제 무역 품목 번호.", 'type' => '문자열', 'default' => null],
                'gpc' => ['title' => 'Google 제품 카테고리 코드.', 'type' => '정수', 'default' => null],
                'condition' => ['title' => "귀하의 매장에 있는 품목의 현재 상태입니다.", 'type' => '열거형', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => '입력 필드가 존재하는 경우 사용자에게 메시지가 표시됩니다(가상 제품에 사용됨).', 'type' => '문자열', 'default' => null],
                'inputs' => ['title' => '선택적 입력 필드(가상 제품에 사용됨)', 'type' => 'JSON', 'default' => null],
                'outputs' => ['title' => '선택적 출력 필드(가상 제품에 사용됨)', 'type' => 'JSON', 'default' => false],
                'blog' => ['title' => '선택적인 블로그 또는 웹사이트 URL입니다.', 'type' => '문자열', 'default' => false],
                'status' => ['title' => '상품 상태 Open/Close, 기본값은 Open입니다.', 'type' => '열거형', 'default' => '열기', 'values' => ['열기', '닫기']],
                'category_id' => ['title' => '카테고리 ID', 'type' => '정수', 'default' => null],
                'lead' => ['title' => '리드타임(시간)..', 'type' => '정수', 'default' => null],
                'style' => ['title' => '제품 스타일(Json).', 'type' => 'JSON', 'default' => null],
                'brand' => ['title' => '제품의 브랜드..', 'type' => '문자열', 'default' => null],
                'warranty' => ['title' => '보증 설명..', 'type' => '문자열', 'default' => null],
                'original' => ['title' => '이 제품이 정품인가요?', 'type' => '부울', 'default' => false],
                'return_warranty' => ['title' => '보증을 일 단위로 반환합니다.', 'type' => '정수', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => '물체',
                    '_object' => '제품',
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
            'description' => '상점에 새 제품을 추가하세요.',
            'url' => '상점/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => '제품/서비스 유형을 설정합니다.', 'type' => '열거형', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => '제품 가격.', 'type' => '플로트', 'require' => true],
                'commission' => ['title' => '가격에 수수료를 추가하세요.', 'type' => '플로트', 'default' => 0],
                'discount' => ['title' => '기본 제품 가격 할인.', 'type' => '플로트', 'default' => 0],
                'dis_start' => ['title' => 'UTC 시간대의 할인 시작 시간(형식: YYYY-MM-DD HH:mm:ss)', 'type' => '날짜', 'default' => null],
                'dis_end' => ['title' => 'UTC 시간대의 할인 종료 시간(형식: YYYY-MM-DD HH:mm:ss)', 'type' => '날짜', 'default' => null],
                'currency' => ['title' => '통화,', 'type' => '열거형', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "제품의 제목입니다.", 'type' => '문자열', 'require' => true],
                'title_en' => ['title' => '제품의 영문명(또는 부제목)', 'type' => '문자열', 'default' => null],
                'message' => ['title' => '입력 필드가 존재하는 경우 사용자에게 메시지가 표시됩니다(가상 제품에 사용됨).', 'type' => '문자열', 'default' => null],
                'inputs' => ['title' => '선택적 입력 필드(가상 제품에 사용됨)', 'type' => 'JSON', 'default' => null],
                'outputs' => ['title' => '선택적 출력 필드(가상 제품에 사용됨)', 'type' => 'JSON', 'default' => false],
                'blog' => ['title' => '선택적인 블로그 또는 웹사이트 URL입니다.', 'type' => '문자열', 'default' => false],
                'status' => ['title' => '상품 상태 Open/Close, 기본값은 Open입니다.', 'type' => '열거형', 'default' => '열기', 'values' => ['열기', '닫기']],
                'category_id' => ['title' => '카테고리 ID', 'type' => '정수', 'default' => null],
                'lead' => ['title' => '리드타임(시간)..', 'type' => '정수', 'default' => null],
                'style' => ['title' => '제품 스타일(Json).', 'type' => 'JSON', 'default' => null],
                'brand' => ['title' => '제품의 브랜드..', 'type' => '문자열', 'default' => null],
                'warranty' => ['title' => '보증 설명..', 'type' => '문자열', 'default' => null],
                'original' => ['title' => '이 제품이 정품인가요?', 'type' => '부울', 'default' => false],
                'return_warranty' => ['title' => '보증을 일 단위로 반환합니다.', 'type' => '정수', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => '물체',
                    '_object' => '제품',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => '제품 상태가 업데이트되었습니다.', 'type' => '부울'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'SKU를 통해 저장소의 새 제품을 상점에 추가합니다.',
            'url' => '상점/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => '문자열', 'require' => true, 'default' => null],

                'auto_category' => ['title' => '자동 설정 카테고리', 'type' => '부울', 'require' => true, 'default' => true],
                'category_id' => ['title' => '제품은 상점에서 카테고리 ID로 이 카테고리에 추가됩니다.', 'type' => '정수', 'default' => null],

                'price' => ['title' => '제품 가격.', 'type' => '플로트', 'require' => true],
                'currency' => ['title' => '통화,', 'type' => '열거형', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => '수량', 'type' => '정수', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => '물체',
                    '_object' => '제품',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => '제품 상태가 업데이트되었습니다.', 'type' => '부울'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
