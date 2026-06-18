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
            'description' => 'Hankige poe toodete nimekiri.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Kuva ainult saadaolevad tooted. Võib olla tõsi või vale.', 'type' => 'tõeväärtus', 'default' => false],
                'with_parent' => ['title' => 'Hankige ülemkategooria hierarhia. Võib olla tõsi või vale.', 'type' => 'tõeväärtus', 'default' => false],
                'offset' => ['title' => 'Tootenimekirja nihe (lehekülgede jaoks).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Toodete arv loendis (lehekülgede korrastamiseks).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Loendi sortimise tüüp', 'type' => 'enum', 'default' => null, 'values' => [null, 'seotud', 'enim_külastatud', 'kõige_populaarsem', 'uusim', 'enimmüüdud', 'odavaim', 'kõige_ kallim', 'juhuslik', 'seotud', 'lemmik', 'juhuslik']],
                'product_id' => ['title' => 'Toode ID, mida kasutatakse seotud toodete tagastamiseks (sorteeri = seotud).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Tooteandmete kogum. Võib olla null või spetsifikatsioon (null: vaikimisi, spetsifikatsioon: optimeeritud spetsifikatsioonide hankimiseks).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Otsi teksti', 'type' => 'string', 'default' => null],
                'search_type' => ['title' => 'Otsingu tüüp. Võib olla null või kategooria.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategooria']],
                'dir' => ['title' => 'Kategooria ID või nimi. Hangi selle kategooria tooted seadistamisel.', 'type' => 'ükskõik milline', 'default' => null],
                'products_only' => ['title' => 'Hankige ainult tooteid (kategooriaid ei sisalda).', 'type' => 'tõeväärtus', 'default' => false],
                'categories_only' => ['title' => 'Hankige ainult kategooriad (tooted ei kuulu komplekti).', 'type' => 'tõeväärtus', 'default' => false],
                'need_full_variants' => ['title' => 'Hankige täielikku teavet variandi kohta.', 'type' => 'tõeväärtus', 'default' => false],
                'optimized' => ['title' => '(Ainult toodete hankimisel administraatorina) Hankige tooteloend ilma hinna, määra või statistikata.', 'type' => 'tõeväärtus', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'massiivi',
                    '_object' => 'Toode',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'massiivi',
                    '_object' => 'Kategooria',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objektiks',
                    '_object' => 'Kategooria',
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
            'description' => 'Hankige tooteteavet ja statistikat.',
            'url' => 'poed/{poe_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'objektiks',
                    '_object' => 'Toode',
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
                    '_type' => 'massiivi',
                    '_object' => 'Tooteandmed',
                    'title' => 'viimase 30 päeva andmed',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Tellimused küsi infot.',
                    'type' => 'Virtuaalne: count (int)|Füüsiline: [count, delivery_state] (massiivi)'
                ],

                'new_comments_count' => [
                    'title' => 'Uued kommentaarid loevad.',
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
            'description' => 'Lisage poodi uus toode.',
            'url' => 'poed/{poe_id}/toode/lisa',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Määrake toote/teenuse tüüp.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Toote hind.', 'type' => 'ujuk', 'require' => true],
                'commission' => ['title' => 'Lisa hinnale vahendustasu.', 'type' => 'ujuk', 'default' => 0],
                'discount' => ['title' => 'Toote vaikehinna allahindlus.', 'type' => 'ujuk', 'default' => 0],
                'dis_start' => ['title' => 'Allahindluse algusaeg UTC ajavööndis (vorming: YYYY-MM-DD HH:mm:ss).', 'type' => 'kuupäeva', 'default' => null],
                'dis_end' => ['title' => 'Allahindluse lõpuaeg UTC ajavööndis (vorming: YYYY-MM-DD HH:mm:ss).', 'type' => 'kuupäeva', 'default' => null],
                'currency' => ['title' => 'valuuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Toote pealkiri.", 'type' => 'string', 'require' => true],
                'title_en' => ['title' => 'Toote ingliskeelne pealkiri (või alampealkiri)', 'type' => 'string', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'string', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'string', 'default' => null],
                'gtin' => ['title' => "Toote globaalne kaubaartikli number.", 'type' => 'string', 'default' => null],
                'gpc' => ['title' => 'Google\'i tootekategooria kood.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Kauba hetkeseisukord teie poes.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Sõnum näitab kasutajale, kas sisestusväljad on olemas (kasutatakse virtuaalsete toodete puhul).', 'type' => 'string', 'default' => null],
                'inputs' => ['title' => 'Valikulised sisestusväljad (kasutatakse virtuaalsete toodete jaoks).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Valikulised väljundväljad (kasutatakse virtuaalsete toodete jaoks).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Valikuline ajaveebi või veebisaidi URL.', 'type' => 'string', 'default' => false],
                'status' => ['title' => 'toote olek Ava/Sule, Vaikimisi on Avatud.', 'type' => 'enum', 'default' => 'Avatud', 'values' => ['Avatud', 'Sule']],
                'category_id' => ['title' => 'kategooria id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Tarneaeg tundides..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Toote stiil (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Toote kaubamärk..', 'type' => 'string', 'default' => null],
                'warranty' => ['title' => 'garantii kirjeldus..', 'type' => 'string', 'default' => null],
                'original' => ['title' => 'Kas see toode on originaal?', 'type' => 'tõeväärtus', 'default' => false],
                'return_warranty' => ['title' => 'Tagastusgarantii päevade kaupa.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objektiks',
                    '_object' => 'Toode',
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
            'description' => 'Lisage poodi uus toode.',
            'url' => 'poed/{poe_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Määrake toote/teenuse tüüp.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Toote hind.', 'type' => 'ujuk', 'require' => true],
                'commission' => ['title' => 'Lisa hinnale vahendustasu.', 'type' => 'ujuk', 'default' => 0],
                'discount' => ['title' => 'Toote vaikehinna allahindlus.', 'type' => 'ujuk', 'default' => 0],
                'dis_start' => ['title' => 'Allahindluse algusaeg UTC ajavööndis (vorming: YYYY-MM-DD HH:mm:ss).', 'type' => 'kuupäeva', 'default' => null],
                'dis_end' => ['title' => 'Allahindluse lõpuaeg UTC ajavööndis (vorming: YYYY-MM-DD HH:mm:ss).', 'type' => 'kuupäeva', 'default' => null],
                'currency' => ['title' => 'valuuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Toote pealkiri.", 'type' => 'string', 'require' => true],
                'title_en' => ['title' => 'Toote ingliskeelne pealkiri (või alampealkiri)', 'type' => 'string', 'default' => null],
                'message' => ['title' => 'Sõnum näitab kasutajale, kas sisestusväljad on olemas (kasutatakse virtuaalsete toodete puhul).', 'type' => 'string', 'default' => null],
                'inputs' => ['title' => 'Valikulised sisestusväljad (kasutatakse virtuaalsete toodete jaoks).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Valikulised väljundväljad (kasutatakse virtuaalsete toodete jaoks).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Valikuline ajaveebi või veebisaidi URL.', 'type' => 'string', 'default' => false],
                'status' => ['title' => 'toote olek Ava/Sule, Vaikimisi on Avatud.', 'type' => 'enum', 'default' => 'Avatud', 'values' => ['Avatud', 'Sule']],
                'category_id' => ['title' => 'kategooria id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Tarneaeg tundides..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Toote stiil (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Toote kaubamärk..', 'type' => 'string', 'default' => null],
                'warranty' => ['title' => 'garantii kirjeldus..', 'type' => 'string', 'default' => null],
                'original' => ['title' => 'Kas see toode on originaal?', 'type' => 'tõeväärtus', 'default' => false],
                'return_warranty' => ['title' => 'Tagastusgarantii päevade kaupa.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objektiks',
                    '_object' => 'Toode',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Toote oleku värskendamine õnnestus.', 'type' => 'tõeväärtus'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Lisage poodi uus toode hoidlast sku kaupa.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'string', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Automaatselt määratud kategooria', 'type' => 'tõeväärtus', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Toote lisamine sellesse kategooriasse kategooria ID järgi poes.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Toote hind.', 'type' => 'ujuk', 'require' => true],
                'currency' => ['title' => 'valuuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Kogus', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objektiks',
                    '_object' => 'Toode',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Toote oleku värskendamine õnnestus.', 'type' => 'tõeväärtus'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
