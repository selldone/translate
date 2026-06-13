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
            'description' => 'Pezani mndandanda wazogulitsa.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Onetsani zinthu zomwe zilipo zokha. Zitha kukhala zoona kapena zabodza.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Pezani mndandanda wamagulu a makolo. Zitha kukhala zoona kapena zabodza.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Kuchotsera kwa mndandanda wazogulitsa (zamitundu).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Chiwerengero chazinthu zomwe zili pamndandanda (zamitundu).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Mtundu wamtundu', 'type' => 'inu', 'default' => null, 'values' => [null, 'zokhudzana', 'ambiri_anachezeredwa', 'ambiri_otchuka', 'zatsopano', 'ogulitsa kwambiri', 'zotsika mtengo', 'zambiri_zokwera mtengo', 'mwachisawawa', 'zokhudzana', 'wokondedwa', 'mwachisawawa']],
                'product_id' => ['title' => 'Chogulitsa ID chomwe chimagwiritsidwa ntchito pobweza zinthu zokhudzana nazo (mtundu = zokhudzana).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Seti ya data yamalonda. Zitha kukhala zopanda pake kapena zosawerengeka (zopanda pake: zosasinthika, zokhazikika: zokometsedwa kuti mutengenso zomwe mukufuna).', 'type' => 'inu', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Sakani mawu', 'type' => 'chingwe', 'default' => null],
                'search_type' => ['title' => 'Fufuzani mtundu. Zitha kukhala zopanda pake kapena gulu.', 'type' => 'inu', 'default' => null, 'values' => [null, 'gulu']],
                'dir' => ['title' => 'Gulu ID kapena dzina. Imapeza zinthu zagululi zikakhazikitsidwa.', 'type' => 'iliyonse', 'default' => null],
                'products_only' => ['title' => 'Pezani zinthu zokha (magulu osaphatikizidwa).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Pezani magulu okha (zogulitsa sizinaphatikizidwe).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Pezani zambiri zosiyanasiyana.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Pokhapokha mutapeza zinthu ngati woyang\'anira) Pezani mndandanda wazinthu popanda mtengo, mtengo, kapena ziwerengero.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'gulu',
                    '_object' => 'Zogulitsa',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'gulu',
                    '_object' => 'Gulu',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'chinthu',
                    '_object' => 'Gulu',
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
            'description' => 'Pezani zambiri zamalonda ndi ziwerengero.',
            'url' => 'masitolo/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'chinthu',
                    '_object' => 'Zogulitsa',
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
                    '_type' => 'gulu',
                    '_object' => 'Product-Deta',
                    'title' => 'data yamasiku 30 omaliza',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Amayitanitsa zambiri.',
                    'type' => 'Pafupifupi: count (int)|Zathupi: [kuwerengera, kutumiza_state] (zosiyanasiyana)'
                ],

                'new_comments_count' => [
                    'title' => 'Kuwerengera kwatsopano.',
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
            'description' => 'Onjezani zatsopano kusitolo.',
            'url' => 'masitolo/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Khazikitsani mtundu wa malonda / ntchito.', 'type' => 'inu', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Mtengo wa mankhwala.', 'type' => 'zoyandama', 'require' => true],
                'commission' => ['title' => 'Onjezani ndalama pamtengo.', 'type' => 'zoyandama', 'default' => 0],
                'discount' => ['title' => 'Kuchotsera kwamitengo yazinthu.', 'type' => 'zoyandama', 'default' => 0],
                'dis_start' => ['title' => 'Nthawi yoyambira kuchotsera muzoni yanthawi ya UTC (mtundu: YYYY-MM-DD HH:mm:ss).', 'type' => 'tsiku', 'default' => null],
                'dis_end' => ['title' => 'Nthawi yotsiriza yochotsera muzoni yanthawi ya UTC (mtundu: YYYY-MM-DD HH:mm:ss).', 'type' => 'tsiku', 'default' => null],
                'currency' => ['title' => 'Ndalama,', 'type' => 'inu', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Mutu wa malonda.", 'type' => 'chingwe', 'require' => true],
                'title_en' => ['title' => 'Mutu wachingerezi wa chinthucho (kapena mutu wocheperako)', 'type' => 'chingwe', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'chingwe', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'chingwe', 'default' => null],
                'gtin' => ['title' => "Nambala Yachinthu Pazamalonda Padziko Lonse.", 'type' => 'chingwe', 'default' => null],
                'gpc' => ['title' => 'Gulu lazinthu za Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Zomwe zili m'sitolo yanu.", 'type' => 'inu', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Uthenga umawonetsedwa kwa wogwiritsa ntchito ngati malo olowetsa alipo (omwe amagwiritsidwa ntchito pazinthu zenizeni).', 'type' => 'chingwe', 'default' => null],
                'inputs' => ['title' => 'Malo olowetsamo makonda (omwe amagwiritsidwa ntchito pazinthu zenizeni).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Minda yotulutsa mwasankha (yomwe imagwiritsidwa ntchito pazinthu zenizeni).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Ulalo wabulogu kapena tsamba lawebusayiti.', 'type' => 'chingwe', 'default' => false],
                'status' => ['title' => 'Zogulitsa Tsegulani / Tsekani, Zosintha ndizotsegulidwa.', 'type' => 'inu', 'default' => 'Tsegulani', 'values' => ['Tsegulani', 'Tsekani']],
                'category_id' => ['title' => 'gulu id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Nthawi yotsogolera mu maola ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Mtundu wazinthu (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Mtundu wa mankhwala..', 'type' => 'chingwe', 'default' => null],
                'warranty' => ['title' => 'chidziwitso cha warranty..', 'type' => 'chingwe', 'default' => null],
                'original' => ['title' => 'Izi ndi zoyambira?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Bweretsani chitsimikizo ndi masiku.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'chinthu',
                    '_object' => 'Zogulitsa',
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
            'description' => 'Onjezani zatsopano kusitolo.',
            'url' => 'masitolo/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Khazikitsani mtundu wa malonda / ntchito.', 'type' => 'inu', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Mtengo wa mankhwala.', 'type' => 'zoyandama', 'require' => true],
                'commission' => ['title' => 'Onjezani ndalama pamtengo.', 'type' => 'zoyandama', 'default' => 0],
                'discount' => ['title' => 'Kuchotsera kwamitengo yazinthu.', 'type' => 'zoyandama', 'default' => 0],
                'dis_start' => ['title' => 'Nthawi yoyambira kuchotsera muzoni yanthawi ya UTC (mtundu: YYYY-MM-DD HH:mm:ss).', 'type' => 'tsiku', 'default' => null],
                'dis_end' => ['title' => 'Nthawi yotsiriza yochotsera muzoni yanthawi ya UTC (mtundu: YYYY-MM-DD HH:mm:ss).', 'type' => 'tsiku', 'default' => null],
                'currency' => ['title' => 'Ndalama,', 'type' => 'inu', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Mutu wa malonda.", 'type' => 'chingwe', 'require' => true],
                'title_en' => ['title' => 'Mutu wachingerezi wa chinthucho (kapena mutu wocheperako)', 'type' => 'chingwe', 'default' => null],
                'message' => ['title' => 'Uthenga umawonetsedwa kwa wogwiritsa ntchito ngati malo olowetsa alipo (omwe amagwiritsidwa ntchito pazinthu zenizeni).', 'type' => 'chingwe', 'default' => null],
                'inputs' => ['title' => 'Malo olowetsamo makonda (omwe amagwiritsidwa ntchito pazinthu zenizeni).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Minda yotulutsa mwasankha (yomwe imagwiritsidwa ntchito pazinthu zenizeni).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Ulalo wabulogu kapena tsamba lawebusayiti.', 'type' => 'chingwe', 'default' => false],
                'status' => ['title' => 'Zogulitsa Tsegulani / Tsekani, Zosintha ndizotsegulidwa.', 'type' => 'inu', 'default' => 'Tsegulani', 'values' => ['Tsegulani', 'Tsekani']],
                'category_id' => ['title' => 'gulu id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Nthawi yotsogolera mu maola ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Mtundu wazinthu (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Mtundu wa mankhwala..', 'type' => 'chingwe', 'default' => null],
                'warranty' => ['title' => 'chidziwitso cha warranty..', 'type' => 'chingwe', 'default' => null],
                'original' => ['title' => 'Izi ndi zoyambira?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Bweretsani chitsimikizo ndi masiku.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'chinthu',
                    '_object' => 'Zogulitsa',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Kupambana kusinthidwa momwe zinthu ziliri.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Onjezani zatsopano kuchokera kunkhokwe ndi sku kupita kusitolo.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'chingwe', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Auto set gulu', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Onjezani gululi potengera ma id agulu mu shopu.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Mtengo wa mankhwala.', 'type' => 'zoyandama', 'require' => true],
                'currency' => ['title' => 'Ndalama,', 'type' => 'inu', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Kuchuluka', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'chinthu',
                    '_object' => 'Zogulitsa',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Kupambana kusinthidwa momwe zinthu ziliri.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
