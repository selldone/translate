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
            'description' => 'Ikseb il-lista tal-prodotti tal-ħanut.',
            'url' => 'ħwienet/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Uri biss il-prodotti disponibbli. Jista\' jkun veru jew falz.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Ikseb il-ġerarkija tal-kategorija ġenitur. Jista\' jkun veru jew falz.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Offset tal-lista tal-prodotti (għall-paġnar).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Numru ta\' prodotti fil-lista (għall-paġnar).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Lista tip sort', 'type' => 'enum', 'default' => null, 'values' => [null, 'relatati', 'l-aktar_visited', 'l-aktar_popolari', 'l-aktar ġodda', 'bestselling', 'irħas', 'l-aktar_għali', 'każwali', 'relatati', 'favorit', 'każwali']],
                'product_id' => ['title' => 'Prodott ID użat biex jirritorna prodotti relatati (sort = relatat).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Sett tad-dejta tal-prodott. Jista\' jkun null jew spec (null: default, spec: ottimizzat għall-irkupru tal-ispeċifikazzjonijiet).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Fittex test', 'type' => 'spag', 'default' => null],
                'search_type' => ['title' => 'Tip ta\' tfittxija. Jista\' jkun null jew kategorija.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategorija']],
                'dir' => ['title' => 'Kategorija ID jew isem. Ikseb prodotti f\'din il-kategorija meta ssettjat.', 'type' => 'kwalunkwe', 'default' => null],
                'products_only' => ['title' => 'Ikseb biss prodotti (kategoriji mhux inklużi).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Ikseb biss kategoriji (prodotti mhux inklużi).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Ikseb informazzjoni sħiħa dwar il-varjanti.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Meta tikseb prodotti bħala amministratur biss) Ikseb il-lista tal-prodotti mingħajr prezz, rata jew statistika.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'firxa',
                    '_object' => 'Prodott',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'firxa',
                    '_object' => 'Kategorija',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'oġġett',
                    '_object' => 'Kategorija',
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
            'description' => 'Ikseb informazzjoni u statistika tal-prodott.',
            'url' => 'ħwienet/{shop_id}/prodotti/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'oġġett',
                    '_object' => 'Prodott',
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
                    '_type' => 'firxa',
                    '_object' => 'Prodott-Dejta',
                    'title' => 'data tal-aħħar 30 jum',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Ordnijiet li info.',
                    'type' => 'Virtwali: għadd (int)|Fiżiku: [count, delivery_state] (matriċi)'
                ],

                'new_comments_count' => [
                    'title' => 'Kummenti ġodda jgħoddu.',
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
            'description' => 'Żid prodott ġdid fil-ħanut.',
            'url' => 'ħwienet/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Issettja t-tip tal-prodott/servizz.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Prezz tal-prodott.', 'type' => 'galleġġjant', 'require' => true],
                'commission' => ['title' => 'Żid il-kummissjoni mal-prezz.', 'type' => 'galleġġjant', 'default' => 0],
                'discount' => ['title' => 'Roħs tal-prezz tal-prodott default.', 'type' => 'galleġġjant', 'default' => 0],
                'dis_start' => ['title' => 'Ħin tal-bidu tal-iskont fiż-żona tal-ħin UTC (format: SSSS-MM-JJ HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Ħin tat-tmiem tal-iskont fiż-żona tal-ħin UTC (format: SSSS-MM-JJ HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'Munita,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titolu tal-prodott.", 'type' => 'spag', 'require' => true],
                'title_en' => ['title' => 'Titolu Ingliż tal-prodott (jew sottotitolu)', 'type' => 'spag', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'spag', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'spag', 'default' => null],
                'gtin' => ['title' => "Numru tal-Oġġett tal-Kummerċ Globali tal-Prodott.", 'type' => 'spag', 'default' => null],
                'gpc' => ['title' => 'Kodiċi tal-kategorija tal-prodott Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Il-kundizzjoni attwali tal-oġġett fil-maħżen tiegħek.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Messaġġ juri lill-utent jekk jeżistux oqsma ta\' input (użati għal prodotti virtwali).', 'type' => 'spag', 'default' => null],
                'inputs' => ['title' => 'Oqsma ta\' input fakultattiva (użati għal prodotti virtwali).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Oqsma tal-output fakultattivi (użati għal prodotti virtwali).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog mhux obbligatorju jew url tal-websajt.', 'type' => 'spag', 'default' => false],
                'status' => ['title' => 'istatus tal-prodott Miftuħ / Agħlaq, Default huwa Miftuħ.', 'type' => 'enum', 'default' => 'Miftuħa', 'values' => ['Miftuħa', 'Agħlaq']],
                'category_id' => ['title' => 'kategorija id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Lead time f\'sigħat..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stil tal-prodott (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Ditta tal-prodott..', 'type' => 'spag', 'default' => null],
                'warranty' => ['title' => 'deskrizzjoni tal-garanzija..', 'type' => 'spag', 'default' => null],
                'original' => ['title' => 'Dan il-prodott huwa oriġinali?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garanzija tar-ritorn bil-jiem.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'oġġett',
                    '_object' => 'Prodott',
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
            'description' => 'Żid prodott ġdid fil-ħanut.',
            'url' => 'ħwienet/{shop_id}/prodotti/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Issettja t-tip tal-prodott/servizz.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Prezz tal-prodott.', 'type' => 'galleġġjant', 'require' => true],
                'commission' => ['title' => 'Żid il-kummissjoni mal-prezz.', 'type' => 'galleġġjant', 'default' => 0],
                'discount' => ['title' => 'Roħs tal-prezz tal-prodott default.', 'type' => 'galleġġjant', 'default' => 0],
                'dis_start' => ['title' => 'Ħin tal-bidu tal-iskont fiż-żona tal-ħin UTC (format: SSSS-MM-JJ HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Ħin tat-tmiem tal-iskont fiż-żona tal-ħin UTC (format: SSSS-MM-JJ HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'Munita,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titolu tal-prodott.", 'type' => 'spag', 'require' => true],
                'title_en' => ['title' => 'Titolu Ingliż tal-prodott (jew sottotitolu)', 'type' => 'spag', 'default' => null],
                'message' => ['title' => 'Messaġġ juri lill-utent jekk jeżistux oqsma ta\' input (użati għal prodotti virtwali).', 'type' => 'spag', 'default' => null],
                'inputs' => ['title' => 'Oqsma ta\' input fakultattiva (użati għal prodotti virtwali).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Oqsma tal-output fakultattivi (użati għal prodotti virtwali).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog mhux obbligatorju jew url tal-websajt.', 'type' => 'spag', 'default' => false],
                'status' => ['title' => 'istatus tal-prodott Miftuħ / Agħlaq, Default huwa Miftuħ.', 'type' => 'enum', 'default' => 'Miftuħa', 'values' => ['Miftuħa', 'Agħlaq']],
                'category_id' => ['title' => 'kategorija id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Lead time f\'sigħat..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stil tal-prodott (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Ditta tal-prodott..', 'type' => 'spag', 'default' => null],
                'warranty' => ['title' => 'deskrizzjoni tal-garanzija..', 'type' => 'spag', 'default' => null],
                'original' => ['title' => 'Dan il-prodott huwa oriġinali?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garanzija tar-ritorn bil-jiem.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'oġġett',
                    '_object' => 'Prodott',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'L-istat tal-prodott aġġornat b\'suċċess.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Żid prodott ġdid mir-repożitorju mill-sku fil-ħanut.',
            'url' => 'ħwienet/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'spag', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Kategorija tas-sett awtomatika', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Prodott żid ma \'din il-kategorija skond id-kategorija fil-ħanut.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Prezz tal-prodott.', 'type' => 'galleġġjant', 'require' => true],
                'currency' => ['title' => 'Munita,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Kwantità', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'oġġett',
                    '_object' => 'Prodott',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'L-istat tal-prodott aġġornat b\'suċċess.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
