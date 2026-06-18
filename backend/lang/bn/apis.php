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
            'description' => 'দোকানের পণ্য তালিকা পান.',
            'url' => 'দোকান/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'শুধুমাত্র উপলব্ধ পণ্য দেখান. সত্য বা মিথ্যা হতে পারে।', 'type' => 'বুলিয়ান', 'default' => false],
                'with_parent' => ['title' => 'অভিভাবক বিভাগের শ্রেণিবিন্যাস পান। সত্য বা মিথ্যা হতে পারে।', 'type' => 'বুলিয়ান', 'default' => false],
                'offset' => ['title' => 'পণ্য তালিকার অফসেট (পৃষ্ঠা সংখ্যার জন্য)।', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'তালিকায় পণ্যের সংখ্যা (পৃষ্ঠা সংখ্যার জন্য)।', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'তালিকা বাছাই প্রকার', 'type' => 'enum', 'default' => null, 'values' => [null, 'সম্পর্কিত', 'সর্বাধিক_দর্শিত', 'সর্বাধিক_জনপ্রিয়', 'নতুন', 'বেস্টসেলিং', 'সস্তা', 'সবচেয়ে_ব্যয়বহুল', 'এলোমেলো', 'সম্পর্কিত', 'প্রিয়', 'এলোমেলো']],
                'product_id' => ['title' => 'পণ্য ID সম্পর্কিত পণ্য ফেরত দিতে ব্যবহৃত হয় (বাছাই = সম্পর্কিত)।', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'পণ্য ডেটা সেট। নাল বা স্পেক হতে পারে (নাল: ডিফল্ট, স্পেক: স্পেসিফিকেশন পুনরুদ্ধার করার জন্য অপ্টিমাইজ করা)।', 'type' => 'enum', 'default' => null, 'values' => [null, 'বিশেষ']],
                'search' => ['title' => 'পাঠ্য অনুসন্ধান করুন', 'type' => 'স্ট্রিং', 'default' => null],
                'search_type' => ['title' => 'অনুসন্ধানের ধরন। নাল বা বিভাগ হতে পারে.', 'type' => 'enum', 'default' => null, 'values' => [null, 'বিভাগ']],
                'dir' => ['title' => 'বিভাগ ID বা নাম। সেট করা হলে এই বিষয়শ্রেণীতে পণ্য পায়.', 'type' => 'যেকোনো', 'default' => null],
                'products_only' => ['title' => 'শুধুমাত্র পণ্য পান (বিভাগ অন্তর্ভুক্ত নয়)।', 'type' => 'বুলিয়ান', 'default' => false],
                'categories_only' => ['title' => 'শুধুমাত্র বিভাগ পান (পণ্য অন্তর্ভুক্ত নয়)।', 'type' => 'বুলিয়ান', 'default' => false],
                'need_full_variants' => ['title' => 'সম্পূর্ণ বৈকল্পিক তথ্য পান.', 'type' => 'বুলিয়ান', 'default' => false],
                'optimized' => ['title' => '(শুধুমাত্র অ্যাডমিন হিসাবে পণ্য পাওয়ার সময়) মূল্য, হার বা পরিসংখ্যান ছাড়াই পণ্য তালিকা পান।', 'type' => 'বুলিয়ান', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'অ্যারে',
                    '_object' => 'পণ্য',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'অ্যারে',
                    '_object' => 'শ্রেণী',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'বস্তু',
                    '_object' => 'শ্রেণী',
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
            'description' => 'পণ্য তথ্য এবং পরিসংখ্যান পান.',
            'url' => 'দোকান/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'বস্তু',
                    '_object' => 'পণ্য',
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
                    '_type' => 'অ্যারে',
                    '_object' => 'পণ্য-ডেটা',
                    'title' => 'গত 30 দিনের ডেটা',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'আদেশ que তথ্য.',
                    'type' => 'ভার্চুয়াল: গণনা (int)|শারীরিক: [গণনা, ডেলিভারি_স্টেট] (অ্যারে)'
                ],

                'new_comments_count' => [
                    'title' => 'নতুন মন্তব্য গণনা.',
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
            'description' => 'দোকানে নতুন পণ্য যোগ করুন।',
            'url' => 'দোকান/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'পণ্য / পরিষেবার ধরন সেট করুন।', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'পণ্যের দাম।', 'type' => 'ভাসা', 'require' => true],
                'commission' => ['title' => 'দামে কমিশন যোগ করুন।', 'type' => 'ভাসা', 'default' => 0],
                'discount' => ['title' => 'ডিফল্ট পণ্য মূল্য ডিসকাউন্ট.', 'type' => 'ভাসা', 'default' => 0],
                'dis_start' => ['title' => 'UTC টাইম জোনে ছাড় শুরুর সময় (ফর্ম্যাট: YYYY-MM-DD HH:mm:ss)।', 'type' => 'তারিখ', 'default' => null],
                'dis_end' => ['title' => 'UTC টাইম জোনে ছাড়ের শেষ সময় (ফর্ম্যাট: YYYY-MM-DD HH:mm:ss)।', 'type' => 'তারিখ', 'default' => null],
                'currency' => ['title' => 'মুদ্রা,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "পণ্যের শিরোনাম।", 'type' => 'স্ট্রিং', 'require' => true],
                'title_en' => ['title' => 'পণ্যের ইংরেজি শিরোনাম (বা উপশিরোনাম)', 'type' => 'স্ট্রিং', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'স্ট্রিং', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'স্ট্রিং', 'default' => null],
                'gtin' => ['title' => "পণ্যের গ্লোবাল ট্রেড আইটেম নম্বর।", 'type' => 'স্ট্রিং', 'default' => null],
                'gpc' => ['title' => 'Google পণ্য বিভাগের কোড।', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "আপনার দোকানে আইটেমের বর্তমান অবস্থা।", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'ইনপুট ক্ষেত্র বিদ্যমান থাকলে ব্যবহারকারীকে বার্তা দেখান (ভার্চুয়াল পণ্যগুলির জন্য ব্যবহৃত)।', 'type' => 'স্ট্রিং', 'default' => null],
                'inputs' => ['title' => 'ঐচ্ছিক ইনপুট ক্ষেত্র (ভার্চুয়াল পণ্যের জন্য ব্যবহৃত)।', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ঐচ্ছিক আউটপুট ক্ষেত্র (ভার্চুয়াল পণ্যের জন্য ব্যবহৃত)।', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ঐচ্ছিক ব্লগ বা ওয়েবসাইট url.', 'type' => 'স্ট্রিং', 'default' => false],
                'status' => ['title' => 'পণ্য স্থিতি খোলা / বন্ধ, ডিফল্ট খোলা।', 'type' => 'enum', 'default' => 'খোলা', 'values' => ['খোলা', 'বন্ধ']],
                'category_id' => ['title' => 'বিভাগ আইডি।', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ঘণ্টায় লিড টাইম..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'পণ্যের শৈলী (Json)।', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'পণ্যের ব্র্যান্ড..', 'type' => 'স্ট্রিং', 'default' => null],
                'warranty' => ['title' => 'ওয়ারেন্টি বর্ণনা..', 'type' => 'স্ট্রিং', 'default' => null],
                'original' => ['title' => 'এই পণ্যটি আসল?', 'type' => 'বুলিয়ান', 'default' => false],
                'return_warranty' => ['title' => 'দিন দ্বারা ওয়ারেন্টি ফেরত.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'বস্তু',
                    '_object' => 'পণ্য',
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
            'description' => 'দোকানে নতুন পণ্য যোগ করুন।',
            'url' => 'দোকান/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'পণ্য / পরিষেবার ধরন সেট করুন।', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'পণ্যের দাম।', 'type' => 'ভাসা', 'require' => true],
                'commission' => ['title' => 'দামে কমিশন যোগ করুন।', 'type' => 'ভাসা', 'default' => 0],
                'discount' => ['title' => 'ডিফল্ট পণ্য মূল্য ডিসকাউন্ট.', 'type' => 'ভাসা', 'default' => 0],
                'dis_start' => ['title' => 'UTC টাইম জোনে ছাড় শুরুর সময় (ফর্ম্যাট: YYYY-MM-DD HH:mm:ss)।', 'type' => 'তারিখ', 'default' => null],
                'dis_end' => ['title' => 'UTC টাইম জোনে ছাড়ের শেষ সময় (ফর্ম্যাট: YYYY-MM-DD HH:mm:ss)।', 'type' => 'তারিখ', 'default' => null],
                'currency' => ['title' => 'মুদ্রা,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "পণ্যের শিরোনাম।", 'type' => 'স্ট্রিং', 'require' => true],
                'title_en' => ['title' => 'পণ্যের ইংরেজি শিরোনাম (বা উপশিরোনাম)', 'type' => 'স্ট্রিং', 'default' => null],
                'message' => ['title' => 'ইনপুট ক্ষেত্র বিদ্যমান থাকলে ব্যবহারকারীকে বার্তা দেখান (ভার্চুয়াল পণ্যগুলির জন্য ব্যবহৃত)।', 'type' => 'স্ট্রিং', 'default' => null],
                'inputs' => ['title' => 'ঐচ্ছিক ইনপুট ক্ষেত্র (ভার্চুয়াল পণ্যের জন্য ব্যবহৃত)।', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ঐচ্ছিক আউটপুট ক্ষেত্র (ভার্চুয়াল পণ্যের জন্য ব্যবহৃত)।', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ঐচ্ছিক ব্লগ বা ওয়েবসাইট url.', 'type' => 'স্ট্রিং', 'default' => false],
                'status' => ['title' => 'পণ্য স্থিতি খোলা / বন্ধ, ডিফল্ট খোলা।', 'type' => 'enum', 'default' => 'খোলা', 'values' => ['খোলা', 'বন্ধ']],
                'category_id' => ['title' => 'বিভাগ আইডি।', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ঘণ্টায় লিড টাইম..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'পণ্যের শৈলী (Json)।', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'পণ্যের ব্র্যান্ড..', 'type' => 'স্ট্রিং', 'default' => null],
                'warranty' => ['title' => 'ওয়ারেন্টি বর্ণনা..', 'type' => 'স্ট্রিং', 'default' => null],
                'original' => ['title' => 'এই পণ্যটি আসল?', 'type' => 'বুলিয়ান', 'default' => false],
                'return_warranty' => ['title' => 'দিন দ্বারা ওয়ারেন্টি ফেরত.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'বস্তু',
                    '_object' => 'পণ্য',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'সফল পণ্যের অবস্থা আপডেট করা হয়েছে।', 'type' => 'বুলিয়ান'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'দোকানে sku দ্বারা সংগ্রহস্থল থেকে নতুন পণ্য যোগ করুন।',
            'url' => 'দোকান/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'স্ট্রিং', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'স্বয়ংক্রিয় সেট বিভাগ', 'type' => 'বুলিয়ান', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'দোকানে বিভাগ আইডি দ্বারা এই বিভাগে পণ্য যোগ করুন.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'পণ্যের দাম।', 'type' => 'ভাসা', 'require' => true],
                'currency' => ['title' => 'মুদ্রা,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'পরিমাণ', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'বস্তু',
                    '_object' => 'পণ্য',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'সফল পণ্যের অবস্থা আপডেট করা হয়েছে।', 'type' => 'বুলিয়ান'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
