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
            'description' => 'دۇكاننىڭ مەھسۇلات تىزىملىكىگە ئېرىشىڭ.',
            'url' => 'دۇكانلار / {shop_id} / مەھسۇلاتلار / بارلىق باشقۇرغۇچى',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'پەقەت بار مەھسۇلاتلارنىلا كۆرسىتىڭ. راست ياكى يالغان بولۇشى مۇمكىن.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'ئاتا-ئانىلار تۈرىگە ئېرىشىش. راست ياكى يالغان بولۇشى مۇمكىن.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'مەھسۇلات تىزىملىكىنىڭ قىسقارتىلىشى (كىچىكلىتىش ئۈچۈن).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'تىزىملىكتىكى مەھسۇلاتلارنىڭ سانى (كىچىكلىتىش ئۈچۈن).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'تىزىملىك تۈرى', 'type' => 'enum', 'default' => null, 'values' => [null, 'مۇناسىۋەتلىك', 'most_visited', 'most_popular', 'ئەڭ يېڭى', 'bestselling', 'ئەڭ ئەرزان', 'most_expensive', 'تاسادىپىي', 'مۇناسىۋەتلىك', 'ياقتۇرىدىغان', 'تاسادىپىي']],
                'product_id' => ['title' => 'مەھسۇلات ID مۇناسىۋەتلىك مەھسۇلاتلارنى قايتۇرۇشتا ئىشلىتىلىدۇ (sort = مۇناسىۋەتلىك).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'مەھسۇلات سانلىق مەلۇماتلىرى. ئىناۋەتسىز ياكى ئېنىق (null: default, spec: ئۆلچەملەرنى ئەسلىگە كەلتۈرۈش ئۈچۈن ئەلالاشتۇرۇلغان) بولىدۇ.', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'ئىزدەش تېكىستى', 'type' => 'string', 'default' => null],
                'search_type' => ['title' => 'ئىزدەش تىپى. ئىناۋەتسىز ياكى سەھىپە بولالايدۇ.', 'type' => 'enum', 'default' => null, 'values' => [null, 'تۈرى']],
                'dir' => ['title' => 'ID ياكى ئىسمى. تەڭشەلگەندە بۇ تۈردىكى مەھسۇلاتلارغا ئېرىشىدۇ.', 'type' => 'ھەر قانداق', 'default' => null],
                'products_only' => ['title' => 'پەقەت مەھسۇلاتقا ئېرىشىڭ (تۈرلەرنى ئۆز ئىچىگە ئالمايدۇ).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'پەقەت كاتېگورىيەگە ئېرىشىڭ (مەھسۇلات كىرگۈزۈلمەيدۇ).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'تولۇق ۋارىيانت ئۇچۇرلىرىغا ئېرىشىڭ.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(مەھسۇلاتنى باشقۇرغۇچى سۈپىتىدە ئالغاندىلا) مەھسۇلات تىزىملىكىنى باھا ، ئۆسۈم ياكى ستاتىستىكاسىز ئېلىڭ.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'سانلار گۇرپىسى',
                    '_object' => 'مەھسۇلات',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'سانلار گۇرپىسى',
                    '_object' => 'سەھىپە',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'ئوبيېكت',
                    '_object' => 'سەھىپە',
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
            'description' => 'مەھسۇلات ئۇچۇرى ۋە ستاتىستىكىغا ئېرىشىش.',
            'url' => 'دۇكانلار / {shop_id} / مەھسۇلاتلار / {مەھسۇلات_ id} / باشقۇرغۇچى',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'ئوبيېكت',
                    '_object' => 'مەھسۇلات',
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
                    '_type' => 'سانلار گۇرپىسى',
                    '_object' => 'مەھسۇلات-سانلىق مەلۇمات',
                    'title' => 'يېقىنقى 30 كۈنلۈك سانلىق مەلۇمات',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'بۇيرۇق ئۇچۇرى.',
                    'type' => 'مەۋھۇم: سان (int)|فىزىكىلىق: [ساناش ، يەتكۈزۈش_ دۆلەت] (سانلار گۇرپىسى)'
                ],

                'new_comments_count' => [
                    'title' => 'يېڭى باھا سانى.',
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
            'description' => 'دۇكانغا يېڭى مەھسۇلات قوشۇڭ.',
            'url' => 'دۇكانلار / {shop_id} / مەھسۇلات / قوشۇش',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'مەھسۇلات / مۇلازىمەتنىڭ تۈرىنى بەلگىلەڭ.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'مەھسۇلاتنىڭ باھاسى.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'باھاغا كومىسسىيە قوشۇڭ.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'سۈكۈتتىكى مەھسۇلات باھاسى ئېتىبار.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'UTC ۋاقىت رايونىدا ئېتىبار بېرىش ۋاقتى (فورماتى: YYYY-MM-DD HH:mm:ss).', 'type' => 'چېسلا', 'default' => null],
                'dis_end' => ['title' => 'UTC ۋاقىت رايونىدا ئېتىبار بېرىش ۋاقتى (فورماتى: YYYY-MM-DD HH:mm:ss).', 'type' => 'چېسلا', 'default' => null],
                'currency' => ['title' => 'پۇل ،', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "مەھسۇلاتنىڭ ئىسمى.", 'type' => 'string', 'require' => true],
                'title_en' => ['title' => 'مەھسۇلاتنىڭ ئىنگلىزچە ئىسمى (ياكى تارماق ماۋزۇ)', 'type' => 'string', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'string', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'string', 'default' => null],
                'gtin' => ['title' => "مەھسۇلاتنىڭ يەرشارى سودا تۈر نومۇرى.", 'type' => 'string', 'default' => null],
                'gpc' => ['title' => 'Google مەھسۇلات تۈرىنىڭ كودى.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "دۇكىنىڭىزنىڭ نۆۋەتتىكى ئەھۋالى.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'ئەگەر كىرگۈزۈش مەيدانى مەۋجۇت بولسا (مەۋھۇم مەھسۇلاتلارغا ئىشلىتىلىدۇ) ئىشلەتكۈچىگە ئۇچۇر كۆرسىتىدۇ.', 'type' => 'string', 'default' => null],
                'inputs' => ['title' => 'ئىختىيارى كىرگۈزۈش بۆلەكلىرى (مەۋھۇم مەھسۇلاتلارغا ئىشلىتىلىدۇ).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ئىختىيارىي چىقىرىش مەيدانى (مەۋھۇم مەھسۇلاتلارغا ئىشلىتىلىدۇ).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ئىختىيارى بىلوگ ياكى تور بېكەت ئادرېسى.', 'type' => 'string', 'default' => false],
                'status' => ['title' => 'مەھسۇلات ھالىتى ئوچۇق / تاقاش ، سۈكۈتتىكى ھالەتتە ئوچۇق.', 'type' => 'enum', 'default' => 'ئېچىڭ', 'values' => ['ئېچىڭ', 'تاقاش']],
                'category_id' => ['title' => 'category id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ۋاقىتنى يېتەكلەش ۋاقتى ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'مەھسۇلات ئۇسلۇبى (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'مەھسۇلات ماركىسى ..', 'type' => 'string', 'default' => null],
                'warranty' => ['title' => 'كاپالەت چۈشەندۈرۈشى ..', 'type' => 'string', 'default' => null],
                'original' => ['title' => 'بۇ مەھسۇلات ئەسلىمۇ؟', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'كېپىللىك كۈنلىرىنى قايتۇرۇڭ.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ئوبيېكت',
                    '_object' => 'مەھسۇلات',
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
            'description' => 'دۇكانغا يېڭى مەھسۇلات قوشۇڭ.',
            'url' => 'دۇكانلار / {shop_id} / مەھسۇلاتلار / {مەھسۇلات_ id} / تەھرىرلەش',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'مەھسۇلات / مۇلازىمەتنىڭ تۈرىنى بەلگىلەڭ.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'مەھسۇلاتنىڭ باھاسى.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'باھاغا كومىسسىيە قوشۇڭ.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'سۈكۈتتىكى مەھسۇلات باھاسى ئېتىبار.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'UTC ۋاقىت رايونىدا ئېتىبار بېرىش ۋاقتى (فورماتى: YYYY-MM-DD HH:mm:ss).', 'type' => 'چېسلا', 'default' => null],
                'dis_end' => ['title' => 'UTC ۋاقىت رايونىدا ئېتىبار بېرىش ۋاقتى (فورماتى: YYYY-MM-DD HH:mm:ss).', 'type' => 'چېسلا', 'default' => null],
                'currency' => ['title' => 'پۇل ،', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "مەھسۇلاتنىڭ ئىسمى.", 'type' => 'string', 'require' => true],
                'title_en' => ['title' => 'مەھسۇلاتنىڭ ئىنگلىزچە ئىسمى (ياكى تارماق ماۋزۇ)', 'type' => 'string', 'default' => null],
                'message' => ['title' => 'ئەگەر كىرگۈزۈش مەيدانى مەۋجۇت بولسا (مەۋھۇم مەھسۇلاتلارغا ئىشلىتىلىدۇ) ئىشلەتكۈچىگە ئۇچۇر كۆرسىتىدۇ.', 'type' => 'string', 'default' => null],
                'inputs' => ['title' => 'ئىختىيارى كىرگۈزۈش بۆلەكلىرى (مەۋھۇم مەھسۇلاتلارغا ئىشلىتىلىدۇ).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ئىختىيارىي چىقىرىش مەيدانى (مەۋھۇم مەھسۇلاتلارغا ئىشلىتىلىدۇ).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ئىختىيارى بىلوگ ياكى تور بېكەت ئادرېسى.', 'type' => 'string', 'default' => false],
                'status' => ['title' => 'مەھسۇلات ھالىتى ئوچۇق / تاقاش ، سۈكۈتتىكى ھالەتتە ئوچۇق.', 'type' => 'enum', 'default' => 'ئېچىڭ', 'values' => ['ئېچىڭ', 'تاقاش']],
                'category_id' => ['title' => 'category id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ۋاقىتنى يېتەكلەش ۋاقتى ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'مەھسۇلات ئۇسلۇبى (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'مەھسۇلات ماركىسى ..', 'type' => 'string', 'default' => null],
                'warranty' => ['title' => 'كاپالەت چۈشەندۈرۈشى ..', 'type' => 'string', 'default' => null],
                'original' => ['title' => 'بۇ مەھسۇلات ئەسلىمۇ؟', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'كېپىللىك كۈنلىرىنى قايتۇرۇڭ.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ئوبيېكت',
                    '_object' => 'مەھسۇلات',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'مۇۋەپپەقىيەت يېڭىلانغان مەھسۇلات ھالىتى.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'دۇكانغا sku ئارقىلىق ئامباردىن يېڭى مەھسۇلات قوشۇڭ.',
            'url' => 'دۇكانلار / {shop_id} / مەھسۇلات ئامبىرى / add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'string', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'ئاپتوماتىك تەڭشەش تۈرى', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'دۇكاندىكى تۈر ID ئارقىلىق مەھسۇلات بۇ تۈرگە قوشۇلىدۇ.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'مەھسۇلاتنىڭ باھاسى.', 'type' => 'float', 'require' => true],
                'currency' => ['title' => 'پۇل ،', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'سانى', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'ئوبيېكت',
                    '_object' => 'مەھسۇلات',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'مۇۋەپپەقىيەت يېڭىلانغان مەھسۇلات ھالىتى.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
