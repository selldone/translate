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
            'description' => 'Obțineți lista de produse a magazinului.',
            'url' => 'magazine/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Afișați numai produsele disponibile. Poate fi adevărat sau fals.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Obțineți ierarhia categoriilor părinte. Poate fi adevărat sau fals.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Offset al listei de produse (pentru paginare).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Numărul de produse din listă (pentru paginare).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Tip sortare listă', 'type' => 'enumerare', 'default' => null, 'values' => [null, 'legate', 'cele mai_vizitate', 'cele mai_populare', 'cel mai nou', 'cel mai bine vândut', 'cel mai ieftin', 'cel mai_scump', 'aleatoriu', 'legate', 'favorit', 'aleatoriu']],
                'product_id' => ['title' => 'Produs ID folosit pentru returnarea produselor aferente (sortare = înrudite).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Set de date despre produs. Poate fi nul sau spec (null: implicit, spec: optimizat pentru preluarea specificațiilor).', 'type' => 'enumerare', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Căutați text', 'type' => 'sfoară', 'default' => null],
                'search_type' => ['title' => 'Tipul de căutare. Poate fi nulă sau categorie.', 'type' => 'enumerare', 'default' => null, 'values' => [null, 'categorie']],
                'dir' => ['title' => 'Categoria ID sau nume. Obține produse din această categorie atunci când este setată.', 'type' => 'oricare', 'default' => null],
                'products_only' => ['title' => 'Obțineți numai produse (categorii nu sunt incluse).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Obțineți numai categorii (produse nu sunt incluse).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Obțineți informații complete despre variante.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Numai când obțineți produse ca administrator) Obțineți lista de produse fără preț, tarif sau statistici.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'matrice',
                    '_object' => 'Produs',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'matrice',
                    '_object' => 'categorie',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'obiect',
                    '_object' => 'categorie',
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
            'description' => 'Obțineți informații și statistici despre produse.',
            'url' => 'magazine/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'obiect',
                    '_object' => 'Produs',
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
                    '_type' => 'matrice',
                    '_object' => 'Date-produs',
                    'title' => 'datele ultimelor 30 de zile',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Comenzi ca informatii.',
                    'type' => 'Virtual: count (int)|Fizic: [count, delivery_state] (matrice)'
                ],

                'new_comments_count' => [
                    'title' => 'Comentariile noi contează.',
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
            'description' => 'Adăugați un produs nou în magazin.',
            'url' => 'magazine/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Setați tipul produsului/serviciului.', 'type' => 'enumerare', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Pretul produsului.', 'type' => 'plutire', 'require' => true],
                'commission' => ['title' => 'Adăugați comision la preț.', 'type' => 'plutire', 'default' => 0],
                'discount' => ['title' => 'Reducere la prețul produsului implicit.', 'type' => 'plutire', 'default' => 0],
                'dis_start' => ['title' => 'Ora de începere a reducerii în fusul orar UTC (format: AAAA-LL-ZZ HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Ora de încheiere a reducerii în fusul orar UTC (format: AAAA-LL-ZZ HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'valuta,', 'type' => 'enumerare', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titlul produsului.", 'type' => 'sfoară', 'require' => true],
                'title_en' => ['title' => 'Titlul în engleză al produsului (sau subtitlul)', 'type' => 'sfoară', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'sfoară', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'sfoară', 'default' => null],
                'gtin' => ['title' => "Numărul articolului comercial global al produsului.", 'type' => 'sfoară', 'default' => null],
                'gpc' => ['title' => 'Codul categoriei de produse Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Starea actuală a articolului în magazinul dvs.", 'type' => 'enumerare', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Mesaj afișat utilizatorului dacă există câmpuri de introducere (utilizate pentru produse virtuale).', 'type' => 'sfoară', 'default' => null],
                'inputs' => ['title' => 'Câmpuri de introducere opționale (utilizate pentru produse virtuale).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Câmpuri de ieșire opționale (utilizate pentru produse virtuale).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'URL opțional pentru blog sau site.', 'type' => 'sfoară', 'default' => false],
                'status' => ['title' => 'starea produsului Deschis/Închis, implicit este Deschis.', 'type' => 'enumerare', 'default' => 'Deschide', 'values' => ['Deschide', 'Închide']],
                'category_id' => ['title' => 'ID categorie.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Timp de livrare in ore..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stil de produs (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marca produsului..', 'type' => 'sfoară', 'default' => null],
                'warranty' => ['title' => 'descriere garantie..', 'type' => 'sfoară', 'default' => null],
                'original' => ['title' => 'Acest produs este original?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Retur garanție pe zile.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'obiect',
                    '_object' => 'Produs',
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
            'description' => 'Adăugați un produs nou în magazin.',
            'url' => 'magazine/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Setați tipul produsului/serviciului.', 'type' => 'enumerare', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Pretul produsului.', 'type' => 'plutire', 'require' => true],
                'commission' => ['title' => 'Adăugați comision la preț.', 'type' => 'plutire', 'default' => 0],
                'discount' => ['title' => 'Reducere la prețul produsului implicit.', 'type' => 'plutire', 'default' => 0],
                'dis_start' => ['title' => 'Ora de începere a reducerii în fusul orar UTC (format: AAAA-LL-ZZ HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Ora de încheiere a reducerii în fusul orar UTC (format: AAAA-LL-ZZ HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'valuta,', 'type' => 'enumerare', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titlul produsului.", 'type' => 'sfoară', 'require' => true],
                'title_en' => ['title' => 'Titlul în engleză al produsului (sau subtitlul)', 'type' => 'sfoară', 'default' => null],
                'message' => ['title' => 'Mesaj afișat utilizatorului dacă există câmpuri de introducere (utilizate pentru produse virtuale).', 'type' => 'sfoară', 'default' => null],
                'inputs' => ['title' => 'Câmpuri de introducere opționale (utilizate pentru produse virtuale).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Câmpuri de ieșire opționale (utilizate pentru produse virtuale).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'URL opțional pentru blog sau site.', 'type' => 'sfoară', 'default' => false],
                'status' => ['title' => 'starea produsului Deschis/Închis, implicit este Deschis.', 'type' => 'enumerare', 'default' => 'Deschide', 'values' => ['Deschide', 'Închide']],
                'category_id' => ['title' => 'ID categorie.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Timp de livrare in ore..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stil de produs (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marca produsului..', 'type' => 'sfoară', 'default' => null],
                'warranty' => ['title' => 'descriere garantie..', 'type' => 'sfoară', 'default' => null],
                'original' => ['title' => 'Acest produs este original?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Retur garanție pe zile.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'obiect',
                    '_object' => 'Produs',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Starea produsului actualizată cu succes.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Adăugați un produs nou din depozit prin sku în magazin.',
            'url' => 'magazine/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'sfoară', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Setare automată categorie', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Produs adăugat la această categorie după id-ul categoriei în magazin.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Pretul produsului.', 'type' => 'plutire', 'require' => true],
                'currency' => ['title' => 'valuta,', 'type' => 'enumerare', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Cantitatea', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'obiect',
                    '_object' => 'Produs',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Starea produsului actualizată cu succes.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
