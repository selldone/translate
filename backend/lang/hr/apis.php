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
            'description' => 'Preuzmite popis proizvoda trgovine.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Prikaži samo dostupne proizvode. Može biti istina ili laž.', 'type' => 'Booleov', 'default' => false],
                'with_parent' => ['title' => 'Dobijte hijerarhiju nadređenih kategorija. Može biti istina ili laž.', 'type' => 'Booleov', 'default' => false],
                'offset' => ['title' => 'Pomak popisa proizvoda (za paginaciju).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Broj proizvoda u popisu (za paginaciju).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Vrsta sortiranja popisa', 'type' => 'nabrajanje', 'default' => null, 'values' => [null, 'srodni', 'najposjećeniji', 'najpopularnije', 'najnoviji', 'najprodavaniji', 'najjeftiniji', 'najskuplji', 'slučajan', 'srodni', 'omiljeni', 'slučajan']],
                'product_id' => ['title' => 'Proizvod ID koji se koristi za vraćanje srodnih proizvoda (sort = srodno).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Skup podataka o proizvodu. Može biti null ili spec (null: zadano, spec: optimizirano za dohvaćanje specifikacija).', 'type' => 'nabrajanje', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Traži tekst', 'type' => 'niz', 'default' => null],
                'search_type' => ['title' => 'Vrsta pretraživanja. Može biti null ili kategorija.', 'type' => 'nabrajanje', 'default' => null, 'values' => [null, 'kategorija']],
                'dir' => ['title' => 'Kategorija ID ili naziv. Dobiva proizvode u ovoj kategoriji kada je postavljeno.', 'type' => 'bilo koji', 'default' => null],
                'products_only' => ['title' => 'Nabavite samo proizvode (kategorije nisu uključene).', 'type' => 'Booleov', 'default' => false],
                'categories_only' => ['title' => 'Dobijte samo kategorije (proizvodi nisu uključeni).', 'type' => 'Booleov', 'default' => false],
                'need_full_variants' => ['title' => 'Dobijte sve informacije o varijanti.', 'type' => 'Booleov', 'default' => false],
                'optimized' => ['title' => '(Samo kada dobivate proizvode kao administrator) Dobijte popis proizvoda bez cijene, cijene ili statistike.', 'type' => 'Booleov', 'default' => false],

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
            'description' => 'Dobijte informacije o proizvodu i statistiku.',
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
                    'type' => 'Virtualno: broj (int)|Fizički: [count, delivery_state] (niz)'
                ],

                'new_comments_count' => [
                    'title' => 'Broje se novi komentari.',
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
            'description' => 'Dodajte novi proizvod u trgovinu.',
            'url' => 'trgovine/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Postavite vrstu proizvoda/usluge.', 'type' => 'nabrajanje', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Cijena proizvoda.', 'type' => 'lebdjeti', 'require' => true],
                'commission' => ['title' => 'Dodajte proviziju cijeni.', 'type' => 'lebdjeti', 'default' => 0],
                'discount' => ['title' => 'Zadani popust na cijenu proizvoda.', 'type' => 'lebdjeti', 'default' => 0],
                'dis_start' => ['title' => 'Vrijeme početka popusta u vremenskoj zoni UTC (format: GGGG-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'dis_end' => ['title' => 'Vrijeme završetka popusta u vremenskoj zoni UTC (format: GGGG-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'currency' => ['title' => 'Valuta,', 'type' => 'nabrajanje', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Naslov proizvoda.", 'type' => 'niz', 'require' => true],
                'title_en' => ['title' => 'Engleski naslov proizvoda (ili podnaslov)', 'type' => 'niz', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'niz', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'niz', 'default' => null],
                'gtin' => ['title' => "Globalni broj trgovinske jedinice proizvoda.", 'type' => 'niz', 'default' => null],
                'gpc' => ['title' => 'Google kod kategorije proizvoda.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Trenutno stanje artikla u vašoj trgovini.", 'type' => 'nabrajanje', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Poruka se prikazuje korisniku ako postoje polja za unos (koristi se za virtualne proizvode).', 'type' => 'niz', 'default' => null],
                'inputs' => ['title' => 'Neobavezna polja za unos (koriste se za virtualne proizvode).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Neobavezna izlazna polja (koriste se za virtualne proizvode).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Neobavezni URL bloga ili web stranice.', 'type' => 'niz', 'default' => false],
                'status' => ['title' => 'status proizvoda Otvoreno / Zatvoreno, zadano je Otvoreno.', 'type' => 'nabrajanje', 'default' => 'Otvoreno', 'values' => ['Otvoreno', 'Zatvori']],
                'category_id' => ['title' => 'id kategorije.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Vrijeme isporuke u satima..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stil proizvoda (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marka proizvoda..', 'type' => 'niz', 'default' => null],
                'warranty' => ['title' => 'opis garancije..', 'type' => 'niz', 'default' => null],
                'original' => ['title' => 'Ovaj proizvod je originalan?', 'type' => 'Booleov', 'default' => false],
                'return_warranty' => ['title' => 'Jamstvo povrata po danima.', 'type' => 'int', 'default' => 0],


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
            'description' => 'Dodajte novi proizvod u trgovinu.',
            'url' => 'shops/{shop_id}/products/{product_id}/uredi',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Postavite vrstu proizvoda/usluge.', 'type' => 'nabrajanje', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Cijena proizvoda.', 'type' => 'lebdjeti', 'require' => true],
                'commission' => ['title' => 'Dodajte proviziju cijeni.', 'type' => 'lebdjeti', 'default' => 0],
                'discount' => ['title' => 'Zadani popust na cijenu proizvoda.', 'type' => 'lebdjeti', 'default' => 0],
                'dis_start' => ['title' => 'Vrijeme početka popusta u vremenskoj zoni UTC (format: GGGG-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'dis_end' => ['title' => 'Vrijeme završetka popusta u vremenskoj zoni UTC (format: GGGG-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'currency' => ['title' => 'Valuta,', 'type' => 'nabrajanje', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Naslov proizvoda.", 'type' => 'niz', 'require' => true],
                'title_en' => ['title' => 'Engleski naslov proizvoda (ili podnaslov)', 'type' => 'niz', 'default' => null],
                'message' => ['title' => 'Poruka se prikazuje korisniku ako postoje polja za unos (koristi se za virtualne proizvode).', 'type' => 'niz', 'default' => null],
                'inputs' => ['title' => 'Neobavezna polja za unos (koriste se za virtualne proizvode).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Neobavezna izlazna polja (koriste se za virtualne proizvode).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Neobavezni URL bloga ili web stranice.', 'type' => 'niz', 'default' => false],
                'status' => ['title' => 'status proizvoda Otvoreno / Zatvoreno, zadano je Otvoreno.', 'type' => 'nabrajanje', 'default' => 'Otvoreno', 'values' => ['Otvoreno', 'Zatvori']],
                'category_id' => ['title' => 'id kategorije.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Vrijeme isporuke u satima..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stil proizvoda (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marka proizvoda..', 'type' => 'niz', 'default' => null],
                'warranty' => ['title' => 'opis garancije..', 'type' => 'niz', 'default' => null],
                'original' => ['title' => 'Ovaj proizvod je originalan?', 'type' => 'Booleov', 'default' => false],
                'return_warranty' => ['title' => 'Jamstvo povrata po danima.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Proizvod',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Uspješno ažurirano stanje proizvoda.', 'type' => 'Booleov'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Dodajte novi proizvod iz repozitorija prema sku u trgovinu.',
            'url' => 'trgovine/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'niz', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Automatski postavljena kategorija', 'type' => 'Booleov', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Proizvod dodajte u ovu kategoriju po ID-u kategorije u trgovini.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Cijena proizvoda.', 'type' => 'lebdjeti', 'require' => true],
                'currency' => ['title' => 'Valuta,', 'type' => 'nabrajanje', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Količina', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Proizvod',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Uspješno ažurirano stanje proizvoda.', 'type' => 'Booleov'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
