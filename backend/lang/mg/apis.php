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
            'description' => 'Raiso ny lisitry ny vokatra ao amin\'ny fivarotana.',
            'url' => 'fivarotana/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Asehoy ihany ny vokatra azo. Mety ho marina na diso.
Sary', 'type' => 'boolean
Sary', 'default' => false],
                'with_parent' => ['title' => 'Alao ny ambaratongan\'ny sokajy ray aman-dreny. Mety ho marina na diso.
Sary', 'type' => 'boolean
Sary', 'default' => false],
                'offset' => ['title' => 'Offset ny lisitry ny vokatra (ho an\'ny pagination).
Sary', 'type' => 'int
Sary', 'default' => 0],
                'limit' => ['title' => 'Isan\'ny vokatra ao anaty lisitra (ho an\'ny pagination).
Sary', 'type' => 'int
Sary', 'default' => 20],
                'sort' => ['title' => 'Karazana karazana lisitra
Sary', 'type' => 'enum
Sary', 'default' => null, 'values' => [null, 'mifandraika
Sary', 'be_tsidika
Sary', 'be_malaza
Sary', 'vaovao
Sary', 'bestselling
Sary', 'mora indrindra
Ampahany', 'lafo indrindra
Sary', 'kisendrasendra
Sary', 'mifandraika
Sary', 'tiany indrindra
Sary', 'kisendrasendra
Sary']],
                'product_id' => ['title' => 'Product ID ampiasaina hamerenana ny vokatra mifandraika (sort = mifandraika).
Sary', 'type' => 'int
Sary', 'default' => null],
                'set' => ['title' => 'angon-drakitra vokatra. Mety ho null na spec (null: default, spec: optimized ho an\'ny retrieving specifications).
Sary', 'type' => 'enum
Sary', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Fikarohana lahatsoratra', 'type' => 'tady
Sary', 'default' => null],
                'search_type' => ['title' => 'Karazana fikarohana. Mety ho null na sokajy.
Sary', 'type' => 'enum
Sary', 'default' => null, 'values' => [null, 'sokajy']],
                'dir' => ['title' => 'Sokajy ID na anarana. Mahazo vokatra amin\'ity sokajy ity rehefa napetraka.
Sary', 'type' => 'any', 'default' => null],
                'products_only' => ['title' => 'Mahazo vokatra ihany (sokajy tsy tafiditra).', 'type' => 'boolean
Sary', 'default' => false],
                'categories_only' => ['title' => 'Mahazoa sokajy ihany (vokatra tsy tafiditra).
Sary', 'type' => 'boolean
Sary', 'default' => false],
                'need_full_variants' => ['title' => 'Mahazoa fampahafantarana variana feno.
Sary', 'type' => 'boolean
Sary', 'default' => false],
                'optimized' => ['title' => '(Rehefa mahazo vokatra ho admin ihany) Alao ny lisitry ny vokatra tsy misy vidiny, sarany, na antontan\'isa.
Sary', 'type' => 'boolean
Sary', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'array
Sary',
                    '_object' => 'vokatra
Sary',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'array
Sary',
                    '_object' => 'Sokajy
Sary',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'zavatra
Sary',
                    '_object' => 'Sokajy
Sary',
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
            'description' => 'Mahazoa vaovao momba ny vokatra sy antontan\'isa.
Sary',
            'url' => 'fivarotana/{shop_id}/products/{product_id}/admin
Sary',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'zavatra
Sary',
                    '_object' => 'vokatra
Sary',
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
                    '_type' => 'array
Sary',
                    '_object' => 'Product-Data
Sary',
                    'title' => 'data 30 andro farany
Sary',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Mandray commande azafady.
Sary',
                    'type' => 'Virtual: isa (int)|Ara-batana: [fanisana, fanjakana_fanaterana] (array)'
                ],

                'new_comments_count' => [
                    'title' => 'Miisa ny fanehoan-kevitra vaovao.
Sary',
                    'type' => 'int
Sary'
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
            'description' => 'Manampia vokatra vaovao amin\'ny fivarotana.',
            'url' => 'fivarotana/{shop_id}/product/add
Sary',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Mametraka karazana vokatra / serivisy.
Sary', 'type' => 'enum
Sary', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Vidin\'ny vokatra.', 'type' => 'mitsingevana', 'require' => true],
                'commission' => ['title' => 'Ampio ny komisiona amin\'ny vidiny.
Ampahany', 'type' => 'mitsingevana', 'default' => 0],
                'discount' => ['title' => 'fihenam-bidy ny vidin\'ny vokatra.
Sary', 'type' => 'mitsingevana', 'default' => 0],
                'dis_start' => ['title' => 'Ora fanombohana fihenam-bidy ao amin\'ny faritr\'ora UTC (endrika: YYYY-MM-DD HH:mm:ss).
Sary', 'type' => 'daty
Ampahany', 'default' => null],
                'dis_end' => ['title' => 'Ora fiafarana fihenam-bidy ao amin\'ny faritr\'ora UTC (endrika: YYYY-MM-DD HH:mm:ss).
Sary', 'type' => 'daty
Ampahany', 'default' => null],
                'currency' => ['title' => 'Vola,', 'type' => 'enum
Sary', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Lohatenin'ny vokatra.", 'type' => 'tady
Sary', 'require' => true],
                'title_en' => ['title' => 'Lohatenin\'ny vokatra amin\'ny teny anglisy (na lohateny kely)
Sary', 'type' => 'tady
Sary', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'tady
Sary', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'tady
Sary', 'default' => null],
                'gtin' => ['title' => "Laharan'ny entana eran-tany an'ny vokatra.", 'type' => 'tady
Sary', 'default' => null],
                'gpc' => ['title' => 'Kaody sokajy vokatra Google.
Sary', 'type' => 'int
Sary', 'default' => null],
                'condition' => ['title' => "Ny toe-javatra ankehitriny ao amin'ny fivarotanao.\nSary", 'type' => 'enum
Sary', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Asehoy amin\'ny mpampiasa ny hafatra raha misy saha fampidirana (ampiasaina amin\'ny vokatra virtoaly).
Sary', 'type' => 'tady
Sary', 'default' => null],
                'inputs' => ['title' => 'Sahan\'ny fampidirana safidy (ampiasaina amin\'ny vokatra virtoaly).
Sary', 'type' => 'json
Sary', 'default' => null],
                'outputs' => ['title' => 'Sahan\'ny vokatra azo atao (ampiasaina amin\'ny vokatra virtoaly).', 'type' => 'json
Sary', 'default' => false],
                'blog' => ['title' => 'bilaogy na tranokala url azo atao.
Sary', 'type' => 'tady
Sary', 'default' => false],
                'status' => ['title' => 'sata vokatra Open / Close, Default dia misokatra.
Sary', 'type' => 'enum
Sary', 'default' => 'Misokatra
Sary', 'values' => ['Misokatra
Sary', 'Akatona
Sary']],
                'category_id' => ['title' => 'sokajy id.', 'type' => 'int
Sary', 'default' => null],
                'lead' => ['title' => 'Ny ora fitarihana amin\'ny ora..', 'type' => 'int
Sary', 'default' => null],
                'style' => ['title' => 'Fomba vokatra (Json).
Sary', 'type' => 'json
Sary', 'default' => null],
                'brand' => ['title' => 'Marika vokatra..
Sary', 'type' => 'tady
Sary', 'default' => null],
                'warranty' => ['title' => 'famaritana garantie..
Ampahany', 'type' => 'tady
Sary', 'default' => null],
                'original' => ['title' => 'Original ity vokatra ity?
Sary', 'type' => 'boolean
Sary', 'default' => false],
                'return_warranty' => ['title' => 'Avereno antoka isan\'andro.
Sary', 'type' => 'int
Sary', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'zavatra
Sary',
                    '_object' => 'vokatra
Sary',
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
            'description' => 'Manampia vokatra vaovao amin\'ny fivarotana.',
            'url' => 'fivarotana/{shop_id}/products/{product_id}/edit
Sary',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Mametraka karazana vokatra / serivisy.
Sary', 'type' => 'enum
Sary', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Vidin\'ny vokatra.', 'type' => 'mitsingevana', 'require' => true],
                'commission' => ['title' => 'Ampio ny komisiona amin\'ny vidiny.
Ampahany', 'type' => 'mitsingevana', 'default' => 0],
                'discount' => ['title' => 'fihenam-bidy ny vidin\'ny vokatra.
Sary', 'type' => 'mitsingevana', 'default' => 0],
                'dis_start' => ['title' => 'Ora fanombohana fihenam-bidy ao amin\'ny faritr\'ora UTC (endrika: YYYY-MM-DD HH:mm:ss).
Sary', 'type' => 'daty
Ampahany', 'default' => null],
                'dis_end' => ['title' => 'Ora fiafarana fihenam-bidy ao amin\'ny faritr\'ora UTC (endrika: YYYY-MM-DD HH:mm:ss).
Sary', 'type' => 'daty
Ampahany', 'default' => null],
                'currency' => ['title' => 'Vola,', 'type' => 'enum
Sary', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Lohatenin'ny vokatra.", 'type' => 'tady
Sary', 'require' => true],
                'title_en' => ['title' => 'Lohatenin\'ny vokatra amin\'ny teny anglisy (na lohateny kely)
Sary', 'type' => 'tady
Sary', 'default' => null],
                'message' => ['title' => 'Asehoy amin\'ny mpampiasa ny hafatra raha misy saha fampidirana (ampiasaina amin\'ny vokatra virtoaly).
Sary', 'type' => 'tady
Sary', 'default' => null],
                'inputs' => ['title' => 'Sahan\'ny fampidirana safidy (ampiasaina amin\'ny vokatra virtoaly).
Sary', 'type' => 'json
Sary', 'default' => null],
                'outputs' => ['title' => 'Sahan\'ny vokatra azo atao (ampiasaina amin\'ny vokatra virtoaly).', 'type' => 'json
Sary', 'default' => false],
                'blog' => ['title' => 'bilaogy na tranokala url azo atao.
Sary', 'type' => 'tady
Sary', 'default' => false],
                'status' => ['title' => 'sata vokatra Open / Close, Default dia misokatra.
Sary', 'type' => 'enum
Sary', 'default' => 'Misokatra
Sary', 'values' => ['Misokatra
Sary', 'Akatona
Sary']],
                'category_id' => ['title' => 'sokajy id.', 'type' => 'int
Sary', 'default' => null],
                'lead' => ['title' => 'Ny ora fitarihana amin\'ny ora..', 'type' => 'int
Sary', 'default' => null],
                'style' => ['title' => 'Fomba vokatra (Json).
Sary', 'type' => 'json
Sary', 'default' => null],
                'brand' => ['title' => 'Marika vokatra..
Sary', 'type' => 'tady
Sary', 'default' => null],
                'warranty' => ['title' => 'famaritana garantie..
Ampahany', 'type' => 'tady
Sary', 'default' => null],
                'original' => ['title' => 'Original ity vokatra ity?
Sary', 'type' => 'boolean
Sary', 'default' => false],
                'return_warranty' => ['title' => 'Avereno antoka isan\'andro.
Sary', 'type' => 'int
Sary', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'zavatra
Sary',
                    '_object' => 'vokatra
Sary',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Fahombiazana nohavaozina fanjakana vokatra.
Sary', 'type' => 'boolean
Sary'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Manampia vokatra vaovao avy amin\'ny tahiry avy amin\'ny sku mankany amin\'ny fivarotana.',
            'url' => 'fivarotana/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'tady
Sary', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Auto set sokajy
Sary', 'type' => 'boolean
Sary', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Ampidiro amin\'ity sokajy ity ny vokatra amin\'ny ID sokajy ao amin\'ny fivarotana.', 'type' => 'int
Sary', 'default' => null],

                'price' => ['title' => 'Vidin\'ny vokatra.', 'type' => 'mitsingevana', 'require' => true],
                'currency' => ['title' => 'Vola,', 'type' => 'enum
Sary', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Hatrany
Sary', 'type' => 'int
Sary', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'zavatra
Sary',
                    '_object' => 'vokatra
Sary',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Fahombiazana nohavaozina fanjakana vokatra.
Sary', 'type' => 'boolean
Sary'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
