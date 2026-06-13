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
            'description' => 'ಅಂಗಡಿಯ ಉತ್ಪನ್ನಗಳ ಪಟ್ಟಿಯನ್ನು ಪಡೆಯಿರಿ.',
            'url' => 'ಅಂಗಡಿಗಳು/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'ಲಭ್ಯವಿರುವ ಉತ್ಪನ್ನಗಳನ್ನು ಮಾತ್ರ ತೋರಿಸಿ. ನಿಜ ಅಥವಾ ಸುಳ್ಳಾಗಿರಬಹುದು.', 'type' => 'ಬೂಲಿಯನ್', 'default' => false],
                'with_parent' => ['title' => 'ಪೋಷಕ ವರ್ಗದ ಶ್ರೇಣಿಯನ್ನು ಪಡೆಯಿರಿ. ನಿಜ ಅಥವಾ ಸುಳ್ಳಾಗಿರಬಹುದು.', 'type' => 'ಬೂಲಿಯನ್', 'default' => false],
                'offset' => ['title' => 'ಉತ್ಪನ್ನ ಪಟ್ಟಿಯ ಆಫ್‌ಸೆಟ್ (ಪುಟ ವಿನ್ಯಾಸಕ್ಕಾಗಿ).', 'type' => 'ಇಂಟ್', 'default' => 0],
                'limit' => ['title' => 'ಪಟ್ಟಿಯಲ್ಲಿರುವ ಉತ್ಪನ್ನಗಳ ಸಂಖ್ಯೆ (ಪುಟ ವಿನ್ಯಾಸಕ್ಕಾಗಿ).', 'type' => 'ಇಂಟ್', 'default' => 20],
                'sort' => ['title' => 'ಪಟ್ಟಿ ವಿಂಗಡಣೆಯ ಪ್ರಕಾರ', 'type' => 'enum', 'default' => null, 'values' => [null, 'ಸಂಬಂಧಿಸಿದ', 'ಹೆಚ್ಚು_ಭೇಟಿ ಮಾಡಲಾಗಿದೆ', 'ಅತ್ಯಂತ_ಜನಪ್ರಿಯ', 'ಹೊಸತು', 'ಹೆಚ್ಚು ಮಾರಾಟವಾಗುತ್ತಿವೆ', 'ಅಗ್ಗದ', 'ಅತ್ಯಂತ_ದುಬಾರಿ', 'ಯಾದೃಚ್ಛಿಕ', 'ಸಂಬಂಧಿಸಿದ', 'ನೆಚ್ಚಿನ', 'ಯಾದೃಚ್ಛಿಕ']],
                'product_id' => ['title' => 'ಉತ್ಪನ್ನ ID ಸಂಬಂಧಿತ ಉತ್ಪನ್ನಗಳನ್ನು ಹಿಂತಿರುಗಿಸಲು ಬಳಸಲಾಗುತ್ತದೆ (ವಿಂಗಡಣೆ = ಸಂಬಂಧಿತ).', 'type' => 'ಇಂಟ್', 'default' => null],
                'set' => ['title' => 'ಉತ್ಪನ್ನ ಡೇಟಾ ಸೆಟ್. ಶೂನ್ಯ ಅಥವಾ ಸ್ಪೆಕ್ ಆಗಿರಬಹುದು (ಶೂನ್ಯ: ಡೀಫಾಲ್ಟ್, ಸ್ಪೆಕ್: ವಿಶೇಷಣಗಳನ್ನು ಹಿಂಪಡೆಯಲು ಆಪ್ಟಿಮೈಸ್ ಮಾಡಲಾಗಿದೆ).', 'type' => 'enum', 'default' => null, 'values' => [null, 'ವಿಶೇಷಣ']],
                'search' => ['title' => 'ಪಠ್ಯವನ್ನು ಹುಡುಕಿ', 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'default' => null],
                'search_type' => ['title' => 'ಹುಡುಕಾಟ ಪ್ರಕಾರ. ಶೂನ್ಯ ಅಥವಾ ವರ್ಗವಾಗಿರಬಹುದು.', 'type' => 'enum', 'default' => null, 'values' => [null, 'ವರ್ಗ']],
                'dir' => ['title' => 'ವರ್ಗ ID ಅಥವಾ ಹೆಸರು. ಹೊಂದಿಸಿದಾಗ ಈ ವರ್ಗದಲ್ಲಿ ಉತ್ಪನ್ನಗಳನ್ನು ಪಡೆಯುತ್ತದೆ.', 'type' => 'ಯಾವುದೇ', 'default' => null],
                'products_only' => ['title' => 'ಉತ್ಪನ್ನಗಳನ್ನು ಮಾತ್ರ ಪಡೆಯಿರಿ (ವರ್ಗಗಳನ್ನು ಸೇರಿಸಲಾಗಿಲ್ಲ).', 'type' => 'ಬೂಲಿಯನ್', 'default' => false],
                'categories_only' => ['title' => 'ವರ್ಗಗಳನ್ನು ಮಾತ್ರ ಪಡೆಯಿರಿ (ಉತ್ಪನ್ನಗಳನ್ನು ಸೇರಿಸಲಾಗಿಲ್ಲ).', 'type' => 'ಬೂಲಿಯನ್', 'default' => false],
                'need_full_variants' => ['title' => 'ಪೂರ್ಣ ರೂಪಾಂತರ ಮಾಹಿತಿಯನ್ನು ಪಡೆಯಿರಿ.', 'type' => 'ಬೂಲಿಯನ್', 'default' => false],
                'optimized' => ['title' => '(ನಿರ್ವಾಹಕರಾಗಿ ಉತ್ಪನ್ನಗಳನ್ನು ಪಡೆದಾಗ ಮಾತ್ರ) ಬೆಲೆ, ದರ ಅಥವಾ ಅಂಕಿಅಂಶಗಳಿಲ್ಲದೆ ಉತ್ಪನ್ನ ಪಟ್ಟಿಯನ್ನು ಪಡೆಯಿರಿ.', 'type' => 'ಬೂಲಿಯನ್', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'ಶ್ರೇಣಿ',
                    '_object' => 'ಉತ್ಪನ್ನ',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'ಶ್ರೇಣಿ',
                    '_object' => 'ವರ್ಗ',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'ವಸ್ತು',
                    '_object' => 'ವರ್ಗ',
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
            'description' => 'ಉತ್ಪನ್ನ ಮಾಹಿತಿ ಮತ್ತು ಅಂಕಿಅಂಶಗಳನ್ನು ಪಡೆಯಿರಿ.',
            'url' => 'ಅಂಗಡಿಗಳು/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'ವಸ್ತು',
                    '_object' => 'ಉತ್ಪನ್ನ',
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
                    '_type' => 'ಶ್ರೇಣಿ',
                    '_object' => 'ಉತ್ಪನ್ನ-ಡೇಟಾ',
                    'title' => 'ಕಳೆದ 30 ದಿನಗಳ ಡೇಟಾ',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'ಆರ್ಡರ್ಸ್ ಕ್ಯೂ ಮಾಹಿತಿ.',
                    'type' => 'ವರ್ಚುವಲ್: ಎಣಿಕೆ (ಇಂಟ್)|ಭೌತಿಕ: [ಎಣಿಕೆ, ಡೆಲಿವರಿ_ಸ್ಟೇಟ್] (ಅರೇ)'
                ],

                'new_comments_count' => [
                    'title' => 'ಹೊಸ ಕಾಮೆಂಟ್‌ಗಳು ಎಣಿಕೆ.',
                    'type' => 'ಇಂಟ್'
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
            'description' => 'ಅಂಗಡಿಗೆ ಹೊಸ ಉತ್ಪನ್ನವನ್ನು ಸೇರಿಸಿ.',
            'url' => 'ಅಂಗಡಿಗಳು/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ಉತ್ಪನ್ನ / ಸೇವೆಯ ಪ್ರಕಾರವನ್ನು ಹೊಂದಿಸಿ.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ಉತ್ಪನ್ನದ ಬೆಲೆ.', 'type' => 'ತೇಲುತ್ತವೆ', 'require' => true],
                'commission' => ['title' => 'ಬೆಲೆಗೆ ಕಮಿಷನ್ ಸೇರಿಸಿ.', 'type' => 'ತೇಲುತ್ತವೆ', 'default' => 0],
                'discount' => ['title' => 'ಡೀಫಾಲ್ಟ್ ಉತ್ಪನ್ನ ಬೆಲೆ ರಿಯಾಯಿತಿ.', 'type' => 'ತೇಲುತ್ತವೆ', 'default' => 0],
                'dis_start' => ['title' => 'Discount start time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'ದಿನಾಂಕ', 'default' => null],
                'dis_end' => ['title' => 'UTC ಸಮಯ ವಲಯದಲ್ಲಿ ರಿಯಾಯಿತಿ ಮುಕ್ತಾಯ ಸಮಯ (ಫಾರ್ಮ್ಯಾಟ್: YYYY-MM-DD HH:mm:ss).', 'type' => 'ದಿನಾಂಕ', 'default' => null],
                'currency' => ['title' => 'ಕರೆನ್ಸಿ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ಉತ್ಪನ್ನದ ಶೀರ್ಷಿಕೆ.", 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'require' => true],
                'title_en' => ['title' => 'ಉತ್ಪನ್ನದ ಇಂಗ್ಲಿಷ್ ಶೀರ್ಷಿಕೆ (ಅಥವಾ ಉಪ ಶೀರ್ಷಿಕೆ)', 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'default' => null],
                'gtin' => ['title' => "ಉತ್ಪನ್ನದ ಜಾಗತಿಕ ವ್ಯಾಪಾರ ಐಟಂ ಸಂಖ್ಯೆ.", 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'default' => null],
                'gpc' => ['title' => 'Google ಉತ್ಪನ್ನ ವರ್ಗ ಕೋಡ್.', 'type' => 'ಇಂಟ್', 'default' => null],
                'condition' => ['title' => "ನಿಮ್ಮ ಅಂಗಡಿಯಲ್ಲಿ ಐಟಂನ ಪ್ರಸ್ತುತ ಸ್ಥಿತಿ.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'ಇನ್‌ಪುಟ್ ಫೀಲ್ಡ್‌ಗಳು ಅಸ್ತಿತ್ವದಲ್ಲಿದ್ದರೆ (ವರ್ಚುವಲ್ ಉತ್ಪನ್ನಗಳಿಗೆ ಬಳಸಲಾಗಿದೆ) ಬಳಕೆದಾರರಿಗೆ ಸಂದೇಶವನ್ನು ತೋರಿಸುತ್ತದೆ.', 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'default' => null],
                'inputs' => ['title' => 'ಐಚ್ಛಿಕ ಇನ್‌ಪುಟ್ ಕ್ಷೇತ್ರಗಳು (ವರ್ಚುವಲ್ ಉತ್ಪನ್ನಗಳಿಗೆ ಬಳಸಲಾಗುತ್ತದೆ).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ಐಚ್ಛಿಕ ಔಟ್ಪುಟ್ ಕ್ಷೇತ್ರಗಳು (ವರ್ಚುವಲ್ ಉತ್ಪನ್ನಗಳಿಗೆ ಬಳಸಲಾಗುತ್ತದೆ).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ಐಚ್ಛಿಕ ಬ್ಲಾಗ್ ಅಥವಾ ವೆಬ್‌ಸೈಟ್ url.', 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'default' => false],
                'status' => ['title' => 'ಉತ್ಪನ್ನ ಸ್ಥಿತಿ ತೆರೆಯಿರಿ / ಮುಚ್ಚಿ, ಡೀಫಾಲ್ಟ್ ತೆರೆದಿರುತ್ತದೆ.', 'type' => 'enum', 'default' => 'ತೆರೆಯಿರಿ', 'values' => ['ತೆರೆಯಿರಿ', 'ಮುಚ್ಚಿ']],
                'category_id' => ['title' => 'ವರ್ಗ ಐಡಿ.', 'type' => 'ಇಂಟ್', 'default' => null],
                'lead' => ['title' => 'ಪ್ರಮುಖ ಸಮಯ ಗಂಟೆಗಳಲ್ಲಿ..', 'type' => 'ಇಂಟ್', 'default' => null],
                'style' => ['title' => 'ಉತ್ಪನ್ನದ ಶೈಲಿ (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ಉತ್ಪನ್ನದ ಬ್ರಾಂಡ್..', 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'default' => null],
                'warranty' => ['title' => 'ಖಾತರಿ ವಿವರಣೆ..', 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'default' => null],
                'original' => ['title' => 'ಈ ಉತ್ಪನ್ನವು ಮೂಲವೇ?', 'type' => 'ಬೂಲಿಯನ್', 'default' => false],
                'return_warranty' => ['title' => 'ದಿನಗಳ ವಾರೆಂಟಿ ಹಿಂತಿರುಗಿಸಿ.', 'type' => 'ಇಂಟ್', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ವಸ್ತು',
                    '_object' => 'ಉತ್ಪನ್ನ',
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
            'description' => 'ಅಂಗಡಿಗೆ ಹೊಸ ಉತ್ಪನ್ನವನ್ನು ಸೇರಿಸಿ.',
            'url' => 'ಅಂಗಡಿಗಳು/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ಉತ್ಪನ್ನ / ಸೇವೆಯ ಪ್ರಕಾರವನ್ನು ಹೊಂದಿಸಿ.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ಉತ್ಪನ್ನದ ಬೆಲೆ.', 'type' => 'ತೇಲುತ್ತವೆ', 'require' => true],
                'commission' => ['title' => 'ಬೆಲೆಗೆ ಕಮಿಷನ್ ಸೇರಿಸಿ.', 'type' => 'ತೇಲುತ್ತವೆ', 'default' => 0],
                'discount' => ['title' => 'ಡೀಫಾಲ್ಟ್ ಉತ್ಪನ್ನ ಬೆಲೆ ರಿಯಾಯಿತಿ.', 'type' => 'ತೇಲುತ್ತವೆ', 'default' => 0],
                'dis_start' => ['title' => 'Discount start time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'ದಿನಾಂಕ', 'default' => null],
                'dis_end' => ['title' => 'UTC ಸಮಯ ವಲಯದಲ್ಲಿ ರಿಯಾಯಿತಿ ಮುಕ್ತಾಯ ಸಮಯ (ಫಾರ್ಮ್ಯಾಟ್: YYYY-MM-DD HH:mm:ss).', 'type' => 'ದಿನಾಂಕ', 'default' => null],
                'currency' => ['title' => 'ಕರೆನ್ಸಿ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ಉತ್ಪನ್ನದ ಶೀರ್ಷಿಕೆ.", 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'require' => true],
                'title_en' => ['title' => 'ಉತ್ಪನ್ನದ ಇಂಗ್ಲಿಷ್ ಶೀರ್ಷಿಕೆ (ಅಥವಾ ಉಪ ಶೀರ್ಷಿಕೆ)', 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'default' => null],
                'message' => ['title' => 'ಇನ್‌ಪುಟ್ ಫೀಲ್ಡ್‌ಗಳು ಅಸ್ತಿತ್ವದಲ್ಲಿದ್ದರೆ (ವರ್ಚುವಲ್ ಉತ್ಪನ್ನಗಳಿಗೆ ಬಳಸಲಾಗಿದೆ) ಬಳಕೆದಾರರಿಗೆ ಸಂದೇಶವನ್ನು ತೋರಿಸುತ್ತದೆ.', 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'default' => null],
                'inputs' => ['title' => 'ಐಚ್ಛಿಕ ಇನ್‌ಪುಟ್ ಕ್ಷೇತ್ರಗಳು (ವರ್ಚುವಲ್ ಉತ್ಪನ್ನಗಳಿಗೆ ಬಳಸಲಾಗುತ್ತದೆ).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ಐಚ್ಛಿಕ ಔಟ್ಪುಟ್ ಕ್ಷೇತ್ರಗಳು (ವರ್ಚುವಲ್ ಉತ್ಪನ್ನಗಳಿಗೆ ಬಳಸಲಾಗುತ್ತದೆ).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ಐಚ್ಛಿಕ ಬ್ಲಾಗ್ ಅಥವಾ ವೆಬ್‌ಸೈಟ್ url.', 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'default' => false],
                'status' => ['title' => 'ಉತ್ಪನ್ನ ಸ್ಥಿತಿ ತೆರೆಯಿರಿ / ಮುಚ್ಚಿ, ಡೀಫಾಲ್ಟ್ ತೆರೆದಿರುತ್ತದೆ.', 'type' => 'enum', 'default' => 'ತೆರೆಯಿರಿ', 'values' => ['ತೆರೆಯಿರಿ', 'ಮುಚ್ಚಿ']],
                'category_id' => ['title' => 'ವರ್ಗ ಐಡಿ.', 'type' => 'ಇಂಟ್', 'default' => null],
                'lead' => ['title' => 'ಪ್ರಮುಖ ಸಮಯ ಗಂಟೆಗಳಲ್ಲಿ..', 'type' => 'ಇಂಟ್', 'default' => null],
                'style' => ['title' => 'ಉತ್ಪನ್ನದ ಶೈಲಿ (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ಉತ್ಪನ್ನದ ಬ್ರಾಂಡ್..', 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'default' => null],
                'warranty' => ['title' => 'ಖಾತರಿ ವಿವರಣೆ..', 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'default' => null],
                'original' => ['title' => 'ಈ ಉತ್ಪನ್ನವು ಮೂಲವೇ?', 'type' => 'ಬೂಲಿಯನ್', 'default' => false],
                'return_warranty' => ['title' => 'ದಿನಗಳ ವಾರೆಂಟಿ ಹಿಂತಿರುಗಿಸಿ.', 'type' => 'ಇಂಟ್', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ವಸ್ತು',
                    '_object' => 'ಉತ್ಪನ್ನ',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'ಯಶಸ್ವಿ ಉತ್ಪನ್ನ ಸ್ಥಿತಿಯನ್ನು ನವೀಕರಿಸಲಾಗಿದೆ.', 'type' => 'ಬೂಲಿಯನ್'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'ಅಂಗಡಿಗೆ sku ಮೂಲಕ ರೆಪೊಸಿಟರಿಯಿಂದ ಹೊಸ ಉತ್ಪನ್ನವನ್ನು ಸೇರಿಸಿ.',
            'url' => 'ಅಂಗಡಿಗಳು/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'ಸ್ಟ್ರಿಂಗ್', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'ಸ್ವಯಂ ಸೆಟ್ ವರ್ಗ', 'type' => 'ಬೂಲಿಯನ್', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'ಅಂಗಡಿಯಲ್ಲಿನ ವರ್ಗದ ಐಡಿ ಮೂಲಕ ಉತ್ಪನ್ನವನ್ನು ಈ ವರ್ಗಕ್ಕೆ ಸೇರಿಸಿ.', 'type' => 'ಇಂಟ್', 'default' => null],

                'price' => ['title' => 'ಉತ್ಪನ್ನದ ಬೆಲೆ.', 'type' => 'ತೇಲುತ್ತವೆ', 'require' => true],
                'currency' => ['title' => 'ಕರೆನ್ಸಿ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'ಪ್ರಮಾಣ', 'type' => 'ಇಂಟ್', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'ವಸ್ತು',
                    '_object' => 'ಉತ್ಪನ್ನ',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'ಯಶಸ್ವಿ ಉತ್ಪನ್ನ ಸ್ಥಿತಿಯನ್ನು ನವೀಕರಿಸಲಾಗಿದೆ.', 'type' => 'ಬೂಲಿಯನ್'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
