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
            'description' => 'Skaffa butikens produktlista.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Visa endast tillgängliga produkter. Kan vara sant eller falskt.', 'type' => 'booleskt', 'default' => false],
                'with_parent' => ['title' => 'Hämta den överordnade kategorihierarkin. Kan vara sant eller falskt.', 'type' => 'booleskt', 'default' => false],
                'offset' => ['title' => 'Offset av produktlistan (för paginering).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Antal produkter i listan (för paginering).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Listsorteringstyp', 'type' => 'uppräkning', 'default' => null, 'values' => [null, 'relaterade', 'mest_besökta', 'mest_populär', 'nyaste', 'bästsäljande', 'billigast', 'dyrast', 'slumpmässigt', 'relaterade', 'favorit', 'slumpmässigt']],
                'product_id' => ['title' => 'Produkt ID används för att returnera relaterade produkter (sortering = relaterad).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Produktdatauppsättning. Kan vara null eller spec (null: standard, spec: optimerad för att hämta specifikationer).', 'type' => 'uppräkning', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Sök text', 'type' => 'sträng', 'default' => null],
                'search_type' => ['title' => 'Söktyp. Kan vara null eller kategori.', 'type' => 'uppräkning', 'default' => null, 'values' => [null, 'kategori']],
                'dir' => ['title' => 'Kategori ID eller namn. Får produkter i denna kategori när den ställs in.', 'type' => 'någon', 'default' => null],
                'products_only' => ['title' => 'Få endast produkter (kategorier ingår ej).', 'type' => 'booleskt', 'default' => false],
                'categories_only' => ['title' => 'Få endast kategorier (produkter ingår ej).', 'type' => 'booleskt', 'default' => false],
                'need_full_variants' => ['title' => 'Få fullständig information om varianter.', 'type' => 'booleskt', 'default' => false],
                'optimized' => ['title' => '(Endast när du får produkter som admin) Få produktlistan utan pris, pris eller statistik.', 'type' => 'booleskt', 'default' => false],

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
            'description' => 'Få produktinformation och statistik.',
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
                    'title' => 'senaste 30 dagarnas data',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Beställningar med info.',
                    'type' => 'Virtuell: count (int)|Fysisk: [count, delivery_state] (array)'
                ],

                'new_comments_count' => [
                    'title' => 'Nya kommentarer räknas.',
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
            'description' => 'Lägg till ny produkt i butiken.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Ställ in typ av produkt/tjänst.', 'type' => 'uppräkning', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Priset på produkten.', 'type' => 'flyta', 'require' => true],
                'commission' => ['title' => 'Lägg till provision på priset.', 'type' => 'flyta', 'default' => 0],
                'discount' => ['title' => 'Förinställd produktprisrabatt.', 'type' => 'flyta', 'default' => 0],
                'dis_start' => ['title' => 'Rabatterad starttid i UTC-tidszonen (format: ÅÅÅÅ-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'dis_end' => ['title' => 'Rabattsluttid i UTC-tidszonen (format: ÅÅÅÅ-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'currency' => ['title' => 'Valuta,', 'type' => 'uppräkning', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produktens titel.", 'type' => 'sträng', 'require' => true],
                'title_en' => ['title' => 'Engelsk titel för produkten (eller undertitel)', 'type' => 'sträng', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'sträng', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'sträng', 'default' => null],
                'gtin' => ['title' => "Produktens globala handelsartikelnummer.", 'type' => 'sträng', 'default' => null],
                'gpc' => ['title' => 'Googles produktkategorikod.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Varans nuvarande skick i din butik.", 'type' => 'uppräkning', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Meddelande visas för användaren om inmatningsfält finns (används för virtuella produkter).', 'type' => 'sträng', 'default' => null],
                'inputs' => ['title' => 'Valfria inmatningsfält (används för virtuella produkter).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Valfria utdatafält (används för virtuella produkter).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Valfri blogg- eller webbadress.', 'type' => 'sträng', 'default' => false],
                'status' => ['title' => 'produktstatus Öppna / Stäng, Standard är öppen.', 'type' => 'uppräkning', 'default' => 'Öppna', 'values' => ['Öppna', 'Stäng']],
                'category_id' => ['title' => 'kategori-id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Ledtid i timmar..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Produktens stil (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Produktens märke..', 'type' => 'sträng', 'default' => null],
                'warranty' => ['title' => 'garantibeskrivning..', 'type' => 'sträng', 'default' => null],
                'original' => ['title' => 'Är denna produkt original?', 'type' => 'booleskt', 'default' => false],
                'return_warranty' => ['title' => 'Returgaranti per dagar.', 'type' => 'int', 'default' => 0],


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
            'description' => 'Lägg till ny produkt i butiken.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Ställ in typ av produkt/tjänst.', 'type' => 'uppräkning', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Priset på produkten.', 'type' => 'flyta', 'require' => true],
                'commission' => ['title' => 'Lägg till provision på priset.', 'type' => 'flyta', 'default' => 0],
                'discount' => ['title' => 'Förinställd produktprisrabatt.', 'type' => 'flyta', 'default' => 0],
                'dis_start' => ['title' => 'Rabatterad starttid i UTC-tidszonen (format: ÅÅÅÅ-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'dis_end' => ['title' => 'Rabattsluttid i UTC-tidszonen (format: ÅÅÅÅ-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'currency' => ['title' => 'Valuta,', 'type' => 'uppräkning', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produktens titel.", 'type' => 'sträng', 'require' => true],
                'title_en' => ['title' => 'Engelsk titel för produkten (eller undertitel)', 'type' => 'sträng', 'default' => null],
                'message' => ['title' => 'Meddelande visas för användaren om inmatningsfält finns (används för virtuella produkter).', 'type' => 'sträng', 'default' => null],
                'inputs' => ['title' => 'Valfria inmatningsfält (används för virtuella produkter).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Valfria utdatafält (används för virtuella produkter).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Valfri blogg- eller webbadress.', 'type' => 'sträng', 'default' => false],
                'status' => ['title' => 'produktstatus Öppna / Stäng, Standard är öppen.', 'type' => 'uppräkning', 'default' => 'Öppna', 'values' => ['Öppna', 'Stäng']],
                'category_id' => ['title' => 'kategori-id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Ledtid i timmar..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Produktens stil (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Produktens märke..', 'type' => 'sträng', 'default' => null],
                'warranty' => ['title' => 'garantibeskrivning..', 'type' => 'sträng', 'default' => null],
                'original' => ['title' => 'Är denna produkt original?', 'type' => 'booleskt', 'default' => false],
                'return_warranty' => ['title' => 'Returgaranti per dagar.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Produktstatus har uppdaterats med framgång.', 'type' => 'booleskt'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Lägg till ny produkt från repository by sku till butiken.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'sträng', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Automatisk inställning av kategori', 'type' => 'booleskt', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Produkt lägg till denna kategori efter kategori-id i butiken.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Priset på produkten.', 'type' => 'flyta', 'require' => true],
                'currency' => ['title' => 'Valuta,', 'type' => 'uppräkning', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Kvantitet', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Produktstatus har uppdaterats med framgång.', 'type' => 'booleskt'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
