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
            'description' => 'Få butikkens produktliste.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Vis kun tilgængelige produkter. Kan være sandt eller falsk.', 'type' => 'boolesk', 'default' => false],
                'with_parent' => ['title' => 'Få det overordnede kategorihierarki. Kan være sandt eller falsk.', 'type' => 'boolesk', 'default' => false],
                'offset' => ['title' => 'Offset af produktlisten (til paginering).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Antal produkter på listen (til paginering).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Listesorteringstype', 'type' => 'enum', 'default' => null, 'values' => [null, 'relateret', 'mest_besøgte', 'mest_populære', 'nyeste', 'bestseller', 'billigste', 'dyrest', 'tilfældigt', 'relateret', 'favorit', 'tilfældigt']],
                'product_id' => ['title' => 'Produkt ID bruges til at returnere relaterede produkter (sort = relateret).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Produktdatasæt. Kan være null eller spec (null: standard, spec: optimeret til at hente specifikationer).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Søg tekst', 'type' => 'streng', 'default' => null],
                'search_type' => ['title' => 'Søgetype. Kan være null eller kategori.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategori']],
                'dir' => ['title' => 'Kategori ID eller navn. Får produkter i denne kategori, når den er indstillet.', 'type' => 'nogen', 'default' => null],
                'products_only' => ['title' => 'Få kun produkter (kategorier ikke inkluderet).', 'type' => 'boolesk', 'default' => false],
                'categories_only' => ['title' => 'Få kun kategorier (produkter er ikke inkluderet).', 'type' => 'boolesk', 'default' => false],
                'need_full_variants' => ['title' => 'Få fuld variantinformation.', 'type' => 'boolesk', 'default' => false],
                'optimized' => ['title' => '(Kun når du får produkter som admin) Få produktlisten uden pris, pris eller statistik.', 'type' => 'boolesk', 'default' => false],

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
            'description' => 'Få produktinformation og statistik.',
            'url' => 'butikker/{shop_id}/products/{product_id}/admin',
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
                    'title' => 'seneste 30 dages data',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Ordrer med info.',
                    'type' => 'Virtuel: tæller (int)|Fysisk: [antal, leveringstilstand] (matrix)'
                ],

                'new_comments_count' => [
                    'title' => 'Nye kommentarer tæller.',
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
            'description' => 'Tilføj nyt produkt til butikken.',
            'url' => 'butikker/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Indstil type af produktet/tjenesten.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Produktets pris.', 'type' => 'flyde', 'require' => true],
                'commission' => ['title' => 'Tilføj kommission til prisen.', 'type' => 'flyde', 'default' => 0],
                'discount' => ['title' => 'Standard rabat på produktpris.', 'type' => 'flyde', 'default' => 0],
                'dis_start' => ['title' => 'Rabatstarttid i UTC-tidszonen (format: ÅÅÅÅ-MM-DD HH:mm:ss).', 'type' => 'dato', 'default' => null],
                'dis_end' => ['title' => 'Rabatsluttid i UTC-tidszonen (format: ÅÅÅÅ-MM-DD HH:mm:ss).', 'type' => 'dato', 'default' => null],
                'currency' => ['title' => 'Valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produktets titel.", 'type' => 'streng', 'require' => true],
                'title_en' => ['title' => 'Engelsk titel på produktet (eller undertitel)', 'type' => 'streng', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'streng', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'streng', 'default' => null],
                'gtin' => ['title' => "Produktets globale varenummer.", 'type' => 'streng', 'default' => null],
                'gpc' => ['title' => 'Google-produktkategorikode.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Varens aktuelle tilstand i din butik.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Meddelelse vises til brugeren, hvis der findes inputfelter (bruges til virtuelle produkter).', 'type' => 'streng', 'default' => null],
                'inputs' => ['title' => 'Valgfri inputfelter (bruges til virtuelle produkter).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Valgfri outputfelter (bruges til virtuelle produkter).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Valgfri blog eller hjemmeside-url.', 'type' => 'streng', 'default' => false],
                'status' => ['title' => 'produktstatus Åben/Luk, Standard er Åben.', 'type' => 'enum', 'default' => 'Åbn', 'values' => ['Åbn', 'Luk']],
                'category_id' => ['title' => 'kategori-id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Leveringstid i timer..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Produktets stil (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Produktets mærke..', 'type' => 'streng', 'default' => null],
                'warranty' => ['title' => 'garanti beskrivelse..', 'type' => 'streng', 'default' => null],
                'original' => ['title' => 'Er dette produkt originalt?', 'type' => 'boolesk', 'default' => false],
                'return_warranty' => ['title' => 'Returgaranti efter dage.', 'type' => 'int', 'default' => 0],


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
            'description' => 'Tilføj nyt produkt til butikken.',
            'url' => 'butikker/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Indstil type af produktet/tjenesten.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Produktets pris.', 'type' => 'flyde', 'require' => true],
                'commission' => ['title' => 'Tilføj kommission til prisen.', 'type' => 'flyde', 'default' => 0],
                'discount' => ['title' => 'Standard rabat på produktpris.', 'type' => 'flyde', 'default' => 0],
                'dis_start' => ['title' => 'Rabatstarttid i UTC-tidszonen (format: ÅÅÅÅ-MM-DD HH:mm:ss).', 'type' => 'dato', 'default' => null],
                'dis_end' => ['title' => 'Rabatsluttid i UTC-tidszonen (format: ÅÅÅÅ-MM-DD HH:mm:ss).', 'type' => 'dato', 'default' => null],
                'currency' => ['title' => 'Valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produktets titel.", 'type' => 'streng', 'require' => true],
                'title_en' => ['title' => 'Engelsk titel på produktet (eller undertitel)', 'type' => 'streng', 'default' => null],
                'message' => ['title' => 'Meddelelse vises til brugeren, hvis der findes inputfelter (bruges til virtuelle produkter).', 'type' => 'streng', 'default' => null],
                'inputs' => ['title' => 'Valgfri inputfelter (bruges til virtuelle produkter).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Valgfri outputfelter (bruges til virtuelle produkter).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Valgfri blog eller hjemmeside-url.', 'type' => 'streng', 'default' => false],
                'status' => ['title' => 'produktstatus Åben/Luk, Standard er Åben.', 'type' => 'enum', 'default' => 'Åbn', 'values' => ['Åbn', 'Luk']],
                'category_id' => ['title' => 'kategori-id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Leveringstid i timer..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Produktets stil (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Produktets mærke..', 'type' => 'streng', 'default' => null],
                'warranty' => ['title' => 'garanti beskrivelse..', 'type' => 'streng', 'default' => null],
                'original' => ['title' => 'Er dette produkt originalt?', 'type' => 'boolesk', 'default' => false],
                'return_warranty' => ['title' => 'Returgaranti efter dage.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Succes opdateret produktstatus.', 'type' => 'boolesk'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Tilføj nyt produkt fra repository by sku til shoppen.',
            'url' => 'butikker/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'streng', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Automatisk indstilling af kategori', 'type' => 'boolesk', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Produkt tilføjes til denne kategori efter kategori-id i butikken.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Produktets pris.', 'type' => 'flyde', 'require' => true],
                'currency' => ['title' => 'Valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Mængde', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Succes opdateret produktstatus.', 'type' => 'boolesk'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
