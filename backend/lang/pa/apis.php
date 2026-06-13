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
            'description' => 'ਦੁਕਾਨ ਦੀ ਉਤਪਾਦ ਸੂਚੀ ਪ੍ਰਾਪਤ ਕਰੋ.',
            'url' => 'ਦੁਕਾਨਾਂ/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'ਸਿਰਫ਼ ਉਪਲਬਧ ਉਤਪਾਦ ਦਿਖਾਓ। ਸੱਚ ਜਾਂ ਝੂਠ ਹੋ ਸਕਦਾ ਹੈ।', 'type' => 'ਬੁਲੀਅਨ', 'default' => false],
                'with_parent' => ['title' => 'ਮੂਲ ਸ਼੍ਰੇਣੀ ਦਾ ਦਰਜਾ ਪ੍ਰਾਪਤ ਕਰੋ। ਸੱਚ ਜਾਂ ਝੂਠ ਹੋ ਸਕਦਾ ਹੈ।', 'type' => 'ਬੁਲੀਅਨ', 'default' => false],
                'offset' => ['title' => 'ਉਤਪਾਦ ਸੂਚੀ ਦਾ ਆਫਸੈੱਟ (ਪੰਨਾਬੰਦੀ ਲਈ)।', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'ਸੂਚੀ ਵਿੱਚ ਉਤਪਾਦਾਂ ਦੀ ਸੰਖਿਆ (ਪੰਨਾਬੰਦੀ ਲਈ)।', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'ਸੂਚੀ ਕ੍ਰਮਬੱਧ ਕਿਸਮ', 'type' => 'enum', 'default' => null, 'values' => [null, 'ਸਬੰਧਤ', 'ਸਭ ਤੋਂ ਵੱਧ_ਵਿਜ਼ਿਟ ਕੀਤੇ', 'ਸਭ ਤੋਂ ਵੱਧ_ਪ੍ਰਸਿੱਧ', 'ਸਭ ਤੋਂ ਨਵਾਂ', 'ਸਭ ਤੋਂ ਵੱਧ ਵਿਕਣ ਵਾਲਾ', 'ਸਭ ਤੋਂ ਸਸਤਾ', 'ਸਭ ਤੋਂ ਮਹਿੰਗਾ', 'ਬੇਤਰਤੀਬ', 'ਸਬੰਧਤ', 'ਪਸੰਦੀਦਾ', 'ਬੇਤਰਤੀਬ']],
                'product_id' => ['title' => 'ਉਤਪਾਦ ID ਸੰਬੰਧਿਤ ਉਤਪਾਦਾਂ ਨੂੰ ਵਾਪਸ ਕਰਨ ਲਈ ਵਰਤਿਆ ਜਾਂਦਾ ਹੈ (ਕ੍ਰਮਬੱਧ = ਸੰਬੰਧਿਤ)।', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'ਉਤਪਾਦ ਡਾਟਾ ਸੈੱਟ. null ਜਾਂ spec (null: default, spec: ਵਿਸ਼ੇਸ਼ਤਾਵਾਂ ਨੂੰ ਮੁੜ ਪ੍ਰਾਪਤ ਕਰਨ ਲਈ ਅਨੁਕੂਲਿਤ) ਹੋ ਸਕਦਾ ਹੈ।', 'type' => 'enum', 'default' => null, 'values' => [null, 'ਖਾਸ']],
                'search' => ['title' => 'ਟੈਕਸਟ ਖੋਜੋ', 'type' => 'ਸਤਰ', 'default' => null],
                'search_type' => ['title' => 'ਖੋਜ ਦੀ ਕਿਸਮ. ਨਲ ਜਾਂ ਸ਼੍ਰੇਣੀ ਹੋ ਸਕਦੀ ਹੈ।', 'type' => 'enum', 'default' => null, 'values' => [null, 'ਸ਼੍ਰੇਣੀ']],
                'dir' => ['title' => 'ਸ਼੍ਰੇਣੀ ID ਜਾਂ ਨਾਮ। ਸੈੱਟ ਹੋਣ \'ਤੇ ਇਸ ਸ਼੍ਰੇਣੀ ਵਿੱਚ ਉਤਪਾਦ ਪ੍ਰਾਪਤ ਕਰਦਾ ਹੈ।', 'type' => 'ਕੋਈ ਵੀ', 'default' => null],
                'products_only' => ['title' => 'ਸਿਰਫ਼ ਉਤਪਾਦ ਪ੍ਰਾਪਤ ਕਰੋ (ਸ਼੍ਰੇਣੀਆਂ ਸ਼ਾਮਲ ਨਹੀਂ ਹਨ)।', 'type' => 'ਬੁਲੀਅਨ', 'default' => false],
                'categories_only' => ['title' => 'ਸਿਰਫ਼ ਸ਼੍ਰੇਣੀਆਂ ਪ੍ਰਾਪਤ ਕਰੋ (ਉਤਪਾਦ ਸ਼ਾਮਲ ਨਹੀਂ ਹਨ)।', 'type' => 'ਬੁਲੀਅਨ', 'default' => false],
                'need_full_variants' => ['title' => 'ਪੂਰੀ ਤਰ੍ਹਾਂ ਦੀ ਜਾਣਕਾਰੀ ਪ੍ਰਾਪਤ ਕਰੋ।', 'type' => 'ਬੁਲੀਅਨ', 'default' => false],
                'optimized' => ['title' => '(ਸਿਰਫ਼ ਪ੍ਰਸ਼ਾਸਕ ਵਜੋਂ ਉਤਪਾਦ ਪ੍ਰਾਪਤ ਕਰਨ ਵੇਲੇ) ਕੀਮਤ, ਦਰ ਜਾਂ ਅੰਕੜਿਆਂ ਤੋਂ ਬਿਨਾਂ ਉਤਪਾਦ ਸੂਚੀ ਪ੍ਰਾਪਤ ਕਰੋ।', 'type' => 'ਬੁਲੀਅਨ', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'ਐਰੇ',
                    '_object' => 'ਉਤਪਾਦ',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'ਐਰੇ',
                    '_object' => 'ਸ਼੍ਰੇਣੀ',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'ਵਸਤੂ',
                    '_object' => 'ਸ਼੍ਰੇਣੀ',
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
            'description' => 'ਉਤਪਾਦ ਦੀ ਜਾਣਕਾਰੀ ਅਤੇ ਅੰਕੜੇ ਪ੍ਰਾਪਤ ਕਰੋ।',
            'url' => 'ਦੁਕਾਨਾਂ/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'ਵਸਤੂ',
                    '_object' => 'ਉਤਪਾਦ',
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
                    '_type' => 'ਐਰੇ',
                    '_object' => 'ਉਤਪਾਦ-ਡਾਟਾ',
                    'title' => 'ਪਿਛਲੇ 30 ਦਿਨਾਂ ਦਾ ਡਾਟਾ',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'ਆਰਡਰ que ਜਾਣਕਾਰੀ.',
                    'type' => 'ਵਰਚੁਅਲ: ਗਿਣਤੀ (ਇੰਟ)|ਭੌਤਿਕ: [ਗਿਣਤੀ, ਡਿਲੀਵਰੀ_ਸਟੇਟ] (ਐਰੇ)'
                ],

                'new_comments_count' => [
                    'title' => 'ਨਵੀਆਂ ਟਿੱਪਣੀਆਂ ਦੀ ਗਿਣਤੀ।',
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
            'description' => 'ਦੁਕਾਨ ਵਿੱਚ ਨਵਾਂ ਉਤਪਾਦ ਸ਼ਾਮਲ ਕਰੋ।',
            'url' => 'ਦੁਕਾਨਾਂ/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ਉਤਪਾਦ/ਸੇਵਾ ਦੀ ਕਿਸਮ ਸੈੱਟ ਕਰੋ।', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ਉਤਪਾਦ ਦੀ ਕੀਮਤ.', 'type' => 'ਫਲੋਟ', 'require' => true],
                'commission' => ['title' => 'ਕੀਮਤ ਵਿੱਚ ਕਮਿਸ਼ਨ ਸ਼ਾਮਲ ਕਰੋ।', 'type' => 'ਫਲੋਟ', 'default' => 0],
                'discount' => ['title' => 'ਪੂਰਵ-ਨਿਰਧਾਰਤ ਉਤਪਾਦ ਕੀਮਤ ਛੂਟ।', 'type' => 'ਫਲੋਟ', 'default' => 0],
                'dis_start' => ['title' => 'UTC ਸਮਾਂ ਖੇਤਰ ਵਿੱਚ ਛੋਟ ਸ਼ੁਰੂ ਹੋਣ ਦਾ ਸਮਾਂ (ਫਾਰਮੈਟ: YYYY-MM-DD HH:mm:ss)।', 'type' => 'ਮਿਤੀ', 'default' => null],
                'dis_end' => ['title' => 'UTC ਸਮਾਂ ਖੇਤਰ ਵਿੱਚ ਛੂਟ ਸਮਾਪਤੀ ਸਮਾਂ (ਫਾਰਮੈਟ: YYYY-MM-DD HH:mm:ss)।', 'type' => 'ਮਿਤੀ', 'default' => null],
                'currency' => ['title' => 'ਮੁਦਰਾ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ਉਤਪਾਦ ਦਾ ਸਿਰਲੇਖ।", 'type' => 'ਸਤਰ', 'require' => true],
                'title_en' => ['title' => 'ਉਤਪਾਦ ਦਾ ਅੰਗਰੇਜ਼ੀ ਸਿਰਲੇਖ (ਜਾਂ ਉਪ ਸਿਰਲੇਖ)', 'type' => 'ਸਤਰ', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'ਸਤਰ', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'ਸਤਰ', 'default' => null],
                'gtin' => ['title' => "ਉਤਪਾਦ ਦਾ ਗਲੋਬਲ ਵਪਾਰ ਆਈਟਮ ਨੰਬਰ।", 'type' => 'ਸਤਰ', 'default' => null],
                'gpc' => ['title' => 'Google ਉਤਪਾਦ ਸ਼੍ਰੇਣੀ ਕੋਡ।', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "ਤੁਹਾਡੇ ਸਟੋਰ ਵਿੱਚ ਆਈਟਮ ਦੀ ਮੌਜੂਦਾ ਸਥਿਤੀ।", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'ਉਪਭੋਗਤਾ ਨੂੰ ਸੁਨੇਹਾ ਦਿਖਾਓ ਜੇਕਰ ਇਨਪੁਟ ਖੇਤਰ ਮੌਜੂਦ ਹਨ (ਵਰਚੁਅਲ ਉਤਪਾਦਾਂ ਲਈ ਵਰਤਿਆ ਜਾਂਦਾ ਹੈ)।', 'type' => 'ਸਤਰ', 'default' => null],
                'inputs' => ['title' => 'ਵਿਕਲਪਿਕ ਇਨਪੁਟ ਖੇਤਰ (ਵਰਚੁਅਲ ਉਤਪਾਦਾਂ ਲਈ ਵਰਤੇ ਜਾਂਦੇ ਹਨ)।', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ਵਿਕਲਪਿਕ ਆਉਟਪੁੱਟ ਖੇਤਰ (ਵਰਚੁਅਲ ਉਤਪਾਦਾਂ ਲਈ ਵਰਤੇ ਜਾਂਦੇ ਹਨ)।', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ਵਿਕਲਪਿਕ ਬਲੌਗ ਜਾਂ ਵੈੱਬਸਾਈਟ url।', 'type' => 'ਸਤਰ', 'default' => false],
                'status' => ['title' => 'ਉਤਪਾਦ ਸਥਿਤੀ ਓਪਨ / ਬੰਦ ਕਰੋ, ਡਿਫੌਲਟ ਖੁੱਲਾ ਹੈ।', 'type' => 'enum', 'default' => 'ਖੋਲ੍ਹੋ', 'values' => ['ਖੋਲ੍ਹੋ', 'ਬੰਦ ਕਰੋ']],
                'category_id' => ['title' => 'ਸ਼੍ਰੇਣੀ ਆਈ.ਡੀ.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ਲੀਡ ਟਾਈਮ ਘੰਟਿਆਂ ਵਿੱਚ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'ਉਤਪਾਦ ਦੀ ਸ਼ੈਲੀ (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ਉਤਪਾਦ ਦਾ ਬ੍ਰਾਂਡ..', 'type' => 'ਸਤਰ', 'default' => null],
                'warranty' => ['title' => 'ਵਾਰੰਟੀ ਦਾ ਵੇਰਵਾ..', 'type' => 'ਸਤਰ', 'default' => null],
                'original' => ['title' => 'ਇਹ ਉਤਪਾਦ ਅਸਲੀ ਹੈ?', 'type' => 'ਬੁਲੀਅਨ', 'default' => false],
                'return_warranty' => ['title' => 'ਦਿਨਾਂ ਦੁਆਰਾ ਵਾਰੰਟੀ ਵਾਪਸ ਕਰੋ।', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ਵਸਤੂ',
                    '_object' => 'ਉਤਪਾਦ',
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
            'description' => 'ਦੁਕਾਨ ਵਿੱਚ ਨਵਾਂ ਉਤਪਾਦ ਸ਼ਾਮਲ ਕਰੋ।',
            'url' => 'ਦੁਕਾਨਾਂ/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ਉਤਪਾਦ/ਸੇਵਾ ਦੀ ਕਿਸਮ ਸੈੱਟ ਕਰੋ।', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ਉਤਪਾਦ ਦੀ ਕੀਮਤ.', 'type' => 'ਫਲੋਟ', 'require' => true],
                'commission' => ['title' => 'ਕੀਮਤ ਵਿੱਚ ਕਮਿਸ਼ਨ ਸ਼ਾਮਲ ਕਰੋ।', 'type' => 'ਫਲੋਟ', 'default' => 0],
                'discount' => ['title' => 'ਪੂਰਵ-ਨਿਰਧਾਰਤ ਉਤਪਾਦ ਕੀਮਤ ਛੂਟ।', 'type' => 'ਫਲੋਟ', 'default' => 0],
                'dis_start' => ['title' => 'UTC ਸਮਾਂ ਖੇਤਰ ਵਿੱਚ ਛੋਟ ਸ਼ੁਰੂ ਹੋਣ ਦਾ ਸਮਾਂ (ਫਾਰਮੈਟ: YYYY-MM-DD HH:mm:ss)।', 'type' => 'ਮਿਤੀ', 'default' => null],
                'dis_end' => ['title' => 'UTC ਸਮਾਂ ਖੇਤਰ ਵਿੱਚ ਛੂਟ ਸਮਾਪਤੀ ਸਮਾਂ (ਫਾਰਮੈਟ: YYYY-MM-DD HH:mm:ss)।', 'type' => 'ਮਿਤੀ', 'default' => null],
                'currency' => ['title' => 'ਮੁਦਰਾ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ਉਤਪਾਦ ਦਾ ਸਿਰਲੇਖ।", 'type' => 'ਸਤਰ', 'require' => true],
                'title_en' => ['title' => 'ਉਤਪਾਦ ਦਾ ਅੰਗਰੇਜ਼ੀ ਸਿਰਲੇਖ (ਜਾਂ ਉਪ ਸਿਰਲੇਖ)', 'type' => 'ਸਤਰ', 'default' => null],
                'message' => ['title' => 'ਉਪਭੋਗਤਾ ਨੂੰ ਸੁਨੇਹਾ ਦਿਖਾਓ ਜੇਕਰ ਇਨਪੁਟ ਖੇਤਰ ਮੌਜੂਦ ਹਨ (ਵਰਚੁਅਲ ਉਤਪਾਦਾਂ ਲਈ ਵਰਤਿਆ ਜਾਂਦਾ ਹੈ)।', 'type' => 'ਸਤਰ', 'default' => null],
                'inputs' => ['title' => 'ਵਿਕਲਪਿਕ ਇਨਪੁਟ ਖੇਤਰ (ਵਰਚੁਅਲ ਉਤਪਾਦਾਂ ਲਈ ਵਰਤੇ ਜਾਂਦੇ ਹਨ)।', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ਵਿਕਲਪਿਕ ਆਉਟਪੁੱਟ ਖੇਤਰ (ਵਰਚੁਅਲ ਉਤਪਾਦਾਂ ਲਈ ਵਰਤੇ ਜਾਂਦੇ ਹਨ)।', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ਵਿਕਲਪਿਕ ਬਲੌਗ ਜਾਂ ਵੈੱਬਸਾਈਟ url।', 'type' => 'ਸਤਰ', 'default' => false],
                'status' => ['title' => 'ਉਤਪਾਦ ਸਥਿਤੀ ਓਪਨ / ਬੰਦ ਕਰੋ, ਡਿਫੌਲਟ ਖੁੱਲਾ ਹੈ।', 'type' => 'enum', 'default' => 'ਖੋਲ੍ਹੋ', 'values' => ['ਖੋਲ੍ਹੋ', 'ਬੰਦ ਕਰੋ']],
                'category_id' => ['title' => 'ਸ਼੍ਰੇਣੀ ਆਈ.ਡੀ.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ਲੀਡ ਟਾਈਮ ਘੰਟਿਆਂ ਵਿੱਚ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'ਉਤਪਾਦ ਦੀ ਸ਼ੈਲੀ (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ਉਤਪਾਦ ਦਾ ਬ੍ਰਾਂਡ..', 'type' => 'ਸਤਰ', 'default' => null],
                'warranty' => ['title' => 'ਵਾਰੰਟੀ ਦਾ ਵੇਰਵਾ..', 'type' => 'ਸਤਰ', 'default' => null],
                'original' => ['title' => 'ਇਹ ਉਤਪਾਦ ਅਸਲੀ ਹੈ?', 'type' => 'ਬੁਲੀਅਨ', 'default' => false],
                'return_warranty' => ['title' => 'ਦਿਨਾਂ ਦੁਆਰਾ ਵਾਰੰਟੀ ਵਾਪਸ ਕਰੋ।', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ਵਸਤੂ',
                    '_object' => 'ਉਤਪਾਦ',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'ਸਫਲਤਾਪੂਰਵਕ ਉਤਪਾਦ ਸਥਿਤੀ ਅੱਪਡੇਟ ਕੀਤੀ ਗਈ।', 'type' => 'ਬੁਲੀਅਨ'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'ਰਿਪੋਜ਼ਟਰੀ ਤੋਂ sku ਦੁਆਰਾ ਦੁਕਾਨ ਵਿੱਚ ਨਵਾਂ ਉਤਪਾਦ ਸ਼ਾਮਲ ਕਰੋ।',
            'url' => 'ਦੁਕਾਨਾਂ/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'ਸਤਰ', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'ਆਟੋ ਸੈੱਟ ਸ਼੍ਰੇਣੀ', 'type' => 'ਬੁਲੀਅਨ', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'ਦੁਕਾਨ ਵਿੱਚ ਸ਼੍ਰੇਣੀ ਆਈਡੀ ਦੁਆਰਾ ਉਤਪਾਦ ਨੂੰ ਇਸ ਸ਼੍ਰੇਣੀ ਵਿੱਚ ਸ਼ਾਮਲ ਕਰੋ।', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'ਉਤਪਾਦ ਦੀ ਕੀਮਤ.', 'type' => 'ਫਲੋਟ', 'require' => true],
                'currency' => ['title' => 'ਮੁਦਰਾ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'ਮਾਤਰਾ', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'ਵਸਤੂ',
                    '_object' => 'ਉਤਪਾਦ',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'ਸਫਲਤਾਪੂਰਵਕ ਉਤਪਾਦ ਸਥਿਤੀ ਅੱਪਡੇਟ ਕੀਤੀ ਗਈ।', 'type' => 'ਬੁਲੀਅਨ'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
