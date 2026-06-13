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
            'description' => 'கடையின் தயாரிப்பு பட்டியலைப் பெறுங்கள்.',
            'url' => 'கடைகள்/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'கிடைக்கக்கூடிய தயாரிப்புகளை மட்டும் காட்டு. உண்மையாகவோ பொய்யாகவோ இருக்கலாம்.', 'type' => 'பூலியன்', 'default' => false],
                'with_parent' => ['title' => 'பெற்றோர் வகை வரிசைமுறையைப் பெறுங்கள். உண்மையாகவோ பொய்யாகவோ இருக்கலாம்.', 'type' => 'பூலியன்', 'default' => false],
                'offset' => ['title' => 'தயாரிப்பு பட்டியலின் ஆஃப்செட் (பேஜினேஷனுக்காக).', 'type' => 'முழு எண்ணாக', 'default' => 0],
                'limit' => ['title' => 'பட்டியலில் உள்ள தயாரிப்புகளின் எண்ணிக்கை (பேஜினேஷனுக்காக).', 'type' => 'முழு எண்ணாக', 'default' => 20],
                'sort' => ['title' => 'பட்டியல் வரிசை வகை', 'type' => 'enum', 'default' => null, 'values' => [null, 'தொடர்புடையது', 'அதிகம்_பார்த்தது', 'மிகவும்_பிரபலமானது', 'புதியது', 'அதிகம் விற்பனையாகும்', 'மலிவான', 'மிகவும்_விலையுயர்ந்த', 'சீரற்ற', 'தொடர்புடையது', 'பிடித்தது', 'சீரற்ற']],
                'product_id' => ['title' => 'தயாரிப்பு ID தொடர்புடைய தயாரிப்புகளைத் திரும்பப் பயன்படுத்தப் பயன்படுகிறது (வரிசை = தொடர்புடையது).', 'type' => 'முழு எண்ணாக', 'default' => null],
                'set' => ['title' => 'தயாரிப்பு தரவு தொகுப்பு. பூஜ்யமாகவோ அல்லது விவரக்குறிப்பாகவோ இருக்கலாம் (பூஜ்ய: இயல்புநிலை, விவரக்குறிப்பு: விவரக்குறிப்புகளை மீட்டெடுப்பதற்கு உகந்ததாக).', 'type' => 'enum', 'default' => null, 'values' => [null, 'விவரக்குறிப்பு']],
                'search' => ['title' => 'உரையைத் தேடுங்கள்', 'type' => 'சரம்', 'default' => null],
                'search_type' => ['title' => 'தேடல் வகை. பூஜ்யமாகவோ அல்லது வகையாகவோ இருக்கலாம்.', 'type' => 'enum', 'default' => null, 'values' => [null, 'வகை']],
                'dir' => ['title' => 'வகை ID அல்லது பெயர். அமைக்கப்படும் போது இந்த வகை தயாரிப்புகளைப் பெறுகிறது.', 'type' => 'ஏதேனும்', 'default' => null],
                'products_only' => ['title' => 'தயாரிப்புகளை மட்டும் பெறுங்கள் (வகைகள் சேர்க்கப்படவில்லை).', 'type' => 'பூலியன்', 'default' => false],
                'categories_only' => ['title' => 'வகைகளை மட்டும் பெறுங்கள் (தயாரிப்புகள் சேர்க்கப்படவில்லை).', 'type' => 'பூலியன்', 'default' => false],
                'need_full_variants' => ['title' => 'முழு மாறுபாடு தகவலைப் பெறுங்கள்.', 'type' => 'பூலியன்', 'default' => false],
                'optimized' => ['title' => '(தயாரிப்புகளை நிர்வாகியாகப் பெறும்போது மட்டும்) விலை, விகிதம் அல்லது புள்ளிவிவரங்கள் இல்லாமல் தயாரிப்புப் பட்டியலைப் பெறுங்கள்.', 'type' => 'பூலியன்', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'வரிசை',
                    '_object' => 'தயாரிப்பு',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'வரிசை',
                    '_object' => 'வகை',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'பொருள்',
                    '_object' => 'வகை',
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
            'description' => 'தயாரிப்பு தகவல் மற்றும் புள்ளிவிவரங்களைப் பெறுங்கள்.',
            'url' => 'கடைகள்/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'பொருள்',
                    '_object' => 'தயாரிப்பு',
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
                    '_type' => 'வரிசை',
                    '_object' => 'தயாரிப்பு-தரவு',
                    'title' => 'கடந்த 30 நாட்கள் தரவு',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'தகவல் ஆர்டர்கள்.',
                    'type' => 'மெய்நிகர்: எண்ணிக்கை (int)|உடல்: [எண்ணிக்கை, விநியோக_நிலை] (வரிசை)'
                ],

                'new_comments_count' => [
                    'title' => 'புதிய கருத்துகள் எண்ணிக்கை.',
                    'type' => 'முழு எண்ணாக'
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
            'description' => 'கடையில் புதிய தயாரிப்பு சேர்க்கவும்.',
            'url' => 'கடைகள்/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'தயாரிப்பு / சேவையின் வகையை அமைக்கவும்.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'பொருளின் விலை.', 'type' => 'மிதவை', 'require' => true],
                'commission' => ['title' => 'விலைக்கு கமிஷன் சேர்க்கவும்.', 'type' => 'மிதவை', 'default' => 0],
                'discount' => ['title' => 'இயல்புநிலை தயாரிப்பு விலை தள்ளுபடி.', 'type' => 'மிதவை', 'default' => 0],
                'dis_start' => ['title' => 'Discount start time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'தேதி', 'default' => null],
                'dis_end' => ['title' => 'Discount end time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'தேதி', 'default' => null],
                'currency' => ['title' => 'நாணயம்,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "தயாரிப்பு தலைப்பு.", 'type' => 'சரம்', 'require' => true],
                'title_en' => ['title' => 'தயாரிப்பின் ஆங்கில தலைப்பு (அல்லது துணை தலைப்பு)', 'type' => 'சரம்', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'சரம்', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'சரம்', 'default' => null],
                'gtin' => ['title' => "தயாரிப்பின் உலகளாவிய வர்த்தக உருப்படி எண்.", 'type' => 'சரம்', 'default' => null],
                'gpc' => ['title' => 'Google தயாரிப்பு வகைக் குறியீடு.', 'type' => 'முழு எண்ணாக', 'default' => null],
                'condition' => ['title' => "உங்கள் கடையில் உள்ள பொருளின் தற்போதைய நிலை.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'உள்ளீட்டு புலங்கள் இருந்தால் (மெய்நிகர் தயாரிப்புகளுக்குப் பயன்படுத்தப்படும்) பயனருக்குச் செய்தியைக் காட்டவும்.', 'type' => 'சரம்', 'default' => null],
                'inputs' => ['title' => 'விருப்ப உள்ளீட்டு புலங்கள் (மெய்நிகர் தயாரிப்புகளுக்குப் பயன்படுத்தப்படுகிறது).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'விருப்ப வெளியீட்டு புலங்கள் (மெய்நிகர் தயாரிப்புகளுக்குப் பயன்படுத்தப்படுகிறது).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'விருப்ப வலைப்பதிவு அல்லது இணையதள url.', 'type' => 'சரம்', 'default' => false],
                'status' => ['title' => 'தயாரிப்பு நிலை திற / மூடு, இயல்புநிலை திறந்திருக்கும்.', 'type' => 'enum', 'default' => 'திற', 'values' => ['திற', 'மூடு']],
                'category_id' => ['title' => 'வகை ஐடி.', 'type' => 'முழு எண்ணாக', 'default' => null],
                'lead' => ['title' => 'முன்னணி நேரம் மணி..', 'type' => 'முழு எண்ணாக', 'default' => null],
                'style' => ['title' => 'தயாரிப்பு பாணி (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'தயாரிப்பு பிராண்ட்..', 'type' => 'சரம்', 'default' => null],
                'warranty' => ['title' => 'உத்தரவாத விளக்கம்..', 'type' => 'சரம்', 'default' => null],
                'original' => ['title' => 'இந்த தயாரிப்பு அசல்தா?', 'type' => 'பூலியன்', 'default' => false],
                'return_warranty' => ['title' => 'நாட்களுக்கு உத்தரவாதம் திரும்ப.', 'type' => 'முழு எண்ணாக', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'பொருள்',
                    '_object' => 'தயாரிப்பு',
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
            'description' => 'கடையில் புதிய தயாரிப்பு சேர்க்கவும்.',
            'url' => 'கடைகள்/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'தயாரிப்பு / சேவையின் வகையை அமைக்கவும்.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'பொருளின் விலை.', 'type' => 'மிதவை', 'require' => true],
                'commission' => ['title' => 'விலைக்கு கமிஷன் சேர்க்கவும்.', 'type' => 'மிதவை', 'default' => 0],
                'discount' => ['title' => 'இயல்புநிலை தயாரிப்பு விலை தள்ளுபடி.', 'type' => 'மிதவை', 'default' => 0],
                'dis_start' => ['title' => 'Discount start time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'தேதி', 'default' => null],
                'dis_end' => ['title' => 'Discount end time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'தேதி', 'default' => null],
                'currency' => ['title' => 'நாணயம்,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "தயாரிப்பு தலைப்பு.", 'type' => 'சரம்', 'require' => true],
                'title_en' => ['title' => 'தயாரிப்பின் ஆங்கில தலைப்பு (அல்லது துணை தலைப்பு)', 'type' => 'சரம்', 'default' => null],
                'message' => ['title' => 'உள்ளீட்டு புலங்கள் இருந்தால் (மெய்நிகர் தயாரிப்புகளுக்குப் பயன்படுத்தப்படும்) பயனருக்குச் செய்தியைக் காட்டவும்.', 'type' => 'சரம்', 'default' => null],
                'inputs' => ['title' => 'விருப்ப உள்ளீட்டு புலங்கள் (மெய்நிகர் தயாரிப்புகளுக்குப் பயன்படுத்தப்படுகிறது).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'விருப்ப வெளியீட்டு புலங்கள் (மெய்நிகர் தயாரிப்புகளுக்குப் பயன்படுத்தப்படுகிறது).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'விருப்ப வலைப்பதிவு அல்லது இணையதள url.', 'type' => 'சரம்', 'default' => false],
                'status' => ['title' => 'தயாரிப்பு நிலை திற / மூடு, இயல்புநிலை திறந்திருக்கும்.', 'type' => 'enum', 'default' => 'திற', 'values' => ['திற', 'மூடு']],
                'category_id' => ['title' => 'வகை ஐடி.', 'type' => 'முழு எண்ணாக', 'default' => null],
                'lead' => ['title' => 'முன்னணி நேரம் மணி..', 'type' => 'முழு எண்ணாக', 'default' => null],
                'style' => ['title' => 'தயாரிப்பு பாணி (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'தயாரிப்பு பிராண்ட்..', 'type' => 'சரம்', 'default' => null],
                'warranty' => ['title' => 'உத்தரவாத விளக்கம்..', 'type' => 'சரம்', 'default' => null],
                'original' => ['title' => 'இந்த தயாரிப்பு அசல்தா?', 'type' => 'பூலியன்', 'default' => false],
                'return_warranty' => ['title' => 'நாட்களுக்கு உத்தரவாதம் திரும்ப.', 'type' => 'முழு எண்ணாக', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'பொருள்',
                    '_object' => 'தயாரிப்பு',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'வெற்றிகரமான தயாரிப்பு நிலை புதுப்பிக்கப்பட்டது.', 'type' => 'பூலியன்'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'sku மூலம் களஞ்சியத்தில் இருந்து கடைக்கு புதிய தயாரிப்பைச் சேர்க்கவும்.',
            'url' => 'கடைகள்/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'சரம்', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'தானியங்கு அமைவு வகை', 'type' => 'பூலியன்', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'கடையில் உள்ள வகை ஐடியின் அடிப்படையில் தயாரிப்பு இந்த வகையைச் சேர்க்கவும்.', 'type' => 'முழு எண்ணாக', 'default' => null],

                'price' => ['title' => 'பொருளின் விலை.', 'type' => 'மிதவை', 'require' => true],
                'currency' => ['title' => 'நாணயம்,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'அளவு', 'type' => 'முழு எண்ணாக', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'பொருள்',
                    '_object' => 'தயாரிப்பு',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'வெற்றிகரமான தயாரிப்பு நிலை புதுப்பிக்கப்பட்டது.', 'type' => 'பூலியன்'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
