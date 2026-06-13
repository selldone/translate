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
            'description' => 'കടയുടെ ഉൽപ്പന്ന ലിസ്റ്റ് നേടുക.',
            'url' => 'ഷോപ്പുകൾ/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'ലഭ്യമായ ഉൽപ്പന്നങ്ങൾ മാത്രം കാണിക്കുക. സത്യമോ തെറ്റോ ആകാം.', 'type' => 'ബൂളിയൻ', 'default' => false],
                'with_parent' => ['title' => 'രക്ഷാകർതൃ വിഭാഗ ശ്രേണി നേടുക. സത്യമോ തെറ്റോ ആകാം.', 'type' => 'ബൂളിയൻ', 'default' => false],
                'offset' => ['title' => 'ഉൽപ്പന്ന ലിസ്റ്റിൻ്റെ ഓഫ്സെറ്റ് (പജിനേഷനായി).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'ലിസ്റ്റിലെ ഉൽപ്പന്നങ്ങളുടെ എണ്ണം (പജിനേഷനായി).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'ലിസ്റ്റ് അടുക്കൽ തരം', 'type' => 'enum', 'default' => null, 'values' => [null, 'ബന്ധപ്പെട്ട', 'ഏറ്റവും_സന്ദർശിച്ചത്', 'ഏറ്റവും_ജനപ്രിയം', 'ഏറ്റവും പുതിയത്', 'ബെസ്റ്റ് സെല്ലിംഗ്', 'ഏറ്റവും വിലകുറഞ്ഞ', 'ഏറ്റവും_ചെലവേറിയത്', 'ക്രമരഹിതമായ', 'ബന്ധപ്പെട്ട', 'പ്രിയപ്പെട്ട', 'ക്രമരഹിതമായ']],
                'product_id' => ['title' => 'ഉൽപ്പന്നം ID ബന്ധപ്പെട്ട ഉൽപ്പന്നങ്ങൾ തിരികെ നൽകാൻ ഉപയോഗിക്കുന്നു (അടുക്കുക = ബന്ധപ്പെട്ട).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'ഉൽപ്പന്ന ഡാറ്റ സെറ്റ്. ശൂന്യമോ സ്പെസിഫിക്കറ്റോ ആകാം (നല്ല്: ഡിഫോൾട്ട്, സ്പെക്: സ്പെസിഫിക്കേഷനുകൾ വീണ്ടെടുക്കുന്നതിന് ഒപ്റ്റിമൈസ് ചെയ്തത്).', 'type' => 'enum', 'default' => null, 'values' => [null, 'സ്പെസിഫിക്കേഷൻ']],
                'search' => ['title' => 'ടെക്സ്റ്റ് തിരയുക', 'type' => 'ചരട്', 'default' => null],
                'search_type' => ['title' => 'തിരയൽ തരം. ശൂന്യമോ വിഭാഗമോ ആകാം.', 'type' => 'enum', 'default' => null, 'values' => [null, 'വിഭാഗം']],
                'dir' => ['title' => 'വിഭാഗം ID അല്ലെങ്കിൽ പേര്. സജ്ജമാക്കുമ്പോൾ ഈ വിഭാഗത്തിലെ ഉൽപ്പന്നങ്ങൾ ലഭിക്കും.', 'type' => 'ഏതെങ്കിലും', 'default' => null],
                'products_only' => ['title' => 'ഉൽപ്പന്നങ്ങൾ മാത്രം നേടുക (വിഭാഗങ്ങൾ ഉൾപ്പെടുത്തിയിട്ടില്ല).', 'type' => 'ബൂളിയൻ', 'default' => false],
                'categories_only' => ['title' => 'വിഭാഗങ്ങൾ മാത്രം നേടുക (ഉൽപ്പന്നങ്ങൾ ഉൾപ്പെടുത്തിയിട്ടില്ല).', 'type' => 'ബൂളിയൻ', 'default' => false],
                'need_full_variants' => ['title' => 'മുഴുവൻ വേരിയൻ്റ് വിവരങ്ങൾ നേടുക.', 'type' => 'ബൂളിയൻ', 'default' => false],
                'optimized' => ['title' => '(ഒരു അഡ്‌മിനായി ഉൽപ്പന്നങ്ങൾ ലഭിക്കുമ്പോൾ മാത്രം) വിലയോ നിരക്കോ സ്ഥിതിവിവരക്കണക്കുകളോ ഇല്ലാതെ ഉൽപ്പന്ന ലിസ്റ്റ് നേടുക.', 'type' => 'ബൂളിയൻ', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'അറേ',
                    '_object' => 'ഉൽപ്പന്നം',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'അറേ',
                    '_object' => 'വിഭാഗം',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'വസ്തു',
                    '_object' => 'വിഭാഗം',
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
            'description' => 'ഉൽപ്പന്ന വിവരങ്ങളും സ്ഥിതിവിവരക്കണക്കുകളും നേടുക.',
            'url' => 'ഷോപ്പുകൾ/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'വസ്തു',
                    '_object' => 'ഉൽപ്പന്നം',
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
                    '_type' => 'അറേ',
                    '_object' => 'ഉൽപ്പന്നം-ഡാറ്റ',
                    'title' => 'കഴിഞ്ഞ 30 ദിവസത്തെ ഡാറ്റ',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'വിവരങ്ങൾക്ക് ഓർഡർ നൽകുന്നു.',
                    'type' => 'വെർച്വൽ: എണ്ണം (int)|ഫിസിക്കൽ: [count, delivery_state] (അറേ)'
                ],

                'new_comments_count' => [
                    'title' => 'പുതിയ അഭിപ്രായങ്ങൾ കണക്കാക്കുന്നു.',
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
            'description' => 'ഷോപ്പിലേക്ക് പുതിയ ഉൽപ്പന്നം ചേർക്കുക.',
            'url' => 'ഷോപ്പുകൾ/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ഉൽപ്പന്നത്തിൻ്റെ / സേവനത്തിൻ്റെ തരം സജ്ജമാക്കുക.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ഉൽപ്പന്നത്തിൻ്റെ വില.', 'type' => 'ഫ്ലോട്ട്', 'require' => true],
                'commission' => ['title' => 'വിലയിൽ കമ്മീഷൻ ചേർക്കുക.', 'type' => 'ഫ്ലോട്ട്', 'default' => 0],
                'discount' => ['title' => 'ഡിഫോൾട്ട് ഉൽപ്പന്ന വില കിഴിവ്.', 'type' => 'ഫ്ലോട്ട്', 'default' => 0],
                'dis_start' => ['title' => 'Discount start time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'തീയതി', 'default' => null],
                'dis_end' => ['title' => 'UTC സമയ മേഖലയിൽ കിഴിവ് അവസാനിക്കുന്ന സമയം (ഫോർമാറ്റ്: YYYY-MM-DD HH:mm:ss).', 'type' => 'തീയതി', 'default' => null],
                'currency' => ['title' => 'കറൻസി,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ഉൽപ്പന്നത്തിൻ്റെ ശീർഷകം.", 'type' => 'ചരട്', 'require' => true],
                'title_en' => ['title' => 'ഉൽപ്പന്നത്തിൻ്റെ ഇംഗ്ലീഷ് തലക്കെട്ട് (അല്ലെങ്കിൽ ഉപശീർഷകം)', 'type' => 'ചരട്', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'ചരട്', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'ചരട്', 'default' => null],
                'gtin' => ['title' => "ഉൽപ്പന്നത്തിൻ്റെ ആഗോള വ്യാപാര ഇനം നമ്പർ.", 'type' => 'ചരട്', 'default' => null],
                'gpc' => ['title' => 'Google ഉൽപ്പന്ന വിഭാഗ കോഡ്.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "നിങ്ങളുടെ സ്റ്റോറിലെ ഇനത്തിൻ്റെ നിലവിലെ അവസ്ഥ.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'ഇൻപുട്ട് ഫീൽഡുകൾ നിലവിലുണ്ടെങ്കിൽ ഉപയോക്താവിന് സന്ദേശം കാണിക്കുക (വെർച്വൽ ഉൽപ്പന്നങ്ങൾക്ക് ഉപയോഗിക്കുന്നു).', 'type' => 'ചരട്', 'default' => null],
                'inputs' => ['title' => 'ഓപ്ഷണൽ ഇൻപുട്ട് ഫീൽഡുകൾ (വെർച്വൽ ഉൽപ്പന്നങ്ങൾക്ക് ഉപയോഗിക്കുന്നു).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ഓപ്ഷണൽ ഔട്ട്പുട്ട് ഫീൽഡുകൾ (വെർച്വൽ ഉൽപ്പന്നങ്ങൾക്കായി ഉപയോഗിക്കുന്നു).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ഓപ്ഷണൽ ബ്ലോഗ് അല്ലെങ്കിൽ വെബ്സൈറ്റ് url.', 'type' => 'ചരട്', 'default' => false],
                'status' => ['title' => 'ഉൽപ്പന്ന നില തുറക്കുക / അടയ്ക്കുക, സ്ഥിരസ്ഥിതി തുറന്നതാണ്.', 'type' => 'enum', 'default' => 'തുറക്കുക', 'values' => ['തുറക്കുക', 'അടയ്ക്കുക']],
                'category_id' => ['title' => 'വിഭാഗം ഐഡി.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ലീഡ് സമയം മണിക്കൂറുകളിൽ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'ഉൽപ്പന്നത്തിൻ്റെ ശൈലി (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ഉൽപ്പന്നത്തിൻ്റെ ബ്രാൻഡ്..', 'type' => 'ചരട്', 'default' => null],
                'warranty' => ['title' => 'വാറൻ്റി വിവരണം..', 'type' => 'ചരട്', 'default' => null],
                'original' => ['title' => 'ഈ ഉൽപ്പന്നം യഥാർത്ഥമാണോ?', 'type' => 'ബൂളിയൻ', 'default' => false],
                'return_warranty' => ['title' => 'ദിവസങ്ങൾ തിരിച്ച് വാറൻ്റി.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'വസ്തു',
                    '_object' => 'ഉൽപ്പന്നം',
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
            'description' => 'ഷോപ്പിലേക്ക് പുതിയ ഉൽപ്പന്നം ചേർക്കുക.',
            'url' => 'ഷോപ്പുകൾ/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ഉൽപ്പന്നത്തിൻ്റെ / സേവനത്തിൻ്റെ തരം സജ്ജമാക്കുക.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ഉൽപ്പന്നത്തിൻ്റെ വില.', 'type' => 'ഫ്ലോട്ട്', 'require' => true],
                'commission' => ['title' => 'വിലയിൽ കമ്മീഷൻ ചേർക്കുക.', 'type' => 'ഫ്ലോട്ട്', 'default' => 0],
                'discount' => ['title' => 'ഡിഫോൾട്ട് ഉൽപ്പന്ന വില കിഴിവ്.', 'type' => 'ഫ്ലോട്ട്', 'default' => 0],
                'dis_start' => ['title' => 'Discount start time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'തീയതി', 'default' => null],
                'dis_end' => ['title' => 'UTC സമയ മേഖലയിൽ കിഴിവ് അവസാനിക്കുന്ന സമയം (ഫോർമാറ്റ്: YYYY-MM-DD HH:mm:ss).', 'type' => 'തീയതി', 'default' => null],
                'currency' => ['title' => 'കറൻസി,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ഉൽപ്പന്നത്തിൻ്റെ ശീർഷകം.", 'type' => 'ചരട്', 'require' => true],
                'title_en' => ['title' => 'ഉൽപ്പന്നത്തിൻ്റെ ഇംഗ്ലീഷ് തലക്കെട്ട് (അല്ലെങ്കിൽ ഉപശീർഷകം)', 'type' => 'ചരട്', 'default' => null],
                'message' => ['title' => 'ഇൻപുട്ട് ഫീൽഡുകൾ നിലവിലുണ്ടെങ്കിൽ ഉപയോക്താവിന് സന്ദേശം കാണിക്കുക (വെർച്വൽ ഉൽപ്പന്നങ്ങൾക്ക് ഉപയോഗിക്കുന്നു).', 'type' => 'ചരട്', 'default' => null],
                'inputs' => ['title' => 'ഓപ്ഷണൽ ഇൻപുട്ട് ഫീൽഡുകൾ (വെർച്വൽ ഉൽപ്പന്നങ്ങൾക്ക് ഉപയോഗിക്കുന്നു).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ഓപ്ഷണൽ ഔട്ട്പുട്ട് ഫീൽഡുകൾ (വെർച്വൽ ഉൽപ്പന്നങ്ങൾക്കായി ഉപയോഗിക്കുന്നു).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ഓപ്ഷണൽ ബ്ലോഗ് അല്ലെങ്കിൽ വെബ്സൈറ്റ് url.', 'type' => 'ചരട്', 'default' => false],
                'status' => ['title' => 'ഉൽപ്പന്ന നില തുറക്കുക / അടയ്ക്കുക, സ്ഥിരസ്ഥിതി തുറന്നതാണ്.', 'type' => 'enum', 'default' => 'തുറക്കുക', 'values' => ['തുറക്കുക', 'അടയ്ക്കുക']],
                'category_id' => ['title' => 'വിഭാഗം ഐഡി.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ലീഡ് സമയം മണിക്കൂറുകളിൽ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'ഉൽപ്പന്നത്തിൻ്റെ ശൈലി (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ഉൽപ്പന്നത്തിൻ്റെ ബ്രാൻഡ്..', 'type' => 'ചരട്', 'default' => null],
                'warranty' => ['title' => 'വാറൻ്റി വിവരണം..', 'type' => 'ചരട്', 'default' => null],
                'original' => ['title' => 'ഈ ഉൽപ്പന്നം യഥാർത്ഥമാണോ?', 'type' => 'ബൂളിയൻ', 'default' => false],
                'return_warranty' => ['title' => 'ദിവസങ്ങൾ തിരിച്ച് വാറൻ്റി.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'വസ്തു',
                    '_object' => 'ഉൽപ്പന്നം',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'വിജയകരമായ അപ്ഡേറ്റ് ചെയ്ത ഉൽപ്പന്ന നില.', 'type' => 'ബൂളിയൻ'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'ശേഖരത്തിൽ നിന്ന് sku വഴി ഷോപ്പിലേക്ക് പുതിയ ഉൽപ്പന്നം ചേർക്കുക.',
            'url' => 'ഷോപ്പുകൾ/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'ചരട്', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'ഓട്ടോ സെറ്റ് വിഭാഗം', 'type' => 'ബൂളിയൻ', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'ഷോപ്പിലെ വിഭാഗ ഐഡി പ്രകാരം ഉൽപ്പന്നം ഈ വിഭാഗത്തിലേക്ക് ചേർക്കുക.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'ഉൽപ്പന്നത്തിൻ്റെ വില.', 'type' => 'ഫ്ലോട്ട്', 'require' => true],
                'currency' => ['title' => 'കറൻസി,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'അളവ്', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'വസ്തു',
                    '_object' => 'ഉൽപ്പന്നം',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'വിജയകരമായ അപ്ഡേറ്റ് ചെയ്ത ഉൽപ്പന്ന നില.', 'type' => 'ബൂളിയൻ'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
