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
            'description' => 'Hanki myymälän tuoteluettelo.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Näytä vain saatavilla olevat tuotteet. Voi olla totta tai tarua.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Hanki yläluokkahierarkia. Voi olla totta tai tarua.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Tuoteluettelon offset (sivutusta varten).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Tuotteiden lukumäärä luettelossa (sivutusta varten).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Listan lajittelutyyppi', 'type' => 'enum', 'default' => null, 'values' => [null, 'liittyvät', 'eniten_vierailtu', 'suosituin', 'uusin', 'myydyin', 'halvin', 'kallein', 'satunnainen', 'liittyvät', 'suosikki', 'satunnainen']],
                'product_id' => ['title' => 'Tuote ID käytetään vastaavien tuotteiden palauttamiseen (lajittele = liittyvät).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Tuotetietojoukko. Voi olla null tai spec (nolla: oletus, spec: optimoitu teknisten tietojen hakemiseen).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Hae tekstiä', 'type' => 'merkkijono', 'default' => null],
                'search_type' => ['title' => 'Hakutyyppi. Voi olla tyhjä tai luokka.', 'type' => 'enum', 'default' => null, 'values' => [null, 'luokkaan']],
                'dir' => ['title' => 'Luokka ID tai nimi. Saa tämän luokan tuotteet asetettuna.', 'type' => 'mikä tahansa', 'default' => null],
                'products_only' => ['title' => 'Hanki vain tuotteet (luokat eivät sisälly).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Hanki vain luokat (tuotteet eivät sisälly).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Hanki täydelliset versiotiedot.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Vain hankittaessa tuotteita järjestelmänvalvojana) Hanki tuoteluettelo ilman hintoja, hintoja tai tilastoja.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'joukko',
                    '_object' => 'Tuote',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'joukko',
                    '_object' => 'Luokka',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'esine',
                    '_object' => 'Luokka',
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
            'description' => 'Hanki tuotetietoja ja tilastoja.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'esine',
                    '_object' => 'Tuote',
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
                    '_type' => 'joukko',
                    '_object' => 'Tuotetiedot',
                    'title' => 'viimeisen 30 päivän tiedot',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Tilaukset tiedoista.',
                    'type' => 'Virtuaalinen: count (int)|Fyysinen: [count, toimitustila] (joukko)'
                ],

                'new_comments_count' => [
                    'title' => 'Uudet kommentit lasketaan.',
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
            'description' => 'Lisää uusi tuote kauppaan.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Aseta tuotteen/palvelun tyyppi.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Tuotteen hinta.', 'type' => 'kellua', 'require' => true],
                'commission' => ['title' => 'Lisää provisio hintaan.', 'type' => 'kellua', 'default' => 0],
                'discount' => ['title' => 'Tuotteen oletushintaalennus.', 'type' => 'kellua', 'default' => 0],
                'dis_start' => ['title' => 'Alennuksen alkamisaika UTC-aikavyöhykkeellä (muoto: VVVV-KK-PP HH:mm:ss).', 'type' => 'päivämäärä', 'default' => null],
                'dis_end' => ['title' => 'Alennuksen päättymisaika UTC-aikavyöhykkeellä (muoto: VVVV-KK-PP HH:mm:ss).', 'type' => 'päivämäärä', 'default' => null],
                'currency' => ['title' => 'Valuutta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Tuotteen nimi.", 'type' => 'merkkijono', 'require' => true],
                'title_en' => ['title' => 'Tuotteen englanninkielinen nimi (tai alanimike)', 'type' => 'merkkijono', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'merkkijono', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'merkkijono', 'default' => null],
                'gtin' => ['title' => "Tuotteen maailmanlaajuinen kauppanumero.", 'type' => 'merkkijono', 'default' => null],
                'gpc' => ['title' => 'Googlen tuoteluokkakoodi.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Tuotteen nykyinen kunto myymälässäsi.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Viesti näyttää käyttäjälle, onko syöttökenttiä olemassa (käytetään virtuaalisille tuotteille).', 'type' => 'merkkijono', 'default' => null],
                'inputs' => ['title' => 'Valinnaiset syöttökentät (käytetään virtuaalisille tuotteille).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Valinnaiset tulostuskentät (käytetään virtuaalisille tuotteille).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Valinnainen blogin tai verkkosivuston URL-osoite.', 'type' => 'merkkijono', 'default' => false],
                'status' => ['title' => 'tuotteen tila Avaa / Sulje, Oletus on auki.', 'type' => 'enum', 'default' => 'Avaa', 'values' => ['Avaa', 'Sulje']],
                'category_id' => ['title' => 'luokan tunnus.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Toimitusaika tunneissa..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Tuotteen tyyli (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Tuotteen merkki..', 'type' => 'merkkijono', 'default' => null],
                'warranty' => ['title' => 'takuun kuvaus..', 'type' => 'merkkijono', 'default' => null],
                'original' => ['title' => 'Onko tämä tuote alkuperäinen?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Palautustakuu päivinä.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'esine',
                    '_object' => 'Tuote',
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
            'description' => 'Lisää uusi tuote kauppaan.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Aseta tuotteen/palvelun tyyppi.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Tuotteen hinta.', 'type' => 'kellua', 'require' => true],
                'commission' => ['title' => 'Lisää provisio hintaan.', 'type' => 'kellua', 'default' => 0],
                'discount' => ['title' => 'Tuotteen oletushintaalennus.', 'type' => 'kellua', 'default' => 0],
                'dis_start' => ['title' => 'Alennuksen alkamisaika UTC-aikavyöhykkeellä (muoto: VVVV-KK-PP HH:mm:ss).', 'type' => 'päivämäärä', 'default' => null],
                'dis_end' => ['title' => 'Alennuksen päättymisaika UTC-aikavyöhykkeellä (muoto: VVVV-KK-PP HH:mm:ss).', 'type' => 'päivämäärä', 'default' => null],
                'currency' => ['title' => 'Valuutta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Tuotteen nimi.", 'type' => 'merkkijono', 'require' => true],
                'title_en' => ['title' => 'Tuotteen englanninkielinen nimi (tai alanimike)', 'type' => 'merkkijono', 'default' => null],
                'message' => ['title' => 'Viesti näyttää käyttäjälle, onko syöttökenttiä olemassa (käytetään virtuaalisille tuotteille).', 'type' => 'merkkijono', 'default' => null],
                'inputs' => ['title' => 'Valinnaiset syöttökentät (käytetään virtuaalisille tuotteille).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Valinnaiset tulostuskentät (käytetään virtuaalisille tuotteille).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Valinnainen blogin tai verkkosivuston URL-osoite.', 'type' => 'merkkijono', 'default' => false],
                'status' => ['title' => 'tuotteen tila Avaa / Sulje, Oletus on auki.', 'type' => 'enum', 'default' => 'Avaa', 'values' => ['Avaa', 'Sulje']],
                'category_id' => ['title' => 'luokan tunnus.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Toimitusaika tunneissa..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Tuotteen tyyli (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Tuotteen merkki..', 'type' => 'merkkijono', 'default' => null],
                'warranty' => ['title' => 'takuun kuvaus..', 'type' => 'merkkijono', 'default' => null],
                'original' => ['title' => 'Onko tämä tuote alkuperäinen?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Palautustakuu päivinä.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'esine',
                    '_object' => 'Tuote',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Tuotteen tilan päivitys onnistui.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Lisää uusi tuote arkistosta SKUn mukaan kauppaan.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'merkkijono', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Automaattinen luokka', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Lisää tuote tähän luokkaan kategoriatunnuksen mukaan kaupassa.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Tuotteen hinta.', 'type' => 'kellua', 'require' => true],
                'currency' => ['title' => 'Valuutta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Määrä', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'esine',
                    '_object' => 'Tuote',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Tuotteen tilan päivitys onnistui.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
