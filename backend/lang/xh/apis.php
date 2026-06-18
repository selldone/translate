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
            'description' => 'Fumana uluhlu lwemveliso yevenkile.',
            'url' => 'iivenkile/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Bonisa iimveliso ezikhoyo kuphela. Inokuba yinyani okanye bubuxoki.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Fumana uluhlu lwabazali. Inokuba yinyani okanye bubuxoki.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'I-Offset yoluhlu lwemveliso (ye-pagination).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Inani leemveliso kuluhlu (lwe-pagination).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Uhlobo loluhlu loluhlu', 'type' => 'enum', 'default' => null, 'values' => [null, 'ezinxulumene', 'uninzi_lundwendwelwe', 'kakhulu_eyaziwayo', 'entsha', 'ithengisa kakhulu', 'ngexabiso eliphantsi', 'kakhulu_ibiza kakhulu', 'random', 'ezinxulumene', 'intandokazi', 'random']],
                'product_id' => ['title' => 'Imveliso ID esetyenziselwa ukubuyisela iimveliso ezihambelanayo (uhlobo = olunxulumene).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Iseti yedatha yemveliso. Inokuba yi-null okanye i-spec (i-null: i-default, i-spec: ilungiselelwe ukufumana iinkcukacha).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Phendla umbhalo', 'type' => 'umtya', 'default' => null],
                'search_type' => ['title' => 'Uhlobo lokukhangela. Inokuba yi-null okanye ididi.', 'type' => 'enum', 'default' => null, 'values' => [null, 'udidi']],
                'dir' => ['title' => 'Udidi ID okanye igama. Ifumana iimveliso kolu didi xa isetiwe.', 'type' => 'nayiphi na', 'default' => null],
                'products_only' => ['title' => 'Fumana iimveliso kuphela (amacandelo angabandakanywanga).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Fumana iindidi kuphela (iimveliso azifakwanga).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Fumana ulwazi olupheleleyo olwahlukileyo.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Kuphela xa ufumana iimveliso njengomlawuli) Fumana uluhlu lwemveliso ngaphandle kwexabiso, umlinganiselo, okanye izibalo.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'uluhlu',
                    '_object' => 'Imveliso',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'uluhlu',
                    '_object' => 'Udidi',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'phikisa',
                    '_object' => 'Udidi',
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
            'description' => 'Fumana ulwazi lwemveliso kunye namanani.',
            'url' => 'iivenkile/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'phikisa',
                    '_object' => 'Imveliso',
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
                    '_type' => 'uluhlu',
                    '_object' => 'Product-Data',
                    'title' => 'yokugqibela 30 iintsuku data',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Imiyalelo que ulwazi.',
                    'type' => 'Okubonakalayo: bala (int)|Okoqobo: [ukubala, ukuhanjiswa_kwemeko] (uluhlu)'
                ],

                'new_comments_count' => [
                    'title' => 'Amagqabantshintshi amatsha.',
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
            'description' => 'Yongeza imveliso entsha evenkileni.',
            'url' => 'iivenkile/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Seta uhlobo lwemveliso / inkonzo.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Ixabiso lemveliso.', 'type' => 'dada', 'require' => true],
                'commission' => ['title' => 'Yongeza ikhomishini kwixabiso.', 'type' => 'dada', 'default' => 0],
                'discount' => ['title' => 'Isaphulelo sexabiso lemveliso esihlala sihleli.', 'type' => 'dada', 'default' => 0],
                'dis_start' => ['title' => 'Ixesha lokuqala lesaphulelo kwizowuni yexesha le-UTC (ifomati: YYYY-MM-DD HH:mm:ss).', 'type' => 'umhla', 'default' => null],
                'dis_end' => ['title' => 'Ixesha lokuphela kwesaphulelo kwizowuni yexesha le-UTC (ifomati: YYYY-MM-DD HH:mm:ss).', 'type' => 'umhla', 'default' => null],
                'currency' => ['title' => 'Imali,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Isihloko seMveliso.", 'type' => 'umtya', 'require' => true],
                'title_en' => ['title' => 'Isihloko sesiNgesi semveliso (okanye isihloko esisezantsi)', 'type' => 'umtya', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'umtya', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'umtya', 'default' => null],
                'gtin' => ['title' => "Inombolo yeMveliso yoRhwebo lweHlabathi.", 'type' => 'umtya', 'default' => null],
                'gpc' => ['title' => 'Ikhowudi yodidi lwemveliso kaGoogle.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Imeko yangoku yento kwivenkile yakho.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Umyalezo ubonisa kumsebenzisi ukuba iindawo zongeniso zikhona (ezisetyenziselwa iimveliso zenyani).', 'type' => 'umtya', 'default' => null],
                'inputs' => ['title' => 'Iinkalo zokhetho ozikhethelayo (ezisetyenziselwa iimveliso zenyani).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Iinkalo zemveliso ozikhethelayo (ezisetyenziselwa imveliso yenyani).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Ibhlog ozikhethelayo okanye url yewebhusayithi.', 'type' => 'umtya', 'default' => false],
                'status' => ['title' => 'ubume bemveliso Vula / Vala, Ukuhlala kuvuliwe.', 'type' => 'enum', 'default' => 'Vula', 'values' => ['Vula', 'Vala']],
                'category_id' => ['title' => 'id yodidi.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Ixesha lokuhamba ngeyure..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Isitayela semveliso (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Ibrand yemveliso..', 'type' => 'umtya', 'default' => null],
                'warranty' => ['title' => 'inkcazelo yewaranti..', 'type' => 'umtya', 'default' => null],
                'original' => ['title' => 'Le mveliso yeyoqobo?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Iwaranti yokubuyisela ngeentsuku.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'phikisa',
                    '_object' => 'Imveliso',
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
            'description' => 'Yongeza imveliso entsha evenkileni.',
            'url' => 'iivenkile/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Seta uhlobo lwemveliso / inkonzo.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Ixabiso lemveliso.', 'type' => 'dada', 'require' => true],
                'commission' => ['title' => 'Yongeza ikhomishini kwixabiso.', 'type' => 'dada', 'default' => 0],
                'discount' => ['title' => 'Isaphulelo sexabiso lemveliso esihlala sihleli.', 'type' => 'dada', 'default' => 0],
                'dis_start' => ['title' => 'Ixesha lokuqala lesaphulelo kwizowuni yexesha le-UTC (ifomati: YYYY-MM-DD HH:mm:ss).', 'type' => 'umhla', 'default' => null],
                'dis_end' => ['title' => 'Ixesha lokuphela kwesaphulelo kwizowuni yexesha le-UTC (ifomati: YYYY-MM-DD HH:mm:ss).', 'type' => 'umhla', 'default' => null],
                'currency' => ['title' => 'Imali,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Isihloko seMveliso.", 'type' => 'umtya', 'require' => true],
                'title_en' => ['title' => 'Isihloko sesiNgesi semveliso (okanye isihloko esisezantsi)', 'type' => 'umtya', 'default' => null],
                'message' => ['title' => 'Umyalezo ubonisa kumsebenzisi ukuba iindawo zongeniso zikhona (ezisetyenziselwa iimveliso zenyani).', 'type' => 'umtya', 'default' => null],
                'inputs' => ['title' => 'Iinkalo zokhetho ozikhethelayo (ezisetyenziselwa iimveliso zenyani).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Iinkalo zemveliso ozikhethelayo (ezisetyenziselwa imveliso yenyani).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Ibhlog ozikhethelayo okanye url yewebhusayithi.', 'type' => 'umtya', 'default' => false],
                'status' => ['title' => 'ubume bemveliso Vula / Vala, Ukuhlala kuvuliwe.', 'type' => 'enum', 'default' => 'Vula', 'values' => ['Vula', 'Vala']],
                'category_id' => ['title' => 'id yodidi.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Ixesha lokuhamba ngeyure..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Isitayela semveliso (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Ibrand yemveliso..', 'type' => 'umtya', 'default' => null],
                'warranty' => ['title' => 'inkcazelo yewaranti..', 'type' => 'umtya', 'default' => null],
                'original' => ['title' => 'Le mveliso yeyoqobo?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Iwaranti yokubuyisela ngeentsuku.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'phikisa',
                    '_object' => 'Imveliso',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Impumelelo ehlaziyiweyo yemeko yemveliso.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Yongeza imveliso entsha ukusuka kwindawo yokugcina nge-sku evenkileni.',
            'url' => 'iivenkile/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'umtya', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Ukuseta okuzenzekelayo udidi', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Imveliso yongeza kolu didi nge-id yodidi kwivenkile.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Ixabiso lemveliso.', 'type' => 'dada', 'require' => true],
                'currency' => ['title' => 'Imali,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Ubungakanani', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'phikisa',
                    '_object' => 'Imveliso',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Impumelelo ehlaziyiweyo yemeko yemveliso.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
