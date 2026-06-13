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
            'description' => 'दुकानाच्या उत्पादनांची यादी मिळवा.',
            'url' => 'दुकाने/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'फक्त उपलब्ध उत्पादने दाखवा. खरे किंवा खोटे असू शकते.', 'type' => 'बुलियन', 'default' => false],
                'with_parent' => ['title' => 'मूळ श्रेणी पदानुक्रम मिळवा. खरे किंवा खोटे असू शकते.', 'type' => 'बुलियन', 'default' => false],
                'offset' => ['title' => 'उत्पादन सूचीचे ऑफसेट (पृष्ठांकनासाठी).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'सूचीमधील उत्पादनांची संख्या (पृष्ठांकनासाठी).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'यादी क्रमवारी प्रकार', 'type' => 'enum', 'default' => null, 'values' => [null, 'संबंधित', 'सर्वाधिक_भेट दिलेले', 'सर्वाधिक_लोकप्रिय', 'सर्वात नवीन', 'बेस्ट सेलिंग', 'सर्वात स्वस्त', 'सर्वात महाग', 'यादृच्छिक', 'संबंधित', 'आवडते', 'यादृच्छिक']],
                'product_id' => ['title' => 'संबंधित उत्पादने परत करण्यासाठी वापरलेले उत्पादन ID (क्रमवारी = संबंधित).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'उत्पादन डेटा सेट. नल किंवा स्पेक असू शकते (नल: डीफॉल्ट, स्पेक: वैशिष्ट्य पुनर्प्राप्त करण्यासाठी ऑप्टिमाइझ केलेले).', 'type' => 'enum', 'default' => null, 'values' => [null, 'तपशील']],
                'search' => ['title' => 'मजकूर शोधा', 'type' => 'स्ट्रिंग', 'default' => null],
                'search_type' => ['title' => 'शोध प्रकार. शून्य किंवा श्रेणी असू शकते.', 'type' => 'enum', 'default' => null, 'values' => [null, 'श्रेणी']],
                'dir' => ['title' => 'श्रेणी ID किंवा नाव. सेट केल्यावर या श्रेणीतील उत्पादने मिळतात.', 'type' => 'कोणतेही', 'default' => null],
                'products_only' => ['title' => 'फक्त उत्पादने मिळवा (श्रेण्या समाविष्ट नाहीत).', 'type' => 'बुलियन', 'default' => false],
                'categories_only' => ['title' => 'फक्त श्रेणी मिळवा (उत्पादने समाविष्ट नाहीत).', 'type' => 'बुलियन', 'default' => false],
                'need_full_variants' => ['title' => 'संपूर्ण प्रकारची माहिती मिळवा.', 'type' => 'बुलियन', 'default' => false],
                'optimized' => ['title' => '(केवळ प्रशासक म्हणून उत्पादने मिळवताना) किंमत, दर किंवा आकडेवारीशिवाय उत्पादन सूची मिळवा.', 'type' => 'बुलियन', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'ॲरे',
                    '_object' => 'उत्पादन',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'ॲरे',
                    '_object' => 'श्रेणी',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'वस्तू',
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
            'description' => 'उत्पादन माहिती आणि आकडेवारी मिळवा.',
            'url' => 'दुकाने/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'वस्तू',
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
                    '_type' => 'ॲरे',
                    '_object' => 'उत्पादन-डेटा',
                    'title' => 'मागील ३० दिवसांचा डेटा',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'ऑर्डर que माहिती.',
                    'type' => 'आभासी: संख्या (इंट)|भौतिक: [गणना, वितरण_राज्य] (ॲरे)'
                ],

                'new_comments_count' => [
                    'title' => 'नवीन टिप्पण्या मोजल्या जातात.',
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
            'description' => 'दुकानात नवीन उत्पादन जोडा.',
            'url' => 'दुकाने/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'उत्पादन/सेवेचा प्रकार सेट करा.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'उत्पादनाची किंमत.', 'type' => 'फ्लोट', 'require' => true],
                'commission' => ['title' => 'किंमतीला कमिशन जोडा.', 'type' => 'फ्लोट', 'default' => 0],
                'discount' => ['title' => 'डीफॉल्ट उत्पादन किंमत सवलत.', 'type' => 'फ्लोट', 'default' => 0],
                'dis_start' => ['title' => 'UTC टाइम झोनमध्ये सवलत सुरू होण्याची वेळ (स्वरूप: YYYY-MM-DD HH:mm:ss).', 'type' => 'तारीख', 'default' => null],
                'dis_end' => ['title' => 'UTC टाइम झोनमध्ये सवलत समाप्ती वेळ (स्वरूप: YYYY-MM-DD HH:mm:ss).', 'type' => 'तारीख', 'default' => null],
                'currency' => ['title' => 'चलन,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "उत्पादनाचे शीर्षक.", 'type' => 'स्ट्रिंग', 'require' => true],
                'title_en' => ['title' => 'उत्पादनाचे इंग्रजी शीर्षक (किंवा उपशीर्षक)', 'type' => 'स्ट्रिंग', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'स्ट्रिंग', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'स्ट्रिंग', 'default' => null],
                'gtin' => ['title' => "उत्पादनाचा जागतिक व्यापार आयटम क्रमांक.", 'type' => 'स्ट्रिंग', 'default' => null],
                'gpc' => ['title' => 'Google उत्पादन श्रेणी कोड.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "तुमच्या स्टोअरमधील आयटमची सध्याची स्थिती.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'इनपुट फील्ड अस्तित्वात असल्यास वापरकर्त्यास संदेश दाखवा (व्हर्च्युअल उत्पादनांसाठी वापरला).', 'type' => 'स्ट्रिंग', 'default' => null],
                'inputs' => ['title' => 'पर्यायी इनपुट फील्ड (आभासी उत्पादनांसाठी वापरलेले).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'पर्यायी आउटपुट फील्ड (आभासी उत्पादनांसाठी वापरलेले).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'पर्यायी ब्लॉग किंवा वेबसाइट url.', 'type' => 'स्ट्रिंग', 'default' => false],
                'status' => ['title' => 'उत्पादन स्थिती उघडा / बंद करा, डीफॉल्ट उघडा आहे.', 'type' => 'enum', 'default' => 'उघडा', 'values' => ['उघडा', 'बंद करा']],
                'category_id' => ['title' => 'श्रेणी आयडी.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'लीड टाइम तासात..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'उत्पादनाची शैली (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'उत्पादनाचा ब्रँड..', 'type' => 'स्ट्रिंग', 'default' => null],
                'warranty' => ['title' => 'हमी वर्णन..', 'type' => 'स्ट्रिंग', 'default' => null],
                'original' => ['title' => 'हे उत्पादन मूळ आहे?', 'type' => 'बुलियन', 'default' => false],
                'return_warranty' => ['title' => 'दिवसांनुसार वॉरंटी परत करा.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'वस्तू',
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
            'description' => 'दुकानात नवीन उत्पादन जोडा.',
            'url' => 'दुकाने/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'उत्पादन/सेवेचा प्रकार सेट करा.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'उत्पादनाची किंमत.', 'type' => 'फ्लोट', 'require' => true],
                'commission' => ['title' => 'किंमतीला कमिशन जोडा.', 'type' => 'फ्लोट', 'default' => 0],
                'discount' => ['title' => 'डीफॉल्ट उत्पादन किंमत सवलत.', 'type' => 'फ्लोट', 'default' => 0],
                'dis_start' => ['title' => 'UTC टाइम झोनमध्ये सवलत सुरू होण्याची वेळ (स्वरूप: YYYY-MM-DD HH:mm:ss).', 'type' => 'तारीख', 'default' => null],
                'dis_end' => ['title' => 'UTC टाइम झोनमध्ये सवलत समाप्ती वेळ (स्वरूप: YYYY-MM-DD HH:mm:ss).', 'type' => 'तारीख', 'default' => null],
                'currency' => ['title' => 'चलन,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "उत्पादनाचे शीर्षक.", 'type' => 'स्ट्रिंग', 'require' => true],
                'title_en' => ['title' => 'उत्पादनाचे इंग्रजी शीर्षक (किंवा उपशीर्षक)', 'type' => 'स्ट्रिंग', 'default' => null],
                'message' => ['title' => 'इनपुट फील्ड अस्तित्वात असल्यास वापरकर्त्यास संदेश दाखवा (व्हर्च्युअल उत्पादनांसाठी वापरला).', 'type' => 'स्ट्रिंग', 'default' => null],
                'inputs' => ['title' => 'पर्यायी इनपुट फील्ड (आभासी उत्पादनांसाठी वापरलेले).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'पर्यायी आउटपुट फील्ड (आभासी उत्पादनांसाठी वापरलेले).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'पर्यायी ब्लॉग किंवा वेबसाइट url.', 'type' => 'स्ट्रिंग', 'default' => false],
                'status' => ['title' => 'उत्पादन स्थिती उघडा / बंद करा, डीफॉल्ट उघडा आहे.', 'type' => 'enum', 'default' => 'उघडा', 'values' => ['उघडा', 'बंद करा']],
                'category_id' => ['title' => 'श्रेणी आयडी.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'लीड टाइम तासात..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'उत्पादनाची शैली (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'उत्पादनाचा ब्रँड..', 'type' => 'स्ट्रिंग', 'default' => null],
                'warranty' => ['title' => 'हमी वर्णन..', 'type' => 'स्ट्रिंग', 'default' => null],
                'original' => ['title' => 'हे उत्पादन मूळ आहे?', 'type' => 'बुलियन', 'default' => false],
                'return_warranty' => ['title' => 'दिवसांनुसार वॉरंटी परत करा.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'वस्तू',
                    '_object' => 'उत्पादन',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'यशस्वी उत्पादन स्थिती अद्यतनित केली.', 'type' => 'बुलियन'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'रेपॉजिटरीमधून sku द्वारे दुकानात नवीन उत्पादन जोडा.',
            'url' => 'दुकाने/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'स्ट्रिंग', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'ऑटो सेट श्रेणी', 'type' => 'बुलियन', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'दुकानातील श्रेणी आयडीनुसार या श्रेणीमध्ये उत्पादन जोडा.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'उत्पादनाची किंमत.', 'type' => 'फ्लोट', 'require' => true],
                'currency' => ['title' => 'चलन,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'प्रमाण', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'वस्तू',
                    '_object' => 'उत्पादन',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'यशस्वी उत्पादन स्थिती अद्यतनित केली.', 'type' => 'बुलियन'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
