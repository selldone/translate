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
            'description' => 'Iegūstiet veikala produktu sarakstu.',
            'url' => 'veikali/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Rādīt tikai pieejamos produktus. Var būt patiess vai nepatiess.', 'type' => 'Būla', 'default' => false],
                'with_parent' => ['title' => 'Iegūstiet vecākkategoriju hierarhiju. Var būt patiess vai nepatiess.', 'type' => 'Būla', 'default' => false],
                'offset' => ['title' => 'Preču saraksta nobīde (lapu šķirošanai).', 'type' => 'starpt', 'default' => 0],
                'limit' => ['title' => 'Preču skaits sarakstā (lappušu grozīšanai).', 'type' => 'starpt', 'default' => 20],
                'sort' => ['title' => 'Saraksta kārtošanas veids', 'type' => 'enum', 'default' => null, 'values' => [null, 'saistīti', 'visvairāk_apmeklēts', 'vispopulārākais', 'jaunākais', 'vislabāk pārdotais', 'lētākais', 'visdārgākais', 'nejauši', 'saistīti', 'mīļākie', 'nejauši']],
                'product_id' => ['title' => 'Produkts ID, ko izmanto, lai atgrieztu saistītos produktus (šķirot = saistīti).', 'type' => 'starpt', 'default' => null],
                'set' => ['title' => 'Produkta datu kopa. Var būt nulle vai specifikācija (null: noklusējuma, specifikācija: optimizēta specifikāciju izgūšanai).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Meklēt tekstu', 'type' => 'virkne', 'default' => null],
                'search_type' => ['title' => 'Meklēšanas veids. Var būt nulle vai kategorija.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategorijā']],
                'dir' => ['title' => 'Kategorija ID vai nosaukums. Iegūst šīs kategorijas produktus, kad tas ir iestatīts.', 'type' => 'jebkura', 'default' => null],
                'products_only' => ['title' => 'Iegūstiet tikai produktus (kategorijas nav iekļautas).', 'type' => 'Būla', 'default' => false],
                'categories_only' => ['title' => 'Iegūstiet tikai kategorijas (produkti nav iekļauti).', 'type' => 'Būla', 'default' => false],
                'need_full_variants' => ['title' => 'Iegūstiet pilnu informāciju par variantiem.', 'type' => 'Būla', 'default' => false],
                'optimized' => ['title' => '(Tikai saņemot produktus kā administrators) Iegūstiet produktu sarakstu bez cenas, tarifa vai statistikas.', 'type' => 'Būla', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'masīvs',
                    '_object' => 'Produkts',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'masīvs',
                    '_object' => 'Kategorija',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objektu',
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
            'description' => 'Iegūstiet informāciju par produktu un statistiku.',
            'url' => 'veikali/{veikala_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'objektu',
                    '_object' => 'Produkts',
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
                    '_type' => 'masīvs',
                    '_object' => 'Produkta dati',
                    'title' => 'pēdējo 30 dienu dati',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Pasūtījumi vai informācija.',
                    'type' => 'Virtuāls: skaits (int)|Fiziskais: [skaits, piegādes_stāvoklis] (masīvs)'
                ],

                'new_comments_count' => [
                    'title' => 'Tiek skaitīti jauni komentāri.',
                    'type' => 'starpt'
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
            'description' => 'Pievienojiet veikalam jaunu produktu.',
            'url' => 'veikali/{veikala_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Iestatiet produkta/pakalpojuma veidu.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Produkta cena.', 'type' => 'peldēt', 'require' => true],
                'commission' => ['title' => 'Pievienojiet cenai komisijas maksu.', 'type' => 'peldēt', 'default' => 0],
                'discount' => ['title' => 'Noklusējuma produkta cenas atlaide.', 'type' => 'peldēt', 'default' => 0],
                'dis_start' => ['title' => 'Atlaides sākuma laiks UTC laika joslā (formāts: GGGG-MM-DD HH:mm:ss).', 'type' => 'datums', 'default' => null],
                'dis_end' => ['title' => 'Atlaides beigu laiks UTC laika joslā (formāts: GGGG-MM-DD HH:mm:ss).', 'type' => 'datums', 'default' => null],
                'currency' => ['title' => 'valūta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produkta nosaukums.", 'type' => 'virkne', 'require' => true],
                'title_en' => ['title' => 'Produkta nosaukums angļu valodā (vai apakšnosaukums)', 'type' => 'virkne', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'virkne', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'virkne', 'default' => null],
                'gtin' => ['title' => "Produkta globālās tirdzniecības vienības numurs.", 'type' => 'virkne', 'default' => null],
                'gpc' => ['title' => 'Google produktu kategorijas kods.', 'type' => 'starpt', 'default' => null],
                'condition' => ['title' => "Preces pašreizējais stāvoklis jūsu veikalā.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Ziņojums parādīt lietotājam, ja ir ievades lauki (tiek izmantots virtuālajiem produktiem).', 'type' => 'virkne', 'default' => null],
                'inputs' => ['title' => 'Izvēles ievades lauki (tiek izmantoti virtuālajiem produktiem).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Izvēles izvades lauki (izmanto virtuālajiem produktiem).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Neobligāts emuāra vai vietnes URL.', 'type' => 'virkne', 'default' => false],
                'status' => ['title' => 'produkta statuss Atvērt/Aizvērt, Noklusējums ir Atvērts.', 'type' => 'enum', 'default' => 'Atvērt', 'values' => ['Atvērt', 'Aizvērt']],
                'category_id' => ['title' => 'kategorijas id.', 'type' => 'starpt', 'default' => null],
                'lead' => ['title' => 'Izpildes laiks stundās..', 'type' => 'starpt', 'default' => null],
                'style' => ['title' => 'Produkta stils (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Produkta zīmols..', 'type' => 'virkne', 'default' => null],
                'warranty' => ['title' => 'garantijas apraksts..', 'type' => 'virkne', 'default' => null],
                'original' => ['title' => 'Vai šis produkts ir oriģināls?', 'type' => 'Būla', 'default' => false],
                'return_warranty' => ['title' => 'Atgriešanas garantija pa dienām.', 'type' => 'starpt', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objektu',
                    '_object' => 'Produkts',
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
            'description' => 'Pievienojiet veikalam jaunu produktu.',
            'url' => 'veikali/{veikala_id}/produkti/{produkta_id}/rediģēt',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Iestatiet produkta/pakalpojuma veidu.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Produkta cena.', 'type' => 'peldēt', 'require' => true],
                'commission' => ['title' => 'Pievienojiet cenai komisijas maksu.', 'type' => 'peldēt', 'default' => 0],
                'discount' => ['title' => 'Noklusējuma produkta cenas atlaide.', 'type' => 'peldēt', 'default' => 0],
                'dis_start' => ['title' => 'Atlaides sākuma laiks UTC laika joslā (formāts: GGGG-MM-DD HH:mm:ss).', 'type' => 'datums', 'default' => null],
                'dis_end' => ['title' => 'Atlaides beigu laiks UTC laika joslā (formāts: GGGG-MM-DD HH:mm:ss).', 'type' => 'datums', 'default' => null],
                'currency' => ['title' => 'valūta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produkta nosaukums.", 'type' => 'virkne', 'require' => true],
                'title_en' => ['title' => 'Produkta nosaukums angļu valodā (vai apakšnosaukums)', 'type' => 'virkne', 'default' => null],
                'message' => ['title' => 'Ziņojums parādīt lietotājam, ja ir ievades lauki (tiek izmantots virtuālajiem produktiem).', 'type' => 'virkne', 'default' => null],
                'inputs' => ['title' => 'Izvēles ievades lauki (tiek izmantoti virtuālajiem produktiem).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Izvēles izvades lauki (izmanto virtuālajiem produktiem).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Neobligāts emuāra vai vietnes URL.', 'type' => 'virkne', 'default' => false],
                'status' => ['title' => 'produkta statuss Atvērt/Aizvērt, Noklusējums ir Atvērts.', 'type' => 'enum', 'default' => 'Atvērt', 'values' => ['Atvērt', 'Aizvērt']],
                'category_id' => ['title' => 'kategorijas id.', 'type' => 'starpt', 'default' => null],
                'lead' => ['title' => 'Izpildes laiks stundās..', 'type' => 'starpt', 'default' => null],
                'style' => ['title' => 'Produkta stils (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Produkta zīmols..', 'type' => 'virkne', 'default' => null],
                'warranty' => ['title' => 'garantijas apraksts..', 'type' => 'virkne', 'default' => null],
                'original' => ['title' => 'Vai šis produkts ir oriģināls?', 'type' => 'Būla', 'default' => false],
                'return_warranty' => ['title' => 'Atgriešanas garantija pa dienām.', 'type' => 'starpt', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objektu',
                    '_object' => 'Produkts',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Veiksmīgi atjaunināts produkta stāvoklis.', 'type' => 'Būla'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Pievienojiet veikalam jaunu produktu no krātuves pēc sku.',
            'url' => 'veikali/{veikala_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'virkne', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Automātiski iestatīta kategorija', 'type' => 'Būla', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Preci pievienot šai kategorijai pēc kategorijas ID veikalā.', 'type' => 'starpt', 'default' => null],

                'price' => ['title' => 'Produkta cena.', 'type' => 'peldēt', 'require' => true],
                'currency' => ['title' => 'valūta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Daudzums', 'type' => 'starpt', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objektu',
                    '_object' => 'Produkts',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Veiksmīgi atjaunināts produkta stāvoklis.', 'type' => 'Būla'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
