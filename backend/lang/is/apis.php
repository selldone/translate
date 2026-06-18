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
            'description' => 'Fáðu vörulista búðarinnar.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Sýna aðeins tiltækar vörur. Getur verið satt eða ósatt.', 'type' => 'Boolean', 'default' => false],
                'with_parent' => ['title' => 'Fáðu stigveldi foreldraflokka. Getur verið satt eða ósatt.', 'type' => 'Boolean', 'default' => false],
                'offset' => ['title' => 'Jöfnun vörulistans (fyrir blaðsíðugerð).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Fjöldi vara á listanum (fyrir síðuskipun).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Listategund', 'type' => 'enum', 'default' => null, 'values' => [null, 'tengdar', 'mest_heimsótt', 'vinsælast', 'nýjasta', 'metsölubók', 'ódýrast', 'dýrastur', 'handahófi', 'tengdar', 'uppáhalds', 'handahófi']],
                'product_id' => ['title' => 'Vara ID notuð til að skila tengdum vörum (flokka = tengd).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Vörugagnasett. Getur verið núll eða sérstakur (null: sjálfgefið, forskrift: fínstillt til að sækja forskriftir).', 'type' => 'enum', 'default' => null, 'values' => [null, 'sérstakur']],
                'search' => ['title' => 'Leita í texta', 'type' => 'strengur', 'default' => null],
                'search_type' => ['title' => 'Leitartegund. Getur verið núll eða flokkur.', 'type' => 'enum', 'default' => null, 'values' => [null, 'flokki']],
                'dir' => ['title' => 'Flokkur ID eða nafn. Fær vörur í þessum flokki þegar stillt er.', 'type' => 'hvaða', 'default' => null],
                'products_only' => ['title' => 'Fáðu aðeins vörur (flokkar eru ekki innifaldir).', 'type' => 'Boolean', 'default' => false],
                'categories_only' => ['title' => 'Fáðu aðeins flokka (vörur ekki innifalin).', 'type' => 'Boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Fáðu allar upplýsingar um afbrigði.', 'type' => 'Boolean', 'default' => false],
                'optimized' => ['title' => '(Aðeins þegar þú færð vörur sem stjórnandi) Fáðu vörulistann án verðs, verðs eða tölfræði.', 'type' => 'Boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'fylki',
                    '_object' => 'Vara',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'fylki',
                    '_object' => 'Flokkur',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'mótmæla',
                    '_object' => 'Flokkur',
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
            'description' => 'Fáðu upplýsingar um vörur og tölfræði.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'mótmæla',
                    '_object' => 'Vara',
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
                    '_type' => 'fylki',
                    '_object' => 'Vörugögn',
                    'title' => 'gögn síðustu 30 daga',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Pantanir sem fá upplýsingar.',
                    'type' => 'Sýndarmynd: telja (int)|Líkamlegt: [talning, afhendingu_ástand] (fylki)'
                ],

                'new_comments_count' => [
                    'title' => 'Ný ummæli telja.',
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
            'description' => 'Bæta nýrri vöru í búðina.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Stilltu gerð vörunnar / þjónustunnar.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Verð vörunnar.', 'type' => 'fljóta', 'require' => true],
                'commission' => ['title' => 'Bættu þóknun við verð.', 'type' => 'fljóta', 'default' => 0],
                'discount' => ['title' => 'Sjálfgefinn vöruverð afsláttur.', 'type' => 'fljóta', 'default' => 0],
                'dis_start' => ['title' => 'Upphafstími afsláttar á UTC tímabelti (snið: ÁÁÁÁ-MM-DD HH:mm:ss).', 'type' => 'dagsetningu', 'default' => null],
                'dis_end' => ['title' => 'Lokatími afsláttar í UTC tímabelti (snið: ÁÁÁÁ-MM-DD HH:mm:ss).', 'type' => 'dagsetningu', 'default' => null],
                'currency' => ['title' => 'Gjaldmiðill,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titill vöru.", 'type' => 'strengur', 'require' => true],
                'title_en' => ['title' => 'Enskur titill vörunnar (eða undirtitill)', 'type' => 'strengur', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'strengur', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'strengur', 'default' => null],
                'gtin' => ['title' => "Alþjóðlegt vörunúmer vörunnar.", 'type' => 'strengur', 'default' => null],
                'gpc' => ['title' => 'Google vöruflokkakóði.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Núverandi ástand vöru í verslun þinni.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Skilaboð sýna notandanum ef inntaksreitir eru til (notað fyrir sýndarvörur).', 'type' => 'strengur', 'default' => null],
                'inputs' => ['title' => 'Valfrjálsir innsláttarreitir (notaðir fyrir sýndarvörur).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Valfrjáls úttaksreitir (notaðir fyrir sýndarvörur).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Valfrjálst blogg eða vefslóð.', 'type' => 'strengur', 'default' => false],
                'status' => ['title' => 'vörustaða Opinn / Loka, Sjálfgefið er Opið.', 'type' => 'enum', 'default' => 'Opið', 'values' => ['Opið', 'Loka']],
                'category_id' => ['title' => 'flokks kenni.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Afgreiðslutími í klukkustundum..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stíll vöru (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Vörumerki vörunnar..', 'type' => 'strengur', 'default' => null],
                'warranty' => ['title' => 'ábyrgðarlýsing..', 'type' => 'strengur', 'default' => null],
                'original' => ['title' => 'Þessi vara er upprunaleg?', 'type' => 'Boolean', 'default' => false],
                'return_warranty' => ['title' => 'Skilaábyrgð eftir dögum.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'mótmæla',
                    '_object' => 'Vara',
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
            'description' => 'Bæta nýrri vöru í búðina.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Stilltu gerð vörunnar / þjónustunnar.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Verð vörunnar.', 'type' => 'fljóta', 'require' => true],
                'commission' => ['title' => 'Bættu þóknun við verð.', 'type' => 'fljóta', 'default' => 0],
                'discount' => ['title' => 'Sjálfgefinn vöruverð afsláttur.', 'type' => 'fljóta', 'default' => 0],
                'dis_start' => ['title' => 'Upphafstími afsláttar á UTC tímabelti (snið: ÁÁÁÁ-MM-DD HH:mm:ss).', 'type' => 'dagsetningu', 'default' => null],
                'dis_end' => ['title' => 'Lokatími afsláttar í UTC tímabelti (snið: ÁÁÁÁ-MM-DD HH:mm:ss).', 'type' => 'dagsetningu', 'default' => null],
                'currency' => ['title' => 'Gjaldmiðill,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titill vöru.", 'type' => 'strengur', 'require' => true],
                'title_en' => ['title' => 'Enskur titill vörunnar (eða undirtitill)', 'type' => 'strengur', 'default' => null],
                'message' => ['title' => 'Skilaboð sýna notandanum ef inntaksreitir eru til (notað fyrir sýndarvörur).', 'type' => 'strengur', 'default' => null],
                'inputs' => ['title' => 'Valfrjálsir innsláttarreitir (notaðir fyrir sýndarvörur).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Valfrjáls úttaksreitir (notaðir fyrir sýndarvörur).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Valfrjálst blogg eða vefslóð.', 'type' => 'strengur', 'default' => false],
                'status' => ['title' => 'vörustaða Opinn / Loka, Sjálfgefið er Opið.', 'type' => 'enum', 'default' => 'Opið', 'values' => ['Opið', 'Loka']],
                'category_id' => ['title' => 'flokks kenni.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Afgreiðslutími í klukkustundum..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Stíll vöru (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Vörumerki vörunnar..', 'type' => 'strengur', 'default' => null],
                'warranty' => ['title' => 'ábyrgðarlýsing..', 'type' => 'strengur', 'default' => null],
                'original' => ['title' => 'Þessi vara er upprunaleg?', 'type' => 'Boolean', 'default' => false],
                'return_warranty' => ['title' => 'Skilaábyrgð eftir dögum.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'mótmæla',
                    '_object' => 'Vara',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Árangur uppfært vöruástand.', 'type' => 'Boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Bæta nýrri vöru úr geymslu eftir sku í búðina.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'strengur', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Sjálfvirk stilltur flokkur', 'type' => 'Boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Vara bætt við þennan flokk eftir flokkaauðkenni í búðinni.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Verð vörunnar.', 'type' => 'fljóta', 'require' => true],
                'currency' => ['title' => 'Gjaldmiðill,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Magn', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'mótmæla',
                    '_object' => 'Vara',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Árangur uppfært vöruástand.', 'type' => 'Boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
