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
            'description' => 'באַקומען די רשימה פון פּראָדוקטן פון די קראָם.',
            'url' => 'שאַפּס/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'ווייַזן בלויז בנימצא פּראָדוקטן. קענען זיין אמת אָדער פאַלש.', 'type' => 'בוליאַן', 'default' => false],
                'with_parent' => ['title' => 'באַקומען די פאָטער קאַטעגאָריע כייעראַרקי. קענען זיין אמת אָדער פאַלש.', 'type' => 'בוליאַן', 'default' => false],
                'offset' => ['title' => 'פאָטאָ פון די פּראָדוקט רשימה (פֿאַר פּאַדזשאַניישאַן).', 'type' => 'ינט', 'default' => 0],
                'limit' => ['title' => 'נומער פון פּראָדוקטן אין דער רשימה (פֿאַר פּאַדזשאַניישאַן).', 'type' => 'ינט', 'default' => 20],
                'sort' => ['title' => 'רשימה סאָרט טיפּ', 'type' => 'enum', 'default' => null, 'values' => [null, 'שייַכות', 'מערסט_באזוכט', 'מערסט_פּאַפּיאַלער', 'נואַסט', 'בעסצעלער', 'טשיפּאַסט', 'מערסט_טיער', 'טראַפ', 'שייַכות', 'באַליבט', 'טראַפ']],
                'product_id' => ['title' => 'פּראָדוקט ID געניצט צו צוריקקומען פֿאַרבונדענע פּראָדוקטן (סאָרט = שייַכות).', 'type' => 'ינט', 'default' => null],
                'set' => ['title' => 'פּראָדוקט דאַטן שטעלן. קענען זיין נאַל אָדער ספּעק (נול: פעליקייַט, ספּעק: אָפּטימיזעד פֿאַר ריטריווינג ספּעסאַפאַקיישאַנז).', 'type' => 'enum', 'default' => null, 'values' => [null, 'ספּעק']],
                'search' => ['title' => 'זוכן טעקסט', 'type' => 'שטריקל', 'default' => null],
                'search_type' => ['title' => 'זוכן טיפּ. קענען זיין נאַל אָדער קאַטעגאָריע.', 'type' => 'enum', 'default' => null, 'values' => [null, 'קאַטעגאָריע']],
                'dir' => ['title' => 'קאַטעגאָריע ID אָדער נאָמען. געץ פּראָדוקטן אין דעם קאַטעגאָריע ווען שטעלן.', 'type' => 'קיין', 'default' => null],
                'products_only' => ['title' => 'באַקומען בלויז פּראָדוקטן (קאַטעגאָריעס ניט אַרייַנגערעכנט).', 'type' => 'בוליאַן', 'default' => false],
                'categories_only' => ['title' => 'באַקומען בלויז קאַטעגאָריעס (פּראָדוקטן ניט אַרייַנגערעכנט).', 'type' => 'בוליאַן', 'default' => false],
                'need_full_variants' => ['title' => 'באַקומען פול וואַריאַנט אינפֿאָרמאַציע.', 'type' => 'בוליאַן', 'default' => false],
                'optimized' => ['title' => '(בלויז ווען איר באַקומען פּראָדוקטן ווי אַ אַדמיניסטראַטאָר) באַקומען די פּראָדוקט רשימה אָן פּרייַז, קורס אָדער סטאַטיסטיק.', 'type' => 'בוליאַן', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'מענגע',
                    '_object' => 'פּראָדוקט',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'מענגע',
                    '_object' => 'קאַטעגאָריע',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'כייפעץ',
                    '_object' => 'קאַטעגאָריע',
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
            'description' => 'באַקומען פּראָדוקט אינפֿאָרמאַציע און סטאַטיסטיק.',
            'url' => 'שאַפּס/{שאָפּ_יד}/פּראָדוקטן/{פּראָדוקט_יד}/אַדמין',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'כייפעץ',
                    '_object' => 'פּראָדוקט',
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
                    '_type' => 'מענגע',
                    '_object' => 'פּראָדוקט-דאַטאַ',
                    'title' => 'לעצטע 30 טעג דאַטן',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'אָרדערס מיט אינפֿאָרמאַציע.',
                    'type' => 'ווירטועל: ציילן (ינט)|פיזיש: [ציילן, עקספּרעס_שטאַט] (מענגע)'
                ],

                'new_comments_count' => [
                    'title' => 'ניו באַמערקונגען ציילן.',
                    'type' => 'ינט'
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
            'description' => 'לייג נייַ פּראָדוקט צו די קראָם.',
            'url' => 'שאַפּס/{שאָפּ_יד}/פּראָדוקט/אַד',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'שטעלן די טיפּ פון פּראָדוקט / דינסט.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'פּרייַז פון די פּראָדוקט.', 'type' => 'שווימען', 'require' => true],
                'commission' => ['title' => 'לייג קאָמיסיע צו פּרייַז.', 'type' => 'שווימען', 'default' => 0],
                'discount' => ['title' => 'פעליקייַט פּראָדוקט פּרייַז אַראָפּרעכענען.', 'type' => 'שווימען', 'default' => 0],
                'dis_start' => ['title' => 'אַראָפּרעכענען אָנהייב צייט אין די UTC צייט זאָנע (פֿאָרמאַט: YYYY-MM-DD HH:mm:ss).', 'type' => 'טאָג', 'default' => null],
                'dis_end' => ['title' => 'אַראָפּרעכענען סוף צייט אין די UTC צייט זאָנע (פֿאָרמאַט: YYYY-MM-DD HH:mm:ss).', 'type' => 'טאָג', 'default' => null],
                'currency' => ['title' => 'קראַנטקייַט,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "פּראָדוקט טיטל.", 'type' => 'שטריקל', 'require' => true],
                'title_en' => ['title' => 'ענגליש טיטל פון די פּראָדוקט (אָדער סאַב טיטל)', 'type' => 'שטריקל', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'שטריקל', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'שטריקל', 'default' => null],
                'gtin' => ['title' => "פּראָדוקט ס גלאבאלע האַנדל נומער נומער.", 'type' => 'שטריקל', 'default' => null],
                'gpc' => ['title' => 'Google פּראָדוקט קאַטעגאָריע קאָד.', 'type' => 'ינט', 'default' => null],
                'condition' => ['title' => "די איצטיקע צושטאַנד פון די פּראָדוקט אין דיין קראָם.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'אָנזאָג ווייַזן צו דער באַניצער אויב אַרייַנשרייַב פעלדער עקסיסטירן (געוויינט פֿאַר ווירטואַל פּראָדוקטן).', 'type' => 'שטריקל', 'default' => null],
                'inputs' => ['title' => 'אָפּטיאָנאַל אַרייַנשרייַב פעלדער (געוויינט פֿאַר ווירטואַל פּראָדוקטן).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'אָפּטיאָנאַל רעזולטאַט פעלדער (געוויינט פֿאַר ווירטואַל פּראָדוקטן).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'אַפּשאַנאַל בלאָג אָדער וועבזייטל URL.', 'type' => 'שטריקל', 'default' => false],
                'status' => ['title' => 'פּראָדוקט סטאַטוס עפֿן / נאָענט, דיפאָלט איז עפֿן.', 'type' => 'enum', 'default' => 'עפענען', 'values' => ['עפענען', 'נאָענט']],
                'category_id' => ['title' => 'קאַטעגאָריע שייַן.', 'type' => 'ינט', 'default' => null],
                'lead' => ['title' => 'לידינג צייט אין שעה..', 'type' => 'ינט', 'default' => null],
                'style' => ['title' => 'נוסח פון פּראָדוקט (דזשסאָן).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'פּראָדוקט סאָרט ..', 'type' => 'שטריקל', 'default' => null],
                'warranty' => ['title' => 'וואָראַנטי באַשרייַבונג ..', 'type' => 'שטריקל', 'default' => null],
                'original' => ['title' => 'דער פּראָדוקט איז אָריגינעל?', 'type' => 'בוליאַן', 'default' => false],
                'return_warranty' => ['title' => 'צוריקקומען וואָראַנטי דורך טעג.', 'type' => 'ינט', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'כייפעץ',
                    '_object' => 'פּראָדוקט',
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
            'description' => 'לייג נייַ פּראָדוקט צו די קראָם.',
            'url' => 'שאַפּס/{שאָפּ_יד}/פּראָדוקטן/{פּראָדוקט_יד}/רעדאַגירן',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'שטעלן די טיפּ פון פּראָדוקט / דינסט.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'פּרייַז פון די פּראָדוקט.', 'type' => 'שווימען', 'require' => true],
                'commission' => ['title' => 'לייג קאָמיסיע צו פּרייַז.', 'type' => 'שווימען', 'default' => 0],
                'discount' => ['title' => 'פעליקייַט פּראָדוקט פּרייַז אַראָפּרעכענען.', 'type' => 'שווימען', 'default' => 0],
                'dis_start' => ['title' => 'אַראָפּרעכענען אָנהייב צייט אין די UTC צייט זאָנע (פֿאָרמאַט: YYYY-MM-DD HH:mm:ss).', 'type' => 'טאָג', 'default' => null],
                'dis_end' => ['title' => 'אַראָפּרעכענען סוף צייט אין די UTC צייט זאָנע (פֿאָרמאַט: YYYY-MM-DD HH:mm:ss).', 'type' => 'טאָג', 'default' => null],
                'currency' => ['title' => 'קראַנטקייַט,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "פּראָדוקט טיטל.", 'type' => 'שטריקל', 'require' => true],
                'title_en' => ['title' => 'ענגליש טיטל פון די פּראָדוקט (אָדער סאַב טיטל)', 'type' => 'שטריקל', 'default' => null],
                'message' => ['title' => 'אָנזאָג ווייַזן צו דער באַניצער אויב אַרייַנשרייַב פעלדער עקסיסטירן (געוויינט פֿאַר ווירטואַל פּראָדוקטן).', 'type' => 'שטריקל', 'default' => null],
                'inputs' => ['title' => 'אָפּטיאָנאַל אַרייַנשרייַב פעלדער (געוויינט פֿאַר ווירטואַל פּראָדוקטן).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'אָפּטיאָנאַל רעזולטאַט פעלדער (געוויינט פֿאַר ווירטואַל פּראָדוקטן).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'אַפּשאַנאַל בלאָג אָדער וועבזייטל URL.', 'type' => 'שטריקל', 'default' => false],
                'status' => ['title' => 'פּראָדוקט סטאַטוס עפֿן / נאָענט, דיפאָלט איז עפֿן.', 'type' => 'enum', 'default' => 'עפענען', 'values' => ['עפענען', 'נאָענט']],
                'category_id' => ['title' => 'קאַטעגאָריע שייַן.', 'type' => 'ינט', 'default' => null],
                'lead' => ['title' => 'לידינג צייט אין שעה..', 'type' => 'ינט', 'default' => null],
                'style' => ['title' => 'נוסח פון פּראָדוקט (דזשסאָן).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'פּראָדוקט סאָרט ..', 'type' => 'שטריקל', 'default' => null],
                'warranty' => ['title' => 'וואָראַנטי באַשרייַבונג ..', 'type' => 'שטריקל', 'default' => null],
                'original' => ['title' => 'דער פּראָדוקט איז אָריגינעל?', 'type' => 'בוליאַן', 'default' => false],
                'return_warranty' => ['title' => 'צוריקקומען וואָראַנטי דורך טעג.', 'type' => 'ינט', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'כייפעץ',
                    '_object' => 'פּראָדוקט',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'הצלחה דערהייַנטיקט פּראָדוקט שטאַט.', 'type' => 'בוליאַן'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'לייג נייַ פּראָדוקט פֿון ריפּאַזאַטאָרי דורך סקו צו די קראָם.',
            'url' => 'שאַפּס/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'שטריקל', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'אַוטאָ שטעלן קאַטעגאָריע', 'type' => 'בוליאַן', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'פּראָדוקט לייג צו דעם קאַטעגאָריע דורך קאַטעגאָריע שייַן אין די קראָם.', 'type' => 'ינט', 'default' => null],

                'price' => ['title' => 'פּרייַז פון די פּראָדוקט.', 'type' => 'שווימען', 'require' => true],
                'currency' => ['title' => 'קראַנטקייַט,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'קוואַנטיטי', 'type' => 'ינט', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'כייפעץ',
                    '_object' => 'פּראָדוקט',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'הצלחה דערהייַנטיקט פּראָדוקט שטאַט.', 'type' => 'בוליאַן'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
