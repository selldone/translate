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
            'description' => 'Obteniu la llista de productes de la botiga.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Mostra només els productes disponibles. Pot ser vertader o fals.', 'type' => 'booleà', 'default' => false],
                'with_parent' => ['title' => 'Obteniu la jerarquia de categories principals. Pot ser vertader o fals.', 'type' => 'booleà', 'default' => false],
                'offset' => ['title' => 'Offset de la llista de productes (per a la paginació).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Nombre de productes de la llista (per a la paginació).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Tipus d\'ordenació de llista', 'type' => 'enumeració', 'default' => null, 'values' => [null, 'relacionats', 'més_visitats', 'més_populars', 'més nou', 'best-seller', 'més barat', 'més_car', 'aleatòria', 'relacionats', 'favorit', 'aleatòria']],
                'product_id' => ['title' => 'Producte ID utilitzat per retornar productes relacionats (ordenar = relacionat).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Conjunt de dades del producte. Pot ser nul o especificat (nul: predeterminat, especificació: optimitzat per recuperar especificacions).', 'type' => 'enumeració', 'default' => null, 'values' => [null, 'especificació']],
                'search' => ['title' => 'Cerca text', 'type' => 'corda', 'default' => null],
                'search_type' => ['title' => 'Tipus de cerca. Pot ser nul o de categoria.', 'type' => 'enumeració', 'default' => null, 'values' => [null, 'categoria']],
                'dir' => ['title' => 'Categoria ID o nom. Obté productes d\'aquesta categoria quan s\'estableix.', 'type' => 'qualsevol', 'default' => null],
                'products_only' => ['title' => 'Aconsegueix només productes (categories no incloses).', 'type' => 'booleà', 'default' => false],
                'categories_only' => ['title' => 'Obteniu només categories (productes no inclosos).', 'type' => 'booleà', 'default' => false],
                'need_full_variants' => ['title' => 'Obteniu informació completa sobre variants.', 'type' => 'booleà', 'default' => false],
                'optimized' => ['title' => '(Només quan obteniu productes com a administrador) Obteniu la llista de productes sense preu, tarifa ni estadístiques.', 'type' => 'booleà', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'matriu',
                    '_object' => 'Producte',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'matriu',
                    '_object' => 'Categoria',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objecte',
                    '_object' => 'Categoria',
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
            'description' => 'Obteniu informació i estadístiques del producte.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'objecte',
                    '_object' => 'Producte',
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
                    '_type' => 'matriu',
                    '_object' => 'Producte-Dades',
                    'title' => 'dades dels últims 30 dies',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Comandes que info.',
                    'type' => 'Virtual: recompte (int)|Física: [count, delivery_state] (matriu)'
                ],

                'new_comments_count' => [
                    'title' => 'Els nous comentaris compten.',
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
            'description' => 'Afegeix un producte nou a la botiga.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Estableix el tipus de producte/servei.', 'type' => 'enumeració', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Preu del producte.', 'type' => 'flotar', 'require' => true],
                'commission' => ['title' => 'Afegeix comissió al preu.', 'type' => 'flotar', 'default' => 0],
                'discount' => ['title' => 'Descompte del preu del producte per defecte.', 'type' => 'flotar', 'default' => 0],
                'dis_start' => ['title' => 'Hora d\'inici del descompte a la zona horària UTC (format: AAAA-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Hora de finalització del descompte a la zona horària UTC (format: AAAA-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'moneda,', 'type' => 'enumeració', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Títol del producte.", 'type' => 'corda', 'require' => true],
                'title_en' => ['title' => 'Títol en anglès del producte (o subtítol)', 'type' => 'corda', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'corda', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'corda', 'default' => null],
                'gtin' => ['title' => "Número d'article comercial global del producte.", 'type' => 'corda', 'default' => null],
                'gpc' => ['title' => 'Codi de categoria de producte de Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Estat actual de l'article a la vostra botiga.", 'type' => 'enumeració', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'El missatge mostra a l\'usuari si existeixen camps d\'entrada (utilitzat per a productes virtuals).', 'type' => 'corda', 'default' => null],
                'inputs' => ['title' => 'Camps d\'entrada opcionals (utilitzats per a productes virtuals).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Camps de sortida opcionals (utilitzats per a productes virtuals).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'URL opcional del bloc o del lloc web.', 'type' => 'corda', 'default' => false],
                'status' => ['title' => 'estat del producte Obre / Tanca, el valor per defecte és Obert.', 'type' => 'enumeració', 'default' => 'Obert', 'values' => ['Obert', 'Tancar']],
                'category_id' => ['title' => 'identificador de categoria.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Temps de lliurament en hores..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Estil de producte (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marca de producte..', 'type' => 'corda', 'default' => null],
                'warranty' => ['title' => 'descripció de la garantia..', 'type' => 'corda', 'default' => null],
                'original' => ['title' => 'Aquest producte és original?', 'type' => 'booleà', 'default' => false],
                'return_warranty' => ['title' => 'Garantia de devolució per dies.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objecte',
                    '_object' => 'Producte',
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
            'description' => 'Afegeix un producte nou a la botiga.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Estableix el tipus de producte/servei.', 'type' => 'enumeració', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Preu del producte.', 'type' => 'flotar', 'require' => true],
                'commission' => ['title' => 'Afegeix comissió al preu.', 'type' => 'flotar', 'default' => 0],
                'discount' => ['title' => 'Descompte del preu del producte per defecte.', 'type' => 'flotar', 'default' => 0],
                'dis_start' => ['title' => 'Hora d\'inici del descompte a la zona horària UTC (format: AAAA-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Hora de finalització del descompte a la zona horària UTC (format: AAAA-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'moneda,', 'type' => 'enumeració', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Títol del producte.", 'type' => 'corda', 'require' => true],
                'title_en' => ['title' => 'Títol en anglès del producte (o subtítol)', 'type' => 'corda', 'default' => null],
                'message' => ['title' => 'El missatge mostra a l\'usuari si existeixen camps d\'entrada (utilitzat per a productes virtuals).', 'type' => 'corda', 'default' => null],
                'inputs' => ['title' => 'Camps d\'entrada opcionals (utilitzats per a productes virtuals).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Camps de sortida opcionals (utilitzats per a productes virtuals).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'URL opcional del bloc o del lloc web.', 'type' => 'corda', 'default' => false],
                'status' => ['title' => 'estat del producte Obre / Tanca, el valor per defecte és Obert.', 'type' => 'enumeració', 'default' => 'Obert', 'values' => ['Obert', 'Tancar']],
                'category_id' => ['title' => 'identificador de categoria.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Temps de lliurament en hores..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Estil de producte (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marca de producte..', 'type' => 'corda', 'default' => null],
                'warranty' => ['title' => 'descripció de la garantia..', 'type' => 'corda', 'default' => null],
                'original' => ['title' => 'Aquest producte és original?', 'type' => 'booleà', 'default' => false],
                'return_warranty' => ['title' => 'Garantia de devolució per dies.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objecte',
                    '_object' => 'Producte',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Estat del producte actualitzat amb èxit.', 'type' => 'booleà'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Afegiu un producte nou des del dipòsit per sku a la botiga.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'corda', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Definició automàtica de categoria', 'type' => 'booleà', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Producte afegit a aquesta categoria per identificador de categoria a la botiga.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Preu del producte.', 'type' => 'flotar', 'require' => true],
                'currency' => ['title' => 'moneda,', 'type' => 'enumeració', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Quantitat', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objecte',
                    '_object' => 'Producte',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Estat del producte actualitzat amb èxit.', 'type' => 'booleà'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
