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
            'description' => 'Merrni listën e produkteve të dyqanit.',
            'url' => 'dyqane/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Shfaq vetëm produktet e disponueshme. Mund të jetë e vërtetë ose e rreme.', 'type' => 'logjike', 'default' => false],
                'with_parent' => ['title' => 'Merrni hierarkinë e kategorisë prind. Mund të jetë e vërtetë ose e rreme.', 'type' => 'logjike', 'default' => false],
                'offset' => ['title' => 'Kompensimi i listës së produkteve (për faqezim).', 'type' => 'ndër', 'default' => 0],
                'limit' => ['title' => 'Numri i produkteve në listë (për faqezim).', 'type' => 'ndër', 'default' => 20],
                'sort' => ['title' => 'Lloji i renditjes së listës', 'type' => 'një numër', 'default' => null, 'values' => [null, 'të lidhura', 'më të_vizituara', 'më i_popullor', 'më të rejat', 'bestseller', 'më e lirë', 'më i shtrenjtë', 'e rastit', 'të lidhura', 'e preferuara', 'e rastit']],
                'product_id' => ['title' => 'Produkti ID përdoret për të kthyer produkte të ndërlidhura (rendi = i lidhur).', 'type' => 'ndër', 'default' => null],
                'set' => ['title' => 'Seti i të dhënave të produktit. Mund të jetë null ose specifik (null: i paracaktuar, specifik: i optimizuar për marrjen e specifikimeve).', 'type' => 'një numër', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Kërko tekst', 'type' => 'varg', 'default' => null],
                'search_type' => ['title' => 'Lloji i kërkimit. Mund të jetë null ose kategori.', 'type' => 'një numër', 'default' => null, 'values' => [null, 'kategori']],
                'dir' => ['title' => 'Kategoria ID ose emri. Merr produkte në këtë kategori kur vendoset.', 'type' => 'ndonjë', 'default' => null],
                'products_only' => ['title' => 'Merrni vetëm produkte (kategoritë nuk përfshihen).', 'type' => 'logjike', 'default' => false],
                'categories_only' => ['title' => 'Merrni vetëm kategori (produkte nuk përfshihen).', 'type' => 'logjike', 'default' => false],
                'need_full_variants' => ['title' => 'Merrni informacionin e plotë të variantit.', 'type' => 'logjike', 'default' => false],
                'optimized' => ['title' => '(Vetëm kur merrni produkte si administrator) Merrni listën e produkteve pa çmim, tarifë ose statistika.', 'type' => 'logjike', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'varg',
                    '_object' => 'Produkti',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'varg',
                    '_object' => 'Kategoria',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objekt',
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
            'description' => 'Merrni informacione dhe statistika për produktin.',
            'url' => 'dyqane/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkti',
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
                    '_type' => 'varg',
                    '_object' => 'Produkt-Të dhënat',
                    'title' => 'të dhënat e 30 ditëve të fundit',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Porosit për info.',
                    'type' => 'Virtuale: numëro (int)|Fizike: [numërimi, gjendja_dorëzimi] (vargu)'
                ],

                'new_comments_count' => [
                    'title' => 'Komentet e reja numërohen.',
                    'type' => 'ndër'
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
            'description' => 'Shtoni një produkt të ri në dyqan.',
            'url' => 'dyqane/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Përcaktoni llojin e produktit/shërbimit.', 'type' => 'një numër', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Çmimi i produktit.', 'type' => 'noton', 'require' => true],
                'commission' => ['title' => 'Shto komision në çmim.', 'type' => 'noton', 'default' => 0],
                'discount' => ['title' => 'Zbritje e çmimit të parazgjedhur të produktit.', 'type' => 'noton', 'default' => 0],
                'dis_start' => ['title' => 'Koha e fillimit të zbritjes në zonën kohore UTC (formati: YYYY-MM-DD HH:mm:ss).', 'type' => 'datë', 'default' => null],
                'dis_end' => ['title' => 'Ora e përfundimit të zbritjes në zonën kohore UTC (formati: VVVV-MM-DD HH:mm:ss).', 'type' => 'datë', 'default' => null],
                'currency' => ['title' => 'Monedha,', 'type' => 'një numër', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titulli i produktit.", 'type' => 'varg', 'require' => true],
                'title_en' => ['title' => 'Titulli në anglisht i produktit (ose nëntitulli)', 'type' => 'varg', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'varg', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'varg', 'default' => null],
                'gtin' => ['title' => "Numri i artikullit të tregtisë globale të produktit.", 'type' => 'varg', 'default' => null],
                'gpc' => ['title' => 'Kodi i kategorisë së produktit të Google.', 'type' => 'ndër', 'default' => null],
                'condition' => ['title' => "Gjendja aktuale e artikullit në dyqanin tuaj.", 'type' => 'një numër', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Shfaqni mesazhin tek përdoruesi nëse ekzistojnë fushat e hyrjes (përdoren për produkte virtuale).', 'type' => 'varg', 'default' => null],
                'inputs' => ['title' => 'Fushat e hyrjes opsionale (përdoren për produktet virtuale).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Fushat e daljes opsionale (përdoren për produkte virtuale).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog opsional ose URL e faqes në internet.', 'type' => 'varg', 'default' => false],
                'status' => ['title' => 'statusi i produktit Hap / Mbyll, Parazgjedhja është Hapur.', 'type' => 'një numër', 'default' => 'Hapur', 'values' => ['Hapur', 'Mbylle']],
                'category_id' => ['title' => 'id i kategorisë.', 'type' => 'ndër', 'default' => null],
                'lead' => ['title' => 'Kohëzgjatja në orë..', 'type' => 'ndër', 'default' => null],
                'style' => ['title' => 'Stili i produktit (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marka e produktit..', 'type' => 'varg', 'default' => null],
                'warranty' => ['title' => 'përshkrimi i garancisë..', 'type' => 'varg', 'default' => null],
                'original' => ['title' => 'Ky produkt është origjinal?', 'type' => 'logjike', 'default' => false],
                'return_warranty' => ['title' => 'Garancia e kthimit me ditë.', 'type' => 'ndër', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkti',
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
            'description' => 'Shtoni një produkt të ri në dyqan.',
            'url' => 'dyqane/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Përcaktoni llojin e produktit/shërbimit.', 'type' => 'një numër', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Çmimi i produktit.', 'type' => 'noton', 'require' => true],
                'commission' => ['title' => 'Shto komision në çmim.', 'type' => 'noton', 'default' => 0],
                'discount' => ['title' => 'Zbritje e çmimit të parazgjedhur të produktit.', 'type' => 'noton', 'default' => 0],
                'dis_start' => ['title' => 'Koha e fillimit të zbritjes në zonën kohore UTC (formati: YYYY-MM-DD HH:mm:ss).', 'type' => 'datë', 'default' => null],
                'dis_end' => ['title' => 'Ora e përfundimit të zbritjes në zonën kohore UTC (formati: VVVV-MM-DD HH:mm:ss).', 'type' => 'datë', 'default' => null],
                'currency' => ['title' => 'Monedha,', 'type' => 'një numër', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titulli i produktit.", 'type' => 'varg', 'require' => true],
                'title_en' => ['title' => 'Titulli në anglisht i produktit (ose nëntitulli)', 'type' => 'varg', 'default' => null],
                'message' => ['title' => 'Shfaqni mesazhin tek përdoruesi nëse ekzistojnë fushat e hyrjes (përdoren për produkte virtuale).', 'type' => 'varg', 'default' => null],
                'inputs' => ['title' => 'Fushat e hyrjes opsionale (përdoren për produktet virtuale).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Fushat e daljes opsionale (përdoren për produkte virtuale).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog opsional ose URL e faqes në internet.', 'type' => 'varg', 'default' => false],
                'status' => ['title' => 'statusi i produktit Hap / Mbyll, Parazgjedhja është Hapur.', 'type' => 'një numër', 'default' => 'Hapur', 'values' => ['Hapur', 'Mbylle']],
                'category_id' => ['title' => 'id i kategorisë.', 'type' => 'ndër', 'default' => null],
                'lead' => ['title' => 'Kohëzgjatja në orë..', 'type' => 'ndër', 'default' => null],
                'style' => ['title' => 'Stili i produktit (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marka e produktit..', 'type' => 'varg', 'default' => null],
                'warranty' => ['title' => 'përshkrimi i garancisë..', 'type' => 'varg', 'default' => null],
                'original' => ['title' => 'Ky produkt është origjinal?', 'type' => 'logjike', 'default' => false],
                'return_warranty' => ['title' => 'Garancia e kthimit me ditë.', 'type' => 'ndër', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkti',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Gjendja e produktit u përditësua me sukses.', 'type' => 'logjike'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Shtoni produktin e ri nga depoja me sku në dyqan.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'varg', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Kategoria e vendosjes automatike', 'type' => 'logjike', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Produkti shtohet në këtë kategori sipas ID-së së kategorisë në dyqan.', 'type' => 'ndër', 'default' => null],

                'price' => ['title' => 'Çmimi i produktit.', 'type' => 'noton', 'require' => true],
                'currency' => ['title' => 'Monedha,', 'type' => 'një numër', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Sasia', 'type' => 'ndër', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objekt',
                    '_object' => 'Produkti',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Gjendja e produktit u përditësua me sukses.', 'type' => 'logjike'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
