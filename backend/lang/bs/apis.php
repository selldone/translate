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
            'description' => 'Preuzmite listu proizvoda trgovine.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Prikaži samo dostupne proizvode. Može biti istinito ili netačno.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Nabavite hijerarhiju nadređene kategorije. Može biti istinito ili netačno.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Pomak liste proizvoda (za paginaciju).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Broj proizvoda na listi (za paginaciju).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Vrsta sortiranja liste', 'type' => 'enum', 'default' => null, 'values' => [null, 'povezane', 'najviše_posjećeno', 'najpopularnije', 'najnoviji', 'bestseler', 'najjeftinije', 'najskuplji', 'nasumično', 'povezane', 'favorit', 'nasumično']],
                'product_id' => ['title' => 'Proizvod ID koji se koristi za vraćanje povezanih proizvoda (sort = povezani).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Skup podataka o proizvodu. Može biti null ili spec (null: zadano, spec: optimizirano za preuzimanje specifikacija).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Pretraži tekst', 'type' => 'string', 'default' => null],
                'search_type' => ['title' => 'Vrsta pretrage. Može biti null ili kategorija.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategorija']],
                'dir' => ['title' => 'Kategorija ID ili naziv. Dobiva proizvode u ovoj kategoriji kada je postavljeno.', 'type' => 'bilo koji', 'default' => null],
                'products_only' => ['title' => 'Nabavite samo proizvode (kategorije nisu uključene).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Dobijte samo kategorije (proizvodi nisu uključeni).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Dobijte pune informacije o varijanti.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Samo kada dobijete proizvode kao administrator) Dobijte listu proizvoda bez cijene, stope ili statistike.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'niz',
                    '_object' => 'Proizvod',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'niz',
                    '_object' => 'Kategorija',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objekt',
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
            'description' => 'Dobijte informacije o proizvodima i statistiku.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Proizvod',
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
                    '_type' => 'niz',
                    '_object' => 'Podaci o proizvodu',
                    'title' => 'podaci za zadnjih 30 dana',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Narudžbe que info.',
                    'type' => 'Virtualno: count (int)|Fizički: [count, delivery_state] (niz)'
                ],

                'new_comments_count' => [
                    'title' => 'Novi komentari se računaju.',
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
            'description' => 'Dodajte novi proizvod u prodavnicu.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Postavite vrstu proizvoda/usluge.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Cijena proizvoda.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'Dodajte proviziju na cijenu.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'Popust na standardnu cijenu proizvoda.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'Vrijeme početka popusta u UTC vremenskoj zoni (format: GGGG-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'dis_end' => ['title' => 'Vrijeme završetka popusta u vremenskoj zoni UTC (format: GGGG-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'currency' => ['title' => 'valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Naziv proizvoda.", 'type' => 'string', 'require' => true],
                'title_en' => ['title' => 'Engleski naslov proizvoda (ili podnaslov)', 'type' => 'string', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'string', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'string', 'default' => null],
                'gtin' => ['title' => "Globalni broj trgovinske jedinice proizvoda.", 'type' => 'string', 'default' => null],
                'gpc' => ['title' => 'Kôd kategorije Google proizvoda.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Trenutno stanje artikla u vašoj radnji.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Poruka se prikazuje korisniku ako postoje polja za unos (koristi se za virtuelne proizvode).', 'type' => 'string', 'default' => null],
                'inputs' => ['title' => 'Opciona polja za unos (koriste se za virtuelne proizvode).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Opciona izlazna polja (koriste se za virtuelne proizvode).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Opcioni URL bloga ili web stranice.', 'type' => 'string', 'default' => false],
                'status' => ['title' => 'status proizvoda Otvori/Zatvori, Podrazumevano je Otvoreno.', 'type' => 'enum', 'default' => 'Otvori', 'values' => ['Otvori', 'Zatvori']],
                'category_id' => ['title' => 'kategorija id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Vrijeme isporuke u satima..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stil proizvoda (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marka proizvoda..', 'type' => 'string', 'default' => null],
                'warranty' => ['title' => 'opis garancije..', 'type' => 'string', 'default' => null],
                'original' => ['title' => 'Je li ovaj proizvod originalan?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garancija povrata po danima.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Proizvod',
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
            'description' => 'Dodajte novi proizvod u prodavnicu.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Postavite vrstu proizvoda/usluge.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Cijena proizvoda.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'Dodajte proviziju na cijenu.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'Popust na standardnu cijenu proizvoda.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'Vrijeme početka popusta u UTC vremenskoj zoni (format: GGGG-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'dis_end' => ['title' => 'Vrijeme završetka popusta u vremenskoj zoni UTC (format: GGGG-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'currency' => ['title' => 'valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Naziv proizvoda.", 'type' => 'string', 'require' => true],
                'title_en' => ['title' => 'Engleski naslov proizvoda (ili podnaslov)', 'type' => 'string', 'default' => null],
                'message' => ['title' => 'Poruka se prikazuje korisniku ako postoje polja za unos (koristi se za virtuelne proizvode).', 'type' => 'string', 'default' => null],
                'inputs' => ['title' => 'Opciona polja za unos (koriste se za virtuelne proizvode).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Opciona izlazna polja (koriste se za virtuelne proizvode).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Opcioni URL bloga ili web stranice.', 'type' => 'string', 'default' => false],
                'status' => ['title' => 'status proizvoda Otvori/Zatvori, Podrazumevano je Otvoreno.', 'type' => 'enum', 'default' => 'Otvori', 'values' => ['Otvori', 'Zatvori']],
                'category_id' => ['title' => 'kategorija id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Vrijeme isporuke u satima..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stil proizvoda (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marka proizvoda..', 'type' => 'string', 'default' => null],
                'warranty' => ['title' => 'opis garancije..', 'type' => 'string', 'default' => null],
                'original' => ['title' => 'Je li ovaj proizvod originalan?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garancija povrata po danima.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Proizvod',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Uspješno ažurirano stanje proizvoda.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Dodajte novi proizvod iz skladišta po sku u prodavnicu.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'string', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Automatsko postavljanje kategorije', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Dodajte proizvod u ovu kategoriju prema ID-u kategorije u trgovini.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Cijena proizvoda.', 'type' => 'float', 'require' => true],
                'currency' => ['title' => 'valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Količina', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Proizvod',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Uspješno ažurirano stanje proizvoda.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
