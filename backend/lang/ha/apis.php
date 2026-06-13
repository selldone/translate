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
            'description' => 'Sami jerin samfuran shagon.
Saukewa:',
            'url' => 'shaguna/{shop_id}/products/all-admin
Saukewa:',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Nuna samfuran samuwa kawai. Zai iya zama gaskiya ko ƙarya.
Saukewa:', 'type' => 'boolean
Saukewa:', 'default' => false],
                'with_parent' => ['title' => 'Sami matsayi na rukunin iyaye. Zai iya zama gaskiya ko ƙarya.
Saukewa:', 'type' => 'boolean
Saukewa:', 'default' => false],
                'offset' => ['title' => 'Rarraba lissafin samfur (don pagination).
Saukewa:', 'type' => 'int
Saukewa:', 'default' => 0],
                'limit' => ['title' => 'Adadin samfurori a cikin jerin (don pagination).
Saukewa:', 'type' => 'int
Saukewa:', 'default' => 20],
                'sort' => ['title' => 'Nau\'in jeri
Saukewa:', 'type' => 'enum
Saukewa:', 'default' => null, 'values' => [null, 'masu alaka
Saukewa:', 'wanda aka fi ziyarta
Saukewa:', 'mafi_fi sani
Saukewa:', 'sabuwa
Saukewa:', 'bestselling
Saukewa:', 'mafi arha
Saukewa:', 'mafi_tsada
Saukewa:', 'bazuwar
Saukewa:', 'masu alaka
Saukewa:', 'wanda aka fi so
Saukewa:', 'bazuwar
Saukewa:']],
                'product_id' => ['title' => 'Samfurin ID da aka yi amfani da shi don dawo da samfuran da ke da alaƙa (nau\'i = masu alaƙa).
Saukewa:', 'type' => 'int
Saukewa:', 'default' => null],
                'set' => ['title' => 'Saitin bayanan samfur. Yana iya zama mara amfani ko ƙayyadaddun bayanai (rasa: tsoho, ƙayyadaddun bayanai: an inganta shi don maido da ƙayyadaddun bayanai).
Saukewa:', 'type' => 'enum
Saukewa:', 'default' => null, 'values' => [null, 'takamaiman']],
                'search' => ['title' => 'Bincika rubutu
Saukewa:', 'type' => 'kirtani
Saukewa:', 'default' => null],
                'search_type' => ['title' => 'Nau\'in nema. Yana iya zama banza ko category.
Saukewa:', 'type' => 'enum
Saukewa:', 'default' => null, 'values' => [null, 'category
Saukewa:']],
                'dir' => ['title' => 'Category ID ko suna. Yana samun samfura a cikin wannan rukunin lokacin da aka saita.
Saukewa:', 'type' => 'kowane
Saukewa:', 'default' => null],
                'products_only' => ['title' => 'Sami samfura kawai (ba a haɗa rukuni ba).
Saukewa:', 'type' => 'boolean
Saukewa:', 'default' => false],
                'categories_only' => ['title' => 'Samu nau\'ikan kawai (samfuran ba a haɗa su ba).
Saukewa:', 'type' => 'boolean
Saukewa:', 'default' => false],
                'need_full_variants' => ['title' => 'Sami cikakken bayanin bambancin.
Saukewa:', 'type' => 'boolean
Saukewa:', 'default' => false],
                'optimized' => ['title' => '(Sai kawai lokacin samun samfura azaman mai gudanarwa) Sami jerin samfuran ba tare da farashi, ƙima, ko ƙididdiga ba.
Saukewa:', 'type' => 'boolean
Saukewa:', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'tsararru
Saukewa:',
                    '_object' => 'Samfura
Saukewa:',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'tsararru
Saukewa:',
                    '_object' => 'Kashi
Saukewa:',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'abu
Saukewa:',
                    '_object' => 'Kashi
Saukewa:',
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
            'description' => 'Sami bayanan samfur da ƙididdiga.
Saukewa:',
            'url' => 'shaguna/{shop_id}/products/{product_id}/admin
Saukewa:',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'abu
Saukewa:',
                    '_object' => 'Samfura
Saukewa:',
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
                    '_type' => 'tsararru
Saukewa:',
                    '_object' => 'Samfura-Bayanai
Saukewa:',
                    'title' => 'data kwana 30 na karshe
Saukewa:',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Oda que bayanai.
Saukewa:',
                    'type' => 'Na gani: ƙidaya (int)|Na zahiri: [ƙidaya, bayarwa_state] (tsari)'
                ],

                'new_comments_count' => [
                    'title' => 'Sabbin sharhi suna ƙidaya.
Saukewa:',
                    'type' => 'int
Saukewa:'
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
            'description' => 'Ƙara sabon samfur zuwa shagon.
Saukewa:',
            'url' => 'shaguna/{shop_id}/product/add
Saukewa:',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Saita nau\'in samfurin/sabis.
Saukewa:', 'type' => 'enum
Saukewa:', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Farashin samfurin.
Saukewa:', 'type' => 'yi iyo
Saukewa:', 'require' => true],
                'commission' => ['title' => 'Ƙara hukumar zuwa farashi.
Saukewa:', 'type' => 'yi iyo
Saukewa:', 'default' => 0],
                'discount' => ['title' => 'Rage farashin samfur na asali.
Saukewa:', 'type' => 'yi iyo
Saukewa:', 'default' => 0],
                'dis_start' => ['title' => 'Lokacin farawa rangwame a yankin lokacin UTC (tsari: YYYY-MM-DD HH:mm:ss).
Saukewa:', 'type' => 'kwanan wata
Saukewa:', 'default' => null],
                'dis_end' => ['title' => 'Discount end time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'kwanan wata
Saukewa:', 'default' => null],
                'currency' => ['title' => 'Kudi,
Saukewa:', 'type' => 'enum
Saukewa:', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Taken samfur.", 'type' => 'kirtani
Saukewa:', 'require' => true],
                'title_en' => ['title' => 'Sunan Ingilishi na samfurin (ko ƙaramin taken)
Saukewa:', 'type' => 'kirtani
Saukewa:', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'kirtani
Saukewa:', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'kirtani
Saukewa:', 'default' => null],
                'gtin' => ['title' => "Lambar Abun Ciniki ta Duniya.\nSaukewa:", 'type' => 'kirtani
Saukewa:', 'default' => null],
                'gpc' => ['title' => 'Lambar nau\'in samfurin Google.
Saukewa:', 'type' => 'int
Saukewa:', 'default' => null],
                'condition' => ['title' => "Yanayin abu na yanzu a cikin kantin sayar da ku.\nSaukewa:", 'type' => 'enum
Saukewa:', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Nuna saƙo ga mai amfani idan akwai filayen shigarwa (amfani da samfuran kama-da-wane).
Saukewa:', 'type' => 'kirtani
Saukewa:', 'default' => null],
                'inputs' => ['title' => 'Filayen shigarwa na zaɓi (amfani da samfuran kama-da-wane).
Saukewa:', 'type' => 'json
Saukewa:', 'default' => null],
                'outputs' => ['title' => 'Filayen fitarwa na zaɓi (amfani da samfuran kama-da-wane).
Saukewa:', 'type' => 'json
Saukewa:', 'default' => false],
                'blog' => ['title' => 'Bulogi na zaɓi ko url gidan yanar gizo.
Saukewa:', 'type' => 'kirtani
Saukewa:', 'default' => false],
                'status' => ['title' => 'Halin samfur Buɗe / Rufewa, Tsoho yana Buɗe.
Saukewa:', 'type' => 'enum
Saukewa:', 'default' => 'Bude
Saukewa:', 'values' => ['Bude
Saukewa:', 'Kusa
Saukewa:']],
                'category_id' => ['title' => 'category id.
Saukewa:', 'type' => 'int
Saukewa:', 'default' => null],
                'lead' => ['title' => 'Lokacin jagora cikin sa\'o\'i..
Saukewa:', 'type' => 'int
Saukewa:', 'default' => null],
                'style' => ['title' => 'Salon samfur (Json).
Saukewa:', 'type' => 'json
Saukewa:', 'default' => null],
                'brand' => ['title' => 'Alamar samfur..
Saukewa:', 'type' => 'kirtani
Saukewa:', 'default' => null],
                'warranty' => ['title' => 'bayanin garanti..
Saukewa:', 'type' => 'kirtani
Saukewa:', 'default' => null],
                'original' => ['title' => 'Wannan samfurin asali ne?
Saukewa:', 'type' => 'boolean
Saukewa:', 'default' => false],
                'return_warranty' => ['title' => 'Koma garanti ta kwanaki.
Saukewa:', 'type' => 'int
Saukewa:', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'abu
Saukewa:',
                    '_object' => 'Samfura
Saukewa:',
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
            'description' => 'Ƙara sabon samfur zuwa shagon.
Saukewa:',
            'url' => 'shaguna/{shop_id}/products/{product_id}/edit
Saukewa:',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Saita nau\'in samfurin/sabis.
Saukewa:', 'type' => 'enum
Saukewa:', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Farashin samfurin.
Saukewa:', 'type' => 'yi iyo
Saukewa:', 'require' => true],
                'commission' => ['title' => 'Ƙara hukumar zuwa farashi.
Saukewa:', 'type' => 'yi iyo
Saukewa:', 'default' => 0],
                'discount' => ['title' => 'Rage farashin samfur na asali.
Saukewa:', 'type' => 'yi iyo
Saukewa:', 'default' => 0],
                'dis_start' => ['title' => 'Lokacin farawa rangwame a yankin lokacin UTC (tsari: YYYY-MM-DD HH:mm:ss).
Saukewa:', 'type' => 'kwanan wata
Saukewa:', 'default' => null],
                'dis_end' => ['title' => 'Discount end time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'kwanan wata
Saukewa:', 'default' => null],
                'currency' => ['title' => 'Kudi,
Saukewa:', 'type' => 'enum
Saukewa:', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Taken samfur.", 'type' => 'kirtani
Saukewa:', 'require' => true],
                'title_en' => ['title' => 'Sunan Ingilishi na samfurin (ko ƙaramin taken)
Saukewa:', 'type' => 'kirtani
Saukewa:', 'default' => null],
                'message' => ['title' => 'Nuna saƙo ga mai amfani idan akwai filayen shigarwa (amfani da samfuran kama-da-wane).
Saukewa:', 'type' => 'kirtani
Saukewa:', 'default' => null],
                'inputs' => ['title' => 'Filayen shigarwa na zaɓi (amfani da samfuran kama-da-wane).
Saukewa:', 'type' => 'json
Saukewa:', 'default' => null],
                'outputs' => ['title' => 'Filayen fitarwa na zaɓi (amfani da samfuran kama-da-wane).
Saukewa:', 'type' => 'json
Saukewa:', 'default' => false],
                'blog' => ['title' => 'Bulogi na zaɓi ko url gidan yanar gizo.
Saukewa:', 'type' => 'kirtani
Saukewa:', 'default' => false],
                'status' => ['title' => 'Halin samfur Buɗe / Rufewa, Tsoho yana Buɗe.
Saukewa:', 'type' => 'enum
Saukewa:', 'default' => 'Bude
Saukewa:', 'values' => ['Bude
Saukewa:', 'Kusa
Saukewa:']],
                'category_id' => ['title' => 'category id.
Saukewa:', 'type' => 'int
Saukewa:', 'default' => null],
                'lead' => ['title' => 'Lokacin jagora cikin sa\'o\'i..
Saukewa:', 'type' => 'int
Saukewa:', 'default' => null],
                'style' => ['title' => 'Salon samfur (Json).
Saukewa:', 'type' => 'json
Saukewa:', 'default' => null],
                'brand' => ['title' => 'Alamar samfur..
Saukewa:', 'type' => 'kirtani
Saukewa:', 'default' => null],
                'warranty' => ['title' => 'bayanin garanti..
Saukewa:', 'type' => 'kirtani
Saukewa:', 'default' => null],
                'original' => ['title' => 'Wannan samfurin asali ne?
Saukewa:', 'type' => 'boolean
Saukewa:', 'default' => false],
                'return_warranty' => ['title' => 'Koma garanti ta kwanaki.
Saukewa:', 'type' => 'int
Saukewa:', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'abu
Saukewa:',
                    '_object' => 'Samfura
Saukewa:',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Nasarar sabunta yanayin samfur.
Saukewa:', 'type' => 'boolean
Saukewa:'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Ƙara sabon samfur daga wurin ajiya ta sku zuwa shagon.',
            'url' => 'shaguna/{shop_id}/product-repository/add-sku
Saukewa:',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'kirtani
Saukewa:', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Kashi na saiti ta atomatik
Saukewa:', 'type' => 'boolean
Saukewa:', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Ƙara samfur zuwa wannan rukuni ta nau\'in id a cikin shagon.
Saukewa:', 'type' => 'int
Saukewa:', 'default' => null],

                'price' => ['title' => 'Farashin samfurin.
Saukewa:', 'type' => 'yi iyo
Saukewa:', 'require' => true],
                'currency' => ['title' => 'Kudi,
Saukewa:', 'type' => 'enum
Saukewa:', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Yawan
Saukewa:', 'type' => 'int
Saukewa:', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'abu
Saukewa:',
                    '_object' => 'Samfura
Saukewa:',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Nasarar sabunta yanayin samfur.
Saukewa:', 'type' => 'boolean
Saukewa:'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
