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
            'description' => 'Jwenn lis pwodwi boutik la.',
            'url' => 'boutik/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Montre sèlman pwodwi ki disponib. Kapab vre oswa fo.', 'type' => 'booleyen', 'default' => false],
                'with_parent' => ['title' => 'Jwenn yerachi kategori paran an. Kapab vre oswa fo.', 'type' => 'booleyen', 'default' => false],
                'offset' => ['title' => 'Offset nan lis pwodwi a (pou pagination).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Kantite pwodwi nan lis la (pou pagination).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Lis kalite sòt', 'type' => 'enum', 'default' => null, 'values' => [null, 'ki gen rapò', 'pi_vizite', 'pi_popilè', 'dernye', 'pi vann', 'pi bon mache', 'pi_chè', 'o aza', 'ki gen rapò', 'pi renmen', 'o aza']],
                'product_id' => ['title' => 'Pwodwi ID itilize pou retounen pwodwi ki gen rapò (sort = ki gen rapò).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Done pwodwi ansanm. Kapab nil oswa espèk (nil: default, spesifikasyon: optimize pou rekipere espesifikasyon).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spesifikasyon']],
                'search' => ['title' => 'Rechèch tèks', 'type' => 'fisèl', 'default' => null],
                'search_type' => ['title' => 'Kalite rechèch. Ka nil oswa kategori.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategori']],
                'dir' => ['title' => 'Kategori ID oswa non. Jwenn pwodwi nan kategori sa a lè yo mete.', 'type' => 'nenpòt', 'default' => null],
                'products_only' => ['title' => 'Jwenn sèlman pwodwi (kategori pa enkli).', 'type' => 'booleyen', 'default' => false],
                'categories_only' => ['title' => 'Jwenn kategori sèlman (pwodwi pa enkli).', 'type' => 'booleyen', 'default' => false],
                'need_full_variants' => ['title' => 'Jwenn enfòmasyon konplè sou variant.', 'type' => 'booleyen', 'default' => false],
                'optimized' => ['title' => '(Sèlman lè w ap resevwa pwodwi kòm yon admin) Jwenn lis pwodwi a san pri, pousantaj, oswa estatistik.', 'type' => 'booleyen', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'etalaj',
                    '_object' => 'Pwodwi',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'etalaj',
                    '_object' => 'Kategori',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objè',
                    '_object' => 'Kategori',
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
            'description' => 'Jwenn enfòmasyon sou pwodwi ak estatistik.',
            'url' => 'boutik/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'objè',
                    '_object' => 'Pwodwi',
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
                    '_type' => 'etalaj',
                    '_object' => 'Pwodwi-Done',
                    'title' => 'done 30 dènye jou yo',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Lòd ke enfòmasyon.',
                    'type' => 'Viryèl: konte (int)|Fizik: [count, delivery_state] (etalaj)'
                ],

                'new_comments_count' => [
                    'title' => 'Nouvo kòmantè konte.',
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
            'description' => 'Ajoute nouvo pwodwi nan boutik la.',
            'url' => 'boutik/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Mete kalite pwodwi / sèvis la.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Pri pwodwi a.', 'type' => 'flote', 'require' => true],
                'commission' => ['title' => 'Ajoute komisyon nan pri.', 'type' => 'flote', 'default' => 0],
                'discount' => ['title' => 'Default pri pwodwi rabè.', 'type' => 'flote', 'default' => 0],
                'dis_start' => ['title' => 'Tan kòmanse rabè nan zòn lè UTC a (fòma: YYYY-MM-DD HH:mm:ss).', 'type' => 'dat', 'default' => null],
                'dis_end' => ['title' => 'Lè fen rabè nan zòn lè UTC a (fòma: YYYY-MM-DD HH:mm:ss).', 'type' => 'dat', 'default' => null],
                'currency' => ['title' => 'Lajan,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Tit pwodwi a.", 'type' => 'fisèl', 'require' => true],
                'title_en' => ['title' => 'Tit anglè pwodwi a (oswa ti tit)', 'type' => 'fisèl', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'fisèl', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'fisèl', 'default' => null],
                'gtin' => ['title' => "Nimewo Atik Komès Mondyal pwodwi a.", 'type' => 'fisèl', 'default' => null],
                'gpc' => ['title' => 'Kòd kategori pwodwi Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Kondisyon aktyèl atik la nan magazen ou.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Mesaj montre itilizatè a si jaden antre egziste (itilize pou pwodwi vityèl).', 'type' => 'fisèl', 'default' => null],
                'inputs' => ['title' => 'Jaden opinyon opsyonèl (itilize pou pwodwi vityèl).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Jaden pwodiksyon opsyonèl (itilize pou pwodwi vityèl).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Si ou vle blog oswa sit entènèt url.', 'type' => 'fisèl', 'default' => false],
                'status' => ['title' => 'estati pwodwi Louvri / Fèmen, Default se Louvri.', 'type' => 'enum', 'default' => 'Louvri', 'values' => ['Louvri', 'Fèmen']],
                'category_id' => ['title' => 'kategori id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Tan plon an èdtan ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Style nan pwodwi (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Mak pwodwi..', 'type' => 'fisèl', 'default' => null],
                'warranty' => ['title' => 'deskripsyon garanti..', 'type' => 'fisèl', 'default' => null],
                'original' => ['title' => 'Pwodwi sa a orijinal?', 'type' => 'booleyen', 'default' => false],
                'return_warranty' => ['title' => 'Retounen garanti pa jou.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objè',
                    '_object' => 'Pwodwi',
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
            'description' => 'Ajoute nouvo pwodwi nan boutik la.',
            'url' => 'boutik/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Mete kalite pwodwi / sèvis la.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Pri pwodwi a.', 'type' => 'flote', 'require' => true],
                'commission' => ['title' => 'Ajoute komisyon nan pri.', 'type' => 'flote', 'default' => 0],
                'discount' => ['title' => 'Default pri pwodwi rabè.', 'type' => 'flote', 'default' => 0],
                'dis_start' => ['title' => 'Tan kòmanse rabè nan zòn lè UTC a (fòma: YYYY-MM-DD HH:mm:ss).', 'type' => 'dat', 'default' => null],
                'dis_end' => ['title' => 'Lè fen rabè nan zòn lè UTC a (fòma: YYYY-MM-DD HH:mm:ss).', 'type' => 'dat', 'default' => null],
                'currency' => ['title' => 'Lajan,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Tit pwodwi a.", 'type' => 'fisèl', 'require' => true],
                'title_en' => ['title' => 'Tit anglè pwodwi a (oswa ti tit)', 'type' => 'fisèl', 'default' => null],
                'message' => ['title' => 'Mesaj montre itilizatè a si jaden antre egziste (itilize pou pwodwi vityèl).', 'type' => 'fisèl', 'default' => null],
                'inputs' => ['title' => 'Jaden opinyon opsyonèl (itilize pou pwodwi vityèl).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Jaden pwodiksyon opsyonèl (itilize pou pwodwi vityèl).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Si ou vle blog oswa sit entènèt url.', 'type' => 'fisèl', 'default' => false],
                'status' => ['title' => 'estati pwodwi Louvri / Fèmen, Default se Louvri.', 'type' => 'enum', 'default' => 'Louvri', 'values' => ['Louvri', 'Fèmen']],
                'category_id' => ['title' => 'kategori id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Tan plon an èdtan ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Style nan pwodwi (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Mak pwodwi..', 'type' => 'fisèl', 'default' => null],
                'warranty' => ['title' => 'deskripsyon garanti..', 'type' => 'fisèl', 'default' => null],
                'original' => ['title' => 'Pwodwi sa a orijinal?', 'type' => 'booleyen', 'default' => false],
                'return_warranty' => ['title' => 'Retounen garanti pa jou.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objè',
                    '_object' => 'Pwodwi',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Siksè mete ajou eta pwodwi.', 'type' => 'booleyen'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Ajoute nouvo pwodwi ki soti nan depo pa sku nan boutik la.',
            'url' => 'boutik/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'fisèl', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Kategori seri oto', 'type' => 'booleyen', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Pwodwi ajoute nan kategori sa a pa kategori id nan magazen an.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Pri pwodwi a.', 'type' => 'flote', 'require' => true],
                'currency' => ['title' => 'Lajan,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Kantite', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objè',
                    '_object' => 'Pwodwi',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Siksè mete ajou eta pwodwi.', 'type' => 'booleyen'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
