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
            'description' => 'Ottieni l\'elenco dei prodotti del negozio.',
            'url' => 'negozi/{shop_id}/prodotti/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Mostra solo i prodotti disponibili. Può essere vero o falso.', 'type' => 'booleano', 'default' => false],
                'with_parent' => ['title' => 'Ottieni la gerarchia delle categorie principali. Può essere vero o falso.', 'type' => 'booleano', 'default' => false],
                'offset' => ['title' => 'Offset dell\'elenco dei prodotti (per l\'impaginazione).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Numero di prodotti nell\'elenco (per impaginazione).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Tipo di ordinamento dell\'elenco', 'type' => 'enum', 'default' => null, 'values' => [null, 'imparentato', 'più_visitato', 'most_popular', 'più recente', 'più venduto', 'più economico', 'più_costoso', 'casuale', 'imparentato', 'preferito', 'casuale']],
                'product_id' => ['title' => 'Prodotto ID utilizzato per restituire prodotti correlati (sort = correlati).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Insieme di dati del prodotto. Può essere null o spec (null: predefinito, spec: ottimizzato per il recupero delle specifiche).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Cerca testo', 'type' => 'corda', 'default' => null],
                'search_type' => ['title' => 'Tipo di ricerca. Può essere nullo o categoria.', 'type' => 'enum', 'default' => null, 'values' => [null, 'categoria']],
                'dir' => ['title' => 'Categoria ID o nome. Ottiene i prodotti in questa categoria quando impostata.', 'type' => 'Qualunque', 'default' => null],
                'products_only' => ['title' => 'Ottieni solo prodotti (categorie non incluse).', 'type' => 'booleano', 'default' => false],
                'categories_only' => ['title' => 'Ottieni solo categorie (prodotti non inclusi).', 'type' => 'booleano', 'default' => false],
                'need_full_variants' => ['title' => 'Ottieni informazioni complete sulla variante.', 'type' => 'booleano', 'default' => false],
                'optimized' => ['title' => '(Solo quando ottieni prodotti come amministratore) Ottieni l\'elenco dei prodotti senza prezzo, tariffa o statistiche.', 'type' => 'booleano', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'vettore',
                    '_object' => 'Prodotto',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'vettore',
                    '_object' => 'Categoria',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'oggetto',
                    '_object' => 'Categoria',
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
            'description' => 'Ottieni informazioni e statistiche sui prodotti.',
            'url' => 'negozi/{shop_id}/prodotti/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'oggetto',
                    '_object' => 'Prodotto',
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
                    '_type' => 'vettore',
                    '_object' => 'Dati del prodotto',
                    'title' => 'dati degli ultimi 30 giorni',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Informazioni sulla coda degli ordini.',
                    'type' => 'Virtuale: conteggio (int)|Fisico: [count, delivery_state] (array)'
                ],

                'new_comments_count' => [
                    'title' => 'Contano i nuovi commenti.',
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
            'description' => 'Aggiungi un nuovo prodotto al negozio.',
            'url' => 'negozi/{shop_id}/prodotto/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Imposta la tipologia del prodotto/servizio.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Prezzo del prodotto.', 'type' => 'galleggiante', 'require' => true],
                'commission' => ['title' => 'Aggiungi la commissione al prezzo.', 'type' => 'galleggiante', 'default' => 0],
                'discount' => ['title' => 'Sconto sul prezzo del prodotto predefinito.', 'type' => 'galleggiante', 'default' => 0],
                'dis_start' => ['title' => 'Orario di inizio dello sconto nel fuso orario UTC (formato: AAAA-MM-GG HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Ora di fine dello sconto nel fuso orario UTC (formato: AAAA-MM-GG HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'Valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titolo del prodotto.", 'type' => 'corda', 'require' => true],
                'title_en' => ['title' => 'Titolo inglese del prodotto (o sottotitolo)', 'type' => 'corda', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'corda', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'corda', 'default' => null],
                'gtin' => ['title' => "Codice articolo commerciale globale del prodotto.", 'type' => 'corda', 'default' => null],
                'gpc' => ['title' => 'Codice della categoria prodotto Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Condizioni attuali dell'articolo nel tuo negozio.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Il messaggio mostra all\'utente se esistono campi di input (utilizzati per i prodotti virtuali).', 'type' => 'corda', 'default' => null],
                'inputs' => ['title' => 'Campi di input opzionali (utilizzati per prodotti virtuali).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Campi di output opzionali (utilizzati per i prodotti virtuali).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'URL facoltativo del blog o del sito web.', 'type' => 'corda', 'default' => false],
                'status' => ['title' => 'stato del prodotto Apri/Chiudi, l\'impostazione predefinita è Aperto.', 'type' => 'enum', 'default' => 'Aprire', 'values' => ['Aprire', 'Vicino']],
                'category_id' => ['title' => 'identificativo della categoria.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Tempi di consegna in ore..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stile del prodotto (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marca del prodotto..', 'type' => 'corda', 'default' => null],
                'warranty' => ['title' => 'descrizione della garanzia..', 'type' => 'corda', 'default' => null],
                'original' => ['title' => 'Questo prodotto è originale?', 'type' => 'booleano', 'default' => false],
                'return_warranty' => ['title' => 'Garanzia di restituzione entro giorni.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'oggetto',
                    '_object' => 'Prodotto',
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
            'description' => 'Aggiungi un nuovo prodotto al negozio.',
            'url' => 'negozi/{shop_id}/prodotti/{product_id}/modifica',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Imposta la tipologia del prodotto/servizio.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Prezzo del prodotto.', 'type' => 'galleggiante', 'require' => true],
                'commission' => ['title' => 'Aggiungi la commissione al prezzo.', 'type' => 'galleggiante', 'default' => 0],
                'discount' => ['title' => 'Sconto sul prezzo del prodotto predefinito.', 'type' => 'galleggiante', 'default' => 0],
                'dis_start' => ['title' => 'Orario di inizio dello sconto nel fuso orario UTC (formato: AAAA-MM-GG HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Ora di fine dello sconto nel fuso orario UTC (formato: AAAA-MM-GG HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'Valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titolo del prodotto.", 'type' => 'corda', 'require' => true],
                'title_en' => ['title' => 'Titolo inglese del prodotto (o sottotitolo)', 'type' => 'corda', 'default' => null],
                'message' => ['title' => 'Il messaggio mostra all\'utente se esistono campi di input (utilizzati per i prodotti virtuali).', 'type' => 'corda', 'default' => null],
                'inputs' => ['title' => 'Campi di input opzionali (utilizzati per prodotti virtuali).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Campi di output opzionali (utilizzati per i prodotti virtuali).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'URL facoltativo del blog o del sito web.', 'type' => 'corda', 'default' => false],
                'status' => ['title' => 'stato del prodotto Apri/Chiudi, l\'impostazione predefinita è Aperto.', 'type' => 'enum', 'default' => 'Aprire', 'values' => ['Aprire', 'Vicino']],
                'category_id' => ['title' => 'identificativo della categoria.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Tempi di consegna in ore..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stile del prodotto (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marca del prodotto..', 'type' => 'corda', 'default' => null],
                'warranty' => ['title' => 'descrizione della garanzia..', 'type' => 'corda', 'default' => null],
                'original' => ['title' => 'Questo prodotto è originale?', 'type' => 'booleano', 'default' => false],
                'return_warranty' => ['title' => 'Garanzia di restituzione entro giorni.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'oggetto',
                    '_object' => 'Prodotto',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Stato del prodotto aggiornato con successo.', 'type' => 'booleano'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Aggiungi un nuovo prodotto dal repository per sku al negozio.',
            'url' => 'negozi/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'corda', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Categoria di impostazione automatica', 'type' => 'booleano', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Prodotto aggiunto a questa categoria per ID categoria nel negozio.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Prezzo del prodotto.', 'type' => 'galleggiante', 'require' => true],
                'currency' => ['title' => 'Valuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Quantità', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'oggetto',
                    '_object' => 'Prodotto',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Stato del prodotto aggiornato con successo.', 'type' => 'booleano'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
