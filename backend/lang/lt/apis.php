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
            'description' => 'Gaukite parduotuvės produktų sąrašą.',
            'url' => 'parduotuvės/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Rodyti tik turimus produktus. Gali būti tiesa arba klaidinga.', 'type' => 'loginis', 'default' => false],
                'with_parent' => ['title' => 'Gaukite pirminės kategorijos hierarchiją. Gali būti tiesa arba klaidinga.', 'type' => 'loginis', 'default' => false],
                'offset' => ['title' => 'Prekių sąrašo poslinkis (skirti puslapiams).', 'type' => 'tarpt', 'default' => 0],
                'limit' => ['title' => 'Produktų skaičius sąraše (puslapiams).', 'type' => 'tarpt', 'default' => 20],
                'sort' => ['title' => 'Sąrašo rūšiavimo tipas', 'type' => 'enum', 'default' => null, 'values' => [null, 'susiję', 'dažniausiai_lankomi', 'populiariausias', 'naujausias', 'bestseleris', 'pigiausias', 'brangiausias', 'atsitiktinis', 'susiję', 'mėgstamiausias', 'atsitiktinis']],
                'product_id' => ['title' => 'Produktas ID naudojamas susijusiems produktams grąžinti (rūšiuoti = susiję).', 'type' => 'tarpt', 'default' => null],
                'set' => ['title' => 'Produkto duomenų rinkinys. Gali būti nulinis arba specifikacinis (null: numatytasis, spec: optimizuotas specifikacijoms gauti).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Paieškos tekstas', 'type' => 'styga', 'default' => null],
                'search_type' => ['title' => 'Paieškos tipas. Gali būti nulinė arba kategorija.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategorija']],
                'dir' => ['title' => 'Kategorija ID arba pavadinimas. Gets products in this category when set.', 'type' => 'bet koks', 'default' => null],
                'products_only' => ['title' => 'Gaukite tik produktus (kategorijos neįtrauktos).', 'type' => 'loginis', 'default' => false],
                'categories_only' => ['title' => 'Gaukite tik kategorijas (produktai neįtraukti).', 'type' => 'loginis', 'default' => false],
                'need_full_variants' => ['title' => 'Gaukite visą informaciją apie variantus.', 'type' => 'loginis', 'default' => false],
                'optimized' => ['title' => '(Tik gavus produktus kaip administratorius) Gaukite produktų sąrašą be kainos, įkainių ar statistikos.', 'type' => 'loginis', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'masyvas',
                    '_object' => 'Produktas',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'masyvas',
                    '_object' => 'Kategorija',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objektas',
                    '_object' => 'Kategorija',
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
            'description' => 'Gaukite informaciją apie produktą ir statistiką.',
            'url' => 'parduotuvės/{parduotuvės_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'objektas',
                    '_object' => 'Produktas',
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
                    '_type' => 'masyvas',
                    '_object' => 'Produkto duomenys',
                    'title' => 'paskutinių 30 dienų duomenys',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Užsakymai dėl informacijos.',
                    'type' => 'Virtualus: skaičius (int)|Fizinis: [count, delivery_state] (masyvas)'
                ],

                'new_comments_count' => [
                    'title' => 'Nauji komentarai skaičiuojami.',
                    'type' => 'tarpt'
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
            'description' => 'Pridėti naują prekę į parduotuvę.',
            'url' => 'parduotuvės/{parduotuvės_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Nustatykite prekės / paslaugos tipą.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Prekės kaina.', 'type' => 'plūduriuoti', 'require' => true],
                'commission' => ['title' => 'Prie kainos pridėkite komisinius.', 'type' => 'plūduriuoti', 'default' => 0],
                'discount' => ['title' => 'Numatytoji produkto kainos nuolaida.', 'type' => 'plūduriuoti', 'default' => 0],
                'dis_start' => ['title' => 'Nuolaidos pradžios laikas UTC laiko juostoje (formatas: YYYY-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Nuolaidos pabaigos laikas UTC laiko juostoje (formatas: YYYY-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'valiuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produkto pavadinimas.", 'type' => 'styga', 'require' => true],
                'title_en' => ['title' => 'Angliškas produkto pavadinimas (arba subpavadinimas)', 'type' => 'styga', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'styga', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'styga', 'default' => null],
                'gtin' => ['title' => "Produkto pasaulinis prekybos prekės numeris.", 'type' => 'styga', 'default' => null],
                'gpc' => ['title' => 'Google produkto kategorijos kodas.', 'type' => 'tarpt', 'default' => null],
                'condition' => ['title' => "Dabartinė prekės būklė jūsų parduotuvėje.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Pranešimas rodomas vartotojui, jei yra įvesties laukai (naudojami virtualiems produktams).', 'type' => 'styga', 'default' => null],
                'inputs' => ['title' => 'Neprivalomi įvesties laukai (naudojami virtualiems produktams).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Neprivalomi išvesties laukai (naudojami virtualiems produktams).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Neprivalomas tinklaraščio arba svetainės URL.', 'type' => 'styga', 'default' => false],
                'status' => ['title' => 'produkto būsena Atidaryti / Uždaryti, Numatytoji reikšmė yra Atidaryta.', 'type' => 'enum', 'default' => 'Atidaryti', 'values' => ['Atidaryti', 'Uždaryti']],
                'category_id' => ['title' => 'kategorijos id.', 'type' => 'tarpt', 'default' => null],
                'lead' => ['title' => 'Pristatymo laikas valandomis..', 'type' => 'tarpt', 'default' => null],
                'style' => ['title' => 'Produkto stilius (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Prekės prekės ženklas..', 'type' => 'styga', 'default' => null],
                'warranty' => ['title' => 'garantijos aprašymas..', 'type' => 'styga', 'default' => null],
                'original' => ['title' => 'Ar šis produktas originalus?', 'type' => 'loginis', 'default' => false],
                'return_warranty' => ['title' => 'Grąžinimo garantija dienomis.', 'type' => 'tarpt', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objektas',
                    '_object' => 'Produktas',
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
            'description' => 'Pridėti naują prekę į parduotuvę.',
            'url' => 'parduotuvės/{parduotuvės_id}/products/{product_id}/redaguoti',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Nustatykite prekės / paslaugos tipą.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Prekės kaina.', 'type' => 'plūduriuoti', 'require' => true],
                'commission' => ['title' => 'Prie kainos pridėkite komisinius.', 'type' => 'plūduriuoti', 'default' => 0],
                'discount' => ['title' => 'Numatytoji produkto kainos nuolaida.', 'type' => 'plūduriuoti', 'default' => 0],
                'dis_start' => ['title' => 'Nuolaidos pradžios laikas UTC laiko juostoje (formatas: YYYY-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Nuolaidos pabaigos laikas UTC laiko juostoje (formatas: YYYY-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'valiuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produkto pavadinimas.", 'type' => 'styga', 'require' => true],
                'title_en' => ['title' => 'Angliškas produkto pavadinimas (arba subpavadinimas)', 'type' => 'styga', 'default' => null],
                'message' => ['title' => 'Pranešimas rodomas vartotojui, jei yra įvesties laukai (naudojami virtualiems produktams).', 'type' => 'styga', 'default' => null],
                'inputs' => ['title' => 'Neprivalomi įvesties laukai (naudojami virtualiems produktams).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Neprivalomi išvesties laukai (naudojami virtualiems produktams).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Neprivalomas tinklaraščio arba svetainės URL.', 'type' => 'styga', 'default' => false],
                'status' => ['title' => 'produkto būsena Atidaryti / Uždaryti, Numatytoji reikšmė yra Atidaryta.', 'type' => 'enum', 'default' => 'Atidaryti', 'values' => ['Atidaryti', 'Uždaryti']],
                'category_id' => ['title' => 'kategorijos id.', 'type' => 'tarpt', 'default' => null],
                'lead' => ['title' => 'Pristatymo laikas valandomis..', 'type' => 'tarpt', 'default' => null],
                'style' => ['title' => 'Produkto stilius (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Prekės prekės ženklas..', 'type' => 'styga', 'default' => null],
                'warranty' => ['title' => 'garantijos aprašymas..', 'type' => 'styga', 'default' => null],
                'original' => ['title' => 'Ar šis produktas originalus?', 'type' => 'loginis', 'default' => false],
                'return_warranty' => ['title' => 'Grąžinimo garantija dienomis.', 'type' => 'tarpt', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objektas',
                    '_object' => 'Produktas',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Sėkmingai atnaujinta produkto būsena.', 'type' => 'loginis'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Pridėti naują produktą iš saugyklos pagal SKU į parduotuvę.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'styga', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Automatiškai nustatyta kategorija', 'type' => 'loginis', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Prekė pridedama prie šios kategorijos pagal kategorijos ID parduotuvėje.', 'type' => 'tarpt', 'default' => null],

                'price' => ['title' => 'Prekės kaina.', 'type' => 'plūduriuoti', 'require' => true],
                'currency' => ['title' => 'valiuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Kiekis', 'type' => 'tarpt', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objektas',
                    '_object' => 'Produktas',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Sėkmingai atnaujinta produkto būsena.', 'type' => 'loginis'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
