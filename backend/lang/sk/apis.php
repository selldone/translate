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
            'description' => 'Získajte zoznam produktov obchodu.',
            'url' => 'obchody/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Zobraziť iba dostupné produkty. Môže byť pravda alebo nepravda.', 'type' => 'boolovská hodnota', 'default' => false],
                'with_parent' => ['title' => 'Získajte hierarchiu nadradenej kategórie. Môže byť pravda alebo nepravda.', 'type' => 'boolovská hodnota', 'default' => false],
                'offset' => ['title' => 'Offset zoznamu produktov (pre stránkovanie).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Počet produktov v zozname (pre stránkovanie).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Typ zoradenia zoznamu', 'type' => 'enum', 'default' => null, 'values' => [null, 'súvisiace', 'najnavštevovanejšie', 'najpopulárnejší', 'najnovšie', 'najpredávanejší', 'najlacnejšie', 'najdrahšie', 'náhodný', 'súvisiace', 'obľúbené', 'náhodný']],
                'product_id' => ['title' => 'Produkt ID slúži na vrátenie súvisiacich produktov (triediť = súvisiace).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Súbor údajov o produkte. Môže byť null alebo spec (null: predvolené, spec: optimalizované na načítanie špecifikácií).', 'type' => 'enum', 'default' => null, 'values' => [null, 'špec']],
                'search' => ['title' => 'Vyhľadajte text', 'type' => 'reťazec', 'default' => null],
                'search_type' => ['title' => 'Typ vyhľadávania. Môže byť null alebo kategória.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategórii']],
                'dir' => ['title' => 'Kategória ID alebo názov. Po nastavení získa produkty v tejto kategórii.', 'type' => 'akékoľvek', 'default' => null],
                'products_only' => ['title' => 'Získajte iba produkty (kategórie nie sú zahrnuté).', 'type' => 'boolovská hodnota', 'default' => false],
                'categories_only' => ['title' => 'Získajte iba kategórie (produkty nie sú zahrnuté).', 'type' => 'boolovská hodnota', 'default' => false],
                'need_full_variants' => ['title' => 'Získajte úplné informácie o variante.', 'type' => 'boolovská hodnota', 'default' => false],
                'optimized' => ['title' => '(Len pri získavaní produktov ako správca) Získajte zoznam produktov bez ceny, sadzby alebo štatistiky.', 'type' => 'boolovská hodnota', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'pole',
                    '_object' => 'Produkt',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'pole',
                    '_object' => 'Kategória',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objekt',
                    '_object' => 'Kategória',
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
            'description' => 'Získajte informácie o produktoch a štatistiky.',
            'url' => 'obchody/{shop_id}/products/{product_id}/admin',
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
                    '_object' => 'Údaje o produkte',
                    'title' => 'údaje za posledných 30 dní',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Informácie o objednávkach.',
                    'type' => 'Virtuálne: počet (int)|Fyzické: [count, delivery_state] (pole)'
                ],

                'new_comments_count' => [
                    'title' => 'Nové komentáre sa počítajú.',
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
            'description' => 'Pridajte nový produkt do obchodu.',
            'url' => 'obchody/{id_obchodu}/produkt/pridat',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Nastavte typ produktu / služby.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Cena produktu.', 'type' => 'plávať', 'require' => true],
                'commission' => ['title' => 'K cene prirátajte províziu.', 'type' => 'plávať', 'default' => 0],
                'discount' => ['title' => 'Štandardná zľava z ceny produktu.', 'type' => 'plávať', 'default' => 0],
                'dis_start' => ['title' => 'Čas začiatku zľavy v časovom pásme UTC (formát: RRRR-MM-DD HH:mm:ss).', 'type' => 'dátum', 'default' => null],
                'dis_end' => ['title' => 'Čas ukončenia zľavy v časovom pásme UTC (formát: RRRR-MM-DD HH:mm:ss).', 'type' => 'dátum', 'default' => null],
                'currency' => ['title' => 'mena,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Názov produktu.", 'type' => 'reťazec', 'require' => true],
                'title_en' => ['title' => 'anglický názov produktu (alebo podnázov)', 'type' => 'reťazec', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'reťazec', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'reťazec', 'default' => null],
                'gtin' => ['title' => "Globálne číslo obchodnej položky produktu.", 'type' => 'reťazec', 'default' => null],
                'gpc' => ['title' => 'Kód kategórie produktu Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Aktuálny stav tovaru vo vašej predajni.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Správa zobrazí používateľovi, či existujú vstupné polia (používané pre virtuálne produkty).', 'type' => 'reťazec', 'default' => null],
                'inputs' => ['title' => 'Voliteľné vstupné polia (používané pre virtuálne produkty).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Voliteľné výstupné polia (používané pre virtuálne produkty).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Voliteľná adresa URL blogu alebo webovej stránky.', 'type' => 'reťazec', 'default' => false],
                'status' => ['title' => 'stav produktu Otvoriť / Zatvoriť, predvolená hodnota je Otvoriť.', 'type' => 'enum', 'default' => 'Otvorte', 'values' => ['Otvorte', 'Zavrieť']],
                'category_id' => ['title' => 'ID kategórie.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Dodacia lehota v hodinách..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Štýl produktu (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Značka produktu..', 'type' => 'reťazec', 'default' => null],
                'warranty' => ['title' => 'popis záruky..', 'type' => 'reťazec', 'default' => null],
                'original' => ['title' => 'Je tento produkt originálny?', 'type' => 'boolovská hodnota', 'default' => false],
                'return_warranty' => ['title' => 'Vrátenie záruky do dní.', 'type' => 'int', 'default' => 0],


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
            'description' => 'Pridajte nový produkt do obchodu.',
            'url' => 'obchody/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Nastavte typ produktu / služby.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Cena produktu.', 'type' => 'plávať', 'require' => true],
                'commission' => ['title' => 'K cene prirátajte províziu.', 'type' => 'plávať', 'default' => 0],
                'discount' => ['title' => 'Štandardná zľava z ceny produktu.', 'type' => 'plávať', 'default' => 0],
                'dis_start' => ['title' => 'Čas začiatku zľavy v časovom pásme UTC (formát: RRRR-MM-DD HH:mm:ss).', 'type' => 'dátum', 'default' => null],
                'dis_end' => ['title' => 'Čas ukončenia zľavy v časovom pásme UTC (formát: RRRR-MM-DD HH:mm:ss).', 'type' => 'dátum', 'default' => null],
                'currency' => ['title' => 'mena,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Názov produktu.", 'type' => 'reťazec', 'require' => true],
                'title_en' => ['title' => 'anglický názov produktu (alebo podnázov)', 'type' => 'reťazec', 'default' => null],
                'message' => ['title' => 'Správa zobrazí používateľovi, či existujú vstupné polia (používané pre virtuálne produkty).', 'type' => 'reťazec', 'default' => null],
                'inputs' => ['title' => 'Voliteľné vstupné polia (používané pre virtuálne produkty).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Voliteľné výstupné polia (používané pre virtuálne produkty).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Voliteľná adresa URL blogu alebo webovej stránky.', 'type' => 'reťazec', 'default' => false],
                'status' => ['title' => 'stav produktu Otvoriť / Zatvoriť, predvolená hodnota je Otvoriť.', 'type' => 'enum', 'default' => 'Otvorte', 'values' => ['Otvorte', 'Zavrieť']],
                'category_id' => ['title' => 'ID kategórie.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Dodacia lehota v hodinách..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Štýl produktu (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Značka produktu..', 'type' => 'reťazec', 'default' => null],
                'warranty' => ['title' => 'popis záruky..', 'type' => 'reťazec', 'default' => null],
                'original' => ['title' => 'Je tento produkt originálny?', 'type' => 'boolovská hodnota', 'default' => false],
                'return_warranty' => ['title' => 'Vrátenie záruky do dní.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Úspešne aktualizovaný stav produktu.', 'type' => 'boolovská hodnota'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Pridajte nový produkt z úložiska podľa sku do obchodu.',
            'url' => 'obchody/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'reťazec', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Kategória automatického nastavenia', 'type' => 'boolovská hodnota', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Pridajte produkt do tejto kategórie podľa ID kategórie v obchode.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Cena produktu.', 'type' => 'plávať', 'require' => true],
                'currency' => ['title' => 'mena,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Množstvo', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Úspešne aktualizovaný stav produktu.', 'type' => 'boolovská hodnota'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
