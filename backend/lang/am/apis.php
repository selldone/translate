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
            'description' => 'የሱቁን ምርት ዝርዝር ያግኙ።',
            'url' => 'ሱቆች/{shop_id}/ምርቶች/ሁሉም-አስተዳዳሪ',
            'method' => 'አግኝ',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'የሚገኙ ምርቶችን ብቻ አሳይ። እውነት ወይም ሐሰት ሊሆን ይችላል።', 'type' => 'ቡሊያን', 'default' => false],
                'with_parent' => ['title' => 'የወላጅ ምድብ ተዋረድ ያግኙ። እውነት ወይም ሐሰት ሊሆን ይችላል።', 'type' => 'ቡሊያን', 'default' => false],
                'offset' => ['title' => 'የምርት ዝርዝሩን ማካካሻ (ለገጽታ).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'በዝርዝሩ ውስጥ ያሉ ምርቶች ብዛት (ለገጽታ).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'የዝርዝር ዓይነት ዓይነት', 'type' => 'enum', 'default' => null, 'values' => [null, 'ተዛማጅ', 'በብዛት_ጎበኘ', 'በጣም_ታዋቂ', 'በጣም አዲስ', 'ምርጥ ሽያጭ', 'በጣም ርካሹ', 'በጣም_ውድ', 'በዘፈቀደ', 'ተዛማጅ', 'ተወዳጅ', 'በዘፈቀደ']],
                'product_id' => ['title' => 'ምርት ID ተዛማጅ ምርቶችን ለመመለስ ጥቅም ላይ ይውላል (መደርደር = ተዛማጅ).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'የምርት ውሂብ ስብስብ. ባዶ ወይም ዝርዝር ሊሆን ይችላል ( null: default, spec: ዝርዝሮችን ለማምጣት የተመቻቸ)።', 'type' => 'enum', 'default' => null, 'values' => [null, 'ዝርዝር መግለጫ']],
                'search' => ['title' => 'ጽሑፍ ይፈልጉ', 'type' => 'ሕብረቁምፊ', 'default' => null],
                'search_type' => ['title' => 'የፍለጋ ዓይነት። ባዶ ወይም ምድብ ሊሆን ይችላል።', 'type' => 'enum', 'default' => null, 'values' => [null, 'ምድብ']],
                'dir' => ['title' => 'ምድብ ID ወይም ስም። ሲዋቀር በዚህ ምድብ ውስጥ ምርቶችን ያገኛል።', 'type' => 'ማንኛውም', 'default' => null],
                'products_only' => ['title' => 'ምርቶችን ብቻ ያግኙ (ምድቦች ያልተካተቱ)።', 'type' => 'ቡሊያን', 'default' => false],
                'categories_only' => ['title' => 'ምድቦችን ብቻ ያግኙ (ምርቶች ያልተካተቱ)።', 'type' => 'ቡሊያን', 'default' => false],
                'need_full_variants' => ['title' => 'ሙሉ ተለዋጭ መረጃ ያግኙ።', 'type' => 'ቡሊያን', 'default' => false],
                'optimized' => ['title' => '(ምርቶችን እንደ አስተዳዳሪ ሲያገኙ ብቻ) የምርት ዝርዝሩን ያለ ዋጋ፣ ተመን ወይም ስታስቲክስ ያግኙ።', 'type' => 'ቡሊያን', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'ድርድር',
                    '_object' => 'ምርት',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'ድርድር',
                    '_object' => 'ምድብ',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'ነገር',
                    '_object' => 'ምድብ',
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
            'description' => 'የምርት መረጃ እና ስታቲስቲክስን ያግኙ።',
            'url' => 'ሱቆች/{shop_id}/ምርቶች/{product_id}/አስተዳዳሪ',
            'method' => 'አግኝ',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'ነገር',
                    '_object' => 'ምርት',
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
                    '_type' => 'ድርድር',
                    '_object' => 'የምርት-ውሂብ',
                    'title' => 'ያለፉት 30 ቀናት መረጃ',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'ትእዛዝ que መረጃ.',
                    'type' => 'ምናባዊ፡ ቆጠራ (int)|አካላዊ፡ [መቁጠር፣ የመላኪያ_ግዛት] (ድርድር)'
                ],

                'new_comments_count' => [
                    'title' => 'አዳዲስ አስተያየቶች ይቆጠራሉ።',
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
            'description' => 'አዲስ ምርት ወደ መደብሩ ያክሉ።',
            'url' => 'ሱቆች/{shop_id}/ምርት/አክል',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'የምርቱን/የአገልግሎቱን አይነት ያዘጋጁ።', 'type' => 'enum', 'require' => true, 'values' => ['ምናባዊ', 'አካላዊ', 'አገልግሎት', 'ፋይል ያድርጉ']],
                'price' => ['title' => 'የምርት ዋጋ.', 'type' => 'መንሳፈፍ', 'require' => true],
                'commission' => ['title' => 'በዋጋ ላይ ኮሚሽን ይጨምሩ።', 'type' => 'መንሳፈፍ', 'default' => 0],
                'discount' => ['title' => 'ነባሪ የምርት ዋጋ ቅናሽ።', 'type' => 'መንሳፈፍ', 'default' => 0],
                'dis_start' => ['title' => 'የቅናሽ መነሻ ጊዜ በUTC የሰዓት ሰቅ (ቅርጸት፡ ዓዓዓዓ-ወወ-DD HH:mm:ss)።', 'type' => 'ቀን', 'default' => null],
                'dis_end' => ['title' => 'የቅናሽ ማብቂያ ጊዜ በUTC የሰዓት ሰቅ (ቅርጸት፡ ዓዓዓዓ-ወወ-DD HH:mm:ss)።', 'type' => 'ቀን', 'default' => null],
                'currency' => ['title' => 'ምንዛሪ፣', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "የምርት ርዕስ.", 'type' => 'ሕብረቁምፊ', 'require' => true],
                'title_en' => ['title' => 'የምርቱ የእንግሊዝኛ ርዕስ (ወይም ንዑስ ርዕስ)', 'type' => 'ሕብረቁምፊ', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'ሕብረቁምፊ', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'ሕብረቁምፊ', 'default' => null],
                'gtin' => ['title' => "የምርት ዓለም አቀፍ ንግድ ንጥል ቁጥር.", 'type' => 'ሕብረቁምፊ', 'default' => null],
                'gpc' => ['title' => 'የጉግል ምርት ምድብ ኮድ።', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "በሱቅዎ ውስጥ ያለው የንጥል ወቅታዊ ሁኔታ።", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'የግቤት መስኮች ካሉ (ለምናባዊ ምርቶች ጥቅም ላይ የሚውሉ) ከሆነ መልእክት ለተጠቃሚው ያሳያል።', 'type' => 'ሕብረቁምፊ', 'default' => null],
                'inputs' => ['title' => 'አማራጭ የግቤት መስኮች (ለምናባዊ ምርቶች ጥቅም ላይ ይውላሉ)።', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'አማራጭ የውጤት መስኮች (ለምናባዊ ምርቶች ጥቅም ላይ ይውላሉ).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'አማራጭ ብሎግ ወይም የድር ጣቢያ url።', 'type' => 'ሕብረቁምፊ', 'default' => false],
                'status' => ['title' => 'የምርት ሁኔታ ክፈት / ዝጋ፣ ነባሪው ክፍት ነው።', 'type' => 'enum', 'default' => 'ክፈት', 'values' => ['ክፈት', 'ዝጋ']],
                'category_id' => ['title' => 'ምድብ መታወቂያ', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'በሰዓታት ውስጥ የመምራት ጊዜ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'የምርት ዘይቤ (ጄሰን)።', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'የምርት ስም..', 'type' => 'ሕብረቁምፊ', 'default' => null],
                'warranty' => ['title' => 'የዋስትና መግለጫ..', 'type' => 'ሕብረቁምፊ', 'default' => null],
                'original' => ['title' => 'ይህ ምርት ኦሪጅናል ነው?', 'type' => 'ቡሊያን', 'default' => false],
                'return_warranty' => ['title' => 'በቀናት ዋስትና ይመለሱ።', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ነገር',
                    '_object' => 'ምርት',
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
            'description' => 'አዲስ ምርት ወደ መደብሩ ያክሉ።',
            'url' => 'ሱቆች/{shop_id}/ምርቶች/{product_id}/አርትዕ',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'የምርቱን/የአገልግሎቱን አይነት ያዘጋጁ።', 'type' => 'enum', 'require' => true, 'values' => ['ምናባዊ', 'አካላዊ', 'አገልግሎት', 'ፋይል ያድርጉ']],
                'price' => ['title' => 'የምርት ዋጋ.', 'type' => 'መንሳፈፍ', 'require' => true],
                'commission' => ['title' => 'በዋጋ ላይ ኮሚሽን ይጨምሩ።', 'type' => 'መንሳፈፍ', 'default' => 0],
                'discount' => ['title' => 'ነባሪ የምርት ዋጋ ቅናሽ።', 'type' => 'መንሳፈፍ', 'default' => 0],
                'dis_start' => ['title' => 'የቅናሽ መነሻ ጊዜ በUTC የሰዓት ሰቅ (ቅርጸት፡ ዓዓዓዓ-ወወ-DD HH:mm:ss)።', 'type' => 'ቀን', 'default' => null],
                'dis_end' => ['title' => 'የቅናሽ ማብቂያ ጊዜ በUTC የሰዓት ሰቅ (ቅርጸት፡ ዓዓዓዓ-ወወ-DD HH:mm:ss)።', 'type' => 'ቀን', 'default' => null],
                'currency' => ['title' => 'ምንዛሪ፣', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "የምርት ርዕስ.", 'type' => 'ሕብረቁምፊ', 'require' => true],
                'title_en' => ['title' => 'የምርቱ የእንግሊዝኛ ርዕስ (ወይም ንዑስ ርዕስ)', 'type' => 'ሕብረቁምፊ', 'default' => null],
                'message' => ['title' => 'የግቤት መስኮች ካሉ (ለምናባዊ ምርቶች ጥቅም ላይ የሚውሉ) ከሆነ መልእክት ለተጠቃሚው ያሳያል።', 'type' => 'ሕብረቁምፊ', 'default' => null],
                'inputs' => ['title' => 'አማራጭ የግቤት መስኮች (ለምናባዊ ምርቶች ጥቅም ላይ ይውላሉ)።', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'አማራጭ የውጤት መስኮች (ለምናባዊ ምርቶች ጥቅም ላይ ይውላሉ).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'አማራጭ ብሎግ ወይም የድር ጣቢያ url።', 'type' => 'ሕብረቁምፊ', 'default' => false],
                'status' => ['title' => 'የምርት ሁኔታ ክፈት / ዝጋ፣ ነባሪው ክፍት ነው።', 'type' => 'enum', 'default' => 'ክፈት', 'values' => ['ክፈት', 'ዝጋ']],
                'category_id' => ['title' => 'ምድብ መታወቂያ', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'በሰዓታት ውስጥ የመምራት ጊዜ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'የምርት ዘይቤ (ጄሰን)።', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'የምርት ስም..', 'type' => 'ሕብረቁምፊ', 'default' => null],
                'warranty' => ['title' => 'የዋስትና መግለጫ..', 'type' => 'ሕብረቁምፊ', 'default' => null],
                'original' => ['title' => 'ይህ ምርት ኦሪጅናል ነው?', 'type' => 'ቡሊያን', 'default' => false],
                'return_warranty' => ['title' => 'በቀናት ዋስትና ይመለሱ።', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ነገር',
                    '_object' => 'ምርት',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'ስኬት የዘመነ የምርት ሁኔታ።', 'type' => 'ቡሊያን'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'አዲስ ምርት ከማከማቻው በ sku ወደ ሱቁ ያክሉ።',
            'url' => 'ሱቆች/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'ሕብረቁምፊ', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'ራስ-ሰር አዘጋጅ ምድብ', 'type' => 'ቡሊያን', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'ምርቱ በሱቁ ውስጥ በምድብ መታወቂያ ወደዚህ ምድብ ይጨምሩ።', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'የምርት ዋጋ.', 'type' => 'መንሳፈፍ', 'require' => true],
                'currency' => ['title' => 'ምንዛሪ፣', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'ብዛት', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'ነገር',
                    '_object' => 'ምርት',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'ስኬት የዘመነ የምርት ሁኔታ።', 'type' => 'ቡሊያን'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
