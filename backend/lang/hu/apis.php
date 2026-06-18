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
            'description' => 'Szerezze meg az üzlet terméklistáját.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Csak az elérhető termékeket jelenítse meg. Lehet igaz vagy hamis.', 'type' => 'logikai érték', 'default' => false],
                'with_parent' => ['title' => 'Szerezze be a szülőkategória hierarchiáját. Lehet igaz vagy hamis.', 'type' => 'logikai érték', 'default' => false],
                'offset' => ['title' => 'A terméklista eltolása (oldalszámozáshoz).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'A listában szereplő termékek száma (oldalszámozáshoz).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Lista rendezési típusa', 'type' => 'enum', 'default' => null, 'values' => [null, 'kapcsolatos', 'leg_látogatottabb', 'legnépszerűbb', 'legújabb', 'bestseller', 'legolcsóbb', 'leg_drágább', 'véletlenszerű', 'kapcsolatos', 'kedvenc', 'véletlenszerű']],
                'product_id' => ['title' => 'A kapcsolódó termékek visszaküldésére használt ID termék (rendezés = kapcsolódó).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Termék adatkészlet. Lehet null vagy spec (null: alapértelmezett, spec: specifikációk lekérésére optimalizálva).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Szöveg keresése', 'type' => 'húr', 'default' => null],
                'search_type' => ['title' => 'Keresés típusa. Lehet null vagy kategória.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategória']],
                'dir' => ['title' => 'ID kategória vagy név. Beállításkor megkapja az ebbe a kategóriába tartozó termékeket.', 'type' => 'bármelyik', 'default' => null],
                'products_only' => ['title' => 'Csak termékeket szerezzen be (a kategóriákat nem tartalmazza).', 'type' => 'logikai érték', 'default' => false],
                'categories_only' => ['title' => 'Csak kategóriákat kaphat (a termékeket nem tartalmazza).', 'type' => 'logikai érték', 'default' => false],
                'need_full_variants' => ['title' => 'Teljes információ a változatról.', 'type' => 'logikai érték', 'default' => false],
                'optimized' => ['title' => '(Csak akkor, ha adminisztrátorként szerez be termékeket) A terméklista lekérése ár, árfolyam vagy statisztikák nélkül.', 'type' => 'logikai érték', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'tömb',
                    '_object' => 'Termék',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'tömb',
                    '_object' => 'Kategória',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'tárgyat',
                    '_object' => 'Kategória',
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
            'description' => 'Termékinformációkat és statisztikákat kaphat.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'tárgyat',
                    '_object' => 'Termék',
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
                    '_type' => 'tömb',
                    '_object' => 'Termékadatok',
                    'title' => 'utolsó 30 nap adatai',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Rendelések információért.',
                    'type' => 'Virtuális: count (int)|Fizikai: [számlálás, szállítási_állapot] (tömb)'
                ],

                'new_comments_count' => [
                    'title' => 'Az új megjegyzések számítanak.',
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
            'description' => 'Új termék hozzáadása az üzlethez.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Állítsa be a termék/szolgáltatás típusát.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'A termék ára.', 'type' => 'úszó', 'require' => true],
                'commission' => ['title' => 'Adjon hozzá jutalékot az árhoz.', 'type' => 'úszó', 'default' => 0],
                'discount' => ['title' => 'Alapértelmezett termék árengedmény.', 'type' => 'úszó', 'default' => 0],
                'dis_start' => ['title' => 'A kedvezmény kezdő időpontja az UTC időzónában (formátum: ÉÉÉÉ-HH-DD HH:mm:ss).', 'type' => 'dátumot', 'default' => null],
                'dis_end' => ['title' => 'A kedvezmény befejezési ideje az UTC időzónában (formátum: ÉÉÉÉ-HH-DD HH:mm:ss).', 'type' => 'dátumot', 'default' => null],
                'currency' => ['title' => 'Pénznem,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "A termék címe.", 'type' => 'húr', 'require' => true],
                'title_en' => ['title' => 'a termék angol címe (vagy alcím)', 'type' => 'húr', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'húr', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'húr', 'default' => null],
                'gtin' => ['title' => "A termék globális kereskedelmi cikkszáma.", 'type' => 'húr', 'default' => null],
                'gpc' => ['title' => 'Google termékkategória kódja.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "A termék jelenlegi állapota az üzletedben.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Üzenet jelenik meg a felhasználónak, ha léteznek beviteli mezők (a virtuális termékekhez használatos).', 'type' => 'húr', 'default' => null],
                'inputs' => ['title' => 'Opcionális beviteli mezők (virtuális termékekhez használatos).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Opcionális kimeneti mezők (virtuális termékekhez használatos).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Nem kötelező blog vagy webhely URL-je.', 'type' => 'húr', 'default' => false],
                'status' => ['title' => 'termék állapota Nyitott / Bezárás, Az alapértelmezett a Nyitott.', 'type' => 'enum', 'default' => 'Nyissa meg', 'values' => ['Nyissa meg', 'Bezárás']],
                'category_id' => ['title' => 'kategória azonosító.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Átfutási idő órákban..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'A termék stílusa (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'A termék márkája..', 'type' => 'húr', 'default' => null],
                'warranty' => ['title' => 'garanciális leírás..', 'type' => 'húr', 'default' => null],
                'original' => ['title' => 'Ez a termék eredeti?', 'type' => 'logikai érték', 'default' => false],
                'return_warranty' => ['title' => 'Visszaküldési garancia napokban.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'tárgyat',
                    '_object' => 'Termék',
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
            'description' => 'Új termék hozzáadása az üzlethez.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Állítsa be a termék/szolgáltatás típusát.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'A termék ára.', 'type' => 'úszó', 'require' => true],
                'commission' => ['title' => 'Adjon hozzá jutalékot az árhoz.', 'type' => 'úszó', 'default' => 0],
                'discount' => ['title' => 'Alapértelmezett termék árengedmény.', 'type' => 'úszó', 'default' => 0],
                'dis_start' => ['title' => 'A kedvezmény kezdő időpontja az UTC időzónában (formátum: ÉÉÉÉ-HH-DD HH:mm:ss).', 'type' => 'dátumot', 'default' => null],
                'dis_end' => ['title' => 'A kedvezmény befejezési ideje az UTC időzónában (formátum: ÉÉÉÉ-HH-DD HH:mm:ss).', 'type' => 'dátumot', 'default' => null],
                'currency' => ['title' => 'Pénznem,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "A termék címe.", 'type' => 'húr', 'require' => true],
                'title_en' => ['title' => 'a termék angol címe (vagy alcím)', 'type' => 'húr', 'default' => null],
                'message' => ['title' => 'Üzenet jelenik meg a felhasználónak, ha léteznek beviteli mezők (a virtuális termékekhez használatos).', 'type' => 'húr', 'default' => null],
                'inputs' => ['title' => 'Opcionális beviteli mezők (virtuális termékekhez használatos).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Opcionális kimeneti mezők (virtuális termékekhez használatos).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Nem kötelező blog vagy webhely URL-je.', 'type' => 'húr', 'default' => false],
                'status' => ['title' => 'termék állapota Nyitott / Bezárás, Az alapértelmezett a Nyitott.', 'type' => 'enum', 'default' => 'Nyissa meg', 'values' => ['Nyissa meg', 'Bezárás']],
                'category_id' => ['title' => 'kategória azonosító.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Átfutási idő órákban..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'A termék stílusa (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'A termék márkája..', 'type' => 'húr', 'default' => null],
                'warranty' => ['title' => 'garanciális leírás..', 'type' => 'húr', 'default' => null],
                'original' => ['title' => 'Ez a termék eredeti?', 'type' => 'logikai érték', 'default' => false],
                'return_warranty' => ['title' => 'Visszaküldési garancia napokban.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'tárgyat',
                    '_object' => 'Termék',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'A termékállapot frissítése sikeres volt.', 'type' => 'logikai érték'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Új termék hozzáadása a tárhelyből sku szerint az üzlethez.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'húr', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Automatikusan beállított kategória', 'type' => 'logikai érték', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Termék hozzáadása ebbe a kategóriába kategóriaazonosító alapján az üzletben.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'A termék ára.', 'type' => 'úszó', 'require' => true],
                'currency' => ['title' => 'Pénznem,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Mennyiség', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'tárgyat',
                    '_object' => 'Termék',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'A termékállapot frissítése sikeres volt.', 'type' => 'logikai érték'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
