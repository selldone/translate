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
            'description' => 'Pridobite seznam izdelkov trgovine.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Prikaži samo razpoložljive izdelke. Lahko je resnično ali napačno.', 'type' => 'logično', 'default' => false],
                'with_parent' => ['title' => 'Pridobite hierarhijo nadrejenih kategorij. Lahko je resnično ali napačno.', 'type' => 'logično', 'default' => false],
                'offset' => ['title' => 'Odmik seznama izdelkov (za paginacijo).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Število izdelkov v seznamu (za paginacijo).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Vrsta razvrščanja seznama', 'type' => 'enum', 'default' => null, 'values' => [null, 'povezano', 'najbolj_obiskano', 'najbolj_popularno', 'najnovejši', 'uspešnica', 'najcenejši', 'najdražji_', 'naključno', 'povezano', 'najljubši', 'naključno']],
                'product_id' => ['title' => 'Izdelek ID se uporablja za vračilo sorodnih izdelkov (razvrsti = sorodno).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Nabor podatkov o izdelku. Lahko je null ali spec (null: privzeto, spec: optimizirano za pridobivanje specifikacij).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Iskanje besedila', 'type' => 'niz', 'default' => null],
                'search_type' => ['title' => 'Vrsta iskanja. Lahko je nič ali kategorija.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategorijo']],
                'dir' => ['title' => 'Kategorija ID ali ime. Ko je nastavljen, dobi izdelke v tej kategoriji.', 'type' => 'katerikoli', 'default' => null],
                'products_only' => ['title' => 'Pridobite samo izdelke (kategorije niso vključene).', 'type' => 'logično', 'default' => false],
                'categories_only' => ['title' => 'Pridobite samo kategorije (izdelki niso vključeni).', 'type' => 'logično', 'default' => false],
                'need_full_variants' => ['title' => 'Pridobite vse informacije o različici.', 'type' => 'logično', 'default' => false],
                'optimized' => ['title' => '(Samo pri pridobivanju izdelkov kot skrbnik) Pridobite seznam izdelkov brez cene, stopnje ali statistike.', 'type' => 'logično', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'niz',
                    '_object' => 'Izdelek',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'niz',
                    '_object' => 'Kategorija',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'predmet',
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
            'description' => 'Pridobite informacije o izdelku in statistiko.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'predmet',
                    '_object' => 'Izdelek',
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
                    '_object' => 'Podatki o izdelku',
                    'title' => 'podatki zadnjih 30 dni',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Naročila que info.',
                    'type' => 'Virtualno: štetje (int)|Fizično: [count, delivery_state] (matrika)'
                ],

                'new_comments_count' => [
                    'title' => 'Novi komentarji štejejo.',
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
            'description' => 'Dodajte nov izdelek v trgovino.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Nastavite vrsto izdelka/storitve.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Cena izdelka.', 'type' => 'lebdi', 'require' => true],
                'commission' => ['title' => 'Dodajte provizijo k ceni.', 'type' => 'lebdi', 'default' => 0],
                'discount' => ['title' => 'Privzeti popust na ceno izdelka.', 'type' => 'lebdi', 'default' => 0],
                'dis_start' => ['title' => 'Začetni čas popusta v časovnem pasu UTC (oblika: LLLL-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'dis_end' => ['title' => 'Končni čas popusta v časovnem pasu UTC (oblika: LLLL-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'currency' => ['title' => 'valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Naslov izdelka.", 'type' => 'niz', 'require' => true],
                'title_en' => ['title' => 'Angleški naslov izdelka (ali podnaslov)', 'type' => 'niz', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'niz', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'niz', 'default' => null],
                'gtin' => ['title' => "Globalna trgovinska številka izdelka.", 'type' => 'niz', 'default' => null],
                'gpc' => ['title' => 'Googlova koda kategorije izdelka.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Trenutno stanje artikla v vaši trgovini.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Sporočilo se prikaže uporabniku, če obstajajo vnosna polja (uporablja se za virtualne izdelke).', 'type' => 'niz', 'default' => null],
                'inputs' => ['title' => 'Izbirna vnosna polja (uporabljajo se za virtualne izdelke).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Izbirna izhodna polja (uporabljajo se za virtualne izdelke).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Izbirni spletni dnevnik ali URL spletnega mesta.', 'type' => 'niz', 'default' => false],
                'status' => ['title' => 'stanje izdelka Odprto / Zaprto, privzeto je Odprto.', 'type' => 'enum', 'default' => 'Odpri', 'values' => ['Odpri', 'Zapri']],
                'category_id' => ['title' => 'id kategorije.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Dobavni rok v urah..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stil izdelka (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Znamka izdelka..', 'type' => 'niz', 'default' => null],
                'warranty' => ['title' => 'opis garancije..', 'type' => 'niz', 'default' => null],
                'original' => ['title' => 'Je ta izdelek originalen?', 'type' => 'logično', 'default' => false],
                'return_warranty' => ['title' => 'Garancija za vračilo po dnevih.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'predmet',
                    '_object' => 'Izdelek',
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
            'description' => 'Dodajte nov izdelek v trgovino.',
            'url' => 'shops/{shop_id}/products/{product_id}/uredi',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Nastavite vrsto izdelka/storitve.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Cena izdelka.', 'type' => 'lebdi', 'require' => true],
                'commission' => ['title' => 'Dodajte provizijo k ceni.', 'type' => 'lebdi', 'default' => 0],
                'discount' => ['title' => 'Privzeti popust na ceno izdelka.', 'type' => 'lebdi', 'default' => 0],
                'dis_start' => ['title' => 'Začetni čas popusta v časovnem pasu UTC (oblika: LLLL-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'dis_end' => ['title' => 'Končni čas popusta v časovnem pasu UTC (oblika: LLLL-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'currency' => ['title' => 'valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Naslov izdelka.", 'type' => 'niz', 'require' => true],
                'title_en' => ['title' => 'Angleški naslov izdelka (ali podnaslov)', 'type' => 'niz', 'default' => null],
                'message' => ['title' => 'Sporočilo se prikaže uporabniku, če obstajajo vnosna polja (uporablja se za virtualne izdelke).', 'type' => 'niz', 'default' => null],
                'inputs' => ['title' => 'Izbirna vnosna polja (uporabljajo se za virtualne izdelke).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Izbirna izhodna polja (uporabljajo se za virtualne izdelke).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Izbirni spletni dnevnik ali URL spletnega mesta.', 'type' => 'niz', 'default' => false],
                'status' => ['title' => 'stanje izdelka Odprto / Zaprto, privzeto je Odprto.', 'type' => 'enum', 'default' => 'Odpri', 'values' => ['Odpri', 'Zapri']],
                'category_id' => ['title' => 'id kategorije.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Dobavni rok v urah..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stil izdelka (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Znamka izdelka..', 'type' => 'niz', 'default' => null],
                'warranty' => ['title' => 'opis garancije..', 'type' => 'niz', 'default' => null],
                'original' => ['title' => 'Je ta izdelek originalen?', 'type' => 'logično', 'default' => false],
                'return_warranty' => ['title' => 'Garancija za vračilo po dnevih.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'predmet',
                    '_object' => 'Izdelek',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Uspešno posodobljeno stanje izdelka.', 'type' => 'logično'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Dodajte nov izdelek iz skladišča po sku v trgovino.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'niz', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Samodejna nastavitev kategorije', 'type' => 'logično', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Izdelek dodajte v to kategorijo po ID-ju kategorije v trgovini.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Cena izdelka.', 'type' => 'lebdi', 'require' => true],
                'currency' => ['title' => 'valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Količina', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'predmet',
                    '_object' => 'Izdelek',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Uspešno posodobljeno stanje izdelka.', 'type' => 'logično'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
