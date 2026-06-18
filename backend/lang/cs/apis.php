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
            'description' => 'Získejte seznam produktů obchodu.',
            'url' => 'obchody/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Zobrazit pouze dostupné produkty. Může být pravdivý nebo nepravdivý.', 'type' => 'booleovský', 'default' => false],
                'with_parent' => ['title' => 'Získejte hierarchii nadřazených kategorií. Může být pravdivý nebo nepravdivý.', 'type' => 'booleovský', 'default' => false],
                'offset' => ['title' => 'Offset seznamu produktů (pro stránkování).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Počet produktů v seznamu (pro stránkování).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Typ řazení seznamu', 'type' => 'enum', 'default' => null, 'values' => [null, 'související', 'nejnavštěvovanější', 'nejoblíbenější', 'nejnovější', 'nejprodávanější', 'nejlevnější', 'nejdražší', 'náhodný', 'související', 'oblíbené', 'náhodný']],
                'product_id' => ['title' => 'Produkt ID slouží k vrácení souvisejících produktů (sort = související).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Sada dat produktu. Může být null nebo spec (null: výchozí, spec: optimalizované pro načítání specifikací).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Hledat text', 'type' => 'řetězec', 'default' => null],
                'search_type' => ['title' => 'Typ vyhledávání. Může být null nebo kategorie.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategorie']],
                'dir' => ['title' => 'Kategorie ID nebo název. Po nastavení získá produkty v této kategorii.', 'type' => 'jakýkoli', 'default' => null],
                'products_only' => ['title' => 'Získejte pouze produkty (kategorie nejsou zahrnuty).', 'type' => 'booleovský', 'default' => false],
                'categories_only' => ['title' => 'Získejte pouze kategorie (produkty nejsou zahrnuty).', 'type' => 'booleovský', 'default' => false],
                'need_full_variants' => ['title' => 'Získejte úplné informace o variantě.', 'type' => 'booleovský', 'default' => false],
                'optimized' => ['title' => '(Pouze při získávání produktů jako správce) Získejte seznam produktů bez ceny, sazby nebo statistiky.', 'type' => 'booleovský', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'pole',
                    '_object' => 'Produkt',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'pole',
                    '_object' => 'Kategorie',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objekt',
                    '_object' => 'Kategorie',
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
            'description' => 'Získejte informace o produktech a statistiky.',
            'url' => 'obchody/{id_obchodu}/produkty/{id_produktu}/admin',
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
                    '_type' => 'pole',
                    '_object' => 'Produktová data',
                    'title' => 'údaje za posledních 30 dní',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Informace o objednávkách.',
                    'type' => 'Virtuální: počet (int)|Fyzické: [count, delivery_state] (pole)'
                ],

                'new_comments_count' => [
                    'title' => 'Nové komentáře se počítají.',
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
            'description' => 'Přidejte nový produkt do obchodu.',
            'url' => 'obchody/{id_obchodu}/produkt/přidat',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Nastavte typ produktu / služby.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Cena produktu.', 'type' => 'plovák', 'require' => true],
                'commission' => ['title' => 'K ceně připočtěte provizi.', 'type' => 'plovák', 'default' => 0],
                'discount' => ['title' => 'Výchozí cena produktu sleva.', 'type' => 'plovák', 'default' => 0],
                'dis_start' => ['title' => 'Čas zahájení slevy v časovém pásmu UTC (formát: RRRR-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'dis_end' => ['title' => 'Čas ukončení slevy v časovém pásmu UTC (formát: RRRR-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'currency' => ['title' => 'měna,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Název produktu.", 'type' => 'řetězec', 'require' => true],
                'title_en' => ['title' => 'anglický název produktu (nebo podnázev)', 'type' => 'řetězec', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'řetězec', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'řetězec', 'default' => null],
                'gtin' => ['title' => "Globální číslo obchodní položky produktu.", 'type' => 'řetězec', 'default' => null],
                'gpc' => ['title' => 'Kód kategorie produktu Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Aktuální stav zboží ve vašem obchodě.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Zpráva zobrazí uživateli, zda existují vstupní pole (používá se pro virtuální produkty).', 'type' => 'řetězec', 'default' => null],
                'inputs' => ['title' => 'Volitelná vstupní pole (používaná pro virtuální produkty).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Volitelná výstupní pole (používaná pro virtuální produkty).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Volitelná adresa URL blogu nebo webu.', 'type' => 'řetězec', 'default' => false],
                'status' => ['title' => 'stav produktu Otevřít / Zavřít, výchozí je Otevřít.', 'type' => 'enum', 'default' => 'Otevřít', 'values' => ['Otevřít', 'Zavřít']],
                'category_id' => ['title' => 'id kategorie.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Dodací lhůta v hodinách..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Styl produktu (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Značka produktu..', 'type' => 'řetězec', 'default' => null],
                'warranty' => ['title' => 'popis záruky..', 'type' => 'řetězec', 'default' => null],
                'original' => ['title' => 'Je tento produkt originální?', 'type' => 'booleovský', 'default' => false],
                'return_warranty' => ['title' => 'Vrácení záruky do dnů.', 'type' => 'int', 'default' => 0],


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
            'description' => 'Přidejte nový produkt do obchodu.',
            'url' => 'obchody/{id_obchodu}/produkty/{id_produktu}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Nastavte typ produktu / služby.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Cena produktu.', 'type' => 'plovák', 'require' => true],
                'commission' => ['title' => 'K ceně připočtěte provizi.', 'type' => 'plovák', 'default' => 0],
                'discount' => ['title' => 'Výchozí cena produktu sleva.', 'type' => 'plovák', 'default' => 0],
                'dis_start' => ['title' => 'Čas zahájení slevy v časovém pásmu UTC (formát: RRRR-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'dis_end' => ['title' => 'Čas ukončení slevy v časovém pásmu UTC (formát: RRRR-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'currency' => ['title' => 'měna,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Název produktu.", 'type' => 'řetězec', 'require' => true],
                'title_en' => ['title' => 'anglický název produktu (nebo podnázev)', 'type' => 'řetězec', 'default' => null],
                'message' => ['title' => 'Zpráva zobrazí uživateli, zda existují vstupní pole (používá se pro virtuální produkty).', 'type' => 'řetězec', 'default' => null],
                'inputs' => ['title' => 'Volitelná vstupní pole (používaná pro virtuální produkty).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Volitelná výstupní pole (používaná pro virtuální produkty).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Volitelná adresa URL blogu nebo webu.', 'type' => 'řetězec', 'default' => false],
                'status' => ['title' => 'stav produktu Otevřít / Zavřít, výchozí je Otevřít.', 'type' => 'enum', 'default' => 'Otevřít', 'values' => ['Otevřít', 'Zavřít']],
                'category_id' => ['title' => 'id kategorie.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Dodací lhůta v hodinách..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Styl produktu (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Značka produktu..', 'type' => 'řetězec', 'default' => null],
                'warranty' => ['title' => 'popis záruky..', 'type' => 'řetězec', 'default' => null],
                'original' => ['title' => 'Je tento produkt originální?', 'type' => 'booleovský', 'default' => false],
                'return_warranty' => ['title' => 'Vrácení záruky do dnů.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Úspěšně aktualizován stav produktu.', 'type' => 'booleovský'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Přidejte nový produkt z úložiště podle sku do obchodu.',
            'url' => 'obchody/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'řetězec', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Kategorie automatického nastavení', 'type' => 'booleovský', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Přidejte produkt do této kategorie podle ID kategorie v obchodě.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Cena produktu.', 'type' => 'plovák', 'require' => true],
                'currency' => ['title' => 'měna,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'množství', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Úspěšně aktualizován stav produktu.', 'type' => 'booleovský'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
