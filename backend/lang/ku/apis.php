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
            'description' => 'Lîsteya hilberên dikanê bistînin.',
            'url' => 'dikan/{shop_id}/hilber/hemû-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Tenê hilberên berdest nîşan bide. Dibe ku rast an derewîn be.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Hiyerarşiya kategoriya dêûbav bistînin. Dibe ku rast an derewîn be.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Dûrxistina navnîşa hilberê (ji bo pagasyonê).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Hejmara hilberên di navnîşê de (ji bo pagasyonê).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Lîsteya cureya cureyê', 'type' => 'enum', 'default' => null, 'values' => [null, 'girêdayî', 'herî_serdan kirin', 'herî_popular', 'nûtirîn', 'bestfirotin', 'herî erzan', 'herî_biha', 'random', 'girêdayî', 'favorite', 'random']],
                'product_id' => ['title' => 'Hilbera ID ji bo vegerandina hilberên têkildar (cûre = têkildar) tê bikar anîn.', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Daneyên hilberê hilberê. Dikare null an spekulatîf be (null: xwerû, spec: ji bo wergirtina taybetmendiyan xweşbîn kirin).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Li nivîsê bigerin', 'type' => 'string', 'default' => null],
                'search_type' => ['title' => 'Tîpa lêgerînê. Dibe ku null an kategorî be.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategori']],
                'dir' => ['title' => 'Kategorî ID an nav. Dema ku hatî danîn hilberên di vê kategoriyê de digire.', 'type' => 'any', 'default' => null],
                'products_only' => ['title' => 'Tenê hilberan bistînin (kategorî ne tê de).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Tenê kategoriyan bistînin (hilberên ku di nav de ne).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Agahdariya guhertoya tevahî bistînin.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Tenê dema ku hilberan wekî rêveber digirin) Navnîşa hilberê bêyî biha, rêje, an statîstîk bistînin.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'array',
                    '_object' => 'Product',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'array',
                    '_object' => 'Kategorî',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'object',
                    '_object' => 'Kategorî',
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
            'description' => 'Agahdarî û statîstîkên hilberê bistînin.',
            'url' => 'dikan/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'object',
                    '_object' => 'Product',
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
                    '_object' => 'Berhem-Daneyên',
                    'title' => 'Daneyên 30 rojên dawî',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Orders que info.',
                    'type' => 'Virtual: hejmartin (int)|Fîzîkî: [hejmar, rewsa_ teslîmkirinê] (array)'
                ],

                'new_comments_count' => [
                    'title' => 'Şîroveyên nû têne hejmartin.',
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
            'description' => 'Hilberek nû li firotgehê zêde bikin.',
            'url' => 'dikan/{shop_id}/berhem/lê zêdekirin',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Cureyê hilber / karûbarê destnîşan bikin.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Bihayê hilberê.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'Komîsyon li bihayê zêde bikin.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'Daxistina bihayê hilberê ya standard.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'Dema destpêkirina dakêşanê li qada demjimêra UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'dis_end' => ['title' => 'Dema dawîlêanîna dakêşanê li qada demjimêra UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'currency' => ['title' => 'Dirav,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Sernavê hilberê.", 'type' => 'string', 'require' => true],
                'title_en' => ['title' => 'Sernavê Englishngilîzî ya hilberê (an sernavê jêrîn)', 'type' => 'string', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'string', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'string', 'default' => null],
                'gtin' => ['title' => "Hejmara Bazirganiya Gerdûnî ya Hilberê.", 'type' => 'string', 'default' => null],
                'gpc' => ['title' => 'Koda kategoriya hilberê Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Di dikana we de rewşa heyî ya tiştan.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Ger qadên têketinê hebin (ji bo hilberên virtual têne bikar anîn) peyam ji bikarhêner re nîşan bide.', 'type' => 'string', 'default' => null],
                'inputs' => ['title' => 'Zeviyên têketina bijarte (ji bo hilberên virtual têne bikar anîn).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Zeviyên derketinê yên bijartî (ji bo hilberên virtual têne bikar anîn).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog an jî url malperê bijartî.', 'type' => 'string', 'default' => false],
                'status' => ['title' => 'statûya hilberê Vekirî / Girtin, Pêşniyaz vekirî ye.', 'type' => 'enum', 'default' => 'Vekirin', 'values' => ['Vekirin', 'Close']],
                'category_id' => ['title' => 'id kategoriyê.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Demjimêr bi saetan..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Şêweya hilberê (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Nîşana hilberê..', 'type' => 'string', 'default' => null],
                'warranty' => ['title' => 'ravekirina garantiyê..', 'type' => 'string', 'default' => null],
                'original' => ['title' => 'Ev hilber orjînal e?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garantiya vegerê bi rojan.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'object',
                    '_object' => 'Product',
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
            'description' => 'Hilberek nû li firotgehê zêde bikin.',
            'url' => 'dikan/{shop_id}/products/{product_id}/biguherîne',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Cureyê hilber / karûbarê destnîşan bikin.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Bihayê hilberê.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'Komîsyon li bihayê zêde bikin.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'Daxistina bihayê hilberê ya standard.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'Dema destpêkirina dakêşanê li qada demjimêra UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'dis_end' => ['title' => 'Dema dawîlêanîna dakêşanê li qada demjimêra UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'currency' => ['title' => 'Dirav,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Sernavê hilberê.", 'type' => 'string', 'require' => true],
                'title_en' => ['title' => 'Sernavê Englishngilîzî ya hilberê (an sernavê jêrîn)', 'type' => 'string', 'default' => null],
                'message' => ['title' => 'Ger qadên têketinê hebin (ji bo hilberên virtual têne bikar anîn) peyam ji bikarhêner re nîşan bide.', 'type' => 'string', 'default' => null],
                'inputs' => ['title' => 'Zeviyên têketina bijarte (ji bo hilberên virtual têne bikar anîn).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Zeviyên derketinê yên bijartî (ji bo hilberên virtual têne bikar anîn).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog an jî url malperê bijartî.', 'type' => 'string', 'default' => false],
                'status' => ['title' => 'statûya hilberê Vekirî / Girtin, Pêşniyaz vekirî ye.', 'type' => 'enum', 'default' => 'Vekirin', 'values' => ['Vekirin', 'Close']],
                'category_id' => ['title' => 'id kategoriyê.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Demjimêr bi saetan..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Şêweya hilberê (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Nîşana hilberê..', 'type' => 'string', 'default' => null],
                'warranty' => ['title' => 'ravekirina garantiyê..', 'type' => 'string', 'default' => null],
                'original' => ['title' => 'Ev hilber orjînal e?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garantiya vegerê bi rojan.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'object',
                    '_object' => 'Product',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Serkeftina rewşa hilberê ya nûvekirî.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Hilbera nû ji depoyê bi sku li dikanê zêde bikin.',
            'url' => 'dikan/{shop_id}/berhem-depo/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'string', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'kategoriya set Auto', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Hilber li gorî id kategoriyê li dikanê li vê kategoriyê zêde bike.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Bihayê hilberê.', 'type' => 'float', 'require' => true],
                'currency' => ['title' => 'Dirav,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Quantity', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'object',
                    '_object' => 'Product',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Serkeftina rewşa hilberê ya nûvekirî.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
