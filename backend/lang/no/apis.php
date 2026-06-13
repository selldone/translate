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
            'description' => 'Få butikkens produktliste.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Vis kun tilgjengelige produkter. Kan være sant eller usant.', 'type' => 'boolsk', 'default' => false],
                'with_parent' => ['title' => 'Få det overordnede kategorihierarkiet. Kan være sant eller usant.', 'type' => 'boolsk', 'default' => false],
                'offset' => ['title' => 'Offset av produktlisten (for paginering).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Antall produkter i listen (for paginering).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Listesorteringstype', 'type' => 'enum', 'default' => null, 'values' => [null, 'relatert', 'mest_besøkte', 'mest_populært', 'nyeste', 'bestselgende', 'billigste', 'dyrest', 'tilfeldig', 'relatert', 'favoritt', 'tilfeldig']],
                'product_id' => ['title' => 'Produkt ID brukes til å returnere relaterte produkter (sort = relatert).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Produktdatasett. Kan være null eller spec (null: standard, spec: optimalisert for å hente spesifikasjoner).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spes']],
                'search' => ['title' => 'Søk etter tekst', 'type' => 'streng', 'default' => null],
                'search_type' => ['title' => 'Søketype. Kan være null eller kategori.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategori']],
                'dir' => ['title' => 'Kategori ID eller navn. Får produkter i denne kategorien når angitt.', 'type' => 'noen', 'default' => null],
                'products_only' => ['title' => 'Få kun produkter (kategorier er ikke inkludert).', 'type' => 'boolsk', 'default' => false],
                'categories_only' => ['title' => 'Få kun kategorier (produkter er ikke inkludert).', 'type' => 'boolsk', 'default' => false],
                'need_full_variants' => ['title' => 'Få full variantinformasjon.', 'type' => 'boolsk', 'default' => false],
                'optimized' => ['title' => '(Bare når du får produkter som admin) Få produktlisten uten pris, pris eller statistikk.', 'type' => 'boolsk', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'array',
                    '_object' => 'Produkt',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'array',
                    '_object' => 'Kategori',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objekt',
                    '_object' => 'Kategori',
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
            'description' => 'Få produktinformasjon og statistikk.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkt',
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
                    '_object' => 'Produkt-data',
                    'title' => 'siste 30 dagers data',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Bestillinger med info.',
                    'type' => 'Virtuelt: antall (int)|Fysisk: [count, delivery_state] (array)'
                ],

                'new_comments_count' => [
                    'title' => 'Nye kommentarer teller.',
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
            'description' => 'Legg til nytt produkt i butikken.',
            'url' => 'butikker/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Angi type produkt/tjeneste.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Pris på produktet.', 'type' => 'flyte', 'require' => true],
                'commission' => ['title' => 'Legg til provisjon til prisen.', 'type' => 'flyte', 'default' => 0],
                'discount' => ['title' => 'Standard rabatt på produktpris.', 'type' => 'flyte', 'default' => 0],
                'dis_start' => ['title' => 'Rabattstarttid i UTC-tidssonen (format: ÅÅÅÅ-MM-DD HH:mm:ss).', 'type' => 'dato', 'default' => null],
                'dis_end' => ['title' => 'Rabattsluttid i UTC-tidssonen (format: ÅÅÅÅ-MM-DD HH:mm:ss).', 'type' => 'dato', 'default' => null],
                'currency' => ['title' => 'Valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produktets tittel.", 'type' => 'streng', 'require' => true],
                'title_en' => ['title' => 'Engelsk tittel på produktet (eller undertittel)', 'type' => 'streng', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'streng', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'streng', 'default' => null],
                'gtin' => ['title' => "Produktets globale varenummer.", 'type' => 'streng', 'default' => null],
                'gpc' => ['title' => 'Google-produktkategorikode.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Varens nåværende tilstand i butikken din.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Melding vises til brukeren hvis det finnes inndatafelt (brukes for virtuelle produkter).', 'type' => 'streng', 'default' => null],
                'inputs' => ['title' => 'Valgfrie inndatafelt (brukes for virtuelle produkter).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Valgfrie utdatafelt (brukes for virtuelle produkter).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Valgfri blogg- eller nettstedsadresse.', 'type' => 'streng', 'default' => false],
                'status' => ['title' => 'produktstatus Åpne / Lukk, Standard er Åpen.', 'type' => 'enum', 'default' => 'Åpne', 'values' => ['Åpne', 'Lukk']],
                'category_id' => ['title' => 'kategori-ID.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Ledetid i timer..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Produktstil (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Produktets merke..', 'type' => 'streng', 'default' => null],
                'warranty' => ['title' => 'garantibeskrivelse..', 'type' => 'streng', 'default' => null],
                'original' => ['title' => 'Er dette produktet originalt?', 'type' => 'boolsk', 'default' => false],
                'return_warranty' => ['title' => 'Returgaranti etter dager.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkt',
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
            'description' => 'Legg til nytt produkt i butikken.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Angi type produkt/tjeneste.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Pris på produktet.', 'type' => 'flyte', 'require' => true],
                'commission' => ['title' => 'Legg til provisjon til prisen.', 'type' => 'flyte', 'default' => 0],
                'discount' => ['title' => 'Standard rabatt på produktpris.', 'type' => 'flyte', 'default' => 0],
                'dis_start' => ['title' => 'Rabattstarttid i UTC-tidssonen (format: ÅÅÅÅ-MM-DD HH:mm:ss).', 'type' => 'dato', 'default' => null],
                'dis_end' => ['title' => 'Rabattsluttid i UTC-tidssonen (format: ÅÅÅÅ-MM-DD HH:mm:ss).', 'type' => 'dato', 'default' => null],
                'currency' => ['title' => 'Valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produktets tittel.", 'type' => 'streng', 'require' => true],
                'title_en' => ['title' => 'Engelsk tittel på produktet (eller undertittel)', 'type' => 'streng', 'default' => null],
                'message' => ['title' => 'Melding vises til brukeren hvis det finnes inndatafelt (brukes for virtuelle produkter).', 'type' => 'streng', 'default' => null],
                'inputs' => ['title' => 'Valgfrie inndatafelt (brukes for virtuelle produkter).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Valgfrie utdatafelt (brukes for virtuelle produkter).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Valgfri blogg- eller nettstedsadresse.', 'type' => 'streng', 'default' => false],
                'status' => ['title' => 'produktstatus Åpne / Lukk, Standard er Åpen.', 'type' => 'enum', 'default' => 'Åpne', 'values' => ['Åpne', 'Lukk']],
                'category_id' => ['title' => 'kategori-ID.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Ledetid i timer..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Produktstil (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Produktets merke..', 'type' => 'streng', 'default' => null],
                'warranty' => ['title' => 'garantibeskrivelse..', 'type' => 'streng', 'default' => null],
                'original' => ['title' => 'Er dette produktet originalt?', 'type' => 'boolsk', 'default' => false],
                'return_warranty' => ['title' => 'Returgaranti etter dager.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Suksess oppdatert produktstatus.', 'type' => 'boolsk'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Legg til nytt produkt fra repository by sku til butikken.',
            'url' => 'butikker/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'streng', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Automatisk innstilling av kategori', 'type' => 'boolsk', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Produkt legg til denne kategorien etter kategori-ID i butikken.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Pris på produktet.', 'type' => 'flyte', 'require' => true],
                'currency' => ['title' => 'Valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Mengde', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Suksess oppdatert produktstatus.', 'type' => 'boolsk'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
