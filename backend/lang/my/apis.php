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
            'description' => 'ဆိုင်၏ထုတ်ကုန်စာရင်းကိုရယူပါ။',
            'url' => 'ဆိုင်များ/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'ရနိုင်သောထုတ်ကုန်များကိုသာပြသပါ။ မှန်သည်ဖြစ်စေ မှားနိုင်သည်။', 'type' => 'ဘူလီယံ', 'default' => false],
                'with_parent' => ['title' => 'ပင်မအမျိုးအစား အထက်အောက်ကို ရယူပါ။ မှန်သည်ဖြစ်စေ မှားနိုင်သည်။', 'type' => 'ဘူလီယံ', 'default' => false],
                'offset' => ['title' => 'ထုတ်ကုန်စာရင်း (pagination အတွက်) အော့ဖ်ဆက်။', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'စာရင်းရှိ ထုတ်ကုန်အရေအတွက် (pagination အတွက်)။', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'စာရင်းအမျိုးအစား', 'type' => 'enum', 'default' => null, 'values' => [null, 'ဆက်စပ်', 'အလည်အပတ် အများဆုံး', 'လူကြိုက်အများဆုံး', 'အသစ်ဆုံး', 'အရောင်းရဆုံး', 'အသက်သာဆုံး', 'စျေးအကြီးဆုံး', 'ကျပန်း', 'ဆက်စပ်', 'အကြိုက်ဆုံး', 'ကျပန်း']],
                'product_id' => ['title' => 'ထုတ်ကုန် ID ဆက်စပ်ထုတ်ကုန်များ (အမျိုးအစားခွဲ = ဆက်စပ်) ကို ပြန်ပေးရန် အသုံးပြုသည်။', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'ထုတ်ကုန်ဒေတာအစုံ။ null သို့မဟုတ် spec ဖြစ်နိုင်ပါသည်။', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'စာသားကိုရှာပါ။', 'type' => 'ကြိုးတစ်ချောင်း', 'default' => null],
                'search_type' => ['title' => 'ရှာဖွေမှုအမျိုးအစား။ null သို့မဟုတ် အမျိုးအစား ဖြစ်နိုင်သည်။', 'type' => 'enum', 'default' => null, 'values' => [null, 'အမျိုးအစား']],
                'dir' => ['title' => 'အမျိုးအစား ID သို့မဟုတ် အမည်။ သတ်မှတ်သည့်အခါ ဤအမျိုးအစားတွင် ထုတ်ကုန်များကို ရယူပါ။', 'type' => 'တစ်ခုခု', 'default' => null],
                'products_only' => ['title' => 'ထုတ်ကုန်များသာ ရယူပါ (အမျိုးအစားများ မပါဝင်ပါ)။', 'type' => 'ဘူလီယံ', 'default' => false],
                'categories_only' => ['title' => 'အမျိုးအစားများသာ ရယူပါ (ထုတ်ကုန်များ မပါဝင်ပါ)။', 'type' => 'ဘူလီယံ', 'default' => false],
                'need_full_variants' => ['title' => 'မူကွဲအချက်အလက်အပြည့်အစုံကို ရယူပါ။', 'type' => 'ဘူလီယံ', 'default' => false],
                'optimized' => ['title' => '(ကုန်ပစ္စည်းများကို စီမံခန့်ခွဲသူအဖြစ် ရယူသည့်အခါမှသာ) ဈေးနှုန်း၊ နှုန်းထား သို့မဟုတ် စာရင်းဇယားများမပါဘဲ ထုတ်ကုန်စာရင်းကို ရယူပါ။', 'type' => 'ဘူလီယံ', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'ဇွတ်',
                    '_object' => 'ထုတ်ကုန်',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'ဇွတ်',
                    '_object' => 'အမျိုးအစား',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'အရာဝတ္ထု',
                    '_object' => 'အမျိုးအစား',
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
            'description' => 'ထုတ်ကုန်အချက်အလက်နှင့် စာရင်းဇယားများကို ရယူပါ။',
            'url' => 'ဆိုင်များ/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'အရာဝတ္ထု',
                    '_object' => 'ထုတ်ကုန်',
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
                    '_type' => 'ဇွတ်',
                    '_object' => 'ထုတ်ကုန်-ဒေတာ',
                    'title' => 'လွန်ခဲ့သော ရက် 30 ဒေတာ',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'အမှာစာများ အချက်အလက်',
                    'type' => 'အတု- count (int)|ရုပ်ပိုင်းဆိုင်ရာ- [count, delivery_state] (array)'
                ],

                'new_comments_count' => [
                    'title' => 'မှတ်ချက်အသစ်များ အရေအတွက်။',
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
            'description' => 'ဆိုင်တွင် ကုန်ပစ္စည်းအသစ်ထည့်ပါ။',
            'url' => 'ဆိုင်များ/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ထုတ်ကုန်/ဝန်ဆောင်မှု အမျိုးအစားကို သတ်မှတ်ပါ။', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ထုတ်ကုန်၏စျေးနှုန်း။', 'type' => 'မျှော', 'require' => true],
                'commission' => ['title' => 'စျေးနှုန်းတွင် ကော်မရှင်ထည့်ပါ။', 'type' => 'မျှော', 'default' => 0],
                'discount' => ['title' => 'မူရင်းထုတ်ကုန်စျေးနှုန်းလျှော့စျေး။', 'type' => 'မျှော', 'default' => 0],
                'dis_start' => ['title' => 'UTC အချိန်ဇုန်တွင် လျှော့စျေးစတင်ချိန် (ဖော်မက်- YYYY-MM-DD HH:mm:ss)။', 'type' => 'ရက်စွဲ', 'default' => null],
                'dis_end' => ['title' => 'UTC အချိန်ဇုန်အတွင်း လျှော့စျေး ကုန်ဆုံးချိန် (ဖော်မက်- YYYY-MM-DD HH:mm:ss)။', 'type' => 'ရက်စွဲ', 'default' => null],
                'currency' => ['title' => 'ငွေကြေး၊', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ထုတ်ကုန်ခေါင်းစဉ်။", 'type' => 'ကြိုးတစ်ချောင်း', 'require' => true],
                'title_en' => ['title' => 'ထုတ်ကုန်၏ အင်္ဂလိပ် ခေါင်းစဉ် (သို့မဟုတ် ခေါင်းစဉ်ခွဲ)', 'type' => 'ကြိုးတစ်ချောင်း', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'ကြိုးတစ်ချောင်း', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'ကြိုးတစ်ချောင်း', 'default' => null],
                'gtin' => ['title' => "ကုန်ပစ္စည်း၏ ကမ္ဘာလုံးဆိုင်ရာ ကုန်သွယ်မှု ပစ္စည်းနံပါတ်။", 'type' => 'ကြိုးတစ်ချောင်း', 'default' => null],
                'gpc' => ['title' => 'Google ထုတ်ကုန်အမျိုးအစားကုဒ်။', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "သင့်စတိုးတွင် ပစ္စည်း၏ လက်ရှိအခြေအနေ။", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'ထည့်သွင်းမှုအကွက်များ ရှိလျှင် (အတုအယောင်ထုတ်ကုန်များအတွက် အသုံးပြုသည်)။', 'type' => 'ကြိုးတစ်ချောင်း', 'default' => null],
                'inputs' => ['title' => 'ရွေးချယ်နိုင်သော ထည့်သွင်းမှုအကွက်များ (အတုအယောင်ထုတ်ကုန်များအတွက် အသုံးပြုသည်)။', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ရွေးချယ်နိုင်သော အထွက်အကွက်များ (အတုအယောင်ထုတ်ကုန်များအတွက် အသုံးပြုသည်)။', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ရွေးချယ်နိုင်သော ဘလော့ဂ် သို့မဟုတ် ဝဘ်ဆိုက် url။', 'type' => 'ကြိုးတစ်ချောင်း', 'default' => false],
                'status' => ['title' => 'ထုတ်ကုန်အခြေအနေ ဖွင့်/ပိတ်၊ ပုံသေသည် ဖွင့်သည်။', 'type' => 'enum', 'default' => 'ဖွင့်သည်။', 'values' => ['ဖွင့်သည်။', 'ပိတ်လိုက်']],
                'category_id' => ['title' => 'အမျိုးအစား ID။', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ပို့ဆောင်ချိန်နာရီ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'ထုတ်ကုန်ပုံစံ (Json)။', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ကုန်ပစ္စည်းအမှတ်တံဆိပ်..', 'type' => 'ကြိုးတစ်ချောင်း', 'default' => null],
                'warranty' => ['title' => 'အာမခံဖော်ပြချက်။ ။', 'type' => 'ကြိုးတစ်ချောင်း', 'default' => null],
                'original' => ['title' => 'ဒီထုတ်ကုန်က မူရင်းလား။', 'type' => 'ဘူလီယံ', 'default' => false],
                'return_warranty' => ['title' => 'အာမခံရက်နဲ့ ပြန်ပေးတယ်။', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'အရာဝတ္ထု',
                    '_object' => 'ထုတ်ကုန်',
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
            'description' => 'ဆိုင်တွင် ကုန်ပစ္စည်းအသစ်ထည့်ပါ။',
            'url' => 'ဆိုင်များ/{shop_id}/products/{product_id}/တည်းဖြတ်',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ထုတ်ကုန်/ဝန်ဆောင်မှု အမျိုးအစားကို သတ်မှတ်ပါ။', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ထုတ်ကုန်၏စျေးနှုန်း။', 'type' => 'မျှော', 'require' => true],
                'commission' => ['title' => 'စျေးနှုန်းတွင် ကော်မရှင်ထည့်ပါ။', 'type' => 'မျှော', 'default' => 0],
                'discount' => ['title' => 'မူရင်းထုတ်ကုန်စျေးနှုန်းလျှော့စျေး။', 'type' => 'မျှော', 'default' => 0],
                'dis_start' => ['title' => 'UTC အချိန်ဇုန်တွင် လျှော့စျေးစတင်ချိန် (ဖော်မက်- YYYY-MM-DD HH:mm:ss)။', 'type' => 'ရက်စွဲ', 'default' => null],
                'dis_end' => ['title' => 'UTC အချိန်ဇုန်အတွင်း လျှော့စျေး ကုန်ဆုံးချိန် (ဖော်မက်- YYYY-MM-DD HH:mm:ss)။', 'type' => 'ရက်စွဲ', 'default' => null],
                'currency' => ['title' => 'ငွေကြေး၊', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ထုတ်ကုန်ခေါင်းစဉ်။", 'type' => 'ကြိုးတစ်ချောင်း', 'require' => true],
                'title_en' => ['title' => 'ထုတ်ကုန်၏ အင်္ဂလိပ် ခေါင်းစဉ် (သို့မဟုတ် ခေါင်းစဉ်ခွဲ)', 'type' => 'ကြိုးတစ်ချောင်း', 'default' => null],
                'message' => ['title' => 'ထည့်သွင်းမှုအကွက်များ ရှိလျှင် (အတုအယောင်ထုတ်ကုန်များအတွက် အသုံးပြုသည်)။', 'type' => 'ကြိုးတစ်ချောင်း', 'default' => null],
                'inputs' => ['title' => 'ရွေးချယ်နိုင်သော ထည့်သွင်းမှုအကွက်များ (အတုအယောင်ထုတ်ကုန်များအတွက် အသုံးပြုသည်)။', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ရွေးချယ်နိုင်သော အထွက်အကွက်များ (အတုအယောင်ထုတ်ကုန်များအတွက် အသုံးပြုသည်)။', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ရွေးချယ်နိုင်သော ဘလော့ဂ် သို့မဟုတ် ဝဘ်ဆိုက် url။', 'type' => 'ကြိုးတစ်ချောင်း', 'default' => false],
                'status' => ['title' => 'ထုတ်ကုန်အခြေအနေ ဖွင့်/ပိတ်၊ ပုံသေသည် ဖွင့်သည်။', 'type' => 'enum', 'default' => 'ဖွင့်သည်။', 'values' => ['ဖွင့်သည်။', 'ပိတ်လိုက်']],
                'category_id' => ['title' => 'အမျိုးအစား ID။', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ပို့ဆောင်ချိန်နာရီ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'ထုတ်ကုန်ပုံစံ (Json)။', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ကုန်ပစ္စည်းအမှတ်တံဆိပ်..', 'type' => 'ကြိုးတစ်ချောင်း', 'default' => null],
                'warranty' => ['title' => 'အာမခံဖော်ပြချက်။ ။', 'type' => 'ကြိုးတစ်ချောင်း', 'default' => null],
                'original' => ['title' => 'ဒီထုတ်ကုန်က မူရင်းလား။', 'type' => 'ဘူလီယံ', 'default' => false],
                'return_warranty' => ['title' => 'အာမခံရက်နဲ့ ပြန်ပေးတယ်။', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'အရာဝတ္ထု',
                    '_object' => 'ထုတ်ကုန်',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'အောင်မြင်သော ထုတ်ကုန်အခြေအနေကို အပ်ဒိတ်လုပ်ပါ။', 'type' => 'ဘူလီယံ'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'sku မှ သိုလှောင်မှုမှ ကုန်ပစ္စည်းအသစ်ကို ဆိုင်သို့ထည့်ပါ။',
            'url' => 'ဆိုင်များ/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'ကြိုးတစ်ချောင်း', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'အလိုအလျောက် သတ်မှတ်အမျိုးအစား', 'type' => 'ဘူလီယံ', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'ဆိုင်ရှိ အမျိုးအစား ID အလိုက် ကုန်ပစ္စည်းကို ဤအမျိုးအစားသို့ ထည့်ပါ။', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'ထုတ်ကုန်၏စျေးနှုန်း။', 'type' => 'မျှော', 'require' => true],
                'currency' => ['title' => 'ငွေကြေး၊', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'အရေအတွက်', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'အရာဝတ္ထု',
                    '_object' => 'ထုတ်ကုန်',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'အောင်မြင်သော ထုတ်ကုန်အခြေအနေကို အပ်ဒိတ်လုပ်ပါ။', 'type' => 'ဘူလီယံ'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
