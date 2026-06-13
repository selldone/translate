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
            'description' => 'Ստացեք խանութի ապրանքների ցանկը:',
            'url' => 'խանութներ/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Ցույց տալ միայն մատչելի ապրանքները: Կարող է լինել ճիշտ կամ կեղծ:', 'type' => 'բուլյան', 'default' => false],
                'with_parent' => ['title' => 'Ստացեք ծնողական կատեգորիայի հիերարխիան: Կարող է լինել ճիշտ կամ կեղծ:', 'type' => 'բուլյան', 'default' => false],
                'offset' => ['title' => 'Ապրանքների ցանկի օֆսեթ (էջադրման համար):', 'type' => 'միջ', 'default' => 0],
                'limit' => ['title' => 'Ապրանքների քանակը ցանկում (էջադրման համար):', 'type' => 'միջ', 'default' => 20],
                'sort' => ['title' => 'Ցուցակի տեսակավորման տեսակը', 'type' => 'թվ', 'default' => null, 'values' => [null, 'կապված', 'առավել_այցելված', 'ամենահայտնի', 'նորագույն', 'բեսթսելլեր', 'ամենաէժան', 'ամենաթանկը', 'պատահական', 'կապված', 'սիրելի', 'պատահական']],
                'product_id' => ['title' => 'Ապրանք ID օգտագործվում է հարակից ապրանքները վերադարձնելու համար (տեսակավորում = կապված):', 'type' => 'միջ', 'default' => null],
                'set' => ['title' => 'Ապրանքի տվյալների հավաքածու. Կարող է լինել null կամ spec (null՝ լռելյայն, spec. օպտիմիզացված՝ սպեցիֆիկացիաները ստանալու համար):', 'type' => 'թվ', 'default' => null, 'values' => [null, 'մասն']],
                'search' => ['title' => 'Որոնել տեքստ', 'type' => 'լար', 'default' => null],
                'search_type' => ['title' => 'Որոնման տեսակը. Կարող է լինել զրոյական կամ կատեգորիա:', 'type' => 'թվ', 'default' => null, 'values' => [null, 'կատեգորիա']],
                'dir' => ['title' => 'Կատեգորիա ID կամ անունը. Ստանում է այս կատեգորիայի արտադրանքը, երբ սահմանվում է:', 'type' => 'ցանկացած', 'default' => null],
                'products_only' => ['title' => 'Ստացեք միայն ապրանքներ (կատեգորիաները ներառված չեն):', 'type' => 'բուլյան', 'default' => false],
                'categories_only' => ['title' => 'Ստացեք միայն կատեգորիաներ (ապրանքները ներառված չեն):', 'type' => 'բուլյան', 'default' => false],
                'need_full_variants' => ['title' => 'Ստացեք ամբողջական տարբերակի մասին տեղեկատվություն:', 'type' => 'բուլյան', 'default' => false],
                'optimized' => ['title' => '(Միայն որպես ադմինիստրատոր ապրանքներ ստանալու դեպքում) Ստացեք ապրանքների ցանկը առանց գնի, դրույքաչափի կամ վիճակագրության:', 'type' => 'բուլյան', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'զանգված',
                    '_object' => 'Արտադրանք',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'զանգված',
                    '_object' => 'Կարգավիճակ',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'օբյեկտ',
                    '_object' => 'Կարգավիճակ',
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
            'description' => 'Ստացեք արտադրանքի մասին տեղեկատվություն և վիճակագրություն:',
            'url' => 'խանութներ/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'օբյեկտ',
                    '_object' => 'Արտադրանք',
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
                    '_type' => 'զանգված',
                    '_object' => 'Ապրանք-Տվյալներ',
                    'title' => 'վերջին 30 օրվա տվյալները',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Պատվերներ que info.',
                    'type' => 'Վիրտուալ՝ հաշվարկ (int)|Ֆիզիկական՝ [count, delivery_state] (զանգված)'
                ],

                'new_comments_count' => [
                    'title' => 'Հաշվում են նոր մեկնաբանությունները:',
                    'type' => 'միջ'
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
            'description' => 'Խանութում ավելացրեք նոր ապրանք:',
            'url' => 'խանութներ/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Սահմանել ապրանքի / ծառայության տեսակը:', 'type' => 'թվ', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Ապրանքի գինը.', 'type' => 'լողալ', 'require' => true],
                'commission' => ['title' => 'Գին ավելացրեք միջնորդավճար:', 'type' => 'լողալ', 'default' => 0],
                'discount' => ['title' => 'Կանխադրված արտադրանքի գնի զեղչ:', 'type' => 'լողալ', 'default' => 0],
                'dis_start' => ['title' => 'Զեղչի մեկնարկի ժամը UTC ժամային գոտում (ձևաչափ՝ YYYY-MM-DD HH:mm:ss):', 'type' => 'ամսաթիվը', 'default' => null],
                'dis_end' => ['title' => 'Զեղչի ավարտի ժամը UTC ժամային գոտում (ձևաչափ՝ YYYY-MM-DD HH:mm:ss):', 'type' => 'ամսաթիվը', 'default' => null],
                'currency' => ['title' => 'Արժույթ,', 'type' => 'թվ', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Ապրանքի անվանումը.", 'type' => 'լար', 'require' => true],
                'title_en' => ['title' => 'Ապրանքի անգլերեն անվանումը (կամ ենթավերնագիրը)', 'type' => 'լար', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'լար', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'լար', 'default' => null],
                'gtin' => ['title' => "Ապրանքի գլոբալ առևտրի ապրանքի համարը:", 'type' => 'լար', 'default' => null],
                'gpc' => ['title' => 'Google արտադրանքի կատեգորիայի կոդը:', 'type' => 'միջ', 'default' => null],
                'condition' => ['title' => "Ապրանքի ներկայիս վիճակը ձեր խանութում:", 'type' => 'թվ', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Հաղորդագրության ցուցադրում օգտագործողին, եթե առկա են մուտքային դաշտեր (օգտագործվում են վիրտուալ արտադրանքների համար):', 'type' => 'լար', 'default' => null],
                'inputs' => ['title' => 'Ընտրովի մուտքագրման դաշտեր (օգտագործվում է վիրտուալ արտադրանքի համար):', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Լրացուցիչ ելքային դաշտեր (օգտագործվում է վիրտուալ արտադրանքի համար):', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Ընտրովի բլոգ կամ կայքի url:', 'type' => 'լար', 'default' => false],
                'status' => ['title' => 'արտադրանքի կարգավիճակը Բաց / Փակ, Կանխադրվածը բաց է:', 'type' => 'թվ', 'default' => 'Բաց', 'values' => ['Բաց', 'Փակել']],
                'category_id' => ['title' => 'կատեգորիայի id.', 'type' => 'միջ', 'default' => null],
                'lead' => ['title' => 'Առաջադրման ժամանակը ժամերով..', 'type' => 'միջ', 'default' => null],
                'style' => ['title' => 'Ապրանքի ոճը (Json):', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Ապրանքի ապրանքանիշ..', 'type' => 'լար', 'default' => null],
                'warranty' => ['title' => 'երաշխիքային նկարագրություն..', 'type' => 'լար', 'default' => null],
                'original' => ['title' => 'Այս ապրանքը օրիգինալ է?', 'type' => 'բուլյան', 'default' => false],
                'return_warranty' => ['title' => 'Վերադարձի երաշխիք ըստ օրերի:', 'type' => 'միջ', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'օբյեկտ',
                    '_object' => 'Արտադրանք',
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
            'description' => 'Խանութում ավելացրեք նոր ապրանք:',
            'url' => 'խանութներ/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Սահմանել ապրանքի / ծառայության տեսակը:', 'type' => 'թվ', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Ապրանքի գինը.', 'type' => 'լողալ', 'require' => true],
                'commission' => ['title' => 'Գին ավելացրեք միջնորդավճար:', 'type' => 'լողալ', 'default' => 0],
                'discount' => ['title' => 'Կանխադրված արտադրանքի գնի զեղչ:', 'type' => 'լողալ', 'default' => 0],
                'dis_start' => ['title' => 'Զեղչի մեկնարկի ժամը UTC ժամային գոտում (ձևաչափ՝ YYYY-MM-DD HH:mm:ss):', 'type' => 'ամսաթիվը', 'default' => null],
                'dis_end' => ['title' => 'Զեղչի ավարտի ժամը UTC ժամային գոտում (ձևաչափ՝ YYYY-MM-DD HH:mm:ss):', 'type' => 'ամսաթիվը', 'default' => null],
                'currency' => ['title' => 'Արժույթ,', 'type' => 'թվ', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Ապրանքի անվանումը.", 'type' => 'լար', 'require' => true],
                'title_en' => ['title' => 'Ապրանքի անգլերեն անվանումը (կամ ենթավերնագիրը)', 'type' => 'լար', 'default' => null],
                'message' => ['title' => 'Հաղորդագրության ցուցադրում օգտագործողին, եթե առկա են մուտքային դաշտեր (օգտագործվում են վիրտուալ արտադրանքների համար):', 'type' => 'լար', 'default' => null],
                'inputs' => ['title' => 'Ընտրովի մուտքագրման դաշտեր (օգտագործվում է վիրտուալ արտադրանքի համար):', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Լրացուցիչ ելքային դաշտեր (օգտագործվում է վիրտուալ արտադրանքի համար):', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Ընտրովի բլոգ կամ կայքի url:', 'type' => 'լար', 'default' => false],
                'status' => ['title' => 'արտադրանքի կարգավիճակը Բաց / Փակ, Կանխադրվածը բաց է:', 'type' => 'թվ', 'default' => 'Բաց', 'values' => ['Բաց', 'Փակել']],
                'category_id' => ['title' => 'կատեգորիայի id.', 'type' => 'միջ', 'default' => null],
                'lead' => ['title' => 'Առաջադրման ժամանակը ժամերով..', 'type' => 'միջ', 'default' => null],
                'style' => ['title' => 'Ապրանքի ոճը (Json):', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Ապրանքի ապրանքանիշ..', 'type' => 'լար', 'default' => null],
                'warranty' => ['title' => 'երաշխիքային նկարագրություն..', 'type' => 'լար', 'default' => null],
                'original' => ['title' => 'Այս ապրանքը օրիգինալ է?', 'type' => 'բուլյան', 'default' => false],
                'return_warranty' => ['title' => 'Վերադարձի երաշխիք ըստ օրերի:', 'type' => 'միջ', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'օբյեկտ',
                    '_object' => 'Արտադրանք',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Հաջողությամբ թարմացվել է արտադրանքի վիճակը:', 'type' => 'բուլյան'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Խանութում ավելացրեք նոր ապրանք պահեստից sku-ով:',
            'url' => 'խանութներ/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'լար', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Ավտոմատ հավաքածուի կատեգորիա', 'type' => 'բուլյան', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Ապրանքը ավելացրեք այս կատեգորիային ըստ խանութի կատեգորիայի ID-ի:', 'type' => 'միջ', 'default' => null],

                'price' => ['title' => 'Ապրանքի գինը.', 'type' => 'լողալ', 'require' => true],
                'currency' => ['title' => 'Արժույթ,', 'type' => 'թվ', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Քանակ', 'type' => 'միջ', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'օբյեկտ',
                    '_object' => 'Արտադրանք',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Հաջողությամբ թարմացվել է արտադրանքի վիճակը:', 'type' => 'բուլյան'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
