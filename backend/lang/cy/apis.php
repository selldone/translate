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
            'description' => 'Cael rhestr cynnyrch y siop.',
            'url' => 'siopau/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Dangos cynhyrchion sydd ar gael yn unig. Gall fod yn wir neu\'n anwir.', 'type' => 'boolaidd', 'default' => false],
                'with_parent' => ['title' => 'Cael yr hierarchaeth categori rhieni. Gall fod yn wir neu\'n anwir.', 'type' => 'boolaidd', 'default' => false],
                'offset' => ['title' => 'Gwrthbwyso\'r rhestr cynnyrch (ar gyfer tudaleniad).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Nifer y cynhyrchion yn y rhestr (ar gyfer tudaleniad).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Math didoli rhestr', 'type' => 'enum', 'default' => null, 'values' => [null, 'perthynol', 'mwyaf_ymweld', 'mwyaf_poblogaidd', 'mwyaf newydd', 'gwerthu orau', 'rhataf', 'mwyaf_drud', 'ar hap', 'perthynol', 'hoff', 'ar hap']],
                'product_id' => ['title' => 'Cynnyrch ID a ddefnyddir i ddychwelyd cynhyrchion cysylltiedig (sort = cysylltiedig).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Set ddata cynnyrch. Gall fod yn null neu\'n fanyleb (nwl: rhagosodiad, manyleb: wedi\'i optimeiddio ar gyfer adfer manylebau).', 'type' => 'enum', 'default' => null, 'values' => [null, 'sbec']],
                'search' => ['title' => 'Chwilio testun', 'type' => 'llinyn', 'default' => null],
                'search_type' => ['title' => 'Math o chwiliad. Gall fod yn null neu\'n gategori.', 'type' => 'enum', 'default' => null, 'values' => [null, 'categori']],
                'dir' => ['title' => 'Categori ID neu enw. Yn cael cynhyrchion yn y categori hwn pan fydd wedi\'i osod.', 'type' => 'unrhyw', 'default' => null],
                'products_only' => ['title' => 'Cael cynhyrchion yn unig (categorïau heb eu cynnwys).', 'type' => 'boolaidd', 'default' => false],
                'categories_only' => ['title' => 'Cael categorïau yn unig (cynhyrchion heb eu cynnwys).', 'type' => 'boolaidd', 'default' => false],
                'need_full_variants' => ['title' => 'Cael gwybodaeth amrywiad llawn.', 'type' => 'boolaidd', 'default' => false],
                'optimized' => ['title' => '(Dim ond wrth gael cynhyrchion fel gweinyddwr) Sicrhewch y rhestr cynnyrch heb bris, cyfradd nac ystadegau.', 'type' => 'boolaidd', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'arae',
                    '_object' => 'Cynnyrch',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'arae',
                    '_object' => 'Categori',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'gwrthrych',
                    '_object' => 'Categori',
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
            'description' => 'Cael gwybodaeth am gynnyrch ac ystadegau.',
            'url' => 'siopau/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'gwrthrych',
                    '_object' => 'Cynnyrch',
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
                    '_type' => 'arae',
                    '_object' => 'Data Cynnyrch',
                    'title' => 'data 30 diwrnod diwethaf',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Archebion am wybodaeth.',
                    'type' => 'Rhith: cyfrif (int)|Corfforol: [cyfrif, dosbarthiad_cyflwr] (arae)'
                ],

                'new_comments_count' => [
                    'title' => 'Mae sylwadau newydd yn cyfrif.',
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
            'description' => 'Ychwanegu cynnyrch newydd i\'r siop.',
            'url' => 'siopau/{shop_id}/product/ychwanegu',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Math penodol o\'r cynnyrch / gwasanaeth.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Pris y cynnyrch.', 'type' => 'arnofio', 'require' => true],
                'commission' => ['title' => 'Ychwanegu comisiwn at y pris.', 'type' => 'arnofio', 'default' => 0],
                'discount' => ['title' => 'Gostyngiad pris cynnyrch diofyn.', 'type' => 'arnofio', 'default' => 0],
                'dis_start' => ['title' => 'Amser cychwyn disgownt yn y parth amser UTC (fformat: YYYY-MM-DD HH:mm:ss).', 'type' => 'dyddiad', 'default' => null],
                'dis_end' => ['title' => 'Amser gorffen disgownt yn y parth amser UTC (fformat: YYYY-MM-DD HH:mm:ss).', 'type' => 'dyddiad', 'default' => null],
                'currency' => ['title' => 'Arian cyfred,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Teitl y cynnyrch.", 'type' => 'llinyn', 'require' => true],
                'title_en' => ['title' => 'Teitl Saesneg y cynnyrch (neu is-deitl)', 'type' => 'llinyn', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'llinyn', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'llinyn', 'default' => null],
                'gtin' => ['title' => "Rhif Eitem Masnach Fyd-eang y Cynnyrch.", 'type' => 'llinyn', 'default' => null],
                'gpc' => ['title' => 'Cod categori cynnyrch Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Cyflwr presennol yr eitem yn eich siop.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Neges yn dangos i\'r defnyddiwr os oes meysydd mewnbwn yn bodoli (a ddefnyddir ar gyfer cynhyrchion rhithwir).', 'type' => 'llinyn', 'default' => null],
                'inputs' => ['title' => 'Meysydd mewnbwn dewisol (a ddefnyddir ar gyfer cynhyrchion rhithwir).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Meysydd allbwn dewisol (a ddefnyddir ar gyfer cynhyrchion rhithwir).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog dewisol neu url gwefan.', 'type' => 'llinyn', 'default' => false],
                'status' => ['title' => 'statws cynnyrch Ar Agor / Cau, Rhagosodiad yw Agored.', 'type' => 'enum', 'default' => 'Agor', 'values' => ['Agor', 'Cau']],
                'category_id' => ['title' => 'categori id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Amser arweiniol mewn oriau..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Arddull y cynnyrch (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Brand y cynnyrch..', 'type' => 'llinyn', 'default' => null],
                'warranty' => ['title' => 'disgrifiad gwarant ..', 'type' => 'llinyn', 'default' => null],
                'original' => ['title' => 'Mae\'r cynnyrch hwn yn wreiddiol?', 'type' => 'boolaidd', 'default' => false],
                'return_warranty' => ['title' => 'Dychwelyd gwarant gan ddyddiau.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'gwrthrych',
                    '_object' => 'Cynnyrch',
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
            'description' => 'Ychwanegu cynnyrch newydd i\'r siop.',
            'url' => 'siopau/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Math penodol o\'r cynnyrch / gwasanaeth.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Pris y cynnyrch.', 'type' => 'arnofio', 'require' => true],
                'commission' => ['title' => 'Ychwanegu comisiwn at y pris.', 'type' => 'arnofio', 'default' => 0],
                'discount' => ['title' => 'Gostyngiad pris cynnyrch diofyn.', 'type' => 'arnofio', 'default' => 0],
                'dis_start' => ['title' => 'Amser cychwyn disgownt yn y parth amser UTC (fformat: YYYY-MM-DD HH:mm:ss).', 'type' => 'dyddiad', 'default' => null],
                'dis_end' => ['title' => 'Amser gorffen disgownt yn y parth amser UTC (fformat: YYYY-MM-DD HH:mm:ss).', 'type' => 'dyddiad', 'default' => null],
                'currency' => ['title' => 'Arian cyfred,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Teitl y cynnyrch.", 'type' => 'llinyn', 'require' => true],
                'title_en' => ['title' => 'Teitl Saesneg y cynnyrch (neu is-deitl)', 'type' => 'llinyn', 'default' => null],
                'message' => ['title' => 'Neges yn dangos i\'r defnyddiwr os oes meysydd mewnbwn yn bodoli (a ddefnyddir ar gyfer cynhyrchion rhithwir).', 'type' => 'llinyn', 'default' => null],
                'inputs' => ['title' => 'Meysydd mewnbwn dewisol (a ddefnyddir ar gyfer cynhyrchion rhithwir).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Meysydd allbwn dewisol (a ddefnyddir ar gyfer cynhyrchion rhithwir).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog dewisol neu url gwefan.', 'type' => 'llinyn', 'default' => false],
                'status' => ['title' => 'statws cynnyrch Ar Agor / Cau, Rhagosodiad yw Agored.', 'type' => 'enum', 'default' => 'Agor', 'values' => ['Agor', 'Cau']],
                'category_id' => ['title' => 'categori id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Amser arweiniol mewn oriau..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Arddull y cynnyrch (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Brand y cynnyrch..', 'type' => 'llinyn', 'default' => null],
                'warranty' => ['title' => 'disgrifiad gwarant ..', 'type' => 'llinyn', 'default' => null],
                'original' => ['title' => 'Mae\'r cynnyrch hwn yn wreiddiol?', 'type' => 'boolaidd', 'default' => false],
                'return_warranty' => ['title' => 'Dychwelyd gwarant gan ddyddiau.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'gwrthrych',
                    '_object' => 'Cynnyrch',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Llwyddiant wedi\'i ddiweddaru cyflwr cynnyrch.', 'type' => 'boolaidd'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Ychwanegu cynnyrch newydd o ystorfa fesul sku i\'r siop.',
            'url' => 'siopau/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'llinyn', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Auto set categori', 'type' => 'boolaidd', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Ychwanegu at y categori hwn yn ôl categori id yn y siop.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Pris y cynnyrch.', 'type' => 'arnofio', 'require' => true],
                'currency' => ['title' => 'Arian cyfred,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Nifer', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'gwrthrych',
                    '_object' => 'Cynnyrch',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Llwyddiant wedi\'i ddiweddaru cyflwr cynnyrch.', 'type' => 'boolaidd'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
