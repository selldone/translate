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
            'description' => 'Holen Sie sich die Produktliste des Shops.',
            'url' => 'shop/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Nur verfügbare Produkte anzeigen. Kann wahr oder falsch sein.', 'type' => 'Boolescher Wert', 'default' => false],
                'with_parent' => ['title' => 'Rufen Sie die übergeordnete Kategoriehierarchie ab. Kann wahr oder falsch sein.', 'type' => 'Boolescher Wert', 'default' => false],
                'offset' => ['title' => 'Offset der Produktliste (zur Paginierung).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Anzahl der Produkte in der Liste (zur Paginierung).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Sortiertyp der Liste', 'type' => 'Aufzählung', 'default' => null, 'values' => [null, 'verwandt', 'am meisten_besucht', 'am beliebtesten', 'neueste', 'Bestseller', 'am günstigsten', 'am teuersten', 'zufällig', 'verwandt', 'Favorit', 'zufällig']],
                'product_id' => ['title' => 'Produkt ID wird zur Rückgabe verwandter Produkte verwendet (Sortierung = verwandt).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Produktdatensatz. Kann null oder spec sein (null: Standard, spec: optimiert zum Abrufen von Spezifikationen).', 'type' => 'Aufzählung', 'default' => null, 'values' => [null, 'spez']],
                'search' => ['title' => 'Suchtext', 'type' => 'Zeichenfolge', 'default' => null],
                'search_type' => ['title' => 'Suchtyp. Kann null oder Kategorie sein.', 'type' => 'Aufzählung', 'default' => null, 'values' => [null, 'Kategorie']],
                'dir' => ['title' => 'Kategorie ID oder Name. Ruft bei Festlegung Produkte in dieser Kategorie ab.', 'type' => 'irgendein', 'default' => null],
                'products_only' => ['title' => 'Erhalten Sie nur Produkte (Kategorien nicht enthalten).', 'type' => 'Boolescher Wert', 'default' => false],
                'categories_only' => ['title' => 'Erhalten Sie nur Kategorien (Produkte nicht enthalten).', 'type' => 'Boolescher Wert', 'default' => false],
                'need_full_variants' => ['title' => 'Erhalten Sie vollständige Varianteninformationen.', 'type' => 'Boolescher Wert', 'default' => false],
                'optimized' => ['title' => '(Nur beim Abrufen von Produkten als Administrator) Erhalten Sie die Produktliste ohne Preis, Preis oder Statistiken.', 'type' => 'Boolescher Wert', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'Array',
                    '_object' => 'Produkt',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'Array',
                    '_object' => 'Kategorie',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'Objekt',
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
            'description' => 'Erhalten Sie Produktinformationen und Statistiken.',
            'url' => 'shop/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'Objekt',
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
                    '_type' => 'Array',
                    '_object' => 'Produktdaten',
                    'title' => 'Daten der letzten 30 Tage',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Bestellen Sie Informationen.',
                    'type' => 'Virtuell: count (int)|Physisch: [count, Delivery_state] (Array)'
                ],

                'new_comments_count' => [
                    'title' => 'Neue Kommentare zählen.',
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
            'description' => 'Neues Produkt zum Shop hinzufügen.',
            'url' => 'shop/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Legen Sie den Typ des Produkts/der Dienstleistung fest.', 'type' => 'Aufzählung', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Preis des Produkts.', 'type' => 'schweben', 'require' => true],
                'commission' => ['title' => 'Provision zum Preis hinzufügen.', 'type' => 'schweben', 'default' => 0],
                'discount' => ['title' => 'Standardmäßiger Produktpreisnachlass.', 'type' => 'schweben', 'default' => 0],
                'dis_start' => ['title' => 'Startzeit des Rabatts in der UTC-Zeitzone (Format: JJJJ-MM-TT HH:mm:ss).', 'type' => 'Datum', 'default' => null],
                'dis_end' => ['title' => 'Endzeit des Rabatts in der UTC-Zeitzone (Format: JJJJ-MM-TT HH:mm:ss).', 'type' => 'Datum', 'default' => null],
                'currency' => ['title' => 'Währung,', 'type' => 'Aufzählung', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titel des Produkts.", 'type' => 'Zeichenfolge', 'require' => true],
                'title_en' => ['title' => 'Englischer Titel des Produkts (oder Untertitel)', 'type' => 'Zeichenfolge', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'Zeichenfolge', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'Zeichenfolge', 'default' => null],
                'gtin' => ['title' => "Globale Handelsartikelnummer des Produkts.", 'type' => 'Zeichenfolge', 'default' => null],
                'gpc' => ['title' => 'Google-Produktkategoriecode.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Der aktuelle Zustand des Artikels in Ihrem Geschäft.", 'type' => 'Aufzählung', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Dem Benutzer wird eine Meldung angezeigt, wenn Eingabefelder vorhanden sind (wird für virtuelle Produkte verwendet).', 'type' => 'Zeichenfolge', 'default' => null],
                'inputs' => ['title' => 'Optionale Eingabefelder (wird für virtuelle Produkte verwendet).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Optionale Ausgabefelder (wird für virtuelle Produkte verwendet).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Optionale Blog- oder Website-URL.', 'type' => 'Zeichenfolge', 'default' => false],
                'status' => ['title' => 'Produktstatus Öffnen/Schließen, Standard ist Offen.', 'type' => 'Aufzählung', 'default' => 'Offen', 'values' => ['Offen', 'Schließen']],
                'category_id' => ['title' => 'Kategorie-ID.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Lieferzeit in Stunden..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stil des Produkts (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marke des Produkts..', 'type' => 'Zeichenfolge', 'default' => null],
                'warranty' => ['title' => 'Garantiebeschreibung..', 'type' => 'Zeichenfolge', 'default' => null],
                'original' => ['title' => 'Dieses Produkt ist original?', 'type' => 'Boolescher Wert', 'default' => false],
                'return_warranty' => ['title' => 'Rückgabegarantie nach Tagen.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'Objekt',
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
            'description' => 'Neues Produkt zum Shop hinzufügen.',
            'url' => 'shop/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Legen Sie den Typ des Produkts/der Dienstleistung fest.', 'type' => 'Aufzählung', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Preis des Produkts.', 'type' => 'schweben', 'require' => true],
                'commission' => ['title' => 'Provision zum Preis hinzufügen.', 'type' => 'schweben', 'default' => 0],
                'discount' => ['title' => 'Standardmäßiger Produktpreisnachlass.', 'type' => 'schweben', 'default' => 0],
                'dis_start' => ['title' => 'Startzeit des Rabatts in der UTC-Zeitzone (Format: JJJJ-MM-TT HH:mm:ss).', 'type' => 'Datum', 'default' => null],
                'dis_end' => ['title' => 'Endzeit des Rabatts in der UTC-Zeitzone (Format: JJJJ-MM-TT HH:mm:ss).', 'type' => 'Datum', 'default' => null],
                'currency' => ['title' => 'Währung,', 'type' => 'Aufzählung', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titel des Produkts.", 'type' => 'Zeichenfolge', 'require' => true],
                'title_en' => ['title' => 'Englischer Titel des Produkts (oder Untertitel)', 'type' => 'Zeichenfolge', 'default' => null],
                'message' => ['title' => 'Dem Benutzer wird eine Meldung angezeigt, wenn Eingabefelder vorhanden sind (wird für virtuelle Produkte verwendet).', 'type' => 'Zeichenfolge', 'default' => null],
                'inputs' => ['title' => 'Optionale Eingabefelder (wird für virtuelle Produkte verwendet).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Optionale Ausgabefelder (wird für virtuelle Produkte verwendet).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Optionale Blog- oder Website-URL.', 'type' => 'Zeichenfolge', 'default' => false],
                'status' => ['title' => 'Produktstatus Öffnen/Schließen, Standard ist Offen.', 'type' => 'Aufzählung', 'default' => 'Offen', 'values' => ['Offen', 'Schließen']],
                'category_id' => ['title' => 'Kategorie-ID.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Lieferzeit in Stunden..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stil des Produkts (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marke des Produkts..', 'type' => 'Zeichenfolge', 'default' => null],
                'warranty' => ['title' => 'Garantiebeschreibung..', 'type' => 'Zeichenfolge', 'default' => null],
                'original' => ['title' => 'Dieses Produkt ist original?', 'type' => 'Boolescher Wert', 'default' => false],
                'return_warranty' => ['title' => 'Rückgabegarantie nach Tagen.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'Objekt',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Der Produktstatus wurde erfolgreich aktualisiert.', 'type' => 'Boolescher Wert'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Neues Produkt aus dem Repository nach SKU zum Shop hinzufügen.',
            'url' => 'shop/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'Zeichenfolge', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Kategorie automatisch festlegen', 'type' => 'Boolescher Wert', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Produkt zu dieser Kategorie nach Kategorie-ID im Shop hinzufügen.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Preis des Produkts.', 'type' => 'schweben', 'require' => true],
                'currency' => ['title' => 'Währung,', 'type' => 'Aufzählung', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Menge', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'Objekt',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Der Produktstatus wurde erfolgreich aktualisiert.', 'type' => 'Boolescher Wert'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
