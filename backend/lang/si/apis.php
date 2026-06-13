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
            'description' => 'වෙළඳසැලේ නිෂ්පාදන ලැයිස්තුව ලබා ගන්න.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'පවතින නිෂ්පාදන පමණක් පෙන්වන්න. සත්‍ය හෝ අසත්‍ය විය හැක.', 'type' => 'බූලියන්', 'default' => false],
                'with_parent' => ['title' => 'මාපිය ප්‍රවර්ග ධුරාවලිය ලබා ගන්න. සත්‍ය හෝ අසත්‍ය විය හැක.', 'type' => 'බූලියන්', 'default' => false],
                'offset' => ['title' => 'නිෂ්පාදන ලැයිස්තුවේ ඕෆ්සෙට් (පින් කිරීම සඳහා).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'ලැයිස්තුවේ ඇති නිෂ්පාදන ගණන (පින් කිරීම සඳහා).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'ලැයිස්තු වර්ග කිරීමේ වර්ගය', 'type' => 'enum', 'default' => null, 'values' => [null, 'සම්බන්ධයි', 'වැඩිපුරම_නැරඹූ', 'වඩාත්ම_ජනප්රිය', 'අලුත්ම', 'වැඩියෙන්ම අලෙවි වන', 'ලාභම', 'වඩාත්ම_මිල අධික', 'අහඹු', 'සම්බන්ධයි', 'ප්රියතම', 'අහඹු']],
                'product_id' => ['title' => 'නිෂ්පාදන ID අදාළ නිෂ්පාදන ආපසු ලබා දීමට භාවිතා කරයි (වර්ග කිරීම = අදාළ).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'නිෂ්පාදන දත්ත කට්ටලය. ශුන්‍ය හෝ පිරිවිතර විය හැක (ශුන්‍ය: පෙරනිමිය, පිරිවිතර: පිරිවිතර ලබා ගැනීම සඳහා ප්‍රශස්ත කර ඇත).', 'type' => 'enum', 'default' => null, 'values' => [null, 'පිරිවිතර']],
                'search' => ['title' => 'පෙළ සොයන්න', 'type' => 'නූල්', 'default' => null],
                'search_type' => ['title' => 'සෙවුම් වර්ගය. ශුන්‍ය හෝ ප්‍රවර්ගය විය හැක.', 'type' => 'enum', 'default' => null, 'values' => [null, 'කාණ්ඩය']],
                'dir' => ['title' => 'ID කාණ්ඩය හෝ නම. සැකසූ විට මෙම කාණ්ඩයේ නිෂ්පාදන ලබා ගනී.', 'type' => 'ඕනෑම', 'default' => null],
                'products_only' => ['title' => 'නිෂ්පාදන පමණක් ලබා ගන්න (කාණ්ඩ ඇතුළත් නොවේ).', 'type' => 'බූලියන්', 'default' => false],
                'categories_only' => ['title' => 'කාණ්ඩ පමණක් ලබා ගන්න (නිෂ්පාදන ඇතුළත් නොවේ).', 'type' => 'බූලියන්', 'default' => false],
                'need_full_variants' => ['title' => 'සම්පූර්ණ විචල්‍ය තොරතුරු ලබා ගන්න.', 'type' => 'බූලියන්', 'default' => false],
                'optimized' => ['title' => '(පරිපාලකයෙකු ලෙස නිෂ්පාදන ලබා ගන්නා විට පමණි) මිල, මිල, හෝ සංඛ්‍යාලේඛන නොමැතිව නිෂ්පාදන ලැයිස්තුව ලබා ගන්න.', 'type' => 'බූලියන්', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'අරාව',
                    '_object' => 'නිෂ්පාදනය',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'අරාව',
                    '_object' => 'ප්රවර්ගය',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'වස්තුව',
                    '_object' => 'ප්රවර්ගය',
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
            'description' => 'නිෂ්පාදන තොරතුරු සහ සංඛ්යා ලේඛන ලබා ගන්න.',
            'url' => 'සාප්පු/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'වස්තුව',
                    '_object' => 'නිෂ්පාදනය',
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
                    '_type' => 'අරාව',
                    '_object' => 'නිෂ්පාදන-දත්ත',
                    'title' => 'පසුගිය දින 30 දත්ත',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'තොරතුරු සඳහා ඇණවුම් කරන්න.',
                    'type' => 'අතථ්‍ය: ගණන් (int)|භෞතික: [ගණනය, බෙදාහැරීමේ_තත්වය] (අරාව)'
                ],

                'new_comments_count' => [
                    'title' => 'නව අදහස් ගණන්.',
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
            'description' => 'වෙළඳසැලට නව නිෂ්පාදනයක් එක් කරන්න.',
            'url' => 'සාප්පු/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'නිෂ්පාදනයේ / සේවාවේ වර්ගය සකසන්න.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'නිෂ්පාදනයේ මිල.', 'type' => 'පාවෙන', 'require' => true],
                'commission' => ['title' => 'මිලට කොමිස් එකතු කරන්න.', 'type' => 'පාවෙන', 'default' => 0],
                'discount' => ['title' => 'පෙරනිමි නිෂ්පාදන මිල වට්ටම්.', 'type' => 'පාවෙන', 'default' => 0],
                'dis_start' => ['title' => 'UTC වේලා කලාපයේ වට්ටම් ආරම්භක කාලය (ආකෘතිය: YYYY-MM-DD HH:mm:ss).', 'type' => 'දිනය', 'default' => null],
                'dis_end' => ['title' => 'UTC වේලා කලාපයේ වට්ටම් අවසන් කාලය (ආකෘතිය: YYYY-MM-DD HH:mm:ss).', 'type' => 'දිනය', 'default' => null],
                'currency' => ['title' => 'මුදල්,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "නිෂ්පාදනයේ මාතෘකාව.", 'type' => 'නූල්', 'require' => true],
                'title_en' => ['title' => 'නිෂ්පාදනයේ ඉංග්‍රීසි මාතෘකාව (හෝ උප මාතෘකාව)', 'type' => 'නූල්', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'නූල්', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'නූල්', 'default' => null],
                'gtin' => ['title' => "නිෂ්පාදනයේ ගෝලීය වෙළඳ අයිතම අංකය.", 'type' => 'නූල්', 'default' => null],
                'gpc' => ['title' => 'Google නිෂ්පාදන ප්‍රවර්ග කේතය.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "ඔබගේ වෙළඳසැලේ අයිතමයේ වත්මන් තත්ත්වය.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'ආදාන ක්ෂේත්‍ර තිබේ නම් (අතථ්‍ය නිෂ්පාදන සඳහා භාවිතා වේ) පරිශීලකයාට පණිවිඩ පෙන්වන්න.', 'type' => 'නූල්', 'default' => null],
                'inputs' => ['title' => 'විකල්ප ආදාන ක්ෂේත්‍ර (අථත්‍ය නිෂ්පාදන සඳහා භාවිතා වේ).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'විකල්ප නිමැවුම් ක්ෂේත්‍ර (අථත්‍ය නිෂ්පාදන සඳහා භාවිතා වේ).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'විකල්ප බ්ලොග් හෝ වෙබ් අඩවි url.', 'type' => 'නූල්', 'default' => false],
                'status' => ['title' => 'නිෂ්පාදන තත්ත්වය විවෘත / වසන්න, පෙරනිමිය විවෘත වේ.', 'type' => 'enum', 'default' => 'විවෘත කරන්න', 'values' => ['විවෘත කරන්න', 'වසන්න']],
                'category_id' => ['title' => 'ප්රවර්ග id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ඉදිරි කාලය පැය වලින්..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'නිෂ්පාදන විලාසය (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'නිෂ්පාදන සන්නාමය..', 'type' => 'නූල්', 'default' => null],
                'warranty' => ['title' => 'වගකීම් විස්තරය..', 'type' => 'නූල්', 'default' => null],
                'original' => ['title' => 'මෙම නිෂ්පාදනය මුල් පිටපතක්ද?', 'type' => 'බූලියන්', 'default' => false],
                'return_warranty' => ['title' => 'දින ගණනින් ආපසු පැමිණීමේ වගකීම.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'වස්තුව',
                    '_object' => 'නිෂ්පාදනය',
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
            'description' => 'වෙළඳසැලට නව නිෂ්පාදනයක් එක් කරන්න.',
            'url' => 'සාප්පු/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'නිෂ්පාදනයේ / සේවාවේ වර්ගය සකසන්න.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'නිෂ්පාදනයේ මිල.', 'type' => 'පාවෙන', 'require' => true],
                'commission' => ['title' => 'මිලට කොමිස් එකතු කරන්න.', 'type' => 'පාවෙන', 'default' => 0],
                'discount' => ['title' => 'පෙරනිමි නිෂ්පාදන මිල වට්ටම්.', 'type' => 'පාවෙන', 'default' => 0],
                'dis_start' => ['title' => 'UTC වේලා කලාපයේ වට්ටම් ආරම්භක කාලය (ආකෘතිය: YYYY-MM-DD HH:mm:ss).', 'type' => 'දිනය', 'default' => null],
                'dis_end' => ['title' => 'UTC වේලා කලාපයේ වට්ටම් අවසන් කාලය (ආකෘතිය: YYYY-MM-DD HH:mm:ss).', 'type' => 'දිනය', 'default' => null],
                'currency' => ['title' => 'මුදල්,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "නිෂ්පාදනයේ මාතෘකාව.", 'type' => 'නූල්', 'require' => true],
                'title_en' => ['title' => 'නිෂ්පාදනයේ ඉංග්‍රීසි මාතෘකාව (හෝ උප මාතෘකාව)', 'type' => 'නූල්', 'default' => null],
                'message' => ['title' => 'ආදාන ක්ෂේත්‍ර තිබේ නම් (අතථ්‍ය නිෂ්පාදන සඳහා භාවිතා වේ) පරිශීලකයාට පණිවිඩ පෙන්වන්න.', 'type' => 'නූල්', 'default' => null],
                'inputs' => ['title' => 'විකල්ප ආදාන ක්ෂේත්‍ර (අථත්‍ය නිෂ්පාදන සඳහා භාවිතා වේ).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'විකල්ප නිමැවුම් ක්ෂේත්‍ර (අථත්‍ය නිෂ්පාදන සඳහා භාවිතා වේ).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'විකල්ප බ්ලොග් හෝ වෙබ් අඩවි url.', 'type' => 'නූල්', 'default' => false],
                'status' => ['title' => 'නිෂ්පාදන තත්ත්වය විවෘත / වසන්න, පෙරනිමිය විවෘත වේ.', 'type' => 'enum', 'default' => 'විවෘත කරන්න', 'values' => ['විවෘත කරන්න', 'වසන්න']],
                'category_id' => ['title' => 'ප්රවර්ග id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ඉදිරි කාලය පැය වලින්..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'නිෂ්පාදන විලාසය (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'නිෂ්පාදන සන්නාමය..', 'type' => 'නූල්', 'default' => null],
                'warranty' => ['title' => 'වගකීම් විස්තරය..', 'type' => 'නූල්', 'default' => null],
                'original' => ['title' => 'මෙම නිෂ්පාදනය මුල් පිටපතක්ද?', 'type' => 'බූලියන්', 'default' => false],
                'return_warranty' => ['title' => 'දින ගණනින් ආපසු පැමිණීමේ වගකීම.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'වස්තුව',
                    '_object' => 'නිෂ්පාදනය',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'සාර්ථක නිෂ්පාදන තත්ත්වය යාවත්කාලීන කරන ලදී.', 'type' => 'බූලියන්'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'ගබඩාවට sku මගින් ගබඩාවෙන් නව නිෂ්පාදනයක් එක් කරන්න.',
            'url' => 'සාප්පු/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'නූල්', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'ස්වයංක්‍රීය කට්ටල කාණ්ඩය', 'type' => 'බූලියන්', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'වෙළඳසලේ ඇති ප්‍රවර්ග හැඳුනුම්පත අනුව නිෂ්පාදන මෙම ප්‍රවර්ගයට එක් කරන්න.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'නිෂ්පාදනයේ මිල.', 'type' => 'පාවෙන', 'require' => true],
                'currency' => ['title' => 'මුදල්,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'ප්රමාණය', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'වස්තුව',
                    '_object' => 'නිෂ්පාදනය',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'සාර්ථක නිෂ්පාදන තත්ත්වය යාවත්කාලීන කරන ලදී.', 'type' => 'බූලියන්'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
