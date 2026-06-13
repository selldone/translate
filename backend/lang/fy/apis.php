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
            'description' => 'Krij de produktlist fan \'e winkel.',
            'url' => 'winkels/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Lit allinich beskikbere produkten sjen. Kin wier of falsk wêze.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Krij de hierargy fan \'e âlderkategory. Kin wier of falsk wêze.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Offset fan \'e produktlist (foar paginaasje).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Oantal produkten yn \'e list (foar paginaasje).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'List sortearje type', 'type' => 'enum', 'default' => null, 'values' => [null, 'relatearre', 'meast_besocht', 'meast_populêr', 'nijste', 'bestseller', 'goedkeapste', 'meast_djoerst', 'willekeurich', 'relatearre', 'favorite', 'willekeurich']],
                'product_id' => ['title' => 'Produkt ID brûkt om besibbe produkten werom te jaan (sort = relatearre).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Produkt gegevens set. Kin nul of spec wêze (nul: standert, spec: optimalisearre foar it opheljen fan spesifikaasjes).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Sykje tekst', 'type' => 'string', 'default' => null],
                'search_type' => ['title' => 'Syktype. Kin nul as kategory wêze.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategory']],
                'dir' => ['title' => 'Kategory ID of namme. Krijt produkten yn dizze kategory as ynsteld.', 'type' => 'eltse', 'default' => null],
                'products_only' => ['title' => 'Krij allinich produkten (kategoryen net ynbegrepen).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Krij allinich kategoryen (produkten net ynbegrepen).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Fa folsleine fariant ynformaasje.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Allinne as jo produkten krije as admin) Krij de produktlist sûnder priis, taryf of statistiken.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'array',
                    '_object' => 'Produkt',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'array',
                    '_object' => 'Category',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'foarwerp',
                    '_object' => 'Category',
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
            'description' => 'Krij produktynformaasje en statistiken.',
            'url' => 'winkels/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'foarwerp',
                    '_object' => 'Produkt',
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
                    '_object' => 'Produkt-Data',
                    'title' => 'lêste 30 dagen data',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Orders que info.',
                    'type' => 'Firtueel: telle (int)|Fysike: [count, delivery_state] (array)'
                ],

                'new_comments_count' => [
                    'title' => 'Nije opmerkings telle.',
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
            'description' => 'Foegje nij produkt ta oan \'e winkel.',
            'url' => 'winkels/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Stel type fan it produkt / tsjinst yn.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Priis fan it produkt.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'Foegje kommisje ta oan priis.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'Standert produkt priis koarting.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'Begjintiid fan koarting yn \'e UTC-tiidsône (formaat: JJJJ-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'dis_end' => ['title' => 'Koarting eintiid yn de UTC tiidsône (formaat: JJJJ-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'currency' => ['title' => 'faluta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produkt titel.", 'type' => 'string', 'require' => true],
                'title_en' => ['title' => 'Ingelske titel fan it produkt (of subtitel)', 'type' => 'string', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'string', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'string', 'default' => null],
                'gtin' => ['title' => "Produkt syn Global Trade Item Number.", 'type' => 'string', 'default' => null],
                'gpc' => ['title' => 'Google produkt kategory koade.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "De hjoeddeistige tastân fan it artikel yn jo winkel.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Berjocht sjen litte oan de brûker as ynfierfjilden besteane (brûkt foar firtuele produkten).', 'type' => 'string', 'default' => null],
                'inputs' => ['title' => 'Opsjonele ynfierfjilden (brûkt foar firtuele produkten).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Opsjonele útfierfjilden (brûkt foar firtuele produkten).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Opsjonele blog of webside url.', 'type' => 'string', 'default' => false],
                'status' => ['title' => 'produkt status Iepen / slute, Standert is iepen.', 'type' => 'enum', 'default' => 'Iepenje', 'values' => ['Iepenje', 'Slút']],
                'category_id' => ['title' => 'kategory id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Leadtiid yn oeren ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Styl fan produkt (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Merk fan produkt ..', 'type' => 'string', 'default' => null],
                'warranty' => ['title' => 'garânsje beskriuwing ..', 'type' => 'string', 'default' => null],
                'original' => ['title' => 'Dit produkt is orizjineel?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Werom garânsje troch dagen.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'foarwerp',
                    '_object' => 'Produkt',
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
            'description' => 'Foegje nij produkt ta oan \'e winkel.',
            'url' => 'winkels/{shop_id}/products/{product_id}/bewurkje',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Stel type fan it produkt / tsjinst yn.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Priis fan it produkt.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'Foegje kommisje ta oan priis.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'Standert produkt priis koarting.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'Begjintiid fan koarting yn \'e UTC-tiidsône (formaat: JJJJ-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'dis_end' => ['title' => 'Koarting eintiid yn de UTC tiidsône (formaat: JJJJ-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'currency' => ['title' => 'faluta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Produkt titel.", 'type' => 'string', 'require' => true],
                'title_en' => ['title' => 'Ingelske titel fan it produkt (of subtitel)', 'type' => 'string', 'default' => null],
                'message' => ['title' => 'Berjocht sjen litte oan de brûker as ynfierfjilden besteane (brûkt foar firtuele produkten).', 'type' => 'string', 'default' => null],
                'inputs' => ['title' => 'Opsjonele ynfierfjilden (brûkt foar firtuele produkten).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Opsjonele útfierfjilden (brûkt foar firtuele produkten).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Opsjonele blog of webside url.', 'type' => 'string', 'default' => false],
                'status' => ['title' => 'produkt status Iepen / slute, Standert is iepen.', 'type' => 'enum', 'default' => 'Iepenje', 'values' => ['Iepenje', 'Slút']],
                'category_id' => ['title' => 'kategory id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Leadtiid yn oeren ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Styl fan produkt (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Merk fan produkt ..', 'type' => 'string', 'default' => null],
                'warranty' => ['title' => 'garânsje beskriuwing ..', 'type' => 'string', 'default' => null],
                'original' => ['title' => 'Dit produkt is orizjineel?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Werom garânsje troch dagen.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'foarwerp',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Súkses bywurke produkt steat.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Foegje nij produkt fan repository by sku ta oan \'e winkel.',
            'url' => 'winkels/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'string', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Automatysk ynsteld kategory', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Produkt tafoegje oan dizze kategory troch kategory id yn \'e winkel.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Priis fan it produkt.', 'type' => 'float', 'require' => true],
                'currency' => ['title' => 'faluta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Quantity', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'foarwerp',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Súkses bywurke produkt steat.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
