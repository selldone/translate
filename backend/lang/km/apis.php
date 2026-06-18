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
            'description' => 'ទទួលបានបញ្ជីផលិតផលរបស់ហាង។',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'បង្ហាញតែផលិតផលដែលមាន។ អាចពិតឬមិនពិត។', 'type' => 'ប៊ូលីន', 'default' => false],
                'with_parent' => ['title' => 'ទទួលបានឋានានុក្រមប្រភេទមេ។ អាចពិតឬមិនពិត។', 'type' => 'ប៊ូលីន', 'default' => false],
                'offset' => ['title' => 'អុហ្វសិតនៃបញ្ជីផលិតផល (សម្រាប់ការបិទភ្ជាប់) ។', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'ចំនួនផលិតផលក្នុងបញ្ជី (សម្រាប់ការដាក់ទំព័រ)។', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'បញ្ជីប្រភេទតម្រៀប', 'type' => 'enum', 'default' => null, 'values' => [null, 'ពាក់ព័ន្ធ', 'បានទស្សនាច្រើនបំផុត', 'ពេញនិយមបំផុត។', 'ថ្មីបំផុត', 'លក់ដាច់បំផុត។', 'ថោកបំផុត។', 'ថ្លៃបំផុត_ថ្លៃបំផុត។', 'ចៃដន្យ', 'ពាក់ព័ន្ធ', 'សំណព្វ', 'ចៃដន្យ']],
                'product_id' => ['title' => 'ផលិតផល ID ប្រើដើម្បីប្រគល់ផលិតផលដែលពាក់ព័ន្ធ (តម្រៀប = ពាក់ព័ន្ធ)។', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'សំណុំទិន្នន័យផលិតផល។ អាចជា null ឬ spec (null: default, spec: optimized for retrieving specifications)។', 'type' => 'enum', 'default' => null, 'values' => [null, 'លក្ខណៈ​ពិសេស']],
                'search' => ['title' => 'ស្វែងរកអត្ថបទ', 'type' => 'ខ្សែអក្សរ', 'default' => null],
                'search_type' => ['title' => 'ប្រភេទស្វែងរក។ អាចជាមោឃៈ ឬប្រភេទ។', 'type' => 'enum', 'default' => null, 'values' => [null, 'ប្រភេទ']],
                'dir' => ['title' => 'ប្រភេទ ID ឬឈ្មោះ។ ទទួលបានផលិតផលនៅក្នុងប្រភេទនេះនៅពេលកំណត់។', 'type' => 'ណាមួយ។', 'default' => null],
                'products_only' => ['title' => 'ទទួលបានតែផលិតផល (មិនរាប់បញ្ចូលប្រភេទ)។', 'type' => 'ប៊ូលីន', 'default' => false],
                'categories_only' => ['title' => 'ទទួលបានតែប្រភេទ (ផលិតផលមិនរួមបញ្ចូល)។', 'type' => 'ប៊ូលីន', 'default' => false],
                'need_full_variants' => ['title' => 'ទទួលបានព័ត៌មានបំរែបំរួលពេញលេញ។', 'type' => 'ប៊ូលីន', 'default' => false],
                'optimized' => ['title' => '(តែនៅពេលទទួលបានផលិតផលជាអ្នកគ្រប់គ្រង) ទទួលបានបញ្ជីផលិតផលដោយគ្មានតម្លៃ អត្រា ឬស្ថិតិ។', 'type' => 'ប៊ូលីន', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'អារេ',
                    '_object' => 'ផលិតផល',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'អារេ',
                    '_object' => 'ប្រភេទ',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'វត្ថុ',
                    '_object' => 'ប្រភេទ',
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
            'description' => 'ទទួលបានព័ត៌មាន និងស្ថិតិផលិតផល។',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'វត្ថុ',
                    '_object' => 'ផលិតផល',
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
                    '_type' => 'អារេ',
                    '_object' => 'ទិន្នន័យផលិតផល',
                    'title' => 'ទិន្នន័យ 30 ថ្ងៃចុងក្រោយ',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'បញ្ជាទិញព័ត៌មាន។',
                    'type' => 'និម្មិត៖ រាប់ (int)|រូបវិទ្យា៖ [រាប់, ការចែកចាយ_រដ្ឋ] (អារេ)'
                ],

                'new_comments_count' => [
                    'title' => 'រាប់មតិយោបល់ថ្មី។',
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
            'description' => 'បន្ថែមផលិតផលថ្មីទៅហាង។',
            'url' => 'ហាង/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'កំណត់ប្រភេទផលិតផល/សេវាកម្ម។', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'តម្លៃនៃផលិតផល។', 'type' => 'អណ្តែត', 'require' => true],
                'commission' => ['title' => 'បន្ថែមកម្រៃជើងសារទៅតម្លៃ។', 'type' => 'អណ្តែត', 'default' => 0],
                'discount' => ['title' => 'ការបញ្ចុះតម្លៃផលិតផលលំនាំដើម។', 'type' => 'អណ្តែត', 'default' => 0],
                'dis_start' => ['title' => 'ពេលវេលាចាប់ផ្តើមបញ្ចុះតម្លៃនៅក្នុងតំបន់ពេលវេលា UTC (ទម្រង់៖ YYYY-MM-DD HH:mm:ss) ។', 'type' => 'កាលបរិច្ឆេទ', 'default' => null],
                'dis_end' => ['title' => 'ពេលវេលាបញ្ចប់ការបញ្ចុះតម្លៃនៅក្នុងតំបន់ពេលវេលា UTC (ទម្រង់៖ YYYY-MM-DD HH:mm:ss) ។', 'type' => 'កាលបរិច្ឆេទ', 'default' => null],
                'currency' => ['title' => 'រូបិយប័ណ្ណ', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ចំណងជើងផលិតផល។", 'type' => 'ខ្សែអក្សរ', 'require' => true],
                'title_en' => ['title' => 'ចំណងជើងជាភាសាអង់គ្លេសនៃផលិតផល (ឬចំណងជើងរង)', 'type' => 'ខ្សែអក្សរ', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'ខ្សែអក្សរ', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'ខ្សែអក្សរ', 'default' => null],
                'gtin' => ['title' => "លេខទំនិញពាណិជ្ជកម្មសកលរបស់ផលិតផល។", 'type' => 'ខ្សែអក្សរ', 'default' => null],
                'gpc' => ['title' => 'លេខកូដប្រភេទផលិតផល Google ។', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "ស្ថានភាពបច្ចុប្បន្នរបស់ធាតុនៅក្នុងហាងរបស់អ្នក។", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'សារបង្ហាញដល់អ្នកប្រើប្រាស់ប្រសិនបើមានវាលបញ្ចូល (ប្រើសម្រាប់ផលិតផលនិម្មិត)។', 'type' => 'ខ្សែអក្សរ', 'default' => null],
                'inputs' => ['title' => 'វាលបញ្ចូលស្រេចចិត្ត (ប្រើសម្រាប់ផលិតផលនិម្មិត)។', 'type' => 'ជេសុន', 'default' => null],
                'outputs' => ['title' => 'វាលលទ្ធផលស្រេចចិត្ត (ប្រើសម្រាប់ផលិតផលនិម្មិត)។', 'type' => 'ជេសុន', 'default' => false],
                'blog' => ['title' => 'ប្លក់ស្រេចចិត្ត ឬ url គេហទំព័រ។', 'type' => 'ខ្សែអក្សរ', 'default' => false],
                'status' => ['title' => 'ស្ថានភាពផលិតផល បើក/បិទ លំនាំដើមគឺបើក។', 'type' => 'enum', 'default' => 'បើក', 'values' => ['បើក', 'បិទ']],
                'category_id' => ['title' => 'លេខសម្គាល់ប្រភេទ', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ពេលវេលាដឹកនាំគិតជាម៉ោង..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'រចនាប័ទ្មនៃផលិតផល (Json) ។', 'type' => 'ជេសុន', 'default' => null],
                'brand' => ['title' => 'ម៉ាកផលិតផល..', 'type' => 'ខ្សែអក្សរ', 'default' => null],
                'warranty' => ['title' => 'ការពិពណ៌នាអំពីការធានា..', 'type' => 'ខ្សែអក្សរ', 'default' => null],
                'original' => ['title' => 'ផលិតផលនេះដើម?', 'type' => 'ប៊ូលីន', 'default' => false],
                'return_warranty' => ['title' => 'ការធានាត្រឡប់មកវិញតាមថ្ងៃ។', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'វត្ថុ',
                    '_object' => 'ផលិតផល',
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
            'description' => 'បន្ថែមផលិតផលថ្មីទៅហាង។',
            'url' => 'ហាង/{shop_id}/products/{product_id}/កែសម្រួល',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'កំណត់ប្រភេទផលិតផល/សេវាកម្ម។', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'តម្លៃនៃផលិតផល។', 'type' => 'អណ្តែត', 'require' => true],
                'commission' => ['title' => 'បន្ថែមកម្រៃជើងសារទៅតម្លៃ។', 'type' => 'អណ្តែត', 'default' => 0],
                'discount' => ['title' => 'ការបញ្ចុះតម្លៃផលិតផលលំនាំដើម។', 'type' => 'អណ្តែត', 'default' => 0],
                'dis_start' => ['title' => 'ពេលវេលាចាប់ផ្តើមបញ្ចុះតម្លៃនៅក្នុងតំបន់ពេលវេលា UTC (ទម្រង់៖ YYYY-MM-DD HH:mm:ss) ។', 'type' => 'កាលបរិច្ឆេទ', 'default' => null],
                'dis_end' => ['title' => 'ពេលវេលាបញ្ចប់ការបញ្ចុះតម្លៃនៅក្នុងតំបន់ពេលវេលា UTC (ទម្រង់៖ YYYY-MM-DD HH:mm:ss) ។', 'type' => 'កាលបរិច្ឆេទ', 'default' => null],
                'currency' => ['title' => 'រូបិយប័ណ្ណ', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ចំណងជើងផលិតផល។", 'type' => 'ខ្សែអក្សរ', 'require' => true],
                'title_en' => ['title' => 'ចំណងជើងជាភាសាអង់គ្លេសនៃផលិតផល (ឬចំណងជើងរង)', 'type' => 'ខ្សែអក្សរ', 'default' => null],
                'message' => ['title' => 'សារបង្ហាញដល់អ្នកប្រើប្រាស់ប្រសិនបើមានវាលបញ្ចូល (ប្រើសម្រាប់ផលិតផលនិម្មិត)។', 'type' => 'ខ្សែអក្សរ', 'default' => null],
                'inputs' => ['title' => 'វាលបញ្ចូលស្រេចចិត្ត (ប្រើសម្រាប់ផលិតផលនិម្មិត)។', 'type' => 'ជេសុន', 'default' => null],
                'outputs' => ['title' => 'វាលលទ្ធផលស្រេចចិត្ត (ប្រើសម្រាប់ផលិតផលនិម្មិត)។', 'type' => 'ជេសុន', 'default' => false],
                'blog' => ['title' => 'ប្លក់ស្រេចចិត្ត ឬ url គេហទំព័រ។', 'type' => 'ខ្សែអក្សរ', 'default' => false],
                'status' => ['title' => 'ស្ថានភាពផលិតផល បើក/បិទ លំនាំដើមគឺបើក។', 'type' => 'enum', 'default' => 'បើក', 'values' => ['បើក', 'បិទ']],
                'category_id' => ['title' => 'លេខសម្គាល់ប្រភេទ', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ពេលវេលាដឹកនាំគិតជាម៉ោង..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'រចនាប័ទ្មនៃផលិតផល (Json) ។', 'type' => 'ជេសុន', 'default' => null],
                'brand' => ['title' => 'ម៉ាកផលិតផល..', 'type' => 'ខ្សែអក្សរ', 'default' => null],
                'warranty' => ['title' => 'ការពិពណ៌នាអំពីការធានា..', 'type' => 'ខ្សែអក្សរ', 'default' => null],
                'original' => ['title' => 'ផលិតផលនេះដើម?', 'type' => 'ប៊ូលីន', 'default' => false],
                'return_warranty' => ['title' => 'ការធានាត្រឡប់មកវិញតាមថ្ងៃ។', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'វត្ថុ',
                    '_object' => 'ផលិតផល',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'ជោគជ័យបានធ្វើបច្ចុប្បន្នភាពស្ថានភាពផលិតផល។', 'type' => 'ប៊ូលីន'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'បន្ថែមផលិតផលថ្មីពីឃ្លាំងដោយ sku ទៅហាង។',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'ខ្សែអក្សរ', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'ប្រភេទកំណត់ដោយស្វ័យប្រវត្តិ', 'type' => 'ប៊ូលីន', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'បន្ថែមផលិតផលទៅប្រភេទនេះតាមប្រភេទលេខសម្គាល់នៅក្នុងហាង។', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'តម្លៃនៃផលិតផល។', 'type' => 'អណ្តែត', 'require' => true],
                'currency' => ['title' => 'រូបិយប័ណ្ណ', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'បរិមាណ', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'វត្ថុ',
                    '_object' => 'ផលិតផល',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'ជោគជ័យបានធ្វើបច្ចុប្បន្នភាពស្ថានភាពផលិតផល។', 'type' => 'ប៊ូលីន'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
