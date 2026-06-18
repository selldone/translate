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
            'description' => 'દુકાનની પ્રોડક્ટ લિસ્ટ મેળવો.',
            'url' => 'દુકાનો/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'ફક્ત ઉપલબ્ધ ઉત્પાદનો બતાવો. સાચું કે ખોટું હોઈ શકે છે.', 'type' => 'બુલિયન', 'default' => false],
                'with_parent' => ['title' => 'પિતૃ કેટેગરી વંશવેલો મેળવો. સાચું કે ખોટું હોઈ શકે છે.', 'type' => 'બુલિયન', 'default' => false],
                'offset' => ['title' => 'ઉત્પાદન સૂચિની ઑફસેટ (પૃષ્ઠ ક્રમાંકન માટે).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'સૂચિમાં ઉત્પાદનોની સંખ્યા (પૃષ્ઠ ક્રમાંકન માટે).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'યાદી સૉર્ટ પ્રકાર', 'type' => 'enum', 'default' => null, 'values' => [null, 'સંબંધિત', 'સૌથી વધુ_મુલાકાત લીધેલ', 'સૌથી વધુ_લોકપ્રિય', 'સૌથી નવું', 'બેસ્ટ સેલિંગ', 'સૌથી સસ્તું', 'સૌથી વધુ_ખર્ચાળ', 'રેન્ડમ', 'સંબંધિત', 'મનપસંદ', 'રેન્ડમ']],
                'product_id' => ['title' => 'સંબંધિત ઉત્પાદનો પરત કરવા માટે વપરાયેલ ઉત્પાદન ID (સૉર્ટ = સંબંધિત).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'ઉત્પાદન ડેટા સેટ. નલ અથવા સ્પેક હોઈ શકે છે (નલ: ડિફોલ્ટ, સ્પેક: સ્પષ્ટીકરણો પુનઃપ્રાપ્ત કરવા માટે ઑપ્ટિમાઇઝ).', 'type' => 'enum', 'default' => null, 'values' => [null, 'સ્પેક']],
                'search' => ['title' => 'ટેક્સ્ટ શોધો', 'type' => 'શબ્દમાળા', 'default' => null],
                'search_type' => ['title' => 'શોધ પ્રકાર. શૂન્ય અથવા શ્રેણી હોઈ શકે છે.', 'type' => 'enum', 'default' => null, 'values' => [null, 'શ્રેણી']],
                'dir' => ['title' => 'શ્રેણી ID અથવા નામ. સેટ થવા પર આ કેટેગરીમાં ઉત્પાદનો મેળવે છે.', 'type' => 'કોઈપણ', 'default' => null],
                'products_only' => ['title' => 'ફક્ત ઉત્પાદનો મેળવો (શ્રેણીઓ શામેલ નથી).', 'type' => 'બુલિયન', 'default' => false],
                'categories_only' => ['title' => 'ફક્ત કેટેગરીઝ મેળવો (ઉત્પાદનો શામેલ નથી).', 'type' => 'બુલિયન', 'default' => false],
                'need_full_variants' => ['title' => 'સંપૂર્ણ પ્રકાર માહિતી મેળવો.', 'type' => 'બુલિયન', 'default' => false],
                'optimized' => ['title' => '(એડમિન તરીકે ઉત્પાદનો મેળવતી વખતે જ) કિંમત, દર અથવા આંકડા વિના ઉત્પાદન સૂચિ મેળવો.', 'type' => 'બુલિયન', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'એરે',
                    '_object' => 'ઉત્પાદન',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'એરે',
                    '_object' => 'શ્રેણી',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'પદાર્થ',
                    '_object' => 'શ્રેણી',
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
            'description' => 'ઉત્પાદન માહિતી અને આંકડા મેળવો.',
            'url' => 'દુકાનો/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'પદાર્થ',
                    '_object' => 'ઉત્પાદન',
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
                    '_type' => 'એરે',
                    '_object' => 'પ્રોડક્ટ-ડેટા',
                    'title' => 'છેલ્લા 30 દિવસનો ડેટા',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'માહિતી માટે ઓર્ડર.',
                    'type' => 'વર્ચ્યુઅલ: ગણતરી (ઇન્ટ)|ભૌતિક: [કાઉન્ટ, ડિલિવરી_સ્ટેટ] (એરે)'
                ],

                'new_comments_count' => [
                    'title' => 'નવી ટિપ્પણીઓની ગણતરી.',
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
            'description' => 'દુકાનમાં નવું ઉત્પાદન ઉમેરો.',
            'url' => 'દુકાનો/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ઉત્પાદન / સેવાનો પ્રકાર સેટ કરો.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ઉત્પાદનની કિંમત.', 'type' => 'ફ્લોટ', 'require' => true],
                'commission' => ['title' => 'કિંમતમાં કમિશન ઉમેરો.', 'type' => 'ફ્લોટ', 'default' => 0],
                'discount' => ['title' => 'ડિફૉલ્ટ ઉત્પાદન કિંમત ડિસ્કાઉન્ટ.', 'type' => 'ફ્લોટ', 'default' => 0],
                'dis_start' => ['title' => 'UTC ટાઈમ ઝોનમાં ડિસ્કાઉન્ટનો પ્રારંભ સમય (ફોર્મેટ: YYYY-MM-DD HH:mm:ss).', 'type' => 'તારીખ', 'default' => null],
                'dis_end' => ['title' => 'UTC સમય ઝોનમાં ડિસ્કાઉન્ટ સમાપ્તિ સમય (ફોર્મેટ: YYYY-MM-DD HH:mm:ss).', 'type' => 'તારીખ', 'default' => null],
                'currency' => ['title' => 'ચલણ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ઉત્પાદનનું શીર્ષક.", 'type' => 'શબ્દમાળા', 'require' => true],
                'title_en' => ['title' => 'ઉત્પાદનનું અંગ્રેજી શીર્ષક (અથવા પેટા શીર્ષક)', 'type' => 'શબ્દમાળા', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'શબ્દમાળા', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'શબ્દમાળા', 'default' => null],
                'gtin' => ['title' => "ઉત્પાદનનો વૈશ્વિક વેપાર આઇટમ નંબર.", 'type' => 'શબ્દમાળા', 'default' => null],
                'gpc' => ['title' => 'Google ઉત્પાદન શ્રેણી કોડ.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "તમારા સ્ટોરમાં આઇટમની વર્તમાન સ્થિતિ.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'જો ઇનપુટ ફીલ્ડ અસ્તિત્વમાં હોય તો વપરાશકર્તાને સંદેશ બતાવો (વર્ચ્યુઅલ ઉત્પાદનો માટે વપરાય છે).', 'type' => 'શબ્દમાળા', 'default' => null],
                'inputs' => ['title' => 'વૈકલ્પિક ઇનપુટ ફીલ્ડ્સ (વર્ચ્યુઅલ પ્રોડક્ટ્સ માટે વપરાય છે).', 'type' => 'જેસન', 'default' => null],
                'outputs' => ['title' => 'વૈકલ્પિક આઉટપુટ ફીલ્ડ્સ (વર્ચ્યુઅલ પ્રોડક્ટ્સ માટે વપરાય છે).', 'type' => 'જેસન', 'default' => false],
                'blog' => ['title' => 'વૈકલ્પિક બ્લોગ અથવા વેબસાઇટ url.', 'type' => 'શબ્દમાળા', 'default' => false],
                'status' => ['title' => 'પ્રોડક્ટ સ્ટેટસ ઓપન/ક્લોઝ, ડિફોલ્ટ ઓપન છે.', 'type' => 'enum', 'default' => 'ખોલો', 'values' => ['ખોલો', 'બંધ કરો']],
                'category_id' => ['title' => 'શ્રેણી આઈડી.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'લીડ ટાઇમ કલાકોમાં..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'ઉત્પાદનની શૈલી (જેસન).', 'type' => 'જેસન', 'default' => null],
                'brand' => ['title' => 'પ્રોડક્ટની બ્રાન્ડ..', 'type' => 'શબ્દમાળા', 'default' => null],
                'warranty' => ['title' => 'વોરંટી વર્ણન..', 'type' => 'શબ્દમાળા', 'default' => null],
                'original' => ['title' => 'આ ઉત્પાદન મૂળ છે?', 'type' => 'બુલિયન', 'default' => false],
                'return_warranty' => ['title' => 'દિવસો દ્વારા વોરંટી પરત કરો.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'પદાર્થ',
                    '_object' => 'ઉત્પાદન',
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
            'description' => 'દુકાનમાં નવું ઉત્પાદન ઉમેરો.',
            'url' => 'દુકાનો/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ઉત્પાદન / સેવાનો પ્રકાર સેટ કરો.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ઉત્પાદનની કિંમત.', 'type' => 'ફ્લોટ', 'require' => true],
                'commission' => ['title' => 'કિંમતમાં કમિશન ઉમેરો.', 'type' => 'ફ્લોટ', 'default' => 0],
                'discount' => ['title' => 'ડિફૉલ્ટ ઉત્પાદન કિંમત ડિસ્કાઉન્ટ.', 'type' => 'ફ્લોટ', 'default' => 0],
                'dis_start' => ['title' => 'UTC ટાઈમ ઝોનમાં ડિસ્કાઉન્ટનો પ્રારંભ સમય (ફોર્મેટ: YYYY-MM-DD HH:mm:ss).', 'type' => 'તારીખ', 'default' => null],
                'dis_end' => ['title' => 'UTC સમય ઝોનમાં ડિસ્કાઉન્ટ સમાપ્તિ સમય (ફોર્મેટ: YYYY-MM-DD HH:mm:ss).', 'type' => 'તારીખ', 'default' => null],
                'currency' => ['title' => 'ચલણ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ઉત્પાદનનું શીર્ષક.", 'type' => 'શબ્દમાળા', 'require' => true],
                'title_en' => ['title' => 'ઉત્પાદનનું અંગ્રેજી શીર્ષક (અથવા પેટા શીર્ષક)', 'type' => 'શબ્દમાળા', 'default' => null],
                'message' => ['title' => 'જો ઇનપુટ ફીલ્ડ અસ્તિત્વમાં હોય તો વપરાશકર્તાને સંદેશ બતાવો (વર્ચ્યુઅલ ઉત્પાદનો માટે વપરાય છે).', 'type' => 'શબ્દમાળા', 'default' => null],
                'inputs' => ['title' => 'વૈકલ્પિક ઇનપુટ ફીલ્ડ્સ (વર્ચ્યુઅલ પ્રોડક્ટ્સ માટે વપરાય છે).', 'type' => 'જેસન', 'default' => null],
                'outputs' => ['title' => 'વૈકલ્પિક આઉટપુટ ફીલ્ડ્સ (વર્ચ્યુઅલ પ્રોડક્ટ્સ માટે વપરાય છે).', 'type' => 'જેસન', 'default' => false],
                'blog' => ['title' => 'વૈકલ્પિક બ્લોગ અથવા વેબસાઇટ url.', 'type' => 'શબ્દમાળા', 'default' => false],
                'status' => ['title' => 'પ્રોડક્ટ સ્ટેટસ ઓપન/ક્લોઝ, ડિફોલ્ટ ઓપન છે.', 'type' => 'enum', 'default' => 'ખોલો', 'values' => ['ખોલો', 'બંધ કરો']],
                'category_id' => ['title' => 'શ્રેણી આઈડી.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'લીડ ટાઇમ કલાકોમાં..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'ઉત્પાદનની શૈલી (જેસન).', 'type' => 'જેસન', 'default' => null],
                'brand' => ['title' => 'પ્રોડક્ટની બ્રાન્ડ..', 'type' => 'શબ્દમાળા', 'default' => null],
                'warranty' => ['title' => 'વોરંટી વર્ણન..', 'type' => 'શબ્દમાળા', 'default' => null],
                'original' => ['title' => 'આ ઉત્પાદન મૂળ છે?', 'type' => 'બુલિયન', 'default' => false],
                'return_warranty' => ['title' => 'દિવસો દ્વારા વોરંટી પરત કરો.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'પદાર્થ',
                    '_object' => 'ઉત્પાદન',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'સફળતાપૂર્વક ઉત્પાદન સ્થિતિ અપડેટ કરી.', 'type' => 'બુલિયન'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'રિપોઝીટરીમાંથી sku દ્વારા દુકાનમાં નવું ઉત્પાદન ઉમેરો.',
            'url' => 'દુકાનો/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'શબ્દમાળા', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'ઓટો સેટ કેટેગરી', 'type' => 'બુલિયન', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'દુકાનમાં કેટેગરી આઈડી દ્વારા આ કેટેગરીમાં પ્રોડક્ટ ઉમેરો.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'ઉત્પાદનની કિંમત.', 'type' => 'ફ્લોટ', 'require' => true],
                'currency' => ['title' => 'ચલણ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'જથ્થો', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'પદાર્થ',
                    '_object' => 'ઉત્પાદન',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'સફળતાપૂર્વક ઉત્પાદન સ્થિતિ અપડેટ કરી.', 'type' => 'બુલિયન'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
