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
            'description' => 'Lortu dendako produktuen zerrenda.',
            'url' => 'dendak/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Erakutsi eskuragarri dauden produktuak soilik. Egia ala gezurra izan daiteke.', 'type' => 'boolearra', 'default' => false],
                'with_parent' => ['title' => 'Lortu kategoria nagusiaren hierarkia. Egia ala gezurra izan daiteke.', 'type' => 'boolearra', 'default' => false],
                'offset' => ['title' => 'Produktuen zerrendaren desplazamendua (pagina egiteko).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Zerrendako produktu kopurua (pagina egiteko).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Zerrenda ordenatzeko mota', 'type' => 'enum', 'default' => null, 'values' => [null, 'erlazionatuta', 'gehien_bisitatuak', 'ezagunena', 'berriena', 'salduena', 'merkeena', 'garestiena', 'ausaz', 'erlazionatuta', 'gogokoena', 'ausaz']],
                'product_id' => ['title' => 'ID erlazionatutako produktuak itzultzeko erabiltzen den produktua (ordenatu = erlazionatuta).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Produktuaren datu multzoa. Null edo spec izan daiteke (null: lehenetsia, spec: zehaztapenak berreskuratzeko optimizatuta).', 'type' => 'enum', 'default' => null, 'values' => [null, 'zehaztapena']],
                'search' => ['title' => 'Bilatu testua', 'type' => 'katea', 'default' => null],
                'search_type' => ['title' => 'Bilaketa mota. Nulua edo kategoriakoa izan daiteke.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategoria']],
                'dir' => ['title' => 'ID kategoria edo izena. Kategoria honetako produktuak lortzen ditu ezartzen denean.', 'type' => 'edozein', 'default' => null],
                'products_only' => ['title' => 'Eskuratu produktuak soilik (kategoriak barne).', 'type' => 'boolearra', 'default' => false],
                'categories_only' => ['title' => 'Lortu kategoriak bakarrik (produktuak ez barne).', 'type' => 'boolearra', 'default' => false],
                'need_full_variants' => ['title' => 'Lortu aldaeraren informazio osoa.', 'type' => 'boolearra', 'default' => false],
                'optimized' => ['title' => '(Produktuak administratzaile gisa eskuratzean soilik) Lortu produktuen zerrenda prezio, tarifa edo estatistikik gabe.', 'type' => 'boolearra', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'array',
                    '_object' => 'Produktua',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'array',
                    '_object' => 'Kategoria',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objektua',
                    '_object' => 'Kategoria',
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
            'description' => 'Lortu produktuen informazioa eta estatistikak.',
            'url' => 'dendak/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'objektua',
                    '_object' => 'Produktua',
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
                    '_type' => 'array',
                    '_object' => 'Produktu-Datuak',
                    'title' => 'azken 30 eguneko datuak',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Informazio eskaerak.',
                    'type' => 'Birtuala: zenbaketa (int)|Fisikoa: [zenbaketa, entrega_egoera] (matrizea)'
                ],

                'new_comments_count' => [
                    'title' => 'Iruzkin berriek zenbatzen dute.',
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
            'description' => 'Gehitu produktu berria dendan.',
            'url' => 'dendak/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Ezarri produktu/zerbitzu mota.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Produktuaren prezioa.', 'type' => 'flotatu', 'require' => true],
                'commission' => ['title' => 'Gehitu komisioa prezioari.', 'type' => 'flotatu', 'default' => 0],
                'discount' => ['title' => 'Lehenetsitako produktuaren prezioaren deskontua.', 'type' => 'flotatu', 'default' => 0],
                'dis_start' => ['title' => 'Deskontuaren hasiera-ordua UTC ordu-eremuan (formatua: YYYY-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Deskontuaren amaiera-ordua UTC ordu-eremuan (formatua: YYYY-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'Moneta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produktuaren izenburua.", 'type' => 'katea', 'require' => true],
                'title_en' => ['title' => 'Produktuaren ingelesezko titulua (edo azpititulua)', 'type' => 'katea', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'katea', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'katea', 'default' => null],
                'gtin' => ['title' => "Produktuaren merkataritza-elementuaren zenbaki globala.", 'type' => 'katea', 'default' => null],
                'gpc' => ['title' => 'Google produktuen kategoriaren kodea.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Elementuaren egungo egoera zure dendan.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Mezua erakutsi erabiltzaileari sarrera-eremuak badaude (produktu birtualetarako erabiltzen da).', 'type' => 'katea', 'default' => null],
                'inputs' => ['title' => 'Aukerako sarrera-eremuak (produktu birtualetarako erabiltzen dira).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Aukerako irteera-eremuak (produktu birtualetarako erabiltzen dira).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Aukerako bloga edo webgunearen URLa.', 'type' => 'katea', 'default' => false],
                'status' => ['title' => 'produktuaren egoera Ireki / Itxi, Lehenetsia Irekia da.', 'type' => 'enum', 'default' => 'Ireki', 'values' => ['Ireki', 'Itxi']],
                'category_id' => ['title' => 'kategoriako id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Epea ordutan..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Produktu estiloa (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Produktu marka..', 'type' => 'katea', 'default' => null],
                'warranty' => ['title' => 'bermearen deskribapena..', 'type' => 'katea', 'default' => null],
                'original' => ['title' => 'Produktu hau originala al da?', 'type' => 'boolearra', 'default' => false],
                'return_warranty' => ['title' => 'Itzultzeko bermea egunez.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objektua',
                    '_object' => 'Produktua',
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
            'description' => 'Gehitu produktu berria dendan.',
            'url' => 'dendak/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Ezarri produktu/zerbitzu mota.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Produktuaren prezioa.', 'type' => 'flotatu', 'require' => true],
                'commission' => ['title' => 'Gehitu komisioa prezioari.', 'type' => 'flotatu', 'default' => 0],
                'discount' => ['title' => 'Lehenetsitako produktuaren prezioaren deskontua.', 'type' => 'flotatu', 'default' => 0],
                'dis_start' => ['title' => 'Deskontuaren hasiera-ordua UTC ordu-eremuan (formatua: YYYY-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Deskontuaren amaiera-ordua UTC ordu-eremuan (formatua: YYYY-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'Moneta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produktuaren izenburua.", 'type' => 'katea', 'require' => true],
                'title_en' => ['title' => 'Produktuaren ingelesezko titulua (edo azpititulua)', 'type' => 'katea', 'default' => null],
                'message' => ['title' => 'Mezua erakutsi erabiltzaileari sarrera-eremuak badaude (produktu birtualetarako erabiltzen da).', 'type' => 'katea', 'default' => null],
                'inputs' => ['title' => 'Aukerako sarrera-eremuak (produktu birtualetarako erabiltzen dira).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Aukerako irteera-eremuak (produktu birtualetarako erabiltzen dira).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Aukerako bloga edo webgunearen URLa.', 'type' => 'katea', 'default' => false],
                'status' => ['title' => 'produktuaren egoera Ireki / Itxi, Lehenetsia Irekia da.', 'type' => 'enum', 'default' => 'Ireki', 'values' => ['Ireki', 'Itxi']],
                'category_id' => ['title' => 'kategoriako id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Epea ordutan..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Produktu estiloa (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Produktu marka..', 'type' => 'katea', 'default' => null],
                'warranty' => ['title' => 'bermearen deskribapena..', 'type' => 'katea', 'default' => null],
                'original' => ['title' => 'Produktu hau originala al da?', 'type' => 'boolearra', 'default' => false],
                'return_warranty' => ['title' => 'Itzultzeko bermea egunez.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objektua',
                    '_object' => 'Produktua',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Arrakastaz eguneratu da produktuaren egoera.', 'type' => 'boolearra'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Gehitu produktu berria sku-ren biltegitik dendara.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'katea', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Automatikoki ezarri kategoria', 'type' => 'boolearra', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Gehitu produktua kategoria honetara dendan kategoriako IDaren arabera.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Produktuaren prezioa.', 'type' => 'flotatu', 'require' => true],
                'currency' => ['title' => 'Moneta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Kantitatea', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objektua',
                    '_object' => 'Produktua',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Arrakastaz eguneratu da produktuaren egoera.', 'type' => 'boolearra'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
