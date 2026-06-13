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
            'description' => 'पसलको उत्पादन सूची प्राप्त गर्नुहोस्।',
            'url' => 'पसल/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'उपलब्ध उत्पादनहरू मात्र देखाउनुहोस्। साँचो वा गलत हुन सक्छ।', 'type' => 'बुलियन', 'default' => false],
                'with_parent' => ['title' => 'अभिभावक वर्ग पदानुक्रम प्राप्त गर्नुहोस्। साँचो वा गलत हुन सक्छ।', 'type' => 'बुलियन', 'default' => false],
                'offset' => ['title' => 'उत्पादन सूचीको अफसेट (पृष्ठांकनको लागि)।', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'सूचीमा उत्पादनहरूको संख्या (पृष्ठांकनको लागि)।', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'सूची क्रमबद्ध प्रकार', 'type' => 'enum', 'default' => null, 'values' => [null, 'सम्बन्धित', 'सबैभन्दा धेरै भ्रमण गरिएको', 'most_popular', 'सबैभन्दा नयाँ', 'बेस्ट सेलिंग', 'सस्तो', 'सबैभन्दा महँगो', 'अनियमित', 'सम्बन्धित', 'मनपर्ने', 'अनियमित']],
                'product_id' => ['title' => 'उत्पादन ID सम्बन्धित उत्पादनहरू फिर्ता गर्न प्रयोग गरिन्छ (क्रमबद्ध = सम्बन्धित)।', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'उत्पादन डेटा सेट। नल वा स्पेक हुन सक्छ (नल: पूर्वनिर्धारित, विशिष्ट: विशिष्टताहरू पुन: प्राप्त गर्नका लागि अनुकूलित)।', 'type' => 'enum', 'default' => null, 'values' => [null, 'विशिष्ट']],
                'search' => ['title' => 'पाठ खोज्नुहोस्', 'type' => 'तार', 'default' => null],
                'search_type' => ['title' => 'खोज प्रकार। शून्य वा श्रेणी हुन सक्छ।', 'type' => 'enum', 'default' => null, 'values' => [null, 'श्रेणी']],
                'dir' => ['title' => 'श्रेणी ID वा नाम। सेट गर्दा यस श्रेणीमा उत्पादनहरू प्राप्त गर्दछ।', 'type' => 'कुनै पनि', 'default' => null],
                'products_only' => ['title' => 'उत्पादनहरू मात्र पाउनुहोस् (कोटिहरू समावेश गरिएको छैन)।', 'type' => 'बुलियन', 'default' => false],
                'categories_only' => ['title' => 'कोटिहरू मात्र पाउनुहोस् (उत्पादनहरू समावेश छैनन्)।', 'type' => 'बुलियन', 'default' => false],
                'need_full_variants' => ['title' => 'पूर्ण संस्करण जानकारी प्राप्त गर्नुहोस्।', 'type' => 'बुलियन', 'default' => false],
                'optimized' => ['title' => '(प्रशासकको रूपमा उत्पादनहरू प्राप्त गर्दा मात्र) मूल्य, दर, वा तथ्याङ्कहरू बिना उत्पादन सूची प्राप्त गर्नुहोस्।', 'type' => 'बुलियन', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'array',
                    '_object' => 'उत्पादन',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'array',
                    '_object' => 'श्रेणी',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'वस्तु',
                    '_object' => 'श्रेणी',
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
            'description' => 'उत्पादन जानकारी र तथ्याङ्क प्राप्त गर्नुहोस्।',
            'url' => 'पसल/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'वस्तु',
                    '_object' => 'उत्पादन',
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
                    '_type' => 'array',
                    '_object' => 'उत्पादन-डेटा',
                    'title' => 'पछिल्लो 30 दिन डाटा',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'अर्डर र जानकारी।',
                    'type' => 'भर्चुअल: गणना (int)|भौतिक: [गणना, डेलिभरी_स्टेट] (एरे)'
                ],

                'new_comments_count' => [
                    'title' => 'नयाँ टिप्पणीहरू गणना।',
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
            'description' => 'पसलमा नयाँ उत्पादन थप्नुहोस्।',
            'url' => 'पसल/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'उत्पादन / सेवा को प्रकार सेट गर्नुहोस्।', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'उत्पादनको मूल्य।', 'type' => 'फ्लोट', 'require' => true],
                'commission' => ['title' => 'मूल्यमा कमीशन थप्नुहोस्।', 'type' => 'फ्लोट', 'default' => 0],
                'discount' => ['title' => 'पूर्वनिर्धारित उत्पादन मूल्य छुट।', 'type' => 'फ्लोट', 'default' => 0],
                'dis_start' => ['title' => 'UTC समय क्षेत्रमा छुट सुरु हुने समय (ढाँचा: YYYY-MM-DD HH:mm:ss)।', 'type' => 'मिति', 'default' => null],
                'dis_end' => ['title' => 'UTC समय क्षेत्रमा छुटको अन्त्य समय (ढाँचा: YYYY-MM-DD HH:mm:ss)।', 'type' => 'मिति', 'default' => null],
                'currency' => ['title' => 'मुद्रा,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "उत्पादनको शीर्षक।", 'type' => 'तार', 'require' => true],
                'title_en' => ['title' => 'उत्पादनको अंग्रेजी शीर्षक (वा उपशीर्षक)', 'type' => 'तार', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'तार', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'तार', 'default' => null],
                'gtin' => ['title' => "उत्पादनको विश्वव्यापी व्यापार वस्तु नम्बर।", 'type' => 'तार', 'default' => null],
                'gpc' => ['title' => 'गुगल उत्पादन कोटी कोड।', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "तपाईंको स्टोरमा वस्तुको हालको अवस्था।", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'यदि इनपुट क्षेत्रहरू अवस्थित छन् भने प्रयोगकर्तालाई सन्देश देखाउनुहोस् (भर्चुअल उत्पादनहरूको लागि प्रयोग गरिएको)।', 'type' => 'तार', 'default' => null],
                'inputs' => ['title' => 'वैकल्पिक इनपुट क्षेत्रहरू (भर्चुअल उत्पादनहरूको लागि प्रयोग गरिएको)।', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'वैकल्पिक आउटपुट क्षेत्रहरू (भर्चुअल उत्पादनहरूको लागि प्रयोग गरिएको)।', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'वैकल्पिक ब्लग वा वेबसाइट url।', 'type' => 'तार', 'default' => false],
                'status' => ['title' => 'उत्पादन स्थिति खुला / बन्द, पूर्वनिर्धारित खुला छ।', 'type' => 'enum', 'default' => 'खोल्नुहोस्', 'values' => ['खोल्नुहोस्', 'बन्द गर्नुहोस्']],
                'category_id' => ['title' => 'कोटी आईडी।', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'घण्टामा नेतृत्व समय..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'उत्पादनको शैली (Json)।', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'उत्पादन को ब्रान्ड..', 'type' => 'तार', 'default' => null],
                'warranty' => ['title' => 'वारेन्टी विवरण..', 'type' => 'तार', 'default' => null],
                'original' => ['title' => 'यो उत्पादन मूल हो?', 'type' => 'बुलियन', 'default' => false],
                'return_warranty' => ['title' => 'दिन द्वारा वारेन्टी फिर्ता।', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'वस्तु',
                    '_object' => 'उत्पादन',
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
            'description' => 'पसलमा नयाँ उत्पादन थप्नुहोस्।',
            'url' => 'पसल/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'उत्पादन / सेवा को प्रकार सेट गर्नुहोस्।', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'उत्पादनको मूल्य।', 'type' => 'फ्लोट', 'require' => true],
                'commission' => ['title' => 'मूल्यमा कमीशन थप्नुहोस्।', 'type' => 'फ्लोट', 'default' => 0],
                'discount' => ['title' => 'पूर्वनिर्धारित उत्पादन मूल्य छुट।', 'type' => 'फ्लोट', 'default' => 0],
                'dis_start' => ['title' => 'UTC समय क्षेत्रमा छुट सुरु हुने समय (ढाँचा: YYYY-MM-DD HH:mm:ss)।', 'type' => 'मिति', 'default' => null],
                'dis_end' => ['title' => 'UTC समय क्षेत्रमा छुटको अन्त्य समय (ढाँचा: YYYY-MM-DD HH:mm:ss)।', 'type' => 'मिति', 'default' => null],
                'currency' => ['title' => 'मुद्रा,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "उत्पादनको शीर्षक।", 'type' => 'तार', 'require' => true],
                'title_en' => ['title' => 'उत्पादनको अंग्रेजी शीर्षक (वा उपशीर्षक)', 'type' => 'तार', 'default' => null],
                'message' => ['title' => 'यदि इनपुट क्षेत्रहरू अवस्थित छन् भने प्रयोगकर्तालाई सन्देश देखाउनुहोस् (भर्चुअल उत्पादनहरूको लागि प्रयोग गरिएको)।', 'type' => 'तार', 'default' => null],
                'inputs' => ['title' => 'वैकल्पिक इनपुट क्षेत्रहरू (भर्चुअल उत्पादनहरूको लागि प्रयोग गरिएको)।', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'वैकल्पिक आउटपुट क्षेत्रहरू (भर्चुअल उत्पादनहरूको लागि प्रयोग गरिएको)।', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'वैकल्पिक ब्लग वा वेबसाइट url।', 'type' => 'तार', 'default' => false],
                'status' => ['title' => 'उत्पादन स्थिति खुला / बन्द, पूर्वनिर्धारित खुला छ।', 'type' => 'enum', 'default' => 'खोल्नुहोस्', 'values' => ['खोल्नुहोस्', 'बन्द गर्नुहोस्']],
                'category_id' => ['title' => 'कोटी आईडी।', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'घण्टामा नेतृत्व समय..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'उत्पादनको शैली (Json)।', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'उत्पादन को ब्रान्ड..', 'type' => 'तार', 'default' => null],
                'warranty' => ['title' => 'वारेन्टी विवरण..', 'type' => 'तार', 'default' => null],
                'original' => ['title' => 'यो उत्पादन मूल हो?', 'type' => 'बुलियन', 'default' => false],
                'return_warranty' => ['title' => 'दिन द्वारा वारेन्टी फिर्ता।', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'वस्तु',
                    '_object' => 'उत्पादन',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'सफल उत्पादन स्थिति अद्यावधिक गरियो।', 'type' => 'बुलियन'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'पसलमा sku द्वारा भण्डारबाट नयाँ उत्पादन थप्नुहोस्।',
            'url' => 'पसल/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'तार', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'स्वत: सेट वर्ग', 'type' => 'बुलियन', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'पसल मा कोटि आईडी द्वारा यो श्रेणी मा उत्पादन थप्नुहोस्।', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'उत्पादनको मूल्य।', 'type' => 'फ्लोट', 'require' => true],
                'currency' => ['title' => 'मुद्रा,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'मात्रा', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'वस्तु',
                    '_object' => 'उत्पादन',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'सफल उत्पादन स्थिति अद्यावधिक गरियो।', 'type' => 'बुलियन'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
