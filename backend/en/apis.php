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
const  StandardJsonHeaders=['Accept'=>'application/json','Content-Type'=>'application/json'];

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
        
        'Get products list'=>[
            'auth'=>true,
            'scope'=>ProductController::GET_MY_PRODUCTS_SCOPE,
            'permissions'=>ProductController::GET_MY_PRODUCTS_PERMISSION,
            'description'=>'Get products list of the shop.',
            'url'=>'shops/{shop_id}/products/all-admin',
            'method'=>'GET',
            'headers'=>StandardJsonHeaders,
            'parameters'=>[
                'available'=>['title'=>'Show only available products, Can be true or false.','type'=>'boolean','default'=>false],
                'with_parent'=>['title'=>'Get parent category hierarchy, Can be true or false.','type'=>'boolean','default'=>false],
                'offset'=>['title'=>'Offset of products list (for pagination purpose)','type'=>'int','default'=>0],
                'limit'=>['title'=>'Count of products in the list (for pagination purpose)','type'=>'int','default'=>20],
                'sort'=>['title'=>'Sort type of list','type'=>'enum','default'=>null,'values'=>[null, 'related', 'most_visited', 'most_popular', 'newest', 'bestselling', 'cheapest', 'most_expensive', 'random', 'related', 'favorite', 'random']],
                'product_id'=>['title'=>'Product ID used for return related (sort = related) products.','type'=>'int','default'=>null],
                'set'=>['title'=>'Set of product data, Can be : null or spec (null: default, spec: Optimized for get spec)','type'=>'enum','default'=>null,'values'=>[null,'spec']],
                'search'=>['title'=>'Search text','type'=>'string','default'=>null],
                'search_type'=>['title'=>'Search type. Can be null or category.','type'=>'enum','default'=>null,'values'=>[null,'category']],
                'dir'=>['title'=>'Category ID or name, Get products in this category if set.','type'=>'any','default'=>null],
                'products_only'=>['title'=>'Get only products (Not categories included)','type'=>'boolean','default'=>false],
                'categories_only'=>['title'=>'Get only categories (Not products included)','type'=>'boolean','default'=>false],
                'need_full_variants'=>['title'=>' 	Get full variants info.','type'=>'boolean','default'=>false],
                'optimized'=>['title'=>'(Only in the get products by admin) Get list of products without price,rate,statistics.','type'=>'boolean','default'=>false],

            ],

            'response'=>[
                'products'=>[
                    '_type'=>'array',
                    '_object'=>'Product',
                    'structure'=>Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders'=>[
                    '_type'=>'array',
                    '_object'=>'Category',
                    'structure'=>ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent'=>[
                    '_type'=>'object',
                    '_object'=>'Category',
                    'structure'=>ShopCategory::CustomStructure('id,icon,title,name,description,parent_id,filters')
                ],


            ]
        ],

        /**
         * @see ProductController::api_getMyProduct()
         */
        'Get product info'=>[
            'auth'=>true,
            'scope'=>ProductController::GET_MY_PRODUCTS_SCOPE,
            'permissions'=>ProductController::GET_MY_PRODUCTS_PERMISSION,
            'description'=>'Get product info and statistics.',
            'url'=>'shops/{shop_id}/products/{product_id}/admin',
            'method'=>'GET',
            'headers'=>StandardJsonHeaders,
            'response'=>[
                'product'=>[
                    '_type'=>'object',
                    '_object'=>'Product',
                    'structure'=>array_merge(Product::STRUCTURE,[
                        'category'=>[
                            '_type'=>'object',
                            '_object'=>'Category',
                            'structure'=>ShopCategory::STRUCTURE
                        ],
                        'images'=>[
                            '_type'=>'array',
                            '_object'=>'Product-Image',
                            'structure'=>ProductImages::CustomStructure('id,path,variant_id')
                        ],
                        'product_variants'=>[
                            '_type'=>'array',
                            '_object'=>'Variant',
                            'structure'=>ProductVariant::STRUCTURE
                        ],

                        'shop'=>[
                            '_type'=>'object',
                            '_object'=>'Shop',
                            'structure'=>Shop::CustomStructure('id,name')
                        ],
                        'article'=>[
                            '_type'=>'object',
                            '_object'=>'Article',
                            'structure'=>Article::STRUCTURE
                        ],
                        
                        
                        'ratings'=>[
                            '_type'=>'array',
                            '_object'=>'Rating',
                            'structure'=>ShopRating::CustomStructure('id,name,value,count')
                        ],
                    
                    ]),
                ],
                'data'=>[
                    '_type'=>'array',
                    '_object'=>'Product-Data',
                    'title'=>'last 30 days data',
                    'structure'=>ProductData::STRUCTURE
                ],

                'orderQue'=>[
                    'title'=>'Orders que info.',
                    'type'=>'Virtual: count (int) | Physical: [count , delivery_state] (array)'
                ],

                'new_comments_count'=>[
                    'title'=>'New comments count.',
                    'type'=>'int'
                ],
                
            ]

            ],

        /**
         * @see ProductAddController::api_addProduct()
         */
        'Add new product'=>[
            'auth'=>true,
            'scope'=>ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions'=>ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description'=>'Add new product to the shop.',
            'url'=>'shops/{shop_id}/product/add',
            'method'=>'POST',
            'headers'=>StandardJsonHeaders,
            'parameters'=>[

                'type'=>['title'=>'Set type of the product / service.','type'=>'enum','require'=>true,'values'=>['VIRTUAL','PHYSICAL','SERVICE','FILE']],
                'price'=>['title'=>'Price of the product.','type'=>'float','require'=>true],
                'commission'=>['title'=>'Add commission to price.','type'=>'float','default'=>0],
                'discount'=>['title'=>'Default product price discount.','type'=>'float','default'=>0],
                'dis_start'=>['title'=>'Discount start time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).','type'=>'date','default'=>null],
                'dis_end'=>['title'=>'Discount end time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).','type'=>'date','default'=>null],
                'currency'=>['title'=>'Currency,','type'=>'enum','require'=>true,'values'=>Currency::GetCurrenciesList()],
                'title'=>['title'=>"Product's title.",'type'=>'string','require'=>true],
                'title_en'=>['title'=>'English title of the product (or sub title)','type'=>'string','default'=>null],


                'sku'=>['title'=>'SKU','type'=>'string','default'=>null],
                'mpn'=>['title'=>'MPN','type'=>'string','default'=>null],
                'gtin'=>['title'=>"Product's Global Trade Item Number.",'type'=>'string','default'=>null],
                'gpc'=>['title'=>'Google product category code.','type'=>'int','default'=>null],
                'condition'=>['title'=>"Item's current condition in your store.",'type'=>'enum','default'=>ProductCondition::NEW,'values'=>ProductCondition::All],


                'message'=>['title'=>'Message show to the user if input fields exist (used for virtual products).','type'=>'string','default'=>null],
                'inputs'=>['title'=>'Optional input fields (used for virtual products).','type'=>'json','default'=>null],
                'outputs'=>['title'=>'Optional output fields (used for virtual products).','type'=>'json','default'=>false],
                'blog'=>['title'=>'Optional blog or website url.','type'=>'string','default'=>false],
                'status'=>['title'=>'product status Open / Close, Default is Open.','type'=>'enum','default'=>'Open','values'=>['Open','Close']],
                'category_id'=>['title'=>'category id.','type'=>'int','default'=>null],
                'lead'=>['title'=>'Lead time in hours..','type'=>'int','default'=>null],
                'style'=>['title'=>'Style of product (Json).','type'=>'json','default'=>null],
                'brand'=>['title'=>'Brand of product..','type'=>'string','default'=>null],
                'warranty'=>['title'=>'warranty description..','type'=>'string','default'=>null],
                'original'=>['title'=>'This product is original?','type'=>'boolean','default'=>false],
                'return_warranty'=>['title'=>'Return warranty by days.','type'=>'int','default'=>0],


            ],

            'response'=>[
                'product'=>[
                    '_type'=>'object',
                    '_object'=>'Product',
                    'structure'=>Product::STRUCTURE
                ],
            ]
        ],



        /**
         * @see ProductEditController::api_editProduct()
         */
        'Edit product'=>[
            'auth'=>true,
            'scope'=>ProductEditController::EDIT_PRODUCT_SCOPE,
            'permissions'=>ProductEditController::EDIT_PERMISSION,
            'description'=>'Add new product to the shop.',
            'url'=>'shops/{shop_id}/products/{product_id}/edit',
            'method'=>'PUT',
            'headers'=>StandardJsonHeaders,
            'parameters'=>[

                'type'=>['title'=>'Set type of the product / service.','type'=>'enum','require'=>true,'values'=>['VIRTUAL','PHYSICAL','SERVICE','FILE']],
                'price'=>['title'=>'Price of the product.','type'=>'float','require'=>true],
                'commission'=>['title'=>'Add commission to price.','type'=>'float','default'=>0],
                'discount'=>['title'=>'Default product price discount.','type'=>'float','default'=>0],
                'dis_start'=>['title'=>'Discount start time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).','type'=>'date','default'=>null],
                'dis_end'=>['title'=>'Discount end time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).','type'=>'date','default'=>null],
                'currency'=>['title'=>'Currency,','type'=>'enum','require'=>true,'values'=>Currency::GetCurrenciesList()],
                'title'=>['title'=>"Product's title.",'type'=>'string','require'=>true],
                'title_en'=>['title'=>'English title of the product (or sub title)','type'=>'string','default'=>null],
                'message'=>['title'=>'Message show to the user if input fields exist (used for virtual products).','type'=>'string','default'=>null],
                'inputs'=>['title'=>'Optional input fields (used for virtual products).','type'=>'json','default'=>null],
                'outputs'=>['title'=>'Optional output fields (used for virtual products).','type'=>'json','default'=>false],
                'blog'=>['title'=>'Optional blog or website url.','type'=>'string','default'=>false],
                'status'=>['title'=>'product status Open / Close, Default is Open.','type'=>'enum','default'=>'Open','values'=>['Open','Close']],
                'category_id'=>['title'=>'category id.','type'=>'int','default'=>null],
                'lead'=>['title'=>'Lead time in hours..','type'=>'int','default'=>null],
                'style'=>['title'=>'Style of product (Json).','type'=>'json','default'=>null],
                'brand'=>['title'=>'Brand of product..','type'=>'string','default'=>null],
                'warranty'=>['title'=>'warranty description..','type'=>'string','default'=>null],
                'original'=>['title'=>'This product is original?','type'=>'boolean','default'=>false],
                'return_warranty'=>['title'=>'Return warranty by days.','type'=>'int','default'=>0],


            ],

            'response'=>[
                'product'=>[
                    '_type'=>'object',
                    '_object'=>'Product',
                    'structure'=>Product::STRUCTURE
                ],
                'success'=>['title'=>'Success updated product state.','type'=>'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU'=>[
            'auth'=>true,
            'scope'=>ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions'=>ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description'=>'Add new product from repository by sku to the shop.',
            'url'=>'shops/{shop_id}/product-repository/add-sku',
            'method'=>'POST',
            'headers'=>StandardJsonHeaders,
            'parameters'=>[

                'sku'=>['title'=>'SKU','type'=>'string','require'=>true,'default'=>null],

                'auto_category'=>['title'=>'Auto set category','type'=>'boolean','require'=>true,'default'=>true],
                'category_id'=>['title'=>'Product add to this category by category id in the shop.','type'=>'int','default'=>null],

                'price'=>['title'=>'Price of the product.','type'=>'float','require'=>true],
                'currency'=>['title'=>'Currency,','type'=>'enum','require'=>true,'values'=>Currency::GetCurrenciesList()],

                'quantity'=>['title'=>'Quantity','type'=>'int','default'=>0],

            ],

            'response'=>[
                'product'=>[
                    '_type'=>'object',
                    '_object'=>'Product',
                    'structure'=>Product::STRUCTURE
                ],
                'success'=>['title'=>'Success updated product state.','type'=>'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
