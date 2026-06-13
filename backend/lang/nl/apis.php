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
            'description' => 'Haal de productlijst van de winkel op.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Toon alleen beschikbare producten. Kan waar of onwaar zijn.', 'type' => 'Booleaans', 'default' => false],
                'with_parent' => ['title' => 'Haal de bovenliggende categoriehiërarchie op. Kan waar of onwaar zijn.', 'type' => 'Booleaans', 'default' => false],
                'offset' => ['title' => 'Offset van de productlijst (voor paginering).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Aantal producten in de lijst (voor paginering).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Sorteertype lijst', 'type' => 'opsomming', 'default' => null, 'values' => [null, 'gerelateerd', 'meest_bezocht', 'meest_populair', 'nieuwste', 'best verkocht', 'goedkoopste', 'meest_duur', 'willekeurig', 'gerelateerd', 'favoriet', 'willekeurig']],
                'product_id' => ['title' => 'Product ID wordt gebruikt om gerelateerde producten te retourneren (sorteren = gerelateerd).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Productgegevensset. Kan null of spec zijn (null: standaard, spec: geoptimaliseerd voor het ophalen van specificaties).', 'type' => 'opsomming', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Zoek tekst', 'type' => 'touwtje', 'default' => null],
                'search_type' => ['title' => 'Zoektype. Kan nul of categorie zijn.', 'type' => 'opsomming', 'default' => null, 'values' => [null, 'categorie']],
                'dir' => ['title' => 'Categorie ID of naam. Krijgt producten in deze categorie wanneer ingesteld.', 'type' => 'elk', 'default' => null],
                'products_only' => ['title' => 'Ontvang alleen producten (categorieën niet inbegrepen).', 'type' => 'Booleaans', 'default' => false],
                'categories_only' => ['title' => 'Ontvang alleen categorieën (producten niet inbegrepen).', 'type' => 'Booleaans', 'default' => false],
                'need_full_variants' => ['title' => 'Ontvang volledige variantinformatie.', 'type' => 'Booleaans', 'default' => false],
                'optimized' => ['title' => '(Alleen als u producten ophaalt als beheerder) Ontvang de productlijst zonder prijs, tarief of statistieken.', 'type' => 'Booleaans', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'reeks',
                    '_object' => 'Product',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'reeks',
                    '_object' => 'Categorie',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'voorwerp',
                    '_object' => 'Categorie',
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
            'description' => 'Ontvang productinformatie en statistieken.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'voorwerp',
                    '_object' => 'Product',
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
                    '_type' => 'reeks',
                    '_object' => 'Productgegevens',
                    'title' => 'gegevens van de afgelopen 30 dagen',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Bestellingen met informatie.',
                    'type' => 'Virtueel: aantal (int)|Fysiek: [count, delivery_state] (matrix)'
                ],

                'new_comments_count' => [
                    'title' => 'Nieuwe reacties tellen.',
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
            'description' => 'Nieuw product toevoegen aan de winkel.',
            'url' => 'winkels/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Stel het type van het product/dienst in.', 'type' => 'opsomming', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Prijs van het product.', 'type' => 'zweven', 'require' => true],
                'commission' => ['title' => 'Voeg commissie toe aan de prijs.', 'type' => 'zweven', 'default' => 0],
                'discount' => ['title' => 'Standaard productprijskorting.', 'type' => 'zweven', 'default' => 0],
                'dis_start' => ['title' => 'Begintijd van de korting in de UTC-tijdzone (notatie: JJJJ-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'dis_end' => ['title' => 'Eindtijd van de korting in de UTC-tijdzone (notatie: JJJJ-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'currency' => ['title' => 'Valuta,', 'type' => 'opsomming', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titel van het product.", 'type' => 'touwtje', 'require' => true],
                'title_en' => ['title' => 'Engelse titel van het product (of ondertitel)', 'type' => 'touwtje', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'touwtje', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'touwtje', 'default' => null],
                'gtin' => ['title' => "Het wereldwijde handelsartikelnummer van het product.", 'type' => 'touwtje', 'default' => null],
                'gpc' => ['title' => 'Google-productcategoriecode.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "De huidige staat van het artikel in uw winkel.", 'type' => 'opsomming', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Er wordt een bericht weergegeven aan de gebruiker als er invoervelden bestaan (gebruikt voor virtuele producten).', 'type' => 'touwtje', 'default' => null],
                'inputs' => ['title' => 'Optionele invoervelden (gebruikt voor virtuele producten).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Optionele uitvoervelden (gebruikt voor virtuele producten).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Optionele blog- of website-URL.', 'type' => 'touwtje', 'default' => false],
                'status' => ['title' => 'productstatus Open / Sluiten, standaard is Open.', 'type' => 'opsomming', 'default' => 'Openen', 'values' => ['Openen', 'Sluiten']],
                'category_id' => ['title' => 'categorie-id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Doorlooptijd in uren..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stijl van product (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Merk product..', 'type' => 'touwtje', 'default' => null],
                'warranty' => ['title' => 'garantie omschrijving..', 'type' => 'touwtje', 'default' => null],
                'original' => ['title' => 'Dit product is origineel?', 'type' => 'Booleaans', 'default' => false],
                'return_warranty' => ['title' => 'Retourgarantie per dagen.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'voorwerp',
                    '_object' => 'Product',
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
            'description' => 'Nieuw product toevoegen aan de winkel.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Stel het type van het product/dienst in.', 'type' => 'opsomming', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Prijs van het product.', 'type' => 'zweven', 'require' => true],
                'commission' => ['title' => 'Voeg commissie toe aan de prijs.', 'type' => 'zweven', 'default' => 0],
                'discount' => ['title' => 'Standaard productprijskorting.', 'type' => 'zweven', 'default' => 0],
                'dis_start' => ['title' => 'Begintijd van de korting in de UTC-tijdzone (notatie: JJJJ-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'dis_end' => ['title' => 'Eindtijd van de korting in de UTC-tijdzone (notatie: JJJJ-MM-DD HH:mm:ss).', 'type' => 'datum', 'default' => null],
                'currency' => ['title' => 'Valuta,', 'type' => 'opsomming', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titel van het product.", 'type' => 'touwtje', 'require' => true],
                'title_en' => ['title' => 'Engelse titel van het product (of ondertitel)', 'type' => 'touwtje', 'default' => null],
                'message' => ['title' => 'Er wordt een bericht weergegeven aan de gebruiker als er invoervelden bestaan (gebruikt voor virtuele producten).', 'type' => 'touwtje', 'default' => null],
                'inputs' => ['title' => 'Optionele invoervelden (gebruikt voor virtuele producten).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Optionele uitvoervelden (gebruikt voor virtuele producten).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Optionele blog- of website-URL.', 'type' => 'touwtje', 'default' => false],
                'status' => ['title' => 'productstatus Open / Sluiten, standaard is Open.', 'type' => 'opsomming', 'default' => 'Openen', 'values' => ['Openen', 'Sluiten']],
                'category_id' => ['title' => 'categorie-id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Doorlooptijd in uren..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stijl van product (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Merk product..', 'type' => 'touwtje', 'default' => null],
                'warranty' => ['title' => 'garantie omschrijving..', 'type' => 'touwtje', 'default' => null],
                'original' => ['title' => 'Dit product is origineel?', 'type' => 'Booleaans', 'default' => false],
                'return_warranty' => ['title' => 'Retourgarantie per dagen.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'voorwerp',
                    '_object' => 'Product',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Succes bijgewerkte productstatus.', 'type' => 'Booleaans'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Voeg een nieuw product uit de repository via SKU toe aan de winkel.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'touwtje', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Categorie automatisch instellen', 'type' => 'Booleaans', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Product toevoegen aan deze categorie via categorie-ID in de winkel.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Prijs van het product.', 'type' => 'zweven', 'require' => true],
                'currency' => ['title' => 'Valuta,', 'type' => 'opsomming', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Hoeveelheid', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'voorwerp',
                    '_object' => 'Product',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Succes bijgewerkte productstatus.', 'type' => 'Booleaans'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
