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
            'description' => 'दुकान की उत्पाद सूची प्राप्त करें.',
            'url' => 'दुकानें/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'केवल उपलब्ध उत्पाद दिखाएँ. सत्य या असत्य हो सकता है.', 'type' => 'बूलियन', 'default' => false],
                'with_parent' => ['title' => 'मूल श्रेणी पदानुक्रम प्राप्त करें. सत्य या असत्य हो सकता है.', 'type' => 'बूलियन', 'default' => false],
                'offset' => ['title' => 'उत्पाद सूची का ऑफसेट (पृष्ठांकन के लिए)।', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'सूची में उत्पादों की संख्या (पृष्ठांकन के लिए)।', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'सूची क्रम प्रकार', 'type' => 'enum', 'default' => null, 'values' => [null, 'संबंधित', 'सबसे ज्यादा देखा गया', 'सर्वाधिक_लोकप्रिय', 'नवीनतम', 'सर्वाधिक बिक्री', 'सबसे सस्ता', 'सबसे_महंगा', 'यादृच्छिक', 'संबंधित', 'पसंदीदा', 'यादृच्छिक']],
                'product_id' => ['title' => 'उत्पाद ID का उपयोग संबंधित उत्पादों (सॉर्ट = संबंधित) को वापस करने के लिए किया जाता है।', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'उत्पाद डेटा सेट. शून्य या विशिष्ट हो सकता है (शून्य: डिफ़ॉल्ट, विशिष्ट: विशिष्टताओं को पुनः प्राप्त करने के लिए अनुकूलित)।', 'type' => 'enum', 'default' => null, 'values' => [null, 'विशेष']],
                'search' => ['title' => 'पाठ खोजें', 'type' => 'स्ट्रिंग', 'default' => null],
                'search_type' => ['title' => 'खोज प्रकार. शून्य या श्रेणी हो सकता है.', 'type' => 'enum', 'default' => null, 'values' => [null, 'श्रेणी']],
                'dir' => ['title' => 'श्रेणी ID या नाम। सेट होने पर इस श्रेणी में उत्पाद प्राप्त होते हैं।', 'type' => 'कोई भी', 'default' => null],
                'products_only' => ['title' => 'केवल उत्पाद प्राप्त करें (श्रेणियाँ शामिल नहीं)।', 'type' => 'बूलियन', 'default' => false],
                'categories_only' => ['title' => 'केवल श्रेणियां प्राप्त करें (उत्पाद शामिल नहीं हैं)।', 'type' => 'बूलियन', 'default' => false],
                'need_full_variants' => ['title' => 'संपूर्ण प्रकार की जानकारी प्राप्त करें.', 'type' => 'बूलियन', 'default' => false],
                'optimized' => ['title' => '(केवल व्यवस्थापक के रूप में उत्पाद प्राप्त करते समय) मूल्य, दर या आंकड़ों के बिना उत्पाद सूची प्राप्त करें।', 'type' => 'बूलियन', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'सरणी',
                    '_object' => 'उत्पाद',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'सरणी',
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
            'description' => 'उत्पाद जानकारी और आँकड़े प्राप्त करें.',
            'url' => 'दुकानें/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'वस्तु',
                    '_object' => 'उत्पाद',
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
                    '_type' => 'सरणी',
                    '_object' => 'उत्पाद-डेटा',
                    'title' => 'पिछले 30 दिनों का डेटा',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'आदेश कुए जानकारी.',
                    'type' => 'आभासी: गिनती (int)|भौतिक: [गिनती, डिलीवरी_स्टेट] (सरणी)'
                ],

                'new_comments_count' => [
                    'title' => 'नई टिप्पणियाँ मायने रखती हैं.',
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
            'description' => 'दुकान में नया उत्पाद जोड़ें.',
            'url' => 'दुकानें/{shop_id}/उत्पाद/जोड़ें',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'उत्पाद/सेवा का प्रकार निर्धारित करें.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'उत्पाद की कीमत.', 'type' => 'तैरना', 'require' => true],
                'commission' => ['title' => 'कीमत में कमीशन जोड़ें.', 'type' => 'तैरना', 'default' => 0],
                'discount' => ['title' => 'डिफ़ॉल्ट उत्पाद मूल्य छूट.', 'type' => 'तैरना', 'default' => 0],
                'dis_start' => ['title' => 'यूटीसी समय क्षेत्र में छूट प्रारंभ समय (प्रारूप: YYYY-MM-DD HH:mm:ss)।', 'type' => 'दिनांक', 'default' => null],
                'dis_end' => ['title' => 'UTC समय क्षेत्र में छूट समाप्ति समय (प्रारूप: YYYY-MM-DD HH:mm:ss)।', 'type' => 'दिनांक', 'default' => null],
                'currency' => ['title' => 'मुद्रा,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "उत्पाद का शीर्षक.", 'type' => 'स्ट्रिंग', 'require' => true],
                'title_en' => ['title' => 'उत्पाद का अंग्रेजी शीर्षक (या उपशीर्षक)', 'type' => 'स्ट्रिंग', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'स्ट्रिंग', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'स्ट्रिंग', 'default' => null],
                'gtin' => ['title' => "उत्पाद का वैश्विक व्यापार आइटम नंबर।", 'type' => 'स्ट्रिंग', 'default' => null],
                'gpc' => ['title' => 'Google उत्पाद श्रेणी कोड.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "आपके स्टोर में आइटम की वर्तमान स्थिति.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'यदि इनपुट फ़ील्ड मौजूद हैं (वर्चुअल उत्पादों के लिए उपयोग किया जाता है) तो उपयोगकर्ता को संदेश दिखाया जाता है।', 'type' => 'स्ट्रिंग', 'default' => null],
                'inputs' => ['title' => 'वैकल्पिक इनपुट फ़ील्ड (आभासी उत्पादों के लिए प्रयुक्त)।', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'वैकल्पिक आउटपुट फ़ील्ड (आभासी उत्पादों के लिए प्रयुक्त)।', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'वैकल्पिक ब्लॉग या वेबसाइट यूआरएल.', 'type' => 'स्ट्रिंग', 'default' => false],
                'status' => ['title' => 'उत्पाद स्थिति खोलें/बंद करें, डिफ़ॉल्ट खुला है।', 'type' => 'enum', 'default' => 'खुला', 'values' => ['खुला', 'बंद करें']],
                'category_id' => ['title' => 'श्रेणी आईडी.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'लीड समय घंटों में..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'उत्पाद की शैली (जेएसओएन)।', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'उत्पाद का ब्रांड..', 'type' => 'स्ट्रिंग', 'default' => null],
                'warranty' => ['title' => 'वारंटी विवरण..', 'type' => 'स्ट्रिंग', 'default' => null],
                'original' => ['title' => 'यह उत्पाद मूल है?', 'type' => 'बूलियन', 'default' => false],
                'return_warranty' => ['title' => 'दिनों के अनुसार वापसी की वारंटी.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'वस्तु',
                    '_object' => 'उत्पाद',
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
            'description' => 'दुकान में नया उत्पाद जोड़ें.',
            'url' => 'दुकानें/{shop_id}/उत्पाद/{product_id}/संपादित करें',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'उत्पाद/सेवा का प्रकार निर्धारित करें.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'उत्पाद की कीमत.', 'type' => 'तैरना', 'require' => true],
                'commission' => ['title' => 'कीमत में कमीशन जोड़ें.', 'type' => 'तैरना', 'default' => 0],
                'discount' => ['title' => 'डिफ़ॉल्ट उत्पाद मूल्य छूट.', 'type' => 'तैरना', 'default' => 0],
                'dis_start' => ['title' => 'यूटीसी समय क्षेत्र में छूट प्रारंभ समय (प्रारूप: YYYY-MM-DD HH:mm:ss)।', 'type' => 'दिनांक', 'default' => null],
                'dis_end' => ['title' => 'UTC समय क्षेत्र में छूट समाप्ति समय (प्रारूप: YYYY-MM-DD HH:mm:ss)।', 'type' => 'दिनांक', 'default' => null],
                'currency' => ['title' => 'मुद्रा,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "उत्पाद का शीर्षक.", 'type' => 'स्ट्रिंग', 'require' => true],
                'title_en' => ['title' => 'उत्पाद का अंग्रेजी शीर्षक (या उपशीर्षक)', 'type' => 'स्ट्रिंग', 'default' => null],
                'message' => ['title' => 'यदि इनपुट फ़ील्ड मौजूद हैं (वर्चुअल उत्पादों के लिए उपयोग किया जाता है) तो उपयोगकर्ता को संदेश दिखाया जाता है।', 'type' => 'स्ट्रिंग', 'default' => null],
                'inputs' => ['title' => 'वैकल्पिक इनपुट फ़ील्ड (आभासी उत्पादों के लिए प्रयुक्त)।', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'वैकल्पिक आउटपुट फ़ील्ड (आभासी उत्पादों के लिए प्रयुक्त)।', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'वैकल्पिक ब्लॉग या वेबसाइट यूआरएल.', 'type' => 'स्ट्रिंग', 'default' => false],
                'status' => ['title' => 'उत्पाद स्थिति खोलें/बंद करें, डिफ़ॉल्ट खुला है।', 'type' => 'enum', 'default' => 'खुला', 'values' => ['खुला', 'बंद करें']],
                'category_id' => ['title' => 'श्रेणी आईडी.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'लीड समय घंटों में..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'उत्पाद की शैली (जेएसओएन)।', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'उत्पाद का ब्रांड..', 'type' => 'स्ट्रिंग', 'default' => null],
                'warranty' => ['title' => 'वारंटी विवरण..', 'type' => 'स्ट्रिंग', 'default' => null],
                'original' => ['title' => 'यह उत्पाद मूल है?', 'type' => 'बूलियन', 'default' => false],
                'return_warranty' => ['title' => 'दिनों के अनुसार वापसी की वारंटी.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'वस्तु',
                    '_object' => 'उत्पाद',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'सफलता अद्यतन उत्पाद स्थिति.', 'type' => 'बूलियन'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'स्कू द्वारा रिपॉजिटरी से दुकान में नया उत्पाद जोड़ें।',
            'url' => 'दुकानें/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'स्ट्रिंग', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'ऑटो सेट श्रेणी', 'type' => 'बूलियन', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'दुकान में श्रेणी आईडी के अनुसार उत्पाद को इस श्रेणी में जोड़ें।', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'उत्पाद की कीमत.', 'type' => 'तैरना', 'require' => true],
                'currency' => ['title' => 'मुद्रा,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'मात्रा', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'वस्तु',
                    '_object' => 'उत्पाद',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'सफलता अद्यतन उत्पाद स्थिति.', 'type' => 'बूलियन'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
