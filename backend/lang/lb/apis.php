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
            'description' => 'Kritt d\'Produktlëscht vum Geschäft.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Show nëmmen verfügbare Produkter. Kann richteg oder falsch sinn.', 'type' => 'boolesch', 'default' => false],
                'with_parent' => ['title' => 'Kréien d\'Elteren Kategorie Hierarchie. Kann richteg oder falsch sinn.', 'type' => 'boolesch', 'default' => false],
                'offset' => ['title' => 'Offset vun der Produktlëscht (fir Paginatioun).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Zuel vun de Produkter an der Lëscht (fir Paginéierung).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Lëscht Zort Zort', 'type' => 'enum', 'default' => null, 'values' => [null, 'Zesummenhang', 'meescht_besicht', 'meescht_populär', 'neisten', 'Bestseller', 'bëllegst', 'am meeschte_deier', 'zoufälleg', 'Zesummenhang', 'Léifsten', 'zoufälleg']],
                'product_id' => ['title' => 'Produit ID benotzt fir Zesummenhang Produiten zréck (Zort = Zesummenhang).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Produit Daten Formatioun. Kann null oder Spec sinn (null: Standard, Spezifizéierung: optimiséiert fir Spezifikatioune zréckzéien).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Sichen Text', 'type' => 'String', 'default' => null],
                'search_type' => ['title' => 'Sich Typ. Kann null oder Kategorie sinn.', 'type' => 'enum', 'default' => null, 'values' => [null, 'Kategorie']],
                'dir' => ['title' => 'Kategorie ID oder Numm. Kritt Produkter an dëser Kategorie wann agestallt.', 'type' => 'iergendeen', 'default' => null],
                'products_only' => ['title' => 'Kritt nëmmen Produkter (Kategorien net abegraff).', 'type' => 'boolesch', 'default' => false],
                'categories_only' => ['title' => 'Kritt nëmmen Kategorien (Produkter net abegraff).', 'type' => 'boolesch', 'default' => false],
                'need_full_variants' => ['title' => 'Fa voll Variant Informatiounen.', 'type' => 'boolesch', 'default' => false],
                'optimized' => ['title' => '(Nëmme wann Dir Produkter als Admin kritt) Kritt d\'Produktlëscht ouni Präis, Taux oder Statistik.', 'type' => 'boolesch', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'Array',
                    '_object' => 'Produit',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'Array',
                    '_object' => 'Kategorie',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'Objet',
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
            'description' => 'Kritt Produktinformatioun a Statistiken.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'Objet',
                    '_object' => 'Produit',
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
                    '_type' => 'Array',
                    '_object' => 'Produit-Daten',
                    'title' => 'lescht 30 Deeg Daten',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Bestellungen que Info.',
                    'type' => 'Virtuell: zielen (int)|Kierperlech: [count, delivery_state] (Array)'
                ],

                'new_comments_count' => [
                    'title' => 'Nei Kommentarer zielen.',
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
            'description' => 'Füügt nei Produkt an de Buttek.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Setzt den Typ vum Produkt / Service.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Präis vum Produkt.', 'type' => 'schwiewen', 'require' => true],
                'commission' => ['title' => 'Füügt Kommissioun zum Präis.', 'type' => 'schwiewen', 'default' => 0],
                'discount' => ['title' => 'Default Produit Präis Remise.', 'type' => 'schwiewen', 'default' => 0],
                'dis_start' => ['title' => 'Remise Startzäit an der UTC Zäitzone (Format: JJJJ-MM-DD HH:mm:ss).', 'type' => 'daten', 'default' => null],
                'dis_end' => ['title' => 'Rabatt Ennzäit an der UTC Zäitzone (Format: JJJJ-MM-DD HH:mm:ss).', 'type' => 'daten', 'default' => null],
                'currency' => ['title' => 'Währung,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produit Titel.", 'type' => 'String', 'require' => true],
                'title_en' => ['title' => 'Englesch Titel vum Produkt (oder Ënnertitel)', 'type' => 'String', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'String', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'String', 'default' => null],
                'gtin' => ['title' => "Produkt Global Trade Artikelnummer.", 'type' => 'String', 'default' => null],
                'gpc' => ['title' => 'Google Produktkategorie Code.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Den aktuellen Zoustand vum Artikel an Ärem Geschäft.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Message weisen dem Benotzer wann Input Felder existéieren (benotzt fir virtuell Produkter).', 'type' => 'String', 'default' => null],
                'inputs' => ['title' => 'Optional Input Felder (benotzt fir virtuell Produkter).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Optional Ausgangsfelder (benotzt fir virtuell Produkter).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Optional Blog oder Websäit URL.', 'type' => 'String', 'default' => false],
                'status' => ['title' => 'Produktstatus Open / Close, Standard ass Open.', 'type' => 'enum', 'default' => 'Oppen', 'values' => ['Oppen', 'Zoumaachen']],
                'category_id' => ['title' => 'Kategorie ID.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Lead Zäit a Stonnen ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stil vum Produkt (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Mark vum Produkt..', 'type' => 'String', 'default' => null],
                'warranty' => ['title' => 'Garantie Beschreiwung ..', 'type' => 'String', 'default' => null],
                'original' => ['title' => 'Dëst Produkt ass original?', 'type' => 'boolesch', 'default' => false],
                'return_warranty' => ['title' => 'Retour Garantie vun Deeg.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'Objet',
                    '_object' => 'Produit',
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
            'description' => 'Füügt nei Produkt an de Buttek.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Setzt den Typ vum Produkt / Service.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Präis vum Produkt.', 'type' => 'schwiewen', 'require' => true],
                'commission' => ['title' => 'Füügt Kommissioun zum Präis.', 'type' => 'schwiewen', 'default' => 0],
                'discount' => ['title' => 'Default Produit Präis Remise.', 'type' => 'schwiewen', 'default' => 0],
                'dis_start' => ['title' => 'Remise Startzäit an der UTC Zäitzone (Format: JJJJ-MM-DD HH:mm:ss).', 'type' => 'daten', 'default' => null],
                'dis_end' => ['title' => 'Rabatt Ennzäit an der UTC Zäitzone (Format: JJJJ-MM-DD HH:mm:ss).', 'type' => 'daten', 'default' => null],
                'currency' => ['title' => 'Währung,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produit Titel.", 'type' => 'String', 'require' => true],
                'title_en' => ['title' => 'Englesch Titel vum Produkt (oder Ënnertitel)', 'type' => 'String', 'default' => null],
                'message' => ['title' => 'Message weisen dem Benotzer wann Input Felder existéieren (benotzt fir virtuell Produkter).', 'type' => 'String', 'default' => null],
                'inputs' => ['title' => 'Optional Input Felder (benotzt fir virtuell Produkter).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Optional Ausgangsfelder (benotzt fir virtuell Produkter).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Optional Blog oder Websäit URL.', 'type' => 'String', 'default' => false],
                'status' => ['title' => 'Produktstatus Open / Close, Standard ass Open.', 'type' => 'enum', 'default' => 'Oppen', 'values' => ['Oppen', 'Zoumaachen']],
                'category_id' => ['title' => 'Kategorie ID.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Lead Zäit a Stonnen ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stil vum Produkt (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Mark vum Produkt..', 'type' => 'String', 'default' => null],
                'warranty' => ['title' => 'Garantie Beschreiwung ..', 'type' => 'String', 'default' => null],
                'original' => ['title' => 'Dëst Produkt ass original?', 'type' => 'boolesch', 'default' => false],
                'return_warranty' => ['title' => 'Retour Garantie vun Deeg.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'Objet',
                    '_object' => 'Produit',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Erfolleg aktualiséiert Produit Staat.', 'type' => 'boolesch'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Füügt neit Produkt vum Repository vum sku an de Buttek.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'String', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Auto Set Kategorie', 'type' => 'boolesch', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Produkt addéieren dës Kategorie no Kategorie ID am Buttek.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Präis vum Produkt.', 'type' => 'schwiewen', 'require' => true],
                'currency' => ['title' => 'Währung,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Quantitéit', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'Objet',
                    '_object' => 'Produit',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Erfolleg aktualiséiert Produit Staat.', 'type' => 'boolesch'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
