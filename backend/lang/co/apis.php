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
            'description' => 'Pigliate a lista di i prudutti di a tenda.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Mostra solu i prudutti dispunibili. Pò esse veru o falsu.', 'type' => 'booleanu', 'default' => false],
                'with_parent' => ['title' => 'Ottene a gerarchia di categurie parenti. Pò esse veru o falsu.', 'type' => 'booleanu', 'default' => false],
                'offset' => ['title' => 'Offset di a lista di i prudutti (per a paginazione).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Numaru di prudutti in a lista (per paginazione).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Tipu di sorte di lista', 'type' => 'enum', 'default' => null, 'values' => [null, 'in relazione', 'più_visitati', 'più_pupulare', 'u più novu', 'bestseller', 'u più prezzu', 'più_caru', 'casuale', 'in relazione', 'favuritu', 'casuale']],
                'product_id' => ['title' => 'Pruduttu ID utilizatu per rinvià i prudutti rilativi (sort = related).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Set di dati di u produttu. Pò esse null o spec (null: default, spec: optimized for retrieve specifications).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Ricerca testu', 'type' => 'stringa', 'default' => null],
                'search_type' => ['title' => 'Tipu di ricerca. Pò esse nulla o categuria.', 'type' => 'enum', 'default' => null, 'values' => [null, 'categuria']],
                'dir' => ['title' => 'Category ID o nome. Ottene i prudutti in questa categuria quandu stabilitu.', 'type' => 'alcunu', 'default' => null],
                'products_only' => ['title' => 'Ottene solu prudutti (categorie micca incluse).', 'type' => 'booleanu', 'default' => false],
                'categories_only' => ['title' => 'Ottene solu categurie (prodotti micca inclusi).', 'type' => 'booleanu', 'default' => false],
                'need_full_variants' => ['title' => 'Ottene infurmazione completa di varianti.', 'type' => 'booleanu', 'default' => false],
                'optimized' => ['title' => '(Solu quandu uttene prudutti cum\'è amministratore) Ottene a lista di i prudutti senza prezzu, tariffa o statistiche.', 'type' => 'booleanu', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'array',
                    '_object' => 'Pruduttu',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'array',
                    '_object' => 'categuria',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'ughjettu',
                    '_object' => 'categuria',
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
            'description' => 'Ottene infurmazione è statistiche di u produttu.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'ughjettu',
                    '_object' => 'Pruduttu',
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
                    '_object' => 'Product-Data',
                    'title' => 'dati di l\'ultimi 30 ghjorni',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Ordini chì info.',
                    'type' => 'Virtual: cuntà (int)|Fisica: [count, delivery_state] (array)'
                ],

                'new_comments_count' => [
                    'title' => 'I novi cumenti contanu.',
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
            'description' => 'Aghjunghjite un novu pruduttu à a buttrega.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Stabbilisce u tipu di u pruduttu / serviziu.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'U prezzu di u pruduttu.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'Aghjunghjite a cumissioni à u prezzu.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'Scontu di prezzu di u produttu predeterminatu.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'L\'ora di iniziu di u scontu in u fusu orariu UTC (formatu: YYYY-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Ora di fine di u sconto in u fusu orariu UTC (formatu: YYYY-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titulu di u pruduttu.", 'type' => 'stringa', 'require' => true],
                'title_en' => ['title' => 'Titulu inglese di u pruduttu (o sottutitulu)', 'type' => 'stringa', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'stringa', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'stringa', 'default' => null],
                'gtin' => ['title' => "U numeru di l'articulu di u cummerciu glubale di u produttu.", 'type' => 'stringa', 'default' => null],
                'gpc' => ['title' => 'Codice di categuria di produttu Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "A cundizione attuale di l'articulu in a vostra tenda.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'U messagiu mostra à l\'utilizatore se esistenu campi di input (aduprati per i prudutti virtuali).', 'type' => 'stringa', 'default' => null],
                'inputs' => ['title' => 'Campi di input opzionali (aduprati per i prudutti virtuali).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Campi di output opzionali (aduprati per i prudutti virtuali).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog opzionale o URL di u situ web.', 'type' => 'stringa', 'default' => false],
                'status' => ['title' => 'status di u produttu Apertu / Chiudi, Default hè Apertu.', 'type' => 'enum', 'default' => 'Apertu', 'values' => ['Apertu', 'Chiudi']],
                'category_id' => ['title' => 'categuria id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Tempu di consegna in ore ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stile di pruduttu (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marca di pruduttu..', 'type' => 'stringa', 'default' => null],
                'warranty' => ['title' => 'descrizzione di garanzia ..', 'type' => 'stringa', 'default' => null],
                'original' => ['title' => 'Stu pruduttu hè uriginale?', 'type' => 'booleanu', 'default' => false],
                'return_warranty' => ['title' => 'Ritorna a guaranzia per ghjorni.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ughjettu',
                    '_object' => 'Pruduttu',
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
            'description' => 'Aghjunghjite un novu pruduttu à a buttrega.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Stabbilisce u tipu di u pruduttu / serviziu.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'U prezzu di u pruduttu.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'Aghjunghjite a cumissioni à u prezzu.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'Scontu di prezzu di u produttu predeterminatu.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'L\'ora di iniziu di u scontu in u fusu orariu UTC (formatu: YYYY-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Ora di fine di u sconto in u fusu orariu UTC (formatu: YYYY-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titulu di u pruduttu.", 'type' => 'stringa', 'require' => true],
                'title_en' => ['title' => 'Titulu inglese di u pruduttu (o sottutitulu)', 'type' => 'stringa', 'default' => null],
                'message' => ['title' => 'U messagiu mostra à l\'utilizatore se esistenu campi di input (aduprati per i prudutti virtuali).', 'type' => 'stringa', 'default' => null],
                'inputs' => ['title' => 'Campi di input opzionali (aduprati per i prudutti virtuali).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Campi di output opzionali (aduprati per i prudutti virtuali).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog opzionale o URL di u situ web.', 'type' => 'stringa', 'default' => false],
                'status' => ['title' => 'status di u produttu Apertu / Chiudi, Default hè Apertu.', 'type' => 'enum', 'default' => 'Apertu', 'values' => ['Apertu', 'Chiudi']],
                'category_id' => ['title' => 'categuria id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Tempu di consegna in ore ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stile di pruduttu (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marca di pruduttu..', 'type' => 'stringa', 'default' => null],
                'warranty' => ['title' => 'descrizzione di garanzia ..', 'type' => 'stringa', 'default' => null],
                'original' => ['title' => 'Stu pruduttu hè uriginale?', 'type' => 'booleanu', 'default' => false],
                'return_warranty' => ['title' => 'Ritorna a guaranzia per ghjorni.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ughjettu',
                    '_object' => 'Pruduttu',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Successu aghjurnatu u statu di u produttu.', 'type' => 'booleanu'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Aghjunghjite un novu pruduttu da u repository da sku à a buttrega.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'stringa', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Auto set categuria', 'type' => 'booleanu', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'U pruduttu aghjunghje à sta categuria per identificazione di categuria in a buttrega.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'U prezzu di u pruduttu.', 'type' => 'float', 'require' => true],
                'currency' => ['title' => 'valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Quantità', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'ughjettu',
                    '_object' => 'Pruduttu',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Successu aghjurnatu u statu di u produttu.', 'type' => 'booleanu'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
